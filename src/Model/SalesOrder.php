<?php

use Base\SalesOrder as BaseSalesOrder;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'so_header' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
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
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'  => 'oehdnbr',
		'custid'       => 'arcucustid',
		'shiptoid'     => 'arstshipid',
		'custpo'       => 'oehdcustpo',
		'total_total'  => 'oehdoordrtot',
		'date_ordered' => 'oehdordrdate',
		'status'       => 'oehdstat',
		'orderstatus'     => 'oehdstat',
		'subtotal_nontax' => 'OehdNonTaxSub',
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
		'heldby'          => 'oehdcrntuser'
	);

	const LENGTH = 10;
	/**
	 * Order Statuses and the values for their description
	 *
	 * @var array
	 */
	public static $status_descriptions = array(
		'N' => 'new',
		'P' => 'picked',
		'V' => 'verified',
		'I' => 'invoiced'
	);

	/**
	 * Return the status description based of the order status
	 *
	 * @return void
	 */
	public function status() {
		return self::$status_descriptions[$this->oehdstat];
	}

	/**
	 * Return if the Sales Order is Invoiced
	 *
	 * @return bool
	 */
	public function isInvoiced() {
		return $this->oehdstat == 'I';
	}

	/**
	 * Adds Leading Zeroes to Sales Order Number
	 *
	 * @param  string $ordn Sales Order Number ex.    4290100
	 * @return string       Sales Order Number ex. 0004290100
	 */
	public static function get_paddedordernumber($ordn) {
		 return str_pad($ordn , self::LENGTH , "0", STR_PAD_LEFT);
	}

	/**
	 * Returns if there is tracking data available in Sales Order Numbers
	 *
	 * @return bool
	 */
	public function has_tracking() {
		return boolval(SalesOrderShipmentQuery::create()->filterByOrdernumber($this->oehdnbr)->count());
	}

	/**
	 * Returns if Sales Order is being edited via the heldby alias
	 *
	 * @return bool
	 */
	public function is_beingedited() {
		return boolval(strlen($this->heldby));
	}

	/**
	 * Returns if Sales Order is able to edited via the heldby alias
	 *
	 * @return bool
	 */
	public function is_editable() {
		return strlen($this->heldby) == 0;
	}

	/**
	 * Returns the Number of Details Lines this Sales Order has
	 *
	 * @return bool
	 */
	public function count_items() {
		return SalesOrderDetailQuery::create()->filterByOrdernumber($this->oehdnbr)->count();
	}

	/**
	 * Returns Notes for the SalesOrderDetail
	 *
	 * @return SalesOrderNotes[]|ObjectCollection [description]
	 */
	public function get_notes() {
		return SalesOrderNotesQuery::create()->filterByOrdernumber($this->oehdnbr)->filterByLine(0)->find();
	}

	/**
	 * Returns the number of Notes for the SalesOrderDetail
	 *
	 * @return int
	 */
	public function count_notes() {
		return SalesOrderNotesQuery::create()->filterByOrdernumber($this->oehdnbr)->filterByLine(0)->count();
	}
}
