<?php

use Base\DocumentsQuery as BaseDocumentsQuery;

/**
 * Skeleton subclass for performing query and update operations on the 'doc_index' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 */
class DocumentsQuery extends BaseDocumentsQuery {

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
