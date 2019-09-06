<?php

use Base\QuoteDetail as BaseQuoteDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'quote_detail' table.
 */
class QuoteDetail extends BaseQuoteDetail {
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
		'itemid'          => 'inititemnbr',
		'description'     => 'qtdtdesc',
		'description2'    => 'qtdtdesc2',
		'whse'            => 'intbwhse',
		'date_requested'  => 'qtdtrqstdate',
		'specialorder'    => 'qtdtspecordr',
		'qty'             => 'qtdtqtyord',
		'listprice'       => 'qtdtlistpric',
		'price'           => 'qtdtpric',
		'price_total'     => 'qtdtprictot',
		'cost'            => 'qtdtcost',
		'tax'             => 'qtdttaxpcttot',
		'tax_code1'       => 'qtdtmstrtaxcode1',
		'tax_code2'       => 'qtdtmstrtaxcode2',
		'unitofmeasure'   => 'intbuomsale',
		'quoted_qty'      => 'qtdtquotunit1',
		'quoted_price'    => 'qtdtquotpric1',
		'quoted_cost'     => 'qtdtquotcost1',
		'quoted_margin'   => 'qtdtquotmkupmarg1',
	);

	/**
	 * Returns Notes for the QuoteDetail
	 *
	 * @return QuoteNotes[]|ObjectCollection
	 */
	public function get_notes() {
		return QuoteNotesQuery::create()->filterByQuotenumber($this->qthdid)->filterByLine($this->qtdtline)->find();
	}

	/**
	 * Returns the number of Notes for the QuoteDetail
	 *
	 * @return int
	 */
	public function count_notes() {
		return QuoteNotesQuery::create()->filterByQuotenumber($this->qthdid)->filterByLine($this->qtdtline)->count();
	}
}
