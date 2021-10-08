<?php

use Base\BomComponent as BaseBomComponent;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'pr_bmat_det' table.
 *
 * PURPOSE: BoM Component
 * RELATIONSHIPS: ItemMasterItem, BomItem
 */
class BomComponent extends BaseBomComponent {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'      => 'bomdusagitem',
		'line'        => 'bomdline',
		'produces'    => 'bomhproditem',
		'qty'         => 'bomdusagqty',
		'usageqty'    => 'bomdusagqty',
		'scrap'       => 'bomdscrap',
		'serialbase'  => 'bomdserialbase',
		'item'        => 'itm',
		'date'        => 'dateupdtd',
		'time'        => 'timeupdtd',
	);

	/**
	 * Return ItemMasterItem
	 * @return ItemMasterItem
	 */
	public function getItm() {
		return ItemMasterItemQuery::create()->findOneByItemid($this->itemid);
	}

	/**
	 * Return if Component is a Serialized Item
	 * @return bool
	 */
	public function isSerialized() {
		$q = ItemMasterItemQuery::create()->filterByItemid($this->itemid);
		$q->filterByItemtype(ItemMasterItem::ITEMTYPE_SERIALIZED);
		return boolval($q->count());
	}
}
