<?php

namespace Tobacco\PatentsBundle\Model\om;

use \BasePeer;
use \Criteria;
use \PDO;
use \PDOStatement;
use \Propel;
use \PropelException;
use \PropelPDO;
use Tobacco\PatentsBundle\Model\Patent;
use Tobacco\PatentsBundle\Model\PatentPeer;
use Tobacco\PatentsBundle\Model\map\PatentTableMap;

/**
 * Base static class for performing query and update operations on the 'patent' table.
 *
 * 
 *
 * @package    propel.generator.src.Tobacco.PatentsBundle.Model.om
 */
abstract class BasePatentPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'default';

	/** the table name for this class */
	const TABLE_NAME = 'patent';

	/** the related Propel class for this table */
	const OM_CLASS = 'Tobacco\\PatentsBundle\\Model\\Patent';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'src.Tobacco.PatentsBundle.Model.Patent';

	/** the related TableMap class for this table */
	const TM_CLASS = 'PatentTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 16;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 16;

	/** the column name for the PATENT_ID field */
	const PATENT_ID = 'patent.PATENT_ID';

	/** the column name for the MANUFACTURER field */
	const MANUFACTURER = 'patent.MANUFACTURER';

	/** the column name for the BRAND field */
	const BRAND = 'patent.BRAND';

	/** the column name for the TITLE field */
	const TITLE = 'patent.TITLE';

	/** the column name for the PATENT_NUMBER field */
	const PATENT_NUMBER = 'patent.PATENT_NUMBER';

	/** the column name for the APPLICATION_NUMBER field */
	const APPLICATION_NUMBER = 'patent.APPLICATION_NUMBER';

	/** the column name for the INVENTOR field */
	const INVENTOR = 'patent.INVENTOR';

	/** the column name for the PATENT_OFFICE_URL field */
	const PATENT_OFFICE_URL = 'patent.PATENT_OFFICE_URL';

	/** the column name for the ASSIGNEE field */
	const ASSIGNEE = 'patent.ASSIGNEE';

	/** the column name for the GOOGLE_URL field */
	const GOOGLE_URL = 'patent.GOOGLE_URL';

	/** the column name for the PATENT_DATE field */
	const PATENT_DATE = 'patent.PATENT_DATE';

	/** the column name for the DATE_FILED field */
	const DATE_FILED = 'patent.DATE_FILED';

	/** the column name for the TERMS field */
	const TERMS = 'patent.TERMS';

	/** the column name for the EUROPEAN_URL field */
	const EUROPEAN_URL = 'patent.EUROPEAN_URL';

	/** the column name for the DATE_UPDATED field */
	const DATE_UPDATED = 'patent.DATE_UPDATED';

	/** the column name for the TAGS field */
	const TAGS = 'patent.TAGS';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Patent objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Patent[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('PatentId', 'Manufacturer', 'Brand', 'Title', 'PatentNumber', 'ApplicationNumber', 'Inventor', 'PatentOfficeUrl', 'Assignee', 'GoogleUrl', 'PatentDate', 'DateFiled', 'Terms', 'EuropeanUrl', 'DateUpdated', 'Tags', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('patentId', 'manufacturer', 'brand', 'title', 'patentNumber', 'applicationNumber', 'inventor', 'patentOfficeUrl', 'assignee', 'googleUrl', 'patentDate', 'dateFiled', 'terms', 'europeanUrl', 'dateUpdated', 'tags', ),
		BasePeer::TYPE_COLNAME => array (self::PATENT_ID, self::MANUFACTURER, self::BRAND, self::TITLE, self::PATENT_NUMBER, self::APPLICATION_NUMBER, self::INVENTOR, self::PATENT_OFFICE_URL, self::ASSIGNEE, self::GOOGLE_URL, self::PATENT_DATE, self::DATE_FILED, self::TERMS, self::EUROPEAN_URL, self::DATE_UPDATED, self::TAGS, ),
		BasePeer::TYPE_RAW_COLNAME => array ('PATENT_ID', 'MANUFACTURER', 'BRAND', 'TITLE', 'PATENT_NUMBER', 'APPLICATION_NUMBER', 'INVENTOR', 'PATENT_OFFICE_URL', 'ASSIGNEE', 'GOOGLE_URL', 'PATENT_DATE', 'DATE_FILED', 'TERMS', 'EUROPEAN_URL', 'DATE_UPDATED', 'TAGS', ),
		BasePeer::TYPE_FIELDNAME => array ('patent_id', 'manufacturer', 'brand', 'title', 'patent_number', 'application_number', 'inventor', 'patent_office_url', 'assignee', 'google_url', 'patent_date', 'date_filed', 'terms', 'european_url', 'date_updated', 'tags', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('PatentId' => 0, 'Manufacturer' => 1, 'Brand' => 2, 'Title' => 3, 'PatentNumber' => 4, 'ApplicationNumber' => 5, 'Inventor' => 6, 'PatentOfficeUrl' => 7, 'Assignee' => 8, 'GoogleUrl' => 9, 'PatentDate' => 10, 'DateFiled' => 11, 'Terms' => 12, 'EuropeanUrl' => 13, 'DateUpdated' => 14, 'Tags' => 15, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('patentId' => 0, 'manufacturer' => 1, 'brand' => 2, 'title' => 3, 'patentNumber' => 4, 'applicationNumber' => 5, 'inventor' => 6, 'patentOfficeUrl' => 7, 'assignee' => 8, 'googleUrl' => 9, 'patentDate' => 10, 'dateFiled' => 11, 'terms' => 12, 'europeanUrl' => 13, 'dateUpdated' => 14, 'tags' => 15, ),
		BasePeer::TYPE_COLNAME => array (self::PATENT_ID => 0, self::MANUFACTURER => 1, self::BRAND => 2, self::TITLE => 3, self::PATENT_NUMBER => 4, self::APPLICATION_NUMBER => 5, self::INVENTOR => 6, self::PATENT_OFFICE_URL => 7, self::ASSIGNEE => 8, self::GOOGLE_URL => 9, self::PATENT_DATE => 10, self::DATE_FILED => 11, self::TERMS => 12, self::EUROPEAN_URL => 13, self::DATE_UPDATED => 14, self::TAGS => 15, ),
		BasePeer::TYPE_RAW_COLNAME => array ('PATENT_ID' => 0, 'MANUFACTURER' => 1, 'BRAND' => 2, 'TITLE' => 3, 'PATENT_NUMBER' => 4, 'APPLICATION_NUMBER' => 5, 'INVENTOR' => 6, 'PATENT_OFFICE_URL' => 7, 'ASSIGNEE' => 8, 'GOOGLE_URL' => 9, 'PATENT_DATE' => 10, 'DATE_FILED' => 11, 'TERMS' => 12, 'EUROPEAN_URL' => 13, 'DATE_UPDATED' => 14, 'TAGS' => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('patent_id' => 0, 'manufacturer' => 1, 'brand' => 2, 'title' => 3, 'patent_number' => 4, 'application_number' => 5, 'inventor' => 6, 'patent_office_url' => 7, 'assignee' => 8, 'google_url' => 9, 'patent_date' => 10, 'date_filed' => 11, 'terms' => 12, 'european_url' => 13, 'date_updated' => 14, 'tags' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. PatentPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(PatentPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(PatentPeer::PATENT_ID);
			$criteria->addSelectColumn(PatentPeer::MANUFACTURER);
			$criteria->addSelectColumn(PatentPeer::BRAND);
			$criteria->addSelectColumn(PatentPeer::TITLE);
			$criteria->addSelectColumn(PatentPeer::PATENT_NUMBER);
			$criteria->addSelectColumn(PatentPeer::APPLICATION_NUMBER);
			$criteria->addSelectColumn(PatentPeer::INVENTOR);
			$criteria->addSelectColumn(PatentPeer::PATENT_OFFICE_URL);
			$criteria->addSelectColumn(PatentPeer::ASSIGNEE);
			$criteria->addSelectColumn(PatentPeer::GOOGLE_URL);
			$criteria->addSelectColumn(PatentPeer::PATENT_DATE);
			$criteria->addSelectColumn(PatentPeer::DATE_FILED);
			$criteria->addSelectColumn(PatentPeer::TERMS);
			$criteria->addSelectColumn(PatentPeer::EUROPEAN_URL);
			$criteria->addSelectColumn(PatentPeer::DATE_UPDATED);
			$criteria->addSelectColumn(PatentPeer::TAGS);
		} else {
			$criteria->addSelectColumn($alias . '.PATENT_ID');
			$criteria->addSelectColumn($alias . '.MANUFACTURER');
			$criteria->addSelectColumn($alias . '.BRAND');
			$criteria->addSelectColumn($alias . '.TITLE');
			$criteria->addSelectColumn($alias . '.PATENT_NUMBER');
			$criteria->addSelectColumn($alias . '.APPLICATION_NUMBER');
			$criteria->addSelectColumn($alias . '.INVENTOR');
			$criteria->addSelectColumn($alias . '.PATENT_OFFICE_URL');
			$criteria->addSelectColumn($alias . '.ASSIGNEE');
			$criteria->addSelectColumn($alias . '.GOOGLE_URL');
			$criteria->addSelectColumn($alias . '.PATENT_DATE');
			$criteria->addSelectColumn($alias . '.DATE_FILED');
			$criteria->addSelectColumn($alias . '.TERMS');
			$criteria->addSelectColumn($alias . '.EUROPEAN_URL');
			$criteria->addSelectColumn($alias . '.DATE_UPDATED');
			$criteria->addSelectColumn($alias . '.TAGS');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(PatentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PatentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(PatentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Selects one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Patent
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = PatentPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Selects several row from the DB.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return PatentPeer::populateObjects(PatentPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PatentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			PatentPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Patent $value A Patent object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getPatentId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Patent object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Patent) {
				$key = (string) $value->getPatentId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Patent object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Patent Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to patent
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = PatentPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = PatentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = PatentPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				PatentPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (Patent object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = PatentPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = PatentPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + PatentPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = PatentPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			PatentPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BasePatentPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BasePatentPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new PatentTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? PatentPeer::CLASS_DEFAULT : PatentPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Patent or Criteria object.
	 *
	 * @param      mixed $values Criteria or Patent object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PatentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Patent object
		}

		if ($criteria->containsKey(PatentPeer::PATENT_ID) && $criteria->keyContainsValue(PatentPeer::PATENT_ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.PatentPeer::PATENT_ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Performs an UPDATE on the database, given a Patent or Criteria object.
	 *
	 * @param      mixed $values Criteria or Patent object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PatentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(PatentPeer::PATENT_ID);
			$value = $criteria->remove(PatentPeer::PATENT_ID);
			if ($value) {
				$selectCriteria->add(PatentPeer::PATENT_ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(PatentPeer::TABLE_NAME);
			}

		} else { // $values is Patent object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the patent table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PatentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(PatentPeer::TABLE_NAME, $con, PatentPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			PatentPeer::clearInstancePool();
			PatentPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Patent or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Patent object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(PatentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			PatentPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Patent) { // it's a model object
			// invalidate the cache for this single object
			PatentPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PatentPeer::PATENT_ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				PatentPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			PatentPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Patent object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Patent $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PatentPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PatentPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(PatentPeer::DATABASE_NAME, PatentPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Patent
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = PatentPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(PatentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(PatentPeer::DATABASE_NAME);
		$criteria->add(PatentPeer::PATENT_ID, $pk);

		$v = PatentPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PatentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(PatentPeer::DATABASE_NAME);
			$criteria->add(PatentPeer::PATENT_ID, $pks, Criteria::IN);
			$objs = PatentPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BasePatentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePatentPeer::buildTableMap();

