<?php

use Base\QuoteNotesQuery as BaseQuoteNotesQuery;

use Dplus\Model\QueryTraits;

 /**
 * Class for performing query and update operations on the 'notes_qt_head_det' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findByQuotenumber()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 *
 * FindOne
 * 
 * Find
 * @method  QuoteNotes[]|ObjectCollection findByQuotenumber(string $qnbr)      Return the QuoteNotes filtered by the Qthdid column
 *
 *
 */
class QuoteNotesQuery extends BaseQuoteNotesQuery {
	use QueryTraits;
}
