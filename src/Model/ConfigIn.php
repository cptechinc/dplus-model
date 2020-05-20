<?php

use Base\ConfigIn as BaseConfigIn;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'in_config' table
 * NOTE: There will only be one record in the database for the company
 *
 */
class ConfigIn extends BaseConfigIn {
	use ThrowErrorTrait;
	use MagicMethodTraits;


	const VALUE_TRUE  = 'Y';
	const VALUE_FALSE = 'N';

	const GRAMS_LITERS_GRAMS  = 'G';
	const GRAMS_LITERS_GRAMS_ALT = 'N';
	const GRAMS_LITERS_LITERS = 'L';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'use_controlbin' => 'intbconfusecntrlbin',
		'date'           => 'dateupdtd',
		'time'           => 'timeupdtd',
		'default_itemtype'       => 'IntbConfTypeDef',
		'default_itemgroup'  => 'IntbConfGrupDef',
		'default_pricegroup' => 'IntbConfPricGrupDef',
		'default_commgroup'  => 'IntbConfCommGrupDef',
		'default_itemtype'   => 'IntbConfTypeDef',
		'use_pricegroup'     => 'IntbConfUsePricGrup',
		'use_commgroup'      => 'IntbConfUseCommGrup',
		'default_pricegroup_itemgroup' => 'IntbConfPricUseItem',
		'default_commgroup_itemgroup'  => 'IntbConfCommUseItem',
		'use_grams_or_liters'          => 'intbconfusegramsltr',
		'default_uom_sale'             => 'IntbConfUomSaleDef',
		'default_uom_purchase'         => 'IntbConfUomPurDef',
		'default_nafta_pref_code'      => 'IntbConfNaftaPrefCode',
		'default_nafta_producer'       => 'IntbConfNaftaProducer',
		'default_nafta_documentation'  => 'IntbConfNaftaDocCode',
		'default_base_standard_cost'   => 'IntbConfStanBaseDef',
		'columns_notes_internal'       => 'intbconfitemcols',
		'default_bin'                  => 'intbconfbindef',
		'default_notes_pick'           => 'intbconfdefpick',
		'default_notes_pack'           => 'intbconfdefpack',
		'default_notes_invoice'        => 'intbconfdefinvc',
		'default_notes_acknowledgement' => 'intbconfdefack',
		'default_notes_quote'           => 'intbconfdefquote',
		'default_notes_po'              => 'intbconfdefpo',
		'default_notes_transfer'        => 'intbconfdeftrans',
	);

	/**
	 * Return if Company is configured to use Control Bin
	 * @return bool
	 */
	public function use_controlbin() {
		return $this->use_controlbin == self::VALUE_TRUE;
	}

	/**
	 * Return if Item's Pricegroup should be defaulted to itemgroup
	 *
	 * @return bool
	 */
	public function use_itemgroup_as_pricegroup() {
		return $this->default_pricegroup_itemgroup == self::VALUE_TRUE;
	}

	/**
	 * Return if Item's Commgroup should be defaulted to itemgroup
	 *
	 * @return bool
	 */
	public function use_itemgroup_as_commgroup() {
		return $this->default_commgroup_itemgroup == self::VALUE_TRUE;
	}

	/**
	 * Return if Company is configured to use Pricegroups
	 *
	 * @return bool
	 */
	public function use_pricegroup() {
		return $this->use_pricegroup == self::VALUE_TRUE;
	}

	/**
	 * Return if Company is configured to use Pricegroups
	 *
	 * @return bool
	 */
	public function use_commgroup() {
		return $this->use_commgroup == self::VALUE_TRUE;
	}

	/**
	 * Returns if using Liters
	 *
	 * @return bool
	 */
	public function use_liters() {
		return $this->use_grams_or_liters == self::GRAMS_LITERS_LITERS;
	}

	/**
	 * Returns if using Grams
	 *
	 * @return bool
	 */
	public function use_grams() {
		return in_array($this->use_grams_or_liters, [self::GRAMS_LITERS_GRAMS, self::GRAMS_LITERS_GRAMS_ALT]);
	}
}
