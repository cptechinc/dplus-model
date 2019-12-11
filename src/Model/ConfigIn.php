<?php

use Base\ConfigIn as BaseConfigIn;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'in_config' table
 * NOTE: There will only be one record in the database for the company
 *
 */
class ConfigIn extends BaseConfigIn {
	use ThrowErrorTrait;
	use MagicMethodTraits;
}
