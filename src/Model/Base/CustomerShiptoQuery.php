<?php

namespace Base;

use \CustomerShipto as ChildCustomerShipto;
use \CustomerShiptoQuery as ChildCustomerShiptoQuery;
use \Exception;
use \PDO;
use Map\CustomerShiptoTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `ar_ship_to` table.
 *
 * @method     ChildCustomerShiptoQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildCustomerShiptoQuery orderByArstshipid($order = Criteria::ASC) Order by the ArstShipId column
 * @method     ChildCustomerShiptoQuery orderByArstname($order = Criteria::ASC) Order by the ArstName column
 * @method     ChildCustomerShiptoQuery orderByArstadr1($order = Criteria::ASC) Order by the ArstAdr1 column
 * @method     ChildCustomerShiptoQuery orderByArstadr2($order = Criteria::ASC) Order by the ArstAdr2 column
 * @method     ChildCustomerShiptoQuery orderByArstadr3($order = Criteria::ASC) Order by the ArstAdr3 column
 * @method     ChildCustomerShiptoQuery orderByArstctry($order = Criteria::ASC) Order by the ArstCtry column
 * @method     ChildCustomerShiptoQuery orderByArstcity($order = Criteria::ASC) Order by the ArstCity column
 * @method     ChildCustomerShiptoQuery orderByArststat($order = Criteria::ASC) Order by the ArstStat column
 * @method     ChildCustomerShiptoQuery orderByArstzipcode($order = Criteria::ASC) Order by the ArstZipCode column
 * @method     ChildCustomerShiptoQuery orderByArstdeliverydays($order = Criteria::ASC) Order by the ArstDeliveryDays column
 * @method     ChildCustomerShiptoQuery orderByArstcommcode($order = Criteria::ASC) Order by the ArstCommCode column
 * @method     ChildCustomerShiptoQuery orderByArstallowsplit($order = Criteria::ASC) Order by the ArstAllowSplit column
 * @method     ChildCustomerShiptoQuery orderByArstlindstsp($order = Criteria::ASC) Order by the ArstLindstSp column
 * @method     ChildCustomerShiptoQuery orderByArstlmecommcustid($order = Criteria::ASC) Order by the ArstLmEcommCustId column
 * @method     ChildCustomerShiptoQuery orderByArstcatlgid($order = Criteria::ASC) Order by the ArstCatlgId column
 * @method     ChildCustomerShiptoQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildCustomerShiptoQuery orderByArspsaleper2($order = Criteria::ASC) Order by the ArspSalePer2 column
 * @method     ChildCustomerShiptoQuery orderByArspsaleper3($order = Criteria::ASC) Order by the ArspSalePer3 column
 * @method     ChildCustomerShiptoQuery orderByArtbctaxcode($order = Criteria::ASC) Order by the ArtbCtaxCode column
 * @method     ChildCustomerShiptoQuery orderByArsttaxexemnbr($order = Criteria::ASC) Order by the ArstTaxExemNbr column
 * @method     ChildCustomerShiptoQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildCustomerShiptoQuery orderByArtbshipvia($order = Criteria::ASC) Order by the ArtbShipVia column
 * @method     ChildCustomerShiptoQuery orderByArstbord($order = Criteria::ASC) Order by the ArstBord column
 * @method     ChildCustomerShiptoQuery orderByArstcredhold($order = Criteria::ASC) Order by the ArstCredHold column
 * @method     ChildCustomerShiptoQuery orderByArstusercode($order = Criteria::ASC) Order by the ArstUserCode column
 * @method     ChildCustomerShiptoQuery orderByArstpriclvl($order = Criteria::ASC) Order by the ArstPricLvl column
 * @method     ChildCustomerShiptoQuery orderByArstshipcomp($order = Criteria::ASC) Order by the ArstShipComp column
 * @method     ChildCustomerShiptoQuery orderByArsttxbl($order = Criteria::ASC) Order by the ArstTxbl column
 * @method     ChildCustomerShiptoQuery orderByArstpostal($order = Criteria::ASC) Order by the ArstPostal column
 * @method     ChildCustomerShiptoQuery orderByArstsalemtd($order = Criteria::ASC) Order by the ArstSaleMtd column
 * @method     ChildCustomerShiptoQuery orderByArstinvmtd($order = Criteria::ASC) Order by the ArstInvMtd column
 * @method     ChildCustomerShiptoQuery orderByArstdateopen($order = Criteria::ASC) Order by the ArstDateOpen column
 * @method     ChildCustomerShiptoQuery orderByArstlastsaledate($order = Criteria::ASC) Order by the ArstLastSaleDate column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo1($order = Criteria::ASC) Order by the ArstSale24mo1 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo1($order = Criteria::ASC) Order by the ArstInv24mo1 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo2($order = Criteria::ASC) Order by the ArstSale24mo2 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo2($order = Criteria::ASC) Order by the ArstInv24mo2 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo3($order = Criteria::ASC) Order by the ArstSale24mo3 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo3($order = Criteria::ASC) Order by the ArstInv24mo3 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo4($order = Criteria::ASC) Order by the ArstSale24mo4 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo4($order = Criteria::ASC) Order by the ArstInv24mo4 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo5($order = Criteria::ASC) Order by the ArstSale24mo5 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo5($order = Criteria::ASC) Order by the ArstInv24mo5 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo6($order = Criteria::ASC) Order by the ArstSale24mo6 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo6($order = Criteria::ASC) Order by the ArstInv24mo6 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo7($order = Criteria::ASC) Order by the ArstSale24mo7 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo7($order = Criteria::ASC) Order by the ArstInv24mo7 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo8($order = Criteria::ASC) Order by the ArstSale24mo8 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo8($order = Criteria::ASC) Order by the ArstInv24mo8 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo9($order = Criteria::ASC) Order by the ArstSale24mo9 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo9($order = Criteria::ASC) Order by the ArstInv24mo9 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo10($order = Criteria::ASC) Order by the ArstSale24mo10 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo10($order = Criteria::ASC) Order by the ArstInv24mo10 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo11($order = Criteria::ASC) Order by the ArstSale24mo11 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo11($order = Criteria::ASC) Order by the ArstInv24mo11 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo12($order = Criteria::ASC) Order by the ArstSale24mo12 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo12($order = Criteria::ASC) Order by the ArstInv24mo12 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo13($order = Criteria::ASC) Order by the ArstSale24mo13 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo13($order = Criteria::ASC) Order by the ArstInv24mo13 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo14($order = Criteria::ASC) Order by the ArstSale24mo14 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo14($order = Criteria::ASC) Order by the ArstInv24mo14 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo15($order = Criteria::ASC) Order by the ArstSale24mo15 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo15($order = Criteria::ASC) Order by the ArstInv24mo15 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo16($order = Criteria::ASC) Order by the ArstSale24mo16 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo16($order = Criteria::ASC) Order by the ArstInv24mo16 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo17($order = Criteria::ASC) Order by the ArstSale24mo17 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo17($order = Criteria::ASC) Order by the ArstInv24mo17 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo18($order = Criteria::ASC) Order by the ArstSale24mo18 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo18($order = Criteria::ASC) Order by the ArstInv24mo18 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo19($order = Criteria::ASC) Order by the ArstSale24mo19 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo19($order = Criteria::ASC) Order by the ArstInv24mo19 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo20($order = Criteria::ASC) Order by the ArstSale24mo20 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo20($order = Criteria::ASC) Order by the ArstInv24mo20 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo21($order = Criteria::ASC) Order by the ArstSale24mo21 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo21($order = Criteria::ASC) Order by the ArstInv24mo21 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo22($order = Criteria::ASC) Order by the ArstSale24mo22 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo22($order = Criteria::ASC) Order by the ArstInv24mo22 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo23($order = Criteria::ASC) Order by the ArstSale24mo23 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo23($order = Criteria::ASC) Order by the ArstInv24mo23 column
 * @method     ChildCustomerShiptoQuery orderByArstsale24mo24($order = Criteria::ASC) Order by the ArstSale24mo24 column
 * @method     ChildCustomerShiptoQuery orderByArstinv24mo24($order = Criteria::ASC) Order by the ArstInv24mo24 column
 * @method     ChildCustomerShiptoQuery orderByArstprimshipid($order = Criteria::ASC) Order by the ArstPrimShipId column
 * @method     ChildCustomerShiptoQuery orderByArstmyvendid($order = Criteria::ASC) Order by the ArstMyVendId column
 * @method     ChildCustomerShiptoQuery orderByArstaddlpricdisc($order = Criteria::ASC) Order by the ArstAddlPricDisc column
 * @method     ChildCustomerShiptoQuery orderByArstediinvc($order = Criteria::ASC) Order by the ArstEdiInvc column
 * @method     ChildCustomerShiptoQuery orderByArstchrgfrt($order = Criteria::ASC) Order by the ArstChrgFrt column
 * @method     ChildCustomerShiptoQuery orderByArstdistcntr($order = Criteria::ASC) Order by the ArstDistCntr column
 * @method     ChildCustomerShiptoQuery orderByArstdunsnbr($order = Criteria::ASC) Order by the ArstDunsNbr column
 * @method     ChildCustomerShiptoQuery orderByArstrfmlvalu($order = Criteria::ASC) Order by the ArstRfmlValu column
 * @method     ChildCustomerShiptoQuery orderByArstcustpoparam($order = Criteria::ASC) Order by the ArstCustPoParam column
 * @method     ChildCustomerShiptoQuery orderByArtbroutcode($order = Criteria::ASC) Order by the ArtbRoutCode column
 * @method     ChildCustomerShiptoQuery orderByArstupsacctnbr($order = Criteria::ASC) Order by the ArstUpsAcctNbr column
 * @method     ChildCustomerShiptoQuery orderByArstfobinputyn($order = Criteria::ASC) Order by the ArstFobInputYn column
 * @method     ChildCustomerShiptoQuery orderByArstfobperlb($order = Criteria::ASC) Order by the ArstFobPerLb column
 * @method     ChildCustomerShiptoQuery orderByArstsaleytd($order = Criteria::ASC) Order by the ArstSaleYtd column
 * @method     ChildCustomerShiptoQuery orderByArstinvytd($order = Criteria::ASC) Order by the ArstInvYtd column
 * @method     ChildCustomerShiptoQuery orderByArstemailfaxauthcode($order = Criteria::ASC) Order by the ArstEmailFaxAuthCode column
 * @method     ChildCustomerShiptoQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCustomerShiptoQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCustomerShiptoQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCustomerShiptoQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildCustomerShiptoQuery groupByArstshipid() Group by the ArstShipId column
 * @method     ChildCustomerShiptoQuery groupByArstname() Group by the ArstName column
 * @method     ChildCustomerShiptoQuery groupByArstadr1() Group by the ArstAdr1 column
 * @method     ChildCustomerShiptoQuery groupByArstadr2() Group by the ArstAdr2 column
 * @method     ChildCustomerShiptoQuery groupByArstadr3() Group by the ArstAdr3 column
 * @method     ChildCustomerShiptoQuery groupByArstctry() Group by the ArstCtry column
 * @method     ChildCustomerShiptoQuery groupByArstcity() Group by the ArstCity column
 * @method     ChildCustomerShiptoQuery groupByArststat() Group by the ArstStat column
 * @method     ChildCustomerShiptoQuery groupByArstzipcode() Group by the ArstZipCode column
 * @method     ChildCustomerShiptoQuery groupByArstdeliverydays() Group by the ArstDeliveryDays column
 * @method     ChildCustomerShiptoQuery groupByArstcommcode() Group by the ArstCommCode column
 * @method     ChildCustomerShiptoQuery groupByArstallowsplit() Group by the ArstAllowSplit column
 * @method     ChildCustomerShiptoQuery groupByArstlindstsp() Group by the ArstLindstSp column
 * @method     ChildCustomerShiptoQuery groupByArstlmecommcustid() Group by the ArstLmEcommCustId column
 * @method     ChildCustomerShiptoQuery groupByArstcatlgid() Group by the ArstCatlgId column
 * @method     ChildCustomerShiptoQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildCustomerShiptoQuery groupByArspsaleper2() Group by the ArspSalePer2 column
 * @method     ChildCustomerShiptoQuery groupByArspsaleper3() Group by the ArspSalePer3 column
 * @method     ChildCustomerShiptoQuery groupByArtbctaxcode() Group by the ArtbCtaxCode column
 * @method     ChildCustomerShiptoQuery groupByArsttaxexemnbr() Group by the ArstTaxExemNbr column
 * @method     ChildCustomerShiptoQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildCustomerShiptoQuery groupByArtbshipvia() Group by the ArtbShipVia column
 * @method     ChildCustomerShiptoQuery groupByArstbord() Group by the ArstBord column
 * @method     ChildCustomerShiptoQuery groupByArstcredhold() Group by the ArstCredHold column
 * @method     ChildCustomerShiptoQuery groupByArstusercode() Group by the ArstUserCode column
 * @method     ChildCustomerShiptoQuery groupByArstpriclvl() Group by the ArstPricLvl column
 * @method     ChildCustomerShiptoQuery groupByArstshipcomp() Group by the ArstShipComp column
 * @method     ChildCustomerShiptoQuery groupByArsttxbl() Group by the ArstTxbl column
 * @method     ChildCustomerShiptoQuery groupByArstpostal() Group by the ArstPostal column
 * @method     ChildCustomerShiptoQuery groupByArstsalemtd() Group by the ArstSaleMtd column
 * @method     ChildCustomerShiptoQuery groupByArstinvmtd() Group by the ArstInvMtd column
 * @method     ChildCustomerShiptoQuery groupByArstdateopen() Group by the ArstDateOpen column
 * @method     ChildCustomerShiptoQuery groupByArstlastsaledate() Group by the ArstLastSaleDate column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo1() Group by the ArstSale24mo1 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo1() Group by the ArstInv24mo1 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo2() Group by the ArstSale24mo2 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo2() Group by the ArstInv24mo2 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo3() Group by the ArstSale24mo3 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo3() Group by the ArstInv24mo3 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo4() Group by the ArstSale24mo4 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo4() Group by the ArstInv24mo4 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo5() Group by the ArstSale24mo5 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo5() Group by the ArstInv24mo5 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo6() Group by the ArstSale24mo6 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo6() Group by the ArstInv24mo6 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo7() Group by the ArstSale24mo7 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo7() Group by the ArstInv24mo7 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo8() Group by the ArstSale24mo8 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo8() Group by the ArstInv24mo8 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo9() Group by the ArstSale24mo9 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo9() Group by the ArstInv24mo9 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo10() Group by the ArstSale24mo10 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo10() Group by the ArstInv24mo10 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo11() Group by the ArstSale24mo11 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo11() Group by the ArstInv24mo11 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo12() Group by the ArstSale24mo12 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo12() Group by the ArstInv24mo12 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo13() Group by the ArstSale24mo13 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo13() Group by the ArstInv24mo13 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo14() Group by the ArstSale24mo14 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo14() Group by the ArstInv24mo14 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo15() Group by the ArstSale24mo15 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo15() Group by the ArstInv24mo15 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo16() Group by the ArstSale24mo16 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo16() Group by the ArstInv24mo16 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo17() Group by the ArstSale24mo17 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo17() Group by the ArstInv24mo17 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo18() Group by the ArstSale24mo18 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo18() Group by the ArstInv24mo18 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo19() Group by the ArstSale24mo19 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo19() Group by the ArstInv24mo19 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo20() Group by the ArstSale24mo20 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo20() Group by the ArstInv24mo20 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo21() Group by the ArstSale24mo21 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo21() Group by the ArstInv24mo21 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo22() Group by the ArstSale24mo22 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo22() Group by the ArstInv24mo22 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo23() Group by the ArstSale24mo23 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo23() Group by the ArstInv24mo23 column
 * @method     ChildCustomerShiptoQuery groupByArstsale24mo24() Group by the ArstSale24mo24 column
 * @method     ChildCustomerShiptoQuery groupByArstinv24mo24() Group by the ArstInv24mo24 column
 * @method     ChildCustomerShiptoQuery groupByArstprimshipid() Group by the ArstPrimShipId column
 * @method     ChildCustomerShiptoQuery groupByArstmyvendid() Group by the ArstMyVendId column
 * @method     ChildCustomerShiptoQuery groupByArstaddlpricdisc() Group by the ArstAddlPricDisc column
 * @method     ChildCustomerShiptoQuery groupByArstediinvc() Group by the ArstEdiInvc column
 * @method     ChildCustomerShiptoQuery groupByArstchrgfrt() Group by the ArstChrgFrt column
 * @method     ChildCustomerShiptoQuery groupByArstdistcntr() Group by the ArstDistCntr column
 * @method     ChildCustomerShiptoQuery groupByArstdunsnbr() Group by the ArstDunsNbr column
 * @method     ChildCustomerShiptoQuery groupByArstrfmlvalu() Group by the ArstRfmlValu column
 * @method     ChildCustomerShiptoQuery groupByArstcustpoparam() Group by the ArstCustPoParam column
 * @method     ChildCustomerShiptoQuery groupByArtbroutcode() Group by the ArtbRoutCode column
 * @method     ChildCustomerShiptoQuery groupByArstupsacctnbr() Group by the ArstUpsAcctNbr column
 * @method     ChildCustomerShiptoQuery groupByArstfobinputyn() Group by the ArstFobInputYn column
 * @method     ChildCustomerShiptoQuery groupByArstfobperlb() Group by the ArstFobPerLb column
 * @method     ChildCustomerShiptoQuery groupByArstsaleytd() Group by the ArstSaleYtd column
 * @method     ChildCustomerShiptoQuery groupByArstinvytd() Group by the ArstInvYtd column
 * @method     ChildCustomerShiptoQuery groupByArstemailfaxauthcode() Group by the ArstEmailFaxAuthCode column
 * @method     ChildCustomerShiptoQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCustomerShiptoQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCustomerShiptoQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCustomerShiptoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCustomerShiptoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCustomerShiptoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCustomerShiptoQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCustomerShiptoQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCustomerShiptoQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCustomerShiptoQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method     ChildCustomerShiptoQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method     ChildCustomerShiptoQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method     ChildCustomerShiptoQuery joinWithCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Customer relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinWithCustomer() Adds a LEFT JOIN clause and with to the query using the Customer relation
 * @method     ChildCustomerShiptoQuery rightJoinWithCustomer() Adds a RIGHT JOIN clause and with to the query using the Customer relation
 * @method     ChildCustomerShiptoQuery innerJoinWithCustomer() Adds a INNER JOIN clause and with to the query using the Customer relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinArContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the ArContact relation
 * @method     ChildCustomerShiptoQuery rightJoinArContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ArContact relation
 * @method     ChildCustomerShiptoQuery innerJoinArContact($relationAlias = null) Adds a INNER JOIN clause to the query using the ArContact relation
 *
 * @method     ChildCustomerShiptoQuery joinWithArContact($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ArContact relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinWithArContact() Adds a LEFT JOIN clause and with to the query using the ArContact relation
 * @method     ChildCustomerShiptoQuery rightJoinWithArContact() Adds a RIGHT JOIN clause and with to the query using the ArContact relation
 * @method     ChildCustomerShiptoQuery innerJoinWithArContact() Adds a INNER JOIN clause and with to the query using the ArContact relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinInvTransferOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the InvTransferOrder relation
 * @method     ChildCustomerShiptoQuery rightJoinInvTransferOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the InvTransferOrder relation
 * @method     ChildCustomerShiptoQuery innerJoinInvTransferOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the InvTransferOrder relation
 *
 * @method     ChildCustomerShiptoQuery joinWithInvTransferOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the InvTransferOrder relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinWithInvTransferOrder() Adds a LEFT JOIN clause and with to the query using the InvTransferOrder relation
 * @method     ChildCustomerShiptoQuery rightJoinWithInvTransferOrder() Adds a RIGHT JOIN clause and with to the query using the InvTransferOrder relation
 * @method     ChildCustomerShiptoQuery innerJoinWithInvTransferOrder() Adds a INNER JOIN clause and with to the query using the InvTransferOrder relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinNoteCustInternal($relationAlias = null) Adds a LEFT JOIN clause to the query using the NoteCustInternal relation
 * @method     ChildCustomerShiptoQuery rightJoinNoteCustInternal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NoteCustInternal relation
 * @method     ChildCustomerShiptoQuery innerJoinNoteCustInternal($relationAlias = null) Adds a INNER JOIN clause to the query using the NoteCustInternal relation
 *
 * @method     ChildCustomerShiptoQuery joinWithNoteCustInternal($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the NoteCustInternal relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinWithNoteCustInternal() Adds a LEFT JOIN clause and with to the query using the NoteCustInternal relation
 * @method     ChildCustomerShiptoQuery rightJoinWithNoteCustInternal() Adds a RIGHT JOIN clause and with to the query using the NoteCustInternal relation
 * @method     ChildCustomerShiptoQuery innerJoinWithNoteCustInternal() Adds a INNER JOIN clause and with to the query using the NoteCustInternal relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinNoteCustOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the NoteCustOrder relation
 * @method     ChildCustomerShiptoQuery rightJoinNoteCustOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NoteCustOrder relation
 * @method     ChildCustomerShiptoQuery innerJoinNoteCustOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the NoteCustOrder relation
 *
 * @method     ChildCustomerShiptoQuery joinWithNoteCustOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the NoteCustOrder relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinWithNoteCustOrder() Adds a LEFT JOIN clause and with to the query using the NoteCustOrder relation
 * @method     ChildCustomerShiptoQuery rightJoinWithNoteCustOrder() Adds a RIGHT JOIN clause and with to the query using the NoteCustOrder relation
 * @method     ChildCustomerShiptoQuery innerJoinWithNoteCustOrder() Adds a INNER JOIN clause and with to the query using the NoteCustOrder relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinBookingDayCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the BookingDayCustomer relation
 * @method     ChildCustomerShiptoQuery rightJoinBookingDayCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BookingDayCustomer relation
 * @method     ChildCustomerShiptoQuery innerJoinBookingDayCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the BookingDayCustomer relation
 *
 * @method     ChildCustomerShiptoQuery joinWithBookingDayCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BookingDayCustomer relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinWithBookingDayCustomer() Adds a LEFT JOIN clause and with to the query using the BookingDayCustomer relation
 * @method     ChildCustomerShiptoQuery rightJoinWithBookingDayCustomer() Adds a RIGHT JOIN clause and with to the query using the BookingDayCustomer relation
 * @method     ChildCustomerShiptoQuery innerJoinWithBookingDayCustomer() Adds a INNER JOIN clause and with to the query using the BookingDayCustomer relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinBookingDayDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the BookingDayDetail relation
 * @method     ChildCustomerShiptoQuery rightJoinBookingDayDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BookingDayDetail relation
 * @method     ChildCustomerShiptoQuery innerJoinBookingDayDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the BookingDayDetail relation
 *
 * @method     ChildCustomerShiptoQuery joinWithBookingDayDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BookingDayDetail relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinWithBookingDayDetail() Adds a LEFT JOIN clause and with to the query using the BookingDayDetail relation
 * @method     ChildCustomerShiptoQuery rightJoinWithBookingDayDetail() Adds a RIGHT JOIN clause and with to the query using the BookingDayDetail relation
 * @method     ChildCustomerShiptoQuery innerJoinWithBookingDayDetail() Adds a INNER JOIN clause and with to the query using the BookingDayDetail relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinBooking($relationAlias = null) Adds a LEFT JOIN clause to the query using the Booking relation
 * @method     ChildCustomerShiptoQuery rightJoinBooking($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Booking relation
 * @method     ChildCustomerShiptoQuery innerJoinBooking($relationAlias = null) Adds a INNER JOIN clause to the query using the Booking relation
 *
 * @method     ChildCustomerShiptoQuery joinWithBooking($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Booking relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinWithBooking() Adds a LEFT JOIN clause and with to the query using the Booking relation
 * @method     ChildCustomerShiptoQuery rightJoinWithBooking() Adds a RIGHT JOIN clause and with to the query using the Booking relation
 * @method     ChildCustomerShiptoQuery innerJoinWithBooking() Adds a INNER JOIN clause and with to the query using the Booking relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinSalesHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesHistory relation
 * @method     ChildCustomerShiptoQuery rightJoinSalesHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesHistory relation
 * @method     ChildCustomerShiptoQuery innerJoinSalesHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesHistory relation
 *
 * @method     ChildCustomerShiptoQuery joinWithSalesHistory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesHistory relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinWithSalesHistory() Adds a LEFT JOIN clause and with to the query using the SalesHistory relation
 * @method     ChildCustomerShiptoQuery rightJoinWithSalesHistory() Adds a RIGHT JOIN clause and with to the query using the SalesHistory relation
 * @method     ChildCustomerShiptoQuery innerJoinWithSalesHistory() Adds a INNER JOIN clause and with to the query using the SalesHistory relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinSalesOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrder relation
 * @method     ChildCustomerShiptoQuery rightJoinSalesOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrder relation
 * @method     ChildCustomerShiptoQuery innerJoinSalesOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrder relation
 *
 * @method     ChildCustomerShiptoQuery joinWithSalesOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrder relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinWithSalesOrder() Adds a LEFT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildCustomerShiptoQuery rightJoinWithSalesOrder() Adds a RIGHT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildCustomerShiptoQuery innerJoinWithSalesOrder() Adds a INNER JOIN clause and with to the query using the SalesOrder relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinSoStandingOrderDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoStandingOrderDetail relation
 * @method     ChildCustomerShiptoQuery rightJoinSoStandingOrderDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoStandingOrderDetail relation
 * @method     ChildCustomerShiptoQuery innerJoinSoStandingOrderDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the SoStandingOrderDetail relation
 *
 * @method     ChildCustomerShiptoQuery joinWithSoStandingOrderDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SoStandingOrderDetail relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinWithSoStandingOrderDetail() Adds a LEFT JOIN clause and with to the query using the SoStandingOrderDetail relation
 * @method     ChildCustomerShiptoQuery rightJoinWithSoStandingOrderDetail() Adds a RIGHT JOIN clause and with to the query using the SoStandingOrderDetail relation
 * @method     ChildCustomerShiptoQuery innerJoinWithSoStandingOrderDetail() Adds a INNER JOIN clause and with to the query using the SoStandingOrderDetail relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinSoStandingOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the SoStandingOrder relation
 * @method     ChildCustomerShiptoQuery rightJoinSoStandingOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SoStandingOrder relation
 * @method     ChildCustomerShiptoQuery innerJoinSoStandingOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the SoStandingOrder relation
 *
 * @method     ChildCustomerShiptoQuery joinWithSoStandingOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SoStandingOrder relation
 *
 * @method     ChildCustomerShiptoQuery leftJoinWithSoStandingOrder() Adds a LEFT JOIN clause and with to the query using the SoStandingOrder relation
 * @method     ChildCustomerShiptoQuery rightJoinWithSoStandingOrder() Adds a RIGHT JOIN clause and with to the query using the SoStandingOrder relation
 * @method     ChildCustomerShiptoQuery innerJoinWithSoStandingOrder() Adds a INNER JOIN clause and with to the query using the SoStandingOrder relation
 *
 * @method     \CustomerQuery|\ArContactQuery|\InvTransferOrderQuery|\NoteCustInternalQuery|\NoteCustOrderQuery|\BookingDayCustomerQuery|\BookingDayDetailQuery|\BookingQuery|\SalesHistoryQuery|\SalesOrderQuery|\SoStandingOrderDetailQuery|\SoStandingOrderQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCustomerShipto|null findOne(?ConnectionInterface $con = null) Return the first ChildCustomerShipto matching the query
 * @method     ChildCustomerShipto findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildCustomerShipto matching the query, or a new ChildCustomerShipto object populated from the query conditions when no match is found
 *
 * @method     ChildCustomerShipto|null findOneByArcucustid(string $ArcuCustId) Return the first ChildCustomerShipto filtered by the ArcuCustId column
 * @method     ChildCustomerShipto|null findOneByArstshipid(string $ArstShipId) Return the first ChildCustomerShipto filtered by the ArstShipId column
 * @method     ChildCustomerShipto|null findOneByArstname(string $ArstName) Return the first ChildCustomerShipto filtered by the ArstName column
 * @method     ChildCustomerShipto|null findOneByArstadr1(string $ArstAdr1) Return the first ChildCustomerShipto filtered by the ArstAdr1 column
 * @method     ChildCustomerShipto|null findOneByArstadr2(string $ArstAdr2) Return the first ChildCustomerShipto filtered by the ArstAdr2 column
 * @method     ChildCustomerShipto|null findOneByArstadr3(string $ArstAdr3) Return the first ChildCustomerShipto filtered by the ArstAdr3 column
 * @method     ChildCustomerShipto|null findOneByArstctry(string $ArstCtry) Return the first ChildCustomerShipto filtered by the ArstCtry column
 * @method     ChildCustomerShipto|null findOneByArstcity(string $ArstCity) Return the first ChildCustomerShipto filtered by the ArstCity column
 * @method     ChildCustomerShipto|null findOneByArststat(string $ArstStat) Return the first ChildCustomerShipto filtered by the ArstStat column
 * @method     ChildCustomerShipto|null findOneByArstzipcode(string $ArstZipCode) Return the first ChildCustomerShipto filtered by the ArstZipCode column
 * @method     ChildCustomerShipto|null findOneByArstdeliverydays(int $ArstDeliveryDays) Return the first ChildCustomerShipto filtered by the ArstDeliveryDays column
 * @method     ChildCustomerShipto|null findOneByArstcommcode(string $ArstCommCode) Return the first ChildCustomerShipto filtered by the ArstCommCode column
 * @method     ChildCustomerShipto|null findOneByArstallowsplit(string $ArstAllowSplit) Return the first ChildCustomerShipto filtered by the ArstAllowSplit column
 * @method     ChildCustomerShipto|null findOneByArstlindstsp(string $ArstLindstSp) Return the first ChildCustomerShipto filtered by the ArstLindstSp column
 * @method     ChildCustomerShipto|null findOneByArstlmecommcustid(string $ArstLmEcommCustId) Return the first ChildCustomerShipto filtered by the ArstLmEcommCustId column
 * @method     ChildCustomerShipto|null findOneByArstcatlgid(string $ArstCatlgId) Return the first ChildCustomerShipto filtered by the ArstCatlgId column
 * @method     ChildCustomerShipto|null findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildCustomerShipto filtered by the ArspSalePer1 column
 * @method     ChildCustomerShipto|null findOneByArspsaleper2(string $ArspSalePer2) Return the first ChildCustomerShipto filtered by the ArspSalePer2 column
 * @method     ChildCustomerShipto|null findOneByArspsaleper3(string $ArspSalePer3) Return the first ChildCustomerShipto filtered by the ArspSalePer3 column
 * @method     ChildCustomerShipto|null findOneByArtbctaxcode(string $ArtbCtaxCode) Return the first ChildCustomerShipto filtered by the ArtbCtaxCode column
 * @method     ChildCustomerShipto|null findOneByArsttaxexemnbr(string $ArstTaxExemNbr) Return the first ChildCustomerShipto filtered by the ArstTaxExemNbr column
 * @method     ChildCustomerShipto|null findOneByIntbwhse(string $IntbWhse) Return the first ChildCustomerShipto filtered by the IntbWhse column
 * @method     ChildCustomerShipto|null findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildCustomerShipto filtered by the ArtbShipVia column
 * @method     ChildCustomerShipto|null findOneByArstbord(string $ArstBord) Return the first ChildCustomerShipto filtered by the ArstBord column
 * @method     ChildCustomerShipto|null findOneByArstcredhold(string $ArstCredHold) Return the first ChildCustomerShipto filtered by the ArstCredHold column
 * @method     ChildCustomerShipto|null findOneByArstusercode(string $ArstUserCode) Return the first ChildCustomerShipto filtered by the ArstUserCode column
 * @method     ChildCustomerShipto|null findOneByArstpriclvl(string $ArstPricLvl) Return the first ChildCustomerShipto filtered by the ArstPricLvl column
 * @method     ChildCustomerShipto|null findOneByArstshipcomp(string $ArstShipComp) Return the first ChildCustomerShipto filtered by the ArstShipComp column
 * @method     ChildCustomerShipto|null findOneByArsttxbl(string $ArstTxbl) Return the first ChildCustomerShipto filtered by the ArstTxbl column
 * @method     ChildCustomerShipto|null findOneByArstpostal(string $ArstPostal) Return the first ChildCustomerShipto filtered by the ArstPostal column
 * @method     ChildCustomerShipto|null findOneByArstsalemtd(string $ArstSaleMtd) Return the first ChildCustomerShipto filtered by the ArstSaleMtd column
 * @method     ChildCustomerShipto|null findOneByArstinvmtd(int $ArstInvMtd) Return the first ChildCustomerShipto filtered by the ArstInvMtd column
 * @method     ChildCustomerShipto|null findOneByArstdateopen(string $ArstDateOpen) Return the first ChildCustomerShipto filtered by the ArstDateOpen column
 * @method     ChildCustomerShipto|null findOneByArstlastsaledate(string $ArstLastSaleDate) Return the first ChildCustomerShipto filtered by the ArstLastSaleDate column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo1(string $ArstSale24mo1) Return the first ChildCustomerShipto filtered by the ArstSale24mo1 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo1(int $ArstInv24mo1) Return the first ChildCustomerShipto filtered by the ArstInv24mo1 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo2(string $ArstSale24mo2) Return the first ChildCustomerShipto filtered by the ArstSale24mo2 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo2(int $ArstInv24mo2) Return the first ChildCustomerShipto filtered by the ArstInv24mo2 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo3(string $ArstSale24mo3) Return the first ChildCustomerShipto filtered by the ArstSale24mo3 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo3(int $ArstInv24mo3) Return the first ChildCustomerShipto filtered by the ArstInv24mo3 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo4(string $ArstSale24mo4) Return the first ChildCustomerShipto filtered by the ArstSale24mo4 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo4(int $ArstInv24mo4) Return the first ChildCustomerShipto filtered by the ArstInv24mo4 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo5(string $ArstSale24mo5) Return the first ChildCustomerShipto filtered by the ArstSale24mo5 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo5(int $ArstInv24mo5) Return the first ChildCustomerShipto filtered by the ArstInv24mo5 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo6(string $ArstSale24mo6) Return the first ChildCustomerShipto filtered by the ArstSale24mo6 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo6(int $ArstInv24mo6) Return the first ChildCustomerShipto filtered by the ArstInv24mo6 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo7(string $ArstSale24mo7) Return the first ChildCustomerShipto filtered by the ArstSale24mo7 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo7(int $ArstInv24mo7) Return the first ChildCustomerShipto filtered by the ArstInv24mo7 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo8(string $ArstSale24mo8) Return the first ChildCustomerShipto filtered by the ArstSale24mo8 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo8(int $ArstInv24mo8) Return the first ChildCustomerShipto filtered by the ArstInv24mo8 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo9(string $ArstSale24mo9) Return the first ChildCustomerShipto filtered by the ArstSale24mo9 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo9(int $ArstInv24mo9) Return the first ChildCustomerShipto filtered by the ArstInv24mo9 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo10(string $ArstSale24mo10) Return the first ChildCustomerShipto filtered by the ArstSale24mo10 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo10(int $ArstInv24mo10) Return the first ChildCustomerShipto filtered by the ArstInv24mo10 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo11(string $ArstSale24mo11) Return the first ChildCustomerShipto filtered by the ArstSale24mo11 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo11(int $ArstInv24mo11) Return the first ChildCustomerShipto filtered by the ArstInv24mo11 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo12(string $ArstSale24mo12) Return the first ChildCustomerShipto filtered by the ArstSale24mo12 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo12(int $ArstInv24mo12) Return the first ChildCustomerShipto filtered by the ArstInv24mo12 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo13(string $ArstSale24mo13) Return the first ChildCustomerShipto filtered by the ArstSale24mo13 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo13(int $ArstInv24mo13) Return the first ChildCustomerShipto filtered by the ArstInv24mo13 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo14(string $ArstSale24mo14) Return the first ChildCustomerShipto filtered by the ArstSale24mo14 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo14(int $ArstInv24mo14) Return the first ChildCustomerShipto filtered by the ArstInv24mo14 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo15(string $ArstSale24mo15) Return the first ChildCustomerShipto filtered by the ArstSale24mo15 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo15(int $ArstInv24mo15) Return the first ChildCustomerShipto filtered by the ArstInv24mo15 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo16(string $ArstSale24mo16) Return the first ChildCustomerShipto filtered by the ArstSale24mo16 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo16(int $ArstInv24mo16) Return the first ChildCustomerShipto filtered by the ArstInv24mo16 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo17(string $ArstSale24mo17) Return the first ChildCustomerShipto filtered by the ArstSale24mo17 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo17(int $ArstInv24mo17) Return the first ChildCustomerShipto filtered by the ArstInv24mo17 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo18(string $ArstSale24mo18) Return the first ChildCustomerShipto filtered by the ArstSale24mo18 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo18(int $ArstInv24mo18) Return the first ChildCustomerShipto filtered by the ArstInv24mo18 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo19(string $ArstSale24mo19) Return the first ChildCustomerShipto filtered by the ArstSale24mo19 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo19(int $ArstInv24mo19) Return the first ChildCustomerShipto filtered by the ArstInv24mo19 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo20(string $ArstSale24mo20) Return the first ChildCustomerShipto filtered by the ArstSale24mo20 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo20(int $ArstInv24mo20) Return the first ChildCustomerShipto filtered by the ArstInv24mo20 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo21(string $ArstSale24mo21) Return the first ChildCustomerShipto filtered by the ArstSale24mo21 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo21(int $ArstInv24mo21) Return the first ChildCustomerShipto filtered by the ArstInv24mo21 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo22(string $ArstSale24mo22) Return the first ChildCustomerShipto filtered by the ArstSale24mo22 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo22(int $ArstInv24mo22) Return the first ChildCustomerShipto filtered by the ArstInv24mo22 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo23(string $ArstSale24mo23) Return the first ChildCustomerShipto filtered by the ArstSale24mo23 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo23(int $ArstInv24mo23) Return the first ChildCustomerShipto filtered by the ArstInv24mo23 column
 * @method     ChildCustomerShipto|null findOneByArstsale24mo24(string $ArstSale24mo24) Return the first ChildCustomerShipto filtered by the ArstSale24mo24 column
 * @method     ChildCustomerShipto|null findOneByArstinv24mo24(int $ArstInv24mo24) Return the first ChildCustomerShipto filtered by the ArstInv24mo24 column
 * @method     ChildCustomerShipto|null findOneByArstprimshipid(string $ArstPrimShipId) Return the first ChildCustomerShipto filtered by the ArstPrimShipId column
 * @method     ChildCustomerShipto|null findOneByArstmyvendid(string $ArstMyVendId) Return the first ChildCustomerShipto filtered by the ArstMyVendId column
 * @method     ChildCustomerShipto|null findOneByArstaddlpricdisc(string $ArstAddlPricDisc) Return the first ChildCustomerShipto filtered by the ArstAddlPricDisc column
 * @method     ChildCustomerShipto|null findOneByArstediinvc(string $ArstEdiInvc) Return the first ChildCustomerShipto filtered by the ArstEdiInvc column
 * @method     ChildCustomerShipto|null findOneByArstchrgfrt(string $ArstChrgFrt) Return the first ChildCustomerShipto filtered by the ArstChrgFrt column
 * @method     ChildCustomerShipto|null findOneByArstdistcntr(string $ArstDistCntr) Return the first ChildCustomerShipto filtered by the ArstDistCntr column
 * @method     ChildCustomerShipto|null findOneByArstdunsnbr(string $ArstDunsNbr) Return the first ChildCustomerShipto filtered by the ArstDunsNbr column
 * @method     ChildCustomerShipto|null findOneByArstrfmlvalu(int $ArstRfmlValu) Return the first ChildCustomerShipto filtered by the ArstRfmlValu column
 * @method     ChildCustomerShipto|null findOneByArstcustpoparam(string $ArstCustPoParam) Return the first ChildCustomerShipto filtered by the ArstCustPoParam column
 * @method     ChildCustomerShipto|null findOneByArtbroutcode(string $ArtbRoutCode) Return the first ChildCustomerShipto filtered by the ArtbRoutCode column
 * @method     ChildCustomerShipto|null findOneByArstupsacctnbr(string $ArstUpsAcctNbr) Return the first ChildCustomerShipto filtered by the ArstUpsAcctNbr column
 * @method     ChildCustomerShipto|null findOneByArstfobinputyn(string $ArstFobInputYn) Return the first ChildCustomerShipto filtered by the ArstFobInputYn column
 * @method     ChildCustomerShipto|null findOneByArstfobperlb(string $ArstFobPerLb) Return the first ChildCustomerShipto filtered by the ArstFobPerLb column
 * @method     ChildCustomerShipto|null findOneByArstsaleytd(string $ArstSaleYtd) Return the first ChildCustomerShipto filtered by the ArstSaleYtd column
 * @method     ChildCustomerShipto|null findOneByArstinvytd(int $ArstInvYtd) Return the first ChildCustomerShipto filtered by the ArstInvYtd column
 * @method     ChildCustomerShipto|null findOneByArstemailfaxauthcode(string $ArstEmailFaxAuthCode) Return the first ChildCustomerShipto filtered by the ArstEmailFaxAuthCode column
 * @method     ChildCustomerShipto|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerShipto filtered by the DateUpdtd column
 * @method     ChildCustomerShipto|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerShipto filtered by the TimeUpdtd column
 * @method     ChildCustomerShipto|null findOneByDummy(string $dummy) Return the first ChildCustomerShipto filtered by the dummy column
 *
 * @method     ChildCustomerShipto requirePk($key, ?ConnectionInterface $con = null) Return the ChildCustomerShipto by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOne(?ConnectionInterface $con = null) Return the first ChildCustomerShipto matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerShipto requireOneByArcucustid(string $ArcuCustId) Return the first ChildCustomerShipto filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstshipid(string $ArstShipId) Return the first ChildCustomerShipto filtered by the ArstShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstname(string $ArstName) Return the first ChildCustomerShipto filtered by the ArstName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstadr1(string $ArstAdr1) Return the first ChildCustomerShipto filtered by the ArstAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstadr2(string $ArstAdr2) Return the first ChildCustomerShipto filtered by the ArstAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstadr3(string $ArstAdr3) Return the first ChildCustomerShipto filtered by the ArstAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstctry(string $ArstCtry) Return the first ChildCustomerShipto filtered by the ArstCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstcity(string $ArstCity) Return the first ChildCustomerShipto filtered by the ArstCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArststat(string $ArstStat) Return the first ChildCustomerShipto filtered by the ArstStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstzipcode(string $ArstZipCode) Return the first ChildCustomerShipto filtered by the ArstZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstdeliverydays(int $ArstDeliveryDays) Return the first ChildCustomerShipto filtered by the ArstDeliveryDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstcommcode(string $ArstCommCode) Return the first ChildCustomerShipto filtered by the ArstCommCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstallowsplit(string $ArstAllowSplit) Return the first ChildCustomerShipto filtered by the ArstAllowSplit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstlindstsp(string $ArstLindstSp) Return the first ChildCustomerShipto filtered by the ArstLindstSp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstlmecommcustid(string $ArstLmEcommCustId) Return the first ChildCustomerShipto filtered by the ArstLmEcommCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstcatlgid(string $ArstCatlgId) Return the first ChildCustomerShipto filtered by the ArstCatlgId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildCustomerShipto filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArspsaleper2(string $ArspSalePer2) Return the first ChildCustomerShipto filtered by the ArspSalePer2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArspsaleper3(string $ArspSalePer3) Return the first ChildCustomerShipto filtered by the ArspSalePer3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArtbctaxcode(string $ArtbCtaxCode) Return the first ChildCustomerShipto filtered by the ArtbCtaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArsttaxexemnbr(string $ArstTaxExemNbr) Return the first ChildCustomerShipto filtered by the ArstTaxExemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByIntbwhse(string $IntbWhse) Return the first ChildCustomerShipto filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArtbshipvia(string $ArtbShipVia) Return the first ChildCustomerShipto filtered by the ArtbShipVia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstbord(string $ArstBord) Return the first ChildCustomerShipto filtered by the ArstBord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstcredhold(string $ArstCredHold) Return the first ChildCustomerShipto filtered by the ArstCredHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstusercode(string $ArstUserCode) Return the first ChildCustomerShipto filtered by the ArstUserCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstpriclvl(string $ArstPricLvl) Return the first ChildCustomerShipto filtered by the ArstPricLvl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstshipcomp(string $ArstShipComp) Return the first ChildCustomerShipto filtered by the ArstShipComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArsttxbl(string $ArstTxbl) Return the first ChildCustomerShipto filtered by the ArstTxbl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstpostal(string $ArstPostal) Return the first ChildCustomerShipto filtered by the ArstPostal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsalemtd(string $ArstSaleMtd) Return the first ChildCustomerShipto filtered by the ArstSaleMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinvmtd(int $ArstInvMtd) Return the first ChildCustomerShipto filtered by the ArstInvMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstdateopen(string $ArstDateOpen) Return the first ChildCustomerShipto filtered by the ArstDateOpen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstlastsaledate(string $ArstLastSaleDate) Return the first ChildCustomerShipto filtered by the ArstLastSaleDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo1(string $ArstSale24mo1) Return the first ChildCustomerShipto filtered by the ArstSale24mo1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo1(int $ArstInv24mo1) Return the first ChildCustomerShipto filtered by the ArstInv24mo1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo2(string $ArstSale24mo2) Return the first ChildCustomerShipto filtered by the ArstSale24mo2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo2(int $ArstInv24mo2) Return the first ChildCustomerShipto filtered by the ArstInv24mo2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo3(string $ArstSale24mo3) Return the first ChildCustomerShipto filtered by the ArstSale24mo3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo3(int $ArstInv24mo3) Return the first ChildCustomerShipto filtered by the ArstInv24mo3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo4(string $ArstSale24mo4) Return the first ChildCustomerShipto filtered by the ArstSale24mo4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo4(int $ArstInv24mo4) Return the first ChildCustomerShipto filtered by the ArstInv24mo4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo5(string $ArstSale24mo5) Return the first ChildCustomerShipto filtered by the ArstSale24mo5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo5(int $ArstInv24mo5) Return the first ChildCustomerShipto filtered by the ArstInv24mo5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo6(string $ArstSale24mo6) Return the first ChildCustomerShipto filtered by the ArstSale24mo6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo6(int $ArstInv24mo6) Return the first ChildCustomerShipto filtered by the ArstInv24mo6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo7(string $ArstSale24mo7) Return the first ChildCustomerShipto filtered by the ArstSale24mo7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo7(int $ArstInv24mo7) Return the first ChildCustomerShipto filtered by the ArstInv24mo7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo8(string $ArstSale24mo8) Return the first ChildCustomerShipto filtered by the ArstSale24mo8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo8(int $ArstInv24mo8) Return the first ChildCustomerShipto filtered by the ArstInv24mo8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo9(string $ArstSale24mo9) Return the first ChildCustomerShipto filtered by the ArstSale24mo9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo9(int $ArstInv24mo9) Return the first ChildCustomerShipto filtered by the ArstInv24mo9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo10(string $ArstSale24mo10) Return the first ChildCustomerShipto filtered by the ArstSale24mo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo10(int $ArstInv24mo10) Return the first ChildCustomerShipto filtered by the ArstInv24mo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo11(string $ArstSale24mo11) Return the first ChildCustomerShipto filtered by the ArstSale24mo11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo11(int $ArstInv24mo11) Return the first ChildCustomerShipto filtered by the ArstInv24mo11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo12(string $ArstSale24mo12) Return the first ChildCustomerShipto filtered by the ArstSale24mo12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo12(int $ArstInv24mo12) Return the first ChildCustomerShipto filtered by the ArstInv24mo12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo13(string $ArstSale24mo13) Return the first ChildCustomerShipto filtered by the ArstSale24mo13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo13(int $ArstInv24mo13) Return the first ChildCustomerShipto filtered by the ArstInv24mo13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo14(string $ArstSale24mo14) Return the first ChildCustomerShipto filtered by the ArstSale24mo14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo14(int $ArstInv24mo14) Return the first ChildCustomerShipto filtered by the ArstInv24mo14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo15(string $ArstSale24mo15) Return the first ChildCustomerShipto filtered by the ArstSale24mo15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo15(int $ArstInv24mo15) Return the first ChildCustomerShipto filtered by the ArstInv24mo15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo16(string $ArstSale24mo16) Return the first ChildCustomerShipto filtered by the ArstSale24mo16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo16(int $ArstInv24mo16) Return the first ChildCustomerShipto filtered by the ArstInv24mo16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo17(string $ArstSale24mo17) Return the first ChildCustomerShipto filtered by the ArstSale24mo17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo17(int $ArstInv24mo17) Return the first ChildCustomerShipto filtered by the ArstInv24mo17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo18(string $ArstSale24mo18) Return the first ChildCustomerShipto filtered by the ArstSale24mo18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo18(int $ArstInv24mo18) Return the first ChildCustomerShipto filtered by the ArstInv24mo18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo19(string $ArstSale24mo19) Return the first ChildCustomerShipto filtered by the ArstSale24mo19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo19(int $ArstInv24mo19) Return the first ChildCustomerShipto filtered by the ArstInv24mo19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo20(string $ArstSale24mo20) Return the first ChildCustomerShipto filtered by the ArstSale24mo20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo20(int $ArstInv24mo20) Return the first ChildCustomerShipto filtered by the ArstInv24mo20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo21(string $ArstSale24mo21) Return the first ChildCustomerShipto filtered by the ArstSale24mo21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo21(int $ArstInv24mo21) Return the first ChildCustomerShipto filtered by the ArstInv24mo21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo22(string $ArstSale24mo22) Return the first ChildCustomerShipto filtered by the ArstSale24mo22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo22(int $ArstInv24mo22) Return the first ChildCustomerShipto filtered by the ArstInv24mo22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo23(string $ArstSale24mo23) Return the first ChildCustomerShipto filtered by the ArstSale24mo23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo23(int $ArstInv24mo23) Return the first ChildCustomerShipto filtered by the ArstInv24mo23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsale24mo24(string $ArstSale24mo24) Return the first ChildCustomerShipto filtered by the ArstSale24mo24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinv24mo24(int $ArstInv24mo24) Return the first ChildCustomerShipto filtered by the ArstInv24mo24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstprimshipid(string $ArstPrimShipId) Return the first ChildCustomerShipto filtered by the ArstPrimShipId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstmyvendid(string $ArstMyVendId) Return the first ChildCustomerShipto filtered by the ArstMyVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstaddlpricdisc(string $ArstAddlPricDisc) Return the first ChildCustomerShipto filtered by the ArstAddlPricDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstediinvc(string $ArstEdiInvc) Return the first ChildCustomerShipto filtered by the ArstEdiInvc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstchrgfrt(string $ArstChrgFrt) Return the first ChildCustomerShipto filtered by the ArstChrgFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstdistcntr(string $ArstDistCntr) Return the first ChildCustomerShipto filtered by the ArstDistCntr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstdunsnbr(string $ArstDunsNbr) Return the first ChildCustomerShipto filtered by the ArstDunsNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstrfmlvalu(int $ArstRfmlValu) Return the first ChildCustomerShipto filtered by the ArstRfmlValu column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstcustpoparam(string $ArstCustPoParam) Return the first ChildCustomerShipto filtered by the ArstCustPoParam column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArtbroutcode(string $ArtbRoutCode) Return the first ChildCustomerShipto filtered by the ArtbRoutCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstupsacctnbr(string $ArstUpsAcctNbr) Return the first ChildCustomerShipto filtered by the ArstUpsAcctNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstfobinputyn(string $ArstFobInputYn) Return the first ChildCustomerShipto filtered by the ArstFobInputYn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstfobperlb(string $ArstFobPerLb) Return the first ChildCustomerShipto filtered by the ArstFobPerLb column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstsaleytd(string $ArstSaleYtd) Return the first ChildCustomerShipto filtered by the ArstSaleYtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstinvytd(int $ArstInvYtd) Return the first ChildCustomerShipto filtered by the ArstInvYtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByArstemailfaxauthcode(string $ArstEmailFaxAuthCode) Return the first ChildCustomerShipto filtered by the ArstEmailFaxAuthCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerShipto filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerShipto filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOneByDummy(string $dummy) Return the first ChildCustomerShipto filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomerShipto[]|Collection find(?ConnectionInterface $con = null) Return ChildCustomerShipto objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> find(?ConnectionInterface $con = null) Return ChildCustomerShipto objects based on current ModelCriteria
 *
 * @method     ChildCustomerShipto[]|Collection findByArcucustid(string|array<string> $ArcuCustId) Return ChildCustomerShipto objects filtered by the ArcuCustId column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArcucustid(string|array<string> $ArcuCustId) Return ChildCustomerShipto objects filtered by the ArcuCustId column
 * @method     ChildCustomerShipto[]|Collection findByArstshipid(string|array<string> $ArstShipId) Return ChildCustomerShipto objects filtered by the ArstShipId column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstshipid(string|array<string> $ArstShipId) Return ChildCustomerShipto objects filtered by the ArstShipId column
 * @method     ChildCustomerShipto[]|Collection findByArstname(string|array<string> $ArstName) Return ChildCustomerShipto objects filtered by the ArstName column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstname(string|array<string> $ArstName) Return ChildCustomerShipto objects filtered by the ArstName column
 * @method     ChildCustomerShipto[]|Collection findByArstadr1(string|array<string> $ArstAdr1) Return ChildCustomerShipto objects filtered by the ArstAdr1 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstadr1(string|array<string> $ArstAdr1) Return ChildCustomerShipto objects filtered by the ArstAdr1 column
 * @method     ChildCustomerShipto[]|Collection findByArstadr2(string|array<string> $ArstAdr2) Return ChildCustomerShipto objects filtered by the ArstAdr2 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstadr2(string|array<string> $ArstAdr2) Return ChildCustomerShipto objects filtered by the ArstAdr2 column
 * @method     ChildCustomerShipto[]|Collection findByArstadr3(string|array<string> $ArstAdr3) Return ChildCustomerShipto objects filtered by the ArstAdr3 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstadr3(string|array<string> $ArstAdr3) Return ChildCustomerShipto objects filtered by the ArstAdr3 column
 * @method     ChildCustomerShipto[]|Collection findByArstctry(string|array<string> $ArstCtry) Return ChildCustomerShipto objects filtered by the ArstCtry column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstctry(string|array<string> $ArstCtry) Return ChildCustomerShipto objects filtered by the ArstCtry column
 * @method     ChildCustomerShipto[]|Collection findByArstcity(string|array<string> $ArstCity) Return ChildCustomerShipto objects filtered by the ArstCity column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstcity(string|array<string> $ArstCity) Return ChildCustomerShipto objects filtered by the ArstCity column
 * @method     ChildCustomerShipto[]|Collection findByArststat(string|array<string> $ArstStat) Return ChildCustomerShipto objects filtered by the ArstStat column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArststat(string|array<string> $ArstStat) Return ChildCustomerShipto objects filtered by the ArstStat column
 * @method     ChildCustomerShipto[]|Collection findByArstzipcode(string|array<string> $ArstZipCode) Return ChildCustomerShipto objects filtered by the ArstZipCode column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstzipcode(string|array<string> $ArstZipCode) Return ChildCustomerShipto objects filtered by the ArstZipCode column
 * @method     ChildCustomerShipto[]|Collection findByArstdeliverydays(int|array<int> $ArstDeliveryDays) Return ChildCustomerShipto objects filtered by the ArstDeliveryDays column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstdeliverydays(int|array<int> $ArstDeliveryDays) Return ChildCustomerShipto objects filtered by the ArstDeliveryDays column
 * @method     ChildCustomerShipto[]|Collection findByArstcommcode(string|array<string> $ArstCommCode) Return ChildCustomerShipto objects filtered by the ArstCommCode column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstcommcode(string|array<string> $ArstCommCode) Return ChildCustomerShipto objects filtered by the ArstCommCode column
 * @method     ChildCustomerShipto[]|Collection findByArstallowsplit(string|array<string> $ArstAllowSplit) Return ChildCustomerShipto objects filtered by the ArstAllowSplit column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstallowsplit(string|array<string> $ArstAllowSplit) Return ChildCustomerShipto objects filtered by the ArstAllowSplit column
 * @method     ChildCustomerShipto[]|Collection findByArstlindstsp(string|array<string> $ArstLindstSp) Return ChildCustomerShipto objects filtered by the ArstLindstSp column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstlindstsp(string|array<string> $ArstLindstSp) Return ChildCustomerShipto objects filtered by the ArstLindstSp column
 * @method     ChildCustomerShipto[]|Collection findByArstlmecommcustid(string|array<string> $ArstLmEcommCustId) Return ChildCustomerShipto objects filtered by the ArstLmEcommCustId column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstlmecommcustid(string|array<string> $ArstLmEcommCustId) Return ChildCustomerShipto objects filtered by the ArstLmEcommCustId column
 * @method     ChildCustomerShipto[]|Collection findByArstcatlgid(string|array<string> $ArstCatlgId) Return ChildCustomerShipto objects filtered by the ArstCatlgId column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstcatlgid(string|array<string> $ArstCatlgId) Return ChildCustomerShipto objects filtered by the ArstCatlgId column
 * @method     ChildCustomerShipto[]|Collection findByArspsaleper1(string|array<string> $ArspSalePer1) Return ChildCustomerShipto objects filtered by the ArspSalePer1 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArspsaleper1(string|array<string> $ArspSalePer1) Return ChildCustomerShipto objects filtered by the ArspSalePer1 column
 * @method     ChildCustomerShipto[]|Collection findByArspsaleper2(string|array<string> $ArspSalePer2) Return ChildCustomerShipto objects filtered by the ArspSalePer2 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArspsaleper2(string|array<string> $ArspSalePer2) Return ChildCustomerShipto objects filtered by the ArspSalePer2 column
 * @method     ChildCustomerShipto[]|Collection findByArspsaleper3(string|array<string> $ArspSalePer3) Return ChildCustomerShipto objects filtered by the ArspSalePer3 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArspsaleper3(string|array<string> $ArspSalePer3) Return ChildCustomerShipto objects filtered by the ArspSalePer3 column
 * @method     ChildCustomerShipto[]|Collection findByArtbctaxcode(string|array<string> $ArtbCtaxCode) Return ChildCustomerShipto objects filtered by the ArtbCtaxCode column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArtbctaxcode(string|array<string> $ArtbCtaxCode) Return ChildCustomerShipto objects filtered by the ArtbCtaxCode column
 * @method     ChildCustomerShipto[]|Collection findByArsttaxexemnbr(string|array<string> $ArstTaxExemNbr) Return ChildCustomerShipto objects filtered by the ArstTaxExemNbr column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArsttaxexemnbr(string|array<string> $ArstTaxExemNbr) Return ChildCustomerShipto objects filtered by the ArstTaxExemNbr column
 * @method     ChildCustomerShipto[]|Collection findByIntbwhse(string|array<string> $IntbWhse) Return ChildCustomerShipto objects filtered by the IntbWhse column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByIntbwhse(string|array<string> $IntbWhse) Return ChildCustomerShipto objects filtered by the IntbWhse column
 * @method     ChildCustomerShipto[]|Collection findByArtbshipvia(string|array<string> $ArtbShipVia) Return ChildCustomerShipto objects filtered by the ArtbShipVia column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArtbshipvia(string|array<string> $ArtbShipVia) Return ChildCustomerShipto objects filtered by the ArtbShipVia column
 * @method     ChildCustomerShipto[]|Collection findByArstbord(string|array<string> $ArstBord) Return ChildCustomerShipto objects filtered by the ArstBord column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstbord(string|array<string> $ArstBord) Return ChildCustomerShipto objects filtered by the ArstBord column
 * @method     ChildCustomerShipto[]|Collection findByArstcredhold(string|array<string> $ArstCredHold) Return ChildCustomerShipto objects filtered by the ArstCredHold column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstcredhold(string|array<string> $ArstCredHold) Return ChildCustomerShipto objects filtered by the ArstCredHold column
 * @method     ChildCustomerShipto[]|Collection findByArstusercode(string|array<string> $ArstUserCode) Return ChildCustomerShipto objects filtered by the ArstUserCode column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstusercode(string|array<string> $ArstUserCode) Return ChildCustomerShipto objects filtered by the ArstUserCode column
 * @method     ChildCustomerShipto[]|Collection findByArstpriclvl(string|array<string> $ArstPricLvl) Return ChildCustomerShipto objects filtered by the ArstPricLvl column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstpriclvl(string|array<string> $ArstPricLvl) Return ChildCustomerShipto objects filtered by the ArstPricLvl column
 * @method     ChildCustomerShipto[]|Collection findByArstshipcomp(string|array<string> $ArstShipComp) Return ChildCustomerShipto objects filtered by the ArstShipComp column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstshipcomp(string|array<string> $ArstShipComp) Return ChildCustomerShipto objects filtered by the ArstShipComp column
 * @method     ChildCustomerShipto[]|Collection findByArsttxbl(string|array<string> $ArstTxbl) Return ChildCustomerShipto objects filtered by the ArstTxbl column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArsttxbl(string|array<string> $ArstTxbl) Return ChildCustomerShipto objects filtered by the ArstTxbl column
 * @method     ChildCustomerShipto[]|Collection findByArstpostal(string|array<string> $ArstPostal) Return ChildCustomerShipto objects filtered by the ArstPostal column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstpostal(string|array<string> $ArstPostal) Return ChildCustomerShipto objects filtered by the ArstPostal column
 * @method     ChildCustomerShipto[]|Collection findByArstsalemtd(string|array<string> $ArstSaleMtd) Return ChildCustomerShipto objects filtered by the ArstSaleMtd column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsalemtd(string|array<string> $ArstSaleMtd) Return ChildCustomerShipto objects filtered by the ArstSaleMtd column
 * @method     ChildCustomerShipto[]|Collection findByArstinvmtd(int|array<int> $ArstInvMtd) Return ChildCustomerShipto objects filtered by the ArstInvMtd column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinvmtd(int|array<int> $ArstInvMtd) Return ChildCustomerShipto objects filtered by the ArstInvMtd column
 * @method     ChildCustomerShipto[]|Collection findByArstdateopen(string|array<string> $ArstDateOpen) Return ChildCustomerShipto objects filtered by the ArstDateOpen column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstdateopen(string|array<string> $ArstDateOpen) Return ChildCustomerShipto objects filtered by the ArstDateOpen column
 * @method     ChildCustomerShipto[]|Collection findByArstlastsaledate(string|array<string> $ArstLastSaleDate) Return ChildCustomerShipto objects filtered by the ArstLastSaleDate column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstlastsaledate(string|array<string> $ArstLastSaleDate) Return ChildCustomerShipto objects filtered by the ArstLastSaleDate column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo1(string|array<string> $ArstSale24mo1) Return ChildCustomerShipto objects filtered by the ArstSale24mo1 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo1(string|array<string> $ArstSale24mo1) Return ChildCustomerShipto objects filtered by the ArstSale24mo1 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo1(int|array<int> $ArstInv24mo1) Return ChildCustomerShipto objects filtered by the ArstInv24mo1 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo1(int|array<int> $ArstInv24mo1) Return ChildCustomerShipto objects filtered by the ArstInv24mo1 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo2(string|array<string> $ArstSale24mo2) Return ChildCustomerShipto objects filtered by the ArstSale24mo2 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo2(string|array<string> $ArstSale24mo2) Return ChildCustomerShipto objects filtered by the ArstSale24mo2 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo2(int|array<int> $ArstInv24mo2) Return ChildCustomerShipto objects filtered by the ArstInv24mo2 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo2(int|array<int> $ArstInv24mo2) Return ChildCustomerShipto objects filtered by the ArstInv24mo2 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo3(string|array<string> $ArstSale24mo3) Return ChildCustomerShipto objects filtered by the ArstSale24mo3 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo3(string|array<string> $ArstSale24mo3) Return ChildCustomerShipto objects filtered by the ArstSale24mo3 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo3(int|array<int> $ArstInv24mo3) Return ChildCustomerShipto objects filtered by the ArstInv24mo3 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo3(int|array<int> $ArstInv24mo3) Return ChildCustomerShipto objects filtered by the ArstInv24mo3 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo4(string|array<string> $ArstSale24mo4) Return ChildCustomerShipto objects filtered by the ArstSale24mo4 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo4(string|array<string> $ArstSale24mo4) Return ChildCustomerShipto objects filtered by the ArstSale24mo4 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo4(int|array<int> $ArstInv24mo4) Return ChildCustomerShipto objects filtered by the ArstInv24mo4 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo4(int|array<int> $ArstInv24mo4) Return ChildCustomerShipto objects filtered by the ArstInv24mo4 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo5(string|array<string> $ArstSale24mo5) Return ChildCustomerShipto objects filtered by the ArstSale24mo5 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo5(string|array<string> $ArstSale24mo5) Return ChildCustomerShipto objects filtered by the ArstSale24mo5 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo5(int|array<int> $ArstInv24mo5) Return ChildCustomerShipto objects filtered by the ArstInv24mo5 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo5(int|array<int> $ArstInv24mo5) Return ChildCustomerShipto objects filtered by the ArstInv24mo5 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo6(string|array<string> $ArstSale24mo6) Return ChildCustomerShipto objects filtered by the ArstSale24mo6 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo6(string|array<string> $ArstSale24mo6) Return ChildCustomerShipto objects filtered by the ArstSale24mo6 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo6(int|array<int> $ArstInv24mo6) Return ChildCustomerShipto objects filtered by the ArstInv24mo6 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo6(int|array<int> $ArstInv24mo6) Return ChildCustomerShipto objects filtered by the ArstInv24mo6 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo7(string|array<string> $ArstSale24mo7) Return ChildCustomerShipto objects filtered by the ArstSale24mo7 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo7(string|array<string> $ArstSale24mo7) Return ChildCustomerShipto objects filtered by the ArstSale24mo7 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo7(int|array<int> $ArstInv24mo7) Return ChildCustomerShipto objects filtered by the ArstInv24mo7 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo7(int|array<int> $ArstInv24mo7) Return ChildCustomerShipto objects filtered by the ArstInv24mo7 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo8(string|array<string> $ArstSale24mo8) Return ChildCustomerShipto objects filtered by the ArstSale24mo8 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo8(string|array<string> $ArstSale24mo8) Return ChildCustomerShipto objects filtered by the ArstSale24mo8 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo8(int|array<int> $ArstInv24mo8) Return ChildCustomerShipto objects filtered by the ArstInv24mo8 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo8(int|array<int> $ArstInv24mo8) Return ChildCustomerShipto objects filtered by the ArstInv24mo8 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo9(string|array<string> $ArstSale24mo9) Return ChildCustomerShipto objects filtered by the ArstSale24mo9 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo9(string|array<string> $ArstSale24mo9) Return ChildCustomerShipto objects filtered by the ArstSale24mo9 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo9(int|array<int> $ArstInv24mo9) Return ChildCustomerShipto objects filtered by the ArstInv24mo9 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo9(int|array<int> $ArstInv24mo9) Return ChildCustomerShipto objects filtered by the ArstInv24mo9 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo10(string|array<string> $ArstSale24mo10) Return ChildCustomerShipto objects filtered by the ArstSale24mo10 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo10(string|array<string> $ArstSale24mo10) Return ChildCustomerShipto objects filtered by the ArstSale24mo10 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo10(int|array<int> $ArstInv24mo10) Return ChildCustomerShipto objects filtered by the ArstInv24mo10 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo10(int|array<int> $ArstInv24mo10) Return ChildCustomerShipto objects filtered by the ArstInv24mo10 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo11(string|array<string> $ArstSale24mo11) Return ChildCustomerShipto objects filtered by the ArstSale24mo11 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo11(string|array<string> $ArstSale24mo11) Return ChildCustomerShipto objects filtered by the ArstSale24mo11 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo11(int|array<int> $ArstInv24mo11) Return ChildCustomerShipto objects filtered by the ArstInv24mo11 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo11(int|array<int> $ArstInv24mo11) Return ChildCustomerShipto objects filtered by the ArstInv24mo11 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo12(string|array<string> $ArstSale24mo12) Return ChildCustomerShipto objects filtered by the ArstSale24mo12 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo12(string|array<string> $ArstSale24mo12) Return ChildCustomerShipto objects filtered by the ArstSale24mo12 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo12(int|array<int> $ArstInv24mo12) Return ChildCustomerShipto objects filtered by the ArstInv24mo12 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo12(int|array<int> $ArstInv24mo12) Return ChildCustomerShipto objects filtered by the ArstInv24mo12 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo13(string|array<string> $ArstSale24mo13) Return ChildCustomerShipto objects filtered by the ArstSale24mo13 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo13(string|array<string> $ArstSale24mo13) Return ChildCustomerShipto objects filtered by the ArstSale24mo13 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo13(int|array<int> $ArstInv24mo13) Return ChildCustomerShipto objects filtered by the ArstInv24mo13 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo13(int|array<int> $ArstInv24mo13) Return ChildCustomerShipto objects filtered by the ArstInv24mo13 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo14(string|array<string> $ArstSale24mo14) Return ChildCustomerShipto objects filtered by the ArstSale24mo14 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo14(string|array<string> $ArstSale24mo14) Return ChildCustomerShipto objects filtered by the ArstSale24mo14 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo14(int|array<int> $ArstInv24mo14) Return ChildCustomerShipto objects filtered by the ArstInv24mo14 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo14(int|array<int> $ArstInv24mo14) Return ChildCustomerShipto objects filtered by the ArstInv24mo14 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo15(string|array<string> $ArstSale24mo15) Return ChildCustomerShipto objects filtered by the ArstSale24mo15 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo15(string|array<string> $ArstSale24mo15) Return ChildCustomerShipto objects filtered by the ArstSale24mo15 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo15(int|array<int> $ArstInv24mo15) Return ChildCustomerShipto objects filtered by the ArstInv24mo15 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo15(int|array<int> $ArstInv24mo15) Return ChildCustomerShipto objects filtered by the ArstInv24mo15 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo16(string|array<string> $ArstSale24mo16) Return ChildCustomerShipto objects filtered by the ArstSale24mo16 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo16(string|array<string> $ArstSale24mo16) Return ChildCustomerShipto objects filtered by the ArstSale24mo16 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo16(int|array<int> $ArstInv24mo16) Return ChildCustomerShipto objects filtered by the ArstInv24mo16 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo16(int|array<int> $ArstInv24mo16) Return ChildCustomerShipto objects filtered by the ArstInv24mo16 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo17(string|array<string> $ArstSale24mo17) Return ChildCustomerShipto objects filtered by the ArstSale24mo17 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo17(string|array<string> $ArstSale24mo17) Return ChildCustomerShipto objects filtered by the ArstSale24mo17 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo17(int|array<int> $ArstInv24mo17) Return ChildCustomerShipto objects filtered by the ArstInv24mo17 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo17(int|array<int> $ArstInv24mo17) Return ChildCustomerShipto objects filtered by the ArstInv24mo17 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo18(string|array<string> $ArstSale24mo18) Return ChildCustomerShipto objects filtered by the ArstSale24mo18 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo18(string|array<string> $ArstSale24mo18) Return ChildCustomerShipto objects filtered by the ArstSale24mo18 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo18(int|array<int> $ArstInv24mo18) Return ChildCustomerShipto objects filtered by the ArstInv24mo18 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo18(int|array<int> $ArstInv24mo18) Return ChildCustomerShipto objects filtered by the ArstInv24mo18 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo19(string|array<string> $ArstSale24mo19) Return ChildCustomerShipto objects filtered by the ArstSale24mo19 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo19(string|array<string> $ArstSale24mo19) Return ChildCustomerShipto objects filtered by the ArstSale24mo19 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo19(int|array<int> $ArstInv24mo19) Return ChildCustomerShipto objects filtered by the ArstInv24mo19 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo19(int|array<int> $ArstInv24mo19) Return ChildCustomerShipto objects filtered by the ArstInv24mo19 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo20(string|array<string> $ArstSale24mo20) Return ChildCustomerShipto objects filtered by the ArstSale24mo20 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo20(string|array<string> $ArstSale24mo20) Return ChildCustomerShipto objects filtered by the ArstSale24mo20 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo20(int|array<int> $ArstInv24mo20) Return ChildCustomerShipto objects filtered by the ArstInv24mo20 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo20(int|array<int> $ArstInv24mo20) Return ChildCustomerShipto objects filtered by the ArstInv24mo20 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo21(string|array<string> $ArstSale24mo21) Return ChildCustomerShipto objects filtered by the ArstSale24mo21 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo21(string|array<string> $ArstSale24mo21) Return ChildCustomerShipto objects filtered by the ArstSale24mo21 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo21(int|array<int> $ArstInv24mo21) Return ChildCustomerShipto objects filtered by the ArstInv24mo21 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo21(int|array<int> $ArstInv24mo21) Return ChildCustomerShipto objects filtered by the ArstInv24mo21 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo22(string|array<string> $ArstSale24mo22) Return ChildCustomerShipto objects filtered by the ArstSale24mo22 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo22(string|array<string> $ArstSale24mo22) Return ChildCustomerShipto objects filtered by the ArstSale24mo22 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo22(int|array<int> $ArstInv24mo22) Return ChildCustomerShipto objects filtered by the ArstInv24mo22 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo22(int|array<int> $ArstInv24mo22) Return ChildCustomerShipto objects filtered by the ArstInv24mo22 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo23(string|array<string> $ArstSale24mo23) Return ChildCustomerShipto objects filtered by the ArstSale24mo23 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo23(string|array<string> $ArstSale24mo23) Return ChildCustomerShipto objects filtered by the ArstSale24mo23 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo23(int|array<int> $ArstInv24mo23) Return ChildCustomerShipto objects filtered by the ArstInv24mo23 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo23(int|array<int> $ArstInv24mo23) Return ChildCustomerShipto objects filtered by the ArstInv24mo23 column
 * @method     ChildCustomerShipto[]|Collection findByArstsale24mo24(string|array<string> $ArstSale24mo24) Return ChildCustomerShipto objects filtered by the ArstSale24mo24 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsale24mo24(string|array<string> $ArstSale24mo24) Return ChildCustomerShipto objects filtered by the ArstSale24mo24 column
 * @method     ChildCustomerShipto[]|Collection findByArstinv24mo24(int|array<int> $ArstInv24mo24) Return ChildCustomerShipto objects filtered by the ArstInv24mo24 column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinv24mo24(int|array<int> $ArstInv24mo24) Return ChildCustomerShipto objects filtered by the ArstInv24mo24 column
 * @method     ChildCustomerShipto[]|Collection findByArstprimshipid(string|array<string> $ArstPrimShipId) Return ChildCustomerShipto objects filtered by the ArstPrimShipId column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstprimshipid(string|array<string> $ArstPrimShipId) Return ChildCustomerShipto objects filtered by the ArstPrimShipId column
 * @method     ChildCustomerShipto[]|Collection findByArstmyvendid(string|array<string> $ArstMyVendId) Return ChildCustomerShipto objects filtered by the ArstMyVendId column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstmyvendid(string|array<string> $ArstMyVendId) Return ChildCustomerShipto objects filtered by the ArstMyVendId column
 * @method     ChildCustomerShipto[]|Collection findByArstaddlpricdisc(string|array<string> $ArstAddlPricDisc) Return ChildCustomerShipto objects filtered by the ArstAddlPricDisc column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstaddlpricdisc(string|array<string> $ArstAddlPricDisc) Return ChildCustomerShipto objects filtered by the ArstAddlPricDisc column
 * @method     ChildCustomerShipto[]|Collection findByArstediinvc(string|array<string> $ArstEdiInvc) Return ChildCustomerShipto objects filtered by the ArstEdiInvc column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstediinvc(string|array<string> $ArstEdiInvc) Return ChildCustomerShipto objects filtered by the ArstEdiInvc column
 * @method     ChildCustomerShipto[]|Collection findByArstchrgfrt(string|array<string> $ArstChrgFrt) Return ChildCustomerShipto objects filtered by the ArstChrgFrt column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstchrgfrt(string|array<string> $ArstChrgFrt) Return ChildCustomerShipto objects filtered by the ArstChrgFrt column
 * @method     ChildCustomerShipto[]|Collection findByArstdistcntr(string|array<string> $ArstDistCntr) Return ChildCustomerShipto objects filtered by the ArstDistCntr column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstdistcntr(string|array<string> $ArstDistCntr) Return ChildCustomerShipto objects filtered by the ArstDistCntr column
 * @method     ChildCustomerShipto[]|Collection findByArstdunsnbr(string|array<string> $ArstDunsNbr) Return ChildCustomerShipto objects filtered by the ArstDunsNbr column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstdunsnbr(string|array<string> $ArstDunsNbr) Return ChildCustomerShipto objects filtered by the ArstDunsNbr column
 * @method     ChildCustomerShipto[]|Collection findByArstrfmlvalu(int|array<int> $ArstRfmlValu) Return ChildCustomerShipto objects filtered by the ArstRfmlValu column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstrfmlvalu(int|array<int> $ArstRfmlValu) Return ChildCustomerShipto objects filtered by the ArstRfmlValu column
 * @method     ChildCustomerShipto[]|Collection findByArstcustpoparam(string|array<string> $ArstCustPoParam) Return ChildCustomerShipto objects filtered by the ArstCustPoParam column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstcustpoparam(string|array<string> $ArstCustPoParam) Return ChildCustomerShipto objects filtered by the ArstCustPoParam column
 * @method     ChildCustomerShipto[]|Collection findByArtbroutcode(string|array<string> $ArtbRoutCode) Return ChildCustomerShipto objects filtered by the ArtbRoutCode column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArtbroutcode(string|array<string> $ArtbRoutCode) Return ChildCustomerShipto objects filtered by the ArtbRoutCode column
 * @method     ChildCustomerShipto[]|Collection findByArstupsacctnbr(string|array<string> $ArstUpsAcctNbr) Return ChildCustomerShipto objects filtered by the ArstUpsAcctNbr column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstupsacctnbr(string|array<string> $ArstUpsAcctNbr) Return ChildCustomerShipto objects filtered by the ArstUpsAcctNbr column
 * @method     ChildCustomerShipto[]|Collection findByArstfobinputyn(string|array<string> $ArstFobInputYn) Return ChildCustomerShipto objects filtered by the ArstFobInputYn column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstfobinputyn(string|array<string> $ArstFobInputYn) Return ChildCustomerShipto objects filtered by the ArstFobInputYn column
 * @method     ChildCustomerShipto[]|Collection findByArstfobperlb(string|array<string> $ArstFobPerLb) Return ChildCustomerShipto objects filtered by the ArstFobPerLb column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstfobperlb(string|array<string> $ArstFobPerLb) Return ChildCustomerShipto objects filtered by the ArstFobPerLb column
 * @method     ChildCustomerShipto[]|Collection findByArstsaleytd(string|array<string> $ArstSaleYtd) Return ChildCustomerShipto objects filtered by the ArstSaleYtd column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstsaleytd(string|array<string> $ArstSaleYtd) Return ChildCustomerShipto objects filtered by the ArstSaleYtd column
 * @method     ChildCustomerShipto[]|Collection findByArstinvytd(int|array<int> $ArstInvYtd) Return ChildCustomerShipto objects filtered by the ArstInvYtd column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstinvytd(int|array<int> $ArstInvYtd) Return ChildCustomerShipto objects filtered by the ArstInvYtd column
 * @method     ChildCustomerShipto[]|Collection findByArstemailfaxauthcode(string|array<string> $ArstEmailFaxAuthCode) Return ChildCustomerShipto objects filtered by the ArstEmailFaxAuthCode column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByArstemailfaxauthcode(string|array<string> $ArstEmailFaxAuthCode) Return ChildCustomerShipto objects filtered by the ArstEmailFaxAuthCode column
 * @method     ChildCustomerShipto[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildCustomerShipto objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildCustomerShipto objects filtered by the DateUpdtd column
 * @method     ChildCustomerShipto[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildCustomerShipto objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildCustomerShipto objects filtered by the TimeUpdtd column
 * @method     ChildCustomerShipto[]|Collection findByDummy(string|array<string> $dummy) Return ChildCustomerShipto objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildCustomerShipto> findByDummy(string|array<string> $dummy) Return ChildCustomerShipto objects filtered by the dummy column
 *
 * @method     ChildCustomerShipto[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildCustomerShipto> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class CustomerShiptoQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CustomerShiptoQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CustomerShipto', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCustomerShiptoQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCustomerShiptoQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildCustomerShiptoQuery) {
            return $criteria;
        }
        $query = new ChildCustomerShiptoQuery();
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
     * @param array[$ArcuCustId, $ArstShipId] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCustomerShipto|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CustomerShiptoTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CustomerShiptoTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildCustomerShipto A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, ArstShipId, ArstName, ArstAdr1, ArstAdr2, ArstAdr3, ArstCtry, ArstCity, ArstStat, ArstZipCode, ArstDeliveryDays, ArstCommCode, ArstAllowSplit, ArstLindstSp, ArstLmEcommCustId, ArstCatlgId, ArspSalePer1, ArspSalePer2, ArspSalePer3, ArtbCtaxCode, ArstTaxExemNbr, IntbWhse, ArtbShipVia, ArstBord, ArstCredHold, ArstUserCode, ArstPricLvl, ArstShipComp, ArstTxbl, ArstPostal, ArstSaleMtd, ArstInvMtd, ArstDateOpen, ArstLastSaleDate, ArstSale24mo1, ArstInv24mo1, ArstSale24mo2, ArstInv24mo2, ArstSale24mo3, ArstInv24mo3, ArstSale24mo4, ArstInv24mo4, ArstSale24mo5, ArstInv24mo5, ArstSale24mo6, ArstInv24mo6, ArstSale24mo7, ArstInv24mo7, ArstSale24mo8, ArstInv24mo8, ArstSale24mo9, ArstInv24mo9, ArstSale24mo10, ArstInv24mo10, ArstSale24mo11, ArstInv24mo11, ArstSale24mo12, ArstInv24mo12, ArstSale24mo13, ArstInv24mo13, ArstSale24mo14, ArstInv24mo14, ArstSale24mo15, ArstInv24mo15, ArstSale24mo16, ArstInv24mo16, ArstSale24mo17, ArstInv24mo17, ArstSale24mo18, ArstInv24mo18, ArstSale24mo19, ArstInv24mo19, ArstSale24mo20, ArstInv24mo20, ArstSale24mo21, ArstInv24mo21, ArstSale24mo22, ArstInv24mo22, ArstSale24mo23, ArstInv24mo23, ArstSale24mo24, ArstInv24mo24, ArstPrimShipId, ArstMyVendId, ArstAddlPricDisc, ArstEdiInvc, ArstChrgFrt, ArstDistCntr, ArstDunsNbr, ArstRfmlValu, ArstCustPoParam, ArtbRoutCode, ArstUpsAcctNbr, ArstFobInputYn, ArstFobPerLb, ArstSaleYtd, ArstInvYtd, ArstEmailFaxAuthCode, DateUpdtd, TimeUpdtd, dummy FROM ar_ship_to WHERE ArcuCustId = :p0 AND ArstShipId = :p1';
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
            /** @var ChildCustomerShipto $obj */
            $obj = new ChildCustomerShipto();
            $obj->hydrate($row);
            CustomerShiptoTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildCustomerShipto|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(CustomerShiptoTableMap::COL_ARCUCUSTID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CustomerShiptoTableMap::COL_ARSTSHIPID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ArcuCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustid('fooValue');   // WHERE ArcuCustId = 'fooValue'
     * $query->filterByArcucustid('%fooValue%', Criteria::LIKE); // WHERE ArcuCustId LIKE '%fooValue%'
     * $query->filterByArcucustid(['foo', 'bar']); // WHERE ArcuCustId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arcucustid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * $query->filterByArstshipid(['foo', 'bar']); // WHERE ArstShipId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstshipid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstName column
     *
     * Example usage:
     * <code>
     * $query->filterByArstname('fooValue');   // WHERE ArstName = 'fooValue'
     * $query->filterByArstname('%fooValue%', Criteria::LIKE); // WHERE ArstName LIKE '%fooValue%'
     * $query->filterByArstname(['foo', 'bar']); // WHERE ArstName IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstname($arstname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTNAME, $arstname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstadr1('fooValue');   // WHERE ArstAdr1 = 'fooValue'
     * $query->filterByArstadr1('%fooValue%', Criteria::LIKE); // WHERE ArstAdr1 LIKE '%fooValue%'
     * $query->filterByArstadr1(['foo', 'bar']); // WHERE ArstAdr1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstadr1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstadr1($arstadr1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstadr1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTADR1, $arstadr1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstadr2('fooValue');   // WHERE ArstAdr2 = 'fooValue'
     * $query->filterByArstadr2('%fooValue%', Criteria::LIKE); // WHERE ArstAdr2 LIKE '%fooValue%'
     * $query->filterByArstadr2(['foo', 'bar']); // WHERE ArstAdr2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstadr2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstadr2($arstadr2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstadr2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTADR2, $arstadr2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstadr3('fooValue');   // WHERE ArstAdr3 = 'fooValue'
     * $query->filterByArstadr3('%fooValue%', Criteria::LIKE); // WHERE ArstAdr3 LIKE '%fooValue%'
     * $query->filterByArstadr3(['foo', 'bar']); // WHERE ArstAdr3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstadr3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstadr3($arstadr3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstadr3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTADR3, $arstadr3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByArstctry('fooValue');   // WHERE ArstCtry = 'fooValue'
     * $query->filterByArstctry('%fooValue%', Criteria::LIKE); // WHERE ArstCtry LIKE '%fooValue%'
     * $query->filterByArstctry(['foo', 'bar']); // WHERE ArstCtry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstctry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstctry($arstctry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstctry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCTRY, $arstctry, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstCity column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcity('fooValue');   // WHERE ArstCity = 'fooValue'
     * $query->filterByArstcity('%fooValue%', Criteria::LIKE); // WHERE ArstCity LIKE '%fooValue%'
     * $query->filterByArstcity(['foo', 'bar']); // WHERE ArstCity IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstcity The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstcity($arstcity = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcity)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCITY, $arstcity, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstStat column
     *
     * Example usage:
     * <code>
     * $query->filterByArststat('fooValue');   // WHERE ArstStat = 'fooValue'
     * $query->filterByArststat('%fooValue%', Criteria::LIKE); // WHERE ArstStat LIKE '%fooValue%'
     * $query->filterByArststat(['foo', 'bar']); // WHERE ArstStat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arststat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArststat($arststat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arststat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSTAT, $arststat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArstzipcode('fooValue');   // WHERE ArstZipCode = 'fooValue'
     * $query->filterByArstzipcode('%fooValue%', Criteria::LIKE); // WHERE ArstZipCode LIKE '%fooValue%'
     * $query->filterByArstzipcode(['foo', 'bar']); // WHERE ArstZipCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstzipcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstzipcode($arstzipcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTZIPCODE, $arstzipcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstDeliveryDays column
     *
     * Example usage:
     * <code>
     * $query->filterByArstdeliverydays(1234); // WHERE ArstDeliveryDays = 1234
     * $query->filterByArstdeliverydays(array(12, 34)); // WHERE ArstDeliveryDays IN (12, 34)
     * $query->filterByArstdeliverydays(array('min' => 12)); // WHERE ArstDeliveryDays > 12
     * </code>
     *
     * @param mixed $arstdeliverydays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstdeliverydays($arstdeliverydays = null, ?string $comparison = null)
    {
        if (is_array($arstdeliverydays)) {
            $useMinMax = false;
            if (isset($arstdeliverydays['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTDELIVERYDAYS, $arstdeliverydays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstdeliverydays['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTDELIVERYDAYS, $arstdeliverydays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTDELIVERYDAYS, $arstdeliverydays, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstCommCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcommcode('fooValue');   // WHERE ArstCommCode = 'fooValue'
     * $query->filterByArstcommcode('%fooValue%', Criteria::LIKE); // WHERE ArstCommCode LIKE '%fooValue%'
     * $query->filterByArstcommcode(['foo', 'bar']); // WHERE ArstCommCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstcommcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstcommcode($arstcommcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcommcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCOMMCODE, $arstcommcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstAllowSplit column
     *
     * Example usage:
     * <code>
     * $query->filterByArstallowsplit('fooValue');   // WHERE ArstAllowSplit = 'fooValue'
     * $query->filterByArstallowsplit('%fooValue%', Criteria::LIKE); // WHERE ArstAllowSplit LIKE '%fooValue%'
     * $query->filterByArstallowsplit(['foo', 'bar']); // WHERE ArstAllowSplit IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstallowsplit The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstallowsplit($arstallowsplit = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstallowsplit)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTALLOWSPLIT, $arstallowsplit, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstLindstSp column
     *
     * Example usage:
     * <code>
     * $query->filterByArstlindstsp('fooValue');   // WHERE ArstLindstSp = 'fooValue'
     * $query->filterByArstlindstsp('%fooValue%', Criteria::LIKE); // WHERE ArstLindstSp LIKE '%fooValue%'
     * $query->filterByArstlindstsp(['foo', 'bar']); // WHERE ArstLindstSp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstlindstsp The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstlindstsp($arstlindstsp = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstlindstsp)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTLINDSTSP, $arstlindstsp, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstLmEcommCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstlmecommcustid('fooValue');   // WHERE ArstLmEcommCustId = 'fooValue'
     * $query->filterByArstlmecommcustid('%fooValue%', Criteria::LIKE); // WHERE ArstLmEcommCustId LIKE '%fooValue%'
     * $query->filterByArstlmecommcustid(['foo', 'bar']); // WHERE ArstLmEcommCustId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstlmecommcustid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstlmecommcustid($arstlmecommcustid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstlmecommcustid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTLMECOMMCUSTID, $arstlmecommcustid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstCatlgId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcatlgid('fooValue');   // WHERE ArstCatlgId = 'fooValue'
     * $query->filterByArstcatlgid('%fooValue%', Criteria::LIKE); // WHERE ArstCatlgId LIKE '%fooValue%'
     * $query->filterByArstcatlgid(['foo', 'bar']); // WHERE ArstCatlgId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstcatlgid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstcatlgid($arstcatlgid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcatlgid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCATLGID, $arstcatlgid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArspSalePer1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper1('fooValue');   // WHERE ArspSalePer1 = 'fooValue'
     * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer1 LIKE '%fooValue%'
     * $query->filterByArspsaleper1(['foo', 'bar']); // WHERE ArspSalePer1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arspsaleper1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArspSalePer2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper2('fooValue');   // WHERE ArspSalePer2 = 'fooValue'
     * $query->filterByArspsaleper2('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer2 LIKE '%fooValue%'
     * $query->filterByArspsaleper2(['foo', 'bar']); // WHERE ArspSalePer2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arspsaleper2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArspsaleper2($arspsaleper2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSPSALEPER2, $arspsaleper2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArspSalePer3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper3('fooValue');   // WHERE ArspSalePer3 = 'fooValue'
     * $query->filterByArspsaleper3('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer3 LIKE '%fooValue%'
     * $query->filterByArspsaleper3(['foo', 'bar']); // WHERE ArspSalePer3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arspsaleper3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArspsaleper3($arspsaleper3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSPSALEPER3, $arspsaleper3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbCtaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode('fooValue');   // WHERE ArtbCtaxCode = 'fooValue'
     * $query->filterByArtbctaxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode LIKE '%fooValue%'
     * $query->filterByArtbctaxcode(['foo', 'bar']); // WHERE ArtbCtaxCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbctaxcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbctaxcode($artbctaxcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARTBCTAXCODE, $artbctaxcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstTaxExemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArsttaxexemnbr('fooValue');   // WHERE ArstTaxExemNbr = 'fooValue'
     * $query->filterByArsttaxexemnbr('%fooValue%', Criteria::LIKE); // WHERE ArstTaxExemNbr LIKE '%fooValue%'
     * $query->filterByArsttaxexemnbr(['foo', 'bar']); // WHERE ArstTaxExemNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arsttaxexemnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArsttaxexemnbr($arsttaxexemnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arsttaxexemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTTAXEXEMNBR, $arsttaxexemnbr, $comparison);

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

        $this->addUsingAlias(CustomerShiptoTableMap::COL_INTBWHSE, $intbwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbShipVia column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbshipvia('fooValue');   // WHERE ArtbShipVia = 'fooValue'
     * $query->filterByArtbshipvia('%fooValue%', Criteria::LIKE); // WHERE ArtbShipVia LIKE '%fooValue%'
     * $query->filterByArtbshipvia(['foo', 'bar']); // WHERE ArtbShipVia IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbshipvia The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstBord column
     *
     * Example usage:
     * <code>
     * $query->filterByArstbord('fooValue');   // WHERE ArstBord = 'fooValue'
     * $query->filterByArstbord('%fooValue%', Criteria::LIKE); // WHERE ArstBord LIKE '%fooValue%'
     * $query->filterByArstbord(['foo', 'bar']); // WHERE ArstBord IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstbord The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstbord($arstbord = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstbord)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTBORD, $arstbord, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstCredHold column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcredhold('fooValue');   // WHERE ArstCredHold = 'fooValue'
     * $query->filterByArstcredhold('%fooValue%', Criteria::LIKE); // WHERE ArstCredHold LIKE '%fooValue%'
     * $query->filterByArstcredhold(['foo', 'bar']); // WHERE ArstCredHold IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstcredhold The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstcredhold($arstcredhold = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcredhold)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCREDHOLD, $arstcredhold, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstUserCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArstusercode('fooValue');   // WHERE ArstUserCode = 'fooValue'
     * $query->filterByArstusercode('%fooValue%', Criteria::LIKE); // WHERE ArstUserCode LIKE '%fooValue%'
     * $query->filterByArstusercode(['foo', 'bar']); // WHERE ArstUserCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstusercode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstusercode($arstusercode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstusercode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTUSERCODE, $arstusercode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstPricLvl column
     *
     * Example usage:
     * <code>
     * $query->filterByArstpriclvl('fooValue');   // WHERE ArstPricLvl = 'fooValue'
     * $query->filterByArstpriclvl('%fooValue%', Criteria::LIKE); // WHERE ArstPricLvl LIKE '%fooValue%'
     * $query->filterByArstpriclvl(['foo', 'bar']); // WHERE ArstPricLvl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstpriclvl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstpriclvl($arstpriclvl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstpriclvl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTPRICLVL, $arstpriclvl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstShipComp column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipcomp('fooValue');   // WHERE ArstShipComp = 'fooValue'
     * $query->filterByArstshipcomp('%fooValue%', Criteria::LIKE); // WHERE ArstShipComp LIKE '%fooValue%'
     * $query->filterByArstshipcomp(['foo', 'bar']); // WHERE ArstShipComp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstshipcomp The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstshipcomp($arstshipcomp = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPCOMP, $arstshipcomp, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstTxbl column
     *
     * Example usage:
     * <code>
     * $query->filterByArsttxbl('fooValue');   // WHERE ArstTxbl = 'fooValue'
     * $query->filterByArsttxbl('%fooValue%', Criteria::LIKE); // WHERE ArstTxbl LIKE '%fooValue%'
     * $query->filterByArsttxbl(['foo', 'bar']); // WHERE ArstTxbl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arsttxbl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArsttxbl($arsttxbl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arsttxbl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTTXBL, $arsttxbl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstPostal column
     *
     * Example usage:
     * <code>
     * $query->filterByArstpostal('fooValue');   // WHERE ArstPostal = 'fooValue'
     * $query->filterByArstpostal('%fooValue%', Criteria::LIKE); // WHERE ArstPostal LIKE '%fooValue%'
     * $query->filterByArstpostal(['foo', 'bar']); // WHERE ArstPostal IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstpostal The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstpostal($arstpostal = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstpostal)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTPOSTAL, $arstpostal, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSaleMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsalemtd(1234); // WHERE ArstSaleMtd = 1234
     * $query->filterByArstsalemtd(array(12, 34)); // WHERE ArstSaleMtd IN (12, 34)
     * $query->filterByArstsalemtd(array('min' => 12)); // WHERE ArstSaleMtd > 12
     * </code>
     *
     * @param mixed $arstsalemtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsalemtd($arstsalemtd = null, ?string $comparison = null)
    {
        if (is_array($arstsalemtd)) {
            $useMinMax = false;
            if (isset($arstsalemtd['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALEMTD, $arstsalemtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsalemtd['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALEMTD, $arstsalemtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALEMTD, $arstsalemtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInvMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinvmtd(1234); // WHERE ArstInvMtd = 1234
     * $query->filterByArstinvmtd(array(12, 34)); // WHERE ArstInvMtd IN (12, 34)
     * $query->filterByArstinvmtd(array('min' => 12)); // WHERE ArstInvMtd > 12
     * </code>
     *
     * @param mixed $arstinvmtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinvmtd($arstinvmtd = null, ?string $comparison = null)
    {
        if (is_array($arstinvmtd)) {
            $useMinMax = false;
            if (isset($arstinvmtd['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINVMTD, $arstinvmtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinvmtd['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINVMTD, $arstinvmtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINVMTD, $arstinvmtd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstDateOpen column
     *
     * Example usage:
     * <code>
     * $query->filterByArstdateopen('fooValue');   // WHERE ArstDateOpen = 'fooValue'
     * $query->filterByArstdateopen('%fooValue%', Criteria::LIKE); // WHERE ArstDateOpen LIKE '%fooValue%'
     * $query->filterByArstdateopen(['foo', 'bar']); // WHERE ArstDateOpen IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstdateopen The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstdateopen($arstdateopen = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstdateopen)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTDATEOPEN, $arstdateopen, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstLastSaleDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArstlastsaledate('fooValue');   // WHERE ArstLastSaleDate = 'fooValue'
     * $query->filterByArstlastsaledate('%fooValue%', Criteria::LIKE); // WHERE ArstLastSaleDate LIKE '%fooValue%'
     * $query->filterByArstlastsaledate(['foo', 'bar']); // WHERE ArstLastSaleDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstlastsaledate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstlastsaledate($arstlastsaledate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstlastsaledate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTLASTSALEDATE, $arstlastsaledate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo1(1234); // WHERE ArstSale24mo1 = 1234
     * $query->filterByArstsale24mo1(array(12, 34)); // WHERE ArstSale24mo1 IN (12, 34)
     * $query->filterByArstsale24mo1(array('min' => 12)); // WHERE ArstSale24mo1 > 12
     * </code>
     *
     * @param mixed $arstsale24mo1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo1($arstsale24mo1 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo1)) {
            $useMinMax = false;
            if (isset($arstsale24mo1['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO1, $arstsale24mo1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo1['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO1, $arstsale24mo1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO1, $arstsale24mo1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo1(1234); // WHERE ArstInv24mo1 = 1234
     * $query->filterByArstinv24mo1(array(12, 34)); // WHERE ArstInv24mo1 IN (12, 34)
     * $query->filterByArstinv24mo1(array('min' => 12)); // WHERE ArstInv24mo1 > 12
     * </code>
     *
     * @param mixed $arstinv24mo1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo1($arstinv24mo1 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo1)) {
            $useMinMax = false;
            if (isset($arstinv24mo1['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO1, $arstinv24mo1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo1['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO1, $arstinv24mo1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO1, $arstinv24mo1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo2(1234); // WHERE ArstSale24mo2 = 1234
     * $query->filterByArstsale24mo2(array(12, 34)); // WHERE ArstSale24mo2 IN (12, 34)
     * $query->filterByArstsale24mo2(array('min' => 12)); // WHERE ArstSale24mo2 > 12
     * </code>
     *
     * @param mixed $arstsale24mo2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo2($arstsale24mo2 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo2)) {
            $useMinMax = false;
            if (isset($arstsale24mo2['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO2, $arstsale24mo2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo2['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO2, $arstsale24mo2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO2, $arstsale24mo2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo2(1234); // WHERE ArstInv24mo2 = 1234
     * $query->filterByArstinv24mo2(array(12, 34)); // WHERE ArstInv24mo2 IN (12, 34)
     * $query->filterByArstinv24mo2(array('min' => 12)); // WHERE ArstInv24mo2 > 12
     * </code>
     *
     * @param mixed $arstinv24mo2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo2($arstinv24mo2 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo2)) {
            $useMinMax = false;
            if (isset($arstinv24mo2['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO2, $arstinv24mo2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo2['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO2, $arstinv24mo2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO2, $arstinv24mo2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo3(1234); // WHERE ArstSale24mo3 = 1234
     * $query->filterByArstsale24mo3(array(12, 34)); // WHERE ArstSale24mo3 IN (12, 34)
     * $query->filterByArstsale24mo3(array('min' => 12)); // WHERE ArstSale24mo3 > 12
     * </code>
     *
     * @param mixed $arstsale24mo3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo3($arstsale24mo3 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo3)) {
            $useMinMax = false;
            if (isset($arstsale24mo3['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO3, $arstsale24mo3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo3['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO3, $arstsale24mo3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO3, $arstsale24mo3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo3(1234); // WHERE ArstInv24mo3 = 1234
     * $query->filterByArstinv24mo3(array(12, 34)); // WHERE ArstInv24mo3 IN (12, 34)
     * $query->filterByArstinv24mo3(array('min' => 12)); // WHERE ArstInv24mo3 > 12
     * </code>
     *
     * @param mixed $arstinv24mo3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo3($arstinv24mo3 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo3)) {
            $useMinMax = false;
            if (isset($arstinv24mo3['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO3, $arstinv24mo3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo3['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO3, $arstinv24mo3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO3, $arstinv24mo3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo4(1234); // WHERE ArstSale24mo4 = 1234
     * $query->filterByArstsale24mo4(array(12, 34)); // WHERE ArstSale24mo4 IN (12, 34)
     * $query->filterByArstsale24mo4(array('min' => 12)); // WHERE ArstSale24mo4 > 12
     * </code>
     *
     * @param mixed $arstsale24mo4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo4($arstsale24mo4 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo4)) {
            $useMinMax = false;
            if (isset($arstsale24mo4['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO4, $arstsale24mo4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo4['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO4, $arstsale24mo4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO4, $arstsale24mo4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo4(1234); // WHERE ArstInv24mo4 = 1234
     * $query->filterByArstinv24mo4(array(12, 34)); // WHERE ArstInv24mo4 IN (12, 34)
     * $query->filterByArstinv24mo4(array('min' => 12)); // WHERE ArstInv24mo4 > 12
     * </code>
     *
     * @param mixed $arstinv24mo4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo4($arstinv24mo4 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo4)) {
            $useMinMax = false;
            if (isset($arstinv24mo4['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO4, $arstinv24mo4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo4['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO4, $arstinv24mo4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO4, $arstinv24mo4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo5(1234); // WHERE ArstSale24mo5 = 1234
     * $query->filterByArstsale24mo5(array(12, 34)); // WHERE ArstSale24mo5 IN (12, 34)
     * $query->filterByArstsale24mo5(array('min' => 12)); // WHERE ArstSale24mo5 > 12
     * </code>
     *
     * @param mixed $arstsale24mo5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo5($arstsale24mo5 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo5)) {
            $useMinMax = false;
            if (isset($arstsale24mo5['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO5, $arstsale24mo5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo5['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO5, $arstsale24mo5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO5, $arstsale24mo5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo5(1234); // WHERE ArstInv24mo5 = 1234
     * $query->filterByArstinv24mo5(array(12, 34)); // WHERE ArstInv24mo5 IN (12, 34)
     * $query->filterByArstinv24mo5(array('min' => 12)); // WHERE ArstInv24mo5 > 12
     * </code>
     *
     * @param mixed $arstinv24mo5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo5($arstinv24mo5 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo5)) {
            $useMinMax = false;
            if (isset($arstinv24mo5['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO5, $arstinv24mo5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo5['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO5, $arstinv24mo5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO5, $arstinv24mo5, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo6(1234); // WHERE ArstSale24mo6 = 1234
     * $query->filterByArstsale24mo6(array(12, 34)); // WHERE ArstSale24mo6 IN (12, 34)
     * $query->filterByArstsale24mo6(array('min' => 12)); // WHERE ArstSale24mo6 > 12
     * </code>
     *
     * @param mixed $arstsale24mo6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo6($arstsale24mo6 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo6)) {
            $useMinMax = false;
            if (isset($arstsale24mo6['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO6, $arstsale24mo6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo6['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO6, $arstsale24mo6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO6, $arstsale24mo6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo6(1234); // WHERE ArstInv24mo6 = 1234
     * $query->filterByArstinv24mo6(array(12, 34)); // WHERE ArstInv24mo6 IN (12, 34)
     * $query->filterByArstinv24mo6(array('min' => 12)); // WHERE ArstInv24mo6 > 12
     * </code>
     *
     * @param mixed $arstinv24mo6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo6($arstinv24mo6 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo6)) {
            $useMinMax = false;
            if (isset($arstinv24mo6['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO6, $arstinv24mo6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo6['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO6, $arstinv24mo6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO6, $arstinv24mo6, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo7 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo7(1234); // WHERE ArstSale24mo7 = 1234
     * $query->filterByArstsale24mo7(array(12, 34)); // WHERE ArstSale24mo7 IN (12, 34)
     * $query->filterByArstsale24mo7(array('min' => 12)); // WHERE ArstSale24mo7 > 12
     * </code>
     *
     * @param mixed $arstsale24mo7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo7($arstsale24mo7 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo7)) {
            $useMinMax = false;
            if (isset($arstsale24mo7['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO7, $arstsale24mo7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo7['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO7, $arstsale24mo7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO7, $arstsale24mo7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo7 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo7(1234); // WHERE ArstInv24mo7 = 1234
     * $query->filterByArstinv24mo7(array(12, 34)); // WHERE ArstInv24mo7 IN (12, 34)
     * $query->filterByArstinv24mo7(array('min' => 12)); // WHERE ArstInv24mo7 > 12
     * </code>
     *
     * @param mixed $arstinv24mo7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo7($arstinv24mo7 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo7)) {
            $useMinMax = false;
            if (isset($arstinv24mo7['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO7, $arstinv24mo7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo7['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO7, $arstinv24mo7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO7, $arstinv24mo7, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo8 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo8(1234); // WHERE ArstSale24mo8 = 1234
     * $query->filterByArstsale24mo8(array(12, 34)); // WHERE ArstSale24mo8 IN (12, 34)
     * $query->filterByArstsale24mo8(array('min' => 12)); // WHERE ArstSale24mo8 > 12
     * </code>
     *
     * @param mixed $arstsale24mo8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo8($arstsale24mo8 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo8)) {
            $useMinMax = false;
            if (isset($arstsale24mo8['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO8, $arstsale24mo8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo8['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO8, $arstsale24mo8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO8, $arstsale24mo8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo8 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo8(1234); // WHERE ArstInv24mo8 = 1234
     * $query->filterByArstinv24mo8(array(12, 34)); // WHERE ArstInv24mo8 IN (12, 34)
     * $query->filterByArstinv24mo8(array('min' => 12)); // WHERE ArstInv24mo8 > 12
     * </code>
     *
     * @param mixed $arstinv24mo8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo8($arstinv24mo8 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo8)) {
            $useMinMax = false;
            if (isset($arstinv24mo8['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO8, $arstinv24mo8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo8['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO8, $arstinv24mo8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO8, $arstinv24mo8, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo9 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo9(1234); // WHERE ArstSale24mo9 = 1234
     * $query->filterByArstsale24mo9(array(12, 34)); // WHERE ArstSale24mo9 IN (12, 34)
     * $query->filterByArstsale24mo9(array('min' => 12)); // WHERE ArstSale24mo9 > 12
     * </code>
     *
     * @param mixed $arstsale24mo9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo9($arstsale24mo9 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo9)) {
            $useMinMax = false;
            if (isset($arstsale24mo9['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO9, $arstsale24mo9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo9['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO9, $arstsale24mo9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO9, $arstsale24mo9, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo9 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo9(1234); // WHERE ArstInv24mo9 = 1234
     * $query->filterByArstinv24mo9(array(12, 34)); // WHERE ArstInv24mo9 IN (12, 34)
     * $query->filterByArstinv24mo9(array('min' => 12)); // WHERE ArstInv24mo9 > 12
     * </code>
     *
     * @param mixed $arstinv24mo9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo9($arstinv24mo9 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo9)) {
            $useMinMax = false;
            if (isset($arstinv24mo9['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO9, $arstinv24mo9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo9['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO9, $arstinv24mo9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO9, $arstinv24mo9, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo10(1234); // WHERE ArstSale24mo10 = 1234
     * $query->filterByArstsale24mo10(array(12, 34)); // WHERE ArstSale24mo10 IN (12, 34)
     * $query->filterByArstsale24mo10(array('min' => 12)); // WHERE ArstSale24mo10 > 12
     * </code>
     *
     * @param mixed $arstsale24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo10($arstsale24mo10 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo10)) {
            $useMinMax = false;
            if (isset($arstsale24mo10['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO10, $arstsale24mo10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo10['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO10, $arstsale24mo10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO10, $arstsale24mo10, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo10(1234); // WHERE ArstInv24mo10 = 1234
     * $query->filterByArstinv24mo10(array(12, 34)); // WHERE ArstInv24mo10 IN (12, 34)
     * $query->filterByArstinv24mo10(array('min' => 12)); // WHERE ArstInv24mo10 > 12
     * </code>
     *
     * @param mixed $arstinv24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo10($arstinv24mo10 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo10)) {
            $useMinMax = false;
            if (isset($arstinv24mo10['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO10, $arstinv24mo10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo10['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO10, $arstinv24mo10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO10, $arstinv24mo10, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo11 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo11(1234); // WHERE ArstSale24mo11 = 1234
     * $query->filterByArstsale24mo11(array(12, 34)); // WHERE ArstSale24mo11 IN (12, 34)
     * $query->filterByArstsale24mo11(array('min' => 12)); // WHERE ArstSale24mo11 > 12
     * </code>
     *
     * @param mixed $arstsale24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo11($arstsale24mo11 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo11)) {
            $useMinMax = false;
            if (isset($arstsale24mo11['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO11, $arstsale24mo11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo11['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO11, $arstsale24mo11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO11, $arstsale24mo11, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo11 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo11(1234); // WHERE ArstInv24mo11 = 1234
     * $query->filterByArstinv24mo11(array(12, 34)); // WHERE ArstInv24mo11 IN (12, 34)
     * $query->filterByArstinv24mo11(array('min' => 12)); // WHERE ArstInv24mo11 > 12
     * </code>
     *
     * @param mixed $arstinv24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo11($arstinv24mo11 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo11)) {
            $useMinMax = false;
            if (isset($arstinv24mo11['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO11, $arstinv24mo11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo11['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO11, $arstinv24mo11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO11, $arstinv24mo11, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo12 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo12(1234); // WHERE ArstSale24mo12 = 1234
     * $query->filterByArstsale24mo12(array(12, 34)); // WHERE ArstSale24mo12 IN (12, 34)
     * $query->filterByArstsale24mo12(array('min' => 12)); // WHERE ArstSale24mo12 > 12
     * </code>
     *
     * @param mixed $arstsale24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo12($arstsale24mo12 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo12)) {
            $useMinMax = false;
            if (isset($arstsale24mo12['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO12, $arstsale24mo12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo12['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO12, $arstsale24mo12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO12, $arstsale24mo12, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo12 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo12(1234); // WHERE ArstInv24mo12 = 1234
     * $query->filterByArstinv24mo12(array(12, 34)); // WHERE ArstInv24mo12 IN (12, 34)
     * $query->filterByArstinv24mo12(array('min' => 12)); // WHERE ArstInv24mo12 > 12
     * </code>
     *
     * @param mixed $arstinv24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo12($arstinv24mo12 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo12)) {
            $useMinMax = false;
            if (isset($arstinv24mo12['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO12, $arstinv24mo12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo12['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO12, $arstinv24mo12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO12, $arstinv24mo12, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo13 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo13(1234); // WHERE ArstSale24mo13 = 1234
     * $query->filterByArstsale24mo13(array(12, 34)); // WHERE ArstSale24mo13 IN (12, 34)
     * $query->filterByArstsale24mo13(array('min' => 12)); // WHERE ArstSale24mo13 > 12
     * </code>
     *
     * @param mixed $arstsale24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo13($arstsale24mo13 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo13)) {
            $useMinMax = false;
            if (isset($arstsale24mo13['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO13, $arstsale24mo13['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo13['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO13, $arstsale24mo13['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO13, $arstsale24mo13, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo13 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo13(1234); // WHERE ArstInv24mo13 = 1234
     * $query->filterByArstinv24mo13(array(12, 34)); // WHERE ArstInv24mo13 IN (12, 34)
     * $query->filterByArstinv24mo13(array('min' => 12)); // WHERE ArstInv24mo13 > 12
     * </code>
     *
     * @param mixed $arstinv24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo13($arstinv24mo13 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo13)) {
            $useMinMax = false;
            if (isset($arstinv24mo13['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO13, $arstinv24mo13['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo13['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO13, $arstinv24mo13['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO13, $arstinv24mo13, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo14 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo14(1234); // WHERE ArstSale24mo14 = 1234
     * $query->filterByArstsale24mo14(array(12, 34)); // WHERE ArstSale24mo14 IN (12, 34)
     * $query->filterByArstsale24mo14(array('min' => 12)); // WHERE ArstSale24mo14 > 12
     * </code>
     *
     * @param mixed $arstsale24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo14($arstsale24mo14 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo14)) {
            $useMinMax = false;
            if (isset($arstsale24mo14['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO14, $arstsale24mo14['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo14['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO14, $arstsale24mo14['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO14, $arstsale24mo14, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo14 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo14(1234); // WHERE ArstInv24mo14 = 1234
     * $query->filterByArstinv24mo14(array(12, 34)); // WHERE ArstInv24mo14 IN (12, 34)
     * $query->filterByArstinv24mo14(array('min' => 12)); // WHERE ArstInv24mo14 > 12
     * </code>
     *
     * @param mixed $arstinv24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo14($arstinv24mo14 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo14)) {
            $useMinMax = false;
            if (isset($arstinv24mo14['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO14, $arstinv24mo14['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo14['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO14, $arstinv24mo14['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO14, $arstinv24mo14, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo15 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo15(1234); // WHERE ArstSale24mo15 = 1234
     * $query->filterByArstsale24mo15(array(12, 34)); // WHERE ArstSale24mo15 IN (12, 34)
     * $query->filterByArstsale24mo15(array('min' => 12)); // WHERE ArstSale24mo15 > 12
     * </code>
     *
     * @param mixed $arstsale24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo15($arstsale24mo15 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo15)) {
            $useMinMax = false;
            if (isset($arstsale24mo15['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO15, $arstsale24mo15['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo15['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO15, $arstsale24mo15['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO15, $arstsale24mo15, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo15 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo15(1234); // WHERE ArstInv24mo15 = 1234
     * $query->filterByArstinv24mo15(array(12, 34)); // WHERE ArstInv24mo15 IN (12, 34)
     * $query->filterByArstinv24mo15(array('min' => 12)); // WHERE ArstInv24mo15 > 12
     * </code>
     *
     * @param mixed $arstinv24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo15($arstinv24mo15 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo15)) {
            $useMinMax = false;
            if (isset($arstinv24mo15['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO15, $arstinv24mo15['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo15['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO15, $arstinv24mo15['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO15, $arstinv24mo15, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo16 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo16(1234); // WHERE ArstSale24mo16 = 1234
     * $query->filterByArstsale24mo16(array(12, 34)); // WHERE ArstSale24mo16 IN (12, 34)
     * $query->filterByArstsale24mo16(array('min' => 12)); // WHERE ArstSale24mo16 > 12
     * </code>
     *
     * @param mixed $arstsale24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo16($arstsale24mo16 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo16)) {
            $useMinMax = false;
            if (isset($arstsale24mo16['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO16, $arstsale24mo16['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo16['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO16, $arstsale24mo16['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO16, $arstsale24mo16, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo16 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo16(1234); // WHERE ArstInv24mo16 = 1234
     * $query->filterByArstinv24mo16(array(12, 34)); // WHERE ArstInv24mo16 IN (12, 34)
     * $query->filterByArstinv24mo16(array('min' => 12)); // WHERE ArstInv24mo16 > 12
     * </code>
     *
     * @param mixed $arstinv24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo16($arstinv24mo16 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo16)) {
            $useMinMax = false;
            if (isset($arstinv24mo16['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO16, $arstinv24mo16['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo16['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO16, $arstinv24mo16['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO16, $arstinv24mo16, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo17 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo17(1234); // WHERE ArstSale24mo17 = 1234
     * $query->filterByArstsale24mo17(array(12, 34)); // WHERE ArstSale24mo17 IN (12, 34)
     * $query->filterByArstsale24mo17(array('min' => 12)); // WHERE ArstSale24mo17 > 12
     * </code>
     *
     * @param mixed $arstsale24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo17($arstsale24mo17 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo17)) {
            $useMinMax = false;
            if (isset($arstsale24mo17['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO17, $arstsale24mo17['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo17['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO17, $arstsale24mo17['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO17, $arstsale24mo17, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo17 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo17(1234); // WHERE ArstInv24mo17 = 1234
     * $query->filterByArstinv24mo17(array(12, 34)); // WHERE ArstInv24mo17 IN (12, 34)
     * $query->filterByArstinv24mo17(array('min' => 12)); // WHERE ArstInv24mo17 > 12
     * </code>
     *
     * @param mixed $arstinv24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo17($arstinv24mo17 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo17)) {
            $useMinMax = false;
            if (isset($arstinv24mo17['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO17, $arstinv24mo17['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo17['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO17, $arstinv24mo17['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO17, $arstinv24mo17, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo18 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo18(1234); // WHERE ArstSale24mo18 = 1234
     * $query->filterByArstsale24mo18(array(12, 34)); // WHERE ArstSale24mo18 IN (12, 34)
     * $query->filterByArstsale24mo18(array('min' => 12)); // WHERE ArstSale24mo18 > 12
     * </code>
     *
     * @param mixed $arstsale24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo18($arstsale24mo18 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo18)) {
            $useMinMax = false;
            if (isset($arstsale24mo18['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO18, $arstsale24mo18['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo18['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO18, $arstsale24mo18['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO18, $arstsale24mo18, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo18 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo18(1234); // WHERE ArstInv24mo18 = 1234
     * $query->filterByArstinv24mo18(array(12, 34)); // WHERE ArstInv24mo18 IN (12, 34)
     * $query->filterByArstinv24mo18(array('min' => 12)); // WHERE ArstInv24mo18 > 12
     * </code>
     *
     * @param mixed $arstinv24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo18($arstinv24mo18 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo18)) {
            $useMinMax = false;
            if (isset($arstinv24mo18['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO18, $arstinv24mo18['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo18['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO18, $arstinv24mo18['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO18, $arstinv24mo18, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo19 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo19(1234); // WHERE ArstSale24mo19 = 1234
     * $query->filterByArstsale24mo19(array(12, 34)); // WHERE ArstSale24mo19 IN (12, 34)
     * $query->filterByArstsale24mo19(array('min' => 12)); // WHERE ArstSale24mo19 > 12
     * </code>
     *
     * @param mixed $arstsale24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo19($arstsale24mo19 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo19)) {
            $useMinMax = false;
            if (isset($arstsale24mo19['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO19, $arstsale24mo19['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo19['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO19, $arstsale24mo19['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO19, $arstsale24mo19, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo19 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo19(1234); // WHERE ArstInv24mo19 = 1234
     * $query->filterByArstinv24mo19(array(12, 34)); // WHERE ArstInv24mo19 IN (12, 34)
     * $query->filterByArstinv24mo19(array('min' => 12)); // WHERE ArstInv24mo19 > 12
     * </code>
     *
     * @param mixed $arstinv24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo19($arstinv24mo19 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo19)) {
            $useMinMax = false;
            if (isset($arstinv24mo19['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO19, $arstinv24mo19['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo19['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO19, $arstinv24mo19['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO19, $arstinv24mo19, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo20 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo20(1234); // WHERE ArstSale24mo20 = 1234
     * $query->filterByArstsale24mo20(array(12, 34)); // WHERE ArstSale24mo20 IN (12, 34)
     * $query->filterByArstsale24mo20(array('min' => 12)); // WHERE ArstSale24mo20 > 12
     * </code>
     *
     * @param mixed $arstsale24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo20($arstsale24mo20 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo20)) {
            $useMinMax = false;
            if (isset($arstsale24mo20['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO20, $arstsale24mo20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo20['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO20, $arstsale24mo20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO20, $arstsale24mo20, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo20 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo20(1234); // WHERE ArstInv24mo20 = 1234
     * $query->filterByArstinv24mo20(array(12, 34)); // WHERE ArstInv24mo20 IN (12, 34)
     * $query->filterByArstinv24mo20(array('min' => 12)); // WHERE ArstInv24mo20 > 12
     * </code>
     *
     * @param mixed $arstinv24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo20($arstinv24mo20 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo20)) {
            $useMinMax = false;
            if (isset($arstinv24mo20['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO20, $arstinv24mo20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo20['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO20, $arstinv24mo20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO20, $arstinv24mo20, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo21 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo21(1234); // WHERE ArstSale24mo21 = 1234
     * $query->filterByArstsale24mo21(array(12, 34)); // WHERE ArstSale24mo21 IN (12, 34)
     * $query->filterByArstsale24mo21(array('min' => 12)); // WHERE ArstSale24mo21 > 12
     * </code>
     *
     * @param mixed $arstsale24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo21($arstsale24mo21 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo21)) {
            $useMinMax = false;
            if (isset($arstsale24mo21['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO21, $arstsale24mo21['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo21['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO21, $arstsale24mo21['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO21, $arstsale24mo21, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo21 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo21(1234); // WHERE ArstInv24mo21 = 1234
     * $query->filterByArstinv24mo21(array(12, 34)); // WHERE ArstInv24mo21 IN (12, 34)
     * $query->filterByArstinv24mo21(array('min' => 12)); // WHERE ArstInv24mo21 > 12
     * </code>
     *
     * @param mixed $arstinv24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo21($arstinv24mo21 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo21)) {
            $useMinMax = false;
            if (isset($arstinv24mo21['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO21, $arstinv24mo21['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo21['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO21, $arstinv24mo21['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO21, $arstinv24mo21, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo22 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo22(1234); // WHERE ArstSale24mo22 = 1234
     * $query->filterByArstsale24mo22(array(12, 34)); // WHERE ArstSale24mo22 IN (12, 34)
     * $query->filterByArstsale24mo22(array('min' => 12)); // WHERE ArstSale24mo22 > 12
     * </code>
     *
     * @param mixed $arstsale24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo22($arstsale24mo22 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo22)) {
            $useMinMax = false;
            if (isset($arstsale24mo22['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO22, $arstsale24mo22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo22['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO22, $arstsale24mo22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO22, $arstsale24mo22, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo22 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo22(1234); // WHERE ArstInv24mo22 = 1234
     * $query->filterByArstinv24mo22(array(12, 34)); // WHERE ArstInv24mo22 IN (12, 34)
     * $query->filterByArstinv24mo22(array('min' => 12)); // WHERE ArstInv24mo22 > 12
     * </code>
     *
     * @param mixed $arstinv24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo22($arstinv24mo22 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo22)) {
            $useMinMax = false;
            if (isset($arstinv24mo22['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO22, $arstinv24mo22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo22['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO22, $arstinv24mo22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO22, $arstinv24mo22, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo23 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo23(1234); // WHERE ArstSale24mo23 = 1234
     * $query->filterByArstsale24mo23(array(12, 34)); // WHERE ArstSale24mo23 IN (12, 34)
     * $query->filterByArstsale24mo23(array('min' => 12)); // WHERE ArstSale24mo23 > 12
     * </code>
     *
     * @param mixed $arstsale24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo23($arstsale24mo23 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo23)) {
            $useMinMax = false;
            if (isset($arstsale24mo23['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO23, $arstsale24mo23['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo23['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO23, $arstsale24mo23['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO23, $arstsale24mo23, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo23 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo23(1234); // WHERE ArstInv24mo23 = 1234
     * $query->filterByArstinv24mo23(array(12, 34)); // WHERE ArstInv24mo23 IN (12, 34)
     * $query->filterByArstinv24mo23(array('min' => 12)); // WHERE ArstInv24mo23 > 12
     * </code>
     *
     * @param mixed $arstinv24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo23($arstinv24mo23 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo23)) {
            $useMinMax = false;
            if (isset($arstinv24mo23['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO23, $arstinv24mo23['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo23['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO23, $arstinv24mo23['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO23, $arstinv24mo23, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSale24mo24 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsale24mo24(1234); // WHERE ArstSale24mo24 = 1234
     * $query->filterByArstsale24mo24(array(12, 34)); // WHERE ArstSale24mo24 IN (12, 34)
     * $query->filterByArstsale24mo24(array('min' => 12)); // WHERE ArstSale24mo24 > 12
     * </code>
     *
     * @param mixed $arstsale24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsale24mo24($arstsale24mo24 = null, ?string $comparison = null)
    {
        if (is_array($arstsale24mo24)) {
            $useMinMax = false;
            if (isset($arstsale24mo24['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO24, $arstsale24mo24['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsale24mo24['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO24, $arstsale24mo24['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO24, $arstsale24mo24, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInv24mo24 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinv24mo24(1234); // WHERE ArstInv24mo24 = 1234
     * $query->filterByArstinv24mo24(array(12, 34)); // WHERE ArstInv24mo24 IN (12, 34)
     * $query->filterByArstinv24mo24(array('min' => 12)); // WHERE ArstInv24mo24 > 12
     * </code>
     *
     * @param mixed $arstinv24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinv24mo24($arstinv24mo24 = null, ?string $comparison = null)
    {
        if (is_array($arstinv24mo24)) {
            $useMinMax = false;
            if (isset($arstinv24mo24['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO24, $arstinv24mo24['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinv24mo24['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO24, $arstinv24mo24['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO24, $arstinv24mo24, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstPrimShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstprimshipid('fooValue');   // WHERE ArstPrimShipId = 'fooValue'
     * $query->filterByArstprimshipid('%fooValue%', Criteria::LIKE); // WHERE ArstPrimShipId LIKE '%fooValue%'
     * $query->filterByArstprimshipid(['foo', 'bar']); // WHERE ArstPrimShipId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstprimshipid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstprimshipid($arstprimshipid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstprimshipid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTPRIMSHIPID, $arstprimshipid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstMyVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstmyvendid('fooValue');   // WHERE ArstMyVendId = 'fooValue'
     * $query->filterByArstmyvendid('%fooValue%', Criteria::LIKE); // WHERE ArstMyVendId LIKE '%fooValue%'
     * $query->filterByArstmyvendid(['foo', 'bar']); // WHERE ArstMyVendId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstmyvendid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstmyvendid($arstmyvendid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstmyvendid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTMYVENDID, $arstmyvendid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstAddlPricDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByArstaddlpricdisc(1234); // WHERE ArstAddlPricDisc = 1234
     * $query->filterByArstaddlpricdisc(array(12, 34)); // WHERE ArstAddlPricDisc IN (12, 34)
     * $query->filterByArstaddlpricdisc(array('min' => 12)); // WHERE ArstAddlPricDisc > 12
     * </code>
     *
     * @param mixed $arstaddlpricdisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstaddlpricdisc($arstaddlpricdisc = null, ?string $comparison = null)
    {
        if (is_array($arstaddlpricdisc)) {
            $useMinMax = false;
            if (isset($arstaddlpricdisc['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTADDLPRICDISC, $arstaddlpricdisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstaddlpricdisc['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTADDLPRICDISC, $arstaddlpricdisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTADDLPRICDISC, $arstaddlpricdisc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstEdiInvc column
     *
     * Example usage:
     * <code>
     * $query->filterByArstediinvc('fooValue');   // WHERE ArstEdiInvc = 'fooValue'
     * $query->filterByArstediinvc('%fooValue%', Criteria::LIKE); // WHERE ArstEdiInvc LIKE '%fooValue%'
     * $query->filterByArstediinvc(['foo', 'bar']); // WHERE ArstEdiInvc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstediinvc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstediinvc($arstediinvc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstediinvc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTEDIINVC, $arstediinvc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstChrgFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByArstchrgfrt('fooValue');   // WHERE ArstChrgFrt = 'fooValue'
     * $query->filterByArstchrgfrt('%fooValue%', Criteria::LIKE); // WHERE ArstChrgFrt LIKE '%fooValue%'
     * $query->filterByArstchrgfrt(['foo', 'bar']); // WHERE ArstChrgFrt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstchrgfrt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstchrgfrt($arstchrgfrt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstchrgfrt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCHRGFRT, $arstchrgfrt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstDistCntr column
     *
     * Example usage:
     * <code>
     * $query->filterByArstdistcntr('fooValue');   // WHERE ArstDistCntr = 'fooValue'
     * $query->filterByArstdistcntr('%fooValue%', Criteria::LIKE); // WHERE ArstDistCntr LIKE '%fooValue%'
     * $query->filterByArstdistcntr(['foo', 'bar']); // WHERE ArstDistCntr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstdistcntr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstdistcntr($arstdistcntr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstdistcntr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTDISTCNTR, $arstdistcntr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstDunsNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArstdunsnbr('fooValue');   // WHERE ArstDunsNbr = 'fooValue'
     * $query->filterByArstdunsnbr('%fooValue%', Criteria::LIKE); // WHERE ArstDunsNbr LIKE '%fooValue%'
     * $query->filterByArstdunsnbr(['foo', 'bar']); // WHERE ArstDunsNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstdunsnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstdunsnbr($arstdunsnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstdunsnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTDUNSNBR, $arstdunsnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstRfmlValu column
     *
     * Example usage:
     * <code>
     * $query->filterByArstrfmlvalu(1234); // WHERE ArstRfmlValu = 1234
     * $query->filterByArstrfmlvalu(array(12, 34)); // WHERE ArstRfmlValu IN (12, 34)
     * $query->filterByArstrfmlvalu(array('min' => 12)); // WHERE ArstRfmlValu > 12
     * </code>
     *
     * @param mixed $arstrfmlvalu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstrfmlvalu($arstrfmlvalu = null, ?string $comparison = null)
    {
        if (is_array($arstrfmlvalu)) {
            $useMinMax = false;
            if (isset($arstrfmlvalu['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTRFMLVALU, $arstrfmlvalu['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstrfmlvalu['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTRFMLVALU, $arstrfmlvalu['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTRFMLVALU, $arstrfmlvalu, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstCustPoParam column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcustpoparam('fooValue');   // WHERE ArstCustPoParam = 'fooValue'
     * $query->filterByArstcustpoparam('%fooValue%', Criteria::LIKE); // WHERE ArstCustPoParam LIKE '%fooValue%'
     * $query->filterByArstcustpoparam(['foo', 'bar']); // WHERE ArstCustPoParam IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstcustpoparam The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstcustpoparam($arstcustpoparam = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcustpoparam)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCUSTPOPARAM, $arstcustpoparam, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArtbRoutCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbroutcode('fooValue');   // WHERE ArtbRoutCode = 'fooValue'
     * $query->filterByArtbroutcode('%fooValue%', Criteria::LIKE); // WHERE ArtbRoutCode LIKE '%fooValue%'
     * $query->filterByArtbroutcode(['foo', 'bar']); // WHERE ArtbRoutCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $artbroutcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArtbroutcode($artbroutcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbroutcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARTBROUTCODE, $artbroutcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstUpsAcctNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArstupsacctnbr('fooValue');   // WHERE ArstUpsAcctNbr = 'fooValue'
     * $query->filterByArstupsacctnbr('%fooValue%', Criteria::LIKE); // WHERE ArstUpsAcctNbr LIKE '%fooValue%'
     * $query->filterByArstupsacctnbr(['foo', 'bar']); // WHERE ArstUpsAcctNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstupsacctnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstupsacctnbr($arstupsacctnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstupsacctnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTUPSACCTNBR, $arstupsacctnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstFobInputYn column
     *
     * Example usage:
     * <code>
     * $query->filterByArstfobinputyn('fooValue');   // WHERE ArstFobInputYn = 'fooValue'
     * $query->filterByArstfobinputyn('%fooValue%', Criteria::LIKE); // WHERE ArstFobInputYn LIKE '%fooValue%'
     * $query->filterByArstfobinputyn(['foo', 'bar']); // WHERE ArstFobInputYn IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstfobinputyn The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstfobinputyn($arstfobinputyn = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstfobinputyn)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTFOBINPUTYN, $arstfobinputyn, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstFobPerLb column
     *
     * Example usage:
     * <code>
     * $query->filterByArstfobperlb(1234); // WHERE ArstFobPerLb = 1234
     * $query->filterByArstfobperlb(array(12, 34)); // WHERE ArstFobPerLb IN (12, 34)
     * $query->filterByArstfobperlb(array('min' => 12)); // WHERE ArstFobPerLb > 12
     * </code>
     *
     * @param mixed $arstfobperlb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstfobperlb($arstfobperlb = null, ?string $comparison = null)
    {
        if (is_array($arstfobperlb)) {
            $useMinMax = false;
            if (isset($arstfobperlb['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTFOBPERLB, $arstfobperlb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstfobperlb['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTFOBPERLB, $arstfobperlb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTFOBPERLB, $arstfobperlb, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstSaleYtd column
     *
     * Example usage:
     * <code>
     * $query->filterByArstsaleytd(1234); // WHERE ArstSaleYtd = 1234
     * $query->filterByArstsaleytd(array(12, 34)); // WHERE ArstSaleYtd IN (12, 34)
     * $query->filterByArstsaleytd(array('min' => 12)); // WHERE ArstSaleYtd > 12
     * </code>
     *
     * @param mixed $arstsaleytd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstsaleytd($arstsaleytd = null, ?string $comparison = null)
    {
        if (is_array($arstsaleytd)) {
            $useMinMax = false;
            if (isset($arstsaleytd['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALEYTD, $arstsaleytd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstsaleytd['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALEYTD, $arstsaleytd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALEYTD, $arstsaleytd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstInvYtd column
     *
     * Example usage:
     * <code>
     * $query->filterByArstinvytd(1234); // WHERE ArstInvYtd = 1234
     * $query->filterByArstinvytd(array(12, 34)); // WHERE ArstInvYtd IN (12, 34)
     * $query->filterByArstinvytd(array('min' => 12)); // WHERE ArstInvYtd > 12
     * </code>
     *
     * @param mixed $arstinvytd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstinvytd($arstinvytd = null, ?string $comparison = null)
    {
        if (is_array($arstinvytd)) {
            $useMinMax = false;
            if (isset($arstinvytd['min'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINVYTD, $arstinvytd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arstinvytd['max'])) {
                $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINVYTD, $arstinvytd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINVYTD, $arstinvytd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the ArstEmailFaxAuthCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArstemailfaxauthcode('fooValue');   // WHERE ArstEmailFaxAuthCode = 'fooValue'
     * $query->filterByArstemailfaxauthcode('%fooValue%', Criteria::LIKE); // WHERE ArstEmailFaxAuthCode LIKE '%fooValue%'
     * $query->filterByArstemailfaxauthcode(['foo', 'bar']); // WHERE ArstEmailFaxAuthCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $arstemailfaxauthcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArstemailfaxauthcode($arstemailfaxauthcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstemailfaxauthcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTEMAILFAXAUTHCODE, $arstemailfaxauthcode, $comparison);

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

        $this->addUsingAlias(CustomerShiptoTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(CustomerShiptoTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(CustomerShiptoTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomer($customer, ?string $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinCustomer(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Customer');

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
            $this->addJoinObject($join, 'Customer');
        }

        return $this;
    }

    /**
     * Use the Customer relation Customer object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerQuery A secondary query class using the current class as primary query
     */
    public function useCustomerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Customer', '\CustomerQuery');
    }

    /**
     * Use the Customer relation Customer object
     *
     * @param callable(\CustomerQuery):\CustomerQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withCustomerQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useCustomerQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Customer table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \CustomerQuery The inner query object of the EXISTS statement
     */
    public function useCustomerExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT EXISTS query.
     *
     * @see useCustomerExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT EXISTS statement
     */
    public function useCustomerNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useExistsQuery('Customer', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Customer table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \CustomerQuery The inner query object of the IN statement
     */
    public function useInCustomerQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Customer table for a NOT IN query.
     *
     * @see useCustomerInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \CustomerQuery The inner query object of the NOT IN statement
     */
    public function useNotInCustomerQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \CustomerQuery */
        $q = $this->useInQuery('Customer', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \ArContact object
     *
     * @param \ArContact|ObjectCollection $arContact the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByArContact($arContact, ?string $comparison = null)
    {
        if ($arContact instanceof \ArContact) {
            $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $arContact->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $arContact->getArstshipid(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByArContact() only accepts arguments of type \ArContact');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ArContact relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinArContact(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ArContact');

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
            $this->addJoinObject($join, 'ArContact');
        }

        return $this;
    }

    /**
     * Use the ArContact relation ArContact object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ArContactQuery A secondary query class using the current class as primary query
     */
    public function useArContactQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinArContact($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ArContact', '\ArContactQuery');
    }

    /**
     * Use the ArContact relation ArContact object
     *
     * @param callable(\ArContactQuery):\ArContactQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withArContactQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useArContactQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to ArContact table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \ArContactQuery The inner query object of the EXISTS statement
     */
    public function useArContactExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \ArContactQuery */
        $q = $this->useExistsQuery('ArContact', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to ArContact table for a NOT EXISTS query.
     *
     * @see useArContactExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \ArContactQuery The inner query object of the NOT EXISTS statement
     */
    public function useArContactNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ArContactQuery */
        $q = $this->useExistsQuery('ArContact', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to ArContact table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \ArContactQuery The inner query object of the IN statement
     */
    public function useInArContactQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \ArContactQuery */
        $q = $this->useInQuery('ArContact', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to ArContact table for a NOT IN query.
     *
     * @see useArContactInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \ArContactQuery The inner query object of the NOT IN statement
     */
    public function useNotInArContactQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \ArContactQuery */
        $q = $this->useInQuery('ArContact', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \InvTransferOrder object
     *
     * @param \InvTransferOrder|ObjectCollection $invTransferOrder the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByInvTransferOrder($invTransferOrder, ?string $comparison = null)
    {
        if ($invTransferOrder instanceof \InvTransferOrder) {
            $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $invTransferOrder->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $invTransferOrder->getArstshipid(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByInvTransferOrder() only accepts arguments of type \InvTransferOrder');
        }
    }

    /**
     * Adds a JOIN clause to the query using the InvTransferOrder relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinInvTransferOrder(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('InvTransferOrder');

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
            $this->addJoinObject($join, 'InvTransferOrder');
        }

        return $this;
    }

    /**
     * Use the InvTransferOrder relation InvTransferOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \InvTransferOrderQuery A secondary query class using the current class as primary query
     */
    public function useInvTransferOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinInvTransferOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'InvTransferOrder', '\InvTransferOrderQuery');
    }

    /**
     * Use the InvTransferOrder relation InvTransferOrder object
     *
     * @param callable(\InvTransferOrderQuery):\InvTransferOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withInvTransferOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useInvTransferOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to InvTransferOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \InvTransferOrderQuery The inner query object of the EXISTS statement
     */
    public function useInvTransferOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \InvTransferOrderQuery */
        $q = $this->useExistsQuery('InvTransferOrder', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to InvTransferOrder table for a NOT EXISTS query.
     *
     * @see useInvTransferOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \InvTransferOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useInvTransferOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferOrderQuery */
        $q = $this->useExistsQuery('InvTransferOrder', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to InvTransferOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \InvTransferOrderQuery The inner query object of the IN statement
     */
    public function useInInvTransferOrderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \InvTransferOrderQuery */
        $q = $this->useInQuery('InvTransferOrder', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to InvTransferOrder table for a NOT IN query.
     *
     * @see useInvTransferOrderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \InvTransferOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInInvTransferOrderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \InvTransferOrderQuery */
        $q = $this->useInQuery('InvTransferOrder', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \NoteCustInternal object
     *
     * @param \NoteCustInternal|ObjectCollection $noteCustInternal the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByNoteCustInternal($noteCustInternal, ?string $comparison = null)
    {
        if ($noteCustInternal instanceof \NoteCustInternal) {
            $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $noteCustInternal->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $noteCustInternal->getArstshipid(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByNoteCustInternal() only accepts arguments of type \NoteCustInternal');
        }
    }

    /**
     * Adds a JOIN clause to the query using the NoteCustInternal relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinNoteCustInternal(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('NoteCustInternal');

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
            $this->addJoinObject($join, 'NoteCustInternal');
        }

        return $this;
    }

    /**
     * Use the NoteCustInternal relation NoteCustInternal object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \NoteCustInternalQuery A secondary query class using the current class as primary query
     */
    public function useNoteCustInternalQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinNoteCustInternal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'NoteCustInternal', '\NoteCustInternalQuery');
    }

    /**
     * Use the NoteCustInternal relation NoteCustInternal object
     *
     * @param callable(\NoteCustInternalQuery):\NoteCustInternalQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withNoteCustInternalQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useNoteCustInternalQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to NoteCustInternal table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \NoteCustInternalQuery The inner query object of the EXISTS statement
     */
    public function useNoteCustInternalExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \NoteCustInternalQuery */
        $q = $this->useExistsQuery('NoteCustInternal', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to NoteCustInternal table for a NOT EXISTS query.
     *
     * @see useNoteCustInternalExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \NoteCustInternalQuery The inner query object of the NOT EXISTS statement
     */
    public function useNoteCustInternalNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \NoteCustInternalQuery */
        $q = $this->useExistsQuery('NoteCustInternal', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to NoteCustInternal table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \NoteCustInternalQuery The inner query object of the IN statement
     */
    public function useInNoteCustInternalQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \NoteCustInternalQuery */
        $q = $this->useInQuery('NoteCustInternal', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to NoteCustInternal table for a NOT IN query.
     *
     * @see useNoteCustInternalInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \NoteCustInternalQuery The inner query object of the NOT IN statement
     */
    public function useNotInNoteCustInternalQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \NoteCustInternalQuery */
        $q = $this->useInQuery('NoteCustInternal', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \NoteCustOrder object
     *
     * @param \NoteCustOrder|ObjectCollection $noteCustOrder the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByNoteCustOrder($noteCustOrder, ?string $comparison = null)
    {
        if ($noteCustOrder instanceof \NoteCustOrder) {
            $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $noteCustOrder->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $noteCustOrder->getArstshipid(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByNoteCustOrder() only accepts arguments of type \NoteCustOrder');
        }
    }

    /**
     * Adds a JOIN clause to the query using the NoteCustOrder relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinNoteCustOrder(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('NoteCustOrder');

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
            $this->addJoinObject($join, 'NoteCustOrder');
        }

        return $this;
    }

    /**
     * Use the NoteCustOrder relation NoteCustOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \NoteCustOrderQuery A secondary query class using the current class as primary query
     */
    public function useNoteCustOrderQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinNoteCustOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'NoteCustOrder', '\NoteCustOrderQuery');
    }

    /**
     * Use the NoteCustOrder relation NoteCustOrder object
     *
     * @param callable(\NoteCustOrderQuery):\NoteCustOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withNoteCustOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useNoteCustOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to NoteCustOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \NoteCustOrderQuery The inner query object of the EXISTS statement
     */
    public function useNoteCustOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \NoteCustOrderQuery */
        $q = $this->useExistsQuery('NoteCustOrder', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to NoteCustOrder table for a NOT EXISTS query.
     *
     * @see useNoteCustOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \NoteCustOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useNoteCustOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \NoteCustOrderQuery */
        $q = $this->useExistsQuery('NoteCustOrder', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to NoteCustOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \NoteCustOrderQuery The inner query object of the IN statement
     */
    public function useInNoteCustOrderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \NoteCustOrderQuery */
        $q = $this->useInQuery('NoteCustOrder', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to NoteCustOrder table for a NOT IN query.
     *
     * @see useNoteCustOrderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \NoteCustOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInNoteCustOrderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \NoteCustOrderQuery */
        $q = $this->useInQuery('NoteCustOrder', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \BookingDayCustomer object
     *
     * @param \BookingDayCustomer|ObjectCollection $bookingDayCustomer the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBookingDayCustomer($bookingDayCustomer, ?string $comparison = null)
    {
        if ($bookingDayCustomer instanceof \BookingDayCustomer) {
            $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $bookingDayCustomer->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $bookingDayCustomer->getArstshipid(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByBookingDayCustomer() only accepts arguments of type \BookingDayCustomer');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BookingDayCustomer relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinBookingDayCustomer(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BookingDayCustomer');

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
            $this->addJoinObject($join, 'BookingDayCustomer');
        }

        return $this;
    }

    /**
     * Use the BookingDayCustomer relation BookingDayCustomer object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \BookingDayCustomerQuery A secondary query class using the current class as primary query
     */
    public function useBookingDayCustomerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBookingDayCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BookingDayCustomer', '\BookingDayCustomerQuery');
    }

    /**
     * Use the BookingDayCustomer relation BookingDayCustomer object
     *
     * @param callable(\BookingDayCustomerQuery):\BookingDayCustomerQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withBookingDayCustomerQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useBookingDayCustomerQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to BookingDayCustomer table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \BookingDayCustomerQuery The inner query object of the EXISTS statement
     */
    public function useBookingDayCustomerExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \BookingDayCustomerQuery */
        $q = $this->useExistsQuery('BookingDayCustomer', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to BookingDayCustomer table for a NOT EXISTS query.
     *
     * @see useBookingDayCustomerExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \BookingDayCustomerQuery The inner query object of the NOT EXISTS statement
     */
    public function useBookingDayCustomerNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BookingDayCustomerQuery */
        $q = $this->useExistsQuery('BookingDayCustomer', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to BookingDayCustomer table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \BookingDayCustomerQuery The inner query object of the IN statement
     */
    public function useInBookingDayCustomerQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \BookingDayCustomerQuery */
        $q = $this->useInQuery('BookingDayCustomer', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to BookingDayCustomer table for a NOT IN query.
     *
     * @see useBookingDayCustomerInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \BookingDayCustomerQuery The inner query object of the NOT IN statement
     */
    public function useNotInBookingDayCustomerQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BookingDayCustomerQuery */
        $q = $this->useInQuery('BookingDayCustomer', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \BookingDayDetail object
     *
     * @param \BookingDayDetail|ObjectCollection $bookingDayDetail the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBookingDayDetail($bookingDayDetail, ?string $comparison = null)
    {
        if ($bookingDayDetail instanceof \BookingDayDetail) {
            $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $bookingDayDetail->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $bookingDayDetail->getArstshipid(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByBookingDayDetail() only accepts arguments of type \BookingDayDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BookingDayDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinBookingDayDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BookingDayDetail');

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
            $this->addJoinObject($join, 'BookingDayDetail');
        }

        return $this;
    }

    /**
     * Use the BookingDayDetail relation BookingDayDetail object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \BookingDayDetailQuery A secondary query class using the current class as primary query
     */
    public function useBookingDayDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBookingDayDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BookingDayDetail', '\BookingDayDetailQuery');
    }

    /**
     * Use the BookingDayDetail relation BookingDayDetail object
     *
     * @param callable(\BookingDayDetailQuery):\BookingDayDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withBookingDayDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useBookingDayDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to BookingDayDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \BookingDayDetailQuery The inner query object of the EXISTS statement
     */
    public function useBookingDayDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \BookingDayDetailQuery */
        $q = $this->useExistsQuery('BookingDayDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to BookingDayDetail table for a NOT EXISTS query.
     *
     * @see useBookingDayDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \BookingDayDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function useBookingDayDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BookingDayDetailQuery */
        $q = $this->useExistsQuery('BookingDayDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to BookingDayDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \BookingDayDetailQuery The inner query object of the IN statement
     */
    public function useInBookingDayDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \BookingDayDetailQuery */
        $q = $this->useInQuery('BookingDayDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to BookingDayDetail table for a NOT IN query.
     *
     * @see useBookingDayDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \BookingDayDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInBookingDayDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BookingDayDetailQuery */
        $q = $this->useInQuery('BookingDayDetail', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Booking object
     *
     * @param \Booking|ObjectCollection $booking the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByBooking($booking, ?string $comparison = null)
    {
        if ($booking instanceof \Booking) {
            $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $booking->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $booking->getArstshipid(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByBooking() only accepts arguments of type \Booking');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Booking relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinBooking(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Booking');

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
            $this->addJoinObject($join, 'Booking');
        }

        return $this;
    }

    /**
     * Use the Booking relation Booking object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \BookingQuery A secondary query class using the current class as primary query
     */
    public function useBookingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinBooking($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Booking', '\BookingQuery');
    }

    /**
     * Use the Booking relation Booking object
     *
     * @param callable(\BookingQuery):\BookingQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withBookingQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useBookingQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to Booking table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \BookingQuery The inner query object of the EXISTS statement
     */
    public function useBookingExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \BookingQuery */
        $q = $this->useExistsQuery('Booking', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to Booking table for a NOT EXISTS query.
     *
     * @see useBookingExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \BookingQuery The inner query object of the NOT EXISTS statement
     */
    public function useBookingNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BookingQuery */
        $q = $this->useExistsQuery('Booking', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to Booking table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \BookingQuery The inner query object of the IN statement
     */
    public function useInBookingQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \BookingQuery */
        $q = $this->useInQuery('Booking', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to Booking table for a NOT IN query.
     *
     * @see useBookingInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \BookingQuery The inner query object of the NOT IN statement
     */
    public function useNotInBookingQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \BookingQuery */
        $q = $this->useInQuery('Booking', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesHistory object
     *
     * @param \SalesHistory|ObjectCollection $salesHistory the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesHistory($salesHistory, ?string $comparison = null)
    {
        if ($salesHistory instanceof \SalesHistory) {
            $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $salesHistory->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $salesHistory->getArstshipid(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySalesHistory() only accepts arguments of type \SalesHistory');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistory relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesHistory(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesHistory');

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
            $this->addJoinObject($join, 'SalesHistory');
        }

        return $this;
    }

    /**
     * Use the SalesHistory relation SalesHistory object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesHistoryQuery A secondary query class using the current class as primary query
     */
    public function useSalesHistoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesHistory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesHistory', '\SalesHistoryQuery');
    }

    /**
     * Use the SalesHistory relation SalesHistory object
     *
     * @param callable(\SalesHistoryQuery):\SalesHistoryQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesHistoryQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesHistoryQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesHistory table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesHistoryQuery The inner query object of the EXISTS statement
     */
    public function useSalesHistoryExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useExistsQuery('SalesHistory', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesHistory table for a NOT EXISTS query.
     *
     * @see useSalesHistoryExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesHistoryNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useExistsQuery('SalesHistory', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesHistory table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesHistoryQuery The inner query object of the IN statement
     */
    public function useInSalesHistoryQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useInQuery('SalesHistory', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesHistory table for a NOT IN query.
     *
     * @see useSalesHistoryInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesHistoryQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesHistoryQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesHistoryQuery */
        $q = $this->useInQuery('SalesHistory', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SalesOrder object
     *
     * @param \SalesOrder|ObjectCollection $salesOrder the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySalesOrder($salesOrder, ?string $comparison = null)
    {
        if ($salesOrder instanceof \SalesOrder) {
            $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $salesOrder->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $salesOrder->getArstshipid(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySalesOrder() only accepts arguments of type \SalesOrder');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrder relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSalesOrder(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesOrder');

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
            $this->addJoinObject($join, 'SalesOrder');
        }

        return $this;
    }

    /**
     * Use the SalesOrder relation SalesOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SalesOrderQuery A secondary query class using the current class as primary query
     */
    public function useSalesOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrder', '\SalesOrderQuery');
    }

    /**
     * Use the SalesOrder relation SalesOrder object
     *
     * @param callable(\SalesOrderQuery):\SalesOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSalesOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSalesOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SalesOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SalesOrderQuery The inner query object of the EXISTS statement
     */
    public function useSalesOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useExistsQuery('SalesOrder', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SalesOrder table for a NOT EXISTS query.
     *
     * @see useSalesOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useSalesOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useExistsQuery('SalesOrder', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SalesOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SalesOrderQuery The inner query object of the IN statement
     */
    public function useInSalesOrderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useInQuery('SalesOrder', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SalesOrder table for a NOT IN query.
     *
     * @see useSalesOrderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SalesOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInSalesOrderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SalesOrderQuery */
        $q = $this->useInQuery('SalesOrder', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SoStandingOrderDetail object
     *
     * @param \SoStandingOrderDetail|ObjectCollection $soStandingOrderDetail the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySoStandingOrderDetail($soStandingOrderDetail, ?string $comparison = null)
    {
        if ($soStandingOrderDetail instanceof \SoStandingOrderDetail) {
            $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $soStandingOrderDetail->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $soStandingOrderDetail->getArstshipid(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySoStandingOrderDetail() only accepts arguments of type \SoStandingOrderDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoStandingOrderDetail relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSoStandingOrderDetail(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoStandingOrderDetail');

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
            $this->addJoinObject($join, 'SoStandingOrderDetail');
        }

        return $this;
    }

    /**
     * Use the SoStandingOrderDetail relation SoStandingOrderDetail object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SoStandingOrderDetailQuery A secondary query class using the current class as primary query
     */
    public function useSoStandingOrderDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSoStandingOrderDetail($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoStandingOrderDetail', '\SoStandingOrderDetailQuery');
    }

    /**
     * Use the SoStandingOrderDetail relation SoStandingOrderDetail object
     *
     * @param callable(\SoStandingOrderDetailQuery):\SoStandingOrderDetailQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSoStandingOrderDetailQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSoStandingOrderDetailQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SoStandingOrderDetail table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SoStandingOrderDetailQuery The inner query object of the EXISTS statement
     */
    public function useSoStandingOrderDetailExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SoStandingOrderDetailQuery */
        $q = $this->useExistsQuery('SoStandingOrderDetail', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SoStandingOrderDetail table for a NOT EXISTS query.
     *
     * @see useSoStandingOrderDetailExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SoStandingOrderDetailQuery The inner query object of the NOT EXISTS statement
     */
    public function useSoStandingOrderDetailNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoStandingOrderDetailQuery */
        $q = $this->useExistsQuery('SoStandingOrderDetail', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SoStandingOrderDetail table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SoStandingOrderDetailQuery The inner query object of the IN statement
     */
    public function useInSoStandingOrderDetailQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SoStandingOrderDetailQuery */
        $q = $this->useInQuery('SoStandingOrderDetail', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SoStandingOrderDetail table for a NOT IN query.
     *
     * @see useSoStandingOrderDetailInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SoStandingOrderDetailQuery The inner query object of the NOT IN statement
     */
    public function useNotInSoStandingOrderDetailQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoStandingOrderDetailQuery */
        $q = $this->useInQuery('SoStandingOrderDetail', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \SoStandingOrder object
     *
     * @param \SoStandingOrder|ObjectCollection $soStandingOrder the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySoStandingOrder($soStandingOrder, ?string $comparison = null)
    {
        if ($soStandingOrder instanceof \SoStandingOrder) {
            $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $soStandingOrder->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $soStandingOrder->getArstshipid(), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySoStandingOrder() only accepts arguments of type \SoStandingOrder');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoStandingOrder relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSoStandingOrder(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SoStandingOrder');

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
            $this->addJoinObject($join, 'SoStandingOrder');
        }

        return $this;
    }

    /**
     * Use the SoStandingOrder relation SoStandingOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \SoStandingOrderQuery A secondary query class using the current class as primary query
     */
    public function useSoStandingOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSoStandingOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SoStandingOrder', '\SoStandingOrderQuery');
    }

    /**
     * Use the SoStandingOrder relation SoStandingOrder object
     *
     * @param callable(\SoStandingOrderQuery):\SoStandingOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSoStandingOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSoStandingOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SoStandingOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \SoStandingOrderQuery The inner query object of the EXISTS statement
     */
    public function useSoStandingOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \SoStandingOrderQuery */
        $q = $this->useExistsQuery('SoStandingOrder', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SoStandingOrder table for a NOT EXISTS query.
     *
     * @see useSoStandingOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \SoStandingOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useSoStandingOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoStandingOrderQuery */
        $q = $this->useExistsQuery('SoStandingOrder', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SoStandingOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \SoStandingOrderQuery The inner query object of the IN statement
     */
    public function useInSoStandingOrderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \SoStandingOrderQuery */
        $q = $this->useInQuery('SoStandingOrder', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SoStandingOrder table for a NOT IN query.
     *
     * @see useSoStandingOrderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \SoStandingOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInSoStandingOrderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \SoStandingOrderQuery */
        $q = $this->useInQuery('SoStandingOrder', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildCustomerShipto $customerShipto Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($customerShipto = null)
    {
        if ($customerShipto) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CustomerShiptoTableMap::COL_ARCUCUSTID), $customerShipto->getArcucustid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CustomerShiptoTableMap::COL_ARSTSHIPID), $customerShipto->getArstshipid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_ship_to table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerShiptoTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomerShiptoTableMap::clearInstancePool();
            CustomerShiptoTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerShiptoTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CustomerShiptoTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CustomerShiptoTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CustomerShiptoTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
