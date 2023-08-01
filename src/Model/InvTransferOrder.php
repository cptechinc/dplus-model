<?php

use Base\InvTransferOrder as BaseInvTransferOrder;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_trans_head' table.
 * 
 * REPRESENTS: Tranfser Order Head
 * FKRELATIONSHIPS: Warehouse, Customer, CustomerShipto, Vendor
 */
class InvTransferOrder extends BaseInvTransferOrder {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'tnbr'		=> 'inhdnbr',
		'ordn'		=> 'inhdnbr',
		'status'	=> 'inhdstat',
		'whseidFrom' => 'intbwhsefrom',
		'whseidTo'	 => 'intbwhseto',
		'entereddate' => 'inhdentdate',
		'reference'	 => 'inhdref',
		'pickdate'	 => 'inhdpickdate',
		'picktime'	 => 'inhdpicktime',
		'lockedby'	 => 'inhdcrntuser',
		'custid'	 => 'arcucustid',
		'shiptoid'	 => 'arstshipid',
		'date'			=> 'dateupdtd',
		'time'			=> 'timeupdtd',
		// FOREIGN KEY GETS
		'warehouseFrom'      => 'aWarehouseRelatedByIntbwhsefrom',
		'warehouseTo'        => 'aWarehouseRelatedByIntbwhseto'
	];

}
