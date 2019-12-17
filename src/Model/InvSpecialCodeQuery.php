<?php

use Base\InvSpecialCodeQuery as BaseInvSpecialCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_spit_code' table.
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
 * @method  InvSpecialCode findOneByCode(string $code)      Return the first InvSpecialCode filtered by the intbspitcode column
 *
 * FindByXXX()
 *
 *
 */
class InvSpecialCodeQuery extends BaseInvSpecialCodeQuery {
    use QueryTraits;
}
