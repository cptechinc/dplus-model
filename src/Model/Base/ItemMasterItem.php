<?php

namespace Base;

use \BomComponent as ChildBomComponent;
use \BomComponentQuery as ChildBomComponentQuery;
use \BomItem as ChildBomItem;
use \BomItemQuery as ChildBomItemQuery;
use \BookingDetail as ChildBookingDetail;
use \BookingDetailQuery as ChildBookingDetailQuery;
use \InvCommissionCode as ChildInvCommissionCode;
use \InvCommissionCodeQuery as ChildInvCommissionCodeQuery;
use \InvGroupCode as ChildInvGroupCode;
use \InvGroupCodeQuery as ChildInvGroupCodeQuery;
use \InvHazmatItem as ChildInvHazmatItem;
use \InvHazmatItemQuery as ChildInvHazmatItemQuery;
use \InvItem2Item as ChildInvItem2Item;
use \InvItem2ItemQuery as ChildInvItem2ItemQuery;
use \InvKit as ChildInvKit;
use \InvKitComponent as ChildInvKitComponent;
use \InvKitComponentQuery as ChildInvKitComponentQuery;
use \InvKitQuery as ChildInvKitQuery;
use \InvLotMaster as ChildInvLotMaster;
use \InvLotMasterQuery as ChildInvLotMasterQuery;
use \InvLotTag as ChildInvLotTag;
use \InvLotTagQuery as ChildInvLotTagQuery;
use \InvOptCodeNote as ChildInvOptCodeNote;
use \InvOptCodeNoteQuery as ChildInvOptCodeNoteQuery;
use \InvPallet as ChildInvPallet;
use \InvPalletQuery as ChildInvPalletQuery;
use \InvPriceCode as ChildInvPriceCode;
use \InvPriceCodeQuery as ChildInvPriceCodeQuery;
use \InvSerialMaster as ChildInvSerialMaster;
use \InvSerialMasterQuery as ChildInvSerialMasterQuery;
use \InvSerialWarranty as ChildInvSerialWarranty;
use \InvSerialWarrantyQuery as ChildInvSerialWarrantyQuery;
use \InvTransferDetail as ChildInvTransferDetail;
use \InvTransferDetailQuery as ChildInvTransferDetailQuery;
use \InvTransferLotserial as ChildInvTransferLotserial;
use \InvTransferLotserialQuery as ChildInvTransferLotserialQuery;
use \InvTransferPickedLotserial as ChildInvTransferPickedLotserial;
use \InvTransferPickedLotserialQuery as ChildInvTransferPickedLotserialQuery;
use \InvTransferPreAllocatedLotserial as ChildInvTransferPreAllocatedLotserial;
use \InvTransferPreAllocatedLotserialQuery as ChildInvTransferPreAllocatedLotserialQuery;
use \InvWhseItemBin as ChildInvWhseItemBin;
use \InvWhseItemBinQuery as ChildInvWhseItemBinQuery;
use \InvWhseLot as ChildInvWhseLot;
use \InvWhseLotQuery as ChildInvWhseLotQuery;
use \ItemAddonItem as ChildItemAddonItem;
use \ItemAddonItemQuery as ChildItemAddonItemQuery;
use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \ItemPricing as ChildItemPricing;
use \ItemPricingDiscount as ChildItemPricingDiscount;
use \ItemPricingDiscountQuery as ChildItemPricingDiscountQuery;
use \ItemPricingQuery as ChildItemPricingQuery;
use \ItemSubstitute as ChildItemSubstitute;
use \ItemSubstituteQuery as ChildItemSubstituteQuery;
use \ItemXrefCustomer as ChildItemXrefCustomer;
use \ItemXrefCustomerNote as ChildItemXrefCustomerNote;
use \ItemXrefCustomerNoteQuery as ChildItemXrefCustomerNoteQuery;
use \ItemXrefCustomerQuery as ChildItemXrefCustomerQuery;
use \ItemXrefKey as ChildItemXrefKey;
use \ItemXrefKeyQuery as ChildItemXrefKeyQuery;
use \ItemXrefManufacturer as ChildItemXrefManufacturer;
use \ItemXrefManufacturerQuery as ChildItemXrefManufacturerQuery;
use \ItemXrefUpc as ChildItemXrefUpc;
use \ItemXrefUpcQuery as ChildItemXrefUpcQuery;
use \ItemXrefVendor as ChildItemXrefVendor;
use \ItemXrefVendorNoteDetail as ChildItemXrefVendorNoteDetail;
use \ItemXrefVendorNoteDetailQuery as ChildItemXrefVendorNoteDetailQuery;
use \ItemXrefVendorNoteInternal as ChildItemXrefVendorNoteInternal;
use \ItemXrefVendorNoteInternalQuery as ChildItemXrefVendorNoteInternalQuery;
use \ItemXrefVendorQuery as ChildItemXrefVendorQuery;
use \ItmDimension as ChildItmDimension;
use \ItmDimensionQuery as ChildItmDimensionQuery;
use \PurchaseOrderDetail as ChildPurchaseOrderDetail;
use \PurchaseOrderDetailLotReceiving as ChildPurchaseOrderDetailLotReceiving;
use \PurchaseOrderDetailLotReceivingQuery as ChildPurchaseOrderDetailLotReceivingQuery;
use \PurchaseOrderDetailQuery as ChildPurchaseOrderDetailQuery;
use \PurchaseOrderDetailReceipt as ChildPurchaseOrderDetailReceipt;
use \PurchaseOrderDetailReceiptQuery as ChildPurchaseOrderDetailReceiptQuery;
use \PurchaseOrderDetailReceiving as ChildPurchaseOrderDetailReceiving;
use \PurchaseOrderDetailReceivingQuery as ChildPurchaseOrderDetailReceivingQuery;
use \SalesHistoryDetail as ChildSalesHistoryDetail;
use \SalesHistoryDetailQuery as ChildSalesHistoryDetailQuery;
use \SalesHistoryLotserial as ChildSalesHistoryLotserial;
use \SalesHistoryLotserialQuery as ChildSalesHistoryLotserialQuery;
use \SalesOrderDetail as ChildSalesOrderDetail;
use \SalesOrderDetailQuery as ChildSalesOrderDetailQuery;
use \SalesOrderLotserial as ChildSalesOrderLotserial;
use \SalesOrderLotserialQuery as ChildSalesOrderLotserialQuery;
use \SoAllocatedLotserial as ChildSoAllocatedLotserial;
use \SoAllocatedLotserialQuery as ChildSoAllocatedLotserialQuery;
use \SoPickedLotserial as ChildSoPickedLotserial;
use \SoPickedLotserialQuery as ChildSoPickedLotserialQuery;
use \SoStandingOrderDetail as ChildSoStandingOrderDetail;
use \SoStandingOrderDetailQuery as ChildSoStandingOrderDetailQuery;
use \UnitofMeasurePurchase as ChildUnitofMeasurePurchase;
use \UnitofMeasurePurchaseQuery as ChildUnitofMeasurePurchaseQuery;
use \UnitofMeasureSale as ChildUnitofMeasureSale;
use \UnitofMeasureSaleQuery as ChildUnitofMeasureSaleQuery;
use \WarehouseInventory as ChildWarehouseInventory;
use \WarehouseInventoryQuery as ChildWarehouseInventoryQuery;
use \Exception;
use \PDO;
use Map\BomComponentTableMap;
use Map\BookingDetailTableMap;
use Map\InvItem2ItemTableMap;
use Map\InvKitComponentTableMap;
use Map\InvLotMasterTableMap;
use Map\InvLotTagTableMap;
use Map\InvOptCodeNoteTableMap;
use Map\InvPalletTableMap;
use Map\InvSerialMasterTableMap;
use Map\InvSerialWarrantyTableMap;
use Map\InvTransferDetailTableMap;
use Map\InvTransferLotserialTableMap;
use Map\InvTransferPickedLotserialTableMap;
use Map\InvTransferPreAllocatedLotserialTableMap;
use Map\InvWhseItemBinTableMap;
use Map\InvWhseLotTableMap;
use Map\ItemAddonItemTableMap;
use Map\ItemMasterItemTableMap;
use Map\ItemPricingDiscountTableMap;
use Map\ItemSubstituteTableMap;
use Map\ItemXrefCustomerNoteTableMap;
use Map\ItemXrefCustomerTableMap;
use Map\ItemXrefKeyTableMap;
use Map\ItemXrefManufacturerTableMap;
use Map\ItemXrefUpcTableMap;
use Map\ItemXrefVendorNoteDetailTableMap;
use Map\ItemXrefVendorNoteInternalTableMap;
use Map\ItemXrefVendorTableMap;
use Map\PurchaseOrderDetailLotReceivingTableMap;
use Map\PurchaseOrderDetailReceiptTableMap;
use Map\PurchaseOrderDetailReceivingTableMap;
use Map\PurchaseOrderDetailTableMap;
use Map\SalesHistoryDetailTableMap;
use Map\SalesHistoryLotserialTableMap;
use Map\SalesOrderDetailTableMap;
use Map\SalesOrderLotserialTableMap;
use Map\SoAllocatedLotserialTableMap;
use Map\SoPickedLotserialTableMap;
use Map\SoStandingOrderDetailTableMap;
use Map\WarehouseInventoryTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

/**
 * Base class that represents a row from the 'inv_item_mast' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ItemMasterItem implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ItemMasterItemTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var boolean
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var boolean
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = array();

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = array();

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the initdesc1 field.
     *
     * @var        string
     */
    protected $initdesc1;

    /**
     * The value for the initdesc2 field.
     *
     * @var        string
     */
    protected $initdesc2;

    /**
     * The value for the intbgrup field.
     *
     * @var        string
     */
    protected $intbgrup;

    /**
     * The value for the initformatcode field.
     *
     * @var        string
     */
    protected $initformatcode;

    /**
     * The value for the initsplit field.
     *
     * @var        string
     */
    protected $initsplit;

    /**
     * The value for the initsherdatecd field.
     *
     * @var        string
     */
    protected $initsherdatecd;

    /**
     * The value for the initcoreyn field.
     *
     * @var        string
     */
    protected $initcoreyn;

    /**
     * The value for the intbusercode1 field.
     *
     * @var        string
     */
    protected $intbusercode1;

    /**
     * The value for the intbusercode2 field.
     *
     * @var        string
     */
    protected $intbusercode2;

    /**
     * The value for the inittype field.
     *
     * @var        string
     */
    protected $inittype;

    /**
     * The value for the inittax field.
     *
     * @var        string
     */
    protected $inittax;

    /**
     * The value for the initrtlpric field.
     *
     * @var        string
     */
    protected $initrtlpric;

    /**
     * The value for the initstatchgd field.
     *
     * @var        string
     */
    protected $initstatchgd;

    /**
     * The value for the initspecitemcd field.
     *
     * @var        string
     */
    protected $initspecitemcd;

    /**
     * The value for the initwarrdays field.
     *
     * @var        int
     */
    protected $initwarrdays;

    /**
     * The value for the intbuomsale field.
     *
     * @var        string
     */
    protected $intbuomsale;

    /**
     * The value for the initwght field.
     *
     * @var        string
     */
    protected $initwght;

    /**
     * The value for the initbord field.
     *
     * @var        string
     */
    protected $initbord;

    /**
     * The value for the initbaseitemid field.
     *
     * @var        string
     */
    protected $initbaseitemid;

    /**
     * The value for the initspecificcust field.
     *
     * @var        string
     */
    protected $initspecificcust;

    /**
     * The value for the initgivedisc field.
     *
     * @var        string
     */
    protected $initgivedisc;

    /**
     * The value for the initasstcode field.
     *
     * @var        string
     */
    protected $initasstcode;

    /**
     * The value for the initpriclastdate field.
     *
     * @var        string
     */
    protected $initpriclastdate;

    /**
     * The value for the intbuompur field.
     *
     * @var        string
     */
    protected $intbuompur;

    /**
     * The value for the initstancost field.
     *
     * @var        string
     */
    protected $initstancost;

    /**
     * The value for the initstancostbase field.
     *
     * @var        string
     */
    protected $initstancostbase;

    /**
     * The value for the initstancostlastdate field.
     *
     * @var        string
     */
    protected $initstancostlastdate;

    /**
     * The value for the initminmarg field.
     *
     * @var        string
     */
    protected $initminmarg;

    /**
     * The value for the initvendid field.
     *
     * @var        string
     */
    protected $initvendid;

    /**
     * The value for the initinspect field.
     *
     * @var        string
     */
    protected $initinspect;

    /**
     * The value for the initstockcode field.
     *
     * @var        string
     */
    protected $initstockcode;

    /**
     * The value for the initsupritemnbr field.
     *
     * @var        string
     */
    protected $initsupritemnbr;

    /**
     * The value for the initvendshipfrom field.
     *
     * @var        string
     */
    protected $initvendshipfrom;

    /**
     * The value for the initcntryoforigin field.
     *
     * @var        string
     */
    protected $initcntryoforigin;

    /**
     * The value for the initasstqty field.
     *
     * @var        string
     */
    protected $initasstqty;

    /**
     * The value for the intbtariffcode field.
     *
     * @var        string
     */
    protected $intbtariffcode;

    /**
     * The value for the initpreference field.
     *
     * @var        string
     */
    protected $initpreference;

    /**
     * The value for the initproducer field.
     *
     * @var        string
     */
    protected $initproducer;

    /**
     * The value for the initdocumentation field.
     *
     * @var        string
     */
    protected $initdocumentation;

    /**
     * The value for the initpurchcrtnqty field.
     *
     * @var        int
     */
    protected $initpurchcrtnqty;

    /**
     * The value for the aptbbuyrcode field.
     *
     * @var        string
     */
    protected $aptbbuyrcode;

    /**
     * The value for the initlastcost field.
     *
     * @var        string
     */
    protected $initlastcost;

    /**
     * The value for the initliters field.
     *
     * @var        string
     */
    protected $initliters;

    /**
     * The value for the intbmsdscode field.
     *
     * @var        string
     */
    protected $intbmsdscode;

    /**
     * The value for the initrequirefrt field.
     *
     * @var        string
     */
    protected $initrequirefrt;

    /**
     * The value for the initmfrtcode field.
     *
     * @var        string
     */
    protected $initmfrtcode;

    /**
     * The value for the initinnerpackqty field.
     *
     * @var        int
     */
    protected $initinnerpackqty;

    /**
     * The value for the initouterpackqty field.
     *
     * @var        int
     */
    protected $initouterpackqty;

    /**
     * The value for the initbasestancost field.
     *
     * @var        string
     */
    protected $initbasestancost;

    /**
     * The value for the initshiptareqty field.
     *
     * @var        int
     */
    protected $initshiptareqty;

    /**
     * The value for the initwgitem field.
     *
     * @var        string
     */
    protected $initwgitem;

    /**
     * The value for the intbpricgrup field.
     *
     * @var        string
     */
    protected $intbpricgrup;

    /**
     * The value for the intbcommgrup field.
     *
     * @var        string
     */
    protected $intbcommgrup;

    /**
     * The value for the initlastcostdate field.
     *
     * @var        string
     */
    protected $initlastcostdate;

    /**
     * The value for the initqtypercase field.
     *
     * @var        int
     */
    protected $initqtypercase;

    /**
     * The value for the initrevision field.
     *
     * @var        string
     */
    protected $initrevision;

    /**
     * The value for the initcommsaleqty field.
     *
     * @var        int
     */
    protected $initcommsaleqty;

    /**
     * The value for the initcubes field.
     *
     * @var        string
     */
    protected $initcubes;

    /**
     * The value for the inittimefence field.
     *
     * @var        int
     */
    protected $inittimefence;

    /**
     * The value for the initsrvcminchrg field.
     *
     * @var        string
     */
    protected $initsrvcminchrg;

    /**
     * The value for the initminmargbase field.
     *
     * @var        string
     */
    protected $initminmargbase;

    /**
     * The value for the dateupdtd field.
     *
     * @var        string
     */
    protected $dateupdtd;

    /**
     * The value for the timeupdtd field.
     *
     * @var        string
     */
    protected $timeupdtd;

    /**
     * The value for the dummy field.
     *
     * @var        string
     */
    protected $dummy;

    /**
     * @var        ChildUnitofMeasureSale
     */
    protected $aUnitofMeasureSale;

    /**
     * @var        ChildUnitofMeasurePurchase
     */
    protected $aUnitofMeasurePurchase;

    /**
     * @var        ChildInvGroupCode
     */
    protected $aInvGroupCode;

    /**
     * @var        ChildInvPriceCode
     */
    protected $aInvPriceCode;

    /**
     * @var        ChildInvCommissionCode
     */
    protected $aInvCommissionCode;

    /**
     * @var        ChildItemPricing
     */
    protected $aItemPricing;

    /**
     * @var        ObjectCollection|ChildItemXrefCustomer[] Collection to store aggregation of ChildItemXrefCustomer objects.
     */
    protected $collItemXrefCustomers;
    protected $collItemXrefCustomersPartial;

    /**
     * @var        ObjectCollection|ChildInvWhseItemBin[] Collection to store aggregation of ChildInvWhseItemBin objects.
     */
    protected $collInvWhseItemBins;
    protected $collInvWhseItemBinsPartial;

    /**
     * @var        ObjectCollection|ChildItemAddonItem[] Collection to store aggregation of ChildItemAddonItem objects.
     */
    protected $collItemAddonItemsRelatedByInititemnbr;
    protected $collItemAddonItemsRelatedByInititemnbrPartial;

    /**
     * @var        ObjectCollection|ChildItemAddonItem[] Collection to store aggregation of ChildItemAddonItem objects.
     */
    protected $collItemAddonItemsRelatedByAdonadditemnbr;
    protected $collItemAddonItemsRelatedByAdonadditemnbrPartial;

    /**
     * @var        ChildItmDimension one-to-one related ChildItmDimension object
     */
    protected $singleItmDimension;

    /**
     * @var        ChildInvHazmatItem one-to-one related ChildInvHazmatItem object
     */
    protected $singleInvHazmatItem;

    /**
     * @var        ObjectCollection|ChildInvWhseLot[] Collection to store aggregation of ChildInvWhseLot objects.
     */
    protected $collInvWhseLots;
    protected $collInvWhseLotsPartial;

    /**
     * @var        ObjectCollection|ChildItemSubstitute[] Collection to store aggregation of ChildItemSubstitute objects.
     */
    protected $collItemSubstitutesRelatedByInititemnbr;
    protected $collItemSubstitutesRelatedByInititemnbrPartial;

    /**
     * @var        ObjectCollection|ChildItemSubstitute[] Collection to store aggregation of ChildItemSubstitute objects.
     */
    protected $collItemSubstitutesRelatedByInsisubitemnbr;
    protected $collItemSubstitutesRelatedByInsisubitemnbrPartial;

    /**
     * @var        ObjectCollection|ChildInvLotTag[] Collection to store aggregation of ChildInvLotTag objects.
     */
    protected $collInvLotTags;
    protected $collInvLotTagsPartial;

    /**
     * @var        ObjectCollection|ChildInvItem2Item[] Collection to store aggregation of ChildInvItem2Item objects.
     */
    protected $collInvItem2ItemsRelatedByI2imstritemid;
    protected $collInvItem2ItemsRelatedByI2imstritemidPartial;

    /**
     * @var        ObjectCollection|ChildInvItem2Item[] Collection to store aggregation of ChildInvItem2Item objects.
     */
    protected $collInvItem2ItemsRelatedByI2ichilditemid;
    protected $collInvItem2ItemsRelatedByI2ichilditemidPartial;

    /**
     * @var        ObjectCollection|ChildInvKitComponent[] Collection to store aggregation of ChildInvKitComponent objects.
     */
    protected $collInvKitComponents;
    protected $collInvKitComponentsPartial;

    /**
     * @var        ChildInvKit one-to-one related ChildInvKit object
     */
    protected $singleInvKit;

    /**
     * @var        ObjectCollection|ChildInvLotMaster[] Collection to store aggregation of ChildInvLotMaster objects.
     */
    protected $collInvLotMasters;
    protected $collInvLotMastersPartial;

    /**
     * @var        ObjectCollection|ChildInvSerialMaster[] Collection to store aggregation of ChildInvSerialMaster objects.
     */
    protected $collInvSerialMasters;
    protected $collInvSerialMastersPartial;

    /**
     * @var        ObjectCollection|ChildInvTransferDetail[] Collection to store aggregation of ChildInvTransferDetail objects.
     */
    protected $collInvTransferDetails;
    protected $collInvTransferDetailsPartial;

    /**
     * @var        ObjectCollection|ChildInvTransferLotserial[] Collection to store aggregation of ChildInvTransferLotserial objects.
     */
    protected $collInvTransferLotserials;
    protected $collInvTransferLotserialsPartial;

    /**
     * @var        ObjectCollection|ChildInvTransferPreAllocatedLotserial[] Collection to store aggregation of ChildInvTransferPreAllocatedLotserial objects.
     */
    protected $collInvTransferPreAllocatedLotserials;
    protected $collInvTransferPreAllocatedLotserialsPartial;

    /**
     * @var        ObjectCollection|ChildInvTransferPickedLotserial[] Collection to store aggregation of ChildInvTransferPickedLotserial objects.
     */
    protected $collInvTransferPickedLotserials;
    protected $collInvTransferPickedLotserialsPartial;

    /**
     * @var        ObjectCollection|ChildInvSerialWarranty[] Collection to store aggregation of ChildInvSerialWarranty objects.
     */
    protected $collInvSerialWarranties;
    protected $collInvSerialWarrantiesPartial;

    /**
     * @var        ObjectCollection|ChildWarehouseInventory[] Collection to store aggregation of ChildWarehouseInventory objects.
     */
    protected $collWarehouseInventories;
    protected $collWarehouseInventoriesPartial;

    /**
     * @var        ObjectCollection|ChildItemXrefKey[] Collection to store aggregation of ChildItemXrefKey objects.
     */
    protected $collItemXrefKeys;
    protected $collItemXrefKeysPartial;

    /**
     * @var        ObjectCollection|ChildItemXrefManufacturer[] Collection to store aggregation of ChildItemXrefManufacturer objects.
     */
    protected $collItemXrefManufacturers;
    protected $collItemXrefManufacturersPartial;

    /**
     * @var        ObjectCollection|ChildItemXrefCustomerNote[] Collection to store aggregation of ChildItemXrefCustomerNote objects.
     */
    protected $collItemXrefCustomerNotes;
    protected $collItemXrefCustomerNotesPartial;

    /**
     * @var        ObjectCollection|ChildInvOptCodeNote[] Collection to store aggregation of ChildInvOptCodeNote objects.
     */
    protected $collInvOptCodeNotes;
    protected $collInvOptCodeNotesPartial;

    /**
     * @var        ObjectCollection|ChildItemXrefVendorNoteDetail[] Collection to store aggregation of ChildItemXrefVendorNoteDetail objects.
     */
    protected $collItemXrefVendorNoteDetails;
    protected $collItemXrefVendorNoteDetailsPartial;

    /**
     * @var        ObjectCollection|ChildItemXrefVendorNoteInternal[] Collection to store aggregation of ChildItemXrefVendorNoteInternal objects.
     */
    protected $collItemXrefVendorNoteInternals;
    protected $collItemXrefVendorNoteInternalsPartial;

    /**
     * @var        ObjectCollection|ChildInvPallet[] Collection to store aggregation of ChildInvPallet objects.
     */
    protected $collInvPallets;
    protected $collInvPalletsPartial;

    /**
     * @var        ObjectCollection|ChildPurchaseOrderDetail[] Collection to store aggregation of ChildPurchaseOrderDetail objects.
     */
    protected $collPurchaseOrderDetails;
    protected $collPurchaseOrderDetailsPartial;

    /**
     * @var        ObjectCollection|ChildPurchaseOrderDetailReceipt[] Collection to store aggregation of ChildPurchaseOrderDetailReceipt objects.
     */
    protected $collPurchaseOrderDetailReceipts;
    protected $collPurchaseOrderDetailReceiptsPartial;

    /**
     * @var        ObjectCollection|ChildPurchaseOrderDetailReceiving[] Collection to store aggregation of ChildPurchaseOrderDetailReceiving objects.
     */
    protected $collPurchaseOrderDetailReceivings;
    protected $collPurchaseOrderDetailReceivingsPartial;

    /**
     * @var        ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] Collection to store aggregation of ChildPurchaseOrderDetailLotReceiving objects.
     */
    protected $collPurchaseOrderDetailLotReceivings;
    protected $collPurchaseOrderDetailLotReceivingsPartial;

    /**
     * @var        ObjectCollection|ChildBomComponent[] Collection to store aggregation of ChildBomComponent objects.
     */
    protected $collBomComponents;
    protected $collBomComponentsPartial;

    /**
     * @var        ChildBomItem one-to-one related ChildBomItem object
     */
    protected $singleBomItem;

    /**
     * @var        ObjectCollection|ChildBookingDetail[] Collection to store aggregation of ChildBookingDetail objects.
     */
    protected $collBookingDetails;
    protected $collBookingDetailsPartial;

    /**
     * @var        ObjectCollection|ChildSalesHistoryDetail[] Collection to store aggregation of ChildSalesHistoryDetail objects.
     */
    protected $collSalesHistoryDetails;
    protected $collSalesHistoryDetailsPartial;

    /**
     * @var        ObjectCollection|ChildSalesOrderDetail[] Collection to store aggregation of ChildSalesOrderDetail objects.
     */
    protected $collSalesOrderDetails;
    protected $collSalesOrderDetailsPartial;

    /**
     * @var        ObjectCollection|ChildSalesOrderLotserial[] Collection to store aggregation of ChildSalesOrderLotserial objects.
     */
    protected $collSalesOrderLotserials;
    protected $collSalesOrderLotserialsPartial;

    /**
     * @var        ObjectCollection|ChildSalesHistoryLotserial[] Collection to store aggregation of ChildSalesHistoryLotserial objects.
     */
    protected $collSalesHistoryLotserials;
    protected $collSalesHistoryLotserialsPartial;

    /**
     * @var        ObjectCollection|ChildSoAllocatedLotserial[] Collection to store aggregation of ChildSoAllocatedLotserial objects.
     */
    protected $collSoAllocatedLotserials;
    protected $collSoAllocatedLotserialsPartial;

    /**
     * @var        ObjectCollection|ChildItemPricingDiscount[] Collection to store aggregation of ChildItemPricingDiscount objects.
     */
    protected $collItemPricingDiscounts;
    protected $collItemPricingDiscountsPartial;

    /**
     * @var        ObjectCollection|ChildSoPickedLotserial[] Collection to store aggregation of ChildSoPickedLotserial objects.
     */
    protected $collSoPickedLotserials;
    protected $collSoPickedLotserialsPartial;

    /**
     * @var        ObjectCollection|ChildSoStandingOrderDetail[] Collection to store aggregation of ChildSoStandingOrderDetail objects.
     */
    protected $collSoStandingOrderDetails;
    protected $collSoStandingOrderDetailsPartial;

    /**
     * @var        ObjectCollection|ChildItemXrefUpc[] Collection to store aggregation of ChildItemXrefUpc objects.
     */
    protected $collItemXrefUpcs;
    protected $collItemXrefUpcsPartial;

    /**
     * @var        ObjectCollection|ChildItemXrefVendor[] Collection to store aggregation of ChildItemXrefVendor objects.
     */
    protected $collItemXrefVendors;
    protected $collItemXrefVendorsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemXrefCustomer[]
     */
    protected $itemXrefCustomersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvWhseItemBin[]
     */
    protected $invWhseItemBinsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemAddonItem[]
     */
    protected $itemAddonItemsRelatedByInititemnbrScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemAddonItem[]
     */
    protected $itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvWhseLot[]
     */
    protected $invWhseLotsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemSubstitute[]
     */
    protected $itemSubstitutesRelatedByInititemnbrScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemSubstitute[]
     */
    protected $itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvLotTag[]
     */
    protected $invLotTagsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvItem2Item[]
     */
    protected $invItem2ItemsRelatedByI2imstritemidScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvItem2Item[]
     */
    protected $invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvKitComponent[]
     */
    protected $invKitComponentsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvLotMaster[]
     */
    protected $invLotMastersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvSerialMaster[]
     */
    protected $invSerialMastersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvTransferDetail[]
     */
    protected $invTransferDetailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvTransferLotserial[]
     */
    protected $invTransferLotserialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvTransferPreAllocatedLotserial[]
     */
    protected $invTransferPreAllocatedLotserialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvTransferPickedLotserial[]
     */
    protected $invTransferPickedLotserialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvSerialWarranty[]
     */
    protected $invSerialWarrantiesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildWarehouseInventory[]
     */
    protected $warehouseInventoriesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemXrefKey[]
     */
    protected $itemXrefKeysScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemXrefManufacturer[]
     */
    protected $itemXrefManufacturersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemXrefCustomerNote[]
     */
    protected $itemXrefCustomerNotesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvOptCodeNote[]
     */
    protected $invOptCodeNotesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemXrefVendorNoteDetail[]
     */
    protected $itemXrefVendorNoteDetailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemXrefVendorNoteInternal[]
     */
    protected $itemXrefVendorNoteInternalsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvPallet[]
     */
    protected $invPalletsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildPurchaseOrderDetail[]
     */
    protected $purchaseOrderDetailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildPurchaseOrderDetailReceipt[]
     */
    protected $purchaseOrderDetailReceiptsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildPurchaseOrderDetailReceiving[]
     */
    protected $purchaseOrderDetailReceivingsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildPurchaseOrderDetailLotReceiving[]
     */
    protected $purchaseOrderDetailLotReceivingsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildBomComponent[]
     */
    protected $bomComponentsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildBookingDetail[]
     */
    protected $bookingDetailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesHistoryDetail[]
     */
    protected $salesHistoryDetailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesOrderDetail[]
     */
    protected $salesOrderDetailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesOrderLotserial[]
     */
    protected $salesOrderLotserialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesHistoryLotserial[]
     */
    protected $salesHistoryLotserialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSoAllocatedLotserial[]
     */
    protected $soAllocatedLotserialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemPricingDiscount[]
     */
    protected $itemPricingDiscountsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSoPickedLotserial[]
     */
    protected $soPickedLotserialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSoStandingOrderDetail[]
     */
    protected $soStandingOrderDetailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemXrefUpc[]
     */
    protected $itemXrefUpcsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemXrefVendor[]
     */
    protected $itemXrefVendorsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->inititemnbr = '';
    }

    /**
     * Initializes internal state of Base\ItemMasterItem object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return boolean True if the object has been modified.
     */
    public function isModified()
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param  string  $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return boolean True if $col has been modified.
     */
    public function isColumnModified($col)
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns()
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return boolean true, if the object has never been persisted.
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param boolean $b the state of the object.
     */
    public function setNew($b)
    {
        $this->new = (boolean) $b;
    }

    /**
     * Whether this object has been deleted.
     * @return boolean The deleted state of this object.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param  boolean $b The deleted state of this object.
     * @return void
     */
    public function setDeleted($b)
    {
        $this->deleted = (boolean) $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param  string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified($col = null)
    {
        if (null !== $col) {
            if (isset($this->modifiedColumns[$col])) {
                unset($this->modifiedColumns[$col]);
            }
        } else {
            $this->modifiedColumns = array();
        }
    }

    /**
     * Compares this with another <code>ItemMasterItem</code> instance.  If
     * <code>obj</code> is an instance of <code>ItemMasterItem</code>, delegates to
     * <code>equals(ItemMasterItem)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param  mixed   $obj The object to compare to.
     * @return boolean Whether equal to the object specified.
     */
    public function equals($obj)
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns()
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param  string  $name The virtual column name
     * @return boolean
     */
    public function hasVirtualColumn($name)
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param  string $name The virtual column name
     * @return mixed
     *
     * @throws PropelException
     */
    public function getVirtualColumn($name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of inexistent virtual column %s.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name  The virtual column name
     * @param mixed  $value The value to give to the virtual column
     *
     * @return $this|ItemMasterItem The current object, for fluid interface
     */
    public function setVirtualColumn($name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param  string  $msg
     * @param  int     $priority One of the Propel::LOG_* logging levels
     * @return boolean
     */
    protected function log($msg, $priority = Propel::LOG_INFO)
    {
        return Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param  mixed   $parser                 A AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param  boolean $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @return string  The exported data
     */
    public function exportTo($parser, $includeLazyLoadColumns = true)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray(TableMap::TYPE_PHPNAME, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     */
    public function __sleep()
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [inititemnbr] column value.
     *
     * @return string
     */
    public function getInititemnbr()
    {
        return $this->inititemnbr;
    }

    /**
     * Get the [initdesc1] column value.
     *
     * @return string
     */
    public function getInitdesc1()
    {
        return $this->initdesc1;
    }

    /**
     * Get the [initdesc2] column value.
     *
     * @return string
     */
    public function getInitdesc2()
    {
        return $this->initdesc2;
    }

    /**
     * Get the [intbgrup] column value.
     *
     * @return string
     */
    public function getIntbgrup()
    {
        return $this->intbgrup;
    }

    /**
     * Get the [initformatcode] column value.
     *
     * @return string
     */
    public function getInitformatcode()
    {
        return $this->initformatcode;
    }

    /**
     * Get the [initsplit] column value.
     *
     * @return string
     */
    public function getInitsplit()
    {
        return $this->initsplit;
    }

    /**
     * Get the [initsherdatecd] column value.
     *
     * @return string
     */
    public function getInitsherdatecd()
    {
        return $this->initsherdatecd;
    }

    /**
     * Get the [initcoreyn] column value.
     *
     * @return string
     */
    public function getInitcoreyn()
    {
        return $this->initcoreyn;
    }

    /**
     * Get the [intbusercode1] column value.
     *
     * @return string
     */
    public function getIntbusercode1()
    {
        return $this->intbusercode1;
    }

    /**
     * Get the [intbusercode2] column value.
     *
     * @return string
     */
    public function getIntbusercode2()
    {
        return $this->intbusercode2;
    }

    /**
     * Get the [inittype] column value.
     *
     * @return string
     */
    public function getInittype()
    {
        return $this->inittype;
    }

    /**
     * Get the [inittax] column value.
     *
     * @return string
     */
    public function getInittax()
    {
        return $this->inittax;
    }

    /**
     * Get the [initrtlpric] column value.
     *
     * @return string
     */
    public function getInitrtlpric()
    {
        return $this->initrtlpric;
    }

    /**
     * Get the [initstatchgd] column value.
     *
     * @return string
     */
    public function getInitstatchgd()
    {
        return $this->initstatchgd;
    }

    /**
     * Get the [initspecitemcd] column value.
     *
     * @return string
     */
    public function getInitspecitemcd()
    {
        return $this->initspecitemcd;
    }

    /**
     * Get the [initwarrdays] column value.
     *
     * @return int
     */
    public function getInitwarrdays()
    {
        return $this->initwarrdays;
    }

    /**
     * Get the [intbuomsale] column value.
     *
     * @return string
     */
    public function getIntbuomsale()
    {
        return $this->intbuomsale;
    }

    /**
     * Get the [initwght] column value.
     *
     * @return string
     */
    public function getInitwght()
    {
        return $this->initwght;
    }

    /**
     * Get the [initbord] column value.
     *
     * @return string
     */
    public function getInitbord()
    {
        return $this->initbord;
    }

    /**
     * Get the [initbaseitemid] column value.
     *
     * @return string
     */
    public function getInitbaseitemid()
    {
        return $this->initbaseitemid;
    }

    /**
     * Get the [initspecificcust] column value.
     *
     * @return string
     */
    public function getInitspecificcust()
    {
        return $this->initspecificcust;
    }

    /**
     * Get the [initgivedisc] column value.
     *
     * @return string
     */
    public function getInitgivedisc()
    {
        return $this->initgivedisc;
    }

    /**
     * Get the [initasstcode] column value.
     *
     * @return string
     */
    public function getInitasstcode()
    {
        return $this->initasstcode;
    }

    /**
     * Get the [initpriclastdate] column value.
     *
     * @return string
     */
    public function getInitpriclastdate()
    {
        return $this->initpriclastdate;
    }

    /**
     * Get the [intbuompur] column value.
     *
     * @return string
     */
    public function getIntbuompur()
    {
        return $this->intbuompur;
    }

    /**
     * Get the [initstancost] column value.
     *
     * @return string
     */
    public function getInitstancost()
    {
        return $this->initstancost;
    }

    /**
     * Get the [initstancostbase] column value.
     *
     * @return string
     */
    public function getInitstancostbase()
    {
        return $this->initstancostbase;
    }

    /**
     * Get the [initstancostlastdate] column value.
     *
     * @return string
     */
    public function getInitstancostlastdate()
    {
        return $this->initstancostlastdate;
    }

    /**
     * Get the [initminmarg] column value.
     *
     * @return string
     */
    public function getInitminmarg()
    {
        return $this->initminmarg;
    }

    /**
     * Get the [initvendid] column value.
     *
     * @return string
     */
    public function getInitvendid()
    {
        return $this->initvendid;
    }

    /**
     * Get the [initinspect] column value.
     *
     * @return string
     */
    public function getInitinspect()
    {
        return $this->initinspect;
    }

    /**
     * Get the [initstockcode] column value.
     *
     * @return string
     */
    public function getInitstockcode()
    {
        return $this->initstockcode;
    }

    /**
     * Get the [initsupritemnbr] column value.
     *
     * @return string
     */
    public function getInitsupritemnbr()
    {
        return $this->initsupritemnbr;
    }

    /**
     * Get the [initvendshipfrom] column value.
     *
     * @return string
     */
    public function getInitvendshipfrom()
    {
        return $this->initvendshipfrom;
    }

    /**
     * Get the [initcntryoforigin] column value.
     *
     * @return string
     */
    public function getInitcntryoforigin()
    {
        return $this->initcntryoforigin;
    }

    /**
     * Get the [initasstqty] column value.
     *
     * @return string
     */
    public function getInitasstqty()
    {
        return $this->initasstqty;
    }

    /**
     * Get the [intbtariffcode] column value.
     *
     * @return string
     */
    public function getIntbtariffcode()
    {
        return $this->intbtariffcode;
    }

    /**
     * Get the [initpreference] column value.
     *
     * @return string
     */
    public function getInitpreference()
    {
        return $this->initpreference;
    }

    /**
     * Get the [initproducer] column value.
     *
     * @return string
     */
    public function getInitproducer()
    {
        return $this->initproducer;
    }

    /**
     * Get the [initdocumentation] column value.
     *
     * @return string
     */
    public function getInitdocumentation()
    {
        return $this->initdocumentation;
    }

    /**
     * Get the [initpurchcrtnqty] column value.
     *
     * @return int
     */
    public function getInitpurchcrtnqty()
    {
        return $this->initpurchcrtnqty;
    }

    /**
     * Get the [aptbbuyrcode] column value.
     *
     * @return string
     */
    public function getAptbbuyrcode()
    {
        return $this->aptbbuyrcode;
    }

    /**
     * Get the [initlastcost] column value.
     *
     * @return string
     */
    public function getInitlastcost()
    {
        return $this->initlastcost;
    }

    /**
     * Get the [initliters] column value.
     *
     * @return string
     */
    public function getInitliters()
    {
        return $this->initliters;
    }

    /**
     * Get the [intbmsdscode] column value.
     *
     * @return string
     */
    public function getIntbmsdscode()
    {
        return $this->intbmsdscode;
    }

    /**
     * Get the [initrequirefrt] column value.
     *
     * @return string
     */
    public function getInitrequirefrt()
    {
        return $this->initrequirefrt;
    }

    /**
     * Get the [initmfrtcode] column value.
     *
     * @return string
     */
    public function getInitmfrtcode()
    {
        return $this->initmfrtcode;
    }

    /**
     * Get the [initinnerpackqty] column value.
     *
     * @return int
     */
    public function getInitinnerpackqty()
    {
        return $this->initinnerpackqty;
    }

    /**
     * Get the [initouterpackqty] column value.
     *
     * @return int
     */
    public function getInitouterpackqty()
    {
        return $this->initouterpackqty;
    }

    /**
     * Get the [initbasestancost] column value.
     *
     * @return string
     */
    public function getInitbasestancost()
    {
        return $this->initbasestancost;
    }

    /**
     * Get the [initshiptareqty] column value.
     *
     * @return int
     */
    public function getInitshiptareqty()
    {
        return $this->initshiptareqty;
    }

    /**
     * Get the [initwgitem] column value.
     *
     * @return string
     */
    public function getInitwgitem()
    {
        return $this->initwgitem;
    }

    /**
     * Get the [intbpricgrup] column value.
     *
     * @return string
     */
    public function getIntbpricgrup()
    {
        return $this->intbpricgrup;
    }

    /**
     * Get the [intbcommgrup] column value.
     *
     * @return string
     */
    public function getIntbcommgrup()
    {
        return $this->intbcommgrup;
    }

    /**
     * Get the [initlastcostdate] column value.
     *
     * @return string
     */
    public function getInitlastcostdate()
    {
        return $this->initlastcostdate;
    }

    /**
     * Get the [initqtypercase] column value.
     *
     * @return int
     */
    public function getInitqtypercase()
    {
        return $this->initqtypercase;
    }

    /**
     * Get the [initrevision] column value.
     *
     * @return string
     */
    public function getInitrevision()
    {
        return $this->initrevision;
    }

    /**
     * Get the [initcommsaleqty] column value.
     *
     * @return int
     */
    public function getInitcommsaleqty()
    {
        return $this->initcommsaleqty;
    }

    /**
     * Get the [initcubes] column value.
     *
     * @return string
     */
    public function getInitcubes()
    {
        return $this->initcubes;
    }

    /**
     * Get the [inittimefence] column value.
     *
     * @return int
     */
    public function getInittimefence()
    {
        return $this->inittimefence;
    }

    /**
     * Get the [initsrvcminchrg] column value.
     *
     * @return string
     */
    public function getInitsrvcminchrg()
    {
        return $this->initsrvcminchrg;
    }

    /**
     * Get the [initminmargbase] column value.
     *
     * @return string
     */
    public function getInitMinMargBase()
    {
        return $this->initminmargbase;
    }

    /**
     * Get the [dateupdtd] column value.
     *
     * @return string
     */
    public function getDateupdtd()
    {
        return $this->dateupdtd;
    }

    /**
     * Get the [timeupdtd] column value.
     *
     * @return string
     */
    public function getTimeupdtd()
    {
        return $this->timeupdtd;
    }

    /**
     * Get the [dummy] column value.
     *
     * @return string
     */
    public function getDummy()
    {
        return $this->dummy;
    }

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemPricing !== null && $this->aItemPricing->getInititemnbr() !== $v) {
            $this->aItemPricing = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [initdesc1] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitdesc1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initdesc1 !== $v) {
            $this->initdesc1 = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITDESC1] = true;
        }

        return $this;
    } // setInitdesc1()

    /**
     * Set the value of [initdesc2] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitdesc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initdesc2 !== $v) {
            $this->initdesc2 = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITDESC2] = true;
        }

        return $this;
    } // setInitdesc2()

    /**
     * Set the value of [intbgrup] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbgrup !== $v) {
            $this->intbgrup = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBGRUP] = true;
        }

        if ($this->aInvGroupCode !== null && $this->aInvGroupCode->getIntbgrup() !== $v) {
            $this->aInvGroupCode = null;
        }

        return $this;
    } // setIntbgrup()

    /**
     * Set the value of [initformatcode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitformatcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initformatcode !== $v) {
            $this->initformatcode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITFORMATCODE] = true;
        }

        return $this;
    } // setInitformatcode()

    /**
     * Set the value of [initsplit] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitsplit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initsplit !== $v) {
            $this->initsplit = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSPLIT] = true;
        }

        return $this;
    } // setInitsplit()

    /**
     * Set the value of [initsherdatecd] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitsherdatecd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initsherdatecd !== $v) {
            $this->initsherdatecd = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSHERDATECD] = true;
        }

        return $this;
    } // setInitsherdatecd()

    /**
     * Set the value of [initcoreyn] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitcoreyn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initcoreyn !== $v) {
            $this->initcoreyn = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITCOREYN] = true;
        }

        return $this;
    } // setInitcoreyn()

    /**
     * Set the value of [intbusercode1] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbusercode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbusercode1 !== $v) {
            $this->intbusercode1 = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBUSERCODE1] = true;
        }

        return $this;
    } // setIntbusercode1()

    /**
     * Set the value of [intbusercode2] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbusercode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbusercode2 !== $v) {
            $this->intbusercode2 = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBUSERCODE2] = true;
        }

        return $this;
    } // setIntbusercode2()

    /**
     * Set the value of [inittype] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInittype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inittype !== $v) {
            $this->inittype = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITTYPE] = true;
        }

        return $this;
    } // setInittype()

    /**
     * Set the value of [inittax] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInittax($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inittax !== $v) {
            $this->inittax = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITTAX] = true;
        }

        return $this;
    } // setInittax()

    /**
     * Set the value of [initrtlpric] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitrtlpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initrtlpric !== $v) {
            $this->initrtlpric = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITRTLPRIC] = true;
        }

        return $this;
    } // setInitrtlpric()

    /**
     * Set the value of [initstatchgd] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitstatchgd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initstatchgd !== $v) {
            $this->initstatchgd = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSTATCHGD] = true;
        }

        return $this;
    } // setInitstatchgd()

    /**
     * Set the value of [initspecitemcd] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitspecitemcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initspecitemcd !== $v) {
            $this->initspecitemcd = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSPECITEMCD] = true;
        }

        return $this;
    } // setInitspecitemcd()

    /**
     * Set the value of [initwarrdays] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitwarrdays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initwarrdays !== $v) {
            $this->initwarrdays = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITWARRDAYS] = true;
        }

        return $this;
    } // setInitwarrdays()

    /**
     * Set the value of [intbuomsale] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbuomsale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuomsale !== $v) {
            $this->intbuomsale = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBUOMSALE] = true;
        }

        if ($this->aUnitofMeasureSale !== null && $this->aUnitofMeasureSale->getIntbuomsale() !== $v) {
            $this->aUnitofMeasureSale = null;
        }

        return $this;
    } // setIntbuomsale()

    /**
     * Set the value of [initwght] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initwght !== $v) {
            $this->initwght = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITWGHT] = true;
        }

        return $this;
    } // setInitwght()

    /**
     * Set the value of [initbord] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitbord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initbord !== $v) {
            $this->initbord = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITBORD] = true;
        }

        return $this;
    } // setInitbord()

    /**
     * Set the value of [initbaseitemid] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitbaseitemid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initbaseitemid !== $v) {
            $this->initbaseitemid = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITBASEITEMID] = true;
        }

        return $this;
    } // setInitbaseitemid()

    /**
     * Set the value of [initspecificcust] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitspecificcust($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initspecificcust !== $v) {
            $this->initspecificcust = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSPECIFICCUST] = true;
        }

        return $this;
    } // setInitspecificcust()

    /**
     * Set the value of [initgivedisc] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitgivedisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initgivedisc !== $v) {
            $this->initgivedisc = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITGIVEDISC] = true;
        }

        return $this;
    } // setInitgivedisc()

    /**
     * Set the value of [initasstcode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitasstcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initasstcode !== $v) {
            $this->initasstcode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITASSTCODE] = true;
        }

        return $this;
    } // setInitasstcode()

    /**
     * Set the value of [initpriclastdate] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitpriclastdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initpriclastdate !== $v) {
            $this->initpriclastdate = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITPRICLASTDATE] = true;
        }

        return $this;
    } // setInitpriclastdate()

    /**
     * Set the value of [intbuompur] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbuompur($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuompur !== $v) {
            $this->intbuompur = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBUOMPUR] = true;
        }

        if ($this->aUnitofMeasurePurchase !== null && $this->aUnitofMeasurePurchase->getIntbuompur() !== $v) {
            $this->aUnitofMeasurePurchase = null;
        }

        return $this;
    } // setIntbuompur()

    /**
     * Set the value of [initstancost] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitstancost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initstancost !== $v) {
            $this->initstancost = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSTANCOST] = true;
        }

        return $this;
    } // setInitstancost()

    /**
     * Set the value of [initstancostbase] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitstancostbase($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initstancostbase !== $v) {
            $this->initstancostbase = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSTANCOSTBASE] = true;
        }

        return $this;
    } // setInitstancostbase()

    /**
     * Set the value of [initstancostlastdate] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitstancostlastdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initstancostlastdate !== $v) {
            $this->initstancostlastdate = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSTANCOSTLASTDATE] = true;
        }

        return $this;
    } // setInitstancostlastdate()

    /**
     * Set the value of [initminmarg] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitminmarg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initminmarg !== $v) {
            $this->initminmarg = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITMINMARG] = true;
        }

        return $this;
    } // setInitminmarg()

    /**
     * Set the value of [initvendid] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitvendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initvendid !== $v) {
            $this->initvendid = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITVENDID] = true;
        }

        return $this;
    } // setInitvendid()

    /**
     * Set the value of [initinspect] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitinspect($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initinspect !== $v) {
            $this->initinspect = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITINSPECT] = true;
        }

        return $this;
    } // setInitinspect()

    /**
     * Set the value of [initstockcode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitstockcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initstockcode !== $v) {
            $this->initstockcode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSTOCKCODE] = true;
        }

        return $this;
    } // setInitstockcode()

    /**
     * Set the value of [initsupritemnbr] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitsupritemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initsupritemnbr !== $v) {
            $this->initsupritemnbr = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSUPRITEMNBR] = true;
        }

        return $this;
    } // setInitsupritemnbr()

    /**
     * Set the value of [initvendshipfrom] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitvendshipfrom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initvendshipfrom !== $v) {
            $this->initvendshipfrom = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITVENDSHIPFROM] = true;
        }

        return $this;
    } // setInitvendshipfrom()

    /**
     * Set the value of [initcntryoforigin] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitcntryoforigin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initcntryoforigin !== $v) {
            $this->initcntryoforigin = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITCNTRYOFORIGIN] = true;
        }

        return $this;
    } // setInitcntryoforigin()

    /**
     * Set the value of [initasstqty] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitasstqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initasstqty !== $v) {
            $this->initasstqty = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITASSTQTY] = true;
        }

        return $this;
    } // setInitasstqty()

    /**
     * Set the value of [intbtariffcode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbtariffcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbtariffcode !== $v) {
            $this->intbtariffcode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBTARIFFCODE] = true;
        }

        return $this;
    } // setIntbtariffcode()

    /**
     * Set the value of [initpreference] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitpreference($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initpreference !== $v) {
            $this->initpreference = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITPREFERENCE] = true;
        }

        return $this;
    } // setInitpreference()

    /**
     * Set the value of [initproducer] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitproducer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initproducer !== $v) {
            $this->initproducer = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITPRODUCER] = true;
        }

        return $this;
    } // setInitproducer()

    /**
     * Set the value of [initdocumentation] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitdocumentation($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initdocumentation !== $v) {
            $this->initdocumentation = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITDOCUMENTATION] = true;
        }

        return $this;
    } // setInitdocumentation()

    /**
     * Set the value of [initpurchcrtnqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitpurchcrtnqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initpurchcrtnqty !== $v) {
            $this->initpurchcrtnqty = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITPURCHCRTNQTY] = true;
        }

        return $this;
    } // setInitpurchcrtnqty()

    /**
     * Set the value of [aptbbuyrcode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setAptbbuyrcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbbuyrcode !== $v) {
            $this->aptbbuyrcode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_APTBBUYRCODE] = true;
        }

        return $this;
    } // setAptbbuyrcode()

    /**
     * Set the value of [initlastcost] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitlastcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initlastcost !== $v) {
            $this->initlastcost = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITLASTCOST] = true;
        }

        return $this;
    } // setInitlastcost()

    /**
     * Set the value of [initliters] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitliters($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initliters !== $v) {
            $this->initliters = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITLITERS] = true;
        }

        return $this;
    } // setInitliters()

    /**
     * Set the value of [intbmsdscode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbmsdscode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbmsdscode !== $v) {
            $this->intbmsdscode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBMSDSCODE] = true;
        }

        return $this;
    } // setIntbmsdscode()

    /**
     * Set the value of [initrequirefrt] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitrequirefrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initrequirefrt !== $v) {
            $this->initrequirefrt = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITREQUIREFRT] = true;
        }

        return $this;
    } // setInitrequirefrt()

    /**
     * Set the value of [initmfrtcode] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitmfrtcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initmfrtcode !== $v) {
            $this->initmfrtcode = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITMFRTCODE] = true;
        }

        return $this;
    } // setInitmfrtcode()

    /**
     * Set the value of [initinnerpackqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitinnerpackqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initinnerpackqty !== $v) {
            $this->initinnerpackqty = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITINNERPACKQTY] = true;
        }

        return $this;
    } // setInitinnerpackqty()

    /**
     * Set the value of [initouterpackqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitouterpackqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initouterpackqty !== $v) {
            $this->initouterpackqty = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITOUTERPACKQTY] = true;
        }

        return $this;
    } // setInitouterpackqty()

    /**
     * Set the value of [initbasestancost] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitbasestancost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initbasestancost !== $v) {
            $this->initbasestancost = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITBASESTANCOST] = true;
        }

        return $this;
    } // setInitbasestancost()

    /**
     * Set the value of [initshiptareqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitshiptareqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initshiptareqty !== $v) {
            $this->initshiptareqty = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSHIPTAREQTY] = true;
        }

        return $this;
    } // setInitshiptareqty()

    /**
     * Set the value of [initwgitem] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitwgitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initwgitem !== $v) {
            $this->initwgitem = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITWGITEM] = true;
        }

        return $this;
    } // setInitwgitem()

    /**
     * Set the value of [intbpricgrup] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbpricgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbpricgrup !== $v) {
            $this->intbpricgrup = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBPRICGRUP] = true;
        }

        if ($this->aInvPriceCode !== null && $this->aInvPriceCode->getIntbpricgrup() !== $v) {
            $this->aInvPriceCode = null;
        }

        return $this;
    } // setIntbpricgrup()

    /**
     * Set the value of [intbcommgrup] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setIntbcommgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcommgrup !== $v) {
            $this->intbcommgrup = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INTBCOMMGRUP] = true;
        }

        if ($this->aInvCommissionCode !== null && $this->aInvCommissionCode->getIntbcommgrup() !== $v) {
            $this->aInvCommissionCode = null;
        }

        return $this;
    } // setIntbcommgrup()

    /**
     * Set the value of [initlastcostdate] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitlastcostdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initlastcostdate !== $v) {
            $this->initlastcostdate = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITLASTCOSTDATE] = true;
        }

        return $this;
    } // setInitlastcostdate()

    /**
     * Set the value of [initqtypercase] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitqtypercase($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initqtypercase !== $v) {
            $this->initqtypercase = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITQTYPERCASE] = true;
        }

        return $this;
    } // setInitqtypercase()

    /**
     * Set the value of [initrevision] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitrevision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initrevision !== $v) {
            $this->initrevision = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITREVISION] = true;
        }

        return $this;
    } // setInitrevision()

    /**
     * Set the value of [initcommsaleqty] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitcommsaleqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->initcommsaleqty !== $v) {
            $this->initcommsaleqty = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITCOMMSALEQTY] = true;
        }

        return $this;
    } // setInitcommsaleqty()

    /**
     * Set the value of [initcubes] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitcubes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initcubes !== $v) {
            $this->initcubes = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITCUBES] = true;
        }

        return $this;
    } // setInitcubes()

    /**
     * Set the value of [inittimefence] column.
     *
     * @param int $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInittimefence($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->inittimefence !== $v) {
            $this->inittimefence = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITTIMEFENCE] = true;
        }

        return $this;
    } // setInittimefence()

    /**
     * Set the value of [initsrvcminchrg] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitsrvcminchrg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initsrvcminchrg !== $v) {
            $this->initsrvcminchrg = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITSRVCMINCHRG] = true;
        }

        return $this;
    } // setInitsrvcminchrg()

    /**
     * Set the value of [initminmargbase] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setInitMinMargBase($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->initminmargbase !== $v) {
            $this->initminmargbase = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_INITMINMARGBASE] = true;
        }

        return $this;
    } // setInitMinMargBase()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ItemMasterItemTableMap::COL_DUMMY] = true;
        }

        return $this;
    } // setDummy()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->inititemnbr !== '') {
                return false;
            }

        // otherwise, everything was equal, so return TRUE
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array   $row       The row returned by DataFetcher->fetch().
     * @param int     $startcol  0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @param string  $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false, $indexType = TableMap::TYPE_NUM)
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ItemMasterItemTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ItemMasterItemTableMap::translateFieldName('Initdesc1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initdesc1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ItemMasterItemTableMap::translateFieldName('Initdesc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initdesc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ItemMasterItemTableMap::translateFieldName('Initformatcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initformatcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ItemMasterItemTableMap::translateFieldName('Initsplit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initsplit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ItemMasterItemTableMap::translateFieldName('Initsherdatecd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initsherdatecd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ItemMasterItemTableMap::translateFieldName('Initcoreyn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initcoreyn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbusercode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbusercode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbusercode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbusercode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ItemMasterItemTableMap::translateFieldName('Inittype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inittype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ItemMasterItemTableMap::translateFieldName('Inittax', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inittax = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ItemMasterItemTableMap::translateFieldName('Initrtlpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initrtlpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ItemMasterItemTableMap::translateFieldName('Initstatchgd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initstatchgd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ItemMasterItemTableMap::translateFieldName('Initspecitemcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initspecitemcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ItemMasterItemTableMap::translateFieldName('Initwarrdays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initwarrdays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbuomsale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuomsale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ItemMasterItemTableMap::translateFieldName('Initwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ItemMasterItemTableMap::translateFieldName('Initbord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initbord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ItemMasterItemTableMap::translateFieldName('Initbaseitemid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initbaseitemid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ItemMasterItemTableMap::translateFieldName('Initspecificcust', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initspecificcust = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ItemMasterItemTableMap::translateFieldName('Initgivedisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initgivedisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ItemMasterItemTableMap::translateFieldName('Initasstcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initasstcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ItemMasterItemTableMap::translateFieldName('Initpriclastdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initpriclastdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuompur = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ItemMasterItemTableMap::translateFieldName('Initstancost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initstancost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ItemMasterItemTableMap::translateFieldName('Initstancostbase', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initstancostbase = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ItemMasterItemTableMap::translateFieldName('Initstancostlastdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initstancostlastdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ItemMasterItemTableMap::translateFieldName('Initminmarg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initminmarg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ItemMasterItemTableMap::translateFieldName('Initvendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initvendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ItemMasterItemTableMap::translateFieldName('Initinspect', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initinspect = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ItemMasterItemTableMap::translateFieldName('Initstockcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initstockcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ItemMasterItemTableMap::translateFieldName('Initsupritemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initsupritemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ItemMasterItemTableMap::translateFieldName('Initvendshipfrom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initvendshipfrom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ItemMasterItemTableMap::translateFieldName('Initcntryoforigin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initcntryoforigin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ItemMasterItemTableMap::translateFieldName('Initasstqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initasstqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbtariffcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbtariffcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ItemMasterItemTableMap::translateFieldName('Initpreference', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initpreference = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : ItemMasterItemTableMap::translateFieldName('Initproducer', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initproducer = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : ItemMasterItemTableMap::translateFieldName('Initdocumentation', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initdocumentation = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : ItemMasterItemTableMap::translateFieldName('Initpurchcrtnqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initpurchcrtnqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : ItemMasterItemTableMap::translateFieldName('Aptbbuyrcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbbuyrcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : ItemMasterItemTableMap::translateFieldName('Initlastcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initlastcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : ItemMasterItemTableMap::translateFieldName('Initliters', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initliters = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbmsdscode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbmsdscode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : ItemMasterItemTableMap::translateFieldName('Initrequirefrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initrequirefrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : ItemMasterItemTableMap::translateFieldName('Initmfrtcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initmfrtcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : ItemMasterItemTableMap::translateFieldName('Initinnerpackqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initinnerpackqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : ItemMasterItemTableMap::translateFieldName('Initouterpackqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initouterpackqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : ItemMasterItemTableMap::translateFieldName('Initbasestancost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initbasestancost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : ItemMasterItemTableMap::translateFieldName('Initshiptareqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initshiptareqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : ItemMasterItemTableMap::translateFieldName('Initwgitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initwgitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbpricgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbpricgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : ItemMasterItemTableMap::translateFieldName('Intbcommgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcommgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : ItemMasterItemTableMap::translateFieldName('Initlastcostdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initlastcostdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : ItemMasterItemTableMap::translateFieldName('Initqtypercase', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initqtypercase = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : ItemMasterItemTableMap::translateFieldName('Initrevision', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initrevision = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : ItemMasterItemTableMap::translateFieldName('Initcommsaleqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initcommsaleqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : ItemMasterItemTableMap::translateFieldName('Initcubes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initcubes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : ItemMasterItemTableMap::translateFieldName('Inittimefence', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inittimefence = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : ItemMasterItemTableMap::translateFieldName('Initsrvcminchrg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initsrvcminchrg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : ItemMasterItemTableMap::translateFieldName('InitMinMargBase', TableMap::TYPE_PHPNAME, $indexType)];
            $this->initminmargbase = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : ItemMasterItemTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : ItemMasterItemTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : ItemMasterItemTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 65; // 65 = ItemMasterItemTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ItemMasterItem'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {
        if ($this->aItemPricing !== null && $this->inititemnbr !== $this->aItemPricing->getInititemnbr()) {
            $this->aItemPricing = null;
        }
        if ($this->aInvGroupCode !== null && $this->intbgrup !== $this->aInvGroupCode->getIntbgrup()) {
            $this->aInvGroupCode = null;
        }
        if ($this->aUnitofMeasureSale !== null && $this->intbuomsale !== $this->aUnitofMeasureSale->getIntbuomsale()) {
            $this->aUnitofMeasureSale = null;
        }
        if ($this->aUnitofMeasurePurchase !== null && $this->intbuompur !== $this->aUnitofMeasurePurchase->getIntbuompur()) {
            $this->aUnitofMeasurePurchase = null;
        }
        if ($this->aInvPriceCode !== null && $this->intbpricgrup !== $this->aInvPriceCode->getIntbpricgrup()) {
            $this->aInvPriceCode = null;
        }
        if ($this->aInvCommissionCode !== null && $this->intbcommgrup !== $this->aInvCommissionCode->getIntbcommgrup()) {
            $this->aInvCommissionCode = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param      boolean $deep (optional) Whether to also de-associated any related objects.
     * @param      ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ItemMasterItemTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildItemMasterItemQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUnitofMeasureSale = null;
            $this->aUnitofMeasurePurchase = null;
            $this->aInvGroupCode = null;
            $this->aInvPriceCode = null;
            $this->aInvCommissionCode = null;
            $this->aItemPricing = null;
            $this->collItemXrefCustomers = null;

            $this->collInvWhseItemBins = null;

            $this->collItemAddonItemsRelatedByInititemnbr = null;

            $this->collItemAddonItemsRelatedByAdonadditemnbr = null;

            $this->singleItmDimension = null;

            $this->singleInvHazmatItem = null;

            $this->collInvWhseLots = null;

            $this->collItemSubstitutesRelatedByInititemnbr = null;

            $this->collItemSubstitutesRelatedByInsisubitemnbr = null;

            $this->collInvLotTags = null;

            $this->collInvItem2ItemsRelatedByI2imstritemid = null;

            $this->collInvItem2ItemsRelatedByI2ichilditemid = null;

            $this->collInvKitComponents = null;

            $this->singleInvKit = null;

            $this->collInvLotMasters = null;

            $this->collInvSerialMasters = null;

            $this->collInvTransferDetails = null;

            $this->collInvTransferLotserials = null;

            $this->collInvTransferPreAllocatedLotserials = null;

            $this->collInvTransferPickedLotserials = null;

            $this->collInvSerialWarranties = null;

            $this->collWarehouseInventories = null;

            $this->collItemXrefKeys = null;

            $this->collItemXrefManufacturers = null;

            $this->collItemXrefCustomerNotes = null;

            $this->collInvOptCodeNotes = null;

            $this->collItemXrefVendorNoteDetails = null;

            $this->collItemXrefVendorNoteInternals = null;

            $this->collInvPallets = null;

            $this->collPurchaseOrderDetails = null;

            $this->collPurchaseOrderDetailReceipts = null;

            $this->collPurchaseOrderDetailReceivings = null;

            $this->collPurchaseOrderDetailLotReceivings = null;

            $this->collBomComponents = null;

            $this->singleBomItem = null;

            $this->collBookingDetails = null;

            $this->collSalesHistoryDetails = null;

            $this->collSalesOrderDetails = null;

            $this->collSalesOrderLotserials = null;

            $this->collSalesHistoryLotserials = null;

            $this->collSoAllocatedLotserials = null;

            $this->collItemPricingDiscounts = null;

            $this->collSoPickedLotserials = null;

            $this->collSoStandingOrderDetails = null;

            $this->collItemXrefUpcs = null;

            $this->collItemXrefVendors = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ItemMasterItem::setDeleted()
     * @see ItemMasterItem::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemMasterItemTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildItemMasterItemQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see doSave()
     */
    public function save(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ItemMasterItemTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                ItemMasterItemTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      ConnectionInterface $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aUnitofMeasureSale !== null) {
                if ($this->aUnitofMeasureSale->isModified() || $this->aUnitofMeasureSale->isNew()) {
                    $affectedRows += $this->aUnitofMeasureSale->save($con);
                }
                $this->setUnitofMeasureSale($this->aUnitofMeasureSale);
            }

            if ($this->aUnitofMeasurePurchase !== null) {
                if ($this->aUnitofMeasurePurchase->isModified() || $this->aUnitofMeasurePurchase->isNew()) {
                    $affectedRows += $this->aUnitofMeasurePurchase->save($con);
                }
                $this->setUnitofMeasurePurchase($this->aUnitofMeasurePurchase);
            }

            if ($this->aInvGroupCode !== null) {
                if ($this->aInvGroupCode->isModified() || $this->aInvGroupCode->isNew()) {
                    $affectedRows += $this->aInvGroupCode->save($con);
                }
                $this->setInvGroupCode($this->aInvGroupCode);
            }

            if ($this->aInvPriceCode !== null) {
                if ($this->aInvPriceCode->isModified() || $this->aInvPriceCode->isNew()) {
                    $affectedRows += $this->aInvPriceCode->save($con);
                }
                $this->setInvPriceCode($this->aInvPriceCode);
            }

            if ($this->aInvCommissionCode !== null) {
                if ($this->aInvCommissionCode->isModified() || $this->aInvCommissionCode->isNew()) {
                    $affectedRows += $this->aInvCommissionCode->save($con);
                }
                $this->setInvCommissionCode($this->aInvCommissionCode);
            }

            if ($this->aItemPricing !== null) {
                if ($this->aItemPricing->isModified() || $this->aItemPricing->isNew()) {
                    $affectedRows += $this->aItemPricing->save($con);
                }
                $this->setItemPricing($this->aItemPricing);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            if ($this->itemXrefCustomersScheduledForDeletion !== null) {
                if (!$this->itemXrefCustomersScheduledForDeletion->isEmpty()) {
                    foreach ($this->itemXrefCustomersScheduledForDeletion as $itemXrefCustomer) {
                        // need to save related object because we set the relation to null
                        $itemXrefCustomer->save($con);
                    }
                    $this->itemXrefCustomersScheduledForDeletion = null;
                }
            }

            if ($this->collItemXrefCustomers !== null) {
                foreach ($this->collItemXrefCustomers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invWhseItemBinsScheduledForDeletion !== null) {
                if (!$this->invWhseItemBinsScheduledForDeletion->isEmpty()) {
                    \InvWhseItemBinQuery::create()
                        ->filterByPrimaryKeys($this->invWhseItemBinsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invWhseItemBinsScheduledForDeletion = null;
                }
            }

            if ($this->collInvWhseItemBins !== null) {
                foreach ($this->collInvWhseItemBins as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemAddonItemsRelatedByInititemnbrScheduledForDeletion !== null) {
                if (!$this->itemAddonItemsRelatedByInititemnbrScheduledForDeletion->isEmpty()) {
                    \ItemAddonItemQuery::create()
                        ->filterByPrimaryKeys($this->itemAddonItemsRelatedByInititemnbrScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemAddonItemsRelatedByInititemnbrScheduledForDeletion = null;
                }
            }

            if ($this->collItemAddonItemsRelatedByInititemnbr !== null) {
                foreach ($this->collItemAddonItemsRelatedByInititemnbr as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion !== null) {
                if (!$this->itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion->isEmpty()) {
                    \ItemAddonItemQuery::create()
                        ->filterByPrimaryKeys($this->itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion = null;
                }
            }

            if ($this->collItemAddonItemsRelatedByAdonadditemnbr !== null) {
                foreach ($this->collItemAddonItemsRelatedByAdonadditemnbr as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->singleItmDimension !== null) {
                if (!$this->singleItmDimension->isDeleted() && ($this->singleItmDimension->isNew() || $this->singleItmDimension->isModified())) {
                    $affectedRows += $this->singleItmDimension->save($con);
                }
            }

            if ($this->singleInvHazmatItem !== null) {
                if (!$this->singleInvHazmatItem->isDeleted() && ($this->singleInvHazmatItem->isNew() || $this->singleInvHazmatItem->isModified())) {
                    $affectedRows += $this->singleInvHazmatItem->save($con);
                }
            }

            if ($this->invWhseLotsScheduledForDeletion !== null) {
                if (!$this->invWhseLotsScheduledForDeletion->isEmpty()) {
                    \InvWhseLotQuery::create()
                        ->filterByPrimaryKeys($this->invWhseLotsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invWhseLotsScheduledForDeletion = null;
                }
            }

            if ($this->collInvWhseLots !== null) {
                foreach ($this->collInvWhseLots as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemSubstitutesRelatedByInititemnbrScheduledForDeletion !== null) {
                if (!$this->itemSubstitutesRelatedByInititemnbrScheduledForDeletion->isEmpty()) {
                    \ItemSubstituteQuery::create()
                        ->filterByPrimaryKeys($this->itemSubstitutesRelatedByInititemnbrScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemSubstitutesRelatedByInititemnbrScheduledForDeletion = null;
                }
            }

            if ($this->collItemSubstitutesRelatedByInititemnbr !== null) {
                foreach ($this->collItemSubstitutesRelatedByInititemnbr as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion !== null) {
                if (!$this->itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion->isEmpty()) {
                    \ItemSubstituteQuery::create()
                        ->filterByPrimaryKeys($this->itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion = null;
                }
            }

            if ($this->collItemSubstitutesRelatedByInsisubitemnbr !== null) {
                foreach ($this->collItemSubstitutesRelatedByInsisubitemnbr as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invLotTagsScheduledForDeletion !== null) {
                if (!$this->invLotTagsScheduledForDeletion->isEmpty()) {
                    \InvLotTagQuery::create()
                        ->filterByPrimaryKeys($this->invLotTagsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invLotTagsScheduledForDeletion = null;
                }
            }

            if ($this->collInvLotTags !== null) {
                foreach ($this->collInvLotTags as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invItem2ItemsRelatedByI2imstritemidScheduledForDeletion !== null) {
                if (!$this->invItem2ItemsRelatedByI2imstritemidScheduledForDeletion->isEmpty()) {
                    \InvItem2ItemQuery::create()
                        ->filterByPrimaryKeys($this->invItem2ItemsRelatedByI2imstritemidScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invItem2ItemsRelatedByI2imstritemidScheduledForDeletion = null;
                }
            }

            if ($this->collInvItem2ItemsRelatedByI2imstritemid !== null) {
                foreach ($this->collInvItem2ItemsRelatedByI2imstritemid as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion !== null) {
                if (!$this->invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion->isEmpty()) {
                    \InvItem2ItemQuery::create()
                        ->filterByPrimaryKeys($this->invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion = null;
                }
            }

            if ($this->collInvItem2ItemsRelatedByI2ichilditemid !== null) {
                foreach ($this->collInvItem2ItemsRelatedByI2ichilditemid as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invKitComponentsScheduledForDeletion !== null) {
                if (!$this->invKitComponentsScheduledForDeletion->isEmpty()) {
                    \InvKitComponentQuery::create()
                        ->filterByPrimaryKeys($this->invKitComponentsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invKitComponentsScheduledForDeletion = null;
                }
            }

            if ($this->collInvKitComponents !== null) {
                foreach ($this->collInvKitComponents as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->singleInvKit !== null) {
                if (!$this->singleInvKit->isDeleted() && ($this->singleInvKit->isNew() || $this->singleInvKit->isModified())) {
                    $affectedRows += $this->singleInvKit->save($con);
                }
            }

            if ($this->invLotMastersScheduledForDeletion !== null) {
                if (!$this->invLotMastersScheduledForDeletion->isEmpty()) {
                    \InvLotMasterQuery::create()
                        ->filterByPrimaryKeys($this->invLotMastersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invLotMastersScheduledForDeletion = null;
                }
            }

            if ($this->collInvLotMasters !== null) {
                foreach ($this->collInvLotMasters as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invSerialMastersScheduledForDeletion !== null) {
                if (!$this->invSerialMastersScheduledForDeletion->isEmpty()) {
                    \InvSerialMasterQuery::create()
                        ->filterByPrimaryKeys($this->invSerialMastersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invSerialMastersScheduledForDeletion = null;
                }
            }

            if ($this->collInvSerialMasters !== null) {
                foreach ($this->collInvSerialMasters as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invTransferDetailsScheduledForDeletion !== null) {
                if (!$this->invTransferDetailsScheduledForDeletion->isEmpty()) {
                    \InvTransferDetailQuery::create()
                        ->filterByPrimaryKeys($this->invTransferDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invTransferDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collInvTransferDetails !== null) {
                foreach ($this->collInvTransferDetails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invTransferLotserialsScheduledForDeletion !== null) {
                if (!$this->invTransferLotserialsScheduledForDeletion->isEmpty()) {
                    \InvTransferLotserialQuery::create()
                        ->filterByPrimaryKeys($this->invTransferLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invTransferLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collInvTransferLotserials !== null) {
                foreach ($this->collInvTransferLotserials as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invTransferPreAllocatedLotserialsScheduledForDeletion !== null) {
                if (!$this->invTransferPreAllocatedLotserialsScheduledForDeletion->isEmpty()) {
                    \InvTransferPreAllocatedLotserialQuery::create()
                        ->filterByPrimaryKeys($this->invTransferPreAllocatedLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invTransferPreAllocatedLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collInvTransferPreAllocatedLotserials !== null) {
                foreach ($this->collInvTransferPreAllocatedLotserials as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invTransferPickedLotserialsScheduledForDeletion !== null) {
                if (!$this->invTransferPickedLotserialsScheduledForDeletion->isEmpty()) {
                    \InvTransferPickedLotserialQuery::create()
                        ->filterByPrimaryKeys($this->invTransferPickedLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invTransferPickedLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collInvTransferPickedLotserials !== null) {
                foreach ($this->collInvTransferPickedLotserials as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invSerialWarrantiesScheduledForDeletion !== null) {
                if (!$this->invSerialWarrantiesScheduledForDeletion->isEmpty()) {
                    \InvSerialWarrantyQuery::create()
                        ->filterByPrimaryKeys($this->invSerialWarrantiesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invSerialWarrantiesScheduledForDeletion = null;
                }
            }

            if ($this->collInvSerialWarranties !== null) {
                foreach ($this->collInvSerialWarranties as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->warehouseInventoriesScheduledForDeletion !== null) {
                if (!$this->warehouseInventoriesScheduledForDeletion->isEmpty()) {
                    \WarehouseInventoryQuery::create()
                        ->filterByPrimaryKeys($this->warehouseInventoriesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->warehouseInventoriesScheduledForDeletion = null;
                }
            }

            if ($this->collWarehouseInventories !== null) {
                foreach ($this->collWarehouseInventories as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemXrefKeysScheduledForDeletion !== null) {
                if (!$this->itemXrefKeysScheduledForDeletion->isEmpty()) {
                    \ItemXrefKeyQuery::create()
                        ->filterByPrimaryKeys($this->itemXrefKeysScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemXrefKeysScheduledForDeletion = null;
                }
            }

            if ($this->collItemXrefKeys !== null) {
                foreach ($this->collItemXrefKeys as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemXrefManufacturersScheduledForDeletion !== null) {
                if (!$this->itemXrefManufacturersScheduledForDeletion->isEmpty()) {
                    \ItemXrefManufacturerQuery::create()
                        ->filterByPrimaryKeys($this->itemXrefManufacturersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemXrefManufacturersScheduledForDeletion = null;
                }
            }

            if ($this->collItemXrefManufacturers !== null) {
                foreach ($this->collItemXrefManufacturers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemXrefCustomerNotesScheduledForDeletion !== null) {
                if (!$this->itemXrefCustomerNotesScheduledForDeletion->isEmpty()) {
                    foreach ($this->itemXrefCustomerNotesScheduledForDeletion as $itemXrefCustomerNote) {
                        // need to save related object because we set the relation to null
                        $itemXrefCustomerNote->save($con);
                    }
                    $this->itemXrefCustomerNotesScheduledForDeletion = null;
                }
            }

            if ($this->collItemXrefCustomerNotes !== null) {
                foreach ($this->collItemXrefCustomerNotes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invOptCodeNotesScheduledForDeletion !== null) {
                if (!$this->invOptCodeNotesScheduledForDeletion->isEmpty()) {
                    foreach ($this->invOptCodeNotesScheduledForDeletion as $invOptCodeNote) {
                        // need to save related object because we set the relation to null
                        $invOptCodeNote->save($con);
                    }
                    $this->invOptCodeNotesScheduledForDeletion = null;
                }
            }

            if ($this->collInvOptCodeNotes !== null) {
                foreach ($this->collInvOptCodeNotes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemXrefVendorNoteDetailsScheduledForDeletion !== null) {
                if (!$this->itemXrefVendorNoteDetailsScheduledForDeletion->isEmpty()) {
                    foreach ($this->itemXrefVendorNoteDetailsScheduledForDeletion as $itemXrefVendorNoteDetail) {
                        // need to save related object because we set the relation to null
                        $itemXrefVendorNoteDetail->save($con);
                    }
                    $this->itemXrefVendorNoteDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collItemXrefVendorNoteDetails !== null) {
                foreach ($this->collItemXrefVendorNoteDetails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemXrefVendorNoteInternalsScheduledForDeletion !== null) {
                if (!$this->itemXrefVendorNoteInternalsScheduledForDeletion->isEmpty()) {
                    foreach ($this->itemXrefVendorNoteInternalsScheduledForDeletion as $itemXrefVendorNoteInternal) {
                        // need to save related object because we set the relation to null
                        $itemXrefVendorNoteInternal->save($con);
                    }
                    $this->itemXrefVendorNoteInternalsScheduledForDeletion = null;
                }
            }

            if ($this->collItemXrefVendorNoteInternals !== null) {
                foreach ($this->collItemXrefVendorNoteInternals as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->invPalletsScheduledForDeletion !== null) {
                if (!$this->invPalletsScheduledForDeletion->isEmpty()) {
                    \InvPalletQuery::create()
                        ->filterByPrimaryKeys($this->invPalletsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->invPalletsScheduledForDeletion = null;
                }
            }

            if ($this->collInvPallets !== null) {
                foreach ($this->collInvPallets as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->purchaseOrderDetailsScheduledForDeletion !== null) {
                if (!$this->purchaseOrderDetailsScheduledForDeletion->isEmpty()) {
                    \PurchaseOrderDetailQuery::create()
                        ->filterByPrimaryKeys($this->purchaseOrderDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->purchaseOrderDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collPurchaseOrderDetails !== null) {
                foreach ($this->collPurchaseOrderDetails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->purchaseOrderDetailReceiptsScheduledForDeletion !== null) {
                if (!$this->purchaseOrderDetailReceiptsScheduledForDeletion->isEmpty()) {
                    \PurchaseOrderDetailReceiptQuery::create()
                        ->filterByPrimaryKeys($this->purchaseOrderDetailReceiptsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->purchaseOrderDetailReceiptsScheduledForDeletion = null;
                }
            }

            if ($this->collPurchaseOrderDetailReceipts !== null) {
                foreach ($this->collPurchaseOrderDetailReceipts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->purchaseOrderDetailReceivingsScheduledForDeletion !== null) {
                if (!$this->purchaseOrderDetailReceivingsScheduledForDeletion->isEmpty()) {
                    \PurchaseOrderDetailReceivingQuery::create()
                        ->filterByPrimaryKeys($this->purchaseOrderDetailReceivingsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->purchaseOrderDetailReceivingsScheduledForDeletion = null;
                }
            }

            if ($this->collPurchaseOrderDetailReceivings !== null) {
                foreach ($this->collPurchaseOrderDetailReceivings as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->purchaseOrderDetailLotReceivingsScheduledForDeletion !== null) {
                if (!$this->purchaseOrderDetailLotReceivingsScheduledForDeletion->isEmpty()) {
                    \PurchaseOrderDetailLotReceivingQuery::create()
                        ->filterByPrimaryKeys($this->purchaseOrderDetailLotReceivingsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->purchaseOrderDetailLotReceivingsScheduledForDeletion = null;
                }
            }

            if ($this->collPurchaseOrderDetailLotReceivings !== null) {
                foreach ($this->collPurchaseOrderDetailLotReceivings as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->bomComponentsScheduledForDeletion !== null) {
                if (!$this->bomComponentsScheduledForDeletion->isEmpty()) {
                    \BomComponentQuery::create()
                        ->filterByPrimaryKeys($this->bomComponentsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->bomComponentsScheduledForDeletion = null;
                }
            }

            if ($this->collBomComponents !== null) {
                foreach ($this->collBomComponents as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->singleBomItem !== null) {
                if (!$this->singleBomItem->isDeleted() && ($this->singleBomItem->isNew() || $this->singleBomItem->isModified())) {
                    $affectedRows += $this->singleBomItem->save($con);
                }
            }

            if ($this->bookingDetailsScheduledForDeletion !== null) {
                if (!$this->bookingDetailsScheduledForDeletion->isEmpty()) {
                    foreach ($this->bookingDetailsScheduledForDeletion as $bookingDetail) {
                        // need to save related object because we set the relation to null
                        $bookingDetail->save($con);
                    }
                    $this->bookingDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collBookingDetails !== null) {
                foreach ($this->collBookingDetails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->salesHistoryDetailsScheduledForDeletion !== null) {
                if (!$this->salesHistoryDetailsScheduledForDeletion->isEmpty()) {
                    \SalesHistoryDetailQuery::create()
                        ->filterByPrimaryKeys($this->salesHistoryDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->salesHistoryDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collSalesHistoryDetails !== null) {
                foreach ($this->collSalesHistoryDetails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->salesOrderDetailsScheduledForDeletion !== null) {
                if (!$this->salesOrderDetailsScheduledForDeletion->isEmpty()) {
                    \SalesOrderDetailQuery::create()
                        ->filterByPrimaryKeys($this->salesOrderDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->salesOrderDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collSalesOrderDetails !== null) {
                foreach ($this->collSalesOrderDetails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->salesOrderLotserialsScheduledForDeletion !== null) {
                if (!$this->salesOrderLotserialsScheduledForDeletion->isEmpty()) {
                    \SalesOrderLotserialQuery::create()
                        ->filterByPrimaryKeys($this->salesOrderLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->salesOrderLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collSalesOrderLotserials !== null) {
                foreach ($this->collSalesOrderLotserials as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->salesHistoryLotserialsScheduledForDeletion !== null) {
                if (!$this->salesHistoryLotserialsScheduledForDeletion->isEmpty()) {
                    \SalesHistoryLotserialQuery::create()
                        ->filterByPrimaryKeys($this->salesHistoryLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->salesHistoryLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collSalesHistoryLotserials !== null) {
                foreach ($this->collSalesHistoryLotserials as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->soAllocatedLotserialsScheduledForDeletion !== null) {
                if (!$this->soAllocatedLotserialsScheduledForDeletion->isEmpty()) {
                    \SoAllocatedLotserialQuery::create()
                        ->filterByPrimaryKeys($this->soAllocatedLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->soAllocatedLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collSoAllocatedLotserials !== null) {
                foreach ($this->collSoAllocatedLotserials as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemPricingDiscountsScheduledForDeletion !== null) {
                if (!$this->itemPricingDiscountsScheduledForDeletion->isEmpty()) {
                    \ItemPricingDiscountQuery::create()
                        ->filterByPrimaryKeys($this->itemPricingDiscountsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemPricingDiscountsScheduledForDeletion = null;
                }
            }

            if ($this->collItemPricingDiscounts !== null) {
                foreach ($this->collItemPricingDiscounts as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->soPickedLotserialsScheduledForDeletion !== null) {
                if (!$this->soPickedLotserialsScheduledForDeletion->isEmpty()) {
                    \SoPickedLotserialQuery::create()
                        ->filterByPrimaryKeys($this->soPickedLotserialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->soPickedLotserialsScheduledForDeletion = null;
                }
            }

            if ($this->collSoPickedLotserials !== null) {
                foreach ($this->collSoPickedLotserials as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->soStandingOrderDetailsScheduledForDeletion !== null) {
                if (!$this->soStandingOrderDetailsScheduledForDeletion->isEmpty()) {
                    \SoStandingOrderDetailQuery::create()
                        ->filterByPrimaryKeys($this->soStandingOrderDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->soStandingOrderDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collSoStandingOrderDetails !== null) {
                foreach ($this->collSoStandingOrderDetails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemXrefUpcsScheduledForDeletion !== null) {
                if (!$this->itemXrefUpcsScheduledForDeletion->isEmpty()) {
                    \ItemXrefUpcQuery::create()
                        ->filterByPrimaryKeys($this->itemXrefUpcsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemXrefUpcsScheduledForDeletion = null;
                }
            }

            if ($this->collItemXrefUpcs !== null) {
                foreach ($this->collItemXrefUpcs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->itemXrefVendorsScheduledForDeletion !== null) {
                if (!$this->itemXrefVendorsScheduledForDeletion->isEmpty()) {
                    \ItemXrefVendorQuery::create()
                        ->filterByPrimaryKeys($this->itemXrefVendorsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->itemXrefVendorsScheduledForDeletion = null;
                }
            }

            if ($this->collItemXrefVendors !== null) {
                foreach ($this->collItemXrefVendors as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @throws PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con)
    {
        $modifiedColumns = array();
        $index = 0;


         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITDESC1)) {
            $modifiedColumns[':p' . $index++]  = 'InitDesc1';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITDESC2)) {
            $modifiedColumns[':p' . $index++]  = 'InitDesc2';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'IntbGrup';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITFORMATCODE)) {
            $modifiedColumns[':p' . $index++]  = 'InitFormatCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSPLIT)) {
            $modifiedColumns[':p' . $index++]  = 'InitSplit';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSHERDATECD)) {
            $modifiedColumns[':p' . $index++]  = 'InitSherDateCd';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCOREYN)) {
            $modifiedColumns[':p' . $index++]  = 'InitCoreYN';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUSERCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUserCode1';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUSERCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUserCode2';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'InitType';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITTAX)) {
            $modifiedColumns[':p' . $index++]  = 'InitTax';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITRTLPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'InitRtlPric';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTATCHGD)) {
            $modifiedColumns[':p' . $index++]  = 'InitStatChgd';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSPECITEMCD)) {
            $modifiedColumns[':p' . $index++]  = 'InitSpecItemCd';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITWARRDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'InitWarrDays';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUOMSALE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomSale';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'InitWght';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITBORD)) {
            $modifiedColumns[':p' . $index++]  = 'InitBord';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITBASEITEMID)) {
            $modifiedColumns[':p' . $index++]  = 'InitBaseItemId';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSPECIFICCUST)) {
            $modifiedColumns[':p' . $index++]  = 'InitSpecificCust';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITGIVEDISC)) {
            $modifiedColumns[':p' . $index++]  = 'InitGiveDisc';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITASSTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'InitAsstCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPRICLASTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InitPricLastDate';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUOMPUR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomPur';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTANCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InitStanCost';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTANCOSTBASE)) {
            $modifiedColumns[':p' . $index++]  = 'InitStanCostBase';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTANCOSTLASTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InitStanCostLastDate';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITMINMARG)) {
            $modifiedColumns[':p' . $index++]  = 'InitMinMarg';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'InitVendId';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITINSPECT)) {
            $modifiedColumns[':p' . $index++]  = 'InitInspect';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTOCKCODE)) {
            $modifiedColumns[':p' . $index++]  = 'InitStockCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSUPRITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitSuprItemNbr';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITVENDSHIPFROM)) {
            $modifiedColumns[':p' . $index++]  = 'InitVendShipFrom';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCNTRYOFORIGIN)) {
            $modifiedColumns[':p' . $index++]  = 'InitCntryOfOrigin';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITASSTQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InitAsstQty';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBTARIFFCODE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbTariffCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPREFERENCE)) {
            $modifiedColumns[':p' . $index++]  = 'InitPreference';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPRODUCER)) {
            $modifiedColumns[':p' . $index++]  = 'InitProducer';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITDOCUMENTATION)) {
            $modifiedColumns[':p' . $index++]  = 'InitDocumentation';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPURCHCRTNQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InitPurchCrtnQty';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_APTBBUYRCODE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbBuyrCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITLASTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InitLastCost';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITLITERS)) {
            $modifiedColumns[':p' . $index++]  = 'InitLiters';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBMSDSCODE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbMsdsCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITREQUIREFRT)) {
            $modifiedColumns[':p' . $index++]  = 'InitRequireFrt';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITMFRTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'InitMfrtCode';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITINNERPACKQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InitInnerPackQty';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITOUTERPACKQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InitOuterPackQty';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITBASESTANCOST)) {
            $modifiedColumns[':p' . $index++]  = 'InitBaseStanCost';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSHIPTAREQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InitShipTareQty';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITWGITEM)) {
            $modifiedColumns[':p' . $index++]  = 'InitWgItem';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBPRICGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'IntbPricGrup';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBCOMMGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCommGrup';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITLASTCOSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'InitLastCostDate';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITQTYPERCASE)) {
            $modifiedColumns[':p' . $index++]  = 'InitQtyPerCase';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITREVISION)) {
            $modifiedColumns[':p' . $index++]  = 'InitRevision';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCOMMSALEQTY)) {
            $modifiedColumns[':p' . $index++]  = 'InitCommSaleQty';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCUBES)) {
            $modifiedColumns[':p' . $index++]  = 'InitCubes';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITTIMEFENCE)) {
            $modifiedColumns[':p' . $index++]  = 'InitTimeFence';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSRVCMINCHRG)) {
            $modifiedColumns[':p' . $index++]  = 'InitSrvcMinChrg';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITMINMARGBASE)) {
            $modifiedColumns[':p' . $index++]  = 'InitMinMargBase';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO inv_item_mast (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'InitDesc1':
                        $stmt->bindValue($identifier, $this->initdesc1, PDO::PARAM_STR);
                        break;
                    case 'InitDesc2':
                        $stmt->bindValue($identifier, $this->initdesc2, PDO::PARAM_STR);
                        break;
                    case 'IntbGrup':
                        $stmt->bindValue($identifier, $this->intbgrup, PDO::PARAM_STR);
                        break;
                    case 'InitFormatCode':
                        $stmt->bindValue($identifier, $this->initformatcode, PDO::PARAM_STR);
                        break;
                    case 'InitSplit':
                        $stmt->bindValue($identifier, $this->initsplit, PDO::PARAM_STR);
                        break;
                    case 'InitSherDateCd':
                        $stmt->bindValue($identifier, $this->initsherdatecd, PDO::PARAM_STR);
                        break;
                    case 'InitCoreYN':
                        $stmt->bindValue($identifier, $this->initcoreyn, PDO::PARAM_STR);
                        break;
                    case 'IntbUserCode1':
                        $stmt->bindValue($identifier, $this->intbusercode1, PDO::PARAM_STR);
                        break;
                    case 'IntbUserCode2':
                        $stmt->bindValue($identifier, $this->intbusercode2, PDO::PARAM_STR);
                        break;
                    case 'InitType':
                        $stmt->bindValue($identifier, $this->inittype, PDO::PARAM_STR);
                        break;
                    case 'InitTax':
                        $stmt->bindValue($identifier, $this->inittax, PDO::PARAM_STR);
                        break;
                    case 'InitRtlPric':
                        $stmt->bindValue($identifier, $this->initrtlpric, PDO::PARAM_STR);
                        break;
                    case 'InitStatChgd':
                        $stmt->bindValue($identifier, $this->initstatchgd, PDO::PARAM_STR);
                        break;
                    case 'InitSpecItemCd':
                        $stmt->bindValue($identifier, $this->initspecitemcd, PDO::PARAM_STR);
                        break;
                    case 'InitWarrDays':
                        $stmt->bindValue($identifier, $this->initwarrdays, PDO::PARAM_INT);
                        break;
                    case 'IntbUomSale':
                        $stmt->bindValue($identifier, $this->intbuomsale, PDO::PARAM_STR);
                        break;
                    case 'InitWght':
                        $stmt->bindValue($identifier, $this->initwght, PDO::PARAM_STR);
                        break;
                    case 'InitBord':
                        $stmt->bindValue($identifier, $this->initbord, PDO::PARAM_STR);
                        break;
                    case 'InitBaseItemId':
                        $stmt->bindValue($identifier, $this->initbaseitemid, PDO::PARAM_STR);
                        break;
                    case 'InitSpecificCust':
                        $stmt->bindValue($identifier, $this->initspecificcust, PDO::PARAM_STR);
                        break;
                    case 'InitGiveDisc':
                        $stmt->bindValue($identifier, $this->initgivedisc, PDO::PARAM_STR);
                        break;
                    case 'InitAsstCode':
                        $stmt->bindValue($identifier, $this->initasstcode, PDO::PARAM_STR);
                        break;
                    case 'InitPricLastDate':
                        $stmt->bindValue($identifier, $this->initpriclastdate, PDO::PARAM_STR);
                        break;
                    case 'IntbUomPur':
                        $stmt->bindValue($identifier, $this->intbuompur, PDO::PARAM_STR);
                        break;
                    case 'InitStanCost':
                        $stmt->bindValue($identifier, $this->initstancost, PDO::PARAM_STR);
                        break;
                    case 'InitStanCostBase':
                        $stmt->bindValue($identifier, $this->initstancostbase, PDO::PARAM_STR);
                        break;
                    case 'InitStanCostLastDate':
                        $stmt->bindValue($identifier, $this->initstancostlastdate, PDO::PARAM_STR);
                        break;
                    case 'InitMinMarg':
                        $stmt->bindValue($identifier, $this->initminmarg, PDO::PARAM_STR);
                        break;
                    case 'InitVendId':
                        $stmt->bindValue($identifier, $this->initvendid, PDO::PARAM_STR);
                        break;
                    case 'InitInspect':
                        $stmt->bindValue($identifier, $this->initinspect, PDO::PARAM_STR);
                        break;
                    case 'InitStockCode':
                        $stmt->bindValue($identifier, $this->initstockcode, PDO::PARAM_STR);
                        break;
                    case 'InitSuprItemNbr':
                        $stmt->bindValue($identifier, $this->initsupritemnbr, PDO::PARAM_STR);
                        break;
                    case 'InitVendShipFrom':
                        $stmt->bindValue($identifier, $this->initvendshipfrom, PDO::PARAM_STR);
                        break;
                    case 'InitCntryOfOrigin':
                        $stmt->bindValue($identifier, $this->initcntryoforigin, PDO::PARAM_STR);
                        break;
                    case 'InitAsstQty':
                        $stmt->bindValue($identifier, $this->initasstqty, PDO::PARAM_STR);
                        break;
                    case 'IntbTariffCode':
                        $stmt->bindValue($identifier, $this->intbtariffcode, PDO::PARAM_STR);
                        break;
                    case 'InitPreference':
                        $stmt->bindValue($identifier, $this->initpreference, PDO::PARAM_STR);
                        break;
                    case 'InitProducer':
                        $stmt->bindValue($identifier, $this->initproducer, PDO::PARAM_STR);
                        break;
                    case 'InitDocumentation':
                        $stmt->bindValue($identifier, $this->initdocumentation, PDO::PARAM_STR);
                        break;
                    case 'InitPurchCrtnQty':
                        $stmt->bindValue($identifier, $this->initpurchcrtnqty, PDO::PARAM_INT);
                        break;
                    case 'AptbBuyrCode':
                        $stmt->bindValue($identifier, $this->aptbbuyrcode, PDO::PARAM_STR);
                        break;
                    case 'InitLastCost':
                        $stmt->bindValue($identifier, $this->initlastcost, PDO::PARAM_STR);
                        break;
                    case 'InitLiters':
                        $stmt->bindValue($identifier, $this->initliters, PDO::PARAM_STR);
                        break;
                    case 'IntbMsdsCode':
                        $stmt->bindValue($identifier, $this->intbmsdscode, PDO::PARAM_STR);
                        break;
                    case 'InitRequireFrt':
                        $stmt->bindValue($identifier, $this->initrequirefrt, PDO::PARAM_STR);
                        break;
                    case 'InitMfrtCode':
                        $stmt->bindValue($identifier, $this->initmfrtcode, PDO::PARAM_STR);
                        break;
                    case 'InitInnerPackQty':
                        $stmt->bindValue($identifier, $this->initinnerpackqty, PDO::PARAM_INT);
                        break;
                    case 'InitOuterPackQty':
                        $stmt->bindValue($identifier, $this->initouterpackqty, PDO::PARAM_INT);
                        break;
                    case 'InitBaseStanCost':
                        $stmt->bindValue($identifier, $this->initbasestancost, PDO::PARAM_STR);
                        break;
                    case 'InitShipTareQty':
                        $stmt->bindValue($identifier, $this->initshiptareqty, PDO::PARAM_INT);
                        break;
                    case 'InitWgItem':
                        $stmt->bindValue($identifier, $this->initwgitem, PDO::PARAM_STR);
                        break;
                    case 'IntbPricGrup':
                        $stmt->bindValue($identifier, $this->intbpricgrup, PDO::PARAM_STR);
                        break;
                    case 'IntbCommGrup':
                        $stmt->bindValue($identifier, $this->intbcommgrup, PDO::PARAM_STR);
                        break;
                    case 'InitLastCostDate':
                        $stmt->bindValue($identifier, $this->initlastcostdate, PDO::PARAM_STR);
                        break;
                    case 'InitQtyPerCase':
                        $stmt->bindValue($identifier, $this->initqtypercase, PDO::PARAM_INT);
                        break;
                    case 'InitRevision':
                        $stmt->bindValue($identifier, $this->initrevision, PDO::PARAM_STR);
                        break;
                    case 'InitCommSaleQty':
                        $stmt->bindValue($identifier, $this->initcommsaleqty, PDO::PARAM_INT);
                        break;
                    case 'InitCubes':
                        $stmt->bindValue($identifier, $this->initcubes, PDO::PARAM_STR);
                        break;
                    case 'InitTimeFence':
                        $stmt->bindValue($identifier, $this->inittimefence, PDO::PARAM_INT);
                        break;
                    case 'InitSrvcMinChrg':
                        $stmt->bindValue($identifier, $this->initsrvcminchrg, PDO::PARAM_STR);
                        break;
                    case 'InitMinMargBase':
                        $stmt->bindValue($identifier, $this->initminmargbase, PDO::PARAM_STR);
                        break;
                    case 'DateUpdtd':
                        $stmt->bindValue($identifier, $this->dateupdtd, PDO::PARAM_STR);
                        break;
                    case 'TimeUpdtd':
                        $stmt->bindValue($identifier, $this->timeupdtd, PDO::PARAM_STR);
                        break;
                    case 'dummy':
                        $stmt->bindValue($identifier, $this->dummy, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param      ConnectionInterface $con
     *
     * @return Integer Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_PHPNAME.
     * @return mixed Value of field.
     */
    public function getByName($name, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ItemMasterItemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getInititemnbr();
                break;
            case 1:
                return $this->getInitdesc1();
                break;
            case 2:
                return $this->getInitdesc2();
                break;
            case 3:
                return $this->getIntbgrup();
                break;
            case 4:
                return $this->getInitformatcode();
                break;
            case 5:
                return $this->getInitsplit();
                break;
            case 6:
                return $this->getInitsherdatecd();
                break;
            case 7:
                return $this->getInitcoreyn();
                break;
            case 8:
                return $this->getIntbusercode1();
                break;
            case 9:
                return $this->getIntbusercode2();
                break;
            case 10:
                return $this->getInittype();
                break;
            case 11:
                return $this->getInittax();
                break;
            case 12:
                return $this->getInitrtlpric();
                break;
            case 13:
                return $this->getInitstatchgd();
                break;
            case 14:
                return $this->getInitspecitemcd();
                break;
            case 15:
                return $this->getInitwarrdays();
                break;
            case 16:
                return $this->getIntbuomsale();
                break;
            case 17:
                return $this->getInitwght();
                break;
            case 18:
                return $this->getInitbord();
                break;
            case 19:
                return $this->getInitbaseitemid();
                break;
            case 20:
                return $this->getInitspecificcust();
                break;
            case 21:
                return $this->getInitgivedisc();
                break;
            case 22:
                return $this->getInitasstcode();
                break;
            case 23:
                return $this->getInitpriclastdate();
                break;
            case 24:
                return $this->getIntbuompur();
                break;
            case 25:
                return $this->getInitstancost();
                break;
            case 26:
                return $this->getInitstancostbase();
                break;
            case 27:
                return $this->getInitstancostlastdate();
                break;
            case 28:
                return $this->getInitminmarg();
                break;
            case 29:
                return $this->getInitvendid();
                break;
            case 30:
                return $this->getInitinspect();
                break;
            case 31:
                return $this->getInitstockcode();
                break;
            case 32:
                return $this->getInitsupritemnbr();
                break;
            case 33:
                return $this->getInitvendshipfrom();
                break;
            case 34:
                return $this->getInitcntryoforigin();
                break;
            case 35:
                return $this->getInitasstqty();
                break;
            case 36:
                return $this->getIntbtariffcode();
                break;
            case 37:
                return $this->getInitpreference();
                break;
            case 38:
                return $this->getInitproducer();
                break;
            case 39:
                return $this->getInitdocumentation();
                break;
            case 40:
                return $this->getInitpurchcrtnqty();
                break;
            case 41:
                return $this->getAptbbuyrcode();
                break;
            case 42:
                return $this->getInitlastcost();
                break;
            case 43:
                return $this->getInitliters();
                break;
            case 44:
                return $this->getIntbmsdscode();
                break;
            case 45:
                return $this->getInitrequirefrt();
                break;
            case 46:
                return $this->getInitmfrtcode();
                break;
            case 47:
                return $this->getInitinnerpackqty();
                break;
            case 48:
                return $this->getInitouterpackqty();
                break;
            case 49:
                return $this->getInitbasestancost();
                break;
            case 50:
                return $this->getInitshiptareqty();
                break;
            case 51:
                return $this->getInitwgitem();
                break;
            case 52:
                return $this->getIntbpricgrup();
                break;
            case 53:
                return $this->getIntbcommgrup();
                break;
            case 54:
                return $this->getInitlastcostdate();
                break;
            case 55:
                return $this->getInitqtypercase();
                break;
            case 56:
                return $this->getInitrevision();
                break;
            case 57:
                return $this->getInitcommsaleqty();
                break;
            case 58:
                return $this->getInitcubes();
                break;
            case 59:
                return $this->getInittimefence();
                break;
            case 60:
                return $this->getInitsrvcminchrg();
                break;
            case 61:
                return $this->getInitMinMargBase();
                break;
            case 62:
                return $this->getDateupdtd();
                break;
            case 63:
                return $this->getTimeupdtd();
                break;
            case 64:
                return $this->getDummy();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {

        if (isset($alreadyDumpedObjects['ItemMasterItem'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ItemMasterItem'][$this->hashCode()] = true;
        $keys = ItemMasterItemTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getInititemnbr(),
            $keys[1] => $this->getInitdesc1(),
            $keys[2] => $this->getInitdesc2(),
            $keys[3] => $this->getIntbgrup(),
            $keys[4] => $this->getInitformatcode(),
            $keys[5] => $this->getInitsplit(),
            $keys[6] => $this->getInitsherdatecd(),
            $keys[7] => $this->getInitcoreyn(),
            $keys[8] => $this->getIntbusercode1(),
            $keys[9] => $this->getIntbusercode2(),
            $keys[10] => $this->getInittype(),
            $keys[11] => $this->getInittax(),
            $keys[12] => $this->getInitrtlpric(),
            $keys[13] => $this->getInitstatchgd(),
            $keys[14] => $this->getInitspecitemcd(),
            $keys[15] => $this->getInitwarrdays(),
            $keys[16] => $this->getIntbuomsale(),
            $keys[17] => $this->getInitwght(),
            $keys[18] => $this->getInitbord(),
            $keys[19] => $this->getInitbaseitemid(),
            $keys[20] => $this->getInitspecificcust(),
            $keys[21] => $this->getInitgivedisc(),
            $keys[22] => $this->getInitasstcode(),
            $keys[23] => $this->getInitpriclastdate(),
            $keys[24] => $this->getIntbuompur(),
            $keys[25] => $this->getInitstancost(),
            $keys[26] => $this->getInitstancostbase(),
            $keys[27] => $this->getInitstancostlastdate(),
            $keys[28] => $this->getInitminmarg(),
            $keys[29] => $this->getInitvendid(),
            $keys[30] => $this->getInitinspect(),
            $keys[31] => $this->getInitstockcode(),
            $keys[32] => $this->getInitsupritemnbr(),
            $keys[33] => $this->getInitvendshipfrom(),
            $keys[34] => $this->getInitcntryoforigin(),
            $keys[35] => $this->getInitasstqty(),
            $keys[36] => $this->getIntbtariffcode(),
            $keys[37] => $this->getInitpreference(),
            $keys[38] => $this->getInitproducer(),
            $keys[39] => $this->getInitdocumentation(),
            $keys[40] => $this->getInitpurchcrtnqty(),
            $keys[41] => $this->getAptbbuyrcode(),
            $keys[42] => $this->getInitlastcost(),
            $keys[43] => $this->getInitliters(),
            $keys[44] => $this->getIntbmsdscode(),
            $keys[45] => $this->getInitrequirefrt(),
            $keys[46] => $this->getInitmfrtcode(),
            $keys[47] => $this->getInitinnerpackqty(),
            $keys[48] => $this->getInitouterpackqty(),
            $keys[49] => $this->getInitbasestancost(),
            $keys[50] => $this->getInitshiptareqty(),
            $keys[51] => $this->getInitwgitem(),
            $keys[52] => $this->getIntbpricgrup(),
            $keys[53] => $this->getIntbcommgrup(),
            $keys[54] => $this->getInitlastcostdate(),
            $keys[55] => $this->getInitqtypercase(),
            $keys[56] => $this->getInitrevision(),
            $keys[57] => $this->getInitcommsaleqty(),
            $keys[58] => $this->getInitcubes(),
            $keys[59] => $this->getInittimefence(),
            $keys[60] => $this->getInitsrvcminchrg(),
            $keys[61] => $this->getInitMinMargBase(),
            $keys[62] => $this->getDateupdtd(),
            $keys[63] => $this->getTimeupdtd(),
            $keys[64] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aUnitofMeasureSale) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'unitofMeasureSale';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_uom_sale';
                        break;
                    default:
                        $key = 'UnitofMeasureSale';
                }

                $result[$key] = $this->aUnitofMeasureSale->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aUnitofMeasurePurchase) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'unitofMeasurePurchase';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_uom_pur';
                        break;
                    default:
                        $key = 'UnitofMeasurePurchase';
                }

                $result[$key] = $this->aUnitofMeasurePurchase->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aInvGroupCode) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invGroupCode';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_grup_code';
                        break;
                    default:
                        $key = 'InvGroupCode';
                }

                $result[$key] = $this->aInvGroupCode->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aInvPriceCode) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invPriceCode';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_pric_code';
                        break;
                    default:
                        $key = 'InvPriceCode';
                }

                $result[$key] = $this->aInvPriceCode->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aInvCommissionCode) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invCommissionCode';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_comm_code';
                        break;
                    default:
                        $key = 'InvCommissionCode';
                }

                $result[$key] = $this->aInvCommissionCode->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aItemPricing) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemPricing';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_item_price';
                        break;
                    default:
                        $key = 'ItemPricing';
                }

                $result[$key] = $this->aItemPricing->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collItemXrefCustomers) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemXrefCustomers';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'cust_item_xrefs';
                        break;
                    default:
                        $key = 'ItemXrefCustomers';
                }

                $result[$key] = $this->collItemXrefCustomers->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvWhseItemBins) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invWhseItemBins';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_bin_areas';
                        break;
                    default:
                        $key = 'InvWhseItemBins';
                }

                $result[$key] = $this->collInvWhseItemBins->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemAddonItemsRelatedByInititemnbr) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemAddonItems';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_inv_addons';
                        break;
                    default:
                        $key = 'ItemAddonItems';
                }

                $result[$key] = $this->collItemAddonItemsRelatedByInititemnbr->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemAddonItemsRelatedByAdonadditemnbr) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemAddonItems';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_inv_addons';
                        break;
                    default:
                        $key = 'ItemAddonItems';
                }

                $result[$key] = $this->collItemAddonItemsRelatedByAdonadditemnbr->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->singleItmDimension) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itmDimension';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_inv_dimen';
                        break;
                    default:
                        $key = 'ItmDimension';
                }

                $result[$key] = $this->singleItmDimension->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
            }
            if (null !== $this->singleInvHazmatItem) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invHazmatItem';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_inv_hazmat';
                        break;
                    default:
                        $key = 'InvHazmatItem';
                }

                $result[$key] = $this->singleInvHazmatItem->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
            }
            if (null !== $this->collInvWhseLots) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invWhseLots';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_inv_lots';
                        break;
                    default:
                        $key = 'InvWhseLots';
                }

                $result[$key] = $this->collInvWhseLots->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemSubstitutesRelatedByInititemnbr) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemSubstitutes';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_inv_subs';
                        break;
                    default:
                        $key = 'ItemSubstitutes';
                }

                $result[$key] = $this->collItemSubstitutesRelatedByInititemnbr->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemSubstitutesRelatedByInsisubitemnbr) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemSubstitutes';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_inv_subs';
                        break;
                    default:
                        $key = 'ItemSubstitutes';
                }

                $result[$key] = $this->collItemSubstitutesRelatedByInsisubitemnbr->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvLotTags) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invLotTags';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_inv_tags';
                        break;
                    default:
                        $key = 'InvLotTags';
                }

                $result[$key] = $this->collInvLotTags->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvItem2ItemsRelatedByI2imstritemid) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invItem2Items';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_item_2_items';
                        break;
                    default:
                        $key = 'InvItem2Items';
                }

                $result[$key] = $this->collInvItem2ItemsRelatedByI2imstritemid->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvItem2ItemsRelatedByI2ichilditemid) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invItem2Items';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_item_2_items';
                        break;
                    default:
                        $key = 'InvItem2Items';
                }

                $result[$key] = $this->collInvItem2ItemsRelatedByI2ichilditemid->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvKitComponents) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invKitComponents';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_kit_details';
                        break;
                    default:
                        $key = 'InvKitComponents';
                }

                $result[$key] = $this->collInvKitComponents->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->singleInvKit) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invKit';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_kit_head';
                        break;
                    default:
                        $key = 'InvKit';
                }

                $result[$key] = $this->singleInvKit->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
            }
            if (null !== $this->collInvLotMasters) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invLotMasters';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_lot_masts';
                        break;
                    default:
                        $key = 'InvLotMasters';
                }

                $result[$key] = $this->collInvLotMasters->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvSerialMasters) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invSerialMasters';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_ser_masts';
                        break;
                    default:
                        $key = 'InvSerialMasters';
                }

                $result[$key] = $this->collInvSerialMasters->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvTransferDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_dets';
                        break;
                    default:
                        $key = 'InvTransferDetails';
                }

                $result[$key] = $this->collInvTransferDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvTransferLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_lotsers';
                        break;
                    default:
                        $key = 'InvTransferLotserials';
                }

                $result[$key] = $this->collInvTransferLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvTransferPreAllocatedLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferPreAllocatedLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_pre_allos';
                        break;
                    default:
                        $key = 'InvTransferPreAllocatedLotserials';
                }

                $result[$key] = $this->collInvTransferPreAllocatedLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvTransferPickedLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invTransferPickedLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_trans_pulleds';
                        break;
                    default:
                        $key = 'InvTransferPickedLotserials';
                }

                $result[$key] = $this->collInvTransferPickedLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvSerialWarranties) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invSerialWarranties';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_war_masts';
                        break;
                    default:
                        $key = 'InvSerialWarranties';
                }

                $result[$key] = $this->collInvSerialWarranties->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collWarehouseInventories) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'warehouseInventories';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_whse_masts';
                        break;
                    default:
                        $key = 'WarehouseInventories';
                }

                $result[$key] = $this->collWarehouseInventories->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemXrefKeys) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemXrefKeys';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'item_xref_keys';
                        break;
                    default:
                        $key = 'ItemXrefKeys';
                }

                $result[$key] = $this->collItemXrefKeys->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemXrefManufacturers) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemXrefManufacturers';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'mfcp_item_xrefs';
                        break;
                    default:
                        $key = 'ItemXrefManufacturers';
                }

                $result[$key] = $this->collItemXrefManufacturers->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemXrefCustomerNotes) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemXrefCustomerNotes';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'notes_item_cust_xrefs';
                        break;
                    default:
                        $key = 'ItemXrefCustomerNotes';
                }

                $result[$key] = $this->collItemXrefCustomerNotes->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvOptCodeNotes) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invOptCodeNotes';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'notes_opt_code_ins';
                        break;
                    default:
                        $key = 'InvOptCodeNotes';
                }

                $result[$key] = $this->collInvOptCodeNotes->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemXrefVendorNoteDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemXrefVendorNoteDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'notes_vend_xref_dets';
                        break;
                    default:
                        $key = 'ItemXrefVendorNoteDetails';
                }

                $result[$key] = $this->collItemXrefVendorNoteDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemXrefVendorNoteInternals) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemXrefVendorNoteInternals';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'notes_vend_xref_internals';
                        break;
                    default:
                        $key = 'ItemXrefVendorNoteInternals';
                }

                $result[$key] = $this->collItemXrefVendorNoteInternals->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collInvPallets) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'invPallets';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'pallet_headers';
                        break;
                    default:
                        $key = 'InvPallets';
                }

                $result[$key] = $this->collInvPallets->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPurchaseOrderDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrderDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_details';
                        break;
                    default:
                        $key = 'PurchaseOrderDetails';
                }

                $result[$key] = $this->collPurchaseOrderDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPurchaseOrderDetailReceipts) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrderDetailReceipts';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_receipt_dets';
                        break;
                    default:
                        $key = 'PurchaseOrderDetailReceipts';
                }

                $result[$key] = $this->collPurchaseOrderDetailReceipts->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPurchaseOrderDetailReceivings) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrderDetailReceivings';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_tran_dets';
                        break;
                    default:
                        $key = 'PurchaseOrderDetailReceivings';
                }

                $result[$key] = $this->collPurchaseOrderDetailReceivings->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPurchaseOrderDetailLotReceivings) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrderDetailLotReceivings';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_tran_lot_dets';
                        break;
                    default:
                        $key = 'PurchaseOrderDetailLotReceivings';
                }

                $result[$key] = $this->collPurchaseOrderDetailLotReceivings->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collBomComponents) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'bomComponents';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'pr_bmat_dets';
                        break;
                    default:
                        $key = 'BomComponents';
                }

                $result[$key] = $this->collBomComponents->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->singleBomItem) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'bomItem';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'pr_bmat_head';
                        break;
                    default:
                        $key = 'BomItem';
                }

                $result[$key] = $this->singleBomItem->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
            }
            if (null !== $this->collBookingDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'bookingDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_book_log_dets';
                        break;
                    default:
                        $key = 'BookingDetails';
                }

                $result[$key] = $this->collBookingDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSalesHistoryDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesHistoryDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_det_hists';
                        break;
                    default:
                        $key = 'SalesHistoryDetails';
                }

                $result[$key] = $this->collSalesHistoryDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSalesOrderDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesOrderDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_details';
                        break;
                    default:
                        $key = 'SalesOrderDetails';
                }

                $result[$key] = $this->collSalesOrderDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSalesOrderLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesOrderLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_lot_sers';
                        break;
                    default:
                        $key = 'SalesOrderLotserials';
                }

                $result[$key] = $this->collSalesOrderLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSalesHistoryLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesHistoryLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_lot_ser_hists';
                        break;
                    default:
                        $key = 'SalesHistoryLotserials';
                }

                $result[$key] = $this->collSalesHistoryLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSoAllocatedLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'soAllocatedLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_pre_allos';
                        break;
                    default:
                        $key = 'SoAllocatedLotserials';
                }

                $result[$key] = $this->collSoAllocatedLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemPricingDiscounts) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemPricingDiscounts';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_price_discounts';
                        break;
                    default:
                        $key = 'ItemPricingDiscounts';
                }

                $result[$key] = $this->collItemPricingDiscounts->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSoPickedLotserials) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'soPickedLotserials';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_pulleds';
                        break;
                    default:
                        $key = 'SoPickedLotserials';
                }

                $result[$key] = $this->collSoPickedLotserials->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSoStandingOrderDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'soStandingOrderDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_stand_dets';
                        break;
                    default:
                        $key = 'SoStandingOrderDetails';
                }

                $result[$key] = $this->collSoStandingOrderDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemXrefUpcs) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemXrefUpcs';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'upc_item_xrefs';
                        break;
                    default:
                        $key = 'ItemXrefUpcs';
                }

                $result[$key] = $this->collItemXrefUpcs->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collItemXrefVendors) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemXrefVendors';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'vend_item_xrefs';
                        break;
                    default:
                        $key = 'ItemXrefVendors';
                }

                $result[$key] = $this->collItemXrefVendors->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param  string $name
     * @param  mixed  $value field value
     * @param  string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_PHPNAME.
     * @return $this|\ItemMasterItem
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ItemMasterItemTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ItemMasterItem
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setInititemnbr($value);
                break;
            case 1:
                $this->setInitdesc1($value);
                break;
            case 2:
                $this->setInitdesc2($value);
                break;
            case 3:
                $this->setIntbgrup($value);
                break;
            case 4:
                $this->setInitformatcode($value);
                break;
            case 5:
                $this->setInitsplit($value);
                break;
            case 6:
                $this->setInitsherdatecd($value);
                break;
            case 7:
                $this->setInitcoreyn($value);
                break;
            case 8:
                $this->setIntbusercode1($value);
                break;
            case 9:
                $this->setIntbusercode2($value);
                break;
            case 10:
                $this->setInittype($value);
                break;
            case 11:
                $this->setInittax($value);
                break;
            case 12:
                $this->setInitrtlpric($value);
                break;
            case 13:
                $this->setInitstatchgd($value);
                break;
            case 14:
                $this->setInitspecitemcd($value);
                break;
            case 15:
                $this->setInitwarrdays($value);
                break;
            case 16:
                $this->setIntbuomsale($value);
                break;
            case 17:
                $this->setInitwght($value);
                break;
            case 18:
                $this->setInitbord($value);
                break;
            case 19:
                $this->setInitbaseitemid($value);
                break;
            case 20:
                $this->setInitspecificcust($value);
                break;
            case 21:
                $this->setInitgivedisc($value);
                break;
            case 22:
                $this->setInitasstcode($value);
                break;
            case 23:
                $this->setInitpriclastdate($value);
                break;
            case 24:
                $this->setIntbuompur($value);
                break;
            case 25:
                $this->setInitstancost($value);
                break;
            case 26:
                $this->setInitstancostbase($value);
                break;
            case 27:
                $this->setInitstancostlastdate($value);
                break;
            case 28:
                $this->setInitminmarg($value);
                break;
            case 29:
                $this->setInitvendid($value);
                break;
            case 30:
                $this->setInitinspect($value);
                break;
            case 31:
                $this->setInitstockcode($value);
                break;
            case 32:
                $this->setInitsupritemnbr($value);
                break;
            case 33:
                $this->setInitvendshipfrom($value);
                break;
            case 34:
                $this->setInitcntryoforigin($value);
                break;
            case 35:
                $this->setInitasstqty($value);
                break;
            case 36:
                $this->setIntbtariffcode($value);
                break;
            case 37:
                $this->setInitpreference($value);
                break;
            case 38:
                $this->setInitproducer($value);
                break;
            case 39:
                $this->setInitdocumentation($value);
                break;
            case 40:
                $this->setInitpurchcrtnqty($value);
                break;
            case 41:
                $this->setAptbbuyrcode($value);
                break;
            case 42:
                $this->setInitlastcost($value);
                break;
            case 43:
                $this->setInitliters($value);
                break;
            case 44:
                $this->setIntbmsdscode($value);
                break;
            case 45:
                $this->setInitrequirefrt($value);
                break;
            case 46:
                $this->setInitmfrtcode($value);
                break;
            case 47:
                $this->setInitinnerpackqty($value);
                break;
            case 48:
                $this->setInitouterpackqty($value);
                break;
            case 49:
                $this->setInitbasestancost($value);
                break;
            case 50:
                $this->setInitshiptareqty($value);
                break;
            case 51:
                $this->setInitwgitem($value);
                break;
            case 52:
                $this->setIntbpricgrup($value);
                break;
            case 53:
                $this->setIntbcommgrup($value);
                break;
            case 54:
                $this->setInitlastcostdate($value);
                break;
            case 55:
                $this->setInitqtypercase($value);
                break;
            case 56:
                $this->setInitrevision($value);
                break;
            case 57:
                $this->setInitcommsaleqty($value);
                break;
            case 58:
                $this->setInitcubes($value);
                break;
            case 59:
                $this->setInittimefence($value);
                break;
            case 60:
                $this->setInitsrvcminchrg($value);
                break;
            case 61:
                $this->setInitMinMargBase($value);
                break;
            case 62:
                $this->setDateupdtd($value);
                break;
            case 63:
                $this->setTimeupdtd($value);
                break;
            case 64:
                $this->setDummy($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = TableMap::TYPE_PHPNAME)
    {
        $keys = ItemMasterItemTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setInititemnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setInitdesc1($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInitdesc2($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIntbgrup($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setInitformatcode($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setInitsplit($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setInitsherdatecd($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setInitcoreyn($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setIntbusercode1($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setIntbusercode2($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setInittype($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setInittax($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setInitrtlpric($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setInitstatchgd($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setInitspecitemcd($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setInitwarrdays($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setIntbuomsale($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setInitwght($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setInitbord($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setInitbaseitemid($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setInitspecificcust($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setInitgivedisc($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setInitasstcode($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setInitpriclastdate($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setIntbuompur($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setInitstancost($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setInitstancostbase($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setInitstancostlastdate($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setInitminmarg($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setInitvendid($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setInitinspect($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setInitstockcode($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setInitsupritemnbr($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setInitvendshipfrom($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setInitcntryoforigin($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setInitasstqty($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setIntbtariffcode($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setInitpreference($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setInitproducer($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setInitdocumentation($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setInitpurchcrtnqty($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setAptbbuyrcode($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setInitlastcost($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setInitliters($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setIntbmsdscode($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setInitrequirefrt($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setInitmfrtcode($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setInitinnerpackqty($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setInitouterpackqty($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setInitbasestancost($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setInitshiptareqty($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setInitwgitem($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setIntbpricgrup($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setIntbcommgrup($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setInitlastcostdate($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setInitqtypercase($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setInitrevision($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setInitcommsaleqty($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setInitcubes($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setInittimefence($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setInitsrvcminchrg($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setInitMinMargBase($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setDateupdtd($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setTimeupdtd($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setDummy($arr[$keys[64]]);
        }
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_PHPNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this|\ItemMasterItem The current object, for fluid interface
     */
    public function importFrom($parser, $data, $keyType = TableMap::TYPE_PHPNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ItemMasterItemTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITITEMNBR)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITDESC1)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITDESC1, $this->initdesc1);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITDESC2)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITDESC2, $this->initdesc2);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBGRUP)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBGRUP, $this->intbgrup);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITFORMATCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITFORMATCODE, $this->initformatcode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSPLIT)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSPLIT, $this->initsplit);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSHERDATECD)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSHERDATECD, $this->initsherdatecd);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCOREYN)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITCOREYN, $this->initcoreyn);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUSERCODE1)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBUSERCODE1, $this->intbusercode1);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUSERCODE2)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBUSERCODE2, $this->intbusercode2);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITTYPE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITTYPE, $this->inittype);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITTAX)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITTAX, $this->inittax);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITRTLPRIC)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITRTLPRIC, $this->initrtlpric);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTATCHGD)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSTATCHGD, $this->initstatchgd);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSPECITEMCD)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSPECITEMCD, $this->initspecitemcd);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITWARRDAYS)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITWARRDAYS, $this->initwarrdays);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUOMSALE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBUOMSALE, $this->intbuomsale);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITWGHT)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITWGHT, $this->initwght);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITBORD)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITBORD, $this->initbord);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITBASEITEMID)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITBASEITEMID, $this->initbaseitemid);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSPECIFICCUST)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSPECIFICCUST, $this->initspecificcust);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITGIVEDISC)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITGIVEDISC, $this->initgivedisc);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITASSTCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITASSTCODE, $this->initasstcode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPRICLASTDATE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITPRICLASTDATE, $this->initpriclastdate);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBUOMPUR)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBUOMPUR, $this->intbuompur);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTANCOST)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSTANCOST, $this->initstancost);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTANCOSTBASE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSTANCOSTBASE, $this->initstancostbase);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTANCOSTLASTDATE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSTANCOSTLASTDATE, $this->initstancostlastdate);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITMINMARG)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITMINMARG, $this->initminmarg);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITVENDID)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITVENDID, $this->initvendid);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITINSPECT)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITINSPECT, $this->initinspect);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSTOCKCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSTOCKCODE, $this->initstockcode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSUPRITEMNBR)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSUPRITEMNBR, $this->initsupritemnbr);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITVENDSHIPFROM)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITVENDSHIPFROM, $this->initvendshipfrom);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCNTRYOFORIGIN)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITCNTRYOFORIGIN, $this->initcntryoforigin);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITASSTQTY)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITASSTQTY, $this->initasstqty);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBTARIFFCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBTARIFFCODE, $this->intbtariffcode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPREFERENCE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITPREFERENCE, $this->initpreference);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPRODUCER)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITPRODUCER, $this->initproducer);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITDOCUMENTATION)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITDOCUMENTATION, $this->initdocumentation);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITPURCHCRTNQTY)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITPURCHCRTNQTY, $this->initpurchcrtnqty);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_APTBBUYRCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_APTBBUYRCODE, $this->aptbbuyrcode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITLASTCOST)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITLASTCOST, $this->initlastcost);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITLITERS)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITLITERS, $this->initliters);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBMSDSCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBMSDSCODE, $this->intbmsdscode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITREQUIREFRT)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITREQUIREFRT, $this->initrequirefrt);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITMFRTCODE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITMFRTCODE, $this->initmfrtcode);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITINNERPACKQTY)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITINNERPACKQTY, $this->initinnerpackqty);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITOUTERPACKQTY)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITOUTERPACKQTY, $this->initouterpackqty);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITBASESTANCOST)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITBASESTANCOST, $this->initbasestancost);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSHIPTAREQTY)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSHIPTAREQTY, $this->initshiptareqty);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITWGITEM)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITWGITEM, $this->initwgitem);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBPRICGRUP)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBPRICGRUP, $this->intbpricgrup);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INTBCOMMGRUP)) {
            $criteria->add(ItemMasterItemTableMap::COL_INTBCOMMGRUP, $this->intbcommgrup);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITLASTCOSTDATE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITLASTCOSTDATE, $this->initlastcostdate);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITQTYPERCASE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITQTYPERCASE, $this->initqtypercase);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITREVISION)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITREVISION, $this->initrevision);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCOMMSALEQTY)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITCOMMSALEQTY, $this->initcommsaleqty);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITCUBES)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITCUBES, $this->initcubes);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITTIMEFENCE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITTIMEFENCE, $this->inittimefence);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITSRVCMINCHRG)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITSRVCMINCHRG, $this->initsrvcminchrg);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_INITMINMARGBASE)) {
            $criteria->add(ItemMasterItemTableMap::COL_INITMINMARGBASE, $this->initminmargbase);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_DATEUPDTD)) {
            $criteria->add(ItemMasterItemTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ItemMasterItemTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ItemMasterItemTableMap::COL_DUMMY)) {
            $criteria->add(ItemMasterItemTableMap::COL_DUMMY, $this->dummy);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = ChildItemMasterItemQuery::create();
        $criteria->add(ItemMasterItemTableMap::COL_INITITEMNBR, $this->inititemnbr);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getInititemnbr();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation pricing to table inv_item_price
        if ($this->aItemPricing && $hash = spl_object_hash($this->aItemPricing)) {
            $primaryKeyFKs[] = $hash;
        } else {
            $validPrimaryKeyFKs = false;
        }

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return string
     */
    public function getPrimaryKey()
    {
        return $this->getInititemnbr();
    }

    /**
     * Generic method to set the primary key (inititemnbr column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setInititemnbr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getInititemnbr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ItemMasterItem (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setInitdesc1($this->getInitdesc1());
        $copyObj->setInitdesc2($this->getInitdesc2());
        $copyObj->setIntbgrup($this->getIntbgrup());
        $copyObj->setInitformatcode($this->getInitformatcode());
        $copyObj->setInitsplit($this->getInitsplit());
        $copyObj->setInitsherdatecd($this->getInitsherdatecd());
        $copyObj->setInitcoreyn($this->getInitcoreyn());
        $copyObj->setIntbusercode1($this->getIntbusercode1());
        $copyObj->setIntbusercode2($this->getIntbusercode2());
        $copyObj->setInittype($this->getInittype());
        $copyObj->setInittax($this->getInittax());
        $copyObj->setInitrtlpric($this->getInitrtlpric());
        $copyObj->setInitstatchgd($this->getInitstatchgd());
        $copyObj->setInitspecitemcd($this->getInitspecitemcd());
        $copyObj->setInitwarrdays($this->getInitwarrdays());
        $copyObj->setIntbuomsale($this->getIntbuomsale());
        $copyObj->setInitwght($this->getInitwght());
        $copyObj->setInitbord($this->getInitbord());
        $copyObj->setInitbaseitemid($this->getInitbaseitemid());
        $copyObj->setInitspecificcust($this->getInitspecificcust());
        $copyObj->setInitgivedisc($this->getInitgivedisc());
        $copyObj->setInitasstcode($this->getInitasstcode());
        $copyObj->setInitpriclastdate($this->getInitpriclastdate());
        $copyObj->setIntbuompur($this->getIntbuompur());
        $copyObj->setInitstancost($this->getInitstancost());
        $copyObj->setInitstancostbase($this->getInitstancostbase());
        $copyObj->setInitstancostlastdate($this->getInitstancostlastdate());
        $copyObj->setInitminmarg($this->getInitminmarg());
        $copyObj->setInitvendid($this->getInitvendid());
        $copyObj->setInitinspect($this->getInitinspect());
        $copyObj->setInitstockcode($this->getInitstockcode());
        $copyObj->setInitsupritemnbr($this->getInitsupritemnbr());
        $copyObj->setInitvendshipfrom($this->getInitvendshipfrom());
        $copyObj->setInitcntryoforigin($this->getInitcntryoforigin());
        $copyObj->setInitasstqty($this->getInitasstqty());
        $copyObj->setIntbtariffcode($this->getIntbtariffcode());
        $copyObj->setInitpreference($this->getInitpreference());
        $copyObj->setInitproducer($this->getInitproducer());
        $copyObj->setInitdocumentation($this->getInitdocumentation());
        $copyObj->setInitpurchcrtnqty($this->getInitpurchcrtnqty());
        $copyObj->setAptbbuyrcode($this->getAptbbuyrcode());
        $copyObj->setInitlastcost($this->getInitlastcost());
        $copyObj->setInitliters($this->getInitliters());
        $copyObj->setIntbmsdscode($this->getIntbmsdscode());
        $copyObj->setInitrequirefrt($this->getInitrequirefrt());
        $copyObj->setInitmfrtcode($this->getInitmfrtcode());
        $copyObj->setInitinnerpackqty($this->getInitinnerpackqty());
        $copyObj->setInitouterpackqty($this->getInitouterpackqty());
        $copyObj->setInitbasestancost($this->getInitbasestancost());
        $copyObj->setInitshiptareqty($this->getInitshiptareqty());
        $copyObj->setInitwgitem($this->getInitwgitem());
        $copyObj->setIntbpricgrup($this->getIntbpricgrup());
        $copyObj->setIntbcommgrup($this->getIntbcommgrup());
        $copyObj->setInitlastcostdate($this->getInitlastcostdate());
        $copyObj->setInitqtypercase($this->getInitqtypercase());
        $copyObj->setInitrevision($this->getInitrevision());
        $copyObj->setInitcommsaleqty($this->getInitcommsaleqty());
        $copyObj->setInitcubes($this->getInitcubes());
        $copyObj->setInittimefence($this->getInittimefence());
        $copyObj->setInitsrvcminchrg($this->getInitsrvcminchrg());
        $copyObj->setInitMinMargBase($this->getInitMinMargBase());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getItemXrefCustomers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemXrefCustomer($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvWhseItemBins() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvWhseItemBin($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemAddonItemsRelatedByInititemnbr() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemAddonItemRelatedByInititemnbr($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemAddonItemsRelatedByAdonadditemnbr() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemAddonItemRelatedByAdonadditemnbr($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getItmDimension();
            if ($relObj) {
                $copyObj->setItmDimension($relObj->copy($deepCopy));
            }

            $relObj = $this->getInvHazmatItem();
            if ($relObj) {
                $copyObj->setInvHazmatItem($relObj->copy($deepCopy));
            }

            foreach ($this->getInvWhseLots() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvWhseLot($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemSubstitutesRelatedByInititemnbr() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemSubstituteRelatedByInititemnbr($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemSubstitutesRelatedByInsisubitemnbr() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemSubstituteRelatedByInsisubitemnbr($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvLotTags() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvLotTag($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvItem2ItemsRelatedByI2imstritemid() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvItem2ItemRelatedByI2imstritemid($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvItem2ItemsRelatedByI2ichilditemid() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvItem2ItemRelatedByI2ichilditemid($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvKitComponents() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvKitComponent($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getInvKit();
            if ($relObj) {
                $copyObj->setInvKit($relObj->copy($deepCopy));
            }

            foreach ($this->getInvLotMasters() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvLotMaster($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvSerialMasters() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvSerialMaster($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvTransferDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvTransferDetail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvTransferLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvTransferLotserial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvTransferPreAllocatedLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvTransferPreAllocatedLotserial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvTransferPickedLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvTransferPickedLotserial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvSerialWarranties() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvSerialWarranty($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getWarehouseInventories() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addWarehouseInventory($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemXrefKeys() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemXrefKey($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemXrefManufacturers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemXrefManufacturer($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemXrefCustomerNotes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemXrefCustomerNote($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvOptCodeNotes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvOptCodeNote($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemXrefVendorNoteDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemXrefVendorNoteDetail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemXrefVendorNoteInternals() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemXrefVendorNoteInternal($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvPallets() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvPallet($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPurchaseOrderDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPurchaseOrderDetail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPurchaseOrderDetailReceipts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPurchaseOrderDetailReceipt($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPurchaseOrderDetailReceivings() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPurchaseOrderDetailReceiving($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPurchaseOrderDetailLotReceivings() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPurchaseOrderDetailLotReceiving($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getBomComponents() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBomComponent($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getBomItem();
            if ($relObj) {
                $copyObj->setBomItem($relObj->copy($deepCopy));
            }

            foreach ($this->getBookingDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBookingDetail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesHistoryDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesHistoryDetail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesOrderDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesOrderDetail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesOrderLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesOrderLotserial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesHistoryLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesHistoryLotserial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSoAllocatedLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSoAllocatedLotserial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemPricingDiscounts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemPricingDiscount($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSoPickedLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSoPickedLotserial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSoStandingOrderDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSoStandingOrderDetail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemXrefUpcs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemXrefUpc($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemXrefVendors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemXrefVendor($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param  boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \ItemMasterItem Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Declares an association between this object and a ChildUnitofMeasureSale object.
     *
     * @param  ChildUnitofMeasureSale $v
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUnitofMeasureSale(ChildUnitofMeasureSale $v = null)
    {
        if ($v === null) {
            $this->setIntbuomsale(NULL);
        } else {
            $this->setIntbuomsale($v->getIntbuomsale());
        }

        $this->aUnitofMeasureSale = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildUnitofMeasureSale object, it will not be re-added.
        if ($v !== null) {
            $v->addItemMasterItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildUnitofMeasureSale object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildUnitofMeasureSale The associated ChildUnitofMeasureSale object.
     * @throws PropelException
     */
    public function getUnitofMeasureSale(ConnectionInterface $con = null)
    {
        if ($this->aUnitofMeasureSale === null && (($this->intbuomsale !== "" && $this->intbuomsale !== null))) {
            $this->aUnitofMeasureSale = ChildUnitofMeasureSaleQuery::create()->findPk($this->intbuomsale, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUnitofMeasureSale->addItemMasterItems($this);
             */
        }

        return $this->aUnitofMeasureSale;
    }

    /**
     * Declares an association between this object and a ChildUnitofMeasurePurchase object.
     *
     * @param  ChildUnitofMeasurePurchase $v
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUnitofMeasurePurchase(ChildUnitofMeasurePurchase $v = null)
    {
        if ($v === null) {
            $this->setIntbuompur(NULL);
        } else {
            $this->setIntbuompur($v->getIntbuompur());
        }

        $this->aUnitofMeasurePurchase = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildUnitofMeasurePurchase object, it will not be re-added.
        if ($v !== null) {
            $v->addItemMasterItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildUnitofMeasurePurchase object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildUnitofMeasurePurchase The associated ChildUnitofMeasurePurchase object.
     * @throws PropelException
     */
    public function getUnitofMeasurePurchase(ConnectionInterface $con = null)
    {
        if ($this->aUnitofMeasurePurchase === null && (($this->intbuompur !== "" && $this->intbuompur !== null))) {
            $this->aUnitofMeasurePurchase = ChildUnitofMeasurePurchaseQuery::create()->findPk($this->intbuompur, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUnitofMeasurePurchase->addItemMasterItems($this);
             */
        }

        return $this->aUnitofMeasurePurchase;
    }

    /**
     * Declares an association between this object and a ChildInvGroupCode object.
     *
     * @param  ChildInvGroupCode $v
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvGroupCode(ChildInvGroupCode $v = null)
    {
        if ($v === null) {
            $this->setIntbgrup(NULL);
        } else {
            $this->setIntbgrup($v->getIntbgrup());
        }

        $this->aInvGroupCode = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvGroupCode object, it will not be re-added.
        if ($v !== null) {
            $v->addItemMasterItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildInvGroupCode object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildInvGroupCode The associated ChildInvGroupCode object.
     * @throws PropelException
     */
    public function getInvGroupCode(ConnectionInterface $con = null)
    {
        if ($this->aInvGroupCode === null && (($this->intbgrup !== "" && $this->intbgrup !== null))) {
            $this->aInvGroupCode = ChildInvGroupCodeQuery::create()->findPk($this->intbgrup, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvGroupCode->addItemMasterItems($this);
             */
        }

        return $this->aInvGroupCode;
    }

    /**
     * Declares an association between this object and a ChildInvPriceCode object.
     *
     * @param  ChildInvPriceCode $v
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvPriceCode(ChildInvPriceCode $v = null)
    {
        if ($v === null) {
            $this->setIntbpricgrup(NULL);
        } else {
            $this->setIntbpricgrup($v->getIntbpricgrup());
        }

        $this->aInvPriceCode = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvPriceCode object, it will not be re-added.
        if ($v !== null) {
            $v->addItemMasterItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildInvPriceCode object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildInvPriceCode The associated ChildInvPriceCode object.
     * @throws PropelException
     */
    public function getInvPriceCode(ConnectionInterface $con = null)
    {
        if ($this->aInvPriceCode === null && (($this->intbpricgrup !== "" && $this->intbpricgrup !== null))) {
            $this->aInvPriceCode = ChildInvPriceCodeQuery::create()->findPk($this->intbpricgrup, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvPriceCode->addItemMasterItems($this);
             */
        }

        return $this->aInvPriceCode;
    }

    /**
     * Declares an association between this object and a ChildInvCommissionCode object.
     *
     * @param  ChildInvCommissionCode $v
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvCommissionCode(ChildInvCommissionCode $v = null)
    {
        if ($v === null) {
            $this->setIntbcommgrup(NULL);
        } else {
            $this->setIntbcommgrup($v->getIntbcommgrup());
        }

        $this->aInvCommissionCode = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildInvCommissionCode object, it will not be re-added.
        if ($v !== null) {
            $v->addItemMasterItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildInvCommissionCode object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildInvCommissionCode The associated ChildInvCommissionCode object.
     * @throws PropelException
     */
    public function getInvCommissionCode(ConnectionInterface $con = null)
    {
        if ($this->aInvCommissionCode === null && (($this->intbcommgrup !== "" && $this->intbcommgrup !== null))) {
            $this->aInvCommissionCode = ChildInvCommissionCodeQuery::create()->findPk($this->intbcommgrup, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aInvCommissionCode->addItemMasterItems($this);
             */
        }

        return $this->aInvCommissionCode;
    }

    /**
     * Declares an association between this object and a ChildItemPricing object.
     *
     * @param  ChildItemPricing $v
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setItemPricing(ChildItemPricing $v = null)
    {
        if ($v === null) {
            $this->setInititemnbr('');
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        $this->aItemPricing = $v;

        // Add binding for other direction of this 1:1 relationship.
        if ($v !== null) {
            $v->setItemMasterItem($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildItemPricing object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildItemPricing The associated ChildItemPricing object.
     * @throws PropelException
     */
    public function getItemPricing(ConnectionInterface $con = null)
    {
        if ($this->aItemPricing === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null))) {
            $this->aItemPricing = ChildItemPricingQuery::create()->findPk($this->inititemnbr, $con);
            // Because this foreign key represents a one-to-one relationship, we will create a bi-directional association.
            $this->aItemPricing->setItemMasterItem($this);
        }

        return $this->aItemPricing;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('ItemXrefCustomer' == $relationName) {
            $this->initItemXrefCustomers();
            return;
        }
        if ('InvWhseItemBin' == $relationName) {
            $this->initInvWhseItemBins();
            return;
        }
        if ('ItemAddonItemRelatedByInititemnbr' == $relationName) {
            $this->initItemAddonItemsRelatedByInititemnbr();
            return;
        }
        if ('ItemAddonItemRelatedByAdonadditemnbr' == $relationName) {
            $this->initItemAddonItemsRelatedByAdonadditemnbr();
            return;
        }
        if ('InvWhseLot' == $relationName) {
            $this->initInvWhseLots();
            return;
        }
        if ('ItemSubstituteRelatedByInititemnbr' == $relationName) {
            $this->initItemSubstitutesRelatedByInititemnbr();
            return;
        }
        if ('ItemSubstituteRelatedByInsisubitemnbr' == $relationName) {
            $this->initItemSubstitutesRelatedByInsisubitemnbr();
            return;
        }
        if ('InvLotTag' == $relationName) {
            $this->initInvLotTags();
            return;
        }
        if ('InvItem2ItemRelatedByI2imstritemid' == $relationName) {
            $this->initInvItem2ItemsRelatedByI2imstritemid();
            return;
        }
        if ('InvItem2ItemRelatedByI2ichilditemid' == $relationName) {
            $this->initInvItem2ItemsRelatedByI2ichilditemid();
            return;
        }
        if ('InvKitComponent' == $relationName) {
            $this->initInvKitComponents();
            return;
        }
        if ('InvLotMaster' == $relationName) {
            $this->initInvLotMasters();
            return;
        }
        if ('InvSerialMaster' == $relationName) {
            $this->initInvSerialMasters();
            return;
        }
        if ('InvTransferDetail' == $relationName) {
            $this->initInvTransferDetails();
            return;
        }
        if ('InvTransferLotserial' == $relationName) {
            $this->initInvTransferLotserials();
            return;
        }
        if ('InvTransferPreAllocatedLotserial' == $relationName) {
            $this->initInvTransferPreAllocatedLotserials();
            return;
        }
        if ('InvTransferPickedLotserial' == $relationName) {
            $this->initInvTransferPickedLotserials();
            return;
        }
        if ('InvSerialWarranty' == $relationName) {
            $this->initInvSerialWarranties();
            return;
        }
        if ('WarehouseInventory' == $relationName) {
            $this->initWarehouseInventories();
            return;
        }
        if ('ItemXrefKey' == $relationName) {
            $this->initItemXrefKeys();
            return;
        }
        if ('ItemXrefManufacturer' == $relationName) {
            $this->initItemXrefManufacturers();
            return;
        }
        if ('ItemXrefCustomerNote' == $relationName) {
            $this->initItemXrefCustomerNotes();
            return;
        }
        if ('InvOptCodeNote' == $relationName) {
            $this->initInvOptCodeNotes();
            return;
        }
        if ('ItemXrefVendorNoteDetail' == $relationName) {
            $this->initItemXrefVendorNoteDetails();
            return;
        }
        if ('ItemXrefVendorNoteInternal' == $relationName) {
            $this->initItemXrefVendorNoteInternals();
            return;
        }
        if ('InvPallet' == $relationName) {
            $this->initInvPallets();
            return;
        }
        if ('PurchaseOrderDetail' == $relationName) {
            $this->initPurchaseOrderDetails();
            return;
        }
        if ('PurchaseOrderDetailReceipt' == $relationName) {
            $this->initPurchaseOrderDetailReceipts();
            return;
        }
        if ('PurchaseOrderDetailReceiving' == $relationName) {
            $this->initPurchaseOrderDetailReceivings();
            return;
        }
        if ('PurchaseOrderDetailLotReceiving' == $relationName) {
            $this->initPurchaseOrderDetailLotReceivings();
            return;
        }
        if ('BomComponent' == $relationName) {
            $this->initBomComponents();
            return;
        }
        if ('BookingDetail' == $relationName) {
            $this->initBookingDetails();
            return;
        }
        if ('SalesHistoryDetail' == $relationName) {
            $this->initSalesHistoryDetails();
            return;
        }
        if ('SalesOrderDetail' == $relationName) {
            $this->initSalesOrderDetails();
            return;
        }
        if ('SalesOrderLotserial' == $relationName) {
            $this->initSalesOrderLotserials();
            return;
        }
        if ('SalesHistoryLotserial' == $relationName) {
            $this->initSalesHistoryLotserials();
            return;
        }
        if ('SoAllocatedLotserial' == $relationName) {
            $this->initSoAllocatedLotserials();
            return;
        }
        if ('ItemPricingDiscount' == $relationName) {
            $this->initItemPricingDiscounts();
            return;
        }
        if ('SoPickedLotserial' == $relationName) {
            $this->initSoPickedLotserials();
            return;
        }
        if ('SoStandingOrderDetail' == $relationName) {
            $this->initSoStandingOrderDetails();
            return;
        }
        if ('ItemXrefUpc' == $relationName) {
            $this->initItemXrefUpcs();
            return;
        }
        if ('ItemXrefVendor' == $relationName) {
            $this->initItemXrefVendors();
            return;
        }
    }

    /**
     * Clears out the collItemXrefCustomers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemXrefCustomers()
     */
    public function clearItemXrefCustomers()
    {
        $this->collItemXrefCustomers = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemXrefCustomers collection loaded partially.
     */
    public function resetPartialItemXrefCustomers($v = true)
    {
        $this->collItemXrefCustomersPartial = $v;
    }

    /**
     * Initializes the collItemXrefCustomers collection.
     *
     * By default this just sets the collItemXrefCustomers collection to an empty array (like clearcollItemXrefCustomers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemXrefCustomers($overrideExisting = true)
    {
        if (null !== $this->collItemXrefCustomers && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemXrefCustomerTableMap::getTableMap()->getCollectionClassName();

        $this->collItemXrefCustomers = new $collectionClassName;
        $this->collItemXrefCustomers->setModel('\ItemXrefCustomer');
    }

    /**
     * Gets an array of ChildItemXrefCustomer objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemXrefCustomer[] List of ChildItemXrefCustomer objects
     * @throws PropelException
     */
    public function getItemXrefCustomers(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefCustomersPartial && !$this->isNew();
        if (null === $this->collItemXrefCustomers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemXrefCustomers) {
                // return empty collection
                $this->initItemXrefCustomers();
            } else {
                $collItemXrefCustomers = ChildItemXrefCustomerQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemXrefCustomersPartial && count($collItemXrefCustomers)) {
                        $this->initItemXrefCustomers(false);

                        foreach ($collItemXrefCustomers as $obj) {
                            if (false == $this->collItemXrefCustomers->contains($obj)) {
                                $this->collItemXrefCustomers->append($obj);
                            }
                        }

                        $this->collItemXrefCustomersPartial = true;
                    }

                    return $collItemXrefCustomers;
                }

                if ($partial && $this->collItemXrefCustomers) {
                    foreach ($this->collItemXrefCustomers as $obj) {
                        if ($obj->isNew()) {
                            $collItemXrefCustomers[] = $obj;
                        }
                    }
                }

                $this->collItemXrefCustomers = $collItemXrefCustomers;
                $this->collItemXrefCustomersPartial = false;
            }
        }

        return $this->collItemXrefCustomers;
    }

    /**
     * Sets a collection of ChildItemXrefCustomer objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemXrefCustomers A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemXrefCustomers(Collection $itemXrefCustomers, ConnectionInterface $con = null)
    {
        /** @var ChildItemXrefCustomer[] $itemXrefCustomersToDelete */
        $itemXrefCustomersToDelete = $this->getItemXrefCustomers(new Criteria(), $con)->diff($itemXrefCustomers);


        $this->itemXrefCustomersScheduledForDeletion = $itemXrefCustomersToDelete;

        foreach ($itemXrefCustomersToDelete as $itemXrefCustomerRemoved) {
            $itemXrefCustomerRemoved->setItemMasterItem(null);
        }

        $this->collItemXrefCustomers = null;
        foreach ($itemXrefCustomers as $itemXrefCustomer) {
            $this->addItemXrefCustomer($itemXrefCustomer);
        }

        $this->collItemXrefCustomers = $itemXrefCustomers;
        $this->collItemXrefCustomersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemXrefCustomer objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemXrefCustomer objects.
     * @throws PropelException
     */
    public function countItemXrefCustomers(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefCustomersPartial && !$this->isNew();
        if (null === $this->collItemXrefCustomers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemXrefCustomers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemXrefCustomers());
            }

            $query = ChildItemXrefCustomerQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collItemXrefCustomers);
    }

    /**
     * Method called to associate a ChildItemXrefCustomer object to this object
     * through the ChildItemXrefCustomer foreign key attribute.
     *
     * @param  ChildItemXrefCustomer $l ChildItemXrefCustomer
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemXrefCustomer(ChildItemXrefCustomer $l)
    {
        if ($this->collItemXrefCustomers === null) {
            $this->initItemXrefCustomers();
            $this->collItemXrefCustomersPartial = true;
        }

        if (!$this->collItemXrefCustomers->contains($l)) {
            $this->doAddItemXrefCustomer($l);

            if ($this->itemXrefCustomersScheduledForDeletion and $this->itemXrefCustomersScheduledForDeletion->contains($l)) {
                $this->itemXrefCustomersScheduledForDeletion->remove($this->itemXrefCustomersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemXrefCustomer $itemXrefCustomer The ChildItemXrefCustomer object to add.
     */
    protected function doAddItemXrefCustomer(ChildItemXrefCustomer $itemXrefCustomer)
    {
        $this->collItemXrefCustomers[]= $itemXrefCustomer;
        $itemXrefCustomer->setItemMasterItem($this);
    }

    /**
     * @param  ChildItemXrefCustomer $itemXrefCustomer The ChildItemXrefCustomer object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemXrefCustomer(ChildItemXrefCustomer $itemXrefCustomer)
    {
        if ($this->getItemXrefCustomers()->contains($itemXrefCustomer)) {
            $pos = $this->collItemXrefCustomers->search($itemXrefCustomer);
            $this->collItemXrefCustomers->remove($pos);
            if (null === $this->itemXrefCustomersScheduledForDeletion) {
                $this->itemXrefCustomersScheduledForDeletion = clone $this->collItemXrefCustomers;
                $this->itemXrefCustomersScheduledForDeletion->clear();
            }
            $this->itemXrefCustomersScheduledForDeletion[]= $itemXrefCustomer;
            $itemXrefCustomer->setItemMasterItem(null);
        }

        return $this;
    }

    /**
     * Clears out the collInvWhseItemBins collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvWhseItemBins()
     */
    public function clearInvWhseItemBins()
    {
        $this->collInvWhseItemBins = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvWhseItemBins collection loaded partially.
     */
    public function resetPartialInvWhseItemBins($v = true)
    {
        $this->collInvWhseItemBinsPartial = $v;
    }

    /**
     * Initializes the collInvWhseItemBins collection.
     *
     * By default this just sets the collInvWhseItemBins collection to an empty array (like clearcollInvWhseItemBins());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvWhseItemBins($overrideExisting = true)
    {
        if (null !== $this->collInvWhseItemBins && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvWhseItemBinTableMap::getTableMap()->getCollectionClassName();

        $this->collInvWhseItemBins = new $collectionClassName;
        $this->collInvWhseItemBins->setModel('\InvWhseItemBin');
    }

    /**
     * Gets an array of ChildInvWhseItemBin objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvWhseItemBin[] List of ChildInvWhseItemBin objects
     * @throws PropelException
     */
    public function getInvWhseItemBins(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvWhseItemBinsPartial && !$this->isNew();
        if (null === $this->collInvWhseItemBins || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvWhseItemBins) {
                // return empty collection
                $this->initInvWhseItemBins();
            } else {
                $collInvWhseItemBins = ChildInvWhseItemBinQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvWhseItemBinsPartial && count($collInvWhseItemBins)) {
                        $this->initInvWhseItemBins(false);

                        foreach ($collInvWhseItemBins as $obj) {
                            if (false == $this->collInvWhseItemBins->contains($obj)) {
                                $this->collInvWhseItemBins->append($obj);
                            }
                        }

                        $this->collInvWhseItemBinsPartial = true;
                    }

                    return $collInvWhseItemBins;
                }

                if ($partial && $this->collInvWhseItemBins) {
                    foreach ($this->collInvWhseItemBins as $obj) {
                        if ($obj->isNew()) {
                            $collInvWhseItemBins[] = $obj;
                        }
                    }
                }

                $this->collInvWhseItemBins = $collInvWhseItemBins;
                $this->collInvWhseItemBinsPartial = false;
            }
        }

        return $this->collInvWhseItemBins;
    }

    /**
     * Sets a collection of ChildInvWhseItemBin objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invWhseItemBins A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvWhseItemBins(Collection $invWhseItemBins, ConnectionInterface $con = null)
    {
        /** @var ChildInvWhseItemBin[] $invWhseItemBinsToDelete */
        $invWhseItemBinsToDelete = $this->getInvWhseItemBins(new Criteria(), $con)->diff($invWhseItemBins);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invWhseItemBinsScheduledForDeletion = clone $invWhseItemBinsToDelete;

        foreach ($invWhseItemBinsToDelete as $invWhseItemBinRemoved) {
            $invWhseItemBinRemoved->setItemMasterItem(null);
        }

        $this->collInvWhseItemBins = null;
        foreach ($invWhseItemBins as $invWhseItemBin) {
            $this->addInvWhseItemBin($invWhseItemBin);
        }

        $this->collInvWhseItemBins = $invWhseItemBins;
        $this->collInvWhseItemBinsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvWhseItemBin objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvWhseItemBin objects.
     * @throws PropelException
     */
    public function countInvWhseItemBins(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvWhseItemBinsPartial && !$this->isNew();
        if (null === $this->collInvWhseItemBins || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvWhseItemBins) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvWhseItemBins());
            }

            $query = ChildInvWhseItemBinQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collInvWhseItemBins);
    }

    /**
     * Method called to associate a ChildInvWhseItemBin object to this object
     * through the ChildInvWhseItemBin foreign key attribute.
     *
     * @param  ChildInvWhseItemBin $l ChildInvWhseItemBin
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvWhseItemBin(ChildInvWhseItemBin $l)
    {
        if ($this->collInvWhseItemBins === null) {
            $this->initInvWhseItemBins();
            $this->collInvWhseItemBinsPartial = true;
        }

        if (!$this->collInvWhseItemBins->contains($l)) {
            $this->doAddInvWhseItemBin($l);

            if ($this->invWhseItemBinsScheduledForDeletion and $this->invWhseItemBinsScheduledForDeletion->contains($l)) {
                $this->invWhseItemBinsScheduledForDeletion->remove($this->invWhseItemBinsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvWhseItemBin $invWhseItemBin The ChildInvWhseItemBin object to add.
     */
    protected function doAddInvWhseItemBin(ChildInvWhseItemBin $invWhseItemBin)
    {
        $this->collInvWhseItemBins[]= $invWhseItemBin;
        $invWhseItemBin->setItemMasterItem($this);
    }

    /**
     * @param  ChildInvWhseItemBin $invWhseItemBin The ChildInvWhseItemBin object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvWhseItemBin(ChildInvWhseItemBin $invWhseItemBin)
    {
        if ($this->getInvWhseItemBins()->contains($invWhseItemBin)) {
            $pos = $this->collInvWhseItemBins->search($invWhseItemBin);
            $this->collInvWhseItemBins->remove($pos);
            if (null === $this->invWhseItemBinsScheduledForDeletion) {
                $this->invWhseItemBinsScheduledForDeletion = clone $this->collInvWhseItemBins;
                $this->invWhseItemBinsScheduledForDeletion->clear();
            }
            $this->invWhseItemBinsScheduledForDeletion[]= clone $invWhseItemBin;
            $invWhseItemBin->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvWhseItemBins from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvWhseItemBin[] List of ChildInvWhseItemBin objects
     */
    public function getInvWhseItemBinsJoinWarehouse(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvWhseItemBinQuery::create(null, $criteria);
        $query->joinWith('Warehouse', $joinBehavior);

        return $this->getInvWhseItemBins($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvWhseItemBins from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvWhseItemBin[] List of ChildInvWhseItemBin objects
     */
    public function getInvWhseItemBinsJoinWarehouseInventory(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvWhseItemBinQuery::create(null, $criteria);
        $query->joinWith('WarehouseInventory', $joinBehavior);

        return $this->getInvWhseItemBins($query, $con);
    }

    /**
     * Clears out the collItemAddonItemsRelatedByInititemnbr collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemAddonItemsRelatedByInititemnbr()
     */
    public function clearItemAddonItemsRelatedByInititemnbr()
    {
        $this->collItemAddonItemsRelatedByInititemnbr = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemAddonItemsRelatedByInititemnbr collection loaded partially.
     */
    public function resetPartialItemAddonItemsRelatedByInititemnbr($v = true)
    {
        $this->collItemAddonItemsRelatedByInititemnbrPartial = $v;
    }

    /**
     * Initializes the collItemAddonItemsRelatedByInititemnbr collection.
     *
     * By default this just sets the collItemAddonItemsRelatedByInititemnbr collection to an empty array (like clearcollItemAddonItemsRelatedByInititemnbr());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemAddonItemsRelatedByInititemnbr($overrideExisting = true)
    {
        if (null !== $this->collItemAddonItemsRelatedByInititemnbr && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemAddonItemTableMap::getTableMap()->getCollectionClassName();

        $this->collItemAddonItemsRelatedByInititemnbr = new $collectionClassName;
        $this->collItemAddonItemsRelatedByInititemnbr->setModel('\ItemAddonItem');
    }

    /**
     * Gets an array of ChildItemAddonItem objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemAddonItem[] List of ChildItemAddonItem objects
     * @throws PropelException
     */
    public function getItemAddonItemsRelatedByInititemnbr(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemAddonItemsRelatedByInititemnbrPartial && !$this->isNew();
        if (null === $this->collItemAddonItemsRelatedByInititemnbr || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemAddonItemsRelatedByInititemnbr) {
                // return empty collection
                $this->initItemAddonItemsRelatedByInititemnbr();
            } else {
                $collItemAddonItemsRelatedByInititemnbr = ChildItemAddonItemQuery::create(null, $criteria)
                    ->filterByItemMasterItemRelatedByInititemnbr($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemAddonItemsRelatedByInititemnbrPartial && count($collItemAddonItemsRelatedByInititemnbr)) {
                        $this->initItemAddonItemsRelatedByInititemnbr(false);

                        foreach ($collItemAddonItemsRelatedByInititemnbr as $obj) {
                            if (false == $this->collItemAddonItemsRelatedByInititemnbr->contains($obj)) {
                                $this->collItemAddonItemsRelatedByInititemnbr->append($obj);
                            }
                        }

                        $this->collItemAddonItemsRelatedByInititemnbrPartial = true;
                    }

                    return $collItemAddonItemsRelatedByInititemnbr;
                }

                if ($partial && $this->collItemAddonItemsRelatedByInititemnbr) {
                    foreach ($this->collItemAddonItemsRelatedByInititemnbr as $obj) {
                        if ($obj->isNew()) {
                            $collItemAddonItemsRelatedByInititemnbr[] = $obj;
                        }
                    }
                }

                $this->collItemAddonItemsRelatedByInititemnbr = $collItemAddonItemsRelatedByInititemnbr;
                $this->collItemAddonItemsRelatedByInititemnbrPartial = false;
            }
        }

        return $this->collItemAddonItemsRelatedByInititemnbr;
    }

    /**
     * Sets a collection of ChildItemAddonItem objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemAddonItemsRelatedByInititemnbr A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemAddonItemsRelatedByInititemnbr(Collection $itemAddonItemsRelatedByInititemnbr, ConnectionInterface $con = null)
    {
        /** @var ChildItemAddonItem[] $itemAddonItemsRelatedByInititemnbrToDelete */
        $itemAddonItemsRelatedByInititemnbrToDelete = $this->getItemAddonItemsRelatedByInititemnbr(new Criteria(), $con)->diff($itemAddonItemsRelatedByInititemnbr);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->itemAddonItemsRelatedByInititemnbrScheduledForDeletion = clone $itemAddonItemsRelatedByInititemnbrToDelete;

        foreach ($itemAddonItemsRelatedByInititemnbrToDelete as $itemAddonItemRelatedByInititemnbrRemoved) {
            $itemAddonItemRelatedByInititemnbrRemoved->setItemMasterItemRelatedByInititemnbr(null);
        }

        $this->collItemAddonItemsRelatedByInititemnbr = null;
        foreach ($itemAddonItemsRelatedByInititemnbr as $itemAddonItemRelatedByInititemnbr) {
            $this->addItemAddonItemRelatedByInititemnbr($itemAddonItemRelatedByInititemnbr);
        }

        $this->collItemAddonItemsRelatedByInititemnbr = $itemAddonItemsRelatedByInititemnbr;
        $this->collItemAddonItemsRelatedByInititemnbrPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemAddonItem objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemAddonItem objects.
     * @throws PropelException
     */
    public function countItemAddonItemsRelatedByInititemnbr(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemAddonItemsRelatedByInititemnbrPartial && !$this->isNew();
        if (null === $this->collItemAddonItemsRelatedByInititemnbr || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemAddonItemsRelatedByInititemnbr) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemAddonItemsRelatedByInititemnbr());
            }

            $query = ChildItemAddonItemQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItemRelatedByInititemnbr($this)
                ->count($con);
        }

        return count($this->collItemAddonItemsRelatedByInititemnbr);
    }

    /**
     * Method called to associate a ChildItemAddonItem object to this object
     * through the ChildItemAddonItem foreign key attribute.
     *
     * @param  ChildItemAddonItem $l ChildItemAddonItem
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemAddonItemRelatedByInititemnbr(ChildItemAddonItem $l)
    {
        if ($this->collItemAddonItemsRelatedByInititemnbr === null) {
            $this->initItemAddonItemsRelatedByInititemnbr();
            $this->collItemAddonItemsRelatedByInititemnbrPartial = true;
        }

        if (!$this->collItemAddonItemsRelatedByInititemnbr->contains($l)) {
            $this->doAddItemAddonItemRelatedByInititemnbr($l);

            if ($this->itemAddonItemsRelatedByInititemnbrScheduledForDeletion and $this->itemAddonItemsRelatedByInititemnbrScheduledForDeletion->contains($l)) {
                $this->itemAddonItemsRelatedByInititemnbrScheduledForDeletion->remove($this->itemAddonItemsRelatedByInititemnbrScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemAddonItem $itemAddonItemRelatedByInititemnbr The ChildItemAddonItem object to add.
     */
    protected function doAddItemAddonItemRelatedByInititemnbr(ChildItemAddonItem $itemAddonItemRelatedByInititemnbr)
    {
        $this->collItemAddonItemsRelatedByInititemnbr[]= $itemAddonItemRelatedByInititemnbr;
        $itemAddonItemRelatedByInititemnbr->setItemMasterItemRelatedByInititemnbr($this);
    }

    /**
     * @param  ChildItemAddonItem $itemAddonItemRelatedByInititemnbr The ChildItemAddonItem object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemAddonItemRelatedByInititemnbr(ChildItemAddonItem $itemAddonItemRelatedByInititemnbr)
    {
        if ($this->getItemAddonItemsRelatedByInititemnbr()->contains($itemAddonItemRelatedByInititemnbr)) {
            $pos = $this->collItemAddonItemsRelatedByInititemnbr->search($itemAddonItemRelatedByInititemnbr);
            $this->collItemAddonItemsRelatedByInititemnbr->remove($pos);
            if (null === $this->itemAddonItemsRelatedByInititemnbrScheduledForDeletion) {
                $this->itemAddonItemsRelatedByInititemnbrScheduledForDeletion = clone $this->collItemAddonItemsRelatedByInititemnbr;
                $this->itemAddonItemsRelatedByInititemnbrScheduledForDeletion->clear();
            }
            $this->itemAddonItemsRelatedByInititemnbrScheduledForDeletion[]= clone $itemAddonItemRelatedByInititemnbr;
            $itemAddonItemRelatedByInititemnbr->setItemMasterItemRelatedByInititemnbr(null);
        }

        return $this;
    }

    /**
     * Clears out the collItemAddonItemsRelatedByAdonadditemnbr collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemAddonItemsRelatedByAdonadditemnbr()
     */
    public function clearItemAddonItemsRelatedByAdonadditemnbr()
    {
        $this->collItemAddonItemsRelatedByAdonadditemnbr = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemAddonItemsRelatedByAdonadditemnbr collection loaded partially.
     */
    public function resetPartialItemAddonItemsRelatedByAdonadditemnbr($v = true)
    {
        $this->collItemAddonItemsRelatedByAdonadditemnbrPartial = $v;
    }

    /**
     * Initializes the collItemAddonItemsRelatedByAdonadditemnbr collection.
     *
     * By default this just sets the collItemAddonItemsRelatedByAdonadditemnbr collection to an empty array (like clearcollItemAddonItemsRelatedByAdonadditemnbr());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemAddonItemsRelatedByAdonadditemnbr($overrideExisting = true)
    {
        if (null !== $this->collItemAddonItemsRelatedByAdonadditemnbr && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemAddonItemTableMap::getTableMap()->getCollectionClassName();

        $this->collItemAddonItemsRelatedByAdonadditemnbr = new $collectionClassName;
        $this->collItemAddonItemsRelatedByAdonadditemnbr->setModel('\ItemAddonItem');
    }

    /**
     * Gets an array of ChildItemAddonItem objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemAddonItem[] List of ChildItemAddonItem objects
     * @throws PropelException
     */
    public function getItemAddonItemsRelatedByAdonadditemnbr(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemAddonItemsRelatedByAdonadditemnbrPartial && !$this->isNew();
        if (null === $this->collItemAddonItemsRelatedByAdonadditemnbr || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemAddonItemsRelatedByAdonadditemnbr) {
                // return empty collection
                $this->initItemAddonItemsRelatedByAdonadditemnbr();
            } else {
                $collItemAddonItemsRelatedByAdonadditemnbr = ChildItemAddonItemQuery::create(null, $criteria)
                    ->filterByItemMasterItemRelatedByAdonadditemnbr($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemAddonItemsRelatedByAdonadditemnbrPartial && count($collItemAddonItemsRelatedByAdonadditemnbr)) {
                        $this->initItemAddonItemsRelatedByAdonadditemnbr(false);

                        foreach ($collItemAddonItemsRelatedByAdonadditemnbr as $obj) {
                            if (false == $this->collItemAddonItemsRelatedByAdonadditemnbr->contains($obj)) {
                                $this->collItemAddonItemsRelatedByAdonadditemnbr->append($obj);
                            }
                        }

                        $this->collItemAddonItemsRelatedByAdonadditemnbrPartial = true;
                    }

                    return $collItemAddonItemsRelatedByAdonadditemnbr;
                }

                if ($partial && $this->collItemAddonItemsRelatedByAdonadditemnbr) {
                    foreach ($this->collItemAddonItemsRelatedByAdonadditemnbr as $obj) {
                        if ($obj->isNew()) {
                            $collItemAddonItemsRelatedByAdonadditemnbr[] = $obj;
                        }
                    }
                }

                $this->collItemAddonItemsRelatedByAdonadditemnbr = $collItemAddonItemsRelatedByAdonadditemnbr;
                $this->collItemAddonItemsRelatedByAdonadditemnbrPartial = false;
            }
        }

        return $this->collItemAddonItemsRelatedByAdonadditemnbr;
    }

    /**
     * Sets a collection of ChildItemAddonItem objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemAddonItemsRelatedByAdonadditemnbr A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemAddonItemsRelatedByAdonadditemnbr(Collection $itemAddonItemsRelatedByAdonadditemnbr, ConnectionInterface $con = null)
    {
        /** @var ChildItemAddonItem[] $itemAddonItemsRelatedByAdonadditemnbrToDelete */
        $itemAddonItemsRelatedByAdonadditemnbrToDelete = $this->getItemAddonItemsRelatedByAdonadditemnbr(new Criteria(), $con)->diff($itemAddonItemsRelatedByAdonadditemnbr);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion = clone $itemAddonItemsRelatedByAdonadditemnbrToDelete;

        foreach ($itemAddonItemsRelatedByAdonadditemnbrToDelete as $itemAddonItemRelatedByAdonadditemnbrRemoved) {
            $itemAddonItemRelatedByAdonadditemnbrRemoved->setItemMasterItemRelatedByAdonadditemnbr(null);
        }

        $this->collItemAddonItemsRelatedByAdonadditemnbr = null;
        foreach ($itemAddonItemsRelatedByAdonadditemnbr as $itemAddonItemRelatedByAdonadditemnbr) {
            $this->addItemAddonItemRelatedByAdonadditemnbr($itemAddonItemRelatedByAdonadditemnbr);
        }

        $this->collItemAddonItemsRelatedByAdonadditemnbr = $itemAddonItemsRelatedByAdonadditemnbr;
        $this->collItemAddonItemsRelatedByAdonadditemnbrPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemAddonItem objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemAddonItem objects.
     * @throws PropelException
     */
    public function countItemAddonItemsRelatedByAdonadditemnbr(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemAddonItemsRelatedByAdonadditemnbrPartial && !$this->isNew();
        if (null === $this->collItemAddonItemsRelatedByAdonadditemnbr || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemAddonItemsRelatedByAdonadditemnbr) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemAddonItemsRelatedByAdonadditemnbr());
            }

            $query = ChildItemAddonItemQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItemRelatedByAdonadditemnbr($this)
                ->count($con);
        }

        return count($this->collItemAddonItemsRelatedByAdonadditemnbr);
    }

    /**
     * Method called to associate a ChildItemAddonItem object to this object
     * through the ChildItemAddonItem foreign key attribute.
     *
     * @param  ChildItemAddonItem $l ChildItemAddonItem
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemAddonItemRelatedByAdonadditemnbr(ChildItemAddonItem $l)
    {
        if ($this->collItemAddonItemsRelatedByAdonadditemnbr === null) {
            $this->initItemAddonItemsRelatedByAdonadditemnbr();
            $this->collItemAddonItemsRelatedByAdonadditemnbrPartial = true;
        }

        if (!$this->collItemAddonItemsRelatedByAdonadditemnbr->contains($l)) {
            $this->doAddItemAddonItemRelatedByAdonadditemnbr($l);

            if ($this->itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion and $this->itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion->contains($l)) {
                $this->itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion->remove($this->itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemAddonItem $itemAddonItemRelatedByAdonadditemnbr The ChildItemAddonItem object to add.
     */
    protected function doAddItemAddonItemRelatedByAdonadditemnbr(ChildItemAddonItem $itemAddonItemRelatedByAdonadditemnbr)
    {
        $this->collItemAddonItemsRelatedByAdonadditemnbr[]= $itemAddonItemRelatedByAdonadditemnbr;
        $itemAddonItemRelatedByAdonadditemnbr->setItemMasterItemRelatedByAdonadditemnbr($this);
    }

    /**
     * @param  ChildItemAddonItem $itemAddonItemRelatedByAdonadditemnbr The ChildItemAddonItem object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemAddonItemRelatedByAdonadditemnbr(ChildItemAddonItem $itemAddonItemRelatedByAdonadditemnbr)
    {
        if ($this->getItemAddonItemsRelatedByAdonadditemnbr()->contains($itemAddonItemRelatedByAdonadditemnbr)) {
            $pos = $this->collItemAddonItemsRelatedByAdonadditemnbr->search($itemAddonItemRelatedByAdonadditemnbr);
            $this->collItemAddonItemsRelatedByAdonadditemnbr->remove($pos);
            if (null === $this->itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion) {
                $this->itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion = clone $this->collItemAddonItemsRelatedByAdonadditemnbr;
                $this->itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion->clear();
            }
            $this->itemAddonItemsRelatedByAdonadditemnbrScheduledForDeletion[]= clone $itemAddonItemRelatedByAdonadditemnbr;
            $itemAddonItemRelatedByAdonadditemnbr->setItemMasterItemRelatedByAdonadditemnbr(null);
        }

        return $this;
    }

    /**
     * Gets a single ChildItmDimension object, which is related to this object by a one-to-one relationship.
     *
     * @param  ConnectionInterface $con optional connection object
     * @return ChildItmDimension
     * @throws PropelException
     */
    public function getItmDimension(ConnectionInterface $con = null)
    {

        if ($this->singleItmDimension === null && !$this->isNew()) {
            $this->singleItmDimension = ChildItmDimensionQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleItmDimension;
    }

    /**
     * Sets a single ChildItmDimension object as related to this object by a one-to-one relationship.
     *
     * @param  ChildItmDimension $v ChildItmDimension
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setItmDimension(ChildItmDimension $v = null)
    {
        $this->singleItmDimension = $v;

        // Make sure that that the passed-in ChildItmDimension isn't already associated with this object
        if ($v !== null && $v->getItemMasterItem(null, false) === null) {
            $v->setItemMasterItem($this);
        }

        return $this;
    }

    /**
     * Gets a single ChildInvHazmatItem object, which is related to this object by a one-to-one relationship.
     *
     * @param  ConnectionInterface $con optional connection object
     * @return ChildInvHazmatItem
     * @throws PropelException
     */
    public function getInvHazmatItem(ConnectionInterface $con = null)
    {

        if ($this->singleInvHazmatItem === null && !$this->isNew()) {
            $this->singleInvHazmatItem = ChildInvHazmatItemQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleInvHazmatItem;
    }

    /**
     * Sets a single ChildInvHazmatItem object as related to this object by a one-to-one relationship.
     *
     * @param  ChildInvHazmatItem $v ChildInvHazmatItem
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvHazmatItem(ChildInvHazmatItem $v = null)
    {
        $this->singleInvHazmatItem = $v;

        // Make sure that that the passed-in ChildInvHazmatItem isn't already associated with this object
        if ($v !== null && $v->getItemMasterItem(null, false) === null) {
            $v->setItemMasterItem($this);
        }

        return $this;
    }

    /**
     * Clears out the collInvWhseLots collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvWhseLots()
     */
    public function clearInvWhseLots()
    {
        $this->collInvWhseLots = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvWhseLots collection loaded partially.
     */
    public function resetPartialInvWhseLots($v = true)
    {
        $this->collInvWhseLotsPartial = $v;
    }

    /**
     * Initializes the collInvWhseLots collection.
     *
     * By default this just sets the collInvWhseLots collection to an empty array (like clearcollInvWhseLots());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvWhseLots($overrideExisting = true)
    {
        if (null !== $this->collInvWhseLots && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvWhseLotTableMap::getTableMap()->getCollectionClassName();

        $this->collInvWhseLots = new $collectionClassName;
        $this->collInvWhseLots->setModel('\InvWhseLot');
    }

    /**
     * Gets an array of ChildInvWhseLot objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvWhseLot[] List of ChildInvWhseLot objects
     * @throws PropelException
     */
    public function getInvWhseLots(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvWhseLotsPartial && !$this->isNew();
        if (null === $this->collInvWhseLots || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvWhseLots) {
                // return empty collection
                $this->initInvWhseLots();
            } else {
                $collInvWhseLots = ChildInvWhseLotQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvWhseLotsPartial && count($collInvWhseLots)) {
                        $this->initInvWhseLots(false);

                        foreach ($collInvWhseLots as $obj) {
                            if (false == $this->collInvWhseLots->contains($obj)) {
                                $this->collInvWhseLots->append($obj);
                            }
                        }

                        $this->collInvWhseLotsPartial = true;
                    }

                    return $collInvWhseLots;
                }

                if ($partial && $this->collInvWhseLots) {
                    foreach ($this->collInvWhseLots as $obj) {
                        if ($obj->isNew()) {
                            $collInvWhseLots[] = $obj;
                        }
                    }
                }

                $this->collInvWhseLots = $collInvWhseLots;
                $this->collInvWhseLotsPartial = false;
            }
        }

        return $this->collInvWhseLots;
    }

    /**
     * Sets a collection of ChildInvWhseLot objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invWhseLots A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvWhseLots(Collection $invWhseLots, ConnectionInterface $con = null)
    {
        /** @var ChildInvWhseLot[] $invWhseLotsToDelete */
        $invWhseLotsToDelete = $this->getInvWhseLots(new Criteria(), $con)->diff($invWhseLots);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invWhseLotsScheduledForDeletion = clone $invWhseLotsToDelete;

        foreach ($invWhseLotsToDelete as $invWhseLotRemoved) {
            $invWhseLotRemoved->setItemMasterItem(null);
        }

        $this->collInvWhseLots = null;
        foreach ($invWhseLots as $invWhseLot) {
            $this->addInvWhseLot($invWhseLot);
        }

        $this->collInvWhseLots = $invWhseLots;
        $this->collInvWhseLotsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvWhseLot objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvWhseLot objects.
     * @throws PropelException
     */
    public function countInvWhseLots(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvWhseLotsPartial && !$this->isNew();
        if (null === $this->collInvWhseLots || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvWhseLots) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvWhseLots());
            }

            $query = ChildInvWhseLotQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collInvWhseLots);
    }

    /**
     * Method called to associate a ChildInvWhseLot object to this object
     * through the ChildInvWhseLot foreign key attribute.
     *
     * @param  ChildInvWhseLot $l ChildInvWhseLot
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvWhseLot(ChildInvWhseLot $l)
    {
        if ($this->collInvWhseLots === null) {
            $this->initInvWhseLots();
            $this->collInvWhseLotsPartial = true;
        }

        if (!$this->collInvWhseLots->contains($l)) {
            $this->doAddInvWhseLot($l);

            if ($this->invWhseLotsScheduledForDeletion and $this->invWhseLotsScheduledForDeletion->contains($l)) {
                $this->invWhseLotsScheduledForDeletion->remove($this->invWhseLotsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvWhseLot $invWhseLot The ChildInvWhseLot object to add.
     */
    protected function doAddInvWhseLot(ChildInvWhseLot $invWhseLot)
    {
        $this->collInvWhseLots[]= $invWhseLot;
        $invWhseLot->setItemMasterItem($this);
    }

    /**
     * @param  ChildInvWhseLot $invWhseLot The ChildInvWhseLot object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvWhseLot(ChildInvWhseLot $invWhseLot)
    {
        if ($this->getInvWhseLots()->contains($invWhseLot)) {
            $pos = $this->collInvWhseLots->search($invWhseLot);
            $this->collInvWhseLots->remove($pos);
            if (null === $this->invWhseLotsScheduledForDeletion) {
                $this->invWhseLotsScheduledForDeletion = clone $this->collInvWhseLots;
                $this->invWhseLotsScheduledForDeletion->clear();
            }
            $this->invWhseLotsScheduledForDeletion[]= clone $invWhseLot;
            $invWhseLot->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvWhseLots from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvWhseLot[] List of ChildInvWhseLot objects
     */
    public function getInvWhseLotsJoinWarehouse(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvWhseLotQuery::create(null, $criteria);
        $query->joinWith('Warehouse', $joinBehavior);

        return $this->getInvWhseLots($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvWhseLots from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvWhseLot[] List of ChildInvWhseLot objects
     */
    public function getInvWhseLotsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvWhseLotQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getInvWhseLots($query, $con);
    }

    /**
     * Clears out the collItemSubstitutesRelatedByInititemnbr collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemSubstitutesRelatedByInititemnbr()
     */
    public function clearItemSubstitutesRelatedByInititemnbr()
    {
        $this->collItemSubstitutesRelatedByInititemnbr = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemSubstitutesRelatedByInititemnbr collection loaded partially.
     */
    public function resetPartialItemSubstitutesRelatedByInititemnbr($v = true)
    {
        $this->collItemSubstitutesRelatedByInititemnbrPartial = $v;
    }

    /**
     * Initializes the collItemSubstitutesRelatedByInititemnbr collection.
     *
     * By default this just sets the collItemSubstitutesRelatedByInititemnbr collection to an empty array (like clearcollItemSubstitutesRelatedByInititemnbr());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemSubstitutesRelatedByInititemnbr($overrideExisting = true)
    {
        if (null !== $this->collItemSubstitutesRelatedByInititemnbr && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemSubstituteTableMap::getTableMap()->getCollectionClassName();

        $this->collItemSubstitutesRelatedByInititemnbr = new $collectionClassName;
        $this->collItemSubstitutesRelatedByInititemnbr->setModel('\ItemSubstitute');
    }

    /**
     * Gets an array of ChildItemSubstitute objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemSubstitute[] List of ChildItemSubstitute objects
     * @throws PropelException
     */
    public function getItemSubstitutesRelatedByInititemnbr(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemSubstitutesRelatedByInititemnbrPartial && !$this->isNew();
        if (null === $this->collItemSubstitutesRelatedByInititemnbr || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemSubstitutesRelatedByInititemnbr) {
                // return empty collection
                $this->initItemSubstitutesRelatedByInititemnbr();
            } else {
                $collItemSubstitutesRelatedByInititemnbr = ChildItemSubstituteQuery::create(null, $criteria)
                    ->filterByItemMasterItemRelatedByInititemnbr($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemSubstitutesRelatedByInititemnbrPartial && count($collItemSubstitutesRelatedByInititemnbr)) {
                        $this->initItemSubstitutesRelatedByInititemnbr(false);

                        foreach ($collItemSubstitutesRelatedByInititemnbr as $obj) {
                            if (false == $this->collItemSubstitutesRelatedByInititemnbr->contains($obj)) {
                                $this->collItemSubstitutesRelatedByInititemnbr->append($obj);
                            }
                        }

                        $this->collItemSubstitutesRelatedByInititemnbrPartial = true;
                    }

                    return $collItemSubstitutesRelatedByInititemnbr;
                }

                if ($partial && $this->collItemSubstitutesRelatedByInititemnbr) {
                    foreach ($this->collItemSubstitutesRelatedByInititemnbr as $obj) {
                        if ($obj->isNew()) {
                            $collItemSubstitutesRelatedByInititemnbr[] = $obj;
                        }
                    }
                }

                $this->collItemSubstitutesRelatedByInititemnbr = $collItemSubstitutesRelatedByInititemnbr;
                $this->collItemSubstitutesRelatedByInititemnbrPartial = false;
            }
        }

        return $this->collItemSubstitutesRelatedByInititemnbr;
    }

    /**
     * Sets a collection of ChildItemSubstitute objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemSubstitutesRelatedByInititemnbr A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemSubstitutesRelatedByInititemnbr(Collection $itemSubstitutesRelatedByInititemnbr, ConnectionInterface $con = null)
    {
        /** @var ChildItemSubstitute[] $itemSubstitutesRelatedByInititemnbrToDelete */
        $itemSubstitutesRelatedByInititemnbrToDelete = $this->getItemSubstitutesRelatedByInititemnbr(new Criteria(), $con)->diff($itemSubstitutesRelatedByInititemnbr);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->itemSubstitutesRelatedByInititemnbrScheduledForDeletion = clone $itemSubstitutesRelatedByInititemnbrToDelete;

        foreach ($itemSubstitutesRelatedByInititemnbrToDelete as $itemSubstituteRelatedByInititemnbrRemoved) {
            $itemSubstituteRelatedByInititemnbrRemoved->setItemMasterItemRelatedByInititemnbr(null);
        }

        $this->collItemSubstitutesRelatedByInititemnbr = null;
        foreach ($itemSubstitutesRelatedByInititemnbr as $itemSubstituteRelatedByInititemnbr) {
            $this->addItemSubstituteRelatedByInititemnbr($itemSubstituteRelatedByInititemnbr);
        }

        $this->collItemSubstitutesRelatedByInititemnbr = $itemSubstitutesRelatedByInititemnbr;
        $this->collItemSubstitutesRelatedByInititemnbrPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemSubstitute objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemSubstitute objects.
     * @throws PropelException
     */
    public function countItemSubstitutesRelatedByInititemnbr(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemSubstitutesRelatedByInititemnbrPartial && !$this->isNew();
        if (null === $this->collItemSubstitutesRelatedByInititemnbr || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemSubstitutesRelatedByInititemnbr) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemSubstitutesRelatedByInititemnbr());
            }

            $query = ChildItemSubstituteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItemRelatedByInititemnbr($this)
                ->count($con);
        }

        return count($this->collItemSubstitutesRelatedByInititemnbr);
    }

    /**
     * Method called to associate a ChildItemSubstitute object to this object
     * through the ChildItemSubstitute foreign key attribute.
     *
     * @param  ChildItemSubstitute $l ChildItemSubstitute
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemSubstituteRelatedByInititemnbr(ChildItemSubstitute $l)
    {
        if ($this->collItemSubstitutesRelatedByInititemnbr === null) {
            $this->initItemSubstitutesRelatedByInititemnbr();
            $this->collItemSubstitutesRelatedByInititemnbrPartial = true;
        }

        if (!$this->collItemSubstitutesRelatedByInititemnbr->contains($l)) {
            $this->doAddItemSubstituteRelatedByInititemnbr($l);

            if ($this->itemSubstitutesRelatedByInititemnbrScheduledForDeletion and $this->itemSubstitutesRelatedByInititemnbrScheduledForDeletion->contains($l)) {
                $this->itemSubstitutesRelatedByInititemnbrScheduledForDeletion->remove($this->itemSubstitutesRelatedByInititemnbrScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemSubstitute $itemSubstituteRelatedByInititemnbr The ChildItemSubstitute object to add.
     */
    protected function doAddItemSubstituteRelatedByInititemnbr(ChildItemSubstitute $itemSubstituteRelatedByInititemnbr)
    {
        $this->collItemSubstitutesRelatedByInititemnbr[]= $itemSubstituteRelatedByInititemnbr;
        $itemSubstituteRelatedByInititemnbr->setItemMasterItemRelatedByInititemnbr($this);
    }

    /**
     * @param  ChildItemSubstitute $itemSubstituteRelatedByInititemnbr The ChildItemSubstitute object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemSubstituteRelatedByInititemnbr(ChildItemSubstitute $itemSubstituteRelatedByInititemnbr)
    {
        if ($this->getItemSubstitutesRelatedByInititemnbr()->contains($itemSubstituteRelatedByInititemnbr)) {
            $pos = $this->collItemSubstitutesRelatedByInititemnbr->search($itemSubstituteRelatedByInititemnbr);
            $this->collItemSubstitutesRelatedByInititemnbr->remove($pos);
            if (null === $this->itemSubstitutesRelatedByInititemnbrScheduledForDeletion) {
                $this->itemSubstitutesRelatedByInititemnbrScheduledForDeletion = clone $this->collItemSubstitutesRelatedByInititemnbr;
                $this->itemSubstitutesRelatedByInititemnbrScheduledForDeletion->clear();
            }
            $this->itemSubstitutesRelatedByInititemnbrScheduledForDeletion[]= clone $itemSubstituteRelatedByInititemnbr;
            $itemSubstituteRelatedByInititemnbr->setItemMasterItemRelatedByInititemnbr(null);
        }

        return $this;
    }

    /**
     * Clears out the collItemSubstitutesRelatedByInsisubitemnbr collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemSubstitutesRelatedByInsisubitemnbr()
     */
    public function clearItemSubstitutesRelatedByInsisubitemnbr()
    {
        $this->collItemSubstitutesRelatedByInsisubitemnbr = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemSubstitutesRelatedByInsisubitemnbr collection loaded partially.
     */
    public function resetPartialItemSubstitutesRelatedByInsisubitemnbr($v = true)
    {
        $this->collItemSubstitutesRelatedByInsisubitemnbrPartial = $v;
    }

    /**
     * Initializes the collItemSubstitutesRelatedByInsisubitemnbr collection.
     *
     * By default this just sets the collItemSubstitutesRelatedByInsisubitemnbr collection to an empty array (like clearcollItemSubstitutesRelatedByInsisubitemnbr());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemSubstitutesRelatedByInsisubitemnbr($overrideExisting = true)
    {
        if (null !== $this->collItemSubstitutesRelatedByInsisubitemnbr && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemSubstituteTableMap::getTableMap()->getCollectionClassName();

        $this->collItemSubstitutesRelatedByInsisubitemnbr = new $collectionClassName;
        $this->collItemSubstitutesRelatedByInsisubitemnbr->setModel('\ItemSubstitute');
    }

    /**
     * Gets an array of ChildItemSubstitute objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemSubstitute[] List of ChildItemSubstitute objects
     * @throws PropelException
     */
    public function getItemSubstitutesRelatedByInsisubitemnbr(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemSubstitutesRelatedByInsisubitemnbrPartial && !$this->isNew();
        if (null === $this->collItemSubstitutesRelatedByInsisubitemnbr || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemSubstitutesRelatedByInsisubitemnbr) {
                // return empty collection
                $this->initItemSubstitutesRelatedByInsisubitemnbr();
            } else {
                $collItemSubstitutesRelatedByInsisubitemnbr = ChildItemSubstituteQuery::create(null, $criteria)
                    ->filterByItemMasterItemRelatedByInsisubitemnbr($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemSubstitutesRelatedByInsisubitemnbrPartial && count($collItemSubstitutesRelatedByInsisubitemnbr)) {
                        $this->initItemSubstitutesRelatedByInsisubitemnbr(false);

                        foreach ($collItemSubstitutesRelatedByInsisubitemnbr as $obj) {
                            if (false == $this->collItemSubstitutesRelatedByInsisubitemnbr->contains($obj)) {
                                $this->collItemSubstitutesRelatedByInsisubitemnbr->append($obj);
                            }
                        }

                        $this->collItemSubstitutesRelatedByInsisubitemnbrPartial = true;
                    }

                    return $collItemSubstitutesRelatedByInsisubitemnbr;
                }

                if ($partial && $this->collItemSubstitutesRelatedByInsisubitemnbr) {
                    foreach ($this->collItemSubstitutesRelatedByInsisubitemnbr as $obj) {
                        if ($obj->isNew()) {
                            $collItemSubstitutesRelatedByInsisubitemnbr[] = $obj;
                        }
                    }
                }

                $this->collItemSubstitutesRelatedByInsisubitemnbr = $collItemSubstitutesRelatedByInsisubitemnbr;
                $this->collItemSubstitutesRelatedByInsisubitemnbrPartial = false;
            }
        }

        return $this->collItemSubstitutesRelatedByInsisubitemnbr;
    }

    /**
     * Sets a collection of ChildItemSubstitute objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemSubstitutesRelatedByInsisubitemnbr A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemSubstitutesRelatedByInsisubitemnbr(Collection $itemSubstitutesRelatedByInsisubitemnbr, ConnectionInterface $con = null)
    {
        /** @var ChildItemSubstitute[] $itemSubstitutesRelatedByInsisubitemnbrToDelete */
        $itemSubstitutesRelatedByInsisubitemnbrToDelete = $this->getItemSubstitutesRelatedByInsisubitemnbr(new Criteria(), $con)->diff($itemSubstitutesRelatedByInsisubitemnbr);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion = clone $itemSubstitutesRelatedByInsisubitemnbrToDelete;

        foreach ($itemSubstitutesRelatedByInsisubitemnbrToDelete as $itemSubstituteRelatedByInsisubitemnbrRemoved) {
            $itemSubstituteRelatedByInsisubitemnbrRemoved->setItemMasterItemRelatedByInsisubitemnbr(null);
        }

        $this->collItemSubstitutesRelatedByInsisubitemnbr = null;
        foreach ($itemSubstitutesRelatedByInsisubitemnbr as $itemSubstituteRelatedByInsisubitemnbr) {
            $this->addItemSubstituteRelatedByInsisubitemnbr($itemSubstituteRelatedByInsisubitemnbr);
        }

        $this->collItemSubstitutesRelatedByInsisubitemnbr = $itemSubstitutesRelatedByInsisubitemnbr;
        $this->collItemSubstitutesRelatedByInsisubitemnbrPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemSubstitute objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemSubstitute objects.
     * @throws PropelException
     */
    public function countItemSubstitutesRelatedByInsisubitemnbr(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemSubstitutesRelatedByInsisubitemnbrPartial && !$this->isNew();
        if (null === $this->collItemSubstitutesRelatedByInsisubitemnbr || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemSubstitutesRelatedByInsisubitemnbr) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemSubstitutesRelatedByInsisubitemnbr());
            }

            $query = ChildItemSubstituteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItemRelatedByInsisubitemnbr($this)
                ->count($con);
        }

        return count($this->collItemSubstitutesRelatedByInsisubitemnbr);
    }

    /**
     * Method called to associate a ChildItemSubstitute object to this object
     * through the ChildItemSubstitute foreign key attribute.
     *
     * @param  ChildItemSubstitute $l ChildItemSubstitute
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemSubstituteRelatedByInsisubitemnbr(ChildItemSubstitute $l)
    {
        if ($this->collItemSubstitutesRelatedByInsisubitemnbr === null) {
            $this->initItemSubstitutesRelatedByInsisubitemnbr();
            $this->collItemSubstitutesRelatedByInsisubitemnbrPartial = true;
        }

        if (!$this->collItemSubstitutesRelatedByInsisubitemnbr->contains($l)) {
            $this->doAddItemSubstituteRelatedByInsisubitemnbr($l);

            if ($this->itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion and $this->itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion->contains($l)) {
                $this->itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion->remove($this->itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemSubstitute $itemSubstituteRelatedByInsisubitemnbr The ChildItemSubstitute object to add.
     */
    protected function doAddItemSubstituteRelatedByInsisubitemnbr(ChildItemSubstitute $itemSubstituteRelatedByInsisubitemnbr)
    {
        $this->collItemSubstitutesRelatedByInsisubitemnbr[]= $itemSubstituteRelatedByInsisubitemnbr;
        $itemSubstituteRelatedByInsisubitemnbr->setItemMasterItemRelatedByInsisubitemnbr($this);
    }

    /**
     * @param  ChildItemSubstitute $itemSubstituteRelatedByInsisubitemnbr The ChildItemSubstitute object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemSubstituteRelatedByInsisubitemnbr(ChildItemSubstitute $itemSubstituteRelatedByInsisubitemnbr)
    {
        if ($this->getItemSubstitutesRelatedByInsisubitemnbr()->contains($itemSubstituteRelatedByInsisubitemnbr)) {
            $pos = $this->collItemSubstitutesRelatedByInsisubitemnbr->search($itemSubstituteRelatedByInsisubitemnbr);
            $this->collItemSubstitutesRelatedByInsisubitemnbr->remove($pos);
            if (null === $this->itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion) {
                $this->itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion = clone $this->collItemSubstitutesRelatedByInsisubitemnbr;
                $this->itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion->clear();
            }
            $this->itemSubstitutesRelatedByInsisubitemnbrScheduledForDeletion[]= clone $itemSubstituteRelatedByInsisubitemnbr;
            $itemSubstituteRelatedByInsisubitemnbr->setItemMasterItemRelatedByInsisubitemnbr(null);
        }

        return $this;
    }

    /**
     * Clears out the collInvLotTags collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvLotTags()
     */
    public function clearInvLotTags()
    {
        $this->collInvLotTags = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvLotTags collection loaded partially.
     */
    public function resetPartialInvLotTags($v = true)
    {
        $this->collInvLotTagsPartial = $v;
    }

    /**
     * Initializes the collInvLotTags collection.
     *
     * By default this just sets the collInvLotTags collection to an empty array (like clearcollInvLotTags());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvLotTags($overrideExisting = true)
    {
        if (null !== $this->collInvLotTags && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvLotTagTableMap::getTableMap()->getCollectionClassName();

        $this->collInvLotTags = new $collectionClassName;
        $this->collInvLotTags->setModel('\InvLotTag');
    }

    /**
     * Gets an array of ChildInvLotTag objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     * @throws PropelException
     */
    public function getInvLotTags(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvLotTagsPartial && !$this->isNew();
        if (null === $this->collInvLotTags || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvLotTags) {
                // return empty collection
                $this->initInvLotTags();
            } else {
                $collInvLotTags = ChildInvLotTagQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvLotTagsPartial && count($collInvLotTags)) {
                        $this->initInvLotTags(false);

                        foreach ($collInvLotTags as $obj) {
                            if (false == $this->collInvLotTags->contains($obj)) {
                                $this->collInvLotTags->append($obj);
                            }
                        }

                        $this->collInvLotTagsPartial = true;
                    }

                    return $collInvLotTags;
                }

                if ($partial && $this->collInvLotTags) {
                    foreach ($this->collInvLotTags as $obj) {
                        if ($obj->isNew()) {
                            $collInvLotTags[] = $obj;
                        }
                    }
                }

                $this->collInvLotTags = $collInvLotTags;
                $this->collInvLotTagsPartial = false;
            }
        }

        return $this->collInvLotTags;
    }

    /**
     * Sets a collection of ChildInvLotTag objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invLotTags A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvLotTags(Collection $invLotTags, ConnectionInterface $con = null)
    {
        /** @var ChildInvLotTag[] $invLotTagsToDelete */
        $invLotTagsToDelete = $this->getInvLotTags(new Criteria(), $con)->diff($invLotTags);


        $this->invLotTagsScheduledForDeletion = $invLotTagsToDelete;

        foreach ($invLotTagsToDelete as $invLotTagRemoved) {
            $invLotTagRemoved->setItemMasterItem(null);
        }

        $this->collInvLotTags = null;
        foreach ($invLotTags as $invLotTag) {
            $this->addInvLotTag($invLotTag);
        }

        $this->collInvLotTags = $invLotTags;
        $this->collInvLotTagsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvLotTag objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvLotTag objects.
     * @throws PropelException
     */
    public function countInvLotTags(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvLotTagsPartial && !$this->isNew();
        if (null === $this->collInvLotTags || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvLotTags) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvLotTags());
            }

            $query = ChildInvLotTagQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collInvLotTags);
    }

    /**
     * Method called to associate a ChildInvLotTag object to this object
     * through the ChildInvLotTag foreign key attribute.
     *
     * @param  ChildInvLotTag $l ChildInvLotTag
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvLotTag(ChildInvLotTag $l)
    {
        if ($this->collInvLotTags === null) {
            $this->initInvLotTags();
            $this->collInvLotTagsPartial = true;
        }

        if (!$this->collInvLotTags->contains($l)) {
            $this->doAddInvLotTag($l);

            if ($this->invLotTagsScheduledForDeletion and $this->invLotTagsScheduledForDeletion->contains($l)) {
                $this->invLotTagsScheduledForDeletion->remove($this->invLotTagsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvLotTag $invLotTag The ChildInvLotTag object to add.
     */
    protected function doAddInvLotTag(ChildInvLotTag $invLotTag)
    {
        $this->collInvLotTags[]= $invLotTag;
        $invLotTag->setItemMasterItem($this);
    }

    /**
     * @param  ChildInvLotTag $invLotTag The ChildInvLotTag object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvLotTag(ChildInvLotTag $invLotTag)
    {
        if ($this->getInvLotTags()->contains($invLotTag)) {
            $pos = $this->collInvLotTags->search($invLotTag);
            $this->collInvLotTags->remove($pos);
            if (null === $this->invLotTagsScheduledForDeletion) {
                $this->invLotTagsScheduledForDeletion = clone $this->collInvLotTags;
                $this->invLotTagsScheduledForDeletion->clear();
            }
            $this->invLotTagsScheduledForDeletion[]= clone $invLotTag;
            $invLotTag->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     */
    public function getInvLotTagsJoinWarehouse(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvLotTagQuery::create(null, $criteria);
        $query->joinWith('Warehouse', $joinBehavior);

        return $this->getInvLotTags($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     */
    public function getInvLotTagsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvLotTagQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getInvLotTags($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     */
    public function getInvLotTagsJoinInvSerialMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvLotTagQuery::create(null, $criteria);
        $query->joinWith('InvSerialMaster', $joinBehavior);

        return $this->getInvLotTags($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     */
    public function getInvLotTagsJoinDplusUser(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvLotTagQuery::create(null, $criteria);
        $query->joinWith('DplusUser', $joinBehavior);

        return $this->getInvLotTags($query, $con);
    }

    /**
     * Clears out the collInvItem2ItemsRelatedByI2imstritemid collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvItem2ItemsRelatedByI2imstritemid()
     */
    public function clearInvItem2ItemsRelatedByI2imstritemid()
    {
        $this->collInvItem2ItemsRelatedByI2imstritemid = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvItem2ItemsRelatedByI2imstritemid collection loaded partially.
     */
    public function resetPartialInvItem2ItemsRelatedByI2imstritemid($v = true)
    {
        $this->collInvItem2ItemsRelatedByI2imstritemidPartial = $v;
    }

    /**
     * Initializes the collInvItem2ItemsRelatedByI2imstritemid collection.
     *
     * By default this just sets the collInvItem2ItemsRelatedByI2imstritemid collection to an empty array (like clearcollInvItem2ItemsRelatedByI2imstritemid());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvItem2ItemsRelatedByI2imstritemid($overrideExisting = true)
    {
        if (null !== $this->collInvItem2ItemsRelatedByI2imstritemid && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvItem2ItemTableMap::getTableMap()->getCollectionClassName();

        $this->collInvItem2ItemsRelatedByI2imstritemid = new $collectionClassName;
        $this->collInvItem2ItemsRelatedByI2imstritemid->setModel('\InvItem2Item');
    }

    /**
     * Gets an array of ChildInvItem2Item objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvItem2Item[] List of ChildInvItem2Item objects
     * @throws PropelException
     */
    public function getInvItem2ItemsRelatedByI2imstritemid(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvItem2ItemsRelatedByI2imstritemidPartial && !$this->isNew();
        if (null === $this->collInvItem2ItemsRelatedByI2imstritemid || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvItem2ItemsRelatedByI2imstritemid) {
                // return empty collection
                $this->initInvItem2ItemsRelatedByI2imstritemid();
            } else {
                $collInvItem2ItemsRelatedByI2imstritemid = ChildInvItem2ItemQuery::create(null, $criteria)
                    ->filterByItemMasterItemRelatedByI2imstritemid($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvItem2ItemsRelatedByI2imstritemidPartial && count($collInvItem2ItemsRelatedByI2imstritemid)) {
                        $this->initInvItem2ItemsRelatedByI2imstritemid(false);

                        foreach ($collInvItem2ItemsRelatedByI2imstritemid as $obj) {
                            if (false == $this->collInvItem2ItemsRelatedByI2imstritemid->contains($obj)) {
                                $this->collInvItem2ItemsRelatedByI2imstritemid->append($obj);
                            }
                        }

                        $this->collInvItem2ItemsRelatedByI2imstritemidPartial = true;
                    }

                    return $collInvItem2ItemsRelatedByI2imstritemid;
                }

                if ($partial && $this->collInvItem2ItemsRelatedByI2imstritemid) {
                    foreach ($this->collInvItem2ItemsRelatedByI2imstritemid as $obj) {
                        if ($obj->isNew()) {
                            $collInvItem2ItemsRelatedByI2imstritemid[] = $obj;
                        }
                    }
                }

                $this->collInvItem2ItemsRelatedByI2imstritemid = $collInvItem2ItemsRelatedByI2imstritemid;
                $this->collInvItem2ItemsRelatedByI2imstritemidPartial = false;
            }
        }

        return $this->collInvItem2ItemsRelatedByI2imstritemid;
    }

    /**
     * Sets a collection of ChildInvItem2Item objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invItem2ItemsRelatedByI2imstritemid A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvItem2ItemsRelatedByI2imstritemid(Collection $invItem2ItemsRelatedByI2imstritemid, ConnectionInterface $con = null)
    {
        /** @var ChildInvItem2Item[] $invItem2ItemsRelatedByI2imstritemidToDelete */
        $invItem2ItemsRelatedByI2imstritemidToDelete = $this->getInvItem2ItemsRelatedByI2imstritemid(new Criteria(), $con)->diff($invItem2ItemsRelatedByI2imstritemid);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invItem2ItemsRelatedByI2imstritemidScheduledForDeletion = clone $invItem2ItemsRelatedByI2imstritemidToDelete;

        foreach ($invItem2ItemsRelatedByI2imstritemidToDelete as $invItem2ItemRelatedByI2imstritemidRemoved) {
            $invItem2ItemRelatedByI2imstritemidRemoved->setItemMasterItemRelatedByI2imstritemid(null);
        }

        $this->collInvItem2ItemsRelatedByI2imstritemid = null;
        foreach ($invItem2ItemsRelatedByI2imstritemid as $invItem2ItemRelatedByI2imstritemid) {
            $this->addInvItem2ItemRelatedByI2imstritemid($invItem2ItemRelatedByI2imstritemid);
        }

        $this->collInvItem2ItemsRelatedByI2imstritemid = $invItem2ItemsRelatedByI2imstritemid;
        $this->collInvItem2ItemsRelatedByI2imstritemidPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvItem2Item objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvItem2Item objects.
     * @throws PropelException
     */
    public function countInvItem2ItemsRelatedByI2imstritemid(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvItem2ItemsRelatedByI2imstritemidPartial && !$this->isNew();
        if (null === $this->collInvItem2ItemsRelatedByI2imstritemid || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvItem2ItemsRelatedByI2imstritemid) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvItem2ItemsRelatedByI2imstritemid());
            }

            $query = ChildInvItem2ItemQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItemRelatedByI2imstritemid($this)
                ->count($con);
        }

        return count($this->collInvItem2ItemsRelatedByI2imstritemid);
    }

    /**
     * Method called to associate a ChildInvItem2Item object to this object
     * through the ChildInvItem2Item foreign key attribute.
     *
     * @param  ChildInvItem2Item $l ChildInvItem2Item
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvItem2ItemRelatedByI2imstritemid(ChildInvItem2Item $l)
    {
        if ($this->collInvItem2ItemsRelatedByI2imstritemid === null) {
            $this->initInvItem2ItemsRelatedByI2imstritemid();
            $this->collInvItem2ItemsRelatedByI2imstritemidPartial = true;
        }

        if (!$this->collInvItem2ItemsRelatedByI2imstritemid->contains($l)) {
            $this->doAddInvItem2ItemRelatedByI2imstritemid($l);

            if ($this->invItem2ItemsRelatedByI2imstritemidScheduledForDeletion and $this->invItem2ItemsRelatedByI2imstritemidScheduledForDeletion->contains($l)) {
                $this->invItem2ItemsRelatedByI2imstritemidScheduledForDeletion->remove($this->invItem2ItemsRelatedByI2imstritemidScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvItem2Item $invItem2ItemRelatedByI2imstritemid The ChildInvItem2Item object to add.
     */
    protected function doAddInvItem2ItemRelatedByI2imstritemid(ChildInvItem2Item $invItem2ItemRelatedByI2imstritemid)
    {
        $this->collInvItem2ItemsRelatedByI2imstritemid[]= $invItem2ItemRelatedByI2imstritemid;
        $invItem2ItemRelatedByI2imstritemid->setItemMasterItemRelatedByI2imstritemid($this);
    }

    /**
     * @param  ChildInvItem2Item $invItem2ItemRelatedByI2imstritemid The ChildInvItem2Item object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvItem2ItemRelatedByI2imstritemid(ChildInvItem2Item $invItem2ItemRelatedByI2imstritemid)
    {
        if ($this->getInvItem2ItemsRelatedByI2imstritemid()->contains($invItem2ItemRelatedByI2imstritemid)) {
            $pos = $this->collInvItem2ItemsRelatedByI2imstritemid->search($invItem2ItemRelatedByI2imstritemid);
            $this->collInvItem2ItemsRelatedByI2imstritemid->remove($pos);
            if (null === $this->invItem2ItemsRelatedByI2imstritemidScheduledForDeletion) {
                $this->invItem2ItemsRelatedByI2imstritemidScheduledForDeletion = clone $this->collInvItem2ItemsRelatedByI2imstritemid;
                $this->invItem2ItemsRelatedByI2imstritemidScheduledForDeletion->clear();
            }
            $this->invItem2ItemsRelatedByI2imstritemidScheduledForDeletion[]= clone $invItem2ItemRelatedByI2imstritemid;
            $invItem2ItemRelatedByI2imstritemid->setItemMasterItemRelatedByI2imstritemid(null);
        }

        return $this;
    }

    /**
     * Clears out the collInvItem2ItemsRelatedByI2ichilditemid collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvItem2ItemsRelatedByI2ichilditemid()
     */
    public function clearInvItem2ItemsRelatedByI2ichilditemid()
    {
        $this->collInvItem2ItemsRelatedByI2ichilditemid = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvItem2ItemsRelatedByI2ichilditemid collection loaded partially.
     */
    public function resetPartialInvItem2ItemsRelatedByI2ichilditemid($v = true)
    {
        $this->collInvItem2ItemsRelatedByI2ichilditemidPartial = $v;
    }

    /**
     * Initializes the collInvItem2ItemsRelatedByI2ichilditemid collection.
     *
     * By default this just sets the collInvItem2ItemsRelatedByI2ichilditemid collection to an empty array (like clearcollInvItem2ItemsRelatedByI2ichilditemid());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvItem2ItemsRelatedByI2ichilditemid($overrideExisting = true)
    {
        if (null !== $this->collInvItem2ItemsRelatedByI2ichilditemid && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvItem2ItemTableMap::getTableMap()->getCollectionClassName();

        $this->collInvItem2ItemsRelatedByI2ichilditemid = new $collectionClassName;
        $this->collInvItem2ItemsRelatedByI2ichilditemid->setModel('\InvItem2Item');
    }

    /**
     * Gets an array of ChildInvItem2Item objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvItem2Item[] List of ChildInvItem2Item objects
     * @throws PropelException
     */
    public function getInvItem2ItemsRelatedByI2ichilditemid(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvItem2ItemsRelatedByI2ichilditemidPartial && !$this->isNew();
        if (null === $this->collInvItem2ItemsRelatedByI2ichilditemid || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvItem2ItemsRelatedByI2ichilditemid) {
                // return empty collection
                $this->initInvItem2ItemsRelatedByI2ichilditemid();
            } else {
                $collInvItem2ItemsRelatedByI2ichilditemid = ChildInvItem2ItemQuery::create(null, $criteria)
                    ->filterByItemMasterItemRelatedByI2ichilditemid($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvItem2ItemsRelatedByI2ichilditemidPartial && count($collInvItem2ItemsRelatedByI2ichilditemid)) {
                        $this->initInvItem2ItemsRelatedByI2ichilditemid(false);

                        foreach ($collInvItem2ItemsRelatedByI2ichilditemid as $obj) {
                            if (false == $this->collInvItem2ItemsRelatedByI2ichilditemid->contains($obj)) {
                                $this->collInvItem2ItemsRelatedByI2ichilditemid->append($obj);
                            }
                        }

                        $this->collInvItem2ItemsRelatedByI2ichilditemidPartial = true;
                    }

                    return $collInvItem2ItemsRelatedByI2ichilditemid;
                }

                if ($partial && $this->collInvItem2ItemsRelatedByI2ichilditemid) {
                    foreach ($this->collInvItem2ItemsRelatedByI2ichilditemid as $obj) {
                        if ($obj->isNew()) {
                            $collInvItem2ItemsRelatedByI2ichilditemid[] = $obj;
                        }
                    }
                }

                $this->collInvItem2ItemsRelatedByI2ichilditemid = $collInvItem2ItemsRelatedByI2ichilditemid;
                $this->collInvItem2ItemsRelatedByI2ichilditemidPartial = false;
            }
        }

        return $this->collInvItem2ItemsRelatedByI2ichilditemid;
    }

    /**
     * Sets a collection of ChildInvItem2Item objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invItem2ItemsRelatedByI2ichilditemid A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvItem2ItemsRelatedByI2ichilditemid(Collection $invItem2ItemsRelatedByI2ichilditemid, ConnectionInterface $con = null)
    {
        /** @var ChildInvItem2Item[] $invItem2ItemsRelatedByI2ichilditemidToDelete */
        $invItem2ItemsRelatedByI2ichilditemidToDelete = $this->getInvItem2ItemsRelatedByI2ichilditemid(new Criteria(), $con)->diff($invItem2ItemsRelatedByI2ichilditemid);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion = clone $invItem2ItemsRelatedByI2ichilditemidToDelete;

        foreach ($invItem2ItemsRelatedByI2ichilditemidToDelete as $invItem2ItemRelatedByI2ichilditemidRemoved) {
            $invItem2ItemRelatedByI2ichilditemidRemoved->setItemMasterItemRelatedByI2ichilditemid(null);
        }

        $this->collInvItem2ItemsRelatedByI2ichilditemid = null;
        foreach ($invItem2ItemsRelatedByI2ichilditemid as $invItem2ItemRelatedByI2ichilditemid) {
            $this->addInvItem2ItemRelatedByI2ichilditemid($invItem2ItemRelatedByI2ichilditemid);
        }

        $this->collInvItem2ItemsRelatedByI2ichilditemid = $invItem2ItemsRelatedByI2ichilditemid;
        $this->collInvItem2ItemsRelatedByI2ichilditemidPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvItem2Item objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvItem2Item objects.
     * @throws PropelException
     */
    public function countInvItem2ItemsRelatedByI2ichilditemid(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvItem2ItemsRelatedByI2ichilditemidPartial && !$this->isNew();
        if (null === $this->collInvItem2ItemsRelatedByI2ichilditemid || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvItem2ItemsRelatedByI2ichilditemid) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvItem2ItemsRelatedByI2ichilditemid());
            }

            $query = ChildInvItem2ItemQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItemRelatedByI2ichilditemid($this)
                ->count($con);
        }

        return count($this->collInvItem2ItemsRelatedByI2ichilditemid);
    }

    /**
     * Method called to associate a ChildInvItem2Item object to this object
     * through the ChildInvItem2Item foreign key attribute.
     *
     * @param  ChildInvItem2Item $l ChildInvItem2Item
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvItem2ItemRelatedByI2ichilditemid(ChildInvItem2Item $l)
    {
        if ($this->collInvItem2ItemsRelatedByI2ichilditemid === null) {
            $this->initInvItem2ItemsRelatedByI2ichilditemid();
            $this->collInvItem2ItemsRelatedByI2ichilditemidPartial = true;
        }

        if (!$this->collInvItem2ItemsRelatedByI2ichilditemid->contains($l)) {
            $this->doAddInvItem2ItemRelatedByI2ichilditemid($l);

            if ($this->invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion and $this->invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion->contains($l)) {
                $this->invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion->remove($this->invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvItem2Item $invItem2ItemRelatedByI2ichilditemid The ChildInvItem2Item object to add.
     */
    protected function doAddInvItem2ItemRelatedByI2ichilditemid(ChildInvItem2Item $invItem2ItemRelatedByI2ichilditemid)
    {
        $this->collInvItem2ItemsRelatedByI2ichilditemid[]= $invItem2ItemRelatedByI2ichilditemid;
        $invItem2ItemRelatedByI2ichilditemid->setItemMasterItemRelatedByI2ichilditemid($this);
    }

    /**
     * @param  ChildInvItem2Item $invItem2ItemRelatedByI2ichilditemid The ChildInvItem2Item object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvItem2ItemRelatedByI2ichilditemid(ChildInvItem2Item $invItem2ItemRelatedByI2ichilditemid)
    {
        if ($this->getInvItem2ItemsRelatedByI2ichilditemid()->contains($invItem2ItemRelatedByI2ichilditemid)) {
            $pos = $this->collInvItem2ItemsRelatedByI2ichilditemid->search($invItem2ItemRelatedByI2ichilditemid);
            $this->collInvItem2ItemsRelatedByI2ichilditemid->remove($pos);
            if (null === $this->invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion) {
                $this->invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion = clone $this->collInvItem2ItemsRelatedByI2ichilditemid;
                $this->invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion->clear();
            }
            $this->invItem2ItemsRelatedByI2ichilditemidScheduledForDeletion[]= clone $invItem2ItemRelatedByI2ichilditemid;
            $invItem2ItemRelatedByI2ichilditemid->setItemMasterItemRelatedByI2ichilditemid(null);
        }

        return $this;
    }

    /**
     * Clears out the collInvKitComponents collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvKitComponents()
     */
    public function clearInvKitComponents()
    {
        $this->collInvKitComponents = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvKitComponents collection loaded partially.
     */
    public function resetPartialInvKitComponents($v = true)
    {
        $this->collInvKitComponentsPartial = $v;
    }

    /**
     * Initializes the collInvKitComponents collection.
     *
     * By default this just sets the collInvKitComponents collection to an empty array (like clearcollInvKitComponents());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvKitComponents($overrideExisting = true)
    {
        if (null !== $this->collInvKitComponents && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvKitComponentTableMap::getTableMap()->getCollectionClassName();

        $this->collInvKitComponents = new $collectionClassName;
        $this->collInvKitComponents->setModel('\InvKitComponent');
    }

    /**
     * Gets an array of ChildInvKitComponent objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvKitComponent[] List of ChildInvKitComponent objects
     * @throws PropelException
     */
    public function getInvKitComponents(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvKitComponentsPartial && !$this->isNew();
        if (null === $this->collInvKitComponents || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvKitComponents) {
                // return empty collection
                $this->initInvKitComponents();
            } else {
                $collInvKitComponents = ChildInvKitComponentQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvKitComponentsPartial && count($collInvKitComponents)) {
                        $this->initInvKitComponents(false);

                        foreach ($collInvKitComponents as $obj) {
                            if (false == $this->collInvKitComponents->contains($obj)) {
                                $this->collInvKitComponents->append($obj);
                            }
                        }

                        $this->collInvKitComponentsPartial = true;
                    }

                    return $collInvKitComponents;
                }

                if ($partial && $this->collInvKitComponents) {
                    foreach ($this->collInvKitComponents as $obj) {
                        if ($obj->isNew()) {
                            $collInvKitComponents[] = $obj;
                        }
                    }
                }

                $this->collInvKitComponents = $collInvKitComponents;
                $this->collInvKitComponentsPartial = false;
            }
        }

        return $this->collInvKitComponents;
    }

    /**
     * Sets a collection of ChildInvKitComponent objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invKitComponents A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvKitComponents(Collection $invKitComponents, ConnectionInterface $con = null)
    {
        /** @var ChildInvKitComponent[] $invKitComponentsToDelete */
        $invKitComponentsToDelete = $this->getInvKitComponents(new Criteria(), $con)->diff($invKitComponents);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invKitComponentsScheduledForDeletion = clone $invKitComponentsToDelete;

        foreach ($invKitComponentsToDelete as $invKitComponentRemoved) {
            $invKitComponentRemoved->setItemMasterItem(null);
        }

        $this->collInvKitComponents = null;
        foreach ($invKitComponents as $invKitComponent) {
            $this->addInvKitComponent($invKitComponent);
        }

        $this->collInvKitComponents = $invKitComponents;
        $this->collInvKitComponentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvKitComponent objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvKitComponent objects.
     * @throws PropelException
     */
    public function countInvKitComponents(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvKitComponentsPartial && !$this->isNew();
        if (null === $this->collInvKitComponents || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvKitComponents) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvKitComponents());
            }

            $query = ChildInvKitComponentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collInvKitComponents);
    }

    /**
     * Method called to associate a ChildInvKitComponent object to this object
     * through the ChildInvKitComponent foreign key attribute.
     *
     * @param  ChildInvKitComponent $l ChildInvKitComponent
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvKitComponent(ChildInvKitComponent $l)
    {
        if ($this->collInvKitComponents === null) {
            $this->initInvKitComponents();
            $this->collInvKitComponentsPartial = true;
        }

        if (!$this->collInvKitComponents->contains($l)) {
            $this->doAddInvKitComponent($l);

            if ($this->invKitComponentsScheduledForDeletion and $this->invKitComponentsScheduledForDeletion->contains($l)) {
                $this->invKitComponentsScheduledForDeletion->remove($this->invKitComponentsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvKitComponent $invKitComponent The ChildInvKitComponent object to add.
     */
    protected function doAddInvKitComponent(ChildInvKitComponent $invKitComponent)
    {
        $this->collInvKitComponents[]= $invKitComponent;
        $invKitComponent->setItemMasterItem($this);
    }

    /**
     * @param  ChildInvKitComponent $invKitComponent The ChildInvKitComponent object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvKitComponent(ChildInvKitComponent $invKitComponent)
    {
        if ($this->getInvKitComponents()->contains($invKitComponent)) {
            $pos = $this->collInvKitComponents->search($invKitComponent);
            $this->collInvKitComponents->remove($pos);
            if (null === $this->invKitComponentsScheduledForDeletion) {
                $this->invKitComponentsScheduledForDeletion = clone $this->collInvKitComponents;
                $this->invKitComponentsScheduledForDeletion->clear();
            }
            $this->invKitComponentsScheduledForDeletion[]= clone $invKitComponent;
            $invKitComponent->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvKitComponents from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvKitComponent[] List of ChildInvKitComponent objects
     */
    public function getInvKitComponentsJoinInvKit(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvKitComponentQuery::create(null, $criteria);
        $query->joinWith('InvKit', $joinBehavior);

        return $this->getInvKitComponents($query, $con);
    }

    /**
     * Gets a single ChildInvKit object, which is related to this object by a one-to-one relationship.
     *
     * @param  ConnectionInterface $con optional connection object
     * @return ChildInvKit
     * @throws PropelException
     */
    public function getInvKit(ConnectionInterface $con = null)
    {

        if ($this->singleInvKit === null && !$this->isNew()) {
            $this->singleInvKit = ChildInvKitQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleInvKit;
    }

    /**
     * Sets a single ChildInvKit object as related to this object by a one-to-one relationship.
     *
     * @param  ChildInvKit $v ChildInvKit
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setInvKit(ChildInvKit $v = null)
    {
        $this->singleInvKit = $v;

        // Make sure that that the passed-in ChildInvKit isn't already associated with this object
        if ($v !== null && $v->getItemMasterItem(null, false) === null) {
            $v->setItemMasterItem($this);
        }

        return $this;
    }

    /**
     * Clears out the collInvLotMasters collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvLotMasters()
     */
    public function clearInvLotMasters()
    {
        $this->collInvLotMasters = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvLotMasters collection loaded partially.
     */
    public function resetPartialInvLotMasters($v = true)
    {
        $this->collInvLotMastersPartial = $v;
    }

    /**
     * Initializes the collInvLotMasters collection.
     *
     * By default this just sets the collInvLotMasters collection to an empty array (like clearcollInvLotMasters());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvLotMasters($overrideExisting = true)
    {
        if (null !== $this->collInvLotMasters && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvLotMasterTableMap::getTableMap()->getCollectionClassName();

        $this->collInvLotMasters = new $collectionClassName;
        $this->collInvLotMasters->setModel('\InvLotMaster');
    }

    /**
     * Gets an array of ChildInvLotMaster objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvLotMaster[] List of ChildInvLotMaster objects
     * @throws PropelException
     */
    public function getInvLotMasters(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvLotMastersPartial && !$this->isNew();
        if (null === $this->collInvLotMasters || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvLotMasters) {
                // return empty collection
                $this->initInvLotMasters();
            } else {
                $collInvLotMasters = ChildInvLotMasterQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvLotMastersPartial && count($collInvLotMasters)) {
                        $this->initInvLotMasters(false);

                        foreach ($collInvLotMasters as $obj) {
                            if (false == $this->collInvLotMasters->contains($obj)) {
                                $this->collInvLotMasters->append($obj);
                            }
                        }

                        $this->collInvLotMastersPartial = true;
                    }

                    return $collInvLotMasters;
                }

                if ($partial && $this->collInvLotMasters) {
                    foreach ($this->collInvLotMasters as $obj) {
                        if ($obj->isNew()) {
                            $collInvLotMasters[] = $obj;
                        }
                    }
                }

                $this->collInvLotMasters = $collInvLotMasters;
                $this->collInvLotMastersPartial = false;
            }
        }

        return $this->collInvLotMasters;
    }

    /**
     * Sets a collection of ChildInvLotMaster objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invLotMasters A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvLotMasters(Collection $invLotMasters, ConnectionInterface $con = null)
    {
        /** @var ChildInvLotMaster[] $invLotMastersToDelete */
        $invLotMastersToDelete = $this->getInvLotMasters(new Criteria(), $con)->diff($invLotMasters);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invLotMastersScheduledForDeletion = clone $invLotMastersToDelete;

        foreach ($invLotMastersToDelete as $invLotMasterRemoved) {
            $invLotMasterRemoved->setItemMasterItem(null);
        }

        $this->collInvLotMasters = null;
        foreach ($invLotMasters as $invLotMaster) {
            $this->addInvLotMaster($invLotMaster);
        }

        $this->collInvLotMasters = $invLotMasters;
        $this->collInvLotMastersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvLotMaster objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvLotMaster objects.
     * @throws PropelException
     */
    public function countInvLotMasters(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvLotMastersPartial && !$this->isNew();
        if (null === $this->collInvLotMasters || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvLotMasters) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvLotMasters());
            }

            $query = ChildInvLotMasterQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collInvLotMasters);
    }

    /**
     * Method called to associate a ChildInvLotMaster object to this object
     * through the ChildInvLotMaster foreign key attribute.
     *
     * @param  ChildInvLotMaster $l ChildInvLotMaster
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvLotMaster(ChildInvLotMaster $l)
    {
        if ($this->collInvLotMasters === null) {
            $this->initInvLotMasters();
            $this->collInvLotMastersPartial = true;
        }

        if (!$this->collInvLotMasters->contains($l)) {
            $this->doAddInvLotMaster($l);

            if ($this->invLotMastersScheduledForDeletion and $this->invLotMastersScheduledForDeletion->contains($l)) {
                $this->invLotMastersScheduledForDeletion->remove($this->invLotMastersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvLotMaster $invLotMaster The ChildInvLotMaster object to add.
     */
    protected function doAddInvLotMaster(ChildInvLotMaster $invLotMaster)
    {
        $this->collInvLotMasters[]= $invLotMaster;
        $invLotMaster->setItemMasterItem($this);
    }

    /**
     * @param  ChildInvLotMaster $invLotMaster The ChildInvLotMaster object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvLotMaster(ChildInvLotMaster $invLotMaster)
    {
        if ($this->getInvLotMasters()->contains($invLotMaster)) {
            $pos = $this->collInvLotMasters->search($invLotMaster);
            $this->collInvLotMasters->remove($pos);
            if (null === $this->invLotMastersScheduledForDeletion) {
                $this->invLotMastersScheduledForDeletion = clone $this->collInvLotMasters;
                $this->invLotMastersScheduledForDeletion->clear();
            }
            $this->invLotMastersScheduledForDeletion[]= clone $invLotMaster;
            $invLotMaster->setItemMasterItem(null);
        }

        return $this;
    }

    /**
     * Clears out the collInvSerialMasters collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvSerialMasters()
     */
    public function clearInvSerialMasters()
    {
        $this->collInvSerialMasters = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvSerialMasters collection loaded partially.
     */
    public function resetPartialInvSerialMasters($v = true)
    {
        $this->collInvSerialMastersPartial = $v;
    }

    /**
     * Initializes the collInvSerialMasters collection.
     *
     * By default this just sets the collInvSerialMasters collection to an empty array (like clearcollInvSerialMasters());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvSerialMasters($overrideExisting = true)
    {
        if (null !== $this->collInvSerialMasters && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvSerialMasterTableMap::getTableMap()->getCollectionClassName();

        $this->collInvSerialMasters = new $collectionClassName;
        $this->collInvSerialMasters->setModel('\InvSerialMaster');
    }

    /**
     * Gets an array of ChildInvSerialMaster objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvSerialMaster[] List of ChildInvSerialMaster objects
     * @throws PropelException
     */
    public function getInvSerialMasters(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvSerialMastersPartial && !$this->isNew();
        if (null === $this->collInvSerialMasters || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvSerialMasters) {
                // return empty collection
                $this->initInvSerialMasters();
            } else {
                $collInvSerialMasters = ChildInvSerialMasterQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvSerialMastersPartial && count($collInvSerialMasters)) {
                        $this->initInvSerialMasters(false);

                        foreach ($collInvSerialMasters as $obj) {
                            if (false == $this->collInvSerialMasters->contains($obj)) {
                                $this->collInvSerialMasters->append($obj);
                            }
                        }

                        $this->collInvSerialMastersPartial = true;
                    }

                    return $collInvSerialMasters;
                }

                if ($partial && $this->collInvSerialMasters) {
                    foreach ($this->collInvSerialMasters as $obj) {
                        if ($obj->isNew()) {
                            $collInvSerialMasters[] = $obj;
                        }
                    }
                }

                $this->collInvSerialMasters = $collInvSerialMasters;
                $this->collInvSerialMastersPartial = false;
            }
        }

        return $this->collInvSerialMasters;
    }

    /**
     * Sets a collection of ChildInvSerialMaster objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invSerialMasters A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvSerialMasters(Collection $invSerialMasters, ConnectionInterface $con = null)
    {
        /** @var ChildInvSerialMaster[] $invSerialMastersToDelete */
        $invSerialMastersToDelete = $this->getInvSerialMasters(new Criteria(), $con)->diff($invSerialMasters);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invSerialMastersScheduledForDeletion = clone $invSerialMastersToDelete;

        foreach ($invSerialMastersToDelete as $invSerialMasterRemoved) {
            $invSerialMasterRemoved->setItemMasterItem(null);
        }

        $this->collInvSerialMasters = null;
        foreach ($invSerialMasters as $invSerialMaster) {
            $this->addInvSerialMaster($invSerialMaster);
        }

        $this->collInvSerialMasters = $invSerialMasters;
        $this->collInvSerialMastersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvSerialMaster objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvSerialMaster objects.
     * @throws PropelException
     */
    public function countInvSerialMasters(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvSerialMastersPartial && !$this->isNew();
        if (null === $this->collInvSerialMasters || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvSerialMasters) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvSerialMasters());
            }

            $query = ChildInvSerialMasterQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collInvSerialMasters);
    }

    /**
     * Method called to associate a ChildInvSerialMaster object to this object
     * through the ChildInvSerialMaster foreign key attribute.
     *
     * @param  ChildInvSerialMaster $l ChildInvSerialMaster
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvSerialMaster(ChildInvSerialMaster $l)
    {
        if ($this->collInvSerialMasters === null) {
            $this->initInvSerialMasters();
            $this->collInvSerialMastersPartial = true;
        }

        if (!$this->collInvSerialMasters->contains($l)) {
            $this->doAddInvSerialMaster($l);

            if ($this->invSerialMastersScheduledForDeletion and $this->invSerialMastersScheduledForDeletion->contains($l)) {
                $this->invSerialMastersScheduledForDeletion->remove($this->invSerialMastersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvSerialMaster $invSerialMaster The ChildInvSerialMaster object to add.
     */
    protected function doAddInvSerialMaster(ChildInvSerialMaster $invSerialMaster)
    {
        $this->collInvSerialMasters[]= $invSerialMaster;
        $invSerialMaster->setItemMasterItem($this);
    }

    /**
     * @param  ChildInvSerialMaster $invSerialMaster The ChildInvSerialMaster object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvSerialMaster(ChildInvSerialMaster $invSerialMaster)
    {
        if ($this->getInvSerialMasters()->contains($invSerialMaster)) {
            $pos = $this->collInvSerialMasters->search($invSerialMaster);
            $this->collInvSerialMasters->remove($pos);
            if (null === $this->invSerialMastersScheduledForDeletion) {
                $this->invSerialMastersScheduledForDeletion = clone $this->collInvSerialMasters;
                $this->invSerialMastersScheduledForDeletion->clear();
            }
            $this->invSerialMastersScheduledForDeletion[]= clone $invSerialMaster;
            $invSerialMaster->setItemMasterItem(null);
        }

        return $this;
    }

    /**
     * Clears out the collInvTransferDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvTransferDetails()
     */
    public function clearInvTransferDetails()
    {
        $this->collInvTransferDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvTransferDetails collection loaded partially.
     */
    public function resetPartialInvTransferDetails($v = true)
    {
        $this->collInvTransferDetailsPartial = $v;
    }

    /**
     * Initializes the collInvTransferDetails collection.
     *
     * By default this just sets the collInvTransferDetails collection to an empty array (like clearcollInvTransferDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvTransferDetails($overrideExisting = true)
    {
        if (null !== $this->collInvTransferDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvTransferDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collInvTransferDetails = new $collectionClassName;
        $this->collInvTransferDetails->setModel('\InvTransferDetail');
    }

    /**
     * Gets an array of ChildInvTransferDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvTransferDetail[] List of ChildInvTransferDetail objects
     * @throws PropelException
     */
    public function getInvTransferDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferDetailsPartial && !$this->isNew();
        if (null === $this->collInvTransferDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvTransferDetails) {
                // return empty collection
                $this->initInvTransferDetails();
            } else {
                $collInvTransferDetails = ChildInvTransferDetailQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvTransferDetailsPartial && count($collInvTransferDetails)) {
                        $this->initInvTransferDetails(false);

                        foreach ($collInvTransferDetails as $obj) {
                            if (false == $this->collInvTransferDetails->contains($obj)) {
                                $this->collInvTransferDetails->append($obj);
                            }
                        }

                        $this->collInvTransferDetailsPartial = true;
                    }

                    return $collInvTransferDetails;
                }

                if ($partial && $this->collInvTransferDetails) {
                    foreach ($this->collInvTransferDetails as $obj) {
                        if ($obj->isNew()) {
                            $collInvTransferDetails[] = $obj;
                        }
                    }
                }

                $this->collInvTransferDetails = $collInvTransferDetails;
                $this->collInvTransferDetailsPartial = false;
            }
        }

        return $this->collInvTransferDetails;
    }

    /**
     * Sets a collection of ChildInvTransferDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invTransferDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvTransferDetails(Collection $invTransferDetails, ConnectionInterface $con = null)
    {
        /** @var ChildInvTransferDetail[] $invTransferDetailsToDelete */
        $invTransferDetailsToDelete = $this->getInvTransferDetails(new Criteria(), $con)->diff($invTransferDetails);


        $this->invTransferDetailsScheduledForDeletion = $invTransferDetailsToDelete;

        foreach ($invTransferDetailsToDelete as $invTransferDetailRemoved) {
            $invTransferDetailRemoved->setItemMasterItem(null);
        }

        $this->collInvTransferDetails = null;
        foreach ($invTransferDetails as $invTransferDetail) {
            $this->addInvTransferDetail($invTransferDetail);
        }

        $this->collInvTransferDetails = $invTransferDetails;
        $this->collInvTransferDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvTransferDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvTransferDetail objects.
     * @throws PropelException
     */
    public function countInvTransferDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferDetailsPartial && !$this->isNew();
        if (null === $this->collInvTransferDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvTransferDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvTransferDetails());
            }

            $query = ChildInvTransferDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collInvTransferDetails);
    }

    /**
     * Method called to associate a ChildInvTransferDetail object to this object
     * through the ChildInvTransferDetail foreign key attribute.
     *
     * @param  ChildInvTransferDetail $l ChildInvTransferDetail
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvTransferDetail(ChildInvTransferDetail $l)
    {
        if ($this->collInvTransferDetails === null) {
            $this->initInvTransferDetails();
            $this->collInvTransferDetailsPartial = true;
        }

        if (!$this->collInvTransferDetails->contains($l)) {
            $this->doAddInvTransferDetail($l);

            if ($this->invTransferDetailsScheduledForDeletion and $this->invTransferDetailsScheduledForDeletion->contains($l)) {
                $this->invTransferDetailsScheduledForDeletion->remove($this->invTransferDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvTransferDetail $invTransferDetail The ChildInvTransferDetail object to add.
     */
    protected function doAddInvTransferDetail(ChildInvTransferDetail $invTransferDetail)
    {
        $this->collInvTransferDetails[]= $invTransferDetail;
        $invTransferDetail->setItemMasterItem($this);
    }

    /**
     * @param  ChildInvTransferDetail $invTransferDetail The ChildInvTransferDetail object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvTransferDetail(ChildInvTransferDetail $invTransferDetail)
    {
        if ($this->getInvTransferDetails()->contains($invTransferDetail)) {
            $pos = $this->collInvTransferDetails->search($invTransferDetail);
            $this->collInvTransferDetails->remove($pos);
            if (null === $this->invTransferDetailsScheduledForDeletion) {
                $this->invTransferDetailsScheduledForDeletion = clone $this->collInvTransferDetails;
                $this->invTransferDetailsScheduledForDeletion->clear();
            }
            $this->invTransferDetailsScheduledForDeletion[]= clone $invTransferDetail;
            $invTransferDetail->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvTransferDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferDetail[] List of ChildInvTransferDetail objects
     */
    public function getInvTransferDetailsJoinInvTransferOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferDetailQuery::create(null, $criteria);
        $query->joinWith('InvTransferOrder', $joinBehavior);

        return $this->getInvTransferDetails($query, $con);
    }

    /**
     * Clears out the collInvTransferLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvTransferLotserials()
     */
    public function clearInvTransferLotserials()
    {
        $this->collInvTransferLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvTransferLotserials collection loaded partially.
     */
    public function resetPartialInvTransferLotserials($v = true)
    {
        $this->collInvTransferLotserialsPartial = $v;
    }

    /**
     * Initializes the collInvTransferLotserials collection.
     *
     * By default this just sets the collInvTransferLotserials collection to an empty array (like clearcollInvTransferLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvTransferLotserials($overrideExisting = true)
    {
        if (null !== $this->collInvTransferLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvTransferLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collInvTransferLotserials = new $collectionClassName;
        $this->collInvTransferLotserials->setModel('\InvTransferLotserial');
    }

    /**
     * Gets an array of ChildInvTransferLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     * @throws PropelException
     */
    public function getInvTransferLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvTransferLotserials) {
                // return empty collection
                $this->initInvTransferLotserials();
            } else {
                $collInvTransferLotserials = ChildInvTransferLotserialQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvTransferLotserialsPartial && count($collInvTransferLotserials)) {
                        $this->initInvTransferLotserials(false);

                        foreach ($collInvTransferLotserials as $obj) {
                            if (false == $this->collInvTransferLotserials->contains($obj)) {
                                $this->collInvTransferLotserials->append($obj);
                            }
                        }

                        $this->collInvTransferLotserialsPartial = true;
                    }

                    return $collInvTransferLotserials;
                }

                if ($partial && $this->collInvTransferLotserials) {
                    foreach ($this->collInvTransferLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collInvTransferLotserials[] = $obj;
                        }
                    }
                }

                $this->collInvTransferLotserials = $collInvTransferLotserials;
                $this->collInvTransferLotserialsPartial = false;
            }
        }

        return $this->collInvTransferLotserials;
    }

    /**
     * Sets a collection of ChildInvTransferLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invTransferLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvTransferLotserials(Collection $invTransferLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildInvTransferLotserial[] $invTransferLotserialsToDelete */
        $invTransferLotserialsToDelete = $this->getInvTransferLotserials(new Criteria(), $con)->diff($invTransferLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invTransferLotserialsScheduledForDeletion = clone $invTransferLotserialsToDelete;

        foreach ($invTransferLotserialsToDelete as $invTransferLotserialRemoved) {
            $invTransferLotserialRemoved->setItemMasterItem(null);
        }

        $this->collInvTransferLotserials = null;
        foreach ($invTransferLotserials as $invTransferLotserial) {
            $this->addInvTransferLotserial($invTransferLotserial);
        }

        $this->collInvTransferLotserials = $invTransferLotserials;
        $this->collInvTransferLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvTransferLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvTransferLotserial objects.
     * @throws PropelException
     */
    public function countInvTransferLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvTransferLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvTransferLotserials());
            }

            $query = ChildInvTransferLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collInvTransferLotserials);
    }

    /**
     * Method called to associate a ChildInvTransferLotserial object to this object
     * through the ChildInvTransferLotserial foreign key attribute.
     *
     * @param  ChildInvTransferLotserial $l ChildInvTransferLotserial
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvTransferLotserial(ChildInvTransferLotserial $l)
    {
        if ($this->collInvTransferLotserials === null) {
            $this->initInvTransferLotserials();
            $this->collInvTransferLotserialsPartial = true;
        }

        if (!$this->collInvTransferLotserials->contains($l)) {
            $this->doAddInvTransferLotserial($l);

            if ($this->invTransferLotserialsScheduledForDeletion and $this->invTransferLotserialsScheduledForDeletion->contains($l)) {
                $this->invTransferLotserialsScheduledForDeletion->remove($this->invTransferLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvTransferLotserial $invTransferLotserial The ChildInvTransferLotserial object to add.
     */
    protected function doAddInvTransferLotserial(ChildInvTransferLotserial $invTransferLotserial)
    {
        $this->collInvTransferLotserials[]= $invTransferLotserial;
        $invTransferLotserial->setItemMasterItem($this);
    }

    /**
     * @param  ChildInvTransferLotserial $invTransferLotserial The ChildInvTransferLotserial object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvTransferLotserial(ChildInvTransferLotserial $invTransferLotserial)
    {
        if ($this->getInvTransferLotserials()->contains($invTransferLotserial)) {
            $pos = $this->collInvTransferLotserials->search($invTransferLotserial);
            $this->collInvTransferLotserials->remove($pos);
            if (null === $this->invTransferLotserialsScheduledForDeletion) {
                $this->invTransferLotserialsScheduledForDeletion = clone $this->collInvTransferLotserials;
                $this->invTransferLotserialsScheduledForDeletion->clear();
            }
            $this->invTransferLotserialsScheduledForDeletion[]= clone $invTransferLotserial;
            $invTransferLotserial->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     */
    public function getInvTransferLotserialsJoinInvTransferOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferOrder', $joinBehavior);

        return $this->getInvTransferLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     */
    public function getInvTransferLotserialsJoinInvTransferDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferDetail', $joinBehavior);

        return $this->getInvTransferLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     */
    public function getInvTransferLotserialsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferLotserialQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getInvTransferLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvTransferLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferLotserial[] List of ChildInvTransferLotserial objects
     */
    public function getInvTransferLotserialsJoinInvSerialMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferLotserialQuery::create(null, $criteria);
        $query->joinWith('InvSerialMaster', $joinBehavior);

        return $this->getInvTransferLotserials($query, $con);
    }

    /**
     * Clears out the collInvTransferPreAllocatedLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvTransferPreAllocatedLotserials()
     */
    public function clearInvTransferPreAllocatedLotserials()
    {
        $this->collInvTransferPreAllocatedLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvTransferPreAllocatedLotserials collection loaded partially.
     */
    public function resetPartialInvTransferPreAllocatedLotserials($v = true)
    {
        $this->collInvTransferPreAllocatedLotserialsPartial = $v;
    }

    /**
     * Initializes the collInvTransferPreAllocatedLotserials collection.
     *
     * By default this just sets the collInvTransferPreAllocatedLotserials collection to an empty array (like clearcollInvTransferPreAllocatedLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvTransferPreAllocatedLotserials($overrideExisting = true)
    {
        if (null !== $this->collInvTransferPreAllocatedLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvTransferPreAllocatedLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collInvTransferPreAllocatedLotserials = new $collectionClassName;
        $this->collInvTransferPreAllocatedLotserials->setModel('\InvTransferPreAllocatedLotserial');
    }

    /**
     * Gets an array of ChildInvTransferPreAllocatedLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvTransferPreAllocatedLotserial[] List of ChildInvTransferPreAllocatedLotserial objects
     * @throws PropelException
     */
    public function getInvTransferPreAllocatedLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferPreAllocatedLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferPreAllocatedLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvTransferPreAllocatedLotserials) {
                // return empty collection
                $this->initInvTransferPreAllocatedLotserials();
            } else {
                $collInvTransferPreAllocatedLotserials = ChildInvTransferPreAllocatedLotserialQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvTransferPreAllocatedLotserialsPartial && count($collInvTransferPreAllocatedLotserials)) {
                        $this->initInvTransferPreAllocatedLotserials(false);

                        foreach ($collInvTransferPreAllocatedLotserials as $obj) {
                            if (false == $this->collInvTransferPreAllocatedLotserials->contains($obj)) {
                                $this->collInvTransferPreAllocatedLotserials->append($obj);
                            }
                        }

                        $this->collInvTransferPreAllocatedLotserialsPartial = true;
                    }

                    return $collInvTransferPreAllocatedLotserials;
                }

                if ($partial && $this->collInvTransferPreAllocatedLotserials) {
                    foreach ($this->collInvTransferPreAllocatedLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collInvTransferPreAllocatedLotserials[] = $obj;
                        }
                    }
                }

                $this->collInvTransferPreAllocatedLotserials = $collInvTransferPreAllocatedLotserials;
                $this->collInvTransferPreAllocatedLotserialsPartial = false;
            }
        }

        return $this->collInvTransferPreAllocatedLotserials;
    }

    /**
     * Sets a collection of ChildInvTransferPreAllocatedLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invTransferPreAllocatedLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvTransferPreAllocatedLotserials(Collection $invTransferPreAllocatedLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildInvTransferPreAllocatedLotserial[] $invTransferPreAllocatedLotserialsToDelete */
        $invTransferPreAllocatedLotserialsToDelete = $this->getInvTransferPreAllocatedLotserials(new Criteria(), $con)->diff($invTransferPreAllocatedLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invTransferPreAllocatedLotserialsScheduledForDeletion = clone $invTransferPreAllocatedLotserialsToDelete;

        foreach ($invTransferPreAllocatedLotserialsToDelete as $invTransferPreAllocatedLotserialRemoved) {
            $invTransferPreAllocatedLotserialRemoved->setItemMasterItem(null);
        }

        $this->collInvTransferPreAllocatedLotserials = null;
        foreach ($invTransferPreAllocatedLotserials as $invTransferPreAllocatedLotserial) {
            $this->addInvTransferPreAllocatedLotserial($invTransferPreAllocatedLotserial);
        }

        $this->collInvTransferPreAllocatedLotserials = $invTransferPreAllocatedLotserials;
        $this->collInvTransferPreAllocatedLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvTransferPreAllocatedLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvTransferPreAllocatedLotserial objects.
     * @throws PropelException
     */
    public function countInvTransferPreAllocatedLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferPreAllocatedLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferPreAllocatedLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvTransferPreAllocatedLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvTransferPreAllocatedLotserials());
            }

            $query = ChildInvTransferPreAllocatedLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collInvTransferPreAllocatedLotserials);
    }

    /**
     * Method called to associate a ChildInvTransferPreAllocatedLotserial object to this object
     * through the ChildInvTransferPreAllocatedLotserial foreign key attribute.
     *
     * @param  ChildInvTransferPreAllocatedLotserial $l ChildInvTransferPreAllocatedLotserial
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvTransferPreAllocatedLotserial(ChildInvTransferPreAllocatedLotserial $l)
    {
        if ($this->collInvTransferPreAllocatedLotserials === null) {
            $this->initInvTransferPreAllocatedLotserials();
            $this->collInvTransferPreAllocatedLotserialsPartial = true;
        }

        if (!$this->collInvTransferPreAllocatedLotserials->contains($l)) {
            $this->doAddInvTransferPreAllocatedLotserial($l);

            if ($this->invTransferPreAllocatedLotserialsScheduledForDeletion and $this->invTransferPreAllocatedLotserialsScheduledForDeletion->contains($l)) {
                $this->invTransferPreAllocatedLotserialsScheduledForDeletion->remove($this->invTransferPreAllocatedLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvTransferPreAllocatedLotserial $invTransferPreAllocatedLotserial The ChildInvTransferPreAllocatedLotserial object to add.
     */
    protected function doAddInvTransferPreAllocatedLotserial(ChildInvTransferPreAllocatedLotserial $invTransferPreAllocatedLotserial)
    {
        $this->collInvTransferPreAllocatedLotserials[]= $invTransferPreAllocatedLotserial;
        $invTransferPreAllocatedLotserial->setItemMasterItem($this);
    }

    /**
     * @param  ChildInvTransferPreAllocatedLotserial $invTransferPreAllocatedLotserial The ChildInvTransferPreAllocatedLotserial object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvTransferPreAllocatedLotserial(ChildInvTransferPreAllocatedLotserial $invTransferPreAllocatedLotserial)
    {
        if ($this->getInvTransferPreAllocatedLotserials()->contains($invTransferPreAllocatedLotserial)) {
            $pos = $this->collInvTransferPreAllocatedLotserials->search($invTransferPreAllocatedLotserial);
            $this->collInvTransferPreAllocatedLotserials->remove($pos);
            if (null === $this->invTransferPreAllocatedLotserialsScheduledForDeletion) {
                $this->invTransferPreAllocatedLotserialsScheduledForDeletion = clone $this->collInvTransferPreAllocatedLotserials;
                $this->invTransferPreAllocatedLotserialsScheduledForDeletion->clear();
            }
            $this->invTransferPreAllocatedLotserialsScheduledForDeletion[]= clone $invTransferPreAllocatedLotserial;
            $invTransferPreAllocatedLotserial->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvTransferPreAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPreAllocatedLotserial[] List of ChildInvTransferPreAllocatedLotserial objects
     */
    public function getInvTransferPreAllocatedLotserialsJoinInvTransferOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPreAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferOrder', $joinBehavior);

        return $this->getInvTransferPreAllocatedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvTransferPreAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPreAllocatedLotserial[] List of ChildInvTransferPreAllocatedLotserial objects
     */
    public function getInvTransferPreAllocatedLotserialsJoinInvTransferDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPreAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferDetail', $joinBehavior);

        return $this->getInvTransferPreAllocatedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvTransferPreAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPreAllocatedLotserial[] List of ChildInvTransferPreAllocatedLotserial objects
     */
    public function getInvTransferPreAllocatedLotserialsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPreAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getInvTransferPreAllocatedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvTransferPreAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPreAllocatedLotserial[] List of ChildInvTransferPreAllocatedLotserial objects
     */
    public function getInvTransferPreAllocatedLotserialsJoinInvSerialMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPreAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvSerialMaster', $joinBehavior);

        return $this->getInvTransferPreAllocatedLotserials($query, $con);
    }

    /**
     * Clears out the collInvTransferPickedLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvTransferPickedLotserials()
     */
    public function clearInvTransferPickedLotserials()
    {
        $this->collInvTransferPickedLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvTransferPickedLotserials collection loaded partially.
     */
    public function resetPartialInvTransferPickedLotserials($v = true)
    {
        $this->collInvTransferPickedLotserialsPartial = $v;
    }

    /**
     * Initializes the collInvTransferPickedLotserials collection.
     *
     * By default this just sets the collInvTransferPickedLotserials collection to an empty array (like clearcollInvTransferPickedLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvTransferPickedLotserials($overrideExisting = true)
    {
        if (null !== $this->collInvTransferPickedLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvTransferPickedLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collInvTransferPickedLotserials = new $collectionClassName;
        $this->collInvTransferPickedLotserials->setModel('\InvTransferPickedLotserial');
    }

    /**
     * Gets an array of ChildInvTransferPickedLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     * @throws PropelException
     */
    public function getInvTransferPickedLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferPickedLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferPickedLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvTransferPickedLotserials) {
                // return empty collection
                $this->initInvTransferPickedLotserials();
            } else {
                $collInvTransferPickedLotserials = ChildInvTransferPickedLotserialQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvTransferPickedLotserialsPartial && count($collInvTransferPickedLotserials)) {
                        $this->initInvTransferPickedLotserials(false);

                        foreach ($collInvTransferPickedLotserials as $obj) {
                            if (false == $this->collInvTransferPickedLotserials->contains($obj)) {
                                $this->collInvTransferPickedLotserials->append($obj);
                            }
                        }

                        $this->collInvTransferPickedLotserialsPartial = true;
                    }

                    return $collInvTransferPickedLotserials;
                }

                if ($partial && $this->collInvTransferPickedLotserials) {
                    foreach ($this->collInvTransferPickedLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collInvTransferPickedLotserials[] = $obj;
                        }
                    }
                }

                $this->collInvTransferPickedLotserials = $collInvTransferPickedLotserials;
                $this->collInvTransferPickedLotserialsPartial = false;
            }
        }

        return $this->collInvTransferPickedLotserials;
    }

    /**
     * Sets a collection of ChildInvTransferPickedLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invTransferPickedLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvTransferPickedLotserials(Collection $invTransferPickedLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildInvTransferPickedLotserial[] $invTransferPickedLotserialsToDelete */
        $invTransferPickedLotserialsToDelete = $this->getInvTransferPickedLotserials(new Criteria(), $con)->diff($invTransferPickedLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invTransferPickedLotserialsScheduledForDeletion = clone $invTransferPickedLotserialsToDelete;

        foreach ($invTransferPickedLotserialsToDelete as $invTransferPickedLotserialRemoved) {
            $invTransferPickedLotserialRemoved->setItemMasterItem(null);
        }

        $this->collInvTransferPickedLotserials = null;
        foreach ($invTransferPickedLotserials as $invTransferPickedLotserial) {
            $this->addInvTransferPickedLotserial($invTransferPickedLotserial);
        }

        $this->collInvTransferPickedLotserials = $invTransferPickedLotserials;
        $this->collInvTransferPickedLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvTransferPickedLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvTransferPickedLotserial objects.
     * @throws PropelException
     */
    public function countInvTransferPickedLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvTransferPickedLotserialsPartial && !$this->isNew();
        if (null === $this->collInvTransferPickedLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvTransferPickedLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvTransferPickedLotserials());
            }

            $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collInvTransferPickedLotserials);
    }

    /**
     * Method called to associate a ChildInvTransferPickedLotserial object to this object
     * through the ChildInvTransferPickedLotserial foreign key attribute.
     *
     * @param  ChildInvTransferPickedLotserial $l ChildInvTransferPickedLotserial
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvTransferPickedLotserial(ChildInvTransferPickedLotserial $l)
    {
        if ($this->collInvTransferPickedLotserials === null) {
            $this->initInvTransferPickedLotserials();
            $this->collInvTransferPickedLotserialsPartial = true;
        }

        if (!$this->collInvTransferPickedLotserials->contains($l)) {
            $this->doAddInvTransferPickedLotserial($l);

            if ($this->invTransferPickedLotserialsScheduledForDeletion and $this->invTransferPickedLotserialsScheduledForDeletion->contains($l)) {
                $this->invTransferPickedLotserialsScheduledForDeletion->remove($this->invTransferPickedLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvTransferPickedLotserial $invTransferPickedLotserial The ChildInvTransferPickedLotserial object to add.
     */
    protected function doAddInvTransferPickedLotserial(ChildInvTransferPickedLotserial $invTransferPickedLotserial)
    {
        $this->collInvTransferPickedLotserials[]= $invTransferPickedLotserial;
        $invTransferPickedLotserial->setItemMasterItem($this);
    }

    /**
     * @param  ChildInvTransferPickedLotserial $invTransferPickedLotserial The ChildInvTransferPickedLotserial object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvTransferPickedLotserial(ChildInvTransferPickedLotserial $invTransferPickedLotserial)
    {
        if ($this->getInvTransferPickedLotserials()->contains($invTransferPickedLotserial)) {
            $pos = $this->collInvTransferPickedLotserials->search($invTransferPickedLotserial);
            $this->collInvTransferPickedLotserials->remove($pos);
            if (null === $this->invTransferPickedLotserialsScheduledForDeletion) {
                $this->invTransferPickedLotserialsScheduledForDeletion = clone $this->collInvTransferPickedLotserials;
                $this->invTransferPickedLotserialsScheduledForDeletion->clear();
            }
            $this->invTransferPickedLotserialsScheduledForDeletion[]= clone $invTransferPickedLotserial;
            $invTransferPickedLotserial->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     */
    public function getInvTransferPickedLotserialsJoinInvTransferOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferOrder', $joinBehavior);

        return $this->getInvTransferPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     */
    public function getInvTransferPickedLotserialsJoinInvTransferDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvTransferDetail', $joinBehavior);

        return $this->getInvTransferPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     */
    public function getInvTransferPickedLotserialsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getInvTransferPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvTransferPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvTransferPickedLotserial[] List of ChildInvTransferPickedLotserial objects
     */
    public function getInvTransferPickedLotserialsJoinInvSerialMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvTransferPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvSerialMaster', $joinBehavior);

        return $this->getInvTransferPickedLotserials($query, $con);
    }

    /**
     * Clears out the collInvSerialWarranties collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvSerialWarranties()
     */
    public function clearInvSerialWarranties()
    {
        $this->collInvSerialWarranties = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvSerialWarranties collection loaded partially.
     */
    public function resetPartialInvSerialWarranties($v = true)
    {
        $this->collInvSerialWarrantiesPartial = $v;
    }

    /**
     * Initializes the collInvSerialWarranties collection.
     *
     * By default this just sets the collInvSerialWarranties collection to an empty array (like clearcollInvSerialWarranties());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvSerialWarranties($overrideExisting = true)
    {
        if (null !== $this->collInvSerialWarranties && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvSerialWarrantyTableMap::getTableMap()->getCollectionClassName();

        $this->collInvSerialWarranties = new $collectionClassName;
        $this->collInvSerialWarranties->setModel('\InvSerialWarranty');
    }

    /**
     * Gets an array of ChildInvSerialWarranty objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvSerialWarranty[] List of ChildInvSerialWarranty objects
     * @throws PropelException
     */
    public function getInvSerialWarranties(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvSerialWarrantiesPartial && !$this->isNew();
        if (null === $this->collInvSerialWarranties || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvSerialWarranties) {
                // return empty collection
                $this->initInvSerialWarranties();
            } else {
                $collInvSerialWarranties = ChildInvSerialWarrantyQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvSerialWarrantiesPartial && count($collInvSerialWarranties)) {
                        $this->initInvSerialWarranties(false);

                        foreach ($collInvSerialWarranties as $obj) {
                            if (false == $this->collInvSerialWarranties->contains($obj)) {
                                $this->collInvSerialWarranties->append($obj);
                            }
                        }

                        $this->collInvSerialWarrantiesPartial = true;
                    }

                    return $collInvSerialWarranties;
                }

                if ($partial && $this->collInvSerialWarranties) {
                    foreach ($this->collInvSerialWarranties as $obj) {
                        if ($obj->isNew()) {
                            $collInvSerialWarranties[] = $obj;
                        }
                    }
                }

                $this->collInvSerialWarranties = $collInvSerialWarranties;
                $this->collInvSerialWarrantiesPartial = false;
            }
        }

        return $this->collInvSerialWarranties;
    }

    /**
     * Sets a collection of ChildInvSerialWarranty objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invSerialWarranties A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvSerialWarranties(Collection $invSerialWarranties, ConnectionInterface $con = null)
    {
        /** @var ChildInvSerialWarranty[] $invSerialWarrantiesToDelete */
        $invSerialWarrantiesToDelete = $this->getInvSerialWarranties(new Criteria(), $con)->diff($invSerialWarranties);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->invSerialWarrantiesScheduledForDeletion = clone $invSerialWarrantiesToDelete;

        foreach ($invSerialWarrantiesToDelete as $invSerialWarrantyRemoved) {
            $invSerialWarrantyRemoved->setItemMasterItem(null);
        }

        $this->collInvSerialWarranties = null;
        foreach ($invSerialWarranties as $invSerialWarranty) {
            $this->addInvSerialWarranty($invSerialWarranty);
        }

        $this->collInvSerialWarranties = $invSerialWarranties;
        $this->collInvSerialWarrantiesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvSerialWarranty objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvSerialWarranty objects.
     * @throws PropelException
     */
    public function countInvSerialWarranties(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvSerialWarrantiesPartial && !$this->isNew();
        if (null === $this->collInvSerialWarranties || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvSerialWarranties) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvSerialWarranties());
            }

            $query = ChildInvSerialWarrantyQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collInvSerialWarranties);
    }

    /**
     * Method called to associate a ChildInvSerialWarranty object to this object
     * through the ChildInvSerialWarranty foreign key attribute.
     *
     * @param  ChildInvSerialWarranty $l ChildInvSerialWarranty
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvSerialWarranty(ChildInvSerialWarranty $l)
    {
        if ($this->collInvSerialWarranties === null) {
            $this->initInvSerialWarranties();
            $this->collInvSerialWarrantiesPartial = true;
        }

        if (!$this->collInvSerialWarranties->contains($l)) {
            $this->doAddInvSerialWarranty($l);

            if ($this->invSerialWarrantiesScheduledForDeletion and $this->invSerialWarrantiesScheduledForDeletion->contains($l)) {
                $this->invSerialWarrantiesScheduledForDeletion->remove($this->invSerialWarrantiesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvSerialWarranty $invSerialWarranty The ChildInvSerialWarranty object to add.
     */
    protected function doAddInvSerialWarranty(ChildInvSerialWarranty $invSerialWarranty)
    {
        $this->collInvSerialWarranties[]= $invSerialWarranty;
        $invSerialWarranty->setItemMasterItem($this);
    }

    /**
     * @param  ChildInvSerialWarranty $invSerialWarranty The ChildInvSerialWarranty object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvSerialWarranty(ChildInvSerialWarranty $invSerialWarranty)
    {
        if ($this->getInvSerialWarranties()->contains($invSerialWarranty)) {
            $pos = $this->collInvSerialWarranties->search($invSerialWarranty);
            $this->collInvSerialWarranties->remove($pos);
            if (null === $this->invSerialWarrantiesScheduledForDeletion) {
                $this->invSerialWarrantiesScheduledForDeletion = clone $this->collInvSerialWarranties;
                $this->invSerialWarrantiesScheduledForDeletion->clear();
            }
            $this->invSerialWarrantiesScheduledForDeletion[]= clone $invSerialWarranty;
            $invSerialWarranty->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvSerialWarranties from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvSerialWarranty[] List of ChildInvSerialWarranty objects
     */
    public function getInvSerialWarrantiesJoinInvSerialMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvSerialWarrantyQuery::create(null, $criteria);
        $query->joinWith('InvSerialMaster', $joinBehavior);

        return $this->getInvSerialWarranties($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related InvSerialWarranties from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvSerialWarranty[] List of ChildInvSerialWarranty objects
     */
    public function getInvSerialWarrantiesJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvSerialWarrantyQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getInvSerialWarranties($query, $con);
    }

    /**
     * Clears out the collWarehouseInventories collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addWarehouseInventories()
     */
    public function clearWarehouseInventories()
    {
        $this->collWarehouseInventories = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collWarehouseInventories collection loaded partially.
     */
    public function resetPartialWarehouseInventories($v = true)
    {
        $this->collWarehouseInventoriesPartial = $v;
    }

    /**
     * Initializes the collWarehouseInventories collection.
     *
     * By default this just sets the collWarehouseInventories collection to an empty array (like clearcollWarehouseInventories());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initWarehouseInventories($overrideExisting = true)
    {
        if (null !== $this->collWarehouseInventories && !$overrideExisting) {
            return;
        }

        $collectionClassName = WarehouseInventoryTableMap::getTableMap()->getCollectionClassName();

        $this->collWarehouseInventories = new $collectionClassName;
        $this->collWarehouseInventories->setModel('\WarehouseInventory');
    }

    /**
     * Gets an array of ChildWarehouseInventory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildWarehouseInventory[] List of ChildWarehouseInventory objects
     * @throws PropelException
     */
    public function getWarehouseInventories(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collWarehouseInventoriesPartial && !$this->isNew();
        if (null === $this->collWarehouseInventories || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collWarehouseInventories) {
                // return empty collection
                $this->initWarehouseInventories();
            } else {
                $collWarehouseInventories = ChildWarehouseInventoryQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collWarehouseInventoriesPartial && count($collWarehouseInventories)) {
                        $this->initWarehouseInventories(false);

                        foreach ($collWarehouseInventories as $obj) {
                            if (false == $this->collWarehouseInventories->contains($obj)) {
                                $this->collWarehouseInventories->append($obj);
                            }
                        }

                        $this->collWarehouseInventoriesPartial = true;
                    }

                    return $collWarehouseInventories;
                }

                if ($partial && $this->collWarehouseInventories) {
                    foreach ($this->collWarehouseInventories as $obj) {
                        if ($obj->isNew()) {
                            $collWarehouseInventories[] = $obj;
                        }
                    }
                }

                $this->collWarehouseInventories = $collWarehouseInventories;
                $this->collWarehouseInventoriesPartial = false;
            }
        }

        return $this->collWarehouseInventories;
    }

    /**
     * Sets a collection of ChildWarehouseInventory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $warehouseInventories A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setWarehouseInventories(Collection $warehouseInventories, ConnectionInterface $con = null)
    {
        /** @var ChildWarehouseInventory[] $warehouseInventoriesToDelete */
        $warehouseInventoriesToDelete = $this->getWarehouseInventories(new Criteria(), $con)->diff($warehouseInventories);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->warehouseInventoriesScheduledForDeletion = clone $warehouseInventoriesToDelete;

        foreach ($warehouseInventoriesToDelete as $warehouseInventoryRemoved) {
            $warehouseInventoryRemoved->setItemMasterItem(null);
        }

        $this->collWarehouseInventories = null;
        foreach ($warehouseInventories as $warehouseInventory) {
            $this->addWarehouseInventory($warehouseInventory);
        }

        $this->collWarehouseInventories = $warehouseInventories;
        $this->collWarehouseInventoriesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related WarehouseInventory objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related WarehouseInventory objects.
     * @throws PropelException
     */
    public function countWarehouseInventories(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collWarehouseInventoriesPartial && !$this->isNew();
        if (null === $this->collWarehouseInventories || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collWarehouseInventories) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getWarehouseInventories());
            }

            $query = ChildWarehouseInventoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collWarehouseInventories);
    }

    /**
     * Method called to associate a ChildWarehouseInventory object to this object
     * through the ChildWarehouseInventory foreign key attribute.
     *
     * @param  ChildWarehouseInventory $l ChildWarehouseInventory
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addWarehouseInventory(ChildWarehouseInventory $l)
    {
        if ($this->collWarehouseInventories === null) {
            $this->initWarehouseInventories();
            $this->collWarehouseInventoriesPartial = true;
        }

        if (!$this->collWarehouseInventories->contains($l)) {
            $this->doAddWarehouseInventory($l);

            if ($this->warehouseInventoriesScheduledForDeletion and $this->warehouseInventoriesScheduledForDeletion->contains($l)) {
                $this->warehouseInventoriesScheduledForDeletion->remove($this->warehouseInventoriesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildWarehouseInventory $warehouseInventory The ChildWarehouseInventory object to add.
     */
    protected function doAddWarehouseInventory(ChildWarehouseInventory $warehouseInventory)
    {
        $this->collWarehouseInventories[]= $warehouseInventory;
        $warehouseInventory->setItemMasterItem($this);
    }

    /**
     * @param  ChildWarehouseInventory $warehouseInventory The ChildWarehouseInventory object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeWarehouseInventory(ChildWarehouseInventory $warehouseInventory)
    {
        if ($this->getWarehouseInventories()->contains($warehouseInventory)) {
            $pos = $this->collWarehouseInventories->search($warehouseInventory);
            $this->collWarehouseInventories->remove($pos);
            if (null === $this->warehouseInventoriesScheduledForDeletion) {
                $this->warehouseInventoriesScheduledForDeletion = clone $this->collWarehouseInventories;
                $this->warehouseInventoriesScheduledForDeletion->clear();
            }
            $this->warehouseInventoriesScheduledForDeletion[]= clone $warehouseInventory;
            $warehouseInventory->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related WarehouseInventories from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildWarehouseInventory[] List of ChildWarehouseInventory objects
     */
    public function getWarehouseInventoriesJoinWarehouse(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildWarehouseInventoryQuery::create(null, $criteria);
        $query->joinWith('Warehouse', $joinBehavior);

        return $this->getWarehouseInventories($query, $con);
    }

    /**
     * Clears out the collItemXrefKeys collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemXrefKeys()
     */
    public function clearItemXrefKeys()
    {
        $this->collItemXrefKeys = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemXrefKeys collection loaded partially.
     */
    public function resetPartialItemXrefKeys($v = true)
    {
        $this->collItemXrefKeysPartial = $v;
    }

    /**
     * Initializes the collItemXrefKeys collection.
     *
     * By default this just sets the collItemXrefKeys collection to an empty array (like clearcollItemXrefKeys());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemXrefKeys($overrideExisting = true)
    {
        if (null !== $this->collItemXrefKeys && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemXrefKeyTableMap::getTableMap()->getCollectionClassName();

        $this->collItemXrefKeys = new $collectionClassName;
        $this->collItemXrefKeys->setModel('\ItemXrefKey');
    }

    /**
     * Gets an array of ChildItemXrefKey objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemXrefKey[] List of ChildItemXrefKey objects
     * @throws PropelException
     */
    public function getItemXrefKeys(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefKeysPartial && !$this->isNew();
        if (null === $this->collItemXrefKeys || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemXrefKeys) {
                // return empty collection
                $this->initItemXrefKeys();
            } else {
                $collItemXrefKeys = ChildItemXrefKeyQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemXrefKeysPartial && count($collItemXrefKeys)) {
                        $this->initItemXrefKeys(false);

                        foreach ($collItemXrefKeys as $obj) {
                            if (false == $this->collItemXrefKeys->contains($obj)) {
                                $this->collItemXrefKeys->append($obj);
                            }
                        }

                        $this->collItemXrefKeysPartial = true;
                    }

                    return $collItemXrefKeys;
                }

                if ($partial && $this->collItemXrefKeys) {
                    foreach ($this->collItemXrefKeys as $obj) {
                        if ($obj->isNew()) {
                            $collItemXrefKeys[] = $obj;
                        }
                    }
                }

                $this->collItemXrefKeys = $collItemXrefKeys;
                $this->collItemXrefKeysPartial = false;
            }
        }

        return $this->collItemXrefKeys;
    }

    /**
     * Sets a collection of ChildItemXrefKey objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemXrefKeys A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemXrefKeys(Collection $itemXrefKeys, ConnectionInterface $con = null)
    {
        /** @var ChildItemXrefKey[] $itemXrefKeysToDelete */
        $itemXrefKeysToDelete = $this->getItemXrefKeys(new Criteria(), $con)->diff($itemXrefKeys);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->itemXrefKeysScheduledForDeletion = clone $itemXrefKeysToDelete;

        foreach ($itemXrefKeysToDelete as $itemXrefKeyRemoved) {
            $itemXrefKeyRemoved->setItemMasterItem(null);
        }

        $this->collItemXrefKeys = null;
        foreach ($itemXrefKeys as $itemXrefKey) {
            $this->addItemXrefKey($itemXrefKey);
        }

        $this->collItemXrefKeys = $itemXrefKeys;
        $this->collItemXrefKeysPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemXrefKey objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemXrefKey objects.
     * @throws PropelException
     */
    public function countItemXrefKeys(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefKeysPartial && !$this->isNew();
        if (null === $this->collItemXrefKeys || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemXrefKeys) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemXrefKeys());
            }

            $query = ChildItemXrefKeyQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collItemXrefKeys);
    }

    /**
     * Method called to associate a ChildItemXrefKey object to this object
     * through the ChildItemXrefKey foreign key attribute.
     *
     * @param  ChildItemXrefKey $l ChildItemXrefKey
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemXrefKey(ChildItemXrefKey $l)
    {
        if ($this->collItemXrefKeys === null) {
            $this->initItemXrefKeys();
            $this->collItemXrefKeysPartial = true;
        }

        if (!$this->collItemXrefKeys->contains($l)) {
            $this->doAddItemXrefKey($l);

            if ($this->itemXrefKeysScheduledForDeletion and $this->itemXrefKeysScheduledForDeletion->contains($l)) {
                $this->itemXrefKeysScheduledForDeletion->remove($this->itemXrefKeysScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemXrefKey $itemXrefKey The ChildItemXrefKey object to add.
     */
    protected function doAddItemXrefKey(ChildItemXrefKey $itemXrefKey)
    {
        $this->collItemXrefKeys[]= $itemXrefKey;
        $itemXrefKey->setItemMasterItem($this);
    }

    /**
     * @param  ChildItemXrefKey $itemXrefKey The ChildItemXrefKey object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemXrefKey(ChildItemXrefKey $itemXrefKey)
    {
        if ($this->getItemXrefKeys()->contains($itemXrefKey)) {
            $pos = $this->collItemXrefKeys->search($itemXrefKey);
            $this->collItemXrefKeys->remove($pos);
            if (null === $this->itemXrefKeysScheduledForDeletion) {
                $this->itemXrefKeysScheduledForDeletion = clone $this->collItemXrefKeys;
                $this->itemXrefKeysScheduledForDeletion->clear();
            }
            $this->itemXrefKeysScheduledForDeletion[]= clone $itemXrefKey;
            $itemXrefKey->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related ItemXrefKeys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemXrefKey[] List of ChildItemXrefKey objects
     */
    public function getItemXrefKeysJoinVendor(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemXrefKeyQuery::create(null, $criteria);
        $query->joinWith('Vendor', $joinBehavior);

        return $this->getItemXrefKeys($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related ItemXrefKeys from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemXrefKey[] List of ChildItemXrefKey objects
     */
    public function getItemXrefKeysJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemXrefKeyQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getItemXrefKeys($query, $con);
    }

    /**
     * Clears out the collItemXrefManufacturers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemXrefManufacturers()
     */
    public function clearItemXrefManufacturers()
    {
        $this->collItemXrefManufacturers = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemXrefManufacturers collection loaded partially.
     */
    public function resetPartialItemXrefManufacturers($v = true)
    {
        $this->collItemXrefManufacturersPartial = $v;
    }

    /**
     * Initializes the collItemXrefManufacturers collection.
     *
     * By default this just sets the collItemXrefManufacturers collection to an empty array (like clearcollItemXrefManufacturers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemXrefManufacturers($overrideExisting = true)
    {
        if (null !== $this->collItemXrefManufacturers && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemXrefManufacturerTableMap::getTableMap()->getCollectionClassName();

        $this->collItemXrefManufacturers = new $collectionClassName;
        $this->collItemXrefManufacturers->setModel('\ItemXrefManufacturer');
    }

    /**
     * Gets an array of ChildItemXrefManufacturer objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemXrefManufacturer[] List of ChildItemXrefManufacturer objects
     * @throws PropelException
     */
    public function getItemXrefManufacturers(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefManufacturersPartial && !$this->isNew();
        if (null === $this->collItemXrefManufacturers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemXrefManufacturers) {
                // return empty collection
                $this->initItemXrefManufacturers();
            } else {
                $collItemXrefManufacturers = ChildItemXrefManufacturerQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemXrefManufacturersPartial && count($collItemXrefManufacturers)) {
                        $this->initItemXrefManufacturers(false);

                        foreach ($collItemXrefManufacturers as $obj) {
                            if (false == $this->collItemXrefManufacturers->contains($obj)) {
                                $this->collItemXrefManufacturers->append($obj);
                            }
                        }

                        $this->collItemXrefManufacturersPartial = true;
                    }

                    return $collItemXrefManufacturers;
                }

                if ($partial && $this->collItemXrefManufacturers) {
                    foreach ($this->collItemXrefManufacturers as $obj) {
                        if ($obj->isNew()) {
                            $collItemXrefManufacturers[] = $obj;
                        }
                    }
                }

                $this->collItemXrefManufacturers = $collItemXrefManufacturers;
                $this->collItemXrefManufacturersPartial = false;
            }
        }

        return $this->collItemXrefManufacturers;
    }

    /**
     * Sets a collection of ChildItemXrefManufacturer objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemXrefManufacturers A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemXrefManufacturers(Collection $itemXrefManufacturers, ConnectionInterface $con = null)
    {
        /** @var ChildItemXrefManufacturer[] $itemXrefManufacturersToDelete */
        $itemXrefManufacturersToDelete = $this->getItemXrefManufacturers(new Criteria(), $con)->diff($itemXrefManufacturers);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->itemXrefManufacturersScheduledForDeletion = clone $itemXrefManufacturersToDelete;

        foreach ($itemXrefManufacturersToDelete as $itemXrefManufacturerRemoved) {
            $itemXrefManufacturerRemoved->setItemMasterItem(null);
        }

        $this->collItemXrefManufacturers = null;
        foreach ($itemXrefManufacturers as $itemXrefManufacturer) {
            $this->addItemXrefManufacturer($itemXrefManufacturer);
        }

        $this->collItemXrefManufacturers = $itemXrefManufacturers;
        $this->collItemXrefManufacturersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemXrefManufacturer objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemXrefManufacturer objects.
     * @throws PropelException
     */
    public function countItemXrefManufacturers(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefManufacturersPartial && !$this->isNew();
        if (null === $this->collItemXrefManufacturers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemXrefManufacturers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemXrefManufacturers());
            }

            $query = ChildItemXrefManufacturerQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collItemXrefManufacturers);
    }

    /**
     * Method called to associate a ChildItemXrefManufacturer object to this object
     * through the ChildItemXrefManufacturer foreign key attribute.
     *
     * @param  ChildItemXrefManufacturer $l ChildItemXrefManufacturer
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemXrefManufacturer(ChildItemXrefManufacturer $l)
    {
        if ($this->collItemXrefManufacturers === null) {
            $this->initItemXrefManufacturers();
            $this->collItemXrefManufacturersPartial = true;
        }

        if (!$this->collItemXrefManufacturers->contains($l)) {
            $this->doAddItemXrefManufacturer($l);

            if ($this->itemXrefManufacturersScheduledForDeletion and $this->itemXrefManufacturersScheduledForDeletion->contains($l)) {
                $this->itemXrefManufacturersScheduledForDeletion->remove($this->itemXrefManufacturersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemXrefManufacturer $itemXrefManufacturer The ChildItemXrefManufacturer object to add.
     */
    protected function doAddItemXrefManufacturer(ChildItemXrefManufacturer $itemXrefManufacturer)
    {
        $this->collItemXrefManufacturers[]= $itemXrefManufacturer;
        $itemXrefManufacturer->setItemMasterItem($this);
    }

    /**
     * @param  ChildItemXrefManufacturer $itemXrefManufacturer The ChildItemXrefManufacturer object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemXrefManufacturer(ChildItemXrefManufacturer $itemXrefManufacturer)
    {
        if ($this->getItemXrefManufacturers()->contains($itemXrefManufacturer)) {
            $pos = $this->collItemXrefManufacturers->search($itemXrefManufacturer);
            $this->collItemXrefManufacturers->remove($pos);
            if (null === $this->itemXrefManufacturersScheduledForDeletion) {
                $this->itemXrefManufacturersScheduledForDeletion = clone $this->collItemXrefManufacturers;
                $this->itemXrefManufacturersScheduledForDeletion->clear();
            }
            $this->itemXrefManufacturersScheduledForDeletion[]= clone $itemXrefManufacturer;
            $itemXrefManufacturer->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related ItemXrefManufacturers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemXrefManufacturer[] List of ChildItemXrefManufacturer objects
     */
    public function getItemXrefManufacturersJoinVendor(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemXrefManufacturerQuery::create(null, $criteria);
        $query->joinWith('Vendor', $joinBehavior);

        return $this->getItemXrefManufacturers($query, $con);
    }

    /**
     * Clears out the collItemXrefCustomerNotes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemXrefCustomerNotes()
     */
    public function clearItemXrefCustomerNotes()
    {
        $this->collItemXrefCustomerNotes = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemXrefCustomerNotes collection loaded partially.
     */
    public function resetPartialItemXrefCustomerNotes($v = true)
    {
        $this->collItemXrefCustomerNotesPartial = $v;
    }

    /**
     * Initializes the collItemXrefCustomerNotes collection.
     *
     * By default this just sets the collItemXrefCustomerNotes collection to an empty array (like clearcollItemXrefCustomerNotes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemXrefCustomerNotes($overrideExisting = true)
    {
        if (null !== $this->collItemXrefCustomerNotes && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemXrefCustomerNoteTableMap::getTableMap()->getCollectionClassName();

        $this->collItemXrefCustomerNotes = new $collectionClassName;
        $this->collItemXrefCustomerNotes->setModel('\ItemXrefCustomerNote');
    }

    /**
     * Gets an array of ChildItemXrefCustomerNote objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemXrefCustomerNote[] List of ChildItemXrefCustomerNote objects
     * @throws PropelException
     */
    public function getItemXrefCustomerNotes(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefCustomerNotesPartial && !$this->isNew();
        if (null === $this->collItemXrefCustomerNotes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemXrefCustomerNotes) {
                // return empty collection
                $this->initItemXrefCustomerNotes();
            } else {
                $collItemXrefCustomerNotes = ChildItemXrefCustomerNoteQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemXrefCustomerNotesPartial && count($collItemXrefCustomerNotes)) {
                        $this->initItemXrefCustomerNotes(false);

                        foreach ($collItemXrefCustomerNotes as $obj) {
                            if (false == $this->collItemXrefCustomerNotes->contains($obj)) {
                                $this->collItemXrefCustomerNotes->append($obj);
                            }
                        }

                        $this->collItemXrefCustomerNotesPartial = true;
                    }

                    return $collItemXrefCustomerNotes;
                }

                if ($partial && $this->collItemXrefCustomerNotes) {
                    foreach ($this->collItemXrefCustomerNotes as $obj) {
                        if ($obj->isNew()) {
                            $collItemXrefCustomerNotes[] = $obj;
                        }
                    }
                }

                $this->collItemXrefCustomerNotes = $collItemXrefCustomerNotes;
                $this->collItemXrefCustomerNotesPartial = false;
            }
        }

        return $this->collItemXrefCustomerNotes;
    }

    /**
     * Sets a collection of ChildItemXrefCustomerNote objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemXrefCustomerNotes A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemXrefCustomerNotes(Collection $itemXrefCustomerNotes, ConnectionInterface $con = null)
    {
        /** @var ChildItemXrefCustomerNote[] $itemXrefCustomerNotesToDelete */
        $itemXrefCustomerNotesToDelete = $this->getItemXrefCustomerNotes(new Criteria(), $con)->diff($itemXrefCustomerNotes);


        $this->itemXrefCustomerNotesScheduledForDeletion = $itemXrefCustomerNotesToDelete;

        foreach ($itemXrefCustomerNotesToDelete as $itemXrefCustomerNoteRemoved) {
            $itemXrefCustomerNoteRemoved->setItemMasterItem(null);
        }

        $this->collItemXrefCustomerNotes = null;
        foreach ($itemXrefCustomerNotes as $itemXrefCustomerNote) {
            $this->addItemXrefCustomerNote($itemXrefCustomerNote);
        }

        $this->collItemXrefCustomerNotes = $itemXrefCustomerNotes;
        $this->collItemXrefCustomerNotesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemXrefCustomerNote objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemXrefCustomerNote objects.
     * @throws PropelException
     */
    public function countItemXrefCustomerNotes(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefCustomerNotesPartial && !$this->isNew();
        if (null === $this->collItemXrefCustomerNotes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemXrefCustomerNotes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemXrefCustomerNotes());
            }

            $query = ChildItemXrefCustomerNoteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collItemXrefCustomerNotes);
    }

    /**
     * Method called to associate a ChildItemXrefCustomerNote object to this object
     * through the ChildItemXrefCustomerNote foreign key attribute.
     *
     * @param  ChildItemXrefCustomerNote $l ChildItemXrefCustomerNote
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemXrefCustomerNote(ChildItemXrefCustomerNote $l)
    {
        if ($this->collItemXrefCustomerNotes === null) {
            $this->initItemXrefCustomerNotes();
            $this->collItemXrefCustomerNotesPartial = true;
        }

        if (!$this->collItemXrefCustomerNotes->contains($l)) {
            $this->doAddItemXrefCustomerNote($l);

            if ($this->itemXrefCustomerNotesScheduledForDeletion and $this->itemXrefCustomerNotesScheduledForDeletion->contains($l)) {
                $this->itemXrefCustomerNotesScheduledForDeletion->remove($this->itemXrefCustomerNotesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemXrefCustomerNote $itemXrefCustomerNote The ChildItemXrefCustomerNote object to add.
     */
    protected function doAddItemXrefCustomerNote(ChildItemXrefCustomerNote $itemXrefCustomerNote)
    {
        $this->collItemXrefCustomerNotes[]= $itemXrefCustomerNote;
        $itemXrefCustomerNote->setItemMasterItem($this);
    }

    /**
     * @param  ChildItemXrefCustomerNote $itemXrefCustomerNote The ChildItemXrefCustomerNote object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemXrefCustomerNote(ChildItemXrefCustomerNote $itemXrefCustomerNote)
    {
        if ($this->getItemXrefCustomerNotes()->contains($itemXrefCustomerNote)) {
            $pos = $this->collItemXrefCustomerNotes->search($itemXrefCustomerNote);
            $this->collItemXrefCustomerNotes->remove($pos);
            if (null === $this->itemXrefCustomerNotesScheduledForDeletion) {
                $this->itemXrefCustomerNotesScheduledForDeletion = clone $this->collItemXrefCustomerNotes;
                $this->itemXrefCustomerNotesScheduledForDeletion->clear();
            }
            $this->itemXrefCustomerNotesScheduledForDeletion[]= $itemXrefCustomerNote;
            $itemXrefCustomerNote->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related ItemXrefCustomerNotes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemXrefCustomerNote[] List of ChildItemXrefCustomerNote objects
     */
    public function getItemXrefCustomerNotesJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemXrefCustomerNoteQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getItemXrefCustomerNotes($query, $con);
    }

    /**
     * Clears out the collInvOptCodeNotes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvOptCodeNotes()
     */
    public function clearInvOptCodeNotes()
    {
        $this->collInvOptCodeNotes = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvOptCodeNotes collection loaded partially.
     */
    public function resetPartialInvOptCodeNotes($v = true)
    {
        $this->collInvOptCodeNotesPartial = $v;
    }

    /**
     * Initializes the collInvOptCodeNotes collection.
     *
     * By default this just sets the collInvOptCodeNotes collection to an empty array (like clearcollInvOptCodeNotes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvOptCodeNotes($overrideExisting = true)
    {
        if (null !== $this->collInvOptCodeNotes && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvOptCodeNoteTableMap::getTableMap()->getCollectionClassName();

        $this->collInvOptCodeNotes = new $collectionClassName;
        $this->collInvOptCodeNotes->setModel('\InvOptCodeNote');
    }

    /**
     * Gets an array of ChildInvOptCodeNote objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvOptCodeNote[] List of ChildInvOptCodeNote objects
     * @throws PropelException
     */
    public function getInvOptCodeNotes(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvOptCodeNotesPartial && !$this->isNew();
        if (null === $this->collInvOptCodeNotes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvOptCodeNotes) {
                // return empty collection
                $this->initInvOptCodeNotes();
            } else {
                $collInvOptCodeNotes = ChildInvOptCodeNoteQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvOptCodeNotesPartial && count($collInvOptCodeNotes)) {
                        $this->initInvOptCodeNotes(false);

                        foreach ($collInvOptCodeNotes as $obj) {
                            if (false == $this->collInvOptCodeNotes->contains($obj)) {
                                $this->collInvOptCodeNotes->append($obj);
                            }
                        }

                        $this->collInvOptCodeNotesPartial = true;
                    }

                    return $collInvOptCodeNotes;
                }

                if ($partial && $this->collInvOptCodeNotes) {
                    foreach ($this->collInvOptCodeNotes as $obj) {
                        if ($obj->isNew()) {
                            $collInvOptCodeNotes[] = $obj;
                        }
                    }
                }

                $this->collInvOptCodeNotes = $collInvOptCodeNotes;
                $this->collInvOptCodeNotesPartial = false;
            }
        }

        return $this->collInvOptCodeNotes;
    }

    /**
     * Sets a collection of ChildInvOptCodeNote objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invOptCodeNotes A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvOptCodeNotes(Collection $invOptCodeNotes, ConnectionInterface $con = null)
    {
        /** @var ChildInvOptCodeNote[] $invOptCodeNotesToDelete */
        $invOptCodeNotesToDelete = $this->getInvOptCodeNotes(new Criteria(), $con)->diff($invOptCodeNotes);


        $this->invOptCodeNotesScheduledForDeletion = $invOptCodeNotesToDelete;

        foreach ($invOptCodeNotesToDelete as $invOptCodeNoteRemoved) {
            $invOptCodeNoteRemoved->setItemMasterItem(null);
        }

        $this->collInvOptCodeNotes = null;
        foreach ($invOptCodeNotes as $invOptCodeNote) {
            $this->addInvOptCodeNote($invOptCodeNote);
        }

        $this->collInvOptCodeNotes = $invOptCodeNotes;
        $this->collInvOptCodeNotesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvOptCodeNote objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvOptCodeNote objects.
     * @throws PropelException
     */
    public function countInvOptCodeNotes(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvOptCodeNotesPartial && !$this->isNew();
        if (null === $this->collInvOptCodeNotes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvOptCodeNotes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvOptCodeNotes());
            }

            $query = ChildInvOptCodeNoteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collInvOptCodeNotes);
    }

    /**
     * Method called to associate a ChildInvOptCodeNote object to this object
     * through the ChildInvOptCodeNote foreign key attribute.
     *
     * @param  ChildInvOptCodeNote $l ChildInvOptCodeNote
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvOptCodeNote(ChildInvOptCodeNote $l)
    {
        if ($this->collInvOptCodeNotes === null) {
            $this->initInvOptCodeNotes();
            $this->collInvOptCodeNotesPartial = true;
        }

        if (!$this->collInvOptCodeNotes->contains($l)) {
            $this->doAddInvOptCodeNote($l);

            if ($this->invOptCodeNotesScheduledForDeletion and $this->invOptCodeNotesScheduledForDeletion->contains($l)) {
                $this->invOptCodeNotesScheduledForDeletion->remove($this->invOptCodeNotesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvOptCodeNote $invOptCodeNote The ChildInvOptCodeNote object to add.
     */
    protected function doAddInvOptCodeNote(ChildInvOptCodeNote $invOptCodeNote)
    {
        $this->collInvOptCodeNotes[]= $invOptCodeNote;
        $invOptCodeNote->setItemMasterItem($this);
    }

    /**
     * @param  ChildInvOptCodeNote $invOptCodeNote The ChildInvOptCodeNote object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvOptCodeNote(ChildInvOptCodeNote $invOptCodeNote)
    {
        if ($this->getInvOptCodeNotes()->contains($invOptCodeNote)) {
            $pos = $this->collInvOptCodeNotes->search($invOptCodeNote);
            $this->collInvOptCodeNotes->remove($pos);
            if (null === $this->invOptCodeNotesScheduledForDeletion) {
                $this->invOptCodeNotesScheduledForDeletion = clone $this->collInvOptCodeNotes;
                $this->invOptCodeNotesScheduledForDeletion->clear();
            }
            $this->invOptCodeNotesScheduledForDeletion[]= $invOptCodeNote;
            $invOptCodeNote->setItemMasterItem(null);
        }

        return $this;
    }

    /**
     * Clears out the collItemXrefVendorNoteDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemXrefVendorNoteDetails()
     */
    public function clearItemXrefVendorNoteDetails()
    {
        $this->collItemXrefVendorNoteDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemXrefVendorNoteDetails collection loaded partially.
     */
    public function resetPartialItemXrefVendorNoteDetails($v = true)
    {
        $this->collItemXrefVendorNoteDetailsPartial = $v;
    }

    /**
     * Initializes the collItemXrefVendorNoteDetails collection.
     *
     * By default this just sets the collItemXrefVendorNoteDetails collection to an empty array (like clearcollItemXrefVendorNoteDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemXrefVendorNoteDetails($overrideExisting = true)
    {
        if (null !== $this->collItemXrefVendorNoteDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemXrefVendorNoteDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collItemXrefVendorNoteDetails = new $collectionClassName;
        $this->collItemXrefVendorNoteDetails->setModel('\ItemXrefVendorNoteDetail');
    }

    /**
     * Gets an array of ChildItemXrefVendorNoteDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemXrefVendorNoteDetail[] List of ChildItemXrefVendorNoteDetail objects
     * @throws PropelException
     */
    public function getItemXrefVendorNoteDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefVendorNoteDetailsPartial && !$this->isNew();
        if (null === $this->collItemXrefVendorNoteDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemXrefVendorNoteDetails) {
                // return empty collection
                $this->initItemXrefVendorNoteDetails();
            } else {
                $collItemXrefVendorNoteDetails = ChildItemXrefVendorNoteDetailQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemXrefVendorNoteDetailsPartial && count($collItemXrefVendorNoteDetails)) {
                        $this->initItemXrefVendorNoteDetails(false);

                        foreach ($collItemXrefVendorNoteDetails as $obj) {
                            if (false == $this->collItemXrefVendorNoteDetails->contains($obj)) {
                                $this->collItemXrefVendorNoteDetails->append($obj);
                            }
                        }

                        $this->collItemXrefVendorNoteDetailsPartial = true;
                    }

                    return $collItemXrefVendorNoteDetails;
                }

                if ($partial && $this->collItemXrefVendorNoteDetails) {
                    foreach ($this->collItemXrefVendorNoteDetails as $obj) {
                        if ($obj->isNew()) {
                            $collItemXrefVendorNoteDetails[] = $obj;
                        }
                    }
                }

                $this->collItemXrefVendorNoteDetails = $collItemXrefVendorNoteDetails;
                $this->collItemXrefVendorNoteDetailsPartial = false;
            }
        }

        return $this->collItemXrefVendorNoteDetails;
    }

    /**
     * Sets a collection of ChildItemXrefVendorNoteDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemXrefVendorNoteDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemXrefVendorNoteDetails(Collection $itemXrefVendorNoteDetails, ConnectionInterface $con = null)
    {
        /** @var ChildItemXrefVendorNoteDetail[] $itemXrefVendorNoteDetailsToDelete */
        $itemXrefVendorNoteDetailsToDelete = $this->getItemXrefVendorNoteDetails(new Criteria(), $con)->diff($itemXrefVendorNoteDetails);


        $this->itemXrefVendorNoteDetailsScheduledForDeletion = $itemXrefVendorNoteDetailsToDelete;

        foreach ($itemXrefVendorNoteDetailsToDelete as $itemXrefVendorNoteDetailRemoved) {
            $itemXrefVendorNoteDetailRemoved->setItemMasterItem(null);
        }

        $this->collItemXrefVendorNoteDetails = null;
        foreach ($itemXrefVendorNoteDetails as $itemXrefVendorNoteDetail) {
            $this->addItemXrefVendorNoteDetail($itemXrefVendorNoteDetail);
        }

        $this->collItemXrefVendorNoteDetails = $itemXrefVendorNoteDetails;
        $this->collItemXrefVendorNoteDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemXrefVendorNoteDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemXrefVendorNoteDetail objects.
     * @throws PropelException
     */
    public function countItemXrefVendorNoteDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefVendorNoteDetailsPartial && !$this->isNew();
        if (null === $this->collItemXrefVendorNoteDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemXrefVendorNoteDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemXrefVendorNoteDetails());
            }

            $query = ChildItemXrefVendorNoteDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collItemXrefVendorNoteDetails);
    }

    /**
     * Method called to associate a ChildItemXrefVendorNoteDetail object to this object
     * through the ChildItemXrefVendorNoteDetail foreign key attribute.
     *
     * @param  ChildItemXrefVendorNoteDetail $l ChildItemXrefVendorNoteDetail
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemXrefVendorNoteDetail(ChildItemXrefVendorNoteDetail $l)
    {
        if ($this->collItemXrefVendorNoteDetails === null) {
            $this->initItemXrefVendorNoteDetails();
            $this->collItemXrefVendorNoteDetailsPartial = true;
        }

        if (!$this->collItemXrefVendorNoteDetails->contains($l)) {
            $this->doAddItemXrefVendorNoteDetail($l);

            if ($this->itemXrefVendorNoteDetailsScheduledForDeletion and $this->itemXrefVendorNoteDetailsScheduledForDeletion->contains($l)) {
                $this->itemXrefVendorNoteDetailsScheduledForDeletion->remove($this->itemXrefVendorNoteDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemXrefVendorNoteDetail $itemXrefVendorNoteDetail The ChildItemXrefVendorNoteDetail object to add.
     */
    protected function doAddItemXrefVendorNoteDetail(ChildItemXrefVendorNoteDetail $itemXrefVendorNoteDetail)
    {
        $this->collItemXrefVendorNoteDetails[]= $itemXrefVendorNoteDetail;
        $itemXrefVendorNoteDetail->setItemMasterItem($this);
    }

    /**
     * @param  ChildItemXrefVendorNoteDetail $itemXrefVendorNoteDetail The ChildItemXrefVendorNoteDetail object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemXrefVendorNoteDetail(ChildItemXrefVendorNoteDetail $itemXrefVendorNoteDetail)
    {
        if ($this->getItemXrefVendorNoteDetails()->contains($itemXrefVendorNoteDetail)) {
            $pos = $this->collItemXrefVendorNoteDetails->search($itemXrefVendorNoteDetail);
            $this->collItemXrefVendorNoteDetails->remove($pos);
            if (null === $this->itemXrefVendorNoteDetailsScheduledForDeletion) {
                $this->itemXrefVendorNoteDetailsScheduledForDeletion = clone $this->collItemXrefVendorNoteDetails;
                $this->itemXrefVendorNoteDetailsScheduledForDeletion->clear();
            }
            $this->itemXrefVendorNoteDetailsScheduledForDeletion[]= $itemXrefVendorNoteDetail;
            $itemXrefVendorNoteDetail->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related ItemXrefVendorNoteDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemXrefVendorNoteDetail[] List of ChildItemXrefVendorNoteDetail objects
     */
    public function getItemXrefVendorNoteDetailsJoinVendor(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemXrefVendorNoteDetailQuery::create(null, $criteria);
        $query->joinWith('Vendor', $joinBehavior);

        return $this->getItemXrefVendorNoteDetails($query, $con);
    }

    /**
     * Clears out the collItemXrefVendorNoteInternals collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemXrefVendorNoteInternals()
     */
    public function clearItemXrefVendorNoteInternals()
    {
        $this->collItemXrefVendorNoteInternals = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemXrefVendorNoteInternals collection loaded partially.
     */
    public function resetPartialItemXrefVendorNoteInternals($v = true)
    {
        $this->collItemXrefVendorNoteInternalsPartial = $v;
    }

    /**
     * Initializes the collItemXrefVendorNoteInternals collection.
     *
     * By default this just sets the collItemXrefVendorNoteInternals collection to an empty array (like clearcollItemXrefVendorNoteInternals());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemXrefVendorNoteInternals($overrideExisting = true)
    {
        if (null !== $this->collItemXrefVendorNoteInternals && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemXrefVendorNoteInternalTableMap::getTableMap()->getCollectionClassName();

        $this->collItemXrefVendorNoteInternals = new $collectionClassName;
        $this->collItemXrefVendorNoteInternals->setModel('\ItemXrefVendorNoteInternal');
    }

    /**
     * Gets an array of ChildItemXrefVendorNoteInternal objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemXrefVendorNoteInternal[] List of ChildItemXrefVendorNoteInternal objects
     * @throws PropelException
     */
    public function getItemXrefVendorNoteInternals(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefVendorNoteInternalsPartial && !$this->isNew();
        if (null === $this->collItemXrefVendorNoteInternals || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemXrefVendorNoteInternals) {
                // return empty collection
                $this->initItemXrefVendorNoteInternals();
            } else {
                $collItemXrefVendorNoteInternals = ChildItemXrefVendorNoteInternalQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemXrefVendorNoteInternalsPartial && count($collItemXrefVendorNoteInternals)) {
                        $this->initItemXrefVendorNoteInternals(false);

                        foreach ($collItemXrefVendorNoteInternals as $obj) {
                            if (false == $this->collItemXrefVendorNoteInternals->contains($obj)) {
                                $this->collItemXrefVendorNoteInternals->append($obj);
                            }
                        }

                        $this->collItemXrefVendorNoteInternalsPartial = true;
                    }

                    return $collItemXrefVendorNoteInternals;
                }

                if ($partial && $this->collItemXrefVendorNoteInternals) {
                    foreach ($this->collItemXrefVendorNoteInternals as $obj) {
                        if ($obj->isNew()) {
                            $collItemXrefVendorNoteInternals[] = $obj;
                        }
                    }
                }

                $this->collItemXrefVendorNoteInternals = $collItemXrefVendorNoteInternals;
                $this->collItemXrefVendorNoteInternalsPartial = false;
            }
        }

        return $this->collItemXrefVendorNoteInternals;
    }

    /**
     * Sets a collection of ChildItemXrefVendorNoteInternal objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemXrefVendorNoteInternals A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemXrefVendorNoteInternals(Collection $itemXrefVendorNoteInternals, ConnectionInterface $con = null)
    {
        /** @var ChildItemXrefVendorNoteInternal[] $itemXrefVendorNoteInternalsToDelete */
        $itemXrefVendorNoteInternalsToDelete = $this->getItemXrefVendorNoteInternals(new Criteria(), $con)->diff($itemXrefVendorNoteInternals);


        $this->itemXrefVendorNoteInternalsScheduledForDeletion = $itemXrefVendorNoteInternalsToDelete;

        foreach ($itemXrefVendorNoteInternalsToDelete as $itemXrefVendorNoteInternalRemoved) {
            $itemXrefVendorNoteInternalRemoved->setItemMasterItem(null);
        }

        $this->collItemXrefVendorNoteInternals = null;
        foreach ($itemXrefVendorNoteInternals as $itemXrefVendorNoteInternal) {
            $this->addItemXrefVendorNoteInternal($itemXrefVendorNoteInternal);
        }

        $this->collItemXrefVendorNoteInternals = $itemXrefVendorNoteInternals;
        $this->collItemXrefVendorNoteInternalsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemXrefVendorNoteInternal objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemXrefVendorNoteInternal objects.
     * @throws PropelException
     */
    public function countItemXrefVendorNoteInternals(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefVendorNoteInternalsPartial && !$this->isNew();
        if (null === $this->collItemXrefVendorNoteInternals || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemXrefVendorNoteInternals) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemXrefVendorNoteInternals());
            }

            $query = ChildItemXrefVendorNoteInternalQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collItemXrefVendorNoteInternals);
    }

    /**
     * Method called to associate a ChildItemXrefVendorNoteInternal object to this object
     * through the ChildItemXrefVendorNoteInternal foreign key attribute.
     *
     * @param  ChildItemXrefVendorNoteInternal $l ChildItemXrefVendorNoteInternal
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemXrefVendorNoteInternal(ChildItemXrefVendorNoteInternal $l)
    {
        if ($this->collItemXrefVendorNoteInternals === null) {
            $this->initItemXrefVendorNoteInternals();
            $this->collItemXrefVendorNoteInternalsPartial = true;
        }

        if (!$this->collItemXrefVendorNoteInternals->contains($l)) {
            $this->doAddItemXrefVendorNoteInternal($l);

            if ($this->itemXrefVendorNoteInternalsScheduledForDeletion and $this->itemXrefVendorNoteInternalsScheduledForDeletion->contains($l)) {
                $this->itemXrefVendorNoteInternalsScheduledForDeletion->remove($this->itemXrefVendorNoteInternalsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemXrefVendorNoteInternal $itemXrefVendorNoteInternal The ChildItemXrefVendorNoteInternal object to add.
     */
    protected function doAddItemXrefVendorNoteInternal(ChildItemXrefVendorNoteInternal $itemXrefVendorNoteInternal)
    {
        $this->collItemXrefVendorNoteInternals[]= $itemXrefVendorNoteInternal;
        $itemXrefVendorNoteInternal->setItemMasterItem($this);
    }

    /**
     * @param  ChildItemXrefVendorNoteInternal $itemXrefVendorNoteInternal The ChildItemXrefVendorNoteInternal object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemXrefVendorNoteInternal(ChildItemXrefVendorNoteInternal $itemXrefVendorNoteInternal)
    {
        if ($this->getItemXrefVendorNoteInternals()->contains($itemXrefVendorNoteInternal)) {
            $pos = $this->collItemXrefVendorNoteInternals->search($itemXrefVendorNoteInternal);
            $this->collItemXrefVendorNoteInternals->remove($pos);
            if (null === $this->itemXrefVendorNoteInternalsScheduledForDeletion) {
                $this->itemXrefVendorNoteInternalsScheduledForDeletion = clone $this->collItemXrefVendorNoteInternals;
                $this->itemXrefVendorNoteInternalsScheduledForDeletion->clear();
            }
            $this->itemXrefVendorNoteInternalsScheduledForDeletion[]= $itemXrefVendorNoteInternal;
            $itemXrefVendorNoteInternal->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related ItemXrefVendorNoteInternals from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemXrefVendorNoteInternal[] List of ChildItemXrefVendorNoteInternal objects
     */
    public function getItemXrefVendorNoteInternalsJoinVendor(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemXrefVendorNoteInternalQuery::create(null, $criteria);
        $query->joinWith('Vendor', $joinBehavior);

        return $this->getItemXrefVendorNoteInternals($query, $con);
    }

    /**
     * Clears out the collInvPallets collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addInvPallets()
     */
    public function clearInvPallets()
    {
        $this->collInvPallets = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collInvPallets collection loaded partially.
     */
    public function resetPartialInvPallets($v = true)
    {
        $this->collInvPalletsPartial = $v;
    }

    /**
     * Initializes the collInvPallets collection.
     *
     * By default this just sets the collInvPallets collection to an empty array (like clearcollInvPallets());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initInvPallets($overrideExisting = true)
    {
        if (null !== $this->collInvPallets && !$overrideExisting) {
            return;
        }

        $collectionClassName = InvPalletTableMap::getTableMap()->getCollectionClassName();

        $this->collInvPallets = new $collectionClassName;
        $this->collInvPallets->setModel('\InvPallet');
    }

    /**
     * Gets an array of ChildInvPallet objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildInvPallet[] List of ChildInvPallet objects
     * @throws PropelException
     */
    public function getInvPallets(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collInvPalletsPartial && !$this->isNew();
        if (null === $this->collInvPallets || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collInvPallets) {
                // return empty collection
                $this->initInvPallets();
            } else {
                $collInvPallets = ChildInvPalletQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collInvPalletsPartial && count($collInvPallets)) {
                        $this->initInvPallets(false);

                        foreach ($collInvPallets as $obj) {
                            if (false == $this->collInvPallets->contains($obj)) {
                                $this->collInvPallets->append($obj);
                            }
                        }

                        $this->collInvPalletsPartial = true;
                    }

                    return $collInvPallets;
                }

                if ($partial && $this->collInvPallets) {
                    foreach ($this->collInvPallets as $obj) {
                        if ($obj->isNew()) {
                            $collInvPallets[] = $obj;
                        }
                    }
                }

                $this->collInvPallets = $collInvPallets;
                $this->collInvPalletsPartial = false;
            }
        }

        return $this->collInvPallets;
    }

    /**
     * Sets a collection of ChildInvPallet objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $invPallets A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setInvPallets(Collection $invPallets, ConnectionInterface $con = null)
    {
        /** @var ChildInvPallet[] $invPalletsToDelete */
        $invPalletsToDelete = $this->getInvPallets(new Criteria(), $con)->diff($invPallets);


        $this->invPalletsScheduledForDeletion = $invPalletsToDelete;

        foreach ($invPalletsToDelete as $invPalletRemoved) {
            $invPalletRemoved->setItemMasterItem(null);
        }

        $this->collInvPallets = null;
        foreach ($invPallets as $invPallet) {
            $this->addInvPallet($invPallet);
        }

        $this->collInvPallets = $invPallets;
        $this->collInvPalletsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related InvPallet objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related InvPallet objects.
     * @throws PropelException
     */
    public function countInvPallets(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collInvPalletsPartial && !$this->isNew();
        if (null === $this->collInvPallets || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collInvPallets) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getInvPallets());
            }

            $query = ChildInvPalletQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collInvPallets);
    }

    /**
     * Method called to associate a ChildInvPallet object to this object
     * through the ChildInvPallet foreign key attribute.
     *
     * @param  ChildInvPallet $l ChildInvPallet
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addInvPallet(ChildInvPallet $l)
    {
        if ($this->collInvPallets === null) {
            $this->initInvPallets();
            $this->collInvPalletsPartial = true;
        }

        if (!$this->collInvPallets->contains($l)) {
            $this->doAddInvPallet($l);

            if ($this->invPalletsScheduledForDeletion and $this->invPalletsScheduledForDeletion->contains($l)) {
                $this->invPalletsScheduledForDeletion->remove($this->invPalletsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildInvPallet $invPallet The ChildInvPallet object to add.
     */
    protected function doAddInvPallet(ChildInvPallet $invPallet)
    {
        $this->collInvPallets[]= $invPallet;
        $invPallet->setItemMasterItem($this);
    }

    /**
     * @param  ChildInvPallet $invPallet The ChildInvPallet object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeInvPallet(ChildInvPallet $invPallet)
    {
        if ($this->getInvPallets()->contains($invPallet)) {
            $pos = $this->collInvPallets->search($invPallet);
            $this->collInvPallets->remove($pos);
            if (null === $this->invPalletsScheduledForDeletion) {
                $this->invPalletsScheduledForDeletion = clone $this->collInvPallets;
                $this->invPalletsScheduledForDeletion->clear();
            }
            $this->invPalletsScheduledForDeletion[]= clone $invPallet;
            $invPallet->setItemMasterItem(null);
        }

        return $this;
    }

    /**
     * Clears out the collPurchaseOrderDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPurchaseOrderDetails()
     */
    public function clearPurchaseOrderDetails()
    {
        $this->collPurchaseOrderDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPurchaseOrderDetails collection loaded partially.
     */
    public function resetPartialPurchaseOrderDetails($v = true)
    {
        $this->collPurchaseOrderDetailsPartial = $v;
    }

    /**
     * Initializes the collPurchaseOrderDetails collection.
     *
     * By default this just sets the collPurchaseOrderDetails collection to an empty array (like clearcollPurchaseOrderDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPurchaseOrderDetails($overrideExisting = true)
    {
        if (null !== $this->collPurchaseOrderDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = PurchaseOrderDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collPurchaseOrderDetails = new $collectionClassName;
        $this->collPurchaseOrderDetails->setModel('\PurchaseOrderDetail');
    }

    /**
     * Gets an array of ChildPurchaseOrderDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildPurchaseOrderDetail[] List of ChildPurchaseOrderDetail objects
     * @throws PropelException
     */
    public function getPurchaseOrderDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetails) {
                // return empty collection
                $this->initPurchaseOrderDetails();
            } else {
                $collPurchaseOrderDetails = ChildPurchaseOrderDetailQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPurchaseOrderDetailsPartial && count($collPurchaseOrderDetails)) {
                        $this->initPurchaseOrderDetails(false);

                        foreach ($collPurchaseOrderDetails as $obj) {
                            if (false == $this->collPurchaseOrderDetails->contains($obj)) {
                                $this->collPurchaseOrderDetails->append($obj);
                            }
                        }

                        $this->collPurchaseOrderDetailsPartial = true;
                    }

                    return $collPurchaseOrderDetails;
                }

                if ($partial && $this->collPurchaseOrderDetails) {
                    foreach ($this->collPurchaseOrderDetails as $obj) {
                        if ($obj->isNew()) {
                            $collPurchaseOrderDetails[] = $obj;
                        }
                    }
                }

                $this->collPurchaseOrderDetails = $collPurchaseOrderDetails;
                $this->collPurchaseOrderDetailsPartial = false;
            }
        }

        return $this->collPurchaseOrderDetails;
    }

    /**
     * Sets a collection of ChildPurchaseOrderDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $purchaseOrderDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setPurchaseOrderDetails(Collection $purchaseOrderDetails, ConnectionInterface $con = null)
    {
        /** @var ChildPurchaseOrderDetail[] $purchaseOrderDetailsToDelete */
        $purchaseOrderDetailsToDelete = $this->getPurchaseOrderDetails(new Criteria(), $con)->diff($purchaseOrderDetails);


        $this->purchaseOrderDetailsScheduledForDeletion = $purchaseOrderDetailsToDelete;

        foreach ($purchaseOrderDetailsToDelete as $purchaseOrderDetailRemoved) {
            $purchaseOrderDetailRemoved->setItemMasterItem(null);
        }

        $this->collPurchaseOrderDetails = null;
        foreach ($purchaseOrderDetails as $purchaseOrderDetail) {
            $this->addPurchaseOrderDetail($purchaseOrderDetail);
        }

        $this->collPurchaseOrderDetails = $purchaseOrderDetails;
        $this->collPurchaseOrderDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PurchaseOrderDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related PurchaseOrderDetail objects.
     * @throws PropelException
     */
    public function countPurchaseOrderDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPurchaseOrderDetails());
            }

            $query = ChildPurchaseOrderDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collPurchaseOrderDetails);
    }

    /**
     * Method called to associate a ChildPurchaseOrderDetail object to this object
     * through the ChildPurchaseOrderDetail foreign key attribute.
     *
     * @param  ChildPurchaseOrderDetail $l ChildPurchaseOrderDetail
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addPurchaseOrderDetail(ChildPurchaseOrderDetail $l)
    {
        if ($this->collPurchaseOrderDetails === null) {
            $this->initPurchaseOrderDetails();
            $this->collPurchaseOrderDetailsPartial = true;
        }

        if (!$this->collPurchaseOrderDetails->contains($l)) {
            $this->doAddPurchaseOrderDetail($l);

            if ($this->purchaseOrderDetailsScheduledForDeletion and $this->purchaseOrderDetailsScheduledForDeletion->contains($l)) {
                $this->purchaseOrderDetailsScheduledForDeletion->remove($this->purchaseOrderDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildPurchaseOrderDetail $purchaseOrderDetail The ChildPurchaseOrderDetail object to add.
     */
    protected function doAddPurchaseOrderDetail(ChildPurchaseOrderDetail $purchaseOrderDetail)
    {
        $this->collPurchaseOrderDetails[]= $purchaseOrderDetail;
        $purchaseOrderDetail->setItemMasterItem($this);
    }

    /**
     * @param  ChildPurchaseOrderDetail $purchaseOrderDetail The ChildPurchaseOrderDetail object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removePurchaseOrderDetail(ChildPurchaseOrderDetail $purchaseOrderDetail)
    {
        if ($this->getPurchaseOrderDetails()->contains($purchaseOrderDetail)) {
            $pos = $this->collPurchaseOrderDetails->search($purchaseOrderDetail);
            $this->collPurchaseOrderDetails->remove($pos);
            if (null === $this->purchaseOrderDetailsScheduledForDeletion) {
                $this->purchaseOrderDetailsScheduledForDeletion = clone $this->collPurchaseOrderDetails;
                $this->purchaseOrderDetailsScheduledForDeletion->clear();
            }
            $this->purchaseOrderDetailsScheduledForDeletion[]= clone $purchaseOrderDetail;
            $purchaseOrderDetail->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related PurchaseOrderDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetail[] List of ChildPurchaseOrderDetail objects
     */
    public function getPurchaseOrderDetailsJoinPurchaseOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrder', $joinBehavior);

        return $this->getPurchaseOrderDetails($query, $con);
    }

    /**
     * Clears out the collPurchaseOrderDetailReceipts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPurchaseOrderDetailReceipts()
     */
    public function clearPurchaseOrderDetailReceipts()
    {
        $this->collPurchaseOrderDetailReceipts = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPurchaseOrderDetailReceipts collection loaded partially.
     */
    public function resetPartialPurchaseOrderDetailReceipts($v = true)
    {
        $this->collPurchaseOrderDetailReceiptsPartial = $v;
    }

    /**
     * Initializes the collPurchaseOrderDetailReceipts collection.
     *
     * By default this just sets the collPurchaseOrderDetailReceipts collection to an empty array (like clearcollPurchaseOrderDetailReceipts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPurchaseOrderDetailReceipts($overrideExisting = true)
    {
        if (null !== $this->collPurchaseOrderDetailReceipts && !$overrideExisting) {
            return;
        }

        $collectionClassName = PurchaseOrderDetailReceiptTableMap::getTableMap()->getCollectionClassName();

        $this->collPurchaseOrderDetailReceipts = new $collectionClassName;
        $this->collPurchaseOrderDetailReceipts->setModel('\PurchaseOrderDetailReceipt');
    }

    /**
     * Gets an array of ChildPurchaseOrderDetailReceipt objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildPurchaseOrderDetailReceipt[] List of ChildPurchaseOrderDetailReceipt objects
     * @throws PropelException
     */
    public function getPurchaseOrderDetailReceipts(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailReceiptsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailReceipts || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailReceipts) {
                // return empty collection
                $this->initPurchaseOrderDetailReceipts();
            } else {
                $collPurchaseOrderDetailReceipts = ChildPurchaseOrderDetailReceiptQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPurchaseOrderDetailReceiptsPartial && count($collPurchaseOrderDetailReceipts)) {
                        $this->initPurchaseOrderDetailReceipts(false);

                        foreach ($collPurchaseOrderDetailReceipts as $obj) {
                            if (false == $this->collPurchaseOrderDetailReceipts->contains($obj)) {
                                $this->collPurchaseOrderDetailReceipts->append($obj);
                            }
                        }

                        $this->collPurchaseOrderDetailReceiptsPartial = true;
                    }

                    return $collPurchaseOrderDetailReceipts;
                }

                if ($partial && $this->collPurchaseOrderDetailReceipts) {
                    foreach ($this->collPurchaseOrderDetailReceipts as $obj) {
                        if ($obj->isNew()) {
                            $collPurchaseOrderDetailReceipts[] = $obj;
                        }
                    }
                }

                $this->collPurchaseOrderDetailReceipts = $collPurchaseOrderDetailReceipts;
                $this->collPurchaseOrderDetailReceiptsPartial = false;
            }
        }

        return $this->collPurchaseOrderDetailReceipts;
    }

    /**
     * Sets a collection of ChildPurchaseOrderDetailReceipt objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $purchaseOrderDetailReceipts A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setPurchaseOrderDetailReceipts(Collection $purchaseOrderDetailReceipts, ConnectionInterface $con = null)
    {
        /** @var ChildPurchaseOrderDetailReceipt[] $purchaseOrderDetailReceiptsToDelete */
        $purchaseOrderDetailReceiptsToDelete = $this->getPurchaseOrderDetailReceipts(new Criteria(), $con)->diff($purchaseOrderDetailReceipts);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->purchaseOrderDetailReceiptsScheduledForDeletion = clone $purchaseOrderDetailReceiptsToDelete;

        foreach ($purchaseOrderDetailReceiptsToDelete as $purchaseOrderDetailReceiptRemoved) {
            $purchaseOrderDetailReceiptRemoved->setItemMasterItem(null);
        }

        $this->collPurchaseOrderDetailReceipts = null;
        foreach ($purchaseOrderDetailReceipts as $purchaseOrderDetailReceipt) {
            $this->addPurchaseOrderDetailReceipt($purchaseOrderDetailReceipt);
        }

        $this->collPurchaseOrderDetailReceipts = $purchaseOrderDetailReceipts;
        $this->collPurchaseOrderDetailReceiptsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PurchaseOrderDetailReceipt objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related PurchaseOrderDetailReceipt objects.
     * @throws PropelException
     */
    public function countPurchaseOrderDetailReceipts(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailReceiptsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailReceipts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailReceipts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPurchaseOrderDetailReceipts());
            }

            $query = ChildPurchaseOrderDetailReceiptQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collPurchaseOrderDetailReceipts);
    }

    /**
     * Method called to associate a ChildPurchaseOrderDetailReceipt object to this object
     * through the ChildPurchaseOrderDetailReceipt foreign key attribute.
     *
     * @param  ChildPurchaseOrderDetailReceipt $l ChildPurchaseOrderDetailReceipt
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addPurchaseOrderDetailReceipt(ChildPurchaseOrderDetailReceipt $l)
    {
        if ($this->collPurchaseOrderDetailReceipts === null) {
            $this->initPurchaseOrderDetailReceipts();
            $this->collPurchaseOrderDetailReceiptsPartial = true;
        }

        if (!$this->collPurchaseOrderDetailReceipts->contains($l)) {
            $this->doAddPurchaseOrderDetailReceipt($l);

            if ($this->purchaseOrderDetailReceiptsScheduledForDeletion and $this->purchaseOrderDetailReceiptsScheduledForDeletion->contains($l)) {
                $this->purchaseOrderDetailReceiptsScheduledForDeletion->remove($this->purchaseOrderDetailReceiptsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildPurchaseOrderDetailReceipt $purchaseOrderDetailReceipt The ChildPurchaseOrderDetailReceipt object to add.
     */
    protected function doAddPurchaseOrderDetailReceipt(ChildPurchaseOrderDetailReceipt $purchaseOrderDetailReceipt)
    {
        $this->collPurchaseOrderDetailReceipts[]= $purchaseOrderDetailReceipt;
        $purchaseOrderDetailReceipt->setItemMasterItem($this);
    }

    /**
     * @param  ChildPurchaseOrderDetailReceipt $purchaseOrderDetailReceipt The ChildPurchaseOrderDetailReceipt object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removePurchaseOrderDetailReceipt(ChildPurchaseOrderDetailReceipt $purchaseOrderDetailReceipt)
    {
        if ($this->getPurchaseOrderDetailReceipts()->contains($purchaseOrderDetailReceipt)) {
            $pos = $this->collPurchaseOrderDetailReceipts->search($purchaseOrderDetailReceipt);
            $this->collPurchaseOrderDetailReceipts->remove($pos);
            if (null === $this->purchaseOrderDetailReceiptsScheduledForDeletion) {
                $this->purchaseOrderDetailReceiptsScheduledForDeletion = clone $this->collPurchaseOrderDetailReceipts;
                $this->purchaseOrderDetailReceiptsScheduledForDeletion->clear();
            }
            $this->purchaseOrderDetailReceiptsScheduledForDeletion[]= clone $purchaseOrderDetailReceipt;
            $purchaseOrderDetailReceipt->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceipts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceipt[] List of ChildPurchaseOrderDetailReceipt objects
     */
    public function getPurchaseOrderDetailReceiptsJoinPurchaseOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceiptQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrder', $joinBehavior);

        return $this->getPurchaseOrderDetailReceipts($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceipts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceipt[] List of ChildPurchaseOrderDetailReceipt objects
     */
    public function getPurchaseOrderDetailReceiptsJoinPurchaseOrderDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceiptQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrderDetail', $joinBehavior);

        return $this->getPurchaseOrderDetailReceipts($query, $con);
    }

    /**
     * Clears out the collPurchaseOrderDetailReceivings collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPurchaseOrderDetailReceivings()
     */
    public function clearPurchaseOrderDetailReceivings()
    {
        $this->collPurchaseOrderDetailReceivings = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPurchaseOrderDetailReceivings collection loaded partially.
     */
    public function resetPartialPurchaseOrderDetailReceivings($v = true)
    {
        $this->collPurchaseOrderDetailReceivingsPartial = $v;
    }

    /**
     * Initializes the collPurchaseOrderDetailReceivings collection.
     *
     * By default this just sets the collPurchaseOrderDetailReceivings collection to an empty array (like clearcollPurchaseOrderDetailReceivings());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPurchaseOrderDetailReceivings($overrideExisting = true)
    {
        if (null !== $this->collPurchaseOrderDetailReceivings && !$overrideExisting) {
            return;
        }

        $collectionClassName = PurchaseOrderDetailReceivingTableMap::getTableMap()->getCollectionClassName();

        $this->collPurchaseOrderDetailReceivings = new $collectionClassName;
        $this->collPurchaseOrderDetailReceivings->setModel('\PurchaseOrderDetailReceiving');
    }

    /**
     * Gets an array of ChildPurchaseOrderDetailReceiving objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     * @throws PropelException
     */
    public function getPurchaseOrderDetailReceivings(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailReceivingsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailReceivings || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailReceivings) {
                // return empty collection
                $this->initPurchaseOrderDetailReceivings();
            } else {
                $collPurchaseOrderDetailReceivings = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPurchaseOrderDetailReceivingsPartial && count($collPurchaseOrderDetailReceivings)) {
                        $this->initPurchaseOrderDetailReceivings(false);

                        foreach ($collPurchaseOrderDetailReceivings as $obj) {
                            if (false == $this->collPurchaseOrderDetailReceivings->contains($obj)) {
                                $this->collPurchaseOrderDetailReceivings->append($obj);
                            }
                        }

                        $this->collPurchaseOrderDetailReceivingsPartial = true;
                    }

                    return $collPurchaseOrderDetailReceivings;
                }

                if ($partial && $this->collPurchaseOrderDetailReceivings) {
                    foreach ($this->collPurchaseOrderDetailReceivings as $obj) {
                        if ($obj->isNew()) {
                            $collPurchaseOrderDetailReceivings[] = $obj;
                        }
                    }
                }

                $this->collPurchaseOrderDetailReceivings = $collPurchaseOrderDetailReceivings;
                $this->collPurchaseOrderDetailReceivingsPartial = false;
            }
        }

        return $this->collPurchaseOrderDetailReceivings;
    }

    /**
     * Sets a collection of ChildPurchaseOrderDetailReceiving objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $purchaseOrderDetailReceivings A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setPurchaseOrderDetailReceivings(Collection $purchaseOrderDetailReceivings, ConnectionInterface $con = null)
    {
        /** @var ChildPurchaseOrderDetailReceiving[] $purchaseOrderDetailReceivingsToDelete */
        $purchaseOrderDetailReceivingsToDelete = $this->getPurchaseOrderDetailReceivings(new Criteria(), $con)->diff($purchaseOrderDetailReceivings);


        $this->purchaseOrderDetailReceivingsScheduledForDeletion = $purchaseOrderDetailReceivingsToDelete;

        foreach ($purchaseOrderDetailReceivingsToDelete as $purchaseOrderDetailReceivingRemoved) {
            $purchaseOrderDetailReceivingRemoved->setItemMasterItem(null);
        }

        $this->collPurchaseOrderDetailReceivings = null;
        foreach ($purchaseOrderDetailReceivings as $purchaseOrderDetailReceiving) {
            $this->addPurchaseOrderDetailReceiving($purchaseOrderDetailReceiving);
        }

        $this->collPurchaseOrderDetailReceivings = $purchaseOrderDetailReceivings;
        $this->collPurchaseOrderDetailReceivingsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PurchaseOrderDetailReceiving objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related PurchaseOrderDetailReceiving objects.
     * @throws PropelException
     */
    public function countPurchaseOrderDetailReceivings(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailReceivingsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailReceivings || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailReceivings) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPurchaseOrderDetailReceivings());
            }

            $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collPurchaseOrderDetailReceivings);
    }

    /**
     * Method called to associate a ChildPurchaseOrderDetailReceiving object to this object
     * through the ChildPurchaseOrderDetailReceiving foreign key attribute.
     *
     * @param  ChildPurchaseOrderDetailReceiving $l ChildPurchaseOrderDetailReceiving
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addPurchaseOrderDetailReceiving(ChildPurchaseOrderDetailReceiving $l)
    {
        if ($this->collPurchaseOrderDetailReceivings === null) {
            $this->initPurchaseOrderDetailReceivings();
            $this->collPurchaseOrderDetailReceivingsPartial = true;
        }

        if (!$this->collPurchaseOrderDetailReceivings->contains($l)) {
            $this->doAddPurchaseOrderDetailReceiving($l);

            if ($this->purchaseOrderDetailReceivingsScheduledForDeletion and $this->purchaseOrderDetailReceivingsScheduledForDeletion->contains($l)) {
                $this->purchaseOrderDetailReceivingsScheduledForDeletion->remove($this->purchaseOrderDetailReceivingsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildPurchaseOrderDetailReceiving $purchaseOrderDetailReceiving The ChildPurchaseOrderDetailReceiving object to add.
     */
    protected function doAddPurchaseOrderDetailReceiving(ChildPurchaseOrderDetailReceiving $purchaseOrderDetailReceiving)
    {
        $this->collPurchaseOrderDetailReceivings[]= $purchaseOrderDetailReceiving;
        $purchaseOrderDetailReceiving->setItemMasterItem($this);
    }

    /**
     * @param  ChildPurchaseOrderDetailReceiving $purchaseOrderDetailReceiving The ChildPurchaseOrderDetailReceiving object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removePurchaseOrderDetailReceiving(ChildPurchaseOrderDetailReceiving $purchaseOrderDetailReceiving)
    {
        if ($this->getPurchaseOrderDetailReceivings()->contains($purchaseOrderDetailReceiving)) {
            $pos = $this->collPurchaseOrderDetailReceivings->search($purchaseOrderDetailReceiving);
            $this->collPurchaseOrderDetailReceivings->remove($pos);
            if (null === $this->purchaseOrderDetailReceivingsScheduledForDeletion) {
                $this->purchaseOrderDetailReceivingsScheduledForDeletion = clone $this->collPurchaseOrderDetailReceivings;
                $this->purchaseOrderDetailReceivingsScheduledForDeletion->clear();
            }
            $this->purchaseOrderDetailReceivingsScheduledForDeletion[]= clone $purchaseOrderDetailReceiving;
            $purchaseOrderDetailReceiving->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     */
    public function getPurchaseOrderDetailReceivingsJoinPurchaseOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrder', $joinBehavior);

        return $this->getPurchaseOrderDetailReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     */
    public function getPurchaseOrderDetailReceivingsJoinPoReceivingHead(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
        $query->joinWith('PoReceivingHead', $joinBehavior);

        return $this->getPurchaseOrderDetailReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     */
    public function getPurchaseOrderDetailReceivingsJoinPurchaseOrderDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrderDetail', $joinBehavior);

        return $this->getPurchaseOrderDetailReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related PurchaseOrderDetailReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailReceiving[] List of ChildPurchaseOrderDetailReceiving objects
     */
    public function getPurchaseOrderDetailReceivingsJoinUnitofMeasureSale(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailReceivingQuery::create(null, $criteria);
        $query->joinWith('UnitofMeasureSale', $joinBehavior);

        return $this->getPurchaseOrderDetailReceivings($query, $con);
    }

    /**
     * Clears out the collPurchaseOrderDetailLotReceivings collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPurchaseOrderDetailLotReceivings()
     */
    public function clearPurchaseOrderDetailLotReceivings()
    {
        $this->collPurchaseOrderDetailLotReceivings = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPurchaseOrderDetailLotReceivings collection loaded partially.
     */
    public function resetPartialPurchaseOrderDetailLotReceivings($v = true)
    {
        $this->collPurchaseOrderDetailLotReceivingsPartial = $v;
    }

    /**
     * Initializes the collPurchaseOrderDetailLotReceivings collection.
     *
     * By default this just sets the collPurchaseOrderDetailLotReceivings collection to an empty array (like clearcollPurchaseOrderDetailLotReceivings());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPurchaseOrderDetailLotReceivings($overrideExisting = true)
    {
        if (null !== $this->collPurchaseOrderDetailLotReceivings && !$overrideExisting) {
            return;
        }

        $collectionClassName = PurchaseOrderDetailLotReceivingTableMap::getTableMap()->getCollectionClassName();

        $this->collPurchaseOrderDetailLotReceivings = new $collectionClassName;
        $this->collPurchaseOrderDetailLotReceivings->setModel('\PurchaseOrderDetailLotReceiving');
    }

    /**
     * Gets an array of ChildPurchaseOrderDetailLotReceiving objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] List of ChildPurchaseOrderDetailLotReceiving objects
     * @throws PropelException
     */
    public function getPurchaseOrderDetailLotReceivings(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailLotReceivingsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailLotReceivings || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailLotReceivings) {
                // return empty collection
                $this->initPurchaseOrderDetailLotReceivings();
            } else {
                $collPurchaseOrderDetailLotReceivings = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPurchaseOrderDetailLotReceivingsPartial && count($collPurchaseOrderDetailLotReceivings)) {
                        $this->initPurchaseOrderDetailLotReceivings(false);

                        foreach ($collPurchaseOrderDetailLotReceivings as $obj) {
                            if (false == $this->collPurchaseOrderDetailLotReceivings->contains($obj)) {
                                $this->collPurchaseOrderDetailLotReceivings->append($obj);
                            }
                        }

                        $this->collPurchaseOrderDetailLotReceivingsPartial = true;
                    }

                    return $collPurchaseOrderDetailLotReceivings;
                }

                if ($partial && $this->collPurchaseOrderDetailLotReceivings) {
                    foreach ($this->collPurchaseOrderDetailLotReceivings as $obj) {
                        if ($obj->isNew()) {
                            $collPurchaseOrderDetailLotReceivings[] = $obj;
                        }
                    }
                }

                $this->collPurchaseOrderDetailLotReceivings = $collPurchaseOrderDetailLotReceivings;
                $this->collPurchaseOrderDetailLotReceivingsPartial = false;
            }
        }

        return $this->collPurchaseOrderDetailLotReceivings;
    }

    /**
     * Sets a collection of ChildPurchaseOrderDetailLotReceiving objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $purchaseOrderDetailLotReceivings A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setPurchaseOrderDetailLotReceivings(Collection $purchaseOrderDetailLotReceivings, ConnectionInterface $con = null)
    {
        /** @var ChildPurchaseOrderDetailLotReceiving[] $purchaseOrderDetailLotReceivingsToDelete */
        $purchaseOrderDetailLotReceivingsToDelete = $this->getPurchaseOrderDetailLotReceivings(new Criteria(), $con)->diff($purchaseOrderDetailLotReceivings);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->purchaseOrderDetailLotReceivingsScheduledForDeletion = clone $purchaseOrderDetailLotReceivingsToDelete;

        foreach ($purchaseOrderDetailLotReceivingsToDelete as $purchaseOrderDetailLotReceivingRemoved) {
            $purchaseOrderDetailLotReceivingRemoved->setItemMasterItem(null);
        }

        $this->collPurchaseOrderDetailLotReceivings = null;
        foreach ($purchaseOrderDetailLotReceivings as $purchaseOrderDetailLotReceiving) {
            $this->addPurchaseOrderDetailLotReceiving($purchaseOrderDetailLotReceiving);
        }

        $this->collPurchaseOrderDetailLotReceivings = $purchaseOrderDetailLotReceivings;
        $this->collPurchaseOrderDetailLotReceivingsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PurchaseOrderDetailLotReceiving objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related PurchaseOrderDetailLotReceiving objects.
     * @throws PropelException
     */
    public function countPurchaseOrderDetailLotReceivings(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrderDetailLotReceivingsPartial && !$this->isNew();
        if (null === $this->collPurchaseOrderDetailLotReceivings || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrderDetailLotReceivings) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPurchaseOrderDetailLotReceivings());
            }

            $query = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collPurchaseOrderDetailLotReceivings);
    }

    /**
     * Method called to associate a ChildPurchaseOrderDetailLotReceiving object to this object
     * through the ChildPurchaseOrderDetailLotReceiving foreign key attribute.
     *
     * @param  ChildPurchaseOrderDetailLotReceiving $l ChildPurchaseOrderDetailLotReceiving
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addPurchaseOrderDetailLotReceiving(ChildPurchaseOrderDetailLotReceiving $l)
    {
        if ($this->collPurchaseOrderDetailLotReceivings === null) {
            $this->initPurchaseOrderDetailLotReceivings();
            $this->collPurchaseOrderDetailLotReceivingsPartial = true;
        }

        if (!$this->collPurchaseOrderDetailLotReceivings->contains($l)) {
            $this->doAddPurchaseOrderDetailLotReceiving($l);

            if ($this->purchaseOrderDetailLotReceivingsScheduledForDeletion and $this->purchaseOrderDetailLotReceivingsScheduledForDeletion->contains($l)) {
                $this->purchaseOrderDetailLotReceivingsScheduledForDeletion->remove($this->purchaseOrderDetailLotReceivingsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving The ChildPurchaseOrderDetailLotReceiving object to add.
     */
    protected function doAddPurchaseOrderDetailLotReceiving(ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving)
    {
        $this->collPurchaseOrderDetailLotReceivings[]= $purchaseOrderDetailLotReceiving;
        $purchaseOrderDetailLotReceiving->setItemMasterItem($this);
    }

    /**
     * @param  ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving The ChildPurchaseOrderDetailLotReceiving object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removePurchaseOrderDetailLotReceiving(ChildPurchaseOrderDetailLotReceiving $purchaseOrderDetailLotReceiving)
    {
        if ($this->getPurchaseOrderDetailLotReceivings()->contains($purchaseOrderDetailLotReceiving)) {
            $pos = $this->collPurchaseOrderDetailLotReceivings->search($purchaseOrderDetailLotReceiving);
            $this->collPurchaseOrderDetailLotReceivings->remove($pos);
            if (null === $this->purchaseOrderDetailLotReceivingsScheduledForDeletion) {
                $this->purchaseOrderDetailLotReceivingsScheduledForDeletion = clone $this->collPurchaseOrderDetailLotReceivings;
                $this->purchaseOrderDetailLotReceivingsScheduledForDeletion->clear();
            }
            $this->purchaseOrderDetailLotReceivingsScheduledForDeletion[]= clone $purchaseOrderDetailLotReceiving;
            $purchaseOrderDetailLotReceiving->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related PurchaseOrderDetailLotReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] List of ChildPurchaseOrderDetailLotReceiving objects
     */
    public function getPurchaseOrderDetailLotReceivingsJoinPurchaseOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrder', $joinBehavior);

        return $this->getPurchaseOrderDetailLotReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related PurchaseOrderDetailLotReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] List of ChildPurchaseOrderDetailLotReceiving objects
     */
    public function getPurchaseOrderDetailLotReceivingsJoinPoReceivingHead(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria);
        $query->joinWith('PoReceivingHead', $joinBehavior);

        return $this->getPurchaseOrderDetailLotReceivings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related PurchaseOrderDetailLotReceivings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildPurchaseOrderDetailLotReceiving[] List of ChildPurchaseOrderDetailLotReceiving objects
     */
    public function getPurchaseOrderDetailLotReceivingsJoinPurchaseOrderDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildPurchaseOrderDetailLotReceivingQuery::create(null, $criteria);
        $query->joinWith('PurchaseOrderDetail', $joinBehavior);

        return $this->getPurchaseOrderDetailLotReceivings($query, $con);
    }

    /**
     * Clears out the collBomComponents collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addBomComponents()
     */
    public function clearBomComponents()
    {
        $this->collBomComponents = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collBomComponents collection loaded partially.
     */
    public function resetPartialBomComponents($v = true)
    {
        $this->collBomComponentsPartial = $v;
    }

    /**
     * Initializes the collBomComponents collection.
     *
     * By default this just sets the collBomComponents collection to an empty array (like clearcollBomComponents());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBomComponents($overrideExisting = true)
    {
        if (null !== $this->collBomComponents && !$overrideExisting) {
            return;
        }

        $collectionClassName = BomComponentTableMap::getTableMap()->getCollectionClassName();

        $this->collBomComponents = new $collectionClassName;
        $this->collBomComponents->setModel('\BomComponent');
    }

    /**
     * Gets an array of ChildBomComponent objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildBomComponent[] List of ChildBomComponent objects
     * @throws PropelException
     */
    public function getBomComponents(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collBomComponentsPartial && !$this->isNew();
        if (null === $this->collBomComponents || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBomComponents) {
                // return empty collection
                $this->initBomComponents();
            } else {
                $collBomComponents = ChildBomComponentQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collBomComponentsPartial && count($collBomComponents)) {
                        $this->initBomComponents(false);

                        foreach ($collBomComponents as $obj) {
                            if (false == $this->collBomComponents->contains($obj)) {
                                $this->collBomComponents->append($obj);
                            }
                        }

                        $this->collBomComponentsPartial = true;
                    }

                    return $collBomComponents;
                }

                if ($partial && $this->collBomComponents) {
                    foreach ($this->collBomComponents as $obj) {
                        if ($obj->isNew()) {
                            $collBomComponents[] = $obj;
                        }
                    }
                }

                $this->collBomComponents = $collBomComponents;
                $this->collBomComponentsPartial = false;
            }
        }

        return $this->collBomComponents;
    }

    /**
     * Sets a collection of ChildBomComponent objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $bomComponents A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setBomComponents(Collection $bomComponents, ConnectionInterface $con = null)
    {
        /** @var ChildBomComponent[] $bomComponentsToDelete */
        $bomComponentsToDelete = $this->getBomComponents(new Criteria(), $con)->diff($bomComponents);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->bomComponentsScheduledForDeletion = clone $bomComponentsToDelete;

        foreach ($bomComponentsToDelete as $bomComponentRemoved) {
            $bomComponentRemoved->setItemMasterItem(null);
        }

        $this->collBomComponents = null;
        foreach ($bomComponents as $bomComponent) {
            $this->addBomComponent($bomComponent);
        }

        $this->collBomComponents = $bomComponents;
        $this->collBomComponentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BomComponent objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BomComponent objects.
     * @throws PropelException
     */
    public function countBomComponents(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collBomComponentsPartial && !$this->isNew();
        if (null === $this->collBomComponents || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBomComponents) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getBomComponents());
            }

            $query = ChildBomComponentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collBomComponents);
    }

    /**
     * Method called to associate a ChildBomComponent object to this object
     * through the ChildBomComponent foreign key attribute.
     *
     * @param  ChildBomComponent $l ChildBomComponent
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addBomComponent(ChildBomComponent $l)
    {
        if ($this->collBomComponents === null) {
            $this->initBomComponents();
            $this->collBomComponentsPartial = true;
        }

        if (!$this->collBomComponents->contains($l)) {
            $this->doAddBomComponent($l);

            if ($this->bomComponentsScheduledForDeletion and $this->bomComponentsScheduledForDeletion->contains($l)) {
                $this->bomComponentsScheduledForDeletion->remove($this->bomComponentsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildBomComponent $bomComponent The ChildBomComponent object to add.
     */
    protected function doAddBomComponent(ChildBomComponent $bomComponent)
    {
        $this->collBomComponents[]= $bomComponent;
        $bomComponent->setItemMasterItem($this);
    }

    /**
     * @param  ChildBomComponent $bomComponent The ChildBomComponent object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeBomComponent(ChildBomComponent $bomComponent)
    {
        if ($this->getBomComponents()->contains($bomComponent)) {
            $pos = $this->collBomComponents->search($bomComponent);
            $this->collBomComponents->remove($pos);
            if (null === $this->bomComponentsScheduledForDeletion) {
                $this->bomComponentsScheduledForDeletion = clone $this->collBomComponents;
                $this->bomComponentsScheduledForDeletion->clear();
            }
            $this->bomComponentsScheduledForDeletion[]= clone $bomComponent;
            $bomComponent->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related BomComponents from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBomComponent[] List of ChildBomComponent objects
     */
    public function getBomComponentsJoinBomItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBomComponentQuery::create(null, $criteria);
        $query->joinWith('BomItem', $joinBehavior);

        return $this->getBomComponents($query, $con);
    }

    /**
     * Gets a single ChildBomItem object, which is related to this object by a one-to-one relationship.
     *
     * @param  ConnectionInterface $con optional connection object
     * @return ChildBomItem
     * @throws PropelException
     */
    public function getBomItem(ConnectionInterface $con = null)
    {

        if ($this->singleBomItem === null && !$this->isNew()) {
            $this->singleBomItem = ChildBomItemQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleBomItem;
    }

    /**
     * Sets a single ChildBomItem object as related to this object by a one-to-one relationship.
     *
     * @param  ChildBomItem $v ChildBomItem
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setBomItem(ChildBomItem $v = null)
    {
        $this->singleBomItem = $v;

        // Make sure that that the passed-in ChildBomItem isn't already associated with this object
        if ($v !== null && $v->getItemMasterItem(null, false) === null) {
            $v->setItemMasterItem($this);
        }

        return $this;
    }

    /**
     * Clears out the collBookingDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addBookingDetails()
     */
    public function clearBookingDetails()
    {
        $this->collBookingDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collBookingDetails collection loaded partially.
     */
    public function resetPartialBookingDetails($v = true)
    {
        $this->collBookingDetailsPartial = $v;
    }

    /**
     * Initializes the collBookingDetails collection.
     *
     * By default this just sets the collBookingDetails collection to an empty array (like clearcollBookingDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBookingDetails($overrideExisting = true)
    {
        if (null !== $this->collBookingDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = BookingDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collBookingDetails = new $collectionClassName;
        $this->collBookingDetails->setModel('\BookingDetail');
    }

    /**
     * Gets an array of ChildBookingDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildBookingDetail[] List of ChildBookingDetail objects
     * @throws PropelException
     */
    public function getBookingDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingDetailsPartial && !$this->isNew();
        if (null === $this->collBookingDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBookingDetails) {
                // return empty collection
                $this->initBookingDetails();
            } else {
                $collBookingDetails = ChildBookingDetailQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collBookingDetailsPartial && count($collBookingDetails)) {
                        $this->initBookingDetails(false);

                        foreach ($collBookingDetails as $obj) {
                            if (false == $this->collBookingDetails->contains($obj)) {
                                $this->collBookingDetails->append($obj);
                            }
                        }

                        $this->collBookingDetailsPartial = true;
                    }

                    return $collBookingDetails;
                }

                if ($partial && $this->collBookingDetails) {
                    foreach ($this->collBookingDetails as $obj) {
                        if ($obj->isNew()) {
                            $collBookingDetails[] = $obj;
                        }
                    }
                }

                $this->collBookingDetails = $collBookingDetails;
                $this->collBookingDetailsPartial = false;
            }
        }

        return $this->collBookingDetails;
    }

    /**
     * Sets a collection of ChildBookingDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $bookingDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setBookingDetails(Collection $bookingDetails, ConnectionInterface $con = null)
    {
        /** @var ChildBookingDetail[] $bookingDetailsToDelete */
        $bookingDetailsToDelete = $this->getBookingDetails(new Criteria(), $con)->diff($bookingDetails);


        $this->bookingDetailsScheduledForDeletion = $bookingDetailsToDelete;

        foreach ($bookingDetailsToDelete as $bookingDetailRemoved) {
            $bookingDetailRemoved->setItemMasterItem(null);
        }

        $this->collBookingDetails = null;
        foreach ($bookingDetails as $bookingDetail) {
            $this->addBookingDetail($bookingDetail);
        }

        $this->collBookingDetails = $bookingDetails;
        $this->collBookingDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BookingDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BookingDetail objects.
     * @throws PropelException
     */
    public function countBookingDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingDetailsPartial && !$this->isNew();
        if (null === $this->collBookingDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBookingDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getBookingDetails());
            }

            $query = ChildBookingDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collBookingDetails);
    }

    /**
     * Method called to associate a ChildBookingDetail object to this object
     * through the ChildBookingDetail foreign key attribute.
     *
     * @param  ChildBookingDetail $l ChildBookingDetail
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addBookingDetail(ChildBookingDetail $l)
    {
        if ($this->collBookingDetails === null) {
            $this->initBookingDetails();
            $this->collBookingDetailsPartial = true;
        }

        if (!$this->collBookingDetails->contains($l)) {
            $this->doAddBookingDetail($l);

            if ($this->bookingDetailsScheduledForDeletion and $this->bookingDetailsScheduledForDeletion->contains($l)) {
                $this->bookingDetailsScheduledForDeletion->remove($this->bookingDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildBookingDetail $bookingDetail The ChildBookingDetail object to add.
     */
    protected function doAddBookingDetail(ChildBookingDetail $bookingDetail)
    {
        $this->collBookingDetails[]= $bookingDetail;
        $bookingDetail->setItemMasterItem($this);
    }

    /**
     * @param  ChildBookingDetail $bookingDetail The ChildBookingDetail object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeBookingDetail(ChildBookingDetail $bookingDetail)
    {
        if ($this->getBookingDetails()->contains($bookingDetail)) {
            $pos = $this->collBookingDetails->search($bookingDetail);
            $this->collBookingDetails->remove($pos);
            if (null === $this->bookingDetailsScheduledForDeletion) {
                $this->bookingDetailsScheduledForDeletion = clone $this->collBookingDetails;
                $this->bookingDetailsScheduledForDeletion->clear();
            }
            $this->bookingDetailsScheduledForDeletion[]= $bookingDetail;
            $bookingDetail->setItemMasterItem(null);
        }

        return $this;
    }

    /**
     * Clears out the collSalesHistoryDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSalesHistoryDetails()
     */
    public function clearSalesHistoryDetails()
    {
        $this->collSalesHistoryDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSalesHistoryDetails collection loaded partially.
     */
    public function resetPartialSalesHistoryDetails($v = true)
    {
        $this->collSalesHistoryDetailsPartial = $v;
    }

    /**
     * Initializes the collSalesHistoryDetails collection.
     *
     * By default this just sets the collSalesHistoryDetails collection to an empty array (like clearcollSalesHistoryDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesHistoryDetails($overrideExisting = true)
    {
        if (null !== $this->collSalesHistoryDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = SalesHistoryDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collSalesHistoryDetails = new $collectionClassName;
        $this->collSalesHistoryDetails->setModel('\SalesHistoryDetail');
    }

    /**
     * Gets an array of ChildSalesHistoryDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSalesHistoryDetail[] List of ChildSalesHistoryDetail objects
     * @throws PropelException
     */
    public function getSalesHistoryDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesHistoryDetailsPartial && !$this->isNew();
        if (null === $this->collSalesHistoryDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSalesHistoryDetails) {
                // return empty collection
                $this->initSalesHistoryDetails();
            } else {
                $collSalesHistoryDetails = ChildSalesHistoryDetailQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSalesHistoryDetailsPartial && count($collSalesHistoryDetails)) {
                        $this->initSalesHistoryDetails(false);

                        foreach ($collSalesHistoryDetails as $obj) {
                            if (false == $this->collSalesHistoryDetails->contains($obj)) {
                                $this->collSalesHistoryDetails->append($obj);
                            }
                        }

                        $this->collSalesHistoryDetailsPartial = true;
                    }

                    return $collSalesHistoryDetails;
                }

                if ($partial && $this->collSalesHistoryDetails) {
                    foreach ($this->collSalesHistoryDetails as $obj) {
                        if ($obj->isNew()) {
                            $collSalesHistoryDetails[] = $obj;
                        }
                    }
                }

                $this->collSalesHistoryDetails = $collSalesHistoryDetails;
                $this->collSalesHistoryDetailsPartial = false;
            }
        }

        return $this->collSalesHistoryDetails;
    }

    /**
     * Sets a collection of ChildSalesHistoryDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $salesHistoryDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setSalesHistoryDetails(Collection $salesHistoryDetails, ConnectionInterface $con = null)
    {
        /** @var ChildSalesHistoryDetail[] $salesHistoryDetailsToDelete */
        $salesHistoryDetailsToDelete = $this->getSalesHistoryDetails(new Criteria(), $con)->diff($salesHistoryDetails);


        $this->salesHistoryDetailsScheduledForDeletion = $salesHistoryDetailsToDelete;

        foreach ($salesHistoryDetailsToDelete as $salesHistoryDetailRemoved) {
            $salesHistoryDetailRemoved->setItemMasterItem(null);
        }

        $this->collSalesHistoryDetails = null;
        foreach ($salesHistoryDetails as $salesHistoryDetail) {
            $this->addSalesHistoryDetail($salesHistoryDetail);
        }

        $this->collSalesHistoryDetails = $salesHistoryDetails;
        $this->collSalesHistoryDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SalesHistoryDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SalesHistoryDetail objects.
     * @throws PropelException
     */
    public function countSalesHistoryDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesHistoryDetailsPartial && !$this->isNew();
        if (null === $this->collSalesHistoryDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesHistoryDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesHistoryDetails());
            }

            $query = ChildSalesHistoryDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collSalesHistoryDetails);
    }

    /**
     * Method called to associate a ChildSalesHistoryDetail object to this object
     * through the ChildSalesHistoryDetail foreign key attribute.
     *
     * @param  ChildSalesHistoryDetail $l ChildSalesHistoryDetail
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addSalesHistoryDetail(ChildSalesHistoryDetail $l)
    {
        if ($this->collSalesHistoryDetails === null) {
            $this->initSalesHistoryDetails();
            $this->collSalesHistoryDetailsPartial = true;
        }

        if (!$this->collSalesHistoryDetails->contains($l)) {
            $this->doAddSalesHistoryDetail($l);

            if ($this->salesHistoryDetailsScheduledForDeletion and $this->salesHistoryDetailsScheduledForDeletion->contains($l)) {
                $this->salesHistoryDetailsScheduledForDeletion->remove($this->salesHistoryDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSalesHistoryDetail $salesHistoryDetail The ChildSalesHistoryDetail object to add.
     */
    protected function doAddSalesHistoryDetail(ChildSalesHistoryDetail $salesHistoryDetail)
    {
        $this->collSalesHistoryDetails[]= $salesHistoryDetail;
        $salesHistoryDetail->setItemMasterItem($this);
    }

    /**
     * @param  ChildSalesHistoryDetail $salesHistoryDetail The ChildSalesHistoryDetail object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeSalesHistoryDetail(ChildSalesHistoryDetail $salesHistoryDetail)
    {
        if ($this->getSalesHistoryDetails()->contains($salesHistoryDetail)) {
            $pos = $this->collSalesHistoryDetails->search($salesHistoryDetail);
            $this->collSalesHistoryDetails->remove($pos);
            if (null === $this->salesHistoryDetailsScheduledForDeletion) {
                $this->salesHistoryDetailsScheduledForDeletion = clone $this->collSalesHistoryDetails;
                $this->salesHistoryDetailsScheduledForDeletion->clear();
            }
            $this->salesHistoryDetailsScheduledForDeletion[]= clone $salesHistoryDetail;
            $salesHistoryDetail->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SalesHistoryDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesHistoryDetail[] List of ChildSalesHistoryDetail objects
     */
    public function getSalesHistoryDetailsJoinSalesHistory(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesHistoryDetailQuery::create(null, $criteria);
        $query->joinWith('SalesHistory', $joinBehavior);

        return $this->getSalesHistoryDetails($query, $con);
    }

    /**
     * Clears out the collSalesOrderDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSalesOrderDetails()
     */
    public function clearSalesOrderDetails()
    {
        $this->collSalesOrderDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSalesOrderDetails collection loaded partially.
     */
    public function resetPartialSalesOrderDetails($v = true)
    {
        $this->collSalesOrderDetailsPartial = $v;
    }

    /**
     * Initializes the collSalesOrderDetails collection.
     *
     * By default this just sets the collSalesOrderDetails collection to an empty array (like clearcollSalesOrderDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesOrderDetails($overrideExisting = true)
    {
        if (null !== $this->collSalesOrderDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = SalesOrderDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collSalesOrderDetails = new $collectionClassName;
        $this->collSalesOrderDetails->setModel('\SalesOrderDetail');
    }

    /**
     * Gets an array of ChildSalesOrderDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSalesOrderDetail[] List of ChildSalesOrderDetail objects
     * @throws PropelException
     */
    public function getSalesOrderDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrderDetailsPartial && !$this->isNew();
        if (null === $this->collSalesOrderDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSalesOrderDetails) {
                // return empty collection
                $this->initSalesOrderDetails();
            } else {
                $collSalesOrderDetails = ChildSalesOrderDetailQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSalesOrderDetailsPartial && count($collSalesOrderDetails)) {
                        $this->initSalesOrderDetails(false);

                        foreach ($collSalesOrderDetails as $obj) {
                            if (false == $this->collSalesOrderDetails->contains($obj)) {
                                $this->collSalesOrderDetails->append($obj);
                            }
                        }

                        $this->collSalesOrderDetailsPartial = true;
                    }

                    return $collSalesOrderDetails;
                }

                if ($partial && $this->collSalesOrderDetails) {
                    foreach ($this->collSalesOrderDetails as $obj) {
                        if ($obj->isNew()) {
                            $collSalesOrderDetails[] = $obj;
                        }
                    }
                }

                $this->collSalesOrderDetails = $collSalesOrderDetails;
                $this->collSalesOrderDetailsPartial = false;
            }
        }

        return $this->collSalesOrderDetails;
    }

    /**
     * Sets a collection of ChildSalesOrderDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $salesOrderDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setSalesOrderDetails(Collection $salesOrderDetails, ConnectionInterface $con = null)
    {
        /** @var ChildSalesOrderDetail[] $salesOrderDetailsToDelete */
        $salesOrderDetailsToDelete = $this->getSalesOrderDetails(new Criteria(), $con)->diff($salesOrderDetails);


        $this->salesOrderDetailsScheduledForDeletion = $salesOrderDetailsToDelete;

        foreach ($salesOrderDetailsToDelete as $salesOrderDetailRemoved) {
            $salesOrderDetailRemoved->setItemMasterItem(null);
        }

        $this->collSalesOrderDetails = null;
        foreach ($salesOrderDetails as $salesOrderDetail) {
            $this->addSalesOrderDetail($salesOrderDetail);
        }

        $this->collSalesOrderDetails = $salesOrderDetails;
        $this->collSalesOrderDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SalesOrderDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SalesOrderDetail objects.
     * @throws PropelException
     */
    public function countSalesOrderDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrderDetailsPartial && !$this->isNew();
        if (null === $this->collSalesOrderDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesOrderDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesOrderDetails());
            }

            $query = ChildSalesOrderDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collSalesOrderDetails);
    }

    /**
     * Method called to associate a ChildSalesOrderDetail object to this object
     * through the ChildSalesOrderDetail foreign key attribute.
     *
     * @param  ChildSalesOrderDetail $l ChildSalesOrderDetail
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addSalesOrderDetail(ChildSalesOrderDetail $l)
    {
        if ($this->collSalesOrderDetails === null) {
            $this->initSalesOrderDetails();
            $this->collSalesOrderDetailsPartial = true;
        }

        if (!$this->collSalesOrderDetails->contains($l)) {
            $this->doAddSalesOrderDetail($l);

            if ($this->salesOrderDetailsScheduledForDeletion and $this->salesOrderDetailsScheduledForDeletion->contains($l)) {
                $this->salesOrderDetailsScheduledForDeletion->remove($this->salesOrderDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSalesOrderDetail $salesOrderDetail The ChildSalesOrderDetail object to add.
     */
    protected function doAddSalesOrderDetail(ChildSalesOrderDetail $salesOrderDetail)
    {
        $this->collSalesOrderDetails[]= $salesOrderDetail;
        $salesOrderDetail->setItemMasterItem($this);
    }

    /**
     * @param  ChildSalesOrderDetail $salesOrderDetail The ChildSalesOrderDetail object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeSalesOrderDetail(ChildSalesOrderDetail $salesOrderDetail)
    {
        if ($this->getSalesOrderDetails()->contains($salesOrderDetail)) {
            $pos = $this->collSalesOrderDetails->search($salesOrderDetail);
            $this->collSalesOrderDetails->remove($pos);
            if (null === $this->salesOrderDetailsScheduledForDeletion) {
                $this->salesOrderDetailsScheduledForDeletion = clone $this->collSalesOrderDetails;
                $this->salesOrderDetailsScheduledForDeletion->clear();
            }
            $this->salesOrderDetailsScheduledForDeletion[]= clone $salesOrderDetail;
            $salesOrderDetail->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SalesOrderDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesOrderDetail[] List of ChildSalesOrderDetail objects
     */
    public function getSalesOrderDetailsJoinSalesOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesOrderDetailQuery::create(null, $criteria);
        $query->joinWith('SalesOrder', $joinBehavior);

        return $this->getSalesOrderDetails($query, $con);
    }

    /**
     * Clears out the collSalesOrderLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSalesOrderLotserials()
     */
    public function clearSalesOrderLotserials()
    {
        $this->collSalesOrderLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSalesOrderLotserials collection loaded partially.
     */
    public function resetPartialSalesOrderLotserials($v = true)
    {
        $this->collSalesOrderLotserialsPartial = $v;
    }

    /**
     * Initializes the collSalesOrderLotserials collection.
     *
     * By default this just sets the collSalesOrderLotserials collection to an empty array (like clearcollSalesOrderLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesOrderLotserials($overrideExisting = true)
    {
        if (null !== $this->collSalesOrderLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = SalesOrderLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collSalesOrderLotserials = new $collectionClassName;
        $this->collSalesOrderLotserials->setModel('\SalesOrderLotserial');
    }

    /**
     * Gets an array of ChildSalesOrderLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSalesOrderLotserial[] List of ChildSalesOrderLotserial objects
     * @throws PropelException
     */
    public function getSalesOrderLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrderLotserialsPartial && !$this->isNew();
        if (null === $this->collSalesOrderLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSalesOrderLotserials) {
                // return empty collection
                $this->initSalesOrderLotserials();
            } else {
                $collSalesOrderLotserials = ChildSalesOrderLotserialQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSalesOrderLotserialsPartial && count($collSalesOrderLotserials)) {
                        $this->initSalesOrderLotserials(false);

                        foreach ($collSalesOrderLotserials as $obj) {
                            if (false == $this->collSalesOrderLotserials->contains($obj)) {
                                $this->collSalesOrderLotserials->append($obj);
                            }
                        }

                        $this->collSalesOrderLotserialsPartial = true;
                    }

                    return $collSalesOrderLotserials;
                }

                if ($partial && $this->collSalesOrderLotserials) {
                    foreach ($this->collSalesOrderLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collSalesOrderLotserials[] = $obj;
                        }
                    }
                }

                $this->collSalesOrderLotserials = $collSalesOrderLotserials;
                $this->collSalesOrderLotserialsPartial = false;
            }
        }

        return $this->collSalesOrderLotserials;
    }

    /**
     * Sets a collection of ChildSalesOrderLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $salesOrderLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setSalesOrderLotserials(Collection $salesOrderLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildSalesOrderLotserial[] $salesOrderLotserialsToDelete */
        $salesOrderLotserialsToDelete = $this->getSalesOrderLotserials(new Criteria(), $con)->diff($salesOrderLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->salesOrderLotserialsScheduledForDeletion = clone $salesOrderLotserialsToDelete;

        foreach ($salesOrderLotserialsToDelete as $salesOrderLotserialRemoved) {
            $salesOrderLotserialRemoved->setItemMasterItem(null);
        }

        $this->collSalesOrderLotserials = null;
        foreach ($salesOrderLotserials as $salesOrderLotserial) {
            $this->addSalesOrderLotserial($salesOrderLotserial);
        }

        $this->collSalesOrderLotserials = $salesOrderLotserials;
        $this->collSalesOrderLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SalesOrderLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SalesOrderLotserial objects.
     * @throws PropelException
     */
    public function countSalesOrderLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrderLotserialsPartial && !$this->isNew();
        if (null === $this->collSalesOrderLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesOrderLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesOrderLotserials());
            }

            $query = ChildSalesOrderLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collSalesOrderLotserials);
    }

    /**
     * Method called to associate a ChildSalesOrderLotserial object to this object
     * through the ChildSalesOrderLotserial foreign key attribute.
     *
     * @param  ChildSalesOrderLotserial $l ChildSalesOrderLotserial
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addSalesOrderLotserial(ChildSalesOrderLotserial $l)
    {
        if ($this->collSalesOrderLotserials === null) {
            $this->initSalesOrderLotserials();
            $this->collSalesOrderLotserialsPartial = true;
        }

        if (!$this->collSalesOrderLotserials->contains($l)) {
            $this->doAddSalesOrderLotserial($l);

            if ($this->salesOrderLotserialsScheduledForDeletion and $this->salesOrderLotserialsScheduledForDeletion->contains($l)) {
                $this->salesOrderLotserialsScheduledForDeletion->remove($this->salesOrderLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSalesOrderLotserial $salesOrderLotserial The ChildSalesOrderLotserial object to add.
     */
    protected function doAddSalesOrderLotserial(ChildSalesOrderLotserial $salesOrderLotserial)
    {
        $this->collSalesOrderLotserials[]= $salesOrderLotserial;
        $salesOrderLotserial->setItemMasterItem($this);
    }

    /**
     * @param  ChildSalesOrderLotserial $salesOrderLotserial The ChildSalesOrderLotserial object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeSalesOrderLotserial(ChildSalesOrderLotserial $salesOrderLotserial)
    {
        if ($this->getSalesOrderLotserials()->contains($salesOrderLotserial)) {
            $pos = $this->collSalesOrderLotserials->search($salesOrderLotserial);
            $this->collSalesOrderLotserials->remove($pos);
            if (null === $this->salesOrderLotserialsScheduledForDeletion) {
                $this->salesOrderLotserialsScheduledForDeletion = clone $this->collSalesOrderLotserials;
                $this->salesOrderLotserialsScheduledForDeletion->clear();
            }
            $this->salesOrderLotserialsScheduledForDeletion[]= clone $salesOrderLotserial;
            $salesOrderLotserial->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SalesOrderLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesOrderLotserial[] List of ChildSalesOrderLotserial objects
     */
    public function getSalesOrderLotserialsJoinSalesOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesOrderLotserialQuery::create(null, $criteria);
        $query->joinWith('SalesOrder', $joinBehavior);

        return $this->getSalesOrderLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SalesOrderLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesOrderLotserial[] List of ChildSalesOrderLotserial objects
     */
    public function getSalesOrderLotserialsJoinSalesOrderDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesOrderLotserialQuery::create(null, $criteria);
        $query->joinWith('SalesOrderDetail', $joinBehavior);

        return $this->getSalesOrderLotserials($query, $con);
    }

    /**
     * Clears out the collSalesHistoryLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSalesHistoryLotserials()
     */
    public function clearSalesHistoryLotserials()
    {
        $this->collSalesHistoryLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSalesHistoryLotserials collection loaded partially.
     */
    public function resetPartialSalesHistoryLotserials($v = true)
    {
        $this->collSalesHistoryLotserialsPartial = $v;
    }

    /**
     * Initializes the collSalesHistoryLotserials collection.
     *
     * By default this just sets the collSalesHistoryLotserials collection to an empty array (like clearcollSalesHistoryLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesHistoryLotserials($overrideExisting = true)
    {
        if (null !== $this->collSalesHistoryLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = SalesHistoryLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collSalesHistoryLotserials = new $collectionClassName;
        $this->collSalesHistoryLotserials->setModel('\SalesHistoryLotserial');
    }

    /**
     * Gets an array of ChildSalesHistoryLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSalesHistoryLotserial[] List of ChildSalesHistoryLotserial objects
     * @throws PropelException
     */
    public function getSalesHistoryLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesHistoryLotserialsPartial && !$this->isNew();
        if (null === $this->collSalesHistoryLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSalesHistoryLotserials) {
                // return empty collection
                $this->initSalesHistoryLotserials();
            } else {
                $collSalesHistoryLotserials = ChildSalesHistoryLotserialQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSalesHistoryLotserialsPartial && count($collSalesHistoryLotserials)) {
                        $this->initSalesHistoryLotserials(false);

                        foreach ($collSalesHistoryLotserials as $obj) {
                            if (false == $this->collSalesHistoryLotserials->contains($obj)) {
                                $this->collSalesHistoryLotserials->append($obj);
                            }
                        }

                        $this->collSalesHistoryLotserialsPartial = true;
                    }

                    return $collSalesHistoryLotserials;
                }

                if ($partial && $this->collSalesHistoryLotserials) {
                    foreach ($this->collSalesHistoryLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collSalesHistoryLotserials[] = $obj;
                        }
                    }
                }

                $this->collSalesHistoryLotserials = $collSalesHistoryLotserials;
                $this->collSalesHistoryLotserialsPartial = false;
            }
        }

        return $this->collSalesHistoryLotserials;
    }

    /**
     * Sets a collection of ChildSalesHistoryLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $salesHistoryLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setSalesHistoryLotserials(Collection $salesHistoryLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildSalesHistoryLotserial[] $salesHistoryLotserialsToDelete */
        $salesHistoryLotserialsToDelete = $this->getSalesHistoryLotserials(new Criteria(), $con)->diff($salesHistoryLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->salesHistoryLotserialsScheduledForDeletion = clone $salesHistoryLotserialsToDelete;

        foreach ($salesHistoryLotserialsToDelete as $salesHistoryLotserialRemoved) {
            $salesHistoryLotserialRemoved->setItemMasterItem(null);
        }

        $this->collSalesHistoryLotserials = null;
        foreach ($salesHistoryLotserials as $salesHistoryLotserial) {
            $this->addSalesHistoryLotserial($salesHistoryLotserial);
        }

        $this->collSalesHistoryLotserials = $salesHistoryLotserials;
        $this->collSalesHistoryLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SalesHistoryLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SalesHistoryLotserial objects.
     * @throws PropelException
     */
    public function countSalesHistoryLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesHistoryLotserialsPartial && !$this->isNew();
        if (null === $this->collSalesHistoryLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesHistoryLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesHistoryLotserials());
            }

            $query = ChildSalesHistoryLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collSalesHistoryLotserials);
    }

    /**
     * Method called to associate a ChildSalesHistoryLotserial object to this object
     * through the ChildSalesHistoryLotserial foreign key attribute.
     *
     * @param  ChildSalesHistoryLotserial $l ChildSalesHistoryLotserial
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addSalesHistoryLotserial(ChildSalesHistoryLotserial $l)
    {
        if ($this->collSalesHistoryLotserials === null) {
            $this->initSalesHistoryLotserials();
            $this->collSalesHistoryLotserialsPartial = true;
        }

        if (!$this->collSalesHistoryLotserials->contains($l)) {
            $this->doAddSalesHistoryLotserial($l);

            if ($this->salesHistoryLotserialsScheduledForDeletion and $this->salesHistoryLotserialsScheduledForDeletion->contains($l)) {
                $this->salesHistoryLotserialsScheduledForDeletion->remove($this->salesHistoryLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSalesHistoryLotserial $salesHistoryLotserial The ChildSalesHistoryLotserial object to add.
     */
    protected function doAddSalesHistoryLotserial(ChildSalesHistoryLotserial $salesHistoryLotserial)
    {
        $this->collSalesHistoryLotserials[]= $salesHistoryLotserial;
        $salesHistoryLotserial->setItemMasterItem($this);
    }

    /**
     * @param  ChildSalesHistoryLotserial $salesHistoryLotserial The ChildSalesHistoryLotserial object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeSalesHistoryLotserial(ChildSalesHistoryLotserial $salesHistoryLotserial)
    {
        if ($this->getSalesHistoryLotserials()->contains($salesHistoryLotserial)) {
            $pos = $this->collSalesHistoryLotserials->search($salesHistoryLotserial);
            $this->collSalesHistoryLotserials->remove($pos);
            if (null === $this->salesHistoryLotserialsScheduledForDeletion) {
                $this->salesHistoryLotserialsScheduledForDeletion = clone $this->collSalesHistoryLotserials;
                $this->salesHistoryLotserialsScheduledForDeletion->clear();
            }
            $this->salesHistoryLotserialsScheduledForDeletion[]= clone $salesHistoryLotserial;
            $salesHistoryLotserial->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SalesHistoryLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesHistoryLotserial[] List of ChildSalesHistoryLotserial objects
     */
    public function getSalesHistoryLotserialsJoinSalesHistory(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesHistoryLotserialQuery::create(null, $criteria);
        $query->joinWith('SalesHistory', $joinBehavior);

        return $this->getSalesHistoryLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SalesHistoryLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesHistoryLotserial[] List of ChildSalesHistoryLotserial objects
     */
    public function getSalesHistoryLotserialsJoinSalesHistoryDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesHistoryLotserialQuery::create(null, $criteria);
        $query->joinWith('SalesHistoryDetail', $joinBehavior);

        return $this->getSalesHistoryLotserials($query, $con);
    }

    /**
     * Clears out the collSoAllocatedLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSoAllocatedLotserials()
     */
    public function clearSoAllocatedLotserials()
    {
        $this->collSoAllocatedLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSoAllocatedLotserials collection loaded partially.
     */
    public function resetPartialSoAllocatedLotserials($v = true)
    {
        $this->collSoAllocatedLotserialsPartial = $v;
    }

    /**
     * Initializes the collSoAllocatedLotserials collection.
     *
     * By default this just sets the collSoAllocatedLotserials collection to an empty array (like clearcollSoAllocatedLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSoAllocatedLotserials($overrideExisting = true)
    {
        if (null !== $this->collSoAllocatedLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = SoAllocatedLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collSoAllocatedLotserials = new $collectionClassName;
        $this->collSoAllocatedLotserials->setModel('\SoAllocatedLotserial');
    }

    /**
     * Gets an array of ChildSoAllocatedLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSoAllocatedLotserial[] List of ChildSoAllocatedLotserial objects
     * @throws PropelException
     */
    public function getSoAllocatedLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSoAllocatedLotserialsPartial && !$this->isNew();
        if (null === $this->collSoAllocatedLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSoAllocatedLotserials) {
                // return empty collection
                $this->initSoAllocatedLotserials();
            } else {
                $collSoAllocatedLotserials = ChildSoAllocatedLotserialQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSoAllocatedLotserialsPartial && count($collSoAllocatedLotserials)) {
                        $this->initSoAllocatedLotserials(false);

                        foreach ($collSoAllocatedLotserials as $obj) {
                            if (false == $this->collSoAllocatedLotserials->contains($obj)) {
                                $this->collSoAllocatedLotserials->append($obj);
                            }
                        }

                        $this->collSoAllocatedLotserialsPartial = true;
                    }

                    return $collSoAllocatedLotserials;
                }

                if ($partial && $this->collSoAllocatedLotserials) {
                    foreach ($this->collSoAllocatedLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collSoAllocatedLotserials[] = $obj;
                        }
                    }
                }

                $this->collSoAllocatedLotserials = $collSoAllocatedLotserials;
                $this->collSoAllocatedLotserialsPartial = false;
            }
        }

        return $this->collSoAllocatedLotserials;
    }

    /**
     * Sets a collection of ChildSoAllocatedLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $soAllocatedLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setSoAllocatedLotserials(Collection $soAllocatedLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildSoAllocatedLotserial[] $soAllocatedLotserialsToDelete */
        $soAllocatedLotserialsToDelete = $this->getSoAllocatedLotserials(new Criteria(), $con)->diff($soAllocatedLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->soAllocatedLotserialsScheduledForDeletion = clone $soAllocatedLotserialsToDelete;

        foreach ($soAllocatedLotserialsToDelete as $soAllocatedLotserialRemoved) {
            $soAllocatedLotserialRemoved->setItemMasterItem(null);
        }

        $this->collSoAllocatedLotserials = null;
        foreach ($soAllocatedLotserials as $soAllocatedLotserial) {
            $this->addSoAllocatedLotserial($soAllocatedLotserial);
        }

        $this->collSoAllocatedLotserials = $soAllocatedLotserials;
        $this->collSoAllocatedLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SoAllocatedLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SoAllocatedLotserial objects.
     * @throws PropelException
     */
    public function countSoAllocatedLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSoAllocatedLotserialsPartial && !$this->isNew();
        if (null === $this->collSoAllocatedLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSoAllocatedLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSoAllocatedLotserials());
            }

            $query = ChildSoAllocatedLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collSoAllocatedLotserials);
    }

    /**
     * Method called to associate a ChildSoAllocatedLotserial object to this object
     * through the ChildSoAllocatedLotserial foreign key attribute.
     *
     * @param  ChildSoAllocatedLotserial $l ChildSoAllocatedLotserial
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addSoAllocatedLotserial(ChildSoAllocatedLotserial $l)
    {
        if ($this->collSoAllocatedLotserials === null) {
            $this->initSoAllocatedLotserials();
            $this->collSoAllocatedLotserialsPartial = true;
        }

        if (!$this->collSoAllocatedLotserials->contains($l)) {
            $this->doAddSoAllocatedLotserial($l);

            if ($this->soAllocatedLotserialsScheduledForDeletion and $this->soAllocatedLotserialsScheduledForDeletion->contains($l)) {
                $this->soAllocatedLotserialsScheduledForDeletion->remove($this->soAllocatedLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSoAllocatedLotserial $soAllocatedLotserial The ChildSoAllocatedLotserial object to add.
     */
    protected function doAddSoAllocatedLotserial(ChildSoAllocatedLotserial $soAllocatedLotserial)
    {
        $this->collSoAllocatedLotserials[]= $soAllocatedLotserial;
        $soAllocatedLotserial->setItemMasterItem($this);
    }

    /**
     * @param  ChildSoAllocatedLotserial $soAllocatedLotserial The ChildSoAllocatedLotserial object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeSoAllocatedLotserial(ChildSoAllocatedLotserial $soAllocatedLotserial)
    {
        if ($this->getSoAllocatedLotserials()->contains($soAllocatedLotserial)) {
            $pos = $this->collSoAllocatedLotserials->search($soAllocatedLotserial);
            $this->collSoAllocatedLotserials->remove($pos);
            if (null === $this->soAllocatedLotserialsScheduledForDeletion) {
                $this->soAllocatedLotserialsScheduledForDeletion = clone $this->collSoAllocatedLotserials;
                $this->soAllocatedLotserialsScheduledForDeletion->clear();
            }
            $this->soAllocatedLotserialsScheduledForDeletion[]= clone $soAllocatedLotserial;
            $soAllocatedLotserial->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SoAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoAllocatedLotserial[] List of ChildSoAllocatedLotserial objects
     */
    public function getSoAllocatedLotserialsJoinSalesOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('SalesOrder', $joinBehavior);

        return $this->getSoAllocatedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SoAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoAllocatedLotserial[] List of ChildSoAllocatedLotserial objects
     */
    public function getSoAllocatedLotserialsJoinSalesOrderDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('SalesOrderDetail', $joinBehavior);

        return $this->getSoAllocatedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SoAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoAllocatedLotserial[] List of ChildSoAllocatedLotserial objects
     */
    public function getSoAllocatedLotserialsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getSoAllocatedLotserials($query, $con);
    }

    /**
     * Clears out the collItemPricingDiscounts collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemPricingDiscounts()
     */
    public function clearItemPricingDiscounts()
    {
        $this->collItemPricingDiscounts = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemPricingDiscounts collection loaded partially.
     */
    public function resetPartialItemPricingDiscounts($v = true)
    {
        $this->collItemPricingDiscountsPartial = $v;
    }

    /**
     * Initializes the collItemPricingDiscounts collection.
     *
     * By default this just sets the collItemPricingDiscounts collection to an empty array (like clearcollItemPricingDiscounts());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemPricingDiscounts($overrideExisting = true)
    {
        if (null !== $this->collItemPricingDiscounts && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemPricingDiscountTableMap::getTableMap()->getCollectionClassName();

        $this->collItemPricingDiscounts = new $collectionClassName;
        $this->collItemPricingDiscounts->setModel('\ItemPricingDiscount');
    }

    /**
     * Gets an array of ChildItemPricingDiscount objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemPricingDiscount[] List of ChildItemPricingDiscount objects
     * @throws PropelException
     */
    public function getItemPricingDiscounts(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemPricingDiscountsPartial && !$this->isNew();
        if (null === $this->collItemPricingDiscounts || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemPricingDiscounts) {
                // return empty collection
                $this->initItemPricingDiscounts();
            } else {
                $collItemPricingDiscounts = ChildItemPricingDiscountQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemPricingDiscountsPartial && count($collItemPricingDiscounts)) {
                        $this->initItemPricingDiscounts(false);

                        foreach ($collItemPricingDiscounts as $obj) {
                            if (false == $this->collItemPricingDiscounts->contains($obj)) {
                                $this->collItemPricingDiscounts->append($obj);
                            }
                        }

                        $this->collItemPricingDiscountsPartial = true;
                    }

                    return $collItemPricingDiscounts;
                }

                if ($partial && $this->collItemPricingDiscounts) {
                    foreach ($this->collItemPricingDiscounts as $obj) {
                        if ($obj->isNew()) {
                            $collItemPricingDiscounts[] = $obj;
                        }
                    }
                }

                $this->collItemPricingDiscounts = $collItemPricingDiscounts;
                $this->collItemPricingDiscountsPartial = false;
            }
        }

        return $this->collItemPricingDiscounts;
    }

    /**
     * Sets a collection of ChildItemPricingDiscount objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemPricingDiscounts A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemPricingDiscounts(Collection $itemPricingDiscounts, ConnectionInterface $con = null)
    {
        /** @var ChildItemPricingDiscount[] $itemPricingDiscountsToDelete */
        $itemPricingDiscountsToDelete = $this->getItemPricingDiscounts(new Criteria(), $con)->diff($itemPricingDiscounts);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->itemPricingDiscountsScheduledForDeletion = clone $itemPricingDiscountsToDelete;

        foreach ($itemPricingDiscountsToDelete as $itemPricingDiscountRemoved) {
            $itemPricingDiscountRemoved->setItemMasterItem(null);
        }

        $this->collItemPricingDiscounts = null;
        foreach ($itemPricingDiscounts as $itemPricingDiscount) {
            $this->addItemPricingDiscount($itemPricingDiscount);
        }

        $this->collItemPricingDiscounts = $itemPricingDiscounts;
        $this->collItemPricingDiscountsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemPricingDiscount objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemPricingDiscount objects.
     * @throws PropelException
     */
    public function countItemPricingDiscounts(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemPricingDiscountsPartial && !$this->isNew();
        if (null === $this->collItemPricingDiscounts || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemPricingDiscounts) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemPricingDiscounts());
            }

            $query = ChildItemPricingDiscountQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collItemPricingDiscounts);
    }

    /**
     * Method called to associate a ChildItemPricingDiscount object to this object
     * through the ChildItemPricingDiscount foreign key attribute.
     *
     * @param  ChildItemPricingDiscount $l ChildItemPricingDiscount
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemPricingDiscount(ChildItemPricingDiscount $l)
    {
        if ($this->collItemPricingDiscounts === null) {
            $this->initItemPricingDiscounts();
            $this->collItemPricingDiscountsPartial = true;
        }

        if (!$this->collItemPricingDiscounts->contains($l)) {
            $this->doAddItemPricingDiscount($l);

            if ($this->itemPricingDiscountsScheduledForDeletion and $this->itemPricingDiscountsScheduledForDeletion->contains($l)) {
                $this->itemPricingDiscountsScheduledForDeletion->remove($this->itemPricingDiscountsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemPricingDiscount $itemPricingDiscount The ChildItemPricingDiscount object to add.
     */
    protected function doAddItemPricingDiscount(ChildItemPricingDiscount $itemPricingDiscount)
    {
        $this->collItemPricingDiscounts[]= $itemPricingDiscount;
        $itemPricingDiscount->setItemMasterItem($this);
    }

    /**
     * @param  ChildItemPricingDiscount $itemPricingDiscount The ChildItemPricingDiscount object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemPricingDiscount(ChildItemPricingDiscount $itemPricingDiscount)
    {
        if ($this->getItemPricingDiscounts()->contains($itemPricingDiscount)) {
            $pos = $this->collItemPricingDiscounts->search($itemPricingDiscount);
            $this->collItemPricingDiscounts->remove($pos);
            if (null === $this->itemPricingDiscountsScheduledForDeletion) {
                $this->itemPricingDiscountsScheduledForDeletion = clone $this->collItemPricingDiscounts;
                $this->itemPricingDiscountsScheduledForDeletion->clear();
            }
            $this->itemPricingDiscountsScheduledForDeletion[]= clone $itemPricingDiscount;
            $itemPricingDiscount->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related ItemPricingDiscounts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemPricingDiscount[] List of ChildItemPricingDiscount objects
     */
    public function getItemPricingDiscountsJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemPricingDiscountQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getItemPricingDiscounts($query, $con);
    }

    /**
     * Clears out the collSoPickedLotserials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSoPickedLotserials()
     */
    public function clearSoPickedLotserials()
    {
        $this->collSoPickedLotserials = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSoPickedLotserials collection loaded partially.
     */
    public function resetPartialSoPickedLotserials($v = true)
    {
        $this->collSoPickedLotserialsPartial = $v;
    }

    /**
     * Initializes the collSoPickedLotserials collection.
     *
     * By default this just sets the collSoPickedLotserials collection to an empty array (like clearcollSoPickedLotserials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSoPickedLotserials($overrideExisting = true)
    {
        if (null !== $this->collSoPickedLotserials && !$overrideExisting) {
            return;
        }

        $collectionClassName = SoPickedLotserialTableMap::getTableMap()->getCollectionClassName();

        $this->collSoPickedLotserials = new $collectionClassName;
        $this->collSoPickedLotserials->setModel('\SoPickedLotserial');
    }

    /**
     * Gets an array of ChildSoPickedLotserial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSoPickedLotserial[] List of ChildSoPickedLotserial objects
     * @throws PropelException
     */
    public function getSoPickedLotserials(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSoPickedLotserialsPartial && !$this->isNew();
        if (null === $this->collSoPickedLotserials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSoPickedLotserials) {
                // return empty collection
                $this->initSoPickedLotserials();
            } else {
                $collSoPickedLotserials = ChildSoPickedLotserialQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSoPickedLotserialsPartial && count($collSoPickedLotserials)) {
                        $this->initSoPickedLotserials(false);

                        foreach ($collSoPickedLotserials as $obj) {
                            if (false == $this->collSoPickedLotserials->contains($obj)) {
                                $this->collSoPickedLotserials->append($obj);
                            }
                        }

                        $this->collSoPickedLotserialsPartial = true;
                    }

                    return $collSoPickedLotserials;
                }

                if ($partial && $this->collSoPickedLotserials) {
                    foreach ($this->collSoPickedLotserials as $obj) {
                        if ($obj->isNew()) {
                            $collSoPickedLotserials[] = $obj;
                        }
                    }
                }

                $this->collSoPickedLotserials = $collSoPickedLotserials;
                $this->collSoPickedLotserialsPartial = false;
            }
        }

        return $this->collSoPickedLotserials;
    }

    /**
     * Sets a collection of ChildSoPickedLotserial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $soPickedLotserials A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setSoPickedLotserials(Collection $soPickedLotserials, ConnectionInterface $con = null)
    {
        /** @var ChildSoPickedLotserial[] $soPickedLotserialsToDelete */
        $soPickedLotserialsToDelete = $this->getSoPickedLotserials(new Criteria(), $con)->diff($soPickedLotserials);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->soPickedLotserialsScheduledForDeletion = clone $soPickedLotserialsToDelete;

        foreach ($soPickedLotserialsToDelete as $soPickedLotserialRemoved) {
            $soPickedLotserialRemoved->setItemMasterItem(null);
        }

        $this->collSoPickedLotserials = null;
        foreach ($soPickedLotserials as $soPickedLotserial) {
            $this->addSoPickedLotserial($soPickedLotserial);
        }

        $this->collSoPickedLotserials = $soPickedLotserials;
        $this->collSoPickedLotserialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SoPickedLotserial objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SoPickedLotserial objects.
     * @throws PropelException
     */
    public function countSoPickedLotserials(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSoPickedLotserialsPartial && !$this->isNew();
        if (null === $this->collSoPickedLotserials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSoPickedLotserials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSoPickedLotserials());
            }

            $query = ChildSoPickedLotserialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collSoPickedLotserials);
    }

    /**
     * Method called to associate a ChildSoPickedLotserial object to this object
     * through the ChildSoPickedLotserial foreign key attribute.
     *
     * @param  ChildSoPickedLotserial $l ChildSoPickedLotserial
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addSoPickedLotserial(ChildSoPickedLotserial $l)
    {
        if ($this->collSoPickedLotserials === null) {
            $this->initSoPickedLotserials();
            $this->collSoPickedLotserialsPartial = true;
        }

        if (!$this->collSoPickedLotserials->contains($l)) {
            $this->doAddSoPickedLotserial($l);

            if ($this->soPickedLotserialsScheduledForDeletion and $this->soPickedLotserialsScheduledForDeletion->contains($l)) {
                $this->soPickedLotserialsScheduledForDeletion->remove($this->soPickedLotserialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSoPickedLotserial $soPickedLotserial The ChildSoPickedLotserial object to add.
     */
    protected function doAddSoPickedLotserial(ChildSoPickedLotserial $soPickedLotserial)
    {
        $this->collSoPickedLotserials[]= $soPickedLotserial;
        $soPickedLotserial->setItemMasterItem($this);
    }

    /**
     * @param  ChildSoPickedLotserial $soPickedLotserial The ChildSoPickedLotserial object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeSoPickedLotserial(ChildSoPickedLotserial $soPickedLotserial)
    {
        if ($this->getSoPickedLotserials()->contains($soPickedLotserial)) {
            $pos = $this->collSoPickedLotserials->search($soPickedLotserial);
            $this->collSoPickedLotserials->remove($pos);
            if (null === $this->soPickedLotserialsScheduledForDeletion) {
                $this->soPickedLotserialsScheduledForDeletion = clone $this->collSoPickedLotserials;
                $this->soPickedLotserialsScheduledForDeletion->clear();
            }
            $this->soPickedLotserialsScheduledForDeletion[]= clone $soPickedLotserial;
            $soPickedLotserial->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SoPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoPickedLotserial[] List of ChildSoPickedLotserial objects
     */
    public function getSoPickedLotserialsJoinSalesOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('SalesOrder', $joinBehavior);

        return $this->getSoPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SoPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoPickedLotserial[] List of ChildSoPickedLotserial objects
     */
    public function getSoPickedLotserialsJoinSalesOrderDetail(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('SalesOrderDetail', $joinBehavior);

        return $this->getSoPickedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SoPickedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoPickedLotserial[] List of ChildSoPickedLotserial objects
     */
    public function getSoPickedLotserialsJoinInvLotMaster(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoPickedLotserialQuery::create(null, $criteria);
        $query->joinWith('InvLotMaster', $joinBehavior);

        return $this->getSoPickedLotserials($query, $con);
    }

    /**
     * Clears out the collSoStandingOrderDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSoStandingOrderDetails()
     */
    public function clearSoStandingOrderDetails()
    {
        $this->collSoStandingOrderDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSoStandingOrderDetails collection loaded partially.
     */
    public function resetPartialSoStandingOrderDetails($v = true)
    {
        $this->collSoStandingOrderDetailsPartial = $v;
    }

    /**
     * Initializes the collSoStandingOrderDetails collection.
     *
     * By default this just sets the collSoStandingOrderDetails collection to an empty array (like clearcollSoStandingOrderDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSoStandingOrderDetails($overrideExisting = true)
    {
        if (null !== $this->collSoStandingOrderDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = SoStandingOrderDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collSoStandingOrderDetails = new $collectionClassName;
        $this->collSoStandingOrderDetails->setModel('\SoStandingOrderDetail');
    }

    /**
     * Gets an array of ChildSoStandingOrderDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSoStandingOrderDetail[] List of ChildSoStandingOrderDetail objects
     * @throws PropelException
     */
    public function getSoStandingOrderDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSoStandingOrderDetailsPartial && !$this->isNew();
        if (null === $this->collSoStandingOrderDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSoStandingOrderDetails) {
                // return empty collection
                $this->initSoStandingOrderDetails();
            } else {
                $collSoStandingOrderDetails = ChildSoStandingOrderDetailQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSoStandingOrderDetailsPartial && count($collSoStandingOrderDetails)) {
                        $this->initSoStandingOrderDetails(false);

                        foreach ($collSoStandingOrderDetails as $obj) {
                            if (false == $this->collSoStandingOrderDetails->contains($obj)) {
                                $this->collSoStandingOrderDetails->append($obj);
                            }
                        }

                        $this->collSoStandingOrderDetailsPartial = true;
                    }

                    return $collSoStandingOrderDetails;
                }

                if ($partial && $this->collSoStandingOrderDetails) {
                    foreach ($this->collSoStandingOrderDetails as $obj) {
                        if ($obj->isNew()) {
                            $collSoStandingOrderDetails[] = $obj;
                        }
                    }
                }

                $this->collSoStandingOrderDetails = $collSoStandingOrderDetails;
                $this->collSoStandingOrderDetailsPartial = false;
            }
        }

        return $this->collSoStandingOrderDetails;
    }

    /**
     * Sets a collection of ChildSoStandingOrderDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $soStandingOrderDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setSoStandingOrderDetails(Collection $soStandingOrderDetails, ConnectionInterface $con = null)
    {
        /** @var ChildSoStandingOrderDetail[] $soStandingOrderDetailsToDelete */
        $soStandingOrderDetailsToDelete = $this->getSoStandingOrderDetails(new Criteria(), $con)->diff($soStandingOrderDetails);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->soStandingOrderDetailsScheduledForDeletion = clone $soStandingOrderDetailsToDelete;

        foreach ($soStandingOrderDetailsToDelete as $soStandingOrderDetailRemoved) {
            $soStandingOrderDetailRemoved->setItemMasterItem(null);
        }

        $this->collSoStandingOrderDetails = null;
        foreach ($soStandingOrderDetails as $soStandingOrderDetail) {
            $this->addSoStandingOrderDetail($soStandingOrderDetail);
        }

        $this->collSoStandingOrderDetails = $soStandingOrderDetails;
        $this->collSoStandingOrderDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SoStandingOrderDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SoStandingOrderDetail objects.
     * @throws PropelException
     */
    public function countSoStandingOrderDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSoStandingOrderDetailsPartial && !$this->isNew();
        if (null === $this->collSoStandingOrderDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSoStandingOrderDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSoStandingOrderDetails());
            }

            $query = ChildSoStandingOrderDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collSoStandingOrderDetails);
    }

    /**
     * Method called to associate a ChildSoStandingOrderDetail object to this object
     * through the ChildSoStandingOrderDetail foreign key attribute.
     *
     * @param  ChildSoStandingOrderDetail $l ChildSoStandingOrderDetail
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addSoStandingOrderDetail(ChildSoStandingOrderDetail $l)
    {
        if ($this->collSoStandingOrderDetails === null) {
            $this->initSoStandingOrderDetails();
            $this->collSoStandingOrderDetailsPartial = true;
        }

        if (!$this->collSoStandingOrderDetails->contains($l)) {
            $this->doAddSoStandingOrderDetail($l);

            if ($this->soStandingOrderDetailsScheduledForDeletion and $this->soStandingOrderDetailsScheduledForDeletion->contains($l)) {
                $this->soStandingOrderDetailsScheduledForDeletion->remove($this->soStandingOrderDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSoStandingOrderDetail $soStandingOrderDetail The ChildSoStandingOrderDetail object to add.
     */
    protected function doAddSoStandingOrderDetail(ChildSoStandingOrderDetail $soStandingOrderDetail)
    {
        $this->collSoStandingOrderDetails[]= $soStandingOrderDetail;
        $soStandingOrderDetail->setItemMasterItem($this);
    }

    /**
     * @param  ChildSoStandingOrderDetail $soStandingOrderDetail The ChildSoStandingOrderDetail object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeSoStandingOrderDetail(ChildSoStandingOrderDetail $soStandingOrderDetail)
    {
        if ($this->getSoStandingOrderDetails()->contains($soStandingOrderDetail)) {
            $pos = $this->collSoStandingOrderDetails->search($soStandingOrderDetail);
            $this->collSoStandingOrderDetails->remove($pos);
            if (null === $this->soStandingOrderDetailsScheduledForDeletion) {
                $this->soStandingOrderDetailsScheduledForDeletion = clone $this->collSoStandingOrderDetails;
                $this->soStandingOrderDetailsScheduledForDeletion->clear();
            }
            $this->soStandingOrderDetailsScheduledForDeletion[]= clone $soStandingOrderDetail;
            $soStandingOrderDetail->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SoStandingOrderDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoStandingOrderDetail[] List of ChildSoStandingOrderDetail objects
     */
    public function getSoStandingOrderDetailsJoinCustomer(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoStandingOrderDetailQuery::create(null, $criteria);
        $query->joinWith('Customer', $joinBehavior);

        return $this->getSoStandingOrderDetails($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related SoStandingOrderDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoStandingOrderDetail[] List of ChildSoStandingOrderDetail objects
     */
    public function getSoStandingOrderDetailsJoinCustomerShipto(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoStandingOrderDetailQuery::create(null, $criteria);
        $query->joinWith('CustomerShipto', $joinBehavior);

        return $this->getSoStandingOrderDetails($query, $con);
    }

    /**
     * Clears out the collItemXrefUpcs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemXrefUpcs()
     */
    public function clearItemXrefUpcs()
    {
        $this->collItemXrefUpcs = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemXrefUpcs collection loaded partially.
     */
    public function resetPartialItemXrefUpcs($v = true)
    {
        $this->collItemXrefUpcsPartial = $v;
    }

    /**
     * Initializes the collItemXrefUpcs collection.
     *
     * By default this just sets the collItemXrefUpcs collection to an empty array (like clearcollItemXrefUpcs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemXrefUpcs($overrideExisting = true)
    {
        if (null !== $this->collItemXrefUpcs && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemXrefUpcTableMap::getTableMap()->getCollectionClassName();

        $this->collItemXrefUpcs = new $collectionClassName;
        $this->collItemXrefUpcs->setModel('\ItemXrefUpc');
    }

    /**
     * Gets an array of ChildItemXrefUpc objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemXrefUpc[] List of ChildItemXrefUpc objects
     * @throws PropelException
     */
    public function getItemXrefUpcs(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefUpcsPartial && !$this->isNew();
        if (null === $this->collItemXrefUpcs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemXrefUpcs) {
                // return empty collection
                $this->initItemXrefUpcs();
            } else {
                $collItemXrefUpcs = ChildItemXrefUpcQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemXrefUpcsPartial && count($collItemXrefUpcs)) {
                        $this->initItemXrefUpcs(false);

                        foreach ($collItemXrefUpcs as $obj) {
                            if (false == $this->collItemXrefUpcs->contains($obj)) {
                                $this->collItemXrefUpcs->append($obj);
                            }
                        }

                        $this->collItemXrefUpcsPartial = true;
                    }

                    return $collItemXrefUpcs;
                }

                if ($partial && $this->collItemXrefUpcs) {
                    foreach ($this->collItemXrefUpcs as $obj) {
                        if ($obj->isNew()) {
                            $collItemXrefUpcs[] = $obj;
                        }
                    }
                }

                $this->collItemXrefUpcs = $collItemXrefUpcs;
                $this->collItemXrefUpcsPartial = false;
            }
        }

        return $this->collItemXrefUpcs;
    }

    /**
     * Sets a collection of ChildItemXrefUpc objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemXrefUpcs A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemXrefUpcs(Collection $itemXrefUpcs, ConnectionInterface $con = null)
    {
        /** @var ChildItemXrefUpc[] $itemXrefUpcsToDelete */
        $itemXrefUpcsToDelete = $this->getItemXrefUpcs(new Criteria(), $con)->diff($itemXrefUpcs);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->itemXrefUpcsScheduledForDeletion = clone $itemXrefUpcsToDelete;

        foreach ($itemXrefUpcsToDelete as $itemXrefUpcRemoved) {
            $itemXrefUpcRemoved->setItemMasterItem(null);
        }

        $this->collItemXrefUpcs = null;
        foreach ($itemXrefUpcs as $itemXrefUpc) {
            $this->addItemXrefUpc($itemXrefUpc);
        }

        $this->collItemXrefUpcs = $itemXrefUpcs;
        $this->collItemXrefUpcsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemXrefUpc objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemXrefUpc objects.
     * @throws PropelException
     */
    public function countItemXrefUpcs(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefUpcsPartial && !$this->isNew();
        if (null === $this->collItemXrefUpcs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemXrefUpcs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemXrefUpcs());
            }

            $query = ChildItemXrefUpcQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collItemXrefUpcs);
    }

    /**
     * Method called to associate a ChildItemXrefUpc object to this object
     * through the ChildItemXrefUpc foreign key attribute.
     *
     * @param  ChildItemXrefUpc $l ChildItemXrefUpc
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemXrefUpc(ChildItemXrefUpc $l)
    {
        if ($this->collItemXrefUpcs === null) {
            $this->initItemXrefUpcs();
            $this->collItemXrefUpcsPartial = true;
        }

        if (!$this->collItemXrefUpcs->contains($l)) {
            $this->doAddItemXrefUpc($l);

            if ($this->itemXrefUpcsScheduledForDeletion and $this->itemXrefUpcsScheduledForDeletion->contains($l)) {
                $this->itemXrefUpcsScheduledForDeletion->remove($this->itemXrefUpcsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemXrefUpc $itemXrefUpc The ChildItemXrefUpc object to add.
     */
    protected function doAddItemXrefUpc(ChildItemXrefUpc $itemXrefUpc)
    {
        $this->collItemXrefUpcs[]= $itemXrefUpc;
        $itemXrefUpc->setItemMasterItem($this);
    }

    /**
     * @param  ChildItemXrefUpc $itemXrefUpc The ChildItemXrefUpc object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemXrefUpc(ChildItemXrefUpc $itemXrefUpc)
    {
        if ($this->getItemXrefUpcs()->contains($itemXrefUpc)) {
            $pos = $this->collItemXrefUpcs->search($itemXrefUpc);
            $this->collItemXrefUpcs->remove($pos);
            if (null === $this->itemXrefUpcsScheduledForDeletion) {
                $this->itemXrefUpcsScheduledForDeletion = clone $this->collItemXrefUpcs;
                $this->itemXrefUpcsScheduledForDeletion->clear();
            }
            $this->itemXrefUpcsScheduledForDeletion[]= clone $itemXrefUpc;
            $itemXrefUpc->setItemMasterItem(null);
        }

        return $this;
    }

    /**
     * Clears out the collItemXrefVendors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addItemXrefVendors()
     */
    public function clearItemXrefVendors()
    {
        $this->collItemXrefVendors = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collItemXrefVendors collection loaded partially.
     */
    public function resetPartialItemXrefVendors($v = true)
    {
        $this->collItemXrefVendorsPartial = $v;
    }

    /**
     * Initializes the collItemXrefVendors collection.
     *
     * By default this just sets the collItemXrefVendors collection to an empty array (like clearcollItemXrefVendors());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initItemXrefVendors($overrideExisting = true)
    {
        if (null !== $this->collItemXrefVendors && !$overrideExisting) {
            return;
        }

        $collectionClassName = ItemXrefVendorTableMap::getTableMap()->getCollectionClassName();

        $this->collItemXrefVendors = new $collectionClassName;
        $this->collItemXrefVendors->setModel('\ItemXrefVendor');
    }

    /**
     * Gets an array of ChildItemXrefVendor objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildItemMasterItem is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildItemXrefVendor[] List of ChildItemXrefVendor objects
     * @throws PropelException
     */
    public function getItemXrefVendors(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefVendorsPartial && !$this->isNew();
        if (null === $this->collItemXrefVendors || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collItemXrefVendors) {
                // return empty collection
                $this->initItemXrefVendors();
            } else {
                $collItemXrefVendors = ChildItemXrefVendorQuery::create(null, $criteria)
                    ->filterByItemMasterItem($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collItemXrefVendorsPartial && count($collItemXrefVendors)) {
                        $this->initItemXrefVendors(false);

                        foreach ($collItemXrefVendors as $obj) {
                            if (false == $this->collItemXrefVendors->contains($obj)) {
                                $this->collItemXrefVendors->append($obj);
                            }
                        }

                        $this->collItemXrefVendorsPartial = true;
                    }

                    return $collItemXrefVendors;
                }

                if ($partial && $this->collItemXrefVendors) {
                    foreach ($this->collItemXrefVendors as $obj) {
                        if ($obj->isNew()) {
                            $collItemXrefVendors[] = $obj;
                        }
                    }
                }

                $this->collItemXrefVendors = $collItemXrefVendors;
                $this->collItemXrefVendorsPartial = false;
            }
        }

        return $this->collItemXrefVendors;
    }

    /**
     * Sets a collection of ChildItemXrefVendor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $itemXrefVendors A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function setItemXrefVendors(Collection $itemXrefVendors, ConnectionInterface $con = null)
    {
        /** @var ChildItemXrefVendor[] $itemXrefVendorsToDelete */
        $itemXrefVendorsToDelete = $this->getItemXrefVendors(new Criteria(), $con)->diff($itemXrefVendors);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->itemXrefVendorsScheduledForDeletion = clone $itemXrefVendorsToDelete;

        foreach ($itemXrefVendorsToDelete as $itemXrefVendorRemoved) {
            $itemXrefVendorRemoved->setItemMasterItem(null);
        }

        $this->collItemXrefVendors = null;
        foreach ($itemXrefVendors as $itemXrefVendor) {
            $this->addItemXrefVendor($itemXrefVendor);
        }

        $this->collItemXrefVendors = $itemXrefVendors;
        $this->collItemXrefVendorsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ItemXrefVendor objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ItemXrefVendor objects.
     * @throws PropelException
     */
    public function countItemXrefVendors(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collItemXrefVendorsPartial && !$this->isNew();
        if (null === $this->collItemXrefVendors || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collItemXrefVendors) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getItemXrefVendors());
            }

            $query = ChildItemXrefVendorQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByItemMasterItem($this)
                ->count($con);
        }

        return count($this->collItemXrefVendors);
    }

    /**
     * Method called to associate a ChildItemXrefVendor object to this object
     * through the ChildItemXrefVendor foreign key attribute.
     *
     * @param  ChildItemXrefVendor $l ChildItemXrefVendor
     * @return $this|\ItemMasterItem The current object (for fluent API support)
     */
    public function addItemXrefVendor(ChildItemXrefVendor $l)
    {
        if ($this->collItemXrefVendors === null) {
            $this->initItemXrefVendors();
            $this->collItemXrefVendorsPartial = true;
        }

        if (!$this->collItemXrefVendors->contains($l)) {
            $this->doAddItemXrefVendor($l);

            if ($this->itemXrefVendorsScheduledForDeletion and $this->itemXrefVendorsScheduledForDeletion->contains($l)) {
                $this->itemXrefVendorsScheduledForDeletion->remove($this->itemXrefVendorsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildItemXrefVendor $itemXrefVendor The ChildItemXrefVendor object to add.
     */
    protected function doAddItemXrefVendor(ChildItemXrefVendor $itemXrefVendor)
    {
        $this->collItemXrefVendors[]= $itemXrefVendor;
        $itemXrefVendor->setItemMasterItem($this);
    }

    /**
     * @param  ChildItemXrefVendor $itemXrefVendor The ChildItemXrefVendor object to remove.
     * @return $this|ChildItemMasterItem The current object (for fluent API support)
     */
    public function removeItemXrefVendor(ChildItemXrefVendor $itemXrefVendor)
    {
        if ($this->getItemXrefVendors()->contains($itemXrefVendor)) {
            $pos = $this->collItemXrefVendors->search($itemXrefVendor);
            $this->collItemXrefVendors->remove($pos);
            if (null === $this->itemXrefVendorsScheduledForDeletion) {
                $this->itemXrefVendorsScheduledForDeletion = clone $this->collItemXrefVendors;
                $this->itemXrefVendorsScheduledForDeletion->clear();
            }
            $this->itemXrefVendorsScheduledForDeletion[]= clone $itemXrefVendor;
            $itemXrefVendor->setItemMasterItem(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related ItemXrefVendors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemXrefVendor[] List of ChildItemXrefVendor objects
     */
    public function getItemXrefVendorsJoinVendor(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemXrefVendorQuery::create(null, $criteria);
        $query->joinWith('Vendor', $joinBehavior);

        return $this->getItemXrefVendors($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this ItemMasterItem is new, it will return
     * an empty collection; or if this ItemMasterItem has previously
     * been saved, it will retrieve related ItemXrefVendors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in ItemMasterItem.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemXrefVendor[] List of ChildItemXrefVendor objects
     */
    public function getItemXrefVendorsJoinUnitofMeasurePurchase(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemXrefVendorQuery::create(null, $criteria);
        $query->joinWith('UnitofMeasurePurchase', $joinBehavior);

        return $this->getItemXrefVendors($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aUnitofMeasureSale) {
            $this->aUnitofMeasureSale->removeItemMasterItem($this);
        }
        if (null !== $this->aUnitofMeasurePurchase) {
            $this->aUnitofMeasurePurchase->removeItemMasterItem($this);
        }
        if (null !== $this->aInvGroupCode) {
            $this->aInvGroupCode->removeItemMasterItem($this);
        }
        if (null !== $this->aInvPriceCode) {
            $this->aInvPriceCode->removeItemMasterItem($this);
        }
        if (null !== $this->aInvCommissionCode) {
            $this->aInvCommissionCode->removeItemMasterItem($this);
        }
        if (null !== $this->aItemPricing) {
            $this->aItemPricing->removeItemMasterItem($this);
        }
        $this->inititemnbr = null;
        $this->initdesc1 = null;
        $this->initdesc2 = null;
        $this->intbgrup = null;
        $this->initformatcode = null;
        $this->initsplit = null;
        $this->initsherdatecd = null;
        $this->initcoreyn = null;
        $this->intbusercode1 = null;
        $this->intbusercode2 = null;
        $this->inittype = null;
        $this->inittax = null;
        $this->initrtlpric = null;
        $this->initstatchgd = null;
        $this->initspecitemcd = null;
        $this->initwarrdays = null;
        $this->intbuomsale = null;
        $this->initwght = null;
        $this->initbord = null;
        $this->initbaseitemid = null;
        $this->initspecificcust = null;
        $this->initgivedisc = null;
        $this->initasstcode = null;
        $this->initpriclastdate = null;
        $this->intbuompur = null;
        $this->initstancost = null;
        $this->initstancostbase = null;
        $this->initstancostlastdate = null;
        $this->initminmarg = null;
        $this->initvendid = null;
        $this->initinspect = null;
        $this->initstockcode = null;
        $this->initsupritemnbr = null;
        $this->initvendshipfrom = null;
        $this->initcntryoforigin = null;
        $this->initasstqty = null;
        $this->intbtariffcode = null;
        $this->initpreference = null;
        $this->initproducer = null;
        $this->initdocumentation = null;
        $this->initpurchcrtnqty = null;
        $this->aptbbuyrcode = null;
        $this->initlastcost = null;
        $this->initliters = null;
        $this->intbmsdscode = null;
        $this->initrequirefrt = null;
        $this->initmfrtcode = null;
        $this->initinnerpackqty = null;
        $this->initouterpackqty = null;
        $this->initbasestancost = null;
        $this->initshiptareqty = null;
        $this->initwgitem = null;
        $this->intbpricgrup = null;
        $this->intbcommgrup = null;
        $this->initlastcostdate = null;
        $this->initqtypercase = null;
        $this->initrevision = null;
        $this->initcommsaleqty = null;
        $this->initcubes = null;
        $this->inittimefence = null;
        $this->initsrvcminchrg = null;
        $this->initminmargbase = null;
        $this->dateupdtd = null;
        $this->timeupdtd = null;
        $this->dummy = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param      boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collItemXrefCustomers) {
                foreach ($this->collItemXrefCustomers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvWhseItemBins) {
                foreach ($this->collInvWhseItemBins as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemAddonItemsRelatedByInititemnbr) {
                foreach ($this->collItemAddonItemsRelatedByInititemnbr as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemAddonItemsRelatedByAdonadditemnbr) {
                foreach ($this->collItemAddonItemsRelatedByAdonadditemnbr as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->singleItmDimension) {
                $this->singleItmDimension->clearAllReferences($deep);
            }
            if ($this->singleInvHazmatItem) {
                $this->singleInvHazmatItem->clearAllReferences($deep);
            }
            if ($this->collInvWhseLots) {
                foreach ($this->collInvWhseLots as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemSubstitutesRelatedByInititemnbr) {
                foreach ($this->collItemSubstitutesRelatedByInititemnbr as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemSubstitutesRelatedByInsisubitemnbr) {
                foreach ($this->collItemSubstitutesRelatedByInsisubitemnbr as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvLotTags) {
                foreach ($this->collInvLotTags as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvItem2ItemsRelatedByI2imstritemid) {
                foreach ($this->collInvItem2ItemsRelatedByI2imstritemid as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvItem2ItemsRelatedByI2ichilditemid) {
                foreach ($this->collInvItem2ItemsRelatedByI2ichilditemid as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvKitComponents) {
                foreach ($this->collInvKitComponents as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->singleInvKit) {
                $this->singleInvKit->clearAllReferences($deep);
            }
            if ($this->collInvLotMasters) {
                foreach ($this->collInvLotMasters as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvSerialMasters) {
                foreach ($this->collInvSerialMasters as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvTransferDetails) {
                foreach ($this->collInvTransferDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvTransferLotserials) {
                foreach ($this->collInvTransferLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvTransferPreAllocatedLotserials) {
                foreach ($this->collInvTransferPreAllocatedLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvTransferPickedLotserials) {
                foreach ($this->collInvTransferPickedLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvSerialWarranties) {
                foreach ($this->collInvSerialWarranties as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collWarehouseInventories) {
                foreach ($this->collWarehouseInventories as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemXrefKeys) {
                foreach ($this->collItemXrefKeys as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemXrefManufacturers) {
                foreach ($this->collItemXrefManufacturers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemXrefCustomerNotes) {
                foreach ($this->collItemXrefCustomerNotes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvOptCodeNotes) {
                foreach ($this->collInvOptCodeNotes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemXrefVendorNoteDetails) {
                foreach ($this->collItemXrefVendorNoteDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemXrefVendorNoteInternals) {
                foreach ($this->collItemXrefVendorNoteInternals as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvPallets) {
                foreach ($this->collInvPallets as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPurchaseOrderDetails) {
                foreach ($this->collPurchaseOrderDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPurchaseOrderDetailReceipts) {
                foreach ($this->collPurchaseOrderDetailReceipts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPurchaseOrderDetailReceivings) {
                foreach ($this->collPurchaseOrderDetailReceivings as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPurchaseOrderDetailLotReceivings) {
                foreach ($this->collPurchaseOrderDetailLotReceivings as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collBomComponents) {
                foreach ($this->collBomComponents as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->singleBomItem) {
                $this->singleBomItem->clearAllReferences($deep);
            }
            if ($this->collBookingDetails) {
                foreach ($this->collBookingDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesHistoryDetails) {
                foreach ($this->collSalesHistoryDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesOrderDetails) {
                foreach ($this->collSalesOrderDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesOrderLotserials) {
                foreach ($this->collSalesOrderLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesHistoryLotserials) {
                foreach ($this->collSalesHistoryLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSoAllocatedLotserials) {
                foreach ($this->collSoAllocatedLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemPricingDiscounts) {
                foreach ($this->collItemPricingDiscounts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSoPickedLotserials) {
                foreach ($this->collSoPickedLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSoStandingOrderDetails) {
                foreach ($this->collSoStandingOrderDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemXrefUpcs) {
                foreach ($this->collItemXrefUpcs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemXrefVendors) {
                foreach ($this->collItemXrefVendors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collItemXrefCustomers = null;
        $this->collInvWhseItemBins = null;
        $this->collItemAddonItemsRelatedByInititemnbr = null;
        $this->collItemAddonItemsRelatedByAdonadditemnbr = null;
        $this->singleItmDimension = null;
        $this->singleInvHazmatItem = null;
        $this->collInvWhseLots = null;
        $this->collItemSubstitutesRelatedByInititemnbr = null;
        $this->collItemSubstitutesRelatedByInsisubitemnbr = null;
        $this->collInvLotTags = null;
        $this->collInvItem2ItemsRelatedByI2imstritemid = null;
        $this->collInvItem2ItemsRelatedByI2ichilditemid = null;
        $this->collInvKitComponents = null;
        $this->singleInvKit = null;
        $this->collInvLotMasters = null;
        $this->collInvSerialMasters = null;
        $this->collInvTransferDetails = null;
        $this->collInvTransferLotserials = null;
        $this->collInvTransferPreAllocatedLotserials = null;
        $this->collInvTransferPickedLotserials = null;
        $this->collInvSerialWarranties = null;
        $this->collWarehouseInventories = null;
        $this->collItemXrefKeys = null;
        $this->collItemXrefManufacturers = null;
        $this->collItemXrefCustomerNotes = null;
        $this->collInvOptCodeNotes = null;
        $this->collItemXrefVendorNoteDetails = null;
        $this->collItemXrefVendorNoteInternals = null;
        $this->collInvPallets = null;
        $this->collPurchaseOrderDetails = null;
        $this->collPurchaseOrderDetailReceipts = null;
        $this->collPurchaseOrderDetailReceivings = null;
        $this->collPurchaseOrderDetailLotReceivings = null;
        $this->collBomComponents = null;
        $this->singleBomItem = null;
        $this->collBookingDetails = null;
        $this->collSalesHistoryDetails = null;
        $this->collSalesOrderDetails = null;
        $this->collSalesOrderLotserials = null;
        $this->collSalesHistoryLotserials = null;
        $this->collSoAllocatedLotserials = null;
        $this->collItemPricingDiscounts = null;
        $this->collSoPickedLotserials = null;
        $this->collSoStandingOrderDetails = null;
        $this->collItemXrefUpcs = null;
        $this->collItemXrefVendors = null;
        $this->aUnitofMeasureSale = null;
        $this->aUnitofMeasurePurchase = null;
        $this->aInvGroupCode = null;
        $this->aInvPriceCode = null;
        $this->aInvCommissionCode = null;
        $this->aItemPricing = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ItemMasterItemTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            // return parent::preSave($con);
        }
        return true;
    }

    /**
     * Code to be run after persisting the object
     * @param ConnectionInterface $con
     */
    public function postSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postSave')) {
            // parent::postSave($con);
        }
    }

    /**
     * Code to be run before inserting to database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preInsert')) {
            // return parent::preInsert($con);
        }
        return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface $con
     */
    public function postInsert(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postInsert')) {
            // parent::postInsert($con);
        }
    }

    /**
     * Code to be run before updating the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preUpdate')) {
            // return parent::preUpdate($con);
        }
        return true;
    }

    /**
     * Code to be run after updating the object in database
     * @param ConnectionInterface $con
     */
    public function postUpdate(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postUpdate')) {
            // parent::postUpdate($con);
        }
    }

    /**
     * Code to be run before deleting the object in database
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preDelete')) {
            // return parent::preDelete($con);
        }
        return true;
    }

    /**
     * Code to be run after deleting the object in database
     * @param ConnectionInterface $con
     */
    public function postDelete(ConnectionInterface $con = null)
    {
        if (is_callable('parent::postDelete')) {
            // parent::postDelete($con);
        }
    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed  $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);

            return $this->importFrom($format, reset($params));
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = isset($params[0]) ? $params[0] : true;

            return $this->exportTo($format, $includeLazyLoadColumns);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
