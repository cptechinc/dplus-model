<?php
// Dplus Model
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base
use Base\InvPallet as BaseInvPallet;

/**
 * Class for representing a row from the 'pallet_header' table.
 *
 * REPRESENTS: item pallet record
 * FKRELATIONSHIPS: ItemMasterItem
 */
class InvPallet extends BaseInvPallet {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'id'     => 'plthpalletid',
		'itemid' => 'inititemnbr',
		'binid'  => 'plthbin',
		'date'   => 'dateupdtd',
		'time'   => 'timeupdtd',
		// Foreign Key Aliases
		'item'  => 'itemMasterItem'
	]; 
}
