<?php

use Base\VendorShipfromQuery as BaseVendorShipfromQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ap_ship_from' table.
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
 */
class VendorShipfromQuery extends BaseVendorShipfromQuery {
	use QueryTraits;
}
