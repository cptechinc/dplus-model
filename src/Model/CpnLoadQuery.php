<?php
// Dplus Model
use Dplus\Model\QueryTraits;
// Base
use Base\CpnLoadQuery as BaseCpnLoadQuery;

/**
 * Cass for performing query and update operations on the 'load_cpn_header' table.
 */
class CpnLoadQuery extends BaseCpnLoadQuery {
	use QueryTraits;
}
