<?php

use Base\ItemWhseOrderNote as BaseItemWhseOrderNote;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_item_wh_order' table.
 */
class ItemWhseOrderNote extends BaseItemWhseOrderNote {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const FORM_TRUE  = 'Y';
	const FORM_FALSE = 'N';
	const KEY2_APPEND = 'O';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'             => 'qntype',
		'description'      => 'qntypedesc',
		'itemid'           => 'inititemnbr',
		'warehouseid'      => 'intbwarehouse',
		'pickticket'       => 'qnordrpickticket',
		'packticket'       => 'qnordrpackticket',
		'invoice'          => 'qnordrinvoice',
		'acknowledgement'  => 'qnordracknow',
		'quote'            => 'qnordrquote',
		'purchaseorder'    => 'qnordrpurchordr',
		'ordertransfer'    => 'qnordrtransfer',
		'fabpo'            => 'qnordrfabpo',
		'form'             => 'qnform',
		'sequence'      => 'qnseq',
		'note'          => 'qnnote',
		'key2'          => 'qnkey2',
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
		$form .= $this->acknowledgement.$this->quote;
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
		$key2 = $key2_itemID.$this->warehouseid.self::KEY2_APPEND;
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
		$item->setPickticket(self::FORM_FALSE);
		$item->setPackticket(self::FORM_FALSE);
		$item->setInvoice(self::FORM_FALSE);
		$item->setAcknowledgement(self::FORM_FALSE);
		$item->setQuote(self::FORM_FALSE);
		$item->setPurchaseorder(self::FORM_FALSE);
		$item->setOrdertransfer(self::FORM_FALSE);
		$item->generateForm();
		return $item;
	}
}
