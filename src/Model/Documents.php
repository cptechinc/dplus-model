<?php

use Base\Documents as BaseDocuments;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'doc_index' table.
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

	/**
	 * Returns Folder Description
	 * 
	 * @uses DocumentFoldersQuery
	 * @return string
	 */
	public function get_folderdescription() {
		return DocumentFoldersQuery::create()->select(DocumentFolders::get_aliasproperty('description'))->findOneByTag($this->tag);
	}
}
