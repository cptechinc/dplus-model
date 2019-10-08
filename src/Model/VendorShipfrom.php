<?php

use Base\VendorShipfrom as BaseVendorShipfrom;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_ship_from' table.
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
 * @method  VendorShipfrom[]|ObjectCollection findByVendorid(string $vendorID)     Return VendorShipfrom Objects filtered by the ApveVendId column
 */
class VendorShipfrom extends BaseVendorShipfrom {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'vendorid'    => 'apvevendid',
		'vendorID'    => 'apvevendid',
		'shipfromid'  => 'apfmshipid',
		'name'        => 'apfmname',
		'address'     => 'apfmadr1',
		'address2'    => 'apfmadr2',
		'address3'    => 'apfmadr3',
		'country'     => 'apfmctry',
		'city'        => 'apfmcity',
		'state'       => 'apfmstat',
		'zip'         => 'apfmzipcode',
		'contact'     => 'apfmcont1',
		'contact2'    => 'apfmcont2',
		'shipvia'     => 'artbsviacode',
		'gl_account'  => 'apfmglacct'
	);
}
