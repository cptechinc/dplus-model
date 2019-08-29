<?php

use Base\SalesHistoryNotes as BaseSalesHistoryNotes;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'notes_so_head_det' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class SalesHistoryNotes extends BaseSalesHistoryNotes {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'      => 'oehhnbr',
		'line'             => 'oedhline',
		'pickticket'       => 'shntpickticket',
		'packticket'       => 'shntpackticket',
		'invoice'          => 'shntinvoice',
		'acknowledgement'  => 'shntacknow',
		'sequence'         => 'shntseq',
		'note'             => 'shntnote',
	);
}
