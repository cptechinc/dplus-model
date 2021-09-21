<?php

use Base\ConfigIi as BaseConfigIi;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ii_config' table.
 */
class ConfigIi extends BaseConfigIi {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const BREAKDOWNCODES = [
		'K' => 'kit',
		'B' => 'BOM',
		'A' => 'all',
		'N' => 'none'
	];

	const WHEREUSEDOPTIONS = [
		'W' => 'where used',
		'Q' => 'vendor quote worksheet',
		'N' => 'none'
	];

	const QUOTEORLOSTSALESOPTIONS = [
		'Q' => 'quotes',
		'L' => 'lost sales'
	];

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'whereUsedOrQuote'     => 'iitbconfwuorvqw',
		'breakdownInquiryCode' => 'iitbconfinqcode',
		'quotesOrLostSales'    => 'iitbconfqorls',
		'date'                 => 'dateupdtd',
		'time'                 => 'timeupdtd'
	);

	/**
	 * Return Breakdown Inquiry Description
	 * @return bool
	 */
	public function breakdownInquiryDescription() {
		return self::BREAKDOWNCODES[$this->breakdownInquiryCode];
	}

	/**
	 * Return If BoM Inquiry screen is allowed
	 * @return bool
	 */
	public function allowBreakdownBom() {
		$allowed = ['B', 'A'];
		return in_array($this->breakdownInquiryCode, $allowed);
	}

	/**
	 * Return If Kit Inquiry screen is allowed
	 * @return bool
	 */
	public function allowBreakdownKit() {
		$allowed = ['K', 'A'];
		return in_array($this->breakdownInquiryCode, $allowed);
	}

	/**
	 * Return if WhereUsed Inquiry is allowed
	 * @return bool
	 */
	public function allowWhereUsed() {
		return $this->whereUsedOrQuote == 'W';
	}

	/**
	 * Return if Quote Worksheet Inquiry is allowed
	 * @return bool
	 */
	public function allowQuoteWorksheet() {
		return $this->whereUsedOrQuote == 'Q';
	}

	/**
	 * Return if Quotes Inquiry is allowed
	 * @return bool
	 */
	public function allowQuotes() {
		return $this->quotesOrLostSales == 'Q';
	}

	/**
	 * Return if Lost Sales Inquiry is allowed
	 * @return bool
	 */
	public function allowLostSales() {
		return $this->quotesOrLostSales == 'L';
	}
}
