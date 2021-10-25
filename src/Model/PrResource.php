<?php

use Base\PrResource as BasePrResource;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'pr_resource_cd' table.
 * FKRELATIONSHIPS: PrWorkCenter
 */
class PrResource extends BasePrResource {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const CODELENGTH = 6;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'           => 'pmtbrsrcid',
		'code'         => 'pmtbrsrcid',
		'description'  => 'pmtbsrcname',
		'name'         => 'pmtbsrcname',
		'workcenterid' => 'pmtbdeptid',
		'date'         => 'dateupdtd',
		'time'         => 'timeupdtd',
		// Foreign Key Relationships
		'workcenter'   => 'prWorkCenter'
	);
}
