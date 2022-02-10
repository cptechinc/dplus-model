<?php
// Dplus Model
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base
use Base\ArPayment as BaseArPayment;

/**
 * Class for representing a row from the 'ar_cash_det' table.
 */
class ArPayment extends BaseArPayment {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'custid'         => 'arcucustid',
		'invoicenumber'  => 'arcdinvnbr',
		'invoicenbr'     => 'arcdinvnbr',
		'checknbr'       => 'arcdchknbr',
		'invoicedate'    => 'arcdinvdate',
		'duedate'        => 'arcdduedate',
		'custpo'         => 'arcdcustpo',
		'ordernumber'    => 'arcdordrnbr',
		'ordn'           => 'arcdordrnbr',
		'termcode'       => 'arcdtermcode',
		'creditacct'     => 'arcdcredacct',
		'cashacct'       => 'arcdcashacct',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd'
	);
}
