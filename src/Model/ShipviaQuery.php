<?php

use Base\ShipviaQuery as BaseShipviaQuery;

use Dplus\Model\QueryTraits;

/**
* Class for performing query and update operations on the 'ar_cust_svia' table.
*
* NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
* methods with an alias
* EXAMPLE: findByQuotenumber()
*
* Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
* -----------------------------------------------------------------------------------------
* Filters
*
* FindOne
* 
* Find
*
*/
class ShipviaQuery extends BaseShipviaQuery {
	use Dplus\Model\QueryTraits;
}
