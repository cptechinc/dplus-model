<?php

use Base\PurchaseOrderDetailReceiving as BasePurchaseOrderDetailReceiving;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
use Dplus\Model\ItemMasterTraits;

/**
 * Class for representing a row from the 'po_tran_det' table.
 * 
 * FKRELATIONSHIPS: PurchaseOrder, PurhaseOrderDetail, PoRecevingHead, ItemMasterItem
 */
class PurchaseOrderDetailReceiving extends BasePurchaseOrderDetailReceiving {
	use ThrowErrorTrait;
	use MagicMethodTraits;
	use ItemMasterTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ponbr'           => 'pothnbr',
		'linenbr'         => 'potdline',
		'itemid'          => 'inititemnbr',
		'description'     => 'potddesc1',
		'uom'             => 'intbuompur',
		'poref'           => 'pordref',
		'qty_ordered'     => 'potdqtyord',
		'qtyOrdered'      => 'potdqtyord',
		'qty_received'    => 'potdqtyrec',
		'qtyReceived'     => 'potdqtyrec',
		'date_transfered' => 'potdtrandate',
		'vendoritemid'    => 'potdvenditemnbr',
		'cost'            => 'potdpurchunitcost',
		'cost_total'      => 'potdpurchtotcost',
		'totalcost'       => 'potdpurchtotcost',
		'podetail'        => 'purchaseOrderDetail',
	);

	/**
	 * Return Quantity left to receive
	 *
	 * @return string
	 */
	public function qty_remaining() {
		return $this->potdqtyord - $this->potdqtyrec;
	}

	/**
	 * Return the Number of Lots Received
	 *
	 * @return int
	 */
	public function count_receivedlots() {
		$q = PurchaseOrderDetailLotReceivingQuery::create();
		$q->filterByPonbr($this->pothnbr);
		$q->filterByLinenbr($this->potdline);
		return $q->count();
	}

	/**
	 * Returns Lots Received for this Purchase Order Detail Line
	 *
	 * @return PurchaseOrderDetailLot[]|ObjectCollection
	 */
	public function get_receivedlots() {
		$q = PurchaseOrderDetailLotReceivingQuery::create();
		$q->filterByPonbr($this->pothnbr);
		$q->filterByLinenbr($this->potdline);
		return $q->find();
	}
}
