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
}
