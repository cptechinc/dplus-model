<?php

namespace Base;

use \InvWhseItemBin as ChildInvWhseItemBin;
use \InvWhseItemBinQuery as ChildInvWhseItemBinQuery;
use \Exception;
use \PDO;
use Map\InvWhseItemBinTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `inv_bin_area` table.
 *
 * @method     ChildInvWhseItemBinQuery orderByInititemnbr($order = Criteria::ASC) Order by the InitItemNbr column
 * @method     ChildInvWhseItemBinQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildInvWhseItemBinQuery orderByBinabin1($order = Criteria::ASC) Order by the BinaBin1 column
 * @method     ChildInvWhseItemBinQuery orderByBinamin1($order = Criteria::ASC) Order by the BinaMin1 column
 * @method     ChildInvWhseItemBinQuery orderByBinamax1($order = Criteria::ASC) Order by the BinaMax1 column
 * @method     ChildInvWhseItemBinQuery orderByBinabin2($order = Criteria::ASC) Order by the BinaBin2 column
 * @method     ChildInvWhseItemBinQuery orderByBinamin2($order = Criteria::ASC) Order by the BinaMin2 column
 * @method     ChildInvWhseItemBinQuery orderByBinamax2($order = Criteria::ASC) Order by the BinaMax2 column
 * @method     ChildInvWhseItemBinQuery orderByBinabin3($order = Criteria::ASC) Order by the BinaBin3 column
 * @method     ChildInvWhseItemBinQuery orderByBinamin3($order = Criteria::ASC) Order by the BinaMin3 column
 * @method     ChildInvWhseItemBinQuery orderByBinamax3($order = Criteria::ASC) Order by the BinaMax3 column
 * @method     ChildInvWhseItemBinQuery orderByBinabin4($order = Criteria::ASC) Order by the BinaBin4 column
 * @method     ChildInvWhseItemBinQuery orderByBinamin4($order = Criteria::ASC) Order by the BinaMin4 column
 * @method     ChildInvWhseItemBinQuery orderByBinamax4($order = Criteria::ASC) Order by the BinaMax4 column
 * @method     ChildInvWhseItemBinQuery orderByBinabin5($order = Criteria::ASC) Order by the BinaBin5 column
 * @method     ChildInvWhseItemBinQuery orderByBinamin5($order = Criteria::ASC) Order by the BinaMin5 column
 * @method     ChildInvWhseItemBinQuery orderByBinamax5($order = Criteria::ASC) Order by the BinaMax5 column
 * @method     ChildInvWhseItemBinQuery orderByBinabin6($order = Criteria::ASC) Order by the BinaBin6 column
 * @method     ChildInvWhseItemBinQuery orderByBinamin6($order = Criteria::ASC) Order by the BinaMin6 column
 * @method     ChildInvWhseItemBinQuery orderByBinamax6($order = Criteria::ASC) Order by the BinaMax6 column
 * @method     ChildInvWhseItemBinQuery orderByBinabin7($order = Criteria::ASC) Order by the BinaBin7 column
 * @method     ChildInvWhseItemBinQuery orderByBinamin7($order = Criteria::ASC) Order by the BinaMin7 column
 * @method     ChildInvWhseItemBinQuery orderByBinamax7($order = Criteria::ASC) Order by the BinaMax7 column
 * @method     ChildInvWhseItemBinQuery orderByBinabin8($order = Criteria::ASC) Order by the BinaBin8 column
 * @method     ChildInvWhseItemBinQuery orderByBinamin8($order = Criteria::ASC) Order by the BinaMin8 column
 * @method     ChildInvWhseItemBinQuery orderByBinamax8($order = Criteria::ASC) Order by the BinaMax8 column
 * @method     ChildInvWhseItemBinQuery orderByBinabin9($order = Criteria::ASC) Order by the BinaBin9 column
 * @method     ChildInvWhseItemBinQuery orderByBinamin9($order = Criteria::ASC) Order by the BinaMin9 column
 * @method     ChildInvWhseItemBinQuery orderByBinamax9($order = Criteria::ASC) Order by the BinaMax9 column
 * @method     ChildInvWhseItemBinQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildInvWhseItemBinQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildInvWhseItemBinQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildInvWhseItemBinQuery groupByInititemnbr() Group by the InitItemNbr column
 * @method     ChildInvWhseItemBinQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildInvWhseItemBinQuery groupByBinabin1() Group by the BinaBin1 column
 * @method     ChildInvWhseItemBinQuery groupByBinamin1() Group by the BinaMin1 column
 * @method     ChildInvWhseItemBinQuery groupByBinamax1() Group by the BinaMax1 column
 * @method     ChildInvWhseItemBinQuery groupByBinabin2() Group by the BinaBin2 column
 * @method     ChildInvWhseItemBinQuery groupByBinamin2() Group by the BinaMin2 column
 * @method     ChildInvWhseItemBinQuery groupByBinamax2() Group by the BinaMax2 column
 * @method     ChildInvWhseItemBinQuery groupByBinabin3() Group by the BinaBin3 column
 * @method     ChildInvWhseItemBinQuery groupByBinamin3() Group by the BinaMin3 column
 * @method     ChildInvWhseItemBinQuery groupByBinamax3() Group by the BinaMax3 column
 * @method     ChildInvWhseItemBinQuery groupByBinabin4() Group by the BinaBin4 column
 * @method     ChildInvWhseItemBinQuery groupByBinamin4() Group by the BinaMin4 column
 * @method     ChildInvWhseItemBinQuery groupByBinamax4() Group by the BinaMax4 column
 * @method     ChildInvWhseItemBinQuery groupByBinabin5() Group by the BinaBin5 column
 * @method     ChildInvWhseItemBinQuery groupByBinamin5() Group by the BinaMin5 column
 * @method     ChildInvWhseItemBinQuery groupByBinamax5() Group by the BinaMax5 column
 * @method     ChildInvWhseItemBinQuery groupByBinabin6() Group by the BinaBin6 column
 * @method     ChildInvWhseItemBinQuery groupByBinamin6() Group by the BinaMin6 column
 * @method     ChildInvWhseItemBinQuery groupByBinamax6() Group by the BinaMax6 column
 * @method     ChildInvWhseItemBinQuery groupByBinabin7() Group by the BinaBin7 column
 * @method     ChildInvWhseItemBinQuery groupByBinamin7() Group by the BinaMin7 column
 * @method     ChildInvWhseItemBinQuery groupByBinamax7() Group by the BinaMax7 column
 * @method     ChildInvWhseItemBinQuery groupByBinabin8() Group by the BinaBin8 column
 * @method     ChildInvWhseItemBinQuery groupByBinamin8() Group by the BinaMin8 column
 * @method     ChildInvWhseItemBinQuery groupByBinamax8() Group by the BinaMax8 column
 * @method     ChildInvWhseItemBinQuery groupByBinabin9() Group by the BinaBin9 column
 * @method     ChildInvWhseItemBinQuery groupByBinamin9() Group by the BinaMin9 column
 * @method     ChildInvWhseItemBinQuery groupByBinamax9() Group by the BinaMax9 column
 * @method     ChildInvWhseItemBinQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildInvWhseItemBinQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildInvWhseItemBinQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildInvWhseItemBinQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildInvWhseItemBinQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildInvWhseItemBinQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildInvWhseItemBinQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildInvWhseItemBinQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildInvWhseItemBinQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildInvWhseItemBinQuery leftJoinItemMasterItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvWhseItemBinQuery rightJoinItemMasterItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemMasterItem relation
 * @method     ChildInvWhseItemBinQuery innerJoinItemMasterItem($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemMasterItem relation
 *
 * @method     ChildInvWhseItemBinQuery joinWithItemMasterItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvWhseItemBinQuery leftJoinWithItemMasterItem() Adds a LEFT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvWhseItemBinQuery rightJoinWithItemMasterItem() Adds a RIGHT JOIN clause and with to the query using the ItemMasterItem relation
 * @method     ChildInvWhseItemBinQuery innerJoinWithItemMasterItem() Adds a INNER JOIN clause and with to the query using the ItemMasterItem relation
 *
 * @method     ChildInvWhseItemBinQuery leftJoinWarehouse($relationAlias = null) Adds a LEFT JOIN clause to the query using the Warehouse relation
 * @method     ChildInvWhseItemBinQuery rightJoinWarehouse($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Warehouse relation
 * @method     ChildInvWhseItemBinQuery innerJoinWarehouse($relationAlias = null) Adds a INNER JOIN clause to the query using the Warehouse relation
 *
 * @method     ChildInvWhseItemBinQuery joinWithWarehouse($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Warehouse relation
 *
 * @method     ChildInvWhseItemBinQuery leftJoinWithWarehouse() Adds a LEFT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildInvWhseItemBinQuery rightJoinWithWarehouse() Adds a RIGHT JOIN clause and with to the query using the Warehouse relation
 * @method     ChildInvWhseItemBinQuery innerJoinWithWarehouse() Adds a INNER JOIN clause and with to the query using the Warehouse relation
 *
 * @method     ChildInvWhseItemBinQuery leftJoinWarehouseInventory($relationAlias = null) Adds a LEFT JOIN clause to the query using the WarehouseInventory relation
 * @method     ChildInvWhseItemBinQuery rightJoinWarehouseInventory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the WarehouseInventory relation
 * @method     ChildInvWhseItemBinQuery innerJoinWarehouseInventory($relationAlias = null) Adds a INNER JOIN clause to the query using the WarehouseInventory relation
 *
 * @method     ChildInvWhseItemBinQuery joinWithWarehouseInventory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the WarehouseInventory relation
 *
 * @method     ChildInvWhseItemBinQuery leftJoinWithWarehouseInventory() Adds a LEFT JOIN clause and with to the query using the WarehouseInventory relation
 * @method     ChildInvWhseItemBinQuery rightJoinWithWarehouseInventory() Adds a RIGHT JOIN clause and with to the query using the WarehouseInventory relation
 * @method     ChildInvWhseItemBinQuery innerJoinWithWarehouseInventory() Adds a INNER JOIN clause and with to the query using the WarehouseInventory relation
 *
 * @method     \ItemMasterItemQuery|\WarehouseQuery|\WarehouseInventoryQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildInvWhseItemBin|null findOne(?ConnectionInterface $con = null) Return the first ChildInvWhseItemBin matching the query
 * @method     ChildInvWhseItemBin findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildInvWhseItemBin matching the query, or a new ChildInvWhseItemBin object populated from the query conditions when no match is found
 *
 * @method     ChildInvWhseItemBin|null findOneByInititemnbr(string $InitItemNbr) Return the first ChildInvWhseItemBin filtered by the InitItemNbr column
 * @method     ChildInvWhseItemBin|null findOneByIntbwhse(string $IntbWhse) Return the first ChildInvWhseItemBin filtered by the IntbWhse column
 * @method     ChildInvWhseItemBin|null findOneByBinabin1(string $BinaBin1) Return the first ChildInvWhseItemBin filtered by the BinaBin1 column
 * @method     ChildInvWhseItemBin|null findOneByBinamin1(int $BinaMin1) Return the first ChildInvWhseItemBin filtered by the BinaMin1 column
 * @method     ChildInvWhseItemBin|null findOneByBinamax1(int $BinaMax1) Return the first ChildInvWhseItemBin filtered by the BinaMax1 column
 * @method     ChildInvWhseItemBin|null findOneByBinabin2(string $BinaBin2) Return the first ChildInvWhseItemBin filtered by the BinaBin2 column
 * @method     ChildInvWhseItemBin|null findOneByBinamin2(int $BinaMin2) Return the first ChildInvWhseItemBin filtered by the BinaMin2 column
 * @method     ChildInvWhseItemBin|null findOneByBinamax2(int $BinaMax2) Return the first ChildInvWhseItemBin filtered by the BinaMax2 column
 * @method     ChildInvWhseItemBin|null findOneByBinabin3(string $BinaBin3) Return the first ChildInvWhseItemBin filtered by the BinaBin3 column
 * @method     ChildInvWhseItemBin|null findOneByBinamin3(int $BinaMin3) Return the first ChildInvWhseItemBin filtered by the BinaMin3 column
 * @method     ChildInvWhseItemBin|null findOneByBinamax3(int $BinaMax3) Return the first ChildInvWhseItemBin filtered by the BinaMax3 column
 * @method     ChildInvWhseItemBin|null findOneByBinabin4(string $BinaBin4) Return the first ChildInvWhseItemBin filtered by the BinaBin4 column
 * @method     ChildInvWhseItemBin|null findOneByBinamin4(int $BinaMin4) Return the first ChildInvWhseItemBin filtered by the BinaMin4 column
 * @method     ChildInvWhseItemBin|null findOneByBinamax4(int $BinaMax4) Return the first ChildInvWhseItemBin filtered by the BinaMax4 column
 * @method     ChildInvWhseItemBin|null findOneByBinabin5(string $BinaBin5) Return the first ChildInvWhseItemBin filtered by the BinaBin5 column
 * @method     ChildInvWhseItemBin|null findOneByBinamin5(int $BinaMin5) Return the first ChildInvWhseItemBin filtered by the BinaMin5 column
 * @method     ChildInvWhseItemBin|null findOneByBinamax5(int $BinaMax5) Return the first ChildInvWhseItemBin filtered by the BinaMax5 column
 * @method     ChildInvWhseItemBin|null findOneByBinabin6(string $BinaBin6) Return the first ChildInvWhseItemBin filtered by the BinaBin6 column
 * @method     ChildInvWhseItemBin|null findOneByBinamin6(int $BinaMin6) Return the first ChildInvWhseItemBin filtered by the BinaMin6 column
 * @method     ChildInvWhseItemBin|null findOneByBinamax6(int $BinaMax6) Return the first ChildInvWhseItemBin filtered by the BinaMax6 column
 * @method     ChildInvWhseItemBin|null findOneByBinabin7(string $BinaBin7) Return the first ChildInvWhseItemBin filtered by the BinaBin7 column
 * @method     ChildInvWhseItemBin|null findOneByBinamin7(int $BinaMin7) Return the first ChildInvWhseItemBin filtered by the BinaMin7 column
 * @method     ChildInvWhseItemBin|null findOneByBinamax7(int $BinaMax7) Return the first ChildInvWhseItemBin filtered by the BinaMax7 column
 * @method     ChildInvWhseItemBin|null findOneByBinabin8(string $BinaBin8) Return the first ChildInvWhseItemBin filtered by the BinaBin8 column
 * @method     ChildInvWhseItemBin|null findOneByBinamin8(int $BinaMin8) Return the first ChildInvWhseItemBin filtered by the BinaMin8 column
 * @method     ChildInvWhseItemBin|null findOneByBinamax8(int $BinaMax8) Return the first ChildInvWhseItemBin filtered by the BinaMax8 column
 * @method     ChildInvWhseItemBin|null findOneByBinabin9(string $BinaBin9) Return the first ChildInvWhseItemBin filtered by the BinaBin9 column
 * @method     ChildInvWhseItemBin|null findOneByBinamin9(int $BinaMin9) Return the first ChildInvWhseItemBin filtered by the BinaMin9 column
 * @method     ChildInvWhseItemBin|null findOneByBinamax9(int $BinaMax9) Return the first ChildInvWhseItemBin filtered by the BinaMax9 column
 * @method     ChildInvWhseItemBin|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildInvWhseItemBin filtered by the DateUpdtd column
 * @method     ChildInvWhseItemBin|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvWhseItemBin filtered by the TimeUpdtd column
 * @method     ChildInvWhseItemBin|null findOneByDummy(string $dummy) Return the first ChildInvWhseItemBin filtered by the dummy column
 *
 * @method     ChildInvWhseItemBin requirePk($key, ?ConnectionInterface $con = null) Return the ChildInvWhseItemBin by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOne(?ConnectionInterface $con = null) Return the first ChildInvWhseItemBin matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvWhseItemBin requireOneByInititemnbr(string $InitItemNbr) Return the first ChildInvWhseItemBin filtered by the InitItemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByIntbwhse(string $IntbWhse) Return the first ChildInvWhseItemBin filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinabin1(string $BinaBin1) Return the first ChildInvWhseItemBin filtered by the BinaBin1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamin1(int $BinaMin1) Return the first ChildInvWhseItemBin filtered by the BinaMin1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamax1(int $BinaMax1) Return the first ChildInvWhseItemBin filtered by the BinaMax1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinabin2(string $BinaBin2) Return the first ChildInvWhseItemBin filtered by the BinaBin2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamin2(int $BinaMin2) Return the first ChildInvWhseItemBin filtered by the BinaMin2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamax2(int $BinaMax2) Return the first ChildInvWhseItemBin filtered by the BinaMax2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinabin3(string $BinaBin3) Return the first ChildInvWhseItemBin filtered by the BinaBin3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamin3(int $BinaMin3) Return the first ChildInvWhseItemBin filtered by the BinaMin3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamax3(int $BinaMax3) Return the first ChildInvWhseItemBin filtered by the BinaMax3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinabin4(string $BinaBin4) Return the first ChildInvWhseItemBin filtered by the BinaBin4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamin4(int $BinaMin4) Return the first ChildInvWhseItemBin filtered by the BinaMin4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamax4(int $BinaMax4) Return the first ChildInvWhseItemBin filtered by the BinaMax4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinabin5(string $BinaBin5) Return the first ChildInvWhseItemBin filtered by the BinaBin5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamin5(int $BinaMin5) Return the first ChildInvWhseItemBin filtered by the BinaMin5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamax5(int $BinaMax5) Return the first ChildInvWhseItemBin filtered by the BinaMax5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinabin6(string $BinaBin6) Return the first ChildInvWhseItemBin filtered by the BinaBin6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamin6(int $BinaMin6) Return the first ChildInvWhseItemBin filtered by the BinaMin6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamax6(int $BinaMax6) Return the first ChildInvWhseItemBin filtered by the BinaMax6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinabin7(string $BinaBin7) Return the first ChildInvWhseItemBin filtered by the BinaBin7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamin7(int $BinaMin7) Return the first ChildInvWhseItemBin filtered by the BinaMin7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamax7(int $BinaMax7) Return the first ChildInvWhseItemBin filtered by the BinaMax7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinabin8(string $BinaBin8) Return the first ChildInvWhseItemBin filtered by the BinaBin8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamin8(int $BinaMin8) Return the first ChildInvWhseItemBin filtered by the BinaMin8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamax8(int $BinaMax8) Return the first ChildInvWhseItemBin filtered by the BinaMax8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinabin9(string $BinaBin9) Return the first ChildInvWhseItemBin filtered by the BinaBin9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamin9(int $BinaMin9) Return the first ChildInvWhseItemBin filtered by the BinaMin9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByBinamax9(int $BinaMax9) Return the first ChildInvWhseItemBin filtered by the BinaMax9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByDateupdtd(string $DateUpdtd) Return the first ChildInvWhseItemBin filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildInvWhseItemBin filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildInvWhseItemBin requireOneByDummy(string $dummy) Return the first ChildInvWhseItemBin filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildInvWhseItemBin[]|Collection find(?ConnectionInterface $con = null) Return ChildInvWhseItemBin objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> find(?ConnectionInterface $con = null) Return ChildInvWhseItemBin objects based on current ModelCriteria
 *
 * @method     ChildInvWhseItemBin[]|Collection findByInititemnbr(string|array<string> $InitItemNbr) Return ChildInvWhseItemBin objects filtered by the InitItemNbr column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByInititemnbr(string|array<string> $InitItemNbr) Return ChildInvWhseItemBin objects filtered by the InitItemNbr column
 * @method     ChildInvWhseItemBin[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildInvWhseItemBin objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByIntbwhse(string|array<string> $IntbWhse) Return ChildInvWhseItemBin objects filtered by the IntbWhse column
 * @method     ChildInvWhseItemBin[]|Collection findByBinabin1(string|array<string> $BinaBin1) Return ChildInvWhseItemBin objects filtered by the BinaBin1 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinabin1(string|array<string> $BinaBin1) Return ChildInvWhseItemBin objects filtered by the BinaBin1 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamin1(int|array<int> $BinaMin1) Return ChildInvWhseItemBin objects filtered by the BinaMin1 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamin1(int|array<int> $BinaMin1) Return ChildInvWhseItemBin objects filtered by the BinaMin1 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamax1(int|array<int> $BinaMax1) Return ChildInvWhseItemBin objects filtered by the BinaMax1 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamax1(int|array<int> $BinaMax1) Return ChildInvWhseItemBin objects filtered by the BinaMax1 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinabin2(string|array<string> $BinaBin2) Return ChildInvWhseItemBin objects filtered by the BinaBin2 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinabin2(string|array<string> $BinaBin2) Return ChildInvWhseItemBin objects filtered by the BinaBin2 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamin2(int|array<int> $BinaMin2) Return ChildInvWhseItemBin objects filtered by the BinaMin2 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamin2(int|array<int> $BinaMin2) Return ChildInvWhseItemBin objects filtered by the BinaMin2 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamax2(int|array<int> $BinaMax2) Return ChildInvWhseItemBin objects filtered by the BinaMax2 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamax2(int|array<int> $BinaMax2) Return ChildInvWhseItemBin objects filtered by the BinaMax2 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinabin3(string|array<string> $BinaBin3) Return ChildInvWhseItemBin objects filtered by the BinaBin3 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinabin3(string|array<string> $BinaBin3) Return ChildInvWhseItemBin objects filtered by the BinaBin3 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamin3(int|array<int> $BinaMin3) Return ChildInvWhseItemBin objects filtered by the BinaMin3 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamin3(int|array<int> $BinaMin3) Return ChildInvWhseItemBin objects filtered by the BinaMin3 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamax3(int|array<int> $BinaMax3) Return ChildInvWhseItemBin objects filtered by the BinaMax3 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamax3(int|array<int> $BinaMax3) Return ChildInvWhseItemBin objects filtered by the BinaMax3 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinabin4(string|array<string> $BinaBin4) Return ChildInvWhseItemBin objects filtered by the BinaBin4 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinabin4(string|array<string> $BinaBin4) Return ChildInvWhseItemBin objects filtered by the BinaBin4 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamin4(int|array<int> $BinaMin4) Return ChildInvWhseItemBin objects filtered by the BinaMin4 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamin4(int|array<int> $BinaMin4) Return ChildInvWhseItemBin objects filtered by the BinaMin4 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamax4(int|array<int> $BinaMax4) Return ChildInvWhseItemBin objects filtered by the BinaMax4 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamax4(int|array<int> $BinaMax4) Return ChildInvWhseItemBin objects filtered by the BinaMax4 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinabin5(string|array<string> $BinaBin5) Return ChildInvWhseItemBin objects filtered by the BinaBin5 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinabin5(string|array<string> $BinaBin5) Return ChildInvWhseItemBin objects filtered by the BinaBin5 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamin5(int|array<int> $BinaMin5) Return ChildInvWhseItemBin objects filtered by the BinaMin5 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamin5(int|array<int> $BinaMin5) Return ChildInvWhseItemBin objects filtered by the BinaMin5 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamax5(int|array<int> $BinaMax5) Return ChildInvWhseItemBin objects filtered by the BinaMax5 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamax5(int|array<int> $BinaMax5) Return ChildInvWhseItemBin objects filtered by the BinaMax5 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinabin6(string|array<string> $BinaBin6) Return ChildInvWhseItemBin objects filtered by the BinaBin6 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinabin6(string|array<string> $BinaBin6) Return ChildInvWhseItemBin objects filtered by the BinaBin6 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamin6(int|array<int> $BinaMin6) Return ChildInvWhseItemBin objects filtered by the BinaMin6 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamin6(int|array<int> $BinaMin6) Return ChildInvWhseItemBin objects filtered by the BinaMin6 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamax6(int|array<int> $BinaMax6) Return ChildInvWhseItemBin objects filtered by the BinaMax6 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamax6(int|array<int> $BinaMax6) Return ChildInvWhseItemBin objects filtered by the BinaMax6 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinabin7(string|array<string> $BinaBin7) Return ChildInvWhseItemBin objects filtered by the BinaBin7 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinabin7(string|array<string> $BinaBin7) Return ChildInvWhseItemBin objects filtered by the BinaBin7 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamin7(int|array<int> $BinaMin7) Return ChildInvWhseItemBin objects filtered by the BinaMin7 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamin7(int|array<int> $BinaMin7) Return ChildInvWhseItemBin objects filtered by the BinaMin7 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamax7(int|array<int> $BinaMax7) Return ChildInvWhseItemBin objects filtered by the BinaMax7 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamax7(int|array<int> $BinaMax7) Return ChildInvWhseItemBin objects filtered by the BinaMax7 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinabin8(string|array<string> $BinaBin8) Return ChildInvWhseItemBin objects filtered by the BinaBin8 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinabin8(string|array<string> $BinaBin8) Return ChildInvWhseItemBin objects filtered by the BinaBin8 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamin8(int|array<int> $BinaMin8) Return ChildInvWhseItemBin objects filtered by the BinaMin8 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamin8(int|array<int> $BinaMin8) Return ChildInvWhseItemBin objects filtered by the BinaMin8 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamax8(int|array<int> $BinaMax8) Return ChildInvWhseItemBin objects filtered by the BinaMax8 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamax8(int|array<int> $BinaMax8) Return ChildInvWhseItemBin objects filtered by the BinaMax8 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinabin9(string|array<string> $BinaBin9) Return ChildInvWhseItemBin objects filtered by the BinaBin9 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinabin9(string|array<string> $BinaBin9) Return ChildInvWhseItemBin objects filtered by the BinaBin9 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamin9(int|array<int> $BinaMin9) Return ChildInvWhseItemBin objects filtered by the BinaMin9 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamin9(int|array<int> $BinaMin9) Return ChildInvWhseItemBin objects filtered by the BinaMin9 column
 * @method     ChildInvWhseItemBin[]|Collection findByBinamax9(int|array<int> $BinaMax9) Return ChildInvWhseItemBin objects filtered by the BinaMax9 column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByBinamax9(int|array<int> $BinaMax9) Return ChildInvWhseItemBin objects filtered by the BinaMax9 column
 * @method     ChildInvWhseItemBin[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvWhseItemBin objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildInvWhseItemBin objects filtered by the DateUpdtd column
 * @method     ChildInvWhseItemBin[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvWhseItemBin objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildInvWhseItemBin objects filtered by the TimeUpdtd column
 * @method     ChildInvWhseItemBin[]|Collection findByDummy(string|array<string> $dummy) Return ChildInvWhseItemBin objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildInvWhseItemBin> findByDummy(string|array<string> $dummy) Return ChildInvWhseItemBin objects filtered by the dummy column
 *
 * @method     ChildInvWhseItemBin[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildInvWhseItemBin> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class InvWhseItemBinQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\InvWhseItemBinQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\InvWhseItemBin', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildInvWhseItemBinQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildInvWhseItemBinQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildInvWhseItemBinQuery) {
            return $criteria;
        }
        $query = new ChildInvWhseItemBinQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$InitItemNbr, $IntbWhse] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildInvWhseItemBin|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(InvWhseItemBinTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = InvWhseItemBinTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildInvWhseItemBin A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT InitItemNbr, IntbWhse, BinaBin1, BinaMin1, BinaMax1, BinaBin2, BinaMin2, BinaMax2, BinaBin3, BinaMin3, BinaMax3, BinaBin4, BinaMin4, BinaMax4, BinaBin5, BinaMin5, BinaMax5, BinaBin6, BinaMin6, BinaMax6, BinaBin7, BinaMin7, BinaMax7, BinaBin8, BinaMin8, BinaMax8, BinaBin9, BinaMin9, BinaMax9, DateUpdtd, TimeUpdtd, dummy FROM inv_bin_area WHERE InitItemNbr = :p0 AND IntbWhse = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildInvWhseItemBin $obj */
            $obj = new ChildInvWhseItemBin();
            $obj->hydrate($row);
            InvWhseItemBinTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @return ChildInvWhseItemBin|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param array $keys Primary keys to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return Collection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param mixed $key Primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InvWhseItemBinTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InvWhseItemBinTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param array|int $keys The list of primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            $this->add(null, '1<>1', Criteria::CUSTOM);

            return $this;
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InvWhseItemBinTableMap::COL_INITITEMNBR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InvWhseItemBinTableMap::COL_INTBWHSE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the InitItemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByInititemnbr('fooValue');   // WHERE InitItemNbr = 'fooValue'
     * $query->filterByInititemnbr('%fooValue%', Criteria::LIKE); // WHERE InitItemNbr LIKE '%fooValue%'
     * $query->filterByInititemnbr(['foo', 'bar']); // WHERE InitItemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $inititemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInititemnbr($inititemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inititemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_INITITEMNBR, $inititemnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * $query->filterByIntbwhse(['foo', 'bar']); // WHERE IntbWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $intbwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaBin1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinabin1('fooValue');   // WHERE BinaBin1 = 'fooValue'
     * $query->filterByBinabin1('%fooValue%', Criteria::LIKE); // WHERE BinaBin1 LIKE '%fooValue%'
     * $query->filterByBinabin1(['foo', 'bar']); // WHERE BinaBin1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $binabin1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinabin1($binabin1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($binabin1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINABIN1, $binabin1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMin1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamin1(1234); // WHERE BinaMin1 = 1234
     * $query->filterByBinamin1(array(12, 34)); // WHERE BinaMin1 IN (12, 34)
     * $query->filterByBinamin1(array('min' => 12)); // WHERE BinaMin1 > 12
     * </code>
     *
     * @param mixed $binamin1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamin1($binamin1 = null, ?string $comparison = null)
    {
        if (is_array($binamin1)) {
            $useMinMax = false;
            if (isset($binamin1['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN1, $binamin1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamin1['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN1, $binamin1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN1, $binamin1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMax1 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamax1(1234); // WHERE BinaMax1 = 1234
     * $query->filterByBinamax1(array(12, 34)); // WHERE BinaMax1 IN (12, 34)
     * $query->filterByBinamax1(array('min' => 12)); // WHERE BinaMax1 > 12
     * </code>
     *
     * @param mixed $binamax1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamax1($binamax1 = null, ?string $comparison = null)
    {
        if (is_array($binamax1)) {
            $useMinMax = false;
            if (isset($binamax1['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX1, $binamax1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamax1['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX1, $binamax1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX1, $binamax1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaBin2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinabin2('fooValue');   // WHERE BinaBin2 = 'fooValue'
     * $query->filterByBinabin2('%fooValue%', Criteria::LIKE); // WHERE BinaBin2 LIKE '%fooValue%'
     * $query->filterByBinabin2(['foo', 'bar']); // WHERE BinaBin2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $binabin2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinabin2($binabin2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($binabin2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINABIN2, $binabin2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMin2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamin2(1234); // WHERE BinaMin2 = 1234
     * $query->filterByBinamin2(array(12, 34)); // WHERE BinaMin2 IN (12, 34)
     * $query->filterByBinamin2(array('min' => 12)); // WHERE BinaMin2 > 12
     * </code>
     *
     * @param mixed $binamin2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamin2($binamin2 = null, ?string $comparison = null)
    {
        if (is_array($binamin2)) {
            $useMinMax = false;
            if (isset($binamin2['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN2, $binamin2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamin2['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN2, $binamin2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN2, $binamin2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMax2 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamax2(1234); // WHERE BinaMax2 = 1234
     * $query->filterByBinamax2(array(12, 34)); // WHERE BinaMax2 IN (12, 34)
     * $query->filterByBinamax2(array('min' => 12)); // WHERE BinaMax2 > 12
     * </code>
     *
     * @param mixed $binamax2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamax2($binamax2 = null, ?string $comparison = null)
    {
        if (is_array($binamax2)) {
            $useMinMax = false;
            if (isset($binamax2['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX2, $binamax2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamax2['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX2, $binamax2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX2, $binamax2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaBin3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinabin3('fooValue');   // WHERE BinaBin3 = 'fooValue'
     * $query->filterByBinabin3('%fooValue%', Criteria::LIKE); // WHERE BinaBin3 LIKE '%fooValue%'
     * $query->filterByBinabin3(['foo', 'bar']); // WHERE BinaBin3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $binabin3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinabin3($binabin3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($binabin3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINABIN3, $binabin3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMin3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamin3(1234); // WHERE BinaMin3 = 1234
     * $query->filterByBinamin3(array(12, 34)); // WHERE BinaMin3 IN (12, 34)
     * $query->filterByBinamin3(array('min' => 12)); // WHERE BinaMin3 > 12
     * </code>
     *
     * @param mixed $binamin3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamin3($binamin3 = null, ?string $comparison = null)
    {
        if (is_array($binamin3)) {
            $useMinMax = false;
            if (isset($binamin3['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN3, $binamin3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamin3['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN3, $binamin3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN3, $binamin3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMax3 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamax3(1234); // WHERE BinaMax3 = 1234
     * $query->filterByBinamax3(array(12, 34)); // WHERE BinaMax3 IN (12, 34)
     * $query->filterByBinamax3(array('min' => 12)); // WHERE BinaMax3 > 12
     * </code>
     *
     * @param mixed $binamax3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamax3($binamax3 = null, ?string $comparison = null)
    {
        if (is_array($binamax3)) {
            $useMinMax = false;
            if (isset($binamax3['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX3, $binamax3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamax3['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX3, $binamax3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX3, $binamax3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaBin4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinabin4('fooValue');   // WHERE BinaBin4 = 'fooValue'
     * $query->filterByBinabin4('%fooValue%', Criteria::LIKE); // WHERE BinaBin4 LIKE '%fooValue%'
     * $query->filterByBinabin4(['foo', 'bar']); // WHERE BinaBin4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $binabin4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinabin4($binabin4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($binabin4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINABIN4, $binabin4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMin4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamin4(1234); // WHERE BinaMin4 = 1234
     * $query->filterByBinamin4(array(12, 34)); // WHERE BinaMin4 IN (12, 34)
     * $query->filterByBinamin4(array('min' => 12)); // WHERE BinaMin4 > 12
     * </code>
     *
     * @param mixed $binamin4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamin4($binamin4 = null, ?string $comparison = null)
    {
        if (is_array($binamin4)) {
            $useMinMax = false;
            if (isset($binamin4['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN4, $binamin4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamin4['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN4, $binamin4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN4, $binamin4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMax4 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamax4(1234); // WHERE BinaMax4 = 1234
     * $query->filterByBinamax4(array(12, 34)); // WHERE BinaMax4 IN (12, 34)
     * $query->filterByBinamax4(array('min' => 12)); // WHERE BinaMax4 > 12
     * </code>
     *
     * @param mixed $binamax4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamax4($binamax4 = null, ?string $comparison = null)
    {
        if (is_array($binamax4)) {
            $useMinMax = false;
            if (isset($binamax4['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX4, $binamax4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamax4['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX4, $binamax4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX4, $binamax4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaBin5 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinabin5('fooValue');   // WHERE BinaBin5 = 'fooValue'
     * $query->filterByBinabin5('%fooValue%', Criteria::LIKE); // WHERE BinaBin5 LIKE '%fooValue%'
     * $query->filterByBinabin5(['foo', 'bar']); // WHERE BinaBin5 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $binabin5 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinabin5($binabin5 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($binabin5)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINABIN5, $binabin5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMin5 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamin5(1234); // WHERE BinaMin5 = 1234
     * $query->filterByBinamin5(array(12, 34)); // WHERE BinaMin5 IN (12, 34)
     * $query->filterByBinamin5(array('min' => 12)); // WHERE BinaMin5 > 12
     * </code>
     *
     * @param mixed $binamin5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamin5($binamin5 = null, ?string $comparison = null)
    {
        if (is_array($binamin5)) {
            $useMinMax = false;
            if (isset($binamin5['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN5, $binamin5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamin5['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN5, $binamin5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN5, $binamin5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMax5 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamax5(1234); // WHERE BinaMax5 = 1234
     * $query->filterByBinamax5(array(12, 34)); // WHERE BinaMax5 IN (12, 34)
     * $query->filterByBinamax5(array('min' => 12)); // WHERE BinaMax5 > 12
     * </code>
     *
     * @param mixed $binamax5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamax5($binamax5 = null, ?string $comparison = null)
    {
        if (is_array($binamax5)) {
            $useMinMax = false;
            if (isset($binamax5['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX5, $binamax5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamax5['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX5, $binamax5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX5, $binamax5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaBin6 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinabin6('fooValue');   // WHERE BinaBin6 = 'fooValue'
     * $query->filterByBinabin6('%fooValue%', Criteria::LIKE); // WHERE BinaBin6 LIKE '%fooValue%'
     * $query->filterByBinabin6(['foo', 'bar']); // WHERE BinaBin6 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $binabin6 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinabin6($binabin6 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($binabin6)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINABIN6, $binabin6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMin6 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamin6(1234); // WHERE BinaMin6 = 1234
     * $query->filterByBinamin6(array(12, 34)); // WHERE BinaMin6 IN (12, 34)
     * $query->filterByBinamin6(array('min' => 12)); // WHERE BinaMin6 > 12
     * </code>
     *
     * @param mixed $binamin6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamin6($binamin6 = null, ?string $comparison = null)
    {
        if (is_array($binamin6)) {
            $useMinMax = false;
            if (isset($binamin6['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN6, $binamin6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamin6['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN6, $binamin6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN6, $binamin6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMax6 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamax6(1234); // WHERE BinaMax6 = 1234
     * $query->filterByBinamax6(array(12, 34)); // WHERE BinaMax6 IN (12, 34)
     * $query->filterByBinamax6(array('min' => 12)); // WHERE BinaMax6 > 12
     * </code>
     *
     * @param mixed $binamax6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamax6($binamax6 = null, ?string $comparison = null)
    {
        if (is_array($binamax6)) {
            $useMinMax = false;
            if (isset($binamax6['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX6, $binamax6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamax6['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX6, $binamax6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX6, $binamax6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaBin7 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinabin7('fooValue');   // WHERE BinaBin7 = 'fooValue'
     * $query->filterByBinabin7('%fooValue%', Criteria::LIKE); // WHERE BinaBin7 LIKE '%fooValue%'
     * $query->filterByBinabin7(['foo', 'bar']); // WHERE BinaBin7 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $binabin7 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinabin7($binabin7 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($binabin7)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINABIN7, $binabin7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMin7 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamin7(1234); // WHERE BinaMin7 = 1234
     * $query->filterByBinamin7(array(12, 34)); // WHERE BinaMin7 IN (12, 34)
     * $query->filterByBinamin7(array('min' => 12)); // WHERE BinaMin7 > 12
     * </code>
     *
     * @param mixed $binamin7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamin7($binamin7 = null, ?string $comparison = null)
    {
        if (is_array($binamin7)) {
            $useMinMax = false;
            if (isset($binamin7['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN7, $binamin7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamin7['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN7, $binamin7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN7, $binamin7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMax7 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamax7(1234); // WHERE BinaMax7 = 1234
     * $query->filterByBinamax7(array(12, 34)); // WHERE BinaMax7 IN (12, 34)
     * $query->filterByBinamax7(array('min' => 12)); // WHERE BinaMax7 > 12
     * </code>
     *
     * @param mixed $binamax7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamax7($binamax7 = null, ?string $comparison = null)
    {
        if (is_array($binamax7)) {
            $useMinMax = false;
            if (isset($binamax7['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX7, $binamax7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamax7['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX7, $binamax7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX7, $binamax7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaBin8 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinabin8('fooValue');   // WHERE BinaBin8 = 'fooValue'
     * $query->filterByBinabin8('%fooValue%', Criteria::LIKE); // WHERE BinaBin8 LIKE '%fooValue%'
     * $query->filterByBinabin8(['foo', 'bar']); // WHERE BinaBin8 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $binabin8 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinabin8($binabin8 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($binabin8)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINABIN8, $binabin8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMin8 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamin8(1234); // WHERE BinaMin8 = 1234
     * $query->filterByBinamin8(array(12, 34)); // WHERE BinaMin8 IN (12, 34)
     * $query->filterByBinamin8(array('min' => 12)); // WHERE BinaMin8 > 12
     * </code>
     *
     * @param mixed $binamin8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamin8($binamin8 = null, ?string $comparison = null)
    {
        if (is_array($binamin8)) {
            $useMinMax = false;
            if (isset($binamin8['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN8, $binamin8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamin8['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN8, $binamin8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN8, $binamin8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMax8 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamax8(1234); // WHERE BinaMax8 = 1234
     * $query->filterByBinamax8(array(12, 34)); // WHERE BinaMax8 IN (12, 34)
     * $query->filterByBinamax8(array('min' => 12)); // WHERE BinaMax8 > 12
     * </code>
     *
     * @param mixed $binamax8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamax8($binamax8 = null, ?string $comparison = null)
    {
        if (is_array($binamax8)) {
            $useMinMax = false;
            if (isset($binamax8['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX8, $binamax8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamax8['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX8, $binamax8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX8, $binamax8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaBin9 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinabin9('fooValue');   // WHERE BinaBin9 = 'fooValue'
     * $query->filterByBinabin9('%fooValue%', Criteria::LIKE); // WHERE BinaBin9 LIKE '%fooValue%'
     * $query->filterByBinabin9(['foo', 'bar']); // WHERE BinaBin9 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $binabin9 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinabin9($binabin9 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($binabin9)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINABIN9, $binabin9, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMin9 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamin9(1234); // WHERE BinaMin9 = 1234
     * $query->filterByBinamin9(array(12, 34)); // WHERE BinaMin9 IN (12, 34)
     * $query->filterByBinamin9(array('min' => 12)); // WHERE BinaMin9 > 12
     * </code>
     *
     * @param mixed $binamin9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamin9($binamin9 = null, ?string $comparison = null)
    {
        if (is_array($binamin9)) {
            $useMinMax = false;
            if (isset($binamin9['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN9, $binamin9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamin9['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN9, $binamin9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMIN9, $binamin9, $comparison);

        return $this;
    }

    /**
     * Filter the query on the BinaMax9 column
     *
     * Example usage:
     * <code>
     * $query->filterByBinamax9(1234); // WHERE BinaMax9 = 1234
     * $query->filterByBinamax9(array(12, 34)); // WHERE BinaMax9 IN (12, 34)
     * $query->filterByBinamax9(array('min' => 12)); // WHERE BinaMax9 > 12
     * </code>
     *
     * @param mixed $binamax9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBinamax9($binamax9 = null, ?string $comparison = null)
    {
        if (is_array($binamax9)) {
            $useMinMax = false;
            if (isset($binamax9['min'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX9, $binamax9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($binamax9['max'])) {
                $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX9, $binamax9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_BINAMAX9, $binamax9, $comparison);

        return $this;
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd('fooValue');   // WHERE DateUpdtd = 'fooValue'
     * $query->filterByDateupdtd('%fooValue%', Criteria::LIKE); // WHERE DateUpdtd LIKE '%fooValue%'
     * $query->filterByDateupdtd(['foo', 'bar']); // WHERE DateUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dateupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd('fooValue');   // WHERE TimeUpdtd = 'fooValue'
     * $query->filterByTimeupdtd('%fooValue%', Criteria::LIKE); // WHERE TimeUpdtd LIKE '%fooValue%'
     * $query->filterByTimeupdtd(['foo', 'bar']); // WHERE TimeUpdtd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $timeupdtd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * $query->filterByDummy(['foo', 'bar']); // WHERE dummy IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $dummy The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(InvWhseItemBinTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \ItemMasterItem object
     *
     * @param \ItemMasterItem|ObjectCollection $itemMasterItem The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByItemMasterItem($itemMasterItem, ?string $comparison = null)
    {
        if ($itemMasterItem instanceof \ItemMasterItem) {
            return $this
                ->addUsingAlias(InvWhseItemBinTableMap::COL_INITITEMNBR, $itemMasterItem->getInititemnbr(), $comparison);
        } elseif ($itemMasterItem instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvWhseItemBinTableMap::COL_INITITEMNBR, $itemMasterItem->toKeyValue('PrimaryKey', 'Inititemnbr'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByItemMasterItem() only accepts arguments of type \ItemMasterItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemMasterItem relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinItemMasterItem(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemMasterItem');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'ItemMasterItem');
        }

        return $this;
    }

    /**
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemMasterItemQuery A secondary query class using the current class as primary query
     */
    public function useItemMasterItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinItemMasterItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemMasterItem', '\ItemMasterItemQuery');
    }

    /**
     * Use the ItemMasterItem relation ItemMasterItem object
     *
     * @param callable(\ItemMasterItemQuery):\ItemMasterItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withItemMasterItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useItemMasterItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ItemMasterItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ItemMasterItemQuery The inner query object of the EXISTS statement
     */
    public function useItemMasterItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT EXISTS query.
     *
     * @see useItemMasterItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useItemMasterItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useExistsQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ItemMasterItemQuery The inner query object of the IN statement
     */
    public function useInItemMasterItemQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ItemMasterItem table for a NOT IN query.
     *
     * @see useItemMasterItemInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ItemMasterItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInItemMasterItemQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ItemMasterItemQuery */
        $q = $this->useInQuery('ItemMasterItem', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Warehouse object
     *
     * @param \Warehouse|ObjectCollection $warehouse The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByWarehouse($warehouse, ?string $comparison = null)
    {
        if ($warehouse instanceof \Warehouse) {
            return $this
                ->addUsingAlias(InvWhseItemBinTableMap::COL_INTBWHSE, $warehouse->getIntbwhse(), $comparison);
        } elseif ($warehouse instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(InvWhseItemBinTableMap::COL_INTBWHSE, $warehouse->toKeyValue('PrimaryKey', 'Intbwhse'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByWarehouse() only accepts arguments of type \Warehouse or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Warehouse relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinWarehouse(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Warehouse');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Warehouse');
        }

        return $this;
    }

    /**
     * Use the Warehouse relation Warehouse object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinWarehouse($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Warehouse', '\WarehouseQuery');
    }

    /**
     * Use the Warehouse relation Warehouse object
     *
     * @param callable(\WarehouseQuery):\WarehouseQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withWarehouseQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useWarehouseQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Warehouse table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \WarehouseQuery The inner query object of the EXISTS statement
     */
    public function useWarehouseExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useExistsQuery('Warehouse', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Warehouse table for a NOT EXISTS query.
     *
     * @see useWarehouseExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \WarehouseQuery The inner query object of the NOT EXISTS statement
     */
    public function useWarehouseNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useExistsQuery('Warehouse', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Warehouse table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \WarehouseQuery The inner query object of the IN statement
     */
    public function useInWarehouseQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useInQuery('Warehouse', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Warehouse table for a NOT IN query.
     *
     * @see useWarehouseInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \WarehouseQuery The inner query object of the NOT IN statement
     */
    public function useNotInWarehouseQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseQuery */
        $q = $this->useInQuery('Warehouse', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \WarehouseInventory object
     *
     * @param \WarehouseInventory $warehouseInventory The related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByWarehouseInventory($warehouseInventory, ?string $comparison = null)
    {
        if ($warehouseInventory instanceof \WarehouseInventory) {
            return $this
                ->addUsingAlias(InvWhseItemBinTableMap::COL_INITITEMNBR, $warehouseInventory->getInititemnbr(), $comparison)
                ->addUsingAlias(InvWhseItemBinTableMap::COL_INTBWHSE, $warehouseInventory->getIntbwhse(), $comparison);
        } else {
            throw new PropelException('filterByWarehouseInventory() only accepts arguments of type \WarehouseInventory');
        }
    }

    /**
     * Adds a JOIN clause to the query using the WarehouseInventory relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinWarehouseInventory(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('WarehouseInventory');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'WarehouseInventory');
        }

        return $this;
    }

    /**
     * Use the WarehouseInventory relation WarehouseInventory object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \WarehouseInventoryQuery A secondary query class using the current class as primary query
     */
    public function useWarehouseInventoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinWarehouseInventory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'WarehouseInventory', '\WarehouseInventoryQuery');
    }

    /**
     * Use the WarehouseInventory relation WarehouseInventory object
     *
     * @param callable(\WarehouseInventoryQuery):\WarehouseInventoryQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withWarehouseInventoryQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useWarehouseInventoryQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to WarehouseInventory table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \WarehouseInventoryQuery The inner query object of the EXISTS statement
     */
    public function useWarehouseInventoryExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \WarehouseInventoryQuery */
        $q = $this->useExistsQuery('WarehouseInventory', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to WarehouseInventory table for a NOT EXISTS query.
     *
     * @see useWarehouseInventoryExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \WarehouseInventoryQuery The inner query object of the NOT EXISTS statement
     */
    public function useWarehouseInventoryNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseInventoryQuery */
        $q = $this->useExistsQuery('WarehouseInventory', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to WarehouseInventory table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \WarehouseInventoryQuery The inner query object of the IN statement
     */
    public function useInWarehouseInventoryQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \WarehouseInventoryQuery */
        $q = $this->useInQuery('WarehouseInventory', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to WarehouseInventory table for a NOT IN query.
     *
     * @see useWarehouseInventoryInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \WarehouseInventoryQuery The inner query object of the NOT IN statement
     */
    public function useNotInWarehouseInventoryQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \WarehouseInventoryQuery */
        $q = $this->useInQuery('WarehouseInventory', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildInvWhseItemBin $invWhseItemBin Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($invWhseItemBin = null)
    {
        if ($invWhseItemBin) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InvWhseItemBinTableMap::COL_INITITEMNBR), $invWhseItemBin->getInititemnbr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InvWhseItemBinTableMap::COL_INTBWHSE), $invWhseItemBin->getIntbwhse(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the inv_bin_area table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvWhseItemBinTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InvWhseItemBinTableMap::clearInstancePool();
            InvWhseItemBinTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(InvWhseItemBinTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(InvWhseItemBinTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            InvWhseItemBinTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            InvWhseItemBinTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
