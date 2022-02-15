<?php
// Dplus Model
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base
use Base\ArCashHead as BaseArCashHead;

/**
 * Class for representing a row from the 'ar_cash_head' table.
 * REPRESENTS: Cash Received from Customer
 */
class ArCashHead extends BaseArCashHead {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'custid'   => 'arcucustid',
		'clerkid'  => 'arrchclerkid',
		'amount'   => 'archamtrec',
		'date'     => 'dateupdtd',
		'time'     => 'timeupdtd'
	];
}
