<?php

use Base\ArTermsGroupQuery as BaseArTermsGroupQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'ar_terms_grp' table.
 *
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByCode()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 *
 * FindOneByXXX()
 * @method	ArTermsGroup findOneByCode(string $code)	  Return the first ArTermsGroup filtered by the artggrup column
 *
 * FindByXXX()
 *
 */
class ArTermsGroupQuery extends BaseArTermsGroupQuery {
	use QueryTraits;

	 /**
	 * Filter the query on the ArtgGrup column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByArtggrup('fooValue');   // WHERE ArtgGrup = 'fooValue'
	 * $query->filterByArtggrup('%fooValue%', Criteria::LIKE); // WHERE ArtgGrup LIKE '%fooValue%'
	 * </code>
	 * @param	  mixed  $code The value to use as filter.
	 * @param	  string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return $this  The current query, for fluid interface
	 */
	public function filterByCode($code, $comparison = null) {
		return $this->filterByArtggrup($code, $comparison);
	}
}
