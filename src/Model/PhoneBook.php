<?php

use Base\PhoneBook as BasePhoneBook;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'phoneadr' table.
 *
 *
 */
class PhoneBook extends BasePhoneBook {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE_CUSTOMER        = 'C';
	const TYPE_CUSTOMERCONTACT = 'CC';
	const TYPE_CUSTOMERSHIPTO  = 'CS';
	const TYPE_VENDOR          = 'V';
	const TYPE_VENDORCONTACT   = 'V';
	const TYPE_VENDORSHIPTO    = 'V';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'                    => 'phadtype',
		'key1'                    => 'phadid',
		'key2'                    => 'phadsubid',
		'sequence'                => 'phadsubid',
		'contact'                 => 'phadcont',
		'is_international'        => 'phadintl',
		'phone'                   => 'phadtelenbr',
		'extension'               => 'phadteleext',
		'international'           => 'phadintnbr',
		'international_extension' => 'phadintext',
		'fax'                     => 'phadfaxnbr',
		'fax_international'       => 'phadifaxnbr',
		'cellphone'               => 'phadcellnbr',
		'homephone'               => 'phadhomenbr',
		'homephone_international' => 'phadihomenbr',
		'website'                 => 'phadwebaddr',
		'email'                   => 'phademailaddr',
		'name'                    => 'phadname',
		'contactname'             => 'phadcontname',

		'custid'                  => 'phadid',
		'shiptoid'                => 'phadsubid',
	);

}
