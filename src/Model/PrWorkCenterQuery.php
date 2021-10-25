<?php

use Base\PrWorkCenterQuery as BasePrWorkCenterQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'pr_work_center_cd' table.
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
 * @method  PrWorkCenter findOneByCode(string $code)      Return the first PrWorkCenter filtered by the PmtbDeptId column
 *
 * FindByXXX()
 *
 */
class PrWorkCenterQuery extends BasePrWorkCenterQuery {
	use QueryTraits;
}
