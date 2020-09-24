<?php

use Base\ConfigQt as BaseConfigQt;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'qt_config' table.
 * 
 * PURPOSE: Quotes Config
 */
class ConfigQt extends BaseConfigQt {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'note_default_quote' => 'qttbconfdefquot',
		'note_default_pick'  => 'qttbconfdefpick',
		'note_default_pack'  => 'qttbconfdefpack',
		'note_default_invoice' => 'qttbconfdefinvc',
		'note_default_acknowledgement' => 'qttbconfdefack',
	);
}
