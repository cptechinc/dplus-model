<?php

use Base\OptionsVi as BaseOptionsVi;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'vi_options' table.
 * 
 * NOTE: The Row is for each user, and there is a System user for a default
 */
class OptionsVi extends BaseOptionsVi {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const USER_SYSTEM = 'system';

	const YN_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'userid'           => 'vitboptncode',
		'payments'         => 'vitboptnpayavail',
		'costing'          => 'vitboptncostavail',
		'purchaseorders'   => 'vitboptnpoavail',
		'openinvoices'     => 'vitboptnopenavail',
		'purchasehistory'  => 'vitboptnphavail',
		'unreleased'       => 'vitboptnunrlavail',
		'uninvoiced'       => 'vitboptnunivavail',
		'summary'          => 'vitboptn24moavail',


		'date'            => 'dateupdtd',
		'time'            => 'timeupdtd'
	);

	const PERMISSIONS = [
		'payments',
		'costing',
		'purchaseorders',
		'openinvoices',
		'purchasehistory',
		'unreleased',
		'uninvoiced',
		'summary',
	];

	/**
	 * Return if Column Value equals the True value
	 * @param  string $col  Column or Alias
	 * @return bool
	 */
	public function isTrue($col) {
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
	 * @return self
	 */
	public static function new() {
		$r = new OptionsVi();

		foreach (self::PERMISSIONS as $opt) {
			$r->set($opt, 'N');
		}
		return $r;
	}

}
