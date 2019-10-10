<?php

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
}
