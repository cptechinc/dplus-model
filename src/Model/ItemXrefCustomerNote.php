<?php

use Base\ItemXrefCustomerNote as BaseItemXrefCustomerNote;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_item_cust_xref' table.
 */
class ItemXrefCustomerNote extends BaseItemXrefCustomerNote {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const TYPE = 'ICXM';
	const DESC = 'Item/Customer X-Ref Notes';
	const FORM_TRUE  = 'Y';
	const FORM_FALSE = 'N';

	const FORMS_LABELS = array(
		'quote'            => 'quote',
		'pickticket'       => 'pick ticket',
		'packticket'       => 'pack ticket',
		'invoice'          => 'invoice',
		'acknowledgement'  => 'acknowledgement',
	);

	const FORMS_LABELS_SHORT = array(
		'quote'            => 'qte',
		'pickticket'       => 'pick',
		'packticket'       => 'pack',
		'invoice'          => 'invc',
		'acknowledgement'  => 'ack',
	);

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'type'             => 'qntype',
		'description'      => 'qntypedesc',
		'itemid'           => 'inititemnbr',
		'custid'           => 'arcucustid',
		'pickticket'       => 'qnicxmpickticket',
		'packticket'       => 'qnicxmpackticket',
		'invoice'          => 'qnicxminvoice',
		'acknowledgement'  => 'qnicxmacknow',
		'quote'            => 'qnicxmquote',
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
		$form = $this->quote.$this->pickticket.$this->packticket;
		$form .= $this->invoice.$this->acknowledgement;
		$this->setForm($form);
	}

	/**
	 * Sets generated Key2
	 * NOTE: Key2 = ItemID followed by the Key2 Append
	 *
	 * @return string
	 */
	public function generateKey2() {
		$key2_itemID = str_pad($this->itemid, ItemMasterItem::LENGTH_ITEMID, " ", STR_PAD_RIGHT);
		$key2 = $key2_itemID.$this->custid;
		$this->setKey2($key2);
	}
	/**
	 * Return new ItemOrderNote
	 *
	 * @return void
	 */
	public static function new() {
		$item = new ItemXrefCustomerNote();
		$item->setType(self::TYPE);
		$item->setDescription(self::DESC);
		$item->setPickticket(self::FORM_FALSE);
		$item->setPackticket(self::FORM_FALSE);
		$item->setInvoice(self::FORM_FALSE);
		$item->setAcknowledgement(self::FORM_FALSE);
		$item->setQuote(self::FORM_FALSE);
		$item->generateForm();
		return $item;
	}
}
