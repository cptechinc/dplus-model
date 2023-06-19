<?php

use Base\InvNonstockItemQuery as BaseInvNonstockItemQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_nonstock_item' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByNsitemid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  InvNonstockItemQuery filterByNsitemid(string $nsitemid)      Filter the Query on the nsitemnbr column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 */
class InvNonstockItemQuery extends BaseInvNonstockItemQuery {
	use QueryTraits;

	/**
	 * Filter the query on the NsitItemNbr column
	 * @param     string $inititemnbr The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|InvNonstockItemQuery The current query, for fluid interface
	 */
	public function filterByNsitemid($itemID, $comparison = null) {
		return $this->filterByNsititemnbr($itemID, $comparison);
	}

	/**
	 * Filter the query on the Nsitmnfrid column
	 * @param     string $inititemnbr The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|InvNonstockItemQuery The current query, for fluid interface
	 */
	public function filterByMnfrid($mnfrID, $comparison = null) {
		return $this->filterByNsitmnfrid($mnfrID, $comparison);
	}

	/**
	 * Filter the query on the Nsitmnfrid column
	 * @param     string $inititemnbr The value to use as filter.
	 * @param     string $comparison  Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|InvNonstockItemQuery The current query, for fluid interface
	 */
	public function filterByVendorid($vendorID, $comparison = null) {
		return $this->filterByNsitmnfrid($vendorID, $comparison);
	}
}
