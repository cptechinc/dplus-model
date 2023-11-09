<?php
// Dplus Model
use Dplus\Model\QueryTraits;
// Base Classes
use Base\InvTransferPreAllocatedLotserialQuery as BaseInvTransferPreAllocatedLotserialQuery;

/**
 * Class for performing query and update operations on the 'inv_trans_pre_allo' table.
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
 * @method  InvTransferPreAllocatedLotserial findOneByOrdn(string $ordn)      Return the first InvTransferPreallocatedLotserial filtered by the inhdnbr column
 *
 * FindByXXX()
 */
class InvTransferPreAllocatedLotserialQuery extends BaseInvTransferPreAllocatedLotserialQuery {
	use QueryTraits;

	/**
	 * Filter the query on the Inhdnbr column
	 * @param	  string $ordn 	 The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|InvTransferPreAllocatedLotserialQuery The current query, for fluid interface
	 */
	public function filterByOrdn($ordn, $comparison = null) {
		return $this->filterByInhdnbr($ordn, $comparison);
	}
}
