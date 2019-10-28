<?php

use Base\VendorShipfrom as BaseVendorShipfrom;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_ship_from' table.
 *
 */
class VendorShipfrom extends BaseVendorShipfrom {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'vendorid'    => 'apvevendid',
		'vendorID'    => 'apvevendid',
		'shipfromid'  => 'apfmshipid',
		'id'          => 'apfmshipid',
		'name'        => 'apfmname',
		'address'     => 'apfmadr1',
		'address2'    => 'apfmadr2',
		'address3'    => 'apfmadr3',
		'country'     => 'apfmctry',
		'city'        => 'apfmcity',
		'state'       => 'apfmstat',
		'zip'         => 'apfmzipcode',
		'contact'     => 'apfmcont1',
		'contact2'    => 'apfmcont2',
		'shipvia'     => 'artbsviacode',
		'gl_account'  => 'apfmglacct',
		'ytd_purchases_amt'    => 'apfmpurytd',
		'ytd_purchases_count'  => 'apfmpoytd'
	);

	/**
	 * Returns the Amount Left the Current Purchase Orders
	 * NOTE: Checks for detail status is not closed and that It is not released
	 * @return float
	 */
	public function get_purchaseorders_amt() {
		$ponbrs = $this->get_ponumbers();
		$q = PurchaseOrderDetailQuery::create();
		$sql = "SELECT (PodtQtyOrd - ifnull(PordQtyRec, 0)) * PodtCost as amt
				FROM data3.po_detail
				LEFT JOIN data3.po_receipt_det
				ON data3.po_receipt_det.PohdNbr = data3.po_detail.PohdNbr AND data3.po_receipt_det.PodtLine = data3.po_detail.PodtLine
				WHERE data3.po_detail.PohdNbr IN (:ponbrs)
				AND PodtStat != 'C' AND PodtRel != 'N'";
		$params = array(':ponbrs' => implode(',', $ponbrs));
		$results = $q->execute_query($sql, $params);
		return $results->fetchColumn();
	}

	/**
	 * Returns all the PO Numbers associated with this Vendor and Shipfrom
	 *
	 * @return array
	 */
	public function get_ponumbers() {
		$q = PurchaseOrderQuery::create();
		$q->select(PurchaseOrder::get_aliasproperty('ponbr'));
		$q->filterByVendorid($this->vendorID);
		$q->filterByShipfromid($this->shipfromid);
		return $q->find()->toArray();
	}
}
