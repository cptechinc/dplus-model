<?php

use Base\ItemAddonItem as BaseItemAddonItem;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_inv_addon' table.
 * 
 * KEY: inititemnbr, adonadditemnbr
 * FKRELATIONSHIPS: ItemMasterItem
 */
class ItemAddonItem extends BaseItemAddonItem {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	private $itm;
	private $addonItm;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'       => 'inititemnbr',
		'addonitemid'  => 'adonadditemnbr',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
	);

	/**
	 * Return ITM Item
	 * @return ItemMasterItem
	 */
	public function getItem() {
		if (empty($this->itm)) {
			$this->itm = ItemMasterItemQuery::create()->findOneByItemid($this->itemid);
		}
		return $this->itm;
	}

	/**
	 * Return ITM Item associated with addonitemid
	 * @return ItemMasterItem
	 */
	public function getAddon() {
		if (empty($this->addonItm)) {
			$this->addonItm = ItemMasterItemQuery::create()->findOneByItemid($this->itemid);
		}
		return $this->addonItm;
	}
}
