<?php

use Base\MotorFreightCode as BaseMotorFreightCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'so_mfrt_code' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class MotorFreightCode extends BaseMotorFreightCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'            => 'oe2tbmfrtcode',
		'code'          => 'oe2tbmfrtcode',
		'class'         => 'oe2tbmfrtclass',
		'description'   => 'oe2tbmfrtdesc1',
		'description2'  => 'oe2tbmfrtdesc2',
		'description3'  => 'oe2tbmfrtdesc3',
		'description4'  => 'oe2tbmfrtdesc4',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd'
	);
}
