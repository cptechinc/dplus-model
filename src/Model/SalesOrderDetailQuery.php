<?php

use Base\SalesOrderDetailQuery as BaseSalesOrderDetailQuery;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for performing query and update operations on the 'so_detail' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class SalesOrderDetailQuery extends BaseSalesOrderDetailQuery {
	use ThrowErrorTrait;
	use MagicMethodTraits;

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
