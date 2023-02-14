<?php

use Base\SalesOrderDetailQuery as BaseSalesOrderDetailQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_detail' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findByOrdernumber()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 *
 * FindOne
 *
 * Find
 * @method  SalesOrderDetail[]|ObjectCollection findByOrdernumber(string $ordn) Return SalesOrderDetail objects filtered by the OehdNbr column
 *
 */
class SalesOrderDetailQuery extends BaseSalesOrderDetailQuery {
	use QueryTraits;

	/**
	 * Returns if there are records in the table
	 *
	 * @param  string $ordn  Sales Order Number
	 * @return bool
	 */
	public function hasDetails($ordn) {
		return boolval($this->filterByOehdnbr($ordn)->count());
	}
}
