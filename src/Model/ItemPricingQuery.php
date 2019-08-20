<?php

use Base\ItemPricingQuery as BaseItemPricingQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_item_price' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByItemid()
 *
 *
 */
class ItemPricingQuery extends BaseItemPricingQuery {
	use QueryTraits;
	
	/**
	 * Return ItemPricing objects filtered by the InitItemNbr column
	 * @param  string $itemID Item ID
	 * @return ItemPricing
	 */
	public function findOneByItemid($itemID) {
		return $this->findOneByInititemnbr($itemID);
	}
}
