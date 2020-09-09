<?php
	namespace Dplus\Model;

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
		public function execute_query($sql, $params) {
			$database = $this->dbName;
			$con = Propel::getWriteConnection($database);
			$stmt = $con->prepare($sql);

			if (empty($params)){
				$stmt->execute();
			} else {
				$stmt->execute($params);
			}
			return $stmt;
		}

		/**
		 * Adds a LIKE filter for each column, and one for the concatenated columns
		 * @param  array         $columns        Array of Table Column Names
		 * @param  string        $q              Search Query to Match
		 * @return ModelCriteria                 $this
		 */
		public function search_filter(array $columns, $q) {
			$query = $this->wildcardify($q);

			foreach ($columns as $column) {
				$tablecol = $this->tablemap_column($column);
				$this->condition_like($column, $tablecol, $query);
			}
			$this->condition_like_concat($columns, $q);
			$columns[] = 'concat';
			$this->where($columns, Criteria::LOGICAL_OR);
			return $this;
		}

		/**
		 * Add a LIKE condition to Query
		 * @param  string $name     Condition Name
		 * @param  string $pattern  Pattern to match against e.g. col1, or CONCAT(col1, col2)
		 * @param  string $query    Search Query to match 
		 * @return self
		 */
		public function condition_like($name, $pattern, $query) {
			$this->condition($name, "$pattern LIKE ?", $query);
			return $this;
		}
		
		/**
		 * Add a Concatenated Column Like Condition
		 * @param array   $columns  Columns, not TableMap columns
		 * @param string  $q        Search Query to match 
		 * @return self
		 */
		public function condition_like_concat(array $columns, $q) {
			$query = $this->wildcardify($q);
			$concat = $this->implode_columns($columns);
			$this->condition_like('concat', "CONCAT($concat)", $query);
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
				$cols[] = $this->tablemap_column($column);
			}
			return $cols;
		}

		/**
		 * Return TableMap Column name
		 *
		 * @param  string $column 
		 * @return void
		 */
		public function tablemap_column($column) {
			$tablemap_column = "COL_".strtoupper($column);
			$mapclass = get_class($this->tableMap);
			return constant("$mapclass::$tablemap_column");
		}

		public function wildcardify($q) {
			return '%' . str_replace(' ', '%', $q) . '%';
		}

		public function implode_columns($columns) {
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
