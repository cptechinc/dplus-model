<?php

use Base\DocumentsQuery as BaseDocumentsQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'doc_index' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByFolder()
 *
 */
class DocumentsQuery extends BaseDocumentsQuery {
	use QueryTraits;

	/**
	 * Filter by the DociTag column
	 * @param  string $tag Tag to filter on
	 * @return DocumentsQuery
	 */
	public function filterByTag($tag) {
		return $this->filterByDocitag($tag);
	}

	/**
	 * Filter by the DociFld1 column
	 * @param  string $ref Tag to filter on
	 * @return DocumentsQuery
	 */
	public function filterByReference1($ref) {
		return $this->filterByDocifld1($ref);
	}

	/**
	 * Filter by the DociFilename column
	 * @param  string $filename filename to filter on
	 * @return DocumentsQuery
	 */
	public function filterByFilename($filename) {
		return $this->filterByDocifilename($filename);
	}

	/**
	 * Filter by the DoccFolder column
	 * @param  string $folder folder to filter on
	 * @return DocumentsQuery
	 */
	public function filterByFolder($folder) {
		return $this->filterByDoccfolder($folder);
	}
}
