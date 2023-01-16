<?php

use Base\PurchaseOrder as BasePurchaseOrder;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_head' table.
 *
 * NOTE: Foreign Key Relationship to Vendor, VendorShipfrom, Shipvia
 */
class PurchaseOrder extends BasePurchaseOrder {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Purchase Order Number character length
	 * @var int
	 */
	const LENGTH = 8;

	/**
	 * PHP Date Format for dates
	 * @var string
	 */
	const FORMAT_DATE = 'Ymd';

	const STATUS_DESCRIPTIONS = array(
		'N' => 'not printed',
		'C' => 'closed',
		'O' => 'open',
		'P' => 'printed'
	);

	const STATUS_OPEN   = 'O';
	const STATUS_CLOSED = 'C';

	const FREIGHTPAIDBY_DESCRIPTIONS = array(
		'C' => 'collect',
		'P' => 'prepaid',
		'A' => 'prepaid + add',
		'T' => 'third party'
	);

	const FOB_DESCRIPTIONS = array(
		'D' => 'destination',
		'O' => 'origin',
		'P' => 'prepaid + add'
	);

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ponbr'              => 'pohdnbr',
		'status'             => 'pohdstat',
		'poref'              => 'pohdref',
		'reference'          => 'pohdref',
		'vendorID'           => 'apvevendid',
		'vendorid'           => 'apvevendid',
		'shipto_name'        => 'pohdtoname',
		'shipto_address'     => 'pohdtoadr1',
		'shipto_address2'    => 'pohdtoadr2',
		'shipto_address3'    => 'pohdtoadr3',
		'shipto_country'     => 'pohdtoctry',
		'shipto_city'        => 'pohdtocity',
		'shipto_state'       => 'pohdtostat',
		'shipto_zip'         => 'pohdtozipcode',
		'contact'            => 'pohdcont',
		'email'              => 'pohdemailaddr',
		'date_ordered'       => 'pohdordrdate',
		'date_expected'      => 'pohdexptdate',
		'date_shipped'       => 'pohdshipdate',
		'date_cancel'        => 'pohdcancdate',
		'date_acknowledged'  => 'pohdackdate',
		'shipvia'            => 'artbsviacode',
		'phone'              => 'pohdtelenbr',
		'phone_intl'         => 'pohdteleintl',
		'phone_extension'    => 'pohdteleext',
		'fax'                => 'pohdfaxnbr',
		'fax_intl'           => 'pohdfaxintl',
		'shipfromid'         => 'apfmshipid',
		'payto_name'      => 'pohdptname',
		'payto_address'   => 'pohdptadr1',
		'payto_address2'  => 'pohdptadr2',
		'payto_address3'  => 'pohdptadr3',
		'payto_country'   => 'pohdptctry',
		'payto_city'      => 'pohdptcity',
		'payto_state'     => 'pohdptstat',
		'payto_zip'       => 'pohdptzipcode',
		'fob'                => 'pohdfob',
		'tax_exempt'         => 'pohdtaxexem',
		'releasenbr'         => 'pohdreleasenbr',
		'freightpaidby'      => 'pohdcolppd',
		'termscode'          => 'aptmtermcode',
		'futurebuy'          => 'pohdfuturebuy',
		'landedcost'         => 'pohdlandcost',
		'exchange_country'   => 'pohdexchctry',
		'exchange_rate'      => 'pohdexchrate'
	);

	/**
	 * Adds Leading Zeroes to Sales Order Number
	 * @param  string $ordn Sales Order Number ex.    4290100
	 * @return string       Sales Order Number ex. 0004290100
	 */
	public static function get_paddedponumber($ordn) {
		 return str_pad($ordn , self::LENGTH , "0", STR_PAD_LEFT);
	}

	/**
	 * Returns Description for the status
	 * @return string
	 */
	public function status() {
		return self::STATUS_DESCRIPTIONS[$this->status];
	}

	/**
	 * Return Freight Paid By Description
	 * @return string
	 */
	public function freightpaidby() {
		return self::FREIGHTPAIDBY_DESCRIPTIONS[$this->freightpaidby];
	}

	/**
	 * Return FOB descriptions
	 * @return string
	 */
	public function fob() {
		return self::FOB_DESCRIPTIONS[$this->fob];
	}

	/**
	 * Return termcode descriptions
	 * @return string
	 */
	public function termscode() {
		return ApTermsCodeQuery::create()->findOneByCode($this->termscode)->description;
	}

	/**
	 * Return Options for Freight Paid By
	 * @return array
	 */
	public function get_options_freightpaidby() {
		return self::FREIGHTPAIDBY_DESCRIPTIONS;
	}

	/**
	 * Return Options for FOB
	 * @return array
	 */
	public function get_options_fob() {
		return self::FOB_DESCRIPTIONS;
	}

	/**
	 * Returns if PO is in a closed status
	 * @return bool
	 */
	public function is_closed() {
		return $this->status == self::STATUS_CLOSED;
	}

	/**
	 * Return PurchaseOrderDetail objects for this PO Number
	 *
	 * @return PurchaseOrderDetail[]|ObjectCollection
	 */
	public function get_items() {
		return PurchaseOrderDetailQuery::create()->findByPonbr($this->pohdnbr);
	}

	/**
	 * Return PurchaseOrderDetailReceiving objects for this PO Number
	 *
	 * @return PurchaseOrderDetailReceiving[]|ObjectCollection
	 */
	public function get_receivingitems() {
		return PurchaseOrderDetailReceivingQuery::create()->filterByPonbr("%$this->pohdnbr", ' LIKE ')->find();
	}

	/**
	 * Return the number of PurchaseOrderDetailReceiving records
	 *
	 * @return int
	 */
	public function count_receivingitems() {
		return PurchaseOrderDetailReceivingQuery::create()->filterByPonbr("%$this->pohdnbr", ' LIKE ')->count();
	}

	/**
	 * Return PurchaseOrderDetailReceiving objects for this PO Number & Line Number
	 *
	 * @param  int                          $linenbr Line Number
	 * @return PurchaseOrderDetailReceiving
	 */
	public function get_receivingitem(int $linenbr) {
		return PurchaseOrderDetailReceivingQuery::create()->filterByPonbr($this->pohdnbr)->findOneByLinenbr($linenbr);
	}

	/**
	 * Return Vendor Name
	 *
	 * @return string
	 */
	public function get_vendorname() {
		return VendorQuery::create()->select(Vendor::get_aliasproperty('name'))->findOneByVendorid($this->apvevendid);
	}

	/**
	 *Returns The total for the Purchase Order based off the detail lines
	 *
	 * @return float
	 */
	public function get_total() {
		$q = PurchaseOrderDetailQuery::create()->filterByPonbr($this->pohdnbr);
		$q->withColumn('sum(podtcosttot)', 'totalcost');
		$q->select('totalcost');
		return $q->findOne();
	}

	/**
	 * Return Notes for the Purchase Order Notes
	 * @return PurchaseOrderNote[]|ObjectCollection
	 */
	public function get_notes() {
		$q = PurchaseOrderNoteQuery::create();
		$q->filterByPonbr($this->pohdnbr);
		$q->filterHeader();
		return $q->find();
	}

	/**
	 * Return Notes for the Purchase Order Notes
	 * @return PurchaseOrderNote[]|ObjectCollection
	 */
	public function count_notes() {
		$q = PurchaseOrderNoteQuery::create();
		$q->filterByPonbr($this->pohdnbr);
		$q->filterHeader();
		return $q->count();
	}
}
