<?php

use Base\ArCustTypeCode as BaseArCustTypeCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_type' table.
 *
 */
class NoteArCustTypeCode extends BaseArCustTypeCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 4;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'          => 'artbtypecode',
		'code'        => 'artbtypecode',
		'description' => 'artbctypdesc',
		'mail_list'   => 'artbctypmail',
		'maillist'    => 'artbctypmail',
		'order_approval_email' => 'artbctypaprvneedemail',
		'email'       => 'artbctypaprvneedemail',
		'glsales'     => 'artbctypsaleacct',
		'glcredits'   => 'artbctypcredacct',
		'glcogs'      => 'artbctypcogsacct', // COST OF GOODS
		'glfreight'   => 'artbctypfrtacct',
		'glmisc'      => 'artbctypmiscacct',
		'glcash'      => 'artbctypcashacct',
		'glar'        => 'artbctyparacct',
		'glfinance'   => 'artbctypfincacct',
		'gldiscounts' => 'artbctypdiscacct',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd',
	);

	/**
	 * Return Max Length of Characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
