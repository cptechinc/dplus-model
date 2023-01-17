<?php

use Base\ArTermsGroup as BaseArTermsGroup;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_terms_grp' table.
 *
 * Represents a record for the AR Terms Group
 */
class ArTermsGroup extends BaseArTermsGroup {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'id'			   => 'artggrup',
		'code'			   => 'artggrup',
		'description'	   => 'artgdesc',
		'date'			   => 'dateupdtd',
		'time'			   => 'timeupdtd'
	];
}
