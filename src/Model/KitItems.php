<?php

use Base\KitItems as BaseKitItems;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_kit_detail' table.
 *
 */
class KitItems extends BaseKitItems {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'kititemid'   => 'ktdtkey1',
		'kititem'     => 'ktdtkey1',
		'kititemID'   => 'ktdtkey1',
		'kit'         => 'ktdtkey1',
		'itemid'      => 'inititemnbr',
		'itemID'      => 'inititemnbr',
		'uom'         => 'kitdtUom',
		'usage'       => 'ktdtusagrate',
		'is_free'     => 'ktdtfreegoods',
	);

	/**
	 * Returns if Kit Item has usage
	 *
	 * @return bool
	 */
	public function has_usage() {
		return $this->ktdtusagrate > 0;
	}

	/**
	 * Return Item Description
	 *
	 * @return string
	 */
	public function get_description() {
		$q = ItemMasterItemQuery::create();
		return $q->get_itemdescription($this->inititemnbr);
	}
}
