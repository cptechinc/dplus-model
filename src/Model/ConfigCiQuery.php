<?php

use Base\ConfigCiQuery as BaseConfigCiQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ci_config' table.
 */
class ConfigCiQuery extends BaseConfigCiQuery {
	use QueryTraits;
}
