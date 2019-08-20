<?php

use Base\ItemGroupcodeQuery as BaseItemGroupcodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_grup_code' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByItemgroup()
 *
 */
class ItemGroupcodeQuery extends BaseItemGroupcodeQuery {
	use QueryTraits;
	
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
	public function filterByItemgroup($itemgroup) {
		return $this->filterByIntbgrup($itemgroup);
	}
}
