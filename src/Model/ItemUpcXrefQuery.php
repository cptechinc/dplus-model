<?php

use Base\ItemUpcXrefQuery as BaseItemUpcXrefQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'upc_item_xref' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByItemid(string $itemID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ItemUpcXref filterByItemid(string $itemID)      Return the first ItemUpcXref filtered by the inititemnbr column
 * 
 * FindOneByXXX()
 * 
 *
 * FindByXXX()
 *
 */
class ItemUpcXrefQuery extends BaseItemUpcXrefQuery {
	use QueryTraits;
}
