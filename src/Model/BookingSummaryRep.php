<?php

declare(strict_types=1);

use Base\BookingSummaryRep as BaseBookingSummaryRep;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_book_by_rep_sumry' table.
 */
class BookingSummaryRep extends BaseBookingSummaryRep {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'salesperson1'  => 'arspsaleper1',
		'bookingdate'   => 'bkgrdate',
		'sold_today'    => 'bkrptoday',
		'sold_week'     => 'bkrpweektodate',
		'sold_month'    => 'bkrpmonthtodate',

		// ALIASES for Foreign Keys
		'salesperson'  => 'salesPerson',
	];
}
