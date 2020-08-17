<?php

use Base\ConfigPo as BaseConfigPo;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_config' table.
 */
class ConfigPo extends BaseConfigPo {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const VALUE_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'decimal_places_cost'  => 'potbconfvxmroundpos',
		'allow_change_cost'    => 'potbconfallowchgcost',
		'allow_po_item_notes'  => 'potbconfeditpoitemnotes'
	);
	
	/**
	 * Return if PO Item Notes are allowed
	 * @return bool
	 */
	public function allow_po_item_notes() {
		return $this->allow_po_item_notes == self::VALUE_TRUE;
	}
}
