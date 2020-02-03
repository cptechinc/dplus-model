<?php

use Base\PurchaseOrderDetail as BasePurchaseOrderDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_detail' table.
 *
 * NOTE: Foreign Key Relationship to PurchaseOrder 
 */
class PurchaseOrderDetail extends BasePurchaseOrderDetail {
	use ThrowErrorTrait;
	use MagicMethodTraits;

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
		'uom'           => 'inbuompur',
		'qty_ordered'   => 'podtqtyord',
		'cost'          => 'podtcost',
		'cost_total'    => 'podtcosttot',
		'specialorder'  => 'podtspecordr',
		'glaccount'     => 'podtglacct',
		'weight'        => 'podtwghttot',
		'whse_destination' => 'podtdestwhse',
	);

	/**
	 * Return Qty Received from the Database
	 *
	 * @return int
	 */
	public function qty_received() {
		$q = PurchaseOrderDetailReceivedQuery::create();
		$q->withColumn('SUM(pordqtyrec)', 'qtyreceived');
		$q->select('qtyreceived');
		$q->filterByPonbr($this->pohdnbr);
		$q->filterByLinenbr($this->podtline);
		return $q->findOne();
	}

	/**
	 * Return Qty Remaining to Receive
	 *
	 * @return int
	 */
	public function qty_remaining() {
		return $this->qty_ordered - $this->qty_received();
	}

	/**
	 * Return Notes for the Purchase Order Notes
	 * @return PurchaseOrderNotes[]|ObjectCollection
	 */
	public function get_notes() {
		$q = PurchaseOrderNotesQuery::create();
		$q->filterByPonbr($this->pohdnbr);
		$q->filterByLinenbr($this->podtline);
		return $q->find();
	}

	/**
	 * Return Notes for the Purchase Order Notes
	 * @return PurchaseOrderNotes[]|ObjectCollection
	 */
	public function count_notes() {
		$q = PurchaseOrderNotesQuery::create();
		$q->filterByPonbr($this->pohdnbr);
		$q->filterByLinenbr($this->podtline);
		return $q->count();
	}
}
