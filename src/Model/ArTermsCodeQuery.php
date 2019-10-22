<?php

use Base\ArTermsCodeQuery as BaseArTermsCodeQuery;

use Dplus\Model\QueryTraits;

 /**
 * Class for performing query and update operations on the 'ar_term_code' table.
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
 * @method  ArTermsCode findOneByCode(string $code)      Return the first ArTermsCode filtered by the artmtermcd column
 *
 * FindByXXX()
 *
 */
class ArTermsCodeQuery extends BaseArTermsCodeQuery {
	use QueryTraits;
}
