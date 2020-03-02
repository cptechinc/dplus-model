<?php

use Base\CstkItem as BaseCstkItem;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'cust_stock_det' table.
 * 
 * NOTE: Foreign Key Relationship to Customer, CustomerShipto, ItemMasterItem, CstkHead
 */
class CstkItem extends BaseCstkItem {
	use ThrowErrorTrait;
	use MagicMethodTraits;

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
		'line'                    => 'cskdline',
		'linenbr'                 => 'cskdline',
		'itemid'                  => 'inititemnbr',
		'custitemid'              => 'cskdcustitem',
		'bin'                     => 'cskdbin',
		'onhand'                  => 'cskdonhand',
		'unitprice'               => 'cskdunitprice',
		'estimatedusage'          => 'cskdestusag',
		'orderpoint'              => 'cskdordpnt',
		'orderqty'                => 'cskdordqty',
		'maxqty'                  => 'cskdmaxqty',
		'last12usage'             => 'cskdusaglast12',
		'countdate'               => 'cskdcountdate',
		'item'                    => 'itemMasterItem',
		'date_entered'            => 'cskdenterdate',

		// PROVALLEY ALIASES USED FOR RE-ORDERING DATA FOR QUOTE, SALES ORDER
		'proval_lastsale_date'       => 'cskdenterdate',
		'proval_lastsale_price'      => 'cskdunitprice',
		'proval_lastsale_qty_cases'  => 'cskdonhand',
		'proval_lastsale_qty_lbs'    => 'cskdestusag',
		'proval_totalsale_qty_cases' => 'cskdordpnt',
		'proval_totalsale_qty_lbs'   => 'cskdordqty',
	);
}
