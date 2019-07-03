<?php

use Base\ItemPricing as BaseItemPricing;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'inv_item_price' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class ItemPricing extends BaseItemPricing {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'      => 'intitemnbr',
		'baseprice'   => 'inprpricbase',
		'qty'         => 'inprpricunit',
		'price'       => 'inprpricpric',
		'updated'     => 'inprpriclastdate',
	);

	const QTY_BREAKS = 10;

	/**
	 * Return Price breaks, that have non empty values
	 *
	 * @return string
	 */
	public function get_qtybreaks() {
		$pricebreaks = array();

		$colbase_qty = 'inprpricunit';
		$colbase_price = 'inprpricpric';

		for ($i = 1; $i < self::QTY_BREAKS; $i++) {
			$col_price = $colbase_price.$i;

			if ($this->$col_price > 0) {
				$col_qty = $colbase_qty.$i;
				$pricebreaks[$this->$col_qty] = $this->$col_price;
			}
		}
		return $pricebreaks;
	}
}
