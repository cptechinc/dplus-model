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
		'netamount'     => 'bkgdneamt',
		
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
}
