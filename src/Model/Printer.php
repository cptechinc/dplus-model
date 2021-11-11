<?php

use Base\Printer as BasePrinter;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'printer_control' table.
 */
class Printer extends BasePrinter {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const PITCHES = ['10', '12', '17'];
	const PITCH_TRUE = 'X';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'               => 'prctprinterid',
		'description'      => 'prctdesc',
		'type'             => 'prctprtrtype',
		'typedescription'  => 'prctprtrtypedesc',
		'pitch10'          => 'prctpitch10',
		'pitch12'          => 'prctpitch12',
		'pitch17'          => 'prctpitch17',
		'date'             => 'dateupdtd',
		'time'             => 'timeupdtd'
	);

	/**
	 * Return Pitches that this printer covers
	 * @return array
	 */
	public function pitches() {
		$pitches = [];
		foreach (self::PITCHES as $pitch) {
			$col = "pitch$pitch";
			if ($this->$col == self::PITCH_TRUE) {
				$pitches[] = $pitch;
			}
		}
		return $pitches;
	}

}
