<?php

use Base\DocumentsQuery as BaseDocumentsQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'doc_index' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByFolder()
 * 
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method  DocumentsQuery filterByFolder($folder)       Filter the query by the DoccFolder column
 * @method  DocumentsQuery filterByTag($folder)          Filter the query by the DociTag column
 * @method  DocumentsQuery filterByReference1($folder)   Filter the query by the Docifld column
 * @method  DocumentsQuery filterByFilename($folder)     Filter the query by the DociFilename column
 * 
 * FindOne
 * 
 * 
 * Find
 *
 */
class DocumentsQuery extends BaseDocumentsQuery {
	use QueryTraits;
}
