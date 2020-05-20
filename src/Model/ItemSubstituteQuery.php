<?php

use Base\ItemSubstituteQuery as BaseItemSubstituteQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_inv_sub' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByItemid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method ItemSubstituteQuery filterByItemid(string $itemID)      Return the Query filtered by the inititemnbr column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 * 
 */
class ItemSubstituteQuery extends BaseItemSubstituteQuery {
	use QueryTraits;
}
