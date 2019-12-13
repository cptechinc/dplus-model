<?php

use Base\MsdsCodeQuery as BaseMsdsCodeQuery;

/**
 * Class for performing query and update operations on the 'inv_msds_code' table.
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
 * @method  MsdsCode findOneByCode(string $code)      Return the first MsdsCode filtered by the intbmsdscode column
 *
 * FindByXXX()
 *
 *
 */
class MsdsCodeQuery extends BaseMsdsCodeQuery {
    use QueryTraits;
}
