<?php

use Base\ItemInspectNote as BaseItemInspectNote;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_item_inspect' table.
 */
class ItemInspectNote extends BaseItemInspectNote {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'INSP';
	const DESC = 'Item Inspection Notes';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
 		'type'          => 'QcnoType',
		'description'   => 'QcnoTypeDesc',
		'itemid'        => 'InitItemNbr',
		'user'          => 'qcnouser',
		'notedate'      => 'qcnodate',
		'notetime'      => 'qcnotime',
		'sequence'      => 'qcnoseq',
		'note'          => 'qcnonote',
		'key2'          => 'qcnokey2',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd'
	);

	/**
	 * Sets generated Key2
	 * NOTE: Key2 = ItemID
	 *
	 * @return string
	 */
	public function generateKey2() {
		$this->setKey2($this->itemid);
	}

	/**
	 * Returns ItemInternalNote
	 *
	 * @return ItemInspectNote
	 */
	public static function new() {
		$item = new ItemInspectNote();
		$item->setType(self::TYPE);
		$item->setDescription(self::DESC);
		return $item;
	}
}
