<?php

use Base\QuoteDetailQuery as BaseQuoteDetailQuery;

use Dplus\Model\QueryTraits;

 /**
 * Class for performing query and update operations on the 'quote_detail' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findByQuotenumber()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 *
 * FindOne
 * 
 * Find
 * @method  QuoteDetail[]|ObjectCollection findByQuotenumber(string $qnbr)      Return the Quotedetails filtered by the Qthdid column
 *
 *
 */
class QuoteDetailQuery extends BaseQuoteDetailQuery {
	use QueryTraits;
}
