<?php

use Base\ConfigSalesOrder as BaseConfigSalesOrder;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'so_config' table.
 */
class ConfigSalesOrder extends BaseConfigSalesOrder {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const YN_TRUE = 'Y';

	/**
	 * Request Catalog Code
	 * P = Program
	 * C = Catalog
	 * N = None
	 * @var string
	 */
	protected $oetbconfrqstcatlg;

	/**
	 * Request Catalog Code
	 * H = Head
	 * D = Detail
	 * @var string
	 */
	protected $oetbconfrqstheaddtl;

	/**
	 * Default Ship Warehouse
	 * C = Customer
	 * L = Login
	 * @var string
	 */
	protected $oetbconfdfltshipwhse;

	const SHIP_WHSE_CUSTOMER = 'C';
	const SHIP_WHSE_LOGIN    = 'L';

	const REQUEST_DATE_HEADER = 'H';
	const REQUEST_DATE_DETAIL = 'D';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'request_catalog'   => 'oetbconfrqstcatlg',
		'freightin'         => 'oetbconffrtin',
		'freight_amt'       => 'oetbcon2frtallowamt',
		'note_default_pick' => 'oetbconfdefpick',
		'note_default_pack' => 'oetbconfdefpack',
		'note_default_invoice' => 'oetbconfdefinvc',
		'note_default_acknowledgement' => 'oetbconfdefack',
		'decimal_places'           => 'oetbconfdecplaces',
		'decimal_places_qty'       => 'oetbconfdecplaces',
		'decimal_places_price'     => 'oetbconfdecordrpric',
		'allow_change_price'       => 'oetbconfchgpric',
		'allowpricechange'         => 'oetbconfchgpric',
		'use_core_items'           => 'oetbcon2usecore',
		'update_pdm_from_cxm'      => 'oetbcon2updtprcdisc',
		'requestdate'              => 'OetbConfRqstHeadDtl',
		'allow_overpick'           => 'OetbCon3ShipMoreOrdered',
		'overpick'                 => 'OetbCon3ShipMoreOrdered',
		'showOverPickMsg'          => 'OetbCon3WarnShipMore',
		'default_ship_whse'        => 'oetbconfdfltshipwhse',
		'pickingtype'              => 'oetbCon3pickpackcode',
		'freightAllowAmt'          => 'oetbcon2frtallowamt',
		'providerouting'           => 'oetbcon2providerouting',
		'vso_makeorderchanges' => 'oetbCon2ChgOrder',
		'vso_verifycomplete'   => 'oetbCon2VerComp',
		'vso_printinvoice'     => 'oetbCon2PrtInv',
		'usecanceldate'        => 'oetbconfUsecancDate',
		'useordnasinvnbr'      => 'oetbconfuseordrnbr',
	);

	/**
	 * Return If Order Number is same as Invoice Number
	 * @return bool
	 */
	public function useOrdnAsInvnbr() {
		return $this->useordnasinvnbr == self::YN_TRUE;
	}

	/**
	 * Return If Overpicking is allowed
	 * @return bool
	 */
	public function allowOverpick() {
		return $this->overpick == self::YN_TRUE;
	}

	/**
	 * Return if system should provide Routing
	 * @return bool
	 */
	public function provideRouting() {
		return $this->providerouting == self::YN_TRUE;
	}

	/**
	 * Returns if the Request Type is Program
	 * @return bool
	 */
	public function isRequestProgram() {
		return strtoupper($this->request_catalog) == 'P';
	}

	/**
	 * Returns if Freight in
	 * @return bool
	 */
	public function isFreightin() {
		return strtoupper($this->freightin) == 'Y';
	}

	/**
	 * Returns if the Freight Allowed In Amt
	 * @return bool
	 */
	public function getFreightAllowedAmt() {
		return $this->freight_amt;
	}

	/**
	 * Returns if Core Items Are Allowed
	 * @return bool
	 */
	public function useCoreItems() {
		return strtoupper($this->use_core_items) == 'Y';
	}

	/**
	 * Return if CXM can update PDM
	 * @return bool
	 */
	public function updatePdmFromCxm() {
		return strtoupper($this->update_pdm_from_cxm) == 'Y';
	}

	/**
	 * Return if Request is set on Header
	 * @return bool
	 */
	public function requestDateHeader() {
		return strtoupper($this->requestdate) == self::REQUEST_DATE_HEADER;
	}
	
	/**
	 * Return if Request is set on Detail Lines
	 * @return bool
	 */
	public function requestDateDetail() {
		return strtoupper($this->requestdate) == self::REQUEST_DATE_DETAIL;
	}
	
/* =============================================================
	Legacy Functions
============================================================= */
	public function is_request_program() {return $this->isRequestProgram();}
	public function is_freightin() {return $this->isFreightin();}
	public function get_freight_allowed_amt() {return $this->getFreightAllowedAmt();}
	public function use_core_items() {return $this->useCoreItems();}
	public function update_pdm_from_cxm() {return $this->updatePdmFromCxm();}
	public function request_date_header() {return $this->requestDateHeader();}
	public function request_date_detail() {return $this->requestDateDetail();}
}
