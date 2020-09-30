<?php

use Base\ItemPricingDiscountQuery as BaseItemPricingDiscountQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_price_discount' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByItemid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterBy
 * @method   ItemPricingDiscountQuery filterByItemid(string $itemID)     Filter the Query by the OepcItemNbr column
 *
 *
 * FindOne
 * 
 */
class ItemPricingDiscountQuery extends BaseItemPricingDiscountQuery {
	use QueryTraits;
}
