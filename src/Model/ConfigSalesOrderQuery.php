<?php

use Base\ConfigSalesOrderQuery as BaseConfigSalesOrderQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_config' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByCode()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 *
 */
class ConfigSalesOrderQuery extends BaseConfigSalesOrderQuery {
	use QueryTraits;
}
