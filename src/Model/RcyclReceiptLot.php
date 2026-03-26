<?php

use Base\RcyclReceiptLot as BaseRcyclReceiptLot;
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

use ItemMasterItem as ItmItem;
use RcyclReceiptDetail as RcptItem;

/**
 * class for representing a row from the 'rcycl_lot_det' table.
 * 
 * KEYS: rnbr, linenbr, lotserial
 * FKRELATIONSHIPS: RcyclReceiptDetail, ItemMasterItem
 * 
 * @property string   $rtype
 * @property int      $rnbr
 * @property int      $linenbr
 * @property string   $itemid
 * @property string   $lotserial
 * @property string   $status
 * @property float    $qty
 * @property int      $lotdate
 * @property string   $closedby
 * @property int      $closeddate
 * @property int      $closedtime
 * @property int      $date
 * @property int      $time
 * @property ItmItem  $itmitem
 * @property RcptItem $rcptitem
 */
class RcyclReceiptLot extends BaseRcyclReceiptLot {
    use ThrowErrorTrait;
	use MagicMethodTraits;

    const COLUMN_ALIASES = [
        'rtype'        => 'rcyhdrcptbulk',
        'rnbr'         => 'rcyhdcntrlnbr',
        'linenbr'      => 'rcydtrcptline',
        'lotserial'    => 'rcysdlotnbr',
        'itemid'       => 'inititemnbr',
        'qty'          => 'rcysdlotqty',
        'lotdate'      => 'rcysdlotdate',
        'status'       => 'rcysdstatus',
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
