<?php

use Base\InvAssortmentCodeQuery as BaseInvAssortmentCodeQuery;

/**
 * Class for performing query and update operations on the 'inv_asst_code' table.
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
 * @method  InvAssortmentCode findOneByCode(string $code)      Return the first InvAssortmentCode filtered by the intbasstcode column
 *
 * FindByXXX()
 *
 *
 */
class InvAssortmentCodeQuery extends BaseInvAssortmentCodeQuery {
    use QueryTraits;
}
