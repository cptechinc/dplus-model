<?php

use Base\SalesOrderShipmentQuery as BaseSalesOrderShipmentQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'so_hist_ship' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class SalesOrderShipmentQuery extends BaseSalesOrderShipmentQuery {

	/**
	 * Return SalesOrderShipment objects filtered by the OehshNbr column
	 * @param  string $ordn Order Number
	 * @return ChildSalesOrderShipment[]|ObjectCollection
	 */
	public function findByOrderNumber($ordn) {
		$this->clear();
		$this->filterByOrderNumber($ordn);
		return $this->find();
	}

	/**
	 * Filter the query by the Sales Order Number
	 *
	 * @param  string $ordn Sales Order Number
	 * @return void
	 */
	public function filterByOrderNumber($ordn)  {
		$this->filterByOehshnbr($ordn);
		return $this;
	}
}
