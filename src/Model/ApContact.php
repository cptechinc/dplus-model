<?php

use Base\ApContact as BaseApContact;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ap_contact' table.
 */
class ApContact extends BaseApContact {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'vendorid'   => 'apvevendid',
		'contactid'  => 'apcpcontid',
		'title'      => 'apcptitl',
		'whseid'     => 'apcpwhse',
		'pocontact'  => 'apcppocont',
		'date'       => 'dateupdtd',
		'time'       => 'timeupdtd'
	);

	/**
	 * Return Contact's PhoneBook Record
	 * @return PhoneBook
	 */
	public function getContact() {
		$q = PhoneBookQuery::create();
		$q->filterByType(PhoneBook::TYPE_VENDORCONTACT);
		$q->filterByVendorid($this->vendorid)->filterByContact($this->contactid);
		return $q->findOne();
	}
}
