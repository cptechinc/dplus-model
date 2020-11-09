<?php

use Base\InvHazmatItemQuery as BaseInvHazmatItemQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_inv_hazmat' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByItemid($itemID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOneByXXX()
 * @method  InvHazmatItem findOneByItemid(string $itemID)      Return the first InvHazmatItem filtered by the inititemnbr column
 *
 * FindByXXX()
 *
 */
class InvHazmatItemQuery extends BaseInvHazmatItemQuery {
	use QueryTraits;
}
