<?php

use Base\ApTypeCodeQuery as BaseApTypeCodeQuery;

use Dplus\Model\QueryTraits;


/**
 * Class for performing query and update operations on the 'ap_type_code' table.
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
 * @method  ApTypeCode findOneByCode(string $code)      Return the first ApTypeCode filtered by the aptbtypecode column
 *
 * FindByXXX()
 *
 */
class ApTypeCodeQuery extends BaseApTypeCodeQuery {
	use QueryTraits;
}
