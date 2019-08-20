<?php

use Base\ContactQuery as BaseContactQuery;
use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_cont_mast' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findByCustid()
 *
 */
class ContactQuery extends BaseContactQuery {
	use QueryTraits;
	/**
	 * Return Contact filtered by the Arcucustid, Arstshipid, ArcpContId column
	 * @param  string   $custID       Customer ID
	 * @param  string   $shipID       Shipto ID
	 * @param  string   $contactID    Contact ID
	 * @return Contact               The current query, for fluid interface
	 */
	public function findOneByCustidShiptoidContactid($custID, $shipID, $contactID) {
		return $this->filterByCustidShiptoidContactid($custID, $shipID, $contactID)->findOne();
	}

	/**
	 * Filter the query on the Arcucustid, Arstshipid, ArcpContId column
	 * @param  string $custID       Customer ID
	 * @param  string $shipID       Shipto ID
	 * @param  string $contactID    Contact ID
	 * @return $this|ContactQuery   The current query, for fluid interface
	 */
	public function filterByCustidShiptoidContactid($custID, $shipID, $contactID) {
		$this->filterByArcucustid($custID);
		$this->filterByArstshipid($shipID);
		$this->filterByArcpcontid($contactID);
		return $this;
	}

}
