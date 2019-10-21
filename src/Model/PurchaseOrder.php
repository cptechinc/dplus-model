<?php

use Base\PurchaseOrder as BasePurchaseOrder;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_head' table.
 *
 */
class PurchaseOrder extends BasePurchaseOrder {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ponbr'              => 'pohdnbr',
		'status'             => 'pohdstat',
		'poref'              => 'pohdref',
		'vendorID'           => 'apvevendid',
		'vendorid'           => 'apvevendid',
		'shipto_name'        => 'pohdtoname',
		'shipto_address'     => 'pohdtoadr1',
		'shipto_address2'    => 'pohdtoadr2',
		'shipto_address3'    => 'pohdtoadr3',
		'shipto_country'     => 'pohdtoctry',
		'shipto_city'        => 'pohdtocity',
		'shipto_state'       => 'pohdtostate',
		'shipto_zip'         => 'pohdtozip',
		'contact'            => 'pohdcont',
		'email'              => 'pohdemailaddr',
		'date_ordered'       => 'pohdordrdate',
		'shipvia'            => 'artbsviacode',
		'phone'              => 'pohdtelenbr',
		'phone_intl'         => 'pohdteleintl',
		'phone_extension'    => 'pohdteleext',
		'fax'                => 'pohdfaxnbr',
		'fax_intl'           => 'pohdfaxintl',
		'shipfrom_name'      => 'pohdptname',
		'shipfrom_address'   => 'pohdptadr1',
		'shipfrom_address2'  => 'pohdptadr2',
		'shipfrom_address3'  => 'pohdptadr3',
		'shipfrom_country'   => 'pohdptctry',
		'shipfrom_city'      => 'pohdptcity',
		'shipfrom_state'     => 'pohdptstat',
		'shipfrom_zip'       => 'pohdptzipcode',
	);

	const LENGTH = 8;

	/**
	 * Adds Leading Zeroes to Sales Order Number
	 *
	 * @param  string $ordn Sales Order Number ex.    4290100
	 * @return string       Sales Order Number ex. 0004290100
	 */
	public static function get_paddedponumber($ordn) {
		 return str_pad($ordn , self::LENGTH , "0", STR_PAD_LEFT);
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
		return PurchaseOrderDetailReceivingQuery::create()->findByPonbr($this->pohdnbr);
	}

	/**
	 * Return the number of PurchaseOrderDetailReceiving records
	 *
	 * @return int
	 */
	public function count_receivingitems() {
		return PurchaseOrderDetailReceivingQuery::create()->filterByPonbr($this->pohdnbr)->count();
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
}
