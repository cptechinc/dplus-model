<?php

use Base\SalesHistory as BaseSalesHistory;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_head_hist' table.
 *
 * NOTE: Foreign Key Relationship to Customer, CustomerShipto
 */
class SalesHistory extends BaseSalesHistory {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const COLUMN_ALIASES = array(
		'ordernumber'     => 'oehhnbr',
		'custid'          => 'arcucustid',
		'shiptoid'        => 'arstshipid',
		'custpo'          => 'oehhcustpo',
		'total_total'     => 'oehhoordrtot',
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
	 * Returns the Number of Details Lines this Sales Order has
	 *
	 * @return bool
	 */
	public function count_items() {
		return SalesHistoryDetailQuery::create()->filterByOrdernumber($this->oehhnbr)->count();
	}

	/**
	 * Returns Notes for the Sales Order
	 *
	 * @return SalesOrderNotes[]|ObjectCollection [description]
	 */
	public function get_notes() {
		return SalesHistoryNotesQuery::create()->filterByOrdernumber($this->oehhnbr)->filterByLine(0)->find();
	}

	/**
	 * Returns the number of Notes for the Sales Order
	 *
	 * @return int
	 */
	public function count_notes() {
		return SalesHistoryNotesQuery::create()->filterByOrdernumber($this->oehhnbr)->filterByLine(0)->count();
	}
}
