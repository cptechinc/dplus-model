<?php
use Propel\Runtime\Collection\ObjectCollection as ObjList;
use Base\RcyclReceipt as BaseRcyclReceipt;
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

use RcyclGenerator as Generator;

/**
 * class for representing a row from the 'rcycl_head' table.
 * 
 * KEYS: rnbr
 * FKRELATIONSHIPS: Customer, RcyclGenerator, RcyclReceiptDetails
 * 
 * @property string    $rtype
 * @property int       $rnbr
 * @property int       $generatorid
 * @property string    $custid
 * @property string    $bolnbr
 * @property string    $status
 * @property int       $rcptdate
 * @property string    $enteredby
 * @property int       $entereddate
 * @property int       $enteredtime
 * @property string    $closedby
 * @property int       $closeddate
 * @property int       $closedtime
 * @property int       $date
 * @property int       $time
 * @property ObjList   $items
 * @property Generator $generator
 * @property Customer  $customer
 */
class RcyclReceipt extends BaseRcyclReceipt {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	const COLUMN_ALIASES = [
        'rtype'        => 'rcyhdrcptbulk',
        'rnbr'         => 'rcyhdcntrlnbr',
        'generatorid'  => 'artbgenrid',
		'custid'       => 'arcucustid',
        'bolnbr'       => 'rcyhdbolnbr',
        'status'       => 'rcyhdstatus',
        'rcptdate'     => 'rcyhdrcptdate',
        'enteredby'    => 'rcyhdenteredby',
        'entereddate'  => 'rcyhdentereddate',
        'enteredtime'  => 'rcyhdentereddtime',
        'closedby'     => 'rcyhdclosedby',
        'closeddate'   => 'rcyhdcloseddate',
        'closedtime'   => 'rcyhdclosedtime',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd',

        // Releated object aliases
        'generator'   => 'RcyclGenerator',
        'items'       => 'RcyclReceiptDetails',
    ];
}
