<?php

use Base\InvLotTag as BaseInvLotTag;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_inv_tag' table.
 * REPRESENTS: Inventory Tag for counting inventory (used in ITE)
 * FKRELATIONSHIPS: DplusUser, ItemMasterItem, InvLotMaster, InvSerialMaster, Warehouse
 */
class InvLotTag extends BaseInvLotTag {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const POSTED_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'worksheetid'    => 'intgworkid',
		'whseid'         => 'intbwhse',
		'tagid'          => 'intgtagnbr',
		'tagnbr'         => 'intgtagnbr',
		'itemid'         => 'inititemnbr',
		'lotserial'      => 'intglotser',
		'lotnbr'         => 'intglotser',
		'serialnbr'      => 'intglotser',
		'binid'          => 'intgbin',
		'qty'            => 'intgqty',
		'userid'         => 'intguserid',
		'entrydate'      => 'intgentrdate',
		'entrytime'      => 'intgentrtime',
		'posted'         => 'intgposted',
		'date'           => 'dateupdtd',
		'time'           => 'timeupdtd',
		// FK Calls
		'user'           => 'dplusUser',
		'item'           => 'itemMasterItem',
		'lot'            => 'invLotMaster',
		'serial'         => 'invSerialMaster',
	];

	/**
	 * Return if Tag is Posted
	 * @return bool
	 */
	public function isPosted() {
		return $this->posted == self::POSTED_TRUE;
	}
}
