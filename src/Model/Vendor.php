<?php

use Base\Vendor as BaseVendor;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_vend_mast' table.
 *
 * NOTE: Foreign Key Relationship to ApTypeCode, ApTermsCode, Shipvia, ApBuyer
 */
class Vendor extends BaseVendor {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const LENGTH_VENDORID = 6;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'               => 'apvevendid',
		'vendorid'         => 'apvevendid',
		'vendorID'         => 'apvevendid',
		'name'             => 'apvename',
		'address'          => 'apveadr1',
		'address2'         => 'apveadr2',
		'address3'         => 'apveadr3',
		'country'          => 'apvectry',
		'city'             => 'apvecity',
		'state'            => 'apvestat',
		'zip'              => 'apvezipcode',
		'payto_name'      => 'apvepayname',
		'payto_address'   => 'apvepayadr1',
		'payto_address2'  => 'apvepayadr2',
		'payto_address3'  => 'apvepayadr3',
		'payto_country'   => 'apvepayctry',
		'payto_city'      => 'apvepaycity',
		'payto_state'     => 'apvepaystat',
		'payto_zip'       => 'apvepayzipcode',
		'gl_account'       => 'apvemglacct',
		'date_lastpurchased' => 'apvelastpurdate',
		'date_opened'        => 'apvedateopen',
		'shipviacode'        => 'apvesviacode',
		'vendor_account'     => 'apveouracctnbr',
		'termscode'          => 'aptmtermcode',
		'typecode'           => 'aptbtypecode',
		'buyer_1'            => 'apvebuyrcode1',
		'terms'              => 'aptermscode',
		'type'               => 'aptypecode',
		'mtd_purchases_amt'    => 'apvepurmtd',
		'mtd_purchases_count'  => 'apvepomtd',
		'mtd_invoices_amt'     => 'apveinvcmtd',
		'mtd_invoices_count'   => 'apveicntmtd',
		'ytd_purchases_amt'    => 'apvepurytd',
		'ytd_purchases_count'  => 'apvepoytd',
		'ytd_invoices_amt'     => 'apveinvcytd',
		'ytd_invoices_count'   => 'apveicntytd'
	);

	/**
	 * Get Buyer X name
	 *
	 * @return string
	 */
	public function get_buyer_x_name(int $buyernumber) {
		$property = "apvebuyrcode$buyernumber";
		$q = ApBuyerQuery::create();
		$q->select(ApBuyer::get_aliasproperty('name'));
		return $q->findOneByCode($this->$property);
	}

	/**
	 * Get Vendor Phone Number
	 *
	 * @return string
	 */
	public function getPhone() {
		$q = $this->get_phonebookquery();
		$q->select(PhoneBook::get_aliasproperty('phone'));
		return $q->findOne();
	}

	/**
	 * Get Vendor Fax Number
	 *
	 * @return string
	 */
	public function getFax() {
		$q = $this->get_phonebookquery();
		$q->select(PhoneBook::get_aliasproperty('fax'));
		return $q->findOne();
	}

	/**
	 * Return Vendor Contact
	 *
	 * @return PhoneBook
	 */
	public function getVendorcontact() {
		$q = $this->get_phonebookquery();
		return $q->findOne();
	}

	/**
	 * Return Vendor Contacts
	 *
	 * @return PhoneBook[]|ObjectCollection
	 */
	public function getContacts() {
		$q = PhoneBookQuery::create();
		$q->filterTypeVendorContact();
		$q->filterByVendorid($this->id);
		$q->filterByShipfromid('');
		return $q->find();
	}

	/**
	 * Return Phonebook Query with Vendor Filters applied
	 *
	 * @return PhoneBookQuery
	 */
	public function get_phonebookquery() {
		$q = PhoneBookQuery::create();
		$q->filterTypeVendor();
		$q->filterByVendorid($this->id);
		$q->filterByShipfromid('');
		return $q;
	}

	/**
	 * Returns the Amount Left the Current Purchase Orders
	 * NOTE: Checks for detail status is not closed and that It is not released
	 * @return float
	 */
	public function get_purchaseorders_amt() {
		$ponbrs = $this->get_ponumbers();
		$q = PurchaseOrderDetailQuery::create();
		$sql = "SELECT (PodtQtyOrd - ifnull(PordQtyRec, 0)) * PodtCost as amt
				FROM po_detail
				LEFT JOIN po_receipt_det
				ON po_receipt_det.PohdNbr = po_detail.PohdNbr AND po_receipt_det.PodtLine = po_detail.PodtLine
				WHERE po_detail.PohdNbr IN (:ponbrs)
				AND PodtStat != 'C' AND PodtRel != 'N'";
		$params = array(':ponbrs' => implode(',', $ponbrs));
		$results = $q->execute_query($sql, $params);
		return $results->fetchColumn();
	}

	/**
	 * Return the Total Invoices amount for this Vendor
	 *
	 * @return float
	 */
	public function get_invoices_amt() {
		$q = ApInvoiceQuery::create();
		$q->filterByVendorid($this->vendorid);
		$column = APInvoice::get_aliasproperty('total');
		$q->withColumn("SUM($column)", 'total');
		$q->select('total');
		$q->filterByChecknumber(0);
		$q->filterByChecknumber_prepaid(0);
		return $q->findOne();
	}

	/**
	 * Returns all the PO Numbers associated with this Vendor
	 *
	 * @return array
	 */
	public function get_ponumbers() {
		$q = PurchaseOrderQuery::create();
		$q->select(PurchaseOrder::get_aliasproperty('ponbr'));
		$q->filterByVendorid($this->vendorID);
		return $q->find()->toArray();
	}

	/**
	 * Return the number of Purchases in the last X Months
	 *
	 * @param  int    $monthsback Number of Months to go back
	 * @return int
	 */
	public function count_last_x_months_purchases(int $monthsback = 1) {
		$q = VendorQuery::create();
		return $q->count_last_x_months_purchases($this->vendorid, $monthsback);
	}

	/**
	 * Return the total of Purchases Made in the last X Months
	 *
	 * @param  int    $monthsback Number of Months to go back
	 * @return float
	 */
	public function get_last_x_months_purchases_amt(int $monthsback = 1) {
		$q = VendorQuery::create();
		return $q->get_last_x_months_purchases_amt($this->vendorid, $monthsback);
	}

	/**
	 * Return the number of Invoices in the last X Months
	 *
	 * @param  int    $monthsback Number of Months to go back
	 * @return int
	 */
	public function count_last_x_months_invoices(int $monthsback = 1) {
		$q = VendorQuery::create();
		return $q->count_last_x_months_invoices($this->vendorid, $monthsback);
	}

	/**
	 * Return the total of Invoices in the last X Months
	 *
	 * @param  int    $monthsback Number of Months to go back
	 * @return float
	 */
	public function get_last_x_months_invoices_amt(int $monthsback = 1) {
		$q = VendorQuery::create();
		return $q->get_last_x_months_invoices_amt($this->vendorid, $monthsback);
	}
}
