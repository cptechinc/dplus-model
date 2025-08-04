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
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the `so_config` table.
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
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3proformafromeso($order = Criteria::ASC) Order by the OetbCon3ProformaFromEso column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3pickpackcode($order = Criteria::ASC) Order by the OetbCon3PickPackCode column
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
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3esoshowquotlink($order = Criteria::ASC) Order by the OetbCon3EsoShowQuotLink column
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3esoshowwiplink($order = Criteria::ASC) Order by the OetbCon3EsoShowWipLink column
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
 * @method     ChildConfigSalesOrderQuery orderByOetbcon3soplotlikenorm($order = Criteria::ASC) Order by the OetbCon3SopLotLikeNorm column
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
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3proformafromeso() Group by the OetbCon3ProformaFromEso column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3pickpackcode() Group by the OetbCon3PickPackCode column
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
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3esoshowquotlink() Group by the OetbCon3EsoShowQuotLink column
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3esoshowwiplink() Group by the OetbCon3EsoShowWipLink column
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
 * @method     ChildConfigSalesOrderQuery groupByOetbcon3soplotlikenorm() Group by the OetbCon3SopLotLikeNorm column
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
 * @method     ChildConfigSalesOrder|null findOne(?ConnectionInterface $con = null) Return the first ChildConfigSalesOrder matching the query
 * @method     ChildConfigSalesOrder findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildConfigSalesOrder matching the query, or a new ChildConfigSalesOrder object populated from the query conditions when no match is found
 *
 * @method     ChildConfigSalesOrder|null findOneByOetbconfkey(int $OetbConfKey) Return the first ChildConfigSalesOrder filtered by the OetbConfKey column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfglifac(string $OetbConfGlIfac) Return the first ChildConfigSalesOrder filtered by the OetbConfGlIfac column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfinifac(string $OetbConfInIfac) Return the first ChildConfigSalesOrder filtered by the OetbConfInIfac column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfrelivty(string $OetbConfRelIvty) Return the first ChildConfigSalesOrder filtered by the OetbConfRelIvty column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfuseordrnbr(string $OetbConfUseOrdrNbr) Return the first ChildConfigSalesOrder filtered by the OetbConfUseOrdrNbr column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdefrqstdate(string $OetbConfDefRqstDate) Return the first ChildConfigSalesOrder filtered by the OetbConfDefRqstDate column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfusecancdate(string $OetbConfUseCancDate) Return the first ChildConfigSalesOrder filtered by the OetbConfUseCancDate column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfshowsp(string $OetbConfShowSp) Return the first ChildConfigSalesOrder filtered by the OetbConfShowSp column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfjrnlsort(int $OetbConfJrnlSort) Return the first ChildConfigSalesOrder filtered by the OetbConfJrnlSort column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfuseprepsoopt(string $OetbConfUsePrepSoOpt) Return the first ChildConfigSalesOrder filtered by the OetbConfUsePrepSoOpt column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdispbillto(string $OetbConfDispBillTo) Return the first ChildConfigSalesOrder filtered by the OetbConfDispBillTo column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfslctflm(string $OetbConfSlctFlm) Return the first ChildConfigSalesOrder filtered by the OetbConfSlctFlm column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3usestockpull(string $OetbCon3UseStockPull) Return the first ChildConfigSalesOrder filtered by the OetbCon3UseStockPull column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfqtytoship(string $OetbConfQtyToShip) Return the first ChildConfigSalesOrder filtered by the OetbConfQtyToShip column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfqtytoshipdef(string $OetbConfQtyToShipDef) Return the first ChildConfigSalesOrder filtered by the OetbConfQtyToShipDef column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdfltordrqty(string $OetbConfDfltOrdrQty) Return the first ChildConfigSalesOrder filtered by the OetbConfDfltOrdrQty column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfallocqtytoship(string $OetbConfAllocQtyToShip) Return the first ChildConfigSalesOrder filtered by the OetbConfAllocQtyToShip column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfoverallocqts(string $OetbConfOverAllocQts) Return the first ChildConfigSalesOrder filtered by the OetbConfOverAllocQts column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3completelotbin(string $OetbCon3CompleteLotBin) Return the first ChildConfigSalesOrder filtered by the OetbCon3CompleteLotBin column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3rqtsopt(string $OetbCon3RqtsOpt) Return the first ChildConfigSalesOrder filtered by the OetbCon3RqtsOpt column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2shipcomphold(int $OetbCon2ShipCompHold) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShipCompHold column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3usesaleforecast(string $OetbCon3UseSaleForecast) Return the first ChildConfigSalesOrder filtered by the OetbCon3UseSaleForecast column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfverfstopneg(string $OetbConfVerfStopNeg) Return the first ChildConfigSalesOrder filtered by the OetbConfVerfStopNeg column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfverfaudtrept(string $OetbConfVerfAudtRept) Return the first ChildConfigSalesOrder filtered by the OetbConfVerfAudtRept column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfagelevldisp(string $OetbConfAgeLevlDisp) Return the first ChildConfigSalesOrder filtered by the OetbConfAgeLevlDisp column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfagealltime(string $OetbConfAgeAllTime) Return the first ChildConfigSalesOrder filtered by the OetbConfAgeAllTime column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfageathold(string $OetbConfAgeAtHold) Return the first ChildConfigSalesOrder filtered by the OetbConfAgeAtHold column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfshowatlevl(string $OetbConfShowAtLevl) Return the first ChildConfigSalesOrder filtered by the OetbConfShowAtLevl column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfshowitem(string $OetbConfShowItem) Return the first ChildConfigSalesOrder filtered by the OetbConfShowItem column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfstoppnt(string $OetbConfStopPnt) Return the first ChildConfigSalesOrder filtered by the OetbConfStopPnt column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfpricwind(string $OetbConfPricWind) Return the first ChildConfigSalesOrder filtered by the OetbConfPricWind column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfshowcost(string $OetbConfShowCost) Return the first ChildConfigSalesOrder filtered by the OetbConfShowCost column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfcosttouse(string $OetbConfCostToUse) Return the first ChildConfigSalesOrder filtered by the OetbConfCostToUse column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfshowmarg(string $OetbConfShowMarg) Return the first ChildConfigSalesOrder filtered by the OetbConfShowMarg column
 * @method     ChildConfigSalesOrder|null findOneByOetbconffxoe(string $OetbConfFxOe) Return the first ChildConfigSalesOrder filtered by the OetbConfFxOe column
 * @method     ChildConfigSalesOrder|null findOneByOetbconffxinv(string $OetbConfFxInv) Return the first ChildConfigSalesOrder filtered by the OetbConfFxInv column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdispvia(string $OetbConfDispVia) Return the first ChildConfigSalesOrder filtered by the OetbConfDispVia column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdispcaseqty(string $OetbConfDispCaseQty) Return the first ChildConfigSalesOrder filtered by the OetbConfDispCaseQty column
 * @method     ChildConfigSalesOrder|null findOneByOetbconffrtin(string $OetbConfFrtIn) Return the first ChildConfigSalesOrder filtered by the OetbConfFrtIn column
 * @method     ChildConfigSalesOrder|null findOneByOetbconffrtinglacct(string $OetbConfFrtInGlAcct) Return the first ChildConfigSalesOrder filtered by the OetbConfFrtInGlAcct column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfmincharge(string $OetbConfMinCharge) Return the first ChildConfigSalesOrder filtered by the OetbConfMinCharge column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfminchrgglacct(string $OetbConfMinChrgGlAcct) Return the first ChildConfigSalesOrder filtered by the OetbConfMinChrgGlAcct column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdropshipchrg(string $OetbConfDropShipChrg) Return the first ChildConfigSalesOrder filtered by the OetbConfDropShipChrg column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdropshpglacct(string $OetbConfDropShpGlAcct) Return the first ChildConfigSalesOrder filtered by the OetbConfDropShpGlAcct column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfnontaxcustcode(string $OetbConfNonTaxCustCode) Return the first ChildConfigSalesOrder filtered by the OetbConfNonTaxCustCode column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfhstaxid(string $OetbConfHsTaxId) Return the first ChildConfigSalesOrder filtered by the OetbConfHsTaxId column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfhsfrtid(string $OetbConfHsFrtId) Return the first ChildConfigSalesOrder filtered by the OetbConfHsFrtId column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfhsmiscid(string $OetbConfHsMiscId) Return the first ChildConfigSalesOrder filtered by the OetbConfHsMiscId column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2hscusdid(string $OetbCon2HsCusdId) Return the first ChildConfigSalesOrder filtered by the OetbCon2HsCusdId column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3hsfrtinid(string $OetbCon3HsFrtInId) Return the first ChildConfigSalesOrder filtered by the OetbCon3HsFrtInId column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3hsdropid(string $OetbCon3HsDropId) Return the first ChildConfigSalesOrder filtered by the OetbCon3HsDropId column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3hsminordid(string $OetbCon3HsMinordId) Return the first ChildConfigSalesOrder filtered by the OetbCon3HsMinordId column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfheadgetdef(string $OetbConfHeadGetDef) Return the first ChildConfigSalesOrder filtered by the OetbConfHeadGetDef column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfitemgetdef(string $OetbConfItemGetDef) Return the first ChildConfigSalesOrder filtered by the OetbConfItemGetDef column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfautogetcust(string $OetbConfAutoGetCust) Return the first ChildConfigSalesOrder filtered by the OetbConfAutoGetCust column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3autogetitem(string $OetbCon3AutoGetItem) Return the first ChildConfigSalesOrder filtered by the OetbCon3AutoGetItem column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfrqstheaddtl(string $OetbConfRqstHeadDtl) Return the first ChildConfigSalesOrder filtered by the OetbConfRqstHeadDtl column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfcancheaddtl(string $OetbConfCancHeadDtl) Return the first ChildConfigSalesOrder filtered by the OetbConfCancHeadDtl column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfuseinvcasship(string $OetbConfUseInvcAsShip) Return the first ChildConfigSalesOrder filtered by the OetbConfUseInvcAsShip column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3usearrvdate(string $OetbCon3UseArrvDate) Return the first ChildConfigSalesOrder filtered by the OetbCon3UseArrvDate column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfseparatecred(string $OetbConfSeparateCred) Return the first ChildConfigSalesOrder filtered by the OetbConfSeparateCred column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3applycredits(string $OetbCon3ApplyCredits) Return the first ChildConfigSalesOrder filtered by the OetbCon3ApplyCredits column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfwarnnotnew(string $OetbConfWarnNotNew) Return the first ChildConfigSalesOrder filtered by the OetbConfWarnNotNew column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfwarnbotozero(string $OetbConfWarnBoToZero) Return the first ChildConfigSalesOrder filtered by the OetbConfWarnBoToZero column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2providerouting(string $OetbCon2ProvideRouting) Return the first ChildConfigSalesOrder filtered by the OetbCon2ProvideRouting column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2srtrtbyrqstdte(string $OetbCon2SrtRtByRqstDte) Return the first ChildConfigSalesOrder filtered by the OetbCon2SrtRtByRqstDte column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfusesoreview(string $OetbConfUseSoReview) Return the first ChildConfigSalesOrder filtered by the OetbConfUseSoReview column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfpicknotedef(string $OetbConfPickNoteDef) Return the first ChildConfigSalesOrder filtered by the OetbConfPickNoteDef column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfpacknotedef(string $OetbConfPackNoteDef) Return the first ChildConfigSalesOrder filtered by the OetbConfPackNoteDef column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfpicksort(string $OetbConfPickSort) Return the first ChildConfigSalesOrder filtered by the OetbConfPickSort column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfpacksort(string $OetbConfPackSort) Return the first ChildConfigSalesOrder filtered by the OetbConfPackSort column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfprtpriconly(string $OetbConfPrtPricOnly) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtPricOnly column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfprtneg(string $OetbConfPrtNeg) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtNeg column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2prtpackageinfo(string $OetbCon2PrtPackageInfo) Return the first ChildConfigSalesOrder filtered by the OetbCon2PrtPackageInfo column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2innerpacklabel(string $OetbCon2InnerPackLabel) Return the first ChildConfigSalesOrder filtered by the OetbCon2InnerPackLabel column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2outerpacklabel(string $OetbCon2OuterPackLabel) Return the first ChildConfigSalesOrder filtered by the OetbCon2OuterPackLabel column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2shiptarelabel(string $OetbCon2ShipTareLabel) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShipTareLabel column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfprtpick(string $OetbConfPrtPick) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtPick column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfpicprioseq(string $OetbConfPicPrioSeq) Return the first ChildConfigSalesOrder filtered by the OetbConfPicPrioSeq column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfprtpack(string $OetbConfPrtPack) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtPack column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfprtinv(string $OetbConfPrtInv) Return the first ChildConfigSalesOrder filtered by the OetbConfPrtInv column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2prtcredmemo(string $OetbCon2PrtCredMemo) Return the first ChildConfigSalesOrder filtered by the OetbCon2PrtCredMemo column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfcrntdate(string $OetbConfCrntDate) Return the first ChildConfigSalesOrder filtered by the OetbConfCrntDate column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfmarkpicked(string $OetbConfMarkPicked) Return the first ChildConfigSalesOrder filtered by the OetbConfMarkPicked column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfshowunavail(string $OetbConfShowUnavail) Return the first ChildConfigSalesOrder filtered by the OetbConfShowUnavail column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdecplaces(int $OetbConfDecPlaces) Return the first ChildConfigSalesOrder filtered by the OetbConfDecPlaces column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfwarndup(string $OetbConfWarnDup) Return the first ChildConfigSalesOrder filtered by the OetbConfWarnDup column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdefpick(string $OetbConfDefPick) Return the first ChildConfigSalesOrder filtered by the OetbConfDefPick column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdefpack(string $OetbConfDefPack) Return the first ChildConfigSalesOrder filtered by the OetbConfDefPack column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdefinvc(string $OetbConfDefInvc) Return the first ChildConfigSalesOrder filtered by the OetbConfDefInvc column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdefack(string $OetbConfDefAck) Return the first ChildConfigSalesOrder filtered by the OetbConfDefAck column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfacksortopt(string $OetbConfAckSortOpt) Return the first ChildConfigSalesOrder filtered by the OetbConfAckSortOpt column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfreleasenbr(string $OetbConfReleaseNbr) Return the first ChildConfigSalesOrder filtered by the OetbConfReleaseNbr column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfpodetlinenbr(string $OetbConfPoDetLineNbr) Return the first ChildConfigSalesOrder filtered by the OetbConfPoDetLineNbr column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdetlinebinnbr(string $OetbConfDetLineBinNbr) Return the first ChildConfigSalesOrder filtered by the OetbConfDetLineBinNbr column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfsplitbywhse(string $OetbConfSplitByWhse) Return the first ChildConfigSalesOrder filtered by the OetbConfSplitByWhse column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3allowmultwhse(string $OetbCon3AllowMultWhse) Return the first ChildConfigSalesOrder filtered by the OetbCon3AllowMultWhse column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfuseorigwhse(string $OetbConfUseOrigWhse) Return the first ChildConfigSalesOrder filtered by the OetbConfUseOrigWhse column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfuseesosingle(string $OetbConfUseEsoSingle) Return the first ChildConfigSalesOrder filtered by the OetbConfUseEsoSingle column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfcreatepo(string $OetbConfCreatePo) Return the first ChildConfigSalesOrder filtered by the OetbConfCreatePo column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfbestprice(string $OetbConfBestPrice) Return the first ChildConfigSalesOrder filtered by the OetbConfBestPrice column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfesobacktonew(string $OetbConfEsoBackToNew) Return the first ChildConfigSalesOrder filtered by the OetbConfEsoBackToNew column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfpickprintdrop(string $OetbConfPickPrintDrop) Return the first ChildConfigSalesOrder filtered by the OetbConfPickPrintDrop column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfwarnmultpo(string $OetbConfWarnMultPo) Return the first ChildConfigSalesOrder filtered by the OetbConfWarnMultPo column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfalertitemquote(string $OetbConfAlertItemQuote) Return the first ChildConfigSalesOrder filtered by the OetbConfAlertItemQuote column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3askchgprcwqty(string $OetbCon3AskChgPrcWQty) Return the first ChildConfigSalesOrder filtered by the OetbCon3AskChgPrcWQty column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3tenqtybrks(string $OetbCon3TenQtyBrks) Return the first ChildConfigSalesOrder filtered by the OetbCon3TenQtyBrks column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdecordrpric(int $OetbConfDecOrdrPric) Return the first ChildConfigSalesOrder filtered by the OetbConfDecOrdrPric column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2provlostsales(string $OetbCon2ProvLostSales) Return the first ChildConfigSalesOrder filtered by the OetbCon2ProvLostSales column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2askreasoncode(string $OetbCon2AskReasonCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2AskReasonCode column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2defreasoncode(string $OetbCon2DefReasonCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefReasonCode column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2bordcntl(string $OetbCon2BordCntl) Return the first ChildConfigSalesOrder filtered by the OetbCon2BordCntl column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2defreabocode(string $OetbCon2DefReaBoCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefReaBoCode column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2numdayssavls(int $OetbCon2NumDaysSavLs) Return the first ChildConfigSalesOrder filtered by the OetbCon2NumDaysSavLs column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2callbacknotif(string $OetbCon2CallBackNotif) Return the first ChildConfigSalesOrder filtered by the OetbCon2CallBackNotif column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2defdayswhenin(int $OetbCon2DefDaysWhenIn) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefDaysWhenIn column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2addsubsls(string $OetbCon2AddSubsLs) Return the first ChildConfigSalesOrder filtered by the OetbCon2AddSubsLs column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2defreasubscode(string $OetbCon2DefReaSubsCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefReaSubsCode column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2ordtypnorm(string $OetbCon2OrdTypNorm) Return the first ChildConfigSalesOrder filtered by the OetbCon2OrdTypNorm column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2ordtyprep(string $OetbCon2OrdTypRep) Return the first ChildConfigSalesOrder filtered by the OetbCon2OrdTypRep column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2ordtypserv(string $OetbCon2OrdTypServ) Return the first ChildConfigSalesOrder filtered by the OetbCon2OrdTypServ column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2defordtyp(string $OetbCon2DefOrdTyp) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefOrdTyp column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfchgpric(string $OetbConfChgPric) Return the first ChildConfigSalesOrder filtered by the OetbConfChgPric column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2spordpricezero(string $OetbCon2SpordPriceZero) Return the first ChildConfigSalesOrder filtered by the OetbCon2SpordPriceZero column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfinactpricezero(string $OetbConfInactPriceZero) Return the first ChildConfigSalesOrder filtered by the OetbConfInactPriceZero column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2reseq(string $OetbCon2Reseq) Return the first ChildConfigSalesOrder filtered by the OetbCon2Reseq column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2reseqby(string $OetbCon2ReseqBy) Return the first ChildConfigSalesOrder filtered by the OetbCon2ReseqBy column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2minqtysales(string $OetbCon2MinQtySales) Return the first ChildConfigSalesOrder filtered by the OetbCon2MinQtySales column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2chgorder(string $OetbCon2ChgOrder) Return the first ChildConfigSalesOrder filtered by the OetbCon2ChgOrder column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2vercomp(string $OetbCon2VerComp) Return the first ChildConfigSalesOrder filtered by the OetbCon2VerComp column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2prtinv(string $OetbCon2PrtInv) Return the first ChildConfigSalesOrder filtered by the OetbCon2PrtInv column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2dynamicpicktick(string $OetbCon2DynamicPickTick) Return the first ChildConfigSalesOrder filtered by the OetbCon2DynamicPickTick column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2dynamicinvoice(string $OetbCon2DynamicInvoice) Return the first ChildConfigSalesOrder filtered by the OetbCon2DynamicInvoice column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2edidefinvoice(string $OetbCon2EdiDefInvoice) Return the first ChildConfigSalesOrder filtered by the OetbCon2EdiDefInvoice column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2allowccpick(string $OetbCon2AllowCcPick) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowCcPick column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2autoccwind(string $OetbCon2AutoCcWind) Return the first ChildConfigSalesOrder filtered by the OetbCon2AutoCcWind column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2autoccupdate(string $OetbCon2AutoCcUpdate) Return the first ChildConfigSalesOrder filtered by the OetbCon2AutoCcUpdate column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2allowapvdccchg(string $OetbCon2AllowApvdCcChg) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowApvdCcChg column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3apvdbckordclear(string $OetbCon3ApvdBckordClear) Return the first ChildConfigSalesOrder filtered by the OetbCon3ApvdBckordClear column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2polwhichcost(string $OetbCon2PolWhichCost) Return the first ChildConfigSalesOrder filtered by the OetbCon2PolWhichCost column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2revhazard(string $OetbCon2RevHazard) Return the first ChildConfigSalesOrder filtered by the OetbCon2RevHazard column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2showdisclist(string $OetbCon2ShowDiscList) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShowDiscList column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2chglist(string $OetbCon2ChgList) Return the first ChildConfigSalesOrder filtered by the OetbCon2ChgList column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2maillist(string $OetbCon2MailList) Return the first ChildConfigSalesOrder filtered by the OetbCon2MailList column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2nameformat(string $OetbCon2NameFormat) Return the first ChildConfigSalesOrder filtered by the OetbCon2NameFormat column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2mailidtype(string $OetbCon2MailIdType) Return the first ChildConfigSalesOrder filtered by the OetbCon2MailIdType column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2cashdrawerpswd(string $OetbCon2CashDrawerPswd) Return the first ChildConfigSalesOrder filtered by the OetbCon2CashDrawerPswd column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2upsonline(string $OetbCon2UpsOnline) Return the first ChildConfigSalesOrder filtered by the OetbCon2UpsOnline column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2picorver(string $OetbCon2PicOrVer) Return the first ChildConfigSalesOrder filtered by the OetbCon2PicOrVer column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2combback(string $OetbCon2CombBack) Return the first ChildConfigSalesOrder filtered by the OetbCon2CombBack column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2frtallowamt(int $OetbCon2FrtAllowAmt) Return the first ChildConfigSalesOrder filtered by the OetbCon2FrtAllowAmt column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3shipmoreordered(string $OetbCon3ShipMoreOrdered) Return the first ChildConfigSalesOrder filtered by the OetbCon3ShipMoreOrdered column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3warnshipmore(string $OetbCon3WarnShipMore) Return the first ChildConfigSalesOrder filtered by the OetbCon3WarnShipMore column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3proformafromeso(string $OetbCon3ProformaFromEso) Return the first ChildConfigSalesOrder filtered by the OetbCon3ProformaFromEso column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3pickpackcode(string $OetbCon3PickPackCode) Return the first ChildConfigSalesOrder filtered by the OetbCon3PickPackCode column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2usedept(string $OetbCon2UseDept) Return the first ChildConfigSalesOrder filtered by the OetbCon2UseDept column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2usedivision(string $OetbCon2UseDivision) Return the first ChildConfigSalesOrder filtered by the OetbCon2UseDivision column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2defmfecode(string $OetbCon2DefMfeCode) Return the first ChildConfigSalesOrder filtered by the OetbCon2DefMfeCode column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2showavgcost(string $OetbCon2ShowAvgCost) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShowAvgCost column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2fedex(string $OetbCon2FedEx) Return the first ChildConfigSalesOrder filtered by the OetbCon2FedEx column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3deffrghtgrup(string $OetbCon3DefFrghtGrup) Return the first ChildConfigSalesOrder filtered by the OetbCon3DefFrghtGrup column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3upsmysqldbname(string $OetbCon3UpsMysqlDbname) Return the first ChildConfigSalesOrder filtered by the OetbCon3UpsMysqlDbname column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfuseoptcode(string $OetbConfUseOptCode) Return the first ChildConfigSalesOrder filtered by the OetbConfUseOptCode column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfscn4opt(string $OetbConfScn4Opt) Return the first ChildConfigSalesOrder filtered by the OetbConfScn4Opt column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2takenbyuse(string $OetbCon2TakenByUse) Return the first ChildConfigSalesOrder filtered by the OetbCon2TakenByUse column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2takenbylogin(string $OetbCon2TakenByLogin) Return the first ChildConfigSalesOrder filtered by the OetbCon2TakenByLogin column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2takenbyforce(string $OetbCon2TakenByForce) Return the first ChildConfigSalesOrder filtered by the OetbCon2TakenByForce column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2pickedbyuse(string $OetbCon2PickedByUse) Return the first ChildConfigSalesOrder filtered by the OetbCon2PickedByUse column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2pickedbyforce(string $OetbCon2PickedByForce) Return the first ChildConfigSalesOrder filtered by the OetbCon2PickedByForce column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2pickedbyproc(string $OetbCon2PickedByProc) Return the first ChildConfigSalesOrder filtered by the OetbCon2PickedByProc column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2packedbyuse(string $OetbCon2PackedByUse) Return the first ChildConfigSalesOrder filtered by the OetbCon2PackedByUse column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2packedbyforce(string $OetbCon2PackedByForce) Return the first ChildConfigSalesOrder filtered by the OetbCon2PackedByForce column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2verifiedbyuse(string $OetbCon2VerifiedByUse) Return the first ChildConfigSalesOrder filtered by the OetbCon2VerifiedByUse column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2verifiedbylogin(string $OetbCon2VerifiedByLogin) Return the first ChildConfigSalesOrder filtered by the OetbCon2VerifiedByLogin column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2verifiedbyforce(string $OetbCon2VerifiedByForce) Return the first ChildConfigSalesOrder filtered by the OetbCon2VerifiedByForce column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfoptlabl1(string $OetbConfOptLabl1) Return the first ChildConfigSalesOrder filtered by the OetbConfOptLabl1 column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2ucode1force(string $OetbCon2Ucode1Force) Return the first ChildConfigSalesOrder filtered by the OetbCon2Ucode1Force column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfoptlabl2(string $OetbConfOptLabl2) Return the first ChildConfigSalesOrder filtered by the OetbConfOptLabl2 column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2ucode2force(string $OetbCon2Ucode2Force) Return the first ChildConfigSalesOrder filtered by the OetbCon2Ucode2Force column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfoptlabl3(string $OetbConfOptLabl3) Return the first ChildConfigSalesOrder filtered by the OetbConfOptLabl3 column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2ucode3force(string $OetbCon2Ucode3Force) Return the first ChildConfigSalesOrder filtered by the OetbCon2Ucode3Force column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfoptlabl4(string $OetbConfOptLabl4) Return the first ChildConfigSalesOrder filtered by the OetbConfOptLabl4 column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2ucode4force(string $OetbCon2Ucode4Force) Return the first ChildConfigSalesOrder filtered by the OetbCon2Ucode4Force column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfverifyafterpack(string $OetbConfVerifyAfterPack) Return the first ChildConfigSalesOrder filtered by the OetbConfVerifyAfterPack column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfhistyrsback(int $OetbConfHistYrsBack) Return the first ChildConfigSalesOrder filtered by the OetbConfHistYrsBack column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfrqstcatlg(string $OetbConfRqstCatlg) Return the first ChildConfigSalesOrder filtered by the OetbConfRqstCatlg column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2conpick(string $OetbCon2ConPick) Return the first ChildConfigSalesOrder filtered by the OetbCon2ConPick column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2allowpick(string $OetbCon2AllowPick) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowPick column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2combinesame(string $OetbCon2CombineSame) Return the first ChildConfigSalesOrder filtered by the OetbCon2CombineSame column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3autovernitems(string $OetbCon3AutoVerNItems) Return the first ChildConfigSalesOrder filtered by the OetbCon3AutoVerNItems column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2allowzeroqty(string $OetbCon2AllowZeroQty) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowZeroQty column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2allowinvalidwhse(string $OetbCon2AllowInvalidWhse) Return the first ChildConfigSalesOrder filtered by the OetbCon2AllowInvalidWhse column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2showediinfo(string $OetbCon2ShowEdiInfo) Return the first ChildConfigSalesOrder filtered by the OetbCon2ShowEdiInfo column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3esoshowquotlink(string $OetbCon3EsoShowQuotLink) Return the first ChildConfigSalesOrder filtered by the OetbCon3EsoShowQuotLink column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3esoshowwiplink(string $OetbCon3EsoShowWipLink) Return the first ChildConfigSalesOrder filtered by the OetbCon3EsoShowWipLink column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2addonsales(string $OetbCon2AddOnSales) Return the first ChildConfigSalesOrder filtered by the OetbCon2AddOnSales column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2forcedbkord(string $OetbCon2ForcedBkord) Return the first ChildConfigSalesOrder filtered by the OetbCon2ForcedBkord column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2updtprcdisc(string $OetbCon2UpdtPrcDisc) Return the first ChildConfigSalesOrder filtered by the OetbCon2UpdtPrcDisc column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2autopack(string $OetbCon2AutoPack) Return the first ChildConfigSalesOrder filtered by the OetbCon2AutoPack column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2pickboprtzqts(string $OetbCon2PickBoPrtZqts) Return the first ChildConfigSalesOrder filtered by the OetbCon2PickBoPrtZqts column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3pick00noship(string $OetbCon3Pick00NoShip) Return the first ChildConfigSalesOrder filtered by the OetbCon3Pick00NoShip column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2standordlead(string $OetbCon2StandOrdLead) Return the first ChildConfigSalesOrder filtered by the OetbCon2StandOrdLead column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2standordamnt(int $OetbCon2StandOrdAmnt) Return the first ChildConfigSalesOrder filtered by the OetbCon2StandOrdAmnt column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2inactitemcntrl(string $OetbCon2InactItemCntrl) Return the first ChildConfigSalesOrder filtered by the OetbCon2InactItemCntrl column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon2useitemref(string $OetbCon2UseItemRef) Return the first ChildConfigSalesOrder filtered by the OetbCon2UseItemRef column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3upsnaftarecords(string $OetbCon3UpsNaftaRecords) Return the first ChildConfigSalesOrder filtered by the OetbCon3UpsNaftaRecords column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3soplotlikenorm(string $OetbCon3SopLotLikeNorm) Return the first ChildConfigSalesOrder filtered by the OetbCon3SopLotLikeNorm column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdfltshipwhse(string $OetbConfDfltShipWhse) Return the first ChildConfigSalesOrder filtered by the OetbConfDfltShipWhse column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfdfltorigwhse(string $OetbConfDfltOrigWhse) Return the first ChildConfigSalesOrder filtered by the OetbConfDfltOrigWhse column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfinvcwithpack(string $OetbConfInvcWithPack) Return the first ChildConfigSalesOrder filtered by the OetbConfInvcWithPack column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfcarrycntrqty(string $OetbConfCarryCntrQty) Return the first ChildConfigSalesOrder filtered by the OetbConfCarryCntrQty column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3useordras(string $OetbCon3UseOrdrAs) Return the first ChildConfigSalesOrder filtered by the OetbCon3UseOrdrAs column
 * @method     ChildConfigSalesOrder|null findOneByOetbconfuseordrsource(string $OetbConfUseOrdrSource) Return the first ChildConfigSalesOrder filtered by the OetbConfUseOrdrSource column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3ccprocessor(string $OetbCon3CcProcessor) Return the first ChildConfigSalesOrder filtered by the OetbCon3CcProcessor column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3creditcardcap(string $OetbCon3CreditCardCap) Return the first ChildConfigSalesOrder filtered by the OetbCon3CreditCardCap column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3keyorcccap(string $OetbCon3KeyOrCcCap) Return the first ChildConfigSalesOrder filtered by the OetbCon3KeyOrCcCap column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3ccxoverlay(string $OetbCon3CcXOverlay) Return the first ChildConfigSalesOrder filtered by the OetbCon3CcXOverlay column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3cctimeout(int $OetbCon3CcTimeOut) Return the first ChildConfigSalesOrder filtered by the OetbCon3CcTimeOut column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3signaturecapture(string $OetbCon3SignatureCapture) Return the first ChildConfigSalesOrder filtered by the OetbCon3SignatureCapture column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3ccpreapproval(string $OetbCon3CcPreapproval) Return the first ChildConfigSalesOrder filtered by the OetbCon3CcPreapproval column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3forceccnbrentry(string $OetbCon3ForceCcNbrEntry) Return the first ChildConfigSalesOrder filtered by the OetbCon3ForceCcNbrEntry column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3intritemnotes(string $OetbCon3IntrItemNotes) Return the first ChildConfigSalesOrder filtered by the OetbCon3IntrItemNotes column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3mtrcert(string $OetbCon3MtrCert) Return the first ChildConfigSalesOrder filtered by the OetbCon3MtrCert column
 * @method     ChildConfigSalesOrder|null findOneByOetbcon3cofccert(string $OetbCon3CofcCert) Return the first ChildConfigSalesOrder filtered by the OetbCon3CofcCert column
 * @method     ChildConfigSalesOrder|null findOneByDateupdtd(string $DateUpdtd) Return the first ChildConfigSalesOrder filtered by the DateUpdtd column
 * @method     ChildConfigSalesOrder|null findOneByTimeupdtd(string $TimeUpdtd) Return the first ChildConfigSalesOrder filtered by the TimeUpdtd column
 * @method     ChildConfigSalesOrder|null findOneByDummy(string $dummy) Return the first ChildConfigSalesOrder filtered by the dummy column
 *
 * @method     ChildConfigSalesOrder requirePk($key, ?ConnectionInterface $con = null) Return the ChildConfigSalesOrder by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOne(?ConnectionInterface $con = null) Return the first ChildConfigSalesOrder matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildConfigSalesOrder requireOneByOetbcon3proformafromeso(string $OetbCon3ProformaFromEso) Return the first ChildConfigSalesOrder filtered by the OetbCon3ProformaFromEso column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3pickpackcode(string $OetbCon3PickPackCode) Return the first ChildConfigSalesOrder filtered by the OetbCon3PickPackCode column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildConfigSalesOrder requireOneByOetbcon3esoshowquotlink(string $OetbCon3EsoShowQuotLink) Return the first ChildConfigSalesOrder filtered by the OetbCon3EsoShowQuotLink column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildConfigSalesOrder requireOneByOetbcon3esoshowwiplink(string $OetbCon3EsoShowWipLink) Return the first ChildConfigSalesOrder filtered by the OetbCon3EsoShowWipLink column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildConfigSalesOrder requireOneByOetbcon3soplotlikenorm(string $OetbCon3SopLotLikeNorm) Return the first ChildConfigSalesOrder filtered by the OetbCon3SopLotLikeNorm column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
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
 * @method     ChildConfigSalesOrder[]|Collection find(?ConnectionInterface $con = null) Return ChildConfigSalesOrder objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> find(?ConnectionInterface $con = null) Return ChildConfigSalesOrder objects based on current ModelCriteria
 *
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfkey(int|array<int> $OetbConfKey) Return ChildConfigSalesOrder objects filtered by the OetbConfKey column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfkey(int|array<int> $OetbConfKey) Return ChildConfigSalesOrder objects filtered by the OetbConfKey column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfglifac(string|array<string> $OetbConfGlIfac) Return ChildConfigSalesOrder objects filtered by the OetbConfGlIfac column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfglifac(string|array<string> $OetbConfGlIfac) Return ChildConfigSalesOrder objects filtered by the OetbConfGlIfac column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfinifac(string|array<string> $OetbConfInIfac) Return ChildConfigSalesOrder objects filtered by the OetbConfInIfac column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfinifac(string|array<string> $OetbConfInIfac) Return ChildConfigSalesOrder objects filtered by the OetbConfInIfac column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfrelivty(string|array<string> $OetbConfRelIvty) Return ChildConfigSalesOrder objects filtered by the OetbConfRelIvty column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfrelivty(string|array<string> $OetbConfRelIvty) Return ChildConfigSalesOrder objects filtered by the OetbConfRelIvty column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfuseordrnbr(string|array<string> $OetbConfUseOrdrNbr) Return ChildConfigSalesOrder objects filtered by the OetbConfUseOrdrNbr column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfuseordrnbr(string|array<string> $OetbConfUseOrdrNbr) Return ChildConfigSalesOrder objects filtered by the OetbConfUseOrdrNbr column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdefrqstdate(string|array<string> $OetbConfDefRqstDate) Return ChildConfigSalesOrder objects filtered by the OetbConfDefRqstDate column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdefrqstdate(string|array<string> $OetbConfDefRqstDate) Return ChildConfigSalesOrder objects filtered by the OetbConfDefRqstDate column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfusecancdate(string|array<string> $OetbConfUseCancDate) Return ChildConfigSalesOrder objects filtered by the OetbConfUseCancDate column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfusecancdate(string|array<string> $OetbConfUseCancDate) Return ChildConfigSalesOrder objects filtered by the OetbConfUseCancDate column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfshowsp(string|array<string> $OetbConfShowSp) Return ChildConfigSalesOrder objects filtered by the OetbConfShowSp column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfshowsp(string|array<string> $OetbConfShowSp) Return ChildConfigSalesOrder objects filtered by the OetbConfShowSp column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfjrnlsort(int|array<int> $OetbConfJrnlSort) Return ChildConfigSalesOrder objects filtered by the OetbConfJrnlSort column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfjrnlsort(int|array<int> $OetbConfJrnlSort) Return ChildConfigSalesOrder objects filtered by the OetbConfJrnlSort column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfuseprepsoopt(string|array<string> $OetbConfUsePrepSoOpt) Return ChildConfigSalesOrder objects filtered by the OetbConfUsePrepSoOpt column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfuseprepsoopt(string|array<string> $OetbConfUsePrepSoOpt) Return ChildConfigSalesOrder objects filtered by the OetbConfUsePrepSoOpt column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdispbillto(string|array<string> $OetbConfDispBillTo) Return ChildConfigSalesOrder objects filtered by the OetbConfDispBillTo column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdispbillto(string|array<string> $OetbConfDispBillTo) Return ChildConfigSalesOrder objects filtered by the OetbConfDispBillTo column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfslctflm(string|array<string> $OetbConfSlctFlm) Return ChildConfigSalesOrder objects filtered by the OetbConfSlctFlm column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfslctflm(string|array<string> $OetbConfSlctFlm) Return ChildConfigSalesOrder objects filtered by the OetbConfSlctFlm column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3usestockpull(string|array<string> $OetbCon3UseStockPull) Return ChildConfigSalesOrder objects filtered by the OetbCon3UseStockPull column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3usestockpull(string|array<string> $OetbCon3UseStockPull) Return ChildConfigSalesOrder objects filtered by the OetbCon3UseStockPull column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfqtytoship(string|array<string> $OetbConfQtyToShip) Return ChildConfigSalesOrder objects filtered by the OetbConfQtyToShip column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfqtytoship(string|array<string> $OetbConfQtyToShip) Return ChildConfigSalesOrder objects filtered by the OetbConfQtyToShip column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfqtytoshipdef(string|array<string> $OetbConfQtyToShipDef) Return ChildConfigSalesOrder objects filtered by the OetbConfQtyToShipDef column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfqtytoshipdef(string|array<string> $OetbConfQtyToShipDef) Return ChildConfigSalesOrder objects filtered by the OetbConfQtyToShipDef column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdfltordrqty(string|array<string> $OetbConfDfltOrdrQty) Return ChildConfigSalesOrder objects filtered by the OetbConfDfltOrdrQty column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdfltordrqty(string|array<string> $OetbConfDfltOrdrQty) Return ChildConfigSalesOrder objects filtered by the OetbConfDfltOrdrQty column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfallocqtytoship(string|array<string> $OetbConfAllocQtyToShip) Return ChildConfigSalesOrder objects filtered by the OetbConfAllocQtyToShip column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfallocqtytoship(string|array<string> $OetbConfAllocQtyToShip) Return ChildConfigSalesOrder objects filtered by the OetbConfAllocQtyToShip column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfoverallocqts(string|array<string> $OetbConfOverAllocQts) Return ChildConfigSalesOrder objects filtered by the OetbConfOverAllocQts column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfoverallocqts(string|array<string> $OetbConfOverAllocQts) Return ChildConfigSalesOrder objects filtered by the OetbConfOverAllocQts column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3completelotbin(string|array<string> $OetbCon3CompleteLotBin) Return ChildConfigSalesOrder objects filtered by the OetbCon3CompleteLotBin column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3completelotbin(string|array<string> $OetbCon3CompleteLotBin) Return ChildConfigSalesOrder objects filtered by the OetbCon3CompleteLotBin column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3rqtsopt(string|array<string> $OetbCon3RqtsOpt) Return ChildConfigSalesOrder objects filtered by the OetbCon3RqtsOpt column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3rqtsopt(string|array<string> $OetbCon3RqtsOpt) Return ChildConfigSalesOrder objects filtered by the OetbCon3RqtsOpt column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2shipcomphold(int|array<int> $OetbCon2ShipCompHold) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShipCompHold column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2shipcomphold(int|array<int> $OetbCon2ShipCompHold) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShipCompHold column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3usesaleforecast(string|array<string> $OetbCon3UseSaleForecast) Return ChildConfigSalesOrder objects filtered by the OetbCon3UseSaleForecast column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3usesaleforecast(string|array<string> $OetbCon3UseSaleForecast) Return ChildConfigSalesOrder objects filtered by the OetbCon3UseSaleForecast column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfverfstopneg(string|array<string> $OetbConfVerfStopNeg) Return ChildConfigSalesOrder objects filtered by the OetbConfVerfStopNeg column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfverfstopneg(string|array<string> $OetbConfVerfStopNeg) Return ChildConfigSalesOrder objects filtered by the OetbConfVerfStopNeg column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfverfaudtrept(string|array<string> $OetbConfVerfAudtRept) Return ChildConfigSalesOrder objects filtered by the OetbConfVerfAudtRept column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfverfaudtrept(string|array<string> $OetbConfVerfAudtRept) Return ChildConfigSalesOrder objects filtered by the OetbConfVerfAudtRept column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfagelevldisp(string|array<string> $OetbConfAgeLevlDisp) Return ChildConfigSalesOrder objects filtered by the OetbConfAgeLevlDisp column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfagelevldisp(string|array<string> $OetbConfAgeLevlDisp) Return ChildConfigSalesOrder objects filtered by the OetbConfAgeLevlDisp column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfagealltime(string|array<string> $OetbConfAgeAllTime) Return ChildConfigSalesOrder objects filtered by the OetbConfAgeAllTime column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfagealltime(string|array<string> $OetbConfAgeAllTime) Return ChildConfigSalesOrder objects filtered by the OetbConfAgeAllTime column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfageathold(string|array<string> $OetbConfAgeAtHold) Return ChildConfigSalesOrder objects filtered by the OetbConfAgeAtHold column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfageathold(string|array<string> $OetbConfAgeAtHold) Return ChildConfigSalesOrder objects filtered by the OetbConfAgeAtHold column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfshowatlevl(string|array<string> $OetbConfShowAtLevl) Return ChildConfigSalesOrder objects filtered by the OetbConfShowAtLevl column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfshowatlevl(string|array<string> $OetbConfShowAtLevl) Return ChildConfigSalesOrder objects filtered by the OetbConfShowAtLevl column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfshowitem(string|array<string> $OetbConfShowItem) Return ChildConfigSalesOrder objects filtered by the OetbConfShowItem column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfshowitem(string|array<string> $OetbConfShowItem) Return ChildConfigSalesOrder objects filtered by the OetbConfShowItem column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfstoppnt(string|array<string> $OetbConfStopPnt) Return ChildConfigSalesOrder objects filtered by the OetbConfStopPnt column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfstoppnt(string|array<string> $OetbConfStopPnt) Return ChildConfigSalesOrder objects filtered by the OetbConfStopPnt column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfpricwind(string|array<string> $OetbConfPricWind) Return ChildConfigSalesOrder objects filtered by the OetbConfPricWind column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfpricwind(string|array<string> $OetbConfPricWind) Return ChildConfigSalesOrder objects filtered by the OetbConfPricWind column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfshowcost(string|array<string> $OetbConfShowCost) Return ChildConfigSalesOrder objects filtered by the OetbConfShowCost column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfshowcost(string|array<string> $OetbConfShowCost) Return ChildConfigSalesOrder objects filtered by the OetbConfShowCost column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfcosttouse(string|array<string> $OetbConfCostToUse) Return ChildConfigSalesOrder objects filtered by the OetbConfCostToUse column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfcosttouse(string|array<string> $OetbConfCostToUse) Return ChildConfigSalesOrder objects filtered by the OetbConfCostToUse column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfshowmarg(string|array<string> $OetbConfShowMarg) Return ChildConfigSalesOrder objects filtered by the OetbConfShowMarg column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfshowmarg(string|array<string> $OetbConfShowMarg) Return ChildConfigSalesOrder objects filtered by the OetbConfShowMarg column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconffxoe(string|array<string> $OetbConfFxOe) Return ChildConfigSalesOrder objects filtered by the OetbConfFxOe column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconffxoe(string|array<string> $OetbConfFxOe) Return ChildConfigSalesOrder objects filtered by the OetbConfFxOe column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconffxinv(string|array<string> $OetbConfFxInv) Return ChildConfigSalesOrder objects filtered by the OetbConfFxInv column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconffxinv(string|array<string> $OetbConfFxInv) Return ChildConfigSalesOrder objects filtered by the OetbConfFxInv column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdispvia(string|array<string> $OetbConfDispVia) Return ChildConfigSalesOrder objects filtered by the OetbConfDispVia column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdispvia(string|array<string> $OetbConfDispVia) Return ChildConfigSalesOrder objects filtered by the OetbConfDispVia column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdispcaseqty(string|array<string> $OetbConfDispCaseQty) Return ChildConfigSalesOrder objects filtered by the OetbConfDispCaseQty column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdispcaseqty(string|array<string> $OetbConfDispCaseQty) Return ChildConfigSalesOrder objects filtered by the OetbConfDispCaseQty column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconffrtin(string|array<string> $OetbConfFrtIn) Return ChildConfigSalesOrder objects filtered by the OetbConfFrtIn column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconffrtin(string|array<string> $OetbConfFrtIn) Return ChildConfigSalesOrder objects filtered by the OetbConfFrtIn column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconffrtinglacct(string|array<string> $OetbConfFrtInGlAcct) Return ChildConfigSalesOrder objects filtered by the OetbConfFrtInGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconffrtinglacct(string|array<string> $OetbConfFrtInGlAcct) Return ChildConfigSalesOrder objects filtered by the OetbConfFrtInGlAcct column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfmincharge(string|array<string> $OetbConfMinCharge) Return ChildConfigSalesOrder objects filtered by the OetbConfMinCharge column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfmincharge(string|array<string> $OetbConfMinCharge) Return ChildConfigSalesOrder objects filtered by the OetbConfMinCharge column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfminchrgglacct(string|array<string> $OetbConfMinChrgGlAcct) Return ChildConfigSalesOrder objects filtered by the OetbConfMinChrgGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfminchrgglacct(string|array<string> $OetbConfMinChrgGlAcct) Return ChildConfigSalesOrder objects filtered by the OetbConfMinChrgGlAcct column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdropshipchrg(string|array<string> $OetbConfDropShipChrg) Return ChildConfigSalesOrder objects filtered by the OetbConfDropShipChrg column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdropshipchrg(string|array<string> $OetbConfDropShipChrg) Return ChildConfigSalesOrder objects filtered by the OetbConfDropShipChrg column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdropshpglacct(string|array<string> $OetbConfDropShpGlAcct) Return ChildConfigSalesOrder objects filtered by the OetbConfDropShpGlAcct column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdropshpglacct(string|array<string> $OetbConfDropShpGlAcct) Return ChildConfigSalesOrder objects filtered by the OetbConfDropShpGlAcct column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfnontaxcustcode(string|array<string> $OetbConfNonTaxCustCode) Return ChildConfigSalesOrder objects filtered by the OetbConfNonTaxCustCode column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfnontaxcustcode(string|array<string> $OetbConfNonTaxCustCode) Return ChildConfigSalesOrder objects filtered by the OetbConfNonTaxCustCode column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfhstaxid(string|array<string> $OetbConfHsTaxId) Return ChildConfigSalesOrder objects filtered by the OetbConfHsTaxId column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfhstaxid(string|array<string> $OetbConfHsTaxId) Return ChildConfigSalesOrder objects filtered by the OetbConfHsTaxId column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfhsfrtid(string|array<string> $OetbConfHsFrtId) Return ChildConfigSalesOrder objects filtered by the OetbConfHsFrtId column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfhsfrtid(string|array<string> $OetbConfHsFrtId) Return ChildConfigSalesOrder objects filtered by the OetbConfHsFrtId column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfhsmiscid(string|array<string> $OetbConfHsMiscId) Return ChildConfigSalesOrder objects filtered by the OetbConfHsMiscId column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfhsmiscid(string|array<string> $OetbConfHsMiscId) Return ChildConfigSalesOrder objects filtered by the OetbConfHsMiscId column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2hscusdid(string|array<string> $OetbCon2HsCusdId) Return ChildConfigSalesOrder objects filtered by the OetbCon2HsCusdId column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2hscusdid(string|array<string> $OetbCon2HsCusdId) Return ChildConfigSalesOrder objects filtered by the OetbCon2HsCusdId column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3hsfrtinid(string|array<string> $OetbCon3HsFrtInId) Return ChildConfigSalesOrder objects filtered by the OetbCon3HsFrtInId column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3hsfrtinid(string|array<string> $OetbCon3HsFrtInId) Return ChildConfigSalesOrder objects filtered by the OetbCon3HsFrtInId column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3hsdropid(string|array<string> $OetbCon3HsDropId) Return ChildConfigSalesOrder objects filtered by the OetbCon3HsDropId column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3hsdropid(string|array<string> $OetbCon3HsDropId) Return ChildConfigSalesOrder objects filtered by the OetbCon3HsDropId column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3hsminordid(string|array<string> $OetbCon3HsMinordId) Return ChildConfigSalesOrder objects filtered by the OetbCon3HsMinordId column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3hsminordid(string|array<string> $OetbCon3HsMinordId) Return ChildConfigSalesOrder objects filtered by the OetbCon3HsMinordId column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfheadgetdef(string|array<string> $OetbConfHeadGetDef) Return ChildConfigSalesOrder objects filtered by the OetbConfHeadGetDef column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfheadgetdef(string|array<string> $OetbConfHeadGetDef) Return ChildConfigSalesOrder objects filtered by the OetbConfHeadGetDef column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfitemgetdef(string|array<string> $OetbConfItemGetDef) Return ChildConfigSalesOrder objects filtered by the OetbConfItemGetDef column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfitemgetdef(string|array<string> $OetbConfItemGetDef) Return ChildConfigSalesOrder objects filtered by the OetbConfItemGetDef column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfautogetcust(string|array<string> $OetbConfAutoGetCust) Return ChildConfigSalesOrder objects filtered by the OetbConfAutoGetCust column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfautogetcust(string|array<string> $OetbConfAutoGetCust) Return ChildConfigSalesOrder objects filtered by the OetbConfAutoGetCust column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3autogetitem(string|array<string> $OetbCon3AutoGetItem) Return ChildConfigSalesOrder objects filtered by the OetbCon3AutoGetItem column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3autogetitem(string|array<string> $OetbCon3AutoGetItem) Return ChildConfigSalesOrder objects filtered by the OetbCon3AutoGetItem column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfrqstheaddtl(string|array<string> $OetbConfRqstHeadDtl) Return ChildConfigSalesOrder objects filtered by the OetbConfRqstHeadDtl column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfrqstheaddtl(string|array<string> $OetbConfRqstHeadDtl) Return ChildConfigSalesOrder objects filtered by the OetbConfRqstHeadDtl column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfcancheaddtl(string|array<string> $OetbConfCancHeadDtl) Return ChildConfigSalesOrder objects filtered by the OetbConfCancHeadDtl column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfcancheaddtl(string|array<string> $OetbConfCancHeadDtl) Return ChildConfigSalesOrder objects filtered by the OetbConfCancHeadDtl column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfuseinvcasship(string|array<string> $OetbConfUseInvcAsShip) Return ChildConfigSalesOrder objects filtered by the OetbConfUseInvcAsShip column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfuseinvcasship(string|array<string> $OetbConfUseInvcAsShip) Return ChildConfigSalesOrder objects filtered by the OetbConfUseInvcAsShip column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3usearrvdate(string|array<string> $OetbCon3UseArrvDate) Return ChildConfigSalesOrder objects filtered by the OetbCon3UseArrvDate column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3usearrvdate(string|array<string> $OetbCon3UseArrvDate) Return ChildConfigSalesOrder objects filtered by the OetbCon3UseArrvDate column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfseparatecred(string|array<string> $OetbConfSeparateCred) Return ChildConfigSalesOrder objects filtered by the OetbConfSeparateCred column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfseparatecred(string|array<string> $OetbConfSeparateCred) Return ChildConfigSalesOrder objects filtered by the OetbConfSeparateCred column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3applycredits(string|array<string> $OetbCon3ApplyCredits) Return ChildConfigSalesOrder objects filtered by the OetbCon3ApplyCredits column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3applycredits(string|array<string> $OetbCon3ApplyCredits) Return ChildConfigSalesOrder objects filtered by the OetbCon3ApplyCredits column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfwarnnotnew(string|array<string> $OetbConfWarnNotNew) Return ChildConfigSalesOrder objects filtered by the OetbConfWarnNotNew column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfwarnnotnew(string|array<string> $OetbConfWarnNotNew) Return ChildConfigSalesOrder objects filtered by the OetbConfWarnNotNew column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfwarnbotozero(string|array<string> $OetbConfWarnBoToZero) Return ChildConfigSalesOrder objects filtered by the OetbConfWarnBoToZero column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfwarnbotozero(string|array<string> $OetbConfWarnBoToZero) Return ChildConfigSalesOrder objects filtered by the OetbConfWarnBoToZero column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2providerouting(string|array<string> $OetbCon2ProvideRouting) Return ChildConfigSalesOrder objects filtered by the OetbCon2ProvideRouting column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2providerouting(string|array<string> $OetbCon2ProvideRouting) Return ChildConfigSalesOrder objects filtered by the OetbCon2ProvideRouting column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2srtrtbyrqstdte(string|array<string> $OetbCon2SrtRtByRqstDte) Return ChildConfigSalesOrder objects filtered by the OetbCon2SrtRtByRqstDte column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2srtrtbyrqstdte(string|array<string> $OetbCon2SrtRtByRqstDte) Return ChildConfigSalesOrder objects filtered by the OetbCon2SrtRtByRqstDte column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfusesoreview(string|array<string> $OetbConfUseSoReview) Return ChildConfigSalesOrder objects filtered by the OetbConfUseSoReview column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfusesoreview(string|array<string> $OetbConfUseSoReview) Return ChildConfigSalesOrder objects filtered by the OetbConfUseSoReview column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfpicknotedef(string|array<string> $OetbConfPickNoteDef) Return ChildConfigSalesOrder objects filtered by the OetbConfPickNoteDef column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfpicknotedef(string|array<string> $OetbConfPickNoteDef) Return ChildConfigSalesOrder objects filtered by the OetbConfPickNoteDef column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfpacknotedef(string|array<string> $OetbConfPackNoteDef) Return ChildConfigSalesOrder objects filtered by the OetbConfPackNoteDef column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfpacknotedef(string|array<string> $OetbConfPackNoteDef) Return ChildConfigSalesOrder objects filtered by the OetbConfPackNoteDef column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfpicksort(string|array<string> $OetbConfPickSort) Return ChildConfigSalesOrder objects filtered by the OetbConfPickSort column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfpicksort(string|array<string> $OetbConfPickSort) Return ChildConfigSalesOrder objects filtered by the OetbConfPickSort column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfpacksort(string|array<string> $OetbConfPackSort) Return ChildConfigSalesOrder objects filtered by the OetbConfPackSort column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfpacksort(string|array<string> $OetbConfPackSort) Return ChildConfigSalesOrder objects filtered by the OetbConfPackSort column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfprtpriconly(string|array<string> $OetbConfPrtPricOnly) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtPricOnly column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfprtpriconly(string|array<string> $OetbConfPrtPricOnly) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtPricOnly column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfprtneg(string|array<string> $OetbConfPrtNeg) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtNeg column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfprtneg(string|array<string> $OetbConfPrtNeg) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtNeg column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2prtpackageinfo(string|array<string> $OetbCon2PrtPackageInfo) Return ChildConfigSalesOrder objects filtered by the OetbCon2PrtPackageInfo column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2prtpackageinfo(string|array<string> $OetbCon2PrtPackageInfo) Return ChildConfigSalesOrder objects filtered by the OetbCon2PrtPackageInfo column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2innerpacklabel(string|array<string> $OetbCon2InnerPackLabel) Return ChildConfigSalesOrder objects filtered by the OetbCon2InnerPackLabel column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2innerpacklabel(string|array<string> $OetbCon2InnerPackLabel) Return ChildConfigSalesOrder objects filtered by the OetbCon2InnerPackLabel column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2outerpacklabel(string|array<string> $OetbCon2OuterPackLabel) Return ChildConfigSalesOrder objects filtered by the OetbCon2OuterPackLabel column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2outerpacklabel(string|array<string> $OetbCon2OuterPackLabel) Return ChildConfigSalesOrder objects filtered by the OetbCon2OuterPackLabel column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2shiptarelabel(string|array<string> $OetbCon2ShipTareLabel) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShipTareLabel column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2shiptarelabel(string|array<string> $OetbCon2ShipTareLabel) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShipTareLabel column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfprtpick(string|array<string> $OetbConfPrtPick) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtPick column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfprtpick(string|array<string> $OetbConfPrtPick) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtPick column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfpicprioseq(string|array<string> $OetbConfPicPrioSeq) Return ChildConfigSalesOrder objects filtered by the OetbConfPicPrioSeq column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfpicprioseq(string|array<string> $OetbConfPicPrioSeq) Return ChildConfigSalesOrder objects filtered by the OetbConfPicPrioSeq column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfprtpack(string|array<string> $OetbConfPrtPack) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtPack column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfprtpack(string|array<string> $OetbConfPrtPack) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtPack column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfprtinv(string|array<string> $OetbConfPrtInv) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtInv column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfprtinv(string|array<string> $OetbConfPrtInv) Return ChildConfigSalesOrder objects filtered by the OetbConfPrtInv column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2prtcredmemo(string|array<string> $OetbCon2PrtCredMemo) Return ChildConfigSalesOrder objects filtered by the OetbCon2PrtCredMemo column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2prtcredmemo(string|array<string> $OetbCon2PrtCredMemo) Return ChildConfigSalesOrder objects filtered by the OetbCon2PrtCredMemo column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfcrntdate(string|array<string> $OetbConfCrntDate) Return ChildConfigSalesOrder objects filtered by the OetbConfCrntDate column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfcrntdate(string|array<string> $OetbConfCrntDate) Return ChildConfigSalesOrder objects filtered by the OetbConfCrntDate column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfmarkpicked(string|array<string> $OetbConfMarkPicked) Return ChildConfigSalesOrder objects filtered by the OetbConfMarkPicked column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfmarkpicked(string|array<string> $OetbConfMarkPicked) Return ChildConfigSalesOrder objects filtered by the OetbConfMarkPicked column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfshowunavail(string|array<string> $OetbConfShowUnavail) Return ChildConfigSalesOrder objects filtered by the OetbConfShowUnavail column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfshowunavail(string|array<string> $OetbConfShowUnavail) Return ChildConfigSalesOrder objects filtered by the OetbConfShowUnavail column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdecplaces(int|array<int> $OetbConfDecPlaces) Return ChildConfigSalesOrder objects filtered by the OetbConfDecPlaces column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdecplaces(int|array<int> $OetbConfDecPlaces) Return ChildConfigSalesOrder objects filtered by the OetbConfDecPlaces column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfwarndup(string|array<string> $OetbConfWarnDup) Return ChildConfigSalesOrder objects filtered by the OetbConfWarnDup column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfwarndup(string|array<string> $OetbConfWarnDup) Return ChildConfigSalesOrder objects filtered by the OetbConfWarnDup column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdefpick(string|array<string> $OetbConfDefPick) Return ChildConfigSalesOrder objects filtered by the OetbConfDefPick column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdefpick(string|array<string> $OetbConfDefPick) Return ChildConfigSalesOrder objects filtered by the OetbConfDefPick column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdefpack(string|array<string> $OetbConfDefPack) Return ChildConfigSalesOrder objects filtered by the OetbConfDefPack column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdefpack(string|array<string> $OetbConfDefPack) Return ChildConfigSalesOrder objects filtered by the OetbConfDefPack column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdefinvc(string|array<string> $OetbConfDefInvc) Return ChildConfigSalesOrder objects filtered by the OetbConfDefInvc column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdefinvc(string|array<string> $OetbConfDefInvc) Return ChildConfigSalesOrder objects filtered by the OetbConfDefInvc column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdefack(string|array<string> $OetbConfDefAck) Return ChildConfigSalesOrder objects filtered by the OetbConfDefAck column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdefack(string|array<string> $OetbConfDefAck) Return ChildConfigSalesOrder objects filtered by the OetbConfDefAck column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfacksortopt(string|array<string> $OetbConfAckSortOpt) Return ChildConfigSalesOrder objects filtered by the OetbConfAckSortOpt column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfacksortopt(string|array<string> $OetbConfAckSortOpt) Return ChildConfigSalesOrder objects filtered by the OetbConfAckSortOpt column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfreleasenbr(string|array<string> $OetbConfReleaseNbr) Return ChildConfigSalesOrder objects filtered by the OetbConfReleaseNbr column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfreleasenbr(string|array<string> $OetbConfReleaseNbr) Return ChildConfigSalesOrder objects filtered by the OetbConfReleaseNbr column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfpodetlinenbr(string|array<string> $OetbConfPoDetLineNbr) Return ChildConfigSalesOrder objects filtered by the OetbConfPoDetLineNbr column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfpodetlinenbr(string|array<string> $OetbConfPoDetLineNbr) Return ChildConfigSalesOrder objects filtered by the OetbConfPoDetLineNbr column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdetlinebinnbr(string|array<string> $OetbConfDetLineBinNbr) Return ChildConfigSalesOrder objects filtered by the OetbConfDetLineBinNbr column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdetlinebinnbr(string|array<string> $OetbConfDetLineBinNbr) Return ChildConfigSalesOrder objects filtered by the OetbConfDetLineBinNbr column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfsplitbywhse(string|array<string> $OetbConfSplitByWhse) Return ChildConfigSalesOrder objects filtered by the OetbConfSplitByWhse column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfsplitbywhse(string|array<string> $OetbConfSplitByWhse) Return ChildConfigSalesOrder objects filtered by the OetbConfSplitByWhse column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3allowmultwhse(string|array<string> $OetbCon3AllowMultWhse) Return ChildConfigSalesOrder objects filtered by the OetbCon3AllowMultWhse column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3allowmultwhse(string|array<string> $OetbCon3AllowMultWhse) Return ChildConfigSalesOrder objects filtered by the OetbCon3AllowMultWhse column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfuseorigwhse(string|array<string> $OetbConfUseOrigWhse) Return ChildConfigSalesOrder objects filtered by the OetbConfUseOrigWhse column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfuseorigwhse(string|array<string> $OetbConfUseOrigWhse) Return ChildConfigSalesOrder objects filtered by the OetbConfUseOrigWhse column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfuseesosingle(string|array<string> $OetbConfUseEsoSingle) Return ChildConfigSalesOrder objects filtered by the OetbConfUseEsoSingle column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfuseesosingle(string|array<string> $OetbConfUseEsoSingle) Return ChildConfigSalesOrder objects filtered by the OetbConfUseEsoSingle column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfcreatepo(string|array<string> $OetbConfCreatePo) Return ChildConfigSalesOrder objects filtered by the OetbConfCreatePo column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfcreatepo(string|array<string> $OetbConfCreatePo) Return ChildConfigSalesOrder objects filtered by the OetbConfCreatePo column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfbestprice(string|array<string> $OetbConfBestPrice) Return ChildConfigSalesOrder objects filtered by the OetbConfBestPrice column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfbestprice(string|array<string> $OetbConfBestPrice) Return ChildConfigSalesOrder objects filtered by the OetbConfBestPrice column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfesobacktonew(string|array<string> $OetbConfEsoBackToNew) Return ChildConfigSalesOrder objects filtered by the OetbConfEsoBackToNew column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfesobacktonew(string|array<string> $OetbConfEsoBackToNew) Return ChildConfigSalesOrder objects filtered by the OetbConfEsoBackToNew column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfpickprintdrop(string|array<string> $OetbConfPickPrintDrop) Return ChildConfigSalesOrder objects filtered by the OetbConfPickPrintDrop column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfpickprintdrop(string|array<string> $OetbConfPickPrintDrop) Return ChildConfigSalesOrder objects filtered by the OetbConfPickPrintDrop column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfwarnmultpo(string|array<string> $OetbConfWarnMultPo) Return ChildConfigSalesOrder objects filtered by the OetbConfWarnMultPo column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfwarnmultpo(string|array<string> $OetbConfWarnMultPo) Return ChildConfigSalesOrder objects filtered by the OetbConfWarnMultPo column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfalertitemquote(string|array<string> $OetbConfAlertItemQuote) Return ChildConfigSalesOrder objects filtered by the OetbConfAlertItemQuote column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfalertitemquote(string|array<string> $OetbConfAlertItemQuote) Return ChildConfigSalesOrder objects filtered by the OetbConfAlertItemQuote column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3askchgprcwqty(string|array<string> $OetbCon3AskChgPrcWQty) Return ChildConfigSalesOrder objects filtered by the OetbCon3AskChgPrcWQty column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3askchgprcwqty(string|array<string> $OetbCon3AskChgPrcWQty) Return ChildConfigSalesOrder objects filtered by the OetbCon3AskChgPrcWQty column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3tenqtybrks(string|array<string> $OetbCon3TenQtyBrks) Return ChildConfigSalesOrder objects filtered by the OetbCon3TenQtyBrks column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3tenqtybrks(string|array<string> $OetbCon3TenQtyBrks) Return ChildConfigSalesOrder objects filtered by the OetbCon3TenQtyBrks column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdecordrpric(int|array<int> $OetbConfDecOrdrPric) Return ChildConfigSalesOrder objects filtered by the OetbConfDecOrdrPric column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdecordrpric(int|array<int> $OetbConfDecOrdrPric) Return ChildConfigSalesOrder objects filtered by the OetbConfDecOrdrPric column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2provlostsales(string|array<string> $OetbCon2ProvLostSales) Return ChildConfigSalesOrder objects filtered by the OetbCon2ProvLostSales column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2provlostsales(string|array<string> $OetbCon2ProvLostSales) Return ChildConfigSalesOrder objects filtered by the OetbCon2ProvLostSales column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2askreasoncode(string|array<string> $OetbCon2AskReasonCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2AskReasonCode column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2askreasoncode(string|array<string> $OetbCon2AskReasonCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2AskReasonCode column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2defreasoncode(string|array<string> $OetbCon2DefReasonCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefReasonCode column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2defreasoncode(string|array<string> $OetbCon2DefReasonCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefReasonCode column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2bordcntl(string|array<string> $OetbCon2BordCntl) Return ChildConfigSalesOrder objects filtered by the OetbCon2BordCntl column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2bordcntl(string|array<string> $OetbCon2BordCntl) Return ChildConfigSalesOrder objects filtered by the OetbCon2BordCntl column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2defreabocode(string|array<string> $OetbCon2DefReaBoCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefReaBoCode column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2defreabocode(string|array<string> $OetbCon2DefReaBoCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefReaBoCode column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2numdayssavls(int|array<int> $OetbCon2NumDaysSavLs) Return ChildConfigSalesOrder objects filtered by the OetbCon2NumDaysSavLs column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2numdayssavls(int|array<int> $OetbCon2NumDaysSavLs) Return ChildConfigSalesOrder objects filtered by the OetbCon2NumDaysSavLs column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2callbacknotif(string|array<string> $OetbCon2CallBackNotif) Return ChildConfigSalesOrder objects filtered by the OetbCon2CallBackNotif column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2callbacknotif(string|array<string> $OetbCon2CallBackNotif) Return ChildConfigSalesOrder objects filtered by the OetbCon2CallBackNotif column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2defdayswhenin(int|array<int> $OetbCon2DefDaysWhenIn) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefDaysWhenIn column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2defdayswhenin(int|array<int> $OetbCon2DefDaysWhenIn) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefDaysWhenIn column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2addsubsls(string|array<string> $OetbCon2AddSubsLs) Return ChildConfigSalesOrder objects filtered by the OetbCon2AddSubsLs column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2addsubsls(string|array<string> $OetbCon2AddSubsLs) Return ChildConfigSalesOrder objects filtered by the OetbCon2AddSubsLs column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2defreasubscode(string|array<string> $OetbCon2DefReaSubsCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefReaSubsCode column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2defreasubscode(string|array<string> $OetbCon2DefReaSubsCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefReaSubsCode column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2ordtypnorm(string|array<string> $OetbCon2OrdTypNorm) Return ChildConfigSalesOrder objects filtered by the OetbCon2OrdTypNorm column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2ordtypnorm(string|array<string> $OetbCon2OrdTypNorm) Return ChildConfigSalesOrder objects filtered by the OetbCon2OrdTypNorm column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2ordtyprep(string|array<string> $OetbCon2OrdTypRep) Return ChildConfigSalesOrder objects filtered by the OetbCon2OrdTypRep column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2ordtyprep(string|array<string> $OetbCon2OrdTypRep) Return ChildConfigSalesOrder objects filtered by the OetbCon2OrdTypRep column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2ordtypserv(string|array<string> $OetbCon2OrdTypServ) Return ChildConfigSalesOrder objects filtered by the OetbCon2OrdTypServ column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2ordtypserv(string|array<string> $OetbCon2OrdTypServ) Return ChildConfigSalesOrder objects filtered by the OetbCon2OrdTypServ column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2defordtyp(string|array<string> $OetbCon2DefOrdTyp) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefOrdTyp column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2defordtyp(string|array<string> $OetbCon2DefOrdTyp) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefOrdTyp column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfchgpric(string|array<string> $OetbConfChgPric) Return ChildConfigSalesOrder objects filtered by the OetbConfChgPric column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfchgpric(string|array<string> $OetbConfChgPric) Return ChildConfigSalesOrder objects filtered by the OetbConfChgPric column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2spordpricezero(string|array<string> $OetbCon2SpordPriceZero) Return ChildConfigSalesOrder objects filtered by the OetbCon2SpordPriceZero column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2spordpricezero(string|array<string> $OetbCon2SpordPriceZero) Return ChildConfigSalesOrder objects filtered by the OetbCon2SpordPriceZero column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfinactpricezero(string|array<string> $OetbConfInactPriceZero) Return ChildConfigSalesOrder objects filtered by the OetbConfInactPriceZero column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfinactpricezero(string|array<string> $OetbConfInactPriceZero) Return ChildConfigSalesOrder objects filtered by the OetbConfInactPriceZero column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2reseq(string|array<string> $OetbCon2Reseq) Return ChildConfigSalesOrder objects filtered by the OetbCon2Reseq column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2reseq(string|array<string> $OetbCon2Reseq) Return ChildConfigSalesOrder objects filtered by the OetbCon2Reseq column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2reseqby(string|array<string> $OetbCon2ReseqBy) Return ChildConfigSalesOrder objects filtered by the OetbCon2ReseqBy column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2reseqby(string|array<string> $OetbCon2ReseqBy) Return ChildConfigSalesOrder objects filtered by the OetbCon2ReseqBy column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2minqtysales(string|array<string> $OetbCon2MinQtySales) Return ChildConfigSalesOrder objects filtered by the OetbCon2MinQtySales column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2minqtysales(string|array<string> $OetbCon2MinQtySales) Return ChildConfigSalesOrder objects filtered by the OetbCon2MinQtySales column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2chgorder(string|array<string> $OetbCon2ChgOrder) Return ChildConfigSalesOrder objects filtered by the OetbCon2ChgOrder column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2chgorder(string|array<string> $OetbCon2ChgOrder) Return ChildConfigSalesOrder objects filtered by the OetbCon2ChgOrder column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2vercomp(string|array<string> $OetbCon2VerComp) Return ChildConfigSalesOrder objects filtered by the OetbCon2VerComp column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2vercomp(string|array<string> $OetbCon2VerComp) Return ChildConfigSalesOrder objects filtered by the OetbCon2VerComp column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2prtinv(string|array<string> $OetbCon2PrtInv) Return ChildConfigSalesOrder objects filtered by the OetbCon2PrtInv column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2prtinv(string|array<string> $OetbCon2PrtInv) Return ChildConfigSalesOrder objects filtered by the OetbCon2PrtInv column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2dynamicpicktick(string|array<string> $OetbCon2DynamicPickTick) Return ChildConfigSalesOrder objects filtered by the OetbCon2DynamicPickTick column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2dynamicpicktick(string|array<string> $OetbCon2DynamicPickTick) Return ChildConfigSalesOrder objects filtered by the OetbCon2DynamicPickTick column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2dynamicinvoice(string|array<string> $OetbCon2DynamicInvoice) Return ChildConfigSalesOrder objects filtered by the OetbCon2DynamicInvoice column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2dynamicinvoice(string|array<string> $OetbCon2DynamicInvoice) Return ChildConfigSalesOrder objects filtered by the OetbCon2DynamicInvoice column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2edidefinvoice(string|array<string> $OetbCon2EdiDefInvoice) Return ChildConfigSalesOrder objects filtered by the OetbCon2EdiDefInvoice column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2edidefinvoice(string|array<string> $OetbCon2EdiDefInvoice) Return ChildConfigSalesOrder objects filtered by the OetbCon2EdiDefInvoice column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2allowccpick(string|array<string> $OetbCon2AllowCcPick) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowCcPick column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2allowccpick(string|array<string> $OetbCon2AllowCcPick) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowCcPick column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2autoccwind(string|array<string> $OetbCon2AutoCcWind) Return ChildConfigSalesOrder objects filtered by the OetbCon2AutoCcWind column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2autoccwind(string|array<string> $OetbCon2AutoCcWind) Return ChildConfigSalesOrder objects filtered by the OetbCon2AutoCcWind column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2autoccupdate(string|array<string> $OetbCon2AutoCcUpdate) Return ChildConfigSalesOrder objects filtered by the OetbCon2AutoCcUpdate column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2autoccupdate(string|array<string> $OetbCon2AutoCcUpdate) Return ChildConfigSalesOrder objects filtered by the OetbCon2AutoCcUpdate column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2allowapvdccchg(string|array<string> $OetbCon2AllowApvdCcChg) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowApvdCcChg column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2allowapvdccchg(string|array<string> $OetbCon2AllowApvdCcChg) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowApvdCcChg column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3apvdbckordclear(string|array<string> $OetbCon3ApvdBckordClear) Return ChildConfigSalesOrder objects filtered by the OetbCon3ApvdBckordClear column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3apvdbckordclear(string|array<string> $OetbCon3ApvdBckordClear) Return ChildConfigSalesOrder objects filtered by the OetbCon3ApvdBckordClear column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2polwhichcost(string|array<string> $OetbCon2PolWhichCost) Return ChildConfigSalesOrder objects filtered by the OetbCon2PolWhichCost column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2polwhichcost(string|array<string> $OetbCon2PolWhichCost) Return ChildConfigSalesOrder objects filtered by the OetbCon2PolWhichCost column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2revhazard(string|array<string> $OetbCon2RevHazard) Return ChildConfigSalesOrder objects filtered by the OetbCon2RevHazard column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2revhazard(string|array<string> $OetbCon2RevHazard) Return ChildConfigSalesOrder objects filtered by the OetbCon2RevHazard column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2showdisclist(string|array<string> $OetbCon2ShowDiscList) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShowDiscList column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2showdisclist(string|array<string> $OetbCon2ShowDiscList) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShowDiscList column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2chglist(string|array<string> $OetbCon2ChgList) Return ChildConfigSalesOrder objects filtered by the OetbCon2ChgList column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2chglist(string|array<string> $OetbCon2ChgList) Return ChildConfigSalesOrder objects filtered by the OetbCon2ChgList column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2maillist(string|array<string> $OetbCon2MailList) Return ChildConfigSalesOrder objects filtered by the OetbCon2MailList column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2maillist(string|array<string> $OetbCon2MailList) Return ChildConfigSalesOrder objects filtered by the OetbCon2MailList column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2nameformat(string|array<string> $OetbCon2NameFormat) Return ChildConfigSalesOrder objects filtered by the OetbCon2NameFormat column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2nameformat(string|array<string> $OetbCon2NameFormat) Return ChildConfigSalesOrder objects filtered by the OetbCon2NameFormat column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2mailidtype(string|array<string> $OetbCon2MailIdType) Return ChildConfigSalesOrder objects filtered by the OetbCon2MailIdType column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2mailidtype(string|array<string> $OetbCon2MailIdType) Return ChildConfigSalesOrder objects filtered by the OetbCon2MailIdType column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2cashdrawerpswd(string|array<string> $OetbCon2CashDrawerPswd) Return ChildConfigSalesOrder objects filtered by the OetbCon2CashDrawerPswd column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2cashdrawerpswd(string|array<string> $OetbCon2CashDrawerPswd) Return ChildConfigSalesOrder objects filtered by the OetbCon2CashDrawerPswd column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2upsonline(string|array<string> $OetbCon2UpsOnline) Return ChildConfigSalesOrder objects filtered by the OetbCon2UpsOnline column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2upsonline(string|array<string> $OetbCon2UpsOnline) Return ChildConfigSalesOrder objects filtered by the OetbCon2UpsOnline column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2picorver(string|array<string> $OetbCon2PicOrVer) Return ChildConfigSalesOrder objects filtered by the OetbCon2PicOrVer column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2picorver(string|array<string> $OetbCon2PicOrVer) Return ChildConfigSalesOrder objects filtered by the OetbCon2PicOrVer column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2combback(string|array<string> $OetbCon2CombBack) Return ChildConfigSalesOrder objects filtered by the OetbCon2CombBack column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2combback(string|array<string> $OetbCon2CombBack) Return ChildConfigSalesOrder objects filtered by the OetbCon2CombBack column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2frtallowamt(int|array<int> $OetbCon2FrtAllowAmt) Return ChildConfigSalesOrder objects filtered by the OetbCon2FrtAllowAmt column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2frtallowamt(int|array<int> $OetbCon2FrtAllowAmt) Return ChildConfigSalesOrder objects filtered by the OetbCon2FrtAllowAmt column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3shipmoreordered(string|array<string> $OetbCon3ShipMoreOrdered) Return ChildConfigSalesOrder objects filtered by the OetbCon3ShipMoreOrdered column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3shipmoreordered(string|array<string> $OetbCon3ShipMoreOrdered) Return ChildConfigSalesOrder objects filtered by the OetbCon3ShipMoreOrdered column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3warnshipmore(string|array<string> $OetbCon3WarnShipMore) Return ChildConfigSalesOrder objects filtered by the OetbCon3WarnShipMore column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3warnshipmore(string|array<string> $OetbCon3WarnShipMore) Return ChildConfigSalesOrder objects filtered by the OetbCon3WarnShipMore column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3proformafromeso(string|array<string> $OetbCon3ProformaFromEso) Return ChildConfigSalesOrder objects filtered by the OetbCon3ProformaFromEso column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3proformafromeso(string|array<string> $OetbCon3ProformaFromEso) Return ChildConfigSalesOrder objects filtered by the OetbCon3ProformaFromEso column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3pickpackcode(string|array<string> $OetbCon3PickPackCode) Return ChildConfigSalesOrder objects filtered by the OetbCon3PickPackCode column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3pickpackcode(string|array<string> $OetbCon3PickPackCode) Return ChildConfigSalesOrder objects filtered by the OetbCon3PickPackCode column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2usedept(string|array<string> $OetbCon2UseDept) Return ChildConfigSalesOrder objects filtered by the OetbCon2UseDept column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2usedept(string|array<string> $OetbCon2UseDept) Return ChildConfigSalesOrder objects filtered by the OetbCon2UseDept column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2usedivision(string|array<string> $OetbCon2UseDivision) Return ChildConfigSalesOrder objects filtered by the OetbCon2UseDivision column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2usedivision(string|array<string> $OetbCon2UseDivision) Return ChildConfigSalesOrder objects filtered by the OetbCon2UseDivision column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2defmfecode(string|array<string> $OetbCon2DefMfeCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefMfeCode column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2defmfecode(string|array<string> $OetbCon2DefMfeCode) Return ChildConfigSalesOrder objects filtered by the OetbCon2DefMfeCode column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2showavgcost(string|array<string> $OetbCon2ShowAvgCost) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShowAvgCost column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2showavgcost(string|array<string> $OetbCon2ShowAvgCost) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShowAvgCost column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2fedex(string|array<string> $OetbCon2FedEx) Return ChildConfigSalesOrder objects filtered by the OetbCon2FedEx column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2fedex(string|array<string> $OetbCon2FedEx) Return ChildConfigSalesOrder objects filtered by the OetbCon2FedEx column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3deffrghtgrup(string|array<string> $OetbCon3DefFrghtGrup) Return ChildConfigSalesOrder objects filtered by the OetbCon3DefFrghtGrup column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3deffrghtgrup(string|array<string> $OetbCon3DefFrghtGrup) Return ChildConfigSalesOrder objects filtered by the OetbCon3DefFrghtGrup column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3upsmysqldbname(string|array<string> $OetbCon3UpsMysqlDbname) Return ChildConfigSalesOrder objects filtered by the OetbCon3UpsMysqlDbname column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3upsmysqldbname(string|array<string> $OetbCon3UpsMysqlDbname) Return ChildConfigSalesOrder objects filtered by the OetbCon3UpsMysqlDbname column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfuseoptcode(string|array<string> $OetbConfUseOptCode) Return ChildConfigSalesOrder objects filtered by the OetbConfUseOptCode column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfuseoptcode(string|array<string> $OetbConfUseOptCode) Return ChildConfigSalesOrder objects filtered by the OetbConfUseOptCode column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfscn4opt(string|array<string> $OetbConfScn4Opt) Return ChildConfigSalesOrder objects filtered by the OetbConfScn4Opt column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfscn4opt(string|array<string> $OetbConfScn4Opt) Return ChildConfigSalesOrder objects filtered by the OetbConfScn4Opt column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2takenbyuse(string|array<string> $OetbCon2TakenByUse) Return ChildConfigSalesOrder objects filtered by the OetbCon2TakenByUse column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2takenbyuse(string|array<string> $OetbCon2TakenByUse) Return ChildConfigSalesOrder objects filtered by the OetbCon2TakenByUse column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2takenbylogin(string|array<string> $OetbCon2TakenByLogin) Return ChildConfigSalesOrder objects filtered by the OetbCon2TakenByLogin column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2takenbylogin(string|array<string> $OetbCon2TakenByLogin) Return ChildConfigSalesOrder objects filtered by the OetbCon2TakenByLogin column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2takenbyforce(string|array<string> $OetbCon2TakenByForce) Return ChildConfigSalesOrder objects filtered by the OetbCon2TakenByForce column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2takenbyforce(string|array<string> $OetbCon2TakenByForce) Return ChildConfigSalesOrder objects filtered by the OetbCon2TakenByForce column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2pickedbyuse(string|array<string> $OetbCon2PickedByUse) Return ChildConfigSalesOrder objects filtered by the OetbCon2PickedByUse column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2pickedbyuse(string|array<string> $OetbCon2PickedByUse) Return ChildConfigSalesOrder objects filtered by the OetbCon2PickedByUse column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2pickedbyforce(string|array<string> $OetbCon2PickedByForce) Return ChildConfigSalesOrder objects filtered by the OetbCon2PickedByForce column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2pickedbyforce(string|array<string> $OetbCon2PickedByForce) Return ChildConfigSalesOrder objects filtered by the OetbCon2PickedByForce column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2pickedbyproc(string|array<string> $OetbCon2PickedByProc) Return ChildConfigSalesOrder objects filtered by the OetbCon2PickedByProc column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2pickedbyproc(string|array<string> $OetbCon2PickedByProc) Return ChildConfigSalesOrder objects filtered by the OetbCon2PickedByProc column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2packedbyuse(string|array<string> $OetbCon2PackedByUse) Return ChildConfigSalesOrder objects filtered by the OetbCon2PackedByUse column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2packedbyuse(string|array<string> $OetbCon2PackedByUse) Return ChildConfigSalesOrder objects filtered by the OetbCon2PackedByUse column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2packedbyforce(string|array<string> $OetbCon2PackedByForce) Return ChildConfigSalesOrder objects filtered by the OetbCon2PackedByForce column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2packedbyforce(string|array<string> $OetbCon2PackedByForce) Return ChildConfigSalesOrder objects filtered by the OetbCon2PackedByForce column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2verifiedbyuse(string|array<string> $OetbCon2VerifiedByUse) Return ChildConfigSalesOrder objects filtered by the OetbCon2VerifiedByUse column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2verifiedbyuse(string|array<string> $OetbCon2VerifiedByUse) Return ChildConfigSalesOrder objects filtered by the OetbCon2VerifiedByUse column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2verifiedbylogin(string|array<string> $OetbCon2VerifiedByLogin) Return ChildConfigSalesOrder objects filtered by the OetbCon2VerifiedByLogin column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2verifiedbylogin(string|array<string> $OetbCon2VerifiedByLogin) Return ChildConfigSalesOrder objects filtered by the OetbCon2VerifiedByLogin column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2verifiedbyforce(string|array<string> $OetbCon2VerifiedByForce) Return ChildConfigSalesOrder objects filtered by the OetbCon2VerifiedByForce column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2verifiedbyforce(string|array<string> $OetbCon2VerifiedByForce) Return ChildConfigSalesOrder objects filtered by the OetbCon2VerifiedByForce column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfoptlabl1(string|array<string> $OetbConfOptLabl1) Return ChildConfigSalesOrder objects filtered by the OetbConfOptLabl1 column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfoptlabl1(string|array<string> $OetbConfOptLabl1) Return ChildConfigSalesOrder objects filtered by the OetbConfOptLabl1 column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2ucode1force(string|array<string> $OetbCon2Ucode1Force) Return ChildConfigSalesOrder objects filtered by the OetbCon2Ucode1Force column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2ucode1force(string|array<string> $OetbCon2Ucode1Force) Return ChildConfigSalesOrder objects filtered by the OetbCon2Ucode1Force column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfoptlabl2(string|array<string> $OetbConfOptLabl2) Return ChildConfigSalesOrder objects filtered by the OetbConfOptLabl2 column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfoptlabl2(string|array<string> $OetbConfOptLabl2) Return ChildConfigSalesOrder objects filtered by the OetbConfOptLabl2 column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2ucode2force(string|array<string> $OetbCon2Ucode2Force) Return ChildConfigSalesOrder objects filtered by the OetbCon2Ucode2Force column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2ucode2force(string|array<string> $OetbCon2Ucode2Force) Return ChildConfigSalesOrder objects filtered by the OetbCon2Ucode2Force column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfoptlabl3(string|array<string> $OetbConfOptLabl3) Return ChildConfigSalesOrder objects filtered by the OetbConfOptLabl3 column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfoptlabl3(string|array<string> $OetbConfOptLabl3) Return ChildConfigSalesOrder objects filtered by the OetbConfOptLabl3 column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2ucode3force(string|array<string> $OetbCon2Ucode3Force) Return ChildConfigSalesOrder objects filtered by the OetbCon2Ucode3Force column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2ucode3force(string|array<string> $OetbCon2Ucode3Force) Return ChildConfigSalesOrder objects filtered by the OetbCon2Ucode3Force column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfoptlabl4(string|array<string> $OetbConfOptLabl4) Return ChildConfigSalesOrder objects filtered by the OetbConfOptLabl4 column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfoptlabl4(string|array<string> $OetbConfOptLabl4) Return ChildConfigSalesOrder objects filtered by the OetbConfOptLabl4 column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2ucode4force(string|array<string> $OetbCon2Ucode4Force) Return ChildConfigSalesOrder objects filtered by the OetbCon2Ucode4Force column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2ucode4force(string|array<string> $OetbCon2Ucode4Force) Return ChildConfigSalesOrder objects filtered by the OetbCon2Ucode4Force column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfverifyafterpack(string|array<string> $OetbConfVerifyAfterPack) Return ChildConfigSalesOrder objects filtered by the OetbConfVerifyAfterPack column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfverifyafterpack(string|array<string> $OetbConfVerifyAfterPack) Return ChildConfigSalesOrder objects filtered by the OetbConfVerifyAfterPack column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfhistyrsback(int|array<int> $OetbConfHistYrsBack) Return ChildConfigSalesOrder objects filtered by the OetbConfHistYrsBack column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfhistyrsback(int|array<int> $OetbConfHistYrsBack) Return ChildConfigSalesOrder objects filtered by the OetbConfHistYrsBack column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfrqstcatlg(string|array<string> $OetbConfRqstCatlg) Return ChildConfigSalesOrder objects filtered by the OetbConfRqstCatlg column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfrqstcatlg(string|array<string> $OetbConfRqstCatlg) Return ChildConfigSalesOrder objects filtered by the OetbConfRqstCatlg column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2conpick(string|array<string> $OetbCon2ConPick) Return ChildConfigSalesOrder objects filtered by the OetbCon2ConPick column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2conpick(string|array<string> $OetbCon2ConPick) Return ChildConfigSalesOrder objects filtered by the OetbCon2ConPick column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2allowpick(string|array<string> $OetbCon2AllowPick) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowPick column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2allowpick(string|array<string> $OetbCon2AllowPick) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowPick column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2combinesame(string|array<string> $OetbCon2CombineSame) Return ChildConfigSalesOrder objects filtered by the OetbCon2CombineSame column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2combinesame(string|array<string> $OetbCon2CombineSame) Return ChildConfigSalesOrder objects filtered by the OetbCon2CombineSame column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3autovernitems(string|array<string> $OetbCon3AutoVerNItems) Return ChildConfigSalesOrder objects filtered by the OetbCon3AutoVerNItems column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3autovernitems(string|array<string> $OetbCon3AutoVerNItems) Return ChildConfigSalesOrder objects filtered by the OetbCon3AutoVerNItems column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2allowzeroqty(string|array<string> $OetbCon2AllowZeroQty) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowZeroQty column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2allowzeroqty(string|array<string> $OetbCon2AllowZeroQty) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowZeroQty column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2allowinvalidwhse(string|array<string> $OetbCon2AllowInvalidWhse) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowInvalidWhse column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2allowinvalidwhse(string|array<string> $OetbCon2AllowInvalidWhse) Return ChildConfigSalesOrder objects filtered by the OetbCon2AllowInvalidWhse column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2showediinfo(string|array<string> $OetbCon2ShowEdiInfo) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShowEdiInfo column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2showediinfo(string|array<string> $OetbCon2ShowEdiInfo) Return ChildConfigSalesOrder objects filtered by the OetbCon2ShowEdiInfo column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3esoshowquotlink(string|array<string> $OetbCon3EsoShowQuotLink) Return ChildConfigSalesOrder objects filtered by the OetbCon3EsoShowQuotLink column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3esoshowquotlink(string|array<string> $OetbCon3EsoShowQuotLink) Return ChildConfigSalesOrder objects filtered by the OetbCon3EsoShowQuotLink column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3esoshowwiplink(string|array<string> $OetbCon3EsoShowWipLink) Return ChildConfigSalesOrder objects filtered by the OetbCon3EsoShowWipLink column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3esoshowwiplink(string|array<string> $OetbCon3EsoShowWipLink) Return ChildConfigSalesOrder objects filtered by the OetbCon3EsoShowWipLink column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2addonsales(string|array<string> $OetbCon2AddOnSales) Return ChildConfigSalesOrder objects filtered by the OetbCon2AddOnSales column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2addonsales(string|array<string> $OetbCon2AddOnSales) Return ChildConfigSalesOrder objects filtered by the OetbCon2AddOnSales column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2forcedbkord(string|array<string> $OetbCon2ForcedBkord) Return ChildConfigSalesOrder objects filtered by the OetbCon2ForcedBkord column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2forcedbkord(string|array<string> $OetbCon2ForcedBkord) Return ChildConfigSalesOrder objects filtered by the OetbCon2ForcedBkord column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2updtprcdisc(string|array<string> $OetbCon2UpdtPrcDisc) Return ChildConfigSalesOrder objects filtered by the OetbCon2UpdtPrcDisc column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2updtprcdisc(string|array<string> $OetbCon2UpdtPrcDisc) Return ChildConfigSalesOrder objects filtered by the OetbCon2UpdtPrcDisc column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2autopack(string|array<string> $OetbCon2AutoPack) Return ChildConfigSalesOrder objects filtered by the OetbCon2AutoPack column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2autopack(string|array<string> $OetbCon2AutoPack) Return ChildConfigSalesOrder objects filtered by the OetbCon2AutoPack column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2pickboprtzqts(string|array<string> $OetbCon2PickBoPrtZqts) Return ChildConfigSalesOrder objects filtered by the OetbCon2PickBoPrtZqts column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2pickboprtzqts(string|array<string> $OetbCon2PickBoPrtZqts) Return ChildConfigSalesOrder objects filtered by the OetbCon2PickBoPrtZqts column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3pick00noship(string|array<string> $OetbCon3Pick00NoShip) Return ChildConfigSalesOrder objects filtered by the OetbCon3Pick00NoShip column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3pick00noship(string|array<string> $OetbCon3Pick00NoShip) Return ChildConfigSalesOrder objects filtered by the OetbCon3Pick00NoShip column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2standordlead(string|array<string> $OetbCon2StandOrdLead) Return ChildConfigSalesOrder objects filtered by the OetbCon2StandOrdLead column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2standordlead(string|array<string> $OetbCon2StandOrdLead) Return ChildConfigSalesOrder objects filtered by the OetbCon2StandOrdLead column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2standordamnt(int|array<int> $OetbCon2StandOrdAmnt) Return ChildConfigSalesOrder objects filtered by the OetbCon2StandOrdAmnt column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2standordamnt(int|array<int> $OetbCon2StandOrdAmnt) Return ChildConfigSalesOrder objects filtered by the OetbCon2StandOrdAmnt column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2inactitemcntrl(string|array<string> $OetbCon2InactItemCntrl) Return ChildConfigSalesOrder objects filtered by the OetbCon2InactItemCntrl column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2inactitemcntrl(string|array<string> $OetbCon2InactItemCntrl) Return ChildConfigSalesOrder objects filtered by the OetbCon2InactItemCntrl column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon2useitemref(string|array<string> $OetbCon2UseItemRef) Return ChildConfigSalesOrder objects filtered by the OetbCon2UseItemRef column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon2useitemref(string|array<string> $OetbCon2UseItemRef) Return ChildConfigSalesOrder objects filtered by the OetbCon2UseItemRef column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3upsnaftarecords(string|array<string> $OetbCon3UpsNaftaRecords) Return ChildConfigSalesOrder objects filtered by the OetbCon3UpsNaftaRecords column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3upsnaftarecords(string|array<string> $OetbCon3UpsNaftaRecords) Return ChildConfigSalesOrder objects filtered by the OetbCon3UpsNaftaRecords column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3soplotlikenorm(string|array<string> $OetbCon3SopLotLikeNorm) Return ChildConfigSalesOrder objects filtered by the OetbCon3SopLotLikeNorm column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3soplotlikenorm(string|array<string> $OetbCon3SopLotLikeNorm) Return ChildConfigSalesOrder objects filtered by the OetbCon3SopLotLikeNorm column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdfltshipwhse(string|array<string> $OetbConfDfltShipWhse) Return ChildConfigSalesOrder objects filtered by the OetbConfDfltShipWhse column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdfltshipwhse(string|array<string> $OetbConfDfltShipWhse) Return ChildConfigSalesOrder objects filtered by the OetbConfDfltShipWhse column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfdfltorigwhse(string|array<string> $OetbConfDfltOrigWhse) Return ChildConfigSalesOrder objects filtered by the OetbConfDfltOrigWhse column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfdfltorigwhse(string|array<string> $OetbConfDfltOrigWhse) Return ChildConfigSalesOrder objects filtered by the OetbConfDfltOrigWhse column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfinvcwithpack(string|array<string> $OetbConfInvcWithPack) Return ChildConfigSalesOrder objects filtered by the OetbConfInvcWithPack column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfinvcwithpack(string|array<string> $OetbConfInvcWithPack) Return ChildConfigSalesOrder objects filtered by the OetbConfInvcWithPack column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfcarrycntrqty(string|array<string> $OetbConfCarryCntrQty) Return ChildConfigSalesOrder objects filtered by the OetbConfCarryCntrQty column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfcarrycntrqty(string|array<string> $OetbConfCarryCntrQty) Return ChildConfigSalesOrder objects filtered by the OetbConfCarryCntrQty column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3useordras(string|array<string> $OetbCon3UseOrdrAs) Return ChildConfigSalesOrder objects filtered by the OetbCon3UseOrdrAs column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3useordras(string|array<string> $OetbCon3UseOrdrAs) Return ChildConfigSalesOrder objects filtered by the OetbCon3UseOrdrAs column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbconfuseordrsource(string|array<string> $OetbConfUseOrdrSource) Return ChildConfigSalesOrder objects filtered by the OetbConfUseOrdrSource column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbconfuseordrsource(string|array<string> $OetbConfUseOrdrSource) Return ChildConfigSalesOrder objects filtered by the OetbConfUseOrdrSource column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3ccprocessor(string|array<string> $OetbCon3CcProcessor) Return ChildConfigSalesOrder objects filtered by the OetbCon3CcProcessor column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3ccprocessor(string|array<string> $OetbCon3CcProcessor) Return ChildConfigSalesOrder objects filtered by the OetbCon3CcProcessor column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3creditcardcap(string|array<string> $OetbCon3CreditCardCap) Return ChildConfigSalesOrder objects filtered by the OetbCon3CreditCardCap column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3creditcardcap(string|array<string> $OetbCon3CreditCardCap) Return ChildConfigSalesOrder objects filtered by the OetbCon3CreditCardCap column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3keyorcccap(string|array<string> $OetbCon3KeyOrCcCap) Return ChildConfigSalesOrder objects filtered by the OetbCon3KeyOrCcCap column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3keyorcccap(string|array<string> $OetbCon3KeyOrCcCap) Return ChildConfigSalesOrder objects filtered by the OetbCon3KeyOrCcCap column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3ccxoverlay(string|array<string> $OetbCon3CcXOverlay) Return ChildConfigSalesOrder objects filtered by the OetbCon3CcXOverlay column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3ccxoverlay(string|array<string> $OetbCon3CcXOverlay) Return ChildConfigSalesOrder objects filtered by the OetbCon3CcXOverlay column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3cctimeout(int|array<int> $OetbCon3CcTimeOut) Return ChildConfigSalesOrder objects filtered by the OetbCon3CcTimeOut column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3cctimeout(int|array<int> $OetbCon3CcTimeOut) Return ChildConfigSalesOrder objects filtered by the OetbCon3CcTimeOut column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3signaturecapture(string|array<string> $OetbCon3SignatureCapture) Return ChildConfigSalesOrder objects filtered by the OetbCon3SignatureCapture column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3signaturecapture(string|array<string> $OetbCon3SignatureCapture) Return ChildConfigSalesOrder objects filtered by the OetbCon3SignatureCapture column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3ccpreapproval(string|array<string> $OetbCon3CcPreapproval) Return ChildConfigSalesOrder objects filtered by the OetbCon3CcPreapproval column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3ccpreapproval(string|array<string> $OetbCon3CcPreapproval) Return ChildConfigSalesOrder objects filtered by the OetbCon3CcPreapproval column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3forceccnbrentry(string|array<string> $OetbCon3ForceCcNbrEntry) Return ChildConfigSalesOrder objects filtered by the OetbCon3ForceCcNbrEntry column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3forceccnbrentry(string|array<string> $OetbCon3ForceCcNbrEntry) Return ChildConfigSalesOrder objects filtered by the OetbCon3ForceCcNbrEntry column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3intritemnotes(string|array<string> $OetbCon3IntrItemNotes) Return ChildConfigSalesOrder objects filtered by the OetbCon3IntrItemNotes column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3intritemnotes(string|array<string> $OetbCon3IntrItemNotes) Return ChildConfigSalesOrder objects filtered by the OetbCon3IntrItemNotes column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3mtrcert(string|array<string> $OetbCon3MtrCert) Return ChildConfigSalesOrder objects filtered by the OetbCon3MtrCert column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3mtrcert(string|array<string> $OetbCon3MtrCert) Return ChildConfigSalesOrder objects filtered by the OetbCon3MtrCert column
 * @method     ChildConfigSalesOrder[]|Collection findByOetbcon3cofccert(string|array<string> $OetbCon3CofcCert) Return ChildConfigSalesOrder objects filtered by the OetbCon3CofcCert column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByOetbcon3cofccert(string|array<string> $OetbCon3CofcCert) Return ChildConfigSalesOrder objects filtered by the OetbCon3CofcCert column
 * @method     ChildConfigSalesOrder[]|Collection findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigSalesOrder objects filtered by the DateUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByDateupdtd(string|array<string> $DateUpdtd) Return ChildConfigSalesOrder objects filtered by the DateUpdtd column
 * @method     ChildConfigSalesOrder[]|Collection findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigSalesOrder objects filtered by the TimeUpdtd column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByTimeupdtd(string|array<string> $TimeUpdtd) Return ChildConfigSalesOrder objects filtered by the TimeUpdtd column
 * @method     ChildConfigSalesOrder[]|Collection findByDummy(string|array<string> $dummy) Return ChildConfigSalesOrder objects filtered by the dummy column
 * @psalm-method Collection&\Traversable<ChildConfigSalesOrder> findByDummy(string|array<string> $dummy) Return ChildConfigSalesOrder objects filtered by the dummy column
 *
 * @method     ChildConfigSalesOrder[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildConfigSalesOrder> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class ConfigSalesOrderQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\ConfigSalesOrderQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\ConfigSalesOrder', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildConfigSalesOrderQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildConfigSalesOrderQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
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
    public function findPk($key, ?ConnectionInterface $con = null)
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildConfigSalesOrder A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT OetbConfKey, OetbConfGlIfac, OetbConfInIfac, OetbConfRelIvty, OetbConfUseOrdrNbr, OetbConfDefRqstDate, OetbConfUseCancDate, OetbConfShowSp, OetbConfJrnlSort, OetbConfUsePrepSoOpt, OetbConfDispBillTo, OetbConfSlctFlm, OetbCon3UseStockPull, OetbConfQtyToShip, OetbConfQtyToShipDef, OetbConfDfltOrdrQty, OetbConfAllocQtyToShip, OetbConfOverAllocQts, OetbCon3CompleteLotBin, OetbCon3RqtsOpt, OetbCon2ShipCompHold, OetbCon3UseSaleForecast, OetbConfVerfStopNeg, OetbConfVerfAudtRept, OetbConfAgeLevlDisp, OetbConfAgeAllTime, OetbConfAgeAtHold, OetbConfShowAtLevl, OetbConfShowItem, OetbConfStopPnt, OetbConfPricWind, OetbConfShowCost, OetbConfCostToUse, OetbConfShowMarg, OetbConfFxOe, OetbConfFxInv, OetbConfDispVia, OetbConfDispCaseQty, OetbConfFrtIn, OetbConfFrtInGlAcct, OetbConfMinCharge, OetbConfMinChrgGlAcct, OetbConfDropShipChrg, OetbConfDropShpGlAcct, OetbConfNonTaxCustCode, OetbConfHsTaxId, OetbConfHsFrtId, OetbConfHsMiscId, OetbCon2HsCusdId, OetbCon3HsFrtInId, OetbCon3HsDropId, OetbCon3HsMinordId, OetbConfHeadGetDef, OetbConfItemGetDef, OetbConfAutoGetCust, OetbCon3AutoGetItem, OetbConfRqstHeadDtl, OetbConfCancHeadDtl, OetbConfUseInvcAsShip, OetbCon3UseArrvDate, OetbConfSeparateCred, OetbCon3ApplyCredits, OetbConfWarnNotNew, OetbConfWarnBoToZero, OetbCon2ProvideRouting, OetbCon2SrtRtByRqstDte, OetbConfUseSoReview, OetbConfPickNoteDef, OetbConfPackNoteDef, OetbConfPickSort, OetbConfPackSort, OetbConfPrtPricOnly, OetbConfPrtNeg, OetbCon2PrtPackageInfo, OetbCon2InnerPackLabel, OetbCon2OuterPackLabel, OetbCon2ShipTareLabel, OetbConfPrtPick, OetbConfPicPrioSeq, OetbConfPrtPack, OetbConfPrtInv, OetbCon2PrtCredMemo, OetbConfCrntDate, OetbConfMarkPicked, OetbConfShowUnavail, OetbConfDecPlaces, OetbConfWarnDup, OetbConfDefPick, OetbConfDefPack, OetbConfDefInvc, OetbConfDefAck, OetbConfAckSortOpt, OetbConfReleaseNbr, OetbConfPoDetLineNbr, OetbConfDetLineBinNbr, OetbConfSplitByWhse, OetbCon3AllowMultWhse, OetbConfUseOrigWhse, OetbConfUseEsoSingle, OetbConfCreatePo, OetbConfBestPrice, OetbConfEsoBackToNew, OetbConfPickPrintDrop, OetbConfWarnMultPo, OetbConfAlertItemQuote, OetbCon3AskChgPrcWQty, OetbCon3TenQtyBrks, OetbConfDecOrdrPric, OetbCon2ProvLostSales, OetbCon2AskReasonCode, OetbCon2DefReasonCode, OetbCon2BordCntl, OetbCon2DefReaBoCode, OetbCon2NumDaysSavLs, OetbCon2CallBackNotif, OetbCon2DefDaysWhenIn, OetbCon2AddSubsLs, OetbCon2DefReaSubsCode, OetbCon2OrdTypNorm, OetbCon2OrdTypRep, OetbCon2OrdTypServ, OetbCon2DefOrdTyp, OetbConfChgPric, OetbCon2SpordPriceZero, OetbConfInactPriceZero, OetbCon2Reseq, OetbCon2ReseqBy, OetbCon2MinQtySales, OetbCon2ChgOrder, OetbCon2VerComp, OetbCon2PrtInv, OetbCon2DynamicPickTick, OetbCon2DynamicInvoice, OetbCon2EdiDefInvoice, OetbCon2AllowCcPick, OetbCon2AutoCcWind, OetbCon2AutoCcUpdate, OetbCon2AllowApvdCcChg, OetbCon3ApvdBckordClear, OetbCon2PolWhichCost, OetbCon2RevHazard, OetbCon2ShowDiscList, OetbCon2ChgList, OetbCon2MailList, OetbCon2NameFormat, OetbCon2MailIdType, OetbCon2CashDrawerPswd, OetbCon2UpsOnline, OetbCon2PicOrVer, OetbCon2CombBack, OetbCon2FrtAllowAmt, OetbCon3ShipMoreOrdered, OetbCon3WarnShipMore, OetbCon3ProformaFromEso, OetbCon3PickPackCode, OetbCon2UseDept, OetbCon2UseDivision, OetbCon2DefMfeCode, OetbCon2ShowAvgCost, OetbCon2FedEx, OetbCon3DefFrghtGrup, OetbCon3UpsMysqlDbname, OetbConfUseOptCode, OetbConfScn4Opt, OetbCon2TakenByUse, OetbCon2TakenByLogin, OetbCon2TakenByForce, OetbCon2PickedByUse, OetbCon2PickedByForce, OetbCon2PickedByProc, OetbCon2PackedByUse, OetbCon2PackedByForce, OetbCon2VerifiedByUse, OetbCon2VerifiedByLogin, OetbCon2VerifiedByForce, OetbConfOptLabl1, OetbCon2Ucode1Force, OetbConfOptLabl2, OetbCon2Ucode2Force, OetbConfOptLabl3, OetbCon2Ucode3Force, OetbConfOptLabl4, OetbCon2Ucode4Force, OetbConfVerifyAfterPack, OetbConfHistYrsBack, OetbConfRqstCatlg, OetbCon2ConPick, OetbCon2AllowPick, OetbCon2CombineSame, OetbCon3AutoVerNItems, OetbCon2AllowZeroQty, OetbCon2AllowInvalidWhse, OetbCon2ShowEdiInfo, OetbCon3EsoShowQuotLink, OetbCon3EsoShowWipLink, OetbCon2AddOnSales, OetbCon2ForcedBkord, OetbCon2UpdtPrcDisc, OetbCon2AutoPack, OetbCon2PickBoPrtZqts, OetbCon3Pick00NoShip, OetbCon2StandOrdLead, OetbCon2StandOrdAmnt, OetbCon2InactItemCntrl, OetbCon2UseItemRef, OetbCon3UpsNaftaRecords, OetbCon3SopLotLikeNorm, OetbConfDfltShipWhse, OetbConfDfltOrigWhse, OetbConfInvcWithPack, OetbConfCarryCntrQty, OetbCon3UseOrdrAs, OetbConfUseOrdrSource, OetbCon3CcProcessor, OetbCon3CreditCardCap, OetbCon3KeyOrCcCap, OetbCon3CcXOverlay, OetbCon3CcTimeOut, OetbCon3SignatureCapture, OetbCon3CcPreapproval, OetbCon3ForceCcNbrEntry, OetbCon3IntrItemNotes, OetbCon3MtrCert, OetbCon3CofcCert, DateUpdtd, TimeUpdtd, dummy FROM so_config WHERE OetbConfKey = :p0';
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
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFKEY, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFKEY, $keys, Criteria::IN);

        return $this;
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
     * @param mixed $oetbconfkey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfkey($oetbconfkey = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFKEY, $oetbconfkey, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfGlIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfglifac('fooValue');   // WHERE OetbConfGlIfac = 'fooValue'
     * $query->filterByOetbconfglifac('%fooValue%', Criteria::LIKE); // WHERE OetbConfGlIfac LIKE '%fooValue%'
     * $query->filterByOetbconfglifac(['foo', 'bar']); // WHERE OetbConfGlIfac IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfglifac The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfglifac($oetbconfglifac = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfglifac)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFGLIFAC, $oetbconfglifac, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfInIfac column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfinifac('fooValue');   // WHERE OetbConfInIfac = 'fooValue'
     * $query->filterByOetbconfinifac('%fooValue%', Criteria::LIKE); // WHERE OetbConfInIfac LIKE '%fooValue%'
     * $query->filterByOetbconfinifac(['foo', 'bar']); // WHERE OetbConfInIfac IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfinifac The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfinifac($oetbconfinifac = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfinifac)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFINIFAC, $oetbconfinifac, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfRelIvty column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfrelivty('fooValue');   // WHERE OetbConfRelIvty = 'fooValue'
     * $query->filterByOetbconfrelivty('%fooValue%', Criteria::LIKE); // WHERE OetbConfRelIvty LIKE '%fooValue%'
     * $query->filterByOetbconfrelivty(['foo', 'bar']); // WHERE OetbConfRelIvty IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfrelivty The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfrelivty($oetbconfrelivty = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfrelivty)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFRELIVTY, $oetbconfrelivty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfUseOrdrNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseordrnbr('fooValue');   // WHERE OetbConfUseOrdrNbr = 'fooValue'
     * $query->filterByOetbconfuseordrnbr('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseOrdrNbr LIKE '%fooValue%'
     * $query->filterByOetbconfuseordrnbr(['foo', 'bar']); // WHERE OetbConfUseOrdrNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfuseordrnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfuseordrnbr($oetbconfuseordrnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseordrnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRNBR, $oetbconfuseordrnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfDefRqstDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdefrqstdate('fooValue');   // WHERE OetbConfDefRqstDate = 'fooValue'
     * $query->filterByOetbconfdefrqstdate('%fooValue%', Criteria::LIKE); // WHERE OetbConfDefRqstDate LIKE '%fooValue%'
     * $query->filterByOetbconfdefrqstdate(['foo', 'bar']); // WHERE OetbConfDefRqstDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfdefrqstdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdefrqstdate($oetbconfdefrqstdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdefrqstdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDEFRQSTDATE, $oetbconfdefrqstdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfUseCancDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfusecancdate('fooValue');   // WHERE OetbConfUseCancDate = 'fooValue'
     * $query->filterByOetbconfusecancdate('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseCancDate LIKE '%fooValue%'
     * $query->filterByOetbconfusecancdate(['foo', 'bar']); // WHERE OetbConfUseCancDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfusecancdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfusecancdate($oetbconfusecancdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfusecancdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSECANCDATE, $oetbconfusecancdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfShowSp column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfshowsp('fooValue');   // WHERE OetbConfShowSp = 'fooValue'
     * $query->filterByOetbconfshowsp('%fooValue%', Criteria::LIKE); // WHERE OetbConfShowSp LIKE '%fooValue%'
     * $query->filterByOetbconfshowsp(['foo', 'bar']); // WHERE OetbConfShowSp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfshowsp The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfshowsp($oetbconfshowsp = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfshowsp)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSHOWSP, $oetbconfshowsp, $comparison);

        return $this;
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
     * @param mixed $oetbconfjrnlsort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfjrnlsort($oetbconfjrnlsort = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFJRNLSORT, $oetbconfjrnlsort, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfUsePrepSoOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseprepsoopt('fooValue');   // WHERE OetbConfUsePrepSoOpt = 'fooValue'
     * $query->filterByOetbconfuseprepsoopt('%fooValue%', Criteria::LIKE); // WHERE OetbConfUsePrepSoOpt LIKE '%fooValue%'
     * $query->filterByOetbconfuseprepsoopt(['foo', 'bar']); // WHERE OetbConfUsePrepSoOpt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfuseprepsoopt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfuseprepsoopt($oetbconfuseprepsoopt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseprepsoopt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEPREPSOOPT, $oetbconfuseprepsoopt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfDispBillTo column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdispbillto('fooValue');   // WHERE OetbConfDispBillTo = 'fooValue'
     * $query->filterByOetbconfdispbillto('%fooValue%', Criteria::LIKE); // WHERE OetbConfDispBillTo LIKE '%fooValue%'
     * $query->filterByOetbconfdispbillto(['foo', 'bar']); // WHERE OetbConfDispBillTo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfdispbillto The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdispbillto($oetbconfdispbillto = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdispbillto)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDISPBILLTO, $oetbconfdispbillto, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfSlctFlm column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfslctflm('fooValue');   // WHERE OetbConfSlctFlm = 'fooValue'
     * $query->filterByOetbconfslctflm('%fooValue%', Criteria::LIKE); // WHERE OetbConfSlctFlm LIKE '%fooValue%'
     * $query->filterByOetbconfslctflm(['foo', 'bar']); // WHERE OetbConfSlctFlm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfslctflm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfslctflm($oetbconfslctflm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfslctflm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSLCTFLM, $oetbconfslctflm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3UseStockPull column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3usestockpull('fooValue');   // WHERE OetbCon3UseStockPull = 'fooValue'
     * $query->filterByOetbcon3usestockpull('%fooValue%', Criteria::LIKE); // WHERE OetbCon3UseStockPull LIKE '%fooValue%'
     * $query->filterByOetbcon3usestockpull(['foo', 'bar']); // WHERE OetbCon3UseStockPull IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3usestockpull The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3usestockpull($oetbcon3usestockpull = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3usestockpull)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3USESTOCKPULL, $oetbcon3usestockpull, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfQtyToShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfqtytoship('fooValue');   // WHERE OetbConfQtyToShip = 'fooValue'
     * $query->filterByOetbconfqtytoship('%fooValue%', Criteria::LIKE); // WHERE OetbConfQtyToShip LIKE '%fooValue%'
     * $query->filterByOetbconfqtytoship(['foo', 'bar']); // WHERE OetbConfQtyToShip IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfqtytoship The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfqtytoship($oetbconfqtytoship = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfqtytoship)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIP, $oetbconfqtytoship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfQtyToShipDef column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfqtytoshipdef('fooValue');   // WHERE OetbConfQtyToShipDef = 'fooValue'
     * $query->filterByOetbconfqtytoshipdef('%fooValue%', Criteria::LIKE); // WHERE OetbConfQtyToShipDef LIKE '%fooValue%'
     * $query->filterByOetbconfqtytoshipdef(['foo', 'bar']); // WHERE OetbConfQtyToShipDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfqtytoshipdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfqtytoshipdef($oetbconfqtytoshipdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfqtytoshipdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFQTYTOSHIPDEF, $oetbconfqtytoshipdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfDfltOrdrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdfltordrqty('fooValue');   // WHERE OetbConfDfltOrdrQty = 'fooValue'
     * $query->filterByOetbconfdfltordrqty('%fooValue%', Criteria::LIKE); // WHERE OetbConfDfltOrdrQty LIKE '%fooValue%'
     * $query->filterByOetbconfdfltordrqty(['foo', 'bar']); // WHERE OetbConfDfltOrdrQty IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfdfltordrqty The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdfltordrqty($oetbconfdfltordrqty = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdfltordrqty)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDFLTORDRQTY, $oetbconfdfltordrqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfAllocQtyToShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfallocqtytoship('fooValue');   // WHERE OetbConfAllocQtyToShip = 'fooValue'
     * $query->filterByOetbconfallocqtytoship('%fooValue%', Criteria::LIKE); // WHERE OetbConfAllocQtyToShip LIKE '%fooValue%'
     * $query->filterByOetbconfallocqtytoship(['foo', 'bar']); // WHERE OetbConfAllocQtyToShip IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfallocqtytoship The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfallocqtytoship($oetbconfallocqtytoship = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfallocqtytoship)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFALLOCQTYTOSHIP, $oetbconfallocqtytoship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfOverAllocQts column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfoverallocqts('fooValue');   // WHERE OetbConfOverAllocQts = 'fooValue'
     * $query->filterByOetbconfoverallocqts('%fooValue%', Criteria::LIKE); // WHERE OetbConfOverAllocQts LIKE '%fooValue%'
     * $query->filterByOetbconfoverallocqts(['foo', 'bar']); // WHERE OetbConfOverAllocQts IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfoverallocqts The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfoverallocqts($oetbconfoverallocqts = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfoverallocqts)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFOVERALLOCQTS, $oetbconfoverallocqts, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3CompleteLotBin column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3completelotbin('fooValue');   // WHERE OetbCon3CompleteLotBin = 'fooValue'
     * $query->filterByOetbcon3completelotbin('%fooValue%', Criteria::LIKE); // WHERE OetbCon3CompleteLotBin LIKE '%fooValue%'
     * $query->filterByOetbcon3completelotbin(['foo', 'bar']); // WHERE OetbCon3CompleteLotBin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3completelotbin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3completelotbin($oetbcon3completelotbin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3completelotbin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3COMPLETELOTBIN, $oetbcon3completelotbin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3RqtsOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3rqtsopt('fooValue');   // WHERE OetbCon3RqtsOpt = 'fooValue'
     * $query->filterByOetbcon3rqtsopt('%fooValue%', Criteria::LIKE); // WHERE OetbCon3RqtsOpt LIKE '%fooValue%'
     * $query->filterByOetbcon3rqtsopt(['foo', 'bar']); // WHERE OetbCon3RqtsOpt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3rqtsopt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3rqtsopt($oetbcon3rqtsopt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3rqtsopt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3RQTSOPT, $oetbcon3rqtsopt, $comparison);

        return $this;
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
     * @param mixed $oetbcon2shipcomphold The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2shipcomphold($oetbcon2shipcomphold = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SHIPCOMPHOLD, $oetbcon2shipcomphold, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3UseSaleForecast column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3usesaleforecast('fooValue');   // WHERE OetbCon3UseSaleForecast = 'fooValue'
     * $query->filterByOetbcon3usesaleforecast('%fooValue%', Criteria::LIKE); // WHERE OetbCon3UseSaleForecast LIKE '%fooValue%'
     * $query->filterByOetbcon3usesaleforecast(['foo', 'bar']); // WHERE OetbCon3UseSaleForecast IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3usesaleforecast The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3usesaleforecast($oetbcon3usesaleforecast = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3usesaleforecast)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3USESALEFORECAST, $oetbcon3usesaleforecast, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfVerfStopNeg column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfverfstopneg('fooValue');   // WHERE OetbConfVerfStopNeg = 'fooValue'
     * $query->filterByOetbconfverfstopneg('%fooValue%', Criteria::LIKE); // WHERE OetbConfVerfStopNeg LIKE '%fooValue%'
     * $query->filterByOetbconfverfstopneg(['foo', 'bar']); // WHERE OetbConfVerfStopNeg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfverfstopneg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfverfstopneg($oetbconfverfstopneg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfverfstopneg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFVERFSTOPNEG, $oetbconfverfstopneg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfVerfAudtRept column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfverfaudtrept('fooValue');   // WHERE OetbConfVerfAudtRept = 'fooValue'
     * $query->filterByOetbconfverfaudtrept('%fooValue%', Criteria::LIKE); // WHERE OetbConfVerfAudtRept LIKE '%fooValue%'
     * $query->filterByOetbconfverfaudtrept(['foo', 'bar']); // WHERE OetbConfVerfAudtRept IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfverfaudtrept The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfverfaudtrept($oetbconfverfaudtrept = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfverfaudtrept)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFVERFAUDTREPT, $oetbconfverfaudtrept, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfAgeLevlDisp column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfagelevldisp('fooValue');   // WHERE OetbConfAgeLevlDisp = 'fooValue'
     * $query->filterByOetbconfagelevldisp('%fooValue%', Criteria::LIKE); // WHERE OetbConfAgeLevlDisp LIKE '%fooValue%'
     * $query->filterByOetbconfagelevldisp(['foo', 'bar']); // WHERE OetbConfAgeLevlDisp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfagelevldisp The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfagelevldisp($oetbconfagelevldisp = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfagelevldisp)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFAGELEVLDISP, $oetbconfagelevldisp, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfAgeAllTime column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfagealltime('fooValue');   // WHERE OetbConfAgeAllTime = 'fooValue'
     * $query->filterByOetbconfagealltime('%fooValue%', Criteria::LIKE); // WHERE OetbConfAgeAllTime LIKE '%fooValue%'
     * $query->filterByOetbconfagealltime(['foo', 'bar']); // WHERE OetbConfAgeAllTime IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfagealltime The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfagealltime($oetbconfagealltime = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfagealltime)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFAGEALLTIME, $oetbconfagealltime, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfAgeAtHold column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfageathold('fooValue');   // WHERE OetbConfAgeAtHold = 'fooValue'
     * $query->filterByOetbconfageathold('%fooValue%', Criteria::LIKE); // WHERE OetbConfAgeAtHold LIKE '%fooValue%'
     * $query->filterByOetbconfageathold(['foo', 'bar']); // WHERE OetbConfAgeAtHold IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfageathold The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfageathold($oetbconfageathold = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfageathold)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFAGEATHOLD, $oetbconfageathold, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfShowAtLevl column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfshowatlevl('fooValue');   // WHERE OetbConfShowAtLevl = 'fooValue'
     * $query->filterByOetbconfshowatlevl('%fooValue%', Criteria::LIKE); // WHERE OetbConfShowAtLevl LIKE '%fooValue%'
     * $query->filterByOetbconfshowatlevl(['foo', 'bar']); // WHERE OetbConfShowAtLevl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfshowatlevl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfshowatlevl($oetbconfshowatlevl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfshowatlevl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSHOWATLEVL, $oetbconfshowatlevl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfShowItem column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfshowitem('fooValue');   // WHERE OetbConfShowItem = 'fooValue'
     * $query->filterByOetbconfshowitem('%fooValue%', Criteria::LIKE); // WHERE OetbConfShowItem LIKE '%fooValue%'
     * $query->filterByOetbconfshowitem(['foo', 'bar']); // WHERE OetbConfShowItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfshowitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfshowitem($oetbconfshowitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfshowitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSHOWITEM, $oetbconfshowitem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfStopPnt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfstoppnt('fooValue');   // WHERE OetbConfStopPnt = 'fooValue'
     * $query->filterByOetbconfstoppnt('%fooValue%', Criteria::LIKE); // WHERE OetbConfStopPnt LIKE '%fooValue%'
     * $query->filterByOetbconfstoppnt(['foo', 'bar']); // WHERE OetbConfStopPnt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfstoppnt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfstoppnt($oetbconfstoppnt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfstoppnt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSTOPPNT, $oetbconfstoppnt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfPricWind column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpricwind('fooValue');   // WHERE OetbConfPricWind = 'fooValue'
     * $query->filterByOetbconfpricwind('%fooValue%', Criteria::LIKE); // WHERE OetbConfPricWind LIKE '%fooValue%'
     * $query->filterByOetbconfpricwind(['foo', 'bar']); // WHERE OetbConfPricWind IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfpricwind The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfpricwind($oetbconfpricwind = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpricwind)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPRICWIND, $oetbconfpricwind, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfShowCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfshowcost('fooValue');   // WHERE OetbConfShowCost = 'fooValue'
     * $query->filterByOetbconfshowcost('%fooValue%', Criteria::LIKE); // WHERE OetbConfShowCost LIKE '%fooValue%'
     * $query->filterByOetbconfshowcost(['foo', 'bar']); // WHERE OetbConfShowCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfshowcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfshowcost($oetbconfshowcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfshowcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSHOWCOST, $oetbconfshowcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfCostToUse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfcosttouse('fooValue');   // WHERE OetbConfCostToUse = 'fooValue'
     * $query->filterByOetbconfcosttouse('%fooValue%', Criteria::LIKE); // WHERE OetbConfCostToUse LIKE '%fooValue%'
     * $query->filterByOetbconfcosttouse(['foo', 'bar']); // WHERE OetbConfCostToUse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfcosttouse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfcosttouse($oetbconfcosttouse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfcosttouse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFCOSTTOUSE, $oetbconfcosttouse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfShowMarg column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfshowmarg('fooValue');   // WHERE OetbConfShowMarg = 'fooValue'
     * $query->filterByOetbconfshowmarg('%fooValue%', Criteria::LIKE); // WHERE OetbConfShowMarg LIKE '%fooValue%'
     * $query->filterByOetbconfshowmarg(['foo', 'bar']); // WHERE OetbConfShowMarg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfshowmarg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfshowmarg($oetbconfshowmarg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfshowmarg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSHOWMARG, $oetbconfshowmarg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfFxOe column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconffxoe('fooValue');   // WHERE OetbConfFxOe = 'fooValue'
     * $query->filterByOetbconffxoe('%fooValue%', Criteria::LIKE); // WHERE OetbConfFxOe LIKE '%fooValue%'
     * $query->filterByOetbconffxoe(['foo', 'bar']); // WHERE OetbConfFxOe IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconffxoe The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconffxoe($oetbconffxoe = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconffxoe)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFFXOE, $oetbconffxoe, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfFxInv column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconffxinv('fooValue');   // WHERE OetbConfFxInv = 'fooValue'
     * $query->filterByOetbconffxinv('%fooValue%', Criteria::LIKE); // WHERE OetbConfFxInv LIKE '%fooValue%'
     * $query->filterByOetbconffxinv(['foo', 'bar']); // WHERE OetbConfFxInv IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconffxinv The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconffxinv($oetbconffxinv = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconffxinv)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFFXINV, $oetbconffxinv, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfDispVia column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdispvia('fooValue');   // WHERE OetbConfDispVia = 'fooValue'
     * $query->filterByOetbconfdispvia('%fooValue%', Criteria::LIKE); // WHERE OetbConfDispVia LIKE '%fooValue%'
     * $query->filterByOetbconfdispvia(['foo', 'bar']); // WHERE OetbConfDispVia IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfdispvia The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdispvia($oetbconfdispvia = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdispvia)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDISPVIA, $oetbconfdispvia, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfDispCaseQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdispcaseqty('fooValue');   // WHERE OetbConfDispCaseQty = 'fooValue'
     * $query->filterByOetbconfdispcaseqty('%fooValue%', Criteria::LIKE); // WHERE OetbConfDispCaseQty LIKE '%fooValue%'
     * $query->filterByOetbconfdispcaseqty(['foo', 'bar']); // WHERE OetbConfDispCaseQty IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfdispcaseqty The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdispcaseqty($oetbconfdispcaseqty = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdispcaseqty)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDISPCASEQTY, $oetbconfdispcaseqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfFrtIn column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconffrtin('fooValue');   // WHERE OetbConfFrtIn = 'fooValue'
     * $query->filterByOetbconffrtin('%fooValue%', Criteria::LIKE); // WHERE OetbConfFrtIn LIKE '%fooValue%'
     * $query->filterByOetbconffrtin(['foo', 'bar']); // WHERE OetbConfFrtIn IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconffrtin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconffrtin($oetbconffrtin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconffrtin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFFRTIN, $oetbconffrtin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfFrtInGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconffrtinglacct('fooValue');   // WHERE OetbConfFrtInGlAcct = 'fooValue'
     * $query->filterByOetbconffrtinglacct('%fooValue%', Criteria::LIKE); // WHERE OetbConfFrtInGlAcct LIKE '%fooValue%'
     * $query->filterByOetbconffrtinglacct(['foo', 'bar']); // WHERE OetbConfFrtInGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconffrtinglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconffrtinglacct($oetbconffrtinglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconffrtinglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFFRTINGLACCT, $oetbconffrtinglacct, $comparison);

        return $this;
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
     * @param mixed $oetbconfmincharge The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfmincharge($oetbconfmincharge = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFMINCHARGE, $oetbconfmincharge, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfMinChrgGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfminchrgglacct('fooValue');   // WHERE OetbConfMinChrgGlAcct = 'fooValue'
     * $query->filterByOetbconfminchrgglacct('%fooValue%', Criteria::LIKE); // WHERE OetbConfMinChrgGlAcct LIKE '%fooValue%'
     * $query->filterByOetbconfminchrgglacct(['foo', 'bar']); // WHERE OetbConfMinChrgGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfminchrgglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfminchrgglacct($oetbconfminchrgglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfminchrgglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFMINCHRGGLACCT, $oetbconfminchrgglacct, $comparison);

        return $this;
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
     * @param mixed $oetbconfdropshipchrg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdropshipchrg($oetbconfdropshipchrg = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHIPCHRG, $oetbconfdropshipchrg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfDropShpGlAcct column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdropshpglacct('fooValue');   // WHERE OetbConfDropShpGlAcct = 'fooValue'
     * $query->filterByOetbconfdropshpglacct('%fooValue%', Criteria::LIKE); // WHERE OetbConfDropShpGlAcct LIKE '%fooValue%'
     * $query->filterByOetbconfdropshpglacct(['foo', 'bar']); // WHERE OetbConfDropShpGlAcct IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfdropshpglacct The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdropshpglacct($oetbconfdropshpglacct = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdropshpglacct)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDROPSHPGLACCT, $oetbconfdropshpglacct, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfNonTaxCustCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfnontaxcustcode('fooValue');   // WHERE OetbConfNonTaxCustCode = 'fooValue'
     * $query->filterByOetbconfnontaxcustcode('%fooValue%', Criteria::LIKE); // WHERE OetbConfNonTaxCustCode LIKE '%fooValue%'
     * $query->filterByOetbconfnontaxcustcode(['foo', 'bar']); // WHERE OetbConfNonTaxCustCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfnontaxcustcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfnontaxcustcode($oetbconfnontaxcustcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfnontaxcustcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFNONTAXCUSTCODE, $oetbconfnontaxcustcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfHsTaxId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfhstaxid('fooValue');   // WHERE OetbConfHsTaxId = 'fooValue'
     * $query->filterByOetbconfhstaxid('%fooValue%', Criteria::LIKE); // WHERE OetbConfHsTaxId LIKE '%fooValue%'
     * $query->filterByOetbconfhstaxid(['foo', 'bar']); // WHERE OetbConfHsTaxId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfhstaxid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfhstaxid($oetbconfhstaxid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfhstaxid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFHSTAXID, $oetbconfhstaxid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfHsFrtId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfhsfrtid('fooValue');   // WHERE OetbConfHsFrtId = 'fooValue'
     * $query->filterByOetbconfhsfrtid('%fooValue%', Criteria::LIKE); // WHERE OetbConfHsFrtId LIKE '%fooValue%'
     * $query->filterByOetbconfhsfrtid(['foo', 'bar']); // WHERE OetbConfHsFrtId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfhsfrtid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfhsfrtid($oetbconfhsfrtid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfhsfrtid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFHSFRTID, $oetbconfhsfrtid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfHsMiscId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfhsmiscid('fooValue');   // WHERE OetbConfHsMiscId = 'fooValue'
     * $query->filterByOetbconfhsmiscid('%fooValue%', Criteria::LIKE); // WHERE OetbConfHsMiscId LIKE '%fooValue%'
     * $query->filterByOetbconfhsmiscid(['foo', 'bar']); // WHERE OetbConfHsMiscId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfhsmiscid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfhsmiscid($oetbconfhsmiscid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfhsmiscid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFHSMISCID, $oetbconfhsmiscid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2HsCusdId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2hscusdid('fooValue');   // WHERE OetbCon2HsCusdId = 'fooValue'
     * $query->filterByOetbcon2hscusdid('%fooValue%', Criteria::LIKE); // WHERE OetbCon2HsCusdId LIKE '%fooValue%'
     * $query->filterByOetbcon2hscusdid(['foo', 'bar']); // WHERE OetbCon2HsCusdId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2hscusdid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2hscusdid($oetbcon2hscusdid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2hscusdid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2HSCUSDID, $oetbcon2hscusdid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3HsFrtInId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3hsfrtinid('fooValue');   // WHERE OetbCon3HsFrtInId = 'fooValue'
     * $query->filterByOetbcon3hsfrtinid('%fooValue%', Criteria::LIKE); // WHERE OetbCon3HsFrtInId LIKE '%fooValue%'
     * $query->filterByOetbcon3hsfrtinid(['foo', 'bar']); // WHERE OetbCon3HsFrtInId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3hsfrtinid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3hsfrtinid($oetbcon3hsfrtinid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3hsfrtinid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3HSFRTINID, $oetbcon3hsfrtinid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3HsDropId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3hsdropid('fooValue');   // WHERE OetbCon3HsDropId = 'fooValue'
     * $query->filterByOetbcon3hsdropid('%fooValue%', Criteria::LIKE); // WHERE OetbCon3HsDropId LIKE '%fooValue%'
     * $query->filterByOetbcon3hsdropid(['foo', 'bar']); // WHERE OetbCon3HsDropId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3hsdropid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3hsdropid($oetbcon3hsdropid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3hsdropid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3HSDROPID, $oetbcon3hsdropid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3HsMinordId column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3hsminordid('fooValue');   // WHERE OetbCon3HsMinordId = 'fooValue'
     * $query->filterByOetbcon3hsminordid('%fooValue%', Criteria::LIKE); // WHERE OetbCon3HsMinordId LIKE '%fooValue%'
     * $query->filterByOetbcon3hsminordid(['foo', 'bar']); // WHERE OetbCon3HsMinordId IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3hsminordid The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3hsminordid($oetbcon3hsminordid = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3hsminordid)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3HSMINORDID, $oetbcon3hsminordid, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfHeadGetDef column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfheadgetdef('fooValue');   // WHERE OetbConfHeadGetDef = 'fooValue'
     * $query->filterByOetbconfheadgetdef('%fooValue%', Criteria::LIKE); // WHERE OetbConfHeadGetDef LIKE '%fooValue%'
     * $query->filterByOetbconfheadgetdef(['foo', 'bar']); // WHERE OetbConfHeadGetDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfheadgetdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfheadgetdef($oetbconfheadgetdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfheadgetdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFHEADGETDEF, $oetbconfheadgetdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfItemGetDef column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfitemgetdef('fooValue');   // WHERE OetbConfItemGetDef = 'fooValue'
     * $query->filterByOetbconfitemgetdef('%fooValue%', Criteria::LIKE); // WHERE OetbConfItemGetDef LIKE '%fooValue%'
     * $query->filterByOetbconfitemgetdef(['foo', 'bar']); // WHERE OetbConfItemGetDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfitemgetdef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfitemgetdef($oetbconfitemgetdef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfitemgetdef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFITEMGETDEF, $oetbconfitemgetdef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfAutoGetCust column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfautogetcust('fooValue');   // WHERE OetbConfAutoGetCust = 'fooValue'
     * $query->filterByOetbconfautogetcust('%fooValue%', Criteria::LIKE); // WHERE OetbConfAutoGetCust LIKE '%fooValue%'
     * $query->filterByOetbconfautogetcust(['foo', 'bar']); // WHERE OetbConfAutoGetCust IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfautogetcust The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfautogetcust($oetbconfautogetcust = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfautogetcust)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFAUTOGETCUST, $oetbconfautogetcust, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3AutoGetItem column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3autogetitem('fooValue');   // WHERE OetbCon3AutoGetItem = 'fooValue'
     * $query->filterByOetbcon3autogetitem('%fooValue%', Criteria::LIKE); // WHERE OetbCon3AutoGetItem LIKE '%fooValue%'
     * $query->filterByOetbcon3autogetitem(['foo', 'bar']); // WHERE OetbCon3AutoGetItem IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3autogetitem The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3autogetitem($oetbcon3autogetitem = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3autogetitem)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3AUTOGETITEM, $oetbcon3autogetitem, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfRqstHeadDtl column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfrqstheaddtl('fooValue');   // WHERE OetbConfRqstHeadDtl = 'fooValue'
     * $query->filterByOetbconfrqstheaddtl('%fooValue%', Criteria::LIKE); // WHERE OetbConfRqstHeadDtl LIKE '%fooValue%'
     * $query->filterByOetbconfrqstheaddtl(['foo', 'bar']); // WHERE OetbConfRqstHeadDtl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfrqstheaddtl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfrqstheaddtl($oetbconfrqstheaddtl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfrqstheaddtl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFRQSTHEADDTL, $oetbconfrqstheaddtl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfCancHeadDtl column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfcancheaddtl('fooValue');   // WHERE OetbConfCancHeadDtl = 'fooValue'
     * $query->filterByOetbconfcancheaddtl('%fooValue%', Criteria::LIKE); // WHERE OetbConfCancHeadDtl LIKE '%fooValue%'
     * $query->filterByOetbconfcancheaddtl(['foo', 'bar']); // WHERE OetbConfCancHeadDtl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfcancheaddtl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfcancheaddtl($oetbconfcancheaddtl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfcancheaddtl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFCANCHEADDTL, $oetbconfcancheaddtl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfUseInvcAsShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseinvcasship('fooValue');   // WHERE OetbConfUseInvcAsShip = 'fooValue'
     * $query->filterByOetbconfuseinvcasship('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseInvcAsShip LIKE '%fooValue%'
     * $query->filterByOetbconfuseinvcasship(['foo', 'bar']); // WHERE OetbConfUseInvcAsShip IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfuseinvcasship The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfuseinvcasship($oetbconfuseinvcasship = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseinvcasship)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEINVCASSHIP, $oetbconfuseinvcasship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3UseArrvDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3usearrvdate('fooValue');   // WHERE OetbCon3UseArrvDate = 'fooValue'
     * $query->filterByOetbcon3usearrvdate('%fooValue%', Criteria::LIKE); // WHERE OetbCon3UseArrvDate LIKE '%fooValue%'
     * $query->filterByOetbcon3usearrvdate(['foo', 'bar']); // WHERE OetbCon3UseArrvDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3usearrvdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3usearrvdate($oetbcon3usearrvdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3usearrvdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3USEARRVDATE, $oetbcon3usearrvdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfSeparateCred column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfseparatecred('fooValue');   // WHERE OetbConfSeparateCred = 'fooValue'
     * $query->filterByOetbconfseparatecred('%fooValue%', Criteria::LIKE); // WHERE OetbConfSeparateCred LIKE '%fooValue%'
     * $query->filterByOetbconfseparatecred(['foo', 'bar']); // WHERE OetbConfSeparateCred IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfseparatecred The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfseparatecred($oetbconfseparatecred = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfseparatecred)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSEPARATECRED, $oetbconfseparatecred, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3ApplyCredits column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3applycredits('fooValue');   // WHERE OetbCon3ApplyCredits = 'fooValue'
     * $query->filterByOetbcon3applycredits('%fooValue%', Criteria::LIKE); // WHERE OetbCon3ApplyCredits LIKE '%fooValue%'
     * $query->filterByOetbcon3applycredits(['foo', 'bar']); // WHERE OetbCon3ApplyCredits IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3applycredits The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3applycredits($oetbcon3applycredits = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3applycredits)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3APPLYCREDITS, $oetbcon3applycredits, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfWarnNotNew column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfwarnnotnew('fooValue');   // WHERE OetbConfWarnNotNew = 'fooValue'
     * $query->filterByOetbconfwarnnotnew('%fooValue%', Criteria::LIKE); // WHERE OetbConfWarnNotNew LIKE '%fooValue%'
     * $query->filterByOetbconfwarnnotnew(['foo', 'bar']); // WHERE OetbConfWarnNotNew IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfwarnnotnew The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfwarnnotnew($oetbconfwarnnotnew = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfwarnnotnew)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFWARNNOTNEW, $oetbconfwarnnotnew, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfWarnBoToZero column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfwarnbotozero('fooValue');   // WHERE OetbConfWarnBoToZero = 'fooValue'
     * $query->filterByOetbconfwarnbotozero('%fooValue%', Criteria::LIKE); // WHERE OetbConfWarnBoToZero LIKE '%fooValue%'
     * $query->filterByOetbconfwarnbotozero(['foo', 'bar']); // WHERE OetbConfWarnBoToZero IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfwarnbotozero The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfwarnbotozero($oetbconfwarnbotozero = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfwarnbotozero)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFWARNBOTOZERO, $oetbconfwarnbotozero, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2ProvideRouting column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2providerouting('fooValue');   // WHERE OetbCon2ProvideRouting = 'fooValue'
     * $query->filterByOetbcon2providerouting('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ProvideRouting LIKE '%fooValue%'
     * $query->filterByOetbcon2providerouting(['foo', 'bar']); // WHERE OetbCon2ProvideRouting IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2providerouting The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2providerouting($oetbcon2providerouting = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2providerouting)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PROVIDEROUTING, $oetbcon2providerouting, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2SrtRtByRqstDte column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2srtrtbyrqstdte('fooValue');   // WHERE OetbCon2SrtRtByRqstDte = 'fooValue'
     * $query->filterByOetbcon2srtrtbyrqstdte('%fooValue%', Criteria::LIKE); // WHERE OetbCon2SrtRtByRqstDte LIKE '%fooValue%'
     * $query->filterByOetbcon2srtrtbyrqstdte(['foo', 'bar']); // WHERE OetbCon2SrtRtByRqstDte IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2srtrtbyrqstdte The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2srtrtbyrqstdte($oetbcon2srtrtbyrqstdte = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2srtrtbyrqstdte)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SRTRTBYRQSTDTE, $oetbcon2srtrtbyrqstdte, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfUseSoReview column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfusesoreview('fooValue');   // WHERE OetbConfUseSoReview = 'fooValue'
     * $query->filterByOetbconfusesoreview('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseSoReview LIKE '%fooValue%'
     * $query->filterByOetbconfusesoreview(['foo', 'bar']); // WHERE OetbConfUseSoReview IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfusesoreview The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfusesoreview($oetbconfusesoreview = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfusesoreview)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSESOREVIEW, $oetbconfusesoreview, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfPickNoteDef column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpicknotedef('fooValue');   // WHERE OetbConfPickNoteDef = 'fooValue'
     * $query->filterByOetbconfpicknotedef('%fooValue%', Criteria::LIKE); // WHERE OetbConfPickNoteDef LIKE '%fooValue%'
     * $query->filterByOetbconfpicknotedef(['foo', 'bar']); // WHERE OetbConfPickNoteDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfpicknotedef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfpicknotedef($oetbconfpicknotedef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpicknotedef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPICKNOTEDEF, $oetbconfpicknotedef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfPackNoteDef column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpacknotedef('fooValue');   // WHERE OetbConfPackNoteDef = 'fooValue'
     * $query->filterByOetbconfpacknotedef('%fooValue%', Criteria::LIKE); // WHERE OetbConfPackNoteDef LIKE '%fooValue%'
     * $query->filterByOetbconfpacknotedef(['foo', 'bar']); // WHERE OetbConfPackNoteDef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfpacknotedef The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfpacknotedef($oetbconfpacknotedef = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpacknotedef)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPACKNOTEDEF, $oetbconfpacknotedef, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfPickSort column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpicksort('fooValue');   // WHERE OetbConfPickSort = 'fooValue'
     * $query->filterByOetbconfpicksort('%fooValue%', Criteria::LIKE); // WHERE OetbConfPickSort LIKE '%fooValue%'
     * $query->filterByOetbconfpicksort(['foo', 'bar']); // WHERE OetbConfPickSort IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfpicksort The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfpicksort($oetbconfpicksort = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpicksort)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPICKSORT, $oetbconfpicksort, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfPackSort column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpacksort('fooValue');   // WHERE OetbConfPackSort = 'fooValue'
     * $query->filterByOetbconfpacksort('%fooValue%', Criteria::LIKE); // WHERE OetbConfPackSort LIKE '%fooValue%'
     * $query->filterByOetbconfpacksort(['foo', 'bar']); // WHERE OetbConfPackSort IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfpacksort The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfpacksort($oetbconfpacksort = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpacksort)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPACKSORT, $oetbconfpacksort, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfPrtPricOnly column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfprtpriconly('fooValue');   // WHERE OetbConfPrtPricOnly = 'fooValue'
     * $query->filterByOetbconfprtpriconly('%fooValue%', Criteria::LIKE); // WHERE OetbConfPrtPricOnly LIKE '%fooValue%'
     * $query->filterByOetbconfprtpriconly(['foo', 'bar']); // WHERE OetbConfPrtPricOnly IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfprtpriconly The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfprtpriconly($oetbconfprtpriconly = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfprtpriconly)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPRTPRICONLY, $oetbconfprtpriconly, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfPrtNeg column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfprtneg('fooValue');   // WHERE OetbConfPrtNeg = 'fooValue'
     * $query->filterByOetbconfprtneg('%fooValue%', Criteria::LIKE); // WHERE OetbConfPrtNeg LIKE '%fooValue%'
     * $query->filterByOetbconfprtneg(['foo', 'bar']); // WHERE OetbConfPrtNeg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfprtneg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfprtneg($oetbconfprtneg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfprtneg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPRTNEG, $oetbconfprtneg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2PrtPackageInfo column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2prtpackageinfo('fooValue');   // WHERE OetbCon2PrtPackageInfo = 'fooValue'
     * $query->filterByOetbcon2prtpackageinfo('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PrtPackageInfo LIKE '%fooValue%'
     * $query->filterByOetbcon2prtpackageinfo(['foo', 'bar']); // WHERE OetbCon2PrtPackageInfo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2prtpackageinfo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2prtpackageinfo($oetbcon2prtpackageinfo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2prtpackageinfo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PRTPACKAGEINFO, $oetbcon2prtpackageinfo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2InnerPackLabel column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2innerpacklabel('fooValue');   // WHERE OetbCon2InnerPackLabel = 'fooValue'
     * $query->filterByOetbcon2innerpacklabel('%fooValue%', Criteria::LIKE); // WHERE OetbCon2InnerPackLabel LIKE '%fooValue%'
     * $query->filterByOetbcon2innerpacklabel(['foo', 'bar']); // WHERE OetbCon2InnerPackLabel IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2innerpacklabel The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2innerpacklabel($oetbcon2innerpacklabel = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2innerpacklabel)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2INNERPACKLABEL, $oetbcon2innerpacklabel, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2OuterPackLabel column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2outerpacklabel('fooValue');   // WHERE OetbCon2OuterPackLabel = 'fooValue'
     * $query->filterByOetbcon2outerpacklabel('%fooValue%', Criteria::LIKE); // WHERE OetbCon2OuterPackLabel LIKE '%fooValue%'
     * $query->filterByOetbcon2outerpacklabel(['foo', 'bar']); // WHERE OetbCon2OuterPackLabel IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2outerpacklabel The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2outerpacklabel($oetbcon2outerpacklabel = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2outerpacklabel)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2OUTERPACKLABEL, $oetbcon2outerpacklabel, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2ShipTareLabel column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2shiptarelabel('fooValue');   // WHERE OetbCon2ShipTareLabel = 'fooValue'
     * $query->filterByOetbcon2shiptarelabel('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ShipTareLabel LIKE '%fooValue%'
     * $query->filterByOetbcon2shiptarelabel(['foo', 'bar']); // WHERE OetbCon2ShipTareLabel IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2shiptarelabel The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2shiptarelabel($oetbcon2shiptarelabel = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2shiptarelabel)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SHIPTARELABEL, $oetbcon2shiptarelabel, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfPrtPick column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfprtpick('fooValue');   // WHERE OetbConfPrtPick = 'fooValue'
     * $query->filterByOetbconfprtpick('%fooValue%', Criteria::LIKE); // WHERE OetbConfPrtPick LIKE '%fooValue%'
     * $query->filterByOetbconfprtpick(['foo', 'bar']); // WHERE OetbConfPrtPick IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfprtpick The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfprtpick($oetbconfprtpick = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfprtpick)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPRTPICK, $oetbconfprtpick, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfPicPrioSeq column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpicprioseq('fooValue');   // WHERE OetbConfPicPrioSeq = 'fooValue'
     * $query->filterByOetbconfpicprioseq('%fooValue%', Criteria::LIKE); // WHERE OetbConfPicPrioSeq LIKE '%fooValue%'
     * $query->filterByOetbconfpicprioseq(['foo', 'bar']); // WHERE OetbConfPicPrioSeq IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfpicprioseq The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfpicprioseq($oetbconfpicprioseq = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpicprioseq)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPICPRIOSEQ, $oetbconfpicprioseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfPrtPack column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfprtpack('fooValue');   // WHERE OetbConfPrtPack = 'fooValue'
     * $query->filterByOetbconfprtpack('%fooValue%', Criteria::LIKE); // WHERE OetbConfPrtPack LIKE '%fooValue%'
     * $query->filterByOetbconfprtpack(['foo', 'bar']); // WHERE OetbConfPrtPack IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfprtpack The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfprtpack($oetbconfprtpack = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfprtpack)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPRTPACK, $oetbconfprtpack, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfPrtInv column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfprtinv('fooValue');   // WHERE OetbConfPrtInv = 'fooValue'
     * $query->filterByOetbconfprtinv('%fooValue%', Criteria::LIKE); // WHERE OetbConfPrtInv LIKE '%fooValue%'
     * $query->filterByOetbconfprtinv(['foo', 'bar']); // WHERE OetbConfPrtInv IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfprtinv The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfprtinv($oetbconfprtinv = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfprtinv)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPRTINV, $oetbconfprtinv, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2PrtCredMemo column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2prtcredmemo('fooValue');   // WHERE OetbCon2PrtCredMemo = 'fooValue'
     * $query->filterByOetbcon2prtcredmemo('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PrtCredMemo LIKE '%fooValue%'
     * $query->filterByOetbcon2prtcredmemo(['foo', 'bar']); // WHERE OetbCon2PrtCredMemo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2prtcredmemo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2prtcredmemo($oetbcon2prtcredmemo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2prtcredmemo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PRTCREDMEMO, $oetbcon2prtcredmemo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfCrntDate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfcrntdate('fooValue');   // WHERE OetbConfCrntDate = 'fooValue'
     * $query->filterByOetbconfcrntdate('%fooValue%', Criteria::LIKE); // WHERE OetbConfCrntDate LIKE '%fooValue%'
     * $query->filterByOetbconfcrntdate(['foo', 'bar']); // WHERE OetbConfCrntDate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfcrntdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfcrntdate($oetbconfcrntdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfcrntdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFCRNTDATE, $oetbconfcrntdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfMarkPicked column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfmarkpicked('fooValue');   // WHERE OetbConfMarkPicked = 'fooValue'
     * $query->filterByOetbconfmarkpicked('%fooValue%', Criteria::LIKE); // WHERE OetbConfMarkPicked LIKE '%fooValue%'
     * $query->filterByOetbconfmarkpicked(['foo', 'bar']); // WHERE OetbConfMarkPicked IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfmarkpicked The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfmarkpicked($oetbconfmarkpicked = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfmarkpicked)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFMARKPICKED, $oetbconfmarkpicked, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfShowUnavail column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfshowunavail('fooValue');   // WHERE OetbConfShowUnavail = 'fooValue'
     * $query->filterByOetbconfshowunavail('%fooValue%', Criteria::LIKE); // WHERE OetbConfShowUnavail LIKE '%fooValue%'
     * $query->filterByOetbconfshowunavail(['foo', 'bar']); // WHERE OetbConfShowUnavail IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfshowunavail The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfshowunavail($oetbconfshowunavail = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfshowunavail)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSHOWUNAVAIL, $oetbconfshowunavail, $comparison);

        return $this;
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
     * @param mixed $oetbconfdecplaces The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdecplaces($oetbconfdecplaces = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDECPLACES, $oetbconfdecplaces, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfWarnDup column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfwarndup('fooValue');   // WHERE OetbConfWarnDup = 'fooValue'
     * $query->filterByOetbconfwarndup('%fooValue%', Criteria::LIKE); // WHERE OetbConfWarnDup LIKE '%fooValue%'
     * $query->filterByOetbconfwarndup(['foo', 'bar']); // WHERE OetbConfWarnDup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfwarndup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfwarndup($oetbconfwarndup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfwarndup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFWARNDUP, $oetbconfwarndup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfDefPick column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdefpick('fooValue');   // WHERE OetbConfDefPick = 'fooValue'
     * $query->filterByOetbconfdefpick('%fooValue%', Criteria::LIKE); // WHERE OetbConfDefPick LIKE '%fooValue%'
     * $query->filterByOetbconfdefpick(['foo', 'bar']); // WHERE OetbConfDefPick IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfdefpick The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdefpick($oetbconfdefpick = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdefpick)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDEFPICK, $oetbconfdefpick, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfDefPack column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdefpack('fooValue');   // WHERE OetbConfDefPack = 'fooValue'
     * $query->filterByOetbconfdefpack('%fooValue%', Criteria::LIKE); // WHERE OetbConfDefPack LIKE '%fooValue%'
     * $query->filterByOetbconfdefpack(['foo', 'bar']); // WHERE OetbConfDefPack IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfdefpack The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdefpack($oetbconfdefpack = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdefpack)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDEFPACK, $oetbconfdefpack, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfDefInvc column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdefinvc('fooValue');   // WHERE OetbConfDefInvc = 'fooValue'
     * $query->filterByOetbconfdefinvc('%fooValue%', Criteria::LIKE); // WHERE OetbConfDefInvc LIKE '%fooValue%'
     * $query->filterByOetbconfdefinvc(['foo', 'bar']); // WHERE OetbConfDefInvc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfdefinvc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdefinvc($oetbconfdefinvc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdefinvc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDEFINVC, $oetbconfdefinvc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfDefAck column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdefack('fooValue');   // WHERE OetbConfDefAck = 'fooValue'
     * $query->filterByOetbconfdefack('%fooValue%', Criteria::LIKE); // WHERE OetbConfDefAck LIKE '%fooValue%'
     * $query->filterByOetbconfdefack(['foo', 'bar']); // WHERE OetbConfDefAck IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfdefack The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdefack($oetbconfdefack = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdefack)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDEFACK, $oetbconfdefack, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfAckSortOpt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfacksortopt('fooValue');   // WHERE OetbConfAckSortOpt = 'fooValue'
     * $query->filterByOetbconfacksortopt('%fooValue%', Criteria::LIKE); // WHERE OetbConfAckSortOpt LIKE '%fooValue%'
     * $query->filterByOetbconfacksortopt(['foo', 'bar']); // WHERE OetbConfAckSortOpt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfacksortopt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfacksortopt($oetbconfacksortopt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfacksortopt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFACKSORTOPT, $oetbconfacksortopt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfReleaseNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfreleasenbr('fooValue');   // WHERE OetbConfReleaseNbr = 'fooValue'
     * $query->filterByOetbconfreleasenbr('%fooValue%', Criteria::LIKE); // WHERE OetbConfReleaseNbr LIKE '%fooValue%'
     * $query->filterByOetbconfreleasenbr(['foo', 'bar']); // WHERE OetbConfReleaseNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfreleasenbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfreleasenbr($oetbconfreleasenbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfreleasenbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFRELEASENBR, $oetbconfreleasenbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfPoDetLineNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpodetlinenbr('fooValue');   // WHERE OetbConfPoDetLineNbr = 'fooValue'
     * $query->filterByOetbconfpodetlinenbr('%fooValue%', Criteria::LIKE); // WHERE OetbConfPoDetLineNbr LIKE '%fooValue%'
     * $query->filterByOetbconfpodetlinenbr(['foo', 'bar']); // WHERE OetbConfPoDetLineNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfpodetlinenbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfpodetlinenbr($oetbconfpodetlinenbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpodetlinenbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPODETLINENBR, $oetbconfpodetlinenbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfDetLineBinNbr column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdetlinebinnbr('fooValue');   // WHERE OetbConfDetLineBinNbr = 'fooValue'
     * $query->filterByOetbconfdetlinebinnbr('%fooValue%', Criteria::LIKE); // WHERE OetbConfDetLineBinNbr LIKE '%fooValue%'
     * $query->filterByOetbconfdetlinebinnbr(['foo', 'bar']); // WHERE OetbConfDetLineBinNbr IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfdetlinebinnbr The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdetlinebinnbr($oetbconfdetlinebinnbr = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdetlinebinnbr)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDETLINEBINNBR, $oetbconfdetlinebinnbr, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfSplitByWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfsplitbywhse('fooValue');   // WHERE OetbConfSplitByWhse = 'fooValue'
     * $query->filterByOetbconfsplitbywhse('%fooValue%', Criteria::LIKE); // WHERE OetbConfSplitByWhse LIKE '%fooValue%'
     * $query->filterByOetbconfsplitbywhse(['foo', 'bar']); // WHERE OetbConfSplitByWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfsplitbywhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfsplitbywhse($oetbconfsplitbywhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfsplitbywhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSPLITBYWHSE, $oetbconfsplitbywhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3AllowMultWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3allowmultwhse('fooValue');   // WHERE OetbCon3AllowMultWhse = 'fooValue'
     * $query->filterByOetbcon3allowmultwhse('%fooValue%', Criteria::LIKE); // WHERE OetbCon3AllowMultWhse LIKE '%fooValue%'
     * $query->filterByOetbcon3allowmultwhse(['foo', 'bar']); // WHERE OetbCon3AllowMultWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3allowmultwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3allowmultwhse($oetbcon3allowmultwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3allowmultwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3ALLOWMULTWHSE, $oetbcon3allowmultwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfUseOrigWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseorigwhse('fooValue');   // WHERE OetbConfUseOrigWhse = 'fooValue'
     * $query->filterByOetbconfuseorigwhse('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseOrigWhse LIKE '%fooValue%'
     * $query->filterByOetbconfuseorigwhse(['foo', 'bar']); // WHERE OetbConfUseOrigWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfuseorigwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfuseorigwhse($oetbconfuseorigwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseorigwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEORIGWHSE, $oetbconfuseorigwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfUseEsoSingle column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseesosingle('fooValue');   // WHERE OetbConfUseEsoSingle = 'fooValue'
     * $query->filterByOetbconfuseesosingle('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseEsoSingle LIKE '%fooValue%'
     * $query->filterByOetbconfuseesosingle(['foo', 'bar']); // WHERE OetbConfUseEsoSingle IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfuseesosingle The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfuseesosingle($oetbconfuseesosingle = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseesosingle)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEESOSINGLE, $oetbconfuseesosingle, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfCreatePo column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfcreatepo('fooValue');   // WHERE OetbConfCreatePo = 'fooValue'
     * $query->filterByOetbconfcreatepo('%fooValue%', Criteria::LIKE); // WHERE OetbConfCreatePo LIKE '%fooValue%'
     * $query->filterByOetbconfcreatepo(['foo', 'bar']); // WHERE OetbConfCreatePo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfcreatepo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfcreatepo($oetbconfcreatepo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfcreatepo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFCREATEPO, $oetbconfcreatepo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfBestPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfbestprice('fooValue');   // WHERE OetbConfBestPrice = 'fooValue'
     * $query->filterByOetbconfbestprice('%fooValue%', Criteria::LIKE); // WHERE OetbConfBestPrice LIKE '%fooValue%'
     * $query->filterByOetbconfbestprice(['foo', 'bar']); // WHERE OetbConfBestPrice IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfbestprice The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfbestprice($oetbconfbestprice = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfbestprice)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFBESTPRICE, $oetbconfbestprice, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfEsoBackToNew column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfesobacktonew('fooValue');   // WHERE OetbConfEsoBackToNew = 'fooValue'
     * $query->filterByOetbconfesobacktonew('%fooValue%', Criteria::LIKE); // WHERE OetbConfEsoBackToNew LIKE '%fooValue%'
     * $query->filterByOetbconfesobacktonew(['foo', 'bar']); // WHERE OetbConfEsoBackToNew IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfesobacktonew The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfesobacktonew($oetbconfesobacktonew = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfesobacktonew)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFESOBACKTONEW, $oetbconfesobacktonew, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfPickPrintDrop column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfpickprintdrop('fooValue');   // WHERE OetbConfPickPrintDrop = 'fooValue'
     * $query->filterByOetbconfpickprintdrop('%fooValue%', Criteria::LIKE); // WHERE OetbConfPickPrintDrop LIKE '%fooValue%'
     * $query->filterByOetbconfpickprintdrop(['foo', 'bar']); // WHERE OetbConfPickPrintDrop IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfpickprintdrop The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfpickprintdrop($oetbconfpickprintdrop = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfpickprintdrop)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFPICKPRINTDROP, $oetbconfpickprintdrop, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfWarnMultPo column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfwarnmultpo('fooValue');   // WHERE OetbConfWarnMultPo = 'fooValue'
     * $query->filterByOetbconfwarnmultpo('%fooValue%', Criteria::LIKE); // WHERE OetbConfWarnMultPo LIKE '%fooValue%'
     * $query->filterByOetbconfwarnmultpo(['foo', 'bar']); // WHERE OetbConfWarnMultPo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfwarnmultpo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfwarnmultpo($oetbconfwarnmultpo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfwarnmultpo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFWARNMULTPO, $oetbconfwarnmultpo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfAlertItemQuote column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfalertitemquote('fooValue');   // WHERE OetbConfAlertItemQuote = 'fooValue'
     * $query->filterByOetbconfalertitemquote('%fooValue%', Criteria::LIKE); // WHERE OetbConfAlertItemQuote LIKE '%fooValue%'
     * $query->filterByOetbconfalertitemquote(['foo', 'bar']); // WHERE OetbConfAlertItemQuote IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfalertitemquote The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfalertitemquote($oetbconfalertitemquote = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfalertitemquote)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFALERTITEMQUOTE, $oetbconfalertitemquote, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3AskChgPrcWQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3askchgprcwqty('fooValue');   // WHERE OetbCon3AskChgPrcWQty = 'fooValue'
     * $query->filterByOetbcon3askchgprcwqty('%fooValue%', Criteria::LIKE); // WHERE OetbCon3AskChgPrcWQty LIKE '%fooValue%'
     * $query->filterByOetbcon3askchgprcwqty(['foo', 'bar']); // WHERE OetbCon3AskChgPrcWQty IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3askchgprcwqty The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3askchgprcwqty($oetbcon3askchgprcwqty = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3askchgprcwqty)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3ASKCHGPRCWQTY, $oetbcon3askchgprcwqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3TenQtyBrks column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3tenqtybrks('fooValue');   // WHERE OetbCon3TenQtyBrks = 'fooValue'
     * $query->filterByOetbcon3tenqtybrks('%fooValue%', Criteria::LIKE); // WHERE OetbCon3TenQtyBrks LIKE '%fooValue%'
     * $query->filterByOetbcon3tenqtybrks(['foo', 'bar']); // WHERE OetbCon3TenQtyBrks IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3tenqtybrks The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3tenqtybrks($oetbcon3tenqtybrks = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3tenqtybrks)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3TENQTYBRKS, $oetbcon3tenqtybrks, $comparison);

        return $this;
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
     * @param mixed $oetbconfdecordrpric The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdecordrpric($oetbconfdecordrpric = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDECORDRPRIC, $oetbconfdecordrpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2ProvLostSales column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2provlostsales('fooValue');   // WHERE OetbCon2ProvLostSales = 'fooValue'
     * $query->filterByOetbcon2provlostsales('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ProvLostSales LIKE '%fooValue%'
     * $query->filterByOetbcon2provlostsales(['foo', 'bar']); // WHERE OetbCon2ProvLostSales IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2provlostsales The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2provlostsales($oetbcon2provlostsales = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2provlostsales)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PROVLOSTSALES, $oetbcon2provlostsales, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2AskReasonCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2askreasoncode('fooValue');   // WHERE OetbCon2AskReasonCode = 'fooValue'
     * $query->filterByOetbcon2askreasoncode('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AskReasonCode LIKE '%fooValue%'
     * $query->filterByOetbcon2askreasoncode(['foo', 'bar']); // WHERE OetbCon2AskReasonCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2askreasoncode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2askreasoncode($oetbcon2askreasoncode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2askreasoncode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ASKREASONCODE, $oetbcon2askreasoncode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2DefReasonCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2defreasoncode('fooValue');   // WHERE OetbCon2DefReasonCode = 'fooValue'
     * $query->filterByOetbcon2defreasoncode('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DefReasonCode LIKE '%fooValue%'
     * $query->filterByOetbcon2defreasoncode(['foo', 'bar']); // WHERE OetbCon2DefReasonCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2defreasoncode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2defreasoncode($oetbcon2defreasoncode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2defreasoncode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFREASONCODE, $oetbcon2defreasoncode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2BordCntl column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2bordcntl('fooValue');   // WHERE OetbCon2BordCntl = 'fooValue'
     * $query->filterByOetbcon2bordcntl('%fooValue%', Criteria::LIKE); // WHERE OetbCon2BordCntl LIKE '%fooValue%'
     * $query->filterByOetbcon2bordcntl(['foo', 'bar']); // WHERE OetbCon2BordCntl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2bordcntl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2bordcntl($oetbcon2bordcntl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2bordcntl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2BORDCNTL, $oetbcon2bordcntl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2DefReaBoCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2defreabocode('fooValue');   // WHERE OetbCon2DefReaBoCode = 'fooValue'
     * $query->filterByOetbcon2defreabocode('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DefReaBoCode LIKE '%fooValue%'
     * $query->filterByOetbcon2defreabocode(['foo', 'bar']); // WHERE OetbCon2DefReaBoCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2defreabocode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2defreabocode($oetbcon2defreabocode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2defreabocode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFREABOCODE, $oetbcon2defreabocode, $comparison);

        return $this;
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
     * @param mixed $oetbcon2numdayssavls The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2numdayssavls($oetbcon2numdayssavls = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2NUMDAYSSAVLS, $oetbcon2numdayssavls, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2CallBackNotif column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2callbacknotif('fooValue');   // WHERE OetbCon2CallBackNotif = 'fooValue'
     * $query->filterByOetbcon2callbacknotif('%fooValue%', Criteria::LIKE); // WHERE OetbCon2CallBackNotif LIKE '%fooValue%'
     * $query->filterByOetbcon2callbacknotif(['foo', 'bar']); // WHERE OetbCon2CallBackNotif IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2callbacknotif The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2callbacknotif($oetbcon2callbacknotif = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2callbacknotif)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2CALLBACKNOTIF, $oetbcon2callbacknotif, $comparison);

        return $this;
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
     * @param mixed $oetbcon2defdayswhenin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2defdayswhenin($oetbcon2defdayswhenin = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFDAYSWHENIN, $oetbcon2defdayswhenin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2AddSubsLs column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2addsubsls('fooValue');   // WHERE OetbCon2AddSubsLs = 'fooValue'
     * $query->filterByOetbcon2addsubsls('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AddSubsLs LIKE '%fooValue%'
     * $query->filterByOetbcon2addsubsls(['foo', 'bar']); // WHERE OetbCon2AddSubsLs IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2addsubsls The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2addsubsls($oetbcon2addsubsls = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2addsubsls)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ADDSUBSLS, $oetbcon2addsubsls, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2DefReaSubsCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2defreasubscode('fooValue');   // WHERE OetbCon2DefReaSubsCode = 'fooValue'
     * $query->filterByOetbcon2defreasubscode('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DefReaSubsCode LIKE '%fooValue%'
     * $query->filterByOetbcon2defreasubscode(['foo', 'bar']); // WHERE OetbCon2DefReaSubsCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2defreasubscode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2defreasubscode($oetbcon2defreasubscode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2defreasubscode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFREASUBSCODE, $oetbcon2defreasubscode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2OrdTypNorm column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ordtypnorm('fooValue');   // WHERE OetbCon2OrdTypNorm = 'fooValue'
     * $query->filterByOetbcon2ordtypnorm('%fooValue%', Criteria::LIKE); // WHERE OetbCon2OrdTypNorm LIKE '%fooValue%'
     * $query->filterByOetbcon2ordtypnorm(['foo', 'bar']); // WHERE OetbCon2OrdTypNorm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2ordtypnorm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2ordtypnorm($oetbcon2ordtypnorm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ordtypnorm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPNORM, $oetbcon2ordtypnorm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2OrdTypRep column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ordtyprep('fooValue');   // WHERE OetbCon2OrdTypRep = 'fooValue'
     * $query->filterByOetbcon2ordtyprep('%fooValue%', Criteria::LIKE); // WHERE OetbCon2OrdTypRep LIKE '%fooValue%'
     * $query->filterByOetbcon2ordtyprep(['foo', 'bar']); // WHERE OetbCon2OrdTypRep IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2ordtyprep The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2ordtyprep($oetbcon2ordtyprep = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ordtyprep)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPREP, $oetbcon2ordtyprep, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2OrdTypServ column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ordtypserv('fooValue');   // WHERE OetbCon2OrdTypServ = 'fooValue'
     * $query->filterByOetbcon2ordtypserv('%fooValue%', Criteria::LIKE); // WHERE OetbCon2OrdTypServ LIKE '%fooValue%'
     * $query->filterByOetbcon2ordtypserv(['foo', 'bar']); // WHERE OetbCon2OrdTypServ IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2ordtypserv The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2ordtypserv($oetbcon2ordtypserv = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ordtypserv)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ORDTYPSERV, $oetbcon2ordtypserv, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2DefOrdTyp column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2defordtyp('fooValue');   // WHERE OetbCon2DefOrdTyp = 'fooValue'
     * $query->filterByOetbcon2defordtyp('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DefOrdTyp LIKE '%fooValue%'
     * $query->filterByOetbcon2defordtyp(['foo', 'bar']); // WHERE OetbCon2DefOrdTyp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2defordtyp The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2defordtyp($oetbcon2defordtyp = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2defordtyp)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFORDTYP, $oetbcon2defordtyp, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfChgPric column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfchgpric('fooValue');   // WHERE OetbConfChgPric = 'fooValue'
     * $query->filterByOetbconfchgpric('%fooValue%', Criteria::LIKE); // WHERE OetbConfChgPric LIKE '%fooValue%'
     * $query->filterByOetbconfchgpric(['foo', 'bar']); // WHERE OetbConfChgPric IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfchgpric The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfchgpric($oetbconfchgpric = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfchgpric)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFCHGPRIC, $oetbconfchgpric, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2SpordPriceZero column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2spordpricezero('fooValue');   // WHERE OetbCon2SpordPriceZero = 'fooValue'
     * $query->filterByOetbcon2spordpricezero('%fooValue%', Criteria::LIKE); // WHERE OetbCon2SpordPriceZero LIKE '%fooValue%'
     * $query->filterByOetbcon2spordpricezero(['foo', 'bar']); // WHERE OetbCon2SpordPriceZero IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2spordpricezero The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2spordpricezero($oetbcon2spordpricezero = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2spordpricezero)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SPORDPRICEZERO, $oetbcon2spordpricezero, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfInactPriceZero column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfinactpricezero('fooValue');   // WHERE OetbConfInactPriceZero = 'fooValue'
     * $query->filterByOetbconfinactpricezero('%fooValue%', Criteria::LIKE); // WHERE OetbConfInactPriceZero LIKE '%fooValue%'
     * $query->filterByOetbconfinactpricezero(['foo', 'bar']); // WHERE OetbConfInactPriceZero IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfinactpricezero The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfinactpricezero($oetbconfinactpricezero = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfinactpricezero)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFINACTPRICEZERO, $oetbconfinactpricezero, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2Reseq column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2reseq('fooValue');   // WHERE OetbCon2Reseq = 'fooValue'
     * $query->filterByOetbcon2reseq('%fooValue%', Criteria::LIKE); // WHERE OetbCon2Reseq LIKE '%fooValue%'
     * $query->filterByOetbcon2reseq(['foo', 'bar']); // WHERE OetbCon2Reseq IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2reseq The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2reseq($oetbcon2reseq = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2reseq)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2RESEQ, $oetbcon2reseq, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2ReseqBy column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2reseqby('fooValue');   // WHERE OetbCon2ReseqBy = 'fooValue'
     * $query->filterByOetbcon2reseqby('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ReseqBy LIKE '%fooValue%'
     * $query->filterByOetbcon2reseqby(['foo', 'bar']); // WHERE OetbCon2ReseqBy IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2reseqby The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2reseqby($oetbcon2reseqby = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2reseqby)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2RESEQBY, $oetbcon2reseqby, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2MinQtySales column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2minqtysales('fooValue');   // WHERE OetbCon2MinQtySales = 'fooValue'
     * $query->filterByOetbcon2minqtysales('%fooValue%', Criteria::LIKE); // WHERE OetbCon2MinQtySales LIKE '%fooValue%'
     * $query->filterByOetbcon2minqtysales(['foo', 'bar']); // WHERE OetbCon2MinQtySales IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2minqtysales The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2minqtysales($oetbcon2minqtysales = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2minqtysales)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2MINQTYSALES, $oetbcon2minqtysales, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2ChgOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2chgorder('fooValue');   // WHERE OetbCon2ChgOrder = 'fooValue'
     * $query->filterByOetbcon2chgorder('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ChgOrder LIKE '%fooValue%'
     * $query->filterByOetbcon2chgorder(['foo', 'bar']); // WHERE OetbCon2ChgOrder IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2chgorder The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2chgorder($oetbcon2chgorder = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2chgorder)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2CHGORDER, $oetbcon2chgorder, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2VerComp column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2vercomp('fooValue');   // WHERE OetbCon2VerComp = 'fooValue'
     * $query->filterByOetbcon2vercomp('%fooValue%', Criteria::LIKE); // WHERE OetbCon2VerComp LIKE '%fooValue%'
     * $query->filterByOetbcon2vercomp(['foo', 'bar']); // WHERE OetbCon2VerComp IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2vercomp The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2vercomp($oetbcon2vercomp = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2vercomp)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2VERCOMP, $oetbcon2vercomp, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2PrtInv column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2prtinv('fooValue');   // WHERE OetbCon2PrtInv = 'fooValue'
     * $query->filterByOetbcon2prtinv('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PrtInv LIKE '%fooValue%'
     * $query->filterByOetbcon2prtinv(['foo', 'bar']); // WHERE OetbCon2PrtInv IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2prtinv The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2prtinv($oetbcon2prtinv = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2prtinv)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PRTINV, $oetbcon2prtinv, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2DynamicPickTick column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2dynamicpicktick('fooValue');   // WHERE OetbCon2DynamicPickTick = 'fooValue'
     * $query->filterByOetbcon2dynamicpicktick('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DynamicPickTick LIKE '%fooValue%'
     * $query->filterByOetbcon2dynamicpicktick(['foo', 'bar']); // WHERE OetbCon2DynamicPickTick IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2dynamicpicktick The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2dynamicpicktick($oetbcon2dynamicpicktick = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2dynamicpicktick)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICPICKTICK, $oetbcon2dynamicpicktick, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2DynamicInvoice column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2dynamicinvoice('fooValue');   // WHERE OetbCon2DynamicInvoice = 'fooValue'
     * $query->filterByOetbcon2dynamicinvoice('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DynamicInvoice LIKE '%fooValue%'
     * $query->filterByOetbcon2dynamicinvoice(['foo', 'bar']); // WHERE OetbCon2DynamicInvoice IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2dynamicinvoice The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2dynamicinvoice($oetbcon2dynamicinvoice = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2dynamicinvoice)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DYNAMICINVOICE, $oetbcon2dynamicinvoice, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2EdiDefInvoice column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2edidefinvoice('fooValue');   // WHERE OetbCon2EdiDefInvoice = 'fooValue'
     * $query->filterByOetbcon2edidefinvoice('%fooValue%', Criteria::LIKE); // WHERE OetbCon2EdiDefInvoice LIKE '%fooValue%'
     * $query->filterByOetbcon2edidefinvoice(['foo', 'bar']); // WHERE OetbCon2EdiDefInvoice IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2edidefinvoice The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2edidefinvoice($oetbcon2edidefinvoice = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2edidefinvoice)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2EDIDEFINVOICE, $oetbcon2edidefinvoice, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2AllowCcPick column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2allowccpick('fooValue');   // WHERE OetbCon2AllowCcPick = 'fooValue'
     * $query->filterByOetbcon2allowccpick('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AllowCcPick LIKE '%fooValue%'
     * $query->filterByOetbcon2allowccpick(['foo', 'bar']); // WHERE OetbCon2AllowCcPick IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2allowccpick The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2allowccpick($oetbcon2allowccpick = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2allowccpick)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWCCPICK, $oetbcon2allowccpick, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2AutoCcWind column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2autoccwind('fooValue');   // WHERE OetbCon2AutoCcWind = 'fooValue'
     * $query->filterByOetbcon2autoccwind('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AutoCcWind LIKE '%fooValue%'
     * $query->filterByOetbcon2autoccwind(['foo', 'bar']); // WHERE OetbCon2AutoCcWind IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2autoccwind The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2autoccwind($oetbcon2autoccwind = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2autoccwind)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCWIND, $oetbcon2autoccwind, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2AutoCcUpdate column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2autoccupdate('fooValue');   // WHERE OetbCon2AutoCcUpdate = 'fooValue'
     * $query->filterByOetbcon2autoccupdate('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AutoCcUpdate LIKE '%fooValue%'
     * $query->filterByOetbcon2autoccupdate(['foo', 'bar']); // WHERE OetbCon2AutoCcUpdate IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2autoccupdate The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2autoccupdate($oetbcon2autoccupdate = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2autoccupdate)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2AUTOCCUPDATE, $oetbcon2autoccupdate, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2AllowApvdCcChg column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2allowapvdccchg('fooValue');   // WHERE OetbCon2AllowApvdCcChg = 'fooValue'
     * $query->filterByOetbcon2allowapvdccchg('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AllowApvdCcChg LIKE '%fooValue%'
     * $query->filterByOetbcon2allowapvdccchg(['foo', 'bar']); // WHERE OetbCon2AllowApvdCcChg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2allowapvdccchg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2allowapvdccchg($oetbcon2allowapvdccchg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2allowapvdccchg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWAPVDCCCHG, $oetbcon2allowapvdccchg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3ApvdBckordClear column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3apvdbckordclear('fooValue');   // WHERE OetbCon3ApvdBckordClear = 'fooValue'
     * $query->filterByOetbcon3apvdbckordclear('%fooValue%', Criteria::LIKE); // WHERE OetbCon3ApvdBckordClear LIKE '%fooValue%'
     * $query->filterByOetbcon3apvdbckordclear(['foo', 'bar']); // WHERE OetbCon3ApvdBckordClear IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3apvdbckordclear The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3apvdbckordclear($oetbcon3apvdbckordclear = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3apvdbckordclear)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3APVDBCKORDCLEAR, $oetbcon3apvdbckordclear, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2PolWhichCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2polwhichcost('fooValue');   // WHERE OetbCon2PolWhichCost = 'fooValue'
     * $query->filterByOetbcon2polwhichcost('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PolWhichCost LIKE '%fooValue%'
     * $query->filterByOetbcon2polwhichcost(['foo', 'bar']); // WHERE OetbCon2PolWhichCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2polwhichcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2polwhichcost($oetbcon2polwhichcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2polwhichcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2POLWHICHCOST, $oetbcon2polwhichcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2RevHazard column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2revhazard('fooValue');   // WHERE OetbCon2RevHazard = 'fooValue'
     * $query->filterByOetbcon2revhazard('%fooValue%', Criteria::LIKE); // WHERE OetbCon2RevHazard LIKE '%fooValue%'
     * $query->filterByOetbcon2revhazard(['foo', 'bar']); // WHERE OetbCon2RevHazard IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2revhazard The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2revhazard($oetbcon2revhazard = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2revhazard)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2REVHAZARD, $oetbcon2revhazard, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2ShowDiscList column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2showdisclist('fooValue');   // WHERE OetbCon2ShowDiscList = 'fooValue'
     * $query->filterByOetbcon2showdisclist('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ShowDiscList LIKE '%fooValue%'
     * $query->filterByOetbcon2showdisclist(['foo', 'bar']); // WHERE OetbCon2ShowDiscList IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2showdisclist The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2showdisclist($oetbcon2showdisclist = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2showdisclist)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SHOWDISCLIST, $oetbcon2showdisclist, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2ChgList column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2chglist('fooValue');   // WHERE OetbCon2ChgList = 'fooValue'
     * $query->filterByOetbcon2chglist('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ChgList LIKE '%fooValue%'
     * $query->filterByOetbcon2chglist(['foo', 'bar']); // WHERE OetbCon2ChgList IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2chglist The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2chglist($oetbcon2chglist = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2chglist)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2CHGLIST, $oetbcon2chglist, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2MailList column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2maillist('fooValue');   // WHERE OetbCon2MailList = 'fooValue'
     * $query->filterByOetbcon2maillist('%fooValue%', Criteria::LIKE); // WHERE OetbCon2MailList LIKE '%fooValue%'
     * $query->filterByOetbcon2maillist(['foo', 'bar']); // WHERE OetbCon2MailList IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2maillist The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2maillist($oetbcon2maillist = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2maillist)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2MAILLIST, $oetbcon2maillist, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2NameFormat column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2nameformat('fooValue');   // WHERE OetbCon2NameFormat = 'fooValue'
     * $query->filterByOetbcon2nameformat('%fooValue%', Criteria::LIKE); // WHERE OetbCon2NameFormat LIKE '%fooValue%'
     * $query->filterByOetbcon2nameformat(['foo', 'bar']); // WHERE OetbCon2NameFormat IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2nameformat The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2nameformat($oetbcon2nameformat = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2nameformat)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2NAMEFORMAT, $oetbcon2nameformat, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2MailIdType column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2mailidtype('fooValue');   // WHERE OetbCon2MailIdType = 'fooValue'
     * $query->filterByOetbcon2mailidtype('%fooValue%', Criteria::LIKE); // WHERE OetbCon2MailIdType LIKE '%fooValue%'
     * $query->filterByOetbcon2mailidtype(['foo', 'bar']); // WHERE OetbCon2MailIdType IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2mailidtype The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2mailidtype($oetbcon2mailidtype = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2mailidtype)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2MAILIDTYPE, $oetbcon2mailidtype, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2CashDrawerPswd column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2cashdrawerpswd('fooValue');   // WHERE OetbCon2CashDrawerPswd = 'fooValue'
     * $query->filterByOetbcon2cashdrawerpswd('%fooValue%', Criteria::LIKE); // WHERE OetbCon2CashDrawerPswd LIKE '%fooValue%'
     * $query->filterByOetbcon2cashdrawerpswd(['foo', 'bar']); // WHERE OetbCon2CashDrawerPswd IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2cashdrawerpswd The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2cashdrawerpswd($oetbcon2cashdrawerpswd = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2cashdrawerpswd)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2CASHDRAWERPSWD, $oetbcon2cashdrawerpswd, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2UpsOnline column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2upsonline('fooValue');   // WHERE OetbCon2UpsOnline = 'fooValue'
     * $query->filterByOetbcon2upsonline('%fooValue%', Criteria::LIKE); // WHERE OetbCon2UpsOnline LIKE '%fooValue%'
     * $query->filterByOetbcon2upsonline(['foo', 'bar']); // WHERE OetbCon2UpsOnline IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2upsonline The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2upsonline($oetbcon2upsonline = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2upsonline)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2UPSONLINE, $oetbcon2upsonline, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2PicOrVer column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2picorver('fooValue');   // WHERE OetbCon2PicOrVer = 'fooValue'
     * $query->filterByOetbcon2picorver('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PicOrVer LIKE '%fooValue%'
     * $query->filterByOetbcon2picorver(['foo', 'bar']); // WHERE OetbCon2PicOrVer IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2picorver The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2picorver($oetbcon2picorver = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2picorver)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PICORVER, $oetbcon2picorver, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2CombBack column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2combback('fooValue');   // WHERE OetbCon2CombBack = 'fooValue'
     * $query->filterByOetbcon2combback('%fooValue%', Criteria::LIKE); // WHERE OetbCon2CombBack LIKE '%fooValue%'
     * $query->filterByOetbcon2combback(['foo', 'bar']); // WHERE OetbCon2CombBack IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2combback The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2combback($oetbcon2combback = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2combback)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2COMBBACK, $oetbcon2combback, $comparison);

        return $this;
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
     * @param mixed $oetbcon2frtallowamt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2frtallowamt($oetbcon2frtallowamt = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2FRTALLOWAMT, $oetbcon2frtallowamt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3ShipMoreOrdered column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3shipmoreordered('fooValue');   // WHERE OetbCon3ShipMoreOrdered = 'fooValue'
     * $query->filterByOetbcon3shipmoreordered('%fooValue%', Criteria::LIKE); // WHERE OetbCon3ShipMoreOrdered LIKE '%fooValue%'
     * $query->filterByOetbcon3shipmoreordered(['foo', 'bar']); // WHERE OetbCon3ShipMoreOrdered IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3shipmoreordered The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3shipmoreordered($oetbcon3shipmoreordered = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3shipmoreordered)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3SHIPMOREORDERED, $oetbcon3shipmoreordered, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3WarnShipMore column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3warnshipmore('fooValue');   // WHERE OetbCon3WarnShipMore = 'fooValue'
     * $query->filterByOetbcon3warnshipmore('%fooValue%', Criteria::LIKE); // WHERE OetbCon3WarnShipMore LIKE '%fooValue%'
     * $query->filterByOetbcon3warnshipmore(['foo', 'bar']); // WHERE OetbCon3WarnShipMore IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3warnshipmore The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3warnshipmore($oetbcon3warnshipmore = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3warnshipmore)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3WARNSHIPMORE, $oetbcon3warnshipmore, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3ProformaFromEso column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3proformafromeso('fooValue');   // WHERE OetbCon3ProformaFromEso = 'fooValue'
     * $query->filterByOetbcon3proformafromeso('%fooValue%', Criteria::LIKE); // WHERE OetbCon3ProformaFromEso LIKE '%fooValue%'
     * $query->filterByOetbcon3proformafromeso(['foo', 'bar']); // WHERE OetbCon3ProformaFromEso IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3proformafromeso The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3proformafromeso($oetbcon3proformafromeso = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3proformafromeso)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3PROFORMAFROMESO, $oetbcon3proformafromeso, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3PickPackCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3pickpackcode('fooValue');   // WHERE OetbCon3PickPackCode = 'fooValue'
     * $query->filterByOetbcon3pickpackcode('%fooValue%', Criteria::LIKE); // WHERE OetbCon3PickPackCode LIKE '%fooValue%'
     * $query->filterByOetbcon3pickpackcode(['foo', 'bar']); // WHERE OetbCon3PickPackCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3pickpackcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3pickpackcode($oetbcon3pickpackcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3pickpackcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3PICKPACKCODE, $oetbcon3pickpackcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2UseDept column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2usedept('fooValue');   // WHERE OetbCon2UseDept = 'fooValue'
     * $query->filterByOetbcon2usedept('%fooValue%', Criteria::LIKE); // WHERE OetbCon2UseDept LIKE '%fooValue%'
     * $query->filterByOetbcon2usedept(['foo', 'bar']); // WHERE OetbCon2UseDept IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2usedept The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2usedept($oetbcon2usedept = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2usedept)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2USEDEPT, $oetbcon2usedept, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2UseDivision column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2usedivision('fooValue');   // WHERE OetbCon2UseDivision = 'fooValue'
     * $query->filterByOetbcon2usedivision('%fooValue%', Criteria::LIKE); // WHERE OetbCon2UseDivision LIKE '%fooValue%'
     * $query->filterByOetbcon2usedivision(['foo', 'bar']); // WHERE OetbCon2UseDivision IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2usedivision The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2usedivision($oetbcon2usedivision = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2usedivision)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2USEDIVISION, $oetbcon2usedivision, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2DefMfeCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2defmfecode('fooValue');   // WHERE OetbCon2DefMfeCode = 'fooValue'
     * $query->filterByOetbcon2defmfecode('%fooValue%', Criteria::LIKE); // WHERE OetbCon2DefMfeCode LIKE '%fooValue%'
     * $query->filterByOetbcon2defmfecode(['foo', 'bar']); // WHERE OetbCon2DefMfeCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2defmfecode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2defmfecode($oetbcon2defmfecode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2defmfecode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2DEFMFECODE, $oetbcon2defmfecode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2ShowAvgCost column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2showavgcost('fooValue');   // WHERE OetbCon2ShowAvgCost = 'fooValue'
     * $query->filterByOetbcon2showavgcost('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ShowAvgCost LIKE '%fooValue%'
     * $query->filterByOetbcon2showavgcost(['foo', 'bar']); // WHERE OetbCon2ShowAvgCost IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2showavgcost The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2showavgcost($oetbcon2showavgcost = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2showavgcost)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SHOWAVGCOST, $oetbcon2showavgcost, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2FedEx column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2fedex('fooValue');   // WHERE OetbCon2FedEx = 'fooValue'
     * $query->filterByOetbcon2fedex('%fooValue%', Criteria::LIKE); // WHERE OetbCon2FedEx LIKE '%fooValue%'
     * $query->filterByOetbcon2fedex(['foo', 'bar']); // WHERE OetbCon2FedEx IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2fedex The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2fedex($oetbcon2fedex = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2fedex)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2FEDEX, $oetbcon2fedex, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3DefFrghtGrup column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3deffrghtgrup('fooValue');   // WHERE OetbCon3DefFrghtGrup = 'fooValue'
     * $query->filterByOetbcon3deffrghtgrup('%fooValue%', Criteria::LIKE); // WHERE OetbCon3DefFrghtGrup LIKE '%fooValue%'
     * $query->filterByOetbcon3deffrghtgrup(['foo', 'bar']); // WHERE OetbCon3DefFrghtGrup IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3deffrghtgrup The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3deffrghtgrup($oetbcon3deffrghtgrup = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3deffrghtgrup)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3DEFFRGHTGRUP, $oetbcon3deffrghtgrup, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3UpsMysqlDbname column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3upsmysqldbname('fooValue');   // WHERE OetbCon3UpsMysqlDbname = 'fooValue'
     * $query->filterByOetbcon3upsmysqldbname('%fooValue%', Criteria::LIKE); // WHERE OetbCon3UpsMysqlDbname LIKE '%fooValue%'
     * $query->filterByOetbcon3upsmysqldbname(['foo', 'bar']); // WHERE OetbCon3UpsMysqlDbname IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3upsmysqldbname The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3upsmysqldbname($oetbcon3upsmysqldbname = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3upsmysqldbname)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3UPSMYSQLDBNAME, $oetbcon3upsmysqldbname, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfUseOptCode column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseoptcode('fooValue');   // WHERE OetbConfUseOptCode = 'fooValue'
     * $query->filterByOetbconfuseoptcode('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseOptCode LIKE '%fooValue%'
     * $query->filterByOetbconfuseoptcode(['foo', 'bar']); // WHERE OetbConfUseOptCode IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfuseoptcode The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfuseoptcode($oetbconfuseoptcode = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseoptcode)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEOPTCODE, $oetbconfuseoptcode, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfScn4Opt column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfscn4opt('fooValue');   // WHERE OetbConfScn4Opt = 'fooValue'
     * $query->filterByOetbconfscn4opt('%fooValue%', Criteria::LIKE); // WHERE OetbConfScn4Opt LIKE '%fooValue%'
     * $query->filterByOetbconfscn4opt(['foo', 'bar']); // WHERE OetbConfScn4Opt IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfscn4opt The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfscn4opt($oetbconfscn4opt = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfscn4opt)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFSCN4OPT, $oetbconfscn4opt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2TakenByUse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2takenbyuse('fooValue');   // WHERE OetbCon2TakenByUse = 'fooValue'
     * $query->filterByOetbcon2takenbyuse('%fooValue%', Criteria::LIKE); // WHERE OetbCon2TakenByUse LIKE '%fooValue%'
     * $query->filterByOetbcon2takenbyuse(['foo', 'bar']); // WHERE OetbCon2TakenByUse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2takenbyuse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2takenbyuse($oetbcon2takenbyuse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2takenbyuse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYUSE, $oetbcon2takenbyuse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2TakenByLogin column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2takenbylogin('fooValue');   // WHERE OetbCon2TakenByLogin = 'fooValue'
     * $query->filterByOetbcon2takenbylogin('%fooValue%', Criteria::LIKE); // WHERE OetbCon2TakenByLogin LIKE '%fooValue%'
     * $query->filterByOetbcon2takenbylogin(['foo', 'bar']); // WHERE OetbCon2TakenByLogin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2takenbylogin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2takenbylogin($oetbcon2takenbylogin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2takenbylogin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYLOGIN, $oetbcon2takenbylogin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2TakenByForce column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2takenbyforce('fooValue');   // WHERE OetbCon2TakenByForce = 'fooValue'
     * $query->filterByOetbcon2takenbyforce('%fooValue%', Criteria::LIKE); // WHERE OetbCon2TakenByForce LIKE '%fooValue%'
     * $query->filterByOetbcon2takenbyforce(['foo', 'bar']); // WHERE OetbCon2TakenByForce IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2takenbyforce The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2takenbyforce($oetbcon2takenbyforce = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2takenbyforce)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2TAKENBYFORCE, $oetbcon2takenbyforce, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2PickedByUse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2pickedbyuse('fooValue');   // WHERE OetbCon2PickedByUse = 'fooValue'
     * $query->filterByOetbcon2pickedbyuse('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PickedByUse LIKE '%fooValue%'
     * $query->filterByOetbcon2pickedbyuse(['foo', 'bar']); // WHERE OetbCon2PickedByUse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2pickedbyuse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2pickedbyuse($oetbcon2pickedbyuse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2pickedbyuse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYUSE, $oetbcon2pickedbyuse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2PickedByForce column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2pickedbyforce('fooValue');   // WHERE OetbCon2PickedByForce = 'fooValue'
     * $query->filterByOetbcon2pickedbyforce('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PickedByForce LIKE '%fooValue%'
     * $query->filterByOetbcon2pickedbyforce(['foo', 'bar']); // WHERE OetbCon2PickedByForce IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2pickedbyforce The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2pickedbyforce($oetbcon2pickedbyforce = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2pickedbyforce)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYFORCE, $oetbcon2pickedbyforce, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2PickedByProc column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2pickedbyproc('fooValue');   // WHERE OetbCon2PickedByProc = 'fooValue'
     * $query->filterByOetbcon2pickedbyproc('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PickedByProc LIKE '%fooValue%'
     * $query->filterByOetbcon2pickedbyproc(['foo', 'bar']); // WHERE OetbCon2PickedByProc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2pickedbyproc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2pickedbyproc($oetbcon2pickedbyproc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2pickedbyproc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PICKEDBYPROC, $oetbcon2pickedbyproc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2PackedByUse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2packedbyuse('fooValue');   // WHERE OetbCon2PackedByUse = 'fooValue'
     * $query->filterByOetbcon2packedbyuse('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PackedByUse LIKE '%fooValue%'
     * $query->filterByOetbcon2packedbyuse(['foo', 'bar']); // WHERE OetbCon2PackedByUse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2packedbyuse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2packedbyuse($oetbcon2packedbyuse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2packedbyuse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYUSE, $oetbcon2packedbyuse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2PackedByForce column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2packedbyforce('fooValue');   // WHERE OetbCon2PackedByForce = 'fooValue'
     * $query->filterByOetbcon2packedbyforce('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PackedByForce LIKE '%fooValue%'
     * $query->filterByOetbcon2packedbyforce(['foo', 'bar']); // WHERE OetbCon2PackedByForce IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2packedbyforce The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2packedbyforce($oetbcon2packedbyforce = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2packedbyforce)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PACKEDBYFORCE, $oetbcon2packedbyforce, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2VerifiedByUse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2verifiedbyuse('fooValue');   // WHERE OetbCon2VerifiedByUse = 'fooValue'
     * $query->filterByOetbcon2verifiedbyuse('%fooValue%', Criteria::LIKE); // WHERE OetbCon2VerifiedByUse LIKE '%fooValue%'
     * $query->filterByOetbcon2verifiedbyuse(['foo', 'bar']); // WHERE OetbCon2VerifiedByUse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2verifiedbyuse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2verifiedbyuse($oetbcon2verifiedbyuse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2verifiedbyuse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYUSE, $oetbcon2verifiedbyuse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2VerifiedByLogin column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2verifiedbylogin('fooValue');   // WHERE OetbCon2VerifiedByLogin = 'fooValue'
     * $query->filterByOetbcon2verifiedbylogin('%fooValue%', Criteria::LIKE); // WHERE OetbCon2VerifiedByLogin LIKE '%fooValue%'
     * $query->filterByOetbcon2verifiedbylogin(['foo', 'bar']); // WHERE OetbCon2VerifiedByLogin IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2verifiedbylogin The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2verifiedbylogin($oetbcon2verifiedbylogin = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2verifiedbylogin)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYLOGIN, $oetbcon2verifiedbylogin, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2VerifiedByForce column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2verifiedbyforce('fooValue');   // WHERE OetbCon2VerifiedByForce = 'fooValue'
     * $query->filterByOetbcon2verifiedbyforce('%fooValue%', Criteria::LIKE); // WHERE OetbCon2VerifiedByForce LIKE '%fooValue%'
     * $query->filterByOetbcon2verifiedbyforce(['foo', 'bar']); // WHERE OetbCon2VerifiedByForce IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2verifiedbyforce The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2verifiedbyforce($oetbcon2verifiedbyforce = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2verifiedbyforce)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2VERIFIEDBYFORCE, $oetbcon2verifiedbyforce, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfOptLabl1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfoptlabl1('fooValue');   // WHERE OetbConfOptLabl1 = 'fooValue'
     * $query->filterByOetbconfoptlabl1('%fooValue%', Criteria::LIKE); // WHERE OetbConfOptLabl1 LIKE '%fooValue%'
     * $query->filterByOetbconfoptlabl1(['foo', 'bar']); // WHERE OetbConfOptLabl1 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfoptlabl1 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfoptlabl1($oetbconfoptlabl1 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfoptlabl1)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL1, $oetbconfoptlabl1, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2Ucode1Force column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ucode1force('fooValue');   // WHERE OetbCon2Ucode1Force = 'fooValue'
     * $query->filterByOetbcon2ucode1force('%fooValue%', Criteria::LIKE); // WHERE OetbCon2Ucode1Force LIKE '%fooValue%'
     * $query->filterByOetbcon2ucode1force(['foo', 'bar']); // WHERE OetbCon2Ucode1Force IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2ucode1force The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2ucode1force($oetbcon2ucode1force = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ucode1force)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2UCODE1FORCE, $oetbcon2ucode1force, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfOptLabl2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfoptlabl2('fooValue');   // WHERE OetbConfOptLabl2 = 'fooValue'
     * $query->filterByOetbconfoptlabl2('%fooValue%', Criteria::LIKE); // WHERE OetbConfOptLabl2 LIKE '%fooValue%'
     * $query->filterByOetbconfoptlabl2(['foo', 'bar']); // WHERE OetbConfOptLabl2 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfoptlabl2 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfoptlabl2($oetbconfoptlabl2 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfoptlabl2)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL2, $oetbconfoptlabl2, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2Ucode2Force column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ucode2force('fooValue');   // WHERE OetbCon2Ucode2Force = 'fooValue'
     * $query->filterByOetbcon2ucode2force('%fooValue%', Criteria::LIKE); // WHERE OetbCon2Ucode2Force LIKE '%fooValue%'
     * $query->filterByOetbcon2ucode2force(['foo', 'bar']); // WHERE OetbCon2Ucode2Force IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2ucode2force The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2ucode2force($oetbcon2ucode2force = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ucode2force)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2UCODE2FORCE, $oetbcon2ucode2force, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfOptLabl3 column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfoptlabl3('fooValue');   // WHERE OetbConfOptLabl3 = 'fooValue'
     * $query->filterByOetbconfoptlabl3('%fooValue%', Criteria::LIKE); // WHERE OetbConfOptLabl3 LIKE '%fooValue%'
     * $query->filterByOetbconfoptlabl3(['foo', 'bar']); // WHERE OetbConfOptLabl3 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfoptlabl3 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfoptlabl3($oetbconfoptlabl3 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfoptlabl3)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL3, $oetbconfoptlabl3, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2Ucode3Force column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ucode3force('fooValue');   // WHERE OetbCon2Ucode3Force = 'fooValue'
     * $query->filterByOetbcon2ucode3force('%fooValue%', Criteria::LIKE); // WHERE OetbCon2Ucode3Force LIKE '%fooValue%'
     * $query->filterByOetbcon2ucode3force(['foo', 'bar']); // WHERE OetbCon2Ucode3Force IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2ucode3force The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2ucode3force($oetbcon2ucode3force = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ucode3force)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2UCODE3FORCE, $oetbcon2ucode3force, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfOptLabl4 column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfoptlabl4('fooValue');   // WHERE OetbConfOptLabl4 = 'fooValue'
     * $query->filterByOetbconfoptlabl4('%fooValue%', Criteria::LIKE); // WHERE OetbConfOptLabl4 LIKE '%fooValue%'
     * $query->filterByOetbconfoptlabl4(['foo', 'bar']); // WHERE OetbConfOptLabl4 IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfoptlabl4 The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfoptlabl4($oetbconfoptlabl4 = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfoptlabl4)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFOPTLABL4, $oetbconfoptlabl4, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2Ucode4Force column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2ucode4force('fooValue');   // WHERE OetbCon2Ucode4Force = 'fooValue'
     * $query->filterByOetbcon2ucode4force('%fooValue%', Criteria::LIKE); // WHERE OetbCon2Ucode4Force LIKE '%fooValue%'
     * $query->filterByOetbcon2ucode4force(['foo', 'bar']); // WHERE OetbCon2Ucode4Force IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2ucode4force The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2ucode4force($oetbcon2ucode4force = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2ucode4force)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2UCODE4FORCE, $oetbcon2ucode4force, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfVerifyAfterPack column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfverifyafterpack('fooValue');   // WHERE OetbConfVerifyAfterPack = 'fooValue'
     * $query->filterByOetbconfverifyafterpack('%fooValue%', Criteria::LIKE); // WHERE OetbConfVerifyAfterPack LIKE '%fooValue%'
     * $query->filterByOetbconfverifyafterpack(['foo', 'bar']); // WHERE OetbConfVerifyAfterPack IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfverifyafterpack The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfverifyafterpack($oetbconfverifyafterpack = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfverifyafterpack)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFVERIFYAFTERPACK, $oetbconfverifyafterpack, $comparison);

        return $this;
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
     * @param mixed $oetbconfhistyrsback The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfhistyrsback($oetbconfhistyrsback = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFHISTYRSBACK, $oetbconfhistyrsback, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfRqstCatlg column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfrqstcatlg('fooValue');   // WHERE OetbConfRqstCatlg = 'fooValue'
     * $query->filterByOetbconfrqstcatlg('%fooValue%', Criteria::LIKE); // WHERE OetbConfRqstCatlg LIKE '%fooValue%'
     * $query->filterByOetbconfrqstcatlg(['foo', 'bar']); // WHERE OetbConfRqstCatlg IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfrqstcatlg The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfrqstcatlg($oetbconfrqstcatlg = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfrqstcatlg)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFRQSTCATLG, $oetbconfrqstcatlg, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2ConPick column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2conpick('fooValue');   // WHERE OetbCon2ConPick = 'fooValue'
     * $query->filterByOetbcon2conpick('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ConPick LIKE '%fooValue%'
     * $query->filterByOetbcon2conpick(['foo', 'bar']); // WHERE OetbCon2ConPick IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2conpick The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2conpick($oetbcon2conpick = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2conpick)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2CONPICK, $oetbcon2conpick, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2AllowPick column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2allowpick('fooValue');   // WHERE OetbCon2AllowPick = 'fooValue'
     * $query->filterByOetbcon2allowpick('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AllowPick LIKE '%fooValue%'
     * $query->filterByOetbcon2allowpick(['foo', 'bar']); // WHERE OetbCon2AllowPick IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2allowpick The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2allowpick($oetbcon2allowpick = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2allowpick)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWPICK, $oetbcon2allowpick, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2CombineSame column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2combinesame('fooValue');   // WHERE OetbCon2CombineSame = 'fooValue'
     * $query->filterByOetbcon2combinesame('%fooValue%', Criteria::LIKE); // WHERE OetbCon2CombineSame LIKE '%fooValue%'
     * $query->filterByOetbcon2combinesame(['foo', 'bar']); // WHERE OetbCon2CombineSame IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2combinesame The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2combinesame($oetbcon2combinesame = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2combinesame)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2COMBINESAME, $oetbcon2combinesame, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3AutoVerNItems column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3autovernitems('fooValue');   // WHERE OetbCon3AutoVerNItems = 'fooValue'
     * $query->filterByOetbcon3autovernitems('%fooValue%', Criteria::LIKE); // WHERE OetbCon3AutoVerNItems LIKE '%fooValue%'
     * $query->filterByOetbcon3autovernitems(['foo', 'bar']); // WHERE OetbCon3AutoVerNItems IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3autovernitems The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3autovernitems($oetbcon3autovernitems = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3autovernitems)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3AUTOVERNITEMS, $oetbcon3autovernitems, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2AllowZeroQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2allowzeroqty('fooValue');   // WHERE OetbCon2AllowZeroQty = 'fooValue'
     * $query->filterByOetbcon2allowzeroqty('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AllowZeroQty LIKE '%fooValue%'
     * $query->filterByOetbcon2allowzeroqty(['foo', 'bar']); // WHERE OetbCon2AllowZeroQty IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2allowzeroqty The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2allowzeroqty($oetbcon2allowzeroqty = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2allowzeroqty)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWZEROQTY, $oetbcon2allowzeroqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2AllowInvalidWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2allowinvalidwhse('fooValue');   // WHERE OetbCon2AllowInvalidWhse = 'fooValue'
     * $query->filterByOetbcon2allowinvalidwhse('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AllowInvalidWhse LIKE '%fooValue%'
     * $query->filterByOetbcon2allowinvalidwhse(['foo', 'bar']); // WHERE OetbCon2AllowInvalidWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2allowinvalidwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2allowinvalidwhse($oetbcon2allowinvalidwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2allowinvalidwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ALLOWINVALIDWHSE, $oetbcon2allowinvalidwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2ShowEdiInfo column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2showediinfo('fooValue');   // WHERE OetbCon2ShowEdiInfo = 'fooValue'
     * $query->filterByOetbcon2showediinfo('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ShowEdiInfo LIKE '%fooValue%'
     * $query->filterByOetbcon2showediinfo(['foo', 'bar']); // WHERE OetbCon2ShowEdiInfo IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2showediinfo The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2showediinfo($oetbcon2showediinfo = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2showediinfo)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2SHOWEDIINFO, $oetbcon2showediinfo, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3EsoShowQuotLink column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3esoshowquotlink('fooValue');   // WHERE OetbCon3EsoShowQuotLink = 'fooValue'
     * $query->filterByOetbcon3esoshowquotlink('%fooValue%', Criteria::LIKE); // WHERE OetbCon3EsoShowQuotLink LIKE '%fooValue%'
     * $query->filterByOetbcon3esoshowquotlink(['foo', 'bar']); // WHERE OetbCon3EsoShowQuotLink IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3esoshowquotlink The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3esoshowquotlink($oetbcon3esoshowquotlink = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3esoshowquotlink)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3ESOSHOWQUOTLINK, $oetbcon3esoshowquotlink, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3EsoShowWipLink column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3esoshowwiplink('fooValue');   // WHERE OetbCon3EsoShowWipLink = 'fooValue'
     * $query->filterByOetbcon3esoshowwiplink('%fooValue%', Criteria::LIKE); // WHERE OetbCon3EsoShowWipLink LIKE '%fooValue%'
     * $query->filterByOetbcon3esoshowwiplink(['foo', 'bar']); // WHERE OetbCon3EsoShowWipLink IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3esoshowwiplink The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3esoshowwiplink($oetbcon3esoshowwiplink = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3esoshowwiplink)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3ESOSHOWWIPLINK, $oetbcon3esoshowwiplink, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2AddOnSales column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2addonsales('fooValue');   // WHERE OetbCon2AddOnSales = 'fooValue'
     * $query->filterByOetbcon2addonsales('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AddOnSales LIKE '%fooValue%'
     * $query->filterByOetbcon2addonsales(['foo', 'bar']); // WHERE OetbCon2AddOnSales IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2addonsales The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2addonsales($oetbcon2addonsales = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2addonsales)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2ADDONSALES, $oetbcon2addonsales, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2ForcedBkord column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2forcedbkord('fooValue');   // WHERE OetbCon2ForcedBkord = 'fooValue'
     * $query->filterByOetbcon2forcedbkord('%fooValue%', Criteria::LIKE); // WHERE OetbCon2ForcedBkord LIKE '%fooValue%'
     * $query->filterByOetbcon2forcedbkord(['foo', 'bar']); // WHERE OetbCon2ForcedBkord IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2forcedbkord The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2forcedbkord($oetbcon2forcedbkord = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2forcedbkord)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2FORCEDBKORD, $oetbcon2forcedbkord, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2UpdtPrcDisc column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2updtprcdisc('fooValue');   // WHERE OetbCon2UpdtPrcDisc = 'fooValue'
     * $query->filterByOetbcon2updtprcdisc('%fooValue%', Criteria::LIKE); // WHERE OetbCon2UpdtPrcDisc LIKE '%fooValue%'
     * $query->filterByOetbcon2updtprcdisc(['foo', 'bar']); // WHERE OetbCon2UpdtPrcDisc IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2updtprcdisc The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2updtprcdisc($oetbcon2updtprcdisc = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2updtprcdisc)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2UPDTPRCDISC, $oetbcon2updtprcdisc, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2AutoPack column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2autopack('fooValue');   // WHERE OetbCon2AutoPack = 'fooValue'
     * $query->filterByOetbcon2autopack('%fooValue%', Criteria::LIKE); // WHERE OetbCon2AutoPack LIKE '%fooValue%'
     * $query->filterByOetbcon2autopack(['foo', 'bar']); // WHERE OetbCon2AutoPack IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2autopack The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2autopack($oetbcon2autopack = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2autopack)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2AUTOPACK, $oetbcon2autopack, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2PickBoPrtZqts column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2pickboprtzqts('fooValue');   // WHERE OetbCon2PickBoPrtZqts = 'fooValue'
     * $query->filterByOetbcon2pickboprtzqts('%fooValue%', Criteria::LIKE); // WHERE OetbCon2PickBoPrtZqts LIKE '%fooValue%'
     * $query->filterByOetbcon2pickboprtzqts(['foo', 'bar']); // WHERE OetbCon2PickBoPrtZqts IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2pickboprtzqts The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2pickboprtzqts($oetbcon2pickboprtzqts = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2pickboprtzqts)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2PICKBOPRTZQTS, $oetbcon2pickboprtzqts, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3Pick00NoShip column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3pick00noship('fooValue');   // WHERE OetbCon3Pick00NoShip = 'fooValue'
     * $query->filterByOetbcon3pick00noship('%fooValue%', Criteria::LIKE); // WHERE OetbCon3Pick00NoShip LIKE '%fooValue%'
     * $query->filterByOetbcon3pick00noship(['foo', 'bar']); // WHERE OetbCon3Pick00NoShip IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3pick00noship The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3pick00noship($oetbcon3pick00noship = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3pick00noship)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3PICK00NOSHIP, $oetbcon3pick00noship, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2StandOrdLead column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2standordlead('fooValue');   // WHERE OetbCon2StandOrdLead = 'fooValue'
     * $query->filterByOetbcon2standordlead('%fooValue%', Criteria::LIKE); // WHERE OetbCon2StandOrdLead LIKE '%fooValue%'
     * $query->filterByOetbcon2standordlead(['foo', 'bar']); // WHERE OetbCon2StandOrdLead IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2standordlead The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2standordlead($oetbcon2standordlead = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2standordlead)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDLEAD, $oetbcon2standordlead, $comparison);

        return $this;
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
     * @param mixed $oetbcon2standordamnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2standordamnt($oetbcon2standordamnt = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2STANDORDAMNT, $oetbcon2standordamnt, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2InactItemCntrl column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2inactitemcntrl('fooValue');   // WHERE OetbCon2InactItemCntrl = 'fooValue'
     * $query->filterByOetbcon2inactitemcntrl('%fooValue%', Criteria::LIKE); // WHERE OetbCon2InactItemCntrl LIKE '%fooValue%'
     * $query->filterByOetbcon2inactitemcntrl(['foo', 'bar']); // WHERE OetbCon2InactItemCntrl IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2inactitemcntrl The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2inactitemcntrl($oetbcon2inactitemcntrl = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2inactitemcntrl)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2INACTITEMCNTRL, $oetbcon2inactitemcntrl, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon2UseItemRef column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon2useitemref('fooValue');   // WHERE OetbCon2UseItemRef = 'fooValue'
     * $query->filterByOetbcon2useitemref('%fooValue%', Criteria::LIKE); // WHERE OetbCon2UseItemRef LIKE '%fooValue%'
     * $query->filterByOetbcon2useitemref(['foo', 'bar']); // WHERE OetbCon2UseItemRef IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon2useitemref The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon2useitemref($oetbcon2useitemref = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon2useitemref)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON2USEITEMREF, $oetbcon2useitemref, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3UpsNaftaRecords column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3upsnaftarecords('fooValue');   // WHERE OetbCon3UpsNaftaRecords = 'fooValue'
     * $query->filterByOetbcon3upsnaftarecords('%fooValue%', Criteria::LIKE); // WHERE OetbCon3UpsNaftaRecords LIKE '%fooValue%'
     * $query->filterByOetbcon3upsnaftarecords(['foo', 'bar']); // WHERE OetbCon3UpsNaftaRecords IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3upsnaftarecords The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3upsnaftarecords($oetbcon3upsnaftarecords = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3upsnaftarecords)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3UPSNAFTARECORDS, $oetbcon3upsnaftarecords, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3SopLotLikeNorm column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3soplotlikenorm('fooValue');   // WHERE OetbCon3SopLotLikeNorm = 'fooValue'
     * $query->filterByOetbcon3soplotlikenorm('%fooValue%', Criteria::LIKE); // WHERE OetbCon3SopLotLikeNorm LIKE '%fooValue%'
     * $query->filterByOetbcon3soplotlikenorm(['foo', 'bar']); // WHERE OetbCon3SopLotLikeNorm IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3soplotlikenorm The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3soplotlikenorm($oetbcon3soplotlikenorm = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3soplotlikenorm)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3SOPLOTLIKENORM, $oetbcon3soplotlikenorm, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfDfltShipWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdfltshipwhse('fooValue');   // WHERE OetbConfDfltShipWhse = 'fooValue'
     * $query->filterByOetbconfdfltshipwhse('%fooValue%', Criteria::LIKE); // WHERE OetbConfDfltShipWhse LIKE '%fooValue%'
     * $query->filterByOetbconfdfltshipwhse(['foo', 'bar']); // WHERE OetbConfDfltShipWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfdfltshipwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdfltshipwhse($oetbconfdfltshipwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdfltshipwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDFLTSHIPWHSE, $oetbconfdfltshipwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfDfltOrigWhse column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfdfltorigwhse('fooValue');   // WHERE OetbConfDfltOrigWhse = 'fooValue'
     * $query->filterByOetbconfdfltorigwhse('%fooValue%', Criteria::LIKE); // WHERE OetbConfDfltOrigWhse LIKE '%fooValue%'
     * $query->filterByOetbconfdfltorigwhse(['foo', 'bar']); // WHERE OetbConfDfltOrigWhse IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfdfltorigwhse The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfdfltorigwhse($oetbconfdfltorigwhse = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfdfltorigwhse)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFDFLTORIGWHSE, $oetbconfdfltorigwhse, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfInvcWithPack column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfinvcwithpack('fooValue');   // WHERE OetbConfInvcWithPack = 'fooValue'
     * $query->filterByOetbconfinvcwithpack('%fooValue%', Criteria::LIKE); // WHERE OetbConfInvcWithPack LIKE '%fooValue%'
     * $query->filterByOetbconfinvcwithpack(['foo', 'bar']); // WHERE OetbConfInvcWithPack IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfinvcwithpack The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfinvcwithpack($oetbconfinvcwithpack = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfinvcwithpack)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFINVCWITHPACK, $oetbconfinvcwithpack, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfCarryCntrQty column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfcarrycntrqty('fooValue');   // WHERE OetbConfCarryCntrQty = 'fooValue'
     * $query->filterByOetbconfcarrycntrqty('%fooValue%', Criteria::LIKE); // WHERE OetbConfCarryCntrQty LIKE '%fooValue%'
     * $query->filterByOetbconfcarrycntrqty(['foo', 'bar']); // WHERE OetbConfCarryCntrQty IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfcarrycntrqty The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfcarrycntrqty($oetbconfcarrycntrqty = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfcarrycntrqty)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFCARRYCNTRQTY, $oetbconfcarrycntrqty, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3UseOrdrAs column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3useordras('fooValue');   // WHERE OetbCon3UseOrdrAs = 'fooValue'
     * $query->filterByOetbcon3useordras('%fooValue%', Criteria::LIKE); // WHERE OetbCon3UseOrdrAs LIKE '%fooValue%'
     * $query->filterByOetbcon3useordras(['foo', 'bar']); // WHERE OetbCon3UseOrdrAs IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3useordras The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3useordras($oetbcon3useordras = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3useordras)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3USEORDRAS, $oetbcon3useordras, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbConfUseOrdrSource column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbconfuseordrsource('fooValue');   // WHERE OetbConfUseOrdrSource = 'fooValue'
     * $query->filterByOetbconfuseordrsource('%fooValue%', Criteria::LIKE); // WHERE OetbConfUseOrdrSource LIKE '%fooValue%'
     * $query->filterByOetbconfuseordrsource(['foo', 'bar']); // WHERE OetbConfUseOrdrSource IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbconfuseordrsource The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbconfuseordrsource($oetbconfuseordrsource = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbconfuseordrsource)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCONFUSEORDRSOURCE, $oetbconfuseordrsource, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3CcProcessor column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3ccprocessor('fooValue');   // WHERE OetbCon3CcProcessor = 'fooValue'
     * $query->filterByOetbcon3ccprocessor('%fooValue%', Criteria::LIKE); // WHERE OetbCon3CcProcessor LIKE '%fooValue%'
     * $query->filterByOetbcon3ccprocessor(['foo', 'bar']); // WHERE OetbCon3CcProcessor IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3ccprocessor The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3ccprocessor($oetbcon3ccprocessor = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3ccprocessor)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3CCPROCESSOR, $oetbcon3ccprocessor, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3CreditCardCap column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3creditcardcap('fooValue');   // WHERE OetbCon3CreditCardCap = 'fooValue'
     * $query->filterByOetbcon3creditcardcap('%fooValue%', Criteria::LIKE); // WHERE OetbCon3CreditCardCap LIKE '%fooValue%'
     * $query->filterByOetbcon3creditcardcap(['foo', 'bar']); // WHERE OetbCon3CreditCardCap IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3creditcardcap The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3creditcardcap($oetbcon3creditcardcap = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3creditcardcap)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3CREDITCARDCAP, $oetbcon3creditcardcap, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3KeyOrCcCap column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3keyorcccap('fooValue');   // WHERE OetbCon3KeyOrCcCap = 'fooValue'
     * $query->filterByOetbcon3keyorcccap('%fooValue%', Criteria::LIKE); // WHERE OetbCon3KeyOrCcCap LIKE '%fooValue%'
     * $query->filterByOetbcon3keyorcccap(['foo', 'bar']); // WHERE OetbCon3KeyOrCcCap IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3keyorcccap The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3keyorcccap($oetbcon3keyorcccap = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3keyorcccap)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3KEYORCCCAP, $oetbcon3keyorcccap, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3CcXOverlay column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3ccxoverlay('fooValue');   // WHERE OetbCon3CcXOverlay = 'fooValue'
     * $query->filterByOetbcon3ccxoverlay('%fooValue%', Criteria::LIKE); // WHERE OetbCon3CcXOverlay LIKE '%fooValue%'
     * $query->filterByOetbcon3ccxoverlay(['foo', 'bar']); // WHERE OetbCon3CcXOverlay IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3ccxoverlay The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3ccxoverlay($oetbcon3ccxoverlay = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3ccxoverlay)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3CCXOVERLAY, $oetbcon3ccxoverlay, $comparison);

        return $this;
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
     * @param mixed $oetbcon3cctimeout The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3cctimeout($oetbcon3cctimeout = null, ?string $comparison = null)
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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3CCTIMEOUT, $oetbcon3cctimeout, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3SignatureCapture column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3signaturecapture('fooValue');   // WHERE OetbCon3SignatureCapture = 'fooValue'
     * $query->filterByOetbcon3signaturecapture('%fooValue%', Criteria::LIKE); // WHERE OetbCon3SignatureCapture LIKE '%fooValue%'
     * $query->filterByOetbcon3signaturecapture(['foo', 'bar']); // WHERE OetbCon3SignatureCapture IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3signaturecapture The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3signaturecapture($oetbcon3signaturecapture = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3signaturecapture)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3SIGNATURECAPTURE, $oetbcon3signaturecapture, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3CcPreapproval column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3ccpreapproval('fooValue');   // WHERE OetbCon3CcPreapproval = 'fooValue'
     * $query->filterByOetbcon3ccpreapproval('%fooValue%', Criteria::LIKE); // WHERE OetbCon3CcPreapproval LIKE '%fooValue%'
     * $query->filterByOetbcon3ccpreapproval(['foo', 'bar']); // WHERE OetbCon3CcPreapproval IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3ccpreapproval The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3ccpreapproval($oetbcon3ccpreapproval = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3ccpreapproval)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3CCPREAPPROVAL, $oetbcon3ccpreapproval, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3ForceCcNbrEntry column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3forceccnbrentry('fooValue');   // WHERE OetbCon3ForceCcNbrEntry = 'fooValue'
     * $query->filterByOetbcon3forceccnbrentry('%fooValue%', Criteria::LIKE); // WHERE OetbCon3ForceCcNbrEntry LIKE '%fooValue%'
     * $query->filterByOetbcon3forceccnbrentry(['foo', 'bar']); // WHERE OetbCon3ForceCcNbrEntry IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3forceccnbrentry The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3forceccnbrentry($oetbcon3forceccnbrentry = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3forceccnbrentry)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3FORCECCNBRENTRY, $oetbcon3forceccnbrentry, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3IntrItemNotes column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3intritemnotes('fooValue');   // WHERE OetbCon3IntrItemNotes = 'fooValue'
     * $query->filterByOetbcon3intritemnotes('%fooValue%', Criteria::LIKE); // WHERE OetbCon3IntrItemNotes LIKE '%fooValue%'
     * $query->filterByOetbcon3intritemnotes(['foo', 'bar']); // WHERE OetbCon3IntrItemNotes IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3intritemnotes The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3intritemnotes($oetbcon3intritemnotes = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3intritemnotes)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3INTRITEMNOTES, $oetbcon3intritemnotes, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3MtrCert column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3mtrcert('fooValue');   // WHERE OetbCon3MtrCert = 'fooValue'
     * $query->filterByOetbcon3mtrcert('%fooValue%', Criteria::LIKE); // WHERE OetbCon3MtrCert LIKE '%fooValue%'
     * $query->filterByOetbcon3mtrcert(['foo', 'bar']); // WHERE OetbCon3MtrCert IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3mtrcert The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3mtrcert($oetbcon3mtrcert = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3mtrcert)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3MTRCERT, $oetbcon3mtrcert, $comparison);

        return $this;
    }

    /**
     * Filter the query on the OetbCon3CofcCert column
     *
     * Example usage:
     * <code>
     * $query->filterByOetbcon3cofccert('fooValue');   // WHERE OetbCon3CofcCert = 'fooValue'
     * $query->filterByOetbcon3cofccert('%fooValue%', Criteria::LIKE); // WHERE OetbCon3CofcCert LIKE '%fooValue%'
     * $query->filterByOetbcon3cofccert(['foo', 'bar']); // WHERE OetbCon3CofcCert IN ('foo', 'bar')
     * </code>
     *
     * @param string|string[] $oetbcon3cofccert The value to use as filter.
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOetbcon3cofccert($oetbcon3cofccert = null, ?string $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oetbcon3cofccert)) {
                $comparison = Criteria::IN;
            }
        }

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_OETBCON3COFCCERT, $oetbcon3cofccert, $comparison);

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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_DATEUPDTD, $dateupdtd, $comparison);

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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_TIMEUPDTD, $timeupdtd, $comparison);

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

        $this->addUsingAlias(ConfigSalesOrderTableMap::COL_DUMMY, $dummy, $comparison);

        return $this;
    }

    /**
     * Exclude object from result
     *
     * @param ChildConfigSalesOrder $configSalesOrder Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
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
    public function doDeleteAll(?ConnectionInterface $con = null): int
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
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
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

}
