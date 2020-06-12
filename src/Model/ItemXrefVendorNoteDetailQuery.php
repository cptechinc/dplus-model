<?php

use Base\ItemXrefVendorNoteDetailQuery as BaseItemXrefVendorNoteDetailQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_vend_xref_det' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByCode()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOneByXXX()
 * @method  ApBuyer findOneByCode(string $code)      Return the first ApBuyercode filtered by the aptbuyrcode column
 *
 * FindByXXX()
 *
 *
 */
class ItemXrefVendorNoteDetailQuery extends BaseItemXrefVendorNoteDetailQuery {
	use QueryTraits;
}
