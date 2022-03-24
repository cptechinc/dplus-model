<?php

use Base\ArCustTypeCode as BaseArCustTypeCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_type' table.
 *
 */
class ArCustTypeCode extends BaseArCustTypeCode {
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

	/**
	 * Return the number of Notes filtered by the Note Type
	 * @param  string $notetype Note Type see NoteArCustType::TYPES
	 * @return int
	 */
	public function count_notetype($notetype) {
		$q = NoteArCustTypeQuery::create();
		$q->filterByType($notetype);
		$q->filterByCustomertype($this->code);
		return $q->count();
	}

	/**
	 * Return the Notes filtered by the Note Type
	 * @param  string $notetype Note Type see NoteArCustType::TYPES
	 * @return int
	 */
	public function get_notetype($notetype) {
		$q = NoteArCustTypeQuery::create();
		$q->filterByType($notetype);
		$q->filterByCustomertype($this->code);
		return $q->find();
	}
}
