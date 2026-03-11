<?php

use Base\RcyclGeneratorQuery as BaseRcyclGeneratorQuery;
use Dplus\Model\QueryTraits;

/**
 * class for performing query and update operations on the 'rcycl_generator' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneById()
 * 
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOneByXXX()
 * @method  RcyclGenerator findOneById(string $id)      Return the first RcyclGenerator filtered by the rtbgenrid column
 *
 * FindByXXX()
 */
class RcyclGeneratorQuery extends BaseRcyclGeneratorQuery {
    use QueryTraits;
}
