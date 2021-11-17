<?php

use Base\SoAllocatedLotserialQuery as BaseSoAllocatedLotserialQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_pre_allo' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByOrdn($ordn)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ApBuyer filterByOrdn(string $ordn)      Return the Query filtered by the oehdnbr column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class SoAllocatedLotserialQuery extends BaseSoAllocatedLotserialQuery {
	use QueryTraits;
}
