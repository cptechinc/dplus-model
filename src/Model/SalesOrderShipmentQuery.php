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
 */
class SalesOrderShipmentQuery extends BaseSalesOrderShipmentQuery {
	use QueryTraits;
}
