<?php

use Base\CustomerQuery as BaseCustomerQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_cust_mast' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByCustid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 *
 * FindOne
 * @method     Customer findOneByCustid(string $custID)     Return the first ItemMasterItem filtered by the Arcucustid column
 *
 * Find
 *
 */
class CustomerQuery extends BaseCustomerQuery {
	use QueryTraits;

	/**
	 * Returns the Total Sum of the Sales Amounts going back x months for a customer
	 *
	 * @param  string  $custID Customer ID to filter on
	 * @param  int     $months Number of Months to go back
	 * @return float           Total Sales Amount
	 */
	public function get_lastxmonthsamount($custID, int $months = 1) {
		$basecolumn = 'ArcuSale24mo';
		$array = array();

		for ($i = 1; $i < $months + 1; $i++) {
			$array[] = "$basecolumn$i";
		}
		$columns = implode(" + ", $array);
		$sql = "SELECT ($columns) as amount FROM ar_cust_mast WHERE ArcuCustId = :custid";
		$params = array(':custid' => $custID);
		$result = $this->execute_query($sql, $params);
		return $result->fetchColumn();
	}

	/**
	 * Returns the Total Sum of the Sales Amounts going back x months for a customer
	 *
	 * @param  string  $custID Customer ID to filter on
	 * @param  int     $months Number of Months to go back
	 * @return float           Total Sales Amount
	 */
	public function get_lastxmonthscount($custID, int $months = 1) {
		$basecolumn = 'ArcuInv24mo';
		$array = array();

		for ($i = 1; $i < $months + 1; $i++) {
			$array[] = "$basecolumn$i";
		}
		$columns = implode(" + ", $array);
		$sql = "SELECT ($columns) as amount FROM ar_cust_mast WHERE ArcuCustId = :custid";
		$params = array(':custid' => $custID);
		$result = $this->execute_query($sql, $params);
		return $result->fetchColumn();
	}
}
