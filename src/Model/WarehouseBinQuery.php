<?php

use Base\WarehouseBinQuery as BaseWarehouseBinQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_bin_cntrl' table.
 */
class WarehouseBinQuery extends BaseWarehouseBinQuery {
	use QueryTraits;

	/**
	 * Returns if bin is a valid bin at the warehouse according to warehouse bin rules
	 *
	 * @param  string $whseID Warehouse ID
	 * @param  string $binID  Bin ID
	 * @return bool           Is bin valid?
	 */
	public function validate_bin($whseID, $binID) {
		$bins_areranged = WarehouseQuery::create()->are_binsranged($whseID);

		if ($bins_areranged) {
			$this->condition('from', 'WarehouseBin.BnctBinFrom <= ?', $binID);
			$this->condition('thru', 'WarehouseBin.BnctBinThru >= ?', $binID);
			$this->where(array('from', 'thru'), Criteria::LOGICAL_AND);
		} else {
			$this->filterbyFrom($binID);
		}

		$this->filterByWarehouse($whseID);
		return boolval($this->count());
	}

	/**
	 * Return Bincntl objects filtered by warehouse column
	 *
	 * @return WarehouseBinQuery[]|ObjectCollection
	 */
	public function get_warehousebins($whseID) {
		$bins_areranged = WarehouseQuery::create()->are_binsranged($whseID);

		if ($bins_areranged) {
			$this->addAsColumn('start', 'WarehouseBin.BnctBinFrom');
			$this->addAsColumn('through', 'WarehouseBin.BnctBinThru');
			$this->select(array('start', 'through'));
		} else {
			$this->select('BnctBinFrom');
		}
		return $this->findByWarehouse($whseID);
	}
}
