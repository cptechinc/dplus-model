<?php

use Base\ArTermsCode as BaseArTermsCode;

use Dplus\Model\ThrowErrorTrait;
use Dplus\Model\MagicMethodTraits;

/**
 * Class for representing a row from the 'ar_term_code' table.
 *
 */
class ArTermsCode extends BaseArTermsCode {
	use ThrowErrorTrait;
	use MagicMethodTraits;

	const MAX_LENGTH_CODE = 4;

	const STANDARD_TERMS_SPLIT = 6;

    const EOM_TERMS_SPLIT = 3;

    const DEFAULT_METHOD = 'S';
	const DEFAULT_TYPE   = 'STD';
	const DEFAULT_HOLD   = 'N';
	const DEFAULT_FREIGHT_ALLOWED = 'N';

	/**
	 * Column Aliases to lookup / get properties
	 * @var array
	 */
	const COLUMN_ALIASES = array(
		'id'               => 'artmtermcd',
		'code'             => 'artmtermcd',
		'description'      => 'artmtermdesc',
		'method'           => 'artmmethod',
		'type'             => 'artmtype',
		'hold'             => 'artmhold',
		'exp_date'         => 'artmexpiredate',
		'freight_allow'    => 'artmfrtallow',
		'cc_prefix'        => 'artmccprefix',
		'split1'           => 'artmsplit1',
		'order_percent1'   => 'artmorderpct1',
		'percent1'         => 'artmdiscpct1',
		'days1'            => 'artmdiscdays1',
		'day1'             => 'artmdiscday1',
		'date1'            => 'artmdiscdate1',
		'due_days1'        => 'artmduedays1',
		'due_day1'         => 'artmdueday1',
		'due_months1'      => 'artmplusmonths1',
		'due_date1'        => 'artmduedate1',
		'due_year1'        => 'artmplusyear1',
		'split2'           => 'artmsplit2',
		'order_percent2'   => 'artmorderpct2',
		'percent2'         => 'artmdiscpct2',
		'days2'            => 'artmdiscdays2',
		'day2'             => 'artmdiscday2',
		'date2'            => 'artmdiscdate2',
		'due_days2'        => 'artmduedays2',
		'due_day2'         => 'artmdueday2',
		'due_months2'      => 'artmplusmonths2',
		'due_date2'        => 'artmduedate2',
		'due_year2'        => 'artmplusyear2',
		'split3'           => 'artmsplit3',
		'order_percent3'   => 'artmorderpct3',
		'percent3'         => 'artmdiscpct3',
		'days3'            => 'artmdiscdays3',
		'day3'             => 'artmdiscday3',
		'date3'            => 'artmdiscdate3',
		'due_days3'        => 'artmduedays3',
		'due_day3'         => 'artmdueday3',
		'due_months3'      => 'artmplusmonths3',
		'due_date3'        => 'artmduedate3',
		'due_year3'        => 'artmplusyear3',
		'split4'           => 'artmsplit4',
		'order_percent4'   => 'artmorderpct4',
		'percent4'         => 'artmdiscpct4',
		'days4'            => 'artmdiscdays4',
		'day4'             => 'artmdiscday4',
		'date4'            => 'artmdiscdate4',
		'due_days4'        => 'artmduedays4',
		'due_day4'         => 'artmdueday4',
		'due_months4'      => 'artmplusmonths4',
		'due_date4'        => 'artmduedate4',
		'due_year4'        => 'artmplusyear4',
		'split5'           => 'artmsplit5',
		'order_percent5'   => 'artmorderpct5',
		'percent5'         => 'artmdiscpct5',
		'days5'            => 'artmdiscdays5',
		'day5'             => 'artmdiscday5',
		'date5'            => 'artmdiscdate5',
		'due_days5'        => 'artmduedays5',
		'due_day5'         => 'artmdueday5',
		'due_months5'      => 'artmplusmonths5',
		'due_date5'        => 'artmduedate5',
		'due_year5'        => 'artmplusyear5',
		'split6'           => 'artmsplit6',
		'order_percent6'   => 'artmorderpct6',
		'percent6'         => 'artmdiscpct6',
		'days6'            => 'artmdiscdays6',
		'day6'             => 'artmdiscday6',
		'date6'            => 'artmdiscdate6',
		'due_days6'        => 'artmduedays6',
		'due_day6'         => 'artmdueday6',
		'due_months6'      => 'artmplusmonths6',
		'due_date6'        => 'artmduedate6',
		'due_year6'        => 'artmplusyear6',
		'from_day1'        => 'artmdayfrom1',
		'thru_day1'        => 'artmdaythru1',
		'eom_percent1'     => 'artmeomdiscpct1',
		'eom_day1'         => 'artmeomdiscday1',
		'eom_disc_months1' => 'artmeomdiscmonths1',
		'eom_dueday1'      => 'artmeomdueday1',
		'eom_months1'      => 'artmeomplusmonths1',
		'from_day2'        => 'artmdayfrom2',
		'thru_day2'        => 'artmdaythru2',
		'eom_percent2'     => 'artmeomdiscpct2',
		'eom_day2'         => 'artmeomdiscday2',
		'eom_disc_months2' => 'artmeomdiscmonths2',
		'eom_dueday2'      => 'artmeomdueday2',
		'eom_months2'      => 'artmeomplusmonths2',
		'from_day3'        => 'artmdayfrom3',
		'thru_day3'        => 'artmdaythru3',
		'eom_percent3'     => 'artmeomdiscpct3',
		'eom_day3'         => 'artmeomdiscday3',
		'eom_disc_months3' => 'artmeomdiscmonths3',
		'eom_dueday3'      => 'artmeomdueday3',
		'eom_months3'      => 'artmeomplusmonths3',
		'country'          => 'artmctry',
		'term_group'       => 'artmtermgrup',
		'date'		       => 'dateupdtd',
		'time'		       => 'timeupdtd'
	);

