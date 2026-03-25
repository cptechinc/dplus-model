<?php

use Base\RcyclReceiptLot as BaseRcyclReceiptLot;
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * class for representing a row from the 'rcycl_lot_det' table.
 * 
 * KEYS: rnbr, linenbr, lotserial
 * FKRELATIONSHIPS: RcyclReceiptDetail, ItemMasterItem
 */
class RcyclReceiptLot extends BaseRcyclReceiptLot {
    use ThrowErrorTrait;
	use MagicMethodTraits;

    const COLUMN_ALIASES = [
        'rtype'        => 'rcyhdrcptbulk',
        'rnbr'         => 'rcyhdcntrlnbr',
        'linenbr'      => 'rcydtrcptline',
        'lotserial'    => 'rcsdlotnbr',
        'itemid'       => 'inititemnbr',
        'qty'          => 'rcsdlotqty',
        'lotdate'      => 'rcsdlotdate',
        'status'       => 'rcsdstatus',
        'closedby'     => 'rcysdclosedby',
        'closeddate'   => 'rcysdcloseddate',
        'closedtime'   => 'rcysdclosedtime',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd',

        // Releated object aliases
        'itmitem'   => 'ItemMasterItem',
        'rcptitem'  => 'RcyclReceiptDetail',
    ];
}
