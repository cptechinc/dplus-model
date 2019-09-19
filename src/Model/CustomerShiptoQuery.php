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


	/**
	 * Filters the Query on the arcustid, arstshipid columns
	 *
	 * @param  string $custID   Customer ID
	 * @param  string $shiptoID Shipto ID
	 * @return CustomerShiptoQuery
	 */
	public function filterByCustidShiptoid($custID, $shiptoID) {
		$this->filterByArcucustid($custID);
		$this->filterByArstshipid($shiptoID);
		return $this;
	}

	/**
	 * Filters the Query on the arcustid, arstshipid columns and returns one
	 *
	 * @param  string $custID   Customer ID
	 * @param  string $shiptoID Shipto ID
	 * @return CustomerShipto
	 */
	public function findOneByCustidShiptoid($custID, $shiptoID) {
		$this->filterByCustidShiptoid($custID, $shiptoID);
		return $this->findOne();
	}

	/**
	 * Returns the Total Sum of the Sales Amounts going back x months for a customer
	 *
	 * @param  string  $custID Customer ID to filter on
	 * @param  string  $custID Shipto ID to filter on
	 * @param  int     $months Number of Months to go back
	 * @return float           Total Sales Amount
	 */
	public function get_lastxmonthsamount($custID, $shiptoID, int $months = 1) {
		$basecolumn = 'ArstSale24mo';
		$array = array();

		for ($i = 1; $i < $months + 1; $i++) {
			$array[] = "$basecolumn$i";
		}
		$columns = implode(" + ", $array);
		$sql = "SELECT ($columns) as amount FROM ar_ship_to WHERE ArcuCustId = :custid AND ArstShipid = :shipid";
		$params = array(':custid' => $custID, ':shipid' => $shiptoID);
		$result = $this->execute_query($sql, $params);
		return $result->fetchColumn();
	}

	/**
	 * Returns the Total Sum of the Sales Amounts going back x months for a customer
	 *
	 * @param  string  $custID Customer ID to filter on
	 * @param  string  $custID Shipto ID to filter on
	 * @param  int     $months Number of Months to go back
	 * @return float           Total Sales Amount
	 */
	public function get_lastxmonthscount($custID, $shiptoID, int $months = 1) {
		$basecolumn = 'ArstInv24mo';
		$array = array();

		for ($i = 1; $i < $months + 1; $i++) {
			$array[] = "$basecolumn$i";
		}
		$columns = implode(" + ", $array);
		$sql = "SELECT ($columns) as amount FROM ar_ship_to WHERE ArcuCustId = :custid AND ArstShipid = :shipid";
		$params = array(':custid' => $custID, ':shipid' => $shiptoID);
		$result = $this->execute_query($sql, $params);
		return $result->fetchColumn();
	}
}
