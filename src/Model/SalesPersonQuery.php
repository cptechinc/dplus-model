<?php

use Base\SalesPersonQuery as BaseSalesPersonQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_saleper1' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findById()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 *
 * FindOne
 * @method  SalesPerson findOneById(string $id)     Return the first SalesPerson filtered by the ArspSalePer1 column
 */
class SalesPersonQuery extends BaseSalesPersonQuery {
	use QueryTraits;
}
