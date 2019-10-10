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

}
