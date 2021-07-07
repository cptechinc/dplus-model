<?php

use Base\InvLot as BaseInvLot;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_inv_lot' table.
 */
class InvLot extends BaseInvLot {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'		=> 'inititemnbr',
		'whse'			=> 'intbwhse',
		'lotserial' 	=> 'inltlotser',
		'qty'			=> 'inltonhand',
		'bin'			=> 'inltbin',
		'date_lot'		=> 'inltdate',
		'date_written'	=> 'inltdatewrite',
		'date_expire'	=> 'inltexpiredate',
		'date'			=> 'dateupdtd',
		'time'			=> 'timeupdtd',

		// FOREIGN KEY GETS
		'item'          => 'itemMasterItem'
	);
}
