<?php

use Base\ConfigSysQuery as BaseConfigSysQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'sys_config' table.
 *
 * NOTE: There will be only one record at each installation
 */
class ConfigSysQuery extends BaseConfigSysQuery {
	use QueryTraits;
}
