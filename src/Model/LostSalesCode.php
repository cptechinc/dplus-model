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

	const MAX_LENGTH_CODE = 4;

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

	/**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}
}
