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

	/**
	 * @var Customer
	*/
	protected $aCustomer;

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
		'date_expire'     => 'qthdexpdate',
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
		'whseid'          => 'intbwhse',
		'fob'             => 'qthdfob',
		'careof'          => 'qthdcareof',
		'custpo'          => 'qthdcustpo',
		'printformat'     => 'qthdprintformat',
		'deliverto'       => 'qthddeliverydesc',
		'items'           => 'quoteDetails'
	);
	
	const LENGTH = 8;
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

/* =============================================================
	Getters
============================================================= */

	public function fob() {
		return self::FOB_OPTIONS_DESC[$this->fob];
	}

	public function status() {
		return self::STATUS_DESCRIPTIONS[$this->status];
	}

	/**
	 * Return Customer Associated with this Quote
	 * @return Customer
	 */
	public function getCustomer() {
		if ($this->aCustomer instanceof Customer) {
			return $this->aCustomer;
		}
		if ($this->custid == '') {
			$this->aCustomer = new Customer();
			return $this->aCustomer;
		}
		$this->aCustomer = CustomerQuery::create()->findOneByCustid($this->custid);
		return $this->aCustomer;
	}

	 /**
	 * Returns Notes for the Quote
	 * @return QuoteNotes[]|ObjectCollection
	 */
	public function get_notes() {
		return QuoteNotesQuery::create()->filterByQuotenumber($this->qthdid)->filterByLine(0)->find();
	}

	/**
	 * Returns the number of Notes for the Quote
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
