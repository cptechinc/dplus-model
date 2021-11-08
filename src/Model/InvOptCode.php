<?php

use Base\InvOptCode as BaseInvOptCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_opt_code' table.
 */
class InvOptCode extends BaseInvOptCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'       => 'inititemnbr',
		'sysop'        => 'inoptcode',      // System Optional Code
		'sysopdesc'    => 'inoptcodedesc',      // Optional Code Description
		'code'         => 'inoptvalue',     // Code Value
		'description'  => 'inoptvaluedesc', // Value Description
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd',
		'itm'          => 'itmItem',
	);

	/**
	 * Return Item that that this Optional Code is set for
	 * @return ItemMasterItem
	 */
	public function getItmItem() {
		return ItemMasterItemQuery::create()->findOneByItemid($this->itemid);
	}
}
