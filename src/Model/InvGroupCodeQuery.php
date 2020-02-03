<?php

namespace Base;

use \InvGroupCode as ChildInvGroupCode;
use \InvGroupCodeQuery as ChildInvGroupCodeQuery;
use \Exception;
use \PDO;
use Map\InvGroupCodeTableMap;
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
 * @method     ChildInvGroupCodeQuery orderByIntbgrup($order = Criteria::ASC) Order by the IntbGrup column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupdesc($order = Criteria::ASC) Order by the IntbGrupDesc column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupsaleacct($order = Criteria::ASC) Order by the IntbGrupSaleAcct column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupivtyacct($order = Criteria::ASC) Order by the IntbGrupIvtyAcct column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupcogsacct($order = Criteria::ASC) Order by the IntbGrupCogsAcct column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupcredacct($order = Criteria::ASC) Order by the IntbGrupCredAcct column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupwebgrup($order = Criteria::ASC) Order by the IntbGrupWebGrup column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupdropacct($order = Criteria::ASC) Order by the IntbGrupDropAcct column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupsaleprog($order = Criteria::ASC) Order by the IntbGrupSaleProg column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupcostpct($order = Criteria::ASC) Order by the IntbGrupCostPct column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupcoop($order = Criteria::ASC) Order by the IntbGrupCoop column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupusesurchg($order = Criteria::ASC) Order by the IntbGrupUseSurchg column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupsurchgdollorpct($order = Criteria::ASC) Order by the IntbGrupSurchgDollOrPct column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupsurchgdollamt($order = Criteria::ASC) Order by the IntbGrupSurchgDollAmt column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupsurchgpct($order = Criteria::ASC) Order by the IntbGrupSurchgPct column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupfrtgrup($order = Criteria::ASC) Order by the IntbGrupFrtGrup column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupprodline($order = Criteria::ASC) Order by the IntbGrupProdLine column
 * @method     ChildInvGroupCodeQuery orderByIntbgruplmecommdesc($order = Criteria::ASC) Order by the IntbGrupLmEcommDesc column
 * @method     ChildInvGroupCodeQuery orderByIntbgruplmmaxqtylrg($order = Criteria::ASC) Order by the IntbGrupLmMaxQtyLrg column
 * @method     ChildInvGroupCodeQuery orderByIntbgruplmmaxqtymed($order = Criteria::ASC) Order by the IntbGrupLmMaxQtyMed column
 * @method     ChildInvGroupCodeQuery orderByIntbgruplmmaxqtysml($order = Criteria::ASC) Order by the IntbGrupLmMaxQtySml column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupacdisc1($order = Criteria::ASC) Order by the IntbGrupAcDisc1 column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupacdisc2($order = Criteria::ASC) Order by the IntbGrupAcDisc2 column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupacdisc3($order = Criteria::ASC) Order by the IntbGrupAcDisc3 column
 * @method     ChildInvGroupCodeQuery orderByIntbgrupacdisc4($order = Criteria::ASC) Order by the IntbGrupAcDisc4 column
 * @method     ChildInvGroupCodeQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvGroupCodeQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvGroupCodeQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvGroupCodeQuery groupByIntbgrup() Group by the IntbGrup column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupdesc() Group by the IntbGrupDesc column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupsaleacct() Group by the IntbGrupSaleAcct column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupivtyacct() Group by the IntbGrupIvtyAcct column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupcogsacct() Group by the IntbGrupCogsAcct column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupcredacct() Group by the IntbGrupCredAcct column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupwebgrup() Group by the IntbGrupWebGrup column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupdropacct() Group by the IntbGrupDropAcct column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupsaleprog() Group by the IntbGrupSaleProg column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupcostpct() Group by the IntbGrupCostPct column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupcoop() Group by the IntbGrupCoop column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupusesurchg() Group by the IntbGrupUseSurchg column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupsurchgdollorpct() Group by the IntbGrupSurchgDollOrPct column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupsurchgdollamt() Group by the IntbGrupSurchgDollAmt column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupsurchgpct() Group by the IntbGrupSurchgPct column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupfrtgrup() Group by the IntbGrupFrtGrup column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupprodline() Group by the IntbGrupProdLine column
 * @method     ChildInvGroupCodeQuery groupByIntbgruplmecommdesc() Group by the IntbGrupLmEcommDesc column
 * @method     ChildInvGroupCodeQuery groupByIntbgruplmmaxqtylrg() Group by the IntbGrupLmMaxQtyLrg column
 * @method     ChildInvGroupCodeQuery groupByIntbgruplmmaxqtymed() Group by the IntbGrupLmMaxQtyMed column
 * @method     ChildInvGroupCodeQuery groupByIntbgruplmmaxqtysml() Group by the IntbGrupLmMaxQtySml column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupacdisc1() Group by the IntbGrupAcDisc1 column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupacdisc2() Group by the IntbGrupAcDisc2 column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupacdisc3() Group by the IntbGrupAcDisc3 column
 * @method     ChildInvGroupCodeQuery groupByIntbgrupacdisc4() Group by the IntbGrupAcDisc4 column
 * @method     ChildInvGroupCodeQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvGroupCodeQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvGroupCodeQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvGroupCodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvGroupCodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvGroupCodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvGroupCodeQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvGroupCodeQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvGroupCodeQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvGroupCodeQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvGroupCodeQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvGroupCodeQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvGroupCodeQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvGroupCodeQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvGroupCodeQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvGroupCodeQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     \ItemMasterItemQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvGroupCode findOne(ConnectionInterface $con = null) Return the first ChildInvGroupCode matching the query
 * @method     ChildInvGroupCode findOneOrCreate(ConnectionInterface $con = null) Return the first ChildInvGroupCode matching the query, or a new ChildInvGroupCode object populated from the query conditions when no match is found
 *
 * @method     ChildInvGroupCode findOneByIntbgrup(string $IntbGrup) Return the first ChildInvGroupCode filtered by the IntbGrup column
 * @method     ChildInvGroupCode findOneByIntbgrupdesc(string $IntbGrupDesc) Return the first ChildInvGroupCode filtered by the IntbGrupDesc column
 * @method     ChildInvGroupCode findOneByIntbgrupsaleacct(string $IntbGrupSaleAcct) Return the first ChildInvGroupCode filtered by the IntbGrupSaleAcct column
 * @method     ChildInvGroupCode findOneByIntbgrupivtyacct(string $IntbGrupIvtyAcct) Return the first ChildInvGroupCode filtered by the IntbGrupIvtyAcct column
 * @method     ChildInvGroupCode findOneByIntbgrupcogsacct(string $IntbGrupCogsAcct) Return the first ChildInvGroupCode filtered by the IntbGrupCogsAcct column
 * @method     ChildInvGroupCode findOneByIntbgrupcredacct(string $IntbGrupCredAcct) Return the first ChildInvGroupCode filtered by the IntbGrupCredAcct column
 * @method     ChildInvGroupCode findOneByIntbgrupwebgrup(string $IntbGrupWebGrup) Return the first ChildInvGroupCode filtered by the IntbGrupWebGrup column
 * @method     ChildInvGroupCode findOneByIntbgrupdropacct(string $IntbGrupDropAcct) Return the first ChildInvGroupCode filtered by the IntbGrupDropAcct column
 * @method     ChildInvGroupCode findOneByIntbgrupsaleprog(string $IntbGrupSaleProg) Return the first ChildInvGroupCode filtered by the IntbGrupSaleProg column
 * @method     ChildInvGroupCode findOneByIntbgrupcostpct(string $IntbGrupCostPct) Return the first ChildInvGroupCode filtered by the IntbGrupCostPct column
 * @method     ChildInvGroupCode findOneByIntbgrupcoop(string $IntbGrupCoop) Return the first ChildInvGroupCode filtered by the IntbGrupCoop column
 * @method     ChildInvGroupCode findOneByIntbgrupusesurchg(string $IntbGrupUseSurchg) Return the first ChildInvGroupCode filtered by the IntbGrupUseSurchg column
 * @method     ChildInvGroupCode findOneByIntbgrupsurchgdollorpct(string $IntbGrupSurchgDollOrPct) Return the first ChildInvGroupCode filtered by the IntbGrupSurchgDollOrPct column
 * @method     ChildInvGroupCode findOneByIntbgrupsurchgdollamt(string $IntbGrupSurchgDollAmt) Return the first ChildInvGroupCode filtered by the IntbGrupSurchgDollAmt column
 * @method     ChildInvGroupCode findOneByIntbgrupsurchgpct(string $IntbGrupSurchgPct) Return the first ChildInvGroupCode filtered by the IntbGrupSurchgPct column
 * @method     ChildInvGroupCode findOneByIntbgrupfrtgrup(string $IntbGrupFrtGrup) Return the first ChildInvGroupCode filtered by the IntbGrupFrtGrup column
 * @method     ChildInvGroupCode findOneByIntbgrupprodline(string $IntbGrupProdLine) Return the first ChildInvGroupCode filtered by the IntbGrupProdLine column
 * @method     ChildInvGroupCode findOneByIntbgruplmecommdesc(string $IntbGrupLmEcommDesc) Return the first ChildInvGroupCode filtered by the IntbGrupLmEcommDesc column
 * @method     ChildInvGroupCode findOneByIntbgruplmmaxqtylrg(int $IntbGrupLmMaxQtyLrg) Return the first ChildInvGroupCode filtered by the IntbGrupLmMaxQtyLrg column
 * @method     ChildInvGroupCode findOneByIntbgruplmmaxqtymed(int $IntbGrupLmMaxQtyMed) Return the first ChildInvGroupCode filtered by the IntbGrupLmMaxQtyMed column
 * @method     ChildInvGroupCode findOneByIntbgruplmmaxqtysml(int $IntbGrupLmMaxQtySml) Return the first ChildInvGroupCode filtered by the IntbGrupLmMaxQtySml column
 * @method     ChildInvGroupCode findOneByIntbgrupacdisc1(string $IntbGrupAcDisc1) Return the first ChildInvGroupCode filtered by the IntbGrupAcDisc1 column
 * @method     ChildInvGroupCode findOneByIntbgrupacdisc2(string $IntbGrupAcDisc2) Return the first ChildInvGroupCode filtered by the IntbGrupAcDisc2 column
 * @method     ChildInvGroupCode findOneByIntbgrupacdisc3(string $IntbGrupAcDisc3) Return the first ChildInvGroupCode filtered by the IntbGrupAcDisc3 column
 * @method     ChildInvGroupCode findOneByIntbgrupacdisc4(string $IntbGrupAcDisc4) Return the first ChildInvGroupCode filtered by the IntbGrupAcDisc4 column
 * @method     ChildInvGroupCode findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvGroupCode filtered by the DateUpdtd column
 * @method     ChildInvGroupCode findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvGroupCode filtered by the TimeUpdtd column
 * @method     ChildInvGroupCode findOneByDummy(string $dummy) Return the first ChildInvGroupCode filtered by the dummy column *

 * @method     ChildInvGroupCode requirePk($key, ConnectionInterface $con = null) Return the ChildInvGroupCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOne(ConnectionInterface $con = null) Return the first ChildInvGroupCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvGroupCode requireOneByIntbgrup(string $IntbGrup) Return the first ChildInvGroupCode filtered by the IntbGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupdesc(string $IntbGrupDesc) Return the first ChildInvGroupCode filtered by the IntbGrupDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupsaleacct(string $IntbGrupSaleAcct) Return the first ChildInvGroupCode filtered by the IntbGrupSaleAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupivtyacct(string $IntbGrupIvtyAcct) Return the first ChildInvGroupCode filtered by the IntbGrupIvtyAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupcogsacct(string $IntbGrupCogsAcct) Return the first ChildInvGroupCode filtered by the IntbGrupCogsAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupcredacct(string $IntbGrupCredAcct) Return the first ChildInvGroupCode filtered by the IntbGrupCredAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupwebgrup(string $IntbGrupWebGrup) Return the first ChildInvGroupCode filtered by the IntbGrupWebGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupdropacct(string $IntbGrupDropAcct) Return the first ChildInvGroupCode filtered by the IntbGrupDropAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupsaleprog(string $IntbGrupSaleProg) Return the first ChildInvGroupCode filtered by the IntbGrupSaleProg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupcostpct(string $IntbGrupCostPct) Return the first ChildInvGroupCode filtered by the IntbGrupCostPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupcoop(string $IntbGrupCoop) Return the first ChildInvGroupCode filtered by the IntbGrupCoop column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupusesurchg(string $IntbGrupUseSurchg) Return the first ChildInvGroupCode filtered by the IntbGrupUseSurchg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupsurchgdollorpct(string $IntbGrupSurchgDollOrPct) Return the first ChildInvGroupCode filtered by the IntbGrupSurchgDollOrPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupsurchgdollamt(string $IntbGrupSurchgDollAmt) Return the first ChildInvGroupCode filtered by the IntbGrupSurchgDollAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupsurchgpct(string $IntbGrupSurchgPct) Return the first ChildInvGroupCode filtered by the IntbGrupSurchgPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupfrtgrup(string $IntbGrupFrtGrup) Return the first ChildInvGroupCode filtered by the IntbGrupFrtGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupprodline(string $IntbGrupProdLine) Return the first ChildInvGroupCode filtered by the IntbGrupProdLine column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgruplmecommdesc(string $IntbGrupLmEcommDesc) Return the first ChildInvGroupCode filtered by the IntbGrupLmEcommDesc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgruplmmaxqtylrg(int $IntbGrupLmMaxQtyLrg) Return the first ChildInvGroupCode filtered by the IntbGrupLmMaxQtyLrg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgruplmmaxqtymed(int $IntbGrupLmMaxQtyMed) Return the first ChildInvGroupCode filtered by the IntbGrupLmMaxQtyMed column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgruplmmaxqtysml(int $IntbGrupLmMaxQtySml) Return the first ChildInvGroupCode filtered by the IntbGrupLmMaxQtySml column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupacdisc1(string $IntbGrupAcDisc1) Return the first ChildInvGroupCode filtered by the IntbGrupAcDisc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupacdisc2(string $IntbGrupAcDisc2) Return the first ChildInvGroupCode filtered by the IntbGrupAcDisc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupacdisc3(string $IntbGrupAcDisc3) Return the first ChildInvGroupCode filtered by the IntbGrupAcDisc3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByIntbgrupacdisc4(string $IntbGrupAcDisc4) Return the first ChildInvGroupCode filtered by the IntbGrupAcDisc4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvGroupCode filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvGroupCode filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOneByDummy(string $dummy) Return the first ChildInvGroupCode filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvGroupCode[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildInvGroupCode objects based on current ModelCriteria
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrup(string $IntbGrup) Return ChildInvGroupCode objects filtered by the IntbGrup column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupdesc(string $IntbGrupDesc) Return ChildInvGroupCode objects filtered by the IntbGrupDesc column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupsaleacct(string $IntbGrupSaleAcct) Return ChildInvGroupCode objects filtered by the IntbGrupSaleAcct column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupivtyacct(string $IntbGrupIvtyAcct) Return ChildInvGroupCode objects filtered by the IntbGrupIvtyAcct column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupcogsacct(string $IntbGrupCogsAcct) Return ChildInvGroupCode objects filtered by the IntbGrupCogsAcct column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupcredacct(string $IntbGrupCredAcct) Return ChildInvGroupCode objects filtered by the IntbGrupCredAcct column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupwebgrup(string $IntbGrupWebGrup) Return ChildInvGroupCode objects filtered by the IntbGrupWebGrup column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupdropacct(string $IntbGrupDropAcct) Return ChildInvGroupCode objects filtered by the IntbGrupDropAcct column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupsaleprog(string $IntbGrupSaleProg) Return ChildInvGroupCode objects filtered by the IntbGrupSaleProg column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupcostpct(string $IntbGrupCostPct) Return ChildInvGroupCode objects filtered by the IntbGrupCostPct column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupcoop(string $IntbGrupCoop) Return ChildInvGroupCode objects filtered by the IntbGrupCoop column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupusesurchg(string $IntbGrupUseSurchg) Return ChildInvGroupCode objects filtered by the IntbGrupUseSurchg column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupsurchgdollorpct(string $IntbGrupSurchgDollOrPct) Return ChildInvGroupCode objects filtered by the IntbGrupSurchgDollOrPct column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupsurchgdollamt(string $IntbGrupSurchgDollAmt) Return ChildInvGroupCode objects filtered by the IntbGrupSurchgDollAmt column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupsurchgpct(string $IntbGrupSurchgPct) Return ChildInvGroupCode objects filtered by the IntbGrupSurchgPct column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupfrtgrup(string $IntbGrupFrtGrup) Return ChildInvGroupCode objects filtered by the IntbGrupFrtGrup column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupprodline(string $IntbGrupProdLine) Return ChildInvGroupCode objects filtered by the IntbGrupProdLine column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgruplmecommdesc(string $IntbGrupLmEcommDesc) Return ChildInvGroupCode objects filtered by the IntbGrupLmEcommDesc column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgruplmmaxqtylrg(int $IntbGrupLmMaxQtyLrg) Return ChildInvGroupCode objects filtered by the IntbGrupLmMaxQtyLrg column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgruplmmaxqtymed(int $IntbGrupLmMaxQtyMed) Return ChildInvGroupCode objects filtered by the IntbGrupLmMaxQtyMed column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgruplmmaxqtysml(int $IntbGrupLmMaxQtySml) Return ChildInvGroupCode objects filtered by the IntbGrupLmMaxQtySml column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupacdisc1(string $IntbGrupAcDisc1) Return ChildInvGroupCode objects filtered by the IntbGrupAcDisc1 column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupacdisc2(string $IntbGrupAcDisc2) Return ChildInvGroupCode objects filtered by the IntbGrupAcDisc2 column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupacdisc3(string $IntbGrupAcDisc3) Return ChildInvGroupCode objects filtered by the IntbGrupAcDisc3 column
 * @method     ChildInvGroupCode[]|ObjectCollection findByIntbgrupacdisc4(string $IntbGrupAcDisc4) Return ChildInvGroupCode objects filtered by the IntbGrupAcDisc4 column
 * @method     ChildInvGroupCode[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildInvGroupCode objects filtered by the DateUpdtd column
 * @method     ChildInvGroupCode[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildInvGroupCode objects filtered by the TimeUpdtd column
 * @method     ChildInvGroupCode[]|ObjectCollection findByDummy(string $dummy) Return ChildInvGroupCode objects filtered by the dummy column
 * @method     ChildInvGroupCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class InvGroupCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvGroupCodeQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvGroupCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvGroupCodeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvGroupCodeQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildInvGroupCodeQuery) {
            return $criteria;
        }
        $query = new ChildInvGroupCodeQuery();
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
     * @return ChildInvGroupCode|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvGroupCodeTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvGroupCodeTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildInvGroupCode A model object, or null if the key is not found
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
            /** @var ChildInvGroupCode $obj */
            $obj = new ChildInvGroupCode();
            $obj->hydrate($row);
            InvGroupCodeTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildInvGroupCode|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUP, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUP, $keys, Criteria::IN);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrup($intbgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUP, $intbgrup, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupdesc($intbgrupdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPDESC, $intbgrupdesc, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupsaleacct($intbgrupsaleacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupsaleacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSALEACCT, $intbgrupsaleacct, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupivtyacct($intbgrupivtyacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupivtyacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPIVTYACCT, $intbgrupivtyacct, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupcogsacct($intbgrupcogsacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupcogsacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPCOGSACCT, $intbgrupcogsacct, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupcredacct($intbgrupcredacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupcredacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPCREDACCT, $intbgrupcredacct, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupwebgrup($intbgrupwebgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupwebgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPWEBGRUP, $intbgrupwebgrup, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupdropacct($intbgrupdropacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupdropacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPDROPACCT, $intbgrupdropacct, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupsaleprog($intbgrupsaleprog = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupsaleprog)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSALEPROG, $intbgrupsaleprog, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupcostpct($intbgrupcostpct = null, $comparison = null)
    {
        if (is_array($intbgrupcostpct)) {
            $useMinMax = false;
            if (isset($intbgrupcostpct['min'])) {
                $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPCOSTPCT, $intbgrupcostpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbgrupcostpct['max'])) {
                $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPCOSTPCT, $intbgrupcostpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPCOSTPCT, $intbgrupcostpct, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupcoop($intbgrupcoop = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupcoop)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPCOOP, $intbgrupcoop, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupusesurchg($intbgrupusesurchg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupusesurchg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPUSESURCHG, $intbgrupusesurchg, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupsurchgdollorpct($intbgrupsurchgdollorpct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupsurchgdollorpct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLORPCT, $intbgrupsurchgdollorpct, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupsurchgdollamt($intbgrupsurchgdollamt = null, $comparison = null)
    {
        if (is_array($intbgrupsurchgdollamt)) {
            $useMinMax = false;
            if (isset($intbgrupsurchgdollamt['min'])) {
                $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT, $intbgrupsurchgdollamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbgrupsurchgdollamt['max'])) {
                $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT, $intbgrupsurchgdollamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT, $intbgrupsurchgdollamt, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupsurchgpct($intbgrupsurchgpct = null, $comparison = null)
    {
        if (is_array($intbgrupsurchgpct)) {
            $useMinMax = false;
            if (isset($intbgrupsurchgpct['min'])) {
                $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSURCHGPCT, $intbgrupsurchgpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbgrupsurchgpct['max'])) {
                $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSURCHGPCT, $intbgrupsurchgpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSURCHGPCT, $intbgrupsurchgpct, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupfrtgrup($intbgrupfrtgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupfrtgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPFRTGRUP, $intbgrupfrtgrup, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupprodline($intbgrupprodline = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupprodline)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPPRODLINE, $intbgrupprodline, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgruplmecommdesc($intbgruplmecommdesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgruplmecommdesc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMECOMMDESC, $intbgruplmecommdesc, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgruplmmaxqtylrg($intbgruplmmaxqtylrg = null, $comparison = null)
    {
        if (is_array($intbgruplmmaxqtylrg)) {
            $useMinMax = false;
            if (isset($intbgruplmmaxqtylrg['min'])) {
                $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG, $intbgruplmmaxqtylrg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbgruplmmaxqtylrg['max'])) {
                $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG, $intbgruplmmaxqtylrg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG, $intbgruplmmaxqtylrg, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgruplmmaxqtymed($intbgruplmmaxqtymed = null, $comparison = null)
    {
        if (is_array($intbgruplmmaxqtymed)) {
            $useMinMax = false;
            if (isset($intbgruplmmaxqtymed['min'])) {
                $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED, $intbgruplmmaxqtymed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbgruplmmaxqtymed['max'])) {
                $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED, $intbgruplmmaxqtymed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED, $intbgruplmmaxqtymed, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgruplmmaxqtysml($intbgruplmmaxqtysml = null, $comparison = null)
    {
        if (is_array($intbgruplmmaxqtysml)) {
            $useMinMax = false;
            if (isset($intbgruplmmaxqtysml['min'])) {
                $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML, $intbgruplmmaxqtysml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intbgruplmmaxqtysml['max'])) {
                $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML, $intbgruplmmaxqtysml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML, $intbgruplmmaxqtysml, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupacdisc1($intbgrupacdisc1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupacdisc1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPACDISC1, $intbgrupacdisc1, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupacdisc2($intbgrupacdisc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupacdisc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPACDISC2, $intbgrupacdisc2, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupacdisc3($intbgrupacdisc3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupacdisc3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPACDISC3, $intbgrupacdisc3, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByIntbgrupacdisc4($intbgrupacdisc4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupacdisc4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPACDISC4, $intbgrupacdisc4, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InvGroupCodeTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUP, $itemMasterItem->getIntbgrup(), $comparison);
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
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
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
     * @param   ChildInvGroupCode $invGroupCode Object to remove from the list of results
     *
     * @return $this|ChildInvGroupCodeQuery The current query, for fluid interface
     */
    public function prune($invGroupCode = null)
    {
        if ($invGroupCode) {
            $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUP, $invGroupCode->getIntbgrup(), Criteria::NOT_EQUAL);
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
            $con = Propel::getServiceContainer()->getWriteConnection(InvGroupCodeTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvGroupCodeTableMap::clearInstancePool();
            InvGroupCodeTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(InvGroupCodeTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvGroupCodeTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvGroupCodeTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvGroupCodeTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // InvGroupCodeQuery
