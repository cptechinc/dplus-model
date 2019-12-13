<?php
use Propel\Runtime\ActiveQuery\Criteria;

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

	 /**
	 * Filter the query on the Oehdnbr column
	 *
	 * @param  mixed $ordn	    array or string
	 * @return $this|QuoteQuery The current query, for fluid interface
	 */
	public function filterByQuotenumber($quotnbr, $comparison = null) {
		return $this->filterByQthdid($quotnbr, $comparison);
	}

	/**
	 * Filter the query on the Arcucustid column
	 *
	 * @param  mixed $custid     string|array
	 * @return $this|QuoteQuery  The current query, for fluid interface
	 */
	public function filterByCustid($custid, $comparison = null) {
		return $this->filterByArcucustid($custid, $comparison);
	}

	/**
	 * Filter the query on the Oehdordrtot column
	 *
	 * @param  mixed $ordertotal  string|array
	 * @return $this|QuoteQuery   The current query, for fluid interface
	 */
	public function filterByQuotetotal($quotetotal, $comparison = null) {
		return $this->filterByQthdordrtot($quotetotal, $comparison);
	}

	/**
	 * Filter the query on the Oehdordrdate column
	 *
	 * @param  mixed $orderdate	string|array
	 * @return $this|QuoteQuery The current query, for fluid interface
	 */
	public function filterByDate_quoted($quotedate, $comparison = null) {
		return $this->filterByQthdquotdate($quotedate, $comparison);
	}

	/**
	 * Filter the query on the Oehdordrdate column
	 *
	 * @param  mixed $orderdate	string|array
	 * @return $this|QuoteQuery The current query, for fluid interface
	 */
	public function filterByDate_review($reviewdate, $comparison = null) {
		return $this->filterByQthdrevdate($reviewdate, $comparison);
	}

	/**
	 * Filter the query on the Oehdordrdate column
	 *
	 * @param  mixed $orderdate	array or string
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 * @param  mixed $orderdate	string|array
	 * @return $this|QuoteQuery The current query, for fluid interface
	 */
	public function filterByDate_expires($expiredate, $comparison = null) {
		return $this->filterByQthdexpdate($expiredate, $comparison);
	}

	public function filterByStatus($status) {
		$this->filterByQthdstat($status);
		return $this;
	}
}
