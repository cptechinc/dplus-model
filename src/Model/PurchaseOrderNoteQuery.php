<?php

use Base\PurchaseOrderNoteQuery as BasePurchaseOrderNoteQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_po_head_det' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findByPonbr()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterBy
 * @method  PurchaseOrderNotesQuery filterByPonbr(string $ponbr)      Filter the query on the pohdnbr column
 *
 * FindOneBy
 *
 * FindBy
 *
 */
class PurchaseOrderNotesQuery extends BasePurchaseOrderNoteQuery {
	use QueryTraits;

	public function filterHeader() {
		return $this->filterByLinenbr(0);
	}
}
