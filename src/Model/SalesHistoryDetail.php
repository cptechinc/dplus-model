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

	const OPTIONS_SPECIALORDER = [
		'N' => 'normal',
		'S' => 'special order',
		'D' => 'Drop Ship'
	];

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 * NOTE: @ Provalley use qty_ordered for weight, qty_cases for boxes
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'   => 'oehhnbr',
		'qty_ordered'   => 'oedhqtyord',
		'qty_shipped'   => 'oedhqtyship',
		'price'         => 'oedhpric',
		'total_price'   => 'oedhprictot',
		'itemid'        => 'inititemnbr',
		'desc1'         => 'oedhdesc',
		'desc2'         => 'oedhdesc2',
		'line'          => 'oedhline',
		'linenbr'       => 'oedhline',
		'vendorpo'      => 'oedhponbr',
		'item'          => 'item',
		'qty_cases'     => 'oedhcntrqty',
		'weight_total'  => 'oedhwghttot',
		'order'         => 'salesHistory',
		'specialorder'  => 'oedhspecordr',
		'nsvendorid'    => 'oedhnsvendid',
		'nsvendoritemid' => 'oedhvenditemjob',
		'nsitemgroupid'  => 'oedhnsitemgrup',
		'kit'            => 'oedhkitflag',
		'ponbr'          => 'oedhponbr',
		'poref'          => 'oedhporef',
	);

	/** @var ItemmasterItem */
	protected $aItem;

	public function specialorder() {
		return self::OPTIONS_SPECIALORDER[$this->specialorder];
	}

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
		if ($this->aItem instanceof ItemMasterItem) {
			return $this->aItem;
		}
		if ($this->itemid == '') {
			$this->aItem = new ItemMasterItem();
			return $this->aItem;
		}
		$this->aItem = ItemMasterItemQuery::create()->findOneByitemid($this->itemid);
		return $this->aItem;
	}
}
