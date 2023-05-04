<?php

use Base\PoReceivingHeadQuery as BasePoReceivingHeadQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'po_tran_head' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneById($id)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterBy
 *
 * FindOneBy
 * @method  Printer findOneByPonbr(string $ponbr)		Return the first Printer filtered by the Pothnbr column
 *
 * FindBy
 *
 *
 */
class PoReceivingHeadQuery extends BasePoReceivingHeadQuery {
	use QueryTraits;
}
