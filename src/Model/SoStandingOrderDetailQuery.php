<?php

use Base\SoStandingOrderDetailQuery as BaseSoStandingOrderDetailQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_stand_det' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByCustid(string $custID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  SoStandingOrderDetailQuery filterByCustid(string $custID)      Filter the query by the arcucustid column
 *
 * FindOneByXXX()
 *
 *
 * FindByXXX()
 */
class SoStandingOrderDetailQuery extends BaseSoStandingOrderDetailQuery {
	use QueryTraits;

	/**
	 * Filter the query on the ArcuCustId column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByArcucustid('fooValue');	 // WHERE ArcuCustId = 'fooValue'
	 * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
	 * </code>
	 *
	 * @param  string $arcucustid The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|SoStandingOrderQuery The current query, for fluid interface
	 */
	public function filterByCustid($custID = null, $comparison = null) {
		return $this->filterByArcucustid($custID, $comparison);
	}

	/**
	 * Filter the query on the ArstShipId column
	 * @param  string $shiptoID The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|SoStandingOrderQuery The current query, for fluid interface
	 */
	public function filterByShiptoidid($shiptoID = null, $comparison = null) {
		return $this->filterByArstshipid($shiptoID, $comparison);
	}

	/**
	 * Filter the query on the InitItemNbr column
	 * @param  string                    $itemID The value to use as filter.
	 * @return $this|SoStandingOrderQuery The current query, for fluid interface
	 */
	public function filterByItemid($itemID, $comparision = null) {
		return $this->filterByInititemnbr($itemID, $comparision);
	}
}
