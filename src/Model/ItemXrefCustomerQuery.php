<?php

use Base\ItemXrefCustomerQuery as BaseItemXrefCustomerQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'cust_item_xref' table.
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
 *
 * FindByXXX()
 * @method  ItemXrefCustomer[] findItemid(string $itemID)      Return the ItemXrefCustomer filtered by the inititemnbr column
 */
class ItemXrefCustomerQuery extends BaseItemXrefCustomerQuery {
	use QueryTraits;
}
