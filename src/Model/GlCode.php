<?php

declare(strict_types=1);

use Base\GlCode as BaseGlCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'gl_master' table.
 */
class GlCode extends BaseGlCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'id'           => 'glmaacct',
		'code'         => 'glmaacct',
		'description'  => 'glmadesc',
		'name'         => 'glmadesc',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	];
}
