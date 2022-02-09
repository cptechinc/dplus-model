<?php
// Dplus Model
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base Classes
use Base\WarehouseBin as BaseWarehouseBin;

/**
 * Class for representing a row from the 'inv_bin_cntrl' table.
 * 
 * REPRESENTS: Bin List
 */
class WarehouseBin extends BaseWarehouseBin {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Descriptions of each Bin Type
	 * @var array
	 */
	const TYPES = [
		'B' => 'Fabrication Bin',
		'C' => 'Customer Return',
		'F' => 'Store Front',
		'N' => 'Consignment',
		'P' => 'Pallet / Cart',
		'Q' => 'Quality Control',
		'R' => 'Receiving',
		'S' => 'Stocking',
		'T' => 'Transfer',
		'V' => 'Vendor'
	];

	/**
	 * Aliases for Class Properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'whseid'       => 'intbwhse',
		'whseID'       => 'intbwhse',
		'warehouse'    => 'intbwhse',
		'from'         => 'bnctbinfrom',
		'through'      => 'bnctbinthru',
		'type'         => 'bncttypedesc',
		'area'         => 'bnctbinarea',
		'description'  => 'bnctbindesc',
	);

	/**
	 * Return Description for Bin Type
	 * @param  string $type
	 * @return string
	 */
	public static function typeDescription($type = '') {
		if (array_key_exists($type, self::TYPES) === false) {
			return '';
		}
		return self::TYPES[$type];
	}

	/**
	 * Return Description of this Bin Type
	 * @return string
	 */
	public function type() {
		return self::typeDescription($this->type);
	}
}
