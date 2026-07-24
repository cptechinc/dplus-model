<?php

declare(strict_types=1);

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
	const COLUMN_ALIASES = [
		'itemid'       => 'inititemnbr',
		'serialnbr'    => 'sermsernbr',
		'ordn'         => 'warmsordnbr',
		'ordernumber'  => 'warmsordnbr',
		'custid'       => 'arcucustid',
		'originalwarrantydate' => 'warmacorigwarrdate',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	];
}
