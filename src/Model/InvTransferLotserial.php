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

	public $datecode = '';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'tnbr'		=> 'inhdnbr',
		'ordn'		=> 'inhdnbr',
		'ponbr'		=> 'inhdnbr',
		'linenbr'	=> 'indtline',
		'itemid'    => 'inititemnbr',
		'qtyReserved'   => 'insdqtyresv',
		'qtyReceived'   => 'insdqtyresv',
		'qty_received'   => 'insdqtyresv',
		'qtyReceivedEr' => 'insdqtyresv',
		'qtyShipped'    => 'insdqtyship',
		'qtyNotPosted'  => 'insdQtyNotPost',
		'lotserial'     => 'insdlotser',
		'lotreference'  => 'insdlotref',
		'lotref'        => 'insdlotref',
		'lotserialref'   => 'insdlotref',
		'binid'         => 'insdbin',
		'binidFrom'     => 'insdbinfrom',
		'binidTo'       => 'insdbinto',
		'binidToWhse'   => 'insdtowhsebin',
		'date'			=> 'dateupdtd',
		'time'			=> 'timeupdtd',
		'productiondate' => 'insdCureDate',
		'lotdate'        => 'insdCureDate',
		// FOREIGN KEY GETS
		'item'      => 'itemMasterItem',
	];
}
