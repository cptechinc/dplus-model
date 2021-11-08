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

	const LINES = 4;
	const COL_BASETEXT = 'gltbtext';

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

	/**
	 * Return Text Line
	 * @param  int $i
	 * @return string
	 */
	public function text($i = 1) {
		if ($i > self::LINES) {
			return '';
		}
		$col = self::COL_BASETEXT.$i;
		return $this->$col;
	}
}
