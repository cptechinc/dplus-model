<?php
// Dplus Model
use Dplus\Model\QueryTraits;
// Base Classes
use Base\InvTransferOrderQuery as BaseInvTransferOrderQuery;



/**
 * Class for performing query and update operations on the 'inv_trans_head' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByOrdn()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 *
 * FindOneByXXX()
 * @method  InvTransferOrder findOneByOrdn(string $ordn)      Return the first InvTransferOrder filtered by the inhdnbr column
 *
 * FindByXXX()
 *
 */
class InvTransferOrderQuery extends BaseInvTransferOrderQuery {
	use QueryTraits;

	/**
	 * Filter the query on the Inhdnbr column
	 * @param	  string $ordn 	 The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByOrdn($ordn, $comparison = null) {
		return $this->filterByInhdnbr($ordn, $comparison);
	}

	/**
	 * Filter the query on the Inhdnbr column
	 * @param	  string $ordn 	 The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByTnbr($ordn, $comparison = null) {
		return $this->filterByInhdnbr($ordn, $comparison);
	}

	/**
	 * Filter the query on the Intbwhsefrom column
	 * @param	  string $whseID 	 The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByWhseidFrom($whseID, $comparison = null) {
		return $this->filterByIntbwhsefrom($whseID, $comparison);
	}

	/**
	 * Filter the query on the Intbwhseto column
	 * @param	  string $whseID 	 The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|ChildInvLotMasterQuery The current query, for fluid interface
	 */
	public function filterByWhseidTo($whseID, $comparison = null) {
		return $this->filterByIntbwhseto($whseID, $comparison);
	}
}
