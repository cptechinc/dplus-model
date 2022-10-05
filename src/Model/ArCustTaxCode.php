<?php

use Base\ArCustTaxCode as BaseArCustTaxCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_ctax' table.
 */
class ArCustTaxCode extends BaseArCustTaxCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 6;

	const FIELD_TAXCODE_BASE = 'code';
	const NUMBER_TAXCODES = 10;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'		   => 'artbctaxcode',
		'code'		   => 'artbctaxcode',
		'description'  => 'artbctaxdesc',
		'code1' 	   => 'artbctaxcode1',
		'code2' 	   => 'artbctaxcode2',
		'code3' 	   => 'artbctaxcode3',
		'code4' 	   => 'artbctaxcode4',
		'code5' 	   => 'artbctaxcode5',
		'code6' 	   => 'artbctaxcode6',
		'code7' 	   => 'artbctaxcode7',
		'code8' 	   => 'artbctaxcode8',
		'code9' 	   => 'artbctaxcode9',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
	);

	/**
	 * Return Tax Code at index
	 * @param  int $index
	 * @return string
	 */
	public function taxcode($index = 1) {
		if ($index < 1 || $index > self::NUMBER_TAXCODES) {
			return '';
		}
		$col = self::FIELD_TAXCODE_BASE . $index;
		return $this->$col;
	}

	/**
	 * Set Tax Code at index
	 * @param  int    $index
	 * @param  string $value
	 * @return bool
	 */
	public function setTaxcode($index = 1, $value = '') {
		if ($index < 1 || $index > self::NUMBER_TAXCODES) {
			return false;
		}
		$col = self::FIELD_TAXCODE_BASE . $index;
		$setField = 'set' . ucfirst($col);
		$this->$setField($value);
		return true;
	}
}
