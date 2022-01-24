<?php

use Base\DocumentQuery as BaseDocumentQuery;

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
 * @method  DocumentQuery filterByFolder($folder)       Filter the query by the DoccFolder column
 * @method  DocumentQuery filterByTag($folder)          Filter the query by the DociTag column
 * @method  DocumentQuery filterByReference1($folder)   Filter the query by the Docifld column
 * @method  DocumentQuery filterByFilename($folder)     Filter the query by the DociFilename column
 * 
 * FindOne
 * 
 * 
 * Find
 *
 */
class DocumentQuery extends BaseDocumentQuery {
	use QueryTraits;

	/**
	 * Filter the query on the DociFld1Cd column
	 * @param string $value      The value to use as filter.
	 * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 * @return $this The current query, for fluid interface
	 */
	public function filterByReference1($value = null, $comparison = null) {
		return $this->filterByDocifld1cd($value, $comparison);
	}
}
