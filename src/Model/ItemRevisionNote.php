<?php

use Base\ItemRevisionNote as BaseItemRevisionNote;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_item_revision' table.
 */
class ItemRevisionNote extends BaseItemRevisionNote {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'IREV';
	const DESC = 'Item Revision Notes';

	const FORMAT_NOTEDATE = 'Ymd';
	const FORMAT_NOTETIME = 'Hi';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'         => 'ItemNoteType',
		'description'  => 'ItemNoteTypeDesc',
		'itemid'       => 'inititemnbr',
		'notedate'     => 'itemnotedate',
		'notetime'     => 'itemnotetime',
		'revision'     => 'itemnoterevision',
		'sequence'     => 'itemnoteseq',
		'form'         => 'itemnoteform',
		'note'         => 'itemnotenote',
		'user'         => 'itemnoteuser',
		'key2'         => 'itemnotekey2',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);

	/**
	 * Sets generated Key2
	 * NOTE: Key2 = ItemID followed by the Key2 Append
	 *
	 * @return string
	 */
	public function generateKey2() {
		$key2_itemID = str_pad($this->itemid , ItemMasterItem::LENGTH_ITEMID, " ", STR_PAD_RIGHT);
		$key2 = $key2_itemID.$this->notedate.$this->notetime.$this->revision;
		$this->setKey2($key2);
	}


	/**
	 * Returns ItemInternalNote
	 *
	 * @return ItemRevisionNote
	 */
	public static function new() {
		$item = new ItemRevisionNote();
		$item->setType(self::TYPE);
		$item->setDescription(self::DESC);
		return $item;
	}
}
