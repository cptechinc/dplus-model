<?php

use Base\InvStockCodeQuery as BaseInvStockCodeQuery;

/**
 * Class for performing query and update operations on the 'inv_stck_code' table.
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
 * @method  InvStockCode findOneByCode(string $code)      Return the first InvStockCode filtered by the intbstckcode column
 *
 * FindByXXX()
 *
 *
 */
class InvStockCodeQuery extends BaseInvStockCodeQuery {
    use QueryTraits;
}
