<?php

use Base\BookingDayDetailQuery as BaseBookingDayDetailQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_book_by_day_det' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByOrdernumber($ordn)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  BookingDayDetailQuery filterByOrdernumber(string $ordn)  Filters the Query by the bkgdordrnbr column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class BookingDayDetailQuery extends BaseBookingDayDetailQuery {
	use QueryTraits;
}
