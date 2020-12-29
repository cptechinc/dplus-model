<?php

use Base\ConfigCcQuery as BaseConfigCcQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'cc_config' table.
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
 * 
 * FindByXXX()
 */
class ConfigCcQuery extends BaseConfigCcQuery {
	use QueryTraits;
}
