<?php

namespace Tobacco\PatentsBundle\Model\om;

use \Criteria;
use \ModelCriteria;
use \ModelJoin;
use \PDO;
use \Propel;
use \PropelPDO;
use Tobacco\PatentsBundle\Model\Patent;
use Tobacco\PatentsBundle\Model\PatentPeer;
use Tobacco\PatentsBundle\Model\PatentQuery;

/**
 * Base class that represents a query for the 'patent' table.
 *
 * 
 *
 * @method     PatentQuery orderByPatentId($order = Criteria::ASC) Order by the patent_id column
 * @method     PatentQuery orderByManufacturer($order = Criteria::ASC) Order by the manufacturer column
 * @method     PatentQuery orderByBrand($order = Criteria::ASC) Order by the brand column
 * @method     PatentQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     PatentQuery orderByPatentNumber($order = Criteria::ASC) Order by the patent_number column
 * @method     PatentQuery orderByApplicationNumber($order = Criteria::ASC) Order by the application_number column
 * @method     PatentQuery orderByInventor($order = Criteria::ASC) Order by the inventor column
 * @method     PatentQuery orderByPatentOfficeUrl($order = Criteria::ASC) Order by the patent_office_url column
 * @method     PatentQuery orderByAssignee($order = Criteria::ASC) Order by the assignee column
 * @method     PatentQuery orderByGoogleUrl($order = Criteria::ASC) Order by the google_url column
 * @method     PatentQuery orderByPatentDate($order = Criteria::ASC) Order by the patent_date column
 * @method     PatentQuery orderByDateFiled($order = Criteria::ASC) Order by the date_filed column
 * @method     PatentQuery orderByTerms($order = Criteria::ASC) Order by the terms column
 * @method     PatentQuery orderByEuropeanUrl($order = Criteria::ASC) Order by the european_url column
 * @method     PatentQuery orderByDateUpdated($order = Criteria::ASC) Order by the date_updated column
 * @method     PatentQuery orderByTags($order = Criteria::ASC) Order by the tags column
 *
 * @method     PatentQuery groupByPatentId() Group by the patent_id column
 * @method     PatentQuery groupByManufacturer() Group by the manufacturer column
 * @method     PatentQuery groupByBrand() Group by the brand column
 * @method     PatentQuery groupByTitle() Group by the title column
 * @method     PatentQuery groupByPatentNumber() Group by the patent_number column
 * @method     PatentQuery groupByApplicationNumber() Group by the application_number column
 * @method     PatentQuery groupByInventor() Group by the inventor column
 * @method     PatentQuery groupByPatentOfficeUrl() Group by the patent_office_url column
 * @method     PatentQuery groupByAssignee() Group by the assignee column
 * @method     PatentQuery groupByGoogleUrl() Group by the google_url column
 * @method     PatentQuery groupByPatentDate() Group by the patent_date column
 * @method     PatentQuery groupByDateFiled() Group by the date_filed column
 * @method     PatentQuery groupByTerms() Group by the terms column
 * @method     PatentQuery groupByEuropeanUrl() Group by the european_url column
 * @method     PatentQuery groupByDateUpdated() Group by the date_updated column
 * @method     PatentQuery groupByTags() Group by the tags column
 *
 * @method     PatentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PatentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PatentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Patent findOne(PropelPDO $con = null) Return the first Patent matching the query
 * @method     Patent findOneOrCreate(PropelPDO $con = null) Return the first Patent matching the query, or a new Patent object populated from the query conditions when no match is found
 *
 * @method     Patent findOneByPatentId(int $patent_id) Return the first Patent filtered by the patent_id column
 * @method     Patent findOneByManufacturer(string $manufacturer) Return the first Patent filtered by the manufacturer column
 * @method     Patent findOneByBrand(string $brand) Return the first Patent filtered by the brand column
 * @method     Patent findOneByTitle(string $title) Return the first Patent filtered by the title column
 * @method     Patent findOneByPatentNumber(string $patent_number) Return the first Patent filtered by the patent_number column
 * @method     Patent findOneByApplicationNumber(string $application_number) Return the first Patent filtered by the application_number column
 * @method     Patent findOneByInventor(string $inventor) Return the first Patent filtered by the inventor column
 * @method     Patent findOneByPatentOfficeUrl(string $patent_office_url) Return the first Patent filtered by the patent_office_url column
 * @method     Patent findOneByAssignee(string $assignee) Return the first Patent filtered by the assignee column
 * @method     Patent findOneByGoogleUrl(string $google_url) Return the first Patent filtered by the google_url column
 * @method     Patent findOneByPatentDate(string $patent_date) Return the first Patent filtered by the patent_date column
 * @method     Patent findOneByDateFiled(string $date_filed) Return the first Patent filtered by the date_filed column
 * @method     Patent findOneByTerms(string $terms) Return the first Patent filtered by the terms column
 * @method     Patent findOneByEuropeanUrl(string $european_url) Return the first Patent filtered by the european_url column
 * @method     Patent findOneByDateUpdated(string $date_updated) Return the first Patent filtered by the date_updated column
 * @method     Patent findOneByTags(string $tags) Return the first Patent filtered by the tags column
 *
 * @method     array findByPatentId(int $patent_id) Return Patent objects filtered by the patent_id column
 * @method     array findByManufacturer(string $manufacturer) Return Patent objects filtered by the manufacturer column
 * @method     array findByBrand(string $brand) Return Patent objects filtered by the brand column
 * @method     array findByTitle(string $title) Return Patent objects filtered by the title column
 * @method     array findByPatentNumber(string $patent_number) Return Patent objects filtered by the patent_number column
 * @method     array findByApplicationNumber(string $application_number) Return Patent objects filtered by the application_number column
 * @method     array findByInventor(string $inventor) Return Patent objects filtered by the inventor column
 * @method     array findByPatentOfficeUrl(string $patent_office_url) Return Patent objects filtered by the patent_office_url column
 * @method     array findByAssignee(string $assignee) Return Patent objects filtered by the assignee column
 * @method     array findByGoogleUrl(string $google_url) Return Patent objects filtered by the google_url column
 * @method     array findByPatentDate(string $patent_date) Return Patent objects filtered by the patent_date column
 * @method     array findByDateFiled(string $date_filed) Return Patent objects filtered by the date_filed column
 * @method     array findByTerms(string $terms) Return Patent objects filtered by the terms column
 * @method     array findByEuropeanUrl(string $european_url) Return Patent objects filtered by the european_url column
 * @method     array findByDateUpdated(string $date_updated) Return Patent objects filtered by the date_updated column
 * @method     array findByTags(string $tags) Return Patent objects filtered by the tags column
 *
 * @package    propel.generator.src.Tobacco.PatentsBundle.Model.om
 */
