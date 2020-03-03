<?php

use Base\CstkHead as BaseCstkHead;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;


/**
 * Class for representing a row from the 'cust_stock_head' table.
 *
 * NOTE: Foreign Key Relationship to Customer, CustomerShipto
 */
class CstkHead extends BaseCstkHead {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE_ORDER     = 'O';
	const TYPE_COUNT     = 'C';
	const TYPE_REPLENISH = 'R';

	/**
	 * CSTK Type
	 */
	const TYPES = array(
		'O' => 'order',
		'R' => 'replenish',
		'C' => 'count'
	);

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'custID'                  => 'arcucustid',
		'custid'                  => 'arcucustid',
		'shiptoid'                => 'arstshipid',
		'shiptoID'                => 'arstshipid',
		'stockingcell'            => 'cskhcell',
		'cell'                    => 'cskhcell',
		'whse'                    => 'cskhwhse',
		'type'                    => 'cskhreplcnt',
	);
}
