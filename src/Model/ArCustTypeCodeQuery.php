<?php

use Base\ArCustTypeCodeQuery as BaseArCustTypeCodeQuery;

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
 * @method  ApBuyer findOneByCode(string $code)      Return the first ArCustTypeCode filtered by the ArtbTypeCode column
 *
 * FindByXXX()
 *
 *
 */
class ArCustTypeCodeQuery extends BaseArCustTypeCodeQuery {
	use QueryTraits;
}
