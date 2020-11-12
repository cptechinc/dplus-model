<?php

use Base\InvKitComponent as BaseInvKitComponent;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_kit_detail' table.
 * RELATIONSHIPS: ItemMasterItem
 */
class InvKitComponent extends BaseInvKitComponent{
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
		// FOREIGNKEY RELATIONSHIP
		'item'        => 'itemMasterItem'
	);

	/**
	 * Returns if Kit Item has usage
	 * @return bool
	 */
	public function has_usage() {
		return $this->ktdtusagrate > 0;
	}

	/**
	 * Return Item Description
	 * @return string
	 */
	public function get_description() {
		$this->item->description;
	}
}
