<?php

use Base\CustomerShipOrderNotes as BaseCustomerShipOrderNotes;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'notes_cust_ship_order' table.
 */
class CustomerShipOrderNotes extends BaseCustomerShipOrderNotes {
    use ThrowErrorTrait;
    use MagicMethodTraits;

    /**
     * Column Aliases to lookup / get properties
     * @var array
     */
     const COLUMN_ALIASES = array(
         'type'          => 'qntype',
         'desc'          => 'qntypedesc',
         'description'   => 'qntypedesc',
         'custid'        => 'arcucustid',
         'custID'        => 'arcucustid',
         'shiptoid'      => 'arstshipid',
         'picktacket'    => 'qncustpickticket',
         'packticket'    => 'qncustpackticket',
         'invoice'       => 'qncustinvoice',
         'acknowlegde'   => 'qncustacknow',
         'sequence'      => 'qnseq',
         'note'          => 'qnnote',
         'key2'          => 'qnkey2',
         'form'          => 'qnform',
         'date'          => 'dateupdtd',
         'time'          => 'timeupdtd',
     );
}
