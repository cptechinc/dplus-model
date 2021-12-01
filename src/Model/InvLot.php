<?php

use Base\InvLot as BaseInvLot;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_lot_mast' table.
 */
class InvLot extends BaseInvLot {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const YN_TRUE = 'Y';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'         => 'inititemnbr',
		'lotnbr'         => 'lotmlotnbr',
		'lotserial'      => 'lotmlotnbr',
		'lotref'         => 'lotmlotref',
		'revision'       => 'lotmrevision',
		'country'        => 'lotmctry',
		'coc'            => 'lotmcofc',
		'createdate'     => 'lotmcreatedate',
		'createtime'     => 'lotmcreatetime',
		'createdate'     => 'LotmCreateDate',
		'date'           => 'dateupdtd',
		'time'           => 'timeupdtd',
		'expiredate'     => 'lotmexpiredate',
		'productiondate' => 'lotmexpiredate',
		'hasimage'       => 'lotmimagyn',

		// FOREIGN KEY GETS
		'item'          => 'itemMasterItem'
	);

	/**
	 * Return if Lot has Image 
	 * @return bool
	 */
	public function hasImage() {
		return $this->hasimage === self::YN_TRUE;
	}
}