abstract class BasePatentQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BasePatentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'default', $modelName = 'Tobacco\\PatentsBundle\\Model\\Patent', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PatentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PatentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PatentQuery) {
			return $criteria;
		}
		$query = new PatentQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Patent|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = PatentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(PatentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Patent A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `PATENT_ID`, `MANUFACTURER`, `BRAND`, `TITLE`, `PATENT_NUMBER`, `APPLICATION_NUMBER`, `INVENTOR`, `PATENT_OFFICE_URL`, `ASSIGNEE`, `GOOGLE_URL`, `PATENT_DATE`, `DATE_FILED`, `TERMS`, `EUROPEAN_URL`, `DATE_UPDATED`, `TAGS` FROM `patent` WHERE `PATENT_ID` = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Patent();
			$obj->hydrate($row);
			PatentPeer::addInstanceToPool($obj, (string) $row[0]);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Patent|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PatentPeer::PATENT_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PatentPeer::PATENT_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the patent_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPatentId(1234); // WHERE patent_id = 1234
	 * $query->filterByPatentId(array(12, 34)); // WHERE patent_id IN (12, 34)
	 * $query->filterByPatentId(array('min' => 12)); // WHERE patent_id > 12
	 * </code>
	 *
	 * @param     mixed $patentId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByPatentId($patentId = null, $comparison = null)
	{
		if (is_array($patentId)) {
			$useMinMax = false;
			if (isset($patentId['min'])) {
				$this->addUsingAlias(PatentPeer::PATENT_ID, $patentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($patentId['max'])) {
				$this->addUsingAlias(PatentPeer::PATENT_ID, $patentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PatentPeer::PATENT_ID, $patentId, $comparison);
	}

	/**
	 * Filter the query on the manufacturer column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByManufacturer('fooValue');   // WHERE manufacturer = 'fooValue'
	 * $query->filterByManufacturer('%fooValue%'); // WHERE manufacturer LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $manufacturer The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByManufacturer($manufacturer = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($manufacturer)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $manufacturer)) {
				$manufacturer = str_replace('*', '%', $manufacturer);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PatentPeer::MANUFACTURER, $manufacturer, $comparison);
	}

	/**
	 * Filter the query on the brand column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBrand('fooValue');   // WHERE brand = 'fooValue'
	 * $query->filterByBrand('%fooValue%'); // WHERE brand LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $brand The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByBrand($brand = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($brand)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $brand)) {
				$brand = str_replace('*', '%', $brand);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PatentPeer::BRAND, $brand, $comparison);
	}

	/**
	 * Filter the query on the title column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
	 * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $title The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PatentPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the patent_number column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPatentNumber('fooValue');   // WHERE patent_number = 'fooValue'
	 * $query->filterByPatentNumber('%fooValue%'); // WHERE patent_number LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $patentNumber The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByPatentNumber($patentNumber = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($patentNumber)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $patentNumber)) {
				$patentNumber = str_replace('*', '%', $patentNumber);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PatentPeer::PATENT_NUMBER, $patentNumber, $comparison);
	}

	/**
	 * Filter the query on the application_number column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByApplicationNumber('fooValue');   // WHERE application_number = 'fooValue'
	 * $query->filterByApplicationNumber('%fooValue%'); // WHERE application_number LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $applicationNumber The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByApplicationNumber($applicationNumber = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($applicationNumber)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $applicationNumber)) {
				$applicationNumber = str_replace('*', '%', $applicationNumber);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PatentPeer::APPLICATION_NUMBER, $applicationNumber, $comparison);
	}

	/**
	 * Filter the query on the inventor column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByInventor('fooValue');   // WHERE inventor = 'fooValue'
	 * $query->filterByInventor('%fooValue%'); // WHERE inventor LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $inventor The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByInventor($inventor = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($inventor)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $inventor)) {
				$inventor = str_replace('*', '%', $inventor);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PatentPeer::INVENTOR, $inventor, $comparison);
	}

	/**
	 * Filter the query on the patent_office_url column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPatentOfficeUrl('fooValue');   // WHERE patent_office_url = 'fooValue'
	 * $query->filterByPatentOfficeUrl('%fooValue%'); // WHERE patent_office_url LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $patentOfficeUrl The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByPatentOfficeUrl($patentOfficeUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($patentOfficeUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $patentOfficeUrl)) {
				$patentOfficeUrl = str_replace('*', '%', $patentOfficeUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PatentPeer::PATENT_OFFICE_URL, $patentOfficeUrl, $comparison);
	}

	/**
	 * Filter the query on the assignee column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAssignee('fooValue');   // WHERE assignee = 'fooValue'
	 * $query->filterByAssignee('%fooValue%'); // WHERE assignee LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $assignee The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByAssignee($assignee = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($assignee)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $assignee)) {
				$assignee = str_replace('*', '%', $assignee);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PatentPeer::ASSIGNEE, $assignee, $comparison);
	}

	/**
	 * Filter the query on the google_url column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByGoogleUrl('fooValue');   // WHERE google_url = 'fooValue'
	 * $query->filterByGoogleUrl('%fooValue%'); // WHERE google_url LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $googleUrl The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByGoogleUrl($googleUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($googleUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $googleUrl)) {
				$googleUrl = str_replace('*', '%', $googleUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PatentPeer::GOOGLE_URL, $googleUrl, $comparison);
	}

	/**
	 * Filter the query on the patent_date column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPatentDate('2011-03-14'); // WHERE patent_date = '2011-03-14'
	 * $query->filterByPatentDate('now'); // WHERE patent_date = '2011-03-14'
	 * $query->filterByPatentDate(array('max' => 'yesterday')); // WHERE patent_date > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $patentDate The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByPatentDate($patentDate = null, $comparison = null)
	{
		if (is_array($patentDate)) {
			$useMinMax = false;
			if (isset($patentDate['min'])) {
				$this->addUsingAlias(PatentPeer::PATENT_DATE, $patentDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($patentDate['max'])) {
				$this->addUsingAlias(PatentPeer::PATENT_DATE, $patentDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PatentPeer::PATENT_DATE, $patentDate, $comparison);
	}

	/**
	 * Filter the query on the date_filed column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateFiled('2011-03-14'); // WHERE date_filed = '2011-03-14'
	 * $query->filterByDateFiled('now'); // WHERE date_filed = '2011-03-14'
	 * $query->filterByDateFiled(array('max' => 'yesterday')); // WHERE date_filed > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateFiled The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByDateFiled($dateFiled = null, $comparison = null)
	{
		if (is_array($dateFiled)) {
			$useMinMax = false;
			if (isset($dateFiled['min'])) {
				$this->addUsingAlias(PatentPeer::DATE_FILED, $dateFiled['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateFiled['max'])) {
				$this->addUsingAlias(PatentPeer::DATE_FILED, $dateFiled['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PatentPeer::DATE_FILED, $dateFiled, $comparison);
	}

	/**
	 * Filter the query on the terms column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTerms('fooValue');   // WHERE terms = 'fooValue'
	 * $query->filterByTerms('%fooValue%'); // WHERE terms LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $terms The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByTerms($terms = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($terms)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $terms)) {
				$terms = str_replace('*', '%', $terms);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PatentPeer::TERMS, $terms, $comparison);
	}

	/**
	 * Filter the query on the european_url column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByEuropeanUrl('fooValue');   // WHERE european_url = 'fooValue'
	 * $query->filterByEuropeanUrl('%fooValue%'); // WHERE european_url LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $europeanUrl The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByEuropeanUrl($europeanUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($europeanUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $europeanUrl)) {
				$europeanUrl = str_replace('*', '%', $europeanUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PatentPeer::EUROPEAN_URL, $europeanUrl, $comparison);
	}

	/**
	 * Filter the query on the date_updated column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDateUpdated('2011-03-14'); // WHERE date_updated = '2011-03-14'
	 * $query->filterByDateUpdated('now'); // WHERE date_updated = '2011-03-14'
	 * $query->filterByDateUpdated(array('max' => 'yesterday')); // WHERE date_updated > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dateUpdated The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByDateUpdated($dateUpdated = null, $comparison = null)
	{
		if (is_array($dateUpdated)) {
			$useMinMax = false;
			if (isset($dateUpdated['min'])) {
				$this->addUsingAlias(PatentPeer::DATE_UPDATED, $dateUpdated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateUpdated['max'])) {
				$this->addUsingAlias(PatentPeer::DATE_UPDATED, $dateUpdated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PatentPeer::DATE_UPDATED, $dateUpdated, $comparison);
	}

	/**
	 * Filter the query on the tags column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTags('fooValue');   // WHERE tags = 'fooValue'
	 * $query->filterByTags('%fooValue%'); // WHERE tags LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $tags The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function filterByTags($tags = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tags)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tags)) {
				$tags = str_replace('*', '%', $tags);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PatentPeer::TAGS, $tags, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Patent $patent Object to remove from the list of results
	 *
	 * @return    PatentQuery The current query, for fluid interface
	 */
	public function prune($patent = null)
	{
		if ($patent) {
			$this->addUsingAlias(PatentPeer::PATENT_ID, $patent->getPatentId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BasePatentQuery