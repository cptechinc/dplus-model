<?php
use Propel\Runtime\ActiveQuery\Criteria;

use Base\SalesOrderQuery as BaseSalesOrderQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_header' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findByOrdernumber()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method  SalesOrderQuery filterByCustid(string $custID)        Filter the query on the ArcuCustid column
 * @method  SalesOrderQuery filterByCustpo(string $custpo)        Filter the query on the Oehdcustpo column
 * @method  SalesOrderQuery filterByTotal_total(string $total)    Filter the query on the Oehdordrtot column
 * @method  SalesHistoryQuery filterByOrderstatus(string $status) Filter the query on the Oehdstat column
 *
 *
 * FindOne
 * @method  SalesOrder findOneByOrdernumber(string $ordn)     Return the first SalesOrder filtered by the OehdNbr column
 *
 * Find
 *
 */
class SalesOrderQuery extends BaseSalesOrderQuery {
	use QueryTraits;

	/**
	 * Filter the query on the ArspSalePer1 column
	 *
	 * FIX name
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
	 * @return $this|ChildSalesOrderQuery The current query, for fluid interface
	 */
	public function filterbySalesPerson($salesperson = null,  $comparison = null) {
		$this->condition('sp1', 'SalesOrder.ArspSaleper1 = ? ', $salesperson);
		$this->condition('sp2', 'SalesOrder.ArspSaleper2 = ? ', $salesperson);
		$this->condition('sp3', 'SalesOrder.ArspSaleper3 = ? ', $salesperson);
		$this->where(array('sp1', 'sp2', 'sp3'), Criteria::LOGICAL_OR); 				 // combine 'cond1' and 'cond2' with a logical OR
		return $this;
	 }

	/**
	 * Return if Sales Order Exists in so_header
	 *
	 * @param  string $ordn Sales Order Number
	 * @return bool 		Does Sales Order Exist
	 */
	public function orderExists($ordn) {
		return boolval($this->filterByOehdnbr($ordn)->count());
	}

	/**
	 * Filter the query on the Oehdnbr column
	 *
	 * @param  mixed $ordn	      string|array
	 * @param  string $comparison Database Comparison Operator e.g. <=
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	public function filterByOrdernumber($ordn, $comparison = null) {
		return $this->filterByOehdnbr($ordn, $comparison);
	}

	/**
	 * Filter the query on the Arcucustid column
	 *
	 * @param  mixed $custid      string|array
	 * @param  string $comparison Database Comparison Operator e.g. <=
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	 public function filterByCustid($custid, $comparison = null) {
		return $this->filterByArcucustid($custid, $comparison);
	}

	/**
	 * Filter the query on the Oehdordrdate column
	 *
	 * @param  mixed  $orderdate      string|array
	 * @param  string $comparison     Database Comparison Operator e.g. <=
	 * @return $this|SalesOrderQuery  The current query, for fluid interface
	 */
	public function filterByOrderdate($orderdate, $comparison = null) {
		return $this->filterByOehdordrdate($orderdate, $comparison);
	}

	/**
	 * Filter the query on the Oehdordrtot column
	 *
	 * @param  mixed $ordertotal   array or string
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	public function filterByOrdertotal($ordertotal) {
		if (is_array($ordertotal)) {
			if (!empty($ordertotal[0])) {
				$this->filterByOehdordrtot($ordertotal[0], Criteria::GREATER_EQUAL);
			}

			if (!empty($ordertotal[1])) {
				$this->filterByOehdordrtot($ordertotal[1], Criteria::LESS_EQUAL);
			}
		}
		return $this;
	}

    public function filterByStatus($status) {
 	   $this->filterByOehdstat($status);
 	   return $this;
    }

	/**
	 * Selects SUM of ordertotal
	 *
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	public function select_sum_ordertotal() {
		$col_total = $this->get_tablecolumn(SalesOrder::get_aliasproperty('total_total'));
		$this->addAsColumn('amount', "SUM($col_total)");
		$this->select('amount');
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
		$this->select($this->get_tablecolumn(SalesOrder::get_aliasproperty('custid')));
		$this->filterByOrdernumber($ordn);
		return $this->findOne();
	}
}
