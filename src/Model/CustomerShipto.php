<?php

use Base\CustomerShipto as BaseCustomerShipto;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_ship_to' table.
 *
 * NOTE: Foreign Key Relationship to Customer
 */
class CustomerShipto extends BaseCustomerShipto {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const YN_TRUE  = 'Y';
	const YN_FALSE = 'N';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'arstshipid',
		'shiptoid'     => 'arstshipid',
		'custID'       => 'arcucustid',
		'custid'       => 'arcucustid',
		'name'         => 'arstname',
		'custname'     => 'arstname',
		'address1'     => 'arstadr1',
		'address'      => 'arstadr1',
		'address2'     => 'arstadr2',
		'address3'     => 'arstadr3',
		'country'      => 'arstctry',
		'city'         => 'arstcity',
		'state'        => 'arststat',
		'zip'          => 'arstzipcode',
		'salesperson1' => 'arspsaleper1',
		'salesperson2' => 'arspsaleper2',
		'salesperson3' => 'arspsaleper3',
		'shipvia'      => 'artbshipvia',
		'termscode'    => 'artmtermcd',
		'lastsaledate' => 'arstlastsaledate',
		'mtd_sales'    => 'arstsalemtd',
		'mtd_invoices' => 'arstinvmtd',
		'ytd_sales'    => 'arstsaleytd',
		'ytd_invoices' => 'arstinvytd',
		'warehouse'    => 'intbwhse',
		'require_po'   => 'arstcustpopram'
	);

	/**
	 * Return if PO is required
	 * @return bool
	 */
	public function require_po() {
		return in_array($this->require_po, Customer::REQUIRE_PO_FORCED);
	}

	/**
	 * Return Sales Amount for $months back
	 *
	 * @param  int   $monthsback
	 * @return float             Sales Amount
	 */
	public function get_24monthsale($monthsback) {
		$property = "arstsale24mo$monthsback";
		return $this->$property;
	}

	/**
	 * Return Invoice Countfor $months back
	 *
	 * @param  int   $monthsback
	 * @return float             Sales Amount
	 */
	public function get_24monthinvoice($monthsback) {
		$property = "arstinv24mo$monthsback";
		return $this->$property;
	}

	/**
	 * Returns the total Sales Amount of the last specified months
	 *
	 * @param  int  $months Number of Months Back
	 * @return float        Total Sales Amount
	 */
	public function get_lastxmonthsamount(int $months = 1) {
		$query = new CustomerShiptoQuery();
		return $query->get_lastxmonthsamount($this->custid, $this->id, $months);
	}

	/**
	 * Returns the total Number of Invoices in the last #months
	 *
	 * @param  int  $months Number of Months Back
	 * @return int          Number of Invoices
	 */
	public function get_lastxmonthscount(int $months = 1) {
		$query = new CustomerShiptoQuery();
		return $query->get_lastxmonthscount($this->custid, $this->id, $months);
	}

	/**
	 * Return Invoice Count for $months back
	 *
	 * @param  int   $monthsback
	 * @return float             Sales Amount
	 */
	public function get_24monthinvoicecount($monthsback = 1) {
		$property = "arcuinv24mo$monthsback";
		return $this->$property;
	}

	/**
	 * Returns if Customer is Tax Exempt
	 *
	 * @return bool
	 */
	public function is_taxexempt() {
		return !empty($this->arcutaxexemnbr);
	}

	/**
	 * Returns the Number of open orders this customer has
	 * @return int Number of Customer Open Orders
	 */
	public function get_orders_count() {
		$query = new SalesOrderQuery();
		$query->filterByCustid($this->custid);
		$query->filterByShiptoid($this->shiptoid);
		return $query->count();
	}

	/**
	 * Returns the Sum of the Sales Orders totals for this Customer ID
	 * @return float SUM(salesordertotal)
	 */
	public function get_orders_amount() {
		$query = new SalesOrderQuery();
		$query->filterByCustid($this->custid);
		$query->filterByShiptoid($this->shiptoid);
		$query->select_sum_ordertotal();
		return $query->findOne();
	}
}
