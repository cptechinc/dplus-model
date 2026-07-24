<?php

declare(strict_types=1);

use Base\ConfigSoFreightQuery as BaseConfigSoFreightQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_frt_config' table.
 */
class ConfigSoFreightQuery extends BaseConfigSoFreightQuery {
	use QueryTraits;
}
