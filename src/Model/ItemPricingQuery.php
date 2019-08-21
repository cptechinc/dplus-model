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
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 *
 * FindOne
 * @method     ItemPricing findOneByItemid(string $itemID)     Return the first ItemPricing filtered by the InitItemNbr column
 *
 */
class ItemPricingQuery extends BaseItemPricingQuery {
	use QueryTraits;
}
