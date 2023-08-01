<?php
// Dplus Model
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base Classes
use Base\InvTransferPickedLotserial as BaseInvTransferPickedLotserial;

/**
 * Class for representing a row from the 'inv_trans_pulled' table.
 * 
 * REPRESENTS: Tranfser Order Lotserial
 * FKRELATIONSHIPS: InvTransferOrder, InvTransferDetail, ItemMasterItem, InvLotMaster, InvSerialMaster
 */
class InvTransferPickedLotserial extends BaseInvTransferPickedLotserial {
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
		'lotserial'  => 'inpdlotser',
		'lotreference'  => 'inpdlotref',
		'binid'         => 'inpdbin',
		'qtyReserved'   => 'inpdqtyresv',
		'qtyShipped'    => 'inpdqtyship',
		'qtyNotPosted'  => 'inpdQtyNotPost',
		'date'			=> 'dateupdtd',
		'time'			=> 'timeupdtd',
		// FOREIGN KEY GETS
		'item'      => 'itemMasterItem',
	];
}
