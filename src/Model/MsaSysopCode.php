<?php

use Base\MsaSysopCode as BaseMsaSysopCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'sys_opt_options' table.
 */
class MsaSysopCode extends BaseMsaSysopCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 8;
	const YN_TRUE = 'Y';

	const SYSTEM_IN = 'IN';
	const SYSTEM_SO = 'SO';
	const SYSTEM_AP = 'AP';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'system'            => 'optnsystem',
		'id'                => 'optncode',
		'code'              => 'optncode',
		'description'       => 'optndesc',
		'validate'          => 'optnvalidate',
		'force'             => 'optnforce',
		'note_code'         => 'optnnotecode',
		'notecode'          => 'optnnotecode',
		'list_seq'          => 'optnlistseq',
		'sequence'          => 'optnlistseq',
		'file_name'         => 'optnfilename',
		'filename'          => 'optnfilename',
		'adv_search'        => 'optnadvsrch',
		'advsearch'         => 'optnadvsrch',
		'field_type'        => 'optnfieldtype',
		'fieldtype'         => 'optnfieldtype',
		'before_dec'        => 'optndef1b4dec',
		'beforedecimal'     => 'optndef1b4dec',
		'after_dec'         => 'optndef2aftdec',
		'afterdecimal'      => 'optndef2aftdec',
		'doc_store_folder'  => 'optndocstorfolder',
		'docfolder'         => 'optndocstorfolder',
		'web_validate'      => 'optnwebvalidate',
		'webvalidate'       => 'optnwebvalidate',
		'web_force'         => 'optnwebforce',
		'webforce'          => 'optnwebforce',
		'date'		        => 'dateupdtd',
		'time'		        => 'timeupdtd'
	);

	/**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}

	/**
	 * Return if Code Needs to be Validated
	 * @return bool
	 */
	public function validate() {
		return strtoupper($this->validate) == self::YN_TRUE;
	}

	/**
	 * Return if Code Needs to be forced
	 * @return bool
	 */
	public function force() {
		return strtoupper($this->force) == self::YN_TRUE;
	}

	/**
	 * Return if Code is a Note
	 * @return bool
	 */
	public function isNote() {
		return empty($this->notecode) === false;
	}

	/**
	 * Return if Code is for Filenames
	 * @return bool
	 */
	public function isFilename() {
		return strtoupper($this->filename) == self::YN_TRUE;
	}

	/**
	 * Return if Code Type is Numeric
	 * @return bool
	 */
	public function isNumeric() {
		return strtoupper($this->fieldtype) == 'N';
	}

	/**
	 * Return if Code Type is Character
	 * @return bool
	 */
	public function isCharacter() {
		return strtoupper($this->fieldtype) == 'C';
	}
}
