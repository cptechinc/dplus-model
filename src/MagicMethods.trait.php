<?php namespace Dplus\Model;

/**
 * Traits that provide Magic Methods
 * Functions include __get(), __isset()
 */
trait MagicMethodTraits {

	/**
	 * Array to keep original values Keyed by Property
	 * @var array
	 */
	protected $originalvalues = [];

	/**
	 * Properties are protected from modification without function, but
	 * We want to allow the $column values to be accessed
	 *
	 * @param  string $column  The Column trying to be accessed
	 * @return mixed		   $column value or Error
	 */
	public function __get($column) {
		$method = "get".ucfirst($column);

		if (method_exists($this, $method)) {
			return $this->$method();
		} elseif (property_exists($this, $column)) {
			return $this->$column;
		} elseif (defined(get_class($this)."::COLUMN_ALIASES")) {
			if (array_key_exists($column, self::COLUMN_ALIASES)) {
				$realcolumn = $this->aliasproperty($column);
				return $this->$realcolumn;
			} else {
				$this->error("This column and alias ($column) does not exist");
				return false;
			}
		} else {
			$this->error("This column and alias ($column) does not exist");
			return false;
		}
	}

	/**
	 * Is used to PHP functions like isset() and empty() get access and see
	 * if property is set
	 *
	 * @param  string  $column Column Name
	 * @return bool		       Whether $this->$column is set
	 */
	public function __isset($column) {
		if (isset($this->$column)) {
			return isset($this->$column);
		} else {
			if (defined(get_class($this)."::COLUMN_ALIASES")) {
				if (array_key_exists($column, self::COLUMN_ALIASES)) {
					return true;
				}
				return $this->aliasproperty_exists($column);
			} else {
				return false;
			}
		}
	}

	/**
	 * We don't want to allow direct modification of properties so we have this function
	 * look for if $column exists then if it does it will set the value for the $column
	 *
	 * @param string $column   Column Name
	 * @param mixed  $value    Value of $this->$column
	 */
	public function set($column, $value) {
		if (property_exists($this, $column)) {
			$method = "set".ucfirst($column);
			$this->$method($value);
		} elseif (defined(get_class($this)."::COLUMN_ALIASES")) {
			if (array_key_exists($column, self::COLUMN_ALIASES)) {
				$realcolumn = self::COLUMN_ALIASES[$column];
				$method = "set".ucfirst($realcolumn);
				$this->$method($value);
			} else {
				$this->error("This column and alias ($column) does not exist");
				return false;
			}
		} else {
			$this->error("This column or alias ($column) does not exist");
			return false;
		}
	}

	/**
	 * Returns the Property Name the alias is aliasing
	 * @param  string $alias Alias or Property Name
	 * @return string        The Real Property
	 */
	public static function get_aliasproperty($alias) {
		if (property_exists(__CLASS__, $alias)) {
			return $alias;
		} elseif (defined(__CLASS__."::COLUMN_ALIASES")) {
			if (array_key_exists($alias, self::COLUMN_ALIASES)) {
				return self::COLUMN_ALIASES[$alias];
			}

			// Loop through aliases check if match found with lcfirst
			$aliases = array_keys(self::COLUMN_ALIASES);
			foreach ($aliases as $key => $aka) {
				if ($aka === lcfirst($alias)) {
					return self::COLUMN_ALIASES[$aka];
				}
			}
		}

		$throwerror = new ThrowError();
		$throwerror->error(__CLASS__, "This column or alias ($alias) does not exist", debug_backtrace());
		return false;
	}

	/**
	 * Returns the Property Name the alias is aliasing
	 * @param  string $alias Alias or Property Name
	 * @return string        The Real Property
	 */
	public static function aliasproperty($alias) {
		return self::get_aliasproperty($alias);
	}


	/**
	 * Returns if Alias or Property exists for this class
	 *
	 * @param string $alias
	 * @return bool
	 */
	public static function aliasproperty_exists($alias) {
		if (property_exists(__CLASS__, $alias)) {
			return true;
		} elseif (defined(__CLASS__."::COLUMN_ALIASES")) {
			if (array_key_exists($alias, self::COLUMN_ALIASES)) {
				return true;
			}

			// Loop through aliases check if match found with lcfirst
			$aliases = array_keys(self::COLUMN_ALIASES);
			foreach ($aliases as $key => $aka) {
				if ($aka === lcfirst($alias)) {
					return true;
				}
			}
		}
		return false;
	}

	/**
	 * Handle Magic Methods
	 *
	 * Supports setXXX()
	 * If SetXXX() function is called, will save original value in the $originalvalues property
	 *
	 * @param  string $name      Method Name ex. setOrdernumber
	 * @param  string $arguments array of method arguments
	 * @return mixed
	 */
	public function __call($name, $arguments) {
		$method = 'set';

		if ($this->isCallingSet($name)) {
			return $this->handleSetCall($name, $arguments);
		}
		return parent::__call($name, $arguments);
	}

	protected function isCallingSet($name) {
		$method = 'set';
		return $method == substr($name, 0, 3);
	}

	protected function handleSetCall($name, $arguments) {
		$method = 'set';

		// If Method Exists, execute it.
		if (method_exists($this, $name)) {
			$col = str_replace($method, '', $name);
			$this->originalvalues[$col] = $arguments[0];
			return parent::__call($name, $arguments);
		}

		$fieldAlias      = ltrim($name, $method);
		$fieldAliasLcase = strtolower($fieldAlias);

		$class = get_class();
		$model = new $class();

		if (property_exists($model, $fieldAliasLcase)) {
			return $this->$name($arguments[0]);
		}

		$field = $this->aliasproperty_exists($fieldAlias) ? $model::aliasproperty($fieldAlias) : $model::aliasproperty($fieldAliasLcase);
		$alias = $this->aliasproperty_exists($fieldAlias) ? $fieldAlias : $fieldAliasLcase;
		$name = str_replace(ucfirst($alias), ucfirst($field), $name);

		$this->originalvalues[$field] = $this->$field;
		return $this->$name($arguments[0]);
	}

	/**
	 * Add Original Value to Original Values Array
	 * @param  string $col    Column
	 * @param  mixed $value  Original Value
	 * @return void
	 */
	public function add_originalvalue($col, $value) {
		$this->originalvalues[$col] = $value;
	}
}
