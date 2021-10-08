<?php

use Base\ConfigPm as BaseConfigPm;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'pm_config' table.
 */
class ConfigPm extends BaseConfigPm {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const YN_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'key'            => 'pmtbconfkey',
		'scrapUnused'    => 'pmtbconfscrapunused',
		'useSerialBase'  => 'pmtbconfserialbase',

		'date'           => 'dateupdtd',
		'time'           => 'timeupdtd',
	);

	/**
	 * Return if ScrapUnused is True
	 * @return bool
	 */
	public function scrapUnused() {
		return strtoupper($this->scrapUnused) == self::YN_TRUE;
	}

	/**
	 * Return if SerialBase is True
	 * @return bool
	 */
	public function useSerialBase() {
		return strtoupper($this->useSerialBase) == self::YN_TRUE;
	}
}
