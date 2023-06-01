<?php

namespace Base;

use \ConfigInQuery as ChildConfigInQuery;
use \Exception;
use \PDO;
use Map\ConfigInTableMap;
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
 * Base class that represents a row from the 'in_config' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ConfigIn implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ConfigInTableMap';


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
     * The value for the intbconfkey field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $intbconfkey;

    /**
     * The value for the intbconfglifac field.
     *
     * @var        string
     */
    protected $intbconfglifac;

    /**
     * The value for the intbconfuseiw field.
     *
     * @var        string
     */
    protected $intbconfuseiw;

    /**
     * The value for the intbconflifofifo field.
     *
     * @var        string
     */
    protected $intbconflifofifo;

    /**
     * The value for the intbconfgoneg field.
     *
     * @var        string
     */
    protected $intbconfgoneg;

    /**
     * The value for the intbconfuselots field.
     *
     * @var        string
     */
    protected $intbconfuselots;

    /**
     * The value for the intbconfnbruppr field.
     *
     * @var        string
     */
    protected $intbconfnbruppr;

    /**
     * The value for the intbconfdescuppr field.
     *
     * @var        string
     */
    protected $intbconfdescuppr;

    /**
     * The value for the intbconfusedesc2 field.
     *
     * @var        string
     */
    protected $intbconfusedesc2;

    /**
     * The value for the intbconfuseupccode field.
     *
     * @var        string
     */
    protected $intbconfuseupccode;

    /**
     * The value for the intbconfupceancntrl field.
     *
     * @var        string
     */
    protected $intbconfupceancntrl;

    /**
     * The value for the intbconfupcgennbr field.
     *
     * @var        int
     */
    protected $intbconfupcgennbr;

    /**
     * The value for the intbcon2allowdupupc field.
     *
     * @var        string
     */
    protected $intbcon2allowdupupc;

    /**
     * The value for the intbconfxrefnospace field.
     *
     * @var        string
     */
    protected $intbconfxrefnospace;

    /**
     * The value for the intbconfusepricgrup field.
     *
     * @var        string
     */
    protected $intbconfusepricgrup;

    /**
     * The value for the intbconfusecommgrup field.
     *
     * @var        string
     */
    protected $intbconfusecommgrup;

    /**
     * The value for the intbconfusewarrdays field.
     *
     * @var        string
     */
    protected $intbconfusewarrdays;

    /**
     * The value for the intbconfstanbasedef field.
     *
     * @var        string
     */
    protected $intbconfstanbasedef;

    /**
     * The value for the intbconfgrupdef field.
     *
     * @var        string
     */
    protected $intbconfgrupdef;

    /**
     * The value for the intbconfpricgrupdef field.
     *
     * @var        string
     */
    protected $intbconfpricgrupdef;

    /**
     * The value for the intbconfcommgrupdef field.
     *
     * @var        string
     */
    protected $intbconfcommgrupdef;

    /**
     * The value for the intbconftypedef field.
     *
     * @var        string
     */
    protected $intbconftypedef;

    /**
     * The value for the intbconfpricuseitem field.
     *
     * @var        string
     */
    protected $intbconfpricuseitem;

    /**
     * The value for the intbconfcommuseitem field.
     *
     * @var        string
     */
    protected $intbconfcommuseitem;

    /**
     * The value for the intbconfuomsaledef field.
     *
     * @var        string
     */
    protected $intbconfuomsaledef;

    /**
     * The value for the intbconfuompurdef field.
     *
     * @var        string
     */
    protected $intbconfuompurdef;

    /**
     * The value for the intbconfsviadef field.
     *
     * @var        string
     */
    protected $intbconfsviadef;

    /**
     * The value for the intbconfcustxreforuse field.
     *
     * @var        string
     */
    protected $intbconfcustxreforuse;

    /**
     * The value for the intbconfheadgetdef field.
     *
     * @var        int
     */
    protected $intbconfheadgetdef;

    /**
     * The value for the intbconfitemgetdef field.
     *
     * @var        int
     */
    protected $intbconfitemgetdef;

    /**
     * The value for the intbconfgetdispohaval field.
     *
     * @var        string
     */
    protected $intbconfgetdispohaval;

    /**
     * The value for the intbconfusercode1labl field.
     *
     * @var        string
     */
    protected $intbconfusercode1labl;

    /**
     * The value for the intbconfusercode1ver field.
     *
     * @var        string
     */
    protected $intbconfusercode1ver;

    /**
     * The value for the intbconfusercode2labl field.
     *
     * @var        string
     */
    protected $intbconfusercode2labl;

    /**
     * The value for the intbconfusercode2ver field.
     *
     * @var        string
     */
    protected $intbconfusercode2ver;

    /**
     * The value for the intbconfitemline field.
     *
     * @var        int
     */
    protected $intbconfitemline;

    /**
     * The value for the intbconfitemcols field.
     *
     * @var        int
     */
    protected $intbconfitemcols;

    /**
     * The value for the intbconfheadline field.
     *
     * @var        int
     */
    protected $intbconfheadline;

    /**
     * The value for the intbconfheadcols field.
     *
     * @var        int
     */
    protected $intbconfheadcols;

    /**
     * The value for the intbconfdetline field.
     *
     * @var        int
     */
    protected $intbconfdetline;

    /**
     * The value for the intbconfdetcols field.
     *
     * @var        int
     */
    protected $intbconfdetcols;

    /**
     * The value for the intbconfminmaxzero field.
     *
     * @var        string
     */
    protected $intbconfminmaxzero;

    /**
     * The value for the intbconfminrec field.
     *
     * @var        string
     */
    protected $intbconfminrec;

    /**
     * The value for the intbconfatbelowmin field.
     *
     * @var        string
     */
    protected $intbconfatbelowmin;

    /**
     * The value for the intbconfonewhse field.
     *
     * @var        string
     */
    protected $intbconfonewhse;

    /**
     * The value for the intbconfytdmth field.
     *
     * @var        int
     */
    protected $intbconfytdmth;

    /**
     * The value for the intbconfusegramsltr field.
     *
     * @var        string
     */
    protected $intbconfusegramsltr;

    /**
     * The value for the intbconfabcbywhse field.
     *
     * @var        string
     */
    protected $intbconfabcbywhse;

    /**
     * The value for the intbconfabcnbrmths field.
     *
     * @var        int
     */
    protected $intbconfabcnbrmths;

    /**
     * The value for the intbconfabcbasecode field.
     *
     * @var        string
     */
    protected $intbconfabcbasecode;

    /**
     * The value for the intbconfabclevla field.
     *
     * @var        string
     */
    protected $intbconfabclevla;

    /**
     * The value for the intbconfabclevlb field.
     *
     * @var        string
     */
    protected $intbconfabclevlb;

    /**
     * The value for the intbconfabclevlc field.
     *
     * @var        string
     */
    protected $intbconfabclevlc;

    /**
     * The value for the intbconfabclevld field.
     *
     * @var        string
     */
    protected $intbconfabclevld;

    /**
     * The value for the intbconfabclevle field.
     *
     * @var        string
     */
    protected $intbconfabclevle;

    /**
     * The value for the intbconfabclevlf field.
     *
     * @var        string
     */
    protected $intbconfabclevlf;

    /**
     * The value for the intbconfabclevlg field.
     *
     * @var        string
     */
    protected $intbconfabclevlg;

    /**
     * The value for the intbconfabclevlh field.
     *
     * @var        string
     */
    protected $intbconfabclevlh;

    /**
     * The value for the intbconfabclevli field.
     *
     * @var        string
     */
    protected $intbconfabclevli;

    /**
     * The value for the intbconfabclevlj field.
     *
     * @var        string
     */
    protected $intbconfabclevlj;

    /**
     * The value for the intbconfuseforeignx field.
     *
     * @var        string
     */
    protected $intbconfuseforeignx;

    /**
     * The value for the intbconfusenafta field.
     *
     * @var        string
     */
    protected $intbconfusenafta;

    /**
     * The value for the intbconfnaftaprefcode field.
     *
     * @var        string
     */
    protected $intbconfnaftaprefcode;

    /**
     * The value for the intbconfnaftaproducer field.
     *
     * @var        string
     */
    protected $intbconfnaftaproducer;

    /**
     * The value for the intbconfnaftadoccode field.
     *
     * @var        string
     */
    protected $intbconfnaftadoccode;

    /**
     * The value for the intbconfphyscurrwksh field.
     *
     * @var        string
     */
    protected $intbconfphyscurrwksh;

    /**
     * The value for the intbconf20or30 field.
     *
     * @var        int
     */
    protected $intbconf20or30;

    /**
     * The value for the intbconfdisporigcnt field.
     *
     * @var        string
     */
    protected $intbconfdisporigcnt;

    /**
     * The value for the intbconfdispgl field.
     *
     * @var        string
     */
    protected $intbconfdispgl;

    /**
     * The value for the intbconfdispref field.
     *
     * @var        string
     */
    protected $intbconfdispref;

    /**
     * The value for the intbconfdispcost field.
     *
     * @var        string
     */
    protected $intbconfdispcost;

    /**
     * The value for the intbconfprtval field.
     *
     * @var        string
     */
    protected $intbconfprtval;

    /**
     * The value for the intbconfprtgl field.
     *
     * @var        string
     */
    protected $intbconfprtgl;

    /**
     * The value for the intbconfglacct field.
     *
     * @var        string
     */
    protected $intbconfglacct;

    /**
     * The value for the intbconfref field.
     *
     * @var        string
     */
    protected $intbconfref;

    /**
     * The value for the intbconfcosttype field.
     *
     * @var        string
     */
    protected $intbconfcosttype;

    /**
     * The value for the intbconfnormalonly field.
     *
     * @var        string
     */
    protected $intbconfnormalonly;

    /**
     * The value for the intbconfusewhsedef field.
     *
     * @var        string
     */
    protected $intbconfusewhsedef;

    /**
     * The value for the intbcon2dfltwhse01 field.
     *
     * @var        string
     */
    protected $intbcon2dfltwhse01;

    /**
     * The value for the intbcon2dfltwhse02 field.
     *
     * @var        string
     */
    protected $intbcon2dfltwhse02;

    /**
     * The value for the intbcon2dfltwhse03 field.
     *
     * @var        string
     */
    protected $intbcon2dfltwhse03;

    /**
     * The value for the intbcon2dfltwhse04 field.
     *
     * @var        string
     */
    protected $intbcon2dfltwhse04;

    /**
     * The value for the intbcon2dfltwhse05 field.
     *
     * @var        string
     */
    protected $intbcon2dfltwhse05;

    /**
     * The value for the intbcon2dfltwhse06 field.
     *
     * @var        string
     */
    protected $intbcon2dfltwhse06;

    /**
     * The value for the intbcon2dfltwhse07 field.
     *
     * @var        string
     */
    protected $intbcon2dfltwhse07;

    /**
     * The value for the intbcon2dfltwhse08 field.
     *
     * @var        string
     */
    protected $intbcon2dfltwhse08;

    /**
     * The value for the intbcon2dfltwhse09 field.
     *
     * @var        string
     */
    protected $intbcon2dfltwhse09;

    /**
     * The value for the intbcon2dfltwhse10 field.
     *
     * @var        string
     */
    protected $intbcon2dfltwhse10;

    /**
     * The value for the intbconfbindef field.
     *
     * @var        string
     */
    protected $intbconfbindef;

    /**
     * The value for the intbconfcycldef field.
     *
     * @var        string
     */
    protected $intbconfcycldef;

    /**
     * The value for the intbconfstatdef field.
     *
     * @var        string
     */
    protected $intbconfstatdef;

    /**
     * The value for the intbconfabcdef field.
     *
     * @var        string
     */
    protected $intbconfabcdef;

    /**
     * The value for the intbconfspecordrdef field.
     *
     * @var        string
     */
    protected $intbconfspecordrdef;

    /**
     * The value for the intbconfordrpntdef field.
     *
     * @var        string
     */
    protected $intbconfordrpntdef;

    /**
     * The value for the intbconfmaxdef field.
     *
     * @var        string
     */
    protected $intbconfmaxdef;

    /**
     * The value for the intbconfordrqtydef field.
     *
     * @var        string
     */
    protected $intbconfordrqtydef;

    /**
     * The value for the intbconftrcptallowcmpl field.
     *
     * @var        string
     */
    protected $intbconftrcptallowcmpl;

    /**
     * The value for the intbconftrecmmtstock field.
     *
     * @var        string
     */
    protected $intbconftrecmmtstock;

    /**
     * The value for the intbconfusefrtin field.
     *
     * @var        string
     */
    protected $intbconfusefrtin;

    /**
     * The value for the intbconfeachoruom field.
     *
     * @var        string
     */
    protected $intbconfeachoruom;

    /**
     * The value for the intbconfneglotcorr field.
     *
     * @var        string
     */
    protected $intbconfneglotcorr;

    /**
     * The value for the intbconftrnsglacct field.
     *
     * @var        string
     */
    protected $intbconftrnsglacct;

    /**
     * The value for the intbconftrnsprotstock field.
     *
     * @var        string
     */
    protected $intbconftrnsprotstock;

    /**
     * The value for the intbconfnumericitem field.
     *
     * @var        string
     */
    protected $intbconfnumericitem;

    /**
     * The value for the intbconfitemdigits field.
     *
     * @var        int
     */
    protected $intbconfitemdigits;

    /**
     * The value for the intbconfsinglewhse field.
     *
     * @var        string
     */
    protected $intbconfsinglewhse;

    /**
     * The value for the intbconfupdusepct field.
     *
     * @var        string
     */
    protected $intbconfupdusepct;

    /**
     * The value for the intbconfupdpric field.
     *
     * @var        string
     */
    protected $intbconfupdpric;

    /**
     * The value for the intbconfupdstdcost field.
     *
     * @var        string
     */
    protected $intbconfupdstdcost;

    /**
     * The value for the intbconfupdxrefcost field.
     *
     * @var        string
     */
    protected $intbconfupdxrefcost;

    /**
     * The value for the intbconfiqpaupddate field.
     *
     * @var        string
     */
    protected $intbconfiqpaupddate;

    /**
     * The value for the intbconfupcxrefoptn field.
     *
     * @var        string
     */
    protected $intbconfupcxrefoptn;

    /**
     * The value for the intbconfresqyn field.
     *
     * @var        string
     */
    protected $intbconfresqyn;

    /**
     * The value for the intbconfresqitembin field.
     *
     * @var        string
     */
    protected $intbconfresqitembin;

    /**
     * The value for the intbconfresvcost field.
     *
     * @var        string
     */
    protected $intbconfresvcost;

    /**
     * The value for the intbcon2tranzerorqst field.
     *
     * @var        string
     */
    protected $intbcon2tranzerorqst;

    /**
     * The value for the intbconfmonendadjdate field.
     *
     * @var        string
     */
    protected $intbconfmonendadjdate;

    /**
     * The value for the intbconfmonendtrndate field.
     *
     * @var        string
     */
    protected $intbconfmonendtrndate;

    /**
     * The value for the intbconfmonendlogdate field.
     *
     * @var        string
     */
    protected $intbconfmonendlogdate;

    /**
     * The value for the intbconfdstatproc field.
     *
     * @var        string
     */
    protected $intbconfdstatproc;

    /**
     * The value for the intbconfstancostupd field.
     *
     * @var        string
     */
    protected $intbconfstancostupd;

    /**
     * The value for the intbconflastcost field.
     *
     * @var        string
     */
    protected $intbconflastcost;

    /**
     * The value for the intbconfusesorgpct field.
     *
     * @var        string
     */
    protected $intbconfusesorgpct;

    /**
     * The value for the intbconfaddonstan field.
     *
     * @var        string
     */
    protected $intbconfaddonstan;

    /**
     * The value for the intbconfstdcosterror field.
     *
     * @var        string
     */
    protected $intbconfstdcosterror;

    /**
     * The value for the intbconfavgcurrfive field.
     *
     * @var        string
     */
    protected $intbconfavgcurrfive;

    /**
     * The value for the intbconfusecntrlbin field.
     *
     * @var        string
     */
    protected $intbconfusecntrlbin;

    /**
     * The value for the intbconfnbrbinareas field.
     *
     * @var        int
     */
    protected $intbconfnbrbinareas;

    /**
     * The value for the intbconfusemultbin field.
     *
     * @var        string
     */
    protected $intbconfusemultbin;

    /**
     * The value for the intbconfdfltwhsebin field.
     *
     * @var        string
     */
    protected $intbconfdfltwhsebin;

    /**
     * The value for the intbconfdfltbin field.
     *
     * @var        string
     */
    protected $intbconfdfltbin;

    /**
     * The value for the intbconfctryitemlot field.
     *
     * @var        string
     */
    protected $intbconfctryitemlot;

    /**
     * The value for the intbconfuseshipbin field.
     *
     * @var        string
     */
    protected $intbconfuseshipbin;

    /**
     * The value for the intbcon2prtbinrlabel field.
     *
     * @var        string
     */
    protected $intbcon2prtbinrlabel;

    /**
     * The value for the intbcon2itemlookup field.
     *
     * @var        string
     */
    protected $intbcon2itemlookup;

    /**
     * The value for the intbconfincldcti field.
     *
     * @var        string
     */
    protected $intbconfincldcti;

    /**
     * The value for the intbconfcertimage field.
     *
     * @var        string
     */
    protected $intbconfcertimage;

    /**
     * The value for the intbconfdrawimage field.
     *
     * @var        string
     */
    protected $intbconfdrawimage;

    /**
     * The value for the intbconfconfirmimage field.
     *
     * @var        string
     */
    protected $intbconfconfirmimage;

    /**
     * The value for the intbcon2productimage field.
     *
     * @var        string
     */
    protected $intbcon2productimage;

    /**
     * The value for the intbconfdefpick field.
     *
     * @var        string
     */
    protected $intbconfdefpick;

    /**
     * The value for the intbconfdefpack field.
     *
     * @var        string
     */
    protected $intbconfdefpack;

    /**
     * The value for the intbconfdefinvc field.
     *
     * @var        string
     */
    protected $intbconfdefinvc;

    /**
     * The value for the intbconfdefack field.
     *
     * @var        string
     */
    protected $intbconfdefack;

    /**
     * The value for the intbconfdefquot field.
     *
     * @var        string
     */
    protected $intbconfdefquot;

    /**
     * The value for the intbconfdefpo field.
     *
     * @var        string
     */
    protected $intbconfdefpo;

    /**
     * The value for the intbconfdeftrans field.
     *
     * @var        string
     */
    protected $intbconfdeftrans;

    /**
     * The value for the intbconfadjglcogs field.
     *
     * @var        string
     */
    protected $intbconfadjglcogs;

    /**
     * The value for the intbcon2dfltadjglacct field.
     *
     * @var        string
     */
    protected $intbcon2dfltadjglacct;

    /**
     * The value for the intbconfadjcostbase field.
     *
     * @var        string
     */
    protected $intbconfadjcostbase;

    /**
     * The value for the intbconfdfltadjtbin field.
     *
     * @var        string
     */
    protected $intbconfdfltadjtbin;

    /**
     * The value for the intbconfadjtbin field.
     *
     * @var        string
     */
    protected $intbconfadjtbin;

    /**
     * The value for the intbconfcstockseq field.
     *
     * @var        string
     */
    protected $intbconfcstockseq;

    /**
     * The value for the intbconfcstockhistday field.
     *
     * @var        int
     */
    protected $intbconfcstockhistday;

    /**
     * The value for the intbconfcstockformat field.
     *
     * @var        string
     */
    protected $intbconfcstockformat;

    /**
     * The value for the intbconfcstkexportitem field.
     *
     * @var        string
     */
    protected $intbconfcstkexportitem;

    /**
     * The value for the intbconfcstkpdmcontract field.
     *
     * @var        string
     */
    protected $intbconfcstkpdmcontract;

    /**
     * The value for the intbcon2importseq field.
     *
     * @var        string
     */
    protected $intbcon2importseq;

    /**
     * The value for the intbconfstopitemchg field.
     *
     * @var        int
     */
    protected $intbconfstopitemchg;

    /**
     * The value for the intbconfaddtomxrfe field.
     *
     * @var        string
     */
    protected $intbconfaddtomxrfe;

    /**
     * The value for the intbconfmxrfevendid field.
     *
     * @var        string
     */
    protected $intbconfmxrfevendid;

    /**
     * The value for the intbcon2newidlabellist field.
     *
     * @var        string
     */
    protected $intbcon2newidlabellist;

    /**
     * The value for the intbconfuseformat field.
     *
     * @var        string
     */
    protected $intbconfuseformat;

    /**
     * The value for the intbconfdefformat field.
     *
     * @var        string
     */
    protected $intbconfdefformat;

    /**
     * The value for the intbconfseqshortitem field.
     *
     * @var        string
     */
    protected $intbconfseqshortitem;

    /**
     * The value for the intbconfshortitemlen field.
     *
     * @var        int
     */
    protected $intbconfshortitemlen;

    /**
     * The value for the intbconfusescale field.
     *
     * @var        string
     */
    protected $intbconfusescale;

    /**
     * The value for the intbconfstorewght field.
     *
     * @var        string
     */
    protected $intbconfstorewght;

    /**
     * The value for the intbconfvalidasstcode field.
     *
     * @var        string
     */
    protected $intbconfvalidasstcode;

    /**
     * The value for the intbconfwhitegoods field.
     *
     * @var        string
     */
    protected $intbconfwhitegoods;

    /**
     * The value for the intbcon2transcustid field.
     *
     * @var        string
     */
    protected $intbcon2transcustid;

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
        $this->intbconfkey = 0;
    }

    /**
     * Initializes internal state of Base\ConfigIn object.
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
     * Compares this with another <code>ConfigIn</code> instance.  If
     * <code>obj</code> is an instance of <code>ConfigIn</code>, delegates to
     * <code>equals(ConfigIn)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ConfigIn The current object, for fluid interface
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
     * Get the [intbconfkey] column value.
     *
     * @return int
     */
    public function getIntbconfkey()
    {
        return $this->intbconfkey;
    }

    /**
     * Get the [intbconfglifac] column value.
     *
     * @return string
     */
    public function getIntbconfglifac()
    {
        return $this->intbconfglifac;
    }

    /**
     * Get the [intbconfuseiw] column value.
     *
     * @return string
     */
    public function getIntbconfuseiw()
    {
        return $this->intbconfuseiw;
    }

    /**
     * Get the [intbconflifofifo] column value.
     *
     * @return string
     */
    public function getIntbconflifofifo()
    {
        return $this->intbconflifofifo;
    }

    /**
     * Get the [intbconfgoneg] column value.
     *
     * @return string
     */
    public function getIntbconfgoneg()
    {
        return $this->intbconfgoneg;
    }

    /**
     * Get the [intbconfuselots] column value.
     *
     * @return string
     */
    public function getIntbconfuselots()
    {
        return $this->intbconfuselots;
    }

    /**
     * Get the [intbconfnbruppr] column value.
     *
     * @return string
     */
    public function getIntbconfnbruppr()
    {
        return $this->intbconfnbruppr;
    }

    /**
     * Get the [intbconfdescuppr] column value.
     *
     * @return string
     */
    public function getIntbconfdescuppr()
    {
        return $this->intbconfdescuppr;
    }

    /**
     * Get the [intbconfusedesc2] column value.
     *
     * @return string
     */
    public function getIntbconfusedesc2()
    {
        return $this->intbconfusedesc2;
    }

    /**
     * Get the [intbconfuseupccode] column value.
     *
     * @return string
     */
    public function getIntbconfuseupccode()
    {
        return $this->intbconfuseupccode;
    }

    /**
     * Get the [intbconfupceancntrl] column value.
     *
     * @return string
     */
    public function getIntbconfupceancntrl()
    {
        return $this->intbconfupceancntrl;
    }

    /**
     * Get the [intbconfupcgennbr] column value.
     *
     * @return int
     */
    public function getIntbconfupcgennbr()
    {
        return $this->intbconfupcgennbr;
    }

    /**
     * Get the [intbcon2allowdupupc] column value.
     *
     * @return string
     */
    public function getIntbcon2allowdupupc()
    {
        return $this->intbcon2allowdupupc;
    }

    /**
     * Get the [intbconfxrefnospace] column value.
     *
     * @return string
     */
    public function getIntbconfxrefnospace()
    {
        return $this->intbconfxrefnospace;
    }

    /**
     * Get the [intbconfusepricgrup] column value.
     *
     * @return string
     */
    public function getIntbconfusepricgrup()
    {
        return $this->intbconfusepricgrup;
    }

    /**
     * Get the [intbconfusecommgrup] column value.
     *
     * @return string
     */
    public function getIntbconfusecommgrup()
    {
        return $this->intbconfusecommgrup;
    }

    /**
     * Get the [intbconfusewarrdays] column value.
     *
     * @return string
     */
    public function getIntbconfusewarrdays()
    {
        return $this->intbconfusewarrdays;
    }

    /**
     * Get the [intbconfstanbasedef] column value.
     *
     * @return string
     */
    public function getIntbconfstanbasedef()
    {
        return $this->intbconfstanbasedef;
    }

    /**
     * Get the [intbconfgrupdef] column value.
     *
     * @return string
     */
    public function getIntbconfgrupdef()
    {
        return $this->intbconfgrupdef;
    }

    /**
     * Get the [intbconfpricgrupdef] column value.
     *
     * @return string
     */
    public function getIntbconfpricgrupdef()
    {
        return $this->intbconfpricgrupdef;
    }

    /**
     * Get the [intbconfcommgrupdef] column value.
     *
     * @return string
     */
    public function getIntbconfcommgrupdef()
    {
        return $this->intbconfcommgrupdef;
    }

    /**
     * Get the [intbconftypedef] column value.
     *
     * @return string
     */
    public function getIntbconftypedef()
    {
        return $this->intbconftypedef;
    }

    /**
     * Get the [intbconfpricuseitem] column value.
     *
     * @return string
     */
    public function getIntbconfpricuseitem()
    {
        return $this->intbconfpricuseitem;
    }

    /**
     * Get the [intbconfcommuseitem] column value.
     *
     * @return string
     */
    public function getIntbconfcommuseitem()
    {
        return $this->intbconfcommuseitem;
    }

    /**
     * Get the [intbconfuomsaledef] column value.
     *
     * @return string
     */
    public function getIntbconfuomsaledef()
    {
        return $this->intbconfuomsaledef;
    }

    /**
     * Get the [intbconfuompurdef] column value.
     *
     * @return string
     */
    public function getIntbconfuompurdef()
    {
        return $this->intbconfuompurdef;
    }

    /**
     * Get the [intbconfsviadef] column value.
     *
     * @return string
     */
    public function getIntbconfsviadef()
    {
        return $this->intbconfsviadef;
    }

    /**
     * Get the [intbconfcustxreforuse] column value.
     *
     * @return string
     */
    public function getIntbconfcustxreforuse()
    {
        return $this->intbconfcustxreforuse;
    }

    /**
     * Get the [intbconfheadgetdef] column value.
     *
     * @return int
     */
    public function getIntbconfheadgetdef()
    {
        return $this->intbconfheadgetdef;
    }

    /**
     * Get the [intbconfitemgetdef] column value.
     *
     * @return int
     */
    public function getIntbconfitemgetdef()
    {
        return $this->intbconfitemgetdef;
    }

    /**
     * Get the [intbconfgetdispohaval] column value.
     *
     * @return string
     */
    public function getIntbconfgetdispohaval()
    {
        return $this->intbconfgetdispohaval;
    }

    /**
     * Get the [intbconfusercode1labl] column value.
     *
     * @return string
     */
    public function getIntbconfusercode1labl()
    {
        return $this->intbconfusercode1labl;
    }

    /**
     * Get the [intbconfusercode1ver] column value.
     *
     * @return string
     */
    public function getIntbconfusercode1ver()
    {
        return $this->intbconfusercode1ver;
    }

    /**
     * Get the [intbconfusercode2labl] column value.
     *
     * @return string
     */
    public function getIntbconfusercode2labl()
    {
        return $this->intbconfusercode2labl;
    }

    /**
     * Get the [intbconfusercode2ver] column value.
     *
     * @return string
     */
    public function getIntbconfusercode2ver()
    {
        return $this->intbconfusercode2ver;
    }

    /**
     * Get the [intbconfitemline] column value.
     *
     * @return int
     */
    public function getIntbconfitemline()
    {
        return $this->intbconfitemline;
    }

    /**
     * Get the [intbconfitemcols] column value.
     *
     * @return int
     */
    public function getIntbconfitemcols()
    {
        return $this->intbconfitemcols;
    }

    /**
     * Get the [intbconfheadline] column value.
     *
     * @return int
     */
    public function getIntbconfheadline()
    {
        return $this->intbconfheadline;
    }

    /**
     * Get the [intbconfheadcols] column value.
     *
     * @return int
     */
    public function getIntbconfheadcols()
    {
        return $this->intbconfheadcols;
    }

    /**
     * Get the [intbconfdetline] column value.
     *
     * @return int
     */
    public function getIntbconfdetline()
    {
        return $this->intbconfdetline;
    }

    /**
     * Get the [intbconfdetcols] column value.
     *
     * @return int
     */
    public function getIntbconfdetcols()
    {
        return $this->intbconfdetcols;
    }

    /**
     * Get the [intbconfminmaxzero] column value.
     *
     * @return string
     */
    public function getIntbconfminmaxzero()
    {
        return $this->intbconfminmaxzero;
    }

    /**
     * Get the [intbconfminrec] column value.
     *
     * @return string
     */
    public function getIntbconfminrec()
    {
        return $this->intbconfminrec;
    }

    /**
     * Get the [intbconfatbelowmin] column value.
     *
     * @return string
     */
    public function getIntbconfatbelowmin()
    {
        return $this->intbconfatbelowmin;
    }

    /**
     * Get the [intbconfonewhse] column value.
     *
     * @return string
     */
    public function getIntbconfonewhse()
    {
        return $this->intbconfonewhse;
    }

    /**
     * Get the [intbconfytdmth] column value.
     *
     * @return int
     */
    public function getIntbconfytdmth()
    {
        return $this->intbconfytdmth;
    }

    /**
     * Get the [intbconfusegramsltr] column value.
     *
     * @return string
     */
    public function getIntbconfusegramsltr()
    {
        return $this->intbconfusegramsltr;
    }

    /**
     * Get the [intbconfabcbywhse] column value.
     *
     * @return string
     */
    public function getIntbconfabcbywhse()
    {
        return $this->intbconfabcbywhse;
    }

    /**
     * Get the [intbconfabcnbrmths] column value.
     *
     * @return int
     */
    public function getIntbconfabcnbrmths()
    {
        return $this->intbconfabcnbrmths;
    }

    /**
     * Get the [intbconfabcbasecode] column value.
     *
     * @return string
     */
    public function getIntbconfabcbasecode()
    {
        return $this->intbconfabcbasecode;
    }

    /**
     * Get the [intbconfabclevla] column value.
     *
     * @return string
     */
    public function getIntbconfabclevla()
    {
        return $this->intbconfabclevla;
    }

    /**
     * Get the [intbconfabclevlb] column value.
     *
     * @return string
     */
    public function getIntbconfabclevlb()
    {
        return $this->intbconfabclevlb;
    }

    /**
     * Get the [intbconfabclevlc] column value.
     *
     * @return string
     */
    public function getIntbconfabclevlc()
    {
        return $this->intbconfabclevlc;
    }

    /**
     * Get the [intbconfabclevld] column value.
     *
     * @return string
     */
    public function getIntbconfabclevld()
    {
        return $this->intbconfabclevld;
    }

    /**
     * Get the [intbconfabclevle] column value.
     *
     * @return string
     */
    public function getIntbconfabclevle()
    {
        return $this->intbconfabclevle;
    }

    /**
     * Get the [intbconfabclevlf] column value.
     *
     * @return string
     */
    public function getIntbconfabclevlf()
    {
        return $this->intbconfabclevlf;
    }

    /**
     * Get the [intbconfabclevlg] column value.
     *
     * @return string
     */
    public function getIntbconfabclevlg()
    {
        return $this->intbconfabclevlg;
    }

    /**
     * Get the [intbconfabclevlh] column value.
     *
     * @return string
     */
    public function getIntbconfabclevlh()
    {
        return $this->intbconfabclevlh;
    }

    /**
     * Get the [intbconfabclevli] column value.
     *
     * @return string
     */
    public function getIntbconfabclevli()
    {
        return $this->intbconfabclevli;
    }

    /**
     * Get the [intbconfabclevlj] column value.
     *
     * @return string
     */
    public function getIntbconfabclevlj()
    {
        return $this->intbconfabclevlj;
    }

    /**
     * Get the [intbconfuseforeignx] column value.
     *
     * @return string
     */
    public function getIntbconfuseforeignx()
    {
        return $this->intbconfuseforeignx;
    }

    /**
     * Get the [intbconfusenafta] column value.
     *
     * @return string
     */
    public function getIntbconfusenafta()
    {
        return $this->intbconfusenafta;
    }

    /**
     * Get the [intbconfnaftaprefcode] column value.
     *
     * @return string
     */
    public function getIntbconfnaftaprefcode()
    {
        return $this->intbconfnaftaprefcode;
    }

    /**
     * Get the [intbconfnaftaproducer] column value.
     *
     * @return string
     */
    public function getIntbconfnaftaproducer()
    {
        return $this->intbconfnaftaproducer;
    }

    /**
     * Get the [intbconfnaftadoccode] column value.
     *
     * @return string
     */
    public function getIntbconfnaftadoccode()
    {
        return $this->intbconfnaftadoccode;
    }

    /**
     * Get the [intbconfphyscurrwksh] column value.
     *
     * @return string
     */
    public function getIntbconfphyscurrwksh()
    {
        return $this->intbconfphyscurrwksh;
    }

    /**
     * Get the [intbconf20or30] column value.
     *
     * @return int
     */
    public function getIntbconf20or30()
    {
        return $this->intbconf20or30;
    }

    /**
     * Get the [intbconfdisporigcnt] column value.
     *
     * @return string
     */
    public function getIntbconfdisporigcnt()
    {
        return $this->intbconfdisporigcnt;
    }

    /**
     * Get the [intbconfdispgl] column value.
     *
     * @return string
     */
    public function getIntbconfdispgl()
    {
        return $this->intbconfdispgl;
    }

    /**
     * Get the [intbconfdispref] column value.
     *
     * @return string
     */
    public function getIntbconfdispref()
    {
        return $this->intbconfdispref;
    }

    /**
     * Get the [intbconfdispcost] column value.
     *
     * @return string
     */
    public function getIntbconfdispcost()
    {
        return $this->intbconfdispcost;
    }

    /**
     * Get the [intbconfprtval] column value.
     *
     * @return string
     */
    public function getIntbconfprtval()
    {
        return $this->intbconfprtval;
    }

    /**
     * Get the [intbconfprtgl] column value.
     *
     * @return string
     */
    public function getIntbconfprtgl()
    {
        return $this->intbconfprtgl;
    }

    /**
     * Get the [intbconfglacct] column value.
     *
     * @return string
     */
    public function getIntbconfglacct()
    {
        return $this->intbconfglacct;
    }

    /**
     * Get the [intbconfref] column value.
     *
     * @return string
     */
    public function getIntbconfref()
    {
        return $this->intbconfref;
    }

    /**
     * Get the [intbconfcosttype] column value.
     *
     * @return string
     */
    public function getIntbconfcosttype()
    {
        return $this->intbconfcosttype;
    }

    /**
     * Get the [intbconfnormalonly] column value.
     *
     * @return string
     */
    public function getIntbconfnormalonly()
    {
        return $this->intbconfnormalonly;
    }

    /**
     * Get the [intbconfusewhsedef] column value.
     *
     * @return string
     */
    public function getIntbconfusewhsedef()
    {
        return $this->intbconfusewhsedef;
    }

    /**
     * Get the [intbcon2dfltwhse01] column value.
     *
     * @return string
     */
    public function getIntbcon2dfltwhse01()
    {
        return $this->intbcon2dfltwhse01;
    }

    /**
     * Get the [intbcon2dfltwhse02] column value.
     *
     * @return string
     */
    public function getIntbcon2dfltwhse02()
    {
        return $this->intbcon2dfltwhse02;
    }

    /**
     * Get the [intbcon2dfltwhse03] column value.
     *
     * @return string
     */
    public function getIntbcon2dfltwhse03()
    {
        return $this->intbcon2dfltwhse03;
    }

    /**
     * Get the [intbcon2dfltwhse04] column value.
     *
     * @return string
     */
    public function getIntbcon2dfltwhse04()
    {
        return $this->intbcon2dfltwhse04;
    }

    /**
     * Get the [intbcon2dfltwhse05] column value.
     *
     * @return string
     */
    public function getIntbcon2dfltwhse05()
    {
        return $this->intbcon2dfltwhse05;
    }

    /**
     * Get the [intbcon2dfltwhse06] column value.
     *
     * @return string
     */
    public function getIntbcon2dfltwhse06()
    {
        return $this->intbcon2dfltwhse06;
    }

    /**
     * Get the [intbcon2dfltwhse07] column value.
     *
     * @return string
     */
    public function getIntbcon2dfltwhse07()
    {
        return $this->intbcon2dfltwhse07;
    }

    /**
     * Get the [intbcon2dfltwhse08] column value.
     *
     * @return string
     */
    public function getIntbcon2dfltwhse08()
    {
        return $this->intbcon2dfltwhse08;
    }

    /**
     * Get the [intbcon2dfltwhse09] column value.
     *
     * @return string
     */
    public function getIntbcon2dfltwhse09()
    {
        return $this->intbcon2dfltwhse09;
    }

    /**
     * Get the [intbcon2dfltwhse10] column value.
     *
     * @return string
     */
    public function getIntbcon2dfltwhse10()
    {
        return $this->intbcon2dfltwhse10;
    }

    /**
     * Get the [intbconfbindef] column value.
     *
     * @return string
     */
    public function getIntbconfbindef()
    {
        return $this->intbconfbindef;
    }

    /**
     * Get the [intbconfcycldef] column value.
     *
     * @return string
     */
    public function getIntbconfcycldef()
    {
        return $this->intbconfcycldef;
    }

    /**
     * Get the [intbconfstatdef] column value.
     *
     * @return string
     */
    public function getIntbconfstatdef()
    {
        return $this->intbconfstatdef;
    }

    /**
     * Get the [intbconfabcdef] column value.
     *
     * @return string
     */
    public function getIntbconfabcdef()
    {
        return $this->intbconfabcdef;
    }

    /**
     * Get the [intbconfspecordrdef] column value.
     *
     * @return string
     */
    public function getIntbconfspecordrdef()
    {
        return $this->intbconfspecordrdef;
    }

    /**
     * Get the [intbconfordrpntdef] column value.
     *
     * @return string
     */
    public function getIntbconfordrpntdef()
    {
        return $this->intbconfordrpntdef;
    }

    /**
     * Get the [intbconfmaxdef] column value.
     *
     * @return string
     */
    public function getIntbconfmaxdef()
    {
        return $this->intbconfmaxdef;
    }

    /**
     * Get the [intbconfordrqtydef] column value.
     *
     * @return string
     */
    public function getIntbconfordrqtydef()
    {
        return $this->intbconfordrqtydef;
    }

    /**
     * Get the [intbconftrcptallowcmpl] column value.
     *
     * @return string
     */
    public function getIntbconftrcptallowcmpl()
    {
        return $this->intbconftrcptallowcmpl;
    }

    /**
     * Get the [intbconftrecmmtstock] column value.
     *
     * @return string
     */
    public function getIntbconftrecmmtstock()
    {
        return $this->intbconftrecmmtstock;
    }

    /**
     * Get the [intbconfusefrtin] column value.
     *
     * @return string
     */
    public function getIntbconfusefrtin()
    {
        return $this->intbconfusefrtin;
    }

    /**
     * Get the [intbconfeachoruom] column value.
     *
     * @return string
     */
    public function getIntbconfeachoruom()
    {
        return $this->intbconfeachoruom;
    }

    /**
     * Get the [intbconfneglotcorr] column value.
     *
     * @return string
     */
    public function getIntbconfneglotcorr()
    {
        return $this->intbconfneglotcorr;
    }

    /**
     * Get the [intbconftrnsglacct] column value.
     *
     * @return string
     */
    public function getIntbconftrnsglacct()
    {
        return $this->intbconftrnsglacct;
    }

    /**
     * Get the [intbconftrnsprotstock] column value.
     *
     * @return string
     */
    public function getIntbconftrnsprotstock()
    {
        return $this->intbconftrnsprotstock;
    }

    /**
     * Get the [intbconfnumericitem] column value.
     *
     * @return string
     */
    public function getIntbconfnumericitem()
    {
        return $this->intbconfnumericitem;
    }

    /**
     * Get the [intbconfitemdigits] column value.
     *
     * @return int
     */
    public function getIntbconfitemdigits()
    {
        return $this->intbconfitemdigits;
    }

    /**
     * Get the [intbconfsinglewhse] column value.
     *
     * @return string
     */
    public function getIntbconfsinglewhse()
    {
        return $this->intbconfsinglewhse;
    }

    /**
     * Get the [intbconfupdusepct] column value.
     *
     * @return string
     */
    public function getIntbconfupdusepct()
    {
        return $this->intbconfupdusepct;
    }

    /**
     * Get the [intbconfupdpric] column value.
     *
     * @return string
     */
    public function getIntbconfupdpric()
    {
        return $this->intbconfupdpric;
    }

    /**
     * Get the [intbconfupdstdcost] column value.
     *
     * @return string
     */
    public function getIntbconfupdstdcost()
    {
        return $this->intbconfupdstdcost;
    }

    /**
     * Get the [intbconfupdxrefcost] column value.
     *
     * @return string
     */
    public function getIntbconfupdxrefcost()
    {
        return $this->intbconfupdxrefcost;
    }

    /**
     * Get the [intbconfiqpaupddate] column value.
     *
     * @return string
     */
    public function getIntbconfiqpaupddate()
    {
        return $this->intbconfiqpaupddate;
    }

    /**
     * Get the [intbconfupcxrefoptn] column value.
     *
     * @return string
     */
    public function getIntbconfupcxrefoptn()
    {
        return $this->intbconfupcxrefoptn;
    }

    /**
     * Get the [intbconfresqyn] column value.
     *
     * @return string
     */
    public function getIntbconfresqyn()
    {
        return $this->intbconfresqyn;
    }

    /**
     * Get the [intbconfresqitembin] column value.
     *
     * @return string
     */
    public function getIntbconfresqitembin()
    {
        return $this->intbconfresqitembin;
    }

    /**
     * Get the [intbconfresvcost] column value.
     *
     * @return string
     */
    public function getIntbconfresvcost()
    {
        return $this->intbconfresvcost;
    }

    /**
     * Get the [intbcon2tranzerorqst] column value.
     *
     * @return string
     */
    public function getIntbcon2tranzerorqst()
    {
        return $this->intbcon2tranzerorqst;
    }

    /**
     * Get the [intbconfmonendadjdate] column value.
     *
     * @return string
     */
    public function getIntbconfmonendadjdate()
    {
        return $this->intbconfmonendadjdate;
    }

    /**
     * Get the [intbconfmonendtrndate] column value.
     *
     * @return string
     */
    public function getIntbconfmonendtrndate()
    {
        return $this->intbconfmonendtrndate;
    }

    /**
     * Get the [intbconfmonendlogdate] column value.
     *
     * @return string
     */
    public function getIntbconfmonendlogdate()
    {
        return $this->intbconfmonendlogdate;
    }

    /**
     * Get the [intbconfdstatproc] column value.
     *
     * @return string
     */
    public function getIntbconfdstatproc()
    {
        return $this->intbconfdstatproc;
    }

    /**
     * Get the [intbconfstancostupd] column value.
     *
     * @return string
     */
    public function getIntbconfstancostupd()
    {
        return $this->intbconfstancostupd;
    }

    /**
     * Get the [intbconflastcost] column value.
     *
     * @return string
     */
    public function getIntbconflastcost()
    {
        return $this->intbconflastcost;
    }

    /**
     * Get the [intbconfusesorgpct] column value.
     *
     * @return string
     */
    public function getIntbconfusesorgpct()
    {
        return $this->intbconfusesorgpct;
    }

    /**
     * Get the [intbconfaddonstan] column value.
     *
     * @return string
     */
    public function getIntbconfaddonstan()
    {
        return $this->intbconfaddonstan;
    }

    /**
     * Get the [intbconfstdcosterror] column value.
     *
     * @return string
     */
    public function getIntbconfstdcosterror()
    {
        return $this->intbconfstdcosterror;
    }

    /**
     * Get the [intbconfavgcurrfive] column value.
     *
     * @return string
     */
    public function getIntbconfavgcurrfive()
    {
        return $this->intbconfavgcurrfive;
    }

    /**
     * Get the [intbconfusecntrlbin] column value.
     *
     * @return string
     */
    public function getIntbconfusecntrlbin()
    {
        return $this->intbconfusecntrlbin;
    }

    /**
     * Get the [intbconfnbrbinareas] column value.
     *
     * @return int
     */
    public function getIntbconfnbrbinareas()
    {
        return $this->intbconfnbrbinareas;
    }

    /**
     * Get the [intbconfusemultbin] column value.
     *
     * @return string
     */
    public function getIntbconfusemultbin()
    {
        return $this->intbconfusemultbin;
    }

    /**
     * Get the [intbconfdfltwhsebin] column value.
     *
     * @return string
     */
    public function getIntbconfdfltwhsebin()
    {
        return $this->intbconfdfltwhsebin;
    }

    /**
     * Get the [intbconfdfltbin] column value.
     *
     * @return string
     */
    public function getIntbconfdfltbin()
    {
        return $this->intbconfdfltbin;
    }

    /**
     * Get the [intbconfctryitemlot] column value.
     *
     * @return string
     */
    public function getIntbconfctryitemlot()
    {
        return $this->intbconfctryitemlot;
    }

    /**
     * Get the [intbconfuseshipbin] column value.
     *
     * @return string
     */
    public function getIntbconfuseshipbin()
    {
        return $this->intbconfuseshipbin;
    }

    /**
     * Get the [intbcon2prtbinrlabel] column value.
     *
     * @return string
     */
    public function getIntbcon2prtbinrlabel()
    {
        return $this->intbcon2prtbinrlabel;
    }

    /**
     * Get the [intbcon2itemlookup] column value.
     *
     * @return string
     */
    public function getIntbcon2itemlookup()
    {
        return $this->intbcon2itemlookup;
    }

    /**
     * Get the [intbconfincldcti] column value.
     *
     * @return string
     */
    public function getIntbconfincldcti()
    {
        return $this->intbconfincldcti;
    }

    /**
     * Get the [intbconfcertimage] column value.
     *
     * @return string
     */
    public function getIntbconfcertimage()
    {
        return $this->intbconfcertimage;
    }

    /**
     * Get the [intbconfdrawimage] column value.
     *
     * @return string
     */
    public function getIntbconfdrawimage()
    {
        return $this->intbconfdrawimage;
    }

    /**
     * Get the [intbconfconfirmimage] column value.
     *
     * @return string
     */
    public function getIntbconfconfirmimage()
    {
        return $this->intbconfconfirmimage;
    }

    /**
     * Get the [intbcon2productimage] column value.
     *
     * @return string
     */
    public function getIntbcon2productimage()
    {
        return $this->intbcon2productimage;
    }

    /**
     * Get the [intbconfdefpick] column value.
     *
     * @return string
     */
    public function getIntbconfdefpick()
    {
        return $this->intbconfdefpick;
    }

    /**
     * Get the [intbconfdefpack] column value.
     *
     * @return string
     */
    public function getIntbconfdefpack()
    {
        return $this->intbconfdefpack;
    }

    /**
     * Get the [intbconfdefinvc] column value.
     *
     * @return string
     */
    public function getIntbconfdefinvc()
    {
        return $this->intbconfdefinvc;
    }

    /**
     * Get the [intbconfdefack] column value.
     *
     * @return string
     */
    public function getIntbconfdefack()
    {
        return $this->intbconfdefack;
    }

    /**
     * Get the [intbconfdefquot] column value.
     *
     * @return string
     */
    public function getIntbconfdefquot()
    {
        return $this->intbconfdefquot;
    }

    /**
     * Get the [intbconfdefpo] column value.
     *
     * @return string
     */
    public function getIntbconfdefpo()
    {
        return $this->intbconfdefpo;
    }

    /**
     * Get the [intbconfdeftrans] column value.
     *
     * @return string
     */
    public function getIntbconfdeftrans()
    {
        return $this->intbconfdeftrans;
    }

    /**
     * Get the [intbconfadjglcogs] column value.
     *
     * @return string
     */
    public function getIntbconfadjglcogs()
    {
        return $this->intbconfadjglcogs;
    }

    /**
     * Get the [intbcon2dfltadjglacct] column value.
     *
     * @return string
     */
    public function getIntbcon2dfltadjglacct()
    {
        return $this->intbcon2dfltadjglacct;
    }

    /**
     * Get the [intbconfadjcostbase] column value.
     *
     * @return string
     */
    public function getIntbconfadjcostbase()
    {
        return $this->intbconfadjcostbase;
    }

    /**
     * Get the [intbconfdfltadjtbin] column value.
     *
     * @return string
     */
    public function getIntbconfdfltadjtbin()
    {
        return $this->intbconfdfltadjtbin;
    }

    /**
     * Get the [intbconfadjtbin] column value.
     *
     * @return string
     */
    public function getIntbconfadjtbin()
    {
        return $this->intbconfadjtbin;
    }

    /**
     * Get the [intbconfcstockseq] column value.
     *
     * @return string
     */
    public function getIntbconfcstockseq()
    {
        return $this->intbconfcstockseq;
    }

    /**
     * Get the [intbconfcstockhistday] column value.
     *
     * @return int
     */
    public function getIntbconfcstockhistday()
    {
        return $this->intbconfcstockhistday;
    }

    /**
     * Get the [intbconfcstockformat] column value.
     *
     * @return string
     */
    public function getIntbconfcstockformat()
    {
        return $this->intbconfcstockformat;
    }

    /**
     * Get the [intbconfcstkexportitem] column value.
     *
     * @return string
     */
    public function getIntbconfcstkexportitem()
    {
        return $this->intbconfcstkexportitem;
    }

    /**
     * Get the [intbconfcstkpdmcontract] column value.
     *
     * @return string
     */
    public function getIntbconfcstkpdmcontract()
    {
        return $this->intbconfcstkpdmcontract;
    }

    /**
     * Get the [intbcon2importseq] column value.
     *
     * @return string
     */
    public function getIntbcon2importseq()
    {
        return $this->intbcon2importseq;
    }

    /**
     * Get the [intbconfstopitemchg] column value.
     *
     * @return int
     */
    public function getIntbconfstopitemchg()
    {
        return $this->intbconfstopitemchg;
    }

    /**
     * Get the [intbconfaddtomxrfe] column value.
     *
     * @return string
     */
    public function getIntbconfaddtomxrfe()
    {
        return $this->intbconfaddtomxrfe;
    }

    /**
     * Get the [intbconfmxrfevendid] column value.
     *
     * @return string
     */
    public function getIntbconfmxrfevendid()
    {
        return $this->intbconfmxrfevendid;
    }

    /**
     * Get the [intbcon2newidlabellist] column value.
     *
     * @return string
     */
    public function getIntbcon2newidlabellist()
    {
        return $this->intbcon2newidlabellist;
    }

    /**
     * Get the [intbconfuseformat] column value.
     *
     * @return string
     */
    public function getIntbconfuseformat()
    {
        return $this->intbconfuseformat;
    }

    /**
     * Get the [intbconfdefformat] column value.
     *
     * @return string
     */
    public function getIntbconfdefformat()
    {
        return $this->intbconfdefformat;
    }

    /**
     * Get the [intbconfseqshortitem] column value.
     *
     * @return string
     */
    public function getIntbconfseqshortitem()
    {
        return $this->intbconfseqshortitem;
    }

    /**
     * Get the [intbconfshortitemlen] column value.
     *
     * @return int
     */
    public function getIntbconfshortitemlen()
    {
        return $this->intbconfshortitemlen;
    }

    /**
     * Get the [intbconfusescale] column value.
     *
     * @return string
     */
    public function getIntbconfusescale()
    {
        return $this->intbconfusescale;
    }

    /**
     * Get the [intbconfstorewght] column value.
     *
     * @return string
     */
    public function getIntbconfstorewght()
    {
        return $this->intbconfstorewght;
    }

    /**
     * Get the [intbconfvalidasstcode] column value.
     *
     * @return string
     */
    public function getIntbconfvalidasstcode()
    {
        return $this->intbconfvalidasstcode;
    }

    /**
     * Get the [intbconfwhitegoods] column value.
     *
     * @return string
     */
    public function getIntbconfwhitegoods()
    {
        return $this->intbconfwhitegoods;
    }

    /**
     * Get the [intbcon2transcustid] column value.
     *
     * @return string
     */
    public function getIntbcon2transcustid()
    {
        return $this->intbcon2transcustid;
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
     * Set the value of [intbconfkey] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfkey($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfkey !== $v) {
            $this->intbconfkey = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFKEY] = true;
        }

        return $this;
    } // setIntbconfkey()

    /**
     * Set the value of [intbconfglifac] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfglifac($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfglifac !== $v) {
            $this->intbconfglifac = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFGLIFAC] = true;
        }

        return $this;
    } // setIntbconfglifac()

    /**
     * Set the value of [intbconfuseiw] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfuseiw($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfuseiw !== $v) {
            $this->intbconfuseiw = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSEIW] = true;
        }

        return $this;
    } // setIntbconfuseiw()

    /**
     * Set the value of [intbconflifofifo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconflifofifo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconflifofifo !== $v) {
            $this->intbconflifofifo = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFLIFOFIFO] = true;
        }

        return $this;
    } // setIntbconflifofifo()

    /**
     * Set the value of [intbconfgoneg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfgoneg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfgoneg !== $v) {
            $this->intbconfgoneg = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFGONEG] = true;
        }

        return $this;
    } // setIntbconfgoneg()

    /**
     * Set the value of [intbconfuselots] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfuselots($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfuselots !== $v) {
            $this->intbconfuselots = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSELOTS] = true;
        }

        return $this;
    } // setIntbconfuselots()

    /**
     * Set the value of [intbconfnbruppr] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfnbruppr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfnbruppr !== $v) {
            $this->intbconfnbruppr = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFNBRUPPR] = true;
        }

        return $this;
    } // setIntbconfnbruppr()

    /**
     * Set the value of [intbconfdescuppr] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdescuppr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdescuppr !== $v) {
            $this->intbconfdescuppr = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDESCUPPR] = true;
        }

        return $this;
    } // setIntbconfdescuppr()

    /**
     * Set the value of [intbconfusedesc2] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusedesc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusedesc2 !== $v) {
            $this->intbconfusedesc2 = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSEDESC2] = true;
        }

        return $this;
    } // setIntbconfusedesc2()

    /**
     * Set the value of [intbconfuseupccode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfuseupccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfuseupccode !== $v) {
            $this->intbconfuseupccode = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSEUPCCODE] = true;
        }

        return $this;
    } // setIntbconfuseupccode()

    /**
     * Set the value of [intbconfupceancntrl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfupceancntrl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfupceancntrl !== $v) {
            $this->intbconfupceancntrl = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUPCEANCNTRL] = true;
        }

        return $this;
    } // setIntbconfupceancntrl()

    /**
     * Set the value of [intbconfupcgennbr] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfupcgennbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfupcgennbr !== $v) {
            $this->intbconfupcgennbr = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUPCGENNBR] = true;
        }

        return $this;
    } // setIntbconfupcgennbr()

    /**
     * Set the value of [intbcon2allowdupupc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2allowdupupc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2allowdupupc !== $v) {
            $this->intbcon2allowdupupc = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2ALLOWDUPUPC] = true;
        }

        return $this;
    } // setIntbcon2allowdupupc()

    /**
     * Set the value of [intbconfxrefnospace] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfxrefnospace($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfxrefnospace !== $v) {
            $this->intbconfxrefnospace = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFXREFNOSPACE] = true;
        }

        return $this;
    } // setIntbconfxrefnospace()

    /**
     * Set the value of [intbconfusepricgrup] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusepricgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusepricgrup !== $v) {
            $this->intbconfusepricgrup = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSEPRICGRUP] = true;
        }

        return $this;
    } // setIntbconfusepricgrup()

    /**
     * Set the value of [intbconfusecommgrup] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusecommgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusecommgrup !== $v) {
            $this->intbconfusecommgrup = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSECOMMGRUP] = true;
        }

        return $this;
    } // setIntbconfusecommgrup()

    /**
     * Set the value of [intbconfusewarrdays] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusewarrdays($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusewarrdays !== $v) {
            $this->intbconfusewarrdays = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSEWARRDAYS] = true;
        }

        return $this;
    } // setIntbconfusewarrdays()

    /**
     * Set the value of [intbconfstanbasedef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfstanbasedef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfstanbasedef !== $v) {
            $this->intbconfstanbasedef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFSTANBASEDEF] = true;
        }

        return $this;
    } // setIntbconfstanbasedef()

    /**
     * Set the value of [intbconfgrupdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfgrupdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfgrupdef !== $v) {
            $this->intbconfgrupdef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFGRUPDEF] = true;
        }

        return $this;
    } // setIntbconfgrupdef()

    /**
     * Set the value of [intbconfpricgrupdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfpricgrupdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfpricgrupdef !== $v) {
            $this->intbconfpricgrupdef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFPRICGRUPDEF] = true;
        }

        return $this;
    } // setIntbconfpricgrupdef()

    /**
     * Set the value of [intbconfcommgrupdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfcommgrupdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfcommgrupdef !== $v) {
            $this->intbconfcommgrupdef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFCOMMGRUPDEF] = true;
        }

        return $this;
    } // setIntbconfcommgrupdef()

    /**
     * Set the value of [intbconftypedef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconftypedef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconftypedef !== $v) {
            $this->intbconftypedef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFTYPEDEF] = true;
        }

        return $this;
    } // setIntbconftypedef()

    /**
     * Set the value of [intbconfpricuseitem] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfpricuseitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfpricuseitem !== $v) {
            $this->intbconfpricuseitem = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFPRICUSEITEM] = true;
        }

        return $this;
    } // setIntbconfpricuseitem()

    /**
     * Set the value of [intbconfcommuseitem] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfcommuseitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfcommuseitem !== $v) {
            $this->intbconfcommuseitem = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFCOMMUSEITEM] = true;
        }

        return $this;
    } // setIntbconfcommuseitem()

    /**
     * Set the value of [intbconfuomsaledef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfuomsaledef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfuomsaledef !== $v) {
            $this->intbconfuomsaledef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUOMSALEDEF] = true;
        }

        return $this;
    } // setIntbconfuomsaledef()

    /**
     * Set the value of [intbconfuompurdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfuompurdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfuompurdef !== $v) {
            $this->intbconfuompurdef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUOMPURDEF] = true;
        }

        return $this;
    } // setIntbconfuompurdef()

    /**
     * Set the value of [intbconfsviadef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfsviadef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfsviadef !== $v) {
            $this->intbconfsviadef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFSVIADEF] = true;
        }

        return $this;
    } // setIntbconfsviadef()

    /**
     * Set the value of [intbconfcustxreforuse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfcustxreforuse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfcustxreforuse !== $v) {
            $this->intbconfcustxreforuse = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFCUSTXREFORUSE] = true;
        }

        return $this;
    } // setIntbconfcustxreforuse()

    /**
     * Set the value of [intbconfheadgetdef] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfheadgetdef($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfheadgetdef !== $v) {
            $this->intbconfheadgetdef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFHEADGETDEF] = true;
        }

        return $this;
    } // setIntbconfheadgetdef()

    /**
     * Set the value of [intbconfitemgetdef] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfitemgetdef($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfitemgetdef !== $v) {
            $this->intbconfitemgetdef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFITEMGETDEF] = true;
        }

        return $this;
    } // setIntbconfitemgetdef()

    /**
     * Set the value of [intbconfgetdispohaval] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfgetdispohaval($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfgetdispohaval !== $v) {
            $this->intbconfgetdispohaval = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFGETDISPOHAVAL] = true;
        }

        return $this;
    } // setIntbconfgetdispohaval()

    /**
     * Set the value of [intbconfusercode1labl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusercode1labl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusercode1labl !== $v) {
            $this->intbconfusercode1labl = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSERCODE1LABL] = true;
        }

        return $this;
    } // setIntbconfusercode1labl()

    /**
     * Set the value of [intbconfusercode1ver] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusercode1ver($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusercode1ver !== $v) {
            $this->intbconfusercode1ver = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSERCODE1VER] = true;
        }

        return $this;
    } // setIntbconfusercode1ver()

    /**
     * Set the value of [intbconfusercode2labl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusercode2labl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusercode2labl !== $v) {
            $this->intbconfusercode2labl = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSERCODE2LABL] = true;
        }

        return $this;
    } // setIntbconfusercode2labl()

    /**
     * Set the value of [intbconfusercode2ver] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusercode2ver($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusercode2ver !== $v) {
            $this->intbconfusercode2ver = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSERCODE2VER] = true;
        }

        return $this;
    } // setIntbconfusercode2ver()

    /**
     * Set the value of [intbconfitemline] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfitemline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfitemline !== $v) {
            $this->intbconfitemline = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFITEMLINE] = true;
        }

        return $this;
    } // setIntbconfitemline()

    /**
     * Set the value of [intbconfitemcols] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfitemcols($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfitemcols !== $v) {
            $this->intbconfitemcols = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFITEMCOLS] = true;
        }

        return $this;
    } // setIntbconfitemcols()

    /**
     * Set the value of [intbconfheadline] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfheadline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfheadline !== $v) {
            $this->intbconfheadline = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFHEADLINE] = true;
        }

        return $this;
    } // setIntbconfheadline()

    /**
     * Set the value of [intbconfheadcols] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfheadcols($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfheadcols !== $v) {
            $this->intbconfheadcols = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFHEADCOLS] = true;
        }

        return $this;
    } // setIntbconfheadcols()

    /**
     * Set the value of [intbconfdetline] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdetline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfdetline !== $v) {
            $this->intbconfdetline = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDETLINE] = true;
        }

        return $this;
    } // setIntbconfdetline()

    /**
     * Set the value of [intbconfdetcols] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdetcols($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfdetcols !== $v) {
            $this->intbconfdetcols = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDETCOLS] = true;
        }

        return $this;
    } // setIntbconfdetcols()

    /**
     * Set the value of [intbconfminmaxzero] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfminmaxzero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfminmaxzero !== $v) {
            $this->intbconfminmaxzero = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFMINMAXZERO] = true;
        }

        return $this;
    } // setIntbconfminmaxzero()

    /**
     * Set the value of [intbconfminrec] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfminrec($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfminrec !== $v) {
            $this->intbconfminrec = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFMINREC] = true;
        }

        return $this;
    } // setIntbconfminrec()

    /**
     * Set the value of [intbconfatbelowmin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfatbelowmin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfatbelowmin !== $v) {
            $this->intbconfatbelowmin = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFATBELOWMIN] = true;
        }

        return $this;
    } // setIntbconfatbelowmin()

    /**
     * Set the value of [intbconfonewhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfonewhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfonewhse !== $v) {
            $this->intbconfonewhse = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFONEWHSE] = true;
        }

        return $this;
    } // setIntbconfonewhse()

    /**
     * Set the value of [intbconfytdmth] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfytdmth($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfytdmth !== $v) {
            $this->intbconfytdmth = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFYTDMTH] = true;
        }

        return $this;
    } // setIntbconfytdmth()

    /**
     * Set the value of [intbconfusegramsltr] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusegramsltr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusegramsltr !== $v) {
            $this->intbconfusegramsltr = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSEGRAMSLTR] = true;
        }

        return $this;
    } // setIntbconfusegramsltr()

    /**
     * Set the value of [intbconfabcbywhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabcbywhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfabcbywhse !== $v) {
            $this->intbconfabcbywhse = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCBYWHSE] = true;
        }

        return $this;
    } // setIntbconfabcbywhse()

    /**
     * Set the value of [intbconfabcnbrmths] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabcnbrmths($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfabcnbrmths !== $v) {
            $this->intbconfabcnbrmths = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCNBRMTHS] = true;
        }

        return $this;
    } // setIntbconfabcnbrmths()

    /**
     * Set the value of [intbconfabcbasecode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabcbasecode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfabcbasecode !== $v) {
            $this->intbconfabcbasecode = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCBASECODE] = true;
        }

        return $this;
    } // setIntbconfabcbasecode()

    /**
     * Set the value of [intbconfabclevla] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabclevla($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfabclevla !== $v) {
            $this->intbconfabclevla = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCLEVLA] = true;
        }

        return $this;
    } // setIntbconfabclevla()

    /**
     * Set the value of [intbconfabclevlb] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabclevlb($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfabclevlb !== $v) {
            $this->intbconfabclevlb = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCLEVLB] = true;
        }

        return $this;
    } // setIntbconfabclevlb()

    /**
     * Set the value of [intbconfabclevlc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabclevlc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfabclevlc !== $v) {
            $this->intbconfabclevlc = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCLEVLC] = true;
        }

        return $this;
    } // setIntbconfabclevlc()

    /**
     * Set the value of [intbconfabclevld] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabclevld($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfabclevld !== $v) {
            $this->intbconfabclevld = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCLEVLD] = true;
        }

        return $this;
    } // setIntbconfabclevld()

    /**
     * Set the value of [intbconfabclevle] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabclevle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfabclevle !== $v) {
            $this->intbconfabclevle = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCLEVLE] = true;
        }

        return $this;
    } // setIntbconfabclevle()

    /**
     * Set the value of [intbconfabclevlf] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabclevlf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfabclevlf !== $v) {
            $this->intbconfabclevlf = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCLEVLF] = true;
        }

        return $this;
    } // setIntbconfabclevlf()

    /**
     * Set the value of [intbconfabclevlg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabclevlg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfabclevlg !== $v) {
            $this->intbconfabclevlg = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCLEVLG] = true;
        }

        return $this;
    } // setIntbconfabclevlg()

    /**
     * Set the value of [intbconfabclevlh] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabclevlh($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfabclevlh !== $v) {
            $this->intbconfabclevlh = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCLEVLH] = true;
        }

        return $this;
    } // setIntbconfabclevlh()

    /**
     * Set the value of [intbconfabclevli] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabclevli($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfabclevli !== $v) {
            $this->intbconfabclevli = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCLEVLI] = true;
        }

        return $this;
    } // setIntbconfabclevli()

    /**
     * Set the value of [intbconfabclevlj] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabclevlj($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfabclevlj !== $v) {
            $this->intbconfabclevlj = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCLEVLJ] = true;
        }

        return $this;
    } // setIntbconfabclevlj()

    /**
     * Set the value of [intbconfuseforeignx] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfuseforeignx($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfuseforeignx !== $v) {
            $this->intbconfuseforeignx = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSEFOREIGNX] = true;
        }

        return $this;
    } // setIntbconfuseforeignx()

    /**
     * Set the value of [intbconfusenafta] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusenafta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusenafta !== $v) {
            $this->intbconfusenafta = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSENAFTA] = true;
        }

        return $this;
    } // setIntbconfusenafta()

    /**
     * Set the value of [intbconfnaftaprefcode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfnaftaprefcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfnaftaprefcode !== $v) {
            $this->intbconfnaftaprefcode = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFNAFTAPREFCODE] = true;
        }

        return $this;
    } // setIntbconfnaftaprefcode()

    /**
     * Set the value of [intbconfnaftaproducer] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfnaftaproducer($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfnaftaproducer !== $v) {
            $this->intbconfnaftaproducer = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFNAFTAPRODUCER] = true;
        }

        return $this;
    } // setIntbconfnaftaproducer()

    /**
     * Set the value of [intbconfnaftadoccode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfnaftadoccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfnaftadoccode !== $v) {
            $this->intbconfnaftadoccode = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFNAFTADOCCODE] = true;
        }

        return $this;
    } // setIntbconfnaftadoccode()

    /**
     * Set the value of [intbconfphyscurrwksh] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfphyscurrwksh($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfphyscurrwksh !== $v) {
            $this->intbconfphyscurrwksh = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFPHYSCURRWKSH] = true;
        }

        return $this;
    } // setIntbconfphyscurrwksh()

    /**
     * Set the value of [intbconf20or30] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconf20or30($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconf20or30 !== $v) {
            $this->intbconf20or30 = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONF20OR30] = true;
        }

        return $this;
    } // setIntbconf20or30()

    /**
     * Set the value of [intbconfdisporigcnt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdisporigcnt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdisporigcnt !== $v) {
            $this->intbconfdisporigcnt = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDISPORIGCNT] = true;
        }

        return $this;
    } // setIntbconfdisporigcnt()

    /**
     * Set the value of [intbconfdispgl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdispgl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdispgl !== $v) {
            $this->intbconfdispgl = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDISPGL] = true;
        }

        return $this;
    } // setIntbconfdispgl()

    /**
     * Set the value of [intbconfdispref] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdispref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdispref !== $v) {
            $this->intbconfdispref = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDISPREF] = true;
        }

        return $this;
    } // setIntbconfdispref()

    /**
     * Set the value of [intbconfdispcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdispcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdispcost !== $v) {
            $this->intbconfdispcost = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDISPCOST] = true;
        }

        return $this;
    } // setIntbconfdispcost()

    /**
     * Set the value of [intbconfprtval] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfprtval($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfprtval !== $v) {
            $this->intbconfprtval = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFPRTVAL] = true;
        }

        return $this;
    } // setIntbconfprtval()

    /**
     * Set the value of [intbconfprtgl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfprtgl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfprtgl !== $v) {
            $this->intbconfprtgl = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFPRTGL] = true;
        }

        return $this;
    } // setIntbconfprtgl()

    /**
     * Set the value of [intbconfglacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfglacct !== $v) {
            $this->intbconfglacct = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFGLACCT] = true;
        }

        return $this;
    } // setIntbconfglacct()

    /**
     * Set the value of [intbconfref] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfref !== $v) {
            $this->intbconfref = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFREF] = true;
        }

        return $this;
    } // setIntbconfref()

    /**
     * Set the value of [intbconfcosttype] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfcosttype($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfcosttype !== $v) {
            $this->intbconfcosttype = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFCOSTTYPE] = true;
        }

        return $this;
    } // setIntbconfcosttype()

    /**
     * Set the value of [intbconfnormalonly] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfnormalonly($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfnormalonly !== $v) {
            $this->intbconfnormalonly = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFNORMALONLY] = true;
        }

        return $this;
    } // setIntbconfnormalonly()

    /**
     * Set the value of [intbconfusewhsedef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusewhsedef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusewhsedef !== $v) {
            $this->intbconfusewhsedef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSEWHSEDEF] = true;
        }

        return $this;
    } // setIntbconfusewhsedef()

    /**
     * Set the value of [intbcon2dfltwhse01] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2dfltwhse01($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2dfltwhse01 !== $v) {
            $this->intbcon2dfltwhse01 = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2DFLTWHSE01] = true;
        }

        return $this;
    } // setIntbcon2dfltwhse01()

    /**
     * Set the value of [intbcon2dfltwhse02] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2dfltwhse02($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2dfltwhse02 !== $v) {
            $this->intbcon2dfltwhse02 = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2DFLTWHSE02] = true;
        }

        return $this;
    } // setIntbcon2dfltwhse02()

    /**
     * Set the value of [intbcon2dfltwhse03] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2dfltwhse03($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2dfltwhse03 !== $v) {
            $this->intbcon2dfltwhse03 = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2DFLTWHSE03] = true;
        }

        return $this;
    } // setIntbcon2dfltwhse03()

    /**
     * Set the value of [intbcon2dfltwhse04] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2dfltwhse04($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2dfltwhse04 !== $v) {
            $this->intbcon2dfltwhse04 = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2DFLTWHSE04] = true;
        }

        return $this;
    } // setIntbcon2dfltwhse04()

    /**
     * Set the value of [intbcon2dfltwhse05] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2dfltwhse05($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2dfltwhse05 !== $v) {
            $this->intbcon2dfltwhse05 = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2DFLTWHSE05] = true;
        }

        return $this;
    } // setIntbcon2dfltwhse05()

    /**
     * Set the value of [intbcon2dfltwhse06] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2dfltwhse06($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2dfltwhse06 !== $v) {
            $this->intbcon2dfltwhse06 = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2DFLTWHSE06] = true;
        }

        return $this;
    } // setIntbcon2dfltwhse06()

    /**
     * Set the value of [intbcon2dfltwhse07] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2dfltwhse07($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2dfltwhse07 !== $v) {
            $this->intbcon2dfltwhse07 = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2DFLTWHSE07] = true;
        }

        return $this;
    } // setIntbcon2dfltwhse07()

    /**
     * Set the value of [intbcon2dfltwhse08] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2dfltwhse08($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2dfltwhse08 !== $v) {
            $this->intbcon2dfltwhse08 = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2DFLTWHSE08] = true;
        }

        return $this;
    } // setIntbcon2dfltwhse08()

    /**
     * Set the value of [intbcon2dfltwhse09] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2dfltwhse09($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2dfltwhse09 !== $v) {
            $this->intbcon2dfltwhse09 = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2DFLTWHSE09] = true;
        }

        return $this;
    } // setIntbcon2dfltwhse09()

    /**
     * Set the value of [intbcon2dfltwhse10] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2dfltwhse10($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2dfltwhse10 !== $v) {
            $this->intbcon2dfltwhse10 = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2DFLTWHSE10] = true;
        }

        return $this;
    } // setIntbcon2dfltwhse10()

    /**
     * Set the value of [intbconfbindef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfbindef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfbindef !== $v) {
            $this->intbconfbindef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFBINDEF] = true;
        }

        return $this;
    } // setIntbconfbindef()

    /**
     * Set the value of [intbconfcycldef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfcycldef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfcycldef !== $v) {
            $this->intbconfcycldef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFCYCLDEF] = true;
        }

        return $this;
    } // setIntbconfcycldef()

    /**
     * Set the value of [intbconfstatdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfstatdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfstatdef !== $v) {
            $this->intbconfstatdef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFSTATDEF] = true;
        }

        return $this;
    } // setIntbconfstatdef()

    /**
     * Set the value of [intbconfabcdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfabcdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfabcdef !== $v) {
            $this->intbconfabcdef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFABCDEF] = true;
        }

        return $this;
    } // setIntbconfabcdef()

    /**
     * Set the value of [intbconfspecordrdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfspecordrdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfspecordrdef !== $v) {
            $this->intbconfspecordrdef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFSPECORDRDEF] = true;
        }

        return $this;
    } // setIntbconfspecordrdef()

    /**
     * Set the value of [intbconfordrpntdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfordrpntdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfordrpntdef !== $v) {
            $this->intbconfordrpntdef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFORDRPNTDEF] = true;
        }

        return $this;
    } // setIntbconfordrpntdef()

    /**
     * Set the value of [intbconfmaxdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfmaxdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfmaxdef !== $v) {
            $this->intbconfmaxdef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFMAXDEF] = true;
        }

        return $this;
    } // setIntbconfmaxdef()

    /**
     * Set the value of [intbconfordrqtydef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfordrqtydef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfordrqtydef !== $v) {
            $this->intbconfordrqtydef = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFORDRQTYDEF] = true;
        }

        return $this;
    } // setIntbconfordrqtydef()

    /**
     * Set the value of [intbconftrcptallowcmpl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconftrcptallowcmpl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconftrcptallowcmpl !== $v) {
            $this->intbconftrcptallowcmpl = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFTRCPTALLOWCMPL] = true;
        }

        return $this;
    } // setIntbconftrcptallowcmpl()

    /**
     * Set the value of [intbconftrecmmtstock] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconftrecmmtstock($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconftrecmmtstock !== $v) {
            $this->intbconftrecmmtstock = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFTRECMMTSTOCK] = true;
        }

        return $this;
    } // setIntbconftrecmmtstock()

    /**
     * Set the value of [intbconfusefrtin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusefrtin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusefrtin !== $v) {
            $this->intbconfusefrtin = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSEFRTIN] = true;
        }

        return $this;
    } // setIntbconfusefrtin()

    /**
     * Set the value of [intbconfeachoruom] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfeachoruom($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfeachoruom !== $v) {
            $this->intbconfeachoruom = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFEACHORUOM] = true;
        }

        return $this;
    } // setIntbconfeachoruom()

    /**
     * Set the value of [intbconfneglotcorr] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfneglotcorr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfneglotcorr !== $v) {
            $this->intbconfneglotcorr = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFNEGLOTCORR] = true;
        }

        return $this;
    } // setIntbconfneglotcorr()

    /**
     * Set the value of [intbconftrnsglacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconftrnsglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconftrnsglacct !== $v) {
            $this->intbconftrnsglacct = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFTRNSGLACCT] = true;
        }

        return $this;
    } // setIntbconftrnsglacct()

    /**
     * Set the value of [intbconftrnsprotstock] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconftrnsprotstock($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconftrnsprotstock !== $v) {
            $this->intbconftrnsprotstock = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK] = true;
        }

        return $this;
    } // setIntbconftrnsprotstock()

    /**
     * Set the value of [intbconfnumericitem] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfnumericitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfnumericitem !== $v) {
            $this->intbconfnumericitem = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFNUMERICITEM] = true;
        }

        return $this;
    } // setIntbconfnumericitem()

    /**
     * Set the value of [intbconfitemdigits] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfitemdigits($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfitemdigits !== $v) {
            $this->intbconfitemdigits = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFITEMDIGITS] = true;
        }

        return $this;
    } // setIntbconfitemdigits()

    /**
     * Set the value of [intbconfsinglewhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfsinglewhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfsinglewhse !== $v) {
            $this->intbconfsinglewhse = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFSINGLEWHSE] = true;
        }

        return $this;
    } // setIntbconfsinglewhse()

    /**
     * Set the value of [intbconfupdusepct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfupdusepct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfupdusepct !== $v) {
            $this->intbconfupdusepct = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUPDUSEPCT] = true;
        }

        return $this;
    } // setIntbconfupdusepct()

    /**
     * Set the value of [intbconfupdpric] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfupdpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfupdpric !== $v) {
            $this->intbconfupdpric = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUPDPRIC] = true;
        }

        return $this;
    } // setIntbconfupdpric()

    /**
     * Set the value of [intbconfupdstdcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfupdstdcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfupdstdcost !== $v) {
            $this->intbconfupdstdcost = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUPDSTDCOST] = true;
        }

        return $this;
    } // setIntbconfupdstdcost()

    /**
     * Set the value of [intbconfupdxrefcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfupdxrefcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfupdxrefcost !== $v) {
            $this->intbconfupdxrefcost = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUPDXREFCOST] = true;
        }

        return $this;
    } // setIntbconfupdxrefcost()

    /**
     * Set the value of [intbconfiqpaupddate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfiqpaupddate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfiqpaupddate !== $v) {
            $this->intbconfiqpaupddate = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFIQPAUPDDATE] = true;
        }

        return $this;
    } // setIntbconfiqpaupddate()

    /**
     * Set the value of [intbconfupcxrefoptn] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfupcxrefoptn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfupcxrefoptn !== $v) {
            $this->intbconfupcxrefoptn = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUPCXREFOPTN] = true;
        }

        return $this;
    } // setIntbconfupcxrefoptn()

    /**
     * Set the value of [intbconfresqyn] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfresqyn($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfresqyn !== $v) {
            $this->intbconfresqyn = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFRESQYN] = true;
        }

        return $this;
    } // setIntbconfresqyn()

    /**
     * Set the value of [intbconfresqitembin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfresqitembin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfresqitembin !== $v) {
            $this->intbconfresqitembin = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFRESQITEMBIN] = true;
        }

        return $this;
    } // setIntbconfresqitembin()

    /**
     * Set the value of [intbconfresvcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfresvcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfresvcost !== $v) {
            $this->intbconfresvcost = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFRESVCOST] = true;
        }

        return $this;
    } // setIntbconfresvcost()

    /**
     * Set the value of [intbcon2tranzerorqst] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2tranzerorqst($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2tranzerorqst !== $v) {
            $this->intbcon2tranzerorqst = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2TRANZERORQST] = true;
        }

        return $this;
    } // setIntbcon2tranzerorqst()

    /**
     * Set the value of [intbconfmonendadjdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfmonendadjdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfmonendadjdate !== $v) {
            $this->intbconfmonendadjdate = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFMONENDADJDATE] = true;
        }

        return $this;
    } // setIntbconfmonendadjdate()

    /**
     * Set the value of [intbconfmonendtrndate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfmonendtrndate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfmonendtrndate !== $v) {
            $this->intbconfmonendtrndate = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFMONENDTRNDATE] = true;
        }

        return $this;
    } // setIntbconfmonendtrndate()

    /**
     * Set the value of [intbconfmonendlogdate] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfmonendlogdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfmonendlogdate !== $v) {
            $this->intbconfmonendlogdate = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFMONENDLOGDATE] = true;
        }

        return $this;
    } // setIntbconfmonendlogdate()

    /**
     * Set the value of [intbconfdstatproc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdstatproc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdstatproc !== $v) {
            $this->intbconfdstatproc = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDSTATPROC] = true;
        }

        return $this;
    } // setIntbconfdstatproc()

    /**
     * Set the value of [intbconfstancostupd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfstancostupd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfstancostupd !== $v) {
            $this->intbconfstancostupd = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFSTANCOSTUPD] = true;
        }

        return $this;
    } // setIntbconfstancostupd()

    /**
     * Set the value of [intbconflastcost] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconflastcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconflastcost !== $v) {
            $this->intbconflastcost = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFLASTCOST] = true;
        }

        return $this;
    } // setIntbconflastcost()

    /**
     * Set the value of [intbconfusesorgpct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusesorgpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusesorgpct !== $v) {
            $this->intbconfusesorgpct = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSESORGPCT] = true;
        }

        return $this;
    } // setIntbconfusesorgpct()

    /**
     * Set the value of [intbconfaddonstan] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfaddonstan($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfaddonstan !== $v) {
            $this->intbconfaddonstan = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFADDONSTAN] = true;
        }

        return $this;
    } // setIntbconfaddonstan()

    /**
     * Set the value of [intbconfstdcosterror] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfstdcosterror($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfstdcosterror !== $v) {
            $this->intbconfstdcosterror = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFSTDCOSTERROR] = true;
        }

        return $this;
    } // setIntbconfstdcosterror()

    /**
     * Set the value of [intbconfavgcurrfive] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfavgcurrfive($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfavgcurrfive !== $v) {
            $this->intbconfavgcurrfive = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFAVGCURRFIVE] = true;
        }

        return $this;
    } // setIntbconfavgcurrfive()

    /**
     * Set the value of [intbconfusecntrlbin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusecntrlbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusecntrlbin !== $v) {
            $this->intbconfusecntrlbin = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSECNTRLBIN] = true;
        }

        return $this;
    } // setIntbconfusecntrlbin()

    /**
     * Set the value of [intbconfnbrbinareas] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfnbrbinareas($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfnbrbinareas !== $v) {
            $this->intbconfnbrbinareas = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFNBRBINAREAS] = true;
        }

        return $this;
    } // setIntbconfnbrbinareas()

    /**
     * Set the value of [intbconfusemultbin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusemultbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusemultbin !== $v) {
            $this->intbconfusemultbin = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSEMULTBIN] = true;
        }

        return $this;
    } // setIntbconfusemultbin()

    /**
     * Set the value of [intbconfdfltwhsebin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdfltwhsebin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdfltwhsebin !== $v) {
            $this->intbconfdfltwhsebin = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDFLTWHSEBIN] = true;
        }

        return $this;
    } // setIntbconfdfltwhsebin()

    /**
     * Set the value of [intbconfdfltbin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdfltbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdfltbin !== $v) {
            $this->intbconfdfltbin = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDFLTBIN] = true;
        }

        return $this;
    } // setIntbconfdfltbin()

    /**
     * Set the value of [intbconfctryitemlot] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfctryitemlot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfctryitemlot !== $v) {
            $this->intbconfctryitemlot = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFCTRYITEMLOT] = true;
        }

        return $this;
    } // setIntbconfctryitemlot()

    /**
     * Set the value of [intbconfuseshipbin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfuseshipbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfuseshipbin !== $v) {
            $this->intbconfuseshipbin = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSESHIPBIN] = true;
        }

        return $this;
    } // setIntbconfuseshipbin()

    /**
     * Set the value of [intbcon2prtbinrlabel] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2prtbinrlabel($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2prtbinrlabel !== $v) {
            $this->intbcon2prtbinrlabel = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2PRTBINRLABEL] = true;
        }

        return $this;
    } // setIntbcon2prtbinrlabel()

    /**
     * Set the value of [intbcon2itemlookup] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2itemlookup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2itemlookup !== $v) {
            $this->intbcon2itemlookup = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2ITEMLOOKUP] = true;
        }

        return $this;
    } // setIntbcon2itemlookup()

    /**
     * Set the value of [intbconfincldcti] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfincldcti($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfincldcti !== $v) {
            $this->intbconfincldcti = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFINCLDCTI] = true;
        }

        return $this;
    } // setIntbconfincldcti()

    /**
     * Set the value of [intbconfcertimage] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfcertimage($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfcertimage !== $v) {
            $this->intbconfcertimage = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFCERTIMAGE] = true;
        }

        return $this;
    } // setIntbconfcertimage()

    /**
     * Set the value of [intbconfdrawimage] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdrawimage($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdrawimage !== $v) {
            $this->intbconfdrawimage = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDRAWIMAGE] = true;
        }

        return $this;
    } // setIntbconfdrawimage()

    /**
     * Set the value of [intbconfconfirmimage] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfconfirmimage($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfconfirmimage !== $v) {
            $this->intbconfconfirmimage = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFCONFIRMIMAGE] = true;
        }

        return $this;
    } // setIntbconfconfirmimage()

    /**
     * Set the value of [intbcon2productimage] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2productimage($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2productimage !== $v) {
            $this->intbcon2productimage = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2PRODUCTIMAGE] = true;
        }

        return $this;
    } // setIntbcon2productimage()

    /**
     * Set the value of [intbconfdefpick] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdefpick($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdefpick !== $v) {
            $this->intbconfdefpick = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDEFPICK] = true;
        }

        return $this;
    } // setIntbconfdefpick()

    /**
     * Set the value of [intbconfdefpack] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdefpack($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdefpack !== $v) {
            $this->intbconfdefpack = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDEFPACK] = true;
        }

        return $this;
    } // setIntbconfdefpack()

    /**
     * Set the value of [intbconfdefinvc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdefinvc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdefinvc !== $v) {
            $this->intbconfdefinvc = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDEFINVC] = true;
        }

        return $this;
    } // setIntbconfdefinvc()

    /**
     * Set the value of [intbconfdefack] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdefack($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdefack !== $v) {
            $this->intbconfdefack = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDEFACK] = true;
        }

        return $this;
    } // setIntbconfdefack()

    /**
     * Set the value of [intbconfdefquot] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdefquot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdefquot !== $v) {
            $this->intbconfdefquot = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDEFQUOT] = true;
        }

        return $this;
    } // setIntbconfdefquot()

    /**
     * Set the value of [intbconfdefpo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdefpo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdefpo !== $v) {
            $this->intbconfdefpo = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDEFPO] = true;
        }

        return $this;
    } // setIntbconfdefpo()

    /**
     * Set the value of [intbconfdeftrans] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdeftrans($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdeftrans !== $v) {
            $this->intbconfdeftrans = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDEFTRANS] = true;
        }

        return $this;
    } // setIntbconfdeftrans()

    /**
     * Set the value of [intbconfadjglcogs] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfadjglcogs($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfadjglcogs !== $v) {
            $this->intbconfadjglcogs = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFADJGLCOGS] = true;
        }

        return $this;
    } // setIntbconfadjglcogs()

    /**
     * Set the value of [intbcon2dfltadjglacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2dfltadjglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2dfltadjglacct !== $v) {
            $this->intbcon2dfltadjglacct = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2DFLTADJGLACCT] = true;
        }

        return $this;
    } // setIntbcon2dfltadjglacct()

    /**
     * Set the value of [intbconfadjcostbase] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfadjcostbase($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfadjcostbase !== $v) {
            $this->intbconfadjcostbase = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFADJCOSTBASE] = true;
        }

        return $this;
    } // setIntbconfadjcostbase()

    /**
     * Set the value of [intbconfdfltadjtbin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdfltadjtbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdfltadjtbin !== $v) {
            $this->intbconfdfltadjtbin = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDFLTADJTBIN] = true;
        }

        return $this;
    } // setIntbconfdfltadjtbin()

    /**
     * Set the value of [intbconfadjtbin] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfadjtbin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfadjtbin !== $v) {
            $this->intbconfadjtbin = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFADJTBIN] = true;
        }

        return $this;
    } // setIntbconfadjtbin()

    /**
     * Set the value of [intbconfcstockseq] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfcstockseq($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfcstockseq !== $v) {
            $this->intbconfcstockseq = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFCSTOCKSEQ] = true;
        }

        return $this;
    } // setIntbconfcstockseq()

    /**
     * Set the value of [intbconfcstockhistday] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfcstockhistday($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfcstockhistday !== $v) {
            $this->intbconfcstockhistday = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY] = true;
        }

        return $this;
    } // setIntbconfcstockhistday()

    /**
     * Set the value of [intbconfcstockformat] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfcstockformat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfcstockformat !== $v) {
            $this->intbconfcstockformat = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFCSTOCKFORMAT] = true;
        }

        return $this;
    } // setIntbconfcstockformat()

    /**
     * Set the value of [intbconfcstkexportitem] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfcstkexportitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfcstkexportitem !== $v) {
            $this->intbconfcstkexportitem = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFCSTKEXPORTITEM] = true;
        }

        return $this;
    } // setIntbconfcstkexportitem()

    /**
     * Set the value of [intbconfcstkpdmcontract] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfcstkpdmcontract($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfcstkpdmcontract !== $v) {
            $this->intbconfcstkpdmcontract = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFCSTKPDMCONTRACT] = true;
        }

        return $this;
    } // setIntbconfcstkpdmcontract()

    /**
     * Set the value of [intbcon2importseq] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2importseq($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2importseq !== $v) {
            $this->intbcon2importseq = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2IMPORTSEQ] = true;
        }

        return $this;
    } // setIntbcon2importseq()

    /**
     * Set the value of [intbconfstopitemchg] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfstopitemchg($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfstopitemchg !== $v) {
            $this->intbconfstopitemchg = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFSTOPITEMCHG] = true;
        }

        return $this;
    } // setIntbconfstopitemchg()

    /**
     * Set the value of [intbconfaddtomxrfe] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfaddtomxrfe($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfaddtomxrfe !== $v) {
            $this->intbconfaddtomxrfe = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFADDTOMXRFE] = true;
        }

        return $this;
    } // setIntbconfaddtomxrfe()

    /**
     * Set the value of [intbconfmxrfevendid] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfmxrfevendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfmxrfevendid !== $v) {
            $this->intbconfmxrfevendid = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFMXRFEVENDID] = true;
        }

        return $this;
    } // setIntbconfmxrfevendid()

    /**
     * Set the value of [intbcon2newidlabellist] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2newidlabellist($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2newidlabellist !== $v) {
            $this->intbcon2newidlabellist = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2NEWIDLABELLIST] = true;
        }

        return $this;
    } // setIntbcon2newidlabellist()

    /**
     * Set the value of [intbconfuseformat] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfuseformat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfuseformat !== $v) {
            $this->intbconfuseformat = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSEFORMAT] = true;
        }

        return $this;
    } // setIntbconfuseformat()

    /**
     * Set the value of [intbconfdefformat] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfdefformat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfdefformat !== $v) {
            $this->intbconfdefformat = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFDEFFORMAT] = true;
        }

        return $this;
    } // setIntbconfdefformat()

    /**
     * Set the value of [intbconfseqshortitem] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfseqshortitem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfseqshortitem !== $v) {
            $this->intbconfseqshortitem = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFSEQSHORTITEM] = true;
        }

        return $this;
    } // setIntbconfseqshortitem()

    /**
     * Set the value of [intbconfshortitemlen] column.
     *
     * @param int $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfshortitemlen($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->intbconfshortitemlen !== $v) {
            $this->intbconfshortitemlen = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFSHORTITEMLEN] = true;
        }

        return $this;
    } // setIntbconfshortitemlen()

    /**
     * Set the value of [intbconfusescale] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfusescale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfusescale !== $v) {
            $this->intbconfusescale = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFUSESCALE] = true;
        }

        return $this;
    } // setIntbconfusescale()

    /**
     * Set the value of [intbconfstorewght] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfstorewght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfstorewght !== $v) {
            $this->intbconfstorewght = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFSTOREWGHT] = true;
        }

        return $this;
    } // setIntbconfstorewght()

    /**
     * Set the value of [intbconfvalidasstcode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfvalidasstcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfvalidasstcode !== $v) {
            $this->intbconfvalidasstcode = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFVALIDASSTCODE] = true;
        }

        return $this;
    } // setIntbconfvalidasstcode()

    /**
     * Set the value of [intbconfwhitegoods] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbconfwhitegoods($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbconfwhitegoods !== $v) {
            $this->intbconfwhitegoods = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCONFWHITEGOODS] = true;
        }

        return $this;
    } // setIntbconfwhitegoods()

    /**
     * Set the value of [intbcon2transcustid] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setIntbcon2transcustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbcon2transcustid !== $v) {
            $this->intbcon2transcustid = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_INTBCON2TRANSCUSTID] = true;
        }

        return $this;
    } // setIntbcon2transcustid()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ConfigIn The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ConfigInTableMap::COL_DUMMY] = true;
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
            if ($this->intbconfkey !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ConfigInTableMap::translateFieldName('Intbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfkey = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ConfigInTableMap::translateFieldName('Intbconfglifac', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfglifac = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ConfigInTableMap::translateFieldName('Intbconfuseiw', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfuseiw = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ConfigInTableMap::translateFieldName('Intbconflifofifo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconflifofifo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ConfigInTableMap::translateFieldName('Intbconfgoneg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfgoneg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ConfigInTableMap::translateFieldName('Intbconfuselots', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfuselots = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ConfigInTableMap::translateFieldName('Intbconfnbruppr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfnbruppr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdescuppr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdescuppr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusedesc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusedesc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ConfigInTableMap::translateFieldName('Intbconfuseupccode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfuseupccode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ConfigInTableMap::translateFieldName('Intbconfupceancntrl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfupceancntrl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ConfigInTableMap::translateFieldName('Intbconfupcgennbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfupcgennbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2allowdupupc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2allowdupupc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ConfigInTableMap::translateFieldName('Intbconfxrefnospace', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfxrefnospace = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusepricgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusepricgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusecommgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusecommgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusewarrdays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusewarrdays = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ConfigInTableMap::translateFieldName('Intbconfstanbasedef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfstanbasedef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ConfigInTableMap::translateFieldName('Intbconfgrupdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfgrupdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ConfigInTableMap::translateFieldName('Intbconfpricgrupdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfpricgrupdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ConfigInTableMap::translateFieldName('Intbconfcommgrupdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfcommgrupdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ConfigInTableMap::translateFieldName('Intbconftypedef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconftypedef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ConfigInTableMap::translateFieldName('Intbconfpricuseitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfpricuseitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ConfigInTableMap::translateFieldName('Intbconfcommuseitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfcommuseitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ConfigInTableMap::translateFieldName('Intbconfuomsaledef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfuomsaledef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ConfigInTableMap::translateFieldName('Intbconfuompurdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfuompurdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ConfigInTableMap::translateFieldName('Intbconfsviadef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfsviadef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ConfigInTableMap::translateFieldName('Intbconfcustxreforuse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfcustxreforuse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ConfigInTableMap::translateFieldName('Intbconfheadgetdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfheadgetdef = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ConfigInTableMap::translateFieldName('Intbconfitemgetdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfitemgetdef = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ConfigInTableMap::translateFieldName('Intbconfgetdispohaval', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfgetdispohaval = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusercode1labl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusercode1labl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusercode1ver', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusercode1ver = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusercode2labl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusercode2labl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusercode2ver', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusercode2ver = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ConfigInTableMap::translateFieldName('Intbconfitemline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfitemline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ConfigInTableMap::translateFieldName('Intbconfitemcols', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfitemcols = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ConfigInTableMap::translateFieldName('Intbconfheadline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfheadline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : ConfigInTableMap::translateFieldName('Intbconfheadcols', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfheadcols = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdetline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdetline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdetcols', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdetcols = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : ConfigInTableMap::translateFieldName('Intbconfminmaxzero', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfminmaxzero = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : ConfigInTableMap::translateFieldName('Intbconfminrec', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfminrec = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : ConfigInTableMap::translateFieldName('Intbconfatbelowmin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfatbelowmin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : ConfigInTableMap::translateFieldName('Intbconfonewhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfonewhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : ConfigInTableMap::translateFieldName('Intbconfytdmth', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfytdmth = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusegramsltr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusegramsltr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabcbywhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabcbywhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabcnbrmths', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabcnbrmths = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabcbasecode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabcbasecode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabclevla', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabclevla = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabclevlb', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabclevlb = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabclevlc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabclevlc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabclevld', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabclevld = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabclevle', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabclevle = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabclevlf', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabclevlf = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabclevlg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabclevlg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabclevlh', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabclevlh = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabclevli', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabclevli = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabclevlj', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabclevlj = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : ConfigInTableMap::translateFieldName('Intbconfuseforeignx', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfuseforeignx = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusenafta', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusenafta = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : ConfigInTableMap::translateFieldName('Intbconfnaftaprefcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfnaftaprefcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : ConfigInTableMap::translateFieldName('Intbconfnaftaproducer', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfnaftaproducer = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : ConfigInTableMap::translateFieldName('Intbconfnaftadoccode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfnaftadoccode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : ConfigInTableMap::translateFieldName('Intbconfphyscurrwksh', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfphyscurrwksh = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : ConfigInTableMap::translateFieldName('Intbconf20or30', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconf20or30 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdisporigcnt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdisporigcnt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdispgl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdispgl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdispref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdispref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdispcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdispcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : ConfigInTableMap::translateFieldName('Intbconfprtval', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfprtval = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : ConfigInTableMap::translateFieldName('Intbconfprtgl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfprtgl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : ConfigInTableMap::translateFieldName('Intbconfglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : ConfigInTableMap::translateFieldName('Intbconfref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : ConfigInTableMap::translateFieldName('Intbconfcosttype', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfcosttype = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : ConfigInTableMap::translateFieldName('Intbconfnormalonly', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfnormalonly = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusewhsedef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusewhsedef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2dfltwhse01', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2dfltwhse01 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2dfltwhse02', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2dfltwhse02 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2dfltwhse03', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2dfltwhse03 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2dfltwhse04', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2dfltwhse04 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2dfltwhse05', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2dfltwhse05 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2dfltwhse06', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2dfltwhse06 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2dfltwhse07', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2dfltwhse07 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2dfltwhse08', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2dfltwhse08 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2dfltwhse09', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2dfltwhse09 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2dfltwhse10', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2dfltwhse10 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : ConfigInTableMap::translateFieldName('Intbconfbindef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfbindef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : ConfigInTableMap::translateFieldName('Intbconfcycldef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfcycldef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : ConfigInTableMap::translateFieldName('Intbconfstatdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfstatdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : ConfigInTableMap::translateFieldName('Intbconfabcdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfabcdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : ConfigInTableMap::translateFieldName('Intbconfspecordrdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfspecordrdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : ConfigInTableMap::translateFieldName('Intbconfordrpntdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfordrpntdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : ConfigInTableMap::translateFieldName('Intbconfmaxdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfmaxdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 95 + $startcol : ConfigInTableMap::translateFieldName('Intbconfordrqtydef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfordrqtydef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 96 + $startcol : ConfigInTableMap::translateFieldName('Intbconftrcptallowcmpl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconftrcptallowcmpl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 97 + $startcol : ConfigInTableMap::translateFieldName('Intbconftrecmmtstock', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconftrecmmtstock = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 98 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusefrtin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusefrtin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 99 + $startcol : ConfigInTableMap::translateFieldName('Intbconfeachoruom', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfeachoruom = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 100 + $startcol : ConfigInTableMap::translateFieldName('Intbconfneglotcorr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfneglotcorr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 101 + $startcol : ConfigInTableMap::translateFieldName('Intbconftrnsglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconftrnsglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 102 + $startcol : ConfigInTableMap::translateFieldName('Intbconftrnsprotstock', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconftrnsprotstock = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 103 + $startcol : ConfigInTableMap::translateFieldName('Intbconfnumericitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfnumericitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 104 + $startcol : ConfigInTableMap::translateFieldName('Intbconfitemdigits', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfitemdigits = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 105 + $startcol : ConfigInTableMap::translateFieldName('Intbconfsinglewhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfsinglewhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 106 + $startcol : ConfigInTableMap::translateFieldName('Intbconfupdusepct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfupdusepct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 107 + $startcol : ConfigInTableMap::translateFieldName('Intbconfupdpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfupdpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 108 + $startcol : ConfigInTableMap::translateFieldName('Intbconfupdstdcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfupdstdcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 109 + $startcol : ConfigInTableMap::translateFieldName('Intbconfupdxrefcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfupdxrefcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 110 + $startcol : ConfigInTableMap::translateFieldName('Intbconfiqpaupddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfiqpaupddate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 111 + $startcol : ConfigInTableMap::translateFieldName('Intbconfupcxrefoptn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfupcxrefoptn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 112 + $startcol : ConfigInTableMap::translateFieldName('Intbconfresqyn', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfresqyn = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 113 + $startcol : ConfigInTableMap::translateFieldName('Intbconfresqitembin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfresqitembin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 114 + $startcol : ConfigInTableMap::translateFieldName('Intbconfresvcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfresvcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 115 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2tranzerorqst', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2tranzerorqst = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 116 + $startcol : ConfigInTableMap::translateFieldName('Intbconfmonendadjdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfmonendadjdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 117 + $startcol : ConfigInTableMap::translateFieldName('Intbconfmonendtrndate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfmonendtrndate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 118 + $startcol : ConfigInTableMap::translateFieldName('Intbconfmonendlogdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfmonendlogdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 119 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdstatproc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdstatproc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 120 + $startcol : ConfigInTableMap::translateFieldName('Intbconfstancostupd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfstancostupd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 121 + $startcol : ConfigInTableMap::translateFieldName('Intbconflastcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconflastcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 122 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusesorgpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusesorgpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 123 + $startcol : ConfigInTableMap::translateFieldName('Intbconfaddonstan', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfaddonstan = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 124 + $startcol : ConfigInTableMap::translateFieldName('Intbconfstdcosterror', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfstdcosterror = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 125 + $startcol : ConfigInTableMap::translateFieldName('Intbconfavgcurrfive', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfavgcurrfive = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 126 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusecntrlbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusecntrlbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 127 + $startcol : ConfigInTableMap::translateFieldName('Intbconfnbrbinareas', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfnbrbinareas = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 128 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusemultbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusemultbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 129 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdfltwhsebin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdfltwhsebin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 130 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdfltbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdfltbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 131 + $startcol : ConfigInTableMap::translateFieldName('Intbconfctryitemlot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfctryitemlot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 132 + $startcol : ConfigInTableMap::translateFieldName('Intbconfuseshipbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfuseshipbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 133 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2prtbinrlabel', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2prtbinrlabel = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 134 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2itemlookup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2itemlookup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 135 + $startcol : ConfigInTableMap::translateFieldName('Intbconfincldcti', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfincldcti = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 136 + $startcol : ConfigInTableMap::translateFieldName('Intbconfcertimage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfcertimage = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 137 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdrawimage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdrawimage = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 138 + $startcol : ConfigInTableMap::translateFieldName('Intbconfconfirmimage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfconfirmimage = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 139 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2productimage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2productimage = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 140 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdefpick', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdefpick = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 141 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdefpack', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdefpack = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 142 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdefinvc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdefinvc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 143 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdefack', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdefack = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 144 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdefquot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdefquot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 145 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdefpo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdefpo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 146 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdeftrans', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdeftrans = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 147 + $startcol : ConfigInTableMap::translateFieldName('Intbconfadjglcogs', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfadjglcogs = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 148 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2dfltadjglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2dfltadjglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 149 + $startcol : ConfigInTableMap::translateFieldName('Intbconfadjcostbase', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfadjcostbase = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 150 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdfltadjtbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdfltadjtbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 151 + $startcol : ConfigInTableMap::translateFieldName('Intbconfadjtbin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfadjtbin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 152 + $startcol : ConfigInTableMap::translateFieldName('Intbconfcstockseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfcstockseq = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 153 + $startcol : ConfigInTableMap::translateFieldName('Intbconfcstockhistday', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfcstockhistday = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 154 + $startcol : ConfigInTableMap::translateFieldName('Intbconfcstockformat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfcstockformat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 155 + $startcol : ConfigInTableMap::translateFieldName('Intbconfcstkexportitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfcstkexportitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 156 + $startcol : ConfigInTableMap::translateFieldName('Intbconfcstkpdmcontract', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfcstkpdmcontract = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 157 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2importseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2importseq = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 158 + $startcol : ConfigInTableMap::translateFieldName('Intbconfstopitemchg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfstopitemchg = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 159 + $startcol : ConfigInTableMap::translateFieldName('Intbconfaddtomxrfe', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfaddtomxrfe = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 160 + $startcol : ConfigInTableMap::translateFieldName('Intbconfmxrfevendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfmxrfevendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 161 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2newidlabellist', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2newidlabellist = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 162 + $startcol : ConfigInTableMap::translateFieldName('Intbconfuseformat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfuseformat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 163 + $startcol : ConfigInTableMap::translateFieldName('Intbconfdefformat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfdefformat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 164 + $startcol : ConfigInTableMap::translateFieldName('Intbconfseqshortitem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfseqshortitem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 165 + $startcol : ConfigInTableMap::translateFieldName('Intbconfshortitemlen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfshortitemlen = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 166 + $startcol : ConfigInTableMap::translateFieldName('Intbconfusescale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfusescale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 167 + $startcol : ConfigInTableMap::translateFieldName('Intbconfstorewght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfstorewght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 168 + $startcol : ConfigInTableMap::translateFieldName('Intbconfvalidasstcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfvalidasstcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 169 + $startcol : ConfigInTableMap::translateFieldName('Intbconfwhitegoods', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbconfwhitegoods = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 170 + $startcol : ConfigInTableMap::translateFieldName('Intbcon2transcustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbcon2transcustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 171 + $startcol : ConfigInTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 172 + $startcol : ConfigInTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 173 + $startcol : ConfigInTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 174; // 174 = ConfigInTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ConfigIn'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ConfigInTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildConfigInQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ConfigIn::setDeleted()
     * @see ConfigIn::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigInTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildConfigInQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigInTableMap::DATABASE_NAME);
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
                ConfigInTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFKEY)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfKey';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFGLIFAC)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfGlIfac';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEIW)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseIw';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFLIFOFIFO)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfLifoFifo';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFGONEG)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfGoNeg';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSELOTS)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseLots';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNBRUPPR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfNbrUppr';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDESCUPPR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDescUppr';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEDESC2)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseDesc2';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEUPCCODE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseUpcCode';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPCEANCNTRL)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUpcEanCntrl';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPCGENNBR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUpcGenNbr';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2ALLOWDUPUPC)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2AllowDupUpc';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFXREFNOSPACE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfXrefNoSpace';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEPRICGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUsePricGrup';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSECOMMGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseCommGrup';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEWARRDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseWarrDays';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSTANBASEDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfStanBaseDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFGRUPDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfGrupDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFPRICGRUPDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfPricGrupDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCOMMGRUPDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfCommGrupDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFTYPEDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfTypeDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFPRICUSEITEM)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfPricUseItem';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCOMMUSEITEM)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfCommUseItem';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUOMSALEDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUomSaleDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUOMPURDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUomPurDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSVIADEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfSviaDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCUSTXREFORUSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfCustxrefOrUse';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFHEADGETDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfHeadGetDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFITEMGETDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfItemGetDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFGETDISPOHAVAL)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfGetDispOhAval';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSERCODE1LABL)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUserCode1Labl';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSERCODE1VER)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUserCode1Ver';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSERCODE2LABL)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUserCode2Labl';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSERCODE2VER)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUserCode2Ver';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFITEMLINE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfItemLine';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFITEMCOLS)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfItemCols';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFHEADLINE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfHeadLine';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFHEADCOLS)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfHeadCols';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDETLINE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDetLine';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDETCOLS)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDetCols';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMINMAXZERO)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfMinMaxZero';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMINREC)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfMinRec';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFATBELOWMIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAtBelowMin';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFONEWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfOneWhse';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFYTDMTH)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfYtdMth';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEGRAMSLTR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseGramsLtr';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCBYWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcByWhse';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCNBRMTHS)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcNbrMths';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCBASECODE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcBaseCode';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLA)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcLevlA';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLB)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcLevlB';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLC)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcLevlC';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLD)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcLevlD';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcLevlE';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcLevlF';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLG)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcLevlG';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLH)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcLevlH';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLI)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcLevlI';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLJ)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcLevlJ';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEFOREIGNX)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseForeignX';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSENAFTA)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseNafta';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNAFTAPREFCODE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfNaftaPrefCode';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNAFTAPRODUCER)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfNaftaProducer';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNAFTADOCCODE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfNaftaDocCode';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFPHYSCURRWKSH)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfPhysCurrWksh';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONF20OR30)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConf20Or30';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDISPORIGCNT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDispOrigCnt';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDISPGL)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDispGl';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDISPREF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDispRef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDISPCOST)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDispCost';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFPRTVAL)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfPrtVal';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFPRTGL)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfPrtGl';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfGlAcct';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFREF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfRef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCOSTTYPE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfCostType';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNORMALONLY)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfNormalOnly';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEWHSEDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseWhseDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE01)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2DfltWhse01';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE02)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2DfltWhse02';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE03)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2DfltWhse03';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE04)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2DfltWhse04';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE05)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2DfltWhse05';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE06)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2DfltWhse06';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE07)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2DfltWhse07';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE08)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2DfltWhse08';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE09)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2DfltWhse09';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE10)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2DfltWhse10';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFBINDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfBinDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCYCLDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfCyclDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSTATDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfStatDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAbcDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSPECORDRDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfSpecOrdrDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFORDRPNTDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfOrdrPntDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMAXDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfMaxDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFORDRQTYDEF)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfOrdrQtyDef';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFTRCPTALLOWCMPL)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfTrcptAllowCmpl';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFTRECMMTSTOCK)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfTreCmmtStock';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEFRTIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseFrtIn';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFEACHORUOM)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfEachOrUom';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNEGLOTCORR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfNegLotCorr';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFTRNSGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfTrnsGlAcct';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfTrnsProtStock';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNUMERICITEM)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfNumericItem';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFITEMDIGITS)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfItemDigits';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSINGLEWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfSingleWhse';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPDUSEPCT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUpdUsePct';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPDPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUpdPric';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPDSTDCOST)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUpdStdCost';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPDXREFCOST)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUpdXrefCost';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFIQPAUPDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfIqpaUpdDate';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPCXREFOPTN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUpcXrefOptn';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFRESQYN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfResqYN';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFRESQITEMBIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfResqItemBin';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFRESVCOST)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfResvCost';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2TRANZERORQST)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2TranZeroRqst';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMONENDADJDATE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfMonEndAdjDate';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMONENDTRNDATE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfMonEndTrnDate';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMONENDLOGDATE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfMonEndLogDate';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDSTATPROC)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDStatProc';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSTANCOSTUPD)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfStanCostUpd';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFLASTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfLastCost';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSESORGPCT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseSOrGPct';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFADDONSTAN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAddOnStan';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSTDCOSTERROR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfStdCostError';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFAVGCURRFIVE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAvgCurrFive';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSECNTRLBIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseCntrlBin';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNBRBINAREAS)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfNbrBinAreas';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEMULTBIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseMultBin';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDFLTWHSEBIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDfltWhseBin';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDFLTBIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDfltBin';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCTRYITEMLOT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfCtryItemLot';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSESHIPBIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseShipBin';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2PRTBINRLABEL)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2PrtBinrLabel';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2ITEMLOOKUP)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2ItemLookup';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFINCLDCTI)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfIncldCti';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCERTIMAGE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfCertImage';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDRAWIMAGE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDrawImage';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCONFIRMIMAGE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfConfirmImage';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2PRODUCTIMAGE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2ProductImage';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFPICK)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDefPick';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFPACK)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDefPack';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFINVC)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDefInvc';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFACK)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDefAck';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFQUOT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDefQuot';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFPO)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDefPo';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFTRANS)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDefTrans';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFADJGLCOGS)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAdjGlCogs';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTADJGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2DfltAdjGlAcct';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFADJCOSTBASE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAdjCostBase';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDFLTADJTBIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDfltAdjtBin';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFADJTBIN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAdjtBin';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCSTOCKSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfCStockSeq';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfCStockHistDay';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCSTOCKFORMAT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfCStockFormat';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCSTKEXPORTITEM)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfCstkExportItem';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCSTKPDMCONTRACT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfCstkPdmContract';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2IMPORTSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2ImportSeq';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSTOPITEMCHG)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfStopItemChg';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFADDTOMXRFE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfAddToMxrfe';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMXRFEVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfMxrfeVendId';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2NEWIDLABELLIST)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2NewIdLabelList';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEFORMAT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseFormat';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFFORMAT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfDefFormat';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSEQSHORTITEM)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfSeqShortItem';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSHORTITEMLEN)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfShortItemLen';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSESCALE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfUseScale';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSTOREWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfStoreWght';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFVALIDASSTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfValidAsstCode';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFWHITEGOODS)) {
            $modifiedColumns[':p' . $index++]  = 'IntbConfWhiteGoods';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2TRANSCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'IntbCon2TransCustId';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO in_config (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'IntbConfKey':
                        $stmt->bindValue($identifier, $this->intbconfkey, PDO::PARAM_INT);
                        break;
                    case 'IntbConfGlIfac':
                        $stmt->bindValue($identifier, $this->intbconfglifac, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseIw':
                        $stmt->bindValue($identifier, $this->intbconfuseiw, PDO::PARAM_STR);
                        break;
                    case 'IntbConfLifoFifo':
                        $stmt->bindValue($identifier, $this->intbconflifofifo, PDO::PARAM_STR);
                        break;
                    case 'IntbConfGoNeg':
                        $stmt->bindValue($identifier, $this->intbconfgoneg, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseLots':
                        $stmt->bindValue($identifier, $this->intbconfuselots, PDO::PARAM_STR);
                        break;
                    case 'IntbConfNbrUppr':
                        $stmt->bindValue($identifier, $this->intbconfnbruppr, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDescUppr':
                        $stmt->bindValue($identifier, $this->intbconfdescuppr, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseDesc2':
                        $stmt->bindValue($identifier, $this->intbconfusedesc2, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseUpcCode':
                        $stmt->bindValue($identifier, $this->intbconfuseupccode, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUpcEanCntrl':
                        $stmt->bindValue($identifier, $this->intbconfupceancntrl, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUpcGenNbr':
                        $stmt->bindValue($identifier, $this->intbconfupcgennbr, PDO::PARAM_INT);
                        break;
                    case 'IntbCon2AllowDupUpc':
                        $stmt->bindValue($identifier, $this->intbcon2allowdupupc, PDO::PARAM_STR);
                        break;
                    case 'IntbConfXrefNoSpace':
                        $stmt->bindValue($identifier, $this->intbconfxrefnospace, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUsePricGrup':
                        $stmt->bindValue($identifier, $this->intbconfusepricgrup, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseCommGrup':
                        $stmt->bindValue($identifier, $this->intbconfusecommgrup, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseWarrDays':
                        $stmt->bindValue($identifier, $this->intbconfusewarrdays, PDO::PARAM_STR);
                        break;
                    case 'IntbConfStanBaseDef':
                        $stmt->bindValue($identifier, $this->intbconfstanbasedef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfGrupDef':
                        $stmt->bindValue($identifier, $this->intbconfgrupdef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfPricGrupDef':
                        $stmt->bindValue($identifier, $this->intbconfpricgrupdef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfCommGrupDef':
                        $stmt->bindValue($identifier, $this->intbconfcommgrupdef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfTypeDef':
                        $stmt->bindValue($identifier, $this->intbconftypedef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfPricUseItem':
                        $stmt->bindValue($identifier, $this->intbconfpricuseitem, PDO::PARAM_STR);
                        break;
                    case 'IntbConfCommUseItem':
                        $stmt->bindValue($identifier, $this->intbconfcommuseitem, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUomSaleDef':
                        $stmt->bindValue($identifier, $this->intbconfuomsaledef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUomPurDef':
                        $stmt->bindValue($identifier, $this->intbconfuompurdef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfSviaDef':
                        $stmt->bindValue($identifier, $this->intbconfsviadef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfCustxrefOrUse':
                        $stmt->bindValue($identifier, $this->intbconfcustxreforuse, PDO::PARAM_STR);
                        break;
                    case 'IntbConfHeadGetDef':
                        $stmt->bindValue($identifier, $this->intbconfheadgetdef, PDO::PARAM_INT);
                        break;
                    case 'IntbConfItemGetDef':
                        $stmt->bindValue($identifier, $this->intbconfitemgetdef, PDO::PARAM_INT);
                        break;
                    case 'IntbConfGetDispOhAval':
                        $stmt->bindValue($identifier, $this->intbconfgetdispohaval, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUserCode1Labl':
                        $stmt->bindValue($identifier, $this->intbconfusercode1labl, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUserCode1Ver':
                        $stmt->bindValue($identifier, $this->intbconfusercode1ver, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUserCode2Labl':
                        $stmt->bindValue($identifier, $this->intbconfusercode2labl, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUserCode2Ver':
                        $stmt->bindValue($identifier, $this->intbconfusercode2ver, PDO::PARAM_STR);
                        break;
                    case 'IntbConfItemLine':
                        $stmt->bindValue($identifier, $this->intbconfitemline, PDO::PARAM_INT);
                        break;
                    case 'IntbConfItemCols':
                        $stmt->bindValue($identifier, $this->intbconfitemcols, PDO::PARAM_INT);
                        break;
                    case 'IntbConfHeadLine':
                        $stmt->bindValue($identifier, $this->intbconfheadline, PDO::PARAM_INT);
                        break;
                    case 'IntbConfHeadCols':
                        $stmt->bindValue($identifier, $this->intbconfheadcols, PDO::PARAM_INT);
                        break;
                    case 'IntbConfDetLine':
                        $stmt->bindValue($identifier, $this->intbconfdetline, PDO::PARAM_INT);
                        break;
                    case 'IntbConfDetCols':
                        $stmt->bindValue($identifier, $this->intbconfdetcols, PDO::PARAM_INT);
                        break;
                    case 'IntbConfMinMaxZero':
                        $stmt->bindValue($identifier, $this->intbconfminmaxzero, PDO::PARAM_STR);
                        break;
                    case 'IntbConfMinRec':
                        $stmt->bindValue($identifier, $this->intbconfminrec, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAtBelowMin':
                        $stmt->bindValue($identifier, $this->intbconfatbelowmin, PDO::PARAM_STR);
                        break;
                    case 'IntbConfOneWhse':
                        $stmt->bindValue($identifier, $this->intbconfonewhse, PDO::PARAM_STR);
                        break;
                    case 'IntbConfYtdMth':
                        $stmt->bindValue($identifier, $this->intbconfytdmth, PDO::PARAM_INT);
                        break;
                    case 'IntbConfUseGramsLtr':
                        $stmt->bindValue($identifier, $this->intbconfusegramsltr, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAbcByWhse':
                        $stmt->bindValue($identifier, $this->intbconfabcbywhse, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAbcNbrMths':
                        $stmt->bindValue($identifier, $this->intbconfabcnbrmths, PDO::PARAM_INT);
                        break;
                    case 'IntbConfAbcBaseCode':
                        $stmt->bindValue($identifier, $this->intbconfabcbasecode, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAbcLevlA':
                        $stmt->bindValue($identifier, $this->intbconfabclevla, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAbcLevlB':
                        $stmt->bindValue($identifier, $this->intbconfabclevlb, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAbcLevlC':
                        $stmt->bindValue($identifier, $this->intbconfabclevlc, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAbcLevlD':
                        $stmt->bindValue($identifier, $this->intbconfabclevld, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAbcLevlE':
                        $stmt->bindValue($identifier, $this->intbconfabclevle, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAbcLevlF':
                        $stmt->bindValue($identifier, $this->intbconfabclevlf, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAbcLevlG':
                        $stmt->bindValue($identifier, $this->intbconfabclevlg, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAbcLevlH':
                        $stmt->bindValue($identifier, $this->intbconfabclevlh, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAbcLevlI':
                        $stmt->bindValue($identifier, $this->intbconfabclevli, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAbcLevlJ':
                        $stmt->bindValue($identifier, $this->intbconfabclevlj, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseForeignX':
                        $stmt->bindValue($identifier, $this->intbconfuseforeignx, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseNafta':
                        $stmt->bindValue($identifier, $this->intbconfusenafta, PDO::PARAM_STR);
                        break;
                    case 'IntbConfNaftaPrefCode':
                        $stmt->bindValue($identifier, $this->intbconfnaftaprefcode, PDO::PARAM_STR);
                        break;
                    case 'IntbConfNaftaProducer':
                        $stmt->bindValue($identifier, $this->intbconfnaftaproducer, PDO::PARAM_STR);
                        break;
                    case 'IntbConfNaftaDocCode':
                        $stmt->bindValue($identifier, $this->intbconfnaftadoccode, PDO::PARAM_STR);
                        break;
                    case 'IntbConfPhysCurrWksh':
                        $stmt->bindValue($identifier, $this->intbconfphyscurrwksh, PDO::PARAM_STR);
                        break;
                    case 'IntbConf20Or30':
                        $stmt->bindValue($identifier, $this->intbconf20or30, PDO::PARAM_INT);
                        break;
                    case 'IntbConfDispOrigCnt':
                        $stmt->bindValue($identifier, $this->intbconfdisporigcnt, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDispGl':
                        $stmt->bindValue($identifier, $this->intbconfdispgl, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDispRef':
                        $stmt->bindValue($identifier, $this->intbconfdispref, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDispCost':
                        $stmt->bindValue($identifier, $this->intbconfdispcost, PDO::PARAM_STR);
                        break;
                    case 'IntbConfPrtVal':
                        $stmt->bindValue($identifier, $this->intbconfprtval, PDO::PARAM_STR);
                        break;
                    case 'IntbConfPrtGl':
                        $stmt->bindValue($identifier, $this->intbconfprtgl, PDO::PARAM_STR);
                        break;
                    case 'IntbConfGlAcct':
                        $stmt->bindValue($identifier, $this->intbconfglacct, PDO::PARAM_STR);
                        break;
                    case 'IntbConfRef':
                        $stmt->bindValue($identifier, $this->intbconfref, PDO::PARAM_STR);
                        break;
                    case 'IntbConfCostType':
                        $stmt->bindValue($identifier, $this->intbconfcosttype, PDO::PARAM_STR);
                        break;
                    case 'IntbConfNormalOnly':
                        $stmt->bindValue($identifier, $this->intbconfnormalonly, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseWhseDef':
                        $stmt->bindValue($identifier, $this->intbconfusewhsedef, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2DfltWhse01':
                        $stmt->bindValue($identifier, $this->intbcon2dfltwhse01, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2DfltWhse02':
                        $stmt->bindValue($identifier, $this->intbcon2dfltwhse02, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2DfltWhse03':
                        $stmt->bindValue($identifier, $this->intbcon2dfltwhse03, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2DfltWhse04':
                        $stmt->bindValue($identifier, $this->intbcon2dfltwhse04, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2DfltWhse05':
                        $stmt->bindValue($identifier, $this->intbcon2dfltwhse05, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2DfltWhse06':
                        $stmt->bindValue($identifier, $this->intbcon2dfltwhse06, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2DfltWhse07':
                        $stmt->bindValue($identifier, $this->intbcon2dfltwhse07, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2DfltWhse08':
                        $stmt->bindValue($identifier, $this->intbcon2dfltwhse08, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2DfltWhse09':
                        $stmt->bindValue($identifier, $this->intbcon2dfltwhse09, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2DfltWhse10':
                        $stmt->bindValue($identifier, $this->intbcon2dfltwhse10, PDO::PARAM_STR);
                        break;
                    case 'IntbConfBinDef':
                        $stmt->bindValue($identifier, $this->intbconfbindef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfCyclDef':
                        $stmt->bindValue($identifier, $this->intbconfcycldef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfStatDef':
                        $stmt->bindValue($identifier, $this->intbconfstatdef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAbcDef':
                        $stmt->bindValue($identifier, $this->intbconfabcdef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfSpecOrdrDef':
                        $stmt->bindValue($identifier, $this->intbconfspecordrdef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfOrdrPntDef':
                        $stmt->bindValue($identifier, $this->intbconfordrpntdef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfMaxDef':
                        $stmt->bindValue($identifier, $this->intbconfmaxdef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfOrdrQtyDef':
                        $stmt->bindValue($identifier, $this->intbconfordrqtydef, PDO::PARAM_STR);
                        break;
                    case 'IntbConfTrcptAllowCmpl':
                        $stmt->bindValue($identifier, $this->intbconftrcptallowcmpl, PDO::PARAM_STR);
                        break;
                    case 'IntbConfTreCmmtStock':
                        $stmt->bindValue($identifier, $this->intbconftrecmmtstock, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseFrtIn':
                        $stmt->bindValue($identifier, $this->intbconfusefrtin, PDO::PARAM_STR);
                        break;
                    case 'IntbConfEachOrUom':
                        $stmt->bindValue($identifier, $this->intbconfeachoruom, PDO::PARAM_STR);
                        break;
                    case 'IntbConfNegLotCorr':
                        $stmt->bindValue($identifier, $this->intbconfneglotcorr, PDO::PARAM_STR);
                        break;
                    case 'IntbConfTrnsGlAcct':
                        $stmt->bindValue($identifier, $this->intbconftrnsglacct, PDO::PARAM_STR);
                        break;
                    case 'IntbConfTrnsProtStock':
                        $stmt->bindValue($identifier, $this->intbconftrnsprotstock, PDO::PARAM_STR);
                        break;
                    case 'IntbConfNumericItem':
                        $stmt->bindValue($identifier, $this->intbconfnumericitem, PDO::PARAM_STR);
                        break;
                    case 'IntbConfItemDigits':
                        $stmt->bindValue($identifier, $this->intbconfitemdigits, PDO::PARAM_INT);
                        break;
                    case 'IntbConfSingleWhse':
                        $stmt->bindValue($identifier, $this->intbconfsinglewhse, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUpdUsePct':
                        $stmt->bindValue($identifier, $this->intbconfupdusepct, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUpdPric':
                        $stmt->bindValue($identifier, $this->intbconfupdpric, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUpdStdCost':
                        $stmt->bindValue($identifier, $this->intbconfupdstdcost, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUpdXrefCost':
                        $stmt->bindValue($identifier, $this->intbconfupdxrefcost, PDO::PARAM_STR);
                        break;
                    case 'IntbConfIqpaUpdDate':
                        $stmt->bindValue($identifier, $this->intbconfiqpaupddate, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUpcXrefOptn':
                        $stmt->bindValue($identifier, $this->intbconfupcxrefoptn, PDO::PARAM_STR);
                        break;
                    case 'IntbConfResqYN':
                        $stmt->bindValue($identifier, $this->intbconfresqyn, PDO::PARAM_STR);
                        break;
                    case 'IntbConfResqItemBin':
                        $stmt->bindValue($identifier, $this->intbconfresqitembin, PDO::PARAM_STR);
                        break;
                    case 'IntbConfResvCost':
                        $stmt->bindValue($identifier, $this->intbconfresvcost, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2TranZeroRqst':
                        $stmt->bindValue($identifier, $this->intbcon2tranzerorqst, PDO::PARAM_STR);
                        break;
                    case 'IntbConfMonEndAdjDate':
                        $stmt->bindValue($identifier, $this->intbconfmonendadjdate, PDO::PARAM_STR);
                        break;
                    case 'IntbConfMonEndTrnDate':
                        $stmt->bindValue($identifier, $this->intbconfmonendtrndate, PDO::PARAM_STR);
                        break;
                    case 'IntbConfMonEndLogDate':
                        $stmt->bindValue($identifier, $this->intbconfmonendlogdate, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDStatProc':
                        $stmt->bindValue($identifier, $this->intbconfdstatproc, PDO::PARAM_STR);
                        break;
                    case 'IntbConfStanCostUpd':
                        $stmt->bindValue($identifier, $this->intbconfstancostupd, PDO::PARAM_STR);
                        break;
                    case 'IntbConfLastCost':
                        $stmt->bindValue($identifier, $this->intbconflastcost, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseSOrGPct':
                        $stmt->bindValue($identifier, $this->intbconfusesorgpct, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAddOnStan':
                        $stmt->bindValue($identifier, $this->intbconfaddonstan, PDO::PARAM_STR);
                        break;
                    case 'IntbConfStdCostError':
                        $stmt->bindValue($identifier, $this->intbconfstdcosterror, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAvgCurrFive':
                        $stmt->bindValue($identifier, $this->intbconfavgcurrfive, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseCntrlBin':
                        $stmt->bindValue($identifier, $this->intbconfusecntrlbin, PDO::PARAM_STR);
                        break;
                    case 'IntbConfNbrBinAreas':
                        $stmt->bindValue($identifier, $this->intbconfnbrbinareas, PDO::PARAM_INT);
                        break;
                    case 'IntbConfUseMultBin':
                        $stmt->bindValue($identifier, $this->intbconfusemultbin, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDfltWhseBin':
                        $stmt->bindValue($identifier, $this->intbconfdfltwhsebin, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDfltBin':
                        $stmt->bindValue($identifier, $this->intbconfdfltbin, PDO::PARAM_STR);
                        break;
                    case 'IntbConfCtryItemLot':
                        $stmt->bindValue($identifier, $this->intbconfctryitemlot, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseShipBin':
                        $stmt->bindValue($identifier, $this->intbconfuseshipbin, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2PrtBinrLabel':
                        $stmt->bindValue($identifier, $this->intbcon2prtbinrlabel, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2ItemLookup':
                        $stmt->bindValue($identifier, $this->intbcon2itemlookup, PDO::PARAM_STR);
                        break;
                    case 'IntbConfIncldCti':
                        $stmt->bindValue($identifier, $this->intbconfincldcti, PDO::PARAM_STR);
                        break;
                    case 'IntbConfCertImage':
                        $stmt->bindValue($identifier, $this->intbconfcertimage, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDrawImage':
                        $stmt->bindValue($identifier, $this->intbconfdrawimage, PDO::PARAM_STR);
                        break;
                    case 'IntbConfConfirmImage':
                        $stmt->bindValue($identifier, $this->intbconfconfirmimage, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2ProductImage':
                        $stmt->bindValue($identifier, $this->intbcon2productimage, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDefPick':
                        $stmt->bindValue($identifier, $this->intbconfdefpick, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDefPack':
                        $stmt->bindValue($identifier, $this->intbconfdefpack, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDefInvc':
                        $stmt->bindValue($identifier, $this->intbconfdefinvc, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDefAck':
                        $stmt->bindValue($identifier, $this->intbconfdefack, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDefQuot':
                        $stmt->bindValue($identifier, $this->intbconfdefquot, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDefPo':
                        $stmt->bindValue($identifier, $this->intbconfdefpo, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDefTrans':
                        $stmt->bindValue($identifier, $this->intbconfdeftrans, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAdjGlCogs':
                        $stmt->bindValue($identifier, $this->intbconfadjglcogs, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2DfltAdjGlAcct':
                        $stmt->bindValue($identifier, $this->intbcon2dfltadjglacct, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAdjCostBase':
                        $stmt->bindValue($identifier, $this->intbconfadjcostbase, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDfltAdjtBin':
                        $stmt->bindValue($identifier, $this->intbconfdfltadjtbin, PDO::PARAM_STR);
                        break;
                    case 'IntbConfAdjtBin':
                        $stmt->bindValue($identifier, $this->intbconfadjtbin, PDO::PARAM_STR);
                        break;
                    case 'IntbConfCStockSeq':
                        $stmt->bindValue($identifier, $this->intbconfcstockseq, PDO::PARAM_STR);
                        break;
                    case 'IntbConfCStockHistDay':
                        $stmt->bindValue($identifier, $this->intbconfcstockhistday, PDO::PARAM_INT);
                        break;
                    case 'IntbConfCStockFormat':
                        $stmt->bindValue($identifier, $this->intbconfcstockformat, PDO::PARAM_STR);
                        break;
                    case 'IntbConfCstkExportItem':
                        $stmt->bindValue($identifier, $this->intbconfcstkexportitem, PDO::PARAM_STR);
                        break;
                    case 'IntbConfCstkPdmContract':
                        $stmt->bindValue($identifier, $this->intbconfcstkpdmcontract, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2ImportSeq':
                        $stmt->bindValue($identifier, $this->intbcon2importseq, PDO::PARAM_STR);
                        break;
                    case 'IntbConfStopItemChg':
                        $stmt->bindValue($identifier, $this->intbconfstopitemchg, PDO::PARAM_INT);
                        break;
                    case 'IntbConfAddToMxrfe':
                        $stmt->bindValue($identifier, $this->intbconfaddtomxrfe, PDO::PARAM_STR);
                        break;
                    case 'IntbConfMxrfeVendId':
                        $stmt->bindValue($identifier, $this->intbconfmxrfevendid, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2NewIdLabelList':
                        $stmt->bindValue($identifier, $this->intbcon2newidlabellist, PDO::PARAM_STR);
                        break;
                    case 'IntbConfUseFormat':
                        $stmt->bindValue($identifier, $this->intbconfuseformat, PDO::PARAM_STR);
                        break;
                    case 'IntbConfDefFormat':
                        $stmt->bindValue($identifier, $this->intbconfdefformat, PDO::PARAM_STR);
                        break;
                    case 'IntbConfSeqShortItem':
                        $stmt->bindValue($identifier, $this->intbconfseqshortitem, PDO::PARAM_STR);
                        break;
                    case 'IntbConfShortItemLen':
                        $stmt->bindValue($identifier, $this->intbconfshortitemlen, PDO::PARAM_INT);
                        break;
                    case 'IntbConfUseScale':
                        $stmt->bindValue($identifier, $this->intbconfusescale, PDO::PARAM_STR);
                        break;
                    case 'IntbConfStoreWght':
                        $stmt->bindValue($identifier, $this->intbconfstorewght, PDO::PARAM_STR);
                        break;
                    case 'IntbConfValidAsstCode':
                        $stmt->bindValue($identifier, $this->intbconfvalidasstcode, PDO::PARAM_STR);
                        break;
                    case 'IntbConfWhiteGoods':
                        $stmt->bindValue($identifier, $this->intbconfwhitegoods, PDO::PARAM_STR);
                        break;
                    case 'IntbCon2TransCustId':
                        $stmt->bindValue($identifier, $this->intbcon2transcustid, PDO::PARAM_STR);
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
        $pos = ConfigInTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIntbconfkey();
                break;
            case 1:
                return $this->getIntbconfglifac();
                break;
            case 2:
                return $this->getIntbconfuseiw();
                break;
            case 3:
                return $this->getIntbconflifofifo();
                break;
            case 4:
                return $this->getIntbconfgoneg();
                break;
            case 5:
                return $this->getIntbconfuselots();
                break;
            case 6:
                return $this->getIntbconfnbruppr();
                break;
            case 7:
                return $this->getIntbconfdescuppr();
                break;
            case 8:
                return $this->getIntbconfusedesc2();
                break;
            case 9:
                return $this->getIntbconfuseupccode();
                break;
            case 10:
                return $this->getIntbconfupceancntrl();
                break;
            case 11:
                return $this->getIntbconfupcgennbr();
                break;
            case 12:
                return $this->getIntbcon2allowdupupc();
                break;
            case 13:
                return $this->getIntbconfxrefnospace();
                break;
            case 14:
                return $this->getIntbconfusepricgrup();
                break;
            case 15:
                return $this->getIntbconfusecommgrup();
                break;
            case 16:
                return $this->getIntbconfusewarrdays();
                break;
            case 17:
                return $this->getIntbconfstanbasedef();
                break;
            case 18:
                return $this->getIntbconfgrupdef();
                break;
            case 19:
                return $this->getIntbconfpricgrupdef();
                break;
            case 20:
                return $this->getIntbconfcommgrupdef();
                break;
            case 21:
                return $this->getIntbconftypedef();
                break;
            case 22:
                return $this->getIntbconfpricuseitem();
                break;
            case 23:
                return $this->getIntbconfcommuseitem();
                break;
            case 24:
                return $this->getIntbconfuomsaledef();
                break;
            case 25:
                return $this->getIntbconfuompurdef();
                break;
            case 26:
                return $this->getIntbconfsviadef();
                break;
            case 27:
                return $this->getIntbconfcustxreforuse();
                break;
            case 28:
                return $this->getIntbconfheadgetdef();
                break;
            case 29:
                return $this->getIntbconfitemgetdef();
                break;
            case 30:
                return $this->getIntbconfgetdispohaval();
                break;
            case 31:
                return $this->getIntbconfusercode1labl();
                break;
            case 32:
                return $this->getIntbconfusercode1ver();
                break;
            case 33:
                return $this->getIntbconfusercode2labl();
                break;
            case 34:
                return $this->getIntbconfusercode2ver();
                break;
            case 35:
                return $this->getIntbconfitemline();
                break;
            case 36:
                return $this->getIntbconfitemcols();
                break;
            case 37:
                return $this->getIntbconfheadline();
                break;
            case 38:
                return $this->getIntbconfheadcols();
                break;
            case 39:
                return $this->getIntbconfdetline();
                break;
            case 40:
                return $this->getIntbconfdetcols();
                break;
            case 41:
                return $this->getIntbconfminmaxzero();
                break;
            case 42:
                return $this->getIntbconfminrec();
                break;
            case 43:
                return $this->getIntbconfatbelowmin();
                break;
            case 44:
                return $this->getIntbconfonewhse();
                break;
            case 45:
                return $this->getIntbconfytdmth();
                break;
            case 46:
                return $this->getIntbconfusegramsltr();
                break;
            case 47:
                return $this->getIntbconfabcbywhse();
                break;
            case 48:
                return $this->getIntbconfabcnbrmths();
                break;
            case 49:
                return $this->getIntbconfabcbasecode();
                break;
            case 50:
                return $this->getIntbconfabclevla();
                break;
            case 51:
                return $this->getIntbconfabclevlb();
                break;
            case 52:
                return $this->getIntbconfabclevlc();
                break;
            case 53:
                return $this->getIntbconfabclevld();
                break;
            case 54:
                return $this->getIntbconfabclevle();
                break;
            case 55:
                return $this->getIntbconfabclevlf();
                break;
            case 56:
                return $this->getIntbconfabclevlg();
                break;
            case 57:
                return $this->getIntbconfabclevlh();
                break;
            case 58:
                return $this->getIntbconfabclevli();
                break;
            case 59:
                return $this->getIntbconfabclevlj();
                break;
            case 60:
                return $this->getIntbconfuseforeignx();
                break;
            case 61:
                return $this->getIntbconfusenafta();
                break;
            case 62:
                return $this->getIntbconfnaftaprefcode();
                break;
            case 63:
                return $this->getIntbconfnaftaproducer();
                break;
            case 64:
                return $this->getIntbconfnaftadoccode();
                break;
            case 65:
                return $this->getIntbconfphyscurrwksh();
                break;
            case 66:
                return $this->getIntbconf20or30();
                break;
            case 67:
                return $this->getIntbconfdisporigcnt();
                break;
            case 68:
                return $this->getIntbconfdispgl();
                break;
            case 69:
                return $this->getIntbconfdispref();
                break;
            case 70:
                return $this->getIntbconfdispcost();
                break;
            case 71:
                return $this->getIntbconfprtval();
                break;
            case 72:
                return $this->getIntbconfprtgl();
                break;
            case 73:
                return $this->getIntbconfglacct();
                break;
            case 74:
                return $this->getIntbconfref();
                break;
            case 75:
                return $this->getIntbconfcosttype();
                break;
            case 76:
                return $this->getIntbconfnormalonly();
                break;
            case 77:
                return $this->getIntbconfusewhsedef();
                break;
            case 78:
                return $this->getIntbcon2dfltwhse01();
                break;
            case 79:
                return $this->getIntbcon2dfltwhse02();
                break;
            case 80:
                return $this->getIntbcon2dfltwhse03();
                break;
            case 81:
                return $this->getIntbcon2dfltwhse04();
                break;
            case 82:
                return $this->getIntbcon2dfltwhse05();
                break;
            case 83:
                return $this->getIntbcon2dfltwhse06();
                break;
            case 84:
                return $this->getIntbcon2dfltwhse07();
                break;
            case 85:
                return $this->getIntbcon2dfltwhse08();
                break;
            case 86:
                return $this->getIntbcon2dfltwhse09();
                break;
            case 87:
                return $this->getIntbcon2dfltwhse10();
                break;
            case 88:
                return $this->getIntbconfbindef();
                break;
            case 89:
                return $this->getIntbconfcycldef();
                break;
            case 90:
                return $this->getIntbconfstatdef();
                break;
            case 91:
                return $this->getIntbconfabcdef();
                break;
            case 92:
                return $this->getIntbconfspecordrdef();
                break;
            case 93:
                return $this->getIntbconfordrpntdef();
                break;
            case 94:
                return $this->getIntbconfmaxdef();
                break;
            case 95:
                return $this->getIntbconfordrqtydef();
                break;
            case 96:
                return $this->getIntbconftrcptallowcmpl();
                break;
            case 97:
                return $this->getIntbconftrecmmtstock();
                break;
            case 98:
                return $this->getIntbconfusefrtin();
                break;
            case 99:
                return $this->getIntbconfeachoruom();
                break;
            case 100:
                return $this->getIntbconfneglotcorr();
                break;
            case 101:
                return $this->getIntbconftrnsglacct();
                break;
            case 102:
                return $this->getIntbconftrnsprotstock();
                break;
            case 103:
                return $this->getIntbconfnumericitem();
                break;
            case 104:
                return $this->getIntbconfitemdigits();
                break;
            case 105:
                return $this->getIntbconfsinglewhse();
                break;
            case 106:
                return $this->getIntbconfupdusepct();
                break;
            case 107:
                return $this->getIntbconfupdpric();
                break;
            case 108:
                return $this->getIntbconfupdstdcost();
                break;
            case 109:
                return $this->getIntbconfupdxrefcost();
                break;
            case 110:
                return $this->getIntbconfiqpaupddate();
                break;
            case 111:
                return $this->getIntbconfupcxrefoptn();
                break;
            case 112:
                return $this->getIntbconfresqyn();
                break;
            case 113:
                return $this->getIntbconfresqitembin();
                break;
            case 114:
                return $this->getIntbconfresvcost();
                break;
            case 115:
                return $this->getIntbcon2tranzerorqst();
                break;
            case 116:
                return $this->getIntbconfmonendadjdate();
                break;
            case 117:
                return $this->getIntbconfmonendtrndate();
                break;
            case 118:
                return $this->getIntbconfmonendlogdate();
                break;
            case 119:
                return $this->getIntbconfdstatproc();
                break;
            case 120:
                return $this->getIntbconfstancostupd();
                break;
            case 121:
                return $this->getIntbconflastcost();
                break;
            case 122:
                return $this->getIntbconfusesorgpct();
                break;
            case 123:
                return $this->getIntbconfaddonstan();
                break;
            case 124:
                return $this->getIntbconfstdcosterror();
                break;
            case 125:
                return $this->getIntbconfavgcurrfive();
                break;
            case 126:
                return $this->getIntbconfusecntrlbin();
                break;
            case 127:
                return $this->getIntbconfnbrbinareas();
                break;
            case 128:
                return $this->getIntbconfusemultbin();
                break;
            case 129:
                return $this->getIntbconfdfltwhsebin();
                break;
            case 130:
                return $this->getIntbconfdfltbin();
                break;
            case 131:
                return $this->getIntbconfctryitemlot();
                break;
            case 132:
                return $this->getIntbconfuseshipbin();
                break;
            case 133:
                return $this->getIntbcon2prtbinrlabel();
                break;
            case 134:
                return $this->getIntbcon2itemlookup();
                break;
            case 135:
                return $this->getIntbconfincldcti();
                break;
            case 136:
                return $this->getIntbconfcertimage();
                break;
            case 137:
                return $this->getIntbconfdrawimage();
                break;
            case 138:
                return $this->getIntbconfconfirmimage();
                break;
            case 139:
                return $this->getIntbcon2productimage();
                break;
            case 140:
                return $this->getIntbconfdefpick();
                break;
            case 141:
                return $this->getIntbconfdefpack();
                break;
            case 142:
                return $this->getIntbconfdefinvc();
                break;
            case 143:
                return $this->getIntbconfdefack();
                break;
            case 144:
                return $this->getIntbconfdefquot();
                break;
            case 145:
                return $this->getIntbconfdefpo();
                break;
            case 146:
                return $this->getIntbconfdeftrans();
                break;
            case 147:
                return $this->getIntbconfadjglcogs();
                break;
            case 148:
                return $this->getIntbcon2dfltadjglacct();
                break;
            case 149:
                return $this->getIntbconfadjcostbase();
                break;
            case 150:
                return $this->getIntbconfdfltadjtbin();
                break;
            case 151:
                return $this->getIntbconfadjtbin();
                break;
            case 152:
                return $this->getIntbconfcstockseq();
                break;
            case 153:
                return $this->getIntbconfcstockhistday();
                break;
            case 154:
                return $this->getIntbconfcstockformat();
                break;
            case 155:
                return $this->getIntbconfcstkexportitem();
                break;
            case 156:
                return $this->getIntbconfcstkpdmcontract();
                break;
            case 157:
                return $this->getIntbcon2importseq();
                break;
            case 158:
                return $this->getIntbconfstopitemchg();
                break;
            case 159:
                return $this->getIntbconfaddtomxrfe();
                break;
            case 160:
                return $this->getIntbconfmxrfevendid();
                break;
            case 161:
                return $this->getIntbcon2newidlabellist();
                break;
            case 162:
                return $this->getIntbconfuseformat();
                break;
            case 163:
                return $this->getIntbconfdefformat();
                break;
            case 164:
                return $this->getIntbconfseqshortitem();
                break;
            case 165:
                return $this->getIntbconfshortitemlen();
                break;
            case 166:
                return $this->getIntbconfusescale();
                break;
            case 167:
                return $this->getIntbconfstorewght();
                break;
            case 168:
                return $this->getIntbconfvalidasstcode();
                break;
            case 169:
                return $this->getIntbconfwhitegoods();
                break;
            case 170:
                return $this->getIntbcon2transcustid();
                break;
            case 171:
                return $this->getDateupdtd();
                break;
            case 172:
                return $this->getTimeupdtd();
                break;
            case 173:
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

        if (isset($alreadyDumpedObjects['ConfigIn'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigIn'][$this->hashCode()] = true;
        $keys = ConfigInTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIntbconfkey(),
            $keys[1] => $this->getIntbconfglifac(),
            $keys[2] => $this->getIntbconfuseiw(),
            $keys[3] => $this->getIntbconflifofifo(),
            $keys[4] => $this->getIntbconfgoneg(),
            $keys[5] => $this->getIntbconfuselots(),
            $keys[6] => $this->getIntbconfnbruppr(),
            $keys[7] => $this->getIntbconfdescuppr(),
            $keys[8] => $this->getIntbconfusedesc2(),
            $keys[9] => $this->getIntbconfuseupccode(),
            $keys[10] => $this->getIntbconfupceancntrl(),
            $keys[11] => $this->getIntbconfupcgennbr(),
            $keys[12] => $this->getIntbcon2allowdupupc(),
            $keys[13] => $this->getIntbconfxrefnospace(),
            $keys[14] => $this->getIntbconfusepricgrup(),
            $keys[15] => $this->getIntbconfusecommgrup(),
            $keys[16] => $this->getIntbconfusewarrdays(),
            $keys[17] => $this->getIntbconfstanbasedef(),
            $keys[18] => $this->getIntbconfgrupdef(),
            $keys[19] => $this->getIntbconfpricgrupdef(),
            $keys[20] => $this->getIntbconfcommgrupdef(),
            $keys[21] => $this->getIntbconftypedef(),
            $keys[22] => $this->getIntbconfpricuseitem(),
            $keys[23] => $this->getIntbconfcommuseitem(),
            $keys[24] => $this->getIntbconfuomsaledef(),
            $keys[25] => $this->getIntbconfuompurdef(),
            $keys[26] => $this->getIntbconfsviadef(),
            $keys[27] => $this->getIntbconfcustxreforuse(),
            $keys[28] => $this->getIntbconfheadgetdef(),
            $keys[29] => $this->getIntbconfitemgetdef(),
            $keys[30] => $this->getIntbconfgetdispohaval(),
            $keys[31] => $this->getIntbconfusercode1labl(),
            $keys[32] => $this->getIntbconfusercode1ver(),
            $keys[33] => $this->getIntbconfusercode2labl(),
            $keys[34] => $this->getIntbconfusercode2ver(),
            $keys[35] => $this->getIntbconfitemline(),
            $keys[36] => $this->getIntbconfitemcols(),
            $keys[37] => $this->getIntbconfheadline(),
            $keys[38] => $this->getIntbconfheadcols(),
            $keys[39] => $this->getIntbconfdetline(),
            $keys[40] => $this->getIntbconfdetcols(),
            $keys[41] => $this->getIntbconfminmaxzero(),
            $keys[42] => $this->getIntbconfminrec(),
            $keys[43] => $this->getIntbconfatbelowmin(),
            $keys[44] => $this->getIntbconfonewhse(),
            $keys[45] => $this->getIntbconfytdmth(),
            $keys[46] => $this->getIntbconfusegramsltr(),
            $keys[47] => $this->getIntbconfabcbywhse(),
            $keys[48] => $this->getIntbconfabcnbrmths(),
            $keys[49] => $this->getIntbconfabcbasecode(),
            $keys[50] => $this->getIntbconfabclevla(),
            $keys[51] => $this->getIntbconfabclevlb(),
            $keys[52] => $this->getIntbconfabclevlc(),
            $keys[53] => $this->getIntbconfabclevld(),
            $keys[54] => $this->getIntbconfabclevle(),
            $keys[55] => $this->getIntbconfabclevlf(),
            $keys[56] => $this->getIntbconfabclevlg(),
            $keys[57] => $this->getIntbconfabclevlh(),
            $keys[58] => $this->getIntbconfabclevli(),
            $keys[59] => $this->getIntbconfabclevlj(),
            $keys[60] => $this->getIntbconfuseforeignx(),
            $keys[61] => $this->getIntbconfusenafta(),
            $keys[62] => $this->getIntbconfnaftaprefcode(),
            $keys[63] => $this->getIntbconfnaftaproducer(),
            $keys[64] => $this->getIntbconfnaftadoccode(),
            $keys[65] => $this->getIntbconfphyscurrwksh(),
            $keys[66] => $this->getIntbconf20or30(),
            $keys[67] => $this->getIntbconfdisporigcnt(),
            $keys[68] => $this->getIntbconfdispgl(),
            $keys[69] => $this->getIntbconfdispref(),
            $keys[70] => $this->getIntbconfdispcost(),
            $keys[71] => $this->getIntbconfprtval(),
            $keys[72] => $this->getIntbconfprtgl(),
            $keys[73] => $this->getIntbconfglacct(),
            $keys[74] => $this->getIntbconfref(),
            $keys[75] => $this->getIntbconfcosttype(),
            $keys[76] => $this->getIntbconfnormalonly(),
            $keys[77] => $this->getIntbconfusewhsedef(),
            $keys[78] => $this->getIntbcon2dfltwhse01(),
            $keys[79] => $this->getIntbcon2dfltwhse02(),
            $keys[80] => $this->getIntbcon2dfltwhse03(),
            $keys[81] => $this->getIntbcon2dfltwhse04(),
            $keys[82] => $this->getIntbcon2dfltwhse05(),
            $keys[83] => $this->getIntbcon2dfltwhse06(),
            $keys[84] => $this->getIntbcon2dfltwhse07(),
            $keys[85] => $this->getIntbcon2dfltwhse08(),
            $keys[86] => $this->getIntbcon2dfltwhse09(),
            $keys[87] => $this->getIntbcon2dfltwhse10(),
            $keys[88] => $this->getIntbconfbindef(),
            $keys[89] => $this->getIntbconfcycldef(),
            $keys[90] => $this->getIntbconfstatdef(),
            $keys[91] => $this->getIntbconfabcdef(),
            $keys[92] => $this->getIntbconfspecordrdef(),
            $keys[93] => $this->getIntbconfordrpntdef(),
            $keys[94] => $this->getIntbconfmaxdef(),
            $keys[95] => $this->getIntbconfordrqtydef(),
            $keys[96] => $this->getIntbconftrcptallowcmpl(),
            $keys[97] => $this->getIntbconftrecmmtstock(),
            $keys[98] => $this->getIntbconfusefrtin(),
            $keys[99] => $this->getIntbconfeachoruom(),
            $keys[100] => $this->getIntbconfneglotcorr(),
            $keys[101] => $this->getIntbconftrnsglacct(),
            $keys[102] => $this->getIntbconftrnsprotstock(),
            $keys[103] => $this->getIntbconfnumericitem(),
            $keys[104] => $this->getIntbconfitemdigits(),
            $keys[105] => $this->getIntbconfsinglewhse(),
            $keys[106] => $this->getIntbconfupdusepct(),
            $keys[107] => $this->getIntbconfupdpric(),
            $keys[108] => $this->getIntbconfupdstdcost(),
            $keys[109] => $this->getIntbconfupdxrefcost(),
            $keys[110] => $this->getIntbconfiqpaupddate(),
            $keys[111] => $this->getIntbconfupcxrefoptn(),
            $keys[112] => $this->getIntbconfresqyn(),
            $keys[113] => $this->getIntbconfresqitembin(),
            $keys[114] => $this->getIntbconfresvcost(),
            $keys[115] => $this->getIntbcon2tranzerorqst(),
            $keys[116] => $this->getIntbconfmonendadjdate(),
            $keys[117] => $this->getIntbconfmonendtrndate(),
            $keys[118] => $this->getIntbconfmonendlogdate(),
            $keys[119] => $this->getIntbconfdstatproc(),
            $keys[120] => $this->getIntbconfstancostupd(),
            $keys[121] => $this->getIntbconflastcost(),
            $keys[122] => $this->getIntbconfusesorgpct(),
            $keys[123] => $this->getIntbconfaddonstan(),
            $keys[124] => $this->getIntbconfstdcosterror(),
            $keys[125] => $this->getIntbconfavgcurrfive(),
            $keys[126] => $this->getIntbconfusecntrlbin(),
            $keys[127] => $this->getIntbconfnbrbinareas(),
            $keys[128] => $this->getIntbconfusemultbin(),
            $keys[129] => $this->getIntbconfdfltwhsebin(),
            $keys[130] => $this->getIntbconfdfltbin(),
            $keys[131] => $this->getIntbconfctryitemlot(),
            $keys[132] => $this->getIntbconfuseshipbin(),
            $keys[133] => $this->getIntbcon2prtbinrlabel(),
            $keys[134] => $this->getIntbcon2itemlookup(),
            $keys[135] => $this->getIntbconfincldcti(),
            $keys[136] => $this->getIntbconfcertimage(),
            $keys[137] => $this->getIntbconfdrawimage(),
            $keys[138] => $this->getIntbconfconfirmimage(),
            $keys[139] => $this->getIntbcon2productimage(),
            $keys[140] => $this->getIntbconfdefpick(),
            $keys[141] => $this->getIntbconfdefpack(),
            $keys[142] => $this->getIntbconfdefinvc(),
            $keys[143] => $this->getIntbconfdefack(),
            $keys[144] => $this->getIntbconfdefquot(),
            $keys[145] => $this->getIntbconfdefpo(),
            $keys[146] => $this->getIntbconfdeftrans(),
            $keys[147] => $this->getIntbconfadjglcogs(),
            $keys[148] => $this->getIntbcon2dfltadjglacct(),
            $keys[149] => $this->getIntbconfadjcostbase(),
            $keys[150] => $this->getIntbconfdfltadjtbin(),
            $keys[151] => $this->getIntbconfadjtbin(),
            $keys[152] => $this->getIntbconfcstockseq(),
            $keys[153] => $this->getIntbconfcstockhistday(),
            $keys[154] => $this->getIntbconfcstockformat(),
            $keys[155] => $this->getIntbconfcstkexportitem(),
            $keys[156] => $this->getIntbconfcstkpdmcontract(),
            $keys[157] => $this->getIntbcon2importseq(),
            $keys[158] => $this->getIntbconfstopitemchg(),
            $keys[159] => $this->getIntbconfaddtomxrfe(),
            $keys[160] => $this->getIntbconfmxrfevendid(),
            $keys[161] => $this->getIntbcon2newidlabellist(),
            $keys[162] => $this->getIntbconfuseformat(),
            $keys[163] => $this->getIntbconfdefformat(),
            $keys[164] => $this->getIntbconfseqshortitem(),
            $keys[165] => $this->getIntbconfshortitemlen(),
            $keys[166] => $this->getIntbconfusescale(),
            $keys[167] => $this->getIntbconfstorewght(),
            $keys[168] => $this->getIntbconfvalidasstcode(),
            $keys[169] => $this->getIntbconfwhitegoods(),
            $keys[170] => $this->getIntbcon2transcustid(),
            $keys[171] => $this->getDateupdtd(),
            $keys[172] => $this->getTimeupdtd(),
            $keys[173] => $this->getDummy(),
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
     * @return $this|\ConfigIn
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ConfigInTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ConfigIn
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIntbconfkey($value);
                break;
            case 1:
                $this->setIntbconfglifac($value);
                break;
            case 2:
                $this->setIntbconfuseiw($value);
                break;
            case 3:
                $this->setIntbconflifofifo($value);
                break;
            case 4:
                $this->setIntbconfgoneg($value);
                break;
            case 5:
                $this->setIntbconfuselots($value);
                break;
            case 6:
                $this->setIntbconfnbruppr($value);
                break;
            case 7:
                $this->setIntbconfdescuppr($value);
                break;
            case 8:
                $this->setIntbconfusedesc2($value);
                break;
            case 9:
                $this->setIntbconfuseupccode($value);
                break;
            case 10:
                $this->setIntbconfupceancntrl($value);
                break;
            case 11:
                $this->setIntbconfupcgennbr($value);
                break;
            case 12:
                $this->setIntbcon2allowdupupc($value);
                break;
            case 13:
                $this->setIntbconfxrefnospace($value);
                break;
            case 14:
                $this->setIntbconfusepricgrup($value);
                break;
            case 15:
                $this->setIntbconfusecommgrup($value);
                break;
            case 16:
                $this->setIntbconfusewarrdays($value);
                break;
            case 17:
                $this->setIntbconfstanbasedef($value);
                break;
            case 18:
                $this->setIntbconfgrupdef($value);
                break;
            case 19:
                $this->setIntbconfpricgrupdef($value);
                break;
            case 20:
                $this->setIntbconfcommgrupdef($value);
                break;
            case 21:
                $this->setIntbconftypedef($value);
                break;
            case 22:
                $this->setIntbconfpricuseitem($value);
                break;
            case 23:
                $this->setIntbconfcommuseitem($value);
                break;
            case 24:
                $this->setIntbconfuomsaledef($value);
                break;
            case 25:
                $this->setIntbconfuompurdef($value);
                break;
            case 26:
                $this->setIntbconfsviadef($value);
                break;
            case 27:
                $this->setIntbconfcustxreforuse($value);
                break;
            case 28:
                $this->setIntbconfheadgetdef($value);
                break;
            case 29:
                $this->setIntbconfitemgetdef($value);
                break;
            case 30:
                $this->setIntbconfgetdispohaval($value);
                break;
            case 31:
                $this->setIntbconfusercode1labl($value);
                break;
            case 32:
                $this->setIntbconfusercode1ver($value);
                break;
            case 33:
                $this->setIntbconfusercode2labl($value);
                break;
            case 34:
                $this->setIntbconfusercode2ver($value);
                break;
            case 35:
                $this->setIntbconfitemline($value);
                break;
            case 36:
                $this->setIntbconfitemcols($value);
                break;
            case 37:
                $this->setIntbconfheadline($value);
                break;
            case 38:
                $this->setIntbconfheadcols($value);
                break;
            case 39:
                $this->setIntbconfdetline($value);
                break;
            case 40:
                $this->setIntbconfdetcols($value);
                break;
            case 41:
                $this->setIntbconfminmaxzero($value);
                break;
            case 42:
                $this->setIntbconfminrec($value);
                break;
            case 43:
                $this->setIntbconfatbelowmin($value);
                break;
            case 44:
                $this->setIntbconfonewhse($value);
                break;
            case 45:
                $this->setIntbconfytdmth($value);
                break;
            case 46:
                $this->setIntbconfusegramsltr($value);
                break;
            case 47:
                $this->setIntbconfabcbywhse($value);
                break;
            case 48:
                $this->setIntbconfabcnbrmths($value);
                break;
            case 49:
                $this->setIntbconfabcbasecode($value);
                break;
            case 50:
                $this->setIntbconfabclevla($value);
                break;
            case 51:
                $this->setIntbconfabclevlb($value);
                break;
            case 52:
                $this->setIntbconfabclevlc($value);
                break;
            case 53:
                $this->setIntbconfabclevld($value);
                break;
            case 54:
                $this->setIntbconfabclevle($value);
                break;
            case 55:
                $this->setIntbconfabclevlf($value);
                break;
            case 56:
                $this->setIntbconfabclevlg($value);
                break;
            case 57:
                $this->setIntbconfabclevlh($value);
                break;
            case 58:
                $this->setIntbconfabclevli($value);
                break;
            case 59:
                $this->setIntbconfabclevlj($value);
                break;
            case 60:
                $this->setIntbconfuseforeignx($value);
                break;
            case 61:
                $this->setIntbconfusenafta($value);
                break;
            case 62:
                $this->setIntbconfnaftaprefcode($value);
                break;
            case 63:
                $this->setIntbconfnaftaproducer($value);
                break;
            case 64:
                $this->setIntbconfnaftadoccode($value);
                break;
            case 65:
                $this->setIntbconfphyscurrwksh($value);
                break;
            case 66:
                $this->setIntbconf20or30($value);
                break;
            case 67:
                $this->setIntbconfdisporigcnt($value);
                break;
            case 68:
                $this->setIntbconfdispgl($value);
                break;
            case 69:
                $this->setIntbconfdispref($value);
                break;
            case 70:
                $this->setIntbconfdispcost($value);
                break;
            case 71:
                $this->setIntbconfprtval($value);
                break;
            case 72:
                $this->setIntbconfprtgl($value);
                break;
            case 73:
                $this->setIntbconfglacct($value);
                break;
            case 74:
                $this->setIntbconfref($value);
                break;
            case 75:
                $this->setIntbconfcosttype($value);
                break;
            case 76:
                $this->setIntbconfnormalonly($value);
                break;
            case 77:
                $this->setIntbconfusewhsedef($value);
                break;
            case 78:
                $this->setIntbcon2dfltwhse01($value);
                break;
            case 79:
                $this->setIntbcon2dfltwhse02($value);
                break;
            case 80:
                $this->setIntbcon2dfltwhse03($value);
                break;
            case 81:
                $this->setIntbcon2dfltwhse04($value);
                break;
            case 82:
                $this->setIntbcon2dfltwhse05($value);
                break;
            case 83:
                $this->setIntbcon2dfltwhse06($value);
                break;
            case 84:
                $this->setIntbcon2dfltwhse07($value);
                break;
            case 85:
                $this->setIntbcon2dfltwhse08($value);
                break;
            case 86:
                $this->setIntbcon2dfltwhse09($value);
                break;
            case 87:
                $this->setIntbcon2dfltwhse10($value);
                break;
            case 88:
                $this->setIntbconfbindef($value);
                break;
            case 89:
                $this->setIntbconfcycldef($value);
                break;
            case 90:
                $this->setIntbconfstatdef($value);
                break;
            case 91:
                $this->setIntbconfabcdef($value);
                break;
            case 92:
                $this->setIntbconfspecordrdef($value);
                break;
            case 93:
                $this->setIntbconfordrpntdef($value);
                break;
            case 94:
                $this->setIntbconfmaxdef($value);
                break;
            case 95:
                $this->setIntbconfordrqtydef($value);
                break;
            case 96:
                $this->setIntbconftrcptallowcmpl($value);
                break;
            case 97:
                $this->setIntbconftrecmmtstock($value);
                break;
            case 98:
                $this->setIntbconfusefrtin($value);
                break;
            case 99:
                $this->setIntbconfeachoruom($value);
                break;
            case 100:
                $this->setIntbconfneglotcorr($value);
                break;
            case 101:
                $this->setIntbconftrnsglacct($value);
                break;
            case 102:
                $this->setIntbconftrnsprotstock($value);
                break;
            case 103:
                $this->setIntbconfnumericitem($value);
                break;
            case 104:
                $this->setIntbconfitemdigits($value);
                break;
            case 105:
                $this->setIntbconfsinglewhse($value);
                break;
            case 106:
                $this->setIntbconfupdusepct($value);
                break;
            case 107:
                $this->setIntbconfupdpric($value);
                break;
            case 108:
                $this->setIntbconfupdstdcost($value);
                break;
            case 109:
                $this->setIntbconfupdxrefcost($value);
                break;
            case 110:
                $this->setIntbconfiqpaupddate($value);
                break;
            case 111:
                $this->setIntbconfupcxrefoptn($value);
                break;
            case 112:
                $this->setIntbconfresqyn($value);
                break;
            case 113:
                $this->setIntbconfresqitembin($value);
                break;
            case 114:
                $this->setIntbconfresvcost($value);
                break;
            case 115:
                $this->setIntbcon2tranzerorqst($value);
                break;
            case 116:
                $this->setIntbconfmonendadjdate($value);
                break;
            case 117:
                $this->setIntbconfmonendtrndate($value);
                break;
            case 118:
                $this->setIntbconfmonendlogdate($value);
                break;
            case 119:
                $this->setIntbconfdstatproc($value);
                break;
            case 120:
                $this->setIntbconfstancostupd($value);
                break;
            case 121:
                $this->setIntbconflastcost($value);
                break;
            case 122:
                $this->setIntbconfusesorgpct($value);
                break;
            case 123:
                $this->setIntbconfaddonstan($value);
                break;
            case 124:
                $this->setIntbconfstdcosterror($value);
                break;
            case 125:
                $this->setIntbconfavgcurrfive($value);
                break;
            case 126:
                $this->setIntbconfusecntrlbin($value);
                break;
            case 127:
                $this->setIntbconfnbrbinareas($value);
                break;
            case 128:
                $this->setIntbconfusemultbin($value);
                break;
            case 129:
                $this->setIntbconfdfltwhsebin($value);
                break;
            case 130:
                $this->setIntbconfdfltbin($value);
                break;
            case 131:
                $this->setIntbconfctryitemlot($value);
                break;
            case 132:
                $this->setIntbconfuseshipbin($value);
                break;
            case 133:
                $this->setIntbcon2prtbinrlabel($value);
                break;
            case 134:
                $this->setIntbcon2itemlookup($value);
                break;
            case 135:
                $this->setIntbconfincldcti($value);
                break;
            case 136:
                $this->setIntbconfcertimage($value);
                break;
            case 137:
                $this->setIntbconfdrawimage($value);
                break;
            case 138:
                $this->setIntbconfconfirmimage($value);
                break;
            case 139:
                $this->setIntbcon2productimage($value);
                break;
            case 140:
                $this->setIntbconfdefpick($value);
                break;
            case 141:
                $this->setIntbconfdefpack($value);
                break;
            case 142:
                $this->setIntbconfdefinvc($value);
                break;
            case 143:
                $this->setIntbconfdefack($value);
                break;
            case 144:
                $this->setIntbconfdefquot($value);
                break;
            case 145:
                $this->setIntbconfdefpo($value);
                break;
            case 146:
                $this->setIntbconfdeftrans($value);
                break;
            case 147:
                $this->setIntbconfadjglcogs($value);
                break;
            case 148:
                $this->setIntbcon2dfltadjglacct($value);
                break;
            case 149:
                $this->setIntbconfadjcostbase($value);
                break;
            case 150:
                $this->setIntbconfdfltadjtbin($value);
                break;
            case 151:
                $this->setIntbconfadjtbin($value);
                break;
            case 152:
                $this->setIntbconfcstockseq($value);
                break;
            case 153:
                $this->setIntbconfcstockhistday($value);
                break;
            case 154:
                $this->setIntbconfcstockformat($value);
                break;
            case 155:
                $this->setIntbconfcstkexportitem($value);
                break;
            case 156:
                $this->setIntbconfcstkpdmcontract($value);
                break;
            case 157:
                $this->setIntbcon2importseq($value);
                break;
            case 158:
                $this->setIntbconfstopitemchg($value);
                break;
            case 159:
                $this->setIntbconfaddtomxrfe($value);
                break;
            case 160:
                $this->setIntbconfmxrfevendid($value);
                break;
            case 161:
                $this->setIntbcon2newidlabellist($value);
                break;
            case 162:
                $this->setIntbconfuseformat($value);
                break;
            case 163:
                $this->setIntbconfdefformat($value);
                break;
            case 164:
                $this->setIntbconfseqshortitem($value);
                break;
            case 165:
                $this->setIntbconfshortitemlen($value);
                break;
            case 166:
                $this->setIntbconfusescale($value);
                break;
            case 167:
                $this->setIntbconfstorewght($value);
                break;
            case 168:
                $this->setIntbconfvalidasstcode($value);
                break;
            case 169:
                $this->setIntbconfwhitegoods($value);
                break;
            case 170:
                $this->setIntbcon2transcustid($value);
                break;
            case 171:
                $this->setDateupdtd($value);
                break;
            case 172:
                $this->setTimeupdtd($value);
                break;
            case 173:
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
        $keys = ConfigInTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIntbconfkey($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIntbconfglifac($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIntbconfuseiw($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIntbconflifofifo($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setIntbconfgoneg($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setIntbconfuselots($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIntbconfnbruppr($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setIntbconfdescuppr($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setIntbconfusedesc2($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setIntbconfuseupccode($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setIntbconfupceancntrl($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setIntbconfupcgennbr($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setIntbcon2allowdupupc($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setIntbconfxrefnospace($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setIntbconfusepricgrup($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setIntbconfusecommgrup($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setIntbconfusewarrdays($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setIntbconfstanbasedef($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setIntbconfgrupdef($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setIntbconfpricgrupdef($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setIntbconfcommgrupdef($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setIntbconftypedef($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setIntbconfpricuseitem($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setIntbconfcommuseitem($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setIntbconfuomsaledef($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setIntbconfuompurdef($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setIntbconfsviadef($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setIntbconfcustxreforuse($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setIntbconfheadgetdef($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setIntbconfitemgetdef($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setIntbconfgetdispohaval($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setIntbconfusercode1labl($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setIntbconfusercode1ver($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setIntbconfusercode2labl($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setIntbconfusercode2ver($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setIntbconfitemline($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setIntbconfitemcols($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setIntbconfheadline($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setIntbconfheadcols($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setIntbconfdetline($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setIntbconfdetcols($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setIntbconfminmaxzero($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setIntbconfminrec($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setIntbconfatbelowmin($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setIntbconfonewhse($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setIntbconfytdmth($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setIntbconfusegramsltr($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setIntbconfabcbywhse($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setIntbconfabcnbrmths($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setIntbconfabcbasecode($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setIntbconfabclevla($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setIntbconfabclevlb($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setIntbconfabclevlc($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setIntbconfabclevld($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setIntbconfabclevle($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setIntbconfabclevlf($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setIntbconfabclevlg($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setIntbconfabclevlh($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setIntbconfabclevli($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setIntbconfabclevlj($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setIntbconfuseforeignx($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setIntbconfusenafta($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setIntbconfnaftaprefcode($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setIntbconfnaftaproducer($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setIntbconfnaftadoccode($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setIntbconfphyscurrwksh($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setIntbconf20or30($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setIntbconfdisporigcnt($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setIntbconfdispgl($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setIntbconfdispref($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setIntbconfdispcost($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setIntbconfprtval($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setIntbconfprtgl($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setIntbconfglacct($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setIntbconfref($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setIntbconfcosttype($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setIntbconfnormalonly($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setIntbconfusewhsedef($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setIntbcon2dfltwhse01($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setIntbcon2dfltwhse02($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setIntbcon2dfltwhse03($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setIntbcon2dfltwhse04($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setIntbcon2dfltwhse05($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setIntbcon2dfltwhse06($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setIntbcon2dfltwhse07($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setIntbcon2dfltwhse08($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setIntbcon2dfltwhse09($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setIntbcon2dfltwhse10($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setIntbconfbindef($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setIntbconfcycldef($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setIntbconfstatdef($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setIntbconfabcdef($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setIntbconfspecordrdef($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setIntbconfordrpntdef($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setIntbconfmaxdef($arr[$keys[94]]);
        }
        if (array_key_exists($keys[95], $arr)) {
            $this->setIntbconfordrqtydef($arr[$keys[95]]);
        }
        if (array_key_exists($keys[96], $arr)) {
            $this->setIntbconftrcptallowcmpl($arr[$keys[96]]);
        }
        if (array_key_exists($keys[97], $arr)) {
            $this->setIntbconftrecmmtstock($arr[$keys[97]]);
        }
        if (array_key_exists($keys[98], $arr)) {
            $this->setIntbconfusefrtin($arr[$keys[98]]);
        }
        if (array_key_exists($keys[99], $arr)) {
            $this->setIntbconfeachoruom($arr[$keys[99]]);
        }
        if (array_key_exists($keys[100], $arr)) {
            $this->setIntbconfneglotcorr($arr[$keys[100]]);
        }
        if (array_key_exists($keys[101], $arr)) {
            $this->setIntbconftrnsglacct($arr[$keys[101]]);
        }
        if (array_key_exists($keys[102], $arr)) {
            $this->setIntbconftrnsprotstock($arr[$keys[102]]);
        }
        if (array_key_exists($keys[103], $arr)) {
            $this->setIntbconfnumericitem($arr[$keys[103]]);
        }
        if (array_key_exists($keys[104], $arr)) {
            $this->setIntbconfitemdigits($arr[$keys[104]]);
        }
        if (array_key_exists($keys[105], $arr)) {
            $this->setIntbconfsinglewhse($arr[$keys[105]]);
        }
        if (array_key_exists($keys[106], $arr)) {
            $this->setIntbconfupdusepct($arr[$keys[106]]);
        }
        if (array_key_exists($keys[107], $arr)) {
            $this->setIntbconfupdpric($arr[$keys[107]]);
        }
        if (array_key_exists($keys[108], $arr)) {
            $this->setIntbconfupdstdcost($arr[$keys[108]]);
        }
        if (array_key_exists($keys[109], $arr)) {
            $this->setIntbconfupdxrefcost($arr[$keys[109]]);
        }
        if (array_key_exists($keys[110], $arr)) {
            $this->setIntbconfiqpaupddate($arr[$keys[110]]);
        }
        if (array_key_exists($keys[111], $arr)) {
            $this->setIntbconfupcxrefoptn($arr[$keys[111]]);
        }
        if (array_key_exists($keys[112], $arr)) {
            $this->setIntbconfresqyn($arr[$keys[112]]);
        }
        if (array_key_exists($keys[113], $arr)) {
            $this->setIntbconfresqitembin($arr[$keys[113]]);
        }
        if (array_key_exists($keys[114], $arr)) {
            $this->setIntbconfresvcost($arr[$keys[114]]);
        }
        if (array_key_exists($keys[115], $arr)) {
            $this->setIntbcon2tranzerorqst($arr[$keys[115]]);
        }
        if (array_key_exists($keys[116], $arr)) {
            $this->setIntbconfmonendadjdate($arr[$keys[116]]);
        }
        if (array_key_exists($keys[117], $arr)) {
            $this->setIntbconfmonendtrndate($arr[$keys[117]]);
        }
        if (array_key_exists($keys[118], $arr)) {
            $this->setIntbconfmonendlogdate($arr[$keys[118]]);
        }
        if (array_key_exists($keys[119], $arr)) {
            $this->setIntbconfdstatproc($arr[$keys[119]]);
        }
        if (array_key_exists($keys[120], $arr)) {
            $this->setIntbconfstancostupd($arr[$keys[120]]);
        }
        if (array_key_exists($keys[121], $arr)) {
            $this->setIntbconflastcost($arr[$keys[121]]);
        }
        if (array_key_exists($keys[122], $arr)) {
            $this->setIntbconfusesorgpct($arr[$keys[122]]);
        }
        if (array_key_exists($keys[123], $arr)) {
            $this->setIntbconfaddonstan($arr[$keys[123]]);
        }
        if (array_key_exists($keys[124], $arr)) {
            $this->setIntbconfstdcosterror($arr[$keys[124]]);
        }
        if (array_key_exists($keys[125], $arr)) {
            $this->setIntbconfavgcurrfive($arr[$keys[125]]);
        }
        if (array_key_exists($keys[126], $arr)) {
            $this->setIntbconfusecntrlbin($arr[$keys[126]]);
        }
        if (array_key_exists($keys[127], $arr)) {
            $this->setIntbconfnbrbinareas($arr[$keys[127]]);
        }
        if (array_key_exists($keys[128], $arr)) {
            $this->setIntbconfusemultbin($arr[$keys[128]]);
        }
        if (array_key_exists($keys[129], $arr)) {
            $this->setIntbconfdfltwhsebin($arr[$keys[129]]);
        }
        if (array_key_exists($keys[130], $arr)) {
            $this->setIntbconfdfltbin($arr[$keys[130]]);
        }
        if (array_key_exists($keys[131], $arr)) {
            $this->setIntbconfctryitemlot($arr[$keys[131]]);
        }
        if (array_key_exists($keys[132], $arr)) {
            $this->setIntbconfuseshipbin($arr[$keys[132]]);
        }
        if (array_key_exists($keys[133], $arr)) {
            $this->setIntbcon2prtbinrlabel($arr[$keys[133]]);
        }
        if (array_key_exists($keys[134], $arr)) {
            $this->setIntbcon2itemlookup($arr[$keys[134]]);
        }
        if (array_key_exists($keys[135], $arr)) {
            $this->setIntbconfincldcti($arr[$keys[135]]);
        }
        if (array_key_exists($keys[136], $arr)) {
            $this->setIntbconfcertimage($arr[$keys[136]]);
        }
        if (array_key_exists($keys[137], $arr)) {
            $this->setIntbconfdrawimage($arr[$keys[137]]);
        }
        if (array_key_exists($keys[138], $arr)) {
            $this->setIntbconfconfirmimage($arr[$keys[138]]);
        }
        if (array_key_exists($keys[139], $arr)) {
            $this->setIntbcon2productimage($arr[$keys[139]]);
        }
        if (array_key_exists($keys[140], $arr)) {
            $this->setIntbconfdefpick($arr[$keys[140]]);
        }
        if (array_key_exists($keys[141], $arr)) {
            $this->setIntbconfdefpack($arr[$keys[141]]);
        }
        if (array_key_exists($keys[142], $arr)) {
            $this->setIntbconfdefinvc($arr[$keys[142]]);
        }
        if (array_key_exists($keys[143], $arr)) {
            $this->setIntbconfdefack($arr[$keys[143]]);
        }
        if (array_key_exists($keys[144], $arr)) {
            $this->setIntbconfdefquot($arr[$keys[144]]);
        }
        if (array_key_exists($keys[145], $arr)) {
            $this->setIntbconfdefpo($arr[$keys[145]]);
        }
        if (array_key_exists($keys[146], $arr)) {
            $this->setIntbconfdeftrans($arr[$keys[146]]);
        }
        if (array_key_exists($keys[147], $arr)) {
            $this->setIntbconfadjglcogs($arr[$keys[147]]);
        }
        if (array_key_exists($keys[148], $arr)) {
            $this->setIntbcon2dfltadjglacct($arr[$keys[148]]);
        }
        if (array_key_exists($keys[149], $arr)) {
            $this->setIntbconfadjcostbase($arr[$keys[149]]);
        }
        if (array_key_exists($keys[150], $arr)) {
            $this->setIntbconfdfltadjtbin($arr[$keys[150]]);
        }
        if (array_key_exists($keys[151], $arr)) {
            $this->setIntbconfadjtbin($arr[$keys[151]]);
        }
        if (array_key_exists($keys[152], $arr)) {
            $this->setIntbconfcstockseq($arr[$keys[152]]);
        }
        if (array_key_exists($keys[153], $arr)) {
            $this->setIntbconfcstockhistday($arr[$keys[153]]);
        }
        if (array_key_exists($keys[154], $arr)) {
            $this->setIntbconfcstockformat($arr[$keys[154]]);
        }
        if (array_key_exists($keys[155], $arr)) {
            $this->setIntbconfcstkexportitem($arr[$keys[155]]);
        }
        if (array_key_exists($keys[156], $arr)) {
            $this->setIntbconfcstkpdmcontract($arr[$keys[156]]);
        }
        if (array_key_exists($keys[157], $arr)) {
            $this->setIntbcon2importseq($arr[$keys[157]]);
        }
        if (array_key_exists($keys[158], $arr)) {
            $this->setIntbconfstopitemchg($arr[$keys[158]]);
        }
        if (array_key_exists($keys[159], $arr)) {
            $this->setIntbconfaddtomxrfe($arr[$keys[159]]);
        }
        if (array_key_exists($keys[160], $arr)) {
            $this->setIntbconfmxrfevendid($arr[$keys[160]]);
        }
        if (array_key_exists($keys[161], $arr)) {
            $this->setIntbcon2newidlabellist($arr[$keys[161]]);
        }
        if (array_key_exists($keys[162], $arr)) {
            $this->setIntbconfuseformat($arr[$keys[162]]);
        }
        if (array_key_exists($keys[163], $arr)) {
            $this->setIntbconfdefformat($arr[$keys[163]]);
        }
        if (array_key_exists($keys[164], $arr)) {
            $this->setIntbconfseqshortitem($arr[$keys[164]]);
        }
        if (array_key_exists($keys[165], $arr)) {
            $this->setIntbconfshortitemlen($arr[$keys[165]]);
        }
        if (array_key_exists($keys[166], $arr)) {
            $this->setIntbconfusescale($arr[$keys[166]]);
        }
        if (array_key_exists($keys[167], $arr)) {
            $this->setIntbconfstorewght($arr[$keys[167]]);
        }
        if (array_key_exists($keys[168], $arr)) {
            $this->setIntbconfvalidasstcode($arr[$keys[168]]);
        }
        if (array_key_exists($keys[169], $arr)) {
            $this->setIntbconfwhitegoods($arr[$keys[169]]);
        }
        if (array_key_exists($keys[170], $arr)) {
            $this->setIntbcon2transcustid($arr[$keys[170]]);
        }
        if (array_key_exists($keys[171], $arr)) {
            $this->setDateupdtd($arr[$keys[171]]);
        }
        if (array_key_exists($keys[172], $arr)) {
            $this->setTimeupdtd($arr[$keys[172]]);
        }
        if (array_key_exists($keys[173], $arr)) {
            $this->setDummy($arr[$keys[173]]);
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
     * @return $this|\ConfigIn The current object, for fluid interface
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
        $criteria = new Criteria(ConfigInTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFKEY)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFKEY, $this->intbconfkey);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFGLIFAC)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFGLIFAC, $this->intbconfglifac);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEIW)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSEIW, $this->intbconfuseiw);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFLIFOFIFO)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFLIFOFIFO, $this->intbconflifofifo);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFGONEG)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFGONEG, $this->intbconfgoneg);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSELOTS)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSELOTS, $this->intbconfuselots);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNBRUPPR)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFNBRUPPR, $this->intbconfnbruppr);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDESCUPPR)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDESCUPPR, $this->intbconfdescuppr);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEDESC2)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSEDESC2, $this->intbconfusedesc2);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEUPCCODE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSEUPCCODE, $this->intbconfuseupccode);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPCEANCNTRL)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUPCEANCNTRL, $this->intbconfupceancntrl);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPCGENNBR)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUPCGENNBR, $this->intbconfupcgennbr);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2ALLOWDUPUPC)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2ALLOWDUPUPC, $this->intbcon2allowdupupc);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFXREFNOSPACE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFXREFNOSPACE, $this->intbconfxrefnospace);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEPRICGRUP)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSEPRICGRUP, $this->intbconfusepricgrup);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSECOMMGRUP)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSECOMMGRUP, $this->intbconfusecommgrup);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEWARRDAYS)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSEWARRDAYS, $this->intbconfusewarrdays);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSTANBASEDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFSTANBASEDEF, $this->intbconfstanbasedef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFGRUPDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFGRUPDEF, $this->intbconfgrupdef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFPRICGRUPDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFPRICGRUPDEF, $this->intbconfpricgrupdef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCOMMGRUPDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFCOMMGRUPDEF, $this->intbconfcommgrupdef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFTYPEDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFTYPEDEF, $this->intbconftypedef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFPRICUSEITEM)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFPRICUSEITEM, $this->intbconfpricuseitem);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCOMMUSEITEM)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFCOMMUSEITEM, $this->intbconfcommuseitem);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUOMSALEDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUOMSALEDEF, $this->intbconfuomsaledef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUOMPURDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUOMPURDEF, $this->intbconfuompurdef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSVIADEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFSVIADEF, $this->intbconfsviadef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCUSTXREFORUSE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFCUSTXREFORUSE, $this->intbconfcustxreforuse);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFHEADGETDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFHEADGETDEF, $this->intbconfheadgetdef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFITEMGETDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFITEMGETDEF, $this->intbconfitemgetdef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFGETDISPOHAVAL)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFGETDISPOHAVAL, $this->intbconfgetdispohaval);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSERCODE1LABL)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSERCODE1LABL, $this->intbconfusercode1labl);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSERCODE1VER)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSERCODE1VER, $this->intbconfusercode1ver);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSERCODE2LABL)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSERCODE2LABL, $this->intbconfusercode2labl);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSERCODE2VER)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSERCODE2VER, $this->intbconfusercode2ver);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFITEMLINE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFITEMLINE, $this->intbconfitemline);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFITEMCOLS)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFITEMCOLS, $this->intbconfitemcols);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFHEADLINE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFHEADLINE, $this->intbconfheadline);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFHEADCOLS)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFHEADCOLS, $this->intbconfheadcols);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDETLINE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDETLINE, $this->intbconfdetline);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDETCOLS)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDETCOLS, $this->intbconfdetcols);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMINMAXZERO)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFMINMAXZERO, $this->intbconfminmaxzero);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMINREC)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFMINREC, $this->intbconfminrec);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFATBELOWMIN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFATBELOWMIN, $this->intbconfatbelowmin);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFONEWHSE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFONEWHSE, $this->intbconfonewhse);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFYTDMTH)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFYTDMTH, $this->intbconfytdmth);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEGRAMSLTR)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSEGRAMSLTR, $this->intbconfusegramsltr);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCBYWHSE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCBYWHSE, $this->intbconfabcbywhse);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCNBRMTHS)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCNBRMTHS, $this->intbconfabcnbrmths);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCBASECODE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCBASECODE, $this->intbconfabcbasecode);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLA)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCLEVLA, $this->intbconfabclevla);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLB)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCLEVLB, $this->intbconfabclevlb);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLC)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCLEVLC, $this->intbconfabclevlc);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLD)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCLEVLD, $this->intbconfabclevld);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCLEVLE, $this->intbconfabclevle);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCLEVLF, $this->intbconfabclevlf);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLG)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCLEVLG, $this->intbconfabclevlg);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLH)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCLEVLH, $this->intbconfabclevlh);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLI)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCLEVLI, $this->intbconfabclevli);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCLEVLJ)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCLEVLJ, $this->intbconfabclevlj);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEFOREIGNX)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSEFOREIGNX, $this->intbconfuseforeignx);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSENAFTA)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSENAFTA, $this->intbconfusenafta);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNAFTAPREFCODE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFNAFTAPREFCODE, $this->intbconfnaftaprefcode);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNAFTAPRODUCER)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFNAFTAPRODUCER, $this->intbconfnaftaproducer);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNAFTADOCCODE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFNAFTADOCCODE, $this->intbconfnaftadoccode);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFPHYSCURRWKSH)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFPHYSCURRWKSH, $this->intbconfphyscurrwksh);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONF20OR30)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONF20OR30, $this->intbconf20or30);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDISPORIGCNT)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDISPORIGCNT, $this->intbconfdisporigcnt);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDISPGL)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDISPGL, $this->intbconfdispgl);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDISPREF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDISPREF, $this->intbconfdispref);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDISPCOST)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDISPCOST, $this->intbconfdispcost);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFPRTVAL)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFPRTVAL, $this->intbconfprtval);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFPRTGL)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFPRTGL, $this->intbconfprtgl);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFGLACCT)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFGLACCT, $this->intbconfglacct);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFREF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFREF, $this->intbconfref);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCOSTTYPE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFCOSTTYPE, $this->intbconfcosttype);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNORMALONLY)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFNORMALONLY, $this->intbconfnormalonly);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEWHSEDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSEWHSEDEF, $this->intbconfusewhsedef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE01)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2DFLTWHSE01, $this->intbcon2dfltwhse01);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE02)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2DFLTWHSE02, $this->intbcon2dfltwhse02);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE03)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2DFLTWHSE03, $this->intbcon2dfltwhse03);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE04)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2DFLTWHSE04, $this->intbcon2dfltwhse04);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE05)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2DFLTWHSE05, $this->intbcon2dfltwhse05);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE06)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2DFLTWHSE06, $this->intbcon2dfltwhse06);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE07)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2DFLTWHSE07, $this->intbcon2dfltwhse07);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE08)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2DFLTWHSE08, $this->intbcon2dfltwhse08);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE09)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2DFLTWHSE09, $this->intbcon2dfltwhse09);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTWHSE10)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2DFLTWHSE10, $this->intbcon2dfltwhse10);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFBINDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFBINDEF, $this->intbconfbindef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCYCLDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFCYCLDEF, $this->intbconfcycldef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSTATDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFSTATDEF, $this->intbconfstatdef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFABCDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFABCDEF, $this->intbconfabcdef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSPECORDRDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFSPECORDRDEF, $this->intbconfspecordrdef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFORDRPNTDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFORDRPNTDEF, $this->intbconfordrpntdef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMAXDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFMAXDEF, $this->intbconfmaxdef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFORDRQTYDEF)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFORDRQTYDEF, $this->intbconfordrqtydef);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFTRCPTALLOWCMPL)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFTRCPTALLOWCMPL, $this->intbconftrcptallowcmpl);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFTRECMMTSTOCK)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFTRECMMTSTOCK, $this->intbconftrecmmtstock);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEFRTIN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSEFRTIN, $this->intbconfusefrtin);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFEACHORUOM)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFEACHORUOM, $this->intbconfeachoruom);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNEGLOTCORR)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFNEGLOTCORR, $this->intbconfneglotcorr);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFTRNSGLACCT)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFTRNSGLACCT, $this->intbconftrnsglacct);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFTRNSPROTSTOCK, $this->intbconftrnsprotstock);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNUMERICITEM)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFNUMERICITEM, $this->intbconfnumericitem);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFITEMDIGITS)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFITEMDIGITS, $this->intbconfitemdigits);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSINGLEWHSE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFSINGLEWHSE, $this->intbconfsinglewhse);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPDUSEPCT)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUPDUSEPCT, $this->intbconfupdusepct);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPDPRIC)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUPDPRIC, $this->intbconfupdpric);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPDSTDCOST)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUPDSTDCOST, $this->intbconfupdstdcost);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPDXREFCOST)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUPDXREFCOST, $this->intbconfupdxrefcost);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFIQPAUPDDATE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFIQPAUPDDATE, $this->intbconfiqpaupddate);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUPCXREFOPTN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUPCXREFOPTN, $this->intbconfupcxrefoptn);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFRESQYN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFRESQYN, $this->intbconfresqyn);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFRESQITEMBIN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFRESQITEMBIN, $this->intbconfresqitembin);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFRESVCOST)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFRESVCOST, $this->intbconfresvcost);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2TRANZERORQST)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2TRANZERORQST, $this->intbcon2tranzerorqst);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMONENDADJDATE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFMONENDADJDATE, $this->intbconfmonendadjdate);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMONENDTRNDATE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFMONENDTRNDATE, $this->intbconfmonendtrndate);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMONENDLOGDATE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFMONENDLOGDATE, $this->intbconfmonendlogdate);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDSTATPROC)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDSTATPROC, $this->intbconfdstatproc);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSTANCOSTUPD)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFSTANCOSTUPD, $this->intbconfstancostupd);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFLASTCOST)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFLASTCOST, $this->intbconflastcost);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSESORGPCT)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSESORGPCT, $this->intbconfusesorgpct);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFADDONSTAN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFADDONSTAN, $this->intbconfaddonstan);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSTDCOSTERROR)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFSTDCOSTERROR, $this->intbconfstdcosterror);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFAVGCURRFIVE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFAVGCURRFIVE, $this->intbconfavgcurrfive);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSECNTRLBIN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSECNTRLBIN, $this->intbconfusecntrlbin);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFNBRBINAREAS)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFNBRBINAREAS, $this->intbconfnbrbinareas);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEMULTBIN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSEMULTBIN, $this->intbconfusemultbin);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDFLTWHSEBIN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDFLTWHSEBIN, $this->intbconfdfltwhsebin);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDFLTBIN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDFLTBIN, $this->intbconfdfltbin);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCTRYITEMLOT)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFCTRYITEMLOT, $this->intbconfctryitemlot);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSESHIPBIN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSESHIPBIN, $this->intbconfuseshipbin);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2PRTBINRLABEL)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2PRTBINRLABEL, $this->intbcon2prtbinrlabel);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2ITEMLOOKUP)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2ITEMLOOKUP, $this->intbcon2itemlookup);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFINCLDCTI)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFINCLDCTI, $this->intbconfincldcti);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCERTIMAGE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFCERTIMAGE, $this->intbconfcertimage);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDRAWIMAGE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDRAWIMAGE, $this->intbconfdrawimage);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCONFIRMIMAGE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFCONFIRMIMAGE, $this->intbconfconfirmimage);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2PRODUCTIMAGE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2PRODUCTIMAGE, $this->intbcon2productimage);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFPICK)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDEFPICK, $this->intbconfdefpick);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFPACK)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDEFPACK, $this->intbconfdefpack);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFINVC)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDEFINVC, $this->intbconfdefinvc);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFACK)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDEFACK, $this->intbconfdefack);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFQUOT)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDEFQUOT, $this->intbconfdefquot);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFPO)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDEFPO, $this->intbconfdefpo);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFTRANS)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDEFTRANS, $this->intbconfdeftrans);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFADJGLCOGS)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFADJGLCOGS, $this->intbconfadjglcogs);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2DFLTADJGLACCT)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2DFLTADJGLACCT, $this->intbcon2dfltadjglacct);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFADJCOSTBASE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFADJCOSTBASE, $this->intbconfadjcostbase);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDFLTADJTBIN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDFLTADJTBIN, $this->intbconfdfltadjtbin);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFADJTBIN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFADJTBIN, $this->intbconfadjtbin);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCSTOCKSEQ)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFCSTOCKSEQ, $this->intbconfcstockseq);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFCSTOCKHISTDAY, $this->intbconfcstockhistday);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCSTOCKFORMAT)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFCSTOCKFORMAT, $this->intbconfcstockformat);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCSTKEXPORTITEM)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFCSTKEXPORTITEM, $this->intbconfcstkexportitem);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFCSTKPDMCONTRACT)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFCSTKPDMCONTRACT, $this->intbconfcstkpdmcontract);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2IMPORTSEQ)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2IMPORTSEQ, $this->intbcon2importseq);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSTOPITEMCHG)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFSTOPITEMCHG, $this->intbconfstopitemchg);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFADDTOMXRFE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFADDTOMXRFE, $this->intbconfaddtomxrfe);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFMXRFEVENDID)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFMXRFEVENDID, $this->intbconfmxrfevendid);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2NEWIDLABELLIST)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2NEWIDLABELLIST, $this->intbcon2newidlabellist);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSEFORMAT)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSEFORMAT, $this->intbconfuseformat);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFDEFFORMAT)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFDEFFORMAT, $this->intbconfdefformat);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSEQSHORTITEM)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFSEQSHORTITEM, $this->intbconfseqshortitem);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSHORTITEMLEN)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFSHORTITEMLEN, $this->intbconfshortitemlen);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFUSESCALE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFUSESCALE, $this->intbconfusescale);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFSTOREWGHT)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFSTOREWGHT, $this->intbconfstorewght);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFVALIDASSTCODE)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFVALIDASSTCODE, $this->intbconfvalidasstcode);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCONFWHITEGOODS)) {
            $criteria->add(ConfigInTableMap::COL_INTBCONFWHITEGOODS, $this->intbconfwhitegoods);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_INTBCON2TRANSCUSTID)) {
            $criteria->add(ConfigInTableMap::COL_INTBCON2TRANSCUSTID, $this->intbcon2transcustid);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_DATEUPDTD)) {
            $criteria->add(ConfigInTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ConfigInTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ConfigInTableMap::COL_DUMMY)) {
            $criteria->add(ConfigInTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildConfigInQuery::create();
        $criteria->add(ConfigInTableMap::COL_INTBCONFKEY, $this->intbconfkey);

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
        $validPk = null !== $this->getIntbconfkey();

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
        return $this->getIntbconfkey();
    }

    /**
     * Generic method to set the primary key (intbconfkey column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIntbconfkey($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getIntbconfkey();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ConfigIn (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIntbconfkey($this->getIntbconfkey());
        $copyObj->setIntbconfglifac($this->getIntbconfglifac());
        $copyObj->setIntbconfuseiw($this->getIntbconfuseiw());
        $copyObj->setIntbconflifofifo($this->getIntbconflifofifo());
        $copyObj->setIntbconfgoneg($this->getIntbconfgoneg());
        $copyObj->setIntbconfuselots($this->getIntbconfuselots());
        $copyObj->setIntbconfnbruppr($this->getIntbconfnbruppr());
        $copyObj->setIntbconfdescuppr($this->getIntbconfdescuppr());
        $copyObj->setIntbconfusedesc2($this->getIntbconfusedesc2());
        $copyObj->setIntbconfuseupccode($this->getIntbconfuseupccode());
        $copyObj->setIntbconfupceancntrl($this->getIntbconfupceancntrl());
        $copyObj->setIntbconfupcgennbr($this->getIntbconfupcgennbr());
        $copyObj->setIntbcon2allowdupupc($this->getIntbcon2allowdupupc());
        $copyObj->setIntbconfxrefnospace($this->getIntbconfxrefnospace());
        $copyObj->setIntbconfusepricgrup($this->getIntbconfusepricgrup());
        $copyObj->setIntbconfusecommgrup($this->getIntbconfusecommgrup());
        $copyObj->setIntbconfusewarrdays($this->getIntbconfusewarrdays());
        $copyObj->setIntbconfstanbasedef($this->getIntbconfstanbasedef());
        $copyObj->setIntbconfgrupdef($this->getIntbconfgrupdef());
        $copyObj->setIntbconfpricgrupdef($this->getIntbconfpricgrupdef());
        $copyObj->setIntbconfcommgrupdef($this->getIntbconfcommgrupdef());
        $copyObj->setIntbconftypedef($this->getIntbconftypedef());
        $copyObj->setIntbconfpricuseitem($this->getIntbconfpricuseitem());
        $copyObj->setIntbconfcommuseitem($this->getIntbconfcommuseitem());
        $copyObj->setIntbconfuomsaledef($this->getIntbconfuomsaledef());
        $copyObj->setIntbconfuompurdef($this->getIntbconfuompurdef());
        $copyObj->setIntbconfsviadef($this->getIntbconfsviadef());
        $copyObj->setIntbconfcustxreforuse($this->getIntbconfcustxreforuse());
        $copyObj->setIntbconfheadgetdef($this->getIntbconfheadgetdef());
        $copyObj->setIntbconfitemgetdef($this->getIntbconfitemgetdef());
        $copyObj->setIntbconfgetdispohaval($this->getIntbconfgetdispohaval());
        $copyObj->setIntbconfusercode1labl($this->getIntbconfusercode1labl());
        $copyObj->setIntbconfusercode1ver($this->getIntbconfusercode1ver());
        $copyObj->setIntbconfusercode2labl($this->getIntbconfusercode2labl());
        $copyObj->setIntbconfusercode2ver($this->getIntbconfusercode2ver());
        $copyObj->setIntbconfitemline($this->getIntbconfitemline());
        $copyObj->setIntbconfitemcols($this->getIntbconfitemcols());
        $copyObj->setIntbconfheadline($this->getIntbconfheadline());
        $copyObj->setIntbconfheadcols($this->getIntbconfheadcols());
        $copyObj->setIntbconfdetline($this->getIntbconfdetline());
        $copyObj->setIntbconfdetcols($this->getIntbconfdetcols());
        $copyObj->setIntbconfminmaxzero($this->getIntbconfminmaxzero());
        $copyObj->setIntbconfminrec($this->getIntbconfminrec());
        $copyObj->setIntbconfatbelowmin($this->getIntbconfatbelowmin());
        $copyObj->setIntbconfonewhse($this->getIntbconfonewhse());
        $copyObj->setIntbconfytdmth($this->getIntbconfytdmth());
        $copyObj->setIntbconfusegramsltr($this->getIntbconfusegramsltr());
        $copyObj->setIntbconfabcbywhse($this->getIntbconfabcbywhse());
        $copyObj->setIntbconfabcnbrmths($this->getIntbconfabcnbrmths());
        $copyObj->setIntbconfabcbasecode($this->getIntbconfabcbasecode());
        $copyObj->setIntbconfabclevla($this->getIntbconfabclevla());
        $copyObj->setIntbconfabclevlb($this->getIntbconfabclevlb());
        $copyObj->setIntbconfabclevlc($this->getIntbconfabclevlc());
        $copyObj->setIntbconfabclevld($this->getIntbconfabclevld());
        $copyObj->setIntbconfabclevle($this->getIntbconfabclevle());
        $copyObj->setIntbconfabclevlf($this->getIntbconfabclevlf());
        $copyObj->setIntbconfabclevlg($this->getIntbconfabclevlg());
        $copyObj->setIntbconfabclevlh($this->getIntbconfabclevlh());
        $copyObj->setIntbconfabclevli($this->getIntbconfabclevli());
        $copyObj->setIntbconfabclevlj($this->getIntbconfabclevlj());
        $copyObj->setIntbconfuseforeignx($this->getIntbconfuseforeignx());
        $copyObj->setIntbconfusenafta($this->getIntbconfusenafta());
        $copyObj->setIntbconfnaftaprefcode($this->getIntbconfnaftaprefcode());
        $copyObj->setIntbconfnaftaproducer($this->getIntbconfnaftaproducer());
        $copyObj->setIntbconfnaftadoccode($this->getIntbconfnaftadoccode());
        $copyObj->setIntbconfphyscurrwksh($this->getIntbconfphyscurrwksh());
        $copyObj->setIntbconf20or30($this->getIntbconf20or30());
        $copyObj->setIntbconfdisporigcnt($this->getIntbconfdisporigcnt());
        $copyObj->setIntbconfdispgl($this->getIntbconfdispgl());
        $copyObj->setIntbconfdispref($this->getIntbconfdispref());
        $copyObj->setIntbconfdispcost($this->getIntbconfdispcost());
        $copyObj->setIntbconfprtval($this->getIntbconfprtval());
        $copyObj->setIntbconfprtgl($this->getIntbconfprtgl());
        $copyObj->setIntbconfglacct($this->getIntbconfglacct());
        $copyObj->setIntbconfref($this->getIntbconfref());
        $copyObj->setIntbconfcosttype($this->getIntbconfcosttype());
        $copyObj->setIntbconfnormalonly($this->getIntbconfnormalonly());
        $copyObj->setIntbconfusewhsedef($this->getIntbconfusewhsedef());
        $copyObj->setIntbcon2dfltwhse01($this->getIntbcon2dfltwhse01());
        $copyObj->setIntbcon2dfltwhse02($this->getIntbcon2dfltwhse02());
        $copyObj->setIntbcon2dfltwhse03($this->getIntbcon2dfltwhse03());
        $copyObj->setIntbcon2dfltwhse04($this->getIntbcon2dfltwhse04());
        $copyObj->setIntbcon2dfltwhse05($this->getIntbcon2dfltwhse05());
        $copyObj->setIntbcon2dfltwhse06($this->getIntbcon2dfltwhse06());
        $copyObj->setIntbcon2dfltwhse07($this->getIntbcon2dfltwhse07());
        $copyObj->setIntbcon2dfltwhse08($this->getIntbcon2dfltwhse08());
        $copyObj->setIntbcon2dfltwhse09($this->getIntbcon2dfltwhse09());
        $copyObj->setIntbcon2dfltwhse10($this->getIntbcon2dfltwhse10());
        $copyObj->setIntbconfbindef($this->getIntbconfbindef());
        $copyObj->setIntbconfcycldef($this->getIntbconfcycldef());
        $copyObj->setIntbconfstatdef($this->getIntbconfstatdef());
        $copyObj->setIntbconfabcdef($this->getIntbconfabcdef());
        $copyObj->setIntbconfspecordrdef($this->getIntbconfspecordrdef());
        $copyObj->setIntbconfordrpntdef($this->getIntbconfordrpntdef());
        $copyObj->setIntbconfmaxdef($this->getIntbconfmaxdef());
        $copyObj->setIntbconfordrqtydef($this->getIntbconfordrqtydef());
        $copyObj->setIntbconftrcptallowcmpl($this->getIntbconftrcptallowcmpl());
        $copyObj->setIntbconftrecmmtstock($this->getIntbconftrecmmtstock());
        $copyObj->setIntbconfusefrtin($this->getIntbconfusefrtin());
        $copyObj->setIntbconfeachoruom($this->getIntbconfeachoruom());
        $copyObj->setIntbconfneglotcorr($this->getIntbconfneglotcorr());
        $copyObj->setIntbconftrnsglacct($this->getIntbconftrnsglacct());
        $copyObj->setIntbconftrnsprotstock($this->getIntbconftrnsprotstock());
        $copyObj->setIntbconfnumericitem($this->getIntbconfnumericitem());
        $copyObj->setIntbconfitemdigits($this->getIntbconfitemdigits());
        $copyObj->setIntbconfsinglewhse($this->getIntbconfsinglewhse());
        $copyObj->setIntbconfupdusepct($this->getIntbconfupdusepct());
        $copyObj->setIntbconfupdpric($this->getIntbconfupdpric());
        $copyObj->setIntbconfupdstdcost($this->getIntbconfupdstdcost());
        $copyObj->setIntbconfupdxrefcost($this->getIntbconfupdxrefcost());
        $copyObj->setIntbconfiqpaupddate($this->getIntbconfiqpaupddate());
        $copyObj->setIntbconfupcxrefoptn($this->getIntbconfupcxrefoptn());
        $copyObj->setIntbconfresqyn($this->getIntbconfresqyn());
        $copyObj->setIntbconfresqitembin($this->getIntbconfresqitembin());
        $copyObj->setIntbconfresvcost($this->getIntbconfresvcost());
        $copyObj->setIntbcon2tranzerorqst($this->getIntbcon2tranzerorqst());
        $copyObj->setIntbconfmonendadjdate($this->getIntbconfmonendadjdate());
        $copyObj->setIntbconfmonendtrndate($this->getIntbconfmonendtrndate());
        $copyObj->setIntbconfmonendlogdate($this->getIntbconfmonendlogdate());
        $copyObj->setIntbconfdstatproc($this->getIntbconfdstatproc());
        $copyObj->setIntbconfstancostupd($this->getIntbconfstancostupd());
        $copyObj->setIntbconflastcost($this->getIntbconflastcost());
        $copyObj->setIntbconfusesorgpct($this->getIntbconfusesorgpct());
        $copyObj->setIntbconfaddonstan($this->getIntbconfaddonstan());
        $copyObj->setIntbconfstdcosterror($this->getIntbconfstdcosterror());
        $copyObj->setIntbconfavgcurrfive($this->getIntbconfavgcurrfive());
        $copyObj->setIntbconfusecntrlbin($this->getIntbconfusecntrlbin());
        $copyObj->setIntbconfnbrbinareas($this->getIntbconfnbrbinareas());
        $copyObj->setIntbconfusemultbin($this->getIntbconfusemultbin());
        $copyObj->setIntbconfdfltwhsebin($this->getIntbconfdfltwhsebin());
        $copyObj->setIntbconfdfltbin($this->getIntbconfdfltbin());
        $copyObj->setIntbconfctryitemlot($this->getIntbconfctryitemlot());
        $copyObj->setIntbconfuseshipbin($this->getIntbconfuseshipbin());
        $copyObj->setIntbcon2prtbinrlabel($this->getIntbcon2prtbinrlabel());
        $copyObj->setIntbcon2itemlookup($this->getIntbcon2itemlookup());
        $copyObj->setIntbconfincldcti($this->getIntbconfincldcti());
        $copyObj->setIntbconfcertimage($this->getIntbconfcertimage());
        $copyObj->setIntbconfdrawimage($this->getIntbconfdrawimage());
        $copyObj->setIntbconfconfirmimage($this->getIntbconfconfirmimage());
        $copyObj->setIntbcon2productimage($this->getIntbcon2productimage());
        $copyObj->setIntbconfdefpick($this->getIntbconfdefpick());
        $copyObj->setIntbconfdefpack($this->getIntbconfdefpack());
        $copyObj->setIntbconfdefinvc($this->getIntbconfdefinvc());
        $copyObj->setIntbconfdefack($this->getIntbconfdefack());
        $copyObj->setIntbconfdefquot($this->getIntbconfdefquot());
        $copyObj->setIntbconfdefpo($this->getIntbconfdefpo());
        $copyObj->setIntbconfdeftrans($this->getIntbconfdeftrans());
        $copyObj->setIntbconfadjglcogs($this->getIntbconfadjglcogs());
        $copyObj->setIntbcon2dfltadjglacct($this->getIntbcon2dfltadjglacct());
        $copyObj->setIntbconfadjcostbase($this->getIntbconfadjcostbase());
        $copyObj->setIntbconfdfltadjtbin($this->getIntbconfdfltadjtbin());
        $copyObj->setIntbconfadjtbin($this->getIntbconfadjtbin());
        $copyObj->setIntbconfcstockseq($this->getIntbconfcstockseq());
        $copyObj->setIntbconfcstockhistday($this->getIntbconfcstockhistday());
        $copyObj->setIntbconfcstockformat($this->getIntbconfcstockformat());
        $copyObj->setIntbconfcstkexportitem($this->getIntbconfcstkexportitem());
        $copyObj->setIntbconfcstkpdmcontract($this->getIntbconfcstkpdmcontract());
        $copyObj->setIntbcon2importseq($this->getIntbcon2importseq());
        $copyObj->setIntbconfstopitemchg($this->getIntbconfstopitemchg());
        $copyObj->setIntbconfaddtomxrfe($this->getIntbconfaddtomxrfe());
        $copyObj->setIntbconfmxrfevendid($this->getIntbconfmxrfevendid());
        $copyObj->setIntbcon2newidlabellist($this->getIntbcon2newidlabellist());
        $copyObj->setIntbconfuseformat($this->getIntbconfuseformat());
        $copyObj->setIntbconfdefformat($this->getIntbconfdefformat());
        $copyObj->setIntbconfseqshortitem($this->getIntbconfseqshortitem());
        $copyObj->setIntbconfshortitemlen($this->getIntbconfshortitemlen());
        $copyObj->setIntbconfusescale($this->getIntbconfusescale());
        $copyObj->setIntbconfstorewght($this->getIntbconfstorewght());
        $copyObj->setIntbconfvalidasstcode($this->getIntbconfvalidasstcode());
        $copyObj->setIntbconfwhitegoods($this->getIntbconfwhitegoods());
        $copyObj->setIntbcon2transcustid($this->getIntbcon2transcustid());
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
     * @return \ConfigIn Clone of current object.
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
        $this->intbconfkey = null;
        $this->intbconfglifac = null;
        $this->intbconfuseiw = null;
        $this->intbconflifofifo = null;
        $this->intbconfgoneg = null;
        $this->intbconfuselots = null;
        $this->intbconfnbruppr = null;
        $this->intbconfdescuppr = null;
        $this->intbconfusedesc2 = null;
        $this->intbconfuseupccode = null;
        $this->intbconfupceancntrl = null;
        $this->intbconfupcgennbr = null;
        $this->intbcon2allowdupupc = null;
        $this->intbconfxrefnospace = null;
        $this->intbconfusepricgrup = null;
        $this->intbconfusecommgrup = null;
        $this->intbconfusewarrdays = null;
        $this->intbconfstanbasedef = null;
        $this->intbconfgrupdef = null;
        $this->intbconfpricgrupdef = null;
        $this->intbconfcommgrupdef = null;
        $this->intbconftypedef = null;
        $this->intbconfpricuseitem = null;
        $this->intbconfcommuseitem = null;
        $this->intbconfuomsaledef = null;
        $this->intbconfuompurdef = null;
        $this->intbconfsviadef = null;
        $this->intbconfcustxreforuse = null;
        $this->intbconfheadgetdef = null;
        $this->intbconfitemgetdef = null;
        $this->intbconfgetdispohaval = null;
        $this->intbconfusercode1labl = null;
        $this->intbconfusercode1ver = null;
        $this->intbconfusercode2labl = null;
        $this->intbconfusercode2ver = null;
        $this->intbconfitemline = null;
        $this->intbconfitemcols = null;
        $this->intbconfheadline = null;
        $this->intbconfheadcols = null;
        $this->intbconfdetline = null;
        $this->intbconfdetcols = null;
        $this->intbconfminmaxzero = null;
        $this->intbconfminrec = null;
        $this->intbconfatbelowmin = null;
        $this->intbconfonewhse = null;
        $this->intbconfytdmth = null;
        $this->intbconfusegramsltr = null;
        $this->intbconfabcbywhse = null;
        $this->intbconfabcnbrmths = null;
        $this->intbconfabcbasecode = null;
        $this->intbconfabclevla = null;
        $this->intbconfabclevlb = null;
        $this->intbconfabclevlc = null;
        $this->intbconfabclevld = null;
        $this->intbconfabclevle = null;
        $this->intbconfabclevlf = null;
        $this->intbconfabclevlg = null;
        $this->intbconfabclevlh = null;
        $this->intbconfabclevli = null;
        $this->intbconfabclevlj = null;
        $this->intbconfuseforeignx = null;
        $this->intbconfusenafta = null;
        $this->intbconfnaftaprefcode = null;
        $this->intbconfnaftaproducer = null;
        $this->intbconfnaftadoccode = null;
        $this->intbconfphyscurrwksh = null;
        $this->intbconf20or30 = null;
        $this->intbconfdisporigcnt = null;
        $this->intbconfdispgl = null;
        $this->intbconfdispref = null;
        $this->intbconfdispcost = null;
        $this->intbconfprtval = null;
        $this->intbconfprtgl = null;
        $this->intbconfglacct = null;
        $this->intbconfref = null;
        $this->intbconfcosttype = null;
        $this->intbconfnormalonly = null;
        $this->intbconfusewhsedef = null;
        $this->intbcon2dfltwhse01 = null;
        $this->intbcon2dfltwhse02 = null;
        $this->intbcon2dfltwhse03 = null;
        $this->intbcon2dfltwhse04 = null;
        $this->intbcon2dfltwhse05 = null;
        $this->intbcon2dfltwhse06 = null;
        $this->intbcon2dfltwhse07 = null;
        $this->intbcon2dfltwhse08 = null;
        $this->intbcon2dfltwhse09 = null;
        $this->intbcon2dfltwhse10 = null;
        $this->intbconfbindef = null;
        $this->intbconfcycldef = null;
        $this->intbconfstatdef = null;
        $this->intbconfabcdef = null;
        $this->intbconfspecordrdef = null;
        $this->intbconfordrpntdef = null;
        $this->intbconfmaxdef = null;
        $this->intbconfordrqtydef = null;
        $this->intbconftrcptallowcmpl = null;
        $this->intbconftrecmmtstock = null;
        $this->intbconfusefrtin = null;
        $this->intbconfeachoruom = null;
        $this->intbconfneglotcorr = null;
        $this->intbconftrnsglacct = null;
        $this->intbconftrnsprotstock = null;
        $this->intbconfnumericitem = null;
        $this->intbconfitemdigits = null;
        $this->intbconfsinglewhse = null;
        $this->intbconfupdusepct = null;
        $this->intbconfupdpric = null;
        $this->intbconfupdstdcost = null;
        $this->intbconfupdxrefcost = null;
        $this->intbconfiqpaupddate = null;
        $this->intbconfupcxrefoptn = null;
        $this->intbconfresqyn = null;
        $this->intbconfresqitembin = null;
        $this->intbconfresvcost = null;
        $this->intbcon2tranzerorqst = null;
        $this->intbconfmonendadjdate = null;
        $this->intbconfmonendtrndate = null;
        $this->intbconfmonendlogdate = null;
        $this->intbconfdstatproc = null;
        $this->intbconfstancostupd = null;
        $this->intbconflastcost = null;
        $this->intbconfusesorgpct = null;
        $this->intbconfaddonstan = null;
        $this->intbconfstdcosterror = null;
        $this->intbconfavgcurrfive = null;
        $this->intbconfusecntrlbin = null;
        $this->intbconfnbrbinareas = null;
        $this->intbconfusemultbin = null;
        $this->intbconfdfltwhsebin = null;
        $this->intbconfdfltbin = null;
        $this->intbconfctryitemlot = null;
        $this->intbconfuseshipbin = null;
        $this->intbcon2prtbinrlabel = null;
        $this->intbcon2itemlookup = null;
        $this->intbconfincldcti = null;
        $this->intbconfcertimage = null;
        $this->intbconfdrawimage = null;
        $this->intbconfconfirmimage = null;
        $this->intbcon2productimage = null;
        $this->intbconfdefpick = null;
        $this->intbconfdefpack = null;
        $this->intbconfdefinvc = null;
        $this->intbconfdefack = null;
        $this->intbconfdefquot = null;
        $this->intbconfdefpo = null;
        $this->intbconfdeftrans = null;
        $this->intbconfadjglcogs = null;
        $this->intbcon2dfltadjglacct = null;
        $this->intbconfadjcostbase = null;
        $this->intbconfdfltadjtbin = null;
        $this->intbconfadjtbin = null;
        $this->intbconfcstockseq = null;
        $this->intbconfcstockhistday = null;
        $this->intbconfcstockformat = null;
        $this->intbconfcstkexportitem = null;
        $this->intbconfcstkpdmcontract = null;
        $this->intbcon2importseq = null;
        $this->intbconfstopitemchg = null;
        $this->intbconfaddtomxrfe = null;
        $this->intbconfmxrfevendid = null;
        $this->intbcon2newidlabellist = null;
        $this->intbconfuseformat = null;
        $this->intbconfdefformat = null;
        $this->intbconfseqshortitem = null;
        $this->intbconfshortitemlen = null;
        $this->intbconfusescale = null;
        $this->intbconfstorewght = null;
        $this->intbconfvalidasstcode = null;
        $this->intbconfwhitegoods = null;
        $this->intbcon2transcustid = null;
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
        return (string) $this->exportTo(ConfigInTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            return // parent::preSave($con);
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
            return // parent::preInsert($con);
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
            return // parent::preUpdate($con);
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
            return // parent::preDelete($con);
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
