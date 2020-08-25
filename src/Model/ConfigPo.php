<?php

use Base\ConfigPo as BaseConfigPo;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'po_config' table.
 */
class ConfigPo extends BaseConfigPo {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const VALUE_TRUE = 'Y';
	const VALUE_HEAD_DETAIL_DETAIL = 'D';
	const VALUE_HEAD_DETAIL_HEAD   = 'H';

	const DATE_ACKNOWLEDGED_ACKNOWLEDGE = 'A';
	const DATE_ACKNOWLEDGED_ETA = 'E';
	const DATE_ACKNWOLEDGED_DESCRIPTIONS = array(
		'A' => 'acknowledge',
		'E' => 'ETA'
	);

	const DATE_CANCELED_CANCEL = 'C';
	const DATE_CANCELED_REVISED = 'R';
	const DATE_CANCELED_DESCRIPTIONS = array(
		'C' => 'canceled',
		'R' => 'revised'
	);


	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'decimal_places_cost'       => 'potbconfvxmroundpos',
		'allow_change_cost'         => 'potbconfallowchgcost',
		'allow_po_item_notes'       => 'potbconfeditpoitemnotes',
		'date_ack_or_eta'           => 'potbconfackoretadate',
		'date_cancel_or_revised'    => 'potbconfcancorrshpdate',
		'edit_date_ship_head_det'   => 'potbconfeditshipdate',
		'edit_date_expect_head_det' => 'potbconfeditexptdate',
		'edit_date_cancel_head_det' => 'potbconfeditcancdate',
		'edit_date_ack_head_det'    => 'potbconfeditackdate',
	);

	/**
	 * Return if PO Item Notes are allowed
	 * @return bool
	 */
	public function allow_po_item_notes() {
		return $this->allow_po_item_notes == self::VALUE_TRUE;
	}

	/**
	 * Returns Description (label) for what Cancel Date means
	 * @return string
	 */
	public function description_date_canceled() {
		return self::DATE_CANCELED_DESCRIPTIONS[$this->date_cancel_or_revised];
	}

	/**
	 * Returns Description (label) for what Cancel Date means
	 * @return string
	 */
	public function description_date_acknowledged() {
		return self::DATE_ACKNWOLEDGED_DESCRIPTIONS[$this->date_ack_or_eta];
	}

	/**
	 * Return if Date Expected is edited on Detail
	 * @return bool
	 */
	public function edit_date_expected_detail() {
		return $this->edit_date_expect_head_det == self::VALUE_HEAD_DETAIL_DETAIL;
	}

	/**
	 * Return if Date Acknowledged is edited on Detail
	 * @return bool
	 */
	public function edit_date_acknowledged_detail() {
		return $this->edit_date_ack_head_det == self::VALUE_HEAD_DETAIL_DETAIL;
	}

	/**
	 * Return if Date Canceled is edited on Detail
	 * @return bool
	 */
	public function edit_date_canceled_detail() {
		return $this->edit_date_cancel_head_det == self::VALUE_HEAD_DETAIL_DETAIL;
	}

	/**
	 * Return if Date Shipped is edited on Detail
	 * @return bool
	 */
	public function edit_date_shipped_detail() {
		return $this->edit_date_ship_head_det == self::VALUE_HEAD_DETAIL_DETAIL;
	}
}
