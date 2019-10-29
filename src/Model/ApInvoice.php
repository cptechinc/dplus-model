<?php

use Base\ApInvoice as BaseApInvoice;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_invoice_head' table.
 *
 */
class ApInvoice extends BaseApInvoice {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'vendorid' => 'apvevendid',
		'vendorID' => 'apvevendid',
		'ponbr'    => 'apihponbr',
		'invoicenumber'         => 'apihinvnbr',
		'checknumber_prepaid'   => 'apihppchknbr',
		'checknumber'           => 'apihchknbr',
		'total'                 => 'apihtotamt',
		'whse'                  => 'intbwhse',
		'date_invoiced'         => 'apihinvdate'
	);
}
