<?php
// Propel ORM Library
use Propel\Runtime\ActiveQuery\Criteria;
// Dplus Model
use Dplus\Model\QueryTraits;
// Base Classes
use Base\WarehouseBinQuery as BaseWarehouseBinQuery;

/**
 * Class for performing query and update operations on the 'inv_bin_cntrl' table.
 */
class WarehouseBinQuery extends BaseWarehouseBinQuery {
	use QueryTraits;

	/**
	 * Filter Query by the Wareouse ID column
	 * @param  string|mixed $whseID     Warehouse ID
	 * @param  string       $comparison
	 * @return self
	 */
	public function filterByWhseid($whseID, $comparison = null) {
		return $this->filterByIntbWhse($whseID, $comparison);
	}

	/**
	 * Filter Query by the Type column
	 * @param  string|mixed $type       Bin Type(s)
	 * @param  string       $comparison
	 * @return self
	 */
	public function filterByType($type, $comparison = null) {
		return $this->filterByBncttypedesc($type, $comparison);
	}

	/**
	 * Returns if bin is a valid bin at the warehouse according to warehouse bin rules
	 * @param  string $whseID Warehouse ID
	 * @param  string $binID  Bin ID
	 * @return bool           Is bin valid?
	 */
	public function validate_bin($whseID, $binID) {
		return $this->validateBin($whseID, $binID);
	}

	/**
	 * Returns if bin is a valid bin at the warehouse according to warehouse bin rules
	 * @param  string $whseID Warehouse ID
	 * @param  string $binID  Bin ID
	 * @return bool           Is bin valid?
	 */
	public function validateBin($whseID, $binID) {
		$areBinsRanged = WarehouseQuery::create()->are_binsranged($whseID);

		if ($areBinsRanged) {
			$this->condition('from', 'WarehouseBin.BnctBinFrom <= ?', $binID);
			$this->condition('thru', 'WarehouseBin.BnctBinThru >= ?', $binID);
			$this->where(array('from', 'thru'), Criteria::LOGICAL_AND);
		} else {
			$this->filterbyBnctBinFrom($binID);
		}

		$this->filterByWarehouse($whseID);
		return boolval($this->count());
	}

	/**
	 * Return WarehouseBin objects filtered by warehouse column
	 * @return WarehouseBin[]|ObjectCollection
	 */
	public function get_warehousebins($whseID) {
		return $this->getWarehouseBins($whseID);
	}

	/**
	 * Return WarehouseBin objects filtered by warehouse column
	 * @return WarehouseBin[]|ObjectCollection
	 */
	public function getWarehouseBins($whseID) {
		$areBinsRanged = WarehouseQuery::create()->are_binsranged($whseID);

		if ($areBinsRanged) {
			$this->addAsColumn('start', 'WarehouseBin.BnctBinFrom');
			$this->addAsColumn('through', 'WarehouseBin.BnctBinThru');
			$this->select(array('start', 'through'));
		} else {
			$this->select('BnctBinFrom');
		}
		return $this->findByWarehouse($whseID);
	}
}