	/**
	 * Return the Max Number of characters allowed for Code
	 * @return int
	 */
	public function get_max_length_code() {
		return self::MAX_LENGTH_CODE;
	}

    public function get_standard_terms_split() {
		return self::STANDARD_TERMS_SPLIT;
	}

    public function get_eom_terms_split() {
		return self::EOM_TERMS_SPLIT;
	}

	public function order_percent($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "order_percent$index";
			return $this->$col;
		}
	}

	public function percent($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "percent$index";
			return $this->$col;
		}
	}

	public function days($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "days$index";
			return $this->$col;
		}
	}

	public function day($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "day$index";
			return $this->$col;
		}
	}

	public function date($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "date$index";
			return $this->$col;
		}
	}

	public function due_day($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "due_day$index";
			return $this->$col;
		}
	}

	public function due_days($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "due_days$index";
			return $this->$col;
		}
	}

	public function due_months($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "due_months$index";
			return $this->$col;
		}
	}

	public function due_date($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "due_date$index";
			return $this->$col;
		}
	}

	public function due_year($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "due_year$index";
			return $this->$col;
		}
	}

    public function from_day($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "from_day$index";
			return $this->$col;
		}
	}

    public function thru_day($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "thru_day$index";
			return $this->$col;
		}
	}

    public function eom_percent($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "eom_percent$index";
			return $this->$col;
		}
	}

    public function eom_day($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "eom_day$index";
			return $this->$col;
		}
	}

    public function eom_disc_months($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "eom_disc_months$index";
			return $this->$col;
		}
	}

    public function eom_dueday($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "eom_dueday$index";
			return $this->$col;
		}
	}

    public function eom_months($index) {
		if ($index > self::STANDARD_TERMS_SPLIT) {
			$this->error("There are only " . self::STANDARD_TERMS_SPLIT . " splits allowed");
		} else {
			$col = "eom_months$index";
			return $this->$col;
		}
	}

    /**
	 * Returns Instance with Defaults set
	 * @return ArTermsCode
	 */
	public static function new() {
		$termscode = new ArTermsCode();
		$termscode->setMethod(self::DEFAULT_METHOD);
		$termscode->setType(self::DEFAULT_TYPE);
		$termscode->setHold(self::DEFAULT_HOLD);
		$termscode->setFreight_allow(self::DEFAULT_FREIGHT_ALLOWED);
	}
}
