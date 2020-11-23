<?php
use Propel\Runtime\ActiveQuery\Criteria;

use Base\PurchaseOrderQuery as BasePurchaseOrderQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'po_head' table
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByPonbr()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterBy
 *
 * FindOneBy
 * @method  PurchaseOrder findOneByPonbr(string $ponbr)		Return the first PurchaseOrder filtered by the PohdNbr column
 *
 * FindBy
 */
class PurchaseOrderQuery extends BasePurchaseOrderQuery {
	use QueryTraits;

	/**
	* Filter the query on the Pohdnbr column
	* @param  mixed  $ponbr             string|array
	* @param  string $comparison        Database Comparison Operator e.g. <=
	* @return $this|PurchaseOrderQuery  The current query, for fluid interface
	*/
	public function filterByPonbr($ponbr, $comparison = null) {
		return $this->filterByPohdnbr($ponbr, $comparison);
	}

	/**
	* Filter the query on the Apvevendid column
	* @param  mixed  $vendid	        string|array
	* @param  string $comparison        Database Comparison Operator e.g. <=
	* @return $this|PurchaseOrderQuery  The current query, for fluid interface
	*/
	public function filterByVendorid($vendid, $comparison = null) {
		return $this->filterByApvevendid($vendid, $comparison);
	}

	/**
	* Filter the query on the Apfmshipid column
	* @param  mixed  $vendid	        string|array
	* @param  string $comparison        Database Comparison Operator e.g. <=
	* @return $this|PurchaseOrderQuery  The current query, for fluid interface
	*/
	public function filterByShipfromid($vendid, $comparison = null) {
		return $this->filterByApfmshipid($vendid, $comparison);
	}

	/**
	* Filter the query on the Oehdordrdate column
	* @param  mixed  $orderdate	        string|array
	* @param  string $comparison        Database Comparison Operator e.g. <=
	* @return $this|PurchaseOrderQuery  The current query, for fluid interface
	*/
	public function filterByDate_ordered($orderdate, $comparison = null) {
		return $this->filterByPohdordrdate($orderdate, $comparison);
	}

	/**
	* Filter the query on the Pohdexptdatecolumn
	* @param  mixed  $orderdate	        string|array
	* @param  string $comparison        Database Comparison Operator e.g. <=
	* @return $this|PurchaseOrderQuery  The current query, for fluid interface
	*/
	public function filterByDate_expected($expecteddate, $comparison = null) {
		return $this->filterByPohdexptdate($expecteddate, $comparison);
	}

	/**
	 * Filter the Query on the Pohdstat Column
	 * @param  mixed  $status string|array
	 * @param  string $comparison        Database Comparison Operator e.g. <=
	 * @return $this|PurchaseOrderQuery  The current query, for fluid interface
	 */
	public function filterByStatus($status, $comparison = null) {
		$this->filterByPohdstat($status, $comparison);
		return $this;
	}
}
