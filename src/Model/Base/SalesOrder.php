<?php

namespace Base;

use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \CustomerShipto as ChildCustomerShipto;
use \CustomerShiptoQuery as ChildCustomerShiptoQuery;
use \SalesOrder as ChildSalesOrder;
use \SalesOrderDetail as ChildSalesOrderDetail;
use \SalesOrderDetailQuery as ChildSalesOrderDetailQuery;
use \SalesOrderLotserial as ChildSalesOrderLotserial;
use \SalesOrderLotserialQuery as ChildSalesOrderLotserialQuery;
use \SalesOrderQuery as ChildSalesOrderQuery;
use \SalesOrderShipment as ChildSalesOrderShipment;
use \SalesOrderShipmentQuery as ChildSalesOrderShipmentQuery;
use \SoAllocatedLotserial as ChildSoAllocatedLotserial;
use \SoAllocatedLotserialQuery as ChildSoAllocatedLotserialQuery;
use \Exception;
use \PDO;
use Map\SalesOrderDetailTableMap;
use Map\SalesOrderLotserialTableMap;
use Map\SalesOrderShipmentTableMap;
use Map\SalesOrderTableMap;
use Map\SoAllocatedLotserialTableMap;
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
 * Base class that represents a row from the 'so_header' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class SalesOrder implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\SalesOrderTableMap';


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
     * The value for the oehdnbr field.
     *
     * @var        string
     */
    protected $oehdnbr;

    /**
     * The value for the oehdstat field.
     *
     * @var        string
     */
    protected $oehdstat;

    /**
     * The value for the oehdhold field.
     *
     * @var        string
     */
    protected $oehdhold;

    /**
     * The value for the arcucustid field.
     *
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the arstshipid field.
     *
     * @var        string
     */
    protected $arstshipid;

    /**
     * The value for the oehdstname field.
     *
     * @var        string
     */
    protected $oehdstname;

    /**
     * The value for the oehdstlastname field.
     *
     * @var        string
     */
    protected $oehdstlastname;

    /**
     * The value for the oehdstfirstname field.
     *
     * @var        string
     */
    protected $oehdstfirstname;

    /**
     * The value for the oehdstadr1 field.
     *
     * @var        string
     */
    protected $oehdstadr1;

    /**
     * The value for the oehdstadr2 field.
     *
     * @var        string
     */
    protected $oehdstadr2;

    /**
     * The value for the oehdstadr3 field.
     *
     * @var        string
     */
    protected $oehdstadr3;

    /**
     * The value for the oehdstctry field.
     *
     * @var        string
     */
    protected $oehdstctry;

    /**
     * The value for the oehdstcity field.
     *
     * @var        string
     */
    protected $oehdstcity;

    /**
     * The value for the oehdststat field.
     *
     * @var        string
     */
    protected $oehdststat;

    /**
     * The value for the oehdstzipcode field.
     *
     * @var        string
     */
    protected $oehdstzipcode;

    /**
     * The value for the oehdcustpo field.
     *
     * @var        string
     */
    protected $oehdcustpo;

    /**
     * The value for the oehdordrdate field.
     *
     * @var        int
     */
    protected $oehdordrdate;

    /**
     * The value for the artmtermcd field.
     *
     * @var        string
     */
    protected $artmtermcd;

    /**
     * The value for the artbshipvia field.
     *
     * @var        string
     */
    protected $artbshipvia;

    /**
     * The value for the arininvnbr field.
     *
     * @var        string
     */
    protected $arininvnbr;

    /**
     * The value for the oehdinvdate field.
     *
     * @var        string
     */
    protected $oehdinvdate;

    /**
     * The value for the oehdglpd field.
     *
     * @var        int
     */
    protected $oehdglpd;

    /**
     * The value for the arspsaleper1 field.
     *
     * @var        string
     */
    protected $arspsaleper1;

    /**
     * The value for the oehdsp1pct field.
     *
     * @var        string
     */
    protected $oehdsp1pct;

    /**
     * The value for the arspsaleper2 field.
     *
     * @var        string
     */
    protected $arspsaleper2;

    /**
     * The value for the oehdsp2pct field.
     *
     * @var        string
     */
    protected $oehdsp2pct;

    /**
     * The value for the arspsaleper3 field.
     *
     * @var        string
     */
    protected $arspsaleper3;

    /**
     * The value for the oehdsp3pct field.
     *
     * @var        string
     */
    protected $oehdsp3pct;

    /**
     * The value for the oehdcntrnbr field.
     *
     * @var        int
     */
    protected $oehdcntrnbr;

    /**
     * The value for the oehdwibatch field.
     *
     * @var        int
     */
    protected $oehdwibatch;

    /**
     * The value for the oehddroprelhold field.
     *
     * @var        string
     */
    protected $oehddroprelhold;

    /**
     * The value for the oehdtaxsub field.
     *
     * @var        string
     */
    protected $oehdtaxsub;

    /**
     * The value for the oehdnontaxsub field.
     *
     * @var        string
     */
    protected $oehdnontaxsub;

    /**
     * The value for the oehdtaxtot field.
     *
     * @var        string
     */
    protected $oehdtaxtot;

    /**
     * The value for the oehdfrttot field.
     *
     * @var        string
     */
    protected $oehdfrttot;

    /**
     * The value for the oehdmisctot field.
     *
     * @var        string
     */
    protected $oehdmisctot;

    /**
     * The value for the oehdordrtot field.
     *
     * @var        string
     */
    protected $oehdordrtot;

    /**
     * The value for the oehdcosttot field.
     *
     * @var        string
     */
    protected $oehdcosttot;

    /**
     * The value for the oehdspcommlock field.
     *
     * @var        string
     */
    protected $oehdspcommlock;

    /**
     * The value for the oehdtakendate field.
     *
     * @var        string
     */
    protected $oehdtakendate;

    /**
     * The value for the oehdtakentime field.
     *
     * @var        string
     */
    protected $oehdtakentime;

    /**
     * The value for the oehdpickdate field.
     *
     * @var        string
     */
    protected $oehdpickdate;

    /**
     * The value for the oehdpicktime field.
     *
     * @var        string
     */
    protected $oehdpicktime;

    /**
     * The value for the oehdpackdate field.
     *
     * @var        string
     */
    protected $oehdpackdate;

    /**
     * The value for the oehdpacktime field.
     *
     * @var        string
     */
    protected $oehdpacktime;

    /**
     * The value for the oehdverifydate field.
     *
     * @var        string
     */
    protected $oehdverifydate;

    /**
     * The value for the oehdverifytime field.
     *
     * @var        string
     */
    protected $oehdverifytime;

    /**
     * The value for the oehdcreditmemo field.
     *
     * @var        string
     */
    protected $oehdcreditmemo;

    /**
     * The value for the oehdbookedyn field.
     *
     * @var        string
     */
    protected $oehdbookedyn;

    /**
     * The value for the intbwhseorig field.
     *
     * @var        string
     */
    protected $intbwhseorig;

    /**
     * The value for the oehdbtstat field.
     *
     * @var        string
     */
    protected $oehdbtstat;

    /**
     * The value for the oehdshipcomp field.
     *
     * @var        string
     */
    protected $oehdshipcomp;

    /**
     * The value for the oehdcwoflag field.
     *
     * @var        string
     */
    protected $oehdcwoflag;

    /**
     * The value for the oehddivision field.
     *
     * @var        string
     */
    protected $oehddivision;

    /**
     * The value for the oehdtakencode field.
     *
     * @var        string
     */
    protected $oehdtakencode;

    /**
     * The value for the oehdpickcode field.
     *
     * @var        string
     */
    protected $oehdpickcode;

    /**
     * The value for the oehdpackcode field.
     *
     * @var        string
     */
    protected $oehdpackcode;

    /**
     * The value for the oehdverifycode field.
     *
     * @var        string
     */
    protected $oehdverifycode;

    /**
     * The value for the oehdtotdisc field.
     *
     * @var        string
     */
    protected $oehdtotdisc;

    /**
     * The value for the oehdedirefnbrqual field.
     *
     * @var        string
     */
    protected $oehdedirefnbrqual;

    /**
     * The value for the oehdusercode1 field.
     *
     * @var        string
     */
    protected $oehdusercode1;

    /**
     * The value for the oehdusercode2 field.
     *
     * @var        string
     */
    protected $oehdusercode2;

    /**
     * The value for the oehdusercode3 field.
     *
     * @var        string
     */
    protected $oehdusercode3;

    /**
     * The value for the oehdusercode4 field.
     *
     * @var        string
     */
    protected $oehdusercode4;

    /**
     * The value for the oehdexchctry field.
     *
     * @var        string
     */
    protected $oehdexchctry;

    /**
     * The value for the oehdexchrate field.
     *
     * @var        string
     */
    protected $oehdexchrate;

    /**
     * The value for the oehdwghttot field.
     *
     * @var        string
     */
    protected $oehdwghttot;

    /**
     * The value for the oehdwghtoride field.
     *
     * @var        string
     */
    protected $oehdwghtoride;

    /**
     * The value for the oehdccinfo field.
     *
     * @var        string
     */
    protected $oehdccinfo;

    /**
     * The value for the oehdboxcount field.
     *
     * @var        int
     */
    protected $oehdboxcount;

    /**
     * The value for the oehdrqstdate field.
     *
     * @var        string
     */
    protected $oehdrqstdate;

    /**
     * The value for the oehdcancdate field.
     *
     * @var        string
     */
    protected $oehdcancdate;

    /**
     * The value for the oehdcrntuser field.
     *
     * @var        string
     */
    protected $oehdcrntuser;

    /**
     * The value for the oehdreleasenbr field.
     *
     * @var        string
     */
    protected $oehdreleasenbr;

    /**
     * The value for the intbwhse field.
     *
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the oehdbordbuilddate field.
     *
     * @var        string
     */
    protected $oehdbordbuilddate;

    /**
     * The value for the oehddeptcode field.
     *
     * @var        string
     */
    protected $oehddeptcode;

    /**
     * The value for the oehdfrtinentered field.
     *
     * @var        string
     */
    protected $oehdfrtinentered;

    /**
     * The value for the oehddropshipentered field.
     *
     * @var        string
     */
    protected $oehddropshipentered;

    /**
     * The value for the oehderflag field.
     *
     * @var        string
     */
    protected $oehderflag;

    /**
     * The value for the oehdfrtin field.
     *
     * @var        string
     */
    protected $oehdfrtin;

    /**
     * The value for the oehddropship field.
     *
     * @var        string
     */
    protected $oehddropship;

    /**
     * The value for the oehdminorder field.
     *
     * @var        string
     */
    protected $oehdminorder;

    /**
     * The value for the oehdcontractterms field.
     *
     * @var        string
     */
    protected $oehdcontractterms;

    /**
     * The value for the oehddropshipbilled field.
     *
     * @var        string
     */
    protected $oehddropshipbilled;

    /**
     * The value for the oehdordtyp field.
     *
     * @var        string
     */
    protected $oehdordtyp;

    /**
     * The value for the oehdtracknbr field.
     *
     * @var        string
     */
    protected $oehdtracknbr;

    /**
     * The value for the oehdsource field.
     *
     * @var        string
     */
    protected $oehdsource;

    /**
     * The value for the oehdccaprv field.
     *
     * @var        string
     */
    protected $oehdccaprv;

    /**
     * The value for the oehdpickfmattype field.
     *
     * @var        string
     */
    protected $oehdpickfmattype;

    /**
     * The value for the oehdinvcfmattype field.
     *
     * @var        string
     */
    protected $oehdinvcfmattype;

    /**
     * The value for the oehdcashamt field.
     *
     * @var        string
     */
    protected $oehdcashamt;

    /**
     * The value for the oehdcheckamt field.
     *
     * @var        string
     */
    protected $oehdcheckamt;

    /**
     * The value for the oehdchecknbr field.
     *
     * @var        string
     */
    protected $oehdchecknbr;

    /**
     * The value for the oehddepositamt field.
     *
     * @var        string
     */
    protected $oehddepositamt;

    /**
     * The value for the oehddepositnbr field.
     *
     * @var        string
     */
    protected $oehddepositnbr;

    /**
     * The value for the oehdccamt field.
     *
     * @var        string
     */
    protected $oehdccamt;

    /**
     * The value for the oehdotaxsub field.
     *
     * @var        string
     */
    protected $oehdotaxsub;

    /**
     * The value for the oehdonontaxsub field.
     *
     * @var        string
     */
    protected $oehdonontaxsub;

    /**
     * The value for the oehdotaxtot field.
     *
     * @var        string
     */
    protected $oehdotaxtot;

    /**
     * The value for the oehdoordrtot field.
     *
     * @var        string
     */
    protected $oehdoordrtot;

    /**
     * The value for the oehdpickprintdate field.
     *
     * @var        string
     */
    protected $oehdpickprintdate;

    /**
     * The value for the oehdpickprinttime field.
     *
     * @var        string
     */
    protected $oehdpickprinttime;

    /**
     * The value for the oehdcont field.
     *
     * @var        string
     */
    protected $oehdcont;

    /**
     * The value for the oehdcontteleintl field.
     *
     * @var        string
     */
    protected $oehdcontteleintl;

    /**
     * The value for the oehdconttelenbr field.
     *
     * @var        string
     */
    protected $oehdconttelenbr;

    /**
     * The value for the oehdcontteleext field.
     *
     * @var        string
     */
    protected $oehdcontteleext;

    /**
     * The value for the oehdcontfaxintl field.
     *
     * @var        string
     */
    protected $oehdcontfaxintl;

    /**
     * The value for the oehdcontfaxnbr field.
     *
     * @var        string
     */
    protected $oehdcontfaxnbr;

    /**
     * The value for the oehdshipacct field.
     *
     * @var        string
     */
    protected $oehdshipacct;

    /**
     * The value for the oehdchgdue field.
     *
     * @var        string
     */
    protected $oehdchgdue;

    /**
     * The value for the oehdaddlpricdisc field.
     *
     * @var        string
     */
    protected $oehdaddlpricdisc;

    /**
     * The value for the oehdallship field.
     *
     * @var        string
     */
    protected $oehdallship;

    /**
     * The value for the oehdqtyorderamt field.
     *
     * @var        string
     */
    protected $oehdqtyorderamt;

    /**
     * The value for the oehdcreditapplied field.
     *
     * @var        string
     */
    protected $oehdcreditapplied;

    /**
     * The value for the oehdinvcprintdate field.
     *
     * @var        string
     */
    protected $oehdinvcprintdate;

    /**
     * The value for the oehdinvcprinttime field.
     *
     * @var        string
     */
    protected $oehdinvcprinttime;

    /**
     * The value for the oehddiscfrt field.
     *
     * @var        string
     */
    protected $oehddiscfrt;

    /**
     * The value for the oehdorideshipcomp field.
     *
     * @var        string
     */
    protected $oehdorideshipcomp;

    /**
     * The value for the oehdcontemail field.
     *
     * @var        string
     */
    protected $oehdcontemail;

    /**
     * The value for the oehdmanualfrt field.
     *
     * @var        string
     */
    protected $oehdmanualfrt;

    /**
     * The value for the oehdinternalfrt field.
     *
     * @var        string
     */
    protected $oehdinternalfrt;

    /**
     * The value for the oehdfrtcost field.
     *
     * @var        string
     */
    protected $oehdfrtcost;

    /**
     * The value for the oehdroute field.
     *
     * @var        string
     */
    protected $oehdroute;

    /**
     * The value for the oehdrouteseq field.
     *
     * @var        int
     */
    protected $oehdrouteseq;

    /**
     * The value for the oehdfrttaxcode1 field.
     *
     * @var        string
     */
    protected $oehdfrttaxcode1;

    /**
     * The value for the oehdfrttaxamt1 field.
     *
     * @var        string
     */
    protected $oehdfrttaxamt1;

    /**
     * The value for the oehdfrttaxcode2 field.
     *
     * @var        string
     */
    protected $oehdfrttaxcode2;

    /**
     * The value for the oehdfrttaxamt2 field.
     *
     * @var        string
     */
    protected $oehdfrttaxamt2;

    /**
     * The value for the oehdfrttaxcode3 field.
     *
     * @var        string
     */
    protected $oehdfrttaxcode3;

    /**
     * The value for the oehdfrttaxamt3 field.
     *
     * @var        string
     */
    protected $oehdfrttaxamt3;

    /**
     * The value for the oehdfrttaxcode4 field.
     *
     * @var        string
     */
    protected $oehdfrttaxcode4;

    /**
     * The value for the oehdfrttaxamt4 field.
     *
     * @var        string
     */
    protected $oehdfrttaxamt4;

    /**
     * The value for the oehdfrttaxcode5 field.
     *
     * @var        string
     */
    protected $oehdfrttaxcode5;

    /**
     * The value for the oehdfrttaxamt5 field.
     *
     * @var        string
     */
    protected $oehdfrttaxamt5;

    /**
     * The value for the oehdedi855sent field.
     *
     * @var        string
     */
    protected $oehdedi855sent;

    /**
     * The value for the oehdfrt3rdparty field.
     *
     * @var        string
     */
    protected $oehdfrt3rdparty;

    /**
     * The value for the oehdfob field.
     *
     * @var        string
     */
    protected $oehdfob;

    /**
     * The value for the oehdconfirmimagyn field.
     *
     * @var        string
     */
    protected $oehdconfirmimagyn;

    /**
     * The value for the oehdindustconform field.
     *
     * @var        string
     */
    protected $oehdindustconform;

    /**
     * The value for the oehdcstkconsign field.
     *
     * @var        string
     */
    protected $oehdcstkconsign;

    /**
     * The value for the oehdlmdelaycapsent field.
     *
     * @var        string
     */
    protected $oehdlmdelaycapsent;

    /**
     * The value for the oehdmfgid field.
     *
     * @var        string
     */
    protected $oehdmfgid;

    /**
     * The value for the oehdstoreid field.
     *
     * @var        string
     */
    protected $oehdstoreid;

    /**
     * The value for the oehdpickqueue field.
     *
     * @var        string
     */
    protected $oehdpickqueue;

    /**
     * The value for the oehdarrvdate field.
     *
     * @var        string
     */
    protected $oehdarrvdate;

    /**
     * The value for the oehdsurchgstat field.
     *
     * @var        string
     */
    protected $oehdsurchgstat;

    /**
     * The value for the oehdfrtgrup field.
     *
     * @var        string
     */
    protected $oehdfrtgrup;

    /**
     * The value for the oehdcommoride field.
     *
     * @var        string
     */
    protected $oehdcommoride;

    /**
     * The value for the oehdchrgsplt field.
     *
     * @var        string
     */
    protected $oehdchrgsplt;

    /**
     * The value for the oehdacccaprv field.
     *
     * @var        string
     */
    protected $oehdacccaprv;

    /**
     * The value for the oehdorigordrnbr field.
     *
     * @var        string
     */
    protected $oehdorigordrnbr;

    /**
     * The value for the oehdpostdate field.
     *
     * @var        string
     */
    protected $oehdpostdate;

    /**
     * The value for the oehddiscdate1 field.
     *
     * @var        string
     */
    protected $oehddiscdate1;

    /**
     * The value for the oehddiscpct1 field.
     *
     * @var        string
     */
    protected $oehddiscpct1;

    /**
     * The value for the oehdduedate1 field.
     *
     * @var        string
     */
    protected $oehdduedate1;

    /**
     * The value for the oehddueamt1 field.
     *
     * @var        string
     */
    protected $oehddueamt1;

    /**
     * The value for the oehdduepct1 field.
     *
     * @var        string
     */
    protected $oehdduepct1;

    /**
     * The value for the oehddiscdate2 field.
     *
     * @var        string
     */
    protected $oehddiscdate2;

    /**
     * The value for the oehddiscpct2 field.
     *
     * @var        string
     */
    protected $oehddiscpct2;

    /**
     * The value for the oehdduedate2 field.
     *
     * @var        string
     */
    protected $oehdduedate2;

    /**
     * The value for the oehddueamt2 field.
     *
     * @var        string
     */
    protected $oehddueamt2;

    /**
     * The value for the oehdduepct2 field.
     *
     * @var        string
     */
    protected $oehdduepct2;

    /**
     * The value for the oehddiscdate3 field.
     *
     * @var        string
     */
    protected $oehddiscdate3;

    /**
     * The value for the oehddiscpct3 field.
     *
     * @var        string
     */
    protected $oehddiscpct3;

    /**
     * The value for the oehdduedate3 field.
     *
     * @var        string
     */
    protected $oehdduedate3;

    /**
     * The value for the oehddueamt3 field.
     *
     * @var        string
     */
    protected $oehddueamt3;

    /**
     * The value for the oehdduepct3 field.
     *
     * @var        string
     */
    protected $oehdduepct3;

    /**
     * The value for the oehddiscdate4 field.
     *
     * @var        string
     */
    protected $oehddiscdate4;

    /**
     * The value for the oehddiscpct4 field.
     *
     * @var        string
     */
    protected $oehddiscpct4;

    /**
     * The value for the oehdduedate4 field.
     *
     * @var        string
     */
    protected $oehdduedate4;

    /**
     * The value for the oehddueamt4 field.
     *
     * @var        string
     */
    protected $oehddueamt4;

    /**
     * The value for the oehdduepct4 field.
     *
     * @var        string
     */
    protected $oehdduepct4;

    /**
     * The value for the oehddiscdate5 field.
     *
     * @var        string
     */
    protected $oehddiscdate5;

    /**
     * The value for the oehddiscpct5 field.
     *
     * @var        string
     */
    protected $oehddiscpct5;

    /**
     * The value for the oehdduedate5 field.
     *
     * @var        string
     */
    protected $oehdduedate5;

    /**
     * The value for the oehddueamt5 field.
     *
     * @var        string
     */
    protected $oehddueamt5;

    /**
     * The value for the oehdduepct5 field.
     *
     * @var        string
     */
    protected $oehdduepct5;

    /**
     * The value for the oehddiscdate6 field.
     *
     * @var        string
     */
    protected $oehddiscdate6;

    /**
     * The value for the oehddiscpct6 field.
     *
     * @var        string
     */
    protected $oehddiscpct6;

    /**
     * The value for the oehdduedate6 field.
     *
     * @var        string
     */
    protected $oehdduedate6;

    /**
     * The value for the oehddueamt6 field.
     *
     * @var        string
     */
    protected $oehddueamt6;

    /**
     * The value for the oehdduepct6 field.
     *
     * @var        string
     */
    protected $oehdduepct6;

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
     * @var        ChildCustomer
     */
    protected $aCustomer;

    /**
     * @var        ChildCustomerShipto
     */
    protected $aCustomerShipto;

    /**
     * @var        ObjectCollection|ChildSalesOrderDetail[] Collection to store aggregation of ChildSalesOrderDetail objects.
     */
    protected $collSalesOrderDetails;
    protected $collSalesOrderDetailsPartial;

    /**
     * @var        ObjectCollection|ChildSalesOrderShipment[] Collection to store aggregation of ChildSalesOrderShipment objects.
     */
    protected $collSalesOrderShipments;
    protected $collSalesOrderShipmentsPartial;

    /**
     * @var        ObjectCollection|ChildSalesOrderLotserial[] Collection to store aggregation of ChildSalesOrderLotserial objects.
     */
    protected $collSalesOrderLotserials;
    protected $collSalesOrderLotserialsPartial;

    /**
     * @var        ObjectCollection|ChildSoAllocatedLotserial[] Collection to store aggregation of ChildSoAllocatedLotserial objects.
     */
    protected $collSoAllocatedLotserials;
    protected $collSoAllocatedLotserialsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesOrderDetail[]
     */
    protected $salesOrderDetailsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesOrderShipment[]
     */
    protected $salesOrderShipmentsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSalesOrderLotserial[]
     */
    protected $salesOrderLotserialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSoAllocatedLotserial[]
     */
    protected $soAllocatedLotserialsScheduledForDeletion = null;

    /**
     * Initializes internal state of Base\SalesOrder object.
     */
    public function __construct()
    {
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
     * Compares this with another <code>SalesOrder</code> instance.  If
     * <code>obj</code> is an instance of <code>SalesOrder</code>, delegates to
     * <code>equals(SalesOrder)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|SalesOrder The current object, for fluid interface
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
     * Get the [oehdnbr] column value.
     *
     * @return string
     */
    public function getOehdnbr()
    {
        return $this->oehdnbr;
    }

    /**
     * Get the [oehdstat] column value.
     *
     * @return string
     */
    public function getOehdstat()
    {
        return $this->oehdstat;
    }

    /**
     * Get the [oehdhold] column value.
     *
     * @return string
     */
    public function getOehdhold()
    {
        return $this->oehdhold;
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
     * Get the [oehdstname] column value.
     *
     * @return string
     */
    public function getOehdstname()
    {
        return $this->oehdstname;
    }

    /**
     * Get the [oehdstlastname] column value.
     *
     * @return string
     */
    public function getOehdstlastname()
    {
        return $this->oehdstlastname;
    }

    /**
     * Get the [oehdstfirstname] column value.
     *
     * @return string
     */
    public function getOehdstfirstname()
    {
        return $this->oehdstfirstname;
    }

    /**
     * Get the [oehdstadr1] column value.
     *
     * @return string
     */
    public function getOehdstadr1()
    {
        return $this->oehdstadr1;
    }

    /**
     * Get the [oehdstadr2] column value.
     *
     * @return string
     */
    public function getOehdstadr2()
    {
        return $this->oehdstadr2;
    }

    /**
     * Get the [oehdstadr3] column value.
     *
     * @return string
     */
    public function getOehdstadr3()
    {
        return $this->oehdstadr3;
    }

    /**
     * Get the [oehdstctry] column value.
     *
     * @return string
     */
    public function getOehdstctry()
    {
        return $this->oehdstctry;
    }

    /**
     * Get the [oehdstcity] column value.
     *
     * @return string
     */
    public function getOehdstcity()
    {
        return $this->oehdstcity;
    }

    /**
     * Get the [oehdststat] column value.
     *
     * @return string
     */
    public function getOehdststat()
    {
        return $this->oehdststat;
    }

    /**
     * Get the [oehdstzipcode] column value.
     *
     * @return string
     */
    public function getOehdstzipcode()
    {
        return $this->oehdstzipcode;
    }

    /**
     * Get the [oehdcustpo] column value.
     *
     * @return string
     */
    public function getOehdcustpo()
    {
        return $this->oehdcustpo;
    }

    /**
     * Get the [oehdordrdate] column value.
     *
     * @return int
     */
    public function getOehdordrdate()
    {
        return $this->oehdordrdate;
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
     * Get the [oehdinvdate] column value.
     *
     * @return string
     */
    public function getOehdinvdate()
    {
        return $this->oehdinvdate;
    }

    /**
     * Get the [oehdglpd] column value.
     *
     * @return int
     */
    public function getOehdglpd()
    {
        return $this->oehdglpd;
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
     * Get the [oehdsp1pct] column value.
     *
     * @return string
     */
    public function getOehdsp1pct()
    {
        return $this->oehdsp1pct;
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
     * Get the [oehdsp2pct] column value.
     *
     * @return string
     */
    public function getOehdsp2pct()
    {
        return $this->oehdsp2pct;
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
     * Get the [oehdsp3pct] column value.
     *
     * @return string
     */
    public function getOehdsp3pct()
    {
        return $this->oehdsp3pct;
    }

    /**
     * Get the [oehdcntrnbr] column value.
     *
     * @return int
     */
    public function getOehdcntrnbr()
    {
        return $this->oehdcntrnbr;
    }

    /**
     * Get the [oehdwibatch] column value.
     *
     * @return int
     */
    public function getOehdwibatch()
    {
        return $this->oehdwibatch;
    }

    /**
     * Get the [oehddroprelhold] column value.
     *
     * @return string
     */
    public function getOehddroprelhold()
    {
        return $this->oehddroprelhold;
    }

    /**
     * Get the [oehdtaxsub] column value.
     *
     * @return string
     */
    public function getOehdtaxsub()
    {
        return $this->oehdtaxsub;
    }

    /**
     * Get the [oehdnontaxsub] column value.
     *
     * @return string
     */
    public function getOehdnontaxsub()
    {
        return $this->oehdnontaxsub;
    }

    /**
     * Get the [oehdtaxtot] column value.
     *
     * @return string
     */
    public function getOehdtaxtot()
    {
        return $this->oehdtaxtot;
    }

    /**
     * Get the [oehdfrttot] column value.
     *
     * @return string
     */
    public function getOehdfrttot()
    {
        return $this->oehdfrttot;
    }

    /**
     * Get the [oehdmisctot] column value.
     *
     * @return string
     */
    public function getOehdmisctot()
    {
        return $this->oehdmisctot;
    }

    /**
     * Get the [oehdordrtot] column value.
     *
     * @return string
     */
    public function getOehdordrtot()
    {
        return $this->oehdordrtot;
    }

    /**
     * Get the [oehdcosttot] column value.
     *
     * @return string
     */
    public function getOehdcosttot()
    {
        return $this->oehdcosttot;
    }

    /**
     * Get the [oehdspcommlock] column value.
     *
     * @return string
     */
    public function getOehdspcommlock()
    {
        return $this->oehdspcommlock;
    }

    /**
     * Get the [oehdtakendate] column value.
     *
     * @return string
     */
    public function getOehdtakendate()
    {
        return $this->oehdtakendate;
    }

    /**
     * Get the [oehdtakentime] column value.
     *
     * @return string
     */
    public function getOehdtakentime()
    {
        return $this->oehdtakentime;
    }

    /**
     * Get the [oehdpickdate] column value.
     *
     * @return string
     */
    public function getOehdpickdate()
    {
        return $this->oehdpickdate;
    }

    /**
     * Get the [oehdpicktime] column value.
     *
     * @return string
     */
    public function getOehdpicktime()
    {
        return $this->oehdpicktime;
    }

    /**
     * Get the [oehdpackdate] column value.
     *
     * @return string
     */
    public function getOehdpackdate()
    {
        return $this->oehdpackdate;
    }

    /**
     * Get the [oehdpacktime] column value.
     *
     * @return string
     */
    public function getOehdpacktime()
    {
        return $this->oehdpacktime;
    }

    /**
     * Get the [oehdverifydate] column value.
     *
     * @return string
     */
    public function getOehdverifydate()
    {
        return $this->oehdverifydate;
    }

    /**
     * Get the [oehdverifytime] column value.
     *
     * @return string
     */
    public function getOehdverifytime()
    {
        return $this->oehdverifytime;
    }

    /**
     * Get the [oehdcreditmemo] column value.
     *
     * @return string
     */
    public function getOehdcreditmemo()
    {
        return $this->oehdcreditmemo;
    }

    /**
     * Get the [oehdbookedyn] column value.
     *
     * @return string
     */
    public function getOehdbookedyn()
    {
        return $this->oehdbookedyn;
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
     * Get the [oehdbtstat] column value.
     *
     * @return string
     */
    public function getOehdbtstat()
    {
        return $this->oehdbtstat;
    }

    /**
     * Get the [oehdshipcomp] column value.
     *
     * @return string
     */
    public function getOehdshipcomp()
    {
        return $this->oehdshipcomp;
    }

    /**
     * Get the [oehdcwoflag] column value.
     *
     * @return string
     */
    public function getOehdcwoflag()
    {
        return $this->oehdcwoflag;
    }

    /**
     * Get the [oehddivision] column value.
     *
     * @return string
     */
    public function getOehddivision()
    {
        return $this->oehddivision;
    }

    /**
     * Get the [oehdtakencode] column value.
     *
     * @return string
     */
    public function getOehdtakencode()
    {
        return $this->oehdtakencode;
    }

    /**
     * Get the [oehdpickcode] column value.
     *
     * @return string
     */
    public function getOehdpickcode()
    {
        return $this->oehdpickcode;
    }

    /**
     * Get the [oehdpackcode] column value.
     *
     * @return string
     */
    public function getOehdpackcode()
    {
        return $this->oehdpackcode;
    }

    /**
     * Get the [oehdverifycode] column value.
     *
     * @return string
     */
    public function getOehdverifycode()
    {
        return $this->oehdverifycode;
    }

    /**
     * Get the [oehdtotdisc] column value.
     *
     * @return string
     */
    public function getOehdtotdisc()
    {
        return $this->oehdtotdisc;
    }

    /**
     * Get the [oehdedirefnbrqual] column value.
     *
     * @return string
     */
    public function getOehdedirefnbrqual()
    {
        return $this->oehdedirefnbrqual;
    }

    /**
     * Get the [oehdusercode1] column value.
     *
     * @return string
     */
    public function getOehdusercode1()
    {
        return $this->oehdusercode1;
    }

    /**
     * Get the [oehdusercode2] column value.
     *
     * @return string
     */
    public function getOehdusercode2()
    {
        return $this->oehdusercode2;
    }

    /**
     * Get the [oehdusercode3] column value.
     *
     * @return string
     */
    public function getOehdusercode3()
    {
        return $this->oehdusercode3;
    }

    /**
     * Get the [oehdusercode4] column value.
     *
     * @return string
     */
    public function getOehdusercode4()
    {
        return $this->oehdusercode4;
    }

    /**
     * Get the [oehdexchctry] column value.
     *
     * @return string
     */
    public function getOehdexchctry()
    {
        return $this->oehdexchctry;
    }

    /**
     * Get the [oehdexchrate] column value.
     *
     * @return string
     */
    public function getOehdexchrate()
    {
        return $this->oehdexchrate;
    }

    /**
     * Get the [oehdwghttot] column value.
     *
     * @return string
     */
    public function getOehdwghttot()
    {
        return $this->oehdwghttot;
    }

    /**
     * Get the [oehdwghtoride] column value.
     *
     * @return string
     */
    public function getOehdwghtoride()
    {
        return $this->oehdwghtoride;
    }

    /**
     * Get the [oehdccinfo] column value.
     *
     * @return string
     */
    public function getOehdccinfo()
    {
        return $this->oehdccinfo;
    }

    /**
     * Get the [oehdboxcount] column value.
     *
     * @return int
     */
    public function getOehdboxcount()
    {
        return $this->oehdboxcount;
    }

    /**
     * Get the [oehdrqstdate] column value.
     *
     * @return string
     */
    public function getOehdrqstdate()
    {
        return $this->oehdrqstdate;
    }

    /**
     * Get the [oehdcancdate] column value.
     *
     * @return string
     */
    public function getOehdcancdate()
    {
        return $this->oehdcancdate;
    }

    /**
     * Get the [oehdcrntuser] column value.
     *
     * @return string
     */
    public function getOehdcrntuser()
    {
        return $this->oehdcrntuser;
    }

    /**
     * Get the [oehdreleasenbr] column value.
     *
     * @return string
     */
    public function getOehdreleasenbr()
    {
        return $this->oehdreleasenbr;
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
     * Get the [oehdbordbuilddate] column value.
     *
     * @return string
     */
    public function getOehdbordbuilddate()
    {
        return $this->oehdbordbuilddate;
    }

    /**
     * Get the [oehddeptcode] column value.
     *
     * @return string
     */
    public function getOehddeptcode()
    {
        return $this->oehddeptcode;
    }

    /**
     * Get the [oehdfrtinentered] column value.
     *
     * @return string
     */
    public function getOehdfrtinentered()
    {
        return $this->oehdfrtinentered;
    }

    /**
     * Get the [oehddropshipentered] column value.
     *
     * @return string
     */
    public function getOehddropshipentered()
    {
        return $this->oehddropshipentered;
    }

    /**
     * Get the [oehderflag] column value.
     *
     * @return string
     */
    public function getOehderflag()
    {
        return $this->oehderflag;
    }

    /**
     * Get the [oehdfrtin] column value.
     *
     * @return string
     */
    public function getOehdfrtin()
    {
        return $this->oehdfrtin;
    }

    /**
     * Get the [oehddropship] column value.
     *
     * @return string
     */
    public function getOehddropship()
    {
        return $this->oehddropship;
    }

    /**
     * Get the [oehdminorder] column value.
     *
     * @return string
     */
    public function getOehdminorder()
    {
        return $this->oehdminorder;
    }

    /**
     * Get the [oehdcontractterms] column value.
     *
     * @return string
     */
    public function getOehdcontractterms()
    {
        return $this->oehdcontractterms;
    }

    /**
     * Get the [oehddropshipbilled] column value.
     *
     * @return string
     */
    public function getOehddropshipbilled()
    {
        return $this->oehddropshipbilled;
    }

    /**
     * Get the [oehdordtyp] column value.
     *
     * @return string
     */
    public function getOehdordtyp()
    {
        return $this->oehdordtyp;
    }

    /**
     * Get the [oehdtracknbr] column value.
     *
     * @return string
     */
    public function getOehdtracknbr()
    {
        return $this->oehdtracknbr;
    }

    /**
     * Get the [oehdsource] column value.
     *
     * @return string
     */
    public function getOehdsource()
    {
        return $this->oehdsource;
    }

    /**
     * Get the [oehdccaprv] column value.
     *
     * @return string
     */
    public function getOehdccaprv()
    {
        return $this->oehdccaprv;
    }

    /**
     * Get the [oehdpickfmattype] column value.
     *
     * @return string
     */
    public function getOehdpickfmattype()
    {
        return $this->oehdpickfmattype;
    }

    /**
     * Get the [oehdinvcfmattype] column value.
     *
     * @return string
     */
    public function getOehdinvcfmattype()
    {
        return $this->oehdinvcfmattype;
    }

    /**
     * Get the [oehdcashamt] column value.
     *
     * @return string
     */
    public function getOehdcashamt()
    {
        return $this->oehdcashamt;
    }

    /**
     * Get the [oehdcheckamt] column value.
     *
     * @return string
     */
    public function getOehdcheckamt()
    {
        return $this->oehdcheckamt;
    }

    /**
     * Get the [oehdchecknbr] column value.
     *
     * @return string
     */
    public function getOehdchecknbr()
    {
        return $this->oehdchecknbr;
    }

    /**
     * Get the [oehddepositamt] column value.
     *
     * @return string
     */
    public function getOehddepositamt()
    {
        return $this->oehddepositamt;
    }

    /**
     * Get the [oehddepositnbr] column value.
     *
     * @return string
     */
    public function getOehddepositnbr()
    {
        return $this->oehddepositnbr;
    }

    /**
     * Get the [oehdccamt] column value.
     *
     * @return string
     */
    public function getOehdccamt()
    {
        return $this->oehdccamt;
    }

    /**
     * Get the [oehdotaxsub] column value.
     *
     * @return string
     */
    public function getOehdotaxsub()
    {
        return $this->oehdotaxsub;
    }

    /**
     * Get the [oehdonontaxsub] column value.
     *
     * @return string
     */
    public function getOehdonontaxsub()
    {
        return $this->oehdonontaxsub;
    }

    /**
     * Get the [oehdotaxtot] column value.
     *
     * @return string
     */
    public function getOehdotaxtot()
    {
        return $this->oehdotaxtot;
    }

    /**
     * Get the [oehdoordrtot] column value.
     *
     * @return string
     */
    public function getOehdoordrtot()
    {
        return $this->oehdoordrtot;
    }

    /**
     * Get the [oehdpickprintdate] column value.
     *
     * @return string
     */
    public function getOehdpickprintdate()
    {
        return $this->oehdpickprintdate;
    }

    /**
     * Get the [oehdpickprinttime] column value.
     *
     * @return string
     */
    public function getOehdpickprinttime()
    {
        return $this->oehdpickprinttime;
    }

    /**
     * Get the [oehdcont] column value.
     *
     * @return string
     */
    public function getOehdcont()
    {
        return $this->oehdcont;
    }

    /**
     * Get the [oehdcontteleintl] column value.
     *
     * @return string
     */
    public function getOehdcontteleintl()
    {
        return $this->oehdcontteleintl;
    }

    /**
     * Get the [oehdconttelenbr] column value.
     *
     * @return string
     */
    public function getOehdconttelenbr()
    {
        return $this->oehdconttelenbr;
    }

    /**
     * Get the [oehdcontteleext] column value.
     *
     * @return string
     */
    public function getOehdcontteleext()
    {
        return $this->oehdcontteleext;
    }

    /**
     * Get the [oehdcontfaxintl] column value.
     *
     * @return string
     */
    public function getOehdcontfaxintl()
    {
        return $this->oehdcontfaxintl;
    }

    /**
     * Get the [oehdcontfaxnbr] column value.
     *
     * @return string
     */
    public function getOehdcontfaxnbr()
    {
        return $this->oehdcontfaxnbr;
    }

    /**
     * Get the [oehdshipacct] column value.
     *
     * @return string
     */
    public function getOehdshipacct()
    {
        return $this->oehdshipacct;
    }

    /**
     * Get the [oehdchgdue] column value.
     *
     * @return string
     */
    public function getOehdchgdue()
    {
        return $this->oehdchgdue;
    }

    /**
     * Get the [oehdaddlpricdisc] column value.
     *
     * @return string
     */
    public function getOehdaddlpricdisc()
    {
        return $this->oehdaddlpricdisc;
    }

    /**
     * Get the [oehdallship] column value.
     *
     * @return string
     */
    public function getOehdallship()
    {
        return $this->oehdallship;
    }

    /**
     * Get the [oehdqtyorderamt] column value.
     *
     * @return string
     */
    public function getOehdqtyorderamt()
    {
        return $this->oehdqtyorderamt;
    }

    /**
     * Get the [oehdcreditapplied] column value.
     *
     * @return string
     */
    public function getOehdcreditapplied()
    {
        return $this->oehdcreditapplied;
    }

    /**
     * Get the [oehdinvcprintdate] column value.
     *
     * @return string
     */
    public function getOehdinvcprintdate()
    {
        return $this->oehdinvcprintdate;
    }

    /**
     * Get the [oehdinvcprinttime] column value.
     *
     * @return string
     */
    public function getOehdinvcprinttime()
    {
        return $this->oehdinvcprinttime;
    }

    /**
     * Get the [oehddiscfrt] column value.
     *
     * @return string
     */
    public function getOehddiscfrt()
    {
        return $this->oehddiscfrt;
    }

    /**
     * Get the [oehdorideshipcomp] column value.
     *
     * @return string
     */
    public function getOehdorideshipcomp()
    {
        return $this->oehdorideshipcomp;
    }

    /**
     * Get the [oehdcontemail] column value.
     *
     * @return string
     */
    public function getOehdcontemail()
    {
        return $this->oehdcontemail;
    }

    /**
     * Get the [oehdmanualfrt] column value.
     *
     * @return string
     */
    public function getOehdmanualfrt()
    {
        return $this->oehdmanualfrt;
    }

    /**
     * Get the [oehdinternalfrt] column value.
     *
     * @return string
     */
    public function getOehdinternalfrt()
    {
        return $this->oehdinternalfrt;
    }

    /**
     * Get the [oehdfrtcost] column value.
     *
     * @return string
     */
    public function getOehdfrtcost()
    {
        return $this->oehdfrtcost;
    }

    /**
     * Get the [oehdroute] column value.
     *
     * @return string
     */
    public function getOehdroute()
    {
        return $this->oehdroute;
    }

    /**
     * Get the [oehdrouteseq] column value.
     *
     * @return int
     */
    public function getOehdrouteseq()
    {
        return $this->oehdrouteseq;
    }

    /**
     * Get the [oehdfrttaxcode1] column value.
     *
     * @return string
     */
    public function getOehdfrttaxcode1()
    {
        return $this->oehdfrttaxcode1;
    }

    /**
     * Get the [oehdfrttaxamt1] column value.
     *
     * @return string
     */
    public function getOehdfrttaxamt1()
    {
        return $this->oehdfrttaxamt1;
    }

    /**
     * Get the [oehdfrttaxcode2] column value.
     *
     * @return string
     */
    public function getOehdfrttaxcode2()
    {
        return $this->oehdfrttaxcode2;
    }

    /**
     * Get the [oehdfrttaxamt2] column value.
     *
     * @return string
     */
    public function getOehdfrttaxamt2()
    {
        return $this->oehdfrttaxamt2;
    }

    /**
     * Get the [oehdfrttaxcode3] column value.
     *
     * @return string
     */
    public function getOehdfrttaxcode3()
    {
        return $this->oehdfrttaxcode3;
    }

    /**
     * Get the [oehdfrttaxamt3] column value.
     *
     * @return string
     */
    public function getOehdfrttaxamt3()
    {
        return $this->oehdfrttaxamt3;
    }

    /**
     * Get the [oehdfrttaxcode4] column value.
     *
     * @return string
     */
    public function getOehdfrttaxcode4()
    {
        return $this->oehdfrttaxcode4;
    }

    /**
     * Get the [oehdfrttaxamt4] column value.
     *
     * @return string
     */
    public function getOehdfrttaxamt4()
    {
        return $this->oehdfrttaxamt4;
    }

    /**
     * Get the [oehdfrttaxcode5] column value.
     *
     * @return string
     */
    public function getOehdfrttaxcode5()
    {
        return $this->oehdfrttaxcode5;
    }

    /**
     * Get the [oehdfrttaxamt5] column value.
     *
     * @return string
     */
    public function getOehdfrttaxamt5()
    {
        return $this->oehdfrttaxamt5;
    }

    /**
     * Get the [oehdedi855sent] column value.
     *
     * @return string
     */
    public function getOehdedi855sent()
    {
        return $this->oehdedi855sent;
    }

    /**
     * Get the [oehdfrt3rdparty] column value.
     *
     * @return string
     */
    public function getOehdfrt3rdparty()
    {
        return $this->oehdfrt3rdparty;
    }

    /**
     * Get the [oehdfob] column value.
     *
     * @return string
     */
    public function getOehdfob()
    {
        return $this->oehdfob;
    }

    /**
     * Get the [oehdconfirmimagyn] column value.
     *
     * @return string
     */
    public function getOehdconfirmimagyn()
    {
        return $this->oehdconfirmimagyn;
    }

    /**
     * Get the [oehdindustconform] column value.
     *
     * @return string
     */
    public function getOehdindustconform()
    {
        return $this->oehdindustconform;
    }

    /**
     * Get the [oehdcstkconsign] column value.
     *
     * @return string
     */
    public function getOehdcstkconsign()
    {
        return $this->oehdcstkconsign;
    }

    /**
     * Get the [oehdlmdelaycapsent] column value.
     *
     * @return string
     */
    public function getOehdlmdelaycapsent()
    {
        return $this->oehdlmdelaycapsent;
    }

    /**
     * Get the [oehdmfgid] column value.
     *
     * @return string
     */
    public function getOehdmfgid()
    {
        return $this->oehdmfgid;
    }

    /**
     * Get the [oehdstoreid] column value.
     *
     * @return string
     */
    public function getOehdstoreid()
    {
        return $this->oehdstoreid;
    }

    /**
     * Get the [oehdpickqueue] column value.
     *
     * @return string
     */
    public function getOehdpickqueue()
    {
        return $this->oehdpickqueue;
    }

    /**
     * Get the [oehdarrvdate] column value.
     *
     * @return string
     */
    public function getOehdarrvdate()
    {
        return $this->oehdarrvdate;
    }

    /**
     * Get the [oehdsurchgstat] column value.
     *
     * @return string
     */
    public function getOehdsurchgstat()
    {
        return $this->oehdsurchgstat;
    }

    /**
     * Get the [oehdfrtgrup] column value.
     *
     * @return string
     */
    public function getOehdfrtgrup()
    {
        return $this->oehdfrtgrup;
    }

    /**
     * Get the [oehdcommoride] column value.
     *
     * @return string
     */
    public function getOehdcommoride()
    {
        return $this->oehdcommoride;
    }

    /**
     * Get the [oehdchrgsplt] column value.
     *
     * @return string
     */
    public function getOehdchrgsplt()
    {
        return $this->oehdchrgsplt;
    }

    /**
     * Get the [oehdacccaprv] column value.
     *
     * @return string
     */
    public function getOehdacccaprv()
    {
        return $this->oehdacccaprv;
    }

    /**
     * Get the [oehdorigordrnbr] column value.
     *
     * @return string
     */
    public function getOehdorigordrnbr()
    {
        return $this->oehdorigordrnbr;
    }

    /**
     * Get the [oehdpostdate] column value.
     *
     * @return string
     */
    public function getOehdpostdate()
    {
        return $this->oehdpostdate;
    }

    /**
     * Get the [oehddiscdate1] column value.
     *
     * @return string
     */
    public function getOehddiscdate1()
    {
        return $this->oehddiscdate1;
    }

    /**
     * Get the [oehddiscpct1] column value.
     *
     * @return string
     */
    public function getOehddiscpct1()
    {
        return $this->oehddiscpct1;
    }

    /**
     * Get the [oehdduedate1] column value.
     *
     * @return string
     */
    public function getOehdduedate1()
    {
        return $this->oehdduedate1;
    }

    /**
     * Get the [oehddueamt1] column value.
     *
     * @return string
     */
    public function getOehddueamt1()
    {
        return $this->oehddueamt1;
    }

    /**
     * Get the [oehdduepct1] column value.
     *
     * @return string
     */
    public function getOehdduepct1()
    {
        return $this->oehdduepct1;
    }

    /**
     * Get the [oehddiscdate2] column value.
     *
     * @return string
     */
    public function getOehddiscdate2()
    {
        return $this->oehddiscdate2;
    }

    /**
     * Get the [oehddiscpct2] column value.
     *
     * @return string
     */
    public function getOehddiscpct2()
    {
        return $this->oehddiscpct2;
    }

    /**
     * Get the [oehdduedate2] column value.
     *
     * @return string
     */
    public function getOehdduedate2()
    {
        return $this->oehdduedate2;
    }

    /**
     * Get the [oehddueamt2] column value.
     *
     * @return string
     */
    public function getOehddueamt2()
    {
        return $this->oehddueamt2;
    }

    /**
     * Get the [oehdduepct2] column value.
     *
     * @return string
     */
    public function getOehdduepct2()
    {
        return $this->oehdduepct2;
    }

    /**
     * Get the [oehddiscdate3] column value.
     *
     * @return string
     */
    public function getOehddiscdate3()
    {
        return $this->oehddiscdate3;
    }

    /**
     * Get the [oehddiscpct3] column value.
     *
     * @return string
     */
    public function getOehddiscpct3()
    {
        return $this->oehddiscpct3;
    }

    /**
     * Get the [oehdduedate3] column value.
     *
     * @return string
     */
    public function getOehdduedate3()
    {
        return $this->oehdduedate3;
    }

    /**
     * Get the [oehddueamt3] column value.
     *
     * @return string
     */
    public function getOehddueamt3()
    {
        return $this->oehddueamt3;
    }

    /**
     * Get the [oehdduepct3] column value.
     *
     * @return string
     */
    public function getOehdduepct3()
    {
        return $this->oehdduepct3;
    }

    /**
     * Get the [oehddiscdate4] column value.
     *
     * @return string
     */
    public function getOehddiscdate4()
    {
        return $this->oehddiscdate4;
    }

    /**
     * Get the [oehddiscpct4] column value.
     *
     * @return string
     */
    public function getOehddiscpct4()
    {
        return $this->oehddiscpct4;
    }

    /**
     * Get the [oehdduedate4] column value.
     *
     * @return string
     */
    public function getOehdduedate4()
    {
        return $this->oehdduedate4;
    }

    /**
     * Get the [oehddueamt4] column value.
     *
     * @return string
     */
    public function getOehddueamt4()
    {
        return $this->oehddueamt4;
    }

    /**
     * Get the [oehdduepct4] column value.
     *
     * @return string
     */
    public function getOehdduepct4()
    {
        return $this->oehdduepct4;
    }

    /**
     * Get the [oehddiscdate5] column value.
     *
     * @return string
     */
    public function getOehddiscdate5()
    {
        return $this->oehddiscdate5;
    }

    /**
     * Get the [oehddiscpct5] column value.
     *
     * @return string
     */
    public function getOehddiscpct5()
    {
        return $this->oehddiscpct5;
    }

    /**
     * Get the [oehdduedate5] column value.
     *
     * @return string
     */
    public function getOehdduedate5()
    {
        return $this->oehdduedate5;
    }

    /**
     * Get the [oehddueamt5] column value.
     *
     * @return string
     */
    public function getOehddueamt5()
    {
        return $this->oehddueamt5;
    }

    /**
     * Get the [oehdduepct5] column value.
     *
     * @return string
     */
    public function getOehdduepct5()
    {
        return $this->oehdduepct5;
    }

    /**
     * Get the [oehddiscdate6] column value.
     *
     * @return string
     */
    public function getOehddiscdate6()
    {
        return $this->oehddiscdate6;
    }

    /**
     * Get the [oehddiscpct6] column value.
     *
     * @return string
     */
    public function getOehddiscpct6()
    {
        return $this->oehddiscpct6;
    }

    /**
     * Get the [oehdduedate6] column value.
     *
     * @return string
     */
    public function getOehdduedate6()
    {
        return $this->oehdduedate6;
    }

    /**
     * Get the [oehddueamt6] column value.
     *
     * @return string
     */
    public function getOehddueamt6()
    {
        return $this->oehddueamt6;
    }

    /**
     * Get the [oehdduepct6] column value.
     *
     * @return string
     */
    public function getOehdduepct6()
    {
        return $this->oehdduepct6;
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
     * Set the value of [oehdnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdnbr !== $v) {
            $this->oehdnbr = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDNBR] = true;
        }

        return $this;
    } // setOehdnbr()

    /**
     * Set the value of [oehdstat] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstat !== $v) {
            $this->oehdstat = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSTAT] = true;
        }

        return $this;
    } // setOehdstat()

    /**
     * Set the value of [oehdhold] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdhold !== $v) {
            $this->oehdhold = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDHOLD] = true;
        }

        return $this;
    } // setOehdhold()

    /**
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_ARCUCUSTID] = true;
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
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setArstshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstshipid !== $v) {
            $this->arstshipid = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_ARSTSHIPID] = true;
        }

        if ($this->aCustomerShipto !== null && $this->aCustomerShipto->getArstshipid() !== $v) {
            $this->aCustomerShipto = null;
        }

        return $this;
    } // setArstshipid()

    /**
     * Set the value of [oehdstname] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdstname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstname !== $v) {
            $this->oehdstname = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSTNAME] = true;
        }

        return $this;
    } // setOehdstname()

    /**
     * Set the value of [oehdstlastname] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdstlastname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstlastname !== $v) {
            $this->oehdstlastname = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSTLASTNAME] = true;
        }

        return $this;
    } // setOehdstlastname()

    /**
     * Set the value of [oehdstfirstname] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdstfirstname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstfirstname !== $v) {
            $this->oehdstfirstname = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSTFIRSTNAME] = true;
        }

        return $this;
    } // setOehdstfirstname()

    /**
     * Set the value of [oehdstadr1] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdstadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstadr1 !== $v) {
            $this->oehdstadr1 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSTADR1] = true;
        }

        return $this;
    } // setOehdstadr1()

    /**
     * Set the value of [oehdstadr2] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdstadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstadr2 !== $v) {
            $this->oehdstadr2 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSTADR2] = true;
        }

        return $this;
    } // setOehdstadr2()

    /**
     * Set the value of [oehdstadr3] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdstadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstadr3 !== $v) {
            $this->oehdstadr3 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSTADR3] = true;
        }

        return $this;
    } // setOehdstadr3()

    /**
     * Set the value of [oehdstctry] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdstctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstctry !== $v) {
            $this->oehdstctry = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSTCTRY] = true;
        }

        return $this;
    } // setOehdstctry()

    /**
     * Set the value of [oehdstcity] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdstcity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstcity !== $v) {
            $this->oehdstcity = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSTCITY] = true;
        }

        return $this;
    } // setOehdstcity()

    /**
     * Set the value of [oehdststat] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdststat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdststat !== $v) {
            $this->oehdststat = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSTSTAT] = true;
        }

        return $this;
    } // setOehdststat()

    /**
     * Set the value of [oehdstzipcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdstzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstzipcode !== $v) {
            $this->oehdstzipcode = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSTZIPCODE] = true;
        }

        return $this;
    } // setOehdstzipcode()

    /**
     * Set the value of [oehdcustpo] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcustpo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcustpo !== $v) {
            $this->oehdcustpo = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCUSTPO] = true;
        }

        return $this;
    } // setOehdcustpo()

    /**
     * Set the value of [oehdordrdate] column.
     *
     * @param int $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdordrdate($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdordrdate !== $v) {
            $this->oehdordrdate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDORDRDATE] = true;
        }

        return $this;
    } // setOehdordrdate()

    /**
     * Set the value of [artmtermcd] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setArtmtermcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmtermcd !== $v) {
            $this->artmtermcd = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_ARTMTERMCD] = true;
        }

        return $this;
    } // setArtmtermcd()

    /**
     * Set the value of [artbshipvia] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setArtbshipvia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbshipvia !== $v) {
            $this->artbshipvia = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_ARTBSHIPVIA] = true;
        }

        return $this;
    } // setArtbshipvia()

    /**
     * Set the value of [arininvnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setArininvnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arininvnbr !== $v) {
            $this->arininvnbr = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_ARININVNBR] = true;
        }

        return $this;
    } // setArininvnbr()

    /**
     * Set the value of [oehdinvdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdinvdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdinvdate !== $v) {
            $this->oehdinvdate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDINVDATE] = true;
        }

        return $this;
    } // setOehdinvdate()

    /**
     * Set the value of [oehdglpd] column.
     *
     * @param int $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdglpd($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdglpd !== $v) {
            $this->oehdglpd = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDGLPD] = true;
        }

        return $this;
    } // setOehdglpd()

    /**
     * Set the value of [arspsaleper1] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setArspsaleper1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper1 !== $v) {
            $this->arspsaleper1 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_ARSPSALEPER1] = true;
        }

        return $this;
    } // setArspsaleper1()

    /**
     * Set the value of [oehdsp1pct] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdsp1pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdsp1pct !== $v) {
            $this->oehdsp1pct = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSP1PCT] = true;
        }

        return $this;
    } // setOehdsp1pct()

    /**
     * Set the value of [arspsaleper2] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setArspsaleper2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper2 !== $v) {
            $this->arspsaleper2 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_ARSPSALEPER2] = true;
        }

        return $this;
    } // setArspsaleper2()

    /**
     * Set the value of [oehdsp2pct] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdsp2pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdsp2pct !== $v) {
            $this->oehdsp2pct = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSP2PCT] = true;
        }

        return $this;
    } // setOehdsp2pct()

    /**
     * Set the value of [arspsaleper3] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setArspsaleper3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper3 !== $v) {
            $this->arspsaleper3 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_ARSPSALEPER3] = true;
        }

        return $this;
    } // setArspsaleper3()

    /**
     * Set the value of [oehdsp3pct] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdsp3pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdsp3pct !== $v) {
            $this->oehdsp3pct = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSP3PCT] = true;
        }

        return $this;
    } // setOehdsp3pct()

    /**
     * Set the value of [oehdcntrnbr] column.
     *
     * @param int $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcntrnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdcntrnbr !== $v) {
            $this->oehdcntrnbr = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCNTRNBR] = true;
        }

        return $this;
    } // setOehdcntrnbr()

    /**
     * Set the value of [oehdwibatch] column.
     *
     * @param int $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdwibatch($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdwibatch !== $v) {
            $this->oehdwibatch = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDWIBATCH] = true;
        }

        return $this;
    } // setOehdwibatch()

    /**
     * Set the value of [oehddroprelhold] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddroprelhold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddroprelhold !== $v) {
            $this->oehddroprelhold = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDROPRELHOLD] = true;
        }

        return $this;
    } // setOehddroprelhold()

    /**
     * Set the value of [oehdtaxsub] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdtaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdtaxsub !== $v) {
            $this->oehdtaxsub = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDTAXSUB] = true;
        }

        return $this;
    } // setOehdtaxsub()

    /**
     * Set the value of [oehdnontaxsub] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdnontaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdnontaxsub !== $v) {
            $this->oehdnontaxsub = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDNONTAXSUB] = true;
        }

        return $this;
    } // setOehdnontaxsub()

    /**
     * Set the value of [oehdtaxtot] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdtaxtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdtaxtot !== $v) {
            $this->oehdtaxtot = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDTAXTOT] = true;
        }

        return $this;
    } // setOehdtaxtot()

    /**
     * Set the value of [oehdfrttot] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttot !== $v) {
            $this->oehdfrttot = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTTOT] = true;
        }

        return $this;
    } // setOehdfrttot()

    /**
     * Set the value of [oehdmisctot] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdmisctot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdmisctot !== $v) {
            $this->oehdmisctot = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDMISCTOT] = true;
        }

        return $this;
    } // setOehdmisctot()

    /**
     * Set the value of [oehdordrtot] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdordrtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdordrtot !== $v) {
            $this->oehdordrtot = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDORDRTOT] = true;
        }

        return $this;
    } // setOehdordrtot()

    /**
     * Set the value of [oehdcosttot] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcosttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcosttot !== $v) {
            $this->oehdcosttot = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCOSTTOT] = true;
        }

        return $this;
    } // setOehdcosttot()

    /**
     * Set the value of [oehdspcommlock] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdspcommlock($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdspcommlock !== $v) {
            $this->oehdspcommlock = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSPCOMMLOCK] = true;
        }

        return $this;
    } // setOehdspcommlock()

    /**
     * Set the value of [oehdtakendate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdtakendate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdtakendate !== $v) {
            $this->oehdtakendate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDTAKENDATE] = true;
        }

        return $this;
    } // setOehdtakendate()

    /**
     * Set the value of [oehdtakentime] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdtakentime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdtakentime !== $v) {
            $this->oehdtakentime = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDTAKENTIME] = true;
        }

        return $this;
    } // setOehdtakentime()

    /**
     * Set the value of [oehdpickdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdpickdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpickdate !== $v) {
            $this->oehdpickdate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDPICKDATE] = true;
        }

        return $this;
    } // setOehdpickdate()

    /**
     * Set the value of [oehdpicktime] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdpicktime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpicktime !== $v) {
            $this->oehdpicktime = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDPICKTIME] = true;
        }

        return $this;
    } // setOehdpicktime()

    /**
     * Set the value of [oehdpackdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdpackdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpackdate !== $v) {
            $this->oehdpackdate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDPACKDATE] = true;
        }

        return $this;
    } // setOehdpackdate()

    /**
     * Set the value of [oehdpacktime] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdpacktime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpacktime !== $v) {
            $this->oehdpacktime = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDPACKTIME] = true;
        }

        return $this;
    } // setOehdpacktime()

    /**
     * Set the value of [oehdverifydate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdverifydate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdverifydate !== $v) {
            $this->oehdverifydate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDVERIFYDATE] = true;
        }

        return $this;
    } // setOehdverifydate()

    /**
     * Set the value of [oehdverifytime] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdverifytime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdverifytime !== $v) {
            $this->oehdverifytime = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDVERIFYTIME] = true;
        }

        return $this;
    } // setOehdverifytime()

    /**
     * Set the value of [oehdcreditmemo] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcreditmemo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcreditmemo !== $v) {
            $this->oehdcreditmemo = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCREDITMEMO] = true;
        }

        return $this;
    } // setOehdcreditmemo()

    /**
     * Set the value of [oehdbookedyn] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdbookedyn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdbookedyn !== $v) {
            $this->oehdbookedyn = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDBOOKEDYN] = true;
        }

        return $this;
    } // setOehdbookedyn()

    /**
     * Set the value of [intbwhseorig] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setIntbwhseorig($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhseorig !== $v) {
            $this->intbwhseorig = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_INTBWHSEORIG] = true;
        }

        return $this;
    } // setIntbwhseorig()

    /**
     * Set the value of [oehdbtstat] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdbtstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdbtstat !== $v) {
            $this->oehdbtstat = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDBTSTAT] = true;
        }

        return $this;
    } // setOehdbtstat()

    /**
     * Set the value of [oehdshipcomp] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdshipcomp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdshipcomp !== $v) {
            $this->oehdshipcomp = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSHIPCOMP] = true;
        }

        return $this;
    } // setOehdshipcomp()

    /**
     * Set the value of [oehdcwoflag] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcwoflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcwoflag !== $v) {
            $this->oehdcwoflag = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCWOFLAG] = true;
        }

        return $this;
    } // setOehdcwoflag()

    /**
     * Set the value of [oehddivision] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddivision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddivision !== $v) {
            $this->oehddivision = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDIVISION] = true;
        }

        return $this;
    } // setOehddivision()

    /**
     * Set the value of [oehdtakencode] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdtakencode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdtakencode !== $v) {
            $this->oehdtakencode = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDTAKENCODE] = true;
        }

        return $this;
    } // setOehdtakencode()

    /**
     * Set the value of [oehdpickcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdpickcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpickcode !== $v) {
            $this->oehdpickcode = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDPICKCODE] = true;
        }

        return $this;
    } // setOehdpickcode()

    /**
     * Set the value of [oehdpackcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdpackcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpackcode !== $v) {
            $this->oehdpackcode = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDPACKCODE] = true;
        }

        return $this;
    } // setOehdpackcode()

    /**
     * Set the value of [oehdverifycode] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdverifycode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdverifycode !== $v) {
            $this->oehdverifycode = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDVERIFYCODE] = true;
        }

        return $this;
    } // setOehdverifycode()

    /**
     * Set the value of [oehdtotdisc] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdtotdisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdtotdisc !== $v) {
            $this->oehdtotdisc = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDTOTDISC] = true;
        }

        return $this;
    } // setOehdtotdisc()

    /**
     * Set the value of [oehdedirefnbrqual] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdedirefnbrqual($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdedirefnbrqual !== $v) {
            $this->oehdedirefnbrqual = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDEDIREFNBRQUAL] = true;
        }

        return $this;
    } // setOehdedirefnbrqual()

    /**
     * Set the value of [oehdusercode1] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdusercode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdusercode1 !== $v) {
            $this->oehdusercode1 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDUSERCODE1] = true;
        }

        return $this;
    } // setOehdusercode1()

    /**
     * Set the value of [oehdusercode2] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdusercode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdusercode2 !== $v) {
            $this->oehdusercode2 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDUSERCODE2] = true;
        }

        return $this;
    } // setOehdusercode2()

    /**
     * Set the value of [oehdusercode3] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdusercode3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdusercode3 !== $v) {
            $this->oehdusercode3 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDUSERCODE3] = true;
        }

        return $this;
    } // setOehdusercode3()

    /**
     * Set the value of [oehdusercode4] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdusercode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdusercode4 !== $v) {
            $this->oehdusercode4 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDUSERCODE4] = true;
        }

        return $this;
    } // setOehdusercode4()

    /**
     * Set the value of [oehdexchctry] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdexchctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdexchctry !== $v) {
            $this->oehdexchctry = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDEXCHCTRY] = true;
        }

        return $this;
    } // setOehdexchctry()

    /**
     * Set the value of [oehdexchrate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdexchrate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdexchrate !== $v) {
            $this->oehdexchrate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDEXCHRATE] = true;
        }

        return $this;
    } // setOehdexchrate()

    /**
     * Set the value of [oehdwghttot] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdwghttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdwghttot !== $v) {
            $this->oehdwghttot = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDWGHTTOT] = true;
        }

        return $this;
    } // setOehdwghttot()

    /**
     * Set the value of [oehdwghtoride] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdwghtoride($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdwghtoride !== $v) {
            $this->oehdwghtoride = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDWGHTORIDE] = true;
        }

        return $this;
    } // setOehdwghtoride()

    /**
     * Set the value of [oehdccinfo] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdccinfo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdccinfo !== $v) {
            $this->oehdccinfo = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCCINFO] = true;
        }

        return $this;
    } // setOehdccinfo()

    /**
     * Set the value of [oehdboxcount] column.
     *
     * @param int $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdboxcount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdboxcount !== $v) {
            $this->oehdboxcount = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDBOXCOUNT] = true;
        }

        return $this;
    } // setOehdboxcount()

    /**
     * Set the value of [oehdrqstdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdrqstdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdrqstdate !== $v) {
            $this->oehdrqstdate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDRQSTDATE] = true;
        }

        return $this;
    } // setOehdrqstdate()

    /**
     * Set the value of [oehdcancdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcancdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcancdate !== $v) {
            $this->oehdcancdate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCANCDATE] = true;
        }

        return $this;
    } // setOehdcancdate()

    /**
     * Set the value of [oehdcrntuser] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcrntuser($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcrntuser !== $v) {
            $this->oehdcrntuser = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCRNTUSER] = true;
        }

        return $this;
    } // setOehdcrntuser()

    /**
     * Set the value of [oehdreleasenbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdreleasenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdreleasenbr !== $v) {
            $this->oehdreleasenbr = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDRELEASENBR] = true;
        }

        return $this;
    } // setOehdreleasenbr()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [oehdbordbuilddate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdbordbuilddate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdbordbuilddate !== $v) {
            $this->oehdbordbuilddate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDBORDBUILDDATE] = true;
        }

        return $this;
    } // setOehdbordbuilddate()

    /**
     * Set the value of [oehddeptcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddeptcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddeptcode !== $v) {
            $this->oehddeptcode = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDEPTCODE] = true;
        }

        return $this;
    } // setOehddeptcode()

    /**
     * Set the value of [oehdfrtinentered] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrtinentered($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrtinentered !== $v) {
            $this->oehdfrtinentered = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTINENTERED] = true;
        }

        return $this;
    } // setOehdfrtinentered()

    /**
     * Set the value of [oehddropshipentered] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddropshipentered($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddropshipentered !== $v) {
            $this->oehddropshipentered = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDROPSHIPENTERED] = true;
        }

        return $this;
    } // setOehddropshipentered()

    /**
     * Set the value of [oehderflag] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehderflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehderflag !== $v) {
            $this->oehderflag = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDERFLAG] = true;
        }

        return $this;
    } // setOehderflag()

    /**
     * Set the value of [oehdfrtin] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrtin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrtin !== $v) {
            $this->oehdfrtin = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTIN] = true;
        }

        return $this;
    } // setOehdfrtin()

    /**
     * Set the value of [oehddropship] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddropship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddropship !== $v) {
            $this->oehddropship = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDROPSHIP] = true;
        }

        return $this;
    } // setOehddropship()

    /**
     * Set the value of [oehdminorder] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdminorder($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdminorder !== $v) {
            $this->oehdminorder = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDMINORDER] = true;
        }

        return $this;
    } // setOehdminorder()

    /**
     * Set the value of [oehdcontractterms] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcontractterms($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcontractterms !== $v) {
            $this->oehdcontractterms = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCONTRACTTERMS] = true;
        }

        return $this;
    } // setOehdcontractterms()

    /**
     * Set the value of [oehddropshipbilled] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddropshipbilled($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddropshipbilled !== $v) {
            $this->oehddropshipbilled = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDROPSHIPBILLED] = true;
        }

        return $this;
    } // setOehddropshipbilled()

    /**
     * Set the value of [oehdordtyp] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdordtyp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdordtyp !== $v) {
            $this->oehdordtyp = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDORDTYP] = true;
        }

        return $this;
    } // setOehdordtyp()

    /**
     * Set the value of [oehdtracknbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdtracknbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdtracknbr !== $v) {
            $this->oehdtracknbr = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDTRACKNBR] = true;
        }

        return $this;
    } // setOehdtracknbr()

    /**
     * Set the value of [oehdsource] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdsource($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdsource !== $v) {
            $this->oehdsource = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSOURCE] = true;
        }

        return $this;
    } // setOehdsource()

    /**
     * Set the value of [oehdccaprv] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdccaprv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdccaprv !== $v) {
            $this->oehdccaprv = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCCAPRV] = true;
        }

        return $this;
    } // setOehdccaprv()

    /**
     * Set the value of [oehdpickfmattype] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdpickfmattype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpickfmattype !== $v) {
            $this->oehdpickfmattype = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDPICKFMATTYPE] = true;
        }

        return $this;
    } // setOehdpickfmattype()

    /**
     * Set the value of [oehdinvcfmattype] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdinvcfmattype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdinvcfmattype !== $v) {
            $this->oehdinvcfmattype = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDINVCFMATTYPE] = true;
        }

        return $this;
    } // setOehdinvcfmattype()

    /**
     * Set the value of [oehdcashamt] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcashamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcashamt !== $v) {
            $this->oehdcashamt = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCASHAMT] = true;
        }

        return $this;
    } // setOehdcashamt()

    /**
     * Set the value of [oehdcheckamt] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcheckamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcheckamt !== $v) {
            $this->oehdcheckamt = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCHECKAMT] = true;
        }

        return $this;
    } // setOehdcheckamt()

    /**
     * Set the value of [oehdchecknbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdchecknbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdchecknbr !== $v) {
            $this->oehdchecknbr = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCHECKNBR] = true;
        }

        return $this;
    } // setOehdchecknbr()

    /**
     * Set the value of [oehddepositamt] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddepositamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddepositamt !== $v) {
            $this->oehddepositamt = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDEPOSITAMT] = true;
        }

        return $this;
    } // setOehddepositamt()

    /**
     * Set the value of [oehddepositnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddepositnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddepositnbr !== $v) {
            $this->oehddepositnbr = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDEPOSITNBR] = true;
        }

        return $this;
    } // setOehddepositnbr()

    /**
     * Set the value of [oehdccamt] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdccamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdccamt !== $v) {
            $this->oehdccamt = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCCAMT] = true;
        }

        return $this;
    } // setOehdccamt()

    /**
     * Set the value of [oehdotaxsub] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdotaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdotaxsub !== $v) {
            $this->oehdotaxsub = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDOTAXSUB] = true;
        }

        return $this;
    } // setOehdotaxsub()

    /**
     * Set the value of [oehdonontaxsub] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdonontaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdonontaxsub !== $v) {
            $this->oehdonontaxsub = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDONONTAXSUB] = true;
        }

        return $this;
    } // setOehdonontaxsub()

    /**
     * Set the value of [oehdotaxtot] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdotaxtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdotaxtot !== $v) {
            $this->oehdotaxtot = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDOTAXTOT] = true;
        }

        return $this;
    } // setOehdotaxtot()

    /**
     * Set the value of [oehdoordrtot] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdoordrtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdoordrtot !== $v) {
            $this->oehdoordrtot = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDOORDRTOT] = true;
        }

        return $this;
    } // setOehdoordrtot()

    /**
     * Set the value of [oehdpickprintdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdpickprintdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpickprintdate !== $v) {
            $this->oehdpickprintdate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDPICKPRINTDATE] = true;
        }

        return $this;
    } // setOehdpickprintdate()

    /**
     * Set the value of [oehdpickprinttime] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdpickprinttime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpickprinttime !== $v) {
            $this->oehdpickprinttime = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDPICKPRINTTIME] = true;
        }

        return $this;
    } // setOehdpickprinttime()

    /**
     * Set the value of [oehdcont] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcont($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcont !== $v) {
            $this->oehdcont = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCONT] = true;
        }

        return $this;
    } // setOehdcont()

    /**
     * Set the value of [oehdcontteleintl] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcontteleintl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcontteleintl !== $v) {
            $this->oehdcontteleintl = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCONTTELEINTL] = true;
        }

        return $this;
    } // setOehdcontteleintl()

    /**
     * Set the value of [oehdconttelenbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdconttelenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdconttelenbr !== $v) {
            $this->oehdconttelenbr = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCONTTELENBR] = true;
        }

        return $this;
    } // setOehdconttelenbr()

    /**
     * Set the value of [oehdcontteleext] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcontteleext($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcontteleext !== $v) {
            $this->oehdcontteleext = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCONTTELEEXT] = true;
        }

        return $this;
    } // setOehdcontteleext()

    /**
     * Set the value of [oehdcontfaxintl] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcontfaxintl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcontfaxintl !== $v) {
            $this->oehdcontfaxintl = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCONTFAXINTL] = true;
        }

        return $this;
    } // setOehdcontfaxintl()

    /**
     * Set the value of [oehdcontfaxnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcontfaxnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcontfaxnbr !== $v) {
            $this->oehdcontfaxnbr = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCONTFAXNBR] = true;
        }

        return $this;
    } // setOehdcontfaxnbr()

    /**
     * Set the value of [oehdshipacct] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdshipacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdshipacct !== $v) {
            $this->oehdshipacct = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSHIPACCT] = true;
        }

        return $this;
    } // setOehdshipacct()

    /**
     * Set the value of [oehdchgdue] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdchgdue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdchgdue !== $v) {
            $this->oehdchgdue = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCHGDUE] = true;
        }

        return $this;
    } // setOehdchgdue()

    /**
     * Set the value of [oehdaddlpricdisc] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdaddlpricdisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdaddlpricdisc !== $v) {
            $this->oehdaddlpricdisc = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDADDLPRICDISC] = true;
        }

        return $this;
    } // setOehdaddlpricdisc()

    /**
     * Set the value of [oehdallship] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdallship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdallship !== $v) {
            $this->oehdallship = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDALLSHIP] = true;
        }

        return $this;
    } // setOehdallship()

    /**
     * Set the value of [oehdqtyorderamt] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdqtyorderamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdqtyorderamt !== $v) {
            $this->oehdqtyorderamt = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDQTYORDERAMT] = true;
        }

        return $this;
    } // setOehdqtyorderamt()

    /**
     * Set the value of [oehdcreditapplied] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcreditapplied($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcreditapplied !== $v) {
            $this->oehdcreditapplied = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCREDITAPPLIED] = true;
        }

        return $this;
    } // setOehdcreditapplied()

    /**
     * Set the value of [oehdinvcprintdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdinvcprintdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdinvcprintdate !== $v) {
            $this->oehdinvcprintdate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDINVCPRINTDATE] = true;
        }

        return $this;
    } // setOehdinvcprintdate()

    /**
     * Set the value of [oehdinvcprinttime] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdinvcprinttime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdinvcprinttime !== $v) {
            $this->oehdinvcprinttime = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDINVCPRINTTIME] = true;
        }

        return $this;
    } // setOehdinvcprinttime()

    /**
     * Set the value of [oehddiscfrt] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddiscfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscfrt !== $v) {
            $this->oehddiscfrt = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDISCFRT] = true;
        }

        return $this;
    } // setOehddiscfrt()

    /**
     * Set the value of [oehdorideshipcomp] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdorideshipcomp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdorideshipcomp !== $v) {
            $this->oehdorideshipcomp = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDORIDESHIPCOMP] = true;
        }

        return $this;
    } // setOehdorideshipcomp()

    /**
     * Set the value of [oehdcontemail] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcontemail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcontemail !== $v) {
            $this->oehdcontemail = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCONTEMAIL] = true;
        }

        return $this;
    } // setOehdcontemail()

    /**
     * Set the value of [oehdmanualfrt] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdmanualfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdmanualfrt !== $v) {
            $this->oehdmanualfrt = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDMANUALFRT] = true;
        }

        return $this;
    } // setOehdmanualfrt()

    /**
     * Set the value of [oehdinternalfrt] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdinternalfrt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdinternalfrt !== $v) {
            $this->oehdinternalfrt = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDINTERNALFRT] = true;
        }

        return $this;
    } // setOehdinternalfrt()

    /**
     * Set the value of [oehdfrtcost] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrtcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrtcost !== $v) {
            $this->oehdfrtcost = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTCOST] = true;
        }

        return $this;
    } // setOehdfrtcost()

    /**
     * Set the value of [oehdroute] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdroute($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdroute !== $v) {
            $this->oehdroute = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDROUTE] = true;
        }

        return $this;
    } // setOehdroute()

    /**
     * Set the value of [oehdrouteseq] column.
     *
     * @param int $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdrouteseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehdrouteseq !== $v) {
            $this->oehdrouteseq = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDROUTESEQ] = true;
        }

        return $this;
    } // setOehdrouteseq()

    /**
     * Set the value of [oehdfrttaxcode1] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrttaxcode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxcode1 !== $v) {
            $this->oehdfrttaxcode1 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTTAXCODE1] = true;
        }

        return $this;
    } // setOehdfrttaxcode1()

    /**
     * Set the value of [oehdfrttaxamt1] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrttaxamt1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxamt1 !== $v) {
            $this->oehdfrttaxamt1 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTTAXAMT1] = true;
        }

        return $this;
    } // setOehdfrttaxamt1()

    /**
     * Set the value of [oehdfrttaxcode2] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrttaxcode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxcode2 !== $v) {
            $this->oehdfrttaxcode2 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTTAXCODE2] = true;
        }

        return $this;
    } // setOehdfrttaxcode2()

    /**
     * Set the value of [oehdfrttaxamt2] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrttaxamt2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxamt2 !== $v) {
            $this->oehdfrttaxamt2 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTTAXAMT2] = true;
        }

        return $this;
    } // setOehdfrttaxamt2()

    /**
     * Set the value of [oehdfrttaxcode3] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrttaxcode3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxcode3 !== $v) {
            $this->oehdfrttaxcode3 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTTAXCODE3] = true;
        }

        return $this;
    } // setOehdfrttaxcode3()

    /**
     * Set the value of [oehdfrttaxamt3] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrttaxamt3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxamt3 !== $v) {
            $this->oehdfrttaxamt3 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTTAXAMT3] = true;
        }

        return $this;
    } // setOehdfrttaxamt3()

    /**
     * Set the value of [oehdfrttaxcode4] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrttaxcode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxcode4 !== $v) {
            $this->oehdfrttaxcode4 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTTAXCODE4] = true;
        }

        return $this;
    } // setOehdfrttaxcode4()

    /**
     * Set the value of [oehdfrttaxamt4] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrttaxamt4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxamt4 !== $v) {
            $this->oehdfrttaxamt4 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTTAXAMT4] = true;
        }

        return $this;
    } // setOehdfrttaxamt4()

    /**
     * Set the value of [oehdfrttaxcode5] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrttaxcode5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxcode5 !== $v) {
            $this->oehdfrttaxcode5 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTTAXCODE5] = true;
        }

        return $this;
    } // setOehdfrttaxcode5()

    /**
     * Set the value of [oehdfrttaxamt5] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrttaxamt5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrttaxamt5 !== $v) {
            $this->oehdfrttaxamt5 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTTAXAMT5] = true;
        }

        return $this;
    } // setOehdfrttaxamt5()

    /**
     * Set the value of [oehdedi855sent] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdedi855sent($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdedi855sent !== $v) {
            $this->oehdedi855sent = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDEDI855SENT] = true;
        }

        return $this;
    } // setOehdedi855sent()

    /**
     * Set the value of [oehdfrt3rdparty] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrt3rdparty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrt3rdparty !== $v) {
            $this->oehdfrt3rdparty = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRT3RDPARTY] = true;
        }

        return $this;
    } // setOehdfrt3rdparty()

    /**
     * Set the value of [oehdfob] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfob($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfob !== $v) {
            $this->oehdfob = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFOB] = true;
        }

        return $this;
    } // setOehdfob()

    /**
     * Set the value of [oehdconfirmimagyn] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdconfirmimagyn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdconfirmimagyn !== $v) {
            $this->oehdconfirmimagyn = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCONFIRMIMAGYN] = true;
        }

        return $this;
    } // setOehdconfirmimagyn()

    /**
     * Set the value of [oehdindustconform] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdindustconform($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdindustconform !== $v) {
            $this->oehdindustconform = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDINDUSTCONFORM] = true;
        }

        return $this;
    } // setOehdindustconform()

    /**
     * Set the value of [oehdcstkconsign] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcstkconsign($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcstkconsign !== $v) {
            $this->oehdcstkconsign = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCSTKCONSIGN] = true;
        }

        return $this;
    } // setOehdcstkconsign()

    /**
     * Set the value of [oehdlmdelaycapsent] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdlmdelaycapsent($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdlmdelaycapsent !== $v) {
            $this->oehdlmdelaycapsent = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDLMDELAYCAPSENT] = true;
        }

        return $this;
    } // setOehdlmdelaycapsent()

    /**
     * Set the value of [oehdmfgid] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdmfgid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdmfgid !== $v) {
            $this->oehdmfgid = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDMFGID] = true;
        }

        return $this;
    } // setOehdmfgid()

    /**
     * Set the value of [oehdstoreid] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdstoreid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdstoreid !== $v) {
            $this->oehdstoreid = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSTOREID] = true;
        }

        return $this;
    } // setOehdstoreid()

    /**
     * Set the value of [oehdpickqueue] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdpickqueue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpickqueue !== $v) {
            $this->oehdpickqueue = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDPICKQUEUE] = true;
        }

        return $this;
    } // setOehdpickqueue()

    /**
     * Set the value of [oehdarrvdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdarrvdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdarrvdate !== $v) {
            $this->oehdarrvdate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDARRVDATE] = true;
        }

        return $this;
    } // setOehdarrvdate()

    /**
     * Set the value of [oehdsurchgstat] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdsurchgstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdsurchgstat !== $v) {
            $this->oehdsurchgstat = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDSURCHGSTAT] = true;
        }

        return $this;
    } // setOehdsurchgstat()

    /**
     * Set the value of [oehdfrtgrup] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdfrtgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdfrtgrup !== $v) {
            $this->oehdfrtgrup = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDFRTGRUP] = true;
        }

        return $this;
    } // setOehdfrtgrup()

    /**
     * Set the value of [oehdcommoride] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdcommoride($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdcommoride !== $v) {
            $this->oehdcommoride = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCOMMORIDE] = true;
        }

        return $this;
    } // setOehdcommoride()

    /**
     * Set the value of [oehdchrgsplt] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdchrgsplt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdchrgsplt !== $v) {
            $this->oehdchrgsplt = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDCHRGSPLT] = true;
        }

        return $this;
    } // setOehdchrgsplt()

    /**
     * Set the value of [oehdacccaprv] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdacccaprv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdacccaprv !== $v) {
            $this->oehdacccaprv = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDACCCAPRV] = true;
        }

        return $this;
    } // setOehdacccaprv()

    /**
     * Set the value of [oehdorigordrnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdorigordrnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdorigordrnbr !== $v) {
            $this->oehdorigordrnbr = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDORIGORDRNBR] = true;
        }

        return $this;
    } // setOehdorigordrnbr()

    /**
     * Set the value of [oehdpostdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdpostdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdpostdate !== $v) {
            $this->oehdpostdate = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDPOSTDATE] = true;
        }

        return $this;
    } // setOehdpostdate()

    /**
     * Set the value of [oehddiscdate1] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddiscdate1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscdate1 !== $v) {
            $this->oehddiscdate1 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDISCDATE1] = true;
        }

        return $this;
    } // setOehddiscdate1()

    /**
     * Set the value of [oehddiscpct1] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddiscpct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscpct1 !== $v) {
            $this->oehddiscpct1 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDISCPCT1] = true;
        }

        return $this;
    } // setOehddiscpct1()

    /**
     * Set the value of [oehdduedate1] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdduedate1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduedate1 !== $v) {
            $this->oehdduedate1 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEDATE1] = true;
        }

        return $this;
    } // setOehdduedate1()

    /**
     * Set the value of [oehddueamt1] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddueamt1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddueamt1 !== $v) {
            $this->oehddueamt1 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEAMT1] = true;
        }

        return $this;
    } // setOehddueamt1()

    /**
     * Set the value of [oehdduepct1] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdduepct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduepct1 !== $v) {
            $this->oehdduepct1 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEPCT1] = true;
        }

        return $this;
    } // setOehdduepct1()

    /**
     * Set the value of [oehddiscdate2] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddiscdate2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscdate2 !== $v) {
            $this->oehddiscdate2 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDISCDATE2] = true;
        }

        return $this;
    } // setOehddiscdate2()

    /**
     * Set the value of [oehddiscpct2] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddiscpct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscpct2 !== $v) {
            $this->oehddiscpct2 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDISCPCT2] = true;
        }

        return $this;
    } // setOehddiscpct2()

    /**
     * Set the value of [oehdduedate2] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdduedate2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduedate2 !== $v) {
            $this->oehdduedate2 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEDATE2] = true;
        }

        return $this;
    } // setOehdduedate2()

    /**
     * Set the value of [oehddueamt2] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddueamt2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddueamt2 !== $v) {
            $this->oehddueamt2 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEAMT2] = true;
        }

        return $this;
    } // setOehddueamt2()

    /**
     * Set the value of [oehdduepct2] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdduepct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduepct2 !== $v) {
            $this->oehdduepct2 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEPCT2] = true;
        }

        return $this;
    } // setOehdduepct2()

    /**
     * Set the value of [oehddiscdate3] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddiscdate3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscdate3 !== $v) {
            $this->oehddiscdate3 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDISCDATE3] = true;
        }

        return $this;
    } // setOehddiscdate3()

    /**
     * Set the value of [oehddiscpct3] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddiscpct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscpct3 !== $v) {
            $this->oehddiscpct3 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDISCPCT3] = true;
        }

        return $this;
    } // setOehddiscpct3()

    /**
     * Set the value of [oehdduedate3] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdduedate3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduedate3 !== $v) {
            $this->oehdduedate3 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEDATE3] = true;
        }

        return $this;
    } // setOehdduedate3()

    /**
     * Set the value of [oehddueamt3] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddueamt3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddueamt3 !== $v) {
            $this->oehddueamt3 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEAMT3] = true;
        }

        return $this;
    } // setOehddueamt3()

    /**
     * Set the value of [oehdduepct3] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdduepct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduepct3 !== $v) {
            $this->oehdduepct3 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEPCT3] = true;
        }

        return $this;
    } // setOehdduepct3()

    /**
     * Set the value of [oehddiscdate4] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddiscdate4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscdate4 !== $v) {
            $this->oehddiscdate4 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDISCDATE4] = true;
        }

        return $this;
    } // setOehddiscdate4()

    /**
     * Set the value of [oehddiscpct4] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddiscpct4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscpct4 !== $v) {
            $this->oehddiscpct4 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDISCPCT4] = true;
        }

        return $this;
    } // setOehddiscpct4()

    /**
     * Set the value of [oehdduedate4] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdduedate4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduedate4 !== $v) {
            $this->oehdduedate4 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEDATE4] = true;
        }

        return $this;
    } // setOehdduedate4()

    /**
     * Set the value of [oehddueamt4] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddueamt4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddueamt4 !== $v) {
            $this->oehddueamt4 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEAMT4] = true;
        }

        return $this;
    } // setOehddueamt4()

    /**
     * Set the value of [oehdduepct4] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdduepct4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduepct4 !== $v) {
            $this->oehdduepct4 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEPCT4] = true;
        }

        return $this;
    } // setOehdduepct4()

    /**
     * Set the value of [oehddiscdate5] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddiscdate5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscdate5 !== $v) {
            $this->oehddiscdate5 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDISCDATE5] = true;
        }

        return $this;
    } // setOehddiscdate5()

    /**
     * Set the value of [oehddiscpct5] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddiscpct5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscpct5 !== $v) {
            $this->oehddiscpct5 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDISCPCT5] = true;
        }

        return $this;
    } // setOehddiscpct5()

    /**
     * Set the value of [oehdduedate5] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdduedate5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduedate5 !== $v) {
            $this->oehdduedate5 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEDATE5] = true;
        }

        return $this;
    } // setOehdduedate5()

    /**
     * Set the value of [oehddueamt5] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddueamt5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddueamt5 !== $v) {
            $this->oehddueamt5 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEAMT5] = true;
        }

        return $this;
    } // setOehddueamt5()

    /**
     * Set the value of [oehdduepct5] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdduepct5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduepct5 !== $v) {
            $this->oehdduepct5 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEPCT5] = true;
        }

        return $this;
    } // setOehdduepct5()

    /**
     * Set the value of [oehddiscdate6] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddiscdate6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscdate6 !== $v) {
            $this->oehddiscdate6 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDISCDATE6] = true;
        }

        return $this;
    } // setOehddiscdate6()

    /**
     * Set the value of [oehddiscpct6] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddiscpct6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddiscpct6 !== $v) {
            $this->oehddiscpct6 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDISCPCT6] = true;
        }

        return $this;
    } // setOehddiscpct6()

    /**
     * Set the value of [oehdduedate6] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdduedate6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduedate6 !== $v) {
            $this->oehdduedate6 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEDATE6] = true;
        }

        return $this;
    } // setOehdduedate6()

    /**
     * Set the value of [oehddueamt6] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehddueamt6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehddueamt6 !== $v) {
            $this->oehddueamt6 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEAMT6] = true;
        }

        return $this;
    } // setOehddueamt6()

    /**
     * Set the value of [oehdduepct6] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setOehdduepct6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oehdduepct6 !== $v) {
            $this->oehdduepct6 = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_OEHDDUEPCT6] = true;
        }

        return $this;
    } // setOehdduepct6()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\SalesOrder The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[SalesOrderTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SalesOrderTableMap::translateFieldName('Oehdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SalesOrderTableMap::translateFieldName('Oehdstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SalesOrderTableMap::translateFieldName('Oehdhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SalesOrderTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SalesOrderTableMap::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SalesOrderTableMap::translateFieldName('Oehdstname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SalesOrderTableMap::translateFieldName('Oehdstlastname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstlastname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SalesOrderTableMap::translateFieldName('Oehdstfirstname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstfirstname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SalesOrderTableMap::translateFieldName('Oehdstadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SalesOrderTableMap::translateFieldName('Oehdstadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : SalesOrderTableMap::translateFieldName('Oehdstadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : SalesOrderTableMap::translateFieldName('Oehdstctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : SalesOrderTableMap::translateFieldName('Oehdstcity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstcity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : SalesOrderTableMap::translateFieldName('Oehdststat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdststat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : SalesOrderTableMap::translateFieldName('Oehdstzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcustpo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcustpo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : SalesOrderTableMap::translateFieldName('Oehdordrdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdordrdate = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : SalesOrderTableMap::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmtermcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : SalesOrderTableMap::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbshipvia = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : SalesOrderTableMap::translateFieldName('Arininvnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arininvnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : SalesOrderTableMap::translateFieldName('Oehdinvdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdinvdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : SalesOrderTableMap::translateFieldName('Oehdglpd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdglpd = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : SalesOrderTableMap::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : SalesOrderTableMap::translateFieldName('Oehdsp1pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdsp1pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : SalesOrderTableMap::translateFieldName('Arspsaleper2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : SalesOrderTableMap::translateFieldName('Oehdsp2pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdsp2pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : SalesOrderTableMap::translateFieldName('Arspsaleper3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : SalesOrderTableMap::translateFieldName('Oehdsp3pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdsp3pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcntrnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcntrnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : SalesOrderTableMap::translateFieldName('Oehdwibatch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdwibatch = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : SalesOrderTableMap::translateFieldName('Oehddroprelhold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddroprelhold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : SalesOrderTableMap::translateFieldName('Oehdtaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : SalesOrderTableMap::translateFieldName('Oehdnontaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdnontaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : SalesOrderTableMap::translateFieldName('Oehdtaxtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtaxtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : SalesOrderTableMap::translateFieldName('Oehdmisctot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdmisctot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : SalesOrderTableMap::translateFieldName('Oehdordrtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdordrtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcosttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcosttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : SalesOrderTableMap::translateFieldName('Oehdspcommlock', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdspcommlock = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : SalesOrderTableMap::translateFieldName('Oehdtakendate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtakendate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : SalesOrderTableMap::translateFieldName('Oehdtakentime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtakentime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : SalesOrderTableMap::translateFieldName('Oehdpickdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpickdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : SalesOrderTableMap::translateFieldName('Oehdpicktime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpicktime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : SalesOrderTableMap::translateFieldName('Oehdpackdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpackdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : SalesOrderTableMap::translateFieldName('Oehdpacktime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpacktime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : SalesOrderTableMap::translateFieldName('Oehdverifydate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdverifydate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : SalesOrderTableMap::translateFieldName('Oehdverifytime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdverifytime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcreditmemo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcreditmemo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : SalesOrderTableMap::translateFieldName('Oehdbookedyn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdbookedyn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : SalesOrderTableMap::translateFieldName('Intbwhseorig', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhseorig = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : SalesOrderTableMap::translateFieldName('Oehdbtstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdbtstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : SalesOrderTableMap::translateFieldName('Oehdshipcomp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdshipcomp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcwoflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcwoflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : SalesOrderTableMap::translateFieldName('Oehddivision', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddivision = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : SalesOrderTableMap::translateFieldName('Oehdtakencode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtakencode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : SalesOrderTableMap::translateFieldName('Oehdpickcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpickcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : SalesOrderTableMap::translateFieldName('Oehdpackcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpackcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : SalesOrderTableMap::translateFieldName('Oehdverifycode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdverifycode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : SalesOrderTableMap::translateFieldName('Oehdtotdisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtotdisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : SalesOrderTableMap::translateFieldName('Oehdedirefnbrqual', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdedirefnbrqual = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : SalesOrderTableMap::translateFieldName('Oehdusercode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdusercode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : SalesOrderTableMap::translateFieldName('Oehdusercode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdusercode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : SalesOrderTableMap::translateFieldName('Oehdusercode3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdusercode3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : SalesOrderTableMap::translateFieldName('Oehdusercode4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdusercode4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : SalesOrderTableMap::translateFieldName('Oehdexchctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdexchctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : SalesOrderTableMap::translateFieldName('Oehdexchrate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdexchrate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : SalesOrderTableMap::translateFieldName('Oehdwghttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdwghttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : SalesOrderTableMap::translateFieldName('Oehdwghtoride', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdwghtoride = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : SalesOrderTableMap::translateFieldName('Oehdccinfo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdccinfo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : SalesOrderTableMap::translateFieldName('Oehdboxcount', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdboxcount = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : SalesOrderTableMap::translateFieldName('Oehdrqstdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdrqstdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcancdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcancdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcrntuser', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcrntuser = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : SalesOrderTableMap::translateFieldName('Oehdreleasenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdreleasenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : SalesOrderTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : SalesOrderTableMap::translateFieldName('Oehdbordbuilddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdbordbuilddate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : SalesOrderTableMap::translateFieldName('Oehddeptcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddeptcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrtinentered', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrtinentered = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : SalesOrderTableMap::translateFieldName('Oehddropshipentered', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddropshipentered = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : SalesOrderTableMap::translateFieldName('Oehderflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehderflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrtin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrtin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : SalesOrderTableMap::translateFieldName('Oehddropship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddropship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : SalesOrderTableMap::translateFieldName('Oehdminorder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdminorder = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcontractterms', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcontractterms = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : SalesOrderTableMap::translateFieldName('Oehddropshipbilled', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddropshipbilled = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : SalesOrderTableMap::translateFieldName('Oehdordtyp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdordtyp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : SalesOrderTableMap::translateFieldName('Oehdtracknbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdtracknbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : SalesOrderTableMap::translateFieldName('Oehdsource', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdsource = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : SalesOrderTableMap::translateFieldName('Oehdccaprv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdccaprv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : SalesOrderTableMap::translateFieldName('Oehdpickfmattype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpickfmattype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : SalesOrderTableMap::translateFieldName('Oehdinvcfmattype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdinvcfmattype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcashamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcashamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcheckamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcheckamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : SalesOrderTableMap::translateFieldName('Oehdchecknbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdchecknbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : SalesOrderTableMap::translateFieldName('Oehddepositamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddepositamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 95 + $startcol : SalesOrderTableMap::translateFieldName('Oehddepositnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddepositnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 96 + $startcol : SalesOrderTableMap::translateFieldName('Oehdccamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdccamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 97 + $startcol : SalesOrderTableMap::translateFieldName('Oehdotaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdotaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 98 + $startcol : SalesOrderTableMap::translateFieldName('Oehdonontaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdonontaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 99 + $startcol : SalesOrderTableMap::translateFieldName('Oehdotaxtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdotaxtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 100 + $startcol : SalesOrderTableMap::translateFieldName('Oehdoordrtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdoordrtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 101 + $startcol : SalesOrderTableMap::translateFieldName('Oehdpickprintdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpickprintdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 102 + $startcol : SalesOrderTableMap::translateFieldName('Oehdpickprinttime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpickprinttime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 103 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcont', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcont = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 104 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcontteleintl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcontteleintl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 105 + $startcol : SalesOrderTableMap::translateFieldName('Oehdconttelenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdconttelenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 106 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcontteleext', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcontteleext = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 107 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcontfaxintl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcontfaxintl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 108 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcontfaxnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcontfaxnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 109 + $startcol : SalesOrderTableMap::translateFieldName('Oehdshipacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdshipacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 110 + $startcol : SalesOrderTableMap::translateFieldName('Oehdchgdue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdchgdue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 111 + $startcol : SalesOrderTableMap::translateFieldName('Oehdaddlpricdisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdaddlpricdisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 112 + $startcol : SalesOrderTableMap::translateFieldName('Oehdallship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdallship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 113 + $startcol : SalesOrderTableMap::translateFieldName('Oehdqtyorderamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdqtyorderamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 114 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcreditapplied', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcreditapplied = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 115 + $startcol : SalesOrderTableMap::translateFieldName('Oehdinvcprintdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdinvcprintdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 116 + $startcol : SalesOrderTableMap::translateFieldName('Oehdinvcprinttime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdinvcprinttime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 117 + $startcol : SalesOrderTableMap::translateFieldName('Oehddiscfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 118 + $startcol : SalesOrderTableMap::translateFieldName('Oehdorideshipcomp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdorideshipcomp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 119 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcontemail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcontemail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 120 + $startcol : SalesOrderTableMap::translateFieldName('Oehdmanualfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdmanualfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 121 + $startcol : SalesOrderTableMap::translateFieldName('Oehdinternalfrt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdinternalfrt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 122 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrtcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrtcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 123 + $startcol : SalesOrderTableMap::translateFieldName('Oehdroute', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdroute = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 124 + $startcol : SalesOrderTableMap::translateFieldName('Oehdrouteseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdrouteseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 125 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrttaxcode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxcode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 126 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrttaxamt1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxamt1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 127 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrttaxcode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxcode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 128 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrttaxamt2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxamt2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 129 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrttaxcode3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxcode3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 130 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrttaxamt3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxamt3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 131 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrttaxcode4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxcode4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 132 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrttaxamt4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxamt4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 133 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrttaxcode5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxcode5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 134 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrttaxamt5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrttaxamt5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 135 + $startcol : SalesOrderTableMap::translateFieldName('Oehdedi855sent', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdedi855sent = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 136 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrt3rdparty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrt3rdparty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 137 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfob', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfob = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 138 + $startcol : SalesOrderTableMap::translateFieldName('Oehdconfirmimagyn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdconfirmimagyn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 139 + $startcol : SalesOrderTableMap::translateFieldName('Oehdindustconform', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdindustconform = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 140 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcstkconsign', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcstkconsign = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 141 + $startcol : SalesOrderTableMap::translateFieldName('Oehdlmdelaycapsent', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdlmdelaycapsent = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 142 + $startcol : SalesOrderTableMap::translateFieldName('Oehdmfgid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdmfgid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 143 + $startcol : SalesOrderTableMap::translateFieldName('Oehdstoreid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdstoreid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 144 + $startcol : SalesOrderTableMap::translateFieldName('Oehdpickqueue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpickqueue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 145 + $startcol : SalesOrderTableMap::translateFieldName('Oehdarrvdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdarrvdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 146 + $startcol : SalesOrderTableMap::translateFieldName('Oehdsurchgstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdsurchgstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 147 + $startcol : SalesOrderTableMap::translateFieldName('Oehdfrtgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdfrtgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 148 + $startcol : SalesOrderTableMap::translateFieldName('Oehdcommoride', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdcommoride = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 149 + $startcol : SalesOrderTableMap::translateFieldName('Oehdchrgsplt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdchrgsplt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 150 + $startcol : SalesOrderTableMap::translateFieldName('Oehdacccaprv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdacccaprv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 151 + $startcol : SalesOrderTableMap::translateFieldName('Oehdorigordrnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdorigordrnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 152 + $startcol : SalesOrderTableMap::translateFieldName('Oehdpostdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdpostdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 153 + $startcol : SalesOrderTableMap::translateFieldName('Oehddiscdate1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscdate1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 154 + $startcol : SalesOrderTableMap::translateFieldName('Oehddiscpct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscpct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 155 + $startcol : SalesOrderTableMap::translateFieldName('Oehdduedate1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduedate1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 156 + $startcol : SalesOrderTableMap::translateFieldName('Oehddueamt1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddueamt1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 157 + $startcol : SalesOrderTableMap::translateFieldName('Oehdduepct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduepct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 158 + $startcol : SalesOrderTableMap::translateFieldName('Oehddiscdate2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscdate2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 159 + $startcol : SalesOrderTableMap::translateFieldName('Oehddiscpct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscpct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 160 + $startcol : SalesOrderTableMap::translateFieldName('Oehdduedate2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduedate2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 161 + $startcol : SalesOrderTableMap::translateFieldName('Oehddueamt2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddueamt2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 162 + $startcol : SalesOrderTableMap::translateFieldName('Oehdduepct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduepct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 163 + $startcol : SalesOrderTableMap::translateFieldName('Oehddiscdate3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscdate3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 164 + $startcol : SalesOrderTableMap::translateFieldName('Oehddiscpct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscpct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 165 + $startcol : SalesOrderTableMap::translateFieldName('Oehdduedate3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduedate3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 166 + $startcol : SalesOrderTableMap::translateFieldName('Oehddueamt3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddueamt3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 167 + $startcol : SalesOrderTableMap::translateFieldName('Oehdduepct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduepct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 168 + $startcol : SalesOrderTableMap::translateFieldName('Oehddiscdate4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscdate4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 169 + $startcol : SalesOrderTableMap::translateFieldName('Oehddiscpct4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscpct4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 170 + $startcol : SalesOrderTableMap::translateFieldName('Oehdduedate4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduedate4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 171 + $startcol : SalesOrderTableMap::translateFieldName('Oehddueamt4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddueamt4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 172 + $startcol : SalesOrderTableMap::translateFieldName('Oehdduepct4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduepct4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 173 + $startcol : SalesOrderTableMap::translateFieldName('Oehddiscdate5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscdate5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 174 + $startcol : SalesOrderTableMap::translateFieldName('Oehddiscpct5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscpct5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 175 + $startcol : SalesOrderTableMap::translateFieldName('Oehdduedate5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduedate5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 176 + $startcol : SalesOrderTableMap::translateFieldName('Oehddueamt5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddueamt5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 177 + $startcol : SalesOrderTableMap::translateFieldName('Oehdduepct5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduepct5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 178 + $startcol : SalesOrderTableMap::translateFieldName('Oehddiscdate6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscdate6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 179 + $startcol : SalesOrderTableMap::translateFieldName('Oehddiscpct6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddiscpct6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 180 + $startcol : SalesOrderTableMap::translateFieldName('Oehdduedate6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduedate6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 181 + $startcol : SalesOrderTableMap::translateFieldName('Oehddueamt6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehddueamt6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 182 + $startcol : SalesOrderTableMap::translateFieldName('Oehdduepct6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehdduepct6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 183 + $startcol : SalesOrderTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 184 + $startcol : SalesOrderTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 185 + $startcol : SalesOrderTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 186; // 186 = SalesOrderTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\SalesOrder'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SalesOrderTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSalesOrderQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomer = null;
            $this->aCustomerShipto = null;
            $this->collSalesOrderDetails = null;

            $this->collSalesOrderShipments = null;

            $this->collSalesOrderLotserials = null;

            $this->collSoAllocatedLotserials = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SalesOrder::setDeleted()
     * @see SalesOrder::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSalesOrderQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesOrderTableMap::DATABASE_NAME);
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
                SalesOrderTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdNbr';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStat';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'OehdHold';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARSTSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstShipId';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStName';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTLASTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStLastName';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTFIRSTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStFirstName';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTADR1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStAdr1';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTADR2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStAdr2';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTADR3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStAdr3';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStCtry';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTCITY)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStCity';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStStat';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStZipCode';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCUSTPO)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCustPo';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDORDRDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOrdrDate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARTMTERMCD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmTermCd';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARTBSHIPVIA)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbShipVia';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARININVNBR)) {
            $modifiedColumns[':p' . $index++]  = 'ArinInvNbr';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDINVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdInvDate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDGLPD)) {
            $modifiedColumns[':p' . $index++]  = 'OehdGLPd';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARSPSALEPER1)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer1';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSP1PCT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdSp1Pct';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARSPSALEPER2)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer2';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSP2PCT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdSp2Pct';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARSPSALEPER3)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer3';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSP3PCT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdSp3Pct';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCNTRNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCntrNbr';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDWIBATCH)) {
            $modifiedColumns[':p' . $index++]  = 'OehdWiBatch';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDROPRELHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDropRelHold';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTaxSub';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDNONTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'OehdNonTaxSub';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTAXTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTaxTot';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTot';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDMISCTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdMiscTot';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDORDRTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOrdrTot';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCOSTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCostTot';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSPCOMMLOCK)) {
            $modifiedColumns[':p' . $index++]  = 'OehdSpCommLock';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTAKENDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTakenDate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTAKENTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTakenTime';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickDate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickTime';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPACKDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPackDate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPACKTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPackTime';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDVERIFYDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdVerifyDate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDVERIFYTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdVerifyTime';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCREDITMEMO)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCreditMemo';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDBOOKEDYN)) {
            $modifiedColumns[':p' . $index++]  = 'OehdBookedYn';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_INTBWHSEORIG)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhseOrig';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDBTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdBtStat';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSHIPCOMP)) {
            $modifiedColumns[':p' . $index++]  = 'OehdShipComp';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCWOFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCwoFlag';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDIVISION)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDivision';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTAKENCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTakenCode';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickCode';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPACKCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPackCode';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDVERIFYCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdVerifyCode';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTOTDISC)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTotDisc';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDEDIREFNBRQUAL)) {
            $modifiedColumns[':p' . $index++]  = 'OehdEdiRefNbrQual';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDUSERCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdUserCode1';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDUSERCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdUserCode2';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDUSERCODE3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdUserCode3';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDUSERCODE4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdUserCode4';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDEXCHCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'OehdExchCtry';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDEXCHRATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdExchRate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDWGHTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdWghtTot';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDWGHTORIDE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdWghtOride';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCCINFO)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCcInfo';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDBOXCOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdBoxCount';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDRQSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdRqstDate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCANCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCancDate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCRNTUSER)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCrntUser';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDRELEASENBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdReleaseNbr';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDBORDBUILDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdBordBuildDate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDEPTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDeptCode';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTINENTERED)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtInEntered';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDROPSHIPENTERED)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDropShipEntered';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDERFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OehdErFlag';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTIN)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtIn';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDROPSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDropShip';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDMINORDER)) {
            $modifiedColumns[':p' . $index++]  = 'OehdMinOrder';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTRACTTERMS)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContractTerms';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDROPSHIPBILLED)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDropShipBilled';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDORDTYP)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOrdTyp';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTRACKNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdTrackNbr';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSOURCE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdSource';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCCAPRV)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCcAprv';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKFMATTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickFmatType';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDINVCFMATTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdInvcFmatType';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCASHAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCashAmt';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCHECKAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCheckAmt';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCHECKNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCheckNbr';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDEPOSITAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDepositAmt';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDEPOSITNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDepositNbr';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCCAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCcAmt';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDOTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOTaxSub';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDONONTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'OehdONonTaxSub';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDOTAXTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOTaxTot';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDOORDRTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOOrdrTot';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKPRINTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickPrintDate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKPRINTTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickPrintTime';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCont';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTTELEINTL)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContTeleIntl';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTTELENBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContTeleNbr';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTTELEEXT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContTeleExt';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTFAXINTL)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContFaxIntl';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTFAXNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContFaxNbr';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSHIPACCT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdShipAcct';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCHGDUE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdChgDue';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDADDLPRICDISC)) {
            $modifiedColumns[':p' . $index++]  = 'OehdAddlPricDisc';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDALLSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OehdAllShip';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDQTYORDERAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdQtyOrderAmt';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCREDITAPPLIED)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCreditApplied';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDINVCPRINTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdInvcPrintDate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDINVCPRINTTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OehdInvcPrintTime';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCFRT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscFrt';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDORIDESHIPCOMP)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOrideShipComp';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTEMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'OehdContEmail';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDMANUALFRT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdManualFrt';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDINTERNALFRT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdInternalFrt';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtCost';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDROUTE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdRoute';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDROUTESEQ)) {
            $modifiedColumns[':p' . $index++]  = 'OehdRouteSeq';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxCode1';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXAMT1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxAmt1';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxCode2';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXAMT2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxAmt2';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXCODE3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxCode3';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXAMT3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxAmt3';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXCODE4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxCode4';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXAMT4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxAmt4';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXCODE5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxCode5';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXAMT5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtTaxAmt5';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDEDI855SENT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdEdi855Sent';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRT3RDPARTY)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrt3rdParty';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFOB)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFob';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONFIRMIMAGYN)) {
            $modifiedColumns[':p' . $index++]  = 'OehdConfirmImagYn';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDINDUSTCONFORM)) {
            $modifiedColumns[':p' . $index++]  = 'OehdIndustConform';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCSTKCONSIGN)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCstkConsign';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDLMDELAYCAPSENT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdLmDelayCapSent';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDMFGID)) {
            $modifiedColumns[':p' . $index++]  = 'OehdMfgId';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTOREID)) {
            $modifiedColumns[':p' . $index++]  = 'OehdStoreId';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKQUEUE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPickQueue';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDARRVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdArrvDate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSURCHGSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdSurchgStat';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'OehdFrtGrup';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCOMMORIDE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdCommOride';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCHRGSPLT)) {
            $modifiedColumns[':p' . $index++]  = 'OehdChrgSplt';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDACCCAPRV)) {
            $modifiedColumns[':p' . $index++]  = 'OehdAcCcAprv';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDORIGORDRNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehdOrigOrdrNbr';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPOSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OehdPostDate';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCDATE1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscDate1';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscPct1';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEDATE1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueDate1';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEAMT1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueAmt1';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDuePct1';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCDATE2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscDate2';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscPct2';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEDATE2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueDate2';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEAMT2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueAmt2';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDuePct2';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCDATE3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscDate3';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscPct3';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEDATE3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueDate3';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEAMT3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueAmt3';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDuePct3';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCDATE4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscDate4';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCPCT4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscPct4';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEDATE4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueDate4';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEAMT4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueAmt4';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEPCT4)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDuePct4';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCDATE5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscDate5';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCPCT5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscPct5';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEDATE5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueDate5';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEAMT5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueAmt5';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEPCT5)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDuePct5';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCDATE6)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscDate6';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCPCT6)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDiscPct6';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEDATE6)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueDate6';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEAMT6)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDueAmt6';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEPCT6)) {
            $modifiedColumns[':p' . $index++]  = 'OehdDuePct6';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO so_header (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'OehdNbr':
                        $stmt->bindValue($identifier, $this->oehdnbr, PDO::PARAM_STR);
                        break;
                    case 'OehdStat':
                        $stmt->bindValue($identifier, $this->oehdstat, PDO::PARAM_STR);
                        break;
                    case 'OehdHold':
                        $stmt->bindValue($identifier, $this->oehdhold, PDO::PARAM_STR);
                        break;
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'ArstShipId':
                        $stmt->bindValue($identifier, $this->arstshipid, PDO::PARAM_STR);
                        break;
                    case 'OehdStName':
                        $stmt->bindValue($identifier, $this->oehdstname, PDO::PARAM_STR);
                        break;
                    case 'OehdStLastName':
                        $stmt->bindValue($identifier, $this->oehdstlastname, PDO::PARAM_STR);
                        break;
                    case 'OehdStFirstName':
                        $stmt->bindValue($identifier, $this->oehdstfirstname, PDO::PARAM_STR);
                        break;
                    case 'OehdStAdr1':
                        $stmt->bindValue($identifier, $this->oehdstadr1, PDO::PARAM_STR);
                        break;
                    case 'OehdStAdr2':
                        $stmt->bindValue($identifier, $this->oehdstadr2, PDO::PARAM_STR);
                        break;
                    case 'OehdStAdr3':
                        $stmt->bindValue($identifier, $this->oehdstadr3, PDO::PARAM_STR);
                        break;
                    case 'OehdStCtry':
                        $stmt->bindValue($identifier, $this->oehdstctry, PDO::PARAM_STR);
                        break;
                    case 'OehdStCity':
                        $stmt->bindValue($identifier, $this->oehdstcity, PDO::PARAM_STR);
                        break;
                    case 'OehdStStat':
                        $stmt->bindValue($identifier, $this->oehdststat, PDO::PARAM_STR);
                        break;
                    case 'OehdStZipCode':
                        $stmt->bindValue($identifier, $this->oehdstzipcode, PDO::PARAM_STR);
                        break;
                    case 'OehdCustPo':
                        $stmt->bindValue($identifier, $this->oehdcustpo, PDO::PARAM_STR);
                        break;
                    case 'OehdOrdrDate':
                        $stmt->bindValue($identifier, $this->oehdordrdate, PDO::PARAM_INT);
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
                    case 'OehdInvDate':
                        $stmt->bindValue($identifier, $this->oehdinvdate, PDO::PARAM_STR);
                        break;
                    case 'OehdGLPd':
                        $stmt->bindValue($identifier, $this->oehdglpd, PDO::PARAM_INT);
                        break;
                    case 'ArspSalePer1':
                        $stmt->bindValue($identifier, $this->arspsaleper1, PDO::PARAM_STR);
                        break;
                    case 'OehdSp1Pct':
                        $stmt->bindValue($identifier, $this->oehdsp1pct, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer2':
                        $stmt->bindValue($identifier, $this->arspsaleper2, PDO::PARAM_STR);
                        break;
                    case 'OehdSp2Pct':
                        $stmt->bindValue($identifier, $this->oehdsp2pct, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer3':
                        $stmt->bindValue($identifier, $this->arspsaleper3, PDO::PARAM_STR);
                        break;
                    case 'OehdSp3Pct':
                        $stmt->bindValue($identifier, $this->oehdsp3pct, PDO::PARAM_STR);
                        break;
                    case 'OehdCntrNbr':
                        $stmt->bindValue($identifier, $this->oehdcntrnbr, PDO::PARAM_INT);
                        break;
                    case 'OehdWiBatch':
                        $stmt->bindValue($identifier, $this->oehdwibatch, PDO::PARAM_INT);
                        break;
                    case 'OehdDropRelHold':
                        $stmt->bindValue($identifier, $this->oehddroprelhold, PDO::PARAM_STR);
                        break;
                    case 'OehdTaxSub':
                        $stmt->bindValue($identifier, $this->oehdtaxsub, PDO::PARAM_STR);
                        break;
                    case 'OehdNonTaxSub':
                        $stmt->bindValue($identifier, $this->oehdnontaxsub, PDO::PARAM_STR);
                        break;
                    case 'OehdTaxTot':
                        $stmt->bindValue($identifier, $this->oehdtaxtot, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTot':
                        $stmt->bindValue($identifier, $this->oehdfrttot, PDO::PARAM_STR);
                        break;
                    case 'OehdMiscTot':
                        $stmt->bindValue($identifier, $this->oehdmisctot, PDO::PARAM_STR);
                        break;
                    case 'OehdOrdrTot':
                        $stmt->bindValue($identifier, $this->oehdordrtot, PDO::PARAM_STR);
                        break;
                    case 'OehdCostTot':
                        $stmt->bindValue($identifier, $this->oehdcosttot, PDO::PARAM_STR);
                        break;
                    case 'OehdSpCommLock':
                        $stmt->bindValue($identifier, $this->oehdspcommlock, PDO::PARAM_STR);
                        break;
                    case 'OehdTakenDate':
                        $stmt->bindValue($identifier, $this->oehdtakendate, PDO::PARAM_STR);
                        break;
                    case 'OehdTakenTime':
                        $stmt->bindValue($identifier, $this->oehdtakentime, PDO::PARAM_STR);
                        break;
                    case 'OehdPickDate':
                        $stmt->bindValue($identifier, $this->oehdpickdate, PDO::PARAM_STR);
                        break;
                    case 'OehdPickTime':
                        $stmt->bindValue($identifier, $this->oehdpicktime, PDO::PARAM_STR);
                        break;
                    case 'OehdPackDate':
                        $stmt->bindValue($identifier, $this->oehdpackdate, PDO::PARAM_STR);
                        break;
                    case 'OehdPackTime':
                        $stmt->bindValue($identifier, $this->oehdpacktime, PDO::PARAM_STR);
                        break;
                    case 'OehdVerifyDate':
                        $stmt->bindValue($identifier, $this->oehdverifydate, PDO::PARAM_STR);
                        break;
                    case 'OehdVerifyTime':
                        $stmt->bindValue($identifier, $this->oehdverifytime, PDO::PARAM_STR);
                        break;
                    case 'OehdCreditMemo':
                        $stmt->bindValue($identifier, $this->oehdcreditmemo, PDO::PARAM_STR);
                        break;
                    case 'OehdBookedYn':
                        $stmt->bindValue($identifier, $this->oehdbookedyn, PDO::PARAM_STR);
                        break;
                    case 'IntbWhseOrig':
                        $stmt->bindValue($identifier, $this->intbwhseorig, PDO::PARAM_STR);
                        break;
                    case 'OehdBtStat':
                        $stmt->bindValue($identifier, $this->oehdbtstat, PDO::PARAM_STR);
                        break;
                    case 'OehdShipComp':
                        $stmt->bindValue($identifier, $this->oehdshipcomp, PDO::PARAM_STR);
                        break;
                    case 'OehdCwoFlag':
                        $stmt->bindValue($identifier, $this->oehdcwoflag, PDO::PARAM_STR);
                        break;
                    case 'OehdDivision':
                        $stmt->bindValue($identifier, $this->oehddivision, PDO::PARAM_STR);
                        break;
                    case 'OehdTakenCode':
                        $stmt->bindValue($identifier, $this->oehdtakencode, PDO::PARAM_STR);
                        break;
                    case 'OehdPickCode':
                        $stmt->bindValue($identifier, $this->oehdpickcode, PDO::PARAM_STR);
                        break;
                    case 'OehdPackCode':
                        $stmt->bindValue($identifier, $this->oehdpackcode, PDO::PARAM_STR);
                        break;
                    case 'OehdVerifyCode':
                        $stmt->bindValue($identifier, $this->oehdverifycode, PDO::PARAM_STR);
                        break;
                    case 'OehdTotDisc':
                        $stmt->bindValue($identifier, $this->oehdtotdisc, PDO::PARAM_STR);
                        break;
                    case 'OehdEdiRefNbrQual':
                        $stmt->bindValue($identifier, $this->oehdedirefnbrqual, PDO::PARAM_STR);
                        break;
                    case 'OehdUserCode1':
                        $stmt->bindValue($identifier, $this->oehdusercode1, PDO::PARAM_STR);
                        break;
                    case 'OehdUserCode2':
                        $stmt->bindValue($identifier, $this->oehdusercode2, PDO::PARAM_STR);
                        break;
                    case 'OehdUserCode3':
                        $stmt->bindValue($identifier, $this->oehdusercode3, PDO::PARAM_STR);
                        break;
                    case 'OehdUserCode4':
                        $stmt->bindValue($identifier, $this->oehdusercode4, PDO::PARAM_STR);
                        break;
                    case 'OehdExchCtry':
                        $stmt->bindValue($identifier, $this->oehdexchctry, PDO::PARAM_STR);
                        break;
                    case 'OehdExchRate':
                        $stmt->bindValue($identifier, $this->oehdexchrate, PDO::PARAM_STR);
                        break;
                    case 'OehdWghtTot':
                        $stmt->bindValue($identifier, $this->oehdwghttot, PDO::PARAM_STR);
                        break;
                    case 'OehdWghtOride':
                        $stmt->bindValue($identifier, $this->oehdwghtoride, PDO::PARAM_STR);
                        break;
                    case 'OehdCcInfo':
                        $stmt->bindValue($identifier, $this->oehdccinfo, PDO::PARAM_STR);
                        break;
                    case 'OehdBoxCount':
                        $stmt->bindValue($identifier, $this->oehdboxcount, PDO::PARAM_INT);
                        break;
                    case 'OehdRqstDate':
                        $stmt->bindValue($identifier, $this->oehdrqstdate, PDO::PARAM_STR);
                        break;
                    case 'OehdCancDate':
                        $stmt->bindValue($identifier, $this->oehdcancdate, PDO::PARAM_STR);
                        break;
                    case 'OehdCrntUser':
                        $stmt->bindValue($identifier, $this->oehdcrntuser, PDO::PARAM_STR);
                        break;
                    case 'OehdReleaseNbr':
                        $stmt->bindValue($identifier, $this->oehdreleasenbr, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'OehdBordBuildDate':
                        $stmt->bindValue($identifier, $this->oehdbordbuilddate, PDO::PARAM_STR);
                        break;
                    case 'OehdDeptCode':
                        $stmt->bindValue($identifier, $this->oehddeptcode, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtInEntered':
                        $stmt->bindValue($identifier, $this->oehdfrtinentered, PDO::PARAM_STR);
                        break;
                    case 'OehdDropShipEntered':
                        $stmt->bindValue($identifier, $this->oehddropshipentered, PDO::PARAM_STR);
                        break;
                    case 'OehdErFlag':
                        $stmt->bindValue($identifier, $this->oehderflag, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtIn':
                        $stmt->bindValue($identifier, $this->oehdfrtin, PDO::PARAM_STR);
                        break;
                    case 'OehdDropShip':
                        $stmt->bindValue($identifier, $this->oehddropship, PDO::PARAM_STR);
                        break;
                    case 'OehdMinOrder':
                        $stmt->bindValue($identifier, $this->oehdminorder, PDO::PARAM_STR);
                        break;
                    case 'OehdContractTerms':
                        $stmt->bindValue($identifier, $this->oehdcontractterms, PDO::PARAM_STR);
                        break;
                    case 'OehdDropShipBilled':
                        $stmt->bindValue($identifier, $this->oehddropshipbilled, PDO::PARAM_STR);
                        break;
                    case 'OehdOrdTyp':
                        $stmt->bindValue($identifier, $this->oehdordtyp, PDO::PARAM_STR);
                        break;
                    case 'OehdTrackNbr':
                        $stmt->bindValue($identifier, $this->oehdtracknbr, PDO::PARAM_STR);
                        break;
                    case 'OehdSource':
                        $stmt->bindValue($identifier, $this->oehdsource, PDO::PARAM_STR);
                        break;
                    case 'OehdCcAprv':
                        $stmt->bindValue($identifier, $this->oehdccaprv, PDO::PARAM_STR);
                        break;
                    case 'OehdPickFmatType':
                        $stmt->bindValue($identifier, $this->oehdpickfmattype, PDO::PARAM_STR);
                        break;
                    case 'OehdInvcFmatType':
                        $stmt->bindValue($identifier, $this->oehdinvcfmattype, PDO::PARAM_STR);
                        break;
                    case 'OehdCashAmt':
                        $stmt->bindValue($identifier, $this->oehdcashamt, PDO::PARAM_STR);
                        break;
                    case 'OehdCheckAmt':
                        $stmt->bindValue($identifier, $this->oehdcheckamt, PDO::PARAM_STR);
                        break;
                    case 'OehdCheckNbr':
                        $stmt->bindValue($identifier, $this->oehdchecknbr, PDO::PARAM_STR);
                        break;
                    case 'OehdDepositAmt':
                        $stmt->bindValue($identifier, $this->oehddepositamt, PDO::PARAM_STR);
                        break;
                    case 'OehdDepositNbr':
                        $stmt->bindValue($identifier, $this->oehddepositnbr, PDO::PARAM_STR);
                        break;
                    case 'OehdCcAmt':
                        $stmt->bindValue($identifier, $this->oehdccamt, PDO::PARAM_STR);
                        break;
                    case 'OehdOTaxSub':
                        $stmt->bindValue($identifier, $this->oehdotaxsub, PDO::PARAM_STR);
                        break;
                    case 'OehdONonTaxSub':
                        $stmt->bindValue($identifier, $this->oehdonontaxsub, PDO::PARAM_STR);
                        break;
                    case 'OehdOTaxTot':
                        $stmt->bindValue($identifier, $this->oehdotaxtot, PDO::PARAM_STR);
                        break;
                    case 'OehdOOrdrTot':
                        $stmt->bindValue($identifier, $this->oehdoordrtot, PDO::PARAM_STR);
                        break;
                    case 'OehdPickPrintDate':
                        $stmt->bindValue($identifier, $this->oehdpickprintdate, PDO::PARAM_STR);
                        break;
                    case 'OehdPickPrintTime':
                        $stmt->bindValue($identifier, $this->oehdpickprinttime, PDO::PARAM_STR);
                        break;
                    case 'OehdCont':
                        $stmt->bindValue($identifier, $this->oehdcont, PDO::PARAM_STR);
                        break;
                    case 'OehdContTeleIntl':
                        $stmt->bindValue($identifier, $this->oehdcontteleintl, PDO::PARAM_STR);
                        break;
                    case 'OehdContTeleNbr':
                        $stmt->bindValue($identifier, $this->oehdconttelenbr, PDO::PARAM_STR);
                        break;
                    case 'OehdContTeleExt':
                        $stmt->bindValue($identifier, $this->oehdcontteleext, PDO::PARAM_STR);
                        break;
                    case 'OehdContFaxIntl':
                        $stmt->bindValue($identifier, $this->oehdcontfaxintl, PDO::PARAM_STR);
                        break;
                    case 'OehdContFaxNbr':
                        $stmt->bindValue($identifier, $this->oehdcontfaxnbr, PDO::PARAM_STR);
                        break;
                    case 'OehdShipAcct':
                        $stmt->bindValue($identifier, $this->oehdshipacct, PDO::PARAM_STR);
                        break;
                    case 'OehdChgDue':
                        $stmt->bindValue($identifier, $this->oehdchgdue, PDO::PARAM_STR);
                        break;
                    case 'OehdAddlPricDisc':
                        $stmt->bindValue($identifier, $this->oehdaddlpricdisc, PDO::PARAM_STR);
                        break;
                    case 'OehdAllShip':
                        $stmt->bindValue($identifier, $this->oehdallship, PDO::PARAM_STR);
                        break;
                    case 'OehdQtyOrderAmt':
                        $stmt->bindValue($identifier, $this->oehdqtyorderamt, PDO::PARAM_STR);
                        break;
                    case 'OehdCreditApplied':
                        $stmt->bindValue($identifier, $this->oehdcreditapplied, PDO::PARAM_STR);
                        break;
                    case 'OehdInvcPrintDate':
                        $stmt->bindValue($identifier, $this->oehdinvcprintdate, PDO::PARAM_STR);
                        break;
                    case 'OehdInvcPrintTime':
                        $stmt->bindValue($identifier, $this->oehdinvcprinttime, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscFrt':
                        $stmt->bindValue($identifier, $this->oehddiscfrt, PDO::PARAM_STR);
                        break;
                    case 'OehdOrideShipComp':
                        $stmt->bindValue($identifier, $this->oehdorideshipcomp, PDO::PARAM_STR);
                        break;
                    case 'OehdContEmail':
                        $stmt->bindValue($identifier, $this->oehdcontemail, PDO::PARAM_STR);
                        break;
                    case 'OehdManualFrt':
                        $stmt->bindValue($identifier, $this->oehdmanualfrt, PDO::PARAM_STR);
                        break;
                    case 'OehdInternalFrt':
                        $stmt->bindValue($identifier, $this->oehdinternalfrt, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtCost':
                        $stmt->bindValue($identifier, $this->oehdfrtcost, PDO::PARAM_STR);
                        break;
                    case 'OehdRoute':
                        $stmt->bindValue($identifier, $this->oehdroute, PDO::PARAM_STR);
                        break;
                    case 'OehdRouteSeq':
                        $stmt->bindValue($identifier, $this->oehdrouteseq, PDO::PARAM_INT);
                        break;
                    case 'OehdFrtTaxCode1':
                        $stmt->bindValue($identifier, $this->oehdfrttaxcode1, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxAmt1':
                        $stmt->bindValue($identifier, $this->oehdfrttaxamt1, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxCode2':
                        $stmt->bindValue($identifier, $this->oehdfrttaxcode2, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxAmt2':
                        $stmt->bindValue($identifier, $this->oehdfrttaxamt2, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxCode3':
                        $stmt->bindValue($identifier, $this->oehdfrttaxcode3, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxAmt3':
                        $stmt->bindValue($identifier, $this->oehdfrttaxamt3, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxCode4':
                        $stmt->bindValue($identifier, $this->oehdfrttaxcode4, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxAmt4':
                        $stmt->bindValue($identifier, $this->oehdfrttaxamt4, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxCode5':
                        $stmt->bindValue($identifier, $this->oehdfrttaxcode5, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtTaxAmt5':
                        $stmt->bindValue($identifier, $this->oehdfrttaxamt5, PDO::PARAM_STR);
                        break;
                    case 'OehdEdi855Sent':
                        $stmt->bindValue($identifier, $this->oehdedi855sent, PDO::PARAM_STR);
                        break;
                    case 'OehdFrt3rdParty':
                        $stmt->bindValue($identifier, $this->oehdfrt3rdparty, PDO::PARAM_STR);
                        break;
                    case 'OehdFob':
                        $stmt->bindValue($identifier, $this->oehdfob, PDO::PARAM_STR);
                        break;
                    case 'OehdConfirmImagYn':
                        $stmt->bindValue($identifier, $this->oehdconfirmimagyn, PDO::PARAM_STR);
                        break;
                    case 'OehdIndustConform':
                        $stmt->bindValue($identifier, $this->oehdindustconform, PDO::PARAM_STR);
                        break;
                    case 'OehdCstkConsign':
                        $stmt->bindValue($identifier, $this->oehdcstkconsign, PDO::PARAM_STR);
                        break;
                    case 'OehdLmDelayCapSent':
                        $stmt->bindValue($identifier, $this->oehdlmdelaycapsent, PDO::PARAM_STR);
                        break;
                    case 'OehdMfgId':
                        $stmt->bindValue($identifier, $this->oehdmfgid, PDO::PARAM_STR);
                        break;
                    case 'OehdStoreId':
                        $stmt->bindValue($identifier, $this->oehdstoreid, PDO::PARAM_STR);
                        break;
                    case 'OehdPickQueue':
                        $stmt->bindValue($identifier, $this->oehdpickqueue, PDO::PARAM_STR);
                        break;
                    case 'OehdArrvDate':
                        $stmt->bindValue($identifier, $this->oehdarrvdate, PDO::PARAM_STR);
                        break;
                    case 'OehdSurchgStat':
                        $stmt->bindValue($identifier, $this->oehdsurchgstat, PDO::PARAM_STR);
                        break;
                    case 'OehdFrtGrup':
                        $stmt->bindValue($identifier, $this->oehdfrtgrup, PDO::PARAM_STR);
                        break;
                    case 'OehdCommOride':
                        $stmt->bindValue($identifier, $this->oehdcommoride, PDO::PARAM_STR);
                        break;
                    case 'OehdChrgSplt':
                        $stmt->bindValue($identifier, $this->oehdchrgsplt, PDO::PARAM_STR);
                        break;
                    case 'OehdAcCcAprv':
                        $stmt->bindValue($identifier, $this->oehdacccaprv, PDO::PARAM_STR);
                        break;
                    case 'OehdOrigOrdrNbr':
                        $stmt->bindValue($identifier, $this->oehdorigordrnbr, PDO::PARAM_STR);
                        break;
                    case 'OehdPostDate':
                        $stmt->bindValue($identifier, $this->oehdpostdate, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscDate1':
                        $stmt->bindValue($identifier, $this->oehddiscdate1, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscPct1':
                        $stmt->bindValue($identifier, $this->oehddiscpct1, PDO::PARAM_STR);
                        break;
                    case 'OehdDueDate1':
                        $stmt->bindValue($identifier, $this->oehdduedate1, PDO::PARAM_STR);
                        break;
                    case 'OehdDueAmt1':
                        $stmt->bindValue($identifier, $this->oehddueamt1, PDO::PARAM_STR);
                        break;
                    case 'OehdDuePct1':
                        $stmt->bindValue($identifier, $this->oehdduepct1, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscDate2':
                        $stmt->bindValue($identifier, $this->oehddiscdate2, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscPct2':
                        $stmt->bindValue($identifier, $this->oehddiscpct2, PDO::PARAM_STR);
                        break;
                    case 'OehdDueDate2':
                        $stmt->bindValue($identifier, $this->oehdduedate2, PDO::PARAM_STR);
                        break;
                    case 'OehdDueAmt2':
                        $stmt->bindValue($identifier, $this->oehddueamt2, PDO::PARAM_STR);
                        break;
                    case 'OehdDuePct2':
                        $stmt->bindValue($identifier, $this->oehdduepct2, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscDate3':
                        $stmt->bindValue($identifier, $this->oehddiscdate3, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscPct3':
                        $stmt->bindValue($identifier, $this->oehddiscpct3, PDO::PARAM_STR);
                        break;
                    case 'OehdDueDate3':
                        $stmt->bindValue($identifier, $this->oehdduedate3, PDO::PARAM_STR);
                        break;
                    case 'OehdDueAmt3':
                        $stmt->bindValue($identifier, $this->oehddueamt3, PDO::PARAM_STR);
                        break;
                    case 'OehdDuePct3':
                        $stmt->bindValue($identifier, $this->oehdduepct3, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscDate4':
                        $stmt->bindValue($identifier, $this->oehddiscdate4, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscPct4':
                        $stmt->bindValue($identifier, $this->oehddiscpct4, PDO::PARAM_STR);
                        break;
                    case 'OehdDueDate4':
                        $stmt->bindValue($identifier, $this->oehdduedate4, PDO::PARAM_STR);
                        break;
                    case 'OehdDueAmt4':
                        $stmt->bindValue($identifier, $this->oehddueamt4, PDO::PARAM_STR);
                        break;
                    case 'OehdDuePct4':
                        $stmt->bindValue($identifier, $this->oehdduepct4, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscDate5':
                        $stmt->bindValue($identifier, $this->oehddiscdate5, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscPct5':
                        $stmt->bindValue($identifier, $this->oehddiscpct5, PDO::PARAM_STR);
                        break;
                    case 'OehdDueDate5':
                        $stmt->bindValue($identifier, $this->oehdduedate5, PDO::PARAM_STR);
                        break;
                    case 'OehdDueAmt5':
                        $stmt->bindValue($identifier, $this->oehddueamt5, PDO::PARAM_STR);
                        break;
                    case 'OehdDuePct5':
                        $stmt->bindValue($identifier, $this->oehdduepct5, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscDate6':
                        $stmt->bindValue($identifier, $this->oehddiscdate6, PDO::PARAM_STR);
                        break;
                    case 'OehdDiscPct6':
                        $stmt->bindValue($identifier, $this->oehddiscpct6, PDO::PARAM_STR);
                        break;
                    case 'OehdDueDate6':
                        $stmt->bindValue($identifier, $this->oehdduedate6, PDO::PARAM_STR);
                        break;
                    case 'OehdDueAmt6':
                        $stmt->bindValue($identifier, $this->oehddueamt6, PDO::PARAM_STR);
                        break;
                    case 'OehdDuePct6':
                        $stmt->bindValue($identifier, $this->oehdduepct6, PDO::PARAM_STR);
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
        $pos = SalesOrderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOehdnbr();
                break;
            case 1:
                return $this->getOehdstat();
                break;
            case 2:
                return $this->getOehdhold();
                break;
            case 3:
                return $this->getArcucustid();
                break;
            case 4:
                return $this->getArstshipid();
                break;
            case 5:
                return $this->getOehdstname();
                break;
            case 6:
                return $this->getOehdstlastname();
                break;
            case 7:
                return $this->getOehdstfirstname();
                break;
            case 8:
                return $this->getOehdstadr1();
                break;
            case 9:
                return $this->getOehdstadr2();
                break;
            case 10:
                return $this->getOehdstadr3();
                break;
            case 11:
                return $this->getOehdstctry();
                break;
            case 12:
                return $this->getOehdstcity();
                break;
            case 13:
                return $this->getOehdststat();
                break;
            case 14:
                return $this->getOehdstzipcode();
                break;
            case 15:
                return $this->getOehdcustpo();
                break;
            case 16:
                return $this->getOehdordrdate();
                break;
            case 17:
                return $this->getArtmtermcd();
                break;
            case 18:
                return $this->getArtbshipvia();
                break;
            case 19:
                return $this->getArininvnbr();
                break;
            case 20:
                return $this->getOehdinvdate();
                break;
            case 21:
                return $this->getOehdglpd();
                break;
            case 22:
                return $this->getArspsaleper1();
                break;
            case 23:
                return $this->getOehdsp1pct();
                break;
            case 24:
                return $this->getArspsaleper2();
                break;
            case 25:
                return $this->getOehdsp2pct();
                break;
            case 26:
                return $this->getArspsaleper3();
                break;
            case 27:
                return $this->getOehdsp3pct();
                break;
            case 28:
                return $this->getOehdcntrnbr();
                break;
            case 29:
                return $this->getOehdwibatch();
                break;
            case 30:
                return $this->getOehddroprelhold();
                break;
            case 31:
                return $this->getOehdtaxsub();
                break;
            case 32:
                return $this->getOehdnontaxsub();
                break;
            case 33:
                return $this->getOehdtaxtot();
                break;
            case 34:
                return $this->getOehdfrttot();
                break;
            case 35:
                return $this->getOehdmisctot();
                break;
            case 36:
                return $this->getOehdordrtot();
                break;
            case 37:
                return $this->getOehdcosttot();
                break;
            case 38:
                return $this->getOehdspcommlock();
                break;
            case 39:
                return $this->getOehdtakendate();
                break;
            case 40:
                return $this->getOehdtakentime();
                break;
            case 41:
                return $this->getOehdpickdate();
                break;
            case 42:
                return $this->getOehdpicktime();
                break;
            case 43:
                return $this->getOehdpackdate();
                break;
            case 44:
                return $this->getOehdpacktime();
                break;
            case 45:
                return $this->getOehdverifydate();
                break;
            case 46:
                return $this->getOehdverifytime();
                break;
            case 47:
                return $this->getOehdcreditmemo();
                break;
            case 48:
                return $this->getOehdbookedyn();
                break;
            case 49:
                return $this->getIntbwhseorig();
                break;
            case 50:
                return $this->getOehdbtstat();
                break;
            case 51:
                return $this->getOehdshipcomp();
                break;
            case 52:
                return $this->getOehdcwoflag();
                break;
            case 53:
                return $this->getOehddivision();
                break;
            case 54:
                return $this->getOehdtakencode();
                break;
            case 55:
                return $this->getOehdpickcode();
                break;
            case 56:
                return $this->getOehdpackcode();
                break;
            case 57:
                return $this->getOehdverifycode();
                break;
            case 58:
                return $this->getOehdtotdisc();
                break;
            case 59:
                return $this->getOehdedirefnbrqual();
                break;
            case 60:
                return $this->getOehdusercode1();
                break;
            case 61:
                return $this->getOehdusercode2();
                break;
            case 62:
                return $this->getOehdusercode3();
                break;
            case 63:
                return $this->getOehdusercode4();
                break;
            case 64:
                return $this->getOehdexchctry();
                break;
            case 65:
                return $this->getOehdexchrate();
                break;
            case 66:
                return $this->getOehdwghttot();
                break;
            case 67:
                return $this->getOehdwghtoride();
                break;
            case 68:
                return $this->getOehdccinfo();
                break;
            case 69:
                return $this->getOehdboxcount();
                break;
            case 70:
                return $this->getOehdrqstdate();
                break;
            case 71:
                return $this->getOehdcancdate();
                break;
            case 72:
                return $this->getOehdcrntuser();
                break;
            case 73:
                return $this->getOehdreleasenbr();
                break;
            case 74:
                return $this->getIntbwhse();
                break;
            case 75:
                return $this->getOehdbordbuilddate();
                break;
            case 76:
                return $this->getOehddeptcode();
                break;
            case 77:
                return $this->getOehdfrtinentered();
                break;
            case 78:
                return $this->getOehddropshipentered();
                break;
            case 79:
                return $this->getOehderflag();
                break;
            case 80:
                return $this->getOehdfrtin();
                break;
            case 81:
                return $this->getOehddropship();
                break;
            case 82:
                return $this->getOehdminorder();
                break;
            case 83:
                return $this->getOehdcontractterms();
                break;
            case 84:
                return $this->getOehddropshipbilled();
                break;
            case 85:
                return $this->getOehdordtyp();
                break;
            case 86:
                return $this->getOehdtracknbr();
                break;
            case 87:
                return $this->getOehdsource();
                break;
            case 88:
                return $this->getOehdccaprv();
                break;
            case 89:
                return $this->getOehdpickfmattype();
                break;
            case 90:
                return $this->getOehdinvcfmattype();
                break;
            case 91:
                return $this->getOehdcashamt();
                break;
            case 92:
                return $this->getOehdcheckamt();
                break;
            case 93:
                return $this->getOehdchecknbr();
                break;
            case 94:
                return $this->getOehddepositamt();
                break;
            case 95:
                return $this->getOehddepositnbr();
                break;
            case 96:
                return $this->getOehdccamt();
                break;
            case 97:
                return $this->getOehdotaxsub();
                break;
            case 98:
                return $this->getOehdonontaxsub();
                break;
            case 99:
                return $this->getOehdotaxtot();
                break;
            case 100:
                return $this->getOehdoordrtot();
                break;
            case 101:
                return $this->getOehdpickprintdate();
                break;
            case 102:
                return $this->getOehdpickprinttime();
                break;
            case 103:
                return $this->getOehdcont();
                break;
            case 104:
                return $this->getOehdcontteleintl();
                break;
            case 105:
                return $this->getOehdconttelenbr();
                break;
            case 106:
                return $this->getOehdcontteleext();
                break;
            case 107:
                return $this->getOehdcontfaxintl();
                break;
            case 108:
                return $this->getOehdcontfaxnbr();
                break;
            case 109:
                return $this->getOehdshipacct();
                break;
            case 110:
                return $this->getOehdchgdue();
                break;
            case 111:
                return $this->getOehdaddlpricdisc();
                break;
            case 112:
                return $this->getOehdallship();
                break;
            case 113:
                return $this->getOehdqtyorderamt();
                break;
            case 114:
                return $this->getOehdcreditapplied();
                break;
            case 115:
                return $this->getOehdinvcprintdate();
                break;
            case 116:
                return $this->getOehdinvcprinttime();
                break;
            case 117:
                return $this->getOehddiscfrt();
                break;
            case 118:
                return $this->getOehdorideshipcomp();
                break;
            case 119:
                return $this->getOehdcontemail();
                break;
            case 120:
                return $this->getOehdmanualfrt();
                break;
            case 121:
                return $this->getOehdinternalfrt();
                break;
            case 122:
                return $this->getOehdfrtcost();
                break;
            case 123:
                return $this->getOehdroute();
                break;
            case 124:
                return $this->getOehdrouteseq();
                break;
            case 125:
                return $this->getOehdfrttaxcode1();
                break;
            case 126:
                return $this->getOehdfrttaxamt1();
                break;
            case 127:
                return $this->getOehdfrttaxcode2();
                break;
            case 128:
                return $this->getOehdfrttaxamt2();
                break;
            case 129:
                return $this->getOehdfrttaxcode3();
                break;
            case 130:
                return $this->getOehdfrttaxamt3();
                break;
            case 131:
                return $this->getOehdfrttaxcode4();
                break;
            case 132:
                return $this->getOehdfrttaxamt4();
                break;
            case 133:
                return $this->getOehdfrttaxcode5();
                break;
            case 134:
                return $this->getOehdfrttaxamt5();
                break;
            case 135:
                return $this->getOehdedi855sent();
                break;
            case 136:
                return $this->getOehdfrt3rdparty();
                break;
            case 137:
                return $this->getOehdfob();
                break;
            case 138:
                return $this->getOehdconfirmimagyn();
                break;
            case 139:
                return $this->getOehdindustconform();
                break;
            case 140:
                return $this->getOehdcstkconsign();
                break;
            case 141:
                return $this->getOehdlmdelaycapsent();
                break;
            case 142:
                return $this->getOehdmfgid();
                break;
            case 143:
                return $this->getOehdstoreid();
                break;
            case 144:
                return $this->getOehdpickqueue();
                break;
            case 145:
                return $this->getOehdarrvdate();
                break;
            case 146:
                return $this->getOehdsurchgstat();
                break;
            case 147:
                return $this->getOehdfrtgrup();
                break;
            case 148:
                return $this->getOehdcommoride();
                break;
            case 149:
                return $this->getOehdchrgsplt();
                break;
            case 150:
                return $this->getOehdacccaprv();
                break;
            case 151:
                return $this->getOehdorigordrnbr();
                break;
            case 152:
                return $this->getOehdpostdate();
                break;
            case 153:
                return $this->getOehddiscdate1();
                break;
            case 154:
                return $this->getOehddiscpct1();
                break;
            case 155:
                return $this->getOehdduedate1();
                break;
            case 156:
                return $this->getOehddueamt1();
                break;
            case 157:
                return $this->getOehdduepct1();
                break;
            case 158:
                return $this->getOehddiscdate2();
                break;
            case 159:
                return $this->getOehddiscpct2();
                break;
            case 160:
                return $this->getOehdduedate2();
                break;
            case 161:
                return $this->getOehddueamt2();
                break;
            case 162:
                return $this->getOehdduepct2();
                break;
            case 163:
                return $this->getOehddiscdate3();
                break;
            case 164:
                return $this->getOehddiscpct3();
                break;
            case 165:
                return $this->getOehdduedate3();
                break;
            case 166:
                return $this->getOehddueamt3();
                break;
            case 167:
                return $this->getOehdduepct3();
                break;
            case 168:
                return $this->getOehddiscdate4();
                break;
            case 169:
                return $this->getOehddiscpct4();
                break;
            case 170:
                return $this->getOehdduedate4();
                break;
            case 171:
                return $this->getOehddueamt4();
                break;
            case 172:
                return $this->getOehdduepct4();
                break;
            case 173:
                return $this->getOehddiscdate5();
                break;
            case 174:
                return $this->getOehddiscpct5();
                break;
            case 175:
                return $this->getOehdduedate5();
                break;
            case 176:
                return $this->getOehddueamt5();
                break;
            case 177:
                return $this->getOehdduepct5();
                break;
            case 178:
                return $this->getOehddiscdate6();
                break;
            case 179:
                return $this->getOehddiscpct6();
                break;
            case 180:
                return $this->getOehdduedate6();
                break;
            case 181:
                return $this->getOehddueamt6();
                break;
            case 182:
                return $this->getOehdduepct6();
                break;
            case 183:
                return $this->getDateupdtd();
                break;
            case 184:
                return $this->getTimeupdtd();
                break;
            case 185:
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

        if (isset($alreadyDumpedObjects['SalesOrder'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SalesOrder'][$this->hashCode()] = true;
        $keys = SalesOrderTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOehdnbr(),
            $keys[1] => $this->getOehdstat(),
            $keys[2] => $this->getOehdhold(),
            $keys[3] => $this->getArcucustid(),
            $keys[4] => $this->getArstshipid(),
            $keys[5] => $this->getOehdstname(),
            $keys[6] => $this->getOehdstlastname(),
            $keys[7] => $this->getOehdstfirstname(),
            $keys[8] => $this->getOehdstadr1(),
            $keys[9] => $this->getOehdstadr2(),
            $keys[10] => $this->getOehdstadr3(),
            $keys[11] => $this->getOehdstctry(),
            $keys[12] => $this->getOehdstcity(),
            $keys[13] => $this->getOehdststat(),
            $keys[14] => $this->getOehdstzipcode(),
            $keys[15] => $this->getOehdcustpo(),
            $keys[16] => $this->getOehdordrdate(),
            $keys[17] => $this->getArtmtermcd(),
            $keys[18] => $this->getArtbshipvia(),
            $keys[19] => $this->getArininvnbr(),
            $keys[20] => $this->getOehdinvdate(),
            $keys[21] => $this->getOehdglpd(),
            $keys[22] => $this->getArspsaleper1(),
            $keys[23] => $this->getOehdsp1pct(),
            $keys[24] => $this->getArspsaleper2(),
            $keys[25] => $this->getOehdsp2pct(),
            $keys[26] => $this->getArspsaleper3(),
            $keys[27] => $this->getOehdsp3pct(),
            $keys[28] => $this->getOehdcntrnbr(),
            $keys[29] => $this->getOehdwibatch(),
            $keys[30] => $this->getOehddroprelhold(),
            $keys[31] => $this->getOehdtaxsub(),
            $keys[32] => $this->getOehdnontaxsub(),
            $keys[33] => $this->getOehdtaxtot(),
            $keys[34] => $this->getOehdfrttot(),
            $keys[35] => $this->getOehdmisctot(),
            $keys[36] => $this->getOehdordrtot(),
            $keys[37] => $this->getOehdcosttot(),
            $keys[38] => $this->getOehdspcommlock(),
            $keys[39] => $this->getOehdtakendate(),
            $keys[40] => $this->getOehdtakentime(),
            $keys[41] => $this->getOehdpickdate(),
            $keys[42] => $this->getOehdpicktime(),
            $keys[43] => $this->getOehdpackdate(),
            $keys[44] => $this->getOehdpacktime(),
            $keys[45] => $this->getOehdverifydate(),
            $keys[46] => $this->getOehdverifytime(),
            $keys[47] => $this->getOehdcreditmemo(),
            $keys[48] => $this->getOehdbookedyn(),
            $keys[49] => $this->getIntbwhseorig(),
            $keys[50] => $this->getOehdbtstat(),
            $keys[51] => $this->getOehdshipcomp(),
            $keys[52] => $this->getOehdcwoflag(),
            $keys[53] => $this->getOehddivision(),
            $keys[54] => $this->getOehdtakencode(),
            $keys[55] => $this->getOehdpickcode(),
            $keys[56] => $this->getOehdpackcode(),
            $keys[57] => $this->getOehdverifycode(),
            $keys[58] => $this->getOehdtotdisc(),
            $keys[59] => $this->getOehdedirefnbrqual(),
            $keys[60] => $this->getOehdusercode1(),
            $keys[61] => $this->getOehdusercode2(),
            $keys[62] => $this->getOehdusercode3(),
            $keys[63] => $this->getOehdusercode4(),
            $keys[64] => $this->getOehdexchctry(),
            $keys[65] => $this->getOehdexchrate(),
            $keys[66] => $this->getOehdwghttot(),
            $keys[67] => $this->getOehdwghtoride(),
            $keys[68] => $this->getOehdccinfo(),
            $keys[69] => $this->getOehdboxcount(),
            $keys[70] => $this->getOehdrqstdate(),
            $keys[71] => $this->getOehdcancdate(),
            $keys[72] => $this->getOehdcrntuser(),
            $keys[73] => $this->getOehdreleasenbr(),
            $keys[74] => $this->getIntbwhse(),
            $keys[75] => $this->getOehdbordbuilddate(),
            $keys[76] => $this->getOehddeptcode(),
            $keys[77] => $this->getOehdfrtinentered(),
            $keys[78] => $this->getOehddropshipentered(),
            $keys[79] => $this->getOehderflag(),
            $keys[80] => $this->getOehdfrtin(),
            $keys[81] => $this->getOehddropship(),
            $keys[82] => $this->getOehdminorder(),
            $keys[83] => $this->getOehdcontractterms(),
            $keys[84] => $this->getOehddropshipbilled(),
            $keys[85] => $this->getOehdordtyp(),
            $keys[86] => $this->getOehdtracknbr(),
            $keys[87] => $this->getOehdsource(),
            $keys[88] => $this->getOehdccaprv(),
            $keys[89] => $this->getOehdpickfmattype(),
            $keys[90] => $this->getOehdinvcfmattype(),
            $keys[91] => $this->getOehdcashamt(),
            $keys[92] => $this->getOehdcheckamt(),
            $keys[93] => $this->getOehdchecknbr(),
            $keys[94] => $this->getOehddepositamt(),
            $keys[95] => $this->getOehddepositnbr(),
            $keys[96] => $this->getOehdccamt(),
            $keys[97] => $this->getOehdotaxsub(),
            $keys[98] => $this->getOehdonontaxsub(),
            $keys[99] => $this->getOehdotaxtot(),
            $keys[100] => $this->getOehdoordrtot(),
            $keys[101] => $this->getOehdpickprintdate(),
            $keys[102] => $this->getOehdpickprinttime(),
            $keys[103] => $this->getOehdcont(),
            $keys[104] => $this->getOehdcontteleintl(),
            $keys[105] => $this->getOehdconttelenbr(),
            $keys[106] => $this->getOehdcontteleext(),
            $keys[107] => $this->getOehdcontfaxintl(),
            $keys[108] => $this->getOehdcontfaxnbr(),
            $keys[109] => $this->getOehdshipacct(),
            $keys[110] => $this->getOehdchgdue(),
            $keys[111] => $this->getOehdaddlpricdisc(),
            $keys[112] => $this->getOehdallship(),
            $keys[113] => $this->getOehdqtyorderamt(),
            $keys[114] => $this->getOehdcreditapplied(),
            $keys[115] => $this->getOehdinvcprintdate(),
            $keys[116] => $this->getOehdinvcprinttime(),
            $keys[117] => $this->getOehddiscfrt(),
            $keys[118] => $this->getOehdorideshipcomp(),
            $keys[119] => $this->getOehdcontemail(),
            $keys[120] => $this->getOehdmanualfrt(),
            $keys[121] => $this->getOehdinternalfrt(),
            $keys[122] => $this->getOehdfrtcost(),
            $keys[123] => $this->getOehdroute(),
            $keys[124] => $this->getOehdrouteseq(),
            $keys[125] => $this->getOehdfrttaxcode1(),
            $keys[126] => $this->getOehdfrttaxamt1(),
            $keys[127] => $this->getOehdfrttaxcode2(),
            $keys[128] => $this->getOehdfrttaxamt2(),
            $keys[129] => $this->getOehdfrttaxcode3(),
            $keys[130] => $this->getOehdfrttaxamt3(),
            $keys[131] => $this->getOehdfrttaxcode4(),
            $keys[132] => $this->getOehdfrttaxamt4(),
            $keys[133] => $this->getOehdfrttaxcode5(),
            $keys[134] => $this->getOehdfrttaxamt5(),
            $keys[135] => $this->getOehdedi855sent(),
            $keys[136] => $this->getOehdfrt3rdparty(),
            $keys[137] => $this->getOehdfob(),
            $keys[138] => $this->getOehdconfirmimagyn(),
            $keys[139] => $this->getOehdindustconform(),
            $keys[140] => $this->getOehdcstkconsign(),
            $keys[141] => $this->getOehdlmdelaycapsent(),
            $keys[142] => $this->getOehdmfgid(),
            $keys[143] => $this->getOehdstoreid(),
            $keys[144] => $this->getOehdpickqueue(),
            $keys[145] => $this->getOehdarrvdate(),
            $keys[146] => $this->getOehdsurchgstat(),
            $keys[147] => $this->getOehdfrtgrup(),
            $keys[148] => $this->getOehdcommoride(),
            $keys[149] => $this->getOehdchrgsplt(),
            $keys[150] => $this->getOehdacccaprv(),
            $keys[151] => $this->getOehdorigordrnbr(),
            $keys[152] => $this->getOehdpostdate(),
            $keys[153] => $this->getOehddiscdate1(),
            $keys[154] => $this->getOehddiscpct1(),
            $keys[155] => $this->getOehdduedate1(),
            $keys[156] => $this->getOehddueamt1(),
            $keys[157] => $this->getOehdduepct1(),
            $keys[158] => $this->getOehddiscdate2(),
            $keys[159] => $this->getOehddiscpct2(),
            $keys[160] => $this->getOehdduedate2(),
            $keys[161] => $this->getOehddueamt2(),
            $keys[162] => $this->getOehdduepct2(),
            $keys[163] => $this->getOehddiscdate3(),
            $keys[164] => $this->getOehddiscpct3(),
            $keys[165] => $this->getOehdduedate3(),
            $keys[166] => $this->getOehddueamt3(),
            $keys[167] => $this->getOehdduepct3(),
            $keys[168] => $this->getOehddiscdate4(),
            $keys[169] => $this->getOehddiscpct4(),
            $keys[170] => $this->getOehdduedate4(),
            $keys[171] => $this->getOehddueamt4(),
            $keys[172] => $this->getOehdduepct4(),
            $keys[173] => $this->getOehddiscdate5(),
            $keys[174] => $this->getOehddiscpct5(),
            $keys[175] => $this->getOehdduedate5(),
            $keys[176] => $this->getOehddueamt5(),
            $keys[177] => $this->getOehdduepct5(),
            $keys[178] => $this->getOehddiscdate6(),
            $keys[179] => $this->getOehddiscpct6(),
            $keys[180] => $this->getOehdduedate6(),
            $keys[181] => $this->getOehddueamt6(),
            $keys[182] => $this->getOehdduepct6(),
            $keys[183] => $this->getDateupdtd(),
            $keys[184] => $this->getTimeupdtd(),
            $keys[185] => $this->getDummy(),
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
     * @return $this|\SalesOrder
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = SalesOrderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\SalesOrder
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setOehdnbr($value);
                break;
            case 1:
                $this->setOehdstat($value);
                break;
            case 2:
                $this->setOehdhold($value);
                break;
            case 3:
                $this->setArcucustid($value);
                break;
            case 4:
                $this->setArstshipid($value);
                break;
            case 5:
                $this->setOehdstname($value);
                break;
            case 6:
                $this->setOehdstlastname($value);
                break;
            case 7:
                $this->setOehdstfirstname($value);
                break;
            case 8:
                $this->setOehdstadr1($value);
                break;
            case 9:
                $this->setOehdstadr2($value);
                break;
            case 10:
                $this->setOehdstadr3($value);
                break;
            case 11:
                $this->setOehdstctry($value);
                break;
            case 12:
                $this->setOehdstcity($value);
                break;
            case 13:
                $this->setOehdststat($value);
                break;
            case 14:
                $this->setOehdstzipcode($value);
                break;
            case 15:
                $this->setOehdcustpo($value);
                break;
            case 16:
                $this->setOehdordrdate($value);
                break;
            case 17:
                $this->setArtmtermcd($value);
                break;
            case 18:
                $this->setArtbshipvia($value);
                break;
            case 19:
                $this->setArininvnbr($value);
                break;
            case 20:
                $this->setOehdinvdate($value);
                break;
            case 21:
                $this->setOehdglpd($value);
                break;
            case 22:
                $this->setArspsaleper1($value);
                break;
            case 23:
                $this->setOehdsp1pct($value);
                break;
            case 24:
                $this->setArspsaleper2($value);
                break;
            case 25:
                $this->setOehdsp2pct($value);
                break;
            case 26:
                $this->setArspsaleper3($value);
                break;
            case 27:
                $this->setOehdsp3pct($value);
                break;
            case 28:
                $this->setOehdcntrnbr($value);
                break;
            case 29:
                $this->setOehdwibatch($value);
                break;
            case 30:
                $this->setOehddroprelhold($value);
                break;
            case 31:
                $this->setOehdtaxsub($value);
                break;
            case 32:
                $this->setOehdnontaxsub($value);
                break;
            case 33:
                $this->setOehdtaxtot($value);
                break;
            case 34:
                $this->setOehdfrttot($value);
                break;
            case 35:
                $this->setOehdmisctot($value);
                break;
            case 36:
                $this->setOehdordrtot($value);
                break;
            case 37:
                $this->setOehdcosttot($value);
                break;
            case 38:
                $this->setOehdspcommlock($value);
                break;
            case 39:
                $this->setOehdtakendate($value);
                break;
            case 40:
                $this->setOehdtakentime($value);
                break;
            case 41:
                $this->setOehdpickdate($value);
                break;
            case 42:
                $this->setOehdpicktime($value);
                break;
            case 43:
                $this->setOehdpackdate($value);
                break;
            case 44:
                $this->setOehdpacktime($value);
                break;
            case 45:
                $this->setOehdverifydate($value);
                break;
            case 46:
                $this->setOehdverifytime($value);
                break;
            case 47:
                $this->setOehdcreditmemo($value);
                break;
            case 48:
                $this->setOehdbookedyn($value);
                break;
            case 49:
                $this->setIntbwhseorig($value);
                break;
            case 50:
                $this->setOehdbtstat($value);
                break;
            case 51:
                $this->setOehdshipcomp($value);
                break;
            case 52:
                $this->setOehdcwoflag($value);
                break;
            case 53:
                $this->setOehddivision($value);
                break;
            case 54:
                $this->setOehdtakencode($value);
                break;
            case 55:
                $this->setOehdpickcode($value);
                break;
            case 56:
                $this->setOehdpackcode($value);
                break;
            case 57:
                $this->setOehdverifycode($value);
                break;
            case 58:
                $this->setOehdtotdisc($value);
                break;
            case 59:
                $this->setOehdedirefnbrqual($value);
                break;
            case 60:
                $this->setOehdusercode1($value);
                break;
            case 61:
                $this->setOehdusercode2($value);
                break;
            case 62:
                $this->setOehdusercode3($value);
                break;
            case 63:
                $this->setOehdusercode4($value);
                break;
            case 64:
                $this->setOehdexchctry($value);
                break;
            case 65:
                $this->setOehdexchrate($value);
                break;
            case 66:
                $this->setOehdwghttot($value);
                break;
            case 67:
                $this->setOehdwghtoride($value);
                break;
            case 68:
                $this->setOehdccinfo($value);
                break;
            case 69:
                $this->setOehdboxcount($value);
                break;
            case 70:
                $this->setOehdrqstdate($value);
                break;
            case 71:
                $this->setOehdcancdate($value);
                break;
            case 72:
                $this->setOehdcrntuser($value);
                break;
            case 73:
                $this->setOehdreleasenbr($value);
                break;
            case 74:
                $this->setIntbwhse($value);
                break;
            case 75:
                $this->setOehdbordbuilddate($value);
                break;
            case 76:
                $this->setOehddeptcode($value);
                break;
            case 77:
                $this->setOehdfrtinentered($value);
                break;
            case 78:
                $this->setOehddropshipentered($value);
                break;
            case 79:
                $this->setOehderflag($value);
                break;
            case 80:
                $this->setOehdfrtin($value);
                break;
            case 81:
                $this->setOehddropship($value);
                break;
            case 82:
                $this->setOehdminorder($value);
                break;
            case 83:
                $this->setOehdcontractterms($value);
                break;
            case 84:
                $this->setOehddropshipbilled($value);
                break;
            case 85:
                $this->setOehdordtyp($value);
                break;
            case 86:
                $this->setOehdtracknbr($value);
                break;
            case 87:
                $this->setOehdsource($value);
                break;
            case 88:
                $this->setOehdccaprv($value);
                break;
            case 89:
                $this->setOehdpickfmattype($value);
                break;
            case 90:
                $this->setOehdinvcfmattype($value);
                break;
            case 91:
                $this->setOehdcashamt($value);
                break;
            case 92:
                $this->setOehdcheckamt($value);
                break;
            case 93:
                $this->setOehdchecknbr($value);
                break;
            case 94:
                $this->setOehddepositamt($value);
                break;
            case 95:
                $this->setOehddepositnbr($value);
                break;
            case 96:
                $this->setOehdccamt($value);
                break;
            case 97:
                $this->setOehdotaxsub($value);
                break;
            case 98:
                $this->setOehdonontaxsub($value);
                break;
            case 99:
                $this->setOehdotaxtot($value);
                break;
            case 100:
                $this->setOehdoordrtot($value);
                break;
            case 101:
                $this->setOehdpickprintdate($value);
                break;
            case 102:
                $this->setOehdpickprinttime($value);
                break;
            case 103:
                $this->setOehdcont($value);
                break;
            case 104:
                $this->setOehdcontteleintl($value);
                break;
            case 105:
                $this->setOehdconttelenbr($value);
                break;
            case 106:
                $this->setOehdcontteleext($value);
                break;
            case 107:
                $this->setOehdcontfaxintl($value);
                break;
            case 108:
                $this->setOehdcontfaxnbr($value);
                break;
            case 109:
                $this->setOehdshipacct($value);
                break;
            case 110:
                $this->setOehdchgdue($value);
                break;
            case 111:
                $this->setOehdaddlpricdisc($value);
                break;
            case 112:
                $this->setOehdallship($value);
                break;
            case 113:
                $this->setOehdqtyorderamt($value);
                break;
            case 114:
                $this->setOehdcreditapplied($value);
                break;
            case 115:
                $this->setOehdinvcprintdate($value);
                break;
            case 116:
                $this->setOehdinvcprinttime($value);
                break;
            case 117:
                $this->setOehddiscfrt($value);
                break;
            case 118:
                $this->setOehdorideshipcomp($value);
                break;
            case 119:
                $this->setOehdcontemail($value);
                break;
            case 120:
                $this->setOehdmanualfrt($value);
                break;
            case 121:
                $this->setOehdinternalfrt($value);
                break;
            case 122:
                $this->setOehdfrtcost($value);
                break;
            case 123:
                $this->setOehdroute($value);
                break;
            case 124:
                $this->setOehdrouteseq($value);
                break;
            case 125:
                $this->setOehdfrttaxcode1($value);
                break;
            case 126:
                $this->setOehdfrttaxamt1($value);
                break;
            case 127:
                $this->setOehdfrttaxcode2($value);
                break;
            case 128:
                $this->setOehdfrttaxamt2($value);
                break;
            case 129:
                $this->setOehdfrttaxcode3($value);
                break;
            case 130:
                $this->setOehdfrttaxamt3($value);
                break;
            case 131:
                $this->setOehdfrttaxcode4($value);
                break;
            case 132:
                $this->setOehdfrttaxamt4($value);
                break;
            case 133:
                $this->setOehdfrttaxcode5($value);
                break;
            case 134:
                $this->setOehdfrttaxamt5($value);
                break;
            case 135:
                $this->setOehdedi855sent($value);
                break;
            case 136:
                $this->setOehdfrt3rdparty($value);
                break;
            case 137:
                $this->setOehdfob($value);
                break;
            case 138:
                $this->setOehdconfirmimagyn($value);
                break;
            case 139:
                $this->setOehdindustconform($value);
                break;
            case 140:
                $this->setOehdcstkconsign($value);
                break;
            case 141:
                $this->setOehdlmdelaycapsent($value);
                break;
            case 142:
                $this->setOehdmfgid($value);
                break;
            case 143:
                $this->setOehdstoreid($value);
                break;
            case 144:
                $this->setOehdpickqueue($value);
                break;
            case 145:
                $this->setOehdarrvdate($value);
                break;
            case 146:
                $this->setOehdsurchgstat($value);
                break;
            case 147:
                $this->setOehdfrtgrup($value);
                break;
            case 148:
                $this->setOehdcommoride($value);
                break;
            case 149:
                $this->setOehdchrgsplt($value);
                break;
            case 150:
                $this->setOehdacccaprv($value);
                break;
            case 151:
                $this->setOehdorigordrnbr($value);
                break;
            case 152:
                $this->setOehdpostdate($value);
                break;
            case 153:
                $this->setOehddiscdate1($value);
                break;
            case 154:
                $this->setOehddiscpct1($value);
                break;
            case 155:
                $this->setOehdduedate1($value);
                break;
            case 156:
                $this->setOehddueamt1($value);
                break;
            case 157:
                $this->setOehdduepct1($value);
                break;
            case 158:
                $this->setOehddiscdate2($value);
                break;
            case 159:
                $this->setOehddiscpct2($value);
                break;
            case 160:
                $this->setOehdduedate2($value);
                break;
            case 161:
                $this->setOehddueamt2($value);
                break;
            case 162:
                $this->setOehdduepct2($value);
                break;
            case 163:
                $this->setOehddiscdate3($value);
                break;
            case 164:
                $this->setOehddiscpct3($value);
                break;
            case 165:
                $this->setOehdduedate3($value);
                break;
            case 166:
                $this->setOehddueamt3($value);
                break;
            case 167:
                $this->setOehdduepct3($value);
                break;
            case 168:
                $this->setOehddiscdate4($value);
                break;
            case 169:
                $this->setOehddiscpct4($value);
                break;
            case 170:
                $this->setOehdduedate4($value);
                break;
            case 171:
                $this->setOehddueamt4($value);
                break;
            case 172:
                $this->setOehdduepct4($value);
                break;
            case 173:
                $this->setOehddiscdate5($value);
                break;
            case 174:
                $this->setOehddiscpct5($value);
                break;
            case 175:
                $this->setOehdduedate5($value);
                break;
            case 176:
                $this->setOehddueamt5($value);
                break;
            case 177:
                $this->setOehdduepct5($value);
                break;
            case 178:
                $this->setOehddiscdate6($value);
                break;
            case 179:
                $this->setOehddiscpct6($value);
                break;
            case 180:
                $this->setOehdduedate6($value);
                break;
            case 181:
                $this->setOehddueamt6($value);
                break;
            case 182:
                $this->setOehdduepct6($value);
                break;
            case 183:
                $this->setDateupdtd($value);
                break;
            case 184:
                $this->setTimeupdtd($value);
                break;
            case 185:
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
        $keys = SalesOrderTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setOehdnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOehdstat($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setOehdhold($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArcucustid($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArstshipid($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setOehdstname($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOehdstlastname($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOehdstfirstname($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOehdstadr1($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOehdstadr2($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOehdstadr3($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOehdstctry($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOehdstcity($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOehdststat($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOehdstzipcode($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOehdcustpo($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setOehdordrdate($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setArtmtermcd($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setArtbshipvia($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setArininvnbr($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setOehdinvdate($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setOehdglpd($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setArspsaleper1($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setOehdsp1pct($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setArspsaleper2($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setOehdsp2pct($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setArspsaleper3($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setOehdsp3pct($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setOehdcntrnbr($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setOehdwibatch($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setOehddroprelhold($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setOehdtaxsub($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setOehdnontaxsub($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setOehdtaxtot($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setOehdfrttot($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setOehdmisctot($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setOehdordrtot($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setOehdcosttot($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setOehdspcommlock($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setOehdtakendate($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setOehdtakentime($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setOehdpickdate($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setOehdpicktime($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setOehdpackdate($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setOehdpacktime($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setOehdverifydate($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setOehdverifytime($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setOehdcreditmemo($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setOehdbookedyn($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setIntbwhseorig($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setOehdbtstat($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setOehdshipcomp($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setOehdcwoflag($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setOehddivision($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setOehdtakencode($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setOehdpickcode($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setOehdpackcode($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setOehdverifycode($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setOehdtotdisc($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setOehdedirefnbrqual($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setOehdusercode1($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setOehdusercode2($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setOehdusercode3($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setOehdusercode4($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setOehdexchctry($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setOehdexchrate($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setOehdwghttot($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setOehdwghtoride($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setOehdccinfo($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setOehdboxcount($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setOehdrqstdate($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setOehdcancdate($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setOehdcrntuser($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setOehdreleasenbr($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setIntbwhse($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setOehdbordbuilddate($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setOehddeptcode($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setOehdfrtinentered($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setOehddropshipentered($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setOehderflag($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setOehdfrtin($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setOehddropship($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setOehdminorder($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setOehdcontractterms($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setOehddropshipbilled($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setOehdordtyp($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setOehdtracknbr($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setOehdsource($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setOehdccaprv($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setOehdpickfmattype($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setOehdinvcfmattype($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setOehdcashamt($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setOehdcheckamt($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setOehdchecknbr($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setOehddepositamt($arr[$keys[94]]);
        }
        if (array_key_exists($keys[95], $arr)) {
            $this->setOehddepositnbr($arr[$keys[95]]);
        }
        if (array_key_exists($keys[96], $arr)) {
            $this->setOehdccamt($arr[$keys[96]]);
        }
        if (array_key_exists($keys[97], $arr)) {
            $this->setOehdotaxsub($arr[$keys[97]]);
        }
        if (array_key_exists($keys[98], $arr)) {
            $this->setOehdonontaxsub($arr[$keys[98]]);
        }
        if (array_key_exists($keys[99], $arr)) {
            $this->setOehdotaxtot($arr[$keys[99]]);
        }
        if (array_key_exists($keys[100], $arr)) {
            $this->setOehdoordrtot($arr[$keys[100]]);
        }
        if (array_key_exists($keys[101], $arr)) {
            $this->setOehdpickprintdate($arr[$keys[101]]);
        }
        if (array_key_exists($keys[102], $arr)) {
            $this->setOehdpickprinttime($arr[$keys[102]]);
        }
        if (array_key_exists($keys[103], $arr)) {
            $this->setOehdcont($arr[$keys[103]]);
        }
        if (array_key_exists($keys[104], $arr)) {
            $this->setOehdcontteleintl($arr[$keys[104]]);
        }
        if (array_key_exists($keys[105], $arr)) {
            $this->setOehdconttelenbr($arr[$keys[105]]);
        }
        if (array_key_exists($keys[106], $arr)) {
            $this->setOehdcontteleext($arr[$keys[106]]);
        }
        if (array_key_exists($keys[107], $arr)) {
            $this->setOehdcontfaxintl($arr[$keys[107]]);
        }
        if (array_key_exists($keys[108], $arr)) {
            $this->setOehdcontfaxnbr($arr[$keys[108]]);
        }
        if (array_key_exists($keys[109], $arr)) {
            $this->setOehdshipacct($arr[$keys[109]]);
        }
        if (array_key_exists($keys[110], $arr)) {
            $this->setOehdchgdue($arr[$keys[110]]);
        }
        if (array_key_exists($keys[111], $arr)) {
            $this->setOehdaddlpricdisc($arr[$keys[111]]);
        }
        if (array_key_exists($keys[112], $arr)) {
            $this->setOehdallship($arr[$keys[112]]);
        }
        if (array_key_exists($keys[113], $arr)) {
            $this->setOehdqtyorderamt($arr[$keys[113]]);
        }
        if (array_key_exists($keys[114], $arr)) {
            $this->setOehdcreditapplied($arr[$keys[114]]);
        }
        if (array_key_exists($keys[115], $arr)) {
            $this->setOehdinvcprintdate($arr[$keys[115]]);
        }
        if (array_key_exists($keys[116], $arr)) {
            $this->setOehdinvcprinttime($arr[$keys[116]]);
        }
        if (array_key_exists($keys[117], $arr)) {
            $this->setOehddiscfrt($arr[$keys[117]]);
        }
        if (array_key_exists($keys[118], $arr)) {
            $this->setOehdorideshipcomp($arr[$keys[118]]);
        }
        if (array_key_exists($keys[119], $arr)) {
            $this->setOehdcontemail($arr[$keys[119]]);
        }
        if (array_key_exists($keys[120], $arr)) {
            $this->setOehdmanualfrt($arr[$keys[120]]);
        }
        if (array_key_exists($keys[121], $arr)) {
            $this->setOehdinternalfrt($arr[$keys[121]]);
        }
        if (array_key_exists($keys[122], $arr)) {
            $this->setOehdfrtcost($arr[$keys[122]]);
        }
        if (array_key_exists($keys[123], $arr)) {
            $this->setOehdroute($arr[$keys[123]]);
        }
        if (array_key_exists($keys[124], $arr)) {
            $this->setOehdrouteseq($arr[$keys[124]]);
        }
        if (array_key_exists($keys[125], $arr)) {
            $this->setOehdfrttaxcode1($arr[$keys[125]]);
        }
        if (array_key_exists($keys[126], $arr)) {
            $this->setOehdfrttaxamt1($arr[$keys[126]]);
        }
        if (array_key_exists($keys[127], $arr)) {
            $this->setOehdfrttaxcode2($arr[$keys[127]]);
        }
        if (array_key_exists($keys[128], $arr)) {
            $this->setOehdfrttaxamt2($arr[$keys[128]]);
        }
        if (array_key_exists($keys[129], $arr)) {
            $this->setOehdfrttaxcode3($arr[$keys[129]]);
        }
        if (array_key_exists($keys[130], $arr)) {
            $this->setOehdfrttaxamt3($arr[$keys[130]]);
        }
        if (array_key_exists($keys[131], $arr)) {
            $this->setOehdfrttaxcode4($arr[$keys[131]]);
        }
        if (array_key_exists($keys[132], $arr)) {
            $this->setOehdfrttaxamt4($arr[$keys[132]]);
        }
        if (array_key_exists($keys[133], $arr)) {
            $this->setOehdfrttaxcode5($arr[$keys[133]]);
        }
        if (array_key_exists($keys[134], $arr)) {
            $this->setOehdfrttaxamt5($arr[$keys[134]]);
        }
        if (array_key_exists($keys[135], $arr)) {
            $this->setOehdedi855sent($arr[$keys[135]]);
        }
        if (array_key_exists($keys[136], $arr)) {
            $this->setOehdfrt3rdparty($arr[$keys[136]]);
        }
        if (array_key_exists($keys[137], $arr)) {
            $this->setOehdfob($arr[$keys[137]]);
        }
        if (array_key_exists($keys[138], $arr)) {
            $this->setOehdconfirmimagyn($arr[$keys[138]]);
        }
        if (array_key_exists($keys[139], $arr)) {
            $this->setOehdindustconform($arr[$keys[139]]);
        }
        if (array_key_exists($keys[140], $arr)) {
            $this->setOehdcstkconsign($arr[$keys[140]]);
        }
        if (array_key_exists($keys[141], $arr)) {
            $this->setOehdlmdelaycapsent($arr[$keys[141]]);
        }
        if (array_key_exists($keys[142], $arr)) {
            $this->setOehdmfgid($arr[$keys[142]]);
        }
        if (array_key_exists($keys[143], $arr)) {
            $this->setOehdstoreid($arr[$keys[143]]);
        }
        if (array_key_exists($keys[144], $arr)) {
            $this->setOehdpickqueue($arr[$keys[144]]);
        }
        if (array_key_exists($keys[145], $arr)) {
            $this->setOehdarrvdate($arr[$keys[145]]);
        }
        if (array_key_exists($keys[146], $arr)) {
            $this->setOehdsurchgstat($arr[$keys[146]]);
        }
        if (array_key_exists($keys[147], $arr)) {
            $this->setOehdfrtgrup($arr[$keys[147]]);
        }
        if (array_key_exists($keys[148], $arr)) {
            $this->setOehdcommoride($arr[$keys[148]]);
        }
        if (array_key_exists($keys[149], $arr)) {
            $this->setOehdchrgsplt($arr[$keys[149]]);
        }
        if (array_key_exists($keys[150], $arr)) {
            $this->setOehdacccaprv($arr[$keys[150]]);
        }
        if (array_key_exists($keys[151], $arr)) {
            $this->setOehdorigordrnbr($arr[$keys[151]]);
        }
        if (array_key_exists($keys[152], $arr)) {
            $this->setOehdpostdate($arr[$keys[152]]);
        }
        if (array_key_exists($keys[153], $arr)) {
            $this->setOehddiscdate1($arr[$keys[153]]);
        }
        if (array_key_exists($keys[154], $arr)) {
            $this->setOehddiscpct1($arr[$keys[154]]);
        }
        if (array_key_exists($keys[155], $arr)) {
            $this->setOehdduedate1($arr[$keys[155]]);
        }
        if (array_key_exists($keys[156], $arr)) {
            $this->setOehddueamt1($arr[$keys[156]]);
        }
        if (array_key_exists($keys[157], $arr)) {
            $this->setOehdduepct1($arr[$keys[157]]);
        }
        if (array_key_exists($keys[158], $arr)) {
            $this->setOehddiscdate2($arr[$keys[158]]);
        }
        if (array_key_exists($keys[159], $arr)) {
            $this->setOehddiscpct2($arr[$keys[159]]);
        }
        if (array_key_exists($keys[160], $arr)) {
            $this->setOehdduedate2($arr[$keys[160]]);
        }
        if (array_key_exists($keys[161], $arr)) {
            $this->setOehddueamt2($arr[$keys[161]]);
        }
        if (array_key_exists($keys[162], $arr)) {
            $this->setOehdduepct2($arr[$keys[162]]);
        }
        if (array_key_exists($keys[163], $arr)) {
            $this->setOehddiscdate3($arr[$keys[163]]);
        }
        if (array_key_exists($keys[164], $arr)) {
            $this->setOehddiscpct3($arr[$keys[164]]);
        }
        if (array_key_exists($keys[165], $arr)) {
            $this->setOehdduedate3($arr[$keys[165]]);
        }
        if (array_key_exists($keys[166], $arr)) {
            $this->setOehddueamt3($arr[$keys[166]]);
        }
        if (array_key_exists($keys[167], $arr)) {
            $this->setOehdduepct3($arr[$keys[167]]);
        }
        if (array_key_exists($keys[168], $arr)) {
            $this->setOehddiscdate4($arr[$keys[168]]);
        }
        if (array_key_exists($keys[169], $arr)) {
            $this->setOehddiscpct4($arr[$keys[169]]);
        }
        if (array_key_exists($keys[170], $arr)) {
            $this->setOehdduedate4($arr[$keys[170]]);
        }
        if (array_key_exists($keys[171], $arr)) {
            $this->setOehddueamt4($arr[$keys[171]]);
        }
        if (array_key_exists($keys[172], $arr)) {
            $this->setOehdduepct4($arr[$keys[172]]);
        }
        if (array_key_exists($keys[173], $arr)) {
            $this->setOehddiscdate5($arr[$keys[173]]);
        }
        if (array_key_exists($keys[174], $arr)) {
            $this->setOehddiscpct5($arr[$keys[174]]);
        }
        if (array_key_exists($keys[175], $arr)) {
            $this->setOehdduedate5($arr[$keys[175]]);
        }
        if (array_key_exists($keys[176], $arr)) {
            $this->setOehddueamt5($arr[$keys[176]]);
        }
        if (array_key_exists($keys[177], $arr)) {
            $this->setOehdduepct5($arr[$keys[177]]);
        }
        if (array_key_exists($keys[178], $arr)) {
            $this->setOehddiscdate6($arr[$keys[178]]);
        }
        if (array_key_exists($keys[179], $arr)) {
            $this->setOehddiscpct6($arr[$keys[179]]);
        }
        if (array_key_exists($keys[180], $arr)) {
            $this->setOehdduedate6($arr[$keys[180]]);
        }
        if (array_key_exists($keys[181], $arr)) {
            $this->setOehddueamt6($arr[$keys[181]]);
        }
        if (array_key_exists($keys[182], $arr)) {
            $this->setOehdduepct6($arr[$keys[182]]);
        }
        if (array_key_exists($keys[183], $arr)) {
            $this->setDateupdtd($arr[$keys[183]]);
        }
        if (array_key_exists($keys[184], $arr)) {
            $this->setTimeupdtd($arr[$keys[184]]);
        }
        if (array_key_exists($keys[185], $arr)) {
            $this->setDummy($arr[$keys[185]]);
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
     * @return $this|\SalesOrder The current object, for fluid interface
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
        $criteria = new Criteria(SalesOrderTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDNBR)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDNBR, $this->oehdnbr);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTAT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSTAT, $this->oehdstat);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDHOLD)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDHOLD, $this->oehdhold);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARCUCUSTID)) {
            $criteria->add(SalesOrderTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARSTSHIPID)) {
            $criteria->add(SalesOrderTableMap::COL_ARSTSHIPID, $this->arstshipid);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTNAME)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSTNAME, $this->oehdstname);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTLASTNAME)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSTLASTNAME, $this->oehdstlastname);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTFIRSTNAME)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSTFIRSTNAME, $this->oehdstfirstname);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTADR1)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSTADR1, $this->oehdstadr1);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTADR2)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSTADR2, $this->oehdstadr2);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTADR3)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSTADR3, $this->oehdstadr3);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTCTRY)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSTCTRY, $this->oehdstctry);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTCITY)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSTCITY, $this->oehdstcity);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTSTAT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSTSTAT, $this->oehdststat);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTZIPCODE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSTZIPCODE, $this->oehdstzipcode);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCUSTPO)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCUSTPO, $this->oehdcustpo);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDORDRDATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDORDRDATE, $this->oehdordrdate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARTMTERMCD)) {
            $criteria->add(SalesOrderTableMap::COL_ARTMTERMCD, $this->artmtermcd);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARTBSHIPVIA)) {
            $criteria->add(SalesOrderTableMap::COL_ARTBSHIPVIA, $this->artbshipvia);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARININVNBR)) {
            $criteria->add(SalesOrderTableMap::COL_ARININVNBR, $this->arininvnbr);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDINVDATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDINVDATE, $this->oehdinvdate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDGLPD)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDGLPD, $this->oehdglpd);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARSPSALEPER1)) {
            $criteria->add(SalesOrderTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSP1PCT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSP1PCT, $this->oehdsp1pct);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARSPSALEPER2)) {
            $criteria->add(SalesOrderTableMap::COL_ARSPSALEPER2, $this->arspsaleper2);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSP2PCT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSP2PCT, $this->oehdsp2pct);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_ARSPSALEPER3)) {
            $criteria->add(SalesOrderTableMap::COL_ARSPSALEPER3, $this->arspsaleper3);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSP3PCT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSP3PCT, $this->oehdsp3pct);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCNTRNBR)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCNTRNBR, $this->oehdcntrnbr);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDWIBATCH)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDWIBATCH, $this->oehdwibatch);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDROPRELHOLD)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDROPRELHOLD, $this->oehddroprelhold);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTAXSUB)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDTAXSUB, $this->oehdtaxsub);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDNONTAXSUB)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDNONTAXSUB, $this->oehdnontaxsub);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTAXTOT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDTAXTOT, $this->oehdtaxtot);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTOT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTTOT, $this->oehdfrttot);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDMISCTOT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDMISCTOT, $this->oehdmisctot);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDORDRTOT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDORDRTOT, $this->oehdordrtot);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCOSTTOT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCOSTTOT, $this->oehdcosttot);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSPCOMMLOCK)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSPCOMMLOCK, $this->oehdspcommlock);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTAKENDATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDTAKENDATE, $this->oehdtakendate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTAKENTIME)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDTAKENTIME, $this->oehdtakentime);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKDATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDPICKDATE, $this->oehdpickdate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKTIME)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDPICKTIME, $this->oehdpicktime);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPACKDATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDPACKDATE, $this->oehdpackdate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPACKTIME)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDPACKTIME, $this->oehdpacktime);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDVERIFYDATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDVERIFYDATE, $this->oehdverifydate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDVERIFYTIME)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDVERIFYTIME, $this->oehdverifytime);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCREDITMEMO)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCREDITMEMO, $this->oehdcreditmemo);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDBOOKEDYN)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDBOOKEDYN, $this->oehdbookedyn);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_INTBWHSEORIG)) {
            $criteria->add(SalesOrderTableMap::COL_INTBWHSEORIG, $this->intbwhseorig);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDBTSTAT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDBTSTAT, $this->oehdbtstat);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSHIPCOMP)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSHIPCOMP, $this->oehdshipcomp);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCWOFLAG)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCWOFLAG, $this->oehdcwoflag);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDIVISION)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDIVISION, $this->oehddivision);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTAKENCODE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDTAKENCODE, $this->oehdtakencode);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKCODE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDPICKCODE, $this->oehdpickcode);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPACKCODE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDPACKCODE, $this->oehdpackcode);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDVERIFYCODE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDVERIFYCODE, $this->oehdverifycode);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTOTDISC)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDTOTDISC, $this->oehdtotdisc);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDEDIREFNBRQUAL)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDEDIREFNBRQUAL, $this->oehdedirefnbrqual);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDUSERCODE1)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDUSERCODE1, $this->oehdusercode1);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDUSERCODE2)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDUSERCODE2, $this->oehdusercode2);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDUSERCODE3)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDUSERCODE3, $this->oehdusercode3);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDUSERCODE4)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDUSERCODE4, $this->oehdusercode4);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDEXCHCTRY)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDEXCHCTRY, $this->oehdexchctry);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDEXCHRATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDEXCHRATE, $this->oehdexchrate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDWGHTTOT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDWGHTTOT, $this->oehdwghttot);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDWGHTORIDE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDWGHTORIDE, $this->oehdwghtoride);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCCINFO)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCCINFO, $this->oehdccinfo);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDBOXCOUNT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDBOXCOUNT, $this->oehdboxcount);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDRQSTDATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDRQSTDATE, $this->oehdrqstdate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCANCDATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCANCDATE, $this->oehdcancdate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCRNTUSER)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCRNTUSER, $this->oehdcrntuser);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDRELEASENBR)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDRELEASENBR, $this->oehdreleasenbr);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_INTBWHSE)) {
            $criteria->add(SalesOrderTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDBORDBUILDDATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDBORDBUILDDATE, $this->oehdbordbuilddate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDEPTCODE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDEPTCODE, $this->oehddeptcode);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTINENTERED)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTINENTERED, $this->oehdfrtinentered);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDROPSHIPENTERED)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDROPSHIPENTERED, $this->oehddropshipentered);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDERFLAG)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDERFLAG, $this->oehderflag);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTIN)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTIN, $this->oehdfrtin);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDROPSHIP)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDROPSHIP, $this->oehddropship);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDMINORDER)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDMINORDER, $this->oehdminorder);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTRACTTERMS)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCONTRACTTERMS, $this->oehdcontractterms);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDROPSHIPBILLED)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDROPSHIPBILLED, $this->oehddropshipbilled);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDORDTYP)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDORDTYP, $this->oehdordtyp);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDTRACKNBR)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDTRACKNBR, $this->oehdtracknbr);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSOURCE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSOURCE, $this->oehdsource);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCCAPRV)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCCAPRV, $this->oehdccaprv);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKFMATTYPE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDPICKFMATTYPE, $this->oehdpickfmattype);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDINVCFMATTYPE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDINVCFMATTYPE, $this->oehdinvcfmattype);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCASHAMT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCASHAMT, $this->oehdcashamt);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCHECKAMT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCHECKAMT, $this->oehdcheckamt);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCHECKNBR)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCHECKNBR, $this->oehdchecknbr);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDEPOSITAMT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDEPOSITAMT, $this->oehddepositamt);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDEPOSITNBR)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDEPOSITNBR, $this->oehddepositnbr);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCCAMT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCCAMT, $this->oehdccamt);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDOTAXSUB)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDOTAXSUB, $this->oehdotaxsub);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDONONTAXSUB)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDONONTAXSUB, $this->oehdonontaxsub);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDOTAXTOT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDOTAXTOT, $this->oehdotaxtot);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDOORDRTOT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDOORDRTOT, $this->oehdoordrtot);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKPRINTDATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDPICKPRINTDATE, $this->oehdpickprintdate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKPRINTTIME)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDPICKPRINTTIME, $this->oehdpickprinttime);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCONT, $this->oehdcont);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTTELEINTL)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCONTTELEINTL, $this->oehdcontteleintl);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTTELENBR)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCONTTELENBR, $this->oehdconttelenbr);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTTELEEXT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCONTTELEEXT, $this->oehdcontteleext);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTFAXINTL)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCONTFAXINTL, $this->oehdcontfaxintl);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTFAXNBR)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCONTFAXNBR, $this->oehdcontfaxnbr);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSHIPACCT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSHIPACCT, $this->oehdshipacct);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCHGDUE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCHGDUE, $this->oehdchgdue);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDADDLPRICDISC)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDADDLPRICDISC, $this->oehdaddlpricdisc);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDALLSHIP)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDALLSHIP, $this->oehdallship);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDQTYORDERAMT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDQTYORDERAMT, $this->oehdqtyorderamt);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCREDITAPPLIED)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCREDITAPPLIED, $this->oehdcreditapplied);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDINVCPRINTDATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDINVCPRINTDATE, $this->oehdinvcprintdate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDINVCPRINTTIME)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDINVCPRINTTIME, $this->oehdinvcprinttime);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCFRT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDISCFRT, $this->oehddiscfrt);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDORIDESHIPCOMP)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDORIDESHIPCOMP, $this->oehdorideshipcomp);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONTEMAIL)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCONTEMAIL, $this->oehdcontemail);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDMANUALFRT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDMANUALFRT, $this->oehdmanualfrt);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDINTERNALFRT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDINTERNALFRT, $this->oehdinternalfrt);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTCOST)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTCOST, $this->oehdfrtcost);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDROUTE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDROUTE, $this->oehdroute);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDROUTESEQ)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDROUTESEQ, $this->oehdrouteseq);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXCODE1)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTTAXCODE1, $this->oehdfrttaxcode1);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXAMT1)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTTAXAMT1, $this->oehdfrttaxamt1);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXCODE2)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTTAXCODE2, $this->oehdfrttaxcode2);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXAMT2)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTTAXAMT2, $this->oehdfrttaxamt2);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXCODE3)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTTAXCODE3, $this->oehdfrttaxcode3);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXAMT3)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTTAXAMT3, $this->oehdfrttaxamt3);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXCODE4)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTTAXCODE4, $this->oehdfrttaxcode4);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXAMT4)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTTAXAMT4, $this->oehdfrttaxamt4);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXCODE5)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTTAXCODE5, $this->oehdfrttaxcode5);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTTAXAMT5)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTTAXAMT5, $this->oehdfrttaxamt5);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDEDI855SENT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDEDI855SENT, $this->oehdedi855sent);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRT3RDPARTY)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRT3RDPARTY, $this->oehdfrt3rdparty);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFOB)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFOB, $this->oehdfob);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCONFIRMIMAGYN)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCONFIRMIMAGYN, $this->oehdconfirmimagyn);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDINDUSTCONFORM)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDINDUSTCONFORM, $this->oehdindustconform);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCSTKCONSIGN)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCSTKCONSIGN, $this->oehdcstkconsign);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDLMDELAYCAPSENT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDLMDELAYCAPSENT, $this->oehdlmdelaycapsent);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDMFGID)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDMFGID, $this->oehdmfgid);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSTOREID)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSTOREID, $this->oehdstoreid);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPICKQUEUE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDPICKQUEUE, $this->oehdpickqueue);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDARRVDATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDARRVDATE, $this->oehdarrvdate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDSURCHGSTAT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDSURCHGSTAT, $this->oehdsurchgstat);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDFRTGRUP)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDFRTGRUP, $this->oehdfrtgrup);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCOMMORIDE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCOMMORIDE, $this->oehdcommoride);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDCHRGSPLT)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDCHRGSPLT, $this->oehdchrgsplt);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDACCCAPRV)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDACCCAPRV, $this->oehdacccaprv);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDORIGORDRNBR)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDORIGORDRNBR, $this->oehdorigordrnbr);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDPOSTDATE)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDPOSTDATE, $this->oehdpostdate);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCDATE1)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDISCDATE1, $this->oehddiscdate1);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCPCT1)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDISCPCT1, $this->oehddiscpct1);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEDATE1)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEDATE1, $this->oehdduedate1);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEAMT1)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEAMT1, $this->oehddueamt1);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEPCT1)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEPCT1, $this->oehdduepct1);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCDATE2)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDISCDATE2, $this->oehddiscdate2);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCPCT2)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDISCPCT2, $this->oehddiscpct2);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEDATE2)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEDATE2, $this->oehdduedate2);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEAMT2)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEAMT2, $this->oehddueamt2);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEPCT2)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEPCT2, $this->oehdduepct2);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCDATE3)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDISCDATE3, $this->oehddiscdate3);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCPCT3)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDISCPCT3, $this->oehddiscpct3);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEDATE3)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEDATE3, $this->oehdduedate3);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEAMT3)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEAMT3, $this->oehddueamt3);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEPCT3)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEPCT3, $this->oehdduepct3);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCDATE4)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDISCDATE4, $this->oehddiscdate4);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCPCT4)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDISCPCT4, $this->oehddiscpct4);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEDATE4)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEDATE4, $this->oehdduedate4);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEAMT4)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEAMT4, $this->oehddueamt4);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEPCT4)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEPCT4, $this->oehdduepct4);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCDATE5)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDISCDATE5, $this->oehddiscdate5);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCPCT5)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDISCPCT5, $this->oehddiscpct5);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEDATE5)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEDATE5, $this->oehdduedate5);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEAMT5)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEAMT5, $this->oehddueamt5);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEPCT5)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEPCT5, $this->oehdduepct5);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCDATE6)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDISCDATE6, $this->oehddiscdate6);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDISCPCT6)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDISCPCT6, $this->oehddiscpct6);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEDATE6)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEDATE6, $this->oehdduedate6);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEAMT6)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEAMT6, $this->oehddueamt6);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_OEHDDUEPCT6)) {
            $criteria->add(SalesOrderTableMap::COL_OEHDDUEPCT6, $this->oehdduepct6);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_DATEUPDTD)) {
            $criteria->add(SalesOrderTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_TIMEUPDTD)) {
            $criteria->add(SalesOrderTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(SalesOrderTableMap::COL_DUMMY)) {
            $criteria->add(SalesOrderTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildSalesOrderQuery::create();
        $criteria->add(SalesOrderTableMap::COL_OEHDNBR, $this->oehdnbr);

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
        $validPk = null !== $this->getOehdnbr();

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
        return $this->getOehdnbr();
    }

    /**
     * Generic method to set the primary key (oehdnbr column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOehdnbr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getOehdnbr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \SalesOrder (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOehdnbr($this->getOehdnbr());
        $copyObj->setOehdstat($this->getOehdstat());
        $copyObj->setOehdhold($this->getOehdhold());
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setArstshipid($this->getArstshipid());
        $copyObj->setOehdstname($this->getOehdstname());
        $copyObj->setOehdstlastname($this->getOehdstlastname());
        $copyObj->setOehdstfirstname($this->getOehdstfirstname());
        $copyObj->setOehdstadr1($this->getOehdstadr1());
        $copyObj->setOehdstadr2($this->getOehdstadr2());
        $copyObj->setOehdstadr3($this->getOehdstadr3());
        $copyObj->setOehdstctry($this->getOehdstctry());
        $copyObj->setOehdstcity($this->getOehdstcity());
        $copyObj->setOehdststat($this->getOehdststat());
        $copyObj->setOehdstzipcode($this->getOehdstzipcode());
        $copyObj->setOehdcustpo($this->getOehdcustpo());
        $copyObj->setOehdordrdate($this->getOehdordrdate());
        $copyObj->setArtmtermcd($this->getArtmtermcd());
        $copyObj->setArtbshipvia($this->getArtbshipvia());
        $copyObj->setArininvnbr($this->getArininvnbr());
        $copyObj->setOehdinvdate($this->getOehdinvdate());
        $copyObj->setOehdglpd($this->getOehdglpd());
        $copyObj->setArspsaleper1($this->getArspsaleper1());
        $copyObj->setOehdsp1pct($this->getOehdsp1pct());
        $copyObj->setArspsaleper2($this->getArspsaleper2());
        $copyObj->setOehdsp2pct($this->getOehdsp2pct());
        $copyObj->setArspsaleper3($this->getArspsaleper3());
        $copyObj->setOehdsp3pct($this->getOehdsp3pct());
        $copyObj->setOehdcntrnbr($this->getOehdcntrnbr());
        $copyObj->setOehdwibatch($this->getOehdwibatch());
        $copyObj->setOehddroprelhold($this->getOehddroprelhold());
        $copyObj->setOehdtaxsub($this->getOehdtaxsub());
        $copyObj->setOehdnontaxsub($this->getOehdnontaxsub());
        $copyObj->setOehdtaxtot($this->getOehdtaxtot());
        $copyObj->setOehdfrttot($this->getOehdfrttot());
        $copyObj->setOehdmisctot($this->getOehdmisctot());
        $copyObj->setOehdordrtot($this->getOehdordrtot());
        $copyObj->setOehdcosttot($this->getOehdcosttot());
        $copyObj->setOehdspcommlock($this->getOehdspcommlock());
        $copyObj->setOehdtakendate($this->getOehdtakendate());
        $copyObj->setOehdtakentime($this->getOehdtakentime());
        $copyObj->setOehdpickdate($this->getOehdpickdate());
        $copyObj->setOehdpicktime($this->getOehdpicktime());
        $copyObj->setOehdpackdate($this->getOehdpackdate());
        $copyObj->setOehdpacktime($this->getOehdpacktime());
        $copyObj->setOehdverifydate($this->getOehdverifydate());
        $copyObj->setOehdverifytime($this->getOehdverifytime());
        $copyObj->setOehdcreditmemo($this->getOehdcreditmemo());
        $copyObj->setOehdbookedyn($this->getOehdbookedyn());
        $copyObj->setIntbwhseorig($this->getIntbwhseorig());
        $copyObj->setOehdbtstat($this->getOehdbtstat());
        $copyObj->setOehdshipcomp($this->getOehdshipcomp());
        $copyObj->setOehdcwoflag($this->getOehdcwoflag());
        $copyObj->setOehddivision($this->getOehddivision());
        $copyObj->setOehdtakencode($this->getOehdtakencode());
        $copyObj->setOehdpickcode($this->getOehdpickcode());
        $copyObj->setOehdpackcode($this->getOehdpackcode());
        $copyObj->setOehdverifycode($this->getOehdverifycode());
        $copyObj->setOehdtotdisc($this->getOehdtotdisc());
        $copyObj->setOehdedirefnbrqual($this->getOehdedirefnbrqual());
        $copyObj->setOehdusercode1($this->getOehdusercode1());
        $copyObj->setOehdusercode2($this->getOehdusercode2());
        $copyObj->setOehdusercode3($this->getOehdusercode3());
        $copyObj->setOehdusercode4($this->getOehdusercode4());
        $copyObj->setOehdexchctry($this->getOehdexchctry());
        $copyObj->setOehdexchrate($this->getOehdexchrate());
        $copyObj->setOehdwghttot($this->getOehdwghttot());
        $copyObj->setOehdwghtoride($this->getOehdwghtoride());
        $copyObj->setOehdccinfo($this->getOehdccinfo());
        $copyObj->setOehdboxcount($this->getOehdboxcount());
        $copyObj->setOehdrqstdate($this->getOehdrqstdate());
        $copyObj->setOehdcancdate($this->getOehdcancdate());
        $copyObj->setOehdcrntuser($this->getOehdcrntuser());
        $copyObj->setOehdreleasenbr($this->getOehdreleasenbr());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setOehdbordbuilddate($this->getOehdbordbuilddate());
        $copyObj->setOehddeptcode($this->getOehddeptcode());
        $copyObj->setOehdfrtinentered($this->getOehdfrtinentered());
        $copyObj->setOehddropshipentered($this->getOehddropshipentered());
        $copyObj->setOehderflag($this->getOehderflag());
        $copyObj->setOehdfrtin($this->getOehdfrtin());
        $copyObj->setOehddropship($this->getOehddropship());
        $copyObj->setOehdminorder($this->getOehdminorder());
        $copyObj->setOehdcontractterms($this->getOehdcontractterms());
        $copyObj->setOehddropshipbilled($this->getOehddropshipbilled());
        $copyObj->setOehdordtyp($this->getOehdordtyp());
        $copyObj->setOehdtracknbr($this->getOehdtracknbr());
        $copyObj->setOehdsource($this->getOehdsource());
        $copyObj->setOehdccaprv($this->getOehdccaprv());
        $copyObj->setOehdpickfmattype($this->getOehdpickfmattype());
        $copyObj->setOehdinvcfmattype($this->getOehdinvcfmattype());
        $copyObj->setOehdcashamt($this->getOehdcashamt());
        $copyObj->setOehdcheckamt($this->getOehdcheckamt());
        $copyObj->setOehdchecknbr($this->getOehdchecknbr());
        $copyObj->setOehddepositamt($this->getOehddepositamt());
        $copyObj->setOehddepositnbr($this->getOehddepositnbr());
        $copyObj->setOehdccamt($this->getOehdccamt());
        $copyObj->setOehdotaxsub($this->getOehdotaxsub());
        $copyObj->setOehdonontaxsub($this->getOehdonontaxsub());
        $copyObj->setOehdotaxtot($this->getOehdotaxtot());
        $copyObj->setOehdoordrtot($this->getOehdoordrtot());
        $copyObj->setOehdpickprintdate($this->getOehdpickprintdate());
        $copyObj->setOehdpickprinttime($this->getOehdpickprinttime());
        $copyObj->setOehdcont($this->getOehdcont());
        $copyObj->setOehdcontteleintl($this->getOehdcontteleintl());
        $copyObj->setOehdconttelenbr($this->getOehdconttelenbr());
        $copyObj->setOehdcontteleext($this->getOehdcontteleext());
        $copyObj->setOehdcontfaxintl($this->getOehdcontfaxintl());
        $copyObj->setOehdcontfaxnbr($this->getOehdcontfaxnbr());
        $copyObj->setOehdshipacct($this->getOehdshipacct());
        $copyObj->setOehdchgdue($this->getOehdchgdue());
        $copyObj->setOehdaddlpricdisc($this->getOehdaddlpricdisc());
        $copyObj->setOehdallship($this->getOehdallship());
        $copyObj->setOehdqtyorderamt($this->getOehdqtyorderamt());
        $copyObj->setOehdcreditapplied($this->getOehdcreditapplied());
        $copyObj->setOehdinvcprintdate($this->getOehdinvcprintdate());
        $copyObj->setOehdinvcprinttime($this->getOehdinvcprinttime());
        $copyObj->setOehddiscfrt($this->getOehddiscfrt());
        $copyObj->setOehdorideshipcomp($this->getOehdorideshipcomp());
        $copyObj->setOehdcontemail($this->getOehdcontemail());
        $copyObj->setOehdmanualfrt($this->getOehdmanualfrt());
        $copyObj->setOehdinternalfrt($this->getOehdinternalfrt());
        $copyObj->setOehdfrtcost($this->getOehdfrtcost());
        $copyObj->setOehdroute($this->getOehdroute());
        $copyObj->setOehdrouteseq($this->getOehdrouteseq());
        $copyObj->setOehdfrttaxcode1($this->getOehdfrttaxcode1());
        $copyObj->setOehdfrttaxamt1($this->getOehdfrttaxamt1());
        $copyObj->setOehdfrttaxcode2($this->getOehdfrttaxcode2());
        $copyObj->setOehdfrttaxamt2($this->getOehdfrttaxamt2());
        $copyObj->setOehdfrttaxcode3($this->getOehdfrttaxcode3());
        $copyObj->setOehdfrttaxamt3($this->getOehdfrttaxamt3());
        $copyObj->setOehdfrttaxcode4($this->getOehdfrttaxcode4());
        $copyObj->setOehdfrttaxamt4($this->getOehdfrttaxamt4());
        $copyObj->setOehdfrttaxcode5($this->getOehdfrttaxcode5());
        $copyObj->setOehdfrttaxamt5($this->getOehdfrttaxamt5());
        $copyObj->setOehdedi855sent($this->getOehdedi855sent());
        $copyObj->setOehdfrt3rdparty($this->getOehdfrt3rdparty());
        $copyObj->setOehdfob($this->getOehdfob());
        $copyObj->setOehdconfirmimagyn($this->getOehdconfirmimagyn());
        $copyObj->setOehdindustconform($this->getOehdindustconform());
        $copyObj->setOehdcstkconsign($this->getOehdcstkconsign());
        $copyObj->setOehdlmdelaycapsent($this->getOehdlmdelaycapsent());
        $copyObj->setOehdmfgid($this->getOehdmfgid());
        $copyObj->setOehdstoreid($this->getOehdstoreid());
        $copyObj->setOehdpickqueue($this->getOehdpickqueue());
        $copyObj->setOehdarrvdate($this->getOehdarrvdate());
        $copyObj->setOehdsurchgstat($this->getOehdsurchgstat());
        $copyObj->setOehdfrtgrup($this->getOehdfrtgrup());
        $copyObj->setOehdcommoride($this->getOehdcommoride());
        $copyObj->setOehdchrgsplt($this->getOehdchrgsplt());
        $copyObj->setOehdacccaprv($this->getOehdacccaprv());
        $copyObj->setOehdorigordrnbr($this->getOehdorigordrnbr());
        $copyObj->setOehdpostdate($this->getOehdpostdate());
        $copyObj->setOehddiscdate1($this->getOehddiscdate1());
        $copyObj->setOehddiscpct1($this->getOehddiscpct1());
        $copyObj->setOehdduedate1($this->getOehdduedate1());
        $copyObj->setOehddueamt1($this->getOehddueamt1());
        $copyObj->setOehdduepct1($this->getOehdduepct1());
        $copyObj->setOehddiscdate2($this->getOehddiscdate2());
        $copyObj->setOehddiscpct2($this->getOehddiscpct2());
        $copyObj->setOehdduedate2($this->getOehdduedate2());
        $copyObj->setOehddueamt2($this->getOehddueamt2());
        $copyObj->setOehdduepct2($this->getOehdduepct2());
        $copyObj->setOehddiscdate3($this->getOehddiscdate3());
        $copyObj->setOehddiscpct3($this->getOehddiscpct3());
        $copyObj->setOehdduedate3($this->getOehdduedate3());
        $copyObj->setOehddueamt3($this->getOehddueamt3());
        $copyObj->setOehdduepct3($this->getOehdduepct3());
        $copyObj->setOehddiscdate4($this->getOehddiscdate4());
        $copyObj->setOehddiscpct4($this->getOehddiscpct4());
        $copyObj->setOehdduedate4($this->getOehdduedate4());
        $copyObj->setOehddueamt4($this->getOehddueamt4());
        $copyObj->setOehdduepct4($this->getOehdduepct4());
        $copyObj->setOehddiscdate5($this->getOehddiscdate5());
        $copyObj->setOehddiscpct5($this->getOehddiscpct5());
        $copyObj->setOehdduedate5($this->getOehdduedate5());
        $copyObj->setOehddueamt5($this->getOehddueamt5());
        $copyObj->setOehdduepct5($this->getOehdduepct5());
        $copyObj->setOehddiscdate6($this->getOehddiscdate6());
        $copyObj->setOehddiscpct6($this->getOehddiscpct6());
        $copyObj->setOehdduedate6($this->getOehdduedate6());
        $copyObj->setOehddueamt6($this->getOehddueamt6());
        $copyObj->setOehdduepct6($this->getOehdduepct6());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSalesOrderDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesOrderDetail($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesOrderShipments() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesOrderShipment($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSalesOrderLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesOrderLotserial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSoAllocatedLotserials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSoAllocatedLotserial($relObj->copy($deepCopy));
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
     * @return \SalesOrder Clone of current object.
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
     * @return $this|\SalesOrder The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomer(ChildCustomer $v = null)
    {
        if ($v === null) {
            $this->setArcucustid(NULL);
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        $this->aCustomer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomer object, it will not be re-added.
        if ($v !== null) {
            $v->addSalesOrder($this);
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
                $this->aCustomer->addSalesOrders($this);
             */
        }

        return $this->aCustomer;
    }

    /**
     * Declares an association between this object and a ChildCustomerShipto object.
     *
     * @param  ChildCustomerShipto $v
     * @return $this|\SalesOrder The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomerShipto(ChildCustomerShipto $v = null)
    {
        if ($v === null) {
            $this->setArcucustid(NULL);
        } else {
            $this->setArcucustid($v->getArcucustid());
        }

        if ($v === null) {
            $this->setArstshipid(NULL);
        } else {
            $this->setArstshipid($v->getArstshipid());
        }

        $this->aCustomerShipto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildCustomerShipto object, it will not be re-added.
        if ($v !== null) {
            $v->addSalesOrder($this);
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
                $this->aCustomerShipto->addSalesOrders($this);
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
        if ('SalesOrderDetail' == $relationName) {
            $this->initSalesOrderDetails();
            return;
        }
        if ('SalesOrderShipment' == $relationName) {
            $this->initSalesOrderShipments();
            return;
        }
        if ('SalesOrderLotserial' == $relationName) {
            $this->initSalesOrderLotserials();
            return;
        }
        if ('SoAllocatedLotserial' == $relationName) {
            $this->initSoAllocatedLotserials();
            return;
        }
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
     * If this ChildSalesOrder is new, it will return
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
                    ->filterBySalesOrder($this)
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
     * @return $this|ChildSalesOrder The current object (for fluent API support)
     */
    public function setSalesOrderDetails(Collection $salesOrderDetails, ConnectionInterface $con = null)
    {
        /** @var ChildSalesOrderDetail[] $salesOrderDetailsToDelete */
        $salesOrderDetailsToDelete = $this->getSalesOrderDetails(new Criteria(), $con)->diff($salesOrderDetails);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->salesOrderDetailsScheduledForDeletion = clone $salesOrderDetailsToDelete;

        foreach ($salesOrderDetailsToDelete as $salesOrderDetailRemoved) {
            $salesOrderDetailRemoved->setSalesOrder(null);
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
                ->filterBySalesOrder($this)
                ->count($con);
        }

        return count($this->collSalesOrderDetails);
    }

    /**
     * Method called to associate a ChildSalesOrderDetail object to this object
     * through the ChildSalesOrderDetail foreign key attribute.
     *
     * @param  ChildSalesOrderDetail $l ChildSalesOrderDetail
     * @return $this|\SalesOrder The current object (for fluent API support)
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
        $salesOrderDetail->setSalesOrder($this);
    }

    /**
     * @param  ChildSalesOrderDetail $salesOrderDetail The ChildSalesOrderDetail object to remove.
     * @return $this|ChildSalesOrder The current object (for fluent API support)
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
            $salesOrderDetail->setSalesOrder(null);
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
     * If this ChildSalesOrder is new, it will return
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
                    ->filterBySalesOrder($this)
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
     * @return $this|ChildSalesOrder The current object (for fluent API support)
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
            $salesOrderShipmentRemoved->setSalesOrder(null);
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
                ->filterBySalesOrder($this)
                ->count($con);
        }

        return count($this->collSalesOrderShipments);
    }

    /**
     * Method called to associate a ChildSalesOrderShipment object to this object
     * through the ChildSalesOrderShipment foreign key attribute.
     *
     * @param  ChildSalesOrderShipment $l ChildSalesOrderShipment
     * @return $this|\SalesOrder The current object (for fluent API support)
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
        $salesOrderShipment->setSalesOrder($this);
    }

    /**
     * @param  ChildSalesOrderShipment $salesOrderShipment The ChildSalesOrderShipment object to remove.
     * @return $this|ChildSalesOrder The current object (for fluent API support)
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
            $salesOrderShipment->setSalesOrder(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesOrder is new, it will return
     * an empty collection; or if this SalesOrder has previously
     * been saved, it will retrieve related SalesOrderShipments from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesOrderShipment[] List of ChildSalesOrderShipment objects
     */
    public function getSalesOrderShipmentsJoinSalesHistory(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesOrderShipmentQuery::create(null, $criteria);
        $query->joinWith('SalesHistory', $joinBehavior);

        return $this->getSalesOrderShipments($query, $con);
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
     * If this ChildSalesOrder is new, it will return
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
                    ->filterBySalesOrder($this)
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
     * @return $this|ChildSalesOrder The current object (for fluent API support)
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
            $salesOrderLotserialRemoved->setSalesOrder(null);
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
                ->filterBySalesOrder($this)
                ->count($con);
        }

        return count($this->collSalesOrderLotserials);
    }

    /**
     * Method called to associate a ChildSalesOrderLotserial object to this object
     * through the ChildSalesOrderLotserial foreign key attribute.
     *
     * @param  ChildSalesOrderLotserial $l ChildSalesOrderLotserial
     * @return $this|\SalesOrder The current object (for fluent API support)
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
        $salesOrderLotserial->setSalesOrder($this);
    }

    /**
     * @param  ChildSalesOrderLotserial $salesOrderLotserial The ChildSalesOrderLotserial object to remove.
     * @return $this|ChildSalesOrder The current object (for fluent API support)
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
            $salesOrderLotserial->setSalesOrder(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesOrder is new, it will return
     * an empty collection; or if this SalesOrder has previously
     * been saved, it will retrieve related SalesOrderLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesOrder.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesOrder is new, it will return
     * an empty collection; or if this SalesOrder has previously
     * been saved, it will retrieve related SalesOrderLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSalesOrderLotserial[] List of ChildSalesOrderLotserial objects
     */
    public function getSalesOrderLotserialsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSalesOrderLotserialQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getSalesOrderLotserials($query, $con);
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
     * If this ChildSalesOrder is new, it will return
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
                    ->filterBySalesOrder($this)
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
     * @return $this|ChildSalesOrder The current object (for fluent API support)
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
            $soAllocatedLotserialRemoved->setSalesOrder(null);
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
                ->filterBySalesOrder($this)
                ->count($con);
        }

        return count($this->collSoAllocatedLotserials);
    }

    /**
     * Method called to associate a ChildSoAllocatedLotserial object to this object
     * through the ChildSoAllocatedLotserial foreign key attribute.
     *
     * @param  ChildSoAllocatedLotserial $l ChildSoAllocatedLotserial
     * @return $this|\SalesOrder The current object (for fluent API support)
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
        $soAllocatedLotserial->setSalesOrder($this);
    }

    /**
     * @param  ChildSoAllocatedLotserial $soAllocatedLotserial The ChildSoAllocatedLotserial object to remove.
     * @return $this|ChildSalesOrder The current object (for fluent API support)
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
            $soAllocatedLotserial->setSalesOrder(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesOrder is new, it will return
     * an empty collection; or if this SalesOrder has previously
     * been saved, it will retrieve related SoAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesOrder.
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
     * Otherwise if this SalesOrder is new, it will return
     * an empty collection; or if this SalesOrder has previously
     * been saved, it will retrieve related SoAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSoAllocatedLotserial[] List of ChildSoAllocatedLotserial objects
     */
    public function getSoAllocatedLotserialsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSoAllocatedLotserialQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getSoAllocatedLotserials($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesOrder is new, it will return
     * an empty collection; or if this SalesOrder has previously
     * been saved, it will retrieve related SoAllocatedLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesOrder.
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
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aCustomer) {
            $this->aCustomer->removeSalesOrder($this);
        }
        if (null !== $this->aCustomerShipto) {
            $this->aCustomerShipto->removeSalesOrder($this);
        }
        $this->oehdnbr = null;
        $this->oehdstat = null;
        $this->oehdhold = null;
        $this->arcucustid = null;
        $this->arstshipid = null;
        $this->oehdstname = null;
        $this->oehdstlastname = null;
        $this->oehdstfirstname = null;
        $this->oehdstadr1 = null;
        $this->oehdstadr2 = null;
        $this->oehdstadr3 = null;
        $this->oehdstctry = null;
        $this->oehdstcity = null;
        $this->oehdststat = null;
        $this->oehdstzipcode = null;
        $this->oehdcustpo = null;
        $this->oehdordrdate = null;
        $this->artmtermcd = null;
        $this->artbshipvia = null;
        $this->arininvnbr = null;
        $this->oehdinvdate = null;
        $this->oehdglpd = null;
        $this->arspsaleper1 = null;
        $this->oehdsp1pct = null;
        $this->arspsaleper2 = null;
        $this->oehdsp2pct = null;
        $this->arspsaleper3 = null;
        $this->oehdsp3pct = null;
        $this->oehdcntrnbr = null;
        $this->oehdwibatch = null;
        $this->oehddroprelhold = null;
        $this->oehdtaxsub = null;
        $this->oehdnontaxsub = null;
        $this->oehdtaxtot = null;
        $this->oehdfrttot = null;
        $this->oehdmisctot = null;
        $this->oehdordrtot = null;
        $this->oehdcosttot = null;
        $this->oehdspcommlock = null;
        $this->oehdtakendate = null;
        $this->oehdtakentime = null;
        $this->oehdpickdate = null;
        $this->oehdpicktime = null;
        $this->oehdpackdate = null;
        $this->oehdpacktime = null;
        $this->oehdverifydate = null;
        $this->oehdverifytime = null;
        $this->oehdcreditmemo = null;
        $this->oehdbookedyn = null;
        $this->intbwhseorig = null;
        $this->oehdbtstat = null;
        $this->oehdshipcomp = null;
        $this->oehdcwoflag = null;
        $this->oehddivision = null;
        $this->oehdtakencode = null;
        $this->oehdpickcode = null;
        $this->oehdpackcode = null;
        $this->oehdverifycode = null;
        $this->oehdtotdisc = null;
        $this->oehdedirefnbrqual = null;
        $this->oehdusercode1 = null;
        $this->oehdusercode2 = null;
        $this->oehdusercode3 = null;
        $this->oehdusercode4 = null;
        $this->oehdexchctry = null;
        $this->oehdexchrate = null;
        $this->oehdwghttot = null;
        $this->oehdwghtoride = null;
        $this->oehdccinfo = null;
        $this->oehdboxcount = null;
        $this->oehdrqstdate = null;
        $this->oehdcancdate = null;
        $this->oehdcrntuser = null;
        $this->oehdreleasenbr = null;
        $this->intbwhse = null;
        $this->oehdbordbuilddate = null;
        $this->oehddeptcode = null;
        $this->oehdfrtinentered = null;
        $this->oehddropshipentered = null;
        $this->oehderflag = null;
        $this->oehdfrtin = null;
        $this->oehddropship = null;
        $this->oehdminorder = null;
        $this->oehdcontractterms = null;
        $this->oehddropshipbilled = null;
        $this->oehdordtyp = null;
        $this->oehdtracknbr = null;
        $this->oehdsource = null;
        $this->oehdccaprv = null;
        $this->oehdpickfmattype = null;
        $this->oehdinvcfmattype = null;
        $this->oehdcashamt = null;
        $this->oehdcheckamt = null;
        $this->oehdchecknbr = null;
        $this->oehddepositamt = null;
        $this->oehddepositnbr = null;
        $this->oehdccamt = null;
        $this->oehdotaxsub = null;
        $this->oehdonontaxsub = null;
        $this->oehdotaxtot = null;
        $this->oehdoordrtot = null;
        $this->oehdpickprintdate = null;
        $this->oehdpickprinttime = null;
        $this->oehdcont = null;
        $this->oehdcontteleintl = null;
        $this->oehdconttelenbr = null;
        $this->oehdcontteleext = null;
        $this->oehdcontfaxintl = null;
        $this->oehdcontfaxnbr = null;
        $this->oehdshipacct = null;
        $this->oehdchgdue = null;
        $this->oehdaddlpricdisc = null;
        $this->oehdallship = null;
        $this->oehdqtyorderamt = null;
        $this->oehdcreditapplied = null;
        $this->oehdinvcprintdate = null;
        $this->oehdinvcprinttime = null;
        $this->oehddiscfrt = null;
        $this->oehdorideshipcomp = null;
        $this->oehdcontemail = null;
        $this->oehdmanualfrt = null;
        $this->oehdinternalfrt = null;
        $this->oehdfrtcost = null;
        $this->oehdroute = null;
        $this->oehdrouteseq = null;
        $this->oehdfrttaxcode1 = null;
        $this->oehdfrttaxamt1 = null;
        $this->oehdfrttaxcode2 = null;
        $this->oehdfrttaxamt2 = null;
        $this->oehdfrttaxcode3 = null;
        $this->oehdfrttaxamt3 = null;
        $this->oehdfrttaxcode4 = null;
        $this->oehdfrttaxamt4 = null;
        $this->oehdfrttaxcode5 = null;
        $this->oehdfrttaxamt5 = null;
        $this->oehdedi855sent = null;
        $this->oehdfrt3rdparty = null;
        $this->oehdfob = null;
        $this->oehdconfirmimagyn = null;
        $this->oehdindustconform = null;
        $this->oehdcstkconsign = null;
        $this->oehdlmdelaycapsent = null;
        $this->oehdmfgid = null;
        $this->oehdstoreid = null;
        $this->oehdpickqueue = null;
        $this->oehdarrvdate = null;
        $this->oehdsurchgstat = null;
        $this->oehdfrtgrup = null;
        $this->oehdcommoride = null;
        $this->oehdchrgsplt = null;
        $this->oehdacccaprv = null;
        $this->oehdorigordrnbr = null;
        $this->oehdpostdate = null;
        $this->oehddiscdate1 = null;
        $this->oehddiscpct1 = null;
        $this->oehdduedate1 = null;
        $this->oehddueamt1 = null;
        $this->oehdduepct1 = null;
        $this->oehddiscdate2 = null;
        $this->oehddiscpct2 = null;
        $this->oehdduedate2 = null;
        $this->oehddueamt2 = null;
        $this->oehdduepct2 = null;
        $this->oehddiscdate3 = null;
        $this->oehddiscpct3 = null;
        $this->oehdduedate3 = null;
        $this->oehddueamt3 = null;
        $this->oehdduepct3 = null;
        $this->oehddiscdate4 = null;
        $this->oehddiscpct4 = null;
        $this->oehdduedate4 = null;
        $this->oehddueamt4 = null;
        $this->oehdduepct4 = null;
        $this->oehddiscdate5 = null;
        $this->oehddiscpct5 = null;
        $this->oehdduedate5 = null;
        $this->oehddueamt5 = null;
        $this->oehdduepct5 = null;
        $this->oehddiscdate6 = null;
        $this->oehddiscpct6 = null;
        $this->oehdduedate6 = null;
        $this->oehddueamt6 = null;
        $this->oehdduepct6 = null;
        $this->dateupdtd = null;
        $this->timeupdtd = null;
        $this->dummy = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
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
            if ($this->collSalesOrderDetails) {
                foreach ($this->collSalesOrderDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesOrderShipments) {
                foreach ($this->collSalesOrderShipments as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSalesOrderLotserials) {
                foreach ($this->collSalesOrderLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSoAllocatedLotserials) {
                foreach ($this->collSoAllocatedLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSalesOrderDetails = null;
        $this->collSalesOrderShipments = null;
        $this->collSalesOrderLotserials = null;
        $this->collSoAllocatedLotserials = null;
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
        return (string) $this->exportTo(SalesOrderTableMap::DEFAULT_STRING_FORMAT);
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
