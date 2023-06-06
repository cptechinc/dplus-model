<?php
// Dplus Model
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base
use Base\Customer as BaseCustomer;

/**
 * Class for representing a row from the 'ar_cust_mast' table.
 * NOTE: Foreign Key Relationship to ArCommissionCode, Shipvia
 */
class Customer extends BaseCustomer {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const STATUS_ACTIVE = 'A';
	const YN_TRUE  = 'Y';
	const YN_FALSE = 'N';

	const REQUIRE_PO_DESCRIPTIONS = array(
		'N' => 'PO not forced - duplicates ok',
		'O' => 'PO not forced - no duplicates',
		'F' => 'PO forced - duplicates ok',
		'V' => 'PO forced - no duplicates',
	);

	const REQUIRE_PO_FORCED = array('F', 'V');
	const REQUIRE_PO_DUPLICATES_ALLOWED = array('N', 'F');
	const CREDITHOLD_OPTIONS = ['Y' => 'Yes', 'X' => 'Exclude', 'N' => 'No'];

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'custID'       => 'arcucustid',
		'id'           => 'arcucustid',
		'custid'       => 'arcucustid',
		'name'         => 'arcuname',
		'custname'     => 'arcuname',
		'address1'     => 'arcuadr1',
		'address2'     => 'arcuadr2',
		'address3'     => 'arcuadr3',
		'country'      => 'arcuctry',
		'city'         => 'arcucity',
		'state'        => 'arcustat',
		'zip'          => 'arcuzipcode',
		'salesperson1' => 'arspsaleper1',
		'salesperson2' => 'arspsaleper2',
		'salesperson3' => 'arspsaleper3',
		'lastsaledate' => 'arculastsaledate',
		'mtd_sales'    => 'arcusalemtd',
		'mtd_invoices' => 'arcuinvmtd',
		'ytd_sales'    => 'arcusaleytd',
		'ytd_invoices' => 'arcuinvytd',
		'highestbalance' => 'arcuhighbal',
		'creditlimit'    => 'arcucredlmt',
		'has_charge'     => 'arcufinchrg',
		'financecharge'  => 'arcunewfc', // Current Finance Charge
		'warehouse'      => 'intbwhse',
		'whseid'         => 'intbwhse',
		'remitwhseid'    => 'arcuremitwhse',
		'credithold'     => 'arcucredhold',
		'shipcomplete'   => 'arcushipcomp',
		'taxexemptcode'  => 'arcutaxexemnbr',
		'taxexemptnbr'   => 'arcutaxexemnbr',
		'active'         => 'arcuactiveinactive',
		'require_po'     => 'arcucustpoparam',
		'allowBackorder' => 'arcubord',
		'allowFinancecharge' => 'arcufinchrg',
		'additionaldiscount' => 'arcuaddlpricdisc',
		'dateentered'    => 'arcudateopen',
		'linemin'        => 'arculinemin',
		'ordermin'       => 'arcuordrmin',
		// AR Codes
		'taxcode'        => 'artbctaxcode',
		'type'           => 'artbtypecode',
		'typecode'       => 'artbtypecode',
		'pricecode'      => 'artbpriccode',
		'commcode'       => 'artbcommcode',
		'shipvia'      => 'artbshipvia',
		'shipviacode'  => 'artbshipvia',
		'termscode'    => 'artmtermcd',
		'stmtcode'     => 'arcustmtcode',
		'freightratecode'  => 'arcuchrgfrt',
		'usercode'         => 'arcuusercode',
		// Datetime
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);

/* =============================================================
	Boolean property Functions
============================================================= */
	/**
	 * Return if Customer Is Active
	 * @return bool
	 */
	public function isActive() {
		return $this->active == self::STATUS_ACTIVE;
	}

	/**
	 * Return if PO is required
	 * @return bool
	 */
	public function requirePo() {
		return in_array($this->require_po, self::REQUIRE_PO_FORCED);
	}

	/**
	 * Return if Customer has Credit Hold
	 * @return bool
	 */
	public function hasCredithold() {
		return strtoupper($this->credithold) == self::YN_TRUE;
	}

	/**
	 * Returns if Customer is Tax Exempt
	 * @return bool
	 */
	public function isTaxexempt() {
		return empty($this->arcutaxexemnbr) === false;
	}

	/**
	 * Return if shipcomplete is true
	 * @return bool
	 */
	public function shipcomplete() {
		return strtoupper($this->credithold) == self::YN_TRUE;
	}

	/**
	 * Returns if Customer has a So Freight Rate Code
	 * @return bool
	 */
	public function hasFreightRateCode() {
		return empty($this->freightratecode) === false;
	}

	/**
	 * Return Credit Hold description
	 * @return string
	 */
	public function credithold() {
		return self::CREDITHOLD_OPTIONS[strtoupper($this->credithold)];
	}


/* =============================================================
	Property Functions
============================================================= */
	/**
	 * Returns the total Sales Amount of the last specified months
	 * @param  int  $months Number of Months Back
	 * @return float        Total Sales Amount
	 */
	public function getLastXMonthsSalesAmt(int $months = 1) {
		$query = new CustomerQuery();
		return $query->get_lastxmonthsamount($this->id, $months);
	}

	/**
	 * Returns the total Number of Invoices in the last #months
	 * @param  int  $months Number of Months Back
	 * @return int          Number of Invoices
	 */
	public function getLastXMonthsSalesCount(int $months = 1) {
		$query = new CustomerQuery();
		return $query->get_lastxmonthscount($this->id, $months);
	}

	/**
	 * Return Sales Amount for $months back
	 * @param  int   $monthsback
	 * @return float             Sales Amount
	 */
	public function getXMonthsBackSalesAmt($monthsback = 1) {
		$property = "arcusale24mo$monthsback";
		return $this->$property;
	}

	/**
	 * Return Sales Amount for $months back
	 * @param  int   $monthsback
	 * @return float             Sales Amount
	 */
	public function getXMonthsBackSalesCount($monthsback = 1) {
		$property = "arcuinv24mo$monthsback";
		return $this->$property;
	}

