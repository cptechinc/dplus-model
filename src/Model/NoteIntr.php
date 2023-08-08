<?php
// Dplus Models
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base
use Base\NoteIntr as BaseNoteIntr;

/**
 * Class for representing a row from the 'notes_tran_head_det' table.
 * REPRESENTS: Transfer Note line 
 */
class NoteIntr extends BaseNoteIntr {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'INTR';
	const DESC = 'Transfer Header/Detail Notes';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'        => 'ponttype',
		'description' => 'ponttypedesc',
		'ordn'        => 'inhdnbr',
		'line'        => 'indtline',
		'linenbr'     => 'indtline',
		'sequence'    => 'qnseq',
		'note'        => 'qnnote',
		'key2'        => 'qnkey2',
		'form'        => 'qnform',
		'date'        => 'dateupdtd',
		'time'        => 'timeupdtd'
	);
}
