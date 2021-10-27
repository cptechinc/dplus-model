<?php

use Base\GlTextCode as BaseGlTextCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'gl_text_code' table.
 */
class GlTextCode extends BaseGlTextCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'gltbtextcode',
		'code'         => 'gltbtextcode',
		'text1'        => 'gltbtext1',
		'text2'        => 'gltbtext2',
		'text3'        => 'gltbtext3',
		'text4'        => 'gltbtext4',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd'
	);

}
