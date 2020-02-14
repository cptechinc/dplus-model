<?php

use Base\ItemXrefCustomer as BaseItemXrefCustomer;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;


/**
 * Class for representing a row from the 'cust_item_xref' table.
 *
 * NOTE: Foreign Key Relationship to ItemMasterItem
 */
class ItemXrefCustomer extends BaseItemXrefCustomer {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'custid'          => 'arcucustid',
		'custID'          => 'arcucustid',
		'custitemid'      => 'oexrcustitemnbr',
		'custitemID'      => 'oexrcustitemnbr',
		'theiritemid'     => 'oexrcustitemnbr',
		'itemid'          => 'inititemnbr',
		'itemID'          => 'inititemnbr',
		'description'     => 'oexrcustitemdesc',
		'description2'    => 'oexrcustitemdesc2',
		'revision'        => 'oexrreveision',
		'price_customer'  => 'oexrcustprice',
		'qty_percase'     => 'oexrqtypercase',
		'qty_pack_inner'  => 'oexrinnerpackqty',
		'qty_pack_outer'  => 'oexrouterpackqty',
		'item'            => 'itemMasterItem', // FK GET
		'date'		      => 'dateupdtd',
		'time'		      => 'timeupdtd'
	);
}
