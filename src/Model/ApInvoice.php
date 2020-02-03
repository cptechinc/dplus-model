<?php

use Base\ApInvoice as BaseApInvoice;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_invoice_head' table.
 *
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
		'invnbr'              => 'apidinvnbr',
		'vendorid'            => 'apvevendid',
		'vendorID'            => 'apvevendid',
		'ponbr'               => 'apihponbr',
		'checknumber_prepaid' => 'apihppchknbr',
		'checknumber'         => 'apihchknbr',
		'total'               => 'apihtotamt',
		'whse'                => 'intbwhse',
		'date_invoiced'       => 'apihinvdate'
	);

	/**
	 * Returns Items on the Invoice
	 *
	 * @uses self::get_details_query()
	 * @return ApInvoice[]|ObjectCollection
	 */
	public function get_details() {
		$q = $this->get_details_query();
		$q->filterOnlyItemids();
		return $q->find();
	}

	/**
	 * Returns Non Item Details on the Invoice (e.g. freight)
	 *
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
	 *
	 * @uses self::get_details_query()
	 * @return int
	 */
	public function count_details() {
		$q = $this->get_details_query();
		$q->filterOnlyItemids();
		return $q->count();
	}

	/**
	 * Returns Details Query
	 *
	 * NOTE: Filters Non-itemids such as 'freight'
	 * @return ApInvoiceDetailQuery
	 */
	protected function get_details_query() {
		$q = ApInvoiceDetailQuery::create();
		$q->filterByInvoicenumber($this->invoicenumber);
		return $q;
	}
}
