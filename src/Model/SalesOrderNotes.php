<?php

use Base\SalesOrderNotes as BaseSalesOrderNotes;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_so_head_det' table.
 */
class SalesOrderNotes extends BaseSalesOrderNotes {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'SORD';
	const DESCRIPTION = 'Sales Order Header and Detail Notes';
	const FORM_TRUE = 'Y';

	const KEY2_LINENBR_SIZE = 4;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'      => 'oehdnbr',
		'line'             => 'oedtline',
		'pickticket'       => 'qnordrpickticket',
		'packticket'       => 'qnordrpackticket',
		'invoice'          => 'qnordrinvoice',
		'acknowledgement'  => 'qnordracknow',
		'sequence'         => 'qnseq',
		'note'             => 'qnnote',
		'form'             => 'qnform',
		'type'             => 'qntype',
		'key2'             => 'qnkey2',
		'description'      => 'qntypedesc',
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
