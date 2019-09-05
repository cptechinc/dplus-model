<?php

use Base\Quote as BaseQuote;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'quote_header' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Quote extends BaseQuote {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const COLUMN_ALIASES = array(
		'quotenbr'        => 'qthdid',
		'quoteid'         => 'qthdid',
		'quoteID'         => 'qthdid',
		'id'              => 'qthdid',
		'quotenumber'     => 'qthdid',
		'custid'          => 'arcucustid',
		'shiptoid'        => 'arstshipid',
		'status'          => 'qthdstat',
		'email'           => 'qthdemailaddr',
		'billto_name'     => 'qthdbtname',
		'billto_address1' => 'qthdbtadr1',
		'billto_address2' => 'qthdbtadr2',
		'billto_address3' => 'qthdbtadr3',
		'billto_country'  => 'qthdbtctry',
		'billto_city'     => 'qthdbtcity',
		'billto_state'    => 'qthdbtstat',
		'billto_zip'      => 'qthdbtzipcode',
		'shipto_name'     => 'qthdstname',
		'shipto_address1' => 'qthdstadr1',
		'shipto_address2' => 'qthdstadr2',
		'shipto_address3' => 'qthdstadr3',
		'shipto_country'  => 'qthdstctry',
		'shipto_city'     => 'qthdstcity',
		'shipto_state'    => 'qthdststat',
		'shipto_zip'      => 'qthdstzipcode',
		'phone_intl'      => 'qthdteleintl',
		'phone'           => 'qthdtelenbr',
		'phone_extension' => 'qthdteleext',
		'fax_intl'        => 'qthdfaxintl',
		'fax'             => 'qthdfaxnbr',
		'date_quoted'     => 'qthdquotdate',
		'date_review'     => 'qthdrevdate',
		'date_expires'    => 'qthdexpdate',
		'pricecode'       => 'artbpriccode',
		'taxcode'         => 'artbmtaxcode',
		'termscode'       => 'artmtermcd',
		'shipvia'         => 'artbshipvia',
		'salesperson_1'   => 'arspsaleper1',
		'salesperson_2'   => 'arspsaleper2',
		'salesperson_3'   => 'arspsaleper3',
		'salesperson_1'   => 'arspsaleper1',
		'subtotal_nontax' => 'qthdnontaxsub',
		'subtotal_tax'    => 'qthdtaxsub',
		'total_total'     => 'qthdordrtot',
		'total_tax'       => 'qthdtaxtot',
		'total_freight'   => 'qthdfrttot',
		'total_misc'      => 'qthdmisctot',
		'total_cost'      => 'qthdcosttot',
		'entered_by'      => 'qthdenteredby',
		'entered_date'    => 'qthdentereddate',
		'entered_time'    => 'qthdenteredtime',
	);
}
