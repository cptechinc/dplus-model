<?php
// Dplus Model
use Dplus\Model\QueryTraits;
// Base
use Base\ArCashHeadQuery as BaseArCashHeadQuery;

/**
 * Class for performing query and update operations on the 'ar_cash_head' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByCustid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOneByXXX()
 * @method  ApBuyer findOneByCustid(string $custID)      Return the first ArCashHead filtered by the arcucustid column
 *
 * FindByXXX()
 */
class ArCashHeadQuery extends BaseArCashHeadQuery {
	use QueryTraits;
}
