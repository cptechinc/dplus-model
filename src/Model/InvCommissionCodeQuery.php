<?php

use Base\InvCommissionCodeQuery as BaseInvCommissionCodeQuery;

/**
 * Class for performing query and update operations on the 'inv_comm_code' table.
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
 * @method  InvCommissionCode findOneByCode(string $code)      Return the first InvCommissionCode filtered by the aptbuyrcode column
 *
 * FindByXXX()
 *
 *
 */
class InvCommissionCodeQuery extends BaseInvCommissionCodeQuery {
    use QueryTraits;
}
