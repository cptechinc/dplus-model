<?php

use Base\PhoneBookQuery as BasePhoneBookQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'phoneadr' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByCustid()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  PhoneBookQuery filterByCustid(string $custID)      filter the query by the phadid column
 * @method  PhoneBookQuery filterByShiptoid(string $shiptoID)  filter the query by the phadsubid column
 * @method  PhoneBookQuery filterByVendorid(string $vendorID)  filter the query by the phadid column
 * @method  PhoneBookQuery filterByShipfromid(string $custID)  filter the query by the phadsubid column
 *
 * FindOneByXXX()
 *
 * FindByXXX()
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

	public function filterTypeVendorShipfrom() {
		return $this->filterByPhadtype(PhoneBook::TYPE_VENDORSHIPFROM);
	}

	public function filterTypeVendorContact() {
		return $this->filterByPhadtype(PhoneBook::TYPE_VENDORCONTACT);
	}

	/**
	 * Filter the query on the PhadId column
	 * Example usage:
	 * <code>
	 * $query->filterByPhadid('fooValue');   // WHERE PhadId = 'fooValue'
	 * $query->filterByPhadid('%fooValue%', Criteria::LIKE); // WHERE PhadId LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $phadid The value to use as filter.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this|ChildPhoneBookQuery The current query, for fluid interface
	 */
	public function filterByVendorid($phadid = null, $comparison = null) {
		return $this->filterByPhadid($phadid, $comparison);
	}

	public function FilterByType($type = null, $comparision = null) {
		return $this->filterByPhadtype($type, $comparision);
	}
}
