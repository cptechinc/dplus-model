<?php

use Base\ItemGroupcodeQuery as BaseItemGroupcodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_grup_code' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByItemgroup()
 * 
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method  ItemGroupcodeQuery filterByItemgroup($itemgroup)       Filter the query by the Intbgrup column
 * 
 * FindOne
 * @method  ItemGroupcode filterByItemgroup($itemgroup)       eturn the first ItemGroupcode filtered by the IntbGrup column
 * 
 * Find
 *
 */
class ItemGroupcodeQuery extends BaseItemGroupcodeQuery {
	use QueryTraits;
	
}
