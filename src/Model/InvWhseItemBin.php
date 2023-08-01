<?php

use Base\InvWhseItemBin as BaseInvWhseItemBin;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_bin_area' table.
 * FKRELATIONSHIPS: ItemMasterItem, Warehouse, WarehouseInventory
 */
class InvWhseItemBin extends BaseInvWhseItemBin {
	use ThrowErrorTrait;
	use MagicMethodTraits;
	const PREFIX_BINID_FROM = 'binabin';
	const NBR_OF_BINS = 9;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'itemid'		=> 'inititemnbr',
		'whseid'		=> 'intbwhse',
		'date'			=> 'dateupdtd',
		'time'			=> 'timeupdtd',

		// FOREIGN KEY GETS
		'item'          => 'itemMasterItem'
	];

	/**
	 * Return Bin ID at Index
	 * @param  int $index
	 * @return false|string
	 */
	public function bin($index = 1) {
		if ($index < 1 || $index > self::NBR_OF_BINS) {
			return false;
		}
		$col = self::PREFIX_BINID_FROM . $index;
		return $this->$col;
	}

	/**
	 * Set Bin ID at index
	 * @param  int $index
	 * @param  string  $val
	 * @return bool
	 */
	public function setBin($index = 1, $val = '') {
		if ($index < 1 || $index > self::NBR_OF_BINS) {
			return false;
		}
		$col = self::PREFIX_BINID_FROM . $index;
		$setCol = 'set' . ucfirst($col);
		$this->$setCol($val);
	}
}
