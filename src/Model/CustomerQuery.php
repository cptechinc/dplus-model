<?php

use Base\CustomerQuery as BaseCustomerQuery;
use Propel\Runtime\Propel;

use Dplus\Model\QueryTraits;

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
	use QueryTraits;

	/**
	 * Returns Customer object for Customer
	 * @param  string             $custID Customer ID
	 * @return Customer
	 */
	public function findOneByCustid($custID) {
		return $this->findOneByArcucustid($custID);
	}

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
