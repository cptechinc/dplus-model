<?php

use Base\SysopOptionalCodeQuery as BaseSysopOptionalCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'sys_opt_optcode' table.
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
 * @method  SysopOptionalCode findOneByCode(string $code)      Return the first SysopOptionalCode filtered by the aptbbuyrcode column
 *
 * FindByXXX()
 *
 *
 */
class SysopOptionalCodeQuery extends BaseSysopOptionalCodeQuery {
	use QueryTraits;
}
