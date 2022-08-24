<?php

use Base\ArCust3partyFreight as BaseArCust3partyFreight;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_3party' table.
 * FKRELATIONSHIPS: Customer
 */
class ArCust3partyFreight extends BaseArCust3partyFreight {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_ACCOUNTNBR = 10;
	const INTERNATIONAL_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'custid'          => 'arcucustid',
		'accountnbr'      => 'ar3pacctnbr',
		'name'            => 'ar3pname',
		'address'         => 'ar3padr1',
		'address1'        => 'ar3padr1',
		'address2'        => 'ar3padr2',
		'address3'        => 'ar3padr3',
		'country'         => 'ar3pctry',
		'city'            => 'ar3pcity',
		'state'           => 'ar3pstate',
		'zip'             => 'ar3pzipcode',
		'international'   => 'ar3pintl',
		'phone'           => 'ar3ptelnbr',
		'extension'        => 'ar3ptelnbr',
		'fax'              => 'ar3pfaxnbr',
		'date'		       => 'dateupdtd',
		'time'		       => 'timeupdtd',
	);

	/**
	 * Return if this account is International
	 * @return bool
	 */
	public function isInternational() {
		return strtoupper($this->international) == self::INTERNATIONAL_TRUE;
	}
}
