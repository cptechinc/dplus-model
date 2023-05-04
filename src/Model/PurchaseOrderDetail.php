<?php

use Base\PurchaseOrderDetail as BasePurchaseOrderDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_detail' table.
 *
 * FKRELATIONSHIPS: PurchaseOrder, ItemMasterItem
 */
class PurchaseOrderDetail extends BasePurchaseOrderDetail {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const PONBR_BLANK = '00000000';

	const STATUS_DESCRIPTIONS = array(
		'N' => 'not printed',
		'C' => 'closed',
		'O' => 'open',
		'P' => 'printed'
	);

	const STATUS_OPEN   = 'O';
	const STATUS_CLOSED = 'C';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	 const COLUMN_ALIASES = array(
		'ponbr'      => 'pohdnbr',
		'linenbr'    => 'podtline',
		'itemid'     => 'inititemnbr',
		'description' => 'podtdesc1',
		'desscription2' => 'podtdesc2',
		'vendoritemid'  => 'podtvenditemnbr',
		'whse'          => 'intbwhse',
		'date_shipped'  => 'podtshipdate',
		'date_expected' => 'podtexptdate',
		'uom'           => 'intbuompur',
		'qty_ordered'   => 'podtqtyord',
		'cost'          => 'podtcost',
		'cost_total'    => 'podtcosttot',
		'specialorder'  => 'podtspecordr',
		'glaccount'     => 'podtglacct',
		'weight'        => 'podtwghttot',
		'whse_destination' => 'podtdestwhse',
		'status'           => 'podtstat',
		'qtyduein'         => 'podtqtyduein',
		'ordn'             => 'podtsonbr',
		// FK
		'itm'              => 'Itmitem',
		'glcode'           => 'GlCode',
	);

	/**
	 * Return Qty Received from the Database
	 * @return float
	 */
	public function qty_received() {
		$q = PurchaseOrderDetailReceivingQuery::create();
		$q->withColumn('SUM(potdqtyrec)', 'qty');
		$q->select('qty');
		$q->filterByPonbr($this->pohdnbr);
		$q->filterByLinenbr($this->podtline);
		return $q->findOne();
	}

	/**
	 * Return Qty Received from the Database
	 * @return float
	 */
	public function qty_receipt() {
		$q = PurchaseOrderDetailReceiptQuery::create();
		$q->withColumn('SUM(pordqtyrec)', 'qty');
		$q->select('qty');
		$q->filterByPonbr($this->pohdnbr);
		$q->filterByLinenbr($this->podtline);
		return $q->findOne();
	}

	/**
	 * Return Qty Invoiced
	 * @return float
	 */
	public function qty_invoiced() {
		$q = ApInvoiceDetailQuery::create();
		$col = ApInvoiceDetail::get_aliasproperty('qty_received');
		$q->withColumn("SUM($col)", 'qty');
		$q->select('qty');
		$q->filterByPonbr($this->pohdnbr);
		$q->filterByLinenbr($this->podtline);
		return $q->findOne();
	}

	/**
	 * Return Qty Remaining to Receive
	 * @return int
	 */
	public function qty_remaining() {
		return $this->qty_ordered - $this->qty_received();
	}

	/**
	 * Return Notes for the Purchase Order Notes
	 * @return PurchaseOrderNote[]|ObjectCollection
	 */
	public function get_notes() {
		$q = PurchaseOrderNoteQuery::create();
		$q->filterByPonbr($this->pohdnbr);
		$q->filterByLinenbr($this->podtline);
		return $q->find();
	}

	/**
	 * Return Notes for the Purchase Order Notes
	 * @return PurchaseOrderNote[]|ObjectCollection
	 */
	public function count_notes() {
		$q = PurchaseOrderNoteQuery::create();
		$q->filterByPonbr($this->pohdnbr);
		$q->filterByLinenbr($this->podtline);
		return $q->count();
	}

	/**
	 * Returns if PO is in a closed status
	 * @return bool
	 */
	public function is_closed() {
		return $this->status == self::STATUS_CLOSED;
	}

	/**
	 * Return Corresponding ITM Item
	 * @return ItemMasterItem
	 */
	public function getItmitem() {
		return ItemMasterItemQuery::create()->findOneByItemid($this->itemid);
	}

	/**
	 * Return Corresponding ITM Item
	 * @return GlCode
	 */
	public function getGlCode() {
		return GlCodeQuery::create()->findOneByCode($this->glaccount);
	}
}
