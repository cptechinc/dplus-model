<?php

use Base\ArTaxCodeQuery as BaseArTaxCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_cust_mtax' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByCode()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 *
 * FindOneByXXX()
 * @method  ArTaxCode findOneByCode(string $code)      Return the first ArTaxCode filtered by the artbmtaxcode column
 *
 * FindByXXX()
 *
 *
 */
class ArTaxCodeQuery extends BaseArTaxCodeQuery {
	use QueryTraits;
}
