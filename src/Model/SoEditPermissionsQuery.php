<?php

use Base\SoEditPermissionsQuery as BaseSoEditPermissionsQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_controls' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByUserid(string $userID)  
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 *
 * FindOneByXXX()
 * @method  SoEditPermissions findOneByUserid(string $userID)      Return the first SoEditPermissions filtered by the oetbcpercode column
 *
 * FindByXXX()
 *
 *
 *
 */
class SoEditPermissionsQuery extends BaseSoEditPermissionsQuery {
	use QueryTraits;
}
