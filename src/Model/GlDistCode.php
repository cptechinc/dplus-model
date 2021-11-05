<?php

use Base\GlDistCode as BaseGlDistCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'gl_dist_code' table.
 */
class GlDistCode extends BaseGlDistCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const NBROFACCTS = 10;
	const COLBASE_ACCTNBR = 'gltbdistacctnbr';
	const COLBASE_ACCTPCT = 'gltbdistacctpct';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'gltbdistcode',
		'code'         => 'gltbdistcode',
		'description'  => 'gltbdistdesc',
		'name'         => 'gltbdistdesc',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);

	/**
	 * Return if Index is valid for GL account
	 * @param  int  $nbr  Index
	 * @return bool
	 */
	public static function isValidAccountIndex($nbr) {
		return $nbr > 0 && $nbr <= self::NBROFACCTS;
	}

	/**
	 * Return Column for GL account at Index
	 * @param  int  $nbr  Index
	 * @return string
	 */
	public static function getAccountNbrCol($nbr) {
		if (self::isValidAccountIndex($nbr) === false) {
			return '';
		}
		$index = $nbr;

		if ($nbr < 10) {
			$index = "0$nbr";
		}
		return self::COLBASE_ACCTNBR . $index;
	}

	/**
	 * Return Column for GL account percent at Index
	 * @param  int  $nbr  Index
	 * @return string
	 */
	public static function getAccountPctCol($nbr) {
		if (self::isValidAccountIndex($nbr) === false) {
			return '';
		}
		$index = $nbr;

		if ($nbr < 10) {
			$index = "0$nbr";
		}
		return self::COLBASE_ACCTPCT . $index;
	}

	/**
	 * Return GL Account Code at Index
	 * @param  int  $nbr  Index
	 * @return string
	 */
	public function getAccountNbr($nbr) {
		if (self::isValidAccountIndex($nbr) === false) {
			return '';
		}
		$col = self::getAccountNbrCol($nbr);
		return $this->$col;
	}

	/**
	 * Set GL Account Code at Index
	 * @param  int    $nbr  Index
	 * @param  string $val  GL Account Code
	 * @return void
	 */
	public function setAccountNbr($nbr, $val) {
		if (self::isValidAccountIndex($nbr) === false) {
			return false;
		}
		$col = ucfirst(self::getAccountNbrCol($nbr));
		$setFunc = "set$col";
		$this->$setFunc($val);
	}

	/**
	 * Return GL Account Code at Index
	 * @param  int  $nbr  Index
	 * @return string
	 */
	public function getAccountPct($nbr) {
		if (self::isValidAccountIndex($nbr) === false) {
			return '';
		}
		$col = self::getAccountPctCol($nbr);
		return $this->$col;
	}

	/**
	 * Set GL Account Percent at Index
	 * @param  int    $nbr  Index
	 * @param  string $val  GL Account Percent
	 * @return float
	 */
	public function setAccountPct($nbr, $val) {
		if (self::isValidAccountIndex($nbr) === false) {
			return false;
		}
		$col = ucfirst(self::getAccountPctCol($nbr));
		$setFunc = "set$col";
		$this->$setFunc($val);
	}

	/**
	 * Return GlCode
	 * @param  string $code GL Account Number
	 * @return GlCode
	 */
	public function getGlAccount($code) {
		return GlCodeQuery::create()->findOneById($code);
	}
}
