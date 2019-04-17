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

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
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
		'total_tax'    => 'OehhTaxTot',
		'shipto_name'     => 'oehhstname',
		'shipto_address1' => 'oehhstadr1',
		'shipto_address2' => 'oehhstadr2',
		'shipto_address3' => 'oehhstadr3',
		'shipto_country'  => 'oehhstctry',
		'shipto_city'     => 'oehhstcity',
		'shipto_state'    => 'oehhststat',
		'shipto_zip'      => 'oehhstzipcode'
	);

	/**
	 * Order Statuses and the values for their description
	 *
	 * @var array
	 */
	public static $status_descriptions = array(
		'N' => 'new',
		'P' => 'picked',
		'V' => 'verified',
		'I' => 'invoiced'
	);

	/**
	 * Return the status description based of the order status
	 *
	 * @return void
	 */
	public function status() {
		return self::$status_descriptions[$this->oehhstat];
	}
}
