<?php

use Base\SalesOrderDetailQuery as BaseSalesOrderDetailQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_detail' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findByOrdernumber()
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
		return bool($this->filterByOehdnbr($ordn)->count());
	}
}
