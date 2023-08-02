<?php
// Dplus Models
use Dplus\Model\QueryTraits;
// Base
use Base\NoteIntrQuery as BaseNoteIntrQuery;

/**
 * Class for performing query and update operations on the 'notes_tran_head_det' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByOrdn($ordn)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  NoteIntrQuery filterByOrdn(string $ordn)      Filter the query by inhdnbr column
 *
 */
class NoteIntrQuery extends BaseNoteIntrQuery {
	use QueryTraits;
}
