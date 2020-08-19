<?php

use Base\PurchaseOrderNoteInternal as BasePurchaseOrderNoteInternal;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_po_internal' table.
 */
class PurchaseOrderNoteInternal extends BasePurchaseOrderNoteInternal {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'INTL';
	const DESC = 'Internal Purchase Order Notes';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ponbr'       => 'pohdnbr',
		'linenbr'     => 'podtline',
		'line'        => 'podtline',
		'sequence'    => 'pontseq',
		'note'        => 'pontnote',
		'form'        => 'pontform',
		'type'        => 'ponttype',
		'description' => 'ponttypedesc',
		'key2'        => 'pontkey2',
		'user'        => 'pontuser',
		'notedate'    => 'pointldate',
		'notetime'    => 'pointltime',
		'date'        => 'dateupdtd',
		'time'        => 'timeupdtd'
	);
	
}
