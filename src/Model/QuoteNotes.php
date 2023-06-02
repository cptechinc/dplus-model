<?php

use Base\QuoteNotes as BaseQuoteNotes;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

 /**
 * Class for representing a row from the 'notes_qt_head_det' table.
 */
class QuoteNotes extends BaseQuoteNotes {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'QUOT';
	const DESCRIPTION = 'Quote Header and Detail Notes';
	const FORM_TRUE = 'Y';

	const KEY2_LINENBR_SIZE = 4;

	const COLUMN_ALIASES = array(
		'qnbr'            => 'qthdid',
		'quotenbr'        => 'qthdid',
		'quoteid'         => 'qthdid',
		'quoteID'         => 'qthdid',
		'id'              => 'qthdid',
		'quotenumber'     => 'qthdid',
		'linenbr'         => 'qtdtline',
		'line'            => 'qtdtline',
		'quote'           => 'qnquotquote',
		'pickticket'      => 'qnquotpickticket',
		'packticket'      => 'qnquotpackticket',
		'invoice'         => 'qnquotinvoice',
		'acknowledgement' => 'qnquotacknow',
		'sequence'        => 'qnseq',
		'note'            => 'qnnote',
		'form'            => 'qnform',
		'type'            => 'qntype',
		'key2'            => 'qnkey2',
		'description'     => 'qntypedesc',
		'date'            => 'dateupdtd',
		'time'            => 'timeupdtd',
	);

	/**
	 * Returns a generated Key2
	 * NOTE: Key2 = Quote Number padded followed by four digit linenbr
	 *
	 * @return string
	 */
	public function generateKey2() {
		$key2_qnbr = str_pad($this->quotenbr, 8, ' ', STR_PAD_RIGHT);
		$key2_linenbr = str_pad($this->line , self::KEY2_LINENBR_SIZE , "0", STR_PAD_LEFT);
		$key2 = $key2_qnbr.$key2_linenbr;
		$this->setKey2($key2);
	}
}
