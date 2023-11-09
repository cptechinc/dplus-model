<?php

use Base\ApInvoice as BaseApInvoice;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_invoice_head' table.
 * NOTE: Foreign Key Relationship to Vendor, Purchase Order
 */
class ApInvoice extends BaseApInvoice {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'invoicenumber'       => 'apihinvnbr',
		'invnbr'              => 'apihinvnbr',
		'vendorid'            => 'apvevendid',
		'vendorID'            => 'apvevendid',
		'ponbr'               => 'apihponbr',
		'checknumber_prepaid' => 'apihppchknbr',
		'checknumber'         => 'apihchknbr',
		'total'               => 'apihtotamt',
		'whse'                => 'intbwhse',
		'date_invoiced'       => 'apihinvdate',
		'date_discount'       => 'apihdiscdate',
		'date_due'            => 'apihduedate',
		'total'               => 'apihtotamt',
		'discount'            => 'apihdiscamt',
		'paytoname'           => 'apihptname',
		'paytoaddress'        => 'apihptadr1',
		'paytoaddress1'       => 'apihptadr1',
		'paytoaddress2'       => 'apihptadr2',
		'paytoaddress3'       => 'apihptadr3',
		'paytocountry'        => 'apihptcountry',
		'paytocity'           => 'apihptcity',
		'paytostate'          => 'apihptstat',
		'paytozip'            => 'apihptzipcode',
		'reference'           => 'apihinvref'
	);

	/**
	 * Returns Items on the Invoice
	 * @uses self::get_details_query()
	 * @return ApInvoice[]|ObjectCollection
	 */
	public function get_details() {
		$q = $this->get_details_query();
		$q->filterOnlyItemids();
		return $q->find();
	}

	/**
	 * Returns Items on the Invoice
	 * @uses self::get_details_query()
	 * @return ApInvoice[]|ObjectCollection
	 */
	public function getAllItems() {
		$q = $this->get_details_query();
		return $q->find();
	}

	/**
	 * Returns Items on the Invoice
	 * @uses self::get_details_query()
	 * @return ApInvoice[]|ObjectCollection
	 */
	public function getItems() {
		$q = $this->get_details_query();
		$q->filterOnlyItemids();
		return $q->find();
	}

	/**
	 * Returns Non-Items on the Invoice
	 * @uses self::get_details_query()
	 * @return ApInvoice[]|ObjectCollection
	 */
	public function getNonItems() {
		$q = $this->get_details_query();
		$q->filterOnlyNonItemids();
		return $q->find();
	}

	/**
	 * Returns Non Item Details on the Invoice (e.g. freight)
	 * @uses self::get_details_query()
	 * @return ApInvoice[]|ObjectCollection
	 */
	public function get_details_misc() {
		$q = $this->get_details_query();
		$q->filterOnlyNonItemids();
		return $q->find();
	}

	/**
	 * Returns the number Items on the Invoice
	 * @uses self::get_details_query()
	 * @return int
	 */
	public function count_details() {
		$q = $this->get_details_query();
		$q->filterOnlyItemids();
		return $q->count();
	}

	/**
	 * Returns the number Items on the Invoice
	 * @uses self::get_details_query()
	 * @return int
	 */
	public function countItems() {
		$q = $this->get_details_query();
		$q->filterOnlyItemids();
		return $q->count();
	}

	/**
	 * Returns Items on the Invoice
	 * @uses self::get_details_query()
	 * @return ApInvoice[]|ObjectCollection
	 */
	public function getCostAllItems() {
		$col = ApInvoiceDetail::aliasproperty('amount');
		$q = $this->get_details_query();
		$q->withColumn("SUM($col)", 'total');
		$q->select('total');
		return $q->findOne();
	}

	/**
	 * Returns Details Query
	 * NOTE: Filters Non-itemids such as 'freight'
	 * @return ApInvoiceDetailQuery
	 */
	protected function get_details_query() {
		$q = ApInvoiceDetailQuery::create();
		$q->filterByInvoicenumber($this->invoicenumber);
		return $q;
	}
}
