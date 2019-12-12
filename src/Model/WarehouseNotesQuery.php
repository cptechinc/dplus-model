<?php

use Base\WarehouseNotesQuery as BaseWarehouseNotesQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_whse_invc_stmt' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByType
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method  WarehouseNotesQuery filterByType(string $type)     Filter the Query by the QnType column
 *
 * FindOne
 * 
 *
 * Find
 *
 */
class WarehouseNotesQuery extends BaseWarehouseNotesQuery {
	use QueryTraits;

	/**
	 * Filter the Query for the Iype Statement
	 *
	 * @return WarehouseNotesQuery
	 */
	public function filterByTypeStatement() {
		return $this->filterbyType(WarehouseNotes::TYPE_STATEMENT);
	}

	/**
	 * Filter the Query for the Iype Invoice
	 *
	 * @return WarehouseNotesQuery
	 */
	public function filterByTypeInvoice() {
		return $this->filterbyType(WarehouseNotes::TYPE_INVOICE);
	}
}
