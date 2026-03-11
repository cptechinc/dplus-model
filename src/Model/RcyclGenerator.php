<?php

use Base\RcyclGenerator as BaseRcyclGenerator;
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * class for representing a row from the 'rcycl_generator' table.
 * 
 * KEYS: id
 */
class RcyclGenerator extends BaseRcyclGenerator {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	const COLUMN_ALIASES = [
        'id'           => 'artbgenrid',
		'name'         => 'artbgenrname',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd'
    ];
}