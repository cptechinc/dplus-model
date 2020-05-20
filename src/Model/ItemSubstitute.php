<?php

use Base\ItemSubstitute as BaseItemSubstitute;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_inv_sub' table.
 * 
 * RELATIONSHIPS: ItemMasterItem 
 */
class ItemSubstitute extends BaseItemSubstitute {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'	   => 'inititemnbr',
		'subitemid'    => 'insisubitemnbr',
		'subsituteitemid'	 => 'insisubitemnbr',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd',
	);

	/**
	 * Get the associated ItemMasterItem object for the Original Item
	 */
	public function getItem() {
		return $this->getItemMasterItemRelatedByInititemnbr();
	}
	
	/**
	 * Get the associated ItemMasterItem object for the Subtitute Item
	 */
	public function getSubstitute() {
		return $this->getItemMasterItemRelatedByInsisubitemnbr();
	}
}
