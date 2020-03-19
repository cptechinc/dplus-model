<?php

use Base\TaxCodeCustomerQuery as BaseTaxCodeCustomerQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_cust_ctax' table.
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
 * @method  TaxCodeCustomer findOneByCode(string $code)      Return the first TaxCodeCustomer filtered by the artbctaxcode column
 *
 * FindByXXX()
 *
 *
 */
class TaxCodeCustomerQuery extends BaseTaxCodeCustomerQuery {
	use QueryTraits;
}
