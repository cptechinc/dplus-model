<?php

use Base\SalesHistoryQuery as BaseSalesHistoryQuery;

use Propel\Runtime\ActiveQuery\Criteria;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for performing query and update operations on the 'so_head_hist' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class SalesHistoryQuery extends BaseSalesHistoryQuery {
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
		$this->condition('sp1', 'SalesOrder.ArspSaleper1 = ?', $salesperson);
		$this->condition('sp2', 'SalesOrder.ArspSaleper2 = ?', $salesperson);
		$this->condition('sp3', 'SalesOrder.ArspSaleper3 = ?', $salesperson);
		$this->where(array('sp1', 'sp2', 'sp3'), 'or');                  // combine 'cond1' and 'cond2' with a logical OR
		return $this;
     }
     

     /**
      * Return the first SalesHistory filtered by the OehdNbr column
      * @param  string       $ordn  Sales Order Number
      * @return SalesHistory
      */
     public function findOneByOrderNumber($ordn) {
          return $this->findOneByOehhnbr($ordn);
     }

     /**
      * Return if Sales Order Exists in so_head_hist
      *
      * @param  string $ordn Sales Order Number
      * @return bool         Does Sales Order Exist
      */
      public function orderExists($ordn) {
          return boolval($this->filterByOehhnbr($ordn)->count());
     }

     /**
	 * Filter the query on the oehhnbr column
	 *
	 * @param  mixed $ordn   array or string
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	public function filterByOrderNumber($ordn) {
		if (is_array($ordn)) {
			if (!empty($ordn[0])) {
				$this->filterByOehhnbr($ordn[0], Criteria::GREATER_EQUAL);
			}

			if (!empty($ordn[1])) {
				$this->filterByOehhnbr($ordn[1], Criteria::LESS_EQUAL);
			}
		} else {
			$this->filterByOehhnbr($ordn);
		}
		return $this;
	}

	/**
	 * Filter the query on the Arcucustid column
	 *
	 * @param  mixed $custid   array or string
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	public function filterByCustId($custid) {
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
	* @return $this|SalesOrderQuery The current query, for fluid interface
	*/
	public function filterByOrderTotal($ordertotal) {
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
      * Filter the query on the Oehhordrdate column
      *
      * @param  mixed $orderdate   array or string
      * @return $this|SalesOrderQuery The current query, for fluid interface
      */
     public function filterByInvoiceDate($invoicedate) {
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
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	 public function filterByOrderDate($orderdate) {
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
	 * Filter the query on the Oehhstat column
	 *
	 * @param  mixed $status   array or string
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	public function filterByOrderStatus($status) {
		$this->filterByOehhstat($status);
		return $this;
	}
}
