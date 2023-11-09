<?php
// Dplus Model
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base Classes
use Base\InvTransferPreAllocatedLotserial as BaseInvTransferPreAllocatedLotserial;

/**
 * Class for representing a row from the 'inv_trans_pre_allo' table.
 * 
 * REPRESENTS: Tranfser Order Pre-Allocated Lotserial
 * FKRELATIONSHIPS: InvTransferOrder, InvTransferDetail, ItemMasterItem, InvLotMaster, InvSerialMaster
 */
class InvTransferPreAllocatedLotserial extends BaseInvTransferPreAllocatedLotserial {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'tnbr'		=> 'inhdnbr',
		'ordn'		=> 'inhdnbr',
		'linenbr'	=> 'indtline',
		'itemid'    => 'inititemnbr',
		'lotserial'  => 'inidlotser',
		'lotreference'  => 'inidlotref',
		'binid'         => 'inidbin',
		'qtyReserved'   => 'inidqtyresv',
		'qtyShip'       => 'inidqtyship',
		'qtyNotPosted'  => 'inidQtyNotPost',
		'date'			=> 'dateupdtd',
		'time'			=> 'timeupdtd',
		// FOREIGN KEY GETS
		'item'      => 'itemMasterItem',
	];
}
