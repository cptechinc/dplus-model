<?php

use Base\VendorQuery as BaseVendorQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ap_vend_mast' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByVendorid(string $vendorID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 *
 * FindOne()
 * @method	Vendor findOneByVendorid(string $vendorID)	   Return the first Vendor filtered by the ApveVendId column
 *
 * FindByXXX()
 *
 */
class VendorQuery extends BaseVendorQuery {
	use QueryTraits;

	/**
	 * Filter the query on the ApveVendId column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByApvevendid('fooValue');	 // WHERE ApveVendId = 'fooValue'
	 * $query->filterByApvevendid('%fooValue%', Criteria::LIKE); // WHERE ApveVendId LIKE '%fooValue%'
	 * </code>
	 *
	 * @param	  string $apvevendid The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|VendorQuery The current query, for fluid interface
	 */
	public function filterByVendorid($apvevendid = null, $comparison = null) {
		return $this->filterByApvevendid($apvevendid, $comparison);
	}

	public function get_months_sum($vendorID, $basecolumn, int $months = 1) {
		for ($i = 1; $i < $months + 1; $i++) {
			$month_string = $i < 10 ? "0$i" : $i;
			$array[] = "$basecolumn$month_string";
		}
		$columns = implode(" + ", $array);
		$sql = "SELECT ($columns) as purchases FROM ap_vend_mast WHERE ApveVendid = :vendorid";
		$params = array(':vendorid' => $vendorID);
		$result = $this->execute_query($sql, $params);
		return ($result->fetchColumn());
	}

	/**
	 * Return the number of Purchases in the last X Months for a Vendor
	 * @param  string	 $vendorID	 Vendor ID
	 * @param  int		 $monthsback Number of Months to go back
	 * @return int
	 */
	public function count_last_x_months_purchases($vendorID, int $months = 1) {
		$basecolumn = 'ApvePo24mo';
		return $this->get_months_sum($vendorID, $basecolumn, $months);
	}

	/**
	 * Return the total of Purchases in the last X Months for a Vendor
	 * @param  string	 $vendorID	 Vendor ID
	 * @param  int		 $monthsback Number of Months to go back
	 * @return int
	 */
	public function get_last_x_months_purchases_amt($vendorID, int $months = 1) {
		$basecolumn = 'ApvePur24mo';
		return $this->get_months_sum($vendorID, $basecolumn, $months);
	}

	/**
	 * Return the number of Invoices in the last X Months for a Vendor
	 * @param  string  $vendorID	 Vendor ID
	 * @param  int     $monthsback Number of Months to go back
	 * @return int
	 */
	public function count_last_x_months_invoices($vendorID, int $months = 1) {
		$basecolumn = 'ApveIcnt24mo';
		return $this->get_months_sum($vendorID, $basecolumn, $months);
	}

	/**
	 * Return the total of Invoices in the last X Months for a Vendor
	 * @param  string     $vendorID	 Vendor ID
	 * @param  int        $monthsback Number of Months to go back
	 * @return int
	 */
	public function get_last_x_months_invoices_amt($vendorID, int $months = 1) {
		$basecolumn = 'ApveInvc24mo';
		return $this->get_months_sum($vendorID, $basecolumn, $months);
	}

}
