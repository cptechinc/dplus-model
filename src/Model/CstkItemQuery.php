<?php

use Base\CstkItemQuery as BaseCstkItemQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'cust_stock_det' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByCustid()
 * 
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  CstkHeadQuery filterByCustid(string $custID)          Filter the query on the arcucustid column
 * @method  CstkHeadQuery filterByShiptoid(string $shiptoID)      Filter the query on the arstshipid column
 *
 * FindOneByXXX()
 *
 * FindByXXX()
 *
 */
class CstkItemQuery extends BaseCstkItemQuery {
	use QueryTraits;

	/**
	 * Return Query filtered by the arcucustid, arstshiptoid columns
	 *
	 * @param string $custID
	 * @param string $shiptoID
	 * @return CstkHeadQuery
	 */
	public function filterByCustidShiptoid($custID, $shiptoID = '') {
		$this->filterByCustid($custID);
		if ($shiptoID) {
			$this->filterByShiptoid($shiptoID);
		}
		return $this;
	}
}
