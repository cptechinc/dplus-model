<?php

use Base\SalesOrderDetail as BaseSalesOrderDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_detail' table.
 *
 * NOTE: Foreign Key Relationship to SalesOrder
 */
class SalesOrderDetail extends BaseSalesOrderDetail {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'  => 'oehdnbr',
		'qty_ordered'  => 'oedtqtyord',
		'price'        => 'oedtpric',
		'total_price'  => 'oedtprictot',
		'itemid'       => 'inititemnbr',
		'desc1'        => 'oedtdesc',
		'desc2'        => 'oedtdesc2',
		'line'         => 'oedtline',
		'linenbr'      => 'oedtline',
		'vendorpo'     => 'oedtponbr'
	);

	/**
	 * Returns Notes for the SalesOrderDetail
	 *
	 * @return SalesOrderNotes[]|ObjectCollection [description]
	 */
	public function get_notes() {
		return SalesOrderNotesQuery::create()->filterByOrdernumber($this->oehdnbr)->filterByLine($this->oedtline)->find();
	}

	/**
	 * Returns the number of Notes for the SalesOrderDetail
	 *
	 * @return int
	 */
	public function count_notes() {
		return SalesOrderNotesQuery::create()->filterByOrdernumber($this->oehdnbr)->filterByLine($this->oedtline)->count();
	}
}
