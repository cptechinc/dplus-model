<?php

use Base\SalesHistoryLotserial as BaseSalesHistoryLotserial;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_lot_ser_hist' table.
 * NOTE: Foreign Key Relationships: SalesHistory, SalesHistoryDetail, ItemMasterItem
 */
class SalesHistoryLotserial extends BaseSalesHistoryLotserial {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'  => 'oehhnbr',
		'line'         => 'oedhline',
		'linenbr'      => 'oedhline',
		'itemid'       => 'inititemnbr',
		'bin'          => 'oeshbin',
		'lotserial'    => 'oeshlotser',
		'lotreference' => 'oeshlotref',
		'year'         => 'oeshyear',
		'qty'          => 'oeshqtyship',
		// ALIASES for Foreign Keys
		'item'         => 'itemMasterItem',
		'order'        => 'salesHistory',
		'orderline'    => 'salesHistoryDetail',
	);
}
