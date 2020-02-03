<?php

use Base\SalesOrderShipment as BaseSalesOrderShipment;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_hist_ship' table.
 *
 * NOTE: Foreign Key Relationship to SalesOrder, SalesHistory
 */
class SalesOrderShipment extends BaseSalesOrderShipment {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'  => 'oehshnbr',
		'shipdate'     => 'oehshshipdate',
		'deliveredby'  => 'oehshservtype',
		'trackingnbr'  => 'oehshtracknbr'
	);
}
