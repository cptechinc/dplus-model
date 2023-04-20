<?php

use Base\OptionsIi as BaseOptionsIi;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ii_options' table.
 *
 * NOTE: The Row is for each user, and there is a System user for a default
 */
class OptionsIi extends BaseOptionsIi {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const USER_SYSTEM = 'system';

	const VIEW_REQUIREMENTS_AVAILABLE = 'A';
	const VIEW_REQUIREMENTS_REQUIREMENTS = 'R';

	const VIEW_REQUIREMENTS_OPTIONS = array(
		'R' => 'Requirement',
		'A' => 'Available to Promise'
	);

	const VIEW_REQUIREMENTS_OPTIONS_JSON = array(
		'R' =>  "REQ",
		'A' => "AVL"
	);

	const YN_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'userid'            => 'iitboptncode',
		'view_requirements' => 'iitboptnreqrview',
		'whichdesc'         => 'IitbOptnDesc1Or2',
		'itemdescription'   => 'IitbOptnDesc1Or2',
		'deleteloticerts'   => 'IitbOptnDelCerts',

		// II Screen Permissions
		'activity'          => 'IitbOptnActAvail',
		'cost'              => 'IitbOptnCostAvail',
		'general'           => 'IitbOptnGenAvail',
		'kit'               => 'IitbOptnKtAvail',
		'pricing'           => 'IitbOptnPricAvail',
		'purchasehistory'   => 'IitbOptnPhAvail',
		'purchaseorders'    => 'IitbOptnPoAvail',
		'requirements'      => 'IitbOptnReqrAvail',
		'saleshistory'      => 'IitbOptnShAvail',
		'salesorders'       => 'IitbOptnSoAvail',
		'lotserial'         => 'IitbOptnSerlotAvail',
		'stock'             => 'IitbOptnStckAvail',
		'substitutes'       => 'IitbOptnSubsupAvail',
		'lostsales'         => 'IitbOptnLsAvail',

		// II Screen Warehouse Options
		'whseactivity'         => 'IitbOptnActWhse',
		'whsecost'             => 'IitbOptnCostWhse',
		'whsepurchasehistory'  => 'IitbOptnPhWhse',
		'whsepurchaseorders'   => 'IitbOptnPoWhse',
		'whserequirements'      => 'IitbOptnReqrWhse',
		'whsesaleshistory'     => 'IitbOptnShWhse',
		'whsesalesorders'      => 'IitbOptnSoWhse',
		'whsestock'            => 'IitbOptnStckWhse',
		'whsesubstitutes'      => 'IitbOptnSubsupWhse',
		'whselostsales'        => 'IitbOptnLsWhse',

		// II Screen Date Options
		'daysactivity'         => 'IitbOptnActDaysBack',
		'dateactivity'         => 'IitbOptnActStrtDate',
		'dayspurchasehistory'  => 'IitbOptnPhDaysBack',
		'datepurchasehistory'  => 'IitbOptnPhStrtDate',
		'dayssaleshistory'  => 'IitbOptnShDaysBack',
		'datesaleshistory'  => 'IitbOptnShStrtDate',

		// II Screen Detail Options
		'detailactivity'        => 'IitbOptnActDet',
		'detailcost'            => 'IitbOptnCostDet',
		'detailpurchasehistory' => 'IitbOptnPhDet',
		'detailsaleshistory'    => 'IitbOptnShDet',
		'detailstock'           => 'IitbOptnStckdet',
		'detailrequirements'    => 'IitbOptnReqrView',
		'requirementsview'      => 'IitbOptnReqrView',

		'date'            => 'dateupdtd',
		'time'            => 'timeupdtd'
	);

	const PERMISSIONS = [
		'activity',
		'cost',
		'general',
		'kit',
		'pricing',
		'purchasehistory',
		'purchaseorders',
		'requirements',
		'saleshistory',
		'salesorders',
		'lotserial',
		'stock',
		'substitutes',
		'lostsales',
	];

	/**
	 * Return if Column Value equals the True value
	 * @param  string $col  Column or Alias
	 * @return bool
	 */
	public function is_true($col) {
		if (isset($this->$col)) {
			return $this->$col == self::YN_TRUE;
		}
		return false;
	}

	/**
	 * Return Array of Permitted Functions
	 * @return array
	 */
	public function permitted() {
		return array_filter(self::PERMISSIONS, array($this, 'is_true'));
	}

	/**
	 * Return User associated with Record
	 * @return DplusUser
	 */
	public function getUser() {
		return DplusUserQuery::create()->findOneByUserid($this->userid);
	}

	/**
	 * Return New Record with no Permissions
	 * @return OptionsIi
	 */
	public static function new() {
		$record = new OptionsIi();

		foreach (self::PERMISSIONS as $opt) {
			$record->set($opt, 'N');
		}
		return $record;
	}
}
