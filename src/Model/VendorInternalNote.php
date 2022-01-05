<?php

use Base\VendorInternalNote as BaseVendorInternalNote;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_vend_ship_internal' table.
 */
class VendorInternalNote extends BaseVendorInternalNote {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'VEND';
	const DESC = 'Vend/Ship-From Internal Notes';

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

	/**
	 * Retur Note with defaults
	 * @return self
	 */
	public static function new() {
		$note = new self();
		$note->setType(self::TYPE);
		$note->setDescription(self::DESC);
		return $note;
	}
}
