<?php

use Base\ConfigQtQuery as BaseConfigQtQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'qt_config' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByKey(string $key)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 *
 * FindOne()
 * @method	Vendor findOneByKey(string $vendorID)	   Return the first ConfigQt filtered by the QttbConfKey column
 *
 * FindByXXX()
 *
 */
class ConfigQtQuery extends BaseConfigQtQuery {
	use QueryTraits;
}
