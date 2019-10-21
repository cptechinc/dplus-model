<?php

use Base\Vendor as BaseVendor;
use Base\VendorShipfromQuery;
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_vend_mast' table.
 *
 */
class Vendor extends BaseVendor {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'               => 'apvevendid',
		'vendorid'         => 'apvevendid',
		'vendorID'         => 'apvevendid',
		'name'             => 'apvename',
		'address'          => 'apveadr1',
		'address2'         => 'apveadr2',
		'address3'         => 'apveadr3',
		'country'          => 'apvectry',
		'city'             => 'apvecity',
		'state'            => 'apvestat',
		'zip'              => 'apvezipcode',
		'billto_name'      => 'apvepayname',
		'billto_address'   => 'apvepayadr1',
		'billto_address2'  => 'apvepayadr2',
		'billto_address3'  => 'apvepayadr3',
		'billto_country'   => 'apvepayctry',
		'billto_city'      => 'apvepaycity',
		'billto_state'     => 'apvepaystat',
		'billto_zip'       => 'apvepayzipcode',
		'gl_account'       => 'apvemglacct'
	);

	/**
	 * Return VendorShipfrom objects filtered by this ApveVendId
	 *
	 * @return VendorShipfrom[]|ObjectCollection
	 */
	public function get_shipfroms() {
		return VendorShipfromQuery::create()->findByApvevendid($this->apvevendid);
	}
}
