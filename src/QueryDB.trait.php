<?php
	namespace Dplus\Model;

	use Propel\Runtime\Propel;

	/**
	 * Functions that Query Databases
	 */
	trait QueryDB {
		/**
		 * Executes Query for Query Class
		 * @uses  self::$dbName
		 * 
		 * @param  string $sql    SQL to Execute, parameterized if need be
		 * @param  array  $params Parameters and their values
		 * @return PDOStatement   PDO Statement to get results
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
	}