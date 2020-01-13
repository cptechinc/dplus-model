<?php

use Base\ItemGroupCode as BaseItemGroupCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_grup_code' table.
 */
class ItemGroupCode extends BaseItemGroupCode {
    use ThrowErrorTrait;
	use MagicMethodTraits;

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
		'drop_ship'                => 'intbgrupdropacct',
		'sales_program'            => 'intbgrupsaleprog',
		'cost_percent'             => 'intbgrupcostpct',
		'coop'                     => 'intbgrupcoop',
		'surcharge'                => 'intbgrupusesurchg',
		'surcharge_dollar_percent' => 'intbgrupsurchgdollorpct',
		'surcharge_dollar_amount'  => 'intbgrupsurchgdollamt',
		'surcharge_percent'        => 'intbgrupsurchgpct',
		'freight_group'            => 'intbgrupfrtgrup',
		'product_line'             => 'intbgrupprodline',
		'ecomm_desc'               => 'intbgruplmecommdesc',
		'date'		               => 'dateupdtd',
		'time'		               => 'timeupdtd'
	);
}
