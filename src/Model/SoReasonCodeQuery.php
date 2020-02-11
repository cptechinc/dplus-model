<?php

use Base\SoReasonCodeQuery as BaseSoReasonCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_reas_code' table.
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
 * @method  SoReasonCode findOneByCode(string $code)      Return the first SoReasonCode filtered by the oetbreascode column
 *
 * FindByXXX()
 *
 *
 */
class SoReasonCodeQuery extends BaseSoReasonCodeQuery {
	use QueryTraits;
}
