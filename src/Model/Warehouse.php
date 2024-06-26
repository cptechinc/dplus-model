<?php

use Base\Warehouse as BaseWarehouse;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_whse_code' table.
 */
class Warehouse extends BaseWarehouse {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 2;

	const BINS_RANGED = 'R';
	const BINS_LIST   = 'L';

	/**
	 * Options for Bin Arragement
	 */
	const OPTIONS_ARRANGED = array(
		'L' => 'List', // LIST
		'R' => 'Range' // RANGE
	);

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'       => 'intbwhse',
		'code'     => 'intbwhse',
		'whseid'   => 'intbwhse',
		'whseID'   => 'intbwhse',
		'arranged' => 'intbwhsebinrangelist',
		'binarrangement' => 'intbwhsebinrangelist',
		'name'     => 'intbwhsename',
		'address'  => 'intbwhseadr1',
		'address2' => 'intbwhseadr2',
		'city'     => 'intbwhsecity',
		'state'    => 'intbwhsestat',
		'zip'      => 'intbwhsezipcode',
		'country'  => 'intbwhsectry',
		'phone_area' => 'intbwhsepharea',
		'phone_prefix' => 'intbwhsephfrst3',
		'phone_line'   => 'intbwhsephlast4',
		'phone_ext'    => 'intbwhsephext',
		'extension'    => 'intbwhsephext',
		'fax_area'     => 'intbwhsefaxarea',
		'fax_prefix'   => 'intbwhsefaxfrst3',
		'fax_line'     => 'intbwhsefaxlast4',
		'email'        => 'intbwhseemailadr',
		'bin_qcrga'    => 'intbwhseqcrgabin',
		'qcbin'         => 'intbwhseqcrgabin',
		'bin_production' => 'intbwhseprodbin',
		'productionbin' => 'intbwhseprodbin',
		'consignment'  => 'intbwhseconsignwhse',
		'whse_profit'  => 'intbwhseprofwhse',
		'whseprofit'  => 'intbwhseprofwhse',
		'whse_asset'   => 'intbwhseasetwhse',
		'whseasset'    => 'intbwhseasetwhse',
		'whse_supply'  => 'intbwhsesupplywhse',
		'whsesupply'  => 'intbwhsesupplywhse',
		'cash_customer' => 'intbwhsecashcust',
		'cashcustomer'  => 'intbwhsecashcust',
		'custid'        => 'intbwhsecashcust',
		'pickdetail'    => 'intbwhsepickdtl',
		'receivebintype' => 'intbwhsercvbincode',
		'receivebinid'   => 'intbwhsercvbin',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd',
		'cashCustomer'  => 'cashCustomer',
	);

	/**
	 * Return the Maximum of characters allowed for code
	 * @return int
	 */
	public function get_max_code_length() {
		return self::MAX_LENGTH_CODE;
	}

	/**
	 * Return Phone Number as string
	 * NOTE: Function name is for Magic Method
	 *
	 * @return string
	 */
	public function getPhone() {
		return $this->phone_area . $this->phone_prefix . $this->phone_line;
	}

	/**
	 * Return Fax Number as string
	 * NOTE: Function name is for Magic Method
	 *
	 * @return string
	 */
	public function getFax() {
		return $this->fax_area . $this->fax_prefix . $this->fax_line;
	}

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
	 * Return Bin Record Count
	 * @return int
	 */
	public function count_bins() {
		return WarehouseBinQuery::create()->filterByWarehouse($this->IntbWhse)->count();
	}

	/**
	 * Return WarehouseBins for this Warehouse
	 *
	 * @return WarehouseBinQuery[]|ObjectCollection
	 */
	public function get_warehousebins() {
		return WarehouseBinQuery::create()->get_warehousebins($this->IntbWhse);
	}

	/**
	 * Returns description of bin arrangement
	 *
	 * @return string list | range
	 */
	public function get_binarrangementdescription() {
		return $this->are_binslisted() ? 'list' : 'range';
	}

	/**
	 * Return Bin Arrangement Options
	 * @return array
	 */
	public function get_arrangement_options() {
		return self::OPTIONS_ARRANGED;
	}

	/**
	 * Return Customer for Cash Customer
	 * @return Customer
	 */
	public function getCashCustomer() {
		return CustomerQuery::create()->findOneByCustid($this->cash_customer);
	}
}
