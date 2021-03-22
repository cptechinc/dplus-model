<?php

use Base\SalesPerson as BaseSalesPerson;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_saleper1' table.
 *
 * PURPOSE: Sales Person
 */
class SalesPerson extends BaseSalesPerson {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'arspsaleper1',
		'name'         => 'arspname',
		'userid'       => 'arsplogin',
		'manager'      => 'arspmgr',
		'vendorid'     => 'arspvendid',
		'email'        => 'arspemailaddr',
		'lastsaledate' => 'arsplastsaledate',
		'groupid'      => 'arspgrup',
		'cycle'        => 'arspcommcycle',
		'salesmtd'  => 'arspmtdsale',
		'salesytd'  => 'arspytdsale',
		'salesltd'  => 'arspltdsale',
		'earnedmtd' => 'arspmtdcommearn',
		'earnedytd' => 'arspytdcommearn',
		'earnedltd' => 'arspltdcommearn',
		'paidmtd'   => 'arspmtdcommpaid',
		'paidytd'   => 'arspytdcommpaid',
		'paidltd'   => 'arspltdcommpaid',
		'restricted' => 'arsprestrictaccess',
		'date'      => 'dateupdtd',
		'time'      => 'timeupdtd',
	);

	/**
	 * Return if User is a Manager
	 * @return bool
	 */
	public function is_manager() {
		return $this->manager == 'Y';
	}

	/**
	 * Return New SalesPerson with default values
	 * @return SalesPerson
	 */
	public static function new() {
		$p = new SalesPerson();
		$emptystring = ['cycle','groupid','email','vendorid','name','lastsaledate'];
		$types       = ['sales','earned','paid'];
		$periods     = ['mtd','ytd','ltd'];

		foreach ($emptystring as $col) {
			$setCol = 'set'.ucfirst($col);
			$p->$setCol('');
		}

		foreach($types as $col) {
			foreach($periods as $period) {
				$setCol = 'set'.ucfirst($col).$period;
				$p->$setCol(0);
			}
			
		}
		$p->setManager('N');
		$p->setRestricted('N');
		return $p;
	}
}
