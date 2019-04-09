<?php

use Base\SalesHistory as BaseSalesHistory;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'so_head_hist' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class SalesHistory extends BaseSalesHistory {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	protected $column_aliases = array(
		'ordernumber'  => 'oehhnbr',
		'custid'       => 'arcucustid',
		'shiptoid'     => 'arstshipid',
		'custpo'       => 'oehhcustpo',
		'total_total'  => 'oehhoordrtot',
		'date_ordered' => 'oehhordrdate',
		'status'       => 'oehhstat',
		'subtotal_nontax' => 'OehhNonTaxSub',
		'total_freight' => 'OehhFrtTot',
		'total_tax'    => 'OehhTaxTot'
		
	);

	public static $status_descriptions = array(
		'N' => 'new',
		'P' => 'picked',
		'V' => 'verified',
		'I' => 'invoiced'
	);

	public function status() {
		return self::$status_descriptions[$this->oehhstat];
	}
}
