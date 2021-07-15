<?php

use Base\SalesOrder as BaseSalesOrder;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_header' table.
 *
 * NOTE: Foreign Key Relationship to Customer, CustomerShipto, SalesOrderDetail
 */
class SalesOrder extends BaseSalesOrder {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Hold Status Code
	 * NOTE: The code is Case Sensitive
	 * A = Customer is on Credit Hold
	 * B = A detail line did not meet minimum margin requirements, Was an A, C, or H before
	 * C = Over Credit Limit
	 * H = This order is on Hold
	 * M = A detail line did not meet minimum margin requirements, line quantity, or order amount.
	 *     Same as B but was not on hold for other reasons
	 * N = Not on Hold
	 * R = Review by Sales Rep
	 * r = reviewed by Sales Rep
	 * n = Not on hold, released by user
	 * S = On hold, waiting for transfer
	 * T = On hold because of Terms or Rejected Credit Card
	 * W = On hold because this a a new Web Order
	 * @var string
	 */
	protected $oehdstat;

	/**
	 * Pick Queue Value
	 * If L, then it's locked for line deletions
	 * @var string
	 */
	protected $oehdpickqueue;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'  => 'oehdnbr',
		'custid'       => 'arcucustid',
		'shiptoid'     => 'arstshipid',
		'custpo'       => 'oehdcustpo',
		'total_total'  => 'oehdordrtot',
		'date_ordered' => 'oehdordrdate',
		'orderdate'    => 'oehdordrdate',
		'date_requested'  => 'oehdrqstdate',
		'date_canceled'   => 'oehdcancdate',
		'date_taken'      => 'oehdtakendate',
		'releasenumber'   => 'oehdreleasenbr',
		'status'          => 'oehdstat',
		'orderstatus'     => 'oehdstat',
		'subtotal_nontax' => 'OehdNonTaxSub',
		'subtotal_tax'    => 'OehdTaxSub',
		'total_freight'   => 'OehdFrtTot',
		'total_tax'       => 'OehdTaxTot',
		'shipto_name'     => 'oehdstname',
		'shipto_address1' => 'oehdstadr1',
		'shipto_address2' => 'oehdstadr2',
		'shipto_address3' => 'oehdstadr3',
		'shipto_country'  => 'oehdstctry',
		'shipto_city'     => 'oehdstcity',
		'shipto_state'    => 'oehdststat',
		'shipto_zip'      => 'oehdstzipcode',
		'contact'         => 'oehdcont',
		'phone_intl'      => 'oehdcontteleintl',
		'phone'           => 'oehdconttelenbr',
		'phone_ext'       => 'oehdcontteleext',
		'fax_intl'        => 'oehdcontfaxintl',
		'fax'             => 'oehdcontfaxnbr',
		'email'           => 'oehdcontemail',
		'heldby'          => 'oehdcrntuser',
		'takenby'         => 'oehdtakencode',
		'pickedby'        => 'oehdpickcode',
		'packedby'        => 'oehdpackcode',
		'verifiedby'      => 'oehdverifycode',
		'whse'            => 'intbwhse',
		'pricecode'       => 'artbpriccode',
		'taxcode'         => 'artbmtaxcode',
		'termscode'       => 'artmtermcd',
		'shipvia'         => 'artbshipvia',
		'salesperson_1'   => 'arspsaleper1',
		'salesperson_2'   => 'arspsaleper2',
		'salesperson_3'   => 'arspsaleper3',
		'shipcomplete'    => 'oehdshipcomp',
		'original_total_total'  => 'oehdoordrtot',
		'items'           => 'SalesOrderDetails', // NOTE: Used for getting Detaisl via __call()
		'pickqueue'       => 'oehdpickqueue',
	);

	const LENGTH = 10;
	const STATUS_NEW = 'N';
	const PICKQUEUE_LOCKED = 'L';

	/**
	 * Order Statuses and the values for their description
	 *
	 * @var array
	 */
	const STATUS_DESCRIPTIONS = array(
		'N' => 'new',
		'P' => 'picked',
		'V' => 'verified',
		'I' => 'invoiced'
	);

	/**
	 * Return if Order is to Ship Complete
	 * @return bool
	 */
	public function is_shipcomplete() {
		return $this->shipcomplete == 'Y';
	}

	/**
	 * Return if Order can Delete Lines
	 * @return bool
	 */
	public function canDeleteLines() {
		return $this->pickqueue != self::PICKQUEUE_LOCKED;
	}

	/**
	 * Return the status description based of the order status
	 * @return void
	 */
	public function status() {
		return self::STATUS_DESCRIPTIONS[$this->oehdstat];
	}

	/**
	 * Return if the Sales Order is Invoiced
	 * @return bool
	 */
	public function is_invoiced() {
		return $this->oehdstat == 'I';
	}

	/**
	 * Adds Leading Zeroes to Sales Order Number
	 * @param  string $ordn Sales Order Number ex.    4290100
	 * @return string       Sales Order Number ex. 0004290100
	 */
	public static function get_paddedordernumber($ordn) {
		 return str_pad($ordn , self::LENGTH , "0", STR_PAD_LEFT);
	}

	/**
	 * Returns if there is tracking data available in Sales Order Numbers
	 * @return bool
	 */
	public function has_tracking() {
		return boolval(SalesOrderShipmentQuery::create()->filterByOrdernumber($this->oehdnbr)->count());
	}

	/**
	 * Returns if Sales Order is being edited via the heldby alias
	 * @return bool
	 */
	public function is_beingedited() {
		return boolval(strlen($this->heldby));
	}

	/**
	 * Returns if Sales Order is able to edited via the heldby alias
	 * @return bool
	 */
	public function is_editable() {
		return strlen($this->heldby) == 0;
	}

	public function is_locked() {
		return strlen($this->heldby) > 0;
	}

	/**
	 * Returns the Number of Details Lines this Sales Order has
	 * @return bool
	 */
	public function count_items() {
		return SalesOrderDetailQuery::create()->filterByOrdernumber($this->oehdnbr)->count();
	}

	/**
	 * Return the number of cases for this order
	 * @return int
	 */
	public function count_cases() {
		$q = SalesOrderDetailQuery::create();
		$q->withColumn('SUM('.SalesOrderDetail::get_aliasproperty('qty_cases').')', 'cases');
		$q->select('cases');
		$q->filterByOrdernumber($this->oehdnbr);
		return $q->findOne();
	}

	/**
	 * Return the total weight of items
	 * @return float
	 */
	public function total_weight() {
		$itemIDs = $this->itemids();
		$q = ItemMasterItemQuery::create();
		$q->withColumn('SUM('.ItemMasterItem::get_aliasproperty('weight').')', 'total');
		$q->select('total');
		$q->filterByItemid($itemIDs);
		return $q->findOne();
	}

	/**
	 * Return the itemIDs found on the sales order
	 * @return array
	 */
	public function itemids() {
		$q = SalesOrderDetailQuery::create();
		$q->select(SalesOrderDetail::get_aliasproperty('itemid'));
		$q->filterByOrdernumber($this->oehdnbr);
		return $q->find()->toArray();
	}

	/**
	 * Return the total number of qtys for order
	 * @return float
	 */
	public function sum_qty() {
		$q = SalesOrderDetailQuery::create();
		$q->withColumn('SUM('.SalesOrderDetail::get_aliasproperty('qty_ordered').')', 'sum');
		$q->select('sum');
		$q->filterByOrdernumber($this->oehdnbr);
		return $q->findOne();
	}

	/**
	 * Return if Lotserials have been assigned to this Order
	 * @return bool
	 */
	public function hasLotserials() {
		$q = SalesOrderLotserialQuery::create();
		$q->filterByOrdernumber($this->oehdnbr);
		return boolval($q->count());
	}
}
