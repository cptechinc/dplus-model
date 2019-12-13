<?php

use Base\SalesHistoryQuery as BaseSalesHistoryQuery;

use Propel\Runtime\ActiveQuery\Criteria;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_head_hist' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByOrdernumber()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method  SalesHistoryQuery filterByCustid(string $custID)      Filter the query on the ArcuCustid column
 * @method  SalesHistoryQuery filterByCustpo(string $custpo)      Filter the query on the Oehhcustpo column
 * @method  SalesHistoryQuery filterByTotal_total(string $total)  Filter the query on the Oehhordrtot column
 * @method  SalesHistoryQuery filterByOrderstatus(string $status) Filter the query on the Oehhstat column
 *
 *
 * FindOne
 * @method  SalesHistory findOneByOrdernumber(string $ordn)      Return the first SalesHistory filtered by the OehhNbr column
 *
 * Find
 *
 */
class SalesHistoryQuery extends BaseSalesHistoryQuery {
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
	 * @return $this|ChildSalesHistoryQuery The current query, for fluid interface
	 */
	public function filterbySalesPerson($salesperson = null) {
		$this->condition('sp1', 'SalesHistory.ArspSaleper1 = ?', $salesperson);
		$this->condition('sp2', 'SalesHistory.ArspSaleper2 = ?', $salesperson);
		$this->condition('sp3', 'SalesHistory.ArspSaleper3 = ?', $salesperson);
		$this->where(array('sp1', 'sp2', 'sp3'), 'or'); 				 // combine 'cond1' and 'cond2' with a logical OR
		return $this;
	 }


	/**
	  * Return if Sales Order Exists in so_head_hist
	 *
	 * @param	string $ordn Sales Order Number
	 * @return bool		 Does Sales Order Exist
	 */
	public function orderExists($ordn) {
		return boolval($this->filterByOehhnbr($ordn)->count());
	}

	 /**
	 * Filter the query on the oehhnbr column
	 *
	 * @param  mixed  $ordn	           string|array
	 * @param  string $comparison      Database Comparison Operator e.g. <=
	 * @return $this|SalesHistoryQuery The current query, for fluid interface
	 */
	public function filterByOrdernumber($ordn, $comparison = null) {
		return $this->filterByOehhnbr($ordn, $comparison);
	}

	/**
	 * Filter the query on the Arcucustid column
	 *
	 * @param  mixed $custid   array or string
	 * @return $this|SalesHistoryQuery The current query, for fluid interface
	 */
	public function filterByCustid($custid) {
		if (is_array($custid)) {
			if (!empty($custid[0])) {
				$this->filterByArcucustid($custid[0], Criteria::GREATER_EQUAL);
			}

			if (!empty($custid[1])) {
				$this->filterByArcucustid($custid[1], Criteria::LESS_EQUAL);
			}
		} else {
			$this->filterByArcucustid($custid, Criteria::LIKE);
		}
		return $this;
	}

	/**
	* Filter the query on the Oehhordrtot column
	*
	* @param  mixed $ordertotal   array or string
	* @return $this|SalesHistoryQuery The current query, for fluid interface
	*/
	public function filterByOrdertotal($ordertotal) {
		if (is_array($ordertotal)) {
			if (!empty($ordertotal[0])) {
				$this->filterByOehhordrtot($ordertotal[0], Criteria::GREATER_EQUAL);
			}

			if (!empty($ordertotal[1])) {
				$this->filterByOehhordrtot($ordertotal[1], Criteria::LESS_EQUAL);
			}
		}
		return $this;
	}

	 /**
	  * Filter the query on the Oehhinvdate column
	  *
	  * @param	mixed $orderdate   array or string
	  * @return $this|SalesHistoryQuery The current query, for fluid interface
	  */
	 public function filterByInvoicedate($invoicedate) {
		  if (is_array($invoicedate)) {
			   if (!empty($invoicedate[0])) {
					$this->filterByOehhinvdate($invoicedate[0], Criteria::GREATER_EQUAL);
			   }

			   if (!empty($invoicedate[1])) {
					$this->filterByOehhinvdate($invoicedate[1], Criteria::LESS_EQUAL);
			   }
		  } else {
			   $this->filterByOehhinvdate($invoicedate);
		  }
		  return $this;
	 }

	/**
	 * Filter the query on the Oehhordrdate column
	 *
	 * @param  mixed $orderdate   array or string
	 * @return $this|SalesHistoryQuery The current query, for fluid interface
	 */
	 public function filterByOrderdate($orderdate) {
		 if (is_array($orderdate)) {
			if (!empty($orderdate[0])) {
				$this->filterByOehhordrdate($orderdate[0], Criteria::GREATER_EQUAL);
			}

			if (!empty($orderdate[1])) {
				$this->filterByOehhordrdate($orderdate[1], Criteria::LESS_EQUAL);
			}
		} else {
			 $this->filterByOehhordrdate($orderdate);
		}
		return $this;
	 }

	/**
	 * Returns the Customer ID for Sales Order
	 *
	 * @param  string $ordn Sales Order Number
	 * @return string		Sales Order Customer ID
	 */
	public function get_custid($ordn) {
		$this->clear();
		$this->select($this->get_tablecolumn(SalesHistory::get_aliasproperty('custid')));
		$this->filterByOrdernumber($ordn);
		return $this->findOne();
	}
}
