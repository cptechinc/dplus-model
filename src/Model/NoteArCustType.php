<?php

use Base\NoteArCustType as BaseNoteArCustType;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_cust_type' table.
 */
class NoteArCustType extends BaseNoteArCustType {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 4;

	/**
	 * Note Types
	 */
	const TYPES = ['SCTP', 'ICTP', 'PCTP', 'KCTP'];

	/**
	 * Note Types
	 */
	const TYPE_ALIASES = [
		'statement' => 'SCTP',
		'invoice'   => 'ICTP',
		'pick'      => 'PCTP',
		'pack'      => 'KCTP'
	];

	/**
	 * Note Types
	 */
	const TYPES_DESCRIPTIONS = array(
		'SCTP' => 'statement',
		'ICTP' => 'invoice',
		'PCTP' => 'pick ticket',
		'KCTP' => 'pack ticket'
	);

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'          => 'qntype',
		'description'   => 'qntypedesc',
		'typecode'      => 'artbtypecode',
		'customertype'  => 'artbtypecode',
		'sequence'      => 'qnseq',
		'note'          => 'qnnote',
		'key2'          => 'qnkey2',
		'form'          => 'qnform',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd',
	);

	/**
	 * Return Description for the Note Type
	 * @param  string $type Note Type see self::TYPES
	 * @return string
	 */
	public static function get_type_description($type) {
		return self::TYPES_DESCRIPTIONS[$type];
	}

	/**
	 * Return NoteArCustType
	 * @return NoteArCustType
	 */
	public static function new() {
		$note = new self();
		return $note;
	}
}
