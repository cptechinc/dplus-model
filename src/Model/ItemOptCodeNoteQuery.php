<?php

use Base\ItemOptCodeNoteQuery as BaseItemOptCodeNoteQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_opt_code_in' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByItemid($itemID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ItemOptCodeNoteQuery filterByItemid(string $ItemID)      Filter the query inititemnbr column
 *
 */
class ItemOptCodeNoteQuery extends BaseItemOptCodeNoteQuery {
	use QueryTraits;
}
