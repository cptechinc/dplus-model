<?php

use Base\InvSerialMasterQuery as BaseInvSerialMasterQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_ser_mast' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByLotserial()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 *
 * FindOneByXXX()
 * @method   findOneByLotserial(string $lotserial)      Return the first  filtered by the sermsernbr column
 *
 * FindByXXX()
 */
class InvSerialMasterQuery extends BaseInvSerialMasterQuery {
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
	 * Filter the query on the SermSerNbr column
	 * @param     string $lotserial   The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
	 */
	public function filterByLotserial($lotserial, $comparison = null) {
		return $this->filterBySermsernbr($lotserial, $comparison);
	}

	/**
	 * Filter the query on the SermSerNbr column
	 * @param     string $lotserial   The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
	 */
	public function filterBySerialnbr($lotserial, $comparison = null) {
		return $this->filterBySermsernbr($lotserial, $comparison);
	}

	/**
	 * Filter the query on the Sermsordnbr column
	 * @param     string $ordn        The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
	 */
	public function filterByOrdn($ordn, $comparison = null) {
		return $this->filterBySermsordnbr($ordn, $comparison);
	}

	/**
	 * Filter the query on the Sermsordnbr column
	 * @param     string $ordn        The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvSerialMasterQuery The current query, for fluid interface
	 */
	public function filterByOrdernumber($ordn, $comparison = null) {
		return $this->filterBySermsordnbr($ordn, $comparison);
	}

}
