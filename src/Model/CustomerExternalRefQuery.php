<?php

use Base\CustomerExternalRefQuery as BaseCustomerExternalRefQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'cust_ship_link' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByCustid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ApBuyer filterByCustid(string $custID)   filter The Query on the arcucustid column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 */
class CustomerExternalRefQuery extends BaseCustomerExternalRefQuery {
	use QueryTraits;
}
