<?php
// Dplus Model
use Dplus\Model\QueryTraits;
// Base
use Base\CpnLoadOrderQuery as BaseCpnLoadOrderQuery;

/**
 * Class for performing query and update operations on the 'load_cpn_order' table.
 */
class CpnLoadOrderQuery extends BaseCpnLoadOrderQuery {
	use QueryTraits;
}
