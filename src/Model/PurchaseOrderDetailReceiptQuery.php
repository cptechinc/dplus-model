<?php

use Base\PurchaseOrderDetailReceiptQuery as BasePurchaseOrderDetailReceiptQuery;

use Dplus\Model\QueryTraits;

/**
 * Skeleton subclass for performing query and update operations on the 'po_receipt_det' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByOrdernumber()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method  PurchaseOrderDetailReceivedQuery filterByPonbr(string $ponbr)       Filter the query on the pohdnbr column
 * @method  PurchaseOrderDetailReceivedQuery filterByLinenbr(int $Linenbr)      Filter the query on the podtline column
 *
 */
class PurchaseOrderDetailReceiptQuery extends BasePurchaseOrderDetailReceiptQuery {
	use QueryTraits;
}
