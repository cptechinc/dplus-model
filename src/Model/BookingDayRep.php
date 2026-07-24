<?php

declare(strict_types=1);

use Base\BookingDayRep as BaseBookingDayRep;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_book_by_day_rep' table.
 *	FKRELATIONSHIPS: SalesPerson
 */
class BookingDayRep extends BaseBookingDayRep {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'salesperson1'  => 'arspsaleper1',
		'bookingdate'   => 'bkgrdate',
		'amount'     => 'bkgrnetamt',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd',

		// ALIASES for Foreign Keys
		'salesperson'  => 'salesPerson',
	];
}
