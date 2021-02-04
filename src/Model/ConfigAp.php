<?php

use Base\ConfigAp as BaseConfigAp;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;


/**
 * Class for representing a row from the 'ap_config' table.
 * ***Config for Accounts Payable***
 *
 * NOTE: There will only be one record in the database for the company
 *
 */
class ConfigAp extends BaseConfigAp {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const YN_TRUE = 'Y';

	const COMPUTEPERCENTAGEORCOST_COST       = 'C';
	const COMPUTEPERCENTAGEORCOST_PERCENTAGE = 'P';

	const COMPUTELISTPRICEORPERCENT_LISTPRICE = 'L';
	const COMPUTELISTPRICEORPERCENT_PERCENT   = 'P';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'                  => 'aptbconfkey',
		'columns_notes_pord'  => 'aptbconfpocols',
		'default_termscode'   => 'aptbconfdeftermcode',
		'vxm_optioncode1_label' => 'aptbconfvxmuserlabel',
		'vendorcostbreaks'      => 'AptbConfVendCostBreaks',
		'updateitmcostreplacement'  => 'aptbConfVxmCostItemUpd',
		'updateitmcostmanual'       => 'aptbConfVxmCostItemUpdM',
		'confirmupdateitmcost'  => 'AptbConfVxmCostMMesg',
		'computepercentageorcost'   => 'AptbConfVxmListPc',
		'updateitmpricing'          => 'AptbConfVxmListItemUpd',
		'computelistpriceorpercent' => 'AptbConfVxmCostLp'
	);

	/**
	 * ITM Cost Base Types and their corresponding config property
	 * for updating stnadardcost
	 * @var array
	 */
	const COSTBASETYPES_TO_CONFIG_UPDATE = [
		'R' => 'aptbConfVxmCostItemUpd',
		'M' => 'aptbConfVxmCostItemUpdM'
	];

	/**
	 * Return if Vendor Cost Breaks can be used
	 * @return bool
	 */
	public function use_vendor_cost_breaks() {
		return $this->vendorcostbreaks == self::YN_TRUE;
	}

	/**
	 * Return if VXM should update ITM COST
	 * @return bool
	 */
	public function update_itm_cost($costbase) {
		if (array_key_exists($costbase, self::COSTBASETYPES_TO_CONFIG_UPDATE) === false) {
			return false;
		}
		$col = self::COSTBASETYPES_TO_CONFIG_UPDATE[$costbase];
		return $this->$col == self::YN_TRUE;
	}

	/**
	 * Return if VXM should prompt user to Update ITM Cost
	 * @return bool
	 */
	public function confirm_update_itm_cost() {
		return $this->confirmupdateitmcost == self::YN_TRUE;
	}

	public function compute_percentage_cost_cost() {
		$this->computepercentageorcost == self::COMPUTEPERCENTAGEORCOST_COST;
	}

	public function update_itm_pricing() {
		return $this->updateitmpricing == self::YN_TRUE;
	}
}
