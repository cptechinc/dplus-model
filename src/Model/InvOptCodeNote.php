<?php

use Base\InvOptCodeNote as BaseInvOptCodeNote;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_opt_code_in' table.
 * 
 * RELATIONSHIPS: ItemMasterItem
 */
class InvOptCodeNote extends BaseInvOptCodeNote {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const SYSTEM = 'IN';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'system'       => 'qnoptsys',
		'type'         => 'qntype',
		'description'  => 'qntypedesc',
		'itemid'       => 'inititemnbr',
		'sequence'     => 'qnseq',
		'note'         => 'qnnote',
		'key2'         => 'qnkey2',
		'form'         => 'qnform',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd',
		'item'         => 'itemMasterItem'
	);

}
