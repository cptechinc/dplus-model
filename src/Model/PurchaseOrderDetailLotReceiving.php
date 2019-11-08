<?php

use Base\PurchaseOrderDetailLotReceiving as BasePurchaseOrderDetailLotReceiving;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_tran_lot_det' table.
 *
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
		'qty_received' => 'potsqtyrec',
		'lotreference' => 'potslotref',
		'date_production' => 'potsexpiredate'
	);
}
