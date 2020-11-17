<?php

use Base\UserPermissionsItmQuery as BaseUserPermissionsItmQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_itm_perm' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByUserid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOneByXXX()
 * @method  UserPermissionsItm findOneByUserid(string $userID)      Return the first UserPermissionsItm filtered by the itmpuserid column
 *
 * FindByXXX()
 *
 */
class UserPermissionsItmQuery extends BaseUserPermissionsItmQuery {
	use QueryTraits;
}
