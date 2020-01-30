<?php

namespace Base;

use \ItemGroupCode as ChildItemGroupCode;
use \ItemGroupCodeQuery as ChildItemGroupCodeQuery;
use \Exception;
use \PDO;
use Map\ItemGroupCodeTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_grup_code' table.
 *
 *
 *
 * @method     ChildItemGroupCodeQuery orderByIntbgrup($order = Criteria::ASC) Order by the IntbGrup column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupdesc($order = Criteria::ASC) Order by the IntbGrupDesc column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupsaleacct($order = Criteria::ASC) Order by the IntbGrupSaleAcct column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupivtyacct($order = Criteria::ASC) Order by the IntbGrupIvtyAcct column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupcogsacct($order = Criteria::ASC) Order by the IntbGrupCogsAcct column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupcredacct($order = Criteria::ASC) Order by the IntbGrupCredAcct column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupwebgrup($order = Criteria::ASC) Order by the IntbGrupWebGrup column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupdropacct($order = Criteria::ASC) Order by the IntbGrupDropAcct column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupsaleprog($order = Criteria::ASC) Order by the IntbGrupSaleProg column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupcostpct($order = Criteria::ASC) Order by the IntbGrupCostPct column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupcoop($order = Criteria::ASC) Order by the IntbGrupCoop column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupusesurchg($order = Criteria::ASC) Order by the IntbGrupUseSurchg column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupsurchgdollorpct($order = Criteria::ASC) Order by the IntbGrupSurchgDollOrPct column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupsurchgdollamt($order = Criteria::ASC) Order by the IntbGrupSurchgDollAmt column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupsurchgpct($order = Criteria::ASC) Order by the IntbGrupSurchgPct column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupfrtgrup($order = Criteria::ASC) Order by the IntbGrupFrtGrup column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupprodline($order = Criteria::ASC) Order by the IntbGrupProdLine column
 * @method     ChildItemGroupCodeQuery orderByIntbgruplmecommdesc($order = Criteria::ASC) Order by the IntbGrupLmEcommDesc column
 * @method     ChildItemGroupCodeQuery orderByIntbgruplmmaxqtylrg($order = Criteria::ASC) Order by the IntbGrupLmMaxQtyLrg column
 * @method     ChildItemGroupCodeQuery orderByIntbgruplmmaxqtymed($order = Criteria::ASC) Order by the IntbGrupLmMaxQtyMed column
 * @method     ChildItemGroupCodeQuery orderByIntbgruplmmaxqtysml($order = Criteria::ASC) Order by the IntbGrupLmMaxQtySml column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupacdisc1($order = Criteria::ASC) Order by the IntbGrupAcDisc1 column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupacdisc2($order = Criteria::ASC) Order by the IntbGrupAcDisc2 column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupacdisc3($order = Criteria::ASC) Order by the IntbGrupAcDisc3 column
 * @method     ChildItemGroupCodeQuery orderByIntbgrupacdisc4($order = Criteria::ASC) Order by the IntbGrupAcDisc4 column
 * @method     ChildItemGroupCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemGroupCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemGroupCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemGroupCodeQuery groupByIntbgrup() Group by the IntbGrup column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupdesc() Group by the IntbGrupDesc column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupsaleacct() Group by the IntbGrupSaleAcct column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupivtyacct() Group by the IntbGrupIvtyAcct column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupcogsacct() Group by the IntbGrupCogsAcct column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupcredacct() Group by the IntbGrupCredAcct column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupwebgrup() Group by the IntbGrupWebGrup column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupdropacct() Group by the IntbGrupDropAcct column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupsaleprog() Group by the IntbGrupSaleProg column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupcostpct() Group by the IntbGrupCostPct column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupcoop() Group by the IntbGrupCoop column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupusesurchg() Group by the IntbGrupUseSurchg column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupsurchgdollorpct() Group by the IntbGrupSurchgDollOrPct column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupsurchgdollamt() Group by the IntbGrupSurchgDollAmt column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupsurchgpct() Group by the IntbGrupSurchgPct column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupfrtgrup() Group by the IntbGrupFrtGrup column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupprodline() Group by the IntbGrupProdLine column
 * @method     ChildItemGroupCodeQuery groupByIntbgruplmecommdesc() Group by the IntbGrupLmEcommDesc column
 * @method     ChildItemGroupCodeQuery groupByIntbgruplmmaxqtylrg() Group by the IntbGrupLmMaxQtyLrg column
 * @method     ChildItemGroupCodeQuery groupByIntbgruplmmaxqtymed() Group by the IntbGrupLmMaxQtyMed column
 * @method     ChildItemGroupCodeQuery groupByIntbgruplmmaxqtysml() Group by the IntbGrupLmMaxQtySml column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupacdisc1() Group by the IntbGrupAcDisc1 column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupacdisc2() Group by the IntbGrupAcDisc2 column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupacdisc3() Group by the IntbGrupAcDisc3 column
 * @method     ChildItemGroupCodeQuery groupByIntbgrupacdisc4() Group by the IntbGrupAcDisc4 column
 * @method     ChildItemGroupCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemGroupCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemGroupCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemGroupCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemGroupCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemGroupCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemGroupCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemGroupCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemGroupCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemGroupCodeQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemGroupCodeQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildItemGroupCodeQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildItemGroupCodeQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildItemGroupCodeQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemGroupCodeQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildItemGroupCodeQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemGroupCode findOne(ConnectionInterface $con = null) Return the first ChildItemGroupCode matching the query
 * @method     ChildItemGroupCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemGroupCode matching the query, or a new ChildItemGroupCode object populated from the query conditions when no match is found
 *
 * @method     ChildItemGroupCode findOneByIntbgrup(string $IntbGrup) Return the first ChildItemGroupCode filtered by the IntbGrup column
 * @method     ChildItemGroupCode findOneByIntbgrupdesc(string $IntbGrupDesc) Return the first ChildItemGroupCode filtered by the IntbGrupDesc column
 * @method     ChildItemGroupCode findOneByIntbgrupsaleacct(string $IntbGrupSaleAcct) Return the first ChildItemGroupCode filtered by the IntbGrupSaleAcct column
 * @method     ChildItemGroupCode findOneByIntbgrupivtyacct(string $IntbGrupIvtyAcct) Return the first ChildItemGroupCode filtered by the IntbGrupIvtyAcct column
 * @method     ChildItemGroupCode findOneByIntbgrupcogsacct(string $IntbGrupCogsAcct) Return the first ChildItemGroupCode filtered by the IntbGrupCogsAcct column
 * @method     ChildItemGroupCode findOneByIntbgrupcredacct(string $IntbGrupCredAcct) Return the first ChildItemGroupCode filtered by the IntbGrupCredAcct column
 * @method     ChildItemGroupCode findOneByIntbgrupwebgrup(string $IntbGrupWebGrup) Return the first ChildItemGroupCode filtered by the IntbGrupWebGrup column
 * @method     ChildItemGroupCode findOneByIntbgrupdropacct(string $IntbGrupDropAcct) Return the first ChildItemGroupCode filtered by the IntbGrupDropAcct column
 * @method     ChildItemGroupCode findOneByIntbgrupsaleprog(string $IntbGrupSaleProg) Return the first ChildItemGroupCode filtered by the IntbGrupSaleProg column
 * @method     ChildItemGroupCode findOneByIntbgrupcostpct(string $IntbGrupCostPct) Return the first ChildItemGroupCode filtered by the IntbGrupCostPct column
 * @method     ChildItemGroupCode findOneByIntbgrupcoop(string $IntbGrupCoop) Return the first ChildItemGroupCode filtered by the IntbGrupCoop column
 * @method     ChildItemGroupCode findOneByIntbgrupusesurchg(string $IntbGrupUseSurchg) Return the first ChildItemGroupCode filtered by the IntbGrupUseSurchg column
 * @method     ChildItemGroupCode findOneByIntbgrupsurchgdollorpct(string $IntbGrupSurchgDollOrPct) Return the first ChildItemGroupCode filtered by the IntbGrupSurchgDollOrPct column
 * @method     ChildItemGroupCode findOneByIntbgrupsurchgdollamt(string $IntbGrupSurchgDollAmt) Return the first ChildItemGroupCode filtered by the IntbGrupSurchgDollAmt column
 * @method     ChildItemGroupCode findOneByIntbgrupsurchgpct(string $IntbGrupSurchgPct) Return the first ChildItemGroupCode filtered by the IntbGrupSurchgPct column
 * @method     ChildItemGroupCode findOneByIntbgrupfrtgrup(string $IntbGrupFrtGrup) Return the first ChildItemGroupCode filtered by the IntbGrupFrtGrup column
 * @method     ChildItemGroupCode findOneByIntbgrupprodline(string $IntbGrupProdLine) Return the first ChildItemGroupCode filtered by the IntbGrupProdLine column
 * @method     ChildItemGroupCode findOneByIntbgruplmecommdesc(string $IntbGrupLmEcommDesc) Return the first ChildItemGroupCode filtered by the IntbGrupLmEcommDesc column
 * @method     ChildItemGroupCode findOneByIntbgruplmmaxqtylrg(int $IntbGrupLmMaxQtyLrg) Return the first ChildItemGroupCode filtered by the IntbGrupLmMaxQtyLrg column
 * @method     ChildItemGroupCode findOneByIntbgruplmmaxqtymed(int $IntbGrupLmMaxQtyMed) Return the first ChildItemGroupCode filtered by the IntbGrupLmMaxQtyMed column
 * @method     ChildItemGroupCode findOneByIntbgruplmmaxqtysml(int $IntbGrupLmMaxQtySml) Return the first ChildItemGroupCode filtered by the IntbGrupLmMaxQtySml column
 * @method     ChildItemGroupCode findOneByIntbgrupacdisc1(string $IntbGrupAcDisc1) Return the first ChildItemGroupCode filtered by the IntbGrupAcDisc1 column
 * @method     ChildItemGroupCode findOneByIntbgrupacdisc2(string $IntbGrupAcDisc2) Return the first ChildItemGroupCode filtered by the IntbGrupAcDisc2 column
 * @method     ChildItemGroupCode findOneByIntbgrupacdisc3(string $IntbGrupAcDisc3) Return the first ChildItemGroupCode filtered by the IntbGrupAcDisc3 column
 * @method     ChildItemGroupCode findOneByIntbgrupacdisc4(string $IntbGrupAcDisc4) Return the first ChildItemGroupCode filtered by the IntbGrupAcDisc4 column
 * @method     ChildItemGroupCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemGroupCode filtered by the DateUpdtd column
 * @method     ChildItemGroupCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemGroupCode filtered by the TimeUpdtd column
 * @method     ChildItemGroupCode findOneByDummy(string $dummy) Return the first ChildItemGroupCode filtered by the dummy column *

 * @method     ChildItemGroupCode requirePk($key, ConnectionInterface $con = null) Return the ChildItemGroupCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOne(ConnectionInterface $con = null) Return the first ChildItemGroupCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemGroupCode requireOneByIntbgrup(string $IntbGrup) Return the first ChildItemGroupCode filtered by the IntbGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupdesc(string $IntbGrupDesc) Return the first ChildItemGroupCode filtered by the IntbGrupDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupsaleacct(string $IntbGrupSaleAcct) Return the first ChildItemGroupCode filtered by the IntbGrupSaleAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupivtyacct(string $IntbGrupIvtyAcct) Return the first ChildItemGroupCode filtered by the IntbGrupIvtyAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupcogsacct(string $IntbGrupCogsAcct) Return the first ChildItemGroupCode filtered by the IntbGrupCogsAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupcredacct(string $IntbGrupCredAcct) Return the first ChildItemGroupCode filtered by the IntbGrupCredAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupwebgrup(string $IntbGrupWebGrup) Return the first ChildItemGroupCode filtered by the IntbGrupWebGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupdropacct(string $IntbGrupDropAcct) Return the first ChildItemGroupCode filtered by the IntbGrupDropAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupsaleprog(string $IntbGrupSaleProg) Return the first ChildItemGroupCode filtered by the IntbGrupSaleProg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupcostpct(string $IntbGrupCostPct) Return the first ChildItemGroupCode filtered by the IntbGrupCostPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupcoop(string $IntbGrupCoop) Return the first ChildItemGroupCode filtered by the IntbGrupCoop column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupusesurchg(string $IntbGrupUseSurchg) Return the first ChildItemGroupCode filtered by the IntbGrupUseSurchg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupsurchgdollorpct(string $IntbGrupSurchgDollOrPct) Return the first ChildItemGroupCode filtered by the IntbGrupSurchgDollOrPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupsurchgdollamt(string $IntbGrupSurchgDollAmt) Return the first ChildItemGroupCode filtered by the IntbGrupSurchgDollAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupsurchgpct(string $IntbGrupSurchgPct) Return the first ChildItemGroupCode filtered by the IntbGrupSurchgPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupfrtgrup(string $IntbGrupFrtGrup) Return the first ChildItemGroupCode filtered by the IntbGrupFrtGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupprodline(string $IntbGrupProdLine) Return the first ChildItemGroupCode filtered by the IntbGrupProdLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgruplmecommdesc(string $IntbGrupLmEcommDesc) Return the first ChildItemGroupCode filtered by the IntbGrupLmEcommDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgruplmmaxqtylrg(int $IntbGrupLmMaxQtyLrg) Return the first ChildItemGroupCode filtered by the IntbGrupLmMaxQtyLrg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgruplmmaxqtymed(int $IntbGrupLmMaxQtyMed) Return the first ChildItemGroupCode filtered by the IntbGrupLmMaxQtyMed column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgruplmmaxqtysml(int $IntbGrupLmMaxQtySml) Return the first ChildItemGroupCode filtered by the IntbGrupLmMaxQtySml column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupacdisc1(string $IntbGrupAcDisc1) Return the first ChildItemGroupCode filtered by the IntbGrupAcDisc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupacdisc2(string $IntbGrupAcDisc2) Return the first ChildItemGroupCode filtered by the IntbGrupAcDisc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupacdisc3(string $IntbGrupAcDisc3) Return the first ChildItemGroupCode filtered by the IntbGrupAcDisc3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByIntbgrupacdisc4(string $IntbGrupAcDisc4) Return the first ChildItemGroupCode filtered by the IntbGrupAcDisc4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemGroupCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemGroupCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemGroupCode requireOneByDummy(string $dummy) Return the first ChildItemGroupCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemGroupCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemGroupCode objects based on current ModelCriteria
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrup(string $IntbGrup) Return ChildItemGroupCode objects filtered by the IntbGrup column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupdesc(string $IntbGrupDesc) Return ChildItemGroupCode objects filtered by the IntbGrupDesc column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupsaleacct(string $IntbGrupSaleAcct) Return ChildItemGroupCode objects filtered by the IntbGrupSaleAcct column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupivtyacct(string $IntbGrupIvtyAcct) Return ChildItemGroupCode objects filtered by the IntbGrupIvtyAcct column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupcogsacct(string $IntbGrupCogsAcct) Return ChildItemGroupCode objects filtered by the IntbGrupCogsAcct column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupcredacct(string $IntbGrupCredAcct) Return ChildItemGroupCode objects filtered by the IntbGrupCredAcct column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupwebgrup(string $IntbGrupWebGrup) Return ChildItemGroupCode objects filtered by the IntbGrupWebGrup column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupdropacct(string $IntbGrupDropAcct) Return ChildItemGroupCode objects filtered by the IntbGrupDropAcct column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupsaleprog(string $IntbGrupSaleProg) Return ChildItemGroupCode objects filtered by the IntbGrupSaleProg column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupcostpct(string $IntbGrupCostPct) Return ChildItemGroupCode objects filtered by the IntbGrupCostPct column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupcoop(string $IntbGrupCoop) Return ChildItemGroupCode objects filtered by the IntbGrupCoop column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupusesurchg(string $IntbGrupUseSurchg) Return ChildItemGroupCode objects filtered by the IntbGrupUseSurchg column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupsurchgdollorpct(string $IntbGrupSurchgDollOrPct) Return ChildItemGroupCode objects filtered by the IntbGrupSurchgDollOrPct column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupsurchgdollamt(string $IntbGrupSurchgDollAmt) Return ChildItemGroupCode objects filtered by the IntbGrupSurchgDollAmt column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupsurchgpct(string $IntbGrupSurchgPct) Return ChildItemGroupCode objects filtered by the IntbGrupSurchgPct column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupfrtgrup(string $IntbGrupFrtGrup) Return ChildItemGroupCode objects filtered by the IntbGrupFrtGrup column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupprodline(string $IntbGrupProdLine) Return ChildItemGroupCode objects filtered by the IntbGrupProdLine column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgruplmecommdesc(string $IntbGrupLmEcommDesc) Return ChildItemGroupCode objects filtered by the IntbGrupLmEcommDesc column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgruplmmaxqtylrg(int $IntbGrupLmMaxQtyLrg) Return ChildItemGroupCode objects filtered by the IntbGrupLmMaxQtyLrg column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgruplmmaxqtymed(int $IntbGrupLmMaxQtyMed) Return ChildItemGroupCode objects filtered by the IntbGrupLmMaxQtyMed column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgruplmmaxqtysml(int $IntbGrupLmMaxQtySml) Return ChildItemGroupCode objects filtered by the IntbGrupLmMaxQtySml column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupacdisc1(string $IntbGrupAcDisc1) Return ChildItemGroupCode objects filtered by the IntbGrupAcDisc1 column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupacdisc2(string $IntbGrupAcDisc2) Return ChildItemGroupCode objects filtered by the IntbGrupAcDisc2 column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupacdisc3(string $IntbGrupAcDisc3) Return ChildItemGroupCode objects filtered by the IntbGrupAcDisc3 column
 * @method     ChildItemGroupCode[]|ObjectCollection findByIntbgrupacdisc4(string $IntbGrupAcDisc4) Return ChildItemGroupCode objects filtered by the IntbGrupAcDisc4 column
 * @method     ChildItemGroupCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemGroupCode objects filtered by the DateUpdtd column
 * @method     ChildItemGroupCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemGroupCode objects filtered by the TimeUpdtd column
 * @method     ChildItemGroupCode[]|ObjectCollection findByDummy(string $dummy) Return ChildItemGroupCode objects filtered by the dummy column
 * @method     ChildItemGroupCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemGroupCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemGroupCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemGroupCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemGroupCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemGroupCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildItemGroupCodeQuery) {
            return $criteria;
        }
        $query = new ChildItemGroupCodeQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildItemGroupCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemGroupCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemGroupCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemGroupCode A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT IntbGrup, IntbGrupDesc, IntbGrupSaleAcct, IntbGrupIvtyAcct, IntbGrupCogsAcct, IntbGrupCredAcct, IntbGrupWebGrup, IntbGrupDropAcct, IntbGrupSaleProg, IntbGrupCostPct, IntbGrupCoop, IntbGrupUseSurchg, IntbGrupSurchgDollOrPct, IntbGrupSurchgDollAmt, IntbGrupSurchgPct, IntbGrupFrtGrup, IntbGrupProdLine, IntbGrupLmEcommDesc, IntbGrupLmMaxQtyLrg, IntbGrupLmMaxQtyMed, IntbGrupLmMaxQtySml, IntbGrupAcDisc1, IntbGrupAcDisc2, IntbGrupAcDisc3, IntbGrupAcDisc4, DateUpdtd, TimeUpdtd, dummy FROM inv_grup_code WHERE IntbGrup = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildItemGroupCode $obj */
            $obj = new ChildItemGroupCode();
            $obj->hydrate($row);
            ItemGroupCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildItemGroupCode|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUP, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUP, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the IntbGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrup('fooValue');   // WHERE IntbGrup = 'fooValue'
     * $query->filterByIntbgrup('%fooValue%', Criteria::LIKE); // WHERE IntbGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrup($intbgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUP, $intbgrup, $comparison);
    }

    /**
     * Filter the query on the IntbGrupDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupdesc('fooValue');   // WHERE IntbGrupDesc = 'fooValue'
     * $query->filterByIntbgrupdesc('%fooValue%', Criteria::LIKE); // WHERE IntbGrupDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupdesc($intbgrupdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPDESC, $intbgrupdesc, $comparison);
    }

    /**
     * Filter the query on the IntbGrupSaleAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupsaleacct('fooValue');   // WHERE IntbGrupSaleAcct = 'fooValue'
     * $query->filterByIntbgrupsaleacct('%fooValue%', Criteria::LIKE); // WHERE IntbGrupSaleAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupsaleacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupsaleacct($intbgrupsaleacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupsaleacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPSALEACCT, $intbgrupsaleacct, $comparison);
    }

    /**
     * Filter the query on the IntbGrupIvtyAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupivtyacct('fooValue');   // WHERE IntbGrupIvtyAcct = 'fooValue'
     * $query->filterByIntbgrupivtyacct('%fooValue%', Criteria::LIKE); // WHERE IntbGrupIvtyAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupivtyacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupivtyacct($intbgrupivtyacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupivtyacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPIVTYACCT, $intbgrupivtyacct, $comparison);
    }

    /**
     * Filter the query on the IntbGrupCogsAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupcogsacct('fooValue');   // WHERE IntbGrupCogsAcct = 'fooValue'
     * $query->filterByIntbgrupcogsacct('%fooValue%', Criteria::LIKE); // WHERE IntbGrupCogsAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupcogsacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupcogsacct($intbgrupcogsacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupcogsacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPCOGSACCT, $intbgrupcogsacct, $comparison);
    }

    /**
     * Filter the query on the IntbGrupCredAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupcredacct('fooValue');   // WHERE IntbGrupCredAcct = 'fooValue'
     * $query->filterByIntbgrupcredacct('%fooValue%', Criteria::LIKE); // WHERE IntbGrupCredAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupcredacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupcredacct($intbgrupcredacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupcredacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPCREDACCT, $intbgrupcredacct, $comparison);
    }

    /**
     * Filter the query on the IntbGrupWebGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupwebgrup('fooValue');   // WHERE IntbGrupWebGrup = 'fooValue'
     * $query->filterByIntbgrupwebgrup('%fooValue%', Criteria::LIKE); // WHERE IntbGrupWebGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupwebgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupwebgrup($intbgrupwebgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupwebgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPWEBGRUP, $intbgrupwebgrup, $comparison);
    }

    /**
     * Filter the query on the IntbGrupDropAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupdropacct('fooValue');   // WHERE IntbGrupDropAcct = 'fooValue'
     * $query->filterByIntbgrupdropacct('%fooValue%', Criteria::LIKE); // WHERE IntbGrupDropAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupdropacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupdropacct($intbgrupdropacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupdropacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPDROPACCT, $intbgrupdropacct, $comparison);
    }

    /**
     * Filter the query on the IntbGrupSaleProg column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupsaleprog('fooValue');   // WHERE IntbGrupSaleProg = 'fooValue'
     * $query->filterByIntbgrupsaleprog('%fooValue%', Criteria::LIKE); // WHERE IntbGrupSaleProg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupsaleprog The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupsaleprog($intbgrupsaleprog = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupsaleprog)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPSALEPROG, $intbgrupsaleprog, $comparison);
    }

    /**
     * Filter the query on the IntbGrupCostPct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupcostpct(1234); // WHERE IntbGrupCostPct = 1234
     * $query->filterByIntbgrupcostpct(array(12, 34)); // WHERE IntbGrupCostPct IN (12, 34)
     * $query->filterByIntbgrupcostpct(array('min' => 12)); // WHERE IntbGrupCostPct > 12
     * </code>
     *
     * @param     mixed $intbgrupcostpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupcostpct($intbgrupcostpct = null, $comparison = null)
    {
        if (is_array($intbgrupcostpct)) {
            $useMinMax = false;
            if (isset($intbgrupcostpct['min'])) {
                $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPCOSTPCT, $intbgrupcostpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbgrupcostpct['max'])) {
                $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPCOSTPCT, $intbgrupcostpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPCOSTPCT, $intbgrupcostpct, $comparison);
    }

    /**
     * Filter the query on the IntbGrupCoop column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupcoop('fooValue');   // WHERE IntbGrupCoop = 'fooValue'
     * $query->filterByIntbgrupcoop('%fooValue%', Criteria::LIKE); // WHERE IntbGrupCoop LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupcoop The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupcoop($intbgrupcoop = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupcoop)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPCOOP, $intbgrupcoop, $comparison);
    }

    /**
     * Filter the query on the IntbGrupUseSurchg column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupusesurchg('fooValue');   // WHERE IntbGrupUseSurchg = 'fooValue'
     * $query->filterByIntbgrupusesurchg('%fooValue%', Criteria::LIKE); // WHERE IntbGrupUseSurchg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupusesurchg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupusesurchg($intbgrupusesurchg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupusesurchg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPUSESURCHG, $intbgrupusesurchg, $comparison);
    }

    /**
     * Filter the query on the IntbGrupSurchgDollOrPct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupsurchgdollorpct('fooValue');   // WHERE IntbGrupSurchgDollOrPct = 'fooValue'
     * $query->filterByIntbgrupsurchgdollorpct('%fooValue%', Criteria::LIKE); // WHERE IntbGrupSurchgDollOrPct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupsurchgdollorpct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupsurchgdollorpct($intbgrupsurchgdollorpct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupsurchgdollorpct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLORPCT, $intbgrupsurchgdollorpct, $comparison);
    }

    /**
     * Filter the query on the IntbGrupSurchgDollAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupsurchgdollamt(1234); // WHERE IntbGrupSurchgDollAmt = 1234
     * $query->filterByIntbgrupsurchgdollamt(array(12, 34)); // WHERE IntbGrupSurchgDollAmt IN (12, 34)
     * $query->filterByIntbgrupsurchgdollamt(array('min' => 12)); // WHERE IntbGrupSurchgDollAmt > 12
     * </code>
     *
     * @param     mixed $intbgrupsurchgdollamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupsurchgdollamt($intbgrupsurchgdollamt = null, $comparison = null)
    {
        if (is_array($intbgrupsurchgdollamt)) {
            $useMinMax = false;
            if (isset($intbgrupsurchgdollamt['min'])) {
                $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT, $intbgrupsurchgdollamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbgrupsurchgdollamt['max'])) {
                $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT, $intbgrupsurchgdollamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT, $intbgrupsurchgdollamt, $comparison);
    }

    /**
     * Filter the query on the IntbGrupSurchgPct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupsurchgpct(1234); // WHERE IntbGrupSurchgPct = 1234
     * $query->filterByIntbgrupsurchgpct(array(12, 34)); // WHERE IntbGrupSurchgPct IN (12, 34)
     * $query->filterByIntbgrupsurchgpct(array('min' => 12)); // WHERE IntbGrupSurchgPct > 12
     * </code>
     *
     * @param     mixed $intbgrupsurchgpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupsurchgpct($intbgrupsurchgpct = null, $comparison = null)
    {
        if (is_array($intbgrupsurchgpct)) {
            $useMinMax = false;
            if (isset($intbgrupsurchgpct['min'])) {
                $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPSURCHGPCT, $intbgrupsurchgpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbgrupsurchgpct['max'])) {
                $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPSURCHGPCT, $intbgrupsurchgpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPSURCHGPCT, $intbgrupsurchgpct, $comparison);
    }

    /**
     * Filter the query on the IntbGrupFrtGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupfrtgrup('fooValue');   // WHERE IntbGrupFrtGrup = 'fooValue'
     * $query->filterByIntbgrupfrtgrup('%fooValue%', Criteria::LIKE); // WHERE IntbGrupFrtGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupfrtgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupfrtgrup($intbgrupfrtgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupfrtgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPFRTGRUP, $intbgrupfrtgrup, $comparison);
    }

    /**
     * Filter the query on the IntbGrupProdLine column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupprodline('fooValue');   // WHERE IntbGrupProdLine = 'fooValue'
     * $query->filterByIntbgrupprodline('%fooValue%', Criteria::LIKE); // WHERE IntbGrupProdLine LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupprodline The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupprodline($intbgrupprodline = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupprodline)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPPRODLINE, $intbgrupprodline, $comparison);
    }

    /**
     * Filter the query on the IntbGrupLmEcommDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgruplmecommdesc('fooValue');   // WHERE IntbGrupLmEcommDesc = 'fooValue'
     * $query->filterByIntbgruplmecommdesc('%fooValue%', Criteria::LIKE); // WHERE IntbGrupLmEcommDesc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgruplmecommdesc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgruplmecommdesc($intbgruplmecommdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgruplmecommdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPLMECOMMDESC, $intbgruplmecommdesc, $comparison);
    }

    /**
     * Filter the query on the IntbGrupLmMaxQtyLrg column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgruplmmaxqtylrg(1234); // WHERE IntbGrupLmMaxQtyLrg = 1234
     * $query->filterByIntbgruplmmaxqtylrg(array(12, 34)); // WHERE IntbGrupLmMaxQtyLrg IN (12, 34)
     * $query->filterByIntbgruplmmaxqtylrg(array('min' => 12)); // WHERE IntbGrupLmMaxQtyLrg > 12
     * </code>
     *
     * @param     mixed $intbgruplmmaxqtylrg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgruplmmaxqtylrg($intbgruplmmaxqtylrg = null, $comparison = null)
    {
        if (is_array($intbgruplmmaxqtylrg)) {
            $useMinMax = false;
            if (isset($intbgruplmmaxqtylrg['min'])) {
                $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG, $intbgruplmmaxqtylrg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbgruplmmaxqtylrg['max'])) {
                $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG, $intbgruplmmaxqtylrg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG, $intbgruplmmaxqtylrg, $comparison);
    }

    /**
     * Filter the query on the IntbGrupLmMaxQtyMed column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgruplmmaxqtymed(1234); // WHERE IntbGrupLmMaxQtyMed = 1234
     * $query->filterByIntbgruplmmaxqtymed(array(12, 34)); // WHERE IntbGrupLmMaxQtyMed IN (12, 34)
     * $query->filterByIntbgruplmmaxqtymed(array('min' => 12)); // WHERE IntbGrupLmMaxQtyMed > 12
     * </code>
     *
     * @param     mixed $intbgruplmmaxqtymed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgruplmmaxqtymed($intbgruplmmaxqtymed = null, $comparison = null)
    {
        if (is_array($intbgruplmmaxqtymed)) {
            $useMinMax = false;
            if (isset($intbgruplmmaxqtymed['min'])) {
                $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED, $intbgruplmmaxqtymed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbgruplmmaxqtymed['max'])) {
                $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED, $intbgruplmmaxqtymed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED, $intbgruplmmaxqtymed, $comparison);
    }

    /**
     * Filter the query on the IntbGrupLmMaxQtySml column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgruplmmaxqtysml(1234); // WHERE IntbGrupLmMaxQtySml = 1234
     * $query->filterByIntbgruplmmaxqtysml(array(12, 34)); // WHERE IntbGrupLmMaxQtySml IN (12, 34)
     * $query->filterByIntbgruplmmaxqtysml(array('min' => 12)); // WHERE IntbGrupLmMaxQtySml > 12
     * </code>
     *
     * @param     mixed $intbgruplmmaxqtysml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgruplmmaxqtysml($intbgruplmmaxqtysml = null, $comparison = null)
    {
        if (is_array($intbgruplmmaxqtysml)) {
            $useMinMax = false;
            if (isset($intbgruplmmaxqtysml['min'])) {
                $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML, $intbgruplmmaxqtysml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbgruplmmaxqtysml['max'])) {
                $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML, $intbgruplmmaxqtysml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML, $intbgruplmmaxqtysml, $comparison);
    }

    /**
     * Filter the query on the IntbGrupAcDisc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupacdisc1('fooValue');   // WHERE IntbGrupAcDisc1 = 'fooValue'
     * $query->filterByIntbgrupacdisc1('%fooValue%', Criteria::LIKE); // WHERE IntbGrupAcDisc1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupacdisc1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupacdisc1($intbgrupacdisc1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupacdisc1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPACDISC1, $intbgrupacdisc1, $comparison);
    }

    /**
     * Filter the query on the IntbGrupAcDisc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupacdisc2('fooValue');   // WHERE IntbGrupAcDisc2 = 'fooValue'
     * $query->filterByIntbgrupacdisc2('%fooValue%', Criteria::LIKE); // WHERE IntbGrupAcDisc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupacdisc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupacdisc2($intbgrupacdisc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupacdisc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPACDISC2, $intbgrupacdisc2, $comparison);
    }

    /**
     * Filter the query on the IntbGrupAcDisc3 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupacdisc3('fooValue');   // WHERE IntbGrupAcDisc3 = 'fooValue'
     * $query->filterByIntbgrupacdisc3('%fooValue%', Criteria::LIKE); // WHERE IntbGrupAcDisc3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupacdisc3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupacdisc3($intbgrupacdisc3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupacdisc3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPACDISC3, $intbgrupacdisc3, $comparison);
    }

    /**
     * Filter the query on the IntbGrupAcDisc4 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupacdisc4('fooValue');   // WHERE IntbGrupAcDisc4 = 'fooValue'
     * $query->filterByIntbgrupacdisc4('%fooValue%', Criteria::LIKE); // WHERE IntbGrupAcDisc4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbgrupacdisc4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupacdisc4($intbgrupacdisc4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupacdisc4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUPACDISC4, $intbgrupacdisc4, $comparison);
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd('fooValue');   // WHERE DateUpdtd = 'fooValue'
     * $query->filterByDateupdtd('%fooValue%', Criteria::LIKE); // WHERE DateUpdtd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateupdtd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd('fooValue');   // WHERE TimeUpdtd = 'fooValue'
     * $query->filterByTimeupdtd('%fooValue%', Criteria::LIKE); // WHERE TimeUpdtd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $timeupdtd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dummy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemGroupCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUP, $itemMasterItem->getIntbgrup(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            return $this
                ->useItemMasterItemQuery()
                ->filterByPrimaryKeys($itemMasterItem->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemMasterItem() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function joinItemMasterItem($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemMasterItem');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ItemMasterItem');
        }

        return $this;
    }

    /**
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemMasterItemQuery A secondary query class using the current class as primary query
     */
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinItemMasterItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItem', '\ItemMasterItemQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildItemGroupCode $itemGroupCode Object to remove from the list of results
     *
     * @return $this|ChildItemGroupCodeQuery The current query, for fluid interface
     */
    public function prune($itemGroupCode = null)
    {
        if ($itemGroupCode) {
            $this->addUsingAlias(ItemGroupCodeTableMap::COL_INTBGRUP, $itemGroupCode->getIntbgrup(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_grup_code table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemGroupCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemGroupCodeTableMap::clearInstancePool();
            ItemGroupCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemGroupCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemGroupCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemGroupCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemGroupCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ItemGroupCodeQuery
