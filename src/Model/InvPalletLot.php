<?php
// Dplus Model
use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;
// Base
use Base\InvPalletLot as BaseInvPalletLot;

/**
 * Class for representing a row from the 'pallet_detail' table.
 *
 * REPRESENTS: item pallet lot record
 * FKRELATIONSHIPS: InvPallet
 */
class InvPalletLot extends BaseInvPalletLot {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'palletid'  => 'plthpalletid',
		'lotserial' => 'pltdlotnbr',
		'lotnbr'    => 'pltdlotnbr',
		'date'      => 'dateupdtd',
		'time'      => 'timeupdtd',
		// Foreign Key Aliases
		'pallet'  => 'invPallet'
	]; 
}
