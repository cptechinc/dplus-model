<?php

use Base\UserLastPrintJob as BaseUserLastPrintJob;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'user_printer' table.
 */
class UserLastPrintJob extends BaseUserLastPrintJob {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'userid'       => 'usrcid',
		'functionid'   => 'usprfunction',
		'printerid'    => 'usprprinter',
		'labelid'      => 'usprlabel',
		'label2id'     => 'usprlabel2',
		'formatid'     => 'usprlabel',
		'qty'          => 'usprlabelqty',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd',
		'user'         => 'dplusUser',
	);
}
