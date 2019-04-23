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
	protected $column_aliases = array(
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
		'ytd_invoices' => 'arcuinvytd'
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
}
