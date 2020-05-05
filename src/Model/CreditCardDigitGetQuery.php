<?php

use Base\CreditCardDigitGetQuery as BaseCreditCardDigitGetQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_cust_crcd' table.
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
 * @method  CreditCardDigitGet findOneByCode(string $code)      Return the first artbcrcdcode filtered by the artbcrcdcode column
 *
 * FindByXXX()
 *
 *
 */
class CreditCardDigitGetQuery extends BaseCreditCardDigitGetQuery {
	use QueryTraits;
}
