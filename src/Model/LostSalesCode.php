<?php

use Base\LostSalesCode as BaseLostSalesCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_lssl_code' table.
 */
class LostSalesCode extends BaseLostSalesCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'                    => 'oetblsslcode',
		'code'                  => 'oetblsslcode',
		'description'           => 'oetblsslreasondesc',
		'updateinventorywatch'  => 'oetblssliwupdate',
		'email'                 => 'aptbbuyremail',
		'date'                  => 'dateupdtd',
		'time'                  => 'timeupdtd'
	);
}
