<?php

use Base\ArContactQuery as BaseArContactQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_cont_mast' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class ArContactQuery extends BaseArContactQuery {
	use QueryTraits;

	/**
	 * Filter the Query By Cust ID, Ship-to ID
	 * @param  mixed  $arcucustid
	 * @param  string $comparison
	 * @return CustomerShiptoQuery
	 */
	public function filterByCustid($arcucustid = null, $comparison = null) {
		return $this->filterByArcucustid($arcucustid, $comparison);
	}

	/**
	 * Filter the Query By Cust ID, Ship-to ID
	 * @param  mixed  $shiptoID
	 * @param  string $comparison
	 * @return CustomerShiptoQuery
	 */
	public function filterByShiptoid($shiptoID = null, $comparison = null) {
		return $this->filterByArstshipid($shiptoID, $comparison);
	}

	/**
	 * Filter the Query on the arcustid, arstshipid columns
	 * @param  string $custID   Customer ID
	 * @param  string $shiptoID Shipto ID
	 * @return CustomerShiptoQuery
	 */
	public function filterByCustidShiptoid($custID, $shiptoID) {
		$this->filterByCustid($custID);
		$this->filterByShiptoid($shiptoID);
		return $this;
	}
}
