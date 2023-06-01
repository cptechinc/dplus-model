<?php

namespace Base;

use \ItemMasterItem as ChildItemMasterItem;
use \ItemMasterItemQuery as ChildItemMasterItemQuery;
use \SalesHistory as ChildSalesHistory;
use \SalesHistoryDetail as ChildSalesHistoryDetail;
use \SalesHistoryDetailQuery as ChildSalesHistoryDetailQuery;
use \SalesHistoryLotserial as ChildSalesHistoryLotserial;
use \SalesHistoryLotserialQuery as ChildSalesHistoryLotserialQuery;
use \SalesHistoryQuery as ChildSalesHistoryQuery;
use \Exception;
use \PDO;
use Map\SalesHistoryDetailTableMap;
use Map\SalesHistoryLotserialTableMap;
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
 * Base class that represents a row from the 'so_det_hist' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class SalesHistoryDetail implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\SalesHistoryDetailTableMap';


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
     * The value for the oedhline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oedhline;

    /**
     * The value for the oedhyear field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhyear;

    /**
     * The value for the inititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the oedhdesc field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhdesc;

    /**
     * The value for the oedhdesc2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhdesc2;

    /**
     * The value for the intbwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the oedhrqstdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhrqstdate;

    /**
     * The value for the oedhcancdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhcancdate;

    /**
     * The value for the oedhshipdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhshipdate;

    /**
     * The value for the oedhspecordr field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhspecordr;

    /**
     * The value for the artbmtaxcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbmtaxcode;

    /**
     * The value for the oedhqtyord field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhqtyord;

    /**
     * The value for the oedhqtyship field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhqtyship;

    /**
     * The value for the oedhqtyshiptot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhqtyshiptot;

    /**
     * The value for the oedhqtybord field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhqtybord;

    /**
     * The value for the oedhpric field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhpric;

    /**
     * The value for the oedhcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhcost;

    /**
     * The value for the oedhtaxpcttot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhtaxpcttot;

    /**
     * The value for the oedhprictot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhprictot;

    /**
     * The value for the oedhcosttot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhcosttot;

    /**
     * The value for the oedhspcommpct field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhspcommpct;

    /**
     * The value for the oedhbrkncaseqty field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oedhbrkncaseqty;

    /**
     * The value for the oedhbin field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhbin;

    /**
     * The value for the oedhpersonalcd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhpersonalcd;

    /**
     * The value for the oedhacdisc1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhacdisc1;

    /**
     * The value for the oedhacdisc2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhacdisc2;

    /**
     * The value for the oedhacdisc3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhacdisc3;

    /**
     * The value for the oedhacdisc4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhacdisc4;

    /**
     * The value for the oedhlmwipnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhlmwipnbr;

    /**
     * The value for the oedhcorepric field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $oedhcorepric;

    /**
     * The value for the oedhasstcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhasstcode;

    /**
     * The value for the oedhasstqty field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhasstqty;

    /**
     * The value for the oedhlistpric field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhlistpric;

    /**
     * The value for the oedhstancost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhstancost;

    /**
     * The value for the oedhvenditemjob field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhvenditemjob;

    /**
     * The value for the oedhnsvendid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhnsvendid;

    /**
     * The value for the oedhnsitemgrup field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhnsitemgrup;

    /**
     * The value for the oedhusecode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhusecode;

    /**
     * The value for the oedhnsshipfromid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhnsshipfromid;

    /**
     * The value for the oedhasstovrd field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhasstovrd;

    /**
     * The value for the oedhpricovrd field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhpricovrd;

    /**
     * The value for the oedhpickflag field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhpickflag;

    /**
     * The value for the oedhmstrtaxcode1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhmstrtaxcode1;

    /**
     * The value for the oedhmstrtaxpct1 field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $oedhmstrtaxpct1;

    /**
     * The value for the oedhmstrtaxcode2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhmstrtaxcode2;

    /**
     * The value for the oedhmstrtaxpct2 field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $oedhmstrtaxpct2;

    /**
     * The value for the oedhmstrtaxcode3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhmstrtaxcode3;

    /**
     * The value for the oedhmstrtaxpct3 field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $oedhmstrtaxpct3;

    /**
     * The value for the oedhmstrtaxcode4 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhmstrtaxcode4;

    /**
     * The value for the oedhmstrtaxpct4 field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $oedhmstrtaxpct4;

    /**
     * The value for the oedhmstrtaxcode5 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhmstrtaxcode5;

    /**
     * The value for the oedhmstrtaxpct5 field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $oedhmstrtaxpct5;

    /**
     * The value for the oedhmstrtaxcode6 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhmstrtaxcode6;

    /**
     * The value for the oedhmstrtaxpct6 field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $oedhmstrtaxpct6;

    /**
     * The value for the oedhmstrtaxcode7 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhmstrtaxcode7;

    /**
     * The value for the oedhmstrtaxpct7 field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $oedhmstrtaxpct7;

    /**
     * The value for the oedhmstrtaxcode8 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhmstrtaxcode8;

    /**
     * The value for the oedhmstrtaxpct8 field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $oedhmstrtaxpct8;

    /**
     * The value for the oedhmstrtaxcode9 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhmstrtaxcode9;

    /**
     * The value for the oedhmstrtaxpct9 field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $oedhmstrtaxpct9;

    /**
     * The value for the oedhbinarea field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhbinarea;

    /**
     * The value for the oedhsplitline field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhsplitline;

    /**
     * The value for the oedhlostreas field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhlostreas;

    /**
     * The value for the oedhorigline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oedhorigline;

    /**
     * The value for the oedhcustcrssref field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhcustcrssref;

    /**
     * The value for the oedhuom field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhuom;

    /**
     * The value for the oedhshipflag field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhshipflag;

    /**
     * The value for the oedhkitflag field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhkitflag;

    /**
     * The value for the oedhkititemnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhkititemnbr;

    /**
     * The value for the oedhbfcost field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhbfcost;

    /**
     * The value for the oedhbfmsgcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhbfmsgcode;

    /**
     * The value for the oedhbfcosttot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhbfcosttot;

    /**
     * The value for the oedhlmbulkpric field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oedhlmbulkpric;

    /**
     * The value for the oedhlmmtrxpkgpric field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oedhlmmtrxpkgpric;

    /**
     * The value for the oedhlmmtrxbulkpric field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oedhlmmtrxbulkpric;

    /**
     * The value for the oedhlmcontractpric field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oedhlmcontractpric;

    /**
     * The value for the oedhwghttot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhwghttot;

    /**
     * The value for the oedhordras field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhordras;

    /**
     * The value for the oedhpodetlinenbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oedhpodetlinenbr;

    /**
     * The value for the oedhqtytoship field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhqtytoship;

    /**
     * The value for the oedhponbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhponbr;

    /**
     * The value for the oedhporef field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhporef;

    /**
     * The value for the oedhfrtin field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oedhfrtin;

    /**
     * The value for the oedhfrtinentered field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhfrtinentered;

    /**
     * The value for the oedhprodcmplt field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhprodcmplt;

    /**
     * The value for the oedherflag field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedherflag;

    /**
     * The value for the oedhorigitem field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhorigitem;

    /**
     * The value for the oedhsubflag field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhsubflag;

    /**
     * The value for the oedhediincomingseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oedhediincomingseq;

    /**
     * The value for the oedhspordpoline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oedhspordpoline;

    /**
     * The value for the oedhcatlgid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhcatlgid;

    /**
     * The value for the oedhdesigncd field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhdesigncd;

    /**
     * The value for the oedhdiscpct field.
     *
     * Note: this column has a database default value of: '0.000'
     * @var        string
     */
    protected $oedhdiscpct;

    /**
     * The value for the oedhtaxamt field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oedhtaxamt;

    /**
     * The value for the oedhxusage field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhxusage;

    /**
     * The value for the oedhrqtslock field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhrqtslock;

    /**
     * The value for the oedhfreshfrozen field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhfreshfrozen;

    /**
     * The value for the oedhcoreflag field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhcoreflag;

    /**
     * The value for the oedhnssalesacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhnssalesacct;

    /**
     * The value for the oedhcertreqd field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhcertreqd;

    /**
     * The value for the oedhaddonsales field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhaddonsales;

    /**
     * The value for the oedhbordflag field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhbordflag;

    /**
     * The value for the oedhtempgrove field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhtempgrove;

    /**
     * The value for the oedhgrovedisc field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhgrovedisc;

    /**
     * The value for the oedhoffinvc field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhoffinvc;

    /**
     * The value for the inititemgrup field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $inititemgrup;

    /**
     * The value for the apvevendid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $apvevendid;

    /**
     * The value for the oedhacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhacct;

    /**
     * The value for the oedhloadtot field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oedhloadtot;

    /**
     * The value for the oedhpickedqty field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oedhpickedqty;

    /**
     * The value for the oedhwiorigqty field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oedhwiorigqty;

    /**
     * The value for the oedhmargintot field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oedhmargintot;

    /**
     * The value for the oedhcorecost field.
     *
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $oedhcorecost;

    /**
     * The value for the oedhitemref field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhitemref;

    /**
     * The value for the oedhsac02returncode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhsac02returncode;

    /**
     * The value for the oedhwgtaxcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhwgtaxcode;

    /**
     * The value for the oedhwgprice field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $oedhwgprice;

    /**
     * The value for the oedhwgtot field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhwgtot;

    /**
     * The value for the oedhcntrqty field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oedhcntrqty;

    /**
     * The value for the oedhconfirmcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhconfirmcode;

    /**
     * The value for the oedhpicked field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhpicked;

    /**
     * The value for the oedhorigrqstdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhorigrqstdate;

    /**
     * The value for the oedhfablock field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhfablock;

    /**
     * The value for the oedhlabelprinted field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhlabelprinted;

    /**
     * The value for the oedhquoteid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhquoteid;

    /**
     * The value for the oedhinvprinted field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhinvprinted;

    /**
     * The value for the oedhstockcheck field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhstockcheck;

    /**
     * The value for the oedhshouldwesplit field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhshouldwesplit;

    /**
     * The value for the oedhcofcreqd field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $oedhcofcreqd;

    /**
     * The value for the oedhackcode field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhackcode;

    /**
     * The value for the oedhwibordnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhwibordnbr;

    /**
     * The value for the oedhcerthistordr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhcerthistordr;

    /**
     * The value for the oedhcerthistline field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhcerthistline;

    /**
     * The value for the oedhordrdasitemid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhordrdasitemid;

    /**
     * The value for the oedhwibatch1nbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oedhwibatch1nbr;

    /**
     * The value for the oedhwibatch1qty field.
     *
     * Note: this column has a database default value of: '0.00000'
     * @var        string
     */
    protected $oedhwibatch1qty;

    /**
     * The value for the oedhwibatch1stat field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhwibatch1stat;

    /**
     * The value for the oedhrganbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oedhrganbr;

    /**
     * The value for the oedhorigpric field.
     *
     * Note: this column has a database default value of: '0.0000000'
     * @var        string
     */
    protected $oedhorigpric;

    /**
     * The value for the oedhreflinenbr field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oedhreflinenbr;

    /**
     * The value for the oedhbinlocn field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhbinlocn;

    /**
     * The value for the oedhacsuplywhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhacsuplywhse;

    /**
     * The value for the oedhacpricdate field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $oedhacpricdate;

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
     * @var        ChildSalesHistory
     */
    protected $aSalesHistory;

    /**
     * @var        ChildItemMasterItem
     */
    protected $aItemMasterItem;

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
        $this->oedhline = 0;
        $this->oedhyear = '';
        $this->inititemnbr = '';
        $this->oedhdesc = '';
        $this->oedhdesc2 = '';
        $this->intbwhse = '';
        $this->oedhrqstdate = '';
        $this->oedhcancdate = '';
        $this->oedhshipdate = '';
        $this->oedhspecordr = 'N';
        $this->artbmtaxcode = '';
        $this->oedhqtyord = '0.0000000';
        $this->oedhqtyship = '0.0000000';
        $this->oedhqtyshiptot = '0.0000000';
        $this->oedhqtybord = '0.0000000';
        $this->oedhpric = '0.0000000';
        $this->oedhcost = '0.0000000';
        $this->oedhtaxpcttot = '0.0000000';
        $this->oedhprictot = '0.0000000';
        $this->oedhcosttot = '0.0000000';
        $this->oedhspcommpct = '0.0000000';
        $this->oedhbrkncaseqty = 0;
        $this->oedhbin = '';
        $this->oedhpersonalcd = '';
        $this->oedhacdisc1 = '';
        $this->oedhacdisc2 = '';
        $this->oedhacdisc3 = '';
        $this->oedhacdisc4 = '';
        $this->oedhlmwipnbr = '';
        $this->oedhcorepric = '0.000';
        $this->oedhasstcode = '';
        $this->oedhasstqty = '0.0000000';
        $this->oedhlistpric = '0.0000000';
        $this->oedhstancost = '0.0000000';
        $this->oedhvenditemjob = '';
        $this->oedhnsvendid = '';
        $this->oedhnsitemgrup = '';
        $this->oedhusecode = '';
        $this->oedhnsshipfromid = '';
        $this->oedhasstovrd = 'N';
        $this->oedhpricovrd = 'N';
        $this->oedhpickflag = 'N';
        $this->oedhmstrtaxcode1 = '';
        $this->oedhmstrtaxpct1 = '0.000';
        $this->oedhmstrtaxcode2 = '';
        $this->oedhmstrtaxpct2 = '0.000';
        $this->oedhmstrtaxcode3 = '';
        $this->oedhmstrtaxpct3 = '0.000';
        $this->oedhmstrtaxcode4 = '';
        $this->oedhmstrtaxpct4 = '0.000';
        $this->oedhmstrtaxcode5 = '';
        $this->oedhmstrtaxpct5 = '0.000';
        $this->oedhmstrtaxcode6 = '';
        $this->oedhmstrtaxpct6 = '0.000';
        $this->oedhmstrtaxcode7 = '';
        $this->oedhmstrtaxpct7 = '0.000';
        $this->oedhmstrtaxcode8 = '';
        $this->oedhmstrtaxpct8 = '0.000';
        $this->oedhmstrtaxcode9 = '';
        $this->oedhmstrtaxpct9 = '0.000';
        $this->oedhbinarea = '';
        $this->oedhsplitline = '';
        $this->oedhlostreas = '';
        $this->oedhorigline = 0;
        $this->oedhcustcrssref = '';
        $this->oedhuom = '';
        $this->oedhshipflag = 'N';
        $this->oedhkitflag = 'N';
        $this->oedhkititemnbr = '';
        $this->oedhbfcost = '0.0000000';
        $this->oedhbfmsgcode = '';
        $this->oedhbfcosttot = '0.0000000';
        $this->oedhlmbulkpric = '0.00';
        $this->oedhlmmtrxpkgpric = '0.00';
        $this->oedhlmmtrxbulkpric = '0.00';
        $this->oedhlmcontractpric = '0.00';
        $this->oedhwghttot = '0.0000000';
        $this->oedhordras = '';
        $this->oedhpodetlinenbr = 0;
        $this->oedhqtytoship = '0.0000000';
        $this->oedhponbr = '';
        $this->oedhporef = '';
        $this->oedhfrtin = '0.00';
        $this->oedhfrtinentered = 'N';
        $this->oedhprodcmplt = '';
        $this->oedherflag = '';
        $this->oedhorigitem = '';
        $this->oedhsubflag = '';
        $this->oedhediincomingseq = 0;
        $this->oedhspordpoline = 0;
        $this->oedhcatlgid = '';
        $this->oedhdesigncd = '';
        $this->oedhdiscpct = '0.000';
        $this->oedhtaxamt = '0.00';
        $this->oedhxusage = 'N';
        $this->oedhrqtslock = 'N';
        $this->oedhfreshfrozen = '';
        $this->oedhcoreflag = 'N';
        $this->oedhnssalesacct = '';
        $this->oedhcertreqd = 'N';
        $this->oedhaddonsales = 'N';
        $this->oedhbordflag = 'N';
        $this->oedhtempgrove = '';
        $this->oedhgrovedisc = '';
        $this->oedhoffinvc = '';
        $this->inititemgrup = '';
        $this->apvevendid = '';
        $this->oedhacct = '';
        $this->oedhloadtot = '0.00';
        $this->oedhpickedqty = '0.00';
        $this->oedhwiorigqty = '0.00';
        $this->oedhmargintot = '0.00';
        $this->oedhcorecost = '0.0000';
        $this->oedhitemref = '';
        $this->oedhsac02returncode = '';
        $this->oedhwgtaxcode = '';
        $this->oedhwgprice = '0.00';
        $this->oedhwgtot = '0.0000000';
        $this->oedhcntrqty = 0;
        $this->oedhconfirmcode = '';
        $this->oedhpicked = '';
        $this->oedhorigrqstdate = '';
        $this->oedhfablock = '';
        $this->oedhlabelprinted = '';
        $this->oedhquoteid = '';
        $this->oedhinvprinted = '';
        $this->oedhstockcheck = '';
        $this->oedhshouldwesplit = '';
        $this->oedhcofcreqd = 'N';
        $this->oedhackcode = '';
        $this->oedhwibordnbr = '';
        $this->oedhcerthistordr = '';
        $this->oedhcerthistline = '';
        $this->oedhordrdasitemid = '';
        $this->oedhwibatch1nbr = 0;
        $this->oedhwibatch1qty = '0.00000';
        $this->oedhwibatch1stat = '';
        $this->oedhrganbr = 0;
        $this->oedhorigpric = '0.0000000';
        $this->oedhreflinenbr = 0;
        $this->oedhbinlocn = '';
        $this->oedhacsuplywhse = '';
        $this->oedhacpricdate = '';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\SalesHistoryDetail object.
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
     * Compares this with another <code>SalesHistoryDetail</code> instance.  If
     * <code>obj</code> is an instance of <code>SalesHistoryDetail</code>, delegates to
     * <code>equals(SalesHistoryDetail)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|SalesHistoryDetail The current object, for fluid interface
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
     * Get the [oedhline] column value.
     *
     * @return int
     */
    public function getOedhline()
    {
        return $this->oedhline;
    }

    /**
     * Get the [oedhyear] column value.
     *
     * @return string
     */
    public function getOedhyear()
    {
        return $this->oedhyear;
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
     * Get the [oedhdesc] column value.
     *
     * @return string
     */
    public function getOedhdesc()
    {
        return $this->oedhdesc;
    }

    /**
     * Get the [oedhdesc2] column value.
     *
     * @return string
     */
    public function getOedhdesc2()
    {
        return $this->oedhdesc2;
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
     * Get the [oedhrqstdate] column value.
     *
     * @return string
     */
    public function getOedhrqstdate()
    {
        return $this->oedhrqstdate;
    }

    /**
     * Get the [oedhcancdate] column value.
     *
     * @return string
     */
    public function getOedhcancdate()
    {
        return $this->oedhcancdate;
    }

    /**
     * Get the [oedhshipdate] column value.
     *
     * @return string
     */
    public function getOedhshipdate()
    {
        return $this->oedhshipdate;
    }

    /**
     * Get the [oedhspecordr] column value.
     *
     * @return string
     */
    public function getOedhspecordr()
    {
        return $this->oedhspecordr;
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
     * Get the [oedhqtyord] column value.
     *
     * @return string
     */
    public function getOedhqtyord()
    {
        return $this->oedhqtyord;
    }

    /**
     * Get the [oedhqtyship] column value.
     *
     * @return string
     */
    public function getOedhqtyship()
    {
        return $this->oedhqtyship;
    }

    /**
     * Get the [oedhqtyshiptot] column value.
     *
     * @return string
     */
    public function getOedhqtyshiptot()
    {
        return $this->oedhqtyshiptot;
    }

    /**
     * Get the [oedhqtybord] column value.
     *
     * @return string
     */
    public function getOedhqtybord()
    {
        return $this->oedhqtybord;
    }

    /**
     * Get the [oedhpric] column value.
     *
     * @return string
     */
    public function getOedhpric()
    {
        return $this->oedhpric;
    }

    /**
     * Get the [oedhcost] column value.
     *
     * @return string
     */
    public function getOedhcost()
    {
        return $this->oedhcost;
    }

    /**
     * Get the [oedhtaxpcttot] column value.
     *
     * @return string
     */
    public function getOedhtaxpcttot()
    {
        return $this->oedhtaxpcttot;
    }

    /**
     * Get the [oedhprictot] column value.
     *
     * @return string
     */
    public function getOedhprictot()
    {
        return $this->oedhprictot;
    }

    /**
     * Get the [oedhcosttot] column value.
     *
     * @return string
     */
    public function getOedhcosttot()
    {
        return $this->oedhcosttot;
    }

    /**
     * Get the [oedhspcommpct] column value.
     *
     * @return string
     */
    public function getOedhspcommpct()
    {
        return $this->oedhspcommpct;
    }

    /**
     * Get the [oedhbrkncaseqty] column value.
     *
     * @return int
     */
    public function getOedhbrkncaseqty()
    {
        return $this->oedhbrkncaseqty;
    }

    /**
     * Get the [oedhbin] column value.
     *
     * @return string
     */
    public function getOedhbin()
    {
        return $this->oedhbin;
    }

    /**
     * Get the [oedhpersonalcd] column value.
     *
     * @return string
     */
    public function getOedhpersonalcd()
    {
        return $this->oedhpersonalcd;
    }

    /**
     * Get the [oedhacdisc1] column value.
     *
     * @return string
     */
    public function getOedhacdisc1()
    {
        return $this->oedhacdisc1;
    }

    /**
     * Get the [oedhacdisc2] column value.
     *
     * @return string
     */
    public function getOedhacdisc2()
    {
        return $this->oedhacdisc2;
    }

    /**
     * Get the [oedhacdisc3] column value.
     *
     * @return string
     */
    public function getOedhacdisc3()
    {
        return $this->oedhacdisc3;
    }

    /**
     * Get the [oedhacdisc4] column value.
     *
     * @return string
     */
    public function getOedhacdisc4()
    {
        return $this->oedhacdisc4;
    }

    /**
     * Get the [oedhlmwipnbr] column value.
     *
     * @return string
     */
    public function getOedhlmwipnbr()
    {
        return $this->oedhlmwipnbr;
    }

    /**
     * Get the [oedhcorepric] column value.
     *
     * @return string
     */
    public function getOedhcorepric()
    {
        return $this->oedhcorepric;
    }

    /**
     * Get the [oedhasstcode] column value.
     *
     * @return string
     */
    public function getOedhasstcode()
    {
        return $this->oedhasstcode;
    }

    /**
     * Get the [oedhasstqty] column value.
     *
     * @return string
     */
    public function getOedhasstqty()
    {
        return $this->oedhasstqty;
    }

    /**
     * Get the [oedhlistpric] column value.
     *
     * @return string
     */
    public function getOedhlistpric()
    {
        return $this->oedhlistpric;
    }

    /**
     * Get the [oedhstancost] column value.
     *
     * @return string
     */
    public function getOedhstancost()
    {
        return $this->oedhstancost;
    }

    /**
     * Get the [oedhvenditemjob] column value.
     *
     * @return string
     */
    public function getOedhvenditemjob()
    {
        return $this->oedhvenditemjob;
    }

    /**
     * Get the [oedhnsvendid] column value.
     *
     * @return string
     */
    public function getOedhnsvendid()
    {
        return $this->oedhnsvendid;
    }

    /**
     * Get the [oedhnsitemgrup] column value.
     *
     * @return string
     */
    public function getOedhnsitemgrup()
    {
        return $this->oedhnsitemgrup;
    }

    /**
     * Get the [oedhusecode] column value.
     *
     * @return string
     */
    public function getOedhusecode()
    {
        return $this->oedhusecode;
    }

    /**
     * Get the [oedhnsshipfromid] column value.
     *
     * @return string
     */
    public function getOedhnsshipfromid()
    {
        return $this->oedhnsshipfromid;
    }

    /**
     * Get the [oedhasstovrd] column value.
     *
     * @return string
     */
    public function getOedhasstovrd()
    {
        return $this->oedhasstovrd;
    }

    /**
     * Get the [oedhpricovrd] column value.
     *
     * @return string
     */
    public function getOedhpricovrd()
    {
        return $this->oedhpricovrd;
    }

    /**
     * Get the [oedhpickflag] column value.
     *
     * @return string
     */
    public function getOedhpickflag()
    {
        return $this->oedhpickflag;
    }

    /**
     * Get the [oedhmstrtaxcode1] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxcode1()
    {
        return $this->oedhmstrtaxcode1;
    }

    /**
     * Get the [oedhmstrtaxpct1] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxpct1()
    {
        return $this->oedhmstrtaxpct1;
    }

    /**
     * Get the [oedhmstrtaxcode2] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxcode2()
    {
        return $this->oedhmstrtaxcode2;
    }

    /**
     * Get the [oedhmstrtaxpct2] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxpct2()
    {
        return $this->oedhmstrtaxpct2;
    }

    /**
     * Get the [oedhmstrtaxcode3] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxcode3()
    {
        return $this->oedhmstrtaxcode3;
    }

    /**
     * Get the [oedhmstrtaxpct3] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxpct3()
    {
        return $this->oedhmstrtaxpct3;
    }

    /**
     * Get the [oedhmstrtaxcode4] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxcode4()
    {
        return $this->oedhmstrtaxcode4;
    }

    /**
     * Get the [oedhmstrtaxpct4] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxpct4()
    {
        return $this->oedhmstrtaxpct4;
    }

    /**
     * Get the [oedhmstrtaxcode5] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxcode5()
    {
        return $this->oedhmstrtaxcode5;
    }

    /**
     * Get the [oedhmstrtaxpct5] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxpct5()
    {
        return $this->oedhmstrtaxpct5;
    }

    /**
     * Get the [oedhmstrtaxcode6] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxcode6()
    {
        return $this->oedhmstrtaxcode6;
    }

    /**
     * Get the [oedhmstrtaxpct6] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxpct6()
    {
        return $this->oedhmstrtaxpct6;
    }

    /**
     * Get the [oedhmstrtaxcode7] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxcode7()
    {
        return $this->oedhmstrtaxcode7;
    }

    /**
     * Get the [oedhmstrtaxpct7] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxpct7()
    {
        return $this->oedhmstrtaxpct7;
    }

    /**
     * Get the [oedhmstrtaxcode8] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxcode8()
    {
        return $this->oedhmstrtaxcode8;
    }

    /**
     * Get the [oedhmstrtaxpct8] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxpct8()
    {
        return $this->oedhmstrtaxpct8;
    }

    /**
     * Get the [oedhmstrtaxcode9] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxcode9()
    {
        return $this->oedhmstrtaxcode9;
    }

    /**
     * Get the [oedhmstrtaxpct9] column value.
     *
     * @return string
     */
    public function getOedhmstrtaxpct9()
    {
        return $this->oedhmstrtaxpct9;
    }

    /**
     * Get the [oedhbinarea] column value.
     *
     * @return string
     */
    public function getOedhbinarea()
    {
        return $this->oedhbinarea;
    }

    /**
     * Get the [oedhsplitline] column value.
     *
     * @return string
     */
    public function getOedhsplitline()
    {
        return $this->oedhsplitline;
    }

    /**
     * Get the [oedhlostreas] column value.
     *
     * @return string
     */
    public function getOedhlostreas()
    {
        return $this->oedhlostreas;
    }

    /**
     * Get the [oedhorigline] column value.
     *
     * @return int
     */
    public function getOedhorigline()
    {
        return $this->oedhorigline;
    }

    /**
     * Get the [oedhcustcrssref] column value.
     *
     * @return string
     */
    public function getOedhcustcrssref()
    {
        return $this->oedhcustcrssref;
    }

    /**
     * Get the [oedhuom] column value.
     *
     * @return string
     */
    public function getOedhuom()
    {
        return $this->oedhuom;
    }

    /**
     * Get the [oedhshipflag] column value.
     *
     * @return string
     */
    public function getOedhshipflag()
    {
        return $this->oedhshipflag;
    }

    /**
     * Get the [oedhkitflag] column value.
     *
     * @return string
     */
    public function getOedhkitflag()
    {
        return $this->oedhkitflag;
    }

    /**
     * Get the [oedhkititemnbr] column value.
     *
     * @return string
     */
    public function getOedhkititemnbr()
    {
        return $this->oedhkititemnbr;
    }

    /**
     * Get the [oedhbfcost] column value.
     *
     * @return string
     */
    public function getOedhbfcost()
    {
        return $this->oedhbfcost;
    }

    /**
     * Get the [oedhbfmsgcode] column value.
     *
     * @return string
     */
    public function getOedhbfmsgcode()
    {
        return $this->oedhbfmsgcode;
    }

    /**
     * Get the [oedhbfcosttot] column value.
     *
     * @return string
     */
    public function getOedhbfcosttot()
    {
        return $this->oedhbfcosttot;
    }

    /**
     * Get the [oedhlmbulkpric] column value.
     *
     * @return string
     */
    public function getOedhlmbulkpric()
    {
        return $this->oedhlmbulkpric;
    }

    /**
     * Get the [oedhlmmtrxpkgpric] column value.
     *
     * @return string
     */
    public function getOedhlmmtrxpkgpric()
    {
        return $this->oedhlmmtrxpkgpric;
    }

    /**
     * Get the [oedhlmmtrxbulkpric] column value.
     *
     * @return string
     */
    public function getOedhlmmtrxbulkpric()
    {
        return $this->oedhlmmtrxbulkpric;
    }

    /**
     * Get the [oedhlmcontractpric] column value.
     *
     * @return string
     */
    public function getOedhlmcontractpric()
    {
        return $this->oedhlmcontractpric;
    }

    /**
     * Get the [oedhwghttot] column value.
     *
     * @return string
     */
    public function getOedhwghttot()
    {
        return $this->oedhwghttot;
    }

    /**
     * Get the [oedhordras] column value.
     *
     * @return string
     */
    public function getOedhordras()
    {
        return $this->oedhordras;
    }

    /**
     * Get the [oedhpodetlinenbr] column value.
     *
     * @return int
     */
    public function getOedhpodetlinenbr()
    {
        return $this->oedhpodetlinenbr;
    }

    /**
     * Get the [oedhqtytoship] column value.
     *
     * @return string
     */
    public function getOedhqtytoship()
    {
        return $this->oedhqtytoship;
    }

    /**
     * Get the [oedhponbr] column value.
     *
     * @return string
     */
    public function getOedhponbr()
    {
        return $this->oedhponbr;
    }

    /**
     * Get the [oedhporef] column value.
     *
     * @return string
     */
    public function getOedhporef()
    {
        return $this->oedhporef;
    }

    /**
     * Get the [oedhfrtin] column value.
     *
     * @return string
     */
    public function getOedhfrtin()
    {
        return $this->oedhfrtin;
    }

    /**
     * Get the [oedhfrtinentered] column value.
     *
     * @return string
     */
    public function getOedhfrtinentered()
    {
        return $this->oedhfrtinentered;
    }

    /**
     * Get the [oedhprodcmplt] column value.
     *
     * @return string
     */
    public function getOedhprodcmplt()
    {
        return $this->oedhprodcmplt;
    }

    /**
     * Get the [oedherflag] column value.
     *
     * @return string
     */
    public function getOedherflag()
    {
        return $this->oedherflag;
    }

    /**
     * Get the [oedhorigitem] column value.
     *
     * @return string
     */
    public function getOedhorigitem()
    {
        return $this->oedhorigitem;
    }

    /**
     * Get the [oedhsubflag] column value.
     *
     * @return string
     */
    public function getOedhsubflag()
    {
        return $this->oedhsubflag;
    }

    /**
     * Get the [oedhediincomingseq] column value.
     *
     * @return int
     */
    public function getOedhediincomingseq()
    {
        return $this->oedhediincomingseq;
    }

    /**
     * Get the [oedhspordpoline] column value.
     *
     * @return int
     */
    public function getOedhspordpoline()
    {
        return $this->oedhspordpoline;
    }

    /**
     * Get the [oedhcatlgid] column value.
     *
     * @return string
     */
    public function getOedhcatlgid()
    {
        return $this->oedhcatlgid;
    }

    /**
     * Get the [oedhdesigncd] column value.
     *
     * @return string
     */
    public function getOedhdesigncd()
    {
        return $this->oedhdesigncd;
    }

    /**
     * Get the [oedhdiscpct] column value.
     *
     * @return string
     */
    public function getOedhdiscpct()
    {
        return $this->oedhdiscpct;
    }

    /**
     * Get the [oedhtaxamt] column value.
     *
     * @return string
     */
    public function getOedhtaxamt()
    {
        return $this->oedhtaxamt;
    }

    /**
     * Get the [oedhxusage] column value.
     *
     * @return string
     */
    public function getOedhxusage()
    {
        return $this->oedhxusage;
    }

    /**
     * Get the [oedhrqtslock] column value.
     *
     * @return string
     */
    public function getOedhrqtslock()
    {
        return $this->oedhrqtslock;
    }

    /**
     * Get the [oedhfreshfrozen] column value.
     *
     * @return string
     */
    public function getOedhfreshfrozen()
    {
        return $this->oedhfreshfrozen;
    }

    /**
     * Get the [oedhcoreflag] column value.
     *
     * @return string
     */
    public function getOedhcoreflag()
    {
        return $this->oedhcoreflag;
    }

    /**
     * Get the [oedhnssalesacct] column value.
     *
     * @return string
     */
    public function getOedhnssalesacct()
    {
        return $this->oedhnssalesacct;
    }

    /**
     * Get the [oedhcertreqd] column value.
     *
     * @return string
     */
    public function getOedhcertreqd()
    {
        return $this->oedhcertreqd;
    }

    /**
     * Get the [oedhaddonsales] column value.
     *
     * @return string
     */
    public function getOedhaddonsales()
    {
        return $this->oedhaddonsales;
    }

    /**
     * Get the [oedhbordflag] column value.
     *
     * @return string
     */
    public function getOedhbordflag()
    {
        return $this->oedhbordflag;
    }

    /**
     * Get the [oedhtempgrove] column value.
     *
     * @return string
     */
    public function getOedhtempgrove()
    {
        return $this->oedhtempgrove;
    }

    /**
     * Get the [oedhgrovedisc] column value.
     *
     * @return string
     */
    public function getOedhgrovedisc()
    {
        return $this->oedhgrovedisc;
    }

    /**
     * Get the [oedhoffinvc] column value.
     *
     * @return string
     */
    public function getOedhoffinvc()
    {
        return $this->oedhoffinvc;
    }

    /**
     * Get the [inititemgrup] column value.
     *
     * @return string
     */
    public function getInititemgrup()
    {
        return $this->inititemgrup;
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
     * Get the [oedhacct] column value.
     *
     * @return string
     */
    public function getOedhacct()
    {
        return $this->oedhacct;
    }

    /**
     * Get the [oedhloadtot] column value.
     *
     * @return string
     */
    public function getOedhloadtot()
    {
        return $this->oedhloadtot;
    }

    /**
     * Get the [oedhpickedqty] column value.
     *
     * @return string
     */
    public function getOedhpickedqty()
    {
        return $this->oedhpickedqty;
    }

    /**
     * Get the [oedhwiorigqty] column value.
     *
     * @return string
     */
    public function getOedhwiorigqty()
    {
        return $this->oedhwiorigqty;
    }

    /**
     * Get the [oedhmargintot] column value.
     *
     * @return string
     */
    public function getOedhmargintot()
    {
        return $this->oedhmargintot;
    }

    /**
     * Get the [oedhcorecost] column value.
     *
     * @return string
     */
    public function getOedhcorecost()
    {
        return $this->oedhcorecost;
    }

    /**
     * Get the [oedhitemref] column value.
     *
     * @return string
     */
    public function getOedhitemref()
    {
        return $this->oedhitemref;
    }

    /**
     * Get the [oedhsac02returncode] column value.
     *
     * @return string
     */
    public function getOedhsac02returncode()
    {
        return $this->oedhsac02returncode;
    }

    /**
     * Get the [oedhwgtaxcode] column value.
     *
     * @return string
     */
    public function getOedhwgtaxcode()
    {
        return $this->oedhwgtaxcode;
    }

    /**
     * Get the [oedhwgprice] column value.
     *
     * @return string
     */
    public function getOedhwgprice()
    {
        return $this->oedhwgprice;
    }

    /**
     * Get the [oedhwgtot] column value.
     *
     * @return string
     */
    public function getOedhwgtot()
    {
        return $this->oedhwgtot;
    }

    /**
     * Get the [oedhcntrqty] column value.
     *
     * @return int
     */
    public function getOedhcntrqty()
    {
        return $this->oedhcntrqty;
    }

    /**
     * Get the [oedhconfirmcode] column value.
     *
     * @return string
     */
    public function getOedhconfirmcode()
    {
        return $this->oedhconfirmcode;
    }

    /**
     * Get the [oedhpicked] column value.
     *
     * @return string
     */
    public function getOedhpicked()
    {
        return $this->oedhpicked;
    }

    /**
     * Get the [oedhorigrqstdate] column value.
     *
     * @return string
     */
    public function getOedhorigrqstdate()
    {
        return $this->oedhorigrqstdate;
    }

    /**
     * Get the [oedhfablock] column value.
     *
     * @return string
     */
    public function getOedhfablock()
    {
        return $this->oedhfablock;
    }

    /**
     * Get the [oedhlabelprinted] column value.
     *
     * @return string
     */
    public function getOedhlabelprinted()
    {
        return $this->oedhlabelprinted;
    }

    /**
     * Get the [oedhquoteid] column value.
     *
     * @return string
     */
    public function getOedhquoteid()
    {
        return $this->oedhquoteid;
    }

    /**
     * Get the [oedhinvprinted] column value.
     *
     * @return string
     */
    public function getOedhinvprinted()
    {
        return $this->oedhinvprinted;
    }

    /**
     * Get the [oedhstockcheck] column value.
     *
     * @return string
     */
    public function getOedhstockcheck()
    {
        return $this->oedhstockcheck;
    }

    /**
     * Get the [oedhshouldwesplit] column value.
     *
     * @return string
     */
    public function getOedhshouldwesplit()
    {
        return $this->oedhshouldwesplit;
    }

    /**
     * Get the [oedhcofcreqd] column value.
     *
     * @return string
     */
    public function getOedhcofcreqd()
    {
        return $this->oedhcofcreqd;
    }

    /**
     * Get the [oedhackcode] column value.
     *
     * @return string
     */
    public function getOedhackcode()
    {
        return $this->oedhackcode;
    }

    /**
     * Get the [oedhwibordnbr] column value.
     *
     * @return string
     */
    public function getOedhwibordnbr()
    {
        return $this->oedhwibordnbr;
    }

    /**
     * Get the [oedhcerthistordr] column value.
     *
     * @return string
     */
    public function getOedhcerthistordr()
    {
        return $this->oedhcerthistordr;
    }

    /**
     * Get the [oedhcerthistline] column value.
     *
     * @return string
     */
    public function getOedhcerthistline()
    {
        return $this->oedhcerthistline;
    }

    /**
     * Get the [oedhordrdasitemid] column value.
     *
     * @return string
     */
    public function getOedhordrdasitemid()
    {
        return $this->oedhordrdasitemid;
    }

    /**
     * Get the [oedhwibatch1nbr] column value.
     *
     * @return int
     */
    public function getOedhwibatch1nbr()
    {
        return $this->oedhwibatch1nbr;
    }

    /**
     * Get the [oedhwibatch1qty] column value.
     *
     * @return string
     */
    public function getOedhwibatch1qty()
    {
        return $this->oedhwibatch1qty;
    }

    /**
     * Get the [oedhwibatch1stat] column value.
     *
     * @return string
     */
    public function getOedhwibatch1stat()
    {
        return $this->oedhwibatch1stat;
    }

    /**
     * Get the [oedhrganbr] column value.
     *
     * @return int
     */
    public function getOedhrganbr()
    {
        return $this->oedhrganbr;
    }

    /**
     * Get the [oedhorigpric] column value.
     *
     * @return string
     */
    public function getOedhorigpric()
    {
        return $this->oedhorigpric;
    }

    /**
     * Get the [oedhreflinenbr] column value.
     *
     * @return int
     */
    public function getOedhreflinenbr()
    {
        return $this->oedhreflinenbr;
    }

    /**
     * Get the [oedhbinlocn] column value.
     *
     * @return string
     */
    public function getOedhbinlocn()
    {
        return $this->oedhbinlocn;
    }

    /**
     * Get the [oedhacsuplywhse] column value.
     *
     * @return string
     */
    public function getOedhacsuplywhse()
    {
        return $this->oedhacsuplywhse;
    }

    /**
     * Get the [oedhacpricdate] column value.
     *
     * @return string
     */
    public function getOedhacpricdate()
    {
        return $this->oedhacpricdate;
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
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOehhnbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oehhnbr !== $v) {
            $this->oehhnbr = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEHHNBR] = true;
        }

        if ($this->aSalesHistory !== null && $this->aSalesHistory->getOehhnbr() !== $v) {
            $this->aSalesHistory = null;
        }

        return $this;
    } // setOehhnbr()

    /**
     * Set the value of [oedhline] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedhline !== $v) {
            $this->oedhline = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHLINE] = true;
        }

        return $this;
    } // setOedhline()

    /**
     * Set the value of [oedhyear] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhyear($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhyear !== $v) {
            $this->oedhyear = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHYEAR] = true;
        }

        return $this;
    } // setOedhyear()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_INITITEMNBR] = true;
        }

        if ($this->aItemMasterItem !== null && $this->aItemMasterItem->getInititemnbr() !== $v) {
            $this->aItemMasterItem = null;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [oedhdesc] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhdesc !== $v) {
            $this->oedhdesc = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHDESC] = true;
        }

        return $this;
    } // setOedhdesc()

    /**
     * Set the value of [oedhdesc2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhdesc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhdesc2 !== $v) {
            $this->oedhdesc2 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHDESC2] = true;
        }

        return $this;
    } // setOedhdesc2()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [oedhrqstdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhrqstdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhrqstdate !== $v) {
            $this->oedhrqstdate = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHRQSTDATE] = true;
        }

        return $this;
    } // setOedhrqstdate()

    /**
     * Set the value of [oedhcancdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhcancdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhcancdate !== $v) {
            $this->oedhcancdate = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCANCDATE] = true;
        }

        return $this;
    } // setOedhcancdate()

    /**
     * Set the value of [oedhshipdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhshipdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhshipdate !== $v) {
            $this->oedhshipdate = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHSHIPDATE] = true;
        }

        return $this;
    } // setOedhshipdate()

    /**
     * Set the value of [oedhspecordr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhspecordr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhspecordr !== $v) {
            $this->oedhspecordr = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHSPECORDR] = true;
        }

        return $this;
    } // setOedhspecordr()

    /**
     * Set the value of [artbmtaxcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setArtbmtaxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxcode !== $v) {
            $this->artbmtaxcode = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_ARTBMTAXCODE] = true;
        }

        return $this;
    } // setArtbmtaxcode()

    /**
     * Set the value of [oedhqtyord] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhqtyord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhqtyord !== $v) {
            $this->oedhqtyord = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHQTYORD] = true;
        }

        return $this;
    } // setOedhqtyord()

    /**
     * Set the value of [oedhqtyship] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhqtyship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhqtyship !== $v) {
            $this->oedhqtyship = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHQTYSHIP] = true;
        }

        return $this;
    } // setOedhqtyship()

    /**
     * Set the value of [oedhqtyshiptot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhqtyshiptot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhqtyshiptot !== $v) {
            $this->oedhqtyshiptot = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHQTYSHIPTOT] = true;
        }

        return $this;
    } // setOedhqtyshiptot()

    /**
     * Set the value of [oedhqtybord] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhqtybord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhqtybord !== $v) {
            $this->oedhqtybord = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHQTYBORD] = true;
        }

        return $this;
    } // setOedhqtybord()

    /**
     * Set the value of [oedhpric] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhpric !== $v) {
            $this->oedhpric = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHPRIC] = true;
        }

        return $this;
    } // setOedhpric()

    /**
     * Set the value of [oedhcost] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhcost !== $v) {
            $this->oedhcost = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCOST] = true;
        }

        return $this;
    } // setOedhcost()

    /**
     * Set the value of [oedhtaxpcttot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhtaxpcttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhtaxpcttot !== $v) {
            $this->oedhtaxpcttot = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHTAXPCTTOT] = true;
        }

        return $this;
    } // setOedhtaxpcttot()

    /**
     * Set the value of [oedhprictot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhprictot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhprictot !== $v) {
            $this->oedhprictot = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHPRICTOT] = true;
        }

        return $this;
    } // setOedhprictot()

    /**
     * Set the value of [oedhcosttot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhcosttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhcosttot !== $v) {
            $this->oedhcosttot = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCOSTTOT] = true;
        }

        return $this;
    } // setOedhcosttot()

    /**
     * Set the value of [oedhspcommpct] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhspcommpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhspcommpct !== $v) {
            $this->oedhspcommpct = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHSPCOMMPCT] = true;
        }

        return $this;
    } // setOedhspcommpct()

    /**
     * Set the value of [oedhbrkncaseqty] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhbrkncaseqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedhbrkncaseqty !== $v) {
            $this->oedhbrkncaseqty = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHBRKNCASEQTY] = true;
        }

        return $this;
    } // setOedhbrkncaseqty()

    /**
     * Set the value of [oedhbin] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhbin !== $v) {
            $this->oedhbin = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHBIN] = true;
        }

        return $this;
    } // setOedhbin()

    /**
     * Set the value of [oedhpersonalcd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhpersonalcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhpersonalcd !== $v) {
            $this->oedhpersonalcd = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHPERSONALCD] = true;
        }

        return $this;
    } // setOedhpersonalcd()

    /**
     * Set the value of [oedhacdisc1] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhacdisc1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhacdisc1 !== $v) {
            $this->oedhacdisc1 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHACDISC1] = true;
        }

        return $this;
    } // setOedhacdisc1()

    /**
     * Set the value of [oedhacdisc2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhacdisc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhacdisc2 !== $v) {
            $this->oedhacdisc2 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHACDISC2] = true;
        }

        return $this;
    } // setOedhacdisc2()

    /**
     * Set the value of [oedhacdisc3] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhacdisc3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhacdisc3 !== $v) {
            $this->oedhacdisc3 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHACDISC3] = true;
        }

        return $this;
    } // setOedhacdisc3()

    /**
     * Set the value of [oedhacdisc4] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhacdisc4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhacdisc4 !== $v) {
            $this->oedhacdisc4 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHACDISC4] = true;
        }

        return $this;
    } // setOedhacdisc4()

    /**
     * Set the value of [oedhlmwipnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhlmwipnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhlmwipnbr !== $v) {
            $this->oedhlmwipnbr = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHLMWIPNBR] = true;
        }

        return $this;
    } // setOedhlmwipnbr()

    /**
     * Set the value of [oedhcorepric] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhcorepric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhcorepric !== $v) {
            $this->oedhcorepric = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCOREPRIC] = true;
        }

        return $this;
    } // setOedhcorepric()

    /**
     * Set the value of [oedhasstcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhasstcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhasstcode !== $v) {
            $this->oedhasstcode = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHASSTCODE] = true;
        }

        return $this;
    } // setOedhasstcode()

    /**
     * Set the value of [oedhasstqty] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhasstqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhasstqty !== $v) {
            $this->oedhasstqty = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHASSTQTY] = true;
        }

        return $this;
    } // setOedhasstqty()

    /**
     * Set the value of [oedhlistpric] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhlistpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhlistpric !== $v) {
            $this->oedhlistpric = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHLISTPRIC] = true;
        }

        return $this;
    } // setOedhlistpric()

    /**
     * Set the value of [oedhstancost] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhstancost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhstancost !== $v) {
            $this->oedhstancost = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHSTANCOST] = true;
        }

        return $this;
    } // setOedhstancost()

    /**
     * Set the value of [oedhvenditemjob] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhvenditemjob($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhvenditemjob !== $v) {
            $this->oedhvenditemjob = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHVENDITEMJOB] = true;
        }

        return $this;
    } // setOedhvenditemjob()

    /**
     * Set the value of [oedhnsvendid] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhnsvendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhnsvendid !== $v) {
            $this->oedhnsvendid = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHNSVENDID] = true;
        }

        return $this;
    } // setOedhnsvendid()

    /**
     * Set the value of [oedhnsitemgrup] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhnsitemgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhnsitemgrup !== $v) {
            $this->oedhnsitemgrup = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHNSITEMGRUP] = true;
        }

        return $this;
    } // setOedhnsitemgrup()

    /**
     * Set the value of [oedhusecode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhusecode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhusecode !== $v) {
            $this->oedhusecode = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHUSECODE] = true;
        }

        return $this;
    } // setOedhusecode()

    /**
     * Set the value of [oedhnsshipfromid] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhnsshipfromid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhnsshipfromid !== $v) {
            $this->oedhnsshipfromid = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHNSSHIPFROMID] = true;
        }

        return $this;
    } // setOedhnsshipfromid()

    /**
     * Set the value of [oedhasstovrd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhasstovrd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhasstovrd !== $v) {
            $this->oedhasstovrd = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHASSTOVRD] = true;
        }

        return $this;
    } // setOedhasstovrd()

    /**
     * Set the value of [oedhpricovrd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhpricovrd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhpricovrd !== $v) {
            $this->oedhpricovrd = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHPRICOVRD] = true;
        }

        return $this;
    } // setOedhpricovrd()

    /**
     * Set the value of [oedhpickflag] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhpickflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhpickflag !== $v) {
            $this->oedhpickflag = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHPICKFLAG] = true;
        }

        return $this;
    } // setOedhpickflag()

    /**
     * Set the value of [oedhmstrtaxcode1] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxcode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxcode1 !== $v) {
            $this->oedhmstrtaxcode1 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE1] = true;
        }

        return $this;
    } // setOedhmstrtaxcode1()

    /**
     * Set the value of [oedhmstrtaxpct1] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxpct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxpct1 !== $v) {
            $this->oedhmstrtaxpct1 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT1] = true;
        }

        return $this;
    } // setOedhmstrtaxpct1()

    /**
     * Set the value of [oedhmstrtaxcode2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxcode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxcode2 !== $v) {
            $this->oedhmstrtaxcode2 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE2] = true;
        }

        return $this;
    } // setOedhmstrtaxcode2()

    /**
     * Set the value of [oedhmstrtaxpct2] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxpct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxpct2 !== $v) {
            $this->oedhmstrtaxpct2 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT2] = true;
        }

        return $this;
    } // setOedhmstrtaxpct2()

    /**
     * Set the value of [oedhmstrtaxcode3] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxcode3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxcode3 !== $v) {
            $this->oedhmstrtaxcode3 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE3] = true;
        }

        return $this;
    } // setOedhmstrtaxcode3()

    /**
     * Set the value of [oedhmstrtaxpct3] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxpct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxpct3 !== $v) {
            $this->oedhmstrtaxpct3 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT3] = true;
        }

        return $this;
    } // setOedhmstrtaxpct3()

    /**
     * Set the value of [oedhmstrtaxcode4] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxcode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxcode4 !== $v) {
            $this->oedhmstrtaxcode4 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE4] = true;
        }

        return $this;
    } // setOedhmstrtaxcode4()

    /**
     * Set the value of [oedhmstrtaxpct4] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxpct4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxpct4 !== $v) {
            $this->oedhmstrtaxpct4 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT4] = true;
        }

        return $this;
    } // setOedhmstrtaxpct4()

    /**
     * Set the value of [oedhmstrtaxcode5] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxcode5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxcode5 !== $v) {
            $this->oedhmstrtaxcode5 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE5] = true;
        }

        return $this;
    } // setOedhmstrtaxcode5()

    /**
     * Set the value of [oedhmstrtaxpct5] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxpct5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxpct5 !== $v) {
            $this->oedhmstrtaxpct5 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT5] = true;
        }

        return $this;
    } // setOedhmstrtaxpct5()

    /**
     * Set the value of [oedhmstrtaxcode6] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxcode6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxcode6 !== $v) {
            $this->oedhmstrtaxcode6 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE6] = true;
        }

        return $this;
    } // setOedhmstrtaxcode6()

    /**
     * Set the value of [oedhmstrtaxpct6] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxpct6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxpct6 !== $v) {
            $this->oedhmstrtaxpct6 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT6] = true;
        }

        return $this;
    } // setOedhmstrtaxpct6()

    /**
     * Set the value of [oedhmstrtaxcode7] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxcode7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxcode7 !== $v) {
            $this->oedhmstrtaxcode7 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE7] = true;
        }

        return $this;
    } // setOedhmstrtaxcode7()

    /**
     * Set the value of [oedhmstrtaxpct7] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxpct7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxpct7 !== $v) {
            $this->oedhmstrtaxpct7 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT7] = true;
        }

        return $this;
    } // setOedhmstrtaxpct7()

    /**
     * Set the value of [oedhmstrtaxcode8] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxcode8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxcode8 !== $v) {
            $this->oedhmstrtaxcode8 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE8] = true;
        }

        return $this;
    } // setOedhmstrtaxcode8()

    /**
     * Set the value of [oedhmstrtaxpct8] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxpct8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxpct8 !== $v) {
            $this->oedhmstrtaxpct8 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT8] = true;
        }

        return $this;
    } // setOedhmstrtaxpct8()

    /**
     * Set the value of [oedhmstrtaxcode9] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxcode9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxcode9 !== $v) {
            $this->oedhmstrtaxcode9 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE9] = true;
        }

        return $this;
    } // setOedhmstrtaxcode9()

    /**
     * Set the value of [oedhmstrtaxpct9] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmstrtaxpct9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmstrtaxpct9 !== $v) {
            $this->oedhmstrtaxpct9 = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT9] = true;
        }

        return $this;
    } // setOedhmstrtaxpct9()

    /**
     * Set the value of [oedhbinarea] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhbinarea($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhbinarea !== $v) {
            $this->oedhbinarea = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHBINAREA] = true;
        }

        return $this;
    } // setOedhbinarea()

    /**
     * Set the value of [oedhsplitline] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhsplitline($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhsplitline !== $v) {
            $this->oedhsplitline = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHSPLITLINE] = true;
        }

        return $this;
    } // setOedhsplitline()

    /**
     * Set the value of [oedhlostreas] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhlostreas($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhlostreas !== $v) {
            $this->oedhlostreas = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHLOSTREAS] = true;
        }

        return $this;
    } // setOedhlostreas()

    /**
     * Set the value of [oedhorigline] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhorigline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedhorigline !== $v) {
            $this->oedhorigline = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHORIGLINE] = true;
        }

        return $this;
    } // setOedhorigline()

    /**
     * Set the value of [oedhcustcrssref] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhcustcrssref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhcustcrssref !== $v) {
            $this->oedhcustcrssref = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCUSTCRSSREF] = true;
        }

        return $this;
    } // setOedhcustcrssref()

    /**
     * Set the value of [oedhuom] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhuom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhuom !== $v) {
            $this->oedhuom = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHUOM] = true;
        }

        return $this;
    } // setOedhuom()

    /**
     * Set the value of [oedhshipflag] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhshipflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhshipflag !== $v) {
            $this->oedhshipflag = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHSHIPFLAG] = true;
        }

        return $this;
    } // setOedhshipflag()

    /**
     * Set the value of [oedhkitflag] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhkitflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhkitflag !== $v) {
            $this->oedhkitflag = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHKITFLAG] = true;
        }

        return $this;
    } // setOedhkitflag()

    /**
     * Set the value of [oedhkititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhkititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhkititemnbr !== $v) {
            $this->oedhkititemnbr = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHKITITEMNBR] = true;
        }

        return $this;
    } // setOedhkititemnbr()

    /**
     * Set the value of [oedhbfcost] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhbfcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhbfcost !== $v) {
            $this->oedhbfcost = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHBFCOST] = true;
        }

        return $this;
    } // setOedhbfcost()

    /**
     * Set the value of [oedhbfmsgcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhbfmsgcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhbfmsgcode !== $v) {
            $this->oedhbfmsgcode = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHBFMSGCODE] = true;
        }

        return $this;
    } // setOedhbfmsgcode()

    /**
     * Set the value of [oedhbfcosttot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhbfcosttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhbfcosttot !== $v) {
            $this->oedhbfcosttot = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHBFCOSTTOT] = true;
        }

        return $this;
    } // setOedhbfcosttot()

    /**
     * Set the value of [oedhlmbulkpric] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhlmbulkpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhlmbulkpric !== $v) {
            $this->oedhlmbulkpric = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHLMBULKPRIC] = true;
        }

        return $this;
    } // setOedhlmbulkpric()

    /**
     * Set the value of [oedhlmmtrxpkgpric] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhlmmtrxpkgpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhlmmtrxpkgpric !== $v) {
            $this->oedhlmmtrxpkgpric = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHLMMTRXPKGPRIC] = true;
        }

        return $this;
    } // setOedhlmmtrxpkgpric()

    /**
     * Set the value of [oedhlmmtrxbulkpric] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhlmmtrxbulkpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhlmmtrxbulkpric !== $v) {
            $this->oedhlmmtrxbulkpric = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHLMMTRXBULKPRIC] = true;
        }

        return $this;
    } // setOedhlmmtrxbulkpric()

    /**
     * Set the value of [oedhlmcontractpric] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhlmcontractpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhlmcontractpric !== $v) {
            $this->oedhlmcontractpric = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHLMCONTRACTPRIC] = true;
        }

        return $this;
    } // setOedhlmcontractpric()

    /**
     * Set the value of [oedhwghttot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhwghttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhwghttot !== $v) {
            $this->oedhwghttot = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHWGHTTOT] = true;
        }

        return $this;
    } // setOedhwghttot()

    /**
     * Set the value of [oedhordras] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhordras($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhordras !== $v) {
            $this->oedhordras = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHORDRAS] = true;
        }

        return $this;
    } // setOedhordras()

    /**
     * Set the value of [oedhpodetlinenbr] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhpodetlinenbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedhpodetlinenbr !== $v) {
            $this->oedhpodetlinenbr = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHPODETLINENBR] = true;
        }

        return $this;
    } // setOedhpodetlinenbr()

    /**
     * Set the value of [oedhqtytoship] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhqtytoship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhqtytoship !== $v) {
            $this->oedhqtytoship = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHQTYTOSHIP] = true;
        }

        return $this;
    } // setOedhqtytoship()

    /**
     * Set the value of [oedhponbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhponbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhponbr !== $v) {
            $this->oedhponbr = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHPONBR] = true;
        }

        return $this;
    } // setOedhponbr()

    /**
     * Set the value of [oedhporef] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhporef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhporef !== $v) {
            $this->oedhporef = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHPOREF] = true;
        }

        return $this;
    } // setOedhporef()

    /**
     * Set the value of [oedhfrtin] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhfrtin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhfrtin !== $v) {
            $this->oedhfrtin = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHFRTIN] = true;
        }

        return $this;
    } // setOedhfrtin()

    /**
     * Set the value of [oedhfrtinentered] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhfrtinentered($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhfrtinentered !== $v) {
            $this->oedhfrtinentered = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHFRTINENTERED] = true;
        }

        return $this;
    } // setOedhfrtinentered()

    /**
     * Set the value of [oedhprodcmplt] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhprodcmplt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhprodcmplt !== $v) {
            $this->oedhprodcmplt = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHPRODCMPLT] = true;
        }

        return $this;
    } // setOedhprodcmplt()

    /**
     * Set the value of [oedherflag] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedherflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedherflag !== $v) {
            $this->oedherflag = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHERFLAG] = true;
        }

        return $this;
    } // setOedherflag()

    /**
     * Set the value of [oedhorigitem] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhorigitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhorigitem !== $v) {
            $this->oedhorigitem = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHORIGITEM] = true;
        }

        return $this;
    } // setOedhorigitem()

    /**
     * Set the value of [oedhsubflag] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhsubflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhsubflag !== $v) {
            $this->oedhsubflag = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHSUBFLAG] = true;
        }

        return $this;
    } // setOedhsubflag()

    /**
     * Set the value of [oedhediincomingseq] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhediincomingseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedhediincomingseq !== $v) {
            $this->oedhediincomingseq = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHEDIINCOMINGSEQ] = true;
        }

        return $this;
    } // setOedhediincomingseq()

    /**
     * Set the value of [oedhspordpoline] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhspordpoline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedhspordpoline !== $v) {
            $this->oedhspordpoline = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHSPORDPOLINE] = true;
        }

        return $this;
    } // setOedhspordpoline()

    /**
     * Set the value of [oedhcatlgid] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhcatlgid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhcatlgid !== $v) {
            $this->oedhcatlgid = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCATLGID] = true;
        }

        return $this;
    } // setOedhcatlgid()

    /**
     * Set the value of [oedhdesigncd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhdesigncd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhdesigncd !== $v) {
            $this->oedhdesigncd = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHDESIGNCD] = true;
        }

        return $this;
    } // setOedhdesigncd()

    /**
     * Set the value of [oedhdiscpct] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhdiscpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhdiscpct !== $v) {
            $this->oedhdiscpct = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHDISCPCT] = true;
        }

        return $this;
    } // setOedhdiscpct()

    /**
     * Set the value of [oedhtaxamt] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhtaxamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhtaxamt !== $v) {
            $this->oedhtaxamt = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHTAXAMT] = true;
        }

        return $this;
    } // setOedhtaxamt()

    /**
     * Set the value of [oedhxusage] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhxusage($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhxusage !== $v) {
            $this->oedhxusage = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHXUSAGE] = true;
        }

        return $this;
    } // setOedhxusage()

    /**
     * Set the value of [oedhrqtslock] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhrqtslock($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhrqtslock !== $v) {
            $this->oedhrqtslock = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHRQTSLOCK] = true;
        }

        return $this;
    } // setOedhrqtslock()

    /**
     * Set the value of [oedhfreshfrozen] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhfreshfrozen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhfreshfrozen !== $v) {
            $this->oedhfreshfrozen = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHFRESHFROZEN] = true;
        }

        return $this;
    } // setOedhfreshfrozen()

    /**
     * Set the value of [oedhcoreflag] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhcoreflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhcoreflag !== $v) {
            $this->oedhcoreflag = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCOREFLAG] = true;
        }

        return $this;
    } // setOedhcoreflag()

    /**
     * Set the value of [oedhnssalesacct] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhnssalesacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhnssalesacct !== $v) {
            $this->oedhnssalesacct = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHNSSALESACCT] = true;
        }

        return $this;
    } // setOedhnssalesacct()

    /**
     * Set the value of [oedhcertreqd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhcertreqd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhcertreqd !== $v) {
            $this->oedhcertreqd = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCERTREQD] = true;
        }

        return $this;
    } // setOedhcertreqd()

    /**
     * Set the value of [oedhaddonsales] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhaddonsales($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhaddonsales !== $v) {
            $this->oedhaddonsales = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHADDONSALES] = true;
        }

        return $this;
    } // setOedhaddonsales()

    /**
     * Set the value of [oedhbordflag] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhbordflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhbordflag !== $v) {
            $this->oedhbordflag = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHBORDFLAG] = true;
        }

        return $this;
    } // setOedhbordflag()

    /**
     * Set the value of [oedhtempgrove] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhtempgrove($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhtempgrove !== $v) {
            $this->oedhtempgrove = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHTEMPGROVE] = true;
        }

        return $this;
    } // setOedhtempgrove()

    /**
     * Set the value of [oedhgrovedisc] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhgrovedisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhgrovedisc !== $v) {
            $this->oedhgrovedisc = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHGROVEDISC] = true;
        }

        return $this;
    } // setOedhgrovedisc()

    /**
     * Set the value of [oedhoffinvc] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhoffinvc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhoffinvc !== $v) {
            $this->oedhoffinvc = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHOFFINVC] = true;
        }

        return $this;
    } // setOedhoffinvc()

    /**
     * Set the value of [inititemgrup] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setInititemgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemgrup !== $v) {
            $this->inititemgrup = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_INITITEMGRUP] = true;
        }

        return $this;
    } // setInititemgrup()

    /**
     * Set the value of [apvevendid] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setApvevendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvevendid !== $v) {
            $this->apvevendid = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_APVEVENDID] = true;
        }

        return $this;
    } // setApvevendid()

    /**
     * Set the value of [oedhacct] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhacct !== $v) {
            $this->oedhacct = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHACCT] = true;
        }

        return $this;
    } // setOedhacct()

    /**
     * Set the value of [oedhloadtot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhloadtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhloadtot !== $v) {
            $this->oedhloadtot = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHLOADTOT] = true;
        }

        return $this;
    } // setOedhloadtot()

    /**
     * Set the value of [oedhpickedqty] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhpickedqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhpickedqty !== $v) {
            $this->oedhpickedqty = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHPICKEDQTY] = true;
        }

        return $this;
    } // setOedhpickedqty()

    /**
     * Set the value of [oedhwiorigqty] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhwiorigqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhwiorigqty !== $v) {
            $this->oedhwiorigqty = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHWIORIGQTY] = true;
        }

        return $this;
    } // setOedhwiorigqty()

    /**
     * Set the value of [oedhmargintot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhmargintot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhmargintot !== $v) {
            $this->oedhmargintot = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHMARGINTOT] = true;
        }

        return $this;
    } // setOedhmargintot()

    /**
     * Set the value of [oedhcorecost] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhcorecost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhcorecost !== $v) {
            $this->oedhcorecost = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCORECOST] = true;
        }

        return $this;
    } // setOedhcorecost()

    /**
     * Set the value of [oedhitemref] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhitemref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhitemref !== $v) {
            $this->oedhitemref = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHITEMREF] = true;
        }

        return $this;
    } // setOedhitemref()

    /**
     * Set the value of [oedhsac02returncode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhsac02returncode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhsac02returncode !== $v) {
            $this->oedhsac02returncode = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHSAC02RETURNCODE] = true;
        }

        return $this;
    } // setOedhsac02returncode()

    /**
     * Set the value of [oedhwgtaxcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhwgtaxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhwgtaxcode !== $v) {
            $this->oedhwgtaxcode = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHWGTAXCODE] = true;
        }

        return $this;
    } // setOedhwgtaxcode()

    /**
     * Set the value of [oedhwgprice] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhwgprice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhwgprice !== $v) {
            $this->oedhwgprice = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHWGPRICE] = true;
        }

        return $this;
    } // setOedhwgprice()

    /**
     * Set the value of [oedhwgtot] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhwgtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhwgtot !== $v) {
            $this->oedhwgtot = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHWGTOT] = true;
        }

        return $this;
    } // setOedhwgtot()

    /**
     * Set the value of [oedhcntrqty] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhcntrqty($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedhcntrqty !== $v) {
            $this->oedhcntrqty = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCNTRQTY] = true;
        }

        return $this;
    } // setOedhcntrqty()

    /**
     * Set the value of [oedhconfirmcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhconfirmcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhconfirmcode !== $v) {
            $this->oedhconfirmcode = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCONFIRMCODE] = true;
        }

        return $this;
    } // setOedhconfirmcode()

    /**
     * Set the value of [oedhpicked] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhpicked($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhpicked !== $v) {
            $this->oedhpicked = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHPICKED] = true;
        }

        return $this;
    } // setOedhpicked()

    /**
     * Set the value of [oedhorigrqstdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhorigrqstdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhorigrqstdate !== $v) {
            $this->oedhorigrqstdate = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHORIGRQSTDATE] = true;
        }

        return $this;
    } // setOedhorigrqstdate()

    /**
     * Set the value of [oedhfablock] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhfablock($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhfablock !== $v) {
            $this->oedhfablock = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHFABLOCK] = true;
        }

        return $this;
    } // setOedhfablock()

    /**
     * Set the value of [oedhlabelprinted] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhlabelprinted($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhlabelprinted !== $v) {
            $this->oedhlabelprinted = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHLABELPRINTED] = true;
        }

        return $this;
    } // setOedhlabelprinted()

    /**
     * Set the value of [oedhquoteid] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhquoteid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhquoteid !== $v) {
            $this->oedhquoteid = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHQUOTEID] = true;
        }

        return $this;
    } // setOedhquoteid()

    /**
     * Set the value of [oedhinvprinted] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhinvprinted($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhinvprinted !== $v) {
            $this->oedhinvprinted = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHINVPRINTED] = true;
        }

        return $this;
    } // setOedhinvprinted()

    /**
     * Set the value of [oedhstockcheck] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhstockcheck($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhstockcheck !== $v) {
            $this->oedhstockcheck = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHSTOCKCHECK] = true;
        }

        return $this;
    } // setOedhstockcheck()

    /**
     * Set the value of [oedhshouldwesplit] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhshouldwesplit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhshouldwesplit !== $v) {
            $this->oedhshouldwesplit = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHSHOULDWESPLIT] = true;
        }

        return $this;
    } // setOedhshouldwesplit()

    /**
     * Set the value of [oedhcofcreqd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhcofcreqd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhcofcreqd !== $v) {
            $this->oedhcofcreqd = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCOFCREQD] = true;
        }

        return $this;
    } // setOedhcofcreqd()

    /**
     * Set the value of [oedhackcode] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhackcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhackcode !== $v) {
            $this->oedhackcode = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHACKCODE] = true;
        }

        return $this;
    } // setOedhackcode()

    /**
     * Set the value of [oedhwibordnbr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhwibordnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhwibordnbr !== $v) {
            $this->oedhwibordnbr = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHWIBORDNBR] = true;
        }

        return $this;
    } // setOedhwibordnbr()

    /**
     * Set the value of [oedhcerthistordr] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhcerthistordr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhcerthistordr !== $v) {
            $this->oedhcerthistordr = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCERTHISTORDR] = true;
        }

        return $this;
    } // setOedhcerthistordr()

    /**
     * Set the value of [oedhcerthistline] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhcerthistline($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhcerthistline !== $v) {
            $this->oedhcerthistline = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHCERTHISTLINE] = true;
        }

        return $this;
    } // setOedhcerthistline()

    /**
     * Set the value of [oedhordrdasitemid] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhordrdasitemid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhordrdasitemid !== $v) {
            $this->oedhordrdasitemid = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHORDRDASITEMID] = true;
        }

        return $this;
    } // setOedhordrdasitemid()

    /**
     * Set the value of [oedhwibatch1nbr] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhwibatch1nbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedhwibatch1nbr !== $v) {
            $this->oedhwibatch1nbr = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHWIBATCH1NBR] = true;
        }

        return $this;
    } // setOedhwibatch1nbr()

    /**
     * Set the value of [oedhwibatch1qty] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhwibatch1qty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhwibatch1qty !== $v) {
            $this->oedhwibatch1qty = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHWIBATCH1QTY] = true;
        }

        return $this;
    } // setOedhwibatch1qty()

    /**
     * Set the value of [oedhwibatch1stat] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhwibatch1stat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhwibatch1stat !== $v) {
            $this->oedhwibatch1stat = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHWIBATCH1STAT] = true;
        }

        return $this;
    } // setOedhwibatch1stat()

    /**
     * Set the value of [oedhrganbr] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhrganbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedhrganbr !== $v) {
            $this->oedhrganbr = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHRGANBR] = true;
        }

        return $this;
    } // setOedhrganbr()

    /**
     * Set the value of [oedhorigpric] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhorigpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhorigpric !== $v) {
            $this->oedhorigpric = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHORIGPRIC] = true;
        }

        return $this;
    } // setOedhorigpric()

    /**
     * Set the value of [oedhreflinenbr] column.
     *
     * @param int $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhreflinenbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oedhreflinenbr !== $v) {
            $this->oedhreflinenbr = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHREFLINENBR] = true;
        }

        return $this;
    } // setOedhreflinenbr()

    /**
     * Set the value of [oedhbinlocn] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhbinlocn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhbinlocn !== $v) {
            $this->oedhbinlocn = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHBINLOCN] = true;
        }

        return $this;
    } // setOedhbinlocn()

    /**
     * Set the value of [oedhacsuplywhse] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhacsuplywhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhacsuplywhse !== $v) {
            $this->oedhacsuplywhse = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHACSUPLYWHSE] = true;
        }

        return $this;
    } // setOedhacsuplywhse()

    /**
     * Set the value of [oedhacpricdate] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setOedhacpricdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oedhacpricdate !== $v) {
            $this->oedhacpricdate = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_OEDHACPRICDATE] = true;
        }

        return $this;
    } // setOedhacpricdate()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[SalesHistoryDetailTableMap::COL_DUMMY] = true;
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

            if ($this->oedhline !== 0) {
                return false;
            }

            if ($this->oedhyear !== '') {
                return false;
            }

            if ($this->inititemnbr !== '') {
                return false;
            }

            if ($this->oedhdesc !== '') {
                return false;
            }

            if ($this->oedhdesc2 !== '') {
                return false;
            }

            if ($this->intbwhse !== '') {
                return false;
            }

            if ($this->oedhrqstdate !== '') {
                return false;
            }

            if ($this->oedhcancdate !== '') {
                return false;
            }

            if ($this->oedhshipdate !== '') {
                return false;
            }

            if ($this->oedhspecordr !== 'N') {
                return false;
            }

            if ($this->artbmtaxcode !== '') {
                return false;
            }

            if ($this->oedhqtyord !== '0.0000000') {
                return false;
            }

            if ($this->oedhqtyship !== '0.0000000') {
                return false;
            }

            if ($this->oedhqtyshiptot !== '0.0000000') {
                return false;
            }

            if ($this->oedhqtybord !== '0.0000000') {
                return false;
            }

            if ($this->oedhpric !== '0.0000000') {
                return false;
            }

            if ($this->oedhcost !== '0.0000000') {
                return false;
            }

            if ($this->oedhtaxpcttot !== '0.0000000') {
                return false;
            }

            if ($this->oedhprictot !== '0.0000000') {
                return false;
            }

            if ($this->oedhcosttot !== '0.0000000') {
                return false;
            }

            if ($this->oedhspcommpct !== '0.0000000') {
                return false;
            }

            if ($this->oedhbrkncaseqty !== 0) {
                return false;
            }

            if ($this->oedhbin !== '') {
                return false;
            }

            if ($this->oedhpersonalcd !== '') {
                return false;
            }

            if ($this->oedhacdisc1 !== '') {
                return false;
            }

            if ($this->oedhacdisc2 !== '') {
                return false;
            }

            if ($this->oedhacdisc3 !== '') {
                return false;
            }

            if ($this->oedhacdisc4 !== '') {
                return false;
            }

            if ($this->oedhlmwipnbr !== '') {
                return false;
            }

            if ($this->oedhcorepric !== '0.000') {
                return false;
            }

            if ($this->oedhasstcode !== '') {
                return false;
            }

            if ($this->oedhasstqty !== '0.0000000') {
                return false;
            }

            if ($this->oedhlistpric !== '0.0000000') {
                return false;
            }

            if ($this->oedhstancost !== '0.0000000') {
                return false;
            }

            if ($this->oedhvenditemjob !== '') {
                return false;
            }

            if ($this->oedhnsvendid !== '') {
                return false;
            }

            if ($this->oedhnsitemgrup !== '') {
                return false;
            }

            if ($this->oedhusecode !== '') {
                return false;
            }

            if ($this->oedhnsshipfromid !== '') {
                return false;
            }

            if ($this->oedhasstovrd !== 'N') {
                return false;
            }

            if ($this->oedhpricovrd !== 'N') {
                return false;
            }

            if ($this->oedhpickflag !== 'N') {
                return false;
            }

            if ($this->oedhmstrtaxcode1 !== '') {
                return false;
            }

            if ($this->oedhmstrtaxpct1 !== '0.000') {
                return false;
            }

            if ($this->oedhmstrtaxcode2 !== '') {
                return false;
            }

            if ($this->oedhmstrtaxpct2 !== '0.000') {
                return false;
            }

            if ($this->oedhmstrtaxcode3 !== '') {
                return false;
            }

            if ($this->oedhmstrtaxpct3 !== '0.000') {
                return false;
            }

            if ($this->oedhmstrtaxcode4 !== '') {
                return false;
            }

            if ($this->oedhmstrtaxpct4 !== '0.000') {
                return false;
            }

            if ($this->oedhmstrtaxcode5 !== '') {
                return false;
            }

            if ($this->oedhmstrtaxpct5 !== '0.000') {
                return false;
            }

            if ($this->oedhmstrtaxcode6 !== '') {
                return false;
            }

            if ($this->oedhmstrtaxpct6 !== '0.000') {
                return false;
            }

            if ($this->oedhmstrtaxcode7 !== '') {
                return false;
            }

            if ($this->oedhmstrtaxpct7 !== '0.000') {
                return false;
            }

            if ($this->oedhmstrtaxcode8 !== '') {
                return false;
            }

            if ($this->oedhmstrtaxpct8 !== '0.000') {
                return false;
            }

            if ($this->oedhmstrtaxcode9 !== '') {
                return false;
            }

            if ($this->oedhmstrtaxpct9 !== '0.000') {
                return false;
            }

            if ($this->oedhbinarea !== '') {
                return false;
            }

            if ($this->oedhsplitline !== '') {
                return false;
            }

            if ($this->oedhlostreas !== '') {
                return false;
            }

            if ($this->oedhorigline !== 0) {
                return false;
            }

            if ($this->oedhcustcrssref !== '') {
                return false;
            }

            if ($this->oedhuom !== '') {
                return false;
            }

            if ($this->oedhshipflag !== 'N') {
                return false;
            }

            if ($this->oedhkitflag !== 'N') {
                return false;
            }

            if ($this->oedhkititemnbr !== '') {
                return false;
            }

            if ($this->oedhbfcost !== '0.0000000') {
                return false;
            }

            if ($this->oedhbfmsgcode !== '') {
                return false;
            }

            if ($this->oedhbfcosttot !== '0.0000000') {
                return false;
            }

            if ($this->oedhlmbulkpric !== '0.00') {
                return false;
            }

            if ($this->oedhlmmtrxpkgpric !== '0.00') {
                return false;
            }

            if ($this->oedhlmmtrxbulkpric !== '0.00') {
                return false;
            }

            if ($this->oedhlmcontractpric !== '0.00') {
                return false;
            }

            if ($this->oedhwghttot !== '0.0000000') {
                return false;
            }

            if ($this->oedhordras !== '') {
                return false;
            }

            if ($this->oedhpodetlinenbr !== 0) {
                return false;
            }

            if ($this->oedhqtytoship !== '0.0000000') {
                return false;
            }

            if ($this->oedhponbr !== '') {
                return false;
            }

            if ($this->oedhporef !== '') {
                return false;
            }

            if ($this->oedhfrtin !== '0.00') {
                return false;
            }

            if ($this->oedhfrtinentered !== 'N') {
                return false;
            }

            if ($this->oedhprodcmplt !== '') {
                return false;
            }

            if ($this->oedherflag !== '') {
                return false;
            }

            if ($this->oedhorigitem !== '') {
                return false;
            }

            if ($this->oedhsubflag !== '') {
                return false;
            }

            if ($this->oedhediincomingseq !== 0) {
                return false;
            }

            if ($this->oedhspordpoline !== 0) {
                return false;
            }

            if ($this->oedhcatlgid !== '') {
                return false;
            }

            if ($this->oedhdesigncd !== '') {
                return false;
            }

            if ($this->oedhdiscpct !== '0.000') {
                return false;
            }

            if ($this->oedhtaxamt !== '0.00') {
                return false;
            }

            if ($this->oedhxusage !== 'N') {
                return false;
            }

            if ($this->oedhrqtslock !== 'N') {
                return false;
            }

            if ($this->oedhfreshfrozen !== '') {
                return false;
            }

            if ($this->oedhcoreflag !== 'N') {
                return false;
            }

            if ($this->oedhnssalesacct !== '') {
                return false;
            }

            if ($this->oedhcertreqd !== 'N') {
                return false;
            }

            if ($this->oedhaddonsales !== 'N') {
                return false;
            }

            if ($this->oedhbordflag !== 'N') {
                return false;
            }

            if ($this->oedhtempgrove !== '') {
                return false;
            }

            if ($this->oedhgrovedisc !== '') {
                return false;
            }

            if ($this->oedhoffinvc !== '') {
                return false;
            }

            if ($this->inititemgrup !== '') {
                return false;
            }

            if ($this->apvevendid !== '') {
                return false;
            }

            if ($this->oedhacct !== '') {
                return false;
            }

            if ($this->oedhloadtot !== '0.00') {
                return false;
            }

            if ($this->oedhpickedqty !== '0.00') {
                return false;
            }

            if ($this->oedhwiorigqty !== '0.00') {
                return false;
            }

            if ($this->oedhmargintot !== '0.00') {
                return false;
            }

            if ($this->oedhcorecost !== '0.0000') {
                return false;
            }

            if ($this->oedhitemref !== '') {
                return false;
            }

            if ($this->oedhsac02returncode !== '') {
                return false;
            }

            if ($this->oedhwgtaxcode !== '') {
                return false;
            }

            if ($this->oedhwgprice !== '0.00') {
                return false;
            }

            if ($this->oedhwgtot !== '0.0000000') {
                return false;
            }

            if ($this->oedhcntrqty !== 0) {
                return false;
            }

            if ($this->oedhconfirmcode !== '') {
                return false;
            }

            if ($this->oedhpicked !== '') {
                return false;
            }

            if ($this->oedhorigrqstdate !== '') {
                return false;
            }

            if ($this->oedhfablock !== '') {
                return false;
            }

            if ($this->oedhlabelprinted !== '') {
                return false;
            }

            if ($this->oedhquoteid !== '') {
                return false;
            }

            if ($this->oedhinvprinted !== '') {
                return false;
            }

            if ($this->oedhstockcheck !== '') {
                return false;
            }

            if ($this->oedhshouldwesplit !== '') {
                return false;
            }

            if ($this->oedhcofcreqd !== 'N') {
                return false;
            }

            if ($this->oedhackcode !== '') {
                return false;
            }

            if ($this->oedhwibordnbr !== '') {
                return false;
            }

            if ($this->oedhcerthistordr !== '') {
                return false;
            }

            if ($this->oedhcerthistline !== '') {
                return false;
            }

            if ($this->oedhordrdasitemid !== '') {
                return false;
            }

            if ($this->oedhwibatch1nbr !== 0) {
                return false;
            }

            if ($this->oedhwibatch1qty !== '0.00000') {
                return false;
            }

            if ($this->oedhwibatch1stat !== '') {
                return false;
            }

            if ($this->oedhrganbr !== 0) {
                return false;
            }

            if ($this->oedhorigpric !== '0.0000000') {
                return false;
            }

            if ($this->oedhreflinenbr !== 0) {
                return false;
            }

            if ($this->oedhbinlocn !== '') {
                return false;
            }

            if ($this->oedhacsuplywhse !== '') {
                return false;
            }

            if ($this->oedhacpricdate !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oehhnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oehhnbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhyear', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhyear = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhdesc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhdesc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhrqstdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhrqstdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhcancdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhcancdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhshipdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhshipdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhspecordr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhspecordr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhqtyord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhqtyord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhqtyship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhqtyship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhqtyshiptot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhqtyshiptot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhqtybord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhqtybord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhtaxpcttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhtaxpcttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhprictot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhprictot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhcosttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhcosttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhspcommpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhspcommpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhbrkncaseqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhbrkncaseqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhpersonalcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhpersonalcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhacdisc1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhacdisc1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhacdisc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhacdisc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhacdisc3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhacdisc3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhacdisc4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhacdisc4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhlmwipnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhlmwipnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhcorepric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhcorepric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhasstcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhasstcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhasstqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhasstqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhlistpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhlistpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhstancost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhstancost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhvenditemjob', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhvenditemjob = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhnsvendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhnsvendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhnsitemgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhnsitemgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhusecode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhusecode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhnsshipfromid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhnsshipfromid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhasstovrd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhasstovrd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhpricovrd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhpricovrd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhpickflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhpickflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxcode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxcode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxpct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxpct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxcode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxcode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxpct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxpct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxcode3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxcode3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxpct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxpct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxcode4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxcode4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxpct4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxpct4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxcode5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxcode5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxpct5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxpct5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxcode6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxcode6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxpct6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxpct6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxcode7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxcode7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxpct7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxpct7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxcode8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxcode8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxpct8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxpct8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxcode9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxcode9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmstrtaxpct9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmstrtaxpct9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhbinarea', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhbinarea = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhsplitline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhsplitline = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhlostreas', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhlostreas = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhorigline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhorigline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhcustcrssref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhcustcrssref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhuom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhuom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhshipflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhshipflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhkitflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhkitflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhkititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhkititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhbfcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhbfcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhbfmsgcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhbfmsgcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhbfcosttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhbfcosttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhlmbulkpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhlmbulkpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhlmmtrxpkgpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhlmmtrxpkgpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhlmmtrxbulkpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhlmmtrxbulkpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhlmcontractpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhlmcontractpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhwghttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhwghttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhordras', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhordras = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhpodetlinenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhpodetlinenbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhqtytoship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhqtytoship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhponbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhponbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhporef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhporef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhfrtin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhfrtin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhfrtinentered', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhfrtinentered = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhprodcmplt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhprodcmplt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedherflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedherflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhorigitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhorigitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhsubflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhsubflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhediincomingseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhediincomingseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhspordpoline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhspordpoline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhcatlgid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhcatlgid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhdesigncd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhdesigncd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhdiscpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhdiscpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhtaxamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhtaxamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 95 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhxusage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhxusage = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 96 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhrqtslock', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhrqtslock = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 97 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhfreshfrozen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhfreshfrozen = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 98 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhcoreflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhcoreflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 99 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhnssalesacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhnssalesacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 100 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhcertreqd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhcertreqd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 101 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhaddonsales', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhaddonsales = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 102 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhbordflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhbordflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 103 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhtempgrove', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhtempgrove = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 104 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhgrovedisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhgrovedisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 105 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhoffinvc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhoffinvc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 106 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Inititemgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 107 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvevendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 108 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 109 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhloadtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhloadtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 110 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhpickedqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhpickedqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 111 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhwiorigqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhwiorigqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 112 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhmargintot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhmargintot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 113 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhcorecost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhcorecost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 114 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhitemref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhitemref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 115 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhsac02returncode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhsac02returncode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 116 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhwgtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhwgtaxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 117 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhwgprice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhwgprice = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 118 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhwgtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhwgtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 119 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhcntrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhcntrqty = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 120 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhconfirmcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhconfirmcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 121 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhpicked', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhpicked = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 122 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhorigrqstdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhorigrqstdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 123 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhfablock', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhfablock = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 124 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhlabelprinted', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhlabelprinted = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 125 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhquoteid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhquoteid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 126 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhinvprinted', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhinvprinted = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 127 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhstockcheck', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhstockcheck = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 128 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhshouldwesplit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhshouldwesplit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 129 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhcofcreqd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhcofcreqd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 130 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhackcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhackcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 131 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhwibordnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhwibordnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 132 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhcerthistordr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhcerthistordr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 133 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhcerthistline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhcerthistline = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 134 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhordrdasitemid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhordrdasitemid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 135 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhwibatch1nbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhwibatch1nbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 136 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhwibatch1qty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhwibatch1qty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 137 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhwibatch1stat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhwibatch1stat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 138 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhrganbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhrganbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 139 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhorigpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhorigpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 140 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhreflinenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhreflinenbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 141 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhbinlocn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhbinlocn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 142 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhacsuplywhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhacsuplywhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 143 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Oedhacpricdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oedhacpricdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 144 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 145 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 146 + $startcol : SalesHistoryDetailTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 147; // 147 = SalesHistoryDetailTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\SalesHistoryDetail'), 0, $e);
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
        if ($this->aSalesHistory !== null && $this->oehhnbr !== $this->aSalesHistory->getOehhnbr()) {
            $this->aSalesHistory = null;
        }
        if ($this->aItemMasterItem !== null && $this->inititemnbr !== $this->aItemMasterItem->getInititemnbr()) {
            $this->aItemMasterItem = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(SalesHistoryDetailTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSalesHistoryDetailQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSalesHistory = null;
            $this->aItemMasterItem = null;
            $this->collSalesHistoryLotserials = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see SalesHistoryDetail::setDeleted()
     * @see SalesHistoryDetail::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryDetailTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSalesHistoryDetailQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SalesHistoryDetailTableMap::DATABASE_NAME);
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
                SalesHistoryDetailTableMap::addInstanceToPool($this);
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

            if ($this->aSalesHistory !== null) {
                if ($this->aSalesHistory->isModified() || $this->aSalesHistory->isNew()) {
                    $affectedRows += $this->aSalesHistory->save($con);
                }
                $this->setSalesHistory($this->aSalesHistory);
            }

            if ($this->aItemMasterItem !== null) {
                if ($this->aItemMasterItem->isModified() || $this->aItemMasterItem->isNew()) {
                    $affectedRows += $this->aItemMasterItem->save($con);
                }
                $this->setItemMasterItem($this->aItemMasterItem);
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
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEHHNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OehhNbr';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhLine';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHYEAR)) {
            $modifiedColumns[':p' . $index++]  = 'OedhYear';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHDESC)) {
            $modifiedColumns[':p' . $index++]  = 'OedhDesc';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHDESC2)) {
            $modifiedColumns[':p' . $index++]  = 'OedhDesc2';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHRQSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhRqstDate';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCANCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhCancDate';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSHIPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhShipDate';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSPECORDR)) {
            $modifiedColumns[':p' . $index++]  = 'OedhSpecOrdr';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_ARTBMTAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxCode';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHQTYORD)) {
            $modifiedColumns[':p' . $index++]  = 'OedhQtyOrd';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHQTYSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OedhQtyShip';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHQTYSHIPTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhQtyShipTot';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHQTYBORD)) {
            $modifiedColumns[':p' . $index++]  = 'OedhQtyBord';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'OedhPric';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OedhCost';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHTAXPCTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhTaxPctTot';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPRICTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhPricTot';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCOSTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhCostTot';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSPCOMMPCT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhSpCommPct';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBRKNCASEQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OedhBrknCaseQty';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBIN)) {
            $modifiedColumns[':p' . $index++]  = 'OedhBin';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPERSONALCD)) {
            $modifiedColumns[':p' . $index++]  = 'OedhPersonalCd';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACDISC1)) {
            $modifiedColumns[':p' . $index++]  = 'OedhAcDisc1';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACDISC2)) {
            $modifiedColumns[':p' . $index++]  = 'OedhAcDisc2';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACDISC3)) {
            $modifiedColumns[':p' . $index++]  = 'OedhAcDisc3';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACDISC4)) {
            $modifiedColumns[':p' . $index++]  = 'OedhAcDisc4';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLMWIPNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OedhLmWipNbr';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCOREPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'OedhCorePric';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHASSTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhAsstCode';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHASSTQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OedhAsstQty';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLISTPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'OedhListPric';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSTANCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OedhStanCost';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHVENDITEMJOB)) {
            $modifiedColumns[':p' . $index++]  = 'OedhVendItemJob';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHNSVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'OedhNsVendId';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHNSITEMGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'OedhNsItemGrup';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHUSECODE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhUseCode';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHNSSHIPFROMID)) {
            $modifiedColumns[':p' . $index++]  = 'OedhNsShipFromId';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHASSTOVRD)) {
            $modifiedColumns[':p' . $index++]  = 'OedhAsstOvrd';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPRICOVRD)) {
            $modifiedColumns[':p' . $index++]  = 'OedhPricOvrd';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPICKFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedhPickFlag';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxCode1';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxPct1';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxCode2';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxPct2';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE3)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxCode3';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxPct3';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE4)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxCode4';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT4)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxPct4';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE5)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxCode5';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT5)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxPct5';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE6)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxCode6';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT6)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxPct6';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE7)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxCode7';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT7)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxPct7';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE8)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxCode8';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT8)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxPct8';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE9)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxCode9';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT9)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMstrTaxPct9';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBINAREA)) {
            $modifiedColumns[':p' . $index++]  = 'OedhBinArea';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSPLITLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhSplitLine';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLOSTREAS)) {
            $modifiedColumns[':p' . $index++]  = 'OedhLostReas';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHORIGLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhOrigLine';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCUSTCRSSREF)) {
            $modifiedColumns[':p' . $index++]  = 'OedhCustCrssRef';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHUOM)) {
            $modifiedColumns[':p' . $index++]  = 'OedhUom';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSHIPFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedhShipFlag';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHKITFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedhKitFlag';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHKITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OedhKitItemNbr';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBFCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OedhBfCost';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBFMSGCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhBfMsgCode';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBFCOSTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhBfCostTot';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLMBULKPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'OedhLmBulkPric';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLMMTRXPKGPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'OedhLmMtrxPkgPric';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLMMTRXBULKPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'OedhLmMtrxBulkPric';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLMCONTRACTPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'OedhLmContractPric';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWGHTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhWghtTot';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHORDRAS)) {
            $modifiedColumns[':p' . $index++]  = 'OedhOrdrAs';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPODETLINENBR)) {
            $modifiedColumns[':p' . $index++]  = 'OedhPoDetLineNbr';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHQTYTOSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OedhQtyToShip';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPONBR)) {
            $modifiedColumns[':p' . $index++]  = 'OedhPoNbr';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPOREF)) {
            $modifiedColumns[':p' . $index++]  = 'OedhPoRef';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHFRTIN)) {
            $modifiedColumns[':p' . $index++]  = 'OedhFrtIn';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHFRTINENTERED)) {
            $modifiedColumns[':p' . $index++]  = 'OedhFrtInEntered';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPRODCMPLT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhProdCmplt';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHERFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedhErFlag';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHORIGITEM)) {
            $modifiedColumns[':p' . $index++]  = 'OedhOrigItem';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSUBFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedhSubFlag';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHEDIINCOMINGSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'OedhEdiIncomingSeq';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSPORDPOLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhSpordPoLine';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCATLGID)) {
            $modifiedColumns[':p' . $index++]  = 'OedhCatlgId';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHDESIGNCD)) {
            $modifiedColumns[':p' . $index++]  = 'OedhDesignCd';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHDISCPCT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhDiscPct';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHTAXAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhTaxAmt';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHXUSAGE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhXUsage';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHRQTSLOCK)) {
            $modifiedColumns[':p' . $index++]  = 'OedhRqtsLock';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHFRESHFROZEN)) {
            $modifiedColumns[':p' . $index++]  = 'OedhFreshFrozen';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCOREFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedhCoreFlag';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHNSSALESACCT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhNsSalesAcct';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCERTREQD)) {
            $modifiedColumns[':p' . $index++]  = 'OedhCertReqd';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHADDONSALES)) {
            $modifiedColumns[':p' . $index++]  = 'OedhAddOnSales';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBORDFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'OedhBordFlag';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHTEMPGROVE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhTempGrove';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHGROVEDISC)) {
            $modifiedColumns[':p' . $index++]  = 'OedhGroveDisc';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHOFFINVC)) {
            $modifiedColumns[':p' . $index++]  = 'OedhOffInvc';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_INITITEMGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemGrup';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_APVEVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ApveVendId';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACCT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhAcct';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLOADTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhLoadTot';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPICKEDQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OedhPickedQty';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWIORIGQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OedhWiOrigQty';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMARGINTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhMarginTot';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCORECOST)) {
            $modifiedColumns[':p' . $index++]  = 'OedhCoreCost';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHITEMREF)) {
            $modifiedColumns[':p' . $index++]  = 'OedhItemRef';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSAC02RETURNCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhSac02ReturnCode';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWGTAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhWgTaxCode';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWGPRICE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhWgPrice';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWGTOT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhWgTot';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCNTRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OedhCntrQty';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCONFIRMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhConfirmCode';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPICKED)) {
            $modifiedColumns[':p' . $index++]  = 'OedhPicked';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHORIGRQSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhOrigRqstDate';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHFABLOCK)) {
            $modifiedColumns[':p' . $index++]  = 'OedhFabLock';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLABELPRINTED)) {
            $modifiedColumns[':p' . $index++]  = 'OedhLabelPrinted';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHQUOTEID)) {
            $modifiedColumns[':p' . $index++]  = 'OedhQuoteId';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHINVPRINTED)) {
            $modifiedColumns[':p' . $index++]  = 'OedhInvPrinted';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSTOCKCHECK)) {
            $modifiedColumns[':p' . $index++]  = 'OedhStockCheck';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSHOULDWESPLIT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhShouldWeSplit';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCOFCREQD)) {
            $modifiedColumns[':p' . $index++]  = 'OedhCofcReqd';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACKCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhAckCode';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWIBORDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OedhWiBordNbr';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCERTHISTORDR)) {
            $modifiedColumns[':p' . $index++]  = 'OedhCertHistOrdr';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCERTHISTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhCertHistLine';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHORDRDASITEMID)) {
            $modifiedColumns[':p' . $index++]  = 'OedhOrdrdAsItemId';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1NBR)) {
            $modifiedColumns[':p' . $index++]  = 'OedhWiBatch1Nbr';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1QTY)) {
            $modifiedColumns[':p' . $index++]  = 'OedhWiBatch1Qty';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1STAT)) {
            $modifiedColumns[':p' . $index++]  = 'OedhWiBatch1Stat';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHRGANBR)) {
            $modifiedColumns[':p' . $index++]  = 'OedhRgaNbr';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHORIGPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'OedhOrigPric';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHREFLINENBR)) {
            $modifiedColumns[':p' . $index++]  = 'OedhRefLineNbr';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBINLOCN)) {
            $modifiedColumns[':p' . $index++]  = 'OedhBinLocn';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACSUPLYWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhAcSuplyWhse';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACPRICDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OedhAcPricDate';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO so_det_hist (%s) VALUES (%s)',
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
                    case 'OedhLine':
                        $stmt->bindValue($identifier, $this->oedhline, PDO::PARAM_INT);
                        break;
                    case 'OedhYear':
                        $stmt->bindValue($identifier, $this->oedhyear, PDO::PARAM_STR);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'OedhDesc':
                        $stmt->bindValue($identifier, $this->oedhdesc, PDO::PARAM_STR);
                        break;
                    case 'OedhDesc2':
                        $stmt->bindValue($identifier, $this->oedhdesc2, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'OedhRqstDate':
                        $stmt->bindValue($identifier, $this->oedhrqstdate, PDO::PARAM_STR);
                        break;
                    case 'OedhCancDate':
                        $stmt->bindValue($identifier, $this->oedhcancdate, PDO::PARAM_STR);
                        break;
                    case 'OedhShipDate':
                        $stmt->bindValue($identifier, $this->oedhshipdate, PDO::PARAM_STR);
                        break;
                    case 'OedhSpecOrdr':
                        $stmt->bindValue($identifier, $this->oedhspecordr, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxCode':
                        $stmt->bindValue($identifier, $this->artbmtaxcode, PDO::PARAM_STR);
                        break;
                    case 'OedhQtyOrd':
                        $stmt->bindValue($identifier, $this->oedhqtyord, PDO::PARAM_STR);
                        break;
                    case 'OedhQtyShip':
                        $stmt->bindValue($identifier, $this->oedhqtyship, PDO::PARAM_STR);
                        break;
                    case 'OedhQtyShipTot':
                        $stmt->bindValue($identifier, $this->oedhqtyshiptot, PDO::PARAM_STR);
                        break;
                    case 'OedhQtyBord':
                        $stmt->bindValue($identifier, $this->oedhqtybord, PDO::PARAM_STR);
                        break;
                    case 'OedhPric':
                        $stmt->bindValue($identifier, $this->oedhpric, PDO::PARAM_STR);
                        break;
                    case 'OedhCost':
                        $stmt->bindValue($identifier, $this->oedhcost, PDO::PARAM_STR);
                        break;
                    case 'OedhTaxPctTot':
                        $stmt->bindValue($identifier, $this->oedhtaxpcttot, PDO::PARAM_STR);
                        break;
                    case 'OedhPricTot':
                        $stmt->bindValue($identifier, $this->oedhprictot, PDO::PARAM_STR);
                        break;
                    case 'OedhCostTot':
                        $stmt->bindValue($identifier, $this->oedhcosttot, PDO::PARAM_STR);
                        break;
                    case 'OedhSpCommPct':
                        $stmt->bindValue($identifier, $this->oedhspcommpct, PDO::PARAM_STR);
                        break;
                    case 'OedhBrknCaseQty':
                        $stmt->bindValue($identifier, $this->oedhbrkncaseqty, PDO::PARAM_INT);
                        break;
                    case 'OedhBin':
                        $stmt->bindValue($identifier, $this->oedhbin, PDO::PARAM_STR);
                        break;
                    case 'OedhPersonalCd':
                        $stmt->bindValue($identifier, $this->oedhpersonalcd, PDO::PARAM_STR);
                        break;
                    case 'OedhAcDisc1':
                        $stmt->bindValue($identifier, $this->oedhacdisc1, PDO::PARAM_STR);
                        break;
                    case 'OedhAcDisc2':
                        $stmt->bindValue($identifier, $this->oedhacdisc2, PDO::PARAM_STR);
                        break;
                    case 'OedhAcDisc3':
                        $stmt->bindValue($identifier, $this->oedhacdisc3, PDO::PARAM_STR);
                        break;
                    case 'OedhAcDisc4':
                        $stmt->bindValue($identifier, $this->oedhacdisc4, PDO::PARAM_STR);
                        break;
                    case 'OedhLmWipNbr':
                        $stmt->bindValue($identifier, $this->oedhlmwipnbr, PDO::PARAM_STR);
                        break;
                    case 'OedhCorePric':
                        $stmt->bindValue($identifier, $this->oedhcorepric, PDO::PARAM_STR);
                        break;
                    case 'OedhAsstCode':
                        $stmt->bindValue($identifier, $this->oedhasstcode, PDO::PARAM_STR);
                        break;
                    case 'OedhAsstQty':
                        $stmt->bindValue($identifier, $this->oedhasstqty, PDO::PARAM_STR);
                        break;
                    case 'OedhListPric':
                        $stmt->bindValue($identifier, $this->oedhlistpric, PDO::PARAM_STR);
                        break;
                    case 'OedhStanCost':
                        $stmt->bindValue($identifier, $this->oedhstancost, PDO::PARAM_STR);
                        break;
                    case 'OedhVendItemJob':
                        $stmt->bindValue($identifier, $this->oedhvenditemjob, PDO::PARAM_STR);
                        break;
                    case 'OedhNsVendId':
                        $stmt->bindValue($identifier, $this->oedhnsvendid, PDO::PARAM_STR);
                        break;
                    case 'OedhNsItemGrup':
                        $stmt->bindValue($identifier, $this->oedhnsitemgrup, PDO::PARAM_STR);
                        break;
                    case 'OedhUseCode':
                        $stmt->bindValue($identifier, $this->oedhusecode, PDO::PARAM_STR);
                        break;
                    case 'OedhNsShipFromId':
                        $stmt->bindValue($identifier, $this->oedhnsshipfromid, PDO::PARAM_STR);
                        break;
                    case 'OedhAsstOvrd':
                        $stmt->bindValue($identifier, $this->oedhasstovrd, PDO::PARAM_STR);
                        break;
                    case 'OedhPricOvrd':
                        $stmt->bindValue($identifier, $this->oedhpricovrd, PDO::PARAM_STR);
                        break;
                    case 'OedhPickFlag':
                        $stmt->bindValue($identifier, $this->oedhpickflag, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxCode1':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxcode1, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxPct1':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxpct1, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxCode2':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxcode2, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxPct2':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxpct2, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxCode3':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxcode3, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxPct3':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxpct3, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxCode4':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxcode4, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxPct4':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxpct4, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxCode5':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxcode5, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxPct5':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxpct5, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxCode6':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxcode6, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxPct6':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxpct6, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxCode7':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxcode7, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxPct7':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxpct7, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxCode8':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxcode8, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxPct8':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxpct8, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxCode9':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxcode9, PDO::PARAM_STR);
                        break;
                    case 'OedhMstrTaxPct9':
                        $stmt->bindValue($identifier, $this->oedhmstrtaxpct9, PDO::PARAM_STR);
                        break;
                    case 'OedhBinArea':
                        $stmt->bindValue($identifier, $this->oedhbinarea, PDO::PARAM_STR);
                        break;
                    case 'OedhSplitLine':
                        $stmt->bindValue($identifier, $this->oedhsplitline, PDO::PARAM_STR);
                        break;
                    case 'OedhLostReas':
                        $stmt->bindValue($identifier, $this->oedhlostreas, PDO::PARAM_STR);
                        break;
                    case 'OedhOrigLine':
                        $stmt->bindValue($identifier, $this->oedhorigline, PDO::PARAM_INT);
                        break;
                    case 'OedhCustCrssRef':
                        $stmt->bindValue($identifier, $this->oedhcustcrssref, PDO::PARAM_STR);
                        break;
                    case 'OedhUom':
                        $stmt->bindValue($identifier, $this->oedhuom, PDO::PARAM_STR);
                        break;
                    case 'OedhShipFlag':
                        $stmt->bindValue($identifier, $this->oedhshipflag, PDO::PARAM_STR);
                        break;
                    case 'OedhKitFlag':
                        $stmt->bindValue($identifier, $this->oedhkitflag, PDO::PARAM_STR);
                        break;
                    case 'OedhKitItemNbr':
                        $stmt->bindValue($identifier, $this->oedhkititemnbr, PDO::PARAM_STR);
                        break;
                    case 'OedhBfCost':
                        $stmt->bindValue($identifier, $this->oedhbfcost, PDO::PARAM_STR);
                        break;
                    case 'OedhBfMsgCode':
                        $stmt->bindValue($identifier, $this->oedhbfmsgcode, PDO::PARAM_STR);
                        break;
                    case 'OedhBfCostTot':
                        $stmt->bindValue($identifier, $this->oedhbfcosttot, PDO::PARAM_STR);
                        break;
                    case 'OedhLmBulkPric':
                        $stmt->bindValue($identifier, $this->oedhlmbulkpric, PDO::PARAM_STR);
                        break;
                    case 'OedhLmMtrxPkgPric':
                        $stmt->bindValue($identifier, $this->oedhlmmtrxpkgpric, PDO::PARAM_STR);
                        break;
                    case 'OedhLmMtrxBulkPric':
                        $stmt->bindValue($identifier, $this->oedhlmmtrxbulkpric, PDO::PARAM_STR);
                        break;
                    case 'OedhLmContractPric':
                        $stmt->bindValue($identifier, $this->oedhlmcontractpric, PDO::PARAM_STR);
                        break;
                    case 'OedhWghtTot':
                        $stmt->bindValue($identifier, $this->oedhwghttot, PDO::PARAM_STR);
                        break;
                    case 'OedhOrdrAs':
                        $stmt->bindValue($identifier, $this->oedhordras, PDO::PARAM_STR);
                        break;
                    case 'OedhPoDetLineNbr':
                        $stmt->bindValue($identifier, $this->oedhpodetlinenbr, PDO::PARAM_INT);
                        break;
                    case 'OedhQtyToShip':
                        $stmt->bindValue($identifier, $this->oedhqtytoship, PDO::PARAM_STR);
                        break;
                    case 'OedhPoNbr':
                        $stmt->bindValue($identifier, $this->oedhponbr, PDO::PARAM_STR);
                        break;
                    case 'OedhPoRef':
                        $stmt->bindValue($identifier, $this->oedhporef, PDO::PARAM_STR);
                        break;
                    case 'OedhFrtIn':
                        $stmt->bindValue($identifier, $this->oedhfrtin, PDO::PARAM_STR);
                        break;
                    case 'OedhFrtInEntered':
                        $stmt->bindValue($identifier, $this->oedhfrtinentered, PDO::PARAM_STR);
                        break;
                    case 'OedhProdCmplt':
                        $stmt->bindValue($identifier, $this->oedhprodcmplt, PDO::PARAM_STR);
                        break;
                    case 'OedhErFlag':
                        $stmt->bindValue($identifier, $this->oedherflag, PDO::PARAM_STR);
                        break;
                    case 'OedhOrigItem':
                        $stmt->bindValue($identifier, $this->oedhorigitem, PDO::PARAM_STR);
                        break;
                    case 'OedhSubFlag':
                        $stmt->bindValue($identifier, $this->oedhsubflag, PDO::PARAM_STR);
                        break;
                    case 'OedhEdiIncomingSeq':
                        $stmt->bindValue($identifier, $this->oedhediincomingseq, PDO::PARAM_INT);
                        break;
                    case 'OedhSpordPoLine':
                        $stmt->bindValue($identifier, $this->oedhspordpoline, PDO::PARAM_INT);
                        break;
                    case 'OedhCatlgId':
                        $stmt->bindValue($identifier, $this->oedhcatlgid, PDO::PARAM_STR);
                        break;
                    case 'OedhDesignCd':
                        $stmt->bindValue($identifier, $this->oedhdesigncd, PDO::PARAM_STR);
                        break;
                    case 'OedhDiscPct':
                        $stmt->bindValue($identifier, $this->oedhdiscpct, PDO::PARAM_STR);
                        break;
                    case 'OedhTaxAmt':
                        $stmt->bindValue($identifier, $this->oedhtaxamt, PDO::PARAM_STR);
                        break;
                    case 'OedhXUsage':
                        $stmt->bindValue($identifier, $this->oedhxusage, PDO::PARAM_STR);
                        break;
                    case 'OedhRqtsLock':
                        $stmt->bindValue($identifier, $this->oedhrqtslock, PDO::PARAM_STR);
                        break;
                    case 'OedhFreshFrozen':
                        $stmt->bindValue($identifier, $this->oedhfreshfrozen, PDO::PARAM_STR);
                        break;
                    case 'OedhCoreFlag':
                        $stmt->bindValue($identifier, $this->oedhcoreflag, PDO::PARAM_STR);
                        break;
                    case 'OedhNsSalesAcct':
                        $stmt->bindValue($identifier, $this->oedhnssalesacct, PDO::PARAM_STR);
                        break;
                    case 'OedhCertReqd':
                        $stmt->bindValue($identifier, $this->oedhcertreqd, PDO::PARAM_STR);
                        break;
                    case 'OedhAddOnSales':
                        $stmt->bindValue($identifier, $this->oedhaddonsales, PDO::PARAM_STR);
                        break;
                    case 'OedhBordFlag':
                        $stmt->bindValue($identifier, $this->oedhbordflag, PDO::PARAM_STR);
                        break;
                    case 'OedhTempGrove':
                        $stmt->bindValue($identifier, $this->oedhtempgrove, PDO::PARAM_STR);
                        break;
                    case 'OedhGroveDisc':
                        $stmt->bindValue($identifier, $this->oedhgrovedisc, PDO::PARAM_STR);
                        break;
                    case 'OedhOffInvc':
                        $stmt->bindValue($identifier, $this->oedhoffinvc, PDO::PARAM_STR);
                        break;
                    case 'InitItemGrup':
                        $stmt->bindValue($identifier, $this->inititemgrup, PDO::PARAM_STR);
                        break;
                    case 'ApveVendId':
                        $stmt->bindValue($identifier, $this->apvevendid, PDO::PARAM_STR);
                        break;
                    case 'OedhAcct':
                        $stmt->bindValue($identifier, $this->oedhacct, PDO::PARAM_STR);
                        break;
                    case 'OedhLoadTot':
                        $stmt->bindValue($identifier, $this->oedhloadtot, PDO::PARAM_STR);
                        break;
                    case 'OedhPickedQty':
                        $stmt->bindValue($identifier, $this->oedhpickedqty, PDO::PARAM_STR);
                        break;
                    case 'OedhWiOrigQty':
                        $stmt->bindValue($identifier, $this->oedhwiorigqty, PDO::PARAM_STR);
                        break;
                    case 'OedhMarginTot':
                        $stmt->bindValue($identifier, $this->oedhmargintot, PDO::PARAM_STR);
                        break;
                    case 'OedhCoreCost':
                        $stmt->bindValue($identifier, $this->oedhcorecost, PDO::PARAM_STR);
                        break;
                    case 'OedhItemRef':
                        $stmt->bindValue($identifier, $this->oedhitemref, PDO::PARAM_STR);
                        break;
                    case 'OedhSac02ReturnCode':
                        $stmt->bindValue($identifier, $this->oedhsac02returncode, PDO::PARAM_STR);
                        break;
                    case 'OedhWgTaxCode':
                        $stmt->bindValue($identifier, $this->oedhwgtaxcode, PDO::PARAM_STR);
                        break;
                    case 'OedhWgPrice':
                        $stmt->bindValue($identifier, $this->oedhwgprice, PDO::PARAM_STR);
                        break;
                    case 'OedhWgTot':
                        $stmt->bindValue($identifier, $this->oedhwgtot, PDO::PARAM_STR);
                        break;
                    case 'OedhCntrQty':
                        $stmt->bindValue($identifier, $this->oedhcntrqty, PDO::PARAM_INT);
                        break;
                    case 'OedhConfirmCode':
                        $stmt->bindValue($identifier, $this->oedhconfirmcode, PDO::PARAM_STR);
                        break;
                    case 'OedhPicked':
                        $stmt->bindValue($identifier, $this->oedhpicked, PDO::PARAM_STR);
                        break;
                    case 'OedhOrigRqstDate':
                        $stmt->bindValue($identifier, $this->oedhorigrqstdate, PDO::PARAM_STR);
                        break;
                    case 'OedhFabLock':
                        $stmt->bindValue($identifier, $this->oedhfablock, PDO::PARAM_STR);
                        break;
                    case 'OedhLabelPrinted':
                        $stmt->bindValue($identifier, $this->oedhlabelprinted, PDO::PARAM_STR);
                        break;
                    case 'OedhQuoteId':
                        $stmt->bindValue($identifier, $this->oedhquoteid, PDO::PARAM_STR);
                        break;
                    case 'OedhInvPrinted':
                        $stmt->bindValue($identifier, $this->oedhinvprinted, PDO::PARAM_STR);
                        break;
                    case 'OedhStockCheck':
                        $stmt->bindValue($identifier, $this->oedhstockcheck, PDO::PARAM_STR);
                        break;
                    case 'OedhShouldWeSplit':
                        $stmt->bindValue($identifier, $this->oedhshouldwesplit, PDO::PARAM_STR);
                        break;
                    case 'OedhCofcReqd':
                        $stmt->bindValue($identifier, $this->oedhcofcreqd, PDO::PARAM_STR);
                        break;
                    case 'OedhAckCode':
                        $stmt->bindValue($identifier, $this->oedhackcode, PDO::PARAM_STR);
                        break;
                    case 'OedhWiBordNbr':
                        $stmt->bindValue($identifier, $this->oedhwibordnbr, PDO::PARAM_STR);
                        break;
                    case 'OedhCertHistOrdr':
                        $stmt->bindValue($identifier, $this->oedhcerthistordr, PDO::PARAM_STR);
                        break;
                    case 'OedhCertHistLine':
                        $stmt->bindValue($identifier, $this->oedhcerthistline, PDO::PARAM_STR);
                        break;
                    case 'OedhOrdrdAsItemId':
                        $stmt->bindValue($identifier, $this->oedhordrdasitemid, PDO::PARAM_STR);
                        break;
                    case 'OedhWiBatch1Nbr':
                        $stmt->bindValue($identifier, $this->oedhwibatch1nbr, PDO::PARAM_INT);
                        break;
                    case 'OedhWiBatch1Qty':
                        $stmt->bindValue($identifier, $this->oedhwibatch1qty, PDO::PARAM_STR);
                        break;
                    case 'OedhWiBatch1Stat':
                        $stmt->bindValue($identifier, $this->oedhwibatch1stat, PDO::PARAM_STR);
                        break;
                    case 'OedhRgaNbr':
                        $stmt->bindValue($identifier, $this->oedhrganbr, PDO::PARAM_INT);
                        break;
                    case 'OedhOrigPric':
                        $stmt->bindValue($identifier, $this->oedhorigpric, PDO::PARAM_STR);
                        break;
                    case 'OedhRefLineNbr':
                        $stmt->bindValue($identifier, $this->oedhreflinenbr, PDO::PARAM_INT);
                        break;
                    case 'OedhBinLocn':
                        $stmt->bindValue($identifier, $this->oedhbinlocn, PDO::PARAM_STR);
                        break;
                    case 'OedhAcSuplyWhse':
                        $stmt->bindValue($identifier, $this->oedhacsuplywhse, PDO::PARAM_STR);
                        break;
                    case 'OedhAcPricDate':
                        $stmt->bindValue($identifier, $this->oedhacpricdate, PDO::PARAM_STR);
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
        $pos = SalesHistoryDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOedhline();
                break;
            case 2:
                return $this->getOedhyear();
                break;
            case 3:
                return $this->getInititemnbr();
                break;
            case 4:
                return $this->getOedhdesc();
                break;
            case 5:
                return $this->getOedhdesc2();
                break;
            case 6:
                return $this->getIntbwhse();
                break;
            case 7:
                return $this->getOedhrqstdate();
                break;
            case 8:
                return $this->getOedhcancdate();
                break;
            case 9:
                return $this->getOedhshipdate();
                break;
            case 10:
                return $this->getOedhspecordr();
                break;
            case 11:
                return $this->getArtbmtaxcode();
                break;
            case 12:
                return $this->getOedhqtyord();
                break;
            case 13:
                return $this->getOedhqtyship();
                break;
            case 14:
                return $this->getOedhqtyshiptot();
                break;
            case 15:
                return $this->getOedhqtybord();
                break;
            case 16:
                return $this->getOedhpric();
                break;
            case 17:
                return $this->getOedhcost();
                break;
            case 18:
                return $this->getOedhtaxpcttot();
                break;
            case 19:
                return $this->getOedhprictot();
                break;
            case 20:
                return $this->getOedhcosttot();
                break;
            case 21:
                return $this->getOedhspcommpct();
                break;
            case 22:
                return $this->getOedhbrkncaseqty();
                break;
            case 23:
                return $this->getOedhbin();
                break;
            case 24:
                return $this->getOedhpersonalcd();
                break;
            case 25:
                return $this->getOedhacdisc1();
                break;
            case 26:
                return $this->getOedhacdisc2();
                break;
            case 27:
                return $this->getOedhacdisc3();
                break;
            case 28:
                return $this->getOedhacdisc4();
                break;
            case 29:
                return $this->getOedhlmwipnbr();
                break;
            case 30:
                return $this->getOedhcorepric();
                break;
            case 31:
                return $this->getOedhasstcode();
                break;
            case 32:
                return $this->getOedhasstqty();
                break;
            case 33:
                return $this->getOedhlistpric();
                break;
            case 34:
                return $this->getOedhstancost();
                break;
            case 35:
                return $this->getOedhvenditemjob();
                break;
            case 36:
                return $this->getOedhnsvendid();
                break;
            case 37:
                return $this->getOedhnsitemgrup();
                break;
            case 38:
                return $this->getOedhusecode();
                break;
            case 39:
                return $this->getOedhnsshipfromid();
                break;
            case 40:
                return $this->getOedhasstovrd();
                break;
            case 41:
                return $this->getOedhpricovrd();
                break;
            case 42:
                return $this->getOedhpickflag();
                break;
            case 43:
                return $this->getOedhmstrtaxcode1();
                break;
            case 44:
                return $this->getOedhmstrtaxpct1();
                break;
            case 45:
                return $this->getOedhmstrtaxcode2();
                break;
            case 46:
                return $this->getOedhmstrtaxpct2();
                break;
            case 47:
                return $this->getOedhmstrtaxcode3();
                break;
            case 48:
                return $this->getOedhmstrtaxpct3();
                break;
            case 49:
                return $this->getOedhmstrtaxcode4();
                break;
            case 50:
                return $this->getOedhmstrtaxpct4();
                break;
            case 51:
                return $this->getOedhmstrtaxcode5();
                break;
            case 52:
                return $this->getOedhmstrtaxpct5();
                break;
            case 53:
                return $this->getOedhmstrtaxcode6();
                break;
            case 54:
                return $this->getOedhmstrtaxpct6();
                break;
            case 55:
                return $this->getOedhmstrtaxcode7();
                break;
            case 56:
                return $this->getOedhmstrtaxpct7();
                break;
            case 57:
                return $this->getOedhmstrtaxcode8();
                break;
            case 58:
                return $this->getOedhmstrtaxpct8();
                break;
            case 59:
                return $this->getOedhmstrtaxcode9();
                break;
            case 60:
                return $this->getOedhmstrtaxpct9();
                break;
            case 61:
                return $this->getOedhbinarea();
                break;
            case 62:
                return $this->getOedhsplitline();
                break;
            case 63:
                return $this->getOedhlostreas();
                break;
            case 64:
                return $this->getOedhorigline();
                break;
            case 65:
                return $this->getOedhcustcrssref();
                break;
            case 66:
                return $this->getOedhuom();
                break;
            case 67:
                return $this->getOedhshipflag();
                break;
            case 68:
                return $this->getOedhkitflag();
                break;
            case 69:
                return $this->getOedhkititemnbr();
                break;
            case 70:
                return $this->getOedhbfcost();
                break;
            case 71:
                return $this->getOedhbfmsgcode();
                break;
            case 72:
                return $this->getOedhbfcosttot();
                break;
            case 73:
                return $this->getOedhlmbulkpric();
                break;
            case 74:
                return $this->getOedhlmmtrxpkgpric();
                break;
            case 75:
                return $this->getOedhlmmtrxbulkpric();
                break;
            case 76:
                return $this->getOedhlmcontractpric();
                break;
            case 77:
                return $this->getOedhwghttot();
                break;
            case 78:
                return $this->getOedhordras();
                break;
            case 79:
                return $this->getOedhpodetlinenbr();
                break;
            case 80:
                return $this->getOedhqtytoship();
                break;
            case 81:
                return $this->getOedhponbr();
                break;
            case 82:
                return $this->getOedhporef();
                break;
            case 83:
                return $this->getOedhfrtin();
                break;
            case 84:
                return $this->getOedhfrtinentered();
                break;
            case 85:
                return $this->getOedhprodcmplt();
                break;
            case 86:
                return $this->getOedherflag();
                break;
            case 87:
                return $this->getOedhorigitem();
                break;
            case 88:
                return $this->getOedhsubflag();
                break;
            case 89:
                return $this->getOedhediincomingseq();
                break;
            case 90:
                return $this->getOedhspordpoline();
                break;
            case 91:
                return $this->getOedhcatlgid();
                break;
            case 92:
                return $this->getOedhdesigncd();
                break;
            case 93:
                return $this->getOedhdiscpct();
                break;
            case 94:
                return $this->getOedhtaxamt();
                break;
            case 95:
                return $this->getOedhxusage();
                break;
            case 96:
                return $this->getOedhrqtslock();
                break;
            case 97:
                return $this->getOedhfreshfrozen();
                break;
            case 98:
                return $this->getOedhcoreflag();
                break;
            case 99:
                return $this->getOedhnssalesacct();
                break;
            case 100:
                return $this->getOedhcertreqd();
                break;
            case 101:
                return $this->getOedhaddonsales();
                break;
            case 102:
                return $this->getOedhbordflag();
                break;
            case 103:
                return $this->getOedhtempgrove();
                break;
            case 104:
                return $this->getOedhgrovedisc();
                break;
            case 105:
                return $this->getOedhoffinvc();
                break;
            case 106:
                return $this->getInititemgrup();
                break;
            case 107:
                return $this->getApvevendid();
                break;
            case 108:
                return $this->getOedhacct();
                break;
            case 109:
                return $this->getOedhloadtot();
                break;
            case 110:
                return $this->getOedhpickedqty();
                break;
            case 111:
                return $this->getOedhwiorigqty();
                break;
            case 112:
                return $this->getOedhmargintot();
                break;
            case 113:
                return $this->getOedhcorecost();
                break;
            case 114:
                return $this->getOedhitemref();
                break;
            case 115:
                return $this->getOedhsac02returncode();
                break;
            case 116:
                return $this->getOedhwgtaxcode();
                break;
            case 117:
                return $this->getOedhwgprice();
                break;
            case 118:
                return $this->getOedhwgtot();
                break;
            case 119:
                return $this->getOedhcntrqty();
                break;
            case 120:
                return $this->getOedhconfirmcode();
                break;
            case 121:
                return $this->getOedhpicked();
                break;
            case 122:
                return $this->getOedhorigrqstdate();
                break;
            case 123:
                return $this->getOedhfablock();
                break;
            case 124:
                return $this->getOedhlabelprinted();
                break;
            case 125:
                return $this->getOedhquoteid();
                break;
            case 126:
                return $this->getOedhinvprinted();
                break;
            case 127:
                return $this->getOedhstockcheck();
                break;
            case 128:
                return $this->getOedhshouldwesplit();
                break;
            case 129:
                return $this->getOedhcofcreqd();
                break;
            case 130:
                return $this->getOedhackcode();
                break;
            case 131:
                return $this->getOedhwibordnbr();
                break;
            case 132:
                return $this->getOedhcerthistordr();
                break;
            case 133:
                return $this->getOedhcerthistline();
                break;
            case 134:
                return $this->getOedhordrdasitemid();
                break;
            case 135:
                return $this->getOedhwibatch1nbr();
                break;
            case 136:
                return $this->getOedhwibatch1qty();
                break;
            case 137:
                return $this->getOedhwibatch1stat();
                break;
            case 138:
                return $this->getOedhrganbr();
                break;
            case 139:
                return $this->getOedhorigpric();
                break;
            case 140:
                return $this->getOedhreflinenbr();
                break;
            case 141:
                return $this->getOedhbinlocn();
                break;
            case 142:
                return $this->getOedhacsuplywhse();
                break;
            case 143:
                return $this->getOedhacpricdate();
                break;
            case 144:
                return $this->getDateupdtd();
                break;
            case 145:
                return $this->getTimeupdtd();
                break;
            case 146:
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

        if (isset($alreadyDumpedObjects['SalesHistoryDetail'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SalesHistoryDetail'][$this->hashCode()] = true;
        $keys = SalesHistoryDetailTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOehhnbr(),
            $keys[1] => $this->getOedhline(),
            $keys[2] => $this->getOedhyear(),
            $keys[3] => $this->getInititemnbr(),
            $keys[4] => $this->getOedhdesc(),
            $keys[5] => $this->getOedhdesc2(),
            $keys[6] => $this->getIntbwhse(),
            $keys[7] => $this->getOedhrqstdate(),
            $keys[8] => $this->getOedhcancdate(),
            $keys[9] => $this->getOedhshipdate(),
            $keys[10] => $this->getOedhspecordr(),
            $keys[11] => $this->getArtbmtaxcode(),
            $keys[12] => $this->getOedhqtyord(),
            $keys[13] => $this->getOedhqtyship(),
            $keys[14] => $this->getOedhqtyshiptot(),
            $keys[15] => $this->getOedhqtybord(),
            $keys[16] => $this->getOedhpric(),
            $keys[17] => $this->getOedhcost(),
            $keys[18] => $this->getOedhtaxpcttot(),
            $keys[19] => $this->getOedhprictot(),
            $keys[20] => $this->getOedhcosttot(),
            $keys[21] => $this->getOedhspcommpct(),
            $keys[22] => $this->getOedhbrkncaseqty(),
            $keys[23] => $this->getOedhbin(),
            $keys[24] => $this->getOedhpersonalcd(),
            $keys[25] => $this->getOedhacdisc1(),
            $keys[26] => $this->getOedhacdisc2(),
            $keys[27] => $this->getOedhacdisc3(),
            $keys[28] => $this->getOedhacdisc4(),
            $keys[29] => $this->getOedhlmwipnbr(),
            $keys[30] => $this->getOedhcorepric(),
            $keys[31] => $this->getOedhasstcode(),
            $keys[32] => $this->getOedhasstqty(),
            $keys[33] => $this->getOedhlistpric(),
            $keys[34] => $this->getOedhstancost(),
            $keys[35] => $this->getOedhvenditemjob(),
            $keys[36] => $this->getOedhnsvendid(),
            $keys[37] => $this->getOedhnsitemgrup(),
            $keys[38] => $this->getOedhusecode(),
            $keys[39] => $this->getOedhnsshipfromid(),
            $keys[40] => $this->getOedhasstovrd(),
            $keys[41] => $this->getOedhpricovrd(),
            $keys[42] => $this->getOedhpickflag(),
            $keys[43] => $this->getOedhmstrtaxcode1(),
            $keys[44] => $this->getOedhmstrtaxpct1(),
            $keys[45] => $this->getOedhmstrtaxcode2(),
            $keys[46] => $this->getOedhmstrtaxpct2(),
            $keys[47] => $this->getOedhmstrtaxcode3(),
            $keys[48] => $this->getOedhmstrtaxpct3(),
            $keys[49] => $this->getOedhmstrtaxcode4(),
            $keys[50] => $this->getOedhmstrtaxpct4(),
            $keys[51] => $this->getOedhmstrtaxcode5(),
            $keys[52] => $this->getOedhmstrtaxpct5(),
            $keys[53] => $this->getOedhmstrtaxcode6(),
            $keys[54] => $this->getOedhmstrtaxpct6(),
            $keys[55] => $this->getOedhmstrtaxcode7(),
            $keys[56] => $this->getOedhmstrtaxpct7(),
            $keys[57] => $this->getOedhmstrtaxcode8(),
            $keys[58] => $this->getOedhmstrtaxpct8(),
            $keys[59] => $this->getOedhmstrtaxcode9(),
            $keys[60] => $this->getOedhmstrtaxpct9(),
            $keys[61] => $this->getOedhbinarea(),
            $keys[62] => $this->getOedhsplitline(),
            $keys[63] => $this->getOedhlostreas(),
            $keys[64] => $this->getOedhorigline(),
            $keys[65] => $this->getOedhcustcrssref(),
            $keys[66] => $this->getOedhuom(),
            $keys[67] => $this->getOedhshipflag(),
            $keys[68] => $this->getOedhkitflag(),
            $keys[69] => $this->getOedhkititemnbr(),
            $keys[70] => $this->getOedhbfcost(),
            $keys[71] => $this->getOedhbfmsgcode(),
            $keys[72] => $this->getOedhbfcosttot(),
            $keys[73] => $this->getOedhlmbulkpric(),
            $keys[74] => $this->getOedhlmmtrxpkgpric(),
            $keys[75] => $this->getOedhlmmtrxbulkpric(),
            $keys[76] => $this->getOedhlmcontractpric(),
            $keys[77] => $this->getOedhwghttot(),
            $keys[78] => $this->getOedhordras(),
            $keys[79] => $this->getOedhpodetlinenbr(),
            $keys[80] => $this->getOedhqtytoship(),
            $keys[81] => $this->getOedhponbr(),
            $keys[82] => $this->getOedhporef(),
            $keys[83] => $this->getOedhfrtin(),
            $keys[84] => $this->getOedhfrtinentered(),
            $keys[85] => $this->getOedhprodcmplt(),
            $keys[86] => $this->getOedherflag(),
            $keys[87] => $this->getOedhorigitem(),
            $keys[88] => $this->getOedhsubflag(),
            $keys[89] => $this->getOedhediincomingseq(),
            $keys[90] => $this->getOedhspordpoline(),
            $keys[91] => $this->getOedhcatlgid(),
            $keys[92] => $this->getOedhdesigncd(),
            $keys[93] => $this->getOedhdiscpct(),
            $keys[94] => $this->getOedhtaxamt(),
            $keys[95] => $this->getOedhxusage(),
            $keys[96] => $this->getOedhrqtslock(),
            $keys[97] => $this->getOedhfreshfrozen(),
            $keys[98] => $this->getOedhcoreflag(),
            $keys[99] => $this->getOedhnssalesacct(),
            $keys[100] => $this->getOedhcertreqd(),
            $keys[101] => $this->getOedhaddonsales(),
            $keys[102] => $this->getOedhbordflag(),
            $keys[103] => $this->getOedhtempgrove(),
            $keys[104] => $this->getOedhgrovedisc(),
            $keys[105] => $this->getOedhoffinvc(),
            $keys[106] => $this->getInititemgrup(),
            $keys[107] => $this->getApvevendid(),
            $keys[108] => $this->getOedhacct(),
            $keys[109] => $this->getOedhloadtot(),
            $keys[110] => $this->getOedhpickedqty(),
            $keys[111] => $this->getOedhwiorigqty(),
            $keys[112] => $this->getOedhmargintot(),
            $keys[113] => $this->getOedhcorecost(),
            $keys[114] => $this->getOedhitemref(),
            $keys[115] => $this->getOedhsac02returncode(),
            $keys[116] => $this->getOedhwgtaxcode(),
            $keys[117] => $this->getOedhwgprice(),
            $keys[118] => $this->getOedhwgtot(),
            $keys[119] => $this->getOedhcntrqty(),
            $keys[120] => $this->getOedhconfirmcode(),
            $keys[121] => $this->getOedhpicked(),
            $keys[122] => $this->getOedhorigrqstdate(),
            $keys[123] => $this->getOedhfablock(),
            $keys[124] => $this->getOedhlabelprinted(),
            $keys[125] => $this->getOedhquoteid(),
            $keys[126] => $this->getOedhinvprinted(),
            $keys[127] => $this->getOedhstockcheck(),
            $keys[128] => $this->getOedhshouldwesplit(),
            $keys[129] => $this->getOedhcofcreqd(),
            $keys[130] => $this->getOedhackcode(),
            $keys[131] => $this->getOedhwibordnbr(),
            $keys[132] => $this->getOedhcerthistordr(),
            $keys[133] => $this->getOedhcerthistline(),
            $keys[134] => $this->getOedhordrdasitemid(),
            $keys[135] => $this->getOedhwibatch1nbr(),
            $keys[136] => $this->getOedhwibatch1qty(),
            $keys[137] => $this->getOedhwibatch1stat(),
            $keys[138] => $this->getOedhrganbr(),
            $keys[139] => $this->getOedhorigpric(),
            $keys[140] => $this->getOedhreflinenbr(),
            $keys[141] => $this->getOedhbinlocn(),
            $keys[142] => $this->getOedhacsuplywhse(),
            $keys[143] => $this->getOedhacpricdate(),
            $keys[144] => $this->getDateupdtd(),
            $keys[145] => $this->getTimeupdtd(),
            $keys[146] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSalesHistory) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'salesHistory';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'so_head_hist';
                        break;
                    default:
                        $key = 'SalesHistory';
                }

                $result[$key] = $this->aSalesHistory->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aItemMasterItem) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'itemMasterItem';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_item_mast';
                        break;
                    default:
                        $key = 'ItemMasterItem';
                }

                $result[$key] = $this->aItemMasterItem->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\SalesHistoryDetail
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = SalesHistoryDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\SalesHistoryDetail
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setOehhnbr($value);
                break;
            case 1:
                $this->setOedhline($value);
                break;
            case 2:
                $this->setOedhyear($value);
                break;
            case 3:
                $this->setInititemnbr($value);
                break;
            case 4:
                $this->setOedhdesc($value);
                break;
            case 5:
                $this->setOedhdesc2($value);
                break;
            case 6:
                $this->setIntbwhse($value);
                break;
            case 7:
                $this->setOedhrqstdate($value);
                break;
            case 8:
                $this->setOedhcancdate($value);
                break;
            case 9:
                $this->setOedhshipdate($value);
                break;
            case 10:
                $this->setOedhspecordr($value);
                break;
            case 11:
                $this->setArtbmtaxcode($value);
                break;
            case 12:
                $this->setOedhqtyord($value);
                break;
            case 13:
                $this->setOedhqtyship($value);
                break;
            case 14:
                $this->setOedhqtyshiptot($value);
                break;
            case 15:
                $this->setOedhqtybord($value);
                break;
            case 16:
                $this->setOedhpric($value);
                break;
            case 17:
                $this->setOedhcost($value);
                break;
            case 18:
                $this->setOedhtaxpcttot($value);
                break;
            case 19:
                $this->setOedhprictot($value);
                break;
            case 20:
                $this->setOedhcosttot($value);
                break;
            case 21:
                $this->setOedhspcommpct($value);
                break;
            case 22:
                $this->setOedhbrkncaseqty($value);
                break;
            case 23:
                $this->setOedhbin($value);
                break;
            case 24:
                $this->setOedhpersonalcd($value);
                break;
            case 25:
                $this->setOedhacdisc1($value);
                break;
            case 26:
                $this->setOedhacdisc2($value);
                break;
            case 27:
                $this->setOedhacdisc3($value);
                break;
            case 28:
                $this->setOedhacdisc4($value);
                break;
            case 29:
                $this->setOedhlmwipnbr($value);
                break;
            case 30:
                $this->setOedhcorepric($value);
                break;
            case 31:
                $this->setOedhasstcode($value);
                break;
            case 32:
                $this->setOedhasstqty($value);
                break;
            case 33:
                $this->setOedhlistpric($value);
                break;
            case 34:
                $this->setOedhstancost($value);
                break;
            case 35:
                $this->setOedhvenditemjob($value);
                break;
            case 36:
                $this->setOedhnsvendid($value);
                break;
            case 37:
                $this->setOedhnsitemgrup($value);
                break;
            case 38:
                $this->setOedhusecode($value);
                break;
            case 39:
                $this->setOedhnsshipfromid($value);
                break;
            case 40:
                $this->setOedhasstovrd($value);
                break;
            case 41:
                $this->setOedhpricovrd($value);
                break;
            case 42:
                $this->setOedhpickflag($value);
                break;
            case 43:
                $this->setOedhmstrtaxcode1($value);
                break;
            case 44:
                $this->setOedhmstrtaxpct1($value);
                break;
            case 45:
                $this->setOedhmstrtaxcode2($value);
                break;
            case 46:
                $this->setOedhmstrtaxpct2($value);
                break;
            case 47:
                $this->setOedhmstrtaxcode3($value);
                break;
            case 48:
                $this->setOedhmstrtaxpct3($value);
                break;
            case 49:
                $this->setOedhmstrtaxcode4($value);
                break;
            case 50:
                $this->setOedhmstrtaxpct4($value);
                break;
            case 51:
                $this->setOedhmstrtaxcode5($value);
                break;
            case 52:
                $this->setOedhmstrtaxpct5($value);
                break;
            case 53:
                $this->setOedhmstrtaxcode6($value);
                break;
            case 54:
                $this->setOedhmstrtaxpct6($value);
                break;
            case 55:
                $this->setOedhmstrtaxcode7($value);
                break;
            case 56:
                $this->setOedhmstrtaxpct7($value);
                break;
            case 57:
                $this->setOedhmstrtaxcode8($value);
                break;
            case 58:
                $this->setOedhmstrtaxpct8($value);
                break;
            case 59:
                $this->setOedhmstrtaxcode9($value);
                break;
            case 60:
                $this->setOedhmstrtaxpct9($value);
                break;
            case 61:
                $this->setOedhbinarea($value);
                break;
            case 62:
                $this->setOedhsplitline($value);
                break;
            case 63:
                $this->setOedhlostreas($value);
                break;
            case 64:
                $this->setOedhorigline($value);
                break;
            case 65:
                $this->setOedhcustcrssref($value);
                break;
            case 66:
                $this->setOedhuom($value);
                break;
            case 67:
                $this->setOedhshipflag($value);
                break;
            case 68:
                $this->setOedhkitflag($value);
                break;
            case 69:
                $this->setOedhkititemnbr($value);
                break;
            case 70:
                $this->setOedhbfcost($value);
                break;
            case 71:
                $this->setOedhbfmsgcode($value);
                break;
            case 72:
                $this->setOedhbfcosttot($value);
                break;
            case 73:
                $this->setOedhlmbulkpric($value);
                break;
            case 74:
                $this->setOedhlmmtrxpkgpric($value);
                break;
            case 75:
                $this->setOedhlmmtrxbulkpric($value);
                break;
            case 76:
                $this->setOedhlmcontractpric($value);
                break;
            case 77:
                $this->setOedhwghttot($value);
                break;
            case 78:
                $this->setOedhordras($value);
                break;
            case 79:
                $this->setOedhpodetlinenbr($value);
                break;
            case 80:
                $this->setOedhqtytoship($value);
                break;
            case 81:
                $this->setOedhponbr($value);
                break;
            case 82:
                $this->setOedhporef($value);
                break;
            case 83:
                $this->setOedhfrtin($value);
                break;
            case 84:
                $this->setOedhfrtinentered($value);
                break;
            case 85:
                $this->setOedhprodcmplt($value);
                break;
            case 86:
                $this->setOedherflag($value);
                break;
            case 87:
                $this->setOedhorigitem($value);
                break;
            case 88:
                $this->setOedhsubflag($value);
                break;
            case 89:
                $this->setOedhediincomingseq($value);
                break;
            case 90:
                $this->setOedhspordpoline($value);
                break;
            case 91:
                $this->setOedhcatlgid($value);
                break;
            case 92:
                $this->setOedhdesigncd($value);
                break;
            case 93:
                $this->setOedhdiscpct($value);
                break;
            case 94:
                $this->setOedhtaxamt($value);
                break;
            case 95:
                $this->setOedhxusage($value);
                break;
            case 96:
                $this->setOedhrqtslock($value);
                break;
            case 97:
                $this->setOedhfreshfrozen($value);
                break;
            case 98:
                $this->setOedhcoreflag($value);
                break;
            case 99:
                $this->setOedhnssalesacct($value);
                break;
            case 100:
                $this->setOedhcertreqd($value);
                break;
            case 101:
                $this->setOedhaddonsales($value);
                break;
            case 102:
                $this->setOedhbordflag($value);
                break;
            case 103:
                $this->setOedhtempgrove($value);
                break;
            case 104:
                $this->setOedhgrovedisc($value);
                break;
            case 105:
                $this->setOedhoffinvc($value);
                break;
            case 106:
                $this->setInititemgrup($value);
                break;
            case 107:
                $this->setApvevendid($value);
                break;
            case 108:
                $this->setOedhacct($value);
                break;
            case 109:
                $this->setOedhloadtot($value);
                break;
            case 110:
                $this->setOedhpickedqty($value);
                break;
            case 111:
                $this->setOedhwiorigqty($value);
                break;
            case 112:
                $this->setOedhmargintot($value);
                break;
            case 113:
                $this->setOedhcorecost($value);
                break;
            case 114:
                $this->setOedhitemref($value);
                break;
            case 115:
                $this->setOedhsac02returncode($value);
                break;
            case 116:
                $this->setOedhwgtaxcode($value);
                break;
            case 117:
                $this->setOedhwgprice($value);
                break;
            case 118:
                $this->setOedhwgtot($value);
                break;
            case 119:
                $this->setOedhcntrqty($value);
                break;
            case 120:
                $this->setOedhconfirmcode($value);
                break;
            case 121:
                $this->setOedhpicked($value);
                break;
            case 122:
                $this->setOedhorigrqstdate($value);
                break;
            case 123:
                $this->setOedhfablock($value);
                break;
            case 124:
                $this->setOedhlabelprinted($value);
                break;
            case 125:
                $this->setOedhquoteid($value);
                break;
            case 126:
                $this->setOedhinvprinted($value);
                break;
            case 127:
                $this->setOedhstockcheck($value);
                break;
            case 128:
                $this->setOedhshouldwesplit($value);
                break;
            case 129:
                $this->setOedhcofcreqd($value);
                break;
            case 130:
                $this->setOedhackcode($value);
                break;
            case 131:
                $this->setOedhwibordnbr($value);
                break;
            case 132:
                $this->setOedhcerthistordr($value);
                break;
            case 133:
                $this->setOedhcerthistline($value);
                break;
            case 134:
                $this->setOedhordrdasitemid($value);
                break;
            case 135:
                $this->setOedhwibatch1nbr($value);
                break;
            case 136:
                $this->setOedhwibatch1qty($value);
                break;
            case 137:
                $this->setOedhwibatch1stat($value);
                break;
            case 138:
                $this->setOedhrganbr($value);
                break;
            case 139:
                $this->setOedhorigpric($value);
                break;
            case 140:
                $this->setOedhreflinenbr($value);
                break;
            case 141:
                $this->setOedhbinlocn($value);
                break;
            case 142:
                $this->setOedhacsuplywhse($value);
                break;
            case 143:
                $this->setOedhacpricdate($value);
                break;
            case 144:
                $this->setDateupdtd($value);
                break;
            case 145:
                $this->setTimeupdtd($value);
                break;
            case 146:
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
        $keys = SalesHistoryDetailTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setOehhnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOedhline($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setOedhyear($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setInititemnbr($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOedhdesc($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setOedhdesc2($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIntbwhse($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOedhrqstdate($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOedhcancdate($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOedhshipdate($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOedhspecordr($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArtbmtaxcode($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOedhqtyord($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOedhqtyship($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOedhqtyshiptot($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOedhqtybord($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setOedhpric($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setOedhcost($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setOedhtaxpcttot($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setOedhprictot($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setOedhcosttot($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setOedhspcommpct($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setOedhbrkncaseqty($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setOedhbin($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setOedhpersonalcd($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setOedhacdisc1($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setOedhacdisc2($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setOedhacdisc3($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setOedhacdisc4($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setOedhlmwipnbr($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setOedhcorepric($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setOedhasstcode($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setOedhasstqty($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setOedhlistpric($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setOedhstancost($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setOedhvenditemjob($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setOedhnsvendid($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setOedhnsitemgrup($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setOedhusecode($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setOedhnsshipfromid($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setOedhasstovrd($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setOedhpricovrd($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setOedhpickflag($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setOedhmstrtaxcode1($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setOedhmstrtaxpct1($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setOedhmstrtaxcode2($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setOedhmstrtaxpct2($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setOedhmstrtaxcode3($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setOedhmstrtaxpct3($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setOedhmstrtaxcode4($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setOedhmstrtaxpct4($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setOedhmstrtaxcode5($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setOedhmstrtaxpct5($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setOedhmstrtaxcode6($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setOedhmstrtaxpct6($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setOedhmstrtaxcode7($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setOedhmstrtaxpct7($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setOedhmstrtaxcode8($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setOedhmstrtaxpct8($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setOedhmstrtaxcode9($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setOedhmstrtaxpct9($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setOedhbinarea($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setOedhsplitline($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setOedhlostreas($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setOedhorigline($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setOedhcustcrssref($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setOedhuom($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setOedhshipflag($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setOedhkitflag($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setOedhkititemnbr($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setOedhbfcost($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setOedhbfmsgcode($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setOedhbfcosttot($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setOedhlmbulkpric($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setOedhlmmtrxpkgpric($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setOedhlmmtrxbulkpric($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setOedhlmcontractpric($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setOedhwghttot($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setOedhordras($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setOedhpodetlinenbr($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setOedhqtytoship($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setOedhponbr($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setOedhporef($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setOedhfrtin($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setOedhfrtinentered($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setOedhprodcmplt($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setOedherflag($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setOedhorigitem($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setOedhsubflag($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setOedhediincomingseq($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setOedhspordpoline($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setOedhcatlgid($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setOedhdesigncd($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setOedhdiscpct($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setOedhtaxamt($arr[$keys[94]]);
        }
        if (array_key_exists($keys[95], $arr)) {
            $this->setOedhxusage($arr[$keys[95]]);
        }
        if (array_key_exists($keys[96], $arr)) {
            $this->setOedhrqtslock($arr[$keys[96]]);
        }
        if (array_key_exists($keys[97], $arr)) {
            $this->setOedhfreshfrozen($arr[$keys[97]]);
        }
        if (array_key_exists($keys[98], $arr)) {
            $this->setOedhcoreflag($arr[$keys[98]]);
        }
        if (array_key_exists($keys[99], $arr)) {
            $this->setOedhnssalesacct($arr[$keys[99]]);
        }
        if (array_key_exists($keys[100], $arr)) {
            $this->setOedhcertreqd($arr[$keys[100]]);
        }
        if (array_key_exists($keys[101], $arr)) {
            $this->setOedhaddonsales($arr[$keys[101]]);
        }
        if (array_key_exists($keys[102], $arr)) {
            $this->setOedhbordflag($arr[$keys[102]]);
        }
        if (array_key_exists($keys[103], $arr)) {
            $this->setOedhtempgrove($arr[$keys[103]]);
        }
        if (array_key_exists($keys[104], $arr)) {
            $this->setOedhgrovedisc($arr[$keys[104]]);
        }
        if (array_key_exists($keys[105], $arr)) {
            $this->setOedhoffinvc($arr[$keys[105]]);
        }
        if (array_key_exists($keys[106], $arr)) {
            $this->setInititemgrup($arr[$keys[106]]);
        }
        if (array_key_exists($keys[107], $arr)) {
            $this->setApvevendid($arr[$keys[107]]);
        }
        if (array_key_exists($keys[108], $arr)) {
            $this->setOedhacct($arr[$keys[108]]);
        }
        if (array_key_exists($keys[109], $arr)) {
            $this->setOedhloadtot($arr[$keys[109]]);
        }
        if (array_key_exists($keys[110], $arr)) {
            $this->setOedhpickedqty($arr[$keys[110]]);
        }
        if (array_key_exists($keys[111], $arr)) {
            $this->setOedhwiorigqty($arr[$keys[111]]);
        }
        if (array_key_exists($keys[112], $arr)) {
            $this->setOedhmargintot($arr[$keys[112]]);
        }
        if (array_key_exists($keys[113], $arr)) {
            $this->setOedhcorecost($arr[$keys[113]]);
        }
        if (array_key_exists($keys[114], $arr)) {
            $this->setOedhitemref($arr[$keys[114]]);
        }
        if (array_key_exists($keys[115], $arr)) {
            $this->setOedhsac02returncode($arr[$keys[115]]);
        }
        if (array_key_exists($keys[116], $arr)) {
            $this->setOedhwgtaxcode($arr[$keys[116]]);
        }
        if (array_key_exists($keys[117], $arr)) {
            $this->setOedhwgprice($arr[$keys[117]]);
        }
        if (array_key_exists($keys[118], $arr)) {
            $this->setOedhwgtot($arr[$keys[118]]);
        }
        if (array_key_exists($keys[119], $arr)) {
            $this->setOedhcntrqty($arr[$keys[119]]);
        }
        if (array_key_exists($keys[120], $arr)) {
            $this->setOedhconfirmcode($arr[$keys[120]]);
        }
        if (array_key_exists($keys[121], $arr)) {
            $this->setOedhpicked($arr[$keys[121]]);
        }
        if (array_key_exists($keys[122], $arr)) {
            $this->setOedhorigrqstdate($arr[$keys[122]]);
        }
        if (array_key_exists($keys[123], $arr)) {
            $this->setOedhfablock($arr[$keys[123]]);
        }
        if (array_key_exists($keys[124], $arr)) {
            $this->setOedhlabelprinted($arr[$keys[124]]);
        }
        if (array_key_exists($keys[125], $arr)) {
            $this->setOedhquoteid($arr[$keys[125]]);
        }
        if (array_key_exists($keys[126], $arr)) {
            $this->setOedhinvprinted($arr[$keys[126]]);
        }
        if (array_key_exists($keys[127], $arr)) {
            $this->setOedhstockcheck($arr[$keys[127]]);
        }
        if (array_key_exists($keys[128], $arr)) {
            $this->setOedhshouldwesplit($arr[$keys[128]]);
        }
        if (array_key_exists($keys[129], $arr)) {
            $this->setOedhcofcreqd($arr[$keys[129]]);
        }
        if (array_key_exists($keys[130], $arr)) {
            $this->setOedhackcode($arr[$keys[130]]);
        }
        if (array_key_exists($keys[131], $arr)) {
            $this->setOedhwibordnbr($arr[$keys[131]]);
        }
        if (array_key_exists($keys[132], $arr)) {
            $this->setOedhcerthistordr($arr[$keys[132]]);
        }
        if (array_key_exists($keys[133], $arr)) {
            $this->setOedhcerthistline($arr[$keys[133]]);
        }
        if (array_key_exists($keys[134], $arr)) {
            $this->setOedhordrdasitemid($arr[$keys[134]]);
        }
        if (array_key_exists($keys[135], $arr)) {
            $this->setOedhwibatch1nbr($arr[$keys[135]]);
        }
        if (array_key_exists($keys[136], $arr)) {
            $this->setOedhwibatch1qty($arr[$keys[136]]);
        }
        if (array_key_exists($keys[137], $arr)) {
            $this->setOedhwibatch1stat($arr[$keys[137]]);
        }
        if (array_key_exists($keys[138], $arr)) {
            $this->setOedhrganbr($arr[$keys[138]]);
        }
        if (array_key_exists($keys[139], $arr)) {
            $this->setOedhorigpric($arr[$keys[139]]);
        }
        if (array_key_exists($keys[140], $arr)) {
            $this->setOedhreflinenbr($arr[$keys[140]]);
        }
        if (array_key_exists($keys[141], $arr)) {
            $this->setOedhbinlocn($arr[$keys[141]]);
        }
        if (array_key_exists($keys[142], $arr)) {
            $this->setOedhacsuplywhse($arr[$keys[142]]);
        }
        if (array_key_exists($keys[143], $arr)) {
            $this->setOedhacpricdate($arr[$keys[143]]);
        }
        if (array_key_exists($keys[144], $arr)) {
            $this->setDateupdtd($arr[$keys[144]]);
        }
        if (array_key_exists($keys[145], $arr)) {
            $this->setTimeupdtd($arr[$keys[145]]);
        }
        if (array_key_exists($keys[146], $arr)) {
            $this->setDummy($arr[$keys[146]]);
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
     * @return $this|\SalesHistoryDetail The current object, for fluid interface
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
        $criteria = new Criteria(SalesHistoryDetailTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEHHNBR)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEHHNBR, $this->oehhnbr);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLINE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHLINE, $this->oedhline);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHYEAR)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHYEAR, $this->oedhyear);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_INITITEMNBR)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHDESC)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHDESC, $this->oedhdesc);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHDESC2)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHDESC2, $this->oedhdesc2);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_INTBWHSE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHRQSTDATE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHRQSTDATE, $this->oedhrqstdate);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCANCDATE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCANCDATE, $this->oedhcancdate);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSHIPDATE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHSHIPDATE, $this->oedhshipdate);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSPECORDR)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHSPECORDR, $this->oedhspecordr);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_ARTBMTAXCODE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_ARTBMTAXCODE, $this->artbmtaxcode);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHQTYORD)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHQTYORD, $this->oedhqtyord);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHQTYSHIP)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHQTYSHIP, $this->oedhqtyship);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHQTYSHIPTOT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHQTYSHIPTOT, $this->oedhqtyshiptot);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHQTYBORD)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHQTYBORD, $this->oedhqtybord);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPRIC)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHPRIC, $this->oedhpric);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCOST)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCOST, $this->oedhcost);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHTAXPCTTOT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHTAXPCTTOT, $this->oedhtaxpcttot);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPRICTOT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHPRICTOT, $this->oedhprictot);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCOSTTOT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCOSTTOT, $this->oedhcosttot);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSPCOMMPCT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHSPCOMMPCT, $this->oedhspcommpct);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBRKNCASEQTY)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHBRKNCASEQTY, $this->oedhbrkncaseqty);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBIN)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHBIN, $this->oedhbin);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPERSONALCD)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHPERSONALCD, $this->oedhpersonalcd);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACDISC1)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHACDISC1, $this->oedhacdisc1);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACDISC2)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHACDISC2, $this->oedhacdisc2);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACDISC3)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHACDISC3, $this->oedhacdisc3);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACDISC4)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHACDISC4, $this->oedhacdisc4);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLMWIPNBR)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHLMWIPNBR, $this->oedhlmwipnbr);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCOREPRIC)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCOREPRIC, $this->oedhcorepric);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHASSTCODE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHASSTCODE, $this->oedhasstcode);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHASSTQTY)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHASSTQTY, $this->oedhasstqty);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLISTPRIC)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHLISTPRIC, $this->oedhlistpric);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSTANCOST)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHSTANCOST, $this->oedhstancost);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHVENDITEMJOB)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHVENDITEMJOB, $this->oedhvenditemjob);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHNSVENDID)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHNSVENDID, $this->oedhnsvendid);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHNSITEMGRUP)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHNSITEMGRUP, $this->oedhnsitemgrup);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHUSECODE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHUSECODE, $this->oedhusecode);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHNSSHIPFROMID)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHNSSHIPFROMID, $this->oedhnsshipfromid);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHASSTOVRD)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHASSTOVRD, $this->oedhasstovrd);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPRICOVRD)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHPRICOVRD, $this->oedhpricovrd);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPICKFLAG)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHPICKFLAG, $this->oedhpickflag);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE1)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE1, $this->oedhmstrtaxcode1);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT1)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT1, $this->oedhmstrtaxpct1);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE2)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE2, $this->oedhmstrtaxcode2);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT2)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT2, $this->oedhmstrtaxpct2);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE3)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE3, $this->oedhmstrtaxcode3);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT3)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT3, $this->oedhmstrtaxpct3);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE4)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE4, $this->oedhmstrtaxcode4);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT4)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT4, $this->oedhmstrtaxpct4);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE5)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE5, $this->oedhmstrtaxcode5);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT5)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT5, $this->oedhmstrtaxpct5);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE6)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE6, $this->oedhmstrtaxcode6);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT6)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT6, $this->oedhmstrtaxpct6);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE7)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE7, $this->oedhmstrtaxcode7);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT7)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT7, $this->oedhmstrtaxpct7);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE8)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE8, $this->oedhmstrtaxcode8);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT8)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT8, $this->oedhmstrtaxpct8);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE9)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXCODE9, $this->oedhmstrtaxcode9);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT9)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMSTRTAXPCT9, $this->oedhmstrtaxpct9);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBINAREA)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHBINAREA, $this->oedhbinarea);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSPLITLINE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHSPLITLINE, $this->oedhsplitline);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLOSTREAS)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHLOSTREAS, $this->oedhlostreas);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHORIGLINE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHORIGLINE, $this->oedhorigline);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCUSTCRSSREF)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCUSTCRSSREF, $this->oedhcustcrssref);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHUOM)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHUOM, $this->oedhuom);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSHIPFLAG)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHSHIPFLAG, $this->oedhshipflag);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHKITFLAG)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHKITFLAG, $this->oedhkitflag);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHKITITEMNBR)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHKITITEMNBR, $this->oedhkititemnbr);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBFCOST)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHBFCOST, $this->oedhbfcost);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBFMSGCODE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHBFMSGCODE, $this->oedhbfmsgcode);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBFCOSTTOT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHBFCOSTTOT, $this->oedhbfcosttot);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLMBULKPRIC)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHLMBULKPRIC, $this->oedhlmbulkpric);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLMMTRXPKGPRIC)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHLMMTRXPKGPRIC, $this->oedhlmmtrxpkgpric);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLMMTRXBULKPRIC)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHLMMTRXBULKPRIC, $this->oedhlmmtrxbulkpric);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLMCONTRACTPRIC)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHLMCONTRACTPRIC, $this->oedhlmcontractpric);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWGHTTOT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHWGHTTOT, $this->oedhwghttot);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHORDRAS)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHORDRAS, $this->oedhordras);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPODETLINENBR)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHPODETLINENBR, $this->oedhpodetlinenbr);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHQTYTOSHIP)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHQTYTOSHIP, $this->oedhqtytoship);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPONBR)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHPONBR, $this->oedhponbr);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPOREF)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHPOREF, $this->oedhporef);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHFRTIN)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHFRTIN, $this->oedhfrtin);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHFRTINENTERED)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHFRTINENTERED, $this->oedhfrtinentered);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPRODCMPLT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHPRODCMPLT, $this->oedhprodcmplt);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHERFLAG)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHERFLAG, $this->oedherflag);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHORIGITEM)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHORIGITEM, $this->oedhorigitem);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSUBFLAG)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHSUBFLAG, $this->oedhsubflag);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHEDIINCOMINGSEQ)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHEDIINCOMINGSEQ, $this->oedhediincomingseq);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSPORDPOLINE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHSPORDPOLINE, $this->oedhspordpoline);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCATLGID)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCATLGID, $this->oedhcatlgid);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHDESIGNCD)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHDESIGNCD, $this->oedhdesigncd);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHDISCPCT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHDISCPCT, $this->oedhdiscpct);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHTAXAMT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHTAXAMT, $this->oedhtaxamt);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHXUSAGE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHXUSAGE, $this->oedhxusage);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHRQTSLOCK)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHRQTSLOCK, $this->oedhrqtslock);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHFRESHFROZEN)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHFRESHFROZEN, $this->oedhfreshfrozen);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCOREFLAG)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCOREFLAG, $this->oedhcoreflag);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHNSSALESACCT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHNSSALESACCT, $this->oedhnssalesacct);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCERTREQD)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCERTREQD, $this->oedhcertreqd);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHADDONSALES)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHADDONSALES, $this->oedhaddonsales);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBORDFLAG)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHBORDFLAG, $this->oedhbordflag);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHTEMPGROVE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHTEMPGROVE, $this->oedhtempgrove);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHGROVEDISC)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHGROVEDISC, $this->oedhgrovedisc);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHOFFINVC)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHOFFINVC, $this->oedhoffinvc);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_INITITEMGRUP)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_INITITEMGRUP, $this->inititemgrup);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_APVEVENDID)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_APVEVENDID, $this->apvevendid);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACCT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHACCT, $this->oedhacct);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLOADTOT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHLOADTOT, $this->oedhloadtot);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPICKEDQTY)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHPICKEDQTY, $this->oedhpickedqty);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWIORIGQTY)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHWIORIGQTY, $this->oedhwiorigqty);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHMARGINTOT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHMARGINTOT, $this->oedhmargintot);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCORECOST)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCORECOST, $this->oedhcorecost);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHITEMREF)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHITEMREF, $this->oedhitemref);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSAC02RETURNCODE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHSAC02RETURNCODE, $this->oedhsac02returncode);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWGTAXCODE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHWGTAXCODE, $this->oedhwgtaxcode);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWGPRICE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHWGPRICE, $this->oedhwgprice);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWGTOT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHWGTOT, $this->oedhwgtot);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCNTRQTY)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCNTRQTY, $this->oedhcntrqty);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCONFIRMCODE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCONFIRMCODE, $this->oedhconfirmcode);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHPICKED)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHPICKED, $this->oedhpicked);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHORIGRQSTDATE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHORIGRQSTDATE, $this->oedhorigrqstdate);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHFABLOCK)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHFABLOCK, $this->oedhfablock);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHLABELPRINTED)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHLABELPRINTED, $this->oedhlabelprinted);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHQUOTEID)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHQUOTEID, $this->oedhquoteid);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHINVPRINTED)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHINVPRINTED, $this->oedhinvprinted);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSTOCKCHECK)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHSTOCKCHECK, $this->oedhstockcheck);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHSHOULDWESPLIT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHSHOULDWESPLIT, $this->oedhshouldwesplit);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCOFCREQD)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCOFCREQD, $this->oedhcofcreqd);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACKCODE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHACKCODE, $this->oedhackcode);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWIBORDNBR)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHWIBORDNBR, $this->oedhwibordnbr);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCERTHISTORDR)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCERTHISTORDR, $this->oedhcerthistordr);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHCERTHISTLINE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHCERTHISTLINE, $this->oedhcerthistline);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHORDRDASITEMID)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHORDRDASITEMID, $this->oedhordrdasitemid);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1NBR)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1NBR, $this->oedhwibatch1nbr);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1QTY)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1QTY, $this->oedhwibatch1qty);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1STAT)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHWIBATCH1STAT, $this->oedhwibatch1stat);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHRGANBR)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHRGANBR, $this->oedhrganbr);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHORIGPRIC)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHORIGPRIC, $this->oedhorigpric);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHREFLINENBR)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHREFLINENBR, $this->oedhreflinenbr);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHBINLOCN)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHBINLOCN, $this->oedhbinlocn);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACSUPLYWHSE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHACSUPLYWHSE, $this->oedhacsuplywhse);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_OEDHACPRICDATE)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_OEDHACPRICDATE, $this->oedhacpricdate);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_DATEUPDTD)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_TIMEUPDTD)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(SalesHistoryDetailTableMap::COL_DUMMY)) {
            $criteria->add(SalesHistoryDetailTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildSalesHistoryDetailQuery::create();
        $criteria->add(SalesHistoryDetailTableMap::COL_OEHHNBR, $this->oehhnbr);
        $criteria->add(SalesHistoryDetailTableMap::COL_OEDHLINE, $this->oedhline);

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
        $validPk = null !== $this->getOehhnbr() &&
            null !== $this->getOedhline();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation saleshistory to table so_head_hist
        if ($this->aSalesHistory && $hash = spl_object_hash($this->aSalesHistory)) {
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
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getOehhnbr();
        $pks[1] = $this->getOedhline();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param      array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setOehhnbr($keys[0]);
        $this->setOedhline($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getOehhnbr()) && (null === $this->getOedhline());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \SalesHistoryDetail (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOehhnbr($this->getOehhnbr());
        $copyObj->setOedhline($this->getOedhline());
        $copyObj->setOedhyear($this->getOedhyear());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setOedhdesc($this->getOedhdesc());
        $copyObj->setOedhdesc2($this->getOedhdesc2());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setOedhrqstdate($this->getOedhrqstdate());
        $copyObj->setOedhcancdate($this->getOedhcancdate());
        $copyObj->setOedhshipdate($this->getOedhshipdate());
        $copyObj->setOedhspecordr($this->getOedhspecordr());
        $copyObj->setArtbmtaxcode($this->getArtbmtaxcode());
        $copyObj->setOedhqtyord($this->getOedhqtyord());
        $copyObj->setOedhqtyship($this->getOedhqtyship());
        $copyObj->setOedhqtyshiptot($this->getOedhqtyshiptot());
        $copyObj->setOedhqtybord($this->getOedhqtybord());
        $copyObj->setOedhpric($this->getOedhpric());
        $copyObj->setOedhcost($this->getOedhcost());
        $copyObj->setOedhtaxpcttot($this->getOedhtaxpcttot());
        $copyObj->setOedhprictot($this->getOedhprictot());
        $copyObj->setOedhcosttot($this->getOedhcosttot());
        $copyObj->setOedhspcommpct($this->getOedhspcommpct());
        $copyObj->setOedhbrkncaseqty($this->getOedhbrkncaseqty());
        $copyObj->setOedhbin($this->getOedhbin());
        $copyObj->setOedhpersonalcd($this->getOedhpersonalcd());
        $copyObj->setOedhacdisc1($this->getOedhacdisc1());
        $copyObj->setOedhacdisc2($this->getOedhacdisc2());
        $copyObj->setOedhacdisc3($this->getOedhacdisc3());
        $copyObj->setOedhacdisc4($this->getOedhacdisc4());
        $copyObj->setOedhlmwipnbr($this->getOedhlmwipnbr());
        $copyObj->setOedhcorepric($this->getOedhcorepric());
        $copyObj->setOedhasstcode($this->getOedhasstcode());
        $copyObj->setOedhasstqty($this->getOedhasstqty());
        $copyObj->setOedhlistpric($this->getOedhlistpric());
        $copyObj->setOedhstancost($this->getOedhstancost());
        $copyObj->setOedhvenditemjob($this->getOedhvenditemjob());
        $copyObj->setOedhnsvendid($this->getOedhnsvendid());
        $copyObj->setOedhnsitemgrup($this->getOedhnsitemgrup());
        $copyObj->setOedhusecode($this->getOedhusecode());
        $copyObj->setOedhnsshipfromid($this->getOedhnsshipfromid());
        $copyObj->setOedhasstovrd($this->getOedhasstovrd());
        $copyObj->setOedhpricovrd($this->getOedhpricovrd());
        $copyObj->setOedhpickflag($this->getOedhpickflag());
        $copyObj->setOedhmstrtaxcode1($this->getOedhmstrtaxcode1());
        $copyObj->setOedhmstrtaxpct1($this->getOedhmstrtaxpct1());
        $copyObj->setOedhmstrtaxcode2($this->getOedhmstrtaxcode2());
        $copyObj->setOedhmstrtaxpct2($this->getOedhmstrtaxpct2());
        $copyObj->setOedhmstrtaxcode3($this->getOedhmstrtaxcode3());
        $copyObj->setOedhmstrtaxpct3($this->getOedhmstrtaxpct3());
        $copyObj->setOedhmstrtaxcode4($this->getOedhmstrtaxcode4());
        $copyObj->setOedhmstrtaxpct4($this->getOedhmstrtaxpct4());
        $copyObj->setOedhmstrtaxcode5($this->getOedhmstrtaxcode5());
        $copyObj->setOedhmstrtaxpct5($this->getOedhmstrtaxpct5());
        $copyObj->setOedhmstrtaxcode6($this->getOedhmstrtaxcode6());
        $copyObj->setOedhmstrtaxpct6($this->getOedhmstrtaxpct6());
        $copyObj->setOedhmstrtaxcode7($this->getOedhmstrtaxcode7());
        $copyObj->setOedhmstrtaxpct7($this->getOedhmstrtaxpct7());
        $copyObj->setOedhmstrtaxcode8($this->getOedhmstrtaxcode8());
        $copyObj->setOedhmstrtaxpct8($this->getOedhmstrtaxpct8());
        $copyObj->setOedhmstrtaxcode9($this->getOedhmstrtaxcode9());
        $copyObj->setOedhmstrtaxpct9($this->getOedhmstrtaxpct9());
        $copyObj->setOedhbinarea($this->getOedhbinarea());
        $copyObj->setOedhsplitline($this->getOedhsplitline());
        $copyObj->setOedhlostreas($this->getOedhlostreas());
        $copyObj->setOedhorigline($this->getOedhorigline());
        $copyObj->setOedhcustcrssref($this->getOedhcustcrssref());
        $copyObj->setOedhuom($this->getOedhuom());
        $copyObj->setOedhshipflag($this->getOedhshipflag());
        $copyObj->setOedhkitflag($this->getOedhkitflag());
        $copyObj->setOedhkititemnbr($this->getOedhkititemnbr());
        $copyObj->setOedhbfcost($this->getOedhbfcost());
        $copyObj->setOedhbfmsgcode($this->getOedhbfmsgcode());
        $copyObj->setOedhbfcosttot($this->getOedhbfcosttot());
        $copyObj->setOedhlmbulkpric($this->getOedhlmbulkpric());
        $copyObj->setOedhlmmtrxpkgpric($this->getOedhlmmtrxpkgpric());
        $copyObj->setOedhlmmtrxbulkpric($this->getOedhlmmtrxbulkpric());
        $copyObj->setOedhlmcontractpric($this->getOedhlmcontractpric());
        $copyObj->setOedhwghttot($this->getOedhwghttot());
        $copyObj->setOedhordras($this->getOedhordras());
        $copyObj->setOedhpodetlinenbr($this->getOedhpodetlinenbr());
        $copyObj->setOedhqtytoship($this->getOedhqtytoship());
        $copyObj->setOedhponbr($this->getOedhponbr());
        $copyObj->setOedhporef($this->getOedhporef());
        $copyObj->setOedhfrtin($this->getOedhfrtin());
        $copyObj->setOedhfrtinentered($this->getOedhfrtinentered());
        $copyObj->setOedhprodcmplt($this->getOedhprodcmplt());
        $copyObj->setOedherflag($this->getOedherflag());
        $copyObj->setOedhorigitem($this->getOedhorigitem());
        $copyObj->setOedhsubflag($this->getOedhsubflag());
        $copyObj->setOedhediincomingseq($this->getOedhediincomingseq());
        $copyObj->setOedhspordpoline($this->getOedhspordpoline());
        $copyObj->setOedhcatlgid($this->getOedhcatlgid());
        $copyObj->setOedhdesigncd($this->getOedhdesigncd());
        $copyObj->setOedhdiscpct($this->getOedhdiscpct());
        $copyObj->setOedhtaxamt($this->getOedhtaxamt());
        $copyObj->setOedhxusage($this->getOedhxusage());
        $copyObj->setOedhrqtslock($this->getOedhrqtslock());
        $copyObj->setOedhfreshfrozen($this->getOedhfreshfrozen());
        $copyObj->setOedhcoreflag($this->getOedhcoreflag());
        $copyObj->setOedhnssalesacct($this->getOedhnssalesacct());
        $copyObj->setOedhcertreqd($this->getOedhcertreqd());
        $copyObj->setOedhaddonsales($this->getOedhaddonsales());
        $copyObj->setOedhbordflag($this->getOedhbordflag());
        $copyObj->setOedhtempgrove($this->getOedhtempgrove());
        $copyObj->setOedhgrovedisc($this->getOedhgrovedisc());
        $copyObj->setOedhoffinvc($this->getOedhoffinvc());
        $copyObj->setInititemgrup($this->getInititemgrup());
        $copyObj->setApvevendid($this->getApvevendid());
        $copyObj->setOedhacct($this->getOedhacct());
        $copyObj->setOedhloadtot($this->getOedhloadtot());
        $copyObj->setOedhpickedqty($this->getOedhpickedqty());
        $copyObj->setOedhwiorigqty($this->getOedhwiorigqty());
        $copyObj->setOedhmargintot($this->getOedhmargintot());
        $copyObj->setOedhcorecost($this->getOedhcorecost());
        $copyObj->setOedhitemref($this->getOedhitemref());
        $copyObj->setOedhsac02returncode($this->getOedhsac02returncode());
        $copyObj->setOedhwgtaxcode($this->getOedhwgtaxcode());
        $copyObj->setOedhwgprice($this->getOedhwgprice());
        $copyObj->setOedhwgtot($this->getOedhwgtot());
        $copyObj->setOedhcntrqty($this->getOedhcntrqty());
        $copyObj->setOedhconfirmcode($this->getOedhconfirmcode());
        $copyObj->setOedhpicked($this->getOedhpicked());
        $copyObj->setOedhorigrqstdate($this->getOedhorigrqstdate());
        $copyObj->setOedhfablock($this->getOedhfablock());
        $copyObj->setOedhlabelprinted($this->getOedhlabelprinted());
        $copyObj->setOedhquoteid($this->getOedhquoteid());
        $copyObj->setOedhinvprinted($this->getOedhinvprinted());
        $copyObj->setOedhstockcheck($this->getOedhstockcheck());
        $copyObj->setOedhshouldwesplit($this->getOedhshouldwesplit());
        $copyObj->setOedhcofcreqd($this->getOedhcofcreqd());
        $copyObj->setOedhackcode($this->getOedhackcode());
        $copyObj->setOedhwibordnbr($this->getOedhwibordnbr());
        $copyObj->setOedhcerthistordr($this->getOedhcerthistordr());
        $copyObj->setOedhcerthistline($this->getOedhcerthistline());
        $copyObj->setOedhordrdasitemid($this->getOedhordrdasitemid());
        $copyObj->setOedhwibatch1nbr($this->getOedhwibatch1nbr());
        $copyObj->setOedhwibatch1qty($this->getOedhwibatch1qty());
        $copyObj->setOedhwibatch1stat($this->getOedhwibatch1stat());
        $copyObj->setOedhrganbr($this->getOedhrganbr());
        $copyObj->setOedhorigpric($this->getOedhorigpric());
        $copyObj->setOedhreflinenbr($this->getOedhreflinenbr());
        $copyObj->setOedhbinlocn($this->getOedhbinlocn());
        $copyObj->setOedhacsuplywhse($this->getOedhacsuplywhse());
        $copyObj->setOedhacpricdate($this->getOedhacpricdate());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

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
     * @return \SalesHistoryDetail Clone of current object.
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
     * Declares an association between this object and a ChildSalesHistory object.
     *
     * @param  ChildSalesHistory $v
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSalesHistory(ChildSalesHistory $v = null)
    {
        if ($v === null) {
            $this->setOehhnbr(0);
        } else {
            $this->setOehhnbr($v->getOehhnbr());
        }

        $this->aSalesHistory = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSalesHistory object, it will not be re-added.
        if ($v !== null) {
            $v->addSalesHistoryDetail($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSalesHistory object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSalesHistory The associated ChildSalesHistory object.
     * @throws PropelException
     */
    public function getSalesHistory(ConnectionInterface $con = null)
    {
        if ($this->aSalesHistory === null && ($this->oehhnbr != 0)) {
            $this->aSalesHistory = ChildSalesHistoryQuery::create()->findPk($this->oehhnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSalesHistory->addSalesHistoryDetails($this);
             */
        }

        return $this->aSalesHistory;
    }

    /**
     * Declares an association between this object and a ChildItemMasterItem object.
     *
     * @param  ChildItemMasterItem $v
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
     * @throws PropelException
     */
    public function setItemMasterItem(ChildItemMasterItem $v = null)
    {
        if ($v === null) {
            $this->setInititemnbr('');
        } else {
            $this->setInititemnbr($v->getInititemnbr());
        }

        $this->aItemMasterItem = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildItemMasterItem object, it will not be re-added.
        if ($v !== null) {
            $v->addSalesHistoryDetail($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildItemMasterItem object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildItemMasterItem The associated ChildItemMasterItem object.
     * @throws PropelException
     */
    public function getItemMasterItem(ConnectionInterface $con = null)
    {
        if ($this->aItemMasterItem === null && (($this->inititemnbr !== "" && $this->inititemnbr !== null))) {
            $this->aItemMasterItem = ChildItemMasterItemQuery::create()->findPk($this->inititemnbr, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aItemMasterItem->addSalesHistoryDetails($this);
             */
        }

        return $this->aItemMasterItem;
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
        if ('SalesHistoryLotserial' == $relationName) {
            $this->initSalesHistoryLotserials();
            return;
        }
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
     * If this ChildSalesHistoryDetail is new, it will return
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
                    ->filterBySalesHistoryDetail($this)
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
     * @return $this|ChildSalesHistoryDetail The current object (for fluent API support)
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
            $salesHistoryLotserialRemoved->setSalesHistoryDetail(null);
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
                ->filterBySalesHistoryDetail($this)
                ->count($con);
        }

        return count($this->collSalesHistoryLotserials);
    }

    /**
     * Method called to associate a ChildSalesHistoryLotserial object to this object
     * through the ChildSalesHistoryLotserial foreign key attribute.
     *
     * @param  ChildSalesHistoryLotserial $l ChildSalesHistoryLotserial
     * @return $this|\SalesHistoryDetail The current object (for fluent API support)
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
        $salesHistoryLotserial->setSalesHistoryDetail($this);
    }

    /**
     * @param  ChildSalesHistoryLotserial $salesHistoryLotserial The ChildSalesHistoryLotserial object to remove.
     * @return $this|ChildSalesHistoryDetail The current object (for fluent API support)
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
            $salesHistoryLotserial->setSalesHistoryDetail(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesHistoryDetail is new, it will return
     * an empty collection; or if this SalesHistoryDetail has previously
     * been saved, it will retrieve related SalesHistoryLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesHistoryDetail.
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
     * Otherwise if this SalesHistoryDetail is new, it will return
     * an empty collection; or if this SalesHistoryDetail has previously
     * been saved, it will retrieve related SalesHistoryLotserials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesHistoryDetail.
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
        if (null !== $this->aSalesHistory) {
            $this->aSalesHistory->removeSalesHistoryDetail($this);
        }
        if (null !== $this->aItemMasterItem) {
            $this->aItemMasterItem->removeSalesHistoryDetail($this);
        }
        $this->oehhnbr = null;
        $this->oedhline = null;
        $this->oedhyear = null;
        $this->inititemnbr = null;
        $this->oedhdesc = null;
        $this->oedhdesc2 = null;
        $this->intbwhse = null;
        $this->oedhrqstdate = null;
        $this->oedhcancdate = null;
        $this->oedhshipdate = null;
        $this->oedhspecordr = null;
        $this->artbmtaxcode = null;
        $this->oedhqtyord = null;
        $this->oedhqtyship = null;
        $this->oedhqtyshiptot = null;
        $this->oedhqtybord = null;
        $this->oedhpric = null;
        $this->oedhcost = null;
        $this->oedhtaxpcttot = null;
        $this->oedhprictot = null;
        $this->oedhcosttot = null;
        $this->oedhspcommpct = null;
        $this->oedhbrkncaseqty = null;
        $this->oedhbin = null;
        $this->oedhpersonalcd = null;
        $this->oedhacdisc1 = null;
        $this->oedhacdisc2 = null;
        $this->oedhacdisc3 = null;
        $this->oedhacdisc4 = null;
        $this->oedhlmwipnbr = null;
        $this->oedhcorepric = null;
        $this->oedhasstcode = null;
        $this->oedhasstqty = null;
        $this->oedhlistpric = null;
        $this->oedhstancost = null;
        $this->oedhvenditemjob = null;
        $this->oedhnsvendid = null;
        $this->oedhnsitemgrup = null;
        $this->oedhusecode = null;
        $this->oedhnsshipfromid = null;
        $this->oedhasstovrd = null;
        $this->oedhpricovrd = null;
        $this->oedhpickflag = null;
        $this->oedhmstrtaxcode1 = null;
        $this->oedhmstrtaxpct1 = null;
        $this->oedhmstrtaxcode2 = null;
        $this->oedhmstrtaxpct2 = null;
        $this->oedhmstrtaxcode3 = null;
        $this->oedhmstrtaxpct3 = null;
        $this->oedhmstrtaxcode4 = null;
        $this->oedhmstrtaxpct4 = null;
        $this->oedhmstrtaxcode5 = null;
        $this->oedhmstrtaxpct5 = null;
        $this->oedhmstrtaxcode6 = null;
        $this->oedhmstrtaxpct6 = null;
        $this->oedhmstrtaxcode7 = null;
        $this->oedhmstrtaxpct7 = null;
        $this->oedhmstrtaxcode8 = null;
        $this->oedhmstrtaxpct8 = null;
        $this->oedhmstrtaxcode9 = null;
        $this->oedhmstrtaxpct9 = null;
        $this->oedhbinarea = null;
        $this->oedhsplitline = null;
        $this->oedhlostreas = null;
        $this->oedhorigline = null;
        $this->oedhcustcrssref = null;
        $this->oedhuom = null;
        $this->oedhshipflag = null;
        $this->oedhkitflag = null;
        $this->oedhkititemnbr = null;
        $this->oedhbfcost = null;
        $this->oedhbfmsgcode = null;
        $this->oedhbfcosttot = null;
        $this->oedhlmbulkpric = null;
        $this->oedhlmmtrxpkgpric = null;
        $this->oedhlmmtrxbulkpric = null;
        $this->oedhlmcontractpric = null;
        $this->oedhwghttot = null;
        $this->oedhordras = null;
        $this->oedhpodetlinenbr = null;
        $this->oedhqtytoship = null;
        $this->oedhponbr = null;
        $this->oedhporef = null;
        $this->oedhfrtin = null;
        $this->oedhfrtinentered = null;
        $this->oedhprodcmplt = null;
        $this->oedherflag = null;
        $this->oedhorigitem = null;
        $this->oedhsubflag = null;
        $this->oedhediincomingseq = null;
        $this->oedhspordpoline = null;
        $this->oedhcatlgid = null;
        $this->oedhdesigncd = null;
        $this->oedhdiscpct = null;
        $this->oedhtaxamt = null;
        $this->oedhxusage = null;
        $this->oedhrqtslock = null;
        $this->oedhfreshfrozen = null;
        $this->oedhcoreflag = null;
        $this->oedhnssalesacct = null;
        $this->oedhcertreqd = null;
        $this->oedhaddonsales = null;
        $this->oedhbordflag = null;
        $this->oedhtempgrove = null;
        $this->oedhgrovedisc = null;
        $this->oedhoffinvc = null;
        $this->inititemgrup = null;
        $this->apvevendid = null;
        $this->oedhacct = null;
        $this->oedhloadtot = null;
        $this->oedhpickedqty = null;
        $this->oedhwiorigqty = null;
        $this->oedhmargintot = null;
        $this->oedhcorecost = null;
        $this->oedhitemref = null;
        $this->oedhsac02returncode = null;
        $this->oedhwgtaxcode = null;
        $this->oedhwgprice = null;
        $this->oedhwgtot = null;
        $this->oedhcntrqty = null;
        $this->oedhconfirmcode = null;
        $this->oedhpicked = null;
        $this->oedhorigrqstdate = null;
        $this->oedhfablock = null;
        $this->oedhlabelprinted = null;
        $this->oedhquoteid = null;
        $this->oedhinvprinted = null;
        $this->oedhstockcheck = null;
        $this->oedhshouldwesplit = null;
        $this->oedhcofcreqd = null;
        $this->oedhackcode = null;
        $this->oedhwibordnbr = null;
        $this->oedhcerthistordr = null;
        $this->oedhcerthistline = null;
        $this->oedhordrdasitemid = null;
        $this->oedhwibatch1nbr = null;
        $this->oedhwibatch1qty = null;
        $this->oedhwibatch1stat = null;
        $this->oedhrganbr = null;
        $this->oedhorigpric = null;
        $this->oedhreflinenbr = null;
        $this->oedhbinlocn = null;
        $this->oedhacsuplywhse = null;
        $this->oedhacpricdate = null;
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
            if ($this->collSalesHistoryLotserials) {
                foreach ($this->collSalesHistoryLotserials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSalesHistoryLotserials = null;
        $this->aSalesHistory = null;
        $this->aItemMasterItem = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SalesHistoryDetailTableMap::DEFAULT_STRING_FORMAT);
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
