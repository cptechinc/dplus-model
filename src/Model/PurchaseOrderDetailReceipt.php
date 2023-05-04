<?php

use Base\PurchaseOrderDetailReceipt as BasePurchaseOrderDetailReceipt;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_receipt_det' table.
 * 
 * FKRELATIONSHIPS: PurchaseOrder, PurhaseOrderDetail, PoRecevingHead, ItemMasterItem, 
 */
class PurchaseOrderDetailReceipt extends BasePurchaseOrderDetailReceipt {
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
		'poref'           => 'pordref',
		'qty_received'    => 'pordqtyrec',
		'qtyReceived'     => 'pordqtyrec',
		'date_transfered' => 'pordtrandate'
	);
}
