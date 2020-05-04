<?php

use Base\ItemInternalNote as BaseItemInternalNote;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_item_internal' table.
 */
class ItemInternalNote extends BaseItemInternalNote {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'ITEM';
	const DESC = 'Item Internal Notes';
	const KEY2_APPEND = 'I';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'          => 'QnType',
		'description'   => 'QnTypeDesc',
		'itemid'        => 'inititemnbr',
		'sequence'      => 'qnseq',
		'note'          => 'qnnote',
		'key2'          => 'qnkey2',
		'form'          => 'qnform',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd',
	);

	/**
	 * Sets generated Key2
	 * NOTE: Key2 = ItemID followed by the Key2 Append
	 *
	 * @return string
	 */
	public function generateKey2() {
		$key2_itemID = str_pad($this->itemid , ItemMasterItem::LENGTH_ITEMID, " ", STR_PAD_RIGHT);
		$key2 = $key2_itemID.self::KEY2_APPEND;
		$this->setKey2($key2);
	}

	/**
	 * Returns ItemInternalNote
	 *
	 * @return ItemInternalNote
	 */
	public static function new() {
		$item = new ItemInternalNote();
		$item->setType(self::TYPE);
		$item->setDescription(self::DESC);
		return $item;
	}
}
