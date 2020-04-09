<?php

use Base\CustomerTermsCodeQuery as BaseCustomerTermsCodeQuery;

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
 * @method  CustomerTermsCode findOneByCode(string $code)      Return the first CustomerTermsCode filtered by the artmtermcd column
 *
 * FindByXXX()
 *
 *
 */
class CustomerTermsCodeQuery extends BaseCustomerTermsCodeQuery {
	use QueryTraits;
}
