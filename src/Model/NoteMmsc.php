<?php

use Base\NoteMmsc as BaseNoteMmsc;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_mnfr_misc_det' table.
 * PURPOSE: MXRFE Manufacturer Misc Notes
 *
 */
class NoteMmsc extends BaseNoteMmsc {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'MMSC';
	const DESC = 'Manufacturer Miscellaneous Notes';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'        => 'ponttype',
		'description' => 'ponttypedesc',
		'mnfrid'      => 'mnfrid',
		'mnfritemid'  => 'pontmnfritem',
		'sequence'    => 'pontseq',
		'note'        => 'pontnote',
		'key2'        => 'pontkey2',
		'form'        => 'pontform',
		'date'        => 'dateupdtd',
		'time'        => 'timeupdtd'
	);

	/**
	 * Sets generated Key2
	 * NOTE: Key2 = ItemID followed by the Key2 Append
	 *
	 * @return string
	 */
	public function generateKey2() {
		$mnfr =  str_pad($this->mnfrid, 6, ' ', STR_PAD_RIGHT);
		$mnfritemID = str_pad($this->mnfritemid , ItemXrefManufacturer::MAXLENGTH_MNFRITEMID, " ", STR_PAD_RIGHT);
		$key2 = $mnfr . $mnfritemID;
		$this->setKey2($key2);
	}

	/**
	 * Return new NoteMnfr
	 *
	 * @return NoteMnfr
	 */
	public static function new() {
		$item = new NoteMnfr();
		$item->setType(self::TYPE);
		$item->setDescription(self::DESC);
		$item->setDummy('P');
		return $item;
	}

}
