<?php

use Base\ArInvoiceQuery as BaseArInvoiceQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_inv' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByType()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
* @method  ArInvoiceQuery findOneByType(string $type)      Filter the Query by the arintype column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class ArInvoiceQuery extends BaseArInvoiceQuery {
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
	 * @param	  string $arcucustid The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ArInvoiceQuery The current query, for fluid interface
	 */
	public function filterByCustid($custID = null, $comparison = null) {
		return $this->filterByArcucustid($custID, $comparison);
	}

	/**
	 * Filter By Invoice Type
	 * @param  string|mixed $type
	 * @param  string $comparison
	 * @return $this|ArInvoiceQuery The current query, for fluid interface
	 */
	public function filterByType($type, $comparison = null) {
		return $this->filterByArintype($type, $comparison);
	}
}
