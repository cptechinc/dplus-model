<?php

use Base\ItemMasterItemQuery as BaseItemMasterItemQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_item_mast' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByItemid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method     ItemMasterItemQuery filterByItemid(string $itemID) Filter the query on the InitItemNbr column
 *
 * FindOne
 * @method     ItemMasterItem findOneByItemid(string $itemID)     Return the first ItemMasterItem filtered by the InitItemNbr column
 *
 */

class ItemMasterItemQuery extends BaseItemMasterItemQuery {
	use QueryTraits;

	public function get_itemdescription($itemID) {
		$this->select('initdesc1');
		return $this->findOneByInititemnbr($itemID);
	}

	/**
	 * Filter the query on the InitItemNbr column
	 *
	 * @param  string                    $itemID The value to use as filter.
	 * @param  string                    $comparison Comparison Operator
	 * @return $this|ItemMasterItemQuery The current query, for fluid interface
	 */
	public function filterByItemid($itemID, $comparison = null) {
		return $this->filterByInititemnbr($itemID, $comparison);
	}

	/**
	 * Returns Item Type for Item Id
	 *
	 * @param  string $itemID
	 * @return int            Item Type
	 */
	public function get_itemtype($itemID) {
		$this->clear();
		$this->select('inittype');
		return $this->findOneByItemid($itemID);
	}

	/**
	 * Returns if Item is serialized
	 * @param  string $itemID
	 * @return bool           Is the Item Serialized
	 */
	public function is_item_serialized($itemID) {
		$itemtype = $this->get_itemtype($itemID);
		return ItemMasterItem::is_itemtype_serialized($itemtype);
	}

	/**
	 * Returns if Item is lotted
	 * @param  string $itemID
	 * @return bool           Is the Item lotted
	 */
	public function is_item_lotted($itemID) {
		$itemtype = $this->get_itemtype($itemID);
		return ItemMasterItem::is_itemtype_lotted($itemtype);
	}

	/**
	 * Returns if Item is normal
	 * @param  string $itemID
	 * @return bool            Is the Item normal
	 */
	public function is_item_normal($itemID) {
		$itemtype = $this->get_itemtype($itemID);
		return ItemMasterItem::is_itemtype_normal($itemtype);
	}

	/**
	 * Returns if Item is price only
	 * @param  string $itemID
	 * @return bool            Is the Item price only
	 */
	public function is_item_priceonly($itemID) {
		$itemtype = $this->get_itemtype($itemID);
		return ItemMasterItem::is_itemtype_priceonly($itemtype);
	}
}
