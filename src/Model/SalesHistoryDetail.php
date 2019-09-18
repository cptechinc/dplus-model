<?php

use Base\SalesHistoryDetail as BaseSalesHistoryDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_det_hist' table.
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
