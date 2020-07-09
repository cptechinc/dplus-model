<?php

use Base\CustomerExternalRef as BaseCustomerExternalRef;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'cust_ship_link' table.
 * 
 * This table is a lookup reference for customer / shipto and an external source such as
 * QuickBooks
 */
class CustomerExternalRef extends BaseCustomerExternalRef {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'custid'        => 'arcucustId',
		'shiptoid'      => 'arstshipid',
		'custid_ext'    => 'cslklinkcustid',
		'shiptoid_ext'  => 'cslklinkshipid',
		'date'		    => 'dateupdtd',
		'time'		    => 'timeupdtd'
	);
}
