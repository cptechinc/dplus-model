<?php

use Base\ItemGroupcodeQuery as BaseItemGroupcodeQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'inv_grup_code' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class ItemGroupcodeQuery extends BaseItemGroupcodeQuery {
	/**
	 * Return the first ItemGroupcode filtered by the IntbGrupDesc column
	 *
	 * @param  string $itemgroup
	 * @return ItemGroupcode
	 */
	public function findOneByItemgroup($itemgroup) {
		return $this->findOneByIntbgrup($itemgroup);
	}

	/**
	 * Filter the query on the IntbGrup column
	 *
	 * @param  string $itemgroup
	 * @return $this|ItemGroupcodeQuery The current query, for fluid interface
	 */
	public function filterByIntbgrup($itemgroup) {
		return $this->filterByIntbgrup($itemgroup);
	}
}
