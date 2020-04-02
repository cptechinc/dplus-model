<?php

use Base\OptionsIiQuery as BaseOptionsIiQuery;

use Dplus\Model\QueryTraits;

/**
 * Skeleton subclass for performing query and update operations on the 'ii_options' table.
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
class OptionsIiQuery extends BaseOptionsIiQuery {
	use QueryTraits;
}
