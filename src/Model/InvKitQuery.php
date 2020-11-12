<?php

use Base\InvKitQuery as BaseInvKitQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_kit_head' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByItemid()
 */
class InvKitQuery extends BaseInvKitQuery {
	use QueryTraits;
	
	/**
	 * Returns if the Item ID exists in the Kits table
	 * @param  string $itemID
	 * @return bool
	 */
	public function is_kit($itemID) {
		return boolval($this->filterByItemid($itemID)->count());
	}
}
