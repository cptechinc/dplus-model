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
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'          => 'qntype',
		'description'   => 'qntypedesc',
		'typecode'      => 'artbtypecode',
		'sequence'      => 'qnseq',
		'note'          => 'qnnote',
		'key2'          => 'qnkey2',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd',
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


}
