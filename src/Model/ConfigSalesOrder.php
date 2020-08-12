<?php

use Base\ConfigSalesOrder as BaseConfigSalesOrder;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_config' table.
 *
 */
class ConfigSalesOrder extends BaseConfigSalesOrder {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Request Catalog Code
	 * P = Program
	 * C = Catalog
	 * N = None
	 * @var string
	 */
	protected $oetbconfrqstcatlg;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'request_catalog'   => 'oetbconfrqstcatlg',
		'freightin'         => 'oetbconffrtin',
		'freight_amt'       => 'oetbcon2frtallowamt',
		'note_default_pick' => 'oetbconfdefpick',
		'note_default_pack' => 'oetbconfdefpack',
		'note_default_invoice' => 'oetbconfdefinvc',
		'note_default_acknowledgement' => 'oetbconfdefack',
		'decimal_places'           => 'oetbconfdecplaces',
		'decimal_places_qty'       => 'oetbconfdecplaces',
		'decimal_places_price'     => 'oetbconfdecordrpric',
		'decimal_places_price'     => 'oetbconfdecordrpric',
		'allow_change_price'       => 'oetbconfchgpric'
	);

	/**
	 * Returns if the Request Type is Program
	 * @return bool
	 */
	public function is_request_program() {
		return strtoupper($this->request_catalog) == 'P';
	}

	/**
	 * Returns if Freight in
	 * @return bool
	 */
	public function is_freightin() {
		return strtoupper($this->freightin) == 'Y';
	}

	/**
	 * Returns if the Freight Allowed In Amt
	 * @return bool
	 */
	public function get_freight_allowed_amt() {
		return $this->freight_amt;
	}
}
