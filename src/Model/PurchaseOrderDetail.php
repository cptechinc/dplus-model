<?php

use Base\PurchaseOrderDetail as BasePurchaseOrderDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_detail' table.
 *
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
 		'whse'          => 'inbtwhse',
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

	public function qty_received() {
		$q = PurchaseOrderDetailReceivedQuery::create();
		$q->withColumn('SUM(pordqtyrec)', 'qtyreceived');
		$q->select('qtyreceived');
		$q->filterByPonbr($this->pohdnbr);
		$q->filterByLinenbr($this->podtline);
		return $q->findOne();
	}

	public function qty_remaining() {
		return $this->qty_ordered - $this->qty_received();
	}
}
