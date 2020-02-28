<?php

use Base\SalesHistoryNotes as BaseSalesHistoryNotes;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_so_head_det' table.
 */
class SalesHistoryNotes extends BaseSalesHistoryNotes {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'SHST';
	const DESCRIPTION = 'Sale History Header and Detail Notes';
	const FORM_TRUE = 'Y';

	const KEY2_LINENBR_SIZE = 4;

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
		'year'             => 'shntyear',
		'form'             => 'shntform',
		'type'             => 'shnttype',
		'key2'             => 'shntkey2',
		'description'      => 'shnttypedesc',
		'date'             => 'dateupdtd',
		'time'             => 'timeupdtd',
	);

	/**
	 * Returns a generated Key2
	 * NOTE: Key2 = SalesOrder Number followed by four digit linenbr
	 *
	 * @return string
	 */
	public function generateKey2() {
		$key2_linenbr = str_pad($this->line , self::KEY2_LINENBR_SIZE , "0", STR_PAD_LEFT);
		$key2 = $this->ordernumber.$key2_linenbr;
		$this->setKey2($key2);
	}
}
