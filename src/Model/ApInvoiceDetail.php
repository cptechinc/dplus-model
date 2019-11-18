<?php

use Base\ApInvoiceDetail as BaseApInvoiceDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_invoice_det' table.
 *
 */
class ApInvoiceDetail extends BaseApInvoiceDetail {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'invoicenumber' => 'apidinvnbr',
		'vendorid' => 'apvevendid',
		'linenbr' => 'apidline',
		'price' => 'apidamt',
		'itemid' => 'inititemnbr',
		'qty_received' => 'apidqtyrec'
	);
}
