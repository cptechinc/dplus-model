<?php

use Base\ItemXrefVendorNoteInternalQuery as BaseItemXrefVendorNoteInternalQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_vend_xref_internal' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByVendorid($vendorID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ApBuyer filterByVendorid(string $vendorID) Filter the Query on the the apvevendid column
 *
 * FindOneByXXX()
 *
 * FindByXXX()
 *
 */
class ItemXrefVendorNoteInternalQuery extends BaseItemXrefVendorNoteInternalQuery {
	use QueryTraits;
}
