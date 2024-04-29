<?php
// Dplus Model
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base
use Base\CpnLoad as BaseCpnLoad;


/**
 * Class for representing a row from the 'load_cpn_header' table.
 * REPRESENTS: Shipment Load
 */
class CpnLoad extends BaseCpnLoad {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'lnbr'       => 'lchdloadnbr',
		'whseid'     => 'intbwhse',
		'shipdate'   => 'lchdshipdate',
		'pickupdate' => 'lchdschdpickupdate'
	];
}
