<?php

use Base\WarehouseNoteQuery as BaseWarehouseNoteQuery;

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
class WarehouseNoteQuery extends BaseWarehouseNoteQuery {
	use QueryTraits;

	/**
	 * Filter the Query for the Iype Statement
	 *
	 * @return WarehouseNoteQuery
	 */
	public function filterByTypeStatement() {
		return $this->filterbyType(WarehouseNote::TYPE_STATEMENT);
	}

	/**
	 * Filter the Query for the Iype Invoice
	 *
	 * @return WarehouseNotesQuery
	 */
	public function filterByTypeInvoice() {
		return $this->filterbyType(WarehouseNote::TYPE_INVOICE);
	}
}
