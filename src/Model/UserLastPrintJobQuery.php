<?php

use Base\UserLastPrintJobQuery as BaseUserLastPrintJobQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'user_printer' table.
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
 * @method  UserLastPrintJob findOneByUserid(string $userID)      Return the first UserLastPrintJob filtered by the usrcid column
 *
 * FindByXXX()
 */
class UserLastPrintJobQuery extends BaseUserLastPrintJobQuery {
	use QueryTraits;
}
