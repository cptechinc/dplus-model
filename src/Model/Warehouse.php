<?php

use Base\Warehouse as BaseWarehouse;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'inv_whse_code' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Warehouse extends BaseWarehouse {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const BINS_RANGED = 'R';
	const BINS_LIST   = 'L';

	/**
	 * Options for Bin Arragement
	 */
	const OPTIONS_ARRANGED = array(
		'L', // LIST
		'R'  // RANGE
	);

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'       => 'IntbWhse',
		'whseid'   => 'IntbWhse',
		'whseID'   => 'IntbWhse',
		'arranged' => 'IntbWhseBinRangeList',
		'name'     => 'IntbWhseName',
		'address'  => 'IntbWhseAdr1',
		'address2' => 'IntbWhseAdr2',
		'city'     => 'IntbWhseCity',
		'state'    => 'IntbWhseStat',
		'zip'      => 'IntbWhseZipCode',
		'country'  => 'IntbWhseCtry',
		'phone_area' => 'IntbWhsePhArea',
		'phone_prefix' => 'IntbWhsePhFrst3',
		'phone_line'   => 'IntbWhsePhLast4',
		'phone_ext'    => 'IntbWhsePhExt',
		'fax_area'     => 'IntbWhseFaxArea',
		'fax_prefix'   => 'IntbWhseFaxFrst3',
		'fax_line'     => 'IntbWhseFaxLast4',
		'email'        => 'IntbWhseEmailAdr',
		'bin_qcrga'    => 'IntbWhseQcRgaBin',
		'consignment'  => 'IntbWhseConsignWhse',
		'whse_profit'  => 'IntbWhseProfWhse',
		'whse_asset'   => 'IntbWhseAsetWhse',
		'whse_supply'  => 'IntbWhseSupplyWhse',
	);

	/**
	 * Returns if Bins are Ranged
	 * @return bool
	 */
	public function are_binsranged() {
		return $this->IntbWhseBinRangeList == self::BINS_RANGED;
	}

	/**
	 * Returns if Bins are Listed
	 * @return bool
	 */
	public function are_binslisted() {
		return $this->IntbWhseBinRangeList == self::BINS_LIST;
	}

	/**
	 * Returns if Bin is valid according to the Arrangment type rules
	 * @return bool
	 */
	public function validate_bin($binID) {
		return WarehouseBinQuery::create()->validate_bin($this->IntbWhse, $binID);
	}

	/**
	 * Return WarehouseBin objects filtered by warehouse
	 * @return WarehouseBin[]|ObjectCollection
	 */
	public function get_bins() {
		return WarehouseBinQuery::create()->findByWarehouse($this->IntbWhse);
	}

	/**
	 * Returns description of bin arrangement
	 *
	 * @return string list | range
	 */
	public function get_binarrangementdescription() {
		return $this->are_binslisted() ? 'list' : 'range';
	}
}