/* =============================================================
	Query-based Functions
============================================================= */

	/**
	 * Return the Sum of Order Totals for this Customer
	 * @return float
	 */
	public function getSalesOrdersAmt() {
		$query = new SalesOrderQuery();
		$query->filterbyCustId($this->id);
		$query->select_sum_ordertotal();
		return $query->findOne();
	}

	/**
	 * Returns CustomerShipto objects for Customer
	 * @return ObjectCollection[] CustomerShipto
	 */
	public function getShiptos() {
		$q = new CustomerShiptoQuery();
		return $q->findByCustid($this->id);
	}

	/**
	 * Returns the Number of CustomerShiptos with this Customer ID
	 * @return int Number of CustomerShipto
	 */
	public function countShiptos() {
		$query = new CustomerShiptoQuery();
		return $query->filterByCustid($this->id)->count();
	}

	/**
	 * Return CustomerShipto
	 * @param string $shiptoid
	 * @return CustomerShipto
	 */
	public function getShipto($shiptoid) {
		$query = new CustomerShiptoQuery();
		$query->filterByCustid($this->id);
		return $query->findOne();
	}

	/**
	 * Return Tax Code Description
	 * @return string
	 */
	public function taxcode() {
		$q = ArTaxCodeQuery::create();
		$q->select(ArTaxCode::aliasproperty('description'));
		$q->filterById($this->taxcode);

		if ($q->count() === 0) {
			return '';
		}
		return $q->findOne();
	}

	/**
	 * Return Type Code Description
	 * @return string
	 */
	public function type() {
		$q = ArCustTypeCodeQuery::create();
		$q->select(ArCustTypeCode::aliasproperty('description'));
		$q->filterByCode($this->type);

		if ($q->count() === 0) {
			return '';
		}
		return $q->findOne();
	}

	/**
	 * Return Terms Code Description
	 * @return string
	 */
	public function termscode() {
		$q = ArTermsCodeQuery::create();
		$q->select(ArTermsCode::aliasproperty('description'));
		$q->filterByCode($this->termscode);

		if ($q->count() === 0) {
			return '';
		}
		return $q->findOne();
	}

	/**
	 * Return Price Code Description
	 * @return string
	 */
	public function pricecode() {
		$q = ArPriceCodeQuery::create();
		$q->select(ArPriceCode::aliasproperty('description'));
		$q->filterByCode($this->pricecode);

		if ($q->count() === 0) {
			return '';
		}
		return $q->findOne();
	}
	
	/**
	 * Return total amount for Ar Invoices for this customer
	 * @return float
	 */
	public function getArInvoicesTotalAmt() {
		$col = ArInvoice::aliasproperty('total');
		$q = ArInvoiceQuery::create();
		$q->withColumn("SUM($col)", "total");
		$q->select('total');
		$q->filterByCustid($this->custid);
		return $q->findOne();
	}

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
	 * Return the Number of Sales for previous Fiscal Year
	 * @return int
	 */
	public function getPrevFiscalYrSalesCount() {
		$month = $this->getYtdMonthsBack();

		$basecol = 'ArcuInv24mo';
		$count   = 0;

		for ($i = $month; $i <= ($month + 11); $i++) {
			if ($i >= 24) {
				continue;
			}
			$col = $basecol . $i;

			if (empty($this->$col) === false) {
				continue;
			}
			$count += $this->$col;
		}
		return $count;
	}

	/**
	 * Return the total Amount of Sales for previous Fiscal Year
	 * @return float
	 */
	public function getPrevFiscalYrSalesAmt() {
		$month = $this->getYtdMonthsBack();

		$basecol = 'ArcuSale24mo';
		$count   = 0;

		for ($i = $month; $i <= ($month + 11); $i++) {
			if ($i >= 24) {
				continue;
			}
			$col = $basecol . $i;

			if (empty($this->$col) === false) {
				continue;
			}
			$count += $this->$col;
		}
		return $count;
	}


/* =============================================================
	Legacy Functions
============================================================= */
	public function is_active() {return $this->isActive();}
	public function require_po() {return $this->requirePo();}
	public function has_credithold() {return $this->hasCredithold();}
	public function get_shiptos() {return $this->getShiptos();}
	public function count_shiptos() {return $this->countShiptos();}
	public function get_shipto($shiptoid) {return $this->getShipto($shiptoid);}
	public function get_lastxmonthsamount(int $months = 1) {return $this->getLastXMonthsSalesAmt($months);}
	public function get_lastxmonthscount(int $months = 1) {return $this->getLastXMonthsSalesCount($months);}
	public function get_24monthsale($monthsback = 1) {return $this->getXMonthsBackSaleAmt($monthsback);}
	public function get_24monthinvoicecount($monthsback = 1) {return $this->getXMonthsBackSalesCount($monthsback);}
	public function is_taxexempt() {return $this->isTaxexempt();}
	public function get_orders_count() {$this->countSalesOrders();}
	public function get_orders_amount() {$this->getSalesOrdersAmt();}
}
