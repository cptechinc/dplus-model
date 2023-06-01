<?php

namespace Base;

use \ArCashHead as ChildArCashHead;
use \ArCashHeadQuery as ChildArCashHeadQuery;
use \ArCommissionCode as ChildArCommissionCode;
use \ArCommissionCodeQuery as ChildArCommissionCodeQuery;
use \ArCust3partyFreight as ChildArCust3partyFreight;
use \ArCust3partyFreightQuery as ChildArCust3partyFreightQuery;
use \ArInvoice as ChildArInvoice;
use \ArInvoiceQuery as ChildArInvoiceQuery;
use \ArPaymentPending as ChildArPaymentPending;
use \ArPaymentPendingQuery as ChildArPaymentPendingQuery;
use \Booking as ChildBooking;
use \BookingDayCustomer as ChildBookingDayCustomer;
use \BookingDayCustomerQuery as ChildBookingDayCustomerQuery;
use \BookingDayDetail as ChildBookingDayDetail;
use \BookingDayDetailQuery as ChildBookingDayDetailQuery;
use \BookingQuery as ChildBookingQuery;
use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \CustomerShipto as ChildCustomerShipto;
use \CustomerShiptoQuery as ChildCustomerShiptoQuery;
use \InvSerialWarranty as ChildInvSerialWarranty;
use \InvSerialWarrantyQuery as ChildInvSerialWarrantyQuery;
use \ItemPricingDiscount as ChildItemPricingDiscount;
use \ItemPricingDiscountQuery as ChildItemPricingDiscountQuery;
use \ItemXrefCustomerNote as ChildItemXrefCustomerNote;
use \ItemXrefCustomerNoteQuery as ChildItemXrefCustomerNoteQuery;
use \SalesHistory as ChildSalesHistory;
use \SalesHistoryQuery as ChildSalesHistoryQuery;
use \SalesOrder as ChildSalesOrder;
use \SalesOrderQuery as ChildSalesOrderQuery;
use \Shipvia as ChildShipvia;
use \ShipviaQuery as ChildShipviaQuery;
use \SoFreightRate as ChildSoFreightRate;
use \SoFreightRateQuery as ChildSoFreightRateQuery;
use \Exception;
use \PDO;
use Map\ArCust3partyFreightTableMap;
use Map\ArInvoiceTableMap;
use Map\ArPaymentPendingTableMap;
use Map\BookingDayCustomerTableMap;
use Map\BookingDayDetailTableMap;
use Map\BookingTableMap;
use Map\CustomerShiptoTableMap;
use Map\CustomerTableMap;
use Map\InvSerialWarrantyTableMap;
use Map\ItemPricingDiscountTableMap;
use Map\ItemXrefCustomerNoteTableMap;
use Map\SalesHistoryTableMap;
use Map\SalesOrderTableMap;
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
 * Base class that represents a row from the 'ar_cust_mast' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class Customer implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\CustomerTableMap';


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
     * The value for the arcucustid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the arcuname field.
     *
     * @var        string
     */
    protected $arcuname;

    /**
     * The value for the arcuadr1 field.
     *
     * @var        string
     */
    protected $arcuadr1;

    /**
     * The value for the arcuadr2 field.
     *
     * @var        string
     */
    protected $arcuadr2;

    /**
     * The value for the arcuadr3 field.
     *
     * @var        string
     */
    protected $arcuadr3;

    /**
     * The value for the arcuctry field.
     *
     * @var        string
     */
    protected $arcuctry;

    /**
     * The value for the arcucity field.
     *
     * @var        string
     */
    protected $arcucity;

    /**
     * The value for the arcustat field.
     *
     * @var        string
     */
    protected $arcustat;

    /**
     * The value for the arcuzipcode field.
     *
     * @var        string
     */
    protected $arcuzipcode;

    /**
     * The value for the arcudeliverydays field.
     *
     * @var        int
     */
    protected $arcudeliverydays;

    /**
     * The value for the arcuremitwhse field.
     *
     * @var        string
     */
    protected $arcuremitwhse;

    /**
     * The value for the arcushipbin field.
     *
     * @var        string
     */
    protected $arcushipbin;

    /**
     * The value for the arcuallowaddons field.
     *
     * @var        string
     */
    protected $arcuallowaddons;

    /**
     * The value for the arculmecommcustid field.
     *
     * @var        string
     */
    protected $arculmecommcustid;

    /**
     * The value for the arcugsuse2ndbin field.
     *
     * @var        string
     */
    protected $arcugsuse2ndbin;

    /**
     * The value for the arspsaleper1 field.
     *
     * @var        string
     */
    protected $arspsaleper1;

    /**
     * The value for the arspsaleper2 field.
     *
     * @var        string
     */
    protected $arspsaleper2;

    /**
     * The value for the arspsaleper3 field.
     *
     * @var        string
     */
    protected $arspsaleper3;

    /**
     * The value for the artbmtaxcode field.
     *
     * @var        string
     */
    protected $artbmtaxcode;

    /**
     * The value for the arcutaxexemnbr field.
     *
     * @var        string
     */
    protected $arcutaxexemnbr;

    /**
     * The value for the intbwhse field.
     *
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the arcupriclvl field.
     *
     * @var        string
     */
    protected $arcupriclvl;

    /**
     * The value for the arcushipcomp field.
     *
     * @var        string
     */
    protected $arcushipcomp;

    /**
     * The value for the arcutxbl field.
     *
     * @var        string
     */
    protected $arcutxbl;

    /**
     * The value for the arcupostal field.
     *
     * @var        string
     */
    protected $arcupostal;

    /**
     * The value for the artbshipvia field.
     *
     * @var        string
     */
    protected $artbshipvia;

    /**
     * The value for the arcubord field.
     *
     * @var        string
     */
    protected $arcubord;

    /**
     * The value for the artbtypecode field.
     *
     * @var        string
     */
    protected $artbtypecode;

    /**
     * The value for the artbpriccode field.
     *
     * @var        string
     */
    protected $artbpriccode;

    /**
     * The value for the artbcommcode field.
     *
     * @var        string
     */
    protected $artbcommcode;

    /**
     * The value for the artmtermcd field.
     *
     * @var        string
     */
    protected $artmtermcd;

    /**
     * The value for the arcucredlmt field.
     *
     * @var        string
     */
    protected $arcucredlmt;

    /**
     * The value for the arcustmtcode field.
     *
     * @var        string
     */
    protected $arcustmtcode;

    /**
     * The value for the arcucredhold field.
     *
     * @var        string
     */
    protected $arcucredhold;

    /**
     * The value for the arcufinchrg field.
     *
     * @var        string
     */
    protected $arcufinchrg;

    /**
     * The value for the arcuusercode field.
     *
     * @var        string
     */
    protected $arcuusercode;

    /**
     * The value for the arcunewfc field.
     *
     * @var        string
     */
    protected $arcunewfc;

    /**
     * The value for the arcuunpdfc field.
     *
     * @var        string
     */
    protected $arcuunpdfc;

    /**
     * The value for the arcucurbal field.
     *
     * @var        string
     */
    protected $arcucurbal;

    /**
     * The value for the arcubalodue1 field.
     *
     * @var        string
     */
    protected $arcubalodue1;

    /**
     * The value for the arcubalodue2 field.
     *
     * @var        string
     */
    protected $arcubalodue2;

    /**
     * The value for the arcubalodue3 field.
     *
     * @var        string
     */
    protected $arcubalodue3;

    /**
     * The value for the arcusalemtd field.
     *
     * @var        string
     */
    protected $arcusalemtd;

    /**
     * The value for the arcuinvmtd field.
     *
     * @var        int
     */
    protected $arcuinvmtd;

    /**
     * The value for the arcusaleytd field.
     *
     * @var        string
     */
    protected $arcusaleytd;

    /**
     * The value for the arcuinvytd field.
     *
     * @var        int
     */
    protected $arcuinvytd;

    /**
     * The value for the arcudateopen field.
     *
     * @var        string
     */
    protected $arcudateopen;

    /**
     * The value for the arculastsaledate field.
     *
     * @var        string
     */
    protected $arculastsaledate;

    /**
     * The value for the arcuhighbal field.
     *
     * @var        string
     */
    protected $arcuhighbal;

    /**
     * The value for the arcubigsalemo field.
     *
     * @var        string
     */
    protected $arcubigsalemo;

    /**
     * The value for the arculastpaydate field.
     *
     * @var        string
     */
    protected $arculastpaydate;

    /**
     * The value for the arcuavgpaydays field.
     *
     * @var        int
     */
    protected $arcuavgpaydays;

    /**
     * The value for the arcuupszone field.
     *
     * @var        string
     */
    protected $arcuupszone;

    /**
     * The value for the arcuhighbaldate field.
     *
     * @var        string
     */
    protected $arcuhighbaldate;

    /**
     * The value for the arcusale24mo1 field.
     *
     * @var        string
     */
    protected $arcusale24mo1;

    /**
     * The value for the arcuinv24mo1 field.
     *
     * @var        int
     */
    protected $arcuinv24mo1;

    /**
     * The value for the arcusale24mo2 field.
     *
     * @var        string
     */
    protected $arcusale24mo2;

    /**
     * The value for the arcuinv24mo2 field.
     *
     * @var        int
     */
    protected $arcuinv24mo2;

    /**
     * The value for the arcusale24mo3 field.
     *
     * @var        string
     */
    protected $arcusale24mo3;

    /**
     * The value for the arcuinv24mo3 field.
     *
     * @var        int
     */
    protected $arcuinv24mo3;

    /**
     * The value for the arcusale24mo4 field.
     *
     * @var        string
     */
    protected $arcusale24mo4;

    /**
     * The value for the arcuinv24mo4 field.
     *
     * @var        int
     */
    protected $arcuinv24mo4;

    /**
     * The value for the arcusale24mo5 field.
     *
     * @var        string
     */
    protected $arcusale24mo5;

    /**
     * The value for the arcuinv24mo5 field.
     *
     * @var        int
     */
    protected $arcuinv24mo5;

    /**
     * The value for the arcusale24mo6 field.
     *
     * @var        string
     */
    protected $arcusale24mo6;

    /**
     * The value for the arcuinv24mo6 field.
     *
     * @var        int
     */
    protected $arcuinv24mo6;

    /**
     * The value for the arcusale24mo7 field.
     *
     * @var        string
     */
    protected $arcusale24mo7;

    /**
     * The value for the arcuinv24mo7 field.
     *
     * @var        int
     */
    protected $arcuinv24mo7;

    /**
     * The value for the arcusale24mo8 field.
     *
     * @var        string
     */
    protected $arcusale24mo8;

    /**
     * The value for the arcuinv24mo8 field.
     *
     * @var        int
     */
    protected $arcuinv24mo8;

    /**
     * The value for the arcusale24mo9 field.
     *
     * @var        string
     */
    protected $arcusale24mo9;

    /**
     * The value for the arcuinv24mo9 field.
     *
     * @var        int
     */
    protected $arcuinv24mo9;

    /**
     * The value for the arcusale24mo10 field.
     *
     * @var        string
     */
    protected $arcusale24mo10;

    /**
     * The value for the arcuinv24mo10 field.
     *
     * @var        int
     */
    protected $arcuinv24mo10;

    /**
     * The value for the arcusale24mo11 field.
     *
     * @var        string
     */
    protected $arcusale24mo11;

    /**
     * The value for the arcuinv24mo11 field.
     *
     * @var        int
     */
    protected $arcuinv24mo11;

    /**
     * The value for the arcusale24mo12 field.
     *
     * @var        string
     */
    protected $arcusale24mo12;

    /**
     * The value for the arcuinv24mo12 field.
     *
     * @var        int
     */
    protected $arcuinv24mo12;

    /**
     * The value for the arcusale24mo13 field.
     *
     * @var        string
     */
    protected $arcusale24mo13;

    /**
     * The value for the arcuinv24mo13 field.
     *
     * @var        int
     */
    protected $arcuinv24mo13;

    /**
     * The value for the arcusale24mo14 field.
     *
     * @var        string
     */
    protected $arcusale24mo14;

    /**
     * The value for the arcuinv24mo14 field.
     *
     * @var        int
     */
    protected $arcuinv24mo14;

    /**
     * The value for the arcusale24mo15 field.
     *
     * @var        string
     */
    protected $arcusale24mo15;

    /**
     * The value for the arcuinv24mo15 field.
     *
     * @var        int
     */
    protected $arcuinv24mo15;

    /**
     * The value for the arcusale24mo16 field.
     *
     * @var        string
     */
    protected $arcusale24mo16;

    /**
     * The value for the arcuinv24mo16 field.
     *
     * @var        int
     */
    protected $arcuinv24mo16;

    /**
     * The value for the arcusale24mo17 field.
     *
     * @var        string
     */
    protected $arcusale24mo17;

    /**
     * The value for the arcuinv24mo17 field.
     *
     * @var        int
     */
    protected $arcuinv24mo17;

    /**
     * The value for the arcusale24mo18 field.
     *
     * @var        string
     */
    protected $arcusale24mo18;

    /**
     * The value for the arcuinv24mo18 field.
     *
     * @var        int
     */
    protected $arcuinv24mo18;

    /**
     * The value for the arcusale24mo19 field.
     *
     * @var        string
     */
    protected $arcusale24mo19;

    /**
     * The value for the arcuinv24mo19 field.
     *
     * @var        int
     */
    protected $arcuinv24mo19;

    /**
     * The value for the arcusale24mo20 field.
     *
     * @var        string
     */
    protected $arcusale24mo20;

    /**
     * The value for the arcuinv24mo20 field.
     *
     * @var        int
     */
    protected $arcuinv24mo20;

    /**
     * The value for the arcusale24mo21 field.
     *
     * @var        string
     */
    protected $arcusale24mo21;

    /**
     * The value for the arcuinv24mo21 field.
     *
     * @var        int
     */
    protected $arcuinv24mo21;

    /**
     * The value for the arcusale24mo22 field.
     *
     * @var        string
     */
    protected $arcusale24mo22;

    /**
     * The value for the arcuinv24mo22 field.
     *
     * @var        int
     */
    protected $arcuinv24mo22;

    /**
     * The value for the arcusale24mo23 field.
     *
     * @var        string
     */
    protected $arcusale24mo23;

    /**
     * The value for the arcuinv24mo23 field.
     *
     * @var        int
     */
    protected $arcuinv24mo23;

    /**
     * The value for the arcusale24mo24 field.
     *
     * @var        string
     */
    protected $arcusale24mo24;

    /**
     * The value for the arcuinv24mo24 field.
     *
     * @var        int
     */
    protected $arcuinv24mo24;

    /**
     * The value for the arculastpayamt field.
     *
     * @var        string
     */
    protected $arculastpayamt;

    /**
     * The value for the arcuordrtot field.
     *
     * @var        string
     */
    protected $arcuordrtot;

    /**
     * The value for the arcuusefrtin field.
     *
     * @var        string
     */
    protected $arcuusefrtin;

    /**
     * The value for the arcumyvendid field.
     *
     * @var        string
     */
    protected $arcumyvendid;

    /**
     * The value for the arcuaddlpricdisc field.
     *
     * @var        string
     */
    protected $arcuaddlpricdisc;

    /**
     * The value for the arcuactiveinactive field.
     *
     * @var        string
     */
    protected $arcuactiveinactive;

    /**
     * The value for the arcuinactivedate field.
     *
     * @var        string
     */
    protected $arcuinactivedate;

    /**
     * The value for the arcuchrgfrt field.
     *
     * @var        string
     */
    protected $arcuchrgfrt;

    /**
     * The value for the arcucorexdays field.
     *
     * @var        int
     */
    protected $arcucorexdays;

    /**
     * The value for the arcucontractnbr field.
     *
     * @var        string
     */
    protected $arcucontractnbr;

    /**
     * The value for the arcucorelf field.
     *
     * @var        string
     */
    protected $arcucorelf;

    /**
     * The value for the arcucorebankid field.
     *
     * @var        string
     */
    protected $arcucorebankid;

    /**
     * The value for the arcudunsnbr field.
     *
     * @var        string
     */
    protected $arcudunsnbr;

    /**
     * The value for the arcurfmlvalu field.
     *
     * @var        int
     */
    protected $arcurfmlvalu;

    /**
     * The value for the arcucustpoparam field.
     *
     * @var        string
     */
    protected $arcucustpoparam;

    /**
     * The value for the arcuagelevel field.
     *
     * @var        int
     */
    protected $arcuagelevel;

    /**
     * The value for the artbroute field.
     *
     * @var        string
     */
    protected $artbroute;

    /**
     * The value for the arcuwgtaxcode field.
     *
     * @var        string
     */
    protected $arcuwgtaxcode;

    /**
     * The value for the arcuacptsupercede field.
     *
     * @var        string
     */
    protected $arcuacptsupercede;

    /**
     * The value for the arcumstrcustid field.
     *
     * @var        string
     */
    protected $arcumstrcustid;

    /**
     * The value for the arcusurchgpct field.
     *
     * @var        string
     */
    protected $arcusurchgpct;

    /**
     * The value for the arcuallowsplit field.
     *
     * @var        string
     */
    protected $arcuallowsplit;

    /**
     * The value for the arculinemin field.
     *
     * @var        string
     */
    protected $arculinemin;

    /**
     * The value for the arcuordrmin field.
     *
     * @var        string
     */
    protected $arcuordrmin;

    /**
     * The value for the arcuupsacctnbr field.
     *
     * @var        string
     */
    protected $arcuupsacctnbr;

    /**
     * The value for the arcuprtmatcert field.
     *
     * @var        string
     */
    protected $arcuprtmatcert;

    /**
     * The value for the arcufobinputyn field.
     *
     * @var        string
     */
    protected $arcufobinputyn;

    /**
     * The value for the arcufobperlb field.
     *
     * @var        string
     */
    protected $arcufobperlb;

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
     * @var        ChildArCommissionCode
     */
    protected $aArCommissionCode;

    /**
     * @var        ChildShipvia
     */
    protected $aShipvia;

    /**
     * @var        ChildSoFreightRate
     */
    protected $aSoFreightRate;

    /**
     * @var        ObjectCollection|ChildArCust3partyFreight[] Collection to store aggregation of ChildArCust3partyFreight objects.
     */
    protected $collArCust3partyFreights;
    protected $collArCust3partyFreightsPartial;

    /**
     * @var        ObjectCollection|ChildArPaymentPending[] Collection to store aggregation of ChildArPaymentPending objects.
     */
    protected $collArPaymentPendings;
    protected $collArPaymentPendingsPartial;

    /**
     * @var        ChildArCashHead one-to-one related ChildArCashHead object
     */
    protected $singleArCashHead;

    /**
     * @var        ObjectCollection|ChildArInvoice[] Collection to store aggregation of ChildArInvoice objects.
     */
    protected $collArInvoices;
    protected $collArInvoicesPartial;

    /**
     * @var        ObjectCollection|ChildCustomerShipto[] Collection to store aggregation of ChildCustomerShipto objects.
     */
    protected $collCustomerShiptos;
    protected $collCustomerShiptosPartial;

    /**
     * @var        ObjectCollection|ChildInvSerialWarranty[] Collection to store aggregation of ChildInvSerialWarranty objects.
     */
    protected $collInvSerialWarranties;
    protected $collInvSerialWarrantiesPartial;

    /**
     * @var        ObjectCollection|ChildItemXrefCustomerNote[] Collection to store aggregation of ChildItemXrefCustomerNote objects.
     */
    protected $collItemXrefCustomerNotes;
    protected $collItemXrefCustomerNotesPartial;

    /**
     * @var        ObjectCollection|ChildBookingDayCustomer[] Collection to store aggregation of ChildBookingDayCustomer objects.
     */
    protected $collBookingDayCustomers;
    protected $collBookingDayCustomersPartial;

    /**
     * @var        ObjectCollection|ChildBookingDayDetail[] Collection to store aggregation of ChildBookingDayDetail objects.
     */
    protected $collBookingDayDetails;
    protected $collBookingDayDetailsPartial;

    /**
     * @var        ObjectCollection|ChildBooking[] Collection to store aggregation of ChildBooking objects.
     */
    protected $collBookings;
    protected $collBookingsPartial;

    /**
     * @var        ObjectCollection|ChildSalesHistory[] Collection to store aggregation of ChildSalesHistory objects.
     */
    protected $collSalesHistories;
    protected $collSalesHistoriesPartial;

    /**
     * @var        ObjectCollection|ChildSalesOrder[] Collection to store aggregation of ChildSalesOrder objects.
     */
    protected $collSalesOrders;
    protected $collSalesOrdersPartial;

    /**
     * @var        ObjectCollection|ChildItemPricingDiscount[] Collection to store aggregation of ChildItemPricingDiscount objects.
     */
    protected $collItemPricingDiscounts;
    protected $collItemPricingDiscountsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildArCust3partyFreight[]
     */
    protected $arCust3partyFreightsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildArPaymentPending[]
     */
    protected $arPaymentPendingsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildArInvoice[]
     */
    protected $arInvoicesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildCustomerShipto[]
     */
    protected $customerShiptosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvSerialWarranty[]
     */
    protected $invSerialWarrantiesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemXrefCustomerNote[]
     */
    protected $itemXrefCustomerNotesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildBookingDayCustomer[]
     */
    protected $bookingDayCustomersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildBookingDayDetail[]
     */
    protected $bookingDayDetailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildBooking[]
     */
    protected $bookingsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesHistory[]
     */
    protected $salesHistoriesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesOrder[]
     */
    protected $salesOrdersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildItemPricingDiscount[]
     */
    protected $itemPricingDiscountsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->arcucustid = '';
    }

    /**
     * Initializes internal state of Base\Customer object.
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
     * Compares this with another <code>Customer</code> instance.  If
     * <code>obj</code> is an instance of <code>Customer</code>, delegates to
     * <code>equals(Customer)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|Customer The current object, for fluid interface
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
     * Get the [arcucustid] column value.
     *
     * @return string
     */
    public function getArcucustid()
    {
        return $this->arcucustid;
    }

    /**
     * Get the [arcuname] column value.
     *
     * @return string
     */
    public function getArcuname()
    {
        return $this->arcuname;
    }

    /**
     * Get the [arcuadr1] column value.
     *
     * @return string
     */
    public function getArcuadr1()
    {
        return $this->arcuadr1;
    }

    /**
     * Get the [arcuadr2] column value.
     *
     * @return string
     */
    public function getArcuadr2()
    {
        return $this->arcuadr2;
    }

    /**
     * Get the [arcuadr3] column value.
     *
     * @return string
     */
    public function getArcuadr3()
    {
        return $this->arcuadr3;
    }

    /**
     * Get the [arcuctry] column value.
     *
     * @return string
     */
    public function getArcuctry()
    {
        return $this->arcuctry;
    }

    /**
     * Get the [arcucity] column value.
     *
     * @return string
     */
    public function getArcucity()
    {
        return $this->arcucity;
    }

    /**
     * Get the [arcustat] column value.
     *
     * @return string
     */
    public function getArcustat()
    {
        return $this->arcustat;
    }

    /**
     * Get the [arcuzipcode] column value.
     *
     * @return string
     */
    public function getArcuzipcode()
    {
        return $this->arcuzipcode;
    }

    /**
     * Get the [arcudeliverydays] column value.
     *
     * @return int
     */
    public function getArcudeliverydays()
    {
        return $this->arcudeliverydays;
    }

    /**
     * Get the [arcuremitwhse] column value.
     *
     * @return string
     */
    public function getArcuremitwhse()
    {
        return $this->arcuremitwhse;
    }

    /**
     * Get the [arcushipbin] column value.
     *
     * @return string
     */
    public function getArcushipbin()
    {
        return $this->arcushipbin;
    }

    /**
     * Get the [arcuallowaddons] column value.
     *
     * @return string
     */
    public function getArcuallowaddons()
    {
        return $this->arcuallowaddons;
    }

    /**
     * Get the [arculmecommcustid] column value.
     *
     * @return string
     */
    public function getArculmecommcustid()
    {
        return $this->arculmecommcustid;
    }

    /**
     * Get the [arcugsuse2ndbin] column value.
     *
     * @return string
     */
    public function getArcugsuse2ndbin()
    {
        return $this->arcugsuse2ndbin;
    }

    /**
     * Get the [arspsaleper1] column value.
     *
     * @return string
     */
    public function getArspsaleper1()
    {
        return $this->arspsaleper1;
    }

    /**
     * Get the [arspsaleper2] column value.
     *
     * @return string
     */
    public function getArspsaleper2()
    {
        return $this->arspsaleper2;
    }

    /**
     * Get the [arspsaleper3] column value.
     *
     * @return string
     */
    public function getArspsaleper3()
    {
        return $this->arspsaleper3;
    }

    /**
     * Get the [artbmtaxcode] column value.
     *
     * @return string
     */
    public function getArtbmtaxcode()
    {
        return $this->artbmtaxcode;
    }

    /**
     * Get the [arcutaxexemnbr] column value.
     *
     * @return string
     */
    public function getArcutaxexemnbr()
    {
        return $this->arcutaxexemnbr;
    }

    /**
     * Get the [intbwhse] column value.
     *
     * @return string
     */
    public function getIntbwhse()
    {
        return $this->intbwhse;
    }

    /**
     * Get the [arcupriclvl] column value.
     *
     * @return string
     */
    public function getArcupriclvl()
    {
        return $this->arcupriclvl;
    }

    /**
     * Get the [arcushipcomp] column value.
     *
     * @return string
     */
    public function getArcushipcomp()
    {
        return $this->arcushipcomp;
    }

    /**
     * Get the [arcutxbl] column value.
     *
     * @return string
     */
    public function getArcutxbl()
    {
        return $this->arcutxbl;
    }

    /**
     * Get the [arcupostal] column value.
     *
     * @return string
     */
    public function getArcupostal()
    {
        return $this->arcupostal;
    }

    /**
     * Get the [artbshipvia] column value.
     *
     * @return string
     */
    public function getArtbshipvia()
    {
        return $this->artbshipvia;
    }

    /**
     * Get the [arcubord] column value.
     *
     * @return string
     */
    public function getArcubord()
    {
        return $this->arcubord;
    }

    /**
     * Get the [artbtypecode] column value.
     *
     * @return string
     */
    public function getArtbtypecode()
    {
        return $this->artbtypecode;
    }

    /**
     * Get the [artbpriccode] column value.
     *
     * @return string
     */
    public function getArtbpriccode()
    {
        return $this->artbpriccode;
    }

    /**
     * Get the [artbcommcode] column value.
     *
     * @return string
     */
    public function getArtbcommcode()
    {
        return $this->artbcommcode;
    }

    /**
     * Get the [artmtermcd] column value.
     *
     * @return string
     */
    public function getArtmtermcd()
    {
        return $this->artmtermcd;
    }

    /**
     * Get the [arcucredlmt] column value.
     *
     * @return string
     */
    public function getArcucredlmt()
    {
        return $this->arcucredlmt;
    }

    /**
     * Get the [arcustmtcode] column value.
     *
     * @return string
     */
    public function getArcustmtcode()
    {
        return $this->arcustmtcode;
    }

    /**
     * Get the [arcucredhold] column value.
     *
     * @return string
     */
    public function getArcucredhold()
    {
        return $this->arcucredhold;
    }

    /**
     * Get the [arcufinchrg] column value.
     *
     * @return string
     */
    public function getArcufinchrg()
    {
        return $this->arcufinchrg;
    }

    /**
     * Get the [arcuusercode] column value.
     *
     * @return string
     */
    public function getArcuusercode()
    {
        return $this->arcuusercode;
    }

    /**
     * Get the [arcunewfc] column value.
     *
     * @return string
     */
    public function getArcunewfc()
    {
        return $this->arcunewfc;
    }

    /**
     * Get the [arcuunpdfc] column value.
     *
     * @return string
     */
    public function getArcuunpdfc()
    {
        return $this->arcuunpdfc;
    }

    /**
     * Get the [arcucurbal] column value.
     *
     * @return string
     */
    public function getArcucurbal()
    {
        return $this->arcucurbal;
    }

    /**
     * Get the [arcubalodue1] column value.
     *
     * @return string
     */
    public function getArcubalodue1()
    {
        return $this->arcubalodue1;
    }

    /**
     * Get the [arcubalodue2] column value.
     *
     * @return string
     */
    public function getArcubalodue2()
    {
        return $this->arcubalodue2;
    }

    /**
     * Get the [arcubalodue3] column value.
     *
     * @return string
     */
    public function getArcubalodue3()
    {
        return $this->arcubalodue3;
    }

    /**
     * Get the [arcusalemtd] column value.
     *
     * @return string
     */
    public function getArcusalemtd()
    {
        return $this->arcusalemtd;
    }

    /**
     * Get the [arcuinvmtd] column value.
     *
     * @return int
     */
    public function getArcuinvmtd()
    {
        return $this->arcuinvmtd;
    }

    /**
     * Get the [arcusaleytd] column value.
     *
     * @return string
     */
    public function getArcusaleytd()
    {
        return $this->arcusaleytd;
    }

    /**
     * Get the [arcuinvytd] column value.
     *
     * @return int
     */
    public function getArcuinvytd()
    {
        return $this->arcuinvytd;
    }

    /**
     * Get the [arcudateopen] column value.
     *
     * @return string
     */
    public function getArcudateopen()
    {
        return $this->arcudateopen;
    }

    /**
     * Get the [arculastsaledate] column value.
     *
     * @return string
     */
    public function getArculastsaledate()
    {
        return $this->arculastsaledate;
    }

    /**
     * Get the [arcuhighbal] column value.
     *
     * @return string
     */
    public function getArcuhighbal()
    {
        return $this->arcuhighbal;
    }

    /**
     * Get the [arcubigsalemo] column value.
     *
     * @return string
     */
    public function getArcubigsalemo()
    {
        return $this->arcubigsalemo;
    }

    /**
     * Get the [arculastpaydate] column value.
     *
     * @return string
     */
    public function getArculastpaydate()
    {
        return $this->arculastpaydate;
    }

    /**
     * Get the [arcuavgpaydays] column value.
     *
     * @return int
     */
    public function getArcuavgpaydays()
    {
        return $this->arcuavgpaydays;
    }

    /**
     * Get the [arcuupszone] column value.
     *
     * @return string
     */
    public function getArcuupszone()
    {
        return $this->arcuupszone;
    }

    /**
     * Get the [arcuhighbaldate] column value.
     *
     * @return string
     */
    public function getArcuhighbaldate()
    {
        return $this->arcuhighbaldate;
    }

    /**
     * Get the [arcusale24mo1] column value.
     *
     * @return string
     */
    public function getArcusale24mo1()
    {
        return $this->arcusale24mo1;
    }

    /**
     * Get the [arcuinv24mo1] column value.
     *
     * @return int
     */
    public function getArcuinv24mo1()
    {
        return $this->arcuinv24mo1;
    }

    /**
     * Get the [arcusale24mo2] column value.
     *
     * @return string
     */
    public function getArcusale24mo2()
    {
        return $this->arcusale24mo2;
    }

    /**
     * Get the [arcuinv24mo2] column value.
     *
     * @return int
     */
    public function getArcuinv24mo2()
    {
        return $this->arcuinv24mo2;
    }

    /**
     * Get the [arcusale24mo3] column value.
     *
     * @return string
     */
    public function getArcusale24mo3()
    {
        return $this->arcusale24mo3;
    }

    /**
     * Get the [arcuinv24mo3] column value.
     *
     * @return int
     */
    public function getArcuinv24mo3()
    {
        return $this->arcuinv24mo3;
    }

    /**
     * Get the [arcusale24mo4] column value.
     *
     * @return string
     */
    public function getArcusale24mo4()
    {
        return $this->arcusale24mo4;
    }

    /**
     * Get the [arcuinv24mo4] column value.
     *
     * @return int
     */
    public function getArcuinv24mo4()
    {
        return $this->arcuinv24mo4;
    }

    /**
     * Get the [arcusale24mo5] column value.
     *
     * @return string
     */
    public function getArcusale24mo5()
    {
        return $this->arcusale24mo5;
    }

    /**
     * Get the [arcuinv24mo5] column value.
     *
     * @return int
     */
    public function getArcuinv24mo5()
    {
        return $this->arcuinv24mo5;
    }

    /**
     * Get the [arcusale24mo6] column value.
     *
     * @return string
     */
    public function getArcusale24mo6()
    {
        return $this->arcusale24mo6;
    }

    /**
     * Get the [arcuinv24mo6] column value.
     *
     * @return int
     */
    public function getArcuinv24mo6()
    {
        return $this->arcuinv24mo6;
    }

    /**
     * Get the [arcusale24mo7] column value.
     *
     * @return string
     */
    public function getArcusale24mo7()
    {
        return $this->arcusale24mo7;
    }

    /**
     * Get the [arcuinv24mo7] column value.
     *
     * @return int
     */
    public function getArcuinv24mo7()
    {
        return $this->arcuinv24mo7;
    }

    /**
     * Get the [arcusale24mo8] column value.
     *
     * @return string
     */
    public function getArcusale24mo8()
    {
        return $this->arcusale24mo8;
    }

    /**
     * Get the [arcuinv24mo8] column value.
     *
     * @return int
     */
    public function getArcuinv24mo8()
    {
        return $this->arcuinv24mo8;
    }

    /**
     * Get the [arcusale24mo9] column value.
     *
     * @return string
     */
    public function getArcusale24mo9()
    {
        return $this->arcusale24mo9;
    }

    /**
     * Get the [arcuinv24mo9] column value.
     *
     * @return int
     */
    public function getArcuinv24mo9()
    {
        return $this->arcuinv24mo9;
    }

    /**
     * Get the [arcusale24mo10] column value.
     *
     * @return string
     */
    public function getArcusale24mo10()
    {
        return $this->arcusale24mo10;
    }

    /**
     * Get the [arcuinv24mo10] column value.
     *
     * @return int
     */
    public function getArcuinv24mo10()
    {
        return $this->arcuinv24mo10;
    }

    /**
     * Get the [arcusale24mo11] column value.
     *
     * @return string
     */
    public function getArcusale24mo11()
    {
        return $this->arcusale24mo11;
    }

    /**
     * Get the [arcuinv24mo11] column value.
     *
     * @return int
     */
    public function getArcuinv24mo11()
    {
        return $this->arcuinv24mo11;
    }

    /**
     * Get the [arcusale24mo12] column value.
     *
     * @return string
     */
    public function getArcusale24mo12()
    {
        return $this->arcusale24mo12;
    }

    /**
     * Get the [arcuinv24mo12] column value.
     *
     * @return int
     */
    public function getArcuinv24mo12()
    {
        return $this->arcuinv24mo12;
    }

    /**
     * Get the [arcusale24mo13] column value.
     *
     * @return string
     */
    public function getArcusale24mo13()
    {
        return $this->arcusale24mo13;
    }

    /**
     * Get the [arcuinv24mo13] column value.
     *
     * @return int
     */
    public function getArcuinv24mo13()
    {
        return $this->arcuinv24mo13;
    }

    /**
     * Get the [arcusale24mo14] column value.
     *
     * @return string
     */
    public function getArcusale24mo14()
    {
        return $this->arcusale24mo14;
    }

    /**
     * Get the [arcuinv24mo14] column value.
     *
     * @return int
     */
    public function getArcuinv24mo14()
    {
        return $this->arcuinv24mo14;
    }

    /**
     * Get the [arcusale24mo15] column value.
     *
     * @return string
     */
    public function getArcusale24mo15()
    {
        return $this->arcusale24mo15;
    }

    /**
     * Get the [arcuinv24mo15] column value.
     *
     * @return int
     */
    public function getArcuinv24mo15()
    {
        return $this->arcuinv24mo15;
    }

    /**
     * Get the [arcusale24mo16] column value.
     *
     * @return string
     */
    public function getArcusale24mo16()
    {
        return $this->arcusale24mo16;
    }

    /**
     * Get the [arcuinv24mo16] column value.
     *
     * @return int
     */
    public function getArcuinv24mo16()
    {
        return $this->arcuinv24mo16;
    }

    /**
     * Get the [arcusale24mo17] column value.
     *
     * @return string
     */
    public function getArcusale24mo17()
    {
        return $this->arcusale24mo17;
    }

    /**
     * Get the [arcuinv24mo17] column value.
     *
     * @return int
     */
    public function getArcuinv24mo17()
    {
        return $this->arcuinv24mo17;
    }

    /**
     * Get the [arcusale24mo18] column value.
     *
     * @return string
     */
    public function getArcusale24mo18()
    {
        return $this->arcusale24mo18;
    }

    /**
     * Get the [arcuinv24mo18] column value.
     *
     * @return int
     */
    public function getArcuinv24mo18()
    {
        return $this->arcuinv24mo18;
    }

    /**
     * Get the [arcusale24mo19] column value.
     *
     * @return string
     */
    public function getArcusale24mo19()
    {
        return $this->arcusale24mo19;
    }

    /**
     * Get the [arcuinv24mo19] column value.
     *
     * @return int
     */
    public function getArcuinv24mo19()
    {
        return $this->arcuinv24mo19;
    }

    /**
     * Get the [arcusale24mo20] column value.
     *
     * @return string
     */
    public function getArcusale24mo20()
    {
        return $this->arcusale24mo20;
    }

    /**
     * Get the [arcuinv24mo20] column value.
     *
     * @return int
     */
    public function getArcuinv24mo20()
    {
        return $this->arcuinv24mo20;
    }

    /**
     * Get the [arcusale24mo21] column value.
     *
     * @return string
     */
    public function getArcusale24mo21()
    {
        return $this->arcusale24mo21;
    }

    /**
     * Get the [arcuinv24mo21] column value.
     *
     * @return int
     */
    public function getArcuinv24mo21()
    {
        return $this->arcuinv24mo21;
    }

    /**
     * Get the [arcusale24mo22] column value.
     *
     * @return string
     */
    public function getArcusale24mo22()
    {
        return $this->arcusale24mo22;
    }

    /**
     * Get the [arcuinv24mo22] column value.
     *
     * @return int
     */
    public function getArcuinv24mo22()
    {
        return $this->arcuinv24mo22;
    }

    /**
     * Get the [arcusale24mo23] column value.
     *
     * @return string
     */
    public function getArcusale24mo23()
    {
        return $this->arcusale24mo23;
    }

    /**
     * Get the [arcuinv24mo23] column value.
     *
     * @return int
     */
    public function getArcuinv24mo23()
    {
        return $this->arcuinv24mo23;
    }

    /**
     * Get the [arcusale24mo24] column value.
     *
     * @return string
     */
    public function getArcusale24mo24()
    {
        return $this->arcusale24mo24;
    }

    /**
     * Get the [arcuinv24mo24] column value.
     *
     * @return int
     */
    public function getArcuinv24mo24()
    {
        return $this->arcuinv24mo24;
    }

    /**
     * Get the [arculastpayamt] column value.
     *
     * @return string
     */
    public function getArculastpayamt()
    {
        return $this->arculastpayamt;
    }

    /**
     * Get the [arcuordrtot] column value.
     *
     * @return string
     */
    public function getArcuordrtot()
    {
        return $this->arcuordrtot;
    }

    /**
     * Get the [arcuusefrtin] column value.
     *
     * @return string
     */
    public function getArcuusefrtin()
    {
        return $this->arcuusefrtin;
    }

    /**
     * Get the [arcumyvendid] column value.
     *
     * @return string
     */
    public function getArcumyvendid()
    {
        return $this->arcumyvendid;
    }

    /**
     * Get the [arcuaddlpricdisc] column value.
     *
     * @return string
     */
    public function getArcuaddlpricdisc()
    {
        return $this->arcuaddlpricdisc;
    }

    /**
     * Get the [arcuactiveinactive] column value.
     *
     * @return string
     */
    public function getArcuactiveinactive()
    {
        return $this->arcuactiveinactive;
    }

    /**
     * Get the [arcuinactivedate] column value.
     *
     * @return string
     */
    public function getArcuinactivedate()
    {
        return $this->arcuinactivedate;
    }

    /**
     * Get the [arcuchrgfrt] column value.
     *
     * @return string
     */
    public function getArcuchrgfrt()
    {
        return $this->arcuchrgfrt;
    }

    /**
     * Get the [arcucorexdays] column value.
     *
     * @return int
     */
    public function getArcucorexdays()
    {
        return $this->arcucorexdays;
    }

    /**
     * Get the [arcucontractnbr] column value.
     *
     * @return string
     */
    public function getArcucontractnbr()
    {
        return $this->arcucontractnbr;
    }

    /**
     * Get the [arcucorelf] column value.
     *
     * @return string
     */
    public function getArcucorelf()
    {
        return $this->arcucorelf;
    }

    /**
     * Get the [arcucorebankid] column value.
     *
     * @return string
     */
    public function getArcucorebankid()
    {
        return $this->arcucorebankid;
    }

    /**
     * Get the [arcudunsnbr] column value.
     *
     * @return string
     */
    public function getArcudunsnbr()
    {
        return $this->arcudunsnbr;
    }

    /**
     * Get the [arcurfmlvalu] column value.
     *
     * @return int
     */
    public function getArcurfmlvalu()
    {
        return $this->arcurfmlvalu;
    }

    /**
     * Get the [arcucustpoparam] column value.
     *
     * @return string
     */
    public function getArcucustpoparam()
    {
        return $this->arcucustpoparam;
    }

    /**
     * Get the [arcuagelevel] column value.
     *
     * @return int
     */
    public function getArcuagelevel()
    {
        return $this->arcuagelevel;
    }

    /**
     * Get the [artbroute] column value.
     *
     * @return string
     */
    public function getArtbroute()
    {
        return $this->artbroute;
    }

    /**
     * Get the [arcuwgtaxcode] column value.
     *
     * @return string
     */
    public function getArcuwgtaxcode()
    {
        return $this->arcuwgtaxcode;
    }

    /**
     * Get the [arcuacptsupercede] column value.
     *
     * @return string
     */
    public function getArcuacptsupercede()
    {
        return $this->arcuacptsupercede;
    }

    /**
     * Get the [arcumstrcustid] column value.
     *
     * @return string
     */
    public function getArcumstrcustid()
    {
        return $this->arcumstrcustid;
    }

    /**
     * Get the [arcusurchgpct] column value.
     *
     * @return string
     */
    public function getArcusurchgpct()
    {
        return $this->arcusurchgpct;
    }

    /**
     * Get the [arcuallowsplit] column value.
     *
     * @return string
     */
    public function getArcuallowsplit()
    {
        return $this->arcuallowsplit;
    }

    /**
     * Get the [arculinemin] column value.
     *
     * @return string
     */
    public function getArculinemin()
    {
        return $this->arculinemin;
    }

    /**
     * Get the [arcuordrmin] column value.
     *
     * @return string
     */
    public function getArcuordrmin()
    {
        return $this->arcuordrmin;
    }

    /**
     * Get the [arcuupsacctnbr] column value.
     *
     * @return string
     */
    public function getArcuupsacctnbr()
    {
        return $this->arcuupsacctnbr;
    }

    /**
     * Get the [arcuprtmatcert] column value.
     *
     * @return string
     */
    public function getArcuprtmatcert()
    {
        return $this->arcuprtmatcert;
    }

    /**
     * Get the [arcufobinputyn] column value.
     *
     * @return string
     */
    public function getArcufobinputyn()
    {
        return $this->arcufobinputyn;
    }

    /**
     * Get the [arcufobperlb] column value.
     *
     * @return string
     */
    public function getArcufobperlb()
    {
        return $this->arcufobperlb;
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
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUCUSTID] = true;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [arcuname] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuname !== $v) {
            $this->arcuname = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUNAME] = true;
        }

        return $this;
    } // setArcuname()

    /**
     * Set the value of [arcuadr1] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuadr1 !== $v) {
            $this->arcuadr1 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUADR1] = true;
        }

        return $this;
    } // setArcuadr1()

    /**
     * Set the value of [arcuadr2] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuadr2 !== $v) {
            $this->arcuadr2 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUADR2] = true;
        }

        return $this;
    } // setArcuadr2()

    /**
     * Set the value of [arcuadr3] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuadr3 !== $v) {
            $this->arcuadr3 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUADR3] = true;
        }

        return $this;
    } // setArcuadr3()

    /**
     * Set the value of [arcuctry] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuctry !== $v) {
            $this->arcuctry = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUCTRY] = true;
        }

        return $this;
    } // setArcuctry()

    /**
     * Set the value of [arcucity] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcucity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucity !== $v) {
            $this->arcucity = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUCITY] = true;
        }

        return $this;
    } // setArcucity()

    /**
     * Set the value of [arcustat] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcustat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcustat !== $v) {
            $this->arcustat = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSTAT] = true;
        }

        return $this;
    } // setArcustat()

    /**
     * Set the value of [arcuzipcode] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuzipcode !== $v) {
            $this->arcuzipcode = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUZIPCODE] = true;
        }

        return $this;
    } // setArcuzipcode()

    /**
     * Set the value of [arcudeliverydays] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcudeliverydays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcudeliverydays !== $v) {
            $this->arcudeliverydays = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUDELIVERYDAYS] = true;
        }

        return $this;
    } // setArcudeliverydays()

    /**
     * Set the value of [arcuremitwhse] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuremitwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuremitwhse !== $v) {
            $this->arcuremitwhse = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUREMITWHSE] = true;
        }

        return $this;
    } // setArcuremitwhse()

    /**
     * Set the value of [arcushipbin] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcushipbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcushipbin !== $v) {
            $this->arcushipbin = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSHIPBIN] = true;
        }

        return $this;
    } // setArcushipbin()

    /**
     * Set the value of [arcuallowaddons] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuallowaddons($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuallowaddons !== $v) {
            $this->arcuallowaddons = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUALLOWADDONS] = true;
        }

        return $this;
    } // setArcuallowaddons()

    /**
     * Set the value of [arculmecommcustid] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArculmecommcustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arculmecommcustid !== $v) {
            $this->arculmecommcustid = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCULMECOMMCUSTID] = true;
        }

        return $this;
    } // setArculmecommcustid()

    /**
     * Set the value of [arcugsuse2ndbin] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcugsuse2ndbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcugsuse2ndbin !== $v) {
            $this->arcugsuse2ndbin = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUGSUSE2NDBIN] = true;
        }

        return $this;
    } // setArcugsuse2ndbin()

    /**
     * Set the value of [arspsaleper1] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArspsaleper1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper1 !== $v) {
            $this->arspsaleper1 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARSPSALEPER1] = true;
        }

        return $this;
    } // setArspsaleper1()

    /**
     * Set the value of [arspsaleper2] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArspsaleper2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper2 !== $v) {
            $this->arspsaleper2 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARSPSALEPER2] = true;
        }

        return $this;
    } // setArspsaleper2()

    /**
     * Set the value of [arspsaleper3] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArspsaleper3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper3 !== $v) {
            $this->arspsaleper3 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARSPSALEPER3] = true;
        }

        return $this;
    } // setArspsaleper3()

    /**
     * Set the value of [artbmtaxcode] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArtbmtaxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxcode !== $v) {
            $this->artbmtaxcode = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARTBMTAXCODE] = true;
        }

        return $this;
    } // setArtbmtaxcode()

    /**
     * Set the value of [arcutaxexemnbr] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcutaxexemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcutaxexemnbr !== $v) {
            $this->arcutaxexemnbr = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUTAXEXEMNBR] = true;
        }

        return $this;
    } // setArcutaxexemnbr()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[CustomerTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [arcupriclvl] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcupriclvl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcupriclvl !== $v) {
            $this->arcupriclvl = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUPRICLVL] = true;
        }

        return $this;
    } // setArcupriclvl()

    /**
     * Set the value of [arcushipcomp] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcushipcomp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcushipcomp !== $v) {
            $this->arcushipcomp = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSHIPCOMP] = true;
        }

        return $this;
    } // setArcushipcomp()

    /**
     * Set the value of [arcutxbl] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcutxbl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcutxbl !== $v) {
            $this->arcutxbl = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUTXBL] = true;
        }

        return $this;
    } // setArcutxbl()

    /**
     * Set the value of [arcupostal] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcupostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcupostal !== $v) {
            $this->arcupostal = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUPOSTAL] = true;
        }

        return $this;
    } // setArcupostal()

    /**
     * Set the value of [artbshipvia] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArtbshipvia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbshipvia !== $v) {
            $this->artbshipvia = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARTBSHIPVIA] = true;
        }

        if ($this->aShipvia !== null && $this->aShipvia->getArtbshipvia() !== $v) {
            $this->aShipvia = null;
        }

        return $this;
    } // setArtbshipvia()

    /**
     * Set the value of [arcubord] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcubord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcubord !== $v) {
            $this->arcubord = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUBORD] = true;
        }

        return $this;
    } // setArcubord()

    /**
     * Set the value of [artbtypecode] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArtbtypecode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbtypecode !== $v) {
            $this->artbtypecode = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARTBTYPECODE] = true;
        }

        return $this;
    } // setArtbtypecode()

    /**
     * Set the value of [artbpriccode] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArtbpriccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbpriccode !== $v) {
            $this->artbpriccode = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARTBPRICCODE] = true;
        }

        return $this;
    } // setArtbpriccode()

    /**
     * Set the value of [artbcommcode] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArtbcommcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcommcode !== $v) {
            $this->artbcommcode = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARTBCOMMCODE] = true;
        }

        if ($this->aArCommissionCode !== null && $this->aArCommissionCode->getArtbcommcode() !== $v) {
            $this->aArCommissionCode = null;
        }

        return $this;
    } // setArtbcommcode()

    /**
     * Set the value of [artmtermcd] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArtmtermcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmtermcd !== $v) {
            $this->artmtermcd = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARTMTERMCD] = true;
        }

        return $this;
    } // setArtmtermcd()

    /**
     * Set the value of [arcucredlmt] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcucredlmt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucredlmt !== $v) {
            $this->arcucredlmt = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUCREDLMT] = true;
        }

        return $this;
    } // setArcucredlmt()

    /**
     * Set the value of [arcustmtcode] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcustmtcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcustmtcode !== $v) {
            $this->arcustmtcode = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSTMTCODE] = true;
        }

        return $this;
    } // setArcustmtcode()

    /**
     * Set the value of [arcucredhold] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcucredhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucredhold !== $v) {
            $this->arcucredhold = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUCREDHOLD] = true;
        }

        return $this;
    } // setArcucredhold()

    /**
     * Set the value of [arcufinchrg] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcufinchrg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcufinchrg !== $v) {
            $this->arcufinchrg = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUFINCHRG] = true;
        }

        return $this;
    } // setArcufinchrg()

    /**
     * Set the value of [arcuusercode] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuusercode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuusercode !== $v) {
            $this->arcuusercode = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUUSERCODE] = true;
        }

        return $this;
    } // setArcuusercode()

    /**
     * Set the value of [arcunewfc] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcunewfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcunewfc !== $v) {
            $this->arcunewfc = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUNEWFC] = true;
        }

        return $this;
    } // setArcunewfc()

    /**
     * Set the value of [arcuunpdfc] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuunpdfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuunpdfc !== $v) {
            $this->arcuunpdfc = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUUNPDFC] = true;
        }

        return $this;
    } // setArcuunpdfc()

    /**
     * Set the value of [arcucurbal] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcucurbal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucurbal !== $v) {
            $this->arcucurbal = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUCURBAL] = true;
        }

        return $this;
    } // setArcucurbal()

    /**
     * Set the value of [arcubalodue1] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcubalodue1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcubalodue1 !== $v) {
            $this->arcubalodue1 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUBALODUE1] = true;
        }

        return $this;
    } // setArcubalodue1()

    /**
     * Set the value of [arcubalodue2] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcubalodue2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcubalodue2 !== $v) {
            $this->arcubalodue2 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUBALODUE2] = true;
        }

        return $this;
    } // setArcubalodue2()

    /**
     * Set the value of [arcubalodue3] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcubalodue3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcubalodue3 !== $v) {
            $this->arcubalodue3 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUBALODUE3] = true;
        }

        return $this;
    } // setArcubalodue3()

    /**
     * Set the value of [arcusalemtd] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusalemtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusalemtd !== $v) {
            $this->arcusalemtd = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALEMTD] = true;
        }

        return $this;
    } // setArcusalemtd()

    /**
     * Set the value of [arcuinvmtd] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinvmtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinvmtd !== $v) {
            $this->arcuinvmtd = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINVMTD] = true;
        }

        return $this;
    } // setArcuinvmtd()

    /**
     * Set the value of [arcusaleytd] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusaleytd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusaleytd !== $v) {
            $this->arcusaleytd = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALEYTD] = true;
        }

        return $this;
    } // setArcusaleytd()

    /**
     * Set the value of [arcuinvytd] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinvytd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinvytd !== $v) {
            $this->arcuinvytd = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINVYTD] = true;
        }

        return $this;
    } // setArcuinvytd()

    /**
     * Set the value of [arcudateopen] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcudateopen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcudateopen !== $v) {
            $this->arcudateopen = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUDATEOPEN] = true;
        }

        return $this;
    } // setArcudateopen()

    /**
     * Set the value of [arculastsaledate] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArculastsaledate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arculastsaledate !== $v) {
            $this->arculastsaledate = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCULASTSALEDATE] = true;
        }

        return $this;
    } // setArculastsaledate()

    /**
     * Set the value of [arcuhighbal] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuhighbal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuhighbal !== $v) {
            $this->arcuhighbal = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUHIGHBAL] = true;
        }

        return $this;
    } // setArcuhighbal()

    /**
     * Set the value of [arcubigsalemo] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcubigsalemo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcubigsalemo !== $v) {
            $this->arcubigsalemo = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUBIGSALEMO] = true;
        }

        return $this;
    } // setArcubigsalemo()

    /**
     * Set the value of [arculastpaydate] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArculastpaydate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arculastpaydate !== $v) {
            $this->arculastpaydate = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCULASTPAYDATE] = true;
        }

        return $this;
    } // setArculastpaydate()

    /**
     * Set the value of [arcuavgpaydays] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuavgpaydays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuavgpaydays !== $v) {
            $this->arcuavgpaydays = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUAVGPAYDAYS] = true;
        }

        return $this;
    } // setArcuavgpaydays()

    /**
     * Set the value of [arcuupszone] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuupszone($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuupszone !== $v) {
            $this->arcuupszone = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUUPSZONE] = true;
        }

        return $this;
    } // setArcuupszone()

    /**
     * Set the value of [arcuhighbaldate] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuhighbaldate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuhighbaldate !== $v) {
            $this->arcuhighbaldate = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUHIGHBALDATE] = true;
        }

        return $this;
    } // setArcuhighbaldate()

    /**
     * Set the value of [arcusale24mo1] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo1 !== $v) {
            $this->arcusale24mo1 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO1] = true;
        }

        return $this;
    } // setArcusale24mo1()

    /**
     * Set the value of [arcuinv24mo1] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo1 !== $v) {
            $this->arcuinv24mo1 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO1] = true;
        }

        return $this;
    } // setArcuinv24mo1()

    /**
     * Set the value of [arcusale24mo2] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo2 !== $v) {
            $this->arcusale24mo2 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO2] = true;
        }

        return $this;
    } // setArcusale24mo2()

    /**
     * Set the value of [arcuinv24mo2] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo2 !== $v) {
            $this->arcuinv24mo2 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO2] = true;
        }

        return $this;
    } // setArcuinv24mo2()

    /**
     * Set the value of [arcusale24mo3] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo3 !== $v) {
            $this->arcusale24mo3 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO3] = true;
        }

        return $this;
    } // setArcusale24mo3()

    /**
     * Set the value of [arcuinv24mo3] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo3 !== $v) {
            $this->arcuinv24mo3 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO3] = true;
        }

        return $this;
    } // setArcuinv24mo3()

    /**
     * Set the value of [arcusale24mo4] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo4 !== $v) {
            $this->arcusale24mo4 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO4] = true;
        }

        return $this;
    } // setArcusale24mo4()

    /**
     * Set the value of [arcuinv24mo4] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo4 !== $v) {
            $this->arcuinv24mo4 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO4] = true;
        }

        return $this;
    } // setArcuinv24mo4()

    /**
     * Set the value of [arcusale24mo5] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo5 !== $v) {
            $this->arcusale24mo5 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO5] = true;
        }

        return $this;
    } // setArcusale24mo5()

    /**
     * Set the value of [arcuinv24mo5] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo5 !== $v) {
            $this->arcuinv24mo5 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO5] = true;
        }

        return $this;
    } // setArcuinv24mo5()

    /**
     * Set the value of [arcusale24mo6] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo6 !== $v) {
            $this->arcusale24mo6 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO6] = true;
        }

        return $this;
    } // setArcusale24mo6()

    /**
     * Set the value of [arcuinv24mo6] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo6($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo6 !== $v) {
            $this->arcuinv24mo6 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO6] = true;
        }

        return $this;
    } // setArcuinv24mo6()

    /**
     * Set the value of [arcusale24mo7] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo7 !== $v) {
            $this->arcusale24mo7 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO7] = true;
        }

        return $this;
    } // setArcusale24mo7()

    /**
     * Set the value of [arcuinv24mo7] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo7($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo7 !== $v) {
            $this->arcuinv24mo7 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO7] = true;
        }

        return $this;
    } // setArcuinv24mo7()

    /**
     * Set the value of [arcusale24mo8] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo8 !== $v) {
            $this->arcusale24mo8 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO8] = true;
        }

        return $this;
    } // setArcusale24mo8()

    /**
     * Set the value of [arcuinv24mo8] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo8($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo8 !== $v) {
            $this->arcuinv24mo8 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO8] = true;
        }

        return $this;
    } // setArcuinv24mo8()

    /**
     * Set the value of [arcusale24mo9] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo9 !== $v) {
            $this->arcusale24mo9 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO9] = true;
        }

        return $this;
    } // setArcusale24mo9()

    /**
     * Set the value of [arcuinv24mo9] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo9($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo9 !== $v) {
            $this->arcuinv24mo9 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO9] = true;
        }

        return $this;
    } // setArcuinv24mo9()

    /**
     * Set the value of [arcusale24mo10] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo10 !== $v) {
            $this->arcusale24mo10 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO10] = true;
        }

        return $this;
    } // setArcusale24mo10()

    /**
     * Set the value of [arcuinv24mo10] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo10($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo10 !== $v) {
            $this->arcuinv24mo10 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO10] = true;
        }

        return $this;
    } // setArcuinv24mo10()

    /**
     * Set the value of [arcusale24mo11] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo11($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo11 !== $v) {
            $this->arcusale24mo11 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO11] = true;
        }

        return $this;
    } // setArcusale24mo11()

    /**
     * Set the value of [arcuinv24mo11] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo11($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo11 !== $v) {
            $this->arcuinv24mo11 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO11] = true;
        }

        return $this;
    } // setArcuinv24mo11()

    /**
     * Set the value of [arcusale24mo12] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo12 !== $v) {
            $this->arcusale24mo12 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO12] = true;
        }

        return $this;
    } // setArcusale24mo12()

    /**
     * Set the value of [arcuinv24mo12] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo12($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo12 !== $v) {
            $this->arcuinv24mo12 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO12] = true;
        }

        return $this;
    } // setArcuinv24mo12()

    /**
     * Set the value of [arcusale24mo13] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo13($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo13 !== $v) {
            $this->arcusale24mo13 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO13] = true;
        }

        return $this;
    } // setArcusale24mo13()

    /**
     * Set the value of [arcuinv24mo13] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo13($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo13 !== $v) {
            $this->arcuinv24mo13 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO13] = true;
        }

        return $this;
    } // setArcuinv24mo13()

    /**
     * Set the value of [arcusale24mo14] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo14($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo14 !== $v) {
            $this->arcusale24mo14 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO14] = true;
        }

        return $this;
    } // setArcusale24mo14()

    /**
     * Set the value of [arcuinv24mo14] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo14($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo14 !== $v) {
            $this->arcuinv24mo14 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO14] = true;
        }

        return $this;
    } // setArcuinv24mo14()

    /**
     * Set the value of [arcusale24mo15] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo15($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo15 !== $v) {
            $this->arcusale24mo15 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO15] = true;
        }

        return $this;
    } // setArcusale24mo15()

    /**
     * Set the value of [arcuinv24mo15] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo15($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo15 !== $v) {
            $this->arcuinv24mo15 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO15] = true;
        }

        return $this;
    } // setArcuinv24mo15()

    /**
     * Set the value of [arcusale24mo16] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo16($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo16 !== $v) {
            $this->arcusale24mo16 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO16] = true;
        }

        return $this;
    } // setArcusale24mo16()

    /**
     * Set the value of [arcuinv24mo16] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo16($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo16 !== $v) {
            $this->arcuinv24mo16 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO16] = true;
        }

        return $this;
    } // setArcuinv24mo16()

    /**
     * Set the value of [arcusale24mo17] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo17($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo17 !== $v) {
            $this->arcusale24mo17 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO17] = true;
        }

        return $this;
    } // setArcusale24mo17()

    /**
     * Set the value of [arcuinv24mo17] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo17($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo17 !== $v) {
            $this->arcuinv24mo17 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO17] = true;
        }

        return $this;
    } // setArcuinv24mo17()

    /**
     * Set the value of [arcusale24mo18] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo18($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo18 !== $v) {
            $this->arcusale24mo18 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO18] = true;
        }

        return $this;
    } // setArcusale24mo18()

    /**
     * Set the value of [arcuinv24mo18] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo18($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo18 !== $v) {
            $this->arcuinv24mo18 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO18] = true;
        }

        return $this;
    } // setArcuinv24mo18()

    /**
     * Set the value of [arcusale24mo19] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo19($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo19 !== $v) {
            $this->arcusale24mo19 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO19] = true;
        }

        return $this;
    } // setArcusale24mo19()

    /**
     * Set the value of [arcuinv24mo19] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo19($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo19 !== $v) {
            $this->arcuinv24mo19 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO19] = true;
        }

        return $this;
    } // setArcuinv24mo19()

    /**
     * Set the value of [arcusale24mo20] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo20($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo20 !== $v) {
            $this->arcusale24mo20 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO20] = true;
        }

        return $this;
    } // setArcusale24mo20()

    /**
     * Set the value of [arcuinv24mo20] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo20($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo20 !== $v) {
            $this->arcuinv24mo20 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO20] = true;
        }

        return $this;
    } // setArcuinv24mo20()

    /**
     * Set the value of [arcusale24mo21] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo21($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo21 !== $v) {
            $this->arcusale24mo21 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO21] = true;
        }

        return $this;
    } // setArcusale24mo21()

    /**
     * Set the value of [arcuinv24mo21] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo21($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo21 !== $v) {
            $this->arcuinv24mo21 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO21] = true;
        }

        return $this;
    } // setArcuinv24mo21()

    /**
     * Set the value of [arcusale24mo22] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo22($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo22 !== $v) {
            $this->arcusale24mo22 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO22] = true;
        }

        return $this;
    } // setArcusale24mo22()

    /**
     * Set the value of [arcuinv24mo22] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo22($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo22 !== $v) {
            $this->arcuinv24mo22 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO22] = true;
        }

        return $this;
    } // setArcuinv24mo22()

    /**
     * Set the value of [arcusale24mo23] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo23($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo23 !== $v) {
            $this->arcusale24mo23 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO23] = true;
        }

        return $this;
    } // setArcusale24mo23()

    /**
     * Set the value of [arcuinv24mo23] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo23($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo23 !== $v) {
            $this->arcuinv24mo23 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO23] = true;
        }

        return $this;
    } // setArcuinv24mo23()

    /**
     * Set the value of [arcusale24mo24] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusale24mo24($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusale24mo24 !== $v) {
            $this->arcusale24mo24 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSALE24MO24] = true;
        }

        return $this;
    } // setArcusale24mo24()

    /**
     * Set the value of [arcuinv24mo24] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinv24mo24($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuinv24mo24 !== $v) {
            $this->arcuinv24mo24 = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINV24MO24] = true;
        }

        return $this;
    } // setArcuinv24mo24()

    /**
     * Set the value of [arculastpayamt] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArculastpayamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arculastpayamt !== $v) {
            $this->arculastpayamt = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCULASTPAYAMT] = true;
        }

        return $this;
    } // setArculastpayamt()

    /**
     * Set the value of [arcuordrtot] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuordrtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuordrtot !== $v) {
            $this->arcuordrtot = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUORDRTOT] = true;
        }

        return $this;
    } // setArcuordrtot()

    /**
     * Set the value of [arcuusefrtin] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuusefrtin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuusefrtin !== $v) {
            $this->arcuusefrtin = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUUSEFRTIN] = true;
        }

        return $this;
    } // setArcuusefrtin()

    /**
     * Set the value of [arcumyvendid] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcumyvendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcumyvendid !== $v) {
            $this->arcumyvendid = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUMYVENDID] = true;
        }

        return $this;
    } // setArcumyvendid()

    /**
     * Set the value of [arcuaddlpricdisc] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuaddlpricdisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuaddlpricdisc !== $v) {
            $this->arcuaddlpricdisc = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUADDLPRICDISC] = true;
        }

        return $this;
    } // setArcuaddlpricdisc()

    /**
     * Set the value of [arcuactiveinactive] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuactiveinactive($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuactiveinactive !== $v) {
            $this->arcuactiveinactive = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUACTIVEINACTIVE] = true;
        }

        return $this;
    } // setArcuactiveinactive()

    /**
     * Set the value of [arcuinactivedate] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuinactivedate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuinactivedate !== $v) {
            $this->arcuinactivedate = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUINACTIVEDATE] = true;
        }

        return $this;
    } // setArcuinactivedate()

    /**
     * Set the value of [arcuchrgfrt] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuchrgfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuchrgfrt !== $v) {
            $this->arcuchrgfrt = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUCHRGFRT] = true;
        }

        if ($this->aSoFreightRate !== null && $this->aSoFreightRate->getSfrtratecode() !== $v) {
            $this->aSoFreightRate = null;
        }

        return $this;
    } // setArcuchrgfrt()

    /**
     * Set the value of [arcucorexdays] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcucorexdays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcucorexdays !== $v) {
            $this->arcucorexdays = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUCOREXDAYS] = true;
        }

        return $this;
    } // setArcucorexdays()

    /**
     * Set the value of [arcucontractnbr] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcucontractnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucontractnbr !== $v) {
            $this->arcucontractnbr = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUCONTRACTNBR] = true;
        }

        return $this;
    } // setArcucontractnbr()

    /**
     * Set the value of [arcucorelf] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcucorelf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucorelf !== $v) {
            $this->arcucorelf = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUCORELF] = true;
        }

        return $this;
    } // setArcucorelf()

    /**
     * Set the value of [arcucorebankid] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcucorebankid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucorebankid !== $v) {
            $this->arcucorebankid = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUCOREBANKID] = true;
        }

        return $this;
    } // setArcucorebankid()

    /**
     * Set the value of [arcudunsnbr] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcudunsnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcudunsnbr !== $v) {
            $this->arcudunsnbr = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUDUNSNBR] = true;
        }

        return $this;
    } // setArcudunsnbr()

    /**
     * Set the value of [arcurfmlvalu] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcurfmlvalu($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcurfmlvalu !== $v) {
            $this->arcurfmlvalu = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCURFMLVALU] = true;
        }

        return $this;
    } // setArcurfmlvalu()

    /**
     * Set the value of [arcucustpoparam] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcucustpoparam($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustpoparam !== $v) {
            $this->arcucustpoparam = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUCUSTPOPARAM] = true;
        }

        return $this;
    } // setArcucustpoparam()

    /**
     * Set the value of [arcuagelevel] column.
     *
     * @param int $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuagelevel($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->arcuagelevel !== $v) {
            $this->arcuagelevel = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUAGELEVEL] = true;
        }

        return $this;
    } // setArcuagelevel()

    /**
     * Set the value of [artbroute] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArtbroute($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbroute !== $v) {
            $this->artbroute = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARTBROUTE] = true;
        }

        return $this;
    } // setArtbroute()

    /**
     * Set the value of [arcuwgtaxcode] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuwgtaxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuwgtaxcode !== $v) {
            $this->arcuwgtaxcode = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUWGTAXCODE] = true;
        }

        return $this;
    } // setArcuwgtaxcode()

    /**
     * Set the value of [arcuacptsupercede] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuacptsupercede($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuacptsupercede !== $v) {
            $this->arcuacptsupercede = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUACPTSUPERCEDE] = true;
        }

        return $this;
    } // setArcuacptsupercede()

    /**
     * Set the value of [arcumstrcustid] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcumstrcustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcumstrcustid !== $v) {
            $this->arcumstrcustid = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUMSTRCUSTID] = true;
        }

        return $this;
    } // setArcumstrcustid()

    /**
     * Set the value of [arcusurchgpct] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcusurchgpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcusurchgpct !== $v) {
            $this->arcusurchgpct = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUSURCHGPCT] = true;
        }

        return $this;
    } // setArcusurchgpct()

    /**
     * Set the value of [arcuallowsplit] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuallowsplit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuallowsplit !== $v) {
            $this->arcuallowsplit = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUALLOWSPLIT] = true;
        }

        return $this;
    } // setArcuallowsplit()

    /**
     * Set the value of [arculinemin] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArculinemin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arculinemin !== $v) {
            $this->arculinemin = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCULINEMIN] = true;
        }

        return $this;
    } // setArculinemin()

    /**
     * Set the value of [arcuordrmin] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuordrmin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuordrmin !== $v) {
            $this->arcuordrmin = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUORDRMIN] = true;
        }

        return $this;
    } // setArcuordrmin()

    /**
     * Set the value of [arcuupsacctnbr] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuupsacctnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuupsacctnbr !== $v) {
            $this->arcuupsacctnbr = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUUPSACCTNBR] = true;
        }

        return $this;
    } // setArcuupsacctnbr()

    /**
     * Set the value of [arcuprtmatcert] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcuprtmatcert($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcuprtmatcert !== $v) {
            $this->arcuprtmatcert = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUPRTMATCERT] = true;
        }

        return $this;
    } // setArcuprtmatcert()

    /**
     * Set the value of [arcufobinputyn] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcufobinputyn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcufobinputyn !== $v) {
            $this->arcufobinputyn = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUFOBINPUTYN] = true;
        }

        return $this;
    } // setArcufobinputyn()

    /**
     * Set the value of [arcufobperlb] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setArcufobperlb($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcufobperlb !== $v) {
            $this->arcufobperlb = $v;
            $this->modifiedColumns[CustomerTableMap::COL_ARCUFOBPERLB] = true;
        }

        return $this;
    } // setArcufobperlb()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[CustomerTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[CustomerTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[CustomerTableMap::COL_DUMMY] = true;
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
            if ($this->arcucustid !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : CustomerTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : CustomerTableMap::translateFieldName('Arcuname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : CustomerTableMap::translateFieldName('Arcuadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : CustomerTableMap::translateFieldName('Arcuadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : CustomerTableMap::translateFieldName('Arcuadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : CustomerTableMap::translateFieldName('Arcuctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : CustomerTableMap::translateFieldName('Arcucity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : CustomerTableMap::translateFieldName('Arcustat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcustat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : CustomerTableMap::translateFieldName('Arcuzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : CustomerTableMap::translateFieldName('Arcudeliverydays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcudeliverydays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : CustomerTableMap::translateFieldName('Arcuremitwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuremitwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : CustomerTableMap::translateFieldName('Arcushipbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcushipbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : CustomerTableMap::translateFieldName('Arcuallowaddons', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuallowaddons = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : CustomerTableMap::translateFieldName('Arculmecommcustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arculmecommcustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : CustomerTableMap::translateFieldName('Arcugsuse2ndbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcugsuse2ndbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : CustomerTableMap::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : CustomerTableMap::translateFieldName('Arspsaleper2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : CustomerTableMap::translateFieldName('Arspsaleper3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : CustomerTableMap::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : CustomerTableMap::translateFieldName('Arcutaxexemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcutaxexemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : CustomerTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : CustomerTableMap::translateFieldName('Arcupriclvl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcupriclvl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : CustomerTableMap::translateFieldName('Arcushipcomp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcushipcomp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : CustomerTableMap::translateFieldName('Arcutxbl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcutxbl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : CustomerTableMap::translateFieldName('Arcupostal', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcupostal = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : CustomerTableMap::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbshipvia = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : CustomerTableMap::translateFieldName('Arcubord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcubord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : CustomerTableMap::translateFieldName('Artbtypecode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbtypecode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : CustomerTableMap::translateFieldName('Artbpriccode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbpriccode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : CustomerTableMap::translateFieldName('Artbcommcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcommcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : CustomerTableMap::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmtermcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : CustomerTableMap::translateFieldName('Arcucredlmt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucredlmt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : CustomerTableMap::translateFieldName('Arcustmtcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcustmtcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : CustomerTableMap::translateFieldName('Arcucredhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucredhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : CustomerTableMap::translateFieldName('Arcufinchrg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcufinchrg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : CustomerTableMap::translateFieldName('Arcuusercode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuusercode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : CustomerTableMap::translateFieldName('Arcunewfc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcunewfc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : CustomerTableMap::translateFieldName('Arcuunpdfc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuunpdfc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : CustomerTableMap::translateFieldName('Arcucurbal', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucurbal = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : CustomerTableMap::translateFieldName('Arcubalodue1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcubalodue1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : CustomerTableMap::translateFieldName('Arcubalodue2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcubalodue2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : CustomerTableMap::translateFieldName('Arcubalodue3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcubalodue3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : CustomerTableMap::translateFieldName('Arcusalemtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusalemtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : CustomerTableMap::translateFieldName('Arcuinvmtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinvmtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : CustomerTableMap::translateFieldName('Arcusaleytd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusaleytd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : CustomerTableMap::translateFieldName('Arcuinvytd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinvytd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : CustomerTableMap::translateFieldName('Arcudateopen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcudateopen = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : CustomerTableMap::translateFieldName('Arculastsaledate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arculastsaledate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : CustomerTableMap::translateFieldName('Arcuhighbal', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuhighbal = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : CustomerTableMap::translateFieldName('Arcubigsalemo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcubigsalemo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : CustomerTableMap::translateFieldName('Arculastpaydate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arculastpaydate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : CustomerTableMap::translateFieldName('Arcuavgpaydays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuavgpaydays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : CustomerTableMap::translateFieldName('Arcuupszone', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuupszone = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : CustomerTableMap::translateFieldName('Arcuhighbaldate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuhighbaldate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo6 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo7 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo8 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo9 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo10 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo11 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo11 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo12 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo13 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo13 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo14 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo14 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo15 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo15 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo16 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo16 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo17 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo17 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo18 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo18 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo19 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo19 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo20 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo20 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo21 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 95 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo21 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 96 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo22 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 97 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo22 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 98 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo23 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 99 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo23 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 100 + $startcol : CustomerTableMap::translateFieldName('Arcusale24mo24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusale24mo24 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 101 + $startcol : CustomerTableMap::translateFieldName('Arcuinv24mo24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinv24mo24 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 102 + $startcol : CustomerTableMap::translateFieldName('Arculastpayamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arculastpayamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 103 + $startcol : CustomerTableMap::translateFieldName('Arcuordrtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuordrtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 104 + $startcol : CustomerTableMap::translateFieldName('Arcuusefrtin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuusefrtin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 105 + $startcol : CustomerTableMap::translateFieldName('Arcumyvendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcumyvendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 106 + $startcol : CustomerTableMap::translateFieldName('Arcuaddlpricdisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuaddlpricdisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 107 + $startcol : CustomerTableMap::translateFieldName('Arcuactiveinactive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuactiveinactive = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 108 + $startcol : CustomerTableMap::translateFieldName('Arcuinactivedate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuinactivedate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 109 + $startcol : CustomerTableMap::translateFieldName('Arcuchrgfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuchrgfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 110 + $startcol : CustomerTableMap::translateFieldName('Arcucorexdays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucorexdays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 111 + $startcol : CustomerTableMap::translateFieldName('Arcucontractnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucontractnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 112 + $startcol : CustomerTableMap::translateFieldName('Arcucorelf', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucorelf = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 113 + $startcol : CustomerTableMap::translateFieldName('Arcucorebankid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucorebankid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 114 + $startcol : CustomerTableMap::translateFieldName('Arcudunsnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcudunsnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 115 + $startcol : CustomerTableMap::translateFieldName('Arcurfmlvalu', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcurfmlvalu = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 116 + $startcol : CustomerTableMap::translateFieldName('Arcucustpoparam', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustpoparam = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 117 + $startcol : CustomerTableMap::translateFieldName('Arcuagelevel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuagelevel = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 118 + $startcol : CustomerTableMap::translateFieldName('Artbroute', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbroute = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 119 + $startcol : CustomerTableMap::translateFieldName('Arcuwgtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuwgtaxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 120 + $startcol : CustomerTableMap::translateFieldName('Arcuacptsupercede', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuacptsupercede = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 121 + $startcol : CustomerTableMap::translateFieldName('Arcumstrcustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcumstrcustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 122 + $startcol : CustomerTableMap::translateFieldName('Arcusurchgpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcusurchgpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 123 + $startcol : CustomerTableMap::translateFieldName('Arcuallowsplit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuallowsplit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 124 + $startcol : CustomerTableMap::translateFieldName('Arculinemin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arculinemin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 125 + $startcol : CustomerTableMap::translateFieldName('Arcuordrmin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuordrmin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 126 + $startcol : CustomerTableMap::translateFieldName('Arcuupsacctnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuupsacctnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 127 + $startcol : CustomerTableMap::translateFieldName('Arcuprtmatcert', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcuprtmatcert = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 128 + $startcol : CustomerTableMap::translateFieldName('Arcufobinputyn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcufobinputyn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 129 + $startcol : CustomerTableMap::translateFieldName('Arcufobperlb', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcufobperlb = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 130 + $startcol : CustomerTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 131 + $startcol : CustomerTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 132 + $startcol : CustomerTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 133; // 133 = CustomerTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Customer'), 0, $e);
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
        if ($this->aShipvia !== null && $this->artbshipvia !== $this->aShipvia->getArtbshipvia()) {
            $this->aShipvia = null;
        }
        if ($this->aArCommissionCode !== null && $this->artbcommcode !== $this->aArCommissionCode->getArtbcommcode()) {
            $this->aArCommissionCode = null;
        }
        if ($this->aSoFreightRate !== null && $this->arcuchrgfrt !== $this->aSoFreightRate->getSfrtratecode()) {
            $this->aSoFreightRate = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(CustomerTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildCustomerQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aArCommissionCode = null;
            $this->aShipvia = null;
            $this->aSoFreightRate = null;
            $this->collArCust3partyFreights = null;

            $this->collArPaymentPendings = null;

            $this->singleArCashHead = null;

            $this->collArInvoices = null;

            $this->collCustomerShiptos = null;

            $this->collInvSerialWarranties = null;

            $this->collItemXrefCustomerNotes = null;

            $this->collBookingDayCustomers = null;

            $this->collBookingDayDetails = null;

            $this->collBookings = null;

            $this->collSalesHistories = null;

            $this->collSalesOrders = null;

            $this->collItemPricingDiscounts = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Customer::setDeleted()
     * @see Customer::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildCustomerQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTableMap::DATABASE_NAME);
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
                CustomerTableMap::addInstanceToPool($this);
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

            if ($this->aArCommissionCode !== null) {
                if ($this->aArCommissionCode->isModified() || $this->aArCommissionCode->isNew()) {
                    $affectedRows += $this->aArCommissionCode->save($con);
                }
                $this->setArCommissionCode($this->aArCommissionCode);
            }

            if ($this->aShipvia !== null) {
                if ($this->aShipvia->isModified() || $this->aShipvia->isNew()) {
                    $affectedRows += $this->aShipvia->save($con);
                }
                $this->setShipvia($this->aShipvia);
            }

            if ($this->aSoFreightRate !== null) {
                if ($this->aSoFreightRate->isModified() || $this->aSoFreightRate->isNew()) {
                    $affectedRows += $this->aSoFreightRate->save($con);
                }
                $this->setSoFreightRate($this->aSoFreightRate);
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

            if ($this->arCust3partyFreightsScheduledForDeletion !== null) {
                if (!$this->arCust3partyFreightsScheduledForDeletion->isEmpty()) {
                    \ArCust3partyFreightQuery::create()
                        ->filterByPrimaryKeys($this->arCust3partyFreightsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->arCust3partyFreightsScheduledForDeletion = null;
                }
            }

            if ($this->collArCust3partyFreights !== null) {
                foreach ($this->collArCust3partyFreights as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->arPaymentPendingsScheduledForDeletion !== null) {
                if (!$this->arPaymentPendingsScheduledForDeletion->isEmpty()) {
                    \ArPaymentPendingQuery::create()
                        ->filterByPrimaryKeys($this->arPaymentPendingsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->arPaymentPendingsScheduledForDeletion = null;
                }
            }

            if ($this->collArPaymentPendings !== null) {
                foreach ($this->collArPaymentPendings as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->singleArCashHead !== null) {
                if (!$this->singleArCashHead->isDeleted() && ($this->singleArCashHead->isNew() || $this->singleArCashHead->isModified())) {
                    $affectedRows += $this->singleArCashHead->save($con);
                }
            }

            if ($this->arInvoicesScheduledForDeletion !== null) {
                if (!$this->arInvoicesScheduledForDeletion->isEmpty()) {
                    \ArInvoiceQuery::create()
                        ->filterByPrimaryKeys($this->arInvoicesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->arInvoicesScheduledForDeletion = null;
                }
            }

            if ($this->collArInvoices !== null) {
                foreach ($this->collArInvoices as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->customerShiptosScheduledForDeletion !== null) {
                if (!$this->customerShiptosScheduledForDeletion->isEmpty()) {
                    \CustomerShiptoQuery::create()
                        ->filterByPrimaryKeys($this->customerShiptosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->customerShiptosScheduledForDeletion = null;
                }
            }

            if ($this->collCustomerShiptos !== null) {
                foreach ($this->collCustomerShiptos as $referrerFK) {
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

            if ($this->bookingDayCustomersScheduledForDeletion !== null) {
                if (!$this->bookingDayCustomersScheduledForDeletion->isEmpty()) {
                    \BookingDayCustomerQuery::create()
                        ->filterByPrimaryKeys($this->bookingDayCustomersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->bookingDayCustomersScheduledForDeletion = null;
                }
            }

            if ($this->collBookingDayCustomers !== null) {
                foreach ($this->collBookingDayCustomers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->bookingDayDetailsScheduledForDeletion !== null) {
                if (!$this->bookingDayDetailsScheduledForDeletion->isEmpty()) {
                    \BookingDayDetailQuery::create()
                        ->filterByPrimaryKeys($this->bookingDayDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->bookingDayDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collBookingDayDetails !== null) {
                foreach ($this->collBookingDayDetails as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->bookingsScheduledForDeletion !== null) {
                if (!$this->bookingsScheduledForDeletion->isEmpty()) {
                    foreach ($this->bookingsScheduledForDeletion as $booking) {
                        // need to save related object because we set the relation to null
                        $booking->save($con);
                    }
                    $this->bookingsScheduledForDeletion = null;
                }
            }

            if ($this->collBookings !== null) {
                foreach ($this->collBookings as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->salesHistoriesScheduledForDeletion !== null) {
                if (!$this->salesHistoriesScheduledForDeletion->isEmpty()) {
                    \SalesHistoryQuery::create()
                        ->filterByPrimaryKeys($this->salesHistoriesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->salesHistoriesScheduledForDeletion = null;
                }
            }

            if ($this->collSalesHistories !== null) {
                foreach ($this->collSalesHistories as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->salesOrdersScheduledForDeletion !== null) {
                if (!$this->salesOrdersScheduledForDeletion->isEmpty()) {
                    \SalesOrderQuery::create()
                        ->filterByPrimaryKeys($this->salesOrdersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->salesOrdersScheduledForDeletion = null;
                }
            }

            if ($this->collSalesOrders !== null) {
                foreach ($this->collSalesOrders as $referrerFK) {
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
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUNAME)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuName';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUADR1)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAdr1';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUADR2)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAdr2';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUADR3)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAdr3';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCtry';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCITY)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCity';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuStat';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuZipCode';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUDELIVERYDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuDeliveryDays';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUREMITWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuRemitWhse';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSHIPBIN)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuShipBin';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUALLOWADDONS)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAllowAddOns';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCULMECOMMCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuLmEcommCustId';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUGSUSE2NDBIN)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuGsUse2ndBin';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARSPSALEPER1)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer1';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARSPSALEPER2)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer2';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARSPSALEPER3)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer3';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTBMTAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxCode';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUTAXEXEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuTaxExemNbr';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUPRICLVL)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuPricLvl';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSHIPCOMP)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuShipComp';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUTXBL)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuTxbl';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuPostal';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTBSHIPVIA)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbShipVia';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUBORD)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuBord';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTBTYPECODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbTypeCode';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTBPRICCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbPricCode';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTBCOMMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCommCode';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTMTERMCD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmTermCd';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCREDLMT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCredLmt';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSTMTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuStmtCode';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCREDHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCredHold';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUFINCHRG)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuFinChrg';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUUSERCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuUserCode';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUNEWFC)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuNewFc';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUUNPDFC)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuUnpdFc';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCURBAL)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCurBal';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUBALODUE1)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuBalOdue1';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUBALODUE2)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuBalOdue2';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUBALODUE3)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuBalOdue3';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALEMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSaleMtd';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINVMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInvMtd';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALEYTD)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSaleYtd';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINVYTD)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInvYtd';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUDATEOPEN)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuDateOpen';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCULASTSALEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuLastSaleDate';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUHIGHBAL)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuHighBal';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUBIGSALEMO)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuBigSaleMo';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCULASTPAYDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuLastPayDate';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUAVGPAYDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAvgPayDays';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUUPSZONE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuUpsZone';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUHIGHBALDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuHighBalDate';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO1)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo1';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO1)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo1';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO2)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo2';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO2)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo2';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO3)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo3';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO3)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo3';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO4)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo4';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO4)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo4';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO5)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo5';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO5)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo5';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO6)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo6';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO6)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo6';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO7)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo7';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO7)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo7';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO8)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo8';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO8)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo8';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO9)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo9';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO9)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo9';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO10)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo10';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO10)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo10';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO11)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo11';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO11)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo11';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO12)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo12';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO12)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo12';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO13)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo13';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO13)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo13';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO14)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo14';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO14)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo14';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO15)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo15';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO15)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo15';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO16)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo16';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO16)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo16';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO17)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo17';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO17)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo17';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO18)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo18';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO18)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo18';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO19)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo19';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO19)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo19';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO20)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo20';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO20)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo20';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO21)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo21';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO21)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo21';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO22)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo22';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO22)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo22';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO23)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo23';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO23)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo23';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO24)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSale24mo24';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO24)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInv24mo24';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCULASTPAYAMT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuLastPayAmt';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUORDRTOT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuOrdrTot';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUUSEFRTIN)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuUseFrtIn';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUMYVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuMyVendId';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUADDLPRICDISC)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAddlPricDisc';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUACTIVEINACTIVE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuActiveInactive';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINACTIVEDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuInactiveDate';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCHRGFRT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuChrgFrt';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCOREXDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCoreXDays';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCONTRACTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuContractNbr';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCORELF)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCoreLF';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCOREBANKID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCoreBankId';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUDUNSNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuDunsNbr';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCURFMLVALU)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuRfmlValu';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCUSTPOPARAM)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustPoParam';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUAGELEVEL)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAgeLevel';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTBROUTE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbRoute';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUWGTAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuWgTaxCode';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUACPTSUPERCEDE)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAcptSupercede';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUMSTRCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuMstrCustId';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSURCHGPCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuSurchgPct';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUALLOWSPLIT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuAllowSplit';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCULINEMIN)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuLineMin';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUORDRMIN)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuOrdrMin';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUUPSACCTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuUpsAcctNbr';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUPRTMATCERT)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuPrtMatCert';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUFOBINPUTYN)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuFobInputYn';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUFOBPERLB)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuFobPerLb';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(CustomerTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ar_cust_mast (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'ArcuName':
                        $stmt->bindValue($identifier, $this->arcuname, PDO::PARAM_STR);
                        break;
                    case 'ArcuAdr1':
                        $stmt->bindValue($identifier, $this->arcuadr1, PDO::PARAM_STR);
                        break;
                    case 'ArcuAdr2':
                        $stmt->bindValue($identifier, $this->arcuadr2, PDO::PARAM_STR);
                        break;
                    case 'ArcuAdr3':
                        $stmt->bindValue($identifier, $this->arcuadr3, PDO::PARAM_STR);
                        break;
                    case 'ArcuCtry':
                        $stmt->bindValue($identifier, $this->arcuctry, PDO::PARAM_STR);
                        break;
                    case 'ArcuCity':
                        $stmt->bindValue($identifier, $this->arcucity, PDO::PARAM_STR);
                        break;
                    case 'ArcuStat':
                        $stmt->bindValue($identifier, $this->arcustat, PDO::PARAM_STR);
                        break;
                    case 'ArcuZipCode':
                        $stmt->bindValue($identifier, $this->arcuzipcode, PDO::PARAM_STR);
                        break;
                    case 'ArcuDeliveryDays':
                        $stmt->bindValue($identifier, $this->arcudeliverydays, PDO::PARAM_INT);
                        break;
                    case 'ArcuRemitWhse':
                        $stmt->bindValue($identifier, $this->arcuremitwhse, PDO::PARAM_STR);
                        break;
                    case 'ArcuShipBin':
                        $stmt->bindValue($identifier, $this->arcushipbin, PDO::PARAM_STR);
                        break;
                    case 'ArcuAllowAddOns':
                        $stmt->bindValue($identifier, $this->arcuallowaddons, PDO::PARAM_STR);
                        break;
                    case 'ArcuLmEcommCustId':
                        $stmt->bindValue($identifier, $this->arculmecommcustid, PDO::PARAM_STR);
                        break;
                    case 'ArcuGsUse2ndBin':
                        $stmt->bindValue($identifier, $this->arcugsuse2ndbin, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer1':
                        $stmt->bindValue($identifier, $this->arspsaleper1, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer2':
                        $stmt->bindValue($identifier, $this->arspsaleper2, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer3':
                        $stmt->bindValue($identifier, $this->arspsaleper3, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxCode':
                        $stmt->bindValue($identifier, $this->artbmtaxcode, PDO::PARAM_STR);
                        break;
                    case 'ArcuTaxExemNbr':
                        $stmt->bindValue($identifier, $this->arcutaxexemnbr, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'ArcuPricLvl':
                        $stmt->bindValue($identifier, $this->arcupriclvl, PDO::PARAM_STR);
                        break;
                    case 'ArcuShipComp':
                        $stmt->bindValue($identifier, $this->arcushipcomp, PDO::PARAM_STR);
                        break;
                    case 'ArcuTxbl':
                        $stmt->bindValue($identifier, $this->arcutxbl, PDO::PARAM_STR);
                        break;
                    case 'ArcuPostal':
                        $stmt->bindValue($identifier, $this->arcupostal, PDO::PARAM_STR);
                        break;
                    case 'ArtbShipVia':
                        $stmt->bindValue($identifier, $this->artbshipvia, PDO::PARAM_STR);
                        break;
                    case 'ArcuBord':
                        $stmt->bindValue($identifier, $this->arcubord, PDO::PARAM_STR);
                        break;
                    case 'ArtbTypeCode':
                        $stmt->bindValue($identifier, $this->artbtypecode, PDO::PARAM_STR);
                        break;
                    case 'ArtbPricCode':
                        $stmt->bindValue($identifier, $this->artbpriccode, PDO::PARAM_STR);
                        break;
                    case 'ArtbCommCode':
                        $stmt->bindValue($identifier, $this->artbcommcode, PDO::PARAM_STR);
                        break;
                    case 'ArtmTermCd':
                        $stmt->bindValue($identifier, $this->artmtermcd, PDO::PARAM_STR);
                        break;
                    case 'ArcuCredLmt':
                        $stmt->bindValue($identifier, $this->arcucredlmt, PDO::PARAM_STR);
                        break;
                    case 'ArcuStmtCode':
                        $stmt->bindValue($identifier, $this->arcustmtcode, PDO::PARAM_STR);
                        break;
                    case 'ArcuCredHold':
                        $stmt->bindValue($identifier, $this->arcucredhold, PDO::PARAM_STR);
                        break;
                    case 'ArcuFinChrg':
                        $stmt->bindValue($identifier, $this->arcufinchrg, PDO::PARAM_STR);
                        break;
                    case 'ArcuUserCode':
                        $stmt->bindValue($identifier, $this->arcuusercode, PDO::PARAM_STR);
                        break;
                    case 'ArcuNewFc':
                        $stmt->bindValue($identifier, $this->arcunewfc, PDO::PARAM_STR);
                        break;
                    case 'ArcuUnpdFc':
                        $stmt->bindValue($identifier, $this->arcuunpdfc, PDO::PARAM_STR);
                        break;
                    case 'ArcuCurBal':
                        $stmt->bindValue($identifier, $this->arcucurbal, PDO::PARAM_STR);
                        break;
                    case 'ArcuBalOdue1':
                        $stmt->bindValue($identifier, $this->arcubalodue1, PDO::PARAM_STR);
                        break;
                    case 'ArcuBalOdue2':
                        $stmt->bindValue($identifier, $this->arcubalodue2, PDO::PARAM_STR);
                        break;
                    case 'ArcuBalOdue3':
                        $stmt->bindValue($identifier, $this->arcubalodue3, PDO::PARAM_STR);
                        break;
                    case 'ArcuSaleMtd':
                        $stmt->bindValue($identifier, $this->arcusalemtd, PDO::PARAM_STR);
                        break;
                    case 'ArcuInvMtd':
                        $stmt->bindValue($identifier, $this->arcuinvmtd, PDO::PARAM_INT);
                        break;
                    case 'ArcuSaleYtd':
                        $stmt->bindValue($identifier, $this->arcusaleytd, PDO::PARAM_STR);
                        break;
                    case 'ArcuInvYtd':
                        $stmt->bindValue($identifier, $this->arcuinvytd, PDO::PARAM_INT);
                        break;
                    case 'ArcuDateOpen':
                        $stmt->bindValue($identifier, $this->arcudateopen, PDO::PARAM_STR);
                        break;
                    case 'ArcuLastSaleDate':
                        $stmt->bindValue($identifier, $this->arculastsaledate, PDO::PARAM_STR);
                        break;
                    case 'ArcuHighBal':
                        $stmt->bindValue($identifier, $this->arcuhighbal, PDO::PARAM_STR);
                        break;
                    case 'ArcuBigSaleMo':
                        $stmt->bindValue($identifier, $this->arcubigsalemo, PDO::PARAM_STR);
                        break;
                    case 'ArcuLastPayDate':
                        $stmt->bindValue($identifier, $this->arculastpaydate, PDO::PARAM_STR);
                        break;
                    case 'ArcuAvgPayDays':
                        $stmt->bindValue($identifier, $this->arcuavgpaydays, PDO::PARAM_INT);
                        break;
                    case 'ArcuUpsZone':
                        $stmt->bindValue($identifier, $this->arcuupszone, PDO::PARAM_STR);
                        break;
                    case 'ArcuHighBalDate':
                        $stmt->bindValue($identifier, $this->arcuhighbaldate, PDO::PARAM_STR);
                        break;
                    case 'ArcuSale24mo1':
                        $stmt->bindValue($identifier, $this->arcusale24mo1, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo1':
                        $stmt->bindValue($identifier, $this->arcuinv24mo1, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo2':
                        $stmt->bindValue($identifier, $this->arcusale24mo2, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo2':
                        $stmt->bindValue($identifier, $this->arcuinv24mo2, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo3':
                        $stmt->bindValue($identifier, $this->arcusale24mo3, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo3':
                        $stmt->bindValue($identifier, $this->arcuinv24mo3, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo4':
                        $stmt->bindValue($identifier, $this->arcusale24mo4, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo4':
                        $stmt->bindValue($identifier, $this->arcuinv24mo4, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo5':
                        $stmt->bindValue($identifier, $this->arcusale24mo5, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo5':
                        $stmt->bindValue($identifier, $this->arcuinv24mo5, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo6':
                        $stmt->bindValue($identifier, $this->arcusale24mo6, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo6':
                        $stmt->bindValue($identifier, $this->arcuinv24mo6, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo7':
                        $stmt->bindValue($identifier, $this->arcusale24mo7, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo7':
                        $stmt->bindValue($identifier, $this->arcuinv24mo7, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo8':
                        $stmt->bindValue($identifier, $this->arcusale24mo8, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo8':
                        $stmt->bindValue($identifier, $this->arcuinv24mo8, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo9':
                        $stmt->bindValue($identifier, $this->arcusale24mo9, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo9':
                        $stmt->bindValue($identifier, $this->arcuinv24mo9, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo10':
                        $stmt->bindValue($identifier, $this->arcusale24mo10, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo10':
                        $stmt->bindValue($identifier, $this->arcuinv24mo10, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo11':
                        $stmt->bindValue($identifier, $this->arcusale24mo11, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo11':
                        $stmt->bindValue($identifier, $this->arcuinv24mo11, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo12':
                        $stmt->bindValue($identifier, $this->arcusale24mo12, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo12':
                        $stmt->bindValue($identifier, $this->arcuinv24mo12, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo13':
                        $stmt->bindValue($identifier, $this->arcusale24mo13, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo13':
                        $stmt->bindValue($identifier, $this->arcuinv24mo13, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo14':
                        $stmt->bindValue($identifier, $this->arcusale24mo14, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo14':
                        $stmt->bindValue($identifier, $this->arcuinv24mo14, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo15':
                        $stmt->bindValue($identifier, $this->arcusale24mo15, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo15':
                        $stmt->bindValue($identifier, $this->arcuinv24mo15, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo16':
                        $stmt->bindValue($identifier, $this->arcusale24mo16, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo16':
                        $stmt->bindValue($identifier, $this->arcuinv24mo16, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo17':
                        $stmt->bindValue($identifier, $this->arcusale24mo17, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo17':
                        $stmt->bindValue($identifier, $this->arcuinv24mo17, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo18':
                        $stmt->bindValue($identifier, $this->arcusale24mo18, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo18':
                        $stmt->bindValue($identifier, $this->arcuinv24mo18, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo19':
                        $stmt->bindValue($identifier, $this->arcusale24mo19, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo19':
                        $stmt->bindValue($identifier, $this->arcuinv24mo19, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo20':
                        $stmt->bindValue($identifier, $this->arcusale24mo20, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo20':
                        $stmt->bindValue($identifier, $this->arcuinv24mo20, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo21':
                        $stmt->bindValue($identifier, $this->arcusale24mo21, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo21':
                        $stmt->bindValue($identifier, $this->arcuinv24mo21, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo22':
                        $stmt->bindValue($identifier, $this->arcusale24mo22, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo22':
                        $stmt->bindValue($identifier, $this->arcuinv24mo22, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo23':
                        $stmt->bindValue($identifier, $this->arcusale24mo23, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo23':
                        $stmt->bindValue($identifier, $this->arcuinv24mo23, PDO::PARAM_INT);
                        break;
                    case 'ArcuSale24mo24':
                        $stmt->bindValue($identifier, $this->arcusale24mo24, PDO::PARAM_STR);
                        break;
                    case 'ArcuInv24mo24':
                        $stmt->bindValue($identifier, $this->arcuinv24mo24, PDO::PARAM_INT);
                        break;
                    case 'ArcuLastPayAmt':
                        $stmt->bindValue($identifier, $this->arculastpayamt, PDO::PARAM_STR);
                        break;
                    case 'ArcuOrdrTot':
                        $stmt->bindValue($identifier, $this->arcuordrtot, PDO::PARAM_STR);
                        break;
                    case 'ArcuUseFrtIn':
                        $stmt->bindValue($identifier, $this->arcuusefrtin, PDO::PARAM_STR);
                        break;
                    case 'ArcuMyVendId':
                        $stmt->bindValue($identifier, $this->arcumyvendid, PDO::PARAM_STR);
                        break;
                    case 'ArcuAddlPricDisc':
                        $stmt->bindValue($identifier, $this->arcuaddlpricdisc, PDO::PARAM_STR);
                        break;
                    case 'ArcuActiveInactive':
                        $stmt->bindValue($identifier, $this->arcuactiveinactive, PDO::PARAM_STR);
                        break;
                    case 'ArcuInactiveDate':
                        $stmt->bindValue($identifier, $this->arcuinactivedate, PDO::PARAM_STR);
                        break;
                    case 'ArcuChrgFrt':
                        $stmt->bindValue($identifier, $this->arcuchrgfrt, PDO::PARAM_STR);
                        break;
                    case 'ArcuCoreXDays':
                        $stmt->bindValue($identifier, $this->arcucorexdays, PDO::PARAM_INT);
                        break;
                    case 'ArcuContractNbr':
                        $stmt->bindValue($identifier, $this->arcucontractnbr, PDO::PARAM_STR);
                        break;
                    case 'ArcuCoreLF':
                        $stmt->bindValue($identifier, $this->arcucorelf, PDO::PARAM_STR);
                        break;
                    case 'ArcuCoreBankId':
                        $stmt->bindValue($identifier, $this->arcucorebankid, PDO::PARAM_STR);
                        break;
                    case 'ArcuDunsNbr':
                        $stmt->bindValue($identifier, $this->arcudunsnbr, PDO::PARAM_STR);
                        break;
                    case 'ArcuRfmlValu':
                        $stmt->bindValue($identifier, $this->arcurfmlvalu, PDO::PARAM_INT);
                        break;
                    case 'ArcuCustPoParam':
                        $stmt->bindValue($identifier, $this->arcucustpoparam, PDO::PARAM_STR);
                        break;
                    case 'ArcuAgeLevel':
                        $stmt->bindValue($identifier, $this->arcuagelevel, PDO::PARAM_INT);
                        break;
                    case 'ArtbRoute':
                        $stmt->bindValue($identifier, $this->artbroute, PDO::PARAM_STR);
                        break;
                    case 'ArcuWgTaxCode':
                        $stmt->bindValue($identifier, $this->arcuwgtaxcode, PDO::PARAM_STR);
                        break;
                    case 'ArcuAcptSupercede':
                        $stmt->bindValue($identifier, $this->arcuacptsupercede, PDO::PARAM_STR);
                        break;
                    case 'ArcuMstrCustId':
                        $stmt->bindValue($identifier, $this->arcumstrcustid, PDO::PARAM_STR);
                        break;
                    case 'ArcuSurchgPct':
                        $stmt->bindValue($identifier, $this->arcusurchgpct, PDO::PARAM_STR);
                        break;
                    case 'ArcuAllowSplit':
                        $stmt->bindValue($identifier, $this->arcuallowsplit, PDO::PARAM_STR);
                        break;
                    case 'ArcuLineMin':
                        $stmt->bindValue($identifier, $this->arculinemin, PDO::PARAM_STR);
                        break;
                    case 'ArcuOrdrMin':
                        $stmt->bindValue($identifier, $this->arcuordrmin, PDO::PARAM_STR);
                        break;
                    case 'ArcuUpsAcctNbr':
                        $stmt->bindValue($identifier, $this->arcuupsacctnbr, PDO::PARAM_STR);
                        break;
                    case 'ArcuPrtMatCert':
                        $stmt->bindValue($identifier, $this->arcuprtmatcert, PDO::PARAM_STR);
                        break;
                    case 'ArcuFobInputYn':
                        $stmt->bindValue($identifier, $this->arcufobinputyn, PDO::PARAM_STR);
                        break;
                    case 'ArcuFobPerLb':
                        $stmt->bindValue($identifier, $this->arcufobperlb, PDO::PARAM_STR);
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
        $pos = CustomerTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArcucustid();
                break;
            case 1:
                return $this->getArcuname();
                break;
            case 2:
                return $this->getArcuadr1();
                break;
            case 3:
                return $this->getArcuadr2();
                break;
            case 4:
                return $this->getArcuadr3();
                break;
            case 5:
                return $this->getArcuctry();
                break;
            case 6:
                return $this->getArcucity();
                break;
            case 7:
                return $this->getArcustat();
                break;
            case 8:
                return $this->getArcuzipcode();
                break;
            case 9:
                return $this->getArcudeliverydays();
                break;
            case 10:
                return $this->getArcuremitwhse();
                break;
            case 11:
                return $this->getArcushipbin();
                break;
            case 12:
                return $this->getArcuallowaddons();
                break;
            case 13:
                return $this->getArculmecommcustid();
                break;
            case 14:
                return $this->getArcugsuse2ndbin();
                break;
            case 15:
                return $this->getArspsaleper1();
                break;
            case 16:
                return $this->getArspsaleper2();
                break;
            case 17:
                return $this->getArspsaleper3();
                break;
            case 18:
                return $this->getArtbmtaxcode();
                break;
            case 19:
                return $this->getArcutaxexemnbr();
                break;
            case 20:
                return $this->getIntbwhse();
                break;
            case 21:
                return $this->getArcupriclvl();
                break;
            case 22:
                return $this->getArcushipcomp();
                break;
            case 23:
                return $this->getArcutxbl();
                break;
            case 24:
                return $this->getArcupostal();
                break;
            case 25:
                return $this->getArtbshipvia();
                break;
            case 26:
                return $this->getArcubord();
                break;
            case 27:
                return $this->getArtbtypecode();
                break;
            case 28:
                return $this->getArtbpriccode();
                break;
            case 29:
                return $this->getArtbcommcode();
                break;
            case 30:
                return $this->getArtmtermcd();
                break;
            case 31:
                return $this->getArcucredlmt();
                break;
            case 32:
                return $this->getArcustmtcode();
                break;
            case 33:
                return $this->getArcucredhold();
                break;
            case 34:
                return $this->getArcufinchrg();
                break;
            case 35:
                return $this->getArcuusercode();
                break;
            case 36:
                return $this->getArcunewfc();
                break;
            case 37:
                return $this->getArcuunpdfc();
                break;
            case 38:
                return $this->getArcucurbal();
                break;
            case 39:
                return $this->getArcubalodue1();
                break;
            case 40:
                return $this->getArcubalodue2();
                break;
            case 41:
                return $this->getArcubalodue3();
                break;
            case 42:
                return $this->getArcusalemtd();
                break;
            case 43:
                return $this->getArcuinvmtd();
                break;
            case 44:
                return $this->getArcusaleytd();
                break;
            case 45:
                return $this->getArcuinvytd();
                break;
            case 46:
                return $this->getArcudateopen();
                break;
            case 47:
                return $this->getArculastsaledate();
                break;
            case 48:
                return $this->getArcuhighbal();
                break;
            case 49:
                return $this->getArcubigsalemo();
                break;
            case 50:
                return $this->getArculastpaydate();
                break;
            case 51:
                return $this->getArcuavgpaydays();
                break;
            case 52:
                return $this->getArcuupszone();
                break;
            case 53:
                return $this->getArcuhighbaldate();
                break;
            case 54:
                return $this->getArcusale24mo1();
                break;
            case 55:
                return $this->getArcuinv24mo1();
                break;
            case 56:
                return $this->getArcusale24mo2();
                break;
            case 57:
                return $this->getArcuinv24mo2();
                break;
            case 58:
                return $this->getArcusale24mo3();
                break;
            case 59:
                return $this->getArcuinv24mo3();
                break;
            case 60:
                return $this->getArcusale24mo4();
                break;
            case 61:
                return $this->getArcuinv24mo4();
                break;
            case 62:
                return $this->getArcusale24mo5();
                break;
            case 63:
                return $this->getArcuinv24mo5();
                break;
            case 64:
                return $this->getArcusale24mo6();
                break;
            case 65:
                return $this->getArcuinv24mo6();
                break;
            case 66:
                return $this->getArcusale24mo7();
                break;
            case 67:
                return $this->getArcuinv24mo7();
                break;
            case 68:
                return $this->getArcusale24mo8();
                break;
            case 69:
                return $this->getArcuinv24mo8();
                break;
            case 70:
                return $this->getArcusale24mo9();
                break;
            case 71:
                return $this->getArcuinv24mo9();
                break;
            case 72:
                return $this->getArcusale24mo10();
                break;
            case 73:
                return $this->getArcuinv24mo10();
                break;
            case 74:
                return $this->getArcusale24mo11();
                break;
            case 75:
                return $this->getArcuinv24mo11();
                break;
            case 76:
                return $this->getArcusale24mo12();
                break;
            case 77:
                return $this->getArcuinv24mo12();
                break;
            case 78:
                return $this->getArcusale24mo13();
                break;
            case 79:
                return $this->getArcuinv24mo13();
                break;
            case 80:
                return $this->getArcusale24mo14();
                break;
            case 81:
                return $this->getArcuinv24mo14();
                break;
            case 82:
                return $this->getArcusale24mo15();
                break;
            case 83:
                return $this->getArcuinv24mo15();
                break;
            case 84:
                return $this->getArcusale24mo16();
                break;
            case 85:
                return $this->getArcuinv24mo16();
                break;
            case 86:
                return $this->getArcusale24mo17();
                break;
            case 87:
                return $this->getArcuinv24mo17();
                break;
            case 88:
                return $this->getArcusale24mo18();
                break;
            case 89:
                return $this->getArcuinv24mo18();
                break;
            case 90:
                return $this->getArcusale24mo19();
                break;
            case 91:
                return $this->getArcuinv24mo19();
                break;
            case 92:
                return $this->getArcusale24mo20();
                break;
            case 93:
                return $this->getArcuinv24mo20();
                break;
            case 94:
                return $this->getArcusale24mo21();
                break;
            case 95:
                return $this->getArcuinv24mo21();
                break;
            case 96:
                return $this->getArcusale24mo22();
                break;
            case 97:
                return $this->getArcuinv24mo22();
                break;
            case 98:
                return $this->getArcusale24mo23();
                break;
            case 99:
                return $this->getArcuinv24mo23();
                break;
            case 100:
                return $this->getArcusale24mo24();
                break;
            case 101:
                return $this->getArcuinv24mo24();
                break;
            case 102:
                return $this->getArculastpayamt();
                break;
            case 103:
                return $this->getArcuordrtot();
                break;
            case 104:
                return $this->getArcuusefrtin();
                break;
            case 105:
                return $this->getArcumyvendid();
                break;
            case 106:
                return $this->getArcuaddlpricdisc();
                break;
            case 107:
                return $this->getArcuactiveinactive();
                break;
            case 108:
                return $this->getArcuinactivedate();
                break;
            case 109:
                return $this->getArcuchrgfrt();
                break;
            case 110:
                return $this->getArcucorexdays();
                break;
            case 111:
                return $this->getArcucontractnbr();
                break;
            case 112:
                return $this->getArcucorelf();
                break;
            case 113:
                return $this->getArcucorebankid();
                break;
            case 114:
                return $this->getArcudunsnbr();
                break;
            case 115:
                return $this->getArcurfmlvalu();
                break;
            case 116:
                return $this->getArcucustpoparam();
                break;
            case 117:
                return $this->getArcuagelevel();
                break;
            case 118:
                return $this->getArtbroute();
                break;
            case 119:
                return $this->getArcuwgtaxcode();
                break;
            case 120:
                return $this->getArcuacptsupercede();
                break;
            case 121:
                return $this->getArcumstrcustid();
                break;
            case 122:
                return $this->getArcusurchgpct();
                break;
            case 123:
                return $this->getArcuallowsplit();
                break;
            case 124:
                return $this->getArculinemin();
                break;
            case 125:
                return $this->getArcuordrmin();
                break;
            case 126:
                return $this->getArcuupsacctnbr();
                break;
            case 127:
                return $this->getArcuprtmatcert();
                break;
            case 128:
                return $this->getArcufobinputyn();
                break;
            case 129:
                return $this->getArcufobperlb();
                break;
            case 130:
                return $this->getDateupdtd();
                break;
            case 131:
                return $this->getTimeupdtd();
                break;
            case 132:
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

        if (isset($alreadyDumpedObjects['Customer'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Customer'][$this->hashCode()] = true;
        $keys = CustomerTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArcucustid(),
            $keys[1] => $this->getArcuname(),
            $keys[2] => $this->getArcuadr1(),
            $keys[3] => $this->getArcuadr2(),
            $keys[4] => $this->getArcuadr3(),
            $keys[5] => $this->getArcuctry(),
            $keys[6] => $this->getArcucity(),
            $keys[7] => $this->getArcustat(),
            $keys[8] => $this->getArcuzipcode(),
            $keys[9] => $this->getArcudeliverydays(),
            $keys[10] => $this->getArcuremitwhse(),
            $keys[11] => $this->getArcushipbin(),
            $keys[12] => $this->getArcuallowaddons(),
            $keys[13] => $this->getArculmecommcustid(),
            $keys[14] => $this->getArcugsuse2ndbin(),
            $keys[15] => $this->getArspsaleper1(),
            $keys[16] => $this->getArspsaleper2(),
            $keys[17] => $this->getArspsaleper3(),
            $keys[18] => $this->getArtbmtaxcode(),
            $keys[19] => $this->getArcutaxexemnbr(),
            $keys[20] => $this->getIntbwhse(),
            $keys[21] => $this->getArcupriclvl(),
            $keys[22] => $this->getArcushipcomp(),
            $keys[23] => $this->getArcutxbl(),
            $keys[24] => $this->getArcupostal(),
            $keys[25] => $this->getArtbshipvia(),
            $keys[26] => $this->getArcubord(),
            $keys[27] => $this->getArtbtypecode(),
            $keys[28] => $this->getArtbpriccode(),
            $keys[29] => $this->getArtbcommcode(),
            $keys[30] => $this->getArtmtermcd(),
            $keys[31] => $this->getArcucredlmt(),
            $keys[32] => $this->getArcustmtcode(),
            $keys[33] => $this->getArcucredhold(),
            $keys[34] => $this->getArcufinchrg(),
            $keys[35] => $this->getArcuusercode(),
            $keys[36] => $this->getArcunewfc(),
            $keys[37] => $this->getArcuunpdfc(),
            $keys[38] => $this->getArcucurbal(),
            $keys[39] => $this->getArcubalodue1(),
            $keys[40] => $this->getArcubalodue2(),
            $keys[41] => $this->getArcubalodue3(),
            $keys[42] => $this->getArcusalemtd(),
            $keys[43] => $this->getArcuinvmtd(),
            $keys[44] => $this->getArcusaleytd(),
            $keys[45] => $this->getArcuinvytd(),
            $keys[46] => $this->getArcudateopen(),
            $keys[47] => $this->getArculastsaledate(),
            $keys[48] => $this->getArcuhighbal(),
            $keys[49] => $this->getArcubigsalemo(),
            $keys[50] => $this->getArculastpaydate(),
            $keys[51] => $this->getArcuavgpaydays(),
            $keys[52] => $this->getArcuupszone(),
            $keys[53] => $this->getArcuhighbaldate(),
            $keys[54] => $this->getArcusale24mo1(),
            $keys[55] => $this->getArcuinv24mo1(),
            $keys[56] => $this->getArcusale24mo2(),
            $keys[57] => $this->getArcuinv24mo2(),
            $keys[58] => $this->getArcusale24mo3(),
            $keys[59] => $this->getArcuinv24mo3(),
            $keys[60] => $this->getArcusale24mo4(),
            $keys[61] => $this->getArcuinv24mo4(),
            $keys[62] => $this->getArcusale24mo5(),
            $keys[63] => $this->getArcuinv24mo5(),
            $keys[64] => $this->getArcusale24mo6(),
            $keys[65] => $this->getArcuinv24mo6(),
            $keys[66] => $this->getArcusale24mo7(),
            $keys[67] => $this->getArcuinv24mo7(),
            $keys[68] => $this->getArcusale24mo8(),
            $keys[69] => $this->getArcuinv24mo8(),
            $keys[70] => $this->getArcusale24mo9(),
            $keys[71] => $this->getArcuinv24mo9(),
            $keys[72] => $this->getArcusale24mo10(),
            $keys[73] => $this->getArcuinv24mo10(),
            $keys[74] => $this->getArcusale24mo11(),
            $keys[75] => $this->getArcuinv24mo11(),
            $keys[76] => $this->getArcusale24mo12(),
            $keys[77] => $this->getArcuinv24mo12(),
            $keys[78] => $this->getArcusale24mo13(),
            $keys[79] => $this->getArcuinv24mo13(),
            $keys[80] => $this->getArcusale24mo14(),
            $keys[81] => $this->getArcuinv24mo14(),
            $keys[82] => $this->getArcusale24mo15(),
            $keys[83] => $this->getArcuinv24mo15(),
            $keys[84] => $this->getArcusale24mo16(),
            $keys[85] => $this->getArcuinv24mo16(),
            $keys[86] => $this->getArcusale24mo17(),
            $keys[87] => $this->getArcuinv24mo17(),
            $keys[88] => $this->getArcusale24mo18(),
            $keys[89] => $this->getArcuinv24mo18(),
            $keys[90] => $this->getArcusale24mo19(),
            $keys[91] => $this->getArcuinv24mo19(),
            $keys[92] => $this->getArcusale24mo20(),
            $keys[93] => $this->getArcuinv24mo20(),
            $keys[94] => $this->getArcusale24mo21(),
            $keys[95] => $this->getArcuinv24mo21(),
            $keys[96] => $this->getArcusale24mo22(),
            $keys[97] => $this->getArcuinv24mo22(),
            $keys[98] => $this->getArcusale24mo23(),
            $keys[99] => $this->getArcuinv24mo23(),
            $keys[100] => $this->getArcusale24mo24(),
            $keys[101] => $this->getArcuinv24mo24(),
            $keys[102] => $this->getArculastpayamt(),
            $keys[103] => $this->getArcuordrtot(),
            $keys[104] => $this->getArcuusefrtin(),
            $keys[105] => $this->getArcumyvendid(),
            $keys[106] => $this->getArcuaddlpricdisc(),
            $keys[107] => $this->getArcuactiveinactive(),
            $keys[108] => $this->getArcuinactivedate(),
            $keys[109] => $this->getArcuchrgfrt(),
            $keys[110] => $this->getArcucorexdays(),
            $keys[111] => $this->getArcucontractnbr(),
            $keys[112] => $this->getArcucorelf(),
            $keys[113] => $this->getArcucorebankid(),
            $keys[114] => $this->getArcudunsnbr(),
            $keys[115] => $this->getArcurfmlvalu(),
            $keys[116] => $this->getArcucustpoparam(),
            $keys[117] => $this->getArcuagelevel(),
            $keys[118] => $this->getArtbroute(),
            $keys[119] => $this->getArcuwgtaxcode(),
            $keys[120] => $this->getArcuacptsupercede(),
            $keys[121] => $this->getArcumstrcustid(),
            $keys[122] => $this->getArcusurchgpct(),
            $keys[123] => $this->getArcuallowsplit(),
            $keys[124] => $this->getArculinemin(),
            $keys[125] => $this->getArcuordrmin(),
            $keys[126] => $this->getArcuupsacctnbr(),
            $keys[127] => $this->getArcuprtmatcert(),
            $keys[128] => $this->getArcufobinputyn(),
            $keys[129] => $this->getArcufobperlb(),
            $keys[130] => $this->getDateupdtd(),
            $keys[131] => $this->getTimeupdtd(),
            $keys[132] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aArCommissionCode) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'arCommissionCode';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_cust_comm';
                        break;
                    default:
                        $key = 'ArCommissionCode';
                }

                $result[$key] = $this->aArCommissionCode->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aShipvia) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'shipvia';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_cust_svia';
                        break;
                    default:
                        $key = 'Shipvia';
                }

                $result[$key] = $this->aShipvia->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSoFreightRate) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'soFreightRate';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_frtrate';
                        break;
                    default:
                        $key = 'SoFreightRate';
                }

                $result[$key] = $this->aSoFreightRate->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collArCust3partyFreights) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'arCust3partyFreights';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_3parties';
                        break;
                    default:
                        $key = 'ArCust3partyFreights';
                }

                $result[$key] = $this->collArCust3partyFreights->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collArPaymentPendings) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'arPaymentPendings';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_cash_dets';
                        break;
                    default:
                        $key = 'ArPaymentPendings';
                }

                $result[$key] = $this->collArPaymentPendings->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->singleArCashHead) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'arCashHead';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_cash_head';
                        break;
                    default:
                        $key = 'ArCashHead';
                }

                $result[$key] = $this->singleArCashHead->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
            }
            if (null !== $this->collArInvoices) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'arInvoices';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_invs';
                        break;
                    default:
                        $key = 'ArInvoices';
                }

                $result[$key] = $this->collArInvoices->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCustomerShiptos) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'customerShiptos';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_ship_tos';
                        break;
                    default:
                        $key = 'CustomerShiptos';
                }

                $result[$key] = $this->collCustomerShiptos->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
            if (null !== $this->collBookingDayCustomers) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'bookingDayCustomers';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_book_by_day_custs';
                        break;
                    default:
                        $key = 'BookingDayCustomers';
                }

                $result[$key] = $this->collBookingDayCustomers->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collBookingDayDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'bookingDayDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_book_by_day_dets';
                        break;
                    default:
                        $key = 'BookingDayDetails';
                }

                $result[$key] = $this->collBookingDayDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collBookings) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'bookings';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_book_log_heads';
                        break;
                    default:
                        $key = 'Bookings';
                }

                $result[$key] = $this->collBookings->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSalesHistories) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesHistories';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_head_hists';
                        break;
                    default:
                        $key = 'SalesHistories';
                }

                $result[$key] = $this->collSalesHistories->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSalesOrders) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesOrders';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_headers';
                        break;
                    default:
                        $key = 'SalesOrders';
                }

                $result[$key] = $this->collSalesOrders->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Customer
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = CustomerTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Customer
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArcucustid($value);
                break;
            case 1:
                $this->setArcuname($value);
                break;
            case 2:
                $this->setArcuadr1($value);
                break;
            case 3:
                $this->setArcuadr2($value);
                break;
            case 4:
                $this->setArcuadr3($value);
                break;
            case 5:
                $this->setArcuctry($value);
                break;
            case 6:
                $this->setArcucity($value);
                break;
            case 7:
                $this->setArcustat($value);
                break;
            case 8:
                $this->setArcuzipcode($value);
                break;
            case 9:
                $this->setArcudeliverydays($value);
                break;
            case 10:
                $this->setArcuremitwhse($value);
                break;
            case 11:
                $this->setArcushipbin($value);
                break;
            case 12:
                $this->setArcuallowaddons($value);
                break;
            case 13:
                $this->setArculmecommcustid($value);
                break;
            case 14:
                $this->setArcugsuse2ndbin($value);
                break;
            case 15:
                $this->setArspsaleper1($value);
                break;
            case 16:
                $this->setArspsaleper2($value);
                break;
            case 17:
                $this->setArspsaleper3($value);
                break;
            case 18:
                $this->setArtbmtaxcode($value);
                break;
            case 19:
                $this->setArcutaxexemnbr($value);
                break;
            case 20:
                $this->setIntbwhse($value);
                break;
            case 21:
                $this->setArcupriclvl($value);
                break;
            case 22:
                $this->setArcushipcomp($value);
                break;
            case 23:
                $this->setArcutxbl($value);
                break;
            case 24:
                $this->setArcupostal($value);
                break;
            case 25:
                $this->setArtbshipvia($value);
                break;
            case 26:
                $this->setArcubord($value);
                break;
            case 27:
                $this->setArtbtypecode($value);
                break;
            case 28:
                $this->setArtbpriccode($value);
                break;
            case 29:
                $this->setArtbcommcode($value);
                break;
            case 30:
                $this->setArtmtermcd($value);
                break;
            case 31:
                $this->setArcucredlmt($value);
                break;
            case 32:
                $this->setArcustmtcode($value);
                break;
            case 33:
                $this->setArcucredhold($value);
                break;
            case 34:
                $this->setArcufinchrg($value);
                break;
            case 35:
                $this->setArcuusercode($value);
                break;
            case 36:
                $this->setArcunewfc($value);
                break;
            case 37:
                $this->setArcuunpdfc($value);
                break;
            case 38:
                $this->setArcucurbal($value);
                break;
            case 39:
                $this->setArcubalodue1($value);
                break;
            case 40:
                $this->setArcubalodue2($value);
                break;
            case 41:
                $this->setArcubalodue3($value);
                break;
            case 42:
                $this->setArcusalemtd($value);
                break;
            case 43:
                $this->setArcuinvmtd($value);
                break;
            case 44:
                $this->setArcusaleytd($value);
                break;
            case 45:
                $this->setArcuinvytd($value);
                break;
            case 46:
                $this->setArcudateopen($value);
                break;
            case 47:
                $this->setArculastsaledate($value);
                break;
            case 48:
                $this->setArcuhighbal($value);
                break;
            case 49:
                $this->setArcubigsalemo($value);
                break;
            case 50:
                $this->setArculastpaydate($value);
                break;
            case 51:
                $this->setArcuavgpaydays($value);
                break;
            case 52:
                $this->setArcuupszone($value);
                break;
            case 53:
                $this->setArcuhighbaldate($value);
                break;
            case 54:
                $this->setArcusale24mo1($value);
                break;
            case 55:
                $this->setArcuinv24mo1($value);
                break;
            case 56:
                $this->setArcusale24mo2($value);
                break;
            case 57:
                $this->setArcuinv24mo2($value);
                break;
            case 58:
                $this->setArcusale24mo3($value);
                break;
            case 59:
                $this->setArcuinv24mo3($value);
                break;
            case 60:
                $this->setArcusale24mo4($value);
                break;
            case 61:
                $this->setArcuinv24mo4($value);
                break;
            case 62:
                $this->setArcusale24mo5($value);
                break;
            case 63:
                $this->setArcuinv24mo5($value);
                break;
            case 64:
                $this->setArcusale24mo6($value);
                break;
            case 65:
                $this->setArcuinv24mo6($value);
                break;
            case 66:
                $this->setArcusale24mo7($value);
                break;
            case 67:
                $this->setArcuinv24mo7($value);
                break;
            case 68:
                $this->setArcusale24mo8($value);
                break;
            case 69:
                $this->setArcuinv24mo8($value);
                break;
            case 70:
                $this->setArcusale24mo9($value);
                break;
            case 71:
                $this->setArcuinv24mo9($value);
                break;
            case 72:
                $this->setArcusale24mo10($value);
                break;
            case 73:
                $this->setArcuinv24mo10($value);
                break;
            case 74:
                $this->setArcusale24mo11($value);
                break;
            case 75:
                $this->setArcuinv24mo11($value);
                break;
            case 76:
                $this->setArcusale24mo12($value);
                break;
            case 77:
                $this->setArcuinv24mo12($value);
                break;
            case 78:
                $this->setArcusale24mo13($value);
                break;
            case 79:
                $this->setArcuinv24mo13($value);
                break;
            case 80:
                $this->setArcusale24mo14($value);
                break;
            case 81:
                $this->setArcuinv24mo14($value);
                break;
            case 82:
                $this->setArcusale24mo15($value);
                break;
            case 83:
                $this->setArcuinv24mo15($value);
                break;
            case 84:
                $this->setArcusale24mo16($value);
                break;
            case 85:
                $this->setArcuinv24mo16($value);
                break;
            case 86:
                $this->setArcusale24mo17($value);
                break;
            case 87:
                $this->setArcuinv24mo17($value);
                break;
            case 88:
                $this->setArcusale24mo18($value);
                break;
            case 89:
                $this->setArcuinv24mo18($value);
                break;
            case 90:
                $this->setArcusale24mo19($value);
                break;
            case 91:
                $this->setArcuinv24mo19($value);
                break;
            case 92:
                $this->setArcusale24mo20($value);
                break;
            case 93:
                $this->setArcuinv24mo20($value);
                break;
            case 94:
                $this->setArcusale24mo21($value);
                break;
            case 95:
                $this->setArcuinv24mo21($value);
                break;
            case 96:
                $this->setArcusale24mo22($value);
                break;
            case 97:
                $this->setArcuinv24mo22($value);
                break;
            case 98:
                $this->setArcusale24mo23($value);
                break;
            case 99:
                $this->setArcuinv24mo23($value);
                break;
            case 100:
                $this->setArcusale24mo24($value);
                break;
            case 101:
                $this->setArcuinv24mo24($value);
                break;
            case 102:
                $this->setArculastpayamt($value);
                break;
            case 103:
                $this->setArcuordrtot($value);
                break;
            case 104:
                $this->setArcuusefrtin($value);
                break;
            case 105:
                $this->setArcumyvendid($value);
                break;
            case 106:
                $this->setArcuaddlpricdisc($value);
                break;
            case 107:
                $this->setArcuactiveinactive($value);
                break;
            case 108:
                $this->setArcuinactivedate($value);
                break;
            case 109:
                $this->setArcuchrgfrt($value);
                break;
            case 110:
                $this->setArcucorexdays($value);
                break;
            case 111:
                $this->setArcucontractnbr($value);
                break;
            case 112:
                $this->setArcucorelf($value);
                break;
            case 113:
                $this->setArcucorebankid($value);
                break;
            case 114:
                $this->setArcudunsnbr($value);
                break;
            case 115:
                $this->setArcurfmlvalu($value);
                break;
            case 116:
                $this->setArcucustpoparam($value);
                break;
            case 117:
                $this->setArcuagelevel($value);
                break;
            case 118:
                $this->setArtbroute($value);
                break;
            case 119:
                $this->setArcuwgtaxcode($value);
                break;
            case 120:
                $this->setArcuacptsupercede($value);
                break;
            case 121:
                $this->setArcumstrcustid($value);
                break;
            case 122:
                $this->setArcusurchgpct($value);
                break;
            case 123:
                $this->setArcuallowsplit($value);
                break;
            case 124:
                $this->setArculinemin($value);
                break;
            case 125:
                $this->setArcuordrmin($value);
                break;
            case 126:
                $this->setArcuupsacctnbr($value);
                break;
            case 127:
                $this->setArcuprtmatcert($value);
                break;
            case 128:
                $this->setArcufobinputyn($value);
                break;
            case 129:
                $this->setArcufobperlb($value);
                break;
            case 130:
                $this->setDateupdtd($value);
                break;
            case 131:
                $this->setTimeupdtd($value);
                break;
            case 132:
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
        $keys = CustomerTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArcucustid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArcuname($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArcuadr1($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArcuadr2($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArcuadr3($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArcuctry($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArcucity($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArcustat($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArcuzipcode($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArcudeliverydays($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArcuremitwhse($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArcushipbin($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArcuallowaddons($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setArculmecommcustid($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setArcugsuse2ndbin($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setArspsaleper1($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setArspsaleper2($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setArspsaleper3($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setArtbmtaxcode($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setArcutaxexemnbr($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setIntbwhse($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setArcupriclvl($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setArcushipcomp($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setArcutxbl($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setArcupostal($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setArtbshipvia($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setArcubord($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setArtbtypecode($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setArtbpriccode($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setArtbcommcode($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setArtmtermcd($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setArcucredlmt($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setArcustmtcode($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setArcucredhold($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setArcufinchrg($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setArcuusercode($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setArcunewfc($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setArcuunpdfc($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setArcucurbal($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setArcubalodue1($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setArcubalodue2($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setArcubalodue3($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setArcusalemtd($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setArcuinvmtd($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setArcusaleytd($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setArcuinvytd($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setArcudateopen($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setArculastsaledate($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setArcuhighbal($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setArcubigsalemo($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setArculastpaydate($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setArcuavgpaydays($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setArcuupszone($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setArcuhighbaldate($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setArcusale24mo1($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setArcuinv24mo1($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setArcusale24mo2($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setArcuinv24mo2($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setArcusale24mo3($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setArcuinv24mo3($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setArcusale24mo4($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setArcuinv24mo4($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setArcusale24mo5($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setArcuinv24mo5($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setArcusale24mo6($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setArcuinv24mo6($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setArcusale24mo7($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setArcuinv24mo7($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setArcusale24mo8($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setArcuinv24mo8($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setArcusale24mo9($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setArcuinv24mo9($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setArcusale24mo10($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setArcuinv24mo10($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setArcusale24mo11($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setArcuinv24mo11($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setArcusale24mo12($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setArcuinv24mo12($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setArcusale24mo13($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setArcuinv24mo13($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setArcusale24mo14($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setArcuinv24mo14($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setArcusale24mo15($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setArcuinv24mo15($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setArcusale24mo16($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setArcuinv24mo16($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setArcusale24mo17($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setArcuinv24mo17($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setArcusale24mo18($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setArcuinv24mo18($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setArcusale24mo19($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setArcuinv24mo19($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setArcusale24mo20($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setArcuinv24mo20($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setArcusale24mo21($arr[$keys[94]]);
        }
        if (array_key_exists($keys[95], $arr)) {
            $this->setArcuinv24mo21($arr[$keys[95]]);
        }
        if (array_key_exists($keys[96], $arr)) {
            $this->setArcusale24mo22($arr[$keys[96]]);
        }
        if (array_key_exists($keys[97], $arr)) {
            $this->setArcuinv24mo22($arr[$keys[97]]);
        }
        if (array_key_exists($keys[98], $arr)) {
            $this->setArcusale24mo23($arr[$keys[98]]);
        }
        if (array_key_exists($keys[99], $arr)) {
            $this->setArcuinv24mo23($arr[$keys[99]]);
        }
        if (array_key_exists($keys[100], $arr)) {
            $this->setArcusale24mo24($arr[$keys[100]]);
        }
        if (array_key_exists($keys[101], $arr)) {
            $this->setArcuinv24mo24($arr[$keys[101]]);
        }
        if (array_key_exists($keys[102], $arr)) {
            $this->setArculastpayamt($arr[$keys[102]]);
        }
        if (array_key_exists($keys[103], $arr)) {
            $this->setArcuordrtot($arr[$keys[103]]);
        }
        if (array_key_exists($keys[104], $arr)) {
            $this->setArcuusefrtin($arr[$keys[104]]);
        }
        if (array_key_exists($keys[105], $arr)) {
            $this->setArcumyvendid($arr[$keys[105]]);
        }
        if (array_key_exists($keys[106], $arr)) {
            $this->setArcuaddlpricdisc($arr[$keys[106]]);
        }
        if (array_key_exists($keys[107], $arr)) {
            $this->setArcuactiveinactive($arr[$keys[107]]);
        }
        if (array_key_exists($keys[108], $arr)) {
            $this->setArcuinactivedate($arr[$keys[108]]);
        }
        if (array_key_exists($keys[109], $arr)) {
            $this->setArcuchrgfrt($arr[$keys[109]]);
        }
        if (array_key_exists($keys[110], $arr)) {
            $this->setArcucorexdays($arr[$keys[110]]);
        }
        if (array_key_exists($keys[111], $arr)) {
            $this->setArcucontractnbr($arr[$keys[111]]);
        }
        if (array_key_exists($keys[112], $arr)) {
            $this->setArcucorelf($arr[$keys[112]]);
        }
        if (array_key_exists($keys[113], $arr)) {
            $this->setArcucorebankid($arr[$keys[113]]);
        }
        if (array_key_exists($keys[114], $arr)) {
            $this->setArcudunsnbr($arr[$keys[114]]);
        }
        if (array_key_exists($keys[115], $arr)) {
            $this->setArcurfmlvalu($arr[$keys[115]]);
        }
        if (array_key_exists($keys[116], $arr)) {
            $this->setArcucustpoparam($arr[$keys[116]]);
        }
        if (array_key_exists($keys[117], $arr)) {
            $this->setArcuagelevel($arr[$keys[117]]);
        }
        if (array_key_exists($keys[118], $arr)) {
            $this->setArtbroute($arr[$keys[118]]);
        }
        if (array_key_exists($keys[119], $arr)) {
            $this->setArcuwgtaxcode($arr[$keys[119]]);
        }
        if (array_key_exists($keys[120], $arr)) {
            $this->setArcuacptsupercede($arr[$keys[120]]);
        }
        if (array_key_exists($keys[121], $arr)) {
            $this->setArcumstrcustid($arr[$keys[121]]);
        }
        if (array_key_exists($keys[122], $arr)) {
            $this->setArcusurchgpct($arr[$keys[122]]);
        }
        if (array_key_exists($keys[123], $arr)) {
            $this->setArcuallowsplit($arr[$keys[123]]);
        }
        if (array_key_exists($keys[124], $arr)) {
            $this->setArculinemin($arr[$keys[124]]);
        }
        if (array_key_exists($keys[125], $arr)) {
            $this->setArcuordrmin($arr[$keys[125]]);
        }
        if (array_key_exists($keys[126], $arr)) {
            $this->setArcuupsacctnbr($arr[$keys[126]]);
        }
        if (array_key_exists($keys[127], $arr)) {
            $this->setArcuprtmatcert($arr[$keys[127]]);
        }
        if (array_key_exists($keys[128], $arr)) {
            $this->setArcufobinputyn($arr[$keys[128]]);
        }
        if (array_key_exists($keys[129], $arr)) {
            $this->setArcufobperlb($arr[$keys[129]]);
        }
        if (array_key_exists($keys[130], $arr)) {
            $this->setDateupdtd($arr[$keys[130]]);
        }
        if (array_key_exists($keys[131], $arr)) {
            $this->setTimeupdtd($arr[$keys[131]]);
        }
        if (array_key_exists($keys[132], $arr)) {
            $this->setDummy($arr[$keys[132]]);
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
     * @return $this|\Customer The current object, for fluid interface
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
        $criteria = new Criteria(CustomerTableMap::DATABASE_NAME);

        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCUSTID)) {
            $criteria->add(CustomerTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUNAME)) {
            $criteria->add(CustomerTableMap::COL_ARCUNAME, $this->arcuname);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUADR1)) {
            $criteria->add(CustomerTableMap::COL_ARCUADR1, $this->arcuadr1);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUADR2)) {
            $criteria->add(CustomerTableMap::COL_ARCUADR2, $this->arcuadr2);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUADR3)) {
            $criteria->add(CustomerTableMap::COL_ARCUADR3, $this->arcuadr3);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCTRY)) {
            $criteria->add(CustomerTableMap::COL_ARCUCTRY, $this->arcuctry);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCITY)) {
            $criteria->add(CustomerTableMap::COL_ARCUCITY, $this->arcucity);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSTAT)) {
            $criteria->add(CustomerTableMap::COL_ARCUSTAT, $this->arcustat);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUZIPCODE)) {
            $criteria->add(CustomerTableMap::COL_ARCUZIPCODE, $this->arcuzipcode);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUDELIVERYDAYS)) {
            $criteria->add(CustomerTableMap::COL_ARCUDELIVERYDAYS, $this->arcudeliverydays);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUREMITWHSE)) {
            $criteria->add(CustomerTableMap::COL_ARCUREMITWHSE, $this->arcuremitwhse);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSHIPBIN)) {
            $criteria->add(CustomerTableMap::COL_ARCUSHIPBIN, $this->arcushipbin);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUALLOWADDONS)) {
            $criteria->add(CustomerTableMap::COL_ARCUALLOWADDONS, $this->arcuallowaddons);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCULMECOMMCUSTID)) {
            $criteria->add(CustomerTableMap::COL_ARCULMECOMMCUSTID, $this->arculmecommcustid);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUGSUSE2NDBIN)) {
            $criteria->add(CustomerTableMap::COL_ARCUGSUSE2NDBIN, $this->arcugsuse2ndbin);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARSPSALEPER1)) {
            $criteria->add(CustomerTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARSPSALEPER2)) {
            $criteria->add(CustomerTableMap::COL_ARSPSALEPER2, $this->arspsaleper2);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARSPSALEPER3)) {
            $criteria->add(CustomerTableMap::COL_ARSPSALEPER3, $this->arspsaleper3);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTBMTAXCODE)) {
            $criteria->add(CustomerTableMap::COL_ARTBMTAXCODE, $this->artbmtaxcode);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUTAXEXEMNBR)) {
            $criteria->add(CustomerTableMap::COL_ARCUTAXEXEMNBR, $this->arcutaxexemnbr);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_INTBWHSE)) {
            $criteria->add(CustomerTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUPRICLVL)) {
            $criteria->add(CustomerTableMap::COL_ARCUPRICLVL, $this->arcupriclvl);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSHIPCOMP)) {
            $criteria->add(CustomerTableMap::COL_ARCUSHIPCOMP, $this->arcushipcomp);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUTXBL)) {
            $criteria->add(CustomerTableMap::COL_ARCUTXBL, $this->arcutxbl);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUPOSTAL)) {
            $criteria->add(CustomerTableMap::COL_ARCUPOSTAL, $this->arcupostal);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTBSHIPVIA)) {
            $criteria->add(CustomerTableMap::COL_ARTBSHIPVIA, $this->artbshipvia);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUBORD)) {
            $criteria->add(CustomerTableMap::COL_ARCUBORD, $this->arcubord);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTBTYPECODE)) {
            $criteria->add(CustomerTableMap::COL_ARTBTYPECODE, $this->artbtypecode);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTBPRICCODE)) {
            $criteria->add(CustomerTableMap::COL_ARTBPRICCODE, $this->artbpriccode);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTBCOMMCODE)) {
            $criteria->add(CustomerTableMap::COL_ARTBCOMMCODE, $this->artbcommcode);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTMTERMCD)) {
            $criteria->add(CustomerTableMap::COL_ARTMTERMCD, $this->artmtermcd);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCREDLMT)) {
            $criteria->add(CustomerTableMap::COL_ARCUCREDLMT, $this->arcucredlmt);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSTMTCODE)) {
            $criteria->add(CustomerTableMap::COL_ARCUSTMTCODE, $this->arcustmtcode);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCREDHOLD)) {
            $criteria->add(CustomerTableMap::COL_ARCUCREDHOLD, $this->arcucredhold);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUFINCHRG)) {
            $criteria->add(CustomerTableMap::COL_ARCUFINCHRG, $this->arcufinchrg);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUUSERCODE)) {
            $criteria->add(CustomerTableMap::COL_ARCUUSERCODE, $this->arcuusercode);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUNEWFC)) {
            $criteria->add(CustomerTableMap::COL_ARCUNEWFC, $this->arcunewfc);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUUNPDFC)) {
            $criteria->add(CustomerTableMap::COL_ARCUUNPDFC, $this->arcuunpdfc);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCURBAL)) {
            $criteria->add(CustomerTableMap::COL_ARCUCURBAL, $this->arcucurbal);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUBALODUE1)) {
            $criteria->add(CustomerTableMap::COL_ARCUBALODUE1, $this->arcubalodue1);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUBALODUE2)) {
            $criteria->add(CustomerTableMap::COL_ARCUBALODUE2, $this->arcubalodue2);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUBALODUE3)) {
            $criteria->add(CustomerTableMap::COL_ARCUBALODUE3, $this->arcubalodue3);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALEMTD)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALEMTD, $this->arcusalemtd);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINVMTD)) {
            $criteria->add(CustomerTableMap::COL_ARCUINVMTD, $this->arcuinvmtd);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALEYTD)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALEYTD, $this->arcusaleytd);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINVYTD)) {
            $criteria->add(CustomerTableMap::COL_ARCUINVYTD, $this->arcuinvytd);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUDATEOPEN)) {
            $criteria->add(CustomerTableMap::COL_ARCUDATEOPEN, $this->arcudateopen);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCULASTSALEDATE)) {
            $criteria->add(CustomerTableMap::COL_ARCULASTSALEDATE, $this->arculastsaledate);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUHIGHBAL)) {
            $criteria->add(CustomerTableMap::COL_ARCUHIGHBAL, $this->arcuhighbal);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUBIGSALEMO)) {
            $criteria->add(CustomerTableMap::COL_ARCUBIGSALEMO, $this->arcubigsalemo);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCULASTPAYDATE)) {
            $criteria->add(CustomerTableMap::COL_ARCULASTPAYDATE, $this->arculastpaydate);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUAVGPAYDAYS)) {
            $criteria->add(CustomerTableMap::COL_ARCUAVGPAYDAYS, $this->arcuavgpaydays);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUUPSZONE)) {
            $criteria->add(CustomerTableMap::COL_ARCUUPSZONE, $this->arcuupszone);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUHIGHBALDATE)) {
            $criteria->add(CustomerTableMap::COL_ARCUHIGHBALDATE, $this->arcuhighbaldate);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO1)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO1, $this->arcusale24mo1);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO1)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO1, $this->arcuinv24mo1);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO2)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO2, $this->arcusale24mo2);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO2)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO2, $this->arcuinv24mo2);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO3)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO3, $this->arcusale24mo3);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO3)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO3, $this->arcuinv24mo3);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO4)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO4, $this->arcusale24mo4);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO4)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO4, $this->arcuinv24mo4);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO5)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO5, $this->arcusale24mo5);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO5)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO5, $this->arcuinv24mo5);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO6)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO6, $this->arcusale24mo6);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO6)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO6, $this->arcuinv24mo6);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO7)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO7, $this->arcusale24mo7);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO7)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO7, $this->arcuinv24mo7);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO8)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO8, $this->arcusale24mo8);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO8)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO8, $this->arcuinv24mo8);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO9)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO9, $this->arcusale24mo9);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO9)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO9, $this->arcuinv24mo9);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO10)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO10, $this->arcusale24mo10);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO10)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO10, $this->arcuinv24mo10);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO11)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO11, $this->arcusale24mo11);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO11)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO11, $this->arcuinv24mo11);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO12)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO12, $this->arcusale24mo12);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO12)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO12, $this->arcuinv24mo12);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO13)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO13, $this->arcusale24mo13);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO13)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO13, $this->arcuinv24mo13);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO14)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO14, $this->arcusale24mo14);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO14)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO14, $this->arcuinv24mo14);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO15)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO15, $this->arcusale24mo15);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO15)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO15, $this->arcuinv24mo15);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO16)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO16, $this->arcusale24mo16);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO16)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO16, $this->arcuinv24mo16);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO17)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO17, $this->arcusale24mo17);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO17)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO17, $this->arcuinv24mo17);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO18)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO18, $this->arcusale24mo18);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO18)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO18, $this->arcuinv24mo18);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO19)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO19, $this->arcusale24mo19);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO19)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO19, $this->arcuinv24mo19);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO20)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO20, $this->arcusale24mo20);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO20)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO20, $this->arcuinv24mo20);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO21)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO21, $this->arcusale24mo21);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO21)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO21, $this->arcuinv24mo21);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO22)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO22, $this->arcusale24mo22);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO22)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO22, $this->arcuinv24mo22);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO23)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO23, $this->arcusale24mo23);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO23)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO23, $this->arcuinv24mo23);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSALE24MO24)) {
            $criteria->add(CustomerTableMap::COL_ARCUSALE24MO24, $this->arcusale24mo24);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINV24MO24)) {
            $criteria->add(CustomerTableMap::COL_ARCUINV24MO24, $this->arcuinv24mo24);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCULASTPAYAMT)) {
            $criteria->add(CustomerTableMap::COL_ARCULASTPAYAMT, $this->arculastpayamt);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUORDRTOT)) {
            $criteria->add(CustomerTableMap::COL_ARCUORDRTOT, $this->arcuordrtot);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUUSEFRTIN)) {
            $criteria->add(CustomerTableMap::COL_ARCUUSEFRTIN, $this->arcuusefrtin);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUMYVENDID)) {
            $criteria->add(CustomerTableMap::COL_ARCUMYVENDID, $this->arcumyvendid);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUADDLPRICDISC)) {
            $criteria->add(CustomerTableMap::COL_ARCUADDLPRICDISC, $this->arcuaddlpricdisc);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUACTIVEINACTIVE)) {
            $criteria->add(CustomerTableMap::COL_ARCUACTIVEINACTIVE, $this->arcuactiveinactive);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUINACTIVEDATE)) {
            $criteria->add(CustomerTableMap::COL_ARCUINACTIVEDATE, $this->arcuinactivedate);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCHRGFRT)) {
            $criteria->add(CustomerTableMap::COL_ARCUCHRGFRT, $this->arcuchrgfrt);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCOREXDAYS)) {
            $criteria->add(CustomerTableMap::COL_ARCUCOREXDAYS, $this->arcucorexdays);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCONTRACTNBR)) {
            $criteria->add(CustomerTableMap::COL_ARCUCONTRACTNBR, $this->arcucontractnbr);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCORELF)) {
            $criteria->add(CustomerTableMap::COL_ARCUCORELF, $this->arcucorelf);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCOREBANKID)) {
            $criteria->add(CustomerTableMap::COL_ARCUCOREBANKID, $this->arcucorebankid);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUDUNSNBR)) {
            $criteria->add(CustomerTableMap::COL_ARCUDUNSNBR, $this->arcudunsnbr);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCURFMLVALU)) {
            $criteria->add(CustomerTableMap::COL_ARCURFMLVALU, $this->arcurfmlvalu);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUCUSTPOPARAM)) {
            $criteria->add(CustomerTableMap::COL_ARCUCUSTPOPARAM, $this->arcucustpoparam);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUAGELEVEL)) {
            $criteria->add(CustomerTableMap::COL_ARCUAGELEVEL, $this->arcuagelevel);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARTBROUTE)) {
            $criteria->add(CustomerTableMap::COL_ARTBROUTE, $this->artbroute);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUWGTAXCODE)) {
            $criteria->add(CustomerTableMap::COL_ARCUWGTAXCODE, $this->arcuwgtaxcode);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUACPTSUPERCEDE)) {
            $criteria->add(CustomerTableMap::COL_ARCUACPTSUPERCEDE, $this->arcuacptsupercede);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUMSTRCUSTID)) {
            $criteria->add(CustomerTableMap::COL_ARCUMSTRCUSTID, $this->arcumstrcustid);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUSURCHGPCT)) {
            $criteria->add(CustomerTableMap::COL_ARCUSURCHGPCT, $this->arcusurchgpct);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUALLOWSPLIT)) {
            $criteria->add(CustomerTableMap::COL_ARCUALLOWSPLIT, $this->arcuallowsplit);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCULINEMIN)) {
            $criteria->add(CustomerTableMap::COL_ARCULINEMIN, $this->arculinemin);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUORDRMIN)) {
            $criteria->add(CustomerTableMap::COL_ARCUORDRMIN, $this->arcuordrmin);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUUPSACCTNBR)) {
            $criteria->add(CustomerTableMap::COL_ARCUUPSACCTNBR, $this->arcuupsacctnbr);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUPRTMATCERT)) {
            $criteria->add(CustomerTableMap::COL_ARCUPRTMATCERT, $this->arcuprtmatcert);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUFOBINPUTYN)) {
            $criteria->add(CustomerTableMap::COL_ARCUFOBINPUTYN, $this->arcufobinputyn);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_ARCUFOBPERLB)) {
            $criteria->add(CustomerTableMap::COL_ARCUFOBPERLB, $this->arcufobperlb);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_DATEUPDTD)) {
            $criteria->add(CustomerTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_TIMEUPDTD)) {
            $criteria->add(CustomerTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(CustomerTableMap::COL_DUMMY)) {
            $criteria->add(CustomerTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildCustomerQuery::create();
        $criteria->add(CustomerTableMap::COL_ARCUCUSTID, $this->arcucustid);

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
        $validPk = null !== $this->getArcucustid();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

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
        return $this->getArcucustid();
    }

    /**
     * Generic method to set the primary key (arcucustid column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setArcucustid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getArcucustid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Customer (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArcuname($this->getArcuname());
        $copyObj->setArcuadr1($this->getArcuadr1());
        $copyObj->setArcuadr2($this->getArcuadr2());
        $copyObj->setArcuadr3($this->getArcuadr3());
        $copyObj->setArcuctry($this->getArcuctry());
        $copyObj->setArcucity($this->getArcucity());
        $copyObj->setArcustat($this->getArcustat());
        $copyObj->setArcuzipcode($this->getArcuzipcode());
        $copyObj->setArcudeliverydays($this->getArcudeliverydays());
        $copyObj->setArcuremitwhse($this->getArcuremitwhse());
        $copyObj->setArcushipbin($this->getArcushipbin());
        $copyObj->setArcuallowaddons($this->getArcuallowaddons());
        $copyObj->setArculmecommcustid($this->getArculmecommcustid());
        $copyObj->setArcugsuse2ndbin($this->getArcugsuse2ndbin());
        $copyObj->setArspsaleper1($this->getArspsaleper1());
        $copyObj->setArspsaleper2($this->getArspsaleper2());
        $copyObj->setArspsaleper3($this->getArspsaleper3());
        $copyObj->setArtbmtaxcode($this->getArtbmtaxcode());
        $copyObj->setArcutaxexemnbr($this->getArcutaxexemnbr());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setArcupriclvl($this->getArcupriclvl());
        $copyObj->setArcushipcomp($this->getArcushipcomp());
        $copyObj->setArcutxbl($this->getArcutxbl());
        $copyObj->setArcupostal($this->getArcupostal());
        $copyObj->setArtbshipvia($this->getArtbshipvia());
        $copyObj->setArcubord($this->getArcubord());
        $copyObj->setArtbtypecode($this->getArtbtypecode());
        $copyObj->setArtbpriccode($this->getArtbpriccode());
        $copyObj->setArtbcommcode($this->getArtbcommcode());
        $copyObj->setArtmtermcd($this->getArtmtermcd());
        $copyObj->setArcucredlmt($this->getArcucredlmt());
        $copyObj->setArcustmtcode($this->getArcustmtcode());
        $copyObj->setArcucredhold($this->getArcucredhold());
        $copyObj->setArcufinchrg($this->getArcufinchrg());
        $copyObj->setArcuusercode($this->getArcuusercode());
        $copyObj->setArcunewfc($this->getArcunewfc());
        $copyObj->setArcuunpdfc($this->getArcuunpdfc());
        $copyObj->setArcucurbal($this->getArcucurbal());
        $copyObj->setArcubalodue1($this->getArcubalodue1());
        $copyObj->setArcubalodue2($this->getArcubalodue2());
        $copyObj->setArcubalodue3($this->getArcubalodue3());
        $copyObj->setArcusalemtd($this->getArcusalemtd());
        $copyObj->setArcuinvmtd($this->getArcuinvmtd());
        $copyObj->setArcusaleytd($this->getArcusaleytd());
        $copyObj->setArcuinvytd($this->getArcuinvytd());
        $copyObj->setArcudateopen($this->getArcudateopen());
        $copyObj->setArculastsaledate($this->getArculastsaledate());
        $copyObj->setArcuhighbal($this->getArcuhighbal());
        $copyObj->setArcubigsalemo($this->getArcubigsalemo());
        $copyObj->setArculastpaydate($this->getArculastpaydate());
        $copyObj->setArcuavgpaydays($this->getArcuavgpaydays());
        $copyObj->setArcuupszone($this->getArcuupszone());
        $copyObj->setArcuhighbaldate($this->getArcuhighbaldate());
        $copyObj->setArcusale24mo1($this->getArcusale24mo1());
        $copyObj->setArcuinv24mo1($this->getArcuinv24mo1());
        $copyObj->setArcusale24mo2($this->getArcusale24mo2());
        $copyObj->setArcuinv24mo2($this->getArcuinv24mo2());
        $copyObj->setArcusale24mo3($this->getArcusale24mo3());
        $copyObj->setArcuinv24mo3($this->getArcuinv24mo3());
        $copyObj->setArcusale24mo4($this->getArcusale24mo4());
        $copyObj->setArcuinv24mo4($this->getArcuinv24mo4());
        $copyObj->setArcusale24mo5($this->getArcusale24mo5());
        $copyObj->setArcuinv24mo5($this->getArcuinv24mo5());
        $copyObj->setArcusale24mo6($this->getArcusale24mo6());
        $copyObj->setArcuinv24mo6($this->getArcuinv24mo6());
        $copyObj->setArcusale24mo7($this->getArcusale24mo7());
        $copyObj->setArcuinv24mo7($this->getArcuinv24mo7());
        $copyObj->setArcusale24mo8($this->getArcusale24mo8());
        $copyObj->setArcuinv24mo8($this->getArcuinv24mo8());
        $copyObj->setArcusale24mo9($this->getArcusale24mo9());
        $copyObj->setArcuinv24mo9($this->getArcuinv24mo9());
        $copyObj->setArcusale24mo10($this->getArcusale24mo10());
        $copyObj->setArcuinv24mo10($this->getArcuinv24mo10());
        $copyObj->setArcusale24mo11($this->getArcusale24mo11());
        $copyObj->setArcuinv24mo11($this->getArcuinv24mo11());
        $copyObj->setArcusale24mo12($this->getArcusale24mo12());
        $copyObj->setArcuinv24mo12($this->getArcuinv24mo12());
        $copyObj->setArcusale24mo13($this->getArcusale24mo13());
        $copyObj->setArcuinv24mo13($this->getArcuinv24mo13());
        $copyObj->setArcusale24mo14($this->getArcusale24mo14());
        $copyObj->setArcuinv24mo14($this->getArcuinv24mo14());
        $copyObj->setArcusale24mo15($this->getArcusale24mo15());
        $copyObj->setArcuinv24mo15($this->getArcuinv24mo15());
        $copyObj->setArcusale24mo16($this->getArcusale24mo16());
        $copyObj->setArcuinv24mo16($this->getArcuinv24mo16());
        $copyObj->setArcusale24mo17($this->getArcusale24mo17());
        $copyObj->setArcuinv24mo17($this->getArcuinv24mo17());
        $copyObj->setArcusale24mo18($this->getArcusale24mo18());
        $copyObj->setArcuinv24mo18($this->getArcuinv24mo18());
        $copyObj->setArcusale24mo19($this->getArcusale24mo19());
        $copyObj->setArcuinv24mo19($this->getArcuinv24mo19());
        $copyObj->setArcusale24mo20($this->getArcusale24mo20());
        $copyObj->setArcuinv24mo20($this->getArcuinv24mo20());
        $copyObj->setArcusale24mo21($this->getArcusale24mo21());
        $copyObj->setArcuinv24mo21($this->getArcuinv24mo21());
        $copyObj->setArcusale24mo22($this->getArcusale24mo22());
        $copyObj->setArcuinv24mo22($this->getArcuinv24mo22());
        $copyObj->setArcusale24mo23($this->getArcusale24mo23());
        $copyObj->setArcuinv24mo23($this->getArcuinv24mo23());
        $copyObj->setArcusale24mo24($this->getArcusale24mo24());
        $copyObj->setArcuinv24mo24($this->getArcuinv24mo24());
        $copyObj->setArculastpayamt($this->getArculastpayamt());
        $copyObj->setArcuordrtot($this->getArcuordrtot());
        $copyObj->setArcuusefrtin($this->getArcuusefrtin());
        $copyObj->setArcumyvendid($this->getArcumyvendid());
        $copyObj->setArcuaddlpricdisc($this->getArcuaddlpricdisc());
        $copyObj->setArcuactiveinactive($this->getArcuactiveinactive());
        $copyObj->setArcuinactivedate($this->getArcuinactivedate());
        $copyObj->setArcuchrgfrt($this->getArcuchrgfrt());
        $copyObj->setArcucorexdays($this->getArcucorexdays());
        $copyObj->setArcucontractnbr($this->getArcucontractnbr());
        $copyObj->setArcucorelf($this->getArcucorelf());
        $copyObj->setArcucorebankid($this->getArcucorebankid());
        $copyObj->setArcudunsnbr($this->getArcudunsnbr());
        $copyObj->setArcurfmlvalu($this->getArcurfmlvalu());
        $copyObj->setArcucustpoparam($this->getArcucustpoparam());
        $copyObj->setArcuagelevel($this->getArcuagelevel());
        $copyObj->setArtbroute($this->getArtbroute());
        $copyObj->setArcuwgtaxcode($this->getArcuwgtaxcode());
        $copyObj->setArcuacptsupercede($this->getArcuacptsupercede());
        $copyObj->setArcumstrcustid($this->getArcumstrcustid());
        $copyObj->setArcusurchgpct($this->getArcusurchgpct());
        $copyObj->setArcuallowsplit($this->getArcuallowsplit());
        $copyObj->setArculinemin($this->getArculinemin());
        $copyObj->setArcuordrmin($this->getArcuordrmin());
        $copyObj->setArcuupsacctnbr($this->getArcuupsacctnbr());
        $copyObj->setArcuprtmatcert($this->getArcuprtmatcert());
        $copyObj->setArcufobinputyn($this->getArcufobinputyn());
        $copyObj->setArcufobperlb($this->getArcufobperlb());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getArCust3partyFreights() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addArCust3partyFreight($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getArPaymentPendings() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addArPaymentPending($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getArCashHead();
            if ($relObj) {
                $copyObj->setArCashHead($relObj->copy($deepCopy));
            }

            foreach ($this->getArInvoices() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addArInvoice($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCustomerShiptos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCustomerShipto($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getInvSerialWarranties() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvSerialWarranty($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemXrefCustomerNotes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemXrefCustomerNote($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getBookingDayCustomers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBookingDayCustomer($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getBookingDayDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBookingDayDetail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getBookings() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addBooking($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesHistories() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesHistory($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesOrders() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesOrder($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getItemPricingDiscounts() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addItemPricingDiscount($relObj->copy($deepCopy));
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
     * @return \Customer Clone of current object.
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
     * Declares an association between this object and a ChildArCommissionCode object.
     *
     * @param  ChildArCommissionCode $v
     * @return $this|\Customer The current object (for fluent API support)
     * @throws PropelException
     */
    public function setArCommissionCode(ChildArCommissionCode $v = null)
    {
        if ($v === null) {
            $this->setArtbcommcode(NULL);
        } else {
            $this->setArtbcommcode($v->getArtbcommcode());
        }

        $this->aArCommissionCode = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildArCommissionCode object, it will not be re-added.
        if ($v !== null) {
            $v->addCustomer($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildArCommissionCode object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildArCommissionCode The associated ChildArCommissionCode object.
     * @throws PropelException
     */
    public function getArCommissionCode(ConnectionInterface $con = null)
    {
        if ($this->aArCommissionCode === null && (($this->artbcommcode !== "" && $this->artbcommcode !== null))) {
            $this->aArCommissionCode = ChildArCommissionCodeQuery::create()->findPk($this->artbcommcode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aArCommissionCode->addCustomers($this);
             */
        }

        return $this->aArCommissionCode;
    }

    /**
     * Declares an association between this object and a ChildShipvia object.
     *
     * @param  ChildShipvia $v
     * @return $this|\Customer The current object (for fluent API support)
     * @throws PropelException
     */
    public function setShipvia(ChildShipvia $v = null)
    {
        if ($v === null) {
            $this->setArtbshipvia(NULL);
        } else {
            $this->setArtbshipvia($v->getArtbshipvia());
        }

        $this->aShipvia = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildShipvia object, it will not be re-added.
        if ($v !== null) {
            $v->addCustomer($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildShipvia object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildShipvia The associated ChildShipvia object.
     * @throws PropelException
     */
    public function getShipvia(ConnectionInterface $con = null)
    {
        if ($this->aShipvia === null && (($this->artbshipvia !== "" && $this->artbshipvia !== null))) {
            $this->aShipvia = ChildShipviaQuery::create()->findPk($this->artbshipvia, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aShipvia->addCustomers($this);
             */
        }

        return $this->aShipvia;
    }

    /**
     * Declares an association between this object and a ChildSoFreightRate object.
     *
     * @param  ChildSoFreightRate $v
     * @return $this|\Customer The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSoFreightRate(ChildSoFreightRate $v = null)
    {
        if ($v === null) {
            $this->setArcuchrgfrt(NULL);
        } else {
            $this->setArcuchrgfrt($v->getSfrtratecode());
        }

        $this->aSoFreightRate = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSoFreightRate object, it will not be re-added.
        if ($v !== null) {
            $v->addCustomer($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSoFreightRate object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSoFreightRate The associated ChildSoFreightRate object.
     * @throws PropelException
     */
    public function getSoFreightRate(ConnectionInterface $con = null)
    {
        if ($this->aSoFreightRate === null && (($this->arcuchrgfrt !== "" && $this->arcuchrgfrt !== null))) {
            $this->aSoFreightRate = ChildSoFreightRateQuery::create()->findPk($this->arcuchrgfrt, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSoFreightRate->addCustomers($this);
             */
        }

        return $this->aSoFreightRate;
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
        if ('ArCust3partyFreight' == $relationName) {
            $this->initArCust3partyFreights();
            return;
        }
        if ('ArPaymentPending' == $relationName) {
            $this->initArPaymentPendings();
            return;
        }
        if ('ArInvoice' == $relationName) {
            $this->initArInvoices();
            return;
        }
        if ('CustomerShipto' == $relationName) {
            $this->initCustomerShiptos();
            return;
        }
        if ('InvSerialWarranty' == $relationName) {
            $this->initInvSerialWarranties();
            return;
        }
        if ('ItemXrefCustomerNote' == $relationName) {
            $this->initItemXrefCustomerNotes();
            return;
        }
        if ('BookingDayCustomer' == $relationName) {
            $this->initBookingDayCustomers();
            return;
        }
        if ('BookingDayDetail' == $relationName) {
            $this->initBookingDayDetails();
            return;
        }
        if ('Booking' == $relationName) {
            $this->initBookings();
            return;
        }
        if ('SalesHistory' == $relationName) {
            $this->initSalesHistories();
            return;
        }
        if ('SalesOrder' == $relationName) {
            $this->initSalesOrders();
            return;
        }
        if ('ItemPricingDiscount' == $relationName) {
            $this->initItemPricingDiscounts();
            return;
        }
    }

    /**
     * Clears out the collArCust3partyFreights collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addArCust3partyFreights()
     */
    public function clearArCust3partyFreights()
    {
        $this->collArCust3partyFreights = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collArCust3partyFreights collection loaded partially.
     */
    public function resetPartialArCust3partyFreights($v = true)
    {
        $this->collArCust3partyFreightsPartial = $v;
    }

    /**
     * Initializes the collArCust3partyFreights collection.
     *
     * By default this just sets the collArCust3partyFreights collection to an empty array (like clearcollArCust3partyFreights());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initArCust3partyFreights($overrideExisting = true)
    {
        if (null !== $this->collArCust3partyFreights && !$overrideExisting) {
            return;
        }

        $collectionClassName = ArCust3partyFreightTableMap::getTableMap()->getCollectionClassName();

        $this->collArCust3partyFreights = new $collectionClassName;
        $this->collArCust3partyFreights->setModel('\ArCust3partyFreight');
    }

    /**
     * Gets an array of ChildArCust3partyFreight objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCustomer is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildArCust3partyFreight[] List of ChildArCust3partyFreight objects
     * @throws PropelException
     */
    public function getArCust3partyFreights(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collArCust3partyFreightsPartial && !$this->isNew();
        if (null === $this->collArCust3partyFreights || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collArCust3partyFreights) {
                // return empty collection
                $this->initArCust3partyFreights();
            } else {
                $collArCust3partyFreights = ChildArCust3partyFreightQuery::create(null, $criteria)
                    ->filterByCustomer($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collArCust3partyFreightsPartial && count($collArCust3partyFreights)) {
                        $this->initArCust3partyFreights(false);

                        foreach ($collArCust3partyFreights as $obj) {
                            if (false == $this->collArCust3partyFreights->contains($obj)) {
                                $this->collArCust3partyFreights->append($obj);
                            }
                        }

                        $this->collArCust3partyFreightsPartial = true;
                    }

                    return $collArCust3partyFreights;
                }

                if ($partial && $this->collArCust3partyFreights) {
                    foreach ($this->collArCust3partyFreights as $obj) {
                        if ($obj->isNew()) {
                            $collArCust3partyFreights[] = $obj;
                        }
                    }
                }

                $this->collArCust3partyFreights = $collArCust3partyFreights;
                $this->collArCust3partyFreightsPartial = false;
            }
        }

        return $this->collArCust3partyFreights;
    }

    /**
     * Sets a collection of ChildArCust3partyFreight objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $arCust3partyFreights A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function setArCust3partyFreights(Collection $arCust3partyFreights, ConnectionInterface $con = null)
    {
        /** @var ChildArCust3partyFreight[] $arCust3partyFreightsToDelete */
        $arCust3partyFreightsToDelete = $this->getArCust3partyFreights(new Criteria(), $con)->diff($arCust3partyFreights);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->arCust3partyFreightsScheduledForDeletion = clone $arCust3partyFreightsToDelete;

        foreach ($arCust3partyFreightsToDelete as $arCust3partyFreightRemoved) {
            $arCust3partyFreightRemoved->setCustomer(null);
        }

        $this->collArCust3partyFreights = null;
        foreach ($arCust3partyFreights as $arCust3partyFreight) {
            $this->addArCust3partyFreight($arCust3partyFreight);
        }

        $this->collArCust3partyFreights = $arCust3partyFreights;
        $this->collArCust3partyFreightsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ArCust3partyFreight objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ArCust3partyFreight objects.
     * @throws PropelException
     */
    public function countArCust3partyFreights(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collArCust3partyFreightsPartial && !$this->isNew();
        if (null === $this->collArCust3partyFreights || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collArCust3partyFreights) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getArCust3partyFreights());
            }

            $query = ChildArCust3partyFreightQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomer($this)
                ->count($con);
        }

        return count($this->collArCust3partyFreights);
    }

    /**
     * Method called to associate a ChildArCust3partyFreight object to this object
     * through the ChildArCust3partyFreight foreign key attribute.
     *
     * @param  ChildArCust3partyFreight $l ChildArCust3partyFreight
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function addArCust3partyFreight(ChildArCust3partyFreight $l)
    {
        if ($this->collArCust3partyFreights === null) {
            $this->initArCust3partyFreights();
            $this->collArCust3partyFreightsPartial = true;
        }

        if (!$this->collArCust3partyFreights->contains($l)) {
            $this->doAddArCust3partyFreight($l);

            if ($this->arCust3partyFreightsScheduledForDeletion and $this->arCust3partyFreightsScheduledForDeletion->contains($l)) {
                $this->arCust3partyFreightsScheduledForDeletion->remove($this->arCust3partyFreightsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildArCust3partyFreight $arCust3partyFreight The ChildArCust3partyFreight object to add.
     */
    protected function doAddArCust3partyFreight(ChildArCust3partyFreight $arCust3partyFreight)
    {
        $this->collArCust3partyFreights[]= $arCust3partyFreight;
        $arCust3partyFreight->setCustomer($this);
    }

    /**
     * @param  ChildArCust3partyFreight $arCust3partyFreight The ChildArCust3partyFreight object to remove.
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function removeArCust3partyFreight(ChildArCust3partyFreight $arCust3partyFreight)
    {
        if ($this->getArCust3partyFreights()->contains($arCust3partyFreight)) {
            $pos = $this->collArCust3partyFreights->search($arCust3partyFreight);
            $this->collArCust3partyFreights->remove($pos);
            if (null === $this->arCust3partyFreightsScheduledForDeletion) {
                $this->arCust3partyFreightsScheduledForDeletion = clone $this->collArCust3partyFreights;
                $this->arCust3partyFreightsScheduledForDeletion->clear();
            }
            $this->arCust3partyFreightsScheduledForDeletion[]= clone $arCust3partyFreight;
            $arCust3partyFreight->setCustomer(null);
        }

        return $this;
    }

    /**
     * Clears out the collArPaymentPendings collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addArPaymentPendings()
     */
    public function clearArPaymentPendings()
    {
        $this->collArPaymentPendings = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collArPaymentPendings collection loaded partially.
     */
    public function resetPartialArPaymentPendings($v = true)
    {
        $this->collArPaymentPendingsPartial = $v;
    }

    /**
     * Initializes the collArPaymentPendings collection.
     *
     * By default this just sets the collArPaymentPendings collection to an empty array (like clearcollArPaymentPendings());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initArPaymentPendings($overrideExisting = true)
    {
        if (null !== $this->collArPaymentPendings && !$overrideExisting) {
            return;
        }

        $collectionClassName = ArPaymentPendingTableMap::getTableMap()->getCollectionClassName();

        $this->collArPaymentPendings = new $collectionClassName;
        $this->collArPaymentPendings->setModel('\ArPaymentPending');
    }

    /**
     * Gets an array of ChildArPaymentPending objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCustomer is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildArPaymentPending[] List of ChildArPaymentPending objects
     * @throws PropelException
     */
    public function getArPaymentPendings(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collArPaymentPendingsPartial && !$this->isNew();
        if (null === $this->collArPaymentPendings || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collArPaymentPendings) {
                // return empty collection
                $this->initArPaymentPendings();
            } else {
                $collArPaymentPendings = ChildArPaymentPendingQuery::create(null, $criteria)
                    ->filterByCustomer($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collArPaymentPendingsPartial && count($collArPaymentPendings)) {
                        $this->initArPaymentPendings(false);

                        foreach ($collArPaymentPendings as $obj) {
                            if (false == $this->collArPaymentPendings->contains($obj)) {
                                $this->collArPaymentPendings->append($obj);
                            }
                        }

                        $this->collArPaymentPendingsPartial = true;
                    }

                    return $collArPaymentPendings;
                }

                if ($partial && $this->collArPaymentPendings) {
                    foreach ($this->collArPaymentPendings as $obj) {
                        if ($obj->isNew()) {
                            $collArPaymentPendings[] = $obj;
                        }
                    }
                }

                $this->collArPaymentPendings = $collArPaymentPendings;
                $this->collArPaymentPendingsPartial = false;
            }
        }

        return $this->collArPaymentPendings;
    }

    /**
     * Sets a collection of ChildArPaymentPending objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $arPaymentPendings A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function setArPaymentPendings(Collection $arPaymentPendings, ConnectionInterface $con = null)
    {
        /** @var ChildArPaymentPending[] $arPaymentPendingsToDelete */
        $arPaymentPendingsToDelete = $this->getArPaymentPendings(new Criteria(), $con)->diff($arPaymentPendings);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->arPaymentPendingsScheduledForDeletion = clone $arPaymentPendingsToDelete;

        foreach ($arPaymentPendingsToDelete as $arPaymentPendingRemoved) {
            $arPaymentPendingRemoved->setCustomer(null);
        }

        $this->collArPaymentPendings = null;
        foreach ($arPaymentPendings as $arPaymentPending) {
            $this->addArPaymentPending($arPaymentPending);
        }

        $this->collArPaymentPendings = $arPaymentPendings;
        $this->collArPaymentPendingsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ArPaymentPending objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ArPaymentPending objects.
     * @throws PropelException
     */
    public function countArPaymentPendings(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collArPaymentPendingsPartial && !$this->isNew();
        if (null === $this->collArPaymentPendings || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collArPaymentPendings) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getArPaymentPendings());
            }

            $query = ChildArPaymentPendingQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomer($this)
                ->count($con);
        }

        return count($this->collArPaymentPendings);
    }

    /**
     * Method called to associate a ChildArPaymentPending object to this object
     * through the ChildArPaymentPending foreign key attribute.
     *
     * @param  ChildArPaymentPending $l ChildArPaymentPending
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function addArPaymentPending(ChildArPaymentPending $l)
    {
        if ($this->collArPaymentPendings === null) {
            $this->initArPaymentPendings();
            $this->collArPaymentPendingsPartial = true;
        }

        if (!$this->collArPaymentPendings->contains($l)) {
            $this->doAddArPaymentPending($l);

            if ($this->arPaymentPendingsScheduledForDeletion and $this->arPaymentPendingsScheduledForDeletion->contains($l)) {
                $this->arPaymentPendingsScheduledForDeletion->remove($this->arPaymentPendingsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildArPaymentPending $arPaymentPending The ChildArPaymentPending object to add.
     */
    protected function doAddArPaymentPending(ChildArPaymentPending $arPaymentPending)
    {
        $this->collArPaymentPendings[]= $arPaymentPending;
        $arPaymentPending->setCustomer($this);
    }

    /**
     * @param  ChildArPaymentPending $arPaymentPending The ChildArPaymentPending object to remove.
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function removeArPaymentPending(ChildArPaymentPending $arPaymentPending)
    {
        if ($this->getArPaymentPendings()->contains($arPaymentPending)) {
            $pos = $this->collArPaymentPendings->search($arPaymentPending);
            $this->collArPaymentPendings->remove($pos);
            if (null === $this->arPaymentPendingsScheduledForDeletion) {
                $this->arPaymentPendingsScheduledForDeletion = clone $this->collArPaymentPendings;
                $this->arPaymentPendingsScheduledForDeletion->clear();
            }
            $this->arPaymentPendingsScheduledForDeletion[]= clone $arPaymentPending;
            $arPaymentPending->setCustomer(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customer is new, it will return
     * an empty collection; or if this Customer has previously
     * been saved, it will retrieve related ArPaymentPendings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customer.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildArPaymentPending[] List of ChildArPaymentPending objects
     */
    public function getArPaymentPendingsJoinArCashHead(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildArPaymentPendingQuery::create(null, $criteria);
        $query->joinWith('ArCashHead', $joinBehavior);

        return $this->getArPaymentPendings($query, $con);
    }

    /**
     * Gets a single ChildArCashHead object, which is related to this object by a one-to-one relationship.
     *
     * @param  ConnectionInterface $con optional connection object
     * @return ChildArCashHead
     * @throws PropelException
     */
    public function getArCashHead(ConnectionInterface $con = null)
    {

        if ($this->singleArCashHead === null && !$this->isNew()) {
            $this->singleArCashHead = ChildArCashHeadQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleArCashHead;
    }

    /**
     * Sets a single ChildArCashHead object as related to this object by a one-to-one relationship.
     *
     * @param  ChildArCashHead $v ChildArCashHead
     * @return $this|\Customer The current object (for fluent API support)
     * @throws PropelException
     */
    public function setArCashHead(ChildArCashHead $v = null)
    {
        $this->singleArCashHead = $v;

        // Make sure that that the passed-in ChildArCashHead isn't already associated with this object
        if ($v !== null && $v->getCustomer(null, false) === null) {
            $v->setCustomer($this);
        }

        return $this;
    }

    /**
     * Clears out the collArInvoices collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addArInvoices()
     */
    public function clearArInvoices()
    {
        $this->collArInvoices = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collArInvoices collection loaded partially.
     */
    public function resetPartialArInvoices($v = true)
    {
        $this->collArInvoicesPartial = $v;
    }

    /**
     * Initializes the collArInvoices collection.
     *
     * By default this just sets the collArInvoices collection to an empty array (like clearcollArInvoices());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initArInvoices($overrideExisting = true)
    {
        if (null !== $this->collArInvoices && !$overrideExisting) {
            return;
        }

        $collectionClassName = ArInvoiceTableMap::getTableMap()->getCollectionClassName();

        $this->collArInvoices = new $collectionClassName;
        $this->collArInvoices->setModel('\ArInvoice');
    }

    /**
     * Gets an array of ChildArInvoice objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCustomer is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildArInvoice[] List of ChildArInvoice objects
     * @throws PropelException
     */
    public function getArInvoices(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collArInvoicesPartial && !$this->isNew();
        if (null === $this->collArInvoices || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collArInvoices) {
                // return empty collection
                $this->initArInvoices();
            } else {
                $collArInvoices = ChildArInvoiceQuery::create(null, $criteria)
                    ->filterByCustomer($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collArInvoicesPartial && count($collArInvoices)) {
                        $this->initArInvoices(false);

                        foreach ($collArInvoices as $obj) {
                            if (false == $this->collArInvoices->contains($obj)) {
                                $this->collArInvoices->append($obj);
                            }
                        }

                        $this->collArInvoicesPartial = true;
                    }

                    return $collArInvoices;
                }

                if ($partial && $this->collArInvoices) {
                    foreach ($this->collArInvoices as $obj) {
                        if ($obj->isNew()) {
                            $collArInvoices[] = $obj;
                        }
                    }
                }

                $this->collArInvoices = $collArInvoices;
                $this->collArInvoicesPartial = false;
            }
        }

        return $this->collArInvoices;
    }

    /**
     * Sets a collection of ChildArInvoice objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $arInvoices A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function setArInvoices(Collection $arInvoices, ConnectionInterface $con = null)
    {
        /** @var ChildArInvoice[] $arInvoicesToDelete */
        $arInvoicesToDelete = $this->getArInvoices(new Criteria(), $con)->diff($arInvoices);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->arInvoicesScheduledForDeletion = clone $arInvoicesToDelete;

        foreach ($arInvoicesToDelete as $arInvoiceRemoved) {
            $arInvoiceRemoved->setCustomer(null);
        }

        $this->collArInvoices = null;
        foreach ($arInvoices as $arInvoice) {
            $this->addArInvoice($arInvoice);
        }

        $this->collArInvoices = $arInvoices;
        $this->collArInvoicesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ArInvoice objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ArInvoice objects.
     * @throws PropelException
     */
    public function countArInvoices(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collArInvoicesPartial && !$this->isNew();
        if (null === $this->collArInvoices || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collArInvoices) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getArInvoices());
            }

            $query = ChildArInvoiceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomer($this)
                ->count($con);
        }

        return count($this->collArInvoices);
    }

    /**
     * Method called to associate a ChildArInvoice object to this object
     * through the ChildArInvoice foreign key attribute.
     *
     * @param  ChildArInvoice $l ChildArInvoice
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function addArInvoice(ChildArInvoice $l)
    {
        if ($this->collArInvoices === null) {
            $this->initArInvoices();
            $this->collArInvoicesPartial = true;
        }

        if (!$this->collArInvoices->contains($l)) {
            $this->doAddArInvoice($l);

            if ($this->arInvoicesScheduledForDeletion and $this->arInvoicesScheduledForDeletion->contains($l)) {
                $this->arInvoicesScheduledForDeletion->remove($this->arInvoicesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildArInvoice $arInvoice The ChildArInvoice object to add.
     */
    protected function doAddArInvoice(ChildArInvoice $arInvoice)
    {
        $this->collArInvoices[]= $arInvoice;
        $arInvoice->setCustomer($this);
    }

    /**
     * @param  ChildArInvoice $arInvoice The ChildArInvoice object to remove.
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function removeArInvoice(ChildArInvoice $arInvoice)
    {
        if ($this->getArInvoices()->contains($arInvoice)) {
            $pos = $this->collArInvoices->search($arInvoice);
            $this->collArInvoices->remove($pos);
            if (null === $this->arInvoicesScheduledForDeletion) {
                $this->arInvoicesScheduledForDeletion = clone $this->collArInvoices;
                $this->arInvoicesScheduledForDeletion->clear();
            }
            $this->arInvoicesScheduledForDeletion[]= clone $arInvoice;
            $arInvoice->setCustomer(null);
        }

        return $this;
    }

    /**
     * Clears out the collCustomerShiptos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addCustomerShiptos()
     */
    public function clearCustomerShiptos()
    {
        $this->collCustomerShiptos = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collCustomerShiptos collection loaded partially.
     */
    public function resetPartialCustomerShiptos($v = true)
    {
        $this->collCustomerShiptosPartial = $v;
    }

    /**
     * Initializes the collCustomerShiptos collection.
     *
     * By default this just sets the collCustomerShiptos collection to an empty array (like clearcollCustomerShiptos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCustomerShiptos($overrideExisting = true)
    {
        if (null !== $this->collCustomerShiptos && !$overrideExisting) {
            return;
        }

        $collectionClassName = CustomerShiptoTableMap::getTableMap()->getCollectionClassName();

        $this->collCustomerShiptos = new $collectionClassName;
        $this->collCustomerShiptos->setModel('\CustomerShipto');
    }

    /**
     * Gets an array of ChildCustomerShipto objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCustomer is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildCustomerShipto[] List of ChildCustomerShipto objects
     * @throws PropelException
     */
    public function getCustomerShiptos(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collCustomerShiptosPartial && !$this->isNew();
        if (null === $this->collCustomerShiptos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCustomerShiptos) {
                // return empty collection
                $this->initCustomerShiptos();
            } else {
                $collCustomerShiptos = ChildCustomerShiptoQuery::create(null, $criteria)
                    ->filterByCustomer($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collCustomerShiptosPartial && count($collCustomerShiptos)) {
                        $this->initCustomerShiptos(false);

                        foreach ($collCustomerShiptos as $obj) {
                            if (false == $this->collCustomerShiptos->contains($obj)) {
                                $this->collCustomerShiptos->append($obj);
                            }
                        }

                        $this->collCustomerShiptosPartial = true;
                    }

                    return $collCustomerShiptos;
                }

                if ($partial && $this->collCustomerShiptos) {
                    foreach ($this->collCustomerShiptos as $obj) {
                        if ($obj->isNew()) {
                            $collCustomerShiptos[] = $obj;
                        }
                    }
                }

                $this->collCustomerShiptos = $collCustomerShiptos;
                $this->collCustomerShiptosPartial = false;
            }
        }

        return $this->collCustomerShiptos;
    }

    /**
     * Sets a collection of ChildCustomerShipto objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $customerShiptos A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function setCustomerShiptos(Collection $customerShiptos, ConnectionInterface $con = null)
    {
        /** @var ChildCustomerShipto[] $customerShiptosToDelete */
        $customerShiptosToDelete = $this->getCustomerShiptos(new Criteria(), $con)->diff($customerShiptos);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->customerShiptosScheduledForDeletion = clone $customerShiptosToDelete;

        foreach ($customerShiptosToDelete as $customerShiptoRemoved) {
            $customerShiptoRemoved->setCustomer(null);
        }

        $this->collCustomerShiptos = null;
        foreach ($customerShiptos as $customerShipto) {
            $this->addCustomerShipto($customerShipto);
        }

        $this->collCustomerShiptos = $customerShiptos;
        $this->collCustomerShiptosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CustomerShipto objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related CustomerShipto objects.
     * @throws PropelException
     */
    public function countCustomerShiptos(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collCustomerShiptosPartial && !$this->isNew();
        if (null === $this->collCustomerShiptos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCustomerShiptos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCustomerShiptos());
            }

            $query = ChildCustomerShiptoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomer($this)
                ->count($con);
        }

        return count($this->collCustomerShiptos);
    }

    /**
     * Method called to associate a ChildCustomerShipto object to this object
     * through the ChildCustomerShipto foreign key attribute.
     *
     * @param  ChildCustomerShipto $l ChildCustomerShipto
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function addCustomerShipto(ChildCustomerShipto $l)
    {
        if ($this->collCustomerShiptos === null) {
            $this->initCustomerShiptos();
            $this->collCustomerShiptosPartial = true;
        }

        if (!$this->collCustomerShiptos->contains($l)) {
            $this->doAddCustomerShipto($l);

            if ($this->customerShiptosScheduledForDeletion and $this->customerShiptosScheduledForDeletion->contains($l)) {
                $this->customerShiptosScheduledForDeletion->remove($this->customerShiptosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildCustomerShipto $customerShipto The ChildCustomerShipto object to add.
     */
    protected function doAddCustomerShipto(ChildCustomerShipto $customerShipto)
    {
        $this->collCustomerShiptos[]= $customerShipto;
        $customerShipto->setCustomer($this);
    }

    /**
     * @param  ChildCustomerShipto $customerShipto The ChildCustomerShipto object to remove.
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function removeCustomerShipto(ChildCustomerShipto $customerShipto)
    {
        if ($this->getCustomerShiptos()->contains($customerShipto)) {
            $pos = $this->collCustomerShiptos->search($customerShipto);
            $this->collCustomerShiptos->remove($pos);
            if (null === $this->customerShiptosScheduledForDeletion) {
                $this->customerShiptosScheduledForDeletion = clone $this->collCustomerShiptos;
                $this->customerShiptosScheduledForDeletion->clear();
            }
            $this->customerShiptosScheduledForDeletion[]= clone $customerShipto;
            $customerShipto->setCustomer(null);
        }

        return $this;
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
     * If this ChildCustomer is new, it will return
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
                    ->filterByCustomer($this)
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
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function setInvSerialWarranties(Collection $invSerialWarranties, ConnectionInterface $con = null)
    {
        /** @var ChildInvSerialWarranty[] $invSerialWarrantiesToDelete */
        $invSerialWarrantiesToDelete = $this->getInvSerialWarranties(new Criteria(), $con)->diff($invSerialWarranties);


        $this->invSerialWarrantiesScheduledForDeletion = $invSerialWarrantiesToDelete;

        foreach ($invSerialWarrantiesToDelete as $invSerialWarrantyRemoved) {
            $invSerialWarrantyRemoved->setCustomer(null);
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
                ->filterByCustomer($this)
                ->count($con);
        }

        return count($this->collInvSerialWarranties);
    }

    /**
     * Method called to associate a ChildInvSerialWarranty object to this object
     * through the ChildInvSerialWarranty foreign key attribute.
     *
     * @param  ChildInvSerialWarranty $l ChildInvSerialWarranty
     * @return $this|\Customer The current object (for fluent API support)
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
        $invSerialWarranty->setCustomer($this);
    }

    /**
     * @param  ChildInvSerialWarranty $invSerialWarranty The ChildInvSerialWarranty object to remove.
     * @return $this|ChildCustomer The current object (for fluent API support)
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
            $invSerialWarranty->setCustomer(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customer is new, it will return
     * an empty collection; or if this Customer has previously
     * been saved, it will retrieve related InvSerialWarranties from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customer.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvSerialWarranty[] List of ChildInvSerialWarranty objects
     */
    public function getInvSerialWarrantiesJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvSerialWarrantyQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getInvSerialWarranties($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customer is new, it will return
     * an empty collection; or if this Customer has previously
     * been saved, it will retrieve related InvSerialWarranties from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customer.
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
     * If this ChildCustomer is new, it will return
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
                    ->filterByCustomer($this)
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
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function setItemXrefCustomerNotes(Collection $itemXrefCustomerNotes, ConnectionInterface $con = null)
    {
        /** @var ChildItemXrefCustomerNote[] $itemXrefCustomerNotesToDelete */
        $itemXrefCustomerNotesToDelete = $this->getItemXrefCustomerNotes(new Criteria(), $con)->diff($itemXrefCustomerNotes);


        $this->itemXrefCustomerNotesScheduledForDeletion = $itemXrefCustomerNotesToDelete;

        foreach ($itemXrefCustomerNotesToDelete as $itemXrefCustomerNoteRemoved) {
            $itemXrefCustomerNoteRemoved->setCustomer(null);
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
                ->filterByCustomer($this)
                ->count($con);
        }

        return count($this->collItemXrefCustomerNotes);
    }

    /**
     * Method called to associate a ChildItemXrefCustomerNote object to this object
     * through the ChildItemXrefCustomerNote foreign key attribute.
     *
     * @param  ChildItemXrefCustomerNote $l ChildItemXrefCustomerNote
     * @return $this|\Customer The current object (for fluent API support)
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
        $itemXrefCustomerNote->setCustomer($this);
    }

    /**
     * @param  ChildItemXrefCustomerNote $itemXrefCustomerNote The ChildItemXrefCustomerNote object to remove.
     * @return $this|ChildCustomer The current object (for fluent API support)
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
            $itemXrefCustomerNote->setCustomer(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customer is new, it will return
     * an empty collection; or if this Customer has previously
     * been saved, it will retrieve related ItemXrefCustomerNotes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customer.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemXrefCustomerNote[] List of ChildItemXrefCustomerNote objects
     */
    public function getItemXrefCustomerNotesJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemXrefCustomerNoteQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getItemXrefCustomerNotes($query, $con);
    }

    /**
     * Clears out the collBookingDayCustomers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addBookingDayCustomers()
     */
    public function clearBookingDayCustomers()
    {
        $this->collBookingDayCustomers = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collBookingDayCustomers collection loaded partially.
     */
    public function resetPartialBookingDayCustomers($v = true)
    {
        $this->collBookingDayCustomersPartial = $v;
    }

    /**
     * Initializes the collBookingDayCustomers collection.
     *
     * By default this just sets the collBookingDayCustomers collection to an empty array (like clearcollBookingDayCustomers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBookingDayCustomers($overrideExisting = true)
    {
        if (null !== $this->collBookingDayCustomers && !$overrideExisting) {
            return;
        }

        $collectionClassName = BookingDayCustomerTableMap::getTableMap()->getCollectionClassName();

        $this->collBookingDayCustomers = new $collectionClassName;
        $this->collBookingDayCustomers->setModel('\BookingDayCustomer');
    }

    /**
     * Gets an array of ChildBookingDayCustomer objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCustomer is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildBookingDayCustomer[] List of ChildBookingDayCustomer objects
     * @throws PropelException
     */
    public function getBookingDayCustomers(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingDayCustomersPartial && !$this->isNew();
        if (null === $this->collBookingDayCustomers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBookingDayCustomers) {
                // return empty collection
                $this->initBookingDayCustomers();
            } else {
                $collBookingDayCustomers = ChildBookingDayCustomerQuery::create(null, $criteria)
                    ->filterByCustomer($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collBookingDayCustomersPartial && count($collBookingDayCustomers)) {
                        $this->initBookingDayCustomers(false);

                        foreach ($collBookingDayCustomers as $obj) {
                            if (false == $this->collBookingDayCustomers->contains($obj)) {
                                $this->collBookingDayCustomers->append($obj);
                            }
                        }

                        $this->collBookingDayCustomersPartial = true;
                    }

                    return $collBookingDayCustomers;
                }

                if ($partial && $this->collBookingDayCustomers) {
                    foreach ($this->collBookingDayCustomers as $obj) {
                        if ($obj->isNew()) {
                            $collBookingDayCustomers[] = $obj;
                        }
                    }
                }

                $this->collBookingDayCustomers = $collBookingDayCustomers;
                $this->collBookingDayCustomersPartial = false;
            }
        }

        return $this->collBookingDayCustomers;
    }

    /**
     * Sets a collection of ChildBookingDayCustomer objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $bookingDayCustomers A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function setBookingDayCustomers(Collection $bookingDayCustomers, ConnectionInterface $con = null)
    {
        /** @var ChildBookingDayCustomer[] $bookingDayCustomersToDelete */
        $bookingDayCustomersToDelete = $this->getBookingDayCustomers(new Criteria(), $con)->diff($bookingDayCustomers);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->bookingDayCustomersScheduledForDeletion = clone $bookingDayCustomersToDelete;

        foreach ($bookingDayCustomersToDelete as $bookingDayCustomerRemoved) {
            $bookingDayCustomerRemoved->setCustomer(null);
        }

        $this->collBookingDayCustomers = null;
        foreach ($bookingDayCustomers as $bookingDayCustomer) {
            $this->addBookingDayCustomer($bookingDayCustomer);
        }

        $this->collBookingDayCustomers = $bookingDayCustomers;
        $this->collBookingDayCustomersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BookingDayCustomer objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BookingDayCustomer objects.
     * @throws PropelException
     */
    public function countBookingDayCustomers(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingDayCustomersPartial && !$this->isNew();
        if (null === $this->collBookingDayCustomers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBookingDayCustomers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getBookingDayCustomers());
            }

            $query = ChildBookingDayCustomerQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomer($this)
                ->count($con);
        }

        return count($this->collBookingDayCustomers);
    }

    /**
     * Method called to associate a ChildBookingDayCustomer object to this object
     * through the ChildBookingDayCustomer foreign key attribute.
     *
     * @param  ChildBookingDayCustomer $l ChildBookingDayCustomer
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function addBookingDayCustomer(ChildBookingDayCustomer $l)
    {
        if ($this->collBookingDayCustomers === null) {
            $this->initBookingDayCustomers();
            $this->collBookingDayCustomersPartial = true;
        }

        if (!$this->collBookingDayCustomers->contains($l)) {
            $this->doAddBookingDayCustomer($l);

            if ($this->bookingDayCustomersScheduledForDeletion and $this->bookingDayCustomersScheduledForDeletion->contains($l)) {
                $this->bookingDayCustomersScheduledForDeletion->remove($this->bookingDayCustomersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildBookingDayCustomer $bookingDayCustomer The ChildBookingDayCustomer object to add.
     */
    protected function doAddBookingDayCustomer(ChildBookingDayCustomer $bookingDayCustomer)
    {
        $this->collBookingDayCustomers[]= $bookingDayCustomer;
        $bookingDayCustomer->setCustomer($this);
    }

    /**
     * @param  ChildBookingDayCustomer $bookingDayCustomer The ChildBookingDayCustomer object to remove.
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function removeBookingDayCustomer(ChildBookingDayCustomer $bookingDayCustomer)
    {
        if ($this->getBookingDayCustomers()->contains($bookingDayCustomer)) {
            $pos = $this->collBookingDayCustomers->search($bookingDayCustomer);
            $this->collBookingDayCustomers->remove($pos);
            if (null === $this->bookingDayCustomersScheduledForDeletion) {
                $this->bookingDayCustomersScheduledForDeletion = clone $this->collBookingDayCustomers;
                $this->bookingDayCustomersScheduledForDeletion->clear();
            }
            $this->bookingDayCustomersScheduledForDeletion[]= clone $bookingDayCustomer;
            $bookingDayCustomer->setCustomer(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customer is new, it will return
     * an empty collection; or if this Customer has previously
     * been saved, it will retrieve related BookingDayCustomers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customer.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBookingDayCustomer[] List of ChildBookingDayCustomer objects
     */
    public function getBookingDayCustomersJoinCustomerShipto(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingDayCustomerQuery::create(null, $criteria);
        $query->joinWith('CustomerShipto', $joinBehavior);

        return $this->getBookingDayCustomers($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customer is new, it will return
     * an empty collection; or if this Customer has previously
     * been saved, it will retrieve related BookingDayCustomers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customer.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBookingDayCustomer[] List of ChildBookingDayCustomer objects
     */
    public function getBookingDayCustomersJoinSalesPerson(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingDayCustomerQuery::create(null, $criteria);
        $query->joinWith('SalesPerson', $joinBehavior);

        return $this->getBookingDayCustomers($query, $con);
    }

    /**
     * Clears out the collBookingDayDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addBookingDayDetails()
     */
    public function clearBookingDayDetails()
    {
        $this->collBookingDayDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collBookingDayDetails collection loaded partially.
     */
    public function resetPartialBookingDayDetails($v = true)
    {
        $this->collBookingDayDetailsPartial = $v;
    }

    /**
     * Initializes the collBookingDayDetails collection.
     *
     * By default this just sets the collBookingDayDetails collection to an empty array (like clearcollBookingDayDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBookingDayDetails($overrideExisting = true)
    {
        if (null !== $this->collBookingDayDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = BookingDayDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collBookingDayDetails = new $collectionClassName;
        $this->collBookingDayDetails->setModel('\BookingDayDetail');
    }

    /**
     * Gets an array of ChildBookingDayDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCustomer is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildBookingDayDetail[] List of ChildBookingDayDetail objects
     * @throws PropelException
     */
    public function getBookingDayDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingDayDetailsPartial && !$this->isNew();
        if (null === $this->collBookingDayDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBookingDayDetails) {
                // return empty collection
                $this->initBookingDayDetails();
            } else {
                $collBookingDayDetails = ChildBookingDayDetailQuery::create(null, $criteria)
                    ->filterByCustomer($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collBookingDayDetailsPartial && count($collBookingDayDetails)) {
                        $this->initBookingDayDetails(false);

                        foreach ($collBookingDayDetails as $obj) {
                            if (false == $this->collBookingDayDetails->contains($obj)) {
                                $this->collBookingDayDetails->append($obj);
                            }
                        }

                        $this->collBookingDayDetailsPartial = true;
                    }

                    return $collBookingDayDetails;
                }

                if ($partial && $this->collBookingDayDetails) {
                    foreach ($this->collBookingDayDetails as $obj) {
                        if ($obj->isNew()) {
                            $collBookingDayDetails[] = $obj;
                        }
                    }
                }

                $this->collBookingDayDetails = $collBookingDayDetails;
                $this->collBookingDayDetailsPartial = false;
            }
        }

        return $this->collBookingDayDetails;
    }

    /**
     * Sets a collection of ChildBookingDayDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $bookingDayDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function setBookingDayDetails(Collection $bookingDayDetails, ConnectionInterface $con = null)
    {
        /** @var ChildBookingDayDetail[] $bookingDayDetailsToDelete */
        $bookingDayDetailsToDelete = $this->getBookingDayDetails(new Criteria(), $con)->diff($bookingDayDetails);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->bookingDayDetailsScheduledForDeletion = clone $bookingDayDetailsToDelete;

        foreach ($bookingDayDetailsToDelete as $bookingDayDetailRemoved) {
            $bookingDayDetailRemoved->setCustomer(null);
        }

        $this->collBookingDayDetails = null;
        foreach ($bookingDayDetails as $bookingDayDetail) {
            $this->addBookingDayDetail($bookingDayDetail);
        }

        $this->collBookingDayDetails = $bookingDayDetails;
        $this->collBookingDayDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BookingDayDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related BookingDayDetail objects.
     * @throws PropelException
     */
    public function countBookingDayDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingDayDetailsPartial && !$this->isNew();
        if (null === $this->collBookingDayDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBookingDayDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getBookingDayDetails());
            }

            $query = ChildBookingDayDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomer($this)
                ->count($con);
        }

        return count($this->collBookingDayDetails);
    }

    /**
     * Method called to associate a ChildBookingDayDetail object to this object
     * through the ChildBookingDayDetail foreign key attribute.
     *
     * @param  ChildBookingDayDetail $l ChildBookingDayDetail
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function addBookingDayDetail(ChildBookingDayDetail $l)
    {
        if ($this->collBookingDayDetails === null) {
            $this->initBookingDayDetails();
            $this->collBookingDayDetailsPartial = true;
        }

        if (!$this->collBookingDayDetails->contains($l)) {
            $this->doAddBookingDayDetail($l);

            if ($this->bookingDayDetailsScheduledForDeletion and $this->bookingDayDetailsScheduledForDeletion->contains($l)) {
                $this->bookingDayDetailsScheduledForDeletion->remove($this->bookingDayDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildBookingDayDetail $bookingDayDetail The ChildBookingDayDetail object to add.
     */
    protected function doAddBookingDayDetail(ChildBookingDayDetail $bookingDayDetail)
    {
        $this->collBookingDayDetails[]= $bookingDayDetail;
        $bookingDayDetail->setCustomer($this);
    }

    /**
     * @param  ChildBookingDayDetail $bookingDayDetail The ChildBookingDayDetail object to remove.
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function removeBookingDayDetail(ChildBookingDayDetail $bookingDayDetail)
    {
        if ($this->getBookingDayDetails()->contains($bookingDayDetail)) {
            $pos = $this->collBookingDayDetails->search($bookingDayDetail);
            $this->collBookingDayDetails->remove($pos);
            if (null === $this->bookingDayDetailsScheduledForDeletion) {
                $this->bookingDayDetailsScheduledForDeletion = clone $this->collBookingDayDetails;
                $this->bookingDayDetailsScheduledForDeletion->clear();
            }
            $this->bookingDayDetailsScheduledForDeletion[]= clone $bookingDayDetail;
            $bookingDayDetail->setCustomer(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customer is new, it will return
     * an empty collection; or if this Customer has previously
     * been saved, it will retrieve related BookingDayDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customer.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBookingDayDetail[] List of ChildBookingDayDetail objects
     */
    public function getBookingDayDetailsJoinCustomerShipto(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingDayDetailQuery::create(null, $criteria);
        $query->joinWith('CustomerShipto', $joinBehavior);

        return $this->getBookingDayDetails($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customer is new, it will return
     * an empty collection; or if this Customer has previously
     * been saved, it will retrieve related BookingDayDetails from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customer.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBookingDayDetail[] List of ChildBookingDayDetail objects
     */
    public function getBookingDayDetailsJoinSalesPerson(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingDayDetailQuery::create(null, $criteria);
        $query->joinWith('SalesPerson', $joinBehavior);

        return $this->getBookingDayDetails($query, $con);
    }

    /**
     * Clears out the collBookings collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addBookings()
     */
    public function clearBookings()
    {
        $this->collBookings = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collBookings collection loaded partially.
     */
    public function resetPartialBookings($v = true)
    {
        $this->collBookingsPartial = $v;
    }

    /**
     * Initializes the collBookings collection.
     *
     * By default this just sets the collBookings collection to an empty array (like clearcollBookings());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initBookings($overrideExisting = true)
    {
        if (null !== $this->collBookings && !$overrideExisting) {
            return;
        }

        $collectionClassName = BookingTableMap::getTableMap()->getCollectionClassName();

        $this->collBookings = new $collectionClassName;
        $this->collBookings->setModel('\Booking');
    }

    /**
     * Gets an array of ChildBooking objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCustomer is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildBooking[] List of ChildBooking objects
     * @throws PropelException
     */
    public function getBookings(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingsPartial && !$this->isNew();
        if (null === $this->collBookings || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collBookings) {
                // return empty collection
                $this->initBookings();
            } else {
                $collBookings = ChildBookingQuery::create(null, $criteria)
                    ->filterByCustomer($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collBookingsPartial && count($collBookings)) {
                        $this->initBookings(false);

                        foreach ($collBookings as $obj) {
                            if (false == $this->collBookings->contains($obj)) {
                                $this->collBookings->append($obj);
                            }
                        }

                        $this->collBookingsPartial = true;
                    }

                    return $collBookings;
                }

                if ($partial && $this->collBookings) {
                    foreach ($this->collBookings as $obj) {
                        if ($obj->isNew()) {
                            $collBookings[] = $obj;
                        }
                    }
                }

                $this->collBookings = $collBookings;
                $this->collBookingsPartial = false;
            }
        }

        return $this->collBookings;
    }

    /**
     * Sets a collection of ChildBooking objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $bookings A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function setBookings(Collection $bookings, ConnectionInterface $con = null)
    {
        /** @var ChildBooking[] $bookingsToDelete */
        $bookingsToDelete = $this->getBookings(new Criteria(), $con)->diff($bookings);


        $this->bookingsScheduledForDeletion = $bookingsToDelete;

        foreach ($bookingsToDelete as $bookingRemoved) {
            $bookingRemoved->setCustomer(null);
        }

        $this->collBookings = null;
        foreach ($bookings as $booking) {
            $this->addBooking($booking);
        }

        $this->collBookings = $bookings;
        $this->collBookingsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Booking objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related Booking objects.
     * @throws PropelException
     */
    public function countBookings(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collBookingsPartial && !$this->isNew();
        if (null === $this->collBookings || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collBookings) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getBookings());
            }

            $query = ChildBookingQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomer($this)
                ->count($con);
        }

        return count($this->collBookings);
    }

    /**
     * Method called to associate a ChildBooking object to this object
     * through the ChildBooking foreign key attribute.
     *
     * @param  ChildBooking $l ChildBooking
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function addBooking(ChildBooking $l)
    {
        if ($this->collBookings === null) {
            $this->initBookings();
            $this->collBookingsPartial = true;
        }

        if (!$this->collBookings->contains($l)) {
            $this->doAddBooking($l);

            if ($this->bookingsScheduledForDeletion and $this->bookingsScheduledForDeletion->contains($l)) {
                $this->bookingsScheduledForDeletion->remove($this->bookingsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildBooking $booking The ChildBooking object to add.
     */
    protected function doAddBooking(ChildBooking $booking)
    {
        $this->collBookings[]= $booking;
        $booking->setCustomer($this);
    }

    /**
     * @param  ChildBooking $booking The ChildBooking object to remove.
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function removeBooking(ChildBooking $booking)
    {
        if ($this->getBookings()->contains($booking)) {
            $pos = $this->collBookings->search($booking);
            $this->collBookings->remove($pos);
            if (null === $this->bookingsScheduledForDeletion) {
                $this->bookingsScheduledForDeletion = clone $this->collBookings;
                $this->bookingsScheduledForDeletion->clear();
            }
            $this->bookingsScheduledForDeletion[]= $booking;
            $booking->setCustomer(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customer is new, it will return
     * an empty collection; or if this Customer has previously
     * been saved, it will retrieve related Bookings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customer.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBooking[] List of ChildBooking objects
     */
    public function getBookingsJoinCustomerShipto(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingQuery::create(null, $criteria);
        $query->joinWith('CustomerShipto', $joinBehavior);

        return $this->getBookings($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customer is new, it will return
     * an empty collection; or if this Customer has previously
     * been saved, it will retrieve related Bookings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customer.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildBooking[] List of ChildBooking objects
     */
    public function getBookingsJoinSalesPerson(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildBookingQuery::create(null, $criteria);
        $query->joinWith('SalesPerson', $joinBehavior);

        return $this->getBookings($query, $con);
    }

    /**
     * Clears out the collSalesHistories collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSalesHistories()
     */
    public function clearSalesHistories()
    {
        $this->collSalesHistories = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSalesHistories collection loaded partially.
     */
    public function resetPartialSalesHistories($v = true)
    {
        $this->collSalesHistoriesPartial = $v;
    }

    /**
     * Initializes the collSalesHistories collection.
     *
     * By default this just sets the collSalesHistories collection to an empty array (like clearcollSalesHistories());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesHistories($overrideExisting = true)
    {
        if (null !== $this->collSalesHistories && !$overrideExisting) {
            return;
        }

        $collectionClassName = SalesHistoryTableMap::getTableMap()->getCollectionClassName();

        $this->collSalesHistories = new $collectionClassName;
        $this->collSalesHistories->setModel('\SalesHistory');
    }

    /**
     * Gets an array of ChildSalesHistory objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCustomer is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSalesHistory[] List of ChildSalesHistory objects
     * @throws PropelException
     */
    public function getSalesHistories(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesHistoriesPartial && !$this->isNew();
        if (null === $this->collSalesHistories || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSalesHistories) {
                // return empty collection
                $this->initSalesHistories();
            } else {
                $collSalesHistories = ChildSalesHistoryQuery::create(null, $criteria)
                    ->filterByCustomer($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSalesHistoriesPartial && count($collSalesHistories)) {
                        $this->initSalesHistories(false);

                        foreach ($collSalesHistories as $obj) {
                            if (false == $this->collSalesHistories->contains($obj)) {
                                $this->collSalesHistories->append($obj);
                            }
                        }

                        $this->collSalesHistoriesPartial = true;
                    }

                    return $collSalesHistories;
                }

                if ($partial && $this->collSalesHistories) {
                    foreach ($this->collSalesHistories as $obj) {
                        if ($obj->isNew()) {
                            $collSalesHistories[] = $obj;
                        }
                    }
                }

                $this->collSalesHistories = $collSalesHistories;
                $this->collSalesHistoriesPartial = false;
            }
        }

        return $this->collSalesHistories;
    }

    /**
     * Sets a collection of ChildSalesHistory objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $salesHistories A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function setSalesHistories(Collection $salesHistories, ConnectionInterface $con = null)
    {
        /** @var ChildSalesHistory[] $salesHistoriesToDelete */
        $salesHistoriesToDelete = $this->getSalesHistories(new Criteria(), $con)->diff($salesHistories);


        $this->salesHistoriesScheduledForDeletion = $salesHistoriesToDelete;

        foreach ($salesHistoriesToDelete as $salesHistoryRemoved) {
            $salesHistoryRemoved->setCustomer(null);
        }

        $this->collSalesHistories = null;
        foreach ($salesHistories as $salesHistory) {
            $this->addSalesHistory($salesHistory);
        }

        $this->collSalesHistories = $salesHistories;
        $this->collSalesHistoriesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SalesHistory objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SalesHistory objects.
     * @throws PropelException
     */
    public function countSalesHistories(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesHistoriesPartial && !$this->isNew();
        if (null === $this->collSalesHistories || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesHistories) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesHistories());
            }

            $query = ChildSalesHistoryQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomer($this)
                ->count($con);
        }

        return count($this->collSalesHistories);
    }

    /**
     * Method called to associate a ChildSalesHistory object to this object
     * through the ChildSalesHistory foreign key attribute.
     *
     * @param  ChildSalesHistory $l ChildSalesHistory
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function addSalesHistory(ChildSalesHistory $l)
    {
        if ($this->collSalesHistories === null) {
            $this->initSalesHistories();
            $this->collSalesHistoriesPartial = true;
        }

        if (!$this->collSalesHistories->contains($l)) {
            $this->doAddSalesHistory($l);

            if ($this->salesHistoriesScheduledForDeletion and $this->salesHistoriesScheduledForDeletion->contains($l)) {
                $this->salesHistoriesScheduledForDeletion->remove($this->salesHistoriesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSalesHistory $salesHistory The ChildSalesHistory object to add.
     */
    protected function doAddSalesHistory(ChildSalesHistory $salesHistory)
    {
        $this->collSalesHistories[]= $salesHistory;
        $salesHistory->setCustomer($this);
    }

    /**
     * @param  ChildSalesHistory $salesHistory The ChildSalesHistory object to remove.
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function removeSalesHistory(ChildSalesHistory $salesHistory)
    {
        if ($this->getSalesHistories()->contains($salesHistory)) {
            $pos = $this->collSalesHistories->search($salesHistory);
            $this->collSalesHistories->remove($pos);
            if (null === $this->salesHistoriesScheduledForDeletion) {
                $this->salesHistoriesScheduledForDeletion = clone $this->collSalesHistories;
                $this->salesHistoriesScheduledForDeletion->clear();
            }
            $this->salesHistoriesScheduledForDeletion[]= clone $salesHistory;
            $salesHistory->setCustomer(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customer is new, it will return
     * an empty collection; or if this Customer has previously
     * been saved, it will retrieve related SalesHistories from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customer.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesHistory[] List of ChildSalesHistory objects
     */
    public function getSalesHistoriesJoinCustomerShipto(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesHistoryQuery::create(null, $criteria);
        $query->joinWith('CustomerShipto', $joinBehavior);

        return $this->getSalesHistories($query, $con);
    }

    /**
     * Clears out the collSalesOrders collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSalesOrders()
     */
    public function clearSalesOrders()
    {
        $this->collSalesOrders = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSalesOrders collection loaded partially.
     */
    public function resetPartialSalesOrders($v = true)
    {
        $this->collSalesOrdersPartial = $v;
    }

    /**
     * Initializes the collSalesOrders collection.
     *
     * By default this just sets the collSalesOrders collection to an empty array (like clearcollSalesOrders());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesOrders($overrideExisting = true)
    {
        if (null !== $this->collSalesOrders && !$overrideExisting) {
            return;
        }

        $collectionClassName = SalesOrderTableMap::getTableMap()->getCollectionClassName();

        $this->collSalesOrders = new $collectionClassName;
        $this->collSalesOrders->setModel('\SalesOrder');
    }

    /**
     * Gets an array of ChildSalesOrder objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildCustomer is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSalesOrder[] List of ChildSalesOrder objects
     * @throws PropelException
     */
    public function getSalesOrders(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrdersPartial && !$this->isNew();
        if (null === $this->collSalesOrders || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSalesOrders) {
                // return empty collection
                $this->initSalesOrders();
            } else {
                $collSalesOrders = ChildSalesOrderQuery::create(null, $criteria)
                    ->filterByCustomer($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSalesOrdersPartial && count($collSalesOrders)) {
                        $this->initSalesOrders(false);

                        foreach ($collSalesOrders as $obj) {
                            if (false == $this->collSalesOrders->contains($obj)) {
                                $this->collSalesOrders->append($obj);
                            }
                        }

                        $this->collSalesOrdersPartial = true;
                    }

                    return $collSalesOrders;
                }

                if ($partial && $this->collSalesOrders) {
                    foreach ($this->collSalesOrders as $obj) {
                        if ($obj->isNew()) {
                            $collSalesOrders[] = $obj;
                        }
                    }
                }

                $this->collSalesOrders = $collSalesOrders;
                $this->collSalesOrdersPartial = false;
            }
        }

        return $this->collSalesOrders;
    }

    /**
     * Sets a collection of ChildSalesOrder objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $salesOrders A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function setSalesOrders(Collection $salesOrders, ConnectionInterface $con = null)
    {
        /** @var ChildSalesOrder[] $salesOrdersToDelete */
        $salesOrdersToDelete = $this->getSalesOrders(new Criteria(), $con)->diff($salesOrders);


        $this->salesOrdersScheduledForDeletion = $salesOrdersToDelete;

        foreach ($salesOrdersToDelete as $salesOrderRemoved) {
            $salesOrderRemoved->setCustomer(null);
        }

        $this->collSalesOrders = null;
        foreach ($salesOrders as $salesOrder) {
            $this->addSalesOrder($salesOrder);
        }

        $this->collSalesOrders = $salesOrders;
        $this->collSalesOrdersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SalesOrder objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SalesOrder objects.
     * @throws PropelException
     */
    public function countSalesOrders(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrdersPartial && !$this->isNew();
        if (null === $this->collSalesOrders || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesOrders) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesOrders());
            }

            $query = ChildSalesOrderQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCustomer($this)
                ->count($con);
        }

        return count($this->collSalesOrders);
    }

    /**
     * Method called to associate a ChildSalesOrder object to this object
     * through the ChildSalesOrder foreign key attribute.
     *
     * @param  ChildSalesOrder $l ChildSalesOrder
     * @return $this|\Customer The current object (for fluent API support)
     */
    public function addSalesOrder(ChildSalesOrder $l)
    {
        if ($this->collSalesOrders === null) {
            $this->initSalesOrders();
            $this->collSalesOrdersPartial = true;
        }

        if (!$this->collSalesOrders->contains($l)) {
            $this->doAddSalesOrder($l);

            if ($this->salesOrdersScheduledForDeletion and $this->salesOrdersScheduledForDeletion->contains($l)) {
                $this->salesOrdersScheduledForDeletion->remove($this->salesOrdersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSalesOrder $salesOrder The ChildSalesOrder object to add.
     */
    protected function doAddSalesOrder(ChildSalesOrder $salesOrder)
    {
        $this->collSalesOrders[]= $salesOrder;
        $salesOrder->setCustomer($this);
    }

    /**
     * @param  ChildSalesOrder $salesOrder The ChildSalesOrder object to remove.
     * @return $this|ChildCustomer The current object (for fluent API support)
     */
    public function removeSalesOrder(ChildSalesOrder $salesOrder)
    {
        if ($this->getSalesOrders()->contains($salesOrder)) {
            $pos = $this->collSalesOrders->search($salesOrder);
            $this->collSalesOrders->remove($pos);
            if (null === $this->salesOrdersScheduledForDeletion) {
                $this->salesOrdersScheduledForDeletion = clone $this->collSalesOrders;
                $this->salesOrdersScheduledForDeletion->clear();
            }
            $this->salesOrdersScheduledForDeletion[]= clone $salesOrder;
            $salesOrder->setCustomer(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customer is new, it will return
     * an empty collection; or if this Customer has previously
     * been saved, it will retrieve related SalesOrders from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customer.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesOrder[] List of ChildSalesOrder objects
     */
    public function getSalesOrdersJoinCustomerShipto(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesOrderQuery::create(null, $criteria);
        $query->joinWith('CustomerShipto', $joinBehavior);

        return $this->getSalesOrders($query, $con);
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
     * If this ChildCustomer is new, it will return
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
                    ->filterByCustomer($this)
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
     * @return $this|ChildCustomer The current object (for fluent API support)
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
            $itemPricingDiscountRemoved->setCustomer(null);
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
                ->filterByCustomer($this)
                ->count($con);
        }

        return count($this->collItemPricingDiscounts);
    }

    /**
     * Method called to associate a ChildItemPricingDiscount object to this object
     * through the ChildItemPricingDiscount foreign key attribute.
     *
     * @param  ChildItemPricingDiscount $l ChildItemPricingDiscount
     * @return $this|\Customer The current object (for fluent API support)
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
        $itemPricingDiscount->setCustomer($this);
    }

    /**
     * @param  ChildItemPricingDiscount $itemPricingDiscount The ChildItemPricingDiscount object to remove.
     * @return $this|ChildCustomer The current object (for fluent API support)
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
            $itemPricingDiscount->setCustomer(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Customer is new, it will return
     * an empty collection; or if this Customer has previously
     * been saved, it will retrieve related ItemPricingDiscounts from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Customer.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildItemPricingDiscount[] List of ChildItemPricingDiscount objects
     */
    public function getItemPricingDiscountsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildItemPricingDiscountQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getItemPricingDiscounts($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aArCommissionCode) {
            $this->aArCommissionCode->removeCustomer($this);
        }
        if (null !== $this->aShipvia) {
            $this->aShipvia->removeCustomer($this);
        }
        if (null !== $this->aSoFreightRate) {
            $this->aSoFreightRate->removeCustomer($this);
        }
        $this->arcucustid = null;
        $this->arcuname = null;
        $this->arcuadr1 = null;
        $this->arcuadr2 = null;
        $this->arcuadr3 = null;
        $this->arcuctry = null;
        $this->arcucity = null;
        $this->arcustat = null;
        $this->arcuzipcode = null;
        $this->arcudeliverydays = null;
        $this->arcuremitwhse = null;
        $this->arcushipbin = null;
        $this->arcuallowaddons = null;
        $this->arculmecommcustid = null;
        $this->arcugsuse2ndbin = null;
        $this->arspsaleper1 = null;
        $this->arspsaleper2 = null;
        $this->arspsaleper3 = null;
        $this->artbmtaxcode = null;
        $this->arcutaxexemnbr = null;
        $this->intbwhse = null;
        $this->arcupriclvl = null;
        $this->arcushipcomp = null;
        $this->arcutxbl = null;
        $this->arcupostal = null;
        $this->artbshipvia = null;
        $this->arcubord = null;
        $this->artbtypecode = null;
        $this->artbpriccode = null;
        $this->artbcommcode = null;
        $this->artmtermcd = null;
        $this->arcucredlmt = null;
        $this->arcustmtcode = null;
        $this->arcucredhold = null;
        $this->arcufinchrg = null;
        $this->arcuusercode = null;
        $this->arcunewfc = null;
        $this->arcuunpdfc = null;
        $this->arcucurbal = null;
        $this->arcubalodue1 = null;
        $this->arcubalodue2 = null;
        $this->arcubalodue3 = null;
        $this->arcusalemtd = null;
        $this->arcuinvmtd = null;
        $this->arcusaleytd = null;
        $this->arcuinvytd = null;
        $this->arcudateopen = null;
        $this->arculastsaledate = null;
        $this->arcuhighbal = null;
        $this->arcubigsalemo = null;
        $this->arculastpaydate = null;
        $this->arcuavgpaydays = null;
        $this->arcuupszone = null;
        $this->arcuhighbaldate = null;
        $this->arcusale24mo1 = null;
        $this->arcuinv24mo1 = null;
        $this->arcusale24mo2 = null;
        $this->arcuinv24mo2 = null;
        $this->arcusale24mo3 = null;
        $this->arcuinv24mo3 = null;
        $this->arcusale24mo4 = null;
        $this->arcuinv24mo4 = null;
        $this->arcusale24mo5 = null;
        $this->arcuinv24mo5 = null;
        $this->arcusale24mo6 = null;
        $this->arcuinv24mo6 = null;
        $this->arcusale24mo7 = null;
        $this->arcuinv24mo7 = null;
        $this->arcusale24mo8 = null;
        $this->arcuinv24mo8 = null;
        $this->arcusale24mo9 = null;
        $this->arcuinv24mo9 = null;
        $this->arcusale24mo10 = null;
        $this->arcuinv24mo10 = null;
        $this->arcusale24mo11 = null;
        $this->arcuinv24mo11 = null;
        $this->arcusale24mo12 = null;
        $this->arcuinv24mo12 = null;
        $this->arcusale24mo13 = null;
        $this->arcuinv24mo13 = null;
        $this->arcusale24mo14 = null;
        $this->arcuinv24mo14 = null;
        $this->arcusale24mo15 = null;
        $this->arcuinv24mo15 = null;
        $this->arcusale24mo16 = null;
        $this->arcuinv24mo16 = null;
        $this->arcusale24mo17 = null;
        $this->arcuinv24mo17 = null;
        $this->arcusale24mo18 = null;
        $this->arcuinv24mo18 = null;
        $this->arcusale24mo19 = null;
        $this->arcuinv24mo19 = null;
        $this->arcusale24mo20 = null;
        $this->arcuinv24mo20 = null;
        $this->arcusale24mo21 = null;
        $this->arcuinv24mo21 = null;
        $this->arcusale24mo22 = null;
        $this->arcuinv24mo22 = null;
        $this->arcusale24mo23 = null;
        $this->arcuinv24mo23 = null;
        $this->arcusale24mo24 = null;
        $this->arcuinv24mo24 = null;
        $this->arculastpayamt = null;
        $this->arcuordrtot = null;
        $this->arcuusefrtin = null;
        $this->arcumyvendid = null;
        $this->arcuaddlpricdisc = null;
        $this->arcuactiveinactive = null;
        $this->arcuinactivedate = null;
        $this->arcuchrgfrt = null;
        $this->arcucorexdays = null;
        $this->arcucontractnbr = null;
        $this->arcucorelf = null;
        $this->arcucorebankid = null;
        $this->arcudunsnbr = null;
        $this->arcurfmlvalu = null;
        $this->arcucustpoparam = null;
        $this->arcuagelevel = null;
        $this->artbroute = null;
        $this->arcuwgtaxcode = null;
        $this->arcuacptsupercede = null;
        $this->arcumstrcustid = null;
        $this->arcusurchgpct = null;
        $this->arcuallowsplit = null;
        $this->arculinemin = null;
        $this->arcuordrmin = null;
        $this->arcuupsacctnbr = null;
        $this->arcuprtmatcert = null;
        $this->arcufobinputyn = null;
        $this->arcufobperlb = null;
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
            if ($this->collArCust3partyFreights) {
                foreach ($this->collArCust3partyFreights as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collArPaymentPendings) {
                foreach ($this->collArPaymentPendings as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->singleArCashHead) {
                $this->singleArCashHead->clearAllReferences($deep);
            }
            if ($this->collArInvoices) {
                foreach ($this->collArInvoices as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCustomerShiptos) {
                foreach ($this->collCustomerShiptos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collInvSerialWarranties) {
                foreach ($this->collInvSerialWarranties as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemXrefCustomerNotes) {
                foreach ($this->collItemXrefCustomerNotes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collBookingDayCustomers) {
                foreach ($this->collBookingDayCustomers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collBookingDayDetails) {
                foreach ($this->collBookingDayDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collBookings) {
                foreach ($this->collBookings as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesHistories) {
                foreach ($this->collSalesHistories as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesOrders) {
                foreach ($this->collSalesOrders as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collItemPricingDiscounts) {
                foreach ($this->collItemPricingDiscounts as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collArCust3partyFreights = null;
        $this->collArPaymentPendings = null;
        $this->singleArCashHead = null;
        $this->collArInvoices = null;
        $this->collCustomerShiptos = null;
        $this->collInvSerialWarranties = null;
        $this->collItemXrefCustomerNotes = null;
        $this->collBookingDayCustomers = null;
        $this->collBookingDayDetails = null;
        $this->collBookings = null;
        $this->collSalesHistories = null;
        $this->collSalesOrders = null;
        $this->collItemPricingDiscounts = null;
        $this->aArCommissionCode = null;
        $this->aShipvia = null;
        $this->aSoFreightRate = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CustomerTableMap::DEFAULT_STRING_FORMAT);
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
