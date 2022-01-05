<?php

use Base\VendorInternalNoteQuery as BaseVendorInternalNoteQuery;

use Dplus\Model\QueryTraits;

/**
 * Skeleton subclass for performing query and update operations on the 'notes_vend_ship_internal' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findByVendorid(string $vendorID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOne()
 * 
 * FindByXXX()
 * @method  VendorInternalNote[]|Objectcollection findByVendorid(string $vendorID)     Return the VendorInternalNote Objects filtered by the ApveVendId column
 *
 */
class VendorInternalNoteQuery extends BaseVendorInternalNoteQuery {
	use QueryTraits;
}
