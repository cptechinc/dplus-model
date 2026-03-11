<?php

use Base\RcyclReceipt as BaseRcyclReceipt;
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * class for representing a row from the 'rcycl_head' table.
 * 
 * KEYS: rnbr
 * FKRELATIONSHIPS: Customer, RcyclGenerator, RcyclReceiptDetails
 */
class RcyclReceipt extends BaseRcyclReceipt {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	const COLUMN_ALIASES = [
        'rnbr'         => 'rcyhdrcptnbr',
        'generatorid'  => 'artbgenrid',
		'custid'       => 'artcucustid',
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
