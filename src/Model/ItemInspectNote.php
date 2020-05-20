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
	const FORMAT_NOTEDATE = 'Ymd';
	const FORMAT_NOTETIME = 'His';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
 		'type'          => 'qcnotype',
		'description'   => 'qcnotypedesc',
		'itemid'        => 'inititemnbr',
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

	public function get_time() {
		return substr($this->notetime, 0, 6);
	}

	public function set_time($time, $notedate = '') {
		$notedate = $notedate ? $notedate : $this->notedate;
		$time_formatted = self::generate_notetime($time, $notedate);
		$this->setNotetime($time_formatted);
	}

	public static function generate_notetime($time, $notedate) {
		$time_formatted = date(self::FORMAT_NOTETIME, strtotime($notedate.$time));
		$time_formatted .= '00';
		return $time_formatted;
	}
}
