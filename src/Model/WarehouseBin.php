<?php

use Base\WarehouseBin as BaseWarehouseBin;
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_bin_cntrl' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class WarehouseBin extends BaseWarehouseBin {
	use ThrowErrorTrait;
	use MagicMethodTraits;

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
}
