<?php

use Base\CustomerQuery as BaseCustomerQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'ar_cust_mast' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class CustomerQuery extends BaseCustomerQuery {
	/**
	 * Returns Customer object for Customer
	 * @param  string             $custID Customer ID           
	 * @return Customer                   
	 */
	public function findOneByCustid($custID) {
		return $this->findOneByArcucustid($custID);
	}
}
