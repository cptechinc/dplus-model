<?php

namespace Base;

use \Quote as ChildQuote;
use \QuoteDetail as ChildQuoteDetail;
use \QuoteDetailQuery as ChildQuoteDetailQuery;
use \QuoteQuery as ChildQuoteQuery;
use \Exception;
use \PDO;
use Map\QuoteDetailTableMap;
use Map\QuoteTableMap;
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
 * Base class that represents a row from the 'quote_header' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class Quote implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\QuoteTableMap';


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
     * The value for the qthdid field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $qthdid;

    /**
     * The value for the qthdstat field.
     *
     * @var        string
     */
    protected $qthdstat;

    /**
     * The value for the arcucustid field.
     *
     * @var        string
     */
    protected $arcucustid;

    /**
     * The value for the qthdbtname field.
     *
     * @var        string
     */
    protected $qthdbtname;

    /**
     * The value for the qthdbtadr1 field.
     *
     * @var        string
     */
    protected $qthdbtadr1;

    /**
     * The value for the qthdbtadr2 field.
     *
     * @var        string
     */
    protected $qthdbtadr2;

    /**
     * The value for the qthdbtadr3 field.
     *
     * @var        string
     */
    protected $qthdbtadr3;

    /**
     * The value for the qthdbtctry field.
     *
     * @var        string
     */
    protected $qthdbtctry;

    /**
     * The value for the qthdbtcity field.
     *
     * @var        string
     */
    protected $qthdbtcity;

    /**
     * The value for the qthdbtstat field.
     *
     * @var        string
     */
    protected $qthdbtstat;

    /**
     * The value for the qthdbtzipcode field.
     *
     * @var        string
     */
    protected $qthdbtzipcode;

    /**
     * The value for the arstshipid field.
     *
     * @var        string
     */
    protected $arstshipid;

    /**
     * The value for the qthdstname field.
     *
     * @var        string
     */
    protected $qthdstname;

    /**
     * The value for the qthdstadr1 field.
     *
     * @var        string
     */
    protected $qthdstadr1;

    /**
     * The value for the qthdstadr2 field.
     *
     * @var        string
     */
    protected $qthdstadr2;

    /**
     * The value for the qthdstadr3 field.
     *
     * @var        string
     */
    protected $qthdstadr3;

    /**
     * The value for the qthdstctry field.
     *
     * @var        string
     */
    protected $qthdstctry;

    /**
     * The value for the qthdstcity field.
     *
     * @var        string
     */
    protected $qthdstcity;

    /**
     * The value for the qthdststat field.
     *
     * @var        string
     */
    protected $qthdststat;

    /**
     * The value for the qthdstzipcode field.
     *
     * @var        string
     */
    protected $qthdstzipcode;

    /**
     * The value for the qthdcont field.
     *
     * @var        string
     */
    protected $qthdcont;

    /**
     * The value for the qthdteleintl field.
     *
     * @var        string
     */
    protected $qthdteleintl;

    /**
     * The value for the qthdtelenbr field.
     *
     * @var        string
     */
    protected $qthdtelenbr;

    /**
     * The value for the qthdteleext field.
     *
     * @var        string
     */
    protected $qthdteleext;

    /**
     * The value for the qthdfaxintl field.
     *
     * @var        string
     */
    protected $qthdfaxintl;

    /**
     * The value for the qthdfaxnbr field.
     *
     * @var        string
     */
    protected $qthdfaxnbr;

    /**
     * The value for the qthdquotdate field.
     *
     * @var        string
     */
    protected $qthdquotdate;

    /**
     * The value for the qthdrevdate field.
     *
     * @var        string
     */
    protected $qthdrevdate;

    /**
     * The value for the qthdexpdate field.
     *
     * @var        string
     */
    protected $qthdexpdate;

    /**
     * The value for the artbpriccode field.
     *
     * @var        string
     */
    protected $artbpriccode;

    /**
     * The value for the artbmtaxcode field.
     *
     * @var        string
     */
    protected $artbmtaxcode;

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
     * The value for the arspsaleper1 field.
     *
     * @var        string
     */
    protected $arspsaleper1;

    /**
     * The value for the qthdsp1pct field.
     *
     * @var        string
     */
    protected $qthdsp1pct;

    /**
     * The value for the arspsaleper2 field.
     *
     * @var        string
     */
    protected $arspsaleper2;

    /**
     * The value for the qthdsp2pct field.
     *
     * @var        string
     */
    protected $qthdsp2pct;

    /**
     * The value for the arspsaleper3 field.
     *
     * @var        string
     */
    protected $arspsaleper3;

    /**
     * The value for the qthdsp3pct field.
     *
     * @var        string
     */
    protected $qthdsp3pct;

    /**
     * The value for the qthdexchctry field.
     *
     * @var        string
     */
    protected $qthdexchctry;

    /**
     * The value for the qthdexchrate field.
     *
     * @var        string
     */
    protected $qthdexchrate;

    /**
     * The value for the qthdtaxsub field.
     *
     * @var        string
     */
    protected $qthdtaxsub;

    /**
     * The value for the qthdnontaxsub field.
     *
     * @var        string
     */
    protected $qthdnontaxsub;

    /**
     * The value for the qthdtaxtot field.
     *
     * @var        string
     */
    protected $qthdtaxtot;

    /**
     * The value for the qthdfrttot field.
     *
     * @var        string
     */
    protected $qthdfrttot;

    /**
     * The value for the qthdmisctot field.
     *
     * @var        string
     */
    protected $qthdmisctot;

    /**
     * The value for the qthdordrtot field.
     *
     * @var        string
     */
    protected $qthdordrtot;

    /**
     * The value for the qthdcosttot field.
     *
     * @var        string
     */
    protected $qthdcosttot;

    /**
     * The value for the qthdwghttot field.
     *
     * @var        string
     */
    protected $qthdwghttot;

    /**
     * The value for the qthdoldsysqtnbr field.
     *
     * @var        string
     */
    protected $qthdoldsysqtnbr;

    /**
     * The value for the qthdfob field.
     *
     * @var        string
     */
    protected $qthdfob;

    /**
     * The value for the qthddeliverydesc field.
     *
     * @var        string
     */
    protected $qthddeliverydesc;

    /**
     * The value for the qthdordercnt field.
     *
     * @var        int
     */
    protected $qthdordercnt;

    /**
     * The value for the qthdlastorder field.
     *
     * @var        string
     */
    protected $qthdlastorder;

    /**
     * The value for the intbwhse field.
     *
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the qthdcustpo field.
     *
     * @var        string
     */
    protected $qthdcustpo;

    /**
     * The value for the qthdemailaddr field.
     *
     * @var        string
     */
    protected $qthdemailaddr;

    /**
     * The value for the qthdenteredby field.
     *
     * @var        string
     */
    protected $qthdenteredby;

    /**
     * The value for the qthdentereddate field.
     *
     * @var        string
     */
    protected $qthdentereddate;

    /**
     * The value for the qthdenteredtime field.
     *
     * @var        string
     */
    protected $qthdenteredtime;

    /**
     * The value for the qthdprintformat field.
     *
     * @var        string
     */
    protected $qthdprintformat;

    /**
     * The value for the qthdprojectid field.
     *
     * @var        string
     */
    protected $qthdprojectid;

    /**
     * The value for the qthdrevtime field.
     *
     * @var        string
     */
    protected $qthdrevtime;

    /**
     * The value for the qthdref field.
     *
     * @var        string
     */
    protected $qthdref;

    /**
     * The value for the qthdcareof field.
     *
     * @var        string
     */
    protected $qthdcareof;

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
     * @var        ObjectCollection|ChildQuoteDetail[] Collection to store aggregation of ChildQuoteDetail objects.
     */
    protected $collQuoteDetails;
    protected $collQuoteDetailsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildQuoteDetail[]
     */
    protected $quoteDetailsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->qthdid = '';
    }

    /**
     * Initializes internal state of Base\Quote object.
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
     * Compares this with another <code>Quote</code> instance.  If
     * <code>obj</code> is an instance of <code>Quote</code>, delegates to
     * <code>equals(Quote)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|Quote The current object, for fluid interface
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
     * Get the [qthdid] column value.
     *
     * @return string
     */
    public function getQthdid()
    {
        return $this->qthdid;
    }

    /**
     * Get the [qthdstat] column value.
     *
     * @return string
     */
    public function getQthdstat()
    {
        return $this->qthdstat;
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
     * Get the [qthdbtname] column value.
     *
     * @return string
     */
    public function getQthdbtname()
    {
        return $this->qthdbtname;
    }

    /**
     * Get the [qthdbtadr1] column value.
     *
     * @return string
     */
    public function getQthdbtadr1()
    {
        return $this->qthdbtadr1;
    }

    /**
     * Get the [qthdbtadr2] column value.
     *
     * @return string
     */
    public function getQthdbtadr2()
    {
        return $this->qthdbtadr2;
    }

    /**
     * Get the [qthdbtadr3] column value.
     *
     * @return string
     */
    public function getQthdbtadr3()
    {
        return $this->qthdbtadr3;
    }

    /**
     * Get the [qthdbtctry] column value.
     *
     * @return string
     */
    public function getQthdbtctry()
    {
        return $this->qthdbtctry;
    }

    /**
     * Get the [qthdbtcity] column value.
     *
     * @return string
     */
    public function getQthdbtcity()
    {
        return $this->qthdbtcity;
    }

    /**
     * Get the [qthdbtstat] column value.
     *
     * @return string
     */
    public function getQthdbtstat()
    {
        return $this->qthdbtstat;
    }

    /**
     * Get the [qthdbtzipcode] column value.
     *
     * @return string
     */
    public function getQthdbtzipcode()
    {
        return $this->qthdbtzipcode;
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
     * Get the [qthdstname] column value.
     *
     * @return string
     */
    public function getQthdstname()
    {
        return $this->qthdstname;
    }

    /**
     * Get the [qthdstadr1] column value.
     *
     * @return string
     */
    public function getQthdstadr1()
    {
        return $this->qthdstadr1;
    }

    /**
     * Get the [qthdstadr2] column value.
     *
     * @return string
     */
    public function getQthdstadr2()
    {
        return $this->qthdstadr2;
    }

    /**
     * Get the [qthdstadr3] column value.
     *
     * @return string
     */
    public function getQthdstadr3()
    {
        return $this->qthdstadr3;
    }

    /**
     * Get the [qthdstctry] column value.
     *
     * @return string
     */
    public function getQthdstctry()
    {
        return $this->qthdstctry;
    }

    /**
     * Get the [qthdstcity] column value.
     *
     * @return string
     */
    public function getQthdstcity()
    {
        return $this->qthdstcity;
    }

    /**
     * Get the [qthdststat] column value.
     *
     * @return string
     */
    public function getQthdststat()
    {
        return $this->qthdststat;
    }

    /**
     * Get the [qthdstzipcode] column value.
     *
     * @return string
     */
    public function getQthdstzipcode()
    {
        return $this->qthdstzipcode;
    }

    /**
     * Get the [qthdcont] column value.
     *
     * @return string
     */
    public function getQthdcont()
    {
        return $this->qthdcont;
    }

    /**
     * Get the [qthdteleintl] column value.
     *
     * @return string
     */
    public function getQthdteleintl()
    {
        return $this->qthdteleintl;
    }

    /**
     * Get the [qthdtelenbr] column value.
     *
     * @return string
     */
    public function getQthdtelenbr()
    {
        return $this->qthdtelenbr;
    }

    /**
     * Get the [qthdteleext] column value.
     *
     * @return string
     */
    public function getQthdteleext()
    {
        return $this->qthdteleext;
    }

    /**
     * Get the [qthdfaxintl] column value.
     *
     * @return string
     */
    public function getQthdfaxintl()
    {
        return $this->qthdfaxintl;
    }

    /**
     * Get the [qthdfaxnbr] column value.
     *
     * @return string
     */
    public function getQthdfaxnbr()
    {
        return $this->qthdfaxnbr;
    }

    /**
     * Get the [qthdquotdate] column value.
     *
     * @return string
     */
    public function getQthdquotdate()
    {
        return $this->qthdquotdate;
    }

    /**
     * Get the [qthdrevdate] column value.
     *
     * @return string
     */
    public function getQthdrevdate()
    {
        return $this->qthdrevdate;
    }

    /**
     * Get the [qthdexpdate] column value.
     *
     * @return string
     */
    public function getQthdexpdate()
    {
        return $this->qthdexpdate;
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
     * Get the [artbmtaxcode] column value.
     *
     * @return string
     */
    public function getArtbmtaxcode()
    {
        return $this->artbmtaxcode;
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
     * Get the [arspsaleper1] column value.
     *
     * @return string
     */
    public function getArspsaleper1()
    {
        return $this->arspsaleper1;
    }

    /**
     * Get the [qthdsp1pct] column value.
     *
     * @return string
     */
    public function getQthdsp1pct()
    {
        return $this->qthdsp1pct;
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
     * Get the [qthdsp2pct] column value.
     *
     * @return string
     */
    public function getQthdsp2pct()
    {
        return $this->qthdsp2pct;
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
     * Get the [qthdsp3pct] column value.
     *
     * @return string
     */
    public function getQthdsp3pct()
    {
        return $this->qthdsp3pct;
    }

    /**
     * Get the [qthdexchctry] column value.
     *
     * @return string
     */
    public function getQthdexchctry()
    {
        return $this->qthdexchctry;
    }

    /**
     * Get the [qthdexchrate] column value.
     *
     * @return string
     */
    public function getQthdexchrate()
    {
        return $this->qthdexchrate;
    }

    /**
     * Get the [qthdtaxsub] column value.
     *
     * @return string
     */
    public function getQthdtaxsub()
    {
        return $this->qthdtaxsub;
    }

    /**
     * Get the [qthdnontaxsub] column value.
     *
     * @return string
     */
    public function getQthdnontaxsub()
    {
        return $this->qthdnontaxsub;
    }

    /**
     * Get the [qthdtaxtot] column value.
     *
     * @return string
     */
    public function getQthdtaxtot()
    {
        return $this->qthdtaxtot;
    }

    /**
     * Get the [qthdfrttot] column value.
     *
     * @return string
     */
    public function getQthdfrttot()
    {
        return $this->qthdfrttot;
    }

    /**
     * Get the [qthdmisctot] column value.
     *
     * @return string
     */
    public function getQthdmisctot()
    {
        return $this->qthdmisctot;
    }

    /**
     * Get the [qthdordrtot] column value.
     *
     * @return string
     */
    public function getQthdordrtot()
    {
        return $this->qthdordrtot;
    }

    /**
     * Get the [qthdcosttot] column value.
     *
     * @return string
     */
    public function getQthdcosttot()
    {
        return $this->qthdcosttot;
    }

    /**
     * Get the [qthdwghttot] column value.
     *
     * @return string
     */
    public function getQthdwghttot()
    {
        return $this->qthdwghttot;
    }

    /**
     * Get the [qthdoldsysqtnbr] column value.
     *
     * @return string
     */
    public function getQthdoldsysqtnbr()
    {
        return $this->qthdoldsysqtnbr;
    }

    /**
     * Get the [qthdfob] column value.
     *
     * @return string
     */
    public function getQthdfob()
    {
        return $this->qthdfob;
    }

    /**
     * Get the [qthddeliverydesc] column value.
     *
     * @return string
     */
    public function getQthddeliverydesc()
    {
        return $this->qthddeliverydesc;
    }

    /**
     * Get the [qthdordercnt] column value.
     *
     * @return int
     */
    public function getQthdordercnt()
    {
        return $this->qthdordercnt;
    }

    /**
     * Get the [qthdlastorder] column value.
     *
     * @return string
     */
    public function getQthdlastorder()
    {
        return $this->qthdlastorder;
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
     * Get the [qthdcustpo] column value.
     *
     * @return string
     */
    public function getQthdcustpo()
    {
        return $this->qthdcustpo;
    }

    /**
     * Get the [qthdemailaddr] column value.
     *
     * @return string
     */
    public function getQthdemailaddr()
    {
        return $this->qthdemailaddr;
    }

    /**
     * Get the [qthdenteredby] column value.
     *
     * @return string
     */
    public function getQthdenteredby()
    {
        return $this->qthdenteredby;
    }

    /**
     * Get the [qthdentereddate] column value.
     *
     * @return string
     */
    public function getQthdentereddate()
    {
        return $this->qthdentereddate;
    }

    /**
     * Get the [qthdenteredtime] column value.
     *
     * @return string
     */
    public function getQthdenteredtime()
    {
        return $this->qthdenteredtime;
    }

    /**
     * Get the [qthdprintformat] column value.
     *
     * @return string
     */
    public function getQthdprintformat()
    {
        return $this->qthdprintformat;
    }

    /**
     * Get the [qthdprojectid] column value.
     *
     * @return string
     */
    public function getQthdprojectid()
    {
        return $this->qthdprojectid;
    }

    /**
     * Get the [qthdrevtime] column value.
     *
     * @return string
     */
    public function getQthdrevtime()
    {
        return $this->qthdrevtime;
    }

    /**
     * Get the [qthdref] column value.
     *
     * @return string
     */
    public function getQthdref()
    {
        return $this->qthdref;
    }

    /**
     * Get the [qthdcareof] column value.
     *
     * @return string
     */
    public function getQthdcareof()
    {
        return $this->qthdcareof;
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
     * Set the value of [qthdid] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdid !== $v) {
            $this->qthdid = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDID] = true;
        }

        return $this;
    } // setQthdid()

    /**
     * Set the value of [qthdstat] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdstat !== $v) {
            $this->qthdstat = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDSTAT] = true;
        }

        return $this;
    } // setQthdstat()

    /**
     * Set the value of [arcucustid] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setArcucustid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arcucustid !== $v) {
            $this->arcucustid = $v;
            $this->modifiedColumns[QuoteTableMap::COL_ARCUCUSTID] = true;
        }

        return $this;
    } // setArcucustid()

    /**
     * Set the value of [qthdbtname] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdbtname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdbtname !== $v) {
            $this->qthdbtname = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDBTNAME] = true;
        }

        return $this;
    } // setQthdbtname()

    /**
     * Set the value of [qthdbtadr1] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdbtadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdbtadr1 !== $v) {
            $this->qthdbtadr1 = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDBTADR1] = true;
        }

        return $this;
    } // setQthdbtadr1()

    /**
     * Set the value of [qthdbtadr2] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdbtadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdbtadr2 !== $v) {
            $this->qthdbtadr2 = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDBTADR2] = true;
        }

        return $this;
    } // setQthdbtadr2()

    /**
     * Set the value of [qthdbtadr3] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdbtadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdbtadr3 !== $v) {
            $this->qthdbtadr3 = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDBTADR3] = true;
        }

        return $this;
    } // setQthdbtadr3()

    /**
     * Set the value of [qthdbtctry] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdbtctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdbtctry !== $v) {
            $this->qthdbtctry = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDBTCTRY] = true;
        }

        return $this;
    } // setQthdbtctry()

    /**
     * Set the value of [qthdbtcity] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdbtcity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdbtcity !== $v) {
            $this->qthdbtcity = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDBTCITY] = true;
        }

        return $this;
    } // setQthdbtcity()

    /**
     * Set the value of [qthdbtstat] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdbtstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdbtstat !== $v) {
            $this->qthdbtstat = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDBTSTAT] = true;
        }

        return $this;
    } // setQthdbtstat()

    /**
     * Set the value of [qthdbtzipcode] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdbtzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdbtzipcode !== $v) {
            $this->qthdbtzipcode = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDBTZIPCODE] = true;
        }

        return $this;
    } // setQthdbtzipcode()

    /**
     * Set the value of [arstshipid] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setArstshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arstshipid !== $v) {
            $this->arstshipid = $v;
            $this->modifiedColumns[QuoteTableMap::COL_ARSTSHIPID] = true;
        }

        return $this;
    } // setArstshipid()

    /**
     * Set the value of [qthdstname] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdstname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdstname !== $v) {
            $this->qthdstname = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDSTNAME] = true;
        }

        return $this;
    } // setQthdstname()

    /**
     * Set the value of [qthdstadr1] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdstadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdstadr1 !== $v) {
            $this->qthdstadr1 = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDSTADR1] = true;
        }

        return $this;
    } // setQthdstadr1()

    /**
     * Set the value of [qthdstadr2] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdstadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdstadr2 !== $v) {
            $this->qthdstadr2 = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDSTADR2] = true;
        }

        return $this;
    } // setQthdstadr2()

    /**
     * Set the value of [qthdstadr3] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdstadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdstadr3 !== $v) {
            $this->qthdstadr3 = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDSTADR3] = true;
        }

        return $this;
    } // setQthdstadr3()

    /**
     * Set the value of [qthdstctry] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdstctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdstctry !== $v) {
            $this->qthdstctry = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDSTCTRY] = true;
        }

        return $this;
    } // setQthdstctry()

    /**
     * Set the value of [qthdstcity] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdstcity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdstcity !== $v) {
            $this->qthdstcity = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDSTCITY] = true;
        }

        return $this;
    } // setQthdstcity()

    /**
     * Set the value of [qthdststat] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdststat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdststat !== $v) {
            $this->qthdststat = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDSTSTAT] = true;
        }

        return $this;
    } // setQthdststat()

    /**
     * Set the value of [qthdstzipcode] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdstzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdstzipcode !== $v) {
            $this->qthdstzipcode = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDSTZIPCODE] = true;
        }

        return $this;
    } // setQthdstzipcode()

    /**
     * Set the value of [qthdcont] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdcont($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdcont !== $v) {
            $this->qthdcont = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDCONT] = true;
        }

        return $this;
    } // setQthdcont()

    /**
     * Set the value of [qthdteleintl] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdteleintl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdteleintl !== $v) {
            $this->qthdteleintl = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDTELEINTL] = true;
        }

        return $this;
    } // setQthdteleintl()

    /**
     * Set the value of [qthdtelenbr] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdtelenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdtelenbr !== $v) {
            $this->qthdtelenbr = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDTELENBR] = true;
        }

        return $this;
    } // setQthdtelenbr()

    /**
     * Set the value of [qthdteleext] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdteleext($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdteleext !== $v) {
            $this->qthdteleext = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDTELEEXT] = true;
        }

        return $this;
    } // setQthdteleext()

    /**
     * Set the value of [qthdfaxintl] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdfaxintl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdfaxintl !== $v) {
            $this->qthdfaxintl = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDFAXINTL] = true;
        }

        return $this;
    } // setQthdfaxintl()

    /**
     * Set the value of [qthdfaxnbr] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdfaxnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdfaxnbr !== $v) {
            $this->qthdfaxnbr = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDFAXNBR] = true;
        }

        return $this;
    } // setQthdfaxnbr()

    /**
     * Set the value of [qthdquotdate] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdquotdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdquotdate !== $v) {
            $this->qthdquotdate = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDQUOTDATE] = true;
        }

        return $this;
    } // setQthdquotdate()

    /**
     * Set the value of [qthdrevdate] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdrevdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdrevdate !== $v) {
            $this->qthdrevdate = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDREVDATE] = true;
        }

        return $this;
    } // setQthdrevdate()

    /**
     * Set the value of [qthdexpdate] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdexpdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdexpdate !== $v) {
            $this->qthdexpdate = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDEXPDATE] = true;
        }

        return $this;
    } // setQthdexpdate()

    /**
     * Set the value of [artbpriccode] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setArtbpriccode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbpriccode !== $v) {
            $this->artbpriccode = $v;
            $this->modifiedColumns[QuoteTableMap::COL_ARTBPRICCODE] = true;
        }

        return $this;
    } // setArtbpriccode()

    /**
     * Set the value of [artbmtaxcode] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setArtbmtaxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxcode !== $v) {
            $this->artbmtaxcode = $v;
            $this->modifiedColumns[QuoteTableMap::COL_ARTBMTAXCODE] = true;
        }

        return $this;
    } // setArtbmtaxcode()

    /**
     * Set the value of [artmtermcd] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setArtmtermcd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artmtermcd !== $v) {
            $this->artmtermcd = $v;
            $this->modifiedColumns[QuoteTableMap::COL_ARTMTERMCD] = true;
        }

        return $this;
    } // setArtmtermcd()

    /**
     * Set the value of [artbshipvia] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setArtbshipvia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbshipvia !== $v) {
            $this->artbshipvia = $v;
            $this->modifiedColumns[QuoteTableMap::COL_ARTBSHIPVIA] = true;
        }

        return $this;
    } // setArtbshipvia()

    /**
     * Set the value of [arspsaleper1] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setArspsaleper1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper1 !== $v) {
            $this->arspsaleper1 = $v;
            $this->modifiedColumns[QuoteTableMap::COL_ARSPSALEPER1] = true;
        }

        return $this;
    } // setArspsaleper1()

    /**
     * Set the value of [qthdsp1pct] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdsp1pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdsp1pct !== $v) {
            $this->qthdsp1pct = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDSP1PCT] = true;
        }

        return $this;
    } // setQthdsp1pct()

    /**
     * Set the value of [arspsaleper2] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setArspsaleper2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper2 !== $v) {
            $this->arspsaleper2 = $v;
            $this->modifiedColumns[QuoteTableMap::COL_ARSPSALEPER2] = true;
        }

        return $this;
    } // setArspsaleper2()

    /**
     * Set the value of [qthdsp2pct] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdsp2pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdsp2pct !== $v) {
            $this->qthdsp2pct = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDSP2PCT] = true;
        }

        return $this;
    } // setQthdsp2pct()

    /**
     * Set the value of [arspsaleper3] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setArspsaleper3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->arspsaleper3 !== $v) {
            $this->arspsaleper3 = $v;
            $this->modifiedColumns[QuoteTableMap::COL_ARSPSALEPER3] = true;
        }

        return $this;
    } // setArspsaleper3()

    /**
     * Set the value of [qthdsp3pct] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdsp3pct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdsp3pct !== $v) {
            $this->qthdsp3pct = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDSP3PCT] = true;
        }

        return $this;
    } // setQthdsp3pct()

    /**
     * Set the value of [qthdexchctry] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdexchctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdexchctry !== $v) {
            $this->qthdexchctry = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDEXCHCTRY] = true;
        }

        return $this;
    } // setQthdexchctry()

    /**
     * Set the value of [qthdexchrate] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdexchrate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdexchrate !== $v) {
            $this->qthdexchrate = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDEXCHRATE] = true;
        }

        return $this;
    } // setQthdexchrate()

    /**
     * Set the value of [qthdtaxsub] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdtaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdtaxsub !== $v) {
            $this->qthdtaxsub = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDTAXSUB] = true;
        }

        return $this;
    } // setQthdtaxsub()

    /**
     * Set the value of [qthdnontaxsub] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdnontaxsub($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdnontaxsub !== $v) {
            $this->qthdnontaxsub = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDNONTAXSUB] = true;
        }

        return $this;
    } // setQthdnontaxsub()

    /**
     * Set the value of [qthdtaxtot] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdtaxtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdtaxtot !== $v) {
            $this->qthdtaxtot = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDTAXTOT] = true;
        }

        return $this;
    } // setQthdtaxtot()

    /**
     * Set the value of [qthdfrttot] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdfrttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdfrttot !== $v) {
            $this->qthdfrttot = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDFRTTOT] = true;
        }

        return $this;
    } // setQthdfrttot()

    /**
     * Set the value of [qthdmisctot] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdmisctot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdmisctot !== $v) {
            $this->qthdmisctot = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDMISCTOT] = true;
        }

        return $this;
    } // setQthdmisctot()

    /**
     * Set the value of [qthdordrtot] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdordrtot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdordrtot !== $v) {
            $this->qthdordrtot = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDORDRTOT] = true;
        }

        return $this;
    } // setQthdordrtot()

    /**
     * Set the value of [qthdcosttot] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdcosttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdcosttot !== $v) {
            $this->qthdcosttot = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDCOSTTOT] = true;
        }

        return $this;
    } // setQthdcosttot()

    /**
     * Set the value of [qthdwghttot] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdwghttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdwghttot !== $v) {
            $this->qthdwghttot = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDWGHTTOT] = true;
        }

        return $this;
    } // setQthdwghttot()

    /**
     * Set the value of [qthdoldsysqtnbr] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdoldsysqtnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdoldsysqtnbr !== $v) {
            $this->qthdoldsysqtnbr = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDOLDSYSQTNBR] = true;
        }

        return $this;
    } // setQthdoldsysqtnbr()

    /**
     * Set the value of [qthdfob] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdfob($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdfob !== $v) {
            $this->qthdfob = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDFOB] = true;
        }

        return $this;
    } // setQthdfob()

    /**
     * Set the value of [qthddeliverydesc] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthddeliverydesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthddeliverydesc !== $v) {
            $this->qthddeliverydesc = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDDELIVERYDESC] = true;
        }

        return $this;
    } // setQthddeliverydesc()

    /**
     * Set the value of [qthdordercnt] column.
     *
     * @param int $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdordercnt($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qthdordercnt !== $v) {
            $this->qthdordercnt = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDORDERCNT] = true;
        }

        return $this;
    } // setQthdordercnt()

    /**
     * Set the value of [qthdlastorder] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdlastorder($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdlastorder !== $v) {
            $this->qthdlastorder = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDLASTORDER] = true;
        }

        return $this;
    } // setQthdlastorder()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[QuoteTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [qthdcustpo] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdcustpo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdcustpo !== $v) {
            $this->qthdcustpo = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDCUSTPO] = true;
        }

        return $this;
    } // setQthdcustpo()

    /**
     * Set the value of [qthdemailaddr] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdemailaddr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdemailaddr !== $v) {
            $this->qthdemailaddr = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDEMAILADDR] = true;
        }

        return $this;
    } // setQthdemailaddr()

    /**
     * Set the value of [qthdenteredby] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdenteredby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdenteredby !== $v) {
            $this->qthdenteredby = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDENTEREDBY] = true;
        }

        return $this;
    } // setQthdenteredby()

    /**
     * Set the value of [qthdentereddate] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdentereddate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdentereddate !== $v) {
            $this->qthdentereddate = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDENTEREDDATE] = true;
        }

        return $this;
    } // setQthdentereddate()

    /**
     * Set the value of [qthdenteredtime] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdenteredtime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdenteredtime !== $v) {
            $this->qthdenteredtime = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDENTEREDTIME] = true;
        }

        return $this;
    } // setQthdenteredtime()

    /**
     * Set the value of [qthdprintformat] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdprintformat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdprintformat !== $v) {
            $this->qthdprintformat = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDPRINTFORMAT] = true;
        }

        return $this;
    } // setQthdprintformat()

    /**
     * Set the value of [qthdprojectid] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdprojectid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdprojectid !== $v) {
            $this->qthdprojectid = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDPROJECTID] = true;
        }

        return $this;
    } // setQthdprojectid()

    /**
     * Set the value of [qthdrevtime] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdrevtime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdrevtime !== $v) {
            $this->qthdrevtime = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDREVTIME] = true;
        }

        return $this;
    } // setQthdrevtime()

    /**
     * Set the value of [qthdref] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdref !== $v) {
            $this->qthdref = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDREF] = true;
        }

        return $this;
    } // setQthdref()

    /**
     * Set the value of [qthdcareof] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setQthdcareof($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdcareof !== $v) {
            $this->qthdcareof = $v;
            $this->modifiedColumns[QuoteTableMap::COL_QTHDCAREOF] = true;
        }

        return $this;
    } // setQthdcareof()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[QuoteTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[QuoteTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[QuoteTableMap::COL_DUMMY] = true;
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
            if ($this->qthdid !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : QuoteTableMap::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : QuoteTableMap::translateFieldName('Qthdstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : QuoteTableMap::translateFieldName('Arcucustid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arcucustid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : QuoteTableMap::translateFieldName('Qthdbtname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdbtname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : QuoteTableMap::translateFieldName('Qthdbtadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdbtadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : QuoteTableMap::translateFieldName('Qthdbtadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdbtadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : QuoteTableMap::translateFieldName('Qthdbtadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdbtadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : QuoteTableMap::translateFieldName('Qthdbtctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdbtctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : QuoteTableMap::translateFieldName('Qthdbtcity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdbtcity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : QuoteTableMap::translateFieldName('Qthdbtstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdbtstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : QuoteTableMap::translateFieldName('Qthdbtzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdbtzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : QuoteTableMap::translateFieldName('Arstshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arstshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : QuoteTableMap::translateFieldName('Qthdstname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdstname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : QuoteTableMap::translateFieldName('Qthdstadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdstadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : QuoteTableMap::translateFieldName('Qthdstadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdstadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : QuoteTableMap::translateFieldName('Qthdstadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdstadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : QuoteTableMap::translateFieldName('Qthdstctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdstctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : QuoteTableMap::translateFieldName('Qthdstcity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdstcity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : QuoteTableMap::translateFieldName('Qthdststat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdststat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : QuoteTableMap::translateFieldName('Qthdstzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdstzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : QuoteTableMap::translateFieldName('Qthdcont', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdcont = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : QuoteTableMap::translateFieldName('Qthdteleintl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdteleintl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : QuoteTableMap::translateFieldName('Qthdtelenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdtelenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : QuoteTableMap::translateFieldName('Qthdteleext', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdteleext = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : QuoteTableMap::translateFieldName('Qthdfaxintl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdfaxintl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : QuoteTableMap::translateFieldName('Qthdfaxnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdfaxnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : QuoteTableMap::translateFieldName('Qthdquotdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdquotdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : QuoteTableMap::translateFieldName('Qthdrevdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdrevdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : QuoteTableMap::translateFieldName('Qthdexpdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdexpdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : QuoteTableMap::translateFieldName('Artbpriccode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbpriccode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : QuoteTableMap::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : QuoteTableMap::translateFieldName('Artmtermcd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artmtermcd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : QuoteTableMap::translateFieldName('Artbshipvia', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbshipvia = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : QuoteTableMap::translateFieldName('Arspsaleper1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : QuoteTableMap::translateFieldName('Qthdsp1pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdsp1pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : QuoteTableMap::translateFieldName('Arspsaleper2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : QuoteTableMap::translateFieldName('Qthdsp2pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdsp2pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : QuoteTableMap::translateFieldName('Arspsaleper3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->arspsaleper3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : QuoteTableMap::translateFieldName('Qthdsp3pct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdsp3pct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : QuoteTableMap::translateFieldName('Qthdexchctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdexchctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : QuoteTableMap::translateFieldName('Qthdexchrate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdexchrate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : QuoteTableMap::translateFieldName('Qthdtaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdtaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : QuoteTableMap::translateFieldName('Qthdnontaxsub', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdnontaxsub = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : QuoteTableMap::translateFieldName('Qthdtaxtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdtaxtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : QuoteTableMap::translateFieldName('Qthdfrttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdfrttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : QuoteTableMap::translateFieldName('Qthdmisctot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdmisctot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : QuoteTableMap::translateFieldName('Qthdordrtot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdordrtot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : QuoteTableMap::translateFieldName('Qthdcosttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdcosttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : QuoteTableMap::translateFieldName('Qthdwghttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdwghttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : QuoteTableMap::translateFieldName('Qthdoldsysqtnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdoldsysqtnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : QuoteTableMap::translateFieldName('Qthdfob', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdfob = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : QuoteTableMap::translateFieldName('Qthddeliverydesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthddeliverydesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : QuoteTableMap::translateFieldName('Qthdordercnt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdordercnt = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : QuoteTableMap::translateFieldName('Qthdlastorder', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdlastorder = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : QuoteTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : QuoteTableMap::translateFieldName('Qthdcustpo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdcustpo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : QuoteTableMap::translateFieldName('Qthdemailaddr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdemailaddr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : QuoteTableMap::translateFieldName('Qthdenteredby', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdenteredby = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : QuoteTableMap::translateFieldName('Qthdentereddate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdentereddate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : QuoteTableMap::translateFieldName('Qthdenteredtime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdenteredtime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : QuoteTableMap::translateFieldName('Qthdprintformat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdprintformat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : QuoteTableMap::translateFieldName('Qthdprojectid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdprojectid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : QuoteTableMap::translateFieldName('Qthdrevtime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdrevtime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : QuoteTableMap::translateFieldName('Qthdref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : QuoteTableMap::translateFieldName('Qthdcareof', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdcareof = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : QuoteTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : QuoteTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : QuoteTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 68; // 68 = QuoteTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Quote'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(QuoteTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildQuoteQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collQuoteDetails = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see Quote::setDeleted()
     * @see Quote::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildQuoteQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteTableMap::DATABASE_NAME);
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
                QuoteTableMap::addInstanceToPool($this);
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

            if ($this->quoteDetailsScheduledForDeletion !== null) {
                if (!$this->quoteDetailsScheduledForDeletion->isEmpty()) {
                    \QuoteDetailQuery::create()
                        ->filterByPrimaryKeys($this->quoteDetailsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->quoteDetailsScheduledForDeletion = null;
                }
            }

            if ($this->collQuoteDetails !== null) {
                foreach ($this->collQuoteDetails as $referrerFK) {
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
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDID)) {
            $modifiedColumns[':p' . $index++]  = 'QthdId';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdStat';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARCUCUSTID)) {
            $modifiedColumns[':p' . $index++]  = 'ArcuCustId';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'QthdBtName';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTADR1)) {
            $modifiedColumns[':p' . $index++]  = 'QthdBtAdr1';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTADR2)) {
            $modifiedColumns[':p' . $index++]  = 'QthdBtAdr2';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTADR3)) {
            $modifiedColumns[':p' . $index++]  = 'QthdBtAdr3';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'QthdBtCtry';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTCITY)) {
            $modifiedColumns[':p' . $index++]  = 'QthdBtCity';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdBtStat';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'QthdBtZipCode';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARSTSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ArstShipId';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'QthdStName';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTADR1)) {
            $modifiedColumns[':p' . $index++]  = 'QthdStAdr1';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTADR2)) {
            $modifiedColumns[':p' . $index++]  = 'QthdStAdr2';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTADR3)) {
            $modifiedColumns[':p' . $index++]  = 'QthdStAdr3';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'QthdStCtry';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTCITY)) {
            $modifiedColumns[':p' . $index++]  = 'QthdStCity';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdStStat';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'QthdStZipCode';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDCONT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdCont';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDTELEINTL)) {
            $modifiedColumns[':p' . $index++]  = 'QthdTeleIntl';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDTELENBR)) {
            $modifiedColumns[':p' . $index++]  = 'QthdTeleNbr';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDTELEEXT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdTeleExt';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDFAXINTL)) {
            $modifiedColumns[':p' . $index++]  = 'QthdFaxIntl';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDFAXNBR)) {
            $modifiedColumns[':p' . $index++]  = 'QthdFaxNbr';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDQUOTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'QthdQuotDate';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDREVDATE)) {
            $modifiedColumns[':p' . $index++]  = 'QthdRevDate';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDEXPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'QthdExpDate';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARTBPRICCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbPricCode';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARTBMTAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMtaxCode';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARTMTERMCD)) {
            $modifiedColumns[':p' . $index++]  = 'ArtmTermCd';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARTBSHIPVIA)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbShipVia';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARSPSALEPER1)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer1';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSP1PCT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdSp1Pct';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARSPSALEPER2)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer2';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSP2PCT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdSp2Pct';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARSPSALEPER3)) {
            $modifiedColumns[':p' . $index++]  = 'ArspSalePer3';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSP3PCT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdSp3Pct';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDEXCHCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'QthdExchCtry';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDEXCHRATE)) {
            $modifiedColumns[':p' . $index++]  = 'QthdExchRate';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'QthdTaxSub';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDNONTAXSUB)) {
            $modifiedColumns[':p' . $index++]  = 'QthdNonTaxSub';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDTAXTOT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdTaxTot';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDFRTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdFrtTot';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDMISCTOT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdMiscTot';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDORDRTOT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdOrdrTot';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDCOSTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdCostTot';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDWGHTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdWghtTot';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDOLDSYSQTNBR)) {
            $modifiedColumns[':p' . $index++]  = 'QthdOldSysQtNbr';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDFOB)) {
            $modifiedColumns[':p' . $index++]  = 'QthdFob';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDDELIVERYDESC)) {
            $modifiedColumns[':p' . $index++]  = 'QthdDeliveryDesc';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDORDERCNT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdOrderCnt';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDLASTORDER)) {
            $modifiedColumns[':p' . $index++]  = 'QthdLastOrder';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDCUSTPO)) {
            $modifiedColumns[':p' . $index++]  = 'QthdCustPo';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDEMAILADDR)) {
            $modifiedColumns[':p' . $index++]  = 'QthdEmailAddr';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDENTEREDBY)) {
            $modifiedColumns[':p' . $index++]  = 'QthdEnteredBy';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDENTEREDDATE)) {
            $modifiedColumns[':p' . $index++]  = 'QthdEnteredDate';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDENTEREDTIME)) {
            $modifiedColumns[':p' . $index++]  = 'QthdEnteredTime';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDPRINTFORMAT)) {
            $modifiedColumns[':p' . $index++]  = 'QthdPrintFormat';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDPROJECTID)) {
            $modifiedColumns[':p' . $index++]  = 'QthdProjectId';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDREVTIME)) {
            $modifiedColumns[':p' . $index++]  = 'QthdRevTime';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDREF)) {
            $modifiedColumns[':p' . $index++]  = 'QthdRef';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDCAREOF)) {
            $modifiedColumns[':p' . $index++]  = 'QthdCareOf';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(QuoteTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO quote_header (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'QthdId':
                        $stmt->bindValue($identifier, $this->qthdid, PDO::PARAM_STR);
                        break;
                    case 'QthdStat':
                        $stmt->bindValue($identifier, $this->qthdstat, PDO::PARAM_STR);
                        break;
                    case 'ArcuCustId':
                        $stmt->bindValue($identifier, $this->arcucustid, PDO::PARAM_STR);
                        break;
                    case 'QthdBtName':
                        $stmt->bindValue($identifier, $this->qthdbtname, PDO::PARAM_STR);
                        break;
                    case 'QthdBtAdr1':
                        $stmt->bindValue($identifier, $this->qthdbtadr1, PDO::PARAM_STR);
                        break;
                    case 'QthdBtAdr2':
                        $stmt->bindValue($identifier, $this->qthdbtadr2, PDO::PARAM_STR);
                        break;
                    case 'QthdBtAdr3':
                        $stmt->bindValue($identifier, $this->qthdbtadr3, PDO::PARAM_STR);
                        break;
                    case 'QthdBtCtry':
                        $stmt->bindValue($identifier, $this->qthdbtctry, PDO::PARAM_STR);
                        break;
                    case 'QthdBtCity':
                        $stmt->bindValue($identifier, $this->qthdbtcity, PDO::PARAM_STR);
                        break;
                    case 'QthdBtStat':
                        $stmt->bindValue($identifier, $this->qthdbtstat, PDO::PARAM_STR);
                        break;
                    case 'QthdBtZipCode':
                        $stmt->bindValue($identifier, $this->qthdbtzipcode, PDO::PARAM_STR);
                        break;
                    case 'ArstShipId':
                        $stmt->bindValue($identifier, $this->arstshipid, PDO::PARAM_STR);
                        break;
                    case 'QthdStName':
                        $stmt->bindValue($identifier, $this->qthdstname, PDO::PARAM_STR);
                        break;
                    case 'QthdStAdr1':
                        $stmt->bindValue($identifier, $this->qthdstadr1, PDO::PARAM_STR);
                        break;
                    case 'QthdStAdr2':
                        $stmt->bindValue($identifier, $this->qthdstadr2, PDO::PARAM_STR);
                        break;
                    case 'QthdStAdr3':
                        $stmt->bindValue($identifier, $this->qthdstadr3, PDO::PARAM_STR);
                        break;
                    case 'QthdStCtry':
                        $stmt->bindValue($identifier, $this->qthdstctry, PDO::PARAM_STR);
                        break;
                    case 'QthdStCity':
                        $stmt->bindValue($identifier, $this->qthdstcity, PDO::PARAM_STR);
                        break;
                    case 'QthdStStat':
                        $stmt->bindValue($identifier, $this->qthdststat, PDO::PARAM_STR);
                        break;
                    case 'QthdStZipCode':
                        $stmt->bindValue($identifier, $this->qthdstzipcode, PDO::PARAM_STR);
                        break;
                    case 'QthdCont':
                        $stmt->bindValue($identifier, $this->qthdcont, PDO::PARAM_STR);
                        break;
                    case 'QthdTeleIntl':
                        $stmt->bindValue($identifier, $this->qthdteleintl, PDO::PARAM_STR);
                        break;
                    case 'QthdTeleNbr':
                        $stmt->bindValue($identifier, $this->qthdtelenbr, PDO::PARAM_STR);
                        break;
                    case 'QthdTeleExt':
                        $stmt->bindValue($identifier, $this->qthdteleext, PDO::PARAM_STR);
                        break;
                    case 'QthdFaxIntl':
                        $stmt->bindValue($identifier, $this->qthdfaxintl, PDO::PARAM_STR);
                        break;
                    case 'QthdFaxNbr':
                        $stmt->bindValue($identifier, $this->qthdfaxnbr, PDO::PARAM_STR);
                        break;
                    case 'QthdQuotDate':
                        $stmt->bindValue($identifier, $this->qthdquotdate, PDO::PARAM_STR);
                        break;
                    case 'QthdRevDate':
                        $stmt->bindValue($identifier, $this->qthdrevdate, PDO::PARAM_STR);
                        break;
                    case 'QthdExpDate':
                        $stmt->bindValue($identifier, $this->qthdexpdate, PDO::PARAM_STR);
                        break;
                    case 'ArtbPricCode':
                        $stmt->bindValue($identifier, $this->artbpriccode, PDO::PARAM_STR);
                        break;
                    case 'ArtbMtaxCode':
                        $stmt->bindValue($identifier, $this->artbmtaxcode, PDO::PARAM_STR);
                        break;
                    case 'ArtmTermCd':
                        $stmt->bindValue($identifier, $this->artmtermcd, PDO::PARAM_STR);
                        break;
                    case 'ArtbShipVia':
                        $stmt->bindValue($identifier, $this->artbshipvia, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer1':
                        $stmt->bindValue($identifier, $this->arspsaleper1, PDO::PARAM_STR);
                        break;
                    case 'QthdSp1Pct':
                        $stmt->bindValue($identifier, $this->qthdsp1pct, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer2':
                        $stmt->bindValue($identifier, $this->arspsaleper2, PDO::PARAM_STR);
                        break;
                    case 'QthdSp2Pct':
                        $stmt->bindValue($identifier, $this->qthdsp2pct, PDO::PARAM_STR);
                        break;
                    case 'ArspSalePer3':
                        $stmt->bindValue($identifier, $this->arspsaleper3, PDO::PARAM_STR);
                        break;
                    case 'QthdSp3Pct':
                        $stmt->bindValue($identifier, $this->qthdsp3pct, PDO::PARAM_STR);
                        break;
                    case 'QthdExchCtry':
                        $stmt->bindValue($identifier, $this->qthdexchctry, PDO::PARAM_STR);
                        break;
                    case 'QthdExchRate':
                        $stmt->bindValue($identifier, $this->qthdexchrate, PDO::PARAM_STR);
                        break;
                    case 'QthdTaxSub':
                        $stmt->bindValue($identifier, $this->qthdtaxsub, PDO::PARAM_STR);
                        break;
                    case 'QthdNonTaxSub':
                        $stmt->bindValue($identifier, $this->qthdnontaxsub, PDO::PARAM_STR);
                        break;
                    case 'QthdTaxTot':
                        $stmt->bindValue($identifier, $this->qthdtaxtot, PDO::PARAM_STR);
                        break;
                    case 'QthdFrtTot':
                        $stmt->bindValue($identifier, $this->qthdfrttot, PDO::PARAM_STR);
                        break;
                    case 'QthdMiscTot':
                        $stmt->bindValue($identifier, $this->qthdmisctot, PDO::PARAM_STR);
                        break;
                    case 'QthdOrdrTot':
                        $stmt->bindValue($identifier, $this->qthdordrtot, PDO::PARAM_STR);
                        break;
                    case 'QthdCostTot':
                        $stmt->bindValue($identifier, $this->qthdcosttot, PDO::PARAM_STR);
                        break;
                    case 'QthdWghtTot':
                        $stmt->bindValue($identifier, $this->qthdwghttot, PDO::PARAM_STR);
                        break;
                    case 'QthdOldSysQtNbr':
                        $stmt->bindValue($identifier, $this->qthdoldsysqtnbr, PDO::PARAM_STR);
                        break;
                    case 'QthdFob':
                        $stmt->bindValue($identifier, $this->qthdfob, PDO::PARAM_STR);
                        break;
                    case 'QthdDeliveryDesc':
                        $stmt->bindValue($identifier, $this->qthddeliverydesc, PDO::PARAM_STR);
                        break;
                    case 'QthdOrderCnt':
                        $stmt->bindValue($identifier, $this->qthdordercnt, PDO::PARAM_INT);
                        break;
                    case 'QthdLastOrder':
                        $stmt->bindValue($identifier, $this->qthdlastorder, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'QthdCustPo':
                        $stmt->bindValue($identifier, $this->qthdcustpo, PDO::PARAM_STR);
                        break;
                    case 'QthdEmailAddr':
                        $stmt->bindValue($identifier, $this->qthdemailaddr, PDO::PARAM_STR);
                        break;
                    case 'QthdEnteredBy':
                        $stmt->bindValue($identifier, $this->qthdenteredby, PDO::PARAM_STR);
                        break;
                    case 'QthdEnteredDate':
                        $stmt->bindValue($identifier, $this->qthdentereddate, PDO::PARAM_STR);
                        break;
                    case 'QthdEnteredTime':
                        $stmt->bindValue($identifier, $this->qthdenteredtime, PDO::PARAM_STR);
                        break;
                    case 'QthdPrintFormat':
                        $stmt->bindValue($identifier, $this->qthdprintformat, PDO::PARAM_STR);
                        break;
                    case 'QthdProjectId':
                        $stmt->bindValue($identifier, $this->qthdprojectid, PDO::PARAM_STR);
                        break;
                    case 'QthdRevTime':
                        $stmt->bindValue($identifier, $this->qthdrevtime, PDO::PARAM_STR);
                        break;
                    case 'QthdRef':
                        $stmt->bindValue($identifier, $this->qthdref, PDO::PARAM_STR);
                        break;
                    case 'QthdCareOf':
                        $stmt->bindValue($identifier, $this->qthdcareof, PDO::PARAM_STR);
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
        $pos = QuoteTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getQthdid();
                break;
            case 1:
                return $this->getQthdstat();
                break;
            case 2:
                return $this->getArcucustid();
                break;
            case 3:
                return $this->getQthdbtname();
                break;
            case 4:
                return $this->getQthdbtadr1();
                break;
            case 5:
                return $this->getQthdbtadr2();
                break;
            case 6:
                return $this->getQthdbtadr3();
                break;
            case 7:
                return $this->getQthdbtctry();
                break;
            case 8:
                return $this->getQthdbtcity();
                break;
            case 9:
                return $this->getQthdbtstat();
                break;
            case 10:
                return $this->getQthdbtzipcode();
                break;
            case 11:
                return $this->getArstshipid();
                break;
            case 12:
                return $this->getQthdstname();
                break;
            case 13:
                return $this->getQthdstadr1();
                break;
            case 14:
                return $this->getQthdstadr2();
                break;
            case 15:
                return $this->getQthdstadr3();
                break;
            case 16:
                return $this->getQthdstctry();
                break;
            case 17:
                return $this->getQthdstcity();
                break;
            case 18:
                return $this->getQthdststat();
                break;
            case 19:
                return $this->getQthdstzipcode();
                break;
            case 20:
                return $this->getQthdcont();
                break;
            case 21:
                return $this->getQthdteleintl();
                break;
            case 22:
                return $this->getQthdtelenbr();
                break;
            case 23:
                return $this->getQthdteleext();
                break;
            case 24:
                return $this->getQthdfaxintl();
                break;
            case 25:
                return $this->getQthdfaxnbr();
                break;
            case 26:
                return $this->getQthdquotdate();
                break;
            case 27:
                return $this->getQthdrevdate();
                break;
            case 28:
                return $this->getQthdexpdate();
                break;
            case 29:
                return $this->getArtbpriccode();
                break;
            case 30:
                return $this->getArtbmtaxcode();
                break;
            case 31:
                return $this->getArtmtermcd();
                break;
            case 32:
                return $this->getArtbshipvia();
                break;
            case 33:
                return $this->getArspsaleper1();
                break;
            case 34:
                return $this->getQthdsp1pct();
                break;
            case 35:
                return $this->getArspsaleper2();
                break;
            case 36:
                return $this->getQthdsp2pct();
                break;
            case 37:
                return $this->getArspsaleper3();
                break;
            case 38:
                return $this->getQthdsp3pct();
                break;
            case 39:
                return $this->getQthdexchctry();
                break;
            case 40:
                return $this->getQthdexchrate();
                break;
            case 41:
                return $this->getQthdtaxsub();
                break;
            case 42:
                return $this->getQthdnontaxsub();
                break;
            case 43:
                return $this->getQthdtaxtot();
                break;
            case 44:
                return $this->getQthdfrttot();
                break;
            case 45:
                return $this->getQthdmisctot();
                break;
            case 46:
                return $this->getQthdordrtot();
                break;
            case 47:
                return $this->getQthdcosttot();
                break;
            case 48:
                return $this->getQthdwghttot();
                break;
            case 49:
                return $this->getQthdoldsysqtnbr();
                break;
            case 50:
                return $this->getQthdfob();
                break;
            case 51:
                return $this->getQthddeliverydesc();
                break;
            case 52:
                return $this->getQthdordercnt();
                break;
            case 53:
                return $this->getQthdlastorder();
                break;
            case 54:
                return $this->getIntbwhse();
                break;
            case 55:
                return $this->getQthdcustpo();
                break;
            case 56:
                return $this->getQthdemailaddr();
                break;
            case 57:
                return $this->getQthdenteredby();
                break;
            case 58:
                return $this->getQthdentereddate();
                break;
            case 59:
                return $this->getQthdenteredtime();
                break;
            case 60:
                return $this->getQthdprintformat();
                break;
            case 61:
                return $this->getQthdprojectid();
                break;
            case 62:
                return $this->getQthdrevtime();
                break;
            case 63:
                return $this->getQthdref();
                break;
            case 64:
                return $this->getQthdcareof();
                break;
            case 65:
                return $this->getDateupdtd();
                break;
            case 66:
                return $this->getTimeupdtd();
                break;
            case 67:
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

        if (isset($alreadyDumpedObjects['Quote'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Quote'][$this->hashCode()] = true;
        $keys = QuoteTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getQthdid(),
            $keys[1] => $this->getQthdstat(),
            $keys[2] => $this->getArcucustid(),
            $keys[3] => $this->getQthdbtname(),
            $keys[4] => $this->getQthdbtadr1(),
            $keys[5] => $this->getQthdbtadr2(),
            $keys[6] => $this->getQthdbtadr3(),
            $keys[7] => $this->getQthdbtctry(),
            $keys[8] => $this->getQthdbtcity(),
            $keys[9] => $this->getQthdbtstat(),
            $keys[10] => $this->getQthdbtzipcode(),
            $keys[11] => $this->getArstshipid(),
            $keys[12] => $this->getQthdstname(),
            $keys[13] => $this->getQthdstadr1(),
            $keys[14] => $this->getQthdstadr2(),
            $keys[15] => $this->getQthdstadr3(),
            $keys[16] => $this->getQthdstctry(),
            $keys[17] => $this->getQthdstcity(),
            $keys[18] => $this->getQthdststat(),
            $keys[19] => $this->getQthdstzipcode(),
            $keys[20] => $this->getQthdcont(),
            $keys[21] => $this->getQthdteleintl(),
            $keys[22] => $this->getQthdtelenbr(),
            $keys[23] => $this->getQthdteleext(),
            $keys[24] => $this->getQthdfaxintl(),
            $keys[25] => $this->getQthdfaxnbr(),
            $keys[26] => $this->getQthdquotdate(),
            $keys[27] => $this->getQthdrevdate(),
            $keys[28] => $this->getQthdexpdate(),
            $keys[29] => $this->getArtbpriccode(),
            $keys[30] => $this->getArtbmtaxcode(),
            $keys[31] => $this->getArtmtermcd(),
            $keys[32] => $this->getArtbshipvia(),
            $keys[33] => $this->getArspsaleper1(),
            $keys[34] => $this->getQthdsp1pct(),
            $keys[35] => $this->getArspsaleper2(),
            $keys[36] => $this->getQthdsp2pct(),
            $keys[37] => $this->getArspsaleper3(),
            $keys[38] => $this->getQthdsp3pct(),
            $keys[39] => $this->getQthdexchctry(),
            $keys[40] => $this->getQthdexchrate(),
            $keys[41] => $this->getQthdtaxsub(),
            $keys[42] => $this->getQthdnontaxsub(),
            $keys[43] => $this->getQthdtaxtot(),
            $keys[44] => $this->getQthdfrttot(),
            $keys[45] => $this->getQthdmisctot(),
            $keys[46] => $this->getQthdordrtot(),
            $keys[47] => $this->getQthdcosttot(),
            $keys[48] => $this->getQthdwghttot(),
            $keys[49] => $this->getQthdoldsysqtnbr(),
            $keys[50] => $this->getQthdfob(),
            $keys[51] => $this->getQthddeliverydesc(),
            $keys[52] => $this->getQthdordercnt(),
            $keys[53] => $this->getQthdlastorder(),
            $keys[54] => $this->getIntbwhse(),
            $keys[55] => $this->getQthdcustpo(),
            $keys[56] => $this->getQthdemailaddr(),
            $keys[57] => $this->getQthdenteredby(),
            $keys[58] => $this->getQthdentereddate(),
            $keys[59] => $this->getQthdenteredtime(),
            $keys[60] => $this->getQthdprintformat(),
            $keys[61] => $this->getQthdprojectid(),
            $keys[62] => $this->getQthdrevtime(),
            $keys[63] => $this->getQthdref(),
            $keys[64] => $this->getQthdcareof(),
            $keys[65] => $this->getDateupdtd(),
            $keys[66] => $this->getTimeupdtd(),
            $keys[67] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collQuoteDetails) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'quoteDetails';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'quote_details';
                        break;
                    default:
                        $key = 'QuoteDetails';
                }

                $result[$key] = $this->collQuoteDetails->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\Quote
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = QuoteTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\Quote
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setQthdid($value);
                break;
            case 1:
                $this->setQthdstat($value);
                break;
            case 2:
                $this->setArcucustid($value);
                break;
            case 3:
                $this->setQthdbtname($value);
                break;
            case 4:
                $this->setQthdbtadr1($value);
                break;
            case 5:
                $this->setQthdbtadr2($value);
                break;
            case 6:
                $this->setQthdbtadr3($value);
                break;
            case 7:
                $this->setQthdbtctry($value);
                break;
            case 8:
                $this->setQthdbtcity($value);
                break;
            case 9:
                $this->setQthdbtstat($value);
                break;
            case 10:
                $this->setQthdbtzipcode($value);
                break;
            case 11:
                $this->setArstshipid($value);
                break;
            case 12:
                $this->setQthdstname($value);
                break;
            case 13:
                $this->setQthdstadr1($value);
                break;
            case 14:
                $this->setQthdstadr2($value);
                break;
            case 15:
                $this->setQthdstadr3($value);
                break;
            case 16:
                $this->setQthdstctry($value);
                break;
            case 17:
                $this->setQthdstcity($value);
                break;
            case 18:
                $this->setQthdststat($value);
                break;
            case 19:
                $this->setQthdstzipcode($value);
                break;
            case 20:
                $this->setQthdcont($value);
                break;
            case 21:
                $this->setQthdteleintl($value);
                break;
            case 22:
                $this->setQthdtelenbr($value);
                break;
            case 23:
                $this->setQthdteleext($value);
                break;
            case 24:
                $this->setQthdfaxintl($value);
                break;
            case 25:
                $this->setQthdfaxnbr($value);
                break;
            case 26:
                $this->setQthdquotdate($value);
                break;
            case 27:
                $this->setQthdrevdate($value);
                break;
            case 28:
                $this->setQthdexpdate($value);
                break;
            case 29:
                $this->setArtbpriccode($value);
                break;
            case 30:
                $this->setArtbmtaxcode($value);
                break;
            case 31:
                $this->setArtmtermcd($value);
                break;
            case 32:
                $this->setArtbshipvia($value);
                break;
            case 33:
                $this->setArspsaleper1($value);
                break;
            case 34:
                $this->setQthdsp1pct($value);
                break;
            case 35:
                $this->setArspsaleper2($value);
                break;
            case 36:
                $this->setQthdsp2pct($value);
                break;
            case 37:
                $this->setArspsaleper3($value);
                break;
            case 38:
                $this->setQthdsp3pct($value);
                break;
            case 39:
                $this->setQthdexchctry($value);
                break;
            case 40:
                $this->setQthdexchrate($value);
                break;
            case 41:
                $this->setQthdtaxsub($value);
                break;
            case 42:
                $this->setQthdnontaxsub($value);
                break;
            case 43:
                $this->setQthdtaxtot($value);
                break;
            case 44:
                $this->setQthdfrttot($value);
                break;
            case 45:
                $this->setQthdmisctot($value);
                break;
            case 46:
                $this->setQthdordrtot($value);
                break;
            case 47:
                $this->setQthdcosttot($value);
                break;
            case 48:
                $this->setQthdwghttot($value);
                break;
            case 49:
                $this->setQthdoldsysqtnbr($value);
                break;
            case 50:
                $this->setQthdfob($value);
                break;
            case 51:
                $this->setQthddeliverydesc($value);
                break;
            case 52:
                $this->setQthdordercnt($value);
                break;
            case 53:
                $this->setQthdlastorder($value);
                break;
            case 54:
                $this->setIntbwhse($value);
                break;
            case 55:
                $this->setQthdcustpo($value);
                break;
            case 56:
                $this->setQthdemailaddr($value);
                break;
            case 57:
                $this->setQthdenteredby($value);
                break;
            case 58:
                $this->setQthdentereddate($value);
                break;
            case 59:
                $this->setQthdenteredtime($value);
                break;
            case 60:
                $this->setQthdprintformat($value);
                break;
            case 61:
                $this->setQthdprojectid($value);
                break;
            case 62:
                $this->setQthdrevtime($value);
                break;
            case 63:
                $this->setQthdref($value);
                break;
            case 64:
                $this->setQthdcareof($value);
                break;
            case 65:
                $this->setDateupdtd($value);
                break;
            case 66:
                $this->setTimeupdtd($value);
                break;
            case 67:
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
        $keys = QuoteTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setQthdid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setQthdstat($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setArcucustid($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setQthdbtname($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setQthdbtadr1($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setQthdbtadr2($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setQthdbtadr3($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setQthdbtctry($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setQthdbtcity($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setQthdbtstat($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setQthdbtzipcode($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setArstshipid($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setQthdstname($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setQthdstadr1($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setQthdstadr2($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setQthdstadr3($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setQthdstctry($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setQthdstcity($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setQthdststat($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setQthdstzipcode($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setQthdcont($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setQthdteleintl($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setQthdtelenbr($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setQthdteleext($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setQthdfaxintl($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setQthdfaxnbr($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setQthdquotdate($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setQthdrevdate($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setQthdexpdate($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setArtbpriccode($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setArtbmtaxcode($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setArtmtermcd($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setArtbshipvia($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setArspsaleper1($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setQthdsp1pct($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setArspsaleper2($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setQthdsp2pct($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setArspsaleper3($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setQthdsp3pct($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setQthdexchctry($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setQthdexchrate($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setQthdtaxsub($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setQthdnontaxsub($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setQthdtaxtot($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setQthdfrttot($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setQthdmisctot($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setQthdordrtot($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setQthdcosttot($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setQthdwghttot($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setQthdoldsysqtnbr($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setQthdfob($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setQthddeliverydesc($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setQthdordercnt($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setQthdlastorder($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setIntbwhse($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setQthdcustpo($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setQthdemailaddr($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setQthdenteredby($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setQthdentereddate($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setQthdenteredtime($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setQthdprintformat($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setQthdprojectid($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setQthdrevtime($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setQthdref($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setQthdcareof($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setDateupdtd($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setTimeupdtd($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setDummy($arr[$keys[67]]);
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
     * @return $this|\Quote The current object, for fluid interface
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
        $criteria = new Criteria(QuoteTableMap::DATABASE_NAME);

        if ($this->isColumnModified(QuoteTableMap::COL_QTHDID)) {
            $criteria->add(QuoteTableMap::COL_QTHDID, $this->qthdid);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTAT)) {
            $criteria->add(QuoteTableMap::COL_QTHDSTAT, $this->qthdstat);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARCUCUSTID)) {
            $criteria->add(QuoteTableMap::COL_ARCUCUSTID, $this->arcucustid);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTNAME)) {
            $criteria->add(QuoteTableMap::COL_QTHDBTNAME, $this->qthdbtname);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTADR1)) {
            $criteria->add(QuoteTableMap::COL_QTHDBTADR1, $this->qthdbtadr1);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTADR2)) {
            $criteria->add(QuoteTableMap::COL_QTHDBTADR2, $this->qthdbtadr2);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTADR3)) {
            $criteria->add(QuoteTableMap::COL_QTHDBTADR3, $this->qthdbtadr3);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTCTRY)) {
            $criteria->add(QuoteTableMap::COL_QTHDBTCTRY, $this->qthdbtctry);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTCITY)) {
            $criteria->add(QuoteTableMap::COL_QTHDBTCITY, $this->qthdbtcity);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTSTAT)) {
            $criteria->add(QuoteTableMap::COL_QTHDBTSTAT, $this->qthdbtstat);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDBTZIPCODE)) {
            $criteria->add(QuoteTableMap::COL_QTHDBTZIPCODE, $this->qthdbtzipcode);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARSTSHIPID)) {
            $criteria->add(QuoteTableMap::COL_ARSTSHIPID, $this->arstshipid);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTNAME)) {
            $criteria->add(QuoteTableMap::COL_QTHDSTNAME, $this->qthdstname);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTADR1)) {
            $criteria->add(QuoteTableMap::COL_QTHDSTADR1, $this->qthdstadr1);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTADR2)) {
            $criteria->add(QuoteTableMap::COL_QTHDSTADR2, $this->qthdstadr2);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTADR3)) {
            $criteria->add(QuoteTableMap::COL_QTHDSTADR3, $this->qthdstadr3);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTCTRY)) {
            $criteria->add(QuoteTableMap::COL_QTHDSTCTRY, $this->qthdstctry);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTCITY)) {
            $criteria->add(QuoteTableMap::COL_QTHDSTCITY, $this->qthdstcity);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTSTAT)) {
            $criteria->add(QuoteTableMap::COL_QTHDSTSTAT, $this->qthdststat);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSTZIPCODE)) {
            $criteria->add(QuoteTableMap::COL_QTHDSTZIPCODE, $this->qthdstzipcode);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDCONT)) {
            $criteria->add(QuoteTableMap::COL_QTHDCONT, $this->qthdcont);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDTELEINTL)) {
            $criteria->add(QuoteTableMap::COL_QTHDTELEINTL, $this->qthdteleintl);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDTELENBR)) {
            $criteria->add(QuoteTableMap::COL_QTHDTELENBR, $this->qthdtelenbr);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDTELEEXT)) {
            $criteria->add(QuoteTableMap::COL_QTHDTELEEXT, $this->qthdteleext);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDFAXINTL)) {
            $criteria->add(QuoteTableMap::COL_QTHDFAXINTL, $this->qthdfaxintl);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDFAXNBR)) {
            $criteria->add(QuoteTableMap::COL_QTHDFAXNBR, $this->qthdfaxnbr);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDQUOTDATE)) {
            $criteria->add(QuoteTableMap::COL_QTHDQUOTDATE, $this->qthdquotdate);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDREVDATE)) {
            $criteria->add(QuoteTableMap::COL_QTHDREVDATE, $this->qthdrevdate);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDEXPDATE)) {
            $criteria->add(QuoteTableMap::COL_QTHDEXPDATE, $this->qthdexpdate);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARTBPRICCODE)) {
            $criteria->add(QuoteTableMap::COL_ARTBPRICCODE, $this->artbpriccode);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARTBMTAXCODE)) {
            $criteria->add(QuoteTableMap::COL_ARTBMTAXCODE, $this->artbmtaxcode);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARTMTERMCD)) {
            $criteria->add(QuoteTableMap::COL_ARTMTERMCD, $this->artmtermcd);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARTBSHIPVIA)) {
            $criteria->add(QuoteTableMap::COL_ARTBSHIPVIA, $this->artbshipvia);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARSPSALEPER1)) {
            $criteria->add(QuoteTableMap::COL_ARSPSALEPER1, $this->arspsaleper1);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSP1PCT)) {
            $criteria->add(QuoteTableMap::COL_QTHDSP1PCT, $this->qthdsp1pct);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARSPSALEPER2)) {
            $criteria->add(QuoteTableMap::COL_ARSPSALEPER2, $this->arspsaleper2);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSP2PCT)) {
            $criteria->add(QuoteTableMap::COL_QTHDSP2PCT, $this->qthdsp2pct);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_ARSPSALEPER3)) {
            $criteria->add(QuoteTableMap::COL_ARSPSALEPER3, $this->arspsaleper3);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDSP3PCT)) {
            $criteria->add(QuoteTableMap::COL_QTHDSP3PCT, $this->qthdsp3pct);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDEXCHCTRY)) {
            $criteria->add(QuoteTableMap::COL_QTHDEXCHCTRY, $this->qthdexchctry);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDEXCHRATE)) {
            $criteria->add(QuoteTableMap::COL_QTHDEXCHRATE, $this->qthdexchrate);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDTAXSUB)) {
            $criteria->add(QuoteTableMap::COL_QTHDTAXSUB, $this->qthdtaxsub);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDNONTAXSUB)) {
            $criteria->add(QuoteTableMap::COL_QTHDNONTAXSUB, $this->qthdnontaxsub);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDTAXTOT)) {
            $criteria->add(QuoteTableMap::COL_QTHDTAXTOT, $this->qthdtaxtot);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDFRTTOT)) {
            $criteria->add(QuoteTableMap::COL_QTHDFRTTOT, $this->qthdfrttot);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDMISCTOT)) {
            $criteria->add(QuoteTableMap::COL_QTHDMISCTOT, $this->qthdmisctot);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDORDRTOT)) {
            $criteria->add(QuoteTableMap::COL_QTHDORDRTOT, $this->qthdordrtot);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDCOSTTOT)) {
            $criteria->add(QuoteTableMap::COL_QTHDCOSTTOT, $this->qthdcosttot);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDWGHTTOT)) {
            $criteria->add(QuoteTableMap::COL_QTHDWGHTTOT, $this->qthdwghttot);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDOLDSYSQTNBR)) {
            $criteria->add(QuoteTableMap::COL_QTHDOLDSYSQTNBR, $this->qthdoldsysqtnbr);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDFOB)) {
            $criteria->add(QuoteTableMap::COL_QTHDFOB, $this->qthdfob);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDDELIVERYDESC)) {
            $criteria->add(QuoteTableMap::COL_QTHDDELIVERYDESC, $this->qthddeliverydesc);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDORDERCNT)) {
            $criteria->add(QuoteTableMap::COL_QTHDORDERCNT, $this->qthdordercnt);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDLASTORDER)) {
            $criteria->add(QuoteTableMap::COL_QTHDLASTORDER, $this->qthdlastorder);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_INTBWHSE)) {
            $criteria->add(QuoteTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDCUSTPO)) {
            $criteria->add(QuoteTableMap::COL_QTHDCUSTPO, $this->qthdcustpo);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDEMAILADDR)) {
            $criteria->add(QuoteTableMap::COL_QTHDEMAILADDR, $this->qthdemailaddr);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDENTEREDBY)) {
            $criteria->add(QuoteTableMap::COL_QTHDENTEREDBY, $this->qthdenteredby);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDENTEREDDATE)) {
            $criteria->add(QuoteTableMap::COL_QTHDENTEREDDATE, $this->qthdentereddate);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDENTEREDTIME)) {
            $criteria->add(QuoteTableMap::COL_QTHDENTEREDTIME, $this->qthdenteredtime);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDPRINTFORMAT)) {
            $criteria->add(QuoteTableMap::COL_QTHDPRINTFORMAT, $this->qthdprintformat);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDPROJECTID)) {
            $criteria->add(QuoteTableMap::COL_QTHDPROJECTID, $this->qthdprojectid);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDREVTIME)) {
            $criteria->add(QuoteTableMap::COL_QTHDREVTIME, $this->qthdrevtime);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDREF)) {
            $criteria->add(QuoteTableMap::COL_QTHDREF, $this->qthdref);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_QTHDCAREOF)) {
            $criteria->add(QuoteTableMap::COL_QTHDCAREOF, $this->qthdcareof);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_DATEUPDTD)) {
            $criteria->add(QuoteTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_TIMEUPDTD)) {
            $criteria->add(QuoteTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(QuoteTableMap::COL_DUMMY)) {
            $criteria->add(QuoteTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildQuoteQuery::create();
        $criteria->add(QuoteTableMap::COL_QTHDID, $this->qthdid);

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
        $validPk = null !== $this->getQthdid();

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
        return $this->getQthdid();
    }

    /**
     * Generic method to set the primary key (qthdid column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setQthdid($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getQthdid();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \Quote (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setQthdid($this->getQthdid());
        $copyObj->setQthdstat($this->getQthdstat());
        $copyObj->setArcucustid($this->getArcucustid());
        $copyObj->setQthdbtname($this->getQthdbtname());
        $copyObj->setQthdbtadr1($this->getQthdbtadr1());
        $copyObj->setQthdbtadr2($this->getQthdbtadr2());
        $copyObj->setQthdbtadr3($this->getQthdbtadr3());
        $copyObj->setQthdbtctry($this->getQthdbtctry());
        $copyObj->setQthdbtcity($this->getQthdbtcity());
        $copyObj->setQthdbtstat($this->getQthdbtstat());
        $copyObj->setQthdbtzipcode($this->getQthdbtzipcode());
        $copyObj->setArstshipid($this->getArstshipid());
        $copyObj->setQthdstname($this->getQthdstname());
        $copyObj->setQthdstadr1($this->getQthdstadr1());
        $copyObj->setQthdstadr2($this->getQthdstadr2());
        $copyObj->setQthdstadr3($this->getQthdstadr3());
        $copyObj->setQthdstctry($this->getQthdstctry());
        $copyObj->setQthdstcity($this->getQthdstcity());
        $copyObj->setQthdststat($this->getQthdststat());
        $copyObj->setQthdstzipcode($this->getQthdstzipcode());
        $copyObj->setQthdcont($this->getQthdcont());
        $copyObj->setQthdteleintl($this->getQthdteleintl());
        $copyObj->setQthdtelenbr($this->getQthdtelenbr());
        $copyObj->setQthdteleext($this->getQthdteleext());
        $copyObj->setQthdfaxintl($this->getQthdfaxintl());
        $copyObj->setQthdfaxnbr($this->getQthdfaxnbr());
        $copyObj->setQthdquotdate($this->getQthdquotdate());
        $copyObj->setQthdrevdate($this->getQthdrevdate());
        $copyObj->setQthdexpdate($this->getQthdexpdate());
        $copyObj->setArtbpriccode($this->getArtbpriccode());
        $copyObj->setArtbmtaxcode($this->getArtbmtaxcode());
        $copyObj->setArtmtermcd($this->getArtmtermcd());
        $copyObj->setArtbshipvia($this->getArtbshipvia());
        $copyObj->setArspsaleper1($this->getArspsaleper1());
        $copyObj->setQthdsp1pct($this->getQthdsp1pct());
        $copyObj->setArspsaleper2($this->getArspsaleper2());
        $copyObj->setQthdsp2pct($this->getQthdsp2pct());
        $copyObj->setArspsaleper3($this->getArspsaleper3());
        $copyObj->setQthdsp3pct($this->getQthdsp3pct());
        $copyObj->setQthdexchctry($this->getQthdexchctry());
        $copyObj->setQthdexchrate($this->getQthdexchrate());
        $copyObj->setQthdtaxsub($this->getQthdtaxsub());
        $copyObj->setQthdnontaxsub($this->getQthdnontaxsub());
        $copyObj->setQthdtaxtot($this->getQthdtaxtot());
        $copyObj->setQthdfrttot($this->getQthdfrttot());
        $copyObj->setQthdmisctot($this->getQthdmisctot());
        $copyObj->setQthdordrtot($this->getQthdordrtot());
        $copyObj->setQthdcosttot($this->getQthdcosttot());
        $copyObj->setQthdwghttot($this->getQthdwghttot());
        $copyObj->setQthdoldsysqtnbr($this->getQthdoldsysqtnbr());
        $copyObj->setQthdfob($this->getQthdfob());
        $copyObj->setQthddeliverydesc($this->getQthddeliverydesc());
        $copyObj->setQthdordercnt($this->getQthdordercnt());
        $copyObj->setQthdlastorder($this->getQthdlastorder());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setQthdcustpo($this->getQthdcustpo());
        $copyObj->setQthdemailaddr($this->getQthdemailaddr());
        $copyObj->setQthdenteredby($this->getQthdenteredby());
        $copyObj->setQthdentereddate($this->getQthdentereddate());
        $copyObj->setQthdenteredtime($this->getQthdenteredtime());
        $copyObj->setQthdprintformat($this->getQthdprintformat());
        $copyObj->setQthdprojectid($this->getQthdprojectid());
        $copyObj->setQthdrevtime($this->getQthdrevtime());
        $copyObj->setQthdref($this->getQthdref());
        $copyObj->setQthdcareof($this->getQthdcareof());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getQuoteDetails() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addQuoteDetail($relObj->copy($deepCopy));
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
     * @return \Quote Clone of current object.
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
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param      string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('QuoteDetail' == $relationName) {
            $this->initQuoteDetails();
            return;
        }
    }

    /**
     * Clears out the collQuoteDetails collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addQuoteDetails()
     */
    public function clearQuoteDetails()
    {
        $this->collQuoteDetails = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collQuoteDetails collection loaded partially.
     */
    public function resetPartialQuoteDetails($v = true)
    {
        $this->collQuoteDetailsPartial = $v;
    }

    /**
     * Initializes the collQuoteDetails collection.
     *
     * By default this just sets the collQuoteDetails collection to an empty array (like clearcollQuoteDetails());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initQuoteDetails($overrideExisting = true)
    {
        if (null !== $this->collQuoteDetails && !$overrideExisting) {
            return;
        }

        $collectionClassName = QuoteDetailTableMap::getTableMap()->getCollectionClassName();

        $this->collQuoteDetails = new $collectionClassName;
        $this->collQuoteDetails->setModel('\QuoteDetail');
    }

    /**
     * Gets an array of ChildQuoteDetail objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildQuote is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildQuoteDetail[] List of ChildQuoteDetail objects
     * @throws PropelException
     */
    public function getQuoteDetails(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collQuoteDetailsPartial && !$this->isNew();
        if (null === $this->collQuoteDetails || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collQuoteDetails) {
                // return empty collection
                $this->initQuoteDetails();
            } else {
                $collQuoteDetails = ChildQuoteDetailQuery::create(null, $criteria)
                    ->filterByQuote($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collQuoteDetailsPartial && count($collQuoteDetails)) {
                        $this->initQuoteDetails(false);

                        foreach ($collQuoteDetails as $obj) {
                            if (false == $this->collQuoteDetails->contains($obj)) {
                                $this->collQuoteDetails->append($obj);
                            }
                        }

                        $this->collQuoteDetailsPartial = true;
                    }

                    return $collQuoteDetails;
                }

                if ($partial && $this->collQuoteDetails) {
                    foreach ($this->collQuoteDetails as $obj) {
                        if ($obj->isNew()) {
                            $collQuoteDetails[] = $obj;
                        }
                    }
                }

                $this->collQuoteDetails = $collQuoteDetails;
                $this->collQuoteDetailsPartial = false;
            }
        }

        return $this->collQuoteDetails;
    }

    /**
     * Sets a collection of ChildQuoteDetail objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $quoteDetails A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildQuote The current object (for fluent API support)
     */
    public function setQuoteDetails(Collection $quoteDetails, ConnectionInterface $con = null)
    {
        /** @var ChildQuoteDetail[] $quoteDetailsToDelete */
        $quoteDetailsToDelete = $this->getQuoteDetails(new Criteria(), $con)->diff($quoteDetails);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->quoteDetailsScheduledForDeletion = clone $quoteDetailsToDelete;

        foreach ($quoteDetailsToDelete as $quoteDetailRemoved) {
            $quoteDetailRemoved->setQuote(null);
        }

        $this->collQuoteDetails = null;
        foreach ($quoteDetails as $quoteDetail) {
            $this->addQuoteDetail($quoteDetail);
        }

        $this->collQuoteDetails = $quoteDetails;
        $this->collQuoteDetailsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related QuoteDetail objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related QuoteDetail objects.
     * @throws PropelException
     */
    public function countQuoteDetails(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collQuoteDetailsPartial && !$this->isNew();
        if (null === $this->collQuoteDetails || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collQuoteDetails) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getQuoteDetails());
            }

            $query = ChildQuoteDetailQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByQuote($this)
                ->count($con);
        }

        return count($this->collQuoteDetails);
    }

    /**
     * Method called to associate a ChildQuoteDetail object to this object
     * through the ChildQuoteDetail foreign key attribute.
     *
     * @param  ChildQuoteDetail $l ChildQuoteDetail
     * @return $this|\Quote The current object (for fluent API support)
     */
    public function addQuoteDetail(ChildQuoteDetail $l)
    {
        if ($this->collQuoteDetails === null) {
            $this->initQuoteDetails();
            $this->collQuoteDetailsPartial = true;
        }

        if (!$this->collQuoteDetails->contains($l)) {
            $this->doAddQuoteDetail($l);

            if ($this->quoteDetailsScheduledForDeletion and $this->quoteDetailsScheduledForDeletion->contains($l)) {
                $this->quoteDetailsScheduledForDeletion->remove($this->quoteDetailsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildQuoteDetail $quoteDetail The ChildQuoteDetail object to add.
     */
    protected function doAddQuoteDetail(ChildQuoteDetail $quoteDetail)
    {
        $this->collQuoteDetails[]= $quoteDetail;
        $quoteDetail->setQuote($this);
    }

    /**
     * @param  ChildQuoteDetail $quoteDetail The ChildQuoteDetail object to remove.
     * @return $this|ChildQuote The current object (for fluent API support)
     */
    public function removeQuoteDetail(ChildQuoteDetail $quoteDetail)
    {
        if ($this->getQuoteDetails()->contains($quoteDetail)) {
            $pos = $this->collQuoteDetails->search($quoteDetail);
            $this->collQuoteDetails->remove($pos);
            if (null === $this->quoteDetailsScheduledForDeletion) {
                $this->quoteDetailsScheduledForDeletion = clone $this->collQuoteDetails;
                $this->quoteDetailsScheduledForDeletion->clear();
            }
            $this->quoteDetailsScheduledForDeletion[]= clone $quoteDetail;
            $quoteDetail->setQuote(null);
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
        $this->qthdid = null;
        $this->qthdstat = null;
        $this->arcucustid = null;
        $this->qthdbtname = null;
        $this->qthdbtadr1 = null;
        $this->qthdbtadr2 = null;
        $this->qthdbtadr3 = null;
        $this->qthdbtctry = null;
        $this->qthdbtcity = null;
        $this->qthdbtstat = null;
        $this->qthdbtzipcode = null;
        $this->arstshipid = null;
        $this->qthdstname = null;
        $this->qthdstadr1 = null;
        $this->qthdstadr2 = null;
        $this->qthdstadr3 = null;
        $this->qthdstctry = null;
        $this->qthdstcity = null;
        $this->qthdststat = null;
        $this->qthdstzipcode = null;
        $this->qthdcont = null;
        $this->qthdteleintl = null;
        $this->qthdtelenbr = null;
        $this->qthdteleext = null;
        $this->qthdfaxintl = null;
        $this->qthdfaxnbr = null;
        $this->qthdquotdate = null;
        $this->qthdrevdate = null;
        $this->qthdexpdate = null;
        $this->artbpriccode = null;
        $this->artbmtaxcode = null;
        $this->artmtermcd = null;
        $this->artbshipvia = null;
        $this->arspsaleper1 = null;
        $this->qthdsp1pct = null;
        $this->arspsaleper2 = null;
        $this->qthdsp2pct = null;
        $this->arspsaleper3 = null;
        $this->qthdsp3pct = null;
        $this->qthdexchctry = null;
        $this->qthdexchrate = null;
        $this->qthdtaxsub = null;
        $this->qthdnontaxsub = null;
        $this->qthdtaxtot = null;
        $this->qthdfrttot = null;
        $this->qthdmisctot = null;
        $this->qthdordrtot = null;
        $this->qthdcosttot = null;
        $this->qthdwghttot = null;
        $this->qthdoldsysqtnbr = null;
        $this->qthdfob = null;
        $this->qthddeliverydesc = null;
        $this->qthdordercnt = null;
        $this->qthdlastorder = null;
        $this->intbwhse = null;
        $this->qthdcustpo = null;
        $this->qthdemailaddr = null;
        $this->qthdenteredby = null;
        $this->qthdentereddate = null;
        $this->qthdenteredtime = null;
        $this->qthdprintformat = null;
        $this->qthdprojectid = null;
        $this->qthdrevtime = null;
        $this->qthdref = null;
        $this->qthdcareof = null;
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
            if ($this->collQuoteDetails) {
                foreach ($this->collQuoteDetails as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collQuoteDetails = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(QuoteTableMap::DEFAULT_STRING_FORMAT);
    }

    /**
     * Code to be run before persisting the object
     * @param  ConnectionInterface $con
     * @return boolean
     */
    public function preSave(ConnectionInterface $con = null)
    {
        if (is_callable('parent::preSave')) {
            // parent::preSave($con);
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
