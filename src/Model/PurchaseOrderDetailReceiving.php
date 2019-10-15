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
		'ponbr'           => 'pohdnbr',
		'linenbr'         => 'podtline',
		'itemid'          => 'inititemnbr',
		'description'     => 'potddesc1',
		'uom'             => 'intbuompur',
		'poref'           => 'pordref',
		'qty_ordered'     => 'pordqtyord',
		'qty_received'    => 'pordqtyrec',
		'date_transfered' => 'pordtrandate'
	);

	public function qty_remaining() {
		return $this->pordqtyord - $this->pordqtyrec;
	}
}
