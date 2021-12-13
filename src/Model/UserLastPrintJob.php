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
		'labelid'      => 'usrprlabel',
		'label2id'     => 'usrprlabel2',
		'qty'          => 'usrprlabelqty',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd',
		'user'         => 'dplusUser',
	);
}
