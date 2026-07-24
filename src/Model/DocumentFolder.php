<?php

declare(strict_types=1);

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
	const COLUMN_ALIASES = [
		'folder'      => 'doccfolder',
		'description' => 'doccfolderdesc',
		'directory'   => 'doccdir',
		'tag'         => 'docctag'
	];
}
