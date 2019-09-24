<?php

use Base\Quote as BaseQuote;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'quote_header' table.
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
		'contact'         => 'qthdcont',
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
		'whse'            => 'intbwhse',
		'fob'             => 'qthdfob',
		'careof'          => 'qthdcareof',
		'custpo'          => 'qthdcustpo',
		'printformat'     => 'qthdprintformat',
		'deliverto'       => 'qthddeliverydesc'
	);

	const FOB_OPTIONS = array('O', 'D');
	const FOB_OPTIONS_DESC = array(
		'O' => 'origin',
		'D' => 'destination'
	);

	const STATUSES = array('N', 'P');
	const STATUS_DESCRIPTIONS = array(
		'N' => 'new',
		'P' => 'printed'
	);

	public function fob() {
		return self::FOB_OPTIONS_DESC[$this->fob];
	}

	public function status() {
		return self::STATUS_DESCRIPTIONS[$this->status];
	}


	/**
	 * Filter the query on the ArspSalePer1, ArspSalePer2, ArspSalePer3  column
	 *
	 * @param  string $salesperson The value to use as filter.
	 * @return $this|QuoteQuery    The current query, for fluid interface
	 */
	public function filterbySalesPerson($salesperson) {
		$this->condition('sp1', 'Quote.ArspSaleper1 = ? ', $salesperson);
		$this->condition('sp2', 'Quote.ArspSaleper2 = ? ', $salesperson);
		$this->condition('sp3', 'Quote.ArspSaleper3 = ? ', $salesperson);
		$this->where(array('sp1', 'sp2', 'sp3'), Criteria::LOGICAL_OR); 				 // combine 'cond1' and 'cond2' with a logical OR
		return $this;
	 }

	 /**
	 * Returns Notes for the Quote
	 *
	 * @return QuoteNotes[]|ObjectCollection
	 */
	public function get_notes() {
		return QuoteNotesQuery::create()->filterByQuotenumber($this->qthdid)->filterByLine(0)->find();
	}

	/**
	 * Returns the number of Notes for the Quote
	 *
	 * @return int
	 */
	public function count_notes() {
		return QuoteNotesQuery::create()->filterByQuotenumber($this->qthdid)->filterByLine(0)->count();
	}

	/**
	 * Return the number of Items on the Quote
	 * @return int
	 */
	public function count_items() {
		return QuoteDetailQuery::create()->filterByQuoteid($this->qthdid)->count();
	}

	/**
	 * Return QuoteDetails for Quote
	 * @return QuoteDetail[]|ObjectCollection
	 */
	public function get_items() {
		return QuoteDetailQuery::create()->filterByQuoteid($this->qthdid)->find();
	}
}
