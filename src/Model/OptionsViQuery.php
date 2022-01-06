<?php

use Base\OptionsViQuery as BaseOptionsViQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'vi_options' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByUserid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOneByXXX()
 * 
 * FindByXX
 */
class OptionsViQuery extends BaseOptionsViQuery {
	use QueryTraits;
}
