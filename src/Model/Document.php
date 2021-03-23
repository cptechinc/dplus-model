<?php

use Base\Document as BaseDocument;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'doc_index' table.
 *
 * FKRELATIONSHIPS: DocumentFolder
 */
class Document extends BaseDocument {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'folder'	  => 'doccfolder',
		'tag'		  => 'docitag',
		'filename'	  => 'docifilename',
		'date'		  => 'docidate',
		'time'		  => 'docitime',
		'title' 	  => 'dociref',
		'user'		  => 'dociuser',
		'reference1'  => 'docifld1',
		'reference2'  => 'docifld2',
		// Foreign Key
		'directory'   => 'documentFolder'
	);

	/**
	 * Returns Folder Description
	 * @return string
	 */
	public function get_folderdescription() {
		return $this->folderDescription();
	}

	public function folderDescription() {
		return DocumentFolderQuery::create()->select(DocumentFolder::aliasproperty('description'))->findOneByTag($this->tag);
	}
}
