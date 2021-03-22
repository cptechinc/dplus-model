<?php

use Base\ItemXrefVendorQuery as BaseItemXrefVendorQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'vend_item_xref' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByVendorid(string $vendorID)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  ItemXrefVendorQuery filterByVendorid(string $vendorID)      Filter the Query by the apvevendid column
 *
 * FindOneByXXX()
 *
 *
 * FindByXXX()
 *
 */
class ItemXrefVendorQuery extends BaseItemXrefVendorQuery {
	use QueryTraits;

	/**
	 * Filter the query on the ApveVendId column
	 * @param  string $vendorID     The value to use as filter.
	 * @param  string $comparison   Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return ItemXrefVendorQuery  The current query, for fluid interface
	 */
	public function filterByVendorid($vendorID = null, $comparison = null) {
		return $this->filterByApvevendid($vendorID, $comparison);
	}

	/**
	 * Filter the query on the inititemnbr column
	 * @param  string $itemID     The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return self               The current query, for fluid interface
	 */
	public function filterByItemid($itemID, $comparison = null) {
		return $this->filterByInititemnbr($itemID, $comparison);
	}

	/**
	 * Filter the by the X-ref Key
	 * @param  string $key        [vendorid, venditemid, itemid]
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return ItemXrefVendoruery The current query, for fluid interface
	 */
	public function filterByXrefKey(array $key = [], $comparison = null) {
		$cols = [
			$this->tablemap_column(ItemXrefVendor::get_aliasproperty('vendorid')),
			$this->tablemap_column(ItemXrefVendor::get_aliasproperty('vendoritemid')),
			$this->tablemap_column(ItemXrefVendor::get_aliasproperty('itemid'))
		];
		return $this->where("CONCAT(".implode(",'-',", $cols).") $comparison ?", implode('-', $key));
	}
}
