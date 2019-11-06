<?php

namespace Base;

use \ApInvoice as ChildApInvoice;
use \ApInvoiceQuery as ChildApInvoiceQuery;
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
use Map\ApInvoiceTableMap;
use Map\PurchaseOrderTableMap;
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
 * Base class that represents a row from the 'po_head' table.
 *
 *
 *
 * @package    propel.generator..Base
 */
abstract class PurchaseOrder implements ActiveRecordInterface
{
    /**
     * TableMap class name
     */
    const TABLE_MAP = '\\Map\\PurchaseOrderTableMap';


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
     * The value for the pohdnbr field.
     *
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pohdnbr;

    /**
     * The value for the pohdstat field.
     *
     * @var        string
     */
    protected $pohdstat;

    /**
     * The value for the pohdref field.
     *
     * @var        string
     */
    protected $pohdref;

    /**
     * The value for the apvevendid field.
     *
     * @var        string
     */
    protected $apvevendid;

    /**
     * The value for the apfmshipid field.
     *
     * @var        string
     */
    protected $apfmshipid;

    /**
     * The value for the pohdtoname field.
     *
     * @var        string
     */
    protected $pohdtoname;

    /**
     * The value for the pohdtoadr1 field.
     *
     * @var        string
     */
    protected $pohdtoadr1;

    /**
     * The value for the pohdtoadr2 field.
     *
     * @var        string
     */
    protected $pohdtoadr2;

    /**
     * The value for the pohdtoadr3 field.
     *
     * @var        string
     */
    protected $pohdtoadr3;

    /**
     * The value for the pohdtoctry field.
     *
     * @var        string
     */
    protected $pohdtoctry;

    /**
     * The value for the pohdtocity field.
     *
     * @var        string
     */
    protected $pohdtocity;

    /**
     * The value for the pohdtostat field.
     *
     * @var        string
     */
    protected $pohdtostat;

    /**
     * The value for the pohdtozipcode field.
     *
     * @var        string
     */
    protected $pohdtozipcode;

    /**
     * The value for the pohdptname field.
     *
     * @var        string
     */
    protected $pohdptname;

    /**
     * The value for the pohdptadr1 field.
     *
     * @var        string
     */
    protected $pohdptadr1;

    /**
     * The value for the pohdptadr2 field.
     *
     * @var        string
     */
    protected $pohdptadr2;

    /**
     * The value for the pohdptadr3 field.
     *
     * @var        string
     */
    protected $pohdptadr3;

    /**
     * The value for the pohdptctry field.
     *
     * @var        string
     */
    protected $pohdptctry;

    /**
     * The value for the pohdptcity field.
     *
     * @var        string
     */
    protected $pohdptcity;

    /**
     * The value for the pohdptstat field.
     *
     * @var        string
     */
    protected $pohdptstat;

    /**
     * The value for the pohdptzipcode field.
     *
     * @var        string
     */
    protected $pohdptzipcode;

    /**
     * The value for the pohdcont field.
     *
     * @var        string
     */
    protected $pohdcont;

    /**
     * The value for the pohdordrdate field.
     *
     * @var        string
     */
    protected $pohdordrdate;

    /**
     * The value for the aptmtermcode field.
     *
     * @var        string
     */
    protected $aptmtermcode;

    /**
     * The value for the artbsviacode field.
     *
     * @var        string
     */
    protected $artbsviacode;

    /**
     * The value for the pohdoldfob field.
     *
     * @var        string
     */
    protected $pohdoldfob;

    /**
     * The value for the aptbbuyrcode field.
     *
     * @var        string
     */
    protected $aptbbuyrcode;

    /**
     * The value for the pohdcolppd field.
     *
     * @var        string
     */
    protected $pohdcolppd;

    /**
     * The value for the pohdteleintl field.
     *
     * @var        string
     */
    protected $pohdteleintl;

    /**
     * The value for the pohdtelenbr field.
     *
     * @var        string
     */
    protected $pohdtelenbr;

    /**
     * The value for the pohdteleext field.
     *
     * @var        string
     */
    protected $pohdteleext;

    /**
     * The value for the pohdfaxintl field.
     *
     * @var        string
     */
    protected $pohdfaxintl;

    /**
     * The value for the pohdfaxnbr field.
     *
     * @var        string
     */
    protected $pohdfaxnbr;

    /**
     * The value for the pohdrcnt field.
     *
     * @var        string
     */
    protected $pohdrcnt;

    /**
     * The value for the pohdtaxexem field.
     *
     * @var        string
     */
    protected $pohdtaxexem;

    /**
     * The value for the pohdexchctry field.
     *
     * @var        string
     */
    protected $pohdexchctry;

    /**
     * The value for the pohdexchrate field.
     *
     * @var        string
     */
    protected $pohdexchrate;

    /**
     * The value for the pohdexptdate field.
     *
     * @var        string
     */
    protected $pohdexptdate;

    /**
     * The value for the pohdcancdate field.
     *
     * @var        string
     */
    protected $pohdcancdate;

    /**
     * The value for the pohdicnt field.
     *
     * @var        string
     */
    protected $pohdicnt;

    /**
     * The value for the pohdfob field.
     *
     * @var        string
     */
    protected $pohdfob;

    /**
     * The value for the pohdpickqueue field.
     *
     * @var        string
     */
    protected $pohdpickqueue;

    /**
     * The value for the pohdpackedby field.
     *
     * @var        string
     */
    protected $pohdpackedby;

    /**
     * The value for the pohdpackdate field.
     *
     * @var        string
     */
    protected $pohdpackdate;

    /**
     * The value for the pohdpacktime field.
     *
     * @var        string
     */
    protected $pohdpacktime;

    /**
     * The value for the pohdlandcost field.
     *
     * @var        string
     */
    protected $pohdlandcost;

    /**
     * The value for the pohdedipodate field.
     *
     * @var        string
     */
    protected $pohdedipodate;

    /**
     * The value for the pohdfuturebuy field.
     *
     * @var        string
     */
    protected $pohdfuturebuy;

    /**
     * The value for the pohdemailaddr field.
     *
     * @var        string
     */
    protected $pohdemailaddr;

    /**
     * The value for the pohdshipdate field.
     *
     * @var        string
     */
    protected $pohdshipdate;

    /**
     * The value for the pohdackdate field.
     *
     * @var        string
     */
    protected $pohdackdate;

    /**
     * The value for the pohdreleasenbr field.
     *
     * @var        int
     */
    protected $pohdreleasenbr;

    /**
     * The value for the pohdreturnspo field.
     *
     * @var        string
     */
    protected $pohdreturnspo;

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
     * @var        ChildVendor
     */
    protected $aVendor;

    /**
     * @var        ChildVendorShipfrom
     */
    protected $aVendorShipfrom;

    /**
     * @var        ChildShipvia
     */
    protected $aShipvia;

    /**
     * @var        ObjectCollection|ChildApInvoice[] Collection to store aggregation of ChildApInvoice objects.
     */
    protected $collApInvoices;
    protected $collApInvoicesPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var boolean
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildApInvoice[]
     */
    protected $apInvoicesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues()
    {
        $this->pohdnbr = '';
    }

    /**
     * Initializes internal state of Base\PurchaseOrder object.
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
     * Compares this with another <code>PurchaseOrder</code> instance.  If
     * <code>obj</code> is an instance of <code>PurchaseOrder</code>, delegates to
     * <code>equals(PurchaseOrder)</code>.  Otherwise, returns <code>false</code>.
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
     * @return $this|PurchaseOrder The current object, for fluid interface
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
     * Get the [pohdnbr] column value.
     *
     * @return string
     */
    public function getPohdnbr()
    {
        return $this->pohdnbr;
    }

    /**
     * Get the [pohdstat] column value.
     *
     * @return string
     */
    public function getPohdstat()
    {
        return $this->pohdstat;
    }

