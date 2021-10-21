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

	const MAXLENGTH_MNFRITEMID = 30;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'vendorid'     => 'apvevendid',
		'vendoritemid' => 'mcxrvenditemnbr',
		'theiritemid'  => 'mcxrvenditemnbr',
		'mnfrid'       => 'apvevendid',
		'mnfritemid'   => 'mcxrvenditemnbr',
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
		'imitem'       => 'itemMasterItem',
		'mnfr'         => 'vendor'
	);

	/**
	 * Return UnitofMeasurePurchase
	 * @return UnitofMeasurePurchase
	 */
	public function getUom() {
		return UnitofMeasurePurchaseQuery::create()->findOneByCode($this->unitofm);
	}
}
