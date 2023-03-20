<?php

use Base\ApTermsCode as BaseApTermsCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_term_code' table.
 */
class ApTermsCode extends BaseApTermsCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const STD_TERMS_SPLIT = 5;
	const EOM_TERMS_SPLIT = 3;

	const BASECOL_STD_ORDER_PERCENT 	= 'aptmorderpct';
	const BASECOL_STD_DISCOUNT_PERCENT	= 'aptmdiscpct';
	const BASECOL_STD_DISCOUNT_DAYS 	= 'aptmdiscdays';
	const BASECOL_STD_DISCOUNT_DAY		= 'aptmdiscday';
	const BASECOL_STD_DISCOUNT_DATE 	= 'aptmdiscdate';
	const BASECOL_STD_DUE_DAYS       	= 'aptmduedays';
	const BASECOL_STD_DUE_DAY 	        = 'aptmdueday';
	const BASECOL_STD_DUE_DATE 	        = 'aptmduedate';
	const BASECOL_STD_PLUS_MONTHS 	    = 'aptmplusmonths';
	const BASECOL_STD_PLUS_YEARS 	    = 'aptmplusyear';

	const BASECOL_EOM_DAY_FROM 	        = 'aptmdayfrom';
	const BASECOL_EOM_DAY_THRU 	        = 'aptmdaythru';
	const BASECOL_EOM_DISCOUNT_PERCENT	= 'aptmeomdiscpct';
	const BASECOL_EOM_DISCOUNT_DAY	    = 'aptmeomdiscday';
	const BASECOL_EOM_DISCOUNT_MONTHS   = 'aptmeomdiscmonths';
	const BASECOL_EOM_DUE_DAY           = 'aptmeomdueday';
	const BASECOL_EOM_PLUS_MONTHS       = 'aptmeomplusmonths';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'            => 'aptmtermcode',
		'code'          => 'aptmtermcode',
		'description'   => 'aptmtermdesc',
		'method'        => 'aptmmethod',
		'expiredate'    => 'aptmexpiredate',
		'date'		    => 'dateupdtd',
		'time'		    => 'timeupdtd'
	);

	/**
	 * Return if Index Exists for STD Split
	 * @param  int $index
	 * @return bool
	 */
	private function isValidStdSplit($index) {
		return $index <= self::STD_TERMS_SPLIT;
	}

	/**
	 * Return if Index Exists for EOM Split
	 * @param  int $index
	 * @return bool
	 */
	private function isValidEomSplit($index) {
		return $index <= self::EOM_TERMS_SPLIT;
	}

	/**
	 * Return if STD split base Column exists
	 * @param  string $col
	 * @return bool
	 */
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

	/**
	 * Return if EOM split base Column exists
	 * @param  string $col
	 * @return bool
	 */
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

/* =============================================================
	Base Setters
============================================================= */
	/**
	 * Set STD Split Column By Index
	 * @param  string $baseCol
	 * @param  int    $index   Split Index
	 * @param  mixed  $value
	 * @return void
	 */
	private function setStdColByIndex($baseCol, $index, $value) {
		if ($this->isValidStdSplit($index) === false || $this->isValidStdBaseCol($baseCol) === false) {
			return false;
		}
		$setCol = 'set' . ucfirst($baseCol . $index);
		return $this->$setCol($value);
	}

	/**
	 * Set Eom Split Column By Index
	 * @param  string $baseCol
	 * @param  int    $index   Split Index
	 * @param  mixed  $value
	 * @return void
	 */
	private function setEomColByIndex($baseCol, $index, $value) {
		if ($this->isValidEomSplit($index) === false || $this->isValidEomBaseCol($baseCol) === false) {
			return false;
		}
		$setCol = 'set' . ucfirst($baseCol . $index);
		return $this->$setCol($value);
	}

/* =============================================================
	Base Getters
============================================================= */
	/**
	 * Return STD split field value
	 * @param  string $baseCol
	 * @param  int    $index   Split Index
	 * @return mixed
	 */
	private function getStdColByIndex($baseCol, $index) {
		if ($this->isValidStdSplit($index) === false || $this->isValidStdBaseCol($baseCol) === false) {
			return false;
		}
		$col = $baseCol . $index;
		return $this->$col;
	}

	/**
	 * Return EOM split field value
	 * @param  string $baseCol
	 * @param  int    $index   Split Index
	 * @return mixed
	 */
	private function getEomColByIndex($baseCol, $index) {
		if ($this->isValidEomSplit($index) === false || $this->isValidEomBaseCol($baseCol) === false) {
			return false;
		}
		$col = $baseCol . $index;
		return $this->$col;
	}

