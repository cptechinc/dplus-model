<?php

namespace Base;

use \Quote as ChildQuote;
use \QuoteDetailQuery as ChildQuoteDetailQuery;
use \QuoteQuery as ChildQuoteQuery;
use \Exception;
use \PDO;
use Map\QuoteDetailTableMap;
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
 * Base class that represents a row from the 'quote_detail' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class QuoteDetail implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\QuoteDetailTableMap';


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
     * The value for the qtdtline field.
     *
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $qtdtline;

    /**
     * The value for the inititemnbr field.
     *
     * @var        string
     */
    protected $inititemnbr;

    /**
     * The value for the qtdtdesc field.
     *
     * @var        string
     */
    protected $qtdtdesc;

    /**
     * The value for the qtdtdesc2 field.
     *
     * @var        string
     */
    protected $qtdtdesc2;

    /**
     * The value for the qtdtcustcrssref field.
     *
     * @var        string
     */
    protected $qtdtcustcrssref;

    /**
     * The value for the intbwhse field.
     *
     * @var        string
     */
    protected $intbwhse;

    /**
     * The value for the qtdtrqstdate field.
     *
     * @var        string
     */
    protected $qtdtrqstdate;

    /**
     * The value for the qtdtspecordr field.
     *
     * @var        string
     */
    protected $qtdtspecordr;

    /**
     * The value for the artbmtaxcode field.
     *
     * @var        string
     */
    protected $artbmtaxcode;

    /**
     * The value for the qtdtqtyord field.
     *
     * @var        string
     */
    protected $qtdtqtyord;

    /**
     * The value for the qtdtpric field.
     *
     * @var        string
     */
    protected $qtdtpric;

    /**
     * The value for the qtdtcost field.
     *
     * @var        string
     */
    protected $qtdtcost;

    /**
     * The value for the qtdttaxpcttot field.
     *
     * @var        string
     */
    protected $qtdttaxpcttot;

    /**
     * The value for the qtdtprictot field.
     *
     * @var        string
     */
    protected $qtdtprictot;

    /**
     * The value for the qtdtcosttot field.
     *
     * @var        string
     */
    protected $qtdtcosttot;

    /**
     * The value for the qtdtwghttot field.
     *
     * @var        string
     */
    protected $qtdtwghttot;

    /**
     * The value for the qtdtmstrtaxcode1 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxcode1;

    /**
     * The value for the qtdtmstrtaxpct1 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxpct1;

    /**
     * The value for the qtdtmstrtaxcode2 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxcode2;

    /**
     * The value for the qtdtmstrtaxpct2 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxpct2;

    /**
     * The value for the qtdtmstrtaxcode3 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxcode3;

    /**
     * The value for the qtdtmstrtaxpct3 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxpct3;

    /**
     * The value for the qtdtmstrtaxcode4 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxcode4;

    /**
     * The value for the qtdtmstrtaxpct4 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxpct4;

    /**
     * The value for the qtdtmstrtaxcode5 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxcode5;

    /**
     * The value for the qtdtmstrtaxpct5 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxpct5;

    /**
     * The value for the qtdtmstrtaxcode6 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxcode6;

    /**
     * The value for the qtdtmstrtaxpct6 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxpct6;

    /**
     * The value for the qtdtmstrtaxcode7 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxcode7;

    /**
     * The value for the qtdtmstrtaxpct7 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxpct7;

    /**
     * The value for the qtdtmstrtaxcode8 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxcode8;

    /**
     * The value for the qtdtmstrtaxpct8 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxpct8;

    /**
     * The value for the qtdtmstrtaxcode9 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxcode9;

    /**
     * The value for the qtdtmstrtaxpct9 field.
     *
     * @var        string
     */
    protected $qtdtmstrtaxpct9;

    /**
     * The value for the intbuomsale field.
     *
     * @var        string
     */
    protected $intbuomsale;

    /**
     * The value for the intbuompur field.
     *
     * @var        string
     */
    protected $intbuompur;

    /**
     * The value for the qtdtquotind1 field.
     *
     * @var        string
     */
    protected $qtdtquotind1;

    /**
     * The value for the qtdtquotunit1 field.
     *
     * @var        int
     */
    protected $qtdtquotunit1;

    /**
     * The value for the qtdtquotpric1 field.
     *
     * @var        string
     */
    protected $qtdtquotpric1;

    /**
     * The value for the qtdtquotcost1 field.
     *
     * @var        string
     */
    protected $qtdtquotcost1;

    /**
     * The value for the qtdtquotmkupmarg1 field.
     *
     * @var        string
     */
    protected $qtdtquotmkupmarg1;

    /**
     * The value for the qtdtquotind2 field.
     *
     * @var        string
     */
    protected $qtdtquotind2;

    /**
     * The value for the qtdtquotunit2 field.
     *
     * @var        int
     */
    protected $qtdtquotunit2;

    /**
     * The value for the qtdtquotpric2 field.
     *
     * @var        string
     */
    protected $qtdtquotpric2;

    /**
     * The value for the qtdtquotcost2 field.
     *
     * @var        string
     */
    protected $qtdtquotcost2;

    /**
     * The value for the qtdtquotmkupmarg2 field.
     *
     * @var        string
     */
    protected $qtdtquotmkupmarg2;

    /**
     * The value for the qtdtquotind3 field.
     *
     * @var        string
     */
    protected $qtdtquotind3;

    /**
     * The value for the qtdtquotunit3 field.
     *
     * @var        int
     */
    protected $qtdtquotunit3;

    /**
     * The value for the qtdtquotpric3 field.
     *
     * @var        string
     */
    protected $qtdtquotpric3;

    /**
     * The value for the qtdtquotcost3 field.
     *
     * @var        string
     */
    protected $qtdtquotcost3;

    /**
     * The value for the qtdtquotmkupmarg3 field.
     *
     * @var        string
     */
    protected $qtdtquotmkupmarg3;

    /**
     * The value for the qtdtquotind4 field.
     *
     * @var        string
     */
    protected $qtdtquotind4;

    /**
     * The value for the qtdtquotunit4 field.
     *
     * @var        int
     */
    protected $qtdtquotunit4;

    /**
     * The value for the qtdtquotpric4 field.
     *
     * @var        string
     */
    protected $qtdtquotpric4;

    /**
     * The value for the qtdtquotcost4 field.
     *
     * @var        string
     */
    protected $qtdtquotcost4;

    /**
     * The value for the qtdtquotmkupmarg4 field.
     *
     * @var        string
     */
    protected $qtdtquotmkupmarg4;

    /**
     * The value for the qtdtquotind5 field.
     *
     * @var        string
     */
    protected $qtdtquotind5;

    /**
     * The value for the qtdtquotunit5 field.
     *
     * @var        int
     */
    protected $qtdtquotunit5;

    /**
     * The value for the qtdtquotpric5 field.
     *
     * @var        string
     */
    protected $qtdtquotpric5;

    /**
     * The value for the qtdtquotcost5 field.
     *
     * @var        string
     */
    protected $qtdtquotcost5;

    /**
     * The value for the qtdtquotmkupmarg5 field.
     *
     * @var        string
     */
    protected $qtdtquotmkupmarg5;

    /**
     * The value for the qtdtquotind6 field.
     *
     * @var        string
     */
    protected $qtdtquotind6;

    /**
     * The value for the qtdtquotunit6 field.
     *
     * @var        int
     */
    protected $qtdtquotunit6;

    /**
     * The value for the qtdtquotpric6 field.
     *
     * @var        string
     */
    protected $qtdtquotpric6;

    /**
     * The value for the qtdtquotcost6 field.
     *
     * @var        string
     */
    protected $qtdtquotcost6;

    /**
     * The value for the qtdtquotmkupmarg6 field.
     *
     * @var        string
     */
    protected $qtdtquotmkupmarg6;

    /**
     * The value for the qtdtasstcode field.
     *
     * @var        string
     */
    protected $qtdtasstcode;

    /**
     * The value for the qtdtasstqty field.
     *
     * @var        string
     */
    protected $qtdtasstqty;

    /**
     * The value for the qtdtlistpric field.
     *
     * @var        string
     */
    protected $qtdtlistpric;

    /**
     * The value for the qtdtstancost field.
     *
     * @var        string
     */
    protected $qtdtstancost;

    /**
     * The value for the qtdtvenditemjob field.
     *
     * @var        string
     */
    protected $qtdtvenditemjob;

    /**
     * The value for the apvevendid field.
     *
     * @var        string
     */
    protected $apvevendid;

    /**
     * The value for the qtdtnsitemgrup field.
     *
     * @var        string
     */
    protected $qtdtnsitemgrup;

    /**
     * The value for the qtdtusecode field.
     *
     * @var        string
     */
    protected $qtdtusecode;

    /**
     * The value for the qtdtpickflag field.
     *
     * @var        string
     */
    protected $qtdtpickflag;

    /**
     * The value for the qtdtstatus field.
     *
     * @var        string
     */
    protected $qtdtstatus;

    /**
     * The value for the oetblsslcode field.
     *
     * @var        string
     */
    protected $oetblsslcode;

    /**
     * The value for the qtdtlostdate field.
     *
     * @var        string
     */
    protected $qtdtlostdate;

    /**
     * The value for the qtdtlostposted field.
     *
     * @var        string
     */
    protected $qtdtlostposted;

    /**
     * The value for the qtdtleaddays field.
     *
     * @var        int
     */
    protected $qtdtleaddays;

    /**
     * The value for the qtdtordrdiscpct field.
     *
     * @var        string
     */
    protected $qtdtordrdiscpct;

    /**
     * The value for the qtdtquotdiscpct1 field.
     *
     * @var        string
     */
    protected $qtdtquotdiscpct1;

    /**
     * The value for the qtdtmtrcreqd field.
     *
     * @var        string
     */
    protected $qtdtmtrcreqd;

    /**
     * The value for the qtdtcofcreqd field.
     *
     * @var        string
     */
    protected $qtdtcofcreqd;

    /**
     * The value for the qtdtmnfrid field.
     *
     * @var        string
     */
    protected $qtdtmnfrid;

    /**
     * The value for the qtdtmnfritemid field.
     *
     * @var        string
     */
    protected $qtdtmnfritemid;

    /**
     * The value for the qtdtlmordrnbr field.
     *
     * @var        string
     */
    protected $qtdtlmordrnbr;

    /**
     * The value for the qtdtlmordrdate field.
     *
     * @var        string
     */
    protected $qtdtlmordrdate;

    /**
     * The value for the qtdtspecitemcode field.
     *
     * @var        string
     */
    protected $qtdtspecitemcode;

    /**
     * The value for the qtdtacsalepgm field.
     *
     * @var        string
     */
    protected $qtdtacsalepgm;

    /**
     * The value for the qtdtnsvendshipfr field.
     *
     * @var        string
     */
    protected $qtdtnsvendshipfr;

    /**
     * The value for the qtdtprntmnfrnote field.
     *
     * @var        string
     */
    protected $qtdtprntmnfrnote;

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
     * @var        ChildQuote
     */
    protected $aQuote;

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
        $this->qthdid = '';
        $this->qtdtline = 0;
    }

    /**
     * Initializes internal state of Base\QuoteDetail object.
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
     * Compares this with another <code>QuoteDetail</code> instance.  If
     * <code>obj</code> is an instance of <code>QuoteDetail</code>, delegates to
     * <code>equals(QuoteDetail)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|QuoteDetail The current object, for fluid interface
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
     * Get the [qtdtline] column value.
     *
     * @return int
     */
    public function getQtdtline()
    {
        return $this->qtdtline;
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
     * Get the [qtdtdesc] column value.
     *
     * @return string
     */
    public function getQtdtdesc()
    {
        return $this->qtdtdesc;
    }

    /**
     * Get the [qtdtdesc2] column value.
     *
     * @return string
     */
    public function getQtdtdesc2()
    {
        return $this->qtdtdesc2;
    }

    /**
     * Get the [qtdtcustcrssref] column value.
     *
     * @return string
     */
    public function getQtdtcustcrssref()
    {
        return $this->qtdtcustcrssref;
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
     * Get the [qtdtrqstdate] column value.
     *
     * @return string
     */
    public function getQtdtrqstdate()
    {
        return $this->qtdtrqstdate;
    }

    /**
     * Get the [qtdtspecordr] column value.
     *
     * @return string
     */
    public function getQtdtspecordr()
    {
        return $this->qtdtspecordr;
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
     * Get the [qtdtqtyord] column value.
     *
     * @return string
     */
    public function getQtdtqtyord()
    {
        return $this->qtdtqtyord;
    }

    /**
     * Get the [qtdtpric] column value.
     *
     * @return string
     */
    public function getQtdtpric()
    {
        return $this->qtdtpric;
    }

    /**
     * Get the [qtdtcost] column value.
     *
     * @return string
     */
    public function getQtdtcost()
    {
        return $this->qtdtcost;
    }

    /**
     * Get the [qtdttaxpcttot] column value.
     *
     * @return string
     */
    public function getQtdttaxpcttot()
    {
        return $this->qtdttaxpcttot;
    }

    /**
     * Get the [qtdtprictot] column value.
     *
     * @return string
     */
    public function getQtdtprictot()
    {
        return $this->qtdtprictot;
    }

    /**
     * Get the [qtdtcosttot] column value.
     *
     * @return string
     */
    public function getQtdtcosttot()
    {
        return $this->qtdtcosttot;
    }

    /**
     * Get the [qtdtwghttot] column value.
     *
     * @return string
     */
    public function getQtdtwghttot()
    {
        return $this->qtdtwghttot;
    }

    /**
     * Get the [qtdtmstrtaxcode1] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxcode1()
    {
        return $this->qtdtmstrtaxcode1;
    }

    /**
     * Get the [qtdtmstrtaxpct1] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxpct1()
    {
        return $this->qtdtmstrtaxpct1;
    }

    /**
     * Get the [qtdtmstrtaxcode2] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxcode2()
    {
        return $this->qtdtmstrtaxcode2;
    }

    /**
     * Get the [qtdtmstrtaxpct2] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxpct2()
    {
        return $this->qtdtmstrtaxpct2;
    }

    /**
     * Get the [qtdtmstrtaxcode3] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxcode3()
    {
        return $this->qtdtmstrtaxcode3;
    }

    /**
     * Get the [qtdtmstrtaxpct3] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxpct3()
    {
        return $this->qtdtmstrtaxpct3;
    }

    /**
     * Get the [qtdtmstrtaxcode4] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxcode4()
    {
        return $this->qtdtmstrtaxcode4;
    }

    /**
     * Get the [qtdtmstrtaxpct4] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxpct4()
    {
        return $this->qtdtmstrtaxpct4;
    }

    /**
     * Get the [qtdtmstrtaxcode5] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxcode5()
    {
        return $this->qtdtmstrtaxcode5;
    }

    /**
     * Get the [qtdtmstrtaxpct5] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxpct5()
    {
        return $this->qtdtmstrtaxpct5;
    }

    /**
     * Get the [qtdtmstrtaxcode6] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxcode6()
    {
        return $this->qtdtmstrtaxcode6;
    }

    /**
     * Get the [qtdtmstrtaxpct6] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxpct6()
    {
        return $this->qtdtmstrtaxpct6;
    }

    /**
     * Get the [qtdtmstrtaxcode7] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxcode7()
    {
        return $this->qtdtmstrtaxcode7;
    }

    /**
     * Get the [qtdtmstrtaxpct7] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxpct7()
    {
        return $this->qtdtmstrtaxpct7;
    }

    /**
     * Get the [qtdtmstrtaxcode8] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxcode8()
    {
        return $this->qtdtmstrtaxcode8;
    }

    /**
     * Get the [qtdtmstrtaxpct8] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxpct8()
    {
        return $this->qtdtmstrtaxpct8;
    }

    /**
     * Get the [qtdtmstrtaxcode9] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxcode9()
    {
        return $this->qtdtmstrtaxcode9;
    }

    /**
     * Get the [qtdtmstrtaxpct9] column value.
     *
     * @return string
     */
    public function getQtdtmstrtaxpct9()
    {
        return $this->qtdtmstrtaxpct9;
    }

    /**
     * Get the [intbuomsale] column value.
     *
     * @return string
     */
    public function getIntbuomsale()
    {
        return $this->intbuomsale;
    }

    /**
     * Get the [intbuompur] column value.
     *
     * @return string
     */
    public function getIntbuompur()
    {
        return $this->intbuompur;
    }

    /**
     * Get the [qtdtquotind1] column value.
     *
     * @return string
     */
    public function getQtdtquotind1()
    {
        return $this->qtdtquotind1;
    }

    /**
     * Get the [qtdtquotunit1] column value.
     *
     * @return int
     */
    public function getQtdtquotunit1()
    {
        return $this->qtdtquotunit1;
    }

    /**
     * Get the [qtdtquotpric1] column value.
     *
     * @return string
     */
    public function getQtdtquotpric1()
    {
        return $this->qtdtquotpric1;
    }

    /**
     * Get the [qtdtquotcost1] column value.
     *
     * @return string
     */
    public function getQtdtquotcost1()
    {
        return $this->qtdtquotcost1;
    }

    /**
     * Get the [qtdtquotmkupmarg1] column value.
     *
     * @return string
     */
    public function getQtdtquotmkupmarg1()
    {
        return $this->qtdtquotmkupmarg1;
    }

    /**
     * Get the [qtdtquotind2] column value.
     *
     * @return string
     */
    public function getQtdtquotind2()
    {
        return $this->qtdtquotind2;
    }

    /**
     * Get the [qtdtquotunit2] column value.
     *
     * @return int
     */
    public function getQtdtquotunit2()
    {
        return $this->qtdtquotunit2;
    }

    /**
     * Get the [qtdtquotpric2] column value.
     *
     * @return string
     */
    public function getQtdtquotpric2()
    {
        return $this->qtdtquotpric2;
    }

    /**
     * Get the [qtdtquotcost2] column value.
     *
     * @return string
     */
    public function getQtdtquotcost2()
    {
        return $this->qtdtquotcost2;
    }

    /**
     * Get the [qtdtquotmkupmarg2] column value.
     *
     * @return string
     */
    public function getQtdtquotmkupmarg2()
    {
        return $this->qtdtquotmkupmarg2;
    }

    /**
     * Get the [qtdtquotind3] column value.
     *
     * @return string
     */
    public function getQtdtquotind3()
    {
        return $this->qtdtquotind3;
    }

    /**
     * Get the [qtdtquotunit3] column value.
     *
     * @return int
     */
    public function getQtdtquotunit3()
    {
        return $this->qtdtquotunit3;
    }

    /**
     * Get the [qtdtquotpric3] column value.
     *
     * @return string
     */
    public function getQtdtquotpric3()
    {
        return $this->qtdtquotpric3;
    }

    /**
     * Get the [qtdtquotcost3] column value.
     *
     * @return string
     */
    public function getQtdtquotcost3()
    {
        return $this->qtdtquotcost3;
    }

    /**
     * Get the [qtdtquotmkupmarg3] column value.
     *
     * @return string
     */
    public function getQtdtquotmkupmarg3()
    {
        return $this->qtdtquotmkupmarg3;
    }

    /**
     * Get the [qtdtquotind4] column value.
     *
     * @return string
     */
    public function getQtdtquotind4()
    {
        return $this->qtdtquotind4;
    }

    /**
     * Get the [qtdtquotunit4] column value.
     *
     * @return int
     */
    public function getQtdtquotunit4()
    {
        return $this->qtdtquotunit4;
    }

    /**
     * Get the [qtdtquotpric4] column value.
     *
     * @return string
     */
    public function getQtdtquotpric4()
    {
        return $this->qtdtquotpric4;
    }

    /**
     * Get the [qtdtquotcost4] column value.
     *
     * @return string
     */
    public function getQtdtquotcost4()
    {
        return $this->qtdtquotcost4;
    }

    /**
     * Get the [qtdtquotmkupmarg4] column value.
     *
     * @return string
     */
    public function getQtdtquotmkupmarg4()
    {
        return $this->qtdtquotmkupmarg4;
    }

    /**
     * Get the [qtdtquotind5] column value.
     *
     * @return string
     */
    public function getQtdtquotind5()
    {
        return $this->qtdtquotind5;
    }

    /**
     * Get the [qtdtquotunit5] column value.
     *
     * @return int
     */
    public function getQtdtquotunit5()
    {
        return $this->qtdtquotunit5;
    }

    /**
     * Get the [qtdtquotpric5] column value.
     *
     * @return string
     */
    public function getQtdtquotpric5()
    {
        return $this->qtdtquotpric5;
    }

    /**
     * Get the [qtdtquotcost5] column value.
     *
     * @return string
     */
    public function getQtdtquotcost5()
    {
        return $this->qtdtquotcost5;
    }

    /**
     * Get the [qtdtquotmkupmarg5] column value.
     *
     * @return string
     */
    public function getQtdtquotmkupmarg5()
    {
        return $this->qtdtquotmkupmarg5;
    }

    /**
     * Get the [qtdtquotind6] column value.
     *
     * @return string
     */
    public function getQtdtquotind6()
    {
        return $this->qtdtquotind6;
    }

    /**
     * Get the [qtdtquotunit6] column value.
     *
     * @return int
     */
    public function getQtdtquotunit6()
    {
        return $this->qtdtquotunit6;
    }

    /**
     * Get the [qtdtquotpric6] column value.
     *
     * @return string
     */
    public function getQtdtquotpric6()
    {
        return $this->qtdtquotpric6;
    }

    /**
     * Get the [qtdtquotcost6] column value.
     *
     * @return string
     */
    public function getQtdtquotcost6()
    {
        return $this->qtdtquotcost6;
    }

    /**
     * Get the [qtdtquotmkupmarg6] column value.
     *
     * @return string
     */
    public function getQtdtquotmkupmarg6()
    {
        return $this->qtdtquotmkupmarg6;
    }

    /**
     * Get the [qtdtasstcode] column value.
     *
     * @return string
     */
    public function getQtdtasstcode()
    {
        return $this->qtdtasstcode;
    }

    /**
     * Get the [qtdtasstqty] column value.
     *
     * @return string
     */
    public function getQtdtasstqty()
    {
        return $this->qtdtasstqty;
    }

    /**
     * Get the [qtdtlistpric] column value.
     *
     * @return string
     */
    public function getQtdtlistpric()
    {
        return $this->qtdtlistpric;
    }

    /**
     * Get the [qtdtstancost] column value.
     *
     * @return string
     */
    public function getQtdtstancost()
    {
        return $this->qtdtstancost;
    }

    /**
     * Get the [qtdtvenditemjob] column value.
     *
     * @return string
     */
    public function getQtdtvenditemjob()
    {
        return $this->qtdtvenditemjob;
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
     * Get the [qtdtnsitemgrup] column value.
     *
     * @return string
     */
    public function getQtdtnsitemgrup()
    {
        return $this->qtdtnsitemgrup;
    }

    /**
     * Get the [qtdtusecode] column value.
     *
     * @return string
     */
    public function getQtdtusecode()
    {
        return $this->qtdtusecode;
    }

    /**
     * Get the [qtdtpickflag] column value.
     *
     * @return string
     */
    public function getQtdtpickflag()
    {
        return $this->qtdtpickflag;
    }

    /**
     * Get the [qtdtstatus] column value.
     *
     * @return string
     */
    public function getQtdtstatus()
    {
        return $this->qtdtstatus;
    }

    /**
     * Get the [oetblsslcode] column value.
     *
     * @return string
     */
    public function getOetblsslcode()
    {
        return $this->oetblsslcode;
    }

    /**
     * Get the [qtdtlostdate] column value.
     *
     * @return string
     */
    public function getQtdtlostdate()
    {
        return $this->qtdtlostdate;
    }

    /**
     * Get the [qtdtlostposted] column value.
     *
     * @return string
     */
    public function getQtdtlostposted()
    {
        return $this->qtdtlostposted;
    }

    /**
     * Get the [qtdtleaddays] column value.
     *
     * @return int
     */
    public function getQtdtleaddays()
    {
        return $this->qtdtleaddays;
    }

    /**
     * Get the [qtdtordrdiscpct] column value.
     *
     * @return string
     */
    public function getQtdtordrdiscpct()
    {
        return $this->qtdtordrdiscpct;
    }

    /**
     * Get the [qtdtquotdiscpct1] column value.
     *
     * @return string
     */
    public function getQtdtquotdiscpct1()
    {
        return $this->qtdtquotdiscpct1;
    }

    /**
     * Get the [qtdtmtrcreqd] column value.
     *
     * @return string
     */
    public function getQtdtmtrcreqd()
    {
        return $this->qtdtmtrcreqd;
    }

    /**
     * Get the [qtdtcofcreqd] column value.
     *
     * @return string
     */
    public function getQtdtcofcreqd()
    {
        return $this->qtdtcofcreqd;
    }

    /**
     * Get the [qtdtmnfrid] column value.
     *
     * @return string
     */
    public function getQtdtmnfrid()
    {
        return $this->qtdtmnfrid;
    }

    /**
     * Get the [qtdtmnfritemid] column value.
     *
     * @return string
     */
    public function getQtdtmnfritemid()
    {
        return $this->qtdtmnfritemid;
    }

    /**
     * Get the [qtdtlmordrnbr] column value.
     *
     * @return string
     */
    public function getQtdtlmordrnbr()
    {
        return $this->qtdtlmordrnbr;
    }

    /**
     * Get the [qtdtlmordrdate] column value.
     *
     * @return string
     */
    public function getQtdtlmordrdate()
    {
        return $this->qtdtlmordrdate;
    }

    /**
     * Get the [qtdtspecitemcode] column value.
     *
     * @return string
     */
    public function getQtdtspecitemcode()
    {
        return $this->qtdtspecitemcode;
    }

    /**
     * Get the [qtdtacsalepgm] column value.
     *
     * @return string
     */
    public function getQtdtacsalepgm()
    {
        return $this->qtdtacsalepgm;
    }

    /**
     * Get the [qtdtnsvendshipfr] column value.
     *
     * @return string
     */
    public function getQtdtnsvendshipfr()
    {
        return $this->qtdtnsvendshipfr;
    }

    /**
     * Get the [qtdtprntmnfrnote] column value.
     *
     * @return string
     */
    public function getQtdtprntmnfrnote()
    {
        return $this->qtdtprntmnfrnote;
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
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQthdid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qthdid !== $v) {
            $this->qthdid = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTHDID] = true;
        }

        if ($this->aQuote !== null && $this->aQuote->getQthdid() !== $v) {
            $this->aQuote = null;
        }

        return $this;
    } // setQthdid()

    /**
     * Set the value of [qtdtline] column.
     *
     * @param int $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtline($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qtdtline !== $v) {
            $this->qtdtline = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTLINE] = true;
        }

        return $this;
    } // setQtdtline()

    /**
     * Set the value of [inititemnbr] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setInititemnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->inititemnbr !== $v) {
            $this->inititemnbr = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_INITITEMNBR] = true;
        }

        return $this;
    } // setInititemnbr()

    /**
     * Set the value of [qtdtdesc] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtdesc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtdesc !== $v) {
            $this->qtdtdesc = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTDESC] = true;
        }

        return $this;
    } // setQtdtdesc()

    /**
     * Set the value of [qtdtdesc2] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtdesc2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtdesc2 !== $v) {
            $this->qtdtdesc2 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTDESC2] = true;
        }

        return $this;
    } // setQtdtdesc2()

    /**
     * Set the value of [qtdtcustcrssref] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtcustcrssref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtcustcrssref !== $v) {
            $this->qtdtcustcrssref = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTCUSTCRSSREF] = true;
        }

        return $this;
    } // setQtdtcustcrssref()

    /**
     * Set the value of [intbwhse] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setIntbwhse($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbwhse !== $v) {
            $this->intbwhse = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_INTBWHSE] = true;
        }

        return $this;
    } // setIntbwhse()

    /**
     * Set the value of [qtdtrqstdate] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtrqstdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtrqstdate !== $v) {
            $this->qtdtrqstdate = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTRQSTDATE] = true;
        }

        return $this;
    } // setQtdtrqstdate()

    /**
     * Set the value of [qtdtspecordr] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtspecordr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtspecordr !== $v) {
            $this->qtdtspecordr = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTSPECORDR] = true;
        }

        return $this;
    } // setQtdtspecordr()

    /**
     * Set the value of [artbmtaxcode] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setArtbmtaxcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbmtaxcode !== $v) {
            $this->artbmtaxcode = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_ARTBMTAXCODE] = true;
        }

        return $this;
    } // setArtbmtaxcode()

    /**
     * Set the value of [qtdtqtyord] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtqtyord($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtqtyord !== $v) {
            $this->qtdtqtyord = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQTYORD] = true;
        }

        return $this;
    } // setQtdtqtyord()

    /**
     * Set the value of [qtdtpric] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtpric !== $v) {
            $this->qtdtpric = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTPRIC] = true;
        }

        return $this;
    } // setQtdtpric()

    /**
     * Set the value of [qtdtcost] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtcost !== $v) {
            $this->qtdtcost = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTCOST] = true;
        }

        return $this;
    } // setQtdtcost()

    /**
     * Set the value of [qtdttaxpcttot] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdttaxpcttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdttaxpcttot !== $v) {
            $this->qtdttaxpcttot = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTTAXPCTTOT] = true;
        }

        return $this;
    } // setQtdttaxpcttot()

    /**
     * Set the value of [qtdtprictot] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtprictot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtprictot !== $v) {
            $this->qtdtprictot = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTPRICTOT] = true;
        }

        return $this;
    } // setQtdtprictot()

    /**
     * Set the value of [qtdtcosttot] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtcosttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtcosttot !== $v) {
            $this->qtdtcosttot = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTCOSTTOT] = true;
        }

        return $this;
    } // setQtdtcosttot()

    /**
     * Set the value of [qtdtwghttot] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtwghttot($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtwghttot !== $v) {
            $this->qtdtwghttot = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTWGHTTOT] = true;
        }

        return $this;
    } // setQtdtwghttot()

    /**
     * Set the value of [qtdtmstrtaxcode1] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxcode1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxcode1 !== $v) {
            $this->qtdtmstrtaxcode1 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXCODE1] = true;
        }

        return $this;
    } // setQtdtmstrtaxcode1()

    /**
     * Set the value of [qtdtmstrtaxpct1] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxpct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxpct1 !== $v) {
            $this->qtdtmstrtaxpct1 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXPCT1] = true;
        }

        return $this;
    } // setQtdtmstrtaxpct1()

    /**
     * Set the value of [qtdtmstrtaxcode2] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxcode2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxcode2 !== $v) {
            $this->qtdtmstrtaxcode2 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXCODE2] = true;
        }

        return $this;
    } // setQtdtmstrtaxcode2()

    /**
     * Set the value of [qtdtmstrtaxpct2] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxpct2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxpct2 !== $v) {
            $this->qtdtmstrtaxpct2 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXPCT2] = true;
        }

        return $this;
    } // setQtdtmstrtaxpct2()

    /**
     * Set the value of [qtdtmstrtaxcode3] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxcode3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxcode3 !== $v) {
            $this->qtdtmstrtaxcode3 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXCODE3] = true;
        }

        return $this;
    } // setQtdtmstrtaxcode3()

    /**
     * Set the value of [qtdtmstrtaxpct3] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxpct3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxpct3 !== $v) {
            $this->qtdtmstrtaxpct3 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXPCT3] = true;
        }

        return $this;
    } // setQtdtmstrtaxpct3()

    /**
     * Set the value of [qtdtmstrtaxcode4] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxcode4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxcode4 !== $v) {
            $this->qtdtmstrtaxcode4 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXCODE4] = true;
        }

        return $this;
    } // setQtdtmstrtaxcode4()

    /**
     * Set the value of [qtdtmstrtaxpct4] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxpct4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxpct4 !== $v) {
            $this->qtdtmstrtaxpct4 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXPCT4] = true;
        }

        return $this;
    } // setQtdtmstrtaxpct4()

    /**
     * Set the value of [qtdtmstrtaxcode5] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxcode5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxcode5 !== $v) {
            $this->qtdtmstrtaxcode5 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXCODE5] = true;
        }

        return $this;
    } // setQtdtmstrtaxcode5()

    /**
     * Set the value of [qtdtmstrtaxpct5] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxpct5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxpct5 !== $v) {
            $this->qtdtmstrtaxpct5 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXPCT5] = true;
        }

        return $this;
    } // setQtdtmstrtaxpct5()

    /**
     * Set the value of [qtdtmstrtaxcode6] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxcode6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxcode6 !== $v) {
            $this->qtdtmstrtaxcode6 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXCODE6] = true;
        }

        return $this;
    } // setQtdtmstrtaxcode6()

    /**
     * Set the value of [qtdtmstrtaxpct6] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxpct6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxpct6 !== $v) {
            $this->qtdtmstrtaxpct6 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXPCT6] = true;
        }

        return $this;
    } // setQtdtmstrtaxpct6()

    /**
     * Set the value of [qtdtmstrtaxcode7] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxcode7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxcode7 !== $v) {
            $this->qtdtmstrtaxcode7 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXCODE7] = true;
        }

        return $this;
    } // setQtdtmstrtaxcode7()

    /**
     * Set the value of [qtdtmstrtaxpct7] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxpct7($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxpct7 !== $v) {
            $this->qtdtmstrtaxpct7 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXPCT7] = true;
        }

        return $this;
    } // setQtdtmstrtaxpct7()

    /**
     * Set the value of [qtdtmstrtaxcode8] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxcode8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxcode8 !== $v) {
            $this->qtdtmstrtaxcode8 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXCODE8] = true;
        }

        return $this;
    } // setQtdtmstrtaxcode8()

    /**
     * Set the value of [qtdtmstrtaxpct8] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxpct8($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxpct8 !== $v) {
            $this->qtdtmstrtaxpct8 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXPCT8] = true;
        }

        return $this;
    } // setQtdtmstrtaxpct8()

    /**
     * Set the value of [qtdtmstrtaxcode9] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxcode9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxcode9 !== $v) {
            $this->qtdtmstrtaxcode9 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXCODE9] = true;
        }

        return $this;
    } // setQtdtmstrtaxcode9()

    /**
     * Set the value of [qtdtmstrtaxpct9] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmstrtaxpct9($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmstrtaxpct9 !== $v) {
            $this->qtdtmstrtaxpct9 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMSTRTAXPCT9] = true;
        }

        return $this;
    } // setQtdtmstrtaxpct9()

    /**
     * Set the value of [intbuomsale] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setIntbuomsale($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuomsale !== $v) {
            $this->intbuomsale = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_INTBUOMSALE] = true;
        }

        return $this;
    } // setIntbuomsale()

    /**
     * Set the value of [intbuompur] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setIntbuompur($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->intbuompur !== $v) {
            $this->intbuompur = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_INTBUOMPUR] = true;
        }

        return $this;
    } // setIntbuompur()

    /**
     * Set the value of [qtdtquotind1] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotind1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotind1 !== $v) {
            $this->qtdtquotind1 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTIND1] = true;
        }

        return $this;
    } // setQtdtquotind1()

    /**
     * Set the value of [qtdtquotunit1] column.
     *
     * @param int $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotunit1($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qtdtquotunit1 !== $v) {
            $this->qtdtquotunit1 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTUNIT1] = true;
        }

        return $this;
    } // setQtdtquotunit1()

    /**
     * Set the value of [qtdtquotpric1] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotpric1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotpric1 !== $v) {
            $this->qtdtquotpric1 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTPRIC1] = true;
        }

        return $this;
    } // setQtdtquotpric1()

    /**
     * Set the value of [qtdtquotcost1] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotcost1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotcost1 !== $v) {
            $this->qtdtquotcost1 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTCOST1] = true;
        }

        return $this;
    } // setQtdtquotcost1()

    /**
     * Set the value of [qtdtquotmkupmarg1] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotmkupmarg1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotmkupmarg1 !== $v) {
            $this->qtdtquotmkupmarg1 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG1] = true;
        }

        return $this;
    } // setQtdtquotmkupmarg1()

    /**
     * Set the value of [qtdtquotind2] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotind2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotind2 !== $v) {
            $this->qtdtquotind2 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTIND2] = true;
        }

        return $this;
    } // setQtdtquotind2()

    /**
     * Set the value of [qtdtquotunit2] column.
     *
     * @param int $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotunit2($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qtdtquotunit2 !== $v) {
            $this->qtdtquotunit2 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTUNIT2] = true;
        }

        return $this;
    } // setQtdtquotunit2()

    /**
     * Set the value of [qtdtquotpric2] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotpric2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotpric2 !== $v) {
            $this->qtdtquotpric2 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTPRIC2] = true;
        }

        return $this;
    } // setQtdtquotpric2()

    /**
     * Set the value of [qtdtquotcost2] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotcost2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotcost2 !== $v) {
            $this->qtdtquotcost2 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTCOST2] = true;
        }

        return $this;
    } // setQtdtquotcost2()

    /**
     * Set the value of [qtdtquotmkupmarg2] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotmkupmarg2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotmkupmarg2 !== $v) {
            $this->qtdtquotmkupmarg2 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG2] = true;
        }

        return $this;
    } // setQtdtquotmkupmarg2()

    /**
     * Set the value of [qtdtquotind3] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotind3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotind3 !== $v) {
            $this->qtdtquotind3 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTIND3] = true;
        }

        return $this;
    } // setQtdtquotind3()

    /**
     * Set the value of [qtdtquotunit3] column.
     *
     * @param int $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotunit3($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qtdtquotunit3 !== $v) {
            $this->qtdtquotunit3 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTUNIT3] = true;
        }

        return $this;
    } // setQtdtquotunit3()

    /**
     * Set the value of [qtdtquotpric3] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotpric3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotpric3 !== $v) {
            $this->qtdtquotpric3 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTPRIC3] = true;
        }

        return $this;
    } // setQtdtquotpric3()

    /**
     * Set the value of [qtdtquotcost3] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotcost3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotcost3 !== $v) {
            $this->qtdtquotcost3 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTCOST3] = true;
        }

        return $this;
    } // setQtdtquotcost3()

    /**
     * Set the value of [qtdtquotmkupmarg3] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotmkupmarg3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotmkupmarg3 !== $v) {
            $this->qtdtquotmkupmarg3 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG3] = true;
        }

        return $this;
    } // setQtdtquotmkupmarg3()

    /**
     * Set the value of [qtdtquotind4] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotind4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotind4 !== $v) {
            $this->qtdtquotind4 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTIND4] = true;
        }

        return $this;
    } // setQtdtquotind4()

    /**
     * Set the value of [qtdtquotunit4] column.
     *
     * @param int $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotunit4($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qtdtquotunit4 !== $v) {
            $this->qtdtquotunit4 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTUNIT4] = true;
        }

        return $this;
    } // setQtdtquotunit4()

    /**
     * Set the value of [qtdtquotpric4] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotpric4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotpric4 !== $v) {
            $this->qtdtquotpric4 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTPRIC4] = true;
        }

        return $this;
    } // setQtdtquotpric4()

    /**
     * Set the value of [qtdtquotcost4] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotcost4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotcost4 !== $v) {
            $this->qtdtquotcost4 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTCOST4] = true;
        }

        return $this;
    } // setQtdtquotcost4()

    /**
     * Set the value of [qtdtquotmkupmarg4] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotmkupmarg4($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotmkupmarg4 !== $v) {
            $this->qtdtquotmkupmarg4 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG4] = true;
        }

        return $this;
    } // setQtdtquotmkupmarg4()

    /**
     * Set the value of [qtdtquotind5] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotind5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotind5 !== $v) {
            $this->qtdtquotind5 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTIND5] = true;
        }

        return $this;
    } // setQtdtquotind5()

    /**
     * Set the value of [qtdtquotunit5] column.
     *
     * @param int $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotunit5($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qtdtquotunit5 !== $v) {
            $this->qtdtquotunit5 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTUNIT5] = true;
        }

        return $this;
    } // setQtdtquotunit5()

    /**
     * Set the value of [qtdtquotpric5] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotpric5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotpric5 !== $v) {
            $this->qtdtquotpric5 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTPRIC5] = true;
        }

        return $this;
    } // setQtdtquotpric5()

    /**
     * Set the value of [qtdtquotcost5] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotcost5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotcost5 !== $v) {
            $this->qtdtquotcost5 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTCOST5] = true;
        }

        return $this;
    } // setQtdtquotcost5()

    /**
     * Set the value of [qtdtquotmkupmarg5] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotmkupmarg5($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotmkupmarg5 !== $v) {
            $this->qtdtquotmkupmarg5 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG5] = true;
        }

        return $this;
    } // setQtdtquotmkupmarg5()

    /**
     * Set the value of [qtdtquotind6] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotind6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotind6 !== $v) {
            $this->qtdtquotind6 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTIND6] = true;
        }

        return $this;
    } // setQtdtquotind6()

    /**
     * Set the value of [qtdtquotunit6] column.
     *
     * @param int $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotunit6($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qtdtquotunit6 !== $v) {
            $this->qtdtquotunit6 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTUNIT6] = true;
        }

        return $this;
    } // setQtdtquotunit6()

    /**
     * Set the value of [qtdtquotpric6] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotpric6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotpric6 !== $v) {
            $this->qtdtquotpric6 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTPRIC6] = true;
        }

        return $this;
    } // setQtdtquotpric6()

    /**
     * Set the value of [qtdtquotcost6] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotcost6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotcost6 !== $v) {
            $this->qtdtquotcost6 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTCOST6] = true;
        }

        return $this;
    } // setQtdtquotcost6()

    /**
     * Set the value of [qtdtquotmkupmarg6] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotmkupmarg6($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotmkupmarg6 !== $v) {
            $this->qtdtquotmkupmarg6 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG6] = true;
        }

        return $this;
    } // setQtdtquotmkupmarg6()

    /**
     * Set the value of [qtdtasstcode] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtasstcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtasstcode !== $v) {
            $this->qtdtasstcode = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTASSTCODE] = true;
        }

        return $this;
    } // setQtdtasstcode()

    /**
     * Set the value of [qtdtasstqty] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtasstqty($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtasstqty !== $v) {
            $this->qtdtasstqty = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTASSTQTY] = true;
        }

        return $this;
    } // setQtdtasstqty()

    /**
     * Set the value of [qtdtlistpric] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtlistpric($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtlistpric !== $v) {
            $this->qtdtlistpric = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTLISTPRIC] = true;
        }

        return $this;
    } // setQtdtlistpric()

    /**
     * Set the value of [qtdtstancost] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtstancost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtstancost !== $v) {
            $this->qtdtstancost = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTSTANCOST] = true;
        }

        return $this;
    } // setQtdtstancost()

    /**
     * Set the value of [qtdtvenditemjob] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtvenditemjob($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtvenditemjob !== $v) {
            $this->qtdtvenditemjob = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTVENDITEMJOB] = true;
        }

        return $this;
    } // setQtdtvenditemjob()

    /**
     * Set the value of [apvevendid] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setApvevendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvevendid !== $v) {
            $this->apvevendid = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_APVEVENDID] = true;
        }

        return $this;
    } // setApvevendid()

    /**
     * Set the value of [qtdtnsitemgrup] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtnsitemgrup($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtnsitemgrup !== $v) {
            $this->qtdtnsitemgrup = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTNSITEMGRUP] = true;
        }

        return $this;
    } // setQtdtnsitemgrup()

    /**
     * Set the value of [qtdtusecode] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtusecode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtusecode !== $v) {
            $this->qtdtusecode = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTUSECODE] = true;
        }

        return $this;
    } // setQtdtusecode()

    /**
     * Set the value of [qtdtpickflag] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtpickflag($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtpickflag !== $v) {
            $this->qtdtpickflag = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTPICKFLAG] = true;
        }

        return $this;
    } // setQtdtpickflag()

    /**
     * Set the value of [qtdtstatus] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtstatus !== $v) {
            $this->qtdtstatus = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTSTATUS] = true;
        }

        return $this;
    } // setQtdtstatus()

    /**
     * Set the value of [oetblsslcode] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setOetblsslcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->oetblsslcode !== $v) {
            $this->oetblsslcode = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_OETBLSSLCODE] = true;
        }

        return $this;
    } // setOetblsslcode()

    /**
     * Set the value of [qtdtlostdate] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtlostdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtlostdate !== $v) {
            $this->qtdtlostdate = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTLOSTDATE] = true;
        }

        return $this;
    } // setQtdtlostdate()

    /**
     * Set the value of [qtdtlostposted] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtlostposted($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtlostposted !== $v) {
            $this->qtdtlostposted = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTLOSTPOSTED] = true;
        }

        return $this;
    } // setQtdtlostposted()

    /**
     * Set the value of [qtdtleaddays] column.
     *
     * @param int $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtleaddays($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->qtdtleaddays !== $v) {
            $this->qtdtleaddays = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTLEADDAYS] = true;
        }

        return $this;
    } // setQtdtleaddays()

    /**
     * Set the value of [qtdtordrdiscpct] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtordrdiscpct($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtordrdiscpct !== $v) {
            $this->qtdtordrdiscpct = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTORDRDISCPCT] = true;
        }

        return $this;
    } // setQtdtordrdiscpct()

    /**
     * Set the value of [qtdtquotdiscpct1] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtquotdiscpct1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtquotdiscpct1 !== $v) {
            $this->qtdtquotdiscpct1 = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTQUOTDISCPCT1] = true;
        }

        return $this;
    } // setQtdtquotdiscpct1()

    /**
     * Set the value of [qtdtmtrcreqd] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmtrcreqd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmtrcreqd !== $v) {
            $this->qtdtmtrcreqd = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMTRCREQD] = true;
        }

        return $this;
    } // setQtdtmtrcreqd()

    /**
     * Set the value of [qtdtcofcreqd] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtcofcreqd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtcofcreqd !== $v) {
            $this->qtdtcofcreqd = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTCOFCREQD] = true;
        }

        return $this;
    } // setQtdtcofcreqd()

    /**
     * Set the value of [qtdtmnfrid] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmnfrid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmnfrid !== $v) {
            $this->qtdtmnfrid = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMNFRID] = true;
        }

        return $this;
    } // setQtdtmnfrid()

    /**
     * Set the value of [qtdtmnfritemid] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtmnfritemid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtmnfritemid !== $v) {
            $this->qtdtmnfritemid = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTMNFRITEMID] = true;
        }

        return $this;
    } // setQtdtmnfritemid()

    /**
     * Set the value of [qtdtlmordrnbr] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtlmordrnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtlmordrnbr !== $v) {
            $this->qtdtlmordrnbr = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTLMORDRNBR] = true;
        }

        return $this;
    } // setQtdtlmordrnbr()

    /**
     * Set the value of [qtdtlmordrdate] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtlmordrdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtlmordrdate !== $v) {
            $this->qtdtlmordrdate = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTLMORDRDATE] = true;
        }

        return $this;
    } // setQtdtlmordrdate()

    /**
     * Set the value of [qtdtspecitemcode] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtspecitemcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtspecitemcode !== $v) {
            $this->qtdtspecitemcode = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTSPECITEMCODE] = true;
        }

        return $this;
    } // setQtdtspecitemcode()

    /**
     * Set the value of [qtdtacsalepgm] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtacsalepgm($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtacsalepgm !== $v) {
            $this->qtdtacsalepgm = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTACSALEPGM] = true;
        }

        return $this;
    } // setQtdtacsalepgm()

    /**
     * Set the value of [qtdtnsvendshipfr] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtnsvendshipfr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtnsvendshipfr !== $v) {
            $this->qtdtnsvendshipfr = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTNSVENDSHIPFR] = true;
        }

        return $this;
    } // setQtdtnsvendshipfr()

    /**
     * Set the value of [qtdtprntmnfrnote] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setQtdtprntmnfrnote($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->qtdtprntmnfrnote !== $v) {
            $this->qtdtprntmnfrnote = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_QTDTPRNTMNFRNOTE] = true;
        }

        return $this;
    } // setQtdtprntmnfrnote()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\QuoteDetail The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[QuoteDetailTableMap::COL_DUMMY] = true;
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

            if ($this->qtdtline !== 0) {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : QuoteDetailTableMap::translateFieldName('Qthdid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qthdid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtline', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtline = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : QuoteDetailTableMap::translateFieldName('Inititemnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->inititemnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtdesc', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtdesc = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtdesc2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtdesc2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtcustcrssref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtcustcrssref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : QuoteDetailTableMap::translateFieldName('Intbwhse', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbwhse = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtrqstdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtrqstdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtspecordr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtspecordr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : QuoteDetailTableMap::translateFieldName('Artbmtaxcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbmtaxcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtqtyord', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtqtyord = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdttaxpcttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdttaxpcttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtprictot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtprictot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtcosttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtcosttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtwghttot', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtwghttot = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxcode1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxcode1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxpct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxpct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxcode2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxcode2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxpct2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxpct2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxcode3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxcode3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxpct3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxpct3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxcode4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxcode4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxpct4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxpct4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxcode5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxcode5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxpct5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxpct5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxcode6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxcode6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxpct6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxpct6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxcode7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxcode7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxpct7', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxpct7 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxcode8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxcode8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxpct8', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxpct8 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxcode9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxcode9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmstrtaxpct9', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmstrtaxpct9 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : QuoteDetailTableMap::translateFieldName('Intbuomsale', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuomsale = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : QuoteDetailTableMap::translateFieldName('Intbuompur', TableMap::TYPE_PHPNAME, $indexType)];
            $this->intbuompur = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotind1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotind1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotunit1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotunit1 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotpric1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotpric1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotcost1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotcost1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotmkupmarg1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotmkupmarg1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotind2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotind2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotunit2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotunit2 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotpric2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotpric2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotcost2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotcost2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotmkupmarg2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotmkupmarg2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotind3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotind3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotunit3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotunit3 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotpric3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotpric3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotcost3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotcost3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotmkupmarg3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotmkupmarg3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotind4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotind4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotunit4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotunit4 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotpric4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotpric4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotcost4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotcost4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 56 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotmkupmarg4', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotmkupmarg4 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 57 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotind5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotind5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 58 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotunit5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotunit5 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 59 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotpric5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotpric5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 60 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotcost5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotcost5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 61 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotmkupmarg5', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotmkupmarg5 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 62 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotind6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotind6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 63 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotunit6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotunit6 = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 64 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotpric6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotpric6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 65 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotcost6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotcost6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 66 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotmkupmarg6', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotmkupmarg6 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 67 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtasstcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtasstcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 68 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtasstqty', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtasstqty = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 69 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtlistpric', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtlistpric = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 70 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtstancost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtstancost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 71 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtvenditemjob', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtvenditemjob = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 72 + $startcol : QuoteDetailTableMap::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvevendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 73 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtnsitemgrup', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtnsitemgrup = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 74 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtusecode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtusecode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 75 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtpickflag', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtpickflag = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 76 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtstatus', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtstatus = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 77 + $startcol : QuoteDetailTableMap::translateFieldName('Oetblsslcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->oetblsslcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 78 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtlostdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtlostdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 79 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtlostposted', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtlostposted = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 80 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtleaddays', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtleaddays = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 81 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtordrdiscpct', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtordrdiscpct = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 82 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtquotdiscpct1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtquotdiscpct1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 83 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmtrcreqd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmtrcreqd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 84 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtcofcreqd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtcofcreqd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 85 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmnfrid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmnfrid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 86 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtmnfritemid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtmnfritemid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 87 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtlmordrnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtlmordrnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 88 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtlmordrdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtlmordrdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 89 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtspecitemcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtspecitemcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 90 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtacsalepgm', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtacsalepgm = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 91 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtnsvendshipfr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtnsvendshipfr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 92 + $startcol : QuoteDetailTableMap::translateFieldName('Qtdtprntmnfrnote', TableMap::TYPE_PHPNAME, $indexType)];
            $this->qtdtprntmnfrnote = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 93 + $startcol : QuoteDetailTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 94 + $startcol : QuoteDetailTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 95 + $startcol : QuoteDetailTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 96; // 96 = QuoteDetailTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\QuoteDetail'), 0, $e);
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
        if ($this->aQuote !== null && $this->qthdid !== $this->aQuote->getQthdid()) {
            $this->aQuote = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(QuoteDetailTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildQuoteDetailQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aQuote = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see QuoteDetail::setDeleted()
     * @see QuoteDetail::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteDetailTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildQuoteDetailQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(QuoteDetailTableMap::DATABASE_NAME);
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
                QuoteDetailTableMap::addInstanceToPool($this);
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

            if ($this->aQuote !== null) {
                if ($this->aQuote->isModified() || $this->aQuote->isNew()) {
                    $affectedRows += $this->aQuote->save($con);
                }
                $this->setQuote($this->aQuote);
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
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTHDID)) {
            $modifiedColumns[':p' . $index++]  = 'QthdId';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLINE)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtLine';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_INITITEMNBR)) {
            $modifiedColumns[':p' . $index++]  = 'InitItemNbr';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTDESC)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtDesc';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTDESC2)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtDesc2';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTCUSTCRSSREF)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtCustCrssRef';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_INTBWHSE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbWhse';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTRQSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtRqstDate';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTSPECORDR)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtSpecOrdr';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_ARTBMTAXCODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbMTaxCode';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQTYORD)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQtyOrd';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtPric';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTCOST)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtCost';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTTAXPCTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtTaxPctTot';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTPRICTOT)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtPricTot';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTCOSTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtCostTot';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTWGHTTOT)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtWghtTot';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE1)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxCode1';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxPct1';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE2)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxCode2';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT2)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxPct2';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE3)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxCode3';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT3)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxPct3';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE4)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxCode4';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT4)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxPct4';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE5)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxCode5';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT5)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxPct5';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE6)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxCode6';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT6)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxPct6';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE7)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxCode7';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT7)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxPct7';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE8)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxCode8';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT8)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxPct8';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE9)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxCode9';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT9)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMstrTaxPct9';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_INTBUOMSALE)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomSale';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_INTBUOMPUR)) {
            $modifiedColumns[':p' . $index++]  = 'IntbUomPur';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTIND1)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotInd1';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTUNIT1)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotUnit1';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTPRIC1)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotPric1';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTCOST1)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotCost1';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG1)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotMkupMarg1';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTIND2)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotInd2';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTUNIT2)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotUnit2';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTPRIC2)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotPric2';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTCOST2)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotCost2';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG2)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotMkupMarg2';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTIND3)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotInd3';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTUNIT3)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotUnit3';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTPRIC3)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotPric3';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTCOST3)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotCost3';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG3)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotMkupMarg3';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTIND4)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotInd4';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTUNIT4)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotUnit4';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTPRIC4)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotPric4';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTCOST4)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotCost4';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG4)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotMkupMarg4';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTIND5)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotInd5';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTUNIT5)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotUnit5';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTPRIC5)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotPric5';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTCOST5)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotCost5';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG5)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotMkupMarg5';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTIND6)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotInd6';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTUNIT6)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotUnit6';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTPRIC6)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotPric6';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTCOST6)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotCost6';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG6)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotMkupMarg6';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTASSTCODE)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtAsstCode';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTASSTQTY)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtAsstQty';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLISTPRIC)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtListPric';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTSTANCOST)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtStanCost';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTVENDITEMJOB)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtVendItemJob';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_APVEVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ApveVendId';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTNSITEMGRUP)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtNsItemGrup';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTUSECODE)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtUseCode';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTPICKFLAG)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtPickFlag';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTSTATUS)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtStatus';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_OETBLSSLCODE)) {
            $modifiedColumns[':p' . $index++]  = 'OetbLsslCode';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLOSTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtLostDate';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLOSTPOSTED)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtLostPosted';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLEADDAYS)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtLeadDays';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTORDRDISCPCT)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtOrdrDiscPct';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTDISCPCT1)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtQuotDiscPct1';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMTRCREQD)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMtrcReqd';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTCOFCREQD)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtCofcReqd';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMNFRID)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMnfrId';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMNFRITEMID)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtMnfrItemId';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLMORDRNBR)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtLmOrdrNbr';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLMORDRDATE)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtLmOrdrDate';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTSPECITEMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtSpecItemCode';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTACSALEPGM)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtAcSalePgm';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTNSVENDSHIPFR)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtNsVendShipfr';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTPRNTMNFRNOTE)) {
            $modifiedColumns[':p' . $index++]  = 'QtdtPrntMnfrNote';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO quote_detail (%s) VALUES (%s)',
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
                    case 'QtdtLine':
                        $stmt->bindValue($identifier, $this->qtdtline, PDO::PARAM_INT);
                        break;
                    case 'InitItemNbr':
                        $stmt->bindValue($identifier, $this->inititemnbr, PDO::PARAM_STR);
                        break;
                    case 'QtdtDesc':
                        $stmt->bindValue($identifier, $this->qtdtdesc, PDO::PARAM_STR);
                        break;
                    case 'QtdtDesc2':
                        $stmt->bindValue($identifier, $this->qtdtdesc2, PDO::PARAM_STR);
                        break;
                    case 'QtdtCustCrssRef':
                        $stmt->bindValue($identifier, $this->qtdtcustcrssref, PDO::PARAM_STR);
                        break;
                    case 'IntbWhse':
                        $stmt->bindValue($identifier, $this->intbwhse, PDO::PARAM_STR);
                        break;
                    case 'QtdtRqstDate':
                        $stmt->bindValue($identifier, $this->qtdtrqstdate, PDO::PARAM_STR);
                        break;
                    case 'QtdtSpecOrdr':
                        $stmt->bindValue($identifier, $this->qtdtspecordr, PDO::PARAM_STR);
                        break;
                    case 'ArtbMTaxCode':
                        $stmt->bindValue($identifier, $this->artbmtaxcode, PDO::PARAM_STR);
                        break;
                    case 'QtdtQtyOrd':
                        $stmt->bindValue($identifier, $this->qtdtqtyord, PDO::PARAM_STR);
                        break;
                    case 'QtdtPric':
                        $stmt->bindValue($identifier, $this->qtdtpric, PDO::PARAM_STR);
                        break;
                    case 'QtdtCost':
                        $stmt->bindValue($identifier, $this->qtdtcost, PDO::PARAM_STR);
                        break;
                    case 'QtdtTaxPctTot':
                        $stmt->bindValue($identifier, $this->qtdttaxpcttot, PDO::PARAM_STR);
                        break;
                    case 'QtdtPricTot':
                        $stmt->bindValue($identifier, $this->qtdtprictot, PDO::PARAM_STR);
                        break;
                    case 'QtdtCostTot':
                        $stmt->bindValue($identifier, $this->qtdtcosttot, PDO::PARAM_STR);
                        break;
                    case 'QtdtWghtTot':
                        $stmt->bindValue($identifier, $this->qtdtwghttot, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxCode1':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxcode1, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxPct1':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxpct1, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxCode2':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxcode2, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxPct2':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxpct2, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxCode3':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxcode3, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxPct3':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxpct3, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxCode4':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxcode4, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxPct4':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxpct4, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxCode5':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxcode5, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxPct5':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxpct5, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxCode6':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxcode6, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxPct6':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxpct6, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxCode7':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxcode7, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxPct7':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxpct7, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxCode8':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxcode8, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxPct8':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxpct8, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxCode9':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxcode9, PDO::PARAM_STR);
                        break;
                    case 'QtdtMstrTaxPct9':
                        $stmt->bindValue($identifier, $this->qtdtmstrtaxpct9, PDO::PARAM_STR);
                        break;
                    case 'IntbUomSale':
                        $stmt->bindValue($identifier, $this->intbuomsale, PDO::PARAM_STR);
                        break;
                    case 'IntbUomPur':
                        $stmt->bindValue($identifier, $this->intbuompur, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotInd1':
                        $stmt->bindValue($identifier, $this->qtdtquotind1, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotUnit1':
                        $stmt->bindValue($identifier, $this->qtdtquotunit1, PDO::PARAM_INT);
                        break;
                    case 'QtdtQuotPric1':
                        $stmt->bindValue($identifier, $this->qtdtquotpric1, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotCost1':
                        $stmt->bindValue($identifier, $this->qtdtquotcost1, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotMkupMarg1':
                        $stmt->bindValue($identifier, $this->qtdtquotmkupmarg1, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotInd2':
                        $stmt->bindValue($identifier, $this->qtdtquotind2, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotUnit2':
                        $stmt->bindValue($identifier, $this->qtdtquotunit2, PDO::PARAM_INT);
                        break;
                    case 'QtdtQuotPric2':
                        $stmt->bindValue($identifier, $this->qtdtquotpric2, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotCost2':
                        $stmt->bindValue($identifier, $this->qtdtquotcost2, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotMkupMarg2':
                        $stmt->bindValue($identifier, $this->qtdtquotmkupmarg2, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotInd3':
                        $stmt->bindValue($identifier, $this->qtdtquotind3, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotUnit3':
                        $stmt->bindValue($identifier, $this->qtdtquotunit3, PDO::PARAM_INT);
                        break;
                    case 'QtdtQuotPric3':
                        $stmt->bindValue($identifier, $this->qtdtquotpric3, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotCost3':
                        $stmt->bindValue($identifier, $this->qtdtquotcost3, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotMkupMarg3':
                        $stmt->bindValue($identifier, $this->qtdtquotmkupmarg3, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotInd4':
                        $stmt->bindValue($identifier, $this->qtdtquotind4, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotUnit4':
                        $stmt->bindValue($identifier, $this->qtdtquotunit4, PDO::PARAM_INT);
                        break;
                    case 'QtdtQuotPric4':
                        $stmt->bindValue($identifier, $this->qtdtquotpric4, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotCost4':
                        $stmt->bindValue($identifier, $this->qtdtquotcost4, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotMkupMarg4':
                        $stmt->bindValue($identifier, $this->qtdtquotmkupmarg4, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotInd5':
                        $stmt->bindValue($identifier, $this->qtdtquotind5, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotUnit5':
                        $stmt->bindValue($identifier, $this->qtdtquotunit5, PDO::PARAM_INT);
                        break;
                    case 'QtdtQuotPric5':
                        $stmt->bindValue($identifier, $this->qtdtquotpric5, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotCost5':
                        $stmt->bindValue($identifier, $this->qtdtquotcost5, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotMkupMarg5':
                        $stmt->bindValue($identifier, $this->qtdtquotmkupmarg5, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotInd6':
                        $stmt->bindValue($identifier, $this->qtdtquotind6, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotUnit6':
                        $stmt->bindValue($identifier, $this->qtdtquotunit6, PDO::PARAM_INT);
                        break;
                    case 'QtdtQuotPric6':
                        $stmt->bindValue($identifier, $this->qtdtquotpric6, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotCost6':
                        $stmt->bindValue($identifier, $this->qtdtquotcost6, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotMkupMarg6':
                        $stmt->bindValue($identifier, $this->qtdtquotmkupmarg6, PDO::PARAM_STR);
                        break;
                    case 'QtdtAsstCode':
                        $stmt->bindValue($identifier, $this->qtdtasstcode, PDO::PARAM_STR);
                        break;
                    case 'QtdtAsstQty':
                        $stmt->bindValue($identifier, $this->qtdtasstqty, PDO::PARAM_STR);
                        break;
                    case 'QtdtListPric':
                        $stmt->bindValue($identifier, $this->qtdtlistpric, PDO::PARAM_STR);
                        break;
                    case 'QtdtStanCost':
                        $stmt->bindValue($identifier, $this->qtdtstancost, PDO::PARAM_STR);
                        break;
                    case 'QtdtVendItemJob':
                        $stmt->bindValue($identifier, $this->qtdtvenditemjob, PDO::PARAM_STR);
                        break;
                    case 'ApveVendId':
                        $stmt->bindValue($identifier, $this->apvevendid, PDO::PARAM_STR);
                        break;
                    case 'QtdtNsItemGrup':
                        $stmt->bindValue($identifier, $this->qtdtnsitemgrup, PDO::PARAM_STR);
                        break;
                    case 'QtdtUseCode':
                        $stmt->bindValue($identifier, $this->qtdtusecode, PDO::PARAM_STR);
                        break;
                    case 'QtdtPickFlag':
                        $stmt->bindValue($identifier, $this->qtdtpickflag, PDO::PARAM_STR);
                        break;
                    case 'QtdtStatus':
                        $stmt->bindValue($identifier, $this->qtdtstatus, PDO::PARAM_STR);
                        break;
                    case 'OetbLsslCode':
                        $stmt->bindValue($identifier, $this->oetblsslcode, PDO::PARAM_STR);
                        break;
                    case 'QtdtLostDate':
                        $stmt->bindValue($identifier, $this->qtdtlostdate, PDO::PARAM_STR);
                        break;
                    case 'QtdtLostPosted':
                        $stmt->bindValue($identifier, $this->qtdtlostposted, PDO::PARAM_STR);
                        break;
                    case 'QtdtLeadDays':
                        $stmt->bindValue($identifier, $this->qtdtleaddays, PDO::PARAM_INT);
                        break;
                    case 'QtdtOrdrDiscPct':
                        $stmt->bindValue($identifier, $this->qtdtordrdiscpct, PDO::PARAM_STR);
                        break;
                    case 'QtdtQuotDiscPct1':
                        $stmt->bindValue($identifier, $this->qtdtquotdiscpct1, PDO::PARAM_STR);
                        break;
                    case 'QtdtMtrcReqd':
                        $stmt->bindValue($identifier, $this->qtdtmtrcreqd, PDO::PARAM_STR);
                        break;
                    case 'QtdtCofcReqd':
                        $stmt->bindValue($identifier, $this->qtdtcofcreqd, PDO::PARAM_STR);
                        break;
                    case 'QtdtMnfrId':
                        $stmt->bindValue($identifier, $this->qtdtmnfrid, PDO::PARAM_STR);
                        break;
                    case 'QtdtMnfrItemId':
                        $stmt->bindValue($identifier, $this->qtdtmnfritemid, PDO::PARAM_STR);
                        break;
                    case 'QtdtLmOrdrNbr':
                        $stmt->bindValue($identifier, $this->qtdtlmordrnbr, PDO::PARAM_STR);
                        break;
                    case 'QtdtLmOrdrDate':
                        $stmt->bindValue($identifier, $this->qtdtlmordrdate, PDO::PARAM_STR);
                        break;
                    case 'QtdtSpecItemCode':
                        $stmt->bindValue($identifier, $this->qtdtspecitemcode, PDO::PARAM_STR);
                        break;
                    case 'QtdtAcSalePgm':
                        $stmt->bindValue($identifier, $this->qtdtacsalepgm, PDO::PARAM_STR);
                        break;
                    case 'QtdtNsVendShipfr':
                        $stmt->bindValue($identifier, $this->qtdtnsvendshipfr, PDO::PARAM_STR);
                        break;
                    case 'QtdtPrntMnfrNote':
                        $stmt->bindValue($identifier, $this->qtdtprntmnfrnote, PDO::PARAM_STR);
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
        $pos = QuoteDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getQtdtline();
                break;
            case 2:
                return $this->getInititemnbr();
                break;
            case 3:
                return $this->getQtdtdesc();
                break;
            case 4:
                return $this->getQtdtdesc2();
                break;
            case 5:
                return $this->getQtdtcustcrssref();
                break;
            case 6:
                return $this->getIntbwhse();
                break;
            case 7:
                return $this->getQtdtrqstdate();
                break;
            case 8:
                return $this->getQtdtspecordr();
                break;
            case 9:
                return $this->getArtbmtaxcode();
                break;
            case 10:
                return $this->getQtdtqtyord();
                break;
            case 11:
                return $this->getQtdtpric();
                break;
            case 12:
                return $this->getQtdtcost();
                break;
            case 13:
                return $this->getQtdttaxpcttot();
                break;
            case 14:
                return $this->getQtdtprictot();
                break;
            case 15:
                return $this->getQtdtcosttot();
                break;
            case 16:
                return $this->getQtdtwghttot();
                break;
            case 17:
                return $this->getQtdtmstrtaxcode1();
                break;
            case 18:
                return $this->getQtdtmstrtaxpct1();
                break;
            case 19:
                return $this->getQtdtmstrtaxcode2();
                break;
            case 20:
                return $this->getQtdtmstrtaxpct2();
                break;
            case 21:
                return $this->getQtdtmstrtaxcode3();
                break;
            case 22:
                return $this->getQtdtmstrtaxpct3();
                break;
            case 23:
                return $this->getQtdtmstrtaxcode4();
                break;
            case 24:
                return $this->getQtdtmstrtaxpct4();
                break;
            case 25:
                return $this->getQtdtmstrtaxcode5();
                break;
            case 26:
                return $this->getQtdtmstrtaxpct5();
                break;
            case 27:
                return $this->getQtdtmstrtaxcode6();
                break;
            case 28:
                return $this->getQtdtmstrtaxpct6();
                break;
            case 29:
                return $this->getQtdtmstrtaxcode7();
                break;
            case 30:
                return $this->getQtdtmstrtaxpct7();
                break;
            case 31:
                return $this->getQtdtmstrtaxcode8();
                break;
            case 32:
                return $this->getQtdtmstrtaxpct8();
                break;
            case 33:
                return $this->getQtdtmstrtaxcode9();
                break;
            case 34:
                return $this->getQtdtmstrtaxpct9();
                break;
            case 35:
                return $this->getIntbuomsale();
                break;
            case 36:
                return $this->getIntbuompur();
                break;
            case 37:
                return $this->getQtdtquotind1();
                break;
            case 38:
                return $this->getQtdtquotunit1();
                break;
            case 39:
                return $this->getQtdtquotpric1();
                break;
            case 40:
                return $this->getQtdtquotcost1();
                break;
            case 41:
                return $this->getQtdtquotmkupmarg1();
                break;
            case 42:
                return $this->getQtdtquotind2();
                break;
            case 43:
                return $this->getQtdtquotunit2();
                break;
            case 44:
                return $this->getQtdtquotpric2();
                break;
            case 45:
                return $this->getQtdtquotcost2();
                break;
            case 46:
                return $this->getQtdtquotmkupmarg2();
                break;
            case 47:
                return $this->getQtdtquotind3();
                break;
            case 48:
                return $this->getQtdtquotunit3();
                break;
            case 49:
                return $this->getQtdtquotpric3();
                break;
            case 50:
                return $this->getQtdtquotcost3();
                break;
            case 51:
                return $this->getQtdtquotmkupmarg3();
                break;
            case 52:
                return $this->getQtdtquotind4();
                break;
            case 53:
                return $this->getQtdtquotunit4();
                break;
            case 54:
                return $this->getQtdtquotpric4();
                break;
            case 55:
                return $this->getQtdtquotcost4();
                break;
            case 56:
                return $this->getQtdtquotmkupmarg4();
                break;
            case 57:
                return $this->getQtdtquotind5();
                break;
            case 58:
                return $this->getQtdtquotunit5();
                break;
            case 59:
                return $this->getQtdtquotpric5();
                break;
            case 60:
                return $this->getQtdtquotcost5();
                break;
            case 61:
                return $this->getQtdtquotmkupmarg5();
                break;
            case 62:
                return $this->getQtdtquotind6();
                break;
            case 63:
                return $this->getQtdtquotunit6();
                break;
            case 64:
                return $this->getQtdtquotpric6();
                break;
            case 65:
                return $this->getQtdtquotcost6();
                break;
            case 66:
                return $this->getQtdtquotmkupmarg6();
                break;
            case 67:
                return $this->getQtdtasstcode();
                break;
            case 68:
                return $this->getQtdtasstqty();
                break;
            case 69:
                return $this->getQtdtlistpric();
                break;
            case 70:
                return $this->getQtdtstancost();
                break;
            case 71:
                return $this->getQtdtvenditemjob();
                break;
            case 72:
                return $this->getApvevendid();
                break;
            case 73:
                return $this->getQtdtnsitemgrup();
                break;
            case 74:
                return $this->getQtdtusecode();
                break;
            case 75:
                return $this->getQtdtpickflag();
                break;
            case 76:
                return $this->getQtdtstatus();
                break;
            case 77:
                return $this->getOetblsslcode();
                break;
            case 78:
                return $this->getQtdtlostdate();
                break;
            case 79:
                return $this->getQtdtlostposted();
                break;
            case 80:
                return $this->getQtdtleaddays();
                break;
            case 81:
                return $this->getQtdtordrdiscpct();
                break;
            case 82:
                return $this->getQtdtquotdiscpct1();
                break;
            case 83:
                return $this->getQtdtmtrcreqd();
                break;
            case 84:
                return $this->getQtdtcofcreqd();
                break;
            case 85:
                return $this->getQtdtmnfrid();
                break;
            case 86:
                return $this->getQtdtmnfritemid();
                break;
            case 87:
                return $this->getQtdtlmordrnbr();
                break;
            case 88:
                return $this->getQtdtlmordrdate();
                break;
            case 89:
                return $this->getQtdtspecitemcode();
                break;
            case 90:
                return $this->getQtdtacsalepgm();
                break;
            case 91:
                return $this->getQtdtnsvendshipfr();
                break;
            case 92:
                return $this->getQtdtprntmnfrnote();
                break;
            case 93:
                return $this->getDateupdtd();
                break;
            case 94:
                return $this->getTimeupdtd();
                break;
            case 95:
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

        if (isset($alreadyDumpedObjects['QuoteDetail'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['QuoteDetail'][$this->hashCode()] = true;
        $keys = QuoteDetailTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getQthdid(),
            $keys[1] => $this->getQtdtline(),
            $keys[2] => $this->getInititemnbr(),
            $keys[3] => $this->getQtdtdesc(),
            $keys[4] => $this->getQtdtdesc2(),
            $keys[5] => $this->getQtdtcustcrssref(),
            $keys[6] => $this->getIntbwhse(),
            $keys[7] => $this->getQtdtrqstdate(),
            $keys[8] => $this->getQtdtspecordr(),
            $keys[9] => $this->getArtbmtaxcode(),
            $keys[10] => $this->getQtdtqtyord(),
            $keys[11] => $this->getQtdtpric(),
            $keys[12] => $this->getQtdtcost(),
            $keys[13] => $this->getQtdttaxpcttot(),
            $keys[14] => $this->getQtdtprictot(),
            $keys[15] => $this->getQtdtcosttot(),
            $keys[16] => $this->getQtdtwghttot(),
            $keys[17] => $this->getQtdtmstrtaxcode1(),
            $keys[18] => $this->getQtdtmstrtaxpct1(),
            $keys[19] => $this->getQtdtmstrtaxcode2(),
            $keys[20] => $this->getQtdtmstrtaxpct2(),
            $keys[21] => $this->getQtdtmstrtaxcode3(),
            $keys[22] => $this->getQtdtmstrtaxpct3(),
            $keys[23] => $this->getQtdtmstrtaxcode4(),
            $keys[24] => $this->getQtdtmstrtaxpct4(),
            $keys[25] => $this->getQtdtmstrtaxcode5(),
            $keys[26] => $this->getQtdtmstrtaxpct5(),
            $keys[27] => $this->getQtdtmstrtaxcode6(),
            $keys[28] => $this->getQtdtmstrtaxpct6(),
            $keys[29] => $this->getQtdtmstrtaxcode7(),
            $keys[30] => $this->getQtdtmstrtaxpct7(),
            $keys[31] => $this->getQtdtmstrtaxcode8(),
            $keys[32] => $this->getQtdtmstrtaxpct8(),
            $keys[33] => $this->getQtdtmstrtaxcode9(),
            $keys[34] => $this->getQtdtmstrtaxpct9(),
            $keys[35] => $this->getIntbuomsale(),
            $keys[36] => $this->getIntbuompur(),
            $keys[37] => $this->getQtdtquotind1(),
            $keys[38] => $this->getQtdtquotunit1(),
            $keys[39] => $this->getQtdtquotpric1(),
            $keys[40] => $this->getQtdtquotcost1(),
            $keys[41] => $this->getQtdtquotmkupmarg1(),
            $keys[42] => $this->getQtdtquotind2(),
            $keys[43] => $this->getQtdtquotunit2(),
            $keys[44] => $this->getQtdtquotpric2(),
            $keys[45] => $this->getQtdtquotcost2(),
            $keys[46] => $this->getQtdtquotmkupmarg2(),
            $keys[47] => $this->getQtdtquotind3(),
            $keys[48] => $this->getQtdtquotunit3(),
            $keys[49] => $this->getQtdtquotpric3(),
            $keys[50] => $this->getQtdtquotcost3(),
            $keys[51] => $this->getQtdtquotmkupmarg3(),
            $keys[52] => $this->getQtdtquotind4(),
            $keys[53] => $this->getQtdtquotunit4(),
            $keys[54] => $this->getQtdtquotpric4(),
            $keys[55] => $this->getQtdtquotcost4(),
            $keys[56] => $this->getQtdtquotmkupmarg4(),
            $keys[57] => $this->getQtdtquotind5(),
            $keys[58] => $this->getQtdtquotunit5(),
            $keys[59] => $this->getQtdtquotpric5(),
            $keys[60] => $this->getQtdtquotcost5(),
            $keys[61] => $this->getQtdtquotmkupmarg5(),
            $keys[62] => $this->getQtdtquotind6(),
            $keys[63] => $this->getQtdtquotunit6(),
            $keys[64] => $this->getQtdtquotpric6(),
            $keys[65] => $this->getQtdtquotcost6(),
            $keys[66] => $this->getQtdtquotmkupmarg6(),
            $keys[67] => $this->getQtdtasstcode(),
            $keys[68] => $this->getQtdtasstqty(),
            $keys[69] => $this->getQtdtlistpric(),
            $keys[70] => $this->getQtdtstancost(),
            $keys[71] => $this->getQtdtvenditemjob(),
            $keys[72] => $this->getApvevendid(),
            $keys[73] => $this->getQtdtnsitemgrup(),
            $keys[74] => $this->getQtdtusecode(),
            $keys[75] => $this->getQtdtpickflag(),
            $keys[76] => $this->getQtdtstatus(),
            $keys[77] => $this->getOetblsslcode(),
            $keys[78] => $this->getQtdtlostdate(),
            $keys[79] => $this->getQtdtlostposted(),
            $keys[80] => $this->getQtdtleaddays(),
            $keys[81] => $this->getQtdtordrdiscpct(),
            $keys[82] => $this->getQtdtquotdiscpct1(),
            $keys[83] => $this->getQtdtmtrcreqd(),
            $keys[84] => $this->getQtdtcofcreqd(),
            $keys[85] => $this->getQtdtmnfrid(),
            $keys[86] => $this->getQtdtmnfritemid(),
            $keys[87] => $this->getQtdtlmordrnbr(),
            $keys[88] => $this->getQtdtlmordrdate(),
            $keys[89] => $this->getQtdtspecitemcode(),
            $keys[90] => $this->getQtdtacsalepgm(),
            $keys[91] => $this->getQtdtnsvendshipfr(),
            $keys[92] => $this->getQtdtprntmnfrnote(),
            $keys[93] => $this->getDateupdtd(),
            $keys[94] => $this->getTimeupdtd(),
            $keys[95] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aQuote) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'quote';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'quote_header';
                        break;
                    default:
                        $key = 'Quote';
                }

                $result[$key] = $this->aQuote->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
     * @return $this|\QuoteDetail
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = QuoteDetailTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\QuoteDetail
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setQthdid($value);
                break;
            case 1:
                $this->setQtdtline($value);
                break;
            case 2:
                $this->setInititemnbr($value);
                break;
            case 3:
                $this->setQtdtdesc($value);
                break;
            case 4:
                $this->setQtdtdesc2($value);
                break;
            case 5:
                $this->setQtdtcustcrssref($value);
                break;
            case 6:
                $this->setIntbwhse($value);
                break;
            case 7:
                $this->setQtdtrqstdate($value);
                break;
            case 8:
                $this->setQtdtspecordr($value);
                break;
            case 9:
                $this->setArtbmtaxcode($value);
                break;
            case 10:
                $this->setQtdtqtyord($value);
                break;
            case 11:
                $this->setQtdtpric($value);
                break;
            case 12:
                $this->setQtdtcost($value);
                break;
            case 13:
                $this->setQtdttaxpcttot($value);
                break;
            case 14:
                $this->setQtdtprictot($value);
                break;
            case 15:
                $this->setQtdtcosttot($value);
                break;
            case 16:
                $this->setQtdtwghttot($value);
                break;
            case 17:
                $this->setQtdtmstrtaxcode1($value);
                break;
            case 18:
                $this->setQtdtmstrtaxpct1($value);
                break;
            case 19:
                $this->setQtdtmstrtaxcode2($value);
                break;
            case 20:
                $this->setQtdtmstrtaxpct2($value);
                break;
            case 21:
                $this->setQtdtmstrtaxcode3($value);
                break;
            case 22:
                $this->setQtdtmstrtaxpct3($value);
                break;
            case 23:
                $this->setQtdtmstrtaxcode4($value);
                break;
            case 24:
                $this->setQtdtmstrtaxpct4($value);
                break;
            case 25:
                $this->setQtdtmstrtaxcode5($value);
                break;
            case 26:
                $this->setQtdtmstrtaxpct5($value);
                break;
            case 27:
                $this->setQtdtmstrtaxcode6($value);
                break;
            case 28:
                $this->setQtdtmstrtaxpct6($value);
                break;
            case 29:
                $this->setQtdtmstrtaxcode7($value);
                break;
            case 30:
                $this->setQtdtmstrtaxpct7($value);
                break;
            case 31:
                $this->setQtdtmstrtaxcode8($value);
                break;
            case 32:
                $this->setQtdtmstrtaxpct8($value);
                break;
            case 33:
                $this->setQtdtmstrtaxcode9($value);
                break;
            case 34:
                $this->setQtdtmstrtaxpct9($value);
                break;
            case 35:
                $this->setIntbuomsale($value);
                break;
            case 36:
                $this->setIntbuompur($value);
                break;
            case 37:
                $this->setQtdtquotind1($value);
                break;
            case 38:
                $this->setQtdtquotunit1($value);
                break;
            case 39:
                $this->setQtdtquotpric1($value);
                break;
            case 40:
                $this->setQtdtquotcost1($value);
                break;
            case 41:
                $this->setQtdtquotmkupmarg1($value);
                break;
            case 42:
                $this->setQtdtquotind2($value);
                break;
            case 43:
                $this->setQtdtquotunit2($value);
                break;
            case 44:
                $this->setQtdtquotpric2($value);
                break;
            case 45:
                $this->setQtdtquotcost2($value);
                break;
            case 46:
                $this->setQtdtquotmkupmarg2($value);
                break;
            case 47:
                $this->setQtdtquotind3($value);
                break;
            case 48:
                $this->setQtdtquotunit3($value);
                break;
            case 49:
                $this->setQtdtquotpric3($value);
                break;
            case 50:
                $this->setQtdtquotcost3($value);
                break;
            case 51:
                $this->setQtdtquotmkupmarg3($value);
                break;
            case 52:
                $this->setQtdtquotind4($value);
                break;
            case 53:
                $this->setQtdtquotunit4($value);
                break;
            case 54:
                $this->setQtdtquotpric4($value);
                break;
            case 55:
                $this->setQtdtquotcost4($value);
                break;
            case 56:
                $this->setQtdtquotmkupmarg4($value);
                break;
            case 57:
                $this->setQtdtquotind5($value);
                break;
            case 58:
                $this->setQtdtquotunit5($value);
                break;
            case 59:
                $this->setQtdtquotpric5($value);
                break;
            case 60:
                $this->setQtdtquotcost5($value);
                break;
            case 61:
                $this->setQtdtquotmkupmarg5($value);
                break;
            case 62:
                $this->setQtdtquotind6($value);
                break;
            case 63:
                $this->setQtdtquotunit6($value);
                break;
            case 64:
                $this->setQtdtquotpric6($value);
                break;
            case 65:
                $this->setQtdtquotcost6($value);
                break;
            case 66:
                $this->setQtdtquotmkupmarg6($value);
                break;
            case 67:
                $this->setQtdtasstcode($value);
                break;
            case 68:
                $this->setQtdtasstqty($value);
                break;
            case 69:
                $this->setQtdtlistpric($value);
                break;
            case 70:
                $this->setQtdtstancost($value);
                break;
            case 71:
                $this->setQtdtvenditemjob($value);
                break;
            case 72:
                $this->setApvevendid($value);
                break;
            case 73:
                $this->setQtdtnsitemgrup($value);
                break;
            case 74:
                $this->setQtdtusecode($value);
                break;
            case 75:
                $this->setQtdtpickflag($value);
                break;
            case 76:
                $this->setQtdtstatus($value);
                break;
            case 77:
                $this->setOetblsslcode($value);
                break;
            case 78:
                $this->setQtdtlostdate($value);
                break;
            case 79:
                $this->setQtdtlostposted($value);
                break;
            case 80:
                $this->setQtdtleaddays($value);
                break;
            case 81:
                $this->setQtdtordrdiscpct($value);
                break;
            case 82:
                $this->setQtdtquotdiscpct1($value);
                break;
            case 83:
                $this->setQtdtmtrcreqd($value);
                break;
            case 84:
                $this->setQtdtcofcreqd($value);
                break;
            case 85:
                $this->setQtdtmnfrid($value);
                break;
            case 86:
                $this->setQtdtmnfritemid($value);
                break;
            case 87:
                $this->setQtdtlmordrnbr($value);
                break;
            case 88:
                $this->setQtdtlmordrdate($value);
                break;
            case 89:
                $this->setQtdtspecitemcode($value);
                break;
            case 90:
                $this->setQtdtacsalepgm($value);
                break;
            case 91:
                $this->setQtdtnsvendshipfr($value);
                break;
            case 92:
                $this->setQtdtprntmnfrnote($value);
                break;
            case 93:
                $this->setDateupdtd($value);
                break;
            case 94:
                $this->setTimeupdtd($value);
                break;
            case 95:
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
        $keys = QuoteDetailTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setQthdid($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setQtdtline($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setInititemnbr($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setQtdtdesc($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setQtdtdesc2($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setQtdtcustcrssref($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setIntbwhse($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setQtdtrqstdate($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setQtdtspecordr($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setArtbmtaxcode($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setQtdtqtyord($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setQtdtpric($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setQtdtcost($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setQtdttaxpcttot($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setQtdtprictot($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setQtdtcosttot($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setQtdtwghttot($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setQtdtmstrtaxcode1($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setQtdtmstrtaxpct1($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setQtdtmstrtaxcode2($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setQtdtmstrtaxpct2($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setQtdtmstrtaxcode3($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setQtdtmstrtaxpct3($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setQtdtmstrtaxcode4($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setQtdtmstrtaxpct4($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setQtdtmstrtaxcode5($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setQtdtmstrtaxpct5($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setQtdtmstrtaxcode6($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setQtdtmstrtaxpct6($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setQtdtmstrtaxcode7($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setQtdtmstrtaxpct7($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setQtdtmstrtaxcode8($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setQtdtmstrtaxpct8($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setQtdtmstrtaxcode9($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setQtdtmstrtaxpct9($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setIntbuomsale($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setIntbuompur($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setQtdtquotind1($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setQtdtquotunit1($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setQtdtquotpric1($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setQtdtquotcost1($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setQtdtquotmkupmarg1($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setQtdtquotind2($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setQtdtquotunit2($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setQtdtquotpric2($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setQtdtquotcost2($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setQtdtquotmkupmarg2($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setQtdtquotind3($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setQtdtquotunit3($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setQtdtquotpric3($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setQtdtquotcost3($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setQtdtquotmkupmarg3($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setQtdtquotind4($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setQtdtquotunit4($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setQtdtquotpric4($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setQtdtquotcost4($arr[$keys[55]]);
        }
        if (array_key_exists($keys[56], $arr)) {
            $this->setQtdtquotmkupmarg4($arr[$keys[56]]);
        }
        if (array_key_exists($keys[57], $arr)) {
            $this->setQtdtquotind5($arr[$keys[57]]);
        }
        if (array_key_exists($keys[58], $arr)) {
            $this->setQtdtquotunit5($arr[$keys[58]]);
        }
        if (array_key_exists($keys[59], $arr)) {
            $this->setQtdtquotpric5($arr[$keys[59]]);
        }
        if (array_key_exists($keys[60], $arr)) {
            $this->setQtdtquotcost5($arr[$keys[60]]);
        }
        if (array_key_exists($keys[61], $arr)) {
            $this->setQtdtquotmkupmarg5($arr[$keys[61]]);
        }
        if (array_key_exists($keys[62], $arr)) {
            $this->setQtdtquotind6($arr[$keys[62]]);
        }
        if (array_key_exists($keys[63], $arr)) {
            $this->setQtdtquotunit6($arr[$keys[63]]);
        }
        if (array_key_exists($keys[64], $arr)) {
            $this->setQtdtquotpric6($arr[$keys[64]]);
        }
        if (array_key_exists($keys[65], $arr)) {
            $this->setQtdtquotcost6($arr[$keys[65]]);
        }
        if (array_key_exists($keys[66], $arr)) {
            $this->setQtdtquotmkupmarg6($arr[$keys[66]]);
        }
        if (array_key_exists($keys[67], $arr)) {
            $this->setQtdtasstcode($arr[$keys[67]]);
        }
        if (array_key_exists($keys[68], $arr)) {
            $this->setQtdtasstqty($arr[$keys[68]]);
        }
        if (array_key_exists($keys[69], $arr)) {
            $this->setQtdtlistpric($arr[$keys[69]]);
        }
        if (array_key_exists($keys[70], $arr)) {
            $this->setQtdtstancost($arr[$keys[70]]);
        }
        if (array_key_exists($keys[71], $arr)) {
            $this->setQtdtvenditemjob($arr[$keys[71]]);
        }
        if (array_key_exists($keys[72], $arr)) {
            $this->setApvevendid($arr[$keys[72]]);
        }
        if (array_key_exists($keys[73], $arr)) {
            $this->setQtdtnsitemgrup($arr[$keys[73]]);
        }
        if (array_key_exists($keys[74], $arr)) {
            $this->setQtdtusecode($arr[$keys[74]]);
        }
        if (array_key_exists($keys[75], $arr)) {
            $this->setQtdtpickflag($arr[$keys[75]]);
        }
        if (array_key_exists($keys[76], $arr)) {
            $this->setQtdtstatus($arr[$keys[76]]);
        }
        if (array_key_exists($keys[77], $arr)) {
            $this->setOetblsslcode($arr[$keys[77]]);
        }
        if (array_key_exists($keys[78], $arr)) {
            $this->setQtdtlostdate($arr[$keys[78]]);
        }
        if (array_key_exists($keys[79], $arr)) {
            $this->setQtdtlostposted($arr[$keys[79]]);
        }
        if (array_key_exists($keys[80], $arr)) {
            $this->setQtdtleaddays($arr[$keys[80]]);
        }
        if (array_key_exists($keys[81], $arr)) {
            $this->setQtdtordrdiscpct($arr[$keys[81]]);
        }
        if (array_key_exists($keys[82], $arr)) {
            $this->setQtdtquotdiscpct1($arr[$keys[82]]);
        }
        if (array_key_exists($keys[83], $arr)) {
            $this->setQtdtmtrcreqd($arr[$keys[83]]);
        }
        if (array_key_exists($keys[84], $arr)) {
            $this->setQtdtcofcreqd($arr[$keys[84]]);
        }
        if (array_key_exists($keys[85], $arr)) {
            $this->setQtdtmnfrid($arr[$keys[85]]);
        }
        if (array_key_exists($keys[86], $arr)) {
            $this->setQtdtmnfritemid($arr[$keys[86]]);
        }
        if (array_key_exists($keys[87], $arr)) {
            $this->setQtdtlmordrnbr($arr[$keys[87]]);
        }
        if (array_key_exists($keys[88], $arr)) {
            $this->setQtdtlmordrdate($arr[$keys[88]]);
        }
        if (array_key_exists($keys[89], $arr)) {
            $this->setQtdtspecitemcode($arr[$keys[89]]);
        }
        if (array_key_exists($keys[90], $arr)) {
            $this->setQtdtacsalepgm($arr[$keys[90]]);
        }
        if (array_key_exists($keys[91], $arr)) {
            $this->setQtdtnsvendshipfr($arr[$keys[91]]);
        }
        if (array_key_exists($keys[92], $arr)) {
            $this->setQtdtprntmnfrnote($arr[$keys[92]]);
        }
        if (array_key_exists($keys[93], $arr)) {
            $this->setDateupdtd($arr[$keys[93]]);
        }
        if (array_key_exists($keys[94], $arr)) {
            $this->setTimeupdtd($arr[$keys[94]]);
        }
        if (array_key_exists($keys[95], $arr)) {
            $this->setDummy($arr[$keys[95]]);
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
     * @return $this|\QuoteDetail The current object, for fluid interface
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
        $criteria = new Criteria(QuoteDetailTableMap::DATABASE_NAME);

        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTHDID)) {
            $criteria->add(QuoteDetailTableMap::COL_QTHDID, $this->qthdid);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLINE)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTLINE, $this->qtdtline);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_INITITEMNBR)) {
            $criteria->add(QuoteDetailTableMap::COL_INITITEMNBR, $this->inititemnbr);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTDESC)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTDESC, $this->qtdtdesc);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTDESC2)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTDESC2, $this->qtdtdesc2);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTCUSTCRSSREF)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTCUSTCRSSREF, $this->qtdtcustcrssref);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_INTBWHSE)) {
            $criteria->add(QuoteDetailTableMap::COL_INTBWHSE, $this->intbwhse);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTRQSTDATE)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTRQSTDATE, $this->qtdtrqstdate);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTSPECORDR)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTSPECORDR, $this->qtdtspecordr);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_ARTBMTAXCODE)) {
            $criteria->add(QuoteDetailTableMap::COL_ARTBMTAXCODE, $this->artbmtaxcode);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQTYORD)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQTYORD, $this->qtdtqtyord);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTPRIC)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTPRIC, $this->qtdtpric);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTCOST)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTCOST, $this->qtdtcost);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTTAXPCTTOT)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTTAXPCTTOT, $this->qtdttaxpcttot);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTPRICTOT)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTPRICTOT, $this->qtdtprictot);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTCOSTTOT)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTCOSTTOT, $this->qtdtcosttot);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTWGHTTOT)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTWGHTTOT, $this->qtdtwghttot);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE1)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE1, $this->qtdtmstrtaxcode1);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT1)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT1, $this->qtdtmstrtaxpct1);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE2)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE2, $this->qtdtmstrtaxcode2);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT2)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT2, $this->qtdtmstrtaxpct2);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE3)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE3, $this->qtdtmstrtaxcode3);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT3)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT3, $this->qtdtmstrtaxpct3);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE4)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE4, $this->qtdtmstrtaxcode4);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT4)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT4, $this->qtdtmstrtaxpct4);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE5)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE5, $this->qtdtmstrtaxcode5);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT5)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT5, $this->qtdtmstrtaxpct5);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE6)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE6, $this->qtdtmstrtaxcode6);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT6)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT6, $this->qtdtmstrtaxpct6);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE7)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE7, $this->qtdtmstrtaxcode7);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT7)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT7, $this->qtdtmstrtaxpct7);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE8)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE8, $this->qtdtmstrtaxcode8);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT8)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT8, $this->qtdtmstrtaxpct8);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE9)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXCODE9, $this->qtdtmstrtaxcode9);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT9)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMSTRTAXPCT9, $this->qtdtmstrtaxpct9);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_INTBUOMSALE)) {
            $criteria->add(QuoteDetailTableMap::COL_INTBUOMSALE, $this->intbuomsale);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_INTBUOMPUR)) {
            $criteria->add(QuoteDetailTableMap::COL_INTBUOMPUR, $this->intbuompur);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTIND1)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTIND1, $this->qtdtquotind1);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTUNIT1)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTUNIT1, $this->qtdtquotunit1);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTPRIC1)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTPRIC1, $this->qtdtquotpric1);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTCOST1)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTCOST1, $this->qtdtquotcost1);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG1)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG1, $this->qtdtquotmkupmarg1);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTIND2)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTIND2, $this->qtdtquotind2);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTUNIT2)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTUNIT2, $this->qtdtquotunit2);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTPRIC2)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTPRIC2, $this->qtdtquotpric2);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTCOST2)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTCOST2, $this->qtdtquotcost2);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG2)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG2, $this->qtdtquotmkupmarg2);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTIND3)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTIND3, $this->qtdtquotind3);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTUNIT3)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTUNIT3, $this->qtdtquotunit3);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTPRIC3)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTPRIC3, $this->qtdtquotpric3);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTCOST3)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTCOST3, $this->qtdtquotcost3);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG3)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG3, $this->qtdtquotmkupmarg3);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTIND4)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTIND4, $this->qtdtquotind4);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTUNIT4)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTUNIT4, $this->qtdtquotunit4);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTPRIC4)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTPRIC4, $this->qtdtquotpric4);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTCOST4)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTCOST4, $this->qtdtquotcost4);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG4)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG4, $this->qtdtquotmkupmarg4);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTIND5)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTIND5, $this->qtdtquotind5);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTUNIT5)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTUNIT5, $this->qtdtquotunit5);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTPRIC5)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTPRIC5, $this->qtdtquotpric5);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTCOST5)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTCOST5, $this->qtdtquotcost5);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG5)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG5, $this->qtdtquotmkupmarg5);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTIND6)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTIND6, $this->qtdtquotind6);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTUNIT6)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTUNIT6, $this->qtdtquotunit6);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTPRIC6)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTPRIC6, $this->qtdtquotpric6);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTCOST6)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTCOST6, $this->qtdtquotcost6);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG6)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTMKUPMARG6, $this->qtdtquotmkupmarg6);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTASSTCODE)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTASSTCODE, $this->qtdtasstcode);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTASSTQTY)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTASSTQTY, $this->qtdtasstqty);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLISTPRIC)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTLISTPRIC, $this->qtdtlistpric);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTSTANCOST)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTSTANCOST, $this->qtdtstancost);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTVENDITEMJOB)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTVENDITEMJOB, $this->qtdtvenditemjob);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_APVEVENDID)) {
            $criteria->add(QuoteDetailTableMap::COL_APVEVENDID, $this->apvevendid);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTNSITEMGRUP)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTNSITEMGRUP, $this->qtdtnsitemgrup);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTUSECODE)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTUSECODE, $this->qtdtusecode);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTPICKFLAG)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTPICKFLAG, $this->qtdtpickflag);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTSTATUS)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTSTATUS, $this->qtdtstatus);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_OETBLSSLCODE)) {
            $criteria->add(QuoteDetailTableMap::COL_OETBLSSLCODE, $this->oetblsslcode);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLOSTDATE)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTLOSTDATE, $this->qtdtlostdate);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLOSTPOSTED)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTLOSTPOSTED, $this->qtdtlostposted);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLEADDAYS)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTLEADDAYS, $this->qtdtleaddays);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTORDRDISCPCT)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTORDRDISCPCT, $this->qtdtordrdiscpct);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTQUOTDISCPCT1)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTQUOTDISCPCT1, $this->qtdtquotdiscpct1);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMTRCREQD)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMTRCREQD, $this->qtdtmtrcreqd);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTCOFCREQD)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTCOFCREQD, $this->qtdtcofcreqd);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMNFRID)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMNFRID, $this->qtdtmnfrid);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTMNFRITEMID)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTMNFRITEMID, $this->qtdtmnfritemid);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLMORDRNBR)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTLMORDRNBR, $this->qtdtlmordrnbr);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTLMORDRDATE)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTLMORDRDATE, $this->qtdtlmordrdate);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTSPECITEMCODE)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTSPECITEMCODE, $this->qtdtspecitemcode);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTACSALEPGM)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTACSALEPGM, $this->qtdtacsalepgm);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTNSVENDSHIPFR)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTNSVENDSHIPFR, $this->qtdtnsvendshipfr);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_QTDTPRNTMNFRNOTE)) {
            $criteria->add(QuoteDetailTableMap::COL_QTDTPRNTMNFRNOTE, $this->qtdtprntmnfrnote);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_DATEUPDTD)) {
            $criteria->add(QuoteDetailTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_TIMEUPDTD)) {
            $criteria->add(QuoteDetailTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(QuoteDetailTableMap::COL_DUMMY)) {
            $criteria->add(QuoteDetailTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildQuoteDetailQuery::create();
        $criteria->add(QuoteDetailTableMap::COL_QTHDID, $this->qthdid);
        $criteria->add(QuoteDetailTableMap::COL_QTDTLINE, $this->qtdtline);

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
        $validPk = null !== $this->getQthdid() &&
            null !== $this->getQtdtline();

        $validPrimaryKeyFKs = 1;
        $primaryKeyFKs = [];

        //relation quote to table quote_header
        if ($this->aQuote && $hash = spl_object_hash($this->aQuote)) {
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
        $pks[0] = $this->getQthdid();
        $pks[1] = $this->getQtdtline();

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
        $this->setQthdid($keys[0]);
        $this->setQtdtline($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return (null === $this->getQthdid()) && (null === $this->getQtdtline());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \QuoteDetail (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setQthdid($this->getQthdid());
        $copyObj->setQtdtline($this->getQtdtline());
        $copyObj->setInititemnbr($this->getInititemnbr());
        $copyObj->setQtdtdesc($this->getQtdtdesc());
        $copyObj->setQtdtdesc2($this->getQtdtdesc2());
        $copyObj->setQtdtcustcrssref($this->getQtdtcustcrssref());
        $copyObj->setIntbwhse($this->getIntbwhse());
        $copyObj->setQtdtrqstdate($this->getQtdtrqstdate());
        $copyObj->setQtdtspecordr($this->getQtdtspecordr());
        $copyObj->setArtbmtaxcode($this->getArtbmtaxcode());
        $copyObj->setQtdtqtyord($this->getQtdtqtyord());
        $copyObj->setQtdtpric($this->getQtdtpric());
        $copyObj->setQtdtcost($this->getQtdtcost());
        $copyObj->setQtdttaxpcttot($this->getQtdttaxpcttot());
        $copyObj->setQtdtprictot($this->getQtdtprictot());
        $copyObj->setQtdtcosttot($this->getQtdtcosttot());
        $copyObj->setQtdtwghttot($this->getQtdtwghttot());
        $copyObj->setQtdtmstrtaxcode1($this->getQtdtmstrtaxcode1());
        $copyObj->setQtdtmstrtaxpct1($this->getQtdtmstrtaxpct1());
        $copyObj->setQtdtmstrtaxcode2($this->getQtdtmstrtaxcode2());
        $copyObj->setQtdtmstrtaxpct2($this->getQtdtmstrtaxpct2());
        $copyObj->setQtdtmstrtaxcode3($this->getQtdtmstrtaxcode3());
        $copyObj->setQtdtmstrtaxpct3($this->getQtdtmstrtaxpct3());
        $copyObj->setQtdtmstrtaxcode4($this->getQtdtmstrtaxcode4());
        $copyObj->setQtdtmstrtaxpct4($this->getQtdtmstrtaxpct4());
        $copyObj->setQtdtmstrtaxcode5($this->getQtdtmstrtaxcode5());
        $copyObj->setQtdtmstrtaxpct5($this->getQtdtmstrtaxpct5());
        $copyObj->setQtdtmstrtaxcode6($this->getQtdtmstrtaxcode6());
        $copyObj->setQtdtmstrtaxpct6($this->getQtdtmstrtaxpct6());
        $copyObj->setQtdtmstrtaxcode7($this->getQtdtmstrtaxcode7());
        $copyObj->setQtdtmstrtaxpct7($this->getQtdtmstrtaxpct7());
        $copyObj->setQtdtmstrtaxcode8($this->getQtdtmstrtaxcode8());
        $copyObj->setQtdtmstrtaxpct8($this->getQtdtmstrtaxpct8());
        $copyObj->setQtdtmstrtaxcode9($this->getQtdtmstrtaxcode9());
        $copyObj->setQtdtmstrtaxpct9($this->getQtdtmstrtaxpct9());
        $copyObj->setIntbuomsale($this->getIntbuomsale());
        $copyObj->setIntbuompur($this->getIntbuompur());
        $copyObj->setQtdtquotind1($this->getQtdtquotind1());
        $copyObj->setQtdtquotunit1($this->getQtdtquotunit1());
        $copyObj->setQtdtquotpric1($this->getQtdtquotpric1());
        $copyObj->setQtdtquotcost1($this->getQtdtquotcost1());
        $copyObj->setQtdtquotmkupmarg1($this->getQtdtquotmkupmarg1());
        $copyObj->setQtdtquotind2($this->getQtdtquotind2());
        $copyObj->setQtdtquotunit2($this->getQtdtquotunit2());
        $copyObj->setQtdtquotpric2($this->getQtdtquotpric2());
        $copyObj->setQtdtquotcost2($this->getQtdtquotcost2());
        $copyObj->setQtdtquotmkupmarg2($this->getQtdtquotmkupmarg2());
        $copyObj->setQtdtquotind3($this->getQtdtquotind3());
        $copyObj->setQtdtquotunit3($this->getQtdtquotunit3());
        $copyObj->setQtdtquotpric3($this->getQtdtquotpric3());
        $copyObj->setQtdtquotcost3($this->getQtdtquotcost3());
        $copyObj->setQtdtquotmkupmarg3($this->getQtdtquotmkupmarg3());
        $copyObj->setQtdtquotind4($this->getQtdtquotind4());
        $copyObj->setQtdtquotunit4($this->getQtdtquotunit4());
        $copyObj->setQtdtquotpric4($this->getQtdtquotpric4());
        $copyObj->setQtdtquotcost4($this->getQtdtquotcost4());
        $copyObj->setQtdtquotmkupmarg4($this->getQtdtquotmkupmarg4());
        $copyObj->setQtdtquotind5($this->getQtdtquotind5());
        $copyObj->setQtdtquotunit5($this->getQtdtquotunit5());
        $copyObj->setQtdtquotpric5($this->getQtdtquotpric5());
        $copyObj->setQtdtquotcost5($this->getQtdtquotcost5());
        $copyObj->setQtdtquotmkupmarg5($this->getQtdtquotmkupmarg5());
        $copyObj->setQtdtquotind6($this->getQtdtquotind6());
        $copyObj->setQtdtquotunit6($this->getQtdtquotunit6());
        $copyObj->setQtdtquotpric6($this->getQtdtquotpric6());
        $copyObj->setQtdtquotcost6($this->getQtdtquotcost6());
        $copyObj->setQtdtquotmkupmarg6($this->getQtdtquotmkupmarg6());
        $copyObj->setQtdtasstcode($this->getQtdtasstcode());
        $copyObj->setQtdtasstqty($this->getQtdtasstqty());
        $copyObj->setQtdtlistpric($this->getQtdtlistpric());
        $copyObj->setQtdtstancost($this->getQtdtstancost());
        $copyObj->setQtdtvenditemjob($this->getQtdtvenditemjob());
        $copyObj->setApvevendid($this->getApvevendid());
        $copyObj->setQtdtnsitemgrup($this->getQtdtnsitemgrup());
        $copyObj->setQtdtusecode($this->getQtdtusecode());
        $copyObj->setQtdtpickflag($this->getQtdtpickflag());
        $copyObj->setQtdtstatus($this->getQtdtstatus());
        $copyObj->setOetblsslcode($this->getOetblsslcode());
        $copyObj->setQtdtlostdate($this->getQtdtlostdate());
        $copyObj->setQtdtlostposted($this->getQtdtlostposted());
        $copyObj->setQtdtleaddays($this->getQtdtleaddays());
        $copyObj->setQtdtordrdiscpct($this->getQtdtordrdiscpct());
        $copyObj->setQtdtquotdiscpct1($this->getQtdtquotdiscpct1());
        $copyObj->setQtdtmtrcreqd($this->getQtdtmtrcreqd());
        $copyObj->setQtdtcofcreqd($this->getQtdtcofcreqd());
        $copyObj->setQtdtmnfrid($this->getQtdtmnfrid());
        $copyObj->setQtdtmnfritemid($this->getQtdtmnfritemid());
        $copyObj->setQtdtlmordrnbr($this->getQtdtlmordrnbr());
        $copyObj->setQtdtlmordrdate($this->getQtdtlmordrdate());
        $copyObj->setQtdtspecitemcode($this->getQtdtspecitemcode());
        $copyObj->setQtdtacsalepgm($this->getQtdtacsalepgm());
        $copyObj->setQtdtnsvendshipfr($this->getQtdtnsvendshipfr());
        $copyObj->setQtdtprntmnfrnote($this->getQtdtprntmnfrnote());
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
     * @return \QuoteDetail Clone of current object.
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
     * Declares an association between this object and a ChildQuote object.
     *
     * @param  ChildQuote $v
     * @return $this|\QuoteDetail The current object (for fluent API support)
     * @throws PropelException
     */
    public function setQuote(ChildQuote $v = null)
    {
        if ($v === null) {
            $this->setQthdid('');
        } else {
            $this->setQthdid($v->getQthdid());
        }

        $this->aQuote = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildQuote object, it will not be re-added.
        if ($v !== null) {
            $v->addQuoteDetail($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildQuote object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildQuote The associated ChildQuote object.
     * @throws PropelException
     */
    public function getQuote(ConnectionInterface $con = null)
    {
        if ($this->aQuote === null && (($this->qthdid !== "" && $this->qthdid !== null))) {
            $this->aQuote = ChildQuoteQuery::create()->findPk($this->qthdid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aQuote->addQuoteDetails($this);
             */
        }

        return $this->aQuote;
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aQuote) {
            $this->aQuote->removeQuoteDetail($this);
        }
        $this->qthdid = null;
        $this->qtdtline = null;
        $this->inititemnbr = null;
        $this->qtdtdesc = null;
        $this->qtdtdesc2 = null;
        $this->qtdtcustcrssref = null;
        $this->intbwhse = null;
        $this->qtdtrqstdate = null;
        $this->qtdtspecordr = null;
        $this->artbmtaxcode = null;
        $this->qtdtqtyord = null;
        $this->qtdtpric = null;
        $this->qtdtcost = null;
        $this->qtdttaxpcttot = null;
        $this->qtdtprictot = null;
        $this->qtdtcosttot = null;
        $this->qtdtwghttot = null;
        $this->qtdtmstrtaxcode1 = null;
        $this->qtdtmstrtaxpct1 = null;
        $this->qtdtmstrtaxcode2 = null;
        $this->qtdtmstrtaxpct2 = null;
        $this->qtdtmstrtaxcode3 = null;
        $this->qtdtmstrtaxpct3 = null;
        $this->qtdtmstrtaxcode4 = null;
        $this->qtdtmstrtaxpct4 = null;
        $this->qtdtmstrtaxcode5 = null;
        $this->qtdtmstrtaxpct5 = null;
        $this->qtdtmstrtaxcode6 = null;
        $this->qtdtmstrtaxpct6 = null;
        $this->qtdtmstrtaxcode7 = null;
        $this->qtdtmstrtaxpct7 = null;
        $this->qtdtmstrtaxcode8 = null;
        $this->qtdtmstrtaxpct8 = null;
        $this->qtdtmstrtaxcode9 = null;
        $this->qtdtmstrtaxpct9 = null;
        $this->intbuomsale = null;
        $this->intbuompur = null;
        $this->qtdtquotind1 = null;
        $this->qtdtquotunit1 = null;
        $this->qtdtquotpric1 = null;
        $this->qtdtquotcost1 = null;
        $this->qtdtquotmkupmarg1 = null;
        $this->qtdtquotind2 = null;
        $this->qtdtquotunit2 = null;
        $this->qtdtquotpric2 = null;
        $this->qtdtquotcost2 = null;
        $this->qtdtquotmkupmarg2 = null;
        $this->qtdtquotind3 = null;
        $this->qtdtquotunit3 = null;
        $this->qtdtquotpric3 = null;
        $this->qtdtquotcost3 = null;
        $this->qtdtquotmkupmarg3 = null;
        $this->qtdtquotind4 = null;
        $this->qtdtquotunit4 = null;
        $this->qtdtquotpric4 = null;
        $this->qtdtquotcost4 = null;
        $this->qtdtquotmkupmarg4 = null;
        $this->qtdtquotind5 = null;
        $this->qtdtquotunit5 = null;
        $this->qtdtquotpric5 = null;
        $this->qtdtquotcost5 = null;
        $this->qtdtquotmkupmarg5 = null;
        $this->qtdtquotind6 = null;
        $this->qtdtquotunit6 = null;
        $this->qtdtquotpric6 = null;
        $this->qtdtquotcost6 = null;
        $this->qtdtquotmkupmarg6 = null;
        $this->qtdtasstcode = null;
        $this->qtdtasstqty = null;
        $this->qtdtlistpric = null;
        $this->qtdtstancost = null;
        $this->qtdtvenditemjob = null;
        $this->apvevendid = null;
        $this->qtdtnsitemgrup = null;
        $this->qtdtusecode = null;
        $this->qtdtpickflag = null;
        $this->qtdtstatus = null;
        $this->oetblsslcode = null;
        $this->qtdtlostdate = null;
        $this->qtdtlostposted = null;
        $this->qtdtleaddays = null;
        $this->qtdtordrdiscpct = null;
        $this->qtdtquotdiscpct1 = null;
        $this->qtdtmtrcreqd = null;
        $this->qtdtcofcreqd = null;
        $this->qtdtmnfrid = null;
        $this->qtdtmnfritemid = null;
        $this->qtdtlmordrnbr = null;
        $this->qtdtlmordrdate = null;
        $this->qtdtspecitemcode = null;
        $this->qtdtacsalepgm = null;
        $this->qtdtnsvendshipfr = null;
        $this->qtdtprntmnfrnote = null;
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

        $this->aQuote = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(QuoteDetailTableMap::DEFAULT_STRING_FORMAT);
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
