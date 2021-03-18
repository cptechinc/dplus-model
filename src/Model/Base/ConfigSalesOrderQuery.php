<?php

namespace Base;

use \ConfigSalesOrder as ChildConfigSalesOrder;
use \ConfigSalesOrderQuery as ChildConfigSalesOrderQuery;
use \Exception;
use \PDO;
use Map\ConfigSalesOrderTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'so_config' table.
 *
 *
 *
 * @method     ChildConfigSalesOrderQuery orderByOetbconfkey($order = Criteria::ASC) Order by the OetbConfKey column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfglifac($order = Criteria::ASC) Order by the OetbConfGlIfac column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfinifac($order = Criteria::ASC) Order by the OetbConfInIfac column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfrelivty($order = Criteria::ASC) Order by the OetbConfRelIvty column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfuseordrnbr($order = Criteria::ASC) Order by the OetbConfUseOrdrNbr column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdefrqstdate($order = Criteria::ASC) Order by the OetbConfDefRqstDate column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfusecancdate($order = Criteria::ASC) Order by the OetbConfUseCancDate column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfshowsp($order = Criteria::ASC) Order by the OetbConfShowSp column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfjrnlsort($order = Criteria::ASC) Order by the OetbConfJrnlSort column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfuseprepsoopt($order = Criteria::ASC) Order by the OetbConfUsePrepSoOpt column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdispbillto($order = Criteria::ASC) Order by the OetbConfDispBillTo column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfslctflm($order = Criteria::ASC) Order by the OetbConfSlctFlm column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3usestockpull($order = Criteria::ASC) Order by the OetbCon3UseStockPull column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfqtytoship($order = Criteria::ASC) Order by the OetbConfQtyToShip column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfqtytoshipdef($order = Criteria::ASC) Order by the OetbConfQtyToShipDef column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdfltordrqty($order = Criteria::ASC) Order by the OetbConfDfltOrdrQty column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfallocqtytoship($order = Criteria::ASC) Order by the OetbConfAllocQtyToShip column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfoverallocqts($order = Criteria::ASC) Order by the OetbConfOverAllocQts column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3completelotbin($order = Criteria::ASC) Order by the OetbCon3CompleteLotBin column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3rqtsopt($order = Criteria::ASC) Order by the OetbCon3RqtsOpt column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2shipcomphold($order = Criteria::ASC) Order by the OetbCon2ShipCompHold column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3usesaleforecast($order = Criteria::ASC) Order by the OetbCon3UseSaleForecast column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfverfstopneg($order = Criteria::ASC) Order by the OetbConfVerfStopNeg column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfverfaudtrept($order = Criteria::ASC) Order by the OetbConfVerfAudtRept column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfagelevldisp($order = Criteria::ASC) Order by the OetbConfAgeLevlDisp column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfagealltime($order = Criteria::ASC) Order by the OetbConfAgeAllTime column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfageathold($order = Criteria::ASC) Order by the OetbConfAgeAtHold column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfshowatlevl($order = Criteria::ASC) Order by the OetbConfShowAtLevl column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfshowitem($order = Criteria::ASC) Order by the OetbConfShowItem column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfstoppnt($order = Criteria::ASC) Order by the OetbConfStopPnt column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfpricwind($order = Criteria::ASC) Order by the OetbConfPricWind column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfshowcost($order = Criteria::ASC) Order by the OetbConfShowCost column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfcosttouse($order = Criteria::ASC) Order by the OetbConfCostToUse column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfshowmarg($order = Criteria::ASC) Order by the OetbConfShowMarg column
 * @method     ChildConfigSalesOrderQuery orderByOetbconffxoe($order = Criteria::ASC) Order by the OetbConfFxOe column
 * @method     ChildConfigSalesOrderQuery orderByOetbconffxinv($order = Criteria::ASC) Order by the OetbConfFxInv column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdispvia($order = Criteria::ASC) Order by the OetbConfDispVia column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdispcaseqty($order = Criteria::ASC) Order by the OetbConfDispCaseQty column
 * @method     ChildConfigSalesOrderQuery orderByOetbconffrtin($order = Criteria::ASC) Order by the OetbConfFrtIn column
 * @method     ChildConfigSalesOrderQuery orderByOetbconffrtinglacct($order = Criteria::ASC) Order by the OetbConfFrtInGlAcct column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfmincharge($order = Criteria::ASC) Order by the OetbConfMinCharge column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfminchrgglacct($order = Criteria::ASC) Order by the OetbConfMinChrgGlAcct column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdropshipchrg($order = Criteria::ASC) Order by the OetbConfDropShipChrg column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdropshpglacct($order = Criteria::ASC) Order by the OetbConfDropShpGlAcct column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfnontaxcustcode($order = Criteria::ASC) Order by the OetbConfNonTaxCustCode column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfhstaxid($order = Criteria::ASC) Order by the OetbConfHsTaxId column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfhsfrtid($order = Criteria::ASC) Order by the OetbConfHsFrtId column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfhsmiscid($order = Criteria::ASC) Order by the OetbConfHsMiscId column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2hscusdid($order = Criteria::ASC) Order by the OetbCon2HsCusdId column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3hsfrtinid($order = Criteria::ASC) Order by the OetbCon3HsFrtInId column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3hsdropid($order = Criteria::ASC) Order by the OetbCon3HsDropId column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3hsminordid($order = Criteria::ASC) Order by the OetbCon3HsMinordId column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfheadgetdef($order = Criteria::ASC) Order by the OetbConfHeadGetDef column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfitemgetdef($order = Criteria::ASC) Order by the OetbConfItemGetDef column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfautogetcust($order = Criteria::ASC) Order by the OetbConfAutoGetCust column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3autogetitem($order = Criteria::ASC) Order by the OetbCon3AutoGetItem column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfrqstheaddtl($order = Criteria::ASC) Order by the OetbConfRqstHeadDtl column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfcancheaddtl($order = Criteria::ASC) Order by the OetbConfCancHeadDtl column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfuseinvcasship($order = Criteria::ASC) Order by the OetbConfUseInvcAsShip column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3usearrvdate($order = Criteria::ASC) Order by the OetbCon3UseArrvDate column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfseparatecred($order = Criteria::ASC) Order by the OetbConfSeparateCred column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3applycredits($order = Criteria::ASC) Order by the OetbCon3ApplyCredits column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfwarnnotnew($order = Criteria::ASC) Order by the OetbConfWarnNotNew column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfwarnbotozero($order = Criteria::ASC) Order by the OetbConfWarnBoToZero column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2providerouting($order = Criteria::ASC) Order by the OetbCon2ProvideRouting column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2srtrtbyrqstdte($order = Criteria::ASC) Order by the OetbCon2SrtRtByRqstDte column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfusesoreview($order = Criteria::ASC) Order by the OetbConfUseSoReview column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfpicknotedef($order = Criteria::ASC) Order by the OetbConfPickNoteDef column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfpacknotedef($order = Criteria::ASC) Order by the OetbConfPackNoteDef column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfpicksort($order = Criteria::ASC) Order by the OetbConfPickSort column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfpacksort($order = Criteria::ASC) Order by the OetbConfPackSort column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfprtpriconly($order = Criteria::ASC) Order by the OetbConfPrtPricOnly column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfprtneg($order = Criteria::ASC) Order by the OetbConfPrtNeg column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2prtpackageinfo($order = Criteria::ASC) Order by the OetbCon2PrtPackageInfo column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2innerpacklabel($order = Criteria::ASC) Order by the OetbCon2InnerPackLabel column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2outerpacklabel($order = Criteria::ASC) Order by the OetbCon2OuterPackLabel column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2shiptarelabel($order = Criteria::ASC) Order by the OetbCon2ShipTareLabel column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfprtpick($order = Criteria::ASC) Order by the OetbConfPrtPick column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfpicprioseq($order = Criteria::ASC) Order by the OetbConfPicPrioSeq column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfprtpack($order = Criteria::ASC) Order by the OetbConfPrtPack column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfprtinv($order = Criteria::ASC) Order by the OetbConfPrtInv column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2prtcredmemo($order = Criteria::ASC) Order by the OetbCon2PrtCredMemo column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfcrntdate($order = Criteria::ASC) Order by the OetbConfCrntDate column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfmarkpicked($order = Criteria::ASC) Order by the OetbConfMarkPicked column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfshowunavail($order = Criteria::ASC) Order by the OetbConfShowUnavail column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdecplaces($order = Criteria::ASC) Order by the OetbConfDecPlaces column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfwarndup($order = Criteria::ASC) Order by the OetbConfWarnDup column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdefpick($order = Criteria::ASC) Order by the OetbConfDefPick column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdefpack($order = Criteria::ASC) Order by the OetbConfDefPack column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdefinvc($order = Criteria::ASC) Order by the OetbConfDefInvc column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdefack($order = Criteria::ASC) Order by the OetbConfDefAck column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfacksortopt($order = Criteria::ASC) Order by the OetbConfAckSortOpt column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfreleasenbr($order = Criteria::ASC) Order by the OetbConfReleaseNbr column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfpodetlinenbr($order = Criteria::ASC) Order by the OetbConfPoDetLineNbr column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdetlinebinnbr($order = Criteria::ASC) Order by the OetbConfDetLineBinNbr column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfsplitbywhse($order = Criteria::ASC) Order by the OetbConfSplitByWhse column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3allowmultwhse($order = Criteria::ASC) Order by the OetbCon3AllowMultWhse column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfuseorigwhse($order = Criteria::ASC) Order by the OetbConfUseOrigWhse column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfuseesosingle($order = Criteria::ASC) Order by the OetbConfUseEsoSingle column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfcreatepo($order = Criteria::ASC) Order by the OetbConfCreatePo column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfbestprice($order = Criteria::ASC) Order by the OetbConfBestPrice column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfesobacktonew($order = Criteria::ASC) Order by the OetbConfEsoBackToNew column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfpickprintdrop($order = Criteria::ASC) Order by the OetbConfPickPrintDrop column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfwarnmultpo($order = Criteria::ASC) Order by the OetbConfWarnMultPo column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfalertitemquote($order = Criteria::ASC) Order by the OetbConfAlertItemQuote column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3askchgprcwqty($order = Criteria::ASC) Order by the OetbCon3AskChgPrcWQty column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3tenqtybrks($order = Criteria::ASC) Order by the OetbCon3TenQtyBrks column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdecordrpric($order = Criteria::ASC) Order by the OetbConfDecOrdrPric column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2provlostsales($order = Criteria::ASC) Order by the OetbCon2ProvLostSales column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2askreasoncode($order = Criteria::ASC) Order by the OetbCon2AskReasonCode column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2defreasoncode($order = Criteria::ASC) Order by the OetbCon2DefReasonCode column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2bordcntl($order = Criteria::ASC) Order by the OetbCon2BordCntl column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2defreabocode($order = Criteria::ASC) Order by the OetbCon2DefReaBoCode column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2numdayssavls($order = Criteria::ASC) Order by the OetbCon2NumDaysSavLs column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2callbacknotif($order = Criteria::ASC) Order by the OetbCon2CallBackNotif column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2defdayswhenin($order = Criteria::ASC) Order by the OetbCon2DefDaysWhenIn column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2addsubsls($order = Criteria::ASC) Order by the OetbCon2AddSubsLs column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2defreasubscode($order = Criteria::ASC) Order by the OetbCon2DefReaSubsCode column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2ordtypnorm($order = Criteria::ASC) Order by the OetbCon2OrdTypNorm column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2ordtyprep($order = Criteria::ASC) Order by the OetbCon2OrdTypRep column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2ordtypserv($order = Criteria::ASC) Order by the OetbCon2OrdTypServ column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2defordtyp($order = Criteria::ASC) Order by the OetbCon2DefOrdTyp column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfchgpric($order = Criteria::ASC) Order by the OetbConfChgPric column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2spordpricezero($order = Criteria::ASC) Order by the OetbCon2SpordPriceZero column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfinactpricezero($order = Criteria::ASC) Order by the OetbConfInactPriceZero column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2reseq($order = Criteria::ASC) Order by the OetbCon2Reseq column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2reseqby($order = Criteria::ASC) Order by the OetbCon2ReseqBy column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2minqtysales($order = Criteria::ASC) Order by the OetbCon2MinQtySales column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2chgorder($order = Criteria::ASC) Order by the OetbCon2ChgOrder column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2vercomp($order = Criteria::ASC) Order by the OetbCon2VerComp column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2prtinv($order = Criteria::ASC) Order by the OetbCon2PrtInv column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2dynamicpicktick($order = Criteria::ASC) Order by the OetbCon2DynamicPickTick column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2dynamicinvoice($order = Criteria::ASC) Order by the OetbCon2DynamicInvoice column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2edidefinvoice($order = Criteria::ASC) Order by the OetbCon2EdiDefInvoice column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2allowccpick($order = Criteria::ASC) Order by the OetbCon2AllowCcPick column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2autoccwind($order = Criteria::ASC) Order by the OetbCon2AutoCcWind column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2autoccupdate($order = Criteria::ASC) Order by the OetbCon2AutoCcUpdate column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2allowapvdccchg($order = Criteria::ASC) Order by the OetbCon2AllowApvdCcChg column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3apvdbckordclear($order = Criteria::ASC) Order by the OetbCon3ApvdBckordClear column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2polwhichcost($order = Criteria::ASC) Order by the OetbCon2PolWhichCost column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2revhazard($order = Criteria::ASC) Order by the OetbCon2RevHazard column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2showdisclist($order = Criteria::ASC) Order by the OetbCon2ShowDiscList column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2chglist($order = Criteria::ASC) Order by the OetbCon2ChgList column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2maillist($order = Criteria::ASC) Order by the OetbCon2MailList column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2nameformat($order = Criteria::ASC) Order by the OetbCon2NameFormat column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2mailidtype($order = Criteria::ASC) Order by the OetbCon2MailIdType column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2cashdrawerpswd($order = Criteria::ASC) Order by the OetbCon2CashDrawerPswd column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2upsonline($order = Criteria::ASC) Order by the OetbCon2UpsOnline column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2picorver($order = Criteria::ASC) Order by the OetbCon2PicOrVer column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2combback($order = Criteria::ASC) Order by the OetbCon2CombBack column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2frtallowamt($order = Criteria::ASC) Order by the OetbCon2FrtAllowAmt column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3shipmoreordered($order = Criteria::ASC) Order by the OetbCon3ShipMoreOrdered column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3warnshipmore($order = Criteria::ASC) Order by the OetbCon3WarnShipMore column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2usedept($order = Criteria::ASC) Order by the OetbCon2UseDept column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2usedivision($order = Criteria::ASC) Order by the OetbCon2UseDivision column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2defmfecode($order = Criteria::ASC) Order by the OetbCon2DefMfeCode column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2showavgcost($order = Criteria::ASC) Order by the OetbCon2ShowAvgCost column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2fedex($order = Criteria::ASC) Order by the OetbCon2FedEx column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3deffrghtgrup($order = Criteria::ASC) Order by the OetbCon3DefFrghtGrup column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3upsmysqldbname($order = Criteria::ASC) Order by the OetbCon3UpsMysqlDbname column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfuseoptcode($order = Criteria::ASC) Order by the OetbConfUseOptCode column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfscn4opt($order = Criteria::ASC) Order by the OetbConfScn4Opt column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2takenbyuse($order = Criteria::ASC) Order by the OetbCon2TakenByUse column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2takenbylogin($order = Criteria::ASC) Order by the OetbCon2TakenByLogin column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2takenbyforce($order = Criteria::ASC) Order by the OetbCon2TakenByForce column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2pickedbyuse($order = Criteria::ASC) Order by the OetbCon2PickedByUse column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2pickedbyforce($order = Criteria::ASC) Order by the OetbCon2PickedByForce column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2pickedbyproc($order = Criteria::ASC) Order by the OetbCon2PickedByProc column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2packedbyuse($order = Criteria::ASC) Order by the OetbCon2PackedByUse column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2packedbyforce($order = Criteria::ASC) Order by the OetbCon2PackedByForce column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2verifiedbyuse($order = Criteria::ASC) Order by the OetbCon2VerifiedByUse column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2verifiedbylogin($order = Criteria::ASC) Order by the OetbCon2VerifiedByLogin column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2verifiedbyforce($order = Criteria::ASC) Order by the OetbCon2VerifiedByForce column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfoptlabl1($order = Criteria::ASC) Order by the OetbConfOptLabl1 column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2ucode1force($order = Criteria::ASC) Order by the OetbCon2Ucode1Force column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfoptlabl2($order = Criteria::ASC) Order by the OetbConfOptLabl2 column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2ucode2force($order = Criteria::ASC) Order by the OetbCon2Ucode2Force column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfoptlabl3($order = Criteria::ASC) Order by the OetbConfOptLabl3 column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2ucode3force($order = Criteria::ASC) Order by the OetbCon2Ucode3Force column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfoptlabl4($order = Criteria::ASC) Order by the OetbConfOptLabl4 column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2ucode4force($order = Criteria::ASC) Order by the OetbCon2Ucode4Force column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfverifyafterpack($order = Criteria::ASC) Order by the OetbConfVerifyAfterPack column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfhistyrsback($order = Criteria::ASC) Order by the OetbConfHistYrsBack column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfrqstcatlg($order = Criteria::ASC) Order by the OetbConfRqstCatlg column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2conpick($order = Criteria::ASC) Order by the OetbCon2ConPick column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2allowpick($order = Criteria::ASC) Order by the OetbCon2AllowPick column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2combinesame($order = Criteria::ASC) Order by the OetbCon2CombineSame column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3autovernitems($order = Criteria::ASC) Order by the OetbCon3AutoVerNItems column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2allowzeroqty($order = Criteria::ASC) Order by the OetbCon2AllowZeroQty column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2allowinvalidwhse($order = Criteria::ASC) Order by the OetbCon2AllowInvalidWhse column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2showediinfo($order = Criteria::ASC) Order by the OetbCon2ShowEdiInfo column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2addonsales($order = Criteria::ASC) Order by the OetbCon2AddOnSales column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2forcedbkord($order = Criteria::ASC) Order by the OetbCon2ForcedBkord column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2updtprcdisc($order = Criteria::ASC) Order by the OetbCon2UpdtPrcDisc column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2autopack($order = Criteria::ASC) Order by the OetbCon2AutoPack column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2pickboprtzqts($order = Criteria::ASC) Order by the OetbCon2PickBoPrtZqts column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3pick00noship($order = Criteria::ASC) Order by the OetbCon3Pick00NoShip column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2standordlead($order = Criteria::ASC) Order by the OetbCon2StandOrdLead column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2standordamnt($order = Criteria::ASC) Order by the OetbCon2StandOrdAmnt column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2inactitemcntrl($order = Criteria::ASC) Order by the OetbCon2InactItemCntrl column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon2useitemref($order = Criteria::ASC) Order by the OetbCon2UseItemRef column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3upsnaftarecords($order = Criteria::ASC) Order by the OetbCon3UpsNaftaRecords column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdfltshipwhse($order = Criteria::ASC) Order by the OetbConfDfltShipWhse column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfdfltorigwhse($order = Criteria::ASC) Order by the OetbConfDfltOrigWhse column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfinvcwithpack($order = Criteria::ASC) Order by the OetbConfInvcWithPack column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfcarrycntrqty($order = Criteria::ASC) Order by the OetbConfCarryCntrQty column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3useordras($order = Criteria::ASC) Order by the OetbCon3UseOrdrAs column
 * @method     ChildConfigSalesOrderQuery orderByOetbconfuseordrsource($order = Criteria::ASC) Order by the OetbConfUseOrdrSource column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3ccprocessor($order = Criteria::ASC) Order by the OetbCon3CcProcessor column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3creditcardcap($order = Criteria::ASC) Order by the OetbCon3CreditCardCap column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3keyorcccap($order = Criteria::ASC) Order by the OetbCon3KeyOrCcCap column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3ccxoverlay($order = Criteria::ASC) Order by the OetbCon3CcXOverlay column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3cctimeout($order = Criteria::ASC) Order by the OetbCon3CcTimeOut column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3signaturecapture($order = Criteria::ASC) Order by the OetbCon3SignatureCapture column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3ccpreapproval($order = Criteria::ASC) Order by the OetbCon3CcPreapproval column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3forceccnbrentry($order = Criteria::ASC) Order by the OetbCon3ForceCcNbrEntry column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3intritemnotes($order = Criteria::ASC) Order by the OetbCon3IntrItemNotes column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3mtrcert($order = Criteria::ASC) Order by the OetbCon3MtrCert column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3cofccert($order = Criteria::ASC) Order by the OetbCon3CofcCert column
 * @method     ChildConfigSalesOrderQuery orderByDateupdtd($order = Criteria::ASC) Order by the DateUpdtd column
 * @method     ChildConfigSalesOrderQuery orderByTimeupdtd($order = Criteria::ASC) Order by the TimeUpdtd column
 * @method     ChildConfigSalesOrderQuery orderByDummy($order = Criteria::ASC) Order by the dummy column
 *
 * @method     ChildConfigSalesOrderQuery groupByOetbconfkey() Group by the OetbConfKey column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfglifac() Group by the OetbConfGlIfac column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfinifac() Group by the OetbConfInIfac column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfrelivty() Group by the OetbConfRelIvty column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfuseordrnbr() Group by the OetbConfUseOrdrNbr column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdefrqstdate() Group by the OetbConfDefRqstDate column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfusecancdate() Group by the OetbConfUseCancDate column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfshowsp() Group by the OetbConfShowSp column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfjrnlsort() Group by the OetbConfJrnlSort column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfuseprepsoopt() Group by the OetbConfUsePrepSoOpt column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdispbillto() Group by the OetbConfDispBillTo column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfslctflm() Group by the OetbConfSlctFlm column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3usestockpull() Group by the OetbCon3UseStockPull column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfqtytoship() Group by the OetbConfQtyToShip column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfqtytoshipdef() Group by the OetbConfQtyToShipDef column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdfltordrqty() Group by the OetbConfDfltOrdrQty column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfallocqtytoship() Group by the OetbConfAllocQtyToShip column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfoverallocqts() Group by the OetbConfOverAllocQts column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3completelotbin() Group by the OetbCon3CompleteLotBin column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3rqtsopt() Group by the OetbCon3RqtsOpt column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2shipcomphold() Group by the OetbCon2ShipCompHold column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3usesaleforecast() Group by the OetbCon3UseSaleForecast column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfverfstopneg() Group by the OetbConfVerfStopNeg column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfverfaudtrept() Group by the OetbConfVerfAudtRept column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfagelevldisp() Group by the OetbConfAgeLevlDisp column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfagealltime() Group by the OetbConfAgeAllTime column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfageathold() Group by the OetbConfAgeAtHold column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfshowatlevl() Group by the OetbConfShowAtLevl column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfshowitem() Group by the OetbConfShowItem column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfstoppnt() Group by the OetbConfStopPnt column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfpricwind() Group by the OetbConfPricWind column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfshowcost() Group by the OetbConfShowCost column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfcosttouse() Group by the OetbConfCostToUse column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfshowmarg() Group by the OetbConfShowMarg column
 * @method     ChildConfigSalesOrderQuery groupByOetbconffxoe() Group by the OetbConfFxOe column
 * @method     ChildConfigSalesOrderQuery groupByOetbconffxinv() Group by the OetbConfFxInv column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdispvia() Group by the OetbConfDispVia column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdispcaseqty() Group by the OetbConfDispCaseQty column
 * @method     ChildConfigSalesOrderQuery groupByOetbconffrtin() Group by the OetbConfFrtIn column
 * @method     ChildConfigSalesOrderQuery groupByOetbconffrtinglacct() Group by the OetbConfFrtInGlAcct column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfmincharge() Group by the OetbConfMinCharge column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfminchrgglacct() Group by the OetbConfMinChrgGlAcct column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdropshipchrg() Group by the OetbConfDropShipChrg column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdropshpglacct() Group by the OetbConfDropShpGlAcct column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfnontaxcustcode() Group by the OetbConfNonTaxCustCode column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfhstaxid() Group by the OetbConfHsTaxId column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfhsfrtid() Group by the OetbConfHsFrtId column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfhsmiscid() Group by the OetbConfHsMiscId column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2hscusdid() Group by the OetbCon2HsCusdId column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3hsfrtinid() Group by the OetbCon3HsFrtInId column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3hsdropid() Group by the OetbCon3HsDropId column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3hsminordid() Group by the OetbCon3HsMinordId column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfheadgetdef() Group by the OetbConfHeadGetDef column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfitemgetdef() Group by the OetbConfItemGetDef column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfautogetcust() Group by the OetbConfAutoGetCust column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3autogetitem() Group by the OetbCon3AutoGetItem column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfrqstheaddtl() Group by the OetbConfRqstHeadDtl column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfcancheaddtl() Group by the OetbConfCancHeadDtl column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfuseinvcasship() Group by the OetbConfUseInvcAsShip column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3usearrvdate() Group by the OetbCon3UseArrvDate column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfseparatecred() Group by the OetbConfSeparateCred column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3applycredits() Group by the OetbCon3ApplyCredits column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfwarnnotnew() Group by the OetbConfWarnNotNew column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfwarnbotozero() Group by the OetbConfWarnBoToZero column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2providerouting() Group by the OetbCon2ProvideRouting column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2srtrtbyrqstdte() Group by the OetbCon2SrtRtByRqstDte column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfusesoreview() Group by the OetbConfUseSoReview column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfpicknotedef() Group by the OetbConfPickNoteDef column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfpacknotedef() Group by the OetbConfPackNoteDef column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfpicksort() Group by the OetbConfPickSort column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfpacksort() Group by the OetbConfPackSort column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfprtpriconly() Group by the OetbConfPrtPricOnly column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfprtneg() Group by the OetbConfPrtNeg column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2prtpackageinfo() Group by the OetbCon2PrtPackageInfo column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2innerpacklabel() Group by the OetbCon2InnerPackLabel column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2outerpacklabel() Group by the OetbCon2OuterPackLabel column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2shiptarelabel() Group by the OetbCon2ShipTareLabel column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfprtpick() Group by the OetbConfPrtPick column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfpicprioseq() Group by the OetbConfPicPrioSeq column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfprtpack() Group by the OetbConfPrtPack column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfprtinv() Group by the OetbConfPrtInv column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2prtcredmemo() Group by the OetbCon2PrtCredMemo column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfcrntdate() Group by the OetbConfCrntDate column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfmarkpicked() Group by the OetbConfMarkPicked column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfshowunavail() Group by the OetbConfShowUnavail column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdecplaces() Group by the OetbConfDecPlaces column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfwarndup() Group by the OetbConfWarnDup column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdefpick() Group by the OetbConfDefPick column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdefpack() Group by the OetbConfDefPack column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdefinvc() Group by the OetbConfDefInvc column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdefack() Group by the OetbConfDefAck column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfacksortopt() Group by the OetbConfAckSortOpt column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfreleasenbr() Group by the OetbConfReleaseNbr column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfpodetlinenbr() Group by the OetbConfPoDetLineNbr column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdetlinebinnbr() Group by the OetbConfDetLineBinNbr column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfsplitbywhse() Group by the OetbConfSplitByWhse column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3allowmultwhse() Group by the OetbCon3AllowMultWhse column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfuseorigwhse() Group by the OetbConfUseOrigWhse column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfuseesosingle() Group by the OetbConfUseEsoSingle column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfcreatepo() Group by the OetbConfCreatePo column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfbestprice() Group by the OetbConfBestPrice column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfesobacktonew() Group by the OetbConfEsoBackToNew column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfpickprintdrop() Group by the OetbConfPickPrintDrop column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfwarnmultpo() Group by the OetbConfWarnMultPo column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfalertitemquote() Group by the OetbConfAlertItemQuote column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3askchgprcwqty() Group by the OetbCon3AskChgPrcWQty column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3tenqtybrks() Group by the OetbCon3TenQtyBrks column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdecordrpric() Group by the OetbConfDecOrdrPric column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2provlostsales() Group by the OetbCon2ProvLostSales column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2askreasoncode() Group by the OetbCon2AskReasonCode column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2defreasoncode() Group by the OetbCon2DefReasonCode column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2bordcntl() Group by the OetbCon2BordCntl column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2defreabocode() Group by the OetbCon2DefReaBoCode column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2numdayssavls() Group by the OetbCon2NumDaysSavLs column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2callbacknotif() Group by the OetbCon2CallBackNotif column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2defdayswhenin() Group by the OetbCon2DefDaysWhenIn column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2addsubsls() Group by the OetbCon2AddSubsLs column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2defreasubscode() Group by the OetbCon2DefReaSubsCode column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2ordtypnorm() Group by the OetbCon2OrdTypNorm column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2ordtyprep() Group by the OetbCon2OrdTypRep column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2ordtypserv() Group by the OetbCon2OrdTypServ column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2defordtyp() Group by the OetbCon2DefOrdTyp column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfchgpric() Group by the OetbConfChgPric column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2spordpricezero() Group by the OetbCon2SpordPriceZero column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfinactpricezero() Group by the OetbConfInactPriceZero column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2reseq() Group by the OetbCon2Reseq column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2reseqby() Group by the OetbCon2ReseqBy column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2minqtysales() Group by the OetbCon2MinQtySales column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2chgorder() Group by the OetbCon2ChgOrder column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2vercomp() Group by the OetbCon2VerComp column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2prtinv() Group by the OetbCon2PrtInv column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2dynamicpicktick() Group by the OetbCon2DynamicPickTick column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2dynamicinvoice() Group by the OetbCon2DynamicInvoice column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2edidefinvoice() Group by the OetbCon2EdiDefInvoice column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2allowccpick() Group by the OetbCon2AllowCcPick column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2autoccwind() Group by the OetbCon2AutoCcWind column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2autoccupdate() Group by the OetbCon2AutoCcUpdate column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2allowapvdccchg() Group by the OetbCon2AllowApvdCcChg column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3apvdbckordclear() Group by the OetbCon3ApvdBckordClear column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2polwhichcost() Group by the OetbCon2PolWhichCost column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2revhazard() Group by the OetbCon2RevHazard column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2showdisclist() Group by the OetbCon2ShowDiscList column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2chglist() Group by the OetbCon2ChgList column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2maillist() Group by the OetbCon2MailList column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2nameformat() Group by the OetbCon2NameFormat column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2mailidtype() Group by the OetbCon2MailIdType column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2cashdrawerpswd() Group by the OetbCon2CashDrawerPswd column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2upsonline() Group by the OetbCon2UpsOnline column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2picorver() Group by the OetbCon2PicOrVer column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2combback() Group by the OetbCon2CombBack column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2frtallowamt() Group by the OetbCon2FrtAllowAmt column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3shipmoreordered() Group by the OetbCon3ShipMoreOrdered column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3warnshipmore() Group by the OetbCon3WarnShipMore column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2usedept() Group by the OetbCon2UseDept column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2usedivision() Group by the OetbCon2UseDivision column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2defmfecode() Group by the OetbCon2DefMfeCode column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2showavgcost() Group by the OetbCon2ShowAvgCost column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2fedex() Group by the OetbCon2FedEx column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3deffrghtgrup() Group by the OetbCon3DefFrghtGrup column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3upsmysqldbname() Group by the OetbCon3UpsMysqlDbname column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfuseoptcode() Group by the OetbConfUseOptCode column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfscn4opt() Group by the OetbConfScn4Opt column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2takenbyuse() Group by the OetbCon2TakenByUse column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2takenbylogin() Group by the OetbCon2TakenByLogin column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2takenbyforce() Group by the OetbCon2TakenByForce column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2pickedbyuse() Group by the OetbCon2PickedByUse column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2pickedbyforce() Group by the OetbCon2PickedByForce column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2pickedbyproc() Group by the OetbCon2PickedByProc column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2packedbyuse() Group by the OetbCon2PackedByUse column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2packedbyforce() Group by the OetbCon2PackedByForce column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2verifiedbyuse() Group by the OetbCon2VerifiedByUse column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2verifiedbylogin() Group by the OetbCon2VerifiedByLogin column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2verifiedbyforce() Group by the OetbCon2VerifiedByForce column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfoptlabl1() Group by the OetbConfOptLabl1 column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2ucode1force() Group by the OetbCon2Ucode1Force column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfoptlabl2() Group by the OetbConfOptLabl2 column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2ucode2force() Group by the OetbCon2Ucode2Force column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfoptlabl3() Group by the OetbConfOptLabl3 column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2ucode3force() Group by the OetbCon2Ucode3Force column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfoptlabl4() Group by the OetbConfOptLabl4 column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2ucode4force() Group by the OetbCon2Ucode4Force column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfverifyafterpack() Group by the OetbConfVerifyAfterPack column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfhistyrsback() Group by the OetbConfHistYrsBack column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfrqstcatlg() Group by the OetbConfRqstCatlg column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2conpick() Group by the OetbCon2ConPick column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2allowpick() Group by the OetbCon2AllowPick column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2combinesame() Group by the OetbCon2CombineSame column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3autovernitems() Group by the OetbCon3AutoVerNItems column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2allowzeroqty() Group by the OetbCon2AllowZeroQty column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2allowinvalidwhse() Group by the OetbCon2AllowInvalidWhse column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2showediinfo() Group by the OetbCon2ShowEdiInfo column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2addonsales() Group by the OetbCon2AddOnSales column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2forcedbkord() Group by the OetbCon2ForcedBkord column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2updtprcdisc() Group by the OetbCon2UpdtPrcDisc column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2autopack() Group by the OetbCon2AutoPack column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2pickboprtzqts() Group by the OetbCon2PickBoPrtZqts column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3pick00noship() Group by the OetbCon3Pick00NoShip column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2standordlead() Group by the OetbCon2StandOrdLead column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2standordamnt() Group by the OetbCon2StandOrdAmnt column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2inactitemcntrl() Group by the OetbCon2InactItemCntrl column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon2useitemref() Group by the OetbCon2UseItemRef column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3upsnaftarecords() Group by the OetbCon3UpsNaftaRecords column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdfltshipwhse() Group by the OetbConfDfltShipWhse column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfdfltorigwhse() Group by the OetbConfDfltOrigWhse column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfinvcwithpack() Group by the OetbConfInvcWithPack column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfcarrycntrqty() Group by the OetbConfCarryCntrQty column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3useordras() Group by the OetbCon3UseOrdrAs column
 * @method     ChildConfigSalesOrderQuery groupByOetbconfuseordrsource() Group by the OetbConfUseOrdrSource column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3ccprocessor() Group by the OetbCon3CcProcessor column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3creditcardcap() Group by the OetbCon3CreditCardCap column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3keyorcccap() Group by the OetbCon3KeyOrCcCap column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3ccxoverlay() Group by the OetbCon3CcXOverlay column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3cctimeout() Group by the OetbCon3CcTimeOut column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3signaturecapture() Group by the OetbCon3SignatureCapture column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3ccpreapproval() Group by the OetbCon3CcPreapproval column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3forceccnbrentry() Group by the OetbCon3ForceCcNbrEntry column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3intritemnotes() Group by the OetbCon3IntrItemNotes column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3mtrcert() Group by the OetbCon3MtrCert column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3cofccert() Group by the OetbCon3CofcCert column
 * @method     ChildConfigSalesOrderQuery groupByDateupdtd() Group by the DateUpdtd column
 * @method     ChildConfigSalesOrderQuery groupByTimeupdtd() Group by the TimeUpdtd column
 * @method     ChildConfigSalesOrderQuery groupByDummy() Group by the dummy column
 *
 * @method     ChildConfigSalesOrderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildConfigSalesOrderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildConfigSalesOrderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildConfigSalesOrderQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildConfigSalesOrderQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildConfigSalesOrderQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildConfigSalesOrder findOne(ConnectionInterface $con = null) Return the first ChildConfigSalesOrder matching the query
 * @method     ChildConfigSalesOrder findOneOrCreate(ConnectionInterface $con = null) Return the first ChildConfigSalesOrder matching the query, or a new ChildConfigSalesOrder object populated from the query conditions when no match is found
 *
 * @method     ChildConfigSalesOrder findOneByOetbconfkey(int $OetbConfKey) Return the first ChildConfigSalesOrder filtered by the OetbConfKey column
 * @method     ChildConfigSalesOrder findOneByOetbconfglifac(string $OetbConfGlIfac) Return the first ChildConfigSalesOrder filtered by the OetbConfGlIfac column
 * @method     ChildConfigSalesOrder findOneByOetbconfinifac(string $OetbConfInIfac) Return the first ChildConfigSalesOrder filtered by the OetbConfInIfac column
 * @method     ChildConfigSalesOrder findOneByOetbconfrelivty(string $OetbConfRelIvty) Return the first ChildConfigSalesOrder filtered by the OetbConfRelIvty column
 * @method     ChildConfigSalesOrder findOneByOetbconfuseordrnbr(string $OetbConfUseOrdrNbr) Return the first ChildConfigSalesOrder filtered by the OetbConfUseOrdrNbr column
 * @method     ChildConfigSalesOrder findOneByOetbconfdefrqstdate(string $OetbConfDefRqstDate) Return the first ChildConfigSalesOrder filtered by the OetbConfDefRqstDate column
 * @method     ChildConfigSalesOrder findOneByOetbconfusecancdate(string $OetbConfUseCancDate) Return the first ChildConfigSalesOrder filtered by the OetbConfUseCancDate column
 * @method     ChildConfigSalesOrder findOneByOetbconfshowsp(string $OetbConfShowSp) Return the first ChildConfigSalesOrder filtered by the OetbConfShowSp column
 * @method     ChildConfigSalesOrder findOneByOetbconfjrnlsort(int $OetbConfJrnlSort) Return the first ChildConfigSalesOrder filtered by the OetbConfJrnlSort column
 * @method     ChildConfigSalesOrder findOneByOetbconfuseprepsoopt(string $OetbConfUsePrepSoOpt) Return the first ChildConfigSalesOrder filtered by the OetbConfUsePrepSoOpt column
 * @method     ChildConfigSalesOrder findOneByOetbconfdispbillto(string $OetbConfDispBillTo) Return the first ChildConfigSalesOrder filtered by the OetbConfDispBillTo column
 * @method     ChildConfigSalesOrder findOneByOetbconfslctflm(string $OetbConfSlctFlm) Return the first ChildConfigSalesOrder filtered by the OetbConfSlctFlm column
 * @method     ChildConfigSalesOrder findOneByOetbcon3usestockpull(string $OetbCon3UseStockPull) Return the first ChildConfigSalesOrder filtered by the OetbCon3UseStockPull column
 * @method     ChildConfigSalesOrder findOneByOetbconfqtytoship(string $OetbConfQtyToShip) Return the first ChildConfigSalesOrder filtered by the OetbConfQtyToShip column
 * @method     ChildConfigSalesOrder findOneByOetbconfqtytoshipdef(string $OetbConfQtyToShipDef) Return the first ChildConfigSalesOrder filtered by the OetbConfQtyToShipDef column
 * @method     ChildConfigSalesOrder findOneByOetbconfdfltordrqty(string $OetbConfDfltOrdrQty) Return the first ChildConfigSalesOrder filtered by the OetbConfDfltOrdrQty column
 * @method     ChildConfigSalesOrder findOneByOetbconfallocqtytoship(string $OetbConfAllocQtyToShip) Return the first ChildConfigSalesOrder filtered by the OetbConfAllocQtyToShip column
 * @method     ChildConfigSalesOrder findOneByOetbconfoverallocqts(string $OetbConfOverAllocQts) Return the first ChildConfigSalesOrder filtered by the OetbConfOverAllocQts column
 * @method     ChildConfigSalesOrder findOneByOetbcon3completelotbin(string $OetbCon3CompleteLotBin) Return the first ChildConfigSalesOrder filtered by the OetbCon3CompleteLotBin column
 * @method     ChildConfigSalesOrder findOneByOetbcon3rqtsopt(string $OetbCon3RqtsOpt) Return the first ChildConfigSalesOrder filtered by the OetbCon3RqtsOpt column
 * @method     ChildConfigSalesOrder findOneByOetbcon2shipcomphold(int $OetbCon2ShipCompHold) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShipCompHold column
 * @method     ChildConfigSalesOrder findOneByOetbcon3usesaleforecast(string $OetbCon3UseSaleForecast) Return the first ChildConfigSalesOrder filtered by the OetbCon3UseSaleForecast column
 * @method     ChildConfigSalesOrder findOneByOetbconfverfstopneg(string $OetbConfVerfStopNeg) Return the first ChildConfigSalesOrder filtered by the OetbConfVerfStopNeg column
 * @method     ChildConfigSalesOrder findOneByOetbconfverfaudtrept(string $OetbConfVerfAudtRept) Return the first ChildConfigSalesOrder filtered by the OetbConfVerfAudtRept column
 * @method     ChildConfigSalesOrder findOneByOetbconfagelevldisp(string $OetbConfAgeLevlDisp) Return the first ChildConfigSalesOrder filtered by the OetbConfAgeLevlDisp column
 * @method     ChildConfigSalesOrder findOneByOetbconfagealltime(string $OetbConfAgeAllTime) Return the first ChildConfigSalesOrder filtered by the OetbConfAgeAllTime column
 * @method     ChildConfigSalesOrder findOneByOetbconfageathold(string $OetbConfAgeAtHold) Return the first ChildConfigSalesOrder filtered by the OetbConfAgeAtHold column
 * @method     ChildConfigSalesOrder findOneByOetbconfshowatlevl(string $OetbConfShowAtLevl) Return the first ChildConfigSalesOrder filtered by the OetbConfShowAtLevl column
 * @method     ChildConfigSalesOrder findOneByOetbconfshowitem(string $OetbConfShowItem) Return the first ChildConfigSalesOrder filtered by the OetbConfShowItem column
 * @method     ChildConfigSalesOrder findOneByOetbconfstoppnt(string $OetbConfStopPnt) Return the first ChildConfigSalesOrder filtered by the OetbConfStopPnt column
 * @method     ChildConfigSalesOrder findOneByOetbconfpricwind(string $OetbConfPricWind) Return the first ChildConfigSalesOrder filtered by the OetbConfPricWind column
 * @method     ChildConfigSalesOrder findOneByOetbconfshowcost(string $OetbConfShowCost) Return the first ChildConfigSalesOrder filtered by the OetbConfShowCost column
 * @method     ChildConfigSalesOrder findOneByOetbconfcosttouse(string $OetbConfCostToUse) Return the first ChildConfigSalesOrder filtered by the OetbConfCostToUse column
 * @method     ChildConfigSalesOrder findOneByOetbconfshowmarg(string $OetbConfShowMarg) Return the first ChildConfigSalesOrder filtered by the OetbConfShowMarg column
 * @method     ChildConfigSalesOrder findOneByOetbconffxoe(string $OetbConfFxOe) Return the first ChildConfigSalesOrder filtered by the OetbConfFxOe column
 * @method     ChildConfigSalesOrder findOneByOetbconffxinv(string $OetbConfFxInv) Return the first ChildConfigSalesOrder filtered by the OetbConfFxInv column
 * @method     ChildConfigSalesOrder findOneByOetbconfdispvia(string $OetbConfDispVia) Return the first ChildConfigSalesOrder filtered by the OetbConfDispVia column
 * @method     ChildConfigSalesOrder findOneByOetbconfdispcaseqty(string $OetbConfDispCaseQty) Return the first ChildConfigSalesOrder filtered by the OetbConfDispCaseQty column
 * @method     ChildConfigSalesOrder findOneByOetbconffrtin(string $OetbConfFrtIn) Return the first ChildConfigSalesOrder filtered by the OetbConfFrtIn column
 * @method     ChildConfigSalesOrder findOneByOetbconffrtinglacct(string $OetbConfFrtInGlAcct) Return the first ChildConfigSalesOrder filtered by the OetbConfFrtInGlAcct column
 * @method     ChildConfigSalesOrder findOneByOetbconfmincharge(string $OetbConfMinCharge) Return the first ChildConfigSalesOrder filtered by the OetbConfMinCharge column
 * @method     ChildConfigSalesOrder findOneByOetbconfminchrgglacct(string $OetbConfMinChrgGlAcct) Return the first ChildConfigSalesOrder filtered by the OetbConfMinChrgGlAcct column
 * @method     ChildConfigSalesOrder findOneByOetbconfdropshipchrg(string $OetbConfDropShipChrg) Return the first ChildConfigSalesOrder filtered by the OetbConfDropShipChrg column
 * @method     ChildConfigSalesOrder findOneByOetbconfdropshpglacct(string $OetbConfDropShpGlAcct) Return the first ChildConfigSalesOrder filtered by the OetbConfDropShpGlAcct column
 * @method     ChildConfigSalesOrder findOneByOetbconfnontaxcustcode(string $OetbConfNonTaxCustCode) Return the first ChildConfigSalesOrder filtered by the OetbConfNonTaxCustCode column
 * @method     ChildConfigSalesOrder findOneByOetbconfhstaxid(string $OetbConfHsTaxId) Return the first ChildConfigSalesOrder filtered by the OetbConfHsTaxId column
 * @method     ChildConfigSalesOrder findOneByOetbconfhsfrtid(string $OetbConfHsFrtId) Return the first ChildConfigSalesOrder filtered by the OetbConfHsFrtId column
 * @method     ChildConfigSalesOrder findOneByOetbconfhsmiscid(string $OetbConfHsMiscId) Return the first ChildConfigSalesOrder filtered by the OetbConfHsMiscId column
 * @method     ChildConfigSalesOrder findOneByOetbcon2hscusdid(string $OetbCon2HsCusdId) Return the first ChildConfigSalesOrder filtered by the OetbCon2HsCusdId column
 * @method     ChildConfigSalesOrder findOneByOetbcon3hsfrtinid(string $OetbCon3HsFrtInId) Return the first ChildConfigSalesOrder filtered by the OetbCon3HsFrtInId column
 * @method     ChildConfigSalesOrder findOneByOetbcon3hsdropid(string $OetbCon3HsDropId) Return the first ChildConfigSalesOrder filtered by the OetbCon3HsDropId column
 * @method     ChildConfigSalesOrder findOneByOetbcon3hsminordid(string $OetbCon3HsMinordId) Return the first ChildConfigSalesOrder filtered by the OetbCon3HsMinordId column
 * @method     ChildConfigSalesOrder findOneByOetbconfheadgetdef(string $OetbConfHeadGetDef) Return the first ChildConfigSalesOrder filtered by the OetbConfHeadGetDef column
 * @method     ChildConfigSalesOrder findOneByOetbconfitemgetdef(string $OetbConfItemGetDef) Return the first ChildConfigSalesOrder filtered by the OetbConfItemGetDef column
 * @method     ChildConfigSalesOrder findOneByOetbconfautogetcust(string $OetbConfAutoGetCust) Return the first ChildConfigSalesOrder filtered by the OetbConfAutoGetCust column
 * @method     ChildConfigSalesOrder findOneByOetbcon3autogetitem(string $OetbCon3AutoGetItem) Return the first ChildConfigSalesOrder filtered by the OetbCon3AutoGetItem column
 * @method     ChildConfigSalesOrder findOneByOetbconfrqstheaddtl(string $OetbConfRqstHeadDtl) Return the first ChildConfigSalesOrder filtered by the OetbConfRqstHeadDtl column
 * @method     ChildConfigSalesOrder findOneByOetbconfcancheaddtl(string $OetbConfCancHeadDtl) Return the first ChildConfigSalesOrder filtered by the OetbConfCancHeadDtl column
 * @method     ChildConfigSalesOrder findOneByOetbconfuseinvcasship(string $OetbConfUseInvcAsShip) Return the first ChildConfigSalesOrder filtered by the OetbConfUseInvcAsShip column
 * @method     ChildConfigSalesOrder findOneByOetbcon3usearrvdate(string $OetbCon3UseArrvDate) Return the first ChildConfigSalesOrder filtered by the OetbCon3UseArrvDate column
 * @method     ChildConfigSalesOrder findOneByOetbconfseparatecred(string $OetbConfSeparateCred) Return the first ChildConfigSalesOrder filtered by the OetbConfSeparateCred column
 * @method     ChildConfigSalesOrder findOneByOetbcon3applycredits(string $OetbCon3ApplyCredits) Return the first ChildConfigSalesOrder filtered by the OetbCon3ApplyCredits column
 * @method     ChildConfigSalesOrder findOneByOetbconfwarnnotnew(string $OetbConfWarnNotNew) Return the first ChildConfigSalesOrder filtered by the OetbConfWarnNotNew column
 * @method     ChildConfigSalesOrder findOneByOetbconfwarnbotozero(string $OetbConfWarnBoToZero) Return the first ChildConfigSalesOrder filtered by the OetbConfWarnBoToZero column
 * @method     ChildConfigSalesOrder findOneByOetbcon2providerouting(string $OetbCon2ProvideRouting) Return the first ChildConfigSalesOrder filtered by the OetbCon2ProvideRouting column
 * @method     ChildConfigSalesOrder findOneByOetbcon2srtrtbyrqstdte(string $OetbCon2SrtRtByRqstDte) Return the first ChildConfigSalesOrder filtered by the OetbCon2SrtRtByRqstDte column
 * @method     ChildConfigSalesOrder findOneByOetbconfusesoreview(string $OetbConfUseSoReview) Return the first ChildConfigSalesOrder filtered by the OetbConfUseSoReview column
 * @method     ChildConfigSalesOrder findOneByOetbconfpicknotedef(string $OetbConfPickNoteDef) Return the first ChildConfigSalesOrder filtered by the OetbConfPickNoteDef column
 * @method     ChildConfigSalesOrder findOneByOetbconfpacknotedef(string $OetbConfPackNoteDef) Return the first ChildConfigSalesOrder filtered by the OetbConfPackNoteDef column
 * @method     ChildConfigSalesOrder findOneByOetbconfpicksort(string $OetbConfPickSort) Return the first ChildConfigSalesOrder filtered by the OetbConfPickSort column
 * @method     ChildConfigSalesOrder findOneByOetbconfpacksort(string $OetbConfPackSort) Return the first ChildConfigSalesOrder filtered by the OetbConfPackSort column
 * @method     ChildConfigSalesOrder findOneByOetbconfprtpriconly(string $OetbConfPrtPricOnly) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtPricOnly column
 * @method     ChildConfigSalesOrder findOneByOetbconfprtneg(string $OetbConfPrtNeg) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtNeg column
 * @method     ChildConfigSalesOrder findOneByOetbcon2prtpackageinfo(string $OetbCon2PrtPackageInfo) Return the first ChildConfigSalesOrder filtered by the OetbCon2PrtPackageInfo column
 * @method     ChildConfigSalesOrder findOneByOetbcon2innerpacklabel(string $OetbCon2InnerPackLabel) Return the first ChildConfigSalesOrder filtered by the OetbCon2InnerPackLabel column
 * @method     ChildConfigSalesOrder findOneByOetbcon2outerpacklabel(string $OetbCon2OuterPackLabel) Return the first ChildConfigSalesOrder filtered by the OetbCon2OuterPackLabel column
 * @method     ChildConfigSalesOrder findOneByOetbcon2shiptarelabel(string $OetbCon2ShipTareLabel) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShipTareLabel column
 * @method     ChildConfigSalesOrder findOneByOetbconfprtpick(string $OetbConfPrtPick) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtPick column
 * @method     ChildConfigSalesOrder findOneByOetbconfpicprioseq(string $OetbConfPicPrioSeq) Return the first ChildConfigSalesOrder filtered by the OetbConfPicPrioSeq column
 * @method     ChildConfigSalesOrder findOneByOetbconfprtpack(string $OetbConfPrtPack) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtPack column
 * @method     ChildConfigSalesOrder findOneByOetbconfprtinv(string $OetbConfPrtInv) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtInv column
 * @method     ChildConfigSalesOrder findOneByOetbcon2prtcredmemo(string $OetbCon2PrtCredMemo) Return the first ChildConfigSalesOrder filtered by the OetbCon2PrtCredMemo column
 * @method     ChildConfigSalesOrder findOneByOetbconfcrntdate(string $OetbConfCrntDate) Return the first ChildConfigSalesOrder filtered by the OetbConfCrntDate column
 * @method     ChildConfigSalesOrder findOneByOetbconfmarkpicked(string $OetbConfMarkPicked) Return the first ChildConfigSalesOrder filtered by the OetbConfMarkPicked column
 * @method     ChildConfigSalesOrder findOneByOetbconfshowunavail(string $OetbConfShowUnavail) Return the first ChildConfigSalesOrder filtered by the OetbConfShowUnavail column
 * @method     ChildConfigSalesOrder findOneByOetbconfdecplaces(int $OetbConfDecPlaces) Return the first ChildConfigSalesOrder filtered by the OetbConfDecPlaces column
 * @method     ChildConfigSalesOrder findOneByOetbconfwarndup(string $OetbConfWarnDup) Return the first ChildConfigSalesOrder filtered by the OetbConfWarnDup column
 * @method     ChildConfigSalesOrder findOneByOetbconfdefpick(string $OetbConfDefPick) Return the first ChildConfigSalesOrder filtered by the OetbConfDefPick column
 * @method     ChildConfigSalesOrder findOneByOetbconfdefpack(string $OetbConfDefPack) Return the first ChildConfigSalesOrder filtered by the OetbConfDefPack column
 * @method     ChildConfigSalesOrder findOneByOetbconfdefinvc(string $OetbConfDefInvc) Return the first ChildConfigSalesOrder filtered by the OetbConfDefInvc column
 * @method     ChildConfigSalesOrder findOneByOetbconfdefack(string $OetbConfDefAck) Return the first ChildConfigSalesOrder filtered by the OetbConfDefAck column
 * @method     ChildConfigSalesOrder findOneByOetbconfacksortopt(string $OetbConfAckSortOpt) Return the first ChildConfigSalesOrder filtered by the OetbConfAckSortOpt column
 * @method     ChildConfigSalesOrder findOneByOetbconfreleasenbr(string $OetbConfReleaseNbr) Return the first ChildConfigSalesOrder filtered by the OetbConfReleaseNbr column
 * @method     ChildConfigSalesOrder findOneByOetbconfpodetlinenbr(string $OetbConfPoDetLineNbr) Return the first ChildConfigSalesOrder filtered by the OetbConfPoDetLineNbr column
 * @method     ChildConfigSalesOrder findOneByOetbconfdetlinebinnbr(string $OetbConfDetLineBinNbr) Return the first ChildConfigSalesOrder filtered by the OetbConfDetLineBinNbr column
 * @method     ChildConfigSalesOrder findOneByOetbconfsplitbywhse(string $OetbConfSplitByWhse) Return the first ChildConfigSalesOrder filtered by the OetbConfSplitByWhse column
 * @method     ChildConfigSalesOrder findOneByOetbcon3allowmultwhse(string $OetbCon3AllowMultWhse) Return the first ChildConfigSalesOrder filtered by the OetbCon3AllowMultWhse column
 * @method     ChildConfigSalesOrder findOneByOetbconfuseorigwhse(string $OetbConfUseOrigWhse) Return the first ChildConfigSalesOrder filtered by the OetbConfUseOrigWhse column
 * @method     ChildConfigSalesOrder findOneByOetbconfuseesosingle(string $OetbConfUseEsoSingle) Return the first ChildConfigSalesOrder filtered by the OetbConfUseEsoSingle column
 * @method     ChildConfigSalesOrder findOneByOetbconfcreatepo(string $OetbConfCreatePo) Return the first ChildConfigSalesOrder filtered by the OetbConfCreatePo column
 * @method     ChildConfigSalesOrder findOneByOetbconfbestprice(string $OetbConfBestPrice) Return the first ChildConfigSalesOrder filtered by the OetbConfBestPrice column
 * @method     ChildConfigSalesOrder findOneByOetbconfesobacktonew(string $OetbConfEsoBackToNew) Return the first ChildConfigSalesOrder filtered by the OetbConfEsoBackToNew column
 * @method     ChildConfigSalesOrder findOneByOetbconfpickprintdrop(string $OetbConfPickPrintDrop) Return the first ChildConfigSalesOrder filtered by the OetbConfPickPrintDrop column
 * @method     ChildConfigSalesOrder findOneByOetbconfwarnmultpo(string $OetbConfWarnMultPo) Return the first ChildConfigSalesOrder filtered by the OetbConfWarnMultPo column
 * @method     ChildConfigSalesOrder findOneByOetbconfalertitemquote(string $OetbConfAlertItemQuote) Return the first ChildConfigSalesOrder filtered by the OetbConfAlertItemQuote column
 * @method     ChildConfigSalesOrder findOneByOetbcon3askchgprcwqty(string $OetbCon3AskChgPrcWQty) Return the first ChildConfigSalesOrder filtered by the OetbCon3AskChgPrcWQty column
 * @method     ChildConfigSalesOrder findOneByOetbcon3tenqtybrks(string $OetbCon3TenQtyBrks) Return the first ChildConfigSalesOrder filtered by the OetbCon3TenQtyBrks column
 * @method     ChildConfigSalesOrder findOneByOetbconfdecordrpric(int $OetbConfDecOrdrPric) Return the first ChildConfigSalesOrder filtered by the OetbConfDecOrdrPric column
 * @method     ChildConfigSalesOrder findOneByOetbcon2provlostsales(string $OetbCon2ProvLostSales) Return the first ChildConfigSalesOrder filtered by the OetbCon2ProvLostSales column
 * @method     ChildConfigSalesOrder findOneByOetbcon2askreasoncode(string $OetbCon2AskReasonCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2AskReasonCode column
 * @method     ChildConfigSalesOrder findOneByOetbcon2defreasoncode(string $OetbCon2DefReasonCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefReasonCode column
 * @method     ChildConfigSalesOrder findOneByOetbcon2bordcntl(string $OetbCon2BordCntl) Return the first ChildConfigSalesOrder filtered by the OetbCon2BordCntl column
 * @method     ChildConfigSalesOrder findOneByOetbcon2defreabocode(string $OetbCon2DefReaBoCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefReaBoCode column
 * @method     ChildConfigSalesOrder findOneByOetbcon2numdayssavls(int $OetbCon2NumDaysSavLs) Return the first ChildConfigSalesOrder filtered by the OetbCon2NumDaysSavLs column
 * @method     ChildConfigSalesOrder findOneByOetbcon2callbacknotif(string $OetbCon2CallBackNotif) Return the first ChildConfigSalesOrder filtered by the OetbCon2CallBackNotif column
 * @method     ChildConfigSalesOrder findOneByOetbcon2defdayswhenin(int $OetbCon2DefDaysWhenIn) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefDaysWhenIn column
 * @method     ChildConfigSalesOrder findOneByOetbcon2addsubsls(string $OetbCon2AddSubsLs) Return the first ChildConfigSalesOrder filtered by the OetbCon2AddSubsLs column
 * @method     ChildConfigSalesOrder findOneByOetbcon2defreasubscode(string $OetbCon2DefReaSubsCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefReaSubsCode column
 * @method     ChildConfigSalesOrder findOneByOetbcon2ordtypnorm(string $OetbCon2OrdTypNorm) Return the first ChildConfigSalesOrder filtered by the OetbCon2OrdTypNorm column
 * @method     ChildConfigSalesOrder findOneByOetbcon2ordtyprep(string $OetbCon2OrdTypRep) Return the first ChildConfigSalesOrder filtered by the OetbCon2OrdTypRep column
 * @method     ChildConfigSalesOrder findOneByOetbcon2ordtypserv(string $OetbCon2OrdTypServ) Return the first ChildConfigSalesOrder filtered by the OetbCon2OrdTypServ column
 * @method     ChildConfigSalesOrder findOneByOetbcon2defordtyp(string $OetbCon2DefOrdTyp) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefOrdTyp column
 * @method     ChildConfigSalesOrder findOneByOetbconfchgpric(string $OetbConfChgPric) Return the first ChildConfigSalesOrder filtered by the OetbConfChgPric column
 * @method     ChildConfigSalesOrder findOneByOetbcon2spordpricezero(string $OetbCon2SpordPriceZero) Return the first ChildConfigSalesOrder filtered by the OetbCon2SpordPriceZero column
 * @method     ChildConfigSalesOrder findOneByOetbconfinactpricezero(string $OetbConfInactPriceZero) Return the first ChildConfigSalesOrder filtered by the OetbConfInactPriceZero column
 * @method     ChildConfigSalesOrder findOneByOetbcon2reseq(string $OetbCon2Reseq) Return the first ChildConfigSalesOrder filtered by the OetbCon2Reseq column
 * @method     ChildConfigSalesOrder findOneByOetbcon2reseqby(string $OetbCon2ReseqBy) Return the first ChildConfigSalesOrder filtered by the OetbCon2ReseqBy column
 * @method     ChildConfigSalesOrder findOneByOetbcon2minqtysales(string $OetbCon2MinQtySales) Return the first ChildConfigSalesOrder filtered by the OetbCon2MinQtySales column
 * @method     ChildConfigSalesOrder findOneByOetbcon2chgorder(string $OetbCon2ChgOrder) Return the first ChildConfigSalesOrder filtered by the OetbCon2ChgOrder column
 * @method     ChildConfigSalesOrder findOneByOetbcon2vercomp(string $OetbCon2VerComp) Return the first ChildConfigSalesOrder filtered by the OetbCon2VerComp column
 * @method     ChildConfigSalesOrder findOneByOetbcon2prtinv(string $OetbCon2PrtInv) Return the first ChildConfigSalesOrder filtered by the OetbCon2PrtInv column
 * @method     ChildConfigSalesOrder findOneByOetbcon2dynamicpicktick(string $OetbCon2DynamicPickTick) Return the first ChildConfigSalesOrder filtered by the OetbCon2DynamicPickTick column
 * @method     ChildConfigSalesOrder findOneByOetbcon2dynamicinvoice(string $OetbCon2DynamicInvoice) Return the first ChildConfigSalesOrder filtered by the OetbCon2DynamicInvoice column
 * @method     ChildConfigSalesOrder findOneByOetbcon2edidefinvoice(string $OetbCon2EdiDefInvoice) Return the first ChildConfigSalesOrder filtered by the OetbCon2EdiDefInvoice column
 * @method     ChildConfigSalesOrder findOneByOetbcon2allowccpick(string $OetbCon2AllowCcPick) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowCcPick column
 * @method     ChildConfigSalesOrder findOneByOetbcon2autoccwind(string $OetbCon2AutoCcWind) Return the first ChildConfigSalesOrder filtered by the OetbCon2AutoCcWind column
 * @method     ChildConfigSalesOrder findOneByOetbcon2autoccupdate(string $OetbCon2AutoCcUpdate) Return the first ChildConfigSalesOrder filtered by the OetbCon2AutoCcUpdate column
 * @method     ChildConfigSalesOrder findOneByOetbcon2allowapvdccchg(string $OetbCon2AllowApvdCcChg) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowApvdCcChg column
 * @method     ChildConfigSalesOrder findOneByOetbcon3apvdbckordclear(string $OetbCon3ApvdBckordClear) Return the first ChildConfigSalesOrder filtered by the OetbCon3ApvdBckordClear column
 * @method     ChildConfigSalesOrder findOneByOetbcon2polwhichcost(string $OetbCon2PolWhichCost) Return the first ChildConfigSalesOrder filtered by the OetbCon2PolWhichCost column
 * @method     ChildConfigSalesOrder findOneByOetbcon2revhazard(string $OetbCon2RevHazard) Return the first ChildConfigSalesOrder filtered by the OetbCon2RevHazard column
 * @method     ChildConfigSalesOrder findOneByOetbcon2showdisclist(string $OetbCon2ShowDiscList) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShowDiscList column
 * @method     ChildConfigSalesOrder findOneByOetbcon2chglist(string $OetbCon2ChgList) Return the first ChildConfigSalesOrder filtered by the OetbCon2ChgList column
 * @method     ChildConfigSalesOrder findOneByOetbcon2maillist(string $OetbCon2MailList) Return the first ChildConfigSalesOrder filtered by the OetbCon2MailList column
 * @method     ChildConfigSalesOrder findOneByOetbcon2nameformat(string $OetbCon2NameFormat) Return the first ChildConfigSalesOrder filtered by the OetbCon2NameFormat column
 * @method     ChildConfigSalesOrder findOneByOetbcon2mailidtype(string $OetbCon2MailIdType) Return the first ChildConfigSalesOrder filtered by the OetbCon2MailIdType column
 * @method     ChildConfigSalesOrder findOneByOetbcon2cashdrawerpswd(string $OetbCon2CashDrawerPswd) Return the first ChildConfigSalesOrder filtered by the OetbCon2CashDrawerPswd column
 * @method     ChildConfigSalesOrder findOneByOetbcon2upsonline(string $OetbCon2UpsOnline) Return the first ChildConfigSalesOrder filtered by the OetbCon2UpsOnline column
 * @method     ChildConfigSalesOrder findOneByOetbcon2picorver(string $OetbCon2PicOrVer) Return the first ChildConfigSalesOrder filtered by the OetbCon2PicOrVer column
 * @method     ChildConfigSalesOrder findOneByOetbcon2combback(string $OetbCon2CombBack) Return the first ChildConfigSalesOrder filtered by the OetbCon2CombBack column
 * @method     ChildConfigSalesOrder findOneByOetbcon2frtallowamt(int $OetbCon2FrtAllowAmt) Return the first ChildConfigSalesOrder filtered by the OetbCon2FrtAllowAmt column
 * @method     ChildConfigSalesOrder findOneByOetbcon3shipmoreordered(string $OetbCon3ShipMoreOrdered) Return the first ChildConfigSalesOrder filtered by the OetbCon3ShipMoreOrdered column
 * @method     ChildConfigSalesOrder findOneByOetbcon3warnshipmore(string $OetbCon3WarnShipMore) Return the first ChildConfigSalesOrder filtered by the OetbCon3WarnShipMore column
 * @method     ChildConfigSalesOrder findOneByOetbcon2usedept(string $OetbCon2UseDept) Return the first ChildConfigSalesOrder filtered by the OetbCon2UseDept column
 * @method     ChildConfigSalesOrder findOneByOetbcon2usedivision(string $OetbCon2UseDivision) Return the first ChildConfigSalesOrder filtered by the OetbCon2UseDivision column
 * @method     ChildConfigSalesOrder findOneByOetbcon2defmfecode(string $OetbCon2DefMfeCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefMfeCode column
 * @method     ChildConfigSalesOrder findOneByOetbcon2showavgcost(string $OetbCon2ShowAvgCost) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShowAvgCost column
 * @method     ChildConfigSalesOrder findOneByOetbcon2fedex(string $OetbCon2FedEx) Return the first ChildConfigSalesOrder filtered by the OetbCon2FedEx column
 * @method     ChildConfigSalesOrder findOneByOetbcon3deffrghtgrup(string $OetbCon3DefFrghtGrup) Return the first ChildConfigSalesOrder filtered by the OetbCon3DefFrghtGrup column
 * @method     ChildConfigSalesOrder findOneByOetbcon3upsmysqldbname(string $OetbCon3UpsMysqlDbname) Return the first ChildConfigSalesOrder filtered by the OetbCon3UpsMysqlDbname column
 * @method     ChildConfigSalesOrder findOneByOetbconfuseoptcode(string $OetbConfUseOptCode) Return the first ChildConfigSalesOrder filtered by the OetbConfUseOptCode column
 * @method     ChildConfigSalesOrder findOneByOetbconfscn4opt(string $OetbConfScn4Opt) Return the first ChildConfigSalesOrder filtered by the OetbConfScn4Opt column
 * @method     ChildConfigSalesOrder findOneByOetbcon2takenbyuse(string $OetbCon2TakenByUse) Return the first ChildConfigSalesOrder filtered by the OetbCon2TakenByUse column
 * @method     ChildConfigSalesOrder findOneByOetbcon2takenbylogin(string $OetbCon2TakenByLogin) Return the first ChildConfigSalesOrder filtered by the OetbCon2TakenByLogin column
 * @method     ChildConfigSalesOrder findOneByOetbcon2takenbyforce(string $OetbCon2TakenByForce) Return the first ChildConfigSalesOrder filtered by the OetbCon2TakenByForce column
 * @method     ChildConfigSalesOrder findOneByOetbcon2pickedbyuse(string $OetbCon2PickedByUse) Return the first ChildConfigSalesOrder filtered by the OetbCon2PickedByUse column
 * @method     ChildConfigSalesOrder findOneByOetbcon2pickedbyforce(string $OetbCon2PickedByForce) Return the first ChildConfigSalesOrder filtered by the OetbCon2PickedByForce column
 * @method     ChildConfigSalesOrder findOneByOetbcon2pickedbyproc(string $OetbCon2PickedByProc) Return the first ChildConfigSalesOrder filtered by the OetbCon2PickedByProc column
 * @method     ChildConfigSalesOrder findOneByOetbcon2packedbyuse(string $OetbCon2PackedByUse) Return the first ChildConfigSalesOrder filtered by the OetbCon2PackedByUse column
 * @method     ChildConfigSalesOrder findOneByOetbcon2packedbyforce(string $OetbCon2PackedByForce) Return the first ChildConfigSalesOrder filtered by the OetbCon2PackedByForce column
 * @method     ChildConfigSalesOrder findOneByOetbcon2verifiedbyuse(string $OetbCon2VerifiedByUse) Return the first ChildConfigSalesOrder filtered by the OetbCon2VerifiedByUse column
 * @method     ChildConfigSalesOrder findOneByOetbcon2verifiedbylogin(string $OetbCon2VerifiedByLogin) Return the first ChildConfigSalesOrder filtered by the OetbCon2VerifiedByLogin column
 * @method     ChildConfigSalesOrder findOneByOetbcon2verifiedbyforce(string $OetbCon2VerifiedByForce) Return the first ChildConfigSalesOrder filtered by the OetbCon2VerifiedByForce column
 * @method     ChildConfigSalesOrder findOneByOetbconfoptlabl1(string $OetbConfOptLabl1) Return the first ChildConfigSalesOrder filtered by the OetbConfOptLabl1 column
 * @method     ChildConfigSalesOrder findOneByOetbcon2ucode1force(string $OetbCon2Ucode1Force) Return the first ChildConfigSalesOrder filtered by the OetbCon2Ucode1Force column
 * @method     ChildConfigSalesOrder findOneByOetbconfoptlabl2(string $OetbConfOptLabl2) Return the first ChildConfigSalesOrder filtered by the OetbConfOptLabl2 column
 * @method     ChildConfigSalesOrder findOneByOetbcon2ucode2force(string $OetbCon2Ucode2Force) Return the first ChildConfigSalesOrder filtered by the OetbCon2Ucode2Force column
 * @method     ChildConfigSalesOrder findOneByOetbconfoptlabl3(string $OetbConfOptLabl3) Return the first ChildConfigSalesOrder filtered by the OetbConfOptLabl3 column
 * @method     ChildConfigSalesOrder findOneByOetbcon2ucode3force(string $OetbCon2Ucode3Force) Return the first ChildConfigSalesOrder filtered by the OetbCon2Ucode3Force column
 * @method     ChildConfigSalesOrder findOneByOetbconfoptlabl4(string $OetbConfOptLabl4) Return the first ChildConfigSalesOrder filtered by the OetbConfOptLabl4 column
 * @method     ChildConfigSalesOrder findOneByOetbcon2ucode4force(string $OetbCon2Ucode4Force) Return the first ChildConfigSalesOrder filtered by the OetbCon2Ucode4Force column
 * @method     ChildConfigSalesOrder findOneByOetbconfverifyafterpack(string $OetbConfVerifyAfterPack) Return the first ChildConfigSalesOrder filtered by the OetbConfVerifyAfterPack column
 * @method     ChildConfigSalesOrder findOneByOetbconfhistyrsback(int $OetbConfHistYrsBack) Return the first ChildConfigSalesOrder filtered by the OetbConfHistYrsBack column
 * @method     ChildConfigSalesOrder findOneByOetbconfrqstcatlg(string $OetbConfRqstCatlg) Return the first ChildConfigSalesOrder filtered by the OetbConfRqstCatlg column
 * @method     ChildConfigSalesOrder findOneByOetbcon2conpick(string $OetbCon2ConPick) Return the first ChildConfigSalesOrder filtered by the OetbCon2ConPick column
 * @method     ChildConfigSalesOrder findOneByOetbcon2allowpick(string $OetbCon2AllowPick) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowPick column
 * @method     ChildConfigSalesOrder findOneByOetbcon2combinesame(string $OetbCon2CombineSame) Return the first ChildConfigSalesOrder filtered by the OetbCon2CombineSame column
 * @method     ChildConfigSalesOrder findOneByOetbcon3autovernitems(string $OetbCon3AutoVerNItems) Return the first ChildConfigSalesOrder filtered by the OetbCon3AutoVerNItems column
 * @method     ChildConfigSalesOrder findOneByOetbcon2allowzeroqty(string $OetbCon2AllowZeroQty) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowZeroQty column
 * @method     ChildConfigSalesOrder findOneByOetbcon2allowinvalidwhse(string $OetbCon2AllowInvalidWhse) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowInvalidWhse column
 * @method     ChildConfigSalesOrder findOneByOetbcon2showediinfo(string $OetbCon2ShowEdiInfo) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShowEdiInfo column
 * @method     ChildConfigSalesOrder findOneByOetbcon2addonsales(string $OetbCon2AddOnSales) Return the first ChildConfigSalesOrder filtered by the OetbCon2AddOnSales column
 * @method     ChildConfigSalesOrder findOneByOetbcon2forcedbkord(string $OetbCon2ForcedBkord) Return the first ChildConfigSalesOrder filtered by the OetbCon2ForcedBkord column
 * @method     ChildConfigSalesOrder findOneByOetbcon2updtprcdisc(string $OetbCon2UpdtPrcDisc) Return the first ChildConfigSalesOrder filtered by the OetbCon2UpdtPrcDisc column
 * @method     ChildConfigSalesOrder findOneByOetbcon2autopack(string $OetbCon2AutoPack) Return the first ChildConfigSalesOrder filtered by the OetbCon2AutoPack column
 * @method     ChildConfigSalesOrder findOneByOetbcon2pickboprtzqts(string $OetbCon2PickBoPrtZqts) Return the first ChildConfigSalesOrder filtered by the OetbCon2PickBoPrtZqts column
 * @method     ChildConfigSalesOrder findOneByOetbcon3pick00noship(string $OetbCon3Pick00NoShip) Return the first ChildConfigSalesOrder filtered by the OetbCon3Pick00NoShip column
 * @method     ChildConfigSalesOrder findOneByOetbcon2standordlead(string $OetbCon2StandOrdLead) Return the first ChildConfigSalesOrder filtered by the OetbCon2StandOrdLead column
 * @method     ChildConfigSalesOrder findOneByOetbcon2standordamnt(int $OetbCon2StandOrdAmnt) Return the first ChildConfigSalesOrder filtered by the OetbCon2StandOrdAmnt column
 * @method     ChildConfigSalesOrder findOneByOetbcon2inactitemcntrl(string $OetbCon2InactItemCntrl) Return the first ChildConfigSalesOrder filtered by the OetbCon2InactItemCntrl column
 * @method     ChildConfigSalesOrder findOneByOetbcon2useitemref(string $OetbCon2UseItemRef) Return the first ChildConfigSalesOrder filtered by the OetbCon2UseItemRef column
 * @method     ChildConfigSalesOrder findOneByOetbcon3upsnaftarecords(string $OetbCon3UpsNaftaRecords) Return the first ChildConfigSalesOrder filtered by the OetbCon3UpsNaftaRecords column
 * @method     ChildConfigSalesOrder findOneByOetbconfdfltshipwhse(string $OetbConfDfltShipWhse) Return the first ChildConfigSalesOrder filtered by the OetbConfDfltShipWhse column
 * @method     ChildConfigSalesOrder findOneByOetbconfdfltorigwhse(string $OetbConfDfltOrigWhse) Return the first ChildConfigSalesOrder filtered by the OetbConfDfltOrigWhse column
 * @method     ChildConfigSalesOrder findOneByOetbconfinvcwithpack(string $OetbConfInvcWithPack) Return the first ChildConfigSalesOrder filtered by the OetbConfInvcWithPack column
 * @method     ChildConfigSalesOrder findOneByOetbconfcarrycntrqty(string $OetbConfCarryCntrQty) Return the first ChildConfigSalesOrder filtered by the OetbConfCarryCntrQty column
 * @method     ChildConfigSalesOrder findOneByOetbcon3useordras(string $OetbCon3UseOrdrAs) Return the first ChildConfigSalesOrder filtered by the OetbCon3UseOrdrAs column
 * @method     ChildConfigSalesOrder findOneByOetbconfuseordrsource(string $OetbConfUseOrdrSource) Return the first ChildConfigSalesOrder filtered by the OetbConfUseOrdrSource column
 * @method     ChildConfigSalesOrder findOneByOetbcon3ccprocessor(string $OetbCon3CcProcessor) Return the first ChildConfigSalesOrder filtered by the OetbCon3CcProcessor column
 * @method     ChildConfigSalesOrder findOneByOetbcon3creditcardcap(string $OetbCon3CreditCardCap) Return the first ChildConfigSalesOrder filtered by the OetbCon3CreditCardCap column
 * @method     ChildConfigSalesOrder findOneByOetbcon3keyorcccap(string $OetbCon3KeyOrCcCap) Return the first ChildConfigSalesOrder filtered by the OetbCon3KeyOrCcCap column
 * @method     ChildConfigSalesOrder findOneByOetbcon3ccxoverlay(string $OetbCon3CcXOverlay) Return the first ChildConfigSalesOrder filtered by the OetbCon3CcXOverlay column
 * @method     ChildConfigSalesOrder findOneByOetbcon3cctimeout(int $OetbCon3CcTimeOut) Return the first ChildConfigSalesOrder filtered by the OetbCon3CcTimeOut column
 * @method     ChildConfigSalesOrder findOneByOetbcon3signaturecapture(string $OetbCon3SignatureCapture) Return the first ChildConfigSalesOrder filtered by the OetbCon3SignatureCapture column
 * @method     ChildConfigSalesOrder findOneByOetbcon3ccpreapproval(string $OetbCon3CcPreapproval) Return the first ChildConfigSalesOrder filtered by the OetbCon3CcPreapproval column
 * @method     ChildConfigSalesOrder findOneByOetbcon3forceccnbrentry(string $OetbCon3ForceCcNbrEntry) Return the first ChildConfigSalesOrder filtered by the OetbCon3ForceCcNbrEntry column
 * @method     ChildConfigSalesOrder findOneByOetbcon3intritemnotes(string $OetbCon3IntrItemNotes) Return the first ChildConfigSalesOrder filtered by the OetbCon3IntrItemNotes column
 * @method     ChildConfigSalesOrder findOneByOetbcon3mtrcert(string $OetbCon3MtrCert) Return the first ChildConfigSalesOrder filtered by the OetbCon3MtrCert column
 * @method     ChildConfigSalesOrder findOneByOetbcon3cofccert(string $OetbCon3CofcCert) Return the first ChildConfigSalesOrder filtered by the OetbCon3CofcCert column
 * @method     ChildConfigSalesOrder findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigSalesOrder filtered by the DateUpdtd column
 * @method     ChildConfigSalesOrder findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigSalesOrder filtered by the TimeUpdtd column
 * @method     ChildConfigSalesOrder findOneByDummy(string $dummy) Return the first ChildConfigSalesOrder filtered by the dummy column *

 * @method     ChildConfigSalesOrder requirePk($key, ConnectionInterface $con = null) Return the ChildConfigSalesOrder by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOne(ConnectionInterface $con = null) Return the first ChildConfigSalesOrder matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigSalesOrder requireOneByOetbconfkey(int $OetbConfKey) Return the first ChildConfigSalesOrder filtered by the OetbConfKey column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfglifac(string $OetbConfGlIfac) Return the first ChildConfigSalesOrder filtered by the OetbConfGlIfac column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfinifac(string $OetbConfInIfac) Return the first ChildConfigSalesOrder filtered by the OetbConfInIfac column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfrelivty(string $OetbConfRelIvty) Return the first ChildConfigSalesOrder filtered by the OetbConfRelIvty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfuseordrnbr(string $OetbConfUseOrdrNbr) Return the first ChildConfigSalesOrder filtered by the OetbConfUseOrdrNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdefrqstdate(string $OetbConfDefRqstDate) Return the first ChildConfigSalesOrder filtered by the OetbConfDefRqstDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfusecancdate(string $OetbConfUseCancDate) Return the first ChildConfigSalesOrder filtered by the OetbConfUseCancDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfshowsp(string $OetbConfShowSp) Return the first ChildConfigSalesOrder filtered by the OetbConfShowSp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfjrnlsort(int $OetbConfJrnlSort) Return the first ChildConfigSalesOrder filtered by the OetbConfJrnlSort column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfuseprepsoopt(string $OetbConfUsePrepSoOpt) Return the first ChildConfigSalesOrder filtered by the OetbConfUsePrepSoOpt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdispbillto(string $OetbConfDispBillTo) Return the first ChildConfigSalesOrder filtered by the OetbConfDispBillTo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfslctflm(string $OetbConfSlctFlm) Return the first ChildConfigSalesOrder filtered by the OetbConfSlctFlm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3usestockpull(string $OetbCon3UseStockPull) Return the first ChildConfigSalesOrder filtered by the OetbCon3UseStockPull column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfqtytoship(string $OetbConfQtyToShip) Return the first ChildConfigSalesOrder filtered by the OetbConfQtyToShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfqtytoshipdef(string $OetbConfQtyToShipDef) Return the first ChildConfigSalesOrder filtered by the OetbConfQtyToShipDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdfltordrqty(string $OetbConfDfltOrdrQty) Return the first ChildConfigSalesOrder filtered by the OetbConfDfltOrdrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfallocqtytoship(string $OetbConfAllocQtyToShip) Return the first ChildConfigSalesOrder filtered by the OetbConfAllocQtyToShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfoverallocqts(string $OetbConfOverAllocQts) Return the first ChildConfigSalesOrder filtered by the OetbConfOverAllocQts column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3completelotbin(string $OetbCon3CompleteLotBin) Return the first ChildConfigSalesOrder filtered by the OetbCon3CompleteLotBin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3rqtsopt(string $OetbCon3RqtsOpt) Return the first ChildConfigSalesOrder filtered by the OetbCon3RqtsOpt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2shipcomphold(int $OetbCon2ShipCompHold) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShipCompHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3usesaleforecast(string $OetbCon3UseSaleForecast) Return the first ChildConfigSalesOrder filtered by the OetbCon3UseSaleForecast column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfverfstopneg(string $OetbConfVerfStopNeg) Return the first ChildConfigSalesOrder filtered by the OetbConfVerfStopNeg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfverfaudtrept(string $OetbConfVerfAudtRept) Return the first ChildConfigSalesOrder filtered by the OetbConfVerfAudtRept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfagelevldisp(string $OetbConfAgeLevlDisp) Return the first ChildConfigSalesOrder filtered by the OetbConfAgeLevlDisp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfagealltime(string $OetbConfAgeAllTime) Return the first ChildConfigSalesOrder filtered by the OetbConfAgeAllTime column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfageathold(string $OetbConfAgeAtHold) Return the first ChildConfigSalesOrder filtered by the OetbConfAgeAtHold column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfshowatlevl(string $OetbConfShowAtLevl) Return the first ChildConfigSalesOrder filtered by the OetbConfShowAtLevl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfshowitem(string $OetbConfShowItem) Return the first ChildConfigSalesOrder filtered by the OetbConfShowItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfstoppnt(string $OetbConfStopPnt) Return the first ChildConfigSalesOrder filtered by the OetbConfStopPnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfpricwind(string $OetbConfPricWind) Return the first ChildConfigSalesOrder filtered by the OetbConfPricWind column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfshowcost(string $OetbConfShowCost) Return the first ChildConfigSalesOrder filtered by the OetbConfShowCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfcosttouse(string $OetbConfCostToUse) Return the first ChildConfigSalesOrder filtered by the OetbConfCostToUse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfshowmarg(string $OetbConfShowMarg) Return the first ChildConfigSalesOrder filtered by the OetbConfShowMarg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconffxoe(string $OetbConfFxOe) Return the first ChildConfigSalesOrder filtered by the OetbConfFxOe column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconffxinv(string $OetbConfFxInv) Return the first ChildConfigSalesOrder filtered by the OetbConfFxInv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdispvia(string $OetbConfDispVia) Return the first ChildConfigSalesOrder filtered by the OetbConfDispVia column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdispcaseqty(string $OetbConfDispCaseQty) Return the first ChildConfigSalesOrder filtered by the OetbConfDispCaseQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconffrtin(string $OetbConfFrtIn) Return the first ChildConfigSalesOrder filtered by the OetbConfFrtIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconffrtinglacct(string $OetbConfFrtInGlAcct) Return the first ChildConfigSalesOrder filtered by the OetbConfFrtInGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfmincharge(string $OetbConfMinCharge) Return the first ChildConfigSalesOrder filtered by the OetbConfMinCharge column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfminchrgglacct(string $OetbConfMinChrgGlAcct) Return the first ChildConfigSalesOrder filtered by the OetbConfMinChrgGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdropshipchrg(string $OetbConfDropShipChrg) Return the first ChildConfigSalesOrder filtered by the OetbConfDropShipChrg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdropshpglacct(string $OetbConfDropShpGlAcct) Return the first ChildConfigSalesOrder filtered by the OetbConfDropShpGlAcct column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfnontaxcustcode(string $OetbConfNonTaxCustCode) Return the first ChildConfigSalesOrder filtered by the OetbConfNonTaxCustCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfhstaxid(string $OetbConfHsTaxId) Return the first ChildConfigSalesOrder filtered by the OetbConfHsTaxId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfhsfrtid(string $OetbConfHsFrtId) Return the first ChildConfigSalesOrder filtered by the OetbConfHsFrtId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfhsmiscid(string $OetbConfHsMiscId) Return the first ChildConfigSalesOrder filtered by the OetbConfHsMiscId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2hscusdid(string $OetbCon2HsCusdId) Return the first ChildConfigSalesOrder filtered by the OetbCon2HsCusdId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3hsfrtinid(string $OetbCon3HsFrtInId) Return the first ChildConfigSalesOrder filtered by the OetbCon3HsFrtInId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3hsdropid(string $OetbCon3HsDropId) Return the first ChildConfigSalesOrder filtered by the OetbCon3HsDropId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3hsminordid(string $OetbCon3HsMinordId) Return the first ChildConfigSalesOrder filtered by the OetbCon3HsMinordId column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfheadgetdef(string $OetbConfHeadGetDef) Return the first ChildConfigSalesOrder filtered by the OetbConfHeadGetDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfitemgetdef(string $OetbConfItemGetDef) Return the first ChildConfigSalesOrder filtered by the OetbConfItemGetDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfautogetcust(string $OetbConfAutoGetCust) Return the first ChildConfigSalesOrder filtered by the OetbConfAutoGetCust column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3autogetitem(string $OetbCon3AutoGetItem) Return the first ChildConfigSalesOrder filtered by the OetbCon3AutoGetItem column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfrqstheaddtl(string $OetbConfRqstHeadDtl) Return the first ChildConfigSalesOrder filtered by the OetbConfRqstHeadDtl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfcancheaddtl(string $OetbConfCancHeadDtl) Return the first ChildConfigSalesOrder filtered by the OetbConfCancHeadDtl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfuseinvcasship(string $OetbConfUseInvcAsShip) Return the first ChildConfigSalesOrder filtered by the OetbConfUseInvcAsShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3usearrvdate(string $OetbCon3UseArrvDate) Return the first ChildConfigSalesOrder filtered by the OetbCon3UseArrvDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfseparatecred(string $OetbConfSeparateCred) Return the first ChildConfigSalesOrder filtered by the OetbConfSeparateCred column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3applycredits(string $OetbCon3ApplyCredits) Return the first ChildConfigSalesOrder filtered by the OetbCon3ApplyCredits column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfwarnnotnew(string $OetbConfWarnNotNew) Return the first ChildConfigSalesOrder filtered by the OetbConfWarnNotNew column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfwarnbotozero(string $OetbConfWarnBoToZero) Return the first ChildConfigSalesOrder filtered by the OetbConfWarnBoToZero column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2providerouting(string $OetbCon2ProvideRouting) Return the first ChildConfigSalesOrder filtered by the OetbCon2ProvideRouting column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2srtrtbyrqstdte(string $OetbCon2SrtRtByRqstDte) Return the first ChildConfigSalesOrder filtered by the OetbCon2SrtRtByRqstDte column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfusesoreview(string $OetbConfUseSoReview) Return the first ChildConfigSalesOrder filtered by the OetbConfUseSoReview column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfpicknotedef(string $OetbConfPickNoteDef) Return the first ChildConfigSalesOrder filtered by the OetbConfPickNoteDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfpacknotedef(string $OetbConfPackNoteDef) Return the first ChildConfigSalesOrder filtered by the OetbConfPackNoteDef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfpicksort(string $OetbConfPickSort) Return the first ChildConfigSalesOrder filtered by the OetbConfPickSort column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfpacksort(string $OetbConfPackSort) Return the first ChildConfigSalesOrder filtered by the OetbConfPackSort column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfprtpriconly(string $OetbConfPrtPricOnly) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtPricOnly column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfprtneg(string $OetbConfPrtNeg) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtNeg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2prtpackageinfo(string $OetbCon2PrtPackageInfo) Return the first ChildConfigSalesOrder filtered by the OetbCon2PrtPackageInfo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2innerpacklabel(string $OetbCon2InnerPackLabel) Return the first ChildConfigSalesOrder filtered by the OetbCon2InnerPackLabel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2outerpacklabel(string $OetbCon2OuterPackLabel) Return the first ChildConfigSalesOrder filtered by the OetbCon2OuterPackLabel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2shiptarelabel(string $OetbCon2ShipTareLabel) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShipTareLabel column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfprtpick(string $OetbConfPrtPick) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtPick column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfpicprioseq(string $OetbConfPicPrioSeq) Return the first ChildConfigSalesOrder filtered by the OetbConfPicPrioSeq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfprtpack(string $OetbConfPrtPack) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtPack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfprtinv(string $OetbConfPrtInv) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtInv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2prtcredmemo(string $OetbCon2PrtCredMemo) Return the first ChildConfigSalesOrder filtered by the OetbCon2PrtCredMemo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfcrntdate(string $OetbConfCrntDate) Return the first ChildConfigSalesOrder filtered by the OetbConfCrntDate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfmarkpicked(string $OetbConfMarkPicked) Return the first ChildConfigSalesOrder filtered by the OetbConfMarkPicked column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfshowunavail(string $OetbConfShowUnavail) Return the first ChildConfigSalesOrder filtered by the OetbConfShowUnavail column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdecplaces(int $OetbConfDecPlaces) Return the first ChildConfigSalesOrder filtered by the OetbConfDecPlaces column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfwarndup(string $OetbConfWarnDup) Return the first ChildConfigSalesOrder filtered by the OetbConfWarnDup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdefpick(string $OetbConfDefPick) Return the first ChildConfigSalesOrder filtered by the OetbConfDefPick column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdefpack(string $OetbConfDefPack) Return the first ChildConfigSalesOrder filtered by the OetbConfDefPack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdefinvc(string $OetbConfDefInvc) Return the first ChildConfigSalesOrder filtered by the OetbConfDefInvc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdefack(string $OetbConfDefAck) Return the first ChildConfigSalesOrder filtered by the OetbConfDefAck column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfacksortopt(string $OetbConfAckSortOpt) Return the first ChildConfigSalesOrder filtered by the OetbConfAckSortOpt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfreleasenbr(string $OetbConfReleaseNbr) Return the first ChildConfigSalesOrder filtered by the OetbConfReleaseNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfpodetlinenbr(string $OetbConfPoDetLineNbr) Return the first ChildConfigSalesOrder filtered by the OetbConfPoDetLineNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdetlinebinnbr(string $OetbConfDetLineBinNbr) Return the first ChildConfigSalesOrder filtered by the OetbConfDetLineBinNbr column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfsplitbywhse(string $OetbConfSplitByWhse) Return the first ChildConfigSalesOrder filtered by the OetbConfSplitByWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3allowmultwhse(string $OetbCon3AllowMultWhse) Return the first ChildConfigSalesOrder filtered by the OetbCon3AllowMultWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfuseorigwhse(string $OetbConfUseOrigWhse) Return the first ChildConfigSalesOrder filtered by the OetbConfUseOrigWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfuseesosingle(string $OetbConfUseEsoSingle) Return the first ChildConfigSalesOrder filtered by the OetbConfUseEsoSingle column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfcreatepo(string $OetbConfCreatePo) Return the first ChildConfigSalesOrder filtered by the OetbConfCreatePo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfbestprice(string $OetbConfBestPrice) Return the first ChildConfigSalesOrder filtered by the OetbConfBestPrice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfesobacktonew(string $OetbConfEsoBackToNew) Return the first ChildConfigSalesOrder filtered by the OetbConfEsoBackToNew column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfpickprintdrop(string $OetbConfPickPrintDrop) Return the first ChildConfigSalesOrder filtered by the OetbConfPickPrintDrop column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfwarnmultpo(string $OetbConfWarnMultPo) Return the first ChildConfigSalesOrder filtered by the OetbConfWarnMultPo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfalertitemquote(string $OetbConfAlertItemQuote) Return the first ChildConfigSalesOrder filtered by the OetbConfAlertItemQuote column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3askchgprcwqty(string $OetbCon3AskChgPrcWQty) Return the first ChildConfigSalesOrder filtered by the OetbCon3AskChgPrcWQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3tenqtybrks(string $OetbCon3TenQtyBrks) Return the first ChildConfigSalesOrder filtered by the OetbCon3TenQtyBrks column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdecordrpric(int $OetbConfDecOrdrPric) Return the first ChildConfigSalesOrder filtered by the OetbConfDecOrdrPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2provlostsales(string $OetbCon2ProvLostSales) Return the first ChildConfigSalesOrder filtered by the OetbCon2ProvLostSales column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2askreasoncode(string $OetbCon2AskReasonCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2AskReasonCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2defreasoncode(string $OetbCon2DefReasonCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefReasonCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2bordcntl(string $OetbCon2BordCntl) Return the first ChildConfigSalesOrder filtered by the OetbCon2BordCntl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2defreabocode(string $OetbCon2DefReaBoCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefReaBoCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2numdayssavls(int $OetbCon2NumDaysSavLs) Return the first ChildConfigSalesOrder filtered by the OetbCon2NumDaysSavLs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2callbacknotif(string $OetbCon2CallBackNotif) Return the first ChildConfigSalesOrder filtered by the OetbCon2CallBackNotif column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2defdayswhenin(int $OetbCon2DefDaysWhenIn) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefDaysWhenIn column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2addsubsls(string $OetbCon2AddSubsLs) Return the first ChildConfigSalesOrder filtered by the OetbCon2AddSubsLs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2defreasubscode(string $OetbCon2DefReaSubsCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefReaSubsCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2ordtypnorm(string $OetbCon2OrdTypNorm) Return the first ChildConfigSalesOrder filtered by the OetbCon2OrdTypNorm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2ordtyprep(string $OetbCon2OrdTypRep) Return the first ChildConfigSalesOrder filtered by the OetbCon2OrdTypRep column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2ordtypserv(string $OetbCon2OrdTypServ) Return the first ChildConfigSalesOrder filtered by the OetbCon2OrdTypServ column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2defordtyp(string $OetbCon2DefOrdTyp) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefOrdTyp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfchgpric(string $OetbConfChgPric) Return the first ChildConfigSalesOrder filtered by the OetbConfChgPric column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2spordpricezero(string $OetbCon2SpordPriceZero) Return the first ChildConfigSalesOrder filtered by the OetbCon2SpordPriceZero column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfinactpricezero(string $OetbConfInactPriceZero) Return the first ChildConfigSalesOrder filtered by the OetbConfInactPriceZero column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2reseq(string $OetbCon2Reseq) Return the first ChildConfigSalesOrder filtered by the OetbCon2Reseq column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2reseqby(string $OetbCon2ReseqBy) Return the first ChildConfigSalesOrder filtered by the OetbCon2ReseqBy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2minqtysales(string $OetbCon2MinQtySales) Return the first ChildConfigSalesOrder filtered by the OetbCon2MinQtySales column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2chgorder(string $OetbCon2ChgOrder) Return the first ChildConfigSalesOrder filtered by the OetbCon2ChgOrder column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2vercomp(string $OetbCon2VerComp) Return the first ChildConfigSalesOrder filtered by the OetbCon2VerComp column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2prtinv(string $OetbCon2PrtInv) Return the first ChildConfigSalesOrder filtered by the OetbCon2PrtInv column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2dynamicpicktick(string $OetbCon2DynamicPickTick) Return the first ChildConfigSalesOrder filtered by the OetbCon2DynamicPickTick column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2dynamicinvoice(string $OetbCon2DynamicInvoice) Return the first ChildConfigSalesOrder filtered by the OetbCon2DynamicInvoice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2edidefinvoice(string $OetbCon2EdiDefInvoice) Return the first ChildConfigSalesOrder filtered by the OetbCon2EdiDefInvoice column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2allowccpick(string $OetbCon2AllowCcPick) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowCcPick column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2autoccwind(string $OetbCon2AutoCcWind) Return the first ChildConfigSalesOrder filtered by the OetbCon2AutoCcWind column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2autoccupdate(string $OetbCon2AutoCcUpdate) Return the first ChildConfigSalesOrder filtered by the OetbCon2AutoCcUpdate column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2allowapvdccchg(string $OetbCon2AllowApvdCcChg) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowApvdCcChg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3apvdbckordclear(string $OetbCon3ApvdBckordClear) Return the first ChildConfigSalesOrder filtered by the OetbCon3ApvdBckordClear column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2polwhichcost(string $OetbCon2PolWhichCost) Return the first ChildConfigSalesOrder filtered by the OetbCon2PolWhichCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2revhazard(string $OetbCon2RevHazard) Return the first ChildConfigSalesOrder filtered by the OetbCon2RevHazard column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2showdisclist(string $OetbCon2ShowDiscList) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShowDiscList column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2chglist(string $OetbCon2ChgList) Return the first ChildConfigSalesOrder filtered by the OetbCon2ChgList column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2maillist(string $OetbCon2MailList) Return the first ChildConfigSalesOrder filtered by the OetbCon2MailList column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2nameformat(string $OetbCon2NameFormat) Return the first ChildConfigSalesOrder filtered by the OetbCon2NameFormat column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2mailidtype(string $OetbCon2MailIdType) Return the first ChildConfigSalesOrder filtered by the OetbCon2MailIdType column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2cashdrawerpswd(string $OetbCon2CashDrawerPswd) Return the first ChildConfigSalesOrder filtered by the OetbCon2CashDrawerPswd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2upsonline(string $OetbCon2UpsOnline) Return the first ChildConfigSalesOrder filtered by the OetbCon2UpsOnline column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2picorver(string $OetbCon2PicOrVer) Return the first ChildConfigSalesOrder filtered by the OetbCon2PicOrVer column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2combback(string $OetbCon2CombBack) Return the first ChildConfigSalesOrder filtered by the OetbCon2CombBack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2frtallowamt(int $OetbCon2FrtAllowAmt) Return the first ChildConfigSalesOrder filtered by the OetbCon2FrtAllowAmt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3shipmoreordered(string $OetbCon3ShipMoreOrdered) Return the first ChildConfigSalesOrder filtered by the OetbCon3ShipMoreOrdered column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3warnshipmore(string $OetbCon3WarnShipMore) Return the first ChildConfigSalesOrder filtered by the OetbCon3WarnShipMore column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2usedept(string $OetbCon2UseDept) Return the first ChildConfigSalesOrder filtered by the OetbCon2UseDept column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2usedivision(string $OetbCon2UseDivision) Return the first ChildConfigSalesOrder filtered by the OetbCon2UseDivision column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2defmfecode(string $OetbCon2DefMfeCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefMfeCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2showavgcost(string $OetbCon2ShowAvgCost) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShowAvgCost column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2fedex(string $OetbCon2FedEx) Return the first ChildConfigSalesOrder filtered by the OetbCon2FedEx column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3deffrghtgrup(string $OetbCon3DefFrghtGrup) Return the first ChildConfigSalesOrder filtered by the OetbCon3DefFrghtGrup column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3upsmysqldbname(string $OetbCon3UpsMysqlDbname) Return the first ChildConfigSalesOrder filtered by the OetbCon3UpsMysqlDbname column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfuseoptcode(string $OetbConfUseOptCode) Return the first ChildConfigSalesOrder filtered by the OetbConfUseOptCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfscn4opt(string $OetbConfScn4Opt) Return the first ChildConfigSalesOrder filtered by the OetbConfScn4Opt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2takenbyuse(string $OetbCon2TakenByUse) Return the first ChildConfigSalesOrder filtered by the OetbCon2TakenByUse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2takenbylogin(string $OetbCon2TakenByLogin) Return the first ChildConfigSalesOrder filtered by the OetbCon2TakenByLogin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2takenbyforce(string $OetbCon2TakenByForce) Return the first ChildConfigSalesOrder filtered by the OetbCon2TakenByForce column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2pickedbyuse(string $OetbCon2PickedByUse) Return the first ChildConfigSalesOrder filtered by the OetbCon2PickedByUse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2pickedbyforce(string $OetbCon2PickedByForce) Return the first ChildConfigSalesOrder filtered by the OetbCon2PickedByForce column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2pickedbyproc(string $OetbCon2PickedByProc) Return the first ChildConfigSalesOrder filtered by the OetbCon2PickedByProc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2packedbyuse(string $OetbCon2PackedByUse) Return the first ChildConfigSalesOrder filtered by the OetbCon2PackedByUse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2packedbyforce(string $OetbCon2PackedByForce) Return the first ChildConfigSalesOrder filtered by the OetbCon2PackedByForce column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2verifiedbyuse(string $OetbCon2VerifiedByUse) Return the first ChildConfigSalesOrder filtered by the OetbCon2VerifiedByUse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2verifiedbylogin(string $OetbCon2VerifiedByLogin) Return the first ChildConfigSalesOrder filtered by the OetbCon2VerifiedByLogin column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2verifiedbyforce(string $OetbCon2VerifiedByForce) Return the first ChildConfigSalesOrder filtered by the OetbCon2VerifiedByForce column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfoptlabl1(string $OetbConfOptLabl1) Return the first ChildConfigSalesOrder filtered by the OetbConfOptLabl1 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2ucode1force(string $OetbCon2Ucode1Force) Return the first ChildConfigSalesOrder filtered by the OetbCon2Ucode1Force column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfoptlabl2(string $OetbConfOptLabl2) Return the first ChildConfigSalesOrder filtered by the OetbConfOptLabl2 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2ucode2force(string $OetbCon2Ucode2Force) Return the first ChildConfigSalesOrder filtered by the OetbCon2Ucode2Force column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfoptlabl3(string $OetbConfOptLabl3) Return the first ChildConfigSalesOrder filtered by the OetbConfOptLabl3 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2ucode3force(string $OetbCon2Ucode3Force) Return the first ChildConfigSalesOrder filtered by the OetbCon2Ucode3Force column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfoptlabl4(string $OetbConfOptLabl4) Return the first ChildConfigSalesOrder filtered by the OetbConfOptLabl4 column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2ucode4force(string $OetbCon2Ucode4Force) Return the first ChildConfigSalesOrder filtered by the OetbCon2Ucode4Force column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfverifyafterpack(string $OetbConfVerifyAfterPack) Return the first ChildConfigSalesOrder filtered by the OetbConfVerifyAfterPack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfhistyrsback(int $OetbConfHistYrsBack) Return the first ChildConfigSalesOrder filtered by the OetbConfHistYrsBack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfrqstcatlg(string $OetbConfRqstCatlg) Return the first ChildConfigSalesOrder filtered by the OetbConfRqstCatlg column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2conpick(string $OetbCon2ConPick) Return the first ChildConfigSalesOrder filtered by the OetbCon2ConPick column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2allowpick(string $OetbCon2AllowPick) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowPick column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2combinesame(string $OetbCon2CombineSame) Return the first ChildConfigSalesOrder filtered by the OetbCon2CombineSame column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3autovernitems(string $OetbCon3AutoVerNItems) Return the first ChildConfigSalesOrder filtered by the OetbCon3AutoVerNItems column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2allowzeroqty(string $OetbCon2AllowZeroQty) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowZeroQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2allowinvalidwhse(string $OetbCon2AllowInvalidWhse) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowInvalidWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2showediinfo(string $OetbCon2ShowEdiInfo) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShowEdiInfo column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2addonsales(string $OetbCon2AddOnSales) Return the first ChildConfigSalesOrder filtered by the OetbCon2AddOnSales column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2forcedbkord(string $OetbCon2ForcedBkord) Return the first ChildConfigSalesOrder filtered by the OetbCon2ForcedBkord column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2updtprcdisc(string $OetbCon2UpdtPrcDisc) Return the first ChildConfigSalesOrder filtered by the OetbCon2UpdtPrcDisc column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2autopack(string $OetbCon2AutoPack) Return the first ChildConfigSalesOrder filtered by the OetbCon2AutoPack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2pickboprtzqts(string $OetbCon2PickBoPrtZqts) Return the first ChildConfigSalesOrder filtered by the OetbCon2PickBoPrtZqts column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3pick00noship(string $OetbCon3Pick00NoShip) Return the first ChildConfigSalesOrder filtered by the OetbCon3Pick00NoShip column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2standordlead(string $OetbCon2StandOrdLead) Return the first ChildConfigSalesOrder filtered by the OetbCon2StandOrdLead column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2standordamnt(int $OetbCon2StandOrdAmnt) Return the first ChildConfigSalesOrder filtered by the OetbCon2StandOrdAmnt column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2inactitemcntrl(string $OetbCon2InactItemCntrl) Return the first ChildConfigSalesOrder filtered by the OetbCon2InactItemCntrl column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon2useitemref(string $OetbCon2UseItemRef) Return the first ChildConfigSalesOrder filtered by the OetbCon2UseItemRef column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3upsnaftarecords(string $OetbCon3UpsNaftaRecords) Return the first ChildConfigSalesOrder filtered by the OetbCon3UpsNaftaRecords column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdfltshipwhse(string $OetbConfDfltShipWhse) Return the first ChildConfigSalesOrder filtered by the OetbConfDfltShipWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfdfltorigwhse(string $OetbConfDfltOrigWhse) Return the first ChildConfigSalesOrder filtered by the OetbConfDfltOrigWhse column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfinvcwithpack(string $OetbConfInvcWithPack) Return the first ChildConfigSalesOrder filtered by the OetbConfInvcWithPack column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfcarrycntrqty(string $OetbConfCarryCntrQty) Return the first ChildConfigSalesOrder filtered by the OetbConfCarryCntrQty column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3useordras(string $OetbCon3UseOrdrAs) Return the first ChildConfigSalesOrder filtered by the OetbCon3UseOrdrAs column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbconfuseordrsource(string $OetbConfUseOrdrSource) Return the first ChildConfigSalesOrder filtered by the OetbConfUseOrdrSource column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3ccprocessor(string $OetbCon3CcProcessor) Return the first ChildConfigSalesOrder filtered by the OetbCon3CcProcessor column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3creditcardcap(string $OetbCon3CreditCardCap) Return the first ChildConfigSalesOrder filtered by the OetbCon3CreditCardCap column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3keyorcccap(string $OetbCon3KeyOrCcCap) Return the first ChildConfigSalesOrder filtered by the OetbCon3KeyOrCcCap column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3ccxoverlay(string $OetbCon3CcXOverlay) Return the first ChildConfigSalesOrder filtered by the OetbCon3CcXOverlay column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3cctimeout(int $OetbCon3CcTimeOut) Return the first ChildConfigSalesOrder filtered by the OetbCon3CcTimeOut column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3signaturecapture(string $OetbCon3SignatureCapture) Return the first ChildConfigSalesOrder filtered by the OetbCon3SignatureCapture column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3ccpreapproval(string $OetbCon3CcPreapproval) Return the first ChildConfigSalesOrder filtered by the OetbCon3CcPreapproval column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3forceccnbrentry(string $OetbCon3ForceCcNbrEntry) Return the first ChildConfigSalesOrder filtered by the OetbCon3ForceCcNbrEntry column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3intritemnotes(string $OetbCon3IntrItemNotes) Return the first ChildConfigSalesOrder filtered by the OetbCon3IntrItemNotes column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3mtrcert(string $OetbCon3MtrCert) Return the first ChildConfigSalesOrder filtered by the OetbCon3MtrCert column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3cofccert(string $OetbCon3CofcCert) Return the first ChildConfigSalesOrder filtered by the OetbCon3CofcCert column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigSalesOrder filtered by the DateUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigSalesOrder filtered by the TimeUpdtd column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByDummy(string $dummy) Return the first ChildConfigSalesOrder filtered by the dummy column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildConfigSalesOrder[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildConfigSalesOrder objects based on current ModelCriteria
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfkey(int $OetbConfKey) Return ChildConfigSalesOrder objects filtered by the OetbConfKey column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfglifac(string $OetbConfGlIfac) Return ChildConfigSalesOrder objects filtered by the OetbConfGlIfac column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfinifac(string $OetbConfInIfac) Return ChildConfigSalesOrder objects filtered by the OetbConfInIfac column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfrelivty(string $OetbConfRelIvty) Return ChildConfigSalesOrder objects filtered by the OetbConfRelIvty column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfuseordrnbr(string $OetbConfUseOrdrNbr) Return ChildConfigSalesOrder objects filtered by the OetbConfUseOrdrNbr column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdefrqstdate(string $OetbConfDefRqstDate) Return ChildConfigSalesOrder objects filtered by the OetbConfDefRqstDate column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfusecancdate(string $OetbConfUseCancDate) Return ChildConfigSalesOrder objects filtered by the OetbConfUseCancDate column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfshowsp(string $OetbConfShowSp) Return ChildConfigSalesOrder objects filtered by the OetbConfShowSp column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfjrnlsort(int $OetbConfJrnlSort) Return ChildConfigSalesOrder objects filtered by the OetbConfJrnlSort column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfuseprepsoopt(string $OetbConfUsePrepSoOpt) Return ChildConfigSalesOrder objects filtered by the OetbConfUsePrepSoOpt column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdispbillto(string $OetbConfDispBillTo) Return ChildConfigSalesOrder objects filtered by the OetbConfDispBillTo column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfslctflm(string $OetbConfSlctFlm) Return ChildConfigSalesOrder objects filtered by the OetbConfSlctFlm column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3usestockpull(string $OetbCon3UseStockPull) Return ChildConfigSalesOrder objects filtered by the OetbCon3UseStockPull column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfqtytoship(string $OetbConfQtyToShip) Return ChildConfigSalesOrder objects filtered by the OetbConfQtyToShip column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfqtytoshipdef(string $OetbConfQtyToShipDef) Return ChildConfigSalesOrder objects filtered by the OetbConfQtyToShipDef column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdfltordrqty(string $OetbConfDfltOrdrQty) Return ChildConfigSalesOrder objects filtered by the OetbConfDfltOrdrQty column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfallocqtytoship(string $OetbConfAllocQtyToShip) Return ChildConfigSalesOrder objects filtered by the OetbConfAllocQtyToShip column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfoverallocqts(string $OetbConfOverAllocQts) Return ChildConfigSalesOrder objects filtered by the OetbConfOverAllocQts column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3completelotbin(string $OetbCon3CompleteLotBin) Return ChildConfigSalesOrder objects filtered by the OetbCon3CompleteLotBin column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3rqtsopt(string $OetbCon3RqtsOpt) Return ChildConfigSalesOrder objects filtered by the OetbCon3RqtsOpt column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2shipcomphold(int $OetbCon2ShipCompHold) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShipCompHold column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3usesaleforecast(string $OetbCon3UseSaleForecast) Return ChildConfigSalesOrder objects filtered by the OetbCon3UseSaleForecast column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfverfstopneg(string $OetbConfVerfStopNeg) Return ChildConfigSalesOrder objects filtered by the OetbConfVerfStopNeg column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfverfaudtrept(string $OetbConfVerfAudtRept) Return ChildConfigSalesOrder objects filtered by the OetbConfVerfAudtRept column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfagelevldisp(string $OetbConfAgeLevlDisp) Return ChildConfigSalesOrder objects filtered by the OetbConfAgeLevlDisp column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfagealltime(string $OetbConfAgeAllTime) Return ChildConfigSalesOrder objects filtered by the OetbConfAgeAllTime column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfageathold(string $OetbConfAgeAtHold) Return ChildConfigSalesOrder objects filtered by the OetbConfAgeAtHold column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfshowatlevl(string $OetbConfShowAtLevl) Return ChildConfigSalesOrder objects filtered by the OetbConfShowAtLevl column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfshowitem(string $OetbConfShowItem) Return ChildConfigSalesOrder objects filtered by the OetbConfShowItem column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfstoppnt(string $OetbConfStopPnt) Return ChildConfigSalesOrder objects filtered by the OetbConfStopPnt column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfpricwind(string $OetbConfPricWind) Return ChildConfigSalesOrder objects filtered by the OetbConfPricWind column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfshowcost(string $OetbConfShowCost) Return ChildConfigSalesOrder objects filtered by the OetbConfShowCost column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfcosttouse(string $OetbConfCostToUse) Return ChildConfigSalesOrder objects filtered by the OetbConfCostToUse column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfshowmarg(string $OetbConfShowMarg) Return ChildConfigSalesOrder objects filtered by the OetbConfShowMarg column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconffxoe(string $OetbConfFxOe) Return ChildConfigSalesOrder objects filtered by the OetbConfFxOe column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconffxinv(string $OetbConfFxInv) Return ChildConfigSalesOrder objects filtered by the OetbConfFxInv column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdispvia(string $OetbConfDispVia) Return ChildConfigSalesOrder objects filtered by the OetbConfDispVia column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdispcaseqty(string $OetbConfDispCaseQty) Return ChildConfigSalesOrder objects filtered by the OetbConfDispCaseQty column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconffrtin(string $OetbConfFrtIn) Return ChildConfigSalesOrder objects filtered by the OetbConfFrtIn column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconffrtinglacct(string $OetbConfFrtInGlAcct) Return ChildConfigSalesOrder objects filtered by the OetbConfFrtInGlAcct column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfmincharge(string $OetbConfMinCharge) Return ChildConfigSalesOrder objects filtered by the OetbConfMinCharge column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfminchrgglacct(string $OetbConfMinChrgGlAcct) Return ChildConfigSalesOrder objects filtered by the OetbConfMinChrgGlAcct column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdropshipchrg(string $OetbConfDropShipChrg) Return ChildConfigSalesOrder objects filtered by the OetbConfDropShipChrg column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdropshpglacct(string $OetbConfDropShpGlAcct) Return ChildConfigSalesOrder objects filtered by the OetbConfDropShpGlAcct column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfnontaxcustcode(string $OetbConfNonTaxCustCode) Return ChildConfigSalesOrder objects filtered by the OetbConfNonTaxCustCode column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfhstaxid(string $OetbConfHsTaxId) Return ChildConfigSalesOrder objects filtered by the OetbConfHsTaxId column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfhsfrtid(string $OetbConfHsFrtId) Return ChildConfigSalesOrder objects filtered by the OetbConfHsFrtId column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfhsmiscid(string $OetbConfHsMiscId) Return ChildConfigSalesOrder objects filtered by the OetbConfHsMiscId column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2hscusdid(string $OetbCon2HsCusdId) Return ChildConfigSalesOrder objects filtered by the OetbCon2HsCusdId column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3hsfrtinid(string $OetbCon3HsFrtInId) Return ChildConfigSalesOrder objects filtered by the OetbCon3HsFrtInId column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3hsdropid(string $OetbCon3HsDropId) Return ChildConfigSalesOrder objects filtered by the OetbCon3HsDropId column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3hsminordid(string $OetbCon3HsMinordId) Return ChildConfigSalesOrder objects filtered by the OetbCon3HsMinordId column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfheadgetdef(string $OetbConfHeadGetDef) Return ChildConfigSalesOrder objects filtered by the OetbConfHeadGetDef column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfitemgetdef(string $OetbConfItemGetDef) Return ChildConfigSalesOrder objects filtered by the OetbConfItemGetDef column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfautogetcust(string $OetbConfAutoGetCust) Return ChildConfigSalesOrder objects filtered by the OetbConfAutoGetCust column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3autogetitem(string $OetbCon3AutoGetItem) Return ChildConfigSalesOrder objects filtered by the OetbCon3AutoGetItem column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfrqstheaddtl(string $OetbConfRqstHeadDtl) Return ChildConfigSalesOrder objects filtered by the OetbConfRqstHeadDtl column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfcancheaddtl(string $OetbConfCancHeadDtl) Return ChildConfigSalesOrder objects filtered by the OetbConfCancHeadDtl column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfuseinvcasship(string $OetbConfUseInvcAsShip) Return ChildConfigSalesOrder objects filtered by the OetbConfUseInvcAsShip column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3usearrvdate(string $OetbCon3UseArrvDate) Return ChildConfigSalesOrder objects filtered by the OetbCon3UseArrvDate column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfseparatecred(string $OetbConfSeparateCred) Return ChildConfigSalesOrder objects filtered by the OetbConfSeparateCred column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3applycredits(string $OetbCon3ApplyCredits) Return ChildConfigSalesOrder objects filtered by the OetbCon3ApplyCredits column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfwarnnotnew(string $OetbConfWarnNotNew) Return ChildConfigSalesOrder objects filtered by the OetbConfWarnNotNew column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfwarnbotozero(string $OetbConfWarnBoToZero) Return ChildConfigSalesOrder objects filtered by the OetbConfWarnBoToZero column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2providerouting(string $OetbCon2ProvideRouting) Return ChildConfigSalesOrder objects filtered by the OetbCon2ProvideRouting column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2srtrtbyrqstdte(string $OetbCon2SrtRtByRqstDte) Return ChildConfigSalesOrder objects filtered by the OetbCon2SrtRtByRqstDte column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfusesoreview(string $OetbConfUseSoReview) Return ChildConfigSalesOrder objects filtered by the OetbConfUseSoReview column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfpicknotedef(string $OetbConfPickNoteDef) Return ChildConfigSalesOrder objects filtered by the OetbConfPickNoteDef column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfpacknotedef(string $OetbConfPackNoteDef) Return ChildConfigSalesOrder objects filtered by the OetbConfPackNoteDef column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfpicksort(string $OetbConfPickSort) Return ChildConfigSalesOrder objects filtered by the OetbConfPickSort column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfpacksort(string $OetbConfPackSort) Return ChildConfigSalesOrder objects filtered by the OetbConfPackSort column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfprtpriconly(string $OetbConfPrtPricOnly) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtPricOnly column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfprtneg(string $OetbConfPrtNeg) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtNeg column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2prtpackageinfo(string $OetbCon2PrtPackageInfo) Return ChildConfigSalesOrder objects filtered by the OetbCon2PrtPackageInfo column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2innerpacklabel(string $OetbCon2InnerPackLabel) Return ChildConfigSalesOrder objects filtered by the OetbCon2InnerPackLabel column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2outerpacklabel(string $OetbCon2OuterPackLabel) Return ChildConfigSalesOrder objects filtered by the OetbCon2OuterPackLabel column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2shiptarelabel(string $OetbCon2ShipTareLabel) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShipTareLabel column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfprtpick(string $OetbConfPrtPick) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtPick column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfpicprioseq(string $OetbConfPicPrioSeq) Return ChildConfigSalesOrder objects filtered by the OetbConfPicPrioSeq column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfprtpack(string $OetbConfPrtPack) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtPack column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfprtinv(string $OetbConfPrtInv) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtInv column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2prtcredmemo(string $OetbCon2PrtCredMemo) Return ChildConfigSalesOrder objects filtered by the OetbCon2PrtCredMemo column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfcrntdate(string $OetbConfCrntDate) Return ChildConfigSalesOrder objects filtered by the OetbConfCrntDate column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfmarkpicked(string $OetbConfMarkPicked) Return ChildConfigSalesOrder objects filtered by the OetbConfMarkPicked column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfshowunavail(string $OetbConfShowUnavail) Return ChildConfigSalesOrder objects filtered by the OetbConfShowUnavail column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdecplaces(int $OetbConfDecPlaces) Return ChildConfigSalesOrder objects filtered by the OetbConfDecPlaces column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfwarndup(string $OetbConfWarnDup) Return ChildConfigSalesOrder objects filtered by the OetbConfWarnDup column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdefpick(string $OetbConfDefPick) Return ChildConfigSalesOrder objects filtered by the OetbConfDefPick column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdefpack(string $OetbConfDefPack) Return ChildConfigSalesOrder objects filtered by the OetbConfDefPack column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdefinvc(string $OetbConfDefInvc) Return ChildConfigSalesOrder objects filtered by the OetbConfDefInvc column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdefack(string $OetbConfDefAck) Return ChildConfigSalesOrder objects filtered by the OetbConfDefAck column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfacksortopt(string $OetbConfAckSortOpt) Return ChildConfigSalesOrder objects filtered by the OetbConfAckSortOpt column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfreleasenbr(string $OetbConfReleaseNbr) Return ChildConfigSalesOrder objects filtered by the OetbConfReleaseNbr column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfpodetlinenbr(string $OetbConfPoDetLineNbr) Return ChildConfigSalesOrder objects filtered by the OetbConfPoDetLineNbr column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdetlinebinnbr(string $OetbConfDetLineBinNbr) Return ChildConfigSalesOrder objects filtered by the OetbConfDetLineBinNbr column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfsplitbywhse(string $OetbConfSplitByWhse) Return ChildConfigSalesOrder objects filtered by the OetbConfSplitByWhse column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3allowmultwhse(string $OetbCon3AllowMultWhse) Return ChildConfigSalesOrder objects filtered by the OetbCon3AllowMultWhse column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfuseorigwhse(string $OetbConfUseOrigWhse) Return ChildConfigSalesOrder objects filtered by the OetbConfUseOrigWhse column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfuseesosingle(string $OetbConfUseEsoSingle) Return ChildConfigSalesOrder objects filtered by the OetbConfUseEsoSingle column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfcreatepo(string $OetbConfCreatePo) Return ChildConfigSalesOrder objects filtered by the OetbConfCreatePo column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfbestprice(string $OetbConfBestPrice) Return ChildConfigSalesOrder objects filtered by the OetbConfBestPrice column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfesobacktonew(string $OetbConfEsoBackToNew) Return ChildConfigSalesOrder objects filtered by the OetbConfEsoBackToNew column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfpickprintdrop(string $OetbConfPickPrintDrop) Return ChildConfigSalesOrder objects filtered by the OetbConfPickPrintDrop column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfwarnmultpo(string $OetbConfWarnMultPo) Return ChildConfigSalesOrder objects filtered by the OetbConfWarnMultPo column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfalertitemquote(string $OetbConfAlertItemQuote) Return ChildConfigSalesOrder objects filtered by the OetbConfAlertItemQuote column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3askchgprcwqty(string $OetbCon3AskChgPrcWQty) Return ChildConfigSalesOrder objects filtered by the OetbCon3AskChgPrcWQty column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3tenqtybrks(string $OetbCon3TenQtyBrks) Return ChildConfigSalesOrder objects filtered by the OetbCon3TenQtyBrks column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdecordrpric(int $OetbConfDecOrdrPric) Return ChildConfigSalesOrder objects filtered by the OetbConfDecOrdrPric column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2provlostsales(string $OetbCon2ProvLostSales) Return ChildConfigSalesOrder objects filtered by the OetbCon2ProvLostSales column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2askreasoncode(string $OetbCon2AskReasonCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2AskReasonCode column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2defreasoncode(string $OetbCon2DefReasonCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefReasonCode column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2bordcntl(string $OetbCon2BordCntl) Return ChildConfigSalesOrder objects filtered by the OetbCon2BordCntl column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2defreabocode(string $OetbCon2DefReaBoCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefReaBoCode column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2numdayssavls(int $OetbCon2NumDaysSavLs) Return ChildConfigSalesOrder objects filtered by the OetbCon2NumDaysSavLs column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2callbacknotif(string $OetbCon2CallBackNotif) Return ChildConfigSalesOrder objects filtered by the OetbCon2CallBackNotif column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2defdayswhenin(int $OetbCon2DefDaysWhenIn) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefDaysWhenIn column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2addsubsls(string $OetbCon2AddSubsLs) Return ChildConfigSalesOrder objects filtered by the OetbCon2AddSubsLs column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2defreasubscode(string $OetbCon2DefReaSubsCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefReaSubsCode column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2ordtypnorm(string $OetbCon2OrdTypNorm) Return ChildConfigSalesOrder objects filtered by the OetbCon2OrdTypNorm column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2ordtyprep(string $OetbCon2OrdTypRep) Return ChildConfigSalesOrder objects filtered by the OetbCon2OrdTypRep column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2ordtypserv(string $OetbCon2OrdTypServ) Return ChildConfigSalesOrder objects filtered by the OetbCon2OrdTypServ column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2defordtyp(string $OetbCon2DefOrdTyp) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefOrdTyp column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfchgpric(string $OetbConfChgPric) Return ChildConfigSalesOrder objects filtered by the OetbConfChgPric column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2spordpricezero(string $OetbCon2SpordPriceZero) Return ChildConfigSalesOrder objects filtered by the OetbCon2SpordPriceZero column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfinactpricezero(string $OetbConfInactPriceZero) Return ChildConfigSalesOrder objects filtered by the OetbConfInactPriceZero column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2reseq(string $OetbCon2Reseq) Return ChildConfigSalesOrder objects filtered by the OetbCon2Reseq column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2reseqby(string $OetbCon2ReseqBy) Return ChildConfigSalesOrder objects filtered by the OetbCon2ReseqBy column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2minqtysales(string $OetbCon2MinQtySales) Return ChildConfigSalesOrder objects filtered by the OetbCon2MinQtySales column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2chgorder(string $OetbCon2ChgOrder) Return ChildConfigSalesOrder objects filtered by the OetbCon2ChgOrder column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2vercomp(string $OetbCon2VerComp) Return ChildConfigSalesOrder objects filtered by the OetbCon2VerComp column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2prtinv(string $OetbCon2PrtInv) Return ChildConfigSalesOrder objects filtered by the OetbCon2PrtInv column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2dynamicpicktick(string $OetbCon2DynamicPickTick) Return ChildConfigSalesOrder objects filtered by the OetbCon2DynamicPickTick column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2dynamicinvoice(string $OetbCon2DynamicInvoice) Return ChildConfigSalesOrder objects filtered by the OetbCon2DynamicInvoice column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2edidefinvoice(string $OetbCon2EdiDefInvoice) Return ChildConfigSalesOrder objects filtered by the OetbCon2EdiDefInvoice column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2allowccpick(string $OetbCon2AllowCcPick) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowCcPick column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2autoccwind(string $OetbCon2AutoCcWind) Return ChildConfigSalesOrder objects filtered by the OetbCon2AutoCcWind column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2autoccupdate(string $OetbCon2AutoCcUpdate) Return ChildConfigSalesOrder objects filtered by the OetbCon2AutoCcUpdate column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2allowapvdccchg(string $OetbCon2AllowApvdCcChg) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowApvdCcChg column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3apvdbckordclear(string $OetbCon3ApvdBckordClear) Return ChildConfigSalesOrder objects filtered by the OetbCon3ApvdBckordClear column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2polwhichcost(string $OetbCon2PolWhichCost) Return ChildConfigSalesOrder objects filtered by the OetbCon2PolWhichCost column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2revhazard(string $OetbCon2RevHazard) Return ChildConfigSalesOrder objects filtered by the OetbCon2RevHazard column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2showdisclist(string $OetbCon2ShowDiscList) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShowDiscList column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2chglist(string $OetbCon2ChgList) Return ChildConfigSalesOrder objects filtered by the OetbCon2ChgList column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2maillist(string $OetbCon2MailList) Return ChildConfigSalesOrder objects filtered by the OetbCon2MailList column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2nameformat(string $OetbCon2NameFormat) Return ChildConfigSalesOrder objects filtered by the OetbCon2NameFormat column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2mailidtype(string $OetbCon2MailIdType) Return ChildConfigSalesOrder objects filtered by the OetbCon2MailIdType column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2cashdrawerpswd(string $OetbCon2CashDrawerPswd) Return ChildConfigSalesOrder objects filtered by the OetbCon2CashDrawerPswd column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2upsonline(string $OetbCon2UpsOnline) Return ChildConfigSalesOrder objects filtered by the OetbCon2UpsOnline column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2picorver(string $OetbCon2PicOrVer) Return ChildConfigSalesOrder objects filtered by the OetbCon2PicOrVer column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2combback(string $OetbCon2CombBack) Return ChildConfigSalesOrder objects filtered by the OetbCon2CombBack column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2frtallowamt(int $OetbCon2FrtAllowAmt) Return ChildConfigSalesOrder objects filtered by the OetbCon2FrtAllowAmt column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3shipmoreordered(string $OetbCon3ShipMoreOrdered) Return ChildConfigSalesOrder objects filtered by the OetbCon3ShipMoreOrdered column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3warnshipmore(string $OetbCon3WarnShipMore) Return ChildConfigSalesOrder objects filtered by the OetbCon3WarnShipMore column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2usedept(string $OetbCon2UseDept) Return ChildConfigSalesOrder objects filtered by the OetbCon2UseDept column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2usedivision(string $OetbCon2UseDivision) Return ChildConfigSalesOrder objects filtered by the OetbCon2UseDivision column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2defmfecode(string $OetbCon2DefMfeCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefMfeCode column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2showavgcost(string $OetbCon2ShowAvgCost) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShowAvgCost column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2fedex(string $OetbCon2FedEx) Return ChildConfigSalesOrder objects filtered by the OetbCon2FedEx column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3deffrghtgrup(string $OetbCon3DefFrghtGrup) Return ChildConfigSalesOrder objects filtered by the OetbCon3DefFrghtGrup column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3upsmysqldbname(string $OetbCon3UpsMysqlDbname) Return ChildConfigSalesOrder objects filtered by the OetbCon3UpsMysqlDbname column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfuseoptcode(string $OetbConfUseOptCode) Return ChildConfigSalesOrder objects filtered by the OetbConfUseOptCode column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfscn4opt(string $OetbConfScn4Opt) Return ChildConfigSalesOrder objects filtered by the OetbConfScn4Opt column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2takenbyuse(string $OetbCon2TakenByUse) Return ChildConfigSalesOrder objects filtered by the OetbCon2TakenByUse column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2takenbylogin(string $OetbCon2TakenByLogin) Return ChildConfigSalesOrder objects filtered by the OetbCon2TakenByLogin column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2takenbyforce(string $OetbCon2TakenByForce) Return ChildConfigSalesOrder objects filtered by the OetbCon2TakenByForce column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2pickedbyuse(string $OetbCon2PickedByUse) Return ChildConfigSalesOrder objects filtered by the OetbCon2PickedByUse column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2pickedbyforce(string $OetbCon2PickedByForce) Return ChildConfigSalesOrder objects filtered by the OetbCon2PickedByForce column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2pickedbyproc(string $OetbCon2PickedByProc) Return ChildConfigSalesOrder objects filtered by the OetbCon2PickedByProc column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2packedbyuse(string $OetbCon2PackedByUse) Return ChildConfigSalesOrder objects filtered by the OetbCon2PackedByUse column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2packedbyforce(string $OetbCon2PackedByForce) Return ChildConfigSalesOrder objects filtered by the OetbCon2PackedByForce column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2verifiedbyuse(string $OetbCon2VerifiedByUse) Return ChildConfigSalesOrder objects filtered by the OetbCon2VerifiedByUse column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2verifiedbylogin(string $OetbCon2VerifiedByLogin) Return ChildConfigSalesOrder objects filtered by the OetbCon2VerifiedByLogin column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2verifiedbyforce(string $OetbCon2VerifiedByForce) Return ChildConfigSalesOrder objects filtered by the OetbCon2VerifiedByForce column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfoptlabl1(string $OetbConfOptLabl1) Return ChildConfigSalesOrder objects filtered by the OetbConfOptLabl1 column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2ucode1force(string $OetbCon2Ucode1Force) Return ChildConfigSalesOrder objects filtered by the OetbCon2Ucode1Force column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfoptlabl2(string $OetbConfOptLabl2) Return ChildConfigSalesOrder objects filtered by the OetbConfOptLabl2 column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2ucode2force(string $OetbCon2Ucode2Force) Return ChildConfigSalesOrder objects filtered by the OetbCon2Ucode2Force column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfoptlabl3(string $OetbConfOptLabl3) Return ChildConfigSalesOrder objects filtered by the OetbConfOptLabl3 column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2ucode3force(string $OetbCon2Ucode3Force) Return ChildConfigSalesOrder objects filtered by the OetbCon2Ucode3Force column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfoptlabl4(string $OetbConfOptLabl4) Return ChildConfigSalesOrder objects filtered by the OetbConfOptLabl4 column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2ucode4force(string $OetbCon2Ucode4Force) Return ChildConfigSalesOrder objects filtered by the OetbCon2Ucode4Force column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfverifyafterpack(string $OetbConfVerifyAfterPack) Return ChildConfigSalesOrder objects filtered by the OetbConfVerifyAfterPack column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfhistyrsback(int $OetbConfHistYrsBack) Return ChildConfigSalesOrder objects filtered by the OetbConfHistYrsBack column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfrqstcatlg(string $OetbConfRqstCatlg) Return ChildConfigSalesOrder objects filtered by the OetbConfRqstCatlg column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2conpick(string $OetbCon2ConPick) Return ChildConfigSalesOrder objects filtered by the OetbCon2ConPick column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2allowpick(string $OetbCon2AllowPick) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowPick column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2combinesame(string $OetbCon2CombineSame) Return ChildConfigSalesOrder objects filtered by the OetbCon2CombineSame column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3autovernitems(string $OetbCon3AutoVerNItems) Return ChildConfigSalesOrder objects filtered by the OetbCon3AutoVerNItems column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2allowzeroqty(string $OetbCon2AllowZeroQty) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowZeroQty column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2allowinvalidwhse(string $OetbCon2AllowInvalidWhse) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowInvalidWhse column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2showediinfo(string $OetbCon2ShowEdiInfo) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShowEdiInfo column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2addonsales(string $OetbCon2AddOnSales) Return ChildConfigSalesOrder objects filtered by the OetbCon2AddOnSales column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2forcedbkord(string $OetbCon2ForcedBkord) Return ChildConfigSalesOrder objects filtered by the OetbCon2ForcedBkord column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2updtprcdisc(string $OetbCon2UpdtPrcDisc) Return ChildConfigSalesOrder objects filtered by the OetbCon2UpdtPrcDisc column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2autopack(string $OetbCon2AutoPack) Return ChildConfigSalesOrder objects filtered by the OetbCon2AutoPack column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2pickboprtzqts(string $OetbCon2PickBoPrtZqts) Return ChildConfigSalesOrder objects filtered by the OetbCon2PickBoPrtZqts column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3pick00noship(string $OetbCon3Pick00NoShip) Return ChildConfigSalesOrder objects filtered by the OetbCon3Pick00NoShip column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2standordlead(string $OetbCon2StandOrdLead) Return ChildConfigSalesOrder objects filtered by the OetbCon2StandOrdLead column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2standordamnt(int $OetbCon2StandOrdAmnt) Return ChildConfigSalesOrder objects filtered by the OetbCon2StandOrdAmnt column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2inactitemcntrl(string $OetbCon2InactItemCntrl) Return ChildConfigSalesOrder objects filtered by the OetbCon2InactItemCntrl column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon2useitemref(string $OetbCon2UseItemRef) Return ChildConfigSalesOrder objects filtered by the OetbCon2UseItemRef column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3upsnaftarecords(string $OetbCon3UpsNaftaRecords) Return ChildConfigSalesOrder objects filtered by the OetbCon3UpsNaftaRecords column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdfltshipwhse(string $OetbConfDfltShipWhse) Return ChildConfigSalesOrder objects filtered by the OetbConfDfltShipWhse column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfdfltorigwhse(string $OetbConfDfltOrigWhse) Return ChildConfigSalesOrder objects filtered by the OetbConfDfltOrigWhse column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfinvcwithpack(string $OetbConfInvcWithPack) Return ChildConfigSalesOrder objects filtered by the OetbConfInvcWithPack column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfcarrycntrqty(string $OetbConfCarryCntrQty) Return ChildConfigSalesOrder objects filtered by the OetbConfCarryCntrQty column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3useordras(string $OetbCon3UseOrdrAs) Return ChildConfigSalesOrder objects filtered by the OetbCon3UseOrdrAs column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbconfuseordrsource(string $OetbConfUseOrdrSource) Return ChildConfigSalesOrder objects filtered by the OetbConfUseOrdrSource column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3ccprocessor(string $OetbCon3CcProcessor) Return ChildConfigSalesOrder objects filtered by the OetbCon3CcProcessor column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3creditcardcap(string $OetbCon3CreditCardCap) Return ChildConfigSalesOrder objects filtered by the OetbCon3CreditCardCap column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3keyorcccap(string $OetbCon3KeyOrCcCap) Return ChildConfigSalesOrder objects filtered by the OetbCon3KeyOrCcCap column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3ccxoverlay(string $OetbCon3CcXOverlay) Return ChildConfigSalesOrder objects filtered by the OetbCon3CcXOverlay column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3cctimeout(int $OetbCon3CcTimeOut) Return ChildConfigSalesOrder objects filtered by the OetbCon3CcTimeOut column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3signaturecapture(string $OetbCon3SignatureCapture) Return ChildConfigSalesOrder objects filtered by the OetbCon3SignatureCapture column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3ccpreapproval(string $OetbCon3CcPreapproval) Return ChildConfigSalesOrder objects filtered by the OetbCon3CcPreapproval column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3forceccnbrentry(string $OetbCon3ForceCcNbrEntry) Return ChildConfigSalesOrder objects filtered by the OetbCon3ForceCcNbrEntry column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3intritemnotes(string $OetbCon3IntrItemNotes) Return ChildConfigSalesOrder objects filtered by the OetbCon3IntrItemNotes column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3mtrcert(string $OetbCon3MtrCert) Return ChildConfigSalesOrder objects filtered by the OetbCon3MtrCert column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByOetbcon3cofccert(string $OetbCon3CofcCert) Return ChildConfigSalesOrder objects filtered by the OetbCon3CofcCert column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByDateupdtd(string $DateUpdtd) Return ChildConfigSalesOrder objects filtered by the DateUpdtd column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByTimeupdtd(string $TimeUpdtd) Return ChildConfigSalesOrder objects filtered by the TimeUpdtd column
 * @method     ChildConfigSalesOrder[]|ObjectCollection findByDummy(string $dummy) Return ChildConfigSalesOrder objects filtered by the dummy column
 * @method     ChildConfigSalesOrder[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class ConfigSalesOrderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigSalesOrderQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigSalesOrder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigSalesOrderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigSalesOrderQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildConfigSalesOrderQuery) {
            return $criteria;
        }
        $query = new ChildConfigSalesOrderQuery();
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
     * @return ChildConfigSalesOrder|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(ConfigSalesOrderTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = ConfigSalesOrderTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildConfigSalesOrder A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OetbConfKey, OetbConfGlIfac, OetbConfInIfac, OetbConfRelIvty, OetbConfUseOrdrNbr, OetbConfDefRqstDate, OetbConfUseCancDate, OetbConfShowSp, OetbConfJrnlSort, OetbConfUsePrepSoOpt, OetbConfDispBillTo, OetbConfSlctFlm, OetbCon3UseStockPull, OetbConfQtyToShip, OetbConfQtyToShipDef, OetbConfDfltOrdrQty, OetbConfAllocQtyToShip, OetbConfOverAllocQts, OetbCon3CompleteLotBin, OetbCon3RqtsOpt, OetbCon2ShipCompHold, OetbCon3UseSaleForecast, OetbConfVerfStopNeg, OetbConfVerfAudtRept, OetbConfAgeLevlDisp, OetbConfAgeAllTime, OetbConfAgeAtHold, OetbConfShowAtLevl, OetbConfShowItem, OetbConfStopPnt, OetbConfPricWind, OetbConfShowCost, OetbConfCostToUse, OetbConfShowMarg, OetbConfFxOe, OetbConfFxInv, OetbConfDispVia, OetbConfDispCaseQty, OetbConfFrtIn, OetbConfFrtInGlAcct, OetbConfMinCharge, OetbConfMinChrgGlAcct, OetbConfDropShipChrg, OetbConfDropShpGlAcct, OetbConfNonTaxCustCode, OetbConfHsTaxId, OetbConfHsFrtId, OetbConfHsMiscId, OetbCon2HsCusdId, OetbCon3HsFrtInId, OetbCon3HsDropId, OetbCon3HsMinordId, OetbConfHeadGetDef, OetbConfItemGetDef, OetbConfAutoGetCust, OetbCon3AutoGetItem, OetbConfRqstHeadDtl, OetbConfCancHeadDtl, OetbConfUseInvcAsShip, OetbCon3UseArrvDate, OetbConfSeparateCred, OetbCon3ApplyCredits, OetbConfWarnNotNew, OetbConfWarnBoToZero, OetbCon2ProvideRouting, OetbCon2SrtRtByRqstDte, OetbConfUseSoReview, OetbConfPickNoteDef, OetbConfPackNoteDef, OetbConfPickSort, OetbConfPackSort, OetbConfPrtPricOnly, OetbConfPrtNeg, OetbCon2PrtPackageInfo, OetbCon2InnerPackLabel, OetbCon2OuterPackLabel, OetbCon2ShipTareLabel, OetbConfPrtPick, OetbConfPicPrioSeq, OetbConfPrtPack, OetbConfPrtInv, OetbCon2PrtCredMemo, OetbConfCrntDate, OetbConfMarkPicked, OetbConfShowUnavail, OetbConfDecPlaces, OetbConfWarnDup, OetbConfDefPick, OetbConfDefPack, OetbConfDefInvc, OetbConfDefAck, OetbConfAckSortOpt, OetbConfReleaseNbr, OetbConfPoDetLineNbr, OetbConfDetLineBinNbr, OetbConfSplitByWhse, OetbCon3AllowMultWhse, OetbConfUseOrigWhse, OetbConfUseEsoSingle, OetbConfCreatePo, OetbConfBestPrice, OetbConfEsoBackToNew, OetbConfPickPrintDrop, OetbConfWarnMultPo, OetbConfAlertItemQuote, OetbCon3AskChgPrcWQty, OetbCon3TenQtyBrks, OetbConfDecOrdrPric, OetbCon2ProvLostSales, OetbCon2AskReasonCode, OetbCon2DefReasonCode, OetbCon2BordCntl, OetbCon2DefReaBoCode, OetbCon2NumDaysSavLs, OetbCon2CallBackNotif, OetbCon2DefDaysWhenIn, OetbCon2AddSubsLs, OetbCon2DefReaSubsCode, OetbCon2OrdTypNorm, OetbCon2OrdTypRep, OetbCon2OrdTypServ, OetbCon2DefOrdTyp, OetbConfChgPric, OetbCon2SpordPriceZero, OetbConfInactPriceZero, OetbCon2Reseq, OetbCon2ReseqBy, OetbCon2MinQtySales, OetbCon2ChgOrder, OetbCon2VerComp, OetbCon2PrtInv, OetbCon2DynamicPickTick, OetbCon2DynamicInvoice, OetbCon2EdiDefInvoice, OetbCon2AllowCcPick, OetbCon2AutoCcWind, OetbCon2AutoCcUpdate, OetbCon2AllowApvdCcChg, OetbCon3ApvdBckordClear, OetbCon2PolWhichCost, OetbCon2RevHazard, OetbCon2ShowDiscList, OetbCon2ChgList, OetbCon2MailList, OetbCon2NameFormat, OetbCon2MailIdType, OetbCon2CashDrawerPswd, OetbCon2UpsOnline, OetbCon2PicOrVer, OetbCon2CombBack, OetbCon2FrtAllowAmt, OetbCon3ShipMoreOrdered, OetbCon3WarnShipMore, OetbCon2UseDept, OetbCon2UseDivision, OetbCon2DefMfeCode, OetbCon2ShowAvgCost, OetbCon2FedEx, OetbCon3DefFrghtGrup, OetbCon3UpsMysqlDbname, OetbConfUseOptCode, OetbConfScn4Opt, OetbCon2TakenByUse, OetbCon2TakenByLogin, OetbCon2TakenByForce, OetbCon2PickedByUse, OetbCon2PickedByForce, OetbCon2PickedByProc, OetbCon2PackedByUse, OetbCon2PackedByForce, OetbCon2VerifiedByUse, OetbCon2VerifiedByLogin, OetbCon2VerifiedByForce, OetbConfOptLabl1, OetbCon2Ucode1Force, OetbConfOptLabl2, OetbCon2Ucode2Force, OetbConfOptLabl3, OetbCon2Ucode3Force, OetbConfOptLabl4, OetbCon2Ucode4Force, OetbConfVerifyAfterPack, OetbConfHistYrsBack, OetbConfRqstCatlg, OetbCon2ConPick, OetbCon2AllowPick, OetbCon2CombineSame, OetbCon3AutoVerNItems, OetbCon2AllowZeroQty, OetbCon2AllowInvalidWhse, OetbCon2ShowEdiInfo, OetbCon2AddOnSales, OetbCon2ForcedBkord, OetbCon2UpdtPrcDisc, OetbCon2AutoPack, OetbCon2PickBoPrtZqts, OetbCon3Pick00NoShip, OetbCon2StandOrdLead, OetbCon2StandOrdAmnt, OetbCon2InactItemCntrl, OetbCon2UseItemRef, OetbCon3UpsNaftaRecords, OetbConfDfltShipWhse, OetbConfDfltOrigWhse, OetbConfInvcWithPack, OetbConfCarryCntrQty, OetbCon3UseOrdrAs, OetbConfUseOrdrSource, OetbCon3CcProcessor, OetbCon3CreditCardCap, OetbCon3KeyOrCcCap, OetbCon3CcXOverlay, OetbCon3CcTimeOut, OetbCon3SignatureCapture, OetbCon3CcPreapproval, OetbCon3ForceCcNbrEntry, OetbCon3IntrItemNotes, OetbCon3MtrCert, OetbCon3CofcCert, DateUpdtd, TimeUpdtd, dummy FROM so_config WHERE OetbConfKey = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildConfigSalesOrder $obj */
            $obj = new ChildConfigSalesOrder();
            $obj->hydrate($row);
            ConfigSalesOrderTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildConfigSalesOrder|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFKEY, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFKEY, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the OetbConfKey column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfkey(1234); // WHERE OetbConfKey = 1234
     * $query->filterByOetbconfkey(array(12, 34)); // WHERE OetbConfKey IN (12, 34)
     * $query->filterByOetbconfkey(array('min' => 12)); // WHERE OetbConfKey > 12
     * </code>
     *
     * @param     mixed $oetbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfkey($oetbconfkey = null, $comparison = null)
    {
        if (is_array($oetbconfkey)) {
            $useMinMax = false;
            if (isset($oetbconfkey['min'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFKEY, $oetbconfkey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbconfkey['max'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFKEY, $oetbconfkey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFKEY, $oetbconfkey, $comparison);
    }

    /**
     * Filter the query on the OetbConfGlIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfglifac('fooValue');   // WHERE OetbConfGlIfac = 'fooValue'
     * $query->filterByOetbconfglifac('%fooValue%', Criteria::LIKE); // WHERE OetbConfGlIfac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfglifac The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfglifac($oetbconfglifac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfglifac)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFGLIFAC, $oetbconfglifac, $comparison);
    }

    /**
     * Filter the query on the OetbConfInIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfinifac('fooValue');   // WHERE OetbConfInIfac = 'fooValue'
     * $query->filterByOetbconfinifac('%fooValue%', Criteria::LIKE); // WHERE OetbConfInIfac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfinifac The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfinifac($oetbconfinifac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfinifac)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFINIFAC, $oetbconfinifac, $comparison);
    }

    /**
     * Filter the query on the OetbConfRelIvty column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfrelivty('fooValue');   // WHERE OetbConfRelIvty = 'fooValue'
     * $query->filterByOetbconfrelivty('%fooValue%', Criteria::LIKE); // WHERE OetbConfRelIvty LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfrelivty The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfrelivty($oetbconfrelivty = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfrelivty)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFRELIVTY, $oetbconfrelivty, $comparison);
    }

    /**
     * Filter the query on the OetbConfUseOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseordrnbr('fooValue');   // WHERE OetbConfUseOrdrNbr = 'fooValue'
     * $query->filterByOetbconfuseordrnbr('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseOrdrNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfuseordrnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfuseordrnbr($oetbconfuseordrnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRNBR, $oetbconfuseordrnbr, $comparison);
    }

    /**
     * Filter the query on the OetbConfDefRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdefrqstdate('fooValue');   // WHERE OetbConfDefRqstDate = 'fooValue'
     * $query->filterByOetbconfdefrqstdate('%fooValue%', Criteria::LIKE); // WHERE OetbConfDefRqstDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfdefrqstdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdefrqstdate($oetbconfdefrqstdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdefrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDEFRQSTDATE, $oetbconfdefrqstdate, $comparison);
    }

    /**
     * Filter the query on the OetbConfUseCancDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfusecancdate('fooValue');   // WHERE OetbConfUseCancDate = 'fooValue'
     * $query->filterByOetbconfusecancdate('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseCancDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfusecancdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfusecancdate($oetbconfusecancdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfusecancdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSECANCDATE, $oetbconfusecancdate, $comparison);
    }

    /**
     * Filter the query on the OetbConfShowSp column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfshowsp('fooValue');   // WHERE OetbConfShowSp = 'fooValue'
     * $query->filterByOetbconfshowsp('%fooValue%', Criteria::LIKE); // WHERE OetbConfShowSp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfshowsp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfshowsp($oetbconfshowsp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfshowsp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSHOWSP, $oetbconfshowsp, $comparison);
    }

    /**
     * Filter the query on the OetbConfJrnlSort column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfjrnlsort(1234); // WHERE OetbConfJrnlSort = 1234
     * $query->filterByOetbconfjrnlsort(array(12, 34)); // WHERE OetbConfJrnlSort IN (12, 34)
     * $query->filterByOetbconfjrnlsort(array('min' => 12)); // WHERE OetbConfJrnlSort > 12
     * </code>
     *
     * @param     mixed $oetbconfjrnlsort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfjrnlsort($oetbconfjrnlsort = null, $comparison = null)
    {
        if (is_array($oetbconfjrnlsort)) {
            $useMinMax = false;
            if (isset($oetbconfjrnlsort['min'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFJRNLSORT, $oetbconfjrnlsort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbconfjrnlsort['max'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFJRNLSORT, $oetbconfjrnlsort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFJRNLSORT, $oetbconfjrnlsort, $comparison);
    }

    /**
     * Filter the query on the OetbConfUsePrepSoOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseprepsoopt('fooValue');   // WHERE OetbConfUsePrepSoOpt = 'fooValue'
     * $query->filterByOetbconfuseprepsoopt('%fooValue%', Criteria::LIKE); // WHERE OetbConfUsePrepSoOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfuseprepsoopt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfuseprepsoopt($oetbconfuseprepsoopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseprepsoopt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEPREPSOOPT, $oetbconfuseprepsoopt, $comparison);
    }

    /**
     * Filter the query on the OetbConfDispBillTo column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdispbillto('fooValue');   // WHERE OetbConfDispBillTo = 'fooValue'
     * $query->filterByOetbconfdispbillto('%fooValue%', Criteria::LIKE); // WHERE OetbConfDispBillTo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfdispbillto The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdispbillto($oetbconfdispbillto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdispbillto)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDISPBILLTO, $oetbconfdispbillto, $comparison);
    }

    /**
     * Filter the query on the OetbConfSlctFlm column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfslctflm('fooValue');   // WHERE OetbConfSlctFlm = 'fooValue'
     * $query->filterByOetbconfslctflm('%fooValue%', Criteria::LIKE); // WHERE OetbConfSlctFlm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfslctflm The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfslctflm($oetbconfslctflm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfslctflm)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSLCTFLM, $oetbconfslctflm, $comparison);
    }

    /**
     * Filter the query on the OetbCon3UseStockPull column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3usestockpull('fooValue');   // WHERE OetbCon3UseStockPull = 'fooValue'
     * $query->filterByOetbcon3usestockpull('%fooValue%', Criteria::LIKE); // WHERE OetbCon3UseStockPull LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3usestockpull The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3usestockpull($oetbcon3usestockpull = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3usestockpull)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3USESTOCKPULL, $oetbcon3usestockpull, $comparison);
    }

    /**
     * Filter the query on the OetbConfQtyToShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfqtytoship('fooValue');   // WHERE OetbConfQtyToShip = 'fooValue'
     * $query->filterByOetbconfqtytoship('%fooValue%', Criteria::LIKE); // WHERE OetbConfQtyToShip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfqtytoship The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfqtytoship($oetbconfqtytoship = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfqtytoship)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIP, $oetbconfqtytoship, $comparison);
    }

    /**
     * Filter the query on the OetbConfQtyToShipDef column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfqtytoshipdef('fooValue');   // WHERE OetbConfQtyToShipDef = 'fooValue'
     * $query->filterByOetbconfqtytoshipdef('%fooValue%', Criteria::LIKE); // WHERE OetbConfQtyToShipDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfqtytoshipdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfqtytoshipdef($oetbconfqtytoshipdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfqtytoshipdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIPDEF, $oetbconfqtytoshipdef, $comparison);
    }

    /**
     * Filter the query on the OetbConfDfltOrdrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdfltordrqty('fooValue');   // WHERE OetbConfDfltOrdrQty = 'fooValue'
     * $query->filterByOetbconfdfltordrqty('%fooValue%', Criteria::LIKE); // WHERE OetbConfDfltOrdrQty LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfdfltordrqty The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdfltordrqty($oetbconfdfltordrqty = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdfltordrqty)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDFLTORDRQTY, $oetbconfdfltordrqty, $comparison);
    }

    /**
     * Filter the query on the OetbConfAllocQtyToShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfallocqtytoship('fooValue');   // WHERE OetbConfAllocQtyToShip = 'fooValue'
     * $query->filterByOetbconfallocqtytoship('%fooValue%', Criteria::LIKE); // WHERE OetbConfAllocQtyToShip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfallocqtytoship The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfallocqtytoship($oetbconfallocqtytoship = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfallocqtytoship)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFALLOCQTYTOSHIP, $oetbconfallocqtytoship, $comparison);
    }

    /**
     * Filter the query on the OetbConfOverAllocQts column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfoverallocqts('fooValue');   // WHERE OetbConfOverAllocQts = 'fooValue'
     * $query->filterByOetbconfoverallocqts('%fooValue%', Criteria::LIKE); // WHERE OetbConfOverAllocQts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfoverallocqts The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfoverallocqts($oetbconfoverallocqts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfoverallocqts)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFOVERALLOCQTS, $oetbconfoverallocqts, $comparison);
    }

    /**
     * Filter the query on the OetbCon3CompleteLotBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3completelotbin('fooValue');   // WHERE OetbCon3CompleteLotBin = 'fooValue'
     * $query->filterByOetbcon3completelotbin('%fooValue%', Criteria::LIKE); // WHERE OetbCon3CompleteLotBin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3completelotbin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3completelotbin($oetbcon3completelotbin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3completelotbin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3COMPLETELOTBIN, $oetbcon3completelotbin, $comparison);
    }

    /**
     * Filter the query on the OetbCon3RqtsOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3rqtsopt('fooValue');   // WHERE OetbCon3RqtsOpt = 'fooValue'
     * $query->filterByOetbcon3rqtsopt('%fooValue%', Criteria::LIKE); // WHERE OetbCon3RqtsOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3rqtsopt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3rqtsopt($oetbcon3rqtsopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3rqtsopt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3RQTSOPT, $oetbcon3rqtsopt, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ShipCompHold column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2shipcomphold(1234); // WHERE OetbCon2ShipCompHold = 1234
     * $query->filterByOetbcon2shipcomphold(array(12, 34)); // WHERE OetbCon2ShipCompHold IN (12, 34)
     * $query->filterByOetbcon2shipcomphold(array('min' => 12)); // WHERE OetbCon2ShipCompHold > 12
     * </code>
     *
     * @param     mixed $oetbcon2shipcomphold The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2shipcomphold($oetbcon2shipcomphold = null, $comparison = null)
    {
        if (is_array($oetbcon2shipcomphold)) {
            $useMinMax = false;
            if (isset($oetbcon2shipcomphold['min'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SHIPCOMPHOLD, $oetbcon2shipcomphold['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2shipcomphold['max'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SHIPCOMPHOLD, $oetbcon2shipcomphold['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SHIPCOMPHOLD, $oetbcon2shipcomphold, $comparison);
    }

    /**
     * Filter the query on the OetbCon3UseSaleForecast column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3usesaleforecast('fooValue');   // WHERE OetbCon3UseSaleForecast = 'fooValue'
     * $query->filterByOetbcon3usesaleforecast('%fooValue%', Criteria::LIKE); // WHERE OetbCon3UseSaleForecast LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3usesaleforecast The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3usesaleforecast($oetbcon3usesaleforecast = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3usesaleforecast)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3USESALEFORECAST, $oetbcon3usesaleforecast, $comparison);
    }

    /**
     * Filter the query on the OetbConfVerfStopNeg column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfverfstopneg('fooValue');   // WHERE OetbConfVerfStopNeg = 'fooValue'
     * $query->filterByOetbconfverfstopneg('%fooValue%', Criteria::LIKE); // WHERE OetbConfVerfStopNeg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfverfstopneg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfverfstopneg($oetbconfverfstopneg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfverfstopneg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFVERFSTOPNEG, $oetbconfverfstopneg, $comparison);
    }

    /**
     * Filter the query on the OetbConfVerfAudtRept column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfverfaudtrept('fooValue');   // WHERE OetbConfVerfAudtRept = 'fooValue'
     * $query->filterByOetbconfverfaudtrept('%fooValue%', Criteria::LIKE); // WHERE OetbConfVerfAudtRept LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfverfaudtrept The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfverfaudtrept($oetbconfverfaudtrept = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfverfaudtrept)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFVERFAUDTREPT, $oetbconfverfaudtrept, $comparison);
    }

    /**
     * Filter the query on the OetbConfAgeLevlDisp column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfagelevldisp('fooValue');   // WHERE OetbConfAgeLevlDisp = 'fooValue'
     * $query->filterByOetbconfagelevldisp('%fooValue%', Criteria::LIKE); // WHERE OetbConfAgeLevlDisp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfagelevldisp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfagelevldisp($oetbconfagelevldisp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfagelevldisp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFAGELEVLDISP, $oetbconfagelevldisp, $comparison);
    }

    /**
     * Filter the query on the OetbConfAgeAllTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfagealltime('fooValue');   // WHERE OetbConfAgeAllTime = 'fooValue'
     * $query->filterByOetbconfagealltime('%fooValue%', Criteria::LIKE); // WHERE OetbConfAgeAllTime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfagealltime The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfagealltime($oetbconfagealltime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfagealltime)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFAGEALLTIME, $oetbconfagealltime, $comparison);
    }

    /**
     * Filter the query on the OetbConfAgeAtHold column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfageathold('fooValue');   // WHERE OetbConfAgeAtHold = 'fooValue'
     * $query->filterByOetbconfageathold('%fooValue%', Criteria::LIKE); // WHERE OetbConfAgeAtHold LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfageathold The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfageathold($oetbconfageathold = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfageathold)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFAGEATHOLD, $oetbconfageathold, $comparison);
    }

    /**
     * Filter the query on the OetbConfShowAtLevl column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfshowatlevl('fooValue');   // WHERE OetbConfShowAtLevl = 'fooValue'
     * $query->filterByOetbconfshowatlevl('%fooValue%', Criteria::LIKE); // WHERE OetbConfShowAtLevl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfshowatlevl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfshowatlevl($oetbconfshowatlevl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfshowatlevl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSHOWATLEVL, $oetbconfshowatlevl, $comparison);
    }

    /**
     * Filter the query on the OetbConfShowItem column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfshowitem('fooValue');   // WHERE OetbConfShowItem = 'fooValue'
     * $query->filterByOetbconfshowitem('%fooValue%', Criteria::LIKE); // WHERE OetbConfShowItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfshowitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfshowitem($oetbconfshowitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfshowitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSHOWITEM, $oetbconfshowitem, $comparison);
    }

    /**
     * Filter the query on the OetbConfStopPnt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfstoppnt('fooValue');   // WHERE OetbConfStopPnt = 'fooValue'
     * $query->filterByOetbconfstoppnt('%fooValue%', Criteria::LIKE); // WHERE OetbConfStopPnt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfstoppnt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfstoppnt($oetbconfstoppnt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfstoppnt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSTOPPNT, $oetbconfstoppnt, $comparison);
    }

    /**
     * Filter the query on the OetbConfPricWind column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpricwind('fooValue');   // WHERE OetbConfPricWind = 'fooValue'
     * $query->filterByOetbconfpricwind('%fooValue%', Criteria::LIKE); // WHERE OetbConfPricWind LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfpricwind The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfpricwind($oetbconfpricwind = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpricwind)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPRICWIND, $oetbconfpricwind, $comparison);
    }

    /**
     * Filter the query on the OetbConfShowCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfshowcost('fooValue');   // WHERE OetbConfShowCost = 'fooValue'
     * $query->filterByOetbconfshowcost('%fooValue%', Criteria::LIKE); // WHERE OetbConfShowCost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfshowcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfshowcost($oetbconfshowcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfshowcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSHOWCOST, $oetbconfshowcost, $comparison);
    }

    /**
     * Filter the query on the OetbConfCostToUse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfcosttouse('fooValue');   // WHERE OetbConfCostToUse = 'fooValue'
     * $query->filterByOetbconfcosttouse('%fooValue%', Criteria::LIKE); // WHERE OetbConfCostToUse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfcosttouse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfcosttouse($oetbconfcosttouse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfcosttouse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFCOSTTOUSE, $oetbconfcosttouse, $comparison);
    }

    /**
     * Filter the query on the OetbConfShowMarg column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfshowmarg('fooValue');   // WHERE OetbConfShowMarg = 'fooValue'
     * $query->filterByOetbconfshowmarg('%fooValue%', Criteria::LIKE); // WHERE OetbConfShowMarg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfshowmarg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfshowmarg($oetbconfshowmarg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfshowmarg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSHOWMARG, $oetbconfshowmarg, $comparison);
    }

    /**
     * Filter the query on the OetbConfFxOe column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconffxoe('fooValue');   // WHERE OetbConfFxOe = 'fooValue'
     * $query->filterByOetbconffxoe('%fooValue%', Criteria::LIKE); // WHERE OetbConfFxOe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconffxoe The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconffxoe($oetbconffxoe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconffxoe)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFFXOE, $oetbconffxoe, $comparison);
    }

    /**
     * Filter the query on the OetbConfFxInv column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconffxinv('fooValue');   // WHERE OetbConfFxInv = 'fooValue'
     * $query->filterByOetbconffxinv('%fooValue%', Criteria::LIKE); // WHERE OetbConfFxInv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconffxinv The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconffxinv($oetbconffxinv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconffxinv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFFXINV, $oetbconffxinv, $comparison);
    }

    /**
     * Filter the query on the OetbConfDispVia column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdispvia('fooValue');   // WHERE OetbConfDispVia = 'fooValue'
     * $query->filterByOetbconfdispvia('%fooValue%', Criteria::LIKE); // WHERE OetbConfDispVia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfdispvia The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdispvia($oetbconfdispvia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdispvia)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDISPVIA, $oetbconfdispvia, $comparison);
    }

    /**
     * Filter the query on the OetbConfDispCaseQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdispcaseqty('fooValue');   // WHERE OetbConfDispCaseQty = 'fooValue'
     * $query->filterByOetbconfdispcaseqty('%fooValue%', Criteria::LIKE); // WHERE OetbConfDispCaseQty LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfdispcaseqty The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdispcaseqty($oetbconfdispcaseqty = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdispcaseqty)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDISPCASEQTY, $oetbconfdispcaseqty, $comparison);
    }

    /**
     * Filter the query on the OetbConfFrtIn column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconffrtin('fooValue');   // WHERE OetbConfFrtIn = 'fooValue'
     * $query->filterByOetbconffrtin('%fooValue%', Criteria::LIKE); // WHERE OetbConfFrtIn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconffrtin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconffrtin($oetbconffrtin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconffrtin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFFRTIN, $oetbconffrtin, $comparison);
    }

    /**
     * Filter the query on the OetbConfFrtInGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconffrtinglacct('fooValue');   // WHERE OetbConfFrtInGlAcct = 'fooValue'
     * $query->filterByOetbconffrtinglacct('%fooValue%', Criteria::LIKE); // WHERE OetbConfFrtInGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconffrtinglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconffrtinglacct($oetbconffrtinglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconffrtinglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFFRTINGLACCT, $oetbconffrtinglacct, $comparison);
    }

    /**
     * Filter the query on the OetbConfMinCharge column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfmincharge(1234); // WHERE OetbConfMinCharge = 1234
     * $query->filterByOetbconfmincharge(array(12, 34)); // WHERE OetbConfMinCharge IN (12, 34)
     * $query->filterByOetbconfmincharge(array('min' => 12)); // WHERE OetbConfMinCharge > 12
     * </code>
     *
     * @param     mixed $oetbconfmincharge The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfmincharge($oetbconfmincharge = null, $comparison = null)
    {
        if (is_array($oetbconfmincharge)) {
            $useMinMax = false;
            if (isset($oetbconfmincharge['min'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFMINCHARGE, $oetbconfmincharge['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbconfmincharge['max'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFMINCHARGE, $oetbconfmincharge['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFMINCHARGE, $oetbconfmincharge, $comparison);
    }

    /**
     * Filter the query on the OetbConfMinChrgGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfminchrgglacct('fooValue');   // WHERE OetbConfMinChrgGlAcct = 'fooValue'
     * $query->filterByOetbconfminchrgglacct('%fooValue%', Criteria::LIKE); // WHERE OetbConfMinChrgGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfminchrgglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfminchrgglacct($oetbconfminchrgglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfminchrgglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFMINCHRGGLACCT, $oetbconfminchrgglacct, $comparison);
    }

    /**
     * Filter the query on the OetbConfDropShipChrg column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdropshipchrg(1234); // WHERE OetbConfDropShipChrg = 1234
     * $query->filterByOetbconfdropshipchrg(array(12, 34)); // WHERE OetbConfDropShipChrg IN (12, 34)
     * $query->filterByOetbconfdropshipchrg(array('min' => 12)); // WHERE OetbConfDropShipChrg > 12
     * </code>
     *
     * @param     mixed $oetbconfdropshipchrg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdropshipchrg($oetbconfdropshipchrg = null, $comparison = null)
    {
        if (is_array($oetbconfdropshipchrg)) {
            $useMinMax = false;
            if (isset($oetbconfdropshipchrg['min'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHIPCHRG, $oetbconfdropshipchrg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbconfdropshipchrg['max'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHIPCHRG, $oetbconfdropshipchrg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHIPCHRG, $oetbconfdropshipchrg, $comparison);
    }

    /**
     * Filter the query on the OetbConfDropShpGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdropshpglacct('fooValue');   // WHERE OetbConfDropShpGlAcct = 'fooValue'
     * $query->filterByOetbconfdropshpglacct('%fooValue%', Criteria::LIKE); // WHERE OetbConfDropShpGlAcct LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfdropshpglacct The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdropshpglacct($oetbconfdropshpglacct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdropshpglacct)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHPGLACCT, $oetbconfdropshpglacct, $comparison);
    }

    /**
     * Filter the query on the OetbConfNonTaxCustCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfnontaxcustcode('fooValue');   // WHERE OetbConfNonTaxCustCode = 'fooValue'
     * $query->filterByOetbconfnontaxcustcode('%fooValue%', Criteria::LIKE); // WHERE OetbConfNonTaxCustCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfnontaxcustcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfnontaxcustcode($oetbconfnontaxcustcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfnontaxcustcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFNONTAXCUSTCODE, $oetbconfnontaxcustcode, $comparison);
    }

    /**
     * Filter the query on the OetbConfHsTaxId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfhstaxid('fooValue');   // WHERE OetbConfHsTaxId = 'fooValue'
     * $query->filterByOetbconfhstaxid('%fooValue%', Criteria::LIKE); // WHERE OetbConfHsTaxId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfhstaxid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfhstaxid($oetbconfhstaxid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfhstaxid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFHSTAXID, $oetbconfhstaxid, $comparison);
    }

    /**
     * Filter the query on the OetbConfHsFrtId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfhsfrtid('fooValue');   // WHERE OetbConfHsFrtId = 'fooValue'
     * $query->filterByOetbconfhsfrtid('%fooValue%', Criteria::LIKE); // WHERE OetbConfHsFrtId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfhsfrtid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfhsfrtid($oetbconfhsfrtid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfhsfrtid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFHSFRTID, $oetbconfhsfrtid, $comparison);
    }

    /**
     * Filter the query on the OetbConfHsMiscId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfhsmiscid('fooValue');   // WHERE OetbConfHsMiscId = 'fooValue'
     * $query->filterByOetbconfhsmiscid('%fooValue%', Criteria::LIKE); // WHERE OetbConfHsMiscId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfhsmiscid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfhsmiscid($oetbconfhsmiscid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfhsmiscid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFHSMISCID, $oetbconfhsmiscid, $comparison);
    }

    /**
     * Filter the query on the OetbCon2HsCusdId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2hscusdid('fooValue');   // WHERE OetbCon2HsCusdId = 'fooValue'
     * $query->filterByOetbcon2hscusdid('%fooValue%', Criteria::LIKE); // WHERE OetbCon2HsCusdId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2hscusdid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2hscusdid($oetbcon2hscusdid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2hscusdid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2HSCUSDID, $oetbcon2hscusdid, $comparison);
    }

    /**
     * Filter the query on the OetbCon3HsFrtInId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3hsfrtinid('fooValue');   // WHERE OetbCon3HsFrtInId = 'fooValue'
     * $query->filterByOetbcon3hsfrtinid('%fooValue%', Criteria::LIKE); // WHERE OetbCon3HsFrtInId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3hsfrtinid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3hsfrtinid($oetbcon3hsfrtinid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3hsfrtinid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3HSFRTINID, $oetbcon3hsfrtinid, $comparison);
    }

    /**
     * Filter the query on the OetbCon3HsDropId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3hsdropid('fooValue');   // WHERE OetbCon3HsDropId = 'fooValue'
     * $query->filterByOetbcon3hsdropid('%fooValue%', Criteria::LIKE); // WHERE OetbCon3HsDropId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3hsdropid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3hsdropid($oetbcon3hsdropid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3hsdropid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3HSDROPID, $oetbcon3hsdropid, $comparison);
    }

    /**
     * Filter the query on the OetbCon3HsMinordId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3hsminordid('fooValue');   // WHERE OetbCon3HsMinordId = 'fooValue'
     * $query->filterByOetbcon3hsminordid('%fooValue%', Criteria::LIKE); // WHERE OetbCon3HsMinordId LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3hsminordid The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3hsminordid($oetbcon3hsminordid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3hsminordid)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3HSMINORDID, $oetbcon3hsminordid, $comparison);
    }

    /**
     * Filter the query on the OetbConfHeadGetDef column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfheadgetdef('fooValue');   // WHERE OetbConfHeadGetDef = 'fooValue'
     * $query->filterByOetbconfheadgetdef('%fooValue%', Criteria::LIKE); // WHERE OetbConfHeadGetDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfheadgetdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfheadgetdef($oetbconfheadgetdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfheadgetdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFHEADGETDEF, $oetbconfheadgetdef, $comparison);
    }

    /**
     * Filter the query on the OetbConfItemGetDef column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfitemgetdef('fooValue');   // WHERE OetbConfItemGetDef = 'fooValue'
     * $query->filterByOetbconfitemgetdef('%fooValue%', Criteria::LIKE); // WHERE OetbConfItemGetDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfitemgetdef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfitemgetdef($oetbconfitemgetdef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfitemgetdef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFITEMGETDEF, $oetbconfitemgetdef, $comparison);
    }

    /**
     * Filter the query on the OetbConfAutoGetCust column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfautogetcust('fooValue');   // WHERE OetbConfAutoGetCust = 'fooValue'
     * $query->filterByOetbconfautogetcust('%fooValue%', Criteria::LIKE); // WHERE OetbConfAutoGetCust LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfautogetcust The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfautogetcust($oetbconfautogetcust = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfautogetcust)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFAUTOGETCUST, $oetbconfautogetcust, $comparison);
    }

    /**
     * Filter the query on the OetbCon3AutoGetItem column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3autogetitem('fooValue');   // WHERE OetbCon3AutoGetItem = 'fooValue'
     * $query->filterByOetbcon3autogetitem('%fooValue%', Criteria::LIKE); // WHERE OetbCon3AutoGetItem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3autogetitem The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3autogetitem($oetbcon3autogetitem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3autogetitem)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3AUTOGETITEM, $oetbcon3autogetitem, $comparison);
    }

    /**
     * Filter the query on the OetbConfRqstHeadDtl column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfrqstheaddtl('fooValue');   // WHERE OetbConfRqstHeadDtl = 'fooValue'
     * $query->filterByOetbconfrqstheaddtl('%fooValue%', Criteria::LIKE); // WHERE OetbConfRqstHeadDtl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfrqstheaddtl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfrqstheaddtl($oetbconfrqstheaddtl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfrqstheaddtl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFRQSTHEADDTL, $oetbconfrqstheaddtl, $comparison);
    }

    /**
     * Filter the query on the OetbConfCancHeadDtl column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfcancheaddtl('fooValue');   // WHERE OetbConfCancHeadDtl = 'fooValue'
     * $query->filterByOetbconfcancheaddtl('%fooValue%', Criteria::LIKE); // WHERE OetbConfCancHeadDtl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfcancheaddtl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfcancheaddtl($oetbconfcancheaddtl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfcancheaddtl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFCANCHEADDTL, $oetbconfcancheaddtl, $comparison);
    }

    /**
     * Filter the query on the OetbConfUseInvcAsShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseinvcasship('fooValue');   // WHERE OetbConfUseInvcAsShip = 'fooValue'
     * $query->filterByOetbconfuseinvcasship('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseInvcAsShip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfuseinvcasship The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfuseinvcasship($oetbconfuseinvcasship = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseinvcasship)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEINVCASSHIP, $oetbconfuseinvcasship, $comparison);
    }

    /**
     * Filter the query on the OetbCon3UseArrvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3usearrvdate('fooValue');   // WHERE OetbCon3UseArrvDate = 'fooValue'
     * $query->filterByOetbcon3usearrvdate('%fooValue%', Criteria::LIKE); // WHERE OetbCon3UseArrvDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3usearrvdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3usearrvdate($oetbcon3usearrvdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3usearrvdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3USEARRVDATE, $oetbcon3usearrvdate, $comparison);
    }

    /**
     * Filter the query on the OetbConfSeparateCred column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfseparatecred('fooValue');   // WHERE OetbConfSeparateCred = 'fooValue'
     * $query->filterByOetbconfseparatecred('%fooValue%', Criteria::LIKE); // WHERE OetbConfSeparateCred LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfseparatecred The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfseparatecred($oetbconfseparatecred = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfseparatecred)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSEPARATECRED, $oetbconfseparatecred, $comparison);
    }

    /**
     * Filter the query on the OetbCon3ApplyCredits column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3applycredits('fooValue');   // WHERE OetbCon3ApplyCredits = 'fooValue'
     * $query->filterByOetbcon3applycredits('%fooValue%', Criteria::LIKE); // WHERE OetbCon3ApplyCredits LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3applycredits The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3applycredits($oetbcon3applycredits = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3applycredits)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3APPLYCREDITS, $oetbcon3applycredits, $comparison);
    }

    /**
     * Filter the query on the OetbConfWarnNotNew column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfwarnnotnew('fooValue');   // WHERE OetbConfWarnNotNew = 'fooValue'
     * $query->filterByOetbconfwarnnotnew('%fooValue%', Criteria::LIKE); // WHERE OetbConfWarnNotNew LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfwarnnotnew The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfwarnnotnew($oetbconfwarnnotnew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfwarnnotnew)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFWARNNOTNEW, $oetbconfwarnnotnew, $comparison);
    }

    /**
     * Filter the query on the OetbConfWarnBoToZero column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfwarnbotozero('fooValue');   // WHERE OetbConfWarnBoToZero = 'fooValue'
     * $query->filterByOetbconfwarnbotozero('%fooValue%', Criteria::LIKE); // WHERE OetbConfWarnBoToZero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfwarnbotozero The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfwarnbotozero($oetbconfwarnbotozero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfwarnbotozero)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFWARNBOTOZERO, $oetbconfwarnbotozero, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ProvideRouting column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2providerouting('fooValue');   // WHERE OetbCon2ProvideRouting = 'fooValue'
     * $query->filterByOetbcon2providerouting('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ProvideRouting LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2providerouting The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2providerouting($oetbcon2providerouting = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2providerouting)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PROVIDEROUTING, $oetbcon2providerouting, $comparison);
    }

    /**
     * Filter the query on the OetbCon2SrtRtByRqstDte column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2srtrtbyrqstdte('fooValue');   // WHERE OetbCon2SrtRtByRqstDte = 'fooValue'
     * $query->filterByOetbcon2srtrtbyrqstdte('%fooValue%', Criteria::LIKE); // WHERE OetbCon2SrtRtByRqstDte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2srtrtbyrqstdte The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2srtrtbyrqstdte($oetbcon2srtrtbyrqstdte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2srtrtbyrqstdte)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SRTRTBYRQSTDTE, $oetbcon2srtrtbyrqstdte, $comparison);
    }

    /**
     * Filter the query on the OetbConfUseSoReview column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfusesoreview('fooValue');   // WHERE OetbConfUseSoReview = 'fooValue'
     * $query->filterByOetbconfusesoreview('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseSoReview LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfusesoreview The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfusesoreview($oetbconfusesoreview = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfusesoreview)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSESOREVIEW, $oetbconfusesoreview, $comparison);
    }

    /**
     * Filter the query on the OetbConfPickNoteDef column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpicknotedef('fooValue');   // WHERE OetbConfPickNoteDef = 'fooValue'
     * $query->filterByOetbconfpicknotedef('%fooValue%', Criteria::LIKE); // WHERE OetbConfPickNoteDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfpicknotedef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfpicknotedef($oetbconfpicknotedef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpicknotedef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPICKNOTEDEF, $oetbconfpicknotedef, $comparison);
    }

    /**
     * Filter the query on the OetbConfPackNoteDef column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpacknotedef('fooValue');   // WHERE OetbConfPackNoteDef = 'fooValue'
     * $query->filterByOetbconfpacknotedef('%fooValue%', Criteria::LIKE); // WHERE OetbConfPackNoteDef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfpacknotedef The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfpacknotedef($oetbconfpacknotedef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpacknotedef)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPACKNOTEDEF, $oetbconfpacknotedef, $comparison);
    }

    /**
     * Filter the query on the OetbConfPickSort column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpicksort('fooValue');   // WHERE OetbConfPickSort = 'fooValue'
     * $query->filterByOetbconfpicksort('%fooValue%', Criteria::LIKE); // WHERE OetbConfPickSort LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfpicksort The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfpicksort($oetbconfpicksort = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpicksort)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPICKSORT, $oetbconfpicksort, $comparison);
    }

    /**
     * Filter the query on the OetbConfPackSort column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpacksort('fooValue');   // WHERE OetbConfPackSort = 'fooValue'
     * $query->filterByOetbconfpacksort('%fooValue%', Criteria::LIKE); // WHERE OetbConfPackSort LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfpacksort The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfpacksort($oetbconfpacksort = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpacksort)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPACKSORT, $oetbconfpacksort, $comparison);
    }

    /**
     * Filter the query on the OetbConfPrtPricOnly column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfprtpriconly('fooValue');   // WHERE OetbConfPrtPricOnly = 'fooValue'
     * $query->filterByOetbconfprtpriconly('%fooValue%', Criteria::LIKE); // WHERE OetbConfPrtPricOnly LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfprtpriconly The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfprtpriconly($oetbconfprtpriconly = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfprtpriconly)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPRTPRICONLY, $oetbconfprtpriconly, $comparison);
    }

    /**
     * Filter the query on the OetbConfPrtNeg column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfprtneg('fooValue');   // WHERE OetbConfPrtNeg = 'fooValue'
     * $query->filterByOetbconfprtneg('%fooValue%', Criteria::LIKE); // WHERE OetbConfPrtNeg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfprtneg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfprtneg($oetbconfprtneg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfprtneg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPRTNEG, $oetbconfprtneg, $comparison);
    }

    /**
     * Filter the query on the OetbCon2PrtPackageInfo column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2prtpackageinfo('fooValue');   // WHERE OetbCon2PrtPackageInfo = 'fooValue'
     * $query->filterByOetbcon2prtpackageinfo('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PrtPackageInfo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2prtpackageinfo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2prtpackageinfo($oetbcon2prtpackageinfo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2prtpackageinfo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PRTPACKAGEINFO, $oetbcon2prtpackageinfo, $comparison);
    }

    /**
     * Filter the query on the OetbCon2InnerPackLabel column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2innerpacklabel('fooValue');   // WHERE OetbCon2InnerPackLabel = 'fooValue'
     * $query->filterByOetbcon2innerpacklabel('%fooValue%', Criteria::LIKE); // WHERE OetbCon2InnerPackLabel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2innerpacklabel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2innerpacklabel($oetbcon2innerpacklabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2innerpacklabel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2INNERPACKLABEL, $oetbcon2innerpacklabel, $comparison);
    }

    /**
     * Filter the query on the OetbCon2OuterPackLabel column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2outerpacklabel('fooValue');   // WHERE OetbCon2OuterPackLabel = 'fooValue'
     * $query->filterByOetbcon2outerpacklabel('%fooValue%', Criteria::LIKE); // WHERE OetbCon2OuterPackLabel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2outerpacklabel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2outerpacklabel($oetbcon2outerpacklabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2outerpacklabel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2OUTERPACKLABEL, $oetbcon2outerpacklabel, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ShipTareLabel column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2shiptarelabel('fooValue');   // WHERE OetbCon2ShipTareLabel = 'fooValue'
     * $query->filterByOetbcon2shiptarelabel('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ShipTareLabel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2shiptarelabel The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2shiptarelabel($oetbcon2shiptarelabel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2shiptarelabel)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SHIPTARELABEL, $oetbcon2shiptarelabel, $comparison);
    }

    /**
     * Filter the query on the OetbConfPrtPick column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfprtpick('fooValue');   // WHERE OetbConfPrtPick = 'fooValue'
     * $query->filterByOetbconfprtpick('%fooValue%', Criteria::LIKE); // WHERE OetbConfPrtPick LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfprtpick The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfprtpick($oetbconfprtpick = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfprtpick)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPRTPICK, $oetbconfprtpick, $comparison);
    }

    /**
     * Filter the query on the OetbConfPicPrioSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpicprioseq('fooValue');   // WHERE OetbConfPicPrioSeq = 'fooValue'
     * $query->filterByOetbconfpicprioseq('%fooValue%', Criteria::LIKE); // WHERE OetbConfPicPrioSeq LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfpicprioseq The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfpicprioseq($oetbconfpicprioseq = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpicprioseq)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPICPRIOSEQ, $oetbconfpicprioseq, $comparison);
    }

    /**
     * Filter the query on the OetbConfPrtPack column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfprtpack('fooValue');   // WHERE OetbConfPrtPack = 'fooValue'
     * $query->filterByOetbconfprtpack('%fooValue%', Criteria::LIKE); // WHERE OetbConfPrtPack LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfprtpack The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfprtpack($oetbconfprtpack = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfprtpack)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPRTPACK, $oetbconfprtpack, $comparison);
    }

    /**
     * Filter the query on the OetbConfPrtInv column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfprtinv('fooValue');   // WHERE OetbConfPrtInv = 'fooValue'
     * $query->filterByOetbconfprtinv('%fooValue%', Criteria::LIKE); // WHERE OetbConfPrtInv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfprtinv The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfprtinv($oetbconfprtinv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfprtinv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPRTINV, $oetbconfprtinv, $comparison);
    }

    /**
     * Filter the query on the OetbCon2PrtCredMemo column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2prtcredmemo('fooValue');   // WHERE OetbCon2PrtCredMemo = 'fooValue'
     * $query->filterByOetbcon2prtcredmemo('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PrtCredMemo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2prtcredmemo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2prtcredmemo($oetbcon2prtcredmemo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2prtcredmemo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PRTCREDMEMO, $oetbcon2prtcredmemo, $comparison);
    }

    /**
     * Filter the query on the OetbConfCrntDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfcrntdate('fooValue');   // WHERE OetbConfCrntDate = 'fooValue'
     * $query->filterByOetbconfcrntdate('%fooValue%', Criteria::LIKE); // WHERE OetbConfCrntDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfcrntdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfcrntdate($oetbconfcrntdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfcrntdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFCRNTDATE, $oetbconfcrntdate, $comparison);
    }

    /**
     * Filter the query on the OetbConfMarkPicked column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfmarkpicked('fooValue');   // WHERE OetbConfMarkPicked = 'fooValue'
     * $query->filterByOetbconfmarkpicked('%fooValue%', Criteria::LIKE); // WHERE OetbConfMarkPicked LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfmarkpicked The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfmarkpicked($oetbconfmarkpicked = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfmarkpicked)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFMARKPICKED, $oetbconfmarkpicked, $comparison);
    }

    /**
     * Filter the query on the OetbConfShowUnavail column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfshowunavail('fooValue');   // WHERE OetbConfShowUnavail = 'fooValue'
     * $query->filterByOetbconfshowunavail('%fooValue%', Criteria::LIKE); // WHERE OetbConfShowUnavail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfshowunavail The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfshowunavail($oetbconfshowunavail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfshowunavail)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSHOWUNAVAIL, $oetbconfshowunavail, $comparison);
    }

    /**
     * Filter the query on the OetbConfDecPlaces column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdecplaces(1234); // WHERE OetbConfDecPlaces = 1234
     * $query->filterByOetbconfdecplaces(array(12, 34)); // WHERE OetbConfDecPlaces IN (12, 34)
     * $query->filterByOetbconfdecplaces(array('min' => 12)); // WHERE OetbConfDecPlaces > 12
     * </code>
     *
     * @param     mixed $oetbconfdecplaces The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdecplaces($oetbconfdecplaces = null, $comparison = null)
    {
        if (is_array($oetbconfdecplaces)) {
            $useMinMax = false;
            if (isset($oetbconfdecplaces['min'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDECPLACES, $oetbconfdecplaces['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbconfdecplaces['max'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDECPLACES, $oetbconfdecplaces['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDECPLACES, $oetbconfdecplaces, $comparison);
    }

    /**
     * Filter the query on the OetbConfWarnDup column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfwarndup('fooValue');   // WHERE OetbConfWarnDup = 'fooValue'
     * $query->filterByOetbconfwarndup('%fooValue%', Criteria::LIKE); // WHERE OetbConfWarnDup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfwarndup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfwarndup($oetbconfwarndup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfwarndup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFWARNDUP, $oetbconfwarndup, $comparison);
    }

    /**
     * Filter the query on the OetbConfDefPick column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdefpick('fooValue');   // WHERE OetbConfDefPick = 'fooValue'
     * $query->filterByOetbconfdefpick('%fooValue%', Criteria::LIKE); // WHERE OetbConfDefPick LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfdefpick The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdefpick($oetbconfdefpick = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdefpick)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDEFPICK, $oetbconfdefpick, $comparison);
    }

    /**
     * Filter the query on the OetbConfDefPack column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdefpack('fooValue');   // WHERE OetbConfDefPack = 'fooValue'
     * $query->filterByOetbconfdefpack('%fooValue%', Criteria::LIKE); // WHERE OetbConfDefPack LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfdefpack The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdefpack($oetbconfdefpack = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdefpack)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDEFPACK, $oetbconfdefpack, $comparison);
    }

    /**
     * Filter the query on the OetbConfDefInvc column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdefinvc('fooValue');   // WHERE OetbConfDefInvc = 'fooValue'
     * $query->filterByOetbconfdefinvc('%fooValue%', Criteria::LIKE); // WHERE OetbConfDefInvc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfdefinvc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdefinvc($oetbconfdefinvc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdefinvc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDEFINVC, $oetbconfdefinvc, $comparison);
    }

    /**
     * Filter the query on the OetbConfDefAck column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdefack('fooValue');   // WHERE OetbConfDefAck = 'fooValue'
     * $query->filterByOetbconfdefack('%fooValue%', Criteria::LIKE); // WHERE OetbConfDefAck LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfdefack The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdefack($oetbconfdefack = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdefack)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDEFACK, $oetbconfdefack, $comparison);
    }

    /**
     * Filter the query on the OetbConfAckSortOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfacksortopt('fooValue');   // WHERE OetbConfAckSortOpt = 'fooValue'
     * $query->filterByOetbconfacksortopt('%fooValue%', Criteria::LIKE); // WHERE OetbConfAckSortOpt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfacksortopt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfacksortopt($oetbconfacksortopt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfacksortopt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFACKSORTOPT, $oetbconfacksortopt, $comparison);
    }

    /**
     * Filter the query on the OetbConfReleaseNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfreleasenbr('fooValue');   // WHERE OetbConfReleaseNbr = 'fooValue'
     * $query->filterByOetbconfreleasenbr('%fooValue%', Criteria::LIKE); // WHERE OetbConfReleaseNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfreleasenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfreleasenbr($oetbconfreleasenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfreleasenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFRELEASENBR, $oetbconfreleasenbr, $comparison);
    }

    /**
     * Filter the query on the OetbConfPoDetLineNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpodetlinenbr('fooValue');   // WHERE OetbConfPoDetLineNbr = 'fooValue'
     * $query->filterByOetbconfpodetlinenbr('%fooValue%', Criteria::LIKE); // WHERE OetbConfPoDetLineNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfpodetlinenbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfpodetlinenbr($oetbconfpodetlinenbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpodetlinenbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPODETLINENBR, $oetbconfpodetlinenbr, $comparison);
    }

    /**
     * Filter the query on the OetbConfDetLineBinNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdetlinebinnbr('fooValue');   // WHERE OetbConfDetLineBinNbr = 'fooValue'
     * $query->filterByOetbconfdetlinebinnbr('%fooValue%', Criteria::LIKE); // WHERE OetbConfDetLineBinNbr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfdetlinebinnbr The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdetlinebinnbr($oetbconfdetlinebinnbr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdetlinebinnbr)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDETLINEBINNBR, $oetbconfdetlinebinnbr, $comparison);
    }

    /**
     * Filter the query on the OetbConfSplitByWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfsplitbywhse('fooValue');   // WHERE OetbConfSplitByWhse = 'fooValue'
     * $query->filterByOetbconfsplitbywhse('%fooValue%', Criteria::LIKE); // WHERE OetbConfSplitByWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfsplitbywhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfsplitbywhse($oetbconfsplitbywhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfsplitbywhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSPLITBYWHSE, $oetbconfsplitbywhse, $comparison);
    }

    /**
     * Filter the query on the OetbCon3AllowMultWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3allowmultwhse('fooValue');   // WHERE OetbCon3AllowMultWhse = 'fooValue'
     * $query->filterByOetbcon3allowmultwhse('%fooValue%', Criteria::LIKE); // WHERE OetbCon3AllowMultWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3allowmultwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3allowmultwhse($oetbcon3allowmultwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3allowmultwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3ALLOWMULTWHSE, $oetbcon3allowmultwhse, $comparison);
    }

    /**
     * Filter the query on the OetbConfUseOrigWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseorigwhse('fooValue');   // WHERE OetbConfUseOrigWhse = 'fooValue'
     * $query->filterByOetbconfuseorigwhse('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseOrigWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfuseorigwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfuseorigwhse($oetbconfuseorigwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseorigwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEORIGWHSE, $oetbconfuseorigwhse, $comparison);
    }

    /**
     * Filter the query on the OetbConfUseEsoSingle column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseesosingle('fooValue');   // WHERE OetbConfUseEsoSingle = 'fooValue'
     * $query->filterByOetbconfuseesosingle('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseEsoSingle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfuseesosingle The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfuseesosingle($oetbconfuseesosingle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseesosingle)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEESOSINGLE, $oetbconfuseesosingle, $comparison);
    }

    /**
     * Filter the query on the OetbConfCreatePo column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfcreatepo('fooValue');   // WHERE OetbConfCreatePo = 'fooValue'
     * $query->filterByOetbconfcreatepo('%fooValue%', Criteria::LIKE); // WHERE OetbConfCreatePo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfcreatepo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfcreatepo($oetbconfcreatepo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfcreatepo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFCREATEPO, $oetbconfcreatepo, $comparison);
    }

    /**
     * Filter the query on the OetbConfBestPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfbestprice('fooValue');   // WHERE OetbConfBestPrice = 'fooValue'
     * $query->filterByOetbconfbestprice('%fooValue%', Criteria::LIKE); // WHERE OetbConfBestPrice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfbestprice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfbestprice($oetbconfbestprice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfbestprice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFBESTPRICE, $oetbconfbestprice, $comparison);
    }

    /**
     * Filter the query on the OetbConfEsoBackToNew column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfesobacktonew('fooValue');   // WHERE OetbConfEsoBackToNew = 'fooValue'
     * $query->filterByOetbconfesobacktonew('%fooValue%', Criteria::LIKE); // WHERE OetbConfEsoBackToNew LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfesobacktonew The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfesobacktonew($oetbconfesobacktonew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfesobacktonew)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFESOBACKTONEW, $oetbconfesobacktonew, $comparison);
    }

    /**
     * Filter the query on the OetbConfPickPrintDrop column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpickprintdrop('fooValue');   // WHERE OetbConfPickPrintDrop = 'fooValue'
     * $query->filterByOetbconfpickprintdrop('%fooValue%', Criteria::LIKE); // WHERE OetbConfPickPrintDrop LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfpickprintdrop The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfpickprintdrop($oetbconfpickprintdrop = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpickprintdrop)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPICKPRINTDROP, $oetbconfpickprintdrop, $comparison);
    }

    /**
     * Filter the query on the OetbConfWarnMultPo column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfwarnmultpo('fooValue');   // WHERE OetbConfWarnMultPo = 'fooValue'
     * $query->filterByOetbconfwarnmultpo('%fooValue%', Criteria::LIKE); // WHERE OetbConfWarnMultPo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfwarnmultpo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfwarnmultpo($oetbconfwarnmultpo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfwarnmultpo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFWARNMULTPO, $oetbconfwarnmultpo, $comparison);
    }

    /**
     * Filter the query on the OetbConfAlertItemQuote column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfalertitemquote('fooValue');   // WHERE OetbConfAlertItemQuote = 'fooValue'
     * $query->filterByOetbconfalertitemquote('%fooValue%', Criteria::LIKE); // WHERE OetbConfAlertItemQuote LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfalertitemquote The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfalertitemquote($oetbconfalertitemquote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfalertitemquote)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFALERTITEMQUOTE, $oetbconfalertitemquote, $comparison);
    }

    /**
     * Filter the query on the OetbCon3AskChgPrcWQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3askchgprcwqty('fooValue');   // WHERE OetbCon3AskChgPrcWQty = 'fooValue'
     * $query->filterByOetbcon3askchgprcwqty('%fooValue%', Criteria::LIKE); // WHERE OetbCon3AskChgPrcWQty LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3askchgprcwqty The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3askchgprcwqty($oetbcon3askchgprcwqty = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3askchgprcwqty)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3ASKCHGPRCWQTY, $oetbcon3askchgprcwqty, $comparison);
    }

    /**
     * Filter the query on the OetbCon3TenQtyBrks column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3tenqtybrks('fooValue');   // WHERE OetbCon3TenQtyBrks = 'fooValue'
     * $query->filterByOetbcon3tenqtybrks('%fooValue%', Criteria::LIKE); // WHERE OetbCon3TenQtyBrks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3tenqtybrks The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3tenqtybrks($oetbcon3tenqtybrks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3tenqtybrks)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3TENQTYBRKS, $oetbcon3tenqtybrks, $comparison);
    }

    /**
     * Filter the query on the OetbConfDecOrdrPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdecordrpric(1234); // WHERE OetbConfDecOrdrPric = 1234
     * $query->filterByOetbconfdecordrpric(array(12, 34)); // WHERE OetbConfDecOrdrPric IN (12, 34)
     * $query->filterByOetbconfdecordrpric(array('min' => 12)); // WHERE OetbConfDecOrdrPric > 12
     * </code>
     *
     * @param     mixed $oetbconfdecordrpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdecordrpric($oetbconfdecordrpric = null, $comparison = null)
    {
        if (is_array($oetbconfdecordrpric)) {
            $useMinMax = false;
            if (isset($oetbconfdecordrpric['min'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDECORDRPRIC, $oetbconfdecordrpric['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbconfdecordrpric['max'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDECORDRPRIC, $oetbconfdecordrpric['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDECORDRPRIC, $oetbconfdecordrpric, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ProvLostSales column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2provlostsales('fooValue');   // WHERE OetbCon2ProvLostSales = 'fooValue'
     * $query->filterByOetbcon2provlostsales('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ProvLostSales LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2provlostsales The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2provlostsales($oetbcon2provlostsales = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2provlostsales)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PROVLOSTSALES, $oetbcon2provlostsales, $comparison);
    }

    /**
     * Filter the query on the OetbCon2AskReasonCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2askreasoncode('fooValue');   // WHERE OetbCon2AskReasonCode = 'fooValue'
     * $query->filterByOetbcon2askreasoncode('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AskReasonCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2askreasoncode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2askreasoncode($oetbcon2askreasoncode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2askreasoncode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ASKREASONCODE, $oetbcon2askreasoncode, $comparison);
    }

    /**
     * Filter the query on the OetbCon2DefReasonCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2defreasoncode('fooValue');   // WHERE OetbCon2DefReasonCode = 'fooValue'
     * $query->filterByOetbcon2defreasoncode('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DefReasonCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2defreasoncode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2defreasoncode($oetbcon2defreasoncode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2defreasoncode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFREASONCODE, $oetbcon2defreasoncode, $comparison);
    }

    /**
     * Filter the query on the OetbCon2BordCntl column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2bordcntl('fooValue');   // WHERE OetbCon2BordCntl = 'fooValue'
     * $query->filterByOetbcon2bordcntl('%fooValue%', Criteria::LIKE); // WHERE OetbCon2BordCntl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2bordcntl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2bordcntl($oetbcon2bordcntl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2bordcntl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2BORDCNTL, $oetbcon2bordcntl, $comparison);
    }

    /**
     * Filter the query on the OetbCon2DefReaBoCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2defreabocode('fooValue');   // WHERE OetbCon2DefReaBoCode = 'fooValue'
     * $query->filterByOetbcon2defreabocode('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DefReaBoCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2defreabocode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2defreabocode($oetbcon2defreabocode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2defreabocode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFREABOCODE, $oetbcon2defreabocode, $comparison);
    }

    /**
     * Filter the query on the OetbCon2NumDaysSavLs column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2numdayssavls(1234); // WHERE OetbCon2NumDaysSavLs = 1234
     * $query->filterByOetbcon2numdayssavls(array(12, 34)); // WHERE OetbCon2NumDaysSavLs IN (12, 34)
     * $query->filterByOetbcon2numdayssavls(array('min' => 12)); // WHERE OetbCon2NumDaysSavLs > 12
     * </code>
     *
     * @param     mixed $oetbcon2numdayssavls The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2numdayssavls($oetbcon2numdayssavls = null, $comparison = null)
    {
        if (is_array($oetbcon2numdayssavls)) {
            $useMinMax = false;
            if (isset($oetbcon2numdayssavls['min'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2NUMDAYSSAVLS, $oetbcon2numdayssavls['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2numdayssavls['max'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2NUMDAYSSAVLS, $oetbcon2numdayssavls['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2NUMDAYSSAVLS, $oetbcon2numdayssavls, $comparison);
    }

    /**
     * Filter the query on the OetbCon2CallBackNotif column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2callbacknotif('fooValue');   // WHERE OetbCon2CallBackNotif = 'fooValue'
     * $query->filterByOetbcon2callbacknotif('%fooValue%', Criteria::LIKE); // WHERE OetbCon2CallBackNotif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2callbacknotif The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2callbacknotif($oetbcon2callbacknotif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2callbacknotif)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2CALLBACKNOTIF, $oetbcon2callbacknotif, $comparison);
    }

    /**
     * Filter the query on the OetbCon2DefDaysWhenIn column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2defdayswhenin(1234); // WHERE OetbCon2DefDaysWhenIn = 1234
     * $query->filterByOetbcon2defdayswhenin(array(12, 34)); // WHERE OetbCon2DefDaysWhenIn IN (12, 34)
     * $query->filterByOetbcon2defdayswhenin(array('min' => 12)); // WHERE OetbCon2DefDaysWhenIn > 12
     * </code>
     *
     * @param     mixed $oetbcon2defdayswhenin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2defdayswhenin($oetbcon2defdayswhenin = null, $comparison = null)
    {
        if (is_array($oetbcon2defdayswhenin)) {
            $useMinMax = false;
            if (isset($oetbcon2defdayswhenin['min'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFDAYSWHENIN, $oetbcon2defdayswhenin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2defdayswhenin['max'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFDAYSWHENIN, $oetbcon2defdayswhenin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFDAYSWHENIN, $oetbcon2defdayswhenin, $comparison);
    }

    /**
     * Filter the query on the OetbCon2AddSubsLs column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2addsubsls('fooValue');   // WHERE OetbCon2AddSubsLs = 'fooValue'
     * $query->filterByOetbcon2addsubsls('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AddSubsLs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2addsubsls The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2addsubsls($oetbcon2addsubsls = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2addsubsls)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ADDSUBSLS, $oetbcon2addsubsls, $comparison);
    }

    /**
     * Filter the query on the OetbCon2DefReaSubsCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2defreasubscode('fooValue');   // WHERE OetbCon2DefReaSubsCode = 'fooValue'
     * $query->filterByOetbcon2defreasubscode('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DefReaSubsCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2defreasubscode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2defreasubscode($oetbcon2defreasubscode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2defreasubscode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFREASUBSCODE, $oetbcon2defreasubscode, $comparison);
    }

    /**
     * Filter the query on the OetbCon2OrdTypNorm column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ordtypnorm('fooValue');   // WHERE OetbCon2OrdTypNorm = 'fooValue'
     * $query->filterByOetbcon2ordtypnorm('%fooValue%', Criteria::LIKE); // WHERE OetbCon2OrdTypNorm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2ordtypnorm The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2ordtypnorm($oetbcon2ordtypnorm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ordtypnorm)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPNORM, $oetbcon2ordtypnorm, $comparison);
    }

    /**
     * Filter the query on the OetbCon2OrdTypRep column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ordtyprep('fooValue');   // WHERE OetbCon2OrdTypRep = 'fooValue'
     * $query->filterByOetbcon2ordtyprep('%fooValue%', Criteria::LIKE); // WHERE OetbCon2OrdTypRep LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2ordtyprep The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2ordtyprep($oetbcon2ordtyprep = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ordtyprep)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPREP, $oetbcon2ordtyprep, $comparison);
    }

    /**
     * Filter the query on the OetbCon2OrdTypServ column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ordtypserv('fooValue');   // WHERE OetbCon2OrdTypServ = 'fooValue'
     * $query->filterByOetbcon2ordtypserv('%fooValue%', Criteria::LIKE); // WHERE OetbCon2OrdTypServ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2ordtypserv The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2ordtypserv($oetbcon2ordtypserv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ordtypserv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPSERV, $oetbcon2ordtypserv, $comparison);
    }

    /**
     * Filter the query on the OetbCon2DefOrdTyp column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2defordtyp('fooValue');   // WHERE OetbCon2DefOrdTyp = 'fooValue'
     * $query->filterByOetbcon2defordtyp('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DefOrdTyp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2defordtyp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2defordtyp($oetbcon2defordtyp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2defordtyp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFORDTYP, $oetbcon2defordtyp, $comparison);
    }

    /**
     * Filter the query on the OetbConfChgPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfchgpric('fooValue');   // WHERE OetbConfChgPric = 'fooValue'
     * $query->filterByOetbconfchgpric('%fooValue%', Criteria::LIKE); // WHERE OetbConfChgPric LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfchgpric The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfchgpric($oetbconfchgpric = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfchgpric)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFCHGPRIC, $oetbconfchgpric, $comparison);
    }

    /**
     * Filter the query on the OetbCon2SpordPriceZero column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2spordpricezero('fooValue');   // WHERE OetbCon2SpordPriceZero = 'fooValue'
     * $query->filterByOetbcon2spordpricezero('%fooValue%', Criteria::LIKE); // WHERE OetbCon2SpordPriceZero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2spordpricezero The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2spordpricezero($oetbcon2spordpricezero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2spordpricezero)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SPORDPRICEZERO, $oetbcon2spordpricezero, $comparison);
    }

    /**
     * Filter the query on the OetbConfInactPriceZero column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfinactpricezero('fooValue');   // WHERE OetbConfInactPriceZero = 'fooValue'
     * $query->filterByOetbconfinactpricezero('%fooValue%', Criteria::LIKE); // WHERE OetbConfInactPriceZero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfinactpricezero The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfinactpricezero($oetbconfinactpricezero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfinactpricezero)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFINACTPRICEZERO, $oetbconfinactpricezero, $comparison);
    }

    /**
     * Filter the query on the OetbCon2Reseq column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2reseq('fooValue');   // WHERE OetbCon2Reseq = 'fooValue'
     * $query->filterByOetbcon2reseq('%fooValue%', Criteria::LIKE); // WHERE OetbCon2Reseq LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2reseq The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2reseq($oetbcon2reseq = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2reseq)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2RESEQ, $oetbcon2reseq, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ReseqBy column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2reseqby('fooValue');   // WHERE OetbCon2ReseqBy = 'fooValue'
     * $query->filterByOetbcon2reseqby('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ReseqBy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2reseqby The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2reseqby($oetbcon2reseqby = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2reseqby)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2RESEQBY, $oetbcon2reseqby, $comparison);
    }

    /**
     * Filter the query on the OetbCon2MinQtySales column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2minqtysales('fooValue');   // WHERE OetbCon2MinQtySales = 'fooValue'
     * $query->filterByOetbcon2minqtysales('%fooValue%', Criteria::LIKE); // WHERE OetbCon2MinQtySales LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2minqtysales The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2minqtysales($oetbcon2minqtysales = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2minqtysales)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2MINQTYSALES, $oetbcon2minqtysales, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ChgOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2chgorder('fooValue');   // WHERE OetbCon2ChgOrder = 'fooValue'
     * $query->filterByOetbcon2chgorder('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ChgOrder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2chgorder The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2chgorder($oetbcon2chgorder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2chgorder)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2CHGORDER, $oetbcon2chgorder, $comparison);
    }

    /**
     * Filter the query on the OetbCon2VerComp column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2vercomp('fooValue');   // WHERE OetbCon2VerComp = 'fooValue'
     * $query->filterByOetbcon2vercomp('%fooValue%', Criteria::LIKE); // WHERE OetbCon2VerComp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2vercomp The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2vercomp($oetbcon2vercomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2vercomp)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2VERCOMP, $oetbcon2vercomp, $comparison);
    }

    /**
     * Filter the query on the OetbCon2PrtInv column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2prtinv('fooValue');   // WHERE OetbCon2PrtInv = 'fooValue'
     * $query->filterByOetbcon2prtinv('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PrtInv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2prtinv The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2prtinv($oetbcon2prtinv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2prtinv)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PRTINV, $oetbcon2prtinv, $comparison);
    }

    /**
     * Filter the query on the OetbCon2DynamicPickTick column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2dynamicpicktick('fooValue');   // WHERE OetbCon2DynamicPickTick = 'fooValue'
     * $query->filterByOetbcon2dynamicpicktick('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DynamicPickTick LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2dynamicpicktick The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2dynamicpicktick($oetbcon2dynamicpicktick = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2dynamicpicktick)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICPICKTICK, $oetbcon2dynamicpicktick, $comparison);
    }

    /**
     * Filter the query on the OetbCon2DynamicInvoice column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2dynamicinvoice('fooValue');   // WHERE OetbCon2DynamicInvoice = 'fooValue'
     * $query->filterByOetbcon2dynamicinvoice('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DynamicInvoice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2dynamicinvoice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2dynamicinvoice($oetbcon2dynamicinvoice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2dynamicinvoice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICINVOICE, $oetbcon2dynamicinvoice, $comparison);
    }

    /**
     * Filter the query on the OetbCon2EdiDefInvoice column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2edidefinvoice('fooValue');   // WHERE OetbCon2EdiDefInvoice = 'fooValue'
     * $query->filterByOetbcon2edidefinvoice('%fooValue%', Criteria::LIKE); // WHERE OetbCon2EdiDefInvoice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2edidefinvoice The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2edidefinvoice($oetbcon2edidefinvoice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2edidefinvoice)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2EDIDEFINVOICE, $oetbcon2edidefinvoice, $comparison);
    }

    /**
     * Filter the query on the OetbCon2AllowCcPick column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2allowccpick('fooValue');   // WHERE OetbCon2AllowCcPick = 'fooValue'
     * $query->filterByOetbcon2allowccpick('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AllowCcPick LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2allowccpick The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2allowccpick($oetbcon2allowccpick = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2allowccpick)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWCCPICK, $oetbcon2allowccpick, $comparison);
    }

    /**
     * Filter the query on the OetbCon2AutoCcWind column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2autoccwind('fooValue');   // WHERE OetbCon2AutoCcWind = 'fooValue'
     * $query->filterByOetbcon2autoccwind('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AutoCcWind LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2autoccwind The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2autoccwind($oetbcon2autoccwind = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2autoccwind)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCWIND, $oetbcon2autoccwind, $comparison);
    }

    /**
     * Filter the query on the OetbCon2AutoCcUpdate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2autoccupdate('fooValue');   // WHERE OetbCon2AutoCcUpdate = 'fooValue'
     * $query->filterByOetbcon2autoccupdate('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AutoCcUpdate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2autoccupdate The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2autoccupdate($oetbcon2autoccupdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2autoccupdate)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCUPDATE, $oetbcon2autoccupdate, $comparison);
    }

    /**
     * Filter the query on the OetbCon2AllowApvdCcChg column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2allowapvdccchg('fooValue');   // WHERE OetbCon2AllowApvdCcChg = 'fooValue'
     * $query->filterByOetbcon2allowapvdccchg('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AllowApvdCcChg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2allowapvdccchg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2allowapvdccchg($oetbcon2allowapvdccchg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2allowapvdccchg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWAPVDCCCHG, $oetbcon2allowapvdccchg, $comparison);
    }

    /**
     * Filter the query on the OetbCon3ApvdBckordClear column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3apvdbckordclear('fooValue');   // WHERE OetbCon3ApvdBckordClear = 'fooValue'
     * $query->filterByOetbcon3apvdbckordclear('%fooValue%', Criteria::LIKE); // WHERE OetbCon3ApvdBckordClear LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3apvdbckordclear The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3apvdbckordclear($oetbcon3apvdbckordclear = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3apvdbckordclear)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3APVDBCKORDCLEAR, $oetbcon3apvdbckordclear, $comparison);
    }

    /**
     * Filter the query on the OetbCon2PolWhichCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2polwhichcost('fooValue');   // WHERE OetbCon2PolWhichCost = 'fooValue'
     * $query->filterByOetbcon2polwhichcost('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PolWhichCost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2polwhichcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2polwhichcost($oetbcon2polwhichcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2polwhichcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2POLWHICHCOST, $oetbcon2polwhichcost, $comparison);
    }

    /**
     * Filter the query on the OetbCon2RevHazard column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2revhazard('fooValue');   // WHERE OetbCon2RevHazard = 'fooValue'
     * $query->filterByOetbcon2revhazard('%fooValue%', Criteria::LIKE); // WHERE OetbCon2RevHazard LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2revhazard The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2revhazard($oetbcon2revhazard = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2revhazard)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2REVHAZARD, $oetbcon2revhazard, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ShowDiscList column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2showdisclist('fooValue');   // WHERE OetbCon2ShowDiscList = 'fooValue'
     * $query->filterByOetbcon2showdisclist('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ShowDiscList LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2showdisclist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2showdisclist($oetbcon2showdisclist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2showdisclist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SHOWDISCLIST, $oetbcon2showdisclist, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ChgList column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2chglist('fooValue');   // WHERE OetbCon2ChgList = 'fooValue'
     * $query->filterByOetbcon2chglist('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ChgList LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2chglist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2chglist($oetbcon2chglist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2chglist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2CHGLIST, $oetbcon2chglist, $comparison);
    }

    /**
     * Filter the query on the OetbCon2MailList column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2maillist('fooValue');   // WHERE OetbCon2MailList = 'fooValue'
     * $query->filterByOetbcon2maillist('%fooValue%', Criteria::LIKE); // WHERE OetbCon2MailList LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2maillist The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2maillist($oetbcon2maillist = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2maillist)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2MAILLIST, $oetbcon2maillist, $comparison);
    }

    /**
     * Filter the query on the OetbCon2NameFormat column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2nameformat('fooValue');   // WHERE OetbCon2NameFormat = 'fooValue'
     * $query->filterByOetbcon2nameformat('%fooValue%', Criteria::LIKE); // WHERE OetbCon2NameFormat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2nameformat The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2nameformat($oetbcon2nameformat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2nameformat)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2NAMEFORMAT, $oetbcon2nameformat, $comparison);
    }

    /**
     * Filter the query on the OetbCon2MailIdType column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2mailidtype('fooValue');   // WHERE OetbCon2MailIdType = 'fooValue'
     * $query->filterByOetbcon2mailidtype('%fooValue%', Criteria::LIKE); // WHERE OetbCon2MailIdType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2mailidtype The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2mailidtype($oetbcon2mailidtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2mailidtype)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2MAILIDTYPE, $oetbcon2mailidtype, $comparison);
    }

    /**
     * Filter the query on the OetbCon2CashDrawerPswd column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2cashdrawerpswd('fooValue');   // WHERE OetbCon2CashDrawerPswd = 'fooValue'
     * $query->filterByOetbcon2cashdrawerpswd('%fooValue%', Criteria::LIKE); // WHERE OetbCon2CashDrawerPswd LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2cashdrawerpswd The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2cashdrawerpswd($oetbcon2cashdrawerpswd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2cashdrawerpswd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2CASHDRAWERPSWD, $oetbcon2cashdrawerpswd, $comparison);
    }

    /**
     * Filter the query on the OetbCon2UpsOnline column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2upsonline('fooValue');   // WHERE OetbCon2UpsOnline = 'fooValue'
     * $query->filterByOetbcon2upsonline('%fooValue%', Criteria::LIKE); // WHERE OetbCon2UpsOnline LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2upsonline The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2upsonline($oetbcon2upsonline = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2upsonline)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2UPSONLINE, $oetbcon2upsonline, $comparison);
    }

    /**
     * Filter the query on the OetbCon2PicOrVer column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2picorver('fooValue');   // WHERE OetbCon2PicOrVer = 'fooValue'
     * $query->filterByOetbcon2picorver('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PicOrVer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2picorver The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2picorver($oetbcon2picorver = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2picorver)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PICORVER, $oetbcon2picorver, $comparison);
    }

    /**
     * Filter the query on the OetbCon2CombBack column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2combback('fooValue');   // WHERE OetbCon2CombBack = 'fooValue'
     * $query->filterByOetbcon2combback('%fooValue%', Criteria::LIKE); // WHERE OetbCon2CombBack LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2combback The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2combback($oetbcon2combback = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2combback)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2COMBBACK, $oetbcon2combback, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FrtAllowAmt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2frtallowamt(1234); // WHERE OetbCon2FrtAllowAmt = 1234
     * $query->filterByOetbcon2frtallowamt(array(12, 34)); // WHERE OetbCon2FrtAllowAmt IN (12, 34)
     * $query->filterByOetbcon2frtallowamt(array('min' => 12)); // WHERE OetbCon2FrtAllowAmt > 12
     * </code>
     *
     * @param     mixed $oetbcon2frtallowamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2frtallowamt($oetbcon2frtallowamt = null, $comparison = null)
    {
        if (is_array($oetbcon2frtallowamt)) {
            $useMinMax = false;
            if (isset($oetbcon2frtallowamt['min'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2FRTALLOWAMT, $oetbcon2frtallowamt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2frtallowamt['max'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2FRTALLOWAMT, $oetbcon2frtallowamt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2FRTALLOWAMT, $oetbcon2frtallowamt, $comparison);
    }

    /**
     * Filter the query on the OetbCon3ShipMoreOrdered column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3shipmoreordered('fooValue');   // WHERE OetbCon3ShipMoreOrdered = 'fooValue'
     * $query->filterByOetbcon3shipmoreordered('%fooValue%', Criteria::LIKE); // WHERE OetbCon3ShipMoreOrdered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3shipmoreordered The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3shipmoreordered($oetbcon3shipmoreordered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3shipmoreordered)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3SHIPMOREORDERED, $oetbcon3shipmoreordered, $comparison);
    }

    /**
     * Filter the query on the OetbCon3WarnShipMore column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3warnshipmore('fooValue');   // WHERE OetbCon3WarnShipMore = 'fooValue'
     * $query->filterByOetbcon3warnshipmore('%fooValue%', Criteria::LIKE); // WHERE OetbCon3WarnShipMore LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3warnshipmore The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3warnshipmore($oetbcon3warnshipmore = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3warnshipmore)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3WARNSHIPMORE, $oetbcon3warnshipmore, $comparison);
    }

    /**
     * Filter the query on the OetbCon2UseDept column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2usedept('fooValue');   // WHERE OetbCon2UseDept = 'fooValue'
     * $query->filterByOetbcon2usedept('%fooValue%', Criteria::LIKE); // WHERE OetbCon2UseDept LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2usedept The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2usedept($oetbcon2usedept = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2usedept)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2USEDEPT, $oetbcon2usedept, $comparison);
    }

    /**
     * Filter the query on the OetbCon2UseDivision column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2usedivision('fooValue');   // WHERE OetbCon2UseDivision = 'fooValue'
     * $query->filterByOetbcon2usedivision('%fooValue%', Criteria::LIKE); // WHERE OetbCon2UseDivision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2usedivision The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2usedivision($oetbcon2usedivision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2usedivision)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2USEDIVISION, $oetbcon2usedivision, $comparison);
    }

    /**
     * Filter the query on the OetbCon2DefMfeCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2defmfecode('fooValue');   // WHERE OetbCon2DefMfeCode = 'fooValue'
     * $query->filterByOetbcon2defmfecode('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DefMfeCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2defmfecode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2defmfecode($oetbcon2defmfecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2defmfecode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFMFECODE, $oetbcon2defmfecode, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ShowAvgCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2showavgcost('fooValue');   // WHERE OetbCon2ShowAvgCost = 'fooValue'
     * $query->filterByOetbcon2showavgcost('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ShowAvgCost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2showavgcost The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2showavgcost($oetbcon2showavgcost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2showavgcost)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SHOWAVGCOST, $oetbcon2showavgcost, $comparison);
    }

    /**
     * Filter the query on the OetbCon2FedEx column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2fedex('fooValue');   // WHERE OetbCon2FedEx = 'fooValue'
     * $query->filterByOetbcon2fedex('%fooValue%', Criteria::LIKE); // WHERE OetbCon2FedEx LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2fedex The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2fedex($oetbcon2fedex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2fedex)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2FEDEX, $oetbcon2fedex, $comparison);
    }

    /**
     * Filter the query on the OetbCon3DefFrghtGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3deffrghtgrup('fooValue');   // WHERE OetbCon3DefFrghtGrup = 'fooValue'
     * $query->filterByOetbcon3deffrghtgrup('%fooValue%', Criteria::LIKE); // WHERE OetbCon3DefFrghtGrup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3deffrghtgrup The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3deffrghtgrup($oetbcon3deffrghtgrup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3deffrghtgrup)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3DEFFRGHTGRUP, $oetbcon3deffrghtgrup, $comparison);
    }

    /**
     * Filter the query on the OetbCon3UpsMysqlDbname column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3upsmysqldbname('fooValue');   // WHERE OetbCon3UpsMysqlDbname = 'fooValue'
     * $query->filterByOetbcon3upsmysqldbname('%fooValue%', Criteria::LIKE); // WHERE OetbCon3UpsMysqlDbname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3upsmysqldbname The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3upsmysqldbname($oetbcon3upsmysqldbname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3upsmysqldbname)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3UPSMYSQLDBNAME, $oetbcon3upsmysqldbname, $comparison);
    }

    /**
     * Filter the query on the OetbConfUseOptCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseoptcode('fooValue');   // WHERE OetbConfUseOptCode = 'fooValue'
     * $query->filterByOetbconfuseoptcode('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseOptCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfuseoptcode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfuseoptcode($oetbconfuseoptcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseoptcode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEOPTCODE, $oetbconfuseoptcode, $comparison);
    }

    /**
     * Filter the query on the OetbConfScn4Opt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfscn4opt('fooValue');   // WHERE OetbConfScn4Opt = 'fooValue'
     * $query->filterByOetbconfscn4opt('%fooValue%', Criteria::LIKE); // WHERE OetbConfScn4Opt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfscn4opt The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfscn4opt($oetbconfscn4opt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfscn4opt)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSCN4OPT, $oetbconfscn4opt, $comparison);
    }

    /**
     * Filter the query on the OetbCon2TakenByUse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2takenbyuse('fooValue');   // WHERE OetbCon2TakenByUse = 'fooValue'
     * $query->filterByOetbcon2takenbyuse('%fooValue%', Criteria::LIKE); // WHERE OetbCon2TakenByUse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2takenbyuse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2takenbyuse($oetbcon2takenbyuse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2takenbyuse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYUSE, $oetbcon2takenbyuse, $comparison);
    }

    /**
     * Filter the query on the OetbCon2TakenByLogin column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2takenbylogin('fooValue');   // WHERE OetbCon2TakenByLogin = 'fooValue'
     * $query->filterByOetbcon2takenbylogin('%fooValue%', Criteria::LIKE); // WHERE OetbCon2TakenByLogin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2takenbylogin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2takenbylogin($oetbcon2takenbylogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2takenbylogin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYLOGIN, $oetbcon2takenbylogin, $comparison);
    }

    /**
     * Filter the query on the OetbCon2TakenByForce column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2takenbyforce('fooValue');   // WHERE OetbCon2TakenByForce = 'fooValue'
     * $query->filterByOetbcon2takenbyforce('%fooValue%', Criteria::LIKE); // WHERE OetbCon2TakenByForce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2takenbyforce The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2takenbyforce($oetbcon2takenbyforce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2takenbyforce)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYFORCE, $oetbcon2takenbyforce, $comparison);
    }

    /**
     * Filter the query on the OetbCon2PickedByUse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2pickedbyuse('fooValue');   // WHERE OetbCon2PickedByUse = 'fooValue'
     * $query->filterByOetbcon2pickedbyuse('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PickedByUse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2pickedbyuse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2pickedbyuse($oetbcon2pickedbyuse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2pickedbyuse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYUSE, $oetbcon2pickedbyuse, $comparison);
    }

    /**
     * Filter the query on the OetbCon2PickedByForce column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2pickedbyforce('fooValue');   // WHERE OetbCon2PickedByForce = 'fooValue'
     * $query->filterByOetbcon2pickedbyforce('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PickedByForce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2pickedbyforce The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2pickedbyforce($oetbcon2pickedbyforce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2pickedbyforce)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYFORCE, $oetbcon2pickedbyforce, $comparison);
    }

    /**
     * Filter the query on the OetbCon2PickedByProc column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2pickedbyproc('fooValue');   // WHERE OetbCon2PickedByProc = 'fooValue'
     * $query->filterByOetbcon2pickedbyproc('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PickedByProc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2pickedbyproc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2pickedbyproc($oetbcon2pickedbyproc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2pickedbyproc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYPROC, $oetbcon2pickedbyproc, $comparison);
    }

    /**
     * Filter the query on the OetbCon2PackedByUse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2packedbyuse('fooValue');   // WHERE OetbCon2PackedByUse = 'fooValue'
     * $query->filterByOetbcon2packedbyuse('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PackedByUse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2packedbyuse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2packedbyuse($oetbcon2packedbyuse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2packedbyuse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYUSE, $oetbcon2packedbyuse, $comparison);
    }

    /**
     * Filter the query on the OetbCon2PackedByForce column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2packedbyforce('fooValue');   // WHERE OetbCon2PackedByForce = 'fooValue'
     * $query->filterByOetbcon2packedbyforce('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PackedByForce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2packedbyforce The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2packedbyforce($oetbcon2packedbyforce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2packedbyforce)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYFORCE, $oetbcon2packedbyforce, $comparison);
    }

    /**
     * Filter the query on the OetbCon2VerifiedByUse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2verifiedbyuse('fooValue');   // WHERE OetbCon2VerifiedByUse = 'fooValue'
     * $query->filterByOetbcon2verifiedbyuse('%fooValue%', Criteria::LIKE); // WHERE OetbCon2VerifiedByUse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2verifiedbyuse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2verifiedbyuse($oetbcon2verifiedbyuse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2verifiedbyuse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYUSE, $oetbcon2verifiedbyuse, $comparison);
    }

    /**
     * Filter the query on the OetbCon2VerifiedByLogin column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2verifiedbylogin('fooValue');   // WHERE OetbCon2VerifiedByLogin = 'fooValue'
     * $query->filterByOetbcon2verifiedbylogin('%fooValue%', Criteria::LIKE); // WHERE OetbCon2VerifiedByLogin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2verifiedbylogin The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2verifiedbylogin($oetbcon2verifiedbylogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2verifiedbylogin)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYLOGIN, $oetbcon2verifiedbylogin, $comparison);
    }

    /**
     * Filter the query on the OetbCon2VerifiedByForce column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2verifiedbyforce('fooValue');   // WHERE OetbCon2VerifiedByForce = 'fooValue'
     * $query->filterByOetbcon2verifiedbyforce('%fooValue%', Criteria::LIKE); // WHERE OetbCon2VerifiedByForce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2verifiedbyforce The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2verifiedbyforce($oetbcon2verifiedbyforce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2verifiedbyforce)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYFORCE, $oetbcon2verifiedbyforce, $comparison);
    }

    /**
     * Filter the query on the OetbConfOptLabl1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfoptlabl1('fooValue');   // WHERE OetbConfOptLabl1 = 'fooValue'
     * $query->filterByOetbconfoptlabl1('%fooValue%', Criteria::LIKE); // WHERE OetbConfOptLabl1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfoptlabl1 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfoptlabl1($oetbconfoptlabl1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfoptlabl1)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL1, $oetbconfoptlabl1, $comparison);
    }

    /**
     * Filter the query on the OetbCon2Ucode1Force column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ucode1force('fooValue');   // WHERE OetbCon2Ucode1Force = 'fooValue'
     * $query->filterByOetbcon2ucode1force('%fooValue%', Criteria::LIKE); // WHERE OetbCon2Ucode1Force LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2ucode1force The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2ucode1force($oetbcon2ucode1force = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ucode1force)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2UCODE1FORCE, $oetbcon2ucode1force, $comparison);
    }

    /**
     * Filter the query on the OetbConfOptLabl2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfoptlabl2('fooValue');   // WHERE OetbConfOptLabl2 = 'fooValue'
     * $query->filterByOetbconfoptlabl2('%fooValue%', Criteria::LIKE); // WHERE OetbConfOptLabl2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfoptlabl2 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfoptlabl2($oetbconfoptlabl2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfoptlabl2)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL2, $oetbconfoptlabl2, $comparison);
    }

    /**
     * Filter the query on the OetbCon2Ucode2Force column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ucode2force('fooValue');   // WHERE OetbCon2Ucode2Force = 'fooValue'
     * $query->filterByOetbcon2ucode2force('%fooValue%', Criteria::LIKE); // WHERE OetbCon2Ucode2Force LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2ucode2force The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2ucode2force($oetbcon2ucode2force = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ucode2force)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2UCODE2FORCE, $oetbcon2ucode2force, $comparison);
    }

    /**
     * Filter the query on the OetbConfOptLabl3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfoptlabl3('fooValue');   // WHERE OetbConfOptLabl3 = 'fooValue'
     * $query->filterByOetbconfoptlabl3('%fooValue%', Criteria::LIKE); // WHERE OetbConfOptLabl3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfoptlabl3 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfoptlabl3($oetbconfoptlabl3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfoptlabl3)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL3, $oetbconfoptlabl3, $comparison);
    }

    /**
     * Filter the query on the OetbCon2Ucode3Force column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ucode3force('fooValue');   // WHERE OetbCon2Ucode3Force = 'fooValue'
     * $query->filterByOetbcon2ucode3force('%fooValue%', Criteria::LIKE); // WHERE OetbCon2Ucode3Force LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2ucode3force The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2ucode3force($oetbcon2ucode3force = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ucode3force)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2UCODE3FORCE, $oetbcon2ucode3force, $comparison);
    }

    /**
     * Filter the query on the OetbConfOptLabl4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfoptlabl4('fooValue');   // WHERE OetbConfOptLabl4 = 'fooValue'
     * $query->filterByOetbconfoptlabl4('%fooValue%', Criteria::LIKE); // WHERE OetbConfOptLabl4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfoptlabl4 The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfoptlabl4($oetbconfoptlabl4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfoptlabl4)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL4, $oetbconfoptlabl4, $comparison);
    }

    /**
     * Filter the query on the OetbCon2Ucode4Force column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ucode4force('fooValue');   // WHERE OetbCon2Ucode4Force = 'fooValue'
     * $query->filterByOetbcon2ucode4force('%fooValue%', Criteria::LIKE); // WHERE OetbCon2Ucode4Force LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2ucode4force The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2ucode4force($oetbcon2ucode4force = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ucode4force)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2UCODE4FORCE, $oetbcon2ucode4force, $comparison);
    }

    /**
     * Filter the query on the OetbConfVerifyAfterPack column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfverifyafterpack('fooValue');   // WHERE OetbConfVerifyAfterPack = 'fooValue'
     * $query->filterByOetbconfverifyafterpack('%fooValue%', Criteria::LIKE); // WHERE OetbConfVerifyAfterPack LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfverifyafterpack The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfverifyafterpack($oetbconfverifyafterpack = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfverifyafterpack)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFVERIFYAFTERPACK, $oetbconfverifyafterpack, $comparison);
    }

    /**
     * Filter the query on the OetbConfHistYrsBack column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfhistyrsback(1234); // WHERE OetbConfHistYrsBack = 1234
     * $query->filterByOetbconfhistyrsback(array(12, 34)); // WHERE OetbConfHistYrsBack IN (12, 34)
     * $query->filterByOetbconfhistyrsback(array('min' => 12)); // WHERE OetbConfHistYrsBack > 12
     * </code>
     *
     * @param     mixed $oetbconfhistyrsback The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfhistyrsback($oetbconfhistyrsback = null, $comparison = null)
    {
        if (is_array($oetbconfhistyrsback)) {
            $useMinMax = false;
            if (isset($oetbconfhistyrsback['min'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFHISTYRSBACK, $oetbconfhistyrsback['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbconfhistyrsback['max'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFHISTYRSBACK, $oetbconfhistyrsback['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFHISTYRSBACK, $oetbconfhistyrsback, $comparison);
    }

    /**
     * Filter the query on the OetbConfRqstCatlg column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfrqstcatlg('fooValue');   // WHERE OetbConfRqstCatlg = 'fooValue'
     * $query->filterByOetbconfrqstcatlg('%fooValue%', Criteria::LIKE); // WHERE OetbConfRqstCatlg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfrqstcatlg The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfrqstcatlg($oetbconfrqstcatlg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfrqstcatlg)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFRQSTCATLG, $oetbconfrqstcatlg, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ConPick column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2conpick('fooValue');   // WHERE OetbCon2ConPick = 'fooValue'
     * $query->filterByOetbcon2conpick('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ConPick LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2conpick The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2conpick($oetbcon2conpick = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2conpick)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2CONPICK, $oetbcon2conpick, $comparison);
    }

    /**
     * Filter the query on the OetbCon2AllowPick column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2allowpick('fooValue');   // WHERE OetbCon2AllowPick = 'fooValue'
     * $query->filterByOetbcon2allowpick('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AllowPick LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2allowpick The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2allowpick($oetbcon2allowpick = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2allowpick)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWPICK, $oetbcon2allowpick, $comparison);
    }

    /**
     * Filter the query on the OetbCon2CombineSame column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2combinesame('fooValue');   // WHERE OetbCon2CombineSame = 'fooValue'
     * $query->filterByOetbcon2combinesame('%fooValue%', Criteria::LIKE); // WHERE OetbCon2CombineSame LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2combinesame The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2combinesame($oetbcon2combinesame = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2combinesame)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2COMBINESAME, $oetbcon2combinesame, $comparison);
    }

    /**
     * Filter the query on the OetbCon3AutoVerNItems column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3autovernitems('fooValue');   // WHERE OetbCon3AutoVerNItems = 'fooValue'
     * $query->filterByOetbcon3autovernitems('%fooValue%', Criteria::LIKE); // WHERE OetbCon3AutoVerNItems LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3autovernitems The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3autovernitems($oetbcon3autovernitems = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3autovernitems)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3AUTOVERNITEMS, $oetbcon3autovernitems, $comparison);
    }

    /**
     * Filter the query on the OetbCon2AllowZeroQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2allowzeroqty('fooValue');   // WHERE OetbCon2AllowZeroQty = 'fooValue'
     * $query->filterByOetbcon2allowzeroqty('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AllowZeroQty LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2allowzeroqty The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2allowzeroqty($oetbcon2allowzeroqty = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2allowzeroqty)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWZEROQTY, $oetbcon2allowzeroqty, $comparison);
    }

    /**
     * Filter the query on the OetbCon2AllowInvalidWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2allowinvalidwhse('fooValue');   // WHERE OetbCon2AllowInvalidWhse = 'fooValue'
     * $query->filterByOetbcon2allowinvalidwhse('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AllowInvalidWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2allowinvalidwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2allowinvalidwhse($oetbcon2allowinvalidwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2allowinvalidwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWINVALIDWHSE, $oetbcon2allowinvalidwhse, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ShowEdiInfo column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2showediinfo('fooValue');   // WHERE OetbCon2ShowEdiInfo = 'fooValue'
     * $query->filterByOetbcon2showediinfo('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ShowEdiInfo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2showediinfo The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2showediinfo($oetbcon2showediinfo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2showediinfo)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SHOWEDIINFO, $oetbcon2showediinfo, $comparison);
    }

    /**
     * Filter the query on the OetbCon2AddOnSales column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2addonsales('fooValue');   // WHERE OetbCon2AddOnSales = 'fooValue'
     * $query->filterByOetbcon2addonsales('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AddOnSales LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2addonsales The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2addonsales($oetbcon2addonsales = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2addonsales)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ADDONSALES, $oetbcon2addonsales, $comparison);
    }

    /**
     * Filter the query on the OetbCon2ForcedBkord column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2forcedbkord('fooValue');   // WHERE OetbCon2ForcedBkord = 'fooValue'
     * $query->filterByOetbcon2forcedbkord('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ForcedBkord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2forcedbkord The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2forcedbkord($oetbcon2forcedbkord = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2forcedbkord)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2FORCEDBKORD, $oetbcon2forcedbkord, $comparison);
    }

    /**
     * Filter the query on the OetbCon2UpdtPrcDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2updtprcdisc('fooValue');   // WHERE OetbCon2UpdtPrcDisc = 'fooValue'
     * $query->filterByOetbcon2updtprcdisc('%fooValue%', Criteria::LIKE); // WHERE OetbCon2UpdtPrcDisc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2updtprcdisc The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2updtprcdisc($oetbcon2updtprcdisc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2updtprcdisc)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2UPDTPRCDISC, $oetbcon2updtprcdisc, $comparison);
    }

    /**
     * Filter the query on the OetbCon2AutoPack column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2autopack('fooValue');   // WHERE OetbCon2AutoPack = 'fooValue'
     * $query->filterByOetbcon2autopack('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AutoPack LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2autopack The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2autopack($oetbcon2autopack = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2autopack)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2AUTOPACK, $oetbcon2autopack, $comparison);
    }

    /**
     * Filter the query on the OetbCon2PickBoPrtZqts column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2pickboprtzqts('fooValue');   // WHERE OetbCon2PickBoPrtZqts = 'fooValue'
     * $query->filterByOetbcon2pickboprtzqts('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PickBoPrtZqts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2pickboprtzqts The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2pickboprtzqts($oetbcon2pickboprtzqts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2pickboprtzqts)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PICKBOPRTZQTS, $oetbcon2pickboprtzqts, $comparison);
    }

    /**
     * Filter the query on the OetbCon3Pick00NoShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3pick00noship('fooValue');   // WHERE OetbCon3Pick00NoShip = 'fooValue'
     * $query->filterByOetbcon3pick00noship('%fooValue%', Criteria::LIKE); // WHERE OetbCon3Pick00NoShip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3pick00noship The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3pick00noship($oetbcon3pick00noship = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3pick00noship)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3PICK00NOSHIP, $oetbcon3pick00noship, $comparison);
    }

    /**
     * Filter the query on the OetbCon2StandOrdLead column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2standordlead('fooValue');   // WHERE OetbCon2StandOrdLead = 'fooValue'
     * $query->filterByOetbcon2standordlead('%fooValue%', Criteria::LIKE); // WHERE OetbCon2StandOrdLead LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2standordlead The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2standordlead($oetbcon2standordlead = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2standordlead)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDLEAD, $oetbcon2standordlead, $comparison);
    }

    /**
     * Filter the query on the OetbCon2StandOrdAmnt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2standordamnt(1234); // WHERE OetbCon2StandOrdAmnt = 1234
     * $query->filterByOetbcon2standordamnt(array(12, 34)); // WHERE OetbCon2StandOrdAmnt IN (12, 34)
     * $query->filterByOetbcon2standordamnt(array('min' => 12)); // WHERE OetbCon2StandOrdAmnt > 12
     * </code>
     *
     * @param     mixed $oetbcon2standordamnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2standordamnt($oetbcon2standordamnt = null, $comparison = null)
    {
        if (is_array($oetbcon2standordamnt)) {
            $useMinMax = false;
            if (isset($oetbcon2standordamnt['min'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDAMNT, $oetbcon2standordamnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon2standordamnt['max'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDAMNT, $oetbcon2standordamnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDAMNT, $oetbcon2standordamnt, $comparison);
    }

    /**
     * Filter the query on the OetbCon2InactItemCntrl column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2inactitemcntrl('fooValue');   // WHERE OetbCon2InactItemCntrl = 'fooValue'
     * $query->filterByOetbcon2inactitemcntrl('%fooValue%', Criteria::LIKE); // WHERE OetbCon2InactItemCntrl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2inactitemcntrl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2inactitemcntrl($oetbcon2inactitemcntrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2inactitemcntrl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2INACTITEMCNTRL, $oetbcon2inactitemcntrl, $comparison);
    }

    /**
     * Filter the query on the OetbCon2UseItemRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2useitemref('fooValue');   // WHERE OetbCon2UseItemRef = 'fooValue'
     * $query->filterByOetbcon2useitemref('%fooValue%', Criteria::LIKE); // WHERE OetbCon2UseItemRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon2useitemref The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon2useitemref($oetbcon2useitemref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2useitemref)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2USEITEMREF, $oetbcon2useitemref, $comparison);
    }

    /**
     * Filter the query on the OetbCon3UpsNaftaRecords column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3upsnaftarecords('fooValue');   // WHERE OetbCon3UpsNaftaRecords = 'fooValue'
     * $query->filterByOetbcon3upsnaftarecords('%fooValue%', Criteria::LIKE); // WHERE OetbCon3UpsNaftaRecords LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3upsnaftarecords The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3upsnaftarecords($oetbcon3upsnaftarecords = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3upsnaftarecords)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3UPSNAFTARECORDS, $oetbcon3upsnaftarecords, $comparison);
    }

    /**
     * Filter the query on the OetbConfDfltShipWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdfltshipwhse('fooValue');   // WHERE OetbConfDfltShipWhse = 'fooValue'
     * $query->filterByOetbconfdfltshipwhse('%fooValue%', Criteria::LIKE); // WHERE OetbConfDfltShipWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfdfltshipwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdfltshipwhse($oetbconfdfltshipwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdfltshipwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDFLTSHIPWHSE, $oetbconfdfltshipwhse, $comparison);
    }

    /**
     * Filter the query on the OetbConfDfltOrigWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdfltorigwhse('fooValue');   // WHERE OetbConfDfltOrigWhse = 'fooValue'
     * $query->filterByOetbconfdfltorigwhse('%fooValue%', Criteria::LIKE); // WHERE OetbConfDfltOrigWhse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfdfltorigwhse The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfdfltorigwhse($oetbconfdfltorigwhse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdfltorigwhse)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDFLTORIGWHSE, $oetbconfdfltorigwhse, $comparison);
    }

    /**
     * Filter the query on the OetbConfInvcWithPack column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfinvcwithpack('fooValue');   // WHERE OetbConfInvcWithPack = 'fooValue'
     * $query->filterByOetbconfinvcwithpack('%fooValue%', Criteria::LIKE); // WHERE OetbConfInvcWithPack LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfinvcwithpack The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfinvcwithpack($oetbconfinvcwithpack = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfinvcwithpack)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFINVCWITHPACK, $oetbconfinvcwithpack, $comparison);
    }

    /**
     * Filter the query on the OetbConfCarryCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfcarrycntrqty('fooValue');   // WHERE OetbConfCarryCntrQty = 'fooValue'
     * $query->filterByOetbconfcarrycntrqty('%fooValue%', Criteria::LIKE); // WHERE OetbConfCarryCntrQty LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfcarrycntrqty The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfcarrycntrqty($oetbconfcarrycntrqty = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfcarrycntrqty)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFCARRYCNTRQTY, $oetbconfcarrycntrqty, $comparison);
    }

    /**
     * Filter the query on the OetbCon3UseOrdrAs column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3useordras('fooValue');   // WHERE OetbCon3UseOrdrAs = 'fooValue'
     * $query->filterByOetbcon3useordras('%fooValue%', Criteria::LIKE); // WHERE OetbCon3UseOrdrAs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3useordras The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3useordras($oetbcon3useordras = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3useordras)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3USEORDRAS, $oetbcon3useordras, $comparison);
    }

    /**
     * Filter the query on the OetbConfUseOrdrSource column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseordrsource('fooValue');   // WHERE OetbConfUseOrdrSource = 'fooValue'
     * $query->filterByOetbconfuseordrsource('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseOrdrSource LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbconfuseordrsource The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbconfuseordrsource($oetbconfuseordrsource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseordrsource)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRSOURCE, $oetbconfuseordrsource, $comparison);
    }

    /**
     * Filter the query on the OetbCon3CcProcessor column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3ccprocessor('fooValue');   // WHERE OetbCon3CcProcessor = 'fooValue'
     * $query->filterByOetbcon3ccprocessor('%fooValue%', Criteria::LIKE); // WHERE OetbCon3CcProcessor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3ccprocessor The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3ccprocessor($oetbcon3ccprocessor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3ccprocessor)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3CCPROCESSOR, $oetbcon3ccprocessor, $comparison);
    }

    /**
     * Filter the query on the OetbCon3CreditCardCap column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3creditcardcap('fooValue');   // WHERE OetbCon3CreditCardCap = 'fooValue'
     * $query->filterByOetbcon3creditcardcap('%fooValue%', Criteria::LIKE); // WHERE OetbCon3CreditCardCap LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3creditcardcap The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3creditcardcap($oetbcon3creditcardcap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3creditcardcap)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3CREDITCARDCAP, $oetbcon3creditcardcap, $comparison);
    }

    /**
     * Filter the query on the OetbCon3KeyOrCcCap column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3keyorcccap('fooValue');   // WHERE OetbCon3KeyOrCcCap = 'fooValue'
     * $query->filterByOetbcon3keyorcccap('%fooValue%', Criteria::LIKE); // WHERE OetbCon3KeyOrCcCap LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3keyorcccap The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3keyorcccap($oetbcon3keyorcccap = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3keyorcccap)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3KEYORCCCAP, $oetbcon3keyorcccap, $comparison);
    }

    /**
     * Filter the query on the OetbCon3CcXOverlay column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3ccxoverlay('fooValue');   // WHERE OetbCon3CcXOverlay = 'fooValue'
     * $query->filterByOetbcon3ccxoverlay('%fooValue%', Criteria::LIKE); // WHERE OetbCon3CcXOverlay LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3ccxoverlay The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3ccxoverlay($oetbcon3ccxoverlay = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3ccxoverlay)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3CCXOVERLAY, $oetbcon3ccxoverlay, $comparison);
    }

    /**
     * Filter the query on the OetbCon3CcTimeOut column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3cctimeout(1234); // WHERE OetbCon3CcTimeOut = 1234
     * $query->filterByOetbcon3cctimeout(array(12, 34)); // WHERE OetbCon3CcTimeOut IN (12, 34)
     * $query->filterByOetbcon3cctimeout(array('min' => 12)); // WHERE OetbCon3CcTimeOut > 12
     * </code>
     *
     * @param     mixed $oetbcon3cctimeout The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3cctimeout($oetbcon3cctimeout = null, $comparison = null)
    {
        if (is_array($oetbcon3cctimeout)) {
            $useMinMax = false;
            if (isset($oetbcon3cctimeout['min'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3CCTIMEOUT, $oetbcon3cctimeout['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oetbcon3cctimeout['max'])) {
                $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3CCTIMEOUT, $oetbcon3cctimeout['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3CCTIMEOUT, $oetbcon3cctimeout, $comparison);
    }

    /**
     * Filter the query on the OetbCon3SignatureCapture column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3signaturecapture('fooValue');   // WHERE OetbCon3SignatureCapture = 'fooValue'
     * $query->filterByOetbcon3signaturecapture('%fooValue%', Criteria::LIKE); // WHERE OetbCon3SignatureCapture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3signaturecapture The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3signaturecapture($oetbcon3signaturecapture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3signaturecapture)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3SIGNATURECAPTURE, $oetbcon3signaturecapture, $comparison);
    }

    /**
     * Filter the query on the OetbCon3CcPreapproval column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3ccpreapproval('fooValue');   // WHERE OetbCon3CcPreapproval = 'fooValue'
     * $query->filterByOetbcon3ccpreapproval('%fooValue%', Criteria::LIKE); // WHERE OetbCon3CcPreapproval LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3ccpreapproval The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3ccpreapproval($oetbcon3ccpreapproval = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3ccpreapproval)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3CCPREAPPROVAL, $oetbcon3ccpreapproval, $comparison);
    }

    /**
     * Filter the query on the OetbCon3ForceCcNbrEntry column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3forceccnbrentry('fooValue');   // WHERE OetbCon3ForceCcNbrEntry = 'fooValue'
     * $query->filterByOetbcon3forceccnbrentry('%fooValue%', Criteria::LIKE); // WHERE OetbCon3ForceCcNbrEntry LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3forceccnbrentry The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3forceccnbrentry($oetbcon3forceccnbrentry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3forceccnbrentry)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3FORCECCNBRENTRY, $oetbcon3forceccnbrentry, $comparison);
    }

    /**
     * Filter the query on the OetbCon3IntrItemNotes column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3intritemnotes('fooValue');   // WHERE OetbCon3IntrItemNotes = 'fooValue'
     * $query->filterByOetbcon3intritemnotes('%fooValue%', Criteria::LIKE); // WHERE OetbCon3IntrItemNotes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3intritemnotes The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3intritemnotes($oetbcon3intritemnotes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3intritemnotes)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3INTRITEMNOTES, $oetbcon3intritemnotes, $comparison);
    }

    /**
     * Filter the query on the OetbCon3MtrCert column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3mtrcert('fooValue');   // WHERE OetbCon3MtrCert = 'fooValue'
     * $query->filterByOetbcon3mtrcert('%fooValue%', Criteria::LIKE); // WHERE OetbCon3MtrCert LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3mtrcert The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3mtrcert($oetbcon3mtrcert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3mtrcert)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3MTRCERT, $oetbcon3mtrcert, $comparison);
    }

    /**
     * Filter the query on the OetbCon3CofcCert column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3cofccert('fooValue');   // WHERE OetbCon3CofcCert = 'fooValue'
     * $query->filterByOetbcon3cofccert('%fooValue%', Criteria::LIKE); // WHERE OetbCon3CofcCert LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oetbcon3cofccert The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByOetbcon3cofccert($oetbcon3cofccert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3cofccert)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3COFCCERT, $oetbcon3cofccert, $comparison);
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
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDateupdtd($dateupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);
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
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByTimeupdtd($timeupdtd = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timeupdtd)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);
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
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function filterByDummy($dummy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dummy)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfigSalesOrderTableMap::COL_DUMMY, $dummy, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildConfigSalesOrder $configSalesOrder Object to remove from the list of results
     *
     * @return $this|ChildConfigSalesOrderQuery The current query, for fluid interface
     */
    public function prune($configSalesOrder = null)
    {
        if ($configSalesOrder) {
            $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFKEY, $configSalesOrder->getOetbconfkey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the so_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSalesOrderTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ConfigSalesOrderTableMap::clearInstancePool();
            ConfigSalesOrderTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(ConfigSalesOrderTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(ConfigSalesOrderTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            ConfigSalesOrderTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            ConfigSalesOrderTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // ConfigSalesOrderQuery
