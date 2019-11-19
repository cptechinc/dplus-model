<?php

use Base\ApInvoiceDetailQuery as BaseApInvoiceDetailQuery;

use Dplus\Model\QueryTraits;

use Propel\Runtime\ActiveQuery\Criteria;

/**
 * Class for performing query and update operations on the 'ap_invoice_det' table.
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
  * @method  ApBuyer findOneByCode(string $code)	  Return the first ApBuyercode filtered by the aptbuyrcode column
  *
  * FindByXXX()
 */
class ApInvoiceDetailQuery extends BaseApInvoiceDetailQuery {
	use QueryTraits;

	/**
	 * Filter for Valid Item IDs
	 *
	 * @return ApInvoiceDetailQuery
	 */
	public function filterOnlyItemids() {
		return $this->filterByItemid(ApInvoiceDetail::NON_ITEM_ITEMIDS, Criteria::NOT_IN);
	}
	
	/**
	 * Filter for NON Item IDs
	 * NOTE: Usedfor getting the detail records that contain FREIGHT / TAX
	 *
	 * @return ApInvoiceDetailQuery
	 */
	public function filterOnlyNonItemids() {
		return $this->filterByItemid(ApInvoiceDetail::NON_ITEM_ITEMIDS, Criteria::IN);
	}
}
