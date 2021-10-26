<?php

use Base\ProspectSourceQuery as BaseProspectSourceQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'prosp_sorc_code' table.
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
 * @method  ProspectSource findOneByCode(string $code)      Return the first ProspectSourcefiltered by the PrtbSorcCode column
 *
 * FindByXXX()
 *
 */
class ProspectSourceQuery extends BaseProspectSourceQuery {
	use QueryTraits;
}
