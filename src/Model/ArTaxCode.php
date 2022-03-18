<?php

use Base\ArTaxCode as BaseArTaxCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_mtax' table.
 */
class ArTaxCode extends BaseArTaxCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 6;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'               => 'artbmtaxcode',
		'code'             => 'artbmtaxcode',
		'description'      => 'artbmtaxdesc',
		'percent'          => 'artbmtaxpct',
		'gl_account'       => 'artbmtaxglacct',
        'note1'            => 'artbmtaxnote1',
        'note2'            => 'artbmtaxnote2',
        'note3'            => 'artbmtaxnote3',
        'note4'            => 'artbmtaxnote4',
        'max_cost'         => 'artbmtaxmaxcost',
        'per_cigar'        => 'artbmtaxpercigar',
        'tax_type'         => 'artbmtaxtaxtype',
        'tax_freight'      => 'artbmtaxtaxfrt',
        'freight_tax_code' => 'artbmtaxfrttax',
        'limit'            => 'artbmtaxlimit',
		'date'		       => 'dateupdtd',
		'time'		       => 'timeupdtd'
	);

	/**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
