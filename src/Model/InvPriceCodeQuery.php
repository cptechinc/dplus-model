<?php

use Base\InvPriceCodeQuery as BaseInvPriceCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_pric_code' table.
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
 * @method  InvPriceCode findOneByCode(string $code)      Return the first InvPriceCode filtered by the intbpricgrup column
 *
 * FindByXXX()
 *
 *
 */
class InvPriceCodeQuery extends BaseInvPriceCodeQuery {
    use QueryTraits;
}
