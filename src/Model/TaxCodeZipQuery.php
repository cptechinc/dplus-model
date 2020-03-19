<?php

use Base\TaxCodeZipQuery as BaseTaxCodeZipQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_cust_txzp' table.
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
 * @method  TaxCodeZip findOneByCode(string $code)      Return the first TaxCodeZip filtered by the artbtxzptaxcode column
 *
 * FindByXXX()
 *
 *
 */
class TaxCodeZipQuery extends BaseTaxCodeZipQuery {
	use QueryTraits;
}
