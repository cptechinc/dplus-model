<?php

use Base\InvSerialWarranty as BaseInvSerialWarranty;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;


/**
 * Class for representing a row from the 'inv_war_mast' table.
 * REPRESENTS: Warranty Record
 * FKRELATIONSHIPS: ItemMasterItem, InvSerialMaster, Customer
 */
class InvSerialWarranty extends BaseInvSerialWarranty {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'       => 'inititemnbr',
		'serialnbr'    => 'sermsernbr',
		'ordn'         => 'warmsordnbr',
		'ordernumber'  => 'warmsordnbr',
		'custid'       => 'arcucustid',
		'originalwarrantydate' => 'warmacorigwarrdate',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);
}
