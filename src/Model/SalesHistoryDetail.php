<?php

use Base\SalesHistoryDetail as BaseSalesHistoryDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'so_det_hist' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class SalesHistoryDetail extends BaseSalesHistoryDetail {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'  => 'oehdnbr',
		'qty_ordered'  => 'oedhqtyord',
		'price'        => 'oedhpric',
		'total_price'  => 'oedhprictot',
		'itemid'       => 'inititemnbr',
		'desc1'        => 'oedhdesc',
		'desc2'        => 'oedhdesc2'
	);
}
