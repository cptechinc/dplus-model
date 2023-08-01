<?php
// Dplus Model
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base Classes
use Base\InvTransferLotserial as BaseInvTransferLotserial;

/**
 * Class for representing a row from the 'inv_trans_lotser' table.
 *
 * REPRESENTS: Tranfser Order Lotserial
 * FKRELATIONSHIPS: InvTransferOrder, InvTransferDetail, ItemMasterItem, InvLotMaster, InvSerialMaster
 */
class InvTransferLotserial extends BaseInvTransferLotserial {
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
		'qtyReserved'   => 'insdqtyresv',
		'qtyShipped'  => 'insdqtyship',
		'qtyNotPosted' => 'insdQtyNotPost',
		'lotserial'  => 'insdlotser',
		'lotreference'  => 'insdlotref',
		'binid'      => 'insdbin',
		'binidFrom'      => 'insdbinfrom',
		'binidTo'      => 'insdbinto',
		'date'			=> 'dateupdtd',
		'time'			=> 'timeupdtd',
		// FOREIGN KEY GETS
		'item'      => 'itemMasterItem',
	];
}
