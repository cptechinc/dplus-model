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

	const PONBR_BLANK = '00000000';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 *
	 * NOTE: @ Provalley use qty_ordered for weight, qty_cases for boxes
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
		'vendorpo'     => 'oedtponbr',
		'qty_cases'    => 'oedtcntrqty',
		'item'         => 'item',
	);

	/**
	 * Returns if this Order Line has Notes
	 *
	 * @return bool
	 */
	public function has_notes() {
		$q = SalesOrderNotesQuery::create();
		$q->filterByOrdernumber($this->oehdnbr)->filterByLine($this->oedtline);
		return boolval($q->count());
	}

	/**
	 * Return ItemMasterItem associated with Order Item
	 *
	 * @return ItemMasterItem
	 */
	public function getItem() {
		return ItemMasterItemQuery::create()->findOneByitemid($this->itemid);
	}
}
