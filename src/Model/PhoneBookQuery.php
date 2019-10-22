<?php

use Base\PhoneBookQuery as BasePhoneBookQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'phoneadr' table.
 *
 *
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByItemid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method     KitItemsQuery filterByKititemid(string $itemID) Filter the query on the ktdtkey1 column
 *
 *
 */
class PhoneBookQuery extends BasePhoneBookQuery {
	use QueryTraits;
	
	public function filterTypeCustomer() {
		return $this->filterByPhadtype(PhoneBook::TYPE_CUSTOMER);
	}

	public function filterTypeCustomerShipto() {
		return $this->filterByPhadtype(PhoneBook::TYPE_CUSTOMERSHIPTO);
	}

	public function filterTypeCustomerContact() {
		return $this->filterByPhadtype(PhoneBook::TYPE_CUSTOMERCONTACT);
	}

	public function filterTypeVendor() {
		return $this->filterByPhadtype(PhoneBook::TYPE_VENDOR);
	}
}
