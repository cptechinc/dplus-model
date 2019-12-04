<?php

use Base\CustomerTypeCodeQuery as BaseCustomerTypeCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Skeleton subclass for performing query and update operations on the 'ar_cust_type' table.
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
 * @method  ApBuyer findOneByCode(string $code)      Return the first CustomerTypeCode filtered by the ArtbTypeCode column
 *
 * FindByXXX()
 *
 *
 */
class CustomerTypeCodeQuery extends BaseCustomerTypeCodeQuery {
	use QueryTraits;
}
