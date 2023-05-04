<?php

use Base\InvWhseLot as BaseInvWhseLot;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_inv_lot' table.
 * 
 * REPRESENTS: Warehouse Lot Record
 * FKRELATIONSHIPS: ItemMasterItem, Warehouse, InvLotMaster
 */
class InvWhseLot extends BaseInvWhseLot {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'		=> 'inititemnbr',
		'whse'			=> 'intbwhse',
		'whseid'		=> 'intbwhse',
		'lotserial' 	=> 'inltlotser',
		'lotref'        => 'inltlotref',
		'lotreference'  => 'inltlotref',
		'qty'			=> 'inltonhand',
		'qtyOnHand'  	=> 'inltonhand',
		'qtyInTransit'  => 'inlttran',
		'qtyShipped'    => 'inltship',
		'qtyAllocated'  => 'inltAllo',
		'qtyReserved'   => 'inltResv',
		'bin'			=> 'inltbin',
		'binid' 		=> 'inltbin',
		'date_lot'		=> 'inltdate',
		'lotdate'		=> 'inltdate',
		'date_written'	=> 'inltdatewrite',
		'date_expire'	=> 'inltexpiredate',
		'expiredate'	=> 'inltexpiredate',
		'cost'          => 'inltcost',
		'date'			=> 'dateupdtd',
		'time'			=> 'timeupdtd',

		// FOREIGN KEY GETS
		'item'          => 'itemMasterItem'
	);

}
