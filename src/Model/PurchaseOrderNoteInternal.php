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
	const CONTROL_NBR = '00000000';
	const FORMAT_NOTEDATE = 'Ymd';
	const FORMAT_NOTETIME = 'His';

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
		'userid'      => 'pontintluser',
		'notedate'    => 'pontintldate',
		'notetime'    => 'pontintltime',
		'date'        => 'dateupdtd',
		'time'        => 'timeupdtd'
	);

	/**
	 * Return Note Time in His Format
	 * @return string
	 */
	public function notetime() {
		return substr($this->notetime, 0, 6);
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
		$key2 = $ponbr.self::CONTROL_NBR.$linenbr.$this->notedate.$this->notetime.$this->userid;
		$this->setKey2($key2);
	}

	/**
	 * Return new PurchaseOrderNote
	 *
	 * @return PurchaseOrderNote
	 */
	public static function new() {
		$note = new PurchaseOrderNoteInternal();
		$note->setType(self::TYPE);
		$note->setDescription(self::DESC);
		$note->setForm('');
		return $note;
	}
}
