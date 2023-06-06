<?php

use Base\SoStandingOrder as BaseSoStandingOrder;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_stand_head' table.
 * REPRESENTS: Standing (Recurring) Sales Orders
 * FKRELATIONSHIPS: Customer, CustomerShipto
 */
class SoStandingOrder extends BaseSoStandingOrder {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'custid'      => 'arcucustid',
		'shiptoid'    => 'arstshipid',
		'custpo'      => 'oethcustpo',
		'date'        => 'dateupdtd',
		'time'        => 'timeupdtd',
	];
}
