<?php

namespace Base;

use \DplusUser as ChildDplusUser;
use \DplusUserQuery as ChildDplusUserQuery;
use \InvLotTag as ChildInvLotTag;
use \InvLotTagQuery as ChildInvLotTagQuery;
use \SysLoginGroup as ChildSysLoginGroup;
use \SysLoginGroupQuery as ChildSysLoginGroupQuery;
use \SysLoginRole as ChildSysLoginRole;
use \SysLoginRoleQuery as ChildSysLoginRoleQuery;
use \UserLastPrintJob as ChildUserLastPrintJob;
use \UserLastPrintJobQuery as ChildUserLastPrintJobQuery;
use \UserPermissionsItm as ChildUserPermissionsItm;
use \UserPermissionsItmQuery as ChildUserPermissionsItmQuery;
use \Exception;
use \PDO;
use Map\DplusUserTableMap;
use Map\InvLotTagTableMap;
use Map\UserLastPrintJobTableMap;
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
 * Base class that represents a row from the 'sys_login' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class DplusUser implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\DplusUserTableMap';


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
     * The value for the usrcid field.
     *
     * @var        string
     */
    protected $usrcid;

    /**
     * The value for the usrcloginname field.
     *
     * @var        string
     */
    protected $usrcloginname;

    /**
     * The value for the intbwhse field.
     *
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the usrcdefcmpy field.
     *
     * @var        string
     */
    protected $usrcdefcmpy;

    /**
     * The value for the usrcadmin field.
     *
     * @var        string
     */
    protected $usrcadmin;

    /**
     * The value for the usrcfront field.
     *
     * @var        string
     */
    protected $usrcfront;

    /**
     * The value for the usrccitydesk field.
     *
     * @var        string
     */
    protected $usrccitydesk;

    /**
     * The value for the usrcreptadmin field.
     *
     * @var        string
     */
    protected $usrcreptadmin;

    /**
     * The value for the usrcprinter field.
     *
     * @var        string
     */
    protected $usrcprinter;

    /**
     * The value for the usrcpitch field.
     *
     * @var        string
     */
    protected $usrcpitch;

    /**
     * The value for the usrcbrowseprinter field.
     *
     * @var        string
     */
    protected $usrcbrowseprinter;

    /**
     * The value for the usrcwhsedisplayseq field.
     *
     * @var        string
     */
    protected $usrcwhsedisplayseq;

    /**
     * The value for the usrcactiveitemsonly field.
     *
     * @var        string
     */
    protected $usrcactiveitemsonly;

    /**
     * The value for the usrcrestrictaccess field.
     *
     * @var        string
     */
    protected $usrcrestrictaccess;

    /**
     * The value for the usrclogingroup field.
     *
     * @var        string
     */
    protected $usrclogingroup;

    /**
     * The value for the usrcloginrole field.
     *
     * @var        string
     */
    protected $usrcloginrole;

    /**
     * The value for the usrcallowprocremoval field.
     *
     * @var        string
     */
    protected $usrcallowprocremoval;

    /**
     * The value for the usrcacallowwarredit field.
     *
     * @var        string
     */
    protected $usrcacallowwarredit;

    /**
     * The value for the usrcisprodmgr field.
     *
     * @var        string
     */
    protected $usrcisprodmgr;

    /**
     * The value for the usrclmallowcrosswhse field.
     *
     * @var        string
     */
    protected $usrclmallowcrosswhse;

    /**
     * The value for the usrcpswd field.
     *
     * @var        string
     */
    protected $usrcpswd;

    /**
     * The value for the usrcfaxname field.
     *
     * @var        string
     */
    protected $usrcfaxname;

    /**
     * The value for the usrcfaxcompany field.
     *
     * @var        string
     */
    protected $usrcfaxcompany;

    /**
     * The value for the usrcfaxarea field.
     *
     * @var        string
     */
    protected $usrcfaxarea;

    /**
     * The value for the usrcfaxfrst3 field.
     *
     * @var        string
     */
    protected $usrcfaxfrst3;

    /**
     * The value for the usrcfaxlast4 field.
     *
     * @var        string
     */
    protected $usrcfaxlast4;

    /**
     * The value for the usrcphonearea field.
     *
     * @var        string
     */
    protected $usrcphonearea;

    /**
     * The value for the usrcphonefrst3 field.
     *
     * @var        string
     */
    protected $usrcphonefrst3;

    /**
     * The value for the usrcphonelast4 field.
     *
     * @var        string
     */
    protected $usrcphonelast4;

    /**
     * The value for the usrcphoneext field.
     *
     * @var        string
     */
    protected $usrcphoneext;

    /**
     * The value for the usrcsendtime field.
     *
     * @var        string
     */
    protected $usrcsendtime;

    /**
     * The value for the usrccoversheet field.
     *
     * @var        string
     */
    protected $usrccoversheet;

    /**
     * The value for the usrcsubject field.
     *
     * @var        string
     */
    protected $usrcsubject;

    /**
     * The value for the usrcnotifys field.
     *
     * @var        string
     */
    protected $usrcnotifys;

    /**
     * The value for the usrcnotifyf field.
     *
     * @var        string
     */
    protected $usrcnotifyf;

    /**
     * The value for the usrcemailaddr field.
     *
     * @var        string
     */
    protected $usrcemailaddr;

    /**
     * The value for the usrcscalewhseid field.
     *
     * @var        string
     */
    protected $usrcscalewhseid;

    /**
     * The value for the usrcscaledevnbr field.
     *
     * @var        string
     */
    protected $usrcscaledevnbr;

    /**
     * The value for the usrcccscanwhseid field.
     *
     * @var        string
     */
    protected $usrcccscanwhseid;

    /**
     * The value for the usrcccscandevnbr field.
     *
     * @var        string
     */
    protected $usrcccscandevnbr;

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
     * @var        ChildSysLoginGroup
     */
    protected $aSysLoginGroup;

    /**
     * @var        ChildSysLoginRole
     */
    protected $aSysLoginRole;

    /**
     * @var        ObjectCollection|ChildInvLotTag[] Collection to store aggregation of ChildInvLotTag objects.
     */
    protected $collInvLotTags;
    protected $collInvLotTagsPartial;

    /**
     * @var        ChildUserPermissionsItm one-to-one related ChildUserPermissionsItm object
     */
    protected $singleUserPermissionsItm;

    /**
     * @var        ObjectCollection|ChildUserLastPrintJob[] Collection to store aggregation of ChildUserLastPrintJob objects.
     */
    protected $collUserLastPrintJobs;
    protected $collUserLastPrintJobsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildInvLotTag[]
     */
    protected $invLotTagsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildUserLastPrintJob[]
     */
    protected $userLastPrintJobsScheduledForDeletion = null;

    /**
     * Initializes internal state of Base\DplusUser object.
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
     * Compares this with another <code>DplusUser</code> instance.  If
     * <code>obj</code> is an instance of <code>DplusUser</code>, delegates to
     * <code>equals(DplusUser)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|DplusUser The current object, for fluid interface
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
     * Get the [usrcid] column value.
     *
     * @return string
     */
    public function getUsrcid()
    {
        return $this->usrcid;
    }

    /**
     * Get the [usrcloginname] column value.
     *
     * @return string
     */
    public function getUsrcloginname()
    {
        return $this->usrcloginname;
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
     * Get the [usrcdefcmpy] column value.
     *
     * @return string
     */
    public function getUsrcdefcmpy()
    {
        return $this->usrcdefcmpy;
    }

    /**
     * Get the [usrcadmin] column value.
     *
     * @return string
     */
    public function getUsrcadmin()
    {
        return $this->usrcadmin;
    }

    /**
     * Get the [usrcfront] column value.
     *
     * @return string
     */
    public function getUsrcfront()
    {
        return $this->usrcfront;
    }

    /**
     * Get the [usrccitydesk] column value.
     *
     * @return string
     */
    public function getUsrccitydesk()
    {
        return $this->usrccitydesk;
    }

    /**
     * Get the [usrcreptadmin] column value.
     *
     * @return string
     */
    public function getUsrcreptadmin()
    {
        return $this->usrcreptadmin;
    }

    /**
     * Get the [usrcprinter] column value.
     *
     * @return string
     */
    public function getUsrcprinter()
    {
        return $this->usrcprinter;
    }

    /**
     * Get the [usrcpitch] column value.
     *
     * @return string
     */
    public function getUsrcpitch()
    {
        return $this->usrcpitch;
    }

    /**
     * Get the [usrcbrowseprinter] column value.
     *
     * @return string
     */
    public function getUsrcbrowseprinter()
    {
        return $this->usrcbrowseprinter;
    }

    /**
     * Get the [usrcwhsedisplayseq] column value.
     *
     * @return string
     */
    public function getUsrcwhsedisplayseq()
    {
        return $this->usrcwhsedisplayseq;
    }

    /**
     * Get the [usrcactiveitemsonly] column value.
     *
     * @return string
     */
    public function getUsrcactiveitemsonly()
    {
        return $this->usrcactiveitemsonly;
    }

    /**
     * Get the [usrcrestrictaccess] column value.
     *
     * @return string
     */
    public function getUsrcrestrictaccess()
    {
        return $this->usrcrestrictaccess;
    }

    /**
     * Get the [usrclogingroup] column value.
     *
     * @return string
     */
    public function getUsrclogingroup()
    {
        return $this->usrclogingroup;
    }

    /**
     * Get the [usrcloginrole] column value.
     *
     * @return string
     */
    public function getUsrcloginrole()
    {
        return $this->usrcloginrole;
    }

    /**
     * Get the [usrcallowprocremoval] column value.
     *
     * @return string
     */
    public function getUsrcallowprocremoval()
    {
        return $this->usrcallowprocremoval;
    }

    /**
     * Get the [usrcacallowwarredit] column value.
     *
     * @return string
     */
    public function getUsrcacallowwarredit()
    {
        return $this->usrcacallowwarredit;
    }

    /**
     * Get the [usrcisprodmgr] column value.
     *
     * @return string
     */
    public function getUsrcisprodmgr()
    {
        return $this->usrcisprodmgr;
    }

    /**
     * Get the [usrclmallowcrosswhse] column value.
     *
     * @return string
     */
    public function getUsrclmallowcrosswhse()
    {
        return $this->usrclmallowcrosswhse;
    }

    /**
     * Get the [usrcpswd] column value.
     *
     * @return string
     */
    public function getUsrcpswd()
    {
        return $this->usrcpswd;
    }

    /**
     * Get the [usrcfaxname] column value.
     *
     * @return string
     */
    public function getUsrcfaxname()
    {
        return $this->usrcfaxname;
    }

    /**
     * Get the [usrcfaxcompany] column value.
     *
     * @return string
     */
    public function getUsrcfaxcompany()
    {
        return $this->usrcfaxcompany;
    }

    /**
     * Get the [usrcfaxarea] column value.
     *
     * @return string
     */
    public function getUsrcfaxarea()
    {
        return $this->usrcfaxarea;
    }

    /**
     * Get the [usrcfaxfrst3] column value.
     *
     * @return string
     */
    public function getUsrcfaxfrst3()
    {
        return $this->usrcfaxfrst3;
    }

    /**
     * Get the [usrcfaxlast4] column value.
     *
     * @return string
     */
    public function getUsrcfaxlast4()
    {
        return $this->usrcfaxlast4;
    }

    /**
     * Get the [usrcphonearea] column value.
     *
     * @return string
     */
    public function getUsrcphonearea()
    {
        return $this->usrcphonearea;
    }

    /**
     * Get the [usrcphonefrst3] column value.
     *
     * @return string
     */
    public function getUsrcphonefrst3()
    {
        return $this->usrcphonefrst3;
    }

    /**
     * Get the [usrcphonelast4] column value.
     *
     * @return string
     */
    public function getUsrcphonelast4()
    {
        return $this->usrcphonelast4;
    }

    /**
     * Get the [usrcphoneext] column value.
     *
     * @return string
     */
    public function getUsrcphoneext()
    {
        return $this->usrcphoneext;
    }

    /**
     * Get the [usrcsendtime] column value.
     *
     * @return string
     */
    public function getUsrcsendtime()
    {
        return $this->usrcsendtime;
    }

    /**
     * Get the [usrccoversheet] column value.
     *
     * @return string
     */
    public function getUsrccoversheet()
    {
        return $this->usrccoversheet;
    }

    /**
     * Get the [usrcsubject] column value.
     *
     * @return string
     */
    public function getUsrcsubject()
    {
        return $this->usrcsubject;
    }

    /**
     * Get the [usrcnotifys] column value.
     *
     * @return string
     */
    public function getUsrcnotifys()
    {
        return $this->usrcnotifys;
    }

    /**
     * Get the [usrcnotifyf] column value.
     *
     * @return string
     */
    public function getUsrcnotifyf()
    {
        return $this->usrcnotifyf;
    }

    /**
     * Get the [usrcemailaddr] column value.
     *
     * @return string
     */
    public function getUsrcemailaddr()
    {
        return $this->usrcemailaddr;
    }

    /**
     * Get the [usrcscalewhseid] column value.
     *
     * @return string
     */
    public function getUsrcscalewhseid()
    {
        return $this->usrcscalewhseid;
    }

    /**
     * Get the [usrcscaledevnbr] column value.
     *
     * @return string
     */
    public function getUsrcscaledevnbr()
    {
        return $this->usrcscaledevnbr;
    }

    /**
     * Get the [usrcccscanwhseid] column value.
     *
     * @return string
     */
    public function getUsrcccscanwhseid()
    {
        return $this->usrcccscanwhseid;
    }

    /**
     * Get the [usrcccscandevnbr] column value.
     *
     * @return string
     */
    public function getUsrcccscandevnbr()
    {
        return $this->usrcccscandevnbr;
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
     * Set the value of [usrcid] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcid !== $v) {
            $this->usrcid = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCID] = true;
        }

        return $this;
    } // setUsrcid()

    /**
     * Set the value of [usrcloginname] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcloginname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcloginname !== $v) {
            $this->usrcloginname = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCLOGINNAME] = true;
        }

        return $this;
    } // setUsrcloginname()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [usrcdefcmpy] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcdefcmpy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcdefcmpy !== $v) {
            $this->usrcdefcmpy = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCDEFCMPY] = true;
        }

        return $this;
    } // setUsrcdefcmpy()

    /**
     * Set the value of [usrcadmin] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcadmin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcadmin !== $v) {
            $this->usrcadmin = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCADMIN] = true;
        }

        return $this;
    } // setUsrcadmin()

    /**
     * Set the value of [usrcfront] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcfront($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcfront !== $v) {
            $this->usrcfront = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCFRONT] = true;
        }

        return $this;
    } // setUsrcfront()

    /**
     * Set the value of [usrccitydesk] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrccitydesk($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrccitydesk !== $v) {
            $this->usrccitydesk = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCCITYDESK] = true;
        }

        return $this;
    } // setUsrccitydesk()

    /**
     * Set the value of [usrcreptadmin] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcreptadmin($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcreptadmin !== $v) {
            $this->usrcreptadmin = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCREPTADMIN] = true;
        }

        return $this;
    } // setUsrcreptadmin()

    /**
     * Set the value of [usrcprinter] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcprinter($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcprinter !== $v) {
            $this->usrcprinter = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCPRINTER] = true;
        }

        return $this;
    } // setUsrcprinter()

    /**
     * Set the value of [usrcpitch] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcpitch($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcpitch !== $v) {
            $this->usrcpitch = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCPITCH] = true;
        }

        return $this;
    } // setUsrcpitch()

    /**
     * Set the value of [usrcbrowseprinter] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcbrowseprinter($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcbrowseprinter !== $v) {
            $this->usrcbrowseprinter = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCBROWSEPRINTER] = true;
        }

        return $this;
    } // setUsrcbrowseprinter()

    /**
     * Set the value of [usrcwhsedisplayseq] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcwhsedisplayseq($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcwhsedisplayseq !== $v) {
            $this->usrcwhsedisplayseq = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCWHSEDISPLAYSEQ] = true;
        }

        return $this;
    } // setUsrcwhsedisplayseq()

    /**
     * Set the value of [usrcactiveitemsonly] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcactiveitemsonly($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcactiveitemsonly !== $v) {
            $this->usrcactiveitemsonly = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCACTIVEITEMSONLY] = true;
        }

        return $this;
    } // setUsrcactiveitemsonly()

    /**
     * Set the value of [usrcrestrictaccess] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcrestrictaccess($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcrestrictaccess !== $v) {
            $this->usrcrestrictaccess = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCRESTRICTACCESS] = true;
        }

        return $this;
    } // setUsrcrestrictaccess()

    /**
     * Set the value of [usrclogingroup] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrclogingroup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrclogingroup !== $v) {
            $this->usrclogingroup = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCLOGINGROUP] = true;
        }

        if ($this->aSysLoginGroup !== null && $this->aSysLoginGroup->getQtbllgrpcode() !== $v) {
            $this->aSysLoginGroup = null;
        }

        return $this;
    } // setUsrclogingroup()

    /**
     * Set the value of [usrcloginrole] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcloginrole($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcloginrole !== $v) {
            $this->usrcloginrole = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCLOGINROLE] = true;
        }

        if ($this->aSysLoginRole !== null && $this->aSysLoginRole->getQtblrolecode() !== $v) {
            $this->aSysLoginRole = null;
        }

        return $this;
    } // setUsrcloginrole()

    /**
     * Set the value of [usrcallowprocremoval] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcallowprocremoval($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcallowprocremoval !== $v) {
            $this->usrcallowprocremoval = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCALLOWPROCREMOVAL] = true;
        }

        return $this;
    } // setUsrcallowprocremoval()

    /**
     * Set the value of [usrcacallowwarredit] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcacallowwarredit($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcacallowwarredit !== $v) {
            $this->usrcacallowwarredit = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCACALLOWWARREDIT] = true;
        }

        return $this;
    } // setUsrcacallowwarredit()

    /**
     * Set the value of [usrcisprodmgr] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcisprodmgr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcisprodmgr !== $v) {
            $this->usrcisprodmgr = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCISPRODMGR] = true;
        }

        return $this;
    } // setUsrcisprodmgr()

    /**
     * Set the value of [usrclmallowcrosswhse] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrclmallowcrosswhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrclmallowcrosswhse !== $v) {
            $this->usrclmallowcrosswhse = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCLMALLOWCROSSWHSE] = true;
        }

        return $this;
    } // setUsrclmallowcrosswhse()

    /**
     * Set the value of [usrcpswd] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcpswd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcpswd !== $v) {
            $this->usrcpswd = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCPSWD] = true;
        }

        return $this;
    } // setUsrcpswd()

    /**
     * Set the value of [usrcfaxname] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcfaxname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcfaxname !== $v) {
            $this->usrcfaxname = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCFAXNAME] = true;
        }

        return $this;
    } // setUsrcfaxname()

    /**
     * Set the value of [usrcfaxcompany] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcfaxcompany($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcfaxcompany !== $v) {
            $this->usrcfaxcompany = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCFAXCOMPANY] = true;
        }

        return $this;
    } // setUsrcfaxcompany()

    /**
     * Set the value of [usrcfaxarea] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcfaxarea($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcfaxarea !== $v) {
            $this->usrcfaxarea = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCFAXAREA] = true;
        }

        return $this;
    } // setUsrcfaxarea()

    /**
     * Set the value of [usrcfaxfrst3] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcfaxfrst3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcfaxfrst3 !== $v) {
            $this->usrcfaxfrst3 = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCFAXFRST3] = true;
        }

        return $this;
    } // setUsrcfaxfrst3()

    /**
     * Set the value of [usrcfaxlast4] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcfaxlast4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcfaxlast4 !== $v) {
            $this->usrcfaxlast4 = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCFAXLAST4] = true;
        }

        return $this;
    } // setUsrcfaxlast4()

    /**
     * Set the value of [usrcphonearea] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcphonearea($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcphonearea !== $v) {
            $this->usrcphonearea = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCPHONEAREA] = true;
        }

        return $this;
    } // setUsrcphonearea()

    /**
     * Set the value of [usrcphonefrst3] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcphonefrst3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcphonefrst3 !== $v) {
            $this->usrcphonefrst3 = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCPHONEFRST3] = true;
        }

        return $this;
    } // setUsrcphonefrst3()

    /**
     * Set the value of [usrcphonelast4] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcphonelast4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcphonelast4 !== $v) {
            $this->usrcphonelast4 = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCPHONELAST4] = true;
        }

        return $this;
    } // setUsrcphonelast4()

    /**
     * Set the value of [usrcphoneext] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcphoneext($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcphoneext !== $v) {
            $this->usrcphoneext = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCPHONEEXT] = true;
        }

        return $this;
    } // setUsrcphoneext()

    /**
     * Set the value of [usrcsendtime] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcsendtime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcsendtime !== $v) {
            $this->usrcsendtime = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCSENDTIME] = true;
        }

        return $this;
    } // setUsrcsendtime()

    /**
     * Set the value of [usrccoversheet] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrccoversheet($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrccoversheet !== $v) {
            $this->usrccoversheet = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCCOVERSHEET] = true;
        }

        return $this;
    } // setUsrccoversheet()

    /**
     * Set the value of [usrcsubject] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcsubject($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcsubject !== $v) {
            $this->usrcsubject = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCSUBJECT] = true;
        }

        return $this;
    } // setUsrcsubject()

    /**
     * Set the value of [usrcnotifys] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcnotifys($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcnotifys !== $v) {
            $this->usrcnotifys = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCNOTIFYS] = true;
        }

        return $this;
    } // setUsrcnotifys()

    /**
     * Set the value of [usrcnotifyf] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcnotifyf($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcnotifyf !== $v) {
            $this->usrcnotifyf = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCNOTIFYF] = true;
        }

        return $this;
    } // setUsrcnotifyf()

    /**
     * Set the value of [usrcemailaddr] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcemailaddr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcemailaddr !== $v) {
            $this->usrcemailaddr = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCEMAILADDR] = true;
        }

        return $this;
    } // setUsrcemailaddr()

    /**
     * Set the value of [usrcscalewhseid] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcscalewhseid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcscalewhseid !== $v) {
            $this->usrcscalewhseid = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCSCALEWHSEID] = true;
        }

        return $this;
    } // setUsrcscalewhseid()

    /**
     * Set the value of [usrcscaledevnbr] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcscaledevnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcscaledevnbr !== $v) {
            $this->usrcscaledevnbr = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCSCALEDEVNBR] = true;
        }

        return $this;
    } // setUsrcscaledevnbr()

    /**
     * Set the value of [usrcccscanwhseid] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcccscanwhseid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcccscanwhseid !== $v) {
            $this->usrcccscanwhseid = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCCCSCANWHSEID] = true;
        }

        return $this;
    } // setUsrcccscanwhseid()

    /**
     * Set the value of [usrcccscandevnbr] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setUsrcccscandevnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->usrcccscandevnbr !== $v) {
            $this->usrcccscandevnbr = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_USRCCCSCANDEVNBR] = true;
        }

        return $this;
    } // setUsrcccscandevnbr()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[DplusUserTableMap::COL_DUMMY] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : DplusUserTableMap::translateFieldName('Usrcid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : DplusUserTableMap::translateFieldName('Usrcloginname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcloginname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : DplusUserTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : DplusUserTableMap::translateFieldName('Usrcdefcmpy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcdefcmpy = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : DplusUserTableMap::translateFieldName('Usrcadmin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcadmin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : DplusUserTableMap::translateFieldName('Usrcfront', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcfront = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : DplusUserTableMap::translateFieldName('Usrccitydesk', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrccitydesk = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : DplusUserTableMap::translateFieldName('Usrcreptadmin', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcreptadmin = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : DplusUserTableMap::translateFieldName('Usrcprinter', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcprinter = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : DplusUserTableMap::translateFieldName('Usrcpitch', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcpitch = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : DplusUserTableMap::translateFieldName('Usrcbrowseprinter', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcbrowseprinter = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : DplusUserTableMap::translateFieldName('Usrcwhsedisplayseq', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcwhsedisplayseq = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : DplusUserTableMap::translateFieldName('Usrcactiveitemsonly', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcactiveitemsonly = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : DplusUserTableMap::translateFieldName('Usrcrestrictaccess', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcrestrictaccess = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : DplusUserTableMap::translateFieldName('Usrclogingroup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrclogingroup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : DplusUserTableMap::translateFieldName('Usrcloginrole', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcloginrole = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : DplusUserTableMap::translateFieldName('Usrcallowprocremoval', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcallowprocremoval = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : DplusUserTableMap::translateFieldName('Usrcacallowwarredit', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcacallowwarredit = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : DplusUserTableMap::translateFieldName('Usrcisprodmgr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcisprodmgr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : DplusUserTableMap::translateFieldName('Usrclmallowcrosswhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrclmallowcrosswhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : DplusUserTableMap::translateFieldName('Usrcpswd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcpswd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : DplusUserTableMap::translateFieldName('Usrcfaxname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcfaxname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : DplusUserTableMap::translateFieldName('Usrcfaxcompany', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcfaxcompany = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : DplusUserTableMap::translateFieldName('Usrcfaxarea', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcfaxarea = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : DplusUserTableMap::translateFieldName('Usrcfaxfrst3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcfaxfrst3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : DplusUserTableMap::translateFieldName('Usrcfaxlast4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcfaxlast4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : DplusUserTableMap::translateFieldName('Usrcphonearea', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcphonearea = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : DplusUserTableMap::translateFieldName('Usrcphonefrst3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcphonefrst3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : DplusUserTableMap::translateFieldName('Usrcphonelast4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcphonelast4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : DplusUserTableMap::translateFieldName('Usrcphoneext', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcphoneext = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : DplusUserTableMap::translateFieldName('Usrcsendtime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcsendtime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : DplusUserTableMap::translateFieldName('Usrccoversheet', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrccoversheet = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : DplusUserTableMap::translateFieldName('Usrcsubject', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcsubject = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : DplusUserTableMap::translateFieldName('Usrcnotifys', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcnotifys = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : DplusUserTableMap::translateFieldName('Usrcnotifyf', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcnotifyf = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : DplusUserTableMap::translateFieldName('Usrcemailaddr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcemailaddr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : DplusUserTableMap::translateFieldName('Usrcscalewhseid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcscalewhseid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : DplusUserTableMap::translateFieldName('Usrcscaledevnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcscaledevnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : DplusUserTableMap::translateFieldName('Usrcccscanwhseid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcccscanwhseid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : DplusUserTableMap::translateFieldName('Usrcccscandevnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->usrcccscandevnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : DplusUserTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : DplusUserTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : DplusUserTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 43; // 43 = DplusUserTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\DplusUser'), 0, $e);
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
        if ($this->aSysLoginGroup !== null && $this->usrclogingroup !== $this->aSysLoginGroup->getQtbllgrpcode()) {
            $this->aSysLoginGroup = null;
        }
        if ($this->aSysLoginRole !== null && $this->usrcloginrole !== $this->aSysLoginRole->getQtblrolecode()) {
            $this->aSysLoginRole = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(DplusUserTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildDplusUserQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSysLoginGroup = null;
            $this->aSysLoginRole = null;
            $this->collInvLotTags = null;

            $this->singleUserPermissionsItm = null;

            $this->collUserLastPrintJobs = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see DplusUser::setDeleted()
     * @see DplusUser::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(DplusUserTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildDplusUserQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(DplusUserTableMap::DATABASE_NAME);
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
                DplusUserTableMap::addInstanceToPool($this);
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

            if ($this->aSysLoginGroup !== null) {
                if ($this->aSysLoginGroup->isModified() || $this->aSysLoginGroup->isNew()) {
                    $affectedRows += $this->aSysLoginGroup->save($con);
                }
                $this->setSysLoginGroup($this->aSysLoginGroup);
            }

            if ($this->aSysLoginRole !== null) {
                if ($this->aSysLoginRole->isModified() || $this->aSysLoginRole->isNew()) {
                    $affectedRows += $this->aSysLoginRole->save($con);
                }
                $this->setSysLoginRole($this->aSysLoginRole);
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

            if ($this->singleUserPermissionsItm !== null) {
                if (!$this->singleUserPermissionsItm->isDeleted() && ($this->singleUserPermissionsItm->isNew() || $this->singleUserPermissionsItm->isModified())) {
                    $affectedRows += $this->singleUserPermissionsItm->save($con);
                }
            }

            if ($this->userLastPrintJobsScheduledForDeletion !== null) {
                if (!$this->userLastPrintJobsScheduledForDeletion->isEmpty()) {
                    \UserLastPrintJobQuery::create()
                        ->filterByPrimaryKeys($this->userLastPrintJobsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->userLastPrintJobsScheduledForDeletion = null;
                }
            }

            if ($this->collUserLastPrintJobs !== null) {
                foreach ($this->collUserLastPrintJobs as $referrerFK) {
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
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCID)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcId';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCLOGINNAME)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcLoginName';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCDEFCMPY)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcDefCmpy';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCADMIN)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcAdmin';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCFRONT)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcFront';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCCITYDESK)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcCityDesk';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCREPTADMIN)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcReptAdmin';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPRINTER)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcPrinter';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPITCH)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcPitch';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCBROWSEPRINTER)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcBrowsePrinter';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCWHSEDISPLAYSEQ)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcWhseDisplaySeq';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCACTIVEITEMSONLY)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcActiveItemsOnly';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCRESTRICTACCESS)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcRestrictAccess';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCLOGINGROUP)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcLoginGroup';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCLOGINROLE)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcLoginRole';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCALLOWPROCREMOVAL)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcAllowProcRemoval';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCACALLOWWARREDIT)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcAcAllowWarrEdit';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCISPRODMGR)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcIsProdMgr';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCLMALLOWCROSSWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcLmAllowCrossWhse';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPSWD)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcPswd';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCFAXNAME)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcFaxName';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCFAXCOMPANY)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcFaxCompany';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCFAXAREA)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcFaxArea';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCFAXFRST3)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcFaxFrst3';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCFAXLAST4)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcFaxLast4';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPHONEAREA)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcPhoneArea';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPHONEFRST3)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcPhoneFrst3';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPHONELAST4)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcPhoneLast4';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPHONEEXT)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcPhoneExt';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCSENDTIME)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcSendTime';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCCOVERSHEET)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcCoverSheet';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCSUBJECT)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcSubject';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCNOTIFYS)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcNotifyS';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCNOTIFYF)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcNotifyF';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCEMAILADDR)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcEmailAddr';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCSCALEWHSEID)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcScaleWhseId';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCSCALEDEVNBR)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcScaleDevNbr';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCCCSCANWHSEID)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcCcscanWhseId';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCCCSCANDEVNBR)) {
            $modifiedColumns[':p' . $index++]  = 'UsrcCcscanDevNbr';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO sys_login (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'UsrcId':
                        $stmt->bindValue($identifier, $this->usrcid, PDO::PARAM_STR);
                        break;
                    case 'UsrcLoginName':
                        $stmt->bindValue($identifier, $this->usrcloginname, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'UsrcDefCmpy':
                        $stmt->bindValue($identifier, $this->usrcdefcmpy, PDO::PARAM_STR);
                        break;
                    case 'UsrcAdmin':
                        $stmt->bindValue($identifier, $this->usrcadmin, PDO::PARAM_STR);
                        break;
                    case 'UsrcFront':
                        $stmt->bindValue($identifier, $this->usrcfront, PDO::PARAM_STR);
                        break;
                    case 'UsrcCityDesk':
                        $stmt->bindValue($identifier, $this->usrccitydesk, PDO::PARAM_STR);
                        break;
                    case 'UsrcReptAdmin':
                        $stmt->bindValue($identifier, $this->usrcreptadmin, PDO::PARAM_STR);
                        break;
                    case 'UsrcPrinter':
                        $stmt->bindValue($identifier, $this->usrcprinter, PDO::PARAM_STR);
                        break;
                    case 'UsrcPitch':
                        $stmt->bindValue($identifier, $this->usrcpitch, PDO::PARAM_STR);
                        break;
                    case 'UsrcBrowsePrinter':
                        $stmt->bindValue($identifier, $this->usrcbrowseprinter, PDO::PARAM_STR);
                        break;
                    case 'UsrcWhseDisplaySeq':
                        $stmt->bindValue($identifier, $this->usrcwhsedisplayseq, PDO::PARAM_STR);
                        break;
                    case 'UsrcActiveItemsOnly':
                        $stmt->bindValue($identifier, $this->usrcactiveitemsonly, PDO::PARAM_STR);
                        break;
                    case 'UsrcRestrictAccess':
                        $stmt->bindValue($identifier, $this->usrcrestrictaccess, PDO::PARAM_STR);
                        break;
                    case 'UsrcLoginGroup':
                        $stmt->bindValue($identifier, $this->usrclogingroup, PDO::PARAM_STR);
                        break;
                    case 'UsrcLoginRole':
                        $stmt->bindValue($identifier, $this->usrcloginrole, PDO::PARAM_STR);
                        break;
                    case 'UsrcAllowProcRemoval':
                        $stmt->bindValue($identifier, $this->usrcallowprocremoval, PDO::PARAM_STR);
                        break;
                    case 'UsrcAcAllowWarrEdit':
                        $stmt->bindValue($identifier, $this->usrcacallowwarredit, PDO::PARAM_STR);
                        break;
                    case 'UsrcIsProdMgr':
                        $stmt->bindValue($identifier, $this->usrcisprodmgr, PDO::PARAM_STR);
                        break;
                    case 'UsrcLmAllowCrossWhse':
                        $stmt->bindValue($identifier, $this->usrclmallowcrosswhse, PDO::PARAM_STR);
                        break;
                    case 'UsrcPswd':
                        $stmt->bindValue($identifier, $this->usrcpswd, PDO::PARAM_STR);
                        break;
                    case 'UsrcFaxName':
                        $stmt->bindValue($identifier, $this->usrcfaxname, PDO::PARAM_STR);
                        break;
                    case 'UsrcFaxCompany':
                        $stmt->bindValue($identifier, $this->usrcfaxcompany, PDO::PARAM_STR);
                        break;
                    case 'UsrcFaxArea':
                        $stmt->bindValue($identifier, $this->usrcfaxarea, PDO::PARAM_STR);
                        break;
                    case 'UsrcFaxFrst3':
                        $stmt->bindValue($identifier, $this->usrcfaxfrst3, PDO::PARAM_STR);
                        break;
                    case 'UsrcFaxLast4':
                        $stmt->bindValue($identifier, $this->usrcfaxlast4, PDO::PARAM_STR);
                        break;
                    case 'UsrcPhoneArea':
                        $stmt->bindValue($identifier, $this->usrcphonearea, PDO::PARAM_STR);
                        break;
                    case 'UsrcPhoneFrst3':
                        $stmt->bindValue($identifier, $this->usrcphonefrst3, PDO::PARAM_STR);
                        break;
                    case 'UsrcPhoneLast4':
                        $stmt->bindValue($identifier, $this->usrcphonelast4, PDO::PARAM_STR);
                        break;
                    case 'UsrcPhoneExt':
                        $stmt->bindValue($identifier, $this->usrcphoneext, PDO::PARAM_STR);
                        break;
                    case 'UsrcSendTime':
                        $stmt->bindValue($identifier, $this->usrcsendtime, PDO::PARAM_STR);
                        break;
                    case 'UsrcCoverSheet':
                        $stmt->bindValue($identifier, $this->usrccoversheet, PDO::PARAM_STR);
                        break;
                    case 'UsrcSubject':
                        $stmt->bindValue($identifier, $this->usrcsubject, PDO::PARAM_STR);
                        break;
                    case 'UsrcNotifyS':
                        $stmt->bindValue($identifier, $this->usrcnotifys, PDO::PARAM_STR);
                        break;
                    case 'UsrcNotifyF':
                        $stmt->bindValue($identifier, $this->usrcnotifyf, PDO::PARAM_STR);
                        break;
                    case 'UsrcEmailAddr':
                        $stmt->bindValue($identifier, $this->usrcemailaddr, PDO::PARAM_STR);
                        break;
                    case 'UsrcScaleWhseId':
                        $stmt->bindValue($identifier, $this->usrcscalewhseid, PDO::PARAM_STR);
                        break;
                    case 'UsrcScaleDevNbr':
                        $stmt->bindValue($identifier, $this->usrcscaledevnbr, PDO::PARAM_STR);
                        break;
                    case 'UsrcCcscanWhseId':
                        $stmt->bindValue($identifier, $this->usrcccscanwhseid, PDO::PARAM_STR);
                        break;
                    case 'UsrcCcscanDevNbr':
                        $stmt->bindValue($identifier, $this->usrcccscandevnbr, PDO::PARAM_STR);
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
        $pos = DplusUserTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getUsrcid();
                break;
            case 1:
                return $this->getUsrcloginname();
                break;
            case 2:
                return $this->getIntbwhse();
                break;
            case 3:
                return $this->getUsrcdefcmpy();
                break;
            case 4:
                return $this->getUsrcadmin();
                break;
            case 5:
                return $this->getUsrcfront();
                break;
            case 6:
                return $this->getUsrccitydesk();
                break;
            case 7:
                return $this->getUsrcreptadmin();
                break;
            case 8:
                return $this->getUsrcprinter();
                break;
            case 9:
                return $this->getUsrcpitch();
                break;
            case 10:
                return $this->getUsrcbrowseprinter();
                break;
            case 11:
                return $this->getUsrcwhsedisplayseq();
                break;
            case 12:
                return $this->getUsrcactiveitemsonly();
                break;
            case 13:
                return $this->getUsrcrestrictaccess();
                break;
            case 14:
                return $this->getUsrclogingroup();
                break;
            case 15:
                return $this->getUsrcloginrole();
                break;
            case 16:
                return $this->getUsrcallowprocremoval();
                break;
            case 17:
                return $this->getUsrcacallowwarredit();
                break;
            case 18:
                return $this->getUsrcisprodmgr();
                break;
            case 19:
                return $this->getUsrclmallowcrosswhse();
                break;
            case 20:
                return $this->getUsrcpswd();
                break;
            case 21:
                return $this->getUsrcfaxname();
                break;
            case 22:
                return $this->getUsrcfaxcompany();
                break;
            case 23:
                return $this->getUsrcfaxarea();
                break;
            case 24:
                return $this->getUsrcfaxfrst3();
                break;
            case 25:
                return $this->getUsrcfaxlast4();
                break;
            case 26:
                return $this->getUsrcphonearea();
                break;
            case 27:
                return $this->getUsrcphonefrst3();
                break;
            case 28:
                return $this->getUsrcphonelast4();
                break;
            case 29:
                return $this->getUsrcphoneext();
                break;
            case 30:
                return $this->getUsrcsendtime();
                break;
            case 31:
                return $this->getUsrccoversheet();
                break;
            case 32:
                return $this->getUsrcsubject();
                break;
            case 33:
                return $this->getUsrcnotifys();
                break;
            case 34:
                return $this->getUsrcnotifyf();
                break;
            case 35:
                return $this->getUsrcemailaddr();
                break;
            case 36:
                return $this->getUsrcscalewhseid();
                break;
            case 37:
                return $this->getUsrcscaledevnbr();
                break;
            case 38:
                return $this->getUsrcccscanwhseid();
                break;
            case 39:
                return $this->getUsrcccscandevnbr();
                break;
            case 40:
                return $this->getDateupdtd();
                break;
            case 41:
                return $this->getTimeupdtd();
                break;
            case 42:
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

        if (isset($alreadyDumpedObjects['DplusUser'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['DplusUser'][$this->hashCode()] = true;
        $keys = DplusUserTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getUsrcid(),
            $keys[1] => $this->getUsrcloginname(),
            $keys[2] => $this->getIntbwhse(),
            $keys[3] => $this->getUsrcdefcmpy(),
            $keys[4] => $this->getUsrcadmin(),
            $keys[5] => $this->getUsrcfront(),
            $keys[6] => $this->getUsrccitydesk(),
            $keys[7] => $this->getUsrcreptadmin(),
            $keys[8] => $this->getUsrcprinter(),
            $keys[9] => $this->getUsrcpitch(),
            $keys[10] => $this->getUsrcbrowseprinter(),
            $keys[11] => $this->getUsrcwhsedisplayseq(),
            $keys[12] => $this->getUsrcactiveitemsonly(),
            $keys[13] => $this->getUsrcrestrictaccess(),
            $keys[14] => $this->getUsrclogingroup(),
            $keys[15] => $this->getUsrcloginrole(),
            $keys[16] => $this->getUsrcallowprocremoval(),
            $keys[17] => $this->getUsrcacallowwarredit(),
            $keys[18] => $this->getUsrcisprodmgr(),
            $keys[19] => $this->getUsrclmallowcrosswhse(),
            $keys[20] => $this->getUsrcpswd(),
            $keys[21] => $this->getUsrcfaxname(),
            $keys[22] => $this->getUsrcfaxcompany(),
            $keys[23] => $this->getUsrcfaxarea(),
            $keys[24] => $this->getUsrcfaxfrst3(),
            $keys[25] => $this->getUsrcfaxlast4(),
            $keys[26] => $this->getUsrcphonearea(),
            $keys[27] => $this->getUsrcphonefrst3(),
            $keys[28] => $this->getUsrcphonelast4(),
            $keys[29] => $this->getUsrcphoneext(),
            $keys[30] => $this->getUsrcsendtime(),
            $keys[31] => $this->getUsrccoversheet(),
            $keys[32] => $this->getUsrcsubject(),
            $keys[33] => $this->getUsrcnotifys(),
            $keys[34] => $this->getUsrcnotifyf(),
            $keys[35] => $this->getUsrcemailaddr(),
            $keys[36] => $this->getUsrcscalewhseid(),
            $keys[37] => $this->getUsrcscaledevnbr(),
            $keys[38] => $this->getUsrcccscanwhseid(),
            $keys[39] => $this->getUsrcccscandevnbr(),
            $keys[40] => $this->getDateupdtd(),
            $keys[41] => $this->getTimeupdtd(),
            $keys[42] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSysLoginGroup) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'sysLoginGroup';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'sys_login_group';
                        break;
                    default:
                        $key = 'SysLoginGroup';
                }

                $result[$key] = $this->aSysLoginGroup->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSysLoginRole) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'sysLoginRole';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'sys_login_role';
                        break;
                    default:
                        $key = 'SysLoginRole';
                }

                $result[$key] = $this->aSysLoginRole->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
            if (null !== $this->singleUserPermissionsItm) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'userPermissionsItm';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'inv_itm_perm';
                        break;
                    default:
                        $key = 'UserPermissionsItm';
                }

                $result[$key] = $this->singleUserPermissionsItm->toArray($keyType, $includeLazyLoadColumns, $alreadyDumpedObjects, true);
            }
            if (null !== $this->collUserLastPrintJobs) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'userLastPrintJobs';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'user_printers';
                        break;
                    default:
                        $key = 'UserLastPrintJobs';
                }

                $result[$key] = $this->collUserLastPrintJobs->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\DplusUser
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = DplusUserTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\DplusUser
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setUsrcid($value);
                break;
            case 1:
                $this->setUsrcloginname($value);
                break;
            case 2:
                $this->setIntbwhse($value);
                break;
            case 3:
                $this->setUsrcdefcmpy($value);
                break;
            case 4:
                $this->setUsrcadmin($value);
                break;
            case 5:
                $this->setUsrcfront($value);
                break;
            case 6:
                $this->setUsrccitydesk($value);
                break;
            case 7:
                $this->setUsrcreptadmin($value);
                break;
            case 8:
                $this->setUsrcprinter($value);
                break;
            case 9:
                $this->setUsrcpitch($value);
                break;
            case 10:
                $this->setUsrcbrowseprinter($value);
                break;
            case 11:
                $this->setUsrcwhsedisplayseq($value);
                break;
            case 12:
                $this->setUsrcactiveitemsonly($value);
                break;
            case 13:
                $this->setUsrcrestrictaccess($value);
                break;
            case 14:
                $this->setUsrclogingroup($value);
                break;
            case 15:
                $this->setUsrcloginrole($value);
                break;
            case 16:
                $this->setUsrcallowprocremoval($value);
                break;
            case 17:
                $this->setUsrcacallowwarredit($value);
                break;
            case 18:
                $this->setUsrcisprodmgr($value);
                break;
            case 19:
                $this->setUsrclmallowcrosswhse($value);
                break;
            case 20:
                $this->setUsrcpswd($value);
                break;
            case 21:
                $this->setUsrcfaxname($value);
                break;
            case 22:
                $this->setUsrcfaxcompany($value);
                break;
            case 23:
                $this->setUsrcfaxarea($value);
                break;
            case 24:
                $this->setUsrcfaxfrst3($value);
                break;
            case 25:
                $this->setUsrcfaxlast4($value);
                break;
            case 26:
                $this->setUsrcphonearea($value);
                break;
            case 27:
                $this->setUsrcphonefrst3($value);
                break;
            case 28:
                $this->setUsrcphonelast4($value);
                break;
            case 29:
                $this->setUsrcphoneext($value);
                break;
            case 30:
                $this->setUsrcsendtime($value);
                break;
            case 31:
                $this->setUsrccoversheet($value);
                break;
            case 32:
                $this->setUsrcsubject($value);
                break;
            case 33:
                $this->setUsrcnotifys($value);
                break;
            case 34:
                $this->setUsrcnotifyf($value);
                break;
            case 35:
                $this->setUsrcemailaddr($value);
                break;
            case 36:
                $this->setUsrcscalewhseid($value);
                break;
            case 37:
                $this->setUsrcscaledevnbr($value);
                break;
            case 38:
                $this->setUsrcccscanwhseid($value);
                break;
            case 39:
                $this->setUsrcccscandevnbr($value);
                break;
            case 40:
                $this->setDateupdtd($value);
                break;
            case 41:
                $this->setTimeupdtd($value);
                break;
            case 42:
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
        $keys = DplusUserTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setUsrcid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setUsrcloginname($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIntbwhse($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setUsrcdefcmpy($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setUsrcadmin($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setUsrcfront($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setUsrccitydesk($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setUsrcreptadmin($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setUsrcprinter($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setUsrcpitch($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setUsrcbrowseprinter($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setUsrcwhsedisplayseq($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setUsrcactiveitemsonly($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setUsrcrestrictaccess($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setUsrclogingroup($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setUsrcloginrole($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setUsrcallowprocremoval($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setUsrcacallowwarredit($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setUsrcisprodmgr($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setUsrclmallowcrosswhse($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setUsrcpswd($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setUsrcfaxname($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setUsrcfaxcompany($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setUsrcfaxarea($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setUsrcfaxfrst3($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setUsrcfaxlast4($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setUsrcphonearea($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setUsrcphonefrst3($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setUsrcphonelast4($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setUsrcphoneext($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setUsrcsendtime($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setUsrccoversheet($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setUsrcsubject($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setUsrcnotifys($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setUsrcnotifyf($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setUsrcemailaddr($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setUsrcscalewhseid($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setUsrcscaledevnbr($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setUsrcccscanwhseid($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setUsrcccscandevnbr($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setDateupdtd($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setTimeupdtd($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setDummy($arr[$keys[42]]);
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
     * @return $this|\DplusUser The current object, for fluid interface
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
        $criteria = new Criteria(DplusUserTableMap::DATABASE_NAME);

        if ($this->isColumnModified(DplusUserTableMap::COL_USRCID)) {
            $criteria->add(DplusUserTableMap::COL_USRCID, $this->usrcid);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCLOGINNAME)) {
            $criteria->add(DplusUserTableMap::COL_USRCLOGINNAME, $this->usrcloginname);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_INTBWHSE)) {
            $criteria->add(DplusUserTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCDEFCMPY)) {
            $criteria->add(DplusUserTableMap::COL_USRCDEFCMPY, $this->usrcdefcmpy);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCADMIN)) {
            $criteria->add(DplusUserTableMap::COL_USRCADMIN, $this->usrcadmin);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCFRONT)) {
            $criteria->add(DplusUserTableMap::COL_USRCFRONT, $this->usrcfront);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCCITYDESK)) {
            $criteria->add(DplusUserTableMap::COL_USRCCITYDESK, $this->usrccitydesk);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCREPTADMIN)) {
            $criteria->add(DplusUserTableMap::COL_USRCREPTADMIN, $this->usrcreptadmin);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPRINTER)) {
            $criteria->add(DplusUserTableMap::COL_USRCPRINTER, $this->usrcprinter);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPITCH)) {
            $criteria->add(DplusUserTableMap::COL_USRCPITCH, $this->usrcpitch);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCBROWSEPRINTER)) {
            $criteria->add(DplusUserTableMap::COL_USRCBROWSEPRINTER, $this->usrcbrowseprinter);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCWHSEDISPLAYSEQ)) {
            $criteria->add(DplusUserTableMap::COL_USRCWHSEDISPLAYSEQ, $this->usrcwhsedisplayseq);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCACTIVEITEMSONLY)) {
            $criteria->add(DplusUserTableMap::COL_USRCACTIVEITEMSONLY, $this->usrcactiveitemsonly);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCRESTRICTACCESS)) {
            $criteria->add(DplusUserTableMap::COL_USRCRESTRICTACCESS, $this->usrcrestrictaccess);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCLOGINGROUP)) {
            $criteria->add(DplusUserTableMap::COL_USRCLOGINGROUP, $this->usrclogingroup);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCLOGINROLE)) {
            $criteria->add(DplusUserTableMap::COL_USRCLOGINROLE, $this->usrcloginrole);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCALLOWPROCREMOVAL)) {
            $criteria->add(DplusUserTableMap::COL_USRCALLOWPROCREMOVAL, $this->usrcallowprocremoval);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCACALLOWWARREDIT)) {
            $criteria->add(DplusUserTableMap::COL_USRCACALLOWWARREDIT, $this->usrcacallowwarredit);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCISPRODMGR)) {
            $criteria->add(DplusUserTableMap::COL_USRCISPRODMGR, $this->usrcisprodmgr);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCLMALLOWCROSSWHSE)) {
            $criteria->add(DplusUserTableMap::COL_USRCLMALLOWCROSSWHSE, $this->usrclmallowcrosswhse);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPSWD)) {
            $criteria->add(DplusUserTableMap::COL_USRCPSWD, $this->usrcpswd);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCFAXNAME)) {
            $criteria->add(DplusUserTableMap::COL_USRCFAXNAME, $this->usrcfaxname);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCFAXCOMPANY)) {
            $criteria->add(DplusUserTableMap::COL_USRCFAXCOMPANY, $this->usrcfaxcompany);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCFAXAREA)) {
            $criteria->add(DplusUserTableMap::COL_USRCFAXAREA, $this->usrcfaxarea);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCFAXFRST3)) {
            $criteria->add(DplusUserTableMap::COL_USRCFAXFRST3, $this->usrcfaxfrst3);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCFAXLAST4)) {
            $criteria->add(DplusUserTableMap::COL_USRCFAXLAST4, $this->usrcfaxlast4);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPHONEAREA)) {
            $criteria->add(DplusUserTableMap::COL_USRCPHONEAREA, $this->usrcphonearea);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPHONEFRST3)) {
            $criteria->add(DplusUserTableMap::COL_USRCPHONEFRST3, $this->usrcphonefrst3);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPHONELAST4)) {
            $criteria->add(DplusUserTableMap::COL_USRCPHONELAST4, $this->usrcphonelast4);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCPHONEEXT)) {
            $criteria->add(DplusUserTableMap::COL_USRCPHONEEXT, $this->usrcphoneext);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCSENDTIME)) {
            $criteria->add(DplusUserTableMap::COL_USRCSENDTIME, $this->usrcsendtime);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCCOVERSHEET)) {
            $criteria->add(DplusUserTableMap::COL_USRCCOVERSHEET, $this->usrccoversheet);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCSUBJECT)) {
            $criteria->add(DplusUserTableMap::COL_USRCSUBJECT, $this->usrcsubject);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCNOTIFYS)) {
            $criteria->add(DplusUserTableMap::COL_USRCNOTIFYS, $this->usrcnotifys);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCNOTIFYF)) {
            $criteria->add(DplusUserTableMap::COL_USRCNOTIFYF, $this->usrcnotifyf);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCEMAILADDR)) {
            $criteria->add(DplusUserTableMap::COL_USRCEMAILADDR, $this->usrcemailaddr);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCSCALEWHSEID)) {
            $criteria->add(DplusUserTableMap::COL_USRCSCALEWHSEID, $this->usrcscalewhseid);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCSCALEDEVNBR)) {
            $criteria->add(DplusUserTableMap::COL_USRCSCALEDEVNBR, $this->usrcscaledevnbr);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCCCSCANWHSEID)) {
            $criteria->add(DplusUserTableMap::COL_USRCCCSCANWHSEID, $this->usrcccscanwhseid);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_USRCCCSCANDEVNBR)) {
            $criteria->add(DplusUserTableMap::COL_USRCCCSCANDEVNBR, $this->usrcccscandevnbr);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_DATEUPDTD)) {
            $criteria->add(DplusUserTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_TIMEUPDTD)) {
            $criteria->add(DplusUserTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(DplusUserTableMap::COL_DUMMY)) {
            $criteria->add(DplusUserTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildDplusUserQuery::create();
        $criteria->add(DplusUserTableMap::COL_USRCID, $this->usrcid);

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
        $validPk = null !== $this->getUsrcid();

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
        return $this->getUsrcid();
    }

    /**
     * Generic method to set the primary key (usrcid column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setUsrcid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getUsrcid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \DplusUser (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUsrcid($this->getUsrcid());
        $copyObj->setUsrcloginname($this->getUsrcloginname());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setUsrcdefcmpy($this->getUsrcdefcmpy());
        $copyObj->setUsrcadmin($this->getUsrcadmin());
        $copyObj->setUsrcfront($this->getUsrcfront());
        $copyObj->setUsrccitydesk($this->getUsrccitydesk());
        $copyObj->setUsrcreptadmin($this->getUsrcreptadmin());
        $copyObj->setUsrcprinter($this->getUsrcprinter());
        $copyObj->setUsrcpitch($this->getUsrcpitch());
        $copyObj->setUsrcbrowseprinter($this->getUsrcbrowseprinter());
        $copyObj->setUsrcwhsedisplayseq($this->getUsrcwhsedisplayseq());
        $copyObj->setUsrcactiveitemsonly($this->getUsrcactiveitemsonly());
        $copyObj->setUsrcrestrictaccess($this->getUsrcrestrictaccess());
        $copyObj->setUsrclogingroup($this->getUsrclogingroup());
        $copyObj->setUsrcloginrole($this->getUsrcloginrole());
        $copyObj->setUsrcallowprocremoval($this->getUsrcallowprocremoval());
        $copyObj->setUsrcacallowwarredit($this->getUsrcacallowwarredit());
        $copyObj->setUsrcisprodmgr($this->getUsrcisprodmgr());
        $copyObj->setUsrclmallowcrosswhse($this->getUsrclmallowcrosswhse());
        $copyObj->setUsrcpswd($this->getUsrcpswd());
        $copyObj->setUsrcfaxname($this->getUsrcfaxname());
        $copyObj->setUsrcfaxcompany($this->getUsrcfaxcompany());
        $copyObj->setUsrcfaxarea($this->getUsrcfaxarea());
        $copyObj->setUsrcfaxfrst3($this->getUsrcfaxfrst3());
        $copyObj->setUsrcfaxlast4($this->getUsrcfaxlast4());
        $copyObj->setUsrcphonearea($this->getUsrcphonearea());
        $copyObj->setUsrcphonefrst3($this->getUsrcphonefrst3());
        $copyObj->setUsrcphonelast4($this->getUsrcphonelast4());
        $copyObj->setUsrcphoneext($this->getUsrcphoneext());
        $copyObj->setUsrcsendtime($this->getUsrcsendtime());
        $copyObj->setUsrccoversheet($this->getUsrccoversheet());
        $copyObj->setUsrcsubject($this->getUsrcsubject());
        $copyObj->setUsrcnotifys($this->getUsrcnotifys());
        $copyObj->setUsrcnotifyf($this->getUsrcnotifyf());
        $copyObj->setUsrcemailaddr($this->getUsrcemailaddr());
        $copyObj->setUsrcscalewhseid($this->getUsrcscalewhseid());
        $copyObj->setUsrcscaledevnbr($this->getUsrcscaledevnbr());
        $copyObj->setUsrcccscanwhseid($this->getUsrcccscanwhseid());
        $copyObj->setUsrcccscandevnbr($this->getUsrcccscandevnbr());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getInvLotTags() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addInvLotTag($relObj->copy($deepCopy));
                }
            }

            $relObj = $this->getUserPermissionsItm();
            if ($relObj) {
                $copyObj->setUserPermissionsItm($relObj->copy($deepCopy));
            }

            foreach ($this->getUserLastPrintJobs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUserLastPrintJob($relObj->copy($deepCopy));
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
     * @return \DplusUser Clone of current object.
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
     * Declares an association between this object and a ChildSysLoginGroup object.
     *
     * @param  ChildSysLoginGroup $v
     * @return $this|\DplusUser The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSysLoginGroup(ChildSysLoginGroup $v = null)
    {
        if ($v === null) {
            $this->setUsrclogingroup(NULL);
        } else {
            $this->setUsrclogingroup($v->getQtbllgrpcode());
        }

        $this->aSysLoginGroup = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSysLoginGroup object, it will not be re-added.
        if ($v !== null) {
            $v->addDplusUser($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSysLoginGroup object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSysLoginGroup The associated ChildSysLoginGroup object.
     * @throws PropelException
     */
    public function getSysLoginGroup(ConnectionInterface $con = null)
    {
        if ($this->aSysLoginGroup === null && (($this->usrclogingroup !== "" && $this->usrclogingroup !== null))) {
            $this->aSysLoginGroup = ChildSysLoginGroupQuery::create()->findPk($this->usrclogingroup, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSysLoginGroup->addDplusUsers($this);
             */
        }

        return $this->aSysLoginGroup;
    }

    /**
     * Declares an association between this object and a ChildSysLoginRole object.
     *
     * @param  ChildSysLoginRole $v
     * @return $this|\DplusUser The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSysLoginRole(ChildSysLoginRole $v = null)
    {
        if ($v === null) {
            $this->setUsrcloginrole(NULL);
        } else {
            $this->setUsrcloginrole($v->getQtblrolecode());
        }

        $this->aSysLoginRole = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSysLoginRole object, it will not be re-added.
        if ($v !== null) {
            $v->addDplusUser($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSysLoginRole object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildSysLoginRole The associated ChildSysLoginRole object.
     * @throws PropelException
     */
    public function getSysLoginRole(ConnectionInterface $con = null)
    {
        if ($this->aSysLoginRole === null && (($this->usrcloginrole !== "" && $this->usrcloginrole !== null))) {
            $this->aSysLoginRole = ChildSysLoginRoleQuery::create()->findPk($this->usrcloginrole, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSysLoginRole->addDplusUsers($this);
             */
        }

        return $this->aSysLoginRole;
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
        if ('InvLotTag' == $relationName) {
            $this->initInvLotTags();
            return;
        }
        if ('UserLastPrintJob' == $relationName) {
            $this->initUserLastPrintJobs();
            return;
        }
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
     * If this ChildDplusUser is new, it will return
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
                    ->filterByDplusUser($this)
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
     * @return $this|ChildDplusUser The current object (for fluent API support)
     */
    public function setInvLotTags(Collection $invLotTags, ConnectionInterface $con = null)
    {
        /** @var ChildInvLotTag[] $invLotTagsToDelete */
        $invLotTagsToDelete = $this->getInvLotTags(new Criteria(), $con)->diff($invLotTags);


        $this->invLotTagsScheduledForDeletion = $invLotTagsToDelete;

        foreach ($invLotTagsToDelete as $invLotTagRemoved) {
            $invLotTagRemoved->setDplusUser(null);
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
                ->filterByDplusUser($this)
                ->count($con);
        }

        return count($this->collInvLotTags);
    }

    /**
     * Method called to associate a ChildInvLotTag object to this object
     * through the ChildInvLotTag foreign key attribute.
     *
     * @param  ChildInvLotTag $l ChildInvLotTag
     * @return $this|\DplusUser The current object (for fluent API support)
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
        $invLotTag->setDplusUser($this);
    }

    /**
     * @param  ChildInvLotTag $invLotTag The ChildInvLotTag object to remove.
     * @return $this|ChildDplusUser The current object (for fluent API support)
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
            $invLotTag->setDplusUser(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this DplusUser is new, it will return
     * an empty collection; or if this DplusUser has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DplusUser.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildInvLotTag[] List of ChildInvLotTag objects
     */
    public function getInvLotTagsJoinItemMasterItem(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildInvLotTagQuery::create(null, $criteria);
        $query->joinWith('ItemMasterItem', $joinBehavior);

        return $this->getInvLotTags($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this DplusUser is new, it will return
     * an empty collection; or if this DplusUser has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DplusUser.
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
     * Otherwise if this DplusUser is new, it will return
     * an empty collection; or if this DplusUser has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DplusUser.
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
     * Otherwise if this DplusUser is new, it will return
     * an empty collection; or if this DplusUser has previously
     * been saved, it will retrieve related InvLotTags from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in DplusUser.
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
     * Gets a single ChildUserPermissionsItm object, which is related to this object by a one-to-one relationship.
     *
     * @param  ConnectionInterface $con optional connection object
     * @return ChildUserPermissionsItm
     * @throws PropelException
     */
    public function getUserPermissionsItm(ConnectionInterface $con = null)
    {

        if ($this->singleUserPermissionsItm === null && !$this->isNew()) {
            $this->singleUserPermissionsItm = ChildUserPermissionsItmQuery::create()->findPk($this->getPrimaryKey(), $con);
        }

        return $this->singleUserPermissionsItm;
    }

    /**
     * Sets a single ChildUserPermissionsItm object as related to this object by a one-to-one relationship.
     *
     * @param  ChildUserPermissionsItm $v ChildUserPermissionsItm
     * @return $this|\DplusUser The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUserPermissionsItm(ChildUserPermissionsItm $v = null)
    {
        $this->singleUserPermissionsItm = $v;

        // Make sure that that the passed-in ChildUserPermissionsItm isn't already associated with this object
        if ($v !== null && $v->getDplusUser(null, false) === null) {
            $v->setDplusUser($this);
        }

        return $this;
    }

    /**
     * Clears out the collUserLastPrintJobs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addUserLastPrintJobs()
     */
    public function clearUserLastPrintJobs()
    {
        $this->collUserLastPrintJobs = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collUserLastPrintJobs collection loaded partially.
     */
    public function resetPartialUserLastPrintJobs($v = true)
    {
        $this->collUserLastPrintJobsPartial = $v;
    }

    /**
     * Initializes the collUserLastPrintJobs collection.
     *
     * By default this just sets the collUserLastPrintJobs collection to an empty array (like clearcollUserLastPrintJobs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUserLastPrintJobs($overrideExisting = true)
    {
        if (null !== $this->collUserLastPrintJobs && !$overrideExisting) {
            return;
        }

        $collectionClassName = UserLastPrintJobTableMap::getTableMap()->getCollectionClassName();

        $this->collUserLastPrintJobs = new $collectionClassName;
        $this->collUserLastPrintJobs->setModel('\UserLastPrintJob');
    }

    /**
     * Gets an array of ChildUserLastPrintJob objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildDplusUser is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildUserLastPrintJob[] List of ChildUserLastPrintJob objects
     * @throws PropelException
     */
    public function getUserLastPrintJobs(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collUserLastPrintJobsPartial && !$this->isNew();
        if (null === $this->collUserLastPrintJobs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUserLastPrintJobs) {
                // return empty collection
                $this->initUserLastPrintJobs();
            } else {
                $collUserLastPrintJobs = ChildUserLastPrintJobQuery::create(null, $criteria)
                    ->filterByDplusUser($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collUserLastPrintJobsPartial && count($collUserLastPrintJobs)) {
                        $this->initUserLastPrintJobs(false);

                        foreach ($collUserLastPrintJobs as $obj) {
                            if (false == $this->collUserLastPrintJobs->contains($obj)) {
                                $this->collUserLastPrintJobs->append($obj);
                            }
                        }

                        $this->collUserLastPrintJobsPartial = true;
                    }

                    return $collUserLastPrintJobs;
                }

                if ($partial && $this->collUserLastPrintJobs) {
                    foreach ($this->collUserLastPrintJobs as $obj) {
                        if ($obj->isNew()) {
                            $collUserLastPrintJobs[] = $obj;
                        }
                    }
                }

                $this->collUserLastPrintJobs = $collUserLastPrintJobs;
                $this->collUserLastPrintJobsPartial = false;
            }
        }

        return $this->collUserLastPrintJobs;
    }

    /**
     * Sets a collection of ChildUserLastPrintJob objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $userLastPrintJobs A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildDplusUser The current object (for fluent API support)
     */
    public function setUserLastPrintJobs(Collection $userLastPrintJobs, ConnectionInterface $con = null)
    {
        /** @var ChildUserLastPrintJob[] $userLastPrintJobsToDelete */
        $userLastPrintJobsToDelete = $this->getUserLastPrintJobs(new Criteria(), $con)->diff($userLastPrintJobs);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->userLastPrintJobsScheduledForDeletion = clone $userLastPrintJobsToDelete;

        foreach ($userLastPrintJobsToDelete as $userLastPrintJobRemoved) {
            $userLastPrintJobRemoved->setDplusUser(null);
        }

        $this->collUserLastPrintJobs = null;
        foreach ($userLastPrintJobs as $userLastPrintJob) {
            $this->addUserLastPrintJob($userLastPrintJob);
        }

        $this->collUserLastPrintJobs = $userLastPrintJobs;
        $this->collUserLastPrintJobsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related UserLastPrintJob objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related UserLastPrintJob objects.
     * @throws PropelException
     */
    public function countUserLastPrintJobs(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collUserLastPrintJobsPartial && !$this->isNew();
        if (null === $this->collUserLastPrintJobs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUserLastPrintJobs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getUserLastPrintJobs());
            }

            $query = ChildUserLastPrintJobQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByDplusUser($this)
                ->count($con);
        }

        return count($this->collUserLastPrintJobs);
    }

    /**
     * Method called to associate a ChildUserLastPrintJob object to this object
     * through the ChildUserLastPrintJob foreign key attribute.
     *
     * @param  ChildUserLastPrintJob $l ChildUserLastPrintJob
     * @return $this|\DplusUser The current object (for fluent API support)
     */
    public function addUserLastPrintJob(ChildUserLastPrintJob $l)
    {
        if ($this->collUserLastPrintJobs === null) {
            $this->initUserLastPrintJobs();
            $this->collUserLastPrintJobsPartial = true;
        }

        if (!$this->collUserLastPrintJobs->contains($l)) {
            $this->doAddUserLastPrintJob($l);

            if ($this->userLastPrintJobsScheduledForDeletion and $this->userLastPrintJobsScheduledForDeletion->contains($l)) {
                $this->userLastPrintJobsScheduledForDeletion->remove($this->userLastPrintJobsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildUserLastPrintJob $userLastPrintJob The ChildUserLastPrintJob object to add.
     */
    protected function doAddUserLastPrintJob(ChildUserLastPrintJob $userLastPrintJob)
    {
        $this->collUserLastPrintJobs[]= $userLastPrintJob;
        $userLastPrintJob->setDplusUser($this);
    }

    /**
     * @param  ChildUserLastPrintJob $userLastPrintJob The ChildUserLastPrintJob object to remove.
     * @return $this|ChildDplusUser The current object (for fluent API support)
     */
    public function removeUserLastPrintJob(ChildUserLastPrintJob $userLastPrintJob)
    {
        if ($this->getUserLastPrintJobs()->contains($userLastPrintJob)) {
            $pos = $this->collUserLastPrintJobs->search($userLastPrintJob);
            $this->collUserLastPrintJobs->remove($pos);
            if (null === $this->userLastPrintJobsScheduledForDeletion) {
                $this->userLastPrintJobsScheduledForDeletion = clone $this->collUserLastPrintJobs;
                $this->userLastPrintJobsScheduledForDeletion->clear();
            }
            $this->userLastPrintJobsScheduledForDeletion[]= clone $userLastPrintJob;
            $userLastPrintJob->setDplusUser(null);
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
        if (null !== $this->aSysLoginGroup) {
            $this->aSysLoginGroup->removeDplusUser($this);
        }
        if (null !== $this->aSysLoginRole) {
            $this->aSysLoginRole->removeDplusUser($this);
        }
        $this->usrcid = null;
        $this->usrcloginname = null;
        $this->intbwhse = null;
        $this->usrcdefcmpy = null;
        $this->usrcadmin = null;
        $this->usrcfront = null;
        $this->usrccitydesk = null;
        $this->usrcreptadmin = null;
        $this->usrcprinter = null;
        $this->usrcpitch = null;
        $this->usrcbrowseprinter = null;
        $this->usrcwhsedisplayseq = null;
        $this->usrcactiveitemsonly = null;
        $this->usrcrestrictaccess = null;
        $this->usrclogingroup = null;
        $this->usrcloginrole = null;
        $this->usrcallowprocremoval = null;
        $this->usrcacallowwarredit = null;
        $this->usrcisprodmgr = null;
        $this->usrclmallowcrosswhse = null;
        $this->usrcpswd = null;
        $this->usrcfaxname = null;
        $this->usrcfaxcompany = null;
        $this->usrcfaxarea = null;
        $this->usrcfaxfrst3 = null;
        $this->usrcfaxlast4 = null;
        $this->usrcphonearea = null;
        $this->usrcphonefrst3 = null;
        $this->usrcphonelast4 = null;
        $this->usrcphoneext = null;
        $this->usrcsendtime = null;
        $this->usrccoversheet = null;
        $this->usrcsubject = null;
        $this->usrcnotifys = null;
        $this->usrcnotifyf = null;
        $this->usrcemailaddr = null;
        $this->usrcscalewhseid = null;
        $this->usrcscaledevnbr = null;
        $this->usrcccscanwhseid = null;
        $this->usrcccscandevnbr = null;
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
            if ($this->collInvLotTags) {
                foreach ($this->collInvLotTags as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->singleUserPermissionsItm) {
                $this->singleUserPermissionsItm->clearAllReferences($deep);
            }
            if ($this->collUserLastPrintJobs) {
                foreach ($this->collUserLastPrintJobs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collInvLotTags = null;
        $this->singleUserPermissionsItm = null;
        $this->collUserLastPrintJobs = null;
        $this->aSysLoginGroup = null;
        $this->aSysLoginRole = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(DplusUserTableMap::DEFAULT_STRING_FORMAT);
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
