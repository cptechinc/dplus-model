<?php

use Base\TaxCodeStateQuery as BaseTaxCodeStateQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_cust_txst' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByCode()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 *
 * FindOneByXXX()
 * @method  TaxCodeState findOneByCode(string $code)      Return the first TaxCodeState filtered by the artbtxsttaxcode column
 *
 * FindByXXX()
 *
 *
 */
class TaxCodeStateQuery extends BaseTaxCodeStateQuery {
	use QueryTraits;
}
