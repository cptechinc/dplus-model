<?php

use Base\ItmDimensionQuery as BaseItmDimensionQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_inv_dimen' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByItemid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method     ItmDimensionQuery filterByItemid(string $itemID) Filter the query on the InitItemNbr column
 *
 * FindOne
 * @method     ItmDimension      findOneByItemid(string $itemID)     Return the first ItmDimension filtered by the InitItemNbr column
 *
 */
class ItmDimensionQuery extends BaseItmDimensionQuery {
	use QueryTraits;

	/**
	 * Filter the query on the InitItemNbr column
	 *
	 * @param  string                    $itemID The value to use as filter.
	 * @return self|ItmDimensionQuery           The current query, for fluid interface
	 */
	public function filterByItemid($itemID, $comparision = null) {
		return $this->filterByInititemnbr($itemID, $comparision);
	}
}
