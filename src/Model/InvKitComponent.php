<?php

use Base\InvKitComponent as BaseInvKitComponent;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_kit_detail' table.
 *
 * RELATIONSHIPS: ItemMasterItem InvKit
 */
class InvKitComponent extends BaseInvKitComponent{
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const FORMAT_DATE = 'Ymd';
	const FORMAT_TIME = 'His';

	const OPTIONS_SUPPLIEDBY = array(
		'S' => 'Stocking Bin',
		'B' => 'Fab Bin',
		'V' => 'Vendor Supply'
	);

	const OPTIONS_USAGETAG = array(
		'B' => 'Base Item',
		'A' => 'Add-on',
		'S' => 'Subtract'
	);

	const USAGETAG_SUBTRACT = 'S';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'kitid'       => 'ktdtkey1',
		'kititemid'   => 'ktdtkey1',
		'kititem'     => 'ktdtkey1',
		'kititemID'   => 'ktdtkey1',
		'itemid'      => 'inititemnbr',
		'itemID'      => 'inititemnbr',
		'uom'         => 'kitdtUom',
		'usage'       => 'ktdtusagrate',
		'is_free'     => 'ktdtfreegoods',
		'freegoods'   => 'ktdtfreegoods',
		'usagetag'    => 'ktdtusagtag',
		'suppliedby'  => 'ktdtvendsupply',
		'date'        => 'dateupdtd',
		'time'        => 'timeupdtd',
		// FOREIGNKEY RELATIONSHIP
		'item'        => 'itemMasterItem',
		'kit'         => 'invKit'
	);

	/**
	 * Returns if Kit Item has usage
	 * @return bool
	 */
	public function has_usage() {
		return $this->ktdtusagrate > 0;
	}

	/**
	 * Return Usage
	 * @return string
	 */
	public function usage() {
		return $this->usagetag_subtract() ? "-$this->usage" : $this->usage;
	}

	/**
	 * Return if Component Usage Tag is Subtract
	 * @return bool
	 */
	public function usagetag_subtract() {
		return $this->usagetag == self::USAGETAG_SUBTRACT;
	}

	/**
	 * Return Item Description
	 * @return string
	 */
	public function get_description() {
		$this->item->description;
	}
}
