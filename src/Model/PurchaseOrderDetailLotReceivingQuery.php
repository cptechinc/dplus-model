<?php

use Base\PurchaseOrderDetailLotReceivingQuery as BasePurchaseOrderDetailLotReceivingQuery;


use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'po_tran_lot_det' table.
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
 * @method  PurchaseOrderDetailLotReceiving[]|ObjectCollection findByPonbr(string $ponbr)      Filter the query on the pohdnbr column & return PurchaseOrderDetailLotReceiving Objects
 */
class PurchaseOrderDetailLotReceivingQuery extends BasePurchaseOrderDetailLotReceivingQuery {
	use QueryTraits;

}
