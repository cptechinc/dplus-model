<?php

use Base\ApContactQuery as BaseApContactQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ap_contact' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByVendorid($vendorID)   
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ApContactQuery filterByVendorid(string $vendorID)      Filter the query by the apvevendid column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class ApContactQuery extends BaseApContactQuery {
	use QueryTraits;
}
