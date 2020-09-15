<?php

use Base\BomComponentQuery as BaseBomComponentQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'pr_bmat_det' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByItemid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOneByXXX()
 * @method  BomComponent findOneByItemid(string $itemID)      Return the first BomComponent filtered by the bomdusagitem column
 *
 * FindByXXX()
 */
class BomComponentQuery extends BaseBomComponentQuery {
	use QueryTraits;
}
