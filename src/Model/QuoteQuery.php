<?php

use Base\QuoteQuery as BaseQuoteQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'quote_header' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByQuotenumber()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method  QuoteQuery filterByCustid(string $custID)      Filter the query on the ArcuCustid column
 *
 * FindOne
 * @method  Quote findOneByQuotenumber(string $qnbr)      Return the first Quote filtered by the Qthdid column
 *
 * Find
 *
 */
class QuoteQuery extends BaseQuoteQuery {
	use QueryTraits;
}
