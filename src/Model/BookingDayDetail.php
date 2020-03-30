<?php

use Base\BookingDayDetail as BaseBookingDayDetail;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_book_by_day_det' table.
 * FKRELATIONSHIPS: Customer, CustomerShipto, SalesPerson
 */
class BookingDayDetail extends BaseBookingDayDetail {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'bookingdate'   => 'bkgddate',
		'custid'        => 'arcucustid',
		'shiptoid'      => 'arstshipid',
		'ordernumber'   => 'bkgdordrnbr',
		'baseorder'     => 'bkgdordrbase',
		'linenumber'    => 'bkgdorigline',
		'itemid'        => 'inititemnbr',
		'salesperson1'  => 'arspsaleper1',
		'before_qty'    => 'bkgdb4qty',
		'before_price'  => 'bkgdb4pric',
		'before_uom'    => 'bkgdb4uom',
		'after_qty'     => 'bkgdaftqty',
		'after_price'   => 'bkgdaftpric',
		'after_uom'     => 'bkgdaftuom',
		'netamount'     => 'bkgdnetamt',
		'amount'        => 'bkgdnetamt',

		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd',

		// ALIASES for Foreign Keys
		'salesperson'  => 'salesPerson',
		'item'         => 'itemMasterItem'
	);

	/**
	 * Returns SalesOrder|SalesHistory related to this booking
	 *
	 * @return SalesOrder|SalesHistory
	 */
	public function getOrder() {
		$q = SalesOrderQuery::create()->filterByOrdernumber($this->ordernumber);

		if ($q->count()) {
			return $q->findOne();
		} else {
			return SalesHistoryQuery::create()->findOneByOrdernumber($this->ordernumber);
		}
	}

	public function getItemMasterItem() {
		return ItemMasterItemQuery::create()->findOneByItemid($this->itemid);
	}

	/**
	 * Returns if Qty Columns are not the same value
	 *
	 * @return bool
	 */
	public function qty_changed() {
		return $this->before_qty != $this->after_qty;
	}

	/**
	 * Returns if before qty is less than after qty
	 *
	 * @return bool
	 */
	public function qty_increased() {
		return $this->before_qty < $this->after_qty;
	}

	/**
	 * Returns if before qty is more than after qty
	 *
	 * @return bool
	 */
	public function qty_decreased() {
		return $this->before_qty > $this->after_qty;
	}

	/**
	 * Returns if before price is different than after price
	 *
	 * @return bool
	 */
	public function price_changed() {
		return $this->before_price != $this->after_price;
	}

	/**
	 * Returns if before price is less than after price
	 *
	 * @return bool
	 */
	public function price_increased() {
		return $this->before_price < $this->after_price;
	}

	/**
	 * Returns if before price is more than after price
	 *
	 * @return bool
	 */
	public function price_decreased() {
		return $this->before_price > $this->after_price;
	}

	/**
	 * Returns if before net amount is less than after net amount
	 *
	 * @return bool
	 */
	public function netamount_increased() {
		return $this->netamount > 0;
	}
}
