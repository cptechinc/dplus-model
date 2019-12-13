<?php

use Base\UnitofMeasurePurchaseQuery as BaseUnitofMeasurePurchaseQuery;

/**
 * Class for performing query and update operations on the 'inv_uom_pur' table.
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
 * @method  UnitofMeasurePurchase findOneByCode(string $code)      Return the first UnitofMeasurePurchase filtered by the intbuompur column
 *
 * FindByXXX()
 *
 *
 */
class UnitofMeasurePurchaseQuery extends BaseUnitofMeasurePurchaseQuery {
    use QueryTraits;
}
