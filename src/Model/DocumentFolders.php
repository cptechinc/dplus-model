<?php

use Base\DocumentFolders as BaseDocumentFolders;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'doc_control' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class DocumentFolders extends BaseDocumentFolders {
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