<?php

use Base\SalesOrderLotserial as BaseSalesOrderLotserial;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_lot_ser' table.
 */
class SalesOrderLotserial extends BaseSalesOrderLotserial {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'  => 'oehdnbr',
		'line'         => 'oedtline',
		'linenbr'      => 'oedtline',
		'itemid'       => 'inititemnbr',
		'bin'          => 'oeshbin',
		'lotserial'    => 'oesdlotser',
		'lotreference' => 'oesdlotref',
		'qty'          => 'oesdqtyship',
		// ALIASES for Foreign Keys
		'item'         => 'itemMasterItem',
		'order'        => 'salesOrder',
		'orderline'    => 'salesOrderDetail',
	);
}
