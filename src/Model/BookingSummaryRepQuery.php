<?php

use Base\BookingSummaryRepQuery as BaseBookingSummaryRepQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_book_by_rep_sumry' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneBySalesrep1($repID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ApBuyer findOneBySalesrep1(string $repID)  RFilter the Query by the arspsaleper1 column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class BookingSummaryRepQuery extends BaseBookingSummaryRepQuery {
	use QueryTraits;
}
