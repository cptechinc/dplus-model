<?php

use Base\Customer as BaseCustomer;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_mast' table.
 *
 * NOTE: Foreign Key Relationship to CustomerCommissionCode, Shipvia
 */

class Customer extends BaseCustomer {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const STATUS_ACTIVE = 'A';
	const YN_TRUE  = 'Y';
	const YN_FALSE = 'N';

	const REQUIRE_PO_DESCRIPTIONS = array(
		'N' => 'PO not forced - duplicates ok',
		'O' => 'PO not forced - no duplicates',
		'F' => 'PO forced - duplicates ok',
		'V' => 'PO forced - no duplicates',
	);

	const REQUIRE_PO_FORCED = array('F', 'V');
	const REQUIRE_PO_DUPLICATES_ALLOWED = array('N', 'F');

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'custID'       => 'arcucustid',
		'id'           => 'arcucustid',
		'custid'       => 'arcucustid',
		'name'         => 'arcuname',
		'custname'     => 'arcuname',
		'address1'     => 'arcuadr1',
		'address2'     => 'arcuadr2',
		'address3'     => 'arcuadr3',
		'country'      => 'arcuctry',
		'city'         => 'arcucity',
		'state'        => 'arcustat',
		'zip'          => 'arcuzipcode',
		'salesperson1' => 'arspsaleper1',
		'salesperson2' => 'arspsaleper2',
		'salesperson3' => 'arspsaleper3',
		'shipvia'      => 'artbshipvia',
		'termscode'    => 'artmtermcd',
		'lastsaledate' => 'arculastsaledate',
		'mtd_sales'    => 'arcusalemtd',
		'mtd_invoices' => 'arcuinvmtd',
		'ytd_sales'    => 'arcusaleytd',
		'ytd_invoices' => 'arcuinvytd',
		'highestbalance' => 'arcuhighbal',
		'creditlimit'    => 'arcucredlmt',
		'has_charge'     => 'arcufinchrg',
		'financecharge'  => 'arcunewfc', // Current Finance Charge
		'warehouse'      => 'intbwhse',
		'taxcode'        => 'artbmtaxcode',
		'type'           => 'artbtypecode',
		'pricecode'      => 'artbpriccode',
		'credithold'     => 'arcucredhold',
		'taxexemptcode'  => 'arcutaxexemnbr',
		'active'         => 'arcuactiveinactive',
		'require_po'     => 'arcucustpoparam',
	);

	/**
	 * Return if Customer Is Active
	 * @return bool
	 */
	public function is_active() {
		return $this->active == self::STATUS_ACTIVE;
	}

	/**
	 * Return if PO is required
	 * @return bool
	 */
	public function require_po() {
		return in_array($this->require_po, self::REQUIRE_PO_FORCED);
	}

	/**
	 * Returns CustomerShipto objects for Customer
	 *
	 * @return ObjectCollection[] CustomerShipto
	 */
	public function get_shiptos() {
		$query = new CustomerShiptoQuery();
		return $query->findByCustid($this->id);
	}

	/**
	 * Returns the Number of CustomerShiptos with this Customer ID
	 *
	 * @return int Number of CustomerShipto
	 */
	public function count_shiptos() {
		$query = new CustomerShiptoQuery();
		return $query->countByCustid($this->id);
	}

	/**
	 * Return CustomerShipto
	 *
	 * @param string $shiptoid
	 * @return CustomerShipto
	 */
	public function get_shipto($shiptoid) {
		$query = new CustomerShiptoQuery();
		$query->filterByCustid($this->id);
		return $query->findOne();
	}

	/**
	 * Returns the total Sales Amount of the last specified months
	 *
	 * @param  int  $months Number of Months Back
	 * @return float        Total Sales Amount
	 */
	public function get_lastxmonthsamount(int $months = 1) {
		$query = new CustomerQuery();
		return $query->get_lastxmonthsamount($this->id, $months);
	}

	/**
	 * Returns the total Number of Invoices in the last #months
	 *
	 * @param  int  $months Number of Months Back
	 * @return int          Number of Invoices
	 */
	public function get_lastxmonthscount(int $months = 1) {
		$query = new CustomerQuery();
		return $query->get_lastxmonthscount($this->id, $months);
	}

	/**
	 * Return Sales Amount for $months back
	 *
	 * @param  int   $monthsback
	 * @return float             Sales Amount
	 */
	public function get_24monthsale($monthsback = 1) {
		$property = "arcusale24mo$monthsback";
		return $this->$property;
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
		$query->filterbyCustId($this->id);
		return $query->count();
	}

	/**
	 * Returns the Sum of the Sales Orders totals for this Customer ID
	 * @return float SUM(salesordertotal)
	 */
	public function get_orders_amount() {
		$query = new SalesOrderQuery();
		$query->filterbyCustId($this->id);
		$query->select_sum_ordertotal();
		return $query->findOne();
	}
}
