<?php namespace Dplus\Model;

use ItemMasterItemQuery;

trait ItemMasterTraits {
	/**
	 * Returns if Item Type is Normal
	 *
	 * @return bool
	 */
	public function is_item_normal() {
		return ItemMasterItemQuery::create()->is_item_normal($this->itemid);
	}

	/**
	 * Returns if Item Type is Lotted
	 *
	 * @return bool
	 */
	public function is_item_lotted() {
		return ItemMasterItemQuery::create()->is_item_lotted($this->itemid);
	}

	/**
	 * Returns if Item Type is Normal
	 *
	 * @return bool
	 */
	public function is_item_serialized() {
		return ItemMasterItemQuery::create()->is_item_lotted($this->itemid);
	}
}
