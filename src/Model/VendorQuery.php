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
	 * @see self::filterByApvevendid()
	 * @param  string       $apvevendid The value to use as filter.
	 * @param  string       $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this|VendorQuery        The current query, for fluid interface
	 */
	public function filterByVendorid($apvevendid = null, $comparison = null) {
		return $this->filterByApvevendid($apvevendid, $comparison);
	}

	/**
	 * Return Sum of Column for Months Back
	 * NOTE: used for getting the number of pos, amounts
	 * @param  string  $vendorID
	 * @param  string  $basecolumn
	 * @param  int     $months
	 * @return float
	 */
	protected function getMonthsBackSum($vendorID, $basecolumn, int $months = 1) {
		for ($i = 1; $i < $months + 1; $i++) {
			$month = $i < 10 ? "0$i" : $i;
			$array[] = "$basecolumn$month";
		}
		$columns = implode(" + ", $array);
		$this->withColumn("($columns)", 'amount');
		$this->select('amount');
		$this->filterByVendorid($vendorID);
		return $this->findOne();
	}

	/**
	 * Return the number of Purchases in the last X Months for a Vendor
	 * @param  string	 $vendorID	 Vendor ID
	 * @param  int		 $monthsback Number of Months to go back
	 * @return int
	 */
	public function countLastXMonthsPurchases($vendorID, int $months = 1) {
		return $this->getMonthsBackSum($vendorID, 'ApvePo24mo', $months);
	}

	/**
	 * Return the total of Purchases in the last X Months for a Vendor
	 * @param  string	 $vendorID	 Vendor ID
	 * @param  int		 $monthsback Number of Months to go back
	 * @return int
	 */
	public function getLastXMonthsPurchasesTotalAmt($vendorID, int $months = 1) {
		return $this->getMonthsBackSum($vendorID, 'ApvePur24mo', $months);
	}

	/**
	 * Return the number of Invoice in the last X Months for a Vendor
	 * @param  string	 $vendorID	 Vendor ID
	 * @param  int		 $monthsback Number of Months to go back
	 * @return int
	 */
	public function countLastXMonthsInvoices($vendorID, int $months = 1) {
		return $this->getMonthsBackSum($vendorID, 'ApveIcnt24mo', $months);
	}

	/**
	 * Return the total of Invoices in the last X Months for a Vendor
	 * @param  string	 $vendorID	 Vendor ID
	 * @param  int		 $monthsback Number of Months to go back
	 * @return int
	 */
	public function getLastXMonthsInvoicesTotalAmt($vendorID, int $months = 1) {
		return $this->getMonthsBackSum($vendorID, 'ApveInvc24mo', $months);
	}

/* =============================================================
	Legacy Functions
============================================================= */
	public function get_months_sum($vendorID, $basecolumn, int $months = 1) {return $this->getMonthsBackSum($vendorID, $basecolumn, $months);}
	public function count_last_x_months_purchases($vendorID, int $months = 1) {return $this->countLastXMonthsPurchases($vendorID, $months);}
	public function get_last_x_months_purchases_amt($vendorID, int $months = 1) {return $this->getLastXMonthsPurchasesTotalAmt($vendorID, $months);}
	public function count_last_x_months_invoices($vendorID, int $months = 1) {return $this->countLastXMonthsInvoices($vendorID, $months);}
	public function get_last_x_months_invoices_amt($vendorID, int $months = 1) {return $this->getLastXMonthsInvoicesTotalAmt($vendorID, $months);}

}
