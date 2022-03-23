<?php

use Base\Shipvia as BaseShipvia;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cust_svia' table.
 */
class Shipvia extends BaseShipvia {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 8;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'code'           => 'artbshipvia',
		'id'             => 'artbshipvia',
		'shipvia'        => 'artbshipvia',
		'description'    => 'artbsviadesc',
		'description2'   => 'artbsviaupserv',
		'chargefreight'  => 'artbsviachrgfrt',
	);
}
