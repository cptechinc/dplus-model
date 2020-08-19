<?php

use Base\VendorOrderNotes as BaseVendorOrderNotes;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_vend_ship_order' table.
 */
class VendorOrderNotes extends BaseVendorOrderNotes {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'VEND';
	const DESC = 'Vend/Ship-From Order Notes';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'vendorid'    => 'apvevendid',
		'shipfromid'  => 'apfmshipid',
		'sequence'    => 'qnseq',
		'note'        => 'qnnote',
		'form'        => 'qnform',
		'type'        => 'qntype',
		'description' => 'qntypedesc',
		'key2'        => 'qnkey2',
		'date'        => 'dateupdtd',
		'time'        => 'timeupdtd'
	);
}
