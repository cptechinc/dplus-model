<?php

use Base\CustomerTypeCode as BaseCustomerTypeCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_type' table.
 *
 */
class CustomerTypeCode extends BaseCustomerTypeCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 4;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'code'        => 'artbtypecode',
		'description' => 'artbctypdesc',
		'mail_list'    => 'artbctypmail',
		'order_approval_email' => 'artbctypaprvneedemail',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd',
		'account_sales'   => 'artbctypsaleacct',
		'account_credits' => 'artbctypcredacct',
		'account_cogs'    => 'artbctypcogsacct', // COST OF GOODS
		'account_freight' => 'artbctypfrtacct',
		'account_misc'    => 'artbctypmiscacct',
		'account_cash'    => 'artbctypcashacct',
		'account_ar'      => 'artbctyparacct',
		'account_finance' => 'artbctypfincacct',
		'account_discounts' => 'artbctypdiscacct',
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
	 * @param  string $notetype Note Type see CustomerTypeNotes::TYPES
	 * @return int
	 */
	public function count_notetype($notetype) {
		$q = CustomerTypeNotesQuery::create();
		$q->filterByType($notetype);
		$q->filterByCustomertype($this->code);
		return $q->count();
	}

	/**
	 * Return the Notes filtered by the Note Type
	 * @param  string $notetype Note Type see CustomerTypeNotes::TYPES
	 * @return int
	 */
	public function get_notetype($notetype) {
		$q = CustomerTypeNotesQuery::create();
		$q->filterByType($notetype);
		$q->filterByCustomertype($this->code);
		return $q->find();
	}
}
