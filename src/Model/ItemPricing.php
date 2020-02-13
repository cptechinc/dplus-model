<?php

use Base\ItemPricing as BaseItemPricing;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_item_price' table.
 * 
 * NOTE: Foreign Key Relationship to ItemMasterItem
 */
class ItemPricing extends BaseItemPricing {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'itemid'      => 'inititemnbr',
		'baseprice'   => 'inprpricbase',
		'qty'         => 'inprpricunit',
		'price'       => 'inprpricpric',
		'updated'     => 'inprpriclastdate',
		'item'        => 'itemMasterItem'
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

	/**
	 * Return the Number of Qty Breaks
	 * @return int
	 */
	public function count_qtybreaks() {
		return self::QTY_BREAKS;
	}

	/**
	 * Return Quantity at break
	 * @param  int    $break Break
	 * @return float
	 */
	public function get_pricebreak_qty(int $break) {
		if ($break > self::QTY_BREAKS) {
			return 0;
		} else{
			if ($break == 0) {
				return '';
			}
			$col = self::get_pricebreak_qty_column($break);
			return $this->$col;
		}
	}

	/**
	 * Return Unit Column at Qty Break
	 *
	 * @param  int $break
	 * @return string
	 */
	public static function get_pricebreak_qty_column(int $break) {
		$col_base = 'inprpricunit';

		if ($break <= self::QTY_BREAKS) {
			return $col_base . $break;
		} else {
			return '';
		}
	}

	/**
	 * Return Price at break
	 * @param  int    $break Break
	 * @return float
	 */
	public function get_pricebreak_price(int $break) {
		if ($break > self::QTY_BREAKS) {
			return 0;
		} else {
			if ($break == 0) {
				return $this->baseprice;
			}
			$col = self::get_pricebreak_price_column($break);
			return $this->$col;
		}
	}

	/**
	 * Return Price Column at Qty Break
	 *
	 * @param  int $break
	 * @return string
	 */
	public static function get_pricebreak_price_column(int $break) {
		$col_base = 'inprpricpric';

		if ($break <= self::QTY_BREAKS) {
			return $col_base . $break;
		} else {
			return '';
		}
	}

	/**
	 * Return Price at break
	 * @param  int    $break Break
	 * @return float
	 */
	public function get_pricebreak_margin(int $break) {
		$item = $this->item;
		$eachprice = $this->get_eachprice($break);

		if ($eachprice > 0) {
			$markup = $eachprice - $item->standardcost;
			return $markup / $eachprice * 100;
		} else {
			return 0;
		}
	}

	/**
	 * Returns the Each Price at Qty Break
	 *
	 * @param  int $break Qty Break
	 * @return float
	 */
	public function get_eachprice(int $break) {
		$price = $this->get_pricebreak_price($break);
		$item = $this->item;
		return $price / $item->unitofmsale->conversion;
	}
}
