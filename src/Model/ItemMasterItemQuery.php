<?php

use Base\ItemMasterItemQuery as BaseItemMasterItemQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'inv_item_mast' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class ItemMasterItemQuery extends BaseItemMasterItemQuery {
	/**
	 * Return the first ItemMasterItem filtered by the InitItemNbr column
	 *
	 * @param  string $itemID Item ID
	 * @return ItemMasterItem
	 */
	public function findOneByItemid($itemID) {
		return $this->findOneByInititemnbr($itemID);
	}
}
