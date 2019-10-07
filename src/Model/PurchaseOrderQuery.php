<?php

use Base\PurchaseOrderQuery as BasePurchaseOrderQuery;

use Dplus\Model\QueryTraits;

/**
 * Class for performing query and update operations on the 'po_head' table
 * 
 * NOTE: you can use the findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX()
 * methods with an alias
 * EXAMPLE: findOneByOrdernumber()
 *
 * Magic Methods (NOTE these are the ones in use, not necessarily all the available ones)
 * -----------------------------------------------------------------------------------------
 * Filters
 * @method  SalesHistoryQuery filterByCustid(string $custID)      Filter the query on the ArcuCustid column
 * @method  SalesHistoryQuery filterByCustpo(string $custpo)      Filter the query on the Oehhcustpo column
 * @method  SalesHistoryQuery filterByTotal_total(string $total)  Filter the query on the Oehhordrtot column
 * @method  SalesHistoryQuery filterByOrderstatus(string $status) Filter the query on the Oehhstat column
 *
 *
 * FindOne
 * @method  SalesHistory findOneByOrdernumber(string $ordn)      Return the first SalesHistory filtered by the OehhNbr column
 *
 * Find
 */
class PurchaseOrderQuery extends BasePurchaseOrderQuery {
	use QueryTraits;
}
