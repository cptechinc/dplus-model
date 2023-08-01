<?php

use Base\PrinterQuery as BasePrinterQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'printer_control' table.
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
 *
 */
class PrinterQuery extends BasePrinterQuery {
	use QueryTraits;

	/**
	 * Filter the Query by Printer Type
	 * @param  mixed $type
	 * @param  string|null $comparison
	 * @return PrinterQuery
	 */
	public function filterByType($type = null, $comparison = null) {
		return $this->filterByPrctprtrtype($type, $comparison);
	}
}
