<?php

namespace Base;

use \Customer as ChildCustomer;
use \CustomerQuery as ChildCustomerQuery;
use \Exception;
use \PDO;
use Map\CustomerTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'ar_cust_mast' table.
 *
 *
 *
 * @method     ChildCustomerQuery orderByArcucustid($order = Criteria::ASC) Order by the ArcuCustId column
 * @method     ChildCustomerQuery orderByArcuname($order = Criteria::ASC) Order by the ArcuName column
 * @method     ChildCustomerQuery orderByArcuadr1($order = Criteria::ASC) Order by the ArcuAdr1 column
 * @method     ChildCustomerQuery orderByArcuadr2($order = Criteria::ASC) Order by the ArcuAdr2 column
 * @method     ChildCustomerQuery orderByArcuadr3($order = Criteria::ASC) Order by the ArcuAdr3 column
 * @method     ChildCustomerQuery orderByArcuctry($order = Criteria::ASC) Order by the ArcuCtry column
 * @method     ChildCustomerQuery orderByArcucity($order = Criteria::ASC) Order by the ArcuCity column
 * @method     ChildCustomerQuery orderByArcustat($order = Criteria::ASC) Order by the ArcuStat column
 * @method     ChildCustomerQuery orderByArcuzipcode($order = Criteria::ASC) Order by the ArcuZipCode column
 * @method     ChildCustomerQuery orderByArcudeliverydays($order = Criteria::ASC) Order by the ArcuDeliveryDays column
 * @method     ChildCustomerQuery orderByArcuremitwhse($order = Criteria::ASC) Order by the ArcuRemitWhse column
 * @method     ChildCustomerQuery orderByArcushipbin($order = Criteria::ASC) Order by the ArcuShipBin column
 * @method     ChildCustomerQuery orderByArcuallowaddons($order = Criteria::ASC) Order by the ArcuAllowAddOns column
 * @method     ChildCustomerQuery orderByArculmecommcustid($order = Criteria::ASC) Order by the ArcuLmEcommCustId column
 * @method     ChildCustomerQuery orderByArcugsuse2ndbin($order = Criteria::ASC) Order by the ArcuGsUse2ndBin column
 * @method     ChildCustomerQuery orderByArspsaleper1($order = Criteria::ASC) Order by the ArspSalePer1 column
 * @method     ChildCustomerQuery orderByArspsaleper2($order = Criteria::ASC) Order by the ArspSalePer2 column
 * @method     ChildCustomerQuery orderByArspsaleper3($order = Criteria::ASC) Order by the ArspSalePer3 column
 * @method     ChildCustomerQuery orderByArtbmtaxcode($order = Criteria::ASC) Order by the ArtbMtaxCode column
 * @method     ChildCustomerQuery orderByArcutaxexemnbr($order = Criteria::ASC) Order by the ArcuTaxExemNbr column
 * @method     ChildCustomerQuery orderByIntbwhse($order = Criteria::ASC) Order by the IntbWhse column
 * @method     ChildCustomerQuery orderByArcupriclvl($order = Criteria::ASC) Order by the ArcuPricLvl column
 * @method     ChildCustomerQuery orderByArcushipcomp($order = Criteria::ASC) Order by the ArcuShipComp column
 * @method     ChildCustomerQuery orderByArcutxbl($order = Criteria::ASC) Order by the ArcuTxbl column
 * @method     ChildCustomerQuery orderByArcupostal($order = Criteria::ASC) Order by the ArcuPostal column
 * @method     ChildCustomerQuery orderByArtbshipvia($order = Criteria::ASC) Order by the ArtbShipVia column
 * @method     ChildCustomerQuery orderByArcubord($order = Criteria::ASC) Order by the ArcuBord column
 * @method     ChildCustomerQuery orderByArtbtypecode($order = Criteria::ASC) Order by the ArtbTypeCode column
 * @method     ChildCustomerQuery orderByArtbpriccode($order = Criteria::ASC) Order by the ArtbPricCode column
 * @method     ChildCustomerQuery orderByArtbcommcode($order = Criteria::ASC) Order by the ArtbCommCode column
 * @method     ChildCustomerQuery orderByArtmtermcd($order = Criteria::ASC) Order by the ArtmTermCd column
 * @method     ChildCustomerQuery orderByArcucredlmt($order = Criteria::ASC) Order by the ArcuCredLmt column
 * @method     ChildCustomerQuery orderByArcustmtcode($order = Criteria::ASC) Order by the ArcuStmtCode column
 * @method     ChildCustomerQuery orderByArcucredhold($order = Criteria::ASC) Order by the ArcuCredHold column
 * @method     ChildCustomerQuery orderByArcufinchrg($order = Criteria::ASC) Order by the ArcuFinChrg column
 * @method     ChildCustomerQuery orderByArcuusercode($order = Criteria::ASC) Order by the ArcuUserCode column
 * @method     ChildCustomerQuery orderByArcunewfc($order = Criteria::ASC) Order by the ArcuNewFc column
 * @method     ChildCustomerQuery orderByArcuunpdfc($order = Criteria::ASC) Order by the ArcuUnpdFc column
 * @method     ChildCustomerQuery orderByArcucurbal($order = Criteria::ASC) Order by the ArcuCurBal column
 * @method     ChildCustomerQuery orderByArcubalodue1($order = Criteria::ASC) Order by the ArcuBalOdue1 column
 * @method     ChildCustomerQuery orderByArcubalodue2($order = Criteria::ASC) Order by the ArcuBalOdue2 column
 * @method     ChildCustomerQuery orderByArcubalodue3($order = Criteria::ASC) Order by the ArcuBalOdue3 column
 * @method     ChildCustomerQuery orderByArcusalemtd($order = Criteria::ASC) Order by the ArcuSaleMtd column
 * @method     ChildCustomerQuery orderByArcuinvmtd($order = Criteria::ASC) Order by the ArcuInvMtd column
 * @method     ChildCustomerQuery orderByArcusaleytd($order = Criteria::ASC) Order by the ArcuSaleYtd column
 * @method     ChildCustomerQuery orderByArcuinvytd($order = Criteria::ASC) Order by the ArcuInvYtd column
 * @method     ChildCustomerQuery orderByArcudateopen($order = Criteria::ASC) Order by the ArcuDateOpen column
 * @method     ChildCustomerQuery orderByArculastsaledate($order = Criteria::ASC) Order by the ArcuLastSaleDate column
 * @method     ChildCustomerQuery orderByArcuhighbal($order = Criteria::ASC) Order by the ArcuHighBal column
 * @method     ChildCustomerQuery orderByArcubigsalemo($order = Criteria::ASC) Order by the ArcuBigSaleMo column
 * @method     ChildCustomerQuery orderByArculastpaydate($order = Criteria::ASC) Order by the ArcuLastPayDate column
 * @method     ChildCustomerQuery orderByArcuavgpaydays($order = Criteria::ASC) Order by the ArcuAvgPayDays column
 * @method     ChildCustomerQuery orderByArcuupszone($order = Criteria::ASC) Order by the ArcuUpsZone column
 * @method     ChildCustomerQuery orderByArcuhighbaldate($order = Criteria::ASC) Order by the ArcuHighBalDate column
 * @method     ChildCustomerQuery orderByArcusale24mo1($order = Criteria::ASC) Order by the ArcuSale24mo1 column
 * @method     ChildCustomerQuery orderByArcuinv24mo1($order = Criteria::ASC) Order by the ArcuInv24mo1 column
 * @method     ChildCustomerQuery orderByArcusale24mo2($order = Criteria::ASC) Order by the ArcuSale24mo2 column
 * @method     ChildCustomerQuery orderByArcuinv24mo2($order = Criteria::ASC) Order by the ArcuInv24mo2 column
 * @method     ChildCustomerQuery orderByArcusale24mo3($order = Criteria::ASC) Order by the ArcuSale24mo3 column
 * @method     ChildCustomerQuery orderByArcuinv24mo3($order = Criteria::ASC) Order by the ArcuInv24mo3 column
 * @method     ChildCustomerQuery orderByArcusale24mo4($order = Criteria::ASC) Order by the ArcuSale24mo4 column
 * @method     ChildCustomerQuery orderByArcuinv24mo4($order = Criteria::ASC) Order by the ArcuInv24mo4 column
 * @method     ChildCustomerQuery orderByArcusale24mo5($order = Criteria::ASC) Order by the ArcuSale24mo5 column
 * @method     ChildCustomerQuery orderByArcuinv24mo5($order = Criteria::ASC) Order by the ArcuInv24mo5 column
 * @method     ChildCustomerQuery orderByArcusale24mo6($order = Criteria::ASC) Order by the ArcuSale24mo6 column
 * @method     ChildCustomerQuery orderByArcuinv24mo6($order = Criteria::ASC) Order by the ArcuInv24mo6 column
 * @method     ChildCustomerQuery orderByArcusale24mo7($order = Criteria::ASC) Order by the ArcuSale24mo7 column
 * @method     ChildCustomerQuery orderByArcuinv24mo7($order = Criteria::ASC) Order by the ArcuInv24mo7 column
 * @method     ChildCustomerQuery orderByArcusale24mo8($order = Criteria::ASC) Order by the ArcuSale24mo8 column
 * @method     ChildCustomerQuery orderByArcuinv24mo8($order = Criteria::ASC) Order by the ArcuInv24mo8 column
 * @method     ChildCustomerQuery orderByArcusale24mo9($order = Criteria::ASC) Order by the ArcuSale24mo9 column
 * @method     ChildCustomerQuery orderByArcuinv24mo9($order = Criteria::ASC) Order by the ArcuInv24mo9 column
 * @method     ChildCustomerQuery orderByArcusale24mo10($order = Criteria::ASC) Order by the ArcuSale24mo10 column
 * @method     ChildCustomerQuery orderByArcuinv24mo10($order = Criteria::ASC) Order by the ArcuInv24mo10 column
 * @method     ChildCustomerQuery orderByArcusale24mo11($order = Criteria::ASC) Order by the ArcuSale24mo11 column
 * @method     ChildCustomerQuery orderByArcuinv24mo11($order = Criteria::ASC) Order by the ArcuInv24mo11 column
 * @method     ChildCustomerQuery orderByArcusale24mo12($order = Criteria::ASC) Order by the ArcuSale24mo12 column
 * @method     ChildCustomerQuery orderByArcuinv24mo12($order = Criteria::ASC) Order by the ArcuInv24mo12 column
 * @method     ChildCustomerQuery orderByArcusale24mo13($order = Criteria::ASC) Order by the ArcuSale24mo13 column
 * @method     ChildCustomerQuery orderByArcuinv24mo13($order = Criteria::ASC) Order by the ArcuInv24mo13 column
 * @method     ChildCustomerQuery orderByArcusale24mo14($order = Criteria::ASC) Order by the ArcuSale24mo14 column
 * @method     ChildCustomerQuery orderByArcuinv24mo14($order = Criteria::ASC) Order by the ArcuInv24mo14 column
 * @method     ChildCustomerQuery orderByArcusale24mo15($order = Criteria::ASC) Order by the ArcuSale24mo15 column
 * @method     ChildCustomerQuery orderByArcuinv24mo15($order = Criteria::ASC) Order by the ArcuInv24mo15 column
 * @method     ChildCustomerQuery orderByArcusale24mo16($order = Criteria::ASC) Order by the ArcuSale24mo16 column
 * @method     ChildCustomerQuery orderByArcuinv24mo16($order = Criteria::ASC) Order by the ArcuInv24mo16 column
 * @method     ChildCustomerQuery orderByArcusale24mo17($order = Criteria::ASC) Order by the ArcuSale24mo17 column
 * @method     ChildCustomerQuery orderByArcuinv24mo17($order = Criteria::ASC) Order by the ArcuInv24mo17 column
 * @method     ChildCustomerQuery orderByArcusale24mo18($order = Criteria::ASC) Order by the ArcuSale24mo18 column
 * @method     ChildCustomerQuery orderByArcuinv24mo18($order = Criteria::ASC) Order by the ArcuInv24mo18 column
 * @method     ChildCustomerQuery orderByArcusale24mo19($order = Criteria::ASC) Order by the ArcuSale24mo19 column
 * @method     ChildCustomerQuery orderByArcuinv24mo19($order = Criteria::ASC) Order by the ArcuInv24mo19 column
 * @method     ChildCustomerQuery orderByArcusale24mo20($order = Criteria::ASC) Order by the ArcuSale24mo20 column
 * @method     ChildCustomerQuery orderByArcuinv24mo20($order = Criteria::ASC) Order by the ArcuInv24mo20 column
 * @method     ChildCustomerQuery orderByArcusale24mo21($order = Criteria::ASC) Order by the ArcuSale24mo21 column
 * @method     ChildCustomerQuery orderByArcuinv24mo21($order = Criteria::ASC) Order by the ArcuInv24mo21 column
 * @method     ChildCustomerQuery orderByArcusale24mo22($order = Criteria::ASC) Order by the ArcuSale24mo22 column
 * @method     ChildCustomerQuery orderByArcuinv24mo22($order = Criteria::ASC) Order by the ArcuInv24mo22 column
 * @method     ChildCustomerQuery orderByArcusale24mo23($order = Criteria::ASC) Order by the ArcuSale24mo23 column
 * @method     ChildCustomerQuery orderByArcuinv24mo23($order = Criteria::ASC) Order by the ArcuInv24mo23 column
 * @method     ChildCustomerQuery orderByArcusale24mo24($order = Criteria::ASC) Order by the ArcuSale24mo24 column
 * @method     ChildCustomerQuery orderByArcuinv24mo24($order = Criteria::ASC) Order by the ArcuInv24mo24 column
 * @method     ChildCustomerQuery orderByArculastpayamt($order = Criteria::ASC) Order by the ArcuLastPayAmt column
 * @method     ChildCustomerQuery orderByArcuordrtot($order = Criteria::ASC) Order by the ArcuOrdrTot column
 * @method     ChildCustomerQuery orderByArcuusefrtin($order = Criteria::ASC) Order by the ArcuUseFrtIn column
 * @method     ChildCustomerQuery orderByArcumyvendid($order = Criteria::ASC) Order by the ArcuMyVendId column
 * @method     ChildCustomerQuery orderByArcuaddlpricdisc($order = Criteria::ASC) Order by the ArcuAddlPricDisc column
 * @method     ChildCustomerQuery orderByArcuactiveinactive($order = Criteria::ASC) Order by the ArcuActiveInactive column
 * @method     ChildCustomerQuery orderByArcuinactivedate($order = Criteria::ASC) Order by the ArcuInactiveDate column
 * @method     ChildCustomerQuery orderByArcuchrgfrt($order = Criteria::ASC) Order by the ArcuChrgFrt column
 * @method     ChildCustomerQuery orderByArcucorexdays($order = Criteria::ASC) Order by the ArcuCoreXDays column
 * @method     ChildCustomerQuery orderByArcucontractnbr($order = Criteria::ASC) Order by the ArcuContractNbr column
 * @method     ChildCustomerQuery orderByArcucorelf($order = Criteria::ASC) Order by the ArcuCoreLF column
 * @method     ChildCustomerQuery orderByArcucorebankid($order = Criteria::ASC) Order by the ArcuCoreBankId column
 * @method     ChildCustomerQuery orderByArcudunsnbr($order = Criteria::ASC) Order by the ArcuDunsNbr column
 * @method     ChildCustomerQuery orderByArcurfmlvalu($order = Criteria::ASC) Order by the ArcuRfmlValu column
 * @method     ChildCustomerQuery orderByArcucustpoparam($order = Criteria::ASC) Order by the ArcuCustPoParam column
 * @method     ChildCustomerQuery orderByArcuagelevel($order = Criteria::ASC) Order by the ArcuAgeLevel column
 * @method     ChildCustomerQuery orderByArtbroute($order = Criteria::ASC) Order by the ArtbRoute column
 * @method     ChildCustomerQuery orderByArcuwgtaxcode($order = Criteria::ASC) Order by the ArcuWgTaxCode column
 * @method     ChildCustomerQuery orderByArcuacptsupercede($order = Criteria::ASC) Order by the ArcuAcptSupercede column
 * @method     ChildCustomerQuery orderByArcumstrcustid($order = Criteria::ASC) Order by the ArcuMstrCustId column
 * @method     ChildCustomerQuery orderByArcusurchgpct($order = Criteria::ASC) Order by the ArcuSurchgPct column
 * @method     ChildCustomerQuery orderByArcuallowsplit($order = Criteria::ASC) Order by the ArcuAllowSplit column
 * @method     ChildCustomerQuery orderByArculinemin($order = Criteria::ASC) Order by the ArcuLineMin column
 * @method     ChildCustomerQuery orderByArcuordrmin($order = Criteria::ASC) Order by the ArcuOrdrMin column
 * @method     ChildCustomerQuery orderByArcuupsacctnbr($order = Criteria::ASC) Order by the ArcuUpsAcctNbr column
 * @method     ChildCustomerQuery orderByArcuprtmatcert($order = Criteria::ASC) Order by the ArcuPrtMatCert column
 * @method     ChildCustomerQuery orderByArcufobinputyn($order = Criteria::ASC) Order by the ArcuFobInputYn column
 * @method     ChildCustomerQuery orderByArcufobperlb($order = Criteria::ASC) Order by the ArcuFobPerLb column
 * @method     ChildCustomerQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildCustomerQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildCustomerQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildCustomerQuery groupByArcucustid() Group by the ArcuCustId column
 * @method     ChildCustomerQuery groupByArcuname() Group by the ArcuName column
 * @method     ChildCustomerQuery groupByArcuadr1() Group by the ArcuAdr1 column
 * @method     ChildCustomerQuery groupByArcuadr2() Group by the ArcuAdr2 column
 * @method     ChildCustomerQuery groupByArcuadr3() Group by the ArcuAdr3 column
 * @method     ChildCustomerQuery groupByArcuctry() Group by the ArcuCtry column
 * @method     ChildCustomerQuery groupByArcucity() Group by the ArcuCity column
 * @method     ChildCustomerQuery groupByArcustat() Group by the ArcuStat column
 * @method     ChildCustomerQuery groupByArcuzipcode() Group by the ArcuZipCode column
 * @method     ChildCustomerQuery groupByArcudeliverydays() Group by the ArcuDeliveryDays column
 * @method     ChildCustomerQuery groupByArcuremitwhse() Group by the ArcuRemitWhse column
 * @method     ChildCustomerQuery groupByArcushipbin() Group by the ArcuShipBin column
 * @method     ChildCustomerQuery groupByArcuallowaddons() Group by the ArcuAllowAddOns column
 * @method     ChildCustomerQuery groupByArculmecommcustid() Group by the ArcuLmEcommCustId column
 * @method     ChildCustomerQuery groupByArcugsuse2ndbin() Group by the ArcuGsUse2ndBin column
 * @method     ChildCustomerQuery groupByArspsaleper1() Group by the ArspSalePer1 column
 * @method     ChildCustomerQuery groupByArspsaleper2() Group by the ArspSalePer2 column
 * @method     ChildCustomerQuery groupByArspsaleper3() Group by the ArspSalePer3 column
 * @method     ChildCustomerQuery groupByArtbmtaxcode() Group by the ArtbMtaxCode column
 * @method     ChildCustomerQuery groupByArcutaxexemnbr() Group by the ArcuTaxExemNbr column
 * @method     ChildCustomerQuery groupByIntbwhse() Group by the IntbWhse column
 * @method     ChildCustomerQuery groupByArcupriclvl() Group by the ArcuPricLvl column
 * @method     ChildCustomerQuery groupByArcushipcomp() Group by the ArcuShipComp column
 * @method     ChildCustomerQuery groupByArcutxbl() Group by the ArcuTxbl column
 * @method     ChildCustomerQuery groupByArcupostal() Group by the ArcuPostal column
 * @method     ChildCustomerQuery groupByArtbshipvia() Group by the ArtbShipVia column
 * @method     ChildCustomerQuery groupByArcubord() Group by the ArcuBord column
 * @method     ChildCustomerQuery groupByArtbtypecode() Group by the ArtbTypeCode column
 * @method     ChildCustomerQuery groupByArtbpriccode() Group by the ArtbPricCode column
 * @method     ChildCustomerQuery groupByArtbcommcode() Group by the ArtbCommCode column
 * @method     ChildCustomerQuery groupByArtmtermcd() Group by the ArtmTermCd column
 * @method     ChildCustomerQuery groupByArcucredlmt() Group by the ArcuCredLmt column
 * @method     ChildCustomerQuery groupByArcustmtcode() Group by the ArcuStmtCode column
 * @method     ChildCustomerQuery groupByArcucredhold() Group by the ArcuCredHold column
 * @method     ChildCustomerQuery groupByArcufinchrg() Group by the ArcuFinChrg column
 * @method     ChildCustomerQuery groupByArcuusercode() Group by the ArcuUserCode column
 * @method     ChildCustomerQuery groupByArcunewfc() Group by the ArcuNewFc column
 * @method     ChildCustomerQuery groupByArcuunpdfc() Group by the ArcuUnpdFc column
 * @method     ChildCustomerQuery groupByArcucurbal() Group by the ArcuCurBal column
 * @method     ChildCustomerQuery groupByArcubalodue1() Group by the ArcuBalOdue1 column
 * @method     ChildCustomerQuery groupByArcubalodue2() Group by the ArcuBalOdue2 column
 * @method     ChildCustomerQuery groupByArcubalodue3() Group by the ArcuBalOdue3 column
 * @method     ChildCustomerQuery groupByArcusalemtd() Group by the ArcuSaleMtd column
 * @method     ChildCustomerQuery groupByArcuinvmtd() Group by the ArcuInvMtd column
 * @method     ChildCustomerQuery groupByArcusaleytd() Group by the ArcuSaleYtd column
 * @method     ChildCustomerQuery groupByArcuinvytd() Group by the ArcuInvYtd column
 * @method     ChildCustomerQuery groupByArcudateopen() Group by the ArcuDateOpen column
 * @method     ChildCustomerQuery groupByArculastsaledate() Group by the ArcuLastSaleDate column
 * @method     ChildCustomerQuery groupByArcuhighbal() Group by the ArcuHighBal column
 * @method     ChildCustomerQuery groupByArcubigsalemo() Group by the ArcuBigSaleMo column
 * @method     ChildCustomerQuery groupByArculastpaydate() Group by the ArcuLastPayDate column
 * @method     ChildCustomerQuery groupByArcuavgpaydays() Group by the ArcuAvgPayDays column
 * @method     ChildCustomerQuery groupByArcuupszone() Group by the ArcuUpsZone column
 * @method     ChildCustomerQuery groupByArcuhighbaldate() Group by the ArcuHighBalDate column
 * @method     ChildCustomerQuery groupByArcusale24mo1() Group by the ArcuSale24mo1 column
 * @method     ChildCustomerQuery groupByArcuinv24mo1() Group by the ArcuInv24mo1 column
 * @method     ChildCustomerQuery groupByArcusale24mo2() Group by the ArcuSale24mo2 column
 * @method     ChildCustomerQuery groupByArcuinv24mo2() Group by the ArcuInv24mo2 column
 * @method     ChildCustomerQuery groupByArcusale24mo3() Group by the ArcuSale24mo3 column
 * @method     ChildCustomerQuery groupByArcuinv24mo3() Group by the ArcuInv24mo3 column
 * @method     ChildCustomerQuery groupByArcusale24mo4() Group by the ArcuSale24mo4 column
 * @method     ChildCustomerQuery groupByArcuinv24mo4() Group by the ArcuInv24mo4 column
 * @method     ChildCustomerQuery groupByArcusale24mo5() Group by the ArcuSale24mo5 column
 * @method     ChildCustomerQuery groupByArcuinv24mo5() Group by the ArcuInv24mo5 column
 * @method     ChildCustomerQuery groupByArcusale24mo6() Group by the ArcuSale24mo6 column
 * @method     ChildCustomerQuery groupByArcuinv24mo6() Group by the ArcuInv24mo6 column
 * @method     ChildCustomerQuery groupByArcusale24mo7() Group by the ArcuSale24mo7 column
 * @method     ChildCustomerQuery groupByArcuinv24mo7() Group by the ArcuInv24mo7 column
 * @method     ChildCustomerQuery groupByArcusale24mo8() Group by the ArcuSale24mo8 column
 * @method     ChildCustomerQuery groupByArcuinv24mo8() Group by the ArcuInv24mo8 column
 * @method     ChildCustomerQuery groupByArcusale24mo9() Group by the ArcuSale24mo9 column
 * @method     ChildCustomerQuery groupByArcuinv24mo9() Group by the ArcuInv24mo9 column
 * @method     ChildCustomerQuery groupByArcusale24mo10() Group by the ArcuSale24mo10 column
 * @method     ChildCustomerQuery groupByArcuinv24mo10() Group by the ArcuInv24mo10 column
 * @method     ChildCustomerQuery groupByArcusale24mo11() Group by the ArcuSale24mo11 column
 * @method     ChildCustomerQuery groupByArcuinv24mo11() Group by the ArcuInv24mo11 column
 * @method     ChildCustomerQuery groupByArcusale24mo12() Group by the ArcuSale24mo12 column
 * @method     ChildCustomerQuery groupByArcuinv24mo12() Group by the ArcuInv24mo12 column
 * @method     ChildCustomerQuery groupByArcusale24mo13() Group by the ArcuSale24mo13 column
 * @method     ChildCustomerQuery groupByArcuinv24mo13() Group by the ArcuInv24mo13 column
 * @method     ChildCustomerQuery groupByArcusale24mo14() Group by the ArcuSale24mo14 column
 * @method     ChildCustomerQuery groupByArcuinv24mo14() Group by the ArcuInv24mo14 column
 * @method     ChildCustomerQuery groupByArcusale24mo15() Group by the ArcuSale24mo15 column
 * @method     ChildCustomerQuery groupByArcuinv24mo15() Group by the ArcuInv24mo15 column
 * @method     ChildCustomerQuery groupByArcusale24mo16() Group by the ArcuSale24mo16 column
 * @method     ChildCustomerQuery groupByArcuinv24mo16() Group by the ArcuInv24mo16 column
 * @method     ChildCustomerQuery groupByArcusale24mo17() Group by the ArcuSale24mo17 column
 * @method     ChildCustomerQuery groupByArcuinv24mo17() Group by the ArcuInv24mo17 column
 * @method     ChildCustomerQuery groupByArcusale24mo18() Group by the ArcuSale24mo18 column
 * @method     ChildCustomerQuery groupByArcuinv24mo18() Group by the ArcuInv24mo18 column
 * @method     ChildCustomerQuery groupByArcusale24mo19() Group by the ArcuSale24mo19 column
 * @method     ChildCustomerQuery groupByArcuinv24mo19() Group by the ArcuInv24mo19 column
 * @method     ChildCustomerQuery groupByArcusale24mo20() Group by the ArcuSale24mo20 column
 * @method     ChildCustomerQuery groupByArcuinv24mo20() Group by the ArcuInv24mo20 column
 * @method     ChildCustomerQuery groupByArcusale24mo21() Group by the ArcuSale24mo21 column
 * @method     ChildCustomerQuery groupByArcuinv24mo21() Group by the ArcuInv24mo21 column
 * @method     ChildCustomerQuery groupByArcusale24mo22() Group by the ArcuSale24mo22 column
 * @method     ChildCustomerQuery groupByArcuinv24mo22() Group by the ArcuInv24mo22 column
 * @method     ChildCustomerQuery groupByArcusale24mo23() Group by the ArcuSale24mo23 column
 * @method     ChildCustomerQuery groupByArcuinv24mo23() Group by the ArcuInv24mo23 column
 * @method     ChildCustomerQuery groupByArcusale24mo24() Group by the ArcuSale24mo24 column
 * @method     ChildCustomerQuery groupByArcuinv24mo24() Group by the ArcuInv24mo24 column
 * @method     ChildCustomerQuery groupByArculastpayamt() Group by the ArcuLastPayAmt column
 * @method     ChildCustomerQuery groupByArcuordrtot() Group by the ArcuOrdrTot column
 * @method     ChildCustomerQuery groupByArcuusefrtin() Group by the ArcuUseFrtIn column
 * @method     ChildCustomerQuery groupByArcumyvendid() Group by the ArcuMyVendId column
 * @method     ChildCustomerQuery groupByArcuaddlpricdisc() Group by the ArcuAddlPricDisc column
 * @method     ChildCustomerQuery groupByArcuactiveinactive() Group by the ArcuActiveInactive column
 * @method     ChildCustomerQuery groupByArcuinactivedate() Group by the ArcuInactiveDate column
 * @method     ChildCustomerQuery groupByArcuchrgfrt() Group by the ArcuChrgFrt column
 * @method     ChildCustomerQuery groupByArcucorexdays() Group by the ArcuCoreXDays column
 * @method     ChildCustomerQuery groupByArcucontractnbr() Group by the ArcuContractNbr column
 * @method     ChildCustomerQuery groupByArcucorelf() Group by the ArcuCoreLF column
 * @method     ChildCustomerQuery groupByArcucorebankid() Group by the ArcuCoreBankId column
 * @method     ChildCustomerQuery groupByArcudunsnbr() Group by the ArcuDunsNbr column
 * @method     ChildCustomerQuery groupByArcurfmlvalu() Group by the ArcuRfmlValu column
 * @method     ChildCustomerQuery groupByArcucustpoparam() Group by the ArcuCustPoParam column
 * @method     ChildCustomerQuery groupByArcuagelevel() Group by the ArcuAgeLevel column
 * @method     ChildCustomerQuery groupByArtbroute() Group by the ArtbRoute column
 * @method     ChildCustomerQuery groupByArcuwgtaxcode() Group by the ArcuWgTaxCode column
 * @method     ChildCustomerQuery groupByArcuacptsupercede() Group by the ArcuAcptSupercede column
 * @method     ChildCustomerQuery groupByArcumstrcustid() Group by the ArcuMstrCustId column
 * @method     ChildCustomerQuery groupByArcusurchgpct() Group by the ArcuSurchgPct column
 * @method     ChildCustomerQuery groupByArcuallowsplit() Group by the ArcuAllowSplit column
 * @method     ChildCustomerQuery groupByArculinemin() Group by the ArcuLineMin column
 * @method     ChildCustomerQuery groupByArcuordrmin() Group by the ArcuOrdrMin column
 * @method     ChildCustomerQuery groupByArcuupsacctnbr() Group by the ArcuUpsAcctNbr column
 * @method     ChildCustomerQuery groupByArcuprtmatcert() Group by the ArcuPrtMatCert column
 * @method     ChildCustomerQuery groupByArcufobinputyn() Group by the ArcuFobInputYn column
 * @method     ChildCustomerQuery groupByArcufobperlb() Group by the ArcuFobPerLb column
 * @method     ChildCustomerQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildCustomerQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildCustomerQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildCustomerQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildCustomerQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildCustomerQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildCustomerQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildCustomerQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildCustomerQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildCustomerQuery leftJoinCustomerCommissionCode($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerCommissionCode relation
 * @method     ChildCustomerQuery rightJoinCustomerCommissionCode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerCommissionCode relation
 * @method     ChildCustomerQuery innerJoinCustomerCommissionCode($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerCommissionCode relation
 *
 * @method     ChildCustomerQuery joinWithCustomerCommissionCode($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerCommissionCode relation
 *
 * @method     ChildCustomerQuery leftJoinWithCustomerCommissionCode() Adds a LEFT JOIN clause and with to the query using the CustomerCommissionCode relation
 * @method     ChildCustomerQuery rightJoinWithCustomerCommissionCode() Adds a RIGHT JOIN clause and with to the query using the CustomerCommissionCode relation
 * @method     ChildCustomerQuery innerJoinWithCustomerCommissionCode() Adds a INNER JOIN clause and with to the query using the CustomerCommissionCode relation
 *
 * @method     ChildCustomerQuery leftJoinShipvia($relationAlias = null) Adds a LEFT JOIN clause to the query using the Shipvia relation
 * @method     ChildCustomerQuery rightJoinShipvia($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Shipvia relation
 * @method     ChildCustomerQuery innerJoinShipvia($relationAlias = null) Adds a INNER JOIN clause to the query using the Shipvia relation
 *
 * @method     ChildCustomerQuery joinWithShipvia($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Shipvia relation
 *
 * @method     ChildCustomerQuery leftJoinWithShipvia() Adds a LEFT JOIN clause and with to the query using the Shipvia relation
 * @method     ChildCustomerQuery rightJoinWithShipvia() Adds a RIGHT JOIN clause and with to the query using the Shipvia relation
 * @method     ChildCustomerQuery innerJoinWithShipvia() Adds a INNER JOIN clause and with to the query using the Shipvia relation
 *
 * @method     ChildCustomerQuery leftJoinCustomerShipto($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildCustomerQuery rightJoinCustomerShipto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerShipto relation
 * @method     ChildCustomerQuery innerJoinCustomerShipto($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerShipto relation
 *
 * @method     ChildCustomerQuery joinWithCustomerShipto($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildCustomerQuery leftJoinWithCustomerShipto() Adds a LEFT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildCustomerQuery rightJoinWithCustomerShipto() Adds a RIGHT JOIN clause and with to the query using the CustomerShipto relation
 * @method     ChildCustomerQuery innerJoinWithCustomerShipto() Adds a INNER JOIN clause and with to the query using the CustomerShipto relation
 *
 * @method     ChildCustomerQuery leftJoinItemXrefCustomerNote($relationAlias = null) Adds a LEFT JOIN clause to the query using the ItemXrefCustomerNote relation
 * @method     ChildCustomerQuery rightJoinItemXrefCustomerNote($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ItemXrefCustomerNote relation
 * @method     ChildCustomerQuery innerJoinItemXrefCustomerNote($relationAlias = null) Adds a INNER JOIN clause to the query using the ItemXrefCustomerNote relation
 *
 * @method     ChildCustomerQuery joinWithItemXrefCustomerNote($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the ItemXrefCustomerNote relation
 *
 * @method     ChildCustomerQuery leftJoinWithItemXrefCustomerNote() Adds a LEFT JOIN clause and with to the query using the ItemXrefCustomerNote relation
 * @method     ChildCustomerQuery rightJoinWithItemXrefCustomerNote() Adds a RIGHT JOIN clause and with to the query using the ItemXrefCustomerNote relation
 * @method     ChildCustomerQuery innerJoinWithItemXrefCustomerNote() Adds a INNER JOIN clause and with to the query using the ItemXrefCustomerNote relation
 *
 * @method     ChildCustomerQuery leftJoinBookingDayCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the BookingDayCustomer relation
 * @method     ChildCustomerQuery rightJoinBookingDayCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BookingDayCustomer relation
 * @method     ChildCustomerQuery innerJoinBookingDayCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the BookingDayCustomer relation
 *
 * @method     ChildCustomerQuery joinWithBookingDayCustomer($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BookingDayCustomer relation
 *
 * @method     ChildCustomerQuery leftJoinWithBookingDayCustomer() Adds a LEFT JOIN clause and with to the query using the BookingDayCustomer relation
 * @method     ChildCustomerQuery rightJoinWithBookingDayCustomer() Adds a RIGHT JOIN clause and with to the query using the BookingDayCustomer relation
 * @method     ChildCustomerQuery innerJoinWithBookingDayCustomer() Adds a INNER JOIN clause and with to the query using the BookingDayCustomer relation
 *
 * @method     ChildCustomerQuery leftJoinBookingDayDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the BookingDayDetail relation
 * @method     ChildCustomerQuery rightJoinBookingDayDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BookingDayDetail relation
 * @method     ChildCustomerQuery innerJoinBookingDayDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the BookingDayDetail relation
 *
 * @method     ChildCustomerQuery joinWithBookingDayDetail($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BookingDayDetail relation
 *
 * @method     ChildCustomerQuery leftJoinWithBookingDayDetail() Adds a LEFT JOIN clause and with to the query using the BookingDayDetail relation
 * @method     ChildCustomerQuery rightJoinWithBookingDayDetail() Adds a RIGHT JOIN clause and with to the query using the BookingDayDetail relation
 * @method     ChildCustomerQuery innerJoinWithBookingDayDetail() Adds a INNER JOIN clause and with to the query using the BookingDayDetail relation
 *
 * @method     ChildCustomerQuery leftJoinBooking($relationAlias = null) Adds a LEFT JOIN clause to the query using the Booking relation
 * @method     ChildCustomerQuery rightJoinBooking($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Booking relation
 * @method     ChildCustomerQuery innerJoinBooking($relationAlias = null) Adds a INNER JOIN clause to the query using the Booking relation
 *
 * @method     ChildCustomerQuery joinWithBooking($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Booking relation
 *
 * @method     ChildCustomerQuery leftJoinWithBooking() Adds a LEFT JOIN clause and with to the query using the Booking relation
 * @method     ChildCustomerQuery rightJoinWithBooking() Adds a RIGHT JOIN clause and with to the query using the Booking relation
 * @method     ChildCustomerQuery innerJoinWithBooking() Adds a INNER JOIN clause and with to the query using the Booking relation
 *
 * @method     ChildCustomerQuery leftJoinSalesHistory($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesHistory relation
 * @method     ChildCustomerQuery rightJoinSalesHistory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesHistory relation
 * @method     ChildCustomerQuery innerJoinSalesHistory($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesHistory relation
 *
 * @method     ChildCustomerQuery joinWithSalesHistory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesHistory relation
 *
 * @method     ChildCustomerQuery leftJoinWithSalesHistory() Adds a LEFT JOIN clause and with to the query using the SalesHistory relation
 * @method     ChildCustomerQuery rightJoinWithSalesHistory() Adds a RIGHT JOIN clause and with to the query using the SalesHistory relation
 * @method     ChildCustomerQuery innerJoinWithSalesHistory() Adds a INNER JOIN clause and with to the query using the SalesHistory relation
 *
 * @method     ChildCustomerQuery leftJoinSalesOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesOrder relation
 * @method     ChildCustomerQuery rightJoinSalesOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesOrder relation
 * @method     ChildCustomerQuery innerJoinSalesOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesOrder relation
 *
 * @method     ChildCustomerQuery joinWithSalesOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SalesOrder relation
 *
 * @method     ChildCustomerQuery leftJoinWithSalesOrder() Adds a LEFT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildCustomerQuery rightJoinWithSalesOrder() Adds a RIGHT JOIN clause and with to the query using the SalesOrder relation
 * @method     ChildCustomerQuery innerJoinWithSalesOrder() Adds a INNER JOIN clause and with to the query using the SalesOrder relation
 *
 * @method     \CustomerCommissionCodeQuery|\ShipviaQuery|\CustomerShiptoQuery|\ItemXrefCustomerNoteQuery|\BookingDayCustomerQuery|\BookingDayDetailQuery|\BookingQuery|\SalesHistoryQuery|\SalesOrderQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildCustomer findOne(ConnectionInterface $con = null) Return the first ChildCustomer matching the query
 * @method     ChildCustomer findOneOrCreate(ConnectionInterface $con = null) Return the first ChildCustomer matching the query, or a new ChildCustomer object populated from the query conditions when no match is found
 *
 * @method     ChildCustomer findOneByArcucustid(string $ArcuCustId) Return the first ChildCustomer filtered by the ArcuCustId column
 * @method     ChildCustomer findOneByArcuname(string $ArcuName) Return the first ChildCustomer filtered by the ArcuName column
 * @method     ChildCustomer findOneByArcuadr1(string $ArcuAdr1) Return the first ChildCustomer filtered by the ArcuAdr1 column
 * @method     ChildCustomer findOneByArcuadr2(string $ArcuAdr2) Return the first ChildCustomer filtered by the ArcuAdr2 column
 * @method     ChildCustomer findOneByArcuadr3(string $ArcuAdr3) Return the first ChildCustomer filtered by the ArcuAdr3 column
 * @method     ChildCustomer findOneByArcuctry(string $ArcuCtry) Return the first ChildCustomer filtered by the ArcuCtry column
 * @method     ChildCustomer findOneByArcucity(string $ArcuCity) Return the first ChildCustomer filtered by the ArcuCity column
 * @method     ChildCustomer findOneByArcustat(string $ArcuStat) Return the first ChildCustomer filtered by the ArcuStat column
 * @method     ChildCustomer findOneByArcuzipcode(string $ArcuZipCode) Return the first ChildCustomer filtered by the ArcuZipCode column
 * @method     ChildCustomer findOneByArcudeliverydays(int $ArcuDeliveryDays) Return the first ChildCustomer filtered by the ArcuDeliveryDays column
 * @method     ChildCustomer findOneByArcuremitwhse(string $ArcuRemitWhse) Return the first ChildCustomer filtered by the ArcuRemitWhse column
 * @method     ChildCustomer findOneByArcushipbin(string $ArcuShipBin) Return the first ChildCustomer filtered by the ArcuShipBin column
 * @method     ChildCustomer findOneByArcuallowaddons(string $ArcuAllowAddOns) Return the first ChildCustomer filtered by the ArcuAllowAddOns column
 * @method     ChildCustomer findOneByArculmecommcustid(string $ArcuLmEcommCustId) Return the first ChildCustomer filtered by the ArcuLmEcommCustId column
 * @method     ChildCustomer findOneByArcugsuse2ndbin(string $ArcuGsUse2ndBin) Return the first ChildCustomer filtered by the ArcuGsUse2ndBin column
 * @method     ChildCustomer findOneByArspsaleper1(string $ArspSalePer1) Return the first ChildCustomer filtered by the ArspSalePer1 column
 * @method     ChildCustomer findOneByArspsaleper2(string $ArspSalePer2) Return the first ChildCustomer filtered by the ArspSalePer2 column
 * @method     ChildCustomer findOneByArspsaleper3(string $ArspSalePer3) Return the first ChildCustomer filtered by the ArspSalePer3 column
 * @method     ChildCustomer findOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildCustomer filtered by the ArtbMtaxCode column
 * @method     ChildCustomer findOneByArcutaxexemnbr(string $ArcuTaxExemNbr) Return the first ChildCustomer filtered by the ArcuTaxExemNbr column
 * @method     ChildCustomer findOneByIntbwhse(string $IntbWhse) Return the first ChildCustomer filtered by the IntbWhse column
 * @method     ChildCustomer findOneByArcupriclvl(string $ArcuPricLvl) Return the first ChildCustomer filtered by the ArcuPricLvl column
 * @method     ChildCustomer findOneByArcushipcomp(string $ArcuShipComp) Return the first ChildCustomer filtered by the ArcuShipComp column
 * @method     ChildCustomer findOneByArcutxbl(string $ArcuTxbl) Return the first ChildCustomer filtered by the ArcuTxbl column
 * @method     ChildCustomer findOneByArcupostal(string $ArcuPostal) Return the first ChildCustomer filtered by the ArcuPostal column
 * @method     ChildCustomer findOneByArtbshipvia(string $ArtbShipVia) Return the first ChildCustomer filtered by the ArtbShipVia column
 * @method     ChildCustomer findOneByArcubord(string $ArcuBord) Return the first ChildCustomer filtered by the ArcuBord column
 * @method     ChildCustomer findOneByArtbtypecode(string $ArtbTypeCode) Return the first ChildCustomer filtered by the ArtbTypeCode column
 * @method     ChildCustomer findOneByArtbpriccode(string $ArtbPricCode) Return the first ChildCustomer filtered by the ArtbPricCode column
 * @method     ChildCustomer findOneByArtbcommcode(string $ArtbCommCode) Return the first ChildCustomer filtered by the ArtbCommCode column
 * @method     ChildCustomer findOneByArtmtermcd(string $ArtmTermCd) Return the first ChildCustomer filtered by the ArtmTermCd column
 * @method     ChildCustomer findOneByArcucredlmt(string $ArcuCredLmt) Return the first ChildCustomer filtered by the ArcuCredLmt column
 * @method     ChildCustomer findOneByArcustmtcode(string $ArcuStmtCode) Return the first ChildCustomer filtered by the ArcuStmtCode column
 * @method     ChildCustomer findOneByArcucredhold(string $ArcuCredHold) Return the first ChildCustomer filtered by the ArcuCredHold column
 * @method     ChildCustomer findOneByArcufinchrg(string $ArcuFinChrg) Return the first ChildCustomer filtered by the ArcuFinChrg column
 * @method     ChildCustomer findOneByArcuusercode(string $ArcuUserCode) Return the first ChildCustomer filtered by the ArcuUserCode column
 * @method     ChildCustomer findOneByArcunewfc(string $ArcuNewFc) Return the first ChildCustomer filtered by the ArcuNewFc column
 * @method     ChildCustomer findOneByArcuunpdfc(string $ArcuUnpdFc) Return the first ChildCustomer filtered by the ArcuUnpdFc column
 * @method     ChildCustomer findOneByArcucurbal(string $ArcuCurBal) Return the first ChildCustomer filtered by the ArcuCurBal column
 * @method     ChildCustomer findOneByArcubalodue1(string $ArcuBalOdue1) Return the first ChildCustomer filtered by the ArcuBalOdue1 column
 * @method     ChildCustomer findOneByArcubalodue2(string $ArcuBalOdue2) Return the first ChildCustomer filtered by the ArcuBalOdue2 column
 * @method     ChildCustomer findOneByArcubalodue3(string $ArcuBalOdue3) Return the first ChildCustomer filtered by the ArcuBalOdue3 column
 * @method     ChildCustomer findOneByArcusalemtd(string $ArcuSaleMtd) Return the first ChildCustomer filtered by the ArcuSaleMtd column
 * @method     ChildCustomer findOneByArcuinvmtd(int $ArcuInvMtd) Return the first ChildCustomer filtered by the ArcuInvMtd column
 * @method     ChildCustomer findOneByArcusaleytd(string $ArcuSaleYtd) Return the first ChildCustomer filtered by the ArcuSaleYtd column
 * @method     ChildCustomer findOneByArcuinvytd(int $ArcuInvYtd) Return the first ChildCustomer filtered by the ArcuInvYtd column
 * @method     ChildCustomer findOneByArcudateopen(string $ArcuDateOpen) Return the first ChildCustomer filtered by the ArcuDateOpen column
 * @method     ChildCustomer findOneByArculastsaledate(string $ArcuLastSaleDate) Return the first ChildCustomer filtered by the ArcuLastSaleDate column
 * @method     ChildCustomer findOneByArcuhighbal(string $ArcuHighBal) Return the first ChildCustomer filtered by the ArcuHighBal column
 * @method     ChildCustomer findOneByArcubigsalemo(string $ArcuBigSaleMo) Return the first ChildCustomer filtered by the ArcuBigSaleMo column
 * @method     ChildCustomer findOneByArculastpaydate(string $ArcuLastPayDate) Return the first ChildCustomer filtered by the ArcuLastPayDate column
 * @method     ChildCustomer findOneByArcuavgpaydays(int $ArcuAvgPayDays) Return the first ChildCustomer filtered by the ArcuAvgPayDays column
 * @method     ChildCustomer findOneByArcuupszone(string $ArcuUpsZone) Return the first ChildCustomer filtered by the ArcuUpsZone column
 * @method     ChildCustomer findOneByArcuhighbaldate(string $ArcuHighBalDate) Return the first ChildCustomer filtered by the ArcuHighBalDate column
 * @method     ChildCustomer findOneByArcusale24mo1(string $ArcuSale24mo1) Return the first ChildCustomer filtered by the ArcuSale24mo1 column
 * @method     ChildCustomer findOneByArcuinv24mo1(int $ArcuInv24mo1) Return the first ChildCustomer filtered by the ArcuInv24mo1 column
 * @method     ChildCustomer findOneByArcusale24mo2(string $ArcuSale24mo2) Return the first ChildCustomer filtered by the ArcuSale24mo2 column
 * @method     ChildCustomer findOneByArcuinv24mo2(int $ArcuInv24mo2) Return the first ChildCustomer filtered by the ArcuInv24mo2 column
 * @method     ChildCustomer findOneByArcusale24mo3(string $ArcuSale24mo3) Return the first ChildCustomer filtered by the ArcuSale24mo3 column
 * @method     ChildCustomer findOneByArcuinv24mo3(int $ArcuInv24mo3) Return the first ChildCustomer filtered by the ArcuInv24mo3 column
 * @method     ChildCustomer findOneByArcusale24mo4(string $ArcuSale24mo4) Return the first ChildCustomer filtered by the ArcuSale24mo4 column
 * @method     ChildCustomer findOneByArcuinv24mo4(int $ArcuInv24mo4) Return the first ChildCustomer filtered by the ArcuInv24mo4 column
 * @method     ChildCustomer findOneByArcusale24mo5(string $ArcuSale24mo5) Return the first ChildCustomer filtered by the ArcuSale24mo5 column
 * @method     ChildCustomer findOneByArcuinv24mo5(int $ArcuInv24mo5) Return the first ChildCustomer filtered by the ArcuInv24mo5 column
 * @method     ChildCustomer findOneByArcusale24mo6(string $ArcuSale24mo6) Return the first ChildCustomer filtered by the ArcuSale24mo6 column
 * @method     ChildCustomer findOneByArcuinv24mo6(int $ArcuInv24mo6) Return the first ChildCustomer filtered by the ArcuInv24mo6 column
 * @method     ChildCustomer findOneByArcusale24mo7(string $ArcuSale24mo7) Return the first ChildCustomer filtered by the ArcuSale24mo7 column
 * @method     ChildCustomer findOneByArcuinv24mo7(int $ArcuInv24mo7) Return the first ChildCustomer filtered by the ArcuInv24mo7 column
 * @method     ChildCustomer findOneByArcusale24mo8(string $ArcuSale24mo8) Return the first ChildCustomer filtered by the ArcuSale24mo8 column
 * @method     ChildCustomer findOneByArcuinv24mo8(int $ArcuInv24mo8) Return the first ChildCustomer filtered by the ArcuInv24mo8 column
 * @method     ChildCustomer findOneByArcusale24mo9(string $ArcuSale24mo9) Return the first ChildCustomer filtered by the ArcuSale24mo9 column
 * @method     ChildCustomer findOneByArcuinv24mo9(int $ArcuInv24mo9) Return the first ChildCustomer filtered by the ArcuInv24mo9 column
 * @method     ChildCustomer findOneByArcusale24mo10(string $ArcuSale24mo10) Return the first ChildCustomer filtered by the ArcuSale24mo10 column
 * @method     ChildCustomer findOneByArcuinv24mo10(int $ArcuInv24mo10) Return the first ChildCustomer filtered by the ArcuInv24mo10 column
 * @method     ChildCustomer findOneByArcusale24mo11(string $ArcuSale24mo11) Return the first ChildCustomer filtered by the ArcuSale24mo11 column
 * @method     ChildCustomer findOneByArcuinv24mo11(int $ArcuInv24mo11) Return the first ChildCustomer filtered by the ArcuInv24mo11 column
 * @method     ChildCustomer findOneByArcusale24mo12(string $ArcuSale24mo12) Return the first ChildCustomer filtered by the ArcuSale24mo12 column
 * @method     ChildCustomer findOneByArcuinv24mo12(int $ArcuInv24mo12) Return the first ChildCustomer filtered by the ArcuInv24mo12 column
 * @method     ChildCustomer findOneByArcusale24mo13(string $ArcuSale24mo13) Return the first ChildCustomer filtered by the ArcuSale24mo13 column
 * @method     ChildCustomer findOneByArcuinv24mo13(int $ArcuInv24mo13) Return the first ChildCustomer filtered by the ArcuInv24mo13 column
 * @method     ChildCustomer findOneByArcusale24mo14(string $ArcuSale24mo14) Return the first ChildCustomer filtered by the ArcuSale24mo14 column
 * @method     ChildCustomer findOneByArcuinv24mo14(int $ArcuInv24mo14) Return the first ChildCustomer filtered by the ArcuInv24mo14 column
 * @method     ChildCustomer findOneByArcusale24mo15(string $ArcuSale24mo15) Return the first ChildCustomer filtered by the ArcuSale24mo15 column
 * @method     ChildCustomer findOneByArcuinv24mo15(int $ArcuInv24mo15) Return the first ChildCustomer filtered by the ArcuInv24mo15 column
 * @method     ChildCustomer findOneByArcusale24mo16(string $ArcuSale24mo16) Return the first ChildCustomer filtered by the ArcuSale24mo16 column
 * @method     ChildCustomer findOneByArcuinv24mo16(int $ArcuInv24mo16) Return the first ChildCustomer filtered by the ArcuInv24mo16 column
 * @method     ChildCustomer findOneByArcusale24mo17(string $ArcuSale24mo17) Return the first ChildCustomer filtered by the ArcuSale24mo17 column
 * @method     ChildCustomer findOneByArcuinv24mo17(int $ArcuInv24mo17) Return the first ChildCustomer filtered by the ArcuInv24mo17 column
 * @method     ChildCustomer findOneByArcusale24mo18(string $ArcuSale24mo18) Return the first ChildCustomer filtered by the ArcuSale24mo18 column
 * @method     ChildCustomer findOneByArcuinv24mo18(int $ArcuInv24mo18) Return the first ChildCustomer filtered by the ArcuInv24mo18 column
 * @method     ChildCustomer findOneByArcusale24mo19(string $ArcuSale24mo19) Return the first ChildCustomer filtered by the ArcuSale24mo19 column
 * @method     ChildCustomer findOneByArcuinv24mo19(int $ArcuInv24mo19) Return the first ChildCustomer filtered by the ArcuInv24mo19 column
 * @method     ChildCustomer findOneByArcusale24mo20(string $ArcuSale24mo20) Return the first ChildCustomer filtered by the ArcuSale24mo20 column
 * @method     ChildCustomer findOneByArcuinv24mo20(int $ArcuInv24mo20) Return the first ChildCustomer filtered by the ArcuInv24mo20 column
 * @method     ChildCustomer findOneByArcusale24mo21(string $ArcuSale24mo21) Return the first ChildCustomer filtered by the ArcuSale24mo21 column
 * @method     ChildCustomer findOneByArcuinv24mo21(int $ArcuInv24mo21) Return the first ChildCustomer filtered by the ArcuInv24mo21 column
 * @method     ChildCustomer findOneByArcusale24mo22(string $ArcuSale24mo22) Return the first ChildCustomer filtered by the ArcuSale24mo22 column
 * @method     ChildCustomer findOneByArcuinv24mo22(int $ArcuInv24mo22) Return the first ChildCustomer filtered by the ArcuInv24mo22 column
 * @method     ChildCustomer findOneByArcusale24mo23(string $ArcuSale24mo23) Return the first ChildCustomer filtered by the ArcuSale24mo23 column
 * @method     ChildCustomer findOneByArcuinv24mo23(int $ArcuInv24mo23) Return the first ChildCustomer filtered by the ArcuInv24mo23 column
 * @method     ChildCustomer findOneByArcusale24mo24(string $ArcuSale24mo24) Return the first ChildCustomer filtered by the ArcuSale24mo24 column
 * @method     ChildCustomer findOneByArcuinv24mo24(int $ArcuInv24mo24) Return the first ChildCustomer filtered by the ArcuInv24mo24 column
 * @method     ChildCustomer findOneByArculastpayamt(string $ArcuLastPayAmt) Return the first ChildCustomer filtered by the ArcuLastPayAmt column
 * @method     ChildCustomer findOneByArcuordrtot(string $ArcuOrdrTot) Return the first ChildCustomer filtered by the ArcuOrdrTot column
 * @method     ChildCustomer findOneByArcuusefrtin(string $ArcuUseFrtIn) Return the first ChildCustomer filtered by the ArcuUseFrtIn column
 * @method     ChildCustomer findOneByArcumyvendid(string $ArcuMyVendId) Return the first ChildCustomer filtered by the ArcuMyVendId column
 * @method     ChildCustomer findOneByArcuaddlpricdisc(string $ArcuAddlPricDisc) Return the first ChildCustomer filtered by the ArcuAddlPricDisc column
 * @method     ChildCustomer findOneByArcuactiveinactive(string $ArcuActiveInactive) Return the first ChildCustomer filtered by the ArcuActiveInactive column
 * @method     ChildCustomer findOneByArcuinactivedate(string $ArcuInactiveDate) Return the first ChildCustomer filtered by the ArcuInactiveDate column
 * @method     ChildCustomer findOneByArcuchrgfrt(string $ArcuChrgFrt) Return the first ChildCustomer filtered by the ArcuChrgFrt column
 * @method     ChildCustomer findOneByArcucorexdays(int $ArcuCoreXDays) Return the first ChildCustomer filtered by the ArcuCoreXDays column
 * @method     ChildCustomer findOneByArcucontractnbr(string $ArcuContractNbr) Return the first ChildCustomer filtered by the ArcuContractNbr column
 * @method     ChildCustomer findOneByArcucorelf(string $ArcuCoreLF) Return the first ChildCustomer filtered by the ArcuCoreLF column
 * @method     ChildCustomer findOneByArcucorebankid(string $ArcuCoreBankId) Return the first ChildCustomer filtered by the ArcuCoreBankId column
 * @method     ChildCustomer findOneByArcudunsnbr(string $ArcuDunsNbr) Return the first ChildCustomer filtered by the ArcuDunsNbr column
 * @method     ChildCustomer findOneByArcurfmlvalu(int $ArcuRfmlValu) Return the first ChildCustomer filtered by the ArcuRfmlValu column
 * @method     ChildCustomer findOneByArcucustpoparam(string $ArcuCustPoParam) Return the first ChildCustomer filtered by the ArcuCustPoParam column
 * @method     ChildCustomer findOneByArcuagelevel(int $ArcuAgeLevel) Return the first ChildCustomer filtered by the ArcuAgeLevel column
 * @method     ChildCustomer findOneByArtbroute(string $ArtbRoute) Return the first ChildCustomer filtered by the ArtbRoute column
 * @method     ChildCustomer findOneByArcuwgtaxcode(string $ArcuWgTaxCode) Return the first ChildCustomer filtered by the ArcuWgTaxCode column
 * @method     ChildCustomer findOneByArcuacptsupercede(string $ArcuAcptSupercede) Return the first ChildCustomer filtered by the ArcuAcptSupercede column
 * @method     ChildCustomer findOneByArcumstrcustid(string $ArcuMstrCustId) Return the first ChildCustomer filtered by the ArcuMstrCustId column
 * @method     ChildCustomer findOneByArcusurchgpct(string $ArcuSurchgPct) Return the first ChildCustomer filtered by the ArcuSurchgPct column
 * @method     ChildCustomer findOneByArcuallowsplit(string $ArcuAllowSplit) Return the first ChildCustomer filtered by the ArcuAllowSplit column
 * @method     ChildCustomer findOneByArculinemin(string $ArcuLineMin) Return the first ChildCustomer filtered by the ArcuLineMin column
 * @method     ChildCustomer findOneByArcuordrmin(string $ArcuOrdrMin) Return the first ChildCustomer filtered by the ArcuOrdrMin column
 * @method     ChildCustomer findOneByArcuupsacctnbr(string $ArcuUpsAcctNbr) Return the first ChildCustomer filtered by the ArcuUpsAcctNbr column
 * @method     ChildCustomer findOneByArcuprtmatcert(string $ArcuPrtMatCert) Return the first ChildCustomer filtered by the ArcuPrtMatCert column
 * @method     ChildCustomer findOneByArcufobinputyn(string $ArcuFobInputYn) Return the first ChildCustomer filtered by the ArcuFobInputYn column
 * @method     ChildCustomer findOneByArcufobperlb(string $ArcuFobPerLb) Return the first ChildCustomer filtered by the ArcuFobPerLb column
 * @method     ChildCustomer findOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomer filtered by the DateUpdtd column
 * @method     ChildCustomer findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomer filtered by the TimeUpdtd column
 * @method     ChildCustomer findOneByDummy(string $dummy) Return the first ChildCustomer filtered by the dummy column *

 * @method     ChildCustomer requirePk($key, ConnectionInterface $con = null) Return the ChildCustomer by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOne(ConnectionInterface $con = null) Return the first ChildCustomer matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomer requireOneByArcucustid(string $ArcuCustId) Return the first ChildCustomer filtered by the ArcuCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuname(string $ArcuName) Return the first ChildCustomer filtered by the ArcuName column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuadr1(string $ArcuAdr1) Return the first ChildCustomer filtered by the ArcuAdr1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuadr2(string $ArcuAdr2) Return the first ChildCustomer filtered by the ArcuAdr2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuadr3(string $ArcuAdr3) Return the first ChildCustomer filtered by the ArcuAdr3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuctry(string $ArcuCtry) Return the first ChildCustomer filtered by the ArcuCtry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcucity(string $ArcuCity) Return the first ChildCustomer filtered by the ArcuCity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcustat(string $ArcuStat) Return the first ChildCustomer filtered by the ArcuStat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuzipcode(string $ArcuZipCode) Return the first ChildCustomer filtered by the ArcuZipCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcudeliverydays(int $ArcuDeliveryDays) Return the first ChildCustomer filtered by the ArcuDeliveryDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuremitwhse(string $ArcuRemitWhse) Return the first ChildCustomer filtered by the ArcuRemitWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcushipbin(string $ArcuShipBin) Return the first ChildCustomer filtered by the ArcuShipBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuallowaddons(string $ArcuAllowAddOns) Return the first ChildCustomer filtered by the ArcuAllowAddOns column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArculmecommcustid(string $ArcuLmEcommCustId) Return the first ChildCustomer filtered by the ArcuLmEcommCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcugsuse2ndbin(string $ArcuGsUse2ndBin) Return the first ChildCustomer filtered by the ArcuGsUse2ndBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArspsaleper1(string $ArspSalePer1) Return the first ChildCustomer filtered by the ArspSalePer1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArspsaleper2(string $ArspSalePer2) Return the first ChildCustomer filtered by the ArspSalePer2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArspsaleper3(string $ArspSalePer3) Return the first ChildCustomer filtered by the ArspSalePer3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArtbmtaxcode(string $ArtbMtaxCode) Return the first ChildCustomer filtered by the ArtbMtaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcutaxexemnbr(string $ArcuTaxExemNbr) Return the first ChildCustomer filtered by the ArcuTaxExemNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByIntbwhse(string $IntbWhse) Return the first ChildCustomer filtered by the IntbWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcupriclvl(string $ArcuPricLvl) Return the first ChildCustomer filtered by the ArcuPricLvl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcushipcomp(string $ArcuShipComp) Return the first ChildCustomer filtered by the ArcuShipComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcutxbl(string $ArcuTxbl) Return the first ChildCustomer filtered by the ArcuTxbl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcupostal(string $ArcuPostal) Return the first ChildCustomer filtered by the ArcuPostal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArtbshipvia(string $ArtbShipVia) Return the first ChildCustomer filtered by the ArtbShipVia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcubord(string $ArcuBord) Return the first ChildCustomer filtered by the ArcuBord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArtbtypecode(string $ArtbTypeCode) Return the first ChildCustomer filtered by the ArtbTypeCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArtbpriccode(string $ArtbPricCode) Return the first ChildCustomer filtered by the ArtbPricCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArtbcommcode(string $ArtbCommCode) Return the first ChildCustomer filtered by the ArtbCommCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArtmtermcd(string $ArtmTermCd) Return the first ChildCustomer filtered by the ArtmTermCd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcucredlmt(string $ArcuCredLmt) Return the first ChildCustomer filtered by the ArcuCredLmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcustmtcode(string $ArcuStmtCode) Return the first ChildCustomer filtered by the ArcuStmtCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcucredhold(string $ArcuCredHold) Return the first ChildCustomer filtered by the ArcuCredHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcufinchrg(string $ArcuFinChrg) Return the first ChildCustomer filtered by the ArcuFinChrg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuusercode(string $ArcuUserCode) Return the first ChildCustomer filtered by the ArcuUserCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcunewfc(string $ArcuNewFc) Return the first ChildCustomer filtered by the ArcuNewFc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuunpdfc(string $ArcuUnpdFc) Return the first ChildCustomer filtered by the ArcuUnpdFc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcucurbal(string $ArcuCurBal) Return the first ChildCustomer filtered by the ArcuCurBal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcubalodue1(string $ArcuBalOdue1) Return the first ChildCustomer filtered by the ArcuBalOdue1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcubalodue2(string $ArcuBalOdue2) Return the first ChildCustomer filtered by the ArcuBalOdue2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcubalodue3(string $ArcuBalOdue3) Return the first ChildCustomer filtered by the ArcuBalOdue3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusalemtd(string $ArcuSaleMtd) Return the first ChildCustomer filtered by the ArcuSaleMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinvmtd(int $ArcuInvMtd) Return the first ChildCustomer filtered by the ArcuInvMtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusaleytd(string $ArcuSaleYtd) Return the first ChildCustomer filtered by the ArcuSaleYtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinvytd(int $ArcuInvYtd) Return the first ChildCustomer filtered by the ArcuInvYtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcudateopen(string $ArcuDateOpen) Return the first ChildCustomer filtered by the ArcuDateOpen column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArculastsaledate(string $ArcuLastSaleDate) Return the first ChildCustomer filtered by the ArcuLastSaleDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuhighbal(string $ArcuHighBal) Return the first ChildCustomer filtered by the ArcuHighBal column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcubigsalemo(string $ArcuBigSaleMo) Return the first ChildCustomer filtered by the ArcuBigSaleMo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArculastpaydate(string $ArcuLastPayDate) Return the first ChildCustomer filtered by the ArcuLastPayDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuavgpaydays(int $ArcuAvgPayDays) Return the first ChildCustomer filtered by the ArcuAvgPayDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuupszone(string $ArcuUpsZone) Return the first ChildCustomer filtered by the ArcuUpsZone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuhighbaldate(string $ArcuHighBalDate) Return the first ChildCustomer filtered by the ArcuHighBalDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo1(string $ArcuSale24mo1) Return the first ChildCustomer filtered by the ArcuSale24mo1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo1(int $ArcuInv24mo1) Return the first ChildCustomer filtered by the ArcuInv24mo1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo2(string $ArcuSale24mo2) Return the first ChildCustomer filtered by the ArcuSale24mo2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo2(int $ArcuInv24mo2) Return the first ChildCustomer filtered by the ArcuInv24mo2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo3(string $ArcuSale24mo3) Return the first ChildCustomer filtered by the ArcuSale24mo3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo3(int $ArcuInv24mo3) Return the first ChildCustomer filtered by the ArcuInv24mo3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo4(string $ArcuSale24mo4) Return the first ChildCustomer filtered by the ArcuSale24mo4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo4(int $ArcuInv24mo4) Return the first ChildCustomer filtered by the ArcuInv24mo4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo5(string $ArcuSale24mo5) Return the first ChildCustomer filtered by the ArcuSale24mo5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo5(int $ArcuInv24mo5) Return the first ChildCustomer filtered by the ArcuInv24mo5 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo6(string $ArcuSale24mo6) Return the first ChildCustomer filtered by the ArcuSale24mo6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo6(int $ArcuInv24mo6) Return the first ChildCustomer filtered by the ArcuInv24mo6 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo7(string $ArcuSale24mo7) Return the first ChildCustomer filtered by the ArcuSale24mo7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo7(int $ArcuInv24mo7) Return the first ChildCustomer filtered by the ArcuInv24mo7 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo8(string $ArcuSale24mo8) Return the first ChildCustomer filtered by the ArcuSale24mo8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo8(int $ArcuInv24mo8) Return the first ChildCustomer filtered by the ArcuInv24mo8 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo9(string $ArcuSale24mo9) Return the first ChildCustomer filtered by the ArcuSale24mo9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo9(int $ArcuInv24mo9) Return the first ChildCustomer filtered by the ArcuInv24mo9 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo10(string $ArcuSale24mo10) Return the first ChildCustomer filtered by the ArcuSale24mo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo10(int $ArcuInv24mo10) Return the first ChildCustomer filtered by the ArcuInv24mo10 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo11(string $ArcuSale24mo11) Return the first ChildCustomer filtered by the ArcuSale24mo11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo11(int $ArcuInv24mo11) Return the first ChildCustomer filtered by the ArcuInv24mo11 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo12(string $ArcuSale24mo12) Return the first ChildCustomer filtered by the ArcuSale24mo12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo12(int $ArcuInv24mo12) Return the first ChildCustomer filtered by the ArcuInv24mo12 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo13(string $ArcuSale24mo13) Return the first ChildCustomer filtered by the ArcuSale24mo13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo13(int $ArcuInv24mo13) Return the first ChildCustomer filtered by the ArcuInv24mo13 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo14(string $ArcuSale24mo14) Return the first ChildCustomer filtered by the ArcuSale24mo14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo14(int $ArcuInv24mo14) Return the first ChildCustomer filtered by the ArcuInv24mo14 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo15(string $ArcuSale24mo15) Return the first ChildCustomer filtered by the ArcuSale24mo15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo15(int $ArcuInv24mo15) Return the first ChildCustomer filtered by the ArcuInv24mo15 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo16(string $ArcuSale24mo16) Return the first ChildCustomer filtered by the ArcuSale24mo16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo16(int $ArcuInv24mo16) Return the first ChildCustomer filtered by the ArcuInv24mo16 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo17(string $ArcuSale24mo17) Return the first ChildCustomer filtered by the ArcuSale24mo17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo17(int $ArcuInv24mo17) Return the first ChildCustomer filtered by the ArcuInv24mo17 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo18(string $ArcuSale24mo18) Return the first ChildCustomer filtered by the ArcuSale24mo18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo18(int $ArcuInv24mo18) Return the first ChildCustomer filtered by the ArcuInv24mo18 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo19(string $ArcuSale24mo19) Return the first ChildCustomer filtered by the ArcuSale24mo19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo19(int $ArcuInv24mo19) Return the first ChildCustomer filtered by the ArcuInv24mo19 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo20(string $ArcuSale24mo20) Return the first ChildCustomer filtered by the ArcuSale24mo20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo20(int $ArcuInv24mo20) Return the first ChildCustomer filtered by the ArcuInv24mo20 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo21(string $ArcuSale24mo21) Return the first ChildCustomer filtered by the ArcuSale24mo21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo21(int $ArcuInv24mo21) Return the first ChildCustomer filtered by the ArcuInv24mo21 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo22(string $ArcuSale24mo22) Return the first ChildCustomer filtered by the ArcuSale24mo22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo22(int $ArcuInv24mo22) Return the first ChildCustomer filtered by the ArcuInv24mo22 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo23(string $ArcuSale24mo23) Return the first ChildCustomer filtered by the ArcuSale24mo23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo23(int $ArcuInv24mo23) Return the first ChildCustomer filtered by the ArcuInv24mo23 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusale24mo24(string $ArcuSale24mo24) Return the first ChildCustomer filtered by the ArcuSale24mo24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinv24mo24(int $ArcuInv24mo24) Return the first ChildCustomer filtered by the ArcuInv24mo24 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArculastpayamt(string $ArcuLastPayAmt) Return the first ChildCustomer filtered by the ArcuLastPayAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuordrtot(string $ArcuOrdrTot) Return the first ChildCustomer filtered by the ArcuOrdrTot column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuusefrtin(string $ArcuUseFrtIn) Return the first ChildCustomer filtered by the ArcuUseFrtIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcumyvendid(string $ArcuMyVendId) Return the first ChildCustomer filtered by the ArcuMyVendId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuaddlpricdisc(string $ArcuAddlPricDisc) Return the first ChildCustomer filtered by the ArcuAddlPricDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuactiveinactive(string $ArcuActiveInactive) Return the first ChildCustomer filtered by the ArcuActiveInactive column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuinactivedate(string $ArcuInactiveDate) Return the first ChildCustomer filtered by the ArcuInactiveDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuchrgfrt(string $ArcuChrgFrt) Return the first ChildCustomer filtered by the ArcuChrgFrt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcucorexdays(int $ArcuCoreXDays) Return the first ChildCustomer filtered by the ArcuCoreXDays column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcucontractnbr(string $ArcuContractNbr) Return the first ChildCustomer filtered by the ArcuContractNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcucorelf(string $ArcuCoreLF) Return the first ChildCustomer filtered by the ArcuCoreLF column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcucorebankid(string $ArcuCoreBankId) Return the first ChildCustomer filtered by the ArcuCoreBankId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcudunsnbr(string $ArcuDunsNbr) Return the first ChildCustomer filtered by the ArcuDunsNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcurfmlvalu(int $ArcuRfmlValu) Return the first ChildCustomer filtered by the ArcuRfmlValu column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcucustpoparam(string $ArcuCustPoParam) Return the first ChildCustomer filtered by the ArcuCustPoParam column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuagelevel(int $ArcuAgeLevel) Return the first ChildCustomer filtered by the ArcuAgeLevel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArtbroute(string $ArtbRoute) Return the first ChildCustomer filtered by the ArtbRoute column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuwgtaxcode(string $ArcuWgTaxCode) Return the first ChildCustomer filtered by the ArcuWgTaxCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuacptsupercede(string $ArcuAcptSupercede) Return the first ChildCustomer filtered by the ArcuAcptSupercede column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcumstrcustid(string $ArcuMstrCustId) Return the first ChildCustomer filtered by the ArcuMstrCustId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcusurchgpct(string $ArcuSurchgPct) Return the first ChildCustomer filtered by the ArcuSurchgPct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuallowsplit(string $ArcuAllowSplit) Return the first ChildCustomer filtered by the ArcuAllowSplit column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArculinemin(string $ArcuLineMin) Return the first ChildCustomer filtered by the ArcuLineMin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuordrmin(string $ArcuOrdrMin) Return the first ChildCustomer filtered by the ArcuOrdrMin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuupsacctnbr(string $ArcuUpsAcctNbr) Return the first ChildCustomer filtered by the ArcuUpsAcctNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcuprtmatcert(string $ArcuPrtMatCert) Return the first ChildCustomer filtered by the ArcuPrtMatCert column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcufobinputyn(string $ArcuFobInputYn) Return the first ChildCustomer filtered by the ArcuFobInputYn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByArcufobperlb(string $ArcuFobPerLb) Return the first ChildCustomer filtered by the ArcuFobPerLb column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByDateupdtd(string $DateUpdtd) Return the first ChildCustomer filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildCustomer filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildCustomer requireOneByDummy(string $dummy) Return the first ChildCustomer filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildCustomer[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildCustomer objects based on current ModelCriteria
 * @method     ChildCustomer[]|ObjectCollection findByArcucustid(string $ArcuCustId) Return ChildCustomer objects filtered by the ArcuCustId column
 * @method     ChildCustomer[]|ObjectCollection findByArcuname(string $ArcuName) Return ChildCustomer objects filtered by the ArcuName column
 * @method     ChildCustomer[]|ObjectCollection findByArcuadr1(string $ArcuAdr1) Return ChildCustomer objects filtered by the ArcuAdr1 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuadr2(string $ArcuAdr2) Return ChildCustomer objects filtered by the ArcuAdr2 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuadr3(string $ArcuAdr3) Return ChildCustomer objects filtered by the ArcuAdr3 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuctry(string $ArcuCtry) Return ChildCustomer objects filtered by the ArcuCtry column
 * @method     ChildCustomer[]|ObjectCollection findByArcucity(string $ArcuCity) Return ChildCustomer objects filtered by the ArcuCity column
 * @method     ChildCustomer[]|ObjectCollection findByArcustat(string $ArcuStat) Return ChildCustomer objects filtered by the ArcuStat column
 * @method     ChildCustomer[]|ObjectCollection findByArcuzipcode(string $ArcuZipCode) Return ChildCustomer objects filtered by the ArcuZipCode column
 * @method     ChildCustomer[]|ObjectCollection findByArcudeliverydays(int $ArcuDeliveryDays) Return ChildCustomer objects filtered by the ArcuDeliveryDays column
 * @method     ChildCustomer[]|ObjectCollection findByArcuremitwhse(string $ArcuRemitWhse) Return ChildCustomer objects filtered by the ArcuRemitWhse column
 * @method     ChildCustomer[]|ObjectCollection findByArcushipbin(string $ArcuShipBin) Return ChildCustomer objects filtered by the ArcuShipBin column
 * @method     ChildCustomer[]|ObjectCollection findByArcuallowaddons(string $ArcuAllowAddOns) Return ChildCustomer objects filtered by the ArcuAllowAddOns column
 * @method     ChildCustomer[]|ObjectCollection findByArculmecommcustid(string $ArcuLmEcommCustId) Return ChildCustomer objects filtered by the ArcuLmEcommCustId column
 * @method     ChildCustomer[]|ObjectCollection findByArcugsuse2ndbin(string $ArcuGsUse2ndBin) Return ChildCustomer objects filtered by the ArcuGsUse2ndBin column
 * @method     ChildCustomer[]|ObjectCollection findByArspsaleper1(string $ArspSalePer1) Return ChildCustomer objects filtered by the ArspSalePer1 column
 * @method     ChildCustomer[]|ObjectCollection findByArspsaleper2(string $ArspSalePer2) Return ChildCustomer objects filtered by the ArspSalePer2 column
 * @method     ChildCustomer[]|ObjectCollection findByArspsaleper3(string $ArspSalePer3) Return ChildCustomer objects filtered by the ArspSalePer3 column
 * @method     ChildCustomer[]|ObjectCollection findByArtbmtaxcode(string $ArtbMtaxCode) Return ChildCustomer objects filtered by the ArtbMtaxCode column
 * @method     ChildCustomer[]|ObjectCollection findByArcutaxexemnbr(string $ArcuTaxExemNbr) Return ChildCustomer objects filtered by the ArcuTaxExemNbr column
 * @method     ChildCustomer[]|ObjectCollection findByIntbwhse(string $IntbWhse) Return ChildCustomer objects filtered by the IntbWhse column
 * @method     ChildCustomer[]|ObjectCollection findByArcupriclvl(string $ArcuPricLvl) Return ChildCustomer objects filtered by the ArcuPricLvl column
 * @method     ChildCustomer[]|ObjectCollection findByArcushipcomp(string $ArcuShipComp) Return ChildCustomer objects filtered by the ArcuShipComp column
 * @method     ChildCustomer[]|ObjectCollection findByArcutxbl(string $ArcuTxbl) Return ChildCustomer objects filtered by the ArcuTxbl column
 * @method     ChildCustomer[]|ObjectCollection findByArcupostal(string $ArcuPostal) Return ChildCustomer objects filtered by the ArcuPostal column
 * @method     ChildCustomer[]|ObjectCollection findByArtbshipvia(string $ArtbShipVia) Return ChildCustomer objects filtered by the ArtbShipVia column
 * @method     ChildCustomer[]|ObjectCollection findByArcubord(string $ArcuBord) Return ChildCustomer objects filtered by the ArcuBord column
 * @method     ChildCustomer[]|ObjectCollection findByArtbtypecode(string $ArtbTypeCode) Return ChildCustomer objects filtered by the ArtbTypeCode column
 * @method     ChildCustomer[]|ObjectCollection findByArtbpriccode(string $ArtbPricCode) Return ChildCustomer objects filtered by the ArtbPricCode column
 * @method     ChildCustomer[]|ObjectCollection findByArtbcommcode(string $ArtbCommCode) Return ChildCustomer objects filtered by the ArtbCommCode column
 * @method     ChildCustomer[]|ObjectCollection findByArtmtermcd(string $ArtmTermCd) Return ChildCustomer objects filtered by the ArtmTermCd column
 * @method     ChildCustomer[]|ObjectCollection findByArcucredlmt(string $ArcuCredLmt) Return ChildCustomer objects filtered by the ArcuCredLmt column
 * @method     ChildCustomer[]|ObjectCollection findByArcustmtcode(string $ArcuStmtCode) Return ChildCustomer objects filtered by the ArcuStmtCode column
 * @method     ChildCustomer[]|ObjectCollection findByArcucredhold(string $ArcuCredHold) Return ChildCustomer objects filtered by the ArcuCredHold column
 * @method     ChildCustomer[]|ObjectCollection findByArcufinchrg(string $ArcuFinChrg) Return ChildCustomer objects filtered by the ArcuFinChrg column
 * @method     ChildCustomer[]|ObjectCollection findByArcuusercode(string $ArcuUserCode) Return ChildCustomer objects filtered by the ArcuUserCode column
 * @method     ChildCustomer[]|ObjectCollection findByArcunewfc(string $ArcuNewFc) Return ChildCustomer objects filtered by the ArcuNewFc column
 * @method     ChildCustomer[]|ObjectCollection findByArcuunpdfc(string $ArcuUnpdFc) Return ChildCustomer objects filtered by the ArcuUnpdFc column
 * @method     ChildCustomer[]|ObjectCollection findByArcucurbal(string $ArcuCurBal) Return ChildCustomer objects filtered by the ArcuCurBal column
 * @method     ChildCustomer[]|ObjectCollection findByArcubalodue1(string $ArcuBalOdue1) Return ChildCustomer objects filtered by the ArcuBalOdue1 column
 * @method     ChildCustomer[]|ObjectCollection findByArcubalodue2(string $ArcuBalOdue2) Return ChildCustomer objects filtered by the ArcuBalOdue2 column
 * @method     ChildCustomer[]|ObjectCollection findByArcubalodue3(string $ArcuBalOdue3) Return ChildCustomer objects filtered by the ArcuBalOdue3 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusalemtd(string $ArcuSaleMtd) Return ChildCustomer objects filtered by the ArcuSaleMtd column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinvmtd(int $ArcuInvMtd) Return ChildCustomer objects filtered by the ArcuInvMtd column
 * @method     ChildCustomer[]|ObjectCollection findByArcusaleytd(string $ArcuSaleYtd) Return ChildCustomer objects filtered by the ArcuSaleYtd column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinvytd(int $ArcuInvYtd) Return ChildCustomer objects filtered by the ArcuInvYtd column
 * @method     ChildCustomer[]|ObjectCollection findByArcudateopen(string $ArcuDateOpen) Return ChildCustomer objects filtered by the ArcuDateOpen column
 * @method     ChildCustomer[]|ObjectCollection findByArculastsaledate(string $ArcuLastSaleDate) Return ChildCustomer objects filtered by the ArcuLastSaleDate column
 * @method     ChildCustomer[]|ObjectCollection findByArcuhighbal(string $ArcuHighBal) Return ChildCustomer objects filtered by the ArcuHighBal column
 * @method     ChildCustomer[]|ObjectCollection findByArcubigsalemo(string $ArcuBigSaleMo) Return ChildCustomer objects filtered by the ArcuBigSaleMo column
 * @method     ChildCustomer[]|ObjectCollection findByArculastpaydate(string $ArcuLastPayDate) Return ChildCustomer objects filtered by the ArcuLastPayDate column
 * @method     ChildCustomer[]|ObjectCollection findByArcuavgpaydays(int $ArcuAvgPayDays) Return ChildCustomer objects filtered by the ArcuAvgPayDays column
 * @method     ChildCustomer[]|ObjectCollection findByArcuupszone(string $ArcuUpsZone) Return ChildCustomer objects filtered by the ArcuUpsZone column
 * @method     ChildCustomer[]|ObjectCollection findByArcuhighbaldate(string $ArcuHighBalDate) Return ChildCustomer objects filtered by the ArcuHighBalDate column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo1(string $ArcuSale24mo1) Return ChildCustomer objects filtered by the ArcuSale24mo1 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo1(int $ArcuInv24mo1) Return ChildCustomer objects filtered by the ArcuInv24mo1 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo2(string $ArcuSale24mo2) Return ChildCustomer objects filtered by the ArcuSale24mo2 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo2(int $ArcuInv24mo2) Return ChildCustomer objects filtered by the ArcuInv24mo2 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo3(string $ArcuSale24mo3) Return ChildCustomer objects filtered by the ArcuSale24mo3 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo3(int $ArcuInv24mo3) Return ChildCustomer objects filtered by the ArcuInv24mo3 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo4(string $ArcuSale24mo4) Return ChildCustomer objects filtered by the ArcuSale24mo4 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo4(int $ArcuInv24mo4) Return ChildCustomer objects filtered by the ArcuInv24mo4 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo5(string $ArcuSale24mo5) Return ChildCustomer objects filtered by the ArcuSale24mo5 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo5(int $ArcuInv24mo5) Return ChildCustomer objects filtered by the ArcuInv24mo5 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo6(string $ArcuSale24mo6) Return ChildCustomer objects filtered by the ArcuSale24mo6 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo6(int $ArcuInv24mo6) Return ChildCustomer objects filtered by the ArcuInv24mo6 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo7(string $ArcuSale24mo7) Return ChildCustomer objects filtered by the ArcuSale24mo7 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo7(int $ArcuInv24mo7) Return ChildCustomer objects filtered by the ArcuInv24mo7 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo8(string $ArcuSale24mo8) Return ChildCustomer objects filtered by the ArcuSale24mo8 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo8(int $ArcuInv24mo8) Return ChildCustomer objects filtered by the ArcuInv24mo8 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo9(string $ArcuSale24mo9) Return ChildCustomer objects filtered by the ArcuSale24mo9 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo9(int $ArcuInv24mo9) Return ChildCustomer objects filtered by the ArcuInv24mo9 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo10(string $ArcuSale24mo10) Return ChildCustomer objects filtered by the ArcuSale24mo10 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo10(int $ArcuInv24mo10) Return ChildCustomer objects filtered by the ArcuInv24mo10 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo11(string $ArcuSale24mo11) Return ChildCustomer objects filtered by the ArcuSale24mo11 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo11(int $ArcuInv24mo11) Return ChildCustomer objects filtered by the ArcuInv24mo11 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo12(string $ArcuSale24mo12) Return ChildCustomer objects filtered by the ArcuSale24mo12 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo12(int $ArcuInv24mo12) Return ChildCustomer objects filtered by the ArcuInv24mo12 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo13(string $ArcuSale24mo13) Return ChildCustomer objects filtered by the ArcuSale24mo13 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo13(int $ArcuInv24mo13) Return ChildCustomer objects filtered by the ArcuInv24mo13 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo14(string $ArcuSale24mo14) Return ChildCustomer objects filtered by the ArcuSale24mo14 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo14(int $ArcuInv24mo14) Return ChildCustomer objects filtered by the ArcuInv24mo14 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo15(string $ArcuSale24mo15) Return ChildCustomer objects filtered by the ArcuSale24mo15 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo15(int $ArcuInv24mo15) Return ChildCustomer objects filtered by the ArcuInv24mo15 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo16(string $ArcuSale24mo16) Return ChildCustomer objects filtered by the ArcuSale24mo16 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo16(int $ArcuInv24mo16) Return ChildCustomer objects filtered by the ArcuInv24mo16 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo17(string $ArcuSale24mo17) Return ChildCustomer objects filtered by the ArcuSale24mo17 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo17(int $ArcuInv24mo17) Return ChildCustomer objects filtered by the ArcuInv24mo17 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo18(string $ArcuSale24mo18) Return ChildCustomer objects filtered by the ArcuSale24mo18 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo18(int $ArcuInv24mo18) Return ChildCustomer objects filtered by the ArcuInv24mo18 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo19(string $ArcuSale24mo19) Return ChildCustomer objects filtered by the ArcuSale24mo19 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo19(int $ArcuInv24mo19) Return ChildCustomer objects filtered by the ArcuInv24mo19 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo20(string $ArcuSale24mo20) Return ChildCustomer objects filtered by the ArcuSale24mo20 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo20(int $ArcuInv24mo20) Return ChildCustomer objects filtered by the ArcuInv24mo20 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo21(string $ArcuSale24mo21) Return ChildCustomer objects filtered by the ArcuSale24mo21 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo21(int $ArcuInv24mo21) Return ChildCustomer objects filtered by the ArcuInv24mo21 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo22(string $ArcuSale24mo22) Return ChildCustomer objects filtered by the ArcuSale24mo22 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo22(int $ArcuInv24mo22) Return ChildCustomer objects filtered by the ArcuInv24mo22 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo23(string $ArcuSale24mo23) Return ChildCustomer objects filtered by the ArcuSale24mo23 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo23(int $ArcuInv24mo23) Return ChildCustomer objects filtered by the ArcuInv24mo23 column
 * @method     ChildCustomer[]|ObjectCollection findByArcusale24mo24(string $ArcuSale24mo24) Return ChildCustomer objects filtered by the ArcuSale24mo24 column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinv24mo24(int $ArcuInv24mo24) Return ChildCustomer objects filtered by the ArcuInv24mo24 column
 * @method     ChildCustomer[]|ObjectCollection findByArculastpayamt(string $ArcuLastPayAmt) Return ChildCustomer objects filtered by the ArcuLastPayAmt column
 * @method     ChildCustomer[]|ObjectCollection findByArcuordrtot(string $ArcuOrdrTot) Return ChildCustomer objects filtered by the ArcuOrdrTot column
 * @method     ChildCustomer[]|ObjectCollection findByArcuusefrtin(string $ArcuUseFrtIn) Return ChildCustomer objects filtered by the ArcuUseFrtIn column
 * @method     ChildCustomer[]|ObjectCollection findByArcumyvendid(string $ArcuMyVendId) Return ChildCustomer objects filtered by the ArcuMyVendId column
 * @method     ChildCustomer[]|ObjectCollection findByArcuaddlpricdisc(string $ArcuAddlPricDisc) Return ChildCustomer objects filtered by the ArcuAddlPricDisc column
 * @method     ChildCustomer[]|ObjectCollection findByArcuactiveinactive(string $ArcuActiveInactive) Return ChildCustomer objects filtered by the ArcuActiveInactive column
 * @method     ChildCustomer[]|ObjectCollection findByArcuinactivedate(string $ArcuInactiveDate) Return ChildCustomer objects filtered by the ArcuInactiveDate column
 * @method     ChildCustomer[]|ObjectCollection findByArcuchrgfrt(string $ArcuChrgFrt) Return ChildCustomer objects filtered by the ArcuChrgFrt column
 * @method     ChildCustomer[]|ObjectCollection findByArcucorexdays(int $ArcuCoreXDays) Return ChildCustomer objects filtered by the ArcuCoreXDays column
 * @method     ChildCustomer[]|ObjectCollection findByArcucontractnbr(string $ArcuContractNbr) Return ChildCustomer objects filtered by the ArcuContractNbr column
 * @method     ChildCustomer[]|ObjectCollection findByArcucorelf(string $ArcuCoreLF) Return ChildCustomer objects filtered by the ArcuCoreLF column
 * @method     ChildCustomer[]|ObjectCollection findByArcucorebankid(string $ArcuCoreBankId) Return ChildCustomer objects filtered by the ArcuCoreBankId column
 * @method     ChildCustomer[]|ObjectCollection findByArcudunsnbr(string $ArcuDunsNbr) Return ChildCustomer objects filtered by the ArcuDunsNbr column
 * @method     ChildCustomer[]|ObjectCollection findByArcurfmlvalu(int $ArcuRfmlValu) Return ChildCustomer objects filtered by the ArcuRfmlValu column
 * @method     ChildCustomer[]|ObjectCollection findByArcucustpoparam(string $ArcuCustPoParam) Return ChildCustomer objects filtered by the ArcuCustPoParam column
 * @method     ChildCustomer[]|ObjectCollection findByArcuagelevel(int $ArcuAgeLevel) Return ChildCustomer objects filtered by the ArcuAgeLevel column
 * @method     ChildCustomer[]|ObjectCollection findByArtbroute(string $ArtbRoute) Return ChildCustomer objects filtered by the ArtbRoute column
 * @method     ChildCustomer[]|ObjectCollection findByArcuwgtaxcode(string $ArcuWgTaxCode) Return ChildCustomer objects filtered by the ArcuWgTaxCode column
 * @method     ChildCustomer[]|ObjectCollection findByArcuacptsupercede(string $ArcuAcptSupercede) Return ChildCustomer objects filtered by the ArcuAcptSupercede column
 * @method     ChildCustomer[]|ObjectCollection findByArcumstrcustid(string $ArcuMstrCustId) Return ChildCustomer objects filtered by the ArcuMstrCustId column
 * @method     ChildCustomer[]|ObjectCollection findByArcusurchgpct(string $ArcuSurchgPct) Return ChildCustomer objects filtered by the ArcuSurchgPct column
 * @method     ChildCustomer[]|ObjectCollection findByArcuallowsplit(string $ArcuAllowSplit) Return ChildCustomer objects filtered by the ArcuAllowSplit column
 * @method     ChildCustomer[]|ObjectCollection findByArculinemin(string $ArcuLineMin) Return ChildCustomer objects filtered by the ArcuLineMin column
 * @method     ChildCustomer[]|ObjectCollection findByArcuordrmin(string $ArcuOrdrMin) Return ChildCustomer objects filtered by the ArcuOrdrMin column
 * @method     ChildCustomer[]|ObjectCollection findByArcuupsacctnbr(string $ArcuUpsAcctNbr) Return ChildCustomer objects filtered by the ArcuUpsAcctNbr column
 * @method     ChildCustomer[]|ObjectCollection findByArcuprtmatcert(string $ArcuPrtMatCert) Return ChildCustomer objects filtered by the ArcuPrtMatCert column
 * @method     ChildCustomer[]|ObjectCollection findByArcufobinputyn(string $ArcuFobInputYn) Return ChildCustomer objects filtered by the ArcuFobInputYn column
 * @method     ChildCustomer[]|ObjectCollection findByArcufobperlb(string $ArcuFobPerLb) Return ChildCustomer objects filtered by the ArcuFobPerLb column
 * @method     ChildCustomer[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildCustomer objects filtered by the DateUpdtd column
 * @method     ChildCustomer[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildCustomer objects filtered by the TimeUpdtd column
 * @method     ChildCustomer[]|ObjectCollection findByDummy(string $dummy) Return ChildCustomer objects filtered by the dummy column
 * @method     ChildCustomer[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class CustomerQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\CustomerQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\Customer', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildCustomerQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildCustomerQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildCustomerQuery) {
            return $criteria;
        }
        $query = new ChildCustomerQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildCustomer|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(CustomerTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = CustomerTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildCustomer A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT ArcuCustId, ArcuName, ArcuAdr1, ArcuAdr2, ArcuAdr3, ArcuCtry, ArcuCity, ArcuStat, ArcuZipCode, ArcuDeliveryDays, ArcuRemitWhse, ArcuShipBin, ArcuAllowAddOns, ArcuLmEcommCustId, ArcuGsUse2ndBin, ArspSalePer1, ArspSalePer2, ArspSalePer3, ArtbMtaxCode, ArcuTaxExemNbr, IntbWhse, ArcuPricLvl, ArcuShipComp, ArcuTxbl, ArcuPostal, ArtbShipVia, ArcuBord, ArtbTypeCode, ArtbPricCode, ArtbCommCode, ArtmTermCd, ArcuCredLmt, ArcuStmtCode, ArcuCredHold, ArcuFinChrg, ArcuUserCode, ArcuNewFc, ArcuUnpdFc, ArcuCurBal, ArcuBalOdue1, ArcuBalOdue2, ArcuBalOdue3, ArcuSaleMtd, ArcuInvMtd, ArcuSaleYtd, ArcuInvYtd, ArcuDateOpen, ArcuLastSaleDate, ArcuHighBal, ArcuBigSaleMo, ArcuLastPayDate, ArcuAvgPayDays, ArcuUpsZone, ArcuHighBalDate, ArcuSale24mo1, ArcuInv24mo1, ArcuSale24mo2, ArcuInv24mo2, ArcuSale24mo3, ArcuInv24mo3, ArcuSale24mo4, ArcuInv24mo4, ArcuSale24mo5, ArcuInv24mo5, ArcuSale24mo6, ArcuInv24mo6, ArcuSale24mo7, ArcuInv24mo7, ArcuSale24mo8, ArcuInv24mo8, ArcuSale24mo9, ArcuInv24mo9, ArcuSale24mo10, ArcuInv24mo10, ArcuSale24mo11, ArcuInv24mo11, ArcuSale24mo12, ArcuInv24mo12, ArcuSale24mo13, ArcuInv24mo13, ArcuSale24mo14, ArcuInv24mo14, ArcuSale24mo15, ArcuInv24mo15, ArcuSale24mo16, ArcuInv24mo16, ArcuSale24mo17, ArcuInv24mo17, ArcuSale24mo18, ArcuInv24mo18, ArcuSale24mo19, ArcuInv24mo19, ArcuSale24mo20, ArcuInv24mo20, ArcuSale24mo21, ArcuInv24mo21, ArcuSale24mo22, ArcuInv24mo22, ArcuSale24mo23, ArcuInv24mo23, ArcuSale24mo24, ArcuInv24mo24, ArcuLastPayAmt, ArcuOrdrTot, ArcuUseFrtIn, ArcuMyVendId, ArcuAddlPricDisc, ArcuActiveInactive, ArcuInactiveDate, ArcuChrgFrt, ArcuCoreXDays, ArcuContractNbr, ArcuCoreLF, ArcuCoreBankId, ArcuDunsNbr, ArcuRfmlValu, ArcuCustPoParam, ArcuAgeLevel, ArtbRoute, ArcuWgTaxCode, ArcuAcptSupercede, ArcuMstrCustId, ArcuSurchgPct, ArcuAllowSplit, ArcuLineMin, ArcuOrdrMin, ArcuUpsAcctNbr, ArcuPrtMatCert, ArcuFobInputYn, ArcuFobPerLb, DateUpdtd, TimeUpdtd, dummy FROM ar_cust_mast WHERE ArcuCustId = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildCustomer $obj */
            $obj = new ChildCustomer();
            $obj->hydrate($row);
            CustomerTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildCustomer|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
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
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCUSTID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCUSTID, $keys, Criteria::IN);
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
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcucustid($arcucustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCUSTID, $arcucustid, $comparison);
    }

    /**
     * Filter the query on the ArcuName column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuname('fooValue');   // WHERE ArcuName = 'fooValue'
     * $query->filterByArcuname('%fooValue%', Criteria::LIKE); // WHERE ArcuName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuname($arcuname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUNAME, $arcuname, $comparison);
    }

    /**
     * Filter the query on the ArcuAdr1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuadr1('fooValue');   // WHERE ArcuAdr1 = 'fooValue'
     * $query->filterByArcuadr1('%fooValue%', Criteria::LIKE); // WHERE ArcuAdr1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuadr1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuadr1($arcuadr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuadr1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUADR1, $arcuadr1, $comparison);
    }

    /**
     * Filter the query on the ArcuAdr2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuadr2('fooValue');   // WHERE ArcuAdr2 = 'fooValue'
     * $query->filterByArcuadr2('%fooValue%', Criteria::LIKE); // WHERE ArcuAdr2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuadr2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuadr2($arcuadr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuadr2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUADR2, $arcuadr2, $comparison);
    }

    /**
     * Filter the query on the ArcuAdr3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuadr3('fooValue');   // WHERE ArcuAdr3 = 'fooValue'
     * $query->filterByArcuadr3('%fooValue%', Criteria::LIKE); // WHERE ArcuAdr3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuadr3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuadr3($arcuadr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuadr3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUADR3, $arcuadr3, $comparison);
    }

    /**
     * Filter the query on the ArcuCtry column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuctry('fooValue');   // WHERE ArcuCtry = 'fooValue'
     * $query->filterByArcuctry('%fooValue%', Criteria::LIKE); // WHERE ArcuCtry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuctry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuctry($arcuctry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuctry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCTRY, $arcuctry, $comparison);
    }

    /**
     * Filter the query on the ArcuCity column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucity('fooValue');   // WHERE ArcuCity = 'fooValue'
     * $query->filterByArcucity('%fooValue%', Criteria::LIKE); // WHERE ArcuCity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucity The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcucity($arcucity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucity)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCITY, $arcucity, $comparison);
    }

    /**
     * Filter the query on the ArcuStat column
     *
     * Example usage:
     * <code>
     * $query->filterByArcustat('fooValue');   // WHERE ArcuStat = 'fooValue'
     * $query->filterByArcustat('%fooValue%', Criteria::LIKE); // WHERE ArcuStat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcustat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcustat($arcustat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcustat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSTAT, $arcustat, $comparison);
    }

    /**
     * Filter the query on the ArcuZipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuzipcode('fooValue');   // WHERE ArcuZipCode = 'fooValue'
     * $query->filterByArcuzipcode('%fooValue%', Criteria::LIKE); // WHERE ArcuZipCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuzipcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuzipcode($arcuzipcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuzipcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUZIPCODE, $arcuzipcode, $comparison);
    }

    /**
     * Filter the query on the ArcuDeliveryDays column
     *
     * Example usage:
     * <code>
     * $query->filterByArcudeliverydays(1234); // WHERE ArcuDeliveryDays = 1234
     * $query->filterByArcudeliverydays(array(12, 34)); // WHERE ArcuDeliveryDays IN (12, 34)
     * $query->filterByArcudeliverydays(array('min' => 12)); // WHERE ArcuDeliveryDays > 12
     * </code>
     *
     * @param     mixed $arcudeliverydays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcudeliverydays($arcudeliverydays = null, $comparison = null)
    {
        if (is_array($arcudeliverydays)) {
            $useMinMax = false;
            if (isset($arcudeliverydays['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUDELIVERYDAYS, $arcudeliverydays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcudeliverydays['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUDELIVERYDAYS, $arcudeliverydays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUDELIVERYDAYS, $arcudeliverydays, $comparison);
    }

    /**
     * Filter the query on the ArcuRemitWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuremitwhse('fooValue');   // WHERE ArcuRemitWhse = 'fooValue'
     * $query->filterByArcuremitwhse('%fooValue%', Criteria::LIKE); // WHERE ArcuRemitWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuremitwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuremitwhse($arcuremitwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuremitwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUREMITWHSE, $arcuremitwhse, $comparison);
    }

    /**
     * Filter the query on the ArcuShipBin column
     *
     * Example usage:
     * <code>
     * $query->filterByArcushipbin('fooValue');   // WHERE ArcuShipBin = 'fooValue'
     * $query->filterByArcushipbin('%fooValue%', Criteria::LIKE); // WHERE ArcuShipBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcushipbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcushipbin($arcushipbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcushipbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSHIPBIN, $arcushipbin, $comparison);
    }

    /**
     * Filter the query on the ArcuAllowAddOns column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuallowaddons('fooValue');   // WHERE ArcuAllowAddOns = 'fooValue'
     * $query->filterByArcuallowaddons('%fooValue%', Criteria::LIKE); // WHERE ArcuAllowAddOns LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuallowaddons The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuallowaddons($arcuallowaddons = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuallowaddons)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUALLOWADDONS, $arcuallowaddons, $comparison);
    }

    /**
     * Filter the query on the ArcuLmEcommCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArculmecommcustid('fooValue');   // WHERE ArcuLmEcommCustId = 'fooValue'
     * $query->filterByArculmecommcustid('%fooValue%', Criteria::LIKE); // WHERE ArcuLmEcommCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arculmecommcustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArculmecommcustid($arculmecommcustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arculmecommcustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCULMECOMMCUSTID, $arculmecommcustid, $comparison);
    }

    /**
     * Filter the query on the ArcuGsUse2ndBin column
     *
     * Example usage:
     * <code>
     * $query->filterByArcugsuse2ndbin('fooValue');   // WHERE ArcuGsUse2ndBin = 'fooValue'
     * $query->filterByArcugsuse2ndbin('%fooValue%', Criteria::LIKE); // WHERE ArcuGsUse2ndBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcugsuse2ndbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcugsuse2ndbin($arcugsuse2ndbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcugsuse2ndbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUGSUSE2NDBIN, $arcugsuse2ndbin, $comparison);
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
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArspsaleper1($arspsaleper1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARSPSALEPER1, $arspsaleper1, $comparison);
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
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArspsaleper2($arspsaleper2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARSPSALEPER2, $arspsaleper2, $comparison);
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
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArspsaleper3($arspsaleper3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arspsaleper3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARSPSALEPER3, $arspsaleper3, $comparison);
    }

    /**
     * Filter the query on the ArtbMtaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbmtaxcode('fooValue');   // WHERE ArtbMtaxCode = 'fooValue'
     * $query->filterByArtbmtaxcode('%fooValue%', Criteria::LIKE); // WHERE ArtbMtaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbmtaxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbmtaxcode($artbmtaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbmtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARTBMTAXCODE, $artbmtaxcode, $comparison);
    }

    /**
     * Filter the query on the ArcuTaxExemNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArcutaxexemnbr('fooValue');   // WHERE ArcuTaxExemNbr = 'fooValue'
     * $query->filterByArcutaxexemnbr('%fooValue%', Criteria::LIKE); // WHERE ArcuTaxExemNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcutaxexemnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcutaxexemnbr($arcutaxexemnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcutaxexemnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUTAXEXEMNBR, $arcutaxexemnbr, $comparison);
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
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByIntbwhse($intbwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intbwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_INTBWHSE, $intbwhse, $comparison);
    }

    /**
     * Filter the query on the ArcuPricLvl column
     *
     * Example usage:
     * <code>
     * $query->filterByArcupriclvl('fooValue');   // WHERE ArcuPricLvl = 'fooValue'
     * $query->filterByArcupriclvl('%fooValue%', Criteria::LIKE); // WHERE ArcuPricLvl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcupriclvl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcupriclvl($arcupriclvl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcupriclvl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUPRICLVL, $arcupriclvl, $comparison);
    }

    /**
     * Filter the query on the ArcuShipComp column
     *
     * Example usage:
     * <code>
     * $query->filterByArcushipcomp('fooValue');   // WHERE ArcuShipComp = 'fooValue'
     * $query->filterByArcushipcomp('%fooValue%', Criteria::LIKE); // WHERE ArcuShipComp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcushipcomp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcushipcomp($arcushipcomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcushipcomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSHIPCOMP, $arcushipcomp, $comparison);
    }

    /**
     * Filter the query on the ArcuTxbl column
     *
     * Example usage:
     * <code>
     * $query->filterByArcutxbl('fooValue');   // WHERE ArcuTxbl = 'fooValue'
     * $query->filterByArcutxbl('%fooValue%', Criteria::LIKE); // WHERE ArcuTxbl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcutxbl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcutxbl($arcutxbl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcutxbl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUTXBL, $arcutxbl, $comparison);
    }

    /**
     * Filter the query on the ArcuPostal column
     *
     * Example usage:
     * <code>
     * $query->filterByArcupostal('fooValue');   // WHERE ArcuPostal = 'fooValue'
     * $query->filterByArcupostal('%fooValue%', Criteria::LIKE); // WHERE ArcuPostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcupostal The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcupostal($arcupostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcupostal)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUPOSTAL, $arcupostal, $comparison);
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
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbshipvia($artbshipvia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbshipvia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARTBSHIPVIA, $artbshipvia, $comparison);
    }

    /**
     * Filter the query on the ArcuBord column
     *
     * Example usage:
     * <code>
     * $query->filterByArcubord('fooValue');   // WHERE ArcuBord = 'fooValue'
     * $query->filterByArcubord('%fooValue%', Criteria::LIKE); // WHERE ArcuBord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcubord The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcubord($arcubord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcubord)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUBORD, $arcubord, $comparison);
    }

    /**
     * Filter the query on the ArtbTypeCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbtypecode('fooValue');   // WHERE ArtbTypeCode = 'fooValue'
     * $query->filterByArtbtypecode('%fooValue%', Criteria::LIKE); // WHERE ArtbTypeCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbtypecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbtypecode($artbtypecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbtypecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARTBTYPECODE, $artbtypecode, $comparison);
    }

    /**
     * Filter the query on the ArtbPricCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbpriccode('fooValue');   // WHERE ArtbPricCode = 'fooValue'
     * $query->filterByArtbpriccode('%fooValue%', Criteria::LIKE); // WHERE ArtbPricCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbpriccode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbpriccode($artbpriccode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbpriccode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARTBPRICCODE, $artbpriccode, $comparison);
    }

    /**
     * Filter the query on the ArtbCommCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbcommcode('fooValue');   // WHERE ArtbCommCode = 'fooValue'
     * $query->filterByArtbcommcode('%fooValue%', Criteria::LIKE); // WHERE ArtbCommCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbcommcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbcommcode($artbcommcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbcommcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARTBCOMMCODE, $artbcommcode, $comparison);
    }

    /**
     * Filter the query on the ArtmTermCd column
     *
     * Example usage:
     * <code>
     * $query->filterByArtmtermcd('fooValue');   // WHERE ArtmTermCd = 'fooValue'
     * $query->filterByArtmtermcd('%fooValue%', Criteria::LIKE); // WHERE ArtmTermCd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artmtermcd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArtmtermcd($artmtermcd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artmtermcd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARTMTERMCD, $artmtermcd, $comparison);
    }

    /**
     * Filter the query on the ArcuCredLmt column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucredlmt(1234); // WHERE ArcuCredLmt = 1234
     * $query->filterByArcucredlmt(array(12, 34)); // WHERE ArcuCredLmt IN (12, 34)
     * $query->filterByArcucredlmt(array('min' => 12)); // WHERE ArcuCredLmt > 12
     * </code>
     *
     * @param     mixed $arcucredlmt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcucredlmt($arcucredlmt = null, $comparison = null)
    {
        if (is_array($arcucredlmt)) {
            $useMinMax = false;
            if (isset($arcucredlmt['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUCREDLMT, $arcucredlmt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcucredlmt['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUCREDLMT, $arcucredlmt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCREDLMT, $arcucredlmt, $comparison);
    }

    /**
     * Filter the query on the ArcuStmtCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArcustmtcode('fooValue');   // WHERE ArcuStmtCode = 'fooValue'
     * $query->filterByArcustmtcode('%fooValue%', Criteria::LIKE); // WHERE ArcuStmtCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcustmtcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcustmtcode($arcustmtcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcustmtcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSTMTCODE, $arcustmtcode, $comparison);
    }

    /**
     * Filter the query on the ArcuCredHold column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucredhold('fooValue');   // WHERE ArcuCredHold = 'fooValue'
     * $query->filterByArcucredhold('%fooValue%', Criteria::LIKE); // WHERE ArcuCredHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucredhold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcucredhold($arcucredhold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucredhold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCREDHOLD, $arcucredhold, $comparison);
    }

    /**
     * Filter the query on the ArcuFinChrg column
     *
     * Example usage:
     * <code>
     * $query->filterByArcufinchrg('fooValue');   // WHERE ArcuFinChrg = 'fooValue'
     * $query->filterByArcufinchrg('%fooValue%', Criteria::LIKE); // WHERE ArcuFinChrg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcufinchrg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcufinchrg($arcufinchrg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcufinchrg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUFINCHRG, $arcufinchrg, $comparison);
    }

    /**
     * Filter the query on the ArcuUserCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuusercode('fooValue');   // WHERE ArcuUserCode = 'fooValue'
     * $query->filterByArcuusercode('%fooValue%', Criteria::LIKE); // WHERE ArcuUserCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuusercode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuusercode($arcuusercode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuusercode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUUSERCODE, $arcuusercode, $comparison);
    }

    /**
     * Filter the query on the ArcuNewFc column
     *
     * Example usage:
     * <code>
     * $query->filterByArcunewfc(1234); // WHERE ArcuNewFc = 1234
     * $query->filterByArcunewfc(array(12, 34)); // WHERE ArcuNewFc IN (12, 34)
     * $query->filterByArcunewfc(array('min' => 12)); // WHERE ArcuNewFc > 12
     * </code>
     *
     * @param     mixed $arcunewfc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcunewfc($arcunewfc = null, $comparison = null)
    {
        if (is_array($arcunewfc)) {
            $useMinMax = false;
            if (isset($arcunewfc['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUNEWFC, $arcunewfc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcunewfc['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUNEWFC, $arcunewfc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUNEWFC, $arcunewfc, $comparison);
    }

    /**
     * Filter the query on the ArcuUnpdFc column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuunpdfc(1234); // WHERE ArcuUnpdFc = 1234
     * $query->filterByArcuunpdfc(array(12, 34)); // WHERE ArcuUnpdFc IN (12, 34)
     * $query->filterByArcuunpdfc(array('min' => 12)); // WHERE ArcuUnpdFc > 12
     * </code>
     *
     * @param     mixed $arcuunpdfc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuunpdfc($arcuunpdfc = null, $comparison = null)
    {
        if (is_array($arcuunpdfc)) {
            $useMinMax = false;
            if (isset($arcuunpdfc['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUUNPDFC, $arcuunpdfc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuunpdfc['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUUNPDFC, $arcuunpdfc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUUNPDFC, $arcuunpdfc, $comparison);
    }

    /**
     * Filter the query on the ArcuCurBal column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucurbal(1234); // WHERE ArcuCurBal = 1234
     * $query->filterByArcucurbal(array(12, 34)); // WHERE ArcuCurBal IN (12, 34)
     * $query->filterByArcucurbal(array('min' => 12)); // WHERE ArcuCurBal > 12
     * </code>
     *
     * @param     mixed $arcucurbal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcucurbal($arcucurbal = null, $comparison = null)
    {
        if (is_array($arcucurbal)) {
            $useMinMax = false;
            if (isset($arcucurbal['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUCURBAL, $arcucurbal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcucurbal['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUCURBAL, $arcucurbal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCURBAL, $arcucurbal, $comparison);
    }

    /**
     * Filter the query on the ArcuBalOdue1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcubalodue1(1234); // WHERE ArcuBalOdue1 = 1234
     * $query->filterByArcubalodue1(array(12, 34)); // WHERE ArcuBalOdue1 IN (12, 34)
     * $query->filterByArcubalodue1(array('min' => 12)); // WHERE ArcuBalOdue1 > 12
     * </code>
     *
     * @param     mixed $arcubalodue1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcubalodue1($arcubalodue1 = null, $comparison = null)
    {
        if (is_array($arcubalodue1)) {
            $useMinMax = false;
            if (isset($arcubalodue1['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUBALODUE1, $arcubalodue1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcubalodue1['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUBALODUE1, $arcubalodue1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUBALODUE1, $arcubalodue1, $comparison);
    }

    /**
     * Filter the query on the ArcuBalOdue2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcubalodue2(1234); // WHERE ArcuBalOdue2 = 1234
     * $query->filterByArcubalodue2(array(12, 34)); // WHERE ArcuBalOdue2 IN (12, 34)
     * $query->filterByArcubalodue2(array('min' => 12)); // WHERE ArcuBalOdue2 > 12
     * </code>
     *
     * @param     mixed $arcubalodue2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcubalodue2($arcubalodue2 = null, $comparison = null)
    {
        if (is_array($arcubalodue2)) {
            $useMinMax = false;
            if (isset($arcubalodue2['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUBALODUE2, $arcubalodue2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcubalodue2['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUBALODUE2, $arcubalodue2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUBALODUE2, $arcubalodue2, $comparison);
    }

    /**
     * Filter the query on the ArcuBalOdue3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcubalodue3(1234); // WHERE ArcuBalOdue3 = 1234
     * $query->filterByArcubalodue3(array(12, 34)); // WHERE ArcuBalOdue3 IN (12, 34)
     * $query->filterByArcubalodue3(array('min' => 12)); // WHERE ArcuBalOdue3 > 12
     * </code>
     *
     * @param     mixed $arcubalodue3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcubalodue3($arcubalodue3 = null, $comparison = null)
    {
        if (is_array($arcubalodue3)) {
            $useMinMax = false;
            if (isset($arcubalodue3['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUBALODUE3, $arcubalodue3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcubalodue3['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUBALODUE3, $arcubalodue3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUBALODUE3, $arcubalodue3, $comparison);
    }

    /**
     * Filter the query on the ArcuSaleMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusalemtd(1234); // WHERE ArcuSaleMtd = 1234
     * $query->filterByArcusalemtd(array(12, 34)); // WHERE ArcuSaleMtd IN (12, 34)
     * $query->filterByArcusalemtd(array('min' => 12)); // WHERE ArcuSaleMtd > 12
     * </code>
     *
     * @param     mixed $arcusalemtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusalemtd($arcusalemtd = null, $comparison = null)
    {
        if (is_array($arcusalemtd)) {
            $useMinMax = false;
            if (isset($arcusalemtd['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALEMTD, $arcusalemtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusalemtd['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALEMTD, $arcusalemtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALEMTD, $arcusalemtd, $comparison);
    }

    /**
     * Filter the query on the ArcuInvMtd column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinvmtd(1234); // WHERE ArcuInvMtd = 1234
     * $query->filterByArcuinvmtd(array(12, 34)); // WHERE ArcuInvMtd IN (12, 34)
     * $query->filterByArcuinvmtd(array('min' => 12)); // WHERE ArcuInvMtd > 12
     * </code>
     *
     * @param     mixed $arcuinvmtd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinvmtd($arcuinvmtd = null, $comparison = null)
    {
        if (is_array($arcuinvmtd)) {
            $useMinMax = false;
            if (isset($arcuinvmtd['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINVMTD, $arcuinvmtd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinvmtd['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINVMTD, $arcuinvmtd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINVMTD, $arcuinvmtd, $comparison);
    }

    /**
     * Filter the query on the ArcuSaleYtd column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusaleytd(1234); // WHERE ArcuSaleYtd = 1234
     * $query->filterByArcusaleytd(array(12, 34)); // WHERE ArcuSaleYtd IN (12, 34)
     * $query->filterByArcusaleytd(array('min' => 12)); // WHERE ArcuSaleYtd > 12
     * </code>
     *
     * @param     mixed $arcusaleytd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusaleytd($arcusaleytd = null, $comparison = null)
    {
        if (is_array($arcusaleytd)) {
            $useMinMax = false;
            if (isset($arcusaleytd['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALEYTD, $arcusaleytd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusaleytd['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALEYTD, $arcusaleytd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALEYTD, $arcusaleytd, $comparison);
    }

    /**
     * Filter the query on the ArcuInvYtd column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinvytd(1234); // WHERE ArcuInvYtd = 1234
     * $query->filterByArcuinvytd(array(12, 34)); // WHERE ArcuInvYtd IN (12, 34)
     * $query->filterByArcuinvytd(array('min' => 12)); // WHERE ArcuInvYtd > 12
     * </code>
     *
     * @param     mixed $arcuinvytd The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinvytd($arcuinvytd = null, $comparison = null)
    {
        if (is_array($arcuinvytd)) {
            $useMinMax = false;
            if (isset($arcuinvytd['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINVYTD, $arcuinvytd['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinvytd['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINVYTD, $arcuinvytd['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINVYTD, $arcuinvytd, $comparison);
    }

    /**
     * Filter the query on the ArcuDateOpen column
     *
     * Example usage:
     * <code>
     * $query->filterByArcudateopen('fooValue');   // WHERE ArcuDateOpen = 'fooValue'
     * $query->filterByArcudateopen('%fooValue%', Criteria::LIKE); // WHERE ArcuDateOpen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcudateopen The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcudateopen($arcudateopen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcudateopen)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUDATEOPEN, $arcudateopen, $comparison);
    }

    /**
     * Filter the query on the ArcuLastSaleDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArculastsaledate('fooValue');   // WHERE ArcuLastSaleDate = 'fooValue'
     * $query->filterByArculastsaledate('%fooValue%', Criteria::LIKE); // WHERE ArcuLastSaleDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arculastsaledate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArculastsaledate($arculastsaledate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arculastsaledate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCULASTSALEDATE, $arculastsaledate, $comparison);
    }

    /**
     * Filter the query on the ArcuHighBal column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuhighbal(1234); // WHERE ArcuHighBal = 1234
     * $query->filterByArcuhighbal(array(12, 34)); // WHERE ArcuHighBal IN (12, 34)
     * $query->filterByArcuhighbal(array('min' => 12)); // WHERE ArcuHighBal > 12
     * </code>
     *
     * @param     mixed $arcuhighbal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuhighbal($arcuhighbal = null, $comparison = null)
    {
        if (is_array($arcuhighbal)) {
            $useMinMax = false;
            if (isset($arcuhighbal['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUHIGHBAL, $arcuhighbal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuhighbal['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUHIGHBAL, $arcuhighbal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUHIGHBAL, $arcuhighbal, $comparison);
    }

    /**
     * Filter the query on the ArcuBigSaleMo column
     *
     * Example usage:
     * <code>
     * $query->filterByArcubigsalemo(1234); // WHERE ArcuBigSaleMo = 1234
     * $query->filterByArcubigsalemo(array(12, 34)); // WHERE ArcuBigSaleMo IN (12, 34)
     * $query->filterByArcubigsalemo(array('min' => 12)); // WHERE ArcuBigSaleMo > 12
     * </code>
     *
     * @param     mixed $arcubigsalemo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcubigsalemo($arcubigsalemo = null, $comparison = null)
    {
        if (is_array($arcubigsalemo)) {
            $useMinMax = false;
            if (isset($arcubigsalemo['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUBIGSALEMO, $arcubigsalemo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcubigsalemo['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUBIGSALEMO, $arcubigsalemo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUBIGSALEMO, $arcubigsalemo, $comparison);
    }

    /**
     * Filter the query on the ArcuLastPayDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArculastpaydate('fooValue');   // WHERE ArcuLastPayDate = 'fooValue'
     * $query->filterByArculastpaydate('%fooValue%', Criteria::LIKE); // WHERE ArcuLastPayDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arculastpaydate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArculastpaydate($arculastpaydate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arculastpaydate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCULASTPAYDATE, $arculastpaydate, $comparison);
    }

    /**
     * Filter the query on the ArcuAvgPayDays column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuavgpaydays(1234); // WHERE ArcuAvgPayDays = 1234
     * $query->filterByArcuavgpaydays(array(12, 34)); // WHERE ArcuAvgPayDays IN (12, 34)
     * $query->filterByArcuavgpaydays(array('min' => 12)); // WHERE ArcuAvgPayDays > 12
     * </code>
     *
     * @param     mixed $arcuavgpaydays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuavgpaydays($arcuavgpaydays = null, $comparison = null)
    {
        if (is_array($arcuavgpaydays)) {
            $useMinMax = false;
            if (isset($arcuavgpaydays['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUAVGPAYDAYS, $arcuavgpaydays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuavgpaydays['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUAVGPAYDAYS, $arcuavgpaydays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUAVGPAYDAYS, $arcuavgpaydays, $comparison);
    }

    /**
     * Filter the query on the ArcuUpsZone column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuupszone('fooValue');   // WHERE ArcuUpsZone = 'fooValue'
     * $query->filterByArcuupszone('%fooValue%', Criteria::LIKE); // WHERE ArcuUpsZone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuupszone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuupszone($arcuupszone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuupszone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUUPSZONE, $arcuupszone, $comparison);
    }

    /**
     * Filter the query on the ArcuHighBalDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuhighbaldate('fooValue');   // WHERE ArcuHighBalDate = 'fooValue'
     * $query->filterByArcuhighbaldate('%fooValue%', Criteria::LIKE); // WHERE ArcuHighBalDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuhighbaldate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuhighbaldate($arcuhighbaldate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuhighbaldate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUHIGHBALDATE, $arcuhighbaldate, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo1(1234); // WHERE ArcuSale24mo1 = 1234
     * $query->filterByArcusale24mo1(array(12, 34)); // WHERE ArcuSale24mo1 IN (12, 34)
     * $query->filterByArcusale24mo1(array('min' => 12)); // WHERE ArcuSale24mo1 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo1($arcusale24mo1 = null, $comparison = null)
    {
        if (is_array($arcusale24mo1)) {
            $useMinMax = false;
            if (isset($arcusale24mo1['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO1, $arcusale24mo1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo1['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO1, $arcusale24mo1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO1, $arcusale24mo1, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo1 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo1(1234); // WHERE ArcuInv24mo1 = 1234
     * $query->filterByArcuinv24mo1(array(12, 34)); // WHERE ArcuInv24mo1 IN (12, 34)
     * $query->filterByArcuinv24mo1(array('min' => 12)); // WHERE ArcuInv24mo1 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo1($arcuinv24mo1 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo1)) {
            $useMinMax = false;
            if (isset($arcuinv24mo1['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO1, $arcuinv24mo1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo1['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO1, $arcuinv24mo1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO1, $arcuinv24mo1, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo2(1234); // WHERE ArcuSale24mo2 = 1234
     * $query->filterByArcusale24mo2(array(12, 34)); // WHERE ArcuSale24mo2 IN (12, 34)
     * $query->filterByArcusale24mo2(array('min' => 12)); // WHERE ArcuSale24mo2 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo2($arcusale24mo2 = null, $comparison = null)
    {
        if (is_array($arcusale24mo2)) {
            $useMinMax = false;
            if (isset($arcusale24mo2['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO2, $arcusale24mo2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo2['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO2, $arcusale24mo2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO2, $arcusale24mo2, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo2 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo2(1234); // WHERE ArcuInv24mo2 = 1234
     * $query->filterByArcuinv24mo2(array(12, 34)); // WHERE ArcuInv24mo2 IN (12, 34)
     * $query->filterByArcuinv24mo2(array('min' => 12)); // WHERE ArcuInv24mo2 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo2($arcuinv24mo2 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo2)) {
            $useMinMax = false;
            if (isset($arcuinv24mo2['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO2, $arcuinv24mo2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo2['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO2, $arcuinv24mo2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO2, $arcuinv24mo2, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo3(1234); // WHERE ArcuSale24mo3 = 1234
     * $query->filterByArcusale24mo3(array(12, 34)); // WHERE ArcuSale24mo3 IN (12, 34)
     * $query->filterByArcusale24mo3(array('min' => 12)); // WHERE ArcuSale24mo3 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo3($arcusale24mo3 = null, $comparison = null)
    {
        if (is_array($arcusale24mo3)) {
            $useMinMax = false;
            if (isset($arcusale24mo3['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO3, $arcusale24mo3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo3['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO3, $arcusale24mo3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO3, $arcusale24mo3, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo3 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo3(1234); // WHERE ArcuInv24mo3 = 1234
     * $query->filterByArcuinv24mo3(array(12, 34)); // WHERE ArcuInv24mo3 IN (12, 34)
     * $query->filterByArcuinv24mo3(array('min' => 12)); // WHERE ArcuInv24mo3 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo3($arcuinv24mo3 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo3)) {
            $useMinMax = false;
            if (isset($arcuinv24mo3['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO3, $arcuinv24mo3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo3['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO3, $arcuinv24mo3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO3, $arcuinv24mo3, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo4(1234); // WHERE ArcuSale24mo4 = 1234
     * $query->filterByArcusale24mo4(array(12, 34)); // WHERE ArcuSale24mo4 IN (12, 34)
     * $query->filterByArcusale24mo4(array('min' => 12)); // WHERE ArcuSale24mo4 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo4($arcusale24mo4 = null, $comparison = null)
    {
        if (is_array($arcusale24mo4)) {
            $useMinMax = false;
            if (isset($arcusale24mo4['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO4, $arcusale24mo4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo4['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO4, $arcusale24mo4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO4, $arcusale24mo4, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo4 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo4(1234); // WHERE ArcuInv24mo4 = 1234
     * $query->filterByArcuinv24mo4(array(12, 34)); // WHERE ArcuInv24mo4 IN (12, 34)
     * $query->filterByArcuinv24mo4(array('min' => 12)); // WHERE ArcuInv24mo4 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo4($arcuinv24mo4 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo4)) {
            $useMinMax = false;
            if (isset($arcuinv24mo4['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO4, $arcuinv24mo4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo4['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO4, $arcuinv24mo4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO4, $arcuinv24mo4, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo5(1234); // WHERE ArcuSale24mo5 = 1234
     * $query->filterByArcusale24mo5(array(12, 34)); // WHERE ArcuSale24mo5 IN (12, 34)
     * $query->filterByArcusale24mo5(array('min' => 12)); // WHERE ArcuSale24mo5 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo5($arcusale24mo5 = null, $comparison = null)
    {
        if (is_array($arcusale24mo5)) {
            $useMinMax = false;
            if (isset($arcusale24mo5['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO5, $arcusale24mo5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo5['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO5, $arcusale24mo5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO5, $arcusale24mo5, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo5 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo5(1234); // WHERE ArcuInv24mo5 = 1234
     * $query->filterByArcuinv24mo5(array(12, 34)); // WHERE ArcuInv24mo5 IN (12, 34)
     * $query->filterByArcuinv24mo5(array('min' => 12)); // WHERE ArcuInv24mo5 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo5($arcuinv24mo5 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo5)) {
            $useMinMax = false;
            if (isset($arcuinv24mo5['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO5, $arcuinv24mo5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo5['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO5, $arcuinv24mo5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO5, $arcuinv24mo5, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo6(1234); // WHERE ArcuSale24mo6 = 1234
     * $query->filterByArcusale24mo6(array(12, 34)); // WHERE ArcuSale24mo6 IN (12, 34)
     * $query->filterByArcusale24mo6(array('min' => 12)); // WHERE ArcuSale24mo6 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo6($arcusale24mo6 = null, $comparison = null)
    {
        if (is_array($arcusale24mo6)) {
            $useMinMax = false;
            if (isset($arcusale24mo6['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO6, $arcusale24mo6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo6['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO6, $arcusale24mo6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO6, $arcusale24mo6, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo6 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo6(1234); // WHERE ArcuInv24mo6 = 1234
     * $query->filterByArcuinv24mo6(array(12, 34)); // WHERE ArcuInv24mo6 IN (12, 34)
     * $query->filterByArcuinv24mo6(array('min' => 12)); // WHERE ArcuInv24mo6 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo6 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo6($arcuinv24mo6 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo6)) {
            $useMinMax = false;
            if (isset($arcuinv24mo6['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO6, $arcuinv24mo6['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo6['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO6, $arcuinv24mo6['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO6, $arcuinv24mo6, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo7 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo7(1234); // WHERE ArcuSale24mo7 = 1234
     * $query->filterByArcusale24mo7(array(12, 34)); // WHERE ArcuSale24mo7 IN (12, 34)
     * $query->filterByArcusale24mo7(array('min' => 12)); // WHERE ArcuSale24mo7 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo7($arcusale24mo7 = null, $comparison = null)
    {
        if (is_array($arcusale24mo7)) {
            $useMinMax = false;
            if (isset($arcusale24mo7['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO7, $arcusale24mo7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo7['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO7, $arcusale24mo7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO7, $arcusale24mo7, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo7 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo7(1234); // WHERE ArcuInv24mo7 = 1234
     * $query->filterByArcuinv24mo7(array(12, 34)); // WHERE ArcuInv24mo7 IN (12, 34)
     * $query->filterByArcuinv24mo7(array('min' => 12)); // WHERE ArcuInv24mo7 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo7 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo7($arcuinv24mo7 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo7)) {
            $useMinMax = false;
            if (isset($arcuinv24mo7['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO7, $arcuinv24mo7['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo7['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO7, $arcuinv24mo7['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO7, $arcuinv24mo7, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo8 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo8(1234); // WHERE ArcuSale24mo8 = 1234
     * $query->filterByArcusale24mo8(array(12, 34)); // WHERE ArcuSale24mo8 IN (12, 34)
     * $query->filterByArcusale24mo8(array('min' => 12)); // WHERE ArcuSale24mo8 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo8($arcusale24mo8 = null, $comparison = null)
    {
        if (is_array($arcusale24mo8)) {
            $useMinMax = false;
            if (isset($arcusale24mo8['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO8, $arcusale24mo8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo8['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO8, $arcusale24mo8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO8, $arcusale24mo8, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo8 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo8(1234); // WHERE ArcuInv24mo8 = 1234
     * $query->filterByArcuinv24mo8(array(12, 34)); // WHERE ArcuInv24mo8 IN (12, 34)
     * $query->filterByArcuinv24mo8(array('min' => 12)); // WHERE ArcuInv24mo8 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo8 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo8($arcuinv24mo8 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo8)) {
            $useMinMax = false;
            if (isset($arcuinv24mo8['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO8, $arcuinv24mo8['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo8['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO8, $arcuinv24mo8['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO8, $arcuinv24mo8, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo9 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo9(1234); // WHERE ArcuSale24mo9 = 1234
     * $query->filterByArcusale24mo9(array(12, 34)); // WHERE ArcuSale24mo9 IN (12, 34)
     * $query->filterByArcusale24mo9(array('min' => 12)); // WHERE ArcuSale24mo9 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo9($arcusale24mo9 = null, $comparison = null)
    {
        if (is_array($arcusale24mo9)) {
            $useMinMax = false;
            if (isset($arcusale24mo9['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO9, $arcusale24mo9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo9['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO9, $arcusale24mo9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO9, $arcusale24mo9, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo9 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo9(1234); // WHERE ArcuInv24mo9 = 1234
     * $query->filterByArcuinv24mo9(array(12, 34)); // WHERE ArcuInv24mo9 IN (12, 34)
     * $query->filterByArcuinv24mo9(array('min' => 12)); // WHERE ArcuInv24mo9 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo9 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo9($arcuinv24mo9 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo9)) {
            $useMinMax = false;
            if (isset($arcuinv24mo9['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO9, $arcuinv24mo9['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo9['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO9, $arcuinv24mo9['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO9, $arcuinv24mo9, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo10(1234); // WHERE ArcuSale24mo10 = 1234
     * $query->filterByArcusale24mo10(array(12, 34)); // WHERE ArcuSale24mo10 IN (12, 34)
     * $query->filterByArcusale24mo10(array('min' => 12)); // WHERE ArcuSale24mo10 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo10($arcusale24mo10 = null, $comparison = null)
    {
        if (is_array($arcusale24mo10)) {
            $useMinMax = false;
            if (isset($arcusale24mo10['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO10, $arcusale24mo10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo10['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO10, $arcusale24mo10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO10, $arcusale24mo10, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo10 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo10(1234); // WHERE ArcuInv24mo10 = 1234
     * $query->filterByArcuinv24mo10(array(12, 34)); // WHERE ArcuInv24mo10 IN (12, 34)
     * $query->filterByArcuinv24mo10(array('min' => 12)); // WHERE ArcuInv24mo10 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo10 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo10($arcuinv24mo10 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo10)) {
            $useMinMax = false;
            if (isset($arcuinv24mo10['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO10, $arcuinv24mo10['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo10['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO10, $arcuinv24mo10['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO10, $arcuinv24mo10, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo11 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo11(1234); // WHERE ArcuSale24mo11 = 1234
     * $query->filterByArcusale24mo11(array(12, 34)); // WHERE ArcuSale24mo11 IN (12, 34)
     * $query->filterByArcusale24mo11(array('min' => 12)); // WHERE ArcuSale24mo11 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo11($arcusale24mo11 = null, $comparison = null)
    {
        if (is_array($arcusale24mo11)) {
            $useMinMax = false;
            if (isset($arcusale24mo11['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO11, $arcusale24mo11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo11['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO11, $arcusale24mo11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO11, $arcusale24mo11, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo11 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo11(1234); // WHERE ArcuInv24mo11 = 1234
     * $query->filterByArcuinv24mo11(array(12, 34)); // WHERE ArcuInv24mo11 IN (12, 34)
     * $query->filterByArcuinv24mo11(array('min' => 12)); // WHERE ArcuInv24mo11 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo11 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo11($arcuinv24mo11 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo11)) {
            $useMinMax = false;
            if (isset($arcuinv24mo11['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO11, $arcuinv24mo11['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo11['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO11, $arcuinv24mo11['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO11, $arcuinv24mo11, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo12 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo12(1234); // WHERE ArcuSale24mo12 = 1234
     * $query->filterByArcusale24mo12(array(12, 34)); // WHERE ArcuSale24mo12 IN (12, 34)
     * $query->filterByArcusale24mo12(array('min' => 12)); // WHERE ArcuSale24mo12 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo12($arcusale24mo12 = null, $comparison = null)
    {
        if (is_array($arcusale24mo12)) {
            $useMinMax = false;
            if (isset($arcusale24mo12['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO12, $arcusale24mo12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo12['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO12, $arcusale24mo12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO12, $arcusale24mo12, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo12 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo12(1234); // WHERE ArcuInv24mo12 = 1234
     * $query->filterByArcuinv24mo12(array(12, 34)); // WHERE ArcuInv24mo12 IN (12, 34)
     * $query->filterByArcuinv24mo12(array('min' => 12)); // WHERE ArcuInv24mo12 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo12 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo12($arcuinv24mo12 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo12)) {
            $useMinMax = false;
            if (isset($arcuinv24mo12['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO12, $arcuinv24mo12['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo12['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO12, $arcuinv24mo12['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO12, $arcuinv24mo12, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo13 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo13(1234); // WHERE ArcuSale24mo13 = 1234
     * $query->filterByArcusale24mo13(array(12, 34)); // WHERE ArcuSale24mo13 IN (12, 34)
     * $query->filterByArcusale24mo13(array('min' => 12)); // WHERE ArcuSale24mo13 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo13($arcusale24mo13 = null, $comparison = null)
    {
        if (is_array($arcusale24mo13)) {
            $useMinMax = false;
            if (isset($arcusale24mo13['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO13, $arcusale24mo13['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo13['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO13, $arcusale24mo13['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO13, $arcusale24mo13, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo13 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo13(1234); // WHERE ArcuInv24mo13 = 1234
     * $query->filterByArcuinv24mo13(array(12, 34)); // WHERE ArcuInv24mo13 IN (12, 34)
     * $query->filterByArcuinv24mo13(array('min' => 12)); // WHERE ArcuInv24mo13 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo13 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo13($arcuinv24mo13 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo13)) {
            $useMinMax = false;
            if (isset($arcuinv24mo13['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO13, $arcuinv24mo13['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo13['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO13, $arcuinv24mo13['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO13, $arcuinv24mo13, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo14 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo14(1234); // WHERE ArcuSale24mo14 = 1234
     * $query->filterByArcusale24mo14(array(12, 34)); // WHERE ArcuSale24mo14 IN (12, 34)
     * $query->filterByArcusale24mo14(array('min' => 12)); // WHERE ArcuSale24mo14 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo14($arcusale24mo14 = null, $comparison = null)
    {
        if (is_array($arcusale24mo14)) {
            $useMinMax = false;
            if (isset($arcusale24mo14['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO14, $arcusale24mo14['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo14['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO14, $arcusale24mo14['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO14, $arcusale24mo14, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo14 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo14(1234); // WHERE ArcuInv24mo14 = 1234
     * $query->filterByArcuinv24mo14(array(12, 34)); // WHERE ArcuInv24mo14 IN (12, 34)
     * $query->filterByArcuinv24mo14(array('min' => 12)); // WHERE ArcuInv24mo14 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo14 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo14($arcuinv24mo14 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo14)) {
            $useMinMax = false;
            if (isset($arcuinv24mo14['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO14, $arcuinv24mo14['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo14['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO14, $arcuinv24mo14['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO14, $arcuinv24mo14, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo15 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo15(1234); // WHERE ArcuSale24mo15 = 1234
     * $query->filterByArcusale24mo15(array(12, 34)); // WHERE ArcuSale24mo15 IN (12, 34)
     * $query->filterByArcusale24mo15(array('min' => 12)); // WHERE ArcuSale24mo15 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo15($arcusale24mo15 = null, $comparison = null)
    {
        if (is_array($arcusale24mo15)) {
            $useMinMax = false;
            if (isset($arcusale24mo15['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO15, $arcusale24mo15['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo15['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO15, $arcusale24mo15['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO15, $arcusale24mo15, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo15 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo15(1234); // WHERE ArcuInv24mo15 = 1234
     * $query->filterByArcuinv24mo15(array(12, 34)); // WHERE ArcuInv24mo15 IN (12, 34)
     * $query->filterByArcuinv24mo15(array('min' => 12)); // WHERE ArcuInv24mo15 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo15 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo15($arcuinv24mo15 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo15)) {
            $useMinMax = false;
            if (isset($arcuinv24mo15['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO15, $arcuinv24mo15['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo15['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO15, $arcuinv24mo15['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO15, $arcuinv24mo15, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo16 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo16(1234); // WHERE ArcuSale24mo16 = 1234
     * $query->filterByArcusale24mo16(array(12, 34)); // WHERE ArcuSale24mo16 IN (12, 34)
     * $query->filterByArcusale24mo16(array('min' => 12)); // WHERE ArcuSale24mo16 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo16($arcusale24mo16 = null, $comparison = null)
    {
        if (is_array($arcusale24mo16)) {
            $useMinMax = false;
            if (isset($arcusale24mo16['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO16, $arcusale24mo16['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo16['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO16, $arcusale24mo16['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO16, $arcusale24mo16, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo16 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo16(1234); // WHERE ArcuInv24mo16 = 1234
     * $query->filterByArcuinv24mo16(array(12, 34)); // WHERE ArcuInv24mo16 IN (12, 34)
     * $query->filterByArcuinv24mo16(array('min' => 12)); // WHERE ArcuInv24mo16 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo16 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo16($arcuinv24mo16 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo16)) {
            $useMinMax = false;
            if (isset($arcuinv24mo16['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO16, $arcuinv24mo16['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo16['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO16, $arcuinv24mo16['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO16, $arcuinv24mo16, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo17 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo17(1234); // WHERE ArcuSale24mo17 = 1234
     * $query->filterByArcusale24mo17(array(12, 34)); // WHERE ArcuSale24mo17 IN (12, 34)
     * $query->filterByArcusale24mo17(array('min' => 12)); // WHERE ArcuSale24mo17 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo17($arcusale24mo17 = null, $comparison = null)
    {
        if (is_array($arcusale24mo17)) {
            $useMinMax = false;
            if (isset($arcusale24mo17['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO17, $arcusale24mo17['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo17['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO17, $arcusale24mo17['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO17, $arcusale24mo17, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo17 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo17(1234); // WHERE ArcuInv24mo17 = 1234
     * $query->filterByArcuinv24mo17(array(12, 34)); // WHERE ArcuInv24mo17 IN (12, 34)
     * $query->filterByArcuinv24mo17(array('min' => 12)); // WHERE ArcuInv24mo17 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo17 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo17($arcuinv24mo17 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo17)) {
            $useMinMax = false;
            if (isset($arcuinv24mo17['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO17, $arcuinv24mo17['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo17['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO17, $arcuinv24mo17['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO17, $arcuinv24mo17, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo18 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo18(1234); // WHERE ArcuSale24mo18 = 1234
     * $query->filterByArcusale24mo18(array(12, 34)); // WHERE ArcuSale24mo18 IN (12, 34)
     * $query->filterByArcusale24mo18(array('min' => 12)); // WHERE ArcuSale24mo18 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo18($arcusale24mo18 = null, $comparison = null)
    {
        if (is_array($arcusale24mo18)) {
            $useMinMax = false;
            if (isset($arcusale24mo18['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO18, $arcusale24mo18['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo18['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO18, $arcusale24mo18['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO18, $arcusale24mo18, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo18 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo18(1234); // WHERE ArcuInv24mo18 = 1234
     * $query->filterByArcuinv24mo18(array(12, 34)); // WHERE ArcuInv24mo18 IN (12, 34)
     * $query->filterByArcuinv24mo18(array('min' => 12)); // WHERE ArcuInv24mo18 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo18 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo18($arcuinv24mo18 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo18)) {
            $useMinMax = false;
            if (isset($arcuinv24mo18['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO18, $arcuinv24mo18['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo18['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO18, $arcuinv24mo18['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO18, $arcuinv24mo18, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo19 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo19(1234); // WHERE ArcuSale24mo19 = 1234
     * $query->filterByArcusale24mo19(array(12, 34)); // WHERE ArcuSale24mo19 IN (12, 34)
     * $query->filterByArcusale24mo19(array('min' => 12)); // WHERE ArcuSale24mo19 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo19($arcusale24mo19 = null, $comparison = null)
    {
        if (is_array($arcusale24mo19)) {
            $useMinMax = false;
            if (isset($arcusale24mo19['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO19, $arcusale24mo19['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo19['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO19, $arcusale24mo19['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO19, $arcusale24mo19, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo19 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo19(1234); // WHERE ArcuInv24mo19 = 1234
     * $query->filterByArcuinv24mo19(array(12, 34)); // WHERE ArcuInv24mo19 IN (12, 34)
     * $query->filterByArcuinv24mo19(array('min' => 12)); // WHERE ArcuInv24mo19 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo19 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo19($arcuinv24mo19 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo19)) {
            $useMinMax = false;
            if (isset($arcuinv24mo19['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO19, $arcuinv24mo19['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo19['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO19, $arcuinv24mo19['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO19, $arcuinv24mo19, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo20 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo20(1234); // WHERE ArcuSale24mo20 = 1234
     * $query->filterByArcusale24mo20(array(12, 34)); // WHERE ArcuSale24mo20 IN (12, 34)
     * $query->filterByArcusale24mo20(array('min' => 12)); // WHERE ArcuSale24mo20 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo20($arcusale24mo20 = null, $comparison = null)
    {
        if (is_array($arcusale24mo20)) {
            $useMinMax = false;
            if (isset($arcusale24mo20['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO20, $arcusale24mo20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo20['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO20, $arcusale24mo20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO20, $arcusale24mo20, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo20 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo20(1234); // WHERE ArcuInv24mo20 = 1234
     * $query->filterByArcuinv24mo20(array(12, 34)); // WHERE ArcuInv24mo20 IN (12, 34)
     * $query->filterByArcuinv24mo20(array('min' => 12)); // WHERE ArcuInv24mo20 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo20 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo20($arcuinv24mo20 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo20)) {
            $useMinMax = false;
            if (isset($arcuinv24mo20['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO20, $arcuinv24mo20['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo20['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO20, $arcuinv24mo20['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO20, $arcuinv24mo20, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo21 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo21(1234); // WHERE ArcuSale24mo21 = 1234
     * $query->filterByArcusale24mo21(array(12, 34)); // WHERE ArcuSale24mo21 IN (12, 34)
     * $query->filterByArcusale24mo21(array('min' => 12)); // WHERE ArcuSale24mo21 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo21($arcusale24mo21 = null, $comparison = null)
    {
        if (is_array($arcusale24mo21)) {
            $useMinMax = false;
            if (isset($arcusale24mo21['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO21, $arcusale24mo21['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo21['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO21, $arcusale24mo21['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO21, $arcusale24mo21, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo21 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo21(1234); // WHERE ArcuInv24mo21 = 1234
     * $query->filterByArcuinv24mo21(array(12, 34)); // WHERE ArcuInv24mo21 IN (12, 34)
     * $query->filterByArcuinv24mo21(array('min' => 12)); // WHERE ArcuInv24mo21 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo21 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo21($arcuinv24mo21 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo21)) {
            $useMinMax = false;
            if (isset($arcuinv24mo21['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO21, $arcuinv24mo21['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo21['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO21, $arcuinv24mo21['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO21, $arcuinv24mo21, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo22 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo22(1234); // WHERE ArcuSale24mo22 = 1234
     * $query->filterByArcusale24mo22(array(12, 34)); // WHERE ArcuSale24mo22 IN (12, 34)
     * $query->filterByArcusale24mo22(array('min' => 12)); // WHERE ArcuSale24mo22 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo22($arcusale24mo22 = null, $comparison = null)
    {
        if (is_array($arcusale24mo22)) {
            $useMinMax = false;
            if (isset($arcusale24mo22['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO22, $arcusale24mo22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo22['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO22, $arcusale24mo22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO22, $arcusale24mo22, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo22 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo22(1234); // WHERE ArcuInv24mo22 = 1234
     * $query->filterByArcuinv24mo22(array(12, 34)); // WHERE ArcuInv24mo22 IN (12, 34)
     * $query->filterByArcuinv24mo22(array('min' => 12)); // WHERE ArcuInv24mo22 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo22 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo22($arcuinv24mo22 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo22)) {
            $useMinMax = false;
            if (isset($arcuinv24mo22['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO22, $arcuinv24mo22['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo22['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO22, $arcuinv24mo22['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO22, $arcuinv24mo22, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo23 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo23(1234); // WHERE ArcuSale24mo23 = 1234
     * $query->filterByArcusale24mo23(array(12, 34)); // WHERE ArcuSale24mo23 IN (12, 34)
     * $query->filterByArcusale24mo23(array('min' => 12)); // WHERE ArcuSale24mo23 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo23($arcusale24mo23 = null, $comparison = null)
    {
        if (is_array($arcusale24mo23)) {
            $useMinMax = false;
            if (isset($arcusale24mo23['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO23, $arcusale24mo23['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo23['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO23, $arcusale24mo23['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO23, $arcusale24mo23, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo23 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo23(1234); // WHERE ArcuInv24mo23 = 1234
     * $query->filterByArcuinv24mo23(array(12, 34)); // WHERE ArcuInv24mo23 IN (12, 34)
     * $query->filterByArcuinv24mo23(array('min' => 12)); // WHERE ArcuInv24mo23 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo23 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo23($arcuinv24mo23 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo23)) {
            $useMinMax = false;
            if (isset($arcuinv24mo23['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO23, $arcuinv24mo23['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo23['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO23, $arcuinv24mo23['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO23, $arcuinv24mo23, $comparison);
    }

    /**
     * Filter the query on the ArcuSale24mo24 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusale24mo24(1234); // WHERE ArcuSale24mo24 = 1234
     * $query->filterByArcusale24mo24(array(12, 34)); // WHERE ArcuSale24mo24 IN (12, 34)
     * $query->filterByArcusale24mo24(array('min' => 12)); // WHERE ArcuSale24mo24 > 12
     * </code>
     *
     * @param     mixed $arcusale24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusale24mo24($arcusale24mo24 = null, $comparison = null)
    {
        if (is_array($arcusale24mo24)) {
            $useMinMax = false;
            if (isset($arcusale24mo24['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO24, $arcusale24mo24['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusale24mo24['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO24, $arcusale24mo24['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSALE24MO24, $arcusale24mo24, $comparison);
    }

    /**
     * Filter the query on the ArcuInv24mo24 column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinv24mo24(1234); // WHERE ArcuInv24mo24 = 1234
     * $query->filterByArcuinv24mo24(array(12, 34)); // WHERE ArcuInv24mo24 IN (12, 34)
     * $query->filterByArcuinv24mo24(array('min' => 12)); // WHERE ArcuInv24mo24 > 12
     * </code>
     *
     * @param     mixed $arcuinv24mo24 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinv24mo24($arcuinv24mo24 = null, $comparison = null)
    {
        if (is_array($arcuinv24mo24)) {
            $useMinMax = false;
            if (isset($arcuinv24mo24['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO24, $arcuinv24mo24['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuinv24mo24['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO24, $arcuinv24mo24['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINV24MO24, $arcuinv24mo24, $comparison);
    }

    /**
     * Filter the query on the ArcuLastPayAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByArculastpayamt(1234); // WHERE ArcuLastPayAmt = 1234
     * $query->filterByArculastpayamt(array(12, 34)); // WHERE ArcuLastPayAmt IN (12, 34)
     * $query->filterByArculastpayamt(array('min' => 12)); // WHERE ArcuLastPayAmt > 12
     * </code>
     *
     * @param     mixed $arculastpayamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArculastpayamt($arculastpayamt = null, $comparison = null)
    {
        if (is_array($arculastpayamt)) {
            $useMinMax = false;
            if (isset($arculastpayamt['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCULASTPAYAMT, $arculastpayamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arculastpayamt['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCULASTPAYAMT, $arculastpayamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCULASTPAYAMT, $arculastpayamt, $comparison);
    }

    /**
     * Filter the query on the ArcuOrdrTot column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuordrtot(1234); // WHERE ArcuOrdrTot = 1234
     * $query->filterByArcuordrtot(array(12, 34)); // WHERE ArcuOrdrTot IN (12, 34)
     * $query->filterByArcuordrtot(array('min' => 12)); // WHERE ArcuOrdrTot > 12
     * </code>
     *
     * @param     mixed $arcuordrtot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuordrtot($arcuordrtot = null, $comparison = null)
    {
        if (is_array($arcuordrtot)) {
            $useMinMax = false;
            if (isset($arcuordrtot['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUORDRTOT, $arcuordrtot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuordrtot['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUORDRTOT, $arcuordrtot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUORDRTOT, $arcuordrtot, $comparison);
    }

    /**
     * Filter the query on the ArcuUseFrtIn column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuusefrtin('fooValue');   // WHERE ArcuUseFrtIn = 'fooValue'
     * $query->filterByArcuusefrtin('%fooValue%', Criteria::LIKE); // WHERE ArcuUseFrtIn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuusefrtin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuusefrtin($arcuusefrtin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuusefrtin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUUSEFRTIN, $arcuusefrtin, $comparison);
    }

    /**
     * Filter the query on the ArcuMyVendId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcumyvendid('fooValue');   // WHERE ArcuMyVendId = 'fooValue'
     * $query->filterByArcumyvendid('%fooValue%', Criteria::LIKE); // WHERE ArcuMyVendId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcumyvendid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcumyvendid($arcumyvendid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcumyvendid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUMYVENDID, $arcumyvendid, $comparison);
    }

    /**
     * Filter the query on the ArcuAddlPricDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuaddlpricdisc(1234); // WHERE ArcuAddlPricDisc = 1234
     * $query->filterByArcuaddlpricdisc(array(12, 34)); // WHERE ArcuAddlPricDisc IN (12, 34)
     * $query->filterByArcuaddlpricdisc(array('min' => 12)); // WHERE ArcuAddlPricDisc > 12
     * </code>
     *
     * @param     mixed $arcuaddlpricdisc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuaddlpricdisc($arcuaddlpricdisc = null, $comparison = null)
    {
        if (is_array($arcuaddlpricdisc)) {
            $useMinMax = false;
            if (isset($arcuaddlpricdisc['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUADDLPRICDISC, $arcuaddlpricdisc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuaddlpricdisc['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUADDLPRICDISC, $arcuaddlpricdisc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUADDLPRICDISC, $arcuaddlpricdisc, $comparison);
    }

    /**
     * Filter the query on the ArcuActiveInactive column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuactiveinactive('fooValue');   // WHERE ArcuActiveInactive = 'fooValue'
     * $query->filterByArcuactiveinactive('%fooValue%', Criteria::LIKE); // WHERE ArcuActiveInactive LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuactiveinactive The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuactiveinactive($arcuactiveinactive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuactiveinactive)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUACTIVEINACTIVE, $arcuactiveinactive, $comparison);
    }

    /**
     * Filter the query on the ArcuInactiveDate column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuinactivedate('fooValue');   // WHERE ArcuInactiveDate = 'fooValue'
     * $query->filterByArcuinactivedate('%fooValue%', Criteria::LIKE); // WHERE ArcuInactiveDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuinactivedate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuinactivedate($arcuinactivedate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuinactivedate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUINACTIVEDATE, $arcuinactivedate, $comparison);
    }

    /**
     * Filter the query on the ArcuChrgFrt column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuchrgfrt('fooValue');   // WHERE ArcuChrgFrt = 'fooValue'
     * $query->filterByArcuchrgfrt('%fooValue%', Criteria::LIKE); // WHERE ArcuChrgFrt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuchrgfrt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuchrgfrt($arcuchrgfrt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuchrgfrt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCHRGFRT, $arcuchrgfrt, $comparison);
    }

    /**
     * Filter the query on the ArcuCoreXDays column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucorexdays(1234); // WHERE ArcuCoreXDays = 1234
     * $query->filterByArcucorexdays(array(12, 34)); // WHERE ArcuCoreXDays IN (12, 34)
     * $query->filterByArcucorexdays(array('min' => 12)); // WHERE ArcuCoreXDays > 12
     * </code>
     *
     * @param     mixed $arcucorexdays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcucorexdays($arcucorexdays = null, $comparison = null)
    {
        if (is_array($arcucorexdays)) {
            $useMinMax = false;
            if (isset($arcucorexdays['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUCOREXDAYS, $arcucorexdays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcucorexdays['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUCOREXDAYS, $arcucorexdays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCOREXDAYS, $arcucorexdays, $comparison);
    }

    /**
     * Filter the query on the ArcuContractNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucontractnbr('fooValue');   // WHERE ArcuContractNbr = 'fooValue'
     * $query->filterByArcucontractnbr('%fooValue%', Criteria::LIKE); // WHERE ArcuContractNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucontractnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcucontractnbr($arcucontractnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucontractnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCONTRACTNBR, $arcucontractnbr, $comparison);
    }

    /**
     * Filter the query on the ArcuCoreLF column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucorelf('fooValue');   // WHERE ArcuCoreLF = 'fooValue'
     * $query->filterByArcucorelf('%fooValue%', Criteria::LIKE); // WHERE ArcuCoreLF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucorelf The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcucorelf($arcucorelf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucorelf)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCORELF, $arcucorelf, $comparison);
    }

    /**
     * Filter the query on the ArcuCoreBankId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucorebankid('fooValue');   // WHERE ArcuCoreBankId = 'fooValue'
     * $query->filterByArcucorebankid('%fooValue%', Criteria::LIKE); // WHERE ArcuCoreBankId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucorebankid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcucorebankid($arcucorebankid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucorebankid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCOREBANKID, $arcucorebankid, $comparison);
    }

    /**
     * Filter the query on the ArcuDunsNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArcudunsnbr('fooValue');   // WHERE ArcuDunsNbr = 'fooValue'
     * $query->filterByArcudunsnbr('%fooValue%', Criteria::LIKE); // WHERE ArcuDunsNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcudunsnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcudunsnbr($arcudunsnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcudunsnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUDUNSNBR, $arcudunsnbr, $comparison);
    }

    /**
     * Filter the query on the ArcuRfmlValu column
     *
     * Example usage:
     * <code>
     * $query->filterByArcurfmlvalu(1234); // WHERE ArcuRfmlValu = 1234
     * $query->filterByArcurfmlvalu(array(12, 34)); // WHERE ArcuRfmlValu IN (12, 34)
     * $query->filterByArcurfmlvalu(array('min' => 12)); // WHERE ArcuRfmlValu > 12
     * </code>
     *
     * @param     mixed $arcurfmlvalu The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcurfmlvalu($arcurfmlvalu = null, $comparison = null)
    {
        if (is_array($arcurfmlvalu)) {
            $useMinMax = false;
            if (isset($arcurfmlvalu['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCURFMLVALU, $arcurfmlvalu['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcurfmlvalu['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCURFMLVALU, $arcurfmlvalu['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCURFMLVALU, $arcurfmlvalu, $comparison);
    }

    /**
     * Filter the query on the ArcuCustPoParam column
     *
     * Example usage:
     * <code>
     * $query->filterByArcucustpoparam('fooValue');   // WHERE ArcuCustPoParam = 'fooValue'
     * $query->filterByArcucustpoparam('%fooValue%', Criteria::LIKE); // WHERE ArcuCustPoParam LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcucustpoparam The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcucustpoparam($arcucustpoparam = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcucustpoparam)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUCUSTPOPARAM, $arcucustpoparam, $comparison);
    }

    /**
     * Filter the query on the ArcuAgeLevel column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuagelevel(1234); // WHERE ArcuAgeLevel = 1234
     * $query->filterByArcuagelevel(array(12, 34)); // WHERE ArcuAgeLevel IN (12, 34)
     * $query->filterByArcuagelevel(array('min' => 12)); // WHERE ArcuAgeLevel > 12
     * </code>
     *
     * @param     mixed $arcuagelevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuagelevel($arcuagelevel = null, $comparison = null)
    {
        if (is_array($arcuagelevel)) {
            $useMinMax = false;
            if (isset($arcuagelevel['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUAGELEVEL, $arcuagelevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuagelevel['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUAGELEVEL, $arcuagelevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUAGELEVEL, $arcuagelevel, $comparison);
    }

    /**
     * Filter the query on the ArtbRoute column
     *
     * Example usage:
     * <code>
     * $query->filterByArtbroute('fooValue');   // WHERE ArtbRoute = 'fooValue'
     * $query->filterByArtbroute('%fooValue%', Criteria::LIKE); // WHERE ArtbRoute LIKE '%fooValue%'
     * </code>
     *
     * @param     string $artbroute The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArtbroute($artbroute = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($artbroute)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARTBROUTE, $artbroute, $comparison);
    }

    /**
     * Filter the query on the ArcuWgTaxCode column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuwgtaxcode('fooValue');   // WHERE ArcuWgTaxCode = 'fooValue'
     * $query->filterByArcuwgtaxcode('%fooValue%', Criteria::LIKE); // WHERE ArcuWgTaxCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuwgtaxcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuwgtaxcode($arcuwgtaxcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuwgtaxcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUWGTAXCODE, $arcuwgtaxcode, $comparison);
    }

    /**
     * Filter the query on the ArcuAcptSupercede column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuacptsupercede('fooValue');   // WHERE ArcuAcptSupercede = 'fooValue'
     * $query->filterByArcuacptsupercede('%fooValue%', Criteria::LIKE); // WHERE ArcuAcptSupercede LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuacptsupercede The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuacptsupercede($arcuacptsupercede = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuacptsupercede)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUACPTSUPERCEDE, $arcuacptsupercede, $comparison);
    }

    /**
     * Filter the query on the ArcuMstrCustId column
     *
     * Example usage:
     * <code>
     * $query->filterByArcumstrcustid('fooValue');   // WHERE ArcuMstrCustId = 'fooValue'
     * $query->filterByArcumstrcustid('%fooValue%', Criteria::LIKE); // WHERE ArcuMstrCustId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcumstrcustid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcumstrcustid($arcumstrcustid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcumstrcustid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUMSTRCUSTID, $arcumstrcustid, $comparison);
    }

    /**
     * Filter the query on the ArcuSurchgPct column
     *
     * Example usage:
     * <code>
     * $query->filterByArcusurchgpct(1234); // WHERE ArcuSurchgPct = 1234
     * $query->filterByArcusurchgpct(array(12, 34)); // WHERE ArcuSurchgPct IN (12, 34)
     * $query->filterByArcusurchgpct(array('min' => 12)); // WHERE ArcuSurchgPct > 12
     * </code>
     *
     * @param     mixed $arcusurchgpct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcusurchgpct($arcusurchgpct = null, $comparison = null)
    {
        if (is_array($arcusurchgpct)) {
            $useMinMax = false;
            if (isset($arcusurchgpct['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSURCHGPCT, $arcusurchgpct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcusurchgpct['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUSURCHGPCT, $arcusurchgpct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUSURCHGPCT, $arcusurchgpct, $comparison);
    }

    /**
     * Filter the query on the ArcuAllowSplit column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuallowsplit('fooValue');   // WHERE ArcuAllowSplit = 'fooValue'
     * $query->filterByArcuallowsplit('%fooValue%', Criteria::LIKE); // WHERE ArcuAllowSplit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuallowsplit The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuallowsplit($arcuallowsplit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuallowsplit)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUALLOWSPLIT, $arcuallowsplit, $comparison);
    }

    /**
     * Filter the query on the ArcuLineMin column
     *
     * Example usage:
     * <code>
     * $query->filterByArculinemin(1234); // WHERE ArcuLineMin = 1234
     * $query->filterByArculinemin(array(12, 34)); // WHERE ArcuLineMin IN (12, 34)
     * $query->filterByArculinemin(array('min' => 12)); // WHERE ArcuLineMin > 12
     * </code>
     *
     * @param     mixed $arculinemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArculinemin($arculinemin = null, $comparison = null)
    {
        if (is_array($arculinemin)) {
            $useMinMax = false;
            if (isset($arculinemin['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCULINEMIN, $arculinemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arculinemin['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCULINEMIN, $arculinemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCULINEMIN, $arculinemin, $comparison);
    }

    /**
     * Filter the query on the ArcuOrdrMin column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuordrmin(1234); // WHERE ArcuOrdrMin = 1234
     * $query->filterByArcuordrmin(array(12, 34)); // WHERE ArcuOrdrMin IN (12, 34)
     * $query->filterByArcuordrmin(array('min' => 12)); // WHERE ArcuOrdrMin > 12
     * </code>
     *
     * @param     mixed $arcuordrmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuordrmin($arcuordrmin = null, $comparison = null)
    {
        if (is_array($arcuordrmin)) {
            $useMinMax = false;
            if (isset($arcuordrmin['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUORDRMIN, $arcuordrmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcuordrmin['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUORDRMIN, $arcuordrmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUORDRMIN, $arcuordrmin, $comparison);
    }

    /**
     * Filter the query on the ArcuUpsAcctNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuupsacctnbr('fooValue');   // WHERE ArcuUpsAcctNbr = 'fooValue'
     * $query->filterByArcuupsacctnbr('%fooValue%', Criteria::LIKE); // WHERE ArcuUpsAcctNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuupsacctnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuupsacctnbr($arcuupsacctnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuupsacctnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUUPSACCTNBR, $arcuupsacctnbr, $comparison);
    }

    /**
     * Filter the query on the ArcuPrtMatCert column
     *
     * Example usage:
     * <code>
     * $query->filterByArcuprtmatcert('fooValue');   // WHERE ArcuPrtMatCert = 'fooValue'
     * $query->filterByArcuprtmatcert('%fooValue%', Criteria::LIKE); // WHERE ArcuPrtMatCert LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcuprtmatcert The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcuprtmatcert($arcuprtmatcert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcuprtmatcert)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUPRTMATCERT, $arcuprtmatcert, $comparison);
    }

    /**
     * Filter the query on the ArcuFobInputYn column
     *
     * Example usage:
     * <code>
     * $query->filterByArcufobinputyn('fooValue');   // WHERE ArcuFobInputYn = 'fooValue'
     * $query->filterByArcufobinputyn('%fooValue%', Criteria::LIKE); // WHERE ArcuFobInputYn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $arcufobinputyn The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcufobinputyn($arcufobinputyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($arcufobinputyn)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUFOBINPUTYN, $arcufobinputyn, $comparison);
    }

    /**
     * Filter the query on the ArcuFobPerLb column
     *
     * Example usage:
     * <code>
     * $query->filterByArcufobperlb(1234); // WHERE ArcuFobPerLb = 1234
     * $query->filterByArcufobperlb(array(12, 34)); // WHERE ArcuFobPerLb IN (12, 34)
     * $query->filterByArcufobperlb(array('min' => 12)); // WHERE ArcuFobPerLb > 12
     * </code>
     *
     * @param     mixed $arcufobperlb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByArcufobperlb($arcufobperlb = null, $comparison = null)
    {
        if (is_array($arcufobperlb)) {
            $useMinMax = false;
            if (isset($arcufobperlb['min'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUFOBPERLB, $arcufobperlb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arcufobperlb['max'])) {
                $this->addUsingAlias(CustomerTableMap::COL_ARCUFOBPERLB, $arcufobperlb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_ARCUFOBPERLB, $arcufobperlb, $comparison);
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
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CustomerTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Filter the query by a related \CustomerCommissionCode object
     *
     * @param \CustomerCommissionCode|ObjectCollection $customerCommissionCode The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByCustomerCommissionCode($customerCommissionCode, $comparison = null)
    {
        if ($customerCommissionCode instanceof \CustomerCommissionCode) {
            return $this
                ->addUsingAlias(CustomerTableMap::COL_ARTBCOMMCODE, $customerCommissionCode->getArtbcommcode(), $comparison);
        } elseif ($customerCommissionCode instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CustomerTableMap::COL_ARTBCOMMCODE, $customerCommissionCode->toKeyValue('PrimaryKey', 'Artbcommcode'), $comparison);
        } else {
            throw new PropelException('filterByCustomerCommissionCode() only accepts arguments of type \CustomerCommissionCode or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerCommissionCode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function joinCustomerCommissionCode($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerCommissionCode');

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
            $this->addJoinObject($join, 'CustomerCommissionCode');
        }

        return $this;
    }

    /**
     * Use the CustomerCommissionCode relation CustomerCommissionCode object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerCommissionCodeQuery A secondary query class using the current class as primary query
     */
    public function useCustomerCommissionCodeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCustomerCommissionCode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerCommissionCode', '\CustomerCommissionCodeQuery');
    }

    /**
     * Filter the query by a related \Shipvia object
     *
     * @param \Shipvia|ObjectCollection $shipvia The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByShipvia($shipvia, $comparison = null)
    {
        if ($shipvia instanceof \Shipvia) {
            return $this
                ->addUsingAlias(CustomerTableMap::COL_ARTBSHIPVIA, $shipvia->getArtbshipvia(), $comparison);
        } elseif ($shipvia instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CustomerTableMap::COL_ARTBSHIPVIA, $shipvia->toKeyValue('PrimaryKey', 'Artbshipvia'), $comparison);
        } else {
            throw new PropelException('filterByShipvia() only accepts arguments of type \Shipvia or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Shipvia relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function joinShipvia($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Shipvia');

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
            $this->addJoinObject($join, 'Shipvia');
        }

        return $this;
    }

    /**
     * Use the Shipvia relation Shipvia object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ShipviaQuery A secondary query class using the current class as primary query
     */
    public function useShipviaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinShipvia($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Shipvia', '\ShipviaQuery');
    }

    /**
     * Filter the query by a related \CustomerShipto object
     *
     * @param \CustomerShipto|ObjectCollection $customerShipto the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByCustomerShipto($customerShipto, $comparison = null)
    {
        if ($customerShipto instanceof \CustomerShipto) {
            return $this
                ->addUsingAlias(CustomerTableMap::COL_ARCUCUSTID, $customerShipto->getArcucustid(), $comparison);
        } elseif ($customerShipto instanceof ObjectCollection) {
            return $this
                ->useCustomerShiptoQuery()
                ->filterByPrimaryKeys($customerShipto->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCustomerShipto() only accepts arguments of type \CustomerShipto or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerShipto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function joinCustomerShipto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerShipto');

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
            $this->addJoinObject($join, 'CustomerShipto');
        }

        return $this;
    }

    /**
     * Use the CustomerShipto relation CustomerShipto object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \CustomerShiptoQuery A secondary query class using the current class as primary query
     */
    public function useCustomerShiptoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomerShipto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerShipto', '\CustomerShiptoQuery');
    }

    /**
     * Filter the query by a related \ItemXrefCustomerNote object
     *
     * @param \ItemXrefCustomerNote|ObjectCollection $itemXrefCustomerNote the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByItemXrefCustomerNote($itemXrefCustomerNote, $comparison = null)
    {
        if ($itemXrefCustomerNote instanceof \ItemXrefCustomerNote) {
            return $this
                ->addUsingAlias(CustomerTableMap::COL_ARCUCUSTID, $itemXrefCustomerNote->getArcucustid(), $comparison);
        } elseif ($itemXrefCustomerNote instanceof ObjectCollection) {
            return $this
                ->useItemXrefCustomerNoteQuery()
                ->filterByPrimaryKeys($itemXrefCustomerNote->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByItemXrefCustomerNote() only accepts arguments of type \ItemXrefCustomerNote or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ItemXrefCustomerNote relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function joinItemXrefCustomerNote($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ItemXrefCustomerNote');

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
            $this->addJoinObject($join, 'ItemXrefCustomerNote');
        }

        return $this;
    }

    /**
     * Use the ItemXrefCustomerNote relation ItemXrefCustomerNote object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \ItemXrefCustomerNoteQuery A secondary query class using the current class as primary query
     */
    public function useItemXrefCustomerNoteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinItemXrefCustomerNote($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ItemXrefCustomerNote', '\ItemXrefCustomerNoteQuery');
    }

    /**
     * Filter the query by a related \BookingDayCustomer object
     *
     * @param \BookingDayCustomer|ObjectCollection $bookingDayCustomer the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByBookingDayCustomer($bookingDayCustomer, $comparison = null)
    {
        if ($bookingDayCustomer instanceof \BookingDayCustomer) {
            return $this
                ->addUsingAlias(CustomerTableMap::COL_ARCUCUSTID, $bookingDayCustomer->getArcucustid(), $comparison);
        } elseif ($bookingDayCustomer instanceof ObjectCollection) {
            return $this
                ->useBookingDayCustomerQuery()
                ->filterByPrimaryKeys($bookingDayCustomer->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBookingDayCustomer() only accepts arguments of type \BookingDayCustomer or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BookingDayCustomer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
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
     * @return ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByBookingDayDetail($bookingDayDetail, $comparison = null)
    {
        if ($bookingDayDetail instanceof \BookingDayDetail) {
            return $this
                ->addUsingAlias(CustomerTableMap::COL_ARCUCUSTID, $bookingDayDetail->getArcucustid(), $comparison);
        } elseif ($bookingDayDetail instanceof ObjectCollection) {
            return $this
                ->useBookingDayDetailQuery()
                ->filterByPrimaryKeys($bookingDayDetail->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBookingDayDetail() only accepts arguments of type \BookingDayDetail or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BookingDayDetail relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
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
     * @return ChildCustomerQuery The current query, for fluid interface
     */
    public function filterByBooking($booking, $comparison = null)
    {
        if ($booking instanceof \Booking) {
            return $this
                ->addUsingAlias(CustomerTableMap::COL_ARCUCUSTID, $booking->getArcucustid(), $comparison);
        } elseif ($booking instanceof ObjectCollection) {
            return $this
                ->useBookingQuery()
                ->filterByPrimaryKeys($booking->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBooking() only accepts arguments of type \Booking or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Booking relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
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
     * @return ChildCustomerQuery The current query, for fluid interface
     */
    public function filterBySalesHistory($salesHistory, $comparison = null)
    {
        if ($salesHistory instanceof \SalesHistory) {
            return $this
                ->addUsingAlias(CustomerTableMap::COL_ARCUCUSTID, $salesHistory->getArcucustid(), $comparison);
        } elseif ($salesHistory instanceof ObjectCollection) {
            return $this
                ->useSalesHistoryQuery()
                ->filterByPrimaryKeys($salesHistory->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesHistory() only accepts arguments of type \SalesHistory or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesHistory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function joinSalesHistory($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useSalesHistoryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
     * @return ChildCustomerQuery The current query, for fluid interface
     */
    public function filterBySalesOrder($salesOrder, $comparison = null)
    {
        if ($salesOrder instanceof \SalesOrder) {
            return $this
                ->addUsingAlias(CustomerTableMap::COL_ARCUCUSTID, $salesOrder->getArcucustid(), $comparison);
        } elseif ($salesOrder instanceof ObjectCollection) {
            return $this
                ->useSalesOrderQuery()
                ->filterByPrimaryKeys($salesOrder->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesOrder() only accepts arguments of type \SalesOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesOrder relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function joinSalesOrder($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useSalesOrderQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSalesOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesOrder', '\SalesOrderQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildCustomer $customer Object to remove from the list of results
     *
     * @return $this|ChildCustomerQuery The current query, for fluid interface
     */
    public function prune($customer = null)
    {
        if ($customer) {
            $this->addUsingAlias(CustomerTableMap::COL_ARCUCUSTID, $customer->getArcucustid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the ar_cust_mast table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CustomerTableMap::clearInstancePool();
            CustomerTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(CustomerTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(CustomerTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            CustomerTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            CustomerTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // CustomerQuery