    /**
     * Get the [pohdref] column value.
     *
     * @return string
     */
    public function getPohdref()
    {
        return $this->pohdref;
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
     * Get the [apfmshipid] column value.
     *
     * @return string
     */
    public function getApfmshipid()
    {
        return $this->apfmshipid;
    }

    /**
     * Get the [pohdtoname] column value.
     *
     * @return string
     */
    public function getPohdtoname()
    {
        return $this->pohdtoname;
    }

    /**
     * Get the [pohdtoadr1] column value.
     *
     * @return string
     */
    public function getPohdtoadr1()
    {
        return $this->pohdtoadr1;
    }

    /**
     * Get the [pohdtoadr2] column value.
     *
     * @return string
     */
    public function getPohdtoadr2()
    {
        return $this->pohdtoadr2;
    }

    /**
     * Get the [pohdtoadr3] column value.
     *
     * @return string
     */
    public function getPohdtoadr3()
    {
        return $this->pohdtoadr3;
    }

    /**
     * Get the [pohdtoctry] column value.
     *
     * @return string
     */
    public function getPohdtoctry()
    {
        return $this->pohdtoctry;
    }

    /**
     * Get the [pohdtocity] column value.
     *
     * @return string
     */
    public function getPohdtocity()
    {
        return $this->pohdtocity;
    }

    /**
     * Get the [pohdtostat] column value.
     *
     * @return string
     */
    public function getPohdtostat()
    {
        return $this->pohdtostat;
    }

    /**
     * Get the [pohdtozipcode] column value.
     *
     * @return string
     */
    public function getPohdtozipcode()
    {
        return $this->pohdtozipcode;
    }

    /**
     * Get the [pohdptname] column value.
     *
     * @return string
     */
    public function getPohdptname()
    {
        return $this->pohdptname;
    }

    /**
     * Get the [pohdptadr1] column value.
     *
     * @return string
     */
    public function getPohdptadr1()
    {
        return $this->pohdptadr1;
    }

    /**
     * Get the [pohdptadr2] column value.
     *
     * @return string
     */
    public function getPohdptadr2()
    {
        return $this->pohdptadr2;
    }

    /**
     * Get the [pohdptadr3] column value.
     *
     * @return string
     */
    public function getPohdptadr3()
    {
        return $this->pohdptadr3;
    }

    /**
     * Get the [pohdptctry] column value.
     *
     * @return string
     */
    public function getPohdptctry()
    {
        return $this->pohdptctry;
    }

    /**
     * Get the [pohdptcity] column value.
     *
     * @return string
     */
    public function getPohdptcity()
    {
        return $this->pohdptcity;
    }

    /**
     * Get the [pohdptstat] column value.
     *
     * @return string
     */
    public function getPohdptstat()
    {
        return $this->pohdptstat;
    }

    /**
     * Get the [pohdptzipcode] column value.
     *
     * @return string
     */
    public function getPohdptzipcode()
    {
        return $this->pohdptzipcode;
    }

    /**
     * Get the [pohdcont] column value.
     *
     * @return string
     */
    public function getPohdcont()
    {
        return $this->pohdcont;
    }

    /**
     * Get the [pohdordrdate] column value.
     *
     * @return string
     */
    public function getPohdordrdate()
    {
        return $this->pohdordrdate;
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
     * Get the [artbsviacode] column value.
     *
     * @return string
     */
    public function getArtbsviacode()
    {
        return $this->artbsviacode;
    }

    /**
     * Get the [pohdoldfob] column value.
     *
     * @return string
     */
    public function getPohdoldfob()
    {
        return $this->pohdoldfob;
    }

    /**
     * Get the [aptbbuyrcode] column value.
     *
     * @return string
     */
    public function getAptbbuyrcode()
    {
        return $this->aptbbuyrcode;
    }

    /**
     * Get the [pohdcolppd] column value.
     *
     * @return string
     */
    public function getPohdcolppd()
    {
        return $this->pohdcolppd;
    }

    /**
     * Get the [pohdteleintl] column value.
     *
     * @return string
     */
    public function getPohdteleintl()
    {
        return $this->pohdteleintl;
    }

    /**
     * Get the [pohdtelenbr] column value.
     *
     * @return string
     */
    public function getPohdtelenbr()
    {
        return $this->pohdtelenbr;
    }

    /**
     * Get the [pohdteleext] column value.
     *
     * @return string
     */
    public function getPohdteleext()
    {
        return $this->pohdteleext;
    }

    /**
     * Get the [pohdfaxintl] column value.
     *
     * @return string
     */
    public function getPohdfaxintl()
    {
        return $this->pohdfaxintl;
    }

    /**
     * Get the [pohdfaxnbr] column value.
     *
     * @return string
     */
    public function getPohdfaxnbr()
    {
        return $this->pohdfaxnbr;
    }

    /**
     * Get the [pohdrcnt] column value.
     *
     * @return string
     */
    public function getPohdrcnt()
    {
        return $this->pohdrcnt;
    }

    /**
     * Get the [pohdtaxexem] column value.
     *
     * @return string
     */
    public function getPohdtaxexem()
    {
        return $this->pohdtaxexem;
    }

    /**
     * Get the [pohdexchctry] column value.
     *
     * @return string
     */
    public function getPohdexchctry()
    {
        return $this->pohdexchctry;
    }

    /**
     * Get the [pohdexchrate] column value.
     *
     * @return string
     */
    public function getPohdexchrate()
    {
        return $this->pohdexchrate;
    }

    /**
     * Get the [pohdexptdate] column value.
     *
     * @return string
     */
    public function getPohdexptdate()
    {
        return $this->pohdexptdate;
    }

    /**
     * Get the [pohdcancdate] column value.
     *
     * @return string
     */
    public function getPohdcancdate()
    {
        return $this->pohdcancdate;
    }

    /**
     * Get the [pohdicnt] column value.
     *
     * @return string
     */
    public function getPohdicnt()
    {
        return $this->pohdicnt;
    }

    /**
     * Get the [pohdfob] column value.
     *
     * @return string
     */
    public function getPohdfob()
    {
        return $this->pohdfob;
    }

    /**
     * Get the [pohdpickqueue] column value.
     *
     * @return string
     */
    public function getPohdpickqueue()
    {
        return $this->pohdpickqueue;
    }

    /**
     * Get the [pohdpackedby] column value.
     *
     * @return string
     */
    public function getPohdpackedby()
    {
        return $this->pohdpackedby;
    }

    /**
     * Get the [pohdpackdate] column value.
     *
     * @return string
     */
    public function getPohdpackdate()
    {
        return $this->pohdpackdate;
    }

    /**
     * Get the [pohdpacktime] column value.
     *
     * @return string
     */
    public function getPohdpacktime()
    {
        return $this->pohdpacktime;
    }

    /**
     * Get the [pohdlandcost] column value.
     *
     * @return string
     */
    public function getPohdlandcost()
    {
        return $this->pohdlandcost;
    }

    /**
     * Get the [pohdedipodate] column value.
     *
     * @return string
     */
    public function getPohdedipodate()
    {
        return $this->pohdedipodate;
    }

    /**
     * Get the [pohdfuturebuy] column value.
     *
     * @return string
     */
    public function getPohdfuturebuy()
    {
        return $this->pohdfuturebuy;
    }

    /**
     * Get the [pohdemailaddr] column value.
     *
     * @return string
     */
    public function getPohdemailaddr()
    {
        return $this->pohdemailaddr;
    }

    /**
     * Get the [pohdshipdate] column value.
     *
     * @return string
     */
    public function getPohdshipdate()
    {
        return $this->pohdshipdate;
    }

    /**
     * Get the [pohdackdate] column value.
     *
     * @return string
     */
    public function getPohdackdate()
    {
        return $this->pohdackdate;
    }

    /**
     * Get the [pohdreleasenbr] column value.
     *
     * @return int
     */
    public function getPohdreleasenbr()
    {
        return $this->pohdreleasenbr;
    }

    /**
     * Get the [pohdreturnspo] column value.
     *
     * @return string
     */
    public function getPohdreturnspo()
    {
        return $this->pohdreturnspo;
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
     * Set the value of [pohdnbr] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdnbr !== $v) {
            $this->pohdnbr = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDNBR] = true;
        }

        return $this;
    } // setPohdnbr()

