<?php
use Propel\Runtime\ActiveQuery\Criteria;

use Base\ApInvoiceQuery as BaseApInvoiceQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ap_invoice_head' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByCode()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 *
 * FindOneByXXX()
 * @method  ApBuyer findOneByCode(string $code)      Return the first ApBuyercode filtered by the aptbuyrcode column
 *
 * FindByXXX()
 */
class ApInvoiceQuery extends BaseApInvoiceQuery {
    use QueryTraits;

    /**
	* Filter the query on the Oehdnbr column
	*
	* @param  mixed $ordn	 array or string
	* @return $this|SalesOrderQuery The current query, for fluid interface
	*/
   public function filterByInvnbr($invnbr) {
	   if (is_array($invnbr)) {
		   if (!empty($invnbr[0])) {
			   $this->filterByApihinvnbr($invnbr[0], Criteria::GREATER_EQUAL);
		   }

		   if (!empty($invnbr[1])) {
			   $this->filterByApihinvnbr($invnbr[1], Criteria::LESS_EQUAL);
		   }
	   } else {
		   $this->filterByApihinvnbr($invnbr);
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
   public function filterByDate_invoiced($invoiceddate) {
	   if (is_array($invoiceddate)) {
		   if (!empty($invoiceddate[0])) {
			   $this->filterByApihinvdate($invoiceddate[0], Criteria::GREATER_EQUAL);
		   }

		   if (!empty($orderdate[1])) {
			   $this->filterByApihinvdate($invoiceddate[1], Criteria::LESS_EQUAL);
		   }
	   } else {
		   $this->filterByApihinvdate($invoiceddate);
	   }
	   return $this;
   }

}
