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
        'list_seq'          => 'optnlistseq',
        'file_name'         => 'optnfilename',
        'adv_search'        => 'optnadvsrch',
        'field_type'        => 'optnfieldtype',
        'before_dec'        => 'optndef1b4dec',
        'after_dec'         => 'optndef2aftdec',
        'doc_store_folder'  => 'optndocstorfolder',
        'web_validate'      => 'optnwebvalidate',
        'web_force'         => 'optnwebforce',
		'date'		        => 'dateupdtd',
		'time'		        => 'timeupdtd'
	);
}
