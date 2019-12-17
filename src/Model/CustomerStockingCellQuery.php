<?php

use Base\CustomerStockingCellQuery as BaseCustomerStockingCellQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_cell_cell' table.
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
 * @method  CustomerStockingCell findOneByCode(string $code)      Return the first CustomerStockingCell filtered by the intbcellcode column
 *
 * FindByXXX()
 *
 *
 */
class CustomerStockingCellQuery extends BaseCustomerStockingCellQuery {
    use QueryTraits;
}
