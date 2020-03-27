<?php

use Base\BookingDayCustomerQuery as BaseBookingDayCustomerQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_book_by_day_cust' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByCode()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  BookingDayCustomerQuery filterbyCustid(string $custID)      Filter the Query by the arccustid column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 */
class BookingDayCustomerQuery extends BaseBookingDayCustomerQuery {
	use QueryTraits;
}
