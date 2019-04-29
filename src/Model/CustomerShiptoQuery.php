<?php

use Base\CustomerShiptoQuery as BaseCustomerShiptoQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'ar_ship_to' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class CustomerShiptoQuery extends BaseCustomerShiptoQuery {

	/**
	 * Returns CustomerShipto objects for Customer
	 * @param  string             $custID Customer ID
	 * @return ObjectCollection[]         CustomerShipto
	 */
	public function findByCustid($custID) {
		return $this->findByArcucustid($custID);
	}

	/**
	 * Returns the Number of CustomerShipto objects for Customer
	 * @param  string             $custID Customer ID
	 * @return int                        Number of Customer Shiptos
	 */
	public function countByCustid($custID) {
		return $this->filterByArcucustid($custID)->count();
	}
}
