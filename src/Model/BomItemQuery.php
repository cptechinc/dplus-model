<?php

use Base\BomItemQuery as BaseBomItemQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'pr_bmat_head' table.
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
 * @method  BomItem findOneByItemid(string $itemID)      Return the first BomItemfiltered by the bomhproditem column
 *
 * FindByXXX()
 */
class BomItemQuery extends BaseBomItemQuery {
	use QueryTraits;
}
