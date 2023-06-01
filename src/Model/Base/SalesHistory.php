<?php

namespace Base;

use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \CustomerShipto as ChildCustomerShipto;
use \CustomerShiptoQuery as ChildCustomerShiptoQuery;
use \SalesHistory as ChildSalesHistory;
use \SalesHistoryDetail as ChildSalesHistoryDetail;
use \SalesHistoryDetailQuery as ChildSalesHistoryDetailQuery;
use \SalesHistoryLotserial as ChildSalesHistoryLotserial;
use \SalesHistoryLotserialQuery as ChildSalesHistoryLotserialQuery;
use \SalesHistoryQuery as ChildSalesHistoryQuery;
use \SalesOrderShipment as ChildSalesOrderShipment;
use \SalesOrderShipmentQuery as ChildSalesOrderShipmentQuery;
use \Exception;
use \PDO;
use Map\SalesHistoryDetailTableMap;
use Map\SalesHistoryLotserialTableMap;
use Map\SalesHistoryTableMap;
use Map\SalesOrderShipmentTableMap;
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
 * Base class that represents a row from the 'so_head_hist' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class SalesHistory implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\SalesHistoryTableMap';


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
     * The value for the oehhnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oehhnbr;

    /**
     * The value for the oehhyear field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhyear;

    /**
     * The value for the oehhstat field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhstat;

    /**
     * The value for the oehhhold field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhhold;

    /**
     * The value for the arcucustid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the arstshipid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arstshipid;

    /**
     * The value for the oehhstname field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhstname;

    /**
     * The value for the oehhstlastname field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhstlastname;

    /**
     * The value for the oehhstfirstname field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhstfirstname;

    /**
     * The value for the oehhstadr1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhstadr1;

    /**
     * The value for the oehhstadr2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhstadr2;

    /**
     * The value for the oehhstadr3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhstadr3;

    /**
     * The value for the oehhstctry field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhstctry;

    /**
     * The value for the oehhstcity field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhstcity;

    /**
     * The value for the oehhststat field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhststat;

    /**
     * The value for the oehhstzipcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhstzipcode;

    /**
     * The value for the oehhcustpo field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhcustpo;

    /**
     * The value for the oehhordrdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhordrdate;

    /**
     * The value for the artmtermcd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artmtermcd;

    /**
     * The value for the artbshipvia field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbshipvia;

    /**
     * The value for the arininvnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arininvnbr;

    /**
     * The value for the oehhinvdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhinvdate;

    /**
     * The value for the oehhglpd field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oehhglpd;

    /**
     * The value for the arspsaleper1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arspsaleper1;

    /**
     * The value for the oehhsp1pct field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhsp1pct;

    /**
     * The value for the arspsaleper2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arspsaleper2;

    /**
     * The value for the oehhsp2pct field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhsp2pct;

    /**
     * The value for the arspsaleper3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $arspsaleper3;

    /**
     * The value for the oehhsp3pct field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhsp3pct;

    /**
     * The value for the oehhcntrnbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oehhcntrnbr;

    /**
     * The value for the oehhwibatch field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oehhwibatch;

    /**
     * The value for the oehhdroprelhold field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhdroprelhold;

    /**
     * The value for the oehhtaxsub field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhtaxsub;

    /**
     * The value for the oehhnontaxsub field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhnontaxsub;

    /**
     * The value for the oehhtaxtot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhtaxtot;

    /**
     * The value for the oehhfrttot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhfrttot;

    /**
     * The value for the oehhmisctot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhmisctot;

    /**
     * The value for the oehhordrtot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhordrtot;

    /**
     * The value for the oehhcosttot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhcosttot;

    /**
     * The value for the oehhspcommlock field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhspcommlock;

    /**
     * The value for the oehhtakendate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhtakendate;

    /**
     * The value for the oehhtakentime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhtakentime;

    /**
     * The value for the oehhpickdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhpickdate;

    /**
     * The value for the oehhpicktime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhpicktime;

    /**
     * The value for the oehhpackdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhpackdate;

    /**
     * The value for the oehhpacktime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhpacktime;

    /**
     * The value for the oehhverifydate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhverifydate;

    /**
     * The value for the oehhverifytime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhverifytime;

    /**
     * The value for the oehhcreditmemo field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhcreditmemo;

    /**
     * The value for the oehhbookedyn field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhbookedyn;

    /**
     * The value for the intbwhseorig field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhseorig;

    /**
     * The value for the oehhbtstat field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhbtstat;

    /**
     * The value for the oehhshipcomp field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhshipcomp;

    /**
     * The value for the oehhcwoflag field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhcwoflag;

    /**
     * The value for the oehhdivision field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhdivision;

    /**
     * The value for the oehhtakencode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhtakencode;

    /**
     * The value for the oehhpickcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhpickcode;

    /**
     * The value for the oehhpackcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhpackcode;

    /**
     * The value for the oehhverifycode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhverifycode;

    /**
     * The value for the oehhtotdisc field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhtotdisc;

    /**
     * The value for the oehhedirefnbrqual field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhedirefnbrqual;

    /**
     * The value for the oehhusercode1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhusercode1;

    /**
     * The value for the oehhusercode2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhusercode2;

    /**
     * The value for the oehhusercode3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhusercode3;

    /**
     * The value for the oehhusercode4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhusercode4;

    /**
     * The value for the oehhexchctry field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhexchctry;

    /**
     * The value for the oehhexchrate field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhexchrate;

    /**
     * The value for the oehhwghttot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhwghttot;

    /**
     * The value for the oehhwghtoride field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhwghtoride;

    /**
     * The value for the oehhccinfo field.
     *
     * Note: this column has a database default value of: 'B'
     * @var        string
     */
    protected $oehhccinfo;

    /**
     * The value for the oehhboxcount field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oehhboxcount;

    /**
     * The value for the oehhrqstdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhrqstdate;

    /**
     * The value for the oehhcancdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhcancdate;

    /**
     * The value for the oehhcrntuser field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhcrntuser;

    /**
     * The value for the oehhreleasenbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhreleasenbr;

    /**
     * The value for the intbwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the oehhbordbuilddate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhbordbuilddate;

    /**
     * The value for the oehhdeptcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhdeptcode;

    /**
     * The value for the oehhfrtinentered field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhfrtinentered;

    /**
     * The value for the oehhdropshipentered field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhdropshipentered;

    /**
     * The value for the oehherflag field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehherflag;

    /**
     * The value for the oehhfrtin field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhfrtin;

    /**
     * The value for the oehhdropship field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdropship;

    /**
     * The value for the oehhminorder field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhminorder;

    /**
     * The value for the oehhcontractterms field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhcontractterms;

    /**
     * The value for the oehhdropshipbilled field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhdropshipbilled;

    /**
     * The value for the oehhordtyp field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhordtyp;

    /**
     * The value for the oehhtracknbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhtracknbr;

    /**
     * The value for the oehhsource field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhsource;

    /**
     * The value for the oehhccaprv field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhccaprv;

    /**
     * The value for the oehhpickfmattype field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhpickfmattype;

    /**
     * The value for the oehhinvcfmattype field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhinvcfmattype;

    /**
     * The value for the oehhcashamt field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhcashamt;

    /**
     * The value for the oehhcheckamt field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhcheckamt;

    /**
     * The value for the oehhchecknbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhchecknbr;

    /**
     * The value for the oehhdepositamt field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdepositamt;

    /**
     * The value for the oehhdepositnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhdepositnbr;

    /**
     * The value for the oehhccamt field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhccamt;

    /**
     * The value for the oehhotaxsub field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhotaxsub;

    /**
     * The value for the oehhonontaxsub field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhonontaxsub;

    /**
     * The value for the oehhotaxtot field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhotaxtot;

    /**
     * The value for the oehhoordrtot field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhoordrtot;

    /**
     * The value for the oehhpickprintdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhpickprintdate;

    /**
     * The value for the oehhpickprinttime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhpickprinttime;

    /**
     * The value for the oehhcont field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhcont;

    /**
     * The value for the oehhcontteleintl field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhcontteleintl;

    /**
     * The value for the oehhconttelenbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhconttelenbr;

    /**
     * The value for the oehhcontteleext field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhcontteleext;

    /**
     * The value for the oehhcontfaxintl field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhcontfaxintl;

    /**
     * The value for the oehhcontfaxnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhcontfaxnbr;

    /**
     * The value for the oehhshipacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhshipacct;

    /**
     * The value for the oehhchgdue field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhchgdue;

    /**
     * The value for the oehhaddlpricdisc field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhaddlpricdisc;

    /**
     * The value for the oehhallship field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhallship;

    /**
     * The value for the oehhqtyorderamt field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhqtyorderamt;

    /**
     * The value for the oehhcreditapplied field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhcreditapplied;

    /**
     * The value for the oehhinvcprintdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhinvcprintdate;

    /**
     * The value for the oehhinvcprinttime field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhinvcprinttime;

    /**
     * The value for the oehhdiscfrt field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdiscfrt;

    /**
     * The value for the oehhorideshipcomp field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhorideshipcomp;

    /**
     * The value for the oehhcontemail field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhcontemail;

    /**
     * The value for the oehhmanualfrt field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhmanualfrt;

    /**
     * The value for the oehhinternalfrt field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhinternalfrt;

    /**
     * The value for the oehhfrtcost field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhfrtcost;

    /**
     * The value for the oehhroute field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhroute;

    /**
     * The value for the oehhrouteseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oehhrouteseq;

    /**
     * The value for the oehhfrttaxcode1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhfrttaxcode1;

    /**
     * The value for the oehhfrttaxamt1 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhfrttaxamt1;

    /**
     * The value for the oehhfrttaxcode2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhfrttaxcode2;

    /**
     * The value for the oehhfrttaxamt2 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhfrttaxamt2;

    /**
     * The value for the oehhfrttaxcode3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhfrttaxcode3;

    /**
     * The value for the oehhfrttaxamt3 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhfrttaxamt3;

    /**
     * The value for the oehhfrttaxcode4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhfrttaxcode4;

    /**
     * The value for the oehhfrttaxamt4 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhfrttaxamt4;

    /**
     * The value for the oehhfrttaxcode5 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhfrttaxcode5;

    /**
     * The value for the oehhfrttaxamt5 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhfrttaxamt5;

    /**
     * The value for the oehhedi855sent field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhedi855sent;

    /**
     * The value for the oehhfrt3rdparty field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhfrt3rdparty;

    /**
     * The value for the oehhfob field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhfob;

    /**
     * The value for the oehhconfirmimagyn field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhconfirmimagyn;

    /**
     * The value for the oehhindustconform field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhindustconform;

    /**
     * The value for the oehhcstkconsign field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhcstkconsign;

    /**
     * The value for the oehhlmdelaycapsent field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhlmdelaycapsent;

    /**
     * The value for the oehhmfgid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhmfgid;

    /**
     * The value for the oehhstoreid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhstoreid;

    /**
     * The value for the oehhpickqueue field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oehhpickqueue;

    /**
     * The value for the oehharrvdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehharrvdate;

    /**
     * The value for the oehhsurchgstat field.
     *
     * Note: this column has a database default value of: 'C'
     * @var        string
     */
    protected $oehhsurchgstat;

    /**
     * The value for the oehhfrtgrup field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhfrtgrup;

    /**
     * The value for the oehhcommoride field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhcommoride;

    /**
     * The value for the oehhchrgsplt field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhchrgsplt;

    /**
     * The value for the oehhacccaprv field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhacccaprv;

    /**
     * The value for the oehhorigordrnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhorigordrnbr;

    /**
     * The value for the oehhpostdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhpostdate;

    /**
     * The value for the oehhdiscdate1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhdiscdate1;

    /**
     * The value for the oehhdiscpct1 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdiscpct1;

    /**
     * The value for the oehhduedate1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhduedate1;

    /**
     * The value for the oehhdueamt1 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdueamt1;

    /**
     * The value for the oehhduepct1 field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhduepct1;

    /**
     * The value for the oehhdiscdate2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhdiscdate2;

    /**
     * The value for the oehhdiscpct2 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdiscpct2;

    /**
     * The value for the oehhduedate2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhduedate2;

    /**
     * The value for the oehhdueamt2 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdueamt2;

    /**
     * The value for the oehhduepct2 field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhduepct2;

    /**
     * The value for the oehhdiscdate3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhdiscdate3;

    /**
     * The value for the oehhdiscpct3 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdiscpct3;

    /**
     * The value for the oehhduedate3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhduedate3;

    /**
     * The value for the oehhdueamt3 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdueamt3;

    /**
     * The value for the oehhduepct3 field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhduepct3;

    /**
     * The value for the oehhdiscdate4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhdiscdate4;

    /**
     * The value for the oehhdiscpct4 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdiscpct4;

    /**
     * The value for the oehhduedate4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhduedate4;

    /**
     * The value for the oehhdueamt4 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdueamt4;

    /**
     * The value for the oehhduepct4 field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhduepct4;

    /**
     * The value for the oehhdiscdate5 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhdiscdate5;

    /**
     * The value for the oehhdiscpct5 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdiscpct5;

    /**
     * The value for the oehhduedate5 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhduedate5;

    /**
     * The value for the oehhdueamt5 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdueamt5;

    /**
     * The value for the oehhduepct5 field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhduepct5;

    /**
     * The value for the oehhdiscdate6 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhdiscdate6;

    /**
     * The value for the oehhdiscpct6 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdiscpct6;

    /**
     * The value for the oehhduedate6 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhduedate6;

    /**
     * The value for the oehhdueamt6 field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oehhdueamt6;

    /**
     * The value for the oehhduepct6 field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oehhduepct6;

    /**
     * The value for the oehhrefnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhrefnbr;

    /**
     * The value for the oehhacprognbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhacprognbr;

    /**
     * The value for the oehhacprogexpdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oehhacprogexpdate;

    /**
     * The value for the dateupdtd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $dateupdtd;

    /**
     * The value for the timeupdtd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $timeupdtd;

    /**
     * The value for the dummy field.
     *
     * Note: this column has a database default value of: 'P'
     * @var        string
     */
    protected $dummy;

    /**
     * @var        ChildCustomer
     */
    protected $aCustomer;

    /**
     * @var        ChildCustomerShipto
     */
    protected $aCustomerShipto;

    /**
     * @var        ObjectCollection|ChildSalesHistoryDetail[] Collection to store aggregation of ChildSalesHistoryDetail objects.
     */
    protected $collSalesHistoryDetails;
    protected $collSalesHistoryDetailsPartial;

    /**
     * @var        ObjectCollection|ChildSalesOrderShipment[] Collection to store aggregation of ChildSalesOrderShipment objects.
     */
    protected $collSalesOrderShipments;
    protected $collSalesOrderShipmentsPartial;

    /**
     * @var        ObjectCollection|ChildSalesHistoryLotserial[] Collection to store aggregation of ChildSalesHistoryLotserial objects.
     */
    protected $collSalesHistoryLotserials;
    protected $collSalesHistoryLotserialsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesHistoryDetail[]
     */
    protected $salesHistoryDetailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesOrderShipment[]
     */
    protected $salesOrderShipmentsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesHistoryLotserial[]
     */
    protected $salesHistoryLotserialsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->oehhnbr = 0;
        $this->oehhyear = '';
        $this->oehhstat = 'N';
        $this->oehhhold = 'N';
        $this->arcucustid = '';
        $this->arstshipid = '';
        $this->oehhstname = '';
        $this->oehhstlastname = '';
        $this->oehhstfirstname = '';
        $this->oehhstadr1 = '';
        $this->oehhstadr2 = '';
        $this->oehhstadr3 = '';
        $this->oehhstctry = '';
        $this->oehhstcity = '';
        $this->oehhststat = '';
        $this->oehhstzipcode = '';
        $this->oehhcustpo = '';
        $this->oehhordrdate = '';
        $this->artmtermcd = '';
        $this->artbshipvia = '';
        $this->arininvnbr = '';
        $this->oehhinvdate = '';
        $this->oehhglpd = 0;
        $this->arspsaleper1 = '';
        $this->oehhsp1pct = '0.00';
        $this->arspsaleper2 = '';
        $this->oehhsp2pct = '0.00';
        $this->arspsaleper3 = '';
        $this->oehhsp3pct = '0.00';
        $this->oehhcntrnbr = 0;
        $this->oehhwibatch = 0;
        $this->oehhdroprelhold = '';
        $this->oehhtaxsub = '0.0000000';
        $this->oehhnontaxsub = '0.0000000';
        $this->oehhtaxtot = '0.0000000';
        $this->oehhfrttot = '0.0000000';
        $this->oehhmisctot = '0.0000000';
        $this->oehhordrtot = '0.0000000';
        $this->oehhcosttot = '0.0000000';
        $this->oehhspcommlock = 'N';
        $this->oehhtakendate = '';
        $this->oehhtakentime = '';
        $this->oehhpickdate = '';
        $this->oehhpicktime = '';
        $this->oehhpackdate = '';
        $this->oehhpacktime = '';
        $this->oehhverifydate = '';
        $this->oehhverifytime = '';
        $this->oehhcreditmemo = '';
        $this->oehhbookedyn = '';
        $this->intbwhseorig = '';
        $this->oehhbtstat = '';
        $this->oehhshipcomp = 'N';
        $this->oehhcwoflag = '';
        $this->oehhdivision = '';
        $this->oehhtakencode = '';
        $this->oehhpickcode = '';
        $this->oehhpackcode = '';
        $this->oehhverifycode = '';
        $this->oehhtotdisc = '0.00';
        $this->oehhedirefnbrqual = '';
        $this->oehhusercode1 = '';
        $this->oehhusercode2 = '';
        $this->oehhusercode3 = '';
        $this->oehhusercode4 = '';
        $this->oehhexchctry = '';
        $this->oehhexchrate = '0.0000000';
        $this->oehhwghttot = '0.0000000';
        $this->oehhwghtoride = 'N';
        $this->oehhccinfo = 'B';
        $this->oehhboxcount = 0;
        $this->oehhrqstdate = '';
        $this->oehhcancdate = '';
        $this->oehhcrntuser = '';
        $this->oehhreleasenbr = '';
        $this->intbwhse = '';
        $this->oehhbordbuilddate = '';
        $this->oehhdeptcode = '';
        $this->oehhfrtinentered = 'N';
        $this->oehhdropshipentered = 'N';
        $this->oehherflag = 'N';
        $this->oehhfrtin = '0.00';
        $this->oehhdropship = '0.00';
        $this->oehhminorder = '0.00';
        $this->oehhcontractterms = 'N';
        $this->oehhdropshipbilled = 'N';
        $this->oehhordtyp = 'N';
        $this->oehhtracknbr = '';
        $this->oehhsource = '';
        $this->oehhccaprv = '';
        $this->oehhpickfmattype = '';
        $this->oehhinvcfmattype = '';
        $this->oehhcashamt = '0.00';
        $this->oehhcheckamt = '0.00';
        $this->oehhchecknbr = '';
        $this->oehhdepositamt = '0.00';
        $this->oehhdepositnbr = '';
        $this->oehhccamt = '0.00';
        $this->oehhotaxsub = '0.00';
        $this->oehhonontaxsub = '0.00';
        $this->oehhotaxtot = '0.00';
        $this->oehhoordrtot = '0.00';
        $this->oehhpickprintdate = '';
        $this->oehhpickprinttime = '';
        $this->oehhcont = '';
        $this->oehhcontteleintl = 'N';
        $this->oehhconttelenbr = '';
        $this->oehhcontteleext = '';
        $this->oehhcontfaxintl = 'N';
        $this->oehhcontfaxnbr = '';
        $this->oehhshipacct = '';
        $this->oehhchgdue = '0.00';
        $this->oehhaddlpricdisc = '0.00';
        $this->oehhallship = '';
        $this->oehhqtyorderamt = '0.00';
        $this->oehhcreditapplied = '0.00';
        $this->oehhinvcprintdate = '';
        $this->oehhinvcprinttime = '';
        $this->oehhdiscfrt = '0.00';
        $this->oehhorideshipcomp = 'N';
        $this->oehhcontemail = '';
        $this->oehhmanualfrt = 'N';
        $this->oehhinternalfrt = 'N';
        $this->oehhfrtcost = '0.00';
        $this->oehhroute = '';
        $this->oehhrouteseq = 0;
        $this->oehhfrttaxcode1 = '';
        $this->oehhfrttaxamt1 = '0.00';
        $this->oehhfrttaxcode2 = '';
        $this->oehhfrttaxamt2 = '0.00';
        $this->oehhfrttaxcode3 = '';
        $this->oehhfrttaxamt3 = '0.00';
        $this->oehhfrttaxcode4 = '';
        $this->oehhfrttaxamt4 = '0.00';
        $this->oehhfrttaxcode5 = '';
        $this->oehhfrttaxamt5 = '0.00';
        $this->oehhedi855sent = '';
        $this->oehhfrt3rdparty = '0.00';
        $this->oehhfob = '';
        $this->oehhconfirmimagyn = 'N';
        $this->oehhindustconform = '';
        $this->oehhcstkconsign = '';
        $this->oehhlmdelaycapsent = '';
        $this->oehhmfgid = '';
        $this->oehhstoreid = '';
        $this->oehhpickqueue = 'N';
        $this->oehharrvdate = '';
        $this->oehhsurchgstat = 'C';
        $this->oehhfrtgrup = '';
        $this->oehhcommoride = '';
        $this->oehhchrgsplt = '';
        $this->oehhacccaprv = '';
        $this->oehhorigordrnbr = '';
        $this->oehhpostdate = '';
        $this->oehhdiscdate1 = '';
        $this->oehhdiscpct1 = '0.00';
        $this->oehhduedate1 = '';
        $this->oehhdueamt1 = '0.00';
        $this->oehhduepct1 = '0.0000000';
        $this->oehhdiscdate2 = '';
        $this->oehhdiscpct2 = '0.00';
        $this->oehhduedate2 = '';
        $this->oehhdueamt2 = '0.00';
        $this->oehhduepct2 = '0.0000000';
        $this->oehhdiscdate3 = '';
        $this->oehhdiscpct3 = '0.00';
        $this->oehhduedate3 = '';
        $this->oehhdueamt3 = '0.00';
        $this->oehhduepct3 = '0.0000000';
        $this->oehhdiscdate4 = '';
        $this->oehhdiscpct4 = '0.00';
        $this->oehhduedate4 = '';
        $this->oehhdueamt4 = '0.00';
        $this->oehhduepct4 = '0.0000000';
        $this->oehhdiscdate5 = '';
        $this->oehhdiscpct5 = '0.00';
        $this->oehhduedate5 = '';
        $this->oehhdueamt5 = '0.00';
        $this->oehhduepct5 = '0.0000000';
        $this->oehhdiscdate6 = '';
        $this->oehhdiscpct6 = '0.00';
        $this->oehhduedate6 = '';
        $this->oehhdueamt6 = '0.00';
        $this->oehhduepct6 = '0.0000000';
        $this->oehhrefnbr = '';
        $this->oehhacprognbr = '';
        $this->oehhacprogexpdate = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\SalesHistory object.
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
     * Compares this with another <code>SalesHistory</code> instance.  If
     * <code>obj</code> is an instance of <code>SalesHistory</code>, delegates to
     * <code>equals(SalesHistory)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|SalesHistory The current object, for fluid interface
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
     * Get the [oehhnbr] column value.
     *
     * @return int
     */
    public function getOehhnbr()
    {
        return $this->oehhnbr;
    }

    /**
     * Get the [oehhyear] column value.
     *
     * @return string
     */
    public function getOehhyear()
    {
        return $this->oehhyear;
    }

    /**
     * Get the [oehhstat] column value.
     *
     * @return string
     */
    public function getOehhstat()
    {
        return $this->oehhstat;
    }

    /**
     * Get the [oehhhold] column value.
     *
     * @return string
     */
    public function getOehhhold()
    {
        return $this->oehhhold;
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
     * Get the [arstshipid] column value.
     *
     * @return string
     */
    public function getArstshipid()
    {
        return $this->arstshipid;
    }

    /**
     * Get the [oehhstname] column value.
     *
     * @return string
     */
    public function getOehhstname()
    {
        return $this->oehhstname;
    }

    /**
     * Get the [oehhstlastname] column value.
     *
     * @return string
     */
    public function getOehhstlastname()
    {
        return $this->oehhstlastname;
    }

    /**
     * Get the [oehhstfirstname] column value.
     *
     * @return string
     */
    public function getOehhstfirstname()
    {
        return $this->oehhstfirstname;
    }

    /**
     * Get the [oehhstadr1] column value.
     *
     * @return string
     */
    public function getOehhstadr1()
    {
        return $this->oehhstadr1;
    }

    /**
     * Get the [oehhstadr2] column value.
     *
     * @return string
     */
    public function getOehhstadr2()
    {
        return $this->oehhstadr2;
    }

    /**
     * Get the [oehhstadr3] column value.
     *
     * @return string
     */
    public function getOehhstadr3()
    {
        return $this->oehhstadr3;
    }

    /**
     * Get the [oehhstctry] column value.
     *
     * @return string
     */
    public function getOehhstctry()
    {
        return $this->oehhstctry;
    }

    /**
     * Get the [oehhstcity] column value.
     *
     * @return string
     */
    public function getOehhstcity()
    {
        return $this->oehhstcity;
    }

    /**
     * Get the [oehhststat] column value.
     *
     * @return string
     */
    public function getOehhststat()
    {
        return $this->oehhststat;
    }

    /**
     * Get the [oehhstzipcode] column value.
     *
     * @return string
     */
    public function getOehhstzipcode()
    {
        return $this->oehhstzipcode;
    }

    /**
     * Get the [oehhcustpo] column value.
     *
     * @return string
     */
    public function getOehhcustpo()
    {
        return $this->oehhcustpo;
    }

    /**
     * Get the [oehhordrdate] column value.
     *
     * @return string
     */
    public function getOehhordrdate()
    {
        return $this->oehhordrdate;
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
     * Get the [artbshipvia] column value.
     *
     * @return string
     */
    public function getArtbshipvia()
    {
        return $this->artbshipvia;
    }

    /**
     * Get the [arininvnbr] column value.
     *
     * @return string
     */
    public function getArininvnbr()
    {
        return $this->arininvnbr;
    }

    /**
     * Get the [oehhinvdate] column value.
     *
     * @return string
     */
    public function getOehhinvdate()
    {
        return $this->oehhinvdate;
    }

    /**
     * Get the [oehhglpd] column value.
     *
     * @return int
     */
    public function getOehhglpd()
    {
        return $this->oehhglpd;
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
     * Get the [oehhsp1pct] column value.
     *
     * @return string
     */
    public function getOehhsp1pct()
    {
        return $this->oehhsp1pct;
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
     * Get the [oehhsp2pct] column value.
     *
     * @return string
     */
    public function getOehhsp2pct()
    {
        return $this->oehhsp2pct;
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
     * Get the [oehhsp3pct] column value.
     *
     * @return string
     */
    public function getOehhsp3pct()
    {
        return $this->oehhsp3pct;
    }

    /**
     * Get the [oehhcntrnbr] column value.
     *
     * @return int
     */
    public function getOehhcntrnbr()
    {
        return $this->oehhcntrnbr;
    }

    /**
     * Get the [oehhwibatch] column value.
     *
     * @return int
     */
    public function getOehhwibatch()
    {
        return $this->oehhwibatch;
    }

    /**
     * Get the [oehhdroprelhold] column value.
     *
     * @return string
     */
    public function getOehhdroprelhold()
    {
        return $this->oehhdroprelhold;
    }

    /**
     * Get the [oehhtaxsub] column value.
     *
     * @return string
     */
    public function getOehhtaxsub()
    {
        return $this->oehhtaxsub;
    }

    /**
     * Get the [oehhnontaxsub] column value.
     *
     * @return string
     */
    public function getOehhnontaxsub()
    {
        return $this->oehhnontaxsub;
    }

    /**
     * Get the [oehhtaxtot] column value.
     *
     * @return string
     */
    public function getOehhtaxtot()
    {
        return $this->oehhtaxtot;
    }

    /**
     * Get the [oehhfrttot] column value.
     *
     * @return string
     */
    public function getOehhfrttot()
    {
        return $this->oehhfrttot;
    }

    /**
     * Get the [oehhmisctot] column value.
     *
     * @return string
     */
    public function getOehhmisctot()
    {
        return $this->oehhmisctot;
    }

    /**
     * Get the [oehhordrtot] column value.
     *
     * @return string
     */
    public function getOehhordrtot()
    {
        return $this->oehhordrtot;
    }

    /**
     * Get the [oehhcosttot] column value.
     *
     * @return string
     */
    public function getOehhcosttot()
    {
        return $this->oehhcosttot;
    }

    /**
     * Get the [oehhspcommlock] column value.
     *
     * @return string
     */
    public function getOehhspcommlock()
    {
        return $this->oehhspcommlock;
    }

    /**
     * Get the [oehhtakendate] column value.
     *
     * @return string
     */
    public function getOehhtakendate()
    {
        return $this->oehhtakendate;
    }

    /**
     * Get the [oehhtakentime] column value.
     *
     * @return string
     */
    public function getOehhtakentime()
    {
        return $this->oehhtakentime;
    }

    /**
     * Get the [oehhpickdate] column value.
     *
     * @return string
     */
    public function getOehhpickdate()
    {
        return $this->oehhpickdate;
    }

    /**
     * Get the [oehhpicktime] column value.
     *
     * @return string
     */
    public function getOehhpicktime()
    {
        return $this->oehhpicktime;
    }

    /**
     * Get the [oehhpackdate] column value.
     *
     * @return string
     */
    public function getOehhpackdate()
    {
        return $this->oehhpackdate;
    }

    /**
     * Get the [oehhpacktime] column value.
     *
     * @return string
     */
    public function getOehhpacktime()
    {
        return $this->oehhpacktime;
    }

    /**
     * Get the [oehhverifydate] column value.
     *
     * @return string
     */
    public function getOehhverifydate()
    {
        return $this->oehhverifydate;
    }

    /**
     * Get the [oehhverifytime] column value.
     *
     * @return string
     */
    public function getOehhverifytime()
    {
        return $this->oehhverifytime;
    }

    /**
     * Get the [oehhcreditmemo] column value.
     *
     * @return string
     */
    public function getOehhcreditmemo()
    {
        return $this->oehhcreditmemo;
    }

    /**
     * Get the [oehhbookedyn] column value.
     *
     * @return string
     */
    public function getOehhbookedyn()
    {
        return $this->oehhbookedyn;
    }

    /**
     * Get the [intbwhseorig] column value.
     *
     * @return string
     */
    public function getIntbwhseorig()
    {
        return $this->intbwhseorig;
    }

    /**
     * Get the [oehhbtstat] column value.
     *
     * @return string
     */
    public function getOehhbtstat()
    {
        return $this->oehhbtstat;
    }

    /**
     * Get the [oehhshipcomp] column value.
     *
     * @return string
     */
    public function getOehhshipcomp()
    {
        return $this->oehhshipcomp;
    }

    /**
     * Get the [oehhcwoflag] column value.
     *
     * @return string
     */
    public function getOehhcwoflag()
    {
        return $this->oehhcwoflag;
    }

    /**
     * Get the [oehhdivision] column value.
     *
     * @return string
     */
    public function getOehhdivision()
    {
        return $this->oehhdivision;
    }

    /**
     * Get the [oehhtakencode] column value.
     *
     * @return string
     */
    public function getOehhtakencode()
    {
        return $this->oehhtakencode;
    }

    /**
     * Get the [oehhpickcode] column value.
     *
     * @return string
     */
    public function getOehhpickcode()
    {
        return $this->oehhpickcode;
    }

    /**
     * Get the [oehhpackcode] column value.
     *
     * @return string
     */
    public function getOehhpackcode()
    {
        return $this->oehhpackcode;
    }

    /**
     * Get the [oehhverifycode] column value.
     *
     * @return string
     */
    public function getOehhverifycode()
    {
        return $this->oehhverifycode;
    }

    /**
     * Get the [oehhtotdisc] column value.
     *
     * @return string
     */
    public function getOehhtotdisc()
    {
        return $this->oehhtotdisc;
    }

    /**
     * Get the [oehhedirefnbrqual] column value.
     *
     * @return string
     */
    public function getOehhedirefnbrqual()
    {
        return $this->oehhedirefnbrqual;
    }

    /**
     * Get the [oehhusercode1] column value.
     *
     * @return string
     */
    public function getOehhusercode1()
    {
        return $this->oehhusercode1;
    }

    /**
     * Get the [oehhusercode2] column value.
     *
     * @return string
     */
    public function getOehhusercode2()
    {
        return $this->oehhusercode2;
    }

    /**
     * Get the [oehhusercode3] column value.
     *
     * @return string
     */
    public function getOehhusercode3()
    {
        return $this->oehhusercode3;
    }

    /**
     * Get the [oehhusercode4] column value.
     *
     * @return string
     */
    public function getOehhusercode4()
    {
        return $this->oehhusercode4;
    }

    /**
     * Get the [oehhexchctry] column value.
     *
     * @return string
     */
    public function getOehhexchctry()
    {
        return $this->oehhexchctry;
    }

    /**
     * Get the [oehhexchrate] column value.
     *
     * @return string
     */
    public function getOehhexchrate()
    {
        return $this->oehhexchrate;
    }

    /**
     * Get the [oehhwghttot] column value.
     *
     * @return string
     */
    public function getOehhwghttot()
    {
        return $this->oehhwghttot;
    }

    /**
     * Get the [oehhwghtoride] column value.
     *
     * @return string
     */
    public function getOehhwghtoride()
    {
        return $this->oehhwghtoride;
    }

    /**
     * Get the [oehhccinfo] column value.
     *
     * @return string
     */
    public function getOehhccinfo()
    {
        return $this->oehhccinfo;
    }

    /**
     * Get the [oehhboxcount] column value.
     *
     * @return int
     */
    public function getOehhboxcount()
    {
        return $this->oehhboxcount;
    }

    /**
     * Get the [oehhrqstdate] column value.
     *
     * @return string
     */
    public function getOehhrqstdate()
    {
        return $this->oehhrqstdate;
    }

    /**
     * Get the [oehhcancdate] column value.
     *
     * @return string
     */
    public function getOehhcancdate()
    {
        return $this->oehhcancdate;
    }

    /**
     * Get the [oehhcrntuser] column value.
     *
     * @return string
     */
    public function getOehhcrntuser()
    {
        return $this->oehhcrntuser;
    }

    /**
     * Get the [oehhreleasenbr] column value.
     *
     * @return string
     */
    public function getOehhreleasenbr()
    {
        return $this->oehhreleasenbr;
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
     * Get the [oehhbordbuilddate] column value.
     *
     * @return string
     */
    public function getOehhbordbuilddate()
    {
        return $this->oehhbordbuilddate;
    }

    /**
     * Get the [oehhdeptcode] column value.
     *
     * @return string
     */
    public function getOehhdeptcode()
    {
        return $this->oehhdeptcode;
    }

    /**
     * Get the [oehhfrtinentered] column value.
     *
     * @return string
     */
    public function getOehhfrtinentered()
    {
        return $this->oehhfrtinentered;
    }

    /**
     * Get the [oehhdropshipentered] column value.
     *
     * @return string
     */
    public function getOehhdropshipentered()
    {
        return $this->oehhdropshipentered;
    }

    /**
     * Get the [oehherflag] column value.
     *
     * @return string
     */
    public function getOehherflag()
    {
        return $this->oehherflag;
    }

    /**
     * Get the [oehhfrtin] column value.
     *
     * @return string
     */
    public function getOehhfrtin()
    {
        return $this->oehhfrtin;
    }

    /**
     * Get the [oehhdropship] column value.
     *
     * @return string
     */
    public function getOehhdropship()
    {
        return $this->oehhdropship;
    }

    /**
     * Get the [oehhminorder] column value.
     *
     * @return string
     */
    public function getOehhminorder()
    {
        return $this->oehhminorder;
    }

    /**
     * Get the [oehhcontractterms] column value.
     *
     * @return string
     */
    public function getOehhcontractterms()
    {
        return $this->oehhcontractterms;
    }

    /**
     * Get the [oehhdropshipbilled] column value.
     *
     * @return string
     */
    public function getOehhdropshipbilled()
    {
        return $this->oehhdropshipbilled;
    }

    /**
     * Get the [oehhordtyp] column value.
     *
     * @return string
     */
    public function getOehhordtyp()
    {
        return $this->oehhordtyp;
    }

    /**
     * Get the [oehhtracknbr] column value.
     *
     * @return string
     */
    public function getOehhtracknbr()
    {
        return $this->oehhtracknbr;
    }

    /**
     * Get the [oehhsource] column value.
     *
     * @return string
     */
    public function getOehhsource()
    {
        return $this->oehhsource;
    }

    /**
     * Get the [oehhccaprv] column value.
     *
     * @return string
     */
    public function getOehhccaprv()
    {
        return $this->oehhccaprv;
    }

    /**
     * Get the [oehhpickfmattype] column value.
     *
     * @return string
     */
    public function getOehhpickfmattype()
    {
        return $this->oehhpickfmattype;
    }

    /**
     * Get the [oehhinvcfmattype] column value.
     *
     * @return string
     */
    public function getOehhinvcfmattype()
    {
        return $this->oehhinvcfmattype;
    }

    /**
     * Get the [oehhcashamt] column value.
     *
     * @return string
     */
    public function getOehhcashamt()
    {
        return $this->oehhcashamt;
    }

    /**
     * Get the [oehhcheckamt] column value.
     *
     * @return string
     */
    public function getOehhcheckamt()
    {
        return $this->oehhcheckamt;
    }

    /**
     * Get the [oehhchecknbr] column value.
     *
     * @return string
     */
    public function getOehhchecknbr()
    {
        return $this->oehhchecknbr;
    }

    /**
     * Get the [oehhdepositamt] column value.
     *
     * @return string
     */
    public function getOehhdepositamt()
    {
        return $this->oehhdepositamt;
    }

    /**
     * Get the [oehhdepositnbr] column value.
     *
     * @return string
     */
    public function getOehhdepositnbr()
    {
        return $this->oehhdepositnbr;
    }

    /**
     * Get the [oehhccamt] column value.
     *
     * @return string
     */
    public function getOehhccamt()
    {
        return $this->oehhccamt;
    }

    /**
     * Get the [oehhotaxsub] column value.
     *
     * @return string
     */
    public function getOehhotaxsub()
    {
        return $this->oehhotaxsub;
    }

    /**
     * Get the [oehhonontaxsub] column value.
     *
     * @return string
     */
    public function getOehhonontaxsub()
    {
        return $this->oehhonontaxsub;
    }

    /**
     * Get the [oehhotaxtot] column value.
     *
     * @return string
     */
    public function getOehhotaxtot()
    {
        return $this->oehhotaxtot;
    }

    /**
     * Get the [oehhoordrtot] column value.
     *
     * @return string
     */
    public function getOehhoordrtot()
    {
        return $this->oehhoordrtot;
    }

    /**
     * Get the [oehhpickprintdate] column value.
     *
     * @return string
     */
    public function getOehhpickprintdate()
    {
        return $this->oehhpickprintdate;
    }

    /**
     * Get the [oehhpickprinttime] column value.
     *
     * @return string
     */
    public function getOehhpickprinttime()
    {
        return $this->oehhpickprinttime;
    }

    /**
     * Get the [oehhcont] column value.
     *
     * @return string
     */
    public function getOehhcont()
    {
        return $this->oehhcont;
    }

    /**
     * Get the [oehhcontteleintl] column value.
     *
     * @return string
     */
    public function getOehhcontteleintl()
    {
        return $this->oehhcontteleintl;
    }

    /**
     * Get the [oehhconttelenbr] column value.
     *
     * @return string
     */
    public function getOehhconttelenbr()
    {
        return $this->oehhconttelenbr;
    }

    /**
     * Get the [oehhcontteleext] column value.
     *
     * @return string
     */
    public function getOehhcontteleext()
    {
        return $this->oehhcontteleext;
    }

    /**
     * Get the [oehhcontfaxintl] column value.
     *
     * @return string
     */
    public function getOehhcontfaxintl()
    {
        return $this->oehhcontfaxintl;
    }

    /**
     * Get the [oehhcontfaxnbr] column value.
     *
     * @return string
     */
    public function getOehhcontfaxnbr()
    {
        return $this->oehhcontfaxnbr;
    }

    /**
     * Get the [oehhshipacct] column value.
     *
     * @return string
     */
    public function getOehhshipacct()
    {
        return $this->oehhshipacct;
    }

    /**
     * Get the [oehhchgdue] column value.
     *
     * @return string
     */
    public function getOehhchgdue()
    {
        return $this->oehhchgdue;
    }

    /**
     * Get the [oehhaddlpricdisc] column value.
     *
     * @return string
     */
    public function getOehhaddlpricdisc()
    {
        return $this->oehhaddlpricdisc;
    }

    /**
     * Get the [oehhallship] column value.
     *
     * @return string
     */
    public function getOehhallship()
    {
        return $this->oehhallship;
    }

    /**
     * Get the [oehhqtyorderamt] column value.
     *
     * @return string
     */
    public function getOehhqtyorderamt()
    {
        return $this->oehhqtyorderamt;
    }

    /**
     * Get the [oehhcreditapplied] column value.
     *
     * @return string
     */
    public function getOehhcreditapplied()
    {
        return $this->oehhcreditapplied;
    }

    /**
     * Get the [oehhinvcprintdate] column value.
     *
     * @return string
     */
    public function getOehhinvcprintdate()
    {
        return $this->oehhinvcprintdate;
    }

    /**
     * Get the [oehhinvcprinttime] column value.
     *
     * @return string
     */
    public function getOehhinvcprinttime()
    {
        return $this->oehhinvcprinttime;
    }

    /**
     * Get the [oehhdiscfrt] column value.
     *
     * @return string
     */
    public function getOehhdiscfrt()
    {
        return $this->oehhdiscfrt;
    }

    /**
     * Get the [oehhorideshipcomp] column value.
     *
     * @return string
     */
    public function getOehhorideshipcomp()
    {
        return $this->oehhorideshipcomp;
    }

    /**
     * Get the [oehhcontemail] column value.
     *
     * @return string
     */
    public function getOehhcontemail()
    {
        return $this->oehhcontemail;
    }

    /**
     * Get the [oehhmanualfrt] column value.
     *
     * @return string
     */
    public function getOehhmanualfrt()
    {
        return $this->oehhmanualfrt;
    }

    /**
     * Get the [oehhinternalfrt] column value.
     *
     * @return string
     */
    public function getOehhinternalfrt()
    {
        return $this->oehhinternalfrt;
    }

    /**
     * Get the [oehhfrtcost] column value.
     *
     * @return string
     */
    public function getOehhfrtcost()
    {
        return $this->oehhfrtcost;
    }

    /**
     * Get the [oehhroute] column value.
     *
     * @return string
     */
    public function getOehhroute()
    {
        return $this->oehhroute;
    }

    /**
     * Get the [oehhrouteseq] column value.
     *
     * @return int
     */
    public function getOehhrouteseq()
    {
        return $this->oehhrouteseq;
    }

    /**
     * Get the [oehhfrttaxcode1] column value.
     *
     * @return string
     */
    public function getOehhfrttaxcode1()
    {
        return $this->oehhfrttaxcode1;
    }

    /**
     * Get the [oehhfrttaxamt1] column value.
     *
     * @return string
     */
    public function getOehhfrttaxamt1()
    {
        return $this->oehhfrttaxamt1;
    }

    /**
     * Get the [oehhfrttaxcode2] column value.
     *
     * @return string
     */
    public function getOehhfrttaxcode2()
    {
        return $this->oehhfrttaxcode2;
    }

    /**
     * Get the [oehhfrttaxamt2] column value.
     *
     * @return string
     */
    public function getOehhfrttaxamt2()
    {
        return $this->oehhfrttaxamt2;
    }

    /**
     * Get the [oehhfrttaxcode3] column value.
     *
     * @return string
     */
    public function getOehhfrttaxcode3()
    {
        return $this->oehhfrttaxcode3;
    }

    /**
     * Get the [oehhfrttaxamt3] column value.
     *
     * @return string
     */
    public function getOehhfrttaxamt3()
    {
        return $this->oehhfrttaxamt3;
    }

    /**
     * Get the [oehhfrttaxcode4] column value.
     *
     * @return string
     */
    public function getOehhfrttaxcode4()
    {
        return $this->oehhfrttaxcode4;
    }

    /**
     * Get the [oehhfrttaxamt4] column value.
     *
     * @return string
     */
    public function getOehhfrttaxamt4()
    {
        return $this->oehhfrttaxamt4;
    }

    /**
     * Get the [oehhfrttaxcode5] column value.
     *
     * @return string
     */
    public function getOehhfrttaxcode5()
    {
        return $this->oehhfrttaxcode5;
    }

    /**
     * Get the [oehhfrttaxamt5] column value.
     *
     * @return string
     */
    public function getOehhfrttaxamt5()
    {
        return $this->oehhfrttaxamt5;
    }

    /**
     * Get the [oehhedi855sent] column value.
     *
     * @return string
     */
    public function getOehhedi855sent()
    {
        return $this->oehhedi855sent;
    }

    /**
     * Get the [oehhfrt3rdparty] column value.
     *
     * @return string
     */
    public function getOehhfrt3rdparty()
    {
        return $this->oehhfrt3rdparty;
    }

    /**
     * Get the [oehhfob] column value.
     *
     * @return string
     */
    public function getOehhfob()
    {
        return $this->oehhfob;
    }

    /**
     * Get the [oehhconfirmimagyn] column value.
     *
     * @return string
     */
    public function getOehhconfirmimagyn()
    {
        return $this->oehhconfirmimagyn;
    }

    /**
     * Get the [oehhindustconform] column value.
     *
     * @return string
     */
    public function getOehhindustconform()
    {
        return $this->oehhindustconform;
    }

    /**
     * Get the [oehhcstkconsign] column value.
     *
     * @return string
     */
    public function getOehhcstkconsign()
    {
        return $this->oehhcstkconsign;
    }

    /**
     * Get the [oehhlmdelaycapsent] column value.
     *
     * @return string
     */
    public function getOehhlmdelaycapsent()
    {
        return $this->oehhlmdelaycapsent;
    }

    /**
     * Get the [oehhmfgid] column value.
     *
     * @return string
     */
    public function getOehhmfgid()
    {
        return $this->oehhmfgid;
    }

    /**
     * Get the [oehhstoreid] column value.
     *
     * @return string
     */
    public function getOehhstoreid()
    {
        return $this->oehhstoreid;
    }

    /**
     * Get the [oehhpickqueue] column value.
     *
     * @return string
     */
    public function getOehhpickqueue()
    {
        return $this->oehhpickqueue;
    }

    /**
     * Get the [oehharrvdate] column value.
     *
     * @return string
     */
    public function getOehharrvdate()
    {
        return $this->oehharrvdate;
    }

    /**
     * Get the [oehhsurchgstat] column value.
     *
     * @return string
     */
    public function getOehhsurchgstat()
    {
        return $this->oehhsurchgstat;
    }

    /**
     * Get the [oehhfrtgrup] column value.
     *
     * @return string
     */
    public function getOehhfrtgrup()
    {
        return $this->oehhfrtgrup;
    }

    /**
     * Get the [oehhcommoride] column value.
     *
     * @return string
     */
    public function getOehhcommoride()
    {
        return $this->oehhcommoride;
    }

    /**
     * Get the [oehhchrgsplt] column value.
     *
     * @return string
     */
    public function getOehhchrgsplt()
    {
        return $this->oehhchrgsplt;
    }

    /**
     * Get the [oehhacccaprv] column value.
     *
     * @return string
     */
    public function getOehhacccaprv()
    {
        return $this->oehhacccaprv;
    }

    /**
     * Get the [oehhorigordrnbr] column value.
     *
     * @return string
     */
    public function getOehhorigordrnbr()
    {
        return $this->oehhorigordrnbr;
    }

    /**
     * Get the [oehhpostdate] column value.
     *
     * @return string
     */
    public function getOehhpostdate()
    {
        return $this->oehhpostdate;
    }

    /**
     * Get the [oehhdiscdate1] column value.
     *
     * @return string
     */
    public function getOehhdiscdate1()
    {
        return $this->oehhdiscdate1;
    }

    /**
     * Get the [oehhdiscpct1] column value.
     *
     * @return string
     */
    public function getOehhdiscpct1()
    {
        return $this->oehhdiscpct1;
    }

    /**
     * Get the [oehhduedate1] column value.
     *
     * @return string
     */
    public function getOehhduedate1()
    {
        return $this->oehhduedate1;
    }

    /**
     * Get the [oehhdueamt1] column value.
     *
     * @return string
     */
    public function getOehhdueamt1()
    {
        return $this->oehhdueamt1;
    }

    /**
     * Get the [oehhduepct1] column value.
     *
     * @return string
     */
    public function getOehhduepct1()
    {
        return $this->oehhduepct1;
    }

    /**
     * Get the [oehhdiscdate2] column value.
     *
     * @return string
     */
    public function getOehhdiscdate2()
    {
        return $this->oehhdiscdate2;
    }

    /**
     * Get the [oehhdiscpct2] column value.
     *
     * @return string
     */
    public function getOehhdiscpct2()
    {
        return $this->oehhdiscpct2;
    }

    /**
     * Get the [oehhduedate2] column value.
     *
     * @return string
     */
    public function getOehhduedate2()
    {
        return $this->oehhduedate2;
    }

    /**
     * Get the [oehhdueamt2] column value.
     *
     * @return string
     */
    public function getOehhdueamt2()
    {
        return $this->oehhdueamt2;
    }

    /**
     * Get the [oehhduepct2] column value.
     *
     * @return string
     */
    public function getOehhduepct2()
    {
        return $this->oehhduepct2;
    }

    /**
     * Get the [oehhdiscdate3] column value.
     *
     * @return string
     */
    public function getOehhdiscdate3()
    {
        return $this->oehhdiscdate3;
    }

    /**
     * Get the [oehhdiscpct3] column value.
     *
     * @return string
     */
    public function getOehhdiscpct3()
    {
        return $this->oehhdiscpct3;
    }

    /**
     * Get the [oehhduedate3] column value.
     *
     * @return string
     */
    public function getOehhduedate3()
    {
        return $this->oehhduedate3;
    }

    /**
     * Get the [oehhdueamt3] column value.
     *
     * @return string
     */
    public function getOehhdueamt3()
    {
        return $this->oehhdueamt3;
    }

    /**
     * Get the [oehhduepct3] column value.
     *
     * @return string
     */
    public function getOehhduepct3()
    {
        return $this->oehhduepct3;
    }

    /**
     * Get the [oehhdiscdate4] column value.
     *
     * @return string
     */
    public function getOehhdiscdate4()
    {
        return $this->oehhdiscdate4;
    }

    /**
     * Get the [oehhdiscpct4] column value.
     *
     * @return string
     */
    public function getOehhdiscpct4()
    {
        return $this->oehhdiscpct4;
    }

    /**
     * Get the [oehhduedate4] column value.
     *
     * @return string
     */
    public function getOehhduedate4()
    {
        return $this->oehhduedate4;
    }

    /**
     * Get the [oehhdueamt4] column value.
     *
     * @return string
     */
    public function getOehhdueamt4()
    {
        return $this->oehhdueamt4;
    }

    /**
     * Get the [oehhduepct4] column value.
     *
     * @return string
     */
    public function getOehhduepct4()
    {
        return $this->oehhduepct4;
    }

    /**
     * Get the [oehhdiscdate5] column value.
     *
     * @return string
     */
    public function getOehhdiscdate5()
    {
        return $this->oehhdiscdate5;
    }

    /**
     * Get the [oehhdiscpct5] column value.
     *
     * @return string
     */
    public function getOehhdiscpct5()
    {
        return $this->oehhdiscpct5;
    }

    /**
     * Get the [oehhduedate5] column value.
     *
     * @return string
     */
    public function getOehhduedate5()
    {
        return $this->oehhduedate5;
    }

    /**
     * Get the [oehhdueamt5] column value.
     *
     * @return string
     */
    public function getOehhdueamt5()
    {
        return $this->oehhdueamt5;
    }

    /**
     * Get the [oehhduepct5] column value.
     *
     * @return string
     */
    public function getOehhduepct5()
    {
        return $this->oehhduepct5;
    }

    /**
     * Get the [oehhdiscdate6] column value.
     *
     * @return string
     */
    public function getOehhdiscdate6()
    {
        return $this->oehhdiscdate6;
    }

    /**
     * Get the [oehhdiscpct6] column value.
     *
     * @return string
     */
    public function getOehhdiscpct6()
    {
        return $this->oehhdiscpct6;
    }

    /**
     * Get the [oehhduedate6] column value.
     *
     * @return string
     */
    public function getOehhduedate6()
    {
        return $this->oehhduedate6;
    }

    /**
     * Get the [oehhdueamt6] column value.
     *
     * @return string
     */
    public function getOehhdueamt6()
    {
        return $this->oehhdueamt6;
    }

    /**
     * Get the [oehhduepct6] column value.
     *
     * @return string
     */
    public function getOehhduepct6()
    {
        return $this->oehhduepct6;
    }

    /**
     * Get the [oehhrefnbr] column value.
     *
     * @return string
     */
    public function getOehhrefnbr()
    {
        return $this->oehhrefnbr;
    }

    /**
     * Get the [oehhacprognbr] column value.
     *
     * @return string
     */
    public function getOehhacprognbr()
    {
        return $this->oehhacprognbr;
    }

    /**
     * Get the [oehhacprogexpdate] column value.
     *
     * @return string
     */
    public function getOehhacprogexpdate()
    {
        return $this->oehhacprogexpdate;
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
     * Set the value of [oehhnbr] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehhnbr !== $v) {
            $this->oehhnbr = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHNBR] = true;
        }

        return $this;
    } // setOehhnbr()

    /**
     * Set the value of [oehhyear] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhyear($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhyear !== $v) {
            $this->oehhyear = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHYEAR] = true;
        }

        return $this;
    } // setOehhyear()

    /**
     * Set the value of [oehhstat] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhstat !== $v) {
            $this->oehhstat = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSTAT] = true;
        }

        return $this;
    } // setOehhstat()

    /**
     * Set the value of [oehhhold] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhhold !== $v) {
            $this->oehhhold = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHHOLD] = true;
        }

        return $this;
    } // setOehhhold()

    /**
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_ARCUCUSTID] = true;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getArcucustid() !== $v) {
            $this->aCustomer = null;
        }

        if ($this->aCustomerShipto !== null && $this->aCustomerShipto->getArcucustid() !== $v) {
            $this->aCustomerShipto = null;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [arstshipid] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setArstshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstshipid !== $v) {
            $this->arstshipid = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_ARSTSHIPID] = true;
        }

        if ($this->aCustomerShipto !== null && $this->aCustomerShipto->getArstshipid() !== $v) {
            $this->aCustomerShipto = null;
        }

        return $this;
    } // setArstshipid()

    /**
     * Set the value of [oehhstname] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhstname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhstname !== $v) {
            $this->oehhstname = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSTNAME] = true;
        }

        return $this;
    } // setOehhstname()

    /**
     * Set the value of [oehhstlastname] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhstlastname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhstlastname !== $v) {
            $this->oehhstlastname = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSTLASTNAME] = true;
        }

        return $this;
    } // setOehhstlastname()

    /**
     * Set the value of [oehhstfirstname] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhstfirstname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhstfirstname !== $v) {
            $this->oehhstfirstname = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSTFIRSTNAME] = true;
        }

        return $this;
    } // setOehhstfirstname()

    /**
     * Set the value of [oehhstadr1] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhstadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhstadr1 !== $v) {
            $this->oehhstadr1 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSTADR1] = true;
        }

        return $this;
    } // setOehhstadr1()

    /**
     * Set the value of [oehhstadr2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhstadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhstadr2 !== $v) {
            $this->oehhstadr2 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSTADR2] = true;
        }

        return $this;
    } // setOehhstadr2()

    /**
     * Set the value of [oehhstadr3] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhstadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhstadr3 !== $v) {
            $this->oehhstadr3 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSTADR3] = true;
        }

        return $this;
    } // setOehhstadr3()

    /**
     * Set the value of [oehhstctry] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhstctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhstctry !== $v) {
            $this->oehhstctry = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSTCTRY] = true;
        }

        return $this;
    } // setOehhstctry()

    /**
     * Set the value of [oehhstcity] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhstcity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhstcity !== $v) {
            $this->oehhstcity = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSTCITY] = true;
        }

        return $this;
    } // setOehhstcity()

    /**
     * Set the value of [oehhststat] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhststat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhststat !== $v) {
            $this->oehhststat = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSTSTAT] = true;
        }

        return $this;
    } // setOehhststat()

    /**
     * Set the value of [oehhstzipcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhstzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhstzipcode !== $v) {
            $this->oehhstzipcode = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSTZIPCODE] = true;
        }

        return $this;
    } // setOehhstzipcode()

    /**
     * Set the value of [oehhcustpo] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcustpo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcustpo !== $v) {
            $this->oehhcustpo = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCUSTPO] = true;
        }

        return $this;
    } // setOehhcustpo()

    /**
     * Set the value of [oehhordrdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhordrdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhordrdate !== $v) {
            $this->oehhordrdate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHORDRDATE] = true;
        }

        return $this;
    } // setOehhordrdate()

    /**
     * Set the value of [artmtermcd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setArtmtermcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmtermcd !== $v) {
            $this->artmtermcd = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_ARTMTERMCD] = true;
        }

        return $this;
    } // setArtmtermcd()

    /**
     * Set the value of [artbshipvia] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setArtbshipvia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbshipvia !== $v) {
            $this->artbshipvia = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_ARTBSHIPVIA] = true;
        }

        return $this;
    } // setArtbshipvia()

    /**
     * Set the value of [arininvnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setArininvnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arininvnbr !== $v) {
            $this->arininvnbr = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_ARININVNBR] = true;
        }

        return $this;
    } // setArininvnbr()

    /**
     * Set the value of [oehhinvdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhinvdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhinvdate !== $v) {
            $this->oehhinvdate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHINVDATE] = true;
        }

        return $this;
    } // setOehhinvdate()

    /**
     * Set the value of [oehhglpd] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhglpd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehhglpd !== $v) {
            $this->oehhglpd = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHGLPD] = true;
        }

        return $this;
    } // setOehhglpd()

    /**
     * Set the value of [arspsaleper1] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setArspsaleper1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper1 !== $v) {
            $this->arspsaleper1 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_ARSPSALEPER1] = true;
        }

        return $this;
    } // setArspsaleper1()

    /**
     * Set the value of [oehhsp1pct] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhsp1pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhsp1pct !== $v) {
            $this->oehhsp1pct = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSP1PCT] = true;
        }

        return $this;
    } // setOehhsp1pct()

    /**
     * Set the value of [arspsaleper2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setArspsaleper2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper2 !== $v) {
            $this->arspsaleper2 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_ARSPSALEPER2] = true;
        }

        return $this;
    } // setArspsaleper2()

    /**
     * Set the value of [oehhsp2pct] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhsp2pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhsp2pct !== $v) {
            $this->oehhsp2pct = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSP2PCT] = true;
        }

        return $this;
    } // setOehhsp2pct()

    /**
     * Set the value of [arspsaleper3] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setArspsaleper3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper3 !== $v) {
            $this->arspsaleper3 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_ARSPSALEPER3] = true;
        }

        return $this;
    } // setArspsaleper3()

    /**
     * Set the value of [oehhsp3pct] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhsp3pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhsp3pct !== $v) {
            $this->oehhsp3pct = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSP3PCT] = true;
        }

        return $this;
    } // setOehhsp3pct()

    /**
     * Set the value of [oehhcntrnbr] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcntrnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehhcntrnbr !== $v) {
            $this->oehhcntrnbr = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCNTRNBR] = true;
        }

        return $this;
    } // setOehhcntrnbr()

    /**
     * Set the value of [oehhwibatch] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhwibatch($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehhwibatch !== $v) {
            $this->oehhwibatch = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHWIBATCH] = true;
        }

        return $this;
    } // setOehhwibatch()

    /**
     * Set the value of [oehhdroprelhold] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdroprelhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdroprelhold !== $v) {
            $this->oehhdroprelhold = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDROPRELHOLD] = true;
        }

        return $this;
    } // setOehhdroprelhold()

    /**
     * Set the value of [oehhtaxsub] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhtaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhtaxsub !== $v) {
            $this->oehhtaxsub = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHTAXSUB] = true;
        }

        return $this;
    } // setOehhtaxsub()

    /**
     * Set the value of [oehhnontaxsub] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhnontaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhnontaxsub !== $v) {
            $this->oehhnontaxsub = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHNONTAXSUB] = true;
        }

        return $this;
    } // setOehhnontaxsub()

    /**
     * Set the value of [oehhtaxtot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhtaxtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhtaxtot !== $v) {
            $this->oehhtaxtot = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHTAXTOT] = true;
        }

        return $this;
    } // setOehhtaxtot()

    /**
     * Set the value of [oehhfrttot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrttot !== $v) {
            $this->oehhfrttot = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTTOT] = true;
        }

        return $this;
    } // setOehhfrttot()

    /**
     * Set the value of [oehhmisctot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhmisctot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhmisctot !== $v) {
            $this->oehhmisctot = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHMISCTOT] = true;
        }

        return $this;
    } // setOehhmisctot()

    /**
     * Set the value of [oehhordrtot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhordrtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhordrtot !== $v) {
            $this->oehhordrtot = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHORDRTOT] = true;
        }

        return $this;
    } // setOehhordrtot()

    /**
     * Set the value of [oehhcosttot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcosttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcosttot !== $v) {
            $this->oehhcosttot = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCOSTTOT] = true;
        }

        return $this;
    } // setOehhcosttot()

    /**
     * Set the value of [oehhspcommlock] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhspcommlock($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhspcommlock !== $v) {
            $this->oehhspcommlock = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSPCOMMLOCK] = true;
        }

        return $this;
    } // setOehhspcommlock()

    /**
     * Set the value of [oehhtakendate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhtakendate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhtakendate !== $v) {
            $this->oehhtakendate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHTAKENDATE] = true;
        }

        return $this;
    } // setOehhtakendate()

    /**
     * Set the value of [oehhtakentime] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhtakentime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhtakentime !== $v) {
            $this->oehhtakentime = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHTAKENTIME] = true;
        }

        return $this;
    } // setOehhtakentime()

    /**
     * Set the value of [oehhpickdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhpickdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhpickdate !== $v) {
            $this->oehhpickdate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHPICKDATE] = true;
        }

        return $this;
    } // setOehhpickdate()

    /**
     * Set the value of [oehhpicktime] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhpicktime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhpicktime !== $v) {
            $this->oehhpicktime = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHPICKTIME] = true;
        }

        return $this;
    } // setOehhpicktime()

    /**
     * Set the value of [oehhpackdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhpackdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhpackdate !== $v) {
            $this->oehhpackdate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHPACKDATE] = true;
        }

        return $this;
    } // setOehhpackdate()

    /**
     * Set the value of [oehhpacktime] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhpacktime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhpacktime !== $v) {
            $this->oehhpacktime = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHPACKTIME] = true;
        }

        return $this;
    } // setOehhpacktime()

    /**
     * Set the value of [oehhverifydate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhverifydate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhverifydate !== $v) {
            $this->oehhverifydate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHVERIFYDATE] = true;
        }

        return $this;
    } // setOehhverifydate()

    /**
     * Set the value of [oehhverifytime] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhverifytime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhverifytime !== $v) {
            $this->oehhverifytime = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHVERIFYTIME] = true;
        }

        return $this;
    } // setOehhverifytime()

    /**
     * Set the value of [oehhcreditmemo] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcreditmemo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcreditmemo !== $v) {
            $this->oehhcreditmemo = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCREDITMEMO] = true;
        }

        return $this;
    } // setOehhcreditmemo()

    /**
     * Set the value of [oehhbookedyn] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhbookedyn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhbookedyn !== $v) {
            $this->oehhbookedyn = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHBOOKEDYN] = true;
        }

        return $this;
    } // setOehhbookedyn()

    /**
     * Set the value of [intbwhseorig] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setIntbwhseorig($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseorig !== $v) {
            $this->intbwhseorig = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_INTBWHSEORIG] = true;
        }

        return $this;
    } // setIntbwhseorig()

    /**
     * Set the value of [oehhbtstat] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhbtstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhbtstat !== $v) {
            $this->oehhbtstat = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHBTSTAT] = true;
        }

        return $this;
    } // setOehhbtstat()

    /**
     * Set the value of [oehhshipcomp] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhshipcomp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhshipcomp !== $v) {
            $this->oehhshipcomp = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSHIPCOMP] = true;
        }

        return $this;
    } // setOehhshipcomp()

    /**
     * Set the value of [oehhcwoflag] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcwoflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcwoflag !== $v) {
            $this->oehhcwoflag = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCWOFLAG] = true;
        }

        return $this;
    } // setOehhcwoflag()

    /**
     * Set the value of [oehhdivision] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdivision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdivision !== $v) {
            $this->oehhdivision = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDIVISION] = true;
        }

        return $this;
    } // setOehhdivision()

    /**
     * Set the value of [oehhtakencode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhtakencode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhtakencode !== $v) {
            $this->oehhtakencode = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHTAKENCODE] = true;
        }

        return $this;
    } // setOehhtakencode()

    /**
     * Set the value of [oehhpickcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhpickcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhpickcode !== $v) {
            $this->oehhpickcode = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHPICKCODE] = true;
        }

        return $this;
    } // setOehhpickcode()

    /**
     * Set the value of [oehhpackcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhpackcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhpackcode !== $v) {
            $this->oehhpackcode = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHPACKCODE] = true;
        }

        return $this;
    } // setOehhpackcode()

    /**
     * Set the value of [oehhverifycode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhverifycode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhverifycode !== $v) {
            $this->oehhverifycode = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHVERIFYCODE] = true;
        }

        return $this;
    } // setOehhverifycode()

    /**
     * Set the value of [oehhtotdisc] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhtotdisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhtotdisc !== $v) {
            $this->oehhtotdisc = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHTOTDISC] = true;
        }

        return $this;
    } // setOehhtotdisc()

    /**
     * Set the value of [oehhedirefnbrqual] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhedirefnbrqual($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhedirefnbrqual !== $v) {
            $this->oehhedirefnbrqual = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHEDIREFNBRQUAL] = true;
        }

        return $this;
    } // setOehhedirefnbrqual()

    /**
     * Set the value of [oehhusercode1] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhusercode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhusercode1 !== $v) {
            $this->oehhusercode1 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHUSERCODE1] = true;
        }

        return $this;
    } // setOehhusercode1()

    /**
     * Set the value of [oehhusercode2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhusercode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhusercode2 !== $v) {
            $this->oehhusercode2 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHUSERCODE2] = true;
        }

        return $this;
    } // setOehhusercode2()

    /**
     * Set the value of [oehhusercode3] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhusercode3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhusercode3 !== $v) {
            $this->oehhusercode3 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHUSERCODE3] = true;
        }

        return $this;
    } // setOehhusercode3()

    /**
     * Set the value of [oehhusercode4] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhusercode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhusercode4 !== $v) {
            $this->oehhusercode4 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHUSERCODE4] = true;
        }

        return $this;
    } // setOehhusercode4()

    /**
     * Set the value of [oehhexchctry] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhexchctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhexchctry !== $v) {
            $this->oehhexchctry = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHEXCHCTRY] = true;
        }

        return $this;
    } // setOehhexchctry()

    /**
     * Set the value of [oehhexchrate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhexchrate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhexchrate !== $v) {
            $this->oehhexchrate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHEXCHRATE] = true;
        }

        return $this;
    } // setOehhexchrate()

    /**
     * Set the value of [oehhwghttot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhwghttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhwghttot !== $v) {
            $this->oehhwghttot = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHWGHTTOT] = true;
        }

        return $this;
    } // setOehhwghttot()

    /**
     * Set the value of [oehhwghtoride] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhwghtoride($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhwghtoride !== $v) {
            $this->oehhwghtoride = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHWGHTORIDE] = true;
        }

        return $this;
    } // setOehhwghtoride()

    /**
     * Set the value of [oehhccinfo] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhccinfo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhccinfo !== $v) {
            $this->oehhccinfo = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCCINFO] = true;
        }

        return $this;
    } // setOehhccinfo()

    /**
     * Set the value of [oehhboxcount] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhboxcount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehhboxcount !== $v) {
            $this->oehhboxcount = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHBOXCOUNT] = true;
        }

        return $this;
    } // setOehhboxcount()

    /**
     * Set the value of [oehhrqstdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhrqstdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhrqstdate !== $v) {
            $this->oehhrqstdate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHRQSTDATE] = true;
        }

        return $this;
    } // setOehhrqstdate()

    /**
     * Set the value of [oehhcancdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcancdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcancdate !== $v) {
            $this->oehhcancdate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCANCDATE] = true;
        }

        return $this;
    } // setOehhcancdate()

    /**
     * Set the value of [oehhcrntuser] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcrntuser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcrntuser !== $v) {
            $this->oehhcrntuser = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCRNTUSER] = true;
        }

        return $this;
    } // setOehhcrntuser()

    /**
     * Set the value of [oehhreleasenbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhreleasenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhreleasenbr !== $v) {
            $this->oehhreleasenbr = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHRELEASENBR] = true;
        }

        return $this;
    } // setOehhreleasenbr()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [oehhbordbuilddate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhbordbuilddate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhbordbuilddate !== $v) {
            $this->oehhbordbuilddate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHBORDBUILDDATE] = true;
        }

        return $this;
    } // setOehhbordbuilddate()

    /**
     * Set the value of [oehhdeptcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdeptcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdeptcode !== $v) {
            $this->oehhdeptcode = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDEPTCODE] = true;
        }

        return $this;
    } // setOehhdeptcode()

    /**
     * Set the value of [oehhfrtinentered] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrtinentered($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrtinentered !== $v) {
            $this->oehhfrtinentered = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTINENTERED] = true;
        }

        return $this;
    } // setOehhfrtinentered()

    /**
     * Set the value of [oehhdropshipentered] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdropshipentered($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdropshipentered !== $v) {
            $this->oehhdropshipentered = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDROPSHIPENTERED] = true;
        }

        return $this;
    } // setOehhdropshipentered()

    /**
     * Set the value of [oehherflag] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehherflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehherflag !== $v) {
            $this->oehherflag = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHERFLAG] = true;
        }

        return $this;
    } // setOehherflag()

    /**
     * Set the value of [oehhfrtin] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrtin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrtin !== $v) {
            $this->oehhfrtin = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTIN] = true;
        }

        return $this;
    } // setOehhfrtin()

    /**
     * Set the value of [oehhdropship] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdropship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdropship !== $v) {
            $this->oehhdropship = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDROPSHIP] = true;
        }

        return $this;
    } // setOehhdropship()

    /**
     * Set the value of [oehhminorder] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhminorder($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhminorder !== $v) {
            $this->oehhminorder = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHMINORDER] = true;
        }

        return $this;
    } // setOehhminorder()

    /**
     * Set the value of [oehhcontractterms] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcontractterms($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcontractterms !== $v) {
            $this->oehhcontractterms = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCONTRACTTERMS] = true;
        }

        return $this;
    } // setOehhcontractterms()

    /**
     * Set the value of [oehhdropshipbilled] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdropshipbilled($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdropshipbilled !== $v) {
            $this->oehhdropshipbilled = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDROPSHIPBILLED] = true;
        }

        return $this;
    } // setOehhdropshipbilled()

    /**
     * Set the value of [oehhordtyp] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhordtyp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhordtyp !== $v) {
            $this->oehhordtyp = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHORDTYP] = true;
        }

        return $this;
    } // setOehhordtyp()

    /**
     * Set the value of [oehhtracknbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhtracknbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhtracknbr !== $v) {
            $this->oehhtracknbr = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHTRACKNBR] = true;
        }

        return $this;
    } // setOehhtracknbr()

    /**
     * Set the value of [oehhsource] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhsource($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhsource !== $v) {
            $this->oehhsource = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSOURCE] = true;
        }

        return $this;
    } // setOehhsource()

    /**
     * Set the value of [oehhccaprv] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhccaprv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhccaprv !== $v) {
            $this->oehhccaprv = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCCAPRV] = true;
        }

        return $this;
    } // setOehhccaprv()

    /**
     * Set the value of [oehhpickfmattype] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhpickfmattype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhpickfmattype !== $v) {
            $this->oehhpickfmattype = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHPICKFMATTYPE] = true;
        }

        return $this;
    } // setOehhpickfmattype()

    /**
     * Set the value of [oehhinvcfmattype] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhinvcfmattype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhinvcfmattype !== $v) {
            $this->oehhinvcfmattype = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHINVCFMATTYPE] = true;
        }

        return $this;
    } // setOehhinvcfmattype()

    /**
     * Set the value of [oehhcashamt] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcashamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcashamt !== $v) {
            $this->oehhcashamt = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCASHAMT] = true;
        }

        return $this;
    } // setOehhcashamt()

    /**
     * Set the value of [oehhcheckamt] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcheckamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcheckamt !== $v) {
            $this->oehhcheckamt = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCHECKAMT] = true;
        }

        return $this;
    } // setOehhcheckamt()

    /**
     * Set the value of [oehhchecknbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhchecknbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhchecknbr !== $v) {
            $this->oehhchecknbr = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCHECKNBR] = true;
        }

        return $this;
    } // setOehhchecknbr()

    /**
     * Set the value of [oehhdepositamt] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdepositamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdepositamt !== $v) {
            $this->oehhdepositamt = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDEPOSITAMT] = true;
        }

        return $this;
    } // setOehhdepositamt()

    /**
     * Set the value of [oehhdepositnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdepositnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdepositnbr !== $v) {
            $this->oehhdepositnbr = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDEPOSITNBR] = true;
        }

        return $this;
    } // setOehhdepositnbr()

    /**
     * Set the value of [oehhccamt] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhccamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhccamt !== $v) {
            $this->oehhccamt = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCCAMT] = true;
        }

        return $this;
    } // setOehhccamt()

    /**
     * Set the value of [oehhotaxsub] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhotaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhotaxsub !== $v) {
            $this->oehhotaxsub = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHOTAXSUB] = true;
        }

        return $this;
    } // setOehhotaxsub()

    /**
     * Set the value of [oehhonontaxsub] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhonontaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhonontaxsub !== $v) {
            $this->oehhonontaxsub = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHONONTAXSUB] = true;
        }

        return $this;
    } // setOehhonontaxsub()

    /**
     * Set the value of [oehhotaxtot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhotaxtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhotaxtot !== $v) {
            $this->oehhotaxtot = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHOTAXTOT] = true;
        }

        return $this;
    } // setOehhotaxtot()

    /**
     * Set the value of [oehhoordrtot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhoordrtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhoordrtot !== $v) {
            $this->oehhoordrtot = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHOORDRTOT] = true;
        }

        return $this;
    } // setOehhoordrtot()

    /**
     * Set the value of [oehhpickprintdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhpickprintdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhpickprintdate !== $v) {
            $this->oehhpickprintdate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHPICKPRINTDATE] = true;
        }

        return $this;
    } // setOehhpickprintdate()

    /**
     * Set the value of [oehhpickprinttime] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhpickprinttime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhpickprinttime !== $v) {
            $this->oehhpickprinttime = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHPICKPRINTTIME] = true;
        }

        return $this;
    } // setOehhpickprinttime()

    /**
     * Set the value of [oehhcont] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcont($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcont !== $v) {
            $this->oehhcont = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCONT] = true;
        }

        return $this;
    } // setOehhcont()

    /**
     * Set the value of [oehhcontteleintl] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcontteleintl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcontteleintl !== $v) {
            $this->oehhcontteleintl = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCONTTELEINTL] = true;
        }

        return $this;
    } // setOehhcontteleintl()

    /**
     * Set the value of [oehhconttelenbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhconttelenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhconttelenbr !== $v) {
            $this->oehhconttelenbr = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCONTTELENBR] = true;
        }

        return $this;
    } // setOehhconttelenbr()

    /**
     * Set the value of [oehhcontteleext] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcontteleext($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcontteleext !== $v) {
            $this->oehhcontteleext = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCONTTELEEXT] = true;
        }

        return $this;
    } // setOehhcontteleext()

    /**
     * Set the value of [oehhcontfaxintl] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcontfaxintl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcontfaxintl !== $v) {
            $this->oehhcontfaxintl = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCONTFAXINTL] = true;
        }

        return $this;
    } // setOehhcontfaxintl()

    /**
     * Set the value of [oehhcontfaxnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcontfaxnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcontfaxnbr !== $v) {
            $this->oehhcontfaxnbr = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCONTFAXNBR] = true;
        }

        return $this;
    } // setOehhcontfaxnbr()

    /**
     * Set the value of [oehhshipacct] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhshipacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhshipacct !== $v) {
            $this->oehhshipacct = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSHIPACCT] = true;
        }

        return $this;
    } // setOehhshipacct()

    /**
     * Set the value of [oehhchgdue] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhchgdue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhchgdue !== $v) {
            $this->oehhchgdue = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCHGDUE] = true;
        }

        return $this;
    } // setOehhchgdue()

    /**
     * Set the value of [oehhaddlpricdisc] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhaddlpricdisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhaddlpricdisc !== $v) {
            $this->oehhaddlpricdisc = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHADDLPRICDISC] = true;
        }

        return $this;
    } // setOehhaddlpricdisc()

    /**
     * Set the value of [oehhallship] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhallship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhallship !== $v) {
            $this->oehhallship = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHALLSHIP] = true;
        }

        return $this;
    } // setOehhallship()

    /**
     * Set the value of [oehhqtyorderamt] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhqtyorderamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhqtyorderamt !== $v) {
            $this->oehhqtyorderamt = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHQTYORDERAMT] = true;
        }

        return $this;
    } // setOehhqtyorderamt()

    /**
     * Set the value of [oehhcreditapplied] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcreditapplied($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcreditapplied !== $v) {
            $this->oehhcreditapplied = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCREDITAPPLIED] = true;
        }

        return $this;
    } // setOehhcreditapplied()

    /**
     * Set the value of [oehhinvcprintdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhinvcprintdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhinvcprintdate !== $v) {
            $this->oehhinvcprintdate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHINVCPRINTDATE] = true;
        }

        return $this;
    } // setOehhinvcprintdate()

    /**
     * Set the value of [oehhinvcprinttime] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhinvcprinttime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhinvcprinttime !== $v) {
            $this->oehhinvcprinttime = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHINVCPRINTTIME] = true;
        }

        return $this;
    } // setOehhinvcprinttime()

    /**
     * Set the value of [oehhdiscfrt] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdiscfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdiscfrt !== $v) {
            $this->oehhdiscfrt = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDISCFRT] = true;
        }

        return $this;
    } // setOehhdiscfrt()

    /**
     * Set the value of [oehhorideshipcomp] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhorideshipcomp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhorideshipcomp !== $v) {
            $this->oehhorideshipcomp = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHORIDESHIPCOMP] = true;
        }

        return $this;
    } // setOehhorideshipcomp()

    /**
     * Set the value of [oehhcontemail] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcontemail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcontemail !== $v) {
            $this->oehhcontemail = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCONTEMAIL] = true;
        }

        return $this;
    } // setOehhcontemail()

    /**
     * Set the value of [oehhmanualfrt] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhmanualfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhmanualfrt !== $v) {
            $this->oehhmanualfrt = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHMANUALFRT] = true;
        }

        return $this;
    } // setOehhmanualfrt()

    /**
     * Set the value of [oehhinternalfrt] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhinternalfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhinternalfrt !== $v) {
            $this->oehhinternalfrt = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHINTERNALFRT] = true;
        }

        return $this;
    } // setOehhinternalfrt()

    /**
     * Set the value of [oehhfrtcost] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrtcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrtcost !== $v) {
            $this->oehhfrtcost = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTCOST] = true;
        }

        return $this;
    } // setOehhfrtcost()

    /**
     * Set the value of [oehhroute] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhroute($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhroute !== $v) {
            $this->oehhroute = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHROUTE] = true;
        }

        return $this;
    } // setOehhroute()

    /**
     * Set the value of [oehhrouteseq] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhrouteseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehhrouteseq !== $v) {
            $this->oehhrouteseq = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHROUTESEQ] = true;
        }

        return $this;
    } // setOehhrouteseq()

    /**
     * Set the value of [oehhfrttaxcode1] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrttaxcode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrttaxcode1 !== $v) {
            $this->oehhfrttaxcode1 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTTAXCODE1] = true;
        }

        return $this;
    } // setOehhfrttaxcode1()

    /**
     * Set the value of [oehhfrttaxamt1] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrttaxamt1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrttaxamt1 !== $v) {
            $this->oehhfrttaxamt1 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTTAXAMT1] = true;
        }

        return $this;
    } // setOehhfrttaxamt1()

    /**
     * Set the value of [oehhfrttaxcode2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrttaxcode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrttaxcode2 !== $v) {
            $this->oehhfrttaxcode2 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTTAXCODE2] = true;
        }

        return $this;
    } // setOehhfrttaxcode2()

    /**
     * Set the value of [oehhfrttaxamt2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrttaxamt2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrttaxamt2 !== $v) {
            $this->oehhfrttaxamt2 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTTAXAMT2] = true;
        }

        return $this;
    } // setOehhfrttaxamt2()

    /**
     * Set the value of [oehhfrttaxcode3] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrttaxcode3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrttaxcode3 !== $v) {
            $this->oehhfrttaxcode3 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTTAXCODE3] = true;
        }

        return $this;
    } // setOehhfrttaxcode3()

    /**
     * Set the value of [oehhfrttaxamt3] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrttaxamt3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrttaxamt3 !== $v) {
            $this->oehhfrttaxamt3 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTTAXAMT3] = true;
        }

        return $this;
    } // setOehhfrttaxamt3()

    /**
     * Set the value of [oehhfrttaxcode4] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrttaxcode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrttaxcode4 !== $v) {
            $this->oehhfrttaxcode4 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTTAXCODE4] = true;
        }

        return $this;
    } // setOehhfrttaxcode4()

    /**
     * Set the value of [oehhfrttaxamt4] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrttaxamt4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrttaxamt4 !== $v) {
            $this->oehhfrttaxamt4 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTTAXAMT4] = true;
        }

        return $this;
    } // setOehhfrttaxamt4()

    /**
     * Set the value of [oehhfrttaxcode5] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrttaxcode5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrttaxcode5 !== $v) {
            $this->oehhfrttaxcode5 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTTAXCODE5] = true;
        }

        return $this;
    } // setOehhfrttaxcode5()

    /**
     * Set the value of [oehhfrttaxamt5] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrttaxamt5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrttaxamt5 !== $v) {
            $this->oehhfrttaxamt5 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTTAXAMT5] = true;
        }

        return $this;
    } // setOehhfrttaxamt5()

    /**
     * Set the value of [oehhedi855sent] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhedi855sent($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhedi855sent !== $v) {
            $this->oehhedi855sent = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHEDI855SENT] = true;
        }

        return $this;
    } // setOehhedi855sent()

    /**
     * Set the value of [oehhfrt3rdparty] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrt3rdparty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrt3rdparty !== $v) {
            $this->oehhfrt3rdparty = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRT3RDPARTY] = true;
        }

        return $this;
    } // setOehhfrt3rdparty()

    /**
     * Set the value of [oehhfob] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfob($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfob !== $v) {
            $this->oehhfob = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFOB] = true;
        }

        return $this;
    } // setOehhfob()

    /**
     * Set the value of [oehhconfirmimagyn] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhconfirmimagyn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhconfirmimagyn !== $v) {
            $this->oehhconfirmimagyn = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCONFIRMIMAGYN] = true;
        }

        return $this;
    } // setOehhconfirmimagyn()

    /**
     * Set the value of [oehhindustconform] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhindustconform($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhindustconform !== $v) {
            $this->oehhindustconform = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHINDUSTCONFORM] = true;
        }

        return $this;
    } // setOehhindustconform()

    /**
     * Set the value of [oehhcstkconsign] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcstkconsign($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcstkconsign !== $v) {
            $this->oehhcstkconsign = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCSTKCONSIGN] = true;
        }

        return $this;
    } // setOehhcstkconsign()

    /**
     * Set the value of [oehhlmdelaycapsent] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhlmdelaycapsent($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhlmdelaycapsent !== $v) {
            $this->oehhlmdelaycapsent = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHLMDELAYCAPSENT] = true;
        }

        return $this;
    } // setOehhlmdelaycapsent()

    /**
     * Set the value of [oehhmfgid] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhmfgid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhmfgid !== $v) {
            $this->oehhmfgid = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHMFGID] = true;
        }

        return $this;
    } // setOehhmfgid()

    /**
     * Set the value of [oehhstoreid] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhstoreid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhstoreid !== $v) {
            $this->oehhstoreid = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSTOREID] = true;
        }

        return $this;
    } // setOehhstoreid()

    /**
     * Set the value of [oehhpickqueue] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhpickqueue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhpickqueue !== $v) {
            $this->oehhpickqueue = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHPICKQUEUE] = true;
        }

        return $this;
    } // setOehhpickqueue()

    /**
     * Set the value of [oehharrvdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehharrvdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehharrvdate !== $v) {
            $this->oehharrvdate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHARRVDATE] = true;
        }

        return $this;
    } // setOehharrvdate()

    /**
     * Set the value of [oehhsurchgstat] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhsurchgstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhsurchgstat !== $v) {
            $this->oehhsurchgstat = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHSURCHGSTAT] = true;
        }

        return $this;
    } // setOehhsurchgstat()

    /**
     * Set the value of [oehhfrtgrup] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhfrtgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhfrtgrup !== $v) {
            $this->oehhfrtgrup = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHFRTGRUP] = true;
        }

        return $this;
    } // setOehhfrtgrup()

    /**
     * Set the value of [oehhcommoride] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhcommoride($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhcommoride !== $v) {
            $this->oehhcommoride = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCOMMORIDE] = true;
        }

        return $this;
    } // setOehhcommoride()

    /**
     * Set the value of [oehhchrgsplt] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhchrgsplt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhchrgsplt !== $v) {
            $this->oehhchrgsplt = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHCHRGSPLT] = true;
        }

        return $this;
    } // setOehhchrgsplt()

    /**
     * Set the value of [oehhacccaprv] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhacccaprv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhacccaprv !== $v) {
            $this->oehhacccaprv = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHACCCAPRV] = true;
        }

        return $this;
    } // setOehhacccaprv()

    /**
     * Set the value of [oehhorigordrnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhorigordrnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhorigordrnbr !== $v) {
            $this->oehhorigordrnbr = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHORIGORDRNBR] = true;
        }

        return $this;
    } // setOehhorigordrnbr()

    /**
     * Set the value of [oehhpostdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhpostdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhpostdate !== $v) {
            $this->oehhpostdate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHPOSTDATE] = true;
        }

        return $this;
    } // setOehhpostdate()

    /**
     * Set the value of [oehhdiscdate1] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdiscdate1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdiscdate1 !== $v) {
            $this->oehhdiscdate1 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDISCDATE1] = true;
        }

        return $this;
    } // setOehhdiscdate1()

    /**
     * Set the value of [oehhdiscpct1] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdiscpct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdiscpct1 !== $v) {
            $this->oehhdiscpct1 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDISCPCT1] = true;
        }

        return $this;
    } // setOehhdiscpct1()

    /**
     * Set the value of [oehhduedate1] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhduedate1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhduedate1 !== $v) {
            $this->oehhduedate1 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEDATE1] = true;
        }

        return $this;
    } // setOehhduedate1()

    /**
     * Set the value of [oehhdueamt1] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdueamt1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdueamt1 !== $v) {
            $this->oehhdueamt1 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEAMT1] = true;
        }

        return $this;
    } // setOehhdueamt1()

    /**
     * Set the value of [oehhduepct1] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhduepct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhduepct1 !== $v) {
            $this->oehhduepct1 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEPCT1] = true;
        }

        return $this;
    } // setOehhduepct1()

    /**
     * Set the value of [oehhdiscdate2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdiscdate2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdiscdate2 !== $v) {
            $this->oehhdiscdate2 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDISCDATE2] = true;
        }

        return $this;
    } // setOehhdiscdate2()

    /**
     * Set the value of [oehhdiscpct2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdiscpct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdiscpct2 !== $v) {
            $this->oehhdiscpct2 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDISCPCT2] = true;
        }

        return $this;
    } // setOehhdiscpct2()

    /**
     * Set the value of [oehhduedate2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhduedate2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhduedate2 !== $v) {
            $this->oehhduedate2 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEDATE2] = true;
        }

        return $this;
    } // setOehhduedate2()

    /**
     * Set the value of [oehhdueamt2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdueamt2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdueamt2 !== $v) {
            $this->oehhdueamt2 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEAMT2] = true;
        }

        return $this;
    } // setOehhdueamt2()

    /**
     * Set the value of [oehhduepct2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhduepct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhduepct2 !== $v) {
            $this->oehhduepct2 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEPCT2] = true;
        }

        return $this;
    } // setOehhduepct2()

    /**
     * Set the value of [oehhdiscdate3] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdiscdate3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdiscdate3 !== $v) {
            $this->oehhdiscdate3 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDISCDATE3] = true;
        }

        return $this;
    } // setOehhdiscdate3()

    /**
     * Set the value of [oehhdiscpct3] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdiscpct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdiscpct3 !== $v) {
            $this->oehhdiscpct3 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDISCPCT3] = true;
        }

        return $this;
    } // setOehhdiscpct3()

    /**
     * Set the value of [oehhduedate3] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhduedate3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhduedate3 !== $v) {
            $this->oehhduedate3 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEDATE3] = true;
        }

        return $this;
    } // setOehhduedate3()

    /**
     * Set the value of [oehhdueamt3] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdueamt3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdueamt3 !== $v) {
            $this->oehhdueamt3 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEAMT3] = true;
        }

        return $this;
    } // setOehhdueamt3()

    /**
     * Set the value of [oehhduepct3] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhduepct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhduepct3 !== $v) {
            $this->oehhduepct3 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEPCT3] = true;
        }

        return $this;
    } // setOehhduepct3()

    /**
     * Set the value of [oehhdiscdate4] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdiscdate4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdiscdate4 !== $v) {
            $this->oehhdiscdate4 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDISCDATE4] = true;
        }

        return $this;
    } // setOehhdiscdate4()

    /**
     * Set the value of [oehhdiscpct4] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdiscpct4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdiscpct4 !== $v) {
            $this->oehhdiscpct4 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDISCPCT4] = true;
        }

        return $this;
    } // setOehhdiscpct4()

    /**
     * Set the value of [oehhduedate4] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhduedate4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhduedate4 !== $v) {
            $this->oehhduedate4 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEDATE4] = true;
        }

        return $this;
    } // setOehhduedate4()

    /**
     * Set the value of [oehhdueamt4] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdueamt4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdueamt4 !== $v) {
            $this->oehhdueamt4 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEAMT4] = true;
        }

        return $this;
    } // setOehhdueamt4()

    /**
     * Set the value of [oehhduepct4] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhduepct4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhduepct4 !== $v) {
            $this->oehhduepct4 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEPCT4] = true;
        }

        return $this;
    } // setOehhduepct4()

    /**
     * Set the value of [oehhdiscdate5] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdiscdate5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdiscdate5 !== $v) {
            $this->oehhdiscdate5 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDISCDATE5] = true;
        }

        return $this;
    } // setOehhdiscdate5()

    /**
     * Set the value of [oehhdiscpct5] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdiscpct5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdiscpct5 !== $v) {
            $this->oehhdiscpct5 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDISCPCT5] = true;
        }

        return $this;
    } // setOehhdiscpct5()

    /**
     * Set the value of [oehhduedate5] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhduedate5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhduedate5 !== $v) {
            $this->oehhduedate5 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEDATE5] = true;
        }

        return $this;
    } // setOehhduedate5()

    /**
     * Set the value of [oehhdueamt5] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdueamt5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdueamt5 !== $v) {
            $this->oehhdueamt5 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEAMT5] = true;
        }

        return $this;
    } // setOehhdueamt5()

    /**
     * Set the value of [oehhduepct5] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhduepct5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhduepct5 !== $v) {
            $this->oehhduepct5 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEPCT5] = true;
        }

        return $this;
    } // setOehhduepct5()

    /**
     * Set the value of [oehhdiscdate6] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdiscdate6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdiscdate6 !== $v) {
            $this->oehhdiscdate6 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDISCDATE6] = true;
        }

        return $this;
    } // setOehhdiscdate6()

    /**
     * Set the value of [oehhdiscpct6] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdiscpct6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdiscpct6 !== $v) {
            $this->oehhdiscpct6 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDISCPCT6] = true;
        }

        return $this;
    } // setOehhdiscpct6()

    /**
     * Set the value of [oehhduedate6] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhduedate6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhduedate6 !== $v) {
            $this->oehhduedate6 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEDATE6] = true;
        }

        return $this;
    } // setOehhduedate6()

    /**
     * Set the value of [oehhdueamt6] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhdueamt6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhdueamt6 !== $v) {
            $this->oehhdueamt6 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEAMT6] = true;
        }

        return $this;
    } // setOehhdueamt6()

    /**
     * Set the value of [oehhduepct6] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhduepct6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhduepct6 !== $v) {
            $this->oehhduepct6 = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHDUEPCT6] = true;
        }

        return $this;
    } // setOehhduepct6()

    /**
     * Set the value of [oehhrefnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhrefnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhrefnbr !== $v) {
            $this->oehhrefnbr = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHREFNBR] = true;
        }

        return $this;
    } // setOehhrefnbr()

    /**
     * Set the value of [oehhacprognbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhacprognbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhacprognbr !== $v) {
            $this->oehhacprognbr = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHACPROGNBR] = true;
        }

        return $this;
    } // setOehhacprognbr()

    /**
     * Set the value of [oehhacprogexpdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setOehhacprogexpdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehhacprogexpdate !== $v) {
            $this->oehhacprogexpdate = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_OEHHACPROGEXPDATE] = true;
        }

        return $this;
    } // setOehhacprogexpdate()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[SalesHistoryTableMap::COL_DUMMY] = true;
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
            if ($this->oehhnbr !== 0) {
                return false;
            }

            if ($this->oehhyear !== '') {
                return false;
            }

            if ($this->oehhstat !== 'N') {
                return false;
            }

            if ($this->oehhhold !== 'N') {
                return false;
            }

            if ($this->arcucustid !== '') {
                return false;
            }

            if ($this->arstshipid !== '') {
                return false;
            }

            if ($this->oehhstname !== '') {
                return false;
            }

            if ($this->oehhstlastname !== '') {
                return false;
            }

            if ($this->oehhstfirstname !== '') {
                return false;
            }

            if ($this->oehhstadr1 !== '') {
                return false;
            }

            if ($this->oehhstadr2 !== '') {
                return false;
            }

            if ($this->oehhstadr3 !== '') {
                return false;
            }

            if ($this->oehhstctry !== '') {
                return false;
            }

            if ($this->oehhstcity !== '') {
                return false;
            }

            if ($this->oehhststat !== '') {
                return false;
            }

            if ($this->oehhstzipcode !== '') {
                return false;
            }

            if ($this->oehhcustpo !== '') {
                return false;
            }

            if ($this->oehhordrdate !== '') {
                return false;
            }

            if ($this->artmtermcd !== '') {
                return false;
            }

            if ($this->artbshipvia !== '') {
                return false;
            }

            if ($this->arininvnbr !== '') {
                return false;
            }

            if ($this->oehhinvdate !== '') {
                return false;
            }

            if ($this->oehhglpd !== 0) {
                return false;
            }

            if ($this->arspsaleper1 !== '') {
                return false;
            }

            if ($this->oehhsp1pct !== '0.00') {
                return false;
            }

            if ($this->arspsaleper2 !== '') {
                return false;
            }

            if ($this->oehhsp2pct !== '0.00') {
                return false;
            }

            if ($this->arspsaleper3 !== '') {
                return false;
            }

            if ($this->oehhsp3pct !== '0.00') {
                return false;
            }

            if ($this->oehhcntrnbr !== 0) {
                return false;
            }

            if ($this->oehhwibatch !== 0) {
                return false;
            }

            if ($this->oehhdroprelhold !== '') {
                return false;
            }

            if ($this->oehhtaxsub !== '0.0000000') {
                return false;
            }

            if ($this->oehhnontaxsub !== '0.0000000') {
                return false;
            }

            if ($this->oehhtaxtot !== '0.0000000') {
                return false;
            }

            if ($this->oehhfrttot !== '0.0000000') {
                return false;
            }

            if ($this->oehhmisctot !== '0.0000000') {
                return false;
            }

            if ($this->oehhordrtot !== '0.0000000') {
                return false;
            }

            if ($this->oehhcosttot !== '0.0000000') {
                return false;
            }

            if ($this->oehhspcommlock !== 'N') {
                return false;
            }

            if ($this->oehhtakendate !== '') {
                return false;
            }

            if ($this->oehhtakentime !== '') {
                return false;
            }

            if ($this->oehhpickdate !== '') {
                return false;
            }

            if ($this->oehhpicktime !== '') {
                return false;
            }

            if ($this->oehhpackdate !== '') {
                return false;
            }

            if ($this->oehhpacktime !== '') {
                return false;
            }

            if ($this->oehhverifydate !== '') {
                return false;
            }

            if ($this->oehhverifytime !== '') {
                return false;
            }

            if ($this->oehhcreditmemo !== '') {
                return false;
            }

            if ($this->oehhbookedyn !== '') {
                return false;
            }

            if ($this->intbwhseorig !== '') {
                return false;
            }

            if ($this->oehhbtstat !== '') {
                return false;
            }

            if ($this->oehhshipcomp !== 'N') {
                return false;
            }

            if ($this->oehhcwoflag !== '') {
                return false;
            }

            if ($this->oehhdivision !== '') {
                return false;
            }

            if ($this->oehhtakencode !== '') {
                return false;
            }

            if ($this->oehhpickcode !== '') {
                return false;
            }

            if ($this->oehhpackcode !== '') {
                return false;
            }

            if ($this->oehhverifycode !== '') {
                return false;
            }

            if ($this->oehhtotdisc !== '0.00') {
                return false;
            }

            if ($this->oehhedirefnbrqual !== '') {
                return false;
            }

            if ($this->oehhusercode1 !== '') {
                return false;
            }

            if ($this->oehhusercode2 !== '') {
                return false;
            }

            if ($this->oehhusercode3 !== '') {
                return false;
            }

            if ($this->oehhusercode4 !== '') {
                return false;
            }

            if ($this->oehhexchctry !== '') {
                return false;
            }

            if ($this->oehhexchrate !== '0.0000000') {
                return false;
            }

            if ($this->oehhwghttot !== '0.0000000') {
                return false;
            }

            if ($this->oehhwghtoride !== 'N') {
                return false;
            }

            if ($this->oehhccinfo !== 'B') {
                return false;
            }

            if ($this->oehhboxcount !== 0) {
                return false;
            }

            if ($this->oehhrqstdate !== '') {
                return false;
            }

            if ($this->oehhcancdate !== '') {
                return false;
            }

            if ($this->oehhcrntuser !== '') {
                return false;
            }

            if ($this->oehhreleasenbr !== '') {
                return false;
            }

            if ($this->intbwhse !== '') {
                return false;
            }

            if ($this->oehhbordbuilddate !== '') {
                return false;
            }

            if ($this->oehhdeptcode !== '') {
                return false;
            }

            if ($this->oehhfrtinentered !== 'N') {
                return false;
            }

            if ($this->oehhdropshipentered !== 'N') {
                return false;
            }

            if ($this->oehherflag !== 'N') {
                return false;
            }

            if ($this->oehhfrtin !== '0.00') {
                return false;
            }

            if ($this->oehhdropship !== '0.00') {
                return false;
            }

            if ($this->oehhminorder !== '0.00') {
                return false;
            }

            if ($this->oehhcontractterms !== 'N') {
                return false;
            }

            if ($this->oehhdropshipbilled !== 'N') {
                return false;
            }

            if ($this->oehhordtyp !== 'N') {
                return false;
            }

            if ($this->oehhtracknbr !== '') {
                return false;
            }

            if ($this->oehhsource !== '') {
                return false;
            }

            if ($this->oehhccaprv !== '') {
                return false;
            }

            if ($this->oehhpickfmattype !== '') {
                return false;
            }

            if ($this->oehhinvcfmattype !== '') {
                return false;
            }

            if ($this->oehhcashamt !== '0.00') {
                return false;
            }

            if ($this->oehhcheckamt !== '0.00') {
                return false;
            }

            if ($this->oehhchecknbr !== '') {
                return false;
            }

            if ($this->oehhdepositamt !== '0.00') {
                return false;
            }

            if ($this->oehhdepositnbr !== '') {
                return false;
            }

            if ($this->oehhccamt !== '0.00') {
                return false;
            }

            if ($this->oehhotaxsub !== '0.00') {
                return false;
            }

            if ($this->oehhonontaxsub !== '0.00') {
                return false;
            }

            if ($this->oehhotaxtot !== '0.00') {
                return false;
            }

            if ($this->oehhoordrtot !== '0.00') {
                return false;
            }

            if ($this->oehhpickprintdate !== '') {
                return false;
            }

            if ($this->oehhpickprinttime !== '') {
                return false;
            }

            if ($this->oehhcont !== '') {
                return false;
            }

            if ($this->oehhcontteleintl !== 'N') {
                return false;
            }

            if ($this->oehhconttelenbr !== '') {
                return false;
            }

            if ($this->oehhcontteleext !== '') {
                return false;
            }

            if ($this->oehhcontfaxintl !== 'N') {
                return false;
            }

            if ($this->oehhcontfaxnbr !== '') {
                return false;
            }

            if ($this->oehhshipacct !== '') {
                return false;
            }

            if ($this->oehhchgdue !== '0.00') {
                return false;
            }

            if ($this->oehhaddlpricdisc !== '0.00') {
                return false;
            }

            if ($this->oehhallship !== '') {
                return false;
            }

            if ($this->oehhqtyorderamt !== '0.00') {
                return false;
            }

            if ($this->oehhcreditapplied !== '0.00') {
                return false;
            }

            if ($this->oehhinvcprintdate !== '') {
                return false;
            }

            if ($this->oehhinvcprinttime !== '') {
                return false;
            }

            if ($this->oehhdiscfrt !== '0.00') {
                return false;
            }

            if ($this->oehhorideshipcomp !== 'N') {
                return false;
            }

            if ($this->oehhcontemail !== '') {
                return false;
            }

            if ($this->oehhmanualfrt !== 'N') {
                return false;
            }

            if ($this->oehhinternalfrt !== 'N') {
                return false;
            }

            if ($this->oehhfrtcost !== '0.00') {
                return false;
            }

            if ($this->oehhroute !== '') {
                return false;
            }

            if ($this->oehhrouteseq !== 0) {
                return false;
            }

            if ($this->oehhfrttaxcode1 !== '') {
                return false;
            }

            if ($this->oehhfrttaxamt1 !== '0.00') {
                return false;
            }

            if ($this->oehhfrttaxcode2 !== '') {
                return false;
            }

            if ($this->oehhfrttaxamt2 !== '0.00') {
                return false;
            }

            if ($this->oehhfrttaxcode3 !== '') {
                return false;
            }

            if ($this->oehhfrttaxamt3 !== '0.00') {
                return false;
            }

            if ($this->oehhfrttaxcode4 !== '') {
                return false;
            }

            if ($this->oehhfrttaxamt4 !== '0.00') {
                return false;
            }

            if ($this->oehhfrttaxcode5 !== '') {
                return false;
            }

            if ($this->oehhfrttaxamt5 !== '0.00') {
                return false;
            }

            if ($this->oehhedi855sent !== '') {
                return false;
            }

            if ($this->oehhfrt3rdparty !== '0.00') {
                return false;
            }

            if ($this->oehhfob !== '') {
                return false;
            }

            if ($this->oehhconfirmimagyn !== 'N') {
                return false;
            }

            if ($this->oehhindustconform !== '') {
                return false;
            }

            if ($this->oehhcstkconsign !== '') {
                return false;
            }

            if ($this->oehhlmdelaycapsent !== '') {
                return false;
            }

            if ($this->oehhmfgid !== '') {
                return false;
            }

            if ($this->oehhstoreid !== '') {
                return false;
            }

            if ($this->oehhpickqueue !== 'N') {
                return false;
            }

            if ($this->oehharrvdate !== '') {
                return false;
            }

            if ($this->oehhsurchgstat !== 'C') {
                return false;
            }

            if ($this->oehhfrtgrup !== '') {
                return false;
            }

            if ($this->oehhcommoride !== '') {
                return false;
            }

            if ($this->oehhchrgsplt !== '') {
                return false;
            }

            if ($this->oehhacccaprv !== '') {
                return false;
            }

            if ($this->oehhorigordrnbr !== '') {
                return false;
            }

            if ($this->oehhpostdate !== '') {
                return false;
            }

            if ($this->oehhdiscdate1 !== '') {
                return false;
            }

            if ($this->oehhdiscpct1 !== '0.00') {
                return false;
            }

            if ($this->oehhduedate1 !== '') {
                return false;
            }

            if ($this->oehhdueamt1 !== '0.00') {
                return false;
            }

            if ($this->oehhduepct1 !== '0.0000000') {
                return false;
            }

            if ($this->oehhdiscdate2 !== '') {
                return false;
            }

            if ($this->oehhdiscpct2 !== '0.00') {
                return false;
            }

            if ($this->oehhduedate2 !== '') {
                return false;
            }

            if ($this->oehhdueamt2 !== '0.00') {
                return false;
            }

            if ($this->oehhduepct2 !== '0.0000000') {
                return false;
            }

            if ($this->oehhdiscdate3 !== '') {
                return false;
            }

            if ($this->oehhdiscpct3 !== '0.00') {
                return false;
            }

            if ($this->oehhduedate3 !== '') {
                return false;
            }

            if ($this->oehhdueamt3 !== '0.00') {
                return false;
            }

            if ($this->oehhduepct3 !== '0.0000000') {
                return false;
            }

            if ($this->oehhdiscdate4 !== '') {
                return false;
            }

            if ($this->oehhdiscpct4 !== '0.00') {
                return false;
            }

            if ($this->oehhduedate4 !== '') {
                return false;
            }

            if ($this->oehhdueamt4 !== '0.00') {
                return false;
            }

            if ($this->oehhduepct4 !== '0.0000000') {
                return false;
            }

            if ($this->oehhdiscdate5 !== '') {
                return false;
            }

            if ($this->oehhdiscpct5 !== '0.00') {
                return false;
            }

            if ($this->oehhduedate5 !== '') {
                return false;
            }

            if ($this->oehhdueamt5 !== '0.00') {
                return false;
            }

            if ($this->oehhduepct5 !== '0.0000000') {
                return false;
            }

            if ($this->oehhdiscdate6 !== '') {
                return false;
            }

            if ($this->oehhdiscpct6 !== '0.00') {
                return false;
            }

            if ($this->oehhduedate6 !== '') {
                return false;
            }

            if ($this->oehhdueamt6 !== '0.00') {
                return false;
            }

            if ($this->oehhduepct6 !== '0.0000000') {
                return false;
            }

            if ($this->oehhrefnbr !== '') {
                return false;
            }

            if ($this->oehhacprognbr !== '') {
                return false;
            }

            if ($this->oehhacprogexpdate !== '') {
                return false;
            }

            if ($this->dateupdtd !== '') {
                return false;
            }

            if ($this->timeupdtd !== '') {
                return false;
            }

            if ($this->dummy !== 'P') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhyear', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhyear = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SalesHistoryTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SalesHistoryTableMap::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhstname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhstname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhstlastname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhstlastname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhstfirstname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhstfirstname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhstadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhstadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhstadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhstadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhstadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhstadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhstctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhstctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhstcity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhstcity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhststat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhststat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhstzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhstzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcustpo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcustpo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhordrdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhordrdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : SalesHistoryTableMap::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmtermcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : SalesHistoryTableMap::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbshipvia = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : SalesHistoryTableMap::translateFieldName('Arininvnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arininvnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhinvdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhinvdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhglpd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhglpd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : SalesHistoryTableMap::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhsp1pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhsp1pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : SalesHistoryTableMap::translateFieldName('Arspsaleper2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhsp2pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhsp2pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : SalesHistoryTableMap::translateFieldName('Arspsaleper3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhsp3pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhsp3pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcntrnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcntrnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhwibatch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhwibatch = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdroprelhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdroprelhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhtaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhtaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhnontaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhnontaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhtaxtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhtaxtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhmisctot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhmisctot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhordrtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhordrtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcosttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcosttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhspcommlock', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhspcommlock = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhtakendate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhtakendate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhtakentime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhtakentime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhpickdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhpickdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhpicktime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhpicktime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhpackdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhpackdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhpacktime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhpacktime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhverifydate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhverifydate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhverifytime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhverifytime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcreditmemo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcreditmemo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhbookedyn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhbookedyn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : SalesHistoryTableMap::translateFieldName('Intbwhseorig', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseorig = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhbtstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhbtstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhshipcomp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhshipcomp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcwoflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcwoflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdivision', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdivision = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhtakencode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhtakencode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhpickcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhpickcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhpackcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhpackcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhverifycode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhverifycode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhtotdisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhtotdisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhedirefnbrqual', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhedirefnbrqual = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhusercode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhusercode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhusercode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhusercode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhusercode3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhusercode3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhusercode4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhusercode4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhexchctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhexchctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhexchrate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhexchrate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhwghttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhwghttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhwghtoride', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhwghtoride = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhccinfo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhccinfo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhboxcount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhboxcount = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhrqstdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhrqstdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcancdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcancdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcrntuser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcrntuser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhreleasenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhreleasenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : SalesHistoryTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhbordbuilddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhbordbuilddate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdeptcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdeptcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrtinentered', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrtinentered = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdropshipentered', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdropshipentered = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : SalesHistoryTableMap::translateFieldName('Oehherflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehherflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrtin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrtin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdropship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdropship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhminorder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhminorder = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcontractterms', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcontractterms = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdropshipbilled', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdropshipbilled = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhordtyp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhordtyp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhtracknbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhtracknbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhsource', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhsource = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhccaprv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhccaprv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhpickfmattype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhpickfmattype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhinvcfmattype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhinvcfmattype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcashamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcashamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcheckamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcheckamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhchecknbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhchecknbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 95 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdepositamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdepositamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 96 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdepositnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdepositnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 97 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhccamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhccamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 98 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhotaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhotaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 99 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhonontaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhonontaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 100 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhotaxtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhotaxtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 101 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhoordrtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhoordrtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 102 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhpickprintdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhpickprintdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 103 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhpickprinttime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhpickprinttime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 104 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcont', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcont = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 105 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcontteleintl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcontteleintl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 106 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhconttelenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhconttelenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 107 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcontteleext', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcontteleext = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 108 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcontfaxintl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcontfaxintl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 109 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcontfaxnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcontfaxnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 110 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhshipacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhshipacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 111 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhchgdue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhchgdue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 112 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhaddlpricdisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhaddlpricdisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 113 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhallship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhallship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 114 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhqtyorderamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhqtyorderamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 115 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcreditapplied', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcreditapplied = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 116 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhinvcprintdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhinvcprintdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 117 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhinvcprinttime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhinvcprinttime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 118 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdiscfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdiscfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 119 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhorideshipcomp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhorideshipcomp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 120 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcontemail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcontemail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 121 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhmanualfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhmanualfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 122 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhinternalfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhinternalfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 123 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrtcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrtcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 124 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhroute', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhroute = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 125 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhrouteseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhrouteseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 126 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrttaxcode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrttaxcode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 127 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrttaxamt1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrttaxamt1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 128 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrttaxcode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrttaxcode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 129 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrttaxamt2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrttaxamt2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 130 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrttaxcode3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrttaxcode3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 131 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrttaxamt3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrttaxamt3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 132 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrttaxcode4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrttaxcode4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 133 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrttaxamt4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrttaxamt4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 134 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrttaxcode5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrttaxcode5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 135 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrttaxamt5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrttaxamt5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 136 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhedi855sent', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhedi855sent = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 137 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrt3rdparty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrt3rdparty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 138 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfob', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfob = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 139 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhconfirmimagyn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhconfirmimagyn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 140 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhindustconform', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhindustconform = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 141 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcstkconsign', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcstkconsign = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 142 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhlmdelaycapsent', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhlmdelaycapsent = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 143 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhmfgid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhmfgid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 144 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhstoreid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhstoreid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 145 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhpickqueue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhpickqueue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 146 + $startcol : SalesHistoryTableMap::translateFieldName('Oehharrvdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehharrvdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 147 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhsurchgstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhsurchgstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 148 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhfrtgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhfrtgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 149 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhcommoride', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhcommoride = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 150 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhchrgsplt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhchrgsplt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 151 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhacccaprv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhacccaprv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 152 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhorigordrnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhorigordrnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 153 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhpostdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhpostdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 154 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdiscdate1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdiscdate1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 155 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdiscpct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdiscpct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 156 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhduedate1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhduedate1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 157 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdueamt1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdueamt1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 158 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhduepct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhduepct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 159 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdiscdate2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdiscdate2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 160 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdiscpct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdiscpct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 161 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhduedate2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhduedate2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 162 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdueamt2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdueamt2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 163 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhduepct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhduepct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 164 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdiscdate3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdiscdate3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 165 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdiscpct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdiscpct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 166 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhduedate3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhduedate3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 167 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdueamt3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdueamt3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 168 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhduepct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhduepct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 169 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdiscdate4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdiscdate4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 170 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdiscpct4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdiscpct4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 171 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhduedate4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhduedate4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 172 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdueamt4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdueamt4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 173 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhduepct4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhduepct4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 174 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdiscdate5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdiscdate5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 175 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdiscpct5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdiscpct5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 176 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhduedate5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhduedate5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 177 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdueamt5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdueamt5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 178 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhduepct5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhduepct5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 179 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdiscdate6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdiscdate6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 180 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdiscpct6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdiscpct6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 181 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhduedate6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhduedate6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 182 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhdueamt6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhdueamt6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 183 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhduepct6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhduepct6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 184 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhrefnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhrefnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 185 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhacprognbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhacprognbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 186 + $startcol : SalesHistoryTableMap::translateFieldName('Oehhacprogexpdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhacprogexpdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 187 + $startcol : SalesHistoryTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 188 + $startcol : SalesHistoryTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 189 + $startcol : SalesHistoryTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 190; // 190 = SalesHistoryTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\SalesHistory'), 0, $e);
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
        if ($this->aCustomer !== null && $this->arcucustid !== $this->aCustomer->getArcucustid()) {
            $this->aCustomer = null;
        }
        if ($this->aCustomerShipto !== null && $this->arcucustid !== $this->aCustomerShipto->getArcucustid()) {
            $this->aCustomerShipto = null;
        }
        if ($this->aCustomerShipto !== null && $this->arstshipid !== $this->aCustomerShipto->getArstshipid()) {
            $this->aCustomerShipto = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SalesHistoryTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSalesHistoryQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomer = null;
            $this->aCustomerShipto = null;
            $this->collSalesHistoryDetails = null;

            $this->collSalesOrderShipments = null;

            $this->collSalesHistoryLotserials = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SalesHistory::setDeleted()
     * @see SalesHistory::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSalesHistoryQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryTableMap::DATABASE_NAME);
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
                SalesHistoryTableMap::addInstanceToPool($this);
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

            if ($this->aCustomer !== null) {
                if ($this->aCustomer->isModified() || $this->aCustomer->isNew()) {
                    $affectedRows += $this->aCustomer->save($con);
                }
                $this->setCustomer($this->aCustomer);
            }

            if ($this->aCustomerShipto !== null) {
                if ($this->aCustomerShipto->isModified() || $this->aCustomerShipto->isNew()) {
                    $affectedRows += $this->aCustomerShipto->save($con);
                }
                $this->setCustomerShipto($this->aCustomerShipto);
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

            if ($this->salesOrderShipmentsScheduledForDeletion !== null) {
                if (!$this->salesOrderShipmentsScheduledForDeletion->isEmpty()) {
                    \SalesOrderShipmentQuery::create()
                        ->filterByPrimaryKeys($this->salesOrderShipmentsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->salesOrderShipmentsScheduledForDeletion = null;
                }
            }

            if ($this->collSalesOrderShipments !== null) {
                foreach ($this->collSalesOrderShipments as $referrerFK) {
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
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhNbr';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHYEAR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhYear';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhStat';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'OehhHold';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARSTSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstShipId';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'OehhStName';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTLASTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'OehhStLastName';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTFIRSTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'OehhStFirstName';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTADR1)) {
            $modifiedColumns[':p' . $index++]  = 'OehhStAdr1';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTADR2)) {
            $modifiedColumns[':p' . $index++]  = 'OehhStAdr2';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTADR3)) {
            $modifiedColumns[':p' . $index++]  = 'OehhStAdr3';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'OehhStCtry';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTCITY)) {
            $modifiedColumns[':p' . $index++]  = 'OehhStCity';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhStStat';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhStZipCode';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCUSTPO)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCustPo';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHORDRDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhOrdrDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARTMTERMCD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmTermCd';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARTBSHIPVIA)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbShipVia';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARININVNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArinInvNbr';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHINVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhInvDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHGLPD)) {
            $modifiedColumns[':p' . $index++]  = 'OehhGLPd';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARSPSALEPER1)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer1';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSP1PCT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhSp1Pct';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARSPSALEPER2)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer2';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSP2PCT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhSp2Pct';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARSPSALEPER3)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer3';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSP3PCT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhSp3Pct';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCNTRNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCntrNbr';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHWIBATCH)) {
            $modifiedColumns[':p' . $index++]  = 'OehhWiBatch';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDROPRELHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDropRelHold';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'OehhTaxSub';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHNONTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'OehhNonTaxSub';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTAXTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhTaxTot';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtTot';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHMISCTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhMiscTot';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHORDRTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhOrdrTot';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCOSTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCostTot';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSPCOMMLOCK)) {
            $modifiedColumns[':p' . $index++]  = 'OehhSpCommLock';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTAKENDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhTakenDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTAKENTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehhTakenTime';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhPickDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehhPickTime';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPACKDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhPackDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPACKTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehhPackTime';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHVERIFYDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhVerifyDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHVERIFYTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehhVerifyTime';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCREDITMEMO)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCreditMemo';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHBOOKEDYN)) {
            $modifiedColumns[':p' . $index++]  = 'OehhBookedYn';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_INTBWHSEORIG)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseOrig';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHBTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhBtStat';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSHIPCOMP)) {
            $modifiedColumns[':p' . $index++]  = 'OehhShipComp';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCWOFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCwoFlag';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDIVISION)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDivision';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTAKENCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhTakenCode';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhPickCode';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPACKCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhPackCode';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHVERIFYCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhVerifyCode';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTOTDISC)) {
            $modifiedColumns[':p' . $index++]  = 'OehhTotDisc';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHEDIREFNBRQUAL)) {
            $modifiedColumns[':p' . $index++]  = 'OehhEdiRefNbrQual';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHUSERCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'OehhUserCode1';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHUSERCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'OehhUserCode2';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHUSERCODE3)) {
            $modifiedColumns[':p' . $index++]  = 'OehhUserCode3';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHUSERCODE4)) {
            $modifiedColumns[':p' . $index++]  = 'OehhUserCode4';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHEXCHCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'OehhExchCtry';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHEXCHRATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhExchRate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHWGHTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhWghtTot';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHWGHTORIDE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhWghtOride';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCCINFO)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCcInfo';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHBOXCOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhBoxCount';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHRQSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhRqstDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCANCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCancDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCRNTUSER)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCrntUser';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHRELEASENBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhReleaseNbr';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHBORDBUILDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhBordBuildDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDEPTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDeptCode';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTINENTERED)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtInEntered';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDROPSHIPENTERED)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDropShipEntered';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHERFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OehhErFlag';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTIN)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtIn';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDROPSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDropShip';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHMINORDER)) {
            $modifiedColumns[':p' . $index++]  = 'OehhMinOrder';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTRACTTERMS)) {
            $modifiedColumns[':p' . $index++]  = 'OehhContractTerms';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDROPSHIPBILLED)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDropShipBilled';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHORDTYP)) {
            $modifiedColumns[':p' . $index++]  = 'OehhOrdTyp';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTRACKNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhTrackNbr';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSOURCE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhSource';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCCAPRV)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCcAprv';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKFMATTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhPickFmatType';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHINVCFMATTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhInvcFmatType';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCASHAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCashAmt';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCHECKAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCheckAmt';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCHECKNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCheckNbr';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDEPOSITAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDepositAmt';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDEPOSITNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDepositNbr';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCCAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCcAmt';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHOTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'OehhOTaxSub';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHONONTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'OehhONonTaxSub';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHOTAXTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhOTaxTot';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHOORDRTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhOOrdrTot';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKPRINTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhPickPrintDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKPRINTTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehhPickPrintTime';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCont';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTTELEINTL)) {
            $modifiedColumns[':p' . $index++]  = 'OehhContTeleIntl';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTTELENBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhContTeleNbr';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTTELEEXT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhContTeleExt';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTFAXINTL)) {
            $modifiedColumns[':p' . $index++]  = 'OehhContFaxIntl';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTFAXNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhContFaxNbr';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSHIPACCT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhShipAcct';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCHGDUE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhChgDue';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHADDLPRICDISC)) {
            $modifiedColumns[':p' . $index++]  = 'OehhAddlPricDisc';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHALLSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OehhAllShip';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHQTYORDERAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhQtyOrderAmt';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCREDITAPPLIED)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCreditApplied';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHINVCPRINTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhInvcPrintDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHINVCPRINTTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehhInvcPrintTime';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCFRT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDiscFrt';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHORIDESHIPCOMP)) {
            $modifiedColumns[':p' . $index++]  = 'OehhOrideShipComp';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTEMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'OehhContEmail';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHMANUALFRT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhManualFrt';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHINTERNALFRT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhInternalFrt';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtCost';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHROUTE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhRoute';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHROUTESEQ)) {
            $modifiedColumns[':p' . $index++]  = 'OehhRouteSeq';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtTaxCode1';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXAMT1)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtTaxAmt1';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtTaxCode2';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXAMT2)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtTaxAmt2';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXCODE3)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtTaxCode3';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXAMT3)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtTaxAmt3';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXCODE4)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtTaxCode4';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXAMT4)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtTaxAmt4';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXCODE5)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtTaxCode5';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXAMT5)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtTaxAmt5';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHEDI855SENT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhEdi855Sent';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRT3RDPARTY)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrt3rdParty';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFOB)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFob';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONFIRMIMAGYN)) {
            $modifiedColumns[':p' . $index++]  = 'OehhConfirmImagYn';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHINDUSTCONFORM)) {
            $modifiedColumns[':p' . $index++]  = 'OehhIndustConform';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCSTKCONSIGN)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCstkConsign';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHLMDELAYCAPSENT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhLmDelayCapSent';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHMFGID)) {
            $modifiedColumns[':p' . $index++]  = 'OehhMfgId';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTOREID)) {
            $modifiedColumns[':p' . $index++]  = 'OehhStoreId';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKQUEUE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhPickQueue';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHARRVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhArrvDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSURCHGSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhSurchgStat';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'OehhFrtGrup';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCOMMORIDE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhCommOride';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCHRGSPLT)) {
            $modifiedColumns[':p' . $index++]  = 'OehhChrgSplt';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHACCCAPRV)) {
            $modifiedColumns[':p' . $index++]  = 'OehhAcCcAprv';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHORIGORDRNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhOrigOrdrNbr';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPOSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhPostDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCDATE1)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDiscDate1';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDiscPct1';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEDATE1)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDueDate1';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEAMT1)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDueAmt1';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDuePct1';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCDATE2)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDiscDate2';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDiscPct2';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEDATE2)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDueDate2';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEAMT2)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDueAmt2';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDuePct2';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCDATE3)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDiscDate3';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDiscPct3';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEDATE3)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDueDate3';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEAMT3)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDueAmt3';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDuePct3';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCDATE4)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDiscDate4';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCPCT4)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDiscPct4';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEDATE4)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDueDate4';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEAMT4)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDueAmt4';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEPCT4)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDuePct4';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCDATE5)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDiscDate5';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCPCT5)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDiscPct5';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEDATE5)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDueDate5';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEAMT5)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDueAmt5';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEPCT5)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDuePct5';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCDATE6)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDiscDate6';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCPCT6)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDiscPct6';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEDATE6)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDueDate6';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEAMT6)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDueAmt6';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEPCT6)) {
            $modifiedColumns[':p' . $index++]  = 'OehhDuePct6';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHREFNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhRefNbr';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHACPROGNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhAcProgNbr';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHACPROGEXPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehhAcProgExpDate';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO so_head_hist (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'OehhNbr':
                        $stmt->bindValue($identifier, $this->oehhnbr, PDO::PARAM_INT);
                        break;
                    case 'OehhYear':
                        $stmt->bindValue($identifier, $this->oehhyear, PDO::PARAM_STR);
                        break;
                    case 'OehhStat':
                        $stmt->bindValue($identifier, $this->oehhstat, PDO::PARAM_STR);
                        break;
                    case 'OehhHold':
                        $stmt->bindValue($identifier, $this->oehhhold, PDO::PARAM_STR);
                        break;
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'ArstShipId':
                        $stmt->bindValue($identifier, $this->arstshipid, PDO::PARAM_STR);
                        break;
                    case 'OehhStName':
                        $stmt->bindValue($identifier, $this->oehhstname, PDO::PARAM_STR);
                        break;
                    case 'OehhStLastName':
                        $stmt->bindValue($identifier, $this->oehhstlastname, PDO::PARAM_STR);
                        break;
                    case 'OehhStFirstName':
                        $stmt->bindValue($identifier, $this->oehhstfirstname, PDO::PARAM_STR);
                        break;
                    case 'OehhStAdr1':
                        $stmt->bindValue($identifier, $this->oehhstadr1, PDO::PARAM_STR);
                        break;
                    case 'OehhStAdr2':
                        $stmt->bindValue($identifier, $this->oehhstadr2, PDO::PARAM_STR);
                        break;
                    case 'OehhStAdr3':
                        $stmt->bindValue($identifier, $this->oehhstadr3, PDO::PARAM_STR);
                        break;
                    case 'OehhStCtry':
                        $stmt->bindValue($identifier, $this->oehhstctry, PDO::PARAM_STR);
                        break;
                    case 'OehhStCity':
                        $stmt->bindValue($identifier, $this->oehhstcity, PDO::PARAM_STR);
                        break;
                    case 'OehhStStat':
                        $stmt->bindValue($identifier, $this->oehhststat, PDO::PARAM_STR);
                        break;
                    case 'OehhStZipCode':
                        $stmt->bindValue($identifier, $this->oehhstzipcode, PDO::PARAM_STR);
                        break;
                    case 'OehhCustPo':
                        $stmt->bindValue($identifier, $this->oehhcustpo, PDO::PARAM_STR);
                        break;
                    case 'OehhOrdrDate':
                        $stmt->bindValue($identifier, $this->oehhordrdate, PDO::PARAM_STR);
                        break;
                    case 'ArtmTermCd':
                        $stmt->bindValue($identifier, $this->artmtermcd, PDO::PARAM_STR);
                        break;
                    case 'ArtbShipVia':
                        $stmt->bindValue($identifier, $this->artbshipvia, PDO::PARAM_STR);
                        break;
                    case 'ArinInvNbr':
                        $stmt->bindValue($identifier, $this->arininvnbr, PDO::PARAM_STR);
                        break;
                    case 'OehhInvDate':
                        $stmt->bindValue($identifier, $this->oehhinvdate, PDO::PARAM_STR);
                        break;
                    case 'OehhGLPd':
                        $stmt->bindValue($identifier, $this->oehhglpd, PDO::PARAM_INT);
                        break;
                    case 'ArspSalePer1':
                        $stmt->bindValue($identifier, $this->arspsaleper1, PDO::PARAM_STR);
                        break;
                    case 'OehhSp1Pct':
                        $stmt->bindValue($identifier, $this->oehhsp1pct, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer2':
                        $stmt->bindValue($identifier, $this->arspsaleper2, PDO::PARAM_STR);
                        break;
                    case 'OehhSp2Pct':
                        $stmt->bindValue($identifier, $this->oehhsp2pct, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer3':
                        $stmt->bindValue($identifier, $this->arspsaleper3, PDO::PARAM_STR);
                        break;
                    case 'OehhSp3Pct':
                        $stmt->bindValue($identifier, $this->oehhsp3pct, PDO::PARAM_STR);
                        break;
                    case 'OehhCntrNbr':
                        $stmt->bindValue($identifier, $this->oehhcntrnbr, PDO::PARAM_INT);
                        break;
                    case 'OehhWiBatch':
                        $stmt->bindValue($identifier, $this->oehhwibatch, PDO::PARAM_INT);
                        break;
                    case 'OehhDropRelHold':
                        $stmt->bindValue($identifier, $this->oehhdroprelhold, PDO::PARAM_STR);
                        break;
                    case 'OehhTaxSub':
                        $stmt->bindValue($identifier, $this->oehhtaxsub, PDO::PARAM_STR);
                        break;
                    case 'OehhNonTaxSub':
                        $stmt->bindValue($identifier, $this->oehhnontaxsub, PDO::PARAM_STR);
                        break;
                    case 'OehhTaxTot':
                        $stmt->bindValue($identifier, $this->oehhtaxtot, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtTot':
                        $stmt->bindValue($identifier, $this->oehhfrttot, PDO::PARAM_STR);
                        break;
                    case 'OehhMiscTot':
                        $stmt->bindValue($identifier, $this->oehhmisctot, PDO::PARAM_STR);
                        break;
                    case 'OehhOrdrTot':
                        $stmt->bindValue($identifier, $this->oehhordrtot, PDO::PARAM_STR);
                        break;
                    case 'OehhCostTot':
                        $stmt->bindValue($identifier, $this->oehhcosttot, PDO::PARAM_STR);
                        break;
                    case 'OehhSpCommLock':
                        $stmt->bindValue($identifier, $this->oehhspcommlock, PDO::PARAM_STR);
                        break;
                    case 'OehhTakenDate':
                        $stmt->bindValue($identifier, $this->oehhtakendate, PDO::PARAM_STR);
                        break;
                    case 'OehhTakenTime':
                        $stmt->bindValue($identifier, $this->oehhtakentime, PDO::PARAM_STR);
                        break;
                    case 'OehhPickDate':
                        $stmt->bindValue($identifier, $this->oehhpickdate, PDO::PARAM_STR);
                        break;
                    case 'OehhPickTime':
                        $stmt->bindValue($identifier, $this->oehhpicktime, PDO::PARAM_STR);
                        break;
                    case 'OehhPackDate':
                        $stmt->bindValue($identifier, $this->oehhpackdate, PDO::PARAM_STR);
                        break;
                    case 'OehhPackTime':
                        $stmt->bindValue($identifier, $this->oehhpacktime, PDO::PARAM_STR);
                        break;
                    case 'OehhVerifyDate':
                        $stmt->bindValue($identifier, $this->oehhverifydate, PDO::PARAM_STR);
                        break;
                    case 'OehhVerifyTime':
                        $stmt->bindValue($identifier, $this->oehhverifytime, PDO::PARAM_STR);
                        break;
                    case 'OehhCreditMemo':
                        $stmt->bindValue($identifier, $this->oehhcreditmemo, PDO::PARAM_STR);
                        break;
                    case 'OehhBookedYn':
                        $stmt->bindValue($identifier, $this->oehhbookedyn, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseOrig':
                        $stmt->bindValue($identifier, $this->intbwhseorig, PDO::PARAM_STR);
                        break;
                    case 'OehhBtStat':
                        $stmt->bindValue($identifier, $this->oehhbtstat, PDO::PARAM_STR);
                        break;
                    case 'OehhShipComp':
                        $stmt->bindValue($identifier, $this->oehhshipcomp, PDO::PARAM_STR);
                        break;
                    case 'OehhCwoFlag':
                        $stmt->bindValue($identifier, $this->oehhcwoflag, PDO::PARAM_STR);
                        break;
                    case 'OehhDivision':
                        $stmt->bindValue($identifier, $this->oehhdivision, PDO::PARAM_STR);
                        break;
                    case 'OehhTakenCode':
                        $stmt->bindValue($identifier, $this->oehhtakencode, PDO::PARAM_STR);
                        break;
                    case 'OehhPickCode':
                        $stmt->bindValue($identifier, $this->oehhpickcode, PDO::PARAM_STR);
                        break;
                    case 'OehhPackCode':
                        $stmt->bindValue($identifier, $this->oehhpackcode, PDO::PARAM_STR);
                        break;
                    case 'OehhVerifyCode':
                        $stmt->bindValue($identifier, $this->oehhverifycode, PDO::PARAM_STR);
                        break;
                    case 'OehhTotDisc':
                        $stmt->bindValue($identifier, $this->oehhtotdisc, PDO::PARAM_STR);
                        break;
                    case 'OehhEdiRefNbrQual':
                        $stmt->bindValue($identifier, $this->oehhedirefnbrqual, PDO::PARAM_STR);
                        break;
                    case 'OehhUserCode1':
                        $stmt->bindValue($identifier, $this->oehhusercode1, PDO::PARAM_STR);
                        break;
                    case 'OehhUserCode2':
                        $stmt->bindValue($identifier, $this->oehhusercode2, PDO::PARAM_STR);
                        break;
                    case 'OehhUserCode3':
                        $stmt->bindValue($identifier, $this->oehhusercode3, PDO::PARAM_STR);
                        break;
                    case 'OehhUserCode4':
                        $stmt->bindValue($identifier, $this->oehhusercode4, PDO::PARAM_STR);
                        break;
                    case 'OehhExchCtry':
                        $stmt->bindValue($identifier, $this->oehhexchctry, PDO::PARAM_STR);
                        break;
                    case 'OehhExchRate':
                        $stmt->bindValue($identifier, $this->oehhexchrate, PDO::PARAM_STR);
                        break;
                    case 'OehhWghtTot':
                        $stmt->bindValue($identifier, $this->oehhwghttot, PDO::PARAM_STR);
                        break;
                    case 'OehhWghtOride':
                        $stmt->bindValue($identifier, $this->oehhwghtoride, PDO::PARAM_STR);
                        break;
                    case 'OehhCcInfo':
                        $stmt->bindValue($identifier, $this->oehhccinfo, PDO::PARAM_STR);
                        break;
                    case 'OehhBoxCount':
                        $stmt->bindValue($identifier, $this->oehhboxcount, PDO::PARAM_INT);
                        break;
                    case 'OehhRqstDate':
                        $stmt->bindValue($identifier, $this->oehhrqstdate, PDO::PARAM_STR);
                        break;
                    case 'OehhCancDate':
                        $stmt->bindValue($identifier, $this->oehhcancdate, PDO::PARAM_STR);
                        break;
                    case 'OehhCrntUser':
                        $stmt->bindValue($identifier, $this->oehhcrntuser, PDO::PARAM_STR);
                        break;
                    case 'OehhReleaseNbr':
                        $stmt->bindValue($identifier, $this->oehhreleasenbr, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'OehhBordBuildDate':
                        $stmt->bindValue($identifier, $this->oehhbordbuilddate, PDO::PARAM_STR);
                        break;
                    case 'OehhDeptCode':
                        $stmt->bindValue($identifier, $this->oehhdeptcode, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtInEntered':
                        $stmt->bindValue($identifier, $this->oehhfrtinentered, PDO::PARAM_STR);
                        break;
                    case 'OehhDropShipEntered':
                        $stmt->bindValue($identifier, $this->oehhdropshipentered, PDO::PARAM_STR);
                        break;
                    case 'OehhErFlag':
                        $stmt->bindValue($identifier, $this->oehherflag, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtIn':
                        $stmt->bindValue($identifier, $this->oehhfrtin, PDO::PARAM_STR);
                        break;
                    case 'OehhDropShip':
                        $stmt->bindValue($identifier, $this->oehhdropship, PDO::PARAM_STR);
                        break;
                    case 'OehhMinOrder':
                        $stmt->bindValue($identifier, $this->oehhminorder, PDO::PARAM_STR);
                        break;
                    case 'OehhContractTerms':
                        $stmt->bindValue($identifier, $this->oehhcontractterms, PDO::PARAM_STR);
                        break;
                    case 'OehhDropShipBilled':
                        $stmt->bindValue($identifier, $this->oehhdropshipbilled, PDO::PARAM_STR);
                        break;
                    case 'OehhOrdTyp':
                        $stmt->bindValue($identifier, $this->oehhordtyp, PDO::PARAM_STR);
                        break;
                    case 'OehhTrackNbr':
                        $stmt->bindValue($identifier, $this->oehhtracknbr, PDO::PARAM_STR);
                        break;
                    case 'OehhSource':
                        $stmt->bindValue($identifier, $this->oehhsource, PDO::PARAM_STR);
                        break;
                    case 'OehhCcAprv':
                        $stmt->bindValue($identifier, $this->oehhccaprv, PDO::PARAM_STR);
                        break;
                    case 'OehhPickFmatType':
                        $stmt->bindValue($identifier, $this->oehhpickfmattype, PDO::PARAM_STR);
                        break;
                    case 'OehhInvcFmatType':
                        $stmt->bindValue($identifier, $this->oehhinvcfmattype, PDO::PARAM_STR);
                        break;
                    case 'OehhCashAmt':
                        $stmt->bindValue($identifier, $this->oehhcashamt, PDO::PARAM_STR);
                        break;
                    case 'OehhCheckAmt':
                        $stmt->bindValue($identifier, $this->oehhcheckamt, PDO::PARAM_STR);
                        break;
                    case 'OehhCheckNbr':
                        $stmt->bindValue($identifier, $this->oehhchecknbr, PDO::PARAM_STR);
                        break;
                    case 'OehhDepositAmt':
                        $stmt->bindValue($identifier, $this->oehhdepositamt, PDO::PARAM_STR);
                        break;
                    case 'OehhDepositNbr':
                        $stmt->bindValue($identifier, $this->oehhdepositnbr, PDO::PARAM_STR);
                        break;
                    case 'OehhCcAmt':
                        $stmt->bindValue($identifier, $this->oehhccamt, PDO::PARAM_STR);
                        break;
                    case 'OehhOTaxSub':
                        $stmt->bindValue($identifier, $this->oehhotaxsub, PDO::PARAM_STR);
                        break;
                    case 'OehhONonTaxSub':
                        $stmt->bindValue($identifier, $this->oehhonontaxsub, PDO::PARAM_STR);
                        break;
                    case 'OehhOTaxTot':
                        $stmt->bindValue($identifier, $this->oehhotaxtot, PDO::PARAM_STR);
                        break;
                    case 'OehhOOrdrTot':
                        $stmt->bindValue($identifier, $this->oehhoordrtot, PDO::PARAM_STR);
                        break;
                    case 'OehhPickPrintDate':
                        $stmt->bindValue($identifier, $this->oehhpickprintdate, PDO::PARAM_STR);
                        break;
                    case 'OehhPickPrintTime':
                        $stmt->bindValue($identifier, $this->oehhpickprinttime, PDO::PARAM_STR);
                        break;
                    case 'OehhCont':
                        $stmt->bindValue($identifier, $this->oehhcont, PDO::PARAM_STR);
                        break;
                    case 'OehhContTeleIntl':
                        $stmt->bindValue($identifier, $this->oehhcontteleintl, PDO::PARAM_STR);
                        break;
                    case 'OehhContTeleNbr':
                        $stmt->bindValue($identifier, $this->oehhconttelenbr, PDO::PARAM_STR);
                        break;
                    case 'OehhContTeleExt':
                        $stmt->bindValue($identifier, $this->oehhcontteleext, PDO::PARAM_STR);
                        break;
                    case 'OehhContFaxIntl':
                        $stmt->bindValue($identifier, $this->oehhcontfaxintl, PDO::PARAM_STR);
                        break;
                    case 'OehhContFaxNbr':
                        $stmt->bindValue($identifier, $this->oehhcontfaxnbr, PDO::PARAM_STR);
                        break;
                    case 'OehhShipAcct':
                        $stmt->bindValue($identifier, $this->oehhshipacct, PDO::PARAM_STR);
                        break;
                    case 'OehhChgDue':
                        $stmt->bindValue($identifier, $this->oehhchgdue, PDO::PARAM_STR);
                        break;
                    case 'OehhAddlPricDisc':
                        $stmt->bindValue($identifier, $this->oehhaddlpricdisc, PDO::PARAM_STR);
                        break;
                    case 'OehhAllShip':
                        $stmt->bindValue($identifier, $this->oehhallship, PDO::PARAM_STR);
                        break;
                    case 'OehhQtyOrderAmt':
                        $stmt->bindValue($identifier, $this->oehhqtyorderamt, PDO::PARAM_STR);
                        break;
                    case 'OehhCreditApplied':
                        $stmt->bindValue($identifier, $this->oehhcreditapplied, PDO::PARAM_STR);
                        break;
                    case 'OehhInvcPrintDate':
                        $stmt->bindValue($identifier, $this->oehhinvcprintdate, PDO::PARAM_STR);
                        break;
                    case 'OehhInvcPrintTime':
                        $stmt->bindValue($identifier, $this->oehhinvcprinttime, PDO::PARAM_STR);
                        break;
                    case 'OehhDiscFrt':
                        $stmt->bindValue($identifier, $this->oehhdiscfrt, PDO::PARAM_STR);
                        break;
                    case 'OehhOrideShipComp':
                        $stmt->bindValue($identifier, $this->oehhorideshipcomp, PDO::PARAM_STR);
                        break;
                    case 'OehhContEmail':
                        $stmt->bindValue($identifier, $this->oehhcontemail, PDO::PARAM_STR);
                        break;
                    case 'OehhManualFrt':
                        $stmt->bindValue($identifier, $this->oehhmanualfrt, PDO::PARAM_STR);
                        break;
                    case 'OehhInternalFrt':
                        $stmt->bindValue($identifier, $this->oehhinternalfrt, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtCost':
                        $stmt->bindValue($identifier, $this->oehhfrtcost, PDO::PARAM_STR);
                        break;
                    case 'OehhRoute':
                        $stmt->bindValue($identifier, $this->oehhroute, PDO::PARAM_STR);
                        break;
                    case 'OehhRouteSeq':
                        $stmt->bindValue($identifier, $this->oehhrouteseq, PDO::PARAM_INT);
                        break;
                    case 'OehhFrtTaxCode1':
                        $stmt->bindValue($identifier, $this->oehhfrttaxcode1, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtTaxAmt1':
                        $stmt->bindValue($identifier, $this->oehhfrttaxamt1, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtTaxCode2':
                        $stmt->bindValue($identifier, $this->oehhfrttaxcode2, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtTaxAmt2':
                        $stmt->bindValue($identifier, $this->oehhfrttaxamt2, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtTaxCode3':
                        $stmt->bindValue($identifier, $this->oehhfrttaxcode3, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtTaxAmt3':
                        $stmt->bindValue($identifier, $this->oehhfrttaxamt3, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtTaxCode4':
                        $stmt->bindValue($identifier, $this->oehhfrttaxcode4, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtTaxAmt4':
                        $stmt->bindValue($identifier, $this->oehhfrttaxamt4, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtTaxCode5':
                        $stmt->bindValue($identifier, $this->oehhfrttaxcode5, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtTaxAmt5':
                        $stmt->bindValue($identifier, $this->oehhfrttaxamt5, PDO::PARAM_STR);
                        break;
                    case 'OehhEdi855Sent':
                        $stmt->bindValue($identifier, $this->oehhedi855sent, PDO::PARAM_STR);
                        break;
                    case 'OehhFrt3rdParty':
                        $stmt->bindValue($identifier, $this->oehhfrt3rdparty, PDO::PARAM_STR);
                        break;
                    case 'OehhFob':
                        $stmt->bindValue($identifier, $this->oehhfob, PDO::PARAM_STR);
                        break;
                    case 'OehhConfirmImagYn':
                        $stmt->bindValue($identifier, $this->oehhconfirmimagyn, PDO::PARAM_STR);
                        break;
                    case 'OehhIndustConform':
                        $stmt->bindValue($identifier, $this->oehhindustconform, PDO::PARAM_STR);
                        break;
                    case 'OehhCstkConsign':
                        $stmt->bindValue($identifier, $this->oehhcstkconsign, PDO::PARAM_STR);
                        break;
                    case 'OehhLmDelayCapSent':
                        $stmt->bindValue($identifier, $this->oehhlmdelaycapsent, PDO::PARAM_STR);
                        break;
                    case 'OehhMfgId':
                        $stmt->bindValue($identifier, $this->oehhmfgid, PDO::PARAM_STR);
                        break;
                    case 'OehhStoreId':
                        $stmt->bindValue($identifier, $this->oehhstoreid, PDO::PARAM_STR);
                        break;
                    case 'OehhPickQueue':
                        $stmt->bindValue($identifier, $this->oehhpickqueue, PDO::PARAM_STR);
                        break;
                    case 'OehhArrvDate':
                        $stmt->bindValue($identifier, $this->oehharrvdate, PDO::PARAM_STR);
                        break;
                    case 'OehhSurchgStat':
                        $stmt->bindValue($identifier, $this->oehhsurchgstat, PDO::PARAM_STR);
                        break;
                    case 'OehhFrtGrup':
                        $stmt->bindValue($identifier, $this->oehhfrtgrup, PDO::PARAM_STR);
                        break;
                    case 'OehhCommOride':
                        $stmt->bindValue($identifier, $this->oehhcommoride, PDO::PARAM_STR);
                        break;
                    case 'OehhChrgSplt':
                        $stmt->bindValue($identifier, $this->oehhchrgsplt, PDO::PARAM_STR);
                        break;
                    case 'OehhAcCcAprv':
                        $stmt->bindValue($identifier, $this->oehhacccaprv, PDO::PARAM_STR);
                        break;
                    case 'OehhOrigOrdrNbr':
                        $stmt->bindValue($identifier, $this->oehhorigordrnbr, PDO::PARAM_STR);
                        break;
                    case 'OehhPostDate':
                        $stmt->bindValue($identifier, $this->oehhpostdate, PDO::PARAM_STR);
                        break;
                    case 'OehhDiscDate1':
                        $stmt->bindValue($identifier, $this->oehhdiscdate1, PDO::PARAM_STR);
                        break;
                    case 'OehhDiscPct1':
                        $stmt->bindValue($identifier, $this->oehhdiscpct1, PDO::PARAM_STR);
                        break;
                    case 'OehhDueDate1':
                        $stmt->bindValue($identifier, $this->oehhduedate1, PDO::PARAM_STR);
                        break;
                    case 'OehhDueAmt1':
                        $stmt->bindValue($identifier, $this->oehhdueamt1, PDO::PARAM_STR);
                        break;
                    case 'OehhDuePct1':
                        $stmt->bindValue($identifier, $this->oehhduepct1, PDO::PARAM_STR);
                        break;
                    case 'OehhDiscDate2':
                        $stmt->bindValue($identifier, $this->oehhdiscdate2, PDO::PARAM_STR);
                        break;
                    case 'OehhDiscPct2':
                        $stmt->bindValue($identifier, $this->oehhdiscpct2, PDO::PARAM_STR);
                        break;
                    case 'OehhDueDate2':
                        $stmt->bindValue($identifier, $this->oehhduedate2, PDO::PARAM_STR);
                        break;
                    case 'OehhDueAmt2':
                        $stmt->bindValue($identifier, $this->oehhdueamt2, PDO::PARAM_STR);
                        break;
                    case 'OehhDuePct2':
                        $stmt->bindValue($identifier, $this->oehhduepct2, PDO::PARAM_STR);
                        break;
                    case 'OehhDiscDate3':
                        $stmt->bindValue($identifier, $this->oehhdiscdate3, PDO::PARAM_STR);
                        break;
                    case 'OehhDiscPct3':
                        $stmt->bindValue($identifier, $this->oehhdiscpct3, PDO::PARAM_STR);
                        break;
                    case 'OehhDueDate3':
                        $stmt->bindValue($identifier, $this->oehhduedate3, PDO::PARAM_STR);
                        break;
                    case 'OehhDueAmt3':
                        $stmt->bindValue($identifier, $this->oehhdueamt3, PDO::PARAM_STR);
                        break;
                    case 'OehhDuePct3':
                        $stmt->bindValue($identifier, $this->oehhduepct3, PDO::PARAM_STR);
                        break;
                    case 'OehhDiscDate4':
                        $stmt->bindValue($identifier, $this->oehhdiscdate4, PDO::PARAM_STR);
                        break;
                    case 'OehhDiscPct4':
                        $stmt->bindValue($identifier, $this->oehhdiscpct4, PDO::PARAM_STR);
                        break;
                    case 'OehhDueDate4':
                        $stmt->bindValue($identifier, $this->oehhduedate4, PDO::PARAM_STR);
                        break;
                    case 'OehhDueAmt4':
                        $stmt->bindValue($identifier, $this->oehhdueamt4, PDO::PARAM_STR);
                        break;
                    case 'OehhDuePct4':
                        $stmt->bindValue($identifier, $this->oehhduepct4, PDO::PARAM_STR);
                        break;
                    case 'OehhDiscDate5':
                        $stmt->bindValue($identifier, $this->oehhdiscdate5, PDO::PARAM_STR);
                        break;
                    case 'OehhDiscPct5':
                        $stmt->bindValue($identifier, $this->oehhdiscpct5, PDO::PARAM_STR);
                        break;
                    case 'OehhDueDate5':
                        $stmt->bindValue($identifier, $this->oehhduedate5, PDO::PARAM_STR);
                        break;
                    case 'OehhDueAmt5':
                        $stmt->bindValue($identifier, $this->oehhdueamt5, PDO::PARAM_STR);
                        break;
                    case 'OehhDuePct5':
                        $stmt->bindValue($identifier, $this->oehhduepct5, PDO::PARAM_STR);
                        break;
                    case 'OehhDiscDate6':
                        $stmt->bindValue($identifier, $this->oehhdiscdate6, PDO::PARAM_STR);
                        break;
                    case 'OehhDiscPct6':
                        $stmt->bindValue($identifier, $this->oehhdiscpct6, PDO::PARAM_STR);
                        break;
                    case 'OehhDueDate6':
                        $stmt->bindValue($identifier, $this->oehhduedate6, PDO::PARAM_STR);
                        break;
                    case 'OehhDueAmt6':
                        $stmt->bindValue($identifier, $this->oehhdueamt6, PDO::PARAM_STR);
                        break;
                    case 'OehhDuePct6':
                        $stmt->bindValue($identifier, $this->oehhduepct6, PDO::PARAM_STR);
                        break;
                    case 'OehhRefNbr':
                        $stmt->bindValue($identifier, $this->oehhrefnbr, PDO::PARAM_STR);
                        break;
                    case 'OehhAcProgNbr':
                        $stmt->bindValue($identifier, $this->oehhacprognbr, PDO::PARAM_STR);
                        break;
                    case 'OehhAcProgExpDate':
                        $stmt->bindValue($identifier, $this->oehhacprogexpdate, PDO::PARAM_STR);
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
        $pos = SalesHistoryTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOehhnbr();
                break;
            case 1:
                return $this->getOehhyear();
                break;
            case 2:
                return $this->getOehhstat();
                break;
            case 3:
                return $this->getOehhhold();
                break;
            case 4:
                return $this->getArcucustid();
                break;
            case 5:
                return $this->getArstshipid();
                break;
            case 6:
                return $this->getOehhstname();
                break;
            case 7:
                return $this->getOehhstlastname();
                break;
            case 8:
                return $this->getOehhstfirstname();
                break;
            case 9:
                return $this->getOehhstadr1();
                break;
            case 10:
                return $this->getOehhstadr2();
                break;
            case 11:
                return $this->getOehhstadr3();
                break;
            case 12:
                return $this->getOehhstctry();
                break;
            case 13:
                return $this->getOehhstcity();
                break;
            case 14:
                return $this->getOehhststat();
                break;
            case 15:
                return $this->getOehhstzipcode();
                break;
            case 16:
                return $this->getOehhcustpo();
                break;
            case 17:
                return $this->getOehhordrdate();
                break;
            case 18:
                return $this->getArtmtermcd();
                break;
            case 19:
                return $this->getArtbshipvia();
                break;
            case 20:
                return $this->getArininvnbr();
                break;
            case 21:
                return $this->getOehhinvdate();
                break;
            case 22:
                return $this->getOehhglpd();
                break;
            case 23:
                return $this->getArspsaleper1();
                break;
            case 24:
                return $this->getOehhsp1pct();
                break;
            case 25:
                return $this->getArspsaleper2();
                break;
            case 26:
                return $this->getOehhsp2pct();
                break;
            case 27:
                return $this->getArspsaleper3();
                break;
            case 28:
                return $this->getOehhsp3pct();
                break;
            case 29:
                return $this->getOehhcntrnbr();
                break;
            case 30:
                return $this->getOehhwibatch();
                break;
            case 31:
                return $this->getOehhdroprelhold();
                break;
            case 32:
                return $this->getOehhtaxsub();
                break;
            case 33:
                return $this->getOehhnontaxsub();
                break;
            case 34:
                return $this->getOehhtaxtot();
                break;
            case 35:
                return $this->getOehhfrttot();
                break;
            case 36:
                return $this->getOehhmisctot();
                break;
            case 37:
                return $this->getOehhordrtot();
                break;
            case 38:
                return $this->getOehhcosttot();
                break;
            case 39:
                return $this->getOehhspcommlock();
                break;
            case 40:
                return $this->getOehhtakendate();
                break;
            case 41:
                return $this->getOehhtakentime();
                break;
            case 42:
                return $this->getOehhpickdate();
                break;
            case 43:
                return $this->getOehhpicktime();
                break;
            case 44:
                return $this->getOehhpackdate();
                break;
            case 45:
                return $this->getOehhpacktime();
                break;
            case 46:
                return $this->getOehhverifydate();
                break;
            case 47:
                return $this->getOehhverifytime();
                break;
            case 48:
                return $this->getOehhcreditmemo();
                break;
            case 49:
                return $this->getOehhbookedyn();
                break;
            case 50:
                return $this->getIntbwhseorig();
                break;
            case 51:
                return $this->getOehhbtstat();
                break;
            case 52:
                return $this->getOehhshipcomp();
                break;
            case 53:
                return $this->getOehhcwoflag();
                break;
            case 54:
                return $this->getOehhdivision();
                break;
            case 55:
                return $this->getOehhtakencode();
                break;
            case 56:
                return $this->getOehhpickcode();
                break;
            case 57:
                return $this->getOehhpackcode();
                break;
            case 58:
                return $this->getOehhverifycode();
                break;
            case 59:
                return $this->getOehhtotdisc();
                break;
            case 60:
                return $this->getOehhedirefnbrqual();
                break;
            case 61:
                return $this->getOehhusercode1();
                break;
            case 62:
                return $this->getOehhusercode2();
                break;
            case 63:
                return $this->getOehhusercode3();
                break;
            case 64:
                return $this->getOehhusercode4();
                break;
            case 65:
                return $this->getOehhexchctry();
                break;
            case 66:
                return $this->getOehhexchrate();
                break;
            case 67:
                return $this->getOehhwghttot();
                break;
            case 68:
                return $this->getOehhwghtoride();
                break;
            case 69:
                return $this->getOehhccinfo();
                break;
            case 70:
                return $this->getOehhboxcount();
                break;
            case 71:
                return $this->getOehhrqstdate();
                break;
            case 72:
                return $this->getOehhcancdate();
                break;
            case 73:
                return $this->getOehhcrntuser();
                break;
            case 74:
                return $this->getOehhreleasenbr();
                break;
            case 75:
                return $this->getIntbwhse();
                break;
            case 76:
                return $this->getOehhbordbuilddate();
                break;
            case 77:
                return $this->getOehhdeptcode();
                break;
            case 78:
                return $this->getOehhfrtinentered();
                break;
            case 79:
                return $this->getOehhdropshipentered();
                break;
            case 80:
                return $this->getOehherflag();
                break;
            case 81:
                return $this->getOehhfrtin();
                break;
            case 82:
                return $this->getOehhdropship();
                break;
            case 83:
                return $this->getOehhminorder();
                break;
            case 84:
                return $this->getOehhcontractterms();
                break;
            case 85:
                return $this->getOehhdropshipbilled();
                break;
            case 86:
                return $this->getOehhordtyp();
                break;
            case 87:
                return $this->getOehhtracknbr();
                break;
            case 88:
                return $this->getOehhsource();
                break;
            case 89:
                return $this->getOehhccaprv();
                break;
            case 90:
                return $this->getOehhpickfmattype();
                break;
            case 91:
                return $this->getOehhinvcfmattype();
                break;
            case 92:
                return $this->getOehhcashamt();
                break;
            case 93:
                return $this->getOehhcheckamt();
                break;
            case 94:
                return $this->getOehhchecknbr();
                break;
            case 95:
                return $this->getOehhdepositamt();
                break;
            case 96:
                return $this->getOehhdepositnbr();
                break;
            case 97:
                return $this->getOehhccamt();
                break;
            case 98:
                return $this->getOehhotaxsub();
                break;
            case 99:
                return $this->getOehhonontaxsub();
                break;
            case 100:
                return $this->getOehhotaxtot();
                break;
            case 101:
                return $this->getOehhoordrtot();
                break;
            case 102:
                return $this->getOehhpickprintdate();
                break;
            case 103:
                return $this->getOehhpickprinttime();
                break;
            case 104:
                return $this->getOehhcont();
                break;
            case 105:
                return $this->getOehhcontteleintl();
                break;
            case 106:
                return $this->getOehhconttelenbr();
                break;
            case 107:
                return $this->getOehhcontteleext();
                break;
            case 108:
                return $this->getOehhcontfaxintl();
                break;
            case 109:
                return $this->getOehhcontfaxnbr();
                break;
            case 110:
                return $this->getOehhshipacct();
                break;
            case 111:
                return $this->getOehhchgdue();
                break;
            case 112:
                return $this->getOehhaddlpricdisc();
                break;
            case 113:
                return $this->getOehhallship();
                break;
            case 114:
                return $this->getOehhqtyorderamt();
                break;
            case 115:
                return $this->getOehhcreditapplied();
                break;
            case 116:
                return $this->getOehhinvcprintdate();
                break;
            case 117:
                return $this->getOehhinvcprinttime();
                break;
            case 118:
                return $this->getOehhdiscfrt();
                break;
            case 119:
                return $this->getOehhorideshipcomp();
                break;
            case 120:
                return $this->getOehhcontemail();
                break;
            case 121:
                return $this->getOehhmanualfrt();
                break;
            case 122:
                return $this->getOehhinternalfrt();
                break;
            case 123:
                return $this->getOehhfrtcost();
                break;
            case 124:
                return $this->getOehhroute();
                break;
            case 125:
                return $this->getOehhrouteseq();
                break;
            case 126:
                return $this->getOehhfrttaxcode1();
                break;
            case 127:
                return $this->getOehhfrttaxamt1();
                break;
            case 128:
                return $this->getOehhfrttaxcode2();
                break;
            case 129:
                return $this->getOehhfrttaxamt2();
                break;
            case 130:
                return $this->getOehhfrttaxcode3();
                break;
            case 131:
                return $this->getOehhfrttaxamt3();
                break;
            case 132:
                return $this->getOehhfrttaxcode4();
                break;
            case 133:
                return $this->getOehhfrttaxamt4();
                break;
            case 134:
                return $this->getOehhfrttaxcode5();
                break;
            case 135:
                return $this->getOehhfrttaxamt5();
                break;
            case 136:
                return $this->getOehhedi855sent();
                break;
            case 137:
                return $this->getOehhfrt3rdparty();
                break;
            case 138:
                return $this->getOehhfob();
                break;
            case 139:
                return $this->getOehhconfirmimagyn();
                break;
            case 140:
                return $this->getOehhindustconform();
                break;
            case 141:
                return $this->getOehhcstkconsign();
                break;
            case 142:
                return $this->getOehhlmdelaycapsent();
                break;
            case 143:
                return $this->getOehhmfgid();
                break;
            case 144:
                return $this->getOehhstoreid();
                break;
            case 145:
                return $this->getOehhpickqueue();
                break;
            case 146:
                return $this->getOehharrvdate();
                break;
            case 147:
                return $this->getOehhsurchgstat();
                break;
            case 148:
                return $this->getOehhfrtgrup();
                break;
            case 149:
                return $this->getOehhcommoride();
                break;
            case 150:
                return $this->getOehhchrgsplt();
                break;
            case 151:
                return $this->getOehhacccaprv();
                break;
            case 152:
                return $this->getOehhorigordrnbr();
                break;
            case 153:
                return $this->getOehhpostdate();
                break;
            case 154:
                return $this->getOehhdiscdate1();
                break;
            case 155:
                return $this->getOehhdiscpct1();
                break;
            case 156:
                return $this->getOehhduedate1();
                break;
            case 157:
                return $this->getOehhdueamt1();
                break;
            case 158:
                return $this->getOehhduepct1();
                break;
            case 159:
                return $this->getOehhdiscdate2();
                break;
            case 160:
                return $this->getOehhdiscpct2();
                break;
            case 161:
                return $this->getOehhduedate2();
                break;
            case 162:
                return $this->getOehhdueamt2();
                break;
            case 163:
                return $this->getOehhduepct2();
                break;
            case 164:
                return $this->getOehhdiscdate3();
                break;
            case 165:
                return $this->getOehhdiscpct3();
                break;
            case 166:
                return $this->getOehhduedate3();
                break;
            case 167:
                return $this->getOehhdueamt3();
                break;
            case 168:
                return $this->getOehhduepct3();
                break;
            case 169:
                return $this->getOehhdiscdate4();
                break;
            case 170:
                return $this->getOehhdiscpct4();
                break;
            case 171:
                return $this->getOehhduedate4();
                break;
            case 172:
                return $this->getOehhdueamt4();
                break;
            case 173:
                return $this->getOehhduepct4();
                break;
            case 174:
                return $this->getOehhdiscdate5();
                break;
            case 175:
                return $this->getOehhdiscpct5();
                break;
            case 176:
                return $this->getOehhduedate5();
                break;
            case 177:
                return $this->getOehhdueamt5();
                break;
            case 178:
                return $this->getOehhduepct5();
                break;
            case 179:
                return $this->getOehhdiscdate6();
                break;
            case 180:
                return $this->getOehhdiscpct6();
                break;
            case 181:
                return $this->getOehhduedate6();
                break;
            case 182:
                return $this->getOehhdueamt6();
                break;
            case 183:
                return $this->getOehhduepct6();
                break;
            case 184:
                return $this->getOehhrefnbr();
                break;
            case 185:
                return $this->getOehhacprognbr();
                break;
            case 186:
                return $this->getOehhacprogexpdate();
                break;
            case 187:
                return $this->getDateupdtd();
                break;
            case 188:
                return $this->getTimeupdtd();
                break;
            case 189:
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

        if (isset($alreadyDumpedObjects['SalesHistory'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SalesHistory'][$this->hashCode()] = true;
        $keys = SalesHistoryTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOehhnbr(),
            $keys[1] => $this->getOehhyear(),
            $keys[2] => $this->getOehhstat(),
            $keys[3] => $this->getOehhhold(),
            $keys[4] => $this->getArcucustid(),
            $keys[5] => $this->getArstshipid(),
            $keys[6] => $this->getOehhstname(),
            $keys[7] => $this->getOehhstlastname(),
            $keys[8] => $this->getOehhstfirstname(),
            $keys[9] => $this->getOehhstadr1(),
            $keys[10] => $this->getOehhstadr2(),
            $keys[11] => $this->getOehhstadr3(),
            $keys[12] => $this->getOehhstctry(),
            $keys[13] => $this->getOehhstcity(),
            $keys[14] => $this->getOehhststat(),
            $keys[15] => $this->getOehhstzipcode(),
            $keys[16] => $this->getOehhcustpo(),
            $keys[17] => $this->getOehhordrdate(),
            $keys[18] => $this->getArtmtermcd(),
            $keys[19] => $this->getArtbshipvia(),
            $keys[20] => $this->getArininvnbr(),
            $keys[21] => $this->getOehhinvdate(),
            $keys[22] => $this->getOehhglpd(),
            $keys[23] => $this->getArspsaleper1(),
            $keys[24] => $this->getOehhsp1pct(),
            $keys[25] => $this->getArspsaleper2(),
            $keys[26] => $this->getOehhsp2pct(),
            $keys[27] => $this->getArspsaleper3(),
            $keys[28] => $this->getOehhsp3pct(),
            $keys[29] => $this->getOehhcntrnbr(),
            $keys[30] => $this->getOehhwibatch(),
            $keys[31] => $this->getOehhdroprelhold(),
            $keys[32] => $this->getOehhtaxsub(),
            $keys[33] => $this->getOehhnontaxsub(),
            $keys[34] => $this->getOehhtaxtot(),
            $keys[35] => $this->getOehhfrttot(),
            $keys[36] => $this->getOehhmisctot(),
            $keys[37] => $this->getOehhordrtot(),
            $keys[38] => $this->getOehhcosttot(),
            $keys[39] => $this->getOehhspcommlock(),
            $keys[40] => $this->getOehhtakendate(),
            $keys[41] => $this->getOehhtakentime(),
            $keys[42] => $this->getOehhpickdate(),
            $keys[43] => $this->getOehhpicktime(),
            $keys[44] => $this->getOehhpackdate(),
            $keys[45] => $this->getOehhpacktime(),
            $keys[46] => $this->getOehhverifydate(),
            $keys[47] => $this->getOehhverifytime(),
            $keys[48] => $this->getOehhcreditmemo(),
            $keys[49] => $this->getOehhbookedyn(),
            $keys[50] => $this->getIntbwhseorig(),
            $keys[51] => $this->getOehhbtstat(),
            $keys[52] => $this->getOehhshipcomp(),
            $keys[53] => $this->getOehhcwoflag(),
            $keys[54] => $this->getOehhdivision(),
            $keys[55] => $this->getOehhtakencode(),
            $keys[56] => $this->getOehhpickcode(),
            $keys[57] => $this->getOehhpackcode(),
            $keys[58] => $this->getOehhverifycode(),
            $keys[59] => $this->getOehhtotdisc(),
            $keys[60] => $this->getOehhedirefnbrqual(),
            $keys[61] => $this->getOehhusercode1(),
            $keys[62] => $this->getOehhusercode2(),
            $keys[63] => $this->getOehhusercode3(),
            $keys[64] => $this->getOehhusercode4(),
            $keys[65] => $this->getOehhexchctry(),
            $keys[66] => $this->getOehhexchrate(),
            $keys[67] => $this->getOehhwghttot(),
            $keys[68] => $this->getOehhwghtoride(),
            $keys[69] => $this->getOehhccinfo(),
            $keys[70] => $this->getOehhboxcount(),
            $keys[71] => $this->getOehhrqstdate(),
            $keys[72] => $this->getOehhcancdate(),
            $keys[73] => $this->getOehhcrntuser(),
            $keys[74] => $this->getOehhreleasenbr(),
            $keys[75] => $this->getIntbwhse(),
            $keys[76] => $this->getOehhbordbuilddate(),
            $keys[77] => $this->getOehhdeptcode(),
            $keys[78] => $this->getOehhfrtinentered(),
            $keys[79] => $this->getOehhdropshipentered(),
            $keys[80] => $this->getOehherflag(),
            $keys[81] => $this->getOehhfrtin(),
            $keys[82] => $this->getOehhdropship(),
            $keys[83] => $this->getOehhminorder(),
            $keys[84] => $this->getOehhcontractterms(),
            $keys[85] => $this->getOehhdropshipbilled(),
            $keys[86] => $this->getOehhordtyp(),
            $keys[87] => $this->getOehhtracknbr(),
            $keys[88] => $this->getOehhsource(),
            $keys[89] => $this->getOehhccaprv(),
            $keys[90] => $this->getOehhpickfmattype(),
            $keys[91] => $this->getOehhinvcfmattype(),
            $keys[92] => $this->getOehhcashamt(),
            $keys[93] => $this->getOehhcheckamt(),
            $keys[94] => $this->getOehhchecknbr(),
            $keys[95] => $this->getOehhdepositamt(),
            $keys[96] => $this->getOehhdepositnbr(),
            $keys[97] => $this->getOehhccamt(),
            $keys[98] => $this->getOehhotaxsub(),
            $keys[99] => $this->getOehhonontaxsub(),
            $keys[100] => $this->getOehhotaxtot(),
            $keys[101] => $this->getOehhoordrtot(),
            $keys[102] => $this->getOehhpickprintdate(),
            $keys[103] => $this->getOehhpickprinttime(),
            $keys[104] => $this->getOehhcont(),
            $keys[105] => $this->getOehhcontteleintl(),
            $keys[106] => $this->getOehhconttelenbr(),
            $keys[107] => $this->getOehhcontteleext(),
            $keys[108] => $this->getOehhcontfaxintl(),
            $keys[109] => $this->getOehhcontfaxnbr(),
            $keys[110] => $this->getOehhshipacct(),
            $keys[111] => $this->getOehhchgdue(),
            $keys[112] => $this->getOehhaddlpricdisc(),
            $keys[113] => $this->getOehhallship(),
            $keys[114] => $this->getOehhqtyorderamt(),
            $keys[115] => $this->getOehhcreditapplied(),
            $keys[116] => $this->getOehhinvcprintdate(),
            $keys[117] => $this->getOehhinvcprinttime(),
            $keys[118] => $this->getOehhdiscfrt(),
            $keys[119] => $this->getOehhorideshipcomp(),
            $keys[120] => $this->getOehhcontemail(),
            $keys[121] => $this->getOehhmanualfrt(),
            $keys[122] => $this->getOehhinternalfrt(),
            $keys[123] => $this->getOehhfrtcost(),
            $keys[124] => $this->getOehhroute(),
            $keys[125] => $this->getOehhrouteseq(),
            $keys[126] => $this->getOehhfrttaxcode1(),
            $keys[127] => $this->getOehhfrttaxamt1(),
            $keys[128] => $this->getOehhfrttaxcode2(),
            $keys[129] => $this->getOehhfrttaxamt2(),
            $keys[130] => $this->getOehhfrttaxcode3(),
            $keys[131] => $this->getOehhfrttaxamt3(),
            $keys[132] => $this->getOehhfrttaxcode4(),
            $keys[133] => $this->getOehhfrttaxamt4(),
            $keys[134] => $this->getOehhfrttaxcode5(),
            $keys[135] => $this->getOehhfrttaxamt5(),
            $keys[136] => $this->getOehhedi855sent(),
            $keys[137] => $this->getOehhfrt3rdparty(),
            $keys[138] => $this->getOehhfob(),
            $keys[139] => $this->getOehhconfirmimagyn(),
            $keys[140] => $this->getOehhindustconform(),
            $keys[141] => $this->getOehhcstkconsign(),
            $keys[142] => $this->getOehhlmdelaycapsent(),
            $keys[143] => $this->getOehhmfgid(),
            $keys[144] => $this->getOehhstoreid(),
            $keys[145] => $this->getOehhpickqueue(),
            $keys[146] => $this->getOehharrvdate(),
            $keys[147] => $this->getOehhsurchgstat(),
            $keys[148] => $this->getOehhfrtgrup(),
            $keys[149] => $this->getOehhcommoride(),
            $keys[150] => $this->getOehhchrgsplt(),
            $keys[151] => $this->getOehhacccaprv(),
            $keys[152] => $this->getOehhorigordrnbr(),
            $keys[153] => $this->getOehhpostdate(),
            $keys[154] => $this->getOehhdiscdate1(),
            $keys[155] => $this->getOehhdiscpct1(),
            $keys[156] => $this->getOehhduedate1(),
            $keys[157] => $this->getOehhdueamt1(),
            $keys[158] => $this->getOehhduepct1(),
            $keys[159] => $this->getOehhdiscdate2(),
            $keys[160] => $this->getOehhdiscpct2(),
            $keys[161] => $this->getOehhduedate2(),
            $keys[162] => $this->getOehhdueamt2(),
            $keys[163] => $this->getOehhduepct2(),
            $keys[164] => $this->getOehhdiscdate3(),
            $keys[165] => $this->getOehhdiscpct3(),
            $keys[166] => $this->getOehhduedate3(),
            $keys[167] => $this->getOehhdueamt3(),
            $keys[168] => $this->getOehhduepct3(),
            $keys[169] => $this->getOehhdiscdate4(),
            $keys[170] => $this->getOehhdiscpct4(),
            $keys[171] => $this->getOehhduedate4(),
            $keys[172] => $this->getOehhdueamt4(),
            $keys[173] => $this->getOehhduepct4(),
            $keys[174] => $this->getOehhdiscdate5(),
            $keys[175] => $this->getOehhdiscpct5(),
            $keys[176] => $this->getOehhduedate5(),
            $keys[177] => $this->getOehhdueamt5(),
            $keys[178] => $this->getOehhduepct5(),
            $keys[179] => $this->getOehhdiscdate6(),
            $keys[180] => $this->getOehhdiscpct6(),
            $keys[181] => $this->getOehhduedate6(),
            $keys[182] => $this->getOehhdueamt6(),
            $keys[183] => $this->getOehhduepct6(),
            $keys[184] => $this->getOehhrefnbr(),
            $keys[185] => $this->getOehhacprognbr(),
            $keys[186] => $this->getOehhacprogexpdate(),
            $keys[187] => $this->getDateupdtd(),
            $keys[188] => $this->getTimeupdtd(),
            $keys[189] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCustomer) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'customer';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_cust_mast';
                        break;
                    default:
                        $key = 'Customer';
                }

                $result[$key] = $this->aCustomer->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCustomerShipto) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'customerShipto';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ar_ship_to';
                        break;
                    default:
                        $key = 'CustomerShipto';
                }

                $result[$key] = $this->aCustomerShipto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
            if (null !== $this->collSalesOrderShipments) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesOrderShipments';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_hist_ships';
                        break;
                    default:
                        $key = 'SalesOrderShipments';
                }

                $result[$key] = $this->collSalesOrderShipments->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\SalesHistory
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = SalesHistoryTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\SalesHistory
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setOehhnbr($value);
                break;
            case 1:
                $this->setOehhyear($value);
                break;
            case 2:
                $this->setOehhstat($value);
                break;
            case 3:
                $this->setOehhhold($value);
                break;
            case 4:
                $this->setArcucustid($value);
                break;
            case 5:
                $this->setArstshipid($value);
                break;
            case 6:
                $this->setOehhstname($value);
                break;
            case 7:
                $this->setOehhstlastname($value);
                break;
            case 8:
                $this->setOehhstfirstname($value);
                break;
            case 9:
                $this->setOehhstadr1($value);
                break;
            case 10:
                $this->setOehhstadr2($value);
                break;
            case 11:
                $this->setOehhstadr3($value);
                break;
            case 12:
                $this->setOehhstctry($value);
                break;
            case 13:
                $this->setOehhstcity($value);
                break;
            case 14:
                $this->setOehhststat($value);
                break;
            case 15:
                $this->setOehhstzipcode($value);
                break;
            case 16:
                $this->setOehhcustpo($value);
                break;
            case 17:
                $this->setOehhordrdate($value);
                break;
            case 18:
                $this->setArtmtermcd($value);
                break;
            case 19:
                $this->setArtbshipvia($value);
                break;
            case 20:
                $this->setArininvnbr($value);
                break;
            case 21:
                $this->setOehhinvdate($value);
                break;
            case 22:
                $this->setOehhglpd($value);
                break;
            case 23:
                $this->setArspsaleper1($value);
                break;
            case 24:
                $this->setOehhsp1pct($value);
                break;
            case 25:
                $this->setArspsaleper2($value);
                break;
            case 26:
                $this->setOehhsp2pct($value);
                break;
            case 27:
                $this->setArspsaleper3($value);
                break;
            case 28:
                $this->setOehhsp3pct($value);
                break;
            case 29:
                $this->setOehhcntrnbr($value);
                break;
            case 30:
                $this->setOehhwibatch($value);
                break;
            case 31:
                $this->setOehhdroprelhold($value);
                break;
            case 32:
                $this->setOehhtaxsub($value);
                break;
            case 33:
                $this->setOehhnontaxsub($value);
                break;
            case 34:
                $this->setOehhtaxtot($value);
                break;
            case 35:
                $this->setOehhfrttot($value);
                break;
            case 36:
                $this->setOehhmisctot($value);
                break;
            case 37:
                $this->setOehhordrtot($value);
                break;
            case 38:
                $this->setOehhcosttot($value);
                break;
            case 39:
                $this->setOehhspcommlock($value);
                break;
            case 40:
                $this->setOehhtakendate($value);
                break;
            case 41:
                $this->setOehhtakentime($value);
                break;
            case 42:
                $this->setOehhpickdate($value);
                break;
            case 43:
                $this->setOehhpicktime($value);
                break;
            case 44:
                $this->setOehhpackdate($value);
                break;
            case 45:
                $this->setOehhpacktime($value);
                break;
            case 46:
                $this->setOehhverifydate($value);
                break;
            case 47:
                $this->setOehhverifytime($value);
                break;
            case 48:
                $this->setOehhcreditmemo($value);
                break;
            case 49:
                $this->setOehhbookedyn($value);
                break;
            case 50:
                $this->setIntbwhseorig($value);
                break;
            case 51:
                $this->setOehhbtstat($value);
                break;
            case 52:
                $this->setOehhshipcomp($value);
                break;
            case 53:
                $this->setOehhcwoflag($value);
                break;
            case 54:
                $this->setOehhdivision($value);
                break;
            case 55:
                $this->setOehhtakencode($value);
                break;
            case 56:
                $this->setOehhpickcode($value);
                break;
            case 57:
                $this->setOehhpackcode($value);
                break;
            case 58:
                $this->setOehhverifycode($value);
                break;
            case 59:
                $this->setOehhtotdisc($value);
                break;
            case 60:
                $this->setOehhedirefnbrqual($value);
                break;
            case 61:
                $this->setOehhusercode1($value);
                break;
            case 62:
                $this->setOehhusercode2($value);
                break;
            case 63:
                $this->setOehhusercode3($value);
                break;
            case 64:
                $this->setOehhusercode4($value);
                break;
            case 65:
                $this->setOehhexchctry($value);
                break;
            case 66:
                $this->setOehhexchrate($value);
                break;
            case 67:
                $this->setOehhwghttot($value);
                break;
            case 68:
                $this->setOehhwghtoride($value);
                break;
            case 69:
                $this->setOehhccinfo($value);
                break;
            case 70:
                $this->setOehhboxcount($value);
                break;
            case 71:
                $this->setOehhrqstdate($value);
                break;
            case 72:
                $this->setOehhcancdate($value);
                break;
            case 73:
                $this->setOehhcrntuser($value);
                break;
            case 74:
                $this->setOehhreleasenbr($value);
                break;
            case 75:
                $this->setIntbwhse($value);
                break;
            case 76:
                $this->setOehhbordbuilddate($value);
                break;
            case 77:
                $this->setOehhdeptcode($value);
                break;
            case 78:
                $this->setOehhfrtinentered($value);
                break;
            case 79:
                $this->setOehhdropshipentered($value);
                break;
            case 80:
                $this->setOehherflag($value);
                break;
            case 81:
                $this->setOehhfrtin($value);
                break;
            case 82:
                $this->setOehhdropship($value);
                break;
            case 83:
                $this->setOehhminorder($value);
                break;
            case 84:
                $this->setOehhcontractterms($value);
                break;
            case 85:
                $this->setOehhdropshipbilled($value);
                break;
            case 86:
                $this->setOehhordtyp($value);
                break;
            case 87:
                $this->setOehhtracknbr($value);
                break;
            case 88:
                $this->setOehhsource($value);
                break;
            case 89:
                $this->setOehhccaprv($value);
                break;
            case 90:
                $this->setOehhpickfmattype($value);
                break;
            case 91:
                $this->setOehhinvcfmattype($value);
                break;
            case 92:
                $this->setOehhcashamt($value);
                break;
            case 93:
                $this->setOehhcheckamt($value);
                break;
            case 94:
                $this->setOehhchecknbr($value);
                break;
            case 95:
                $this->setOehhdepositamt($value);
                break;
            case 96:
                $this->setOehhdepositnbr($value);
                break;
            case 97:
                $this->setOehhccamt($value);
                break;
            case 98:
                $this->setOehhotaxsub($value);
                break;
            case 99:
                $this->setOehhonontaxsub($value);
                break;
            case 100:
                $this->setOehhotaxtot($value);
                break;
            case 101:
                $this->setOehhoordrtot($value);
                break;
            case 102:
                $this->setOehhpickprintdate($value);
                break;
            case 103:
                $this->setOehhpickprinttime($value);
                break;
            case 104:
                $this->setOehhcont($value);
                break;
            case 105:
                $this->setOehhcontteleintl($value);
                break;
            case 106:
                $this->setOehhconttelenbr($value);
                break;
            case 107:
                $this->setOehhcontteleext($value);
                break;
            case 108:
                $this->setOehhcontfaxintl($value);
                break;
            case 109:
                $this->setOehhcontfaxnbr($value);
                break;
            case 110:
                $this->setOehhshipacct($value);
                break;
            case 111:
                $this->setOehhchgdue($value);
                break;
            case 112:
                $this->setOehhaddlpricdisc($value);
                break;
            case 113:
                $this->setOehhallship($value);
                break;
            case 114:
                $this->setOehhqtyorderamt($value);
                break;
            case 115:
                $this->setOehhcreditapplied($value);
                break;
            case 116:
                $this->setOehhinvcprintdate($value);
                break;
            case 117:
                $this->setOehhinvcprinttime($value);
                break;
            case 118:
                $this->setOehhdiscfrt($value);
                break;
            case 119:
                $this->setOehhorideshipcomp($value);
                break;
            case 120:
                $this->setOehhcontemail($value);
                break;
            case 121:
                $this->setOehhmanualfrt($value);
                break;
            case 122:
                $this->setOehhinternalfrt($value);
                break;
            case 123:
                $this->setOehhfrtcost($value);
                break;
            case 124:
                $this->setOehhroute($value);
                break;
            case 125:
                $this->setOehhrouteseq($value);
                break;
            case 126:
                $this->setOehhfrttaxcode1($value);
                break;
            case 127:
                $this->setOehhfrttaxamt1($value);
                break;
            case 128:
                $this->setOehhfrttaxcode2($value);
                break;
            case 129:
                $this->setOehhfrttaxamt2($value);
                break;
            case 130:
                $this->setOehhfrttaxcode3($value);
                break;
            case 131:
                $this->setOehhfrttaxamt3($value);
                break;
            case 132:
                $this->setOehhfrttaxcode4($value);
                break;
            case 133:
                $this->setOehhfrttaxamt4($value);
                break;
            case 134:
                $this->setOehhfrttaxcode5($value);
                break;
            case 135:
                $this->setOehhfrttaxamt5($value);
                break;
            case 136:
                $this->setOehhedi855sent($value);
                break;
            case 137:
                $this->setOehhfrt3rdparty($value);
                break;
            case 138:
                $this->setOehhfob($value);
                break;
            case 139:
                $this->setOehhconfirmimagyn($value);
                break;
            case 140:
                $this->setOehhindustconform($value);
                break;
            case 141:
                $this->setOehhcstkconsign($value);
                break;
            case 142:
                $this->setOehhlmdelaycapsent($value);
                break;
            case 143:
                $this->setOehhmfgid($value);
                break;
            case 144:
                $this->setOehhstoreid($value);
                break;
            case 145:
                $this->setOehhpickqueue($value);
                break;
            case 146:
                $this->setOehharrvdate($value);
                break;
            case 147:
                $this->setOehhsurchgstat($value);
                break;
            case 148:
                $this->setOehhfrtgrup($value);
                break;
            case 149:
                $this->setOehhcommoride($value);
                break;
            case 150:
                $this->setOehhchrgsplt($value);
                break;
            case 151:
                $this->setOehhacccaprv($value);
                break;
            case 152:
                $this->setOehhorigordrnbr($value);
                break;
            case 153:
                $this->setOehhpostdate($value);
                break;
            case 154:
                $this->setOehhdiscdate1($value);
                break;
            case 155:
                $this->setOehhdiscpct1($value);
                break;
            case 156:
                $this->setOehhduedate1($value);
                break;
            case 157:
                $this->setOehhdueamt1($value);
                break;
            case 158:
                $this->setOehhduepct1($value);
                break;
            case 159:
                $this->setOehhdiscdate2($value);
                break;
            case 160:
                $this->setOehhdiscpct2($value);
                break;
            case 161:
                $this->setOehhduedate2($value);
                break;
            case 162:
                $this->setOehhdueamt2($value);
                break;
            case 163:
                $this->setOehhduepct2($value);
                break;
            case 164:
                $this->setOehhdiscdate3($value);
                break;
            case 165:
                $this->setOehhdiscpct3($value);
                break;
            case 166:
                $this->setOehhduedate3($value);
                break;
            case 167:
                $this->setOehhdueamt3($value);
                break;
            case 168:
                $this->setOehhduepct3($value);
                break;
            case 169:
                $this->setOehhdiscdate4($value);
                break;
            case 170:
                $this->setOehhdiscpct4($value);
                break;
            case 171:
                $this->setOehhduedate4($value);
                break;
            case 172:
                $this->setOehhdueamt4($value);
                break;
            case 173:
                $this->setOehhduepct4($value);
                break;
            case 174:
                $this->setOehhdiscdate5($value);
                break;
            case 175:
                $this->setOehhdiscpct5($value);
                break;
            case 176:
                $this->setOehhduedate5($value);
                break;
            case 177:
                $this->setOehhdueamt5($value);
                break;
            case 178:
                $this->setOehhduepct5($value);
                break;
            case 179:
                $this->setOehhdiscdate6($value);
                break;
            case 180:
                $this->setOehhdiscpct6($value);
                break;
            case 181:
                $this->setOehhduedate6($value);
                break;
            case 182:
                $this->setOehhdueamt6($value);
                break;
            case 183:
                $this->setOehhduepct6($value);
                break;
            case 184:
                $this->setOehhrefnbr($value);
                break;
            case 185:
                $this->setOehhacprognbr($value);
                break;
            case 186:
                $this->setOehhacprogexpdate($value);
                break;
            case 187:
                $this->setDateupdtd($value);
                break;
            case 188:
                $this->setTimeupdtd($value);
                break;
            case 189:
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
        $keys = SalesHistoryTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setOehhnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOehhyear($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setOehhstat($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setOehhhold($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArcucustid($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArstshipid($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOehhstname($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOehhstlastname($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOehhstfirstname($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOehhstadr1($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOehhstadr2($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOehhstadr3($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOehhstctry($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOehhstcity($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOehhststat($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOehhstzipcode($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setOehhcustpo($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setOehhordrdate($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setArtmtermcd($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setArtbshipvia($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setArininvnbr($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setOehhinvdate($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setOehhglpd($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setArspsaleper1($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setOehhsp1pct($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setArspsaleper2($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setOehhsp2pct($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setArspsaleper3($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setOehhsp3pct($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setOehhcntrnbr($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setOehhwibatch($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setOehhdroprelhold($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setOehhtaxsub($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setOehhnontaxsub($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setOehhtaxtot($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setOehhfrttot($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setOehhmisctot($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setOehhordrtot($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setOehhcosttot($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setOehhspcommlock($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setOehhtakendate($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setOehhtakentime($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setOehhpickdate($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setOehhpicktime($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setOehhpackdate($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setOehhpacktime($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setOehhverifydate($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setOehhverifytime($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setOehhcreditmemo($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setOehhbookedyn($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setIntbwhseorig($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setOehhbtstat($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setOehhshipcomp($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setOehhcwoflag($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setOehhdivision($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setOehhtakencode($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setOehhpickcode($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setOehhpackcode($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setOehhverifycode($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setOehhtotdisc($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setOehhedirefnbrqual($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setOehhusercode1($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setOehhusercode2($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setOehhusercode3($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setOehhusercode4($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setOehhexchctry($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setOehhexchrate($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setOehhwghttot($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setOehhwghtoride($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setOehhccinfo($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setOehhboxcount($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setOehhrqstdate($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setOehhcancdate($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setOehhcrntuser($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setOehhreleasenbr($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setIntbwhse($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setOehhbordbuilddate($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setOehhdeptcode($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setOehhfrtinentered($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setOehhdropshipentered($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setOehherflag($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setOehhfrtin($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setOehhdropship($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setOehhminorder($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setOehhcontractterms($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setOehhdropshipbilled($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setOehhordtyp($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setOehhtracknbr($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setOehhsource($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setOehhccaprv($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setOehhpickfmattype($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setOehhinvcfmattype($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setOehhcashamt($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setOehhcheckamt($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setOehhchecknbr($arr[$keys[94]]);
        }
        if (array_key_exists($keys[95], $arr)) {
            $this->setOehhdepositamt($arr[$keys[95]]);
        }
        if (array_key_exists($keys[96], $arr)) {
            $this->setOehhdepositnbr($arr[$keys[96]]);
        }
        if (array_key_exists($keys[97], $arr)) {
            $this->setOehhccamt($arr[$keys[97]]);
        }
        if (array_key_exists($keys[98], $arr)) {
            $this->setOehhotaxsub($arr[$keys[98]]);
        }
        if (array_key_exists($keys[99], $arr)) {
            $this->setOehhonontaxsub($arr[$keys[99]]);
        }
        if (array_key_exists($keys[100], $arr)) {
            $this->setOehhotaxtot($arr[$keys[100]]);
        }
        if (array_key_exists($keys[101], $arr)) {
            $this->setOehhoordrtot($arr[$keys[101]]);
        }
        if (array_key_exists($keys[102], $arr)) {
            $this->setOehhpickprintdate($arr[$keys[102]]);
        }
        if (array_key_exists($keys[103], $arr)) {
            $this->setOehhpickprinttime($arr[$keys[103]]);
        }
        if (array_key_exists($keys[104], $arr)) {
            $this->setOehhcont($arr[$keys[104]]);
        }
        if (array_key_exists($keys[105], $arr)) {
            $this->setOehhcontteleintl($arr[$keys[105]]);
        }
        if (array_key_exists($keys[106], $arr)) {
            $this->setOehhconttelenbr($arr[$keys[106]]);
        }
        if (array_key_exists($keys[107], $arr)) {
            $this->setOehhcontteleext($arr[$keys[107]]);
        }
        if (array_key_exists($keys[108], $arr)) {
            $this->setOehhcontfaxintl($arr[$keys[108]]);
        }
        if (array_key_exists($keys[109], $arr)) {
            $this->setOehhcontfaxnbr($arr[$keys[109]]);
        }
        if (array_key_exists($keys[110], $arr)) {
            $this->setOehhshipacct($arr[$keys[110]]);
        }
        if (array_key_exists($keys[111], $arr)) {
            $this->setOehhchgdue($arr[$keys[111]]);
        }
        if (array_key_exists($keys[112], $arr)) {
            $this->setOehhaddlpricdisc($arr[$keys[112]]);
        }
        if (array_key_exists($keys[113], $arr)) {
            $this->setOehhallship($arr[$keys[113]]);
        }
        if (array_key_exists($keys[114], $arr)) {
            $this->setOehhqtyorderamt($arr[$keys[114]]);
        }
        if (array_key_exists($keys[115], $arr)) {
            $this->setOehhcreditapplied($arr[$keys[115]]);
        }
        if (array_key_exists($keys[116], $arr)) {
            $this->setOehhinvcprintdate($arr[$keys[116]]);
        }
        if (array_key_exists($keys[117], $arr)) {
            $this->setOehhinvcprinttime($arr[$keys[117]]);
        }
        if (array_key_exists($keys[118], $arr)) {
            $this->setOehhdiscfrt($arr[$keys[118]]);
        }
        if (array_key_exists($keys[119], $arr)) {
            $this->setOehhorideshipcomp($arr[$keys[119]]);
        }
        if (array_key_exists($keys[120], $arr)) {
            $this->setOehhcontemail($arr[$keys[120]]);
        }
        if (array_key_exists($keys[121], $arr)) {
            $this->setOehhmanualfrt($arr[$keys[121]]);
        }
        if (array_key_exists($keys[122], $arr)) {
            $this->setOehhinternalfrt($arr[$keys[122]]);
        }
        if (array_key_exists($keys[123], $arr)) {
            $this->setOehhfrtcost($arr[$keys[123]]);
        }
        if (array_key_exists($keys[124], $arr)) {
            $this->setOehhroute($arr[$keys[124]]);
        }
        if (array_key_exists($keys[125], $arr)) {
            $this->setOehhrouteseq($arr[$keys[125]]);
        }
        if (array_key_exists($keys[126], $arr)) {
            $this->setOehhfrttaxcode1($arr[$keys[126]]);
        }
        if (array_key_exists($keys[127], $arr)) {
            $this->setOehhfrttaxamt1($arr[$keys[127]]);
        }
        if (array_key_exists($keys[128], $arr)) {
            $this->setOehhfrttaxcode2($arr[$keys[128]]);
        }
        if (array_key_exists($keys[129], $arr)) {
            $this->setOehhfrttaxamt2($arr[$keys[129]]);
        }
        if (array_key_exists($keys[130], $arr)) {
            $this->setOehhfrttaxcode3($arr[$keys[130]]);
        }
        if (array_key_exists($keys[131], $arr)) {
            $this->setOehhfrttaxamt3($arr[$keys[131]]);
        }
        if (array_key_exists($keys[132], $arr)) {
            $this->setOehhfrttaxcode4($arr[$keys[132]]);
        }
        if (array_key_exists($keys[133], $arr)) {
            $this->setOehhfrttaxamt4($arr[$keys[133]]);
        }
        if (array_key_exists($keys[134], $arr)) {
            $this->setOehhfrttaxcode5($arr[$keys[134]]);
        }
        if (array_key_exists($keys[135], $arr)) {
            $this->setOehhfrttaxamt5($arr[$keys[135]]);
        }
        if (array_key_exists($keys[136], $arr)) {
            $this->setOehhedi855sent($arr[$keys[136]]);
        }
        if (array_key_exists($keys[137], $arr)) {
            $this->setOehhfrt3rdparty($arr[$keys[137]]);
        }
        if (array_key_exists($keys[138], $arr)) {
            $this->setOehhfob($arr[$keys[138]]);
        }
        if (array_key_exists($keys[139], $arr)) {
            $this->setOehhconfirmimagyn($arr[$keys[139]]);
        }
        if (array_key_exists($keys[140], $arr)) {
            $this->setOehhindustconform($arr[$keys[140]]);
        }
        if (array_key_exists($keys[141], $arr)) {
            $this->setOehhcstkconsign($arr[$keys[141]]);
        }
        if (array_key_exists($keys[142], $arr)) {
            $this->setOehhlmdelaycapsent($arr[$keys[142]]);
        }
        if (array_key_exists($keys[143], $arr)) {
            $this->setOehhmfgid($arr[$keys[143]]);
        }
        if (array_key_exists($keys[144], $arr)) {
            $this->setOehhstoreid($arr[$keys[144]]);
        }
        if (array_key_exists($keys[145], $arr)) {
            $this->setOehhpickqueue($arr[$keys[145]]);
        }
        if (array_key_exists($keys[146], $arr)) {
            $this->setOehharrvdate($arr[$keys[146]]);
        }
        if (array_key_exists($keys[147], $arr)) {
            $this->setOehhsurchgstat($arr[$keys[147]]);
        }
        if (array_key_exists($keys[148], $arr)) {
            $this->setOehhfrtgrup($arr[$keys[148]]);
        }
        if (array_key_exists($keys[149], $arr)) {
            $this->setOehhcommoride($arr[$keys[149]]);
        }
        if (array_key_exists($keys[150], $arr)) {
            $this->setOehhchrgsplt($arr[$keys[150]]);
        }
        if (array_key_exists($keys[151], $arr)) {
            $this->setOehhacccaprv($arr[$keys[151]]);
        }
        if (array_key_exists($keys[152], $arr)) {
            $this->setOehhorigordrnbr($arr[$keys[152]]);
        }
        if (array_key_exists($keys[153], $arr)) {
            $this->setOehhpostdate($arr[$keys[153]]);
        }
        if (array_key_exists($keys[154], $arr)) {
            $this->setOehhdiscdate1($arr[$keys[154]]);
        }
        if (array_key_exists($keys[155], $arr)) {
            $this->setOehhdiscpct1($arr[$keys[155]]);
        }
        if (array_key_exists($keys[156], $arr)) {
            $this->setOehhduedate1($arr[$keys[156]]);
        }
        if (array_key_exists($keys[157], $arr)) {
            $this->setOehhdueamt1($arr[$keys[157]]);
        }
        if (array_key_exists($keys[158], $arr)) {
            $this->setOehhduepct1($arr[$keys[158]]);
        }
        if (array_key_exists($keys[159], $arr)) {
            $this->setOehhdiscdate2($arr[$keys[159]]);
        }
        if (array_key_exists($keys[160], $arr)) {
            $this->setOehhdiscpct2($arr[$keys[160]]);
        }
        if (array_key_exists($keys[161], $arr)) {
            $this->setOehhduedate2($arr[$keys[161]]);
        }
        if (array_key_exists($keys[162], $arr)) {
            $this->setOehhdueamt2($arr[$keys[162]]);
        }
        if (array_key_exists($keys[163], $arr)) {
            $this->setOehhduepct2($arr[$keys[163]]);
        }
        if (array_key_exists($keys[164], $arr)) {
            $this->setOehhdiscdate3($arr[$keys[164]]);
        }
        if (array_key_exists($keys[165], $arr)) {
            $this->setOehhdiscpct3($arr[$keys[165]]);
        }
        if (array_key_exists($keys[166], $arr)) {
            $this->setOehhduedate3($arr[$keys[166]]);
        }
        if (array_key_exists($keys[167], $arr)) {
            $this->setOehhdueamt3($arr[$keys[167]]);
        }
        if (array_key_exists($keys[168], $arr)) {
            $this->setOehhduepct3($arr[$keys[168]]);
        }
        if (array_key_exists($keys[169], $arr)) {
            $this->setOehhdiscdate4($arr[$keys[169]]);
        }
        if (array_key_exists($keys[170], $arr)) {
            $this->setOehhdiscpct4($arr[$keys[170]]);
        }
        if (array_key_exists($keys[171], $arr)) {
            $this->setOehhduedate4($arr[$keys[171]]);
        }
        if (array_key_exists($keys[172], $arr)) {
            $this->setOehhdueamt4($arr[$keys[172]]);
        }
        if (array_key_exists($keys[173], $arr)) {
            $this->setOehhduepct4($arr[$keys[173]]);
        }
        if (array_key_exists($keys[174], $arr)) {
            $this->setOehhdiscdate5($arr[$keys[174]]);
        }
        if (array_key_exists($keys[175], $arr)) {
            $this->setOehhdiscpct5($arr[$keys[175]]);
        }
        if (array_key_exists($keys[176], $arr)) {
            $this->setOehhduedate5($arr[$keys[176]]);
        }
        if (array_key_exists($keys[177], $arr)) {
            $this->setOehhdueamt5($arr[$keys[177]]);
        }
        if (array_key_exists($keys[178], $arr)) {
            $this->setOehhduepct5($arr[$keys[178]]);
        }
        if (array_key_exists($keys[179], $arr)) {
            $this->setOehhdiscdate6($arr[$keys[179]]);
        }
        if (array_key_exists($keys[180], $arr)) {
            $this->setOehhdiscpct6($arr[$keys[180]]);
        }
        if (array_key_exists($keys[181], $arr)) {
            $this->setOehhduedate6($arr[$keys[181]]);
        }
        if (array_key_exists($keys[182], $arr)) {
            $this->setOehhdueamt6($arr[$keys[182]]);
        }
        if (array_key_exists($keys[183], $arr)) {
            $this->setOehhduepct6($arr[$keys[183]]);
        }
        if (array_key_exists($keys[184], $arr)) {
            $this->setOehhrefnbr($arr[$keys[184]]);
        }
        if (array_key_exists($keys[185], $arr)) {
            $this->setOehhacprognbr($arr[$keys[185]]);
        }
        if (array_key_exists($keys[186], $arr)) {
            $this->setOehhacprogexpdate($arr[$keys[186]]);
        }
        if (array_key_exists($keys[187], $arr)) {
            $this->setDateupdtd($arr[$keys[187]]);
        }
        if (array_key_exists($keys[188], $arr)) {
            $this->setTimeupdtd($arr[$keys[188]]);
        }
        if (array_key_exists($keys[189], $arr)) {
            $this->setDummy($arr[$keys[189]]);
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
     * @return $this|\SalesHistory The current object, for fluid interface
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
        $criteria = new Criteria(SalesHistoryTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHNBR)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHNBR, $this->oehhnbr);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHYEAR)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHYEAR, $this->oehhyear);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTAT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSTAT, $this->oehhstat);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHHOLD)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHHOLD, $this->oehhhold);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARCUCUSTID)) {
            $criteria->add(SalesHistoryTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARSTSHIPID)) {
            $criteria->add(SalesHistoryTableMap::COL_ARSTSHIPID, $this->arstshipid);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTNAME)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSTNAME, $this->oehhstname);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTLASTNAME)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSTLASTNAME, $this->oehhstlastname);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTFIRSTNAME)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSTFIRSTNAME, $this->oehhstfirstname);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTADR1)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSTADR1, $this->oehhstadr1);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTADR2)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSTADR2, $this->oehhstadr2);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTADR3)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSTADR3, $this->oehhstadr3);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTCTRY)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSTCTRY, $this->oehhstctry);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTCITY)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSTCITY, $this->oehhstcity);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTSTAT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSTSTAT, $this->oehhststat);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTZIPCODE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSTZIPCODE, $this->oehhstzipcode);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCUSTPO)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCUSTPO, $this->oehhcustpo);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHORDRDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHORDRDATE, $this->oehhordrdate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARTMTERMCD)) {
            $criteria->add(SalesHistoryTableMap::COL_ARTMTERMCD, $this->artmtermcd);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARTBSHIPVIA)) {
            $criteria->add(SalesHistoryTableMap::COL_ARTBSHIPVIA, $this->artbshipvia);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARININVNBR)) {
            $criteria->add(SalesHistoryTableMap::COL_ARININVNBR, $this->arininvnbr);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHINVDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHINVDATE, $this->oehhinvdate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHGLPD)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHGLPD, $this->oehhglpd);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARSPSALEPER1)) {
            $criteria->add(SalesHistoryTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSP1PCT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSP1PCT, $this->oehhsp1pct);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARSPSALEPER2)) {
            $criteria->add(SalesHistoryTableMap::COL_ARSPSALEPER2, $this->arspsaleper2);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSP2PCT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSP2PCT, $this->oehhsp2pct);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_ARSPSALEPER3)) {
            $criteria->add(SalesHistoryTableMap::COL_ARSPSALEPER3, $this->arspsaleper3);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSP3PCT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSP3PCT, $this->oehhsp3pct);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCNTRNBR)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCNTRNBR, $this->oehhcntrnbr);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHWIBATCH)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHWIBATCH, $this->oehhwibatch);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDROPRELHOLD)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDROPRELHOLD, $this->oehhdroprelhold);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTAXSUB)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHTAXSUB, $this->oehhtaxsub);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHNONTAXSUB)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHNONTAXSUB, $this->oehhnontaxsub);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTAXTOT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHTAXTOT, $this->oehhtaxtot);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTOT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTTOT, $this->oehhfrttot);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHMISCTOT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHMISCTOT, $this->oehhmisctot);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHORDRTOT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHORDRTOT, $this->oehhordrtot);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCOSTTOT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCOSTTOT, $this->oehhcosttot);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSPCOMMLOCK)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSPCOMMLOCK, $this->oehhspcommlock);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTAKENDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHTAKENDATE, $this->oehhtakendate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTAKENTIME)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHTAKENTIME, $this->oehhtakentime);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHPICKDATE, $this->oehhpickdate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKTIME)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHPICKTIME, $this->oehhpicktime);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPACKDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHPACKDATE, $this->oehhpackdate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPACKTIME)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHPACKTIME, $this->oehhpacktime);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHVERIFYDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHVERIFYDATE, $this->oehhverifydate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHVERIFYTIME)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHVERIFYTIME, $this->oehhverifytime);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCREDITMEMO)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCREDITMEMO, $this->oehhcreditmemo);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHBOOKEDYN)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHBOOKEDYN, $this->oehhbookedyn);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_INTBWHSEORIG)) {
            $criteria->add(SalesHistoryTableMap::COL_INTBWHSEORIG, $this->intbwhseorig);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHBTSTAT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHBTSTAT, $this->oehhbtstat);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSHIPCOMP)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSHIPCOMP, $this->oehhshipcomp);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCWOFLAG)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCWOFLAG, $this->oehhcwoflag);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDIVISION)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDIVISION, $this->oehhdivision);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTAKENCODE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHTAKENCODE, $this->oehhtakencode);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKCODE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHPICKCODE, $this->oehhpickcode);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPACKCODE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHPACKCODE, $this->oehhpackcode);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHVERIFYCODE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHVERIFYCODE, $this->oehhverifycode);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTOTDISC)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHTOTDISC, $this->oehhtotdisc);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHEDIREFNBRQUAL)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHEDIREFNBRQUAL, $this->oehhedirefnbrqual);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHUSERCODE1)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHUSERCODE1, $this->oehhusercode1);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHUSERCODE2)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHUSERCODE2, $this->oehhusercode2);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHUSERCODE3)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHUSERCODE3, $this->oehhusercode3);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHUSERCODE4)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHUSERCODE4, $this->oehhusercode4);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHEXCHCTRY)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHEXCHCTRY, $this->oehhexchctry);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHEXCHRATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHEXCHRATE, $this->oehhexchrate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHWGHTTOT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHWGHTTOT, $this->oehhwghttot);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHWGHTORIDE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHWGHTORIDE, $this->oehhwghtoride);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCCINFO)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCCINFO, $this->oehhccinfo);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHBOXCOUNT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHBOXCOUNT, $this->oehhboxcount);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHRQSTDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHRQSTDATE, $this->oehhrqstdate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCANCDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCANCDATE, $this->oehhcancdate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCRNTUSER)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCRNTUSER, $this->oehhcrntuser);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHRELEASENBR)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHRELEASENBR, $this->oehhreleasenbr);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_INTBWHSE)) {
            $criteria->add(SalesHistoryTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHBORDBUILDDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHBORDBUILDDATE, $this->oehhbordbuilddate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDEPTCODE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDEPTCODE, $this->oehhdeptcode);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTINENTERED)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTINENTERED, $this->oehhfrtinentered);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDROPSHIPENTERED)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDROPSHIPENTERED, $this->oehhdropshipentered);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHERFLAG)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHERFLAG, $this->oehherflag);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTIN)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTIN, $this->oehhfrtin);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDROPSHIP)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDROPSHIP, $this->oehhdropship);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHMINORDER)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHMINORDER, $this->oehhminorder);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTRACTTERMS)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCONTRACTTERMS, $this->oehhcontractterms);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDROPSHIPBILLED)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDROPSHIPBILLED, $this->oehhdropshipbilled);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHORDTYP)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHORDTYP, $this->oehhordtyp);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHTRACKNBR)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHTRACKNBR, $this->oehhtracknbr);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSOURCE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSOURCE, $this->oehhsource);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCCAPRV)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCCAPRV, $this->oehhccaprv);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKFMATTYPE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHPICKFMATTYPE, $this->oehhpickfmattype);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHINVCFMATTYPE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHINVCFMATTYPE, $this->oehhinvcfmattype);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCASHAMT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCASHAMT, $this->oehhcashamt);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCHECKAMT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCHECKAMT, $this->oehhcheckamt);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCHECKNBR)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCHECKNBR, $this->oehhchecknbr);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDEPOSITAMT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDEPOSITAMT, $this->oehhdepositamt);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDEPOSITNBR)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDEPOSITNBR, $this->oehhdepositnbr);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCCAMT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCCAMT, $this->oehhccamt);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHOTAXSUB)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHOTAXSUB, $this->oehhotaxsub);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHONONTAXSUB)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHONONTAXSUB, $this->oehhonontaxsub);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHOTAXTOT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHOTAXTOT, $this->oehhotaxtot);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHOORDRTOT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHOORDRTOT, $this->oehhoordrtot);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKPRINTDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHPICKPRINTDATE, $this->oehhpickprintdate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKPRINTTIME)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHPICKPRINTTIME, $this->oehhpickprinttime);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCONT, $this->oehhcont);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTTELEINTL)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCONTTELEINTL, $this->oehhcontteleintl);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTTELENBR)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCONTTELENBR, $this->oehhconttelenbr);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTTELEEXT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCONTTELEEXT, $this->oehhcontteleext);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTFAXINTL)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCONTFAXINTL, $this->oehhcontfaxintl);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTFAXNBR)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCONTFAXNBR, $this->oehhcontfaxnbr);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSHIPACCT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSHIPACCT, $this->oehhshipacct);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCHGDUE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCHGDUE, $this->oehhchgdue);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHADDLPRICDISC)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHADDLPRICDISC, $this->oehhaddlpricdisc);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHALLSHIP)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHALLSHIP, $this->oehhallship);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHQTYORDERAMT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHQTYORDERAMT, $this->oehhqtyorderamt);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCREDITAPPLIED)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCREDITAPPLIED, $this->oehhcreditapplied);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHINVCPRINTDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHINVCPRINTDATE, $this->oehhinvcprintdate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHINVCPRINTTIME)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHINVCPRINTTIME, $this->oehhinvcprinttime);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCFRT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDISCFRT, $this->oehhdiscfrt);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHORIDESHIPCOMP)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHORIDESHIPCOMP, $this->oehhorideshipcomp);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONTEMAIL)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCONTEMAIL, $this->oehhcontemail);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHMANUALFRT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHMANUALFRT, $this->oehhmanualfrt);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHINTERNALFRT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHINTERNALFRT, $this->oehhinternalfrt);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTCOST)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTCOST, $this->oehhfrtcost);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHROUTE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHROUTE, $this->oehhroute);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHROUTESEQ)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHROUTESEQ, $this->oehhrouteseq);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXCODE1)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTTAXCODE1, $this->oehhfrttaxcode1);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXAMT1)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTTAXAMT1, $this->oehhfrttaxamt1);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXCODE2)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTTAXCODE2, $this->oehhfrttaxcode2);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXAMT2)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTTAXAMT2, $this->oehhfrttaxamt2);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXCODE3)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTTAXCODE3, $this->oehhfrttaxcode3);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXAMT3)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTTAXAMT3, $this->oehhfrttaxamt3);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXCODE4)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTTAXCODE4, $this->oehhfrttaxcode4);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXAMT4)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTTAXAMT4, $this->oehhfrttaxamt4);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXCODE5)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTTAXCODE5, $this->oehhfrttaxcode5);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTTAXAMT5)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTTAXAMT5, $this->oehhfrttaxamt5);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHEDI855SENT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHEDI855SENT, $this->oehhedi855sent);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRT3RDPARTY)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRT3RDPARTY, $this->oehhfrt3rdparty);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFOB)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFOB, $this->oehhfob);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCONFIRMIMAGYN)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCONFIRMIMAGYN, $this->oehhconfirmimagyn);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHINDUSTCONFORM)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHINDUSTCONFORM, $this->oehhindustconform);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCSTKCONSIGN)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCSTKCONSIGN, $this->oehhcstkconsign);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHLMDELAYCAPSENT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHLMDELAYCAPSENT, $this->oehhlmdelaycapsent);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHMFGID)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHMFGID, $this->oehhmfgid);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSTOREID)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSTOREID, $this->oehhstoreid);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPICKQUEUE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHPICKQUEUE, $this->oehhpickqueue);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHARRVDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHARRVDATE, $this->oehharrvdate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHSURCHGSTAT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHSURCHGSTAT, $this->oehhsurchgstat);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHFRTGRUP)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHFRTGRUP, $this->oehhfrtgrup);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCOMMORIDE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCOMMORIDE, $this->oehhcommoride);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHCHRGSPLT)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHCHRGSPLT, $this->oehhchrgsplt);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHACCCAPRV)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHACCCAPRV, $this->oehhacccaprv);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHORIGORDRNBR)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHORIGORDRNBR, $this->oehhorigordrnbr);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHPOSTDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHPOSTDATE, $this->oehhpostdate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCDATE1)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDISCDATE1, $this->oehhdiscdate1);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCPCT1)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDISCPCT1, $this->oehhdiscpct1);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEDATE1)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEDATE1, $this->oehhduedate1);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEAMT1)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEAMT1, $this->oehhdueamt1);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEPCT1)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEPCT1, $this->oehhduepct1);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCDATE2)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDISCDATE2, $this->oehhdiscdate2);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCPCT2)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDISCPCT2, $this->oehhdiscpct2);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEDATE2)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEDATE2, $this->oehhduedate2);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEAMT2)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEAMT2, $this->oehhdueamt2);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEPCT2)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEPCT2, $this->oehhduepct2);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCDATE3)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDISCDATE3, $this->oehhdiscdate3);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCPCT3)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDISCPCT3, $this->oehhdiscpct3);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEDATE3)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEDATE3, $this->oehhduedate3);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEAMT3)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEAMT3, $this->oehhdueamt3);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEPCT3)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEPCT3, $this->oehhduepct3);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCDATE4)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDISCDATE4, $this->oehhdiscdate4);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCPCT4)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDISCPCT4, $this->oehhdiscpct4);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEDATE4)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEDATE4, $this->oehhduedate4);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEAMT4)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEAMT4, $this->oehhdueamt4);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEPCT4)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEPCT4, $this->oehhduepct4);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCDATE5)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDISCDATE5, $this->oehhdiscdate5);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCPCT5)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDISCPCT5, $this->oehhdiscpct5);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEDATE5)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEDATE5, $this->oehhduedate5);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEAMT5)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEAMT5, $this->oehhdueamt5);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEPCT5)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEPCT5, $this->oehhduepct5);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCDATE6)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDISCDATE6, $this->oehhdiscdate6);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDISCPCT6)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDISCPCT6, $this->oehhdiscpct6);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEDATE6)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEDATE6, $this->oehhduedate6);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEAMT6)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEAMT6, $this->oehhdueamt6);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHDUEPCT6)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHDUEPCT6, $this->oehhduepct6);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHREFNBR)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHREFNBR, $this->oehhrefnbr);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHACPROGNBR)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHACPROGNBR, $this->oehhacprognbr);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_OEHHACPROGEXPDATE)) {
            $criteria->add(SalesHistoryTableMap::COL_OEHHACPROGEXPDATE, $this->oehhacprogexpdate);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_DATEUPDTD)) {
            $criteria->add(SalesHistoryTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_TIMEUPDTD)) {
            $criteria->add(SalesHistoryTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(SalesHistoryTableMap::COL_DUMMY)) {
            $criteria->add(SalesHistoryTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildSalesHistoryQuery::create();
        $criteria->add(SalesHistoryTableMap::COL_OEHHNBR, $this->oehhnbr);

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
        $validPk = null !== $this->getOehhnbr();

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
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getOehhnbr();
    }

    /**
     * Generic method to set the primary key (oehhnbr column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOehhnbr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getOehhnbr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \SalesHistory (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOehhnbr($this->getOehhnbr());
        $copyObj->setOehhyear($this->getOehhyear());
        $copyObj->setOehhstat($this->getOehhstat());
        $copyObj->setOehhhold($this->getOehhhold());
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArstshipid($this->getArstshipid());
        $copyObj->setOehhstname($this->getOehhstname());
        $copyObj->setOehhstlastname($this->getOehhstlastname());
        $copyObj->setOehhstfirstname($this->getOehhstfirstname());
        $copyObj->setOehhstadr1($this->getOehhstadr1());
        $copyObj->setOehhstadr2($this->getOehhstadr2());
        $copyObj->setOehhstadr3($this->getOehhstadr3());
        $copyObj->setOehhstctry($this->getOehhstctry());
        $copyObj->setOehhstcity($this->getOehhstcity());
        $copyObj->setOehhststat($this->getOehhststat());
        $copyObj->setOehhstzipcode($this->getOehhstzipcode());
        $copyObj->setOehhcustpo($this->getOehhcustpo());
        $copyObj->setOehhordrdate($this->getOehhordrdate());
        $copyObj->setArtmtermcd($this->getArtmtermcd());
        $copyObj->setArtbshipvia($this->getArtbshipvia());
        $copyObj->setArininvnbr($this->getArininvnbr());
        $copyObj->setOehhinvdate($this->getOehhinvdate());
        $copyObj->setOehhglpd($this->getOehhglpd());
        $copyObj->setArspsaleper1($this->getArspsaleper1());
        $copyObj->setOehhsp1pct($this->getOehhsp1pct());
        $copyObj->setArspsaleper2($this->getArspsaleper2());
        $copyObj->setOehhsp2pct($this->getOehhsp2pct());
        $copyObj->setArspsaleper3($this->getArspsaleper3());
        $copyObj->setOehhsp3pct($this->getOehhsp3pct());
        $copyObj->setOehhcntrnbr($this->getOehhcntrnbr());
        $copyObj->setOehhwibatch($this->getOehhwibatch());
        $copyObj->setOehhdroprelhold($this->getOehhdroprelhold());
        $copyObj->setOehhtaxsub($this->getOehhtaxsub());
        $copyObj->setOehhnontaxsub($this->getOehhnontaxsub());
        $copyObj->setOehhtaxtot($this->getOehhtaxtot());
        $copyObj->setOehhfrttot($this->getOehhfrttot());
        $copyObj->setOehhmisctot($this->getOehhmisctot());
        $copyObj->setOehhordrtot($this->getOehhordrtot());
        $copyObj->setOehhcosttot($this->getOehhcosttot());
        $copyObj->setOehhspcommlock($this->getOehhspcommlock());
        $copyObj->setOehhtakendate($this->getOehhtakendate());
        $copyObj->setOehhtakentime($this->getOehhtakentime());
        $copyObj->setOehhpickdate($this->getOehhpickdate());
        $copyObj->setOehhpicktime($this->getOehhpicktime());
        $copyObj->setOehhpackdate($this->getOehhpackdate());
        $copyObj->setOehhpacktime($this->getOehhpacktime());
        $copyObj->setOehhverifydate($this->getOehhverifydate());
        $copyObj->setOehhverifytime($this->getOehhverifytime());
        $copyObj->setOehhcreditmemo($this->getOehhcreditmemo());
        $copyObj->setOehhbookedyn($this->getOehhbookedyn());
        $copyObj->setIntbwhseorig($this->getIntbwhseorig());
        $copyObj->setOehhbtstat($this->getOehhbtstat());
        $copyObj->setOehhshipcomp($this->getOehhshipcomp());
        $copyObj->setOehhcwoflag($this->getOehhcwoflag());
        $copyObj->setOehhdivision($this->getOehhdivision());
        $copyObj->setOehhtakencode($this->getOehhtakencode());
        $copyObj->setOehhpickcode($this->getOehhpickcode());
        $copyObj->setOehhpackcode($this->getOehhpackcode());
        $copyObj->setOehhverifycode($this->getOehhverifycode());
        $copyObj->setOehhtotdisc($this->getOehhtotdisc());
        $copyObj->setOehhedirefnbrqual($this->getOehhedirefnbrqual());
        $copyObj->setOehhusercode1($this->getOehhusercode1());
        $copyObj->setOehhusercode2($this->getOehhusercode2());
        $copyObj->setOehhusercode3($this->getOehhusercode3());
        $copyObj->setOehhusercode4($this->getOehhusercode4());
        $copyObj->setOehhexchctry($this->getOehhexchctry());
        $copyObj->setOehhexchrate($this->getOehhexchrate());
        $copyObj->setOehhwghttot($this->getOehhwghttot());
        $copyObj->setOehhwghtoride($this->getOehhwghtoride());
        $copyObj->setOehhccinfo($this->getOehhccinfo());
        $copyObj->setOehhboxcount($this->getOehhboxcount());
        $copyObj->setOehhrqstdate($this->getOehhrqstdate());
        $copyObj->setOehhcancdate($this->getOehhcancdate());
        $copyObj->setOehhcrntuser($this->getOehhcrntuser());
        $copyObj->setOehhreleasenbr($this->getOehhreleasenbr());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setOehhbordbuilddate($this->getOehhbordbuilddate());
        $copyObj->setOehhdeptcode($this->getOehhdeptcode());
        $copyObj->setOehhfrtinentered($this->getOehhfrtinentered());
        $copyObj->setOehhdropshipentered($this->getOehhdropshipentered());
        $copyObj->setOehherflag($this->getOehherflag());
        $copyObj->setOehhfrtin($this->getOehhfrtin());
        $copyObj->setOehhdropship($this->getOehhdropship());
        $copyObj->setOehhminorder($this->getOehhminorder());
        $copyObj->setOehhcontractterms($this->getOehhcontractterms());
        $copyObj->setOehhdropshipbilled($this->getOehhdropshipbilled());
        $copyObj->setOehhordtyp($this->getOehhordtyp());
        $copyObj->setOehhtracknbr($this->getOehhtracknbr());
        $copyObj->setOehhsource($this->getOehhsource());
        $copyObj->setOehhccaprv($this->getOehhccaprv());
        $copyObj->setOehhpickfmattype($this->getOehhpickfmattype());
        $copyObj->setOehhinvcfmattype($this->getOehhinvcfmattype());
        $copyObj->setOehhcashamt($this->getOehhcashamt());
        $copyObj->setOehhcheckamt($this->getOehhcheckamt());
        $copyObj->setOehhchecknbr($this->getOehhchecknbr());
        $copyObj->setOehhdepositamt($this->getOehhdepositamt());
        $copyObj->setOehhdepositnbr($this->getOehhdepositnbr());
        $copyObj->setOehhccamt($this->getOehhccamt());
        $copyObj->setOehhotaxsub($this->getOehhotaxsub());
        $copyObj->setOehhonontaxsub($this->getOehhonontaxsub());
        $copyObj->setOehhotaxtot($this->getOehhotaxtot());
        $copyObj->setOehhoordrtot($this->getOehhoordrtot());
        $copyObj->setOehhpickprintdate($this->getOehhpickprintdate());
        $copyObj->setOehhpickprinttime($this->getOehhpickprinttime());
        $copyObj->setOehhcont($this->getOehhcont());
        $copyObj->setOehhcontteleintl($this->getOehhcontteleintl());
        $copyObj->setOehhconttelenbr($this->getOehhconttelenbr());
        $copyObj->setOehhcontteleext($this->getOehhcontteleext());
        $copyObj->setOehhcontfaxintl($this->getOehhcontfaxintl());
        $copyObj->setOehhcontfaxnbr($this->getOehhcontfaxnbr());
        $copyObj->setOehhshipacct($this->getOehhshipacct());
        $copyObj->setOehhchgdue($this->getOehhchgdue());
        $copyObj->setOehhaddlpricdisc($this->getOehhaddlpricdisc());
        $copyObj->setOehhallship($this->getOehhallship());
        $copyObj->setOehhqtyorderamt($this->getOehhqtyorderamt());
        $copyObj->setOehhcreditapplied($this->getOehhcreditapplied());
        $copyObj->setOehhinvcprintdate($this->getOehhinvcprintdate());
        $copyObj->setOehhinvcprinttime($this->getOehhinvcprinttime());
        $copyObj->setOehhdiscfrt($this->getOehhdiscfrt());
        $copyObj->setOehhorideshipcomp($this->getOehhorideshipcomp());
        $copyObj->setOehhcontemail($this->getOehhcontemail());
        $copyObj->setOehhmanualfrt($this->getOehhmanualfrt());
        $copyObj->setOehhinternalfrt($this->getOehhinternalfrt());
        $copyObj->setOehhfrtcost($this->getOehhfrtcost());
        $copyObj->setOehhroute($this->getOehhroute());
        $copyObj->setOehhrouteseq($this->getOehhrouteseq());
        $copyObj->setOehhfrttaxcode1($this->getOehhfrttaxcode1());
        $copyObj->setOehhfrttaxamt1($this->getOehhfrttaxamt1());
        $copyObj->setOehhfrttaxcode2($this->getOehhfrttaxcode2());
        $copyObj->setOehhfrttaxamt2($this->getOehhfrttaxamt2());
        $copyObj->setOehhfrttaxcode3($this->getOehhfrttaxcode3());
        $copyObj->setOehhfrttaxamt3($this->getOehhfrttaxamt3());
        $copyObj->setOehhfrttaxcode4($this->getOehhfrttaxcode4());
        $copyObj->setOehhfrttaxamt4($this->getOehhfrttaxamt4());
        $copyObj->setOehhfrttaxcode5($this->getOehhfrttaxcode5());
        $copyObj->setOehhfrttaxamt5($this->getOehhfrttaxamt5());
        $copyObj->setOehhedi855sent($this->getOehhedi855sent());
        $copyObj->setOehhfrt3rdparty($this->getOehhfrt3rdparty());
        $copyObj->setOehhfob($this->getOehhfob());
        $copyObj->setOehhconfirmimagyn($this->getOehhconfirmimagyn());
        $copyObj->setOehhindustconform($this->getOehhindustconform());
        $copyObj->setOehhcstkconsign($this->getOehhcstkconsign());
        $copyObj->setOehhlmdelaycapsent($this->getOehhlmdelaycapsent());
        $copyObj->setOehhmfgid($this->getOehhmfgid());
        $copyObj->setOehhstoreid($this->getOehhstoreid());
        $copyObj->setOehhpickqueue($this->getOehhpickqueue());
        $copyObj->setOehharrvdate($this->getOehharrvdate());
        $copyObj->setOehhsurchgstat($this->getOehhsurchgstat());
        $copyObj->setOehhfrtgrup($this->getOehhfrtgrup());
        $copyObj->setOehhcommoride($this->getOehhcommoride());
        $copyObj->setOehhchrgsplt($this->getOehhchrgsplt());
        $copyObj->setOehhacccaprv($this->getOehhacccaprv());
        $copyObj->setOehhorigordrnbr($this->getOehhorigordrnbr());
        $copyObj->setOehhpostdate($this->getOehhpostdate());
        $copyObj->setOehhdiscdate1($this->getOehhdiscdate1());
        $copyObj->setOehhdiscpct1($this->getOehhdiscpct1());
        $copyObj->setOehhduedate1($this->getOehhduedate1());
        $copyObj->setOehhdueamt1($this->getOehhdueamt1());
        $copyObj->setOehhduepct1($this->getOehhduepct1());
        $copyObj->setOehhdiscdate2($this->getOehhdiscdate2());
        $copyObj->setOehhdiscpct2($this->getOehhdiscpct2());
        $copyObj->setOehhduedate2($this->getOehhduedate2());
        $copyObj->setOehhdueamt2($this->getOehhdueamt2());
        $copyObj->setOehhduepct2($this->getOehhduepct2());
        $copyObj->setOehhdiscdate3($this->getOehhdiscdate3());
        $copyObj->setOehhdiscpct3($this->getOehhdiscpct3());
        $copyObj->setOehhduedate3($this->getOehhduedate3());
        $copyObj->setOehhdueamt3($this->getOehhdueamt3());
        $copyObj->setOehhduepct3($this->getOehhduepct3());
        $copyObj->setOehhdiscdate4($this->getOehhdiscdate4());
        $copyObj->setOehhdiscpct4($this->getOehhdiscpct4());
        $copyObj->setOehhduedate4($this->getOehhduedate4());
        $copyObj->setOehhdueamt4($this->getOehhdueamt4());
        $copyObj->setOehhduepct4($this->getOehhduepct4());
        $copyObj->setOehhdiscdate5($this->getOehhdiscdate5());
        $copyObj->setOehhdiscpct5($this->getOehhdiscpct5());
        $copyObj->setOehhduedate5($this->getOehhduedate5());
        $copyObj->setOehhdueamt5($this->getOehhdueamt5());
        $copyObj->setOehhduepct5($this->getOehhduepct5());
        $copyObj->setOehhdiscdate6($this->getOehhdiscdate6());
        $copyObj->setOehhdiscpct6($this->getOehhdiscpct6());
        $copyObj->setOehhduedate6($this->getOehhduedate6());
        $copyObj->setOehhdueamt6($this->getOehhdueamt6());
        $copyObj->setOehhduepct6($this->getOehhduepct6());
        $copyObj->setOehhrefnbr($this->getOehhrefnbr());
        $copyObj->setOehhacprognbr($this->getOehhacprognbr());
        $copyObj->setOehhacprogexpdate($this->getOehhacprogexpdate());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSalesHistoryDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesHistoryDetail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesOrderShipments() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesOrderShipment($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesHistoryLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesHistoryLotserial($relObj->copy($deepCopy));
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
     * @return \SalesHistory Clone of current object.
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
     * Declares an association between this object and a ChildCustomer object.
     *
     * @param  ChildCustomer $v
     * @return $this|\SalesHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomer(ChildCustomer $v = null)
    {
        if ($v === null) {
            $this->setArcucustid('');
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        $this->aCustomer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomer object, it will not be re-added.
        if ($v !== null) {
            $v->addSalesHistory($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCustomer object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildCustomer The associated ChildCustomer object.
     * @throws PropelException
     */
    public function getCustomer(ConnectionInterface $con = null)
    {
        if ($this->aCustomer === null && (($this->arcucustid !== "" && $this->arcucustid !== null))) {
            $this->aCustomer = ChildCustomerQuery::create()->findPk($this->arcucustid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomer->addSalesHistories($this);
             */
        }

        return $this->aCustomer;
    }

    /**
     * Declares an association between this object and a ChildCustomerShipto object.
     *
     * @param  ChildCustomerShipto $v
     * @return $this|\SalesHistory The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomerShipto(ChildCustomerShipto $v = null)
    {
        if ($v === null) {
            $this->setArcucustid('');
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        if ($v === null) {
            $this->setArstshipid('');
        } else {
            $this->setArstshipid($v->getArstshipid());
        }

        $this->aCustomerShipto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomerShipto object, it will not be re-added.
        if ($v !== null) {
            $v->addSalesHistory($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildCustomerShipto object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildCustomerShipto The associated ChildCustomerShipto object.
     * @throws PropelException
     */
    public function getCustomerShipto(ConnectionInterface $con = null)
    {
        if ($this->aCustomerShipto === null && (($this->arcucustid !== "" && $this->arcucustid !== null) && ($this->arstshipid !== "" && $this->arstshipid !== null))) {
            $this->aCustomerShipto = ChildCustomerShiptoQuery::create()->findPk(array($this->arcucustid, $this->arstshipid), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomerShipto->addSalesHistories($this);
             */
        }

        return $this->aCustomerShipto;
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
        if ('SalesHistoryDetail' == $relationName) {
            $this->initSalesHistoryDetails();
            return;
        }
        if ('SalesOrderShipment' == $relationName) {
            $this->initSalesOrderShipments();
            return;
        }
        if ('SalesHistoryLotserial' == $relationName) {
            $this->initSalesHistoryLotserials();
            return;
        }
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
     * If this ChildSalesHistory is new, it will return
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
                    ->filterBySalesHistory($this)
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
     * @return $this|ChildSalesHistory The current object (for fluent API support)
     */
    public function setSalesHistoryDetails(Collection $salesHistoryDetails, ConnectionInterface $con = null)
    {
        /** @var ChildSalesHistoryDetail[] $salesHistoryDetailsToDelete */
        $salesHistoryDetailsToDelete = $this->getSalesHistoryDetails(new Criteria(), $con)->diff($salesHistoryDetails);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->salesHistoryDetailsScheduledForDeletion = clone $salesHistoryDetailsToDelete;

        foreach ($salesHistoryDetailsToDelete as $salesHistoryDetailRemoved) {
            $salesHistoryDetailRemoved->setSalesHistory(null);
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
                ->filterBySalesHistory($this)
                ->count($con);
        }

        return count($this->collSalesHistoryDetails);
    }

    /**
     * Method called to associate a ChildSalesHistoryDetail object to this object
     * through the ChildSalesHistoryDetail foreign key attribute.
     *
     * @param  ChildSalesHistoryDetail $l ChildSalesHistoryDetail
     * @return $this|\SalesHistory The current object (for fluent API support)
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
        $salesHistoryDetail->setSalesHistory($this);
    }

    /**
     * @param  ChildSalesHistoryDetail $salesHistoryDetail The ChildSalesHistoryDetail object to remove.
     * @return $this|ChildSalesHistory The current object (for fluent API support)
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
            $salesHistoryDetail->setSalesHistory(null);
        }

        return $this;
    }

    /**
     * Clears out the collSalesOrderShipments collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addSalesOrderShipments()
     */
    public function clearSalesOrderShipments()
    {
        $this->collSalesOrderShipments = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collSalesOrderShipments collection loaded partially.
     */
    public function resetPartialSalesOrderShipments($v = true)
    {
        $this->collSalesOrderShipmentsPartial = $v;
    }

    /**
     * Initializes the collSalesOrderShipments collection.
     *
     * By default this just sets the collSalesOrderShipments collection to an empty array (like clearcollSalesOrderShipments());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesOrderShipments($overrideExisting = true)
    {
        if (null !== $this->collSalesOrderShipments && !$overrideExisting) {
            return;
        }

        $collectionClassName = SalesOrderShipmentTableMap::getTableMap()->getCollectionClassName();

        $this->collSalesOrderShipments = new $collectionClassName;
        $this->collSalesOrderShipments->setModel('\SalesOrderShipment');
    }

    /**
     * Gets an array of ChildSalesOrderShipment objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSalesHistory is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSalesOrderShipment[] List of ChildSalesOrderShipment objects
     * @throws PropelException
     */
    public function getSalesOrderShipments(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrderShipmentsPartial && !$this->isNew();
        if (null === $this->collSalesOrderShipments || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSalesOrderShipments) {
                // return empty collection
                $this->initSalesOrderShipments();
            } else {
                $collSalesOrderShipments = ChildSalesOrderShipmentQuery::create(null, $criteria)
                    ->filterBySalesHistory($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSalesOrderShipmentsPartial && count($collSalesOrderShipments)) {
                        $this->initSalesOrderShipments(false);

                        foreach ($collSalesOrderShipments as $obj) {
                            if (false == $this->collSalesOrderShipments->contains($obj)) {
                                $this->collSalesOrderShipments->append($obj);
                            }
                        }

                        $this->collSalesOrderShipmentsPartial = true;
                    }

                    return $collSalesOrderShipments;
                }

                if ($partial && $this->collSalesOrderShipments) {
                    foreach ($this->collSalesOrderShipments as $obj) {
                        if ($obj->isNew()) {
                            $collSalesOrderShipments[] = $obj;
                        }
                    }
                }

                $this->collSalesOrderShipments = $collSalesOrderShipments;
                $this->collSalesOrderShipmentsPartial = false;
            }
        }

        return $this->collSalesOrderShipments;
    }

    /**
     * Sets a collection of ChildSalesOrderShipment objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $salesOrderShipments A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildSalesHistory The current object (for fluent API support)
     */
    public function setSalesOrderShipments(Collection $salesOrderShipments, ConnectionInterface $con = null)
    {
        /** @var ChildSalesOrderShipment[] $salesOrderShipmentsToDelete */
        $salesOrderShipmentsToDelete = $this->getSalesOrderShipments(new Criteria(), $con)->diff($salesOrderShipments);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->salesOrderShipmentsScheduledForDeletion = clone $salesOrderShipmentsToDelete;

        foreach ($salesOrderShipmentsToDelete as $salesOrderShipmentRemoved) {
            $salesOrderShipmentRemoved->setSalesHistory(null);
        }

        $this->collSalesOrderShipments = null;
        foreach ($salesOrderShipments as $salesOrderShipment) {
            $this->addSalesOrderShipment($salesOrderShipment);
        }

        $this->collSalesOrderShipments = $salesOrderShipments;
        $this->collSalesOrderShipmentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SalesOrderShipment objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related SalesOrderShipment objects.
     * @throws PropelException
     */
    public function countSalesOrderShipments(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collSalesOrderShipmentsPartial && !$this->isNew();
        if (null === $this->collSalesOrderShipments || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesOrderShipments) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesOrderShipments());
            }

            $query = ChildSalesOrderShipmentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySalesHistory($this)
                ->count($con);
        }

        return count($this->collSalesOrderShipments);
    }

    /**
     * Method called to associate a ChildSalesOrderShipment object to this object
     * through the ChildSalesOrderShipment foreign key attribute.
     *
     * @param  ChildSalesOrderShipment $l ChildSalesOrderShipment
     * @return $this|\SalesHistory The current object (for fluent API support)
     */
    public function addSalesOrderShipment(ChildSalesOrderShipment $l)
    {
        if ($this->collSalesOrderShipments === null) {
            $this->initSalesOrderShipments();
            $this->collSalesOrderShipmentsPartial = true;
        }

        if (!$this->collSalesOrderShipments->contains($l)) {
            $this->doAddSalesOrderShipment($l);

            if ($this->salesOrderShipmentsScheduledForDeletion and $this->salesOrderShipmentsScheduledForDeletion->contains($l)) {
                $this->salesOrderShipmentsScheduledForDeletion->remove($this->salesOrderShipmentsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSalesOrderShipment $salesOrderShipment The ChildSalesOrderShipment object to add.
     */
    protected function doAddSalesOrderShipment(ChildSalesOrderShipment $salesOrderShipment)
    {
        $this->collSalesOrderShipments[]= $salesOrderShipment;
        $salesOrderShipment->setSalesHistory($this);
    }

    /**
     * @param  ChildSalesOrderShipment $salesOrderShipment The ChildSalesOrderShipment object to remove.
     * @return $this|ChildSalesHistory The current object (for fluent API support)
     */
    public function removeSalesOrderShipment(ChildSalesOrderShipment $salesOrderShipment)
    {
        if ($this->getSalesOrderShipments()->contains($salesOrderShipment)) {
            $pos = $this->collSalesOrderShipments->search($salesOrderShipment);
            $this->collSalesOrderShipments->remove($pos);
            if (null === $this->salesOrderShipmentsScheduledForDeletion) {
                $this->salesOrderShipmentsScheduledForDeletion = clone $this->collSalesOrderShipments;
                $this->salesOrderShipmentsScheduledForDeletion->clear();
            }
            $this->salesOrderShipmentsScheduledForDeletion[]= clone $salesOrderShipment;
            $salesOrderShipment->setSalesHistory(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesHistory is new, it will return
     * an empty collection; or if this SalesHistory has previously
     * been saved, it will retrieve related SalesOrderShipments from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesHistory.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesOrderShipment[] List of ChildSalesOrderShipment objects
     */
    public function getSalesOrderShipmentsJoinSalesOrder(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesOrderShipmentQuery::create(null, $criteria);
        $query->joinWith('SalesOrder', $joinBehavior);

        return $this->getSalesOrderShipments($query, $con);
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
     * If this ChildSalesHistory is new, it will return
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
                    ->filterBySalesHistory($this)
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
     * @return $this|ChildSalesHistory The current object (for fluent API support)
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
            $salesHistoryLotserialRemoved->setSalesHistory(null);
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
                ->filterBySalesHistory($this)
                ->count($con);
        }

        return count($this->collSalesHistoryLotserials);
    }

    /**
     * Method called to associate a ChildSalesHistoryLotserial object to this object
     * through the ChildSalesHistoryLotserial foreign key attribute.
     *
     * @param  ChildSalesHistoryLotserial $l ChildSalesHistoryLotserial
     * @return $this|\SalesHistory The current object (for fluent API support)
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
        $salesHistoryLotserial->setSalesHistory($this);
    }

    /**
     * @param  ChildSalesHistoryLotserial $salesHistoryLotserial The ChildSalesHistoryLotserial object to remove.
     * @return $this|ChildSalesHistory The current object (for fluent API support)
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
            $salesHistoryLotserial->setSalesHistory(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesHistory is new, it will return
     * an empty collection; or if this SalesHistory has previously
     * been saved, it will retrieve related SalesHistoryLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesHistory.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesHistory is new, it will return
     * an empty collection; or if this SalesHistory has previously
     * been saved, it will retrieve related SalesHistoryLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesHistory.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesHistoryLotserial[] List of ChildSalesHistoryLotserial objects
     */
    public function getSalesHistoryLotserialsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesHistoryLotserialQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getSalesHistoryLotserials($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeSalesHistory($this);
        }
        if (null !== $this->aCustomerShipto) {
            $this->aCustomerShipto->removeSalesHistory($this);
        }
        $this->oehhnbr = null;
        $this->oehhyear = null;
        $this->oehhstat = null;
        $this->oehhhold = null;
        $this->arcucustid = null;
        $this->arstshipid = null;
        $this->oehhstname = null;
        $this->oehhstlastname = null;
        $this->oehhstfirstname = null;
        $this->oehhstadr1 = null;
        $this->oehhstadr2 = null;
        $this->oehhstadr3 = null;
        $this->oehhstctry = null;
        $this->oehhstcity = null;
        $this->oehhststat = null;
        $this->oehhstzipcode = null;
        $this->oehhcustpo = null;
        $this->oehhordrdate = null;
        $this->artmtermcd = null;
        $this->artbshipvia = null;
        $this->arininvnbr = null;
        $this->oehhinvdate = null;
        $this->oehhglpd = null;
        $this->arspsaleper1 = null;
        $this->oehhsp1pct = null;
        $this->arspsaleper2 = null;
        $this->oehhsp2pct = null;
        $this->arspsaleper3 = null;
        $this->oehhsp3pct = null;
        $this->oehhcntrnbr = null;
        $this->oehhwibatch = null;
        $this->oehhdroprelhold = null;
        $this->oehhtaxsub = null;
        $this->oehhnontaxsub = null;
        $this->oehhtaxtot = null;
        $this->oehhfrttot = null;
        $this->oehhmisctot = null;
        $this->oehhordrtot = null;
        $this->oehhcosttot = null;
        $this->oehhspcommlock = null;
        $this->oehhtakendate = null;
        $this->oehhtakentime = null;
        $this->oehhpickdate = null;
        $this->oehhpicktime = null;
        $this->oehhpackdate = null;
        $this->oehhpacktime = null;
        $this->oehhverifydate = null;
        $this->oehhverifytime = null;
        $this->oehhcreditmemo = null;
        $this->oehhbookedyn = null;
        $this->intbwhseorig = null;
        $this->oehhbtstat = null;
        $this->oehhshipcomp = null;
        $this->oehhcwoflag = null;
        $this->oehhdivision = null;
        $this->oehhtakencode = null;
        $this->oehhpickcode = null;
        $this->oehhpackcode = null;
        $this->oehhverifycode = null;
        $this->oehhtotdisc = null;
        $this->oehhedirefnbrqual = null;
        $this->oehhusercode1 = null;
        $this->oehhusercode2 = null;
        $this->oehhusercode3 = null;
        $this->oehhusercode4 = null;
        $this->oehhexchctry = null;
        $this->oehhexchrate = null;
        $this->oehhwghttot = null;
        $this->oehhwghtoride = null;
        $this->oehhccinfo = null;
        $this->oehhboxcount = null;
        $this->oehhrqstdate = null;
        $this->oehhcancdate = null;
        $this->oehhcrntuser = null;
        $this->oehhreleasenbr = null;
        $this->intbwhse = null;
        $this->oehhbordbuilddate = null;
        $this->oehhdeptcode = null;
        $this->oehhfrtinentered = null;
        $this->oehhdropshipentered = null;
        $this->oehherflag = null;
        $this->oehhfrtin = null;
        $this->oehhdropship = null;
        $this->oehhminorder = null;
        $this->oehhcontractterms = null;
        $this->oehhdropshipbilled = null;
        $this->oehhordtyp = null;
        $this->oehhtracknbr = null;
        $this->oehhsource = null;
        $this->oehhccaprv = null;
        $this->oehhpickfmattype = null;
        $this->oehhinvcfmattype = null;
        $this->oehhcashamt = null;
        $this->oehhcheckamt = null;
        $this->oehhchecknbr = null;
        $this->oehhdepositamt = null;
        $this->oehhdepositnbr = null;
        $this->oehhccamt = null;
        $this->oehhotaxsub = null;
        $this->oehhonontaxsub = null;
        $this->oehhotaxtot = null;
        $this->oehhoordrtot = null;
        $this->oehhpickprintdate = null;
        $this->oehhpickprinttime = null;
        $this->oehhcont = null;
        $this->oehhcontteleintl = null;
        $this->oehhconttelenbr = null;
        $this->oehhcontteleext = null;
        $this->oehhcontfaxintl = null;
        $this->oehhcontfaxnbr = null;
        $this->oehhshipacct = null;
        $this->oehhchgdue = null;
        $this->oehhaddlpricdisc = null;
        $this->oehhallship = null;
        $this->oehhqtyorderamt = null;
        $this->oehhcreditapplied = null;
        $this->oehhinvcprintdate = null;
        $this->oehhinvcprinttime = null;
        $this->oehhdiscfrt = null;
        $this->oehhorideshipcomp = null;
        $this->oehhcontemail = null;
        $this->oehhmanualfrt = null;
        $this->oehhinternalfrt = null;
        $this->oehhfrtcost = null;
        $this->oehhroute = null;
        $this->oehhrouteseq = null;
        $this->oehhfrttaxcode1 = null;
        $this->oehhfrttaxamt1 = null;
        $this->oehhfrttaxcode2 = null;
        $this->oehhfrttaxamt2 = null;
        $this->oehhfrttaxcode3 = null;
        $this->oehhfrttaxamt3 = null;
        $this->oehhfrttaxcode4 = null;
        $this->oehhfrttaxamt4 = null;
        $this->oehhfrttaxcode5 = null;
        $this->oehhfrttaxamt5 = null;
        $this->oehhedi855sent = null;
        $this->oehhfrt3rdparty = null;
        $this->oehhfob = null;
        $this->oehhconfirmimagyn = null;
        $this->oehhindustconform = null;
        $this->oehhcstkconsign = null;
        $this->oehhlmdelaycapsent = null;
        $this->oehhmfgid = null;
        $this->oehhstoreid = null;
        $this->oehhpickqueue = null;
        $this->oehharrvdate = null;
        $this->oehhsurchgstat = null;
        $this->oehhfrtgrup = null;
        $this->oehhcommoride = null;
        $this->oehhchrgsplt = null;
        $this->oehhacccaprv = null;
        $this->oehhorigordrnbr = null;
        $this->oehhpostdate = null;
        $this->oehhdiscdate1 = null;
        $this->oehhdiscpct1 = null;
        $this->oehhduedate1 = null;
        $this->oehhdueamt1 = null;
        $this->oehhduepct1 = null;
        $this->oehhdiscdate2 = null;
        $this->oehhdiscpct2 = null;
        $this->oehhduedate2 = null;
        $this->oehhdueamt2 = null;
        $this->oehhduepct2 = null;
        $this->oehhdiscdate3 = null;
        $this->oehhdiscpct3 = null;
        $this->oehhduedate3 = null;
        $this->oehhdueamt3 = null;
        $this->oehhduepct3 = null;
        $this->oehhdiscdate4 = null;
        $this->oehhdiscpct4 = null;
        $this->oehhduedate4 = null;
        $this->oehhdueamt4 = null;
        $this->oehhduepct4 = null;
        $this->oehhdiscdate5 = null;
        $this->oehhdiscpct5 = null;
        $this->oehhduedate5 = null;
        $this->oehhdueamt5 = null;
        $this->oehhduepct5 = null;
        $this->oehhdiscdate6 = null;
        $this->oehhdiscpct6 = null;
        $this->oehhduedate6 = null;
        $this->oehhdueamt6 = null;
        $this->oehhduepct6 = null;
        $this->oehhrefnbr = null;
        $this->oehhacprognbr = null;
        $this->oehhacprogexpdate = null;
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
            if ($this->collSalesHistoryDetails) {
                foreach ($this->collSalesHistoryDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesOrderShipments) {
                foreach ($this->collSalesOrderShipments as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesHistoryLotserials) {
                foreach ($this->collSalesHistoryLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSalesHistoryDetails = null;
        $this->collSalesOrderShipments = null;
        $this->collSalesHistoryLotserials = null;
        $this->aCustomer = null;
        $this->aCustomerShipto = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SalesHistoryTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            // // parent::preSave($con);
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
            // // parent::postSave($con);
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
            // parent::preInsert($con);
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
            // parent::preUpdate($con);
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
            // parent::preDelete($con);
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
