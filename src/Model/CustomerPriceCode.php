<?php

use Base\CustomerPriceCode as BaseCustomerPriceCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'ar_cust_price' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class CustomerPriceCode extends BaseCustomerPriceCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'		   => 'artbpriccode',
		'code'		   => 'artbpriccode',
		'description'  => 'artbpricdesc',
		'surcharge'    => 'artbpricusesurchg',
		'percentage'   => 'artbpricsurchgpct',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
	);
}
