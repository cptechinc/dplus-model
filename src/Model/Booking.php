<?php

use Base\Booking as BaseBooking;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_book_log_head' table.
 * 
 * FKRELATIONSHIPS: Customer, CustomerShipto, SalesPerson
 */
class Booking extends BaseBooking {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'ordernumber'   => 'bklhordrnbr',
		'userid'	    => 'bklhlogin',
		'orderdate'     => 'bklhordrdate',
		'salesperson1'  => 'bklhsaleper1',
		'salesperson2'  => 'bklhsaleper2',
		'salesperson3'  => 'bklhsaleper3',
		'custid'        => 'arcucustid',
		'shiptoid'      => 'arstshipid',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd',

		// ALIASES for Foreign Keys
		'salesperson'  => 'salesPerson',
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