<?php

use Base\SalesHistoryDetailQuery as BaseSalesHistoryDetailQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_det_hist' table.
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
 * @method  SalesHistoryDetail[]|ObjectCollection findByOrdernumber(string $ordn) Return SalesHistoryDetail objects filtered by the OehhNbr column
 *
 */
class SalesHistoryDetailQuery extends BaseSalesHistoryDetailQuery {
	use QueryTraits;

	/**
	 * Returns if there are records in the table
	 *
	 * @param  string $ordn  Sales Order Number
	 * @return bool
	 */
	public function hasDetails($ordn) {
		return bool($this->filterByOehhnbr($ordn)->count());
	}
}
