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
		'time'         => 'timeupdtd'
	);

	/**
	 * Return the number of Notes for Note Type
	 *
	 * @param  string $notetypealias Note Type Alias
	 * @return int
	 */
	public function count_notetypealias($notetypealias) {
		$q = CustomerTypeNotesQuery::create();
		$q->filterByTypecode($this->code);
		$q->filterByTypeAlias($notetypealias);
		return $q->count();
	}
}
