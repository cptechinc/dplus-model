<?php

use Base\PrResourceQuery as BasePrResourceQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'pr_resource_cd' table.
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
 * @method  PrResource findOneByCode(string $code)      Return the first PrResource filtered by the PmtbDeptId column
 *
 * FindByXXX()
 *
 */
class PrResourceQuery extends BasePrResourceQuery {
	use QueryTraits;
}
