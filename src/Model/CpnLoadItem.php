<?php
// Dplus Model
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base
use Base\CpnLoadItem as BaseCpnLoadItem;

/**
 * Class for representing a row from the 'load_cpn_item' table.
 * REPRESENTS: Shipment Load
 * FKRELATIONSHIPS: CpnLoad
 */
class CpnLoadItem extends BaseCpnLoadItem {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'lnbr'   => 'lchdloadnbr'
	];
}
