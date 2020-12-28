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
 * @method  ApBuyer filterByVendorid(string $vendorID)      Return the first ApBuyercode filtered by the apvevendid column
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
	 *
	 * @param     string $apvevendid The value to use as filter.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @param  string $vendorID   The value to use as filter.
	 * @param  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return ItemXrefManufacturerQuery The current query, for fluid interface
	 */
	public function filterByVendorid($vendorID = null, $comparison = null) {
		$this->filterByApvevendid($vendorID, $comparison);
	}
}
