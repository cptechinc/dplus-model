<?php

use Base\SalesOrderQuery as BaseSalesOrderQuery;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for performing query and update operations on the 'so_header' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class SalesOrderQuery extends BaseSalesOrderQuery {
	use ThrowErrorTrait;
	use MagicMethodTraits;


	/**
     * Filter the query on the ArspSalePer1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper1('fooValue');   // WHERE ArspSalePer1 = 'fooValue'
     * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildSalesOrderQuery The current query, for fluid interface
     */
	public function filterbySalesPerson($salesperson = null,  $comparison = null) {
		$this->condition('sp1', 'SalesOrder.ArspSaleper1 = ? ', $salesperson);
		$this->condition('sp2', 'SalesOrder.ArspSaleper2 = ? ', $salesperson);
		$this->condition('sp3', 'SalesOrder.ArspSaleper3 = ? ', $salesperson);
		$this->where(array('sp1', 'sp2', 'sp3'), 'or');                  // combine 'cond1' and 'cond2' with a logical OR
		return $this;
	}
}
