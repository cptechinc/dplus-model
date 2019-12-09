<?php

use Base\GlCodeQuery as BaseGlCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Skeleton subclass for performing query and update operations on the 'gl_master' table.
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
 * @method  GlCode findOneByCode(string $code)      Return the first GlCode filtered by the glmaacct column
 *
 * FindByXXX()
 *
 */
class GlCodeQuery extends BaseGlCodeQuery {
	use QueryTraits;
}
