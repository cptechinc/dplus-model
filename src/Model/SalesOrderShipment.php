<?php

use Base\SalesOrderShipment as BaseSalesOrderShipment;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'so_hist_ship' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
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