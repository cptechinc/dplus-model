<?php

use Base\VendorQuery as BaseVendorQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ap_vend_mast' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByVendorid(string $vendorID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOne()
 * @method  Vendor findOneByVendorid(string $vendorID)     Return the first Vendor filtered by the ApveVendId column
 *
 * FindByXXX()
 *
 */
class VendorQuery extends BaseVendorQuery {
	use QueryTraits;
}
