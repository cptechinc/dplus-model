<?php

use Base\SoStandingOrderDetail as BaseSoStandingOrderDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_stand_det' table.
 * REPRESENTS: Standing (Recurring) Sales Orders Items
 * FKRELATIONSHIPS: Customer, CustomerShipto, ItemMasterItem
 */
class SoStandingOrderDetail extends BaseSoStandingOrderDetail {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'custid'       => 'arcucustid',
		'shiptoid'     => 'arstshipid',
		'custpo'       => 'oethcustpo',
		'itemid'       => 'inititemnbr',
		'description'  => 'oetddesc',
		'description1' => 'oetddesc',
		'description2' => 'oetddesc2',
		'status'       => 'oetdstat',
		'price'        => 'oetdpric',
		'qty'          => 'oetdqty',
		'uomsale'      => 'intbuomsale',
		'cycle'        => 'oetdcycl',
		'startdate'    => 'oetdstrtdate',
		'enddate'      => 'oetdenddate',
		'lastdate'     => 'oetdlastdate',
		'leadcount'    => 'oetdleadcount',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd',

		// NOTE: Used for getting objects via __call()
		'item'         => 'itemMasterItem',
	];
}
