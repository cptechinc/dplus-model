<?php

use Base\ItemInternalNoteQuery as BaseItemInternalNoteQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_item_internal' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByItemid($itemID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ItemInternalNoteQuery filterByItemid(string $ItemID)      Filter the query inititemnbr column
 *
 */
class ItemInternalNoteQuery extends BaseItemInternalNoteQuery {
	use QueryTraits;
}
