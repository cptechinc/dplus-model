<?php

use Base\CustomerShiptoQuery as BaseCustomerShiptoQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_ship_to' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findByCustid()
 * 
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 *
 * FindOne
 * 
 * Find
 * @method     CustomerShipto[]|ObjectCollection findByCustid(string $custID)     Return the first CustomerShipto objects filtered by the Arcucustid column
 *
 *
 */
class CustomerShiptoQuery extends BaseCustomerShiptoQuery {
	use QueryTraits;

	/**
	 * Returns the Number of CustomerShipto objects for Customer
	 * @param  string             $custID Customer ID
	 * @return int                        Number of Customer Shiptos
	 */
	public function countByCustid($custID) {
		return $this->filterByArcucustid($custID)->count();
	}
}
