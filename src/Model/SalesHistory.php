<?php

use Base\SalesHistory as BaseSalesHistory;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_head_hist' table.
 *
 * NOTE: Foreign Key Relationship to Customer, CustomerShipto, SalesHistoryDetail
 */
class SalesHistory extends BaseSalesHistory {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const COLUMN_ALIASES = array(
		'ordernumber'     => 'oehhnbr',
		'custid'          => 'arcucustid',
		'shiptoid'        => 'arstshipid',
		'custpo'          => 'oehhcustpo',
		'total_total'     => 'oehhordrtot',
		'date_ordered'    => 'oehhordrdate',
		'status'          => 'oehhstat',
		'orderstatus'     => 'oehhstat',
		'subtotal_nontax' => 'OehhNonTaxSub',
		'subtotal_tax'    => 'OehhTaxSub',
		'total_freight'   => 'OehhFrtTot',
		'total_tax'       => 'OehhTaxTot',
		'shipto_name'     => 'oehhstname',
		'shipto_address1' => 'oehhstadr1',
		'shipto_address2' => 'oehhstadr2',
		'shipto_address3' => 'oehhstadr3',
		'shipto_country'  => 'oehhstctry',
		'shipto_city'     => 'oehhstcity',
		'shipto_state'    => 'oehhststat',
		'shipto_zip'      => 'oehhstzipcode',
		'date_invoiced'   => 'oehhinvdate',
		'contact'         => 'oehhcont',
		'phone_intl'      => 'oehhcontteleintl',
		'phone'           => 'oehhconttelenbr',
		'phone_ext'       => 'oehhcontteleext',
		'fax_intl'        => 'oehhcontfaxintl',
		'fax'             => 'oehhcontfaxnbr',
		'email'           => 'oehhcontemail',
		'heldby'          => 'oehhcrntuser',
		'takenby'         => 'oehhtakencode',
		'pickedby'        => 'oehhpickcode',
		'packedby'        => 'oehhpackcode',
		'verifiedby'      => 'oehhverifycode',
		'whse'            => 'intbwhse',
		'pricecode'       => 'artbpriccode',
		'taxcode'         => 'artbmtaxcode',
		'termscode'       => 'artmtermcd',
		'shipvia'         => 'artbshipvia',
		'salesperson_1'   => 'arspsaleper1',
		'salesperson_2'   => 'arspsaleper2',
		'salesperson_3'   => 'arspsaleper3',
		'shipcomplete'    => 'oehhshipcomp',
		'releasenumber'   => 'oehhreleasenbr',
		'year'            => 'oehhyear',
		'items'           => 'SalesHistoryDetails', // NOTE: Used for getting Detaisl via __call()
	);

	const STATUS_DESCRIPTIONS = array(
		'N' => 'new',
		'P' => 'picked',
		'V' => 'verified',
		'I' => 'invoiced'
	);

	/**
	 * Return Status Description for Sales History Order
	 *
	 * @return string
	 */
	public function status() {
		return self::STATUS_DESCRIPTIONS[$this->oehhstat];
	}

	/**
	 * Return if Order is Invoiced
	 * @return bool
	 */
	public function isInvoiced() {
		return true;
	}

	/**
	 * Returns if Order is Editable
	 *
	 * @return bool
	 */
	public function is_editable() {
		return false;
	}

	/**
	 * Dummy functon
	 *
	 * @return string
	 */
	public function getHeldby() {
		return '';
	}

	/**
	 * Returns the Number of Details Lines this Sales Order has
	 *
	 * @return bool
	 */
	public function count_items() {
		return SalesHistoryDetailQuery::create()->filterByOrdernumber($this->oehhnbr)->count();
	}

	/**
	 * Return the number of cases for this order
	 *
	 * @return int
	 */
	public function count_cases() {
		$q = SalesHistoryDetailQuery::create();
		$q->withColumn('SUM('.SalesHistoryDetail::get_aliasproperty('qty_cases').')', 'cases');
		$q->select('cases');
		$q->filterByOrdernumber($this->oehhnbr);
		return $q->findOne();
	}

	/**
	 * Return the total weight of items
	 *
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
	 *
	 * @return array
	 */
	public function itemids() {
		$q = SalesHistoryDetailQuery::create();
		$q->select(SalesHistoryDetail::get_aliasproperty('itemid'));
		$q->filterByOrdernumber($this->oehhnbr);
		return $q->find()->toArray();
	}

	/**
	 * Return the total number of qtys for order
	 *
	 * @return float
	 */
	public function sum_qty() {
		$q = SalesHistoryDetailQuery::create();
		$q->withColumn('SUM('.SalesHistoryDetail::get_aliasproperty('qty_ordered').')', 'sum');
		$q->select('sum');
		$q->filterByOrdernumber($this->oehhnbr);
		return $q->findOne();
	}

	/**
	 * Return if Lotserials have been assigned to this Order
	 * @return bool
	 */
	public function hasLotserials() {
		$q = SalesHistoryLotserialQuery::create();
		$q->filterByOrdernumber($this->oehhnbr);
		return boolval($q->count());
	}
}
