<?php

use Base\ItemRevisionNoteQuery as BaseItemRevisionNoteQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_item_revision' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByItemid($itemID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ItemInternalNotesQuery filterByItemid(string $ItemID)      Filter the query inititemnbr column
 */
class ItemRevisionNoteQuery extends BaseItemRevisionNoteQuery {
	use QueryTraits;
}
