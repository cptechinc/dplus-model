<?php

use Base\WarehouseNote as BaseWarehouseNote;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_whse_invc_stmt' table.
 *
 * NOTE: Foreign Key Relationship to Warehouse
 */
class WarehouseNote extends BaseWarehouseNote {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE_INVOICE  = 'IWHS';
	const TYPE_STATEMENT = 'SWHS';

	/**
	 * Note Types
	 */
	const TYPES = array(
		'IWHS',
		'SWHS'
	);

	/**
	 * Note Types
	 */
	const TYPES_DESCRIPTIONS = array(
		'IWHS' => 'invoice',
		'SWHS' => 'statement'
	);

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'        => 'qntype',
		'desc'        => 'qntypedesc',
		'description' => 'qntypedesc',
		'sequence'  => 'qnseq',
		'whse'      => 'intbwhse',
		'whseID'    => 'intbwhse',
		'whseid'    => 'intbwhse',
		'note'      => 'qnnote',
		'key2'      => 'qnkey2',
		'date'      => 'dateupdtd',
		'time'      => 'timeupdtd',
	);

	/**
	 * Return Description for Note Type
	 *
	 * @param  string $type
	 * @return string
	 */
	public static function get_type_description($type) {
		return self::TYPES_DESCRIPTIONS[$type];
	}
}
