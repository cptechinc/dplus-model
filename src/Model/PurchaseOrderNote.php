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

	const TYPE = 'PORD';
	const DESC = 'Purchase Order Header and Detail Notes';
	const CONTROL_NBR = '00000000';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	 const COLUMN_ALIASES = array(
		'ponbr'      => 'pohdnbr',
		'linenbr'    => 'podtline',
		'line'       => 'podtline',
		'editable'   => 'pontpordeditorview',
		'sequence'   => 'pontseq',
		'note'       => 'pontnote',
		'form'       => 'pontform',
	);

	public function editable() {
		return $this->editable == self::EDITABLE;
	}

	/**
	 * Sets generated Key2
	 * NOTE: Key2 = ItemID followed by the Key2 Append
	 *
	 * @return string
	 */
	public function generateKey2() {
		$ponbr = PurchaseOrder::get_paddedponumber($this->ponbr);
		$linenbr = str_pad($this->linenbr , 4 , "0", STR_PAD_LEFT);
		$key2 = $ponbr.self::CONTROL_NBR.$linenbr.$this->editable;
		$this->setKey2($key2);
	}

	/**
	 * Return new PurchaseOrderNote
	 *
	 * @return PurchaseOrderNote
	 */
	public static function new() {
		$note = new PurchaseOrderNote();
		$note->setType(self::TYPE);
		$note->setDescription(self::DESC);
		$note->setForm('');
		return $note;
	}
}
