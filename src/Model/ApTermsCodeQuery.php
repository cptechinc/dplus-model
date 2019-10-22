<?php

use Base\ApTermsCodeQuery as BaseApTermsCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Skeleton subclass for performing query and update operations on the 'ap_term_code' table.
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
 * @method  ApTermsCode findOneByCode(string $code)      Return the first ApTermsCode filtered by the AptmTermCode column
 *
 * FindByXXX()
 *
 */
class ApTermsCodeQuery extends BaseApTermsCodeQuery {
	use QueryTraits;
}
