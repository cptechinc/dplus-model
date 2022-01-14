<?php

use Base\SoAllocatedLotserial as BaseSoAllocatedLotserial;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;


/**
 * Class for representing a row from the 'so_pre_allo' table.
 * 
 * FKRELATIONSHIPS: SalesOrder, SalesOrderDetail, ItemMasterItem, InvLotMaster
 */
class SoAllocatedLotserial extends BaseSoAllocatedLotserial {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ordn'          => 'oehdnbr',
		'ordernumber'   => 'oehdnbr',
		'line'          => 'oedtline',
		'linenumber'    => 'oedtline',
		'itemid'        => 'inititemnbr',
		'lotserial'     => 'oeidlotser',
		'bin'           => 'oeidbin',
		'shipqty'       => 'oeidqtyship',
		'qtyship'       => 'oeidqtyship',
		'lotref'        => 'oeidlotref',
		'lotreference'  => 'oeidlotref',
		// FK Relatitonships
		'order'         => 'salesOrder',
		'orderline'     => 'salesOrderDetail',
		'item'          => 'itemMasterItem',
		'invlot'        => 'invLotMaster',
		'invlotserial'  => 'invLotMaster',
	);
}
