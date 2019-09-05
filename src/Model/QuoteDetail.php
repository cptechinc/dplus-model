<?php

use Base\QuoteDetail as BaseQuoteDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'quote_detail' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
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
}
