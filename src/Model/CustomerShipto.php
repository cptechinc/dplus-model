<?php

use Base\CustomerShipto as BaseCustomerShipto;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_ship_to' table.
 *
 * NOTE: Foreign Key Relationship to Customer
 */
class CustomerShipto extends BaseCustomerShipto {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const YN_TRUE  = 'Y';
	const YN_FALSE = 'N';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'arstshipid',
		'shiptoID'     => 'arstshipid',
		'shiptoid'     => 'arstshipid',
		'custID'       => 'arcucustid',
		'custid'       => 'arcucustid',
		'name'         => 'arstname',
		'custname'     => 'arstname',
		'address1'     => 'arstadr1',
		'address'      => 'arstadr1',
		'address2'     => 'arstadr2',
		'address3'     => 'arstadr3',
		'country'      => 'arstctry',
		'city'         => 'arstcity',
		'state'        => 'arststat',
		'zip'          => 'arstzipcode',
		'salesperson1' => 'arspsaleper1',
		'salesperson2' => 'arspsaleper2',
		'salesperson3' => 'arspsaleper3',
		'shipvia'      => 'artbshipvia',
		'termscode'    => 'artmtermcd',
		'lastsaledate' => 'arstlastsaledate',
		'mtd_sales'    => 'arstsalemtd',
		'mtd_invoices' => 'arstinvmtd',
		'ytd_sales'    => 'arstsaleytd',
		'ytd_invoices' => 'arstinvytd',
		'warehouse'    => 'intbwhse',
		'require_po'   => 'arstcustpopram',
		'primary'      => 'arstprimshipid',
		'taxexemptnbr' => 'arsttaxexemnbr',
		'credithold'   => 'arstcredhold',
		'dateentered'  => 'arstdateopen',
		'taxcode'      => 'artbctaxcode',
		'backorder'    => 'arstbord',
		'usercode'     => 'arstusercode',
	);

	/**
	 * Return if Ship-to has a credit hold
	 * @return bool
	 */
	public function credithold() {
		return $this->credithold == 'Y';
	}

	/**
	 * Return of Ship-To allows Back Orders
	 * @return bool
	 */
	public function backorder() {
		return $this->backorder != 'N';
	}

	/**
	 * Return if PO is required
	 * @return bool
	 */
	public function require_po() {
		return in_array($this->require_po, Customer::REQUIRE_PO_FORCED);
	}

	/**
	 * Return Sales Amount for $months back
	 *
	 * @param  int   $monthsback
	 * @return float             Sales Amount
	 */
	public function get_24monthsale($monthsback) {
		$property = "arstsale24mo$monthsback";
		return $this->$property;
	}

	/**
	 * Return Invoice Countfor $months back
	 *
	 * @param  int   $monthsback
	 * @return float             Sales Amount
	 */
	public function get_24monthinvoice($monthsback) {
		$property = "arstinv24mo$monthsback";
		return $this->$property;
	}

	/**
	 * Returns the total Sales Amount of the last specified months
	 *
	 * @param  int  $months Number of Months Back
	 * @return float        Total Sales Amount
	 */
	public function get_lastxmonthsamount(int $months = 1) {
		$query = new CustomerShiptoQuery();
		return $query->get_lastxmonthsamount($this->custid, $this->id, $months);
	}

	/**
	 * Returns the total Number of Invoices in the last #months
	 *
	 * @param  int  $months Number of Months Back
	 * @return int          Number of Invoices
	 */
	public function get_lastxmonthscount(int $months = 1) {
		$query = new CustomerShiptoQuery();
		return $query->get_lastxmonthscount($this->custid, $this->id, $months);
	}

	/**
	 * Return Invoice Count for $months back
	 *
	 * @param  int   $monthsback
	 * @return float             Sales Amount
	 */
	public function get_24monthinvoicecount($monthsback = 1) {
		$property = "arcuinv24mo$monthsback";
		return $this->$property;
	}

	/**
	 * Returns if Customer is Tax Exempt
	 *
	 * @return bool
	 */
	public function is_taxexempt() {
		return !empty($this->arcutaxexemnbr);
	}

	/**
	 * Returns the Sum of the Sales Orders totals for this Customer ID
	 * @return float SUM(salesordertotal)
	 */
	public function getSalesOrdersAmt() {
		$query = new SalesOrderQuery();
		$query->filterByCustid($this->custid);
		$query->filterByShiptoid($this->shiptoid);
		$query->select_sum_ordertotal();
		return $query->findOne();
	}

/* =============================================================
	Year-to-Date functions
============================================================= */
	/**
	 * Return the Number of Months Back, the YTD start month is
	 * @return int
	 */
	private function getYtdMonthsBack() {
		$configCi  = ConfigCiQuery::create()->findOne();
		$thisMonth = date('n');
		$month = ($thisMonth + 13) - $configCi->ytdstartmonth;

		if ($month > 13) {
			$month =- 12;
		}
		return $month;
	}

	/**
	 * Return the Sum of YTD Column
	 * @param  string $basecol
	 * @return float|int
	 */
	private function sumOfYtdCol($basecol) {
		$month = $this->getYtdMonthsBack() - 1;
		$total   = 0;

		for ($i = 1; $i <= ($month); $i++) {
			if ($i >= 24) {
				continue;
			}
			$col = $basecol . $i;

			if (empty($this->$col) === false) {
				continue;
			}
			$total += $this->$col;
		}
		return $total;
	}

	/**
	 * Return the Total Sales Amt for Year-to-Date
	 * @return float
	 */
	public function getYtdSales() {
		$basecol = 'ArstSale24mo';
		return $this->sumOfYtdCol($basecol) + $this->mtd_sales;
	}

	/**
	 * Return the number of Invoices Year-to-Date
	 * @return int
	 */
	public function getYtdInvoices() {
		$basecol = 'ArstInv24mo';
		return $this->sumOfYtdCol($basecol) + $this->mtd_invoices;
	}

/* =============================================================
	Previous Fiscal Year functions
============================================================= */	
	/**
	 * Return Sum of Previous Fiscal Year col
	 * @param  string $basecol
	 * @return float|int
	 */
	private function sumPrevFiscalYearCol($basecol) {
		$month = $this->getYtdMonthsBack();
		$total   = 0;

		for ($i = $month; $i <= ($month + 11); $i++) {
			if ($i >= 24) {
				continue;
			}
			$col = $basecol . $i;

			if (empty($this->$col) === false) {
				continue;
			}
			$total += $this->$col;
		}
		return $total;
	}

	/**
	 * Return the Total Sales Amt for Year-to-Date
	 * @return float
	 */
	public function getPrevFiscalYrSalesAmt() {
		$basecol = 'ArstSale24mo';
		return $this->sumPrevFiscalYearCol($basecol) + $this->mtd_sales;
	}

	/**
	 * Return the number of Invoices Year-to-Date
	 * @return int
	 */
	public function getPrevFiscalYrSalesCount() {
		$basecol = 'ArstInv24mo';
		return $this->sumPrevFiscalYearCol($basecol) + $this->mtd_invoices;
	}
}
