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
 	 * @param  mixed $ordn	 array or string
 	 * @return $this|SalesOrderQuery The current query, for fluid interface
 	 */
 	public function filterByQuotenumber($quotnbr) {
 		if (is_array($quotnbr)) {
 			if (!empty($quotnbr[0])) {
 				$this->filterByQthdid($quotnbr[0], Criteria::GREATER_EQUAL);
 			}

 			if (!empty($quotnbr[1])) {
 				$this->filterByQthdid($quotnbr[1], Criteria::LESS_EQUAL);
 			}
 		} else {
 			$this->filterByQthdid($quotnbr);
 		}
 		return $this;
 	}

	/**
	 * Filter the query on the Arcucustid column
	 *
	 * @param  mixed $custid   array or string
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	public function filterByCustid($custid, $comparison = null) {
		return $this->filterByArcucustid($custid, $comparison);
	}

	/**
	 * Filter the query on the Oehdordrtot column
	 *
	 * @param  mixed $ordertotal   array or string
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	public function filterByQuotetotal($quotetotal) {
		if (is_array($quotetotal)) {
			if (!empty($quotetotal[0])) {
				$this->filterByQthdordrtot($quotetotal[0], Criteria::GREATER_EQUAL);
			}

			if (!empty($quotetotal[1])) {
				$this->filterByQthdordrtot($quotetotal[1], Criteria::LESS_EQUAL);
			}
		}
		return $this;
	}

	/**
	 * Filter the query on the Oehdordrdate column
	 *
	 * @param  mixed $orderdate	array or string
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	public function filterByDate_quoted($quotedate) {
		if (is_array($quotedate)) {
			if (!empty($quotedate[0])) {
				$this->filterByQthdquotdate($quotedate[0], Criteria::GREATER_EQUAL);
			}

			if (!empty($quotedate[1])) {
				$this->filterByQthdquotdate($quotedate[1], Criteria::LESS_EQUAL);
			}
		} else {
			$this->filterByQthdquotdate($quotedate);
		}
		return $this;
	}

	/**
	 * Filter the query on the Oehdordrdate column
	 *
	 * @param  mixed $orderdate	array or string
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	public function filterByDate_review($reviewdate) {
		if (is_array($reviewdate)) {
			if (!empty($reviewdate[0])) {
				$this->filterByQthdrevdate($reviewdate[0], Criteria::GREATER_EQUAL);
			}

			if (!empty($reviewdate[1])) {
				$this->filterByQthdrevdate($reviewdate[1], Criteria::LESS_EQUAL);
			}
		} else {
			$this->filterByQthdrevdate($reviewdate);
		}
		return $this;
	}

	/**
	 * Filter the query on the Oehdordrdate column
	 *
	 * @param  mixed $orderdate	array or string
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	public function filterByDate_expires($expiredate) {
		if (is_array($expiredate)) {
			if (!empty($expiredate[0])) {
				$this->filterByQthdexpdate($expiredate[0], Criteria::GREATER_EQUAL);
			}

			if (!empty($expiredate[1])) {
				$this->filterByQthdexpdate($expiredate[1], Criteria::LESS_EQUAL);
			}
		} else {
			$this->filterByQthdexpdate($expiredate);
		}
		return $this;
	}

	public function filterByStatus($status) {
		$this->filterByQthdstat($status);
		return $this;
	}
}
