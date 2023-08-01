<?php
// Dplus Model
use Dplus\Model\QueryTraits;
// Base Classes
use Base\InvTransferPickedLotserialQuery as BaseInvTransferPickedLotserialQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'inv_trans_pulled' table.
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
 * @method  InvTransferPickedLotserial findOneByOrdn(string $ordn)      Return the first InvTransferPickedLotserial filtered by the inhdnbr column
 *
 * FindByXXX()
 */
class InvTransferPickedLotserialQuery extends BaseInvTransferPickedLotserialQuery {
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
}
