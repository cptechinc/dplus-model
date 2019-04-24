<?php

use Base\Customer as BaseCustomer;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'ar_cust_mast' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Customer extends BaseCustomer {
	use ThrowErrorTrait;
	use MagicMethodTraits;

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
		'financecharge'  => 'arcufinchrg', // Current Finance Charge
		'warehouse'      => 'intbwhse',
		'taxcode'        => 'artbmtaxcode',
		'type'           => 'artbtypecode',
		'pricecode'      => 'artbpriccode',
		'credithold'     => 'arcucredhold',
		'taxexemptcode'  => 'arcutaxexemnbr'
	);

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
	 * Return Invoice Countfor $months back
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
}
