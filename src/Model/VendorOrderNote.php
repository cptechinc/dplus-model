<?php

declare(strict_types=1);

use Base\VendorOrderNote as BaseVendorOrderNote;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_vend_ship_order' table.
 */
class VendorOrderNote extends BaseVendorOrderNote {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'VEND';
	const DESC = 'Vend/Ship-From Order Notes';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
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
	];
}
