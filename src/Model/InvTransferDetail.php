<?php

use Base\InvTransferDetail as BaseInvTransferDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'inv_trans_det' table.
 * 
 * REPRESENTS: Tranfser Order Detail
 * FKRELATIONSHIPS: InvTransferOrder ItemMasterItem
 */
class InvTransferDetail extends BaseInvTransferDetail {
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
 		'qtyOrdered'   => 'indtqtyrqst',
 		'qty_ordered'   => 'indtqtyrqst',
		'qtyRequested' => 'indtqtyrqst',
		'qty_requested' => 'indtqtyrqst',
		'qtyShip'      => 'indtqtyship',
		'qtyPicked'    => 'indtqtyship',
		'qtyReceived'  => 'indttobercvd', 
		'qty_received'  => 'indttobercvd', 
		'qtyPrevReceived'  => 'indtqtyrcvd', 
		'qty_prevreceived'  => 'indtqtyrcvd', 
		'requestdate'  => 'indtrqstdate',
		'shipdate'     => 'indtshipdate',
		'primarybinid' => 'indtprimbin',
		'date'			=> 'dateupdtd',
		'time'			=> 'timeupdtd',
		// FOREIGN KEY GETS
		'item'      => 'itemMasterItem',
	];
}
