<?php
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Base\RcyclReceiptLot as BaseRcyclReceiptLot;
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

use ItemMasterItem as ItmItem;
use RcyclReceiptDetail as RcptItem;
use RcyclReceipt as Receipt;

/**
 * class for representing a row from the 'rcycl_lot_det' table.
 * 
 * KEYS: rnbr, linenbr, lotserial
 * FKRELATIONSHIPS: RcyclReceiptDetail, ItemMasterItem, RcyclReceipt
 * 
 * @property string   $rtype
 * @property int      $rnbr
 * @property int      $linenbr
 * @property string   $itemid
 * @property string   $lotserial
 * @property string   $status
 * @property float    $qty
 * @property float    $tareweight
 * @property int      $lotdate
 * @property string   $closedby
 * @property int      $closeddate
 * @property int      $closedtime
 * @property int      $date
 * @property int      $time
 * @property ItmItem  $itmitem
 * @property RcptItem $rcptitem
 * @property Receipt  $receipt
 */
class RcyclReceiptLot extends BaseRcyclReceiptLot {
    use ThrowErrorTrait;
	use MagicMethodTraits;

    const COLUMN_ALIASES = [
        'rtype'        => 'rcyhdrcptbulk',
        'rnbr'         => 'rcyhdcntrlnbr',
        'whseid'       => 'rcysdwhse',
        'binid'        => 'rcysdbin',
        'linenbr'      => 'rcydtrcptline',
        'lotserial'    => 'rcysdlotnbr',
        'itemid'       => 'inititemnbr',
        'qty'          => 'rcysdlotqty',
        'tareweight'   => 'rcysdtarewght',
        'lotdate'      => 'rcysdlotdate',
        'status'       => 'rcysdstatus',
        'closedby'     => 'rcysdclosedby',
        'closeddate'   => 'rcysdcloseddate',
        'closedtime'   => 'rcysdclosedtime',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd',

        // Related object aliases
        'itmitem'   => 'ItemMasterItem',
        'rcptitem'  => 'RcyclReceiptDetail',
        'receipt'   => 'RcyclReceipt'
    ];

    /**
     * Get the associated RcyclReceiptDetail object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return RcyclReceiptDetail The associated RcyclReceiptDetail object.
     * @throws PropelException
     */
    public function getRcyclReceiptDetail(ConnectionInterface $con = null)
    {
        if ($this->aRcyclReceiptDetail === null && ($this->rcyhdcntrlnbr != 0 && ($this->rcyhdrcptbulk !== "" && $this->rcyhdrcptbulk !== null) && ($this->inititemnbr !== "" && $this->inititemnbr !== null))) {
            $this->aRcyclReceiptDetail = RcyclReceiptDetailQuery::create()->findPk(array($this->rcyhdrcptbulk, $this->rcyhdcntrlnbr, $this->rcydtrcptline, $this->inititemnbr), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRcyclReceiptDetail->addRcyclReceiptLots($this);
             */
        }
        return $this->aRcyclReceiptDetail;
    }
}
