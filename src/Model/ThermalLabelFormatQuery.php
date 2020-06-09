<?php

use Base\ThermalLabelFormatQuery as BaseThermalLabelFormatQuery;

use Dplus\Model\QueryTraits;
/**
 * Skeleton subclass for performing query and update operations on the 'thermal_label_head' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneById($id)
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterBy
 *
 * FindOneBy
 * @method  Printer findOneById(string $id)		Return the first Printer filtered by the PrctPrinterId column
 *
 * FindBy
 */
class ThermalLabelFormatQuery extends BaseThermalLabelFormatQuery {
	use QueryTraits;
}
