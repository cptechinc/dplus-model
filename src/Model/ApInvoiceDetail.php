<?php

use Base\ApInvoiceDetail as BaseApInvoiceDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_invoice_det' table.
 *
 * NOTE: Foreign Key Relationship to Vendor
 */

class ApInvoiceDetail extends BaseApInvoiceDetail {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const NON_ITEM_ITEMIDS = array(
		'freight',
		'tax'
	);

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'invoicenumber' => 'apidinvnbr',
		'vendorid'      => 'apvevendid',
		'linenbr'       => 'apidline',
		'price'         => 'apidamt',
		'price_total'   => 'apidamt',
		'itemid'        => 'inititemnbr',
		'qty_received'  => 'apidqtyrec',
		'ponbr'         => 'apidponbr',
		'description'   => 'apiddesc'
	);
}
