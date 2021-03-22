<?php

use Base\InvKitComponentQuery as BaseInvKitComponentQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_kit_detail' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByItemid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method     InvKitComponentQuery filterByItemid(string $kitID) Filter the query on the ktdtkey1 column
 *
 */
class InvKitComponentQuery extends BaseInvKitComponentQuery {
	use QueryTraits;

	/**
	 * Filter the query on the Ktdtkey1 column
	 * @param  string $kitID     The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self               The current query, for fluid interface
	 */
	public function filterByKitid($kitID, $comparison = null) {
		return $this->filterByKtdtkey1($kitID, $comparison);
	}
}
