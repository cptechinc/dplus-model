<?php

use Base\ItemXrefKey as BaseItemXrefKey;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'item_xref_key' table.
 * REPRESENTS: X-Ref relationship to search
 * FKRELATIONSHIPS: Customer, Item, Vendor
 */
class ItemXrefKey extends BaseItemXrefKey {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const SOURCES = [
		0 => 'item',
		1 => 'cxm',
		2 => 'mxrfe',
		3 => 'vxm',
		4 => 'i2ip',
		5 => 'i2ic',
		6 => 'upcx',
		7 => 'shortitem',
		8 => 'nonstock',
		9 => 'ilookup',
	];


	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = [
		'itemid'            => 'inititemnbr',
		'description'       => 'initdesc1',
		'description1'      => 'initdesc1',
		'description2'      => 'initdesc2',
		'xitemid'           => 'rkeytheiritem',
		'xdescription1'     => 'rkeytheiritemdesc1',
		'xdescription2'     => 'rkeytheiritemdesc2',
		'source'            => 'rkeysource',
		'sourcedescription' => 'rkeysourcedesc',
		'xkey1'             => 'rkeycvid',
		'date'              => 'dateupdtd',
		'time'              => 'timeupdtd',
	];
}
