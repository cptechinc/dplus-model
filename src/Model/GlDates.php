<?php
// Dplus Model
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base
use Base\GlDates as BaseGlDates;

/**
 * Class for representing a row from the 'gl_dates' table.
 */
class GlDates extends BaseGlDates {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const COL_BASE_FROM = "gldfrom";
	const COL_BASE_THRU = "gldthru";
	const PERIODS = 19;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	];

	/**
	 * Return GL Period
	 * @param  string $date
	 * @return int
	 */
	public function period($date) {
		$dateTimestamp = strtotime($date);

		for ($i = 1; $i <= self::PERIODS; $i++) {
			$colFrom = self::COL_BASE_FROM . $i;
			$dateFromStamp = strtotime($this->$colFrom);

			$colThru = self::COL_BASE_THRU . $i;
			$dateThruStamp = strtotime($this->$colThru);

			if ($dateFromStamp <= $dateTimestamp && $dateThruStamp >= $dateTimestamp) {
				return $i;
			}
		}
		return 0;
	}

}
