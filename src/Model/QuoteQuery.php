<?php

use Base\QuoteQuery as BaseQuoteQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'quote_header' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByQuotenumber()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method  QuoteQuery filterByCustid(string $custID)      Filter the query on the ArcuCustid column
 *
 * FindOne
 * @method  Quote findOneByQuotenumber(string $qnbr)      Return the first Quote filtered by the Qthdid column
 *
 * Find
 *
 */
class QuoteQuery extends BaseQuoteQuery {
	use QueryTraits;


	/**
	 * Filter the query on the ArspSalePer1 column
	 *
	 * fix name
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByArspsaleper1('fooValue');   // WHERE ArspSalePer1 = 'fooValue'
	 * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer1 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param	  string $arspsaleper1 The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|QuoteQuery The current query, for fluid interface
	 */
	public function filterbySalesPerson($salesperson = null) {
		$this->condition('sp1', 'Quote.ArspSaleper1 = ?', $salesperson);
		$this->condition('sp2', 'Quote.ArspSaleper2 = ?', $salesperson);
		$this->condition('sp3', 'Quote.ArspSaleper3 = ?', $salesperson);
		$this->where(array('sp1', 'sp2', 'sp3'), 'or'); 				 // combine 'cond1' and 'cond2' with a logical OR
		return $this;
	 }
}
