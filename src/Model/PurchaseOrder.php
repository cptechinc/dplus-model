<?php

use Base\PurchaseOrder as BasePurchaseOrder;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_head' table.
 *
 */
class PurchaseOrder extends BasePurchaseOrder {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ponbr'                  => 'pohdnbr',
		'status'                 => 'pohdstat',
		'poref'                  => 'pohdref',
		'vendorID'               => 'apvevendid',
		'vendorid'               => 'apvevendid',
		'to_name'                => 'pohdtoname',
		'to_address'             => 'pohdtoadr1',
		'to_address2'            => 'pohdtoadr2',
		'to_address3'            => 'pohdtoadr3',
		'to_country'             => 'pohdtoctry',
		'to_city'                => 'pohdtocity',
		'to_state'               => 'pohdtostate',
		'to_zip'                 => 'pohdtozip',
		'contact'                => 'pohdcont',
		'email'                  => 'pohdemailaddr',
		'date_ordered'           => 'pohdordrdate',
		'shipvia'                => 'artbsviacode',
		'phone'                  => 'pohdtelenbr',
		'phone_intl'             => 'pohdteleintl',
		'phone_extension'        => 'pohdteleext',
		'fax'                    => 'pohdfaxnbr',
		'fax_intl'               => 'pohdfaxintl',
	);
}
