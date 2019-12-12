<?php

use Base\WarehouseNotes as BaseWarehouseNotes;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'notes_whse_invc_stmt' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class WarehouseNotes extends BaseWarehouseNotes {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE_INVOICE  = 'IWHS';
	const TYPE_STATEMENT = 'SWHS';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'      => 'qntype',
		'desc'      => 'qntypedesc',
		'sequence'  => 'qnseq',
		'whse'      => 'IntbWhse',
		'whseID'    => 'IntbWhse',
		'whseid'    => 'IntbWhse',
		'note'      => 'qnnote',
		'key2'      => 'qnkey',
	);

	
}
