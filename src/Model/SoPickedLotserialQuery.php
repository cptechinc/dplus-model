<?php

use Base\SoPickedLotserialQuery as BaseSoPickedLotserialQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_pulled' table.
 * 
 * PURPOSE: Querying Lotserials have been picked for a Sales Order
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByOrdernumber($ordn)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  SalesOrderLotserialQuery filterByOrdernumber(string $ordn)      filter the query by the oehhnbr column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class SoPickedLotserialQuery extends BaseSoPickedLotserialQuery {
	use QueryTraits;
}
