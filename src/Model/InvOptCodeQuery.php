<?php

use Base\InvOptCodeQuery as BaseInvOptCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_opt_code' table.
 */
class InvOptCodeQuery extends BaseInvOptCodeQuery {
	use QueryTraits;

	/**
	 * Filter the query on the InitItemIdcolumn
	 * @param  mixed                     $itemID The value to use as filter.
	 * @return self|ItemMasterItemQuery          The current query, for fluid interface
	 */
	public function filterByItemid($itemID, $comparision = null) {
		return $this->filterByInitItemnbr($itemID, $comparision);
	}
}
