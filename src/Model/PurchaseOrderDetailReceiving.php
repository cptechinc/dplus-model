<?php

use Base\PurchaseOrderDetailReceiving as BasePurchaseOrderDetailReceiving;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_tran_det' table.
 *
 */
class PurchaseOrderDetailReceiving extends BasePurchaseOrderDetailReceiving {
	use ThrowErrorTrait;
	use MagicMethodTraits;

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
		'date_transfered' => 'potdtrandate'
	);

	public function qty_remaining() {
		return $this->potdqtyord - $this->potdqtyrec;
	}

	public function get_receivedlots() {
		$q = PurchaseOrderDetailLotReceivingQuery::create();
		$q->filterByPonbr($this->pothnbr);
		$q->filterByLinenbr($this->potdline);
		return $q->find();
	}
}
