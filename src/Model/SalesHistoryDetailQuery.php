<?php

use Base\SalesHistoryDetailQuery as BaseSalesHistoryDetailQuery;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for performing query and update operations on the 'so_det_hist' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class SalesHistoryDetailQuery extends BaseSalesHistoryDetailQuery {
	use ThrowErrorTrait;
	use MagicMethodTraits;

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
