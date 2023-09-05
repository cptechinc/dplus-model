<?php

use Base\InvSerialMaster as BaseInvSerialMaster;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_ser_mast' table.
 */
class InvSerialMaster extends BaseInvSerialMaster {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'       => 'inititemnbr',
		'serialnbr'    => 'sermsernbr',
		'lotserial'    => 'sermsernbr',
		'reference'    => 'sermrefsernbr',
		'ordn'         => 'sermsordnbr',
		'ordernumber'  => 'sermsordnbr',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd',
		'item'         => 'itemMasterItem',
	);
}
