<?php

use Base\ItemPricing as BaseItemPricing;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'inv_item_price' table.
 *
 * NOTE: Foreign Key Relationship to itemMasterItem
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
			$colbase_qty = 'inprpricunit';
			$col_qty = $colbase_qty.$break;
			return $this->$col_qty;
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
			$colbase_price = 'inprpricpric';
			$col_price = $colbase_price.$break;
			return $this->$col_price;
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

	public function get_eachprice(int $break) {
		$price = $this->get_pricebreak_price($break);
		$item = $this->item;
		return $price / $item->unitofmsale->conversion;
	}
}
