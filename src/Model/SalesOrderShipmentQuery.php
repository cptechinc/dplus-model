<?php

use Base\SalesOrderShipmentQuery as BaseSalesOrderShipmentQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_hist_ship' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findByOrdernumber()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 *
 * FindOne
 * 
 * Find
 * @method  SalesOrderShipment[]|ObjectCollection findByOrdernumber(string $ordn)  Filter the query on the Oehshnbr column
 */
class SalesOrderShipmentQuery extends BaseSalesOrderShipmentQuery {
	use QueryTraits;
}
