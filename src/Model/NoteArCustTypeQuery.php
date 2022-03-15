<?php

use Base\NoteArCustTypeQuery as BaseNoteArCustTypeQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'notes_cust_type' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: filterByTypecode()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * @method  NoteArCustTypeQuery filterByTypecode(string $typecode)      Filter the Query by the artbtypecode column
 * 
 * FindOneByXXX()
 * 
 *
 * FindByXXX()
 */
class NoteArCustTypeQuery extends BaseNoteArCustTypeQuery {
	use QueryTraits;

	public function filterByTypeAlias($typecodealias) {
		$notetype = NoteArCustType::TYPE_ALIASES[$typecodealias];
		return $this->filterByQntype($notetype);
	}
}
