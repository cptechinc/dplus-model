<?php

use Base\CustomerShipto as BaseCustomerShipto;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'ar_ship_to' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class CustomerShipto extends BaseCustomerShipto {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	protected $column_aliases = array(
		'id'           => 'arstshipid',
		'custID'       => 'arcucustid',
		'custid'       => 'arcucustid',
		'name'         => 'arstname',
		'custname'     => 'arstname',
		'address1'     => 'arstadr1',
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
		'ytd_invoices' => 'arstinvytd'
	);

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
}
