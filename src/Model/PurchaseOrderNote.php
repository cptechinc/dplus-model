<?php

use Base\PurchaseOrderNote as BasePurchaseOrderNote;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_po_head_det' table.
 * 
 */
class PurchaseOrderNote extends BasePurchaseOrderNote {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	CONST EDITABLE = 'E';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	 const COLUMN_ALIASES = array(
		'ponbr'      => 'pohdnbr',
		'linenbr'    => 'podtline',
		'editable'   => 'pontpordeditorview',
		'sequence'   => 'pontseq',
		'note'       => 'pontnote',
	);

	public function editable() {
		return $this->editable == self::EDITABLE;
	}
}
