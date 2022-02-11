<?php
// Dplus Model
use Dplus\Model\QueryTraits;
// Base
use Base\ArPaymentPendingQuery as BaseArPaymentPendingQuery;

/**
 * Class for performing query and update operations on the 'ar_cash_det' table.
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByInvoicenumber()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * FilterByXXX()
 * 
 * FindOneByXXX()
 * @method  ApBuyer findOneByInvoicenumber(string $invnbr)      Return the first ArPaymentPending filtered by the ArcdInvNbr column
 *
 * FindByXXX()
 *
 */
class ArPaymentPendingQuery extends BaseArPaymentPendingQuery {
	use QueryTraits;
}
