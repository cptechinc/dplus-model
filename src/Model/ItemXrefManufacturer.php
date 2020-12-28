<?php

use Base\ItemXrefManufacturer as BaseItemXrefManufacturer;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'mfcp_item_xref' table.
 *
 * FKRELATIONSHIPS: ItemMasterItem, Vendor
 */
class ItemXrefManufacturer extends BaseItemXrefManufacturer {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'vendorid'     => 'apvevendid',
		'vendoritemid' => 'mcxrvenditemnbr',
		'theiritemid'  => 'mcxrvenditemnbr',
		'itemid'       => 'inititemnbr',
		'unitofm'      => 'mcxruom',
		'price'        => 'mcxrprice',
		'cost'         => 'mcxrcost',
		'available'    => 'mcxravail',
		'dateupdated'  => 'mcxrchgdate',
		'date'		   => 'dateupdtd',
		'time'		   => 'timeupdtd',
		// Foreign Key Relationship
		'item'         => 'itemMasterItem',
		'imitem'       => 'itemMasterItem'
	);

	public function getUom() {
		return UnitofMeasurePurchaseQuery::create()->findOneByCode($this->unitofm);
	}
}
