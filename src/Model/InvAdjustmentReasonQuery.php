<?php

use Base\InvAdjustmentReasonQuery as BaseInvAdjustmentReasonQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'inv_iarn_code' table.
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
 * @method  InvAdjustmentReason findOneByCode(string $code)      Return the first InvAdjustmentReasoncode filtered by the intbiarncode column
 *
 * FindByXXX()
 *
 *
 */
class InvAdjustmentReasonQuery extends BaseInvAdjustmentReasonQuery {
	use QueryTraits;
}
