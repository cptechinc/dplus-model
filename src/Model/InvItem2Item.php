<?php

use Base\InvItem2Item as BaseInvItem2Item;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_item_2_item' table.
 * REPRESENTS: Relationships between items that have a parent / child relationships
 */
class InvItem2Item extends BaseInvItem2Item {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'parentitemid' => 'i2imstritemid',
		'childitemid'  => 'i2ichilditemid',
		'whseid'       => 'i2isupplywhse',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
	);

	/**
	 * Return parent ITM Item 
	 * @return ItemMasterItem
	 */
	public function parentItem() {
		return $this->getItemMasterItemRelatedByI2imstritemid();
	}

	/**
	 * Return child ITM Item 
	 * @return ItemMasterItem
	 */
	public function childItem() {
		return $this->getItemMasterItemRelatedByI2ichilditemid();
	}
}
