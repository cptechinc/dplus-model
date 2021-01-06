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
		'userid'   => 'citboptncode',
		'days_po'  => 'citboptnpodaysback',
		'days_sh'  => 'citboptnshdaysback',
		// CI screens
		'notes'          => 'CitbOptnNoteAvail',
		'contacts'       => 'CitbOptnGenAvail',
		'payments'       => 'CitbOptnPayAvail',
		'corebank'       => 'CitbOptnCoreAvail',
		'credit'         => 'CitbOptnCredAvail',
		'stock'          => 'CitbOptnCstkAvail',
		'pricing'        => 'CitbOptnPricAvail',
		'standingorders' => 'CitbOptnStndAvail',
		'salesorders'    => 'CitbOptnSoAvail',
		'quotes'         => 'CitbOptnQuotAvail',
		'openinvoices'   => 'CitbOptnOpenAvail',
		'customerpo'     => 'CitbOptnPoAvail',
		'saleshistory'   => 'CitbOptnShAvail',

		'dayscustomerpo'   => 'citboptnpodaysback',
		'dayssaleshistory' => 'citboptnshdaysback',

		'datecustomerpo'   => 'CitbOptnPoStrtDate',
		'datesaleshistory' => 'CitbOptnShStrtDate',

		'date'            => 'dateupdtd',
		'time'            => 'timeupdtd'
	);

	const PERMISSIONS = [
		'notes',
		'contacts',
		'payments',
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

	/**
	 * Return User associated with Record
	 * @return DplusUser
	 */
	public function getUser() {
		return DplusUserQuery::create()->findOneByUserid($this->userid);
	}

	/**
	 * Return New Record with no Permissions
	 * @return OptionsCi
	 */
	public static function new() {
		$record = new OptionsCi();

		foreach (self::PERMISSIONS as $opt) {
			$record->set($opt, 'N');
		}
		return $record;
	}
}
