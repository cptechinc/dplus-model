<?php

use Base\ConfigAr as BaseConfigAr;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_config' table.
 * NOTE: There will only be one record in the database for the company
 *
 */
class ConfigAr extends BaseConfigAr {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const YN_TRUE = 'Y';

	const GL_REPORT_TYPES_DESCRIPTIONS = array(
		'I' => 'inventory',
		'C' => 'customer'
	);

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'             => 'artbconfkey',
		'gl_report_type' => 'artbconfinvcustgl',
		'web_group'      => 'artbconfuseweb',
		'columns_notes_statement' => 'ArtbConfStmtCols',
		'columns_notes_invoice'   => 'ArtbConfInvCols',
		'defaultSalespersonid'    => 'artbconfspdef',
		'defaultWarehouseid'      => 'artbconfwhse',
		'defaultCustType'         => 'artbconftypedef',
		'defaultShipviaCode'      => 'artbconfsviadef',
		'defaultTermsCode'        => 'artbconftermdef',
		'defaultTaxCode'          => 'artbconftaxdef',
		'defaultStmtCode'         => 'artbconfstmtdef',
		'usePriceCode'            => 'artbconfusepriccode',
		'defaultPriceCode'        => 'artbconfpricdef',
		'useCommCode'             => 'artbconfusecommcode',
		'defaultCommCode'         => 'artbconfcommdef',
		'defaultAllowBackorder'   => 'artbconfallowbo',
		'defaultAllowFinancecharge'    => 'artbconfallowfc'
	);

	/**
	 * Web Program Code
	 * Y = Yes
	 * N = No
	 * @var string
	 */
	protected $artbconfuseweb;

	/**
	 * Returns the Description for the GL Report Type
	 * @return string
	 */
	public function glReportType() {
		return self::GL_REPORT_TYPES_DESCRIPTIONS[strtoupper($this->gl_report_type)];
	}

/* =============================================================
	Bool Property Functions
============================================================= */
	/**
	 * Use Comm Code?
	 * @return bool
	 */
	public function useCommCode() {
		return $this->useCommCode == self::YN_TRUE;
	}

	/**
	 * Use Price Code?
	 * @return bool
	 */
	public function usePriceCode() {
		return $this->usePriceCode == self::YN_TRUE;
	}

	/**
	 * Returns if the Web Program is Yes
	 * @return bool
	 */
	public function isWebGroup() {
		return strtoupper($this->web_group) == 'Y';
	}

/* =============================================================
	Legacy Functions
============================================================= */
	public function gl_report_type() {return $this->glReportType();}
	public function is_web_group() {return $this->isWebGroup();}
}
