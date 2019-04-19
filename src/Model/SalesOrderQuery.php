<?php
use Propel\Runtime\ActiveQuery\Criteria;

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

     /**
      * Return the first SalesOrder filtered by the OehdNbr column

      * @param  string     $ordn  Sales Order Number
      * @return SalesOrder
      */
     public function findOneByOrderNumber($ordn) {
          return $this->findOneByOehdnbr($ordn);
     }

     /**
      * Return if Sales Order Exists in so_header
      *
      * @param  string $ordn Sales Order Number
      * @return bool         Does Sales Order Exist
      */
     public function orderExists($ordn) {
          return boolval($this->filterByOehdnbr($ordn)->count());
     }

	 /**
	 * Filter the query on the Oehdnbr column
      *
	 * @param  mixed $ordn   array or string
	 * @return $this|SalesOrderQuery The current query, for fluid interface
	 */
	public function filterByOrderNumber($ordn) {
		if (is_array($ordn)) {
			if (!empty($ordn[0])) {
				$this->filterByOehdnbr($ordn[0], Criteria::GREATER_EQUAL);
			}

			if (!empty($ordn[1])) {
				$this->filterByOehdnbr($ordn[1], Criteria::LESS_EQUAL);
			}
		} else {
			$this->filterByOehdnbr($ordn);
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
	   * Filter the query on the Oehdordrdate column
		*
	   * @param  mixed $orderdate   array or string
	   * @return $this|SalesOrderQuery The current query, for fluid interface
	   */
	  public function filterByOrderDate($orderdate) {
		  if (is_array($orderdate)) {
			  if (!empty($orderdate[0])) {
				  $this->filterByOehdordrdate($orderdate[0], Criteria::GREATER_EQUAL);
			  }

			  if (!empty($orderdate[1])) {
				  $this->filterByOehdordrdate($orderdate[1], Criteria::LESS_EQUAL);
			  }
		  } else {
			  $this->filterByOehdordrdate($orderdate);
		  }
		  return $this;
	  }

	  /**
 	 * Filter the query on the Oehdordrtot column
       *
 	 * @param  mixed $ordertotal   array or string
 	 * @return $this|SalesOrderQuery The current query, for fluid interface
 	 */
 	public function filterByOrderTotal($ordertotal) {
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
}
