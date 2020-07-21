<?php

use Base\ItemXrefVendorNoteDetail as BaseItemXrefVendorNoteDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_vend_xref_det' table.
 */
class ItemXrefVendorNoteDetail extends BaseItemXrefVendorNoteDetail {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'VXRD';
	const DESC = 'Vendor X-Ref Detail Line Notes';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'         => 'ponttype',
		'description'  => 'ponttypedesc',
		'vendorid'     => 'apvevendid',
		'itemid'       => 'inititemnbr',
		'form'         => 'pontform',
		'sequence'     => 'pontseq',
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
	 * NOTE: Key2 = vendorID + itemID
	 *
	 * @return string
	 */
	public function generateKey2() {
		$itemID = str_pad($this->itemid, ItemMasterItem::LENGTH_ITEMID, " ", STR_PAD_RIGHT);
		$vendorID = str_pad($this->vendorid, Vendor::LENGTH_VENDORID, " ", STR_PAD_RIGHT);
		$this->setKey2($vendorID.$itemID);
	}
	
	/**
	 * Return new ItemXrefVendorNoteDetail
	 *
	 * @return void
	 */
	public static function new() {
		$note = new ItemXrefVendorNoteDetail();
		$note->setType(self::TYPE);
		$note->setDescription(self::DESC);
		return $note;
	}
}
