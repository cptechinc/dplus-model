<?php

use Base\OptionsCi as BaseOptionsCi;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ci_options' table.
 * CI User / System options
 */
class OptionsCi extends BaseOptionsCi {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const YN_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'user'     => 'citboptncode',
		'userid'   => 'citboptncode',
		'days_po'  => 'citboptnpodaysback',
		'days_sh'  => 'citboptnshdaysback',
		// CI screens
		'notes'          => 'CitbOptnNoteAvail',
		'contacts'       => 'CitbOptnGenAvail',
		'payment'        => 'CitbOptnPayAvail',
		'corebank'       => 'CitbOptnCoreAvail',
		'credit'         => 'CitbOptnCredAvail',
		'stock'          => 'CitbOptnCstkAvail',
		'pricing'        => 'CitbOptnPricAvail',
		'standingorders' => 'CitbOptnStndAvail',
		'salesorders'    => 'CitbOptnSoAvail',
		'quotes'         => 'CitbOptnQuotAvail',
		'openinvoices'   => 'CitbOptnOpenAvail',
		'customerpo'     => 'CitbOptnPoAvail',
		'saleshistory'   => 'CitbOptnShAvail'
	);

	const PERMISSIONS = [
		'notes',
		'contacts',
		'payment',
		'corebank',
		'credit',
		'stock',
		'pricing',
		'standingorders',
		'salesorders',
		'quotes',
		'openinvoices',
		'customerpo',
		'saleshistory'
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
}
