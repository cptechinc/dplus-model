<?php

use Base\RcyclReceiptDetail as BaseRcyclReceiptDetail;
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * class for representing a row from the 'rcycl_det' table.
 * 
 * KEYS: rnbr, linenbr
 * FKRELATIONSHIPS: RcyclReceipt, RcyclReceiptLot, ItemMasterItem, UnitOfMeasureSale
 */
class RcyclReceiptDetail extends BaseRcyclReceiptDetail {
    use ThrowErrorTrait;
	use MagicMethodTraits;

    const COLUMN_ALIASES = [
        'rcptorbulk'   => 'rcyhdrcptbulk',
        'rnbr'         => 'rcyhdcntrlnbr',
        'linenbr'      => 'rcydtrcptline',
        'itemid'       => 'inititemnbr',
        'uomcode'      => 'intbuomsale',
        'status'       => 'rcdtstatus',
        'qtyrcvd'      => 'rcdtrcptqty',
        'qty'          => 'rcdtrcptqty',
        'closedby'     => 'rcydtclosedby',
        'closeddate'   => 'rcydtcloseddate',
        'closedtime'   => 'rcydtclosedtime',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd',

        // Releated object aliases
        'itmitem'   => 'ItemMasterItem',
        'uom'       => 'UnitofMeasureSale',
        'receipt'   => 'RcyclReceipt',
        'lots'      => 'RcyclReceiptLots',
    ];
}
