<?php
use Propel\Runtime\Collection\ObjectCollection as ObjList;
use Base\RcyclReceiptDetail as BaseRcyclReceiptDetail;
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

use ItemMasterItem as ItmItem;
use RcyclReceipt as Receipt;
use UnitofMeasureSale as Uom;


/**
 * class for representing a row from the 'rcycl_det' table.
 * 
 * KEYS: rnbr, linenbr
 * FKRELATIONSHIPS: RcyclReceipt, RcyclReceiptLot, ItemMasterItem, UnitOfMeasureSale
 * 
 * @property string   $rtype
 * @property int      $rnbr
 * @property int      $linenbr
 * @property string   $itemid
 * @property string   $uomcode
 * @property float    $qty
 * @property string   $status
 * @property int      $lotdate
 * @property string   $closedby
 * @property int      $closeddate
 * @property int      $closedtime
 * @property int      $date
 * @property int      $time
 * @property ItmItem  $itmitem
 * @property Uom      $uom
 * @property Receipt  $receipt
 * @property ObjList  $lots
 */
class RcyclReceiptDetail extends BaseRcyclReceiptDetail {
    use ThrowErrorTrait;
	use MagicMethodTraits;

    const COLUMN_ALIASES = [
        'rtype'        => 'rcyhdrcptbulk',
        'rnbr'         => 'rcyhdcntrlnbr',
        'linenbr'      => 'rcydtrcptline',
        'itemid'       => 'inititemnbr',
        'uomcode'      => 'intbuomsale',
        'status'       => 'rcydtstatus',
        'qtyrcvd'      => 'rcydtrcptqty',
        'qty'          => 'rcydtrcptqty',
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
