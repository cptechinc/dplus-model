<?php

use Base\NoteMnfrMiscQuery as BaseNoteMnfrMiscQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_mnfr_misc_det' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByMnfr($mnfrID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ItemWhseOrderNoteQuery filterByMnfrstring $mnfrID))      Filter the query by mnfrid column
 */
class NoteMnfrMiscQuery extends BaseNoteMnfrMiscQuery {
	use QueryTraits;
}
