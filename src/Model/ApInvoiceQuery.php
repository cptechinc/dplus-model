<?php
use Propel\Runtime\ActiveQuery\Criteria;

use Base\ApInvoiceQuery as BaseApInvoiceQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ap_invoice_head' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByInvnbr()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 *
 * FindOneByXXX()
 * @method  ApInvoice findOneByInvnbr(string $invnbr)		Return the first ApInvoice filtered by the Apihinvnbr column
 *
 * FindByXXX()
 * 
 */
class ApInvoiceQuery extends BaseApInvoiceQuery {
	use QueryTraits;

	/**
	* Filter the query on the Apihinvnbr column
	*
	* @param  mixed $invnbr	        string|array
	* @return $this|ApInvoiceQuery  The current query, for fluid interface
	*/
	public function filterByInvnbr($invnbr, $comparison = null) {
		return $this->filterByApihinvnbr($invnbr, $comparison);
	}

	/**
	* Filter the query on the Apvevendid column
	*
	* @param  mixed $vendorID	       string|array
	* @return $this|ApInvoiceQuery The current query, for fluid interface
	*/
	public function filterByVendorid($vendorID, $comparison = null) {
		return $this->filterByApvevendid($vendorID, $comparison);
	}

	/**
	* Filter the query on the Apihinvdate column
	*
	* @param  mixed invoicedate	    string|array
	* @return $this|ApInvoiceQuery  The current query, for fluid interface
	*/
	public function filterByDate_invoiced($invoicedate, $comparison = null) {
		return $this->filterByApihinvdate($invoicedate, $comparison);
	}
}
