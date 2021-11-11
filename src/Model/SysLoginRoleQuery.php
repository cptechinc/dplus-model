<?php

use Base\SysLoginRoleQuery as BaseSysLoginRoleQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'sys_login_role' table.
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
 * @method  SysLoginRole findOneById(string $id)      Return the first SysLoginRolefiltered by the qtblrolecodecolumn
 *
 * FindByXXX()
 *
 *
 */
class SysLoginRoleQuery extends BaseSysLoginRoleQuery {
	use QueryTraits;
}
