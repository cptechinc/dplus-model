<?php

use Base\SalesPerson as BaseSalesPerson;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_saleper1' table.
 *
 * PURPOSE: Sales Person
 */
class SalesPerson extends BaseSalesPerson {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'        => 'arspsaleper1',
		'name'      => 'arspname',
		'userid'    => 'arsplogin',
		'manager'   => 'arspmgr',
		'vendorid'  => 'arspvendid',
		'email'     => 'arspemailaddr',
		'date'      => 'dateupdtd',
		'time'      => 'timeupdtd',
	);

	public function is_manager() {
		return $this->manager == 'Y';
	}
}
