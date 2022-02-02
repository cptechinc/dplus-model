<?php

namespace Base;

use \ConfigArQuery as ChildConfigArQuery;
use \Exception;
use \PDO;
use Map\ConfigArTableMap;
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
 * Base class that represents a row from the 'ar_config' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class ConfigAr implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\ConfigArTableMap';


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
     * The value for the artbconfkey field.
     *
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $artbconfkey;

    /**
     * The value for the artbconfglifac field.
     *
     * Note: this column has a database default value of: 'Y'
     * @var        string
     */
    protected $artbconfglifac;

    /**
     * The value for the artbconfinifac field.
     *
     * Note: this column has a database default value of: 'Y'
     * @var        string
     */
    protected $artbconfinifac;

    /**
     * The value for the artbconfpcifac field.
     *
     * Note: this column has a database default value of: 'Y'
     * @var        string
     */
    protected $artbconfpcifac;

    /**
     * The value for the artbconfccifac field.
     *
     * Note: this column has a database default value of: 'Y'
     * @var        string
     */
    protected $artbconfccifac;

    /**
     * The value for the artbconfinvcustgl field.
     *
     * Note: this column has a database default value of: 'I'
     * @var        string
     */
    protected $artbconfinvcustgl;

    /**
     * The value for the artbconffrtacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconffrtacct;

    /**
     * The value for the artbconfmiscacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfmiscacct;

    /**
     * The value for the artbconfaracct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfaracct;

    /**
     * The value for the artbconfcashacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfcashacct;

    /**
     * The value for the artbcon2cccashacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbcon2cccashacct;

    /**
     * The value for the artbconffincacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconffincacct;

    /**
     * The value for the artbconfdiscacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfdiscacct;

    /**
     * The value for the artbconfrgacogsacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfrgacogsacct;

    /**
     * The value for the artbconfcusdacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfcusdacct;

    /**
     * The value for the artbconfdpstacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfdpstacct;

    /**
     * The value for the artbconfwriteoffacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfwriteoffacct;

    /**
     * The value for the artbcon2presalivtyacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbcon2presalivtyacct;

    /**
     * The value for the artbconffincpct field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $artbconffincpct;

    /**
     * The value for the artbconffincdays field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $artbconffincdays;

    /**
     * The value for the artbconffincminchg field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $artbconffincminchg;

    /**
     * The value for the artbconffincterm field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconffincterm;

    /**
     * The value for the artbconfover1 field.
     *
     * Note: this column has a database default value of: 30
     * @var        int
     */
    protected $artbconfover1;

    /**
     * The value for the artbconfover2 field.
     *
     * Note: this column has a database default value of: 60
     * @var        int
     */
    protected $artbconfover2;

    /**
     * The value for the artbconfstmtline field.
     *
     * Note: this column has a database default value of: 20
     * @var        int
     */
    protected $artbconfstmtline;

    /**
     * The value for the artbconfstmtcols field.
     *
     * Note: this column has a database default value of: 60
     * @var        int
     */
    protected $artbconfstmtcols;

    /**
     * The value for the artbconfstmtnotedef field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfstmtnotedef;

    /**
     * The value for the artbconfstmtnote1 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfstmtnote1;

    /**
     * The value for the artbconfstmtnote2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfstmtnote2;

    /**
     * The value for the artbconfstmtnote3 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfstmtnote3;

    /**
     * The value for the artbconfinvline field.
     *
     * Note: this column has a database default value of: 20
     * @var        int
     */
    protected $artbconfinvline;

    /**
     * The value for the artbconfinvcols field.
     *
     * Note: this column has a database default value of: 35
     * @var        int
     */
    protected $artbconfinvcols;

    /**
     * The value for the artbconfinvnotedef field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfinvnotedef;

    /**
     * The value for the artbconfcustline field.
     *
     * Note: this column has a database default value of: 20
     * @var        int
     */
    protected $artbconfcustline;

    /**
     * The value for the artbconfcustcols field.
     *
     * Note: this column has a database default value of: 60
     * @var        int
     */
    protected $artbconfcustcols;

    /**
     * The value for the artbconfinvsort field.
     *
     * Note: this column has a database default value of: 'I'
     * @var        string
     */
    protected $artbconfinvsort;

    /**
     * The value for the artbconfinvnc field.
     *
     * Note: this column has a database default value of: 'Y'
     * @var        string
     */
    protected $artbconfinvnc;

    /**
     * The value for the artbconfstmtsort field.
     *
     * Note: this column has a database default value of: 'I'
     * @var        string
     */
    protected $artbconfstmtsort;

    /**
     * The value for the artbconfstmt0orless field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfstmt0orless;

    /**
     * The value for the artbconfspdef field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfspdef;

    /**
     * The value for the artbconfwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfwhse;

    /**
     * The value for the artbconftypedef field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconftypedef;

    /**
     * The value for the artbconfsviadef field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfsviadef;

    /**
     * The value for the artbconftermdef field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconftermdef;

    /**
     * The value for the artbconftaxdef field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconftaxdef;

    /**
     * The value for the artbconfstmtdef field.
     *
     * Note: this column has a database default value of: 'B'
     * @var        string
     */
    protected $artbconfstmtdef;

    /**
     * The value for the artbconfallowbo field.
     *
     * Note: this column has a database default value of: 'Y'
     * @var        string
     */
    protected $artbconfallowbo;

    /**
     * The value for the artbconfallowfc field.
     *
     * Note: this column has a database default value of: 'Y'
     * @var        string
     */
    protected $artbconfallowfc;

    /**
     * The value for the artbconfusepriccode field.
     *
     * Note: this column has a database default value of: 'Y'
     * @var        string
     */
    protected $artbconfusepriccode;

    /**
     * The value for the artbconfpricdef field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfpricdef;

    /**
     * The value for the artbconfusecommcode field.
     *
     * Note: this column has a database default value of: 'Y'
     * @var        string
     */
    protected $artbconfusecommcode;

    /**
     * The value for the artbconfcommdef field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfcommdef;

    /**
     * The value for the artbconfcustlabl field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfcustlabl;

    /**
     * The value for the artbconfcustreq field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfcustreq;

    /**
     * The value for the artbconfcustdef field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfcustdef;

    /**
     * The value for the artbconfshiplabl field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfshiplabl;

    /**
     * The value for the artbconfshipreq field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfshipreq;

    /**
     * The value for the artbconfshipdef field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfshipdef;

    /**
     * The value for the artbconfuseidlink field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfuseidlink;

    /**
     * The value for the artbconfreqdate2 field.
     *
     * Note: this column has a database default value of: 30
     * @var        int
     */
    protected $artbconfreqdate2;

    /**
     * The value for the artbconfreqdate3 field.
     *
     * Note: this column has a database default value of: 60
     * @var        int
     */
    protected $artbconfreqdate3;

    /**
     * The value for the artbconfreqdate4 field.
     *
     * Note: this column has a database default value of: 90
     * @var        int
     */
    protected $artbconfreqdate4;

    /**
     * The value for the artbconfuseweb field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfuseweb;

    /**
     * The value for the artbconfpayhstoredays field.
     *
     * Note: this column has a database default value of: 530
     * @var        int
     */
    protected $artbconfpayhstoredays;

    /**
     * The value for the artbconfbyclerk field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfbyclerk;

    /**
     * The value for the artbcon2ecrwhse field.
     *
     * Note: this column has a database default value of: 'L'
     * @var        string
     */
    protected $artbcon2ecrwhse;

    /**
     * The value for the artbconfzerotermdisc field.
     *
     * Note: this column has a database default value of: 'Y'
     * @var        string
     */
    protected $artbconfzerotermdisc;

    /**
     * The value for the artbconfuseautocidgen field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfuseautocidgen;

    /**
     * The value for the artbconfprefixlen field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $artbconfprefixlen;

    /**
     * The value for the artbconfparagecredlast field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfparagecredlast;

    /**
     * The value for the artbconfincludecod field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfincludecod;

    /**
     * The value for the artbconfaddlpricdisc field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfaddlpricdisc;

    /**
     * The value for the artbconfapdonoehd field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfapdonoehd;

    /**
     * The value for the artbconfnbrsp field.
     *
     * Note: this column has a database default value of: 3
     * @var        int
     */
    protected $artbconfnbrsp;

    /**
     * The value for the artbconfforcesplvl field.
     *
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $artbconfforcesplvl;

    /**
     * The value for the artbconfcustgetopt field.
     *
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $artbconfcustgetopt;

    /**
     * The value for the artbconfaddicmnt field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfaddicmnt;

    /**
     * The value for the artbcon2appaddiscitmpdm field.
     *
     * Note: this column has a database default value of: 'B'
     * @var        string
     */
    protected $artbcon2appaddiscitmpdm;

    /**
     * The value for the artbcon2rfndselectamt field.
     *
     * Note: this column has a database default value of: '0.00'
     * @var        string
     */
    protected $artbcon2rfndselectamt;

    /**
     * The value for the artbcon2rfndglacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbcon2rfndglacct;

    /**
     * The value for the artbcon2rfndapterm field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbcon2rfndapterm;

    /**
     * The value for the artbcon2rfndarterm field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbcon2rfndarterm;

    /**
     * The value for the artbcon2cwoterm field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbcon2cwoterm;

    /**
     * The value for the artbcon2ccterm field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbcon2ccterm;

    /**
     * The value for the artbcon2ccsave field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbcon2ccsave;

    /**
     * The value for the artbcon2ccbatch field.
     *
     * Note: this column has a database default value of: 'B'
     * @var        string
     */
    protected $artbcon2ccbatch;

    /**
     * The value for the artbcon2ccsavedays field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $artbcon2ccsavedays;

    /**
     * The value for the artbcon2aprvdccasdeposit field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbcon2aprvdccasdeposit;

    /**
     * The value for the artbcon2cmqtysign field.
     *
     * Note: this column has a database default value of: 'Y'
     * @var        string
     */
    protected $artbcon2cmqtysign;

    /**
     * The value for the artbcon2bolline field.
     *
     * Note: this column has a database default value of: 20
     * @var        int
     */
    protected $artbcon2bolline;

    /**
     * The value for the artbcon2bolcols field.
     *
     * Note: this column has a database default value of: 35
     * @var        int
     */
    protected $artbcon2bolcols;

    /**
     * The value for the artbcon2usesounitwght field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbcon2usesounitwght;

    /**
     * The value for the artbcon2delzbal field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbcon2delzbal;

    /**
     * The value for the artbconfstopcustchg field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $artbconfstopcustchg;

    /**
     * The value for the artbcon2prospecteditcmm field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbcon2prospecteditcmm;

    /**
     * The value for the artbcon2prospectnotestocmm field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbcon2prospectnotestocmm;

    /**
     * The value for the artbcon2ctrygetdflt field.
     *
     * Note: this column has a database default value of: '3'
     * @var        string
     */
    protected $artbcon2ctrygetdflt;

    /**
     * The value for the artbconfrptbywhse field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfrptbywhse;

    /**
     * The value for the artbconfappendpos field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $artbconfappendpos;

    /**
     * The value for the artbconfincoasstacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfincoasstacct;

    /**
     * The value for the artbconfincoliabacct field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfincoliabacct;

    /**
     * The value for the artbcon2incoasstacct2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbcon2incoasstacct2;

    /**
     * The value for the artbcon2incoliabacct2 field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbcon2incoliabacct2;

    /**
     * The value for the artbcon2usesurchg field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbcon2usesurchg;

    /**
     * The value for the artbcon2surchgitemid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbcon2surchgitemid;

    /**
     * The value for the artbcon2surchgigrupseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $artbcon2surchgigrupseq;

    /**
     * The value for the artbcon2surchgsviaseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $artbcon2surchgsviaseq;

    /**
     * The value for the artbcon2surchgcstidseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $artbcon2surchgcstidseq;

    /**
     * The value for the artbcon2surchgcstpcseq field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $artbcon2surchgcstpcseq;

    /**
     * The value for the artbconfzeroinvcline field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbconfzeroinvcline;

    /**
     * The value for the artbcon2zeroordrship field.
     *
     * Note: this column has a database default value of: 'N'
     * @var        string
     */
    protected $artbcon2zeroordrship;

    /**
     * The value for the artbcon2zeroordrmess field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbcon2zeroordrmess;

    /**
     * The value for the artbconfcashacctwhse field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $artbconfcashacctwhse;

    /**
     * The value for the artbcon2mtaxfrtflagorcode field.
     *
     * Note: this column has a database default value of: 'C'
     * @var        string
     */
    protected $artbcon2mtaxfrtflagorcode;

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
        $this->artbconfkey = 1;
        $this->artbconfglifac = 'Y';
        $this->artbconfinifac = 'Y';
        $this->artbconfpcifac = 'Y';
        $this->artbconfccifac = 'Y';
        $this->artbconfinvcustgl = 'I';
        $this->artbconffrtacct = '';
        $this->artbconfmiscacct = '';
        $this->artbconfaracct = '';
        $this->artbconfcashacct = '';
        $this->artbcon2cccashacct = '';
        $this->artbconffincacct = '';
        $this->artbconfdiscacct = '';
        $this->artbconfrgacogsacct = '';
        $this->artbconfcusdacct = '';
        $this->artbconfdpstacct = '';
        $this->artbconfwriteoffacct = '';
        $this->artbcon2presalivtyacct = '';
        $this->artbconffincpct = '0.00';
        $this->artbconffincdays = 0;
        $this->artbconffincminchg = '0.00';
        $this->artbconffincterm = '';
        $this->artbconfover1 = 30;
        $this->artbconfover2 = 60;
        $this->artbconfstmtline = 20;
        $this->artbconfstmtcols = 60;
        $this->artbconfstmtnotedef = '';
        $this->artbconfstmtnote1 = '';
        $this->artbconfstmtnote2 = '';
        $this->artbconfstmtnote3 = '';
        $this->artbconfinvline = 20;
        $this->artbconfinvcols = 35;
        $this->artbconfinvnotedef = '';
        $this->artbconfcustline = 20;
        $this->artbconfcustcols = 60;
        $this->artbconfinvsort = 'I';
        $this->artbconfinvnc = 'Y';
        $this->artbconfstmtsort = 'I';
        $this->artbconfstmt0orless = 'N';
        $this->artbconfspdef = '';
        $this->artbconfwhse = '';
        $this->artbconftypedef = '';
        $this->artbconfsviadef = '';
        $this->artbconftermdef = '';
        $this->artbconftaxdef = '';
        $this->artbconfstmtdef = 'B';
        $this->artbconfallowbo = 'Y';
        $this->artbconfallowfc = 'Y';
        $this->artbconfusepriccode = 'Y';
        $this->artbconfpricdef = '';
        $this->artbconfusecommcode = 'Y';
        $this->artbconfcommdef = '';
        $this->artbconfcustlabl = '';
        $this->artbconfcustreq = 'N';
        $this->artbconfcustdef = '';
        $this->artbconfshiplabl = '';
        $this->artbconfshipreq = 'N';
        $this->artbconfshipdef = '';
        $this->artbconfuseidlink = 'N';
        $this->artbconfreqdate2 = 30;
        $this->artbconfreqdate3 = 60;
        $this->artbconfreqdate4 = 90;
        $this->artbconfuseweb = 'N';
        $this->artbconfpayhstoredays = 530;
        $this->artbconfbyclerk = 'N';
        $this->artbcon2ecrwhse = 'L';
        $this->artbconfzerotermdisc = 'Y';
        $this->artbconfuseautocidgen = 'N';
        $this->artbconfprefixlen = 0;
        $this->artbconfparagecredlast = 'N';
        $this->artbconfincludecod = 'N';
        $this->artbconfaddlpricdisc = 'N';
        $this->artbconfapdonoehd = 'N';
        $this->artbconfnbrsp = 3;
        $this->artbconfforcesplvl = 1;
        $this->artbconfcustgetopt = 1;
        $this->artbconfaddicmnt = 'N';
        $this->artbcon2appaddiscitmpdm = 'B';
        $this->artbcon2rfndselectamt = '0.00';
        $this->artbcon2rfndglacct = '';
        $this->artbcon2rfndapterm = '';
        $this->artbcon2rfndarterm = '';
        $this->artbcon2cwoterm = '';
        $this->artbcon2ccterm = '';
        $this->artbcon2ccsave = 'N';
        $this->artbcon2ccbatch = 'B';
        $this->artbcon2ccsavedays = 0;
        $this->artbcon2aprvdccasdeposit = 'N';
        $this->artbcon2cmqtysign = 'Y';
        $this->artbcon2bolline = 20;
        $this->artbcon2bolcols = 35;
        $this->artbcon2usesounitwght = 'N';
        $this->artbcon2delzbal = 'N';
        $this->artbconfstopcustchg = 0;
        $this->artbcon2prospecteditcmm = 'N';
        $this->artbcon2prospectnotestocmm = 'N';
        $this->artbcon2ctrygetdflt = '3';
        $this->artbconfrptbywhse = 'N';
        $this->artbconfappendpos = 0;
        $this->artbconfincoasstacct = '';
        $this->artbconfincoliabacct = '';
        $this->artbcon2incoasstacct2 = '';
        $this->artbcon2incoliabacct2 = '';
        $this->artbcon2usesurchg = 'N';
        $this->artbcon2surchgitemid = '';
        $this->artbcon2surchgigrupseq = 0;
        $this->artbcon2surchgsviaseq = 0;
        $this->artbcon2surchgcstidseq = 0;
        $this->artbcon2surchgcstpcseq = 0;
        $this->artbconfzeroinvcline = 'N';
        $this->artbcon2zeroordrship = 'N';
        $this->artbcon2zeroordrmess = '';
        $this->artbconfcashacctwhse = '';
        $this->artbcon2mtaxfrtflagorcode = 'C';
        $this->dateupdtd = '';
        $this->timeupdtd = '';
        $this->dummy = 'P';
    }

    /**
     * Initializes internal state of Base\ConfigAr object.
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
     * Compares this with another <code>ConfigAr</code> instance.  If
     * <code>obj</code> is an instance of <code>ConfigAr</code>, delegates to
     * <code>equals(ConfigAr)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|ConfigAr The current object, for fluid interface
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
     * Get the [artbconfkey] column value.
     *
     * @return int
     */
    public function getArtbconfkey()
    {
        return $this->artbconfkey;
    }

    /**
     * Get the [artbconfglifac] column value.
     *
     * @return string
     */
    public function getArtbconfglifac()
    {
        return $this->artbconfglifac;
    }

    /**
     * Get the [artbconfinifac] column value.
     *
     * @return string
     */
    public function getArtbconfinifac()
    {
        return $this->artbconfinifac;
    }

    /**
     * Get the [artbconfpcifac] column value.
     *
     * @return string
     */
    public function getArtbconfpcifac()
    {
        return $this->artbconfpcifac;
    }

    /**
     * Get the [artbconfccifac] column value.
     *
     * @return string
     */
    public function getArtbconfccifac()
    {
        return $this->artbconfccifac;
    }

    /**
     * Get the [artbconfinvcustgl] column value.
     *
     * @return string
     */
    public function getArtbconfinvcustgl()
    {
        return $this->artbconfinvcustgl;
    }

    /**
     * Get the [artbconffrtacct] column value.
     *
     * @return string
     */
    public function getArtbconffrtacct()
    {
        return $this->artbconffrtacct;
    }

    /**
     * Get the [artbconfmiscacct] column value.
     *
     * @return string
     */
    public function getArtbconfmiscacct()
    {
        return $this->artbconfmiscacct;
    }

    /**
     * Get the [artbconfaracct] column value.
     *
     * @return string
     */
    public function getArtbconfaracct()
    {
        return $this->artbconfaracct;
    }

    /**
     * Get the [artbconfcashacct] column value.
     *
     * @return string
     */
    public function getArtbconfcashacct()
    {
        return $this->artbconfcashacct;
    }

    /**
     * Get the [artbcon2cccashacct] column value.
     *
     * @return string
     */
    public function getArtbcon2cccashacct()
    {
        return $this->artbcon2cccashacct;
    }

    /**
     * Get the [artbconffincacct] column value.
     *
     * @return string
     */
    public function getArtbconffincacct()
    {
        return $this->artbconffincacct;
    }

    /**
     * Get the [artbconfdiscacct] column value.
     *
     * @return string
     */
    public function getArtbconfdiscacct()
    {
        return $this->artbconfdiscacct;
    }

    /**
     * Get the [artbconfrgacogsacct] column value.
     *
     * @return string
     */
    public function getArtbconfrgacogsacct()
    {
        return $this->artbconfrgacogsacct;
    }

    /**
     * Get the [artbconfcusdacct] column value.
     *
     * @return string
     */
    public function getArtbconfcusdacct()
    {
        return $this->artbconfcusdacct;
    }

    /**
     * Get the [artbconfdpstacct] column value.
     *
     * @return string
     */
    public function getArtbconfdpstacct()
    {
        return $this->artbconfdpstacct;
    }

    /**
     * Get the [artbconfwriteoffacct] column value.
     *
     * @return string
     */
    public function getArtbconfwriteoffacct()
    {
        return $this->artbconfwriteoffacct;
    }

    /**
     * Get the [artbcon2presalivtyacct] column value.
     *
     * @return string
     */
    public function getArtbcon2presalivtyacct()
    {
        return $this->artbcon2presalivtyacct;
    }

    /**
     * Get the [artbconffincpct] column value.
     *
     * @return string
     */
    public function getArtbconffincpct()
    {
        return $this->artbconffincpct;
    }

    /**
     * Get the [artbconffincdays] column value.
     *
     * @return int
     */
    public function getArtbconffincdays()
    {
        return $this->artbconffincdays;
    }

    /**
     * Get the [artbconffincminchg] column value.
     *
     * @return string
     */
    public function getArtbconffincminchg()
    {
        return $this->artbconffincminchg;
    }

    /**
     * Get the [artbconffincterm] column value.
     *
     * @return string
     */
    public function getArtbconffincterm()
    {
        return $this->artbconffincterm;
    }

    /**
     * Get the [artbconfover1] column value.
     *
     * @return int
     */
    public function getArtbconfover1()
    {
        return $this->artbconfover1;
    }

    /**
     * Get the [artbconfover2] column value.
     *
     * @return int
     */
    public function getArtbconfover2()
    {
        return $this->artbconfover2;
    }

    /**
     * Get the [artbconfstmtline] column value.
     *
     * @return int
     */
    public function getArtbconfstmtline()
    {
        return $this->artbconfstmtline;
    }

    /**
     * Get the [artbconfstmtcols] column value.
     *
     * @return int
     */
    public function getArtbconfstmtcols()
    {
        return $this->artbconfstmtcols;
    }

    /**
     * Get the [artbconfstmtnotedef] column value.
     *
     * @return string
     */
    public function getArtbconfstmtnotedef()
    {
        return $this->artbconfstmtnotedef;
    }

    /**
     * Get the [artbconfstmtnote1] column value.
     *
     * @return string
     */
    public function getArtbconfstmtnote1()
    {
        return $this->artbconfstmtnote1;
    }

    /**
     * Get the [artbconfstmtnote2] column value.
     *
     * @return string
     */
    public function getArtbconfstmtnote2()
    {
        return $this->artbconfstmtnote2;
    }

    /**
     * Get the [artbconfstmtnote3] column value.
     *
     * @return string
     */
    public function getArtbconfstmtnote3()
    {
        return $this->artbconfstmtnote3;
    }

    /**
     * Get the [artbconfinvline] column value.
     *
     * @return int
     */
    public function getArtbconfinvline()
    {
        return $this->artbconfinvline;
    }

    /**
     * Get the [artbconfinvcols] column value.
     *
     * @return int
     */
    public function getArtbconfinvcols()
    {
        return $this->artbconfinvcols;
    }

    /**
     * Get the [artbconfinvnotedef] column value.
     *
     * @return string
     */
    public function getArtbconfinvnotedef()
    {
        return $this->artbconfinvnotedef;
    }

    /**
     * Get the [artbconfcustline] column value.
     *
     * @return int
     */
    public function getArtbconfcustline()
    {
        return $this->artbconfcustline;
    }

    /**
     * Get the [artbconfcustcols] column value.
     *
     * @return int
     */
    public function getArtbconfcustcols()
    {
        return $this->artbconfcustcols;
    }

    /**
     * Get the [artbconfinvsort] column value.
     *
     * @return string
     */
    public function getArtbconfinvsort()
    {
        return $this->artbconfinvsort;
    }

    /**
     * Get the [artbconfinvnc] column value.
     *
     * @return string
     */
    public function getArtbconfinvnc()
    {
        return $this->artbconfinvnc;
    }

    /**
     * Get the [artbconfstmtsort] column value.
     *
     * @return string
     */
    public function getArtbconfstmtsort()
    {
        return $this->artbconfstmtsort;
    }

    /**
     * Get the [artbconfstmt0orless] column value.
     *
     * @return string
     */
    public function getArtbconfstmt0orless()
    {
        return $this->artbconfstmt0orless;
    }

    /**
     * Get the [artbconfspdef] column value.
     *
     * @return string
     */
    public function getArtbconfspdef()
    {
        return $this->artbconfspdef;
    }

    /**
     * Get the [artbconfwhse] column value.
     *
     * @return string
     */
    public function getArtbconfwhse()
    {
        return $this->artbconfwhse;
    }

    /**
     * Get the [artbconftypedef] column value.
     *
     * @return string
     */
    public function getArtbconftypedef()
    {
        return $this->artbconftypedef;
    }

    /**
     * Get the [artbconfsviadef] column value.
     *
     * @return string
     */
    public function getArtbconfsviadef()
    {
        return $this->artbconfsviadef;
    }

    /**
     * Get the [artbconftermdef] column value.
     *
     * @return string
     */
    public function getArtbconftermdef()
    {
        return $this->artbconftermdef;
    }

    /**
     * Get the [artbconftaxdef] column value.
     *
     * @return string
     */
    public function getArtbconftaxdef()
    {
        return $this->artbconftaxdef;
    }

    /**
     * Get the [artbconfstmtdef] column value.
     *
     * @return string
     */
    public function getArtbconfstmtdef()
    {
        return $this->artbconfstmtdef;
    }

    /**
     * Get the [artbconfallowbo] column value.
     *
     * @return string
     */
    public function getArtbconfallowbo()
    {
        return $this->artbconfallowbo;
    }

    /**
     * Get the [artbconfallowfc] column value.
     *
     * @return string
     */
    public function getArtbconfallowfc()
    {
        return $this->artbconfallowfc;
    }

    /**
     * Get the [artbconfusepriccode] column value.
     *
     * @return string
     */
    public function getArtbconfusepriccode()
    {
        return $this->artbconfusepriccode;
    }

    /**
     * Get the [artbconfpricdef] column value.
     *
     * @return string
     */
    public function getArtbconfpricdef()
    {
        return $this->artbconfpricdef;
    }

    /**
     * Get the [artbconfusecommcode] column value.
     *
     * @return string
     */
    public function getArtbconfusecommcode()
    {
        return $this->artbconfusecommcode;
    }

    /**
     * Get the [artbconfcommdef] column value.
     *
     * @return string
     */
    public function getArtbconfcommdef()
    {
        return $this->artbconfcommdef;
    }

    /**
     * Get the [artbconfcustlabl] column value.
     *
     * @return string
     */
    public function getArtbconfcustlabl()
    {
        return $this->artbconfcustlabl;
    }

    /**
     * Get the [artbconfcustreq] column value.
     *
     * @return string
     */
    public function getArtbconfcustreq()
    {
        return $this->artbconfcustreq;
    }

    /**
     * Get the [artbconfcustdef] column value.
     *
     * @return string
     */
    public function getArtbconfcustdef()
    {
        return $this->artbconfcustdef;
    }

    /**
     * Get the [artbconfshiplabl] column value.
     *
     * @return string
     */
    public function getArtbconfshiplabl()
    {
        return $this->artbconfshiplabl;
    }

    /**
     * Get the [artbconfshipreq] column value.
     *
     * @return string
     */
    public function getArtbconfshipreq()
    {
        return $this->artbconfshipreq;
    }

    /**
     * Get the [artbconfshipdef] column value.
     *
     * @return string
     */
    public function getArtbconfshipdef()
    {
        return $this->artbconfshipdef;
    }

    /**
     * Get the [artbconfuseidlink] column value.
     *
     * @return string
     */
    public function getArtbconfuseidlink()
    {
        return $this->artbconfuseidlink;
    }

    /**
     * Get the [artbconfreqdate2] column value.
     *
     * @return int
     */
    public function getArtbconfreqdate2()
    {
        return $this->artbconfreqdate2;
    }

    /**
     * Get the [artbconfreqdate3] column value.
     *
     * @return int
     */
    public function getArtbconfreqdate3()
    {
        return $this->artbconfreqdate3;
    }

    /**
     * Get the [artbconfreqdate4] column value.
     *
     * @return int
     */
    public function getArtbconfreqdate4()
    {
        return $this->artbconfreqdate4;
    }

    /**
     * Get the [artbconfuseweb] column value.
     *
     * @return string
     */
    public function getArtbconfuseweb()
    {
        return $this->artbconfuseweb;
    }

    /**
     * Get the [artbconfpayhstoredays] column value.
     *
     * @return int
     */
    public function getArtbconfpayhstoredays()
    {
        return $this->artbconfpayhstoredays;
    }

    /**
     * Get the [artbconfbyclerk] column value.
     *
     * @return string
     */
    public function getArtbconfbyclerk()
    {
        return $this->artbconfbyclerk;
    }

    /**
     * Get the [artbcon2ecrwhse] column value.
     *
     * @return string
     */
    public function getArtbcon2ecrwhse()
    {
        return $this->artbcon2ecrwhse;
    }

    /**
     * Get the [artbconfzerotermdisc] column value.
     *
     * @return string
     */
    public function getArtbconfzerotermdisc()
    {
        return $this->artbconfzerotermdisc;
    }

    /**
     * Get the [artbconfuseautocidgen] column value.
     *
     * @return string
     */
    public function getArtbconfuseautocidgen()
    {
        return $this->artbconfuseautocidgen;
    }

    /**
     * Get the [artbconfprefixlen] column value.
     *
     * @return int
     */
    public function getArtbconfprefixlen()
    {
        return $this->artbconfprefixlen;
    }

    /**
     * Get the [artbconfparagecredlast] column value.
     *
     * @return string
     */
    public function getArtbconfparagecredlast()
    {
        return $this->artbconfparagecredlast;
    }

    /**
     * Get the [artbconfincludecod] column value.
     *
     * @return string
     */
    public function getArtbconfincludecod()
    {
        return $this->artbconfincludecod;
    }

    /**
     * Get the [artbconfaddlpricdisc] column value.
     *
     * @return string
     */
    public function getArtbconfaddlpricdisc()
    {
        return $this->artbconfaddlpricdisc;
    }

    /**
     * Get the [artbconfapdonoehd] column value.
     *
     * @return string
     */
    public function getArtbconfapdonoehd()
    {
        return $this->artbconfapdonoehd;
    }

    /**
     * Get the [artbconfnbrsp] column value.
     *
     * @return int
     */
    public function getArtbconfnbrsp()
    {
        return $this->artbconfnbrsp;
    }

    /**
     * Get the [artbconfforcesplvl] column value.
     *
     * @return int
     */
    public function getArtbconfforcesplvl()
    {
        return $this->artbconfforcesplvl;
    }

    /**
     * Get the [artbconfcustgetopt] column value.
     *
     * @return int
     */
    public function getArtbconfcustgetopt()
    {
        return $this->artbconfcustgetopt;
    }

    /**
     * Get the [artbconfaddicmnt] column value.
     *
     * @return string
     */
    public function getArtbconfaddicmnt()
    {
        return $this->artbconfaddicmnt;
    }

    /**
     * Get the [artbcon2appaddiscitmpdm] column value.
     *
     * @return string
     */
    public function getArtbcon2appaddiscitmpdm()
    {
        return $this->artbcon2appaddiscitmpdm;
    }

    /**
     * Get the [artbcon2rfndselectamt] column value.
     *
     * @return string
     */
    public function getArtbcon2rfndselectamt()
    {
        return $this->artbcon2rfndselectamt;
    }

    /**
     * Get the [artbcon2rfndglacct] column value.
     *
     * @return string
     */
    public function getArtbcon2rfndglacct()
    {
        return $this->artbcon2rfndglacct;
    }

    /**
     * Get the [artbcon2rfndapterm] column value.
     *
     * @return string
     */
    public function getArtbcon2rfndapterm()
    {
        return $this->artbcon2rfndapterm;
    }

    /**
     * Get the [artbcon2rfndarterm] column value.
     *
     * @return string
     */
    public function getArtbcon2rfndarterm()
    {
        return $this->artbcon2rfndarterm;
    }

    /**
     * Get the [artbcon2cwoterm] column value.
     *
     * @return string
     */
    public function getArtbcon2cwoterm()
    {
        return $this->artbcon2cwoterm;
    }

    /**
     * Get the [artbcon2ccterm] column value.
     *
     * @return string
     */
    public function getArtbcon2ccterm()
    {
        return $this->artbcon2ccterm;
    }

    /**
     * Get the [artbcon2ccsave] column value.
     *
     * @return string
     */
    public function getArtbcon2ccsave()
    {
        return $this->artbcon2ccsave;
    }

    /**
     * Get the [artbcon2ccbatch] column value.
     *
     * @return string
     */
    public function getArtbcon2ccbatch()
    {
        return $this->artbcon2ccbatch;
    }

    /**
     * Get the [artbcon2ccsavedays] column value.
     *
     * @return int
     */
    public function getArtbcon2ccsavedays()
    {
        return $this->artbcon2ccsavedays;
    }

    /**
     * Get the [artbcon2aprvdccasdeposit] column value.
     *
     * @return string
     */
    public function getArtbcon2aprvdccasdeposit()
    {
        return $this->artbcon2aprvdccasdeposit;
    }

    /**
     * Get the [artbcon2cmqtysign] column value.
     *
     * @return string
     */
    public function getArtbcon2cmqtysign()
    {
        return $this->artbcon2cmqtysign;
    }

    /**
     * Get the [artbcon2bolline] column value.
     *
     * @return int
     */
    public function getArtbcon2bolline()
    {
        return $this->artbcon2bolline;
    }

    /**
     * Get the [artbcon2bolcols] column value.
     *
     * @return int
     */
    public function getArtbcon2bolcols()
    {
        return $this->artbcon2bolcols;
    }

    /**
     * Get the [artbcon2usesounitwght] column value.
     *
     * @return string
     */
    public function getArtbcon2usesounitwght()
    {
        return $this->artbcon2usesounitwght;
    }

    /**
     * Get the [artbcon2delzbal] column value.
     *
     * @return string
     */
    public function getArtbcon2delzbal()
    {
        return $this->artbcon2delzbal;
    }

    /**
     * Get the [artbconfstopcustchg] column value.
     *
     * @return int
     */
    public function getArtbconfstopcustchg()
    {
        return $this->artbconfstopcustchg;
    }

    /**
     * Get the [artbcon2prospecteditcmm] column value.
     *
     * @return string
     */
    public function getArtbcon2prospecteditcmm()
    {
        return $this->artbcon2prospecteditcmm;
    }

    /**
     * Get the [artbcon2prospectnotestocmm] column value.
     *
     * @return string
     */
    public function getArtbcon2prospectnotestocmm()
    {
        return $this->artbcon2prospectnotestocmm;
    }

    /**
     * Get the [artbcon2ctrygetdflt] column value.
     *
     * @return string
     */
    public function getArtbcon2ctrygetdflt()
    {
        return $this->artbcon2ctrygetdflt;
    }

    /**
     * Get the [artbconfrptbywhse] column value.
     *
     * @return string
     */
    public function getArtbconfrptbywhse()
    {
        return $this->artbconfrptbywhse;
    }

    /**
     * Get the [artbconfappendpos] column value.
     *
     * @return int
     */
    public function getArtbconfappendpos()
    {
        return $this->artbconfappendpos;
    }

    /**
     * Get the [artbconfincoasstacct] column value.
     *
     * @return string
     */
    public function getArtbconfincoasstacct()
    {
        return $this->artbconfincoasstacct;
    }

    /**
     * Get the [artbconfincoliabacct] column value.
     *
     * @return string
     */
    public function getArtbconfincoliabacct()
    {
        return $this->artbconfincoliabacct;
    }

    /**
     * Get the [artbcon2incoasstacct2] column value.
     *
     * @return string
     */
    public function getArtbcon2incoasstacct2()
    {
        return $this->artbcon2incoasstacct2;
    }

    /**
     * Get the [artbcon2incoliabacct2] column value.
     *
     * @return string
     */
    public function getArtbcon2incoliabacct2()
    {
        return $this->artbcon2incoliabacct2;
    }

    /**
     * Get the [artbcon2usesurchg] column value.
     *
     * @return string
     */
    public function getArtbcon2usesurchg()
    {
        return $this->artbcon2usesurchg;
    }

    /**
     * Get the [artbcon2surchgitemid] column value.
     *
     * @return string
     */
    public function getArtbcon2surchgitemid()
    {
        return $this->artbcon2surchgitemid;
    }

    /**
     * Get the [artbcon2surchgigrupseq] column value.
     *
     * @return int
     */
    public function getArtbcon2surchgigrupseq()
    {
        return $this->artbcon2surchgigrupseq;
    }

    /**
     * Get the [artbcon2surchgsviaseq] column value.
     *
     * @return int
     */
    public function getArtbcon2surchgsviaseq()
    {
        return $this->artbcon2surchgsviaseq;
    }

    /**
     * Get the [artbcon2surchgcstidseq] column value.
     *
     * @return int
     */
    public function getArtbcon2surchgcstidseq()
    {
        return $this->artbcon2surchgcstidseq;
    }

    /**
     * Get the [artbcon2surchgcstpcseq] column value.
     *
     * @return int
     */
    public function getArtbcon2surchgcstpcseq()
    {
        return $this->artbcon2surchgcstpcseq;
    }

    /**
     * Get the [artbconfzeroinvcline] column value.
     *
     * @return string
     */
    public function getArtbconfzeroinvcline()
    {
        return $this->artbconfzeroinvcline;
    }

    /**
     * Get the [artbcon2zeroordrship] column value.
     *
     * @return string
     */
    public function getArtbcon2zeroordrship()
    {
        return $this->artbcon2zeroordrship;
    }

    /**
     * Get the [artbcon2zeroordrmess] column value.
     *
     * @return string
     */
    public function getArtbcon2zeroordrmess()
    {
        return $this->artbcon2zeroordrmess;
    }

    /**
     * Get the [artbconfcashacctwhse] column value.
     *
     * @return string
     */
    public function getArtbconfcashacctwhse()
    {
        return $this->artbconfcashacctwhse;
    }

    /**
     * Get the [artbcon2mtaxfrtflagorcode] column value.
     *
     * @return string
     */
    public function getArtbcon2mtaxfrtflagorcode()
    {
        return $this->artbcon2mtaxfrtflagorcode;
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
     * Set the value of [artbconfkey] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfkey($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfkey !== $v) {
            $this->artbconfkey = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFKEY] = true;
        }

        return $this;
    } // setArtbconfkey()

    /**
     * Set the value of [artbconfglifac] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfglifac($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfglifac !== $v) {
            $this->artbconfglifac = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFGLIFAC] = true;
        }

        return $this;
    } // setArtbconfglifac()

    /**
     * Set the value of [artbconfinifac] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfinifac($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfinifac !== $v) {
            $this->artbconfinifac = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFINIFAC] = true;
        }

        return $this;
    } // setArtbconfinifac()

    /**
     * Set the value of [artbconfpcifac] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfpcifac($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfpcifac !== $v) {
            $this->artbconfpcifac = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFPCIFAC] = true;
        }

        return $this;
    } // setArtbconfpcifac()

    /**
     * Set the value of [artbconfccifac] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfccifac($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfccifac !== $v) {
            $this->artbconfccifac = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFCCIFAC] = true;
        }

        return $this;
    } // setArtbconfccifac()

    /**
     * Set the value of [artbconfinvcustgl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfinvcustgl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfinvcustgl !== $v) {
            $this->artbconfinvcustgl = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFINVCUSTGL] = true;
        }

        return $this;
    } // setArtbconfinvcustgl()

    /**
     * Set the value of [artbconffrtacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconffrtacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconffrtacct !== $v) {
            $this->artbconffrtacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFFRTACCT] = true;
        }

        return $this;
    } // setArtbconffrtacct()

    /**
     * Set the value of [artbconfmiscacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfmiscacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfmiscacct !== $v) {
            $this->artbconfmiscacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFMISCACCT] = true;
        }

        return $this;
    } // setArtbconfmiscacct()

    /**
     * Set the value of [artbconfaracct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfaracct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfaracct !== $v) {
            $this->artbconfaracct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFARACCT] = true;
        }

        return $this;
    } // setArtbconfaracct()

    /**
     * Set the value of [artbconfcashacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfcashacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfcashacct !== $v) {
            $this->artbconfcashacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFCASHACCT] = true;
        }

        return $this;
    } // setArtbconfcashacct()

    /**
     * Set the value of [artbcon2cccashacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2cccashacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2cccashacct !== $v) {
            $this->artbcon2cccashacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2CCCASHACCT] = true;
        }

        return $this;
    } // setArtbcon2cccashacct()

    /**
     * Set the value of [artbconffincacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconffincacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconffincacct !== $v) {
            $this->artbconffincacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFFINCACCT] = true;
        }

        return $this;
    } // setArtbconffincacct()

    /**
     * Set the value of [artbconfdiscacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfdiscacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfdiscacct !== $v) {
            $this->artbconfdiscacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFDISCACCT] = true;
        }

        return $this;
    } // setArtbconfdiscacct()

    /**
     * Set the value of [artbconfrgacogsacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfrgacogsacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfrgacogsacct !== $v) {
            $this->artbconfrgacogsacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFRGACOGSACCT] = true;
        }

        return $this;
    } // setArtbconfrgacogsacct()

    /**
     * Set the value of [artbconfcusdacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfcusdacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfcusdacct !== $v) {
            $this->artbconfcusdacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFCUSDACCT] = true;
        }

        return $this;
    } // setArtbconfcusdacct()

    /**
     * Set the value of [artbconfdpstacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfdpstacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfdpstacct !== $v) {
            $this->artbconfdpstacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFDPSTACCT] = true;
        }

        return $this;
    } // setArtbconfdpstacct()

    /**
     * Set the value of [artbconfwriteoffacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfwriteoffacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfwriteoffacct !== $v) {
            $this->artbconfwriteoffacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFWRITEOFFACCT] = true;
        }

        return $this;
    } // setArtbconfwriteoffacct()

    /**
     * Set the value of [artbcon2presalivtyacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2presalivtyacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2presalivtyacct !== $v) {
            $this->artbcon2presalivtyacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2PRESALIVTYACCT] = true;
        }

        return $this;
    } // setArtbcon2presalivtyacct()

    /**
     * Set the value of [artbconffincpct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconffincpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconffincpct !== $v) {
            $this->artbconffincpct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFFINCPCT] = true;
        }

        return $this;
    } // setArtbconffincpct()

    /**
     * Set the value of [artbconffincdays] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconffincdays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconffincdays !== $v) {
            $this->artbconffincdays = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFFINCDAYS] = true;
        }

        return $this;
    } // setArtbconffincdays()

    /**
     * Set the value of [artbconffincminchg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconffincminchg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconffincminchg !== $v) {
            $this->artbconffincminchg = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFFINCMINCHG] = true;
        }

        return $this;
    } // setArtbconffincminchg()

    /**
     * Set the value of [artbconffincterm] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconffincterm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconffincterm !== $v) {
            $this->artbconffincterm = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFFINCTERM] = true;
        }

        return $this;
    } // setArtbconffincterm()

    /**
     * Set the value of [artbconfover1] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfover1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfover1 !== $v) {
            $this->artbconfover1 = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFOVER1] = true;
        }

        return $this;
    } // setArtbconfover1()

    /**
     * Set the value of [artbconfover2] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfover2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfover2 !== $v) {
            $this->artbconfover2 = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFOVER2] = true;
        }

        return $this;
    } // setArtbconfover2()

    /**
     * Set the value of [artbconfstmtline] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfstmtline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfstmtline !== $v) {
            $this->artbconfstmtline = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSTMTLINE] = true;
        }

        return $this;
    } // setArtbconfstmtline()

    /**
     * Set the value of [artbconfstmtcols] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfstmtcols($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfstmtcols !== $v) {
            $this->artbconfstmtcols = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSTMTCOLS] = true;
        }

        return $this;
    } // setArtbconfstmtcols()

    /**
     * Set the value of [artbconfstmtnotedef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfstmtnotedef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfstmtnotedef !== $v) {
            $this->artbconfstmtnotedef = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSTMTNOTEDEF] = true;
        }

        return $this;
    } // setArtbconfstmtnotedef()

    /**
     * Set the value of [artbconfstmtnote1] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfstmtnote1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfstmtnote1 !== $v) {
            $this->artbconfstmtnote1 = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSTMTNOTE1] = true;
        }

        return $this;
    } // setArtbconfstmtnote1()

    /**
     * Set the value of [artbconfstmtnote2] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfstmtnote2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfstmtnote2 !== $v) {
            $this->artbconfstmtnote2 = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSTMTNOTE2] = true;
        }

        return $this;
    } // setArtbconfstmtnote2()

    /**
     * Set the value of [artbconfstmtnote3] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfstmtnote3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfstmtnote3 !== $v) {
            $this->artbconfstmtnote3 = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSTMTNOTE3] = true;
        }

        return $this;
    } // setArtbconfstmtnote3()

    /**
     * Set the value of [artbconfinvline] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfinvline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfinvline !== $v) {
            $this->artbconfinvline = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFINVLINE] = true;
        }

        return $this;
    } // setArtbconfinvline()

    /**
     * Set the value of [artbconfinvcols] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfinvcols($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfinvcols !== $v) {
            $this->artbconfinvcols = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFINVCOLS] = true;
        }

        return $this;
    } // setArtbconfinvcols()

    /**
     * Set the value of [artbconfinvnotedef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfinvnotedef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfinvnotedef !== $v) {
            $this->artbconfinvnotedef = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFINVNOTEDEF] = true;
        }

        return $this;
    } // setArtbconfinvnotedef()

    /**
     * Set the value of [artbconfcustline] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfcustline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfcustline !== $v) {
            $this->artbconfcustline = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFCUSTLINE] = true;
        }

        return $this;
    } // setArtbconfcustline()

    /**
     * Set the value of [artbconfcustcols] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfcustcols($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfcustcols !== $v) {
            $this->artbconfcustcols = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFCUSTCOLS] = true;
        }

        return $this;
    } // setArtbconfcustcols()

    /**
     * Set the value of [artbconfinvsort] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfinvsort($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfinvsort !== $v) {
            $this->artbconfinvsort = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFINVSORT] = true;
        }

        return $this;
    } // setArtbconfinvsort()

    /**
     * Set the value of [artbconfinvnc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfinvnc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfinvnc !== $v) {
            $this->artbconfinvnc = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFINVNC] = true;
        }

        return $this;
    } // setArtbconfinvnc()

    /**
     * Set the value of [artbconfstmtsort] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfstmtsort($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfstmtsort !== $v) {
            $this->artbconfstmtsort = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSTMTSORT] = true;
        }

        return $this;
    } // setArtbconfstmtsort()

    /**
     * Set the value of [artbconfstmt0orless] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfstmt0orless($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfstmt0orless !== $v) {
            $this->artbconfstmt0orless = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSTMT0ORLESS] = true;
        }

        return $this;
    } // setArtbconfstmt0orless()

    /**
     * Set the value of [artbconfspdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfspdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfspdef !== $v) {
            $this->artbconfspdef = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSPDEF] = true;
        }

        return $this;
    } // setArtbconfspdef()

    /**
     * Set the value of [artbconfwhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfwhse !== $v) {
            $this->artbconfwhse = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFWHSE] = true;
        }

        return $this;
    } // setArtbconfwhse()

    /**
     * Set the value of [artbconftypedef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconftypedef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconftypedef !== $v) {
            $this->artbconftypedef = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFTYPEDEF] = true;
        }

        return $this;
    } // setArtbconftypedef()

    /**
     * Set the value of [artbconfsviadef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfsviadef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfsviadef !== $v) {
            $this->artbconfsviadef = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSVIADEF] = true;
        }

        return $this;
    } // setArtbconfsviadef()

    /**
     * Set the value of [artbconftermdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconftermdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconftermdef !== $v) {
            $this->artbconftermdef = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFTERMDEF] = true;
        }

        return $this;
    } // setArtbconftermdef()

    /**
     * Set the value of [artbconftaxdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconftaxdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconftaxdef !== $v) {
            $this->artbconftaxdef = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFTAXDEF] = true;
        }

        return $this;
    } // setArtbconftaxdef()

    /**
     * Set the value of [artbconfstmtdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfstmtdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfstmtdef !== $v) {
            $this->artbconfstmtdef = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSTMTDEF] = true;
        }

        return $this;
    } // setArtbconfstmtdef()

    /**
     * Set the value of [artbconfallowbo] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfallowbo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfallowbo !== $v) {
            $this->artbconfallowbo = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFALLOWBO] = true;
        }

        return $this;
    } // setArtbconfallowbo()

    /**
     * Set the value of [artbconfallowfc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfallowfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfallowfc !== $v) {
            $this->artbconfallowfc = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFALLOWFC] = true;
        }

        return $this;
    } // setArtbconfallowfc()

    /**
     * Set the value of [artbconfusepriccode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfusepriccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfusepriccode !== $v) {
            $this->artbconfusepriccode = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFUSEPRICCODE] = true;
        }

        return $this;
    } // setArtbconfusepriccode()

    /**
     * Set the value of [artbconfpricdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfpricdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfpricdef !== $v) {
            $this->artbconfpricdef = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFPRICDEF] = true;
        }

        return $this;
    } // setArtbconfpricdef()

    /**
     * Set the value of [artbconfusecommcode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfusecommcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfusecommcode !== $v) {
            $this->artbconfusecommcode = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFUSECOMMCODE] = true;
        }

        return $this;
    } // setArtbconfusecommcode()

    /**
     * Set the value of [artbconfcommdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfcommdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfcommdef !== $v) {
            $this->artbconfcommdef = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFCOMMDEF] = true;
        }

        return $this;
    } // setArtbconfcommdef()

    /**
     * Set the value of [artbconfcustlabl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfcustlabl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfcustlabl !== $v) {
            $this->artbconfcustlabl = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFCUSTLABL] = true;
        }

        return $this;
    } // setArtbconfcustlabl()

    /**
     * Set the value of [artbconfcustreq] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfcustreq($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfcustreq !== $v) {
            $this->artbconfcustreq = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFCUSTREQ] = true;
        }

        return $this;
    } // setArtbconfcustreq()

    /**
     * Set the value of [artbconfcustdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfcustdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfcustdef !== $v) {
            $this->artbconfcustdef = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFCUSTDEF] = true;
        }

        return $this;
    } // setArtbconfcustdef()

    /**
     * Set the value of [artbconfshiplabl] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfshiplabl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfshiplabl !== $v) {
            $this->artbconfshiplabl = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSHIPLABL] = true;
        }

        return $this;
    } // setArtbconfshiplabl()

    /**
     * Set the value of [artbconfshipreq] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfshipreq($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfshipreq !== $v) {
            $this->artbconfshipreq = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSHIPREQ] = true;
        }

        return $this;
    } // setArtbconfshipreq()

    /**
     * Set the value of [artbconfshipdef] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfshipdef($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfshipdef !== $v) {
            $this->artbconfshipdef = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSHIPDEF] = true;
        }

        return $this;
    } // setArtbconfshipdef()

    /**
     * Set the value of [artbconfuseidlink] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfuseidlink($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfuseidlink !== $v) {
            $this->artbconfuseidlink = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFUSEIDLINK] = true;
        }

        return $this;
    } // setArtbconfuseidlink()

    /**
     * Set the value of [artbconfreqdate2] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfreqdate2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfreqdate2 !== $v) {
            $this->artbconfreqdate2 = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFREQDATE2] = true;
        }

        return $this;
    } // setArtbconfreqdate2()

    /**
     * Set the value of [artbconfreqdate3] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfreqdate3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfreqdate3 !== $v) {
            $this->artbconfreqdate3 = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFREQDATE3] = true;
        }

        return $this;
    } // setArtbconfreqdate3()

    /**
     * Set the value of [artbconfreqdate4] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfreqdate4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfreqdate4 !== $v) {
            $this->artbconfreqdate4 = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFREQDATE4] = true;
        }

        return $this;
    } // setArtbconfreqdate4()

    /**
     * Set the value of [artbconfuseweb] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfuseweb($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfuseweb !== $v) {
            $this->artbconfuseweb = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFUSEWEB] = true;
        }

        return $this;
    } // setArtbconfuseweb()

    /**
     * Set the value of [artbconfpayhstoredays] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfpayhstoredays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfpayhstoredays !== $v) {
            $this->artbconfpayhstoredays = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFPAYHSTOREDAYS] = true;
        }

        return $this;
    } // setArtbconfpayhstoredays()

    /**
     * Set the value of [artbconfbyclerk] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfbyclerk($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfbyclerk !== $v) {
            $this->artbconfbyclerk = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFBYCLERK] = true;
        }

        return $this;
    } // setArtbconfbyclerk()

    /**
     * Set the value of [artbcon2ecrwhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2ecrwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2ecrwhse !== $v) {
            $this->artbcon2ecrwhse = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2ECRWHSE] = true;
        }

        return $this;
    } // setArtbcon2ecrwhse()

    /**
     * Set the value of [artbconfzerotermdisc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfzerotermdisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfzerotermdisc !== $v) {
            $this->artbconfzerotermdisc = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFZEROTERMDISC] = true;
        }

        return $this;
    } // setArtbconfzerotermdisc()

    /**
     * Set the value of [artbconfuseautocidgen] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfuseautocidgen($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfuseautocidgen !== $v) {
            $this->artbconfuseautocidgen = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFUSEAUTOCIDGEN] = true;
        }

        return $this;
    } // setArtbconfuseautocidgen()

    /**
     * Set the value of [artbconfprefixlen] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfprefixlen($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfprefixlen !== $v) {
            $this->artbconfprefixlen = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFPREFIXLEN] = true;
        }

        return $this;
    } // setArtbconfprefixlen()

    /**
     * Set the value of [artbconfparagecredlast] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfparagecredlast($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfparagecredlast !== $v) {
            $this->artbconfparagecredlast = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFPARAGECREDLAST] = true;
        }

        return $this;
    } // setArtbconfparagecredlast()

    /**
     * Set the value of [artbconfincludecod] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfincludecod($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfincludecod !== $v) {
            $this->artbconfincludecod = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFINCLUDECOD] = true;
        }

        return $this;
    } // setArtbconfincludecod()

    /**
     * Set the value of [artbconfaddlpricdisc] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfaddlpricdisc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfaddlpricdisc !== $v) {
            $this->artbconfaddlpricdisc = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFADDLPRICDISC] = true;
        }

        return $this;
    } // setArtbconfaddlpricdisc()

    /**
     * Set the value of [artbconfapdonoehd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfapdonoehd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfapdonoehd !== $v) {
            $this->artbconfapdonoehd = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFAPDONOEHD] = true;
        }

        return $this;
    } // setArtbconfapdonoehd()

    /**
     * Set the value of [artbconfnbrsp] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfnbrsp($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfnbrsp !== $v) {
            $this->artbconfnbrsp = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFNBRSP] = true;
        }

        return $this;
    } // setArtbconfnbrsp()

    /**
     * Set the value of [artbconfforcesplvl] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfforcesplvl($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfforcesplvl !== $v) {
            $this->artbconfforcesplvl = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFFORCESPLVL] = true;
        }

        return $this;
    } // setArtbconfforcesplvl()

    /**
     * Set the value of [artbconfcustgetopt] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfcustgetopt($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfcustgetopt !== $v) {
            $this->artbconfcustgetopt = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFCUSTGETOPT] = true;
        }

        return $this;
    } // setArtbconfcustgetopt()

    /**
     * Set the value of [artbconfaddicmnt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfaddicmnt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfaddicmnt !== $v) {
            $this->artbconfaddicmnt = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFADDICMNT] = true;
        }

        return $this;
    } // setArtbconfaddicmnt()

    /**
     * Set the value of [artbcon2appaddiscitmpdm] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2appaddiscitmpdm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2appaddiscitmpdm !== $v) {
            $this->artbcon2appaddiscitmpdm = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2APPADDISCITMPDM] = true;
        }

        return $this;
    } // setArtbcon2appaddiscitmpdm()

    /**
     * Set the value of [artbcon2rfndselectamt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2rfndselectamt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2rfndselectamt !== $v) {
            $this->artbcon2rfndselectamt = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2RFNDSELECTAMT] = true;
        }

        return $this;
    } // setArtbcon2rfndselectamt()

    /**
     * Set the value of [artbcon2rfndglacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2rfndglacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2rfndglacct !== $v) {
            $this->artbcon2rfndglacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2RFNDGLACCT] = true;
        }

        return $this;
    } // setArtbcon2rfndglacct()

    /**
     * Set the value of [artbcon2rfndapterm] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2rfndapterm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2rfndapterm !== $v) {
            $this->artbcon2rfndapterm = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2RFNDAPTERM] = true;
        }

        return $this;
    } // setArtbcon2rfndapterm()

    /**
     * Set the value of [artbcon2rfndarterm] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2rfndarterm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2rfndarterm !== $v) {
            $this->artbcon2rfndarterm = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2RFNDARTERM] = true;
        }

        return $this;
    } // setArtbcon2rfndarterm()

    /**
     * Set the value of [artbcon2cwoterm] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2cwoterm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2cwoterm !== $v) {
            $this->artbcon2cwoterm = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2CWOTERM] = true;
        }

        return $this;
    } // setArtbcon2cwoterm()

    /**
     * Set the value of [artbcon2ccterm] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2ccterm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2ccterm !== $v) {
            $this->artbcon2ccterm = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2CCTERM] = true;
        }

        return $this;
    } // setArtbcon2ccterm()

    /**
     * Set the value of [artbcon2ccsave] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2ccsave($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2ccsave !== $v) {
            $this->artbcon2ccsave = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2CCSAVE] = true;
        }

        return $this;
    } // setArtbcon2ccsave()

    /**
     * Set the value of [artbcon2ccbatch] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2ccbatch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2ccbatch !== $v) {
            $this->artbcon2ccbatch = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2CCBATCH] = true;
        }

        return $this;
    } // setArtbcon2ccbatch()

    /**
     * Set the value of [artbcon2ccsavedays] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2ccsavedays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbcon2ccsavedays !== $v) {
            $this->artbcon2ccsavedays = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2CCSAVEDAYS] = true;
        }

        return $this;
    } // setArtbcon2ccsavedays()

    /**
     * Set the value of [artbcon2aprvdccasdeposit] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2aprvdccasdeposit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2aprvdccasdeposit !== $v) {
            $this->artbcon2aprvdccasdeposit = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2APRVDCCASDEPOSIT] = true;
        }

        return $this;
    } // setArtbcon2aprvdccasdeposit()

    /**
     * Set the value of [artbcon2cmqtysign] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2cmqtysign($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2cmqtysign !== $v) {
            $this->artbcon2cmqtysign = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2CMQTYSIGN] = true;
        }

        return $this;
    } // setArtbcon2cmqtysign()

    /**
     * Set the value of [artbcon2bolline] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2bolline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbcon2bolline !== $v) {
            $this->artbcon2bolline = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2BOLLINE] = true;
        }

        return $this;
    } // setArtbcon2bolline()

    /**
     * Set the value of [artbcon2bolcols] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2bolcols($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbcon2bolcols !== $v) {
            $this->artbcon2bolcols = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2BOLCOLS] = true;
        }

        return $this;
    } // setArtbcon2bolcols()

    /**
     * Set the value of [artbcon2usesounitwght] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2usesounitwght($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2usesounitwght !== $v) {
            $this->artbcon2usesounitwght = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2USESOUNITWGHT] = true;
        }

        return $this;
    } // setArtbcon2usesounitwght()

    /**
     * Set the value of [artbcon2delzbal] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2delzbal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2delzbal !== $v) {
            $this->artbcon2delzbal = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2DELZBAL] = true;
        }

        return $this;
    } // setArtbcon2delzbal()

    /**
     * Set the value of [artbconfstopcustchg] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfstopcustchg($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfstopcustchg !== $v) {
            $this->artbconfstopcustchg = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFSTOPCUSTCHG] = true;
        }

        return $this;
    } // setArtbconfstopcustchg()

    /**
     * Set the value of [artbcon2prospecteditcmm] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2prospecteditcmm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2prospecteditcmm !== $v) {
            $this->artbcon2prospecteditcmm = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2PROSPECTEDITCMM] = true;
        }

        return $this;
    } // setArtbcon2prospecteditcmm()

    /**
     * Set the value of [artbcon2prospectnotestocmm] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2prospectnotestocmm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2prospectnotestocmm !== $v) {
            $this->artbcon2prospectnotestocmm = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2PROSPECTNOTESTOCMM] = true;
        }

        return $this;
    } // setArtbcon2prospectnotestocmm()

    /**
     * Set the value of [artbcon2ctrygetdflt] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2ctrygetdflt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2ctrygetdflt !== $v) {
            $this->artbcon2ctrygetdflt = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2CTRYGETDFLT] = true;
        }

        return $this;
    } // setArtbcon2ctrygetdflt()

    /**
     * Set the value of [artbconfrptbywhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfrptbywhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfrptbywhse !== $v) {
            $this->artbconfrptbywhse = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFRPTBYWHSE] = true;
        }

        return $this;
    } // setArtbconfrptbywhse()

    /**
     * Set the value of [artbconfappendpos] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfappendpos($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbconfappendpos !== $v) {
            $this->artbconfappendpos = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFAPPENDPOS] = true;
        }

        return $this;
    } // setArtbconfappendpos()

    /**
     * Set the value of [artbconfincoasstacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfincoasstacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfincoasstacct !== $v) {
            $this->artbconfincoasstacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFINCOASSTACCT] = true;
        }

        return $this;
    } // setArtbconfincoasstacct()

    /**
     * Set the value of [artbconfincoliabacct] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfincoliabacct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfincoliabacct !== $v) {
            $this->artbconfincoliabacct = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFINCOLIABACCT] = true;
        }

        return $this;
    } // setArtbconfincoliabacct()

    /**
     * Set the value of [artbcon2incoasstacct2] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2incoasstacct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2incoasstacct2 !== $v) {
            $this->artbcon2incoasstacct2 = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2INCOASSTACCT2] = true;
        }

        return $this;
    } // setArtbcon2incoasstacct2()

    /**
     * Set the value of [artbcon2incoliabacct2] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2incoliabacct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2incoliabacct2 !== $v) {
            $this->artbcon2incoliabacct2 = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2INCOLIABACCT2] = true;
        }

        return $this;
    } // setArtbcon2incoliabacct2()

    /**
     * Set the value of [artbcon2usesurchg] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2usesurchg($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2usesurchg !== $v) {
            $this->artbcon2usesurchg = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2USESURCHG] = true;
        }

        return $this;
    } // setArtbcon2usesurchg()

    /**
     * Set the value of [artbcon2surchgitemid] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2surchgitemid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2surchgitemid !== $v) {
            $this->artbcon2surchgitemid = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2SURCHGITEMID] = true;
        }

        return $this;
    } // setArtbcon2surchgitemid()

    /**
     * Set the value of [artbcon2surchgigrupseq] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2surchgigrupseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbcon2surchgigrupseq !== $v) {
            $this->artbcon2surchgigrupseq = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2SURCHGIGRUPSEQ] = true;
        }

        return $this;
    } // setArtbcon2surchgigrupseq()

    /**
     * Set the value of [artbcon2surchgsviaseq] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2surchgsviaseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbcon2surchgsviaseq !== $v) {
            $this->artbcon2surchgsviaseq = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2SURCHGSVIASEQ] = true;
        }

        return $this;
    } // setArtbcon2surchgsviaseq()

    /**
     * Set the value of [artbcon2surchgcstidseq] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2surchgcstidseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbcon2surchgcstidseq !== $v) {
            $this->artbcon2surchgcstidseq = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2SURCHGCSTIDSEQ] = true;
        }

        return $this;
    } // setArtbcon2surchgcstidseq()

    /**
     * Set the value of [artbcon2surchgcstpcseq] column.
     *
     * @param int $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2surchgcstpcseq($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->artbcon2surchgcstpcseq !== $v) {
            $this->artbcon2surchgcstpcseq = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2SURCHGCSTPCSEQ] = true;
        }

        return $this;
    } // setArtbcon2surchgcstpcseq()

    /**
     * Set the value of [artbconfzeroinvcline] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfzeroinvcline($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfzeroinvcline !== $v) {
            $this->artbconfzeroinvcline = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFZEROINVCLINE] = true;
        }

        return $this;
    } // setArtbconfzeroinvcline()

    /**
     * Set the value of [artbcon2zeroordrship] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2zeroordrship($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2zeroordrship !== $v) {
            $this->artbcon2zeroordrship = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2ZEROORDRSHIP] = true;
        }

        return $this;
    } // setArtbcon2zeroordrship()

    /**
     * Set the value of [artbcon2zeroordrmess] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2zeroordrmess($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2zeroordrmess !== $v) {
            $this->artbcon2zeroordrmess = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2ZEROORDRMESS] = true;
        }

        return $this;
    } // setArtbcon2zeroordrmess()

    /**
     * Set the value of [artbconfcashacctwhse] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbconfcashacctwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbconfcashacctwhse !== $v) {
            $this->artbconfcashacctwhse = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCONFCASHACCTWHSE] = true;
        }

        return $this;
    } // setArtbconfcashacctwhse()

    /**
     * Set the value of [artbcon2mtaxfrtflagorcode] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setArtbcon2mtaxfrtflagorcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbcon2mtaxfrtflagorcode !== $v) {
            $this->artbcon2mtaxfrtflagorcode = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_ARTBCON2MTAXFRTFLAGORCODE] = true;
        }

        return $this;
    } // setArtbcon2mtaxfrtflagorcode()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\ConfigAr The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[ConfigArTableMap::COL_DUMMY] = true;
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
            if ($this->artbconfkey !== 1) {
                return false;
            }

            if ($this->artbconfglifac !== 'Y') {
                return false;
            }

            if ($this->artbconfinifac !== 'Y') {
                return false;
            }

            if ($this->artbconfpcifac !== 'Y') {
                return false;
            }

            if ($this->artbconfccifac !== 'Y') {
                return false;
            }

            if ($this->artbconfinvcustgl !== 'I') {
                return false;
            }

            if ($this->artbconffrtacct !== '') {
                return false;
            }

            if ($this->artbconfmiscacct !== '') {
                return false;
            }

            if ($this->artbconfaracct !== '') {
                return false;
            }

            if ($this->artbconfcashacct !== '') {
                return false;
            }

            if ($this->artbcon2cccashacct !== '') {
                return false;
            }

            if ($this->artbconffincacct !== '') {
                return false;
            }

            if ($this->artbconfdiscacct !== '') {
                return false;
            }

            if ($this->artbconfrgacogsacct !== '') {
                return false;
            }

            if ($this->artbconfcusdacct !== '') {
                return false;
            }

            if ($this->artbconfdpstacct !== '') {
                return false;
            }

            if ($this->artbconfwriteoffacct !== '') {
                return false;
            }

            if ($this->artbcon2presalivtyacct !== '') {
                return false;
            }

            if ($this->artbconffincpct !== '0.00') {
                return false;
            }

            if ($this->artbconffincdays !== 0) {
                return false;
            }

            if ($this->artbconffincminchg !== '0.00') {
                return false;
            }

            if ($this->artbconffincterm !== '') {
                return false;
            }

            if ($this->artbconfover1 !== 30) {
                return false;
            }

            if ($this->artbconfover2 !== 60) {
                return false;
            }

            if ($this->artbconfstmtline !== 20) {
                return false;
            }

            if ($this->artbconfstmtcols !== 60) {
                return false;
            }

            if ($this->artbconfstmtnotedef !== '') {
                return false;
            }

            if ($this->artbconfstmtnote1 !== '') {
                return false;
            }

            if ($this->artbconfstmtnote2 !== '') {
                return false;
            }

            if ($this->artbconfstmtnote3 !== '') {
                return false;
            }

            if ($this->artbconfinvline !== 20) {
                return false;
            }

            if ($this->artbconfinvcols !== 35) {
                return false;
            }

            if ($this->artbconfinvnotedef !== '') {
                return false;
            }

            if ($this->artbconfcustline !== 20) {
                return false;
            }

            if ($this->artbconfcustcols !== 60) {
                return false;
            }

            if ($this->artbconfinvsort !== 'I') {
                return false;
            }

            if ($this->artbconfinvnc !== 'Y') {
                return false;
            }

            if ($this->artbconfstmtsort !== 'I') {
                return false;
            }

            if ($this->artbconfstmt0orless !== 'N') {
                return false;
            }

            if ($this->artbconfspdef !== '') {
                return false;
            }

            if ($this->artbconfwhse !== '') {
                return false;
            }

            if ($this->artbconftypedef !== '') {
                return false;
            }

            if ($this->artbconfsviadef !== '') {
                return false;
            }

            if ($this->artbconftermdef !== '') {
                return false;
            }

            if ($this->artbconftaxdef !== '') {
                return false;
            }

            if ($this->artbconfstmtdef !== 'B') {
                return false;
            }

            if ($this->artbconfallowbo !== 'Y') {
                return false;
            }

            if ($this->artbconfallowfc !== 'Y') {
                return false;
            }

            if ($this->artbconfusepriccode !== 'Y') {
                return false;
            }

            if ($this->artbconfpricdef !== '') {
                return false;
            }

            if ($this->artbconfusecommcode !== 'Y') {
                return false;
            }

            if ($this->artbconfcommdef !== '') {
                return false;
            }

            if ($this->artbconfcustlabl !== '') {
                return false;
            }

            if ($this->artbconfcustreq !== 'N') {
                return false;
            }

            if ($this->artbconfcustdef !== '') {
                return false;
            }

            if ($this->artbconfshiplabl !== '') {
                return false;
            }

            if ($this->artbconfshipreq !== 'N') {
                return false;
            }

            if ($this->artbconfshipdef !== '') {
                return false;
            }

            if ($this->artbconfuseidlink !== 'N') {
                return false;
            }

            if ($this->artbconfreqdate2 !== 30) {
                return false;
            }

            if ($this->artbconfreqdate3 !== 60) {
                return false;
            }

            if ($this->artbconfreqdate4 !== 90) {
                return false;
            }

            if ($this->artbconfuseweb !== 'N') {
                return false;
            }

            if ($this->artbconfpayhstoredays !== 530) {
                return false;
            }

            if ($this->artbconfbyclerk !== 'N') {
                return false;
            }

            if ($this->artbcon2ecrwhse !== 'L') {
                return false;
            }

            if ($this->artbconfzerotermdisc !== 'Y') {
                return false;
            }

            if ($this->artbconfuseautocidgen !== 'N') {
                return false;
            }

            if ($this->artbconfprefixlen !== 0) {
                return false;
            }

            if ($this->artbconfparagecredlast !== 'N') {
                return false;
            }

            if ($this->artbconfincludecod !== 'N') {
                return false;
            }

            if ($this->artbconfaddlpricdisc !== 'N') {
                return false;
            }

            if ($this->artbconfapdonoehd !== 'N') {
                return false;
            }

            if ($this->artbconfnbrsp !== 3) {
                return false;
            }

            if ($this->artbconfforcesplvl !== 1) {
                return false;
            }

            if ($this->artbconfcustgetopt !== 1) {
                return false;
            }

            if ($this->artbconfaddicmnt !== 'N') {
                return false;
            }

            if ($this->artbcon2appaddiscitmpdm !== 'B') {
                return false;
            }

            if ($this->artbcon2rfndselectamt !== '0.00') {
                return false;
            }

            if ($this->artbcon2rfndglacct !== '') {
                return false;
            }

            if ($this->artbcon2rfndapterm !== '') {
                return false;
            }

            if ($this->artbcon2rfndarterm !== '') {
                return false;
            }

            if ($this->artbcon2cwoterm !== '') {
                return false;
            }

            if ($this->artbcon2ccterm !== '') {
                return false;
            }

            if ($this->artbcon2ccsave !== 'N') {
                return false;
            }

            if ($this->artbcon2ccbatch !== 'B') {
                return false;
            }

            if ($this->artbcon2ccsavedays !== 0) {
                return false;
            }

            if ($this->artbcon2aprvdccasdeposit !== 'N') {
                return false;
            }

            if ($this->artbcon2cmqtysign !== 'Y') {
                return false;
            }

            if ($this->artbcon2bolline !== 20) {
                return false;
            }

            if ($this->artbcon2bolcols !== 35) {
                return false;
            }

            if ($this->artbcon2usesounitwght !== 'N') {
                return false;
            }

            if ($this->artbcon2delzbal !== 'N') {
                return false;
            }

            if ($this->artbconfstopcustchg !== 0) {
                return false;
            }

            if ($this->artbcon2prospecteditcmm !== 'N') {
                return false;
            }

            if ($this->artbcon2prospectnotestocmm !== 'N') {
                return false;
            }

            if ($this->artbcon2ctrygetdflt !== '3') {
                return false;
            }

            if ($this->artbconfrptbywhse !== 'N') {
                return false;
            }

            if ($this->artbconfappendpos !== 0) {
                return false;
            }

            if ($this->artbconfincoasstacct !== '') {
                return false;
            }

            if ($this->artbconfincoliabacct !== '') {
                return false;
            }

            if ($this->artbcon2incoasstacct2 !== '') {
                return false;
            }

            if ($this->artbcon2incoliabacct2 !== '') {
                return false;
            }

            if ($this->artbcon2usesurchg !== 'N') {
                return false;
            }

            if ($this->artbcon2surchgitemid !== '') {
                return false;
            }

            if ($this->artbcon2surchgigrupseq !== 0) {
                return false;
            }

            if ($this->artbcon2surchgsviaseq !== 0) {
                return false;
            }

            if ($this->artbcon2surchgcstidseq !== 0) {
                return false;
            }

            if ($this->artbcon2surchgcstpcseq !== 0) {
                return false;
            }

            if ($this->artbconfzeroinvcline !== 'N') {
                return false;
            }

            if ($this->artbcon2zeroordrship !== 'N') {
                return false;
            }

            if ($this->artbcon2zeroordrmess !== '') {
                return false;
            }

            if ($this->artbconfcashacctwhse !== '') {
                return false;
            }

            if ($this->artbcon2mtaxfrtflagorcode !== 'C') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : ConfigArTableMap::translateFieldName('Artbconfkey', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfkey = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : ConfigArTableMap::translateFieldName('Artbconfglifac', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfglifac = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : ConfigArTableMap::translateFieldName('Artbconfinifac', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfinifac = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : ConfigArTableMap::translateFieldName('Artbconfpcifac', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfpcifac = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : ConfigArTableMap::translateFieldName('Artbconfccifac', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfccifac = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : ConfigArTableMap::translateFieldName('Artbconfinvcustgl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfinvcustgl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : ConfigArTableMap::translateFieldName('Artbconffrtacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconffrtacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : ConfigArTableMap::translateFieldName('Artbconfmiscacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfmiscacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : ConfigArTableMap::translateFieldName('Artbconfaracct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfaracct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : ConfigArTableMap::translateFieldName('Artbconfcashacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfcashacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2cccashacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2cccashacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : ConfigArTableMap::translateFieldName('Artbconffincacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconffincacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : ConfigArTableMap::translateFieldName('Artbconfdiscacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfdiscacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : ConfigArTableMap::translateFieldName('Artbconfrgacogsacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfrgacogsacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : ConfigArTableMap::translateFieldName('Artbconfcusdacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfcusdacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : ConfigArTableMap::translateFieldName('Artbconfdpstacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfdpstacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : ConfigArTableMap::translateFieldName('Artbconfwriteoffacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfwriteoffacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2presalivtyacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2presalivtyacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : ConfigArTableMap::translateFieldName('Artbconffincpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconffincpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : ConfigArTableMap::translateFieldName('Artbconffincdays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconffincdays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : ConfigArTableMap::translateFieldName('Artbconffincminchg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconffincminchg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : ConfigArTableMap::translateFieldName('Artbconffincterm', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconffincterm = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : ConfigArTableMap::translateFieldName('Artbconfover1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfover1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : ConfigArTableMap::translateFieldName('Artbconfover2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfover2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : ConfigArTableMap::translateFieldName('Artbconfstmtline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfstmtline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : ConfigArTableMap::translateFieldName('Artbconfstmtcols', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfstmtcols = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : ConfigArTableMap::translateFieldName('Artbconfstmtnotedef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfstmtnotedef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : ConfigArTableMap::translateFieldName('Artbconfstmtnote1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfstmtnote1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : ConfigArTableMap::translateFieldName('Artbconfstmtnote2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfstmtnote2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : ConfigArTableMap::translateFieldName('Artbconfstmtnote3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfstmtnote3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : ConfigArTableMap::translateFieldName('Artbconfinvline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfinvline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : ConfigArTableMap::translateFieldName('Artbconfinvcols', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfinvcols = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : ConfigArTableMap::translateFieldName('Artbconfinvnotedef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfinvnotedef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : ConfigArTableMap::translateFieldName('Artbconfcustline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfcustline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : ConfigArTableMap::translateFieldName('Artbconfcustcols', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfcustcols = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : ConfigArTableMap::translateFieldName('Artbconfinvsort', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfinvsort = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : ConfigArTableMap::translateFieldName('Artbconfinvnc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfinvnc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : ConfigArTableMap::translateFieldName('Artbconfstmtsort', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfstmtsort = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : ConfigArTableMap::translateFieldName('Artbconfstmt0orless', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfstmt0orless = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : ConfigArTableMap::translateFieldName('Artbconfspdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfspdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : ConfigArTableMap::translateFieldName('Artbconfwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : ConfigArTableMap::translateFieldName('Artbconftypedef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconftypedef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : ConfigArTableMap::translateFieldName('Artbconfsviadef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfsviadef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : ConfigArTableMap::translateFieldName('Artbconftermdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconftermdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : ConfigArTableMap::translateFieldName('Artbconftaxdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconftaxdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : ConfigArTableMap::translateFieldName('Artbconfstmtdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfstmtdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : ConfigArTableMap::translateFieldName('Artbconfallowbo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfallowbo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : ConfigArTableMap::translateFieldName('Artbconfallowfc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfallowfc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : ConfigArTableMap::translateFieldName('Artbconfusepriccode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfusepriccode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : ConfigArTableMap::translateFieldName('Artbconfpricdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfpricdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : ConfigArTableMap::translateFieldName('Artbconfusecommcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfusecommcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : ConfigArTableMap::translateFieldName('Artbconfcommdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfcommdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : ConfigArTableMap::translateFieldName('Artbconfcustlabl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfcustlabl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : ConfigArTableMap::translateFieldName('Artbconfcustreq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfcustreq = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : ConfigArTableMap::translateFieldName('Artbconfcustdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfcustdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : ConfigArTableMap::translateFieldName('Artbconfshiplabl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfshiplabl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : ConfigArTableMap::translateFieldName('Artbconfshipreq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfshipreq = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : ConfigArTableMap::translateFieldName('Artbconfshipdef', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfshipdef = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : ConfigArTableMap::translateFieldName('Artbconfuseidlink', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfuseidlink = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : ConfigArTableMap::translateFieldName('Artbconfreqdate2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfreqdate2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : ConfigArTableMap::translateFieldName('Artbconfreqdate3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfreqdate3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : ConfigArTableMap::translateFieldName('Artbconfreqdate4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfreqdate4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : ConfigArTableMap::translateFieldName('Artbconfuseweb', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfuseweb = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : ConfigArTableMap::translateFieldName('Artbconfpayhstoredays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfpayhstoredays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : ConfigArTableMap::translateFieldName('Artbconfbyclerk', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfbyclerk = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2ecrwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2ecrwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : ConfigArTableMap::translateFieldName('Artbconfzerotermdisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfzerotermdisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : ConfigArTableMap::translateFieldName('Artbconfuseautocidgen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfuseautocidgen = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : ConfigArTableMap::translateFieldName('Artbconfprefixlen', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfprefixlen = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : ConfigArTableMap::translateFieldName('Artbconfparagecredlast', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfparagecredlast = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : ConfigArTableMap::translateFieldName('Artbconfincludecod', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfincludecod = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : ConfigArTableMap::translateFieldName('Artbconfaddlpricdisc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfaddlpricdisc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : ConfigArTableMap::translateFieldName('Artbconfapdonoehd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfapdonoehd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : ConfigArTableMap::translateFieldName('Artbconfnbrsp', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfnbrsp = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : ConfigArTableMap::translateFieldName('Artbconfforcesplvl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfforcesplvl = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : ConfigArTableMap::translateFieldName('Artbconfcustgetopt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfcustgetopt = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : ConfigArTableMap::translateFieldName('Artbconfaddicmnt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfaddicmnt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2appaddiscitmpdm', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2appaddiscitmpdm = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2rfndselectamt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2rfndselectamt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2rfndglacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2rfndglacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2rfndapterm', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2rfndapterm = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2rfndarterm', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2rfndarterm = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2cwoterm', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2cwoterm = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2ccterm', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2ccterm = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2ccsave', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2ccsave = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2ccbatch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2ccbatch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2ccsavedays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2ccsavedays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2aprvdccasdeposit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2aprvdccasdeposit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2cmqtysign', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2cmqtysign = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2bolline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2bolline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2bolcols', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2bolcols = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2usesounitwght', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2usesounitwght = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2delzbal', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2delzbal = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : ConfigArTableMap::translateFieldName('Artbconfstopcustchg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfstopcustchg = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2prospecteditcmm', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2prospecteditcmm = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 95 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2prospectnotestocmm', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2prospectnotestocmm = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 96 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2ctrygetdflt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2ctrygetdflt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 97 + $startcol : ConfigArTableMap::translateFieldName('Artbconfrptbywhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfrptbywhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 98 + $startcol : ConfigArTableMap::translateFieldName('Artbconfappendpos', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfappendpos = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 99 + $startcol : ConfigArTableMap::translateFieldName('Artbconfincoasstacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfincoasstacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 100 + $startcol : ConfigArTableMap::translateFieldName('Artbconfincoliabacct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfincoliabacct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 101 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2incoasstacct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2incoasstacct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 102 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2incoliabacct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2incoliabacct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 103 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2usesurchg', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2usesurchg = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 104 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2surchgitemid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2surchgitemid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 105 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2surchgigrupseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2surchgigrupseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 106 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2surchgsviaseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2surchgsviaseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 107 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2surchgcstidseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2surchgcstidseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 108 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2surchgcstpcseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2surchgcstpcseq = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 109 + $startcol : ConfigArTableMap::translateFieldName('Artbconfzeroinvcline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfzeroinvcline = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 110 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2zeroordrship', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2zeroordrship = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 111 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2zeroordrmess', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2zeroordrmess = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 112 + $startcol : ConfigArTableMap::translateFieldName('Artbconfcashacctwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbconfcashacctwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 113 + $startcol : ConfigArTableMap::translateFieldName('Artbcon2mtaxfrtflagorcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbcon2mtaxfrtflagorcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 114 + $startcol : ConfigArTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 115 + $startcol : ConfigArTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 116 + $startcol : ConfigArTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 117; // 117 = ConfigArTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\ConfigAr'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(ConfigArTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildConfigArQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
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
     * @see ConfigAr::setDeleted()
     * @see ConfigAr::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigArTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildConfigArQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigArTableMap::DATABASE_NAME);
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
                ConfigArTableMap::addInstanceToPool($this);
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
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFKEY)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfKey';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFGLIFAC)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfGlIfac';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINIFAC)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfInIfac';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFPCIFAC)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfPcIfac';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCCIFAC)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfCcIfac';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINVCUSTGL)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfInvCustGl';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFRTACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfFrtAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFMISCACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfMiscAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFARACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfArAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCASHACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfCashAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CCCASHACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2CcCashAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFINCACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfFincAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFDISCACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfDiscAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFRGACOGSACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfRgaCogsAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSDACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfCusdAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFDPSTACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfDpstAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFWRITEOFFACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfWriteOffAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2PRESALIVTYACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2PresalIvtyAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFINCPCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfFincPct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFINCDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfFincDays';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFINCMINCHG)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfFincMinChg';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFINCTERM)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfFincTerm';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFOVER1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfOver1';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFOVER2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfOver2';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfStmtLine';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTCOLS)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfStmtCols';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTNOTEDEF)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfStmtNoteDef';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTNOTE1)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfStmtNote1';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTNOTE2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfStmtNote2';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTNOTE3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfStmtNote3';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINVLINE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfInvLine';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINVCOLS)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfInvCols';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINVNOTEDEF)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfInvNoteDef';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfCustLine';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSTCOLS)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfCustCols';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINVSORT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfInvSort';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINVNC)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfInvNc';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTSORT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfStmtSort';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMT0ORLESS)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfStmt0OrLess';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSPDEF)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfSpDef';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfWhse';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFTYPEDEF)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfTypeDef';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSVIADEF)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfSviaDef';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFTERMDEF)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfTermDef';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFTAXDEF)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfTaxDef';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTDEF)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfStmtDef';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFALLOWBO)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfAllowBo';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFALLOWFC)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfAllowFc';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFUSEPRICCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfUsePricCode';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFPRICDEF)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfPricDef';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFUSECOMMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfUseCommCode';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCOMMDEF)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfCommDef';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSTLABL)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfCustLabl';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSTREQ)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfCustReq';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSTDEF)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfCustDef';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSHIPLABL)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfShipLabl';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSHIPREQ)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfShipReq';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSHIPDEF)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfShipDef';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFUSEIDLINK)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfUseIdLink';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFREQDATE2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfReqDate2';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFREQDATE3)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfReqDate3';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFREQDATE4)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfReqDate4';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFUSEWEB)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfUseWeb';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFPAYHSTOREDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfPayhStoreDays';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFBYCLERK)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfByClerk';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2ECRWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2EcrWhse';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFZEROTERMDISC)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfZeroTermDisc';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFUSEAUTOCIDGEN)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfUseAutoCidGen';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFPREFIXLEN)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfPrefixLen';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFPARAGECREDLAST)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfParAgeCredLast';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINCLUDECOD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfIncludeCod';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFADDLPRICDISC)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfAddlPricDisc';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFAPDONOEHD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfApdOnOehd';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFNBRSP)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfNbrSp';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFORCESPLVL)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfForceSpLvl';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSTGETOPT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfCustGetOpt';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFADDICMNT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfAddICmnt';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2APPADDISCITMPDM)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2AppAddiscItmPdm';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2RFNDSELECTAMT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2RfndSelectAmt';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2RFNDGLACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2RfndGlAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2RFNDAPTERM)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2RfndApTerm';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2RFNDARTERM)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2RfndArTerm';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CWOTERM)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2CwoTerm';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CCTERM)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2CcTerm';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CCSAVE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2CcSave';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CCBATCH)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2CcBatch';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CCSAVEDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2CcSaveDays';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2APRVDCCASDEPOSIT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2AprvdCcAsDeposit';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CMQTYSIGN)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2CmQtySign';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2BOLLINE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2BolLine';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2BOLCOLS)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2BolCols';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2USESOUNITWGHT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2UseSoUnitWght';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2DELZBAL)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2DelZbal';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTOPCUSTCHG)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfStopCustChg';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2PROSPECTEDITCMM)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2ProspectEditCmm';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2PROSPECTNOTESTOCMM)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2ProspectNotesToCmm';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CTRYGETDFLT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2CtryGetDflt';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFRPTBYWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfRptByWhse';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFAPPENDPOS)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfAppendPos';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINCOASSTACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfIncoAsstAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINCOLIABACCT)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfIncoLiabAcct';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2INCOASSTACCT2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2IncoAsstAcct2';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2INCOLIABACCT2)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2IncoLiabAcct2';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2USESURCHG)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2UseSurchg';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2SURCHGITEMID)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2SurchgItemId';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2SURCHGIGRUPSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2SurchgIgrupSeq';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2SURCHGSVIASEQ)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2SurchgSviaSeq';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2SURCHGCSTIDSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2SurchgCstidSeq';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2SURCHGCSTPCSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2SurchgCstpcSeq';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFZEROINVCLINE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfZeroInvcLine';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2ZEROORDRSHIP)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2ZeroOrdrShip';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2ZEROORDRMESS)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2ZeroOrdrMess';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCASHACCTWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbConfCashAcctWhse';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2MTAXFRTFLAGORCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbCon2MtaxFrtFlagOrCode';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO ar_config (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'ArtbConfKey':
                        $stmt->bindValue($identifier, $this->artbconfkey, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfGlIfac':
                        $stmt->bindValue($identifier, $this->artbconfglifac, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfInIfac':
                        $stmt->bindValue($identifier, $this->artbconfinifac, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfPcIfac':
                        $stmt->bindValue($identifier, $this->artbconfpcifac, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfCcIfac':
                        $stmt->bindValue($identifier, $this->artbconfccifac, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfInvCustGl':
                        $stmt->bindValue($identifier, $this->artbconfinvcustgl, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfFrtAcct':
                        $stmt->bindValue($identifier, $this->artbconffrtacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfMiscAcct':
                        $stmt->bindValue($identifier, $this->artbconfmiscacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfArAcct':
                        $stmt->bindValue($identifier, $this->artbconfaracct, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfCashAcct':
                        $stmt->bindValue($identifier, $this->artbconfcashacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2CcCashAcct':
                        $stmt->bindValue($identifier, $this->artbcon2cccashacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfFincAcct':
                        $stmt->bindValue($identifier, $this->artbconffincacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfDiscAcct':
                        $stmt->bindValue($identifier, $this->artbconfdiscacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfRgaCogsAcct':
                        $stmt->bindValue($identifier, $this->artbconfrgacogsacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfCusdAcct':
                        $stmt->bindValue($identifier, $this->artbconfcusdacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfDpstAcct':
                        $stmt->bindValue($identifier, $this->artbconfdpstacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfWriteOffAcct':
                        $stmt->bindValue($identifier, $this->artbconfwriteoffacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2PresalIvtyAcct':
                        $stmt->bindValue($identifier, $this->artbcon2presalivtyacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfFincPct':
                        $stmt->bindValue($identifier, $this->artbconffincpct, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfFincDays':
                        $stmt->bindValue($identifier, $this->artbconffincdays, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfFincMinChg':
                        $stmt->bindValue($identifier, $this->artbconffincminchg, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfFincTerm':
                        $stmt->bindValue($identifier, $this->artbconffincterm, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfOver1':
                        $stmt->bindValue($identifier, $this->artbconfover1, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfOver2':
                        $stmt->bindValue($identifier, $this->artbconfover2, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfStmtLine':
                        $stmt->bindValue($identifier, $this->artbconfstmtline, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfStmtCols':
                        $stmt->bindValue($identifier, $this->artbconfstmtcols, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfStmtNoteDef':
                        $stmt->bindValue($identifier, $this->artbconfstmtnotedef, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfStmtNote1':
                        $stmt->bindValue($identifier, $this->artbconfstmtnote1, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfStmtNote2':
                        $stmt->bindValue($identifier, $this->artbconfstmtnote2, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfStmtNote3':
                        $stmt->bindValue($identifier, $this->artbconfstmtnote3, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfInvLine':
                        $stmt->bindValue($identifier, $this->artbconfinvline, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfInvCols':
                        $stmt->bindValue($identifier, $this->artbconfinvcols, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfInvNoteDef':
                        $stmt->bindValue($identifier, $this->artbconfinvnotedef, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfCustLine':
                        $stmt->bindValue($identifier, $this->artbconfcustline, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfCustCols':
                        $stmt->bindValue($identifier, $this->artbconfcustcols, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfInvSort':
                        $stmt->bindValue($identifier, $this->artbconfinvsort, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfInvNc':
                        $stmt->bindValue($identifier, $this->artbconfinvnc, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfStmtSort':
                        $stmt->bindValue($identifier, $this->artbconfstmtsort, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfStmt0OrLess':
                        $stmt->bindValue($identifier, $this->artbconfstmt0orless, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfSpDef':
                        $stmt->bindValue($identifier, $this->artbconfspdef, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfWhse':
                        $stmt->bindValue($identifier, $this->artbconfwhse, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfTypeDef':
                        $stmt->bindValue($identifier, $this->artbconftypedef, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfSviaDef':
                        $stmt->bindValue($identifier, $this->artbconfsviadef, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfTermDef':
                        $stmt->bindValue($identifier, $this->artbconftermdef, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfTaxDef':
                        $stmt->bindValue($identifier, $this->artbconftaxdef, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfStmtDef':
                        $stmt->bindValue($identifier, $this->artbconfstmtdef, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfAllowBo':
                        $stmt->bindValue($identifier, $this->artbconfallowbo, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfAllowFc':
                        $stmt->bindValue($identifier, $this->artbconfallowfc, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfUsePricCode':
                        $stmt->bindValue($identifier, $this->artbconfusepriccode, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfPricDef':
                        $stmt->bindValue($identifier, $this->artbconfpricdef, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfUseCommCode':
                        $stmt->bindValue($identifier, $this->artbconfusecommcode, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfCommDef':
                        $stmt->bindValue($identifier, $this->artbconfcommdef, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfCustLabl':
                        $stmt->bindValue($identifier, $this->artbconfcustlabl, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfCustReq':
                        $stmt->bindValue($identifier, $this->artbconfcustreq, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfCustDef':
                        $stmt->bindValue($identifier, $this->artbconfcustdef, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfShipLabl':
                        $stmt->bindValue($identifier, $this->artbconfshiplabl, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfShipReq':
                        $stmt->bindValue($identifier, $this->artbconfshipreq, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfShipDef':
                        $stmt->bindValue($identifier, $this->artbconfshipdef, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfUseIdLink':
                        $stmt->bindValue($identifier, $this->artbconfuseidlink, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfReqDate2':
                        $stmt->bindValue($identifier, $this->artbconfreqdate2, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfReqDate3':
                        $stmt->bindValue($identifier, $this->artbconfreqdate3, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfReqDate4':
                        $stmt->bindValue($identifier, $this->artbconfreqdate4, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfUseWeb':
                        $stmt->bindValue($identifier, $this->artbconfuseweb, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfPayhStoreDays':
                        $stmt->bindValue($identifier, $this->artbconfpayhstoredays, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfByClerk':
                        $stmt->bindValue($identifier, $this->artbconfbyclerk, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2EcrWhse':
                        $stmt->bindValue($identifier, $this->artbcon2ecrwhse, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfZeroTermDisc':
                        $stmt->bindValue($identifier, $this->artbconfzerotermdisc, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfUseAutoCidGen':
                        $stmt->bindValue($identifier, $this->artbconfuseautocidgen, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfPrefixLen':
                        $stmt->bindValue($identifier, $this->artbconfprefixlen, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfParAgeCredLast':
                        $stmt->bindValue($identifier, $this->artbconfparagecredlast, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfIncludeCod':
                        $stmt->bindValue($identifier, $this->artbconfincludecod, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfAddlPricDisc':
                        $stmt->bindValue($identifier, $this->artbconfaddlpricdisc, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfApdOnOehd':
                        $stmt->bindValue($identifier, $this->artbconfapdonoehd, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfNbrSp':
                        $stmt->bindValue($identifier, $this->artbconfnbrsp, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfForceSpLvl':
                        $stmt->bindValue($identifier, $this->artbconfforcesplvl, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfCustGetOpt':
                        $stmt->bindValue($identifier, $this->artbconfcustgetopt, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfAddICmnt':
                        $stmt->bindValue($identifier, $this->artbconfaddicmnt, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2AppAddiscItmPdm':
                        $stmt->bindValue($identifier, $this->artbcon2appaddiscitmpdm, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2RfndSelectAmt':
                        $stmt->bindValue($identifier, $this->artbcon2rfndselectamt, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2RfndGlAcct':
                        $stmt->bindValue($identifier, $this->artbcon2rfndglacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2RfndApTerm':
                        $stmt->bindValue($identifier, $this->artbcon2rfndapterm, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2RfndArTerm':
                        $stmt->bindValue($identifier, $this->artbcon2rfndarterm, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2CwoTerm':
                        $stmt->bindValue($identifier, $this->artbcon2cwoterm, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2CcTerm':
                        $stmt->bindValue($identifier, $this->artbcon2ccterm, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2CcSave':
                        $stmt->bindValue($identifier, $this->artbcon2ccsave, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2CcBatch':
                        $stmt->bindValue($identifier, $this->artbcon2ccbatch, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2CcSaveDays':
                        $stmt->bindValue($identifier, $this->artbcon2ccsavedays, PDO::PARAM_INT);
                        break;
                    case 'ArtbCon2AprvdCcAsDeposit':
                        $stmt->bindValue($identifier, $this->artbcon2aprvdccasdeposit, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2CmQtySign':
                        $stmt->bindValue($identifier, $this->artbcon2cmqtysign, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2BolLine':
                        $stmt->bindValue($identifier, $this->artbcon2bolline, PDO::PARAM_INT);
                        break;
                    case 'ArtbCon2BolCols':
                        $stmt->bindValue($identifier, $this->artbcon2bolcols, PDO::PARAM_INT);
                        break;
                    case 'ArtbCon2UseSoUnitWght':
                        $stmt->bindValue($identifier, $this->artbcon2usesounitwght, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2DelZbal':
                        $stmt->bindValue($identifier, $this->artbcon2delzbal, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfStopCustChg':
                        $stmt->bindValue($identifier, $this->artbconfstopcustchg, PDO::PARAM_INT);
                        break;
                    case 'ArtbCon2ProspectEditCmm':
                        $stmt->bindValue($identifier, $this->artbcon2prospecteditcmm, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2ProspectNotesToCmm':
                        $stmt->bindValue($identifier, $this->artbcon2prospectnotestocmm, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2CtryGetDflt':
                        $stmt->bindValue($identifier, $this->artbcon2ctrygetdflt, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfRptByWhse':
                        $stmt->bindValue($identifier, $this->artbconfrptbywhse, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfAppendPos':
                        $stmt->bindValue($identifier, $this->artbconfappendpos, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfIncoAsstAcct':
                        $stmt->bindValue($identifier, $this->artbconfincoasstacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfIncoLiabAcct':
                        $stmt->bindValue($identifier, $this->artbconfincoliabacct, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2IncoAsstAcct2':
                        $stmt->bindValue($identifier, $this->artbcon2incoasstacct2, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2IncoLiabAcct2':
                        $stmt->bindValue($identifier, $this->artbcon2incoliabacct2, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2UseSurchg':
                        $stmt->bindValue($identifier, $this->artbcon2usesurchg, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2SurchgItemId':
                        $stmt->bindValue($identifier, $this->artbcon2surchgitemid, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2SurchgIgrupSeq':
                        $stmt->bindValue($identifier, $this->artbcon2surchgigrupseq, PDO::PARAM_INT);
                        break;
                    case 'ArtbCon2SurchgSviaSeq':
                        $stmt->bindValue($identifier, $this->artbcon2surchgsviaseq, PDO::PARAM_INT);
                        break;
                    case 'ArtbCon2SurchgCstidSeq':
                        $stmt->bindValue($identifier, $this->artbcon2surchgcstidseq, PDO::PARAM_INT);
                        break;
                    case 'ArtbCon2SurchgCstpcSeq':
                        $stmt->bindValue($identifier, $this->artbcon2surchgcstpcseq, PDO::PARAM_INT);
                        break;
                    case 'ArtbConfZeroInvcLine':
                        $stmt->bindValue($identifier, $this->artbconfzeroinvcline, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2ZeroOrdrShip':
                        $stmt->bindValue($identifier, $this->artbcon2zeroordrship, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2ZeroOrdrMess':
                        $stmt->bindValue($identifier, $this->artbcon2zeroordrmess, PDO::PARAM_STR);
                        break;
                    case 'ArtbConfCashAcctWhse':
                        $stmt->bindValue($identifier, $this->artbconfcashacctwhse, PDO::PARAM_STR);
                        break;
                    case 'ArtbCon2MtaxFrtFlagOrCode':
                        $stmt->bindValue($identifier, $this->artbcon2mtaxfrtflagorcode, PDO::PARAM_STR);
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
        $pos = ConfigArTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getArtbconfkey();
                break;
            case 1:
                return $this->getArtbconfglifac();
                break;
            case 2:
                return $this->getArtbconfinifac();
                break;
            case 3:
                return $this->getArtbconfpcifac();
                break;
            case 4:
                return $this->getArtbconfccifac();
                break;
            case 5:
                return $this->getArtbconfinvcustgl();
                break;
            case 6:
                return $this->getArtbconffrtacct();
                break;
            case 7:
                return $this->getArtbconfmiscacct();
                break;
            case 8:
                return $this->getArtbconfaracct();
                break;
            case 9:
                return $this->getArtbconfcashacct();
                break;
            case 10:
                return $this->getArtbcon2cccashacct();
                break;
            case 11:
                return $this->getArtbconffincacct();
                break;
            case 12:
                return $this->getArtbconfdiscacct();
                break;
            case 13:
                return $this->getArtbconfrgacogsacct();
                break;
            case 14:
                return $this->getArtbconfcusdacct();
                break;
            case 15:
                return $this->getArtbconfdpstacct();
                break;
            case 16:
                return $this->getArtbconfwriteoffacct();
                break;
            case 17:
                return $this->getArtbcon2presalivtyacct();
                break;
            case 18:
                return $this->getArtbconffincpct();
                break;
            case 19:
                return $this->getArtbconffincdays();
                break;
            case 20:
                return $this->getArtbconffincminchg();
                break;
            case 21:
                return $this->getArtbconffincterm();
                break;
            case 22:
                return $this->getArtbconfover1();
                break;
            case 23:
                return $this->getArtbconfover2();
                break;
            case 24:
                return $this->getArtbconfstmtline();
                break;
            case 25:
                return $this->getArtbconfstmtcols();
                break;
            case 26:
                return $this->getArtbconfstmtnotedef();
                break;
            case 27:
                return $this->getArtbconfstmtnote1();
                break;
            case 28:
                return $this->getArtbconfstmtnote2();
                break;
            case 29:
                return $this->getArtbconfstmtnote3();
                break;
            case 30:
                return $this->getArtbconfinvline();
                break;
            case 31:
                return $this->getArtbconfinvcols();
                break;
            case 32:
                return $this->getArtbconfinvnotedef();
                break;
            case 33:
                return $this->getArtbconfcustline();
                break;
            case 34:
                return $this->getArtbconfcustcols();
                break;
            case 35:
                return $this->getArtbconfinvsort();
                break;
            case 36:
                return $this->getArtbconfinvnc();
                break;
            case 37:
                return $this->getArtbconfstmtsort();
                break;
            case 38:
                return $this->getArtbconfstmt0orless();
                break;
            case 39:
                return $this->getArtbconfspdef();
                break;
            case 40:
                return $this->getArtbconfwhse();
                break;
            case 41:
                return $this->getArtbconftypedef();
                break;
            case 42:
                return $this->getArtbconfsviadef();
                break;
            case 43:
                return $this->getArtbconftermdef();
                break;
            case 44:
                return $this->getArtbconftaxdef();
                break;
            case 45:
                return $this->getArtbconfstmtdef();
                break;
            case 46:
                return $this->getArtbconfallowbo();
                break;
            case 47:
                return $this->getArtbconfallowfc();
                break;
            case 48:
                return $this->getArtbconfusepriccode();
                break;
            case 49:
                return $this->getArtbconfpricdef();
                break;
            case 50:
                return $this->getArtbconfusecommcode();
                break;
            case 51:
                return $this->getArtbconfcommdef();
                break;
            case 52:
                return $this->getArtbconfcustlabl();
                break;
            case 53:
                return $this->getArtbconfcustreq();
                break;
            case 54:
                return $this->getArtbconfcustdef();
                break;
            case 55:
                return $this->getArtbconfshiplabl();
                break;
            case 56:
                return $this->getArtbconfshipreq();
                break;
            case 57:
                return $this->getArtbconfshipdef();
                break;
            case 58:
                return $this->getArtbconfuseidlink();
                break;
            case 59:
                return $this->getArtbconfreqdate2();
                break;
            case 60:
                return $this->getArtbconfreqdate3();
                break;
            case 61:
                return $this->getArtbconfreqdate4();
                break;
            case 62:
                return $this->getArtbconfuseweb();
                break;
            case 63:
                return $this->getArtbconfpayhstoredays();
                break;
            case 64:
                return $this->getArtbconfbyclerk();
                break;
            case 65:
                return $this->getArtbcon2ecrwhse();
                break;
            case 66:
                return $this->getArtbconfzerotermdisc();
                break;
            case 67:
                return $this->getArtbconfuseautocidgen();
                break;
            case 68:
                return $this->getArtbconfprefixlen();
                break;
            case 69:
                return $this->getArtbconfparagecredlast();
                break;
            case 70:
                return $this->getArtbconfincludecod();
                break;
            case 71:
                return $this->getArtbconfaddlpricdisc();
                break;
            case 72:
                return $this->getArtbconfapdonoehd();
                break;
            case 73:
                return $this->getArtbconfnbrsp();
                break;
            case 74:
                return $this->getArtbconfforcesplvl();
                break;
            case 75:
                return $this->getArtbconfcustgetopt();
                break;
            case 76:
                return $this->getArtbconfaddicmnt();
                break;
            case 77:
                return $this->getArtbcon2appaddiscitmpdm();
                break;
            case 78:
                return $this->getArtbcon2rfndselectamt();
                break;
            case 79:
                return $this->getArtbcon2rfndglacct();
                break;
            case 80:
                return $this->getArtbcon2rfndapterm();
                break;
            case 81:
                return $this->getArtbcon2rfndarterm();
                break;
            case 82:
                return $this->getArtbcon2cwoterm();
                break;
            case 83:
                return $this->getArtbcon2ccterm();
                break;
            case 84:
                return $this->getArtbcon2ccsave();
                break;
            case 85:
                return $this->getArtbcon2ccbatch();
                break;
            case 86:
                return $this->getArtbcon2ccsavedays();
                break;
            case 87:
                return $this->getArtbcon2aprvdccasdeposit();
                break;
            case 88:
                return $this->getArtbcon2cmqtysign();
                break;
            case 89:
                return $this->getArtbcon2bolline();
                break;
            case 90:
                return $this->getArtbcon2bolcols();
                break;
            case 91:
                return $this->getArtbcon2usesounitwght();
                break;
            case 92:
                return $this->getArtbcon2delzbal();
                break;
            case 93:
                return $this->getArtbconfstopcustchg();
                break;
            case 94:
                return $this->getArtbcon2prospecteditcmm();
                break;
            case 95:
                return $this->getArtbcon2prospectnotestocmm();
                break;
            case 96:
                return $this->getArtbcon2ctrygetdflt();
                break;
            case 97:
                return $this->getArtbconfrptbywhse();
                break;
            case 98:
                return $this->getArtbconfappendpos();
                break;
            case 99:
                return $this->getArtbconfincoasstacct();
                break;
            case 100:
                return $this->getArtbconfincoliabacct();
                break;
            case 101:
                return $this->getArtbcon2incoasstacct2();
                break;
            case 102:
                return $this->getArtbcon2incoliabacct2();
                break;
            case 103:
                return $this->getArtbcon2usesurchg();
                break;
            case 104:
                return $this->getArtbcon2surchgitemid();
                break;
            case 105:
                return $this->getArtbcon2surchgigrupseq();
                break;
            case 106:
                return $this->getArtbcon2surchgsviaseq();
                break;
            case 107:
                return $this->getArtbcon2surchgcstidseq();
                break;
            case 108:
                return $this->getArtbcon2surchgcstpcseq();
                break;
            case 109:
                return $this->getArtbconfzeroinvcline();
                break;
            case 110:
                return $this->getArtbcon2zeroordrship();
                break;
            case 111:
                return $this->getArtbcon2zeroordrmess();
                break;
            case 112:
                return $this->getArtbconfcashacctwhse();
                break;
            case 113:
                return $this->getArtbcon2mtaxfrtflagorcode();
                break;
            case 114:
                return $this->getDateupdtd();
                break;
            case 115:
                return $this->getTimeupdtd();
                break;
            case 116:
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

        if (isset($alreadyDumpedObjects['ConfigAr'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ConfigAr'][$this->hashCode()] = true;
        $keys = ConfigArTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getArtbconfkey(),
            $keys[1] => $this->getArtbconfglifac(),
            $keys[2] => $this->getArtbconfinifac(),
            $keys[3] => $this->getArtbconfpcifac(),
            $keys[4] => $this->getArtbconfccifac(),
            $keys[5] => $this->getArtbconfinvcustgl(),
            $keys[6] => $this->getArtbconffrtacct(),
            $keys[7] => $this->getArtbconfmiscacct(),
            $keys[8] => $this->getArtbconfaracct(),
            $keys[9] => $this->getArtbconfcashacct(),
            $keys[10] => $this->getArtbcon2cccashacct(),
            $keys[11] => $this->getArtbconffincacct(),
            $keys[12] => $this->getArtbconfdiscacct(),
            $keys[13] => $this->getArtbconfrgacogsacct(),
            $keys[14] => $this->getArtbconfcusdacct(),
            $keys[15] => $this->getArtbconfdpstacct(),
            $keys[16] => $this->getArtbconfwriteoffacct(),
            $keys[17] => $this->getArtbcon2presalivtyacct(),
            $keys[18] => $this->getArtbconffincpct(),
            $keys[19] => $this->getArtbconffincdays(),
            $keys[20] => $this->getArtbconffincminchg(),
            $keys[21] => $this->getArtbconffincterm(),
            $keys[22] => $this->getArtbconfover1(),
            $keys[23] => $this->getArtbconfover2(),
            $keys[24] => $this->getArtbconfstmtline(),
            $keys[25] => $this->getArtbconfstmtcols(),
            $keys[26] => $this->getArtbconfstmtnotedef(),
            $keys[27] => $this->getArtbconfstmtnote1(),
            $keys[28] => $this->getArtbconfstmtnote2(),
            $keys[29] => $this->getArtbconfstmtnote3(),
            $keys[30] => $this->getArtbconfinvline(),
            $keys[31] => $this->getArtbconfinvcols(),
            $keys[32] => $this->getArtbconfinvnotedef(),
            $keys[33] => $this->getArtbconfcustline(),
            $keys[34] => $this->getArtbconfcustcols(),
            $keys[35] => $this->getArtbconfinvsort(),
            $keys[36] => $this->getArtbconfinvnc(),
            $keys[37] => $this->getArtbconfstmtsort(),
            $keys[38] => $this->getArtbconfstmt0orless(),
            $keys[39] => $this->getArtbconfspdef(),
            $keys[40] => $this->getArtbconfwhse(),
            $keys[41] => $this->getArtbconftypedef(),
            $keys[42] => $this->getArtbconfsviadef(),
            $keys[43] => $this->getArtbconftermdef(),
            $keys[44] => $this->getArtbconftaxdef(),
            $keys[45] => $this->getArtbconfstmtdef(),
            $keys[46] => $this->getArtbconfallowbo(),
            $keys[47] => $this->getArtbconfallowfc(),
            $keys[48] => $this->getArtbconfusepriccode(),
            $keys[49] => $this->getArtbconfpricdef(),
            $keys[50] => $this->getArtbconfusecommcode(),
            $keys[51] => $this->getArtbconfcommdef(),
            $keys[52] => $this->getArtbconfcustlabl(),
            $keys[53] => $this->getArtbconfcustreq(),
            $keys[54] => $this->getArtbconfcustdef(),
            $keys[55] => $this->getArtbconfshiplabl(),
            $keys[56] => $this->getArtbconfshipreq(),
            $keys[57] => $this->getArtbconfshipdef(),
            $keys[58] => $this->getArtbconfuseidlink(),
            $keys[59] => $this->getArtbconfreqdate2(),
            $keys[60] => $this->getArtbconfreqdate3(),
            $keys[61] => $this->getArtbconfreqdate4(),
            $keys[62] => $this->getArtbconfuseweb(),
            $keys[63] => $this->getArtbconfpayhstoredays(),
            $keys[64] => $this->getArtbconfbyclerk(),
            $keys[65] => $this->getArtbcon2ecrwhse(),
            $keys[66] => $this->getArtbconfzerotermdisc(),
            $keys[67] => $this->getArtbconfuseautocidgen(),
            $keys[68] => $this->getArtbconfprefixlen(),
            $keys[69] => $this->getArtbconfparagecredlast(),
            $keys[70] => $this->getArtbconfincludecod(),
            $keys[71] => $this->getArtbconfaddlpricdisc(),
            $keys[72] => $this->getArtbconfapdonoehd(),
            $keys[73] => $this->getArtbconfnbrsp(),
            $keys[74] => $this->getArtbconfforcesplvl(),
            $keys[75] => $this->getArtbconfcustgetopt(),
            $keys[76] => $this->getArtbconfaddicmnt(),
            $keys[77] => $this->getArtbcon2appaddiscitmpdm(),
            $keys[78] => $this->getArtbcon2rfndselectamt(),
            $keys[79] => $this->getArtbcon2rfndglacct(),
            $keys[80] => $this->getArtbcon2rfndapterm(),
            $keys[81] => $this->getArtbcon2rfndarterm(),
            $keys[82] => $this->getArtbcon2cwoterm(),
            $keys[83] => $this->getArtbcon2ccterm(),
            $keys[84] => $this->getArtbcon2ccsave(),
            $keys[85] => $this->getArtbcon2ccbatch(),
            $keys[86] => $this->getArtbcon2ccsavedays(),
            $keys[87] => $this->getArtbcon2aprvdccasdeposit(),
            $keys[88] => $this->getArtbcon2cmqtysign(),
            $keys[89] => $this->getArtbcon2bolline(),
            $keys[90] => $this->getArtbcon2bolcols(),
            $keys[91] => $this->getArtbcon2usesounitwght(),
            $keys[92] => $this->getArtbcon2delzbal(),
            $keys[93] => $this->getArtbconfstopcustchg(),
            $keys[94] => $this->getArtbcon2prospecteditcmm(),
            $keys[95] => $this->getArtbcon2prospectnotestocmm(),
            $keys[96] => $this->getArtbcon2ctrygetdflt(),
            $keys[97] => $this->getArtbconfrptbywhse(),
            $keys[98] => $this->getArtbconfappendpos(),
            $keys[99] => $this->getArtbconfincoasstacct(),
            $keys[100] => $this->getArtbconfincoliabacct(),
            $keys[101] => $this->getArtbcon2incoasstacct2(),
            $keys[102] => $this->getArtbcon2incoliabacct2(),
            $keys[103] => $this->getArtbcon2usesurchg(),
            $keys[104] => $this->getArtbcon2surchgitemid(),
            $keys[105] => $this->getArtbcon2surchgigrupseq(),
            $keys[106] => $this->getArtbcon2surchgsviaseq(),
            $keys[107] => $this->getArtbcon2surchgcstidseq(),
            $keys[108] => $this->getArtbcon2surchgcstpcseq(),
            $keys[109] => $this->getArtbconfzeroinvcline(),
            $keys[110] => $this->getArtbcon2zeroordrship(),
            $keys[111] => $this->getArtbcon2zeroordrmess(),
            $keys[112] => $this->getArtbconfcashacctwhse(),
            $keys[113] => $this->getArtbcon2mtaxfrtflagorcode(),
            $keys[114] => $this->getDateupdtd(),
            $keys[115] => $this->getTimeupdtd(),
            $keys[116] => $this->getDummy(),
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
     * @return $this|\ConfigAr
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = ConfigArTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\ConfigAr
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setArtbconfkey($value);
                break;
            case 1:
                $this->setArtbconfglifac($value);
                break;
            case 2:
                $this->setArtbconfinifac($value);
                break;
            case 3:
                $this->setArtbconfpcifac($value);
                break;
            case 4:
                $this->setArtbconfccifac($value);
                break;
            case 5:
                $this->setArtbconfinvcustgl($value);
                break;
            case 6:
                $this->setArtbconffrtacct($value);
                break;
            case 7:
                $this->setArtbconfmiscacct($value);
                break;
            case 8:
                $this->setArtbconfaracct($value);
                break;
            case 9:
                $this->setArtbconfcashacct($value);
                break;
            case 10:
                $this->setArtbcon2cccashacct($value);
                break;
            case 11:
                $this->setArtbconffincacct($value);
                break;
            case 12:
                $this->setArtbconfdiscacct($value);
                break;
            case 13:
                $this->setArtbconfrgacogsacct($value);
                break;
            case 14:
                $this->setArtbconfcusdacct($value);
                break;
            case 15:
                $this->setArtbconfdpstacct($value);
                break;
            case 16:
                $this->setArtbconfwriteoffacct($value);
                break;
            case 17:
                $this->setArtbcon2presalivtyacct($value);
                break;
            case 18:
                $this->setArtbconffincpct($value);
                break;
            case 19:
                $this->setArtbconffincdays($value);
                break;
            case 20:
                $this->setArtbconffincminchg($value);
                break;
            case 21:
                $this->setArtbconffincterm($value);
                break;
            case 22:
                $this->setArtbconfover1($value);
                break;
            case 23:
                $this->setArtbconfover2($value);
                break;
            case 24:
                $this->setArtbconfstmtline($value);
                break;
            case 25:
                $this->setArtbconfstmtcols($value);
                break;
            case 26:
                $this->setArtbconfstmtnotedef($value);
                break;
            case 27:
                $this->setArtbconfstmtnote1($value);
                break;
            case 28:
                $this->setArtbconfstmtnote2($value);
                break;
            case 29:
                $this->setArtbconfstmtnote3($value);
                break;
            case 30:
                $this->setArtbconfinvline($value);
                break;
            case 31:
                $this->setArtbconfinvcols($value);
                break;
            case 32:
                $this->setArtbconfinvnotedef($value);
                break;
            case 33:
                $this->setArtbconfcustline($value);
                break;
            case 34:
                $this->setArtbconfcustcols($value);
                break;
            case 35:
                $this->setArtbconfinvsort($value);
                break;
            case 36:
                $this->setArtbconfinvnc($value);
                break;
            case 37:
                $this->setArtbconfstmtsort($value);
                break;
            case 38:
                $this->setArtbconfstmt0orless($value);
                break;
            case 39:
                $this->setArtbconfspdef($value);
                break;
            case 40:
                $this->setArtbconfwhse($value);
                break;
            case 41:
                $this->setArtbconftypedef($value);
                break;
            case 42:
                $this->setArtbconfsviadef($value);
                break;
            case 43:
                $this->setArtbconftermdef($value);
                break;
            case 44:
                $this->setArtbconftaxdef($value);
                break;
            case 45:
                $this->setArtbconfstmtdef($value);
                break;
            case 46:
                $this->setArtbconfallowbo($value);
                break;
            case 47:
                $this->setArtbconfallowfc($value);
                break;
            case 48:
                $this->setArtbconfusepriccode($value);
                break;
            case 49:
                $this->setArtbconfpricdef($value);
                break;
            case 50:
                $this->setArtbconfusecommcode($value);
                break;
            case 51:
                $this->setArtbconfcommdef($value);
                break;
            case 52:
                $this->setArtbconfcustlabl($value);
                break;
            case 53:
                $this->setArtbconfcustreq($value);
                break;
            case 54:
                $this->setArtbconfcustdef($value);
                break;
            case 55:
                $this->setArtbconfshiplabl($value);
                break;
            case 56:
                $this->setArtbconfshipreq($value);
                break;
            case 57:
                $this->setArtbconfshipdef($value);
                break;
            case 58:
                $this->setArtbconfuseidlink($value);
                break;
            case 59:
                $this->setArtbconfreqdate2($value);
                break;
            case 60:
                $this->setArtbconfreqdate3($value);
                break;
            case 61:
                $this->setArtbconfreqdate4($value);
                break;
            case 62:
                $this->setArtbconfuseweb($value);
                break;
            case 63:
                $this->setArtbconfpayhstoredays($value);
                break;
            case 64:
                $this->setArtbconfbyclerk($value);
                break;
            case 65:
                $this->setArtbcon2ecrwhse($value);
                break;
            case 66:
                $this->setArtbconfzerotermdisc($value);
                break;
            case 67:
                $this->setArtbconfuseautocidgen($value);
                break;
            case 68:
                $this->setArtbconfprefixlen($value);
                break;
            case 69:
                $this->setArtbconfparagecredlast($value);
                break;
            case 70:
                $this->setArtbconfincludecod($value);
                break;
            case 71:
                $this->setArtbconfaddlpricdisc($value);
                break;
            case 72:
                $this->setArtbconfapdonoehd($value);
                break;
            case 73:
                $this->setArtbconfnbrsp($value);
                break;
            case 74:
                $this->setArtbconfforcesplvl($value);
                break;
            case 75:
                $this->setArtbconfcustgetopt($value);
                break;
            case 76:
                $this->setArtbconfaddicmnt($value);
                break;
            case 77:
                $this->setArtbcon2appaddiscitmpdm($value);
                break;
            case 78:
                $this->setArtbcon2rfndselectamt($value);
                break;
            case 79:
                $this->setArtbcon2rfndglacct($value);
                break;
            case 80:
                $this->setArtbcon2rfndapterm($value);
                break;
            case 81:
                $this->setArtbcon2rfndarterm($value);
                break;
            case 82:
                $this->setArtbcon2cwoterm($value);
                break;
            case 83:
                $this->setArtbcon2ccterm($value);
                break;
            case 84:
                $this->setArtbcon2ccsave($value);
                break;
            case 85:
                $this->setArtbcon2ccbatch($value);
                break;
            case 86:
                $this->setArtbcon2ccsavedays($value);
                break;
            case 87:
                $this->setArtbcon2aprvdccasdeposit($value);
                break;
            case 88:
                $this->setArtbcon2cmqtysign($value);
                break;
            case 89:
                $this->setArtbcon2bolline($value);
                break;
            case 90:
                $this->setArtbcon2bolcols($value);
                break;
            case 91:
                $this->setArtbcon2usesounitwght($value);
                break;
            case 92:
                $this->setArtbcon2delzbal($value);
                break;
            case 93:
                $this->setArtbconfstopcustchg($value);
                break;
            case 94:
                $this->setArtbcon2prospecteditcmm($value);
                break;
            case 95:
                $this->setArtbcon2prospectnotestocmm($value);
                break;
            case 96:
                $this->setArtbcon2ctrygetdflt($value);
                break;
            case 97:
                $this->setArtbconfrptbywhse($value);
                break;
            case 98:
                $this->setArtbconfappendpos($value);
                break;
            case 99:
                $this->setArtbconfincoasstacct($value);
                break;
            case 100:
                $this->setArtbconfincoliabacct($value);
                break;
            case 101:
                $this->setArtbcon2incoasstacct2($value);
                break;
            case 102:
                $this->setArtbcon2incoliabacct2($value);
                break;
            case 103:
                $this->setArtbcon2usesurchg($value);
                break;
            case 104:
                $this->setArtbcon2surchgitemid($value);
                break;
            case 105:
                $this->setArtbcon2surchgigrupseq($value);
                break;
            case 106:
                $this->setArtbcon2surchgsviaseq($value);
                break;
            case 107:
                $this->setArtbcon2surchgcstidseq($value);
                break;
            case 108:
                $this->setArtbcon2surchgcstpcseq($value);
                break;
            case 109:
                $this->setArtbconfzeroinvcline($value);
                break;
            case 110:
                $this->setArtbcon2zeroordrship($value);
                break;
            case 111:
                $this->setArtbcon2zeroordrmess($value);
                break;
            case 112:
                $this->setArtbconfcashacctwhse($value);
                break;
            case 113:
                $this->setArtbcon2mtaxfrtflagorcode($value);
                break;
            case 114:
                $this->setDateupdtd($value);
                break;
            case 115:
                $this->setTimeupdtd($value);
                break;
            case 116:
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
        $keys = ConfigArTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setArtbconfkey($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setArtbconfglifac($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArtbconfinifac($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setArtbconfpcifac($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setArtbconfccifac($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setArtbconfinvcustgl($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setArtbconffrtacct($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setArtbconfmiscacct($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setArtbconfaracct($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArtbconfcashacct($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setArtbcon2cccashacct($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArtbconffincacct($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setArtbconfdiscacct($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setArtbconfrgacogsacct($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setArtbconfcusdacct($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setArtbconfdpstacct($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setArtbconfwriteoffacct($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setArtbcon2presalivtyacct($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setArtbconffincpct($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setArtbconffincdays($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setArtbconffincminchg($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setArtbconffincterm($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setArtbconfover1($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setArtbconfover2($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setArtbconfstmtline($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setArtbconfstmtcols($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setArtbconfstmtnotedef($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setArtbconfstmtnote1($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setArtbconfstmtnote2($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setArtbconfstmtnote3($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setArtbconfinvline($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setArtbconfinvcols($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setArtbconfinvnotedef($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setArtbconfcustline($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setArtbconfcustcols($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setArtbconfinvsort($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setArtbconfinvnc($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setArtbconfstmtsort($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setArtbconfstmt0orless($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setArtbconfspdef($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setArtbconfwhse($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setArtbconftypedef($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setArtbconfsviadef($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setArtbconftermdef($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setArtbconftaxdef($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setArtbconfstmtdef($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setArtbconfallowbo($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setArtbconfallowfc($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setArtbconfusepriccode($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setArtbconfpricdef($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setArtbconfusecommcode($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setArtbconfcommdef($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setArtbconfcustlabl($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setArtbconfcustreq($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setArtbconfcustdef($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setArtbconfshiplabl($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setArtbconfshipreq($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setArtbconfshipdef($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setArtbconfuseidlink($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setArtbconfreqdate2($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setArtbconfreqdate3($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setArtbconfreqdate4($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setArtbconfuseweb($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setArtbconfpayhstoredays($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setArtbconfbyclerk($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setArtbcon2ecrwhse($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setArtbconfzerotermdisc($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setArtbconfuseautocidgen($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setArtbconfprefixlen($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setArtbconfparagecredlast($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setArtbconfincludecod($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setArtbconfaddlpricdisc($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setArtbconfapdonoehd($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setArtbconfnbrsp($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setArtbconfforcesplvl($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setArtbconfcustgetopt($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setArtbconfaddicmnt($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setArtbcon2appaddiscitmpdm($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setArtbcon2rfndselectamt($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setArtbcon2rfndglacct($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setArtbcon2rfndapterm($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setArtbcon2rfndarterm($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setArtbcon2cwoterm($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setArtbcon2ccterm($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setArtbcon2ccsave($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setArtbcon2ccbatch($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setArtbcon2ccsavedays($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setArtbcon2aprvdccasdeposit($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setArtbcon2cmqtysign($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setArtbcon2bolline($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setArtbcon2bolcols($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setArtbcon2usesounitwght($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setArtbcon2delzbal($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setArtbconfstopcustchg($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setArtbcon2prospecteditcmm($arr[$keys[94]]);
        }
        if (array_key_exists($keys[95], $arr)) {
            $this->setArtbcon2prospectnotestocmm($arr[$keys[95]]);
        }
        if (array_key_exists($keys[96], $arr)) {
            $this->setArtbcon2ctrygetdflt($arr[$keys[96]]);
        }
        if (array_key_exists($keys[97], $arr)) {
            $this->setArtbconfrptbywhse($arr[$keys[97]]);
        }
        if (array_key_exists($keys[98], $arr)) {
            $this->setArtbconfappendpos($arr[$keys[98]]);
        }
        if (array_key_exists($keys[99], $arr)) {
            $this->setArtbconfincoasstacct($arr[$keys[99]]);
        }
        if (array_key_exists($keys[100], $arr)) {
            $this->setArtbconfincoliabacct($arr[$keys[100]]);
        }
        if (array_key_exists($keys[101], $arr)) {
            $this->setArtbcon2incoasstacct2($arr[$keys[101]]);
        }
        if (array_key_exists($keys[102], $arr)) {
            $this->setArtbcon2incoliabacct2($arr[$keys[102]]);
        }
        if (array_key_exists($keys[103], $arr)) {
            $this->setArtbcon2usesurchg($arr[$keys[103]]);
        }
        if (array_key_exists($keys[104], $arr)) {
            $this->setArtbcon2surchgitemid($arr[$keys[104]]);
        }
        if (array_key_exists($keys[105], $arr)) {
            $this->setArtbcon2surchgigrupseq($arr[$keys[105]]);
        }
        if (array_key_exists($keys[106], $arr)) {
            $this->setArtbcon2surchgsviaseq($arr[$keys[106]]);
        }
        if (array_key_exists($keys[107], $arr)) {
            $this->setArtbcon2surchgcstidseq($arr[$keys[107]]);
        }
        if (array_key_exists($keys[108], $arr)) {
            $this->setArtbcon2surchgcstpcseq($arr[$keys[108]]);
        }
        if (array_key_exists($keys[109], $arr)) {
            $this->setArtbconfzeroinvcline($arr[$keys[109]]);
        }
        if (array_key_exists($keys[110], $arr)) {
            $this->setArtbcon2zeroordrship($arr[$keys[110]]);
        }
        if (array_key_exists($keys[111], $arr)) {
            $this->setArtbcon2zeroordrmess($arr[$keys[111]]);
        }
        if (array_key_exists($keys[112], $arr)) {
            $this->setArtbconfcashacctwhse($arr[$keys[112]]);
        }
        if (array_key_exists($keys[113], $arr)) {
            $this->setArtbcon2mtaxfrtflagorcode($arr[$keys[113]]);
        }
        if (array_key_exists($keys[114], $arr)) {
            $this->setDateupdtd($arr[$keys[114]]);
        }
        if (array_key_exists($keys[115], $arr)) {
            $this->setTimeupdtd($arr[$keys[115]]);
        }
        if (array_key_exists($keys[116], $arr)) {
            $this->setDummy($arr[$keys[116]]);
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
     * @return $this|\ConfigAr The current object, for fluid interface
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
        $criteria = new Criteria(ConfigArTableMap::DATABASE_NAME);

        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFKEY)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFKEY, $this->artbconfkey);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFGLIFAC)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFGLIFAC, $this->artbconfglifac);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINIFAC)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFINIFAC, $this->artbconfinifac);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFPCIFAC)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFPCIFAC, $this->artbconfpcifac);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCCIFAC)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFCCIFAC, $this->artbconfccifac);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINVCUSTGL)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFINVCUSTGL, $this->artbconfinvcustgl);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFRTACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFFRTACCT, $this->artbconffrtacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFMISCACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFMISCACCT, $this->artbconfmiscacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFARACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFARACCT, $this->artbconfaracct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCASHACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFCASHACCT, $this->artbconfcashacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CCCASHACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2CCCASHACCT, $this->artbcon2cccashacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFINCACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFFINCACCT, $this->artbconffincacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFDISCACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFDISCACCT, $this->artbconfdiscacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFRGACOGSACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFRGACOGSACCT, $this->artbconfrgacogsacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSDACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFCUSDACCT, $this->artbconfcusdacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFDPSTACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFDPSTACCT, $this->artbconfdpstacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFWRITEOFFACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFWRITEOFFACCT, $this->artbconfwriteoffacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2PRESALIVTYACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2PRESALIVTYACCT, $this->artbcon2presalivtyacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFINCPCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFFINCPCT, $this->artbconffincpct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFINCDAYS)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFFINCDAYS, $this->artbconffincdays);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFINCMINCHG)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFFINCMINCHG, $this->artbconffincminchg);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFINCTERM)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFFINCTERM, $this->artbconffincterm);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFOVER1)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFOVER1, $this->artbconfover1);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFOVER2)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFOVER2, $this->artbconfover2);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTLINE)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSTMTLINE, $this->artbconfstmtline);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTCOLS)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSTMTCOLS, $this->artbconfstmtcols);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTNOTEDEF)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSTMTNOTEDEF, $this->artbconfstmtnotedef);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTNOTE1)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSTMTNOTE1, $this->artbconfstmtnote1);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTNOTE2)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSTMTNOTE2, $this->artbconfstmtnote2);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTNOTE3)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSTMTNOTE3, $this->artbconfstmtnote3);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINVLINE)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFINVLINE, $this->artbconfinvline);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINVCOLS)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFINVCOLS, $this->artbconfinvcols);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINVNOTEDEF)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFINVNOTEDEF, $this->artbconfinvnotedef);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSTLINE)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFCUSTLINE, $this->artbconfcustline);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSTCOLS)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFCUSTCOLS, $this->artbconfcustcols);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINVSORT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFINVSORT, $this->artbconfinvsort);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINVNC)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFINVNC, $this->artbconfinvnc);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTSORT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSTMTSORT, $this->artbconfstmtsort);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMT0ORLESS)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSTMT0ORLESS, $this->artbconfstmt0orless);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSPDEF)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSPDEF, $this->artbconfspdef);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFWHSE)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFWHSE, $this->artbconfwhse);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFTYPEDEF)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFTYPEDEF, $this->artbconftypedef);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSVIADEF)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSVIADEF, $this->artbconfsviadef);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFTERMDEF)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFTERMDEF, $this->artbconftermdef);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFTAXDEF)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFTAXDEF, $this->artbconftaxdef);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTMTDEF)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSTMTDEF, $this->artbconfstmtdef);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFALLOWBO)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFALLOWBO, $this->artbconfallowbo);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFALLOWFC)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFALLOWFC, $this->artbconfallowfc);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFUSEPRICCODE)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFUSEPRICCODE, $this->artbconfusepriccode);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFPRICDEF)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFPRICDEF, $this->artbconfpricdef);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFUSECOMMCODE)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFUSECOMMCODE, $this->artbconfusecommcode);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCOMMDEF)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFCOMMDEF, $this->artbconfcommdef);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSTLABL)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFCUSTLABL, $this->artbconfcustlabl);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSTREQ)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFCUSTREQ, $this->artbconfcustreq);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSTDEF)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFCUSTDEF, $this->artbconfcustdef);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSHIPLABL)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSHIPLABL, $this->artbconfshiplabl);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSHIPREQ)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSHIPREQ, $this->artbconfshipreq);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSHIPDEF)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSHIPDEF, $this->artbconfshipdef);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFUSEIDLINK)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFUSEIDLINK, $this->artbconfuseidlink);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFREQDATE2)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFREQDATE2, $this->artbconfreqdate2);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFREQDATE3)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFREQDATE3, $this->artbconfreqdate3);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFREQDATE4)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFREQDATE4, $this->artbconfreqdate4);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFUSEWEB)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFUSEWEB, $this->artbconfuseweb);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFPAYHSTOREDAYS)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFPAYHSTOREDAYS, $this->artbconfpayhstoredays);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFBYCLERK)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFBYCLERK, $this->artbconfbyclerk);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2ECRWHSE)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2ECRWHSE, $this->artbcon2ecrwhse);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFZEROTERMDISC)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFZEROTERMDISC, $this->artbconfzerotermdisc);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFUSEAUTOCIDGEN)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFUSEAUTOCIDGEN, $this->artbconfuseautocidgen);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFPREFIXLEN)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFPREFIXLEN, $this->artbconfprefixlen);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFPARAGECREDLAST)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFPARAGECREDLAST, $this->artbconfparagecredlast);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINCLUDECOD)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFINCLUDECOD, $this->artbconfincludecod);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFADDLPRICDISC)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFADDLPRICDISC, $this->artbconfaddlpricdisc);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFAPDONOEHD)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFAPDONOEHD, $this->artbconfapdonoehd);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFNBRSP)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFNBRSP, $this->artbconfnbrsp);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFFORCESPLVL)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFFORCESPLVL, $this->artbconfforcesplvl);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCUSTGETOPT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFCUSTGETOPT, $this->artbconfcustgetopt);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFADDICMNT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFADDICMNT, $this->artbconfaddicmnt);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2APPADDISCITMPDM)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2APPADDISCITMPDM, $this->artbcon2appaddiscitmpdm);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2RFNDSELECTAMT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2RFNDSELECTAMT, $this->artbcon2rfndselectamt);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2RFNDGLACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2RFNDGLACCT, $this->artbcon2rfndglacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2RFNDAPTERM)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2RFNDAPTERM, $this->artbcon2rfndapterm);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2RFNDARTERM)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2RFNDARTERM, $this->artbcon2rfndarterm);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CWOTERM)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2CWOTERM, $this->artbcon2cwoterm);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CCTERM)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2CCTERM, $this->artbcon2ccterm);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CCSAVE)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2CCSAVE, $this->artbcon2ccsave);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CCBATCH)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2CCBATCH, $this->artbcon2ccbatch);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CCSAVEDAYS)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2CCSAVEDAYS, $this->artbcon2ccsavedays);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2APRVDCCASDEPOSIT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2APRVDCCASDEPOSIT, $this->artbcon2aprvdccasdeposit);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CMQTYSIGN)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2CMQTYSIGN, $this->artbcon2cmqtysign);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2BOLLINE)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2BOLLINE, $this->artbcon2bolline);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2BOLCOLS)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2BOLCOLS, $this->artbcon2bolcols);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2USESOUNITWGHT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2USESOUNITWGHT, $this->artbcon2usesounitwght);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2DELZBAL)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2DELZBAL, $this->artbcon2delzbal);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFSTOPCUSTCHG)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFSTOPCUSTCHG, $this->artbconfstopcustchg);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2PROSPECTEDITCMM)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2PROSPECTEDITCMM, $this->artbcon2prospecteditcmm);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2PROSPECTNOTESTOCMM)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2PROSPECTNOTESTOCMM, $this->artbcon2prospectnotestocmm);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2CTRYGETDFLT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2CTRYGETDFLT, $this->artbcon2ctrygetdflt);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFRPTBYWHSE)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFRPTBYWHSE, $this->artbconfrptbywhse);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFAPPENDPOS)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFAPPENDPOS, $this->artbconfappendpos);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINCOASSTACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFINCOASSTACCT, $this->artbconfincoasstacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFINCOLIABACCT)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFINCOLIABACCT, $this->artbconfincoliabacct);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2INCOASSTACCT2)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2INCOASSTACCT2, $this->artbcon2incoasstacct2);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2INCOLIABACCT2)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2INCOLIABACCT2, $this->artbcon2incoliabacct2);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2USESURCHG)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2USESURCHG, $this->artbcon2usesurchg);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2SURCHGITEMID)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2SURCHGITEMID, $this->artbcon2surchgitemid);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2SURCHGIGRUPSEQ)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2SURCHGIGRUPSEQ, $this->artbcon2surchgigrupseq);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2SURCHGSVIASEQ)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2SURCHGSVIASEQ, $this->artbcon2surchgsviaseq);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2SURCHGCSTIDSEQ)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2SURCHGCSTIDSEQ, $this->artbcon2surchgcstidseq);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2SURCHGCSTPCSEQ)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2SURCHGCSTPCSEQ, $this->artbcon2surchgcstpcseq);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFZEROINVCLINE)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFZEROINVCLINE, $this->artbconfzeroinvcline);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2ZEROORDRSHIP)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2ZEROORDRSHIP, $this->artbcon2zeroordrship);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2ZEROORDRMESS)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2ZEROORDRMESS, $this->artbcon2zeroordrmess);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCONFCASHACCTWHSE)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCONFCASHACCTWHSE, $this->artbconfcashacctwhse);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_ARTBCON2MTAXFRTFLAGORCODE)) {
            $criteria->add(ConfigArTableMap::COL_ARTBCON2MTAXFRTFLAGORCODE, $this->artbcon2mtaxfrtflagorcode);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_DATEUPDTD)) {
            $criteria->add(ConfigArTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_TIMEUPDTD)) {
            $criteria->add(ConfigArTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(ConfigArTableMap::COL_DUMMY)) {
            $criteria->add(ConfigArTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildConfigArQuery::create();
        $criteria->add(ConfigArTableMap::COL_ARTBCONFKEY, $this->artbconfkey);

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
        $validPk = null !== $this->getArtbconfkey();

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
        return $this->getArtbconfkey();
    }

    /**
     * Generic method to set the primary key (artbconfkey column).
     *
     * @param       int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setArtbconfkey($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getArtbconfkey();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \ConfigAr (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setArtbconfkey($this->getArtbconfkey());
        $copyObj->setArtbconfglifac($this->getArtbconfglifac());
        $copyObj->setArtbconfinifac($this->getArtbconfinifac());
        $copyObj->setArtbconfpcifac($this->getArtbconfpcifac());
        $copyObj->setArtbconfccifac($this->getArtbconfccifac());
        $copyObj->setArtbconfinvcustgl($this->getArtbconfinvcustgl());
        $copyObj->setArtbconffrtacct($this->getArtbconffrtacct());
        $copyObj->setArtbconfmiscacct($this->getArtbconfmiscacct());
        $copyObj->setArtbconfaracct($this->getArtbconfaracct());
        $copyObj->setArtbconfcashacct($this->getArtbconfcashacct());
        $copyObj->setArtbcon2cccashacct($this->getArtbcon2cccashacct());
        $copyObj->setArtbconffincacct($this->getArtbconffincacct());
        $copyObj->setArtbconfdiscacct($this->getArtbconfdiscacct());
        $copyObj->setArtbconfrgacogsacct($this->getArtbconfrgacogsacct());
        $copyObj->setArtbconfcusdacct($this->getArtbconfcusdacct());
        $copyObj->setArtbconfdpstacct($this->getArtbconfdpstacct());
        $copyObj->setArtbconfwriteoffacct($this->getArtbconfwriteoffacct());
        $copyObj->setArtbcon2presalivtyacct($this->getArtbcon2presalivtyacct());
        $copyObj->setArtbconffincpct($this->getArtbconffincpct());
        $copyObj->setArtbconffincdays($this->getArtbconffincdays());
        $copyObj->setArtbconffincminchg($this->getArtbconffincminchg());
        $copyObj->setArtbconffincterm($this->getArtbconffincterm());
        $copyObj->setArtbconfover1($this->getArtbconfover1());
        $copyObj->setArtbconfover2($this->getArtbconfover2());
        $copyObj->setArtbconfstmtline($this->getArtbconfstmtline());
        $copyObj->setArtbconfstmtcols($this->getArtbconfstmtcols());
        $copyObj->setArtbconfstmtnotedef($this->getArtbconfstmtnotedef());
        $copyObj->setArtbconfstmtnote1($this->getArtbconfstmtnote1());
        $copyObj->setArtbconfstmtnote2($this->getArtbconfstmtnote2());
        $copyObj->setArtbconfstmtnote3($this->getArtbconfstmtnote3());
        $copyObj->setArtbconfinvline($this->getArtbconfinvline());
        $copyObj->setArtbconfinvcols($this->getArtbconfinvcols());
        $copyObj->setArtbconfinvnotedef($this->getArtbconfinvnotedef());
        $copyObj->setArtbconfcustline($this->getArtbconfcustline());
        $copyObj->setArtbconfcustcols($this->getArtbconfcustcols());
        $copyObj->setArtbconfinvsort($this->getArtbconfinvsort());
        $copyObj->setArtbconfinvnc($this->getArtbconfinvnc());
        $copyObj->setArtbconfstmtsort($this->getArtbconfstmtsort());
        $copyObj->setArtbconfstmt0orless($this->getArtbconfstmt0orless());
        $copyObj->setArtbconfspdef($this->getArtbconfspdef());
        $copyObj->setArtbconfwhse($this->getArtbconfwhse());
        $copyObj->setArtbconftypedef($this->getArtbconftypedef());
        $copyObj->setArtbconfsviadef($this->getArtbconfsviadef());
        $copyObj->setArtbconftermdef($this->getArtbconftermdef());
        $copyObj->setArtbconftaxdef($this->getArtbconftaxdef());
        $copyObj->setArtbconfstmtdef($this->getArtbconfstmtdef());
        $copyObj->setArtbconfallowbo($this->getArtbconfallowbo());
        $copyObj->setArtbconfallowfc($this->getArtbconfallowfc());
        $copyObj->setArtbconfusepriccode($this->getArtbconfusepriccode());
        $copyObj->setArtbconfpricdef($this->getArtbconfpricdef());
        $copyObj->setArtbconfusecommcode($this->getArtbconfusecommcode());
        $copyObj->setArtbconfcommdef($this->getArtbconfcommdef());
        $copyObj->setArtbconfcustlabl($this->getArtbconfcustlabl());
        $copyObj->setArtbconfcustreq($this->getArtbconfcustreq());
        $copyObj->setArtbconfcustdef($this->getArtbconfcustdef());
        $copyObj->setArtbconfshiplabl($this->getArtbconfshiplabl());
        $copyObj->setArtbconfshipreq($this->getArtbconfshipreq());
        $copyObj->setArtbconfshipdef($this->getArtbconfshipdef());
        $copyObj->setArtbconfuseidlink($this->getArtbconfuseidlink());
        $copyObj->setArtbconfreqdate2($this->getArtbconfreqdate2());
        $copyObj->setArtbconfreqdate3($this->getArtbconfreqdate3());
        $copyObj->setArtbconfreqdate4($this->getArtbconfreqdate4());
        $copyObj->setArtbconfuseweb($this->getArtbconfuseweb());
        $copyObj->setArtbconfpayhstoredays($this->getArtbconfpayhstoredays());
        $copyObj->setArtbconfbyclerk($this->getArtbconfbyclerk());
        $copyObj->setArtbcon2ecrwhse($this->getArtbcon2ecrwhse());
        $copyObj->setArtbconfzerotermdisc($this->getArtbconfzerotermdisc());
        $copyObj->setArtbconfuseautocidgen($this->getArtbconfuseautocidgen());
        $copyObj->setArtbconfprefixlen($this->getArtbconfprefixlen());
        $copyObj->setArtbconfparagecredlast($this->getArtbconfparagecredlast());
        $copyObj->setArtbconfincludecod($this->getArtbconfincludecod());
        $copyObj->setArtbconfaddlpricdisc($this->getArtbconfaddlpricdisc());
        $copyObj->setArtbconfapdonoehd($this->getArtbconfapdonoehd());
        $copyObj->setArtbconfnbrsp($this->getArtbconfnbrsp());
        $copyObj->setArtbconfforcesplvl($this->getArtbconfforcesplvl());
        $copyObj->setArtbconfcustgetopt($this->getArtbconfcustgetopt());
        $copyObj->setArtbconfaddicmnt($this->getArtbconfaddicmnt());
        $copyObj->setArtbcon2appaddiscitmpdm($this->getArtbcon2appaddiscitmpdm());
        $copyObj->setArtbcon2rfndselectamt($this->getArtbcon2rfndselectamt());
        $copyObj->setArtbcon2rfndglacct($this->getArtbcon2rfndglacct());
        $copyObj->setArtbcon2rfndapterm($this->getArtbcon2rfndapterm());
        $copyObj->setArtbcon2rfndarterm($this->getArtbcon2rfndarterm());
        $copyObj->setArtbcon2cwoterm($this->getArtbcon2cwoterm());
        $copyObj->setArtbcon2ccterm($this->getArtbcon2ccterm());
        $copyObj->setArtbcon2ccsave($this->getArtbcon2ccsave());
        $copyObj->setArtbcon2ccbatch($this->getArtbcon2ccbatch());
        $copyObj->setArtbcon2ccsavedays($this->getArtbcon2ccsavedays());
        $copyObj->setArtbcon2aprvdccasdeposit($this->getArtbcon2aprvdccasdeposit());
        $copyObj->setArtbcon2cmqtysign($this->getArtbcon2cmqtysign());
        $copyObj->setArtbcon2bolline($this->getArtbcon2bolline());
        $copyObj->setArtbcon2bolcols($this->getArtbcon2bolcols());
        $copyObj->setArtbcon2usesounitwght($this->getArtbcon2usesounitwght());
        $copyObj->setArtbcon2delzbal($this->getArtbcon2delzbal());
        $copyObj->setArtbconfstopcustchg($this->getArtbconfstopcustchg());
        $copyObj->setArtbcon2prospecteditcmm($this->getArtbcon2prospecteditcmm());
        $copyObj->setArtbcon2prospectnotestocmm($this->getArtbcon2prospectnotestocmm());
        $copyObj->setArtbcon2ctrygetdflt($this->getArtbcon2ctrygetdflt());
        $copyObj->setArtbconfrptbywhse($this->getArtbconfrptbywhse());
        $copyObj->setArtbconfappendpos($this->getArtbconfappendpos());
        $copyObj->setArtbconfincoasstacct($this->getArtbconfincoasstacct());
        $copyObj->setArtbconfincoliabacct($this->getArtbconfincoliabacct());
        $copyObj->setArtbcon2incoasstacct2($this->getArtbcon2incoasstacct2());
        $copyObj->setArtbcon2incoliabacct2($this->getArtbcon2incoliabacct2());
        $copyObj->setArtbcon2usesurchg($this->getArtbcon2usesurchg());
        $copyObj->setArtbcon2surchgitemid($this->getArtbcon2surchgitemid());
        $copyObj->setArtbcon2surchgigrupseq($this->getArtbcon2surchgigrupseq());
        $copyObj->setArtbcon2surchgsviaseq($this->getArtbcon2surchgsviaseq());
        $copyObj->setArtbcon2surchgcstidseq($this->getArtbcon2surchgcstidseq());
        $copyObj->setArtbcon2surchgcstpcseq($this->getArtbcon2surchgcstpcseq());
        $copyObj->setArtbconfzeroinvcline($this->getArtbconfzeroinvcline());
        $copyObj->setArtbcon2zeroordrship($this->getArtbcon2zeroordrship());
        $copyObj->setArtbcon2zeroordrmess($this->getArtbcon2zeroordrmess());
        $copyObj->setArtbconfcashacctwhse($this->getArtbconfcashacctwhse());
        $copyObj->setArtbcon2mtaxfrtflagorcode($this->getArtbcon2mtaxfrtflagorcode());
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
     * @return \ConfigAr Clone of current object.
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
        $this->artbconfkey = null;
        $this->artbconfglifac = null;
        $this->artbconfinifac = null;
        $this->artbconfpcifac = null;
        $this->artbconfccifac = null;
        $this->artbconfinvcustgl = null;
        $this->artbconffrtacct = null;
        $this->artbconfmiscacct = null;
        $this->artbconfaracct = null;
        $this->artbconfcashacct = null;
        $this->artbcon2cccashacct = null;
        $this->artbconffincacct = null;
        $this->artbconfdiscacct = null;
        $this->artbconfrgacogsacct = null;
        $this->artbconfcusdacct = null;
        $this->artbconfdpstacct = null;
        $this->artbconfwriteoffacct = null;
        $this->artbcon2presalivtyacct = null;
        $this->artbconffincpct = null;
        $this->artbconffincdays = null;
        $this->artbconffincminchg = null;
        $this->artbconffincterm = null;
        $this->artbconfover1 = null;
        $this->artbconfover2 = null;
        $this->artbconfstmtline = null;
        $this->artbconfstmtcols = null;
        $this->artbconfstmtnotedef = null;
        $this->artbconfstmtnote1 = null;
        $this->artbconfstmtnote2 = null;
        $this->artbconfstmtnote3 = null;
        $this->artbconfinvline = null;
        $this->artbconfinvcols = null;
        $this->artbconfinvnotedef = null;
        $this->artbconfcustline = null;
        $this->artbconfcustcols = null;
        $this->artbconfinvsort = null;
        $this->artbconfinvnc = null;
        $this->artbconfstmtsort = null;
        $this->artbconfstmt0orless = null;
        $this->artbconfspdef = null;
        $this->artbconfwhse = null;
        $this->artbconftypedef = null;
        $this->artbconfsviadef = null;
        $this->artbconftermdef = null;
        $this->artbconftaxdef = null;
        $this->artbconfstmtdef = null;
        $this->artbconfallowbo = null;
        $this->artbconfallowfc = null;
        $this->artbconfusepriccode = null;
        $this->artbconfpricdef = null;
        $this->artbconfusecommcode = null;
        $this->artbconfcommdef = null;
        $this->artbconfcustlabl = null;
        $this->artbconfcustreq = null;
        $this->artbconfcustdef = null;
        $this->artbconfshiplabl = null;
        $this->artbconfshipreq = null;
        $this->artbconfshipdef = null;
        $this->artbconfuseidlink = null;
        $this->artbconfreqdate2 = null;
        $this->artbconfreqdate3 = null;
        $this->artbconfreqdate4 = null;
        $this->artbconfuseweb = null;
        $this->artbconfpayhstoredays = null;
        $this->artbconfbyclerk = null;
        $this->artbcon2ecrwhse = null;
        $this->artbconfzerotermdisc = null;
        $this->artbconfuseautocidgen = null;
        $this->artbconfprefixlen = null;
        $this->artbconfparagecredlast = null;
        $this->artbconfincludecod = null;
        $this->artbconfaddlpricdisc = null;
        $this->artbconfapdonoehd = null;
        $this->artbconfnbrsp = null;
        $this->artbconfforcesplvl = null;
        $this->artbconfcustgetopt = null;
        $this->artbconfaddicmnt = null;
        $this->artbcon2appaddiscitmpdm = null;
        $this->artbcon2rfndselectamt = null;
        $this->artbcon2rfndglacct = null;
        $this->artbcon2rfndapterm = null;
        $this->artbcon2rfndarterm = null;
        $this->artbcon2cwoterm = null;
        $this->artbcon2ccterm = null;
        $this->artbcon2ccsave = null;
        $this->artbcon2ccbatch = null;
        $this->artbcon2ccsavedays = null;
        $this->artbcon2aprvdccasdeposit = null;
        $this->artbcon2cmqtysign = null;
        $this->artbcon2bolline = null;
        $this->artbcon2bolcols = null;
        $this->artbcon2usesounitwght = null;
        $this->artbcon2delzbal = null;
        $this->artbconfstopcustchg = null;
        $this->artbcon2prospecteditcmm = null;
        $this->artbcon2prospectnotestocmm = null;
        $this->artbcon2ctrygetdflt = null;
        $this->artbconfrptbywhse = null;
        $this->artbconfappendpos = null;
        $this->artbconfincoasstacct = null;
        $this->artbconfincoliabacct = null;
        $this->artbcon2incoasstacct2 = null;
        $this->artbcon2incoliabacct2 = null;
        $this->artbcon2usesurchg = null;
        $this->artbcon2surchgitemid = null;
        $this->artbcon2surchgigrupseq = null;
        $this->artbcon2surchgsviaseq = null;
        $this->artbcon2surchgcstidseq = null;
        $this->artbcon2surchgcstpcseq = null;
        $this->artbconfzeroinvcline = null;
        $this->artbcon2zeroordrship = null;
        $this->artbcon2zeroordrmess = null;
        $this->artbconfcashacctwhse = null;
        $this->artbcon2mtaxfrtflagorcode = null;
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
        return (string) $this->exportTo(ConfigArTableMap::DEFAULT_STRING_FORMAT);
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
