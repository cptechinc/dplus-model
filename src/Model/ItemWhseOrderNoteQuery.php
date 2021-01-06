<?php

use Base\ItemWhseOrderNoteQuery as BaseItemWhseOrderNoteQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_item_wh_order' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByItemid($itemID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ItemWhseOrderNoteQuery filterByItemid(string $ItemID)      Filter the query by inititemnbr column
 *
 */
class ItemWhseOrderNoteQuery extends BaseItemWhseOrderNoteQuery {
	use QueryTraits;
}
