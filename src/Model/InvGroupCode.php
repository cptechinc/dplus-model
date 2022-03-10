<?php

use Base\InvGroupCode as BaseInvGroupCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_grup_code' table.
 */
class InvGroupCode extends BaseInvGroupCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 4;
	const YN_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'                       => 'intbgrup',
		'itemgroup'                => 'intbgrup',
		'code'                     => 'intbgrup',
		'description'              => 'intbgrupdesc',
		'sales'                    => 'intbgrupsaleacct',
		'inventory'                => 'intbgrupivtyacct',
		'cogs'                     => 'intbgrupcogsacct',
		'credit'                   => 'intbgrupcredacct',
		'web_group'                => 'intbgrupwebgrup',
		'webgroup'                 => 'intbgrupwebgrup',
		'drop_ship'                => 'intbgrupdropacct',
		'dropship'                 => 'intbgrupdropacct',
		'sales_program'            => 'intbgrupsaleprog',
		'salesprogram'             => 'intbgrupsaleprog',
		'cost_percent'             => 'intbgrupcostpct',
		'costpercent'              => 'intbgrupcostpct',
		'coop'                     => 'intbgrupcoop',
		'surcharge'                => 'intbgrupusesurchg',
		'surcharge_dollar_percent' => 'intbgrupsurchgdollorpct',
		'surchargetype'            => 'intbgrupsurchgdollorpct',
		'surcharge_dollar_amount'  => 'intbgrupsurchgdollamt',
		'surchargeamount'          => 'intbgrupsurchgdollamt',
		'surcharge_percent'        => 'intbgrupsurchgpct',
		'surchargepercent'         => 'intbgrupsurchgpct',
		'freight_group'            => 'intbgrupfrtgrup',
		'freightgroup'             => 'intbgrupfrtgrup',
		'product_line'             => 'intbgrupprodline',
		'productline'              => 'intbgrupprodline',
		'ecomm_desc'               => 'intbgruplmecommdesc',
		'ecommdesc'                => 'intbgruplmecommdesc',
		'max_qty_large'            => 'intbgruplmmaxqtylrg',
		'maxqtylarge'              => 'intbgruplmmaxqtylrg',
		'max_qty_medium'           => 'intbgruplmmaxqtymed',
		'maxqtymedium'             => 'intbgruplmmaxqtymed',
		'max_qty_small'            => 'intbgruplmmaxqtysml',
		'maxqtysmall'              => 'intbgruplmmaxqtysml',
		'date'		               => 'dateupdtd',
		'time'		               => 'timeupdtd'
	);

	/**
	 * Return if Code has Surcharge
	 * @return bool
	 */
	public function hasSurcharge() {
		return strtoupper($this->surcharge) === 'Y';
	}

	/**
	 * Return the Maximum of characters allowed for code
	 * @return int
	 */
	public function get_max_code_length() {
		return self::MAX_LENGTH_CODE;
	}
}
