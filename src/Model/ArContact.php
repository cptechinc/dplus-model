<?php

use Base\ArContact as BaseArContact;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_cont_mast' table.
 * FKRELATIONSHIPS: Customer, CustomerShipto
 */
class ArContact extends BaseArContact {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const YN_TRUE  = 'Y';
	const YN_FALSE = 'N';

	const PRIMARY_BUYER_CODE = 'P';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'custid'       => 'arcucustid',
		'shiptoid'     => 'arstshipid',
		'contactid'    => 'arcpcontid',
		'title'        => 'arcptitl',
		'ar'           => 'arcparcont',
		'dunning'      => 'arcpduncont',
		'buyer'            => 'arcpbuycont',
		'acknowledgement'  => 'arcpackcont',
		'certs'            => 'arcpcertcont',	
	];

	/**
	 * Return if Contact is of X type
	 * @param  string $type (ex. dunning)
	 * @return bool
	 */
	public function isXType($type) {
		if ($this->aliasproperty_exists($type) === false) {
			return false;
		}
		return strtoupper($this->$type) == self::YN_TRUE;
	}

	/**
	 * Return if this is an AR contact
	 * @return bool
	 */
	public function isAr() {
		return $this->isXType('ar');
	}

	/**
	 * Return if this is a Dunning contact
	 * @return bool
	 */
	public function isDunning() {
		return $this->isXType('dunning');
	}

	/**
	 * Return if this is the primary buyer
	 * @return bool
	 */
	public function isPrimaryBuyer() {
		return strtoupper($this->buyercontact) == self::PRIMARY_BUYER_CODE;
	}

	/**
	 * Return if this is a Buyer contact
	 * @return bool
	 */
	public function isBuyer() {
		return $this->isXType('buyer') || $this->isBuyerType();
	}

	/**
	 * Return if this is an Acknowledgement contact
	 * @return bool
	 */
	public function isAcknowledgement() {
		return $this->isXType('acknowledgement');
	}

	/**
	 * Return if this is a Certs contact
	 * @return bool
	 */
	public function isCerts() {
		return $this->isXType('certs');
	}
	
}
