<?php

use Base\InvSerialWarrantyQuery as BaseInvSerialWarrantyQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_war_mast' table
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneBySerialnbr()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 *
 * FindOneByXXX()
 * @method   findOneBySerialnbr(string $lotserial)      Return the first  filtered by the warmsernbr column
 *
 * FindByXXX()
 */
class InvSerialWarrantyQuery extends BaseInvSerialWarrantyQuery {
	use QueryTraits;

	/**
	 * Filter the query on the InitItemNbr column
	 * @param     string $itemID      The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
	 */
	public function filterByItemid($itemID, $comparison = null) {
		return $this->filterByInititemnbr($itemID, $comparison);
	}

	/**
	 * Filter the query on the WarmSerNbr column
	 * @param     string $lotserial   The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
	 */
	public function filterBySerialnbr($lotserial, $comparison = null) {
		return $this->filterByWarmsernbr($lotserial, $comparison);
	}

	/**
	 * Filter the query on the Warmsordnbr column
	 * @param     string $ordn        The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
	 */
	public function filterByOrdn($ordn, $comparison = null) {
		return $this->filterByWarmsordnbr($ordn, $comparison);
	}

	/**
	 * Filter the query on the Warmsordnbr column
	 * @param     string $ordn        The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
	 */
	public function filterByOrdernumber($ordn, $comparison = null) {
		return $this->filterByWarmsordnbr($ordn, $comparison);
	}

	/**
	 * Filter the query on the Arcucustid column
	 * @param     string $custID      The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
	 */
	public function filterByCustid($custID, $comparison = null) {
		return $this->filterByArcucustid($custID, $comparison);
	}

}
