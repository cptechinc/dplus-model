<?php

use Base\SoFreightRateQuery as BaseSoFreightRateQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_frtrate' table.
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
 * @method  oFreightRate findOneByCode(string $code)      Return the first SoFreightRate filtered by the sfrtratecode column
 *
 * FindByXXX()
 */
class SoFreightRateQuery extends BaseSoFreightRateQuery {
	use QueryTraits;
}
