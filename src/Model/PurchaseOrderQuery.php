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
 * @method  PurchaseOrder findOneByPonbr(string $ponbr)      Return the first PurchaseOrder filtered by the PohdNbr column
 *
 * FindBy
 */
class PurchaseOrderQuery extends BasePurchaseOrderQuery {
	use QueryTraits;

	/**
	* Filter the query on the Oehdnbr column
	*
	* @param  mixed $ordn	 array or string
	* @return $this|SalesOrderQuery The current query, for fluid interface
	*/
   public function filterByPonbr($ponbr) {
	   if (is_array($ponbr)) {
		   if (!empty($ponbr[0])) {
			   $this->filterByPohdnbr($ponbr[0], Criteria::GREATER_EQUAL);
		   }

		   if (!empty($ponbr[1])) {
			   $this->filterByPohdnbr($ponbr[1], Criteria::LESS_EQUAL);
		   }
	   } else {
		   $this->filterByPohdnbr($ponbr);
	   }
	   return $this;
   }

   /**
	* Filter the query on the Arcucustid column
	*
	* @param  mixed $vendid   array or string
	* @return $this|SalesOrderQuery The current query, for fluid interface
	*/
   public function filterByVendorid($vendid) {
	   if (is_array($vendid)) {
		   if (!empty($vendid[0])) {
			   $this->filterByApvevendid($vendid[0], Criteria::GREATER_EQUAL);
		   }

		   if (!empty($vendid[1])) {
			   $this->filterByApvevendid($vendid[1], Criteria::LESS_EQUAL);
		   }
	   } else {
		   $this->filterByApvevendid($vendid, Criteria::EQUAL);
	   }
	   return $this;
   }

   /**
	* Filter the query on the Oehdordrdate column
	*
	* @param  mixed $orderdate	array or string
	* @return $this|SalesOrderQuery The current query, for fluid interface
	*/
   public function filterByDate_ordered($orderdate) {
	   if (is_array($orderdate)) {
		   if (!empty($orderdate[0])) {
			   $this->filterByPohdordrdate($orderdate[0], Criteria::GREATER_EQUAL);
		   }

		   if (!empty($orderdate[1])) {
			   $this->filterByPohdordrdate($orderdate[1], Criteria::LESS_EQUAL);
		   }
	   } else {
		   $this->filterByPohdordrdate($orderdate);
	   }
	   return $this;
   }

   /**
	* Filter the query on the Oehdordrdate column
	*
	* @param  mixed $orderdate	array or string
	* @return $this|SalesOrderQuery The current query, for fluid interface
	*/
   public function filterByDate_expected($expecteddate) {
	   if (is_array($expecteddate)) {
		   if (!empty($expecteddate[0])) {
			   $this->filterByPohdexptdate($expecteddate[0], Criteria::GREATER_EQUAL);
		   }

		   if (!empty($orderdate[1])) {
			   $this->filterByPohdexptdate($expecteddate[1], Criteria::LESS_EQUAL);
		   }
	   } else {
		   $this->filterByPohdexptdate($expecteddate);
	   }
	   return $this;
   }

   public function filterByStatus($status) {
	   $this->filterByPohdstat($status);
	   return $this;
   }
}
