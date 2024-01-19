<?php

use Base\QuoteDetail as BaseQuoteDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'quote_detail' table.
 *
 * NOTE: Foreign Key Relationship to Quote
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
		'linenumber'      => 'qtdtline',
		'itemid'          => 'inititemnbr',
		'custitemid'      => 'qtdtcustcrssref',
		'description'     => 'qtdtdesc',
		'description2'    => 'qtdtdesc2',
		'whse'            => 'intbwhse',
		'whseid'          => 'intbwhse',
		'date_requested'  => 'qtdtrqstdate',
		'rqstdate'        => 'qtdtrqstdate',
		'specialorder'    => 'qtdtspecordr',
		'qty'             => 'qtdtqtyord',
		'listprice'       => 'qtdtlistpric',
		'price'           => 'qtdtpric',
		'price_total'     => 'qtdtprictot',
		'total_price'     => 'qtdtprictot',
		'cost'            => 'qtdtcost',
		'totalcost'       => 'qtdtcosttot',
		'tax'             => 'qtdttaxpcttot',
		'tax_code1'       => 'qtdtmstrtaxcode1',
		'tax_code2'       => 'qtdtmstrtaxcode2',
		'unitofmeasure'   => 'intbuomsale',
		'quoted_qty'      => 'qtdtquotunit1',
		'quoted_price'    => 'qtdtquotpric1',
		'quoted_cost'     => 'qtdtquotcost1',
		'quoted_margin'   => 'qtdtquotmkupmarg1',
		'discountpercent' => 'qtdtquotdiscpct1',
		'margin1'         => 'qtdtquotmkupmarg1',
		'orderedqty'      => 'qtdtqtyord',
		'ordereddiscount' => 'qtdtordrdiscpct',
		'vendorid'        => 'apvevendid',
		'vendoritemid'    => 'qtdtvenditemjob',
		'leaddays'        => 'qtdtleaddays',
		'taxcodecd'       => 'artbmtaxcode'
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
