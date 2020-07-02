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
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'inv_item_mast' table.
 *
 *
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
 * @method     \UnitofMeasureSaleQuery|\UnitofMeasurePurchaseQuery|\InvGroupCodeQuery|\InvPriceCodeQuery|\InvCommissionCodeQuery|\ItemPricingQuery|\ItemXrefCustomerQuery|\ItemAddonItemQuery|\ItemSubstituteQuery|\ItemXrefManufacturerQuery|\ItemXrefCustomerNoteQuery|\ItemXrefVendorNoteDetailQuery|\ItemXrefVendorNoteInternalQuery|\BookingDetailQuery|\SalesHistoryLotserialQuery|\ItemXrefUpcQuery|\ItemXrefVendorQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildItemMasterItem findOne(ConnectionInterface $con = null) Return the first ChildItemMasterItem matching the query
 * @method     ChildItemMasterItem findOneOrCreate(ConnectionInterface $con = null) Return the first ChildItemMasterItem matching the query, or a new ChildItemMasterItem object populated from the query conditions when no match is found
 *
 * @method     ChildItemMasterItem findOneByInititemnbr(string $InitItemNbr) Return the first ChildItemMasterItem filtered by the InitItemNbr column
 * @method     ChildItemMasterItem findOneByInitdesc1(string $InitDesc1) Return the first ChildItemMasterItem filtered by the InitDesc1 column
 * @method     ChildItemMasterItem findOneByInitdesc2(string $InitDesc2) Return the first ChildItemMasterItem filtered by the InitDesc2 column
 * @method     ChildItemMasterItem findOneByIntbgrup(string $IntbGrup) Return the first ChildItemMasterItem filtered by the IntbGrup column
 * @method     ChildItemMasterItem findOneByInitformatcode(string $InitFormatCode) Return the first ChildItemMasterItem filtered by the InitFormatCode column
 * @method     ChildItemMasterItem findOneByInitsplit(string $InitSplit) Return the first ChildItemMasterItem filtered by the InitSplit column
 * @method     ChildItemMasterItem findOneByInitsherdatecd(string $InitSherDateCd) Return the first ChildItemMasterItem filtered by the InitSherDateCd column
 * @method     ChildItemMasterItem findOneByInitcoreyn(string $InitCoreYN) Return the first ChildItemMasterItem filtered by the InitCoreYN column
 * @method     ChildItemMasterItem findOneByIntbusercode1(string $IntbUserCode1) Return the first ChildItemMasterItem filtered by the IntbUserCode1 column
 * @method     ChildItemMasterItem findOneByIntbusercode2(string $IntbUserCode2) Return the first ChildItemMasterItem filtered by the IntbUserCode2 column
 * @method     ChildItemMasterItem findOneByInittype(string $InitType) Return the first ChildItemMasterItem filtered by the InitType column
 * @method     ChildItemMasterItem findOneByInittax(string $InitTax) Return the first ChildItemMasterItem filtered by the InitTax column
 * @method     ChildItemMasterItem findOneByInitrtlpric(string $InitRtlPric) Return the first ChildItemMasterItem filtered by the InitRtlPric column
 * @method     ChildItemMasterItem findOneByInitstatchgd(string $InitStatChgd) Return the first ChildItemMasterItem filtered by the InitStatChgd column
 * @method     ChildItemMasterItem findOneByInitspecitemcd(string $InitSpecItemCd) Return the first ChildItemMasterItem filtered by the InitSpecItemCd column
 * @method     ChildItemMasterItem findOneByInitwarrdays(int $InitWarrDays) Return the first ChildItemMasterItem filtered by the InitWarrDays column
 * @method     ChildItemMasterItem findOneByIntbuomsale(string $IntbUomSale) Return the first ChildItemMasterItem filtered by the IntbUomSale column
 * @method     ChildItemMasterItem findOneByInitwght(string $InitWght) Return the first ChildItemMasterItem filtered by the InitWght column
 * @method     ChildItemMasterItem findOneByInitbord(string $InitBord) Return the first ChildItemMasterItem filtered by the InitBord column
 * @method     ChildItemMasterItem findOneByInitbaseitemid(string $InitBaseItemId) Return the first ChildItemMasterItem filtered by the InitBaseItemId column
 * @method     ChildItemMasterItem findOneByInitspecificcust(string $InitSpecificCust) Return the first ChildItemMasterItem filtered by the InitSpecificCust column
 * @method     ChildItemMasterItem findOneByInitgivedisc(string $InitGiveDisc) Return the first ChildItemMasterItem filtered by the InitGiveDisc column
 * @method     ChildItemMasterItem findOneByInitasstcode(string $InitAsstCode) Return the first ChildItemMasterItem filtered by the InitAsstCode column
 * @method     ChildItemMasterItem findOneByInitpriclastdate(string $InitPricLastDate) Return the first ChildItemMasterItem filtered by the InitPricLastDate column
 * @method     ChildItemMasterItem findOneByIntbuompur(string $IntbUomPur) Return the first ChildItemMasterItem filtered by the IntbUomPur column
 * @method     ChildItemMasterItem findOneByInitstancost(string $InitStanCost) Return the first ChildItemMasterItem filtered by the InitStanCost column
 * @method     ChildItemMasterItem findOneByInitstancostbase(string $InitStanCostBase) Return the first ChildItemMasterItem filtered by the InitStanCostBase column
 * @method     ChildItemMasterItem findOneByInitstancostlastdate(string $InitStanCostLastDate) Return the first ChildItemMasterItem filtered by the InitStanCostLastDate column
 * @method     ChildItemMasterItem findOneByInitminmarg(string $InitMinMarg) Return the first ChildItemMasterItem filtered by the InitMinMarg column
 * @method     ChildItemMasterItem findOneByInitvendid(string $InitVendId) Return the first ChildItemMasterItem filtered by the InitVendId column
 * @method     ChildItemMasterItem findOneByInitinspect(string $InitInspect) Return the first ChildItemMasterItem filtered by the InitInspect column
 * @method     ChildItemMasterItem findOneByInitstockcode(string $InitStockCode) Return the first ChildItemMasterItem filtered by the InitStockCode column
 * @method     ChildItemMasterItem findOneByInitsupritemnbr(string $InitSuprItemNbr) Return the first ChildItemMasterItem filtered by the InitSuprItemNbr column
 * @method     ChildItemMasterItem findOneByInitvendshipfrom(string $InitVendShipFrom) Return the first ChildItemMasterItem filtered by the InitVendShipFrom column
 * @method     ChildItemMasterItem findOneByInitcntryoforigin(string $InitCntryOfOrigin) Return the first ChildItemMasterItem filtered by the InitCntryOfOrigin column
 * @method     ChildItemMasterItem findOneByInitasstqty(string $InitAsstQty) Return the first ChildItemMasterItem filtered by the InitAsstQty column
 * @method     ChildItemMasterItem findOneByIntbtariffcode(string $IntbTariffCode) Return the first ChildItemMasterItem filtered by the IntbTariffCode column
 * @method     ChildItemMasterItem findOneByInitpreference(string $InitPreference) Return the first ChildItemMasterItem filtered by the InitPreference column
 * @method     ChildItemMasterItem findOneByInitproducer(string $InitProducer) Return the first ChildItemMasterItem filtered by the InitProducer column
 * @method     ChildItemMasterItem findOneByInitdocumentation(string $InitDocumentation) Return the first ChildItemMasterItem filtered by the InitDocumentation column
 * @method     ChildItemMasterItem findOneByInitpurchcrtnqty(int $InitPurchCrtnQty) Return the first ChildItemMasterItem filtered by the InitPurchCrtnQty column
 * @method     ChildItemMasterItem findOneByAptbbuyrcode(string $AptbBuyrCode) Return the first ChildItemMasterItem filtered by the AptbBuyrCode column
 * @method     ChildItemMasterItem findOneByInitlastcost(string $InitLastCost) Return the first ChildItemMasterItem filtered by the InitLastCost column
 * @method     ChildItemMasterItem findOneByInitliters(string $InitLiters) Return the first ChildItemMasterItem filtered by the InitLiters column
 * @method     ChildItemMasterItem findOneByIntbmsdscode(string $IntbMsdsCode) Return the first ChildItemMasterItem filtered by the IntbMsdsCode column
 * @method     ChildItemMasterItem findOneByInitrequirefrt(string $InitRequireFrt) Return the first ChildItemMasterItem filtered by the InitRequireFrt column
 * @method     ChildItemMasterItem findOneByInitmfrtcode(string $InitMfrtCode) Return the first ChildItemMasterItem filtered by the InitMfrtCode column
 * @method     ChildItemMasterItem findOneByInitinnerpackqty(int $InitInnerPackQty) Return the first ChildItemMasterItem filtered by the InitInnerPackQty column
 * @method     ChildItemMasterItem findOneByInitouterpackqty(int $InitOuterPackQty) Return the first ChildItemMasterItem filtered by the InitOuterPackQty column
 * @method     ChildItemMasterItem findOneByInitbasestancost(string $InitBaseStanCost) Return the first ChildItemMasterItem filtered by the InitBaseStanCost column
 * @method     ChildItemMasterItem findOneByInitshiptareqty(int $InitShipTareQty) Return the first ChildItemMasterItem filtered by the InitShipTareQty column
 * @method     ChildItemMasterItem findOneByInitwgitem(string $InitWgItem) Return the first ChildItemMasterItem filtered by the InitWgItem column
 * @method     ChildItemMasterItem findOneByIntbpricgrup(string $IntbPricGrup) Return the first ChildItemMasterItem filtered by the IntbPricGrup column
 * @method     ChildItemMasterItem findOneByIntbcommgrup(string $IntbCommGrup) Return the first ChildItemMasterItem filtered by the IntbCommGrup column
 * @method     ChildItemMasterItem findOneByInitlastcostdate(string $InitLastCostDate) Return the first ChildItemMasterItem filtered by the InitLastCostDate column
 * @method     ChildItemMasterItem findOneByInitqtypercase(int $InitQtyPerCase) Return the first ChildItemMasterItem filtered by the InitQtyPerCase column
 * @method     ChildItemMasterItem findOneByInitrevision(string $InitRevision) Return the first ChildItemMasterItem filtered by the InitRevision column
 * @method     ChildItemMasterItem findOneByInitcommsaleqty(int $InitCommSaleQty) Return the first ChildItemMasterItem filtered by the InitCommSaleQty column
 * @method     ChildItemMasterItem findOneByInitcubes(string $InitCubes) Return the first ChildItemMasterItem filtered by the InitCubes column
 * @method     ChildItemMasterItem findOneByInittimefence(int $InitTimeFence) Return the first ChildItemMasterItem filtered by the InitTimeFence column
 * @method     ChildItemMasterItem findOneByInitsrvcminchrg(string $InitSrvcMinChrg) Return the first ChildItemMasterItem filtered by the InitSrvcMinChrg column
 * @method     ChildItemMasterItem findOneByDateupdtd(string $DateUpdtd) Return the first ChildItemMasterItem filtered by the DateUpdtd column
 * @method     ChildItemMasterItem findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemMasterItem filtered by the TimeUpdtd column
 * @method     ChildItemMasterItem findOneByDummy(string $dummy) Return the first ChildItemMasterItem filtered by the dummy column *

 * @method     ChildItemMasterItem requirePk($key, ConnectionInterface $con = null) Return the ChildItemMasterItem by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOne(ConnectionInterface $con = null) Return the first ChildItemMasterItem matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildItemMasterItem requireOneByDateupdtd(string $DateUpdtd) Return the first ChildItemMasterItem filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildItemMasterItem filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildItemMasterItem requireOneByDummy(string $dummy) Return the first ChildItemMasterItem filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildItemMasterItem[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildItemMasterItem objects based on current ModelCriteria
 * @method     ChildItemMasterItem[]|ObjectCollection findByInititemnbr(string $InitItemNbr) Return ChildItemMasterItem objects filtered by the InitItemNbr column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitdesc1(string $InitDesc1) Return ChildItemMasterItem objects filtered by the InitDesc1 column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitdesc2(string $InitDesc2) Return ChildItemMasterItem objects filtered by the InitDesc2 column
 * @method     ChildItemMasterItem[]|ObjectCollection findByIntbgrup(string $IntbGrup) Return ChildItemMasterItem objects filtered by the IntbGrup column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitformatcode(string $InitFormatCode) Return ChildItemMasterItem objects filtered by the InitFormatCode column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitsplit(string $InitSplit) Return ChildItemMasterItem objects filtered by the InitSplit column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitsherdatecd(string $InitSherDateCd) Return ChildItemMasterItem objects filtered by the InitSherDateCd column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitcoreyn(string $InitCoreYN) Return ChildItemMasterItem objects filtered by the InitCoreYN column
 * @method     ChildItemMasterItem[]|ObjectCollection findByIntbusercode1(string $IntbUserCode1) Return ChildItemMasterItem objects filtered by the IntbUserCode1 column
 * @method     ChildItemMasterItem[]|ObjectCollection findByIntbusercode2(string $IntbUserCode2) Return ChildItemMasterItem objects filtered by the IntbUserCode2 column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInittype(string $InitType) Return ChildItemMasterItem objects filtered by the InitType column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInittax(string $InitTax) Return ChildItemMasterItem objects filtered by the InitTax column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitrtlpric(string $InitRtlPric) Return ChildItemMasterItem objects filtered by the InitRtlPric column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitstatchgd(string $InitStatChgd) Return ChildItemMasterItem objects filtered by the InitStatChgd column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitspecitemcd(string $InitSpecItemCd) Return ChildItemMasterItem objects filtered by the InitSpecItemCd column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitwarrdays(int $InitWarrDays) Return ChildItemMasterItem objects filtered by the InitWarrDays column
 * @method     ChildItemMasterItem[]|ObjectCollection findByIntbuomsale(string $IntbUomSale) Return ChildItemMasterItem objects filtered by the IntbUomSale column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitwght(string $InitWght) Return ChildItemMasterItem objects filtered by the InitWght column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitbord(string $InitBord) Return ChildItemMasterItem objects filtered by the InitBord column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitbaseitemid(string $InitBaseItemId) Return ChildItemMasterItem objects filtered by the InitBaseItemId column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitspecificcust(string $InitSpecificCust) Return ChildItemMasterItem objects filtered by the InitSpecificCust column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitgivedisc(string $InitGiveDisc) Return ChildItemMasterItem objects filtered by the InitGiveDisc column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitasstcode(string $InitAsstCode) Return ChildItemMasterItem objects filtered by the InitAsstCode column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitpriclastdate(string $InitPricLastDate) Return ChildItemMasterItem objects filtered by the InitPricLastDate column
 * @method     ChildItemMasterItem[]|ObjectCollection findByIntbuompur(string $IntbUomPur) Return ChildItemMasterItem objects filtered by the IntbUomPur column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitstancost(string $InitStanCost) Return ChildItemMasterItem objects filtered by the InitStanCost column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitstancostbase(string $InitStanCostBase) Return ChildItemMasterItem objects filtered by the InitStanCostBase column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitstancostlastdate(string $InitStanCostLastDate) Return ChildItemMasterItem objects filtered by the InitStanCostLastDate column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitminmarg(string $InitMinMarg) Return ChildItemMasterItem objects filtered by the InitMinMarg column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitvendid(string $InitVendId) Return ChildItemMasterItem objects filtered by the InitVendId column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitinspect(string $InitInspect) Return ChildItemMasterItem objects filtered by the InitInspect column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitstockcode(string $InitStockCode) Return ChildItemMasterItem objects filtered by the InitStockCode column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitsupritemnbr(string $InitSuprItemNbr) Return ChildItemMasterItem objects filtered by the InitSuprItemNbr column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitvendshipfrom(string $InitVendShipFrom) Return ChildItemMasterItem objects filtered by the InitVendShipFrom column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitcntryoforigin(string $InitCntryOfOrigin) Return ChildItemMasterItem objects filtered by the InitCntryOfOrigin column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitasstqty(string $InitAsstQty) Return ChildItemMasterItem objects filtered by the InitAsstQty column
 * @method     ChildItemMasterItem[]|ObjectCollection findByIntbtariffcode(string $IntbTariffCode) Return ChildItemMasterItem objects filtered by the IntbTariffCode column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitpreference(string $InitPreference) Return ChildItemMasterItem objects filtered by the InitPreference column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitproducer(string $InitProducer) Return ChildItemMasterItem objects filtered by the InitProducer column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitdocumentation(string $InitDocumentation) Return ChildItemMasterItem objects filtered by the InitDocumentation column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitpurchcrtnqty(int $InitPurchCrtnQty) Return ChildItemMasterItem objects filtered by the InitPurchCrtnQty column
 * @method     ChildItemMasterItem[]|ObjectCollection findByAptbbuyrcode(string $AptbBuyrCode) Return ChildItemMasterItem objects filtered by the AptbBuyrCode column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitlastcost(string $InitLastCost) Return ChildItemMasterItem objects filtered by the InitLastCost column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitliters(string $InitLiters) Return ChildItemMasterItem objects filtered by the InitLiters column
 * @method     ChildItemMasterItem[]|ObjectCollection findByIntbmsdscode(string $IntbMsdsCode) Return ChildItemMasterItem objects filtered by the IntbMsdsCode column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitrequirefrt(string $InitRequireFrt) Return ChildItemMasterItem objects filtered by the InitRequireFrt column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitmfrtcode(string $InitMfrtCode) Return ChildItemMasterItem objects filtered by the InitMfrtCode column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitinnerpackqty(int $InitInnerPackQty) Return ChildItemMasterItem objects filtered by the InitInnerPackQty column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitouterpackqty(int $InitOuterPackQty) Return ChildItemMasterItem objects filtered by the InitOuterPackQty column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitbasestancost(string $InitBaseStanCost) Return ChildItemMasterItem objects filtered by the InitBaseStanCost column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitshiptareqty(int $InitShipTareQty) Return ChildItemMasterItem objects filtered by the InitShipTareQty column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitwgitem(string $InitWgItem) Return ChildItemMasterItem objects filtered by the InitWgItem column
 * @method     ChildItemMasterItem[]|ObjectCollection findByIntbpricgrup(string $IntbPricGrup) Return ChildItemMasterItem objects filtered by the IntbPricGrup column
 * @method     ChildItemMasterItem[]|ObjectCollection findByIntbcommgrup(string $IntbCommGrup) Return ChildItemMasterItem objects filtered by the IntbCommGrup column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitlastcostdate(string $InitLastCostDate) Return ChildItemMasterItem objects filtered by the InitLastCostDate column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitqtypercase(int $InitQtyPerCase) Return ChildItemMasterItem objects filtered by the InitQtyPerCase column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitrevision(string $InitRevision) Return ChildItemMasterItem objects filtered by the InitRevision column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitcommsaleqty(int $InitCommSaleQty) Return ChildItemMasterItem objects filtered by the InitCommSaleQty column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitcubes(string $InitCubes) Return ChildItemMasterItem objects filtered by the InitCubes column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInittimefence(int $InitTimeFence) Return ChildItemMasterItem objects filtered by the InitTimeFence column
 * @method     ChildItemMasterItem[]|ObjectCollection findByInitsrvcminchrg(string $InitSrvcMinChrg) Return ChildItemMasterItem objects filtered by the InitSrvcMinChrg column
 * @method     ChildItemMasterItem[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildItemMasterItem objects filtered by the DateUpdtd column
 * @method     ChildItemMasterItem[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildItemMasterItem objects filtered by the TimeUpdtd column
 * @method     ChildItemMasterItem[]|ObjectCollection findByDummy(string $dummy) Return ChildItemMasterItem objects filtered by the dummy column
 * @method     ChildItemMasterItem[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ItemMasterItemQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ItemMasterItemQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ItemMasterItem', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildItemMasterItemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildItemMasterItemQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
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
    public function findPk($key, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemMasterItem A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, InitDesc1, InitDesc2, IntbGrup, InitFormatCode, InitSplit, InitSherDateCd, InitCoreYN, IntbUserCode1, IntbUserCode2, InitType, InitTax, InitRtlPric, InitStatChgd, InitSpecItemCd, InitWarrDays, IntbUomSale, InitWght, InitBord, InitBaseItemId, InitSpecificCust, InitGiveDisc, InitAsstCode, InitPricLastDate, IntbUomPur, InitStanCost, InitStanCostBase, InitStanCostLastDate, InitMinMarg, InitVendId, InitInspect, InitStockCode, InitSuprItemNbr, InitVendShipFrom, InitCntryOfOrigin, InitAsstQty, IntbTariffCode, InitPreference, InitProducer, InitDocumentation, InitPurchCrtnQty, AptbBuyrCode, InitLastCost, InitLiters, IntbMsdsCode, InitRequireFrt, InitMfrtCode, InitInnerPackQty, InitOuterPackQty, InitBaseStanCost, InitShipTareQty, InitWgItem, IntbPricGrup, IntbCommGrup, InitLastCostDate, InitQtyPerCase, InitRevision, InitCommSaleQty, InitCubes, InitTimeFence, InitSrvcMinChrg, DateUpdtd, TimeUpdtd, dummy FROM inv_item_mast WHERE InitItemNbr = :p0';
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inititemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);
    }

    /**
     * Filter the query on the InitDesc1 column
     *
     * Example usage:
     * <code>
     * $query->filterByInitdesc1('fooValue');   // WHERE InitDesc1 = 'fooValue'
     * $query->filterByInitdesc1('%fooValue%', Criteria::LIKE); // WHERE InitDesc1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initdesc1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitdesc1($initdesc1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initdesc1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITDESC1, $initdesc1, $comparison);
    }

    /**
     * Filter the query on the InitDesc2 column
     *
     * Example usage:
     * <code>
     * $query->filterByInitdesc2('fooValue');   // WHERE InitDesc2 = 'fooValue'
     * $query->filterByInitdesc2('%fooValue%', Criteria::LIKE); // WHERE InitDesc2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initdesc2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitdesc2($initdesc2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initdesc2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITDESC2, $initdesc2, $comparison);
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
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByIntbgrup($intbgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBGRUP, $intbgrup, $comparison);
    }

    /**
     * Filter the query on the InitFormatCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInitformatcode('fooValue');   // WHERE InitFormatCode = 'fooValue'
     * $query->filterByInitformatcode('%fooValue%', Criteria::LIKE); // WHERE InitFormatCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initformatcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitformatcode($initformatcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initformatcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITFORMATCODE, $initformatcode, $comparison);
    }

    /**
     * Filter the query on the InitSplit column
     *
     * Example usage:
     * <code>
     * $query->filterByInitsplit('fooValue');   // WHERE InitSplit = 'fooValue'
     * $query->filterByInitsplit('%fooValue%', Criteria::LIKE); // WHERE InitSplit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initsplit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitsplit($initsplit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initsplit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSPLIT, $initsplit, $comparison);
    }

    /**
     * Filter the query on the InitSherDateCd column
     *
     * Example usage:
     * <code>
     * $query->filterByInitsherdatecd('fooValue');   // WHERE InitSherDateCd = 'fooValue'
     * $query->filterByInitsherdatecd('%fooValue%', Criteria::LIKE); // WHERE InitSherDateCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initsherdatecd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitsherdatecd($initsherdatecd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initsherdatecd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSHERDATECD, $initsherdatecd, $comparison);
    }

    /**
     * Filter the query on the InitCoreYN column
     *
     * Example usage:
     * <code>
     * $query->filterByInitcoreyn('fooValue');   // WHERE InitCoreYN = 'fooValue'
     * $query->filterByInitcoreyn('%fooValue%', Criteria::LIKE); // WHERE InitCoreYN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initcoreyn The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitcoreyn($initcoreyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initcoreyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITCOREYN, $initcoreyn, $comparison);
    }

    /**
     * Filter the query on the IntbUserCode1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbusercode1('fooValue');   // WHERE IntbUserCode1 = 'fooValue'
     * $query->filterByIntbusercode1('%fooValue%', Criteria::LIKE); // WHERE IntbUserCode1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbusercode1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByIntbusercode1($intbusercode1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbusercode1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBUSERCODE1, $intbusercode1, $comparison);
    }

    /**
     * Filter the query on the IntbUserCode2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbusercode2('fooValue');   // WHERE IntbUserCode2 = 'fooValue'
     * $query->filterByIntbusercode2('%fooValue%', Criteria::LIKE); // WHERE IntbUserCode2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbusercode2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByIntbusercode2($intbusercode2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbusercode2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBUSERCODE2, $intbusercode2, $comparison);
    }

    /**
     * Filter the query on the InitType column
     *
     * Example usage:
     * <code>
     * $query->filterByInittype('fooValue');   // WHERE InitType = 'fooValue'
     * $query->filterByInittype('%fooValue%', Criteria::LIKE); // WHERE InitType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inittype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInittype($inittype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inittype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITTYPE, $inittype, $comparison);
    }

    /**
     * Filter the query on the InitTax column
     *
     * Example usage:
     * <code>
     * $query->filterByInittax('fooValue');   // WHERE InitTax = 'fooValue'
     * $query->filterByInittax('%fooValue%', Criteria::LIKE); // WHERE InitTax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inittax The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInittax($inittax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inittax)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITTAX, $inittax, $comparison);
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
     * @param     mixed $initrtlpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitrtlpric($initrtlpric = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITRTLPRIC, $initrtlpric, $comparison);
    }

    /**
     * Filter the query on the InitStatChgd column
     *
     * Example usage:
     * <code>
     * $query->filterByInitstatchgd('fooValue');   // WHERE InitStatChgd = 'fooValue'
     * $query->filterByInitstatchgd('%fooValue%', Criteria::LIKE); // WHERE InitStatChgd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initstatchgd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitstatchgd($initstatchgd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initstatchgd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSTATCHGD, $initstatchgd, $comparison);
    }

    /**
     * Filter the query on the InitSpecItemCd column
     *
     * Example usage:
     * <code>
     * $query->filterByInitspecitemcd('fooValue');   // WHERE InitSpecItemCd = 'fooValue'
     * $query->filterByInitspecitemcd('%fooValue%', Criteria::LIKE); // WHERE InitSpecItemCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initspecitemcd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitspecitemcd($initspecitemcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initspecitemcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSPECITEMCD, $initspecitemcd, $comparison);
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
     * @param     mixed $initwarrdays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitwarrdays($initwarrdays = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITWARRDAYS, $initwarrdays, $comparison);
    }

    /**
     * Filter the query on the IntbUomSale column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuomsale('fooValue');   // WHERE IntbUomSale = 'fooValue'
     * $query->filterByIntbuomsale('%fooValue%', Criteria::LIKE); // WHERE IntbUomSale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbuomsale The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByIntbuomsale($intbuomsale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuomsale)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBUOMSALE, $intbuomsale, $comparison);
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
     * @param     mixed $initwght The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitwght($initwght = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITWGHT, $initwght, $comparison);
    }

    /**
     * Filter the query on the InitBord column
     *
     * Example usage:
     * <code>
     * $query->filterByInitbord('fooValue');   // WHERE InitBord = 'fooValue'
     * $query->filterByInitbord('%fooValue%', Criteria::LIKE); // WHERE InitBord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initbord The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitbord($initbord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initbord)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITBORD, $initbord, $comparison);
    }

    /**
     * Filter the query on the InitBaseItemId column
     *
     * Example usage:
     * <code>
     * $query->filterByInitbaseitemid('fooValue');   // WHERE InitBaseItemId = 'fooValue'
     * $query->filterByInitbaseitemid('%fooValue%', Criteria::LIKE); // WHERE InitBaseItemId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initbaseitemid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitbaseitemid($initbaseitemid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initbaseitemid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITBASEITEMID, $initbaseitemid, $comparison);
    }

    /**
     * Filter the query on the InitSpecificCust column
     *
     * Example usage:
     * <code>
     * $query->filterByInitspecificcust('fooValue');   // WHERE InitSpecificCust = 'fooValue'
     * $query->filterByInitspecificcust('%fooValue%', Criteria::LIKE); // WHERE InitSpecificCust LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initspecificcust The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitspecificcust($initspecificcust = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initspecificcust)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSPECIFICCUST, $initspecificcust, $comparison);
    }

    /**
     * Filter the query on the InitGiveDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByInitgivedisc('fooValue');   // WHERE InitGiveDisc = 'fooValue'
     * $query->filterByInitgivedisc('%fooValue%', Criteria::LIKE); // WHERE InitGiveDisc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initgivedisc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitgivedisc($initgivedisc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initgivedisc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITGIVEDISC, $initgivedisc, $comparison);
    }

    /**
     * Filter the query on the InitAsstCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInitasstcode('fooValue');   // WHERE InitAsstCode = 'fooValue'
     * $query->filterByInitasstcode('%fooValue%', Criteria::LIKE); // WHERE InitAsstCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initasstcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitasstcode($initasstcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initasstcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITASSTCODE, $initasstcode, $comparison);
    }

    /**
     * Filter the query on the InitPricLastDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInitpriclastdate('fooValue');   // WHERE InitPricLastDate = 'fooValue'
     * $query->filterByInitpriclastdate('%fooValue%', Criteria::LIKE); // WHERE InitPricLastDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initpriclastdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitpriclastdate($initpriclastdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initpriclastdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITPRICLASTDATE, $initpriclastdate, $comparison);
    }

    /**
     * Filter the query on the IntbUomPur column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbuompur('fooValue');   // WHERE IntbUomPur = 'fooValue'
     * $query->filterByIntbuompur('%fooValue%', Criteria::LIKE); // WHERE IntbUomPur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbuompur The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByIntbuompur($intbuompur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbuompur)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBUOMPUR, $intbuompur, $comparison);
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
     * @param     mixed $initstancost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitstancost($initstancost = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSTANCOST, $initstancost, $comparison);
    }

    /**
     * Filter the query on the InitStanCostBase column
     *
     * Example usage:
     * <code>
     * $query->filterByInitstancostbase('fooValue');   // WHERE InitStanCostBase = 'fooValue'
     * $query->filterByInitstancostbase('%fooValue%', Criteria::LIKE); // WHERE InitStanCostBase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initstancostbase The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitstancostbase($initstancostbase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initstancostbase)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSTANCOSTBASE, $initstancostbase, $comparison);
    }

    /**
     * Filter the query on the InitStanCostLastDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInitstancostlastdate('fooValue');   // WHERE InitStanCostLastDate = 'fooValue'
     * $query->filterByInitstancostlastdate('%fooValue%', Criteria::LIKE); // WHERE InitStanCostLastDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initstancostlastdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitstancostlastdate($initstancostlastdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initstancostlastdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSTANCOSTLASTDATE, $initstancostlastdate, $comparison);
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
     * @param     mixed $initminmarg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitminmarg($initminmarg = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITMINMARG, $initminmarg, $comparison);
    }

    /**
     * Filter the query on the InitVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByInitvendid('fooValue');   // WHERE InitVendId = 'fooValue'
     * $query->filterByInitvendid('%fooValue%', Criteria::LIKE); // WHERE InitVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initvendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitvendid($initvendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initvendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITVENDID, $initvendid, $comparison);
    }

    /**
     * Filter the query on the InitInspect column
     *
     * Example usage:
     * <code>
     * $query->filterByInitinspect('fooValue');   // WHERE InitInspect = 'fooValue'
     * $query->filterByInitinspect('%fooValue%', Criteria::LIKE); // WHERE InitInspect LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initinspect The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitinspect($initinspect = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initinspect)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITINSPECT, $initinspect, $comparison);
    }

    /**
     * Filter the query on the InitStockCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInitstockcode('fooValue');   // WHERE InitStockCode = 'fooValue'
     * $query->filterByInitstockcode('%fooValue%', Criteria::LIKE); // WHERE InitStockCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initstockcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitstockcode($initstockcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initstockcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSTOCKCODE, $initstockcode, $comparison);
    }

    /**
     * Filter the query on the InitSuprItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInitsupritemnbr('fooValue');   // WHERE InitSuprItemNbr = 'fooValue'
     * $query->filterByInitsupritemnbr('%fooValue%', Criteria::LIKE); // WHERE InitSuprItemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initsupritemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitsupritemnbr($initsupritemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initsupritemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSUPRITEMNBR, $initsupritemnbr, $comparison);
    }

    /**
     * Filter the query on the InitVendShipFrom column
     *
     * Example usage:
     * <code>
     * $query->filterByInitvendshipfrom('fooValue');   // WHERE InitVendShipFrom = 'fooValue'
     * $query->filterByInitvendshipfrom('%fooValue%', Criteria::LIKE); // WHERE InitVendShipFrom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initvendshipfrom The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitvendshipfrom($initvendshipfrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initvendshipfrom)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITVENDSHIPFROM, $initvendshipfrom, $comparison);
    }

    /**
     * Filter the query on the InitCntryOfOrigin column
     *
     * Example usage:
     * <code>
     * $query->filterByInitcntryoforigin('fooValue');   // WHERE InitCntryOfOrigin = 'fooValue'
     * $query->filterByInitcntryoforigin('%fooValue%', Criteria::LIKE); // WHERE InitCntryOfOrigin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initcntryoforigin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitcntryoforigin($initcntryoforigin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initcntryoforigin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITCNTRYOFORIGIN, $initcntryoforigin, $comparison);
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
     * @param     mixed $initasstqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitasstqty($initasstqty = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITASSTQTY, $initasstqty, $comparison);
    }

    /**
     * Filter the query on the IntbTariffCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbtariffcode('fooValue');   // WHERE IntbTariffCode = 'fooValue'
     * $query->filterByIntbtariffcode('%fooValue%', Criteria::LIKE); // WHERE IntbTariffCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbtariffcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByIntbtariffcode($intbtariffcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbtariffcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBTARIFFCODE, $intbtariffcode, $comparison);
    }

    /**
     * Filter the query on the InitPreference column
     *
     * Example usage:
     * <code>
     * $query->filterByInitpreference('fooValue');   // WHERE InitPreference = 'fooValue'
     * $query->filterByInitpreference('%fooValue%', Criteria::LIKE); // WHERE InitPreference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initpreference The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitpreference($initpreference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initpreference)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITPREFERENCE, $initpreference, $comparison);
    }

    /**
     * Filter the query on the InitProducer column
     *
     * Example usage:
     * <code>
     * $query->filterByInitproducer('fooValue');   // WHERE InitProducer = 'fooValue'
     * $query->filterByInitproducer('%fooValue%', Criteria::LIKE); // WHERE InitProducer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initproducer The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitproducer($initproducer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initproducer)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITPRODUCER, $initproducer, $comparison);
    }

    /**
     * Filter the query on the InitDocumentation column
     *
     * Example usage:
     * <code>
     * $query->filterByInitdocumentation('fooValue');   // WHERE InitDocumentation = 'fooValue'
     * $query->filterByInitdocumentation('%fooValue%', Criteria::LIKE); // WHERE InitDocumentation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initdocumentation The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitdocumentation($initdocumentation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initdocumentation)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITDOCUMENTATION, $initdocumentation, $comparison);
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
     * @param     mixed $initpurchcrtnqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitpurchcrtnqty($initpurchcrtnqty = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITPURCHCRTNQTY, $initpurchcrtnqty, $comparison);
    }

    /**
     * Filter the query on the AptbBuyrCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAptbbuyrcode('fooValue');   // WHERE AptbBuyrCode = 'fooValue'
     * $query->filterByAptbbuyrcode('%fooValue%', Criteria::LIKE); // WHERE AptbBuyrCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aptbbuyrcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByAptbbuyrcode($aptbbuyrcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aptbbuyrcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_APTBBUYRCODE, $aptbbuyrcode, $comparison);
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
     * @param     mixed $initlastcost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitlastcost($initlastcost = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITLASTCOST, $initlastcost, $comparison);
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
     * @param     mixed $initliters The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitliters($initliters = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITLITERS, $initliters, $comparison);
    }

    /**
     * Filter the query on the IntbMsdsCode column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbmsdscode('fooValue');   // WHERE IntbMsdsCode = 'fooValue'
     * $query->filterByIntbmsdscode('%fooValue%', Criteria::LIKE); // WHERE IntbMsdsCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbmsdscode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByIntbmsdscode($intbmsdscode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbmsdscode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBMSDSCODE, $intbmsdscode, $comparison);
    }

    /**
     * Filter the query on the InitRequireFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByInitrequirefrt('fooValue');   // WHERE InitRequireFrt = 'fooValue'
     * $query->filterByInitrequirefrt('%fooValue%', Criteria::LIKE); // WHERE InitRequireFrt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initrequirefrt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitrequirefrt($initrequirefrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initrequirefrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITREQUIREFRT, $initrequirefrt, $comparison);
    }

    /**
     * Filter the query on the InitMfrtCode column
     *
     * Example usage:
     * <code>
     * $query->filterByInitmfrtcode('fooValue');   // WHERE InitMfrtCode = 'fooValue'
     * $query->filterByInitmfrtcode('%fooValue%', Criteria::LIKE); // WHERE InitMfrtCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initmfrtcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitmfrtcode($initmfrtcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initmfrtcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITMFRTCODE, $initmfrtcode, $comparison);
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
     * @param     mixed $initinnerpackqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitinnerpackqty($initinnerpackqty = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITINNERPACKQTY, $initinnerpackqty, $comparison);
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
     * @param     mixed $initouterpackqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitouterpackqty($initouterpackqty = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITOUTERPACKQTY, $initouterpackqty, $comparison);
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
     * @param     mixed $initbasestancost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitbasestancost($initbasestancost = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITBASESTANCOST, $initbasestancost, $comparison);
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
     * @param     mixed $initshiptareqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitshiptareqty($initshiptareqty = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSHIPTAREQTY, $initshiptareqty, $comparison);
    }

    /**
     * Filter the query on the InitWgItem column
     *
     * Example usage:
     * <code>
     * $query->filterByInitwgitem('fooValue');   // WHERE InitWgItem = 'fooValue'
     * $query->filterByInitwgitem('%fooValue%', Criteria::LIKE); // WHERE InitWgItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initwgitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitwgitem($initwgitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initwgitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITWGITEM, $initwgitem, $comparison);
    }

    /**
     * Filter the query on the IntbPricGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbpricgrup('fooValue');   // WHERE IntbPricGrup = 'fooValue'
     * $query->filterByIntbpricgrup('%fooValue%', Criteria::LIKE); // WHERE IntbPricGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbpricgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByIntbpricgrup($intbpricgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbpricgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBPRICGRUP, $intbpricgrup, $comparison);
    }

    /**
     * Filter the query on the IntbCommGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbcommgrup('fooValue');   // WHERE IntbCommGrup = 'fooValue'
     * $query->filterByIntbcommgrup('%fooValue%', Criteria::LIKE); // WHERE IntbCommGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbcommgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByIntbcommgrup($intbcommgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbcommgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INTBCOMMGRUP, $intbcommgrup, $comparison);
    }

    /**
     * Filter the query on the InitLastCostDate column
     *
     * Example usage:
     * <code>
     * $query->filterByInitlastcostdate('fooValue');   // WHERE InitLastCostDate = 'fooValue'
     * $query->filterByInitlastcostdate('%fooValue%', Criteria::LIKE); // WHERE InitLastCostDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initlastcostdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitlastcostdate($initlastcostdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initlastcostdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITLASTCOSTDATE, $initlastcostdate, $comparison);
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
     * @param     mixed $initqtypercase The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitqtypercase($initqtypercase = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITQTYPERCASE, $initqtypercase, $comparison);
    }

    /**
     * Filter the query on the InitRevision column
     *
     * Example usage:
     * <code>
     * $query->filterByInitrevision('fooValue');   // WHERE InitRevision = 'fooValue'
     * $query->filterByInitrevision('%fooValue%', Criteria::LIKE); // WHERE InitRevision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initrevision The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitrevision($initrevision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initrevision)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITREVISION, $initrevision, $comparison);
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
     * @param     mixed $initcommsaleqty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitcommsaleqty($initcommsaleqty = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITCOMMSALEQTY, $initcommsaleqty, $comparison);
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
     * @param     mixed $initcubes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitcubes($initcubes = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITCUBES, $initcubes, $comparison);
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
     * @param     mixed $inittimefence The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInittimefence($inittimefence = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITTIMEFENCE, $inittimefence, $comparison);
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
     * @param     mixed $initsrvcminchrg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInitsrvcminchrg($initsrvcminchrg = null, $comparison = null)
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

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_INITSRVCMINCHRG, $initsrvcminchrg, $comparison);
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
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ItemMasterItemTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \UnitofMeasureSale object
     *
     * @param \UnitofMeasureSale|ObjectCollection $unitofMeasureSale The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByUnitofMeasureSale($unitofMeasureSale, $comparison = null)
    {
        if ($unitofMeasureSale instanceof \UnitofMeasureSale) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBUOMSALE, $unitofMeasureSale->getIntbuomsale(), $comparison);
        } elseif ($unitofMeasureSale instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBUOMSALE, $unitofMeasureSale->toKeyValue('PrimaryKey', 'Intbuomsale'), $comparison);
        } else {
            throw new PropelException('filterByUnitofMeasureSale() only accepts arguments of type \UnitofMeasureSale or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UnitofMeasureSale relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinUnitofMeasureSale($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \UnitofMeasurePurchase object
     *
     * @param \UnitofMeasurePurchase|ObjectCollection $unitofMeasurePurchase The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByUnitofMeasurePurchase($unitofMeasurePurchase, $comparison = null)
    {
        if ($unitofMeasurePurchase instanceof \UnitofMeasurePurchase) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBUOMPUR, $unitofMeasurePurchase->getIntbuompur(), $comparison);
        } elseif ($unitofMeasurePurchase instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBUOMPUR, $unitofMeasurePurchase->toKeyValue('PrimaryKey', 'Intbuompur'), $comparison);
        } else {
            throw new PropelException('filterByUnitofMeasurePurchase() only accepts arguments of type \UnitofMeasurePurchase or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UnitofMeasurePurchase relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinUnitofMeasurePurchase($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \InvGroupCode object
     *
     * @param \InvGroupCode|ObjectCollection $invGroupCode The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInvGroupCode($invGroupCode, $comparison = null)
    {
        if ($invGroupCode instanceof \InvGroupCode) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBGRUP, $invGroupCode->getIntbgrup(), $comparison);
        } elseif ($invGroupCode instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBGRUP, $invGroupCode->toKeyValue('PrimaryKey', 'Intbgrup'), $comparison);
        } else {
            throw new PropelException('filterByInvGroupCode() only accepts arguments of type \InvGroupCode or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvGroupCode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinInvGroupCode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \InvPriceCode object
     *
     * @param \InvPriceCode|ObjectCollection $invPriceCode The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInvPriceCode($invPriceCode, $comparison = null)
    {
        if ($invPriceCode instanceof \InvPriceCode) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBPRICGRUP, $invPriceCode->getIntbpricgrup(), $comparison);
        } elseif ($invPriceCode instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBPRICGRUP, $invPriceCode->toKeyValue('PrimaryKey', 'Intbpricgrup'), $comparison);
        } else {
            throw new PropelException('filterByInvPriceCode() only accepts arguments of type \InvPriceCode or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvPriceCode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinInvPriceCode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \InvCommissionCode object
     *
     * @param \InvCommissionCode|ObjectCollection $invCommissionCode The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByInvCommissionCode($invCommissionCode, $comparison = null)
    {
        if ($invCommissionCode instanceof \InvCommissionCode) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBCOMMGRUP, $invCommissionCode->getIntbcommgrup(), $comparison);
        } elseif ($invCommissionCode instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INTBCOMMGRUP, $invCommissionCode->toKeyValue('PrimaryKey', 'Intbcommgrup'), $comparison);
        } else {
            throw new PropelException('filterByInvCommissionCode() only accepts arguments of type \InvCommissionCode or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvCommissionCode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinInvCommissionCode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ItemPricing object
     *
     * @param \ItemPricing|ObjectCollection $itemPricing The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByItemPricing($itemPricing, $comparison = null)
    {
        if ($itemPricing instanceof \ItemPricing) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemPricing->getInititemnbr(), $comparison);
        } elseif ($itemPricing instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemPricing->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);
        } else {
            throw new PropelException('filterByItemPricing() only accepts arguments of type \ItemPricing or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemPricing relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinItemPricing($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ItemXrefCustomer object
     *
     * @param \ItemXrefCustomer|ObjectCollection $itemXrefCustomer the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByItemXrefCustomer($itemXrefCustomer, $comparison = null)
    {
        if ($itemXrefCustomer instanceof \ItemXrefCustomer) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefCustomer->getInititemnbr(), $comparison);
        } elseif ($itemXrefCustomer instanceof ObjectCollection) {
            return $this
                ->useItemXrefCustomerQuery()
                ->filterByPrimaryKeys($itemXrefCustomer->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemXrefCustomer() only accepts arguments of type \ItemXrefCustomer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefCustomer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinItemXrefCustomer($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ItemAddonItem object
     *
     * @param \ItemAddonItem|ObjectCollection $itemAddonItem the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByItemAddonItemRelatedByInititemnbr($itemAddonItem, $comparison = null)
    {
        if ($itemAddonItem instanceof \ItemAddonItem) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemAddonItem->getInititemnbr(), $comparison);
        } elseif ($itemAddonItem instanceof ObjectCollection) {
            return $this
                ->useItemAddonItemRelatedByInititemnbrQuery()
                ->filterByPrimaryKeys($itemAddonItem->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemAddonItemRelatedByInititemnbr() only accepts arguments of type \ItemAddonItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemAddonItemRelatedByInititemnbr relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinItemAddonItemRelatedByInititemnbr($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ItemAddonItem object
     *
     * @param \ItemAddonItem|ObjectCollection $itemAddonItem the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByItemAddonItemRelatedByAdonadditemnbr($itemAddonItem, $comparison = null)
    {
        if ($itemAddonItem instanceof \ItemAddonItem) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemAddonItem->getAdonadditemnbr(), $comparison);
        } elseif ($itemAddonItem instanceof ObjectCollection) {
            return $this
                ->useItemAddonItemRelatedByAdonadditemnbrQuery()
                ->filterByPrimaryKeys($itemAddonItem->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemAddonItemRelatedByAdonadditemnbr() only accepts arguments of type \ItemAddonItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemAddonItemRelatedByAdonadditemnbr relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinItemAddonItemRelatedByAdonadditemnbr($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ItemSubstitute object
     *
     * @param \ItemSubstitute|ObjectCollection $itemSubstitute the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByItemSubstituteRelatedByInititemnbr($itemSubstitute, $comparison = null)
    {
        if ($itemSubstitute instanceof \ItemSubstitute) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemSubstitute->getInititemnbr(), $comparison);
        } elseif ($itemSubstitute instanceof ObjectCollection) {
            return $this
                ->useItemSubstituteRelatedByInititemnbrQuery()
                ->filterByPrimaryKeys($itemSubstitute->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemSubstituteRelatedByInititemnbr() only accepts arguments of type \ItemSubstitute or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemSubstituteRelatedByInititemnbr relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinItemSubstituteRelatedByInititemnbr($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ItemSubstitute object
     *
     * @param \ItemSubstitute|ObjectCollection $itemSubstitute the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByItemSubstituteRelatedByInsisubitemnbr($itemSubstitute, $comparison = null)
    {
        if ($itemSubstitute instanceof \ItemSubstitute) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemSubstitute->getInsisubitemnbr(), $comparison);
        } elseif ($itemSubstitute instanceof ObjectCollection) {
            return $this
                ->useItemSubstituteRelatedByInsisubitemnbrQuery()
                ->filterByPrimaryKeys($itemSubstitute->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemSubstituteRelatedByInsisubitemnbr() only accepts arguments of type \ItemSubstitute or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemSubstituteRelatedByInsisubitemnbr relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinItemSubstituteRelatedByInsisubitemnbr($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ItemXrefManufacturer object
     *
     * @param \ItemXrefManufacturer|ObjectCollection $itemXrefManufacturer the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByItemXrefManufacturer($itemXrefManufacturer, $comparison = null)
    {
        if ($itemXrefManufacturer instanceof \ItemXrefManufacturer) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefManufacturer->getInititemnbr(), $comparison);
        } elseif ($itemXrefManufacturer instanceof ObjectCollection) {
            return $this
                ->useItemXrefManufacturerQuery()
                ->filterByPrimaryKeys($itemXrefManufacturer->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemXrefManufacturer() only accepts arguments of type \ItemXrefManufacturer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefManufacturer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinItemXrefManufacturer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ItemXrefCustomerNote object
     *
     * @param \ItemXrefCustomerNote|ObjectCollection $itemXrefCustomerNote the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByItemXrefCustomerNote($itemXrefCustomerNote, $comparison = null)
    {
        if ($itemXrefCustomerNote instanceof \ItemXrefCustomerNote) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefCustomerNote->getInititemnbr(), $comparison);
        } elseif ($itemXrefCustomerNote instanceof ObjectCollection) {
            return $this
                ->useItemXrefCustomerNoteQuery()
                ->filterByPrimaryKeys($itemXrefCustomerNote->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemXrefCustomerNote() only accepts arguments of type \ItemXrefCustomerNote or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefCustomerNote relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinItemXrefCustomerNote($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ItemXrefVendorNoteDetail object
     *
     * @param \ItemXrefVendorNoteDetail|ObjectCollection $itemXrefVendorNoteDetail the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByItemXrefVendorNoteDetail($itemXrefVendorNoteDetail, $comparison = null)
    {
        if ($itemXrefVendorNoteDetail instanceof \ItemXrefVendorNoteDetail) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefVendorNoteDetail->getInitItemNbr(), $comparison);
        } elseif ($itemXrefVendorNoteDetail instanceof ObjectCollection) {
            return $this
                ->useItemXrefVendorNoteDetailQuery()
                ->filterByPrimaryKeys($itemXrefVendorNoteDetail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemXrefVendorNoteDetail() only accepts arguments of type \ItemXrefVendorNoteDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefVendorNoteDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinItemXrefVendorNoteDetail($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ItemXrefVendorNoteInternal object
     *
     * @param \ItemXrefVendorNoteInternal|ObjectCollection $itemXrefVendorNoteInternal the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByItemXrefVendorNoteInternal($itemXrefVendorNoteInternal, $comparison = null)
    {
        if ($itemXrefVendorNoteInternal instanceof \ItemXrefVendorNoteInternal) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefVendorNoteInternal->getInitItemNbr(), $comparison);
        } elseif ($itemXrefVendorNoteInternal instanceof ObjectCollection) {
            return $this
                ->useItemXrefVendorNoteInternalQuery()
                ->filterByPrimaryKeys($itemXrefVendorNoteInternal->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemXrefVendorNoteInternal() only accepts arguments of type \ItemXrefVendorNoteInternal or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefVendorNoteInternal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinItemXrefVendorNoteInternal($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \BookingDetail object
     *
     * @param \BookingDetail|ObjectCollection $bookingDetail the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByBookingDetail($bookingDetail, $comparison = null)
    {
        if ($bookingDetail instanceof \BookingDetail) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $bookingDetail->getInititemnbr(), $comparison);
        } elseif ($bookingDetail instanceof ObjectCollection) {
            return $this
                ->useBookingDetailQuery()
                ->filterByPrimaryKeys($bookingDetail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBookingDetail() only accepts arguments of type \BookingDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BookingDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinBookingDetail($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \SalesHistoryLotserial object
     *
     * @param \SalesHistoryLotserial|ObjectCollection $salesHistoryLotserial the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterBySalesHistoryLotserial($salesHistoryLotserial, $comparison = null)
    {
        if ($salesHistoryLotserial instanceof \SalesHistoryLotserial) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $salesHistoryLotserial->getInititemnbr(), $comparison);
        } elseif ($salesHistoryLotserial instanceof ObjectCollection) {
            return $this
                ->useSalesHistoryLotserialQuery()
                ->filterByPrimaryKeys($salesHistoryLotserial->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesHistoryLotserial() only accepts arguments of type \SalesHistoryLotserial or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistoryLotserial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinSalesHistoryLotserial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ItemXrefUpc object
     *
     * @param \ItemXrefUpc|ObjectCollection $itemXrefUpc the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByItemXrefUpc($itemXrefUpc, $comparison = null)
    {
        if ($itemXrefUpc instanceof \ItemXrefUpc) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefUpc->getInititemnbr(), $comparison);
        } elseif ($itemXrefUpc instanceof ObjectCollection) {
            return $this
                ->useItemXrefUpcQuery()
                ->filterByPrimaryKeys($itemXrefUpc->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemXrefUpc() only accepts arguments of type \ItemXrefUpc or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefUpc relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinItemXrefUpc($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ItemXrefVendor object
     *
     * @param \ItemXrefVendor|ObjectCollection $itemXrefVendor the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function filterByItemXrefVendor($itemXrefVendor, $comparison = null)
    {
        if ($itemXrefVendor instanceof \ItemXrefVendor) {
            return $this
                ->addUsingAlias(ItemMasterItemTableMap::COL_INITITEMNBR, $itemXrefVendor->getInititemnbr(), $comparison);
        } elseif ($itemXrefVendor instanceof ObjectCollection) {
            return $this
                ->useItemXrefVendorQuery()
                ->filterByPrimaryKeys($itemXrefVendor->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemXrefVendor() only accepts arguments of type \ItemXrefVendor or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefVendor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
     */
    public function joinItemXrefVendor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Exclude object from result
     *
     * @param   ChildItemMasterItem $itemMasterItem Object to remove from the list of results
     *
     * @return $this|ChildItemMasterItemQuery The current query, for fluid interface
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
    public function doDeleteAll(ConnectionInterface $con = null)
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
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
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

} // ItemMasterItemQuery
