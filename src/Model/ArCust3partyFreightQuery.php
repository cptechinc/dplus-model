<?php

use Base\ArCust3partyFreightQuery as BaseArCust3partyFreightQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_3party' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: fllterByCustid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  rCust3partyFreightQuery  filterByCustid($custID)      Filter the query by the arcucustid column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 */
class ArCust3partyFreightQuery extends BaseArCust3partyFreightQuery {
	use QueryTraits;
}
