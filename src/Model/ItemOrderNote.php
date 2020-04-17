<?php

use Base\ItemOrderNote as BaseItemOrderNote;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_item_order' table.
 */
class ItemOrderNote extends BaseItemOrderNote {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'ITEM';
	const DESC = 'Item Order Notes';
	const FORM_TRUE  = 'Y';
	const FORM_FALSE = 'N';
	const KEY2_APPEND = 'O';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'             => 'QnType',
		'description'      => 'QnTypeDesc',
		'itemid'           => 'InitItemNbr',
		'pickticket'       => 'qnordrpickticket',
		'packticket'       => 'qnordrpackticket',
		'invoice'          => 'qnordrinvoice',
		'acknowledgement'  => 'qnordracknow',
		'quote'            => 'qnordrquote',
		'purchaseorder'    => 'qnordrpurchordr',
		'ordertransfer'    => 'qnordrordrtransfer',
		'fabpo'            => 'qnordrorfabpo',
		'form'             => 'qnform',
		'sequence'      => 'qnseq',
		'note'          => 'qnnote',
		'key2'          => 'qcnokey2',
		'date'          => 'dateupdtd',
		'time'          => 'timeupdtd'
	);

	/**
	 * Sets Form
	 * NOTE: Form = pickticket + packticket + invoice + acknowledgement +
	 *  quote + purchaseorder + ordertransfer + fabpo
	 *
	 * @return string
	 */
	public function generateForm() {
		$form = $this->pickticket.$this->packticket.$this->invoice;
		$form .= $this->acknowledgment.$this->quote;
		$form .= $this->purchaseorder.$this->ordertransfer.$this->fabpo;
		$this->setForm($form);
	}

	/**
	 * Sets generated Key2
	 * NOTE: Key2 = ItemID followed by the Key2 Append
	 *
	 * @return string
	 */
	public function generateKey2() {
		$key2_itemID = str_pad($this->itemid , ItemMasterItem::LENGTH_ITEMID, " ", STR_PAD_RIGHT);
		$key2 = $key2_itemID.self::KEY2_APPEND;
		$this->setKey2($key2);
	}

	/**
	 * Return new ItemOrderNote
	 *
	 * @return void
	 */
	public static function new() {
		$item = new ItemOrderNote();
		$item->setType(self::TYPE);
		$item->setDescription(self::DESC);
		$item->setPickTicket(self::FORM_FALSE);
		$item->setPackTicket(self::FORM_FALSE);
		$item->setInvoice(self::FORM_FALSE);
		$item->setAcknowledgement(self::FORM_FALSE);
		$item->setQuote(self::FORM_FALSE);
		$item->setPurchaseorder(self::FORM_FALSE);
		$item->setorderTransfer(self::FORM_FALSE);
		$item->generateForm();
		return $item;
	}
}
