<?php

use Base\ItemOrderNoteQuery as BaseItemOrderNoteQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_item_order' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByItemid($itemID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ItemInternalNotesQuery filterByItemid(string $ItemID)      Filter the query inititemnbr column
 *
 */
class ItemOrderNoteQuery extends BaseItemOrderNoteQuery {
	use QueryTraits;
}
