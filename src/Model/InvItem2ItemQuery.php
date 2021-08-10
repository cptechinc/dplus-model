<?php

use Base\InvItem2ItemQuery as BaseInvItem2ItemQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_item_2_item' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByCode()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 *  @method	InvItem2ItemQuery filterByParentItemid(mixed $itemID) 	 Filter the Query by the I2iMstrItemId column
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class InvItem2ItemQuery extends BaseInvItem2ItemQuery {
	use QueryTraits;

	/**
	 * Filter the query on the I2iMstrItemId column
	 * @param	  string $i2imstritemid The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return InvItem2ItemQuery The current query, for fluid interface
	 */
	public function filterByParentItemid($itemID, $comparison = null) {
		return $this->filterByI2imstritemid($itemID, $comparison);
	}

	/**
	 * Filter the query on the I2iChildItemId column
	 * @param	  string $i2ichilditemid The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildInvItem2ItemQuery The current query, for fluid interface
	 */
	public function filterByChildItemid($itemID, $comparison = null) {
		return $this->filterByI2ichilditemid($itemID, $comparison);
	}
}
