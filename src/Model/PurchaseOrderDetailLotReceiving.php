<?php

use Base\PurchaseOrderDetailLotReceiving as BasePurchaseOrderDetailLotReceiving;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_tran_lot_det' table.
 *
 * FKRELATIONSHIPS: PurchaseOrder, PurhaseOrderDetail, PoRecevingHead, ItemMasterItem, 
 */
class PurchaseOrderDetailLotReceiving extends BasePurchaseOrderDetailLotReceiving {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	 const COLUMN_ALIASES = array(
		'ponbr'        => 'pothnbr',
		'linenbr'      => 'potdline',
		'itemid'       => 'inititemnbr',
		'lotserial'    => 'potslotser',
		'bin'          => 'potsbin',
		'binid'        => 'potsbin',
		'qty_received' => 'potsqtyrec',
		'qtyReceived'  => 'potsqtyrec',
		'lotreference' => 'potslotref',
		'lotserialref' => 'potslotref',
		'lotref'       => 'potslotref',
		'date_production' => 'potsexpiredate',
		'productiondate'  => 'potsexpiredate',
		'sequence'        => 'potdseq',
		'lotdate'         => 'potsexpiredate',
		'datecode'        => 'potsexpiredatecd',

		// FK
		'item'            => 'itmItem',
	);

	/**
	 * Return Item Master Ite
	 * @return ItemMasterItem
	 */
	public function getItmItem() {
		return ItemMasterItemQuery::create()->findOneByItemid($this->itemid);
	}
}
