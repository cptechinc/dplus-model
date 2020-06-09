<?php

use Base\ThermalLabelFormat as BaseThermalLabelFormat;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'thermal_label_head' table.
 */
class ThermalLabelFormat extends BaseThermalLabelFormat {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'tllhformat',
		'format'       => 'tllhformat',
		'description'  => 'tllhdesc',
		'width'        => 'tllhwidth',
		'length'       => 'tllhlength',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);
}
