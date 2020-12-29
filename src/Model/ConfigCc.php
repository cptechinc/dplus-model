<?php

use Base\ConfigCc as BaseConfigCc;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'cc_config' table.
 * PURPOSE: Customer Credit Configurations
 */
class ConfigCc extends BaseConfigCc {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const YN_TRUE = 'Y';

	/**
	 * What to Base Margin off
	 * S = Standard Cost | R = Replacement | L = Last Cost
	 * @var string
	 */
	protected $cctbconfminmargbase;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'                => 'CctbConfKey',
		'belowmarginhold'   => 'CctbConfMinMargHold',
		'marginbasedoff'    => 'CctbConfMinMargBase',
	);

	/**
	 * Return if Order should be held if below Margin
	 * @return string
	 */
	public function holdOrderIfBelowMargin() {
		return $this->belowmarginhold == self::YN_TRUE;
	}

	/**
	 * Return What to Base Margin off
	 * @return string
	 */
	public function marginbase() {
		return $this->marginbasedoff;
	}

}
