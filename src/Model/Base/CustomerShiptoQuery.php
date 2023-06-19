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
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_ship_to' table.
 *
 *
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
 * @method     \CustomerQuery|\ArContactQuery|\BookingDayCustomerQuery|\BookingDayDetailQuery|\BookingQuery|\SalesHistoryQuery|\SalesOrderQuery|\SoStandingOrderDetailQuery|\SoStandingOrderQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCustomerShipto findOne(ConnectionInterface $con = null) Return the first ChildCustomerShipto matching the query
 * @method     ChildCustomerShipto findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCustomerShipto matching the query, or a new ChildCustomerShipto object populated from the query conditions when no match is found
 *
 * @method     ChildCustomerShipto findOneByArcucustid(string $ArcuCustId) Return the first ChildCustomerShipto filtered by the ArcuCustId column
 * @method     ChildCustomerShipto findOneByArstshipid(string $ArstShipId) Return the first ChildCustomerShipto filtered by the ArstShipId column
 * @method     ChildCustomerShipto findOneByArstname(string $ArstName) Return the first ChildCustomerShipto filtered by the ArstName column
 * @method     ChildCustomerShipto findOneByArstadr1(string $ArstAdr1) Return the first ChildCustomerShipto filtered by the ArstAdr1 column
 * @method     ChildCustomerShipto findOneByArstadr2(string $ArstAdr2) Return the first ChildCustomerShipto filtered by the ArstAdr2 column
 * @method     ChildCustomerShipto findOneByArstadr3(string $ArstAdr3) Return the first ChildCustomerShipto filtered by the ArstAdr3 column
 * @method     ChildCustomerShipto findOneByArstctry(string $ArstCtry) Return the first ChildCustomerShipto filtered by the ArstCtry column
 * @method     ChildCustomerShipto findOneByArstcity(string $ArstCity) Return the first ChildCustomerShipto filtered by the ArstCity column
 * @method     ChildCustomerShipto findOneByArststat(string $ArstStat) Return the first ChildCustomerShipto filtered by the ArstStat column
 * @method     ChildCustomerShipto findOneByArstzipcode(string $ArstZipCode) Return the first ChildCustomerShipto filtered by the ArstZipCode column
 * @method     ChildCustomerShipto findOneByArstdeliverydays(int $ArstDeliveryDays) Return the first ChildCustomerShipto filtered by the ArstDeliveryDays column
 * @method     ChildCustomerShipto findOneByArstcommcode(string $ArstCommCode) Return the first ChildCustomerShipto filtered by the ArstCommCode column
 * @method     ChildCustomerShipto findOneByArstallowsplit(string $ArstAllowSplit) Return the first ChildCustomerShipto filtered by the ArstAllowSplit column
 * @method     ChildCustomerShipto findOneByArstlindstsp(string $ArstLindstSp) Return the first ChildCustomerShipto filtered by the ArstLindstSp column
 * @method     ChildCustomerShipto findOneByArstlmecommcustid(string $ArstLmEcommCustId) Return the first ChildCustomerShipto filtered by the ArstLmEcommCustId column
 * @method     ChildCustomerShipto findOneByArstcatlgid(string $ArstCatlgId) Return the first ChildCustomerShipto filtered by the ArstCatlgId column
 * @method     ChildCustomerShipto findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildCustomerShipto filtered by the ArspSalePer1 column
 * @method     ChildCustomerShipto findOneByArspsaleper2(string $ArspSalePer2) Return the first ChildCustomerShipto filtered by the ArspSalePer2 column
 * @method     ChildCustomerShipto findOneByArspsaleper3(string $ArspSalePer3) Return the first ChildCustomerShipto filtered by the ArspSalePer3 column
 * @method     ChildCustomerShipto findOneByArtbctaxcode(string $ArtbCtaxCode) Return the first ChildCustomerShipto filtered by the ArtbCtaxCode column
 * @method     ChildCustomerShipto findOneByArsttaxexemnbr(string $ArstTaxExemNbr) Return the first ChildCustomerShipto filtered by the ArstTaxExemNbr column
 * @method     ChildCustomerShipto findOneByIntbwhse(string $IntbWhse) Return the first ChildCustomerShipto filtered by the IntbWhse column
 * @method     ChildCustomerShipto findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildCustomerShipto filtered by the ArtbShipVia column
 * @method     ChildCustomerShipto findOneByArstbord(string $ArstBord) Return the first ChildCustomerShipto filtered by the ArstBord column
 * @method     ChildCustomerShipto findOneByArstcredhold(string $ArstCredHold) Return the first ChildCustomerShipto filtered by the ArstCredHold column
 * @method     ChildCustomerShipto findOneByArstusercode(string $ArstUserCode) Return the first ChildCustomerShipto filtered by the ArstUserCode column
 * @method     ChildCustomerShipto findOneByArstpriclvl(string $ArstPricLvl) Return the first ChildCustomerShipto filtered by the ArstPricLvl column
 * @method     ChildCustomerShipto findOneByArstshipcomp(string $ArstShipComp) Return the first ChildCustomerShipto filtered by the ArstShipComp column
 * @method     ChildCustomerShipto findOneByArsttxbl(string $ArstTxbl) Return the first ChildCustomerShipto filtered by the ArstTxbl column
 * @method     ChildCustomerShipto findOneByArstpostal(string $ArstPostal) Return the first ChildCustomerShipto filtered by the ArstPostal column
 * @method     ChildCustomerShipto findOneByArstsalemtd(string $ArstSaleMtd) Return the first ChildCustomerShipto filtered by the ArstSaleMtd column
 * @method     ChildCustomerShipto findOneByArstinvmtd(int $ArstInvMtd) Return the first ChildCustomerShipto filtered by the ArstInvMtd column
 * @method     ChildCustomerShipto findOneByArstdateopen(string $ArstDateOpen) Return the first ChildCustomerShipto filtered by the ArstDateOpen column
 * @method     ChildCustomerShipto findOneByArstlastsaledate(string $ArstLastSaleDate) Return the first ChildCustomerShipto filtered by the ArstLastSaleDate column
 * @method     ChildCustomerShipto findOneByArstsale24mo1(string $ArstSale24mo1) Return the first ChildCustomerShipto filtered by the ArstSale24mo1 column
 * @method     ChildCustomerShipto findOneByArstinv24mo1(int $ArstInv24mo1) Return the first ChildCustomerShipto filtered by the ArstInv24mo1 column
 * @method     ChildCustomerShipto findOneByArstsale24mo2(string $ArstSale24mo2) Return the first ChildCustomerShipto filtered by the ArstSale24mo2 column
 * @method     ChildCustomerShipto findOneByArstinv24mo2(int $ArstInv24mo2) Return the first ChildCustomerShipto filtered by the ArstInv24mo2 column
 * @method     ChildCustomerShipto findOneByArstsale24mo3(string $ArstSale24mo3) Return the first ChildCustomerShipto filtered by the ArstSale24mo3 column
 * @method     ChildCustomerShipto findOneByArstinv24mo3(int $ArstInv24mo3) Return the first ChildCustomerShipto filtered by the ArstInv24mo3 column
 * @method     ChildCustomerShipto findOneByArstsale24mo4(string $ArstSale24mo4) Return the first ChildCustomerShipto filtered by the ArstSale24mo4 column
 * @method     ChildCustomerShipto findOneByArstinv24mo4(int $ArstInv24mo4) Return the first ChildCustomerShipto filtered by the ArstInv24mo4 column
 * @method     ChildCustomerShipto findOneByArstsale24mo5(string $ArstSale24mo5) Return the first ChildCustomerShipto filtered by the ArstSale24mo5 column
 * @method     ChildCustomerShipto findOneByArstinv24mo5(int $ArstInv24mo5) Return the first ChildCustomerShipto filtered by the ArstInv24mo5 column
 * @method     ChildCustomerShipto findOneByArstsale24mo6(string $ArstSale24mo6) Return the first ChildCustomerShipto filtered by the ArstSale24mo6 column
 * @method     ChildCustomerShipto findOneByArstinv24mo6(int $ArstInv24mo6) Return the first ChildCustomerShipto filtered by the ArstInv24mo6 column
 * @method     ChildCustomerShipto findOneByArstsale24mo7(string $ArstSale24mo7) Return the first ChildCustomerShipto filtered by the ArstSale24mo7 column
 * @method     ChildCustomerShipto findOneByArstinv24mo7(int $ArstInv24mo7) Return the first ChildCustomerShipto filtered by the ArstInv24mo7 column
 * @method     ChildCustomerShipto findOneByArstsale24mo8(string $ArstSale24mo8) Return the first ChildCustomerShipto filtered by the ArstSale24mo8 column
 * @method     ChildCustomerShipto findOneByArstinv24mo8(int $ArstInv24mo8) Return the first ChildCustomerShipto filtered by the ArstInv24mo8 column
 * @method     ChildCustomerShipto findOneByArstsale24mo9(string $ArstSale24mo9) Return the first ChildCustomerShipto filtered by the ArstSale24mo9 column
 * @method     ChildCustomerShipto findOneByArstinv24mo9(int $ArstInv24mo9) Return the first ChildCustomerShipto filtered by the ArstInv24mo9 column
 * @method     ChildCustomerShipto findOneByArstsale24mo10(string $ArstSale24mo10) Return the first ChildCustomerShipto filtered by the ArstSale24mo10 column
 * @method     ChildCustomerShipto findOneByArstinv24mo10(int $ArstInv24mo10) Return the first ChildCustomerShipto filtered by the ArstInv24mo10 column
 * @method     ChildCustomerShipto findOneByArstsale24mo11(string $ArstSale24mo11) Return the first ChildCustomerShipto filtered by the ArstSale24mo11 column
 * @method     ChildCustomerShipto findOneByArstinv24mo11(int $ArstInv24mo11) Return the first ChildCustomerShipto filtered by the ArstInv24mo11 column
 * @method     ChildCustomerShipto findOneByArstsale24mo12(string $ArstSale24mo12) Return the first ChildCustomerShipto filtered by the ArstSale24mo12 column
 * @method     ChildCustomerShipto findOneByArstinv24mo12(int $ArstInv24mo12) Return the first ChildCustomerShipto filtered by the ArstInv24mo12 column
 * @method     ChildCustomerShipto findOneByArstsale24mo13(string $ArstSale24mo13) Return the first ChildCustomerShipto filtered by the ArstSale24mo13 column
 * @method     ChildCustomerShipto findOneByArstinv24mo13(int $ArstInv24mo13) Return the first ChildCustomerShipto filtered by the ArstInv24mo13 column
 * @method     ChildCustomerShipto findOneByArstsale24mo14(string $ArstSale24mo14) Return the first ChildCustomerShipto filtered by the ArstSale24mo14 column
 * @method     ChildCustomerShipto findOneByArstinv24mo14(int $ArstInv24mo14) Return the first ChildCustomerShipto filtered by the ArstInv24mo14 column
 * @method     ChildCustomerShipto findOneByArstsale24mo15(string $ArstSale24mo15) Return the first ChildCustomerShipto filtered by the ArstSale24mo15 column
 * @method     ChildCustomerShipto findOneByArstinv24mo15(int $ArstInv24mo15) Return the first ChildCustomerShipto filtered by the ArstInv24mo15 column
 * @method     ChildCustomerShipto findOneByArstsale24mo16(string $ArstSale24mo16) Return the first ChildCustomerShipto filtered by the ArstSale24mo16 column
 * @method     ChildCustomerShipto findOneByArstinv24mo16(int $ArstInv24mo16) Return the first ChildCustomerShipto filtered by the ArstInv24mo16 column
 * @method     ChildCustomerShipto findOneByArstsale24mo17(string $ArstSale24mo17) Return the first ChildCustomerShipto filtered by the ArstSale24mo17 column
 * @method     ChildCustomerShipto findOneByArstinv24mo17(int $ArstInv24mo17) Return the first ChildCustomerShipto filtered by the ArstInv24mo17 column
 * @method     ChildCustomerShipto findOneByArstsale24mo18(string $ArstSale24mo18) Return the first ChildCustomerShipto filtered by the ArstSale24mo18 column
 * @method     ChildCustomerShipto findOneByArstinv24mo18(int $ArstInv24mo18) Return the first ChildCustomerShipto filtered by the ArstInv24mo18 column
 * @method     ChildCustomerShipto findOneByArstsale24mo19(string $ArstSale24mo19) Return the first ChildCustomerShipto filtered by the ArstSale24mo19 column
 * @method     ChildCustomerShipto findOneByArstinv24mo19(int $ArstInv24mo19) Return the first ChildCustomerShipto filtered by the ArstInv24mo19 column
 * @method     ChildCustomerShipto findOneByArstsale24mo20(string $ArstSale24mo20) Return the first ChildCustomerShipto filtered by the ArstSale24mo20 column
 * @method     ChildCustomerShipto findOneByArstinv24mo20(int $ArstInv24mo20) Return the first ChildCustomerShipto filtered by the ArstInv24mo20 column
 * @method     ChildCustomerShipto findOneByArstsale24mo21(string $ArstSale24mo21) Return the first ChildCustomerShipto filtered by the ArstSale24mo21 column
 * @method     ChildCustomerShipto findOneByArstinv24mo21(int $ArstInv24mo21) Return the first ChildCustomerShipto filtered by the ArstInv24mo21 column
 * @method     ChildCustomerShipto findOneByArstsale24mo22(string $ArstSale24mo22) Return the first ChildCustomerShipto filtered by the ArstSale24mo22 column
 * @method     ChildCustomerShipto findOneByArstinv24mo22(int $ArstInv24mo22) Return the first ChildCustomerShipto filtered by the ArstInv24mo22 column
 * @method     ChildCustomerShipto findOneByArstsale24mo23(string $ArstSale24mo23) Return the first ChildCustomerShipto filtered by the ArstSale24mo23 column
 * @method     ChildCustomerShipto findOneByArstinv24mo23(int $ArstInv24mo23) Return the first ChildCustomerShipto filtered by the ArstInv24mo23 column
 * @method     ChildCustomerShipto findOneByArstsale24mo24(string $ArstSale24mo24) Return the first ChildCustomerShipto filtered by the ArstSale24mo24 column
 * @method     ChildCustomerShipto findOneByArstinv24mo24(int $ArstInv24mo24) Return the first ChildCustomerShipto filtered by the ArstInv24mo24 column
 * @method     ChildCustomerShipto findOneByArstprimshipid(string $ArstPrimShipId) Return the first ChildCustomerShipto filtered by the ArstPrimShipId column
 * @method     ChildCustomerShipto findOneByArstmyvendid(string $ArstMyVendId) Return the first ChildCustomerShipto filtered by the ArstMyVendId column
 * @method     ChildCustomerShipto findOneByArstaddlpricdisc(string $ArstAddlPricDisc) Return the first ChildCustomerShipto filtered by the ArstAddlPricDisc column
 * @method     ChildCustomerShipto findOneByArstediinvc(string $ArstEdiInvc) Return the first ChildCustomerShipto filtered by the ArstEdiInvc column
 * @method     ChildCustomerShipto findOneByArstchrgfrt(string $ArstChrgFrt) Return the first ChildCustomerShipto filtered by the ArstChrgFrt column
 * @method     ChildCustomerShipto findOneByArstdistcntr(string $ArstDistCntr) Return the first ChildCustomerShipto filtered by the ArstDistCntr column
 * @method     ChildCustomerShipto findOneByArstdunsnbr(string $ArstDunsNbr) Return the first ChildCustomerShipto filtered by the ArstDunsNbr column
 * @method     ChildCustomerShipto findOneByArstrfmlvalu(int $ArstRfmlValu) Return the first ChildCustomerShipto filtered by the ArstRfmlValu column
 * @method     ChildCustomerShipto findOneByArstcustpoparam(string $ArstCustPoParam) Return the first ChildCustomerShipto filtered by the ArstCustPoParam column
 * @method     ChildCustomerShipto findOneByArtbroutcode(string $ArtbRoutCode) Return the first ChildCustomerShipto filtered by the ArtbRoutCode column
 * @method     ChildCustomerShipto findOneByArstupsacctnbr(string $ArstUpsAcctNbr) Return the first ChildCustomerShipto filtered by the ArstUpsAcctNbr column
 * @method     ChildCustomerShipto findOneByArstfobinputyn(string $ArstFobInputYn) Return the first ChildCustomerShipto filtered by the ArstFobInputYn column
 * @method     ChildCustomerShipto findOneByArstfobperlb(string $ArstFobPerLb) Return the first ChildCustomerShipto filtered by the ArstFobPerLb column
 * @method     ChildCustomerShipto findOneByArstsaleytd(string $ArstSaleYtd) Return the first ChildCustomerShipto filtered by the ArstSaleYtd column
 * @method     ChildCustomerShipto findOneByArstinvytd(int $ArstInvYtd) Return the first ChildCustomerShipto filtered by the ArstInvYtd column
 * @method     ChildCustomerShipto findOneByArstemailfaxauthcode(string $ArstEmailFaxAuthCode) Return the first ChildCustomerShipto filtered by the ArstEmailFaxAuthCode column
 * @method     ChildCustomerShipto findOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomerShipto filtered by the DateUpdtd column
 * @method     ChildCustomerShipto findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomerShipto filtered by the TimeUpdtd column
 * @method     ChildCustomerShipto findOneByDummy(string $dummy) Return the first ChildCustomerShipto filtered by the dummy column *

 * @method     ChildCustomerShipto requirePk($key, ConnectionInterface $con = null) Return the ChildCustomerShipto by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomerShipto requireOne(ConnectionInterface $con = null) Return the first ChildCustomerShipto matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildCustomerShipto[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCustomerShipto objects based on current ModelCriteria
 * @method     ChildCustomerShipto[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildCustomerShipto objects filtered by the ArcuCustId column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstshipid(string $ArstShipId) Return ChildCustomerShipto objects filtered by the ArstShipId column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstname(string $ArstName) Return ChildCustomerShipto objects filtered by the ArstName column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstadr1(string $ArstAdr1) Return ChildCustomerShipto objects filtered by the ArstAdr1 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstadr2(string $ArstAdr2) Return ChildCustomerShipto objects filtered by the ArstAdr2 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstadr3(string $ArstAdr3) Return ChildCustomerShipto objects filtered by the ArstAdr3 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstctry(string $ArstCtry) Return ChildCustomerShipto objects filtered by the ArstCtry column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstcity(string $ArstCity) Return ChildCustomerShipto objects filtered by the ArstCity column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArststat(string $ArstStat) Return ChildCustomerShipto objects filtered by the ArstStat column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstzipcode(string $ArstZipCode) Return ChildCustomerShipto objects filtered by the ArstZipCode column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstdeliverydays(int $ArstDeliveryDays) Return ChildCustomerShipto objects filtered by the ArstDeliveryDays column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstcommcode(string $ArstCommCode) Return ChildCustomerShipto objects filtered by the ArstCommCode column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstallowsplit(string $ArstAllowSplit) Return ChildCustomerShipto objects filtered by the ArstAllowSplit column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstlindstsp(string $ArstLindstSp) Return ChildCustomerShipto objects filtered by the ArstLindstSp column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstlmecommcustid(string $ArstLmEcommCustId) Return ChildCustomerShipto objects filtered by the ArstLmEcommCustId column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstcatlgid(string $ArstCatlgId) Return ChildCustomerShipto objects filtered by the ArstCatlgId column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildCustomerShipto objects filtered by the ArspSalePer1 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArspsaleper2(string $ArspSalePer2) Return ChildCustomerShipto objects filtered by the ArspSalePer2 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArspsaleper3(string $ArspSalePer3) Return ChildCustomerShipto objects filtered by the ArspSalePer3 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArtbctaxcode(string $ArtbCtaxCode) Return ChildCustomerShipto objects filtered by the ArtbCtaxCode column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArsttaxexemnbr(string $ArstTaxExemNbr) Return ChildCustomerShipto objects filtered by the ArstTaxExemNbr column
 * @method     ChildCustomerShipto[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildCustomerShipto objects filtered by the IntbWhse column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArtbshipvia(string $ArtbShipVia) Return ChildCustomerShipto objects filtered by the ArtbShipVia column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstbord(string $ArstBord) Return ChildCustomerShipto objects filtered by the ArstBord column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstcredhold(string $ArstCredHold) Return ChildCustomerShipto objects filtered by the ArstCredHold column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstusercode(string $ArstUserCode) Return ChildCustomerShipto objects filtered by the ArstUserCode column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstpriclvl(string $ArstPricLvl) Return ChildCustomerShipto objects filtered by the ArstPricLvl column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstshipcomp(string $ArstShipComp) Return ChildCustomerShipto objects filtered by the ArstShipComp column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArsttxbl(string $ArstTxbl) Return ChildCustomerShipto objects filtered by the ArstTxbl column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstpostal(string $ArstPostal) Return ChildCustomerShipto objects filtered by the ArstPostal column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsalemtd(string $ArstSaleMtd) Return ChildCustomerShipto objects filtered by the ArstSaleMtd column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinvmtd(int $ArstInvMtd) Return ChildCustomerShipto objects filtered by the ArstInvMtd column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstdateopen(string $ArstDateOpen) Return ChildCustomerShipto objects filtered by the ArstDateOpen column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstlastsaledate(string $ArstLastSaleDate) Return ChildCustomerShipto objects filtered by the ArstLastSaleDate column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo1(string $ArstSale24mo1) Return ChildCustomerShipto objects filtered by the ArstSale24mo1 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo1(int $ArstInv24mo1) Return ChildCustomerShipto objects filtered by the ArstInv24mo1 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo2(string $ArstSale24mo2) Return ChildCustomerShipto objects filtered by the ArstSale24mo2 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo2(int $ArstInv24mo2) Return ChildCustomerShipto objects filtered by the ArstInv24mo2 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo3(string $ArstSale24mo3) Return ChildCustomerShipto objects filtered by the ArstSale24mo3 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo3(int $ArstInv24mo3) Return ChildCustomerShipto objects filtered by the ArstInv24mo3 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo4(string $ArstSale24mo4) Return ChildCustomerShipto objects filtered by the ArstSale24mo4 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo4(int $ArstInv24mo4) Return ChildCustomerShipto objects filtered by the ArstInv24mo4 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo5(string $ArstSale24mo5) Return ChildCustomerShipto objects filtered by the ArstSale24mo5 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo5(int $ArstInv24mo5) Return ChildCustomerShipto objects filtered by the ArstInv24mo5 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo6(string $ArstSale24mo6) Return ChildCustomerShipto objects filtered by the ArstSale24mo6 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo6(int $ArstInv24mo6) Return ChildCustomerShipto objects filtered by the ArstInv24mo6 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo7(string $ArstSale24mo7) Return ChildCustomerShipto objects filtered by the ArstSale24mo7 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo7(int $ArstInv24mo7) Return ChildCustomerShipto objects filtered by the ArstInv24mo7 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo8(string $ArstSale24mo8) Return ChildCustomerShipto objects filtered by the ArstSale24mo8 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo8(int $ArstInv24mo8) Return ChildCustomerShipto objects filtered by the ArstInv24mo8 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo9(string $ArstSale24mo9) Return ChildCustomerShipto objects filtered by the ArstSale24mo9 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo9(int $ArstInv24mo9) Return ChildCustomerShipto objects filtered by the ArstInv24mo9 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo10(string $ArstSale24mo10) Return ChildCustomerShipto objects filtered by the ArstSale24mo10 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo10(int $ArstInv24mo10) Return ChildCustomerShipto objects filtered by the ArstInv24mo10 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo11(string $ArstSale24mo11) Return ChildCustomerShipto objects filtered by the ArstSale24mo11 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo11(int $ArstInv24mo11) Return ChildCustomerShipto objects filtered by the ArstInv24mo11 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo12(string $ArstSale24mo12) Return ChildCustomerShipto objects filtered by the ArstSale24mo12 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo12(int $ArstInv24mo12) Return ChildCustomerShipto objects filtered by the ArstInv24mo12 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo13(string $ArstSale24mo13) Return ChildCustomerShipto objects filtered by the ArstSale24mo13 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo13(int $ArstInv24mo13) Return ChildCustomerShipto objects filtered by the ArstInv24mo13 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo14(string $ArstSale24mo14) Return ChildCustomerShipto objects filtered by the ArstSale24mo14 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo14(int $ArstInv24mo14) Return ChildCustomerShipto objects filtered by the ArstInv24mo14 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo15(string $ArstSale24mo15) Return ChildCustomerShipto objects filtered by the ArstSale24mo15 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo15(int $ArstInv24mo15) Return ChildCustomerShipto objects filtered by the ArstInv24mo15 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo16(string $ArstSale24mo16) Return ChildCustomerShipto objects filtered by the ArstSale24mo16 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo16(int $ArstInv24mo16) Return ChildCustomerShipto objects filtered by the ArstInv24mo16 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo17(string $ArstSale24mo17) Return ChildCustomerShipto objects filtered by the ArstSale24mo17 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo17(int $ArstInv24mo17) Return ChildCustomerShipto objects filtered by the ArstInv24mo17 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo18(string $ArstSale24mo18) Return ChildCustomerShipto objects filtered by the ArstSale24mo18 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo18(int $ArstInv24mo18) Return ChildCustomerShipto objects filtered by the ArstInv24mo18 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo19(string $ArstSale24mo19) Return ChildCustomerShipto objects filtered by the ArstSale24mo19 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo19(int $ArstInv24mo19) Return ChildCustomerShipto objects filtered by the ArstInv24mo19 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo20(string $ArstSale24mo20) Return ChildCustomerShipto objects filtered by the ArstSale24mo20 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo20(int $ArstInv24mo20) Return ChildCustomerShipto objects filtered by the ArstInv24mo20 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo21(string $ArstSale24mo21) Return ChildCustomerShipto objects filtered by the ArstSale24mo21 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo21(int $ArstInv24mo21) Return ChildCustomerShipto objects filtered by the ArstInv24mo21 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo22(string $ArstSale24mo22) Return ChildCustomerShipto objects filtered by the ArstSale24mo22 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo22(int $ArstInv24mo22) Return ChildCustomerShipto objects filtered by the ArstInv24mo22 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo23(string $ArstSale24mo23) Return ChildCustomerShipto objects filtered by the ArstSale24mo23 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo23(int $ArstInv24mo23) Return ChildCustomerShipto objects filtered by the ArstInv24mo23 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsale24mo24(string $ArstSale24mo24) Return ChildCustomerShipto objects filtered by the ArstSale24mo24 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinv24mo24(int $ArstInv24mo24) Return ChildCustomerShipto objects filtered by the ArstInv24mo24 column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstprimshipid(string $ArstPrimShipId) Return ChildCustomerShipto objects filtered by the ArstPrimShipId column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstmyvendid(string $ArstMyVendId) Return ChildCustomerShipto objects filtered by the ArstMyVendId column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstaddlpricdisc(string $ArstAddlPricDisc) Return ChildCustomerShipto objects filtered by the ArstAddlPricDisc column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstediinvc(string $ArstEdiInvc) Return ChildCustomerShipto objects filtered by the ArstEdiInvc column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstchrgfrt(string $ArstChrgFrt) Return ChildCustomerShipto objects filtered by the ArstChrgFrt column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstdistcntr(string $ArstDistCntr) Return ChildCustomerShipto objects filtered by the ArstDistCntr column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstdunsnbr(string $ArstDunsNbr) Return ChildCustomerShipto objects filtered by the ArstDunsNbr column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstrfmlvalu(int $ArstRfmlValu) Return ChildCustomerShipto objects filtered by the ArstRfmlValu column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstcustpoparam(string $ArstCustPoParam) Return ChildCustomerShipto objects filtered by the ArstCustPoParam column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArtbroutcode(string $ArtbRoutCode) Return ChildCustomerShipto objects filtered by the ArtbRoutCode column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstupsacctnbr(string $ArstUpsAcctNbr) Return ChildCustomerShipto objects filtered by the ArstUpsAcctNbr column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstfobinputyn(string $ArstFobInputYn) Return ChildCustomerShipto objects filtered by the ArstFobInputYn column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstfobperlb(string $ArstFobPerLb) Return ChildCustomerShipto objects filtered by the ArstFobPerLb column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstsaleytd(string $ArstSaleYtd) Return ChildCustomerShipto objects filtered by the ArstSaleYtd column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstinvytd(int $ArstInvYtd) Return ChildCustomerShipto objects filtered by the ArstInvYtd column
 * @method     ChildCustomerShipto[]|ObjectCollection findByArstemailfaxauthcode(string $ArstEmailFaxAuthCode) Return ChildCustomerShipto objects filtered by the ArstEmailFaxAuthCode column
 * @method     ChildCustomerShipto[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCustomerShipto objects filtered by the DateUpdtd column
 * @method     ChildCustomerShipto[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCustomerShipto objects filtered by the TimeUpdtd column
 * @method     ChildCustomerShipto[]|ObjectCollection findByDummy(string $dummy) Return ChildCustomerShipto objects filtered by the dummy column
 * @method     ChildCustomerShipto[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CustomerShiptoQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CustomerShiptoQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\CustomerShipto', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCustomerShiptoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCustomerShiptoQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
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
    public function findPk($key, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
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
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
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
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
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
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
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
     * </code>
     *
     * @param     string $arcucustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArstShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipid('fooValue');   // WHERE ArstShipId = 'fooValue'
     * $query->filterByArstshipid('%fooValue%', Criteria::LIKE); // WHERE ArstShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstshipid($arstshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $arstshipid, $comparison);
    }

    /**
     * Filter the query on the ArstName column
     *
     * Example usage:
     * <code>
     * $query->filterByArstname('fooValue');   // WHERE ArstName = 'fooValue'
     * $query->filterByArstname('%fooValue%', Criteria::LIKE); // WHERE ArstName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstname($arstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTNAME, $arstname, $comparison);
    }

    /**
     * Filter the query on the ArstAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstadr1('fooValue');   // WHERE ArstAdr1 = 'fooValue'
     * $query->filterByArstadr1('%fooValue%', Criteria::LIKE); // WHERE ArstAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstadr1($arstadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTADR1, $arstadr1, $comparison);
    }

    /**
     * Filter the query on the ArstAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstadr2('fooValue');   // WHERE ArstAdr2 = 'fooValue'
     * $query->filterByArstadr2('%fooValue%', Criteria::LIKE); // WHERE ArstAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstadr2($arstadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTADR2, $arstadr2, $comparison);
    }

    /**
     * Filter the query on the ArstAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArstadr3('fooValue');   // WHERE ArstAdr3 = 'fooValue'
     * $query->filterByArstadr3('%fooValue%', Criteria::LIKE); // WHERE ArstAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstadr3($arstadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTADR3, $arstadr3, $comparison);
    }

    /**
     * Filter the query on the ArstCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByArstctry('fooValue');   // WHERE ArstCtry = 'fooValue'
     * $query->filterByArstctry('%fooValue%', Criteria::LIKE); // WHERE ArstCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstctry($arstctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCTRY, $arstctry, $comparison);
    }

    /**
     * Filter the query on the ArstCity column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcity('fooValue');   // WHERE ArstCity = 'fooValue'
     * $query->filterByArstcity('%fooValue%', Criteria::LIKE); // WHERE ArstCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstcity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstcity($arstcity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCITY, $arstcity, $comparison);
    }

    /**
     * Filter the query on the ArstStat column
     *
     * Example usage:
     * <code>
     * $query->filterByArststat('fooValue');   // WHERE ArstStat = 'fooValue'
     * $query->filterByArststat('%fooValue%', Criteria::LIKE); // WHERE ArstStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arststat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArststat($arststat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arststat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSTAT, $arststat, $comparison);
    }

    /**
     * Filter the query on the ArstZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArstzipcode('fooValue');   // WHERE ArstZipCode = 'fooValue'
     * $query->filterByArstzipcode('%fooValue%', Criteria::LIKE); // WHERE ArstZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstzipcode($arstzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTZIPCODE, $arstzipcode, $comparison);
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
     * @param     mixed $arstdeliverydays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstdeliverydays($arstdeliverydays = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTDELIVERYDAYS, $arstdeliverydays, $comparison);
    }

    /**
     * Filter the query on the ArstCommCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcommcode('fooValue');   // WHERE ArstCommCode = 'fooValue'
     * $query->filterByArstcommcode('%fooValue%', Criteria::LIKE); // WHERE ArstCommCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstcommcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstcommcode($arstcommcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcommcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCOMMCODE, $arstcommcode, $comparison);
    }

    /**
     * Filter the query on the ArstAllowSplit column
     *
     * Example usage:
     * <code>
     * $query->filterByArstallowsplit('fooValue');   // WHERE ArstAllowSplit = 'fooValue'
     * $query->filterByArstallowsplit('%fooValue%', Criteria::LIKE); // WHERE ArstAllowSplit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstallowsplit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstallowsplit($arstallowsplit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstallowsplit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTALLOWSPLIT, $arstallowsplit, $comparison);
    }

    /**
     * Filter the query on the ArstLindstSp column
     *
     * Example usage:
     * <code>
     * $query->filterByArstlindstsp('fooValue');   // WHERE ArstLindstSp = 'fooValue'
     * $query->filterByArstlindstsp('%fooValue%', Criteria::LIKE); // WHERE ArstLindstSp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstlindstsp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstlindstsp($arstlindstsp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstlindstsp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTLINDSTSP, $arstlindstsp, $comparison);
    }

    /**
     * Filter the query on the ArstLmEcommCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstlmecommcustid('fooValue');   // WHERE ArstLmEcommCustId = 'fooValue'
     * $query->filterByArstlmecommcustid('%fooValue%', Criteria::LIKE); // WHERE ArstLmEcommCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstlmecommcustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstlmecommcustid($arstlmecommcustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstlmecommcustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTLMECOMMCUSTID, $arstlmecommcustid, $comparison);
    }

    /**
     * Filter the query on the ArstCatlgId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcatlgid('fooValue');   // WHERE ArstCatlgId = 'fooValue'
     * $query->filterByArstcatlgid('%fooValue%', Criteria::LIKE); // WHERE ArstCatlgId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstcatlgid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstcatlgid($arstcatlgid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcatlgid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCATLGID, $arstcatlgid, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper1('fooValue');   // WHERE ArspSalePer1 = 'fooValue'
     * $query->filterByArspsaleper1('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper2('fooValue');   // WHERE ArspSalePer2 = 'fooValue'
     * $query->filterByArspsaleper2('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArspsaleper2($arspsaleper2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSPSALEPER2, $arspsaleper2, $comparison);
    }

    /**
     * Filter the query on the ArspSalePer3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArspsaleper3('fooValue');   // WHERE ArspSalePer3 = 'fooValue'
     * $query->filterByArspsaleper3('%fooValue%', Criteria::LIKE); // WHERE ArspSalePer3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arspsaleper3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArspsaleper3($arspsaleper3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSPSALEPER3, $arspsaleper3, $comparison);
    }

    /**
     * Filter the query on the ArtbCtaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbctaxcode('fooValue');   // WHERE ArtbCtaxCode = 'fooValue'
     * $query->filterByArtbctaxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbCtaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbctaxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArtbctaxcode($artbctaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbctaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARTBCTAXCODE, $artbctaxcode, $comparison);
    }

    /**
     * Filter the query on the ArstTaxExemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArsttaxexemnbr('fooValue');   // WHERE ArstTaxExemNbr = 'fooValue'
     * $query->filterByArsttaxexemnbr('%fooValue%', Criteria::LIKE); // WHERE ArstTaxExemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arsttaxexemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArsttaxexemnbr($arsttaxexemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arsttaxexemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTTAXEXEMNBR, $arsttaxexemnbr, $comparison);
    }

    /**
     * Filter the query on the IntbWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByIntbwhse('fooValue');   // WHERE IntbWhse = 'fooValue'
     * $query->filterByIntbwhse('%fooValue%', Criteria::LIKE); // WHERE IntbWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intbwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the ArtbShipVia column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbshipvia('fooValue');   // WHERE ArtbShipVia = 'fooValue'
     * $query->filterByArtbshipvia('%fooValue%', Criteria::LIKE); // WHERE ArtbShipVia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbshipvia The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);
    }

    /**
     * Filter the query on the ArstBord column
     *
     * Example usage:
     * <code>
     * $query->filterByArstbord('fooValue');   // WHERE ArstBord = 'fooValue'
     * $query->filterByArstbord('%fooValue%', Criteria::LIKE); // WHERE ArstBord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstbord The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstbord($arstbord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstbord)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTBORD, $arstbord, $comparison);
    }

    /**
     * Filter the query on the ArstCredHold column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcredhold('fooValue');   // WHERE ArstCredHold = 'fooValue'
     * $query->filterByArstcredhold('%fooValue%', Criteria::LIKE); // WHERE ArstCredHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstcredhold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstcredhold($arstcredhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcredhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCREDHOLD, $arstcredhold, $comparison);
    }

    /**
     * Filter the query on the ArstUserCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArstusercode('fooValue');   // WHERE ArstUserCode = 'fooValue'
     * $query->filterByArstusercode('%fooValue%', Criteria::LIKE); // WHERE ArstUserCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstusercode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstusercode($arstusercode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstusercode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTUSERCODE, $arstusercode, $comparison);
    }

    /**
     * Filter the query on the ArstPricLvl column
     *
     * Example usage:
     * <code>
     * $query->filterByArstpriclvl('fooValue');   // WHERE ArstPricLvl = 'fooValue'
     * $query->filterByArstpriclvl('%fooValue%', Criteria::LIKE); // WHERE ArstPricLvl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstpriclvl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstpriclvl($arstpriclvl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstpriclvl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTPRICLVL, $arstpriclvl, $comparison);
    }

    /**
     * Filter the query on the ArstShipComp column
     *
     * Example usage:
     * <code>
     * $query->filterByArstshipcomp('fooValue');   // WHERE ArstShipComp = 'fooValue'
     * $query->filterByArstshipcomp('%fooValue%', Criteria::LIKE); // WHERE ArstShipComp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstshipcomp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstshipcomp($arstshipcomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstshipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPCOMP, $arstshipcomp, $comparison);
    }

    /**
     * Filter the query on the ArstTxbl column
     *
     * Example usage:
     * <code>
     * $query->filterByArsttxbl('fooValue');   // WHERE ArstTxbl = 'fooValue'
     * $query->filterByArsttxbl('%fooValue%', Criteria::LIKE); // WHERE ArstTxbl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arsttxbl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArsttxbl($arsttxbl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arsttxbl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTTXBL, $arsttxbl, $comparison);
    }

    /**
     * Filter the query on the ArstPostal column
     *
     * Example usage:
     * <code>
     * $query->filterByArstpostal('fooValue');   // WHERE ArstPostal = 'fooValue'
     * $query->filterByArstpostal('%fooValue%', Criteria::LIKE); // WHERE ArstPostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstpostal The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstpostal($arstpostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstpostal)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTPOSTAL, $arstpostal, $comparison);
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
     * @param     mixed $arstsalemtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsalemtd($arstsalemtd = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALEMTD, $arstsalemtd, $comparison);
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
     * @param     mixed $arstinvmtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinvmtd($arstinvmtd = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINVMTD, $arstinvmtd, $comparison);
    }

    /**
     * Filter the query on the ArstDateOpen column
     *
     * Example usage:
     * <code>
     * $query->filterByArstdateopen('fooValue');   // WHERE ArstDateOpen = 'fooValue'
     * $query->filterByArstdateopen('%fooValue%', Criteria::LIKE); // WHERE ArstDateOpen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstdateopen The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstdateopen($arstdateopen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstdateopen)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTDATEOPEN, $arstdateopen, $comparison);
    }

    /**
     * Filter the query on the ArstLastSaleDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArstlastsaledate('fooValue');   // WHERE ArstLastSaleDate = 'fooValue'
     * $query->filterByArstlastsaledate('%fooValue%', Criteria::LIKE); // WHERE ArstLastSaleDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstlastsaledate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstlastsaledate($arstlastsaledate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstlastsaledate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTLASTSALEDATE, $arstlastsaledate, $comparison);
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
     * @param     mixed $arstsale24mo1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo1($arstsale24mo1 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO1, $arstsale24mo1, $comparison);
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
     * @param     mixed $arstinv24mo1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo1($arstinv24mo1 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO1, $arstinv24mo1, $comparison);
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
     * @param     mixed $arstsale24mo2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo2($arstsale24mo2 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO2, $arstsale24mo2, $comparison);
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
     * @param     mixed $arstinv24mo2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo2($arstinv24mo2 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO2, $arstinv24mo2, $comparison);
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
     * @param     mixed $arstsale24mo3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo3($arstsale24mo3 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO3, $arstsale24mo3, $comparison);
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
     * @param     mixed $arstinv24mo3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo3($arstinv24mo3 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO3, $arstinv24mo3, $comparison);
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
     * @param     mixed $arstsale24mo4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo4($arstsale24mo4 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO4, $arstsale24mo4, $comparison);
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
     * @param     mixed $arstinv24mo4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo4($arstinv24mo4 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO4, $arstinv24mo4, $comparison);
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
     * @param     mixed $arstsale24mo5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo5($arstsale24mo5 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO5, $arstsale24mo5, $comparison);
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
     * @param     mixed $arstinv24mo5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo5($arstinv24mo5 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO5, $arstinv24mo5, $comparison);
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
     * @param     mixed $arstsale24mo6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo6($arstsale24mo6 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO6, $arstsale24mo6, $comparison);
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
     * @param     mixed $arstinv24mo6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo6($arstinv24mo6 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO6, $arstinv24mo6, $comparison);
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
     * @param     mixed $arstsale24mo7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo7($arstsale24mo7 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO7, $arstsale24mo7, $comparison);
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
     * @param     mixed $arstinv24mo7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo7($arstinv24mo7 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO7, $arstinv24mo7, $comparison);
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
     * @param     mixed $arstsale24mo8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo8($arstsale24mo8 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO8, $arstsale24mo8, $comparison);
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
     * @param     mixed $arstinv24mo8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo8($arstinv24mo8 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO8, $arstinv24mo8, $comparison);
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
     * @param     mixed $arstsale24mo9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo9($arstsale24mo9 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO9, $arstsale24mo9, $comparison);
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
     * @param     mixed $arstinv24mo9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo9($arstinv24mo9 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO9, $arstinv24mo9, $comparison);
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
     * @param     mixed $arstsale24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo10($arstsale24mo10 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO10, $arstsale24mo10, $comparison);
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
     * @param     mixed $arstinv24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo10($arstinv24mo10 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO10, $arstinv24mo10, $comparison);
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
     * @param     mixed $arstsale24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo11($arstsale24mo11 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO11, $arstsale24mo11, $comparison);
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
     * @param     mixed $arstinv24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo11($arstinv24mo11 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO11, $arstinv24mo11, $comparison);
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
     * @param     mixed $arstsale24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo12($arstsale24mo12 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO12, $arstsale24mo12, $comparison);
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
     * @param     mixed $arstinv24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo12($arstinv24mo12 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO12, $arstinv24mo12, $comparison);
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
     * @param     mixed $arstsale24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo13($arstsale24mo13 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO13, $arstsale24mo13, $comparison);
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
     * @param     mixed $arstinv24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo13($arstinv24mo13 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO13, $arstinv24mo13, $comparison);
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
     * @param     mixed $arstsale24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo14($arstsale24mo14 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO14, $arstsale24mo14, $comparison);
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
     * @param     mixed $arstinv24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo14($arstinv24mo14 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO14, $arstinv24mo14, $comparison);
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
     * @param     mixed $arstsale24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo15($arstsale24mo15 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO15, $arstsale24mo15, $comparison);
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
     * @param     mixed $arstinv24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo15($arstinv24mo15 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO15, $arstinv24mo15, $comparison);
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
     * @param     mixed $arstsale24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo16($arstsale24mo16 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO16, $arstsale24mo16, $comparison);
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
     * @param     mixed $arstinv24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo16($arstinv24mo16 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO16, $arstinv24mo16, $comparison);
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
     * @param     mixed $arstsale24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo17($arstsale24mo17 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO17, $arstsale24mo17, $comparison);
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
     * @param     mixed $arstinv24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo17($arstinv24mo17 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO17, $arstinv24mo17, $comparison);
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
     * @param     mixed $arstsale24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo18($arstsale24mo18 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO18, $arstsale24mo18, $comparison);
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
     * @param     mixed $arstinv24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo18($arstinv24mo18 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO18, $arstinv24mo18, $comparison);
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
     * @param     mixed $arstsale24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo19($arstsale24mo19 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO19, $arstsale24mo19, $comparison);
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
     * @param     mixed $arstinv24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo19($arstinv24mo19 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO19, $arstinv24mo19, $comparison);
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
     * @param     mixed $arstsale24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo20($arstsale24mo20 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO20, $arstsale24mo20, $comparison);
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
     * @param     mixed $arstinv24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo20($arstinv24mo20 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO20, $arstinv24mo20, $comparison);
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
     * @param     mixed $arstsale24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo21($arstsale24mo21 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO21, $arstsale24mo21, $comparison);
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
     * @param     mixed $arstinv24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo21($arstinv24mo21 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO21, $arstinv24mo21, $comparison);
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
     * @param     mixed $arstsale24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo22($arstsale24mo22 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO22, $arstsale24mo22, $comparison);
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
     * @param     mixed $arstinv24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo22($arstinv24mo22 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO22, $arstinv24mo22, $comparison);
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
     * @param     mixed $arstsale24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo23($arstsale24mo23 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO23, $arstsale24mo23, $comparison);
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
     * @param     mixed $arstinv24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo23($arstinv24mo23 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO23, $arstinv24mo23, $comparison);
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
     * @param     mixed $arstsale24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsale24mo24($arstsale24mo24 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALE24MO24, $arstsale24mo24, $comparison);
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
     * @param     mixed $arstinv24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinv24mo24($arstinv24mo24 = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINV24MO24, $arstinv24mo24, $comparison);
    }

    /**
     * Filter the query on the ArstPrimShipId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstprimshipid('fooValue');   // WHERE ArstPrimShipId = 'fooValue'
     * $query->filterByArstprimshipid('%fooValue%', Criteria::LIKE); // WHERE ArstPrimShipId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstprimshipid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstprimshipid($arstprimshipid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstprimshipid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTPRIMSHIPID, $arstprimshipid, $comparison);
    }

    /**
     * Filter the query on the ArstMyVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByArstmyvendid('fooValue');   // WHERE ArstMyVendId = 'fooValue'
     * $query->filterByArstmyvendid('%fooValue%', Criteria::LIKE); // WHERE ArstMyVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstmyvendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstmyvendid($arstmyvendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstmyvendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTMYVENDID, $arstmyvendid, $comparison);
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
     * @param     mixed $arstaddlpricdisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstaddlpricdisc($arstaddlpricdisc = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTADDLPRICDISC, $arstaddlpricdisc, $comparison);
    }

    /**
     * Filter the query on the ArstEdiInvc column
     *
     * Example usage:
     * <code>
     * $query->filterByArstediinvc('fooValue');   // WHERE ArstEdiInvc = 'fooValue'
     * $query->filterByArstediinvc('%fooValue%', Criteria::LIKE); // WHERE ArstEdiInvc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstediinvc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstediinvc($arstediinvc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstediinvc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTEDIINVC, $arstediinvc, $comparison);
    }

    /**
     * Filter the query on the ArstChrgFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByArstchrgfrt('fooValue');   // WHERE ArstChrgFrt = 'fooValue'
     * $query->filterByArstchrgfrt('%fooValue%', Criteria::LIKE); // WHERE ArstChrgFrt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstchrgfrt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstchrgfrt($arstchrgfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstchrgfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCHRGFRT, $arstchrgfrt, $comparison);
    }

    /**
     * Filter the query on the ArstDistCntr column
     *
     * Example usage:
     * <code>
     * $query->filterByArstdistcntr('fooValue');   // WHERE ArstDistCntr = 'fooValue'
     * $query->filterByArstdistcntr('%fooValue%', Criteria::LIKE); // WHERE ArstDistCntr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstdistcntr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstdistcntr($arstdistcntr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstdistcntr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTDISTCNTR, $arstdistcntr, $comparison);
    }

    /**
     * Filter the query on the ArstDunsNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArstdunsnbr('fooValue');   // WHERE ArstDunsNbr = 'fooValue'
     * $query->filterByArstdunsnbr('%fooValue%', Criteria::LIKE); // WHERE ArstDunsNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstdunsnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstdunsnbr($arstdunsnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstdunsnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTDUNSNBR, $arstdunsnbr, $comparison);
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
     * @param     mixed $arstrfmlvalu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstrfmlvalu($arstrfmlvalu = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTRFMLVALU, $arstrfmlvalu, $comparison);
    }

    /**
     * Filter the query on the ArstCustPoParam column
     *
     * Example usage:
     * <code>
     * $query->filterByArstcustpoparam('fooValue');   // WHERE ArstCustPoParam = 'fooValue'
     * $query->filterByArstcustpoparam('%fooValue%', Criteria::LIKE); // WHERE ArstCustPoParam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstcustpoparam The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstcustpoparam($arstcustpoparam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstcustpoparam)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTCUSTPOPARAM, $arstcustpoparam, $comparison);
    }

    /**
     * Filter the query on the ArtbRoutCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbroutcode('fooValue');   // WHERE ArtbRoutCode = 'fooValue'
     * $query->filterByArtbroutcode('%fooValue%', Criteria::LIKE); // WHERE ArtbRoutCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbroutcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArtbroutcode($artbroutcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbroutcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARTBROUTCODE, $artbroutcode, $comparison);
    }

    /**
     * Filter the query on the ArstUpsAcctNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArstupsacctnbr('fooValue');   // WHERE ArstUpsAcctNbr = 'fooValue'
     * $query->filterByArstupsacctnbr('%fooValue%', Criteria::LIKE); // WHERE ArstUpsAcctNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstupsacctnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstupsacctnbr($arstupsacctnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstupsacctnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTUPSACCTNBR, $arstupsacctnbr, $comparison);
    }

    /**
     * Filter the query on the ArstFobInputYn column
     *
     * Example usage:
     * <code>
     * $query->filterByArstfobinputyn('fooValue');   // WHERE ArstFobInputYn = 'fooValue'
     * $query->filterByArstfobinputyn('%fooValue%', Criteria::LIKE); // WHERE ArstFobInputYn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstfobinputyn The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstfobinputyn($arstfobinputyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstfobinputyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTFOBINPUTYN, $arstfobinputyn, $comparison);
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
     * @param     mixed $arstfobperlb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstfobperlb($arstfobperlb = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTFOBPERLB, $arstfobperlb, $comparison);
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
     * @param     mixed $arstsaleytd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstsaleytd($arstsaleytd = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSALEYTD, $arstsaleytd, $comparison);
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
     * @param     mixed $arstinvytd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstinvytd($arstinvytd = null, $comparison = null)
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

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTINVYTD, $arstinvytd, $comparison);
    }

    /**
     * Filter the query on the ArstEmailFaxAuthCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArstemailfaxauthcode('fooValue');   // WHERE ArstEmailFaxAuthCode = 'fooValue'
     * $query->filterByArstemailfaxauthcode('%fooValue%', Criteria::LIKE); // WHERE ArstEmailFaxAuthCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arstemailfaxauthcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArstemailfaxauthcode($arstemailfaxauthcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arstemailfaxauthcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_ARSTEMAILFAXAUTHCODE, $arstemailfaxauthcode, $comparison);
    }

    /**
     * Filter the query on the DateUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByDateupdtd('fooValue');   // WHERE DateUpdtd = 'fooValue'
     * $query->filterByDateupdtd('%fooValue%', Criteria::LIKE); // WHERE DateUpdtd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateupdtd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
    }

    /**
     * Filter the query on the TimeUpdtd column
     *
     * Example usage:
     * <code>
     * $query->filterByTimeupdtd('fooValue');   // WHERE TimeUpdtd = 'fooValue'
     * $query->filterByTimeupdtd('%fooValue%', Criteria::LIKE); // WHERE TimeUpdtd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $timeupdtd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
    }

    /**
     * Filter the query on the dummy column
     *
     * Example usage:
     * <code>
     * $query->filterByDummy('fooValue');   // WHERE dummy = 'fooValue'
     * $query->filterByDummy('%fooValue%', Criteria::LIKE); // WHERE dummy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dummy The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerShiptoTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \Customer object
     *
     * @param \Customer|ObjectCollection $customer The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByCustomer($customer, $comparison = null)
    {
        if ($customer instanceof \Customer) {
            return $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), $comparison);
        } elseif ($customer instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $customer->toKeyValue('PrimaryKey', 'Arcucustid'), $comparison);
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type \Customer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function joinCustomer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \ArContact object
     *
     * @param \ArContact|ObjectCollection $arContact the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByArContact($arContact, $comparison = null)
    {
        if ($arContact instanceof \ArContact) {
            return $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $arContact->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $arContact->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterByArContact() only accepts arguments of type \ArContact');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ArContact relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function joinArContact($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \BookingDayCustomer object
     *
     * @param \BookingDayCustomer|ObjectCollection $bookingDayCustomer the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByBookingDayCustomer($bookingDayCustomer, $comparison = null)
    {
        if ($bookingDayCustomer instanceof \BookingDayCustomer) {
            return $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $bookingDayCustomer->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $bookingDayCustomer->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterByBookingDayCustomer() only accepts arguments of type \BookingDayCustomer');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BookingDayCustomer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function joinBookingDayCustomer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \BookingDayDetail object
     *
     * @param \BookingDayDetail|ObjectCollection $bookingDayDetail the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByBookingDayDetail($bookingDayDetail, $comparison = null)
    {
        if ($bookingDayDetail instanceof \BookingDayDetail) {
            return $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $bookingDayDetail->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $bookingDayDetail->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterByBookingDayDetail() only accepts arguments of type \BookingDayDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BookingDayDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function joinBookingDayDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \Booking object
     *
     * @param \Booking|ObjectCollection $booking the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterByBooking($booking, $comparison = null)
    {
        if ($booking instanceof \Booking) {
            return $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $booking->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $booking->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterByBooking() only accepts arguments of type \Booking');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Booking relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function joinBooking($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \SalesHistory object
     *
     * @param \SalesHistory|ObjectCollection $salesHistory the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterBySalesHistory($salesHistory, $comparison = null)
    {
        if ($salesHistory instanceof \SalesHistory) {
            return $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $salesHistory->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $salesHistory->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterBySalesHistory() only accepts arguments of type \SalesHistory');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function joinSalesHistory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \SalesOrder object
     *
     * @param \SalesOrder|ObjectCollection $salesOrder the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterBySalesOrder($salesOrder, $comparison = null)
    {
        if ($salesOrder instanceof \SalesOrder) {
            return $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $salesOrder->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $salesOrder->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterBySalesOrder() only accepts arguments of type \SalesOrder');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrder relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function joinSalesOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \SoStandingOrderDetail object
     *
     * @param \SoStandingOrderDetail|ObjectCollection $soStandingOrderDetail the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterBySoStandingOrderDetail($soStandingOrderDetail, $comparison = null)
    {
        if ($soStandingOrderDetail instanceof \SoStandingOrderDetail) {
            return $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $soStandingOrderDetail->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $soStandingOrderDetail->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterBySoStandingOrderDetail() only accepts arguments of type \SoStandingOrderDetail');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoStandingOrderDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function joinSoStandingOrderDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Filter the query by a related \SoStandingOrder object
     *
     * @param \SoStandingOrder|ObjectCollection $soStandingOrder the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function filterBySoStandingOrder($soStandingOrder, $comparison = null)
    {
        if ($soStandingOrder instanceof \SoStandingOrder) {
            return $this
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARCUCUSTID, $soStandingOrder->getArcucustid(), $comparison)
                ->addUsingAlias(CustomerShiptoTableMap::COL_ARSTSHIPID, $soStandingOrder->getArstshipid(), $comparison);
        } else {
            throw new PropelException('filterBySoStandingOrder() only accepts arguments of type \SoStandingOrder');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SoStandingOrder relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
     */
    public function joinSoStandingOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
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
     * Exclude object from result
     *
     * @param   ChildCustomerShipto $customerShipto Object to remove from the list of results
     *
     * @return $this|ChildCustomerShiptoQuery The current query, for fluid interface
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
    public function doDeleteAll(ConnectionInterface $con = null)
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
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
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

} // CustomerShiptoQuery
