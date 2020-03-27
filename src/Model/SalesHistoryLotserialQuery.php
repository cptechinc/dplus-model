<?php

use Base\SalesHistoryLotserialQuery as BaseSalesHistoryLotserialQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_lot_ser_hist' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByOrdernumber($ordn)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  SalesHistoryLotserialQuery filterByOrdernumber(string $ordn)      filter the query by the oehhnbr column
 *
 * FindOneByXXX()
 * 
 * FindByXXX()
 *
 */
class SalesHistoryLotserialQuery extends BaseSalesHistoryLotserialQuery {
	use QueryTraits;
}
