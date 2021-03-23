<?php

use Base\DocumentFolderQuery as BaseDocumentFolderQuery;

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
 * @method  DocumentFolder findOneByFolder($folder) Filter Return the first DocumentFolder filtered by the DoccFolder column
 * 
 * Find
 *
 *
 */
class DocumentFolderQuery extends BaseDocumentFolderQuery {
	use QueryTraits;
}
