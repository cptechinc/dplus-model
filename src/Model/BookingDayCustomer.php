<?php

use Base\BookingDayCustomer as BaseBookingDayCustomer;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_book_by_day_cust' table.
 * FKRELATIONSHIPS: Customer, CustomerShipto, SalesPerson
 */
class BookingDayCustomer extends BaseBookingDayCustomer {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'custid'        => 'arcucustid',
		'shiptoid'      => 'arstshipid',
		'bookingdate'   => 'bkgcdate',
		'salesperson1'  => 'arspsaleper1',
		'amount'        => 'bkgcnetamt',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd',
		// ALIASES for Foreign Keys
		'shipto'        => 'customerShipto'
	);
}
