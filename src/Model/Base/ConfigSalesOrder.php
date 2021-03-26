<?php

namespace Base;

use \ConfigSalesOrderQuery as ChildConfigSalesOrderQuery;
use \Exception;
use \PDO;
use Map\ConfigSalesOrderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;

/**
 * Base class that represents a row from the 'so_config' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ConfigSalesOrder implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ConfigSalesOrderTableMap';


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
     * The value for the oetbconfkey field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $oetbconfkey;

    /**
     * The value for the oetbconfglifac field.
     *
     * @var        string
     */
    protected $oetbconfglifac;

    /**
     * The value for the oetbconfinifac field.
     *
     * @var        string
     */
    protected $oetbconfinifac;

    /**
     * The value for the oetbconfrelivty field.
     *
     * @var        string
     */
    protected $oetbconfrelivty;

    /**
     * The value for the oetbconfuseordrnbr field.
     *
     * @var        string
     */
    protected $oetbconfuseordrnbr;

    /**
     * The value for the oetbconfdefrqstdate field.
     *
     * @var        string
     */
    protected $oetbconfdefrqstdate;

    /**
     * The value for the oetbconfusecancdate field.
     *
     * @var        string
     */
    protected $oetbconfusecancdate;

    /**
     * The value for the oetbconfshowsp field.
     *
     * @var        string
     */
    protected $oetbconfshowsp;

    /**
     * The value for the oetbconfjrnlsort field.
     *
     * @var        int
     */
    protected $oetbconfjrnlsort;

    /**
     * The value for the oetbconfuseprepsoopt field.
     *
     * @var        string
     */
    protected $oetbconfuseprepsoopt;

    /**
     * The value for the oetbconfdispbillto field.
     *
     * @var        string
     */
    protected $oetbconfdispbillto;

    /**
     * The value for the oetbconfslctflm field.
     *
     * @var        string
     */
    protected $oetbconfslctflm;

    /**
     * The value for the oetbcon3usestockpull field.
     *
     * @var        string
     */
    protected $oetbcon3usestockpull;

    /**
     * The value for the oetbconfqtytoship field.
     *
     * @var        string
     */
    protected $oetbconfqtytoship;

    /**
     * The value for the oetbconfqtytoshipdef field.
     *
     * @var        string
     */
    protected $oetbconfqtytoshipdef;

    /**
     * The value for the oetbconfdfltordrqty field.
     *
     * @var        string
     */
    protected $oetbconfdfltordrqty;

    /**
     * The value for the oetbconfallocqtytoship field.
     *
     * @var        string
     */
    protected $oetbconfallocqtytoship;

    /**
     * The value for the oetbconfoverallocqts field.
     *
     * @var        string
     */
    protected $oetbconfoverallocqts;

    /**
     * The value for the oetbcon3completelotbin field.
     *
     * @var        string
     */
    protected $oetbcon3completelotbin;

    /**
     * The value for the oetbcon3rqtsopt field.
     *
     * @var        string
     */
    protected $oetbcon3rqtsopt;

    /**
     * The value for the oetbcon2shipcomphold field.
     *
     * @var        int
     */
    protected $oetbcon2shipcomphold;

    /**
     * The value for the oetbcon3usesaleforecast field.
     *
     * @var        string
     */
    protected $oetbcon3usesaleforecast;

    /**
     * The value for the oetbconfverfstopneg field.
     *
     * @var        string
     */
    protected $oetbconfverfstopneg;

    /**
     * The value for the oetbconfverfaudtrept field.
     *
     * @var        string
     */
    protected $oetbconfverfaudtrept;

    /**
     * The value for the oetbconfagelevldisp field.
     *
     * @var        string
     */
    protected $oetbconfagelevldisp;

    /**
     * The value for the oetbconfagealltime field.
     *
     * @var        string
     */
    protected $oetbconfagealltime;

    /**
     * The value for the oetbconfageathold field.
     *
     * @var        string
     */
    protected $oetbconfageathold;

    /**
     * The value for the oetbconfshowatlevl field.
     *
     * @var        string
     */
    protected $oetbconfshowatlevl;

    /**
     * The value for the oetbconfshowitem field.
     *
     * @var        string
     */
    protected $oetbconfshowitem;

    /**
     * The value for the oetbconfstoppnt field.
     *
     * @var        string
     */
    protected $oetbconfstoppnt;

    /**
     * The value for the oetbconfpricwind field.
     *
     * @var        string
     */
    protected $oetbconfpricwind;

    /**
     * The value for the oetbconfshowcost field.
     *
     * @var        string
     */
    protected $oetbconfshowcost;

    /**
     * The value for the oetbconfcosttouse field.
     *
     * @var        string
     */
    protected $oetbconfcosttouse;

    /**
     * The value for the oetbconfshowmarg field.
     *
     * @var        string
     */
    protected $oetbconfshowmarg;

    /**
     * The value for the oetbconffxoe field.
     *
     * @var        string
     */
    protected $oetbconffxoe;

    /**
     * The value for the oetbconffxinv field.
     *
     * @var        string
     */
    protected $oetbconffxinv;

    /**
     * The value for the oetbconfdispvia field.
     *
     * @var        string
     */
    protected $oetbconfdispvia;

    /**
     * The value for the oetbconfdispcaseqty field.
     *
     * @var        string
     */
    protected $oetbconfdispcaseqty;

    /**
     * The value for the oetbconffrtin field.
     *
     * @var        string
     */
    protected $oetbconffrtin;

    /**
     * The value for the oetbconffrtinglacct field.
     *
     * @var        string
     */
    protected $oetbconffrtinglacct;

    /**
     * The value for the oetbconfmincharge field.
     *
     * @var        string
     */
    protected $oetbconfmincharge;

    /**
     * The value for the oetbconfminchrgglacct field.
     *
     * @var        string
     */
    protected $oetbconfminchrgglacct;

    /**
     * The value for the oetbconfdropshipchrg field.
     *
     * @var        string
     */
    protected $oetbconfdropshipchrg;

    /**
     * The value for the oetbconfdropshpglacct field.
     *
     * @var        string
     */
    protected $oetbconfdropshpglacct;

    /**
     * The value for the oetbconfnontaxcustcode field.
     *
     * @var        string
     */
    protected $oetbconfnontaxcustcode;

    /**
     * The value for the oetbconfhstaxid field.
     *
     * @var        string
     */
    protected $oetbconfhstaxid;

    /**
     * The value for the oetbconfhsfrtid field.
     *
     * @var        string
     */
    protected $oetbconfhsfrtid;

    /**
     * The value for the oetbconfhsmiscid field.
     *
     * @var        string
     */
    protected $oetbconfhsmiscid;

    /**
     * The value for the oetbcon2hscusdid field.
     *
     * @var        string
     */
    protected $oetbcon2hscusdid;

    /**
     * The value for the oetbcon3hsfrtinid field.
     *
     * @var        string
     */
    protected $oetbcon3hsfrtinid;

    /**
     * The value for the oetbcon3hsdropid field.
     *
     * @var        string
     */
    protected $oetbcon3hsdropid;

    /**
     * The value for the oetbcon3hsminordid field.
     *
     * @var        string
     */
    protected $oetbcon3hsminordid;

    /**
     * The value for the oetbconfheadgetdef field.
     *
     * @var        string
     */
    protected $oetbconfheadgetdef;

    /**
     * The value for the oetbconfitemgetdef field.
     *
     * @var        string
     */
    protected $oetbconfitemgetdef;

    /**
     * The value for the oetbconfautogetcust field.
     *
     * @var        string
     */
    protected $oetbconfautogetcust;

    /**
     * The value for the oetbcon3autogetitem field.
     *
     * @var        string
     */
    protected $oetbcon3autogetitem;

    /**
     * The value for the oetbconfrqstheaddtl field.
     *
     * @var        string
     */
    protected $oetbconfrqstheaddtl;

    /**
     * The value for the oetbconfcancheaddtl field.
     *
     * @var        string
     */
    protected $oetbconfcancheaddtl;

    /**
     * The value for the oetbconfuseinvcasship field.
     *
     * @var        string
     */
    protected $oetbconfuseinvcasship;

    /**
     * The value for the oetbcon3usearrvdate field.
     *
     * @var        string
     */
    protected $oetbcon3usearrvdate;

    /**
     * The value for the oetbconfseparatecred field.
     *
     * @var        string
     */
    protected $oetbconfseparatecred;

    /**
     * The value for the oetbcon3applycredits field.
     *
     * @var        string
     */
    protected $oetbcon3applycredits;

    /**
     * The value for the oetbconfwarnnotnew field.
     *
     * @var        string
     */
    protected $oetbconfwarnnotnew;

    /**
     * The value for the oetbconfwarnbotozero field.
     *
     * @var        string
     */
    protected $oetbconfwarnbotozero;

    /**
     * The value for the oetbcon2providerouting field.
     *
     * @var        string
     */
    protected $oetbcon2providerouting;

    /**
     * The value for the oetbcon2srtrtbyrqstdte field.
     *
     * @var        string
     */
    protected $oetbcon2srtrtbyrqstdte;

    /**
     * The value for the oetbconfusesoreview field.
     *
     * @var        string
     */
    protected $oetbconfusesoreview;

    /**
     * The value for the oetbconfpicknotedef field.
     *
     * @var        string
     */
    protected $oetbconfpicknotedef;

    /**
     * The value for the oetbconfpacknotedef field.
     *
     * @var        string
     */
    protected $oetbconfpacknotedef;

    /**
     * The value for the oetbconfpicksort field.
     *
     * @var        string
     */
    protected $oetbconfpicksort;

    /**
     * The value for the oetbconfpacksort field.
     *
     * @var        string
     */
    protected $oetbconfpacksort;

    /**
     * The value for the oetbconfprtpriconly field.
     *
     * @var        string
     */
    protected $oetbconfprtpriconly;

    /**
     * The value for the oetbconfprtneg field.
     *
     * @var        string
     */
    protected $oetbconfprtneg;

    /**
     * The value for the oetbcon2prtpackageinfo field.
     *
     * @var        string
     */
    protected $oetbcon2prtpackageinfo;

    /**
     * The value for the oetbcon2innerpacklabel field.
     *
     * @var        string
     */
    protected $oetbcon2innerpacklabel;

    /**
     * The value for the oetbcon2outerpacklabel field.
     *
     * @var        string
     */
    protected $oetbcon2outerpacklabel;

    /**
     * The value for the oetbcon2shiptarelabel field.
     *
     * @var        string
     */
    protected $oetbcon2shiptarelabel;

    /**
     * The value for the oetbconfprtpick field.
     *
     * @var        string
     */
    protected $oetbconfprtpick;

    /**
     * The value for the oetbconfpicprioseq field.
     *
     * @var        string
     */
    protected $oetbconfpicprioseq;

    /**
     * The value for the oetbconfprtpack field.
     *
     * @var        string
     */
    protected $oetbconfprtpack;

    /**
     * The value for the oetbconfprtinv field.
     *
     * @var        string
     */
    protected $oetbconfprtinv;

    /**
     * The value for the oetbcon2prtcredmemo field.
     *
     * @var        string
     */
    protected $oetbcon2prtcredmemo;

    /**
     * The value for the oetbconfcrntdate field.
     *
     * @var        string
     */
    protected $oetbconfcrntdate;

    /**
     * The value for the oetbconfmarkpicked field.
     *
     * @var        string
     */
    protected $oetbconfmarkpicked;

    /**
     * The value for the oetbconfshowunavail field.
     *
     * @var        string
     */
    protected $oetbconfshowunavail;

    /**
     * The value for the oetbconfdecplaces field.
     *
     * @var        int
     */
    protected $oetbconfdecplaces;

    /**
     * The value for the oetbconfwarndup field.
     *
     * @var        string
     */
    protected $oetbconfwarndup;

    /**
     * The value for the oetbconfdefpick field.
     *
     * @var        string
     */
    protected $oetbconfdefpick;

    /**
     * The value for the oetbconfdefpack field.
     *
     * @var        string
     */
    protected $oetbconfdefpack;

    /**
     * The value for the oetbconfdefinvc field.
     *
     * @var        string
     */
    protected $oetbconfdefinvc;

    /**
     * The value for the oetbconfdefack field.
     *
     * @var        string
     */
    protected $oetbconfdefack;

    /**
     * The value for the oetbconfacksortopt field.
     *
     * @var        string
     */
    protected $oetbconfacksortopt;

    /**
     * The value for the oetbconfreleasenbr field.
     *
     * @var        string
     */
    protected $oetbconfreleasenbr;

    /**
     * The value for the oetbconfpodetlinenbr field.
     *
     * @var        string
     */
    protected $oetbconfpodetlinenbr;

    /**
     * The value for the oetbconfdetlinebinnbr field.
     *
     * @var        string
     */
    protected $oetbconfdetlinebinnbr;

    /**
     * The value for the oetbconfsplitbywhse field.
     *
     * @var        string
     */
    protected $oetbconfsplitbywhse;

    /**
     * The value for the oetbcon3allowmultwhse field.
     *
     * @var        string
     */
    protected $oetbcon3allowmultwhse;

    /**
     * The value for the oetbconfuseorigwhse field.
     *
     * @var        string
     */
    protected $oetbconfuseorigwhse;

    /**
     * The value for the oetbconfuseesosingle field.
     *
     * @var        string
     */
    protected $oetbconfuseesosingle;

    /**
     * The value for the oetbconfcreatepo field.
     *
     * @var        string
     */
    protected $oetbconfcreatepo;

    /**
     * The value for the oetbconfbestprice field.
     *
     * @var        string
     */
    protected $oetbconfbestprice;

    /**
     * The value for the oetbconfesobacktonew field.
     *
     * @var        string
     */
    protected $oetbconfesobacktonew;

    /**
     * The value for the oetbconfpickprintdrop field.
     *
     * @var        string
     */
    protected $oetbconfpickprintdrop;

    /**
     * The value for the oetbconfwarnmultpo field.
     *
     * @var        string
     */
    protected $oetbconfwarnmultpo;

    /**
     * The value for the oetbconfalertitemquote field.
     *
     * @var        string
     */
    protected $oetbconfalertitemquote;

    /**
     * The value for the oetbcon3askchgprcwqty field.
     *
     * @var        string
     */
    protected $oetbcon3askchgprcwqty;

    /**
     * The value for the oetbcon3tenqtybrks field.
     *
     * @var        string
     */
    protected $oetbcon3tenqtybrks;

    /**
     * The value for the oetbconfdecordrpric field.
     *
     * @var        int
     */
    protected $oetbconfdecordrpric;

    /**
     * The value for the oetbcon2provlostsales field.
     *
     * @var        string
     */
    protected $oetbcon2provlostsales;

    /**
     * The value for the oetbcon2askreasoncode field.
     *
     * @var        string
     */
    protected $oetbcon2askreasoncode;

    /**
     * The value for the oetbcon2defreasoncode field.
     *
     * @var        string
     */
    protected $oetbcon2defreasoncode;

    /**
     * The value for the oetbcon2bordcntl field.
     *
     * @var        string
     */
    protected $oetbcon2bordcntl;

    /**
     * The value for the oetbcon2defreabocode field.
     *
     * @var        string
     */
    protected $oetbcon2defreabocode;

    /**
     * The value for the oetbcon2numdayssavls field.
     *
     * @var        int
     */
    protected $oetbcon2numdayssavls;

    /**
     * The value for the oetbcon2callbacknotif field.
     *
     * @var        string
     */
    protected $oetbcon2callbacknotif;

    /**
     * The value for the oetbcon2defdayswhenin field.
     *
     * @var        int
     */
    protected $oetbcon2defdayswhenin;

    /**
     * The value for the oetbcon2addsubsls field.
     *
     * @var        string
     */
    protected $oetbcon2addsubsls;

    /**
     * The value for the oetbcon2defreasubscode field.
     *
     * @var        string
     */
    protected $oetbcon2defreasubscode;

    /**
     * The value for the oetbcon2ordtypnorm field.
     *
     * @var        string
     */
    protected $oetbcon2ordtypnorm;

    /**
     * The value for the oetbcon2ordtyprep field.
     *
     * @var        string
     */
    protected $oetbcon2ordtyprep;

    /**
     * The value for the oetbcon2ordtypserv field.
     *
     * @var        string
     */
    protected $oetbcon2ordtypserv;

    /**
     * The value for the oetbcon2defordtyp field.
     *
     * @var        string
     */
    protected $oetbcon2defordtyp;

    /**
     * The value for the oetbconfchgpric field.
     *
     * @var        string
     */
    protected $oetbconfchgpric;

    /**
     * The value for the oetbcon2spordpricezero field.
     *
     * @var        string
     */
    protected $oetbcon2spordpricezero;

    /**
     * The value for the oetbconfinactpricezero field.
     *
     * @var        string
     */
    protected $oetbconfinactpricezero;

    /**
     * The value for the oetbcon2reseq field.
     *
     * @var        string
     */
    protected $oetbcon2reseq;

    /**
     * The value for the oetbcon2reseqby field.
     *
     * @var        string
     */
    protected $oetbcon2reseqby;

    /**
     * The value for the oetbcon2minqtysales field.
     *
     * @var        string
     */
    protected $oetbcon2minqtysales;

    /**
     * The value for the oetbcon2chgorder field.
     *
     * @var        string
     */
    protected $oetbcon2chgorder;

    /**
     * The value for the oetbcon2vercomp field.
     *
     * @var        string
     */
    protected $oetbcon2vercomp;

    /**
     * The value for the oetbcon2prtinv field.
     *
     * @var        string
     */
    protected $oetbcon2prtinv;

    /**
     * The value for the oetbcon2dynamicpicktick field.
     *
     * @var        string
     */
    protected $oetbcon2dynamicpicktick;

    /**
     * The value for the oetbcon2dynamicinvoice field.
     *
     * @var        string
     */
    protected $oetbcon2dynamicinvoice;

    /**
     * The value for the oetbcon2edidefinvoice field.
     *
     * @var        string
     */
    protected $oetbcon2edidefinvoice;

    /**
     * The value for the oetbcon2allowccpick field.
     *
     * @var        string
     */
    protected $oetbcon2allowccpick;

    /**
     * The value for the oetbcon2autoccwind field.
     *
     * @var        string
     */
    protected $oetbcon2autoccwind;

    /**
     * The value for the oetbcon2autoccupdate field.
     *
     * @var        string
     */
    protected $oetbcon2autoccupdate;

    /**
     * The value for the oetbcon2allowapvdccchg field.
     *
     * @var        string
     */
    protected $oetbcon2allowapvdccchg;

    /**
     * The value for the oetbcon3apvdbckordclear field.
     *
     * @var        string
     */
    protected $oetbcon3apvdbckordclear;

    /**
     * The value for the oetbcon2polwhichcost field.
     *
     * @var        string
     */
    protected $oetbcon2polwhichcost;

    /**
     * The value for the oetbcon2revhazard field.
     *
     * @var        string
     */
    protected $oetbcon2revhazard;

    /**
     * The value for the oetbcon2showdisclist field.
     *
     * @var        string
     */
    protected $oetbcon2showdisclist;

    /**
     * The value for the oetbcon2chglist field.
     *
     * @var        string
     */
    protected $oetbcon2chglist;

    /**
     * The value for the oetbcon2maillist field.
     *
     * @var        string
     */
    protected $oetbcon2maillist;

    /**
     * The value for the oetbcon2nameformat field.
     *
     * @var        string
     */
    protected $oetbcon2nameformat;

    /**
     * The value for the oetbcon2mailidtype field.
     *
     * @var        string
     */
    protected $oetbcon2mailidtype;

    /**
     * The value for the oetbcon2cashdrawerpswd field.
     *
     * @var        string
     */
    protected $oetbcon2cashdrawerpswd;

    /**
     * The value for the oetbcon2upsonline field.
     *
     * @var        string
     */
    protected $oetbcon2upsonline;

    /**
     * The value for the oetbcon2picorver field.
     *
     * @var        string
     */
    protected $oetbcon2picorver;

    /**
     * The value for the oetbcon2combback field.
     *
     * @var        string
     */
    protected $oetbcon2combback;

    /**
     * The value for the oetbcon2frtallowamt field.
     *
     * @var        int
     */
    protected $oetbcon2frtallowamt;

    /**
     * The value for the oetbcon3shipmoreordered field.
     *
     * @var        string
     */
    protected $oetbcon3shipmoreordered;

    /**
     * The value for the oetbcon3warnshipmore field.
     *
     * @var        string
     */
    protected $oetbcon3warnshipmore;

    /**
     * The value for the oetbcon3proformafromeso field.
     *
     * @var        string
     */
    protected $oetbcon3proformafromeso;

    /**
     * The value for the oetbcon3pickpackcode field.
     *
     * @var        string
     */
    protected $oetbcon3pickpackcode;

    /**
     * The value for the oetbcon2usedept field.
     *
     * @var        string
     */
    protected $oetbcon2usedept;

    /**
     * The value for the oetbcon2usedivision field.
     *
     * @var        string
     */
    protected $oetbcon2usedivision;

    /**
     * The value for the oetbcon2defmfecode field.
     *
     * @var        string
     */
    protected $oetbcon2defmfecode;

    /**
     * The value for the oetbcon2showavgcost field.
     *
     * @var        string
     */
    protected $oetbcon2showavgcost;

    /**
     * The value for the oetbcon2fedex field.
     *
     * @var        string
     */
    protected $oetbcon2fedex;

    /**
     * The value for the oetbcon3deffrghtgrup field.
     *
     * @var        string
     */
    protected $oetbcon3deffrghtgrup;

    /**
     * The value for the oetbcon3upsmysqldbname field.
     *
     * @var        string
     */
    protected $oetbcon3upsmysqldbname;

    /**
     * The value for the oetbconfuseoptcode field.
     *
     * @var        string
     */
    protected $oetbconfuseoptcode;

    /**
     * The value for the oetbconfscn4opt field.
     *
     * @var        string
     */
    protected $oetbconfscn4opt;

    /**
     * The value for the oetbcon2takenbyuse field.
     *
     * @var        string
     */
    protected $oetbcon2takenbyuse;

    /**
     * The value for the oetbcon2takenbylogin field.
     *
     * @var        string
     */
    protected $oetbcon2takenbylogin;

    /**
     * The value for the oetbcon2takenbyforce field.
     *
     * @var        string
     */
    protected $oetbcon2takenbyforce;

    /**
     * The value for the oetbcon2pickedbyuse field.
     *
     * @var        string
     */
    protected $oetbcon2pickedbyuse;

    /**
     * The value for the oetbcon2pickedbyforce field.
     *
     * @var        string
     */
    protected $oetbcon2pickedbyforce;

    /**
     * The value for the oetbcon2pickedbyproc field.
     *
     * @var        string
     */
    protected $oetbcon2pickedbyproc;

    /**
     * The value for the oetbcon2packedbyuse field.
     *
     * @var        string
     */
    protected $oetbcon2packedbyuse;

    /**
     * The value for the oetbcon2packedbyforce field.
     *
     * @var        string
     */
    protected $oetbcon2packedbyforce;

    /**
     * The value for the oetbcon2verifiedbyuse field.
     *
     * @var        string
     */
    protected $oetbcon2verifiedbyuse;

    /**
     * The value for the oetbcon2verifiedbylogin field.
     *
     * @var        string
     */
    protected $oetbcon2verifiedbylogin;

    /**
     * The value for the oetbcon2verifiedbyforce field.
     *
     * @var        string
     */
    protected $oetbcon2verifiedbyforce;

    /**
     * The value for the oetbconfoptlabl1 field.
     *
     * @var        string
     */
    protected $oetbconfoptlabl1;

    /**
     * The value for the oetbcon2ucode1force field.
     *
     * @var        string
     */
    protected $oetbcon2ucode1force;

    /**
     * The value for the oetbconfoptlabl2 field.
     *
     * @var        string
     */
    protected $oetbconfoptlabl2;

    /**
     * The value for the oetbcon2ucode2force field.
     *
     * @var        string
     */
    protected $oetbcon2ucode2force;

    /**
     * The value for the oetbconfoptlabl3 field.
     *
     * @var        string
     */
    protected $oetbconfoptlabl3;

    /**
     * The value for the oetbcon2ucode3force field.
     *
     * @var        string
     */
    protected $oetbcon2ucode3force;

    /**
     * The value for the oetbconfoptlabl4 field.
     *
     * @var        string
     */
    protected $oetbconfoptlabl4;

    /**
     * The value for the oetbcon2ucode4force field.
     *
     * @var        string
     */
    protected $oetbcon2ucode4force;

    /**
     * The value for the oetbconfverifyafterpack field.
     *
     * @var        string
     */
    protected $oetbconfverifyafterpack;

    /**
     * The value for the oetbconfhistyrsback field.
     *
     * @var        int
     */
    protected $oetbconfhistyrsback;

    /**
     * The value for the oetbconfrqstcatlg field.
     *
     * @var        string
     */
    protected $oetbconfrqstcatlg;

    /**
     * The value for the oetbcon2conpick field.
     *
     * @var        string
     */
    protected $oetbcon2conpick;

    /**
     * The value for the oetbcon2allowpick field.
     *
     * @var        string
     */
    protected $oetbcon2allowpick;

    /**
     * The value for the oetbcon2combinesame field.
     *
     * @var        string
     */
    protected $oetbcon2combinesame;

    /**
     * The value for the oetbcon3autovernitems field.
     *
     * @var        string
     */
    protected $oetbcon3autovernitems;

    /**
     * The value for the oetbcon2allowzeroqty field.
     *
     * @var        string
     */
    protected $oetbcon2allowzeroqty;

    /**
     * The value for the oetbcon2allowinvalidwhse field.
     *
     * @var        string
     */
    protected $oetbcon2allowinvalidwhse;

    /**
     * The value for the oetbcon2showediinfo field.
     *
     * @var        string
     */
    protected $oetbcon2showediinfo;

    /**
     * The value for the oetbcon2addonsales field.
     *
     * @var        string
     */
    protected $oetbcon2addonsales;

    /**
     * The value for the oetbcon2forcedbkord field.
     *
     * @var        string
     */
    protected $oetbcon2forcedbkord;

    /**
     * The value for the oetbcon2updtprcdisc field.
     *
     * @var        string
     */
    protected $oetbcon2updtprcdisc;

    /**
     * The value for the oetbcon2autopack field.
     *
     * @var        string
     */
    protected $oetbcon2autopack;

    /**
     * The value for the oetbcon2pickboprtzqts field.
     *
     * @var        string
     */
    protected $oetbcon2pickboprtzqts;

    /**
     * The value for the oetbcon3pick00noship field.
     *
     * @var        string
     */
    protected $oetbcon3pick00noship;

    /**
     * The value for the oetbcon2standordlead field.
     *
     * @var        string
     */
    protected $oetbcon2standordlead;

    /**
     * The value for the oetbcon2standordamnt field.
     *
     * @var        int
     */
    protected $oetbcon2standordamnt;

    /**
     * The value for the oetbcon2inactitemcntrl field.
     *
     * @var        string
     */
    protected $oetbcon2inactitemcntrl;

    /**
     * The value for the oetbcon2useitemref field.
     *
     * @var        string
     */
    protected $oetbcon2useitemref;

    /**
     * The value for the oetbcon3upsnaftarecords field.
     *
     * @var        string
     */
    protected $oetbcon3upsnaftarecords;

    /**
     * The value for the oetbconfdfltshipwhse field.
     *
     * @var        string
     */
    protected $oetbconfdfltshipwhse;

    /**
     * The value for the oetbconfdfltorigwhse field.
     *
     * @var        string
     */
    protected $oetbconfdfltorigwhse;

    /**
     * The value for the oetbconfinvcwithpack field.
     *
     * @var        string
     */
    protected $oetbconfinvcwithpack;

    /**
     * The value for the oetbconfcarrycntrqty field.
     *
     * @var        string
     */
    protected $oetbconfcarrycntrqty;

    /**
     * The value for the oetbcon3useordras field.
     *
     * @var        string
     */
    protected $oetbcon3useordras;

    /**
     * The value for the oetbconfuseordrsource field.
     *
     * @var        string
     */
    protected $oetbconfuseordrsource;

    /**
     * The value for the oetbcon3ccprocessor field.
     *
     * @var        string
     */
    protected $oetbcon3ccprocessor;

    /**
     * The value for the oetbcon3creditcardcap field.
     *
     * @var        string
     */
    protected $oetbcon3creditcardcap;

    /**
     * The value for the oetbcon3keyorcccap field.
     *
     * @var        string
     */
    protected $oetbcon3keyorcccap;

    /**
     * The value for the oetbcon3ccxoverlay field.
     *
     * @var        string
     */
    protected $oetbcon3ccxoverlay;

    /**
     * The value for the oetbcon3cctimeout field.
     *
     * @var        int
     */
    protected $oetbcon3cctimeout;

    /**
     * The value for the oetbcon3signaturecapture field.
     *
     * @var        string
     */
    protected $oetbcon3signaturecapture;

    /**
     * The value for the oetbcon3ccpreapproval field.
     *
     * @var        string
     */
    protected $oetbcon3ccpreapproval;

    /**
     * The value for the oetbcon3forceccnbrentry field.
     *
     * @var        string
     */
    protected $oetbcon3forceccnbrentry;

    /**
     * The value for the oetbcon3intritemnotes field.
     *
     * @var        string
     */
    protected $oetbcon3intritemnotes;

    /**
     * The value for the oetbcon3mtrcert field.
     *
     * @var        string
     */
    protected $oetbcon3mtrcert;

    /**
     * The value for the oetbcon3cofccert field.
     *
     * @var        string
     */
    protected $oetbcon3cofccert;

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
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->oetbconfkey = 0;
    }

    /**
     * Initializes internal state of Base\ConfigSalesOrder object.
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
     * Compares this with another <code>ConfigSalesOrder</code> instance.  If
     * <code>obj</code> is an instance of <code>ConfigSalesOrder</code>, delegates to
     * <code>equals(ConfigSalesOrder)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ConfigSalesOrder The current object, for fluid interface
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
     * Get the [oetbconfkey] column value.
     *
     * @return int
     */
    public function getOetbconfkey()
    {
        return $this->oetbconfkey;
    }

    /**
     * Get the [oetbconfglifac] column value.
     *
     * @return string
     */
    public function getOetbconfglifac()
    {
        return $this->oetbconfglifac;
    }

    /**
     * Get the [oetbconfinifac] column value.
     *
     * @return string
     */
    public function getOetbconfinifac()
    {
        return $this->oetbconfinifac;
    }

    /**
     * Get the [oetbconfrelivty] column value.
     *
     * @return string
     */
    public function getOetbconfrelivty()
    {
        return $this->oetbconfrelivty;
    }

    /**
     * Get the [oetbconfuseordrnbr] column value.
     *
     * @return string
     */
    public function getOetbconfuseordrnbr()
    {
        return $this->oetbconfuseordrnbr;
    }

    /**
     * Get the [oetbconfdefrqstdate] column value.
     *
     * @return string
     */
    public function getOetbconfdefrqstdate()
    {
        return $this->oetbconfdefrqstdate;
    }

    /**
     * Get the [oetbconfusecancdate] column value.
     *
     * @return string
     */
    public function getOetbconfusecancdate()
    {
        return $this->oetbconfusecancdate;
    }

    /**
     * Get the [oetbconfshowsp] column value.
     *
     * @return string
     */
    public function getOetbconfshowsp()
    {
        return $this->oetbconfshowsp;
    }

    /**
     * Get the [oetbconfjrnlsort] column value.
     *
     * @return int
     */
    public function getOetbconfjrnlsort()
    {
        return $this->oetbconfjrnlsort;
    }

    /**
     * Get the [oetbconfuseprepsoopt] column value.
     *
     * @return string
     */
    public function getOetbconfuseprepsoopt()
    {
        return $this->oetbconfuseprepsoopt;
    }

    /**
     * Get the [oetbconfdispbillto] column value.
     *
     * @return string
     */
    public function getOetbconfdispbillto()
    {
        return $this->oetbconfdispbillto;
    }

    /**
     * Get the [oetbconfslctflm] column value.
     *
     * @return string
     */
    public function getOetbconfslctflm()
    {
        return $this->oetbconfslctflm;
    }

    /**
     * Get the [oetbcon3usestockpull] column value.
     *
     * @return string
     */
    public function getOetbcon3usestockpull()
    {
        return $this->oetbcon3usestockpull;
    }

    /**
     * Get the [oetbconfqtytoship] column value.
     *
     * @return string
     */
    public function getOetbconfqtytoship()
    {
        return $this->oetbconfqtytoship;
    }

    /**
     * Get the [oetbconfqtytoshipdef] column value.
     *
     * @return string
     */
    public function getOetbconfqtytoshipdef()
    {
        return $this->oetbconfqtytoshipdef;
    }

    /**
     * Get the [oetbconfdfltordrqty] column value.
     *
     * @return string
     */
    public function getOetbconfdfltordrqty()
    {
        return $this->oetbconfdfltordrqty;
    }

    /**
     * Get the [oetbconfallocqtytoship] column value.
     *
     * @return string
     */
    public function getOetbconfallocqtytoship()
    {
        return $this->oetbconfallocqtytoship;
    }

    /**
     * Get the [oetbconfoverallocqts] column value.
     *
     * @return string
     */
    public function getOetbconfoverallocqts()
    {
        return $this->oetbconfoverallocqts;
    }

    /**
     * Get the [oetbcon3completelotbin] column value.
     *
     * @return string
     */
    public function getOetbcon3completelotbin()
    {
        return $this->oetbcon3completelotbin;
    }

    /**
     * Get the [oetbcon3rqtsopt] column value.
     *
     * @return string
     */
    public function getOetbcon3rqtsopt()
    {
        return $this->oetbcon3rqtsopt;
    }

    /**
     * Get the [oetbcon2shipcomphold] column value.
     *
     * @return int
     */
    public function getOetbcon2shipcomphold()
    {
        return $this->oetbcon2shipcomphold;
    }

    /**
     * Get the [oetbcon3usesaleforecast] column value.
     *
     * @return string
     */
    public function getOetbcon3usesaleforecast()
    {
        return $this->oetbcon3usesaleforecast;
    }

    /**
     * Get the [oetbconfverfstopneg] column value.
     *
     * @return string
     */
    public function getOetbconfverfstopneg()
    {
        return $this->oetbconfverfstopneg;
    }

    /**
     * Get the [oetbconfverfaudtrept] column value.
     *
     * @return string
     */
    public function getOetbconfverfaudtrept()
    {
        return $this->oetbconfverfaudtrept;
    }

    /**
     * Get the [oetbconfagelevldisp] column value.
     *
     * @return string
     */
    public function getOetbconfagelevldisp()
    {
        return $this->oetbconfagelevldisp;
    }

    /**
     * Get the [oetbconfagealltime] column value.
     *
     * @return string
     */
    public function getOetbconfagealltime()
    {
        return $this->oetbconfagealltime;
    }

    /**
     * Get the [oetbconfageathold] column value.
     *
     * @return string
     */
    public function getOetbconfageathold()
    {
        return $this->oetbconfageathold;
    }

    /**
     * Get the [oetbconfshowatlevl] column value.
     *
     * @return string
     */
    public function getOetbconfshowatlevl()
    {
        return $this->oetbconfshowatlevl;
    }

    /**
     * Get the [oetbconfshowitem] column value.
     *
     * @return string
     */
    public function getOetbconfshowitem()
    {
        return $this->oetbconfshowitem;
    }

    /**
     * Get the [oetbconfstoppnt] column value.
     *
     * @return string
     */
    public function getOetbconfstoppnt()
    {
        return $this->oetbconfstoppnt;
    }

    /**
     * Get the [oetbconfpricwind] column value.
     *
     * @return string
     */
    public function getOetbconfpricwind()
    {
        return $this->oetbconfpricwind;
    }

    /**
     * Get the [oetbconfshowcost] column value.
     *
     * @return string
     */
    public function getOetbconfshowcost()
    {
        return $this->oetbconfshowcost;
    }

    /**
     * Get the [oetbconfcosttouse] column value.
     *
     * @return string
     */
    public function getOetbconfcosttouse()
    {
        return $this->oetbconfcosttouse;
    }

    /**
     * Get the [oetbconfshowmarg] column value.
     *
     * @return string
     */
    public function getOetbconfshowmarg()
    {
        return $this->oetbconfshowmarg;
    }

    /**
     * Get the [oetbconffxoe] column value.
     *
     * @return string
     */
    public function getOetbconffxoe()
    {
        return $this->oetbconffxoe;
    }

    /**
     * Get the [oetbconffxinv] column value.
     *
     * @return string
     */
    public function getOetbconffxinv()
    {
        return $this->oetbconffxinv;
    }

    /**
     * Get the [oetbconfdispvia] column value.
     *
     * @return string
     */
    public function getOetbconfdispvia()
    {
        return $this->oetbconfdispvia;
    }

    /**
     * Get the [oetbconfdispcaseqty] column value.
     *
     * @return string
     */
    public function getOetbconfdispcaseqty()
    {
        return $this->oetbconfdispcaseqty;
    }

    /**
     * Get the [oetbconffrtin] column value.
     *
     * @return string
     */
    public function getOetbconffrtin()
    {
        return $this->oetbconffrtin;
    }

    /**
     * Get the [oetbconffrtinglacct] column value.
     *
     * @return string
     */
    public function getOetbconffrtinglacct()
    {
        return $this->oetbconffrtinglacct;
    }

    /**
     * Get the [oetbconfmincharge] column value.
     *
     * @return string
     */
    public function getOetbconfmincharge()
    {
        return $this->oetbconfmincharge;
    }

    /**
     * Get the [oetbconfminchrgglacct] column value.
     *
     * @return string
     */
    public function getOetbconfminchrgglacct()
    {
        return $this->oetbconfminchrgglacct;
    }

    /**
     * Get the [oetbconfdropshipchrg] column value.
     *
     * @return string
     */
    public function getOetbconfdropshipchrg()
    {
        return $this->oetbconfdropshipchrg;
    }

    /**
     * Get the [oetbconfdropshpglacct] column value.
     *
     * @return string
     */
    public function getOetbconfdropshpglacct()
    {
        return $this->oetbconfdropshpglacct;
    }

    /**
     * Get the [oetbconfnontaxcustcode] column value.
     *
     * @return string
     */
    public function getOetbconfnontaxcustcode()
    {
        return $this->oetbconfnontaxcustcode;
    }

    /**
     * Get the [oetbconfhstaxid] column value.
     *
     * @return string
     */
    public function getOetbconfhstaxid()
    {
        return $this->oetbconfhstaxid;
    }

    /**
     * Get the [oetbconfhsfrtid] column value.
     *
     * @return string
     */
    public function getOetbconfhsfrtid()
    {
        return $this->oetbconfhsfrtid;
    }

    /**
     * Get the [oetbconfhsmiscid] column value.
     *
     * @return string
     */
    public function getOetbconfhsmiscid()
    {
        return $this->oetbconfhsmiscid;
    }

    /**
     * Get the [oetbcon2hscusdid] column value.
     *
     * @return string
     */
    public function getOetbcon2hscusdid()
    {
        return $this->oetbcon2hscusdid;
    }

    /**
     * Get the [oetbcon3hsfrtinid] column value.
     *
     * @return string
     */
    public function getOetbcon3hsfrtinid()
    {
        return $this->oetbcon3hsfrtinid;
    }

    /**
     * Get the [oetbcon3hsdropid] column value.
     *
     * @return string
     */
    public function getOetbcon3hsdropid()
    {
        return $this->oetbcon3hsdropid;
    }

    /**
     * Get the [oetbcon3hsminordid] column value.
     *
     * @return string
     */
    public function getOetbcon3hsminordid()
    {
        return $this->oetbcon3hsminordid;
    }

    /**
     * Get the [oetbconfheadgetdef] column value.
     *
     * @return string
     */
    public function getOetbconfheadgetdef()
    {
        return $this->oetbconfheadgetdef;
    }

    /**
     * Get the [oetbconfitemgetdef] column value.
     *
     * @return string
     */
    public function getOetbconfitemgetdef()
    {
        return $this->oetbconfitemgetdef;
    }

    /**
     * Get the [oetbconfautogetcust] column value.
     *
     * @return string
     */
    public function getOetbconfautogetcust()
    {
        return $this->oetbconfautogetcust;
    }

    /**
     * Get the [oetbcon3autogetitem] column value.
     *
     * @return string
     */
    public function getOetbcon3autogetitem()
    {
        return $this->oetbcon3autogetitem;
    }

    /**
     * Get the [oetbconfrqstheaddtl] column value.
     *
     * @return string
     */
    public function getOetbconfrqstheaddtl()
    {
        return $this->oetbconfrqstheaddtl;
    }

    /**
     * Get the [oetbconfcancheaddtl] column value.
     *
     * @return string
     */
    public function getOetbconfcancheaddtl()
    {
        return $this->oetbconfcancheaddtl;
    }

    /**
     * Get the [oetbconfuseinvcasship] column value.
     *
     * @return string
     */
    public function getOetbconfuseinvcasship()
    {
        return $this->oetbconfuseinvcasship;
    }

    /**
     * Get the [oetbcon3usearrvdate] column value.
     *
     * @return string
     */
    public function getOetbcon3usearrvdate()
    {
        return $this->oetbcon3usearrvdate;
    }

    /**
     * Get the [oetbconfseparatecred] column value.
     *
     * @return string
     */
    public function getOetbconfseparatecred()
    {
        return $this->oetbconfseparatecred;
    }

    /**
     * Get the [oetbcon3applycredits] column value.
     *
     * @return string
     */
    public function getOetbcon3applycredits()
    {
        return $this->oetbcon3applycredits;
    }

    /**
     * Get the [oetbconfwarnnotnew] column value.
     *
     * @return string
     */
    public function getOetbconfwarnnotnew()
    {
        return $this->oetbconfwarnnotnew;
    }

    /**
     * Get the [oetbconfwarnbotozero] column value.
     *
     * @return string
     */
    public function getOetbconfwarnbotozero()
    {
        return $this->oetbconfwarnbotozero;
    }

    /**
     * Get the [oetbcon2providerouting] column value.
     *
     * @return string
     */
    public function getOetbcon2providerouting()
    {
        return $this->oetbcon2providerouting;
    }

    /**
     * Get the [oetbcon2srtrtbyrqstdte] column value.
     *
     * @return string
     */
    public function getOetbcon2srtrtbyrqstdte()
    {
        return $this->oetbcon2srtrtbyrqstdte;
    }

    /**
     * Get the [oetbconfusesoreview] column value.
     *
     * @return string
     */
    public function getOetbconfusesoreview()
    {
        return $this->oetbconfusesoreview;
    }

    /**
     * Get the [oetbconfpicknotedef] column value.
     *
     * @return string
     */
    public function getOetbconfpicknotedef()
    {
        return $this->oetbconfpicknotedef;
    }

    /**
     * Get the [oetbconfpacknotedef] column value.
     *
     * @return string
     */
    public function getOetbconfpacknotedef()
    {
        return $this->oetbconfpacknotedef;
    }

    /**
     * Get the [oetbconfpicksort] column value.
     *
     * @return string
     */
    public function getOetbconfpicksort()
    {
        return $this->oetbconfpicksort;
    }

    /**
     * Get the [oetbconfpacksort] column value.
     *
     * @return string
     */
    public function getOetbconfpacksort()
    {
        return $this->oetbconfpacksort;
    }

    /**
     * Get the [oetbconfprtpriconly] column value.
     *
     * @return string
     */
    public function getOetbconfprtpriconly()
    {
        return $this->oetbconfprtpriconly;
    }

    /**
     * Get the [oetbconfprtneg] column value.
     *
     * @return string
     */
    public function getOetbconfprtneg()
    {
        return $this->oetbconfprtneg;
    }

    /**
     * Get the [oetbcon2prtpackageinfo] column value.
     *
     * @return string
     */
    public function getOetbcon2prtpackageinfo()
    {
        return $this->oetbcon2prtpackageinfo;
    }

    /**
     * Get the [oetbcon2innerpacklabel] column value.
     *
     * @return string
     */
    public function getOetbcon2innerpacklabel()
    {
        return $this->oetbcon2innerpacklabel;
    }

    /**
     * Get the [oetbcon2outerpacklabel] column value.
     *
     * @return string
     */
    public function getOetbcon2outerpacklabel()
    {
        return $this->oetbcon2outerpacklabel;
    }

    /**
     * Get the [oetbcon2shiptarelabel] column value.
     *
     * @return string
     */
    public function getOetbcon2shiptarelabel()
    {
        return $this->oetbcon2shiptarelabel;
    }

    /**
     * Get the [oetbconfprtpick] column value.
     *
     * @return string
     */
    public function getOetbconfprtpick()
    {
        return $this->oetbconfprtpick;
    }

    /**
     * Get the [oetbconfpicprioseq] column value.
     *
     * @return string
     */
    public function getOetbconfpicprioseq()
    {
        return $this->oetbconfpicprioseq;
    }

    /**
     * Get the [oetbconfprtpack] column value.
     *
     * @return string
     */
    public function getOetbconfprtpack()
    {
        return $this->oetbconfprtpack;
    }

    /**
     * Get the [oetbconfprtinv] column value.
     *
     * @return string
     */
    public function getOetbconfprtinv()
    {
        return $this->oetbconfprtinv;
    }

    /**
     * Get the [oetbcon2prtcredmemo] column value.
     *
     * @return string
     */
    public function getOetbcon2prtcredmemo()
    {
        return $this->oetbcon2prtcredmemo;
    }

    /**
     * Get the [oetbconfcrntdate] column value.
     *
     * @return string
     */
    public function getOetbconfcrntdate()
    {
        return $this->oetbconfcrntdate;
    }

    /**
     * Get the [oetbconfmarkpicked] column value.
     *
     * @return string
     */
    public function getOetbconfmarkpicked()
    {
        return $this->oetbconfmarkpicked;
    }

    /**
     * Get the [oetbconfshowunavail] column value.
     *
     * @return string
     */
    public function getOetbconfshowunavail()
    {
        return $this->oetbconfshowunavail;
    }

    /**
     * Get the [oetbconfdecplaces] column value.
     *
     * @return int
     */
    public function getOetbconfdecplaces()
    {
        return $this->oetbconfdecplaces;
    }

    /**
     * Get the [oetbconfwarndup] column value.
     *
     * @return string
     */
    public function getOetbconfwarndup()
    {
        return $this->oetbconfwarndup;
    }

    /**
     * Get the [oetbconfdefpick] column value.
     *
     * @return string
     */
    public function getOetbconfdefpick()
    {
        return $this->oetbconfdefpick;
    }

    /**
     * Get the [oetbconfdefpack] column value.
     *
     * @return string
     */
    public function getOetbconfdefpack()
    {
        return $this->oetbconfdefpack;
    }

    /**
     * Get the [oetbconfdefinvc] column value.
     *
     * @return string
     */
    public function getOetbconfdefinvc()
    {
        return $this->oetbconfdefinvc;
    }

    /**
     * Get the [oetbconfdefack] column value.
     *
     * @return string
     */
    public function getOetbconfdefack()
    {
        return $this->oetbconfdefack;
    }

    /**
     * Get the [oetbconfacksortopt] column value.
     *
     * @return string
     */
    public function getOetbconfacksortopt()
    {
        return $this->oetbconfacksortopt;
    }

    /**
     * Get the [oetbconfreleasenbr] column value.
     *
     * @return string
     */
    public function getOetbconfreleasenbr()
    {
        return $this->oetbconfreleasenbr;
    }

    /**
     * Get the [oetbconfpodetlinenbr] column value.
     *
     * @return string
     */
    public function getOetbconfpodetlinenbr()
    {
        return $this->oetbconfpodetlinenbr;
    }

    /**
     * Get the [oetbconfdetlinebinnbr] column value.
     *
     * @return string
     */
    public function getOetbconfdetlinebinnbr()
    {
        return $this->oetbconfdetlinebinnbr;
    }

    /**
     * Get the [oetbconfsplitbywhse] column value.
     *
     * @return string
     */
    public function getOetbconfsplitbywhse()
    {
        return $this->oetbconfsplitbywhse;
    }

    /**
     * Get the [oetbcon3allowmultwhse] column value.
     *
     * @return string
     */
    public function getOetbcon3allowmultwhse()
    {
        return $this->oetbcon3allowmultwhse;
    }

    /**
     * Get the [oetbconfuseorigwhse] column value.
     *
     * @return string
     */
    public function getOetbconfuseorigwhse()
    {
        return $this->oetbconfuseorigwhse;
    }

    /**
     * Get the [oetbconfuseesosingle] column value.
     *
     * @return string
     */
    public function getOetbconfuseesosingle()
    {
        return $this->oetbconfuseesosingle;
    }

    /**
     * Get the [oetbconfcreatepo] column value.
     *
     * @return string
     */
    public function getOetbconfcreatepo()
    {
        return $this->oetbconfcreatepo;
    }

    /**
     * Get the [oetbconfbestprice] column value.
     *
     * @return string
     */
    public function getOetbconfbestprice()
    {
        return $this->oetbconfbestprice;
    }

    /**
     * Get the [oetbconfesobacktonew] column value.
     *
     * @return string
     */
    public function getOetbconfesobacktonew()
    {
        return $this->oetbconfesobacktonew;
    }

    /**
     * Get the [oetbconfpickprintdrop] column value.
     *
     * @return string
     */
    public function getOetbconfpickprintdrop()
    {
        return $this->oetbconfpickprintdrop;
    }

    /**
     * Get the [oetbconfwarnmultpo] column value.
     *
     * @return string
     */
    public function getOetbconfwarnmultpo()
    {
        return $this->oetbconfwarnmultpo;
    }

    /**
     * Get the [oetbconfalertitemquote] column value.
     *
     * @return string
     */
    public function getOetbconfalertitemquote()
    {
        return $this->oetbconfalertitemquote;
    }

    /**
     * Get the [oetbcon3askchgprcwqty] column value.
     *
     * @return string
     */
    public function getOetbcon3askchgprcwqty()
    {
        return $this->oetbcon3askchgprcwqty;
    }

    /**
     * Get the [oetbcon3tenqtybrks] column value.
     *
     * @return string
     */
    public function getOetbcon3tenqtybrks()
    {
        return $this->oetbcon3tenqtybrks;
    }

    /**
     * Get the [oetbconfdecordrpric] column value.
     *
     * @return int
     */
    public function getOetbconfdecordrpric()
    {
        return $this->oetbconfdecordrpric;
    }

    /**
     * Get the [oetbcon2provlostsales] column value.
     *
     * @return string
     */
    public function getOetbcon2provlostsales()
    {
        return $this->oetbcon2provlostsales;
    }

    /**
     * Get the [oetbcon2askreasoncode] column value.
     *
     * @return string
     */
    public function getOetbcon2askreasoncode()
    {
        return $this->oetbcon2askreasoncode;
    }

    /**
     * Get the [oetbcon2defreasoncode] column value.
     *
     * @return string
     */
    public function getOetbcon2defreasoncode()
    {
        return $this->oetbcon2defreasoncode;
    }

    /**
     * Get the [oetbcon2bordcntl] column value.
     *
     * @return string
     */
    public function getOetbcon2bordcntl()
    {
        return $this->oetbcon2bordcntl;
    }

    /**
     * Get the [oetbcon2defreabocode] column value.
     *
     * @return string
     */
    public function getOetbcon2defreabocode()
    {
        return $this->oetbcon2defreabocode;
    }

    /**
     * Get the [oetbcon2numdayssavls] column value.
     *
     * @return int
     */
    public function getOetbcon2numdayssavls()
    {
        return $this->oetbcon2numdayssavls;
    }

    /**
     * Get the [oetbcon2callbacknotif] column value.
     *
     * @return string
     */
    public function getOetbcon2callbacknotif()
    {
        return $this->oetbcon2callbacknotif;
    }

    /**
     * Get the [oetbcon2defdayswhenin] column value.
     *
     * @return int
     */
    public function getOetbcon2defdayswhenin()
    {
        return $this->oetbcon2defdayswhenin;
    }

    /**
     * Get the [oetbcon2addsubsls] column value.
     *
     * @return string
     */
    public function getOetbcon2addsubsls()
    {
        return $this->oetbcon2addsubsls;
    }

    /**
     * Get the [oetbcon2defreasubscode] column value.
     *
     * @return string
     */
    public function getOetbcon2defreasubscode()
    {
        return $this->oetbcon2defreasubscode;
    }

    /**
     * Get the [oetbcon2ordtypnorm] column value.
     *
     * @return string
     */
    public function getOetbcon2ordtypnorm()
    {
        return $this->oetbcon2ordtypnorm;
    }

    /**
     * Get the [oetbcon2ordtyprep] column value.
     *
     * @return string
     */
    public function getOetbcon2ordtyprep()
    {
        return $this->oetbcon2ordtyprep;
    }

    /**
     * Get the [oetbcon2ordtypserv] column value.
     *
     * @return string
     */
    public function getOetbcon2ordtypserv()
    {
        return $this->oetbcon2ordtypserv;
    }

    /**
     * Get the [oetbcon2defordtyp] column value.
     *
     * @return string
     */
    public function getOetbcon2defordtyp()
    {
        return $this->oetbcon2defordtyp;
    }

    /**
     * Get the [oetbconfchgpric] column value.
     *
     * @return string
     */
    public function getOetbconfchgpric()
    {
        return $this->oetbconfchgpric;
    }

    /**
     * Get the [oetbcon2spordpricezero] column value.
     *
     * @return string
     */
    public function getOetbcon2spordpricezero()
    {
        return $this->oetbcon2spordpricezero;
    }

    /**
     * Get the [oetbconfinactpricezero] column value.
     *
     * @return string
     */
    public function getOetbconfinactpricezero()
    {
        return $this->oetbconfinactpricezero;
    }

    /**
     * Get the [oetbcon2reseq] column value.
     *
     * @return string
     */
    public function getOetbcon2reseq()
    {
        return $this->oetbcon2reseq;
    }

    /**
     * Get the [oetbcon2reseqby] column value.
     *
     * @return string
     */
    public function getOetbcon2reseqby()
    {
        return $this->oetbcon2reseqby;
    }

    /**
     * Get the [oetbcon2minqtysales] column value.
     *
     * @return string
     */
    public function getOetbcon2minqtysales()
    {
        return $this->oetbcon2minqtysales;
    }

    /**
     * Get the [oetbcon2chgorder] column value.
     *
     * @return string
     */
    public function getOetbcon2chgorder()
    {
        return $this->oetbcon2chgorder;
    }

    /**
     * Get the [oetbcon2vercomp] column value.
     *
     * @return string
     */
    public function getOetbcon2vercomp()
    {
        return $this->oetbcon2vercomp;
    }

    /**
     * Get the [oetbcon2prtinv] column value.
     *
     * @return string
     */
    public function getOetbcon2prtinv()
    {
        return $this->oetbcon2prtinv;
    }

    /**
     * Get the [oetbcon2dynamicpicktick] column value.
     *
     * @return string
     */
    public function getOetbcon2dynamicpicktick()
    {
        return $this->oetbcon2dynamicpicktick;
    }

    /**
     * Get the [oetbcon2dynamicinvoice] column value.
     *
     * @return string
     */
    public function getOetbcon2dynamicinvoice()
    {
        return $this->oetbcon2dynamicinvoice;
    }

    /**
     * Get the [oetbcon2edidefinvoice] column value.
     *
     * @return string
     */
    public function getOetbcon2edidefinvoice()
    {
        return $this->oetbcon2edidefinvoice;
    }

    /**
     * Get the [oetbcon2allowccpick] column value.
     *
     * @return string
     */
    public function getOetbcon2allowccpick()
    {
        return $this->oetbcon2allowccpick;
    }

    /**
     * Get the [oetbcon2autoccwind] column value.
     *
     * @return string
     */
    public function getOetbcon2autoccwind()
    {
        return $this->oetbcon2autoccwind;
    }

    /**
     * Get the [oetbcon2autoccupdate] column value.
     *
     * @return string
     */
    public function getOetbcon2autoccupdate()
    {
        return $this->oetbcon2autoccupdate;
    }

    /**
     * Get the [oetbcon2allowapvdccchg] column value.
     *
     * @return string
     */
    public function getOetbcon2allowapvdccchg()
    {
        return $this->oetbcon2allowapvdccchg;
    }

    /**
     * Get the [oetbcon3apvdbckordclear] column value.
     *
     * @return string
     */
    public function getOetbcon3apvdbckordclear()
    {
        return $this->oetbcon3apvdbckordclear;
    }

    /**
     * Get the [oetbcon2polwhichcost] column value.
     *
     * @return string
     */
    public function getOetbcon2polwhichcost()
    {
        return $this->oetbcon2polwhichcost;
    }

    /**
     * Get the [oetbcon2revhazard] column value.
     *
     * @return string
     */
    public function getOetbcon2revhazard()
    {
        return $this->oetbcon2revhazard;
    }

    /**
     * Get the [oetbcon2showdisclist] column value.
     *
     * @return string
     */
    public function getOetbcon2showdisclist()
    {
        return $this->oetbcon2showdisclist;
    }

    /**
     * Get the [oetbcon2chglist] column value.
     *
     * @return string
     */
    public function getOetbcon2chglist()
    {
        return $this->oetbcon2chglist;
    }

    /**
     * Get the [oetbcon2maillist] column value.
     *
     * @return string
     */
    public function getOetbcon2maillist()
    {
        return $this->oetbcon2maillist;
    }

    /**
     * Get the [oetbcon2nameformat] column value.
     *
     * @return string
     */
    public function getOetbcon2nameformat()
    {
        return $this->oetbcon2nameformat;
    }

    /**
     * Get the [oetbcon2mailidtype] column value.
     *
     * @return string
     */
    public function getOetbcon2mailidtype()
    {
        return $this->oetbcon2mailidtype;
    }

    /**
     * Get the [oetbcon2cashdrawerpswd] column value.
     *
     * @return string
     */
    public function getOetbcon2cashdrawerpswd()
    {
        return $this->oetbcon2cashdrawerpswd;
    }

    /**
     * Get the [oetbcon2upsonline] column value.
     *
     * @return string
     */
    public function getOetbcon2upsonline()
    {
        return $this->oetbcon2upsonline;
    }

    /**
     * Get the [oetbcon2picorver] column value.
     *
     * @return string
     */
    public function getOetbcon2picorver()
    {
        return $this->oetbcon2picorver;
    }

    /**
     * Get the [oetbcon2combback] column value.
     *
     * @return string
     */
    public function getOetbcon2combback()
    {
        return $this->oetbcon2combback;
    }

    /**
     * Get the [oetbcon2frtallowamt] column value.
     *
     * @return int
     */
    public function getOetbcon2frtallowamt()
    {
        return $this->oetbcon2frtallowamt;
    }

    /**
     * Get the [oetbcon3shipmoreordered] column value.
     *
     * @return string
     */
    public function getOetbcon3shipmoreordered()
    {
        return $this->oetbcon3shipmoreordered;
    }

    /**
     * Get the [oetbcon3warnshipmore] column value.
     *
     * @return string
     */
    public function getOetbcon3warnshipmore()
    {
        return $this->oetbcon3warnshipmore;
    }

    /**
     * Get the [oetbcon3proformafromeso] column value.
     *
     * @return string
     */
    public function getOetbcon3proformafromeso()
    {
        return $this->oetbcon3proformafromeso;
    }

    /**
     * Get the [oetbcon3pickpackcode] column value.
     *
     * @return string
     */
    public function getOetbcon3pickpackcode()
    {
        return $this->oetbcon3pickpackcode;
    }

    /**
     * Get the [oetbcon2usedept] column value.
     *
     * @return string
     */
    public function getOetbcon2usedept()
    {
        return $this->oetbcon2usedept;
    }

    /**
     * Get the [oetbcon2usedivision] column value.
     *
     * @return string
     */
    public function getOetbcon2usedivision()
    {
        return $this->oetbcon2usedivision;
    }

    /**
     * Get the [oetbcon2defmfecode] column value.
     *
     * @return string
     */
    public function getOetbcon2defmfecode()
    {
        return $this->oetbcon2defmfecode;
    }

    /**
     * Get the [oetbcon2showavgcost] column value.
     *
     * @return string
     */
    public function getOetbcon2showavgcost()
    {
        return $this->oetbcon2showavgcost;
    }

    /**
     * Get the [oetbcon2fedex] column value.
     *
     * @return string
     */
    public function getOetbcon2fedex()
    {
        return $this->oetbcon2fedex;
    }

    /**
     * Get the [oetbcon3deffrghtgrup] column value.
     *
     * @return string
     */
    public function getOetbcon3deffrghtgrup()
    {
        return $this->oetbcon3deffrghtgrup;
    }

    /**
     * Get the [oetbcon3upsmysqldbname] column value.
     *
     * @return string
     */
    public function getOetbcon3upsmysqldbname()
    {
        return $this->oetbcon3upsmysqldbname;
    }

    /**
     * Get the [oetbconfuseoptcode] column value.
     *
     * @return string
     */
    public function getOetbconfuseoptcode()
    {
        return $this->oetbconfuseoptcode;
    }

    /**
     * Get the [oetbconfscn4opt] column value.
     *
     * @return string
     */
    public function getOetbconfscn4opt()
    {
        return $this->oetbconfscn4opt;
    }

    /**
     * Get the [oetbcon2takenbyuse] column value.
     *
     * @return string
     */
    public function getOetbcon2takenbyuse()
    {
        return $this->oetbcon2takenbyuse;
    }

    /**
     * Get the [oetbcon2takenbylogin] column value.
     *
     * @return string
     */
    public function getOetbcon2takenbylogin()
    {
        return $this->oetbcon2takenbylogin;
    }

    /**
     * Get the [oetbcon2takenbyforce] column value.
     *
     * @return string
     */
    public function getOetbcon2takenbyforce()
    {
        return $this->oetbcon2takenbyforce;
    }

    /**
     * Get the [oetbcon2pickedbyuse] column value.
     *
     * @return string
     */
    public function getOetbcon2pickedbyuse()
    {
        return $this->oetbcon2pickedbyuse;
    }

    /**
     * Get the [oetbcon2pickedbyforce] column value.
     *
     * @return string
     */
    public function getOetbcon2pickedbyforce()
    {
        return $this->oetbcon2pickedbyforce;
    }

    /**
     * Get the [oetbcon2pickedbyproc] column value.
     *
     * @return string
     */
    public function getOetbcon2pickedbyproc()
    {
        return $this->oetbcon2pickedbyproc;
    }

    /**
     * Get the [oetbcon2packedbyuse] column value.
     *
     * @return string
     */
    public function getOetbcon2packedbyuse()
    {
        return $this->oetbcon2packedbyuse;
    }

    /**
     * Get the [oetbcon2packedbyforce] column value.
     *
     * @return string
     */
    public function getOetbcon2packedbyforce()
    {
        return $this->oetbcon2packedbyforce;
    }

    /**
     * Get the [oetbcon2verifiedbyuse] column value.
     *
     * @return string
     */
    public function getOetbcon2verifiedbyuse()
    {
        return $this->oetbcon2verifiedbyuse;
    }

    /**
     * Get the [oetbcon2verifiedbylogin] column value.
     *
     * @return string
     */
    public function getOetbcon2verifiedbylogin()
    {
        return $this->oetbcon2verifiedbylogin;
    }

    /**
     * Get the [oetbcon2verifiedbyforce] column value.
     *
     * @return string
     */
    public function getOetbcon2verifiedbyforce()
    {
        return $this->oetbcon2verifiedbyforce;
    }

    /**
     * Get the [oetbconfoptlabl1] column value.
     *
     * @return string
     */
    public function getOetbconfoptlabl1()
    {
        return $this->oetbconfoptlabl1;
    }

    /**
     * Get the [oetbcon2ucode1force] column value.
     *
     * @return string
     */
    public function getOetbcon2ucode1force()
    {
        return $this->oetbcon2ucode1force;
    }

    /**
     * Get the [oetbconfoptlabl2] column value.
     *
     * @return string
     */
    public function getOetbconfoptlabl2()
    {
        return $this->oetbconfoptlabl2;
    }

    /**
     * Get the [oetbcon2ucode2force] column value.
     *
     * @return string
     */
    public function getOetbcon2ucode2force()
    {
        return $this->oetbcon2ucode2force;
    }

    /**
     * Get the [oetbconfoptlabl3] column value.
     *
     * @return string
     */
    public function getOetbconfoptlabl3()
    {
        return $this->oetbconfoptlabl3;
    }

    /**
     * Get the [oetbcon2ucode3force] column value.
     *
     * @return string
     */
    public function getOetbcon2ucode3force()
    {
        return $this->oetbcon2ucode3force;
    }

    /**
     * Get the [oetbconfoptlabl4] column value.
     *
     * @return string
     */
    public function getOetbconfoptlabl4()
    {
        return $this->oetbconfoptlabl4;
    }

    /**
     * Get the [oetbcon2ucode4force] column value.
     *
     * @return string
     */
    public function getOetbcon2ucode4force()
    {
        return $this->oetbcon2ucode4force;
    }

    /**
     * Get the [oetbconfverifyafterpack] column value.
     *
     * @return string
     */
    public function getOetbconfverifyafterpack()
    {
        return $this->oetbconfverifyafterpack;
    }

    /**
     * Get the [oetbconfhistyrsback] column value.
     *
     * @return int
     */
    public function getOetbconfhistyrsback()
    {
        return $this->oetbconfhistyrsback;
    }

    /**
     * Get the [oetbconfrqstcatlg] column value.
     *
     * @return string
     */
    public function getOetbconfrqstcatlg()
    {
        return $this->oetbconfrqstcatlg;
    }

    /**
     * Get the [oetbcon2conpick] column value.
     *
     * @return string
     */
    public function getOetbcon2conpick()
    {
        return $this->oetbcon2conpick;
    }

    /**
     * Get the [oetbcon2allowpick] column value.
     *
     * @return string
     */
    public function getOetbcon2allowpick()
    {
        return $this->oetbcon2allowpick;
    }

    /**
     * Get the [oetbcon2combinesame] column value.
     *
     * @return string
     */
    public function getOetbcon2combinesame()
    {
        return $this->oetbcon2combinesame;
    }

    /**
     * Get the [oetbcon3autovernitems] column value.
     *
     * @return string
     */
    public function getOetbcon3autovernitems()
    {
        return $this->oetbcon3autovernitems;
    }

    /**
     * Get the [oetbcon2allowzeroqty] column value.
     *
     * @return string
     */
    public function getOetbcon2allowzeroqty()
    {
        return $this->oetbcon2allowzeroqty;
    }

    /**
     * Get the [oetbcon2allowinvalidwhse] column value.
     *
     * @return string
     */
    public function getOetbcon2allowinvalidwhse()
    {
        return $this->oetbcon2allowinvalidwhse;
    }

    /**
     * Get the [oetbcon2showediinfo] column value.
     *
     * @return string
     */
    public function getOetbcon2showediinfo()
    {
        return $this->oetbcon2showediinfo;
    }

    /**
     * Get the [oetbcon2addonsales] column value.
     *
     * @return string
     */
    public function getOetbcon2addonsales()
    {
        return $this->oetbcon2addonsales;
    }

    /**
     * Get the [oetbcon2forcedbkord] column value.
     *
     * @return string
     */
    public function getOetbcon2forcedbkord()
    {
        return $this->oetbcon2forcedbkord;
    }

    /**
     * Get the [oetbcon2updtprcdisc] column value.
     *
     * @return string
     */
    public function getOetbcon2updtprcdisc()
    {
        return $this->oetbcon2updtprcdisc;
    }

    /**
     * Get the [oetbcon2autopack] column value.
     *
     * @return string
     */
    public function getOetbcon2autopack()
    {
        return $this->oetbcon2autopack;
    }

    /**
     * Get the [oetbcon2pickboprtzqts] column value.
     *
     * @return string
     */
    public function getOetbcon2pickboprtzqts()
    {
        return $this->oetbcon2pickboprtzqts;
    }

    /**
     * Get the [oetbcon3pick00noship] column value.
     *
     * @return string
     */
    public function getOetbcon3pick00noship()
    {
        return $this->oetbcon3pick00noship;
    }

    /**
     * Get the [oetbcon2standordlead] column value.
     *
     * @return string
     */
    public function getOetbcon2standordlead()
    {
        return $this->oetbcon2standordlead;
    }

    /**
     * Get the [oetbcon2standordamnt] column value.
     *
     * @return int
     */
    public function getOetbcon2standordamnt()
    {
        return $this->oetbcon2standordamnt;
    }

    /**
     * Get the [oetbcon2inactitemcntrl] column value.
     *
     * @return string
     */
    public function getOetbcon2inactitemcntrl()
    {
        return $this->oetbcon2inactitemcntrl;
    }

    /**
     * Get the [oetbcon2useitemref] column value.
     *
     * @return string
     */
    public function getOetbcon2useitemref()
    {
        return $this->oetbcon2useitemref;
    }

    /**
     * Get the [oetbcon3upsnaftarecords] column value.
     *
     * @return string
     */
    public function getOetbcon3upsnaftarecords()
    {
        return $this->oetbcon3upsnaftarecords;
    }

    /**
     * Get the [oetbconfdfltshipwhse] column value.
     *
     * @return string
     */
    public function getOetbconfdfltshipwhse()
    {
        return $this->oetbconfdfltshipwhse;
    }

    /**
     * Get the [oetbconfdfltorigwhse] column value.
     *
     * @return string
     */
    public function getOetbconfdfltorigwhse()
    {
        return $this->oetbconfdfltorigwhse;
    }

    /**
     * Get the [oetbconfinvcwithpack] column value.
     *
     * @return string
     */
    public function getOetbconfinvcwithpack()
    {
        return $this->oetbconfinvcwithpack;
    }

    /**
     * Get the [oetbconfcarrycntrqty] column value.
     *
     * @return string
     */
    public function getOetbconfcarrycntrqty()
    {
        return $this->oetbconfcarrycntrqty;
    }

    /**
     * Get the [oetbcon3useordras] column value.
     *
     * @return string
     */
    public function getOetbcon3useordras()
    {
        return $this->oetbcon3useordras;
    }

    /**
     * Get the [oetbconfuseordrsource] column value.
     *
     * @return string
     */
    public function getOetbconfuseordrsource()
    {
        return $this->oetbconfuseordrsource;
    }

    /**
     * Get the [oetbcon3ccprocessor] column value.
     *
     * @return string
     */
    public function getOetbcon3ccprocessor()
    {
        return $this->oetbcon3ccprocessor;
    }

    /**
     * Get the [oetbcon3creditcardcap] column value.
     *
     * @return string
     */
    public function getOetbcon3creditcardcap()
    {
        return $this->oetbcon3creditcardcap;
    }

    /**
     * Get the [oetbcon3keyorcccap] column value.
     *
     * @return string
     */
    public function getOetbcon3keyorcccap()
    {
        return $this->oetbcon3keyorcccap;
    }

    /**
     * Get the [oetbcon3ccxoverlay] column value.
     *
     * @return string
     */
    public function getOetbcon3ccxoverlay()
    {
        return $this->oetbcon3ccxoverlay;
    }

    /**
     * Get the [oetbcon3cctimeout] column value.
     *
     * @return int
     */
    public function getOetbcon3cctimeout()
    {
        return $this->oetbcon3cctimeout;
    }

    /**
     * Get the [oetbcon3signaturecapture] column value.
     *
     * @return string
     */
    public function getOetbcon3signaturecapture()
    {
        return $this->oetbcon3signaturecapture;
    }

    /**
     * Get the [oetbcon3ccpreapproval] column value.
     *
     * @return string
     */
    public function getOetbcon3ccpreapproval()
    {
        return $this->oetbcon3ccpreapproval;
    }

    /**
     * Get the [oetbcon3forceccnbrentry] column value.
     *
     * @return string
     */
    public function getOetbcon3forceccnbrentry()
    {
        return $this->oetbcon3forceccnbrentry;
    }

    /**
     * Get the [oetbcon3intritemnotes] column value.
     *
     * @return string
     */
    public function getOetbcon3intritemnotes()
    {
        return $this->oetbcon3intritemnotes;
    }

    /**
     * Get the [oetbcon3mtrcert] column value.
     *
     * @return string
     */
    public function getOetbcon3mtrcert()
    {
        return $this->oetbcon3mtrcert;
    }

    /**
     * Get the [oetbcon3cofccert] column value.
     *
     * @return string
     */
    public function getOetbcon3cofccert()
    {
        return $this->oetbcon3cofccert;
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
     * Set the value of [oetbconfkey] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfkey($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oetbconfkey !== $v) {
            $this->oetbconfkey = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFKEY] = true;
        }

        return $this;
    } // setOetbconfkey()

    /**
     * Set the value of [oetbconfglifac] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfglifac($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfglifac !== $v) {
            $this->oetbconfglifac = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFGLIFAC] = true;
        }

        return $this;
    } // setOetbconfglifac()

    /**
     * Set the value of [oetbconfinifac] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfinifac($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfinifac !== $v) {
            $this->oetbconfinifac = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFINIFAC] = true;
        }

        return $this;
    } // setOetbconfinifac()

    /**
     * Set the value of [oetbconfrelivty] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfrelivty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfrelivty !== $v) {
            $this->oetbconfrelivty = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFRELIVTY] = true;
        }

        return $this;
    } // setOetbconfrelivty()

    /**
     * Set the value of [oetbconfuseordrnbr] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfuseordrnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfuseordrnbr !== $v) {
            $this->oetbconfuseordrnbr = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRNBR] = true;
        }

        return $this;
    } // setOetbconfuseordrnbr()

    /**
     * Set the value of [oetbconfdefrqstdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdefrqstdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdefrqstdate !== $v) {
            $this->oetbconfdefrqstdate = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDEFRQSTDATE] = true;
        }

        return $this;
    } // setOetbconfdefrqstdate()

    /**
     * Set the value of [oetbconfusecancdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfusecancdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfusecancdate !== $v) {
            $this->oetbconfusecancdate = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFUSECANCDATE] = true;
        }

        return $this;
    } // setOetbconfusecancdate()

    /**
     * Set the value of [oetbconfshowsp] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfshowsp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfshowsp !== $v) {
            $this->oetbconfshowsp = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFSHOWSP] = true;
        }

        return $this;
    } // setOetbconfshowsp()

    /**
     * Set the value of [oetbconfjrnlsort] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfjrnlsort($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oetbconfjrnlsort !== $v) {
            $this->oetbconfjrnlsort = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFJRNLSORT] = true;
        }

        return $this;
    } // setOetbconfjrnlsort()

    /**
     * Set the value of [oetbconfuseprepsoopt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfuseprepsoopt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfuseprepsoopt !== $v) {
            $this->oetbconfuseprepsoopt = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFUSEPREPSOOPT] = true;
        }

        return $this;
    } // setOetbconfuseprepsoopt()

    /**
     * Set the value of [oetbconfdispbillto] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdispbillto($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdispbillto !== $v) {
            $this->oetbconfdispbillto = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDISPBILLTO] = true;
        }

        return $this;
    } // setOetbconfdispbillto()

    /**
     * Set the value of [oetbconfslctflm] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfslctflm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfslctflm !== $v) {
            $this->oetbconfslctflm = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFSLCTFLM] = true;
        }

        return $this;
    } // setOetbconfslctflm()

    /**
     * Set the value of [oetbcon3usestockpull] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3usestockpull($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3usestockpull !== $v) {
            $this->oetbcon3usestockpull = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3USESTOCKPULL] = true;
        }

        return $this;
    } // setOetbcon3usestockpull()

    /**
     * Set the value of [oetbconfqtytoship] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfqtytoship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfqtytoship !== $v) {
            $this->oetbconfqtytoship = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIP] = true;
        }

        return $this;
    } // setOetbconfqtytoship()

    /**
     * Set the value of [oetbconfqtytoshipdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfqtytoshipdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfqtytoshipdef !== $v) {
            $this->oetbconfqtytoshipdef = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIPDEF] = true;
        }

        return $this;
    } // setOetbconfqtytoshipdef()

    /**
     * Set the value of [oetbconfdfltordrqty] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdfltordrqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdfltordrqty !== $v) {
            $this->oetbconfdfltordrqty = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDFLTORDRQTY] = true;
        }

        return $this;
    } // setOetbconfdfltordrqty()

    /**
     * Set the value of [oetbconfallocqtytoship] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfallocqtytoship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfallocqtytoship !== $v) {
            $this->oetbconfallocqtytoship = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFALLOCQTYTOSHIP] = true;
        }

        return $this;
    } // setOetbconfallocqtytoship()

    /**
     * Set the value of [oetbconfoverallocqts] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfoverallocqts($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfoverallocqts !== $v) {
            $this->oetbconfoverallocqts = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFOVERALLOCQTS] = true;
        }

        return $this;
    } // setOetbconfoverallocqts()

    /**
     * Set the value of [oetbcon3completelotbin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3completelotbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3completelotbin !== $v) {
            $this->oetbcon3completelotbin = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3COMPLETELOTBIN] = true;
        }

        return $this;
    } // setOetbcon3completelotbin()

    /**
     * Set the value of [oetbcon3rqtsopt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3rqtsopt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3rqtsopt !== $v) {
            $this->oetbcon3rqtsopt = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3RQTSOPT] = true;
        }

        return $this;
    } // setOetbcon3rqtsopt()

    /**
     * Set the value of [oetbcon2shipcomphold] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2shipcomphold($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oetbcon2shipcomphold !== $v) {
            $this->oetbcon2shipcomphold = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2SHIPCOMPHOLD] = true;
        }

        return $this;
    } // setOetbcon2shipcomphold()

    /**
     * Set the value of [oetbcon3usesaleforecast] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3usesaleforecast($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3usesaleforecast !== $v) {
            $this->oetbcon3usesaleforecast = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3USESALEFORECAST] = true;
        }

        return $this;
    } // setOetbcon3usesaleforecast()

    /**
     * Set the value of [oetbconfverfstopneg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfverfstopneg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfverfstopneg !== $v) {
            $this->oetbconfverfstopneg = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFVERFSTOPNEG] = true;
        }

        return $this;
    } // setOetbconfverfstopneg()

    /**
     * Set the value of [oetbconfverfaudtrept] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfverfaudtrept($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfverfaudtrept !== $v) {
            $this->oetbconfverfaudtrept = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFVERFAUDTREPT] = true;
        }

        return $this;
    } // setOetbconfverfaudtrept()

    /**
     * Set the value of [oetbconfagelevldisp] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfagelevldisp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfagelevldisp !== $v) {
            $this->oetbconfagelevldisp = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFAGELEVLDISP] = true;
        }

        return $this;
    } // setOetbconfagelevldisp()

    /**
     * Set the value of [oetbconfagealltime] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfagealltime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfagealltime !== $v) {
            $this->oetbconfagealltime = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFAGEALLTIME] = true;
        }

        return $this;
    } // setOetbconfagealltime()

    /**
     * Set the value of [oetbconfageathold] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfageathold($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfageathold !== $v) {
            $this->oetbconfageathold = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFAGEATHOLD] = true;
        }

        return $this;
    } // setOetbconfageathold()

    /**
     * Set the value of [oetbconfshowatlevl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfshowatlevl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfshowatlevl !== $v) {
            $this->oetbconfshowatlevl = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFSHOWATLEVL] = true;
        }

        return $this;
    } // setOetbconfshowatlevl()

    /**
     * Set the value of [oetbconfshowitem] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfshowitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfshowitem !== $v) {
            $this->oetbconfshowitem = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFSHOWITEM] = true;
        }

        return $this;
    } // setOetbconfshowitem()

    /**
     * Set the value of [oetbconfstoppnt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfstoppnt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfstoppnt !== $v) {
            $this->oetbconfstoppnt = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFSTOPPNT] = true;
        }

        return $this;
    } // setOetbconfstoppnt()

    /**
     * Set the value of [oetbconfpricwind] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfpricwind($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfpricwind !== $v) {
            $this->oetbconfpricwind = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFPRICWIND] = true;
        }

        return $this;
    } // setOetbconfpricwind()

    /**
     * Set the value of [oetbconfshowcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfshowcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfshowcost !== $v) {
            $this->oetbconfshowcost = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFSHOWCOST] = true;
        }

        return $this;
    } // setOetbconfshowcost()

    /**
     * Set the value of [oetbconfcosttouse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfcosttouse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfcosttouse !== $v) {
            $this->oetbconfcosttouse = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFCOSTTOUSE] = true;
        }

        return $this;
    } // setOetbconfcosttouse()

    /**
     * Set the value of [oetbconfshowmarg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfshowmarg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfshowmarg !== $v) {
            $this->oetbconfshowmarg = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFSHOWMARG] = true;
        }

        return $this;
    } // setOetbconfshowmarg()

    /**
     * Set the value of [oetbconffxoe] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconffxoe($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconffxoe !== $v) {
            $this->oetbconffxoe = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFFXOE] = true;
        }

        return $this;
    } // setOetbconffxoe()

    /**
     * Set the value of [oetbconffxinv] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconffxinv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconffxinv !== $v) {
            $this->oetbconffxinv = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFFXINV] = true;
        }

        return $this;
    } // setOetbconffxinv()

    /**
     * Set the value of [oetbconfdispvia] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdispvia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdispvia !== $v) {
            $this->oetbconfdispvia = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDISPVIA] = true;
        }

        return $this;
    } // setOetbconfdispvia()

    /**
     * Set the value of [oetbconfdispcaseqty] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdispcaseqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdispcaseqty !== $v) {
            $this->oetbconfdispcaseqty = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDISPCASEQTY] = true;
        }

        return $this;
    } // setOetbconfdispcaseqty()

    /**
     * Set the value of [oetbconffrtin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconffrtin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconffrtin !== $v) {
            $this->oetbconffrtin = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFFRTIN] = true;
        }

        return $this;
    } // setOetbconffrtin()

    /**
     * Set the value of [oetbconffrtinglacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconffrtinglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconffrtinglacct !== $v) {
            $this->oetbconffrtinglacct = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFFRTINGLACCT] = true;
        }

        return $this;
    } // setOetbconffrtinglacct()

    /**
     * Set the value of [oetbconfmincharge] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfmincharge($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfmincharge !== $v) {
            $this->oetbconfmincharge = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFMINCHARGE] = true;
        }

        return $this;
    } // setOetbconfmincharge()

    /**
     * Set the value of [oetbconfminchrgglacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfminchrgglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfminchrgglacct !== $v) {
            $this->oetbconfminchrgglacct = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFMINCHRGGLACCT] = true;
        }

        return $this;
    } // setOetbconfminchrgglacct()

    /**
     * Set the value of [oetbconfdropshipchrg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdropshipchrg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdropshipchrg !== $v) {
            $this->oetbconfdropshipchrg = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDROPSHIPCHRG] = true;
        }

        return $this;
    } // setOetbconfdropshipchrg()

    /**
     * Set the value of [oetbconfdropshpglacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdropshpglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdropshpglacct !== $v) {
            $this->oetbconfdropshpglacct = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDROPSHPGLACCT] = true;
        }

        return $this;
    } // setOetbconfdropshpglacct()

    /**
     * Set the value of [oetbconfnontaxcustcode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfnontaxcustcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfnontaxcustcode !== $v) {
            $this->oetbconfnontaxcustcode = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFNONTAXCUSTCODE] = true;
        }

        return $this;
    } // setOetbconfnontaxcustcode()

    /**
     * Set the value of [oetbconfhstaxid] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfhstaxid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfhstaxid !== $v) {
            $this->oetbconfhstaxid = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFHSTAXID] = true;
        }

        return $this;
    } // setOetbconfhstaxid()

    /**
     * Set the value of [oetbconfhsfrtid] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfhsfrtid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfhsfrtid !== $v) {
            $this->oetbconfhsfrtid = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFHSFRTID] = true;
        }

        return $this;
    } // setOetbconfhsfrtid()

    /**
     * Set the value of [oetbconfhsmiscid] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfhsmiscid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfhsmiscid !== $v) {
            $this->oetbconfhsmiscid = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFHSMISCID] = true;
        }

        return $this;
    } // setOetbconfhsmiscid()

    /**
     * Set the value of [oetbcon2hscusdid] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2hscusdid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2hscusdid !== $v) {
            $this->oetbcon2hscusdid = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2HSCUSDID] = true;
        }

        return $this;
    } // setOetbcon2hscusdid()

    /**
     * Set the value of [oetbcon3hsfrtinid] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3hsfrtinid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3hsfrtinid !== $v) {
            $this->oetbcon3hsfrtinid = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3HSFRTINID] = true;
        }

        return $this;
    } // setOetbcon3hsfrtinid()

    /**
     * Set the value of [oetbcon3hsdropid] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3hsdropid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3hsdropid !== $v) {
            $this->oetbcon3hsdropid = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3HSDROPID] = true;
        }

        return $this;
    } // setOetbcon3hsdropid()

    /**
     * Set the value of [oetbcon3hsminordid] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3hsminordid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3hsminordid !== $v) {
            $this->oetbcon3hsminordid = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3HSMINORDID] = true;
        }

        return $this;
    } // setOetbcon3hsminordid()

    /**
     * Set the value of [oetbconfheadgetdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfheadgetdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfheadgetdef !== $v) {
            $this->oetbconfheadgetdef = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFHEADGETDEF] = true;
        }

        return $this;
    } // setOetbconfheadgetdef()

    /**
     * Set the value of [oetbconfitemgetdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfitemgetdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfitemgetdef !== $v) {
            $this->oetbconfitemgetdef = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFITEMGETDEF] = true;
        }

        return $this;
    } // setOetbconfitemgetdef()

    /**
     * Set the value of [oetbconfautogetcust] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfautogetcust($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfautogetcust !== $v) {
            $this->oetbconfautogetcust = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFAUTOGETCUST] = true;
        }

        return $this;
    } // setOetbconfautogetcust()

    /**
     * Set the value of [oetbcon3autogetitem] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3autogetitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3autogetitem !== $v) {
            $this->oetbcon3autogetitem = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3AUTOGETITEM] = true;
        }

        return $this;
    } // setOetbcon3autogetitem()

    /**
     * Set the value of [oetbconfrqstheaddtl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfrqstheaddtl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfrqstheaddtl !== $v) {
            $this->oetbconfrqstheaddtl = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFRQSTHEADDTL] = true;
        }

        return $this;
    } // setOetbconfrqstheaddtl()

    /**
     * Set the value of [oetbconfcancheaddtl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfcancheaddtl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfcancheaddtl !== $v) {
            $this->oetbconfcancheaddtl = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFCANCHEADDTL] = true;
        }

        return $this;
    } // setOetbconfcancheaddtl()

    /**
     * Set the value of [oetbconfuseinvcasship] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfuseinvcasship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfuseinvcasship !== $v) {
            $this->oetbconfuseinvcasship = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFUSEINVCASSHIP] = true;
        }

        return $this;
    } // setOetbconfuseinvcasship()

    /**
     * Set the value of [oetbcon3usearrvdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3usearrvdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3usearrvdate !== $v) {
            $this->oetbcon3usearrvdate = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3USEARRVDATE] = true;
        }

        return $this;
    } // setOetbcon3usearrvdate()

    /**
     * Set the value of [oetbconfseparatecred] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfseparatecred($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfseparatecred !== $v) {
            $this->oetbconfseparatecred = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFSEPARATECRED] = true;
        }

        return $this;
    } // setOetbconfseparatecred()

    /**
     * Set the value of [oetbcon3applycredits] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3applycredits($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3applycredits !== $v) {
            $this->oetbcon3applycredits = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3APPLYCREDITS] = true;
        }

        return $this;
    } // setOetbcon3applycredits()

    /**
     * Set the value of [oetbconfwarnnotnew] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfwarnnotnew($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfwarnnotnew !== $v) {
            $this->oetbconfwarnnotnew = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFWARNNOTNEW] = true;
        }

        return $this;
    } // setOetbconfwarnnotnew()

    /**
     * Set the value of [oetbconfwarnbotozero] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfwarnbotozero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfwarnbotozero !== $v) {
            $this->oetbconfwarnbotozero = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFWARNBOTOZERO] = true;
        }

        return $this;
    } // setOetbconfwarnbotozero()

    /**
     * Set the value of [oetbcon2providerouting] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2providerouting($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2providerouting !== $v) {
            $this->oetbcon2providerouting = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2PROVIDEROUTING] = true;
        }

        return $this;
    } // setOetbcon2providerouting()

    /**
     * Set the value of [oetbcon2srtrtbyrqstdte] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2srtrtbyrqstdte($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2srtrtbyrqstdte !== $v) {
            $this->oetbcon2srtrtbyrqstdte = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2SRTRTBYRQSTDTE] = true;
        }

        return $this;
    } // setOetbcon2srtrtbyrqstdte()

    /**
     * Set the value of [oetbconfusesoreview] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfusesoreview($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfusesoreview !== $v) {
            $this->oetbconfusesoreview = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFUSESOREVIEW] = true;
        }

        return $this;
    } // setOetbconfusesoreview()

    /**
     * Set the value of [oetbconfpicknotedef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfpicknotedef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfpicknotedef !== $v) {
            $this->oetbconfpicknotedef = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFPICKNOTEDEF] = true;
        }

        return $this;
    } // setOetbconfpicknotedef()

    /**
     * Set the value of [oetbconfpacknotedef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfpacknotedef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfpacknotedef !== $v) {
            $this->oetbconfpacknotedef = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFPACKNOTEDEF] = true;
        }

        return $this;
    } // setOetbconfpacknotedef()

    /**
     * Set the value of [oetbconfpicksort] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfpicksort($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfpicksort !== $v) {
            $this->oetbconfpicksort = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFPICKSORT] = true;
        }

        return $this;
    } // setOetbconfpicksort()

    /**
     * Set the value of [oetbconfpacksort] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfpacksort($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfpacksort !== $v) {
            $this->oetbconfpacksort = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFPACKSORT] = true;
        }

        return $this;
    } // setOetbconfpacksort()

    /**
     * Set the value of [oetbconfprtpriconly] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfprtpriconly($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfprtpriconly !== $v) {
            $this->oetbconfprtpriconly = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFPRTPRICONLY] = true;
        }

        return $this;
    } // setOetbconfprtpriconly()

    /**
     * Set the value of [oetbconfprtneg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfprtneg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfprtneg !== $v) {
            $this->oetbconfprtneg = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFPRTNEG] = true;
        }

        return $this;
    } // setOetbconfprtneg()

    /**
     * Set the value of [oetbcon2prtpackageinfo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2prtpackageinfo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2prtpackageinfo !== $v) {
            $this->oetbcon2prtpackageinfo = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2PRTPACKAGEINFO] = true;
        }

        return $this;
    } // setOetbcon2prtpackageinfo()

    /**
     * Set the value of [oetbcon2innerpacklabel] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2innerpacklabel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2innerpacklabel !== $v) {
            $this->oetbcon2innerpacklabel = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2INNERPACKLABEL] = true;
        }

        return $this;
    } // setOetbcon2innerpacklabel()

    /**
     * Set the value of [oetbcon2outerpacklabel] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2outerpacklabel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2outerpacklabel !== $v) {
            $this->oetbcon2outerpacklabel = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2OUTERPACKLABEL] = true;
        }

        return $this;
    } // setOetbcon2outerpacklabel()

    /**
     * Set the value of [oetbcon2shiptarelabel] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2shiptarelabel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2shiptarelabel !== $v) {
            $this->oetbcon2shiptarelabel = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2SHIPTARELABEL] = true;
        }

        return $this;
    } // setOetbcon2shiptarelabel()

    /**
     * Set the value of [oetbconfprtpick] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfprtpick($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfprtpick !== $v) {
            $this->oetbconfprtpick = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFPRTPICK] = true;
        }

        return $this;
    } // setOetbconfprtpick()

    /**
     * Set the value of [oetbconfpicprioseq] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfpicprioseq($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfpicprioseq !== $v) {
            $this->oetbconfpicprioseq = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFPICPRIOSEQ] = true;
        }

        return $this;
    } // setOetbconfpicprioseq()

    /**
     * Set the value of [oetbconfprtpack] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfprtpack($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfprtpack !== $v) {
            $this->oetbconfprtpack = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFPRTPACK] = true;
        }

        return $this;
    } // setOetbconfprtpack()

    /**
     * Set the value of [oetbconfprtinv] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfprtinv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfprtinv !== $v) {
            $this->oetbconfprtinv = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFPRTINV] = true;
        }

        return $this;
    } // setOetbconfprtinv()

    /**
     * Set the value of [oetbcon2prtcredmemo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2prtcredmemo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2prtcredmemo !== $v) {
            $this->oetbcon2prtcredmemo = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2PRTCREDMEMO] = true;
        }

        return $this;
    } // setOetbcon2prtcredmemo()

    /**
     * Set the value of [oetbconfcrntdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfcrntdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfcrntdate !== $v) {
            $this->oetbconfcrntdate = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFCRNTDATE] = true;
        }

        return $this;
    } // setOetbconfcrntdate()

    /**
     * Set the value of [oetbconfmarkpicked] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfmarkpicked($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfmarkpicked !== $v) {
            $this->oetbconfmarkpicked = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFMARKPICKED] = true;
        }

        return $this;
    } // setOetbconfmarkpicked()

    /**
     * Set the value of [oetbconfshowunavail] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfshowunavail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfshowunavail !== $v) {
            $this->oetbconfshowunavail = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFSHOWUNAVAIL] = true;
        }

        return $this;
    } // setOetbconfshowunavail()

    /**
     * Set the value of [oetbconfdecplaces] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdecplaces($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oetbconfdecplaces !== $v) {
            $this->oetbconfdecplaces = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDECPLACES] = true;
        }

        return $this;
    } // setOetbconfdecplaces()

    /**
     * Set the value of [oetbconfwarndup] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfwarndup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfwarndup !== $v) {
            $this->oetbconfwarndup = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFWARNDUP] = true;
        }

        return $this;
    } // setOetbconfwarndup()

    /**
     * Set the value of [oetbconfdefpick] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdefpick($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdefpick !== $v) {
            $this->oetbconfdefpick = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDEFPICK] = true;
        }

        return $this;
    } // setOetbconfdefpick()

    /**
     * Set the value of [oetbconfdefpack] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdefpack($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdefpack !== $v) {
            $this->oetbconfdefpack = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDEFPACK] = true;
        }

        return $this;
    } // setOetbconfdefpack()

    /**
     * Set the value of [oetbconfdefinvc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdefinvc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdefinvc !== $v) {
            $this->oetbconfdefinvc = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDEFINVC] = true;
        }

        return $this;
    } // setOetbconfdefinvc()

    /**
     * Set the value of [oetbconfdefack] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdefack($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdefack !== $v) {
            $this->oetbconfdefack = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDEFACK] = true;
        }

        return $this;
    } // setOetbconfdefack()

    /**
     * Set the value of [oetbconfacksortopt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfacksortopt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfacksortopt !== $v) {
            $this->oetbconfacksortopt = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFACKSORTOPT] = true;
        }

        return $this;
    } // setOetbconfacksortopt()

    /**
     * Set the value of [oetbconfreleasenbr] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfreleasenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfreleasenbr !== $v) {
            $this->oetbconfreleasenbr = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFRELEASENBR] = true;
        }

        return $this;
    } // setOetbconfreleasenbr()

    /**
     * Set the value of [oetbconfpodetlinenbr] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfpodetlinenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfpodetlinenbr !== $v) {
            $this->oetbconfpodetlinenbr = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFPODETLINENBR] = true;
        }

        return $this;
    } // setOetbconfpodetlinenbr()

    /**
     * Set the value of [oetbconfdetlinebinnbr] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdetlinebinnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdetlinebinnbr !== $v) {
            $this->oetbconfdetlinebinnbr = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDETLINEBINNBR] = true;
        }

        return $this;
    } // setOetbconfdetlinebinnbr()

    /**
     * Set the value of [oetbconfsplitbywhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfsplitbywhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfsplitbywhse !== $v) {
            $this->oetbconfsplitbywhse = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFSPLITBYWHSE] = true;
        }

        return $this;
    } // setOetbconfsplitbywhse()

    /**
     * Set the value of [oetbcon3allowmultwhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3allowmultwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3allowmultwhse !== $v) {
            $this->oetbcon3allowmultwhse = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3ALLOWMULTWHSE] = true;
        }

        return $this;
    } // setOetbcon3allowmultwhse()

    /**
     * Set the value of [oetbconfuseorigwhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfuseorigwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfuseorigwhse !== $v) {
            $this->oetbconfuseorigwhse = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFUSEORIGWHSE] = true;
        }

        return $this;
    } // setOetbconfuseorigwhse()

    /**
     * Set the value of [oetbconfuseesosingle] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfuseesosingle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfuseesosingle !== $v) {
            $this->oetbconfuseesosingle = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFUSEESOSINGLE] = true;
        }

        return $this;
    } // setOetbconfuseesosingle()

    /**
     * Set the value of [oetbconfcreatepo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfcreatepo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfcreatepo !== $v) {
            $this->oetbconfcreatepo = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFCREATEPO] = true;
        }

        return $this;
    } // setOetbconfcreatepo()

    /**
     * Set the value of [oetbconfbestprice] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfbestprice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfbestprice !== $v) {
            $this->oetbconfbestprice = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFBESTPRICE] = true;
        }

        return $this;
    } // setOetbconfbestprice()

    /**
     * Set the value of [oetbconfesobacktonew] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfesobacktonew($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfesobacktonew !== $v) {
            $this->oetbconfesobacktonew = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFESOBACKTONEW] = true;
        }

        return $this;
    } // setOetbconfesobacktonew()

    /**
     * Set the value of [oetbconfpickprintdrop] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfpickprintdrop($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfpickprintdrop !== $v) {
            $this->oetbconfpickprintdrop = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFPICKPRINTDROP] = true;
        }

        return $this;
    } // setOetbconfpickprintdrop()

    /**
     * Set the value of [oetbconfwarnmultpo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfwarnmultpo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfwarnmultpo !== $v) {
            $this->oetbconfwarnmultpo = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFWARNMULTPO] = true;
        }

        return $this;
    } // setOetbconfwarnmultpo()

    /**
     * Set the value of [oetbconfalertitemquote] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfalertitemquote($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfalertitemquote !== $v) {
            $this->oetbconfalertitemquote = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFALERTITEMQUOTE] = true;
        }

        return $this;
    } // setOetbconfalertitemquote()

    /**
     * Set the value of [oetbcon3askchgprcwqty] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3askchgprcwqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3askchgprcwqty !== $v) {
            $this->oetbcon3askchgprcwqty = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3ASKCHGPRCWQTY] = true;
        }

        return $this;
    } // setOetbcon3askchgprcwqty()

    /**
     * Set the value of [oetbcon3tenqtybrks] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3tenqtybrks($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3tenqtybrks !== $v) {
            $this->oetbcon3tenqtybrks = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3TENQTYBRKS] = true;
        }

        return $this;
    } // setOetbcon3tenqtybrks()

    /**
     * Set the value of [oetbconfdecordrpric] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdecordrpric($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oetbconfdecordrpric !== $v) {
            $this->oetbconfdecordrpric = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDECORDRPRIC] = true;
        }

        return $this;
    } // setOetbconfdecordrpric()

    /**
     * Set the value of [oetbcon2provlostsales] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2provlostsales($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2provlostsales !== $v) {
            $this->oetbcon2provlostsales = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2PROVLOSTSALES] = true;
        }

        return $this;
    } // setOetbcon2provlostsales()

    /**
     * Set the value of [oetbcon2askreasoncode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2askreasoncode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2askreasoncode !== $v) {
            $this->oetbcon2askreasoncode = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2ASKREASONCODE] = true;
        }

        return $this;
    } // setOetbcon2askreasoncode()

    /**
     * Set the value of [oetbcon2defreasoncode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2defreasoncode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2defreasoncode !== $v) {
            $this->oetbcon2defreasoncode = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2DEFREASONCODE] = true;
        }

        return $this;
    } // setOetbcon2defreasoncode()

    /**
     * Set the value of [oetbcon2bordcntl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2bordcntl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2bordcntl !== $v) {
            $this->oetbcon2bordcntl = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2BORDCNTL] = true;
        }

        return $this;
    } // setOetbcon2bordcntl()

    /**
     * Set the value of [oetbcon2defreabocode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2defreabocode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2defreabocode !== $v) {
            $this->oetbcon2defreabocode = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2DEFREABOCODE] = true;
        }

        return $this;
    } // setOetbcon2defreabocode()

    /**
     * Set the value of [oetbcon2numdayssavls] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2numdayssavls($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oetbcon2numdayssavls !== $v) {
            $this->oetbcon2numdayssavls = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2NUMDAYSSAVLS] = true;
        }

        return $this;
    } // setOetbcon2numdayssavls()

    /**
     * Set the value of [oetbcon2callbacknotif] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2callbacknotif($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2callbacknotif !== $v) {
            $this->oetbcon2callbacknotif = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2CALLBACKNOTIF] = true;
        }

        return $this;
    } // setOetbcon2callbacknotif()

    /**
     * Set the value of [oetbcon2defdayswhenin] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2defdayswhenin($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oetbcon2defdayswhenin !== $v) {
            $this->oetbcon2defdayswhenin = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2DEFDAYSWHENIN] = true;
        }

        return $this;
    } // setOetbcon2defdayswhenin()

    /**
     * Set the value of [oetbcon2addsubsls] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2addsubsls($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2addsubsls !== $v) {
            $this->oetbcon2addsubsls = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2ADDSUBSLS] = true;
        }

        return $this;
    } // setOetbcon2addsubsls()

    /**
     * Set the value of [oetbcon2defreasubscode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2defreasubscode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2defreasubscode !== $v) {
            $this->oetbcon2defreasubscode = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2DEFREASUBSCODE] = true;
        }

        return $this;
    } // setOetbcon2defreasubscode()

    /**
     * Set the value of [oetbcon2ordtypnorm] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2ordtypnorm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2ordtypnorm !== $v) {
            $this->oetbcon2ordtypnorm = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPNORM] = true;
        }

        return $this;
    } // setOetbcon2ordtypnorm()

    /**
     * Set the value of [oetbcon2ordtyprep] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2ordtyprep($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2ordtyprep !== $v) {
            $this->oetbcon2ordtyprep = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPREP] = true;
        }

        return $this;
    } // setOetbcon2ordtyprep()

    /**
     * Set the value of [oetbcon2ordtypserv] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2ordtypserv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2ordtypserv !== $v) {
            $this->oetbcon2ordtypserv = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPSERV] = true;
        }

        return $this;
    } // setOetbcon2ordtypserv()

    /**
     * Set the value of [oetbcon2defordtyp] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2defordtyp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2defordtyp !== $v) {
            $this->oetbcon2defordtyp = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2DEFORDTYP] = true;
        }

        return $this;
    } // setOetbcon2defordtyp()

    /**
     * Set the value of [oetbconfchgpric] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfchgpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfchgpric !== $v) {
            $this->oetbconfchgpric = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFCHGPRIC] = true;
        }

        return $this;
    } // setOetbconfchgpric()

    /**
     * Set the value of [oetbcon2spordpricezero] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2spordpricezero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2spordpricezero !== $v) {
            $this->oetbcon2spordpricezero = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2SPORDPRICEZERO] = true;
        }

        return $this;
    } // setOetbcon2spordpricezero()

    /**
     * Set the value of [oetbconfinactpricezero] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfinactpricezero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfinactpricezero !== $v) {
            $this->oetbconfinactpricezero = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFINACTPRICEZERO] = true;
        }

        return $this;
    } // setOetbconfinactpricezero()

    /**
     * Set the value of [oetbcon2reseq] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2reseq($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2reseq !== $v) {
            $this->oetbcon2reseq = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2RESEQ] = true;
        }

        return $this;
    } // setOetbcon2reseq()

    /**
     * Set the value of [oetbcon2reseqby] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2reseqby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2reseqby !== $v) {
            $this->oetbcon2reseqby = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2RESEQBY] = true;
        }

        return $this;
    } // setOetbcon2reseqby()

    /**
     * Set the value of [oetbcon2minqtysales] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2minqtysales($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2minqtysales !== $v) {
            $this->oetbcon2minqtysales = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2MINQTYSALES] = true;
        }

        return $this;
    } // setOetbcon2minqtysales()

    /**
     * Set the value of [oetbcon2chgorder] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2chgorder($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2chgorder !== $v) {
            $this->oetbcon2chgorder = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2CHGORDER] = true;
        }

        return $this;
    } // setOetbcon2chgorder()

    /**
     * Set the value of [oetbcon2vercomp] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2vercomp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2vercomp !== $v) {
            $this->oetbcon2vercomp = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2VERCOMP] = true;
        }

        return $this;
    } // setOetbcon2vercomp()

    /**
     * Set the value of [oetbcon2prtinv] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2prtinv($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2prtinv !== $v) {
            $this->oetbcon2prtinv = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2PRTINV] = true;
        }

        return $this;
    } // setOetbcon2prtinv()

    /**
     * Set the value of [oetbcon2dynamicpicktick] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2dynamicpicktick($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2dynamicpicktick !== $v) {
            $this->oetbcon2dynamicpicktick = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICPICKTICK] = true;
        }

        return $this;
    } // setOetbcon2dynamicpicktick()

    /**
     * Set the value of [oetbcon2dynamicinvoice] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2dynamicinvoice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2dynamicinvoice !== $v) {
            $this->oetbcon2dynamicinvoice = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICINVOICE] = true;
        }

        return $this;
    } // setOetbcon2dynamicinvoice()

    /**
     * Set the value of [oetbcon2edidefinvoice] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2edidefinvoice($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2edidefinvoice !== $v) {
            $this->oetbcon2edidefinvoice = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2EDIDEFINVOICE] = true;
        }

        return $this;
    } // setOetbcon2edidefinvoice()

    /**
     * Set the value of [oetbcon2allowccpick] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2allowccpick($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2allowccpick !== $v) {
            $this->oetbcon2allowccpick = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2ALLOWCCPICK] = true;
        }

        return $this;
    } // setOetbcon2allowccpick()

    /**
     * Set the value of [oetbcon2autoccwind] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2autoccwind($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2autoccwind !== $v) {
            $this->oetbcon2autoccwind = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCWIND] = true;
        }

        return $this;
    } // setOetbcon2autoccwind()

    /**
     * Set the value of [oetbcon2autoccupdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2autoccupdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2autoccupdate !== $v) {
            $this->oetbcon2autoccupdate = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCUPDATE] = true;
        }

        return $this;
    } // setOetbcon2autoccupdate()

    /**
     * Set the value of [oetbcon2allowapvdccchg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2allowapvdccchg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2allowapvdccchg !== $v) {
            $this->oetbcon2allowapvdccchg = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2ALLOWAPVDCCCHG] = true;
        }

        return $this;
    } // setOetbcon2allowapvdccchg()

    /**
     * Set the value of [oetbcon3apvdbckordclear] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3apvdbckordclear($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3apvdbckordclear !== $v) {
            $this->oetbcon3apvdbckordclear = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3APVDBCKORDCLEAR] = true;
        }

        return $this;
    } // setOetbcon3apvdbckordclear()

    /**
     * Set the value of [oetbcon2polwhichcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2polwhichcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2polwhichcost !== $v) {
            $this->oetbcon2polwhichcost = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2POLWHICHCOST] = true;
        }

        return $this;
    } // setOetbcon2polwhichcost()

    /**
     * Set the value of [oetbcon2revhazard] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2revhazard($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2revhazard !== $v) {
            $this->oetbcon2revhazard = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2REVHAZARD] = true;
        }

        return $this;
    } // setOetbcon2revhazard()

    /**
     * Set the value of [oetbcon2showdisclist] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2showdisclist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2showdisclist !== $v) {
            $this->oetbcon2showdisclist = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2SHOWDISCLIST] = true;
        }

        return $this;
    } // setOetbcon2showdisclist()

    /**
     * Set the value of [oetbcon2chglist] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2chglist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2chglist !== $v) {
            $this->oetbcon2chglist = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2CHGLIST] = true;
        }

        return $this;
    } // setOetbcon2chglist()

    /**
     * Set the value of [oetbcon2maillist] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2maillist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2maillist !== $v) {
            $this->oetbcon2maillist = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2MAILLIST] = true;
        }

        return $this;
    } // setOetbcon2maillist()

    /**
     * Set the value of [oetbcon2nameformat] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2nameformat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2nameformat !== $v) {
            $this->oetbcon2nameformat = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2NAMEFORMAT] = true;
        }

        return $this;
    } // setOetbcon2nameformat()

    /**
     * Set the value of [oetbcon2mailidtype] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2mailidtype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2mailidtype !== $v) {
            $this->oetbcon2mailidtype = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2MAILIDTYPE] = true;
        }

        return $this;
    } // setOetbcon2mailidtype()

    /**
     * Set the value of [oetbcon2cashdrawerpswd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2cashdrawerpswd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2cashdrawerpswd !== $v) {
            $this->oetbcon2cashdrawerpswd = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2CASHDRAWERPSWD] = true;
        }

        return $this;
    } // setOetbcon2cashdrawerpswd()

    /**
     * Set the value of [oetbcon2upsonline] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2upsonline($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2upsonline !== $v) {
            $this->oetbcon2upsonline = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2UPSONLINE] = true;
        }

        return $this;
    } // setOetbcon2upsonline()

    /**
     * Set the value of [oetbcon2picorver] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2picorver($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2picorver !== $v) {
            $this->oetbcon2picorver = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2PICORVER] = true;
        }

        return $this;
    } // setOetbcon2picorver()

    /**
     * Set the value of [oetbcon2combback] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2combback($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2combback !== $v) {
            $this->oetbcon2combback = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2COMBBACK] = true;
        }

        return $this;
    } // setOetbcon2combback()

    /**
     * Set the value of [oetbcon2frtallowamt] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2frtallowamt($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oetbcon2frtallowamt !== $v) {
            $this->oetbcon2frtallowamt = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2FRTALLOWAMT] = true;
        }

        return $this;
    } // setOetbcon2frtallowamt()

    /**
     * Set the value of [oetbcon3shipmoreordered] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3shipmoreordered($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3shipmoreordered !== $v) {
            $this->oetbcon3shipmoreordered = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3SHIPMOREORDERED] = true;
        }

        return $this;
    } // setOetbcon3shipmoreordered()

    /**
     * Set the value of [oetbcon3warnshipmore] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3warnshipmore($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3warnshipmore !== $v) {
            $this->oetbcon3warnshipmore = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3WARNSHIPMORE] = true;
        }

        return $this;
    } // setOetbcon3warnshipmore()

    /**
     * Set the value of [oetbcon3proformafromeso] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3proformafromeso($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3proformafromeso !== $v) {
            $this->oetbcon3proformafromeso = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3PROFORMAFROMESO] = true;
        }

        return $this;
    } // setOetbcon3proformafromeso()

    /**
     * Set the value of [oetbcon3pickpackcode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3pickpackcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3pickpackcode !== $v) {
            $this->oetbcon3pickpackcode = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3PICKPACKCODE] = true;
        }

        return $this;
    } // setOetbcon3pickpackcode()

    /**
     * Set the value of [oetbcon2usedept] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2usedept($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2usedept !== $v) {
            $this->oetbcon2usedept = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2USEDEPT] = true;
        }

        return $this;
    } // setOetbcon2usedept()

    /**
     * Set the value of [oetbcon2usedivision] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2usedivision($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2usedivision !== $v) {
            $this->oetbcon2usedivision = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2USEDIVISION] = true;
        }

        return $this;
    } // setOetbcon2usedivision()

    /**
     * Set the value of [oetbcon2defmfecode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2defmfecode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2defmfecode !== $v) {
            $this->oetbcon2defmfecode = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2DEFMFECODE] = true;
        }

        return $this;
    } // setOetbcon2defmfecode()

    /**
     * Set the value of [oetbcon2showavgcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2showavgcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2showavgcost !== $v) {
            $this->oetbcon2showavgcost = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2SHOWAVGCOST] = true;
        }

        return $this;
    } // setOetbcon2showavgcost()

    /**
     * Set the value of [oetbcon2fedex] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2fedex($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2fedex !== $v) {
            $this->oetbcon2fedex = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2FEDEX] = true;
        }

        return $this;
    } // setOetbcon2fedex()

    /**
     * Set the value of [oetbcon3deffrghtgrup] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3deffrghtgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3deffrghtgrup !== $v) {
            $this->oetbcon3deffrghtgrup = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3DEFFRGHTGRUP] = true;
        }

        return $this;
    } // setOetbcon3deffrghtgrup()

    /**
     * Set the value of [oetbcon3upsmysqldbname] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3upsmysqldbname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3upsmysqldbname !== $v) {
            $this->oetbcon3upsmysqldbname = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3UPSMYSQLDBNAME] = true;
        }

        return $this;
    } // setOetbcon3upsmysqldbname()

    /**
     * Set the value of [oetbconfuseoptcode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfuseoptcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfuseoptcode !== $v) {
            $this->oetbconfuseoptcode = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFUSEOPTCODE] = true;
        }

        return $this;
    } // setOetbconfuseoptcode()

    /**
     * Set the value of [oetbconfscn4opt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfscn4opt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfscn4opt !== $v) {
            $this->oetbconfscn4opt = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFSCN4OPT] = true;
        }

        return $this;
    } // setOetbconfscn4opt()

    /**
     * Set the value of [oetbcon2takenbyuse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2takenbyuse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2takenbyuse !== $v) {
            $this->oetbcon2takenbyuse = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYUSE] = true;
        }

        return $this;
    } // setOetbcon2takenbyuse()

    /**
     * Set the value of [oetbcon2takenbylogin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2takenbylogin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2takenbylogin !== $v) {
            $this->oetbcon2takenbylogin = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYLOGIN] = true;
        }

        return $this;
    } // setOetbcon2takenbylogin()

    /**
     * Set the value of [oetbcon2takenbyforce] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2takenbyforce($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2takenbyforce !== $v) {
            $this->oetbcon2takenbyforce = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYFORCE] = true;
        }

        return $this;
    } // setOetbcon2takenbyforce()

    /**
     * Set the value of [oetbcon2pickedbyuse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2pickedbyuse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2pickedbyuse !== $v) {
            $this->oetbcon2pickedbyuse = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYUSE] = true;
        }

        return $this;
    } // setOetbcon2pickedbyuse()

    /**
     * Set the value of [oetbcon2pickedbyforce] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2pickedbyforce($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2pickedbyforce !== $v) {
            $this->oetbcon2pickedbyforce = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYFORCE] = true;
        }

        return $this;
    } // setOetbcon2pickedbyforce()

    /**
     * Set the value of [oetbcon2pickedbyproc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2pickedbyproc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2pickedbyproc !== $v) {
            $this->oetbcon2pickedbyproc = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYPROC] = true;
        }

        return $this;
    } // setOetbcon2pickedbyproc()

    /**
     * Set the value of [oetbcon2packedbyuse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2packedbyuse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2packedbyuse !== $v) {
            $this->oetbcon2packedbyuse = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYUSE] = true;
        }

        return $this;
    } // setOetbcon2packedbyuse()

    /**
     * Set the value of [oetbcon2packedbyforce] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2packedbyforce($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2packedbyforce !== $v) {
            $this->oetbcon2packedbyforce = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYFORCE] = true;
        }

        return $this;
    } // setOetbcon2packedbyforce()

    /**
     * Set the value of [oetbcon2verifiedbyuse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2verifiedbyuse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2verifiedbyuse !== $v) {
            $this->oetbcon2verifiedbyuse = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYUSE] = true;
        }

        return $this;
    } // setOetbcon2verifiedbyuse()

    /**
     * Set the value of [oetbcon2verifiedbylogin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2verifiedbylogin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2verifiedbylogin !== $v) {
            $this->oetbcon2verifiedbylogin = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYLOGIN] = true;
        }

        return $this;
    } // setOetbcon2verifiedbylogin()

    /**
     * Set the value of [oetbcon2verifiedbyforce] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2verifiedbyforce($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2verifiedbyforce !== $v) {
            $this->oetbcon2verifiedbyforce = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYFORCE] = true;
        }

        return $this;
    } // setOetbcon2verifiedbyforce()

    /**
     * Set the value of [oetbconfoptlabl1] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfoptlabl1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfoptlabl1 !== $v) {
            $this->oetbconfoptlabl1 = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL1] = true;
        }

        return $this;
    } // setOetbconfoptlabl1()

    /**
     * Set the value of [oetbcon2ucode1force] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2ucode1force($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2ucode1force !== $v) {
            $this->oetbcon2ucode1force = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2UCODE1FORCE] = true;
        }

        return $this;
    } // setOetbcon2ucode1force()

    /**
     * Set the value of [oetbconfoptlabl2] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfoptlabl2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfoptlabl2 !== $v) {
            $this->oetbconfoptlabl2 = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL2] = true;
        }

        return $this;
    } // setOetbconfoptlabl2()

    /**
     * Set the value of [oetbcon2ucode2force] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2ucode2force($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2ucode2force !== $v) {
            $this->oetbcon2ucode2force = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2UCODE2FORCE] = true;
        }

        return $this;
    } // setOetbcon2ucode2force()

    /**
     * Set the value of [oetbconfoptlabl3] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfoptlabl3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfoptlabl3 !== $v) {
            $this->oetbconfoptlabl3 = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL3] = true;
        }

        return $this;
    } // setOetbconfoptlabl3()

    /**
     * Set the value of [oetbcon2ucode3force] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2ucode3force($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2ucode3force !== $v) {
            $this->oetbcon2ucode3force = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2UCODE3FORCE] = true;
        }

        return $this;
    } // setOetbcon2ucode3force()

    /**
     * Set the value of [oetbconfoptlabl4] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfoptlabl4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfoptlabl4 !== $v) {
            $this->oetbconfoptlabl4 = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL4] = true;
        }

        return $this;
    } // setOetbconfoptlabl4()

    /**
     * Set the value of [oetbcon2ucode4force] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2ucode4force($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2ucode4force !== $v) {
            $this->oetbcon2ucode4force = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2UCODE4FORCE] = true;
        }

        return $this;
    } // setOetbcon2ucode4force()

    /**
     * Set the value of [oetbconfverifyafterpack] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfverifyafterpack($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfverifyafterpack !== $v) {
            $this->oetbconfverifyafterpack = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFVERIFYAFTERPACK] = true;
        }

        return $this;
    } // setOetbconfverifyafterpack()

    /**
     * Set the value of [oetbconfhistyrsback] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfhistyrsback($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oetbconfhistyrsback !== $v) {
            $this->oetbconfhistyrsback = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFHISTYRSBACK] = true;
        }

        return $this;
    } // setOetbconfhistyrsback()

    /**
     * Set the value of [oetbconfrqstcatlg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfrqstcatlg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfrqstcatlg !== $v) {
            $this->oetbconfrqstcatlg = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFRQSTCATLG] = true;
        }

        return $this;
    } // setOetbconfrqstcatlg()

    /**
     * Set the value of [oetbcon2conpick] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2conpick($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2conpick !== $v) {
            $this->oetbcon2conpick = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2CONPICK] = true;
        }

        return $this;
    } // setOetbcon2conpick()

    /**
     * Set the value of [oetbcon2allowpick] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2allowpick($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2allowpick !== $v) {
            $this->oetbcon2allowpick = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2ALLOWPICK] = true;
        }

        return $this;
    } // setOetbcon2allowpick()

    /**
     * Set the value of [oetbcon2combinesame] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2combinesame($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2combinesame !== $v) {
            $this->oetbcon2combinesame = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2COMBINESAME] = true;
        }

        return $this;
    } // setOetbcon2combinesame()

    /**
     * Set the value of [oetbcon3autovernitems] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3autovernitems($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3autovernitems !== $v) {
            $this->oetbcon3autovernitems = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3AUTOVERNITEMS] = true;
        }

        return $this;
    } // setOetbcon3autovernitems()

    /**
     * Set the value of [oetbcon2allowzeroqty] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2allowzeroqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2allowzeroqty !== $v) {
            $this->oetbcon2allowzeroqty = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2ALLOWZEROQTY] = true;
        }

        return $this;
    } // setOetbcon2allowzeroqty()

    /**
     * Set the value of [oetbcon2allowinvalidwhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2allowinvalidwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2allowinvalidwhse !== $v) {
            $this->oetbcon2allowinvalidwhse = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2ALLOWINVALIDWHSE] = true;
        }

        return $this;
    } // setOetbcon2allowinvalidwhse()

    /**
     * Set the value of [oetbcon2showediinfo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2showediinfo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2showediinfo !== $v) {
            $this->oetbcon2showediinfo = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2SHOWEDIINFO] = true;
        }

        return $this;
    } // setOetbcon2showediinfo()

    /**
     * Set the value of [oetbcon2addonsales] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2addonsales($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2addonsales !== $v) {
            $this->oetbcon2addonsales = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2ADDONSALES] = true;
        }

        return $this;
    } // setOetbcon2addonsales()

    /**
     * Set the value of [oetbcon2forcedbkord] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2forcedbkord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2forcedbkord !== $v) {
            $this->oetbcon2forcedbkord = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2FORCEDBKORD] = true;
        }

        return $this;
    } // setOetbcon2forcedbkord()

    /**
     * Set the value of [oetbcon2updtprcdisc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2updtprcdisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2updtprcdisc !== $v) {
            $this->oetbcon2updtprcdisc = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2UPDTPRCDISC] = true;
        }

        return $this;
    } // setOetbcon2updtprcdisc()

    /**
     * Set the value of [oetbcon2autopack] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2autopack($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2autopack !== $v) {
            $this->oetbcon2autopack = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2AUTOPACK] = true;
        }

        return $this;
    } // setOetbcon2autopack()

    /**
     * Set the value of [oetbcon2pickboprtzqts] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2pickboprtzqts($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2pickboprtzqts !== $v) {
            $this->oetbcon2pickboprtzqts = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2PICKBOPRTZQTS] = true;
        }

        return $this;
    } // setOetbcon2pickboprtzqts()

    /**
     * Set the value of [oetbcon3pick00noship] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3pick00noship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3pick00noship !== $v) {
            $this->oetbcon3pick00noship = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3PICK00NOSHIP] = true;
        }

        return $this;
    } // setOetbcon3pick00noship()

    /**
     * Set the value of [oetbcon2standordlead] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2standordlead($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2standordlead !== $v) {
            $this->oetbcon2standordlead = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2STANDORDLEAD] = true;
        }

        return $this;
    } // setOetbcon2standordlead()

    /**
     * Set the value of [oetbcon2standordamnt] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2standordamnt($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oetbcon2standordamnt !== $v) {
            $this->oetbcon2standordamnt = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2STANDORDAMNT] = true;
        }

        return $this;
    } // setOetbcon2standordamnt()

    /**
     * Set the value of [oetbcon2inactitemcntrl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2inactitemcntrl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2inactitemcntrl !== $v) {
            $this->oetbcon2inactitemcntrl = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2INACTITEMCNTRL] = true;
        }

        return $this;
    } // setOetbcon2inactitemcntrl()

    /**
     * Set the value of [oetbcon2useitemref] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon2useitemref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon2useitemref !== $v) {
            $this->oetbcon2useitemref = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON2USEITEMREF] = true;
        }

        return $this;
    } // setOetbcon2useitemref()

    /**
     * Set the value of [oetbcon3upsnaftarecords] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3upsnaftarecords($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3upsnaftarecords !== $v) {
            $this->oetbcon3upsnaftarecords = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3UPSNAFTARECORDS] = true;
        }

        return $this;
    } // setOetbcon3upsnaftarecords()

    /**
     * Set the value of [oetbconfdfltshipwhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdfltshipwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdfltshipwhse !== $v) {
            $this->oetbconfdfltshipwhse = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDFLTSHIPWHSE] = true;
        }

        return $this;
    } // setOetbconfdfltshipwhse()

    /**
     * Set the value of [oetbconfdfltorigwhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfdfltorigwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfdfltorigwhse !== $v) {
            $this->oetbconfdfltorigwhse = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFDFLTORIGWHSE] = true;
        }

        return $this;
    } // setOetbconfdfltorigwhse()

    /**
     * Set the value of [oetbconfinvcwithpack] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfinvcwithpack($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfinvcwithpack !== $v) {
            $this->oetbconfinvcwithpack = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFINVCWITHPACK] = true;
        }

        return $this;
    } // setOetbconfinvcwithpack()

    /**
     * Set the value of [oetbconfcarrycntrqty] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfcarrycntrqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfcarrycntrqty !== $v) {
            $this->oetbconfcarrycntrqty = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFCARRYCNTRQTY] = true;
        }

        return $this;
    } // setOetbconfcarrycntrqty()

    /**
     * Set the value of [oetbcon3useordras] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3useordras($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3useordras !== $v) {
            $this->oetbcon3useordras = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3USEORDRAS] = true;
        }

        return $this;
    } // setOetbcon3useordras()

    /**
     * Set the value of [oetbconfuseordrsource] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbconfuseordrsource($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbconfuseordrsource !== $v) {
            $this->oetbconfuseordrsource = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRSOURCE] = true;
        }

        return $this;
    } // setOetbconfuseordrsource()

    /**
     * Set the value of [oetbcon3ccprocessor] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3ccprocessor($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3ccprocessor !== $v) {
            $this->oetbcon3ccprocessor = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3CCPROCESSOR] = true;
        }

        return $this;
    } // setOetbcon3ccprocessor()

    /**
     * Set the value of [oetbcon3creditcardcap] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3creditcardcap($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3creditcardcap !== $v) {
            $this->oetbcon3creditcardcap = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3CREDITCARDCAP] = true;
        }

        return $this;
    } // setOetbcon3creditcardcap()

    /**
     * Set the value of [oetbcon3keyorcccap] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3keyorcccap($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3keyorcccap !== $v) {
            $this->oetbcon3keyorcccap = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3KEYORCCCAP] = true;
        }

        return $this;
    } // setOetbcon3keyorcccap()

    /**
     * Set the value of [oetbcon3ccxoverlay] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3ccxoverlay($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3ccxoverlay !== $v) {
            $this->oetbcon3ccxoverlay = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3CCXOVERLAY] = true;
        }

        return $this;
    } // setOetbcon3ccxoverlay()

    /**
     * Set the value of [oetbcon3cctimeout] column.
     *
     * @param int $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3cctimeout($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->oetbcon3cctimeout !== $v) {
            $this->oetbcon3cctimeout = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3CCTIMEOUT] = true;
        }

        return $this;
    } // setOetbcon3cctimeout()

    /**
     * Set the value of [oetbcon3signaturecapture] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3signaturecapture($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3signaturecapture !== $v) {
            $this->oetbcon3signaturecapture = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3SIGNATURECAPTURE] = true;
        }

        return $this;
    } // setOetbcon3signaturecapture()

    /**
     * Set the value of [oetbcon3ccpreapproval] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3ccpreapproval($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3ccpreapproval !== $v) {
            $this->oetbcon3ccpreapproval = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3CCPREAPPROVAL] = true;
        }

        return $this;
    } // setOetbcon3ccpreapproval()

    /**
     * Set the value of [oetbcon3forceccnbrentry] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3forceccnbrentry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3forceccnbrentry !== $v) {
            $this->oetbcon3forceccnbrentry = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3FORCECCNBRENTRY] = true;
        }

        return $this;
    } // setOetbcon3forceccnbrentry()

    /**
     * Set the value of [oetbcon3intritemnotes] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3intritemnotes($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3intritemnotes !== $v) {
            $this->oetbcon3intritemnotes = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3INTRITEMNOTES] = true;
        }

        return $this;
    } // setOetbcon3intritemnotes()

    /**
     * Set the value of [oetbcon3mtrcert] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3mtrcert($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3mtrcert !== $v) {
            $this->oetbcon3mtrcert = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3MTRCERT] = true;
        }

        return $this;
    } // setOetbcon3mtrcert()

    /**
     * Set the value of [oetbcon3cofccert] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setOetbcon3cofccert($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetbcon3cofccert !== $v) {
            $this->oetbcon3cofccert = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_OETBCON3COFCCERT] = true;
        }

        return $this;
    } // setOetbcon3cofccert()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ConfigSalesOrder The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ConfigSalesOrderTableMap::COL_DUMMY] = true;
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
            if ($this->oetbconfkey !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfkey = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfglifac', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfglifac = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfinifac', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfinifac = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfrelivty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfrelivty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfuseordrnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfuseordrnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdefrqstdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdefrqstdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfusecancdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfusecancdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfshowsp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfshowsp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfjrnlsort', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfjrnlsort = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfuseprepsoopt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfuseprepsoopt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdispbillto', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdispbillto = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfslctflm', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfslctflm = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3usestockpull', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3usestockpull = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfqtytoship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfqtytoship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfqtytoshipdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfqtytoshipdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdfltordrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdfltordrqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfallocqtytoship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfallocqtytoship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfoverallocqts', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfoverallocqts = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3completelotbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3completelotbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3rqtsopt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3rqtsopt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2shipcomphold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2shipcomphold = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3usesaleforecast', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3usesaleforecast = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfverfstopneg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfverfstopneg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfverfaudtrept', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfverfaudtrept = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfagelevldisp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfagelevldisp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfagealltime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfagealltime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfageathold', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfageathold = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfshowatlevl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfshowatlevl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfshowitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfshowitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfstoppnt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfstoppnt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfpricwind', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfpricwind = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfshowcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfshowcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfcosttouse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfcosttouse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfshowmarg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfshowmarg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconffxoe', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconffxoe = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconffxinv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconffxinv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdispvia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdispvia = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdispcaseqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdispcaseqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconffrtin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconffrtin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconffrtinglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconffrtinglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfmincharge', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfmincharge = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfminchrgglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfminchrgglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdropshipchrg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdropshipchrg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdropshpglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdropshpglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfnontaxcustcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfnontaxcustcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfhstaxid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfhstaxid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfhsfrtid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfhsfrtid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfhsmiscid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfhsmiscid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2hscusdid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2hscusdid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3hsfrtinid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3hsfrtinid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3hsdropid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3hsdropid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3hsminordid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3hsminordid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfheadgetdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfheadgetdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfitemgetdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfitemgetdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfautogetcust', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfautogetcust = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3autogetitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3autogetitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfrqstheaddtl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfrqstheaddtl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfcancheaddtl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfcancheaddtl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfuseinvcasship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfuseinvcasship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3usearrvdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3usearrvdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfseparatecred', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfseparatecred = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3applycredits', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3applycredits = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfwarnnotnew', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfwarnnotnew = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfwarnbotozero', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfwarnbotozero = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2providerouting', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2providerouting = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2srtrtbyrqstdte', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2srtrtbyrqstdte = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfusesoreview', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfusesoreview = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfpicknotedef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfpicknotedef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfpacknotedef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfpacknotedef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfpicksort', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfpicksort = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfpacksort', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfpacksort = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfprtpriconly', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfprtpriconly = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfprtneg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfprtneg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2prtpackageinfo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2prtpackageinfo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2innerpacklabel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2innerpacklabel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2outerpacklabel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2outerpacklabel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2shiptarelabel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2shiptarelabel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfprtpick', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfprtpick = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfpicprioseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfpicprioseq = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfprtpack', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfprtpack = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfprtinv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfprtinv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2prtcredmemo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2prtcredmemo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfcrntdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfcrntdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfmarkpicked', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfmarkpicked = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfshowunavail', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfshowunavail = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdecplaces', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdecplaces = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfwarndup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfwarndup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdefpick', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdefpick = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdefpack', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdefpack = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdefinvc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdefinvc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdefack', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdefack = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfacksortopt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfacksortopt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfreleasenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfreleasenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfpodetlinenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfpodetlinenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdetlinebinnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdetlinebinnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 95 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfsplitbywhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfsplitbywhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 96 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3allowmultwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3allowmultwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 97 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfuseorigwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfuseorigwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 98 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfuseesosingle', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfuseesosingle = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 99 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfcreatepo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfcreatepo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 100 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfbestprice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfbestprice = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 101 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfesobacktonew', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfesobacktonew = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 102 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfpickprintdrop', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfpickprintdrop = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 103 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfwarnmultpo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfwarnmultpo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 104 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfalertitemquote', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfalertitemquote = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 105 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3askchgprcwqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3askchgprcwqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 106 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3tenqtybrks', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3tenqtybrks = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 107 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdecordrpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdecordrpric = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 108 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2provlostsales', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2provlostsales = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 109 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2askreasoncode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2askreasoncode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 110 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2defreasoncode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2defreasoncode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 111 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2bordcntl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2bordcntl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 112 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2defreabocode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2defreabocode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 113 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2numdayssavls', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2numdayssavls = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 114 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2callbacknotif', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2callbacknotif = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 115 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2defdayswhenin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2defdayswhenin = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 116 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2addsubsls', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2addsubsls = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 117 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2defreasubscode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2defreasubscode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 118 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2ordtypnorm', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2ordtypnorm = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 119 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2ordtyprep', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2ordtyprep = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 120 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2ordtypserv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2ordtypserv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 121 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2defordtyp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2defordtyp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 122 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfchgpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfchgpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 123 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2spordpricezero', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2spordpricezero = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 124 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfinactpricezero', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfinactpricezero = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 125 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2reseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2reseq = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 126 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2reseqby', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2reseqby = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 127 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2minqtysales', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2minqtysales = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 128 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2chgorder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2chgorder = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 129 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2vercomp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2vercomp = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 130 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2prtinv', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2prtinv = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 131 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2dynamicpicktick', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2dynamicpicktick = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 132 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2dynamicinvoice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2dynamicinvoice = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 133 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2edidefinvoice', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2edidefinvoice = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 134 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2allowccpick', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2allowccpick = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 135 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2autoccwind', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2autoccwind = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 136 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2autoccupdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2autoccupdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 137 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2allowapvdccchg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2allowapvdccchg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 138 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3apvdbckordclear', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3apvdbckordclear = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 139 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2polwhichcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2polwhichcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 140 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2revhazard', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2revhazard = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 141 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2showdisclist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2showdisclist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 142 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2chglist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2chglist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 143 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2maillist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2maillist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 144 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2nameformat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2nameformat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 145 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2mailidtype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2mailidtype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 146 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2cashdrawerpswd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2cashdrawerpswd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 147 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2upsonline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2upsonline = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 148 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2picorver', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2picorver = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 149 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2combback', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2combback = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 150 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2frtallowamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2frtallowamt = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 151 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3shipmoreordered', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3shipmoreordered = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 152 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3warnshipmore', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3warnshipmore = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 153 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3proformafromeso', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3proformafromeso = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 154 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3pickpackcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3pickpackcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 155 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2usedept', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2usedept = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 156 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2usedivision', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2usedivision = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 157 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2defmfecode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2defmfecode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 158 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2showavgcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2showavgcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 159 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2fedex', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2fedex = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 160 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3deffrghtgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3deffrghtgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 161 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3upsmysqldbname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3upsmysqldbname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 162 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfuseoptcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfuseoptcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 163 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfscn4opt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfscn4opt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 164 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2takenbyuse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2takenbyuse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 165 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2takenbylogin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2takenbylogin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 166 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2takenbyforce', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2takenbyforce = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 167 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2pickedbyuse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2pickedbyuse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 168 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2pickedbyforce', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2pickedbyforce = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 169 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2pickedbyproc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2pickedbyproc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 170 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2packedbyuse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2packedbyuse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 171 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2packedbyforce', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2packedbyforce = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 172 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2verifiedbyuse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2verifiedbyuse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 173 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2verifiedbylogin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2verifiedbylogin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 174 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2verifiedbyforce', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2verifiedbyforce = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 175 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfoptlabl1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfoptlabl1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 176 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2ucode1force', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2ucode1force = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 177 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfoptlabl2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfoptlabl2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 178 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2ucode2force', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2ucode2force = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 179 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfoptlabl3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfoptlabl3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 180 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2ucode3force', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2ucode3force = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 181 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfoptlabl4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfoptlabl4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 182 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2ucode4force', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2ucode4force = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 183 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfverifyafterpack', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfverifyafterpack = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 184 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfhistyrsback', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfhistyrsback = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 185 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfrqstcatlg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfrqstcatlg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 186 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2conpick', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2conpick = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 187 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2allowpick', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2allowpick = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 188 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2combinesame', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2combinesame = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 189 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3autovernitems', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3autovernitems = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 190 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2allowzeroqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2allowzeroqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 191 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2allowinvalidwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2allowinvalidwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 192 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2showediinfo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2showediinfo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 193 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2addonsales', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2addonsales = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 194 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2forcedbkord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2forcedbkord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 195 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2updtprcdisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2updtprcdisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 196 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2autopack', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2autopack = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 197 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2pickboprtzqts', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2pickboprtzqts = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 198 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3pick00noship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3pick00noship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 199 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2standordlead', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2standordlead = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 200 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2standordamnt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2standordamnt = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 201 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2inactitemcntrl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2inactitemcntrl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 202 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon2useitemref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon2useitemref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 203 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3upsnaftarecords', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3upsnaftarecords = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 204 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdfltshipwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdfltshipwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 205 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfdfltorigwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfdfltorigwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 206 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfinvcwithpack', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfinvcwithpack = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 207 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfcarrycntrqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfcarrycntrqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 208 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3useordras', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3useordras = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 209 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbconfuseordrsource', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbconfuseordrsource = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 210 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3ccprocessor', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3ccprocessor = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 211 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3creditcardcap', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3creditcardcap = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 212 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3keyorcccap', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3keyorcccap = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 213 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3ccxoverlay', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3ccxoverlay = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 214 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3cctimeout', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3cctimeout = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 215 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3signaturecapture', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3signaturecapture = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 216 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3ccpreapproval', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3ccpreapproval = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 217 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3forceccnbrentry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3forceccnbrentry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 218 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3intritemnotes', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3intritemnotes = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 219 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3mtrcert', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3mtrcert = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 220 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Oetbcon3cofccert', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetbcon3cofccert = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 221 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 222 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 223 + $startcol : ConfigSalesOrderTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 224; // 224 = ConfigSalesOrderTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ConfigSalesOrder'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ConfigSalesOrderTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildConfigSalesOrderQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see ConfigSalesOrder::setDeleted()
     * @see ConfigSalesOrder::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSalesOrderTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildConfigSalesOrderQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSalesOrderTableMap::DATABASE_NAME);
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
                ConfigSalesOrderTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFKEY)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfKey';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFGLIFAC)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfGlIfac';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFINIFAC)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfInIfac';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFRELIVTY)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfRelIvty';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfUseOrdrNbr';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDEFRQSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDefRqstDate';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSECANCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfUseCancDate';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSHOWSP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfShowSp';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFJRNLSORT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfJrnlSort';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEPREPSOOPT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfUsePrepSoOpt';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDISPBILLTO)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDispBillTo';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSLCTFLM)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfSlctFlm';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3USESTOCKPULL)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3UseStockPull';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfQtyToShip';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIPDEF)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfQtyToShipDef';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDFLTORDRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDfltOrdrQty';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFALLOCQTYTOSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfAllocQtyToShip';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFOVERALLOCQTS)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfOverAllocQts';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3COMPLETELOTBIN)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3CompleteLotBin';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3RQTSOPT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3RqtsOpt';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SHIPCOMPHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ShipCompHold';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3USESALEFORECAST)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3UseSaleForecast';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFVERFSTOPNEG)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfVerfStopNeg';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFVERFAUDTREPT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfVerfAudtRept';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFAGELEVLDISP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfAgeLevlDisp';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFAGEALLTIME)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfAgeAllTime';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFAGEATHOLD)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfAgeAtHold';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSHOWATLEVL)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfShowAtLevl';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSHOWITEM)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfShowItem';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSTOPPNT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfStopPnt';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPRICWIND)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfPricWind';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSHOWCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfShowCost';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFCOSTTOUSE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfCostToUse';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSHOWMARG)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfShowMarg';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFFXOE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfFxOe';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFFXINV)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfFxInv';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDISPVIA)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDispVia';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDISPCASEQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDispCaseQty';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFFRTIN)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfFrtIn';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFFRTINGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfFrtInGlAcct';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFMINCHARGE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfMinCharge';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFMINCHRGGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfMinChrgGlAcct';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHIPCHRG)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDropShipChrg';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHPGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDropShpGlAcct';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFNONTAXCUSTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfNonTaxCustCode';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFHSTAXID)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfHsTaxId';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFHSFRTID)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfHsFrtId';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFHSMISCID)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfHsMiscId';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2HSCUSDID)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2HsCusdId';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3HSFRTINID)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3HsFrtInId';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3HSDROPID)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3HsDropId';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3HSMINORDID)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3HsMinordId';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFHEADGETDEF)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfHeadGetDef';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFITEMGETDEF)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfItemGetDef';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFAUTOGETCUST)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfAutoGetCust';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3AUTOGETITEM)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3AutoGetItem';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFRQSTHEADDTL)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfRqstHeadDtl';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFCANCHEADDTL)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfCancHeadDtl';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEINVCASSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfUseInvcAsShip';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3USEARRVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3UseArrvDate';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSEPARATECRED)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfSeparateCred';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3APPLYCREDITS)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3ApplyCredits';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFWARNNOTNEW)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfWarnNotNew';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFWARNBOTOZERO)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfWarnBoToZero';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PROVIDEROUTING)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ProvideRouting';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SRTRTBYRQSTDTE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2SrtRtByRqstDte';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSESOREVIEW)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfUseSoReview';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPICKNOTEDEF)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfPickNoteDef';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPACKNOTEDEF)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfPackNoteDef';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPICKSORT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfPickSort';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPACKSORT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfPackSort';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPRTPRICONLY)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfPrtPricOnly';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPRTNEG)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfPrtNeg';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PRTPACKAGEINFO)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2PrtPackageInfo';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2INNERPACKLABEL)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2InnerPackLabel';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2OUTERPACKLABEL)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2OuterPackLabel';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SHIPTARELABEL)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ShipTareLabel';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPRTPICK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfPrtPick';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPICPRIOSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfPicPrioSeq';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPRTPACK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfPrtPack';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPRTINV)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfPrtInv';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PRTCREDMEMO)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2PrtCredMemo';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFCRNTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfCrntDate';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFMARKPICKED)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfMarkPicked';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSHOWUNAVAIL)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfShowUnavail';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDECPLACES)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDecPlaces';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFWARNDUP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfWarnDup';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDEFPICK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDefPick';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDEFPACK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDefPack';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDEFINVC)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDefInvc';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDEFACK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDefAck';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFACKSORTOPT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfAckSortOpt';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFRELEASENBR)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfReleaseNbr';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPODETLINENBR)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfPoDetLineNbr';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDETLINEBINNBR)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDetLineBinNbr';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSPLITBYWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfSplitByWhse';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3ALLOWMULTWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3AllowMultWhse';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEORIGWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfUseOrigWhse';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEESOSINGLE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfUseEsoSingle';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFCREATEPO)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfCreatePo';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFBESTPRICE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfBestPrice';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFESOBACKTONEW)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfEsoBackToNew';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPICKPRINTDROP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfPickPrintDrop';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFWARNMULTPO)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfWarnMultPo';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFALERTITEMQUOTE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfAlertItemQuote';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3ASKCHGPRCWQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3AskChgPrcWQty';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3TENQTYBRKS)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3TenQtyBrks';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDECORDRPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDecOrdrPric';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PROVLOSTSALES)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ProvLostSales';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ASKREASONCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2AskReasonCode';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DEFREASONCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2DefReasonCode';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2BORDCNTL)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2BordCntl';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DEFREABOCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2DefReaBoCode';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2NUMDAYSSAVLS)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2NumDaysSavLs';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2CALLBACKNOTIF)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2CallBackNotif';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DEFDAYSWHENIN)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2DefDaysWhenIn';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ADDSUBSLS)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2AddSubsLs';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DEFREASUBSCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2DefReaSubsCode';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPNORM)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2OrdTypNorm';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPREP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2OrdTypRep';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPSERV)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2OrdTypServ';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DEFORDTYP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2DefOrdTyp';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFCHGPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfChgPric';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SPORDPRICEZERO)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2SpordPriceZero';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFINACTPRICEZERO)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfInactPriceZero';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2RESEQ)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2Reseq';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2RESEQBY)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ReseqBy';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2MINQTYSALES)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2MinQtySales';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2CHGORDER)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ChgOrder';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2VERCOMP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2VerComp';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PRTINV)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2PrtInv';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICPICKTICK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2DynamicPickTick';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICINVOICE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2DynamicInvoice';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2EDIDEFINVOICE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2EdiDefInvoice';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWCCPICK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2AllowCcPick';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCWIND)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2AutoCcWind';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCUPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2AutoCcUpdate';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWAPVDCCCHG)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2AllowApvdCcChg';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3APVDBCKORDCLEAR)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3ApvdBckordClear';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2POLWHICHCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2PolWhichCost';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2REVHAZARD)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2RevHazard';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SHOWDISCLIST)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ShowDiscList';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2CHGLIST)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ChgList';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2MAILLIST)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2MailList';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2NAMEFORMAT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2NameFormat';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2MAILIDTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2MailIdType';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2CASHDRAWERPSWD)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2CashDrawerPswd';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2UPSONLINE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2UpsOnline';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PICORVER)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2PicOrVer';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2COMBBACK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2CombBack';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2FRTALLOWAMT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FrtAllowAmt';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3SHIPMOREORDERED)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3ShipMoreOrdered';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3WARNSHIPMORE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3WarnShipMore';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3PROFORMAFROMESO)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3ProformaFromEso';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3PICKPACKCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3PickPackCode';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2USEDEPT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2UseDept';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2USEDIVISION)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2UseDivision';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DEFMFECODE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2DefMfeCode';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SHOWAVGCOST)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ShowAvgCost';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2FEDEX)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2FedEx';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3DEFFRGHTGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3DefFrghtGrup';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3UPSMYSQLDBNAME)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3UpsMysqlDbname';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEOPTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfUseOptCode';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSCN4OPT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfScn4Opt';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYUSE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2TakenByUse';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYLOGIN)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2TakenByLogin';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYFORCE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2TakenByForce';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYUSE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2PickedByUse';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYFORCE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2PickedByForce';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYPROC)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2PickedByProc';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYUSE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2PackedByUse';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYFORCE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2PackedByForce';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYUSE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2VerifiedByUse';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYLOGIN)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2VerifiedByLogin';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYFORCE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2VerifiedByForce';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL1)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfOptLabl1';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2UCODE1FORCE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2Ucode1Force';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL2)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfOptLabl2';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2UCODE2FORCE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2Ucode2Force';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL3)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfOptLabl3';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2UCODE3FORCE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2Ucode3Force';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL4)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfOptLabl4';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2UCODE4FORCE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2Ucode4Force';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFVERIFYAFTERPACK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfVerifyAfterPack';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFHISTYRSBACK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfHistYrsBack';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFRQSTCATLG)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfRqstCatlg';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2CONPICK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ConPick';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWPICK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2AllowPick';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2COMBINESAME)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2CombineSame';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3AUTOVERNITEMS)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3AutoVerNItems';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWZEROQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2AllowZeroQty';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWINVALIDWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2AllowInvalidWhse';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SHOWEDIINFO)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ShowEdiInfo';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ADDONSALES)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2AddOnSales';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2FORCEDBKORD)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2ForcedBkord';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2UPDTPRCDISC)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2UpdtPrcDisc';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2AUTOPACK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2AutoPack';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PICKBOPRTZQTS)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2PickBoPrtZqts';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3PICK00NOSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3Pick00NoShip';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDLEAD)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2StandOrdLead';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDAMNT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2StandOrdAmnt';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2INACTITEMCNTRL)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2InactItemCntrl';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2USEITEMREF)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon2UseItemRef';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3UPSNAFTARECORDS)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3UpsNaftaRecords';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDFLTSHIPWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDfltShipWhse';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDFLTORIGWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfDfltOrigWhse';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFINVCWITHPACK)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfInvcWithPack';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFCARRYCNTRQTY)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfCarryCntrQty';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3USEORDRAS)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3UseOrdrAs';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRSOURCE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbConfUseOrdrSource';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3CCPROCESSOR)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3CcProcessor';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3CREDITCARDCAP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3CreditCardCap';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3KEYORCCCAP)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3KeyOrCcCap';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3CCXOVERLAY)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3CcXOverlay';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3CCTIMEOUT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3CcTimeOut';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3SIGNATURECAPTURE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3SignatureCapture';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3CCPREAPPROVAL)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3CcPreapproval';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3FORCECCNBRENTRY)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3ForceCcNbrEntry';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3INTRITEMNOTES)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3IntrItemNotes';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3MTRCERT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3MtrCert';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3COFCCERT)) {
            $modifiedColumns[':p' . $index++]  = 'OetbCon3CofcCert';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO so_config (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'OetbConfKey':
                        $stmt->bindValue($identifier, $this->oetbconfkey, PDO::PARAM_INT);
                        break;
                    case 'OetbConfGlIfac':
                        $stmt->bindValue($identifier, $this->oetbconfglifac, PDO::PARAM_STR);
                        break;
                    case 'OetbConfInIfac':
                        $stmt->bindValue($identifier, $this->oetbconfinifac, PDO::PARAM_STR);
                        break;
                    case 'OetbConfRelIvty':
                        $stmt->bindValue($identifier, $this->oetbconfrelivty, PDO::PARAM_STR);
                        break;
                    case 'OetbConfUseOrdrNbr':
                        $stmt->bindValue($identifier, $this->oetbconfuseordrnbr, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDefRqstDate':
                        $stmt->bindValue($identifier, $this->oetbconfdefrqstdate, PDO::PARAM_STR);
                        break;
                    case 'OetbConfUseCancDate':
                        $stmt->bindValue($identifier, $this->oetbconfusecancdate, PDO::PARAM_STR);
                        break;
                    case 'OetbConfShowSp':
                        $stmt->bindValue($identifier, $this->oetbconfshowsp, PDO::PARAM_STR);
                        break;
                    case 'OetbConfJrnlSort':
                        $stmt->bindValue($identifier, $this->oetbconfjrnlsort, PDO::PARAM_INT);
                        break;
                    case 'OetbConfUsePrepSoOpt':
                        $stmt->bindValue($identifier, $this->oetbconfuseprepsoopt, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDispBillTo':
                        $stmt->bindValue($identifier, $this->oetbconfdispbillto, PDO::PARAM_STR);
                        break;
                    case 'OetbConfSlctFlm':
                        $stmt->bindValue($identifier, $this->oetbconfslctflm, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3UseStockPull':
                        $stmt->bindValue($identifier, $this->oetbcon3usestockpull, PDO::PARAM_STR);
                        break;
                    case 'OetbConfQtyToShip':
                        $stmt->bindValue($identifier, $this->oetbconfqtytoship, PDO::PARAM_STR);
                        break;
                    case 'OetbConfQtyToShipDef':
                        $stmt->bindValue($identifier, $this->oetbconfqtytoshipdef, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDfltOrdrQty':
                        $stmt->bindValue($identifier, $this->oetbconfdfltordrqty, PDO::PARAM_STR);
                        break;
                    case 'OetbConfAllocQtyToShip':
                        $stmt->bindValue($identifier, $this->oetbconfallocqtytoship, PDO::PARAM_STR);
                        break;
                    case 'OetbConfOverAllocQts':
                        $stmt->bindValue($identifier, $this->oetbconfoverallocqts, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3CompleteLotBin':
                        $stmt->bindValue($identifier, $this->oetbcon3completelotbin, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3RqtsOpt':
                        $stmt->bindValue($identifier, $this->oetbcon3rqtsopt, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2ShipCompHold':
                        $stmt->bindValue($identifier, $this->oetbcon2shipcomphold, PDO::PARAM_INT);
                        break;
                    case 'OetbCon3UseSaleForecast':
                        $stmt->bindValue($identifier, $this->oetbcon3usesaleforecast, PDO::PARAM_STR);
                        break;
                    case 'OetbConfVerfStopNeg':
                        $stmt->bindValue($identifier, $this->oetbconfverfstopneg, PDO::PARAM_STR);
                        break;
                    case 'OetbConfVerfAudtRept':
                        $stmt->bindValue($identifier, $this->oetbconfverfaudtrept, PDO::PARAM_STR);
                        break;
                    case 'OetbConfAgeLevlDisp':
                        $stmt->bindValue($identifier, $this->oetbconfagelevldisp, PDO::PARAM_STR);
                        break;
                    case 'OetbConfAgeAllTime':
                        $stmt->bindValue($identifier, $this->oetbconfagealltime, PDO::PARAM_STR);
                        break;
                    case 'OetbConfAgeAtHold':
                        $stmt->bindValue($identifier, $this->oetbconfageathold, PDO::PARAM_STR);
                        break;
                    case 'OetbConfShowAtLevl':
                        $stmt->bindValue($identifier, $this->oetbconfshowatlevl, PDO::PARAM_STR);
                        break;
                    case 'OetbConfShowItem':
                        $stmt->bindValue($identifier, $this->oetbconfshowitem, PDO::PARAM_STR);
                        break;
                    case 'OetbConfStopPnt':
                        $stmt->bindValue($identifier, $this->oetbconfstoppnt, PDO::PARAM_STR);
                        break;
                    case 'OetbConfPricWind':
                        $stmt->bindValue($identifier, $this->oetbconfpricwind, PDO::PARAM_STR);
                        break;
                    case 'OetbConfShowCost':
                        $stmt->bindValue($identifier, $this->oetbconfshowcost, PDO::PARAM_STR);
                        break;
                    case 'OetbConfCostToUse':
                        $stmt->bindValue($identifier, $this->oetbconfcosttouse, PDO::PARAM_STR);
                        break;
                    case 'OetbConfShowMarg':
                        $stmt->bindValue($identifier, $this->oetbconfshowmarg, PDO::PARAM_STR);
                        break;
                    case 'OetbConfFxOe':
                        $stmt->bindValue($identifier, $this->oetbconffxoe, PDO::PARAM_STR);
                        break;
                    case 'OetbConfFxInv':
                        $stmt->bindValue($identifier, $this->oetbconffxinv, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDispVia':
                        $stmt->bindValue($identifier, $this->oetbconfdispvia, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDispCaseQty':
                        $stmt->bindValue($identifier, $this->oetbconfdispcaseqty, PDO::PARAM_STR);
                        break;
                    case 'OetbConfFrtIn':
                        $stmt->bindValue($identifier, $this->oetbconffrtin, PDO::PARAM_STR);
                        break;
                    case 'OetbConfFrtInGlAcct':
                        $stmt->bindValue($identifier, $this->oetbconffrtinglacct, PDO::PARAM_STR);
                        break;
                    case 'OetbConfMinCharge':
                        $stmt->bindValue($identifier, $this->oetbconfmincharge, PDO::PARAM_STR);
                        break;
                    case 'OetbConfMinChrgGlAcct':
                        $stmt->bindValue($identifier, $this->oetbconfminchrgglacct, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDropShipChrg':
                        $stmt->bindValue($identifier, $this->oetbconfdropshipchrg, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDropShpGlAcct':
                        $stmt->bindValue($identifier, $this->oetbconfdropshpglacct, PDO::PARAM_STR);
                        break;
                    case 'OetbConfNonTaxCustCode':
                        $stmt->bindValue($identifier, $this->oetbconfnontaxcustcode, PDO::PARAM_STR);
                        break;
                    case 'OetbConfHsTaxId':
                        $stmt->bindValue($identifier, $this->oetbconfhstaxid, PDO::PARAM_STR);
                        break;
                    case 'OetbConfHsFrtId':
                        $stmt->bindValue($identifier, $this->oetbconfhsfrtid, PDO::PARAM_STR);
                        break;
                    case 'OetbConfHsMiscId':
                        $stmt->bindValue($identifier, $this->oetbconfhsmiscid, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2HsCusdId':
                        $stmt->bindValue($identifier, $this->oetbcon2hscusdid, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3HsFrtInId':
                        $stmt->bindValue($identifier, $this->oetbcon3hsfrtinid, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3HsDropId':
                        $stmt->bindValue($identifier, $this->oetbcon3hsdropid, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3HsMinordId':
                        $stmt->bindValue($identifier, $this->oetbcon3hsminordid, PDO::PARAM_STR);
                        break;
                    case 'OetbConfHeadGetDef':
                        $stmt->bindValue($identifier, $this->oetbconfheadgetdef, PDO::PARAM_STR);
                        break;
                    case 'OetbConfItemGetDef':
                        $stmt->bindValue($identifier, $this->oetbconfitemgetdef, PDO::PARAM_STR);
                        break;
                    case 'OetbConfAutoGetCust':
                        $stmt->bindValue($identifier, $this->oetbconfautogetcust, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3AutoGetItem':
                        $stmt->bindValue($identifier, $this->oetbcon3autogetitem, PDO::PARAM_STR);
                        break;
                    case 'OetbConfRqstHeadDtl':
                        $stmt->bindValue($identifier, $this->oetbconfrqstheaddtl, PDO::PARAM_STR);
                        break;
                    case 'OetbConfCancHeadDtl':
                        $stmt->bindValue($identifier, $this->oetbconfcancheaddtl, PDO::PARAM_STR);
                        break;
                    case 'OetbConfUseInvcAsShip':
                        $stmt->bindValue($identifier, $this->oetbconfuseinvcasship, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3UseArrvDate':
                        $stmt->bindValue($identifier, $this->oetbcon3usearrvdate, PDO::PARAM_STR);
                        break;
                    case 'OetbConfSeparateCred':
                        $stmt->bindValue($identifier, $this->oetbconfseparatecred, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3ApplyCredits':
                        $stmt->bindValue($identifier, $this->oetbcon3applycredits, PDO::PARAM_STR);
                        break;
                    case 'OetbConfWarnNotNew':
                        $stmt->bindValue($identifier, $this->oetbconfwarnnotnew, PDO::PARAM_STR);
                        break;
                    case 'OetbConfWarnBoToZero':
                        $stmt->bindValue($identifier, $this->oetbconfwarnbotozero, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2ProvideRouting':
                        $stmt->bindValue($identifier, $this->oetbcon2providerouting, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2SrtRtByRqstDte':
                        $stmt->bindValue($identifier, $this->oetbcon2srtrtbyrqstdte, PDO::PARAM_STR);
                        break;
                    case 'OetbConfUseSoReview':
                        $stmt->bindValue($identifier, $this->oetbconfusesoreview, PDO::PARAM_STR);
                        break;
                    case 'OetbConfPickNoteDef':
                        $stmt->bindValue($identifier, $this->oetbconfpicknotedef, PDO::PARAM_STR);
                        break;
                    case 'OetbConfPackNoteDef':
                        $stmt->bindValue($identifier, $this->oetbconfpacknotedef, PDO::PARAM_STR);
                        break;
                    case 'OetbConfPickSort':
                        $stmt->bindValue($identifier, $this->oetbconfpicksort, PDO::PARAM_STR);
                        break;
                    case 'OetbConfPackSort':
                        $stmt->bindValue($identifier, $this->oetbconfpacksort, PDO::PARAM_STR);
                        break;
                    case 'OetbConfPrtPricOnly':
                        $stmt->bindValue($identifier, $this->oetbconfprtpriconly, PDO::PARAM_STR);
                        break;
                    case 'OetbConfPrtNeg':
                        $stmt->bindValue($identifier, $this->oetbconfprtneg, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2PrtPackageInfo':
                        $stmt->bindValue($identifier, $this->oetbcon2prtpackageinfo, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2InnerPackLabel':
                        $stmt->bindValue($identifier, $this->oetbcon2innerpacklabel, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2OuterPackLabel':
                        $stmt->bindValue($identifier, $this->oetbcon2outerpacklabel, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2ShipTareLabel':
                        $stmt->bindValue($identifier, $this->oetbcon2shiptarelabel, PDO::PARAM_STR);
                        break;
                    case 'OetbConfPrtPick':
                        $stmt->bindValue($identifier, $this->oetbconfprtpick, PDO::PARAM_STR);
                        break;
                    case 'OetbConfPicPrioSeq':
                        $stmt->bindValue($identifier, $this->oetbconfpicprioseq, PDO::PARAM_STR);
                        break;
                    case 'OetbConfPrtPack':
                        $stmt->bindValue($identifier, $this->oetbconfprtpack, PDO::PARAM_STR);
                        break;
                    case 'OetbConfPrtInv':
                        $stmt->bindValue($identifier, $this->oetbconfprtinv, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2PrtCredMemo':
                        $stmt->bindValue($identifier, $this->oetbcon2prtcredmemo, PDO::PARAM_STR);
                        break;
                    case 'OetbConfCrntDate':
                        $stmt->bindValue($identifier, $this->oetbconfcrntdate, PDO::PARAM_STR);
                        break;
                    case 'OetbConfMarkPicked':
                        $stmt->bindValue($identifier, $this->oetbconfmarkpicked, PDO::PARAM_STR);
                        break;
                    case 'OetbConfShowUnavail':
                        $stmt->bindValue($identifier, $this->oetbconfshowunavail, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDecPlaces':
                        $stmt->bindValue($identifier, $this->oetbconfdecplaces, PDO::PARAM_INT);
                        break;
                    case 'OetbConfWarnDup':
                        $stmt->bindValue($identifier, $this->oetbconfwarndup, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDefPick':
                        $stmt->bindValue($identifier, $this->oetbconfdefpick, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDefPack':
                        $stmt->bindValue($identifier, $this->oetbconfdefpack, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDefInvc':
                        $stmt->bindValue($identifier, $this->oetbconfdefinvc, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDefAck':
                        $stmt->bindValue($identifier, $this->oetbconfdefack, PDO::PARAM_STR);
                        break;
                    case 'OetbConfAckSortOpt':
                        $stmt->bindValue($identifier, $this->oetbconfacksortopt, PDO::PARAM_STR);
                        break;
                    case 'OetbConfReleaseNbr':
                        $stmt->bindValue($identifier, $this->oetbconfreleasenbr, PDO::PARAM_STR);
                        break;
                    case 'OetbConfPoDetLineNbr':
                        $stmt->bindValue($identifier, $this->oetbconfpodetlinenbr, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDetLineBinNbr':
                        $stmt->bindValue($identifier, $this->oetbconfdetlinebinnbr, PDO::PARAM_STR);
                        break;
                    case 'OetbConfSplitByWhse':
                        $stmt->bindValue($identifier, $this->oetbconfsplitbywhse, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3AllowMultWhse':
                        $stmt->bindValue($identifier, $this->oetbcon3allowmultwhse, PDO::PARAM_STR);
                        break;
                    case 'OetbConfUseOrigWhse':
                        $stmt->bindValue($identifier, $this->oetbconfuseorigwhse, PDO::PARAM_STR);
                        break;
                    case 'OetbConfUseEsoSingle':
                        $stmt->bindValue($identifier, $this->oetbconfuseesosingle, PDO::PARAM_STR);
                        break;
                    case 'OetbConfCreatePo':
                        $stmt->bindValue($identifier, $this->oetbconfcreatepo, PDO::PARAM_STR);
                        break;
                    case 'OetbConfBestPrice':
                        $stmt->bindValue($identifier, $this->oetbconfbestprice, PDO::PARAM_STR);
                        break;
                    case 'OetbConfEsoBackToNew':
                        $stmt->bindValue($identifier, $this->oetbconfesobacktonew, PDO::PARAM_STR);
                        break;
                    case 'OetbConfPickPrintDrop':
                        $stmt->bindValue($identifier, $this->oetbconfpickprintdrop, PDO::PARAM_STR);
                        break;
                    case 'OetbConfWarnMultPo':
                        $stmt->bindValue($identifier, $this->oetbconfwarnmultpo, PDO::PARAM_STR);
                        break;
                    case 'OetbConfAlertItemQuote':
                        $stmt->bindValue($identifier, $this->oetbconfalertitemquote, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3AskChgPrcWQty':
                        $stmt->bindValue($identifier, $this->oetbcon3askchgprcwqty, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3TenQtyBrks':
                        $stmt->bindValue($identifier, $this->oetbcon3tenqtybrks, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDecOrdrPric':
                        $stmt->bindValue($identifier, $this->oetbconfdecordrpric, PDO::PARAM_INT);
                        break;
                    case 'OetbCon2ProvLostSales':
                        $stmt->bindValue($identifier, $this->oetbcon2provlostsales, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2AskReasonCode':
                        $stmt->bindValue($identifier, $this->oetbcon2askreasoncode, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2DefReasonCode':
                        $stmt->bindValue($identifier, $this->oetbcon2defreasoncode, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2BordCntl':
                        $stmt->bindValue($identifier, $this->oetbcon2bordcntl, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2DefReaBoCode':
                        $stmt->bindValue($identifier, $this->oetbcon2defreabocode, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2NumDaysSavLs':
                        $stmt->bindValue($identifier, $this->oetbcon2numdayssavls, PDO::PARAM_INT);
                        break;
                    case 'OetbCon2CallBackNotif':
                        $stmt->bindValue($identifier, $this->oetbcon2callbacknotif, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2DefDaysWhenIn':
                        $stmt->bindValue($identifier, $this->oetbcon2defdayswhenin, PDO::PARAM_INT);
                        break;
                    case 'OetbCon2AddSubsLs':
                        $stmt->bindValue($identifier, $this->oetbcon2addsubsls, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2DefReaSubsCode':
                        $stmt->bindValue($identifier, $this->oetbcon2defreasubscode, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2OrdTypNorm':
                        $stmt->bindValue($identifier, $this->oetbcon2ordtypnorm, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2OrdTypRep':
                        $stmt->bindValue($identifier, $this->oetbcon2ordtyprep, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2OrdTypServ':
                        $stmt->bindValue($identifier, $this->oetbcon2ordtypserv, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2DefOrdTyp':
                        $stmt->bindValue($identifier, $this->oetbcon2defordtyp, PDO::PARAM_STR);
                        break;
                    case 'OetbConfChgPric':
                        $stmt->bindValue($identifier, $this->oetbconfchgpric, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2SpordPriceZero':
                        $stmt->bindValue($identifier, $this->oetbcon2spordpricezero, PDO::PARAM_STR);
                        break;
                    case 'OetbConfInactPriceZero':
                        $stmt->bindValue($identifier, $this->oetbconfinactpricezero, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2Reseq':
                        $stmt->bindValue($identifier, $this->oetbcon2reseq, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2ReseqBy':
                        $stmt->bindValue($identifier, $this->oetbcon2reseqby, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2MinQtySales':
                        $stmt->bindValue($identifier, $this->oetbcon2minqtysales, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2ChgOrder':
                        $stmt->bindValue($identifier, $this->oetbcon2chgorder, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2VerComp':
                        $stmt->bindValue($identifier, $this->oetbcon2vercomp, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2PrtInv':
                        $stmt->bindValue($identifier, $this->oetbcon2prtinv, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2DynamicPickTick':
                        $stmt->bindValue($identifier, $this->oetbcon2dynamicpicktick, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2DynamicInvoice':
                        $stmt->bindValue($identifier, $this->oetbcon2dynamicinvoice, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2EdiDefInvoice':
                        $stmt->bindValue($identifier, $this->oetbcon2edidefinvoice, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2AllowCcPick':
                        $stmt->bindValue($identifier, $this->oetbcon2allowccpick, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2AutoCcWind':
                        $stmt->bindValue($identifier, $this->oetbcon2autoccwind, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2AutoCcUpdate':
                        $stmt->bindValue($identifier, $this->oetbcon2autoccupdate, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2AllowApvdCcChg':
                        $stmt->bindValue($identifier, $this->oetbcon2allowapvdccchg, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3ApvdBckordClear':
                        $stmt->bindValue($identifier, $this->oetbcon3apvdbckordclear, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2PolWhichCost':
                        $stmt->bindValue($identifier, $this->oetbcon2polwhichcost, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2RevHazard':
                        $stmt->bindValue($identifier, $this->oetbcon2revhazard, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2ShowDiscList':
                        $stmt->bindValue($identifier, $this->oetbcon2showdisclist, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2ChgList':
                        $stmt->bindValue($identifier, $this->oetbcon2chglist, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2MailList':
                        $stmt->bindValue($identifier, $this->oetbcon2maillist, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2NameFormat':
                        $stmt->bindValue($identifier, $this->oetbcon2nameformat, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2MailIdType':
                        $stmt->bindValue($identifier, $this->oetbcon2mailidtype, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2CashDrawerPswd':
                        $stmt->bindValue($identifier, $this->oetbcon2cashdrawerpswd, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2UpsOnline':
                        $stmt->bindValue($identifier, $this->oetbcon2upsonline, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2PicOrVer':
                        $stmt->bindValue($identifier, $this->oetbcon2picorver, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2CombBack':
                        $stmt->bindValue($identifier, $this->oetbcon2combback, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FrtAllowAmt':
                        $stmt->bindValue($identifier, $this->oetbcon2frtallowamt, PDO::PARAM_INT);
                        break;
                    case 'OetbCon3ShipMoreOrdered':
                        $stmt->bindValue($identifier, $this->oetbcon3shipmoreordered, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3WarnShipMore':
                        $stmt->bindValue($identifier, $this->oetbcon3warnshipmore, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3ProformaFromEso':
                        $stmt->bindValue($identifier, $this->oetbcon3proformafromeso, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3PickPackCode':
                        $stmt->bindValue($identifier, $this->oetbcon3pickpackcode, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2UseDept':
                        $stmt->bindValue($identifier, $this->oetbcon2usedept, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2UseDivision':
                        $stmt->bindValue($identifier, $this->oetbcon2usedivision, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2DefMfeCode':
                        $stmt->bindValue($identifier, $this->oetbcon2defmfecode, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2ShowAvgCost':
                        $stmt->bindValue($identifier, $this->oetbcon2showavgcost, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2FedEx':
                        $stmt->bindValue($identifier, $this->oetbcon2fedex, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3DefFrghtGrup':
                        $stmt->bindValue($identifier, $this->oetbcon3deffrghtgrup, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3UpsMysqlDbname':
                        $stmt->bindValue($identifier, $this->oetbcon3upsmysqldbname, PDO::PARAM_STR);
                        break;
                    case 'OetbConfUseOptCode':
                        $stmt->bindValue($identifier, $this->oetbconfuseoptcode, PDO::PARAM_STR);
                        break;
                    case 'OetbConfScn4Opt':
                        $stmt->bindValue($identifier, $this->oetbconfscn4opt, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2TakenByUse':
                        $stmt->bindValue($identifier, $this->oetbcon2takenbyuse, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2TakenByLogin':
                        $stmt->bindValue($identifier, $this->oetbcon2takenbylogin, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2TakenByForce':
                        $stmt->bindValue($identifier, $this->oetbcon2takenbyforce, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2PickedByUse':
                        $stmt->bindValue($identifier, $this->oetbcon2pickedbyuse, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2PickedByForce':
                        $stmt->bindValue($identifier, $this->oetbcon2pickedbyforce, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2PickedByProc':
                        $stmt->bindValue($identifier, $this->oetbcon2pickedbyproc, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2PackedByUse':
                        $stmt->bindValue($identifier, $this->oetbcon2packedbyuse, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2PackedByForce':
                        $stmt->bindValue($identifier, $this->oetbcon2packedbyforce, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2VerifiedByUse':
                        $stmt->bindValue($identifier, $this->oetbcon2verifiedbyuse, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2VerifiedByLogin':
                        $stmt->bindValue($identifier, $this->oetbcon2verifiedbylogin, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2VerifiedByForce':
                        $stmt->bindValue($identifier, $this->oetbcon2verifiedbyforce, PDO::PARAM_STR);
                        break;
                    case 'OetbConfOptLabl1':
                        $stmt->bindValue($identifier, $this->oetbconfoptlabl1, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2Ucode1Force':
                        $stmt->bindValue($identifier, $this->oetbcon2ucode1force, PDO::PARAM_STR);
                        break;
                    case 'OetbConfOptLabl2':
                        $stmt->bindValue($identifier, $this->oetbconfoptlabl2, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2Ucode2Force':
                        $stmt->bindValue($identifier, $this->oetbcon2ucode2force, PDO::PARAM_STR);
                        break;
                    case 'OetbConfOptLabl3':
                        $stmt->bindValue($identifier, $this->oetbconfoptlabl3, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2Ucode3Force':
                        $stmt->bindValue($identifier, $this->oetbcon2ucode3force, PDO::PARAM_STR);
                        break;
                    case 'OetbConfOptLabl4':
                        $stmt->bindValue($identifier, $this->oetbconfoptlabl4, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2Ucode4Force':
                        $stmt->bindValue($identifier, $this->oetbcon2ucode4force, PDO::PARAM_STR);
                        break;
                    case 'OetbConfVerifyAfterPack':
                        $stmt->bindValue($identifier, $this->oetbconfverifyafterpack, PDO::PARAM_STR);
                        break;
                    case 'OetbConfHistYrsBack':
                        $stmt->bindValue($identifier, $this->oetbconfhistyrsback, PDO::PARAM_INT);
                        break;
                    case 'OetbConfRqstCatlg':
                        $stmt->bindValue($identifier, $this->oetbconfrqstcatlg, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2ConPick':
                        $stmt->bindValue($identifier, $this->oetbcon2conpick, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2AllowPick':
                        $stmt->bindValue($identifier, $this->oetbcon2allowpick, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2CombineSame':
                        $stmt->bindValue($identifier, $this->oetbcon2combinesame, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3AutoVerNItems':
                        $stmt->bindValue($identifier, $this->oetbcon3autovernitems, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2AllowZeroQty':
                        $stmt->bindValue($identifier, $this->oetbcon2allowzeroqty, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2AllowInvalidWhse':
                        $stmt->bindValue($identifier, $this->oetbcon2allowinvalidwhse, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2ShowEdiInfo':
                        $stmt->bindValue($identifier, $this->oetbcon2showediinfo, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2AddOnSales':
                        $stmt->bindValue($identifier, $this->oetbcon2addonsales, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2ForcedBkord':
                        $stmt->bindValue($identifier, $this->oetbcon2forcedbkord, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2UpdtPrcDisc':
                        $stmt->bindValue($identifier, $this->oetbcon2updtprcdisc, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2AutoPack':
                        $stmt->bindValue($identifier, $this->oetbcon2autopack, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2PickBoPrtZqts':
                        $stmt->bindValue($identifier, $this->oetbcon2pickboprtzqts, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3Pick00NoShip':
                        $stmt->bindValue($identifier, $this->oetbcon3pick00noship, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2StandOrdLead':
                        $stmt->bindValue($identifier, $this->oetbcon2standordlead, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2StandOrdAmnt':
                        $stmt->bindValue($identifier, $this->oetbcon2standordamnt, PDO::PARAM_INT);
                        break;
                    case 'OetbCon2InactItemCntrl':
                        $stmt->bindValue($identifier, $this->oetbcon2inactitemcntrl, PDO::PARAM_STR);
                        break;
                    case 'OetbCon2UseItemRef':
                        $stmt->bindValue($identifier, $this->oetbcon2useitemref, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3UpsNaftaRecords':
                        $stmt->bindValue($identifier, $this->oetbcon3upsnaftarecords, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDfltShipWhse':
                        $stmt->bindValue($identifier, $this->oetbconfdfltshipwhse, PDO::PARAM_STR);
                        break;
                    case 'OetbConfDfltOrigWhse':
                        $stmt->bindValue($identifier, $this->oetbconfdfltorigwhse, PDO::PARAM_STR);
                        break;
                    case 'OetbConfInvcWithPack':
                        $stmt->bindValue($identifier, $this->oetbconfinvcwithpack, PDO::PARAM_STR);
                        break;
                    case 'OetbConfCarryCntrQty':
                        $stmt->bindValue($identifier, $this->oetbconfcarrycntrqty, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3UseOrdrAs':
                        $stmt->bindValue($identifier, $this->oetbcon3useordras, PDO::PARAM_STR);
                        break;
                    case 'OetbConfUseOrdrSource':
                        $stmt->bindValue($identifier, $this->oetbconfuseordrsource, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3CcProcessor':
                        $stmt->bindValue($identifier, $this->oetbcon3ccprocessor, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3CreditCardCap':
                        $stmt->bindValue($identifier, $this->oetbcon3creditcardcap, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3KeyOrCcCap':
                        $stmt->bindValue($identifier, $this->oetbcon3keyorcccap, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3CcXOverlay':
                        $stmt->bindValue($identifier, $this->oetbcon3ccxoverlay, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3CcTimeOut':
                        $stmt->bindValue($identifier, $this->oetbcon3cctimeout, PDO::PARAM_INT);
                        break;
                    case 'OetbCon3SignatureCapture':
                        $stmt->bindValue($identifier, $this->oetbcon3signaturecapture, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3CcPreapproval':
                        $stmt->bindValue($identifier, $this->oetbcon3ccpreapproval, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3ForceCcNbrEntry':
                        $stmt->bindValue($identifier, $this->oetbcon3forceccnbrentry, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3IntrItemNotes':
                        $stmt->bindValue($identifier, $this->oetbcon3intritemnotes, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3MtrCert':
                        $stmt->bindValue($identifier, $this->oetbcon3mtrcert, PDO::PARAM_STR);
                        break;
                    case 'OetbCon3CofcCert':
                        $stmt->bindValue($identifier, $this->oetbcon3cofccert, PDO::PARAM_STR);
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
        $pos = ConfigSalesOrderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getOetbconfkey();
                break;
            case 1:
                return $this->getOetbconfglifac();
                break;
            case 2:
                return $this->getOetbconfinifac();
                break;
            case 3:
                return $this->getOetbconfrelivty();
                break;
            case 4:
                return $this->getOetbconfuseordrnbr();
                break;
            case 5:
                return $this->getOetbconfdefrqstdate();
                break;
            case 6:
                return $this->getOetbconfusecancdate();
                break;
            case 7:
                return $this->getOetbconfshowsp();
                break;
            case 8:
                return $this->getOetbconfjrnlsort();
                break;
            case 9:
                return $this->getOetbconfuseprepsoopt();
                break;
            case 10:
                return $this->getOetbconfdispbillto();
                break;
            case 11:
                return $this->getOetbconfslctflm();
                break;
            case 12:
                return $this->getOetbcon3usestockpull();
                break;
            case 13:
                return $this->getOetbconfqtytoship();
                break;
            case 14:
                return $this->getOetbconfqtytoshipdef();
                break;
            case 15:
                return $this->getOetbconfdfltordrqty();
                break;
            case 16:
                return $this->getOetbconfallocqtytoship();
                break;
            case 17:
                return $this->getOetbconfoverallocqts();
                break;
            case 18:
                return $this->getOetbcon3completelotbin();
                break;
            case 19:
                return $this->getOetbcon3rqtsopt();
                break;
            case 20:
                return $this->getOetbcon2shipcomphold();
                break;
            case 21:
                return $this->getOetbcon3usesaleforecast();
                break;
            case 22:
                return $this->getOetbconfverfstopneg();
                break;
            case 23:
                return $this->getOetbconfverfaudtrept();
                break;
            case 24:
                return $this->getOetbconfagelevldisp();
                break;
            case 25:
                return $this->getOetbconfagealltime();
                break;
            case 26:
                return $this->getOetbconfageathold();
                break;
            case 27:
                return $this->getOetbconfshowatlevl();
                break;
            case 28:
                return $this->getOetbconfshowitem();
                break;
            case 29:
                return $this->getOetbconfstoppnt();
                break;
            case 30:
                return $this->getOetbconfpricwind();
                break;
            case 31:
                return $this->getOetbconfshowcost();
                break;
            case 32:
                return $this->getOetbconfcosttouse();
                break;
            case 33:
                return $this->getOetbconfshowmarg();
                break;
            case 34:
                return $this->getOetbconffxoe();
                break;
            case 35:
                return $this->getOetbconffxinv();
                break;
            case 36:
                return $this->getOetbconfdispvia();
                break;
            case 37:
                return $this->getOetbconfdispcaseqty();
                break;
            case 38:
                return $this->getOetbconffrtin();
                break;
            case 39:
                return $this->getOetbconffrtinglacct();
                break;
            case 40:
                return $this->getOetbconfmincharge();
                break;
            case 41:
                return $this->getOetbconfminchrgglacct();
                break;
            case 42:
                return $this->getOetbconfdropshipchrg();
                break;
            case 43:
                return $this->getOetbconfdropshpglacct();
                break;
            case 44:
                return $this->getOetbconfnontaxcustcode();
                break;
            case 45:
                return $this->getOetbconfhstaxid();
                break;
            case 46:
                return $this->getOetbconfhsfrtid();
                break;
            case 47:
                return $this->getOetbconfhsmiscid();
                break;
            case 48:
                return $this->getOetbcon2hscusdid();
                break;
            case 49:
                return $this->getOetbcon3hsfrtinid();
                break;
            case 50:
                return $this->getOetbcon3hsdropid();
                break;
            case 51:
                return $this->getOetbcon3hsminordid();
                break;
            case 52:
                return $this->getOetbconfheadgetdef();
                break;
            case 53:
                return $this->getOetbconfitemgetdef();
                break;
            case 54:
                return $this->getOetbconfautogetcust();
                break;
            case 55:
                return $this->getOetbcon3autogetitem();
                break;
            case 56:
                return $this->getOetbconfrqstheaddtl();
                break;
            case 57:
                return $this->getOetbconfcancheaddtl();
                break;
            case 58:
                return $this->getOetbconfuseinvcasship();
                break;
            case 59:
                return $this->getOetbcon3usearrvdate();
                break;
            case 60:
                return $this->getOetbconfseparatecred();
                break;
            case 61:
                return $this->getOetbcon3applycredits();
                break;
            case 62:
                return $this->getOetbconfwarnnotnew();
                break;
            case 63:
                return $this->getOetbconfwarnbotozero();
                break;
            case 64:
                return $this->getOetbcon2providerouting();
                break;
            case 65:
                return $this->getOetbcon2srtrtbyrqstdte();
                break;
            case 66:
                return $this->getOetbconfusesoreview();
                break;
            case 67:
                return $this->getOetbconfpicknotedef();
                break;
            case 68:
                return $this->getOetbconfpacknotedef();
                break;
            case 69:
                return $this->getOetbconfpicksort();
                break;
            case 70:
                return $this->getOetbconfpacksort();
                break;
            case 71:
                return $this->getOetbconfprtpriconly();
                break;
            case 72:
                return $this->getOetbconfprtneg();
                break;
            case 73:
                return $this->getOetbcon2prtpackageinfo();
                break;
            case 74:
                return $this->getOetbcon2innerpacklabel();
                break;
            case 75:
                return $this->getOetbcon2outerpacklabel();
                break;
            case 76:
                return $this->getOetbcon2shiptarelabel();
                break;
            case 77:
                return $this->getOetbconfprtpick();
                break;
            case 78:
                return $this->getOetbconfpicprioseq();
                break;
            case 79:
                return $this->getOetbconfprtpack();
                break;
            case 80:
                return $this->getOetbconfprtinv();
                break;
            case 81:
                return $this->getOetbcon2prtcredmemo();
                break;
            case 82:
                return $this->getOetbconfcrntdate();
                break;
            case 83:
                return $this->getOetbconfmarkpicked();
                break;
            case 84:
                return $this->getOetbconfshowunavail();
                break;
            case 85:
                return $this->getOetbconfdecplaces();
                break;
            case 86:
                return $this->getOetbconfwarndup();
                break;
            case 87:
                return $this->getOetbconfdefpick();
                break;
            case 88:
                return $this->getOetbconfdefpack();
                break;
            case 89:
                return $this->getOetbconfdefinvc();
                break;
            case 90:
                return $this->getOetbconfdefack();
                break;
            case 91:
                return $this->getOetbconfacksortopt();
                break;
            case 92:
                return $this->getOetbconfreleasenbr();
                break;
            case 93:
                return $this->getOetbconfpodetlinenbr();
                break;
            case 94:
                return $this->getOetbconfdetlinebinnbr();
                break;
            case 95:
                return $this->getOetbconfsplitbywhse();
                break;
            case 96:
                return $this->getOetbcon3allowmultwhse();
                break;
            case 97:
                return $this->getOetbconfuseorigwhse();
                break;
            case 98:
                return $this->getOetbconfuseesosingle();
                break;
            case 99:
                return $this->getOetbconfcreatepo();
                break;
            case 100:
                return $this->getOetbconfbestprice();
                break;
            case 101:
                return $this->getOetbconfesobacktonew();
                break;
            case 102:
                return $this->getOetbconfpickprintdrop();
                break;
            case 103:
                return $this->getOetbconfwarnmultpo();
                break;
            case 104:
                return $this->getOetbconfalertitemquote();
                break;
            case 105:
                return $this->getOetbcon3askchgprcwqty();
                break;
            case 106:
                return $this->getOetbcon3tenqtybrks();
                break;
            case 107:
                return $this->getOetbconfdecordrpric();
                break;
            case 108:
                return $this->getOetbcon2provlostsales();
                break;
            case 109:
                return $this->getOetbcon2askreasoncode();
                break;
            case 110:
                return $this->getOetbcon2defreasoncode();
                break;
            case 111:
                return $this->getOetbcon2bordcntl();
                break;
            case 112:
                return $this->getOetbcon2defreabocode();
                break;
            case 113:
                return $this->getOetbcon2numdayssavls();
                break;
            case 114:
                return $this->getOetbcon2callbacknotif();
                break;
            case 115:
                return $this->getOetbcon2defdayswhenin();
                break;
            case 116:
                return $this->getOetbcon2addsubsls();
                break;
            case 117:
                return $this->getOetbcon2defreasubscode();
                break;
            case 118:
                return $this->getOetbcon2ordtypnorm();
                break;
            case 119:
                return $this->getOetbcon2ordtyprep();
                break;
            case 120:
                return $this->getOetbcon2ordtypserv();
                break;
            case 121:
                return $this->getOetbcon2defordtyp();
                break;
            case 122:
                return $this->getOetbconfchgpric();
                break;
            case 123:
                return $this->getOetbcon2spordpricezero();
                break;
            case 124:
                return $this->getOetbconfinactpricezero();
                break;
            case 125:
                return $this->getOetbcon2reseq();
                break;
            case 126:
                return $this->getOetbcon2reseqby();
                break;
            case 127:
                return $this->getOetbcon2minqtysales();
                break;
            case 128:
                return $this->getOetbcon2chgorder();
                break;
            case 129:
                return $this->getOetbcon2vercomp();
                break;
            case 130:
                return $this->getOetbcon2prtinv();
                break;
            case 131:
                return $this->getOetbcon2dynamicpicktick();
                break;
            case 132:
                return $this->getOetbcon2dynamicinvoice();
                break;
            case 133:
                return $this->getOetbcon2edidefinvoice();
                break;
            case 134:
                return $this->getOetbcon2allowccpick();
                break;
            case 135:
                return $this->getOetbcon2autoccwind();
                break;
            case 136:
                return $this->getOetbcon2autoccupdate();
                break;
            case 137:
                return $this->getOetbcon2allowapvdccchg();
                break;
            case 138:
                return $this->getOetbcon3apvdbckordclear();
                break;
            case 139:
                return $this->getOetbcon2polwhichcost();
                break;
            case 140:
                return $this->getOetbcon2revhazard();
                break;
            case 141:
                return $this->getOetbcon2showdisclist();
                break;
            case 142:
                return $this->getOetbcon2chglist();
                break;
            case 143:
                return $this->getOetbcon2maillist();
                break;
            case 144:
                return $this->getOetbcon2nameformat();
                break;
            case 145:
                return $this->getOetbcon2mailidtype();
                break;
            case 146:
                return $this->getOetbcon2cashdrawerpswd();
                break;
            case 147:
                return $this->getOetbcon2upsonline();
                break;
            case 148:
                return $this->getOetbcon2picorver();
                break;
            case 149:
                return $this->getOetbcon2combback();
                break;
            case 150:
                return $this->getOetbcon2frtallowamt();
                break;
            case 151:
                return $this->getOetbcon3shipmoreordered();
                break;
            case 152:
                return $this->getOetbcon3warnshipmore();
                break;
            case 153:
                return $this->getOetbcon3proformafromeso();
                break;
            case 154:
                return $this->getOetbcon3pickpackcode();
                break;
            case 155:
                return $this->getOetbcon2usedept();
                break;
            case 156:
                return $this->getOetbcon2usedivision();
                break;
            case 157:
                return $this->getOetbcon2defmfecode();
                break;
            case 158:
                return $this->getOetbcon2showavgcost();
                break;
            case 159:
                return $this->getOetbcon2fedex();
                break;
            case 160:
                return $this->getOetbcon3deffrghtgrup();
                break;
            case 161:
                return $this->getOetbcon3upsmysqldbname();
                break;
            case 162:
                return $this->getOetbconfuseoptcode();
                break;
            case 163:
                return $this->getOetbconfscn4opt();
                break;
            case 164:
                return $this->getOetbcon2takenbyuse();
                break;
            case 165:
                return $this->getOetbcon2takenbylogin();
                break;
            case 166:
                return $this->getOetbcon2takenbyforce();
                break;
            case 167:
                return $this->getOetbcon2pickedbyuse();
                break;
            case 168:
                return $this->getOetbcon2pickedbyforce();
                break;
            case 169:
                return $this->getOetbcon2pickedbyproc();
                break;
            case 170:
                return $this->getOetbcon2packedbyuse();
                break;
            case 171:
                return $this->getOetbcon2packedbyforce();
                break;
            case 172:
                return $this->getOetbcon2verifiedbyuse();
                break;
            case 173:
                return $this->getOetbcon2verifiedbylogin();
                break;
            case 174:
                return $this->getOetbcon2verifiedbyforce();
                break;
            case 175:
                return $this->getOetbconfoptlabl1();
                break;
            case 176:
                return $this->getOetbcon2ucode1force();
                break;
            case 177:
                return $this->getOetbconfoptlabl2();
                break;
            case 178:
                return $this->getOetbcon2ucode2force();
                break;
            case 179:
                return $this->getOetbconfoptlabl3();
                break;
            case 180:
                return $this->getOetbcon2ucode3force();
                break;
            case 181:
                return $this->getOetbconfoptlabl4();
                break;
            case 182:
                return $this->getOetbcon2ucode4force();
                break;
            case 183:
                return $this->getOetbconfverifyafterpack();
                break;
            case 184:
                return $this->getOetbconfhistyrsback();
                break;
            case 185:
                return $this->getOetbconfrqstcatlg();
                break;
            case 186:
                return $this->getOetbcon2conpick();
                break;
            case 187:
                return $this->getOetbcon2allowpick();
                break;
            case 188:
                return $this->getOetbcon2combinesame();
                break;
            case 189:
                return $this->getOetbcon3autovernitems();
                break;
            case 190:
                return $this->getOetbcon2allowzeroqty();
                break;
            case 191:
                return $this->getOetbcon2allowinvalidwhse();
                break;
            case 192:
                return $this->getOetbcon2showediinfo();
                break;
            case 193:
                return $this->getOetbcon2addonsales();
                break;
            case 194:
                return $this->getOetbcon2forcedbkord();
                break;
            case 195:
                return $this->getOetbcon2updtprcdisc();
                break;
            case 196:
                return $this->getOetbcon2autopack();
                break;
            case 197:
                return $this->getOetbcon2pickboprtzqts();
                break;
            case 198:
                return $this->getOetbcon3pick00noship();
                break;
            case 199:
                return $this->getOetbcon2standordlead();
                break;
            case 200:
                return $this->getOetbcon2standordamnt();
                break;
            case 201:
                return $this->getOetbcon2inactitemcntrl();
                break;
            case 202:
                return $this->getOetbcon2useitemref();
                break;
            case 203:
                return $this->getOetbcon3upsnaftarecords();
                break;
            case 204:
                return $this->getOetbconfdfltshipwhse();
                break;
            case 205:
                return $this->getOetbconfdfltorigwhse();
                break;
            case 206:
                return $this->getOetbconfinvcwithpack();
                break;
            case 207:
                return $this->getOetbconfcarrycntrqty();
                break;
            case 208:
                return $this->getOetbcon3useordras();
                break;
            case 209:
                return $this->getOetbconfuseordrsource();
                break;
            case 210:
                return $this->getOetbcon3ccprocessor();
                break;
            case 211:
                return $this->getOetbcon3creditcardcap();
                break;
            case 212:
                return $this->getOetbcon3keyorcccap();
                break;
            case 213:
                return $this->getOetbcon3ccxoverlay();
                break;
            case 214:
                return $this->getOetbcon3cctimeout();
                break;
            case 215:
                return $this->getOetbcon3signaturecapture();
                break;
            case 216:
                return $this->getOetbcon3ccpreapproval();
                break;
            case 217:
                return $this->getOetbcon3forceccnbrentry();
                break;
            case 218:
                return $this->getOetbcon3intritemnotes();
                break;
            case 219:
                return $this->getOetbcon3mtrcert();
                break;
            case 220:
                return $this->getOetbcon3cofccert();
                break;
            case 221:
                return $this->getDateupdtd();
                break;
            case 222:
                return $this->getTimeupdtd();
                break;
            case 223:
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = TableMap::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {

        if (isset($alreadyDumpedObjects['ConfigSalesOrder'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigSalesOrder'][$this->hashCode()] = true;
        $keys = ConfigSalesOrderTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getOetbconfkey(),
            $keys[1] => $this->getOetbconfglifac(),
            $keys[2] => $this->getOetbconfinifac(),
            $keys[3] => $this->getOetbconfrelivty(),
            $keys[4] => $this->getOetbconfuseordrnbr(),
            $keys[5] => $this->getOetbconfdefrqstdate(),
            $keys[6] => $this->getOetbconfusecancdate(),
            $keys[7] => $this->getOetbconfshowsp(),
            $keys[8] => $this->getOetbconfjrnlsort(),
            $keys[9] => $this->getOetbconfuseprepsoopt(),
            $keys[10] => $this->getOetbconfdispbillto(),
            $keys[11] => $this->getOetbconfslctflm(),
            $keys[12] => $this->getOetbcon3usestockpull(),
            $keys[13] => $this->getOetbconfqtytoship(),
            $keys[14] => $this->getOetbconfqtytoshipdef(),
            $keys[15] => $this->getOetbconfdfltordrqty(),
            $keys[16] => $this->getOetbconfallocqtytoship(),
            $keys[17] => $this->getOetbconfoverallocqts(),
            $keys[18] => $this->getOetbcon3completelotbin(),
            $keys[19] => $this->getOetbcon3rqtsopt(),
            $keys[20] => $this->getOetbcon2shipcomphold(),
            $keys[21] => $this->getOetbcon3usesaleforecast(),
            $keys[22] => $this->getOetbconfverfstopneg(),
            $keys[23] => $this->getOetbconfverfaudtrept(),
            $keys[24] => $this->getOetbconfagelevldisp(),
            $keys[25] => $this->getOetbconfagealltime(),
            $keys[26] => $this->getOetbconfageathold(),
            $keys[27] => $this->getOetbconfshowatlevl(),
            $keys[28] => $this->getOetbconfshowitem(),
            $keys[29] => $this->getOetbconfstoppnt(),
            $keys[30] => $this->getOetbconfpricwind(),
            $keys[31] => $this->getOetbconfshowcost(),
            $keys[32] => $this->getOetbconfcosttouse(),
            $keys[33] => $this->getOetbconfshowmarg(),
            $keys[34] => $this->getOetbconffxoe(),
            $keys[35] => $this->getOetbconffxinv(),
            $keys[36] => $this->getOetbconfdispvia(),
            $keys[37] => $this->getOetbconfdispcaseqty(),
            $keys[38] => $this->getOetbconffrtin(),
            $keys[39] => $this->getOetbconffrtinglacct(),
            $keys[40] => $this->getOetbconfmincharge(),
            $keys[41] => $this->getOetbconfminchrgglacct(),
            $keys[42] => $this->getOetbconfdropshipchrg(),
            $keys[43] => $this->getOetbconfdropshpglacct(),
            $keys[44] => $this->getOetbconfnontaxcustcode(),
            $keys[45] => $this->getOetbconfhstaxid(),
            $keys[46] => $this->getOetbconfhsfrtid(),
            $keys[47] => $this->getOetbconfhsmiscid(),
            $keys[48] => $this->getOetbcon2hscusdid(),
            $keys[49] => $this->getOetbcon3hsfrtinid(),
            $keys[50] => $this->getOetbcon3hsdropid(),
            $keys[51] => $this->getOetbcon3hsminordid(),
            $keys[52] => $this->getOetbconfheadgetdef(),
            $keys[53] => $this->getOetbconfitemgetdef(),
            $keys[54] => $this->getOetbconfautogetcust(),
            $keys[55] => $this->getOetbcon3autogetitem(),
            $keys[56] => $this->getOetbconfrqstheaddtl(),
            $keys[57] => $this->getOetbconfcancheaddtl(),
            $keys[58] => $this->getOetbconfuseinvcasship(),
            $keys[59] => $this->getOetbcon3usearrvdate(),
            $keys[60] => $this->getOetbconfseparatecred(),
            $keys[61] => $this->getOetbcon3applycredits(),
            $keys[62] => $this->getOetbconfwarnnotnew(),
            $keys[63] => $this->getOetbconfwarnbotozero(),
            $keys[64] => $this->getOetbcon2providerouting(),
            $keys[65] => $this->getOetbcon2srtrtbyrqstdte(),
            $keys[66] => $this->getOetbconfusesoreview(),
            $keys[67] => $this->getOetbconfpicknotedef(),
            $keys[68] => $this->getOetbconfpacknotedef(),
            $keys[69] => $this->getOetbconfpicksort(),
            $keys[70] => $this->getOetbconfpacksort(),
            $keys[71] => $this->getOetbconfprtpriconly(),
            $keys[72] => $this->getOetbconfprtneg(),
            $keys[73] => $this->getOetbcon2prtpackageinfo(),
            $keys[74] => $this->getOetbcon2innerpacklabel(),
            $keys[75] => $this->getOetbcon2outerpacklabel(),
            $keys[76] => $this->getOetbcon2shiptarelabel(),
            $keys[77] => $this->getOetbconfprtpick(),
            $keys[78] => $this->getOetbconfpicprioseq(),
            $keys[79] => $this->getOetbconfprtpack(),
            $keys[80] => $this->getOetbconfprtinv(),
            $keys[81] => $this->getOetbcon2prtcredmemo(),
            $keys[82] => $this->getOetbconfcrntdate(),
            $keys[83] => $this->getOetbconfmarkpicked(),
            $keys[84] => $this->getOetbconfshowunavail(),
            $keys[85] => $this->getOetbconfdecplaces(),
            $keys[86] => $this->getOetbconfwarndup(),
            $keys[87] => $this->getOetbconfdefpick(),
            $keys[88] => $this->getOetbconfdefpack(),
            $keys[89] => $this->getOetbconfdefinvc(),
            $keys[90] => $this->getOetbconfdefack(),
            $keys[91] => $this->getOetbconfacksortopt(),
            $keys[92] => $this->getOetbconfreleasenbr(),
            $keys[93] => $this->getOetbconfpodetlinenbr(),
            $keys[94] => $this->getOetbconfdetlinebinnbr(),
            $keys[95] => $this->getOetbconfsplitbywhse(),
            $keys[96] => $this->getOetbcon3allowmultwhse(),
            $keys[97] => $this->getOetbconfuseorigwhse(),
            $keys[98] => $this->getOetbconfuseesosingle(),
            $keys[99] => $this->getOetbconfcreatepo(),
            $keys[100] => $this->getOetbconfbestprice(),
            $keys[101] => $this->getOetbconfesobacktonew(),
            $keys[102] => $this->getOetbconfpickprintdrop(),
            $keys[103] => $this->getOetbconfwarnmultpo(),
            $keys[104] => $this->getOetbconfalertitemquote(),
            $keys[105] => $this->getOetbcon3askchgprcwqty(),
            $keys[106] => $this->getOetbcon3tenqtybrks(),
            $keys[107] => $this->getOetbconfdecordrpric(),
            $keys[108] => $this->getOetbcon2provlostsales(),
            $keys[109] => $this->getOetbcon2askreasoncode(),
            $keys[110] => $this->getOetbcon2defreasoncode(),
            $keys[111] => $this->getOetbcon2bordcntl(),
            $keys[112] => $this->getOetbcon2defreabocode(),
            $keys[113] => $this->getOetbcon2numdayssavls(),
            $keys[114] => $this->getOetbcon2callbacknotif(),
            $keys[115] => $this->getOetbcon2defdayswhenin(),
            $keys[116] => $this->getOetbcon2addsubsls(),
            $keys[117] => $this->getOetbcon2defreasubscode(),
            $keys[118] => $this->getOetbcon2ordtypnorm(),
            $keys[119] => $this->getOetbcon2ordtyprep(),
            $keys[120] => $this->getOetbcon2ordtypserv(),
            $keys[121] => $this->getOetbcon2defordtyp(),
            $keys[122] => $this->getOetbconfchgpric(),
            $keys[123] => $this->getOetbcon2spordpricezero(),
            $keys[124] => $this->getOetbconfinactpricezero(),
            $keys[125] => $this->getOetbcon2reseq(),
            $keys[126] => $this->getOetbcon2reseqby(),
            $keys[127] => $this->getOetbcon2minqtysales(),
            $keys[128] => $this->getOetbcon2chgorder(),
            $keys[129] => $this->getOetbcon2vercomp(),
            $keys[130] => $this->getOetbcon2prtinv(),
            $keys[131] => $this->getOetbcon2dynamicpicktick(),
            $keys[132] => $this->getOetbcon2dynamicinvoice(),
            $keys[133] => $this->getOetbcon2edidefinvoice(),
            $keys[134] => $this->getOetbcon2allowccpick(),
            $keys[135] => $this->getOetbcon2autoccwind(),
            $keys[136] => $this->getOetbcon2autoccupdate(),
            $keys[137] => $this->getOetbcon2allowapvdccchg(),
            $keys[138] => $this->getOetbcon3apvdbckordclear(),
            $keys[139] => $this->getOetbcon2polwhichcost(),
            $keys[140] => $this->getOetbcon2revhazard(),
            $keys[141] => $this->getOetbcon2showdisclist(),
            $keys[142] => $this->getOetbcon2chglist(),
            $keys[143] => $this->getOetbcon2maillist(),
            $keys[144] => $this->getOetbcon2nameformat(),
            $keys[145] => $this->getOetbcon2mailidtype(),
            $keys[146] => $this->getOetbcon2cashdrawerpswd(),
            $keys[147] => $this->getOetbcon2upsonline(),
            $keys[148] => $this->getOetbcon2picorver(),
            $keys[149] => $this->getOetbcon2combback(),
            $keys[150] => $this->getOetbcon2frtallowamt(),
            $keys[151] => $this->getOetbcon3shipmoreordered(),
            $keys[152] => $this->getOetbcon3warnshipmore(),
            $keys[153] => $this->getOetbcon3proformafromeso(),
            $keys[154] => $this->getOetbcon3pickpackcode(),
            $keys[155] => $this->getOetbcon2usedept(),
            $keys[156] => $this->getOetbcon2usedivision(),
            $keys[157] => $this->getOetbcon2defmfecode(),
            $keys[158] => $this->getOetbcon2showavgcost(),
            $keys[159] => $this->getOetbcon2fedex(),
            $keys[160] => $this->getOetbcon3deffrghtgrup(),
            $keys[161] => $this->getOetbcon3upsmysqldbname(),
            $keys[162] => $this->getOetbconfuseoptcode(),
            $keys[163] => $this->getOetbconfscn4opt(),
            $keys[164] => $this->getOetbcon2takenbyuse(),
            $keys[165] => $this->getOetbcon2takenbylogin(),
            $keys[166] => $this->getOetbcon2takenbyforce(),
            $keys[167] => $this->getOetbcon2pickedbyuse(),
            $keys[168] => $this->getOetbcon2pickedbyforce(),
            $keys[169] => $this->getOetbcon2pickedbyproc(),
            $keys[170] => $this->getOetbcon2packedbyuse(),
            $keys[171] => $this->getOetbcon2packedbyforce(),
            $keys[172] => $this->getOetbcon2verifiedbyuse(),
            $keys[173] => $this->getOetbcon2verifiedbylogin(),
            $keys[174] => $this->getOetbcon2verifiedbyforce(),
            $keys[175] => $this->getOetbconfoptlabl1(),
            $keys[176] => $this->getOetbcon2ucode1force(),
            $keys[177] => $this->getOetbconfoptlabl2(),
            $keys[178] => $this->getOetbcon2ucode2force(),
            $keys[179] => $this->getOetbconfoptlabl3(),
            $keys[180] => $this->getOetbcon2ucode3force(),
            $keys[181] => $this->getOetbconfoptlabl4(),
            $keys[182] => $this->getOetbcon2ucode4force(),
            $keys[183] => $this->getOetbconfverifyafterpack(),
            $keys[184] => $this->getOetbconfhistyrsback(),
            $keys[185] => $this->getOetbconfrqstcatlg(),
            $keys[186] => $this->getOetbcon2conpick(),
            $keys[187] => $this->getOetbcon2allowpick(),
            $keys[188] => $this->getOetbcon2combinesame(),
            $keys[189] => $this->getOetbcon3autovernitems(),
            $keys[190] => $this->getOetbcon2allowzeroqty(),
            $keys[191] => $this->getOetbcon2allowinvalidwhse(),
            $keys[192] => $this->getOetbcon2showediinfo(),
            $keys[193] => $this->getOetbcon2addonsales(),
            $keys[194] => $this->getOetbcon2forcedbkord(),
            $keys[195] => $this->getOetbcon2updtprcdisc(),
            $keys[196] => $this->getOetbcon2autopack(),
            $keys[197] => $this->getOetbcon2pickboprtzqts(),
            $keys[198] => $this->getOetbcon3pick00noship(),
            $keys[199] => $this->getOetbcon2standordlead(),
            $keys[200] => $this->getOetbcon2standordamnt(),
            $keys[201] => $this->getOetbcon2inactitemcntrl(),
            $keys[202] => $this->getOetbcon2useitemref(),
            $keys[203] => $this->getOetbcon3upsnaftarecords(),
            $keys[204] => $this->getOetbconfdfltshipwhse(),
            $keys[205] => $this->getOetbconfdfltorigwhse(),
            $keys[206] => $this->getOetbconfinvcwithpack(),
            $keys[207] => $this->getOetbconfcarrycntrqty(),
            $keys[208] => $this->getOetbcon3useordras(),
            $keys[209] => $this->getOetbconfuseordrsource(),
            $keys[210] => $this->getOetbcon3ccprocessor(),
            $keys[211] => $this->getOetbcon3creditcardcap(),
            $keys[212] => $this->getOetbcon3keyorcccap(),
            $keys[213] => $this->getOetbcon3ccxoverlay(),
            $keys[214] => $this->getOetbcon3cctimeout(),
            $keys[215] => $this->getOetbcon3signaturecapture(),
            $keys[216] => $this->getOetbcon3ccpreapproval(),
            $keys[217] => $this->getOetbcon3forceccnbrentry(),
            $keys[218] => $this->getOetbcon3intritemnotes(),
            $keys[219] => $this->getOetbcon3mtrcert(),
            $keys[220] => $this->getOetbcon3cofccert(),
            $keys[221] => $this->getDateupdtd(),
            $keys[222] => $this->getTimeupdtd(),
            $keys[223] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
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
     * @return $this|\ConfigSalesOrder
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ConfigSalesOrderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ConfigSalesOrder
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setOetbconfkey($value);
                break;
            case 1:
                $this->setOetbconfglifac($value);
                break;
            case 2:
                $this->setOetbconfinifac($value);
                break;
            case 3:
                $this->setOetbconfrelivty($value);
                break;
            case 4:
                $this->setOetbconfuseordrnbr($value);
                break;
            case 5:
                $this->setOetbconfdefrqstdate($value);
                break;
            case 6:
                $this->setOetbconfusecancdate($value);
                break;
            case 7:
                $this->setOetbconfshowsp($value);
                break;
            case 8:
                $this->setOetbconfjrnlsort($value);
                break;
            case 9:
                $this->setOetbconfuseprepsoopt($value);
                break;
            case 10:
                $this->setOetbconfdispbillto($value);
                break;
            case 11:
                $this->setOetbconfslctflm($value);
                break;
            case 12:
                $this->setOetbcon3usestockpull($value);
                break;
            case 13:
                $this->setOetbconfqtytoship($value);
                break;
            case 14:
                $this->setOetbconfqtytoshipdef($value);
                break;
            case 15:
                $this->setOetbconfdfltordrqty($value);
                break;
            case 16:
                $this->setOetbconfallocqtytoship($value);
                break;
            case 17:
                $this->setOetbconfoverallocqts($value);
                break;
            case 18:
                $this->setOetbcon3completelotbin($value);
                break;
            case 19:
                $this->setOetbcon3rqtsopt($value);
                break;
            case 20:
                $this->setOetbcon2shipcomphold($value);
                break;
            case 21:
                $this->setOetbcon3usesaleforecast($value);
                break;
            case 22:
                $this->setOetbconfverfstopneg($value);
                break;
            case 23:
                $this->setOetbconfverfaudtrept($value);
                break;
            case 24:
                $this->setOetbconfagelevldisp($value);
                break;
            case 25:
                $this->setOetbconfagealltime($value);
                break;
            case 26:
                $this->setOetbconfageathold($value);
                break;
            case 27:
                $this->setOetbconfshowatlevl($value);
                break;
            case 28:
                $this->setOetbconfshowitem($value);
                break;
            case 29:
                $this->setOetbconfstoppnt($value);
                break;
            case 30:
                $this->setOetbconfpricwind($value);
                break;
            case 31:
                $this->setOetbconfshowcost($value);
                break;
            case 32:
                $this->setOetbconfcosttouse($value);
                break;
            case 33:
                $this->setOetbconfshowmarg($value);
                break;
            case 34:
                $this->setOetbconffxoe($value);
                break;
            case 35:
                $this->setOetbconffxinv($value);
                break;
            case 36:
                $this->setOetbconfdispvia($value);
                break;
            case 37:
                $this->setOetbconfdispcaseqty($value);
                break;
            case 38:
                $this->setOetbconffrtin($value);
                break;
            case 39:
                $this->setOetbconffrtinglacct($value);
                break;
            case 40:
                $this->setOetbconfmincharge($value);
                break;
            case 41:
                $this->setOetbconfminchrgglacct($value);
                break;
            case 42:
                $this->setOetbconfdropshipchrg($value);
                break;
            case 43:
                $this->setOetbconfdropshpglacct($value);
                break;
            case 44:
                $this->setOetbconfnontaxcustcode($value);
                break;
            case 45:
                $this->setOetbconfhstaxid($value);
                break;
            case 46:
                $this->setOetbconfhsfrtid($value);
                break;
            case 47:
                $this->setOetbconfhsmiscid($value);
                break;
            case 48:
                $this->setOetbcon2hscusdid($value);
                break;
            case 49:
                $this->setOetbcon3hsfrtinid($value);
                break;
            case 50:
                $this->setOetbcon3hsdropid($value);
                break;
            case 51:
                $this->setOetbcon3hsminordid($value);
                break;
            case 52:
                $this->setOetbconfheadgetdef($value);
                break;
            case 53:
                $this->setOetbconfitemgetdef($value);
                break;
            case 54:
                $this->setOetbconfautogetcust($value);
                break;
            case 55:
                $this->setOetbcon3autogetitem($value);
                break;
            case 56:
                $this->setOetbconfrqstheaddtl($value);
                break;
            case 57:
                $this->setOetbconfcancheaddtl($value);
                break;
            case 58:
                $this->setOetbconfuseinvcasship($value);
                break;
            case 59:
                $this->setOetbcon3usearrvdate($value);
                break;
            case 60:
                $this->setOetbconfseparatecred($value);
                break;
            case 61:
                $this->setOetbcon3applycredits($value);
                break;
            case 62:
                $this->setOetbconfwarnnotnew($value);
                break;
            case 63:
                $this->setOetbconfwarnbotozero($value);
                break;
            case 64:
                $this->setOetbcon2providerouting($value);
                break;
            case 65:
                $this->setOetbcon2srtrtbyrqstdte($value);
                break;
            case 66:
                $this->setOetbconfusesoreview($value);
                break;
            case 67:
                $this->setOetbconfpicknotedef($value);
                break;
            case 68:
                $this->setOetbconfpacknotedef($value);
                break;
            case 69:
                $this->setOetbconfpicksort($value);
                break;
            case 70:
                $this->setOetbconfpacksort($value);
                break;
            case 71:
                $this->setOetbconfprtpriconly($value);
                break;
            case 72:
                $this->setOetbconfprtneg($value);
                break;
            case 73:
                $this->setOetbcon2prtpackageinfo($value);
                break;
            case 74:
                $this->setOetbcon2innerpacklabel($value);
                break;
            case 75:
                $this->setOetbcon2outerpacklabel($value);
                break;
            case 76:
                $this->setOetbcon2shiptarelabel($value);
                break;
            case 77:
                $this->setOetbconfprtpick($value);
                break;
            case 78:
                $this->setOetbconfpicprioseq($value);
                break;
            case 79:
                $this->setOetbconfprtpack($value);
                break;
            case 80:
                $this->setOetbconfprtinv($value);
                break;
            case 81:
                $this->setOetbcon2prtcredmemo($value);
                break;
            case 82:
                $this->setOetbconfcrntdate($value);
                break;
            case 83:
                $this->setOetbconfmarkpicked($value);
                break;
            case 84:
                $this->setOetbconfshowunavail($value);
                break;
            case 85:
                $this->setOetbconfdecplaces($value);
                break;
            case 86:
                $this->setOetbconfwarndup($value);
                break;
            case 87:
                $this->setOetbconfdefpick($value);
                break;
            case 88:
                $this->setOetbconfdefpack($value);
                break;
            case 89:
                $this->setOetbconfdefinvc($value);
                break;
            case 90:
                $this->setOetbconfdefack($value);
                break;
            case 91:
                $this->setOetbconfacksortopt($value);
                break;
            case 92:
                $this->setOetbconfreleasenbr($value);
                break;
            case 93:
                $this->setOetbconfpodetlinenbr($value);
                break;
            case 94:
                $this->setOetbconfdetlinebinnbr($value);
                break;
            case 95:
                $this->setOetbconfsplitbywhse($value);
                break;
            case 96:
                $this->setOetbcon3allowmultwhse($value);
                break;
            case 97:
                $this->setOetbconfuseorigwhse($value);
                break;
            case 98:
                $this->setOetbconfuseesosingle($value);
                break;
            case 99:
                $this->setOetbconfcreatepo($value);
                break;
            case 100:
                $this->setOetbconfbestprice($value);
                break;
            case 101:
                $this->setOetbconfesobacktonew($value);
                break;
            case 102:
                $this->setOetbconfpickprintdrop($value);
                break;
            case 103:
                $this->setOetbconfwarnmultpo($value);
                break;
            case 104:
                $this->setOetbconfalertitemquote($value);
                break;
            case 105:
                $this->setOetbcon3askchgprcwqty($value);
                break;
            case 106:
                $this->setOetbcon3tenqtybrks($value);
                break;
            case 107:
                $this->setOetbconfdecordrpric($value);
                break;
            case 108:
                $this->setOetbcon2provlostsales($value);
                break;
            case 109:
                $this->setOetbcon2askreasoncode($value);
                break;
            case 110:
                $this->setOetbcon2defreasoncode($value);
                break;
            case 111:
                $this->setOetbcon2bordcntl($value);
                break;
            case 112:
                $this->setOetbcon2defreabocode($value);
                break;
            case 113:
                $this->setOetbcon2numdayssavls($value);
                break;
            case 114:
                $this->setOetbcon2callbacknotif($value);
                break;
            case 115:
                $this->setOetbcon2defdayswhenin($value);
                break;
            case 116:
                $this->setOetbcon2addsubsls($value);
                break;
            case 117:
                $this->setOetbcon2defreasubscode($value);
                break;
            case 118:
                $this->setOetbcon2ordtypnorm($value);
                break;
            case 119:
                $this->setOetbcon2ordtyprep($value);
                break;
            case 120:
                $this->setOetbcon2ordtypserv($value);
                break;
            case 121:
                $this->setOetbcon2defordtyp($value);
                break;
            case 122:
                $this->setOetbconfchgpric($value);
                break;
            case 123:
                $this->setOetbcon2spordpricezero($value);
                break;
            case 124:
                $this->setOetbconfinactpricezero($value);
                break;
            case 125:
                $this->setOetbcon2reseq($value);
                break;
            case 126:
                $this->setOetbcon2reseqby($value);
                break;
            case 127:
                $this->setOetbcon2minqtysales($value);
                break;
            case 128:
                $this->setOetbcon2chgorder($value);
                break;
            case 129:
                $this->setOetbcon2vercomp($value);
                break;
            case 130:
                $this->setOetbcon2prtinv($value);
                break;
            case 131:
                $this->setOetbcon2dynamicpicktick($value);
                break;
            case 132:
                $this->setOetbcon2dynamicinvoice($value);
                break;
            case 133:
                $this->setOetbcon2edidefinvoice($value);
                break;
            case 134:
                $this->setOetbcon2allowccpick($value);
                break;
            case 135:
                $this->setOetbcon2autoccwind($value);
                break;
            case 136:
                $this->setOetbcon2autoccupdate($value);
                break;
            case 137:
                $this->setOetbcon2allowapvdccchg($value);
                break;
            case 138:
                $this->setOetbcon3apvdbckordclear($value);
                break;
            case 139:
                $this->setOetbcon2polwhichcost($value);
                break;
            case 140:
                $this->setOetbcon2revhazard($value);
                break;
            case 141:
                $this->setOetbcon2showdisclist($value);
                break;
            case 142:
                $this->setOetbcon2chglist($value);
                break;
            case 143:
                $this->setOetbcon2maillist($value);
                break;
            case 144:
                $this->setOetbcon2nameformat($value);
                break;
            case 145:
                $this->setOetbcon2mailidtype($value);
                break;
            case 146:
                $this->setOetbcon2cashdrawerpswd($value);
                break;
            case 147:
                $this->setOetbcon2upsonline($value);
                break;
            case 148:
                $this->setOetbcon2picorver($value);
                break;
            case 149:
                $this->setOetbcon2combback($value);
                break;
            case 150:
                $this->setOetbcon2frtallowamt($value);
                break;
            case 151:
                $this->setOetbcon3shipmoreordered($value);
                break;
            case 152:
                $this->setOetbcon3warnshipmore($value);
                break;
            case 153:
                $this->setOetbcon3proformafromeso($value);
                break;
            case 154:
                $this->setOetbcon3pickpackcode($value);
                break;
            case 155:
                $this->setOetbcon2usedept($value);
                break;
            case 156:
                $this->setOetbcon2usedivision($value);
                break;
            case 157:
                $this->setOetbcon2defmfecode($value);
                break;
            case 158:
                $this->setOetbcon2showavgcost($value);
                break;
            case 159:
                $this->setOetbcon2fedex($value);
                break;
            case 160:
                $this->setOetbcon3deffrghtgrup($value);
                break;
            case 161:
                $this->setOetbcon3upsmysqldbname($value);
                break;
            case 162:
                $this->setOetbconfuseoptcode($value);
                break;
            case 163:
                $this->setOetbconfscn4opt($value);
                break;
            case 164:
                $this->setOetbcon2takenbyuse($value);
                break;
            case 165:
                $this->setOetbcon2takenbylogin($value);
                break;
            case 166:
                $this->setOetbcon2takenbyforce($value);
                break;
            case 167:
                $this->setOetbcon2pickedbyuse($value);
                break;
            case 168:
                $this->setOetbcon2pickedbyforce($value);
                break;
            case 169:
                $this->setOetbcon2pickedbyproc($value);
                break;
            case 170:
                $this->setOetbcon2packedbyuse($value);
                break;
            case 171:
                $this->setOetbcon2packedbyforce($value);
                break;
            case 172:
                $this->setOetbcon2verifiedbyuse($value);
                break;
            case 173:
                $this->setOetbcon2verifiedbylogin($value);
                break;
            case 174:
                $this->setOetbcon2verifiedbyforce($value);
                break;
            case 175:
                $this->setOetbconfoptlabl1($value);
                break;
            case 176:
                $this->setOetbcon2ucode1force($value);
                break;
            case 177:
                $this->setOetbconfoptlabl2($value);
                break;
            case 178:
                $this->setOetbcon2ucode2force($value);
                break;
            case 179:
                $this->setOetbconfoptlabl3($value);
                break;
            case 180:
                $this->setOetbcon2ucode3force($value);
                break;
            case 181:
                $this->setOetbconfoptlabl4($value);
                break;
            case 182:
                $this->setOetbcon2ucode4force($value);
                break;
            case 183:
                $this->setOetbconfverifyafterpack($value);
                break;
            case 184:
                $this->setOetbconfhistyrsback($value);
                break;
            case 185:
                $this->setOetbconfrqstcatlg($value);
                break;
            case 186:
                $this->setOetbcon2conpick($value);
                break;
            case 187:
                $this->setOetbcon2allowpick($value);
                break;
            case 188:
                $this->setOetbcon2combinesame($value);
                break;
            case 189:
                $this->setOetbcon3autovernitems($value);
                break;
            case 190:
                $this->setOetbcon2allowzeroqty($value);
                break;
            case 191:
                $this->setOetbcon2allowinvalidwhse($value);
                break;
            case 192:
                $this->setOetbcon2showediinfo($value);
                break;
            case 193:
                $this->setOetbcon2addonsales($value);
                break;
            case 194:
                $this->setOetbcon2forcedbkord($value);
                break;
            case 195:
                $this->setOetbcon2updtprcdisc($value);
                break;
            case 196:
                $this->setOetbcon2autopack($value);
                break;
            case 197:
                $this->setOetbcon2pickboprtzqts($value);
                break;
            case 198:
                $this->setOetbcon3pick00noship($value);
                break;
            case 199:
                $this->setOetbcon2standordlead($value);
                break;
            case 200:
                $this->setOetbcon2standordamnt($value);
                break;
            case 201:
                $this->setOetbcon2inactitemcntrl($value);
                break;
            case 202:
                $this->setOetbcon2useitemref($value);
                break;
            case 203:
                $this->setOetbcon3upsnaftarecords($value);
                break;
            case 204:
                $this->setOetbconfdfltshipwhse($value);
                break;
            case 205:
                $this->setOetbconfdfltorigwhse($value);
                break;
            case 206:
                $this->setOetbconfinvcwithpack($value);
                break;
            case 207:
                $this->setOetbconfcarrycntrqty($value);
                break;
            case 208:
                $this->setOetbcon3useordras($value);
                break;
            case 209:
                $this->setOetbconfuseordrsource($value);
                break;
            case 210:
                $this->setOetbcon3ccprocessor($value);
                break;
            case 211:
                $this->setOetbcon3creditcardcap($value);
                break;
            case 212:
                $this->setOetbcon3keyorcccap($value);
                break;
            case 213:
                $this->setOetbcon3ccxoverlay($value);
                break;
            case 214:
                $this->setOetbcon3cctimeout($value);
                break;
            case 215:
                $this->setOetbcon3signaturecapture($value);
                break;
            case 216:
                $this->setOetbcon3ccpreapproval($value);
                break;
            case 217:
                $this->setOetbcon3forceccnbrentry($value);
                break;
            case 218:
                $this->setOetbcon3intritemnotes($value);
                break;
            case 219:
                $this->setOetbcon3mtrcert($value);
                break;
            case 220:
                $this->setOetbcon3cofccert($value);
                break;
            case 221:
                $this->setDateupdtd($value);
                break;
            case 222:
                $this->setTimeupdtd($value);
                break;
            case 223:
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
        $keys = ConfigSalesOrderTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setOetbconfkey($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setOetbconfglifac($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setOetbconfinifac($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setOetbconfrelivty($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setOetbconfuseordrnbr($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setOetbconfdefrqstdate($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setOetbconfusecancdate($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setOetbconfshowsp($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setOetbconfjrnlsort($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setOetbconfuseprepsoopt($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setOetbconfdispbillto($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setOetbconfslctflm($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setOetbcon3usestockpull($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setOetbconfqtytoship($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setOetbconfqtytoshipdef($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setOetbconfdfltordrqty($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setOetbconfallocqtytoship($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setOetbconfoverallocqts($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setOetbcon3completelotbin($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setOetbcon3rqtsopt($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setOetbcon2shipcomphold($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setOetbcon3usesaleforecast($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setOetbconfverfstopneg($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setOetbconfverfaudtrept($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setOetbconfagelevldisp($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setOetbconfagealltime($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setOetbconfageathold($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setOetbconfshowatlevl($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setOetbconfshowitem($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setOetbconfstoppnt($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setOetbconfpricwind($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setOetbconfshowcost($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setOetbconfcosttouse($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setOetbconfshowmarg($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setOetbconffxoe($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setOetbconffxinv($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setOetbconfdispvia($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setOetbconfdispcaseqty($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setOetbconffrtin($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setOetbconffrtinglacct($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setOetbconfmincharge($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setOetbconfminchrgglacct($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setOetbconfdropshipchrg($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setOetbconfdropshpglacct($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setOetbconfnontaxcustcode($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setOetbconfhstaxid($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setOetbconfhsfrtid($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setOetbconfhsmiscid($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setOetbcon2hscusdid($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setOetbcon3hsfrtinid($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setOetbcon3hsdropid($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setOetbcon3hsminordid($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setOetbconfheadgetdef($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setOetbconfitemgetdef($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setOetbconfautogetcust($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setOetbcon3autogetitem($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setOetbconfrqstheaddtl($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setOetbconfcancheaddtl($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setOetbconfuseinvcasship($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setOetbcon3usearrvdate($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setOetbconfseparatecred($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setOetbcon3applycredits($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setOetbconfwarnnotnew($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setOetbconfwarnbotozero($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setOetbcon2providerouting($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setOetbcon2srtrtbyrqstdte($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setOetbconfusesoreview($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setOetbconfpicknotedef($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setOetbconfpacknotedef($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setOetbconfpicksort($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setOetbconfpacksort($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setOetbconfprtpriconly($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setOetbconfprtneg($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setOetbcon2prtpackageinfo($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setOetbcon2innerpacklabel($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setOetbcon2outerpacklabel($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setOetbcon2shiptarelabel($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setOetbconfprtpick($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setOetbconfpicprioseq($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setOetbconfprtpack($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setOetbconfprtinv($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setOetbcon2prtcredmemo($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setOetbconfcrntdate($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setOetbconfmarkpicked($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setOetbconfshowunavail($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setOetbconfdecplaces($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setOetbconfwarndup($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setOetbconfdefpick($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setOetbconfdefpack($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setOetbconfdefinvc($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setOetbconfdefack($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setOetbconfacksortopt($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setOetbconfreleasenbr($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setOetbconfpodetlinenbr($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setOetbconfdetlinebinnbr($arr[$keys[94]]);
        }
        if (array_key_exists($keys[95], $arr)) {
            $this->setOetbconfsplitbywhse($arr[$keys[95]]);
        }
        if (array_key_exists($keys[96], $arr)) {
            $this->setOetbcon3allowmultwhse($arr[$keys[96]]);
        }
        if (array_key_exists($keys[97], $arr)) {
            $this->setOetbconfuseorigwhse($arr[$keys[97]]);
        }
        if (array_key_exists($keys[98], $arr)) {
            $this->setOetbconfuseesosingle($arr[$keys[98]]);
        }
        if (array_key_exists($keys[99], $arr)) {
            $this->setOetbconfcreatepo($arr[$keys[99]]);
        }
        if (array_key_exists($keys[100], $arr)) {
            $this->setOetbconfbestprice($arr[$keys[100]]);
        }
        if (array_key_exists($keys[101], $arr)) {
            $this->setOetbconfesobacktonew($arr[$keys[101]]);
        }
        if (array_key_exists($keys[102], $arr)) {
            $this->setOetbconfpickprintdrop($arr[$keys[102]]);
        }
        if (array_key_exists($keys[103], $arr)) {
            $this->setOetbconfwarnmultpo($arr[$keys[103]]);
        }
        if (array_key_exists($keys[104], $arr)) {
            $this->setOetbconfalertitemquote($arr[$keys[104]]);
        }
        if (array_key_exists($keys[105], $arr)) {
            $this->setOetbcon3askchgprcwqty($arr[$keys[105]]);
        }
        if (array_key_exists($keys[106], $arr)) {
            $this->setOetbcon3tenqtybrks($arr[$keys[106]]);
        }
        if (array_key_exists($keys[107], $arr)) {
            $this->setOetbconfdecordrpric($arr[$keys[107]]);
        }
        if (array_key_exists($keys[108], $arr)) {
            $this->setOetbcon2provlostsales($arr[$keys[108]]);
        }
        if (array_key_exists($keys[109], $arr)) {
            $this->setOetbcon2askreasoncode($arr[$keys[109]]);
        }
        if (array_key_exists($keys[110], $arr)) {
            $this->setOetbcon2defreasoncode($arr[$keys[110]]);
        }
        if (array_key_exists($keys[111], $arr)) {
            $this->setOetbcon2bordcntl($arr[$keys[111]]);
        }
        if (array_key_exists($keys[112], $arr)) {
            $this->setOetbcon2defreabocode($arr[$keys[112]]);
        }
        if (array_key_exists($keys[113], $arr)) {
            $this->setOetbcon2numdayssavls($arr[$keys[113]]);
        }
        if (array_key_exists($keys[114], $arr)) {
            $this->setOetbcon2callbacknotif($arr[$keys[114]]);
        }
        if (array_key_exists($keys[115], $arr)) {
            $this->setOetbcon2defdayswhenin($arr[$keys[115]]);
        }
        if (array_key_exists($keys[116], $arr)) {
            $this->setOetbcon2addsubsls($arr[$keys[116]]);
        }
        if (array_key_exists($keys[117], $arr)) {
            $this->setOetbcon2defreasubscode($arr[$keys[117]]);
        }
        if (array_key_exists($keys[118], $arr)) {
            $this->setOetbcon2ordtypnorm($arr[$keys[118]]);
        }
        if (array_key_exists($keys[119], $arr)) {
            $this->setOetbcon2ordtyprep($arr[$keys[119]]);
        }
        if (array_key_exists($keys[120], $arr)) {
            $this->setOetbcon2ordtypserv($arr[$keys[120]]);
        }
        if (array_key_exists($keys[121], $arr)) {
            $this->setOetbcon2defordtyp($arr[$keys[121]]);
        }
        if (array_key_exists($keys[122], $arr)) {
            $this->setOetbconfchgpric($arr[$keys[122]]);
        }
        if (array_key_exists($keys[123], $arr)) {
            $this->setOetbcon2spordpricezero($arr[$keys[123]]);
        }
        if (array_key_exists($keys[124], $arr)) {
            $this->setOetbconfinactpricezero($arr[$keys[124]]);
        }
        if (array_key_exists($keys[125], $arr)) {
            $this->setOetbcon2reseq($arr[$keys[125]]);
        }
        if (array_key_exists($keys[126], $arr)) {
            $this->setOetbcon2reseqby($arr[$keys[126]]);
        }
        if (array_key_exists($keys[127], $arr)) {
            $this->setOetbcon2minqtysales($arr[$keys[127]]);
        }
        if (array_key_exists($keys[128], $arr)) {
            $this->setOetbcon2chgorder($arr[$keys[128]]);
        }
        if (array_key_exists($keys[129], $arr)) {
            $this->setOetbcon2vercomp($arr[$keys[129]]);
        }
        if (array_key_exists($keys[130], $arr)) {
            $this->setOetbcon2prtinv($arr[$keys[130]]);
        }
        if (array_key_exists($keys[131], $arr)) {
            $this->setOetbcon2dynamicpicktick($arr[$keys[131]]);
        }
        if (array_key_exists($keys[132], $arr)) {
            $this->setOetbcon2dynamicinvoice($arr[$keys[132]]);
        }
        if (array_key_exists($keys[133], $arr)) {
            $this->setOetbcon2edidefinvoice($arr[$keys[133]]);
        }
        if (array_key_exists($keys[134], $arr)) {
            $this->setOetbcon2allowccpick($arr[$keys[134]]);
        }
        if (array_key_exists($keys[135], $arr)) {
            $this->setOetbcon2autoccwind($arr[$keys[135]]);
        }
        if (array_key_exists($keys[136], $arr)) {
            $this->setOetbcon2autoccupdate($arr[$keys[136]]);
        }
        if (array_key_exists($keys[137], $arr)) {
            $this->setOetbcon2allowapvdccchg($arr[$keys[137]]);
        }
        if (array_key_exists($keys[138], $arr)) {
            $this->setOetbcon3apvdbckordclear($arr[$keys[138]]);
        }
        if (array_key_exists($keys[139], $arr)) {
            $this->setOetbcon2polwhichcost($arr[$keys[139]]);
        }
        if (array_key_exists($keys[140], $arr)) {
            $this->setOetbcon2revhazard($arr[$keys[140]]);
        }
        if (array_key_exists($keys[141], $arr)) {
            $this->setOetbcon2showdisclist($arr[$keys[141]]);
        }
        if (array_key_exists($keys[142], $arr)) {
            $this->setOetbcon2chglist($arr[$keys[142]]);
        }
        if (array_key_exists($keys[143], $arr)) {
            $this->setOetbcon2maillist($arr[$keys[143]]);
        }
        if (array_key_exists($keys[144], $arr)) {
            $this->setOetbcon2nameformat($arr[$keys[144]]);
        }
        if (array_key_exists($keys[145], $arr)) {
            $this->setOetbcon2mailidtype($arr[$keys[145]]);
        }
        if (array_key_exists($keys[146], $arr)) {
            $this->setOetbcon2cashdrawerpswd($arr[$keys[146]]);
        }
        if (array_key_exists($keys[147], $arr)) {
            $this->setOetbcon2upsonline($arr[$keys[147]]);
        }
        if (array_key_exists($keys[148], $arr)) {
            $this->setOetbcon2picorver($arr[$keys[148]]);
        }
        if (array_key_exists($keys[149], $arr)) {
            $this->setOetbcon2combback($arr[$keys[149]]);
        }
        if (array_key_exists($keys[150], $arr)) {
            $this->setOetbcon2frtallowamt($arr[$keys[150]]);
        }
        if (array_key_exists($keys[151], $arr)) {
            $this->setOetbcon3shipmoreordered($arr[$keys[151]]);
        }
        if (array_key_exists($keys[152], $arr)) {
            $this->setOetbcon3warnshipmore($arr[$keys[152]]);
        }
        if (array_key_exists($keys[153], $arr)) {
            $this->setOetbcon3proformafromeso($arr[$keys[153]]);
        }
        if (array_key_exists($keys[154], $arr)) {
            $this->setOetbcon3pickpackcode($arr[$keys[154]]);
        }
        if (array_key_exists($keys[155], $arr)) {
            $this->setOetbcon2usedept($arr[$keys[155]]);
        }
        if (array_key_exists($keys[156], $arr)) {
            $this->setOetbcon2usedivision($arr[$keys[156]]);
        }
        if (array_key_exists($keys[157], $arr)) {
            $this->setOetbcon2defmfecode($arr[$keys[157]]);
        }
        if (array_key_exists($keys[158], $arr)) {
            $this->setOetbcon2showavgcost($arr[$keys[158]]);
        }
        if (array_key_exists($keys[159], $arr)) {
            $this->setOetbcon2fedex($arr[$keys[159]]);
        }
        if (array_key_exists($keys[160], $arr)) {
            $this->setOetbcon3deffrghtgrup($arr[$keys[160]]);
        }
        if (array_key_exists($keys[161], $arr)) {
            $this->setOetbcon3upsmysqldbname($arr[$keys[161]]);
        }
        if (array_key_exists($keys[162], $arr)) {
            $this->setOetbconfuseoptcode($arr[$keys[162]]);
        }
        if (array_key_exists($keys[163], $arr)) {
            $this->setOetbconfscn4opt($arr[$keys[163]]);
        }
        if (array_key_exists($keys[164], $arr)) {
            $this->setOetbcon2takenbyuse($arr[$keys[164]]);
        }
        if (array_key_exists($keys[165], $arr)) {
            $this->setOetbcon2takenbylogin($arr[$keys[165]]);
        }
        if (array_key_exists($keys[166], $arr)) {
            $this->setOetbcon2takenbyforce($arr[$keys[166]]);
        }
        if (array_key_exists($keys[167], $arr)) {
            $this->setOetbcon2pickedbyuse($arr[$keys[167]]);
        }
        if (array_key_exists($keys[168], $arr)) {
            $this->setOetbcon2pickedbyforce($arr[$keys[168]]);
        }
        if (array_key_exists($keys[169], $arr)) {
            $this->setOetbcon2pickedbyproc($arr[$keys[169]]);
        }
        if (array_key_exists($keys[170], $arr)) {
            $this->setOetbcon2packedbyuse($arr[$keys[170]]);
        }
        if (array_key_exists($keys[171], $arr)) {
            $this->setOetbcon2packedbyforce($arr[$keys[171]]);
        }
        if (array_key_exists($keys[172], $arr)) {
            $this->setOetbcon2verifiedbyuse($arr[$keys[172]]);
        }
        if (array_key_exists($keys[173], $arr)) {
            $this->setOetbcon2verifiedbylogin($arr[$keys[173]]);
        }
        if (array_key_exists($keys[174], $arr)) {
            $this->setOetbcon2verifiedbyforce($arr[$keys[174]]);
        }
        if (array_key_exists($keys[175], $arr)) {
            $this->setOetbconfoptlabl1($arr[$keys[175]]);
        }
        if (array_key_exists($keys[176], $arr)) {
            $this->setOetbcon2ucode1force($arr[$keys[176]]);
        }
        if (array_key_exists($keys[177], $arr)) {
            $this->setOetbconfoptlabl2($arr[$keys[177]]);
        }
        if (array_key_exists($keys[178], $arr)) {
            $this->setOetbcon2ucode2force($arr[$keys[178]]);
        }
        if (array_key_exists($keys[179], $arr)) {
            $this->setOetbconfoptlabl3($arr[$keys[179]]);
        }
        if (array_key_exists($keys[180], $arr)) {
            $this->setOetbcon2ucode3force($arr[$keys[180]]);
        }
        if (array_key_exists($keys[181], $arr)) {
            $this->setOetbconfoptlabl4($arr[$keys[181]]);
        }
        if (array_key_exists($keys[182], $arr)) {
            $this->setOetbcon2ucode4force($arr[$keys[182]]);
        }
        if (array_key_exists($keys[183], $arr)) {
            $this->setOetbconfverifyafterpack($arr[$keys[183]]);
        }
        if (array_key_exists($keys[184], $arr)) {
            $this->setOetbconfhistyrsback($arr[$keys[184]]);
        }
        if (array_key_exists($keys[185], $arr)) {
            $this->setOetbconfrqstcatlg($arr[$keys[185]]);
        }
        if (array_key_exists($keys[186], $arr)) {
            $this->setOetbcon2conpick($arr[$keys[186]]);
        }
        if (array_key_exists($keys[187], $arr)) {
            $this->setOetbcon2allowpick($arr[$keys[187]]);
        }
        if (array_key_exists($keys[188], $arr)) {
            $this->setOetbcon2combinesame($arr[$keys[188]]);
        }
        if (array_key_exists($keys[189], $arr)) {
            $this->setOetbcon3autovernitems($arr[$keys[189]]);
        }
        if (array_key_exists($keys[190], $arr)) {
            $this->setOetbcon2allowzeroqty($arr[$keys[190]]);
        }
        if (array_key_exists($keys[191], $arr)) {
            $this->setOetbcon2allowinvalidwhse($arr[$keys[191]]);
        }
        if (array_key_exists($keys[192], $arr)) {
            $this->setOetbcon2showediinfo($arr[$keys[192]]);
        }
        if (array_key_exists($keys[193], $arr)) {
            $this->setOetbcon2addonsales($arr[$keys[193]]);
        }
        if (array_key_exists($keys[194], $arr)) {
            $this->setOetbcon2forcedbkord($arr[$keys[194]]);
        }
        if (array_key_exists($keys[195], $arr)) {
            $this->setOetbcon2updtprcdisc($arr[$keys[195]]);
        }
        if (array_key_exists($keys[196], $arr)) {
            $this->setOetbcon2autopack($arr[$keys[196]]);
        }
        if (array_key_exists($keys[197], $arr)) {
            $this->setOetbcon2pickboprtzqts($arr[$keys[197]]);
        }
        if (array_key_exists($keys[198], $arr)) {
            $this->setOetbcon3pick00noship($arr[$keys[198]]);
        }
        if (array_key_exists($keys[199], $arr)) {
            $this->setOetbcon2standordlead($arr[$keys[199]]);
        }
        if (array_key_exists($keys[200], $arr)) {
            $this->setOetbcon2standordamnt($arr[$keys[200]]);
        }
        if (array_key_exists($keys[201], $arr)) {
            $this->setOetbcon2inactitemcntrl($arr[$keys[201]]);
        }
        if (array_key_exists($keys[202], $arr)) {
            $this->setOetbcon2useitemref($arr[$keys[202]]);
        }
        if (array_key_exists($keys[203], $arr)) {
            $this->setOetbcon3upsnaftarecords($arr[$keys[203]]);
        }
        if (array_key_exists($keys[204], $arr)) {
            $this->setOetbconfdfltshipwhse($arr[$keys[204]]);
        }
        if (array_key_exists($keys[205], $arr)) {
            $this->setOetbconfdfltorigwhse($arr[$keys[205]]);
        }
        if (array_key_exists($keys[206], $arr)) {
            $this->setOetbconfinvcwithpack($arr[$keys[206]]);
        }
        if (array_key_exists($keys[207], $arr)) {
            $this->setOetbconfcarrycntrqty($arr[$keys[207]]);
        }
        if (array_key_exists($keys[208], $arr)) {
            $this->setOetbcon3useordras($arr[$keys[208]]);
        }
        if (array_key_exists($keys[209], $arr)) {
            $this->setOetbconfuseordrsource($arr[$keys[209]]);
        }
        if (array_key_exists($keys[210], $arr)) {
            $this->setOetbcon3ccprocessor($arr[$keys[210]]);
        }
        if (array_key_exists($keys[211], $arr)) {
            $this->setOetbcon3creditcardcap($arr[$keys[211]]);
        }
        if (array_key_exists($keys[212], $arr)) {
            $this->setOetbcon3keyorcccap($arr[$keys[212]]);
        }
        if (array_key_exists($keys[213], $arr)) {
            $this->setOetbcon3ccxoverlay($arr[$keys[213]]);
        }
        if (array_key_exists($keys[214], $arr)) {
            $this->setOetbcon3cctimeout($arr[$keys[214]]);
        }
        if (array_key_exists($keys[215], $arr)) {
            $this->setOetbcon3signaturecapture($arr[$keys[215]]);
        }
        if (array_key_exists($keys[216], $arr)) {
            $this->setOetbcon3ccpreapproval($arr[$keys[216]]);
        }
        if (array_key_exists($keys[217], $arr)) {
            $this->setOetbcon3forceccnbrentry($arr[$keys[217]]);
        }
        if (array_key_exists($keys[218], $arr)) {
            $this->setOetbcon3intritemnotes($arr[$keys[218]]);
        }
        if (array_key_exists($keys[219], $arr)) {
            $this->setOetbcon3mtrcert($arr[$keys[219]]);
        }
        if (array_key_exists($keys[220], $arr)) {
            $this->setOetbcon3cofccert($arr[$keys[220]]);
        }
        if (array_key_exists($keys[221], $arr)) {
            $this->setDateupdtd($arr[$keys[221]]);
        }
        if (array_key_exists($keys[222], $arr)) {
            $this->setTimeupdtd($arr[$keys[222]]);
        }
        if (array_key_exists($keys[223], $arr)) {
            $this->setDummy($arr[$keys[223]]);
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
     * @return $this|\ConfigSalesOrder The current object, for fluid interface
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
        $criteria = new Criteria(ConfigSalesOrderTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFKEY)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFKEY, $this->oetbconfkey);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFGLIFAC)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFGLIFAC, $this->oetbconfglifac);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFINIFAC)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFINIFAC, $this->oetbconfinifac);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFRELIVTY)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFRELIVTY, $this->oetbconfrelivty);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRNBR)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRNBR, $this->oetbconfuseordrnbr);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDEFRQSTDATE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDEFRQSTDATE, $this->oetbconfdefrqstdate);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSECANCDATE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFUSECANCDATE, $this->oetbconfusecancdate);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSHOWSP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFSHOWSP, $this->oetbconfshowsp);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFJRNLSORT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFJRNLSORT, $this->oetbconfjrnlsort);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEPREPSOOPT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFUSEPREPSOOPT, $this->oetbconfuseprepsoopt);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDISPBILLTO)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDISPBILLTO, $this->oetbconfdispbillto);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSLCTFLM)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFSLCTFLM, $this->oetbconfslctflm);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3USESTOCKPULL)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3USESTOCKPULL, $this->oetbcon3usestockpull);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIP, $this->oetbconfqtytoship);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIPDEF)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIPDEF, $this->oetbconfqtytoshipdef);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDFLTORDRQTY)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDFLTORDRQTY, $this->oetbconfdfltordrqty);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFALLOCQTYTOSHIP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFALLOCQTYTOSHIP, $this->oetbconfallocqtytoship);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFOVERALLOCQTS)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFOVERALLOCQTS, $this->oetbconfoverallocqts);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3COMPLETELOTBIN)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3COMPLETELOTBIN, $this->oetbcon3completelotbin);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3RQTSOPT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3RQTSOPT, $this->oetbcon3rqtsopt);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SHIPCOMPHOLD)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2SHIPCOMPHOLD, $this->oetbcon2shipcomphold);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3USESALEFORECAST)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3USESALEFORECAST, $this->oetbcon3usesaleforecast);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFVERFSTOPNEG)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFVERFSTOPNEG, $this->oetbconfverfstopneg);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFVERFAUDTREPT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFVERFAUDTREPT, $this->oetbconfverfaudtrept);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFAGELEVLDISP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFAGELEVLDISP, $this->oetbconfagelevldisp);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFAGEALLTIME)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFAGEALLTIME, $this->oetbconfagealltime);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFAGEATHOLD)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFAGEATHOLD, $this->oetbconfageathold);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSHOWATLEVL)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFSHOWATLEVL, $this->oetbconfshowatlevl);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSHOWITEM)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFSHOWITEM, $this->oetbconfshowitem);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSTOPPNT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFSTOPPNT, $this->oetbconfstoppnt);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPRICWIND)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFPRICWIND, $this->oetbconfpricwind);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSHOWCOST)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFSHOWCOST, $this->oetbconfshowcost);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFCOSTTOUSE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFCOSTTOUSE, $this->oetbconfcosttouse);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSHOWMARG)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFSHOWMARG, $this->oetbconfshowmarg);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFFXOE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFFXOE, $this->oetbconffxoe);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFFXINV)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFFXINV, $this->oetbconffxinv);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDISPVIA)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDISPVIA, $this->oetbconfdispvia);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDISPCASEQTY)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDISPCASEQTY, $this->oetbconfdispcaseqty);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFFRTIN)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFFRTIN, $this->oetbconffrtin);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFFRTINGLACCT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFFRTINGLACCT, $this->oetbconffrtinglacct);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFMINCHARGE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFMINCHARGE, $this->oetbconfmincharge);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFMINCHRGGLACCT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFMINCHRGGLACCT, $this->oetbconfminchrgglacct);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHIPCHRG)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHIPCHRG, $this->oetbconfdropshipchrg);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHPGLACCT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHPGLACCT, $this->oetbconfdropshpglacct);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFNONTAXCUSTCODE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFNONTAXCUSTCODE, $this->oetbconfnontaxcustcode);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFHSTAXID)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFHSTAXID, $this->oetbconfhstaxid);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFHSFRTID)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFHSFRTID, $this->oetbconfhsfrtid);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFHSMISCID)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFHSMISCID, $this->oetbconfhsmiscid);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2HSCUSDID)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2HSCUSDID, $this->oetbcon2hscusdid);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3HSFRTINID)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3HSFRTINID, $this->oetbcon3hsfrtinid);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3HSDROPID)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3HSDROPID, $this->oetbcon3hsdropid);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3HSMINORDID)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3HSMINORDID, $this->oetbcon3hsminordid);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFHEADGETDEF)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFHEADGETDEF, $this->oetbconfheadgetdef);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFITEMGETDEF)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFITEMGETDEF, $this->oetbconfitemgetdef);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFAUTOGETCUST)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFAUTOGETCUST, $this->oetbconfautogetcust);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3AUTOGETITEM)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3AUTOGETITEM, $this->oetbcon3autogetitem);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFRQSTHEADDTL)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFRQSTHEADDTL, $this->oetbconfrqstheaddtl);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFCANCHEADDTL)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFCANCHEADDTL, $this->oetbconfcancheaddtl);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEINVCASSHIP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFUSEINVCASSHIP, $this->oetbconfuseinvcasship);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3USEARRVDATE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3USEARRVDATE, $this->oetbcon3usearrvdate);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSEPARATECRED)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFSEPARATECRED, $this->oetbconfseparatecred);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3APPLYCREDITS)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3APPLYCREDITS, $this->oetbcon3applycredits);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFWARNNOTNEW)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFWARNNOTNEW, $this->oetbconfwarnnotnew);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFWARNBOTOZERO)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFWARNBOTOZERO, $this->oetbconfwarnbotozero);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PROVIDEROUTING)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2PROVIDEROUTING, $this->oetbcon2providerouting);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SRTRTBYRQSTDTE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2SRTRTBYRQSTDTE, $this->oetbcon2srtrtbyrqstdte);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSESOREVIEW)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFUSESOREVIEW, $this->oetbconfusesoreview);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPICKNOTEDEF)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFPICKNOTEDEF, $this->oetbconfpicknotedef);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPACKNOTEDEF)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFPACKNOTEDEF, $this->oetbconfpacknotedef);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPICKSORT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFPICKSORT, $this->oetbconfpicksort);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPACKSORT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFPACKSORT, $this->oetbconfpacksort);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPRTPRICONLY)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFPRTPRICONLY, $this->oetbconfprtpriconly);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPRTNEG)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFPRTNEG, $this->oetbconfprtneg);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PRTPACKAGEINFO)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2PRTPACKAGEINFO, $this->oetbcon2prtpackageinfo);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2INNERPACKLABEL)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2INNERPACKLABEL, $this->oetbcon2innerpacklabel);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2OUTERPACKLABEL)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2OUTERPACKLABEL, $this->oetbcon2outerpacklabel);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SHIPTARELABEL)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2SHIPTARELABEL, $this->oetbcon2shiptarelabel);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPRTPICK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFPRTPICK, $this->oetbconfprtpick);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPICPRIOSEQ)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFPICPRIOSEQ, $this->oetbconfpicprioseq);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPRTPACK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFPRTPACK, $this->oetbconfprtpack);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPRTINV)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFPRTINV, $this->oetbconfprtinv);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PRTCREDMEMO)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2PRTCREDMEMO, $this->oetbcon2prtcredmemo);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFCRNTDATE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFCRNTDATE, $this->oetbconfcrntdate);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFMARKPICKED)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFMARKPICKED, $this->oetbconfmarkpicked);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSHOWUNAVAIL)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFSHOWUNAVAIL, $this->oetbconfshowunavail);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDECPLACES)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDECPLACES, $this->oetbconfdecplaces);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFWARNDUP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFWARNDUP, $this->oetbconfwarndup);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDEFPICK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDEFPICK, $this->oetbconfdefpick);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDEFPACK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDEFPACK, $this->oetbconfdefpack);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDEFINVC)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDEFINVC, $this->oetbconfdefinvc);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDEFACK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDEFACK, $this->oetbconfdefack);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFACKSORTOPT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFACKSORTOPT, $this->oetbconfacksortopt);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFRELEASENBR)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFRELEASENBR, $this->oetbconfreleasenbr);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPODETLINENBR)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFPODETLINENBR, $this->oetbconfpodetlinenbr);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDETLINEBINNBR)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDETLINEBINNBR, $this->oetbconfdetlinebinnbr);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSPLITBYWHSE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFSPLITBYWHSE, $this->oetbconfsplitbywhse);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3ALLOWMULTWHSE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3ALLOWMULTWHSE, $this->oetbcon3allowmultwhse);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEORIGWHSE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFUSEORIGWHSE, $this->oetbconfuseorigwhse);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEESOSINGLE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFUSEESOSINGLE, $this->oetbconfuseesosingle);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFCREATEPO)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFCREATEPO, $this->oetbconfcreatepo);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFBESTPRICE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFBESTPRICE, $this->oetbconfbestprice);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFESOBACKTONEW)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFESOBACKTONEW, $this->oetbconfesobacktonew);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFPICKPRINTDROP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFPICKPRINTDROP, $this->oetbconfpickprintdrop);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFWARNMULTPO)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFWARNMULTPO, $this->oetbconfwarnmultpo);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFALERTITEMQUOTE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFALERTITEMQUOTE, $this->oetbconfalertitemquote);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3ASKCHGPRCWQTY)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3ASKCHGPRCWQTY, $this->oetbcon3askchgprcwqty);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3TENQTYBRKS)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3TENQTYBRKS, $this->oetbcon3tenqtybrks);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDECORDRPRIC)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDECORDRPRIC, $this->oetbconfdecordrpric);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PROVLOSTSALES)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2PROVLOSTSALES, $this->oetbcon2provlostsales);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ASKREASONCODE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2ASKREASONCODE, $this->oetbcon2askreasoncode);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DEFREASONCODE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2DEFREASONCODE, $this->oetbcon2defreasoncode);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2BORDCNTL)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2BORDCNTL, $this->oetbcon2bordcntl);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DEFREABOCODE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2DEFREABOCODE, $this->oetbcon2defreabocode);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2NUMDAYSSAVLS)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2NUMDAYSSAVLS, $this->oetbcon2numdayssavls);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2CALLBACKNOTIF)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2CALLBACKNOTIF, $this->oetbcon2callbacknotif);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DEFDAYSWHENIN)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2DEFDAYSWHENIN, $this->oetbcon2defdayswhenin);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ADDSUBSLS)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2ADDSUBSLS, $this->oetbcon2addsubsls);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DEFREASUBSCODE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2DEFREASUBSCODE, $this->oetbcon2defreasubscode);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPNORM)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPNORM, $this->oetbcon2ordtypnorm);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPREP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPREP, $this->oetbcon2ordtyprep);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPSERV)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPSERV, $this->oetbcon2ordtypserv);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DEFORDTYP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2DEFORDTYP, $this->oetbcon2defordtyp);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFCHGPRIC)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFCHGPRIC, $this->oetbconfchgpric);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SPORDPRICEZERO)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2SPORDPRICEZERO, $this->oetbcon2spordpricezero);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFINACTPRICEZERO)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFINACTPRICEZERO, $this->oetbconfinactpricezero);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2RESEQ)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2RESEQ, $this->oetbcon2reseq);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2RESEQBY)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2RESEQBY, $this->oetbcon2reseqby);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2MINQTYSALES)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2MINQTYSALES, $this->oetbcon2minqtysales);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2CHGORDER)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2CHGORDER, $this->oetbcon2chgorder);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2VERCOMP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2VERCOMP, $this->oetbcon2vercomp);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PRTINV)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2PRTINV, $this->oetbcon2prtinv);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICPICKTICK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICPICKTICK, $this->oetbcon2dynamicpicktick);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICINVOICE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICINVOICE, $this->oetbcon2dynamicinvoice);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2EDIDEFINVOICE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2EDIDEFINVOICE, $this->oetbcon2edidefinvoice);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWCCPICK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWCCPICK, $this->oetbcon2allowccpick);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCWIND)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCWIND, $this->oetbcon2autoccwind);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCUPDATE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCUPDATE, $this->oetbcon2autoccupdate);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWAPVDCCCHG)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWAPVDCCCHG, $this->oetbcon2allowapvdccchg);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3APVDBCKORDCLEAR)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3APVDBCKORDCLEAR, $this->oetbcon3apvdbckordclear);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2POLWHICHCOST)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2POLWHICHCOST, $this->oetbcon2polwhichcost);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2REVHAZARD)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2REVHAZARD, $this->oetbcon2revhazard);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SHOWDISCLIST)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2SHOWDISCLIST, $this->oetbcon2showdisclist);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2CHGLIST)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2CHGLIST, $this->oetbcon2chglist);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2MAILLIST)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2MAILLIST, $this->oetbcon2maillist);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2NAMEFORMAT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2NAMEFORMAT, $this->oetbcon2nameformat);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2MAILIDTYPE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2MAILIDTYPE, $this->oetbcon2mailidtype);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2CASHDRAWERPSWD)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2CASHDRAWERPSWD, $this->oetbcon2cashdrawerpswd);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2UPSONLINE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2UPSONLINE, $this->oetbcon2upsonline);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PICORVER)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2PICORVER, $this->oetbcon2picorver);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2COMBBACK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2COMBBACK, $this->oetbcon2combback);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2FRTALLOWAMT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2FRTALLOWAMT, $this->oetbcon2frtallowamt);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3SHIPMOREORDERED)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3SHIPMOREORDERED, $this->oetbcon3shipmoreordered);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3WARNSHIPMORE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3WARNSHIPMORE, $this->oetbcon3warnshipmore);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3PROFORMAFROMESO)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3PROFORMAFROMESO, $this->oetbcon3proformafromeso);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3PICKPACKCODE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3PICKPACKCODE, $this->oetbcon3pickpackcode);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2USEDEPT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2USEDEPT, $this->oetbcon2usedept);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2USEDIVISION)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2USEDIVISION, $this->oetbcon2usedivision);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2DEFMFECODE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2DEFMFECODE, $this->oetbcon2defmfecode);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SHOWAVGCOST)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2SHOWAVGCOST, $this->oetbcon2showavgcost);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2FEDEX)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2FEDEX, $this->oetbcon2fedex);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3DEFFRGHTGRUP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3DEFFRGHTGRUP, $this->oetbcon3deffrghtgrup);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3UPSMYSQLDBNAME)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3UPSMYSQLDBNAME, $this->oetbcon3upsmysqldbname);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEOPTCODE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFUSEOPTCODE, $this->oetbconfuseoptcode);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFSCN4OPT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFSCN4OPT, $this->oetbconfscn4opt);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYUSE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYUSE, $this->oetbcon2takenbyuse);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYLOGIN)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYLOGIN, $this->oetbcon2takenbylogin);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYFORCE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYFORCE, $this->oetbcon2takenbyforce);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYUSE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYUSE, $this->oetbcon2pickedbyuse);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYFORCE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYFORCE, $this->oetbcon2pickedbyforce);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYPROC)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYPROC, $this->oetbcon2pickedbyproc);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYUSE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYUSE, $this->oetbcon2packedbyuse);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYFORCE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYFORCE, $this->oetbcon2packedbyforce);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYUSE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYUSE, $this->oetbcon2verifiedbyuse);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYLOGIN)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYLOGIN, $this->oetbcon2verifiedbylogin);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYFORCE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYFORCE, $this->oetbcon2verifiedbyforce);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL1)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL1, $this->oetbconfoptlabl1);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2UCODE1FORCE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2UCODE1FORCE, $this->oetbcon2ucode1force);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL2)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL2, $this->oetbconfoptlabl2);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2UCODE2FORCE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2UCODE2FORCE, $this->oetbcon2ucode2force);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL3)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL3, $this->oetbconfoptlabl3);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2UCODE3FORCE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2UCODE3FORCE, $this->oetbcon2ucode3force);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL4)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL4, $this->oetbconfoptlabl4);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2UCODE4FORCE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2UCODE4FORCE, $this->oetbcon2ucode4force);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFVERIFYAFTERPACK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFVERIFYAFTERPACK, $this->oetbconfverifyafterpack);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFHISTYRSBACK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFHISTYRSBACK, $this->oetbconfhistyrsback);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFRQSTCATLG)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFRQSTCATLG, $this->oetbconfrqstcatlg);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2CONPICK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2CONPICK, $this->oetbcon2conpick);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWPICK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWPICK, $this->oetbcon2allowpick);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2COMBINESAME)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2COMBINESAME, $this->oetbcon2combinesame);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3AUTOVERNITEMS)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3AUTOVERNITEMS, $this->oetbcon3autovernitems);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWZEROQTY)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWZEROQTY, $this->oetbcon2allowzeroqty);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWINVALIDWHSE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWINVALIDWHSE, $this->oetbcon2allowinvalidwhse);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2SHOWEDIINFO)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2SHOWEDIINFO, $this->oetbcon2showediinfo);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2ADDONSALES)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2ADDONSALES, $this->oetbcon2addonsales);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2FORCEDBKORD)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2FORCEDBKORD, $this->oetbcon2forcedbkord);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2UPDTPRCDISC)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2UPDTPRCDISC, $this->oetbcon2updtprcdisc);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2AUTOPACK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2AUTOPACK, $this->oetbcon2autopack);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2PICKBOPRTZQTS)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2PICKBOPRTZQTS, $this->oetbcon2pickboprtzqts);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3PICK00NOSHIP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3PICK00NOSHIP, $this->oetbcon3pick00noship);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDLEAD)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDLEAD, $this->oetbcon2standordlead);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDAMNT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDAMNT, $this->oetbcon2standordamnt);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2INACTITEMCNTRL)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2INACTITEMCNTRL, $this->oetbcon2inactitemcntrl);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON2USEITEMREF)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON2USEITEMREF, $this->oetbcon2useitemref);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3UPSNAFTARECORDS)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3UPSNAFTARECORDS, $this->oetbcon3upsnaftarecords);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDFLTSHIPWHSE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDFLTSHIPWHSE, $this->oetbconfdfltshipwhse);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFDFLTORIGWHSE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFDFLTORIGWHSE, $this->oetbconfdfltorigwhse);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFINVCWITHPACK)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFINVCWITHPACK, $this->oetbconfinvcwithpack);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFCARRYCNTRQTY)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFCARRYCNTRQTY, $this->oetbconfcarrycntrqty);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3USEORDRAS)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3USEORDRAS, $this->oetbcon3useordras);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRSOURCE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRSOURCE, $this->oetbconfuseordrsource);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3CCPROCESSOR)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3CCPROCESSOR, $this->oetbcon3ccprocessor);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3CREDITCARDCAP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3CREDITCARDCAP, $this->oetbcon3creditcardcap);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3KEYORCCCAP)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3KEYORCCCAP, $this->oetbcon3keyorcccap);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3CCXOVERLAY)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3CCXOVERLAY, $this->oetbcon3ccxoverlay);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3CCTIMEOUT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3CCTIMEOUT, $this->oetbcon3cctimeout);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3SIGNATURECAPTURE)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3SIGNATURECAPTURE, $this->oetbcon3signaturecapture);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3CCPREAPPROVAL)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3CCPREAPPROVAL, $this->oetbcon3ccpreapproval);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3FORCECCNBRENTRY)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3FORCECCNBRENTRY, $this->oetbcon3forceccnbrentry);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3INTRITEMNOTES)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3INTRITEMNOTES, $this->oetbcon3intritemnotes);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3MTRCERT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3MTRCERT, $this->oetbcon3mtrcert);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_OETBCON3COFCCERT)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_OETBCON3COFCCERT, $this->oetbcon3cofccert);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_DATEUPDTD)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ConfigSalesOrderTableMap::COL_DUMMY)) {
            $criteria->add(ConfigSalesOrderTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildConfigSalesOrderQuery::create();
        $criteria->add(ConfigSalesOrderTableMap::COL_OETBCONFKEY, $this->oetbconfkey);

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
        $validPk = null !== $this->getOetbconfkey();

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
        return $this->getOetbconfkey();
    }

    /**
     * Generic method to set the primary key (oetbconfkey column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setOetbconfkey($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getOetbconfkey();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ConfigSalesOrder (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOetbconfkey($this->getOetbconfkey());
        $copyObj->setOetbconfglifac($this->getOetbconfglifac());
        $copyObj->setOetbconfinifac($this->getOetbconfinifac());
        $copyObj->setOetbconfrelivty($this->getOetbconfrelivty());
        $copyObj->setOetbconfuseordrnbr($this->getOetbconfuseordrnbr());
        $copyObj->setOetbconfdefrqstdate($this->getOetbconfdefrqstdate());
        $copyObj->setOetbconfusecancdate($this->getOetbconfusecancdate());
        $copyObj->setOetbconfshowsp($this->getOetbconfshowsp());
        $copyObj->setOetbconfjrnlsort($this->getOetbconfjrnlsort());
        $copyObj->setOetbconfuseprepsoopt($this->getOetbconfuseprepsoopt());
        $copyObj->setOetbconfdispbillto($this->getOetbconfdispbillto());
        $copyObj->setOetbconfslctflm($this->getOetbconfslctflm());
        $copyObj->setOetbcon3usestockpull($this->getOetbcon3usestockpull());
        $copyObj->setOetbconfqtytoship($this->getOetbconfqtytoship());
        $copyObj->setOetbconfqtytoshipdef($this->getOetbconfqtytoshipdef());
        $copyObj->setOetbconfdfltordrqty($this->getOetbconfdfltordrqty());
        $copyObj->setOetbconfallocqtytoship($this->getOetbconfallocqtytoship());
        $copyObj->setOetbconfoverallocqts($this->getOetbconfoverallocqts());
        $copyObj->setOetbcon3completelotbin($this->getOetbcon3completelotbin());
        $copyObj->setOetbcon3rqtsopt($this->getOetbcon3rqtsopt());
        $copyObj->setOetbcon2shipcomphold($this->getOetbcon2shipcomphold());
        $copyObj->setOetbcon3usesaleforecast($this->getOetbcon3usesaleforecast());
        $copyObj->setOetbconfverfstopneg($this->getOetbconfverfstopneg());
        $copyObj->setOetbconfverfaudtrept($this->getOetbconfverfaudtrept());
        $copyObj->setOetbconfagelevldisp($this->getOetbconfagelevldisp());
        $copyObj->setOetbconfagealltime($this->getOetbconfagealltime());
        $copyObj->setOetbconfageathold($this->getOetbconfageathold());
        $copyObj->setOetbconfshowatlevl($this->getOetbconfshowatlevl());
        $copyObj->setOetbconfshowitem($this->getOetbconfshowitem());
        $copyObj->setOetbconfstoppnt($this->getOetbconfstoppnt());
        $copyObj->setOetbconfpricwind($this->getOetbconfpricwind());
        $copyObj->setOetbconfshowcost($this->getOetbconfshowcost());
        $copyObj->setOetbconfcosttouse($this->getOetbconfcosttouse());
        $copyObj->setOetbconfshowmarg($this->getOetbconfshowmarg());
        $copyObj->setOetbconffxoe($this->getOetbconffxoe());
        $copyObj->setOetbconffxinv($this->getOetbconffxinv());
        $copyObj->setOetbconfdispvia($this->getOetbconfdispvia());
        $copyObj->setOetbconfdispcaseqty($this->getOetbconfdispcaseqty());
        $copyObj->setOetbconffrtin($this->getOetbconffrtin());
        $copyObj->setOetbconffrtinglacct($this->getOetbconffrtinglacct());
        $copyObj->setOetbconfmincharge($this->getOetbconfmincharge());
        $copyObj->setOetbconfminchrgglacct($this->getOetbconfminchrgglacct());
        $copyObj->setOetbconfdropshipchrg($this->getOetbconfdropshipchrg());
        $copyObj->setOetbconfdropshpglacct($this->getOetbconfdropshpglacct());
        $copyObj->setOetbconfnontaxcustcode($this->getOetbconfnontaxcustcode());
        $copyObj->setOetbconfhstaxid($this->getOetbconfhstaxid());
        $copyObj->setOetbconfhsfrtid($this->getOetbconfhsfrtid());
        $copyObj->setOetbconfhsmiscid($this->getOetbconfhsmiscid());
        $copyObj->setOetbcon2hscusdid($this->getOetbcon2hscusdid());
        $copyObj->setOetbcon3hsfrtinid($this->getOetbcon3hsfrtinid());
        $copyObj->setOetbcon3hsdropid($this->getOetbcon3hsdropid());
        $copyObj->setOetbcon3hsminordid($this->getOetbcon3hsminordid());
        $copyObj->setOetbconfheadgetdef($this->getOetbconfheadgetdef());
        $copyObj->setOetbconfitemgetdef($this->getOetbconfitemgetdef());
        $copyObj->setOetbconfautogetcust($this->getOetbconfautogetcust());
        $copyObj->setOetbcon3autogetitem($this->getOetbcon3autogetitem());
        $copyObj->setOetbconfrqstheaddtl($this->getOetbconfrqstheaddtl());
        $copyObj->setOetbconfcancheaddtl($this->getOetbconfcancheaddtl());
        $copyObj->setOetbconfuseinvcasship($this->getOetbconfuseinvcasship());
        $copyObj->setOetbcon3usearrvdate($this->getOetbcon3usearrvdate());
        $copyObj->setOetbconfseparatecred($this->getOetbconfseparatecred());
        $copyObj->setOetbcon3applycredits($this->getOetbcon3applycredits());
        $copyObj->setOetbconfwarnnotnew($this->getOetbconfwarnnotnew());
        $copyObj->setOetbconfwarnbotozero($this->getOetbconfwarnbotozero());
        $copyObj->setOetbcon2providerouting($this->getOetbcon2providerouting());
        $copyObj->setOetbcon2srtrtbyrqstdte($this->getOetbcon2srtrtbyrqstdte());
        $copyObj->setOetbconfusesoreview($this->getOetbconfusesoreview());
        $copyObj->setOetbconfpicknotedef($this->getOetbconfpicknotedef());
        $copyObj->setOetbconfpacknotedef($this->getOetbconfpacknotedef());
        $copyObj->setOetbconfpicksort($this->getOetbconfpicksort());
        $copyObj->setOetbconfpacksort($this->getOetbconfpacksort());
        $copyObj->setOetbconfprtpriconly($this->getOetbconfprtpriconly());
        $copyObj->setOetbconfprtneg($this->getOetbconfprtneg());
        $copyObj->setOetbcon2prtpackageinfo($this->getOetbcon2prtpackageinfo());
        $copyObj->setOetbcon2innerpacklabel($this->getOetbcon2innerpacklabel());
        $copyObj->setOetbcon2outerpacklabel($this->getOetbcon2outerpacklabel());
        $copyObj->setOetbcon2shiptarelabel($this->getOetbcon2shiptarelabel());
        $copyObj->setOetbconfprtpick($this->getOetbconfprtpick());
        $copyObj->setOetbconfpicprioseq($this->getOetbconfpicprioseq());
        $copyObj->setOetbconfprtpack($this->getOetbconfprtpack());
        $copyObj->setOetbconfprtinv($this->getOetbconfprtinv());
        $copyObj->setOetbcon2prtcredmemo($this->getOetbcon2prtcredmemo());
        $copyObj->setOetbconfcrntdate($this->getOetbconfcrntdate());
        $copyObj->setOetbconfmarkpicked($this->getOetbconfmarkpicked());
        $copyObj->setOetbconfshowunavail($this->getOetbconfshowunavail());
        $copyObj->setOetbconfdecplaces($this->getOetbconfdecplaces());
        $copyObj->setOetbconfwarndup($this->getOetbconfwarndup());
        $copyObj->setOetbconfdefpick($this->getOetbconfdefpick());
        $copyObj->setOetbconfdefpack($this->getOetbconfdefpack());
        $copyObj->setOetbconfdefinvc($this->getOetbconfdefinvc());
        $copyObj->setOetbconfdefack($this->getOetbconfdefack());
        $copyObj->setOetbconfacksortopt($this->getOetbconfacksortopt());
        $copyObj->setOetbconfreleasenbr($this->getOetbconfreleasenbr());
        $copyObj->setOetbconfpodetlinenbr($this->getOetbconfpodetlinenbr());
        $copyObj->setOetbconfdetlinebinnbr($this->getOetbconfdetlinebinnbr());
        $copyObj->setOetbconfsplitbywhse($this->getOetbconfsplitbywhse());
        $copyObj->setOetbcon3allowmultwhse($this->getOetbcon3allowmultwhse());
        $copyObj->setOetbconfuseorigwhse($this->getOetbconfuseorigwhse());
        $copyObj->setOetbconfuseesosingle($this->getOetbconfuseesosingle());
        $copyObj->setOetbconfcreatepo($this->getOetbconfcreatepo());
        $copyObj->setOetbconfbestprice($this->getOetbconfbestprice());
        $copyObj->setOetbconfesobacktonew($this->getOetbconfesobacktonew());
        $copyObj->setOetbconfpickprintdrop($this->getOetbconfpickprintdrop());
        $copyObj->setOetbconfwarnmultpo($this->getOetbconfwarnmultpo());
        $copyObj->setOetbconfalertitemquote($this->getOetbconfalertitemquote());
        $copyObj->setOetbcon3askchgprcwqty($this->getOetbcon3askchgprcwqty());
        $copyObj->setOetbcon3tenqtybrks($this->getOetbcon3tenqtybrks());
        $copyObj->setOetbconfdecordrpric($this->getOetbconfdecordrpric());
        $copyObj->setOetbcon2provlostsales($this->getOetbcon2provlostsales());
        $copyObj->setOetbcon2askreasoncode($this->getOetbcon2askreasoncode());
        $copyObj->setOetbcon2defreasoncode($this->getOetbcon2defreasoncode());
        $copyObj->setOetbcon2bordcntl($this->getOetbcon2bordcntl());
        $copyObj->setOetbcon2defreabocode($this->getOetbcon2defreabocode());
        $copyObj->setOetbcon2numdayssavls($this->getOetbcon2numdayssavls());
        $copyObj->setOetbcon2callbacknotif($this->getOetbcon2callbacknotif());
        $copyObj->setOetbcon2defdayswhenin($this->getOetbcon2defdayswhenin());
        $copyObj->setOetbcon2addsubsls($this->getOetbcon2addsubsls());
        $copyObj->setOetbcon2defreasubscode($this->getOetbcon2defreasubscode());
        $copyObj->setOetbcon2ordtypnorm($this->getOetbcon2ordtypnorm());
        $copyObj->setOetbcon2ordtyprep($this->getOetbcon2ordtyprep());
        $copyObj->setOetbcon2ordtypserv($this->getOetbcon2ordtypserv());
        $copyObj->setOetbcon2defordtyp($this->getOetbcon2defordtyp());
        $copyObj->setOetbconfchgpric($this->getOetbconfchgpric());
        $copyObj->setOetbcon2spordpricezero($this->getOetbcon2spordpricezero());
        $copyObj->setOetbconfinactpricezero($this->getOetbconfinactpricezero());
        $copyObj->setOetbcon2reseq($this->getOetbcon2reseq());
        $copyObj->setOetbcon2reseqby($this->getOetbcon2reseqby());
        $copyObj->setOetbcon2minqtysales($this->getOetbcon2minqtysales());
        $copyObj->setOetbcon2chgorder($this->getOetbcon2chgorder());
        $copyObj->setOetbcon2vercomp($this->getOetbcon2vercomp());
        $copyObj->setOetbcon2prtinv($this->getOetbcon2prtinv());
        $copyObj->setOetbcon2dynamicpicktick($this->getOetbcon2dynamicpicktick());
        $copyObj->setOetbcon2dynamicinvoice($this->getOetbcon2dynamicinvoice());
        $copyObj->setOetbcon2edidefinvoice($this->getOetbcon2edidefinvoice());
        $copyObj->setOetbcon2allowccpick($this->getOetbcon2allowccpick());
        $copyObj->setOetbcon2autoccwind($this->getOetbcon2autoccwind());
        $copyObj->setOetbcon2autoccupdate($this->getOetbcon2autoccupdate());
        $copyObj->setOetbcon2allowapvdccchg($this->getOetbcon2allowapvdccchg());
        $copyObj->setOetbcon3apvdbckordclear($this->getOetbcon3apvdbckordclear());
        $copyObj->setOetbcon2polwhichcost($this->getOetbcon2polwhichcost());
        $copyObj->setOetbcon2revhazard($this->getOetbcon2revhazard());
        $copyObj->setOetbcon2showdisclist($this->getOetbcon2showdisclist());
        $copyObj->setOetbcon2chglist($this->getOetbcon2chglist());
        $copyObj->setOetbcon2maillist($this->getOetbcon2maillist());
        $copyObj->setOetbcon2nameformat($this->getOetbcon2nameformat());
        $copyObj->setOetbcon2mailidtype($this->getOetbcon2mailidtype());
        $copyObj->setOetbcon2cashdrawerpswd($this->getOetbcon2cashdrawerpswd());
        $copyObj->setOetbcon2upsonline($this->getOetbcon2upsonline());
        $copyObj->setOetbcon2picorver($this->getOetbcon2picorver());
        $copyObj->setOetbcon2combback($this->getOetbcon2combback());
        $copyObj->setOetbcon2frtallowamt($this->getOetbcon2frtallowamt());
        $copyObj->setOetbcon3shipmoreordered($this->getOetbcon3shipmoreordered());
        $copyObj->setOetbcon3warnshipmore($this->getOetbcon3warnshipmore());
        $copyObj->setOetbcon3proformafromeso($this->getOetbcon3proformafromeso());
        $copyObj->setOetbcon3pickpackcode($this->getOetbcon3pickpackcode());
        $copyObj->setOetbcon2usedept($this->getOetbcon2usedept());
        $copyObj->setOetbcon2usedivision($this->getOetbcon2usedivision());
        $copyObj->setOetbcon2defmfecode($this->getOetbcon2defmfecode());
        $copyObj->setOetbcon2showavgcost($this->getOetbcon2showavgcost());
        $copyObj->setOetbcon2fedex($this->getOetbcon2fedex());
        $copyObj->setOetbcon3deffrghtgrup($this->getOetbcon3deffrghtgrup());
        $copyObj->setOetbcon3upsmysqldbname($this->getOetbcon3upsmysqldbname());
        $copyObj->setOetbconfuseoptcode($this->getOetbconfuseoptcode());
        $copyObj->setOetbconfscn4opt($this->getOetbconfscn4opt());
        $copyObj->setOetbcon2takenbyuse($this->getOetbcon2takenbyuse());
        $copyObj->setOetbcon2takenbylogin($this->getOetbcon2takenbylogin());
        $copyObj->setOetbcon2takenbyforce($this->getOetbcon2takenbyforce());
        $copyObj->setOetbcon2pickedbyuse($this->getOetbcon2pickedbyuse());
        $copyObj->setOetbcon2pickedbyforce($this->getOetbcon2pickedbyforce());
        $copyObj->setOetbcon2pickedbyproc($this->getOetbcon2pickedbyproc());
        $copyObj->setOetbcon2packedbyuse($this->getOetbcon2packedbyuse());
        $copyObj->setOetbcon2packedbyforce($this->getOetbcon2packedbyforce());
        $copyObj->setOetbcon2verifiedbyuse($this->getOetbcon2verifiedbyuse());
        $copyObj->setOetbcon2verifiedbylogin($this->getOetbcon2verifiedbylogin());
        $copyObj->setOetbcon2verifiedbyforce($this->getOetbcon2verifiedbyforce());
        $copyObj->setOetbconfoptlabl1($this->getOetbconfoptlabl1());
        $copyObj->setOetbcon2ucode1force($this->getOetbcon2ucode1force());
        $copyObj->setOetbconfoptlabl2($this->getOetbconfoptlabl2());
        $copyObj->setOetbcon2ucode2force($this->getOetbcon2ucode2force());
        $copyObj->setOetbconfoptlabl3($this->getOetbconfoptlabl3());
        $copyObj->setOetbcon2ucode3force($this->getOetbcon2ucode3force());
        $copyObj->setOetbconfoptlabl4($this->getOetbconfoptlabl4());
        $copyObj->setOetbcon2ucode4force($this->getOetbcon2ucode4force());
        $copyObj->setOetbconfverifyafterpack($this->getOetbconfverifyafterpack());
        $copyObj->setOetbconfhistyrsback($this->getOetbconfhistyrsback());
        $copyObj->setOetbconfrqstcatlg($this->getOetbconfrqstcatlg());
        $copyObj->setOetbcon2conpick($this->getOetbcon2conpick());
        $copyObj->setOetbcon2allowpick($this->getOetbcon2allowpick());
        $copyObj->setOetbcon2combinesame($this->getOetbcon2combinesame());
        $copyObj->setOetbcon3autovernitems($this->getOetbcon3autovernitems());
        $copyObj->setOetbcon2allowzeroqty($this->getOetbcon2allowzeroqty());
        $copyObj->setOetbcon2allowinvalidwhse($this->getOetbcon2allowinvalidwhse());
        $copyObj->setOetbcon2showediinfo($this->getOetbcon2showediinfo());
        $copyObj->setOetbcon2addonsales($this->getOetbcon2addonsales());
        $copyObj->setOetbcon2forcedbkord($this->getOetbcon2forcedbkord());
        $copyObj->setOetbcon2updtprcdisc($this->getOetbcon2updtprcdisc());
        $copyObj->setOetbcon2autopack($this->getOetbcon2autopack());
        $copyObj->setOetbcon2pickboprtzqts($this->getOetbcon2pickboprtzqts());
        $copyObj->setOetbcon3pick00noship($this->getOetbcon3pick00noship());
        $copyObj->setOetbcon2standordlead($this->getOetbcon2standordlead());
        $copyObj->setOetbcon2standordamnt($this->getOetbcon2standordamnt());
        $copyObj->setOetbcon2inactitemcntrl($this->getOetbcon2inactitemcntrl());
        $copyObj->setOetbcon2useitemref($this->getOetbcon2useitemref());
        $copyObj->setOetbcon3upsnaftarecords($this->getOetbcon3upsnaftarecords());
        $copyObj->setOetbconfdfltshipwhse($this->getOetbconfdfltshipwhse());
        $copyObj->setOetbconfdfltorigwhse($this->getOetbconfdfltorigwhse());
        $copyObj->setOetbconfinvcwithpack($this->getOetbconfinvcwithpack());
        $copyObj->setOetbconfcarrycntrqty($this->getOetbconfcarrycntrqty());
        $copyObj->setOetbcon3useordras($this->getOetbcon3useordras());
        $copyObj->setOetbconfuseordrsource($this->getOetbconfuseordrsource());
        $copyObj->setOetbcon3ccprocessor($this->getOetbcon3ccprocessor());
        $copyObj->setOetbcon3creditcardcap($this->getOetbcon3creditcardcap());
        $copyObj->setOetbcon3keyorcccap($this->getOetbcon3keyorcccap());
        $copyObj->setOetbcon3ccxoverlay($this->getOetbcon3ccxoverlay());
        $copyObj->setOetbcon3cctimeout($this->getOetbcon3cctimeout());
        $copyObj->setOetbcon3signaturecapture($this->getOetbcon3signaturecapture());
        $copyObj->setOetbcon3ccpreapproval($this->getOetbcon3ccpreapproval());
        $copyObj->setOetbcon3forceccnbrentry($this->getOetbcon3forceccnbrentry());
        $copyObj->setOetbcon3intritemnotes($this->getOetbcon3intritemnotes());
        $copyObj->setOetbcon3mtrcert($this->getOetbcon3mtrcert());
        $copyObj->setOetbcon3cofccert($this->getOetbcon3cofccert());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());
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
     * @return \ConfigSalesOrder Clone of current object.
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
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        $this->oetbconfkey = null;
        $this->oetbconfglifac = null;
        $this->oetbconfinifac = null;
        $this->oetbconfrelivty = null;
        $this->oetbconfuseordrnbr = null;
        $this->oetbconfdefrqstdate = null;
        $this->oetbconfusecancdate = null;
        $this->oetbconfshowsp = null;
        $this->oetbconfjrnlsort = null;
        $this->oetbconfuseprepsoopt = null;
        $this->oetbconfdispbillto = null;
        $this->oetbconfslctflm = null;
        $this->oetbcon3usestockpull = null;
        $this->oetbconfqtytoship = null;
        $this->oetbconfqtytoshipdef = null;
        $this->oetbconfdfltordrqty = null;
        $this->oetbconfallocqtytoship = null;
        $this->oetbconfoverallocqts = null;
        $this->oetbcon3completelotbin = null;
        $this->oetbcon3rqtsopt = null;
        $this->oetbcon2shipcomphold = null;
        $this->oetbcon3usesaleforecast = null;
        $this->oetbconfverfstopneg = null;
        $this->oetbconfverfaudtrept = null;
        $this->oetbconfagelevldisp = null;
        $this->oetbconfagealltime = null;
        $this->oetbconfageathold = null;
        $this->oetbconfshowatlevl = null;
        $this->oetbconfshowitem = null;
        $this->oetbconfstoppnt = null;
        $this->oetbconfpricwind = null;
        $this->oetbconfshowcost = null;
        $this->oetbconfcosttouse = null;
        $this->oetbconfshowmarg = null;
        $this->oetbconffxoe = null;
        $this->oetbconffxinv = null;
        $this->oetbconfdispvia = null;
        $this->oetbconfdispcaseqty = null;
        $this->oetbconffrtin = null;
        $this->oetbconffrtinglacct = null;
        $this->oetbconfmincharge = null;
        $this->oetbconfminchrgglacct = null;
        $this->oetbconfdropshipchrg = null;
        $this->oetbconfdropshpglacct = null;
        $this->oetbconfnontaxcustcode = null;
        $this->oetbconfhstaxid = null;
        $this->oetbconfhsfrtid = null;
        $this->oetbconfhsmiscid = null;
        $this->oetbcon2hscusdid = null;
        $this->oetbcon3hsfrtinid = null;
        $this->oetbcon3hsdropid = null;
        $this->oetbcon3hsminordid = null;
        $this->oetbconfheadgetdef = null;
        $this->oetbconfitemgetdef = null;
        $this->oetbconfautogetcust = null;
        $this->oetbcon3autogetitem = null;
        $this->oetbconfrqstheaddtl = null;
        $this->oetbconfcancheaddtl = null;
        $this->oetbconfuseinvcasship = null;
        $this->oetbcon3usearrvdate = null;
        $this->oetbconfseparatecred = null;
        $this->oetbcon3applycredits = null;
        $this->oetbconfwarnnotnew = null;
        $this->oetbconfwarnbotozero = null;
        $this->oetbcon2providerouting = null;
        $this->oetbcon2srtrtbyrqstdte = null;
        $this->oetbconfusesoreview = null;
        $this->oetbconfpicknotedef = null;
        $this->oetbconfpacknotedef = null;
        $this->oetbconfpicksort = null;
        $this->oetbconfpacksort = null;
        $this->oetbconfprtpriconly = null;
        $this->oetbconfprtneg = null;
        $this->oetbcon2prtpackageinfo = null;
        $this->oetbcon2innerpacklabel = null;
        $this->oetbcon2outerpacklabel = null;
        $this->oetbcon2shiptarelabel = null;
        $this->oetbconfprtpick = null;
        $this->oetbconfpicprioseq = null;
        $this->oetbconfprtpack = null;
        $this->oetbconfprtinv = null;
        $this->oetbcon2prtcredmemo = null;
        $this->oetbconfcrntdate = null;
        $this->oetbconfmarkpicked = null;
        $this->oetbconfshowunavail = null;
        $this->oetbconfdecplaces = null;
        $this->oetbconfwarndup = null;
        $this->oetbconfdefpick = null;
        $this->oetbconfdefpack = null;
        $this->oetbconfdefinvc = null;
        $this->oetbconfdefack = null;
        $this->oetbconfacksortopt = null;
        $this->oetbconfreleasenbr = null;
        $this->oetbconfpodetlinenbr = null;
        $this->oetbconfdetlinebinnbr = null;
        $this->oetbconfsplitbywhse = null;
        $this->oetbcon3allowmultwhse = null;
        $this->oetbconfuseorigwhse = null;
        $this->oetbconfuseesosingle = null;
        $this->oetbconfcreatepo = null;
        $this->oetbconfbestprice = null;
        $this->oetbconfesobacktonew = null;
        $this->oetbconfpickprintdrop = null;
        $this->oetbconfwarnmultpo = null;
        $this->oetbconfalertitemquote = null;
        $this->oetbcon3askchgprcwqty = null;
        $this->oetbcon3tenqtybrks = null;
        $this->oetbconfdecordrpric = null;
        $this->oetbcon2provlostsales = null;
        $this->oetbcon2askreasoncode = null;
        $this->oetbcon2defreasoncode = null;
        $this->oetbcon2bordcntl = null;
        $this->oetbcon2defreabocode = null;
        $this->oetbcon2numdayssavls = null;
        $this->oetbcon2callbacknotif = null;
        $this->oetbcon2defdayswhenin = null;
        $this->oetbcon2addsubsls = null;
        $this->oetbcon2defreasubscode = null;
        $this->oetbcon2ordtypnorm = null;
        $this->oetbcon2ordtyprep = null;
        $this->oetbcon2ordtypserv = null;
        $this->oetbcon2defordtyp = null;
        $this->oetbconfchgpric = null;
        $this->oetbcon2spordpricezero = null;
        $this->oetbconfinactpricezero = null;
        $this->oetbcon2reseq = null;
        $this->oetbcon2reseqby = null;
        $this->oetbcon2minqtysales = null;
        $this->oetbcon2chgorder = null;
        $this->oetbcon2vercomp = null;
        $this->oetbcon2prtinv = null;
        $this->oetbcon2dynamicpicktick = null;
        $this->oetbcon2dynamicinvoice = null;
        $this->oetbcon2edidefinvoice = null;
        $this->oetbcon2allowccpick = null;
        $this->oetbcon2autoccwind = null;
        $this->oetbcon2autoccupdate = null;
        $this->oetbcon2allowapvdccchg = null;
        $this->oetbcon3apvdbckordclear = null;
        $this->oetbcon2polwhichcost = null;
        $this->oetbcon2revhazard = null;
        $this->oetbcon2showdisclist = null;
        $this->oetbcon2chglist = null;
        $this->oetbcon2maillist = null;
        $this->oetbcon2nameformat = null;
        $this->oetbcon2mailidtype = null;
        $this->oetbcon2cashdrawerpswd = null;
        $this->oetbcon2upsonline = null;
        $this->oetbcon2picorver = null;
        $this->oetbcon2combback = null;
        $this->oetbcon2frtallowamt = null;
        $this->oetbcon3shipmoreordered = null;
        $this->oetbcon3warnshipmore = null;
        $this->oetbcon3proformafromeso = null;
        $this->oetbcon3pickpackcode = null;
        $this->oetbcon2usedept = null;
        $this->oetbcon2usedivision = null;
        $this->oetbcon2defmfecode = null;
        $this->oetbcon2showavgcost = null;
        $this->oetbcon2fedex = null;
        $this->oetbcon3deffrghtgrup = null;
        $this->oetbcon3upsmysqldbname = null;
        $this->oetbconfuseoptcode = null;
        $this->oetbconfscn4opt = null;
        $this->oetbcon2takenbyuse = null;
        $this->oetbcon2takenbylogin = null;
        $this->oetbcon2takenbyforce = null;
        $this->oetbcon2pickedbyuse = null;
        $this->oetbcon2pickedbyforce = null;
        $this->oetbcon2pickedbyproc = null;
        $this->oetbcon2packedbyuse = null;
        $this->oetbcon2packedbyforce = null;
        $this->oetbcon2verifiedbyuse = null;
        $this->oetbcon2verifiedbylogin = null;
        $this->oetbcon2verifiedbyforce = null;
        $this->oetbconfoptlabl1 = null;
        $this->oetbcon2ucode1force = null;
        $this->oetbconfoptlabl2 = null;
        $this->oetbcon2ucode2force = null;
        $this->oetbconfoptlabl3 = null;
        $this->oetbcon2ucode3force = null;
        $this->oetbconfoptlabl4 = null;
        $this->oetbcon2ucode4force = null;
        $this->oetbconfverifyafterpack = null;
        $this->oetbconfhistyrsback = null;
        $this->oetbconfrqstcatlg = null;
        $this->oetbcon2conpick = null;
        $this->oetbcon2allowpick = null;
        $this->oetbcon2combinesame = null;
        $this->oetbcon3autovernitems = null;
        $this->oetbcon2allowzeroqty = null;
        $this->oetbcon2allowinvalidwhse = null;
        $this->oetbcon2showediinfo = null;
        $this->oetbcon2addonsales = null;
        $this->oetbcon2forcedbkord = null;
        $this->oetbcon2updtprcdisc = null;
        $this->oetbcon2autopack = null;
        $this->oetbcon2pickboprtzqts = null;
        $this->oetbcon3pick00noship = null;
        $this->oetbcon2standordlead = null;
        $this->oetbcon2standordamnt = null;
        $this->oetbcon2inactitemcntrl = null;
        $this->oetbcon2useitemref = null;
        $this->oetbcon3upsnaftarecords = null;
        $this->oetbconfdfltshipwhse = null;
        $this->oetbconfdfltorigwhse = null;
        $this->oetbconfinvcwithpack = null;
        $this->oetbconfcarrycntrqty = null;
        $this->oetbcon3useordras = null;
        $this->oetbconfuseordrsource = null;
        $this->oetbcon3ccprocessor = null;
        $this->oetbcon3creditcardcap = null;
        $this->oetbcon3keyorcccap = null;
        $this->oetbcon3ccxoverlay = null;
        $this->oetbcon3cctimeout = null;
        $this->oetbcon3signaturecapture = null;
        $this->oetbcon3ccpreapproval = null;
        $this->oetbcon3forceccnbrentry = null;
        $this->oetbcon3intritemnotes = null;
        $this->oetbcon3mtrcert = null;
        $this->oetbcon3cofccert = null;
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
        } // if ($deep)

    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ConfigSalesOrderTableMap::DEFAULT_STRING_FORMAT);
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
