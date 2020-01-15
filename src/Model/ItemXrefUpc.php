<?php

use Base\ItemXrefUpc as BaseItemXrefUpc;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'upc_item_xref' table.
 * 
 */
class ItemXrefUpc extends BaseItemXrefUpc {
	use ThrowErrorTrait;
	use MagicMethodTraits;

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
		$q = ItemUpcXrefQuery::create();
		$q->select('inititemnbr');
		$q->filterByInititemnbr($this->itemid);
		return $q->find();
	}

	/**
	 * Return UPCs that share Item IDs
	 *
	 * @return ItemUpcXref[]|ObjectCollection
	 */
	public function get_other_upcs() {
		$q = ItemUpcXrefQuery::create();
		$q->filterByInititemnbr($this->itemid);
		return $q->find();
	}
}
