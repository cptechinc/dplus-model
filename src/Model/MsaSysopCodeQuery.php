<?php

use Base\MsaSysopCodeQuery as BaseMsaSysopCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'sys_opt_options' table.
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
 * @method  MsaSysopCode findOneByCode(string $code)      Return the first MsaSysopCodecode filtered by the msasysopcodecode column
 *
 * FindByXXX()
 *
 */
class MsaSysopCodeQuery extends BaseMsaSysopCodeQuery {
	use QueryTraits;
}
