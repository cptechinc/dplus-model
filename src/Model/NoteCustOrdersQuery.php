<?php

use Base\NoteCustOrderQuery as BaseNoteCustOrderQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_cust_ship_order' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByCustid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  NoteCustOrderQuery filterByCustid(string $id)      Filter the query by the arcucustid column
 * 
 * FindOneByXXX()
 * 
 *
 * FindByXXX()
 *
 *
 */
class NoteCustOrderQuery extends BaseNoteCustOrderQuery {
	use QueryTraits;

	/**
	 * Filter the query by the arcucustid column
	 * @param  string|mixed  $id
	 * @param  string       $comparison
	 * @return $this|NoteCustOrderQuery
	 */
	public function filterByCustid($id = null, $comparison = null) {
		return $this->filterByArcucustid($id, $comparison);
	}

	/**
	 * Filter the query by the Arstshipid column
	 * @param  string|mixed  $id
	 * @param  string       $comparison
	 * @return $this|NoteCustOrderQuery
	 */
	public function filterByShiptoid($id = null, $comparison = null) {
		return $this->filterByArstshipid($id, $comparison);
	}

	/**
	 * Filter the query by Customer ID, Ship-to ID
	 * @param  string|mixed  $custID
	 * @param  string|mixed  $shiptoID
	 * @return $this|NoteCustOrderQuery
	 */
	public function filterByCustidShiptoid($custID, $shiptoID){
		$this->filterByCustid($custID);
		return $this->filterByShiptoid($shiptoID);
	}
}
