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
		'itemid'       => 'initItemNbr',
		'form'         => 'pontform',
		'sequence'     => 'pontseq',
		'notedate'     => 'pontintvdate',
		'notetime'     => 'pontintvtime',
		'note'         => 'pontnote',
		'key2'         => 'pontkey2',
		'userid'       => 'pontintvuser',
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
	 * Gets 6 character time
	 * @return string
	 */
	public function notetime() {
		return substr($this->notetime, 0, 6);
	}

	/**
	 * Sets generated Key2
	 * NOTE: Key2 = vendorID + itemID + notedate + notetime
	 *
	 * @return string
	 */
	public function generateKey2() {
		$itemID = str_pad($this->itemid, ItemMasterItem::LENGTH_ITEMID, " ", STR_PAD_RIGHT);
		$vendorID = str_pad($this->vendorid, Vendor::LENGTH_VENDORID, " ", STR_PAD_RIGHT);
		$userID = str_pad($this->userid, DplusUser::LENGTH_USERID, " ", STR_PAD_RIGHT);
		$this->setKey2($vendorID.$itemID.$this->notedate.$this->notetime.$userID);
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
