<?php

use Base\ItemPricingDiscount as BaseItemPricingDiscount;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_price_discount' table.
 * PURPOSE: Item Pricing for Customer
 * RELATIONSHIPS: ItemMasterItem, Customer
 * KEY: type, table, startdate, custid, custcode, itemid, itemgroupcode, salespersonid
 */
class ItemPricingDiscount extends BaseItemPricingDiscount {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE_PRICEDISCOUNT = 'PD';
	const TABLE_CUSTID_ITEMID = 3;

	const UNITS_AVAILABLE = 5;
	const METHOD_S = 'S';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'      => 'oepctype',
		'table'     => 'oepctbltype',
		'startdate' => 'oepcstrtdate',
		'custid'    => 'oepccustid',
		'custcode'  => 'oepccustcode',
		'itemid'    => 'oepcitemnbr',
		'itemgroupcode' => 'oepcitemgrup',
		'salespersonid' => 'oepcsp',
		'baseprice' => 'oepcpricbase',
		'lastchangedate' => 'oepclastchgdate',
		'standardcost'   => 'oepcstancost',
		'contcost'       => 'oepccontcost',
		'enddate'        => 'oepcenddate',
		'percent'        => 'oepcpcnt',
		'date'                  => 'dateupdtd',
		'time'                  => 'timeupdtd',
		'method'                => 'oepcmeth',
		'qtybreak'              => 'oepcqtybrk'
	);

	public function price($x = 0) {
		if ($x > 0 && $x < self::UNITS_AVAILABLE + 1) {
			$base = 'oepcpricprice';
			$col = $base.$x;
			return $this->$col;
		} else {
			return false;
		}
	}

	public function priceunit($x = 0) {
		if ($x > 0 && $x < self::UNITS_AVAILABLE + 1) {
			$base = 'oepcpricunit';
			$col = $base.$x;
			return $this->$col;
		} else {
			return false;
		}
	}

	public function setPrice($x = 0, $val) {
		if ($x > 0 && $x < self::UNITS_AVAILABLE + 1) {
			$base = 'oepcpricpric';
			$col = $base.$x;
			$func = "set".ucfirst($col);
			return $this->$func($val);
		}
	}

	public function setPriceunit($x = 0, $val) {
		if ($x > 0 && $x < self::UNITS_AVAILABLE + 1) {
			$base = 'oepcpricunit';
			$col = $base.$x;
			$func = "set".ucfirst($col);
			return $this->$func($val);
		}
	}

	public function setDefaults() {
		$this->setPercent('0.0000000');
		$this->setContcost('0.000');
		$this->setStandardcost('0.0000000');
		$this->setEnddate('00000000');
		$this->setMethod('S');
		$this->setQtybreak(0);
		
		for ($i = 1; $i < self::UNITS_AVAILABLE + 1; $i++) {
			$this->setPrice($i, '0.0000000');
			$this->setPriceunit($i, 0);
		}
	}

}
