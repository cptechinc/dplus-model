<?php

use Base\ArTermsCode as BaseArTermsCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_term_code' table.
 *
 */
class ArTermsCode extends BaseArTermsCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 4;

	const STANDARD_TERMS_SPLIT = 6;
	const EOM_TERMS_SPLIT = 3;

	const DEFAULT_METHOD = 'S';
	const DEFAULT_TYPE	 = 'STD';
	const DEFAULT_HOLD	 = 'N';
	const DEFAULT_FREIGHT_ALLOWED = 'N';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'			   => 'artmtermcd',
		'code'			   => 'artmtermcd',
		'description'	   => 'artmtermdesc',
		'method'		   => 'artmmethod',
		'type'			   => 'artmtype',
		'hold'			   => 'artmhold',
		'exp_date'		   => 'artmexpiredate',
		'expiredate'	   => 'artmexpiredate',
		'freight_allow'    => 'artmfrtallow',
		'freightallow'	   => 'artmfrtallow',
		'cc_prefix' 	   => 'artmccprefix',
		'ccprefix'		   => 'artmccprefix',
		'country'		   => 'artmctry',
		'term_group'	   => 'artmtermgrup',
		'date'			   => 'dateupdtd',
		'time'			   => 'timeupdtd'
	);

	const BASECOL_STD_ORDER_PERCENT 	= 'artmorderpct';
	const BASECOL_STD_DISCOUNT_PERCENT	= 'artmdiscpct';
	const BASECOL_STD_DISCOUNT_DAYS 	= 'artmdiscdays';
	const BASECOL_STD_DISCOUNT_DAY		= 'artmdiscday';
	const BASECOL_STD_DISCOUNT_DATE 	= 'artmdiscdate';
	const BASECOL_STD_DUE_DAYS       	= 'artmduedays';
	const BASECOL_STD_DUE_DAY 	        = 'artmdueday';
	const BASECOL_STD_DUE_DATE 	        = 'artmduedate';
	const BASECOL_STD_PLUS_MONTHS 	    = 'artmplusmonths';
	const BASECOL_STD_PLUS_YEARS 	    = 'artmplusyear';

	const BASECOL_EOM_DAY_FROM 	        = 'artmdayfrom';
	const BASECOL_EOM_DAY_THRU 	        = 'artmdaythru';
	const BASECOL_EOM_DISCOUNT_PERCENT	= 'artmeomdiscpct';
	const BASECOL_EOM_DISCOUNT_DAY	    = 'artmeomdiscday';
	const BASECOL_EOM_DISCOUNT_MONTHS   = 'artmeomdiscmonths';
	const BASECOL_EOM_DUE_DAY           = 'artmeomdueday';
	const BASECOL_EOM_PLUS_MONTHS       = 'artmeomplusmonths';

	/**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}

    public function get_standard_terms_split() {
		return self::STANDARD_TERMS_SPLIT;
	}

    public function get_eom_terms_split() {
		return self::EOM_TERMS_SPLIT;
	}
	
	private function isValidStdSplit($index) {
		return $index <= self::STANDARD_TERMS_SPLIT;
	}

	private function isValidEomSplit($index) {
		return $index <= self::EOM_TERMS_SPLIT;
	}

	private function isValidStdBaseCol($col) {
		$validCols = [
			self::BASECOL_STD_ORDER_PERCENT,
			self::BASECOL_STD_DISCOUNT_PERCENT,
			self::BASECOL_STD_DISCOUNT_DAYS,
			self::BASECOL_STD_DISCOUNT_DAY,
			self::BASECOL_STD_DISCOUNT_DATE,
			self::BASECOL_STD_DUE_DAYS,
			self::BASECOL_STD_DUE_DAY,
			self::BASECOL_STD_DUE_DATE,
			self::BASECOL_STD_PLUS_MONTHS,
			self::BASECOL_STD_PLUS_YEARS,
		];
		return in_array($col, $validCols);
	}

	private function isValidEomBaseCol($col) {
		$validCols = [
			self::BASECOL_EOM_DAY_FROM,
			self::BASECOL_EOM_DAY_THRU,
			self::BASECOL_EOM_DISCOUNT_PERCENT,
			self::BASECOL_EOM_DISCOUNT_DAY,
			self::BASECOL_EOM_DISCOUNT_MONTHS,
			self::BASECOL_EOM_DUE_DAY,
			self::BASECOL_EOM_PLUS_MONTHS,
		];
		return in_array($col, $validCols);
	}

	private function setStdColByIndex($baseCol, $index, $value) {
		if ($this->isValidStdSplit($index) === false || $this->isValidStdBaseCol($baseCol) === false) {
			return false;
		}
		$setCol = 'set' . ucfirst($baseCol . $index);
		return $this->$setCol($value);
	}

	private function setEomColByIndex($baseCol, $index, $value) {
		if ($this->isValidEomSplit($index) === false || $this->isValidEomBaseCol($baseCol) === false) {
			return false;
		}
		$setCol = 'set' . ucfirst($baseCol . $index);
		return $this->$setCol($value);
	}

	private function getStdColByIndex($baseCol, $index) {
		if ($this->isValidStdSplit($index) === false || $this->isValidStdBaseCol($baseCol) === false) {
			return false;
		}
		$col = $baseCol . $index;
		return $this->$col;
	}

	private function getEomColByIndex($baseCol, $index) {
		if ($this->isValidEomSplit($index) === false || $this->isValidEomBaseCol($baseCol) === false) {
			return false;
		}
		$col = $baseCol . $index;
		return $this->$col;
	}

	public function order_percent($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_ORDER_PERCENT, $index);
	}

	public function set_order_percent($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_ORDER_PERCENT, $index, $value);
	}

	public function std_disc_percent($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DISCOUNT_PERCENT, $index);
	}

	public function set_std_disc_percent($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DISCOUNT_PERCENT, $index, $value);
	}

	public function std_disc_days($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DISCOUNT_DAYS, $index);
	}

	public function set_std_disc_days($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DISCOUNT_DAYS, $index, $value);
	}

	public function std_disc_day($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DISCOUNT_DAY, $index);
	}

	public function set_std_disc_day($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DISCOUNT_DAY, $index, $value);
	}

	public function std_disc_date($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DISCOUNT_DATE, $index);
	}

	public function set_std_disc_date($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DISCOUNT_DATE, $index, $value);
	}

	public function std_due_days($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DUE_DAYS, $index);
	}

	public function set_std_due_days($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DUE_DAYS, $index, $value);
	}

	public function std_due_day($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DUE_DAY, $index);
	}

	public function set_std_due_day($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DUE_DAY, $index, $value);
	}

	public function std_due_date($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DUE_DATE, $index);
	}

	public function set_std_due_date($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DUE_DATE, $index, $value);
	}

	public function std_plus_months($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_PLUS_MONTHS, $index);
	}

	public function set_std_plus_months($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_PLUS_MONTHS, $index, $value);
	}

	public function std_plus_years($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_PLUS_YEARS , $index);
	}

	public function set_std_plus_years($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_PLUS_YEARS, $index, $value);
	}

	public function eom_from_day($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_DAY_FROM, $index);
	}

	public function set_eom_from_day($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_DAY_FROM, $index, $value);
	}

	public function eom_thru_day($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_DAY_THRU, $index);
	}

	public function set_eom_thru_day($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_DAY_THRU, $index, $value);
	}

	public function eom_disc_percent($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_DISCOUNT_PERCENT, $index);
	}

	public function set_eom_disc_percent($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_DISCOUNT_PERCENT, $index, $value);
	}

	public function eom_disc_day($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_DISCOUNT_DAY, $index);
	}

	public function set_eom_disc_day($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_DISCOUNT_DAY, $index, $value);
	}
	
	public function eom_disc_months($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_DISCOUNT_MONTHS, $index);
	}

	public function set_eom_disc_months($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_DISCOUNT_MONTHS, $index, $value);
	}

	public function eom_due_day($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_DUE_DAY, $index);
	}

	public function set_eom_due_day($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_DUE_DAY, $index, $value);
	}

	public function eom_plus_months($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_PLUS_MONTHS, $index);
	}

	public function set_eom_plus_months($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_PLUS_MONTHS, $index, $value);
	}

	public function empty_eom_split($index) {
		if ($this->isValidEomSplit($index) === false) {
			return false;
		}
		$this->set_eom_from_day($index, '');
		$this->set_eom_thru_day($index, '');
		$this->set_eom_disc_percent($index, '');
		$this->set_eom_disc_day($index, '');
		$this->set_eom_disc_months($index, '');
		$this->set_eom_due_day($index, '');
		$this->set_eom_plus_months($index, '');
	}

	/**
	 * Returns Instance with Defaults set
	 * @return ArTermsCode
	 */
	public static function new() {
		$termscode = new ArTermsCode();
		$termscode->setMethod(self::DEFAULT_METHOD);
		$termscode->setType(self::DEFAULT_TYPE);
		$termscode->setHold(self::DEFAULT_HOLD);
		$termscode->setFreight_allow(self::DEFAULT_FREIGHT_ALLOWED);
	}
}
