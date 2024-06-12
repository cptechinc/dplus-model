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

	const GRAMS_LITERS_GRAMS     = 'G';
	const GRAMS_LITERS_GRAMS_ALT = 'N';
	const GRAMS_LITERS_LITERS    = 'L';
	const GRAMS_LITERS_BOTH      = 'B';


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
		'use_pricegroup'     => 'intbconfusepricgrup',
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
		'readReceiveBinFrom'           => 'intbConfdfltwhsebin',
		'default_bin'                  => 'intbconfbindef',
		'defaultbinid'                 => 'intbConfDfltBin',
		'receivebinid'                 => 'intbConfDfltBin',
		'default_notes_pick'           => 'intbconfdefpick',
		'default_notes_pack'           => 'intbconfdefpack',
		'default_notes_invoice'        => 'intbconfdefinvc',
		'default_notes_acknowledgement' => 'intbconfdefack',
		'default_notes_quote'           => 'intbconfdefquot',
		'default_notes_po'              => 'intbconfdefpo',
		'default_notes_transfer'        => 'intbconfdeftrans',
		'allowduplicateupc'             => 'intbcon2allowdupupc',
		'useUppercaseItemid'            => 'intbconfnbruppr',
		'useUppercaseItemDesc'          => 'intbconfdescuppr',
		'default_cycle'                 => 'intbConfCyclDef',
		'default_status'                => 'intbConfStatDef',
		'default_abccode'               => 'intbConfAbcDef',
		'default_specialorder'          => 'intbConfSpecOrdrDef',
		'default_orderqty'              => 'intbConfOrdrQtyDef',
		'default_maxqty'                => 'intbConfMaxDef',
		'default_whseid'                => 'intbCon2DfltWhse01',
		'default_orderpoint'            => 'intbConfOrdrPntDef',
		'allowMultiLotRefUse'           => 'intbConfMultiLotRef'
	);

	/**
	 * Return if Duplicate Upc Codes are allowed
	 * @return bool
	 */
	public function allowDuplicateUpcs() {
		return $this->allowduplicateupc == self::VALUE_TRUE;
	}

	/**
	 * Return if Company is configured to use Control Bin
	 * @return bool
	 */
	public function useControlbin() {
		return $this->use_controlbin == self::VALUE_TRUE;
	}

	/**
	 * Return if Item's Pricegroup should be defaulted to itemgroup
	 * @return bool
	 */
	public function useItemgroupAsPricegroup() {
		return $this->default_pricegroup_itemgroup == self::VALUE_TRUE;
	}

	/**
	 * Return if Item's Commgroup should be defaulted to itemgroup
	 * @return bool
	 */
	public function useItemgroupAsCommgroup() {
		return $this->default_commgroup_itemgroup == self::VALUE_TRUE;
	}

	/**
	 * Return if Company is configured to use Pricegroups
	 * @return bool
	 */
	public function usePricegroup() {
		return $this->use_pricegroup == self::VALUE_TRUE;
	}

	/**
	 * Return if Company is configured to use Pricegroups
	 * @return bool
	 */
	public function useCommgroup() {
		return $this->use_commgroup == self::VALUE_TRUE;
	}

	/**
	 * Returns if using Liters
	 * @return bool
	 */
	public function useLiters() {
		return in_array($this->use_grams_or_liters, [self::GRAMS_LITERS_LITERS, self::GRAMS_LITERS_BOTH]);
	}

	/**
	 * Returns if using Grams
	 * @return bool
	 */
	public function useGrams() {
		return in_array($this->use_grams_or_liters, [self::GRAMS_LITERS_GRAMS, self::GRAMS_LITERS_GRAMS_ALT, self::GRAMS_LITERS_BOTH]);
	}

	/**
	 * Return if Item ID should be in uppercase
	 * @return bool
	 */
	public function useUppercaseItemid() {
		return $this->useUppercaseItemid == self::VALUE_TRUE;
	}

	/**
	 * Return if Item Description should be in uppercase
	 * @return bool
	 */
	public function useUppercaseItemDescription() {
		return $this->useUppercaseItemDesc == self::VALUE_TRUE;
	}

/* =============================================================
	Legacy Functions
============================================================= */
	public function use_controlbin() {return $this->useControlbin();}
	public function use_itemgroup_as_pricegroup() {return $this->useItemgroupAsPricegroup();}
	public function use_itemgroup_as_commgroup() {return $this->useItemgroupAsCommgroup();}
	public function use_pricegroup() {return $this->usePricegroup();}
	public function use_commgroup() {return $this->useCommgroup();}
	public function use_liters() {return $this->useLiters();}
	public function use_grams() {return $this->useGrams();}
}
