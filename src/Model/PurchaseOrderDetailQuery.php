<?php

use Base\PurchaseOrderDetailQuery as BasePurchaseOrderDetailQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'po_detail' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findByPonbr()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterBy
 *
 * FindOneBy
 * 
 * FindBy
 * @method  PurchaseOrderDetail[]|ObjectCollection findByPonbr(string $ponbr)      Filter the query on the pohdnbr column & return PurhcaseOrderDetail Received Objects
 */
class PurchaseOrderDetailQuery extends BasePurchaseOrderDetailQuery {
	use QueryTraits;

	/**
	* Filter the query on the Pohdnbr column
	* @param  mixed  $ponbr             string|array
	* @param  string $comparison        Database Comparison Operator e.g. <=
	* @return $this|PurchaseOrderDetailQuery  The current query, for fluid interface
	*/
	public function filterByPonbr($ponbr, $comparison = null) {
		return $this->filterByPohdnbr($ponbr, $comparison);
	}

	/**
	* Filter the query on the Intbwhse column
	* @param  mixed  $whseID            string|array
	* @param  string $comparison        Database Comparison Operator e.g. <=
	* @return $this|PurchaseOrderDetailQuery  The current query, for fluid interface
	*/
	public function filterByWhseid($whseID, $comparison = null) {
		return $this->filterByIntbwhse($whseID, $comparison);
	}

	/**
	 * Filter the query by Status Closed
	 * @param  string $comparison
	 * @return $this|PurchaseOrderDetailQuery  The current query, for fluid interface
	 */
	public function filterByStatusClosed($comparison = null) {
		return $this->filterByPodtstat(PurchaseOrderDetail::STATUS_CLOSED, $comparison);
	}

	/**
	 * Filter the query by Status Open
	 * @param  string $comparison
	 * @return $this|PurchaseOrderDetailQuery  The current query, for fluid interface
	 */
	public function filterByStatusOpen($comparison = null) {
		return $this->filterByPodtstat(PurchaseOrderDetail::STATUS_OPEN, $comparison);
	}
}
