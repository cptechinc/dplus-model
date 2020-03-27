<?php

use Base\ConfigIi as BaseConfigIi;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ii_options' table.
 *
 * NOTE: The Row is for each user, and there is a System user for a default
 */
class ConfigIi extends BaseConfigIi {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const USER_SYSTEM = 'system';

	const VIEW_REQUIREMENTS_AVAILABLE = 'A';
	const VIEW_REQUIREMENTS_REQUIREMENTS = 'R';

	const VIEW_REQUIREMENTS_OPTIONS = array(
		'R' => 'Requirements',
		'A' => 'Available'
	);

	const VIEW_REQUIREMENTS_OPTIONS_JSON = array(
		'R' =>  "REQ",
		'A' => "AVL"
	);

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'user'              => 'iitboptncode',
		'view_requirements' => 'iitboptnreqrview'
	);
}
