<?php

use Base\SoRgaCodeQuery as BaseSoRgaCodeQuery;

/**
 * Class for performing query and update operations on the 'so_rgas_code' table.
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
 * @method  SoRgaCode findOneByCode(string $code)      Return the first SoRgaCode filtered by the oetbrgascode column
 *
 * FindByXXX()
 *
 *
 */
class SoRgaCodeQuery extends BaseSoRgaCodeQuery {
	use QueryTraits;
}
