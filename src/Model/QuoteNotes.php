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

	const COLUMN_ALIASES = array(
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
	);
}
