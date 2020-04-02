<?php

use Base\BookingQuery as BaseBookingQuery;
use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_book_log_head' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByOrderNumber()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  BookingQuery filterByOrderNumber(string $ordn)  filter the query by the bklhordrnbr column
 * 
 * FindOneByXXX()
 *
 *
 * FindByXXX()
 */
class BookingQuery extends BaseBookingQuery {
	use QueryTraits;
}
