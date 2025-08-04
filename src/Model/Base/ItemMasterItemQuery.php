<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \Exception;
use \PDO;
use Map\ItemMasterItemTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_item_mast` table.
 *
 * @method     ChildItemMasterItemQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildItemMasterItemQuery orderByInitdesc1($order = Criteria::ASC) Order by the InitDesc1 column
 * @method     ChildItemMasterItemQuery orderByInitdesc2($order = Criteria::ASC) Order by the InitDesc2 column
 * @method     ChildItemMasterItemQuery orderByIntbgrup($order = Criteria::ASC) Order by the IntbGrup column
 * @method     ChildItemMasterItemQuery orderByInitformatcode($order = Criteria::ASC) Order by the InitFormatCode column
 * @method     ChildItemMasterItemQuery orderByInitsplit($order = Criteria::ASC) Order by the InitSplit column
 * @method     ChildItemMasterItemQuery orderByInitsherdatecd($order = Criteria::ASC) Order by the InitSherDateCd column
 * @method     ChildItemMasterItemQuery orderByInitcoreyn($order = Criteria::ASC) Order by the InitCoreYN column
 * @method     ChildItemMasterItemQuery orderByIntbusercode1($order = Criteria::ASC) Order by the IntbUserCode1 column
 * @method     ChildItemMasterItemQuery orderByIntbusercode2($order = Criteria::ASC) Order by the IntbUserCode2 column
 * @method     ChildItemMasterItemQuery orderByInittype($order = Criteria::ASC) Order by the InitType column
 * @method     ChildItemMasterItemQuery orderByInittax($order = Criteria::ASC) Order by the InitTax column
 * @method     ChildItemMasterItemQuery orderByInitrtlpric($order = Criteria::ASC) Order by the InitRtlPric column
 * @method     ChildItemMasterItemQuery orderByInitstatchgd($order = Criteria::ASC) Order by the InitStatChgd column
 * @method     ChildItemMasterItemQuery orderByInitspecitemcd($order = Criteria::ASC) Order by the InitSpecItemCd column
 * @method     ChildItemMasterItemQuery orderByInitwarrdays($order = Criteria::ASC) Order by the InitWarrDays column
 * @method     ChildItemMasterItemQuery orderByIntbuomsale($order = Criteria::ASC) Order by the IntbUomSale column
 * @method     ChildItemMasterItemQuery orderByInitwght($order = Criteria::ASC) Order by the InitWght column
 * @method     ChildItemMasterItemQuery orderByInitbord($order = Criteria::ASC) Order by the InitBord column
 * @method     ChildItemMasterItemQuery orderByInitbaseitemid($order = Criteria::ASC) Order by the InitBaseItemId column
 * @method     ChildItemMasterItemQuery orderByInitspecificcust($order = Criteria::ASC) Order by the InitSpecificCust column
 * @method     ChildItemMasterItemQuery orderByInitgivedisc($order = Criteria::ASC) Order by the InitGiveDisc column
 * @method     ChildItemMasterItemQuery orderByInitasstcode($order = Criteria::ASC) Order by the InitAsstCode column
 * @method     ChildItemMasterItemQuery orderByInitpriclastdate($order = Criteria::ASC) Order by the InitPricLastDate column
 * @method     ChildItemMasterItemQuery orderByIntbuompur($order = Criteria::ASC) Order by the IntbUomPur column
 * @method     ChildItemMasterItemQuery orderByInitstancost($order = Criteria::ASC) Order by the InitStanCost column
 * @method     ChildItemMasterItemQuery orderByInitstancostbase($order = Criteria::ASC) Order by the InitStanCostBase column
 * @method     ChildItemMasterItemQuery orderByInitstancostlastdate($order = Criteria::ASC) Order by the InitStanCostLastDate column
 * @method     ChildItemMasterItemQuery orderByInitminmarg($order = Criteria::ASC) Order by the InitMinMarg column
 * @method     ChildItemMasterItemQuery orderByInitvendid($order = Criteria::ASC) Order by the InitVendId column
 * @method     ChildItemMasterItemQuery orderByInitinspect($order = Criteria::ASC) Order by the InitInspect column
 * @method     ChildItemMasterItemQuery orderByInitstockcode($order = Criteria::ASC) Order by the InitStockCode column
 * @method     ChildItemMasterItemQuery orderByInitsupritemnbr($order = Criteria::ASC) Order by the InitSuprItemNbr column
 * @method     ChildItemMasterItemQuery orderByInitvendshipfrom($order = Criteria::ASC) Order by the InitVendShipFrom column
 * @method     ChildItemMasterItemQuery orderByInitcntryoforigin($order = Criteria::ASC) Order by the InitCntryOfOrigin column
 * @method     ChildItemMasterItemQuery orderByInitasstqty($order = Criteria::ASC) Order by the InitAsstQty column
 * @method     ChildItemMasterItemQuery orderByIntbtariffcode($order = Criteria::ASC) Order by the IntbTariffCode column
 * @method     ChildItemMasterItemQuery orderByInitpreference($order = Criteria::ASC) Order by the InitPreference column
 * @method     ChildItemMasterItemQuery orderByInitproducer($order = Criteria::ASC) Order by the InitProducer column
 * @method     ChildItemMasterItemQuery orderByInitdocumentation($order = Criteria::ASC) Order by the InitDocumentation column
 * @method     ChildItemMasterItemQuery orderByInitpurchcrtnqty($order = Criteria::ASC) Order by the InitPurchCrtnQty column
 * @method     ChildItemMasterItemQuery orderByAptbbuyrcode($order = Criteria::ASC) Order by the AptbBuyrCode column
 * @method     ChildItemMasterItemQuery orderByInitlastcost($order = Criteria::ASC) Order by the InitLastCost column
 * @method     ChildItemMasterItemQuery orderByInitliters($order = Criteria::ASC) Order by the InitLiters column
 * @method     ChildItemMasterItemQuery orderByIntbmsdscode($order = Criteria::ASC) Order by the IntbMsdsCode column
 * @method     ChildItemMasterItemQuery orderByInitrequirefrt($order = Criteria::ASC) Order by the InitRequireFrt column
 * @method     ChildItemMasterItemQuery orderByInitmfrtcode($order = Criteria::ASC) Order by the InitMfrtCode column
 * @method     ChildItemMasterItemQuery orderByInitinnerpackqty($order = Criteria::ASC) Order by the InitInnerPackQty column
 * @method     ChildItemMasterItemQuery orderByInitouterpackqty($order = Criteria::ASC) Order by the InitOuterPackQty column
 * @method     ChildItemMasterItemQuery orderByInitbasestancost($order = Criteria::ASC) Order by the InitBaseStanCost column
 * @method     ChildItemMasterItemQuery orderByInitshiptareqty($order = Criteria::ASC) Order by the InitShipTareQty column
 * @method     ChildItemMasterItemQuery orderByInitwgitem($order = Criteria::ASC) Order by the InitWgItem column
 * @method     ChildItemMasterItemQuery orderByIntbpricgrup($order = Criteria::ASC) Order by the IntbPricGrup column
 * @method     ChildItemMasterItemQuery orderByIntbcommgrup($order = Criteria::ASC) Order by the IntbCommGrup column
 * @method     ChildItemMasterItemQuery orderByInitlastcostdate($order = Criteria::ASC) Order by the InitLastCostDate column
 * @method     ChildItemMasterItemQuery orderByInitqtypercase($order = Criteria::ASC) Order by the InitQtyPerCase column
 * @method     ChildItemMasterItemQuery orderByInitrevision($order = Criteria::ASC) Order by the InitRevision column
 * @method     ChildItemMasterItemQuery orderByInitcommsaleqty($order = Criteria::ASC) Order by the InitCommSaleQty column
 * @method     ChildItemMasterItemQuery orderByInitcubes($order = Criteria::ASC) Order by the InitCubes column
 * @method     ChildItemMasterItemQuery orderByInittimefence($order = Criteria::ASC) Order by the InitTimeFence column
 * @method     ChildItemMasterItemQuery orderByInitsrvcminchrg($order = Criteria::ASC) Order by the InitSrvcMinChrg column
 * @method     ChildItemMasterItemQuery orderByInitMinMargBase($order = Criteria::ASC) Order by the InitMinMargBase column
 * @method     ChildItemMasterItemQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildItemMasterItemQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildItemMasterItemQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildItemMasterItemQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildItemMasterItemQuery groupByInitdesc1() Group by the InitDesc1 column
 * @method     ChildItemMasterItemQuery groupByInitdesc2() Group by the InitDesc2 column
 * @method     ChildItemMasterItemQuery groupByIntbgrup() Group by the IntbGrup column
 * @method     ChildItemMasterItemQuery groupByInitformatcode() Group by the InitFormatCode column
 * @method     ChildItemMasterItemQuery groupByInitsplit() Group by the InitSplit column
 * @method     ChildItemMasterItemQuery groupByInitsherdatecd() Group by the InitSherDateCd column
 * @method     ChildItemMasterItemQuery groupByInitcoreyn() Group by the InitCoreYN column
 * @method     ChildItemMasterItemQuery groupByIntbusercode1() Group by the IntbUserCode1 column
 * @method     ChildItemMasterItemQuery groupByIntbusercode2() Group by the IntbUserCode2 column
 * @method     ChildItemMasterItemQuery groupByInittype() Group by the InitType column
 * @method     ChildItemMasterItemQuery groupByInittax() Group by the InitTax column
 * @method     ChildItemMasterItemQuery groupByInitrtlpric() Group by the InitRtlPric column
 * @method     ChildItemMasterItemQuery groupByInitstatchgd() Group by the InitStatChgd column
 * @method     ChildItemMasterItemQuery groupByInitspecitemcd() Group by the InitSpecItemCd column
 * @method     ChildItemMasterItemQuery groupByInitwarrdays() Group by the InitWarrDays column
 * @method     ChildItemMasterItemQuery groupByIntbuomsale() Group by the IntbUomSale column
 * @method     ChildItemMasterItemQuery groupByInitwght() Group by the InitWght column
 * @method     ChildItemMasterItemQuery groupByInitbord() Group by the InitBord column
 * @method     ChildItemMasterItemQuery groupByInitbaseitemid() Group by the InitBaseItemId column
 * @method     ChildItemMasterItemQuery groupByInitspecificcust() Group by the InitSpecificCust column
 * @method     ChildItemMasterItemQuery groupByInitgivedisc() Group by the InitGiveDisc column
 * @method     ChildItemMasterItemQuery groupByInitasstcode() Group by the InitAsstCode column
 * @method     ChildItemMasterItemQuery groupByInitpriclastdate() Group by the InitPricLastDate column
 * @method     ChildItemMasterItemQuery groupByIntbuompur() Group by the IntbUomPur column
 * @method     ChildItemMasterItemQuery groupByInitstancost() Group by the InitStanCost column
 * @method     ChildItemMasterItemQuery groupByInitstancostbase() Group by the InitStanCostBase column
 * @method     ChildItemMasterItemQuery groupByInitstancostlastdate() Group by the InitStanCostLastDate column
 * @method     ChildItemMasterItemQuery groupByInitminmarg() Group by the InitMinMarg column
 * @method     ChildItemMasterItemQuery groupByInitvendid() Group by the InitVendId column
 * @method     ChildItemMasterItemQuery groupByInitinspect() Group by the InitInspect column
 * @method     ChildItemMasterItemQuery groupByInitstockcode() Group by the InitStockCode column
 * @method     ChildItemMasterItemQuery groupByInitsupritemnbr() Group by the InitSuprItemNbr column
 * @method     ChildItemMasterItemQuery groupByInitvendshipfrom() Group by the InitVendShipFrom column
 * @method     ChildItemMasterItemQuery groupByInitcntryoforigin() Group by the InitCntryOfOrigin column
 * @method     ChildItemMasterItemQuery groupByInitasstqty() Group by the InitAsstQty column
 * @method     ChildItemMasterItemQuery groupByIntbtariffcode() Group by the IntbTariffCode column
 * @method     ChildItemMasterItemQuery groupByInitpreference() Group by the InitPreference column
 * @method     ChildItemMasterItemQuery groupByInitproducer() Group by the InitProducer column
 * @method     ChildItemMasterItemQuery groupByInitdocumentation() Group by the InitDocumentation column
 * @method     ChildItemMasterItemQuery groupByInitpurchcrtnqty() Group by the InitPurchCrtnQty column
 * @method     ChildItemMasterItemQuery groupByAptbbuyrcode() Group by the AptbBuyrCode column
 * @method     ChildItemMasterItemQuery groupByInitlastcost() Group by the InitLastCost column
 * @method     ChildItemMasterItemQuery groupByInitliters() Group by the InitLiters column
 * @method     ChildItemMasterItemQuery groupByIntbmsdscode() Group by the IntbMsdsCode column
 * @method     ChildItemMasterItemQuery groupByInitrequirefrt() Group by the InitRequireFrt column
 * @method     ChildItemMasterItemQuery groupByInitmfrtcode() Group by the InitMfrtCode column
 * @method     ChildItemMasterItemQuery groupByInitinnerpackqty() Group by the InitInnerPackQty column
 * @method     ChildItemMasterItemQuery groupByInitouterpackqty() Group by the InitOuterPackQty column
 * @method     ChildItemMasterItemQuery groupByInitbasestancost() Group by the InitBaseStanCost column
 * @method     ChildItemMasterItemQuery groupByInitshiptareqty() Group by the InitShipTareQty column
 * @method     ChildItemMasterItemQuery groupByInitwgitem() Group by the InitWgItem column
 * @method     ChildItemMasterItemQuery groupByIntbpricgrup() Group by the IntbPricGrup column
 * @method     ChildItemMasterItemQuery groupByIntbcommgrup() Group by the IntbCommGrup column
 * @method     ChildItemMasterItemQuery groupByInitlastcostdate() Group by the InitLastCostDate column
 * @method     ChildItemMasterItemQuery groupByInitqtypercase() Group by the InitQtyPerCase column
 * @method     ChildItemMasterItemQuery groupByInitrevision() Group by the InitRevision column
 * @method     ChildItemMasterItemQuery groupByInitcommsaleqty() Group by the InitCommSaleQty column
 * @method     ChildItemMasterItemQuery groupByInitcubes() Group by the InitCubes column
 * @method     ChildItemMasterItemQuery groupByInittimefence() Group by the InitTimeFence column
 * @method     ChildItemMasterItemQuery groupByInitsrvcminchrg() Group by the InitSrvcMinChrg column
 * @method     ChildItemMasterItemQuery groupByInitMinMargBase() Group by the InitMinMargBase column
 * @method     ChildItemMasterItemQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildItemMasterItemQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildItemMasterItemQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildItemMasterItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildItemMasterItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildItemMasterItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildItemMasterItemQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildItemMasterItemQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildItemMasterItemQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildItemMasterItemQuery leftJoinUnitofMeasureSale($relationAlias = null) Adds a LEFT JOIN clause to the query using the UnitofMeasureSale relation
 * @method     ChildItemMasterItemQuery rightJoinUnitofMeasureSale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UnitofMeasureSale relation
 * @method     ChildItemMasterItemQuery innerJoinUnitofMeasureSale($relationAlias = null) Adds a INNER JOIN clause to the query using the UnitofMeasureSale relation
 *
 * @method     ChildItemMasterItemQuery joinWithUnitofMeasureSale($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the UnitofMeasureSale relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithUnitofMeasureSale() Adds a LEFT JOIN clause and with to the query using the UnitofMeasureSale relation
 * @method     ChildItemMasterItemQuery rightJoinWithUnitofMeasureSale() Adds a RIGHT JOIN clause and with to the query using the UnitofMeasureSale relation
 * @method     ChildItemMasterItemQuery innerJoinWithUnitofMeasureSale() Adds a INNER JOIN clause and with to the query using the UnitofMeasureSale relation
 *
 * @method     ChildItemMasterItemQuery leftJoinUnitofMeasurePurchase($relationAlias = null) Adds a LEFT JOIN clause to the query using the UnitofMeasurePurchase relation
 * @method     ChildItemMasterItemQuery rightJoinUnitofMeasurePurchase($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UnitofMeasurePurchase relation
 * @method     ChildItemMasterItemQuery innerJoinUnitofMeasurePurchase($relationAlias = null) Adds a INNER JOIN clause to the query using the UnitofMeasurePurchase relation
 *
 * @method     ChildItemMasterItemQuery joinWithUnitofMeasurePurchase($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the UnitofMeasurePurchase relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithUnitofMeasurePurchase() Adds a LEFT JOIN clause and with to the query using the UnitofMeasurePurchase relation
 * @method     ChildItemMasterItemQuery rightJoinWithUnitofMeasurePurchase() Adds a RIGHT JOIN clause and with to the query using the UnitofMeasurePurchase relation
 * @method     ChildItemMasterItemQuery innerJoinWithUnitofMeasurePurchase() Adds a INNER JOIN clause and with to the query using the UnitofMeasurePurchase relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvGroupCode($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvGroupCode relation
 * @method     ChildItemMasterItemQuery rightJoinInvGroupCode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvGroupCode relation
 * @method     ChildItemMasterItemQuery innerJoinInvGroupCode($relationAlias = null) Adds a INNER JOIN clause to the query using the InvGroupCode relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvGroupCode($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvGroupCode relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvGroupCode() Adds a LEFT JOIN clause and with to the query using the InvGroupCode relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvGroupCode() Adds a RIGHT JOIN clause and with to the query using the InvGroupCode relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvGroupCode() Adds a INNER JOIN clause and with to the query using the InvGroupCode relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvPriceCode($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvPriceCode relation
 * @method     ChildItemMasterItemQuery rightJoinInvPriceCode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvPriceCode relation
 * @method     ChildItemMasterItemQuery innerJoinInvPriceCode($relationAlias = null) Adds a INNER JOIN clause to the query using the InvPriceCode relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvPriceCode($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvPriceCode relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvPriceCode() Adds a LEFT JOIN clause and with to the query using the InvPriceCode relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvPriceCode() Adds a RIGHT JOIN clause and with to the query using the InvPriceCode relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvPriceCode() Adds a INNER JOIN clause and with to the query using the InvPriceCode relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvCommissionCode($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvCommissionCode relation
 * @method     ChildItemMasterItemQuery rightJoinInvCommissionCode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvCommissionCode relation
 * @method     ChildItemMasterItemQuery innerJoinInvCommissionCode($relationAlias = null) Adds a INNER JOIN clause to the query using the InvCommissionCode relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvCommissionCode($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvCommissionCode relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvCommissionCode() Adds a LEFT JOIN clause and with to the query using the InvCommissionCode relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvCommissionCode() Adds a RIGHT JOIN clause and with to the query using the InvCommissionCode relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvCommissionCode() Adds a INNER JOIN clause and with to the query using the InvCommissionCode relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemPricing($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemPricing relation
 * @method     ChildItemMasterItemQuery rightJoinItemPricing($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemPricing relation
 * @method     ChildItemMasterItemQuery innerJoinItemPricing($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemPricing relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemPricing($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemPricing relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemPricing() Adds a LEFT JOIN clause and with to the query using the ItemPricing relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemPricing() Adds a RIGHT JOIN clause and with to the query using the ItemPricing relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemPricing() Adds a INNER JOIN clause and with to the query using the ItemPricing relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemXrefCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemXrefCustomer relation
 * @method     ChildItemMasterItemQuery rightJoinItemXrefCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemXrefCustomer relation
 * @method     ChildItemMasterItemQuery innerJoinItemXrefCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemXrefCustomer relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemXrefCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemXrefCustomer relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemXrefCustomer() Adds a LEFT JOIN clause and with to the query using the ItemXrefCustomer relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemXrefCustomer() Adds a RIGHT JOIN clause and with to the query using the ItemXrefCustomer relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemXrefCustomer() Adds a INNER JOIN clause and with to the query using the ItemXrefCustomer relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvWhseItemBin($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvWhseItemBin relation
 * @method     ChildItemMasterItemQuery rightJoinInvWhseItemBin($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvWhseItemBin relation
 * @method     ChildItemMasterItemQuery innerJoinInvWhseItemBin($relationAlias = null) Adds a INNER JOIN clause to the query using the InvWhseItemBin relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvWhseItemBin($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvWhseItemBin relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvWhseItemBin() Adds a LEFT JOIN clause and with to the query using the InvWhseItemBin relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvWhseItemBin() Adds a RIGHT JOIN clause and with to the query using the InvWhseItemBin relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvWhseItemBin() Adds a INNER JOIN clause and with to the query using the InvWhseItemBin relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemAddonItemRelatedByInititemnbr($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemAddonItemRelatedByInititemnbr relation
 * @method     ChildItemMasterItemQuery rightJoinItemAddonItemRelatedByInititemnbr($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemAddonItemRelatedByInititemnbr relation
 * @method     ChildItemMasterItemQuery innerJoinItemAddonItemRelatedByInititemnbr($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemAddonItemRelatedByInititemnbr relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemAddonItemRelatedByInititemnbr($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemAddonItemRelatedByInititemnbr relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemAddonItemRelatedByInititemnbr() Adds a LEFT JOIN clause and with to the query using the ItemAddonItemRelatedByInititemnbr relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemAddonItemRelatedByInititemnbr() Adds a RIGHT JOIN clause and with to the query using the ItemAddonItemRelatedByInititemnbr relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemAddonItemRelatedByInititemnbr() Adds a INNER JOIN clause and with to the query using the ItemAddonItemRelatedByInititemnbr relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemAddonItemRelatedByAdonadditemnbr($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemAddonItemRelatedByAdonadditemnbr relation
 * @method     ChildItemMasterItemQuery rightJoinItemAddonItemRelatedByAdonadditemnbr($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemAddonItemRelatedByAdonadditemnbr relation
 * @method     ChildItemMasterItemQuery innerJoinItemAddonItemRelatedByAdonadditemnbr($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemAddonItemRelatedByAdonadditemnbr relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemAddonItemRelatedByAdonadditemnbr($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemAddonItemRelatedByAdonadditemnbr relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemAddonItemRelatedByAdonadditemnbr() Adds a LEFT JOIN clause and with to the query using the ItemAddonItemRelatedByAdonadditemnbr relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemAddonItemRelatedByAdonadditemnbr() Adds a RIGHT JOIN clause and with to the query using the ItemAddonItemRelatedByAdonadditemnbr relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemAddonItemRelatedByAdonadditemnbr() Adds a INNER JOIN clause and with to the query using the ItemAddonItemRelatedByAdonadditemnbr relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItmDimension($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItmDimension relation
 * @method     ChildItemMasterItemQuery rightJoinItmDimension($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItmDimension relation
 * @method     ChildItemMasterItemQuery innerJoinItmDimension($relationAlias = null) Adds a INNER JOIN clause to the query using the ItmDimension relation
 *
 * @method     ChildItemMasterItemQuery joinWithItmDimension($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItmDimension relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItmDimension() Adds a LEFT JOIN clause and with to the query using the ItmDimension relation
 * @method     ChildItemMasterItemQuery rightJoinWithItmDimension() Adds a RIGHT JOIN clause and with to the query using the ItmDimension relation
 * @method     ChildItemMasterItemQuery innerJoinWithItmDimension() Adds a INNER JOIN clause and with to the query using the ItmDimension relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvHazmatItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvHazmatItem relation
 * @method     ChildItemMasterItemQuery rightJoinInvHazmatItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvHazmatItem relation
 * @method     ChildItemMasterItemQuery innerJoinInvHazmatItem($relationAlias = null) Adds a INNER JOIN clause to the query using the InvHazmatItem relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvHazmatItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvHazmatItem relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvHazmatItem() Adds a LEFT JOIN clause and with to the query using the InvHazmatItem relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvHazmatItem() Adds a RIGHT JOIN clause and with to the query using the InvHazmatItem relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvHazmatItem() Adds a INNER JOIN clause and with to the query using the InvHazmatItem relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvWhseLot($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvWhseLot relation
 * @method     ChildItemMasterItemQuery rightJoinInvWhseLot($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvWhseLot relation
 * @method     ChildItemMasterItemQuery innerJoinInvWhseLot($relationAlias = null) Adds a INNER JOIN clause to the query using the InvWhseLot relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvWhseLot($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvWhseLot relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvWhseLot() Adds a LEFT JOIN clause and with to the query using the InvWhseLot relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvWhseLot() Adds a RIGHT JOIN clause and with to the query using the InvWhseLot relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvWhseLot() Adds a INNER JOIN clause and with to the query using the InvWhseLot relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemSubstituteRelatedByInititemnbr($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemSubstituteRelatedByInititemnbr relation
 * @method     ChildItemMasterItemQuery rightJoinItemSubstituteRelatedByInititemnbr($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemSubstituteRelatedByInititemnbr relation
 * @method     ChildItemMasterItemQuery innerJoinItemSubstituteRelatedByInititemnbr($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemSubstituteRelatedByInititemnbr relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemSubstituteRelatedByInititemnbr($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemSubstituteRelatedByInititemnbr relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemSubstituteRelatedByInititemnbr() Adds a LEFT JOIN clause and with to the query using the ItemSubstituteRelatedByInititemnbr relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemSubstituteRelatedByInititemnbr() Adds a RIGHT JOIN clause and with to the query using the ItemSubstituteRelatedByInititemnbr relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemSubstituteRelatedByInititemnbr() Adds a INNER JOIN clause and with to the query using the ItemSubstituteRelatedByInititemnbr relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemSubstituteRelatedByInsisubitemnbr($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemSubstituteRelatedByInsisubitemnbr relation
 * @method     ChildItemMasterItemQuery rightJoinItemSubstituteRelatedByInsisubitemnbr($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemSubstituteRelatedByInsisubitemnbr relation
 * @method     ChildItemMasterItemQuery innerJoinItemSubstituteRelatedByInsisubitemnbr($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemSubstituteRelatedByInsisubitemnbr relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemSubstituteRelatedByInsisubitemnbr($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemSubstituteRelatedByInsisubitemnbr relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemSubstituteRelatedByInsisubitemnbr() Adds a LEFT JOIN clause and with to the query using the ItemSubstituteRelatedByInsisubitemnbr relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemSubstituteRelatedByInsisubitemnbr() Adds a RIGHT JOIN clause and with to the query using the ItemSubstituteRelatedByInsisubitemnbr relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemSubstituteRelatedByInsisubitemnbr() Adds a INNER JOIN clause and with to the query using the ItemSubstituteRelatedByInsisubitemnbr relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvLotTag($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvLotTag relation
 * @method     ChildItemMasterItemQuery rightJoinInvLotTag($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvLotTag relation
 * @method     ChildItemMasterItemQuery innerJoinInvLotTag($relationAlias = null) Adds a INNER JOIN clause to the query using the InvLotTag relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvLotTag($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvLotTag relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvLotTag() Adds a LEFT JOIN clause and with to the query using the InvLotTag relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvLotTag() Adds a RIGHT JOIN clause and with to the query using the InvLotTag relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvLotTag() Adds a INNER JOIN clause and with to the query using the InvLotTag relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvItem2ItemRelatedByI2imstritemid($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvItem2ItemRelatedByI2imstritemid relation
 * @method     ChildItemMasterItemQuery rightJoinInvItem2ItemRelatedByI2imstritemid($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvItem2ItemRelatedByI2imstritemid relation
 * @method     ChildItemMasterItemQuery innerJoinInvItem2ItemRelatedByI2imstritemid($relationAlias = null) Adds a INNER JOIN clause to the query using the InvItem2ItemRelatedByI2imstritemid relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvItem2ItemRelatedByI2imstritemid($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvItem2ItemRelatedByI2imstritemid relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvItem2ItemRelatedByI2imstritemid() Adds a LEFT JOIN clause and with to the query using the InvItem2ItemRelatedByI2imstritemid relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvItem2ItemRelatedByI2imstritemid() Adds a RIGHT JOIN clause and with to the query using the InvItem2ItemRelatedByI2imstritemid relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvItem2ItemRelatedByI2imstritemid() Adds a INNER JOIN clause and with to the query using the InvItem2ItemRelatedByI2imstritemid relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvItem2ItemRelatedByI2ichilditemid($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvItem2ItemRelatedByI2ichilditemid relation
 * @method     ChildItemMasterItemQuery rightJoinInvItem2ItemRelatedByI2ichilditemid($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvItem2ItemRelatedByI2ichilditemid relation
 * @method     ChildItemMasterItemQuery innerJoinInvItem2ItemRelatedByI2ichilditemid($relationAlias = null) Adds a INNER JOIN clause to the query using the InvItem2ItemRelatedByI2ichilditemid relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvItem2ItemRelatedByI2ichilditemid($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvItem2ItemRelatedByI2ichilditemid relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvItem2ItemRelatedByI2ichilditemid() Adds a LEFT JOIN clause and with to the query using the InvItem2ItemRelatedByI2ichilditemid relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvItem2ItemRelatedByI2ichilditemid() Adds a RIGHT JOIN clause and with to the query using the InvItem2ItemRelatedByI2ichilditemid relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvItem2ItemRelatedByI2ichilditemid() Adds a INNER JOIN clause and with to the query using the InvItem2ItemRelatedByI2ichilditemid relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvKitComponent($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvKitComponent relation
 * @method     ChildItemMasterItemQuery rightJoinInvKitComponent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvKitComponent relation
 * @method     ChildItemMasterItemQuery innerJoinInvKitComponent($relationAlias = null) Adds a INNER JOIN clause to the query using the InvKitComponent relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvKitComponent($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvKitComponent relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvKitComponent() Adds a LEFT JOIN clause and with to the query using the InvKitComponent relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvKitComponent() Adds a RIGHT JOIN clause and with to the query using the InvKitComponent relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvKitComponent() Adds a INNER JOIN clause and with to the query using the InvKitComponent relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvKit($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvKit relation
 * @method     ChildItemMasterItemQuery rightJoinInvKit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvKit relation
 * @method     ChildItemMasterItemQuery innerJoinInvKit($relationAlias = null) Adds a INNER JOIN clause to the query using the InvKit relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvKit($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvKit relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvKit() Adds a LEFT JOIN clause and with to the query using the InvKit relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvKit() Adds a RIGHT JOIN clause and with to the query using the InvKit relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvKit() Adds a INNER JOIN clause and with to the query using the InvKit relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvLotMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildItemMasterItemQuery rightJoinInvLotMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvLotMaster relation
 * @method     ChildItemMasterItemQuery innerJoinInvLotMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvLotMaster relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvLotMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvLotMaster relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvLotMaster() Adds a LEFT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvLotMaster() Adds a RIGHT JOIN clause and with to the query using the InvLotMaster relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvLotMaster() Adds a INNER JOIN clause and with to the query using the InvLotMaster relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvSerialMaster($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvSerialMaster relation
 * @method     ChildItemMasterItemQuery rightJoinInvSerialMaster($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvSerialMaster relation
 * @method     ChildItemMasterItemQuery innerJoinInvSerialMaster($relationAlias = null) Adds a INNER JOIN clause to the query using the InvSerialMaster relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvSerialMaster($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvSerialMaster relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvSerialMaster() Adds a LEFT JOIN clause and with to the query using the InvSerialMaster relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvSerialMaster() Adds a RIGHT JOIN clause and with to the query using the InvSerialMaster relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvSerialMaster() Adds a INNER JOIN clause and with to the query using the InvSerialMaster relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvTransferDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferDetail relation
 * @method     ChildItemMasterItemQuery rightJoinInvTransferDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferDetail relation
 * @method     ChildItemMasterItemQuery innerJoinInvTransferDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferDetail relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvTransferDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvTransferDetail() Adds a LEFT JOIN clause and with to the query using the InvTransferDetail relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvTransferDetail() Adds a RIGHT JOIN clause and with to the query using the InvTransferDetail relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvTransferDetail() Adds a INNER JOIN clause and with to the query using the InvTransferDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvTransferLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinInvTransferLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinInvTransferLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferLotserial relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvTransferLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvTransferLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvTransferLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvTransferLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvTransferPreAllocatedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinInvTransferPreAllocatedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinInvTransferPreAllocatedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvTransferPreAllocatedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferPreAllocatedLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvTransferPreAllocatedLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvTransferPreAllocatedLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferPreAllocatedLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvTransferPreAllocatedLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferPreAllocatedLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvTransferPickedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferPickedLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinInvTransferPickedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferPickedLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinInvTransferPickedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferPickedLotserial relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvTransferPickedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferPickedLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvTransferPickedLotserial() Adds a LEFT JOIN clause and with to the query using the InvTransferPickedLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvTransferPickedLotserial() Adds a RIGHT JOIN clause and with to the query using the InvTransferPickedLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvTransferPickedLotserial() Adds a INNER JOIN clause and with to the query using the InvTransferPickedLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvSerialWarranty($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvSerialWarranty relation
 * @method     ChildItemMasterItemQuery rightJoinInvSerialWarranty($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvSerialWarranty relation
 * @method     ChildItemMasterItemQuery innerJoinInvSerialWarranty($relationAlias = null) Adds a INNER JOIN clause to the query using the InvSerialWarranty relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvSerialWarranty($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvSerialWarranty relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvSerialWarranty() Adds a LEFT JOIN clause and with to the query using the InvSerialWarranty relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvSerialWarranty() Adds a RIGHT JOIN clause and with to the query using the InvSerialWarranty relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvSerialWarranty() Adds a INNER JOIN clause and with to the query using the InvSerialWarranty relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWarehouseInventory($relationAlias = null) Adds a LEFT JOIN clause to the query using the WarehouseInventory relation
 * @method     ChildItemMasterItemQuery rightJoinWarehouseInventory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WarehouseInventory relation
 * @method     ChildItemMasterItemQuery innerJoinWarehouseInventory($relationAlias = null) Adds a INNER JOIN clause to the query using the WarehouseInventory relation
 *
 * @method     ChildItemMasterItemQuery joinWithWarehouseInventory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the WarehouseInventory relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithWarehouseInventory() Adds a LEFT JOIN clause and with to the query using the WarehouseInventory relation
 * @method     ChildItemMasterItemQuery rightJoinWithWarehouseInventory() Adds a RIGHT JOIN clause and with to the query using the WarehouseInventory relation
 * @method     ChildItemMasterItemQuery innerJoinWithWarehouseInventory() Adds a INNER JOIN clause and with to the query using the WarehouseInventory relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemXrefKey($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemXrefKey relation
 * @method     ChildItemMasterItemQuery rightJoinItemXrefKey($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemXrefKey relation
 * @method     ChildItemMasterItemQuery innerJoinItemXrefKey($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemXrefKey relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemXrefKey($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemXrefKey relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemXrefKey() Adds a LEFT JOIN clause and with to the query using the ItemXrefKey relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemXrefKey() Adds a RIGHT JOIN clause and with to the query using the ItemXrefKey relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemXrefKey() Adds a INNER JOIN clause and with to the query using the ItemXrefKey relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemXrefManufacturer($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemXrefManufacturer relation
 * @method     ChildItemMasterItemQuery rightJoinItemXrefManufacturer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemXrefManufacturer relation
 * @method     ChildItemMasterItemQuery innerJoinItemXrefManufacturer($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemXrefManufacturer relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemXrefManufacturer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemXrefManufacturer relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemXrefManufacturer() Adds a LEFT JOIN clause and with to the query using the ItemXrefManufacturer relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemXrefManufacturer() Adds a RIGHT JOIN clause and with to the query using the ItemXrefManufacturer relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemXrefManufacturer() Adds a INNER JOIN clause and with to the query using the ItemXrefManufacturer relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemXrefCustomerNote($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemXrefCustomerNote relation
 * @method     ChildItemMasterItemQuery rightJoinItemXrefCustomerNote($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemXrefCustomerNote relation
 * @method     ChildItemMasterItemQuery innerJoinItemXrefCustomerNote($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemXrefCustomerNote relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemXrefCustomerNote($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemXrefCustomerNote relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemXrefCustomerNote() Adds a LEFT JOIN clause and with to the query using the ItemXrefCustomerNote relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemXrefCustomerNote() Adds a RIGHT JOIN clause and with to the query using the ItemXrefCustomerNote relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemXrefCustomerNote() Adds a INNER JOIN clause and with to the query using the ItemXrefCustomerNote relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvOptCodeNote($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvOptCodeNote relation
 * @method     ChildItemMasterItemQuery rightJoinInvOptCodeNote($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvOptCodeNote relation
 * @method     ChildItemMasterItemQuery innerJoinInvOptCodeNote($relationAlias = null) Adds a INNER JOIN clause to the query using the InvOptCodeNote relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvOptCodeNote($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvOptCodeNote relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvOptCodeNote() Adds a LEFT JOIN clause and with to the query using the InvOptCodeNote relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvOptCodeNote() Adds a RIGHT JOIN clause and with to the query using the InvOptCodeNote relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvOptCodeNote() Adds a INNER JOIN clause and with to the query using the InvOptCodeNote relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemXrefVendorNoteDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemXrefVendorNoteDetail relation
 * @method     ChildItemMasterItemQuery rightJoinItemXrefVendorNoteDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemXrefVendorNoteDetail relation
 * @method     ChildItemMasterItemQuery innerJoinItemXrefVendorNoteDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemXrefVendorNoteDetail relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemXrefVendorNoteDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemXrefVendorNoteDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemXrefVendorNoteDetail() Adds a LEFT JOIN clause and with to the query using the ItemXrefVendorNoteDetail relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemXrefVendorNoteDetail() Adds a RIGHT JOIN clause and with to the query using the ItemXrefVendorNoteDetail relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemXrefVendorNoteDetail() Adds a INNER JOIN clause and with to the query using the ItemXrefVendorNoteDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemXrefVendorNoteInternal($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemXrefVendorNoteInternal relation
 * @method     ChildItemMasterItemQuery rightJoinItemXrefVendorNoteInternal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemXrefVendorNoteInternal relation
 * @method     ChildItemMasterItemQuery innerJoinItemXrefVendorNoteInternal($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemXrefVendorNoteInternal relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemXrefVendorNoteInternal($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemXrefVendorNoteInternal relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemXrefVendorNoteInternal() Adds a LEFT JOIN clause and with to the query using the ItemXrefVendorNoteInternal relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemXrefVendorNoteInternal() Adds a RIGHT JOIN clause and with to the query using the ItemXrefVendorNoteInternal relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemXrefVendorNoteInternal() Adds a INNER JOIN clause and with to the query using the ItemXrefVendorNoteInternal relation
 *
 * @method     ChildItemMasterItemQuery leftJoinInvPallet($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvPallet relation
 * @method     ChildItemMasterItemQuery rightJoinInvPallet($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvPallet relation
 * @method     ChildItemMasterItemQuery innerJoinInvPallet($relationAlias = null) Adds a INNER JOIN clause to the query using the InvPallet relation
 *
 * @method     ChildItemMasterItemQuery joinWithInvPallet($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvPallet relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithInvPallet() Adds a LEFT JOIN clause and with to the query using the InvPallet relation
 * @method     ChildItemMasterItemQuery rightJoinWithInvPallet() Adds a RIGHT JOIN clause and with to the query using the InvPallet relation
 * @method     ChildItemMasterItemQuery innerJoinWithInvPallet() Adds a INNER JOIN clause and with to the query using the InvPallet relation
 *
 * @method     ChildItemMasterItemQuery leftJoinPurchaseOrderDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetail relation
 * @method     ChildItemMasterItemQuery rightJoinPurchaseOrderDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetail relation
 * @method     ChildItemMasterItemQuery innerJoinPurchaseOrderDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildItemMasterItemQuery joinWithPurchaseOrderDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithPurchaseOrderDetail() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetail relation
 * @method     ChildItemMasterItemQuery rightJoinWithPurchaseOrderDetail() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetail relation
 * @method     ChildItemMasterItemQuery innerJoinWithPurchaseOrderDetail() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinPurchaseOrderDetailReceipt($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetailReceipt relation
 * @method     ChildItemMasterItemQuery rightJoinPurchaseOrderDetailReceipt($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetailReceipt relation
 * @method     ChildItemMasterItemQuery innerJoinPurchaseOrderDetailReceipt($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetailReceipt relation
 *
 * @method     ChildItemMasterItemQuery joinWithPurchaseOrderDetailReceipt($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetailReceipt relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithPurchaseOrderDetailReceipt() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetailReceipt relation
 * @method     ChildItemMasterItemQuery rightJoinWithPurchaseOrderDetailReceipt() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetailReceipt relation
 * @method     ChildItemMasterItemQuery innerJoinWithPurchaseOrderDetailReceipt() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetailReceipt relation
 *
 * @method     ChildItemMasterItemQuery leftJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildItemMasterItemQuery rightJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildItemMasterItemQuery innerJoinPurchaseOrderDetailReceiving($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildItemMasterItemQuery joinWithPurchaseOrderDetailReceiving($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithPurchaseOrderDetailReceiving() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildItemMasterItemQuery rightJoinWithPurchaseOrderDetailReceiving() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 * @method     ChildItemMasterItemQuery innerJoinWithPurchaseOrderDetailReceiving() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetailReceiving relation
 *
 * @method     ChildItemMasterItemQuery leftJoinPurchaseOrderDetailLotReceiving($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildItemMasterItemQuery rightJoinPurchaseOrderDetailLotReceiving($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildItemMasterItemQuery innerJoinPurchaseOrderDetailLotReceiving($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
 *
 * @method     ChildItemMasterItemQuery joinWithPurchaseOrderDetailLotReceiving($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithPurchaseOrderDetailLotReceiving() Adds a LEFT JOIN clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildItemMasterItemQuery rightJoinWithPurchaseOrderDetailLotReceiving() Adds a RIGHT JOIN clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 * @method     ChildItemMasterItemQuery innerJoinWithPurchaseOrderDetailLotReceiving() Adds a INNER JOIN clause and with to the query using the PurchaseOrderDetailLotReceiving relation
 *
 * @method     ChildItemMasterItemQuery leftJoinBomComponent($relationAlias = null) Adds a LEFT JOIN clause to the query using the BomComponent relation
 * @method     ChildItemMasterItemQuery rightJoinBomComponent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BomComponent relation
 * @method     ChildItemMasterItemQuery innerJoinBomComponent($relationAlias = null) Adds a INNER JOIN clause to the query using the BomComponent relation
 *
 * @method     ChildItemMasterItemQuery joinWithBomComponent($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BomComponent relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithBomComponent() Adds a LEFT JOIN clause and with to the query using the BomComponent relation
 * @method     ChildItemMasterItemQuery rightJoinWithBomComponent() Adds a RIGHT JOIN clause and with to the query using the BomComponent relation
 * @method     ChildItemMasterItemQuery innerJoinWithBomComponent() Adds a INNER JOIN clause and with to the query using the BomComponent relation
 *
 * @method     ChildItemMasterItemQuery leftJoinBomItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the BomItem relation
 * @method     ChildItemMasterItemQuery rightJoinBomItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BomItem relation
 * @method     ChildItemMasterItemQuery innerJoinBomItem($relationAlias = null) Adds a INNER JOIN clause to the query using the BomItem relation
 *
 * @method     ChildItemMasterItemQuery joinWithBomItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BomItem relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithBomItem() Adds a LEFT JOIN clause and with to the query using the BomItem relation
 * @method     ChildItemMasterItemQuery rightJoinWithBomItem() Adds a RIGHT JOIN clause and with to the query using the BomItem relation
 * @method     ChildItemMasterItemQuery innerJoinWithBomItem() Adds a INNER JOIN clause and with to the query using the BomItem relation
 *
 * @method     ChildItemMasterItemQuery leftJoinBookingDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the BookingDetail relation
 * @method     ChildItemMasterItemQuery rightJoinBookingDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BookingDetail relation
 * @method     ChildItemMasterItemQuery innerJoinBookingDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the BookingDetail relation
 *
 * @method     ChildItemMasterItemQuery joinWithBookingDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BookingDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithBookingDetail() Adds a LEFT JOIN clause and with to the query using the BookingDetail relation
 * @method     ChildItemMasterItemQuery rightJoinWithBookingDetail() Adds a RIGHT JOIN clause and with to the query using the BookingDetail relation
 * @method     ChildItemMasterItemQuery innerJoinWithBookingDetail() Adds a INNER JOIN clause and with to the query using the BookingDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinSalesHistoryDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesHistoryDetail relation
 * @method     ChildItemMasterItemQuery rightJoinSalesHistoryDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesHistoryDetail relation
 * @method     ChildItemMasterItemQuery innerJoinSalesHistoryDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesHistoryDetail relation
 *
 * @method     ChildItemMasterItemQuery joinWithSalesHistoryDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesHistoryDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithSalesHistoryDetail() Adds a LEFT JOIN clause and with to the query using the SalesHistoryDetail relation
 * @method     ChildItemMasterItemQuery rightJoinWithSalesHistoryDetail() Adds a RIGHT JOIN clause and with to the query using the SalesHistoryDetail relation
 * @method     ChildItemMasterItemQuery innerJoinWithSalesHistoryDetail() Adds a INNER JOIN clause and with to the query using the SalesHistoryDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinSalesOrderDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrderDetail relation
 * @method     ChildItemMasterItemQuery rightJoinSalesOrderDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrderDetail relation
 * @method     ChildItemMasterItemQuery innerJoinSalesOrderDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrderDetail relation
 *
 * @method     ChildItemMasterItemQuery joinWithSalesOrderDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrderDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithSalesOrderDetail() Adds a LEFT JOIN clause and with to the query using the SalesOrderDetail relation
 * @method     ChildItemMasterItemQuery rightJoinWithSalesOrderDetail() Adds a RIGHT JOIN clause and with to the query using the SalesOrderDetail relation
 * @method     ChildItemMasterItemQuery innerJoinWithSalesOrderDetail() Adds a INNER JOIN clause and with to the query using the SalesOrderDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinSalesOrderLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrderLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinSalesOrderLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrderLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinSalesOrderLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrderLotserial relation
 *
 * @method     ChildItemMasterItemQuery joinWithSalesOrderLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrderLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithSalesOrderLotserial() Adds a LEFT JOIN clause and with to the query using the SalesOrderLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinWithSalesOrderLotserial() Adds a RIGHT JOIN clause and with to the query using the SalesOrderLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinWithSalesOrderLotserial() Adds a INNER JOIN clause and with to the query using the SalesOrderLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinSalesHistoryLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesHistoryLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinSalesHistoryLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesHistoryLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinSalesHistoryLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesHistoryLotserial relation
 *
 * @method     ChildItemMasterItemQuery joinWithSalesHistoryLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesHistoryLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithSalesHistoryLotserial() Adds a LEFT JOIN clause and with to the query using the SalesHistoryLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinWithSalesHistoryLotserial() Adds a RIGHT JOIN clause and with to the query using the SalesHistoryLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinWithSalesHistoryLotserial() Adds a INNER JOIN clause and with to the query using the SalesHistoryLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinSoAllocatedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoAllocatedLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinSoAllocatedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoAllocatedLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinSoAllocatedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildItemMasterItemQuery joinWithSoAllocatedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithSoAllocatedLotserial() Adds a LEFT JOIN clause and with to the query using the SoAllocatedLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinWithSoAllocatedLotserial() Adds a RIGHT JOIN clause and with to the query using the SoAllocatedLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinWithSoAllocatedLotserial() Adds a INNER JOIN clause and with to the query using the SoAllocatedLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemPricingDiscount($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemPricingDiscount relation
 * @method     ChildItemMasterItemQuery rightJoinItemPricingDiscount($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemPricingDiscount relation
 * @method     ChildItemMasterItemQuery innerJoinItemPricingDiscount($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemPricingDiscount relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemPricingDiscount($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemPricingDiscount relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemPricingDiscount() Adds a LEFT JOIN clause and with to the query using the ItemPricingDiscount relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemPricingDiscount() Adds a RIGHT JOIN clause and with to the query using the ItemPricingDiscount relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemPricingDiscount() Adds a INNER JOIN clause and with to the query using the ItemPricingDiscount relation
 *
 * @method     ChildItemMasterItemQuery leftJoinSoPickedLotserial($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoPickedLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinSoPickedLotserial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoPickedLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinSoPickedLotserial($relationAlias = null) Adds a INNER JOIN clause to the query using the SoPickedLotserial relation
 *
 * @method     ChildItemMasterItemQuery joinWithSoPickedLotserial($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SoPickedLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithSoPickedLotserial() Adds a LEFT JOIN clause and with to the query using the SoPickedLotserial relation
 * @method     ChildItemMasterItemQuery rightJoinWithSoPickedLotserial() Adds a RIGHT JOIN clause and with to the query using the SoPickedLotserial relation
 * @method     ChildItemMasterItemQuery innerJoinWithSoPickedLotserial() Adds a INNER JOIN clause and with to the query using the SoPickedLotserial relation
 *
 * @method     ChildItemMasterItemQuery leftJoinSoStandingOrderDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoStandingOrderDetail relation
 * @method     ChildItemMasterItemQuery rightJoinSoStandingOrderDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoStandingOrderDetail relation
 * @method     ChildItemMasterItemQuery innerJoinSoStandingOrderDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the SoStandingOrderDetail relation
 *
 * @method     ChildItemMasterItemQuery joinWithSoStandingOrderDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SoStandingOrderDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithSoStandingOrderDetail() Adds a LEFT JOIN clause and with to the query using the SoStandingOrderDetail relation
 * @method     ChildItemMasterItemQuery rightJoinWithSoStandingOrderDetail() Adds a RIGHT JOIN clause and with to the query using the SoStandingOrderDetail relation
 * @method     ChildItemMasterItemQuery innerJoinWithSoStandingOrderDetail() Adds a INNER JOIN clause and with to the query using the SoStandingOrderDetail relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemXrefUpc($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemXrefUpc relation
 * @method     ChildItemMasterItemQuery rightJoinItemXrefUpc($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemXrefUpc relation
 * @method     ChildItemMasterItemQuery innerJoinItemXrefUpc($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemXrefUpc relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemXrefUpc($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemXrefUpc relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemXrefUpc() Adds a LEFT JOIN clause and with to the query using the ItemXrefUpc relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemXrefUpc() Adds a RIGHT JOIN clause and with to the query using the ItemXrefUpc relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemXrefUpc() Adds a INNER JOIN clause and with to the query using the ItemXrefUpc relation
 *
 * @method     ChildItemMasterItemQuery leftJoinItemXrefVendor($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemXrefVendor relation
 * @method     ChildItemMasterItemQuery rightJoinItemXrefVendor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemXrefVendor relation
 * @method     ChildItemMasterItemQuery innerJoinItemXrefVendor($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemXrefVendor relation
 *
 * @method     ChildItemMasterItemQuery joinWithItemXrefVendor($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemXrefVendor relation
 *
 * @method     ChildItemMasterItemQuery leftJoinWithItemXrefVendor() Adds a LEFT JOIN clause and with to the query using the ItemXrefVendor relation
 * @method     ChildItemMasterItemQuery rightJoinWithItemXrefVendor() Adds a RIGHT JOIN clause and with to the query using the ItemXrefVendor relation
 * @method     ChildItemMasterItemQuery innerJoinWithItemXrefVendor() Adds a INNER JOIN clause and with to the query using the ItemXrefVendor relation
 *
 * @method     \UnitofMeasureSaleQuery|\UnitofMeasurePurchaseQuery|\InvGroupCodeQuery|\InvPriceCodeQuery|\InvCommissionCodeQuery|\ItemPricingQuery|\ItemXrefCustomerQuery|\InvWhseItemBinQuery|\ItemAddonItemQuery|\ItemAddonItemQuery|\ItmDimensionQuery|\InvHazmatItemQuery|\InvWhseLotQuery|\ItemSubstituteQuery|\ItemSubstituteQuery|\InvLotTagQuery|\InvItem2ItemQuery|\InvItem2ItemQuery|\InvKitComponentQuery|\InvKitQuery|\InvLotMasterQuery|\InvSerialMasterQuery|\InvTransferDetailQuery|\InvTransferLotserialQuery|\InvTransferPreAllocatedLotserialQuery|\InvTransferPickedLotserialQuery|\InvSerialWarrantyQuery|\WarehouseInventoryQuery|\ItemXrefKeyQuery|\ItemXrefManufacturerQuery|\ItemXrefCustomerNoteQuery|\InvOptCodeNoteQuery|\ItemXrefVendorNoteDetailQuery|\ItemXrefVendorNoteInternalQuery|\InvPalletQuery|\PurchaseOrderDetailQuery|\PurchaseOrderDetailReceiptQuery|\PurchaseOrderDetailReceivingQuery|\PurchaseOrderDetailLotReceivingQuery|\BomComponentQuery|\BomItemQuery|\BookingDetailQuery|\SalesHistoryDetailQuery|\SalesOrderDetailQuery|\SalesOrderLotserialQuery|\SalesHistoryLotserialQuery|\SoAllocatedLotserialQuery|\ItemPricingDiscountQuery|\SoPickedLotserialQuery|\SoStandingOrderDetailQuery|\ItemXrefUpcQuery|\ItemXrefVendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemMasterItem|null findOne(?ConnectionInterface $con = null) Return the first ChildItemMasterItem matching the query
 * @method     ChildItemMasterItem findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildItemMasterItem matching the query, or a new ChildItemMasterItem object populated from the query conditions when no match is found
 *
 * @method     ChildItemMasterItem|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemMasterItem filtered by the InitItemNbr column
 * @method     ChildItemMasterItem|null findOneByInitdesc1(string $InitDesc1) Return the first ChildItemMasterItem filtered by the InitDesc1 column
 * @method     ChildItemMasterItem|null findOneByInitdesc2(string $InitDesc2) Return the first ChildItemMasterItem filtered by the InitDesc2 column
 * @method     ChildItemMasterItem|null findOneByIntbgrup(string $IntbGrup) Return the first ChildItemMasterItem filtered by the IntbGrup column
 * @method     ChildItemMasterItem|null findOneByInitformatcode(string $InitFormatCode) Return the first ChildItemMasterItem filtered by the InitFormatCode column
 * @method     ChildItemMasterItem|null findOneByInitsplit(string $InitSplit) Return the first ChildItemMasterItem filtered by the InitSplit column
 * @method     ChildItemMasterItem|null findOneByInitsherdatecd(string $InitSherDateCd) Return the first ChildItemMasterItem filtered by the InitSherDateCd column
 * @method     ChildItemMasterItem|null findOneByInitcoreyn(string $InitCoreYN) Return the first ChildItemMasterItem filtered by the InitCoreYN column
 * @method     ChildItemMasterItem|null findOneByIntbusercode1(string $IntbUserCode1) Return the first ChildItemMasterItem filtered by the IntbUserCode1 column
 * @method     ChildItemMasterItem|null findOneByIntbusercode2(string $IntbUserCode2) Return the first ChildItemMasterItem filtered by the IntbUserCode2 column
 * @method     ChildItemMasterItem|null findOneByInittype(string $InitType) Return the first ChildItemMasterItem filtered by the InitType column
 * @method     ChildItemMasterItem|null findOneByInittax(string $InitTax) Return the first ChildItemMasterItem filtered by the InitTax column
 * @method     ChildItemMasterItem|null findOneByInitrtlpric(string $InitRtlPric) Return the first ChildItemMasterItem filtered by the InitRtlPric column
 * @method     ChildItemMasterItem|null findOneByInitstatchgd(string $InitStatChgd) Return the first ChildItemMasterItem filtered by the InitStatChgd column
 * @method     ChildItemMasterItem|null findOneByInitspecitemcd(string $InitSpecItemCd) Return the first ChildItemMasterItem filtered by the InitSpecItemCd column
 * @method     ChildItemMasterItem|null findOneByInitwarrdays(int $InitWarrDays) Return the first ChildItemMasterItem filtered by the InitWarrDays column
 * @method     ChildItemMasterItem|null findOneByIntbuomsale(string $IntbUomSale) Return the first ChildItemMasterItem filtered by the IntbUomSale column
 * @method     ChildItemMasterItem|null findOneByInitwght(string $InitWght) Return the first ChildItemMasterItem filtered by the InitWght column
 * @method     ChildItemMasterItem|null findOneByInitbord(string $InitBord) Return the first ChildItemMasterItem filtered by the InitBord column
 * @method     ChildItemMasterItem|null findOneByInitbaseitemid(string $InitBaseItemId) Return the first ChildItemMasterItem filtered by the InitBaseItemId column
 * @method     ChildItemMasterItem|null findOneByInitspecificcust(string $InitSpecificCust) Return the first ChildItemMasterItem filtered by the InitSpecificCust column
 * @method     ChildItemMasterItem|null findOneByInitgivedisc(string $InitGiveDisc) Return the first ChildItemMasterItem filtered by the InitGiveDisc column
 * @method     ChildItemMasterItem|null findOneByInitasstcode(string $InitAsstCode) Return the first ChildItemMasterItem filtered by the InitAsstCode column
 * @method     ChildItemMasterItem|null findOneByInitpriclastdate(string $InitPricLastDate) Return the first ChildItemMasterItem filtered by the InitPricLastDate column
 * @method     ChildItemMasterItem|null findOneByIntbuompur(string $IntbUomPur) Return the first ChildItemMasterItem filtered by the IntbUomPur column
 * @method     ChildItemMasterItem|null findOneByInitstancost(string $InitStanCost) Return the first ChildItemMasterItem filtered by the InitStanCost column
 * @method     ChildItemMasterItem|null findOneByInitstancostbase(string $InitStanCostBase) Return the first ChildItemMasterItem filtered by the InitStanCostBase column
 * @method     ChildItemMasterItem|null findOneByInitstancostlastdate(string $InitStanCostLastDate) Return the first ChildItemMasterItem filtered by the InitStanCostLastDate column
 * @method     ChildItemMasterItem|null findOneByInitminmarg(string $InitMinMarg) Return the first ChildItemMasterItem filtered by the InitMinMarg column
 * @method     ChildItemMasterItem|null findOneByInitvendid(string $InitVendId) Return the first ChildItemMasterItem filtered by the InitVendId column
 * @method     ChildItemMasterItem|null findOneByInitinspect(string $InitInspect) Return the first ChildItemMasterItem filtered by the InitInspect column
 * @method     ChildItemMasterItem|null findOneByInitstockcode(string $InitStockCode) Return the first ChildItemMasterItem filtered by the InitStockCode column
 * @method     ChildItemMasterItem|null findOneByInitsupritemnbr(string $InitSuprItemNbr) Return the first ChildItemMasterItem filtered by the InitSuprItemNbr column
 * @method     ChildItemMasterItem|null findOneByInitvendshipfrom(string $InitVendShipFrom) Return the first ChildItemMasterItem filtered by the InitVendShipFrom column
 * @method     ChildItemMasterItem|null findOneByInitcntryoforigin(string $InitCntryOfOrigin) Return the first ChildItemMasterItem filtered by the InitCntryOfOrigin column
 * @method     ChildItemMasterItem|null findOneByInitasstqty(string $InitAsstQty) Return the first ChildItemMasterItem filtered by the InitAsstQty column
 * @method     ChildItemMasterItem|null findOneByIntbtariffcode(string $IntbTariffCode) Return the first ChildItemMasterItem filtered by the IntbTariffCode column
 * @method     ChildItemMasterItem|null findOneByInitpreference(string $InitPreference) Return the first ChildItemMasterItem filtered by the InitPreference column
 * @method     ChildItemMasterItem|null findOneByInitproducer(string $InitProducer) Return the first ChildItemMasterItem filtered by the InitProducer column
 * @method     ChildItemMasterItem|null findOneByInitdocumentation(string $InitDocumentation) Return the first ChildItemMasterItem filtered by the InitDocumentation column
 * @method     ChildItemMasterItem|null findOneByInitpurchcrtnqty(int $InitPurchCrtnQty) Return the first ChildItemMasterItem filtered by the InitPurchCrtnQty column
 * @method     ChildItemMasterItem|null findOneByAptbbuyrcode(string $AptbBuyrCode) Return the first ChildItemMasterItem filtered by the AptbBuyrCode column
 * @method     ChildItemMasterItem|null findOneByInitlastcost(string $InitLastCost) Return the first ChildItemMasterItem filtered by the InitLastCost column
 * @method     ChildItemMasterItem|null findOneByInitliters(string $InitLiters) Return the first ChildItemMasterItem filtered by the InitLiters column
 * @method     ChildItemMasterItem|null findOneByIntbmsdscode(string $IntbMsdsCode) Return the first ChildItemMasterItem filtered by the IntbMsdsCode column
 * @method     ChildItemMasterItem|null findOneByInitrequirefrt(string $InitRequireFrt) Return the first ChildItemMasterItem filtered by the InitRequireFrt column
 * @method     ChildItemMasterItem|null findOneByInitmfrtcode(string $InitMfrtCode) Return the first ChildItemMasterItem filtered by the InitMfrtCode column
 * @method     ChildItemMasterItem|null findOneByInitinnerpackqty(int $InitInnerPackQty) Return the first ChildItemMasterItem filtered by the InitInnerPackQty column
 * @method     ChildItemMasterItem|null findOneByInitouterpackqty(int $InitOuterPackQty) Return the first ChildItemMasterItem filtered by the InitOuterPackQty column
 * @method     ChildItemMasterItem|null findOneByInitbasestancost(string $InitBaseStanCost) Return the first ChildItemMasterItem filtered by the InitBaseStanCost column
 * @method     ChildItemMasterItem|null findOneByInitshiptareqty(int $InitShipTareQty) Return the first ChildItemMasterItem filtered by the InitShipTareQty column
 * @method     ChildItemMasterItem|null findOneByInitwgitem(string $InitWgItem) Return the first ChildItemMasterItem filtered by the InitWgItem column
 * @method     ChildItemMasterItem|null findOneByIntbpricgrup(string $IntbPricGrup) Return the first ChildItemMasterItem filtered by the IntbPricGrup column
 * @method     ChildItemMasterItem|null findOneByIntbcommgrup(string $IntbCommGrup) Return the first ChildItemMasterItem filtered by the IntbCommGrup column
 * @method     ChildItemMasterItem|null findOneByInitlastcostdate(string $InitLastCostDate) Return the first ChildItemMasterItem filtered by the InitLastCostDate column
 * @method     ChildItemMasterItem|null findOneByInitqtypercase(int $InitQtyPerCase) Return the first ChildItemMasterItem filtered by the InitQtyPerCase column
 * @method     ChildItemMasterItem|null findOneByInitrevision(string $InitRevision) Return the first ChildItemMasterItem filtered by the InitRevision column
 * @method     ChildItemMasterItem|null findOneByInitcommsaleqty(int $InitCommSaleQty) Return the first ChildItemMasterItem filtered by the InitCommSaleQty column
 * @method     ChildItemMasterItem|null findOneByInitcubes(string $InitCubes) Return the first ChildItemMasterItem filtered by the InitCubes column
 * @method     ChildItemMasterItem|null findOneByInittimefence(int $InitTimeFence) Return the first ChildItemMasterItem filtered by the InitTimeFence column
 * @method     ChildItemMasterItem|null findOneByInitsrvcminchrg(string $InitSrvcMinChrg) Return the first ChildItemMasterItem filtered by the InitSrvcMinChrg column
 * @method     ChildItemMasterItem|null findOneByInitMinMargBase(string $InitMinMargBase) Return the first ChildItemMasterItem filtered by the InitMinMargBase column
 * @method     ChildItemMasterItem|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemMasterItem filtered by the DateUpdtd column
 * @method     ChildItemMasterItem|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemMasterItem filtered by the TimeUpdtd column
 * @method     ChildItemMasterItem|null findOneByDummy(string $dummy) Return the first ChildItemMasterItem filtered by the dummy column
 *
 * @method     ChildItemMasterItem requirePk($key, ?ConnectionInterface $con = null) Return the ChildItemMasterItem by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOne(?ConnectionInterface $con = null) Return the first ChildItemMasterItem matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemMasterItem requireOneByInititemnbr(string $InitItemNbr) Return the first ChildItemMasterItem filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitdesc1(string $InitDesc1) Return the first ChildItemMasterItem filtered by the InitDesc1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitdesc2(string $InitDesc2) Return the first ChildItemMasterItem filtered by the InitDesc2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByIntbgrup(string $IntbGrup) Return the first ChildItemMasterItem filtered by the IntbGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitformatcode(string $InitFormatCode) Return the first ChildItemMasterItem filtered by the InitFormatCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitsplit(string $InitSplit) Return the first ChildItemMasterItem filtered by the InitSplit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitsherdatecd(string $InitSherDateCd) Return the first ChildItemMasterItem filtered by the InitSherDateCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitcoreyn(string $InitCoreYN) Return the first ChildItemMasterItem filtered by the InitCoreYN column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByIntbusercode1(string $IntbUserCode1) Return the first ChildItemMasterItem filtered by the IntbUserCode1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByIntbusercode2(string $IntbUserCode2) Return the first ChildItemMasterItem filtered by the IntbUserCode2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInittype(string $InitType) Return the first ChildItemMasterItem filtered by the InitType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInittax(string $InitTax) Return the first ChildItemMasterItem filtered by the InitTax column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitrtlpric(string $InitRtlPric) Return the first ChildItemMasterItem filtered by the InitRtlPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitstatchgd(string $InitStatChgd) Return the first ChildItemMasterItem filtered by the InitStatChgd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitspecitemcd(string $InitSpecItemCd) Return the first ChildItemMasterItem filtered by the InitSpecItemCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitwarrdays(int $InitWarrDays) Return the first ChildItemMasterItem filtered by the InitWarrDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByIntbuomsale(string $IntbUomSale) Return the first ChildItemMasterItem filtered by the IntbUomSale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitwght(string $InitWght) Return the first ChildItemMasterItem filtered by the InitWght column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitbord(string $InitBord) Return the first ChildItemMasterItem filtered by the InitBord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitbaseitemid(string $InitBaseItemId) Return the first ChildItemMasterItem filtered by the InitBaseItemId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitspecificcust(string $InitSpecificCust) Return the first ChildItemMasterItem filtered by the InitSpecificCust column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitgivedisc(string $InitGiveDisc) Return the first ChildItemMasterItem filtered by the InitGiveDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitasstcode(string $InitAsstCode) Return the first ChildItemMasterItem filtered by the InitAsstCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitpriclastdate(string $InitPricLastDate) Return the first ChildItemMasterItem filtered by the InitPricLastDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByIntbuompur(string $IntbUomPur) Return the first ChildItemMasterItem filtered by the IntbUomPur column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitstancost(string $InitStanCost) Return the first ChildItemMasterItem filtered by the InitStanCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitstancostbase(string $InitStanCostBase) Return the first ChildItemMasterItem filtered by the InitStanCostBase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitstancostlastdate(string $InitStanCostLastDate) Return the first ChildItemMasterItem filtered by the InitStanCostLastDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitminmarg(string $InitMinMarg) Return the first ChildItemMasterItem filtered by the InitMinMarg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitvendid(string $InitVendId) Return the first ChildItemMasterItem filtered by the InitVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitinspect(string $InitInspect) Return the first ChildItemMasterItem filtered by the InitInspect column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitstockcode(string $InitStockCode) Return the first ChildItemMasterItem filtered by the InitStockCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitsupritemnbr(string $InitSuprItemNbr) Return the first ChildItemMasterItem filtered by the InitSuprItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitvendshipfrom(string $InitVendShipFrom) Return the first ChildItemMasterItem filtered by the InitVendShipFrom column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitcntryoforigin(string $InitCntryOfOrigin) Return the first ChildItemMasterItem filtered by the InitCntryOfOrigin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitasstqty(string $InitAsstQty) Return the first ChildItemMasterItem filtered by the InitAsstQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByIntbtariffcode(string $IntbTariffCode) Return the first ChildItemMasterItem filtered by the IntbTariffCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitpreference(string $InitPreference) Return the first ChildItemMasterItem filtered by the InitPreference column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitproducer(string $InitProducer) Return the first ChildItemMasterItem filtered by the InitProducer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitdocumentation(string $InitDocumentation) Return the first ChildItemMasterItem filtered by the InitDocumentation column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitpurchcrtnqty(int $InitPurchCrtnQty) Return the first ChildItemMasterItem filtered by the InitPurchCrtnQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByAptbbuyrcode(string $AptbBuyrCode) Return the first ChildItemMasterItem filtered by the AptbBuyrCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitlastcost(string $InitLastCost) Return the first ChildItemMasterItem filtered by the InitLastCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitliters(string $InitLiters) Return the first ChildItemMasterItem filtered by the InitLiters column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByIntbmsdscode(string $IntbMsdsCode) Return the first ChildItemMasterItem filtered by the IntbMsdsCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitrequirefrt(string $InitRequireFrt) Return the first ChildItemMasterItem filtered by the InitRequireFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitmfrtcode(string $InitMfrtCode) Return the first ChildItemMasterItem filtered by the InitMfrtCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitinnerpackqty(int $InitInnerPackQty) Return the first ChildItemMasterItem filtered by the InitInnerPackQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitouterpackqty(int $InitOuterPackQty) Return the first ChildItemMasterItem filtered by the InitOuterPackQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitbasestancost(string $InitBaseStanCost) Return the first ChildItemMasterItem filtered by the InitBaseStanCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitshiptareqty(int $InitShipTareQty) Return the first ChildItemMasterItem filtered by the InitShipTareQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitwgitem(string $InitWgItem) Return the first ChildItemMasterItem filtered by the InitWgItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByIntbpricgrup(string $IntbPricGrup) Return the first ChildItemMasterItem filtered by the IntbPricGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByIntbcommgrup(string $IntbCommGrup) Return the first ChildItemMasterItem filtered by the IntbCommGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitlastcostdate(string $InitLastCostDate) Return the first ChildItemMasterItem filtered by the InitLastCostDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitqtypercase(int $InitQtyPerCase) Return the first ChildItemMasterItem filtered by the InitQtyPerCase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitrevision(string $InitRevision) Return the first ChildItemMasterItem filtered by the InitRevision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitcommsaleqty(int $InitCommSaleQty) Return the first ChildItemMasterItem filtered by the InitCommSaleQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitcubes(string $InitCubes) Return the first ChildItemMasterItem filtered by the InitCubes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInittimefence(int $InitTimeFence) Return the first ChildItemMasterItem filtered by the InitTimeFence column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitsrvcminchrg(string $InitSrvcMinChrg) Return the first ChildItemMasterItem filtered by the InitSrvcMinChrg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByInitMinMargBase(string $InitMinMargBase) Return the first ChildItemMasterItem filtered by the InitMinMargBase column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemMasterItem filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemMasterItem filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByDummy(string $dummy) Return the first ChildItemMasterItem filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemMasterItem[]|Collection find(?ConnectionInterface $con = null) Return ChildItemMasterItem objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> find(?ConnectionInterface $con = null) Return ChildItemMasterItem objects based on current ModelCriteria
 *
 * @method     ChildItemMasterItem[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildItemMasterItem objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildItemMasterItem objects filtered by the InitItemNbr column
 * @method     ChildItemMasterItem[]|Collection findByInitdesc1(string|array<string> $InitDesc1) Return ChildItemMasterItem objects filtered by the InitDesc1 column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitdesc1(string|array<string> $InitDesc1) Return ChildItemMasterItem objects filtered by the InitDesc1 column
 * @method     ChildItemMasterItem[]|Collection findByInitdesc2(string|array<string> $InitDesc2) Return ChildItemMasterItem objects filtered by the InitDesc2 column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitdesc2(string|array<string> $InitDesc2) Return ChildItemMasterItem objects filtered by the InitDesc2 column
 * @method     ChildItemMasterItem[]|Collection findByIntbgrup(string|array<string> $IntbGrup) Return ChildItemMasterItem objects filtered by the IntbGrup column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByIntbgrup(string|array<string> $IntbGrup) Return ChildItemMasterItem objects filtered by the IntbGrup column
 * @method     ChildItemMasterItem[]|Collection findByInitformatcode(string|array<string> $InitFormatCode) Return ChildItemMasterItem objects filtered by the InitFormatCode column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitformatcode(string|array<string> $InitFormatCode) Return ChildItemMasterItem objects filtered by the InitFormatCode column
 * @method     ChildItemMasterItem[]|Collection findByInitsplit(string|array<string> $InitSplit) Return ChildItemMasterItem objects filtered by the InitSplit column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitsplit(string|array<string> $InitSplit) Return ChildItemMasterItem objects filtered by the InitSplit column
 * @method     ChildItemMasterItem[]|Collection findByInitsherdatecd(string|array<string> $InitSherDateCd) Return ChildItemMasterItem objects filtered by the InitSherDateCd column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitsherdatecd(string|array<string> $InitSherDateCd) Return ChildItemMasterItem objects filtered by the InitSherDateCd column
 * @method     ChildItemMasterItem[]|Collection findByInitcoreyn(string|array<string> $InitCoreYN) Return ChildItemMasterItem objects filtered by the InitCoreYN column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitcoreyn(string|array<string> $InitCoreYN) Return ChildItemMasterItem objects filtered by the InitCoreYN column
 * @method     ChildItemMasterItem[]|Collection findByIntbusercode1(string|array<string> $IntbUserCode1) Return ChildItemMasterItem objects filtered by the IntbUserCode1 column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByIntbusercode1(string|array<string> $IntbUserCode1) Return ChildItemMasterItem objects filtered by the IntbUserCode1 column
 * @method     ChildItemMasterItem[]|Collection findByIntbusercode2(string|array<string> $IntbUserCode2) Return ChildItemMasterItem objects filtered by the IntbUserCode2 column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByIntbusercode2(string|array<string> $IntbUserCode2) Return ChildItemMasterItem objects filtered by the IntbUserCode2 column
 * @method     ChildItemMasterItem[]|Collection findByInittype(string|array<string> $InitType) Return ChildItemMasterItem objects filtered by the InitType column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInittype(string|array<string> $InitType) Return ChildItemMasterItem objects filtered by the InitType column
 * @method     ChildItemMasterItem[]|Collection findByInittax(string|array<string> $InitTax) Return ChildItemMasterItem objects filtered by the InitTax column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInittax(string|array<string> $InitTax) Return ChildItemMasterItem objects filtered by the InitTax column
 * @method     ChildItemMasterItem[]|Collection findByInitrtlpric(string|array<string> $InitRtlPric) Return ChildItemMasterItem objects filtered by the InitRtlPric column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitrtlpric(string|array<string> $InitRtlPric) Return ChildItemMasterItem objects filtered by the InitRtlPric column
 * @method     ChildItemMasterItem[]|Collection findByInitstatchgd(string|array<string> $InitStatChgd) Return ChildItemMasterItem objects filtered by the InitStatChgd column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitstatchgd(string|array<string> $InitStatChgd) Return ChildItemMasterItem objects filtered by the InitStatChgd column
 * @method     ChildItemMasterItem[]|Collection findByInitspecitemcd(string|array<string> $InitSpecItemCd) Return ChildItemMasterItem objects filtered by the InitSpecItemCd column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitspecitemcd(string|array<string> $InitSpecItemCd) Return ChildItemMasterItem objects filtered by the InitSpecItemCd column
 * @method     ChildItemMasterItem[]|Collection findByInitwarrdays(int|array<int> $InitWarrDays) Return ChildItemMasterItem objects filtered by the InitWarrDays column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitwarrdays(int|array<int> $InitWarrDays) Return ChildItemMasterItem objects filtered by the InitWarrDays column
 * @method     ChildItemMasterItem[]|Collection findByIntbuomsale(string|array<string> $IntbUomSale) Return ChildItemMasterItem objects filtered by the IntbUomSale column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByIntbuomsale(string|array<string> $IntbUomSale) Return ChildItemMasterItem objects filtered by the IntbUomSale column
 * @method     ChildItemMasterItem[]|Collection findByInitwght(string|array<string> $InitWght) Return ChildItemMasterItem objects filtered by the InitWght column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitwght(string|array<string> $InitWght) Return ChildItemMasterItem objects filtered by the InitWght column
 * @method     ChildItemMasterItem[]|Collection findByInitbord(string|array<string> $InitBord) Return ChildItemMasterItem objects filtered by the InitBord column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitbord(string|array<string> $InitBord) Return ChildItemMasterItem objects filtered by the InitBord column
 * @method     ChildItemMasterItem[]|Collection findByInitbaseitemid(string|array<string> $InitBaseItemId) Return ChildItemMasterItem objects filtered by the InitBaseItemId column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitbaseitemid(string|array<string> $InitBaseItemId) Return ChildItemMasterItem objects filtered by the InitBaseItemId column
 * @method     ChildItemMasterItem[]|Collection findByInitspecificcust(string|array<string> $InitSpecificCust) Return ChildItemMasterItem objects filtered by the InitSpecificCust column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitspecificcust(string|array<string> $InitSpecificCust) Return ChildItemMasterItem objects filtered by the InitSpecificCust column
 * @method     ChildItemMasterItem[]|Collection findByInitgivedisc(string|array<string> $InitGiveDisc) Return ChildItemMasterItem objects filtered by the InitGiveDisc column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitgivedisc(string|array<string> $InitGiveDisc) Return ChildItemMasterItem objects filtered by the InitGiveDisc column
 * @method     ChildItemMasterItem[]|Collection findByInitasstcode(string|array<string> $InitAsstCode) Return ChildItemMasterItem objects filtered by the InitAsstCode column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitasstcode(string|array<string> $InitAsstCode) Return ChildItemMasterItem objects filtered by the InitAsstCode column
 * @method     ChildItemMasterItem[]|Collection findByInitpriclastdate(string|array<string> $InitPricLastDate) Return ChildItemMasterItem objects filtered by the InitPricLastDate column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitpriclastdate(string|array<string> $InitPricLastDate) Return ChildItemMasterItem objects filtered by the InitPricLastDate column
 * @method     ChildItemMasterItem[]|Collection findByIntbuompur(string|array<string> $IntbUomPur) Return ChildItemMasterItem objects filtered by the IntbUomPur column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByIntbuompur(string|array<string> $IntbUomPur) Return ChildItemMasterItem objects filtered by the IntbUomPur column
 * @method     ChildItemMasterItem[]|Collection findByInitstancost(string|array<string> $InitStanCost) Return ChildItemMasterItem objects filtered by the InitStanCost column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitstancost(string|array<string> $InitStanCost) Return ChildItemMasterItem objects filtered by the InitStanCost column
 * @method     ChildItemMasterItem[]|Collection findByInitstancostbase(string|array<string> $InitStanCostBase) Return ChildItemMasterItem objects filtered by the InitStanCostBase column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitstancostbase(string|array<string> $InitStanCostBase) Return ChildItemMasterItem objects filtered by the InitStanCostBase column
 * @method     ChildItemMasterItem[]|Collection findByInitstancostlastdate(string|array<string> $InitStanCostLastDate) Return ChildItemMasterItem objects filtered by the InitStanCostLastDate column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitstancostlastdate(string|array<string> $InitStanCostLastDate) Return ChildItemMasterItem objects filtered by the InitStanCostLastDate column
 * @method     ChildItemMasterItem[]|Collection findByInitminmarg(string|array<string> $InitMinMarg) Return ChildItemMasterItem objects filtered by the InitMinMarg column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitminmarg(string|array<string> $InitMinMarg) Return ChildItemMasterItem objects filtered by the InitMinMarg column
 * @method     ChildItemMasterItem[]|Collection findByInitvendid(string|array<string> $InitVendId) Return ChildItemMasterItem objects filtered by the InitVendId column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitvendid(string|array<string> $InitVendId) Return ChildItemMasterItem objects filtered by the InitVendId column
 * @method     ChildItemMasterItem[]|Collection findByInitinspect(string|array<string> $InitInspect) Return ChildItemMasterItem objects filtered by the InitInspect column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitinspect(string|array<string> $InitInspect) Return ChildItemMasterItem objects filtered by the InitInspect column
 * @method     ChildItemMasterItem[]|Collection findByInitstockcode(string|array<string> $InitStockCode) Return ChildItemMasterItem objects filtered by the InitStockCode column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitstockcode(string|array<string> $InitStockCode) Return ChildItemMasterItem objects filtered by the InitStockCode column
 * @method     ChildItemMasterItem[]|Collection findByInitsupritemnbr(string|array<string> $InitSuprItemNbr) Return ChildItemMasterItem objects filtered by the InitSuprItemNbr column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitsupritemnbr(string|array<string> $InitSuprItemNbr) Return ChildItemMasterItem objects filtered by the InitSuprItemNbr column
 * @method     ChildItemMasterItem[]|Collection findByInitvendshipfrom(string|array<string> $InitVendShipFrom) Return ChildItemMasterItem objects filtered by the InitVendShipFrom column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitvendshipfrom(string|array<string> $InitVendShipFrom) Return ChildItemMasterItem objects filtered by the InitVendShipFrom column
 * @method     ChildItemMasterItem[]|Collection findByInitcntryoforigin(string|array<string> $InitCntryOfOrigin) Return ChildItemMasterItem objects filtered by the InitCntryOfOrigin column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitcntryoforigin(string|array<string> $InitCntryOfOrigin) Return ChildItemMasterItem objects filtered by the InitCntryOfOrigin column
 * @method     ChildItemMasterItem[]|Collection findByInitasstqty(string|array<string> $InitAsstQty) Return ChildItemMasterItem objects filtered by the InitAsstQty column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitasstqty(string|array<string> $InitAsstQty) Return ChildItemMasterItem objects filtered by the InitAsstQty column
 * @method     ChildItemMasterItem[]|Collection findByIntbtariffcode(string|array<string> $IntbTariffCode) Return ChildItemMasterItem objects filtered by the IntbTariffCode column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByIntbtariffcode(string|array<string> $IntbTariffCode) Return ChildItemMasterItem objects filtered by the IntbTariffCode column
 * @method     ChildItemMasterItem[]|Collection findByInitpreference(string|array<string> $InitPreference) Return ChildItemMasterItem objects filtered by the InitPreference column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitpreference(string|array<string> $InitPreference) Return ChildItemMasterItem objects filtered by the InitPreference column
 * @method     ChildItemMasterItem[]|Collection findByInitproducer(string|array<string> $InitProducer) Return ChildItemMasterItem objects filtered by the InitProducer column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitproducer(string|array<string> $InitProducer) Return ChildItemMasterItem objects filtered by the InitProducer column
 * @method     ChildItemMasterItem[]|Collection findByInitdocumentation(string|array<string> $InitDocumentation) Return ChildItemMasterItem objects filtered by the InitDocumentation column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitdocumentation(string|array<string> $InitDocumentation) Return ChildItemMasterItem objects filtered by the InitDocumentation column
 * @method     ChildItemMasterItem[]|Collection findByInitpurchcrtnqty(int|array<int> $InitPurchCrtnQty) Return ChildItemMasterItem objects filtered by the InitPurchCrtnQty column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitpurchcrtnqty(int|array<int> $InitPurchCrtnQty) Return ChildItemMasterItem objects filtered by the InitPurchCrtnQty column
 * @method     ChildItemMasterItem[]|Collection findByAptbbuyrcode(string|array<string> $AptbBuyrCode) Return ChildItemMasterItem objects filtered by the AptbBuyrCode column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByAptbbuyrcode(string|array<string> $AptbBuyrCode) Return ChildItemMasterItem objects filtered by the AptbBuyrCode column
 * @method     ChildItemMasterItem[]|Collection findByInitlastcost(string|array<string> $InitLastCost) Return ChildItemMasterItem objects filtered by the InitLastCost column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitlastcost(string|array<string> $InitLastCost) Return ChildItemMasterItem objects filtered by the InitLastCost column
 * @method     ChildItemMasterItem[]|Collection findByInitliters(string|array<string> $InitLiters) Return ChildItemMasterItem objects filtered by the InitLiters column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitliters(string|array<string> $InitLiters) Return ChildItemMasterItem objects filtered by the InitLiters column
 * @method     ChildItemMasterItem[]|Collection findByIntbmsdscode(string|array<string> $IntbMsdsCode) Return ChildItemMasterItem objects filtered by the IntbMsdsCode column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByIntbmsdscode(string|array<string> $IntbMsdsCode) Return ChildItemMasterItem objects filtered by the IntbMsdsCode column
 * @method     ChildItemMasterItem[]|Collection findByInitrequirefrt(string|array<string> $InitRequireFrt) Return ChildItemMasterItem objects filtered by the InitRequireFrt column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitrequirefrt(string|array<string> $InitRequireFrt) Return ChildItemMasterItem objects filtered by the InitRequireFrt column
 * @method     ChildItemMasterItem[]|Collection findByInitmfrtcode(string|array<string> $InitMfrtCode) Return ChildItemMasterItem objects filtered by the InitMfrtCode column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitmfrtcode(string|array<string> $InitMfrtCode) Return ChildItemMasterItem objects filtered by the InitMfrtCode column
 * @method     ChildItemMasterItem[]|Collection findByInitinnerpackqty(int|array<int> $InitInnerPackQty) Return ChildItemMasterItem objects filtered by the InitInnerPackQty column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitinnerpackqty(int|array<int> $InitInnerPackQty) Return ChildItemMasterItem objects filtered by the InitInnerPackQty column
 * @method     ChildItemMasterItem[]|Collection findByInitouterpackqty(int|array<int> $InitOuterPackQty) Return ChildItemMasterItem objects filtered by the InitOuterPackQty column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitouterpackqty(int|array<int> $InitOuterPackQty) Return ChildItemMasterItem objects filtered by the InitOuterPackQty column
 * @method     ChildItemMasterItem[]|Collection findByInitbasestancost(string|array<string> $InitBaseStanCost) Return ChildItemMasterItem objects filtered by the InitBaseStanCost column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitbasestancost(string|array<string> $InitBaseStanCost) Return ChildItemMasterItem objects filtered by the InitBaseStanCost column
 * @method     ChildItemMasterItem[]|Collection findByInitshiptareqty(int|array<int> $InitShipTareQty) Return ChildItemMasterItem objects filtered by the InitShipTareQty column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitshiptareqty(int|array<int> $InitShipTareQty) Return ChildItemMasterItem objects filtered by the InitShipTareQty column
 * @method     ChildItemMasterItem[]|Collection findByInitwgitem(string|array<string> $InitWgItem) Return ChildItemMasterItem objects filtered by the InitWgItem column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitwgitem(string|array<string> $InitWgItem) Return ChildItemMasterItem objects filtered by the InitWgItem column
 * @method     ChildItemMasterItem[]|Collection findByIntbpricgrup(string|array<string> $IntbPricGrup) Return ChildItemMasterItem objects filtered by the IntbPricGrup column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByIntbpricgrup(string|array<string> $IntbPricGrup) Return ChildItemMasterItem objects filtered by the IntbPricGrup column
 * @method     ChildItemMasterItem[]|Collection findByIntbcommgrup(string|array<string> $IntbCommGrup) Return ChildItemMasterItem objects filtered by the IntbCommGrup column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByIntbcommgrup(string|array<string> $IntbCommGrup) Return ChildItemMasterItem objects filtered by the IntbCommGrup column
 * @method     ChildItemMasterItem[]|Collection findByInitlastcostdate(string|array<string> $InitLastCostDate) Return ChildItemMasterItem objects filtered by the InitLastCostDate column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitlastcostdate(string|array<string> $InitLastCostDate) Return ChildItemMasterItem objects filtered by the InitLastCostDate column
 * @method     ChildItemMasterItem[]|Collection findByInitqtypercase(int|array<int> $InitQtyPerCase) Return ChildItemMasterItem objects filtered by the InitQtyPerCase column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitqtypercase(int|array<int> $InitQtyPerCase) Return ChildItemMasterItem objects filtered by the InitQtyPerCase column
 * @method     ChildItemMasterItem[]|Collection findByInitrevision(string|array<string> $InitRevision) Return ChildItemMasterItem objects filtered by the InitRevision column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitrevision(string|array<string> $InitRevision) Return ChildItemMasterItem objects filtered by the InitRevision column
 * @method     ChildItemMasterItem[]|Collection findByInitcommsaleqty(int|array<int> $InitCommSaleQty) Return ChildItemMasterItem objects filtered by the InitCommSaleQty column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitcommsaleqty(int|array<int> $InitCommSaleQty) Return ChildItemMasterItem objects filtered by the InitCommSaleQty column
 * @method     ChildItemMasterItem[]|Collection findByInitcubes(string|array<string> $InitCubes) Return ChildItemMasterItem objects filtered by the InitCubes column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitcubes(string|array<string> $InitCubes) Return ChildItemMasterItem objects filtered by the InitCubes column
 * @method     ChildItemMasterItem[]|Collection findByInittimefence(int|array<int> $InitTimeFence) Return ChildItemMasterItem objects filtered by the InitTimeFence column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInittimefence(int|array<int> $InitTimeFence) Return ChildItemMasterItem objects filtered by the InitTimeFence column
 * @method     ChildItemMasterItem[]|Collection findByInitsrvcminchrg(string|array<string> $InitSrvcMinChrg) Return ChildItemMasterItem objects filtered by the InitSrvcMinChrg column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitsrvcminchrg(string|array<string> $InitSrvcMinChrg) Return ChildItemMasterItem objects filtered by the InitSrvcMinChrg column
 * @method     ChildItemMasterItem[]|Collection findByInitMinMargBase(string|array<string> $InitMinMargBase) Return ChildItemMasterItem objects filtered by the InitMinMargBase column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByInitMinMargBase(string|array<string> $InitMinMargBase) Return ChildItemMasterItem objects filtered by the InitMinMargBase column
 * @method     ChildItemMasterItem[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemMasterItem objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildItemMasterItem objects filtered by the DateUpdtd column
 * @method     ChildItemMasterItem[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemMasterItem objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildItemMasterItem objects filtered by the TimeUpdtd column
 * @method     ChildItemMasterItem[]|Collection findByDummy(string|array<string> $dummy) Return ChildItemMasterItem objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildItemMasterItem> findByDummy(string|array<string> $dummy) Return ChildItemMasterItem objects filtered by the dummy column
 *
 * @method     ChildItemMasterItem[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildItemMasterItem> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ItemMasterItemQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemMasterItemQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemMasterItem', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemMasterItemQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemMasterItemQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildItemMasterItemQuery) {
            return $criteria;
        }
        $query = new ChildItemMasterItemQuery();
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
     * @return ChildItemMasterItem|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemMasterItemTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ItemMasterItemTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildItemMasterItem A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, InitDesc1, InitDesc2, IntbGrup, InitFormatCode, InitSplit, InitSherDateCd, InitCoreYN, IntbUserCode1, IntbUserCode2, InitType, InitTax, InitRtlPric, InitStatChgd, InitSpecItemCd, InitWarrDays, IntbUomSale, InitWght, InitBord, InitBaseItemId, InitSpecificCust, InitGiveDisc, InitAsstCode, InitPricLastDate, IntbUomPur, InitStanCost, InitStanCostBase, InitStanCostLastDate, InitMinMarg, InitVendId, InitInspect, InitStockCode, InitSuprItemNbr, InitVendShipFrom, InitCntryOfOrigin, InitAsstQty, IntbTariffCode, InitPreference, InitProducer, InitDocumentation, InitPurchCrtnQty, AptbBuyrCode, InitLastCost, InitLiters, IntbMsdsCode, InitRequireFrt, InitMfrtCode, InitInnerPackQty, InitOuterPackQty, InitBaseStanCost, InitShipTareQty, InitWgItem, IntbPricGrup, IntbCommGrup, InitLastCostDate, InitQtyPerCase, InitRevision, InitCommSaleQty, InitCubes, InitTimeFence, InitSrvcMinChrg, InitMinMargBase, DateUpdtd, TimeUpdtd, dummy FROM inv_item_mast WHERE InitItemNbr = :p0';
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
            /** @var ChildItemMasterItem $obj */
            $obj = new ChildItemMasterItem();
            $obj->hydrate($row);
            ItemMasterItemTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildItemMasterItem|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * $query->filterByInititemnbr(['foo', 'bar']); // WHERE InitItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inititemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitDesc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByInitdesc1('fooValue');   // WHERE InitDesc1 = 'fooValue'
     * $query->filterByInitdesc1('%fooValue%', Criteria::LIKE); // WHERE InitDesc1 LIKE '%fooValue%'
     * $query->filterByInitdesc1(['foo', 'bar']); // WHERE InitDesc1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initdesc1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitdesc1($initdesc1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initdesc1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITDESC1, $initdesc1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByInitdesc2('fooValue');   // WHERE InitDesc2 = 'fooValue'
     * $query->filterByInitdesc2('%fooValue%', Criteria::LIKE); // WHERE InitDesc2 LIKE '%fooValue%'
     * $query->filterByInitdesc2(['foo', 'bar']); // WHERE InitDesc2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initdesc2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitdesc2($initdesc2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITDESC2, $initdesc2, $comparison);

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

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBGRUP, $intbgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitFormatCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInitformatcode('fooValue');   // WHERE InitFormatCode = 'fooValue'
     * $query->filterByInitformatcode('%fooValue%', Criteria::LIKE); // WHERE InitFormatCode LIKE '%fooValue%'
     * $query->filterByInitformatcode(['foo', 'bar']); // WHERE InitFormatCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initformatcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitformatcode($initformatcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initformatcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITFORMATCODE, $initformatcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitSplit column
     *
     * Example usage:
     * <code>
     * $query->filterByInitsplit('fooValue');   // WHERE InitSplit = 'fooValue'
     * $query->filterByInitsplit('%fooValue%', Criteria::LIKE); // WHERE InitSplit LIKE '%fooValue%'
     * $query->filterByInitsplit(['foo', 'bar']); // WHERE InitSplit IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initsplit The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitsplit($initsplit = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initsplit)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSPLIT, $initsplit, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitSherDateCd column
     *
     * Example usage:
     * <code>
     * $query->filterByInitsherdatecd('fooValue');   // WHERE InitSherDateCd = 'fooValue'
     * $query->filterByInitsherdatecd('%fooValue%', Criteria::LIKE); // WHERE InitSherDateCd LIKE '%fooValue%'
     * $query->filterByInitsherdatecd(['foo', 'bar']); // WHERE InitSherDateCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initsherdatecd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitsherdatecd($initsherdatecd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initsherdatecd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSHERDATECD, $initsherdatecd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitCoreYN column
     *
     * Example usage:
     * <code>
     * $query->filterByInitcoreyn('fooValue');   // WHERE InitCoreYN = 'fooValue'
     * $query->filterByInitcoreyn('%fooValue%', Criteria::LIKE); // WHERE InitCoreYN LIKE '%fooValue%'
     * $query->filterByInitcoreyn(['foo', 'bar']); // WHERE InitCoreYN IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initcoreyn The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitcoreyn($initcoreyn = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initcoreyn)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITCOREYN, $initcoreyn, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbUserCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbusercode1('fooValue');   // WHERE IntbUserCode1 = 'fooValue'
     * $query->filterByIntbusercode1('%fooValue%', Criteria::LIKE); // WHERE IntbUserCode1 LIKE '%fooValue%'
     * $query->filterByIntbusercode1(['foo', 'bar']); // WHERE IntbUserCode1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbusercode1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbusercode1($intbusercode1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbusercode1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBUSERCODE1, $intbusercode1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbUserCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbusercode2('fooValue');   // WHERE IntbUserCode2 = 'fooValue'
     * $query->filterByIntbusercode2('%fooValue%', Criteria::LIKE); // WHERE IntbUserCode2 LIKE '%fooValue%'
     * $query->filterByIntbusercode2(['foo', 'bar']); // WHERE IntbUserCode2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbusercode2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbusercode2($intbusercode2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbusercode2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBUSERCODE2, $intbusercode2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitType column
     *
     * Example usage:
     * <code>
     * $query->filterByInittype('fooValue');   // WHERE InitType = 'fooValue'
     * $query->filterByInittype('%fooValue%', Criteria::LIKE); // WHERE InitType LIKE '%fooValue%'
     * $query->filterByInittype(['foo', 'bar']); // WHERE InitType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inittype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInittype($inittype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inittype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITTYPE, $inittype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitTax column
     *
     * Example usage:
     * <code>
     * $query->filterByInittax('fooValue');   // WHERE InitTax = 'fooValue'
     * $query->filterByInittax('%fooValue%', Criteria::LIKE); // WHERE InitTax LIKE '%fooValue%'
     * $query->filterByInittax(['foo', 'bar']); // WHERE InitTax IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inittax The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInittax($inittax = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inittax)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITTAX, $inittax, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitRtlPric column
     *
     * Example usage:
     * <code>
     * $query->filterByInitrtlpric(1234); // WHERE InitRtlPric = 1234
     * $query->filterByInitrtlpric(array(12, 34)); // WHERE InitRtlPric IN (12, 34)
     * $query->filterByInitrtlpric(array('min' => 12)); // WHERE InitRtlPric > 12
     * </code>
     *
     * @param mixed $initrtlpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitrtlpric($initrtlpric = null, ?string $comparison = null)
    {
        if (is_array($initrtlpric)) {
            $useMinMax = false;
            if (isset($initrtlpric['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITRTLPRIC, $initrtlpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initrtlpric['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITRTLPRIC, $initrtlpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITRTLPRIC, $initrtlpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitStatChgd column
     *
     * Example usage:
     * <code>
     * $query->filterByInitstatchgd('fooValue');   // WHERE InitStatChgd = 'fooValue'
     * $query->filterByInitstatchgd('%fooValue%', Criteria::LIKE); // WHERE InitStatChgd LIKE '%fooValue%'
     * $query->filterByInitstatchgd(['foo', 'bar']); // WHERE InitStatChgd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initstatchgd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitstatchgd($initstatchgd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initstatchgd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSTATCHGD, $initstatchgd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitSpecItemCd column
     *
     * Example usage:
     * <code>
     * $query->filterByInitspecitemcd('fooValue');   // WHERE InitSpecItemCd = 'fooValue'
     * $query->filterByInitspecitemcd('%fooValue%', Criteria::LIKE); // WHERE InitSpecItemCd LIKE '%fooValue%'
     * $query->filterByInitspecitemcd(['foo', 'bar']); // WHERE InitSpecItemCd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initspecitemcd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitspecitemcd($initspecitemcd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initspecitemcd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSPECITEMCD, $initspecitemcd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitWarrDays column
     *
     * Example usage:
     * <code>
     * $query->filterByInitwarrdays(1234); // WHERE InitWarrDays = 1234
     * $query->filterByInitwarrdays(array(12, 34)); // WHERE InitWarrDays IN (12, 34)
     * $query->filterByInitwarrdays(array('min' => 12)); // WHERE InitWarrDays > 12
     * </code>
     *
     * @param mixed $initwarrdays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitwarrdays($initwarrdays = null, ?string $comparison = null)
    {
        if (is_array($initwarrdays)) {
            $useMinMax = false;
            if (isset($initwarrdays['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITWARRDAYS, $initwarrdays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initwarrdays['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITWARRDAYS, $initwarrdays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITWARRDAYS, $initwarrdays, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbUomSale column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuomsale('fooValue');   // WHERE IntbUomSale = 'fooValue'
     * $query->filterByIntbuomsale('%fooValue%', Criteria::LIKE); // WHERE IntbUomSale LIKE '%fooValue%'
     * $query->filterByIntbuomsale(['foo', 'bar']); // WHERE IntbUomSale IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbuomsale The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbuomsale($intbuomsale = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuomsale)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBUOMSALE, $intbuomsale, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitWght column
     *
     * Example usage:
     * <code>
     * $query->filterByInitwght(1234); // WHERE InitWght = 1234
     * $query->filterByInitwght(array(12, 34)); // WHERE InitWght IN (12, 34)
     * $query->filterByInitwght(array('min' => 12)); // WHERE InitWght > 12
     * </code>
     *
     * @param mixed $initwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitwght($initwght = null, ?string $comparison = null)
    {
        if (is_array($initwght)) {
            $useMinMax = false;
            if (isset($initwght['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITWGHT, $initwght['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initwght['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITWGHT, $initwght['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITWGHT, $initwght, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitBord column
     *
     * Example usage:
     * <code>
     * $query->filterByInitbord('fooValue');   // WHERE InitBord = 'fooValue'
     * $query->filterByInitbord('%fooValue%', Criteria::LIKE); // WHERE InitBord LIKE '%fooValue%'
     * $query->filterByInitbord(['foo', 'bar']); // WHERE InitBord IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initbord The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitbord($initbord = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initbord)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITBORD, $initbord, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitBaseItemId column
     *
     * Example usage:
     * <code>
     * $query->filterByInitbaseitemid('fooValue');   // WHERE InitBaseItemId = 'fooValue'
     * $query->filterByInitbaseitemid('%fooValue%', Criteria::LIKE); // WHERE InitBaseItemId LIKE '%fooValue%'
     * $query->filterByInitbaseitemid(['foo', 'bar']); // WHERE InitBaseItemId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initbaseitemid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitbaseitemid($initbaseitemid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initbaseitemid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITBASEITEMID, $initbaseitemid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitSpecificCust column
     *
     * Example usage:
     * <code>
     * $query->filterByInitspecificcust('fooValue');   // WHERE InitSpecificCust = 'fooValue'
     * $query->filterByInitspecificcust('%fooValue%', Criteria::LIKE); // WHERE InitSpecificCust LIKE '%fooValue%'
     * $query->filterByInitspecificcust(['foo', 'bar']); // WHERE InitSpecificCust IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initspecificcust The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitspecificcust($initspecificcust = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initspecificcust)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSPECIFICCUST, $initspecificcust, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitGiveDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByInitgivedisc('fooValue');   // WHERE InitGiveDisc = 'fooValue'
     * $query->filterByInitgivedisc('%fooValue%', Criteria::LIKE); // WHERE InitGiveDisc LIKE '%fooValue%'
     * $query->filterByInitgivedisc(['foo', 'bar']); // WHERE InitGiveDisc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initgivedisc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitgivedisc($initgivedisc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initgivedisc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITGIVEDISC, $initgivedisc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitAsstCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInitasstcode('fooValue');   // WHERE InitAsstCode = 'fooValue'
     * $query->filterByInitasstcode('%fooValue%', Criteria::LIKE); // WHERE InitAsstCode LIKE '%fooValue%'
     * $query->filterByInitasstcode(['foo', 'bar']); // WHERE InitAsstCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initasstcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitasstcode($initasstcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initasstcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITASSTCODE, $initasstcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitPricLastDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInitpriclastdate('fooValue');   // WHERE InitPricLastDate = 'fooValue'
     * $query->filterByInitpriclastdate('%fooValue%', Criteria::LIKE); // WHERE InitPricLastDate LIKE '%fooValue%'
     * $query->filterByInitpriclastdate(['foo', 'bar']); // WHERE InitPricLastDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initpriclastdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitpriclastdate($initpriclastdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initpriclastdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITPRICLASTDATE, $initpriclastdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbUomPur column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuompur('fooValue');   // WHERE IntbUomPur = 'fooValue'
     * $query->filterByIntbuompur('%fooValue%', Criteria::LIKE); // WHERE IntbUomPur LIKE '%fooValue%'
     * $query->filterByIntbuompur(['foo', 'bar']); // WHERE IntbUomPur IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbuompur The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbuompur($intbuompur = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuompur)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBUOMPUR, $intbuompur, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitStanCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInitstancost(1234); // WHERE InitStanCost = 1234
     * $query->filterByInitstancost(array(12, 34)); // WHERE InitStanCost IN (12, 34)
     * $query->filterByInitstancost(array('min' => 12)); // WHERE InitStanCost > 12
     * </code>
     *
     * @param mixed $initstancost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitstancost($initstancost = null, ?string $comparison = null)
    {
        if (is_array($initstancost)) {
            $useMinMax = false;
            if (isset($initstancost['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSTANCOST, $initstancost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initstancost['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSTANCOST, $initstancost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSTANCOST, $initstancost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitStanCostBase column
     *
     * Example usage:
     * <code>
     * $query->filterByInitstancostbase('fooValue');   // WHERE InitStanCostBase = 'fooValue'
     * $query->filterByInitstancostbase('%fooValue%', Criteria::LIKE); // WHERE InitStanCostBase LIKE '%fooValue%'
     * $query->filterByInitstancostbase(['foo', 'bar']); // WHERE InitStanCostBase IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initstancostbase The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitstancostbase($initstancostbase = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initstancostbase)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSTANCOSTBASE, $initstancostbase, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitStanCostLastDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInitstancostlastdate('fooValue');   // WHERE InitStanCostLastDate = 'fooValue'
     * $query->filterByInitstancostlastdate('%fooValue%', Criteria::LIKE); // WHERE InitStanCostLastDate LIKE '%fooValue%'
     * $query->filterByInitstancostlastdate(['foo', 'bar']); // WHERE InitStanCostLastDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initstancostlastdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitstancostlastdate($initstancostlastdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initstancostlastdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSTANCOSTLASTDATE, $initstancostlastdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitMinMarg column
     *
     * Example usage:
     * <code>
     * $query->filterByInitminmarg(1234); // WHERE InitMinMarg = 1234
     * $query->filterByInitminmarg(array(12, 34)); // WHERE InitMinMarg IN (12, 34)
     * $query->filterByInitminmarg(array('min' => 12)); // WHERE InitMinMarg > 12
     * </code>
     *
     * @param mixed $initminmarg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitminmarg($initminmarg = null, ?string $comparison = null)
    {
        if (is_array($initminmarg)) {
            $useMinMax = false;
            if (isset($initminmarg['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITMINMARG, $initminmarg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initminmarg['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITMINMARG, $initminmarg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITMINMARG, $initminmarg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByInitvendid('fooValue');   // WHERE InitVendId = 'fooValue'
     * $query->filterByInitvendid('%fooValue%', Criteria::LIKE); // WHERE InitVendId LIKE '%fooValue%'
     * $query->filterByInitvendid(['foo', 'bar']); // WHERE InitVendId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initvendid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitvendid($initvendid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initvendid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITVENDID, $initvendid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitInspect column
     *
     * Example usage:
     * <code>
     * $query->filterByInitinspect('fooValue');   // WHERE InitInspect = 'fooValue'
     * $query->filterByInitinspect('%fooValue%', Criteria::LIKE); // WHERE InitInspect LIKE '%fooValue%'
     * $query->filterByInitinspect(['foo', 'bar']); // WHERE InitInspect IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initinspect The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitinspect($initinspect = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initinspect)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITINSPECT, $initinspect, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitStockCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInitstockcode('fooValue');   // WHERE InitStockCode = 'fooValue'
     * $query->filterByInitstockcode('%fooValue%', Criteria::LIKE); // WHERE InitStockCode LIKE '%fooValue%'
     * $query->filterByInitstockcode(['foo', 'bar']); // WHERE InitStockCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initstockcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitstockcode($initstockcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initstockcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSTOCKCODE, $initstockcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitSuprItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInitsupritemnbr('fooValue');   // WHERE InitSuprItemNbr = 'fooValue'
     * $query->filterByInitsupritemnbr('%fooValue%', Criteria::LIKE); // WHERE InitSuprItemNbr LIKE '%fooValue%'
     * $query->filterByInitsupritemnbr(['foo', 'bar']); // WHERE InitSuprItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initsupritemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitsupritemnbr($initsupritemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initsupritemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSUPRITEMNBR, $initsupritemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitVendShipFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByInitvendshipfrom('fooValue');   // WHERE InitVendShipFrom = 'fooValue'
     * $query->filterByInitvendshipfrom('%fooValue%', Criteria::LIKE); // WHERE InitVendShipFrom LIKE '%fooValue%'
     * $query->filterByInitvendshipfrom(['foo', 'bar']); // WHERE InitVendShipFrom IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initvendshipfrom The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitvendshipfrom($initvendshipfrom = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initvendshipfrom)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITVENDSHIPFROM, $initvendshipfrom, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitCntryOfOrigin column
     *
     * Example usage:
     * <code>
     * $query->filterByInitcntryoforigin('fooValue');   // WHERE InitCntryOfOrigin = 'fooValue'
     * $query->filterByInitcntryoforigin('%fooValue%', Criteria::LIKE); // WHERE InitCntryOfOrigin LIKE '%fooValue%'
     * $query->filterByInitcntryoforigin(['foo', 'bar']); // WHERE InitCntryOfOrigin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initcntryoforigin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitcntryoforigin($initcntryoforigin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initcntryoforigin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITCNTRYOFORIGIN, $initcntryoforigin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitAsstQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInitasstqty(1234); // WHERE InitAsstQty = 1234
     * $query->filterByInitasstqty(array(12, 34)); // WHERE InitAsstQty IN (12, 34)
     * $query->filterByInitasstqty(array('min' => 12)); // WHERE InitAsstQty > 12
     * </code>
     *
     * @param mixed $initasstqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitasstqty($initasstqty = null, ?string $comparison = null)
    {
        if (is_array($initasstqty)) {
            $useMinMax = false;
            if (isset($initasstqty['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITASSTQTY, $initasstqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initasstqty['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITASSTQTY, $initasstqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITASSTQTY, $initasstqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbTariffCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbtariffcode('fooValue');   // WHERE IntbTariffCode = 'fooValue'
     * $query->filterByIntbtariffcode('%fooValue%', Criteria::LIKE); // WHERE IntbTariffCode LIKE '%fooValue%'
     * $query->filterByIntbtariffcode(['foo', 'bar']); // WHERE IntbTariffCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbtariffcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbtariffcode($intbtariffcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbtariffcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBTARIFFCODE, $intbtariffcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitPreference column
     *
     * Example usage:
     * <code>
     * $query->filterByInitpreference('fooValue');   // WHERE InitPreference = 'fooValue'
     * $query->filterByInitpreference('%fooValue%', Criteria::LIKE); // WHERE InitPreference LIKE '%fooValue%'
     * $query->filterByInitpreference(['foo', 'bar']); // WHERE InitPreference IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initpreference The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitpreference($initpreference = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initpreference)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITPREFERENCE, $initpreference, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitProducer column
     *
     * Example usage:
     * <code>
     * $query->filterByInitproducer('fooValue');   // WHERE InitProducer = 'fooValue'
     * $query->filterByInitproducer('%fooValue%', Criteria::LIKE); // WHERE InitProducer LIKE '%fooValue%'
     * $query->filterByInitproducer(['foo', 'bar']); // WHERE InitProducer IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initproducer The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitproducer($initproducer = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initproducer)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITPRODUCER, $initproducer, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitDocumentation column
     *
     * Example usage:
     * <code>
     * $query->filterByInitdocumentation('fooValue');   // WHERE InitDocumentation = 'fooValue'
     * $query->filterByInitdocumentation('%fooValue%', Criteria::LIKE); // WHERE InitDocumentation LIKE '%fooValue%'
     * $query->filterByInitdocumentation(['foo', 'bar']); // WHERE InitDocumentation IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initdocumentation The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitdocumentation($initdocumentation = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initdocumentation)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITDOCUMENTATION, $initdocumentation, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitPurchCrtnQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInitpurchcrtnqty(1234); // WHERE InitPurchCrtnQty = 1234
     * $query->filterByInitpurchcrtnqty(array(12, 34)); // WHERE InitPurchCrtnQty IN (12, 34)
     * $query->filterByInitpurchcrtnqty(array('min' => 12)); // WHERE InitPurchCrtnQty > 12
     * </code>
     *
     * @param mixed $initpurchcrtnqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitpurchcrtnqty($initpurchcrtnqty = null, ?string $comparison = null)
    {
        if (is_array($initpurchcrtnqty)) {
            $useMinMax = false;
            if (isset($initpurchcrtnqty['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITPURCHCRTNQTY, $initpurchcrtnqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initpurchcrtnqty['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITPURCHCRTNQTY, $initpurchcrtnqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITPURCHCRTNQTY, $initpurchcrtnqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the AptbBuyrCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbbuyrcode('fooValue');   // WHERE AptbBuyrCode = 'fooValue'
     * $query->filterByAptbbuyrcode('%fooValue%', Criteria::LIKE); // WHERE AptbBuyrCode LIKE '%fooValue%'
     * $query->filterByAptbbuyrcode(['foo', 'bar']); // WHERE AptbBuyrCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $aptbbuyrcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAptbbuyrcode($aptbbuyrcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbbuyrcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_APTBBUYRCODE, $aptbbuyrcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitLastCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInitlastcost(1234); // WHERE InitLastCost = 1234
     * $query->filterByInitlastcost(array(12, 34)); // WHERE InitLastCost IN (12, 34)
     * $query->filterByInitlastcost(array('min' => 12)); // WHERE InitLastCost > 12
     * </code>
     *
     * @param mixed $initlastcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitlastcost($initlastcost = null, ?string $comparison = null)
    {
        if (is_array($initlastcost)) {
            $useMinMax = false;
            if (isset($initlastcost['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITLASTCOST, $initlastcost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initlastcost['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITLASTCOST, $initlastcost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITLASTCOST, $initlastcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitLiters column
     *
     * Example usage:
     * <code>
     * $query->filterByInitliters(1234); // WHERE InitLiters = 1234
     * $query->filterByInitliters(array(12, 34)); // WHERE InitLiters IN (12, 34)
     * $query->filterByInitliters(array('min' => 12)); // WHERE InitLiters > 12
     * </code>
     *
     * @param mixed $initliters The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitliters($initliters = null, ?string $comparison = null)
    {
        if (is_array($initliters)) {
            $useMinMax = false;
            if (isset($initliters['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITLITERS, $initliters['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initliters['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITLITERS, $initliters['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITLITERS, $initliters, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbMsdsCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbmsdscode('fooValue');   // WHERE IntbMsdsCode = 'fooValue'
     * $query->filterByIntbmsdscode('%fooValue%', Criteria::LIKE); // WHERE IntbMsdsCode LIKE '%fooValue%'
     * $query->filterByIntbmsdscode(['foo', 'bar']); // WHERE IntbMsdsCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbmsdscode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbmsdscode($intbmsdscode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbmsdscode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBMSDSCODE, $intbmsdscode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitRequireFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByInitrequirefrt('fooValue');   // WHERE InitRequireFrt = 'fooValue'
     * $query->filterByInitrequirefrt('%fooValue%', Criteria::LIKE); // WHERE InitRequireFrt LIKE '%fooValue%'
     * $query->filterByInitrequirefrt(['foo', 'bar']); // WHERE InitRequireFrt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initrequirefrt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitrequirefrt($initrequirefrt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initrequirefrt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITREQUIREFRT, $initrequirefrt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitMfrtCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInitmfrtcode('fooValue');   // WHERE InitMfrtCode = 'fooValue'
     * $query->filterByInitmfrtcode('%fooValue%', Criteria::LIKE); // WHERE InitMfrtCode LIKE '%fooValue%'
     * $query->filterByInitmfrtcode(['foo', 'bar']); // WHERE InitMfrtCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initmfrtcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitmfrtcode($initmfrtcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initmfrtcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITMFRTCODE, $initmfrtcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitInnerPackQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInitinnerpackqty(1234); // WHERE InitInnerPackQty = 1234
     * $query->filterByInitinnerpackqty(array(12, 34)); // WHERE InitInnerPackQty IN (12, 34)
     * $query->filterByInitinnerpackqty(array('min' => 12)); // WHERE InitInnerPackQty > 12
     * </code>
     *
     * @param mixed $initinnerpackqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitinnerpackqty($initinnerpackqty = null, ?string $comparison = null)
    {
        if (is_array($initinnerpackqty)) {
            $useMinMax = false;
            if (isset($initinnerpackqty['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITINNERPACKQTY, $initinnerpackqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initinnerpackqty['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITINNERPACKQTY, $initinnerpackqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITINNERPACKQTY, $initinnerpackqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitOuterPackQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInitouterpackqty(1234); // WHERE InitOuterPackQty = 1234
     * $query->filterByInitouterpackqty(array(12, 34)); // WHERE InitOuterPackQty IN (12, 34)
     * $query->filterByInitouterpackqty(array('min' => 12)); // WHERE InitOuterPackQty > 12
     * </code>
     *
     * @param mixed $initouterpackqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitouterpackqty($initouterpackqty = null, ?string $comparison = null)
    {
        if (is_array($initouterpackqty)) {
            $useMinMax = false;
            if (isset($initouterpackqty['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITOUTERPACKQTY, $initouterpackqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initouterpackqty['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITOUTERPACKQTY, $initouterpackqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITOUTERPACKQTY, $initouterpackqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitBaseStanCost column
     *
     * Example usage:
     * <code>
     * $query->filterByInitbasestancost(1234); // WHERE InitBaseStanCost = 1234
     * $query->filterByInitbasestancost(array(12, 34)); // WHERE InitBaseStanCost IN (12, 34)
     * $query->filterByInitbasestancost(array('min' => 12)); // WHERE InitBaseStanCost > 12
     * </code>
     *
     * @param mixed $initbasestancost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitbasestancost($initbasestancost = null, ?string $comparison = null)
    {
        if (is_array($initbasestancost)) {
            $useMinMax = false;
            if (isset($initbasestancost['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITBASESTANCOST, $initbasestancost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initbasestancost['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITBASESTANCOST, $initbasestancost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITBASESTANCOST, $initbasestancost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitShipTareQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInitshiptareqty(1234); // WHERE InitShipTareQty = 1234
     * $query->filterByInitshiptareqty(array(12, 34)); // WHERE InitShipTareQty IN (12, 34)
     * $query->filterByInitshiptareqty(array('min' => 12)); // WHERE InitShipTareQty > 12
     * </code>
     *
     * @param mixed $initshiptareqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitshiptareqty($initshiptareqty = null, ?string $comparison = null)
    {
        if (is_array($initshiptareqty)) {
            $useMinMax = false;
            if (isset($initshiptareqty['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSHIPTAREQTY, $initshiptareqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initshiptareqty['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSHIPTAREQTY, $initshiptareqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSHIPTAREQTY, $initshiptareqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitWgItem column
     *
     * Example usage:
     * <code>
     * $query->filterByInitwgitem('fooValue');   // WHERE InitWgItem = 'fooValue'
     * $query->filterByInitwgitem('%fooValue%', Criteria::LIKE); // WHERE InitWgItem LIKE '%fooValue%'
     * $query->filterByInitwgitem(['foo', 'bar']); // WHERE InitWgItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initwgitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitwgitem($initwgitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initwgitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITWGITEM, $initwgitem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbPricGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbpricgrup('fooValue');   // WHERE IntbPricGrup = 'fooValue'
     * $query->filterByIntbpricgrup('%fooValue%', Criteria::LIKE); // WHERE IntbPricGrup LIKE '%fooValue%'
     * $query->filterByIntbpricgrup(['foo', 'bar']); // WHERE IntbPricGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbpricgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbpricgrup($intbpricgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbpricgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBPRICGRUP, $intbpricgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbCommGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcommgrup('fooValue');   // WHERE IntbCommGrup = 'fooValue'
     * $query->filterByIntbcommgrup('%fooValue%', Criteria::LIKE); // WHERE IntbCommGrup LIKE '%fooValue%'
     * $query->filterByIntbcommgrup(['foo', 'bar']); // WHERE IntbCommGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbcommgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbcommgrup($intbcommgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcommgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBCOMMGRUP, $intbcommgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitLastCostDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInitlastcostdate('fooValue');   // WHERE InitLastCostDate = 'fooValue'
     * $query->filterByInitlastcostdate('%fooValue%', Criteria::LIKE); // WHERE InitLastCostDate LIKE '%fooValue%'
     * $query->filterByInitlastcostdate(['foo', 'bar']); // WHERE InitLastCostDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initlastcostdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitlastcostdate($initlastcostdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initlastcostdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITLASTCOSTDATE, $initlastcostdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitQtyPerCase column
     *
     * Example usage:
     * <code>
     * $query->filterByInitqtypercase(1234); // WHERE InitQtyPerCase = 1234
     * $query->filterByInitqtypercase(array(12, 34)); // WHERE InitQtyPerCase IN (12, 34)
     * $query->filterByInitqtypercase(array('min' => 12)); // WHERE InitQtyPerCase > 12
     * </code>
     *
     * @param mixed $initqtypercase The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitqtypercase($initqtypercase = null, ?string $comparison = null)
    {
        if (is_array($initqtypercase)) {
            $useMinMax = false;
            if (isset($initqtypercase['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITQTYPERCASE, $initqtypercase['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initqtypercase['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITQTYPERCASE, $initqtypercase['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITQTYPERCASE, $initqtypercase, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitRevision column
     *
     * Example usage:
     * <code>
     * $query->filterByInitrevision('fooValue');   // WHERE InitRevision = 'fooValue'
     * $query->filterByInitrevision('%fooValue%', Criteria::LIKE); // WHERE InitRevision LIKE '%fooValue%'
     * $query->filterByInitrevision(['foo', 'bar']); // WHERE InitRevision IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initrevision The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitrevision($initrevision = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initrevision)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITREVISION, $initrevision, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitCommSaleQty column
     *
     * Example usage:
     * <code>
     * $query->filterByInitcommsaleqty(1234); // WHERE InitCommSaleQty = 1234
     * $query->filterByInitcommsaleqty(array(12, 34)); // WHERE InitCommSaleQty IN (12, 34)
     * $query->filterByInitcommsaleqty(array('min' => 12)); // WHERE InitCommSaleQty > 12
     * </code>
     *
     * @param mixed $initcommsaleqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitcommsaleqty($initcommsaleqty = null, ?string $comparison = null)
    {
        if (is_array($initcommsaleqty)) {
            $useMinMax = false;
            if (isset($initcommsaleqty['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITCOMMSALEQTY, $initcommsaleqty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initcommsaleqty['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITCOMMSALEQTY, $initcommsaleqty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITCOMMSALEQTY, $initcommsaleqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitCubes column
     *
     * Example usage:
     * <code>
     * $query->filterByInitcubes(1234); // WHERE InitCubes = 1234
     * $query->filterByInitcubes(array(12, 34)); // WHERE InitCubes IN (12, 34)
     * $query->filterByInitcubes(array('min' => 12)); // WHERE InitCubes > 12
     * </code>
     *
     * @param mixed $initcubes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitcubes($initcubes = null, ?string $comparison = null)
    {
        if (is_array($initcubes)) {
            $useMinMax = false;
            if (isset($initcubes['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITCUBES, $initcubes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initcubes['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITCUBES, $initcubes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITCUBES, $initcubes, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitTimeFence column
     *
     * Example usage:
     * <code>
     * $query->filterByInittimefence(1234); // WHERE InitTimeFence = 1234
     * $query->filterByInittimefence(array(12, 34)); // WHERE InitTimeFence IN (12, 34)
     * $query->filterByInittimefence(array('min' => 12)); // WHERE InitTimeFence > 12
     * </code>
     *
     * @param mixed $inittimefence The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInittimefence($inittimefence = null, ?string $comparison = null)
    {
        if (is_array($inittimefence)) {
            $useMinMax = false;
            if (isset($inittimefence['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITTIMEFENCE, $inittimefence['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inittimefence['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITTIMEFENCE, $inittimefence['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITTIMEFENCE, $inittimefence, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitSrvcMinChrg column
     *
     * Example usage:
     * <code>
     * $query->filterByInitsrvcminchrg(1234); // WHERE InitSrvcMinChrg = 1234
     * $query->filterByInitsrvcminchrg(array(12, 34)); // WHERE InitSrvcMinChrg IN (12, 34)
     * $query->filterByInitsrvcminchrg(array('min' => 12)); // WHERE InitSrvcMinChrg > 12
     * </code>
     *
     * @param mixed $initsrvcminchrg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitsrvcminchrg($initsrvcminchrg = null, ?string $comparison = null)
    {
        if (is_array($initsrvcminchrg)) {
            $useMinMax = false;
            if (isset($initsrvcminchrg['min'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSRVCMINCHRG, $initsrvcminchrg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($initsrvcminchrg['max'])) {
                $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSRVCMINCHRG, $initsrvcminchrg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSRVCMINCHRG, $initsrvcminchrg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the InitMinMargBase column
     *
     * Example usage:
     * <code>
     * $query->filterByInitMinMargBase('fooValue');   // WHERE InitMinMargBase = 'fooValue'
     * $query->filterByInitMinMargBase('%fooValue%', Criteria::LIKE); // WHERE InitMinMargBase LIKE '%fooValue%'
     * $query->filterByInitMinMargBase(['foo', 'bar']); // WHERE InitMinMargBase IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $initMinMargBase The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInitMinMargBase($initMinMargBase = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initMinMargBase)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ItemMasterItemTableMap::COL_INITMINMARGBASE, $initMinMargBase, $comparison);

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

        $this->addUsingAlias(ItemMasterItemTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ItemMasterItemTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ItemMasterItemTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \UnitofMeasureSale object
     *
     * @param \UnitofMeasureSale|ObjectCollection $unitofMeasureSale The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUnitofMeasureSale($unitofMeasureSale, ?string $comparison = null)
    {
        if ($unitofMeasureSale instanceof \UnitofMeasureSale) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBUOMSALE, $unitofMeasureSale->getIntbuomsale(), $comparison);
        } elseif ($unitofMeasureSale instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBUOMSALE, $unitofMeasureSale->toKeyValue('PrimaryKey', 'Intbuomsale'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByUnitofMeasureSale() only accepts arguments of type \UnitofMeasureSale or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UnitofMeasureSale relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinUnitofMeasureSale(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UnitofMeasureSale');

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
            $this->addJoinObject($join, 'UnitofMeasureSale');
        }

        return $this;
    }

    /**
     * Use the UnitofMeasureSale relation UnitofMeasureSale object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \UnitofMeasureSaleQuery A secondary query class using the current class as primary query
     */
    public function useUnitofMeasureSaleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUnitofMeasureSale($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UnitofMeasureSale', '\UnitofMeasureSaleQuery');
    }

    /**
     * Use the UnitofMeasureSale relation UnitofMeasureSale object
     *
     * @param callable(\UnitofMeasureSaleQuery):\UnitofMeasureSaleQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withUnitofMeasureSaleQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useUnitofMeasureSaleQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to UnitofMeasureSale table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \UnitofMeasureSaleQuery The inner query object of the EXISTS statement
     */
    public function useUnitofMeasureSaleExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \UnitofMeasureSaleQuery */
        $q = $this->useExistsQuery('UnitofMeasureSale', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to UnitofMeasureSale table for a NOT EXISTS query.
     *
     * @see useUnitofMeasureSaleExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \UnitofMeasureSaleQuery The inner query object of the NOT EXISTS statement
     */
    public function useUnitofMeasureSaleNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \UnitofMeasureSaleQuery */
        $q = $this->useExistsQuery('UnitofMeasureSale', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to UnitofMeasureSale table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \UnitofMeasureSaleQuery The inner query object of the IN statement
     */
    public function useInUnitofMeasureSaleQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \UnitofMeasureSaleQuery */
        $q = $this->useInQuery('UnitofMeasureSale', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to UnitofMeasureSale table for a NOT IN query.
     *
     * @see useUnitofMeasureSaleInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \UnitofMeasureSaleQuery The inner query object of the NOT IN statement
     */
    public function useNotInUnitofMeasureSaleQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \UnitofMeasureSaleQuery */
        $q = $this->useInQuery('UnitofMeasureSale', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \UnitofMeasurePurchase object
     *
     * @param \UnitofMeasurePurchase|ObjectCollection $unitofMeasurePurchase The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUnitofMeasurePurchase($unitofMeasurePurchase, ?string $comparison = null)
    {
        if ($unitofMeasurePurchase instanceof \UnitofMeasurePurchase) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBUOMPUR, $unitofMeasurePurchase->getIntbuompur(), $comparison);
        } elseif ($unitofMeasurePurchase instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBUOMPUR, $unitofMeasurePurchase->toKeyValue('PrimaryKey', 'Intbuompur'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByUnitofMeasurePurchase() only accepts arguments of type \UnitofMeasurePurchase or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UnitofMeasurePurchase relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinUnitofMeasurePurchase(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UnitofMeasurePurchase');

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
            $this->addJoinObject($join, 'UnitofMeasurePurchase');
        }

        return $this;
    }

    /**
     * Use the UnitofMeasurePurchase relation UnitofMeasurePurchase object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \UnitofMeasurePurchaseQuery A secondary query class using the current class as primary query
     */
    public function useUnitofMeasurePurchaseQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUnitofMeasurePurchase($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UnitofMeasurePurchase', '\UnitofMeasurePurchaseQuery');
    }

    /**
     * Use the UnitofMeasurePurchase relation UnitofMeasurePurchase object
     *
     * @param callable(\UnitofMeasurePurchaseQuery):\UnitofMeasurePurchaseQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withUnitofMeasurePurchaseQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useUnitofMeasurePurchaseQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to UnitofMeasurePurchase table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \UnitofMeasurePurchaseQuery The inner query object of the EXISTS statement
     */
    public function useUnitofMeasurePurchaseExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \UnitofMeasurePurchaseQuery */
        $q = $this->useExistsQuery('UnitofMeasurePurchase', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to UnitofMeasurePurchase table for a NOT EXISTS query.
     *
     * @see useUnitofMeasurePurchaseExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \UnitofMeasurePurchaseQuery The inner query object of the NOT EXISTS statement
     */
    public function useUnitofMeasurePurchaseNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \UnitofMeasurePurchaseQuery */
        $q = $this->useExistsQuery('UnitofMeasurePurchase', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to UnitofMeasurePurchase table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \UnitofMeasurePurchaseQuery The inner query object of the IN statement
     */
    public function useInUnitofMeasurePurchaseQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \UnitofMeasurePurchaseQuery */
        $q = $this->useInQuery('UnitofMeasurePurchase', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to UnitofMeasurePurchase table for a NOT IN query.
     *
     * @see useUnitofMeasurePurchaseInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \UnitofMeasurePurchaseQuery The inner query object of the NOT IN statement
     */
    public function useNotInUnitofMeasurePurchaseQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \UnitofMeasurePurchaseQuery */
        $q = $this->useInQuery('UnitofMeasurePurchase', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvGroupCode object
     *
     * @param \InvGroupCode|ObjectCollection $invGroupCode The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvGroupCode($invGroupCode, ?string $comparison = null)
    {
        if ($invGroupCode instanceof \InvGroupCode) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBGRUP, $invGroupCode->getIntbgrup(), $comparison);
        } elseif ($invGroupCode instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBGRUP, $invGroupCode->toKeyValue('PrimaryKey', 'Intbgrup'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvGroupCode() only accepts arguments of type \InvGroupCode or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvGroupCode relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvGroupCode(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvGroupCode');

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
            $this->addJoinObject($join, 'InvGroupCode');
        }

        return $this;
    }

    /**
     * Use the InvGroupCode relation InvGroupCode object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvGroupCodeQuery A secondary query class using the current class as primary query
     */
    public function useInvGroupCodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinInvGroupCode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvGroupCode', '\InvGroupCodeQuery');
    }

    /**
     * Use the InvGroupCode relation InvGroupCode object
     *
     * @param callable(\InvGroupCodeQuery):\InvGroupCodeQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvGroupCodeQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useInvGroupCodeQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvGroupCode table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvGroupCodeQuery The inner query object of the EXISTS statement
     */
    public function useInvGroupCodeExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvGroupCodeQuery */
        $q = $this->useExistsQuery('InvGroupCode', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvGroupCode table for a NOT EXISTS query.
     *
     * @see useInvGroupCodeExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvGroupCodeQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvGroupCodeNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvGroupCodeQuery */
        $q = $this->useExistsQuery('InvGroupCode', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvGroupCode table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvGroupCodeQuery The inner query object of the IN statement
     */
    public function useInInvGroupCodeQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvGroupCodeQuery */
        $q = $this->useInQuery('InvGroupCode', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvGroupCode table for a NOT IN query.
     *
     * @see useInvGroupCodeInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvGroupCodeQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvGroupCodeQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvGroupCodeQuery */
        $q = $this->useInQuery('InvGroupCode', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvPriceCode object
     *
     * @param \InvPriceCode|ObjectCollection $invPriceCode The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvPriceCode($invPriceCode, ?string $comparison = null)
    {
        if ($invPriceCode instanceof \InvPriceCode) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBPRICGRUP, $invPriceCode->getIntbpricgrup(), $comparison);
        } elseif ($invPriceCode instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBPRICGRUP, $invPriceCode->toKeyValue('PrimaryKey', 'Intbpricgrup'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvPriceCode() only accepts arguments of type \InvPriceCode or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvPriceCode relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvPriceCode(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvPriceCode');

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
            $this->addJoinObject($join, 'InvPriceCode');
        }

        return $this;
    }

    /**
     * Use the InvPriceCode relation InvPriceCode object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvPriceCodeQuery A secondary query class using the current class as primary query
     */
    public function useInvPriceCodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinInvPriceCode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvPriceCode', '\InvPriceCodeQuery');
    }

    /**
     * Use the InvPriceCode relation InvPriceCode object
     *
     * @param callable(\InvPriceCodeQuery):\InvPriceCodeQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvPriceCodeQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useInvPriceCodeQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvPriceCode table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvPriceCodeQuery The inner query object of the EXISTS statement
     */
    public function useInvPriceCodeExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvPriceCodeQuery */
        $q = $this->useExistsQuery('InvPriceCode', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvPriceCode table for a NOT EXISTS query.
     *
     * @see useInvPriceCodeExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvPriceCodeQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvPriceCodeNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvPriceCodeQuery */
        $q = $this->useExistsQuery('InvPriceCode', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvPriceCode table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvPriceCodeQuery The inner query object of the IN statement
     */
    public function useInInvPriceCodeQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvPriceCodeQuery */
        $q = $this->useInQuery('InvPriceCode', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvPriceCode table for a NOT IN query.
     *
     * @see useInvPriceCodeInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvPriceCodeQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvPriceCodeQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvPriceCodeQuery */
        $q = $this->useInQuery('InvPriceCode', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvCommissionCode object
     *
     * @param \InvCommissionCode|ObjectCollection $invCommissionCode The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvCommissionCode($invCommissionCode, ?string $comparison = null)
    {
        if ($invCommissionCode instanceof \InvCommissionCode) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBCOMMGRUP, $invCommissionCode->getIntbcommgrup(), $comparison);
        } elseif ($invCommissionCode instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBCOMMGRUP, $invCommissionCode->toKeyValue('PrimaryKey', 'Intbcommgrup'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvCommissionCode() only accepts arguments of type \InvCommissionCode or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvCommissionCode relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvCommissionCode(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvCommissionCode');

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
            $this->addJoinObject($join, 'InvCommissionCode');
        }

        return $this;
    }

    /**
     * Use the InvCommissionCode relation InvCommissionCode object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvCommissionCodeQuery A secondary query class using the current class as primary query
     */
    public function useInvCommissionCodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinInvCommissionCode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvCommissionCode', '\InvCommissionCodeQuery');
    }

    /**
     * Use the InvCommissionCode relation InvCommissionCode object
     *
     * @param callable(\InvCommissionCodeQuery):\InvCommissionCodeQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvCommissionCodeQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useInvCommissionCodeQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvCommissionCode table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvCommissionCodeQuery The inner query object of the EXISTS statement
     */
    public function useInvCommissionCodeExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvCommissionCodeQuery */
        $q = $this->useExistsQuery('InvCommissionCode', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvCommissionCode table for a NOT EXISTS query.
     *
     * @see useInvCommissionCodeExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvCommissionCodeQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvCommissionCodeNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvCommissionCodeQuery */
        $q = $this->useExistsQuery('InvCommissionCode', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvCommissionCode table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvCommissionCodeQuery The inner query object of the IN statement
     */
    public function useInInvCommissionCodeQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvCommissionCodeQuery */
        $q = $this->useInQuery('InvCommissionCode', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvCommissionCode table for a NOT IN query.
     *
     * @see useInvCommissionCodeInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvCommissionCodeQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvCommissionCodeQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvCommissionCodeQuery */
        $q = $this->useInQuery('InvCommissionCode', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemPricing object
     *
     * @param \ItemPricing|ObjectCollection $itemPricing The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemPricing($itemPricing, ?string $comparison = null)
    {
        if ($itemPricing instanceof \ItemPricing) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemPricing->getInititemnbr(), $comparison);
        } elseif ($itemPricing instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemPricing->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByItemPricing() only accepts arguments of type \ItemPricing or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemPricing relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemPricing(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemPricing');

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
            $this->addJoinObject($join, 'ItemPricing');
        }

        return $this;
    }

    /**
     * Use the ItemPricing relation ItemPricing object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemPricingQuery A secondary query class using the current class as primary query
     */
    public function useItemPricingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemPricing($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemPricing', '\ItemPricingQuery');
    }

    /**
     * Use the ItemPricing relation ItemPricing object
     *
     * @param callable(\ItemPricingQuery):\ItemPricingQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemPricingQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemPricingQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemPricing table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemPricingQuery The inner query object of the EXISTS statement
     */
    public function useItemPricingExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemPricingQuery */
        $q = $this->useExistsQuery('ItemPricing', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemPricing table for a NOT EXISTS query.
     *
     * @see useItemPricingExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemPricingQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemPricingNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemPricingQuery */
        $q = $this->useExistsQuery('ItemPricing', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemPricing table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemPricingQuery The inner query object of the IN statement
     */
    public function useInItemPricingQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemPricingQuery */
        $q = $this->useInQuery('ItemPricing', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemPricing table for a NOT IN query.
     *
     * @see useItemPricingInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemPricingQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemPricingQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemPricingQuery */
        $q = $this->useInQuery('ItemPricing', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemXrefCustomer object
     *
     * @param \ItemXrefCustomer|ObjectCollection $itemXrefCustomer the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemXrefCustomer($itemXrefCustomer, ?string $comparison = null)
    {
        if ($itemXrefCustomer instanceof \ItemXrefCustomer) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefCustomer->getInititemnbr(), $comparison);

            return $this;
        } elseif ($itemXrefCustomer instanceof ObjectCollection) {
            $this
                ->useItemXrefCustomerQuery()
                ->filterByPrimaryKeys($itemXrefCustomer->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemXrefCustomer() only accepts arguments of type \ItemXrefCustomer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefCustomer relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemXrefCustomer(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemXrefCustomer');

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
            $this->addJoinObject($join, 'ItemXrefCustomer');
        }

        return $this;
    }

    /**
     * Use the ItemXrefCustomer relation ItemXrefCustomer object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemXrefCustomerQuery A secondary query class using the current class as primary query
     */
    public function useItemXrefCustomerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinItemXrefCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemXrefCustomer', '\ItemXrefCustomerQuery');
    }

    /**
     * Use the ItemXrefCustomer relation ItemXrefCustomer object
     *
     * @param callable(\ItemXrefCustomerQuery):\ItemXrefCustomerQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemXrefCustomerQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useItemXrefCustomerQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemXrefCustomer table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemXrefCustomerQuery The inner query object of the EXISTS statement
     */
    public function useItemXrefCustomerExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemXrefCustomerQuery */
        $q = $this->useExistsQuery('ItemXrefCustomer', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemXrefCustomer table for a NOT EXISTS query.
     *
     * @see useItemXrefCustomerExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefCustomerQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemXrefCustomerNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefCustomerQuery */
        $q = $this->useExistsQuery('ItemXrefCustomer', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemXrefCustomer table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemXrefCustomerQuery The inner query object of the IN statement
     */
    public function useInItemXrefCustomerQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemXrefCustomerQuery */
        $q = $this->useInQuery('ItemXrefCustomer', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemXrefCustomer table for a NOT IN query.
     *
     * @see useItemXrefCustomerInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefCustomerQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemXrefCustomerQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefCustomerQuery */
        $q = $this->useInQuery('ItemXrefCustomer', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvWhseItemBin object
     *
     * @param \InvWhseItemBin|ObjectCollection $invWhseItemBin the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvWhseItemBin($invWhseItemBin, ?string $comparison = null)
    {
        if ($invWhseItemBin instanceof \InvWhseItemBin) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invWhseItemBin->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invWhseItemBin instanceof ObjectCollection) {
            $this
                ->useInvWhseItemBinQuery()
                ->filterByPrimaryKeys($invWhseItemBin->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvWhseItemBin() only accepts arguments of type \InvWhseItemBin or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvWhseItemBin relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvWhseItemBin(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvWhseItemBin');

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
            $this->addJoinObject($join, 'InvWhseItemBin');
        }

        return $this;
    }

    /**
     * Use the InvWhseItemBin relation InvWhseItemBin object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvWhseItemBinQuery A secondary query class using the current class as primary query
     */
    public function useInvWhseItemBinQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvWhseItemBin($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvWhseItemBin', '\InvWhseItemBinQuery');
    }

    /**
     * Use the InvWhseItemBin relation InvWhseItemBin object
     *
     * @param callable(\InvWhseItemBinQuery):\InvWhseItemBinQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvWhseItemBinQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvWhseItemBinQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvWhseItemBin table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvWhseItemBinQuery The inner query object of the EXISTS statement
     */
    public function useInvWhseItemBinExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvWhseItemBinQuery */
        $q = $this->useExistsQuery('InvWhseItemBin', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvWhseItemBin table for a NOT EXISTS query.
     *
     * @see useInvWhseItemBinExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvWhseItemBinQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvWhseItemBinNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvWhseItemBinQuery */
        $q = $this->useExistsQuery('InvWhseItemBin', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvWhseItemBin table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvWhseItemBinQuery The inner query object of the IN statement
     */
    public function useInInvWhseItemBinQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvWhseItemBinQuery */
        $q = $this->useInQuery('InvWhseItemBin', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvWhseItemBin table for a NOT IN query.
     *
     * @see useInvWhseItemBinInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvWhseItemBinQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvWhseItemBinQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvWhseItemBinQuery */
        $q = $this->useInQuery('InvWhseItemBin', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemAddonItem object
     *
     * @param \ItemAddonItem|ObjectCollection $itemAddonItem the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemAddonItemRelatedByInititemnbr($itemAddonItem, ?string $comparison = null)
    {
        if ($itemAddonItem instanceof \ItemAddonItem) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemAddonItem->getInititemnbr(), $comparison);

            return $this;
        } elseif ($itemAddonItem instanceof ObjectCollection) {
            $this
                ->useItemAddonItemRelatedByInititemnbrQuery()
                ->filterByPrimaryKeys($itemAddonItem->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemAddonItemRelatedByInititemnbr() only accepts arguments of type \ItemAddonItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemAddonItemRelatedByInititemnbr relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemAddonItemRelatedByInititemnbr(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemAddonItemRelatedByInititemnbr');

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
            $this->addJoinObject($join, 'ItemAddonItemRelatedByInititemnbr');
        }

        return $this;
    }

    /**
     * Use the ItemAddonItemRelatedByInititemnbr relation ItemAddonItem object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemAddonItemQuery A secondary query class using the current class as primary query
     */
    public function useItemAddonItemRelatedByInititemnbrQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemAddonItemRelatedByInititemnbr($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemAddonItemRelatedByInititemnbr', '\ItemAddonItemQuery');
    }

    /**
     * Use the ItemAddonItemRelatedByInititemnbr relation ItemAddonItem object
     *
     * @param callable(\ItemAddonItemQuery):\ItemAddonItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemAddonItemRelatedByInititemnbrQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemAddonItemRelatedByInititemnbrQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the ItemAddonItemRelatedByInititemnbr relation to the ItemAddonItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemAddonItemQuery The inner query object of the EXISTS statement
     */
    public function useItemAddonItemRelatedByInititemnbrExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemAddonItemQuery */
        $q = $this->useExistsQuery('ItemAddonItemRelatedByInititemnbr', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the ItemAddonItemRelatedByInititemnbr relation to the ItemAddonItem table for a NOT EXISTS query.
     *
     * @see useItemAddonItemRelatedByInititemnbrExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemAddonItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemAddonItemRelatedByInititemnbrNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemAddonItemQuery */
        $q = $this->useExistsQuery('ItemAddonItemRelatedByInititemnbr', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the ItemAddonItemRelatedByInititemnbr relation to the ItemAddonItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemAddonItemQuery The inner query object of the IN statement
     */
    public function useInItemAddonItemRelatedByInititemnbrQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemAddonItemQuery */
        $q = $this->useInQuery('ItemAddonItemRelatedByInititemnbr', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the ItemAddonItemRelatedByInititemnbr relation to the ItemAddonItem table for a NOT IN query.
     *
     * @see useItemAddonItemRelatedByInititemnbrInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemAddonItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemAddonItemRelatedByInititemnbrQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemAddonItemQuery */
        $q = $this->useInQuery('ItemAddonItemRelatedByInititemnbr', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemAddonItem object
     *
     * @param \ItemAddonItem|ObjectCollection $itemAddonItem the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemAddonItemRelatedByAdonadditemnbr($itemAddonItem, ?string $comparison = null)
    {
        if ($itemAddonItem instanceof \ItemAddonItem) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemAddonItem->getAdonadditemnbr(), $comparison);

            return $this;
        } elseif ($itemAddonItem instanceof ObjectCollection) {
            $this
                ->useItemAddonItemRelatedByAdonadditemnbrQuery()
                ->filterByPrimaryKeys($itemAddonItem->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemAddonItemRelatedByAdonadditemnbr() only accepts arguments of type \ItemAddonItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemAddonItemRelatedByAdonadditemnbr relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemAddonItemRelatedByAdonadditemnbr(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemAddonItemRelatedByAdonadditemnbr');

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
            $this->addJoinObject($join, 'ItemAddonItemRelatedByAdonadditemnbr');
        }

        return $this;
    }

    /**
     * Use the ItemAddonItemRelatedByAdonadditemnbr relation ItemAddonItem object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemAddonItemQuery A secondary query class using the current class as primary query
     */
    public function useItemAddonItemRelatedByAdonadditemnbrQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemAddonItemRelatedByAdonadditemnbr($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemAddonItemRelatedByAdonadditemnbr', '\ItemAddonItemQuery');
    }

    /**
     * Use the ItemAddonItemRelatedByAdonadditemnbr relation ItemAddonItem object
     *
     * @param callable(\ItemAddonItemQuery):\ItemAddonItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemAddonItemRelatedByAdonadditemnbrQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemAddonItemRelatedByAdonadditemnbrQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the ItemAddonItemRelatedByAdonadditemnbr relation to the ItemAddonItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemAddonItemQuery The inner query object of the EXISTS statement
     */
    public function useItemAddonItemRelatedByAdonadditemnbrExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemAddonItemQuery */
        $q = $this->useExistsQuery('ItemAddonItemRelatedByAdonadditemnbr', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the ItemAddonItemRelatedByAdonadditemnbr relation to the ItemAddonItem table for a NOT EXISTS query.
     *
     * @see useItemAddonItemRelatedByAdonadditemnbrExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemAddonItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemAddonItemRelatedByAdonadditemnbrNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemAddonItemQuery */
        $q = $this->useExistsQuery('ItemAddonItemRelatedByAdonadditemnbr', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the ItemAddonItemRelatedByAdonadditemnbr relation to the ItemAddonItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemAddonItemQuery The inner query object of the IN statement
     */
    public function useInItemAddonItemRelatedByAdonadditemnbrQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemAddonItemQuery */
        $q = $this->useInQuery('ItemAddonItemRelatedByAdonadditemnbr', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the ItemAddonItemRelatedByAdonadditemnbr relation to the ItemAddonItem table for a NOT IN query.
     *
     * @see useItemAddonItemRelatedByAdonadditemnbrInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemAddonItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemAddonItemRelatedByAdonadditemnbrQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemAddonItemQuery */
        $q = $this->useInQuery('ItemAddonItemRelatedByAdonadditemnbr', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItmDimension object
     *
     * @param \ItmDimension|ObjectCollection $itmDimension the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItmDimension($itmDimension, ?string $comparison = null)
    {
        if ($itmDimension instanceof \ItmDimension) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itmDimension->getInititemnbr(), $comparison);

            return $this;
        } elseif ($itmDimension instanceof ObjectCollection) {
            $this
                ->useItmDimensionQuery()
                ->filterByPrimaryKeys($itmDimension->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItmDimension() only accepts arguments of type \ItmDimension or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItmDimension relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItmDimension(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItmDimension');

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
            $this->addJoinObject($join, 'ItmDimension');
        }

        return $this;
    }

    /**
     * Use the ItmDimension relation ItmDimension object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItmDimensionQuery A secondary query class using the current class as primary query
     */
    public function useItmDimensionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItmDimension($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItmDimension', '\ItmDimensionQuery');
    }

    /**
     * Use the ItmDimension relation ItmDimension object
     *
     * @param callable(\ItmDimensionQuery):\ItmDimensionQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItmDimensionQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItmDimensionQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItmDimension table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItmDimensionQuery The inner query object of the EXISTS statement
     */
    public function useItmDimensionExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItmDimensionQuery */
        $q = $this->useExistsQuery('ItmDimension', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItmDimension table for a NOT EXISTS query.
     *
     * @see useItmDimensionExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItmDimensionQuery The inner query object of the NOT EXISTS statement
     */
    public function useItmDimensionNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItmDimensionQuery */
        $q = $this->useExistsQuery('ItmDimension', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItmDimension table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItmDimensionQuery The inner query object of the IN statement
     */
    public function useInItmDimensionQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItmDimensionQuery */
        $q = $this->useInQuery('ItmDimension', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItmDimension table for a NOT IN query.
     *
     * @see useItmDimensionInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItmDimensionQuery The inner query object of the NOT IN statement
     */
    public function useNotInItmDimensionQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItmDimensionQuery */
        $q = $this->useInQuery('ItmDimension', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvHazmatItem object
     *
     * @param \InvHazmatItem|ObjectCollection $invHazmatItem the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvHazmatItem($invHazmatItem, ?string $comparison = null)
    {
        if ($invHazmatItem instanceof \InvHazmatItem) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invHazmatItem->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invHazmatItem instanceof ObjectCollection) {
            $this
                ->useInvHazmatItemQuery()
                ->filterByPrimaryKeys($invHazmatItem->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvHazmatItem() only accepts arguments of type \InvHazmatItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvHazmatItem relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvHazmatItem(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvHazmatItem');

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
            $this->addJoinObject($join, 'InvHazmatItem');
        }

        return $this;
    }

    /**
     * Use the InvHazmatItem relation InvHazmatItem object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvHazmatItemQuery A secondary query class using the current class as primary query
     */
    public function useInvHazmatItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvHazmatItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvHazmatItem', '\InvHazmatItemQuery');
    }

    /**
     * Use the InvHazmatItem relation InvHazmatItem object
     *
     * @param callable(\InvHazmatItemQuery):\InvHazmatItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvHazmatItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvHazmatItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvHazmatItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvHazmatItemQuery The inner query object of the EXISTS statement
     */
    public function useInvHazmatItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvHazmatItemQuery */
        $q = $this->useExistsQuery('InvHazmatItem', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvHazmatItem table for a NOT EXISTS query.
     *
     * @see useInvHazmatItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvHazmatItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvHazmatItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvHazmatItemQuery */
        $q = $this->useExistsQuery('InvHazmatItem', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvHazmatItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvHazmatItemQuery The inner query object of the IN statement
     */
    public function useInInvHazmatItemQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvHazmatItemQuery */
        $q = $this->useInQuery('InvHazmatItem', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvHazmatItem table for a NOT IN query.
     *
     * @see useInvHazmatItemInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvHazmatItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvHazmatItemQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvHazmatItemQuery */
        $q = $this->useInQuery('InvHazmatItem', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvWhseLot object
     *
     * @param \InvWhseLot|ObjectCollection $invWhseLot the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvWhseLot($invWhseLot, ?string $comparison = null)
    {
        if ($invWhseLot instanceof \InvWhseLot) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invWhseLot->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invWhseLot instanceof ObjectCollection) {
            $this
                ->useInvWhseLotQuery()
                ->filterByPrimaryKeys($invWhseLot->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvWhseLot() only accepts arguments of type \InvWhseLot or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvWhseLot relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvWhseLot(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvWhseLot');

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
            $this->addJoinObject($join, 'InvWhseLot');
        }

        return $this;
    }

    /**
     * Use the InvWhseLot relation InvWhseLot object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvWhseLotQuery A secondary query class using the current class as primary query
     */
    public function useInvWhseLotQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvWhseLot($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvWhseLot', '\InvWhseLotQuery');
    }

    /**
     * Use the InvWhseLot relation InvWhseLot object
     *
     * @param callable(\InvWhseLotQuery):\InvWhseLotQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvWhseLotQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvWhseLotQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvWhseLot table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvWhseLotQuery The inner query object of the EXISTS statement
     */
    public function useInvWhseLotExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvWhseLotQuery */
        $q = $this->useExistsQuery('InvWhseLot', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvWhseLot table for a NOT EXISTS query.
     *
     * @see useInvWhseLotExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvWhseLotQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvWhseLotNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvWhseLotQuery */
        $q = $this->useExistsQuery('InvWhseLot', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvWhseLot table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvWhseLotQuery The inner query object of the IN statement
     */
    public function useInInvWhseLotQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvWhseLotQuery */
        $q = $this->useInQuery('InvWhseLot', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvWhseLot table for a NOT IN query.
     *
     * @see useInvWhseLotInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvWhseLotQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvWhseLotQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvWhseLotQuery */
        $q = $this->useInQuery('InvWhseLot', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemSubstitute object
     *
     * @param \ItemSubstitute|ObjectCollection $itemSubstitute the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemSubstituteRelatedByInititemnbr($itemSubstitute, ?string $comparison = null)
    {
        if ($itemSubstitute instanceof \ItemSubstitute) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemSubstitute->getInititemnbr(), $comparison);

            return $this;
        } elseif ($itemSubstitute instanceof ObjectCollection) {
            $this
                ->useItemSubstituteRelatedByInititemnbrQuery()
                ->filterByPrimaryKeys($itemSubstitute->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemSubstituteRelatedByInititemnbr() only accepts arguments of type \ItemSubstitute or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemSubstituteRelatedByInititemnbr relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemSubstituteRelatedByInititemnbr(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemSubstituteRelatedByInititemnbr');

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
            $this->addJoinObject($join, 'ItemSubstituteRelatedByInititemnbr');
        }

        return $this;
    }

    /**
     * Use the ItemSubstituteRelatedByInititemnbr relation ItemSubstitute object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemSubstituteQuery A secondary query class using the current class as primary query
     */
    public function useItemSubstituteRelatedByInititemnbrQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemSubstituteRelatedByInititemnbr($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemSubstituteRelatedByInititemnbr', '\ItemSubstituteQuery');
    }

    /**
     * Use the ItemSubstituteRelatedByInititemnbr relation ItemSubstitute object
     *
     * @param callable(\ItemSubstituteQuery):\ItemSubstituteQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemSubstituteRelatedByInititemnbrQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemSubstituteRelatedByInititemnbrQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the ItemSubstituteRelatedByInititemnbr relation to the ItemSubstitute table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemSubstituteQuery The inner query object of the EXISTS statement
     */
    public function useItemSubstituteRelatedByInititemnbrExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemSubstituteQuery */
        $q = $this->useExistsQuery('ItemSubstituteRelatedByInititemnbr', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the ItemSubstituteRelatedByInititemnbr relation to the ItemSubstitute table for a NOT EXISTS query.
     *
     * @see useItemSubstituteRelatedByInititemnbrExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemSubstituteQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemSubstituteRelatedByInititemnbrNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemSubstituteQuery */
        $q = $this->useExistsQuery('ItemSubstituteRelatedByInititemnbr', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the ItemSubstituteRelatedByInititemnbr relation to the ItemSubstitute table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemSubstituteQuery The inner query object of the IN statement
     */
    public function useInItemSubstituteRelatedByInititemnbrQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemSubstituteQuery */
        $q = $this->useInQuery('ItemSubstituteRelatedByInititemnbr', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the ItemSubstituteRelatedByInititemnbr relation to the ItemSubstitute table for a NOT IN query.
     *
     * @see useItemSubstituteRelatedByInititemnbrInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemSubstituteQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemSubstituteRelatedByInititemnbrQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemSubstituteQuery */
        $q = $this->useInQuery('ItemSubstituteRelatedByInititemnbr', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemSubstitute object
     *
     * @param \ItemSubstitute|ObjectCollection $itemSubstitute the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemSubstituteRelatedByInsisubitemnbr($itemSubstitute, ?string $comparison = null)
    {
        if ($itemSubstitute instanceof \ItemSubstitute) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemSubstitute->getInsisubitemnbr(), $comparison);

            return $this;
        } elseif ($itemSubstitute instanceof ObjectCollection) {
            $this
                ->useItemSubstituteRelatedByInsisubitemnbrQuery()
                ->filterByPrimaryKeys($itemSubstitute->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemSubstituteRelatedByInsisubitemnbr() only accepts arguments of type \ItemSubstitute or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemSubstituteRelatedByInsisubitemnbr relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemSubstituteRelatedByInsisubitemnbr(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemSubstituteRelatedByInsisubitemnbr');

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
            $this->addJoinObject($join, 'ItemSubstituteRelatedByInsisubitemnbr');
        }

        return $this;
    }

    /**
     * Use the ItemSubstituteRelatedByInsisubitemnbr relation ItemSubstitute object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemSubstituteQuery A secondary query class using the current class as primary query
     */
    public function useItemSubstituteRelatedByInsisubitemnbrQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemSubstituteRelatedByInsisubitemnbr($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemSubstituteRelatedByInsisubitemnbr', '\ItemSubstituteQuery');
    }

    /**
     * Use the ItemSubstituteRelatedByInsisubitemnbr relation ItemSubstitute object
     *
     * @param callable(\ItemSubstituteQuery):\ItemSubstituteQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemSubstituteRelatedByInsisubitemnbrQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemSubstituteRelatedByInsisubitemnbrQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the ItemSubstituteRelatedByInsisubitemnbr relation to the ItemSubstitute table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemSubstituteQuery The inner query object of the EXISTS statement
     */
    public function useItemSubstituteRelatedByInsisubitemnbrExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemSubstituteQuery */
        $q = $this->useExistsQuery('ItemSubstituteRelatedByInsisubitemnbr', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the ItemSubstituteRelatedByInsisubitemnbr relation to the ItemSubstitute table for a NOT EXISTS query.
     *
     * @see useItemSubstituteRelatedByInsisubitemnbrExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemSubstituteQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemSubstituteRelatedByInsisubitemnbrNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemSubstituteQuery */
        $q = $this->useExistsQuery('ItemSubstituteRelatedByInsisubitemnbr', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the ItemSubstituteRelatedByInsisubitemnbr relation to the ItemSubstitute table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemSubstituteQuery The inner query object of the IN statement
     */
    public function useInItemSubstituteRelatedByInsisubitemnbrQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemSubstituteQuery */
        $q = $this->useInQuery('ItemSubstituteRelatedByInsisubitemnbr', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the ItemSubstituteRelatedByInsisubitemnbr relation to the ItemSubstitute table for a NOT IN query.
     *
     * @see useItemSubstituteRelatedByInsisubitemnbrInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemSubstituteQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemSubstituteRelatedByInsisubitemnbrQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemSubstituteQuery */
        $q = $this->useInQuery('ItemSubstituteRelatedByInsisubitemnbr', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvLotTag object
     *
     * @param \InvLotTag|ObjectCollection $invLotTag the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvLotTag($invLotTag, ?string $comparison = null)
    {
        if ($invLotTag instanceof \InvLotTag) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invLotTag->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invLotTag instanceof ObjectCollection) {
            $this
                ->useInvLotTagQuery()
                ->filterByPrimaryKeys($invLotTag->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvLotTag() only accepts arguments of type \InvLotTag or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvLotTag relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvLotTag(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvLotTag');

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
            $this->addJoinObject($join, 'InvLotTag');
        }

        return $this;
    }

    /**
     * Use the InvLotTag relation InvLotTag object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvLotTagQuery A secondary query class using the current class as primary query
     */
    public function useInvLotTagQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvLotTag($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvLotTag', '\InvLotTagQuery');
    }

    /**
     * Use the InvLotTag relation InvLotTag object
     *
     * @param callable(\InvLotTagQuery):\InvLotTagQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvLotTagQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvLotTagQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvLotTag table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvLotTagQuery The inner query object of the EXISTS statement
     */
    public function useInvLotTagExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useExistsQuery('InvLotTag', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvLotTag table for a NOT EXISTS query.
     *
     * @see useInvLotTagExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvLotTagQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvLotTagNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useExistsQuery('InvLotTag', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvLotTag table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvLotTagQuery The inner query object of the IN statement
     */
    public function useInInvLotTagQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useInQuery('InvLotTag', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvLotTag table for a NOT IN query.
     *
     * @see useInvLotTagInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvLotTagQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvLotTagQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotTagQuery */
        $q = $this->useInQuery('InvLotTag', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvItem2Item object
     *
     * @param \InvItem2Item|ObjectCollection $invItem2Item the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvItem2ItemRelatedByI2imstritemid($invItem2Item, ?string $comparison = null)
    {
        if ($invItem2Item instanceof \InvItem2Item) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invItem2Item->getI2imstritemid(), $comparison);

            return $this;
        } elseif ($invItem2Item instanceof ObjectCollection) {
            $this
                ->useInvItem2ItemRelatedByI2imstritemidQuery()
                ->filterByPrimaryKeys($invItem2Item->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvItem2ItemRelatedByI2imstritemid() only accepts arguments of type \InvItem2Item or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvItem2ItemRelatedByI2imstritemid relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvItem2ItemRelatedByI2imstritemid(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvItem2ItemRelatedByI2imstritemid');

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
            $this->addJoinObject($join, 'InvItem2ItemRelatedByI2imstritemid');
        }

        return $this;
    }

    /**
     * Use the InvItem2ItemRelatedByI2imstritemid relation InvItem2Item object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvItem2ItemQuery A secondary query class using the current class as primary query
     */
    public function useInvItem2ItemRelatedByI2imstritemidQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvItem2ItemRelatedByI2imstritemid($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvItem2ItemRelatedByI2imstritemid', '\InvItem2ItemQuery');
    }

    /**
     * Use the InvItem2ItemRelatedByI2imstritemid relation InvItem2Item object
     *
     * @param callable(\InvItem2ItemQuery):\InvItem2ItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvItem2ItemRelatedByI2imstritemidQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvItem2ItemRelatedByI2imstritemidQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the InvItem2ItemRelatedByI2imstritemid relation to the InvItem2Item table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvItem2ItemQuery The inner query object of the EXISTS statement
     */
    public function useInvItem2ItemRelatedByI2imstritemidExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvItem2ItemQuery */
        $q = $this->useExistsQuery('InvItem2ItemRelatedByI2imstritemid', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the InvItem2ItemRelatedByI2imstritemid relation to the InvItem2Item table for a NOT EXISTS query.
     *
     * @see useInvItem2ItemRelatedByI2imstritemidExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvItem2ItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvItem2ItemRelatedByI2imstritemidNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvItem2ItemQuery */
        $q = $this->useExistsQuery('InvItem2ItemRelatedByI2imstritemid', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the InvItem2ItemRelatedByI2imstritemid relation to the InvItem2Item table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvItem2ItemQuery The inner query object of the IN statement
     */
    public function useInInvItem2ItemRelatedByI2imstritemidQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvItem2ItemQuery */
        $q = $this->useInQuery('InvItem2ItemRelatedByI2imstritemid', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the InvItem2ItemRelatedByI2imstritemid relation to the InvItem2Item table for a NOT IN query.
     *
     * @see useInvItem2ItemRelatedByI2imstritemidInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvItem2ItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvItem2ItemRelatedByI2imstritemidQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvItem2ItemQuery */
        $q = $this->useInQuery('InvItem2ItemRelatedByI2imstritemid', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvItem2Item object
     *
     * @param \InvItem2Item|ObjectCollection $invItem2Item the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvItem2ItemRelatedByI2ichilditemid($invItem2Item, ?string $comparison = null)
    {
        if ($invItem2Item instanceof \InvItem2Item) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invItem2Item->getI2ichilditemid(), $comparison);

            return $this;
        } elseif ($invItem2Item instanceof ObjectCollection) {
            $this
                ->useInvItem2ItemRelatedByI2ichilditemidQuery()
                ->filterByPrimaryKeys($invItem2Item->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvItem2ItemRelatedByI2ichilditemid() only accepts arguments of type \InvItem2Item or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvItem2ItemRelatedByI2ichilditemid relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvItem2ItemRelatedByI2ichilditemid(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvItem2ItemRelatedByI2ichilditemid');

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
            $this->addJoinObject($join, 'InvItem2ItemRelatedByI2ichilditemid');
        }

        return $this;
    }

    /**
     * Use the InvItem2ItemRelatedByI2ichilditemid relation InvItem2Item object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvItem2ItemQuery A secondary query class using the current class as primary query
     */
    public function useInvItem2ItemRelatedByI2ichilditemidQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvItem2ItemRelatedByI2ichilditemid($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvItem2ItemRelatedByI2ichilditemid', '\InvItem2ItemQuery');
    }

    /**
     * Use the InvItem2ItemRelatedByI2ichilditemid relation InvItem2Item object
     *
     * @param callable(\InvItem2ItemQuery):\InvItem2ItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvItem2ItemRelatedByI2ichilditemidQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvItem2ItemRelatedByI2ichilditemidQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the InvItem2ItemRelatedByI2ichilditemid relation to the InvItem2Item table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvItem2ItemQuery The inner query object of the EXISTS statement
     */
    public function useInvItem2ItemRelatedByI2ichilditemidExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvItem2ItemQuery */
        $q = $this->useExistsQuery('InvItem2ItemRelatedByI2ichilditemid', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the InvItem2ItemRelatedByI2ichilditemid relation to the InvItem2Item table for a NOT EXISTS query.
     *
     * @see useInvItem2ItemRelatedByI2ichilditemidExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvItem2ItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvItem2ItemRelatedByI2ichilditemidNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvItem2ItemQuery */
        $q = $this->useExistsQuery('InvItem2ItemRelatedByI2ichilditemid', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the InvItem2ItemRelatedByI2ichilditemid relation to the InvItem2Item table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvItem2ItemQuery The inner query object of the IN statement
     */
    public function useInInvItem2ItemRelatedByI2ichilditemidQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvItem2ItemQuery */
        $q = $this->useInQuery('InvItem2ItemRelatedByI2ichilditemid', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the InvItem2ItemRelatedByI2ichilditemid relation to the InvItem2Item table for a NOT IN query.
     *
     * @see useInvItem2ItemRelatedByI2ichilditemidInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvItem2ItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvItem2ItemRelatedByI2ichilditemidQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvItem2ItemQuery */
        $q = $this->useInQuery('InvItem2ItemRelatedByI2ichilditemid', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvKitComponent object
     *
     * @param \InvKitComponent|ObjectCollection $invKitComponent the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvKitComponent($invKitComponent, ?string $comparison = null)
    {
        if ($invKitComponent instanceof \InvKitComponent) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invKitComponent->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invKitComponent instanceof ObjectCollection) {
            $this
                ->useInvKitComponentQuery()
                ->filterByPrimaryKeys($invKitComponent->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvKitComponent() only accepts arguments of type \InvKitComponent or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvKitComponent relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvKitComponent(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvKitComponent');

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
            $this->addJoinObject($join, 'InvKitComponent');
        }

        return $this;
    }

    /**
     * Use the InvKitComponent relation InvKitComponent object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvKitComponentQuery A secondary query class using the current class as primary query
     */
    public function useInvKitComponentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvKitComponent($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvKitComponent', '\InvKitComponentQuery');
    }

    /**
     * Use the InvKitComponent relation InvKitComponent object
     *
     * @param callable(\InvKitComponentQuery):\InvKitComponentQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvKitComponentQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvKitComponentQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvKitComponent table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvKitComponentQuery The inner query object of the EXISTS statement
     */
    public function useInvKitComponentExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvKitComponentQuery */
        $q = $this->useExistsQuery('InvKitComponent', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvKitComponent table for a NOT EXISTS query.
     *
     * @see useInvKitComponentExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvKitComponentQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvKitComponentNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvKitComponentQuery */
        $q = $this->useExistsQuery('InvKitComponent', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvKitComponent table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvKitComponentQuery The inner query object of the IN statement
     */
    public function useInInvKitComponentQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvKitComponentQuery */
        $q = $this->useInQuery('InvKitComponent', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvKitComponent table for a NOT IN query.
     *
     * @see useInvKitComponentInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvKitComponentQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvKitComponentQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvKitComponentQuery */
        $q = $this->useInQuery('InvKitComponent', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvKit object
     *
     * @param \InvKit|ObjectCollection $invKit the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvKit($invKit, ?string $comparison = null)
    {
        if ($invKit instanceof \InvKit) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invKit->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invKit instanceof ObjectCollection) {
            $this
                ->useInvKitQuery()
                ->filterByPrimaryKeys($invKit->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvKit() only accepts arguments of type \InvKit or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvKit relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvKit(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvKit');

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
            $this->addJoinObject($join, 'InvKit');
        }

        return $this;
    }

    /**
     * Use the InvKit relation InvKit object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvKitQuery A secondary query class using the current class as primary query
     */
    public function useInvKitQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvKit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvKit', '\InvKitQuery');
    }

    /**
     * Use the InvKit relation InvKit object
     *
     * @param callable(\InvKitQuery):\InvKitQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvKitQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvKitQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvKit table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvKitQuery The inner query object of the EXISTS statement
     */
    public function useInvKitExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvKitQuery */
        $q = $this->useExistsQuery('InvKit', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvKit table for a NOT EXISTS query.
     *
     * @see useInvKitExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvKitQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvKitNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvKitQuery */
        $q = $this->useExistsQuery('InvKit', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvKit table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvKitQuery The inner query object of the IN statement
     */
    public function useInInvKitQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvKitQuery */
        $q = $this->useInQuery('InvKit', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvKit table for a NOT IN query.
     *
     * @see useInvKitInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvKitQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvKitQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvKitQuery */
        $q = $this->useInQuery('InvKit', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvLotMaster object
     *
     * @param \InvLotMaster|ObjectCollection $invLotMaster the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvLotMaster($invLotMaster, ?string $comparison = null)
    {
        if ($invLotMaster instanceof \InvLotMaster) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invLotMaster->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invLotMaster instanceof ObjectCollection) {
            $this
                ->useInvLotMasterQuery()
                ->filterByPrimaryKeys($invLotMaster->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvLotMaster() only accepts arguments of type \InvLotMaster or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvLotMaster relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvLotMaster(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvLotMaster');

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
            $this->addJoinObject($join, 'InvLotMaster');
        }

        return $this;
    }

    /**
     * Use the InvLotMaster relation InvLotMaster object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvLotMasterQuery A secondary query class using the current class as primary query
     */
    public function useInvLotMasterQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvLotMaster($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvLotMaster', '\InvLotMasterQuery');
    }

    /**
     * Use the InvLotMaster relation InvLotMaster object
     *
     * @param callable(\InvLotMasterQuery):\InvLotMasterQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvLotMasterQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvLotMasterQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvLotMaster table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvLotMasterQuery The inner query object of the EXISTS statement
     */
    public function useInvLotMasterExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvLotMasterQuery */
        $q = $this->useExistsQuery('InvLotMaster', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvLotMaster table for a NOT EXISTS query.
     *
     * @see useInvLotMasterExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvLotMasterQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvLotMasterNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotMasterQuery */
        $q = $this->useExistsQuery('InvLotMaster', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvLotMaster table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvLotMasterQuery The inner query object of the IN statement
     */
    public function useInInvLotMasterQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvLotMasterQuery */
        $q = $this->useInQuery('InvLotMaster', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvLotMaster table for a NOT IN query.
     *
     * @see useInvLotMasterInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvLotMasterQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvLotMasterQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvLotMasterQuery */
        $q = $this->useInQuery('InvLotMaster', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvSerialMaster object
     *
     * @param \InvSerialMaster|ObjectCollection $invSerialMaster the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvSerialMaster($invSerialMaster, ?string $comparison = null)
    {
        if ($invSerialMaster instanceof \InvSerialMaster) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invSerialMaster->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invSerialMaster instanceof ObjectCollection) {
            $this
                ->useInvSerialMasterQuery()
                ->filterByPrimaryKeys($invSerialMaster->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvSerialMaster() only accepts arguments of type \InvSerialMaster or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvSerialMaster relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvSerialMaster(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvSerialMaster');

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
            $this->addJoinObject($join, 'InvSerialMaster');
        }

        return $this;
    }

    /**
     * Use the InvSerialMaster relation InvSerialMaster object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvSerialMasterQuery A secondary query class using the current class as primary query
     */
    public function useInvSerialMasterQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvSerialMaster($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvSerialMaster', '\InvSerialMasterQuery');
    }

    /**
     * Use the InvSerialMaster relation InvSerialMaster object
     *
     * @param callable(\InvSerialMasterQuery):\InvSerialMasterQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvSerialMasterQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvSerialMasterQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvSerialMaster table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvSerialMasterQuery The inner query object of the EXISTS statement
     */
    public function useInvSerialMasterExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvSerialMasterQuery */
        $q = $this->useExistsQuery('InvSerialMaster', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvSerialMaster table for a NOT EXISTS query.
     *
     * @see useInvSerialMasterExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvSerialMasterQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvSerialMasterNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvSerialMasterQuery */
        $q = $this->useExistsQuery('InvSerialMaster', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvSerialMaster table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvSerialMasterQuery The inner query object of the IN statement
     */
    public function useInInvSerialMasterQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvSerialMasterQuery */
        $q = $this->useInQuery('InvSerialMaster', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvSerialMaster table for a NOT IN query.
     *
     * @see useInvSerialMasterInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvSerialMasterQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvSerialMasterQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvSerialMasterQuery */
        $q = $this->useInQuery('InvSerialMaster', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferDetail object
     *
     * @param \InvTransferDetail|ObjectCollection $invTransferDetail the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferDetail($invTransferDetail, ?string $comparison = null)
    {
        if ($invTransferDetail instanceof \InvTransferDetail) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invTransferDetail->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invTransferDetail instanceof ObjectCollection) {
            $this
                ->useInvTransferDetailQuery()
                ->filterByPrimaryKeys($invTransferDetail->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvTransferDetail() only accepts arguments of type \InvTransferDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferDetail');

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
            $this->addJoinObject($join, 'InvTransferDetail');
        }

        return $this;
    }

    /**
     * Use the InvTransferDetail relation InvTransferDetail object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferDetailQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferDetail', '\InvTransferDetailQuery');
    }

    /**
     * Use the InvTransferDetail relation InvTransferDetail object
     *
     * @param callable(\InvTransferDetailQuery):\InvTransferDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferDetailQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferDetailQuery */
        $q = $this->useExistsQuery('InvTransferDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferDetail table for a NOT EXISTS query.
     *
     * @see useInvTransferDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferDetailQuery */
        $q = $this->useExistsQuery('InvTransferDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferDetailQuery The inner query object of the IN statement
     */
    public function useInInvTransferDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferDetailQuery */
        $q = $this->useInQuery('InvTransferDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferDetail table for a NOT IN query.
     *
     * @see useInvTransferDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferDetailQuery */
        $q = $this->useInQuery('InvTransferDetail', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferLotserial object
     *
     * @param \InvTransferLotserial|ObjectCollection $invTransferLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferLotserial($invTransferLotserial, ?string $comparison = null)
    {
        if ($invTransferLotserial instanceof \InvTransferLotserial) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invTransferLotserial->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invTransferLotserial instanceof ObjectCollection) {
            $this
                ->useInvTransferLotserialQuery()
                ->filterByPrimaryKeys($invTransferLotserial->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvTransferLotserial() only accepts arguments of type \InvTransferLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferLotserial');

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
            $this->addJoinObject($join, 'InvTransferLotserial');
        }

        return $this;
    }

    /**
     * Use the InvTransferLotserial relation InvTransferLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferLotserialQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferLotserial', '\InvTransferLotserialQuery');
    }

    /**
     * Use the InvTransferLotserial relation InvTransferLotserial object
     *
     * @param callable(\InvTransferLotserialQuery):\InvTransferLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferLotserialQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useExistsQuery('InvTransferLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferLotserial table for a NOT EXISTS query.
     *
     * @see useInvTransferLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useExistsQuery('InvTransferLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferLotserialQuery The inner query object of the IN statement
     */
    public function useInInvTransferLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useInQuery('InvTransferLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferLotserial table for a NOT IN query.
     *
     * @see useInvTransferLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferLotserialQuery */
        $q = $this->useInQuery('InvTransferLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferPreAllocatedLotserial object
     *
     * @param \InvTransferPreAllocatedLotserial|ObjectCollection $invTransferPreAllocatedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferPreAllocatedLotserial($invTransferPreAllocatedLotserial, ?string $comparison = null)
    {
        if ($invTransferPreAllocatedLotserial instanceof \InvTransferPreAllocatedLotserial) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invTransferPreAllocatedLotserial->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invTransferPreAllocatedLotserial instanceof ObjectCollection) {
            $this
                ->useInvTransferPreAllocatedLotserialQuery()
                ->filterByPrimaryKeys($invTransferPreAllocatedLotserial->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvTransferPreAllocatedLotserial() only accepts arguments of type \InvTransferPreAllocatedLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferPreAllocatedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferPreAllocatedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferPreAllocatedLotserial');

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
            $this->addJoinObject($join, 'InvTransferPreAllocatedLotserial');
        }

        return $this;
    }

    /**
     * Use the InvTransferPreAllocatedLotserial relation InvTransferPreAllocatedLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferPreAllocatedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferPreAllocatedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferPreAllocatedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferPreAllocatedLotserial', '\InvTransferPreAllocatedLotserialQuery');
    }

    /**
     * Use the InvTransferPreAllocatedLotserial relation InvTransferPreAllocatedLotserial object
     *
     * @param callable(\InvTransferPreAllocatedLotserialQuery):\InvTransferPreAllocatedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferPreAllocatedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferPreAllocatedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferPreAllocatedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for a NOT EXISTS query.
     *
     * @see useInvTransferPreAllocatedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferPreAllocatedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the IN statement
     */
    public function useInInvTransferPreAllocatedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useInQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferPreAllocatedLotserial table for a NOT IN query.
     *
     * @see useInvTransferPreAllocatedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPreAllocatedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferPreAllocatedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPreAllocatedLotserialQuery */
        $q = $this->useInQuery('InvTransferPreAllocatedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferPickedLotserial object
     *
     * @param \InvTransferPickedLotserial|ObjectCollection $invTransferPickedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferPickedLotserial($invTransferPickedLotserial, ?string $comparison = null)
    {
        if ($invTransferPickedLotserial instanceof \InvTransferPickedLotserial) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invTransferPickedLotserial->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invTransferPickedLotserial instanceof ObjectCollection) {
            $this
                ->useInvTransferPickedLotserialQuery()
                ->filterByPrimaryKeys($invTransferPickedLotserial->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvTransferPickedLotserial() only accepts arguments of type \InvTransferPickedLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferPickedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferPickedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferPickedLotserial');

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
            $this->addJoinObject($join, 'InvTransferPickedLotserial');
        }

        return $this;
    }

    /**
     * Use the InvTransferPickedLotserial relation InvTransferPickedLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferPickedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferPickedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferPickedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferPickedLotserial', '\InvTransferPickedLotserialQuery');
    }

    /**
     * Use the InvTransferPickedLotserial relation InvTransferPickedLotserial object
     *
     * @param callable(\InvTransferPickedLotserialQuery):\InvTransferPickedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferPickedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferPickedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferPickedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for a NOT EXISTS query.
     *
     * @see useInvTransferPickedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferPickedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useExistsQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the IN statement
     */
    public function useInInvTransferPickedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useInQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferPickedLotserial table for a NOT IN query.
     *
     * @see useInvTransferPickedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferPickedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferPickedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferPickedLotserialQuery */
        $q = $this->useInQuery('InvTransferPickedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvSerialWarranty object
     *
     * @param \InvSerialWarranty|ObjectCollection $invSerialWarranty the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvSerialWarranty($invSerialWarranty, ?string $comparison = null)
    {
        if ($invSerialWarranty instanceof \InvSerialWarranty) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invSerialWarranty->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invSerialWarranty instanceof ObjectCollection) {
            $this
                ->useInvSerialWarrantyQuery()
                ->filterByPrimaryKeys($invSerialWarranty->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvSerialWarranty() only accepts arguments of type \InvSerialWarranty or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvSerialWarranty relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvSerialWarranty(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvSerialWarranty');

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
            $this->addJoinObject($join, 'InvSerialWarranty');
        }

        return $this;
    }

    /**
     * Use the InvSerialWarranty relation InvSerialWarranty object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvSerialWarrantyQuery A secondary query class using the current class as primary query
     */
    public function useInvSerialWarrantyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvSerialWarranty($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvSerialWarranty', '\InvSerialWarrantyQuery');
    }

    /**
     * Use the InvSerialWarranty relation InvSerialWarranty object
     *
     * @param callable(\InvSerialWarrantyQuery):\InvSerialWarrantyQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvSerialWarrantyQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvSerialWarrantyQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvSerialWarranty table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvSerialWarrantyQuery The inner query object of the EXISTS statement
     */
    public function useInvSerialWarrantyExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvSerialWarrantyQuery */
        $q = $this->useExistsQuery('InvSerialWarranty', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvSerialWarranty table for a NOT EXISTS query.
     *
     * @see useInvSerialWarrantyExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvSerialWarrantyQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvSerialWarrantyNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvSerialWarrantyQuery */
        $q = $this->useExistsQuery('InvSerialWarranty', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvSerialWarranty table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvSerialWarrantyQuery The inner query object of the IN statement
     */
    public function useInInvSerialWarrantyQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvSerialWarrantyQuery */
        $q = $this->useInQuery('InvSerialWarranty', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvSerialWarranty table for a NOT IN query.
     *
     * @see useInvSerialWarrantyInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvSerialWarrantyQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvSerialWarrantyQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvSerialWarrantyQuery */
        $q = $this->useInQuery('InvSerialWarranty', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \WarehouseInventory object
     *
     * @param \WarehouseInventory|ObjectCollection $warehouseInventory the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByWarehouseInventory($warehouseInventory, ?string $comparison = null)
    {
        if ($warehouseInventory instanceof \WarehouseInventory) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $warehouseInventory->getInititemnbr(), $comparison);

            return $this;
        } elseif ($warehouseInventory instanceof ObjectCollection) {
            $this
                ->useWarehouseInventoryQuery()
                ->filterByPrimaryKeys($warehouseInventory->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByWarehouseInventory() only accepts arguments of type \WarehouseInventory or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the WarehouseInventory relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinWarehouseInventory(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('WarehouseInventory');

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
            $this->addJoinObject($join, 'WarehouseInventory');
        }

        return $this;
    }

    /**
     * Use the WarehouseInventory relation WarehouseInventory object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseInventoryQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseInventoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinWarehouseInventory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'WarehouseInventory', '\WarehouseInventoryQuery');
    }

    /**
     * Use the WarehouseInventory relation WarehouseInventory object
     *
     * @param callable(\WarehouseInventoryQuery):\WarehouseInventoryQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withWarehouseInventoryQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useWarehouseInventoryQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to WarehouseInventory table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \WarehouseInventoryQuery The inner query object of the EXISTS statement
     */
    public function useWarehouseInventoryExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \WarehouseInventoryQuery */
        $q = $this->useExistsQuery('WarehouseInventory', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to WarehouseInventory table for a NOT EXISTS query.
     *
     * @see useWarehouseInventoryExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \WarehouseInventoryQuery The inner query object of the NOT EXISTS statement
     */
    public function useWarehouseInventoryNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseInventoryQuery */
        $q = $this->useExistsQuery('WarehouseInventory', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to WarehouseInventory table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \WarehouseInventoryQuery The inner query object of the IN statement
     */
    public function useInWarehouseInventoryQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \WarehouseInventoryQuery */
        $q = $this->useInQuery('WarehouseInventory', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to WarehouseInventory table for a NOT IN query.
     *
     * @see useWarehouseInventoryInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \WarehouseInventoryQuery The inner query object of the NOT IN statement
     */
    public function useNotInWarehouseInventoryQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseInventoryQuery */
        $q = $this->useInQuery('WarehouseInventory', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemXrefKey object
     *
     * @param \ItemXrefKey|ObjectCollection $itemXrefKey the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemXrefKey($itemXrefKey, ?string $comparison = null)
    {
        if ($itemXrefKey instanceof \ItemXrefKey) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefKey->getInititemnbr(), $comparison);

            return $this;
        } elseif ($itemXrefKey instanceof ObjectCollection) {
            $this
                ->useItemXrefKeyQuery()
                ->filterByPrimaryKeys($itemXrefKey->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemXrefKey() only accepts arguments of type \ItemXrefKey or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefKey relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemXrefKey(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemXrefKey');

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
            $this->addJoinObject($join, 'ItemXrefKey');
        }

        return $this;
    }

    /**
     * Use the ItemXrefKey relation ItemXrefKey object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemXrefKeyQuery A secondary query class using the current class as primary query
     */
    public function useItemXrefKeyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemXrefKey($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemXrefKey', '\ItemXrefKeyQuery');
    }

    /**
     * Use the ItemXrefKey relation ItemXrefKey object
     *
     * @param callable(\ItemXrefKeyQuery):\ItemXrefKeyQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemXrefKeyQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemXrefKeyQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemXrefKey table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemXrefKeyQuery The inner query object of the EXISTS statement
     */
    public function useItemXrefKeyExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemXrefKeyQuery */
        $q = $this->useExistsQuery('ItemXrefKey', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemXrefKey table for a NOT EXISTS query.
     *
     * @see useItemXrefKeyExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefKeyQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemXrefKeyNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefKeyQuery */
        $q = $this->useExistsQuery('ItemXrefKey', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemXrefKey table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemXrefKeyQuery The inner query object of the IN statement
     */
    public function useInItemXrefKeyQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemXrefKeyQuery */
        $q = $this->useInQuery('ItemXrefKey', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemXrefKey table for a NOT IN query.
     *
     * @see useItemXrefKeyInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefKeyQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemXrefKeyQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefKeyQuery */
        $q = $this->useInQuery('ItemXrefKey', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemXrefManufacturer object
     *
     * @param \ItemXrefManufacturer|ObjectCollection $itemXrefManufacturer the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemXrefManufacturer($itemXrefManufacturer, ?string $comparison = null)
    {
        if ($itemXrefManufacturer instanceof \ItemXrefManufacturer) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefManufacturer->getInititemnbr(), $comparison);

            return $this;
        } elseif ($itemXrefManufacturer instanceof ObjectCollection) {
            $this
                ->useItemXrefManufacturerQuery()
                ->filterByPrimaryKeys($itemXrefManufacturer->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemXrefManufacturer() only accepts arguments of type \ItemXrefManufacturer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefManufacturer relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemXrefManufacturer(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemXrefManufacturer');

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
            $this->addJoinObject($join, 'ItemXrefManufacturer');
        }

        return $this;
    }

    /**
     * Use the ItemXrefManufacturer relation ItemXrefManufacturer object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemXrefManufacturerQuery A secondary query class using the current class as primary query
     */
    public function useItemXrefManufacturerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemXrefManufacturer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemXrefManufacturer', '\ItemXrefManufacturerQuery');
    }

    /**
     * Use the ItemXrefManufacturer relation ItemXrefManufacturer object
     *
     * @param callable(\ItemXrefManufacturerQuery):\ItemXrefManufacturerQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemXrefManufacturerQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemXrefManufacturerQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemXrefManufacturer table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemXrefManufacturerQuery The inner query object of the EXISTS statement
     */
    public function useItemXrefManufacturerExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemXrefManufacturerQuery */
        $q = $this->useExistsQuery('ItemXrefManufacturer', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemXrefManufacturer table for a NOT EXISTS query.
     *
     * @see useItemXrefManufacturerExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefManufacturerQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemXrefManufacturerNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefManufacturerQuery */
        $q = $this->useExistsQuery('ItemXrefManufacturer', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemXrefManufacturer table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemXrefManufacturerQuery The inner query object of the IN statement
     */
    public function useInItemXrefManufacturerQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemXrefManufacturerQuery */
        $q = $this->useInQuery('ItemXrefManufacturer', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemXrefManufacturer table for a NOT IN query.
     *
     * @see useItemXrefManufacturerInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefManufacturerQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemXrefManufacturerQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefManufacturerQuery */
        $q = $this->useInQuery('ItemXrefManufacturer', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemXrefCustomerNote object
     *
     * @param \ItemXrefCustomerNote|ObjectCollection $itemXrefCustomerNote the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemXrefCustomerNote($itemXrefCustomerNote, ?string $comparison = null)
    {
        if ($itemXrefCustomerNote instanceof \ItemXrefCustomerNote) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefCustomerNote->getInititemnbr(), $comparison);

            return $this;
        } elseif ($itemXrefCustomerNote instanceof ObjectCollection) {
            $this
                ->useItemXrefCustomerNoteQuery()
                ->filterByPrimaryKeys($itemXrefCustomerNote->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemXrefCustomerNote() only accepts arguments of type \ItemXrefCustomerNote or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefCustomerNote relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemXrefCustomerNote(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemXrefCustomerNote');

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
            $this->addJoinObject($join, 'ItemXrefCustomerNote');
        }

        return $this;
    }

    /**
     * Use the ItemXrefCustomerNote relation ItemXrefCustomerNote object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemXrefCustomerNoteQuery A secondary query class using the current class as primary query
     */
    public function useItemXrefCustomerNoteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinItemXrefCustomerNote($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemXrefCustomerNote', '\ItemXrefCustomerNoteQuery');
    }

    /**
     * Use the ItemXrefCustomerNote relation ItemXrefCustomerNote object
     *
     * @param callable(\ItemXrefCustomerNoteQuery):\ItemXrefCustomerNoteQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemXrefCustomerNoteQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useItemXrefCustomerNoteQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemXrefCustomerNote table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemXrefCustomerNoteQuery The inner query object of the EXISTS statement
     */
    public function useItemXrefCustomerNoteExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemXrefCustomerNoteQuery */
        $q = $this->useExistsQuery('ItemXrefCustomerNote', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemXrefCustomerNote table for a NOT EXISTS query.
     *
     * @see useItemXrefCustomerNoteExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefCustomerNoteQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemXrefCustomerNoteNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefCustomerNoteQuery */
        $q = $this->useExistsQuery('ItemXrefCustomerNote', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemXrefCustomerNote table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemXrefCustomerNoteQuery The inner query object of the IN statement
     */
    public function useInItemXrefCustomerNoteQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemXrefCustomerNoteQuery */
        $q = $this->useInQuery('ItemXrefCustomerNote', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemXrefCustomerNote table for a NOT IN query.
     *
     * @see useItemXrefCustomerNoteInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefCustomerNoteQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemXrefCustomerNoteQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefCustomerNoteQuery */
        $q = $this->useInQuery('ItemXrefCustomerNote', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvOptCodeNote object
     *
     * @param \InvOptCodeNote|ObjectCollection $invOptCodeNote the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvOptCodeNote($invOptCodeNote, ?string $comparison = null)
    {
        if ($invOptCodeNote instanceof \InvOptCodeNote) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invOptCodeNote->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invOptCodeNote instanceof ObjectCollection) {
            $this
                ->useInvOptCodeNoteQuery()
                ->filterByPrimaryKeys($invOptCodeNote->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvOptCodeNote() only accepts arguments of type \InvOptCodeNote or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvOptCodeNote relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvOptCodeNote(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvOptCodeNote');

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
            $this->addJoinObject($join, 'InvOptCodeNote');
        }

        return $this;
    }

    /**
     * Use the InvOptCodeNote relation InvOptCodeNote object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvOptCodeNoteQuery A secondary query class using the current class as primary query
     */
    public function useInvOptCodeNoteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinInvOptCodeNote($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvOptCodeNote', '\InvOptCodeNoteQuery');
    }

    /**
     * Use the InvOptCodeNote relation InvOptCodeNote object
     *
     * @param callable(\InvOptCodeNoteQuery):\InvOptCodeNoteQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvOptCodeNoteQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useInvOptCodeNoteQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvOptCodeNote table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvOptCodeNoteQuery The inner query object of the EXISTS statement
     */
    public function useInvOptCodeNoteExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvOptCodeNoteQuery */
        $q = $this->useExistsQuery('InvOptCodeNote', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvOptCodeNote table for a NOT EXISTS query.
     *
     * @see useInvOptCodeNoteExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvOptCodeNoteQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvOptCodeNoteNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvOptCodeNoteQuery */
        $q = $this->useExistsQuery('InvOptCodeNote', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvOptCodeNote table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvOptCodeNoteQuery The inner query object of the IN statement
     */
    public function useInInvOptCodeNoteQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvOptCodeNoteQuery */
        $q = $this->useInQuery('InvOptCodeNote', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvOptCodeNote table for a NOT IN query.
     *
     * @see useInvOptCodeNoteInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvOptCodeNoteQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvOptCodeNoteQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvOptCodeNoteQuery */
        $q = $this->useInQuery('InvOptCodeNote', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemXrefVendorNoteDetail object
     *
     * @param \ItemXrefVendorNoteDetail|ObjectCollection $itemXrefVendorNoteDetail the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemXrefVendorNoteDetail($itemXrefVendorNoteDetail, ?string $comparison = null)
    {
        if ($itemXrefVendorNoteDetail instanceof \ItemXrefVendorNoteDetail) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefVendorNoteDetail->getInitItemNbr(), $comparison);

            return $this;
        } elseif ($itemXrefVendorNoteDetail instanceof ObjectCollection) {
            $this
                ->useItemXrefVendorNoteDetailQuery()
                ->filterByPrimaryKeys($itemXrefVendorNoteDetail->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemXrefVendorNoteDetail() only accepts arguments of type \ItemXrefVendorNoteDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefVendorNoteDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemXrefVendorNoteDetail(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemXrefVendorNoteDetail');

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
            $this->addJoinObject($join, 'ItemXrefVendorNoteDetail');
        }

        return $this;
    }

    /**
     * Use the ItemXrefVendorNoteDetail relation ItemXrefVendorNoteDetail object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemXrefVendorNoteDetailQuery A secondary query class using the current class as primary query
     */
    public function useItemXrefVendorNoteDetailQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinItemXrefVendorNoteDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemXrefVendorNoteDetail', '\ItemXrefVendorNoteDetailQuery');
    }

    /**
     * Use the ItemXrefVendorNoteDetail relation ItemXrefVendorNoteDetail object
     *
     * @param callable(\ItemXrefVendorNoteDetailQuery):\ItemXrefVendorNoteDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemXrefVendorNoteDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useItemXrefVendorNoteDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemXrefVendorNoteDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemXrefVendorNoteDetailQuery The inner query object of the EXISTS statement
     */
    public function useItemXrefVendorNoteDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemXrefVendorNoteDetailQuery */
        $q = $this->useExistsQuery('ItemXrefVendorNoteDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemXrefVendorNoteDetail table for a NOT EXISTS query.
     *
     * @see useItemXrefVendorNoteDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefVendorNoteDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemXrefVendorNoteDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefVendorNoteDetailQuery */
        $q = $this->useExistsQuery('ItemXrefVendorNoteDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemXrefVendorNoteDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemXrefVendorNoteDetailQuery The inner query object of the IN statement
     */
    public function useInItemXrefVendorNoteDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemXrefVendorNoteDetailQuery */
        $q = $this->useInQuery('ItemXrefVendorNoteDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemXrefVendorNoteDetail table for a NOT IN query.
     *
     * @see useItemXrefVendorNoteDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefVendorNoteDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemXrefVendorNoteDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefVendorNoteDetailQuery */
        $q = $this->useInQuery('ItemXrefVendorNoteDetail', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemXrefVendorNoteInternal object
     *
     * @param \ItemXrefVendorNoteInternal|ObjectCollection $itemXrefVendorNoteInternal the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemXrefVendorNoteInternal($itemXrefVendorNoteInternal, ?string $comparison = null)
    {
        if ($itemXrefVendorNoteInternal instanceof \ItemXrefVendorNoteInternal) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefVendorNoteInternal->getInitItemNbr(), $comparison);

            return $this;
        } elseif ($itemXrefVendorNoteInternal instanceof ObjectCollection) {
            $this
                ->useItemXrefVendorNoteInternalQuery()
                ->filterByPrimaryKeys($itemXrefVendorNoteInternal->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemXrefVendorNoteInternal() only accepts arguments of type \ItemXrefVendorNoteInternal or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefVendorNoteInternal relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemXrefVendorNoteInternal(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemXrefVendorNoteInternal');

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
            $this->addJoinObject($join, 'ItemXrefVendorNoteInternal');
        }

        return $this;
    }

    /**
     * Use the ItemXrefVendorNoteInternal relation ItemXrefVendorNoteInternal object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemXrefVendorNoteInternalQuery A secondary query class using the current class as primary query
     */
    public function useItemXrefVendorNoteInternalQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinItemXrefVendorNoteInternal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemXrefVendorNoteInternal', '\ItemXrefVendorNoteInternalQuery');
    }

    /**
     * Use the ItemXrefVendorNoteInternal relation ItemXrefVendorNoteInternal object
     *
     * @param callable(\ItemXrefVendorNoteInternalQuery):\ItemXrefVendorNoteInternalQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemXrefVendorNoteInternalQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useItemXrefVendorNoteInternalQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemXrefVendorNoteInternal table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemXrefVendorNoteInternalQuery The inner query object of the EXISTS statement
     */
    public function useItemXrefVendorNoteInternalExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemXrefVendorNoteInternalQuery */
        $q = $this->useExistsQuery('ItemXrefVendorNoteInternal', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemXrefVendorNoteInternal table for a NOT EXISTS query.
     *
     * @see useItemXrefVendorNoteInternalExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefVendorNoteInternalQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemXrefVendorNoteInternalNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefVendorNoteInternalQuery */
        $q = $this->useExistsQuery('ItemXrefVendorNoteInternal', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemXrefVendorNoteInternal table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemXrefVendorNoteInternalQuery The inner query object of the IN statement
     */
    public function useInItemXrefVendorNoteInternalQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemXrefVendorNoteInternalQuery */
        $q = $this->useInQuery('ItemXrefVendorNoteInternal', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemXrefVendorNoteInternal table for a NOT IN query.
     *
     * @see useItemXrefVendorNoteInternalInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefVendorNoteInternalQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemXrefVendorNoteInternalQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefVendorNoteInternalQuery */
        $q = $this->useInQuery('ItemXrefVendorNoteInternal', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvPallet object
     *
     * @param \InvPallet|ObjectCollection $invPallet the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvPallet($invPallet, ?string $comparison = null)
    {
        if ($invPallet instanceof \InvPallet) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $invPallet->getInititemnbr(), $comparison);

            return $this;
        } elseif ($invPallet instanceof ObjectCollection) {
            $this
                ->useInvPalletQuery()
                ->filterByPrimaryKeys($invPallet->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByInvPallet() only accepts arguments of type \InvPallet or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvPallet relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvPallet(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvPallet');

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
            $this->addJoinObject($join, 'InvPallet');
        }

        return $this;
    }

    /**
     * Use the InvPallet relation InvPallet object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvPalletQuery A secondary query class using the current class as primary query
     */
    public function useInvPalletQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvPallet($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvPallet', '\InvPalletQuery');
    }

    /**
     * Use the InvPallet relation InvPallet object
     *
     * @param callable(\InvPalletQuery):\InvPalletQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvPalletQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvPalletQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvPallet table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvPalletQuery The inner query object of the EXISTS statement
     */
    public function useInvPalletExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvPalletQuery */
        $q = $this->useExistsQuery('InvPallet', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvPallet table for a NOT EXISTS query.
     *
     * @see useInvPalletExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvPalletQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvPalletNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvPalletQuery */
        $q = $this->useExistsQuery('InvPallet', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvPallet table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvPalletQuery The inner query object of the IN statement
     */
    public function useInInvPalletQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvPalletQuery */
        $q = $this->useInQuery('InvPallet', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvPallet table for a NOT IN query.
     *
     * @see useInvPalletInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvPalletQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvPalletQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvPalletQuery */
        $q = $this->useInQuery('InvPallet', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \PurchaseOrderDetail object
     *
     * @param \PurchaseOrderDetail|ObjectCollection $purchaseOrderDetail the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetail($purchaseOrderDetail, ?string $comparison = null)
    {
        if ($purchaseOrderDetail instanceof \PurchaseOrderDetail) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $purchaseOrderDetail->getInititemnbr(), $comparison);

            return $this;
        } elseif ($purchaseOrderDetail instanceof ObjectCollection) {
            $this
                ->usePurchaseOrderDetailQuery()
                ->filterByPrimaryKeys($purchaseOrderDetail->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByPurchaseOrderDetail() only accepts arguments of type \PurchaseOrderDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPurchaseOrderDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrderDetail');

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
            $this->addJoinObject($join, 'PurchaseOrderDetail');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrderDetail relation PurchaseOrderDetail object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderDetailQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPurchaseOrderDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrderDetail', '\PurchaseOrderDetailQuery');
    }

    /**
     * Use the PurchaseOrderDetail relation PurchaseOrderDetail object
     *
     * @param callable(\PurchaseOrderDetailQuery):\PurchaseOrderDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPurchaseOrderDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePurchaseOrderDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PurchaseOrderDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PurchaseOrderDetailQuery The inner query object of the EXISTS statement
     */
    public function usePurchaseOrderDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PurchaseOrderDetailQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetail table for a NOT EXISTS query.
     *
     * @see usePurchaseOrderDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function usePurchaseOrderDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PurchaseOrderDetailQuery The inner query object of the IN statement
     */
    public function useInPurchaseOrderDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PurchaseOrderDetailQuery */
        $q = $this->useInQuery('PurchaseOrderDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetail table for a NOT IN query.
     *
     * @see usePurchaseOrderDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInPurchaseOrderDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailQuery */
        $q = $this->useInQuery('PurchaseOrderDetail', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \PurchaseOrderDetailReceipt object
     *
     * @param \PurchaseOrderDetailReceipt|ObjectCollection $purchaseOrderDetailReceipt the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetailReceipt($purchaseOrderDetailReceipt, ?string $comparison = null)
    {
        if ($purchaseOrderDetailReceipt instanceof \PurchaseOrderDetailReceipt) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $purchaseOrderDetailReceipt->getInititemnbr(), $comparison);

            return $this;
        } elseif ($purchaseOrderDetailReceipt instanceof ObjectCollection) {
            $this
                ->usePurchaseOrderDetailReceiptQuery()
                ->filterByPrimaryKeys($purchaseOrderDetailReceipt->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByPurchaseOrderDetailReceipt() only accepts arguments of type \PurchaseOrderDetailReceipt or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetailReceipt relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPurchaseOrderDetailReceipt(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrderDetailReceipt');

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
            $this->addJoinObject($join, 'PurchaseOrderDetailReceipt');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrderDetailReceipt relation PurchaseOrderDetailReceipt object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderDetailReceiptQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderDetailReceiptQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPurchaseOrderDetailReceipt($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrderDetailReceipt', '\PurchaseOrderDetailReceiptQuery');
    }

    /**
     * Use the PurchaseOrderDetailReceipt relation PurchaseOrderDetailReceipt object
     *
     * @param callable(\PurchaseOrderDetailReceiptQuery):\PurchaseOrderDetailReceiptQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPurchaseOrderDetailReceiptQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePurchaseOrderDetailReceiptQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceipt table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PurchaseOrderDetailReceiptQuery The inner query object of the EXISTS statement
     */
    public function usePurchaseOrderDetailReceiptExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PurchaseOrderDetailReceiptQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetailReceipt', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceipt table for a NOT EXISTS query.
     *
     * @see usePurchaseOrderDetailReceiptExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailReceiptQuery The inner query object of the NOT EXISTS statement
     */
    public function usePurchaseOrderDetailReceiptNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailReceiptQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetailReceipt', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceipt table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PurchaseOrderDetailReceiptQuery The inner query object of the IN statement
     */
    public function useInPurchaseOrderDetailReceiptQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PurchaseOrderDetailReceiptQuery */
        $q = $this->useInQuery('PurchaseOrderDetailReceipt', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceipt table for a NOT IN query.
     *
     * @see usePurchaseOrderDetailReceiptInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailReceiptQuery The inner query object of the NOT IN statement
     */
    public function useNotInPurchaseOrderDetailReceiptQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailReceiptQuery */
        $q = $this->useInQuery('PurchaseOrderDetailReceipt', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \PurchaseOrderDetailReceiving object
     *
     * @param \PurchaseOrderDetailReceiving|ObjectCollection $purchaseOrderDetailReceiving the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetailReceiving($purchaseOrderDetailReceiving, ?string $comparison = null)
    {
        if ($purchaseOrderDetailReceiving instanceof \PurchaseOrderDetailReceiving) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $purchaseOrderDetailReceiving->getInititemnbr(), $comparison);

            return $this;
        } elseif ($purchaseOrderDetailReceiving instanceof ObjectCollection) {
            $this
                ->usePurchaseOrderDetailReceivingQuery()
                ->filterByPrimaryKeys($purchaseOrderDetailReceiving->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByPurchaseOrderDetailReceiving() only accepts arguments of type \PurchaseOrderDetailReceiving or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetailReceiving relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPurchaseOrderDetailReceiving(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrderDetailReceiving');

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
            $this->addJoinObject($join, 'PurchaseOrderDetailReceiving');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrderDetailReceiving relation PurchaseOrderDetailReceiving object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderDetailReceivingQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderDetailReceivingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPurchaseOrderDetailReceiving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrderDetailReceiving', '\PurchaseOrderDetailReceivingQuery');
    }

    /**
     * Use the PurchaseOrderDetailReceiving relation PurchaseOrderDetailReceiving object
     *
     * @param callable(\PurchaseOrderDetailReceivingQuery):\PurchaseOrderDetailReceivingQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPurchaseOrderDetailReceivingQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePurchaseOrderDetailReceivingQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceiving table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PurchaseOrderDetailReceivingQuery The inner query object of the EXISTS statement
     */
    public function usePurchaseOrderDetailReceivingExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PurchaseOrderDetailReceivingQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetailReceiving', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceiving table for a NOT EXISTS query.
     *
     * @see usePurchaseOrderDetailReceivingExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailReceivingQuery The inner query object of the NOT EXISTS statement
     */
    public function usePurchaseOrderDetailReceivingNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailReceivingQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetailReceiving', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceiving table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PurchaseOrderDetailReceivingQuery The inner query object of the IN statement
     */
    public function useInPurchaseOrderDetailReceivingQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PurchaseOrderDetailReceivingQuery */
        $q = $this->useInQuery('PurchaseOrderDetailReceiving', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailReceiving table for a NOT IN query.
     *
     * @see usePurchaseOrderDetailReceivingInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailReceivingQuery The inner query object of the NOT IN statement
     */
    public function useNotInPurchaseOrderDetailReceivingQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailReceivingQuery */
        $q = $this->useInQuery('PurchaseOrderDetailReceiving', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \PurchaseOrderDetailLotReceiving object
     *
     * @param \PurchaseOrderDetailLotReceiving|ObjectCollection $purchaseOrderDetailLotReceiving the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPurchaseOrderDetailLotReceiving($purchaseOrderDetailLotReceiving, ?string $comparison = null)
    {
        if ($purchaseOrderDetailLotReceiving instanceof \PurchaseOrderDetailLotReceiving) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $purchaseOrderDetailLotReceiving->getInititemnbr(), $comparison);

            return $this;
        } elseif ($purchaseOrderDetailLotReceiving instanceof ObjectCollection) {
            $this
                ->usePurchaseOrderDetailLotReceivingQuery()
                ->filterByPrimaryKeys($purchaseOrderDetailLotReceiving->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByPurchaseOrderDetailLotReceiving() only accepts arguments of type \PurchaseOrderDetailLotReceiving or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PurchaseOrderDetailLotReceiving relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPurchaseOrderDetailLotReceiving(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PurchaseOrderDetailLotReceiving');

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
            $this->addJoinObject($join, 'PurchaseOrderDetailLotReceiving');
        }

        return $this;
    }

    /**
     * Use the PurchaseOrderDetailLotReceiving relation PurchaseOrderDetailLotReceiving object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \PurchaseOrderDetailLotReceivingQuery A secondary query class using the current class as primary query
     */
    public function usePurchaseOrderDetailLotReceivingQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPurchaseOrderDetailLotReceiving($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PurchaseOrderDetailLotReceiving', '\PurchaseOrderDetailLotReceivingQuery');
    }

    /**
     * Use the PurchaseOrderDetailLotReceiving relation PurchaseOrderDetailLotReceiving object
     *
     * @param callable(\PurchaseOrderDetailLotReceivingQuery):\PurchaseOrderDetailLotReceivingQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPurchaseOrderDetailLotReceivingQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePurchaseOrderDetailLotReceivingQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to PurchaseOrderDetailLotReceiving table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \PurchaseOrderDetailLotReceivingQuery The inner query object of the EXISTS statement
     */
    public function usePurchaseOrderDetailLotReceivingExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \PurchaseOrderDetailLotReceivingQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetailLotReceiving', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailLotReceiving table for a NOT EXISTS query.
     *
     * @see usePurchaseOrderDetailLotReceivingExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailLotReceivingQuery The inner query object of the NOT EXISTS statement
     */
    public function usePurchaseOrderDetailLotReceivingNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailLotReceivingQuery */
        $q = $this->useExistsQuery('PurchaseOrderDetailLotReceiving', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailLotReceiving table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \PurchaseOrderDetailLotReceivingQuery The inner query object of the IN statement
     */
    public function useInPurchaseOrderDetailLotReceivingQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \PurchaseOrderDetailLotReceivingQuery */
        $q = $this->useInQuery('PurchaseOrderDetailLotReceiving', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to PurchaseOrderDetailLotReceiving table for a NOT IN query.
     *
     * @see usePurchaseOrderDetailLotReceivingInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \PurchaseOrderDetailLotReceivingQuery The inner query object of the NOT IN statement
     */
    public function useNotInPurchaseOrderDetailLotReceivingQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \PurchaseOrderDetailLotReceivingQuery */
        $q = $this->useInQuery('PurchaseOrderDetailLotReceiving', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \BomComponent object
     *
     * @param \BomComponent|ObjectCollection $bomComponent the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBomComponent($bomComponent, ?string $comparison = null)
    {
        if ($bomComponent instanceof \BomComponent) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $bomComponent->getBomdusagitem(), $comparison);

            return $this;
        } elseif ($bomComponent instanceof ObjectCollection) {
            $this
                ->useBomComponentQuery()
                ->filterByPrimaryKeys($bomComponent->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByBomComponent() only accepts arguments of type \BomComponent or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BomComponent relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinBomComponent(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BomComponent');

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
            $this->addJoinObject($join, 'BomComponent');
        }

        return $this;
    }

    /**
     * Use the BomComponent relation BomComponent object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \BomComponentQuery A secondary query class using the current class as primary query
     */
    public function useBomComponentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBomComponent($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BomComponent', '\BomComponentQuery');
    }

    /**
     * Use the BomComponent relation BomComponent object
     *
     * @param callable(\BomComponentQuery):\BomComponentQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withBomComponentQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useBomComponentQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to BomComponent table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \BomComponentQuery The inner query object of the EXISTS statement
     */
    public function useBomComponentExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \BomComponentQuery */
        $q = $this->useExistsQuery('BomComponent', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to BomComponent table for a NOT EXISTS query.
     *
     * @see useBomComponentExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \BomComponentQuery The inner query object of the NOT EXISTS statement
     */
    public function useBomComponentNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BomComponentQuery */
        $q = $this->useExistsQuery('BomComponent', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to BomComponent table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \BomComponentQuery The inner query object of the IN statement
     */
    public function useInBomComponentQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \BomComponentQuery */
        $q = $this->useInQuery('BomComponent', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to BomComponent table for a NOT IN query.
     *
     * @see useBomComponentInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \BomComponentQuery The inner query object of the NOT IN statement
     */
    public function useNotInBomComponentQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BomComponentQuery */
        $q = $this->useInQuery('BomComponent', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \BomItem object
     *
     * @param \BomItem|ObjectCollection $bomItem the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBomItem($bomItem, ?string $comparison = null)
    {
        if ($bomItem instanceof \BomItem) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $bomItem->getBomhproditem(), $comparison);

            return $this;
        } elseif ($bomItem instanceof ObjectCollection) {
            $this
                ->useBomItemQuery()
                ->filterByPrimaryKeys($bomItem->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByBomItem() only accepts arguments of type \BomItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BomItem relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinBomItem(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BomItem');

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
            $this->addJoinObject($join, 'BomItem');
        }

        return $this;
    }

    /**
     * Use the BomItem relation BomItem object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \BomItemQuery A secondary query class using the current class as primary query
     */
    public function useBomItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBomItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BomItem', '\BomItemQuery');
    }

    /**
     * Use the BomItem relation BomItem object
     *
     * @param callable(\BomItemQuery):\BomItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withBomItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useBomItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to BomItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \BomItemQuery The inner query object of the EXISTS statement
     */
    public function useBomItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \BomItemQuery */
        $q = $this->useExistsQuery('BomItem', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to BomItem table for a NOT EXISTS query.
     *
     * @see useBomItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \BomItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useBomItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BomItemQuery */
        $q = $this->useExistsQuery('BomItem', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to BomItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \BomItemQuery The inner query object of the IN statement
     */
    public function useInBomItemQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \BomItemQuery */
        $q = $this->useInQuery('BomItem', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to BomItem table for a NOT IN query.
     *
     * @see useBomItemInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \BomItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInBomItemQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BomItemQuery */
        $q = $this->useInQuery('BomItem', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \BookingDetail object
     *
     * @param \BookingDetail|ObjectCollection $bookingDetail the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBookingDetail($bookingDetail, ?string $comparison = null)
    {
        if ($bookingDetail instanceof \BookingDetail) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $bookingDetail->getInititemnbr(), $comparison);

            return $this;
        } elseif ($bookingDetail instanceof ObjectCollection) {
            $this
                ->useBookingDetailQuery()
                ->filterByPrimaryKeys($bookingDetail->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByBookingDetail() only accepts arguments of type \BookingDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BookingDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinBookingDetail(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BookingDetail');

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
            $this->addJoinObject($join, 'BookingDetail');
        }

        return $this;
    }

    /**
     * Use the BookingDetail relation BookingDetail object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \BookingDetailQuery A secondary query class using the current class as primary query
     */
    public function useBookingDetailQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBookingDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BookingDetail', '\BookingDetailQuery');
    }

    /**
     * Use the BookingDetail relation BookingDetail object
     *
     * @param callable(\BookingDetailQuery):\BookingDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withBookingDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useBookingDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to BookingDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \BookingDetailQuery The inner query object of the EXISTS statement
     */
    public function useBookingDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \BookingDetailQuery */
        $q = $this->useExistsQuery('BookingDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to BookingDetail table for a NOT EXISTS query.
     *
     * @see useBookingDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \BookingDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function useBookingDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BookingDetailQuery */
        $q = $this->useExistsQuery('BookingDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to BookingDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \BookingDetailQuery The inner query object of the IN statement
     */
    public function useInBookingDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \BookingDetailQuery */
        $q = $this->useInQuery('BookingDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to BookingDetail table for a NOT IN query.
     *
     * @see useBookingDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \BookingDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInBookingDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BookingDetailQuery */
        $q = $this->useInQuery('BookingDetail', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesHistoryDetail object
     *
     * @param \SalesHistoryDetail|ObjectCollection $salesHistoryDetail the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesHistoryDetail($salesHistoryDetail, ?string $comparison = null)
    {
        if ($salesHistoryDetail instanceof \SalesHistoryDetail) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $salesHistoryDetail->getInititemnbr(), $comparison);

            return $this;
        } elseif ($salesHistoryDetail instanceof ObjectCollection) {
            $this
                ->useSalesHistoryDetailQuery()
                ->filterByPrimaryKeys($salesHistoryDetail->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySalesHistoryDetail() only accepts arguments of type \SalesHistoryDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistoryDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesHistoryDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesHistoryDetail');

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
            $this->addJoinObject($join, 'SalesHistoryDetail');
        }

        return $this;
    }

    /**
     * Use the SalesHistoryDetail relation SalesHistoryDetail object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesHistoryDetailQuery A secondary query class using the current class as primary query
     */
    public function useSalesHistoryDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesHistoryDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesHistoryDetail', '\SalesHistoryDetailQuery');
    }

    /**
     * Use the SalesHistoryDetail relation SalesHistoryDetail object
     *
     * @param callable(\SalesHistoryDetailQuery):\SalesHistoryDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesHistoryDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesHistoryDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesHistoryDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesHistoryDetailQuery The inner query object of the EXISTS statement
     */
    public function useSalesHistoryDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesHistoryDetailQuery */
        $q = $this->useExistsQuery('SalesHistoryDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesHistoryDetail table for a NOT EXISTS query.
     *
     * @see useSalesHistoryDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesHistoryDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryDetailQuery */
        $q = $this->useExistsQuery('SalesHistoryDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesHistoryDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesHistoryDetailQuery The inner query object of the IN statement
     */
    public function useInSalesHistoryDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesHistoryDetailQuery */
        $q = $this->useInQuery('SalesHistoryDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesHistoryDetail table for a NOT IN query.
     *
     * @see useSalesHistoryDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesHistoryDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryDetailQuery */
        $q = $this->useInQuery('SalesHistoryDetail', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesOrderDetail object
     *
     * @param \SalesOrderDetail|ObjectCollection $salesOrderDetail the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesOrderDetail($salesOrderDetail, ?string $comparison = null)
    {
        if ($salesOrderDetail instanceof \SalesOrderDetail) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $salesOrderDetail->getInititemnbr(), $comparison);

            return $this;
        } elseif ($salesOrderDetail instanceof ObjectCollection) {
            $this
                ->useSalesOrderDetailQuery()
                ->filterByPrimaryKeys($salesOrderDetail->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySalesOrderDetail() only accepts arguments of type \SalesOrderDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrderDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesOrderDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrderDetail');

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
            $this->addJoinObject($join, 'SalesOrderDetail');
        }

        return $this;
    }

    /**
     * Use the SalesOrderDetail relation SalesOrderDetail object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesOrderDetailQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesOrderDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrderDetail', '\SalesOrderDetailQuery');
    }

    /**
     * Use the SalesOrderDetail relation SalesOrderDetail object
     *
     * @param callable(\SalesOrderDetailQuery):\SalesOrderDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesOrderDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesOrderDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesOrderDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesOrderDetailQuery The inner query object of the EXISTS statement
     */
    public function useSalesOrderDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesOrderDetailQuery */
        $q = $this->useExistsQuery('SalesOrderDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesOrderDetail table for a NOT EXISTS query.
     *
     * @see useSalesOrderDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesOrderDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderDetailQuery */
        $q = $this->useExistsQuery('SalesOrderDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesOrderDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesOrderDetailQuery The inner query object of the IN statement
     */
    public function useInSalesOrderDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesOrderDetailQuery */
        $q = $this->useInQuery('SalesOrderDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesOrderDetail table for a NOT IN query.
     *
     * @see useSalesOrderDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesOrderDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderDetailQuery */
        $q = $this->useInQuery('SalesOrderDetail', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesOrderLotserial object
     *
     * @param \SalesOrderLotserial|ObjectCollection $salesOrderLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesOrderLotserial($salesOrderLotserial, ?string $comparison = null)
    {
        if ($salesOrderLotserial instanceof \SalesOrderLotserial) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $salesOrderLotserial->getInititemnbr(), $comparison);

            return $this;
        } elseif ($salesOrderLotserial instanceof ObjectCollection) {
            $this
                ->useSalesOrderLotserialQuery()
                ->filterByPrimaryKeys($salesOrderLotserial->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySalesOrderLotserial() only accepts arguments of type \SalesOrderLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrderLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesOrderLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrderLotserial');

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
            $this->addJoinObject($join, 'SalesOrderLotserial');
        }

        return $this;
    }

    /**
     * Use the SalesOrderLotserial relation SalesOrderLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesOrderLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesOrderLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrderLotserial', '\SalesOrderLotserialQuery');
    }

    /**
     * Use the SalesOrderLotserial relation SalesOrderLotserial object
     *
     * @param callable(\SalesOrderLotserialQuery):\SalesOrderLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesOrderLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesOrderLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesOrderLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesOrderLotserialQuery The inner query object of the EXISTS statement
     */
    public function useSalesOrderLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesOrderLotserialQuery */
        $q = $this->useExistsQuery('SalesOrderLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesOrderLotserial table for a NOT EXISTS query.
     *
     * @see useSalesOrderLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesOrderLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderLotserialQuery */
        $q = $this->useExistsQuery('SalesOrderLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesOrderLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesOrderLotserialQuery The inner query object of the IN statement
     */
    public function useInSalesOrderLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesOrderLotserialQuery */
        $q = $this->useInQuery('SalesOrderLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesOrderLotserial table for a NOT IN query.
     *
     * @see useSalesOrderLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesOrderLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderLotserialQuery */
        $q = $this->useInQuery('SalesOrderLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesHistoryLotserial object
     *
     * @param \SalesHistoryLotserial|ObjectCollection $salesHistoryLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesHistoryLotserial($salesHistoryLotserial, ?string $comparison = null)
    {
        if ($salesHistoryLotserial instanceof \SalesHistoryLotserial) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $salesHistoryLotserial->getInititemnbr(), $comparison);

            return $this;
        } elseif ($salesHistoryLotserial instanceof ObjectCollection) {
            $this
                ->useSalesHistoryLotserialQuery()
                ->filterByPrimaryKeys($salesHistoryLotserial->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySalesHistoryLotserial() only accepts arguments of type \SalesHistoryLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistoryLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesHistoryLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesHistoryLotserial');

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
            $this->addJoinObject($join, 'SalesHistoryLotserial');
        }

        return $this;
    }

    /**
     * Use the SalesHistoryLotserial relation SalesHistoryLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesHistoryLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSalesHistoryLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesHistoryLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesHistoryLotserial', '\SalesHistoryLotserialQuery');
    }

    /**
     * Use the SalesHistoryLotserial relation SalesHistoryLotserial object
     *
     * @param callable(\SalesHistoryLotserialQuery):\SalesHistoryLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesHistoryLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesHistoryLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesHistoryLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesHistoryLotserialQuery The inner query object of the EXISTS statement
     */
    public function useSalesHistoryLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesHistoryLotserialQuery */
        $q = $this->useExistsQuery('SalesHistoryLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesHistoryLotserial table for a NOT EXISTS query.
     *
     * @see useSalesHistoryLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesHistoryLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryLotserialQuery */
        $q = $this->useExistsQuery('SalesHistoryLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesHistoryLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesHistoryLotserialQuery The inner query object of the IN statement
     */
    public function useInSalesHistoryLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesHistoryLotserialQuery */
        $q = $this->useInQuery('SalesHistoryLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesHistoryLotserial table for a NOT IN query.
     *
     * @see useSalesHistoryLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesHistoryLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryLotserialQuery */
        $q = $this->useInQuery('SalesHistoryLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SoAllocatedLotserial object
     *
     * @param \SoAllocatedLotserial|ObjectCollection $soAllocatedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySoAllocatedLotserial($soAllocatedLotserial, ?string $comparison = null)
    {
        if ($soAllocatedLotserial instanceof \SoAllocatedLotserial) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $soAllocatedLotserial->getInititemnbr(), $comparison);

            return $this;
        } elseif ($soAllocatedLotserial instanceof ObjectCollection) {
            $this
                ->useSoAllocatedLotserialQuery()
                ->filterByPrimaryKeys($soAllocatedLotserial->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySoAllocatedLotserial() only accepts arguments of type \SoAllocatedLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoAllocatedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSoAllocatedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoAllocatedLotserial');

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
            $this->addJoinObject($join, 'SoAllocatedLotserial');
        }

        return $this;
    }

    /**
     * Use the SoAllocatedLotserial relation SoAllocatedLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SoAllocatedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSoAllocatedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSoAllocatedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoAllocatedLotserial', '\SoAllocatedLotserialQuery');
    }

    /**
     * Use the SoAllocatedLotserial relation SoAllocatedLotserial object
     *
     * @param callable(\SoAllocatedLotserialQuery):\SoAllocatedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSoAllocatedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSoAllocatedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SoAllocatedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SoAllocatedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useSoAllocatedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SoAllocatedLotserialQuery */
        $q = $this->useExistsQuery('SoAllocatedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SoAllocatedLotserial table for a NOT EXISTS query.
     *
     * @see useSoAllocatedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SoAllocatedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useSoAllocatedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoAllocatedLotserialQuery */
        $q = $this->useExistsQuery('SoAllocatedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SoAllocatedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SoAllocatedLotserialQuery The inner query object of the IN statement
     */
    public function useInSoAllocatedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SoAllocatedLotserialQuery */
        $q = $this->useInQuery('SoAllocatedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SoAllocatedLotserial table for a NOT IN query.
     *
     * @see useSoAllocatedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SoAllocatedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInSoAllocatedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoAllocatedLotserialQuery */
        $q = $this->useInQuery('SoAllocatedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemPricingDiscount object
     *
     * @param \ItemPricingDiscount|ObjectCollection $itemPricingDiscount the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemPricingDiscount($itemPricingDiscount, ?string $comparison = null)
    {
        if ($itemPricingDiscount instanceof \ItemPricingDiscount) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemPricingDiscount->getOepcitemnbr(), $comparison);

            return $this;
        } elseif ($itemPricingDiscount instanceof ObjectCollection) {
            $this
                ->useItemPricingDiscountQuery()
                ->filterByPrimaryKeys($itemPricingDiscount->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemPricingDiscount() only accepts arguments of type \ItemPricingDiscount or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemPricingDiscount relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemPricingDiscount(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemPricingDiscount');

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
            $this->addJoinObject($join, 'ItemPricingDiscount');
        }

        return $this;
    }

    /**
     * Use the ItemPricingDiscount relation ItemPricingDiscount object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemPricingDiscountQuery A secondary query class using the current class as primary query
     */
    public function useItemPricingDiscountQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemPricingDiscount($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemPricingDiscount', '\ItemPricingDiscountQuery');
    }

    /**
     * Use the ItemPricingDiscount relation ItemPricingDiscount object
     *
     * @param callable(\ItemPricingDiscountQuery):\ItemPricingDiscountQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemPricingDiscountQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemPricingDiscountQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemPricingDiscount table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemPricingDiscountQuery The inner query object of the EXISTS statement
     */
    public function useItemPricingDiscountExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemPricingDiscountQuery */
        $q = $this->useExistsQuery('ItemPricingDiscount', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemPricingDiscount table for a NOT EXISTS query.
     *
     * @see useItemPricingDiscountExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemPricingDiscountQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemPricingDiscountNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemPricingDiscountQuery */
        $q = $this->useExistsQuery('ItemPricingDiscount', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemPricingDiscount table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemPricingDiscountQuery The inner query object of the IN statement
     */
    public function useInItemPricingDiscountQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemPricingDiscountQuery */
        $q = $this->useInQuery('ItemPricingDiscount', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemPricingDiscount table for a NOT IN query.
     *
     * @see useItemPricingDiscountInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemPricingDiscountQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemPricingDiscountQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemPricingDiscountQuery */
        $q = $this->useInQuery('ItemPricingDiscount', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SoPickedLotserial object
     *
     * @param \SoPickedLotserial|ObjectCollection $soPickedLotserial the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySoPickedLotserial($soPickedLotserial, ?string $comparison = null)
    {
        if ($soPickedLotserial instanceof \SoPickedLotserial) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $soPickedLotserial->getInititemnbr(), $comparison);

            return $this;
        } elseif ($soPickedLotserial instanceof ObjectCollection) {
            $this
                ->useSoPickedLotserialQuery()
                ->filterByPrimaryKeys($soPickedLotserial->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySoPickedLotserial() only accepts arguments of type \SoPickedLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoPickedLotserial relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSoPickedLotserial(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoPickedLotserial');

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
            $this->addJoinObject($join, 'SoPickedLotserial');
        }

        return $this;
    }

    /**
     * Use the SoPickedLotserial relation SoPickedLotserial object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SoPickedLotserialQuery A secondary query class using the current class as primary query
     */
    public function useSoPickedLotserialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSoPickedLotserial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoPickedLotserial', '\SoPickedLotserialQuery');
    }

    /**
     * Use the SoPickedLotserial relation SoPickedLotserial object
     *
     * @param callable(\SoPickedLotserialQuery):\SoPickedLotserialQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSoPickedLotserialQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSoPickedLotserialQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SoPickedLotserial table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SoPickedLotserialQuery The inner query object of the EXISTS statement
     */
    public function useSoPickedLotserialExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SoPickedLotserialQuery */
        $q = $this->useExistsQuery('SoPickedLotserial', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SoPickedLotserial table for a NOT EXISTS query.
     *
     * @see useSoPickedLotserialExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SoPickedLotserialQuery The inner query object of the NOT EXISTS statement
     */
    public function useSoPickedLotserialNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoPickedLotserialQuery */
        $q = $this->useExistsQuery('SoPickedLotserial', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SoPickedLotserial table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SoPickedLotserialQuery The inner query object of the IN statement
     */
    public function useInSoPickedLotserialQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SoPickedLotserialQuery */
        $q = $this->useInQuery('SoPickedLotserial', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SoPickedLotserial table for a NOT IN query.
     *
     * @see useSoPickedLotserialInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SoPickedLotserialQuery The inner query object of the NOT IN statement
     */
    public function useNotInSoPickedLotserialQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoPickedLotserialQuery */
        $q = $this->useInQuery('SoPickedLotserial', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SoStandingOrderDetail object
     *
     * @param \SoStandingOrderDetail|ObjectCollection $soStandingOrderDetail the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySoStandingOrderDetail($soStandingOrderDetail, ?string $comparison = null)
    {
        if ($soStandingOrderDetail instanceof \SoStandingOrderDetail) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $soStandingOrderDetail->getInititemnbr(), $comparison);

            return $this;
        } elseif ($soStandingOrderDetail instanceof ObjectCollection) {
            $this
                ->useSoStandingOrderDetailQuery()
                ->filterByPrimaryKeys($soStandingOrderDetail->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySoStandingOrderDetail() only accepts arguments of type \SoStandingOrderDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoStandingOrderDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSoStandingOrderDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoStandingOrderDetail');

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
            $this->addJoinObject($join, 'SoStandingOrderDetail');
        }

        return $this;
    }

    /**
     * Use the SoStandingOrderDetail relation SoStandingOrderDetail object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SoStandingOrderDetailQuery A secondary query class using the current class as primary query
     */
    public function useSoStandingOrderDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSoStandingOrderDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoStandingOrderDetail', '\SoStandingOrderDetailQuery');
    }

    /**
     * Use the SoStandingOrderDetail relation SoStandingOrderDetail object
     *
     * @param callable(\SoStandingOrderDetailQuery):\SoStandingOrderDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSoStandingOrderDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSoStandingOrderDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SoStandingOrderDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SoStandingOrderDetailQuery The inner query object of the EXISTS statement
     */
    public function useSoStandingOrderDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SoStandingOrderDetailQuery */
        $q = $this->useExistsQuery('SoStandingOrderDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SoStandingOrderDetail table for a NOT EXISTS query.
     *
     * @see useSoStandingOrderDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SoStandingOrderDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function useSoStandingOrderDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoStandingOrderDetailQuery */
        $q = $this->useExistsQuery('SoStandingOrderDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SoStandingOrderDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SoStandingOrderDetailQuery The inner query object of the IN statement
     */
    public function useInSoStandingOrderDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SoStandingOrderDetailQuery */
        $q = $this->useInQuery('SoStandingOrderDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SoStandingOrderDetail table for a NOT IN query.
     *
     * @see useSoStandingOrderDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SoStandingOrderDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInSoStandingOrderDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoStandingOrderDetailQuery */
        $q = $this->useInQuery('SoStandingOrderDetail', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemXrefUpc object
     *
     * @param \ItemXrefUpc|ObjectCollection $itemXrefUpc the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemXrefUpc($itemXrefUpc, ?string $comparison = null)
    {
        if ($itemXrefUpc instanceof \ItemXrefUpc) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefUpc->getInititemnbr(), $comparison);

            return $this;
        } elseif ($itemXrefUpc instanceof ObjectCollection) {
            $this
                ->useItemXrefUpcQuery()
                ->filterByPrimaryKeys($itemXrefUpc->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemXrefUpc() only accepts arguments of type \ItemXrefUpc or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefUpc relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemXrefUpc(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemXrefUpc');

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
            $this->addJoinObject($join, 'ItemXrefUpc');
        }

        return $this;
    }

    /**
     * Use the ItemXrefUpc relation ItemXrefUpc object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemXrefUpcQuery A secondary query class using the current class as primary query
     */
    public function useItemXrefUpcQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemXrefUpc($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemXrefUpc', '\ItemXrefUpcQuery');
    }

    /**
     * Use the ItemXrefUpc relation ItemXrefUpc object
     *
     * @param callable(\ItemXrefUpcQuery):\ItemXrefUpcQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemXrefUpcQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemXrefUpcQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemXrefUpc table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemXrefUpcQuery The inner query object of the EXISTS statement
     */
    public function useItemXrefUpcExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemXrefUpcQuery */
        $q = $this->useExistsQuery('ItemXrefUpc', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemXrefUpc table for a NOT EXISTS query.
     *
     * @see useItemXrefUpcExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefUpcQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemXrefUpcNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefUpcQuery */
        $q = $this->useExistsQuery('ItemXrefUpc', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemXrefUpc table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemXrefUpcQuery The inner query object of the IN statement
     */
    public function useInItemXrefUpcQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemXrefUpcQuery */
        $q = $this->useInQuery('ItemXrefUpc', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemXrefUpc table for a NOT IN query.
     *
     * @see useItemXrefUpcInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefUpcQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemXrefUpcQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefUpcQuery */
        $q = $this->useInQuery('ItemXrefUpc', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ItemXrefVendor object
     *
     * @param \ItemXrefVendor|ObjectCollection $itemXrefVendor the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemXrefVendor($itemXrefVendor, ?string $comparison = null)
    {
        if ($itemXrefVendor instanceof \ItemXrefVendor) {
            $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefVendor->getInititemnbr(), $comparison);

            return $this;
        } elseif ($itemXrefVendor instanceof ObjectCollection) {
            $this
                ->useItemXrefVendorQuery()
                ->filterByPrimaryKeys($itemXrefVendor->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterByItemXrefVendor() only accepts arguments of type \ItemXrefVendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefVendor relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemXrefVendor(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemXrefVendor');

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
            $this->addJoinObject($join, 'ItemXrefVendor');
        }

        return $this;
    }

    /**
     * Use the ItemXrefVendor relation ItemXrefVendor object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemXrefVendorQuery A secondary query class using the current class as primary query
     */
    public function useItemXrefVendorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemXrefVendor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemXrefVendor', '\ItemXrefVendorQuery');
    }

    /**
     * Use the ItemXrefVendor relation ItemXrefVendor object
     *
     * @param callable(\ItemXrefVendorQuery):\ItemXrefVendorQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemXrefVendorQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemXrefVendorQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemXrefVendor table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemXrefVendorQuery The inner query object of the EXISTS statement
     */
    public function useItemXrefVendorExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemXrefVendorQuery */
        $q = $this->useExistsQuery('ItemXrefVendor', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemXrefVendor table for a NOT EXISTS query.
     *
     * @see useItemXrefVendorExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefVendorQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemXrefVendorNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefVendorQuery */
        $q = $this->useExistsQuery('ItemXrefVendor', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemXrefVendor table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemXrefVendorQuery The inner query object of the IN statement
     */
    public function useInItemXrefVendorQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemXrefVendorQuery */
        $q = $this->useInQuery('ItemXrefVendor', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemXrefVendor table for a NOT IN query.
     *
     * @see useItemXrefVendorInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemXrefVendorQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemXrefVendorQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemXrefVendorQuery */
        $q = $this->useInQuery('ItemXrefVendor', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildItemMasterItem $itemMasterItem Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($itemMasterItem = null)
    {
        if ($itemMasterItem) {
            $this->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_item_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemMasterItemTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ItemMasterItemTableMap::clearInstancePool();
            ItemMasterItemTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ItemMasterItemTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ItemMasterItemTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ItemMasterItemTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ItemMasterItemTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
