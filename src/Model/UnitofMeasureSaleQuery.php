<?php

use Base\UnitofMeasureSaleQuery as BaseUnitofMeasureSaleQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_uom_sale' table.
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
 * @method  UnitofMeasureSale findOneByCode(string $code)      Return the first UnitofMeasureSale filtered by the intbuomsale column
 *
 * FindByXXX()
 *
 *
 */
class UnitofMeasureSaleQuery extends BaseUnitofMeasureSaleQuery {
    use QueryTraits;
}
