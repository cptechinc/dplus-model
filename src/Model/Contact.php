<?php

use Base\Contact as BaseContact;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'ar_cont_mast' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Contact extends BaseContact {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'custID'                  => 'arcucustid',
		'custid'                  => 'arcucustid',
		'shiptoid'                => 'arstshipid',
		'shiptoID'                => 'arstshipid',
		'contactid'               => 'arcpcontid',
		'contact'                 => 'arcpcontid',
		'id'                      => 'arcpcontid',
		'contactID'               => 'arcpcontid',
		'name'                    => 'arcpcontid',
		'title'                   => 'arcptitl',
		'contact_ar'              => 'arcparcont',
		'contact_dunning'         => 'arcpduncont',
		'contact_buyer'           => 'arcpbuycont',
		'contact_acknowledgement' => 'arcpacknow',
		'contact_certificate'     => 'arcpcertcontact'
	);
}
