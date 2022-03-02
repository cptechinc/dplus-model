<?php

use Base\DplusUserQuery as BaseDplusUserQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'sys_login' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneById()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOneByXXX()
 * @method  DplusUser findOneById(string $id)      Return the first DplusUser filtered by the usrcloginid column
 *
 * FindByXXX()
 * 
 */
class DplusUserQuery extends BaseDplusUserQuery {
	use QueryTraits;

	/**
	 * Filter the query on the UsrcId column
	 * @param     string $usrcid The value to use as filter.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|DplusUserQuery The current query, for fluid interface
	 */
	public function filterByUserid($usrcid = null, $comparison = null) {
		return $this->filterByUsrcid($usrcid, $comparison);
	}
}
