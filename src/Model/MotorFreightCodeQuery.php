<?php

use Base\MotorFreightCodeQuery as BaseMotorFreightCodeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'so_mfrt_code' table.
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
 * @method  MotorFreightCode findOneByCode(string $code)      Return the first MotorFreightCode filtered by the Oe2tbMfrtCode column
 *
 * FindByXXX()
 *
 *
 */
class MotorFreightCodeQuery extends BaseMotorFreightCodeQuery {
	use QueryTraits;
}
