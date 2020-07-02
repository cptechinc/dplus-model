<?php

use Base\ItemXrefVendorNoteInternal as BaseItemXrefVendorNoteInternal;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_vend_xref_internal' table.
 */
class ItemXrefVendorNoteInternal extends BaseItemXrefVendorNoteInternal {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'INTV';
	const DESC = 'Internal Vendor X-Ref Notes';

	const FORMAT_NOTEDATE = 'Ymd';
	const FORMAT_NOTETIME = 'His';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'         => 'ponttype',
		'description'  => 'ponttypedesc',
		'vendorid'     => 'apvevendid',
		'itemid'       => 'pontintvitem',
		'vendoritemid' => 'pontintvitem',
		'form'         => 'pontform',
		'sequence'     => 'pontseq',
		'notedate'     => 'pontintvdate',
		'notetime'     => 'pontintvtime',
		'note'         => 'pontnote',
		'key2'         => 'pontkey2',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd',
		'item'         => 'itemMasterItem',
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
		$key2_itemID = str_pad($this->itemid , ItemMasterItem::LENGTH_ITEMID, " ", STR_PAD_RIGHT);
		$this->setKey2($this->vendorid.$key2_itemID.$this->notedate.$this->notetime);
	}

	/**
	 * Return new ItemXrefVendorNoteInternal
	 *
	 * @return void
	 */
	public static function new() {
		$note = new ItemXrefVendorNoteInternal();
		$note->setType(self::TYPE);
		$note->setDescription(self::DESC);
		$note->setNotedate(date(self::FORMAT_NOTEDATE));
		$note->setNotetime(date(self::FORMAT_NOTETIME));
		return $note;
	}

}
