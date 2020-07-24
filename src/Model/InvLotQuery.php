<?php

use Base\InvLotQuery as BaseInvLotQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_inv_lot' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByLotserial()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  InvLotQuery filterByLotserial(string $lotserial)      Filter the Query on the inltlotser column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 */
class InvLotQuery extends BaseInvLotQuery {
	use QueryTraits;
}
