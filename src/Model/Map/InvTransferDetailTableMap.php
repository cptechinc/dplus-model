<?php

namespace Map;

use \InvTransferDetail;
use \InvTransferDetailQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'inv_trans_det' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class InvTransferDetailTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = '.Map.InvTransferDetailTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'inv_trans_det';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'InvTransferDetail';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\InvTransferDetail';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'InvTransferDetail';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 26;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 26;

    /**
     * the column name for the InhdNbr field
     */
    public const COL_INHDNBR = 'inv_trans_det.InhdNbr';

    /**
     * the column name for the IndtLine field
     */
    public const COL_INDTLINE = 'inv_trans_det.IndtLine';

    /**
     * the column name for the InitItemNbr field
     */
    public const COL_INITITEMNBR = 'inv_trans_det.InitItemNbr';

    /**
     * the column name for the IndtQtyRqst field
     */
    public const COL_INDTQTYRQST = 'inv_trans_det.IndtQtyRqst';

    /**
     * the column name for the IndtQtyShip field
     */
    public const COL_INDTQTYSHIP = 'inv_trans_det.IndtQtyShip';

    /**
     * the column name for the IndtRqstDate field
     */
    public const COL_INDTRQSTDATE = 'inv_trans_det.IndtRqstDate';

    /**
     * the column name for the IndtShipDate field
     */
    public const COL_INDTSHIPDATE = 'inv_trans_det.IndtShipDate';

    /**
     * the column name for the IndtPickFlag field
     */
    public const COL_INDTPICKFLAG = 'inv_trans_det.IndtPickFlag';

    /**
     * the column name for the IndtBordFlag field
     */
    public const COL_INDTBORDFLAG = 'inv_trans_det.IndtBordFlag';

    /**
     * the column name for the IndtQtyPrev field
     */
    public const COL_INDTQTYPREV = 'inv_trans_det.IndtQtyPrev';

    /**
     * the column name for the IndtQtyRcvd field
     */
    public const COL_INDTQTYRCVD = 'inv_trans_det.IndtQtyRcvd';

    /**
     * the column name for the IndtToBeRcvd field
     */
    public const COL_INDTTOBERCVD = 'inv_trans_det.IndtToBeRcvd';

    /**
     * the column name for the IndtRcptDate field
     */
    public const COL_INDTRCPTDATE = 'inv_trans_det.IndtRcptDate';

    /**
     * the column name for the IndtSoNbr field
     */
    public const COL_INDTSONBR = 'inv_trans_det.IndtSoNbr';

    /**
     * the column name for the IndtKitFlag field
     */
    public const COL_INDTKITFLAG = 'inv_trans_det.IndtKitFlag';

    /**
     * the column name for the IndtUseItemNbr field
     */
    public const COL_INDTUSEITEMNBR = 'inv_trans_det.IndtUseItemNbr';

    /**
     * the column name for the IndtCustItemNbr field
     */
    public const COL_INDTCUSTITEMNBR = 'inv_trans_det.IndtCustItemNbr';

    /**
     * the column name for the IndtCntrQty field
     */
    public const COL_INDTCNTRQTY = 'inv_trans_det.IndtCntrQty';

    /**
     * the column name for the IndtCases field
     */
    public const COL_INDTCASES = 'inv_trans_det.IndtCases';

    /**
     * the column name for the IndtOrigRqstDate field
     */
    public const COL_INDTORIGRQSTDATE = 'inv_trans_det.IndtOrigRqstDate';

    /**
     * the column name for the IndtOrdrAs field
     */
    public const COL_INDTORDRAS = 'inv_trans_det.IndtOrdrAs';

    /**
     * the column name for the IndtFreshFrozen field
     */
    public const COL_INDTFRESHFROZEN = 'inv_trans_det.IndtFreshFrozen';

    /**
     * the column name for the IndtPrimBin field
     */
    public const COL_INDTPRIMBIN = 'inv_trans_det.IndtPrimBin';

    /**
     * the column name for the DateUpdtd field
     */
    public const COL_DATEUPDTD = 'inv_trans_det.DateUpdtd';

    /**
     * the column name for the TimeUpdtd field
     */
    public const COL_TIMEUPDTD = 'inv_trans_det.TimeUpdtd';

    /**
     * the column name for the dummy field
     */
    public const COL_DUMMY = 'inv_trans_det.dummy';

    /**
     * The default string format for model objects of the related table
     */
    public const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     *
     * @var array<string, mixed>
     */
    protected static $fieldNames = [
        self::TYPE_PHPNAME       => ['Inhdnbr', 'Indtline', 'Inititemnbr', 'Indtqtyrqst', 'Indtqtyship', 'Indtrqstdate', 'Indtshipdate', 'Indtpickflag', 'Indtbordflag', 'Indtqtyprev', 'Indtqtyrcvd', 'Indttobercvd', 'Indtrcptdate', 'Indtsonbr', 'Indtkitflag', 'Indtuseitemnbr', 'Indtcustitemnbr', 'Indtcntrqty', 'Indtcases', 'Indtorigrqstdate', 'Indtordras', 'Indtfreshfrozen', 'Indtprimbin', 'Dateupdtd', 'Timeupdtd', 'Dummy', ],
        self::TYPE_CAMELNAME     => ['inhdnbr', 'indtline', 'inititemnbr', 'indtqtyrqst', 'indtqtyship', 'indtrqstdate', 'indtshipdate', 'indtpickflag', 'indtbordflag', 'indtqtyprev', 'indtqtyrcvd', 'indttobercvd', 'indtrcptdate', 'indtsonbr', 'indtkitflag', 'indtuseitemnbr', 'indtcustitemnbr', 'indtcntrqty', 'indtcases', 'indtorigrqstdate', 'indtordras', 'indtfreshfrozen', 'indtprimbin', 'dateupdtd', 'timeupdtd', 'dummy', ],
        self::TYPE_COLNAME       => [InvTransferDetailTableMap::COL_INHDNBR, InvTransferDetailTableMap::COL_INDTLINE, InvTransferDetailTableMap::COL_INITITEMNBR, InvTransferDetailTableMap::COL_INDTQTYRQST, InvTransferDetailTableMap::COL_INDTQTYSHIP, InvTransferDetailTableMap::COL_INDTRQSTDATE, InvTransferDetailTableMap::COL_INDTSHIPDATE, InvTransferDetailTableMap::COL_INDTPICKFLAG, InvTransferDetailTableMap::COL_INDTBORDFLAG, InvTransferDetailTableMap::COL_INDTQTYPREV, InvTransferDetailTableMap::COL_INDTQTYRCVD, InvTransferDetailTableMap::COL_INDTTOBERCVD, InvTransferDetailTableMap::COL_INDTRCPTDATE, InvTransferDetailTableMap::COL_INDTSONBR, InvTransferDetailTableMap::COL_INDTKITFLAG, InvTransferDetailTableMap::COL_INDTUSEITEMNBR, InvTransferDetailTableMap::COL_INDTCUSTITEMNBR, InvTransferDetailTableMap::COL_INDTCNTRQTY, InvTransferDetailTableMap::COL_INDTCASES, InvTransferDetailTableMap::COL_INDTORIGRQSTDATE, InvTransferDetailTableMap::COL_INDTORDRAS, InvTransferDetailTableMap::COL_INDTFRESHFROZEN, InvTransferDetailTableMap::COL_INDTPRIMBIN, InvTransferDetailTableMap::COL_DATEUPDTD, InvTransferDetailTableMap::COL_TIMEUPDTD, InvTransferDetailTableMap::COL_DUMMY, ],
        self::TYPE_FIELDNAME     => ['InhdNbr', 'IndtLine', 'InitItemNbr', 'IndtQtyRqst', 'IndtQtyShip', 'IndtRqstDate', 'IndtShipDate', 'IndtPickFlag', 'IndtBordFlag', 'IndtQtyPrev', 'IndtQtyRcvd', 'IndtToBeRcvd', 'IndtRcptDate', 'IndtSoNbr', 'IndtKitFlag', 'IndtUseItemNbr', 'IndtCustItemNbr', 'IndtCntrQty', 'IndtCases', 'IndtOrigRqstDate', 'IndtOrdrAs', 'IndtFreshFrozen', 'IndtPrimBin', 'DateUpdtd', 'TimeUpdtd', 'dummy', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, ]
    ];

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     *
     * @var array<string, mixed>
     */
    protected static $fieldKeys = [
        self::TYPE_PHPNAME       => ['Inhdnbr' => 0, 'Indtline' => 1, 'Inititemnbr' => 2, 'Indtqtyrqst' => 3, 'Indtqtyship' => 4, 'Indtrqstdate' => 5, 'Indtshipdate' => 6, 'Indtpickflag' => 7, 'Indtbordflag' => 8, 'Indtqtyprev' => 9, 'Indtqtyrcvd' => 10, 'Indttobercvd' => 11, 'Indtrcptdate' => 12, 'Indtsonbr' => 13, 'Indtkitflag' => 14, 'Indtuseitemnbr' => 15, 'Indtcustitemnbr' => 16, 'Indtcntrqty' => 17, 'Indtcases' => 18, 'Indtorigrqstdate' => 19, 'Indtordras' => 20, 'Indtfreshfrozen' => 21, 'Indtprimbin' => 22, 'Dateupdtd' => 23, 'Timeupdtd' => 24, 'Dummy' => 25, ],
        self::TYPE_CAMELNAME     => ['inhdnbr' => 0, 'indtline' => 1, 'inititemnbr' => 2, 'indtqtyrqst' => 3, 'indtqtyship' => 4, 'indtrqstdate' => 5, 'indtshipdate' => 6, 'indtpickflag' => 7, 'indtbordflag' => 8, 'indtqtyprev' => 9, 'indtqtyrcvd' => 10, 'indttobercvd' => 11, 'indtrcptdate' => 12, 'indtsonbr' => 13, 'indtkitflag' => 14, 'indtuseitemnbr' => 15, 'indtcustitemnbr' => 16, 'indtcntrqty' => 17, 'indtcases' => 18, 'indtorigrqstdate' => 19, 'indtordras' => 20, 'indtfreshfrozen' => 21, 'indtprimbin' => 22, 'dateupdtd' => 23, 'timeupdtd' => 24, 'dummy' => 25, ],
        self::TYPE_COLNAME       => [InvTransferDetailTableMap::COL_INHDNBR => 0, InvTransferDetailTableMap::COL_INDTLINE => 1, InvTransferDetailTableMap::COL_INITITEMNBR => 2, InvTransferDetailTableMap::COL_INDTQTYRQST => 3, InvTransferDetailTableMap::COL_INDTQTYSHIP => 4, InvTransferDetailTableMap::COL_INDTRQSTDATE => 5, InvTransferDetailTableMap::COL_INDTSHIPDATE => 6, InvTransferDetailTableMap::COL_INDTPICKFLAG => 7, InvTransferDetailTableMap::COL_INDTBORDFLAG => 8, InvTransferDetailTableMap::COL_INDTQTYPREV => 9, InvTransferDetailTableMap::COL_INDTQTYRCVD => 10, InvTransferDetailTableMap::COL_INDTTOBERCVD => 11, InvTransferDetailTableMap::COL_INDTRCPTDATE => 12, InvTransferDetailTableMap::COL_INDTSONBR => 13, InvTransferDetailTableMap::COL_INDTKITFLAG => 14, InvTransferDetailTableMap::COL_INDTUSEITEMNBR => 15, InvTransferDetailTableMap::COL_INDTCUSTITEMNBR => 16, InvTransferDetailTableMap::COL_INDTCNTRQTY => 17, InvTransferDetailTableMap::COL_INDTCASES => 18, InvTransferDetailTableMap::COL_INDTORIGRQSTDATE => 19, InvTransferDetailTableMap::COL_INDTORDRAS => 20, InvTransferDetailTableMap::COL_INDTFRESHFROZEN => 21, InvTransferDetailTableMap::COL_INDTPRIMBIN => 22, InvTransferDetailTableMap::COL_DATEUPDTD => 23, InvTransferDetailTableMap::COL_TIMEUPDTD => 24, InvTransferDetailTableMap::COL_DUMMY => 25, ],
        self::TYPE_FIELDNAME     => ['InhdNbr' => 0, 'IndtLine' => 1, 'InitItemNbr' => 2, 'IndtQtyRqst' => 3, 'IndtQtyShip' => 4, 'IndtRqstDate' => 5, 'IndtShipDate' => 6, 'IndtPickFlag' => 7, 'IndtBordFlag' => 8, 'IndtQtyPrev' => 9, 'IndtQtyRcvd' => 10, 'IndtToBeRcvd' => 11, 'IndtRcptDate' => 12, 'IndtSoNbr' => 13, 'IndtKitFlag' => 14, 'IndtUseItemNbr' => 15, 'IndtCustItemNbr' => 16, 'IndtCntrQty' => 17, 'IndtCases' => 18, 'IndtOrigRqstDate' => 19, 'IndtOrdrAs' => 20, 'IndtFreshFrozen' => 21, 'IndtPrimBin' => 22, 'DateUpdtd' => 23, 'TimeUpdtd' => 24, 'dummy' => 25, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Inhdnbr' => 'INHDNBR',
        'InvTransferDetail.Inhdnbr' => 'INHDNBR',
        'inhdnbr' => 'INHDNBR',
        'invTransferDetail.inhdnbr' => 'INHDNBR',
        'InvTransferDetailTableMap::COL_INHDNBR' => 'INHDNBR',
        'COL_INHDNBR' => 'INHDNBR',
        'InhdNbr' => 'INHDNBR',
        'inv_trans_det.InhdNbr' => 'INHDNBR',
        'Indtline' => 'INDTLINE',
        'InvTransferDetail.Indtline' => 'INDTLINE',
        'indtline' => 'INDTLINE',
        'invTransferDetail.indtline' => 'INDTLINE',
        'InvTransferDetailTableMap::COL_INDTLINE' => 'INDTLINE',
        'COL_INDTLINE' => 'INDTLINE',
        'IndtLine' => 'INDTLINE',
        'inv_trans_det.IndtLine' => 'INDTLINE',
        'Inititemnbr' => 'INITITEMNBR',
        'InvTransferDetail.Inititemnbr' => 'INITITEMNBR',
        'inititemnbr' => 'INITITEMNBR',
        'invTransferDetail.inititemnbr' => 'INITITEMNBR',
        'InvTransferDetailTableMap::COL_INITITEMNBR' => 'INITITEMNBR',
        'COL_INITITEMNBR' => 'INITITEMNBR',
        'InitItemNbr' => 'INITITEMNBR',
        'inv_trans_det.InitItemNbr' => 'INITITEMNBR',
        'Indtqtyrqst' => 'INDTQTYRQST',
        'InvTransferDetail.Indtqtyrqst' => 'INDTQTYRQST',
        'indtqtyrqst' => 'INDTQTYRQST',
        'invTransferDetail.indtqtyrqst' => 'INDTQTYRQST',
        'InvTransferDetailTableMap::COL_INDTQTYRQST' => 'INDTQTYRQST',
        'COL_INDTQTYRQST' => 'INDTQTYRQST',
        'IndtQtyRqst' => 'INDTQTYRQST',
        'inv_trans_det.IndtQtyRqst' => 'INDTQTYRQST',
        'Indtqtyship' => 'INDTQTYSHIP',
        'InvTransferDetail.Indtqtyship' => 'INDTQTYSHIP',
        'indtqtyship' => 'INDTQTYSHIP',
        'invTransferDetail.indtqtyship' => 'INDTQTYSHIP',
        'InvTransferDetailTableMap::COL_INDTQTYSHIP' => 'INDTQTYSHIP',
        'COL_INDTQTYSHIP' => 'INDTQTYSHIP',
        'IndtQtyShip' => 'INDTQTYSHIP',
        'inv_trans_det.IndtQtyShip' => 'INDTQTYSHIP',
        'Indtrqstdate' => 'INDTRQSTDATE',
        'InvTransferDetail.Indtrqstdate' => 'INDTRQSTDATE',
        'indtrqstdate' => 'INDTRQSTDATE',
        'invTransferDetail.indtrqstdate' => 'INDTRQSTDATE',
        'InvTransferDetailTableMap::COL_INDTRQSTDATE' => 'INDTRQSTDATE',
        'COL_INDTRQSTDATE' => 'INDTRQSTDATE',
        'IndtRqstDate' => 'INDTRQSTDATE',
        'inv_trans_det.IndtRqstDate' => 'INDTRQSTDATE',
        'Indtshipdate' => 'INDTSHIPDATE',
        'InvTransferDetail.Indtshipdate' => 'INDTSHIPDATE',
        'indtshipdate' => 'INDTSHIPDATE',
        'invTransferDetail.indtshipdate' => 'INDTSHIPDATE',
        'InvTransferDetailTableMap::COL_INDTSHIPDATE' => 'INDTSHIPDATE',
        'COL_INDTSHIPDATE' => 'INDTSHIPDATE',
        'IndtShipDate' => 'INDTSHIPDATE',
        'inv_trans_det.IndtShipDate' => 'INDTSHIPDATE',
        'Indtpickflag' => 'INDTPICKFLAG',
        'InvTransferDetail.Indtpickflag' => 'INDTPICKFLAG',
        'indtpickflag' => 'INDTPICKFLAG',
        'invTransferDetail.indtpickflag' => 'INDTPICKFLAG',
        'InvTransferDetailTableMap::COL_INDTPICKFLAG' => 'INDTPICKFLAG',
        'COL_INDTPICKFLAG' => 'INDTPICKFLAG',
        'IndtPickFlag' => 'INDTPICKFLAG',
        'inv_trans_det.IndtPickFlag' => 'INDTPICKFLAG',
        'Indtbordflag' => 'INDTBORDFLAG',
        'InvTransferDetail.Indtbordflag' => 'INDTBORDFLAG',
        'indtbordflag' => 'INDTBORDFLAG',
        'invTransferDetail.indtbordflag' => 'INDTBORDFLAG',
        'InvTransferDetailTableMap::COL_INDTBORDFLAG' => 'INDTBORDFLAG',
        'COL_INDTBORDFLAG' => 'INDTBORDFLAG',
        'IndtBordFlag' => 'INDTBORDFLAG',
        'inv_trans_det.IndtBordFlag' => 'INDTBORDFLAG',
        'Indtqtyprev' => 'INDTQTYPREV',
        'InvTransferDetail.Indtqtyprev' => 'INDTQTYPREV',
        'indtqtyprev' => 'INDTQTYPREV',
        'invTransferDetail.indtqtyprev' => 'INDTQTYPREV',
        'InvTransferDetailTableMap::COL_INDTQTYPREV' => 'INDTQTYPREV',
        'COL_INDTQTYPREV' => 'INDTQTYPREV',
        'IndtQtyPrev' => 'INDTQTYPREV',
        'inv_trans_det.IndtQtyPrev' => 'INDTQTYPREV',
        'Indtqtyrcvd' => 'INDTQTYRCVD',
        'InvTransferDetail.Indtqtyrcvd' => 'INDTQTYRCVD',
        'indtqtyrcvd' => 'INDTQTYRCVD',
        'invTransferDetail.indtqtyrcvd' => 'INDTQTYRCVD',
        'InvTransferDetailTableMap::COL_INDTQTYRCVD' => 'INDTQTYRCVD',
        'COL_INDTQTYRCVD' => 'INDTQTYRCVD',
        'IndtQtyRcvd' => 'INDTQTYRCVD',
        'inv_trans_det.IndtQtyRcvd' => 'INDTQTYRCVD',
        'Indttobercvd' => 'INDTTOBERCVD',
        'InvTransferDetail.Indttobercvd' => 'INDTTOBERCVD',
        'indttobercvd' => 'INDTTOBERCVD',
        'invTransferDetail.indttobercvd' => 'INDTTOBERCVD',
        'InvTransferDetailTableMap::COL_INDTTOBERCVD' => 'INDTTOBERCVD',
        'COL_INDTTOBERCVD' => 'INDTTOBERCVD',
        'IndtToBeRcvd' => 'INDTTOBERCVD',
        'inv_trans_det.IndtToBeRcvd' => 'INDTTOBERCVD',
        'Indtrcptdate' => 'INDTRCPTDATE',
        'InvTransferDetail.Indtrcptdate' => 'INDTRCPTDATE',
        'indtrcptdate' => 'INDTRCPTDATE',
        'invTransferDetail.indtrcptdate' => 'INDTRCPTDATE',
        'InvTransferDetailTableMap::COL_INDTRCPTDATE' => 'INDTRCPTDATE',
        'COL_INDTRCPTDATE' => 'INDTRCPTDATE',
        'IndtRcptDate' => 'INDTRCPTDATE',
        'inv_trans_det.IndtRcptDate' => 'INDTRCPTDATE',
        'Indtsonbr' => 'INDTSONBR',
        'InvTransferDetail.Indtsonbr' => 'INDTSONBR',
        'indtsonbr' => 'INDTSONBR',
        'invTransferDetail.indtsonbr' => 'INDTSONBR',
        'InvTransferDetailTableMap::COL_INDTSONBR' => 'INDTSONBR',
        'COL_INDTSONBR' => 'INDTSONBR',
        'IndtSoNbr' => 'INDTSONBR',
        'inv_trans_det.IndtSoNbr' => 'INDTSONBR',
        'Indtkitflag' => 'INDTKITFLAG',
        'InvTransferDetail.Indtkitflag' => 'INDTKITFLAG',
        'indtkitflag' => 'INDTKITFLAG',
        'invTransferDetail.indtkitflag' => 'INDTKITFLAG',
        'InvTransferDetailTableMap::COL_INDTKITFLAG' => 'INDTKITFLAG',
        'COL_INDTKITFLAG' => 'INDTKITFLAG',
        'IndtKitFlag' => 'INDTKITFLAG',
        'inv_trans_det.IndtKitFlag' => 'INDTKITFLAG',
        'Indtuseitemnbr' => 'INDTUSEITEMNBR',
        'InvTransferDetail.Indtuseitemnbr' => 'INDTUSEITEMNBR',
        'indtuseitemnbr' => 'INDTUSEITEMNBR',
        'invTransferDetail.indtuseitemnbr' => 'INDTUSEITEMNBR',
        'InvTransferDetailTableMap::COL_INDTUSEITEMNBR' => 'INDTUSEITEMNBR',
        'COL_INDTUSEITEMNBR' => 'INDTUSEITEMNBR',
        'IndtUseItemNbr' => 'INDTUSEITEMNBR',
        'inv_trans_det.IndtUseItemNbr' => 'INDTUSEITEMNBR',
        'Indtcustitemnbr' => 'INDTCUSTITEMNBR',
        'InvTransferDetail.Indtcustitemnbr' => 'INDTCUSTITEMNBR',
        'indtcustitemnbr' => 'INDTCUSTITEMNBR',
        'invTransferDetail.indtcustitemnbr' => 'INDTCUSTITEMNBR',
        'InvTransferDetailTableMap::COL_INDTCUSTITEMNBR' => 'INDTCUSTITEMNBR',
        'COL_INDTCUSTITEMNBR' => 'INDTCUSTITEMNBR',
        'IndtCustItemNbr' => 'INDTCUSTITEMNBR',
        'inv_trans_det.IndtCustItemNbr' => 'INDTCUSTITEMNBR',
        'Indtcntrqty' => 'INDTCNTRQTY',
        'InvTransferDetail.Indtcntrqty' => 'INDTCNTRQTY',
        'indtcntrqty' => 'INDTCNTRQTY',
        'invTransferDetail.indtcntrqty' => 'INDTCNTRQTY',
        'InvTransferDetailTableMap::COL_INDTCNTRQTY' => 'INDTCNTRQTY',
        'COL_INDTCNTRQTY' => 'INDTCNTRQTY',
        'IndtCntrQty' => 'INDTCNTRQTY',
        'inv_trans_det.IndtCntrQty' => 'INDTCNTRQTY',
        'Indtcases' => 'INDTCASES',
        'InvTransferDetail.Indtcases' => 'INDTCASES',
        'indtcases' => 'INDTCASES',
        'invTransferDetail.indtcases' => 'INDTCASES',
        'InvTransferDetailTableMap::COL_INDTCASES' => 'INDTCASES',
        'COL_INDTCASES' => 'INDTCASES',
        'IndtCases' => 'INDTCASES',
        'inv_trans_det.IndtCases' => 'INDTCASES',
        'Indtorigrqstdate' => 'INDTORIGRQSTDATE',
        'InvTransferDetail.Indtorigrqstdate' => 'INDTORIGRQSTDATE',
        'indtorigrqstdate' => 'INDTORIGRQSTDATE',
        'invTransferDetail.indtorigrqstdate' => 'INDTORIGRQSTDATE',
        'InvTransferDetailTableMap::COL_INDTORIGRQSTDATE' => 'INDTORIGRQSTDATE',
        'COL_INDTORIGRQSTDATE' => 'INDTORIGRQSTDATE',
        'IndtOrigRqstDate' => 'INDTORIGRQSTDATE',
        'inv_trans_det.IndtOrigRqstDate' => 'INDTORIGRQSTDATE',
        'Indtordras' => 'INDTORDRAS',
        'InvTransferDetail.Indtordras' => 'INDTORDRAS',
        'indtordras' => 'INDTORDRAS',
        'invTransferDetail.indtordras' => 'INDTORDRAS',
        'InvTransferDetailTableMap::COL_INDTORDRAS' => 'INDTORDRAS',
        'COL_INDTORDRAS' => 'INDTORDRAS',
        'IndtOrdrAs' => 'INDTORDRAS',
        'inv_trans_det.IndtOrdrAs' => 'INDTORDRAS',
        'Indtfreshfrozen' => 'INDTFRESHFROZEN',
        'InvTransferDetail.Indtfreshfrozen' => 'INDTFRESHFROZEN',
        'indtfreshfrozen' => 'INDTFRESHFROZEN',
        'invTransferDetail.indtfreshfrozen' => 'INDTFRESHFROZEN',
        'InvTransferDetailTableMap::COL_INDTFRESHFROZEN' => 'INDTFRESHFROZEN',
        'COL_INDTFRESHFROZEN' => 'INDTFRESHFROZEN',
        'IndtFreshFrozen' => 'INDTFRESHFROZEN',
        'inv_trans_det.IndtFreshFrozen' => 'INDTFRESHFROZEN',
        'Indtprimbin' => 'INDTPRIMBIN',
        'InvTransferDetail.Indtprimbin' => 'INDTPRIMBIN',
        'indtprimbin' => 'INDTPRIMBIN',
        'invTransferDetail.indtprimbin' => 'INDTPRIMBIN',
        'InvTransferDetailTableMap::COL_INDTPRIMBIN' => 'INDTPRIMBIN',
        'COL_INDTPRIMBIN' => 'INDTPRIMBIN',
        'IndtPrimBin' => 'INDTPRIMBIN',
        'inv_trans_det.IndtPrimBin' => 'INDTPRIMBIN',
        'Dateupdtd' => 'DATEUPDTD',
        'InvTransferDetail.Dateupdtd' => 'DATEUPDTD',
        'dateupdtd' => 'DATEUPDTD',
        'invTransferDetail.dateupdtd' => 'DATEUPDTD',
        'InvTransferDetailTableMap::COL_DATEUPDTD' => 'DATEUPDTD',
        'COL_DATEUPDTD' => 'DATEUPDTD',
        'DateUpdtd' => 'DATEUPDTD',
        'inv_trans_det.DateUpdtd' => 'DATEUPDTD',
        'Timeupdtd' => 'TIMEUPDTD',
        'InvTransferDetail.Timeupdtd' => 'TIMEUPDTD',
        'timeupdtd' => 'TIMEUPDTD',
        'invTransferDetail.timeupdtd' => 'TIMEUPDTD',
        'InvTransferDetailTableMap::COL_TIMEUPDTD' => 'TIMEUPDTD',
        'COL_TIMEUPDTD' => 'TIMEUPDTD',
        'TimeUpdtd' => 'TIMEUPDTD',
        'inv_trans_det.TimeUpdtd' => 'TIMEUPDTD',
        'Dummy' => 'DUMMY',
        'InvTransferDetail.Dummy' => 'DUMMY',
        'dummy' => 'DUMMY',
        'invTransferDetail.dummy' => 'DUMMY',
        'InvTransferDetailTableMap::COL_DUMMY' => 'DUMMY',
        'COL_DUMMY' => 'DUMMY',
        'inv_trans_det.dummy' => 'DUMMY',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function initialize(): void
    {
        // attributes
        $this->setName('inv_trans_det');
        $this->setPhpName('InvTransferDetail');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\InvTransferDetail');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('InhdNbr', 'Inhdnbr', 'INTEGER' , 'inv_trans_head', 'InhdNbr', true, 8, 0);
        $this->addPrimaryKey('IndtLine', 'Indtline', 'INTEGER', true, 5, 0);
        $this->addForeignKey('InitItemNbr', 'Inititemnbr', 'VARCHAR', 'inv_item_mast', 'InitItemNbr', true, 30, '');
        $this->addColumn('IndtQtyRqst', 'Indtqtyrqst', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('IndtQtyShip', 'Indtqtyship', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('IndtRqstDate', 'Indtrqstdate', 'CHAR', true, 8, '');
        $this->addColumn('IndtShipDate', 'Indtshipdate', 'CHAR', true, 8, '');
        $this->addColumn('IndtPickFlag', 'Indtpickflag', 'CHAR', true, null, 'N');
        $this->addColumn('IndtBordFlag', 'Indtbordflag', 'CHAR', true, null, 'N');
        $this->addColumn('IndtQtyPrev', 'Indtqtyprev', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('IndtQtyRcvd', 'Indtqtyrcvd', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('IndtToBeRcvd', 'Indttobercvd', 'DECIMAL', true, 20, 0.0000000);
        $this->addColumn('IndtRcptDate', 'Indtrcptdate', 'CHAR', true, 8, '');
        $this->addColumn('IndtSoNbr', 'Indtsonbr', 'INTEGER', true, 8, 0);
        $this->addColumn('IndtKitFlag', 'Indtkitflag', 'CHAR', true, null, 'N');
        $this->addColumn('IndtUseItemNbr', 'Indtuseitemnbr', 'VARCHAR', true, 30, '');
        $this->addColumn('IndtCustItemNbr', 'Indtcustitemnbr', 'VARCHAR', true, 30, '');
        $this->addColumn('IndtCntrQty', 'Indtcntrqty', 'DECIMAL', true, 20, 0);
        $this->addColumn('IndtCases', 'Indtcases', 'DECIMAL', true, 20, 0.00);
        $this->addColumn('IndtOrigRqstDate', 'Indtorigrqstdate', 'CHAR', true, 8, '');
        $this->addColumn('IndtOrdrAs', 'Indtordras', 'CHAR', true, null, '');
        $this->addColumn('IndtFreshFrozen', 'Indtfreshfrozen', 'CHAR', true, null, '');
        $this->addColumn('IndtPrimBin', 'Indtprimbin', 'VARCHAR', true, 8, '');
        $this->addColumn('DateUpdtd', 'Dateupdtd', 'CHAR', true, 8, '');
        $this->addColumn('TimeUpdtd', 'Timeupdtd', 'CHAR', true, 8, '');
        $this->addColumn('dummy', 'Dummy', 'CHAR', true, null, 'P');
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('InvTransferOrder', '\\InvTransferOrder', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InhdNbr',
    1 => ':InhdNbr',
  ),
), null, null, null, false);
        $this->addRelation('ItemMasterItem', '\\ItemMasterItem', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':InitItemNbr',
    1 => ':InitItemNbr',
  ),
), null, null, null, false);
        $this->addRelation('InvTransferLotserial', '\\InvTransferLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InhdNbr',
    1 => ':InhdNbr',
  ),
  1 =>
  array (
    0 => ':IndtLine',
    1 => ':IndtLine',
  ),
), null, null, 'InvTransferLotserials', false);
        $this->addRelation('InvTransferPreAllocatedLotserial', '\\InvTransferPreAllocatedLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InhdNbr',
    1 => ':InhdNbr',
  ),
  1 =>
  array (
    0 => ':IndtLine',
    1 => ':IndtLine',
  ),
), null, null, 'InvTransferPreAllocatedLotserials', false);
        $this->addRelation('InvTransferPickedLotserial', '\\InvTransferPickedLotserial', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':InhdNbr',
    1 => ':InhdNbr',
  ),
  1 =>
  array (
    0 => ':IndtLine',
    1 => ':IndtLine',
  ),
), null, null, 'InvTransferPickedLotserials', false);
    }

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \InvTransferDetail $obj A \InvTransferDetail object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(InvTransferDetail $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getInhdnbr() || is_scalar($obj->getInhdnbr()) || is_callable([$obj->getInhdnbr(), '__toString']) ? (string) $obj->getInhdnbr() : $obj->getInhdnbr()), (null === $obj->getIndtline() || is_scalar($obj->getIndtline()) || is_callable([$obj->getIndtline(), '__toString']) ? (string) $obj->getIndtline() : $obj->getIndtline())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \InvTransferDetail object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \InvTransferDetail) {
                $key = serialize([(null === $value->getInhdnbr() || is_scalar($value->getInhdnbr()) || is_callable([$value->getInhdnbr(), '__toString']) ? (string) $value->getInhdnbr() : $value->getInhdnbr()), (null === $value->getIndtline() || is_scalar($value->getIndtline()) || is_callable([$value->getIndtline(), '__toString']) ? (string) $value->getIndtline() : $value->getIndtline())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \InvTransferDetail object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string|null The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): ?string
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)])]);
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM)
    {
            $pks = [];

        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Inhdnbr', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('Indtline', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param bool $withPrefix Whether to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass(bool $withPrefix = true): string
    {
        return $withPrefix ? InvTransferDetailTableMap::CLASS_DEFAULT : InvTransferDetailTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array $row Row returned by DataFetcher->fetch().
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array (InvTransferDetail object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = InvTransferDetailTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = InvTransferDetailTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + InvTransferDetailTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InvTransferDetailTableMap::OM_CLASS;
            /** @var InvTransferDetail $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            InvTransferDetailTableMap::addInstanceToPool($obj, $key);
        }

        return [$obj, $col];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array<object>
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher): array
    {
        $results = [];

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = InvTransferDetailTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = InvTransferDetailTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var InvTransferDetail $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InvTransferDetailTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria Object containing the columns to add.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function addSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INHDNBR);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTLINE);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INITITEMNBR);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTQTYRQST);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTQTYSHIP);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTRQSTDATE);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTSHIPDATE);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTPICKFLAG);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTBORDFLAG);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTQTYPREV);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTQTYRCVD);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTTOBERCVD);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTRCPTDATE);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTSONBR);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTKITFLAG);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTUSEITEMNBR);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTCUSTITEMNBR);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTCNTRQTY);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTCASES);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTORIGRQSTDATE);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTORDRAS);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTFRESHFROZEN);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_INDTPRIMBIN);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_DATEUPDTD);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_TIMEUPDTD);
            $criteria->addSelectColumn(InvTransferDetailTableMap::COL_DUMMY);
        } else {
            $criteria->addSelectColumn($alias . '.InhdNbr');
            $criteria->addSelectColumn($alias . '.IndtLine');
            $criteria->addSelectColumn($alias . '.InitItemNbr');
            $criteria->addSelectColumn($alias . '.IndtQtyRqst');
            $criteria->addSelectColumn($alias . '.IndtQtyShip');
            $criteria->addSelectColumn($alias . '.IndtRqstDate');
            $criteria->addSelectColumn($alias . '.IndtShipDate');
            $criteria->addSelectColumn($alias . '.IndtPickFlag');
            $criteria->addSelectColumn($alias . '.IndtBordFlag');
            $criteria->addSelectColumn($alias . '.IndtQtyPrev');
            $criteria->addSelectColumn($alias . '.IndtQtyRcvd');
            $criteria->addSelectColumn($alias . '.IndtToBeRcvd');
            $criteria->addSelectColumn($alias . '.IndtRcptDate');
            $criteria->addSelectColumn($alias . '.IndtSoNbr');
            $criteria->addSelectColumn($alias . '.IndtKitFlag');
            $criteria->addSelectColumn($alias . '.IndtUseItemNbr');
            $criteria->addSelectColumn($alias . '.IndtCustItemNbr');
            $criteria->addSelectColumn($alias . '.IndtCntrQty');
            $criteria->addSelectColumn($alias . '.IndtCases');
            $criteria->addSelectColumn($alias . '.IndtOrigRqstDate');
            $criteria->addSelectColumn($alias . '.IndtOrdrAs');
            $criteria->addSelectColumn($alias . '.IndtFreshFrozen');
            $criteria->addSelectColumn($alias . '.IndtPrimBin');
            $criteria->addSelectColumn($alias . '.DateUpdtd');
            $criteria->addSelectColumn($alias . '.TimeUpdtd');
            $criteria->addSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria Object containing the columns to remove.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function removeSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INHDNBR);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTLINE);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INITITEMNBR);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTQTYRQST);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTQTYSHIP);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTRQSTDATE);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTSHIPDATE);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTPICKFLAG);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTBORDFLAG);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTQTYPREV);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTQTYRCVD);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTTOBERCVD);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTRCPTDATE);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTSONBR);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTKITFLAG);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTUSEITEMNBR);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTCUSTITEMNBR);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTCNTRQTY);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTCASES);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTORIGRQSTDATE);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTORDRAS);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTFRESHFROZEN);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_INDTPRIMBIN);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_DATEUPDTD);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_TIMEUPDTD);
            $criteria->removeSelectColumn(InvTransferDetailTableMap::COL_DUMMY);
        } else {
            $criteria->removeSelectColumn($alias . '.InhdNbr');
            $criteria->removeSelectColumn($alias . '.IndtLine');
            $criteria->removeSelectColumn($alias . '.InitItemNbr');
            $criteria->removeSelectColumn($alias . '.IndtQtyRqst');
            $criteria->removeSelectColumn($alias . '.IndtQtyShip');
            $criteria->removeSelectColumn($alias . '.IndtRqstDate');
            $criteria->removeSelectColumn($alias . '.IndtShipDate');
            $criteria->removeSelectColumn($alias . '.IndtPickFlag');
            $criteria->removeSelectColumn($alias . '.IndtBordFlag');
            $criteria->removeSelectColumn($alias . '.IndtQtyPrev');
            $criteria->removeSelectColumn($alias . '.IndtQtyRcvd');
            $criteria->removeSelectColumn($alias . '.IndtToBeRcvd');
            $criteria->removeSelectColumn($alias . '.IndtRcptDate');
            $criteria->removeSelectColumn($alias . '.IndtSoNbr');
            $criteria->removeSelectColumn($alias . '.IndtKitFlag');
            $criteria->removeSelectColumn($alias . '.IndtUseItemNbr');
            $criteria->removeSelectColumn($alias . '.IndtCustItemNbr');
            $criteria->removeSelectColumn($alias . '.IndtCntrQty');
            $criteria->removeSelectColumn($alias . '.IndtCases');
            $criteria->removeSelectColumn($alias . '.IndtOrigRqstDate');
            $criteria->removeSelectColumn($alias . '.IndtOrdrAs');
            $criteria->removeSelectColumn($alias . '.IndtFreshFrozen');
            $criteria->removeSelectColumn($alias . '.IndtPrimBin');
            $criteria->removeSelectColumn($alias . '.DateUpdtd');
            $criteria->removeSelectColumn($alias . '.TimeUpdtd');
            $criteria->removeSelectColumn($alias . '.dummy');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap(): TableMap
    {
        return Propel::getServiceContainer()->getDatabaseMap(InvTransferDetailTableMap::DATABASE_NAME)->getTable(InvTransferDetailTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a InvTransferDetail or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or InvTransferDetail object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ?ConnectionInterface $con = null): int
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferDetailTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \InvTransferDetail) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InvTransferDetailTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(InvTransferDetailTableMap::COL_INHDNBR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(InvTransferDetailTableMap::COL_INDTLINE, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = InvTransferDetailQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            InvTransferDetailTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                InvTransferDetailTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the inv_trans_det table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return InvTransferDetailQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a InvTransferDetail or Criteria object.
     *
     * @param mixed $criteria Criteria or InvTransferDetail object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvTransferDetailTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from InvTransferDetail object
        }


        // Set the correct dbName
        $query = InvTransferDetailQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
