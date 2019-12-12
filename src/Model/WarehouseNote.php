<?php

use Base\WarehouseNote as BaseWarehouseNote;

use Propel\Runtime\ActiveQuery\Criteria;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'notes_whse_invc_stmt' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class WarehouseNote extends BaseWarehouseNote {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE_INVOICE  = 'IWHS';
	const TYPE_STATEMENT = 'SWHS';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'      => 'qntype',
		'desc'      => 'qntypedesc',
		'sequence'  => 'qnseq',
		'whse'      => 'intbwhse',
		'whseID'    => 'intbwhse',
		'whseid'    => 'intbwhse',
		'note'      => 'qnnote',
		'key2'      => 'qnkey',
	);

	/**
	 * Returns the Note Lines Greater than 1
	 *
	 * @return WarehouseNote[]
	 */
	public function get_othernotelines() {
		$q = WarehouseNoteQuery::create();
		$q->filterByWhse($this->whse);
		$q->filterByType($this->type);
		$q->filterBySequence(1, Criteria::GREATER_THAN);
		return $q->find();
	}
}
