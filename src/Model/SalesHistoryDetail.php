<?php

use Base\SalesHistoryDetail as BaseSalesHistoryDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'so_det_hist' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class SalesHistoryDetail extends BaseSalesHistoryDetail {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'  => 'oehhnbr',
		'qty_ordered'  => 'oedhqtyord',
		'qty_shipped'  => 'oedhqtyship',
		'price'        => 'oedhpric',
		'total_price'  => 'oedhprictot',
		'itemid'       => 'inititemnbr',
		'desc1'        => 'oedhdesc',
		'desc2'        => 'oedhdesc2',
		'line'         => 'oedhline',
		'linenbr'      => 'oedhline',
		'vendorpo'     => 'oedhponbr'
	);

	/**
	 * Returns Notes for the SalesHistoryDetail
	 *
	 * @return SalesOrderNotes[]|ObjectCollection [description]
	 */
	public function get_notes() {
		return SalesOrderNotesQuery::create()->filterByOrdernumber($this->oehhnbr)->filterByLine($this->oedhline)->find();
	}

	/**
	 * Returns the number of Notes for the SalesHistoryDetail
	 *
	 * @return int
	 */
	public function count_notes() {
		return SalesOrderNotesQuery::create()->filterByOrdernumber($this->oehhnbr)->filterByLine($this->oedhline)->count();
	}
}
