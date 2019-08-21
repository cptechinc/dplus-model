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
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 *
 * FindOne
 * @method  DocumentFolders findOneByFolder($folder) Filter Return the first DocumentFolders filtered by the DoccFolder column
 * 
 * Find
 *
 *
 */
class DocumentFoldersQuery extends BaseDocumentFoldersQuery {
	use QueryTraits;
}
