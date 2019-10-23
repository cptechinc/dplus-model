<?php

namespace Base;

use \ApBuyer as ChildApBuyer;
use \ApBuyerQuery as ChildApBuyerQuery;
use \ApTermsCode as ChildApTermsCode;
use \ApTermsCodeQuery as ChildApTermsCodeQuery;
use \ApTypeCode as ChildApTypeCode;
use \ApTypeCodeQuery as ChildApTypeCodeQuery;
use \PurchaseOrder as ChildPurchaseOrder;
use \PurchaseOrderQuery as ChildPurchaseOrderQuery;
use \Shipvia as ChildShipvia;
use \ShipviaQuery as ChildShipviaQuery;
use \Vendor as ChildVendor;
use \VendorQuery as ChildVendorQuery;
use \VendorShipfrom as ChildVendorShipfrom;
use \VendorShipfromQuery as ChildVendorShipfromQuery;
use \Exception;
use \PDO;
use Map\PurchaseOrderTableMap;
use Map\VendorShipfromTableMap;
use Map\VendorTableMap;
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
 * Base class that represents a row from the 'ap_vend_mast' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class Vendor implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\VendorTableMap';


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
     * The value for the apvevendid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apvevendid;

    /**
     * The value for the apvename field.
     *
     * @var        string
     */
    protected $apvename;

    /**
     * The value for the apveadr1 field.
     *
     * @var        string
     */
    protected $apveadr1;

    /**
     * The value for the apveadr2 field.
     *
     * @var        string
     */
    protected $apveadr2;

    /**
     * The value for the apveadr3 field.
     *
     * @var        string
     */
    protected $apveadr3;

    /**
     * The value for the apvectry field.
     *
     * @var        string
     */
    protected $apvectry;

    /**
     * The value for the apvecity field.
     *
     * @var        string
     */
    protected $apvecity;

    /**
     * The value for the apvestat field.
     *
     * @var        string
     */
    protected $apvestat;

    /**
     * The value for the apvezipcode field.
     *
     * @var        string
     */
    protected $apvezipcode;

    /**
     * The value for the apvepayname field.
     *
     * @var        string
     */
    protected $apvepayname;

    /**
     * The value for the apvepayadr1 field.
     *
     * @var        string
     */
    protected $apvepayadr1;

    /**
     * The value for the apvepayadr2 field.
     *
     * @var        string
     */
    protected $apvepayadr2;

    /**
     * The value for the apvepayadr3 field.
     *
     * @var        string
     */
    protected $apvepayadr3;

    /**
     * The value for the apvepayctry field.
     *
     * @var        string
     */
    protected $apvepayctry;

    /**
     * The value for the apvepaycity field.
     *
     * @var        string
     */
    protected $apvepaycity;

    /**
     * The value for the apvepaystat field.
     *
     * @var        string
     */
    protected $apvepaystat;

    /**
     * The value for the apvepayzipcode field.
     *
     * @var        string
     */
    protected $apvepayzipcode;

    /**
     * The value for the apvestatus field.
     *
     * @var        string
     */
    protected $apvestatus;

    /**
     * The value for the apvetakeexpireddisc field.
     *
     * @var        string
     */
    protected $apvetakeexpireddisc;

    /**
     * The value for the apveprinthts field.
     *
     * @var        string
     */
    protected $apveprinthts;

    /**
     * The value for the apvefabbin field.
     *
     * @var        string
     */
    protected $apvefabbin;

    /**
     * The value for the apvelmprntbulk field.
     *
     * @var        string
     */
    protected $apvelmprntbulk;

    /**
     * The value for the apveallowdropship field.
     *
     * @var        string
     */
    protected $apveallowdropship;

    /**
     * The value for the aptbtypecode field.
     *
     * @var        string
     */
    protected $aptbtypecode;

    /**
     * The value for the aptmtermcode field.
     *
     * @var        string
     */
    protected $aptmtermcode;

    /**
     * The value for the apvesviacode field.
     *
     * @var        string
     */
    protected $apvesviacode;

    /**
     * The value for the apveoldfob field.
     *
     * @var        string
     */
    protected $apveoldfob;

    /**
     * The value for the apveleaddays field.
     *
     * @var        int
     */
    protected $apveleaddays;

    /**
     * The value for the apveglacct field.
     *
     * @var        string
     */
    protected $apveglacct;

    /**
     * The value for the apve1099ssnbr field.
     *
     * @var        string
     */
    protected $apve1099ssnbr;

    /**
     * The value for the apveminordrcode field.
     *
     * @var        string
     */
    protected $apveminordrcode;

    /**
     * The value for the apveminordrvalue field.
     *
     * @var        int
     */
    protected $apveminordrvalue;

    /**
     * The value for the apvepurmtd field.
     *
     * @var        string
     */
    protected $apvepurmtd;

    /**
     * The value for the apvepomtd field.
     *
     * @var        int
     */
    protected $apvepomtd;

    /**
     * The value for the apveinvcmtd field.
     *
     * @var        string
     */
    protected $apveinvcmtd;

    /**
     * The value for the apveicntmtd field.
     *
     * @var        int
     */
    protected $apveicntmtd;

    /**
     * The value for the apvedateopen field.
     *
     * @var        string
     */
    protected $apvedateopen;

    /**
     * The value for the apvelastpurdate field.
     *
     * @var        string
     */
    protected $apvelastpurdate;

    /**
     * The value for the apvepur24mo01 field.
     *
     * @var        string
     */
    protected $apvepur24mo01;

    /**
     * The value for the apvepo24mo01 field.
     *
     * @var        int
     */
    protected $apvepo24mo01;

    /**
     * The value for the apveinvc24mo01 field.
     *
     * @var        string
     */
    protected $apveinvc24mo01;

    /**
     * The value for the apveicnt24mo01 field.
     *
     * @var        int
     */
    protected $apveicnt24mo01;

    /**
     * The value for the apvepur24mo02 field.
     *
     * @var        string
     */
    protected $apvepur24mo02;

    /**
     * The value for the apvepo24mo02 field.
     *
     * @var        int
     */
    protected $apvepo24mo02;

    /**
     * The value for the apveinvc24mo02 field.
     *
     * @var        string
     */
    protected $apveinvc24mo02;

    /**
     * The value for the apveicnt24mo02 field.
     *
     * @var        int
     */
    protected $apveicnt24mo02;

    /**
     * The value for the apvepur24mo03 field.
     *
     * @var        string
     */
    protected $apvepur24mo03;

    /**
     * The value for the apvepo24mo03 field.
     *
     * @var        int
     */
    protected $apvepo24mo03;

    /**
     * The value for the apveinvc24mo03 field.
     *
     * @var        string
     */
    protected $apveinvc24mo03;

    /**
     * The value for the apveicnt24mo03 field.
     *
     * @var        int
     */
    protected $apveicnt24mo03;

    /**
     * The value for the apvepur24mo04 field.
     *
     * @var        string
     */
    protected $apvepur24mo04;

    /**
     * The value for the apvepo24mo04 field.
     *
     * @var        int
     */
    protected $apvepo24mo04;

    /**
     * The value for the apveinvc24mo04 field.
     *
     * @var        string
     */
    protected $apveinvc24mo04;

    /**
     * The value for the apveicnt24mo04 field.
     *
     * @var        int
     */
    protected $apveicnt24mo04;

    /**
     * The value for the apvepur24mo05 field.
     *
     * @var        string
     */
    protected $apvepur24mo05;

    /**
     * The value for the apvepo24mo05 field.
     *
     * @var        int
     */
    protected $apvepo24mo05;

    /**
     * The value for the apveinvc24mo05 field.
     *
     * @var        string
     */
    protected $apveinvc24mo05;

    /**
     * The value for the apveicnt24mo05 field.
     *
     * @var        int
     */
    protected $apveicnt24mo05;

    /**
     * The value for the apvepur24mo06 field.
     *
     * @var        string
     */
    protected $apvepur24mo06;

    /**
     * The value for the apvepo24mo06 field.
     *
     * @var        int
     */
    protected $apvepo24mo06;

    /**
     * The value for the apveinvc24mo06 field.
     *
     * @var        string
     */
    protected $apveinvc24mo06;

    /**
     * The value for the apveicnt24mo06 field.
     *
     * @var        int
     */
    protected $apveicnt24mo06;

    /**
     * The value for the apvepur24mo07 field.
     *
     * @var        string
     */
    protected $apvepur24mo07;

    /**
     * The value for the apvepo24mo07 field.
     *
     * @var        int
     */
    protected $apvepo24mo07;

    /**
     * The value for the apveinvc24mo07 field.
     *
     * @var        string
     */
    protected $apveinvc24mo07;

    /**
     * The value for the apveicnt24mo07 field.
     *
     * @var        int
     */
    protected $apveicnt24mo07;

    /**
     * The value for the apvepur24mo08 field.
     *
     * @var        string
     */
    protected $apvepur24mo08;

    /**
     * The value for the apvepo24mo08 field.
     *
     * @var        int
     */
    protected $apvepo24mo08;

    /**
     * The value for the apveinvc24mo08 field.
     *
     * @var        string
     */
    protected $apveinvc24mo08;

    /**
     * The value for the apveicnt24mo08 field.
     *
     * @var        int
     */
    protected $apveicnt24mo08;

    /**
     * The value for the apvepur24mo09 field.
     *
     * @var        string
     */
    protected $apvepur24mo09;

    /**
     * The value for the apvepo24mo09 field.
     *
     * @var        int
     */
    protected $apvepo24mo09;

    /**
     * The value for the apveinvc24mo09 field.
     *
     * @var        string
     */
    protected $apveinvc24mo09;

    /**
     * The value for the apveicnt24mo09 field.
     *
     * @var        int
     */
    protected $apveicnt24mo09;

    /**
     * The value for the apvepur24mo10 field.
     *
     * @var        string
     */
    protected $apvepur24mo10;

    /**
     * The value for the apvepo24mo10 field.
     *
     * @var        int
     */
    protected $apvepo24mo10;

    /**
     * The value for the apveinvc24mo10 field.
     *
     * @var        string
     */
    protected $apveinvc24mo10;

    /**
     * The value for the apveicnt24mo10 field.
     *
     * @var        int
     */
    protected $apveicnt24mo10;

    /**
     * The value for the apvepur24mo11 field.
     *
     * @var        string
     */
    protected $apvepur24mo11;

    /**
     * The value for the apvepo24mo11 field.
     *
     * @var        int
     */
    protected $apvepo24mo11;

    /**
     * The value for the apveinvc24mo11 field.
     *
     * @var        string
     */
    protected $apveinvc24mo11;

    /**
     * The value for the apveicnt24mo11 field.
     *
     * @var        int
     */
    protected $apveicnt24mo11;

    /**
     * The value for the apvepur24mo12 field.
     *
     * @var        string
     */
    protected $apvepur24mo12;

    /**
     * The value for the apvepo24mo12 field.
     *
     * @var        int
     */
    protected $apvepo24mo12;

    /**
     * The value for the apveinvc24mo12 field.
     *
     * @var        string
     */
    protected $apveinvc24mo12;

    /**
     * The value for the apveicnt24mo12 field.
     *
     * @var        int
     */
    protected $apveicnt24mo12;

    /**
     * The value for the apvepur24mo13 field.
     *
     * @var        string
     */
    protected $apvepur24mo13;

    /**
     * The value for the apvepo24mo13 field.
     *
     * @var        int
     */
    protected $apvepo24mo13;

    /**
     * The value for the apveinvc24mo13 field.
     *
     * @var        string
     */
    protected $apveinvc24mo13;

    /**
     * The value for the apveicnt24mo13 field.
     *
     * @var        int
     */
    protected $apveicnt24mo13;

    /**
     * The value for the apvepur24mo14 field.
     *
     * @var        string
     */
    protected $apvepur24mo14;

    /**
     * The value for the apvepo24mo14 field.
     *
     * @var        int
     */
    protected $apvepo24mo14;

    /**
     * The value for the apveinvc24mo14 field.
     *
     * @var        string
     */
    protected $apveinvc24mo14;

    /**
     * The value for the apveicnt24mo14 field.
     *
     * @var        int
     */
    protected $apveicnt24mo14;

    /**
     * The value for the apvepur24mo15 field.
     *
     * @var        string
     */
    protected $apvepur24mo15;

    /**
     * The value for the apvepo24mo15 field.
     *
     * @var        int
     */
    protected $apvepo24mo15;

    /**
     * The value for the apveinvc24mo15 field.
     *
     * @var        string
     */
    protected $apveinvc24mo15;

    /**
     * The value for the apveicnt24mo15 field.
     *
     * @var        int
     */
    protected $apveicnt24mo15;

    /**
     * The value for the apvepur24mo16 field.
     *
     * @var        string
     */
    protected $apvepur24mo16;

    /**
     * The value for the apvepo24mo16 field.
     *
     * @var        int
     */
    protected $apvepo24mo16;

    /**
     * The value for the apveinvc24mo16 field.
     *
     * @var        string
     */
    protected $apveinvc24mo16;

    /**
     * The value for the apveicnt24mo16 field.
     *
     * @var        int
     */
    protected $apveicnt24mo16;

    /**
     * The value for the apvepur24mo17 field.
     *
     * @var        string
     */
    protected $apvepur24mo17;

    /**
     * The value for the apvepo24mo17 field.
     *
     * @var        int
     */
    protected $apvepo24mo17;

    /**
     * The value for the apveinvc24mo17 field.
     *
     * @var        string
     */
    protected $apveinvc24mo17;

    /**
     * The value for the apveicnt24mo17 field.
     *
     * @var        int
     */
    protected $apveicnt24mo17;

    /**
     * The value for the apvepur24mo18 field.
     *
     * @var        string
     */
    protected $apvepur24mo18;

    /**
     * The value for the apvepo24mo18 field.
     *
     * @var        int
     */
    protected $apvepo24mo18;

    /**
     * The value for the apveinvc24mo18 field.
     *
     * @var        string
     */
    protected $apveinvc24mo18;

    /**
     * The value for the apveicnt24mo18 field.
     *
     * @var        int
     */
    protected $apveicnt24mo18;

    /**
     * The value for the apvepur24mo19 field.
     *
     * @var        string
     */
    protected $apvepur24mo19;

    /**
     * The value for the apvepo24mo19 field.
     *
     * @var        int
     */
    protected $apvepo24mo19;

    /**
     * The value for the apveinvc24mo19 field.
     *
     * @var        string
     */
    protected $apveinvc24mo19;

    /**
     * The value for the apveicnt24mo19 field.
     *
     * @var        int
     */
    protected $apveicnt24mo19;

    /**
     * The value for the apvepur24mo20 field.
     *
     * @var        string
     */
    protected $apvepur24mo20;

    /**
     * The value for the apvepo24mo20 field.
     *
     * @var        int
     */
    protected $apvepo24mo20;

    /**
     * The value for the apveinvc24mo20 field.
     *
     * @var        string
     */
    protected $apveinvc24mo20;

    /**
     * The value for the apveicnt24mo20 field.
     *
     * @var        int
     */
    protected $apveicnt24mo20;

    /**
     * The value for the apvepur24mo21 field.
     *
     * @var        string
     */
    protected $apvepur24mo21;

    /**
     * The value for the apvepo24mo21 field.
     *
     * @var        int
     */
    protected $apvepo24mo21;

    /**
     * The value for the apveinvc24mo21 field.
     *
     * @var        string
     */
    protected $apveinvc24mo21;

    /**
     * The value for the apveicnt24mo21 field.
     *
     * @var        int
     */
    protected $apveicnt24mo21;

    /**
     * The value for the apvepur24mo22 field.
     *
     * @var        string
     */
    protected $apvepur24mo22;

    /**
     * The value for the apvepo24mo22 field.
     *
     * @var        int
     */
    protected $apvepo24mo22;

    /**
     * The value for the apveinvc24mo22 field.
     *
     * @var        string
     */
    protected $apveinvc24mo22;

    /**
     * The value for the apveicnt24mo22 field.
     *
     * @var        int
     */
    protected $apveicnt24mo22;

    /**
     * The value for the apvepur24mo23 field.
     *
     * @var        string
     */
    protected $apvepur24mo23;

    /**
     * The value for the apvepo24mo23 field.
     *
     * @var        int
     */
    protected $apvepo24mo23;

    /**
     * The value for the apveinvc24mo23 field.
     *
     * @var        string
     */
    protected $apveinvc24mo23;

    /**
     * The value for the apveicnt24mo23 field.
     *
     * @var        int
     */
    protected $apveicnt24mo23;

    /**
     * The value for the apvepur24mo24 field.
     *
     * @var        string
     */
    protected $apvepur24mo24;

    /**
     * The value for the apvepo24mo24 field.
     *
     * @var        int
     */
    protected $apvepo24mo24;

    /**
     * The value for the apveinvc24mo24 field.
     *
     * @var        string
     */
    protected $apveinvc24mo24;

    /**
     * The value for the apveicnt24mo24 field.
     *
     * @var        int
     */
    protected $apveicnt24mo24;

    /**
     * The value for the apvecrncy field.
     *
     * @var        string
     */
    protected $apvecrncy;

    /**
     * The value for the apvefrtinamt field.
     *
     * @var        string
     */
    protected $apvefrtinamt;

    /**
     * The value for the apveouracctnbr field.
     *
     * @var        string
     */
    protected $apveouracctnbr;

    /**
     * The value for the apvevenddisc field.
     *
     * @var        string
     */
    protected $apvevenddisc;

    /**
     * The value for the apvefob field.
     *
     * @var        string
     */
    protected $apvefob;

    /**
     * The value for the apveroylpct field.
     *
     * @var        string
     */
    protected $apveroylpct;

    /**
     * The value for the apveprtpoeoru field.
     *
     * @var        string
     */
    protected $apveprtpoeoru;

    /**
     * The value for the apvecomrate field.
     *
     * @var        string
     */
    protected $apvecomrate;

    /**
     * The value for the apveuselandonrcpt field.
     *
     * @var        string
     */
    protected $apveuselandonrcpt;

    /**
     * The value for the apvebuyrwhse1 field.
     *
     * @var        string
     */
    protected $apvebuyrwhse1;

    /**
     * The value for the apvebuyrcode1 field.
     *
     * @var        string
     */
    protected $apvebuyrcode1;

    /**
     * The value for the apvebuyrwhse2 field.
     *
     * @var        string
     */
    protected $apvebuyrwhse2;

    /**
     * The value for the apvebuyrcode2 field.
     *
     * @var        string
     */
    protected $apvebuyrcode2;

    /**
     * The value for the apvebuyrwhse3 field.
     *
     * @var        string
     */
    protected $apvebuyrwhse3;

    /**
     * The value for the apvebuyrcode3 field.
     *
     * @var        string
     */
    protected $apvebuyrcode3;

    /**
     * The value for the apvebuyrwhse4 field.
     *
     * @var        string
     */
    protected $apvebuyrwhse4;

    /**
     * The value for the apvebuyrcode4 field.
     *
     * @var        string
     */
    protected $apvebuyrcode4;

    /**
     * The value for the apvebuyrwhse5 field.
     *
     * @var        string
     */
    protected $apvebuyrwhse5;

    /**
     * The value for the apvebuyrcode5 field.
     *
     * @var        string
     */
    protected $apvebuyrcode5;

    /**
     * The value for the apvebuyrwhse6 field.
     *
     * @var        string
     */
    protected $apvebuyrwhse6;

    /**
     * The value for the apvebuyrcode6 field.
     *
     * @var        string
     */
    protected $apvebuyrcode6;

    /**
     * The value for the apvebuyrwhse7 field.
     *
     * @var        string
     */
    protected $apvebuyrwhse7;

    /**
     * The value for the apvebuyrcode7 field.
     *
     * @var        string
     */
    protected $apvebuyrcode7;

    /**
     * The value for the apvebuyrwhse8 field.
     *
     * @var        string
     */
    protected $apvebuyrwhse8;

    /**
     * The value for the apvebuyrcode8 field.
     *
     * @var        string
     */
    protected $apvebuyrcode8;

    /**
     * The value for the apvebuyrwhse9 field.
     *
     * @var        string
     */
    protected $apvebuyrwhse9;

    /**
     * The value for the apvebuyrcode9 field.
     *
     * @var        string
     */
    protected $apvebuyrcode9;

    /**
     * The value for the apvebuyrwhse10 field.
     *
     * @var        string
     */
    protected $apvebuyrwhse10;

    /**
     * The value for the apvebuyrcode10 field.
     *
     * @var        string
     */
    protected $apvebuyrcode10;

    /**
     * The value for the apvelandcost field.
     *
     * @var        string
     */
    protected $apvelandcost;

    /**
     * The value for the apvereleasenbr field.
     *
     * @var        int
     */
    protected $apvereleasenbr;

    /**
     * The value for the apvescanstartpos field.
     *
     * @var        int
     */
    protected $apvescanstartpos;

    /**
     * The value for the apvescanlength field.
     *
     * @var        int
     */
    protected $apvescanlength;

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
     * @var        ChildApTypeCode
     */
    protected $aApTypeCode;

    /**
     * @var        ChildApTermsCode
     */
    protected $aApTermsCode;

    /**
     * @var        ChildShipvia
     */
    protected $aShipvia;

    /**
     * @var        ChildApBuyer
     */
    protected $aApBuyer;

    /**
     * @var        ObjectCollection|ChildVendorShipfrom[] Collection to store aggregation of ChildVendorShipfrom objects.
     */
    protected $collVendorShipfroms;
    protected $collVendorShipfromsPartial;

    /**
     * @var        ObjectCollection|ChildPurchaseOrder[] Collection to store aggregation of ChildPurchaseOrder objects.
     */
    protected $collPurchaseOrders;
    protected $collPurchaseOrdersPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildVendorShipfrom[]
     */
    protected $vendorShipfromsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildPurchaseOrder[]
     */
    protected $purchaseOrdersScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->apvevendid = '';
    }

    /**
     * Initializes internal state of Base\Vendor object.
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
     * Compares this with another <code>Vendor</code> instance.  If
     * <code>obj</code> is an instance of <code>Vendor</code>, delegates to
     * <code>equals(Vendor)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|Vendor The current object, for fluid interface
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
     * Get the [apvevendid] column value.
     *
     * @return string
     */
    public function getApvevendid()
    {
        return $this->apvevendid;
    }

    /**
     * Get the [apvename] column value.
     *
     * @return string
     */
    public function getApvename()
    {
        return $this->apvename;
    }

    /**
     * Get the [apveadr1] column value.
     *
     * @return string
     */
    public function getApveadr1()
    {
        return $this->apveadr1;
    }

    /**
     * Get the [apveadr2] column value.
     *
     * @return string
     */
    public function getApveadr2()
    {
        return $this->apveadr2;
    }

    /**
     * Get the [apveadr3] column value.
     *
     * @return string
     */
    public function getApveadr3()
    {
        return $this->apveadr3;
    }

    /**
     * Get the [apvectry] column value.
     *
     * @return string
     */
    public function getApvectry()
    {
        return $this->apvectry;
    }

    /**
     * Get the [apvecity] column value.
     *
     * @return string
     */
    public function getApvecity()
    {
        return $this->apvecity;
    }

    /**
     * Get the [apvestat] column value.
     *
     * @return string
     */
    public function getApvestat()
    {
        return $this->apvestat;
    }

    /**
     * Get the [apvezipcode] column value.
     *
     * @return string
     */
    public function getApvezipcode()
    {
        return $this->apvezipcode;
    }

    /**
     * Get the [apvepayname] column value.
     *
     * @return string
     */
    public function getApvepayname()
    {
        return $this->apvepayname;
    }

    /**
     * Get the [apvepayadr1] column value.
     *
     * @return string
     */
    public function getApvepayadr1()
    {
        return $this->apvepayadr1;
    }

    /**
     * Get the [apvepayadr2] column value.
     *
     * @return string
     */
    public function getApvepayadr2()
    {
        return $this->apvepayadr2;
    }

    /**
     * Get the [apvepayadr3] column value.
     *
     * @return string
     */
    public function getApvepayadr3()
    {
        return $this->apvepayadr3;
    }

    /**
     * Get the [apvepayctry] column value.
     *
     * @return string
     */
    public function getApvepayctry()
    {
        return $this->apvepayctry;
    }

    /**
     * Get the [apvepaycity] column value.
     *
     * @return string
     */
    public function getApvepaycity()
    {
        return $this->apvepaycity;
    }

    /**
     * Get the [apvepaystat] column value.
     *
     * @return string
     */
    public function getApvepaystat()
    {
        return $this->apvepaystat;
    }

    /**
     * Get the [apvepayzipcode] column value.
     *
     * @return string
     */
    public function getApvepayzipcode()
    {
        return $this->apvepayzipcode;
    }

    /**
     * Get the [apvestatus] column value.
     *
     * @return string
     */
    public function getApvestatus()
    {
        return $this->apvestatus;
    }

    /**
     * Get the [apvetakeexpireddisc] column value.
     *
     * @return string
     */
    public function getApvetakeexpireddisc()
    {
        return $this->apvetakeexpireddisc;
    }

    /**
     * Get the [apveprinthts] column value.
     *
     * @return string
     */
    public function getApveprinthts()
    {
        return $this->apveprinthts;
    }

    /**
     * Get the [apvefabbin] column value.
     *
     * @return string
     */
    public function getApvefabbin()
    {
        return $this->apvefabbin;
    }

    /**
     * Get the [apvelmprntbulk] column value.
     *
     * @return string
     */
    public function getApvelmprntbulk()
    {
        return $this->apvelmprntbulk;
    }

    /**
     * Get the [apveallowdropship] column value.
     *
     * @return string
     */
    public function getApveallowdropship()
    {
        return $this->apveallowdropship;
    }

    /**
     * Get the [aptbtypecode] column value.
     *
     * @return string
     */
    public function getAptbtypecode()
    {
        return $this->aptbtypecode;
    }

    /**
     * Get the [aptmtermcode] column value.
     *
     * @return string
     */
    public function getAptmtermcode()
    {
        return $this->aptmtermcode;
    }

    /**
     * Get the [apvesviacode] column value.
     *
     * @return string
     */
    public function getApvesviacode()
    {
        return $this->apvesviacode;
    }

    /**
     * Get the [apveoldfob] column value.
     *
     * @return string
     */
    public function getApveoldfob()
    {
        return $this->apveoldfob;
    }

    /**
     * Get the [apveleaddays] column value.
     *
     * @return int
     */
    public function getApveleaddays()
    {
        return $this->apveleaddays;
    }

    /**
     * Get the [apveglacct] column value.
     *
     * @return string
     */
    public function getApveglacct()
    {
        return $this->apveglacct;
    }

    /**
     * Get the [apve1099ssnbr] column value.
     *
     * @return string
     */
    public function getApve1099ssnbr()
    {
        return $this->apve1099ssnbr;
    }

    /**
     * Get the [apveminordrcode] column value.
     *
     * @return string
     */
    public function getApveminordrcode()
    {
        return $this->apveminordrcode;
    }

    /**
     * Get the [apveminordrvalue] column value.
     *
     * @return int
     */
    public function getApveminordrvalue()
    {
        return $this->apveminordrvalue;
    }

    /**
     * Get the [apvepurmtd] column value.
     *
     * @return string
     */
    public function getApvepurmtd()
    {
        return $this->apvepurmtd;
    }

    /**
     * Get the [apvepomtd] column value.
     *
     * @return int
     */
    public function getApvepomtd()
    {
        return $this->apvepomtd;
    }

    /**
     * Get the [apveinvcmtd] column value.
     *
     * @return string
     */
    public function getApveinvcmtd()
    {
        return $this->apveinvcmtd;
    }

    /**
     * Get the [apveicntmtd] column value.
     *
     * @return int
     */
    public function getApveicntmtd()
    {
        return $this->apveicntmtd;
    }

    /**
     * Get the [apvedateopen] column value.
     *
     * @return string
     */
    public function getApvedateopen()
    {
        return $this->apvedateopen;
    }

    /**
     * Get the [apvelastpurdate] column value.
     *
     * @return string
     */
    public function getApvelastpurdate()
    {
        return $this->apvelastpurdate;
    }

    /**
     * Get the [apvepur24mo01] column value.
     *
     * @return string
     */
    public function getApvepur24mo01()
    {
        return $this->apvepur24mo01;
    }

    /**
     * Get the [apvepo24mo01] column value.
     *
     * @return int
     */
    public function getApvepo24mo01()
    {
        return $this->apvepo24mo01;
    }

    /**
     * Get the [apveinvc24mo01] column value.
     *
     * @return string
     */
    public function getApveinvc24mo01()
    {
        return $this->apveinvc24mo01;
    }

    /**
     * Get the [apveicnt24mo01] column value.
     *
     * @return int
     */
    public function getApveicnt24mo01()
    {
        return $this->apveicnt24mo01;
    }

    /**
     * Get the [apvepur24mo02] column value.
     *
     * @return string
     */
    public function getApvepur24mo02()
    {
        return $this->apvepur24mo02;
    }

    /**
     * Get the [apvepo24mo02] column value.
     *
     * @return int
     */
    public function getApvepo24mo02()
    {
        return $this->apvepo24mo02;
    }

    /**
     * Get the [apveinvc24mo02] column value.
     *
     * @return string
     */
    public function getApveinvc24mo02()
    {
        return $this->apveinvc24mo02;
    }

    /**
     * Get the [apveicnt24mo02] column value.
     *
     * @return int
     */
    public function getApveicnt24mo02()
    {
        return $this->apveicnt24mo02;
    }

    /**
     * Get the [apvepur24mo03] column value.
     *
     * @return string
     */
    public function getApvepur24mo03()
    {
        return $this->apvepur24mo03;
    }

    /**
     * Get the [apvepo24mo03] column value.
     *
     * @return int
     */
    public function getApvepo24mo03()
    {
        return $this->apvepo24mo03;
    }

    /**
     * Get the [apveinvc24mo03] column value.
     *
     * @return string
     */
    public function getApveinvc24mo03()
    {
        return $this->apveinvc24mo03;
    }

    /**
     * Get the [apveicnt24mo03] column value.
     *
     * @return int
     */
    public function getApveicnt24mo03()
    {
        return $this->apveicnt24mo03;
    }

    /**
     * Get the [apvepur24mo04] column value.
     *
     * @return string
     */
    public function getApvepur24mo04()
    {
        return $this->apvepur24mo04;
    }

    /**
     * Get the [apvepo24mo04] column value.
     *
     * @return int
     */
    public function getApvepo24mo04()
    {
        return $this->apvepo24mo04;
    }

    /**
     * Get the [apveinvc24mo04] column value.
     *
     * @return string
     */
    public function getApveinvc24mo04()
    {
        return $this->apveinvc24mo04;
    }

    /**
     * Get the [apveicnt24mo04] column value.
     *
     * @return int
     */
    public function getApveicnt24mo04()
    {
        return $this->apveicnt24mo04;
    }

    /**
     * Get the [apvepur24mo05] column value.
     *
     * @return string
     */
    public function getApvepur24mo05()
    {
        return $this->apvepur24mo05;
    }

    /**
     * Get the [apvepo24mo05] column value.
     *
     * @return int
     */
    public function getApvepo24mo05()
    {
        return $this->apvepo24mo05;
    }

    /**
     * Get the [apveinvc24mo05] column value.
     *
     * @return string
     */
    public function getApveinvc24mo05()
    {
        return $this->apveinvc24mo05;
    }

    /**
     * Get the [apveicnt24mo05] column value.
     *
     * @return int
     */
    public function getApveicnt24mo05()
    {
        return $this->apveicnt24mo05;
    }

    /**
     * Get the [apvepur24mo06] column value.
     *
     * @return string
     */
    public function getApvepur24mo06()
    {
        return $this->apvepur24mo06;
    }

    /**
     * Get the [apvepo24mo06] column value.
     *
     * @return int
     */
    public function getApvepo24mo06()
    {
        return $this->apvepo24mo06;
    }

    /**
     * Get the [apveinvc24mo06] column value.
     *
     * @return string
     */
    public function getApveinvc24mo06()
    {
        return $this->apveinvc24mo06;
    }

    /**
     * Get the [apveicnt24mo06] column value.
     *
     * @return int
     */
    public function getApveicnt24mo06()
    {
        return $this->apveicnt24mo06;
    }

    /**
     * Get the [apvepur24mo07] column value.
     *
     * @return string
     */
    public function getApvepur24mo07()
    {
        return $this->apvepur24mo07;
    }

    /**
     * Get the [apvepo24mo07] column value.
     *
     * @return int
     */
    public function getApvepo24mo07()
    {
        return $this->apvepo24mo07;
    }

    /**
     * Get the [apveinvc24mo07] column value.
     *
     * @return string
     */
    public function getApveinvc24mo07()
    {
        return $this->apveinvc24mo07;
    }

    /**
     * Get the [apveicnt24mo07] column value.
     *
     * @return int
     */
    public function getApveicnt24mo07()
    {
        return $this->apveicnt24mo07;
    }

    /**
     * Get the [apvepur24mo08] column value.
     *
     * @return string
     */
    public function getApvepur24mo08()
    {
        return $this->apvepur24mo08;
    }

    /**
     * Get the [apvepo24mo08] column value.
     *
     * @return int
     */
    public function getApvepo24mo08()
    {
        return $this->apvepo24mo08;
    }

    /**
     * Get the [apveinvc24mo08] column value.
     *
     * @return string
     */
    public function getApveinvc24mo08()
    {
        return $this->apveinvc24mo08;
    }

    /**
     * Get the [apveicnt24mo08] column value.
     *
     * @return int
     */
    public function getApveicnt24mo08()
    {
        return $this->apveicnt24mo08;
    }

    /**
     * Get the [apvepur24mo09] column value.
     *
     * @return string
     */
    public function getApvepur24mo09()
    {
        return $this->apvepur24mo09;
    }

    /**
     * Get the [apvepo24mo09] column value.
     *
     * @return int
     */
    public function getApvepo24mo09()
    {
        return $this->apvepo24mo09;
    }

    /**
     * Get the [apveinvc24mo09] column value.
     *
     * @return string
     */
    public function getApveinvc24mo09()
    {
        return $this->apveinvc24mo09;
    }

    /**
     * Get the [apveicnt24mo09] column value.
     *
     * @return int
     */
    public function getApveicnt24mo09()
    {
        return $this->apveicnt24mo09;
    }

    /**
     * Get the [apvepur24mo10] column value.
     *
     * @return string
     */
    public function getApvepur24mo10()
    {
        return $this->apvepur24mo10;
    }

    /**
     * Get the [apvepo24mo10] column value.
     *
     * @return int
     */
    public function getApvepo24mo10()
    {
        return $this->apvepo24mo10;
    }

    /**
     * Get the [apveinvc24mo10] column value.
     *
     * @return string
     */
    public function getApveinvc24mo10()
    {
        return $this->apveinvc24mo10;
    }

    /**
     * Get the [apveicnt24mo10] column value.
     *
     * @return int
     */
    public function getApveicnt24mo10()
    {
        return $this->apveicnt24mo10;
    }

    /**
     * Get the [apvepur24mo11] column value.
     *
     * @return string
     */
    public function getApvepur24mo11()
    {
        return $this->apvepur24mo11;
    }

    /**
     * Get the [apvepo24mo11] column value.
     *
     * @return int
     */
    public function getApvepo24mo11()
    {
        return $this->apvepo24mo11;
    }

    /**
     * Get the [apveinvc24mo11] column value.
     *
     * @return string
     */
    public function getApveinvc24mo11()
    {
        return $this->apveinvc24mo11;
    }

    /**
     * Get the [apveicnt24mo11] column value.
     *
     * @return int
     */
    public function getApveicnt24mo11()
    {
        return $this->apveicnt24mo11;
    }

    /**
     * Get the [apvepur24mo12] column value.
     *
     * @return string
     */
    public function getApvepur24mo12()
    {
        return $this->apvepur24mo12;
    }

    /**
     * Get the [apvepo24mo12] column value.
     *
     * @return int
     */
    public function getApvepo24mo12()
    {
        return $this->apvepo24mo12;
    }

    /**
     * Get the [apveinvc24mo12] column value.
     *
     * @return string
     */
    public function getApveinvc24mo12()
    {
        return $this->apveinvc24mo12;
    }

    /**
     * Get the [apveicnt24mo12] column value.
     *
     * @return int
     */
    public function getApveicnt24mo12()
    {
        return $this->apveicnt24mo12;
    }

    /**
     * Get the [apvepur24mo13] column value.
     *
     * @return string
     */
    public function getApvepur24mo13()
    {
        return $this->apvepur24mo13;
    }

    /**
     * Get the [apvepo24mo13] column value.
     *
     * @return int
     */
    public function getApvepo24mo13()
    {
        return $this->apvepo24mo13;
    }

    /**
     * Get the [apveinvc24mo13] column value.
     *
     * @return string
     */
    public function getApveinvc24mo13()
    {
        return $this->apveinvc24mo13;
    }

    /**
     * Get the [apveicnt24mo13] column value.
     *
     * @return int
     */
    public function getApveicnt24mo13()
    {
        return $this->apveicnt24mo13;
    }

    /**
     * Get the [apvepur24mo14] column value.
     *
     * @return string
     */
    public function getApvepur24mo14()
    {
        return $this->apvepur24mo14;
    }

    /**
     * Get the [apvepo24mo14] column value.
     *
     * @return int
     */
    public function getApvepo24mo14()
    {
        return $this->apvepo24mo14;
    }

    /**
     * Get the [apveinvc24mo14] column value.
     *
     * @return string
     */
    public function getApveinvc24mo14()
    {
        return $this->apveinvc24mo14;
    }

    /**
     * Get the [apveicnt24mo14] column value.
     *
     * @return int
     */
    public function getApveicnt24mo14()
    {
        return $this->apveicnt24mo14;
    }

    /**
     * Get the [apvepur24mo15] column value.
     *
     * @return string
     */
    public function getApvepur24mo15()
    {
        return $this->apvepur24mo15;
    }

    /**
     * Get the [apvepo24mo15] column value.
     *
     * @return int
     */
    public function getApvepo24mo15()
    {
        return $this->apvepo24mo15;
    }

    /**
     * Get the [apveinvc24mo15] column value.
     *
     * @return string
     */
    public function getApveinvc24mo15()
    {
        return $this->apveinvc24mo15;
    }

    /**
     * Get the [apveicnt24mo15] column value.
     *
     * @return int
     */
    public function getApveicnt24mo15()
    {
        return $this->apveicnt24mo15;
    }

    /**
     * Get the [apvepur24mo16] column value.
     *
     * @return string
     */
    public function getApvepur24mo16()
    {
        return $this->apvepur24mo16;
    }

    /**
     * Get the [apvepo24mo16] column value.
     *
     * @return int
     */
    public function getApvepo24mo16()
    {
        return $this->apvepo24mo16;
    }

    /**
     * Get the [apveinvc24mo16] column value.
     *
     * @return string
     */
    public function getApveinvc24mo16()
    {
        return $this->apveinvc24mo16;
    }

    /**
     * Get the [apveicnt24mo16] column value.
     *
     * @return int
     */
    public function getApveicnt24mo16()
    {
        return $this->apveicnt24mo16;
    }

    /**
     * Get the [apvepur24mo17] column value.
     *
     * @return string
     */
    public function getApvepur24mo17()
    {
        return $this->apvepur24mo17;
    }

    /**
     * Get the [apvepo24mo17] column value.
     *
     * @return int
     */
    public function getApvepo24mo17()
    {
        return $this->apvepo24mo17;
    }

    /**
     * Get the [apveinvc24mo17] column value.
     *
     * @return string
     */
    public function getApveinvc24mo17()
    {
        return $this->apveinvc24mo17;
    }

    /**
     * Get the [apveicnt24mo17] column value.
     *
     * @return int
     */
    public function getApveicnt24mo17()
    {
        return $this->apveicnt24mo17;
    }

    /**
     * Get the [apvepur24mo18] column value.
     *
     * @return string
     */
    public function getApvepur24mo18()
    {
        return $this->apvepur24mo18;
    }

    /**
     * Get the [apvepo24mo18] column value.
     *
     * @return int
     */
    public function getApvepo24mo18()
    {
        return $this->apvepo24mo18;
    }

    /**
     * Get the [apveinvc24mo18] column value.
     *
     * @return string
     */
    public function getApveinvc24mo18()
    {
        return $this->apveinvc24mo18;
    }

    /**
     * Get the [apveicnt24mo18] column value.
     *
     * @return int
     */
    public function getApveicnt24mo18()
    {
        return $this->apveicnt24mo18;
    }

    /**
     * Get the [apvepur24mo19] column value.
     *
     * @return string
     */
    public function getApvepur24mo19()
    {
        return $this->apvepur24mo19;
    }

    /**
     * Get the [apvepo24mo19] column value.
     *
     * @return int
     */
    public function getApvepo24mo19()
    {
        return $this->apvepo24mo19;
    }

    /**
     * Get the [apveinvc24mo19] column value.
     *
     * @return string
     */
    public function getApveinvc24mo19()
    {
        return $this->apveinvc24mo19;
    }

    /**
     * Get the [apveicnt24mo19] column value.
     *
     * @return int
     */
    public function getApveicnt24mo19()
    {
        return $this->apveicnt24mo19;
    }

    /**
     * Get the [apvepur24mo20] column value.
     *
     * @return string
     */
    public function getApvepur24mo20()
    {
        return $this->apvepur24mo20;
    }

    /**
     * Get the [apvepo24mo20] column value.
     *
     * @return int
     */
    public function getApvepo24mo20()
    {
        return $this->apvepo24mo20;
    }

    /**
     * Get the [apveinvc24mo20] column value.
     *
     * @return string
     */
    public function getApveinvc24mo20()
    {
        return $this->apveinvc24mo20;
    }

    /**
     * Get the [apveicnt24mo20] column value.
     *
     * @return int
     */
    public function getApveicnt24mo20()
    {
        return $this->apveicnt24mo20;
    }

    /**
     * Get the [apvepur24mo21] column value.
     *
     * @return string
     */
    public function getApvepur24mo21()
    {
        return $this->apvepur24mo21;
    }

    /**
     * Get the [apvepo24mo21] column value.
     *
     * @return int
     */
    public function getApvepo24mo21()
    {
        return $this->apvepo24mo21;
    }

    /**
     * Get the [apveinvc24mo21] column value.
     *
     * @return string
     */
    public function getApveinvc24mo21()
    {
        return $this->apveinvc24mo21;
    }

    /**
     * Get the [apveicnt24mo21] column value.
     *
     * @return int
     */
    public function getApveicnt24mo21()
    {
        return $this->apveicnt24mo21;
    }

    /**
     * Get the [apvepur24mo22] column value.
     *
     * @return string
     */
    public function getApvepur24mo22()
    {
        return $this->apvepur24mo22;
    }

    /**
     * Get the [apvepo24mo22] column value.
     *
     * @return int
     */
    public function getApvepo24mo22()
    {
        return $this->apvepo24mo22;
    }

    /**
     * Get the [apveinvc24mo22] column value.
     *
     * @return string
     */
    public function getApveinvc24mo22()
    {
        return $this->apveinvc24mo22;
    }

    /**
     * Get the [apveicnt24mo22] column value.
     *
     * @return int
     */
    public function getApveicnt24mo22()
    {
        return $this->apveicnt24mo22;
    }

    /**
     * Get the [apvepur24mo23] column value.
     *
     * @return string
     */
    public function getApvepur24mo23()
    {
        return $this->apvepur24mo23;
    }

    /**
     * Get the [apvepo24mo23] column value.
     *
     * @return int
     */
    public function getApvepo24mo23()
    {
        return $this->apvepo24mo23;
    }

    /**
     * Get the [apveinvc24mo23] column value.
     *
     * @return string
     */
    public function getApveinvc24mo23()
    {
        return $this->apveinvc24mo23;
    }

    /**
     * Get the [apveicnt24mo23] column value.
     *
     * @return int
     */
    public function getApveicnt24mo23()
    {
        return $this->apveicnt24mo23;
    }

    /**
     * Get the [apvepur24mo24] column value.
     *
     * @return string
     */
    public function getApvepur24mo24()
    {
        return $this->apvepur24mo24;
    }

    /**
     * Get the [apvepo24mo24] column value.
     *
     * @return int
     */
    public function getApvepo24mo24()
    {
        return $this->apvepo24mo24;
    }

    /**
     * Get the [apveinvc24mo24] column value.
     *
     * @return string
     */
    public function getApveinvc24mo24()
    {
        return $this->apveinvc24mo24;
    }

    /**
     * Get the [apveicnt24mo24] column value.
     *
     * @return int
     */
    public function getApveicnt24mo24()
    {
        return $this->apveicnt24mo24;
    }

    /**
     * Get the [apvecrncy] column value.
     *
     * @return string
     */
    public function getApvecrncy()
    {
        return $this->apvecrncy;
    }

    /**
     * Get the [apvefrtinamt] column value.
     *
     * @return string
     */
    public function getApvefrtinamt()
    {
        return $this->apvefrtinamt;
    }

    /**
     * Get the [apveouracctnbr] column value.
     *
     * @return string
     */
    public function getApveouracctnbr()
    {
        return $this->apveouracctnbr;
    }

    /**
     * Get the [apvevenddisc] column value.
     *
     * @return string
     */
    public function getApvevenddisc()
    {
        return $this->apvevenddisc;
    }

    /**
     * Get the [apvefob] column value.
     *
     * @return string
     */
    public function getApvefob()
    {
        return $this->apvefob;
    }

    /**
     * Get the [apveroylpct] column value.
     *
     * @return string
     */
    public function getApveroylpct()
    {
        return $this->apveroylpct;
    }

    /**
     * Get the [apveprtpoeoru] column value.
     *
     * @return string
     */
    public function getApveprtpoeoru()
    {
        return $this->apveprtpoeoru;
    }

    /**
     * Get the [apvecomrate] column value.
     *
     * @return string
     */
    public function getApvecomrate()
    {
        return $this->apvecomrate;
    }

    /**
     * Get the [apveuselandonrcpt] column value.
     *
     * @return string
     */
    public function getApveuselandonrcpt()
    {
        return $this->apveuselandonrcpt;
    }

    /**
     * Get the [apvebuyrwhse1] column value.
     *
     * @return string
     */
    public function getApvebuyrwhse1()
    {
        return $this->apvebuyrwhse1;
    }

    /**
     * Get the [apvebuyrcode1] column value.
     *
     * @return string
     */
    public function getApvebuyrcode1()
    {
        return $this->apvebuyrcode1;
    }

    /**
     * Get the [apvebuyrwhse2] column value.
     *
     * @return string
     */
    public function getApvebuyrwhse2()
    {
        return $this->apvebuyrwhse2;
    }

    /**
     * Get the [apvebuyrcode2] column value.
     *
     * @return string
     */
    public function getApvebuyrcode2()
    {
        return $this->apvebuyrcode2;
    }

    /**
     * Get the [apvebuyrwhse3] column value.
     *
     * @return string
     */
    public function getApvebuyrwhse3()
    {
        return $this->apvebuyrwhse3;
    }

    /**
     * Get the [apvebuyrcode3] column value.
     *
     * @return string
     */
    public function getApvebuyrcode3()
    {
        return $this->apvebuyrcode3;
    }

    /**
     * Get the [apvebuyrwhse4] column value.
     *
     * @return string
     */
    public function getApvebuyrwhse4()
    {
        return $this->apvebuyrwhse4;
    }

    /**
     * Get the [apvebuyrcode4] column value.
     *
     * @return string
     */
    public function getApvebuyrcode4()
    {
        return $this->apvebuyrcode4;
    }

    /**
     * Get the [apvebuyrwhse5] column value.
     *
     * @return string
     */
    public function getApvebuyrwhse5()
    {
        return $this->apvebuyrwhse5;
    }

    /**
     * Get the [apvebuyrcode5] column value.
     *
     * @return string
     */
    public function getApvebuyrcode5()
    {
        return $this->apvebuyrcode5;
    }

    /**
     * Get the [apvebuyrwhse6] column value.
     *
     * @return string
     */
    public function getApvebuyrwhse6()
    {
        return $this->apvebuyrwhse6;
    }

    /**
     * Get the [apvebuyrcode6] column value.
     *
     * @return string
     */
    public function getApvebuyrcode6()
    {
        return $this->apvebuyrcode6;
    }

    /**
     * Get the [apvebuyrwhse7] column value.
     *
     * @return string
     */
    public function getApvebuyrwhse7()
    {
        return $this->apvebuyrwhse7;
    }

    /**
     * Get the [apvebuyrcode7] column value.
     *
     * @return string
     */
    public function getApvebuyrcode7()
    {
        return $this->apvebuyrcode7;
    }

    /**
     * Get the [apvebuyrwhse8] column value.
     *
     * @return string
     */
    public function getApvebuyrwhse8()
    {
        return $this->apvebuyrwhse8;
    }

    /**
     * Get the [apvebuyrcode8] column value.
     *
     * @return string
     */
    public function getApvebuyrcode8()
    {
        return $this->apvebuyrcode8;
    }

    /**
     * Get the [apvebuyrwhse9] column value.
     *
     * @return string
     */
    public function getApvebuyrwhse9()
    {
        return $this->apvebuyrwhse9;
    }

    /**
     * Get the [apvebuyrcode9] column value.
     *
     * @return string
     */
    public function getApvebuyrcode9()
    {
        return $this->apvebuyrcode9;
    }

    /**
     * Get the [apvebuyrwhse10] column value.
     *
     * @return string
     */
    public function getApvebuyrwhse10()
    {
        return $this->apvebuyrwhse10;
    }

    /**
     * Get the [apvebuyrcode10] column value.
     *
     * @return string
     */
    public function getApvebuyrcode10()
    {
        return $this->apvebuyrcode10;
    }

    /**
     * Get the [apvelandcost] column value.
     *
     * @return string
     */
    public function getApvelandcost()
    {
        return $this->apvelandcost;
    }

    /**
     * Get the [apvereleasenbr] column value.
     *
     * @return int
     */
    public function getApvereleasenbr()
    {
        return $this->apvereleasenbr;
    }

    /**
     * Get the [apvescanstartpos] column value.
     *
     * @return int
     */
    public function getApvescanstartpos()
    {
        return $this->apvescanstartpos;
    }

    /**
     * Get the [apvescanlength] column value.
     *
     * @return int
     */
    public function getApvescanlength()
    {
        return $this->apvescanlength;
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
     * Set the value of [apvevendid] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvevendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvevendid !== $v) {
            $this->apvevendid = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEVENDID] = true;
        }

        return $this;
    } // setApvevendid()

    /**
     * Set the value of [apvename] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvename($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvename !== $v) {
            $this->apvename = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVENAME] = true;
        }

        return $this;
    } // setApvename()

    /**
     * Set the value of [apveadr1] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveadr1 !== $v) {
            $this->apveadr1 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEADR1] = true;
        }

        return $this;
    } // setApveadr1()

    /**
     * Set the value of [apveadr2] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveadr2 !== $v) {
            $this->apveadr2 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEADR2] = true;
        }

        return $this;
    } // setApveadr2()

    /**
     * Set the value of [apveadr3] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveadr3 !== $v) {
            $this->apveadr3 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEADR3] = true;
        }

        return $this;
    } // setApveadr3()

    /**
     * Set the value of [apvectry] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvectry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvectry !== $v) {
            $this->apvectry = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVECTRY] = true;
        }

        return $this;
    } // setApvectry()

    /**
     * Set the value of [apvecity] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvecity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvecity !== $v) {
            $this->apvecity = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVECITY] = true;
        }

        return $this;
    } // setApvecity()

    /**
     * Set the value of [apvestat] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvestat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvestat !== $v) {
            $this->apvestat = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVESTAT] = true;
        }

        return $this;
    } // setApvestat()

    /**
     * Set the value of [apvezipcode] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvezipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvezipcode !== $v) {
            $this->apvezipcode = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEZIPCODE] = true;
        }

        return $this;
    } // setApvezipcode()

    /**
     * Set the value of [apvepayname] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepayname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepayname !== $v) {
            $this->apvepayname = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPAYNAME] = true;
        }

        return $this;
    } // setApvepayname()

    /**
     * Set the value of [apvepayadr1] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepayadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepayadr1 !== $v) {
            $this->apvepayadr1 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPAYADR1] = true;
        }

        return $this;
    } // setApvepayadr1()

    /**
     * Set the value of [apvepayadr2] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepayadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepayadr2 !== $v) {
            $this->apvepayadr2 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPAYADR2] = true;
        }

        return $this;
    } // setApvepayadr2()

    /**
     * Set the value of [apvepayadr3] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepayadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepayadr3 !== $v) {
            $this->apvepayadr3 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPAYADR3] = true;
        }

        return $this;
    } // setApvepayadr3()

    /**
     * Set the value of [apvepayctry] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepayctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepayctry !== $v) {
            $this->apvepayctry = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPAYCTRY] = true;
        }

        return $this;
    } // setApvepayctry()

    /**
     * Set the value of [apvepaycity] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepaycity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepaycity !== $v) {
            $this->apvepaycity = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPAYCITY] = true;
        }

        return $this;
    } // setApvepaycity()

    /**
     * Set the value of [apvepaystat] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepaystat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepaystat !== $v) {
            $this->apvepaystat = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPAYSTAT] = true;
        }

        return $this;
    } // setApvepaystat()

    /**
     * Set the value of [apvepayzipcode] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepayzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepayzipcode !== $v) {
            $this->apvepayzipcode = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPAYZIPCODE] = true;
        }

        return $this;
    } // setApvepayzipcode()

    /**
     * Set the value of [apvestatus] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvestatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvestatus !== $v) {
            $this->apvestatus = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVESTATUS] = true;
        }

        return $this;
    } // setApvestatus()

    /**
     * Set the value of [apvetakeexpireddisc] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvetakeexpireddisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvetakeexpireddisc !== $v) {
            $this->apvetakeexpireddisc = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVETAKEEXPIREDDISC] = true;
        }

        return $this;
    } // setApvetakeexpireddisc()

    /**
     * Set the value of [apveprinthts] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveprinthts($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveprinthts !== $v) {
            $this->apveprinthts = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPRINTHTS] = true;
        }

        return $this;
    } // setApveprinthts()

    /**
     * Set the value of [apvefabbin] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvefabbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvefabbin !== $v) {
            $this->apvefabbin = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEFABBIN] = true;
        }

        return $this;
    } // setApvefabbin()

    /**
     * Set the value of [apvelmprntbulk] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvelmprntbulk($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvelmprntbulk !== $v) {
            $this->apvelmprntbulk = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVELMPRNTBULK] = true;
        }

        return $this;
    } // setApvelmprntbulk()

    /**
     * Set the value of [apveallowdropship] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveallowdropship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveallowdropship !== $v) {
            $this->apveallowdropship = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEALLOWDROPSHIP] = true;
        }

        return $this;
    } // setApveallowdropship()

    /**
     * Set the value of [aptbtypecode] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setAptbtypecode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbtypecode !== $v) {
            $this->aptbtypecode = $v;
            $this->modifiedColumns[VendorTableMap::COL_APTBTYPECODE] = true;
        }

        if ($this->aApTypeCode !== null && $this->aApTypeCode->getAptbtypecode() !== $v) {
            $this->aApTypeCode = null;
        }

        return $this;
    } // setAptbtypecode()

    /**
     * Set the value of [aptmtermcode] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setAptmtermcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmtermcode !== $v) {
            $this->aptmtermcode = $v;
            $this->modifiedColumns[VendorTableMap::COL_APTMTERMCODE] = true;
        }

        if ($this->aApTermsCode !== null && $this->aApTermsCode->getAptmtermcode() !== $v) {
            $this->aApTermsCode = null;
        }

        return $this;
    } // setAptmtermcode()

    /**
     * Set the value of [apvesviacode] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvesviacode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvesviacode !== $v) {
            $this->apvesviacode = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVESVIACODE] = true;
        }

        if ($this->aShipvia !== null && $this->aShipvia->getArtbshipvia() !== $v) {
            $this->aShipvia = null;
        }

        return $this;
    } // setApvesviacode()

    /**
     * Set the value of [apveoldfob] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveoldfob($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveoldfob !== $v) {
            $this->apveoldfob = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEOLDFOB] = true;
        }

        return $this;
    } // setApveoldfob()

    /**
     * Set the value of [apveleaddays] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveleaddays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveleaddays !== $v) {
            $this->apveleaddays = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVELEADDAYS] = true;
        }

        return $this;
    } // setApveleaddays()

    /**
     * Set the value of [apveglacct] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveglacct !== $v) {
            $this->apveglacct = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEGLACCT] = true;
        }

        return $this;
    } // setApveglacct()

    /**
     * Set the value of [apve1099ssnbr] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApve1099ssnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apve1099ssnbr !== $v) {
            $this->apve1099ssnbr = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVE1099SSNBR] = true;
        }

        return $this;
    } // setApve1099ssnbr()

    /**
     * Set the value of [apveminordrcode] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveminordrcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveminordrcode !== $v) {
            $this->apveminordrcode = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEMINORDRCODE] = true;
        }

        return $this;
    } // setApveminordrcode()

    /**
     * Set the value of [apveminordrvalue] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveminordrvalue($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveminordrvalue !== $v) {
            $this->apveminordrvalue = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEMINORDRVALUE] = true;
        }

        return $this;
    } // setApveminordrvalue()

    /**
     * Set the value of [apvepurmtd] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepurmtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepurmtd !== $v) {
            $this->apvepurmtd = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPURMTD] = true;
        }

        return $this;
    } // setApvepurmtd()

    /**
     * Set the value of [apvepomtd] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepomtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepomtd !== $v) {
            $this->apvepomtd = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPOMTD] = true;
        }

        return $this;
    } // setApvepomtd()

    /**
     * Set the value of [apveinvcmtd] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvcmtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvcmtd !== $v) {
            $this->apveinvcmtd = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVCMTD] = true;
        }

        return $this;
    } // setApveinvcmtd()

    /**
     * Set the value of [apveicntmtd] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicntmtd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicntmtd !== $v) {
            $this->apveicntmtd = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNTMTD] = true;
        }

        return $this;
    } // setApveicntmtd()

    /**
     * Set the value of [apvedateopen] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvedateopen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvedateopen !== $v) {
            $this->apvedateopen = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEDATEOPEN] = true;
        }

        return $this;
    } // setApvedateopen()

    /**
     * Set the value of [apvelastpurdate] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvelastpurdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvelastpurdate !== $v) {
            $this->apvelastpurdate = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVELASTPURDATE] = true;
        }

        return $this;
    } // setApvelastpurdate()

    /**
     * Set the value of [apvepur24mo01] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo01($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo01 !== $v) {
            $this->apvepur24mo01 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO01] = true;
        }

        return $this;
    } // setApvepur24mo01()

    /**
     * Set the value of [apvepo24mo01] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo01($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo01 !== $v) {
            $this->apvepo24mo01 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO01] = true;
        }

        return $this;
    } // setApvepo24mo01()

    /**
     * Set the value of [apveinvc24mo01] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo01($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo01 !== $v) {
            $this->apveinvc24mo01 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO01] = true;
        }

        return $this;
    } // setApveinvc24mo01()

    /**
     * Set the value of [apveicnt24mo01] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo01($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo01 !== $v) {
            $this->apveicnt24mo01 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO01] = true;
        }

        return $this;
    } // setApveicnt24mo01()

    /**
     * Set the value of [apvepur24mo02] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo02($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo02 !== $v) {
            $this->apvepur24mo02 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO02] = true;
        }

        return $this;
    } // setApvepur24mo02()

    /**
     * Set the value of [apvepo24mo02] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo02($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo02 !== $v) {
            $this->apvepo24mo02 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO02] = true;
        }

        return $this;
    } // setApvepo24mo02()

    /**
     * Set the value of [apveinvc24mo02] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo02($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo02 !== $v) {
            $this->apveinvc24mo02 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO02] = true;
        }

        return $this;
    } // setApveinvc24mo02()

    /**
     * Set the value of [apveicnt24mo02] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo02($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo02 !== $v) {
            $this->apveicnt24mo02 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO02] = true;
        }

        return $this;
    } // setApveicnt24mo02()

    /**
     * Set the value of [apvepur24mo03] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo03($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo03 !== $v) {
            $this->apvepur24mo03 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO03] = true;
        }

        return $this;
    } // setApvepur24mo03()

    /**
     * Set the value of [apvepo24mo03] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo03($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo03 !== $v) {
            $this->apvepo24mo03 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO03] = true;
        }

        return $this;
    } // setApvepo24mo03()

    /**
     * Set the value of [apveinvc24mo03] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo03($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo03 !== $v) {
            $this->apveinvc24mo03 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO03] = true;
        }

        return $this;
    } // setApveinvc24mo03()

    /**
     * Set the value of [apveicnt24mo03] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo03($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo03 !== $v) {
            $this->apveicnt24mo03 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO03] = true;
        }

        return $this;
    } // setApveicnt24mo03()

    /**
     * Set the value of [apvepur24mo04] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo04($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo04 !== $v) {
            $this->apvepur24mo04 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO04] = true;
        }

        return $this;
    } // setApvepur24mo04()

    /**
     * Set the value of [apvepo24mo04] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo04($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo04 !== $v) {
            $this->apvepo24mo04 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO04] = true;
        }

        return $this;
    } // setApvepo24mo04()

    /**
     * Set the value of [apveinvc24mo04] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo04($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo04 !== $v) {
            $this->apveinvc24mo04 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO04] = true;
        }

        return $this;
    } // setApveinvc24mo04()

    /**
     * Set the value of [apveicnt24mo04] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo04($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo04 !== $v) {
            $this->apveicnt24mo04 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO04] = true;
        }

        return $this;
    } // setApveicnt24mo04()

    /**
     * Set the value of [apvepur24mo05] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo05($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo05 !== $v) {
            $this->apvepur24mo05 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO05] = true;
        }

        return $this;
    } // setApvepur24mo05()

    /**
     * Set the value of [apvepo24mo05] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo05($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo05 !== $v) {
            $this->apvepo24mo05 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO05] = true;
        }

        return $this;
    } // setApvepo24mo05()

    /**
     * Set the value of [apveinvc24mo05] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo05($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo05 !== $v) {
            $this->apveinvc24mo05 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO05] = true;
        }

        return $this;
    } // setApveinvc24mo05()

    /**
     * Set the value of [apveicnt24mo05] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo05($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo05 !== $v) {
            $this->apveicnt24mo05 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO05] = true;
        }

        return $this;
    } // setApveicnt24mo05()

    /**
     * Set the value of [apvepur24mo06] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo06($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo06 !== $v) {
            $this->apvepur24mo06 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO06] = true;
        }

        return $this;
    } // setApvepur24mo06()

    /**
     * Set the value of [apvepo24mo06] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo06($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo06 !== $v) {
            $this->apvepo24mo06 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO06] = true;
        }

        return $this;
    } // setApvepo24mo06()

    /**
     * Set the value of [apveinvc24mo06] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo06($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo06 !== $v) {
            $this->apveinvc24mo06 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO06] = true;
        }

        return $this;
    } // setApveinvc24mo06()

    /**
     * Set the value of [apveicnt24mo06] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo06($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo06 !== $v) {
            $this->apveicnt24mo06 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO06] = true;
        }

        return $this;
    } // setApveicnt24mo06()

    /**
     * Set the value of [apvepur24mo07] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo07($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo07 !== $v) {
            $this->apvepur24mo07 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO07] = true;
        }

        return $this;
    } // setApvepur24mo07()

    /**
     * Set the value of [apvepo24mo07] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo07($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo07 !== $v) {
            $this->apvepo24mo07 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO07] = true;
        }

        return $this;
    } // setApvepo24mo07()

    /**
     * Set the value of [apveinvc24mo07] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo07($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo07 !== $v) {
            $this->apveinvc24mo07 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO07] = true;
        }

        return $this;
    } // setApveinvc24mo07()

    /**
     * Set the value of [apveicnt24mo07] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo07($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo07 !== $v) {
            $this->apveicnt24mo07 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO07] = true;
        }

        return $this;
    } // setApveicnt24mo07()

    /**
     * Set the value of [apvepur24mo08] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo08($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo08 !== $v) {
            $this->apvepur24mo08 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO08] = true;
        }

        return $this;
    } // setApvepur24mo08()

    /**
     * Set the value of [apvepo24mo08] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo08($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo08 !== $v) {
            $this->apvepo24mo08 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO08] = true;
        }

        return $this;
    } // setApvepo24mo08()

    /**
     * Set the value of [apveinvc24mo08] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo08($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo08 !== $v) {
            $this->apveinvc24mo08 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO08] = true;
        }

        return $this;
    } // setApveinvc24mo08()

    /**
     * Set the value of [apveicnt24mo08] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo08($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo08 !== $v) {
            $this->apveicnt24mo08 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO08] = true;
        }

        return $this;
    } // setApveicnt24mo08()

    /**
     * Set the value of [apvepur24mo09] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo09($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo09 !== $v) {
            $this->apvepur24mo09 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO09] = true;
        }

        return $this;
    } // setApvepur24mo09()

    /**
     * Set the value of [apvepo24mo09] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo09($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo09 !== $v) {
            $this->apvepo24mo09 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO09] = true;
        }

        return $this;
    } // setApvepo24mo09()

    /**
     * Set the value of [apveinvc24mo09] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo09($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo09 !== $v) {
            $this->apveinvc24mo09 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO09] = true;
        }

        return $this;
    } // setApveinvc24mo09()

    /**
     * Set the value of [apveicnt24mo09] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo09($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo09 !== $v) {
            $this->apveicnt24mo09 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO09] = true;
        }

        return $this;
    } // setApveicnt24mo09()

    /**
     * Set the value of [apvepur24mo10] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo10 !== $v) {
            $this->apvepur24mo10 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO10] = true;
        }

        return $this;
    } // setApvepur24mo10()

    /**
     * Set the value of [apvepo24mo10] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo10($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo10 !== $v) {
            $this->apvepo24mo10 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO10] = true;
        }

        return $this;
    } // setApvepo24mo10()

    /**
     * Set the value of [apveinvc24mo10] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo10 !== $v) {
            $this->apveinvc24mo10 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO10] = true;
        }

        return $this;
    } // setApveinvc24mo10()

    /**
     * Set the value of [apveicnt24mo10] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo10($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo10 !== $v) {
            $this->apveicnt24mo10 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO10] = true;
        }

        return $this;
    } // setApveicnt24mo10()

    /**
     * Set the value of [apvepur24mo11] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo11($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo11 !== $v) {
            $this->apvepur24mo11 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO11] = true;
        }

        return $this;
    } // setApvepur24mo11()

    /**
     * Set the value of [apvepo24mo11] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo11($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo11 !== $v) {
            $this->apvepo24mo11 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO11] = true;
        }

        return $this;
    } // setApvepo24mo11()

    /**
     * Set the value of [apveinvc24mo11] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo11($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo11 !== $v) {
            $this->apveinvc24mo11 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO11] = true;
        }

        return $this;
    } // setApveinvc24mo11()

    /**
     * Set the value of [apveicnt24mo11] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo11($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo11 !== $v) {
            $this->apveicnt24mo11 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO11] = true;
        }

        return $this;
    } // setApveicnt24mo11()

    /**
     * Set the value of [apvepur24mo12] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo12 !== $v) {
            $this->apvepur24mo12 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO12] = true;
        }

        return $this;
    } // setApvepur24mo12()

    /**
     * Set the value of [apvepo24mo12] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo12($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo12 !== $v) {
            $this->apvepo24mo12 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO12] = true;
        }

        return $this;
    } // setApvepo24mo12()

    /**
     * Set the value of [apveinvc24mo12] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo12($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo12 !== $v) {
            $this->apveinvc24mo12 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO12] = true;
        }

        return $this;
    } // setApveinvc24mo12()

    /**
     * Set the value of [apveicnt24mo12] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo12($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo12 !== $v) {
            $this->apveicnt24mo12 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO12] = true;
        }

        return $this;
    } // setApveicnt24mo12()

    /**
     * Set the value of [apvepur24mo13] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo13($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo13 !== $v) {
            $this->apvepur24mo13 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO13] = true;
        }

        return $this;
    } // setApvepur24mo13()

    /**
     * Set the value of [apvepo24mo13] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo13($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo13 !== $v) {
            $this->apvepo24mo13 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO13] = true;
        }

        return $this;
    } // setApvepo24mo13()

    /**
     * Set the value of [apveinvc24mo13] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo13($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo13 !== $v) {
            $this->apveinvc24mo13 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO13] = true;
        }

        return $this;
    } // setApveinvc24mo13()

    /**
     * Set the value of [apveicnt24mo13] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo13($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo13 !== $v) {
            $this->apveicnt24mo13 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO13] = true;
        }

        return $this;
    } // setApveicnt24mo13()

    /**
     * Set the value of [apvepur24mo14] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo14($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo14 !== $v) {
            $this->apvepur24mo14 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO14] = true;
        }

        return $this;
    } // setApvepur24mo14()

    /**
     * Set the value of [apvepo24mo14] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo14($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo14 !== $v) {
            $this->apvepo24mo14 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO14] = true;
        }

        return $this;
    } // setApvepo24mo14()

    /**
     * Set the value of [apveinvc24mo14] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo14($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo14 !== $v) {
            $this->apveinvc24mo14 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO14] = true;
        }

        return $this;
    } // setApveinvc24mo14()

    /**
     * Set the value of [apveicnt24mo14] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo14($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo14 !== $v) {
            $this->apveicnt24mo14 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO14] = true;
        }

        return $this;
    } // setApveicnt24mo14()

    /**
     * Set the value of [apvepur24mo15] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo15($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo15 !== $v) {
            $this->apvepur24mo15 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO15] = true;
        }

        return $this;
    } // setApvepur24mo15()

    /**
     * Set the value of [apvepo24mo15] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo15($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo15 !== $v) {
            $this->apvepo24mo15 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO15] = true;
        }

        return $this;
    } // setApvepo24mo15()

    /**
     * Set the value of [apveinvc24mo15] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo15($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo15 !== $v) {
            $this->apveinvc24mo15 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO15] = true;
        }

        return $this;
    } // setApveinvc24mo15()

    /**
     * Set the value of [apveicnt24mo15] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo15($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo15 !== $v) {
            $this->apveicnt24mo15 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO15] = true;
        }

        return $this;
    } // setApveicnt24mo15()

    /**
     * Set the value of [apvepur24mo16] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo16($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo16 !== $v) {
            $this->apvepur24mo16 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO16] = true;
        }

        return $this;
    } // setApvepur24mo16()

    /**
     * Set the value of [apvepo24mo16] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo16($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo16 !== $v) {
            $this->apvepo24mo16 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO16] = true;
        }

        return $this;
    } // setApvepo24mo16()

    /**
     * Set the value of [apveinvc24mo16] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo16($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo16 !== $v) {
            $this->apveinvc24mo16 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO16] = true;
        }

        return $this;
    } // setApveinvc24mo16()

    /**
     * Set the value of [apveicnt24mo16] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo16($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo16 !== $v) {
            $this->apveicnt24mo16 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO16] = true;
        }

        return $this;
    } // setApveicnt24mo16()

    /**
     * Set the value of [apvepur24mo17] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo17($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo17 !== $v) {
            $this->apvepur24mo17 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO17] = true;
        }

        return $this;
    } // setApvepur24mo17()

    /**
     * Set the value of [apvepo24mo17] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo17($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo17 !== $v) {
            $this->apvepo24mo17 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO17] = true;
        }

        return $this;
    } // setApvepo24mo17()

    /**
     * Set the value of [apveinvc24mo17] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo17($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo17 !== $v) {
            $this->apveinvc24mo17 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO17] = true;
        }

        return $this;
    } // setApveinvc24mo17()

    /**
     * Set the value of [apveicnt24mo17] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo17($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo17 !== $v) {
            $this->apveicnt24mo17 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO17] = true;
        }

        return $this;
    } // setApveicnt24mo17()

    /**
     * Set the value of [apvepur24mo18] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo18($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo18 !== $v) {
            $this->apvepur24mo18 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO18] = true;
        }

        return $this;
    } // setApvepur24mo18()

    /**
     * Set the value of [apvepo24mo18] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo18($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo18 !== $v) {
            $this->apvepo24mo18 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO18] = true;
        }

        return $this;
    } // setApvepo24mo18()

    /**
     * Set the value of [apveinvc24mo18] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo18($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo18 !== $v) {
            $this->apveinvc24mo18 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO18] = true;
        }

        return $this;
    } // setApveinvc24mo18()

    /**
     * Set the value of [apveicnt24mo18] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo18($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo18 !== $v) {
            $this->apveicnt24mo18 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO18] = true;
        }

        return $this;
    } // setApveicnt24mo18()

    /**
     * Set the value of [apvepur24mo19] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo19($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo19 !== $v) {
            $this->apvepur24mo19 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO19] = true;
        }

        return $this;
    } // setApvepur24mo19()

    /**
     * Set the value of [apvepo24mo19] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo19($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo19 !== $v) {
            $this->apvepo24mo19 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO19] = true;
        }

        return $this;
    } // setApvepo24mo19()

    /**
     * Set the value of [apveinvc24mo19] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo19($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo19 !== $v) {
            $this->apveinvc24mo19 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO19] = true;
        }

        return $this;
    } // setApveinvc24mo19()

    /**
     * Set the value of [apveicnt24mo19] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo19($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo19 !== $v) {
            $this->apveicnt24mo19 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO19] = true;
        }

        return $this;
    } // setApveicnt24mo19()

    /**
     * Set the value of [apvepur24mo20] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo20($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo20 !== $v) {
            $this->apvepur24mo20 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO20] = true;
        }

        return $this;
    } // setApvepur24mo20()

    /**
     * Set the value of [apvepo24mo20] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo20($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo20 !== $v) {
            $this->apvepo24mo20 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO20] = true;
        }

        return $this;
    } // setApvepo24mo20()

    /**
     * Set the value of [apveinvc24mo20] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo20($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo20 !== $v) {
            $this->apveinvc24mo20 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO20] = true;
        }

        return $this;
    } // setApveinvc24mo20()

    /**
     * Set the value of [apveicnt24mo20] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo20($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo20 !== $v) {
            $this->apveicnt24mo20 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO20] = true;
        }

        return $this;
    } // setApveicnt24mo20()

    /**
     * Set the value of [apvepur24mo21] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo21($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo21 !== $v) {
            $this->apvepur24mo21 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO21] = true;
        }

        return $this;
    } // setApvepur24mo21()

    /**
     * Set the value of [apvepo24mo21] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo21($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo21 !== $v) {
            $this->apvepo24mo21 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO21] = true;
        }

        return $this;
    } // setApvepo24mo21()

    /**
     * Set the value of [apveinvc24mo21] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo21($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo21 !== $v) {
            $this->apveinvc24mo21 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO21] = true;
        }

        return $this;
    } // setApveinvc24mo21()

    /**
     * Set the value of [apveicnt24mo21] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo21($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo21 !== $v) {
            $this->apveicnt24mo21 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO21] = true;
        }

        return $this;
    } // setApveicnt24mo21()

    /**
     * Set the value of [apvepur24mo22] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo22($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo22 !== $v) {
            $this->apvepur24mo22 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO22] = true;
        }

        return $this;
    } // setApvepur24mo22()

    /**
     * Set the value of [apvepo24mo22] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo22($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo22 !== $v) {
            $this->apvepo24mo22 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO22] = true;
        }

        return $this;
    } // setApvepo24mo22()

    /**
     * Set the value of [apveinvc24mo22] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo22($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo22 !== $v) {
            $this->apveinvc24mo22 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO22] = true;
        }

        return $this;
    } // setApveinvc24mo22()

    /**
     * Set the value of [apveicnt24mo22] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo22($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo22 !== $v) {
            $this->apveicnt24mo22 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO22] = true;
        }

        return $this;
    } // setApveicnt24mo22()

    /**
     * Set the value of [apvepur24mo23] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo23($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo23 !== $v) {
            $this->apvepur24mo23 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO23] = true;
        }

        return $this;
    } // setApvepur24mo23()

    /**
     * Set the value of [apvepo24mo23] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo23($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo23 !== $v) {
            $this->apvepo24mo23 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO23] = true;
        }

        return $this;
    } // setApvepo24mo23()

    /**
     * Set the value of [apveinvc24mo23] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo23($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo23 !== $v) {
            $this->apveinvc24mo23 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO23] = true;
        }

        return $this;
    } // setApveinvc24mo23()

    /**
     * Set the value of [apveicnt24mo23] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo23($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo23 !== $v) {
            $this->apveicnt24mo23 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO23] = true;
        }

        return $this;
    } // setApveicnt24mo23()

    /**
     * Set the value of [apvepur24mo24] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepur24mo24($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvepur24mo24 !== $v) {
            $this->apvepur24mo24 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPUR24MO24] = true;
        }

        return $this;
    } // setApvepur24mo24()

    /**
     * Set the value of [apvepo24mo24] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvepo24mo24($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvepo24mo24 !== $v) {
            $this->apvepo24mo24 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPO24MO24] = true;
        }

        return $this;
    } // setApvepo24mo24()

    /**
     * Set the value of [apveinvc24mo24] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveinvc24mo24($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveinvc24mo24 !== $v) {
            $this->apveinvc24mo24 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEINVC24MO24] = true;
        }

        return $this;
    } // setApveinvc24mo24()

    /**
     * Set the value of [apveicnt24mo24] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveicnt24mo24($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apveicnt24mo24 !== $v) {
            $this->apveicnt24mo24 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEICNT24MO24] = true;
        }

        return $this;
    } // setApveicnt24mo24()

    /**
     * Set the value of [apvecrncy] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvecrncy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvecrncy !== $v) {
            $this->apvecrncy = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVECRNCY] = true;
        }

        return $this;
    } // setApvecrncy()

    /**
     * Set the value of [apvefrtinamt] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvefrtinamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvefrtinamt !== $v) {
            $this->apvefrtinamt = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEFRTINAMT] = true;
        }

        return $this;
    } // setApvefrtinamt()

    /**
     * Set the value of [apveouracctnbr] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveouracctnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveouracctnbr !== $v) {
            $this->apveouracctnbr = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEOURACCTNBR] = true;
        }

        return $this;
    } // setApveouracctnbr()

    /**
     * Set the value of [apvevenddisc] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvevenddisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvevenddisc !== $v) {
            $this->apvevenddisc = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEVENDDISC] = true;
        }

        return $this;
    } // setApvevenddisc()

    /**
     * Set the value of [apvefob] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvefob($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvefob !== $v) {
            $this->apvefob = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEFOB] = true;
        }

        return $this;
    } // setApvefob()

    /**
     * Set the value of [apveroylpct] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveroylpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveroylpct !== $v) {
            $this->apveroylpct = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEROYLPCT] = true;
        }

        return $this;
    } // setApveroylpct()

    /**
     * Set the value of [apveprtpoeoru] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveprtpoeoru($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveprtpoeoru !== $v) {
            $this->apveprtpoeoru = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEPRTPOEORU] = true;
        }

        return $this;
    } // setApveprtpoeoru()

    /**
     * Set the value of [apvecomrate] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvecomrate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvecomrate !== $v) {
            $this->apvecomrate = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVECOMRATE] = true;
        }

        return $this;
    } // setApvecomrate()

    /**
     * Set the value of [apveuselandonrcpt] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApveuselandonrcpt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apveuselandonrcpt !== $v) {
            $this->apveuselandonrcpt = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEUSELANDONRCPT] = true;
        }

        return $this;
    } // setApveuselandonrcpt()

    /**
     * Set the value of [apvebuyrwhse1] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrwhse1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrwhse1 !== $v) {
            $this->apvebuyrwhse1 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRWHSE1] = true;
        }

        return $this;
    } // setApvebuyrwhse1()

    /**
     * Set the value of [apvebuyrcode1] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrcode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrcode1 !== $v) {
            $this->apvebuyrcode1 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRCODE1] = true;
        }

        if ($this->aApBuyer !== null && $this->aApBuyer->getAptbbuyrcode() !== $v) {
            $this->aApBuyer = null;
        }

        return $this;
    } // setApvebuyrcode1()

    /**
     * Set the value of [apvebuyrwhse2] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrwhse2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrwhse2 !== $v) {
            $this->apvebuyrwhse2 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRWHSE2] = true;
        }

        return $this;
    } // setApvebuyrwhse2()

    /**
     * Set the value of [apvebuyrcode2] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrcode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrcode2 !== $v) {
            $this->apvebuyrcode2 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRCODE2] = true;
        }

        return $this;
    } // setApvebuyrcode2()

    /**
     * Set the value of [apvebuyrwhse3] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrwhse3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrwhse3 !== $v) {
            $this->apvebuyrwhse3 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRWHSE3] = true;
        }

        return $this;
    } // setApvebuyrwhse3()

    /**
     * Set the value of [apvebuyrcode3] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrcode3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrcode3 !== $v) {
            $this->apvebuyrcode3 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRCODE3] = true;
        }

        return $this;
    } // setApvebuyrcode3()

    /**
     * Set the value of [apvebuyrwhse4] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrwhse4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrwhse4 !== $v) {
            $this->apvebuyrwhse4 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRWHSE4] = true;
        }

        return $this;
    } // setApvebuyrwhse4()

    /**
     * Set the value of [apvebuyrcode4] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrcode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrcode4 !== $v) {
            $this->apvebuyrcode4 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRCODE4] = true;
        }

        return $this;
    } // setApvebuyrcode4()

    /**
     * Set the value of [apvebuyrwhse5] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrwhse5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrwhse5 !== $v) {
            $this->apvebuyrwhse5 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRWHSE5] = true;
        }

        return $this;
    } // setApvebuyrwhse5()

    /**
     * Set the value of [apvebuyrcode5] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrcode5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrcode5 !== $v) {
            $this->apvebuyrcode5 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRCODE5] = true;
        }

        return $this;
    } // setApvebuyrcode5()

    /**
     * Set the value of [apvebuyrwhse6] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrwhse6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrwhse6 !== $v) {
            $this->apvebuyrwhse6 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRWHSE6] = true;
        }

        return $this;
    } // setApvebuyrwhse6()

    /**
     * Set the value of [apvebuyrcode6] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrcode6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrcode6 !== $v) {
            $this->apvebuyrcode6 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRCODE6] = true;
        }

        return $this;
    } // setApvebuyrcode6()

    /**
     * Set the value of [apvebuyrwhse7] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrwhse7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrwhse7 !== $v) {
            $this->apvebuyrwhse7 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRWHSE7] = true;
        }

        return $this;
    } // setApvebuyrwhse7()

    /**
     * Set the value of [apvebuyrcode7] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrcode7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrcode7 !== $v) {
            $this->apvebuyrcode7 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRCODE7] = true;
        }

        return $this;
    } // setApvebuyrcode7()

    /**
     * Set the value of [apvebuyrwhse8] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrwhse8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrwhse8 !== $v) {
            $this->apvebuyrwhse8 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRWHSE8] = true;
        }

        return $this;
    } // setApvebuyrwhse8()

    /**
     * Set the value of [apvebuyrcode8] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrcode8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrcode8 !== $v) {
            $this->apvebuyrcode8 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRCODE8] = true;
        }

        return $this;
    } // setApvebuyrcode8()

    /**
     * Set the value of [apvebuyrwhse9] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrwhse9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrwhse9 !== $v) {
            $this->apvebuyrwhse9 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRWHSE9] = true;
        }

        return $this;
    } // setApvebuyrwhse9()

    /**
     * Set the value of [apvebuyrcode9] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrcode9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrcode9 !== $v) {
            $this->apvebuyrcode9 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRCODE9] = true;
        }

        return $this;
    } // setApvebuyrcode9()

    /**
     * Set the value of [apvebuyrwhse10] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrwhse10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrwhse10 !== $v) {
            $this->apvebuyrwhse10 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRWHSE10] = true;
        }

        return $this;
    } // setApvebuyrwhse10()

    /**
     * Set the value of [apvebuyrcode10] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvebuyrcode10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvebuyrcode10 !== $v) {
            $this->apvebuyrcode10 = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVEBUYRCODE10] = true;
        }

        return $this;
    } // setApvebuyrcode10()

    /**
     * Set the value of [apvelandcost] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvelandcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvelandcost !== $v) {
            $this->apvelandcost = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVELANDCOST] = true;
        }

        return $this;
    } // setApvelandcost()

    /**
     * Set the value of [apvereleasenbr] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvereleasenbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvereleasenbr !== $v) {
            $this->apvereleasenbr = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVERELEASENBR] = true;
        }

        return $this;
    } // setApvereleasenbr()

    /**
     * Set the value of [apvescanstartpos] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvescanstartpos($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvescanstartpos !== $v) {
            $this->apvescanstartpos = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVESCANSTARTPOS] = true;
        }

        return $this;
    } // setApvescanstartpos()

    /**
     * Set the value of [apvescanlength] column.
     *
     * @param int $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setApvescanlength($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->apvescanlength !== $v) {
            $this->apvescanlength = $v;
            $this->modifiedColumns[VendorTableMap::COL_APVESCANLENGTH] = true;
        }

        return $this;
    } // setApvescanlength()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[VendorTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[VendorTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[VendorTableMap::COL_DUMMY] = true;
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
            if ($this->apvevendid !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : VendorTableMap::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvevendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : VendorTableMap::translateFieldName('Apvename', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvename = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : VendorTableMap::translateFieldName('Apveadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : VendorTableMap::translateFieldName('Apveadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : VendorTableMap::translateFieldName('Apveadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : VendorTableMap::translateFieldName('Apvectry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvectry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : VendorTableMap::translateFieldName('Apvecity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvecity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : VendorTableMap::translateFieldName('Apvestat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvestat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : VendorTableMap::translateFieldName('Apvezipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvezipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : VendorTableMap::translateFieldName('Apvepayname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepayname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : VendorTableMap::translateFieldName('Apvepayadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepayadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : VendorTableMap::translateFieldName('Apvepayadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepayadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : VendorTableMap::translateFieldName('Apvepayadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepayadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : VendorTableMap::translateFieldName('Apvepayctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepayctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : VendorTableMap::translateFieldName('Apvepaycity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepaycity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : VendorTableMap::translateFieldName('Apvepaystat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepaystat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : VendorTableMap::translateFieldName('Apvepayzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepayzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : VendorTableMap::translateFieldName('Apvestatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvestatus = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : VendorTableMap::translateFieldName('Apvetakeexpireddisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvetakeexpireddisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : VendorTableMap::translateFieldName('Apveprinthts', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveprinthts = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : VendorTableMap::translateFieldName('Apvefabbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvefabbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : VendorTableMap::translateFieldName('Apvelmprntbulk', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvelmprntbulk = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : VendorTableMap::translateFieldName('Apveallowdropship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveallowdropship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : VendorTableMap::translateFieldName('Aptbtypecode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbtypecode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : VendorTableMap::translateFieldName('Aptmtermcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmtermcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : VendorTableMap::translateFieldName('Apvesviacode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvesviacode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : VendorTableMap::translateFieldName('Apveoldfob', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveoldfob = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : VendorTableMap::translateFieldName('Apveleaddays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveleaddays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : VendorTableMap::translateFieldName('Apveglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : VendorTableMap::translateFieldName('Apve1099ssnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apve1099ssnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : VendorTableMap::translateFieldName('Apveminordrcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveminordrcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : VendorTableMap::translateFieldName('Apveminordrvalue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveminordrvalue = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : VendorTableMap::translateFieldName('Apvepurmtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepurmtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : VendorTableMap::translateFieldName('Apvepomtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepomtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : VendorTableMap::translateFieldName('Apveinvcmtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvcmtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : VendorTableMap::translateFieldName('Apveicntmtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicntmtd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : VendorTableMap::translateFieldName('Apvedateopen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvedateopen = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : VendorTableMap::translateFieldName('Apvelastpurdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvelastpurdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo01', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo01 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo01', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo01 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo01', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo01 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo01', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo01 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo02', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo02 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo02', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo02 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo02', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo02 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo02', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo02 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo03', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo03 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo03', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo03 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo03', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo03 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo03', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo03 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo04', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo04 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo04', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo04 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo04', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo04 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo04', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo04 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo05', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo05 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo05', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo05 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo05', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo05 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo05', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo05 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo06', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo06 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo06', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo06 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo06', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo06 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo06', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo06 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo07', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo07 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo07', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo07 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo07', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo07 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo07', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo07 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo08', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo08 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo08', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo08 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo08', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo08 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo08', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo08 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo09', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo09 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo09', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo09 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo09', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo09 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo09', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo09 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo10 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo10 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo11 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo11 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo11 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo11', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo11 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo12 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo12 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo12', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo12 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo13 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo13 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo13 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo13', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo13 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo14 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo14 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo14 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo14', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo14 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo15 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 95 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo15 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 96 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo15 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 97 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo15', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo15 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 98 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo16 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 99 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo16 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 100 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo16 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 101 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo16', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo16 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 102 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo17 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 103 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo17 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 104 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo17 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 105 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo17', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo17 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 106 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo18 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 107 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo18 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 108 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo18 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 109 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo18', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo18 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 110 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo19 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 111 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo19 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 112 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo19 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 113 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo19', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo19 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 114 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo20 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 115 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo20 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 116 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo20 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 117 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo20', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo20 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 118 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo21 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 119 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo21 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 120 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo21 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 121 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo21', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo21 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 122 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo22 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 123 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo22 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 124 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo22 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 125 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo22', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo22 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 126 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo23 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 127 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo23 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 128 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo23 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 129 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo23', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo23 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 130 + $startcol : VendorTableMap::translateFieldName('Apvepur24mo24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepur24mo24 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 131 + $startcol : VendorTableMap::translateFieldName('Apvepo24mo24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvepo24mo24 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 132 + $startcol : VendorTableMap::translateFieldName('Apveinvc24mo24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveinvc24mo24 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 133 + $startcol : VendorTableMap::translateFieldName('Apveicnt24mo24', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveicnt24mo24 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 134 + $startcol : VendorTableMap::translateFieldName('Apvecrncy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvecrncy = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 135 + $startcol : VendorTableMap::translateFieldName('Apvefrtinamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvefrtinamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 136 + $startcol : VendorTableMap::translateFieldName('Apveouracctnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveouracctnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 137 + $startcol : VendorTableMap::translateFieldName('Apvevenddisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvevenddisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 138 + $startcol : VendorTableMap::translateFieldName('Apvefob', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvefob = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 139 + $startcol : VendorTableMap::translateFieldName('Apveroylpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveroylpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 140 + $startcol : VendorTableMap::translateFieldName('Apveprtpoeoru', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveprtpoeoru = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 141 + $startcol : VendorTableMap::translateFieldName('Apvecomrate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvecomrate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 142 + $startcol : VendorTableMap::translateFieldName('Apveuselandonrcpt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apveuselandonrcpt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 143 + $startcol : VendorTableMap::translateFieldName('Apvebuyrwhse1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrwhse1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 144 + $startcol : VendorTableMap::translateFieldName('Apvebuyrcode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrcode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 145 + $startcol : VendorTableMap::translateFieldName('Apvebuyrwhse2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrwhse2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 146 + $startcol : VendorTableMap::translateFieldName('Apvebuyrcode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrcode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 147 + $startcol : VendorTableMap::translateFieldName('Apvebuyrwhse3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrwhse3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 148 + $startcol : VendorTableMap::translateFieldName('Apvebuyrcode3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrcode3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 149 + $startcol : VendorTableMap::translateFieldName('Apvebuyrwhse4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrwhse4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 150 + $startcol : VendorTableMap::translateFieldName('Apvebuyrcode4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrcode4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 151 + $startcol : VendorTableMap::translateFieldName('Apvebuyrwhse5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrwhse5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 152 + $startcol : VendorTableMap::translateFieldName('Apvebuyrcode5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrcode5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 153 + $startcol : VendorTableMap::translateFieldName('Apvebuyrwhse6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrwhse6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 154 + $startcol : VendorTableMap::translateFieldName('Apvebuyrcode6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrcode6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 155 + $startcol : VendorTableMap::translateFieldName('Apvebuyrwhse7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrwhse7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 156 + $startcol : VendorTableMap::translateFieldName('Apvebuyrcode7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrcode7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 157 + $startcol : VendorTableMap::translateFieldName('Apvebuyrwhse8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrwhse8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 158 + $startcol : VendorTableMap::translateFieldName('Apvebuyrcode8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrcode8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 159 + $startcol : VendorTableMap::translateFieldName('Apvebuyrwhse9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrwhse9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 160 + $startcol : VendorTableMap::translateFieldName('Apvebuyrcode9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrcode9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 161 + $startcol : VendorTableMap::translateFieldName('Apvebuyrwhse10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrwhse10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 162 + $startcol : VendorTableMap::translateFieldName('Apvebuyrcode10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvebuyrcode10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 163 + $startcol : VendorTableMap::translateFieldName('Apvelandcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvelandcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 164 + $startcol : VendorTableMap::translateFieldName('Apvereleasenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvereleasenbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 165 + $startcol : VendorTableMap::translateFieldName('Apvescanstartpos', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvescanstartpos = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 166 + $startcol : VendorTableMap::translateFieldName('Apvescanlength', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvescanlength = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 167 + $startcol : VendorTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 168 + $startcol : VendorTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 169 + $startcol : VendorTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 170; // 170 = VendorTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Vendor'), 0, $e);
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
        if ($this->aApTypeCode !== null && $this->aptbtypecode !== $this->aApTypeCode->getAptbtypecode()) {
            $this->aApTypeCode = null;
        }
        if ($this->aApTermsCode !== null && $this->aptmtermcode !== $this->aApTermsCode->getAptmtermcode()) {
            $this->aApTermsCode = null;
        }
        if ($this->aShipvia !== null && $this->apvesviacode !== $this->aShipvia->getArtbshipvia()) {
            $this->aShipvia = null;
        }
        if ($this->aApBuyer !== null && $this->apvebuyrcode1 !== $this->aApBuyer->getAptbbuyrcode()) {
            $this->aApBuyer = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(VendorTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildVendorQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aApTypeCode = null;
            $this->aApTermsCode = null;
            $this->aShipvia = null;
            $this->aApBuyer = null;
            $this->collVendorShipfroms = null;

            $this->collPurchaseOrders = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Vendor::setDeleted()
     * @see Vendor::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(VendorTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildVendorQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(VendorTableMap::DATABASE_NAME);
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
                VendorTableMap::addInstanceToPool($this);
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

            if ($this->aApTypeCode !== null) {
                if ($this->aApTypeCode->isModified() || $this->aApTypeCode->isNew()) {
                    $affectedRows += $this->aApTypeCode->save($con);
                }
                $this->setApTypeCode($this->aApTypeCode);
            }

            if ($this->aApTermsCode !== null) {
                if ($this->aApTermsCode->isModified() || $this->aApTermsCode->isNew()) {
                    $affectedRows += $this->aApTermsCode->save($con);
                }
                $this->setApTermsCode($this->aApTermsCode);
            }

            if ($this->aShipvia !== null) {
                if ($this->aShipvia->isModified() || $this->aShipvia->isNew()) {
                    $affectedRows += $this->aShipvia->save($con);
                }
                $this->setShipvia($this->aShipvia);
            }

            if ($this->aApBuyer !== null) {
                if ($this->aApBuyer->isModified() || $this->aApBuyer->isNew()) {
                    $affectedRows += $this->aApBuyer->save($con);
                }
                $this->setApBuyer($this->aApBuyer);
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

            if ($this->vendorShipfromsScheduledForDeletion !== null) {
                if (!$this->vendorShipfromsScheduledForDeletion->isEmpty()) {
                    \VendorShipfromQuery::create()
                        ->filterByPrimaryKeys($this->vendorShipfromsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->vendorShipfromsScheduledForDeletion = null;
                }
            }

            if ($this->collVendorShipfroms !== null) {
                foreach ($this->collVendorShipfroms as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->purchaseOrdersScheduledForDeletion !== null) {
                if (!$this->purchaseOrdersScheduledForDeletion->isEmpty()) {
                    foreach ($this->purchaseOrdersScheduledForDeletion as $purchaseOrder) {
                        // need to save related object because we set the relation to null
                        $purchaseOrder->save($con);
                    }
                    $this->purchaseOrdersScheduledForDeletion = null;
                }
            }

            if ($this->collPurchaseOrders !== null) {
                foreach ($this->collPurchaseOrders as $referrerFK) {
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
        if ($this->isColumnModified(VendorTableMap::COL_APVEVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ApveVendId';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVENAME)) {
            $modifiedColumns[':p' . $index++]  = 'ApveName';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEADR1)) {
            $modifiedColumns[':p' . $index++]  = 'ApveAdr1';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEADR2)) {
            $modifiedColumns[':p' . $index++]  = 'ApveAdr2';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEADR3)) {
            $modifiedColumns[':p' . $index++]  = 'ApveAdr3';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVECTRY)) {
            $modifiedColumns[':p' . $index++]  = 'ApveCtry';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVECITY)) {
            $modifiedColumns[':p' . $index++]  = 'ApveCity';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVESTAT)) {
            $modifiedColumns[':p' . $index++]  = 'ApveStat';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ApveZipCode';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYNAME)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePayName';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYADR1)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePayAdr1';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYADR2)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePayAdr2';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYADR3)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePayAdr3';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePayCtry';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYCITY)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePayCity';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePayStat';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePayZipCode';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVESTATUS)) {
            $modifiedColumns[':p' . $index++]  = 'ApveStatus';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVETAKEEXPIREDDISC)) {
            $modifiedColumns[':p' . $index++]  = 'ApveTakeExpiredDisc';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPRINTHTS)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePrintHts';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEFABBIN)) {
            $modifiedColumns[':p' . $index++]  = 'ApveFabBin';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVELMPRNTBULK)) {
            $modifiedColumns[':p' . $index++]  = 'ApveLmPrntBulk';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEALLOWDROPSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'ApveAllowDropShip';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APTBTYPECODE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbTypeCode';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APTMTERMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'AptmTermCode';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVESVIACODE)) {
            $modifiedColumns[':p' . $index++]  = 'ApveSviaCode';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEOLDFOB)) {
            $modifiedColumns[':p' . $index++]  = 'ApveOldFob';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVELEADDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'ApveLeadDays';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ApveGlAcct';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVE1099SSNBR)) {
            $modifiedColumns[':p' . $index++]  = 'Apve1099SsNbr';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEMINORDRCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ApveMinOrdrCode';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEMINORDRVALUE)) {
            $modifiedColumns[':p' . $index++]  = 'ApveMinOrdrValue';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPURMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePurMtd';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPOMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePoMtd';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVCMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvcMtd';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNTMTD)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcntMtd';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEDATEOPEN)) {
            $modifiedColumns[':p' . $index++]  = 'ApveDateOpen';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVELASTPURDATE)) {
            $modifiedColumns[':p' . $index++]  = 'ApveLastPurDate';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO01)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo01';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO01)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo01';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO01)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo01';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO01)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo01';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO02)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo02';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO02)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo02';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO02)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo02';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO02)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo02';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO03)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo03';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO03)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo03';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO03)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo03';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO03)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo03';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO04)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo04';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO04)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo04';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO04)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo04';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO04)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo04';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO05)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo05';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO05)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo05';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO05)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo05';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO05)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo05';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO06)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo06';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO06)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo06';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO06)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo06';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO06)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo06';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO07)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo07';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO07)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo07';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO07)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo07';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO07)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo07';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO08)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo08';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO08)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo08';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO08)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo08';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO08)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo08';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO09)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo09';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO09)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo09';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO09)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo09';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO09)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo09';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO10)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo10';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO10)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo10';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO10)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo10';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO10)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo10';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO11)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo11';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO11)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo11';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO11)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo11';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO11)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo11';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO12)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo12';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO12)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo12';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO12)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo12';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO12)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo12';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO13)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo13';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO13)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo13';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO13)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo13';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO13)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo13';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO14)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo14';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO14)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo14';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO14)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo14';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO14)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo14';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO15)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo15';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO15)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo15';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO15)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo15';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO15)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo15';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO16)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo16';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO16)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo16';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO16)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo16';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO16)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo16';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO17)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo17';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO17)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo17';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO17)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo17';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO17)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo17';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO18)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo18';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO18)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo18';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO18)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo18';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO18)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo18';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO19)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo19';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO19)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo19';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO19)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo19';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO19)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo19';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO20)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo20';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO20)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo20';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO20)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo20';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO20)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo20';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO21)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo21';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO21)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo21';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO21)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo21';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO21)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo21';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO22)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo22';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO22)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo22';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO22)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo22';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO22)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo22';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO23)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo23';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO23)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo23';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO23)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo23';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO23)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo23';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO24)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePur24mo24';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO24)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePo24mo24';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO24)) {
            $modifiedColumns[':p' . $index++]  = 'ApveInvc24mo24';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO24)) {
            $modifiedColumns[':p' . $index++]  = 'ApveIcnt24mo24';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVECRNCY)) {
            $modifiedColumns[':p' . $index++]  = 'ApveCrncy';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEFRTINAMT)) {
            $modifiedColumns[':p' . $index++]  = 'ApveFrtInAmt';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEOURACCTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ApveOurAcctNbr';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEVENDDISC)) {
            $modifiedColumns[':p' . $index++]  = 'ApveVendDisc';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEFOB)) {
            $modifiedColumns[':p' . $index++]  = 'ApveFob';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEROYLPCT)) {
            $modifiedColumns[':p' . $index++]  = 'ApveRoylPct';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPRTPOEORU)) {
            $modifiedColumns[':p' . $index++]  = 'ApvePrtPoEOrU';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVECOMRATE)) {
            $modifiedColumns[':p' . $index++]  = 'ApveComRate';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEUSELANDONRCPT)) {
            $modifiedColumns[':p' . $index++]  = 'ApveUseLandOnRcpt';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE1)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrWhse1';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrCode1';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE2)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrWhse2';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrCode2';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE3)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrWhse3';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE3)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrCode3';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE4)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrWhse4';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE4)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrCode4';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE5)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrWhse5';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE5)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrCode5';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE6)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrWhse6';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE6)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrCode6';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE7)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrWhse7';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE7)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrCode7';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE8)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrWhse8';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE8)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrCode8';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE9)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrWhse9';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE9)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrCode9';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE10)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrWhse10';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE10)) {
            $modifiedColumns[':p' . $index++]  = 'ApveBuyrCode10';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVELANDCOST)) {
            $modifiedColumns[':p' . $index++]  = 'ApveLandCost';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVERELEASENBR)) {
            $modifiedColumns[':p' . $index++]  = 'ApveReleaseNbr';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVESCANSTARTPOS)) {
            $modifiedColumns[':p' . $index++]  = 'ApveScanStartPos';
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVESCANLENGTH)) {
            $modifiedColumns[':p' . $index++]  = 'ApveScanLength';
        }
        if ($this->isColumnModified(VendorTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(VendorTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(VendorTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ap_vend_mast (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ApveVendId':
                        $stmt->bindValue($identifier, $this->apvevendid, PDO::PARAM_STR);
                        break;
                    case 'ApveName':
                        $stmt->bindValue($identifier, $this->apvename, PDO::PARAM_STR);
                        break;
                    case 'ApveAdr1':
                        $stmt->bindValue($identifier, $this->apveadr1, PDO::PARAM_STR);
                        break;
                    case 'ApveAdr2':
                        $stmt->bindValue($identifier, $this->apveadr2, PDO::PARAM_STR);
                        break;
                    case 'ApveAdr3':
                        $stmt->bindValue($identifier, $this->apveadr3, PDO::PARAM_STR);
                        break;
                    case 'ApveCtry':
                        $stmt->bindValue($identifier, $this->apvectry, PDO::PARAM_STR);
                        break;
                    case 'ApveCity':
                        $stmt->bindValue($identifier, $this->apvecity, PDO::PARAM_STR);
                        break;
                    case 'ApveStat':
                        $stmt->bindValue($identifier, $this->apvestat, PDO::PARAM_STR);
                        break;
                    case 'ApveZipCode':
                        $stmt->bindValue($identifier, $this->apvezipcode, PDO::PARAM_STR);
                        break;
                    case 'ApvePayName':
                        $stmt->bindValue($identifier, $this->apvepayname, PDO::PARAM_STR);
                        break;
                    case 'ApvePayAdr1':
                        $stmt->bindValue($identifier, $this->apvepayadr1, PDO::PARAM_STR);
                        break;
                    case 'ApvePayAdr2':
                        $stmt->bindValue($identifier, $this->apvepayadr2, PDO::PARAM_STR);
                        break;
                    case 'ApvePayAdr3':
                        $stmt->bindValue($identifier, $this->apvepayadr3, PDO::PARAM_STR);
                        break;
                    case 'ApvePayCtry':
                        $stmt->bindValue($identifier, $this->apvepayctry, PDO::PARAM_STR);
                        break;
                    case 'ApvePayCity':
                        $stmt->bindValue($identifier, $this->apvepaycity, PDO::PARAM_STR);
                        break;
                    case 'ApvePayStat':
                        $stmt->bindValue($identifier, $this->apvepaystat, PDO::PARAM_STR);
                        break;
                    case 'ApvePayZipCode':
                        $stmt->bindValue($identifier, $this->apvepayzipcode, PDO::PARAM_STR);
                        break;
                    case 'ApveStatus':
                        $stmt->bindValue($identifier, $this->apvestatus, PDO::PARAM_STR);
                        break;
                    case 'ApveTakeExpiredDisc':
                        $stmt->bindValue($identifier, $this->apvetakeexpireddisc, PDO::PARAM_STR);
                        break;
                    case 'ApvePrintHts':
                        $stmt->bindValue($identifier, $this->apveprinthts, PDO::PARAM_STR);
                        break;
                    case 'ApveFabBin':
                        $stmt->bindValue($identifier, $this->apvefabbin, PDO::PARAM_STR);
                        break;
                    case 'ApveLmPrntBulk':
                        $stmt->bindValue($identifier, $this->apvelmprntbulk, PDO::PARAM_STR);
                        break;
                    case 'ApveAllowDropShip':
                        $stmt->bindValue($identifier, $this->apveallowdropship, PDO::PARAM_STR);
                        break;
                    case 'AptbTypeCode':
                        $stmt->bindValue($identifier, $this->aptbtypecode, PDO::PARAM_STR);
                        break;
                    case 'AptmTermCode':
                        $stmt->bindValue($identifier, $this->aptmtermcode, PDO::PARAM_STR);
                        break;
                    case 'ApveSviaCode':
                        $stmt->bindValue($identifier, $this->apvesviacode, PDO::PARAM_STR);
                        break;
                    case 'ApveOldFob':
                        $stmt->bindValue($identifier, $this->apveoldfob, PDO::PARAM_STR);
                        break;
                    case 'ApveLeadDays':
                        $stmt->bindValue($identifier, $this->apveleaddays, PDO::PARAM_INT);
                        break;
                    case 'ApveGlAcct':
                        $stmt->bindValue($identifier, $this->apveglacct, PDO::PARAM_STR);
                        break;
                    case 'Apve1099SsNbr':
                        $stmt->bindValue($identifier, $this->apve1099ssnbr, PDO::PARAM_STR);
                        break;
                    case 'ApveMinOrdrCode':
                        $stmt->bindValue($identifier, $this->apveminordrcode, PDO::PARAM_STR);
                        break;
                    case 'ApveMinOrdrValue':
                        $stmt->bindValue($identifier, $this->apveminordrvalue, PDO::PARAM_INT);
                        break;
                    case 'ApvePurMtd':
                        $stmt->bindValue($identifier, $this->apvepurmtd, PDO::PARAM_STR);
                        break;
                    case 'ApvePoMtd':
                        $stmt->bindValue($identifier, $this->apvepomtd, PDO::PARAM_INT);
                        break;
                    case 'ApveInvcMtd':
                        $stmt->bindValue($identifier, $this->apveinvcmtd, PDO::PARAM_STR);
                        break;
                    case 'ApveIcntMtd':
                        $stmt->bindValue($identifier, $this->apveicntmtd, PDO::PARAM_INT);
                        break;
                    case 'ApveDateOpen':
                        $stmt->bindValue($identifier, $this->apvedateopen, PDO::PARAM_STR);
                        break;
                    case 'ApveLastPurDate':
                        $stmt->bindValue($identifier, $this->apvelastpurdate, PDO::PARAM_STR);
                        break;
                    case 'ApvePur24mo01':
                        $stmt->bindValue($identifier, $this->apvepur24mo01, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo01':
                        $stmt->bindValue($identifier, $this->apvepo24mo01, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo01':
                        $stmt->bindValue($identifier, $this->apveinvc24mo01, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo01':
                        $stmt->bindValue($identifier, $this->apveicnt24mo01, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo02':
                        $stmt->bindValue($identifier, $this->apvepur24mo02, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo02':
                        $stmt->bindValue($identifier, $this->apvepo24mo02, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo02':
                        $stmt->bindValue($identifier, $this->apveinvc24mo02, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo02':
                        $stmt->bindValue($identifier, $this->apveicnt24mo02, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo03':
                        $stmt->bindValue($identifier, $this->apvepur24mo03, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo03':
                        $stmt->bindValue($identifier, $this->apvepo24mo03, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo03':
                        $stmt->bindValue($identifier, $this->apveinvc24mo03, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo03':
                        $stmt->bindValue($identifier, $this->apveicnt24mo03, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo04':
                        $stmt->bindValue($identifier, $this->apvepur24mo04, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo04':
                        $stmt->bindValue($identifier, $this->apvepo24mo04, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo04':
                        $stmt->bindValue($identifier, $this->apveinvc24mo04, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo04':
                        $stmt->bindValue($identifier, $this->apveicnt24mo04, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo05':
                        $stmt->bindValue($identifier, $this->apvepur24mo05, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo05':
                        $stmt->bindValue($identifier, $this->apvepo24mo05, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo05':
                        $stmt->bindValue($identifier, $this->apveinvc24mo05, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo05':
                        $stmt->bindValue($identifier, $this->apveicnt24mo05, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo06':
                        $stmt->bindValue($identifier, $this->apvepur24mo06, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo06':
                        $stmt->bindValue($identifier, $this->apvepo24mo06, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo06':
                        $stmt->bindValue($identifier, $this->apveinvc24mo06, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo06':
                        $stmt->bindValue($identifier, $this->apveicnt24mo06, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo07':
                        $stmt->bindValue($identifier, $this->apvepur24mo07, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo07':
                        $stmt->bindValue($identifier, $this->apvepo24mo07, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo07':
                        $stmt->bindValue($identifier, $this->apveinvc24mo07, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo07':
                        $stmt->bindValue($identifier, $this->apveicnt24mo07, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo08':
                        $stmt->bindValue($identifier, $this->apvepur24mo08, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo08':
                        $stmt->bindValue($identifier, $this->apvepo24mo08, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo08':
                        $stmt->bindValue($identifier, $this->apveinvc24mo08, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo08':
                        $stmt->bindValue($identifier, $this->apveicnt24mo08, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo09':
                        $stmt->bindValue($identifier, $this->apvepur24mo09, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo09':
                        $stmt->bindValue($identifier, $this->apvepo24mo09, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo09':
                        $stmt->bindValue($identifier, $this->apveinvc24mo09, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo09':
                        $stmt->bindValue($identifier, $this->apveicnt24mo09, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo10':
                        $stmt->bindValue($identifier, $this->apvepur24mo10, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo10':
                        $stmt->bindValue($identifier, $this->apvepo24mo10, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo10':
                        $stmt->bindValue($identifier, $this->apveinvc24mo10, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo10':
                        $stmt->bindValue($identifier, $this->apveicnt24mo10, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo11':
                        $stmt->bindValue($identifier, $this->apvepur24mo11, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo11':
                        $stmt->bindValue($identifier, $this->apvepo24mo11, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo11':
                        $stmt->bindValue($identifier, $this->apveinvc24mo11, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo11':
                        $stmt->bindValue($identifier, $this->apveicnt24mo11, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo12':
                        $stmt->bindValue($identifier, $this->apvepur24mo12, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo12':
                        $stmt->bindValue($identifier, $this->apvepo24mo12, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo12':
                        $stmt->bindValue($identifier, $this->apveinvc24mo12, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo12':
                        $stmt->bindValue($identifier, $this->apveicnt24mo12, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo13':
                        $stmt->bindValue($identifier, $this->apvepur24mo13, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo13':
                        $stmt->bindValue($identifier, $this->apvepo24mo13, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo13':
                        $stmt->bindValue($identifier, $this->apveinvc24mo13, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo13':
                        $stmt->bindValue($identifier, $this->apveicnt24mo13, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo14':
                        $stmt->bindValue($identifier, $this->apvepur24mo14, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo14':
                        $stmt->bindValue($identifier, $this->apvepo24mo14, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo14':
                        $stmt->bindValue($identifier, $this->apveinvc24mo14, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo14':
                        $stmt->bindValue($identifier, $this->apveicnt24mo14, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo15':
                        $stmt->bindValue($identifier, $this->apvepur24mo15, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo15':
                        $stmt->bindValue($identifier, $this->apvepo24mo15, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo15':
                        $stmt->bindValue($identifier, $this->apveinvc24mo15, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo15':
                        $stmt->bindValue($identifier, $this->apveicnt24mo15, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo16':
                        $stmt->bindValue($identifier, $this->apvepur24mo16, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo16':
                        $stmt->bindValue($identifier, $this->apvepo24mo16, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo16':
                        $stmt->bindValue($identifier, $this->apveinvc24mo16, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo16':
                        $stmt->bindValue($identifier, $this->apveicnt24mo16, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo17':
                        $stmt->bindValue($identifier, $this->apvepur24mo17, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo17':
                        $stmt->bindValue($identifier, $this->apvepo24mo17, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo17':
                        $stmt->bindValue($identifier, $this->apveinvc24mo17, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo17':
                        $stmt->bindValue($identifier, $this->apveicnt24mo17, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo18':
                        $stmt->bindValue($identifier, $this->apvepur24mo18, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo18':
                        $stmt->bindValue($identifier, $this->apvepo24mo18, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo18':
                        $stmt->bindValue($identifier, $this->apveinvc24mo18, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo18':
                        $stmt->bindValue($identifier, $this->apveicnt24mo18, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo19':
                        $stmt->bindValue($identifier, $this->apvepur24mo19, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo19':
                        $stmt->bindValue($identifier, $this->apvepo24mo19, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo19':
                        $stmt->bindValue($identifier, $this->apveinvc24mo19, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo19':
                        $stmt->bindValue($identifier, $this->apveicnt24mo19, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo20':
                        $stmt->bindValue($identifier, $this->apvepur24mo20, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo20':
                        $stmt->bindValue($identifier, $this->apvepo24mo20, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo20':
                        $stmt->bindValue($identifier, $this->apveinvc24mo20, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo20':
                        $stmt->bindValue($identifier, $this->apveicnt24mo20, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo21':
                        $stmt->bindValue($identifier, $this->apvepur24mo21, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo21':
                        $stmt->bindValue($identifier, $this->apvepo24mo21, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo21':
                        $stmt->bindValue($identifier, $this->apveinvc24mo21, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo21':
                        $stmt->bindValue($identifier, $this->apveicnt24mo21, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo22':
                        $stmt->bindValue($identifier, $this->apvepur24mo22, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo22':
                        $stmt->bindValue($identifier, $this->apvepo24mo22, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo22':
                        $stmt->bindValue($identifier, $this->apveinvc24mo22, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo22':
                        $stmt->bindValue($identifier, $this->apveicnt24mo22, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo23':
                        $stmt->bindValue($identifier, $this->apvepur24mo23, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo23':
                        $stmt->bindValue($identifier, $this->apvepo24mo23, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo23':
                        $stmt->bindValue($identifier, $this->apveinvc24mo23, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo23':
                        $stmt->bindValue($identifier, $this->apveicnt24mo23, PDO::PARAM_INT);
                        break;
                    case 'ApvePur24mo24':
                        $stmt->bindValue($identifier, $this->apvepur24mo24, PDO::PARAM_STR);
                        break;
                    case 'ApvePo24mo24':
                        $stmt->bindValue($identifier, $this->apvepo24mo24, PDO::PARAM_INT);
                        break;
                    case 'ApveInvc24mo24':
                        $stmt->bindValue($identifier, $this->apveinvc24mo24, PDO::PARAM_STR);
                        break;
                    case 'ApveIcnt24mo24':
                        $stmt->bindValue($identifier, $this->apveicnt24mo24, PDO::PARAM_INT);
                        break;
                    case 'ApveCrncy':
                        $stmt->bindValue($identifier, $this->apvecrncy, PDO::PARAM_STR);
                        break;
                    case 'ApveFrtInAmt':
                        $stmt->bindValue($identifier, $this->apvefrtinamt, PDO::PARAM_STR);
                        break;
                    case 'ApveOurAcctNbr':
                        $stmt->bindValue($identifier, $this->apveouracctnbr, PDO::PARAM_STR);
                        break;
                    case 'ApveVendDisc':
                        $stmt->bindValue($identifier, $this->apvevenddisc, PDO::PARAM_STR);
                        break;
                    case 'ApveFob':
                        $stmt->bindValue($identifier, $this->apvefob, PDO::PARAM_STR);
                        break;
                    case 'ApveRoylPct':
                        $stmt->bindValue($identifier, $this->apveroylpct, PDO::PARAM_STR);
                        break;
                    case 'ApvePrtPoEOrU':
                        $stmt->bindValue($identifier, $this->apveprtpoeoru, PDO::PARAM_STR);
                        break;
                    case 'ApveComRate':
                        $stmt->bindValue($identifier, $this->apvecomrate, PDO::PARAM_STR);
                        break;
                    case 'ApveUseLandOnRcpt':
                        $stmt->bindValue($identifier, $this->apveuselandonrcpt, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrWhse1':
                        $stmt->bindValue($identifier, $this->apvebuyrwhse1, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrCode1':
                        $stmt->bindValue($identifier, $this->apvebuyrcode1, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrWhse2':
                        $stmt->bindValue($identifier, $this->apvebuyrwhse2, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrCode2':
                        $stmt->bindValue($identifier, $this->apvebuyrcode2, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrWhse3':
                        $stmt->bindValue($identifier, $this->apvebuyrwhse3, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrCode3':
                        $stmt->bindValue($identifier, $this->apvebuyrcode3, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrWhse4':
                        $stmt->bindValue($identifier, $this->apvebuyrwhse4, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrCode4':
                        $stmt->bindValue($identifier, $this->apvebuyrcode4, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrWhse5':
                        $stmt->bindValue($identifier, $this->apvebuyrwhse5, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrCode5':
                        $stmt->bindValue($identifier, $this->apvebuyrcode5, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrWhse6':
                        $stmt->bindValue($identifier, $this->apvebuyrwhse6, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrCode6':
                        $stmt->bindValue($identifier, $this->apvebuyrcode6, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrWhse7':
                        $stmt->bindValue($identifier, $this->apvebuyrwhse7, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrCode7':
                        $stmt->bindValue($identifier, $this->apvebuyrcode7, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrWhse8':
                        $stmt->bindValue($identifier, $this->apvebuyrwhse8, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrCode8':
                        $stmt->bindValue($identifier, $this->apvebuyrcode8, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrWhse9':
                        $stmt->bindValue($identifier, $this->apvebuyrwhse9, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrCode9':
                        $stmt->bindValue($identifier, $this->apvebuyrcode9, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrWhse10':
                        $stmt->bindValue($identifier, $this->apvebuyrwhse10, PDO::PARAM_STR);
                        break;
                    case 'ApveBuyrCode10':
                        $stmt->bindValue($identifier, $this->apvebuyrcode10, PDO::PARAM_STR);
                        break;
                    case 'ApveLandCost':
                        $stmt->bindValue($identifier, $this->apvelandcost, PDO::PARAM_STR);
                        break;
                    case 'ApveReleaseNbr':
                        $stmt->bindValue($identifier, $this->apvereleasenbr, PDO::PARAM_INT);
                        break;
                    case 'ApveScanStartPos':
                        $stmt->bindValue($identifier, $this->apvescanstartpos, PDO::PARAM_INT);
                        break;
                    case 'ApveScanLength':
                        $stmt->bindValue($identifier, $this->apvescanlength, PDO::PARAM_INT);
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
        $pos = VendorTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getApvevendid();
                break;
            case 1:
                return $this->getApvename();
                break;
            case 2:
                return $this->getApveadr1();
                break;
            case 3:
                return $this->getApveadr2();
                break;
            case 4:
                return $this->getApveadr3();
                break;
            case 5:
                return $this->getApvectry();
                break;
            case 6:
                return $this->getApvecity();
                break;
            case 7:
                return $this->getApvestat();
                break;
            case 8:
                return $this->getApvezipcode();
                break;
            case 9:
                return $this->getApvepayname();
                break;
            case 10:
                return $this->getApvepayadr1();
                break;
            case 11:
                return $this->getApvepayadr2();
                break;
            case 12:
                return $this->getApvepayadr3();
                break;
            case 13:
                return $this->getApvepayctry();
                break;
            case 14:
                return $this->getApvepaycity();
                break;
            case 15:
                return $this->getApvepaystat();
                break;
            case 16:
                return $this->getApvepayzipcode();
                break;
            case 17:
                return $this->getApvestatus();
                break;
            case 18:
                return $this->getApvetakeexpireddisc();
                break;
            case 19:
                return $this->getApveprinthts();
                break;
            case 20:
                return $this->getApvefabbin();
                break;
            case 21:
                return $this->getApvelmprntbulk();
                break;
            case 22:
                return $this->getApveallowdropship();
                break;
            case 23:
                return $this->getAptbtypecode();
                break;
            case 24:
                return $this->getAptmtermcode();
                break;
            case 25:
                return $this->getApvesviacode();
                break;
            case 26:
                return $this->getApveoldfob();
                break;
            case 27:
                return $this->getApveleaddays();
                break;
            case 28:
                return $this->getApveglacct();
                break;
            case 29:
                return $this->getApve1099ssnbr();
                break;
            case 30:
                return $this->getApveminordrcode();
                break;
            case 31:
                return $this->getApveminordrvalue();
                break;
            case 32:
                return $this->getApvepurmtd();
                break;
            case 33:
                return $this->getApvepomtd();
                break;
            case 34:
                return $this->getApveinvcmtd();
                break;
            case 35:
                return $this->getApveicntmtd();
                break;
            case 36:
                return $this->getApvedateopen();
                break;
            case 37:
                return $this->getApvelastpurdate();
                break;
            case 38:
                return $this->getApvepur24mo01();
                break;
            case 39:
                return $this->getApvepo24mo01();
                break;
            case 40:
                return $this->getApveinvc24mo01();
                break;
            case 41:
                return $this->getApveicnt24mo01();
                break;
            case 42:
                return $this->getApvepur24mo02();
                break;
            case 43:
                return $this->getApvepo24mo02();
                break;
            case 44:
                return $this->getApveinvc24mo02();
                break;
            case 45:
                return $this->getApveicnt24mo02();
                break;
            case 46:
                return $this->getApvepur24mo03();
                break;
            case 47:
                return $this->getApvepo24mo03();
                break;
            case 48:
                return $this->getApveinvc24mo03();
                break;
            case 49:
                return $this->getApveicnt24mo03();
                break;
            case 50:
                return $this->getApvepur24mo04();
                break;
            case 51:
                return $this->getApvepo24mo04();
                break;
            case 52:
                return $this->getApveinvc24mo04();
                break;
            case 53:
                return $this->getApveicnt24mo04();
                break;
            case 54:
                return $this->getApvepur24mo05();
                break;
            case 55:
                return $this->getApvepo24mo05();
                break;
            case 56:
                return $this->getApveinvc24mo05();
                break;
            case 57:
                return $this->getApveicnt24mo05();
                break;
            case 58:
                return $this->getApvepur24mo06();
                break;
            case 59:
                return $this->getApvepo24mo06();
                break;
            case 60:
                return $this->getApveinvc24mo06();
                break;
            case 61:
                return $this->getApveicnt24mo06();
                break;
            case 62:
                return $this->getApvepur24mo07();
                break;
            case 63:
                return $this->getApvepo24mo07();
                break;
            case 64:
                return $this->getApveinvc24mo07();
                break;
            case 65:
                return $this->getApveicnt24mo07();
                break;
            case 66:
                return $this->getApvepur24mo08();
                break;
            case 67:
                return $this->getApvepo24mo08();
                break;
            case 68:
                return $this->getApveinvc24mo08();
                break;
            case 69:
                return $this->getApveicnt24mo08();
                break;
            case 70:
                return $this->getApvepur24mo09();
                break;
            case 71:
                return $this->getApvepo24mo09();
                break;
            case 72:
                return $this->getApveinvc24mo09();
                break;
            case 73:
                return $this->getApveicnt24mo09();
                break;
            case 74:
                return $this->getApvepur24mo10();
                break;
            case 75:
                return $this->getApvepo24mo10();
                break;
            case 76:
                return $this->getApveinvc24mo10();
                break;
            case 77:
                return $this->getApveicnt24mo10();
                break;
            case 78:
                return $this->getApvepur24mo11();
                break;
            case 79:
                return $this->getApvepo24mo11();
                break;
            case 80:
                return $this->getApveinvc24mo11();
                break;
            case 81:
                return $this->getApveicnt24mo11();
                break;
            case 82:
                return $this->getApvepur24mo12();
                break;
            case 83:
                return $this->getApvepo24mo12();
                break;
            case 84:
                return $this->getApveinvc24mo12();
                break;
            case 85:
                return $this->getApveicnt24mo12();
                break;
            case 86:
                return $this->getApvepur24mo13();
                break;
            case 87:
                return $this->getApvepo24mo13();
                break;
            case 88:
                return $this->getApveinvc24mo13();
                break;
            case 89:
                return $this->getApveicnt24mo13();
                break;
            case 90:
                return $this->getApvepur24mo14();
                break;
            case 91:
                return $this->getApvepo24mo14();
                break;
            case 92:
                return $this->getApveinvc24mo14();
                break;
            case 93:
                return $this->getApveicnt24mo14();
                break;
            case 94:
                return $this->getApvepur24mo15();
                break;
            case 95:
                return $this->getApvepo24mo15();
                break;
            case 96:
                return $this->getApveinvc24mo15();
                break;
            case 97:
                return $this->getApveicnt24mo15();
                break;
            case 98:
                return $this->getApvepur24mo16();
                break;
            case 99:
                return $this->getApvepo24mo16();
                break;
            case 100:
                return $this->getApveinvc24mo16();
                break;
            case 101:
                return $this->getApveicnt24mo16();
                break;
            case 102:
                return $this->getApvepur24mo17();
                break;
            case 103:
                return $this->getApvepo24mo17();
                break;
            case 104:
                return $this->getApveinvc24mo17();
                break;
            case 105:
                return $this->getApveicnt24mo17();
                break;
            case 106:
                return $this->getApvepur24mo18();
                break;
            case 107:
                return $this->getApvepo24mo18();
                break;
            case 108:
                return $this->getApveinvc24mo18();
                break;
            case 109:
                return $this->getApveicnt24mo18();
                break;
            case 110:
                return $this->getApvepur24mo19();
                break;
            case 111:
                return $this->getApvepo24mo19();
                break;
            case 112:
                return $this->getApveinvc24mo19();
                break;
            case 113:
                return $this->getApveicnt24mo19();
                break;
            case 114:
                return $this->getApvepur24mo20();
                break;
            case 115:
                return $this->getApvepo24mo20();
                break;
            case 116:
                return $this->getApveinvc24mo20();
                break;
            case 117:
                return $this->getApveicnt24mo20();
                break;
            case 118:
                return $this->getApvepur24mo21();
                break;
            case 119:
                return $this->getApvepo24mo21();
                break;
            case 120:
                return $this->getApveinvc24mo21();
                break;
            case 121:
                return $this->getApveicnt24mo21();
                break;
            case 122:
                return $this->getApvepur24mo22();
                break;
            case 123:
                return $this->getApvepo24mo22();
                break;
            case 124:
                return $this->getApveinvc24mo22();
                break;
            case 125:
                return $this->getApveicnt24mo22();
                break;
            case 126:
                return $this->getApvepur24mo23();
                break;
            case 127:
                return $this->getApvepo24mo23();
                break;
            case 128:
                return $this->getApveinvc24mo23();
                break;
            case 129:
                return $this->getApveicnt24mo23();
                break;
            case 130:
                return $this->getApvepur24mo24();
                break;
            case 131:
                return $this->getApvepo24mo24();
                break;
            case 132:
                return $this->getApveinvc24mo24();
                break;
            case 133:
                return $this->getApveicnt24mo24();
                break;
            case 134:
                return $this->getApvecrncy();
                break;
            case 135:
                return $this->getApvefrtinamt();
                break;
            case 136:
                return $this->getApveouracctnbr();
                break;
            case 137:
                return $this->getApvevenddisc();
                break;
            case 138:
                return $this->getApvefob();
                break;
            case 139:
                return $this->getApveroylpct();
                break;
            case 140:
                return $this->getApveprtpoeoru();
                break;
            case 141:
                return $this->getApvecomrate();
                break;
            case 142:
                return $this->getApveuselandonrcpt();
                break;
            case 143:
                return $this->getApvebuyrwhse1();
                break;
            case 144:
                return $this->getApvebuyrcode1();
                break;
            case 145:
                return $this->getApvebuyrwhse2();
                break;
            case 146:
                return $this->getApvebuyrcode2();
                break;
            case 147:
                return $this->getApvebuyrwhse3();
                break;
            case 148:
                return $this->getApvebuyrcode3();
                break;
            case 149:
                return $this->getApvebuyrwhse4();
                break;
            case 150:
                return $this->getApvebuyrcode4();
                break;
            case 151:
                return $this->getApvebuyrwhse5();
                break;
            case 152:
                return $this->getApvebuyrcode5();
                break;
            case 153:
                return $this->getApvebuyrwhse6();
                break;
            case 154:
                return $this->getApvebuyrcode6();
                break;
            case 155:
                return $this->getApvebuyrwhse7();
                break;
            case 156:
                return $this->getApvebuyrcode7();
                break;
            case 157:
                return $this->getApvebuyrwhse8();
                break;
            case 158:
                return $this->getApvebuyrcode8();
                break;
            case 159:
                return $this->getApvebuyrwhse9();
                break;
            case 160:
                return $this->getApvebuyrcode9();
                break;
            case 161:
                return $this->getApvebuyrwhse10();
                break;
            case 162:
                return $this->getApvebuyrcode10();
                break;
            case 163:
                return $this->getApvelandcost();
                break;
            case 164:
                return $this->getApvereleasenbr();
                break;
            case 165:
                return $this->getApvescanstartpos();
                break;
            case 166:
                return $this->getApvescanlength();
                break;
            case 167:
                return $this->getDateupdtd();
                break;
            case 168:
                return $this->getTimeupdtd();
                break;
            case 169:
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

        if (isset($alreadyDumpedObjects['Vendor'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Vendor'][$this->hashCode()] = true;
        $keys = VendorTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getApvevendid(),
            $keys[1] => $this->getApvename(),
            $keys[2] => $this->getApveadr1(),
            $keys[3] => $this->getApveadr2(),
            $keys[4] => $this->getApveadr3(),
            $keys[5] => $this->getApvectry(),
            $keys[6] => $this->getApvecity(),
            $keys[7] => $this->getApvestat(),
            $keys[8] => $this->getApvezipcode(),
            $keys[9] => $this->getApvepayname(),
            $keys[10] => $this->getApvepayadr1(),
            $keys[11] => $this->getApvepayadr2(),
            $keys[12] => $this->getApvepayadr3(),
            $keys[13] => $this->getApvepayctry(),
            $keys[14] => $this->getApvepaycity(),
            $keys[15] => $this->getApvepaystat(),
            $keys[16] => $this->getApvepayzipcode(),
            $keys[17] => $this->getApvestatus(),
            $keys[18] => $this->getApvetakeexpireddisc(),
            $keys[19] => $this->getApveprinthts(),
            $keys[20] => $this->getApvefabbin(),
            $keys[21] => $this->getApvelmprntbulk(),
            $keys[22] => $this->getApveallowdropship(),
            $keys[23] => $this->getAptbtypecode(),
            $keys[24] => $this->getAptmtermcode(),
            $keys[25] => $this->getApvesviacode(),
            $keys[26] => $this->getApveoldfob(),
            $keys[27] => $this->getApveleaddays(),
            $keys[28] => $this->getApveglacct(),
            $keys[29] => $this->getApve1099ssnbr(),
            $keys[30] => $this->getApveminordrcode(),
            $keys[31] => $this->getApveminordrvalue(),
            $keys[32] => $this->getApvepurmtd(),
            $keys[33] => $this->getApvepomtd(),
            $keys[34] => $this->getApveinvcmtd(),
            $keys[35] => $this->getApveicntmtd(),
            $keys[36] => $this->getApvedateopen(),
            $keys[37] => $this->getApvelastpurdate(),
            $keys[38] => $this->getApvepur24mo01(),
            $keys[39] => $this->getApvepo24mo01(),
            $keys[40] => $this->getApveinvc24mo01(),
            $keys[41] => $this->getApveicnt24mo01(),
            $keys[42] => $this->getApvepur24mo02(),
            $keys[43] => $this->getApvepo24mo02(),
            $keys[44] => $this->getApveinvc24mo02(),
            $keys[45] => $this->getApveicnt24mo02(),
            $keys[46] => $this->getApvepur24mo03(),
            $keys[47] => $this->getApvepo24mo03(),
            $keys[48] => $this->getApveinvc24mo03(),
            $keys[49] => $this->getApveicnt24mo03(),
            $keys[50] => $this->getApvepur24mo04(),
            $keys[51] => $this->getApvepo24mo04(),
            $keys[52] => $this->getApveinvc24mo04(),
            $keys[53] => $this->getApveicnt24mo04(),
            $keys[54] => $this->getApvepur24mo05(),
            $keys[55] => $this->getApvepo24mo05(),
            $keys[56] => $this->getApveinvc24mo05(),
            $keys[57] => $this->getApveicnt24mo05(),
            $keys[58] => $this->getApvepur24mo06(),
            $keys[59] => $this->getApvepo24mo06(),
            $keys[60] => $this->getApveinvc24mo06(),
            $keys[61] => $this->getApveicnt24mo06(),
            $keys[62] => $this->getApvepur24mo07(),
            $keys[63] => $this->getApvepo24mo07(),
            $keys[64] => $this->getApveinvc24mo07(),
            $keys[65] => $this->getApveicnt24mo07(),
            $keys[66] => $this->getApvepur24mo08(),
            $keys[67] => $this->getApvepo24mo08(),
            $keys[68] => $this->getApveinvc24mo08(),
            $keys[69] => $this->getApveicnt24mo08(),
            $keys[70] => $this->getApvepur24mo09(),
            $keys[71] => $this->getApvepo24mo09(),
            $keys[72] => $this->getApveinvc24mo09(),
            $keys[73] => $this->getApveicnt24mo09(),
            $keys[74] => $this->getApvepur24mo10(),
            $keys[75] => $this->getApvepo24mo10(),
            $keys[76] => $this->getApveinvc24mo10(),
            $keys[77] => $this->getApveicnt24mo10(),
            $keys[78] => $this->getApvepur24mo11(),
            $keys[79] => $this->getApvepo24mo11(),
            $keys[80] => $this->getApveinvc24mo11(),
            $keys[81] => $this->getApveicnt24mo11(),
            $keys[82] => $this->getApvepur24mo12(),
            $keys[83] => $this->getApvepo24mo12(),
            $keys[84] => $this->getApveinvc24mo12(),
            $keys[85] => $this->getApveicnt24mo12(),
            $keys[86] => $this->getApvepur24mo13(),
            $keys[87] => $this->getApvepo24mo13(),
            $keys[88] => $this->getApveinvc24mo13(),
            $keys[89] => $this->getApveicnt24mo13(),
            $keys[90] => $this->getApvepur24mo14(),
            $keys[91] => $this->getApvepo24mo14(),
            $keys[92] => $this->getApveinvc24mo14(),
            $keys[93] => $this->getApveicnt24mo14(),
            $keys[94] => $this->getApvepur24mo15(),
            $keys[95] => $this->getApvepo24mo15(),
            $keys[96] => $this->getApveinvc24mo15(),
            $keys[97] => $this->getApveicnt24mo15(),
            $keys[98] => $this->getApvepur24mo16(),
            $keys[99] => $this->getApvepo24mo16(),
            $keys[100] => $this->getApveinvc24mo16(),
            $keys[101] => $this->getApveicnt24mo16(),
            $keys[102] => $this->getApvepur24mo17(),
            $keys[103] => $this->getApvepo24mo17(),
            $keys[104] => $this->getApveinvc24mo17(),
            $keys[105] => $this->getApveicnt24mo17(),
            $keys[106] => $this->getApvepur24mo18(),
            $keys[107] => $this->getApvepo24mo18(),
            $keys[108] => $this->getApveinvc24mo18(),
            $keys[109] => $this->getApveicnt24mo18(),
            $keys[110] => $this->getApvepur24mo19(),
            $keys[111] => $this->getApvepo24mo19(),
            $keys[112] => $this->getApveinvc24mo19(),
            $keys[113] => $this->getApveicnt24mo19(),
            $keys[114] => $this->getApvepur24mo20(),
            $keys[115] => $this->getApvepo24mo20(),
            $keys[116] => $this->getApveinvc24mo20(),
            $keys[117] => $this->getApveicnt24mo20(),
            $keys[118] => $this->getApvepur24mo21(),
            $keys[119] => $this->getApvepo24mo21(),
            $keys[120] => $this->getApveinvc24mo21(),
            $keys[121] => $this->getApveicnt24mo21(),
            $keys[122] => $this->getApvepur24mo22(),
            $keys[123] => $this->getApvepo24mo22(),
            $keys[124] => $this->getApveinvc24mo22(),
            $keys[125] => $this->getApveicnt24mo22(),
            $keys[126] => $this->getApvepur24mo23(),
            $keys[127] => $this->getApvepo24mo23(),
            $keys[128] => $this->getApveinvc24mo23(),
            $keys[129] => $this->getApveicnt24mo23(),
            $keys[130] => $this->getApvepur24mo24(),
            $keys[131] => $this->getApvepo24mo24(),
            $keys[132] => $this->getApveinvc24mo24(),
            $keys[133] => $this->getApveicnt24mo24(),
            $keys[134] => $this->getApvecrncy(),
            $keys[135] => $this->getApvefrtinamt(),
            $keys[136] => $this->getApveouracctnbr(),
            $keys[137] => $this->getApvevenddisc(),
            $keys[138] => $this->getApvefob(),
            $keys[139] => $this->getApveroylpct(),
            $keys[140] => $this->getApveprtpoeoru(),
            $keys[141] => $this->getApvecomrate(),
            $keys[142] => $this->getApveuselandonrcpt(),
            $keys[143] => $this->getApvebuyrwhse1(),
            $keys[144] => $this->getApvebuyrcode1(),
            $keys[145] => $this->getApvebuyrwhse2(),
            $keys[146] => $this->getApvebuyrcode2(),
            $keys[147] => $this->getApvebuyrwhse3(),
            $keys[148] => $this->getApvebuyrcode3(),
            $keys[149] => $this->getApvebuyrwhse4(),
            $keys[150] => $this->getApvebuyrcode4(),
            $keys[151] => $this->getApvebuyrwhse5(),
            $keys[152] => $this->getApvebuyrcode5(),
            $keys[153] => $this->getApvebuyrwhse6(),
            $keys[154] => $this->getApvebuyrcode6(),
            $keys[155] => $this->getApvebuyrwhse7(),
            $keys[156] => $this->getApvebuyrcode7(),
            $keys[157] => $this->getApvebuyrwhse8(),
            $keys[158] => $this->getApvebuyrcode8(),
            $keys[159] => $this->getApvebuyrwhse9(),
            $keys[160] => $this->getApvebuyrcode9(),
            $keys[161] => $this->getApvebuyrwhse10(),
            $keys[162] => $this->getApvebuyrcode10(),
            $keys[163] => $this->getApvelandcost(),
            $keys[164] => $this->getApvereleasenbr(),
            $keys[165] => $this->getApvescanstartpos(),
            $keys[166] => $this->getApvescanlength(),
            $keys[167] => $this->getDateupdtd(),
            $keys[168] => $this->getTimeupdtd(),
            $keys[169] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aApTypeCode) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'apTypeCode';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ap_type_code';
                        break;
                    default:
                        $key = 'ApTypeCode';
                }

                $result[$key] = $this->aApTypeCode->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aApTermsCode) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'apTermsCode';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ap_term_code';
                        break;
                    default:
                        $key = 'ApTermsCode';
                }

                $result[$key] = $this->aApTermsCode->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
            if (null !== $this->aApBuyer) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'apBuyer';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ap_buyr_code';
                        break;
                    default:
                        $key = 'ApBuyer';
                }

                $result[$key] = $this->aApBuyer->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collVendorShipfroms) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'vendorShipfroms';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ap_ship_froms';
                        break;
                    default:
                        $key = 'VendorShipfroms';
                }

                $result[$key] = $this->collVendorShipfroms->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPurchaseOrders) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'purchaseOrders';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'po_heads';
                        break;
                    default:
                        $key = 'PurchaseOrders';
                }

                $result[$key] = $this->collPurchaseOrders->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Vendor
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = VendorTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Vendor
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setApvevendid($value);
                break;
            case 1:
                $this->setApvename($value);
                break;
            case 2:
                $this->setApveadr1($value);
                break;
            case 3:
                $this->setApveadr2($value);
                break;
            case 4:
                $this->setApveadr3($value);
                break;
            case 5:
                $this->setApvectry($value);
                break;
            case 6:
                $this->setApvecity($value);
                break;
            case 7:
                $this->setApvestat($value);
                break;
            case 8:
                $this->setApvezipcode($value);
                break;
            case 9:
                $this->setApvepayname($value);
                break;
            case 10:
                $this->setApvepayadr1($value);
                break;
            case 11:
                $this->setApvepayadr2($value);
                break;
            case 12:
                $this->setApvepayadr3($value);
                break;
            case 13:
                $this->setApvepayctry($value);
                break;
            case 14:
                $this->setApvepaycity($value);
                break;
            case 15:
                $this->setApvepaystat($value);
                break;
            case 16:
                $this->setApvepayzipcode($value);
                break;
            case 17:
                $this->setApvestatus($value);
                break;
            case 18:
                $this->setApvetakeexpireddisc($value);
                break;
            case 19:
                $this->setApveprinthts($value);
                break;
            case 20:
                $this->setApvefabbin($value);
                break;
            case 21:
                $this->setApvelmprntbulk($value);
                break;
            case 22:
                $this->setApveallowdropship($value);
                break;
            case 23:
                $this->setAptbtypecode($value);
                break;
            case 24:
                $this->setAptmtermcode($value);
                break;
            case 25:
                $this->setApvesviacode($value);
                break;
            case 26:
                $this->setApveoldfob($value);
                break;
            case 27:
                $this->setApveleaddays($value);
                break;
            case 28:
                $this->setApveglacct($value);
                break;
            case 29:
                $this->setApve1099ssnbr($value);
                break;
            case 30:
                $this->setApveminordrcode($value);
                break;
            case 31:
                $this->setApveminordrvalue($value);
                break;
            case 32:
                $this->setApvepurmtd($value);
                break;
            case 33:
                $this->setApvepomtd($value);
                break;
            case 34:
                $this->setApveinvcmtd($value);
                break;
            case 35:
                $this->setApveicntmtd($value);
                break;
            case 36:
                $this->setApvedateopen($value);
                break;
            case 37:
                $this->setApvelastpurdate($value);
                break;
            case 38:
                $this->setApvepur24mo01($value);
                break;
            case 39:
                $this->setApvepo24mo01($value);
                break;
            case 40:
                $this->setApveinvc24mo01($value);
                break;
            case 41:
                $this->setApveicnt24mo01($value);
                break;
            case 42:
                $this->setApvepur24mo02($value);
                break;
            case 43:
                $this->setApvepo24mo02($value);
                break;
            case 44:
                $this->setApveinvc24mo02($value);
                break;
            case 45:
                $this->setApveicnt24mo02($value);
                break;
            case 46:
                $this->setApvepur24mo03($value);
                break;
            case 47:
                $this->setApvepo24mo03($value);
                break;
            case 48:
                $this->setApveinvc24mo03($value);
                break;
            case 49:
                $this->setApveicnt24mo03($value);
                break;
            case 50:
                $this->setApvepur24mo04($value);
                break;
            case 51:
                $this->setApvepo24mo04($value);
                break;
            case 52:
                $this->setApveinvc24mo04($value);
                break;
            case 53:
                $this->setApveicnt24mo04($value);
                break;
            case 54:
                $this->setApvepur24mo05($value);
                break;
            case 55:
                $this->setApvepo24mo05($value);
                break;
            case 56:
                $this->setApveinvc24mo05($value);
                break;
            case 57:
                $this->setApveicnt24mo05($value);
                break;
            case 58:
                $this->setApvepur24mo06($value);
                break;
            case 59:
                $this->setApvepo24mo06($value);
                break;
            case 60:
                $this->setApveinvc24mo06($value);
                break;
            case 61:
                $this->setApveicnt24mo06($value);
                break;
            case 62:
                $this->setApvepur24mo07($value);
                break;
            case 63:
                $this->setApvepo24mo07($value);
                break;
            case 64:
                $this->setApveinvc24mo07($value);
                break;
            case 65:
                $this->setApveicnt24mo07($value);
                break;
            case 66:
                $this->setApvepur24mo08($value);
                break;
            case 67:
                $this->setApvepo24mo08($value);
                break;
            case 68:
                $this->setApveinvc24mo08($value);
                break;
            case 69:
                $this->setApveicnt24mo08($value);
                break;
            case 70:
                $this->setApvepur24mo09($value);
                break;
            case 71:
                $this->setApvepo24mo09($value);
                break;
            case 72:
                $this->setApveinvc24mo09($value);
                break;
            case 73:
                $this->setApveicnt24mo09($value);
                break;
            case 74:
                $this->setApvepur24mo10($value);
                break;
            case 75:
                $this->setApvepo24mo10($value);
                break;
            case 76:
                $this->setApveinvc24mo10($value);
                break;
            case 77:
                $this->setApveicnt24mo10($value);
                break;
            case 78:
                $this->setApvepur24mo11($value);
                break;
            case 79:
                $this->setApvepo24mo11($value);
                break;
            case 80:
                $this->setApveinvc24mo11($value);
                break;
            case 81:
                $this->setApveicnt24mo11($value);
                break;
            case 82:
                $this->setApvepur24mo12($value);
                break;
            case 83:
                $this->setApvepo24mo12($value);
                break;
            case 84:
                $this->setApveinvc24mo12($value);
                break;
            case 85:
                $this->setApveicnt24mo12($value);
                break;
            case 86:
                $this->setApvepur24mo13($value);
                break;
            case 87:
                $this->setApvepo24mo13($value);
                break;
            case 88:
                $this->setApveinvc24mo13($value);
                break;
            case 89:
                $this->setApveicnt24mo13($value);
                break;
            case 90:
                $this->setApvepur24mo14($value);
                break;
            case 91:
                $this->setApvepo24mo14($value);
                break;
            case 92:
                $this->setApveinvc24mo14($value);
                break;
            case 93:
                $this->setApveicnt24mo14($value);
                break;
            case 94:
                $this->setApvepur24mo15($value);
                break;
            case 95:
                $this->setApvepo24mo15($value);
                break;
            case 96:
                $this->setApveinvc24mo15($value);
                break;
            case 97:
                $this->setApveicnt24mo15($value);
                break;
            case 98:
                $this->setApvepur24mo16($value);
                break;
            case 99:
                $this->setApvepo24mo16($value);
                break;
            case 100:
                $this->setApveinvc24mo16($value);
                break;
            case 101:
                $this->setApveicnt24mo16($value);
                break;
            case 102:
                $this->setApvepur24mo17($value);
                break;
            case 103:
                $this->setApvepo24mo17($value);
                break;
            case 104:
                $this->setApveinvc24mo17($value);
                break;
            case 105:
                $this->setApveicnt24mo17($value);
                break;
            case 106:
                $this->setApvepur24mo18($value);
                break;
            case 107:
                $this->setApvepo24mo18($value);
                break;
            case 108:
                $this->setApveinvc24mo18($value);
                break;
            case 109:
                $this->setApveicnt24mo18($value);
                break;
            case 110:
                $this->setApvepur24mo19($value);
                break;
            case 111:
                $this->setApvepo24mo19($value);
                break;
            case 112:
                $this->setApveinvc24mo19($value);
                break;
            case 113:
                $this->setApveicnt24mo19($value);
                break;
            case 114:
                $this->setApvepur24mo20($value);
                break;
            case 115:
                $this->setApvepo24mo20($value);
                break;
            case 116:
                $this->setApveinvc24mo20($value);
                break;
            case 117:
                $this->setApveicnt24mo20($value);
                break;
            case 118:
                $this->setApvepur24mo21($value);
                break;
            case 119:
                $this->setApvepo24mo21($value);
                break;
            case 120:
                $this->setApveinvc24mo21($value);
                break;
            case 121:
                $this->setApveicnt24mo21($value);
                break;
            case 122:
                $this->setApvepur24mo22($value);
                break;
            case 123:
                $this->setApvepo24mo22($value);
                break;
            case 124:
                $this->setApveinvc24mo22($value);
                break;
            case 125:
                $this->setApveicnt24mo22($value);
                break;
            case 126:
                $this->setApvepur24mo23($value);
                break;
            case 127:
                $this->setApvepo24mo23($value);
                break;
            case 128:
                $this->setApveinvc24mo23($value);
                break;
            case 129:
                $this->setApveicnt24mo23($value);
                break;
            case 130:
                $this->setApvepur24mo24($value);
                break;
            case 131:
                $this->setApvepo24mo24($value);
                break;
            case 132:
                $this->setApveinvc24mo24($value);
                break;
            case 133:
                $this->setApveicnt24mo24($value);
                break;
            case 134:
                $this->setApvecrncy($value);
                break;
            case 135:
                $this->setApvefrtinamt($value);
                break;
            case 136:
                $this->setApveouracctnbr($value);
                break;
            case 137:
                $this->setApvevenddisc($value);
                break;
            case 138:
                $this->setApvefob($value);
                break;
            case 139:
                $this->setApveroylpct($value);
                break;
            case 140:
                $this->setApveprtpoeoru($value);
                break;
            case 141:
                $this->setApvecomrate($value);
                break;
            case 142:
                $this->setApveuselandonrcpt($value);
                break;
            case 143:
                $this->setApvebuyrwhse1($value);
                break;
            case 144:
                $this->setApvebuyrcode1($value);
                break;
            case 145:
                $this->setApvebuyrwhse2($value);
                break;
            case 146:
                $this->setApvebuyrcode2($value);
                break;
            case 147:
                $this->setApvebuyrwhse3($value);
                break;
            case 148:
                $this->setApvebuyrcode3($value);
                break;
            case 149:
                $this->setApvebuyrwhse4($value);
                break;
            case 150:
                $this->setApvebuyrcode4($value);
                break;
            case 151:
                $this->setApvebuyrwhse5($value);
                break;
            case 152:
                $this->setApvebuyrcode5($value);
                break;
            case 153:
                $this->setApvebuyrwhse6($value);
                break;
            case 154:
                $this->setApvebuyrcode6($value);
                break;
            case 155:
                $this->setApvebuyrwhse7($value);
                break;
            case 156:
                $this->setApvebuyrcode7($value);
                break;
            case 157:
                $this->setApvebuyrwhse8($value);
                break;
            case 158:
                $this->setApvebuyrcode8($value);
                break;
            case 159:
                $this->setApvebuyrwhse9($value);
                break;
            case 160:
                $this->setApvebuyrcode9($value);
                break;
            case 161:
                $this->setApvebuyrwhse10($value);
                break;
            case 162:
                $this->setApvebuyrcode10($value);
                break;
            case 163:
                $this->setApvelandcost($value);
                break;
            case 164:
                $this->setApvereleasenbr($value);
                break;
            case 165:
                $this->setApvescanstartpos($value);
                break;
            case 166:
                $this->setApvescanlength($value);
                break;
            case 167:
                $this->setDateupdtd($value);
                break;
            case 168:
                $this->setTimeupdtd($value);
                break;
            case 169:
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
        $keys = VendorTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setApvevendid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setApvename($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setApveadr1($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setApveadr2($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setApveadr3($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setApvectry($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setApvecity($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setApvestat($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setApvezipcode($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setApvepayname($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setApvepayadr1($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setApvepayadr2($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setApvepayadr3($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setApvepayctry($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setApvepaycity($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setApvepaystat($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setApvepayzipcode($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setApvestatus($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setApvetakeexpireddisc($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setApveprinthts($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setApvefabbin($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setApvelmprntbulk($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setApveallowdropship($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setAptbtypecode($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setAptmtermcode($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setApvesviacode($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setApveoldfob($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setApveleaddays($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setApveglacct($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setApve1099ssnbr($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setApveminordrcode($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setApveminordrvalue($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setApvepurmtd($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setApvepomtd($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setApveinvcmtd($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setApveicntmtd($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setApvedateopen($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setApvelastpurdate($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setApvepur24mo01($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setApvepo24mo01($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setApveinvc24mo01($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setApveicnt24mo01($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setApvepur24mo02($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setApvepo24mo02($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setApveinvc24mo02($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setApveicnt24mo02($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setApvepur24mo03($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setApvepo24mo03($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setApveinvc24mo03($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setApveicnt24mo03($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setApvepur24mo04($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setApvepo24mo04($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setApveinvc24mo04($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setApveicnt24mo04($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setApvepur24mo05($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setApvepo24mo05($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setApveinvc24mo05($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setApveicnt24mo05($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setApvepur24mo06($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setApvepo24mo06($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setApveinvc24mo06($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setApveicnt24mo06($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setApvepur24mo07($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setApvepo24mo07($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setApveinvc24mo07($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setApveicnt24mo07($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setApvepur24mo08($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setApvepo24mo08($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setApveinvc24mo08($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setApveicnt24mo08($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setApvepur24mo09($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setApvepo24mo09($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setApveinvc24mo09($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setApveicnt24mo09($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setApvepur24mo10($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setApvepo24mo10($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setApveinvc24mo10($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setApveicnt24mo10($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setApvepur24mo11($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setApvepo24mo11($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setApveinvc24mo11($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setApveicnt24mo11($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setApvepur24mo12($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setApvepo24mo12($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setApveinvc24mo12($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setApveicnt24mo12($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setApvepur24mo13($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setApvepo24mo13($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setApveinvc24mo13($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setApveicnt24mo13($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setApvepur24mo14($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setApvepo24mo14($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setApveinvc24mo14($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setApveicnt24mo14($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setApvepur24mo15($arr[$keys[94]]);
        }
        if (array_key_exists($keys[95], $arr)) {
            $this->setApvepo24mo15($arr[$keys[95]]);
        }
        if (array_key_exists($keys[96], $arr)) {
            $this->setApveinvc24mo15($arr[$keys[96]]);
        }
        if (array_key_exists($keys[97], $arr)) {
            $this->setApveicnt24mo15($arr[$keys[97]]);
        }
        if (array_key_exists($keys[98], $arr)) {
            $this->setApvepur24mo16($arr[$keys[98]]);
        }
        if (array_key_exists($keys[99], $arr)) {
            $this->setApvepo24mo16($arr[$keys[99]]);
        }
        if (array_key_exists($keys[100], $arr)) {
            $this->setApveinvc24mo16($arr[$keys[100]]);
        }
        if (array_key_exists($keys[101], $arr)) {
            $this->setApveicnt24mo16($arr[$keys[101]]);
        }
        if (array_key_exists($keys[102], $arr)) {
            $this->setApvepur24mo17($arr[$keys[102]]);
        }
        if (array_key_exists($keys[103], $arr)) {
            $this->setApvepo24mo17($arr[$keys[103]]);
        }
        if (array_key_exists($keys[104], $arr)) {
            $this->setApveinvc24mo17($arr[$keys[104]]);
        }
        if (array_key_exists($keys[105], $arr)) {
            $this->setApveicnt24mo17($arr[$keys[105]]);
        }
        if (array_key_exists($keys[106], $arr)) {
            $this->setApvepur24mo18($arr[$keys[106]]);
        }
        if (array_key_exists($keys[107], $arr)) {
            $this->setApvepo24mo18($arr[$keys[107]]);
        }
        if (array_key_exists($keys[108], $arr)) {
            $this->setApveinvc24mo18($arr[$keys[108]]);
        }
        if (array_key_exists($keys[109], $arr)) {
            $this->setApveicnt24mo18($arr[$keys[109]]);
        }
        if (array_key_exists($keys[110], $arr)) {
            $this->setApvepur24mo19($arr[$keys[110]]);
        }
        if (array_key_exists($keys[111], $arr)) {
            $this->setApvepo24mo19($arr[$keys[111]]);
        }
        if (array_key_exists($keys[112], $arr)) {
            $this->setApveinvc24mo19($arr[$keys[112]]);
        }
        if (array_key_exists($keys[113], $arr)) {
            $this->setApveicnt24mo19($arr[$keys[113]]);
        }
        if (array_key_exists($keys[114], $arr)) {
            $this->setApvepur24mo20($arr[$keys[114]]);
        }
        if (array_key_exists($keys[115], $arr)) {
            $this->setApvepo24mo20($arr[$keys[115]]);
        }
        if (array_key_exists($keys[116], $arr)) {
            $this->setApveinvc24mo20($arr[$keys[116]]);
        }
        if (array_key_exists($keys[117], $arr)) {
            $this->setApveicnt24mo20($arr[$keys[117]]);
        }
        if (array_key_exists($keys[118], $arr)) {
            $this->setApvepur24mo21($arr[$keys[118]]);
        }
        if (array_key_exists($keys[119], $arr)) {
            $this->setApvepo24mo21($arr[$keys[119]]);
        }
        if (array_key_exists($keys[120], $arr)) {
            $this->setApveinvc24mo21($arr[$keys[120]]);
        }
        if (array_key_exists($keys[121], $arr)) {
            $this->setApveicnt24mo21($arr[$keys[121]]);
        }
        if (array_key_exists($keys[122], $arr)) {
            $this->setApvepur24mo22($arr[$keys[122]]);
        }
        if (array_key_exists($keys[123], $arr)) {
            $this->setApvepo24mo22($arr[$keys[123]]);
        }
        if (array_key_exists($keys[124], $arr)) {
            $this->setApveinvc24mo22($arr[$keys[124]]);
        }
        if (array_key_exists($keys[125], $arr)) {
            $this->setApveicnt24mo22($arr[$keys[125]]);
        }
        if (array_key_exists($keys[126], $arr)) {
            $this->setApvepur24mo23($arr[$keys[126]]);
        }
        if (array_key_exists($keys[127], $arr)) {
            $this->setApvepo24mo23($arr[$keys[127]]);
        }
        if (array_key_exists($keys[128], $arr)) {
            $this->setApveinvc24mo23($arr[$keys[128]]);
        }
        if (array_key_exists($keys[129], $arr)) {
            $this->setApveicnt24mo23($arr[$keys[129]]);
        }
        if (array_key_exists($keys[130], $arr)) {
            $this->setApvepur24mo24($arr[$keys[130]]);
        }
        if (array_key_exists($keys[131], $arr)) {
            $this->setApvepo24mo24($arr[$keys[131]]);
        }
        if (array_key_exists($keys[132], $arr)) {
            $this->setApveinvc24mo24($arr[$keys[132]]);
        }
        if (array_key_exists($keys[133], $arr)) {
            $this->setApveicnt24mo24($arr[$keys[133]]);
        }
        if (array_key_exists($keys[134], $arr)) {
            $this->setApvecrncy($arr[$keys[134]]);
        }
        if (array_key_exists($keys[135], $arr)) {
            $this->setApvefrtinamt($arr[$keys[135]]);
        }
        if (array_key_exists($keys[136], $arr)) {
            $this->setApveouracctnbr($arr[$keys[136]]);
        }
        if (array_key_exists($keys[137], $arr)) {
            $this->setApvevenddisc($arr[$keys[137]]);
        }
        if (array_key_exists($keys[138], $arr)) {
            $this->setApvefob($arr[$keys[138]]);
        }
        if (array_key_exists($keys[139], $arr)) {
            $this->setApveroylpct($arr[$keys[139]]);
        }
        if (array_key_exists($keys[140], $arr)) {
            $this->setApveprtpoeoru($arr[$keys[140]]);
        }
        if (array_key_exists($keys[141], $arr)) {
            $this->setApvecomrate($arr[$keys[141]]);
        }
        if (array_key_exists($keys[142], $arr)) {
            $this->setApveuselandonrcpt($arr[$keys[142]]);
        }
        if (array_key_exists($keys[143], $arr)) {
            $this->setApvebuyrwhse1($arr[$keys[143]]);
        }
        if (array_key_exists($keys[144], $arr)) {
            $this->setApvebuyrcode1($arr[$keys[144]]);
        }
        if (array_key_exists($keys[145], $arr)) {
            $this->setApvebuyrwhse2($arr[$keys[145]]);
        }
        if (array_key_exists($keys[146], $arr)) {
            $this->setApvebuyrcode2($arr[$keys[146]]);
        }
        if (array_key_exists($keys[147], $arr)) {
            $this->setApvebuyrwhse3($arr[$keys[147]]);
        }
        if (array_key_exists($keys[148], $arr)) {
            $this->setApvebuyrcode3($arr[$keys[148]]);
        }
        if (array_key_exists($keys[149], $arr)) {
            $this->setApvebuyrwhse4($arr[$keys[149]]);
        }
        if (array_key_exists($keys[150], $arr)) {
            $this->setApvebuyrcode4($arr[$keys[150]]);
        }
        if (array_key_exists($keys[151], $arr)) {
            $this->setApvebuyrwhse5($arr[$keys[151]]);
        }
        if (array_key_exists($keys[152], $arr)) {
            $this->setApvebuyrcode5($arr[$keys[152]]);
        }
        if (array_key_exists($keys[153], $arr)) {
            $this->setApvebuyrwhse6($arr[$keys[153]]);
        }
        if (array_key_exists($keys[154], $arr)) {
            $this->setApvebuyrcode6($arr[$keys[154]]);
        }
        if (array_key_exists($keys[155], $arr)) {
            $this->setApvebuyrwhse7($arr[$keys[155]]);
        }
        if (array_key_exists($keys[156], $arr)) {
            $this->setApvebuyrcode7($arr[$keys[156]]);
        }
        if (array_key_exists($keys[157], $arr)) {
            $this->setApvebuyrwhse8($arr[$keys[157]]);
        }
        if (array_key_exists($keys[158], $arr)) {
            $this->setApvebuyrcode8($arr[$keys[158]]);
        }
        if (array_key_exists($keys[159], $arr)) {
            $this->setApvebuyrwhse9($arr[$keys[159]]);
        }
        if (array_key_exists($keys[160], $arr)) {
            $this->setApvebuyrcode9($arr[$keys[160]]);
        }
        if (array_key_exists($keys[161], $arr)) {
            $this->setApvebuyrwhse10($arr[$keys[161]]);
        }
        if (array_key_exists($keys[162], $arr)) {
            $this->setApvebuyrcode10($arr[$keys[162]]);
        }
        if (array_key_exists($keys[163], $arr)) {
            $this->setApvelandcost($arr[$keys[163]]);
        }
        if (array_key_exists($keys[164], $arr)) {
            $this->setApvereleasenbr($arr[$keys[164]]);
        }
        if (array_key_exists($keys[165], $arr)) {
            $this->setApvescanstartpos($arr[$keys[165]]);
        }
        if (array_key_exists($keys[166], $arr)) {
            $this->setApvescanlength($arr[$keys[166]]);
        }
        if (array_key_exists($keys[167], $arr)) {
            $this->setDateupdtd($arr[$keys[167]]);
        }
        if (array_key_exists($keys[168], $arr)) {
            $this->setTimeupdtd($arr[$keys[168]]);
        }
        if (array_key_exists($keys[169], $arr)) {
            $this->setDummy($arr[$keys[169]]);
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
     * @return $this|\Vendor The current object, for fluid interface
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
        $criteria = new Criteria(VendorTableMap::DATABASE_NAME);

        if ($this->isColumnModified(VendorTableMap::COL_APVEVENDID)) {
            $criteria->add(VendorTableMap::COL_APVEVENDID, $this->apvevendid);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVENAME)) {
            $criteria->add(VendorTableMap::COL_APVENAME, $this->apvename);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEADR1)) {
            $criteria->add(VendorTableMap::COL_APVEADR1, $this->apveadr1);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEADR2)) {
            $criteria->add(VendorTableMap::COL_APVEADR2, $this->apveadr2);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEADR3)) {
            $criteria->add(VendorTableMap::COL_APVEADR3, $this->apveadr3);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVECTRY)) {
            $criteria->add(VendorTableMap::COL_APVECTRY, $this->apvectry);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVECITY)) {
            $criteria->add(VendorTableMap::COL_APVECITY, $this->apvecity);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVESTAT)) {
            $criteria->add(VendorTableMap::COL_APVESTAT, $this->apvestat);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEZIPCODE)) {
            $criteria->add(VendorTableMap::COL_APVEZIPCODE, $this->apvezipcode);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYNAME)) {
            $criteria->add(VendorTableMap::COL_APVEPAYNAME, $this->apvepayname);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYADR1)) {
            $criteria->add(VendorTableMap::COL_APVEPAYADR1, $this->apvepayadr1);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYADR2)) {
            $criteria->add(VendorTableMap::COL_APVEPAYADR2, $this->apvepayadr2);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYADR3)) {
            $criteria->add(VendorTableMap::COL_APVEPAYADR3, $this->apvepayadr3);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYCTRY)) {
            $criteria->add(VendorTableMap::COL_APVEPAYCTRY, $this->apvepayctry);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYCITY)) {
            $criteria->add(VendorTableMap::COL_APVEPAYCITY, $this->apvepaycity);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYSTAT)) {
            $criteria->add(VendorTableMap::COL_APVEPAYSTAT, $this->apvepaystat);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPAYZIPCODE)) {
            $criteria->add(VendorTableMap::COL_APVEPAYZIPCODE, $this->apvepayzipcode);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVESTATUS)) {
            $criteria->add(VendorTableMap::COL_APVESTATUS, $this->apvestatus);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVETAKEEXPIREDDISC)) {
            $criteria->add(VendorTableMap::COL_APVETAKEEXPIREDDISC, $this->apvetakeexpireddisc);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPRINTHTS)) {
            $criteria->add(VendorTableMap::COL_APVEPRINTHTS, $this->apveprinthts);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEFABBIN)) {
            $criteria->add(VendorTableMap::COL_APVEFABBIN, $this->apvefabbin);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVELMPRNTBULK)) {
            $criteria->add(VendorTableMap::COL_APVELMPRNTBULK, $this->apvelmprntbulk);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEALLOWDROPSHIP)) {
            $criteria->add(VendorTableMap::COL_APVEALLOWDROPSHIP, $this->apveallowdropship);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APTBTYPECODE)) {
            $criteria->add(VendorTableMap::COL_APTBTYPECODE, $this->aptbtypecode);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APTMTERMCODE)) {
            $criteria->add(VendorTableMap::COL_APTMTERMCODE, $this->aptmtermcode);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVESVIACODE)) {
            $criteria->add(VendorTableMap::COL_APVESVIACODE, $this->apvesviacode);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEOLDFOB)) {
            $criteria->add(VendorTableMap::COL_APVEOLDFOB, $this->apveoldfob);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVELEADDAYS)) {
            $criteria->add(VendorTableMap::COL_APVELEADDAYS, $this->apveleaddays);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEGLACCT)) {
            $criteria->add(VendorTableMap::COL_APVEGLACCT, $this->apveglacct);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVE1099SSNBR)) {
            $criteria->add(VendorTableMap::COL_APVE1099SSNBR, $this->apve1099ssnbr);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEMINORDRCODE)) {
            $criteria->add(VendorTableMap::COL_APVEMINORDRCODE, $this->apveminordrcode);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEMINORDRVALUE)) {
            $criteria->add(VendorTableMap::COL_APVEMINORDRVALUE, $this->apveminordrvalue);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPURMTD)) {
            $criteria->add(VendorTableMap::COL_APVEPURMTD, $this->apvepurmtd);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPOMTD)) {
            $criteria->add(VendorTableMap::COL_APVEPOMTD, $this->apvepomtd);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVCMTD)) {
            $criteria->add(VendorTableMap::COL_APVEINVCMTD, $this->apveinvcmtd);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNTMTD)) {
            $criteria->add(VendorTableMap::COL_APVEICNTMTD, $this->apveicntmtd);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEDATEOPEN)) {
            $criteria->add(VendorTableMap::COL_APVEDATEOPEN, $this->apvedateopen);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVELASTPURDATE)) {
            $criteria->add(VendorTableMap::COL_APVELASTPURDATE, $this->apvelastpurdate);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO01)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO01, $this->apvepur24mo01);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO01)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO01, $this->apvepo24mo01);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO01)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO01, $this->apveinvc24mo01);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO01)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO01, $this->apveicnt24mo01);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO02)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO02, $this->apvepur24mo02);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO02)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO02, $this->apvepo24mo02);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO02)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO02, $this->apveinvc24mo02);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO02)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO02, $this->apveicnt24mo02);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO03)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO03, $this->apvepur24mo03);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO03)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO03, $this->apvepo24mo03);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO03)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO03, $this->apveinvc24mo03);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO03)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO03, $this->apveicnt24mo03);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO04)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO04, $this->apvepur24mo04);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO04)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO04, $this->apvepo24mo04);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO04)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO04, $this->apveinvc24mo04);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO04)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO04, $this->apveicnt24mo04);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO05)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO05, $this->apvepur24mo05);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO05)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO05, $this->apvepo24mo05);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO05)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO05, $this->apveinvc24mo05);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO05)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO05, $this->apveicnt24mo05);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO06)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO06, $this->apvepur24mo06);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO06)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO06, $this->apvepo24mo06);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO06)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO06, $this->apveinvc24mo06);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO06)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO06, $this->apveicnt24mo06);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO07)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO07, $this->apvepur24mo07);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO07)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO07, $this->apvepo24mo07);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO07)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO07, $this->apveinvc24mo07);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO07)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO07, $this->apveicnt24mo07);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO08)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO08, $this->apvepur24mo08);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO08)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO08, $this->apvepo24mo08);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO08)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO08, $this->apveinvc24mo08);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO08)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO08, $this->apveicnt24mo08);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO09)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO09, $this->apvepur24mo09);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO09)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO09, $this->apvepo24mo09);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO09)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO09, $this->apveinvc24mo09);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO09)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO09, $this->apveicnt24mo09);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO10)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO10, $this->apvepur24mo10);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO10)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO10, $this->apvepo24mo10);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO10)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO10, $this->apveinvc24mo10);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO10)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO10, $this->apveicnt24mo10);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO11)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO11, $this->apvepur24mo11);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO11)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO11, $this->apvepo24mo11);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO11)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO11, $this->apveinvc24mo11);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO11)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO11, $this->apveicnt24mo11);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO12)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO12, $this->apvepur24mo12);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO12)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO12, $this->apvepo24mo12);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO12)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO12, $this->apveinvc24mo12);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO12)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO12, $this->apveicnt24mo12);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO13)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO13, $this->apvepur24mo13);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO13)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO13, $this->apvepo24mo13);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO13)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO13, $this->apveinvc24mo13);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO13)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO13, $this->apveicnt24mo13);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO14)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO14, $this->apvepur24mo14);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO14)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO14, $this->apvepo24mo14);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO14)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO14, $this->apveinvc24mo14);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO14)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO14, $this->apveicnt24mo14);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO15)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO15, $this->apvepur24mo15);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO15)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO15, $this->apvepo24mo15);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO15)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO15, $this->apveinvc24mo15);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO15)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO15, $this->apveicnt24mo15);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO16)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO16, $this->apvepur24mo16);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO16)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO16, $this->apvepo24mo16);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO16)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO16, $this->apveinvc24mo16);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO16)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO16, $this->apveicnt24mo16);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO17)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO17, $this->apvepur24mo17);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO17)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO17, $this->apvepo24mo17);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO17)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO17, $this->apveinvc24mo17);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO17)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO17, $this->apveicnt24mo17);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO18)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO18, $this->apvepur24mo18);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO18)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO18, $this->apvepo24mo18);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO18)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO18, $this->apveinvc24mo18);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO18)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO18, $this->apveicnt24mo18);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO19)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO19, $this->apvepur24mo19);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO19)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO19, $this->apvepo24mo19);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO19)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO19, $this->apveinvc24mo19);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO19)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO19, $this->apveicnt24mo19);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO20)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO20, $this->apvepur24mo20);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO20)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO20, $this->apvepo24mo20);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO20)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO20, $this->apveinvc24mo20);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO20)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO20, $this->apveicnt24mo20);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO21)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO21, $this->apvepur24mo21);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO21)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO21, $this->apvepo24mo21);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO21)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO21, $this->apveinvc24mo21);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO21)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO21, $this->apveicnt24mo21);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO22)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO22, $this->apvepur24mo22);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO22)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO22, $this->apvepo24mo22);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO22)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO22, $this->apveinvc24mo22);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO22)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO22, $this->apveicnt24mo22);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO23)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO23, $this->apvepur24mo23);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO23)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO23, $this->apvepo24mo23);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO23)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO23, $this->apveinvc24mo23);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO23)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO23, $this->apveicnt24mo23);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPUR24MO24)) {
            $criteria->add(VendorTableMap::COL_APVEPUR24MO24, $this->apvepur24mo24);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPO24MO24)) {
            $criteria->add(VendorTableMap::COL_APVEPO24MO24, $this->apvepo24mo24);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEINVC24MO24)) {
            $criteria->add(VendorTableMap::COL_APVEINVC24MO24, $this->apveinvc24mo24);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEICNT24MO24)) {
            $criteria->add(VendorTableMap::COL_APVEICNT24MO24, $this->apveicnt24mo24);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVECRNCY)) {
            $criteria->add(VendorTableMap::COL_APVECRNCY, $this->apvecrncy);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEFRTINAMT)) {
            $criteria->add(VendorTableMap::COL_APVEFRTINAMT, $this->apvefrtinamt);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEOURACCTNBR)) {
            $criteria->add(VendorTableMap::COL_APVEOURACCTNBR, $this->apveouracctnbr);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEVENDDISC)) {
            $criteria->add(VendorTableMap::COL_APVEVENDDISC, $this->apvevenddisc);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEFOB)) {
            $criteria->add(VendorTableMap::COL_APVEFOB, $this->apvefob);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEROYLPCT)) {
            $criteria->add(VendorTableMap::COL_APVEROYLPCT, $this->apveroylpct);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEPRTPOEORU)) {
            $criteria->add(VendorTableMap::COL_APVEPRTPOEORU, $this->apveprtpoeoru);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVECOMRATE)) {
            $criteria->add(VendorTableMap::COL_APVECOMRATE, $this->apvecomrate);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEUSELANDONRCPT)) {
            $criteria->add(VendorTableMap::COL_APVEUSELANDONRCPT, $this->apveuselandonrcpt);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE1)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRWHSE1, $this->apvebuyrwhse1);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE1)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRCODE1, $this->apvebuyrcode1);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE2)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRWHSE2, $this->apvebuyrwhse2);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE2)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRCODE2, $this->apvebuyrcode2);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE3)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRWHSE3, $this->apvebuyrwhse3);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE3)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRCODE3, $this->apvebuyrcode3);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE4)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRWHSE4, $this->apvebuyrwhse4);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE4)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRCODE4, $this->apvebuyrcode4);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE5)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRWHSE5, $this->apvebuyrwhse5);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE5)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRCODE5, $this->apvebuyrcode5);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE6)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRWHSE6, $this->apvebuyrwhse6);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE6)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRCODE6, $this->apvebuyrcode6);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE7)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRWHSE7, $this->apvebuyrwhse7);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE7)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRCODE7, $this->apvebuyrcode7);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE8)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRWHSE8, $this->apvebuyrwhse8);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE8)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRCODE8, $this->apvebuyrcode8);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE9)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRWHSE9, $this->apvebuyrwhse9);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE9)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRCODE9, $this->apvebuyrcode9);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRWHSE10)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRWHSE10, $this->apvebuyrwhse10);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVEBUYRCODE10)) {
            $criteria->add(VendorTableMap::COL_APVEBUYRCODE10, $this->apvebuyrcode10);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVELANDCOST)) {
            $criteria->add(VendorTableMap::COL_APVELANDCOST, $this->apvelandcost);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVERELEASENBR)) {
            $criteria->add(VendorTableMap::COL_APVERELEASENBR, $this->apvereleasenbr);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVESCANSTARTPOS)) {
            $criteria->add(VendorTableMap::COL_APVESCANSTARTPOS, $this->apvescanstartpos);
        }
        if ($this->isColumnModified(VendorTableMap::COL_APVESCANLENGTH)) {
            $criteria->add(VendorTableMap::COL_APVESCANLENGTH, $this->apvescanlength);
        }
        if ($this->isColumnModified(VendorTableMap::COL_DATEUPDTD)) {
            $criteria->add(VendorTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(VendorTableMap::COL_TIMEUPDTD)) {
            $criteria->add(VendorTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(VendorTableMap::COL_DUMMY)) {
            $criteria->add(VendorTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildVendorQuery::create();
        $criteria->add(VendorTableMap::COL_APVEVENDID, $this->apvevendid);

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
        $validPk = null !== $this->getApvevendid();

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
        return $this->getApvevendid();
    }

    /**
     * Generic method to set the primary key (apvevendid column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setApvevendid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getApvevendid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Vendor (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setApvevendid($this->getApvevendid());
        $copyObj->setApvename($this->getApvename());
        $copyObj->setApveadr1($this->getApveadr1());
        $copyObj->setApveadr2($this->getApveadr2());
        $copyObj->setApveadr3($this->getApveadr3());
        $copyObj->setApvectry($this->getApvectry());
        $copyObj->setApvecity($this->getApvecity());
        $copyObj->setApvestat($this->getApvestat());
        $copyObj->setApvezipcode($this->getApvezipcode());
        $copyObj->setApvepayname($this->getApvepayname());
        $copyObj->setApvepayadr1($this->getApvepayadr1());
        $copyObj->setApvepayadr2($this->getApvepayadr2());
        $copyObj->setApvepayadr3($this->getApvepayadr3());
        $copyObj->setApvepayctry($this->getApvepayctry());
        $copyObj->setApvepaycity($this->getApvepaycity());
        $copyObj->setApvepaystat($this->getApvepaystat());
        $copyObj->setApvepayzipcode($this->getApvepayzipcode());
        $copyObj->setApvestatus($this->getApvestatus());
        $copyObj->setApvetakeexpireddisc($this->getApvetakeexpireddisc());
        $copyObj->setApveprinthts($this->getApveprinthts());
        $copyObj->setApvefabbin($this->getApvefabbin());
        $copyObj->setApvelmprntbulk($this->getApvelmprntbulk());
        $copyObj->setApveallowdropship($this->getApveallowdropship());
        $copyObj->setAptbtypecode($this->getAptbtypecode());
        $copyObj->setAptmtermcode($this->getAptmtermcode());
        $copyObj->setApvesviacode($this->getApvesviacode());
        $copyObj->setApveoldfob($this->getApveoldfob());
        $copyObj->setApveleaddays($this->getApveleaddays());
        $copyObj->setApveglacct($this->getApveglacct());
        $copyObj->setApve1099ssnbr($this->getApve1099ssnbr());
        $copyObj->setApveminordrcode($this->getApveminordrcode());
        $copyObj->setApveminordrvalue($this->getApveminordrvalue());
        $copyObj->setApvepurmtd($this->getApvepurmtd());
        $copyObj->setApvepomtd($this->getApvepomtd());
        $copyObj->setApveinvcmtd($this->getApveinvcmtd());
        $copyObj->setApveicntmtd($this->getApveicntmtd());
        $copyObj->setApvedateopen($this->getApvedateopen());
        $copyObj->setApvelastpurdate($this->getApvelastpurdate());
        $copyObj->setApvepur24mo01($this->getApvepur24mo01());
        $copyObj->setApvepo24mo01($this->getApvepo24mo01());
        $copyObj->setApveinvc24mo01($this->getApveinvc24mo01());
        $copyObj->setApveicnt24mo01($this->getApveicnt24mo01());
        $copyObj->setApvepur24mo02($this->getApvepur24mo02());
        $copyObj->setApvepo24mo02($this->getApvepo24mo02());
        $copyObj->setApveinvc24mo02($this->getApveinvc24mo02());
        $copyObj->setApveicnt24mo02($this->getApveicnt24mo02());
        $copyObj->setApvepur24mo03($this->getApvepur24mo03());
        $copyObj->setApvepo24mo03($this->getApvepo24mo03());
        $copyObj->setApveinvc24mo03($this->getApveinvc24mo03());
        $copyObj->setApveicnt24mo03($this->getApveicnt24mo03());
        $copyObj->setApvepur24mo04($this->getApvepur24mo04());
        $copyObj->setApvepo24mo04($this->getApvepo24mo04());
        $copyObj->setApveinvc24mo04($this->getApveinvc24mo04());
        $copyObj->setApveicnt24mo04($this->getApveicnt24mo04());
        $copyObj->setApvepur24mo05($this->getApvepur24mo05());
        $copyObj->setApvepo24mo05($this->getApvepo24mo05());
        $copyObj->setApveinvc24mo05($this->getApveinvc24mo05());
        $copyObj->setApveicnt24mo05($this->getApveicnt24mo05());
        $copyObj->setApvepur24mo06($this->getApvepur24mo06());
        $copyObj->setApvepo24mo06($this->getApvepo24mo06());
        $copyObj->setApveinvc24mo06($this->getApveinvc24mo06());
        $copyObj->setApveicnt24mo06($this->getApveicnt24mo06());
        $copyObj->setApvepur24mo07($this->getApvepur24mo07());
        $copyObj->setApvepo24mo07($this->getApvepo24mo07());
        $copyObj->setApveinvc24mo07($this->getApveinvc24mo07());
        $copyObj->setApveicnt24mo07($this->getApveicnt24mo07());
        $copyObj->setApvepur24mo08($this->getApvepur24mo08());
        $copyObj->setApvepo24mo08($this->getApvepo24mo08());
        $copyObj->setApveinvc24mo08($this->getApveinvc24mo08());
        $copyObj->setApveicnt24mo08($this->getApveicnt24mo08());
        $copyObj->setApvepur24mo09($this->getApvepur24mo09());
        $copyObj->setApvepo24mo09($this->getApvepo24mo09());
        $copyObj->setApveinvc24mo09($this->getApveinvc24mo09());
        $copyObj->setApveicnt24mo09($this->getApveicnt24mo09());
        $copyObj->setApvepur24mo10($this->getApvepur24mo10());
        $copyObj->setApvepo24mo10($this->getApvepo24mo10());
        $copyObj->setApveinvc24mo10($this->getApveinvc24mo10());
        $copyObj->setApveicnt24mo10($this->getApveicnt24mo10());
        $copyObj->setApvepur24mo11($this->getApvepur24mo11());
        $copyObj->setApvepo24mo11($this->getApvepo24mo11());
        $copyObj->setApveinvc24mo11($this->getApveinvc24mo11());
        $copyObj->setApveicnt24mo11($this->getApveicnt24mo11());
        $copyObj->setApvepur24mo12($this->getApvepur24mo12());
        $copyObj->setApvepo24mo12($this->getApvepo24mo12());
        $copyObj->setApveinvc24mo12($this->getApveinvc24mo12());
        $copyObj->setApveicnt24mo12($this->getApveicnt24mo12());
        $copyObj->setApvepur24mo13($this->getApvepur24mo13());
        $copyObj->setApvepo24mo13($this->getApvepo24mo13());
        $copyObj->setApveinvc24mo13($this->getApveinvc24mo13());
        $copyObj->setApveicnt24mo13($this->getApveicnt24mo13());
        $copyObj->setApvepur24mo14($this->getApvepur24mo14());
        $copyObj->setApvepo24mo14($this->getApvepo24mo14());
        $copyObj->setApveinvc24mo14($this->getApveinvc24mo14());
        $copyObj->setApveicnt24mo14($this->getApveicnt24mo14());
        $copyObj->setApvepur24mo15($this->getApvepur24mo15());
        $copyObj->setApvepo24mo15($this->getApvepo24mo15());
        $copyObj->setApveinvc24mo15($this->getApveinvc24mo15());
        $copyObj->setApveicnt24mo15($this->getApveicnt24mo15());
        $copyObj->setApvepur24mo16($this->getApvepur24mo16());
        $copyObj->setApvepo24mo16($this->getApvepo24mo16());
        $copyObj->setApveinvc24mo16($this->getApveinvc24mo16());
        $copyObj->setApveicnt24mo16($this->getApveicnt24mo16());
        $copyObj->setApvepur24mo17($this->getApvepur24mo17());
        $copyObj->setApvepo24mo17($this->getApvepo24mo17());
        $copyObj->setApveinvc24mo17($this->getApveinvc24mo17());
        $copyObj->setApveicnt24mo17($this->getApveicnt24mo17());
        $copyObj->setApvepur24mo18($this->getApvepur24mo18());
        $copyObj->setApvepo24mo18($this->getApvepo24mo18());
        $copyObj->setApveinvc24mo18($this->getApveinvc24mo18());
        $copyObj->setApveicnt24mo18($this->getApveicnt24mo18());
        $copyObj->setApvepur24mo19($this->getApvepur24mo19());
        $copyObj->setApvepo24mo19($this->getApvepo24mo19());
        $copyObj->setApveinvc24mo19($this->getApveinvc24mo19());
        $copyObj->setApveicnt24mo19($this->getApveicnt24mo19());
        $copyObj->setApvepur24mo20($this->getApvepur24mo20());
        $copyObj->setApvepo24mo20($this->getApvepo24mo20());
        $copyObj->setApveinvc24mo20($this->getApveinvc24mo20());
        $copyObj->setApveicnt24mo20($this->getApveicnt24mo20());
        $copyObj->setApvepur24mo21($this->getApvepur24mo21());
        $copyObj->setApvepo24mo21($this->getApvepo24mo21());
        $copyObj->setApveinvc24mo21($this->getApveinvc24mo21());
        $copyObj->setApveicnt24mo21($this->getApveicnt24mo21());
        $copyObj->setApvepur24mo22($this->getApvepur24mo22());
        $copyObj->setApvepo24mo22($this->getApvepo24mo22());
        $copyObj->setApveinvc24mo22($this->getApveinvc24mo22());
        $copyObj->setApveicnt24mo22($this->getApveicnt24mo22());
        $copyObj->setApvepur24mo23($this->getApvepur24mo23());
        $copyObj->setApvepo24mo23($this->getApvepo24mo23());
        $copyObj->setApveinvc24mo23($this->getApveinvc24mo23());
        $copyObj->setApveicnt24mo23($this->getApveicnt24mo23());
        $copyObj->setApvepur24mo24($this->getApvepur24mo24());
        $copyObj->setApvepo24mo24($this->getApvepo24mo24());
        $copyObj->setApveinvc24mo24($this->getApveinvc24mo24());
        $copyObj->setApveicnt24mo24($this->getApveicnt24mo24());
        $copyObj->setApvecrncy($this->getApvecrncy());
        $copyObj->setApvefrtinamt($this->getApvefrtinamt());
        $copyObj->setApveouracctnbr($this->getApveouracctnbr());
        $copyObj->setApvevenddisc($this->getApvevenddisc());
        $copyObj->setApvefob($this->getApvefob());
        $copyObj->setApveroylpct($this->getApveroylpct());
        $copyObj->setApveprtpoeoru($this->getApveprtpoeoru());
        $copyObj->setApvecomrate($this->getApvecomrate());
        $copyObj->setApveuselandonrcpt($this->getApveuselandonrcpt());
        $copyObj->setApvebuyrwhse1($this->getApvebuyrwhse1());
        $copyObj->setApvebuyrcode1($this->getApvebuyrcode1());
        $copyObj->setApvebuyrwhse2($this->getApvebuyrwhse2());
        $copyObj->setApvebuyrcode2($this->getApvebuyrcode2());
        $copyObj->setApvebuyrwhse3($this->getApvebuyrwhse3());
        $copyObj->setApvebuyrcode3($this->getApvebuyrcode3());
        $copyObj->setApvebuyrwhse4($this->getApvebuyrwhse4());
        $copyObj->setApvebuyrcode4($this->getApvebuyrcode4());
        $copyObj->setApvebuyrwhse5($this->getApvebuyrwhse5());
        $copyObj->setApvebuyrcode5($this->getApvebuyrcode5());
        $copyObj->setApvebuyrwhse6($this->getApvebuyrwhse6());
        $copyObj->setApvebuyrcode6($this->getApvebuyrcode6());
        $copyObj->setApvebuyrwhse7($this->getApvebuyrwhse7());
        $copyObj->setApvebuyrcode7($this->getApvebuyrcode7());
        $copyObj->setApvebuyrwhse8($this->getApvebuyrwhse8());
        $copyObj->setApvebuyrcode8($this->getApvebuyrcode8());
        $copyObj->setApvebuyrwhse9($this->getApvebuyrwhse9());
        $copyObj->setApvebuyrcode9($this->getApvebuyrcode9());
        $copyObj->setApvebuyrwhse10($this->getApvebuyrwhse10());
        $copyObj->setApvebuyrcode10($this->getApvebuyrcode10());
        $copyObj->setApvelandcost($this->getApvelandcost());
        $copyObj->setApvereleasenbr($this->getApvereleasenbr());
        $copyObj->setApvescanstartpos($this->getApvescanstartpos());
        $copyObj->setApvescanlength($this->getApvescanlength());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getVendorShipfroms() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVendorShipfrom($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPurchaseOrders() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPurchaseOrder($relObj->copy($deepCopy));
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
     * @return \Vendor Clone of current object.
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
     * Declares an association between this object and a ChildApTypeCode object.
     *
     * @param  ChildApTypeCode $v
     * @return $this|\Vendor The current object (for fluent API support)
     * @throws PropelException
     */
    public function setApTypeCode(ChildApTypeCode $v = null)
    {
        if ($v === null) {
            $this->setAptbtypecode(NULL);
        } else {
            $this->setAptbtypecode($v->getAptbtypecode());
        }

        $this->aApTypeCode = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildApTypeCode object, it will not be re-added.
        if ($v !== null) {
            $v->addVendor($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildApTypeCode object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildApTypeCode The associated ChildApTypeCode object.
     * @throws PropelException
     */
    public function getApTypeCode(ConnectionInterface $con = null)
    {
        if ($this->aApTypeCode === null && (($this->aptbtypecode !== "" && $this->aptbtypecode !== null))) {
            $this->aApTypeCode = ChildApTypeCodeQuery::create()->findPk($this->aptbtypecode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aApTypeCode->addVendors($this);
             */
        }

        return $this->aApTypeCode;
    }

    /**
     * Declares an association between this object and a ChildApTermsCode object.
     *
     * @param  ChildApTermsCode $v
     * @return $this|\Vendor The current object (for fluent API support)
     * @throws PropelException
     */
    public function setApTermsCode(ChildApTermsCode $v = null)
    {
        if ($v === null) {
            $this->setAptmtermcode(NULL);
        } else {
            $this->setAptmtermcode($v->getAptmtermcode());
        }

        $this->aApTermsCode = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildApTermsCode object, it will not be re-added.
        if ($v !== null) {
            $v->addVendor($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildApTermsCode object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildApTermsCode The associated ChildApTermsCode object.
     * @throws PropelException
     */
    public function getApTermsCode(ConnectionInterface $con = null)
    {
        if ($this->aApTermsCode === null && (($this->aptmtermcode !== "" && $this->aptmtermcode !== null))) {
            $this->aApTermsCode = ChildApTermsCodeQuery::create()->findPk($this->aptmtermcode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aApTermsCode->addVendors($this);
             */
        }

        return $this->aApTermsCode;
    }

    /**
     * Declares an association between this object and a ChildShipvia object.
     *
     * @param  ChildShipvia $v
     * @return $this|\Vendor The current object (for fluent API support)
     * @throws PropelException
     */
    public function setShipvia(ChildShipvia $v = null)
    {
        if ($v === null) {
            $this->setApvesviacode(NULL);
        } else {
            $this->setApvesviacode($v->getArtbshipvia());
        }

        $this->aShipvia = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildShipvia object, it will not be re-added.
        if ($v !== null) {
            $v->addVendor($this);
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
        if ($this->aShipvia === null && (($this->apvesviacode !== "" && $this->apvesviacode !== null))) {
            $this->aShipvia = ChildShipviaQuery::create()->findPk($this->apvesviacode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aShipvia->addVendors($this);
             */
        }

        return $this->aShipvia;
    }

    /**
     * Declares an association between this object and a ChildApBuyer object.
     *
     * @param  ChildApBuyer $v
     * @return $this|\Vendor The current object (for fluent API support)
     * @throws PropelException
     */
    public function setApBuyer(ChildApBuyer $v = null)
    {
        if ($v === null) {
            $this->setApvebuyrcode1(NULL);
        } else {
            $this->setApvebuyrcode1($v->getAptbbuyrcode());
        }

        $this->aApBuyer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildApBuyer object, it will not be re-added.
        if ($v !== null) {
            $v->addVendor($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildApBuyer object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildApBuyer The associated ChildApBuyer object.
     * @throws PropelException
     */
    public function getApBuyer(ConnectionInterface $con = null)
    {
        if ($this->aApBuyer === null && (($this->apvebuyrcode1 !== "" && $this->apvebuyrcode1 !== null))) {
            $this->aApBuyer = ChildApBuyerQuery::create()->findPk($this->apvebuyrcode1, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aApBuyer->addVendors($this);
             */
        }

        return $this->aApBuyer;
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
        if ('VendorShipfrom' == $relationName) {
            $this->initVendorShipfroms();
            return;
        }
        if ('PurchaseOrder' == $relationName) {
            $this->initPurchaseOrders();
            return;
        }
    }

    /**
     * Clears out the collVendorShipfroms collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addVendorShipfroms()
     */
    public function clearVendorShipfroms()
    {
        $this->collVendorShipfroms = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collVendorShipfroms collection loaded partially.
     */
    public function resetPartialVendorShipfroms($v = true)
    {
        $this->collVendorShipfromsPartial = $v;
    }

    /**
     * Initializes the collVendorShipfroms collection.
     *
     * By default this just sets the collVendorShipfroms collection to an empty array (like clearcollVendorShipfroms());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVendorShipfroms($overrideExisting = true)
    {
        if (null !== $this->collVendorShipfroms && !$overrideExisting) {
            return;
        }

        $collectionClassName = VendorShipfromTableMap::getTableMap()->getCollectionClassName();

        $this->collVendorShipfroms = new $collectionClassName;
        $this->collVendorShipfroms->setModel('\VendorShipfrom');
    }

    /**
     * Gets an array of ChildVendorShipfrom objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildVendor is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildVendorShipfrom[] List of ChildVendorShipfrom objects
     * @throws PropelException
     */
    public function getVendorShipfroms(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collVendorShipfromsPartial && !$this->isNew();
        if (null === $this->collVendorShipfroms || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVendorShipfroms) {
                // return empty collection
                $this->initVendorShipfroms();
            } else {
                $collVendorShipfroms = ChildVendorShipfromQuery::create(null, $criteria)
                    ->filterByVendor($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collVendorShipfromsPartial && count($collVendorShipfroms)) {
                        $this->initVendorShipfroms(false);

                        foreach ($collVendorShipfroms as $obj) {
                            if (false == $this->collVendorShipfroms->contains($obj)) {
                                $this->collVendorShipfroms->append($obj);
                            }
                        }

                        $this->collVendorShipfromsPartial = true;
                    }

                    return $collVendorShipfroms;
                }

                if ($partial && $this->collVendorShipfroms) {
                    foreach ($this->collVendorShipfroms as $obj) {
                        if ($obj->isNew()) {
                            $collVendorShipfroms[] = $obj;
                        }
                    }
                }

                $this->collVendorShipfroms = $collVendorShipfroms;
                $this->collVendorShipfromsPartial = false;
            }
        }

        return $this->collVendorShipfroms;
    }

    /**
     * Sets a collection of ChildVendorShipfrom objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $vendorShipfroms A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildVendor The current object (for fluent API support)
     */
    public function setVendorShipfroms(Collection $vendorShipfroms, ConnectionInterface $con = null)
    {
        /** @var ChildVendorShipfrom[] $vendorShipfromsToDelete */
        $vendorShipfromsToDelete = $this->getVendorShipfroms(new Criteria(), $con)->diff($vendorShipfroms);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->vendorShipfromsScheduledForDeletion = clone $vendorShipfromsToDelete;

        foreach ($vendorShipfromsToDelete as $vendorShipfromRemoved) {
            $vendorShipfromRemoved->setVendor(null);
        }

        $this->collVendorShipfroms = null;
        foreach ($vendorShipfroms as $vendorShipfrom) {
            $this->addVendorShipfrom($vendorShipfrom);
        }

        $this->collVendorShipfroms = $vendorShipfroms;
        $this->collVendorShipfromsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related VendorShipfrom objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related VendorShipfrom objects.
     * @throws PropelException
     */
    public function countVendorShipfroms(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collVendorShipfromsPartial && !$this->isNew();
        if (null === $this->collVendorShipfroms || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVendorShipfroms) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVendorShipfroms());
            }

            $query = ChildVendorShipfromQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVendor($this)
                ->count($con);
        }

        return count($this->collVendorShipfroms);
    }

    /**
     * Method called to associate a ChildVendorShipfrom object to this object
     * through the ChildVendorShipfrom foreign key attribute.
     *
     * @param  ChildVendorShipfrom $l ChildVendorShipfrom
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function addVendorShipfrom(ChildVendorShipfrom $l)
    {
        if ($this->collVendorShipfroms === null) {
            $this->initVendorShipfroms();
            $this->collVendorShipfromsPartial = true;
        }

        if (!$this->collVendorShipfroms->contains($l)) {
            $this->doAddVendorShipfrom($l);

            if ($this->vendorShipfromsScheduledForDeletion and $this->vendorShipfromsScheduledForDeletion->contains($l)) {
                $this->vendorShipfromsScheduledForDeletion->remove($this->vendorShipfromsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildVendorShipfrom $vendorShipfrom The ChildVendorShipfrom object to add.
     */
    protected function doAddVendorShipfrom(ChildVendorShipfrom $vendorShipfrom)
    {
        $this->collVendorShipfroms[]= $vendorShipfrom;
        $vendorShipfrom->setVendor($this);
    }

    /**
     * @param  ChildVendorShipfrom $vendorShipfrom The ChildVendorShipfrom object to remove.
     * @return $this|ChildVendor The current object (for fluent API support)
     */
    public function removeVendorShipfrom(ChildVendorShipfrom $vendorShipfrom)
    {
        if ($this->getVendorShipfroms()->contains($vendorShipfrom)) {
            $pos = $this->collVendorShipfroms->search($vendorShipfrom);
            $this->collVendorShipfroms->remove($pos);
            if (null === $this->vendorShipfromsScheduledForDeletion) {
                $this->vendorShipfromsScheduledForDeletion = clone $this->collVendorShipfroms;
                $this->vendorShipfromsScheduledForDeletion->clear();
            }
            $this->vendorShipfromsScheduledForDeletion[]= clone $vendorShipfrom;
            $vendorShipfrom->setVendor(null);
        }

        return $this;
    }

    /**
     * Clears out the collPurchaseOrders collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addPurchaseOrders()
     */
    public function clearPurchaseOrders()
    {
        $this->collPurchaseOrders = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collPurchaseOrders collection loaded partially.
     */
    public function resetPartialPurchaseOrders($v = true)
    {
        $this->collPurchaseOrdersPartial = $v;
    }

    /**
     * Initializes the collPurchaseOrders collection.
     *
     * By default this just sets the collPurchaseOrders collection to an empty array (like clearcollPurchaseOrders());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPurchaseOrders($overrideExisting = true)
    {
        if (null !== $this->collPurchaseOrders && !$overrideExisting) {
            return;
        }

        $collectionClassName = PurchaseOrderTableMap::getTableMap()->getCollectionClassName();

        $this->collPurchaseOrders = new $collectionClassName;
        $this->collPurchaseOrders->setModel('\PurchaseOrder');
    }

    /**
     * Gets an array of ChildPurchaseOrder objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildVendor is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildPurchaseOrder[] List of ChildPurchaseOrder objects
     * @throws PropelException
     */
    public function getPurchaseOrders(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrdersPartial && !$this->isNew();
        if (null === $this->collPurchaseOrders || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrders) {
                // return empty collection
                $this->initPurchaseOrders();
            } else {
                $collPurchaseOrders = ChildPurchaseOrderQuery::create(null, $criteria)
                    ->filterByVendor($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collPurchaseOrdersPartial && count($collPurchaseOrders)) {
                        $this->initPurchaseOrders(false);

                        foreach ($collPurchaseOrders as $obj) {
                            if (false == $this->collPurchaseOrders->contains($obj)) {
                                $this->collPurchaseOrders->append($obj);
                            }
                        }

                        $this->collPurchaseOrdersPartial = true;
                    }

                    return $collPurchaseOrders;
                }

                if ($partial && $this->collPurchaseOrders) {
                    foreach ($this->collPurchaseOrders as $obj) {
                        if ($obj->isNew()) {
                            $collPurchaseOrders[] = $obj;
                        }
                    }
                }

                $this->collPurchaseOrders = $collPurchaseOrders;
                $this->collPurchaseOrdersPartial = false;
            }
        }

        return $this->collPurchaseOrders;
    }

    /**
     * Sets a collection of ChildPurchaseOrder objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $purchaseOrders A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildVendor The current object (for fluent API support)
     */
    public function setPurchaseOrders(Collection $purchaseOrders, ConnectionInterface $con = null)
    {
        /** @var ChildPurchaseOrder[] $purchaseOrdersToDelete */
        $purchaseOrdersToDelete = $this->getPurchaseOrders(new Criteria(), $con)->diff($purchaseOrders);


        $this->purchaseOrdersScheduledForDeletion = $purchaseOrdersToDelete;

        foreach ($purchaseOrdersToDelete as $purchaseOrderRemoved) {
            $purchaseOrderRemoved->setVendor(null);
        }

        $this->collPurchaseOrders = null;
        foreach ($purchaseOrders as $purchaseOrder) {
            $this->addPurchaseOrder($purchaseOrder);
        }

        $this->collPurchaseOrders = $purchaseOrders;
        $this->collPurchaseOrdersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related PurchaseOrder objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related PurchaseOrder objects.
     * @throws PropelException
     */
    public function countPurchaseOrders(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collPurchaseOrdersPartial && !$this->isNew();
        if (null === $this->collPurchaseOrders || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPurchaseOrders) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPurchaseOrders());
            }

            $query = ChildPurchaseOrderQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVendor($this)
                ->count($con);
        }

        return count($this->collPurchaseOrders);
    }

    /**
     * Method called to associate a ChildPurchaseOrder object to this object
     * through the ChildPurchaseOrder foreign key attribute.
     *
     * @param  ChildPurchaseOrder $l ChildPurchaseOrder
     * @return $this|\Vendor The current object (for fluent API support)
     */
    public function addPurchaseOrder(ChildPurchaseOrder $l)
    {
        if ($this->collPurchaseOrders === null) {
            $this->initPurchaseOrders();
            $this->collPurchaseOrdersPartial = true;
        }

        if (!$this->collPurchaseOrders->contains($l)) {
            $this->doAddPurchaseOrder($l);

            if ($this->purchaseOrdersScheduledForDeletion and $this->purchaseOrdersScheduledForDeletion->contains($l)) {
                $this->purchaseOrdersScheduledForDeletion->remove($this->purchaseOrdersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildPurchaseOrder $purchaseOrder The ChildPurchaseOrder object to add.
     */
    protected function doAddPurchaseOrder(ChildPurchaseOrder $purchaseOrder)
    {
        $this->collPurchaseOrders[]= $purchaseOrder;
        $purchaseOrder->setVendor($this);
    }

    /**
     * @param  ChildPurchaseOrder $purchaseOrder The ChildPurchaseOrder object to remove.
     * @return $this|ChildVendor The current object (for fluent API support)
     */
    public function removePurchaseOrder(ChildPurchaseOrder $purchaseOrder)
    {
        if ($this->getPurchaseOrders()->contains($purchaseOrder)) {
            $pos = $this->collPurchaseOrders->search($purchaseOrder);
            $this->collPurchaseOrders->remove($pos);
            if (null === $this->purchaseOrdersScheduledForDeletion) {
                $this->purchaseOrdersScheduledForDeletion = clone $this->collPurchaseOrders;
                $this->purchaseOrdersScheduledForDeletion->clear();
            }
            $this->purchaseOrdersScheduledForDeletion[]= $purchaseOrder;
            $purchaseOrder->setVendor(null);
        }

        return $this;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aApTypeCode) {
            $this->aApTypeCode->removeVendor($this);
        }
        if (null !== $this->aApTermsCode) {
            $this->aApTermsCode->removeVendor($this);
        }
        if (null !== $this->aShipvia) {
            $this->aShipvia->removeVendor($this);
        }
        if (null !== $this->aApBuyer) {
            $this->aApBuyer->removeVendor($this);
        }
        $this->apvevendid = null;
        $this->apvename = null;
        $this->apveadr1 = null;
        $this->apveadr2 = null;
        $this->apveadr3 = null;
        $this->apvectry = null;
        $this->apvecity = null;
        $this->apvestat = null;
        $this->apvezipcode = null;
        $this->apvepayname = null;
        $this->apvepayadr1 = null;
        $this->apvepayadr2 = null;
        $this->apvepayadr3 = null;
        $this->apvepayctry = null;
        $this->apvepaycity = null;
        $this->apvepaystat = null;
        $this->apvepayzipcode = null;
        $this->apvestatus = null;
        $this->apvetakeexpireddisc = null;
        $this->apveprinthts = null;
        $this->apvefabbin = null;
        $this->apvelmprntbulk = null;
        $this->apveallowdropship = null;
        $this->aptbtypecode = null;
        $this->aptmtermcode = null;
        $this->apvesviacode = null;
        $this->apveoldfob = null;
        $this->apveleaddays = null;
        $this->apveglacct = null;
        $this->apve1099ssnbr = null;
        $this->apveminordrcode = null;
        $this->apveminordrvalue = null;
        $this->apvepurmtd = null;
        $this->apvepomtd = null;
        $this->apveinvcmtd = null;
        $this->apveicntmtd = null;
        $this->apvedateopen = null;
        $this->apvelastpurdate = null;
        $this->apvepur24mo01 = null;
        $this->apvepo24mo01 = null;
        $this->apveinvc24mo01 = null;
        $this->apveicnt24mo01 = null;
        $this->apvepur24mo02 = null;
        $this->apvepo24mo02 = null;
        $this->apveinvc24mo02 = null;
        $this->apveicnt24mo02 = null;
        $this->apvepur24mo03 = null;
        $this->apvepo24mo03 = null;
        $this->apveinvc24mo03 = null;
        $this->apveicnt24mo03 = null;
        $this->apvepur24mo04 = null;
        $this->apvepo24mo04 = null;
        $this->apveinvc24mo04 = null;
        $this->apveicnt24mo04 = null;
        $this->apvepur24mo05 = null;
        $this->apvepo24mo05 = null;
        $this->apveinvc24mo05 = null;
        $this->apveicnt24mo05 = null;
        $this->apvepur24mo06 = null;
        $this->apvepo24mo06 = null;
        $this->apveinvc24mo06 = null;
        $this->apveicnt24mo06 = null;
        $this->apvepur24mo07 = null;
        $this->apvepo24mo07 = null;
        $this->apveinvc24mo07 = null;
        $this->apveicnt24mo07 = null;
        $this->apvepur24mo08 = null;
        $this->apvepo24mo08 = null;
        $this->apveinvc24mo08 = null;
        $this->apveicnt24mo08 = null;
        $this->apvepur24mo09 = null;
        $this->apvepo24mo09 = null;
        $this->apveinvc24mo09 = null;
        $this->apveicnt24mo09 = null;
        $this->apvepur24mo10 = null;
        $this->apvepo24mo10 = null;
        $this->apveinvc24mo10 = null;
        $this->apveicnt24mo10 = null;
        $this->apvepur24mo11 = null;
        $this->apvepo24mo11 = null;
        $this->apveinvc24mo11 = null;
        $this->apveicnt24mo11 = null;
        $this->apvepur24mo12 = null;
        $this->apvepo24mo12 = null;
        $this->apveinvc24mo12 = null;
        $this->apveicnt24mo12 = null;
        $this->apvepur24mo13 = null;
        $this->apvepo24mo13 = null;
        $this->apveinvc24mo13 = null;
        $this->apveicnt24mo13 = null;
        $this->apvepur24mo14 = null;
        $this->apvepo24mo14 = null;
        $this->apveinvc24mo14 = null;
        $this->apveicnt24mo14 = null;
        $this->apvepur24mo15 = null;
        $this->apvepo24mo15 = null;
        $this->apveinvc24mo15 = null;
        $this->apveicnt24mo15 = null;
        $this->apvepur24mo16 = null;
        $this->apvepo24mo16 = null;
        $this->apveinvc24mo16 = null;
        $this->apveicnt24mo16 = null;
        $this->apvepur24mo17 = null;
        $this->apvepo24mo17 = null;
        $this->apveinvc24mo17 = null;
        $this->apveicnt24mo17 = null;
        $this->apvepur24mo18 = null;
        $this->apvepo24mo18 = null;
        $this->apveinvc24mo18 = null;
        $this->apveicnt24mo18 = null;
        $this->apvepur24mo19 = null;
        $this->apvepo24mo19 = null;
        $this->apveinvc24mo19 = null;
        $this->apveicnt24mo19 = null;
        $this->apvepur24mo20 = null;
        $this->apvepo24mo20 = null;
        $this->apveinvc24mo20 = null;
        $this->apveicnt24mo20 = null;
        $this->apvepur24mo21 = null;
        $this->apvepo24mo21 = null;
        $this->apveinvc24mo21 = null;
        $this->apveicnt24mo21 = null;
        $this->apvepur24mo22 = null;
        $this->apvepo24mo22 = null;
        $this->apveinvc24mo22 = null;
        $this->apveicnt24mo22 = null;
        $this->apvepur24mo23 = null;
        $this->apvepo24mo23 = null;
        $this->apveinvc24mo23 = null;
        $this->apveicnt24mo23 = null;
        $this->apvepur24mo24 = null;
        $this->apvepo24mo24 = null;
        $this->apveinvc24mo24 = null;
        $this->apveicnt24mo24 = null;
        $this->apvecrncy = null;
        $this->apvefrtinamt = null;
        $this->apveouracctnbr = null;
        $this->apvevenddisc = null;
        $this->apvefob = null;
        $this->apveroylpct = null;
        $this->apveprtpoeoru = null;
        $this->apvecomrate = null;
        $this->apveuselandonrcpt = null;
        $this->apvebuyrwhse1 = null;
        $this->apvebuyrcode1 = null;
        $this->apvebuyrwhse2 = null;
        $this->apvebuyrcode2 = null;
        $this->apvebuyrwhse3 = null;
        $this->apvebuyrcode3 = null;
        $this->apvebuyrwhse4 = null;
        $this->apvebuyrcode4 = null;
        $this->apvebuyrwhse5 = null;
        $this->apvebuyrcode5 = null;
        $this->apvebuyrwhse6 = null;
        $this->apvebuyrcode6 = null;
        $this->apvebuyrwhse7 = null;
        $this->apvebuyrcode7 = null;
        $this->apvebuyrwhse8 = null;
        $this->apvebuyrcode8 = null;
        $this->apvebuyrwhse9 = null;
        $this->apvebuyrcode9 = null;
        $this->apvebuyrwhse10 = null;
        $this->apvebuyrcode10 = null;
        $this->apvelandcost = null;
        $this->apvereleasenbr = null;
        $this->apvescanstartpos = null;
        $this->apvescanlength = null;
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
            if ($this->collVendorShipfroms) {
                foreach ($this->collVendorShipfroms as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPurchaseOrders) {
                foreach ($this->collPurchaseOrders as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collVendorShipfroms = null;
        $this->collPurchaseOrders = null;
        $this->aApTypeCode = null;
        $this->aApTermsCode = null;
        $this->aShipvia = null;
        $this->aApBuyer = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(VendorTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            return parent::preSave($con);
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
            parent::postSave($con);
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
            return parent::preInsert($con);
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
            parent::postInsert($con);
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
            return parent::preUpdate($con);
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
            parent::postUpdate($con);
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
            return parent::preDelete($con);
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
            parent::postDelete($con);
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
