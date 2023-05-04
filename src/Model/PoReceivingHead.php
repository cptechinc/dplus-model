<?php

use Base\PoReceivingHead as BasePoReceivingHead;

/**
 * Class for representing a row from the 'po_tran_head' table.
 *
 * FKRELATIONSHIPS: PurchaseOrder, Warehouse
 */
class PoReceivingHead extends BasePoReceivingHead {
	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'ponbr'              => 'pothnbr',
		'status'             => 'pothstat',
		'whseid'             => 'intbwhse',
		'origwhseid'         => 'intbwhseorig',
		'glperiod'           => 'pothglpd',
		'countrycd'          => 'pothexctry',
		'receiptnbr'         => 'pothRcptNbr'
	];
}
