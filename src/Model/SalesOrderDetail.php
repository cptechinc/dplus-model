<?php

use Base\SalesOrderDetail as BaseSalesOrderDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_detail' table.
 *
 * NOTE: Foreign Key Relationship to SalesOrder
 */
class SalesOrderDetail extends BaseSalesOrderDetail {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const PONBR_BLANK = '00000000';

	const OPTIONS_SPECIALORDER = [
		'N' => 'normal',
		'S' => 'special order',
		'D' => 'Drop Ship'
	];

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 *
	 * NOTE: @ Provalley use qty_ordered for weight, qty_cases for boxes
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'   => 'oehdnbr',
		'qty_ordered'   => 'oedtqtyord',
		'price'         => 'oedtpric',
		'total_price'   => 'oedtprictot',
		'itemid'        => 'inititemnbr',
		'desc1'         => 'oedtdesc',
		'description'   => 'oedtdesc',
		'desc2'         => 'oedtdesc2',
		'description2'  => 'oedtdesc',
		'line'          => 'oedtline',
		'linenbr'       => 'oedtline',
		'vendorpo'      => 'oedtponbr',
		'ponbr'         => 'oedtponbr',
		'poref'         => 'oedtporef',
		'qty_cases'     => 'oedtcntrqty',
		'item'          => 'item',
		'weight_total'  => 'oedtwghttot',
		'specialorder'  => 'oedtspecordr',
		'rqstdate'      => 'oedtrqstdate',
		'whseid'        => 'intbwhse',
		'nsvendorid'    => 'oedtnsvendId',
		'nsvendoritemid' => 'oedtvenditemjob',
		'nsitemgroupid'  => 'oedtnsitemgrup',
		'kit'            => 'oedtkitflag'
	);

	/**
	* @var        PurchaseOrder
	*/
	protected $aPurchaseOrder;

	/**
	* @var        PurchaseOrderDetail
	*/
	protected $aPurchaseOrderDetail;

	/**
	 * Return Special Order Description
	 * @return string
	 */
	public function specialorder() {
		return self::OPTIONS_SPECIALORDER[$this->specialorder];
	}

	/**
	 * Return if Item is Kit
	 * @return bool
	 */
	public function is_kit() {
		return $this->kit == 'Y';
	}

	/**
	 * Returns if this Order Line has Notes
	 * @return bool
	 */
	public function has_notes() {
		$q = SalesOrderNotesQuery::create();
		$q->filterByOrdernumber($this->oehdnbr)->filterByLine($this->oedtline);
		return boolval($q->count());
	}

	/**
	 * Return ItemMasterItem associated with Order Item
	 * @return ItemMasterItem
	 */
	public function getItem() {
		return ItemMasterItemQuery::create()->findOneByitemid($this->itemid);
	}

	/**
	 * Return PurchaseOrder Associated with this SalesOrderDetail
	 * @return PurchaseOrder
	 */
	public function getPurchaseOrder() {
		if ($this->aPurchaseOrder instanceof PurchaseOrder) {
			return $this->aPurchaseOrder;
		}
		if (intval($this->ponbr) == 0) {
			$this->aPurchaseOrder = new PurchaseOrder();
			return $this->aPurchaseOrder;
		}
		$this->aPurchaseOrder = PurchaseOrderQuery::create()->findOneByPonbr($this->ponbr);
		return $this->aPurchaseOrder;
	}
}
