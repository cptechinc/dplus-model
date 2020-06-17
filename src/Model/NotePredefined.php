<?php

use Base\NotePredefined as BaseNotePredefined;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;


/**
 * Class for representing a row from the 'notes_pre_defined' table.
 */
class NotePredefined extends BaseNotePredefined {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'PDNT';
	const DESC = 'Pre-Defined Notes';

	const FORMAT_NOTEDATE = 'Ymd';
	const FORMAT_NOTETIME = 'His';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'         => 'qntype',
		'description'  => 'qntypedesc',
		'id'           => 'qnpdntcode',
		'sequence'     => 'qnseq',
		'itemid'       => 'pontintvitem',
		'note'         => 'qnnote',
		'key2'         => 'qnkey2',
		'form'         => 'qnform',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd',
	);

	/**
	 * Sets Form
	 *
	 * @return string
	 */
	public function generateForm() {
		$this->setForm('');
	}

	/**
	 * Sets generated Key2
	 * NOTE: Key2 = vendorID + itemID + notedate + notetime
	 *
	 * @return string
	 */
	public function generateKey2() {
		$this->setKey2($this->id);
	}

	/**
	 * Return new ItemXrefVendorNoteInternal
	 *
	 * @return void
	 */
	public static function new() {
		$note = new NotePredefined();
		$note->setType(self::TYPE);
		$note->setDescription(self::DESC);
		return $note;
	}
}
