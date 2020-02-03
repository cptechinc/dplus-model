<?php

use Base\ItemXrefUpc as BaseItemXrefUpc;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

use Propel\Runtime\ActiveQuery\Criteria;

/**
 * Class for representing a row from the 'upc_item_xref' table.
 *
 * NOTE: Foreign Key Relationship to ItemMasterItem
 */
class ItemXrefUpc extends BaseItemXrefUpc {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const PRIMARY_TRUE  = 'Y';
	const PRIMARY_FALSE = 'N';
	const MASTERCASE_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'upc'         => 'upcxcode',
		'code'        => 'upcxcode',
		'itemid'      => 'inititemnbr',
		'itemID'      => 'inititemnbr',
		'primary'     => 'upcxprim',
		'qty'         => 'upcxqtyeachesperupc',
		'uom'         => 'upcxuom',
		'mastercase'  => 'upcxmstrcase',
		'needslabel'  => 'upcxlabel',
		'date'        => 'dateupdtd',
		'time'        => 'timeupdtd',
	);

	/**
	 * Returns if UPC is the primary UPC
	 *
	 * @return bool
	 */
	public function is_primary() {
		return strtoupper($this->primary) == 'Y';
	}

	/**
	 * Returns if UPC is the Mastercase UPC
	 *
	 * @return bool
	 */
	public function is_mastercase() {
		return strtoupper($this->mastercase) == 'Y';
	}

	/**
	 * Returns if UPC Needs Label
	 *
	 * @return bool
	 */
	public function needslabel() {
		return strtoupper($this->needslabel) == 'Y';
	}

	/**
	 * Return UPC codes that share Item IDs
	 *
	 * @return array
	 */
	public function get_other_upcs_codes() {
		$q = ItemXrefUpcQuery::create();
		$q->select('inititemnbr');
		$q->filterByInititemnbr($this->itemid);
		return $q->find();
	}

	/**
	 * Return UPCs that share Item IDs
	 *
	 * @return ItemXrefUpc[]|ObjectCollection
	 */
	public function get_other_upcs() {
		$q = ItemXrefUpcQuery::create();
		$q->filterByInititemnbr($this->itemid);
		return $q->find();
	}

	/**
	 * Returns ItemXrefUpc for this Item ID
	 * @return ItemXrefUpc
	 */
	public function get_primary_upc() {
		$q = ItemXrefUpcQuery::create();
		$q->filterByUpc($this->upc, Criteria::NOT_IN);
		$q->filterByInititemnbr($this->itemid);
		$q->filterByPrimary(self::PRIMARY_TRUE);
		return $q->findOne();
	}

	/**
	 * Returns ItemXrefUpc for this Item ID
	 * @return ItemXrefUpc
	 */
	public function get_primary_upc_code() {
		$q = ItemXrefUpcQuery::create();
		$q->select('upcxcode');
		$q->filterByUpc($this->upc, Criteria::NOT_IN);
		$q->filterByInititemnbr($this->itemid);
		$q->filterByPrimary(self::PRIMARY_TRUE);
		return $q->findOne();
	}
}
