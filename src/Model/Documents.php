<?php

use Base\Documents as BaseDocuments;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Skeleton subclass for representing a row from the 'doc_index' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class Documents extends BaseDocuments {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'folder'      => 'doccfolder',
		'tag'         => 'docitag',
		'filename'    => 'docifilename',
		'date'        => 'docidate',
		'time'        => 'docitime',
		'title'       => 'dociref',
		'user'        => 'dociuser',
		'reference1'  => 'docifld1'
	);

	public function get_folderdescription() {
		return DocumentFoldersQuery::create()->select(DocumentFolders::get_aliasproperty('description'))->findOneByTag($this->tag);
	}
}
