<?php

use Base\NotePredefinedQuery as BaseNotePredefinedQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_pre_defined' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterById()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  NotePredefinedQuery filterById(string $id)      Filter the Query on the qnpdntcode column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class NotePredefinedQuery extends BaseNotePredefinedQuery {
	use QueryTraits;
}
