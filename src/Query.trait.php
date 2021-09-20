<?php namespace Dplus\Model;

use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;

/**
 * Functions that Query Databases
 */
trait QueryTraits {
	/**
	 * Adds Sort to Query
	 * @param  string $column Table column Name, must be actual column name
	 * @param  string $sort   ASC, DESC, ETC
	 * @return void
	 */
	public function sortBy($column, $sort) {
		$col = ucfirst($column);
		$function = "orderBy$col";
		return $this->$function($sort);
	}

	/**
	 * Executes Query for Query Class
	 * @uses  self::$dbName
	 *
	 * @param  string      $sql    SQL to Execute, parameterized if need be
	 * @param  array       $params Parameters and their values
	 * @return PDOStatement        PDO Statement to get results
	 */
	public function execute_query($sql, $params = []) {
		return $this->executeQuery($sql, $params);
	}

	/**
	 * Executes Query for Query Class
	 * @uses  self::$dbName
	 *
	 * @param  string      $sql    SQL to Execute, parameterized if need be
	 * @param  array       $params Parameters and their values
	 * @return PDOStatement        PDO Statement to get results
	 */
	public function executeQuery($sql, $params = []) {
		$con = Propel::getWriteConnection($this->dbName);
		$stmt = $con->prepare($sql);

		if (empty($params)) {
			$stmt->execute();
			return $stmt;
		}
		$stmt->execute($params);
		return $stmt;
	}

	/**
	 * Adds a LIKE filter for each column, and one for the concatenated columns
	 * @param  array         $columns        Array of Table Column Names
	 * @param  string        $q              Search Query to Match
	 * @param  string        $caseSensitive  Is Case-sensitive
	 * @return ModelCriteria                 $this
	 */
	public function search_filter(array $columns, $q, $caseSensitive = false) {
		return $this->addLikeFilter($columns, $q, $caseSensitive);
	}

	/**
	 * Adds a LIKE filter for each column, and one for the concatenated columns
	 * @param  array         $columns        Array of Table Column Names
	 * @param  string        $q              Search Query to Match
	 * @param  string        $caseSensitive  Is Case-sensitive
	 * @return ModelCriteria                 $this
	 */
	public function addLikeFilter(array $columns, $q, $caseSensitive = false) {
		$keyword = $this->wildcardify($q);

		foreach ($columns as $column) {
			$tablecol = $this->tablemap_column($column);
			$this->conditionLike($column, $tablecol, $keyword, $caseSensitive);
		}
		if (sizeof($columns) > 1) {
			$this->conditionLikeConcat($columns, $q);
			$columns[] = 'concat';
		}
		$this->where($columns, Criteria::LOGICAL_OR);
		return $this;
	}

	/**
	 * Add a LIKE condition to Query
	 * @param  string $name     Condition Name
	 * @param  string $pattern  Pattern to match against e.g. col1, or CONCAT(col1, col2)
	 * @param  string $keyword   Search Query to match
	 * @return self
	 */
	public function conditionLike($name, $pattern, $keyword, $caseSensitive = false) {
		$condition = $caseSensitive === true ? "$pattern LIKE ?" : "UPPER($pattern) LIKE ?";
		$this->condition($name, $condition, $keyword);
		return $this;
	}

	/**
	 * Add a Concatenated Column Like Condition
	 * @param array   $columns  Columns, not TableMap columns
	 * @param string  $keyword  Search keyword
	 * @return self
	 */
	public function conditionLikeConcat(array $columns, $q, $caseSensitive = false) {
		$query = $this->wildcardify($q);
		$concat = $this->implodeColumns($columns);
		$this->conditionLike('concat', "CONCAT($concat)", $query, $caseSensitive);
		return $this;
	}

	/**
	 * Return TableMap column names
	 * @param  array $columns
	 * @return array
	 */
	public function tablemap_columns($columns) {
		$cols = array();
		foreach ($columns as $column) {
			$cols[] = $this->tablecolumn($column);
		}
		return $cols;
	}

	/**
	 * Returns Table Map Column
	 * @param  string $prop  Property to lookup column
	 * @return string        column
	 */
	public function get_tablecolumn($prop) {
		return $this->tablecolumn($prop);
	}

	/**
	 * Returns Table Map Column
	 * @param  string $prop  Property to lookup column
	 * @return string        column
	 */
	public function tablemap_column($prop) {
		return $this->tablecolumn($prop);
	}

	/**
	 * Returns Table Map Column
	 * @param  string $prop  Property to lookup column
	 * @return string        column
	 */
	public function tablecolumn($prop) {
		$tablemap_column = "COL_".strtoupper($prop);
		$mapclass = get_class($this->tableMap);
		return constant("$mapclass::$tablemap_column");
	}

	/**
	 * Add WildCard Characters to query
	 * @param  string $q
	 * @return string          '%{search}%';
	 */
	public function wildcardify($q) {
		return '%' . str_replace(' ', '%', $q) . '%';
	}

	/**
	 * Return a list of TableMap columns with comma & space separator
	 * @param  array $columns
	 * @return array          TableMap Columns "COL_COL1, COL_COL2"
	 */
	public function implodeColumns($columns) {
		$columns_tb = $this->tablemap_columns($columns);
		return implode(", ' ', " , $columns_tb);
	}

	/**
	 * Handle Magic Filtering Methods
	 * Supports findByXXX(), findOneByXXX(), requireOneByXXX(), filterByXXX(), orderByXXX(), and groupByXXX() methods,
	 * where XXX is a column phpName or an alias
	 * @param  string $name      Method Name ex. findByOrdernumber
	 * @param  string $arguments array of method arguments
	 * @return mixed
	 */
	public function __call($name, $arguments) {
		// Maybe it's a magic call to one of the methods supporting it, e.g. 'findByTitle'
		static $methods = ['findBy', 'findOneBy', 'requireOneBy', 'filterBy', 'orderBy', 'groupBy'];

		foreach ($methods as $method) {
			if (0 === strpos($name, $method)) {
				$property = strtolower(str_replace($method, '', $name));
				$class_name = $this->getModelName();
				$class_model = new $class_name();

				if (!property_exists($class_model, $property)) {
					$class_column = $class_model::get_aliasproperty($property);
					$name = str_replace(ucfirst($property), ucfirst($class_column), $name);
				}
				break;
			}
		}
		return parent::__call($name, $arguments);
	}
}
