<?php

use Base\VendorOrderNotesQuery as BaseVendorOrderNotesQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_vend_ship_order' table.
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
 * @method  VendorShipfrom[]|Objectcollection findByVendorid(string $vendorID)     Return the VendorShipfrom Objects filtered by the ApveVendId column
 * 
 */
class VendorOrderNotesQuery extends BaseVendorOrderNotesQuery {
	use QueryTraits;
}
