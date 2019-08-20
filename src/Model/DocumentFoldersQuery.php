<?php

use Base\DocumentFoldersQuery as BaseDocumentFoldersQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'doc_control' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByFolder()
 *
 */
class DocumentFoldersQuery extends BaseDocumentFoldersQuery {
	use QueryTraits;

	/**
	 * Return the first DocumentFolders filtered by the DoccFolder column
	 * @param  string $folder Document Folder
	 * @return DocumentFolders
	 */
	public function findOneByFolder($folder) {
		return $this->findOneByDoccfolder($folder);
	}
}
