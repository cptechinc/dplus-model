<?php

use Base\ItemXrefKeyQuery as BaseItemXrefKeyQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'item_xref_key' table.
 */
class ItemXrefKeyQuery extends BaseItemXrefKeyQuery {
	use QueryTraits;

	/**
	 * Filter query by Source
	 * @param  mixed $source
	 * @param  mixed|null $comparison
	 * @return self
	 */
	public function filterBySource($source, $comparison = null) {
		return $this->filterByRkeysource($source, $comparison);
	}
}
