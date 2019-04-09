<?php

use Base\SalesOrderDetail as BaseSalesOrderDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'so_detail' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class SalesOrderDetail extends BaseSalesOrderDetail {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	protected $column_aliases = array(
		'ordernumber'  => 'oehdnbr',
		'qty_ordered'  => 'oedtqtyord',
		'price'        => 'oedtpric',
		'total_price'  => 'oedtprictot',
		'itemid'       => 'inititemnbr',
		'desc1'        => 'oedtdesc',
		'desc2'        => 'oedtdesc2'
	);
}
