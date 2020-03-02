<?php

use Base\SalesHistoryDetail as BaseSalesHistoryDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_det_hist' table.
 *
 * NOTE: Foreign Key Relationship to SalesHistory
 */
class SalesHistoryDetail extends BaseSalesHistoryDetail {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 * NOTE: @ Provalley use qty_ordered for weight, qty_cases for boxes
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
		'vendorpo'     => 'oedhponbr',
		'item'         => 'item',
		'qty_cases'    => 'oedhcntrqty',
	);

	/**
	 * Returns the number of Notes for the SalesHistoryDetail
	 *
	 * @return bool
	 */
	public function has_notes() {
		return SalesOrderNotesQuery::create()->filterByOrdernumber($this->oehhnbr)->filterByLine($this->oedhline)->count();
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
