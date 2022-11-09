<?php

use Base\SoPickedLotserial as BaseSoPickedLotserial;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_pulled' table.
 * PURPOSE: Lotserials have been picked for a Sales Order
 * FKRELATIONSHIPS: SalesOrder, SalesOrderDetail, InvLotMaster, ItemMasterItem
 */
class SoPickedLotserial extends BaseSoPickedLotserial {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'  => 'oehdnbr',
		'linenbr'      => 'oedtline',
		'itemid'       => 'inititemnbr',
		'lotserial'    => 'oepdlotser',
		'lotreference' => 'oepdlotref',
		'binid'        => 'oepdbin',
		'qty'          => 'oepdqtyship',
		'palletid'     => 'oepdplltnbr', 
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd',
		// ALIASES for Foreign Keys
		'item'         => 'itemMasterItem',
		'order'        => 'salesOrder',
		'orderline'    => 'salesOrderDetail',
		'lotmlot'      => 'invLotMaster'
	);
}
