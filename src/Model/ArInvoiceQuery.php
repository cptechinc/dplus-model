<?php

use Base\ArInvoiceQuery as BaseArInvoiceQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_inv' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByType()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
* @method  ArInvoiceQuery findOneByType(string $type)      Filter the Query by the arintype column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class ArInvoiceQuery extends BaseArInvoiceQuery {
	use QueryTraits;
}
