<?php

use Base\ArInvoice as BaseArInvoice;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_inv' table.
 *
 * FKRELATIONSHIPS: Customer
 */
class ArInvoice extends BaseArInvoice {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE_MEMO    = 'M';
	const TYPE_PAYMENT = 'M';
	const TYPE_INVOICE = 'I';

	private $arPayment;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'invoicenumber'  => 'arininvnbr',
		'invnbr'         => 'arininvnbr',
		'custid'         => 'arcucustid',
		'type'           => 'arintype',
		'invoicedate'    => 'arininvdate',
		'duedate'        => 'arinduedate',
		'custpo'         => 'arincustpo',
		'checknbr'       => 'arinchknbr',
		'total'          => 'arintotamt',
		'date'           => 'dateupdtd',
		'time'           => 'timeupdtd',
	);

	/**
	 * Return AR Payment for Invoice
	 * @return ArPaymentPending
	 */
	public function getArPaymentPending() {
		if (empty($this->arPayment)) {
			$this->arPayment = ArPaymentPendingQuery::create()->findOneByInvoicenbr($this->invnbr);
		}
		return $this->arPayment;
	}

	/**
	 * Return if Invoice Has a Payment Pending
	 * @return bool
	 */
	public function hasPaymentPending() {
		return boolval(ArPaymentPendingQuery::create()->filterByInvoicenbr($this->invnbr)->count());
	}

}
