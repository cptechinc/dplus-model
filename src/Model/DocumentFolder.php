<?php

use Base\DocumentFolder as BaseDocumentFolder;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'doc_control' table.
 */
class DocumentFolder extends BaseDocumentFolder {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'folder'      => 'doccfolder',
		'description' => 'doccfolderdesc',
		'directory'   => 'doccdir',
		'tag'         => 'docctag'
	);
}
