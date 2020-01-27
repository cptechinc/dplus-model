<?php

use Base\ConfigAr as BaseConfigAr;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_config' table.
 * NOTE: There will only be one record in the database for the company
 *
 */
class ConfigAr extends BaseConfigAr {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Web Program Code
	 * Y = Yes
	 * N = No
	 * @var string
	 */
	protected $artbconfuseweb;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'             => 'artbconfkey',
		'gl_report_type' => 'artbconfinvcustgl',
		'web_group'      => 'artbconfuseweb',
		'columns_notes_statement' => 'ArtbConfStmtCols',
		'columns_notes_invoice'   => 'ArtbConfInvCols',
	);

	const GL_REPORT_TYPES_DESCRIPTIONS = array(
		'I' => 'inventory',
		'C' => 'customer'
	);

	/**
	 * Returns the Description for the GL Report Type
	 *
	 * @return string
	 */
	public function gl_report_type() {
		return self::GL_REPORT_TYPES_DESCRIPTIONS[strtoupper($this->gl_report_type)];
	}

	/**
	 * Returns if the Web Program is Yes
	 * @return bool
	 */
	public function is_web_group() {
		return strtoupper($this->web_group) == 'Y';
	}
}
