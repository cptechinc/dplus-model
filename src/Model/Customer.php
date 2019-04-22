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
 	);


	protected function get_shiptos() {
		$query = new CustomerShiptoQuery();
		return $query->findOneByCustid($this->id);
	}
}
