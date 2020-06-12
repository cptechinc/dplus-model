<?php

use Base\Printer as BasePrinter;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'printer_control' table.
 */
class Printer extends BasePrinter {
	use Dplus\Model\ThrowErrorTrait;
	use Dplus\Model\MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'               => 'prctprinterid',
		'description'      => 'prctdesc',
		'type'             => 'prctprtrtype',
		'typedescription'  => 'prctprtrtypedesc',
		'date'             => 'dateupdtd',
		'time'             => 'timeupdtd'
	);
}
