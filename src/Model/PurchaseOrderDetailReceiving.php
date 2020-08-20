<?php

use Base\PurchaseOrderDetailReceiving as BasePurchaseOrderDetailReceiving;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
use Dplus\Model\ItemMasterTraits;

/**
 * Class for representing a row from the 'po_tran_det' table.
 *
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
		'qty_received'    => 'potdqtyrec',
		'date_transfered' => 'potdtrandate',
		'vendoritemid'    => 'potdvenditemnbr',
		'cost'            => 'potdpurchunitcost',
		'cost_total'      => 'potdpurchtotcost',
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
