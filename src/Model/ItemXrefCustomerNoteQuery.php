<?php

use Base\ItemXrefCustomerNoteQuery as BaseItemXrefCustomerNoteQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_item_cust_xref' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByCustid(string $custID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method VItemXrefCustomerNoteQuery filterByCustid(string $custID)     Filter the Query on the arcucustid column
 *
 * FindOne()
 * 
 * FindByXXX()
 */
class ItemXrefCustomerNoteQuery extends BaseItemXrefCustomerNoteQuery {
	use QueryTraits;
}
