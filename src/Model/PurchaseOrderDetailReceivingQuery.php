<?php

use Base\PurchaseOrderDetailReceivingQuery as BasePurchaseOrderDetailReceivingQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'po_tran_det' table.
 *
 */
class PurchaseOrderDetailReceivingQuery extends BasePurchaseOrderDetailReceivingQuery {
	use QueryTraits;

	/**
	* Filter the query on the Pohdnbr column
	* @param  mixed  $ponbr             string|array
	* @param  string $comparison        Database Comparison Operator e.g. <=
	* @return $this|PurchaseOrderQuery  The current query, for fluid interface
	*/
	public function filterByPonbr($ponbr, $comparison = null) {
		return $this->filterByPothnbr($ponbr, $comparison);
	}
}
}