/* =============================================================
	STD split field functions
============================================================= */
	public function std_order_percent($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_ORDER_PERCENT, $index);
	}

	public function setStd_order_percent($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_ORDER_PERCENT, $index, $value);
	}

	public function std_disc_percent($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DISCOUNT_PERCENT, $index);
	}

	public function setStd_disc_percent($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DISCOUNT_PERCENT, $index, $value);
	}

	public function std_disc_days($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DISCOUNT_DAYS, $index);
	}

	public function setStd_disc_days($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DISCOUNT_DAYS, $index, $value);
	}

	public function std_disc_day($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DISCOUNT_DAY, $index);
	}

	public function setStd_disc_day($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DISCOUNT_DAY, $index, $value);
	}

	public function std_disc_date($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DISCOUNT_DATE, $index);
	}

	public function setStd_disc_date($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DISCOUNT_DATE, $index, $value);
	}

	public function std_due_days($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DUE_DAYS, $index);
	}

	public function setStd_due_days($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DUE_DAYS, $index, $value);
	}

	public function std_due_day($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DUE_DAY, $index);
	}

	public function setStd_due_day($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DUE_DAY, $index, $value);
	}

	public function std_due_date($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_DUE_DATE, $index);
	}

	public function setStd_due_date($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_DUE_DATE, $index, $value);
	}

	public function std_plus_months($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_PLUS_MONTHS, $index);
	}

	public function setStd_plus_months($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_PLUS_MONTHS, $index, $value);
	}

	public function std_plus_years($index) {
		return $this->getStdColByIndex(self::BASECOL_STD_PLUS_YEARS , $index);
	}

	public function setStd_plus_years($index, $value) {
		return $this->setStdColByIndex(self::BASECOL_STD_PLUS_YEARS, $index, $value);
	}

	public function emptyStdSplit($index) {
		if ($this->isValidStdSplit($index) === false) {
			return false;
		}
		$this->setStd_order_percent($index, '');
		$this->setstd_disc_percent($index, '');
		$this->setStd_disc_days($index, '');
		$this->setStd_disc_day($index, '');
		$this->setStd_disc_date($index, '');
		$this->setStd_due_days($index, '');
		$this->setStd_due_day($index, '');
		$this->setStd_plus_months($index, '');
		$this->setStd_due_date($index, '');
		$this->setStd_plus_years($index, '');
	}

	public function emptyStdDiscFields($index) {
		if ($this->isValidStdSplit($index) === false) {
			return false;
		}
		$this->setStd_disc_percent($index, '');
		$this->setStd_disc_days($index, '');
		$this->setStd_disc_day($index, '');
		$this->setStd_disc_date($index, '');
		return true;
	}

	public function emptyStdDueFields($index) {
		if ($this->isValidStdSplit($index) === false) {
			return false;
		}
		$this->setStd_due_days($index, '');
		$this->setStd_due_day($index, '');
		$this->setStd_plus_months($index, '');
		$this->setStd_due_date($index, '');
		$this->setStd_plus_years($index, '');
		return true;
	}
	
/* =============================================================
	EOM Split field functions
============================================================= */
	public function eom_from_day($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_DAY_FROM, $index);
	}

	public function setEom_from_day($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_DAY_FROM, $index, $value);
	}

	public function eom_thru_day($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_DAY_THRU, $index);
	}

	public function setEom_thru_day($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_DAY_THRU, $index, $value);
	}

	public function eom_disc_percent($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_DISCOUNT_PERCENT, $index);
	}

	public function setEom_disc_percent($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_DISCOUNT_PERCENT, $index, $value);
	}

	public function eom_disc_day($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_DISCOUNT_DAY, $index);
	}

	public function setEom_disc_day($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_DISCOUNT_DAY, $index, $value);
	}
	
	public function eom_disc_months($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_DISCOUNT_MONTHS, $index);
	}

	public function setEom_disc_months($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_DISCOUNT_MONTHS, $index, $value);
	}

	public function eom_due_day($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_DUE_DAY, $index);
	}

	public function setEom_due_day($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_DUE_DAY, $index, $value);
	}

	public function eom_plus_months($index) {
		return $this->getEomColByIndex(self::BASECOL_EOM_PLUS_MONTHS, $index);
	}

	public function setEom_plus_months($index, $value) {
		return $this->setEomColByIndex(self::BASECOL_EOM_PLUS_MONTHS, $index, $value);
	}

	public function emptyEomSplit($index) {
		if ($this->isValidEomSplit($index) === false) {
			return false;
		}
		$this->setEom_from_day($index, '');
		$this->setEom_thru_day($index, '');
		$this->setEom_disc_percent($index, '');
		$this->setEom_disc_day($index, '');
		$this->setEom_disc_months($index, '');
		$this->setEom_due_day($index, '');
		$this->setEom_plus_months($index, '');
	}
}
