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
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_grup_code` table.
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
 * @method     ChildInvGroupCode|null findOne(?ConnectionInterface $con = null) Return the first ChildInvGroupCode matching the query
 * @method     ChildInvGroupCode findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildInvGroupCode matching the query, or a new ChildInvGroupCode object populated from the query conditions when no match is found
 *
 * @method     ChildInvGroupCode|null findOneByIntbgrup(string $IntbGrup) Return the first ChildInvGroupCode filtered by the IntbGrup column
 * @method     ChildInvGroupCode|null findOneByIntbgrupdesc(string $IntbGrupDesc) Return the first ChildInvGroupCode filtered by the IntbGrupDesc column
 * @method     ChildInvGroupCode|null findOneByIntbgrupsaleacct(string $IntbGrupSaleAcct) Return the first ChildInvGroupCode filtered by the IntbGrupSaleAcct column
 * @method     ChildInvGroupCode|null findOneByIntbgrupivtyacct(string $IntbGrupIvtyAcct) Return the first ChildInvGroupCode filtered by the IntbGrupIvtyAcct column
 * @method     ChildInvGroupCode|null findOneByIntbgrupcogsacct(string $IntbGrupCogsAcct) Return the first ChildInvGroupCode filtered by the IntbGrupCogsAcct column
 * @method     ChildInvGroupCode|null findOneByIntbgrupcredacct(string $IntbGrupCredAcct) Return the first ChildInvGroupCode filtered by the IntbGrupCredAcct column
 * @method     ChildInvGroupCode|null findOneByIntbgrupwebgrup(string $IntbGrupWebGrup) Return the first ChildInvGroupCode filtered by the IntbGrupWebGrup column
 * @method     ChildInvGroupCode|null findOneByIntbgrupdropacct(string $IntbGrupDropAcct) Return the first ChildInvGroupCode filtered by the IntbGrupDropAcct column
 * @method     ChildInvGroupCode|null findOneByIntbgrupsaleprog(string $IntbGrupSaleProg) Return the first ChildInvGroupCode filtered by the IntbGrupSaleProg column
 * @method     ChildInvGroupCode|null findOneByIntbgrupcostpct(string $IntbGrupCostPct) Return the first ChildInvGroupCode filtered by the IntbGrupCostPct column
 * @method     ChildInvGroupCode|null findOneByIntbgrupcoop(string $IntbGrupCoop) Return the first ChildInvGroupCode filtered by the IntbGrupCoop column
 * @method     ChildInvGroupCode|null findOneByIntbgrupusesurchg(string $IntbGrupUseSurchg) Return the first ChildInvGroupCode filtered by the IntbGrupUseSurchg column
 * @method     ChildInvGroupCode|null findOneByIntbgrupsurchgdollorpct(string $IntbGrupSurchgDollOrPct) Return the first ChildInvGroupCode filtered by the IntbGrupSurchgDollOrPct column
 * @method     ChildInvGroupCode|null findOneByIntbgrupsurchgdollamt(string $IntbGrupSurchgDollAmt) Return the first ChildInvGroupCode filtered by the IntbGrupSurchgDollAmt column
 * @method     ChildInvGroupCode|null findOneByIntbgrupsurchgpct(string $IntbGrupSurchgPct) Return the first ChildInvGroupCode filtered by the IntbGrupSurchgPct column
 * @method     ChildInvGroupCode|null findOneByIntbgrupfrtgrup(string $IntbGrupFrtGrup) Return the first ChildInvGroupCode filtered by the IntbGrupFrtGrup column
 * @method     ChildInvGroupCode|null findOneByIntbgrupprodline(string $IntbGrupProdLine) Return the first ChildInvGroupCode filtered by the IntbGrupProdLine column
 * @method     ChildInvGroupCode|null findOneByIntbgruplmecommdesc(string $IntbGrupLmEcommDesc) Return the first ChildInvGroupCode filtered by the IntbGrupLmEcommDesc column
 * @method     ChildInvGroupCode|null findOneByIntbgruplmmaxqtylrg(int $IntbGrupLmMaxQtyLrg) Return the first ChildInvGroupCode filtered by the IntbGrupLmMaxQtyLrg column
 * @method     ChildInvGroupCode|null findOneByIntbgruplmmaxqtymed(int $IntbGrupLmMaxQtyMed) Return the first ChildInvGroupCode filtered by the IntbGrupLmMaxQtyMed column
 * @method     ChildInvGroupCode|null findOneByIntbgruplmmaxqtysml(int $IntbGrupLmMaxQtySml) Return the first ChildInvGroupCode filtered by the IntbGrupLmMaxQtySml column
 * @method     ChildInvGroupCode|null findOneByIntbgrupacdisc1(string $IntbGrupAcDisc1) Return the first ChildInvGroupCode filtered by the IntbGrupAcDisc1 column
 * @method     ChildInvGroupCode|null findOneByIntbgrupacdisc2(string $IntbGrupAcDisc2) Return the first ChildInvGroupCode filtered by the IntbGrupAcDisc2 column
 * @method     ChildInvGroupCode|null findOneByIntbgrupacdisc3(string $IntbGrupAcDisc3) Return the first ChildInvGroupCode filtered by the IntbGrupAcDisc3 column
 * @method     ChildInvGroupCode|null findOneByIntbgrupacdisc4(string $IntbGrupAcDisc4) Return the first ChildInvGroupCode filtered by the IntbGrupAcDisc4 column
 * @method     ChildInvGroupCode|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvGroupCode filtered by the DateUpdtd column
 * @method     ChildInvGroupCode|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvGroupCode filtered by the TimeUpdtd column
 * @method     ChildInvGroupCode|null findOneByDummy(string $dummy) Return the first ChildInvGroupCode filtered by the dummy column
 *
 * @method     ChildInvGroupCode requirePk($key, ?ConnectionInterface $con = null) Return the ChildInvGroupCode by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvGroupCode requireOne(?ConnectionInterface $con = null) Return the first ChildInvGroupCode matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildInvGroupCode[]|Collection find(?ConnectionInterface $con = null) Return ChildInvGroupCode objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> find(?ConnectionInterface $con = null) Return ChildInvGroupCode objects based on current ModelCriteria
 *
 * @method     ChildInvGroupCode[]|Collection findByIntbgrup(string|array<string> $IntbGrup) Return ChildInvGroupCode objects filtered by the IntbGrup column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrup(string|array<string> $IntbGrup) Return ChildInvGroupCode objects filtered by the IntbGrup column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupdesc(string|array<string> $IntbGrupDesc) Return ChildInvGroupCode objects filtered by the IntbGrupDesc column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupdesc(string|array<string> $IntbGrupDesc) Return ChildInvGroupCode objects filtered by the IntbGrupDesc column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupsaleacct(string|array<string> $IntbGrupSaleAcct) Return ChildInvGroupCode objects filtered by the IntbGrupSaleAcct column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupsaleacct(string|array<string> $IntbGrupSaleAcct) Return ChildInvGroupCode objects filtered by the IntbGrupSaleAcct column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupivtyacct(string|array<string> $IntbGrupIvtyAcct) Return ChildInvGroupCode objects filtered by the IntbGrupIvtyAcct column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupivtyacct(string|array<string> $IntbGrupIvtyAcct) Return ChildInvGroupCode objects filtered by the IntbGrupIvtyAcct column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupcogsacct(string|array<string> $IntbGrupCogsAcct) Return ChildInvGroupCode objects filtered by the IntbGrupCogsAcct column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupcogsacct(string|array<string> $IntbGrupCogsAcct) Return ChildInvGroupCode objects filtered by the IntbGrupCogsAcct column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupcredacct(string|array<string> $IntbGrupCredAcct) Return ChildInvGroupCode objects filtered by the IntbGrupCredAcct column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupcredacct(string|array<string> $IntbGrupCredAcct) Return ChildInvGroupCode objects filtered by the IntbGrupCredAcct column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupwebgrup(string|array<string> $IntbGrupWebGrup) Return ChildInvGroupCode objects filtered by the IntbGrupWebGrup column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupwebgrup(string|array<string> $IntbGrupWebGrup) Return ChildInvGroupCode objects filtered by the IntbGrupWebGrup column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupdropacct(string|array<string> $IntbGrupDropAcct) Return ChildInvGroupCode objects filtered by the IntbGrupDropAcct column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupdropacct(string|array<string> $IntbGrupDropAcct) Return ChildInvGroupCode objects filtered by the IntbGrupDropAcct column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupsaleprog(string|array<string> $IntbGrupSaleProg) Return ChildInvGroupCode objects filtered by the IntbGrupSaleProg column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupsaleprog(string|array<string> $IntbGrupSaleProg) Return ChildInvGroupCode objects filtered by the IntbGrupSaleProg column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupcostpct(string|array<string> $IntbGrupCostPct) Return ChildInvGroupCode objects filtered by the IntbGrupCostPct column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupcostpct(string|array<string> $IntbGrupCostPct) Return ChildInvGroupCode objects filtered by the IntbGrupCostPct column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupcoop(string|array<string> $IntbGrupCoop) Return ChildInvGroupCode objects filtered by the IntbGrupCoop column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupcoop(string|array<string> $IntbGrupCoop) Return ChildInvGroupCode objects filtered by the IntbGrupCoop column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupusesurchg(string|array<string> $IntbGrupUseSurchg) Return ChildInvGroupCode objects filtered by the IntbGrupUseSurchg column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupusesurchg(string|array<string> $IntbGrupUseSurchg) Return ChildInvGroupCode objects filtered by the IntbGrupUseSurchg column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupsurchgdollorpct(string|array<string> $IntbGrupSurchgDollOrPct) Return ChildInvGroupCode objects filtered by the IntbGrupSurchgDollOrPct column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupsurchgdollorpct(string|array<string> $IntbGrupSurchgDollOrPct) Return ChildInvGroupCode objects filtered by the IntbGrupSurchgDollOrPct column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupsurchgdollamt(string|array<string> $IntbGrupSurchgDollAmt) Return ChildInvGroupCode objects filtered by the IntbGrupSurchgDollAmt column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupsurchgdollamt(string|array<string> $IntbGrupSurchgDollAmt) Return ChildInvGroupCode objects filtered by the IntbGrupSurchgDollAmt column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupsurchgpct(string|array<string> $IntbGrupSurchgPct) Return ChildInvGroupCode objects filtered by the IntbGrupSurchgPct column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupsurchgpct(string|array<string> $IntbGrupSurchgPct) Return ChildInvGroupCode objects filtered by the IntbGrupSurchgPct column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupfrtgrup(string|array<string> $IntbGrupFrtGrup) Return ChildInvGroupCode objects filtered by the IntbGrupFrtGrup column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupfrtgrup(string|array<string> $IntbGrupFrtGrup) Return ChildInvGroupCode objects filtered by the IntbGrupFrtGrup column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupprodline(string|array<string> $IntbGrupProdLine) Return ChildInvGroupCode objects filtered by the IntbGrupProdLine column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupprodline(string|array<string> $IntbGrupProdLine) Return ChildInvGroupCode objects filtered by the IntbGrupProdLine column
 * @method     ChildInvGroupCode[]|Collection findByIntbgruplmecommdesc(string|array<string> $IntbGrupLmEcommDesc) Return ChildInvGroupCode objects filtered by the IntbGrupLmEcommDesc column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgruplmecommdesc(string|array<string> $IntbGrupLmEcommDesc) Return ChildInvGroupCode objects filtered by the IntbGrupLmEcommDesc column
 * @method     ChildInvGroupCode[]|Collection findByIntbgruplmmaxqtylrg(int|array<int> $IntbGrupLmMaxQtyLrg) Return ChildInvGroupCode objects filtered by the IntbGrupLmMaxQtyLrg column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgruplmmaxqtylrg(int|array<int> $IntbGrupLmMaxQtyLrg) Return ChildInvGroupCode objects filtered by the IntbGrupLmMaxQtyLrg column
 * @method     ChildInvGroupCode[]|Collection findByIntbgruplmmaxqtymed(int|array<int> $IntbGrupLmMaxQtyMed) Return ChildInvGroupCode objects filtered by the IntbGrupLmMaxQtyMed column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgruplmmaxqtymed(int|array<int> $IntbGrupLmMaxQtyMed) Return ChildInvGroupCode objects filtered by the IntbGrupLmMaxQtyMed column
 * @method     ChildInvGroupCode[]|Collection findByIntbgruplmmaxqtysml(int|array<int> $IntbGrupLmMaxQtySml) Return ChildInvGroupCode objects filtered by the IntbGrupLmMaxQtySml column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgruplmmaxqtysml(int|array<int> $IntbGrupLmMaxQtySml) Return ChildInvGroupCode objects filtered by the IntbGrupLmMaxQtySml column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupacdisc1(string|array<string> $IntbGrupAcDisc1) Return ChildInvGroupCode objects filtered by the IntbGrupAcDisc1 column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupacdisc1(string|array<string> $IntbGrupAcDisc1) Return ChildInvGroupCode objects filtered by the IntbGrupAcDisc1 column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupacdisc2(string|array<string> $IntbGrupAcDisc2) Return ChildInvGroupCode objects filtered by the IntbGrupAcDisc2 column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupacdisc2(string|array<string> $IntbGrupAcDisc2) Return ChildInvGroupCode objects filtered by the IntbGrupAcDisc2 column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupacdisc3(string|array<string> $IntbGrupAcDisc3) Return ChildInvGroupCode objects filtered by the IntbGrupAcDisc3 column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupacdisc3(string|array<string> $IntbGrupAcDisc3) Return ChildInvGroupCode objects filtered by the IntbGrupAcDisc3 column
 * @method     ChildInvGroupCode[]|Collection findByIntbgrupacdisc4(string|array<string> $IntbGrupAcDisc4) Return ChildInvGroupCode objects filtered by the IntbGrupAcDisc4 column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByIntbgrupacdisc4(string|array<string> $IntbGrupAcDisc4) Return ChildInvGroupCode objects filtered by the IntbGrupAcDisc4 column
 * @method     ChildInvGroupCode[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvGroupCode objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvGroupCode objects filtered by the DateUpdtd column
 * @method     ChildInvGroupCode[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvGroupCode objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvGroupCode objects filtered by the TimeUpdtd column
 * @method     ChildInvGroupCode[]|Collection findByDummy(string|array<string> $dummy) Return ChildInvGroupCode objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildInvGroupCode> findByDummy(string|array<string> $dummy) Return ChildInvGroupCode objects filtered by the dummy column
 *
 * @method     ChildInvGroupCode[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildInvGroupCode> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class InvGroupCodeQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvGroupCodeQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvGroupCode', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvGroupCodeQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvGroupCodeQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
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
    public function findPk($key, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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
     * @param array $keys Primary keys to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return Collection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUP, $key, Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param array|int $keys The list of primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUP, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the IntbGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrup('fooValue');   // WHERE IntbGrup = 'fooValue'
     * $query->filterByIntbgrup('%fooValue%', Criteria::LIKE); // WHERE IntbGrup LIKE '%fooValue%'
     * $query->filterByIntbgrup(['foo', 'bar']); // WHERE IntbGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrup($intbgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUP, $intbgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupdesc('fooValue');   // WHERE IntbGrupDesc = 'fooValue'
     * $query->filterByIntbgrupdesc('%fooValue%', Criteria::LIKE); // WHERE IntbGrupDesc LIKE '%fooValue%'
     * $query->filterByIntbgrupdesc(['foo', 'bar']); // WHERE IntbGrupDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupdesc($intbgrupdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPDESC, $intbgrupdesc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupSaleAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupsaleacct('fooValue');   // WHERE IntbGrupSaleAcct = 'fooValue'
     * $query->filterByIntbgrupsaleacct('%fooValue%', Criteria::LIKE); // WHERE IntbGrupSaleAcct LIKE '%fooValue%'
     * $query->filterByIntbgrupsaleacct(['foo', 'bar']); // WHERE IntbGrupSaleAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupsaleacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupsaleacct($intbgrupsaleacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupsaleacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSALEACCT, $intbgrupsaleacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupIvtyAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupivtyacct('fooValue');   // WHERE IntbGrupIvtyAcct = 'fooValue'
     * $query->filterByIntbgrupivtyacct('%fooValue%', Criteria::LIKE); // WHERE IntbGrupIvtyAcct LIKE '%fooValue%'
     * $query->filterByIntbgrupivtyacct(['foo', 'bar']); // WHERE IntbGrupIvtyAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupivtyacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupivtyacct($intbgrupivtyacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupivtyacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPIVTYACCT, $intbgrupivtyacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupCogsAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupcogsacct('fooValue');   // WHERE IntbGrupCogsAcct = 'fooValue'
     * $query->filterByIntbgrupcogsacct('%fooValue%', Criteria::LIKE); // WHERE IntbGrupCogsAcct LIKE '%fooValue%'
     * $query->filterByIntbgrupcogsacct(['foo', 'bar']); // WHERE IntbGrupCogsAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupcogsacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupcogsacct($intbgrupcogsacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupcogsacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPCOGSACCT, $intbgrupcogsacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupCredAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupcredacct('fooValue');   // WHERE IntbGrupCredAcct = 'fooValue'
     * $query->filterByIntbgrupcredacct('%fooValue%', Criteria::LIKE); // WHERE IntbGrupCredAcct LIKE '%fooValue%'
     * $query->filterByIntbgrupcredacct(['foo', 'bar']); // WHERE IntbGrupCredAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupcredacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupcredacct($intbgrupcredacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupcredacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPCREDACCT, $intbgrupcredacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupWebGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupwebgrup('fooValue');   // WHERE IntbGrupWebGrup = 'fooValue'
     * $query->filterByIntbgrupwebgrup('%fooValue%', Criteria::LIKE); // WHERE IntbGrupWebGrup LIKE '%fooValue%'
     * $query->filterByIntbgrupwebgrup(['foo', 'bar']); // WHERE IntbGrupWebGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupwebgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupwebgrup($intbgrupwebgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupwebgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPWEBGRUP, $intbgrupwebgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupDropAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupdropacct('fooValue');   // WHERE IntbGrupDropAcct = 'fooValue'
     * $query->filterByIntbgrupdropacct('%fooValue%', Criteria::LIKE); // WHERE IntbGrupDropAcct LIKE '%fooValue%'
     * $query->filterByIntbgrupdropacct(['foo', 'bar']); // WHERE IntbGrupDropAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupdropacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupdropacct($intbgrupdropacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupdropacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPDROPACCT, $intbgrupdropacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupSaleProg column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupsaleprog('fooValue');   // WHERE IntbGrupSaleProg = 'fooValue'
     * $query->filterByIntbgrupsaleprog('%fooValue%', Criteria::LIKE); // WHERE IntbGrupSaleProg LIKE '%fooValue%'
     * $query->filterByIntbgrupsaleprog(['foo', 'bar']); // WHERE IntbGrupSaleProg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupsaleprog The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupsaleprog($intbgrupsaleprog = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupsaleprog)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSALEPROG, $intbgrupsaleprog, $comparison);

        return $this;
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
     * @param mixed $intbgrupcostpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupcostpct($intbgrupcostpct = null, ?string $comparison = null)
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

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPCOSTPCT, $intbgrupcostpct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupCoop column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupcoop('fooValue');   // WHERE IntbGrupCoop = 'fooValue'
     * $query->filterByIntbgrupcoop('%fooValue%', Criteria::LIKE); // WHERE IntbGrupCoop LIKE '%fooValue%'
     * $query->filterByIntbgrupcoop(['foo', 'bar']); // WHERE IntbGrupCoop IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupcoop The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupcoop($intbgrupcoop = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupcoop)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPCOOP, $intbgrupcoop, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupUseSurchg column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupusesurchg('fooValue');   // WHERE IntbGrupUseSurchg = 'fooValue'
     * $query->filterByIntbgrupusesurchg('%fooValue%', Criteria::LIKE); // WHERE IntbGrupUseSurchg LIKE '%fooValue%'
     * $query->filterByIntbgrupusesurchg(['foo', 'bar']); // WHERE IntbGrupUseSurchg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupusesurchg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupusesurchg($intbgrupusesurchg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupusesurchg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPUSESURCHG, $intbgrupusesurchg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupSurchgDollOrPct column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupsurchgdollorpct('fooValue');   // WHERE IntbGrupSurchgDollOrPct = 'fooValue'
     * $query->filterByIntbgrupsurchgdollorpct('%fooValue%', Criteria::LIKE); // WHERE IntbGrupSurchgDollOrPct LIKE '%fooValue%'
     * $query->filterByIntbgrupsurchgdollorpct(['foo', 'bar']); // WHERE IntbGrupSurchgDollOrPct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupsurchgdollorpct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupsurchgdollorpct($intbgrupsurchgdollorpct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupsurchgdollorpct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLORPCT, $intbgrupsurchgdollorpct, $comparison);

        return $this;
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
     * @param mixed $intbgrupsurchgdollamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupsurchgdollamt($intbgrupsurchgdollamt = null, ?string $comparison = null)
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

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSURCHGDOLLAMT, $intbgrupsurchgdollamt, $comparison);

        return $this;
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
     * @param mixed $intbgrupsurchgpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupsurchgpct($intbgrupsurchgpct = null, ?string $comparison = null)
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

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPSURCHGPCT, $intbgrupsurchgpct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupFrtGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupfrtgrup('fooValue');   // WHERE IntbGrupFrtGrup = 'fooValue'
     * $query->filterByIntbgrupfrtgrup('%fooValue%', Criteria::LIKE); // WHERE IntbGrupFrtGrup LIKE '%fooValue%'
     * $query->filterByIntbgrupfrtgrup(['foo', 'bar']); // WHERE IntbGrupFrtGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupfrtgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupfrtgrup($intbgrupfrtgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupfrtgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPFRTGRUP, $intbgrupfrtgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupProdLine column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupprodline('fooValue');   // WHERE IntbGrupProdLine = 'fooValue'
     * $query->filterByIntbgrupprodline('%fooValue%', Criteria::LIKE); // WHERE IntbGrupProdLine LIKE '%fooValue%'
     * $query->filterByIntbgrupprodline(['foo', 'bar']); // WHERE IntbGrupProdLine IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupprodline The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupprodline($intbgrupprodline = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupprodline)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPPRODLINE, $intbgrupprodline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupLmEcommDesc column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgruplmecommdesc('fooValue');   // WHERE IntbGrupLmEcommDesc = 'fooValue'
     * $query->filterByIntbgruplmecommdesc('%fooValue%', Criteria::LIKE); // WHERE IntbGrupLmEcommDesc LIKE '%fooValue%'
     * $query->filterByIntbgruplmecommdesc(['foo', 'bar']); // WHERE IntbGrupLmEcommDesc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgruplmecommdesc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgruplmecommdesc($intbgruplmecommdesc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgruplmecommdesc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMECOMMDESC, $intbgruplmecommdesc, $comparison);

        return $this;
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
     * @param mixed $intbgruplmmaxqtylrg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgruplmmaxqtylrg($intbgruplmmaxqtylrg = null, ?string $comparison = null)
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

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYLRG, $intbgruplmmaxqtylrg, $comparison);

        return $this;
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
     * @param mixed $intbgruplmmaxqtymed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgruplmmaxqtymed($intbgruplmmaxqtymed = null, ?string $comparison = null)
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

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYMED, $intbgruplmmaxqtymed, $comparison);

        return $this;
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
     * @param mixed $intbgruplmmaxqtysml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgruplmmaxqtysml($intbgruplmmaxqtysml = null, ?string $comparison = null)
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

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPLMMAXQTYSML, $intbgruplmmaxqtysml, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupAcDisc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupacdisc1('fooValue');   // WHERE IntbGrupAcDisc1 = 'fooValue'
     * $query->filterByIntbgrupacdisc1('%fooValue%', Criteria::LIKE); // WHERE IntbGrupAcDisc1 LIKE '%fooValue%'
     * $query->filterByIntbgrupacdisc1(['foo', 'bar']); // WHERE IntbGrupAcDisc1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupacdisc1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupacdisc1($intbgrupacdisc1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupacdisc1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPACDISC1, $intbgrupacdisc1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupAcDisc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupacdisc2('fooValue');   // WHERE IntbGrupAcDisc2 = 'fooValue'
     * $query->filterByIntbgrupacdisc2('%fooValue%', Criteria::LIKE); // WHERE IntbGrupAcDisc2 LIKE '%fooValue%'
     * $query->filterByIntbgrupacdisc2(['foo', 'bar']); // WHERE IntbGrupAcDisc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupacdisc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupacdisc2($intbgrupacdisc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupacdisc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPACDISC2, $intbgrupacdisc2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupAcDisc3 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupacdisc3('fooValue');   // WHERE IntbGrupAcDisc3 = 'fooValue'
     * $query->filterByIntbgrupacdisc3('%fooValue%', Criteria::LIKE); // WHERE IntbGrupAcDisc3 LIKE '%fooValue%'
     * $query->filterByIntbgrupacdisc3(['foo', 'bar']); // WHERE IntbGrupAcDisc3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupacdisc3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupacdisc3($intbgrupacdisc3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupacdisc3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPACDISC3, $intbgrupacdisc3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbGrupAcDisc4 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbgrupacdisc4('fooValue');   // WHERE IntbGrupAcDisc4 = 'fooValue'
     * $query->filterByIntbgrupacdisc4('%fooValue%', Criteria::LIKE); // WHERE IntbGrupAcDisc4 LIKE '%fooValue%'
     * $query->filterByIntbgrupacdisc4(['foo', 'bar']); // WHERE IntbGrupAcDisc4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbgrupacdisc4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbgrupacdisc4($intbgrupacdisc4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrupacdisc4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUPACDISC4, $intbgrupacdisc4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd('fooValue');   // WHERE DateUpdtd = 'fooValue'
     * $query->filterByDateupdtd('%fooValue%', Criteria::LIKE); // WHERE DateUpdtd LIKE '%fooValue%'
     * $query->filterByDateupdtd(['foo', 'bar']); // WHERE DateUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dateupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd('fooValue');   // WHERE TimeUpdtd = 'fooValue'
     * $query->filterByTimeupdtd('%fooValue%', Criteria::LIKE); // WHERE TimeUpdtd LIKE '%fooValue%'
     * $query->filterByTimeupdtd(['foo', 'bar']); // WHERE TimeUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $timeupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * $query->filterByDummy(['foo', 'bar']); // WHERE dummy IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dummy The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvGroupCodeTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, ?string $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            $this
                ->addUsingAlias(InvGroupCodeTableMap::COL_INTBGRUP, $itemMasterItem->getIntbgrup(), $comparison);

            return $this;
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            $this
                ->useItemMasterItemQuery()
                ->filterByPrimaryKeys($itemMasterItem->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemMasterItem() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItem relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemMasterItem(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
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
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @param callable(\ItemMasterItemQuery):\ItemMasterItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemMasterItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useItemMasterItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemMasterItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemMasterItemQuery The inner query object of the EXISTS statement
     */
    public function useItemMasterItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT EXISTS query.
     *
     * @see useItemMasterItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemMasterItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemMasterItemQuery The inner query object of the IN statement
     */
    public function useInItemMasterItemQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT IN query.
     *
     * @see useItemMasterItemInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemMasterItemQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildInvGroupCode $invGroupCode Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
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
    public function doDeleteAll(?ConnectionInterface $con = null): int
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
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
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

}
