<?php

use Base\SalesOrder as BaseSalesOrder;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'so_header' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class SalesOrder extends BaseSalesOrder {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
     * Hold Status Code
     * NOTE: The code is Case Sensitive
     * A = Customer is on Credit Hold
     * B = A detail line did not meet minimum margin requirements, Was an A, C, or H before
     * C = Over Credit Limit
     * H = This order is on Hold
     * M = A detail line did not meet minimum margin requirements, line quantity, or order amount.
     *     Same as B but was not on hold for other reasons
     * N = Not on Hold
     * R = Review by Sales Rep
     * r = reviewed by Sales Rep
     * n = Not on hold, released by user
     * S = On hold, waiting for transfer
     * T = On hold because of Terms or Rejected Credit Card
     * W = On hold because this a a new Web Order
     * @var string
     */
	protected $oehdstat;
	
	protected $column_aliases = array(
		'ordernumber'  => 'oehdnbr',
		'custid'       => 'arcucustid',
		'shiptoid'     => 'arstshipid',
		'custpo'       => 'oehdcustpo',
		'total_total'  => 'oehdoordrtot',
		'date_ordered' => 'oehdordrdate',
		'status'       => 'oehdstat',
		'subtotal_nontax' => 'OehdNonTaxSub',
		'total_freight'   => 'OehdFrtTot',
		'total_tax'       => 'OehdTaxTot',
		'shipto_name'     => 'oehdstname',
		'shipto_address1' => 'oehdstadr1',
		'shipto_address2' => 'oehdstadr2',
		'shipto_address3' => 'oehdstadr3',
		'shipto_country'  => 'oehdstctry',
		'shipto_city'     => 'oehdstcity',
		'shipto_state'    => 'oehdststat',
		'shipto_zip'      => 'oehdstzipcode'
	);

	public static $status_descriptions = array(
		'N' => 'new',
		'P' => 'picked',
		'V' => 'verified',
		'I' => 'invoiced'
	);

	public function status() {
		return self::$status_descriptions[$this->oehdstat];
	}
}