    /**
     * Set the value of [pohdstat] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdstat !== $v) {
            $this->pohdstat = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDSTAT] = true;
        }

        return $this;
    } // setPohdstat()

    /**
     * Set the value of [pohdref] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdref($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdref !== $v) {
            $this->pohdref = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDREF] = true;
        }

        return $this;
    } // setPohdref()

    /**
     * Set the value of [apvevendid] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setApvevendid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apvevendid !== $v) {
            $this->apvevendid = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_APVEVENDID] = true;
        }

        if ($this->aVendor !== null && $this->aVendor->getApvevendid() !== $v) {
            $this->aVendor = null;
        }

        if ($this->aVendorShipfrom !== null && $this->aVendorShipfrom->getApvevendid() !== $v) {
            $this->aVendorShipfrom = null;
        }

        return $this;
    } // setApvevendid()

    /**
     * Set the value of [apfmshipid] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setApfmshipid($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->apfmshipid !== $v) {
            $this->apfmshipid = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_APFMSHIPID] = true;
        }

        if ($this->aVendorShipfrom !== null && $this->aVendorShipfrom->getApfmshipid() !== $v) {
            $this->aVendorShipfrom = null;
        }

        return $this;
    } // setApfmshipid()

    /**
     * Set the value of [pohdtoname] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdtoname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdtoname !== $v) {
            $this->pohdtoname = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDTONAME] = true;
        }

        return $this;
    } // setPohdtoname()

    /**
     * Set the value of [pohdtoadr1] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdtoadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdtoadr1 !== $v) {
            $this->pohdtoadr1 = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDTOADR1] = true;
        }

        return $this;
    } // setPohdtoadr1()

    /**
     * Set the value of [pohdtoadr2] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdtoadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdtoadr2 !== $v) {
            $this->pohdtoadr2 = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDTOADR2] = true;
        }

        return $this;
    } // setPohdtoadr2()

    /**
     * Set the value of [pohdtoadr3] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdtoadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdtoadr3 !== $v) {
            $this->pohdtoadr3 = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDTOADR3] = true;
        }

        return $this;
    } // setPohdtoadr3()

    /**
     * Set the value of [pohdtoctry] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdtoctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdtoctry !== $v) {
            $this->pohdtoctry = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDTOCTRY] = true;
        }

        return $this;
    } // setPohdtoctry()

    /**
     * Set the value of [pohdtocity] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdtocity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdtocity !== $v) {
            $this->pohdtocity = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDTOCITY] = true;
        }

        return $this;
    } // setPohdtocity()

    /**
     * Set the value of [pohdtostat] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdtostat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdtostat !== $v) {
            $this->pohdtostat = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDTOSTAT] = true;
        }

        return $this;
    } // setPohdtostat()

    /**
     * Set the value of [pohdtozipcode] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdtozipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdtozipcode !== $v) {
            $this->pohdtozipcode = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDTOZIPCODE] = true;
        }

        return $this;
    } // setPohdtozipcode()

    /**
     * Set the value of [pohdptname] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdptname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdptname !== $v) {
            $this->pohdptname = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDPTNAME] = true;
        }

        return $this;
    } // setPohdptname()

    /**
     * Set the value of [pohdptadr1] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdptadr1($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdptadr1 !== $v) {
            $this->pohdptadr1 = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDPTADR1] = true;
        }

        return $this;
    } // setPohdptadr1()

    /**
     * Set the value of [pohdptadr2] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdptadr2($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdptadr2 !== $v) {
            $this->pohdptadr2 = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDPTADR2] = true;
        }

        return $this;
    } // setPohdptadr2()

    /**
     * Set the value of [pohdptadr3] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdptadr3($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdptadr3 !== $v) {
            $this->pohdptadr3 = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDPTADR3] = true;
        }

        return $this;
    } // setPohdptadr3()

    /**
     * Set the value of [pohdptctry] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdptctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdptctry !== $v) {
            $this->pohdptctry = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDPTCTRY] = true;
        }

        return $this;
    } // setPohdptctry()

    /**
     * Set the value of [pohdptcity] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdptcity($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdptcity !== $v) {
            $this->pohdptcity = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDPTCITY] = true;
        }

        return $this;
    } // setPohdptcity()

    /**
     * Set the value of [pohdptstat] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdptstat($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdptstat !== $v) {
            $this->pohdptstat = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDPTSTAT] = true;
        }

        return $this;
    } // setPohdptstat()

    /**
     * Set the value of [pohdptzipcode] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdptzipcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdptzipcode !== $v) {
            $this->pohdptzipcode = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDPTZIPCODE] = true;
        }

        return $this;
    } // setPohdptzipcode()

    /**
     * Set the value of [pohdcont] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdcont($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdcont !== $v) {
            $this->pohdcont = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDCONT] = true;
        }

        return $this;
    } // setPohdcont()

    /**
     * Set the value of [pohdordrdate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdordrdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdordrdate !== $v) {
            $this->pohdordrdate = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDORDRDATE] = true;
        }

        return $this;
    } // setPohdordrdate()

    /**
     * Set the value of [aptmtermcode] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setAptmtermcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptmtermcode !== $v) {
            $this->aptmtermcode = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_APTMTERMCODE] = true;
        }

        return $this;
    } // setAptmtermcode()

    /**
     * Set the value of [artbsviacode] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setArtbsviacode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->artbsviacode !== $v) {
            $this->artbsviacode = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_ARTBSVIACODE] = true;
        }

        if ($this->aShipvia !== null && $this->aShipvia->getArtbshipvia() !== $v) {
            $this->aShipvia = null;
        }

        return $this;
    } // setArtbsviacode()

    /**
     * Set the value of [pohdoldfob] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdoldfob($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdoldfob !== $v) {
            $this->pohdoldfob = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDOLDFOB] = true;
        }

        return $this;
    } // setPohdoldfob()

    /**
     * Set the value of [aptbbuyrcode] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setAptbbuyrcode($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->aptbbuyrcode !== $v) {
            $this->aptbbuyrcode = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_APTBBUYRCODE] = true;
        }

        return $this;
    } // setAptbbuyrcode()

    /**
     * Set the value of [pohdcolppd] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdcolppd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdcolppd !== $v) {
            $this->pohdcolppd = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDCOLPPD] = true;
        }

        return $this;
    } // setPohdcolppd()

    /**
     * Set the value of [pohdteleintl] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdteleintl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdteleintl !== $v) {
            $this->pohdteleintl = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDTELEINTL] = true;
        }

        return $this;
    } // setPohdteleintl()

    /**
     * Set the value of [pohdtelenbr] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdtelenbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdtelenbr !== $v) {
            $this->pohdtelenbr = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDTELENBR] = true;
        }

        return $this;
    } // setPohdtelenbr()

    /**
     * Set the value of [pohdteleext] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdteleext($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdteleext !== $v) {
            $this->pohdteleext = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDTELEEXT] = true;
        }

        return $this;
    } // setPohdteleext()

    /**
     * Set the value of [pohdfaxintl] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdfaxintl($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdfaxintl !== $v) {
            $this->pohdfaxintl = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDFAXINTL] = true;
        }

        return $this;
    } // setPohdfaxintl()

    /**
     * Set the value of [pohdfaxnbr] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdfaxnbr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdfaxnbr !== $v) {
            $this->pohdfaxnbr = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDFAXNBR] = true;
        }

        return $this;
    } // setPohdfaxnbr()

    /**
     * Set the value of [pohdrcnt] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdrcnt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdrcnt !== $v) {
            $this->pohdrcnt = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDRCNT] = true;
        }

        return $this;
    } // setPohdrcnt()

    /**
     * Set the value of [pohdtaxexem] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdtaxexem($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdtaxexem !== $v) {
            $this->pohdtaxexem = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDTAXEXEM] = true;
        }

        return $this;
    } // setPohdtaxexem()

    /**
     * Set the value of [pohdexchctry] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdexchctry($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdexchctry !== $v) {
            $this->pohdexchctry = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDEXCHCTRY] = true;
        }

        return $this;
    } // setPohdexchctry()

    /**
     * Set the value of [pohdexchrate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdexchrate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdexchrate !== $v) {
            $this->pohdexchrate = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDEXCHRATE] = true;
        }

        return $this;
    } // setPohdexchrate()

    /**
     * Set the value of [pohdexptdate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdexptdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdexptdate !== $v) {
            $this->pohdexptdate = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDEXPTDATE] = true;
        }

        return $this;
    } // setPohdexptdate()

    /**
     * Set the value of [pohdcancdate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdcancdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdcancdate !== $v) {
            $this->pohdcancdate = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDCANCDATE] = true;
        }

        return $this;
    } // setPohdcancdate()

    /**
     * Set the value of [pohdicnt] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdicnt($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdicnt !== $v) {
            $this->pohdicnt = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDICNT] = true;
        }

        return $this;
    } // setPohdicnt()

    /**
     * Set the value of [pohdfob] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdfob($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdfob !== $v) {
            $this->pohdfob = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDFOB] = true;
        }

        return $this;
    } // setPohdfob()

    /**
     * Set the value of [pohdpickqueue] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdpickqueue($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdpickqueue !== $v) {
            $this->pohdpickqueue = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDPICKQUEUE] = true;
        }

        return $this;
    } // setPohdpickqueue()

    /**
     * Set the value of [pohdpackedby] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdpackedby($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdpackedby !== $v) {
            $this->pohdpackedby = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDPACKEDBY] = true;
        }

        return $this;
    } // setPohdpackedby()

    /**
     * Set the value of [pohdpackdate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdpackdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdpackdate !== $v) {
            $this->pohdpackdate = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDPACKDATE] = true;
        }

        return $this;
    } // setPohdpackdate()

    /**
     * Set the value of [pohdpacktime] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdpacktime($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdpacktime !== $v) {
            $this->pohdpacktime = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDPACKTIME] = true;
        }

        return $this;
    } // setPohdpacktime()

    /**
     * Set the value of [pohdlandcost] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdlandcost($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdlandcost !== $v) {
            $this->pohdlandcost = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDLANDCOST] = true;
        }

        return $this;
    } // setPohdlandcost()

    /**
     * Set the value of [pohdedipodate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdedipodate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdedipodate !== $v) {
            $this->pohdedipodate = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDEDIPODATE] = true;
        }

        return $this;
    } // setPohdedipodate()

    /**
     * Set the value of [pohdfuturebuy] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdfuturebuy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdfuturebuy !== $v) {
            $this->pohdfuturebuy = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDFUTUREBUY] = true;
        }

        return $this;
    } // setPohdfuturebuy()

    /**
     * Set the value of [pohdemailaddr] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdemailaddr($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdemailaddr !== $v) {
            $this->pohdemailaddr = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDEMAILADDR] = true;
        }

        return $this;
    } // setPohdemailaddr()

    /**
     * Set the value of [pohdshipdate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdshipdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdshipdate !== $v) {
            $this->pohdshipdate = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDSHIPDATE] = true;
        }

        return $this;
    } // setPohdshipdate()

    /**
     * Set the value of [pohdackdate] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdackdate($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdackdate !== $v) {
            $this->pohdackdate = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDACKDATE] = true;
        }

        return $this;
    } // setPohdackdate()

    /**
     * Set the value of [pohdreleasenbr] column.
     *
     * @param int $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdreleasenbr($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->pohdreleasenbr !== $v) {
            $this->pohdreleasenbr = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDRELEASENBR] = true;
        }

        return $this;
    } // setPohdreleasenbr()

    /**
     * Set the value of [pohdreturnspo] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setPohdreturnspo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pohdreturnspo !== $v) {
            $this->pohdreturnspo = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_POHDRETURNSPO] = true;
        }

        return $this;
    } // setPohdreturnspo()

    /**
     * Set the value of [dateupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setDateupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dateupdtd !== $v) {
            $this->dateupdtd = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_DATEUPDTD] = true;
        }

        return $this;
    } // setDateupdtd()

    /**
     * Set the value of [timeupdtd] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setTimeupdtd($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->timeupdtd !== $v) {
            $this->timeupdtd = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_TIMEUPDTD] = true;
        }

        return $this;
    } // setTimeupdtd()

    /**
     * Set the value of [dummy] column.
     *
     * @param string $v new value
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function setDummy($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->dummy !== $v) {
            $this->dummy = $v;
            $this->modifiedColumns[PurchaseOrderTableMap::COL_DUMMY] = true;
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
            if ($this->pohdnbr !== '') {
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdref', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdref = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : PurchaseOrderTableMap::translateFieldName('Apvevendid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apvevendid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : PurchaseOrderTableMap::translateFieldName('Apfmshipid', TableMap::TYPE_PHPNAME, $indexType)];
            $this->apfmshipid = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdtoname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdtoname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 6 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdtoadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdtoadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 7 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdtoadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdtoadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 8 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdtoadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdtoadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 9 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdtoctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdtoctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 10 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdtocity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdtocity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 11 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdtostat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdtostat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 12 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdtozipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdtozipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 13 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdptname', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdptname = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 14 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdptadr1', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdptadr1 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 15 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdptadr2', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdptadr2 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 16 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdptadr3', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdptadr3 = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 17 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdptctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdptctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 18 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdptcity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdptcity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 19 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdptstat', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdptstat = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 20 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdptzipcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdptzipcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 21 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdcont', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdcont = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 22 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdordrdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdordrdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 23 + $startcol : PurchaseOrderTableMap::translateFieldName('Aptmtermcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptmtermcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 24 + $startcol : PurchaseOrderTableMap::translateFieldName('Artbsviacode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->artbsviacode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 25 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdoldfob', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdoldfob = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 26 + $startcol : PurchaseOrderTableMap::translateFieldName('Aptbbuyrcode', TableMap::TYPE_PHPNAME, $indexType)];
            $this->aptbbuyrcode = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 27 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdcolppd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdcolppd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 28 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdteleintl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdteleintl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 29 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdtelenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdtelenbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 30 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdteleext', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdteleext = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 31 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdfaxintl', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdfaxintl = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 32 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdfaxnbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdfaxnbr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 33 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdrcnt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdrcnt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 34 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdtaxexem', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdtaxexem = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 35 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdexchctry', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdexchctry = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 36 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdexchrate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdexchrate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 37 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdexptdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdexptdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 38 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdcancdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdcancdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 39 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdicnt', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdicnt = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 40 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdfob', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdfob = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 41 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdpickqueue', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdpickqueue = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 42 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdpackedby', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdpackedby = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 43 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdpackdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdpackdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 44 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdpacktime', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdpacktime = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 45 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdlandcost', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdlandcost = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 46 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdedipodate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdedipodate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 47 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdfuturebuy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdfuturebuy = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 48 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdemailaddr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdemailaddr = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 49 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdshipdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdshipdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 50 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdackdate', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdackdate = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 51 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdreleasenbr', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdreleasenbr = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 52 + $startcol : PurchaseOrderTableMap::translateFieldName('Pohdreturnspo', TableMap::TYPE_PHPNAME, $indexType)];
            $this->pohdreturnspo = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 53 + $startcol : PurchaseOrderTableMap::translateFieldName('Dateupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dateupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 54 + $startcol : PurchaseOrderTableMap::translateFieldName('Timeupdtd', TableMap::TYPE_PHPNAME, $indexType)];
            $this->timeupdtd = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 55 + $startcol : PurchaseOrderTableMap::translateFieldName('Dummy', TableMap::TYPE_PHPNAME, $indexType)];
            $this->dummy = (null !== $col) ? (string) $col : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 56; // 56 = PurchaseOrderTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\PurchaseOrder'), 0, $e);
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
        if ($this->aVendor !== null && $this->apvevendid !== $this->aVendor->getApvevendid()) {
            $this->aVendor = null;
        }
        if ($this->aVendorShipfrom !== null && $this->apvevendid !== $this->aVendorShipfrom->getApvevendid()) {
            $this->aVendorShipfrom = null;
        }
        if ($this->aVendorShipfrom !== null && $this->apfmshipid !== $this->aVendorShipfrom->getApfmshipid()) {
            $this->aVendorShipfrom = null;
        }
        if ($this->aShipvia !== null && $this->artbsviacode !== $this->aShipvia->getArtbshipvia()) {
            $this->aShipvia = null;
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
            $con = Propel::getServiceContainer()->getReadConnection(PurchaseOrderTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildPurchaseOrderQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aVendor = null;
            $this->aVendorShipfrom = null;
            $this->aShipvia = null;
            $this->collApInvoices = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      ConnectionInterface $con
     * @return void
     * @throws PropelException
     * @see PurchaseOrder::setDeleted()
     * @see PurchaseOrder::isDeleted()
     */
    public function delete(ConnectionInterface $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildPurchaseOrderQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(PurchaseOrderTableMap::DATABASE_NAME);
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
                PurchaseOrderTableMap::addInstanceToPool($this);
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

            if ($this->aVendor !== null) {
                if ($this->aVendor->isModified() || $this->aVendor->isNew()) {
                    $affectedRows += $this->aVendor->save($con);
                }
                $this->setVendor($this->aVendor);
            }

            if ($this->aVendorShipfrom !== null) {
                if ($this->aVendorShipfrom->isModified() || $this->aVendorShipfrom->isNew()) {
                    $affectedRows += $this->aVendorShipfrom->save($con);
                }
                $this->setVendorShipfrom($this->aVendorShipfrom);
            }

            if ($this->aShipvia !== null) {
                if ($this->aShipvia->isModified() || $this->aShipvia->isNew()) {
                    $affectedRows += $this->aShipvia->save($con);
                }
                $this->setShipvia($this->aShipvia);
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

            if ($this->apInvoicesScheduledForDeletion !== null) {
                if (!$this->apInvoicesScheduledForDeletion->isEmpty()) {
                    \ApInvoiceQuery::create()
                        ->filterByPrimaryKeys($this->apInvoicesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->apInvoicesScheduledForDeletion = null;
                }
            }

            if ($this->collApInvoices !== null) {
                foreach ($this->collApInvoices as $referrerFK) {
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
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PohdNbr';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'PohdStat';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDREF)) {
            $modifiedColumns[':p' . $index++]  = 'PohdRef';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_APVEVENDID)) {
            $modifiedColumns[':p' . $index++]  = 'ApveVendId';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_APFMSHIPID)) {
            $modifiedColumns[':p' . $index++]  = 'ApfmShipId';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTONAME)) {
            $modifiedColumns[':p' . $index++]  = 'PohdToName';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOADR1)) {
            $modifiedColumns[':p' . $index++]  = 'PohdToAdr1';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOADR2)) {
            $modifiedColumns[':p' . $index++]  = 'PohdToAdr2';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOADR3)) {
            $modifiedColumns[':p' . $index++]  = 'PohdToAdr3';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'PohdToCtry';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOCITY)) {
            $modifiedColumns[':p' . $index++]  = 'PohdToCity';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'PohdToStat';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'PohdToZipCode';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'PohdPtName';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTADR1)) {
            $modifiedColumns[':p' . $index++]  = 'PohdPtAdr1';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTADR2)) {
            $modifiedColumns[':p' . $index++]  = 'PohdPtAdr2';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTADR3)) {
            $modifiedColumns[':p' . $index++]  = 'PohdPtAdr3';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'PohdPtCtry';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTCITY)) {
            $modifiedColumns[':p' . $index++]  = 'PohdPtCity';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTSTAT)) {
            $modifiedColumns[':p' . $index++]  = 'PohdPtStat';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTZIPCODE)) {
            $modifiedColumns[':p' . $index++]  = 'PohdPtZipCode';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDCONT)) {
            $modifiedColumns[':p' . $index++]  = 'PohdCont';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDORDRDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PohdOrdrDate';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_APTMTERMCODE)) {
            $modifiedColumns[':p' . $index++]  = 'AptmTermCode';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_ARTBSVIACODE)) {
            $modifiedColumns[':p' . $index++]  = 'ArtbSviaCode';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDOLDFOB)) {
            $modifiedColumns[':p' . $index++]  = 'PohdOldFob';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_APTBBUYRCODE)) {
            $modifiedColumns[':p' . $index++]  = 'AptbBuyrCode';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDCOLPPD)) {
            $modifiedColumns[':p' . $index++]  = 'PohdColPpd';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTELEINTL)) {
            $modifiedColumns[':p' . $index++]  = 'PohdTeleIntl';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTELENBR)) {
            $modifiedColumns[':p' . $index++]  = 'PohdTeleNbr';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTELEEXT)) {
            $modifiedColumns[':p' . $index++]  = 'PohdTeleExt';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDFAXINTL)) {
            $modifiedColumns[':p' . $index++]  = 'PohdFaxIntl';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDFAXNBR)) {
            $modifiedColumns[':p' . $index++]  = 'PohdFaxNbr';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDRCNT)) {
            $modifiedColumns[':p' . $index++]  = 'PohdRCnt';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTAXEXEM)) {
            $modifiedColumns[':p' . $index++]  = 'PohdTaxExem';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDEXCHCTRY)) {
            $modifiedColumns[':p' . $index++]  = 'PohdExchCtry';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDEXCHRATE)) {
            $modifiedColumns[':p' . $index++]  = 'PohdExchRate';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDEXPTDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PohdExptDate';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDCANCDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PohdCancDate';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDICNT)) {
            $modifiedColumns[':p' . $index++]  = 'PohdICnt';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDFOB)) {
            $modifiedColumns[':p' . $index++]  = 'PohdFob';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPICKQUEUE)) {
            $modifiedColumns[':p' . $index++]  = 'PohdPickQueue';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPACKEDBY)) {
            $modifiedColumns[':p' . $index++]  = 'PohdPackedBy';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPACKDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PohdPackDate';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPACKTIME)) {
            $modifiedColumns[':p' . $index++]  = 'PohdPackTime';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDLANDCOST)) {
            $modifiedColumns[':p' . $index++]  = 'PohdLandCost';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDEDIPODATE)) {
            $modifiedColumns[':p' . $index++]  = 'PohdEdiPoDate';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDFUTUREBUY)) {
            $modifiedColumns[':p' . $index++]  = 'PohdFutureBuy';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDEMAILADDR)) {
            $modifiedColumns[':p' . $index++]  = 'PohdEmailAddr';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDSHIPDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PohdShipDate';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDACKDATE)) {
            $modifiedColumns[':p' . $index++]  = 'PohdAckDate';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDRELEASENBR)) {
            $modifiedColumns[':p' . $index++]  = 'PohdReleaseNbr';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDRETURNSPO)) {
            $modifiedColumns[':p' . $index++]  = 'PohdReturnsPo';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_DATEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'DateUpdtd';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_TIMEUPDTD)) {
            $modifiedColumns[':p' . $index++]  = 'TimeUpdtd';
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_DUMMY)) {
            $modifiedColumns[':p' . $index++]  = 'dummy';
        }

        $sql = sprintf(
            'INSERT INTO po_head (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'PohdNbr':
                        $stmt->bindValue($identifier, $this->pohdnbr, PDO::PARAM_STR);
                        break;
                    case 'PohdStat':
                        $stmt->bindValue($identifier, $this->pohdstat, PDO::PARAM_STR);
                        break;
                    case 'PohdRef':
                        $stmt->bindValue($identifier, $this->pohdref, PDO::PARAM_STR);
                        break;
                    case 'ApveVendId':
                        $stmt->bindValue($identifier, $this->apvevendid, PDO::PARAM_STR);
                        break;
                    case 'ApfmShipId':
                        $stmt->bindValue($identifier, $this->apfmshipid, PDO::PARAM_STR);
                        break;
                    case 'PohdToName':
                        $stmt->bindValue($identifier, $this->pohdtoname, PDO::PARAM_STR);
                        break;
                    case 'PohdToAdr1':
                        $stmt->bindValue($identifier, $this->pohdtoadr1, PDO::PARAM_STR);
                        break;
                    case 'PohdToAdr2':
                        $stmt->bindValue($identifier, $this->pohdtoadr2, PDO::PARAM_STR);
                        break;
                    case 'PohdToAdr3':
                        $stmt->bindValue($identifier, $this->pohdtoadr3, PDO::PARAM_STR);
                        break;
                    case 'PohdToCtry':
                        $stmt->bindValue($identifier, $this->pohdtoctry, PDO::PARAM_STR);
                        break;
                    case 'PohdToCity':
                        $stmt->bindValue($identifier, $this->pohdtocity, PDO::PARAM_STR);
                        break;
                    case 'PohdToStat':
                        $stmt->bindValue($identifier, $this->pohdtostat, PDO::PARAM_STR);
                        break;
                    case 'PohdToZipCode':
                        $stmt->bindValue($identifier, $this->pohdtozipcode, PDO::PARAM_STR);
                        break;
                    case 'PohdPtName':
                        $stmt->bindValue($identifier, $this->pohdptname, PDO::PARAM_STR);
                        break;
                    case 'PohdPtAdr1':
                        $stmt->bindValue($identifier, $this->pohdptadr1, PDO::PARAM_STR);
                        break;
                    case 'PohdPtAdr2':
                        $stmt->bindValue($identifier, $this->pohdptadr2, PDO::PARAM_STR);
                        break;
                    case 'PohdPtAdr3':
                        $stmt->bindValue($identifier, $this->pohdptadr3, PDO::PARAM_STR);
                        break;
                    case 'PohdPtCtry':
                        $stmt->bindValue($identifier, $this->pohdptctry, PDO::PARAM_STR);
                        break;
                    case 'PohdPtCity':
                        $stmt->bindValue($identifier, $this->pohdptcity, PDO::PARAM_STR);
                        break;
                    case 'PohdPtStat':
                        $stmt->bindValue($identifier, $this->pohdptstat, PDO::PARAM_STR);
                        break;
                    case 'PohdPtZipCode':
                        $stmt->bindValue($identifier, $this->pohdptzipcode, PDO::PARAM_STR);
                        break;
                    case 'PohdCont':
                        $stmt->bindValue($identifier, $this->pohdcont, PDO::PARAM_STR);
                        break;
                    case 'PohdOrdrDate':
                        $stmt->bindValue($identifier, $this->pohdordrdate, PDO::PARAM_STR);
                        break;
                    case 'AptmTermCode':
                        $stmt->bindValue($identifier, $this->aptmtermcode, PDO::PARAM_STR);
                        break;
                    case 'ArtbSviaCode':
                        $stmt->bindValue($identifier, $this->artbsviacode, PDO::PARAM_STR);
                        break;
                    case 'PohdOldFob':
                        $stmt->bindValue($identifier, $this->pohdoldfob, PDO::PARAM_STR);
                        break;
                    case 'AptbBuyrCode':
                        $stmt->bindValue($identifier, $this->aptbbuyrcode, PDO::PARAM_STR);
                        break;
                    case 'PohdColPpd':
                        $stmt->bindValue($identifier, $this->pohdcolppd, PDO::PARAM_STR);
                        break;
                    case 'PohdTeleIntl':
                        $stmt->bindValue($identifier, $this->pohdteleintl, PDO::PARAM_STR);
                        break;
                    case 'PohdTeleNbr':
                        $stmt->bindValue($identifier, $this->pohdtelenbr, PDO::PARAM_STR);
                        break;
                    case 'PohdTeleExt':
                        $stmt->bindValue($identifier, $this->pohdteleext, PDO::PARAM_STR);
                        break;
                    case 'PohdFaxIntl':
                        $stmt->bindValue($identifier, $this->pohdfaxintl, PDO::PARAM_STR);
                        break;
                    case 'PohdFaxNbr':
                        $stmt->bindValue($identifier, $this->pohdfaxnbr, PDO::PARAM_STR);
                        break;
                    case 'PohdRCnt':
                        $stmt->bindValue($identifier, $this->pohdrcnt, PDO::PARAM_STR);
                        break;
                    case 'PohdTaxExem':
                        $stmt->bindValue($identifier, $this->pohdtaxexem, PDO::PARAM_STR);
                        break;
                    case 'PohdExchCtry':
                        $stmt->bindValue($identifier, $this->pohdexchctry, PDO::PARAM_STR);
                        break;
                    case 'PohdExchRate':
                        $stmt->bindValue($identifier, $this->pohdexchrate, PDO::PARAM_STR);
                        break;
                    case 'PohdExptDate':
                        $stmt->bindValue($identifier, $this->pohdexptdate, PDO::PARAM_STR);
                        break;
                    case 'PohdCancDate':
                        $stmt->bindValue($identifier, $this->pohdcancdate, PDO::PARAM_STR);
                        break;
                    case 'PohdICnt':
                        $stmt->bindValue($identifier, $this->pohdicnt, PDO::PARAM_STR);
                        break;
                    case 'PohdFob':
                        $stmt->bindValue($identifier, $this->pohdfob, PDO::PARAM_STR);
                        break;
                    case 'PohdPickQueue':
                        $stmt->bindValue($identifier, $this->pohdpickqueue, PDO::PARAM_STR);
                        break;
                    case 'PohdPackedBy':
                        $stmt->bindValue($identifier, $this->pohdpackedby, PDO::PARAM_STR);
                        break;
                    case 'PohdPackDate':
                        $stmt->bindValue($identifier, $this->pohdpackdate, PDO::PARAM_STR);
                        break;
                    case 'PohdPackTime':
                        $stmt->bindValue($identifier, $this->pohdpacktime, PDO::PARAM_STR);
                        break;
                    case 'PohdLandCost':
                        $stmt->bindValue($identifier, $this->pohdlandcost, PDO::PARAM_STR);
                        break;
                    case 'PohdEdiPoDate':
                        $stmt->bindValue($identifier, $this->pohdedipodate, PDO::PARAM_STR);
                        break;
                    case 'PohdFutureBuy':
                        $stmt->bindValue($identifier, $this->pohdfuturebuy, PDO::PARAM_STR);
                        break;
                    case 'PohdEmailAddr':
                        $stmt->bindValue($identifier, $this->pohdemailaddr, PDO::PARAM_STR);
                        break;
                    case 'PohdShipDate':
                        $stmt->bindValue($identifier, $this->pohdshipdate, PDO::PARAM_STR);
                        break;
                    case 'PohdAckDate':
                        $stmt->bindValue($identifier, $this->pohdackdate, PDO::PARAM_STR);
                        break;
                    case 'PohdReleaseNbr':
                        $stmt->bindValue($identifier, $this->pohdreleasenbr, PDO::PARAM_INT);
                        break;
                    case 'PohdReturnsPo':
                        $stmt->bindValue($identifier, $this->pohdreturnspo, PDO::PARAM_STR);
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
        $pos = PurchaseOrderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getPohdnbr();
                break;
            case 1:
                return $this->getPohdstat();
                break;
            case 2:
                return $this->getPohdref();
                break;
            case 3:
                return $this->getApvevendid();
                break;
            case 4:
                return $this->getApfmshipid();
                break;
            case 5:
                return $this->getPohdtoname();
                break;
            case 6:
                return $this->getPohdtoadr1();
                break;
            case 7:
                return $this->getPohdtoadr2();
                break;
            case 8:
                return $this->getPohdtoadr3();
                break;
            case 9:
                return $this->getPohdtoctry();
                break;
            case 10:
                return $this->getPohdtocity();
                break;
            case 11:
                return $this->getPohdtostat();
                break;
            case 12:
                return $this->getPohdtozipcode();
                break;
            case 13:
                return $this->getPohdptname();
                break;
            case 14:
                return $this->getPohdptadr1();
                break;
            case 15:
                return $this->getPohdptadr2();
                break;
            case 16:
                return $this->getPohdptadr3();
                break;
            case 17:
                return $this->getPohdptctry();
                break;
            case 18:
                return $this->getPohdptcity();
                break;
            case 19:
                return $this->getPohdptstat();
                break;
            case 20:
                return $this->getPohdptzipcode();
                break;
            case 21:
                return $this->getPohdcont();
                break;
            case 22:
                return $this->getPohdordrdate();
                break;
            case 23:
                return $this->getAptmtermcode();
                break;
            case 24:
                return $this->getArtbsviacode();
                break;
            case 25:
                return $this->getPohdoldfob();
                break;
            case 26:
                return $this->getAptbbuyrcode();
                break;
            case 27:
                return $this->getPohdcolppd();
                break;
            case 28:
                return $this->getPohdteleintl();
                break;
            case 29:
                return $this->getPohdtelenbr();
                break;
            case 30:
                return $this->getPohdteleext();
                break;
            case 31:
                return $this->getPohdfaxintl();
                break;
            case 32:
                return $this->getPohdfaxnbr();
                break;
            case 33:
                return $this->getPohdrcnt();
                break;
            case 34:
                return $this->getPohdtaxexem();
                break;
            case 35:
                return $this->getPohdexchctry();
                break;
            case 36:
                return $this->getPohdexchrate();
                break;
            case 37:
                return $this->getPohdexptdate();
                break;
            case 38:
                return $this->getPohdcancdate();
                break;
            case 39:
                return $this->getPohdicnt();
                break;
            case 40:
                return $this->getPohdfob();
                break;
            case 41:
                return $this->getPohdpickqueue();
                break;
            case 42:
                return $this->getPohdpackedby();
                break;
            case 43:
                return $this->getPohdpackdate();
                break;
            case 44:
                return $this->getPohdpacktime();
                break;
            case 45:
                return $this->getPohdlandcost();
                break;
            case 46:
                return $this->getPohdedipodate();
                break;
            case 47:
                return $this->getPohdfuturebuy();
                break;
            case 48:
                return $this->getPohdemailaddr();
                break;
            case 49:
                return $this->getPohdshipdate();
                break;
            case 50:
                return $this->getPohdackdate();
                break;
            case 51:
                return $this->getPohdreleasenbr();
                break;
            case 52:
                return $this->getPohdreturnspo();
                break;
            case 53:
                return $this->getDateupdtd();
                break;
            case 54:
                return $this->getTimeupdtd();
                break;
            case 55:
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

        if (isset($alreadyDumpedObjects['PurchaseOrder'][$this->hashCode()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PurchaseOrder'][$this->hashCode()] = true;
        $keys = PurchaseOrderTableMap::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getPohdnbr(),
            $keys[1] => $this->getPohdstat(),
            $keys[2] => $this->getPohdref(),
            $keys[3] => $this->getApvevendid(),
            $keys[4] => $this->getApfmshipid(),
            $keys[5] => $this->getPohdtoname(),
            $keys[6] => $this->getPohdtoadr1(),
            $keys[7] => $this->getPohdtoadr2(),
            $keys[8] => $this->getPohdtoadr3(),
            $keys[9] => $this->getPohdtoctry(),
            $keys[10] => $this->getPohdtocity(),
            $keys[11] => $this->getPohdtostat(),
            $keys[12] => $this->getPohdtozipcode(),
            $keys[13] => $this->getPohdptname(),
            $keys[14] => $this->getPohdptadr1(),
            $keys[15] => $this->getPohdptadr2(),
            $keys[16] => $this->getPohdptadr3(),
            $keys[17] => $this->getPohdptctry(),
            $keys[18] => $this->getPohdptcity(),
            $keys[19] => $this->getPohdptstat(),
            $keys[20] => $this->getPohdptzipcode(),
            $keys[21] => $this->getPohdcont(),
            $keys[22] => $this->getPohdordrdate(),
            $keys[23] => $this->getAptmtermcode(),
            $keys[24] => $this->getArtbsviacode(),
            $keys[25] => $this->getPohdoldfob(),
            $keys[26] => $this->getAptbbuyrcode(),
            $keys[27] => $this->getPohdcolppd(),
            $keys[28] => $this->getPohdteleintl(),
            $keys[29] => $this->getPohdtelenbr(),
            $keys[30] => $this->getPohdteleext(),
            $keys[31] => $this->getPohdfaxintl(),
            $keys[32] => $this->getPohdfaxnbr(),
            $keys[33] => $this->getPohdrcnt(),
            $keys[34] => $this->getPohdtaxexem(),
            $keys[35] => $this->getPohdexchctry(),
            $keys[36] => $this->getPohdexchrate(),
            $keys[37] => $this->getPohdexptdate(),
            $keys[38] => $this->getPohdcancdate(),
            $keys[39] => $this->getPohdicnt(),
            $keys[40] => $this->getPohdfob(),
            $keys[41] => $this->getPohdpickqueue(),
            $keys[42] => $this->getPohdpackedby(),
            $keys[43] => $this->getPohdpackdate(),
            $keys[44] => $this->getPohdpacktime(),
            $keys[45] => $this->getPohdlandcost(),
            $keys[46] => $this->getPohdedipodate(),
            $keys[47] => $this->getPohdfuturebuy(),
            $keys[48] => $this->getPohdemailaddr(),
            $keys[49] => $this->getPohdshipdate(),
            $keys[50] => $this->getPohdackdate(),
            $keys[51] => $this->getPohdreleasenbr(),
            $keys[52] => $this->getPohdreturnspo(),
            $keys[53] => $this->getDateupdtd(),
            $keys[54] => $this->getTimeupdtd(),
            $keys[55] => $this->getDummy(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aVendor) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'vendor';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ap_vend_mast';
                        break;
                    default:
                        $key = 'Vendor';
                }

                $result[$key] = $this->aVendor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aVendorShipfrom) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'vendorShipfrom';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ap_ship_from';
                        break;
                    default:
                        $key = 'VendorShipfrom';
                }

                $result[$key] = $this->aVendorShipfrom->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
            if (null !== $this->collApInvoices) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'apInvoices';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'ap_invoice_heads';
                        break;
                    default:
                        $key = 'ApInvoices';
                }

                $result[$key] = $this->collApInvoices->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
     * @return $this|\PurchaseOrder
     */
    public function setByName($name, $value, $type = TableMap::TYPE_PHPNAME)
    {
        $pos = PurchaseOrderTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param  int $pos position in xml schema
     * @param  mixed $value field value
     * @return $this|\PurchaseOrder
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setPohdnbr($value);
                break;
            case 1:
                $this->setPohdstat($value);
                break;
            case 2:
                $this->setPohdref($value);
                break;
            case 3:
                $this->setApvevendid($value);
                break;
            case 4:
                $this->setApfmshipid($value);
                break;
            case 5:
                $this->setPohdtoname($value);
                break;
            case 6:
                $this->setPohdtoadr1($value);
                break;
            case 7:
                $this->setPohdtoadr2($value);
                break;
            case 8:
                $this->setPohdtoadr3($value);
                break;
            case 9:
                $this->setPohdtoctry($value);
                break;
            case 10:
                $this->setPohdtocity($value);
                break;
            case 11:
                $this->setPohdtostat($value);
                break;
            case 12:
                $this->setPohdtozipcode($value);
                break;
            case 13:
                $this->setPohdptname($value);
                break;
            case 14:
                $this->setPohdptadr1($value);
                break;
            case 15:
                $this->setPohdptadr2($value);
                break;
            case 16:
                $this->setPohdptadr3($value);
                break;
            case 17:
                $this->setPohdptctry($value);
                break;
            case 18:
                $this->setPohdptcity($value);
                break;
            case 19:
                $this->setPohdptstat($value);
                break;
            case 20:
                $this->setPohdptzipcode($value);
                break;
            case 21:
                $this->setPohdcont($value);
                break;
            case 22:
                $this->setPohdordrdate($value);
                break;
            case 23:
                $this->setAptmtermcode($value);
                break;
            case 24:
                $this->setArtbsviacode($value);
                break;
            case 25:
                $this->setPohdoldfob($value);
                break;
            case 26:
                $this->setAptbbuyrcode($value);
                break;
            case 27:
                $this->setPohdcolppd($value);
                break;
            case 28:
                $this->setPohdteleintl($value);
                break;
            case 29:
                $this->setPohdtelenbr($value);
                break;
            case 30:
                $this->setPohdteleext($value);
                break;
            case 31:
                $this->setPohdfaxintl($value);
                break;
            case 32:
                $this->setPohdfaxnbr($value);
                break;
            case 33:
                $this->setPohdrcnt($value);
                break;
            case 34:
                $this->setPohdtaxexem($value);
                break;
            case 35:
                $this->setPohdexchctry($value);
                break;
            case 36:
                $this->setPohdexchrate($value);
                break;
            case 37:
                $this->setPohdexptdate($value);
                break;
            case 38:
                $this->setPohdcancdate($value);
                break;
            case 39:
                $this->setPohdicnt($value);
                break;
            case 40:
                $this->setPohdfob($value);
                break;
            case 41:
                $this->setPohdpickqueue($value);
                break;
            case 42:
                $this->setPohdpackedby($value);
                break;
            case 43:
                $this->setPohdpackdate($value);
                break;
            case 44:
                $this->setPohdpacktime($value);
                break;
            case 45:
                $this->setPohdlandcost($value);
                break;
            case 46:
                $this->setPohdedipodate($value);
                break;
            case 47:
                $this->setPohdfuturebuy($value);
                break;
            case 48:
                $this->setPohdemailaddr($value);
                break;
            case 49:
                $this->setPohdshipdate($value);
                break;
            case 50:
                $this->setPohdackdate($value);
                break;
            case 51:
                $this->setPohdreleasenbr($value);
                break;
            case 52:
                $this->setPohdreturnspo($value);
                break;
            case 53:
                $this->setDateupdtd($value);
                break;
            case 54:
                $this->setTimeupdtd($value);
                break;
            case 55:
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
        $keys = PurchaseOrderTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setPohdnbr($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setPohdstat($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setPohdref($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setApvevendid($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setApfmshipid($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setPohdtoname($arr[$keys[5]]);
        }
        if (array_key_exists($keys[6], $arr)) {
            $this->setPohdtoadr1($arr[$keys[6]]);
        }
        if (array_key_exists($keys[7], $arr)) {
            $this->setPohdtoadr2($arr[$keys[7]]);
        }
        if (array_key_exists($keys[8], $arr)) {
            $this->setPohdtoadr3($arr[$keys[8]]);
        }
        if (array_key_exists($keys[9], $arr)) {
            $this->setPohdtoctry($arr[$keys[9]]);
        }
        if (array_key_exists($keys[10], $arr)) {
            $this->setPohdtocity($arr[$keys[10]]);
        }
        if (array_key_exists($keys[11], $arr)) {
            $this->setPohdtostat($arr[$keys[11]]);
        }
        if (array_key_exists($keys[12], $arr)) {
            $this->setPohdtozipcode($arr[$keys[12]]);
        }
        if (array_key_exists($keys[13], $arr)) {
            $this->setPohdptname($arr[$keys[13]]);
        }
        if (array_key_exists($keys[14], $arr)) {
            $this->setPohdptadr1($arr[$keys[14]]);
        }
        if (array_key_exists($keys[15], $arr)) {
            $this->setPohdptadr2($arr[$keys[15]]);
        }
        if (array_key_exists($keys[16], $arr)) {
            $this->setPohdptadr3($arr[$keys[16]]);
        }
        if (array_key_exists($keys[17], $arr)) {
            $this->setPohdptctry($arr[$keys[17]]);
        }
        if (array_key_exists($keys[18], $arr)) {
            $this->setPohdptcity($arr[$keys[18]]);
        }
        if (array_key_exists($keys[19], $arr)) {
            $this->setPohdptstat($arr[$keys[19]]);
        }
        if (array_key_exists($keys[20], $arr)) {
            $this->setPohdptzipcode($arr[$keys[20]]);
        }
        if (array_key_exists($keys[21], $arr)) {
            $this->setPohdcont($arr[$keys[21]]);
        }
        if (array_key_exists($keys[22], $arr)) {
            $this->setPohdordrdate($arr[$keys[22]]);
        }
        if (array_key_exists($keys[23], $arr)) {
            $this->setAptmtermcode($arr[$keys[23]]);
        }
        if (array_key_exists($keys[24], $arr)) {
            $this->setArtbsviacode($arr[$keys[24]]);
        }
        if (array_key_exists($keys[25], $arr)) {
            $this->setPohdoldfob($arr[$keys[25]]);
        }
        if (array_key_exists($keys[26], $arr)) {
            $this->setAptbbuyrcode($arr[$keys[26]]);
        }
        if (array_key_exists($keys[27], $arr)) {
            $this->setPohdcolppd($arr[$keys[27]]);
        }
        if (array_key_exists($keys[28], $arr)) {
            $this->setPohdteleintl($arr[$keys[28]]);
        }
        if (array_key_exists($keys[29], $arr)) {
            $this->setPohdtelenbr($arr[$keys[29]]);
        }
        if (array_key_exists($keys[30], $arr)) {
            $this->setPohdteleext($arr[$keys[30]]);
        }
        if (array_key_exists($keys[31], $arr)) {
            $this->setPohdfaxintl($arr[$keys[31]]);
        }
        if (array_key_exists($keys[32], $arr)) {
            $this->setPohdfaxnbr($arr[$keys[32]]);
        }
        if (array_key_exists($keys[33], $arr)) {
            $this->setPohdrcnt($arr[$keys[33]]);
        }
        if (array_key_exists($keys[34], $arr)) {
            $this->setPohdtaxexem($arr[$keys[34]]);
        }
        if (array_key_exists($keys[35], $arr)) {
            $this->setPohdexchctry($arr[$keys[35]]);
        }
        if (array_key_exists($keys[36], $arr)) {
            $this->setPohdexchrate($arr[$keys[36]]);
        }
        if (array_key_exists($keys[37], $arr)) {
            $this->setPohdexptdate($arr[$keys[37]]);
        }
        if (array_key_exists($keys[38], $arr)) {
            $this->setPohdcancdate($arr[$keys[38]]);
        }
        if (array_key_exists($keys[39], $arr)) {
            $this->setPohdicnt($arr[$keys[39]]);
        }
        if (array_key_exists($keys[40], $arr)) {
            $this->setPohdfob($arr[$keys[40]]);
        }
        if (array_key_exists($keys[41], $arr)) {
            $this->setPohdpickqueue($arr[$keys[41]]);
        }
        if (array_key_exists($keys[42], $arr)) {
            $this->setPohdpackedby($arr[$keys[42]]);
        }
        if (array_key_exists($keys[43], $arr)) {
            $this->setPohdpackdate($arr[$keys[43]]);
        }
        if (array_key_exists($keys[44], $arr)) {
            $this->setPohdpacktime($arr[$keys[44]]);
        }
        if (array_key_exists($keys[45], $arr)) {
            $this->setPohdlandcost($arr[$keys[45]]);
        }
        if (array_key_exists($keys[46], $arr)) {
            $this->setPohdedipodate($arr[$keys[46]]);
        }
        if (array_key_exists($keys[47], $arr)) {
            $this->setPohdfuturebuy($arr[$keys[47]]);
        }
        if (array_key_exists($keys[48], $arr)) {
            $this->setPohdemailaddr($arr[$keys[48]]);
        }
        if (array_key_exists($keys[49], $arr)) {
            $this->setPohdshipdate($arr[$keys[49]]);
        }
        if (array_key_exists($keys[50], $arr)) {
            $this->setPohdackdate($arr[$keys[50]]);
        }
        if (array_key_exists($keys[51], $arr)) {
            $this->setPohdreleasenbr($arr[$keys[51]]);
        }
        if (array_key_exists($keys[52], $arr)) {
            $this->setPohdreturnspo($arr[$keys[52]]);
        }
        if (array_key_exists($keys[53], $arr)) {
            $this->setDateupdtd($arr[$keys[53]]);
        }
        if (array_key_exists($keys[54], $arr)) {
            $this->setTimeupdtd($arr[$keys[54]]);
        }
        if (array_key_exists($keys[55], $arr)) {
            $this->setDummy($arr[$keys[55]]);
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
     * @return $this|\PurchaseOrder The current object, for fluid interface
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
        $criteria = new Criteria(PurchaseOrderTableMap::DATABASE_NAME);

        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDNBR)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDNBR, $this->pohdnbr);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDSTAT)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDSTAT, $this->pohdstat);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDREF)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDREF, $this->pohdref);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_APVEVENDID)) {
            $criteria->add(PurchaseOrderTableMap::COL_APVEVENDID, $this->apvevendid);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_APFMSHIPID)) {
            $criteria->add(PurchaseOrderTableMap::COL_APFMSHIPID, $this->apfmshipid);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTONAME)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDTONAME, $this->pohdtoname);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOADR1)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDTOADR1, $this->pohdtoadr1);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOADR2)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDTOADR2, $this->pohdtoadr2);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOADR3)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDTOADR3, $this->pohdtoadr3);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOCTRY)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDTOCTRY, $this->pohdtoctry);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOCITY)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDTOCITY, $this->pohdtocity);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOSTAT)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDTOSTAT, $this->pohdtostat);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTOZIPCODE)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDTOZIPCODE, $this->pohdtozipcode);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTNAME)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDPTNAME, $this->pohdptname);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTADR1)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDPTADR1, $this->pohdptadr1);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTADR2)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDPTADR2, $this->pohdptadr2);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTADR3)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDPTADR3, $this->pohdptadr3);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTCTRY)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDPTCTRY, $this->pohdptctry);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTCITY)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDPTCITY, $this->pohdptcity);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTSTAT)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDPTSTAT, $this->pohdptstat);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPTZIPCODE)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDPTZIPCODE, $this->pohdptzipcode);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDCONT)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDCONT, $this->pohdcont);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDORDRDATE)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDORDRDATE, $this->pohdordrdate);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_APTMTERMCODE)) {
            $criteria->add(PurchaseOrderTableMap::COL_APTMTERMCODE, $this->aptmtermcode);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_ARTBSVIACODE)) {
            $criteria->add(PurchaseOrderTableMap::COL_ARTBSVIACODE, $this->artbsviacode);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDOLDFOB)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDOLDFOB, $this->pohdoldfob);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_APTBBUYRCODE)) {
            $criteria->add(PurchaseOrderTableMap::COL_APTBBUYRCODE, $this->aptbbuyrcode);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDCOLPPD)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDCOLPPD, $this->pohdcolppd);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTELEINTL)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDTELEINTL, $this->pohdteleintl);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTELENBR)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDTELENBR, $this->pohdtelenbr);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTELEEXT)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDTELEEXT, $this->pohdteleext);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDFAXINTL)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDFAXINTL, $this->pohdfaxintl);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDFAXNBR)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDFAXNBR, $this->pohdfaxnbr);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDRCNT)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDRCNT, $this->pohdrcnt);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDTAXEXEM)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDTAXEXEM, $this->pohdtaxexem);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDEXCHCTRY)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDEXCHCTRY, $this->pohdexchctry);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDEXCHRATE)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDEXCHRATE, $this->pohdexchrate);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDEXPTDATE)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDEXPTDATE, $this->pohdexptdate);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDCANCDATE)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDCANCDATE, $this->pohdcancdate);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDICNT)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDICNT, $this->pohdicnt);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDFOB)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDFOB, $this->pohdfob);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPICKQUEUE)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDPICKQUEUE, $this->pohdpickqueue);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPACKEDBY)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDPACKEDBY, $this->pohdpackedby);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPACKDATE)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDPACKDATE, $this->pohdpackdate);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDPACKTIME)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDPACKTIME, $this->pohdpacktime);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDLANDCOST)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDLANDCOST, $this->pohdlandcost);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDEDIPODATE)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDEDIPODATE, $this->pohdedipodate);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDFUTUREBUY)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDFUTUREBUY, $this->pohdfuturebuy);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDEMAILADDR)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDEMAILADDR, $this->pohdemailaddr);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDSHIPDATE)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDSHIPDATE, $this->pohdshipdate);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDACKDATE)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDACKDATE, $this->pohdackdate);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDRELEASENBR)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDRELEASENBR, $this->pohdreleasenbr);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_POHDRETURNSPO)) {
            $criteria->add(PurchaseOrderTableMap::COL_POHDRETURNSPO, $this->pohdreturnspo);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_DATEUPDTD)) {
            $criteria->add(PurchaseOrderTableMap::COL_DATEUPDTD, $this->dateupdtd);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_TIMEUPDTD)) {
            $criteria->add(PurchaseOrderTableMap::COL_TIMEUPDTD, $this->timeupdtd);
        }
        if ($this->isColumnModified(PurchaseOrderTableMap::COL_DUMMY)) {
            $criteria->add(PurchaseOrderTableMap::COL_DUMMY, $this->dummy);
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
        $criteria = ChildPurchaseOrderQuery::create();
        $criteria->add(PurchaseOrderTableMap::COL_POHDNBR, $this->pohdnbr);

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
        $validPk = null !== $this->getPohdnbr();

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
        return $this->getPohdnbr();
    }

    /**
     * Generic method to set the primary key (pohdnbr column).
     *
     * @param       string $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setPohdnbr($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {
        return null === $this->getPohdnbr();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of \PurchaseOrder (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPohdnbr($this->getPohdnbr());
        $copyObj->setPohdstat($this->getPohdstat());
        $copyObj->setPohdref($this->getPohdref());
        $copyObj->setApvevendid($this->getApvevendid());
        $copyObj->setApfmshipid($this->getApfmshipid());
        $copyObj->setPohdtoname($this->getPohdtoname());
        $copyObj->setPohdtoadr1($this->getPohdtoadr1());
        $copyObj->setPohdtoadr2($this->getPohdtoadr2());
        $copyObj->setPohdtoadr3($this->getPohdtoadr3());
        $copyObj->setPohdtoctry($this->getPohdtoctry());
        $copyObj->setPohdtocity($this->getPohdtocity());
        $copyObj->setPohdtostat($this->getPohdtostat());
        $copyObj->setPohdtozipcode($this->getPohdtozipcode());
        $copyObj->setPohdptname($this->getPohdptname());
        $copyObj->setPohdptadr1($this->getPohdptadr1());
        $copyObj->setPohdptadr2($this->getPohdptadr2());
        $copyObj->setPohdptadr3($this->getPohdptadr3());
        $copyObj->setPohdptctry($this->getPohdptctry());
        $copyObj->setPohdptcity($this->getPohdptcity());
        $copyObj->setPohdptstat($this->getPohdptstat());
        $copyObj->setPohdptzipcode($this->getPohdptzipcode());
        $copyObj->setPohdcont($this->getPohdcont());
        $copyObj->setPohdordrdate($this->getPohdordrdate());
        $copyObj->setAptmtermcode($this->getAptmtermcode());
        $copyObj->setArtbsviacode($this->getArtbsviacode());
        $copyObj->setPohdoldfob($this->getPohdoldfob());
        $copyObj->setAptbbuyrcode($this->getAptbbuyrcode());
        $copyObj->setPohdcolppd($this->getPohdcolppd());
        $copyObj->setPohdteleintl($this->getPohdteleintl());
        $copyObj->setPohdtelenbr($this->getPohdtelenbr());
        $copyObj->setPohdteleext($this->getPohdteleext());
        $copyObj->setPohdfaxintl($this->getPohdfaxintl());
        $copyObj->setPohdfaxnbr($this->getPohdfaxnbr());
        $copyObj->setPohdrcnt($this->getPohdrcnt());
        $copyObj->setPohdtaxexem($this->getPohdtaxexem());
        $copyObj->setPohdexchctry($this->getPohdexchctry());
        $copyObj->setPohdexchrate($this->getPohdexchrate());
        $copyObj->setPohdexptdate($this->getPohdexptdate());
        $copyObj->setPohdcancdate($this->getPohdcancdate());
        $copyObj->setPohdicnt($this->getPohdicnt());
        $copyObj->setPohdfob($this->getPohdfob());
        $copyObj->setPohdpickqueue($this->getPohdpickqueue());
        $copyObj->setPohdpackedby($this->getPohdpackedby());
        $copyObj->setPohdpackdate($this->getPohdpackdate());
        $copyObj->setPohdpacktime($this->getPohdpacktime());
        $copyObj->setPohdlandcost($this->getPohdlandcost());
        $copyObj->setPohdedipodate($this->getPohdedipodate());
        $copyObj->setPohdfuturebuy($this->getPohdfuturebuy());
        $copyObj->setPohdemailaddr($this->getPohdemailaddr());
        $copyObj->setPohdshipdate($this->getPohdshipdate());
        $copyObj->setPohdackdate($this->getPohdackdate());
        $copyObj->setPohdreleasenbr($this->getPohdreleasenbr());
        $copyObj->setPohdreturnspo($this->getPohdreturnspo());
        $copyObj->setDateupdtd($this->getDateupdtd());
        $copyObj->setTimeupdtd($this->getTimeupdtd());
        $copyObj->setDummy($this->getDummy());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getApInvoices() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addApInvoice($relObj->copy($deepCopy));
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
     * @return \PurchaseOrder Clone of current object.
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
     * Declares an association between this object and a ChildVendor object.
     *
     * @param  ChildVendor $v
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     * @throws PropelException
     */
    public function setVendor(ChildVendor $v = null)
    {
        if ($v === null) {
            $this->setApvevendid(NULL);
        } else {
            $this->setApvevendid($v->getApvevendid());
        }

        $this->aVendor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildVendor object, it will not be re-added.
        if ($v !== null) {
            $v->addPurchaseOrder($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildVendor object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildVendor The associated ChildVendor object.
     * @throws PropelException
     */
    public function getVendor(ConnectionInterface $con = null)
    {
        if ($this->aVendor === null && (($this->apvevendid !== "" && $this->apvevendid !== null))) {
            $this->aVendor = ChildVendorQuery::create()->findPk($this->apvevendid, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVendor->addPurchaseOrders($this);
             */
        }

        return $this->aVendor;
    }

    /**
     * Declares an association between this object and a ChildVendorShipfrom object.
     *
     * @param  ChildVendorShipfrom $v
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     * @throws PropelException
     */
    public function setVendorShipfrom(ChildVendorShipfrom $v = null)
    {
        if ($v === null) {
            $this->setApvevendid(NULL);
        } else {
            $this->setApvevendid($v->getApvevendid());
        }

        if ($v === null) {
            $this->setApfmshipid(NULL);
        } else {
            $this->setApfmshipid($v->getApfmshipid());
        }

        $this->aVendorShipfrom = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildVendorShipfrom object, it will not be re-added.
        if ($v !== null) {
            $v->addPurchaseOrder($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildVendorShipfrom object
     *
     * @param  ConnectionInterface $con Optional Connection object.
     * @return ChildVendorShipfrom The associated ChildVendorShipfrom object.
     * @throws PropelException
     */
    public function getVendorShipfrom(ConnectionInterface $con = null)
    {
        if ($this->aVendorShipfrom === null && (($this->apvevendid !== "" && $this->apvevendid !== null) && ($this->apfmshipid !== "" && $this->apfmshipid !== null))) {
            $this->aVendorShipfrom = ChildVendorShipfromQuery::create()->findPk(array($this->apvevendid, $this->apfmshipid), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVendorShipfrom->addPurchaseOrders($this);
             */
        }

        return $this->aVendorShipfrom;
    }

    /**
     * Declares an association between this object and a ChildShipvia object.
     *
     * @param  ChildShipvia $v
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     * @throws PropelException
     */
    public function setShipvia(ChildShipvia $v = null)
    {
        if ($v === null) {
            $this->setArtbsviacode(NULL);
        } else {
            $this->setArtbsviacode($v->getArtbshipvia());
        }

        $this->aShipvia = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildShipvia object, it will not be re-added.
        if ($v !== null) {
            $v->addPurchaseOrder($this);
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
        if ($this->aShipvia === null && (($this->artbsviacode !== "" && $this->artbsviacode !== null))) {
            $this->aShipvia = ChildShipviaQuery::create()->findPk($this->artbsviacode, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aShipvia->addPurchaseOrders($this);
             */
        }

        return $this->aShipvia;
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
        if ('ApInvoice' == $relationName) {
            $this->initApInvoices();
            return;
        }
    }

    /**
     * Clears out the collApInvoices collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return void
     * @see        addApInvoices()
     */
    public function clearApInvoices()
    {
        $this->collApInvoices = null; // important to set this to NULL since that means it is uninitialized
    }

    /**
     * Reset is the collApInvoices collection loaded partially.
     */
    public function resetPartialApInvoices($v = true)
    {
        $this->collApInvoicesPartial = $v;
    }

    /**
     * Initializes the collApInvoices collection.
     *
     * By default this just sets the collApInvoices collection to an empty array (like clearcollApInvoices());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param      boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initApInvoices($overrideExisting = true)
    {
        if (null !== $this->collApInvoices && !$overrideExisting) {
            return;
        }

        $collectionClassName = ApInvoiceTableMap::getTableMap()->getCollectionClassName();

        $this->collApInvoices = new $collectionClassName;
        $this->collApInvoices->setModel('\ApInvoice');
    }

    /**
     * Gets an array of ChildApInvoice objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildPurchaseOrder is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildApInvoice[] List of ChildApInvoice objects
     * @throws PropelException
     */
    public function getApInvoices(Criteria $criteria = null, ConnectionInterface $con = null)
    {
        $partial = $this->collApInvoicesPartial && !$this->isNew();
        if (null === $this->collApInvoices || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collApInvoices) {
                // return empty collection
                $this->initApInvoices();
            } else {
                $collApInvoices = ChildApInvoiceQuery::create(null, $criteria)
                    ->filterByPurchaseOrder($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collApInvoicesPartial && count($collApInvoices)) {
                        $this->initApInvoices(false);

                        foreach ($collApInvoices as $obj) {
                            if (false == $this->collApInvoices->contains($obj)) {
                                $this->collApInvoices->append($obj);
                            }
                        }

                        $this->collApInvoicesPartial = true;
                    }

                    return $collApInvoices;
                }

                if ($partial && $this->collApInvoices) {
                    foreach ($this->collApInvoices as $obj) {
                        if ($obj->isNew()) {
                            $collApInvoices[] = $obj;
                        }
                    }
                }

                $this->collApInvoices = $collApInvoices;
                $this->collApInvoicesPartial = false;
            }
        }

        return $this->collApInvoices;
    }

    /**
     * Sets a collection of ChildApInvoice objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param      Collection $apInvoices A Propel collection.
     * @param      ConnectionInterface $con Optional connection object
     * @return $this|ChildPurchaseOrder The current object (for fluent API support)
     */
    public function setApInvoices(Collection $apInvoices, ConnectionInterface $con = null)
    {
        /** @var ChildApInvoice[] $apInvoicesToDelete */
        $apInvoicesToDelete = $this->getApInvoices(new Criteria(), $con)->diff($apInvoices);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->apInvoicesScheduledForDeletion = clone $apInvoicesToDelete;

        foreach ($apInvoicesToDelete as $apInvoiceRemoved) {
            $apInvoiceRemoved->setPurchaseOrder(null);
        }

        $this->collApInvoices = null;
        foreach ($apInvoices as $apInvoice) {
            $this->addApInvoice($apInvoice);
        }

        $this->collApInvoices = $apInvoices;
        $this->collApInvoicesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ApInvoice objects.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct
     * @param      ConnectionInterface $con
     * @return int             Count of related ApInvoice objects.
     * @throws PropelException
     */
    public function countApInvoices(Criteria $criteria = null, $distinct = false, ConnectionInterface $con = null)
    {
        $partial = $this->collApInvoicesPartial && !$this->isNew();
        if (null === $this->collApInvoices || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collApInvoices) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getApInvoices());
            }

            $query = ChildApInvoiceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByPurchaseOrder($this)
                ->count($con);
        }

        return count($this->collApInvoices);
    }

    /**
     * Method called to associate a ChildApInvoice object to this object
     * through the ChildApInvoice foreign key attribute.
     *
     * @param  ChildApInvoice $l ChildApInvoice
     * @return $this|\PurchaseOrder The current object (for fluent API support)
     */
    public function addApInvoice(ChildApInvoice $l)
    {
        if ($this->collApInvoices === null) {
            $this->initApInvoices();
            $this->collApInvoicesPartial = true;
        }

        if (!$this->collApInvoices->contains($l)) {
            $this->doAddApInvoice($l);

            if ($this->apInvoicesScheduledForDeletion and $this->apInvoicesScheduledForDeletion->contains($l)) {
                $this->apInvoicesScheduledForDeletion->remove($this->apInvoicesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildApInvoice $apInvoice The ChildApInvoice object to add.
     */
    protected function doAddApInvoice(ChildApInvoice $apInvoice)
    {
        $this->collApInvoices[]= $apInvoice;
        $apInvoice->setPurchaseOrder($this);
    }

    /**
     * @param  ChildApInvoice $apInvoice The ChildApInvoice object to remove.
     * @return $this|ChildPurchaseOrder The current object (for fluent API support)
     */
    public function removeApInvoice(ChildApInvoice $apInvoice)
    {
        if ($this->getApInvoices()->contains($apInvoice)) {
            $pos = $this->collApInvoices->search($apInvoice);
            $this->collApInvoices->remove($pos);
            if (null === $this->apInvoicesScheduledForDeletion) {
                $this->apInvoicesScheduledForDeletion = clone $this->collApInvoices;
                $this->apInvoicesScheduledForDeletion->clear();
            }
            $this->apInvoicesScheduledForDeletion[]= clone $apInvoice;
            $apInvoice->setPurchaseOrder(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PurchaseOrder is new, it will return
     * an empty collection; or if this PurchaseOrder has previously
     * been saved, it will retrieve related ApInvoices from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PurchaseOrder.
     *
     * @param      Criteria $criteria optional Criteria object to narrow the query
     * @param      ConnectionInterface $con optional connection object
     * @param      string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildApInvoice[] List of ChildApInvoice objects
     */
    public function getApInvoicesJoinVendor(Criteria $criteria = null, ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildApInvoiceQuery::create(null, $criteria);
        $query->joinWith('Vendor', $joinBehavior);

        return $this->getApInvoices($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     */
    public function clear()
    {
        if (null !== $this->aVendor) {
            $this->aVendor->removePurchaseOrder($this);
        }
        if (null !== $this->aVendorShipfrom) {
            $this->aVendorShipfrom->removePurchaseOrder($this);
        }
        if (null !== $this->aShipvia) {
            $this->aShipvia->removePurchaseOrder($this);
        }
        $this->pohdnbr = null;
        $this->pohdstat = null;
        $this->pohdref = null;
        $this->apvevendid = null;
        $this->apfmshipid = null;
        $this->pohdtoname = null;
        $this->pohdtoadr1 = null;
        $this->pohdtoadr2 = null;
        $this->pohdtoadr3 = null;
        $this->pohdtoctry = null;
        $this->pohdtocity = null;
        $this->pohdtostat = null;
        $this->pohdtozipcode = null;
        $this->pohdptname = null;
        $this->pohdptadr1 = null;
        $this->pohdptadr2 = null;
        $this->pohdptadr3 = null;
        $this->pohdptctry = null;
        $this->pohdptcity = null;
        $this->pohdptstat = null;
        $this->pohdptzipcode = null;
        $this->pohdcont = null;
        $this->pohdordrdate = null;
        $this->aptmtermcode = null;
        $this->artbsviacode = null;
        $this->pohdoldfob = null;
        $this->aptbbuyrcode = null;
        $this->pohdcolppd = null;
        $this->pohdteleintl = null;
        $this->pohdtelenbr = null;
        $this->pohdteleext = null;
        $this->pohdfaxintl = null;
        $this->pohdfaxnbr = null;
        $this->pohdrcnt = null;
        $this->pohdtaxexem = null;
        $this->pohdexchctry = null;
        $this->pohdexchrate = null;
        $this->pohdexptdate = null;
        $this->pohdcancdate = null;
        $this->pohdicnt = null;
        $this->pohdfob = null;
        $this->pohdpickqueue = null;
        $this->pohdpackedby = null;
        $this->pohdpackdate = null;
        $this->pohdpacktime = null;
        $this->pohdlandcost = null;
        $this->pohdedipodate = null;
        $this->pohdfuturebuy = null;
        $this->pohdemailaddr = null;
        $this->pohdshipdate = null;
        $this->pohdackdate = null;
        $this->pohdreleasenbr = null;
        $this->pohdreturnspo = null;
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
            if ($this->collApInvoices) {
                foreach ($this->collApInvoices as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collApInvoices = null;
        $this->aVendor = null;
        $this->aVendorShipfrom = null;
        $this->aShipvia = null;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PurchaseOrderTableMap::DEFAULT_STRING_FORMAT);
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
