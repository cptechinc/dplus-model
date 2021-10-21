<?php

use Base\BomItem as BaseBomItem;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'pr_bmat_head' table.
 *
 * PURPOSE: BoM Finished Good
 * RELATIONSHIPS: ItemMasterItem
 */
class BomItem extends BaseBomItem {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'  => 'bomhproditem',
		'level'   => 'bomhlevel',
		'date'    => 'dateupdtd',
		'time'    => 'timeupdtd',
	);

	/**
	 * Return the number of Sub Components
	 * @return int
	 */
	public function countComponents() {
		$q = BomComponentQuery::create();
		$q->filterByProduces($this->itemid);
		return $q->count();
	}

	/**
	 * Return Sub Components
	 * @return BomComponent[]
	 */
	public function getComponents() {
		$q = BomComponentQuery::create();
		$q->filterByProduces($this->itemid);
		return $q->find();
	}
}
