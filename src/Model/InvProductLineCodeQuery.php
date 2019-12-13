<?php

use Base\InvProductLineCodeQuery as BaseInvProductLineCodeQuery;

/**
 * Class for performing query and update operations on the 'inv_plne_code' table.
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
 * @method  InvProductLineCode findOneByCode(string $code)      Return the first InvProductLineCode filtered by the intbplnecode column
 *
 * FindByXXX()
 *
 *
 */
class InvProductLineCodeQuery extends BaseInvProductLineCodeQuery {
    use QueryTraits;
}
