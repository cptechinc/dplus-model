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
		'qtyRequested' => 'indtqtyrqst',
		'qtyShipped '  => 'indtqtyship',
		'requestdate'  => 'indtrqstdate',
		'shipdate'     => 'indtshipdate',
		'primarybinid' => 'indtprimbin',
		'date'			=> 'dateupdtd',
		'time'			=> 'timeupdtd',
		// FOREIGN KEY GETS
		'item'      => 'itemMasterItem',
	];
}
