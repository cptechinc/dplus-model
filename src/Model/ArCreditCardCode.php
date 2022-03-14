<?php

use Base\ArCreditCardCode as BaseArCreditCardCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_crcd' table.
 */
class ArCreditCardCode extends BaseArCreditCardCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 1;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'                      => 'artbcrcdcode',
		'code'                    => 'artbcrcdcode',
		'description'             => 'artbcrcdname',
		'name'                    => 'artbcrcdname',
		'gl_account'              => 'artbcrcdglacct',
		'glaccountnbr'            => 'artbcrcdglacct',
		'custid'                  => 'artbcrcdcustid',
		'charge_gl_account'       => 'artbcrcdchrgglacct',
		'glchargeaccountnbr'      => 'artbcrcdchrgglacct',
		'charge_rate'             => 'artbcrcdchrgrate',
		'servicerate'             => 'artbcrcdchrgrate',
		'trans_cost'              => 'artbcrcdchrgtrancost',
		'transactioncost'         => 'artbcrcdchrgtrancost',
		'cc_surcharge_percent'    => 'artbcrcdccsurchgpct',
		'surchargepercentcc'      => 'artbcrcdccsurchgpct',
		'lmcc_surcharge_percent'  => 'artbcrcdlmccsurchgpct',
		'date'		              => 'dateupdtd',
		'time'		              => 'timeupdtd',
	);

	/**
	 * Return Customer for Cash Customer
	 * @return Customer
	 */
	public function getCustomerName() {
		return CustomerQuery::create()->findOneByCustid($this->custid);
	}

	/**
	 * Return GLcode for GL Charge Account
	 * @return GlCode
	 */
	public function getGlChargeAcct() {
		return GlCodeQuery::create()->findOneById($this->glchargeaccountnbr);
	}

	/**
	 * Return GLcode
	 * @return GlCode
	 */
	public function getGlAcct() {
		return GlCodeQuery::create()->findOneById($this->glaccountnbr);
	}

	/**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
