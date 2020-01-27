<?php

use Base\CustomerTypeNotes as BaseCustomerTypeNotes;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_cust_type' table.
 */
class CustomerTypeNotes extends BaseCustomerTypeNotes {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Note Types
	 */
	const TYPES = array(
		'ICTP',
		'KCTP',
		'PCTP',
		'SCTP'
	);

	/**
	 * Note Types
	 */
	const TYPE_ALIASES = array(
		'invoice'   => 'ICTP',
		'pack'      => 'KCTP',
		'pick'      => 'PCTP',
		'statement' => 'SCTP'
	);

	/**
	 * Note Types
	 */
	const TYPES_DESCRIPTIONS = array(
		'ICTP' => 'invoice',
		'KCTP' => 'pack ticket',
		'PCTP' => 'pick ticket',
		'SCTP' => 'statement'
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
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd',
	);

	/**
	 * Return Description for the Note Type
	 *
	 * @param  string $type  Note Type see self::TYPES
	 * @return string
	 */
	public static function get_type_description($type) {
		return self::TYPES_DESCRIPTIONS[$type];
	}
}
