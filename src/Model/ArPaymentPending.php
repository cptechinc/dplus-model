<?php
// Dplus Model
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base
use Base\ArPaymentPending as BaseArPaymentPending;

/**
 * Class for representing a row from the 'ar_cash_det' table.
 */
class ArPaymentPending extends BaseArPaymentPending {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'custid'         => 'arcucustid',
		'paid'           => 'arcdpaid',
		'invoicenumber'  => 'arcdinvnbr',
		'invoicenbr'     => 'arcdinvnbr',
		'invnbr'         => 'arcdinvnbr',
		'checknbr'       => 'arcdchknbr',
		'invoicedate'    => 'arcdinvdate',
		'duedate'        => 'arcdduedate',
		'custpo'         => 'arcdcustpo',
		'ordernumber'    => 'arcdordrnbr',
		'ordn'           => 'arcdordrnbr',
		'termcode'       => 'arcdtermcode',
		'creditacct'     => 'arcdcredacct',
		'cashacct'       => 'arcdcashacct',
		'amountpaid'     => 'arcdamtpaid',
		'amtpaid'        => 'arcdamtpaid',
		'discount'       => 'arcddiscpaid',
		'allowfreight'   => 'arcdfrtallow',
		'reference'      => 'arcdref',
		'writeoff'      => 'arcdwriteoff',
		'writeoffreason' => 'arcdwriteoffreason',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd'
	);
}
