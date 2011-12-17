<?php

namespace Tobacco\PatentsBundle\Model\om;

use \BaseObject;
use \BasePeer;
use \Criteria;
use \DateTime;
use \DateTimeZone;
use \Exception;
use \PDO;
use \Persistent;
use \Propel;
use \PropelCollection;
use \PropelDateTime;
use \PropelException;
use \PropelObjectCollection;
use \PropelPDO;
use Tobacco\PatentsBundle\Model\PatentPeer;
use Tobacco\PatentsBundle\Model\PatentQuery;

/**
 * Base class that represents a row from the 'patent' table.
 *
 * 
 *
 * @package    propel.generator.src.Tobacco.PatentsBundle.Model.om
 */
abstract class BasePatent extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Tobacco\\PatentsBundle\\Model\\PatentPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PatentPeer
	 */
	protected static $peer;

	/**
	 * The flag var to prevent infinit loop in deep copy
	 * @var       boolean
	 */
	protected $startCopy = false;

	/**
	 * The value for the patent_id field.
	 * @var        int
	 */
	protected $patent_id;

	/**
	 * The value for the manufacturer field.
	 * @var        string
	 */
	protected $manufacturer;

	/**
	 * The value for the brand field.
	 * @var        string
	 */
	protected $brand;

	/**
	 * The value for the title field.
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the patent_number field.
	 * @var        string
	 */
	protected $patent_number;

	/**
	 * The value for the application_number field.
	 * @var        string
	 */
	protected $application_number;

	/**
	 * The value for the inventor field.
	 * @var        string
	 */
	protected $inventor;

	/**
	 * The value for the patent_office_url field.
	 * @var        string
	 */
	protected $patent_office_url;

	/**
	 * The value for the assignee field.
	 * @var        string
	 */
	protected $assignee;

	/**
	 * The value for the google_url field.
	 * @var        string
	 */
	protected $google_url;

	/**
	 * The value for the patent_date field.
	 * @var        string
	 */
	protected $patent_date;

	/**
	 * The value for the date_filed field.
	 * @var        string
	 */
	protected $date_filed;

	/**
	 * The value for the terms field.
	 * @var        string
	 */
	protected $terms;

	/**
	 * The value for the european_url field.
	 * @var        string
	 */
	protected $european_url;

	/**
	 * The value for the date_updated field.
	 * @var        string
	 */
	protected $date_updated;

	/**
	 * The value for the tags field.
	 * @var        string
	 */
	protected $tags;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [patent_id] column value.
	 * 
	 * @return     int
	 */
	public function getPatentId()
	{
		return $this->patent_id;
	}

	/**
	 * Get the [manufacturer] column value.
	 * 
	 * @return     string
	 */
	public function getManufacturer()
	{
		return $this->manufacturer;
	}

	/**
	 * Get the [brand] column value.
	 * 
	 * @return     string
	 */
	public function getBrand()
	{
		return $this->brand;
	}

	/**
	 * Get the [title] column value.
	 * 
	 * @return     string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Get the [patent_number] column value.
	 * 
	 * @return     string
	 */
	public function getPatentNumber()
	{
		return $this->patent_number;
	}

	/**
	 * Get the [application_number] column value.
	 * 
	 * @return     string
	 */
	public function getApplicationNumber()
	{
		return $this->application_number;
	}

	/**
	 * Get the [inventor] column value.
	 * 
	 * @return     string
	 */
	public function getInventor()
	{
		return $this->inventor;
	}

	/**
	 * Get the [patent_office_url] column value.
	 * 
	 * @return     string
	 */
	public function getPatentOfficeUrl()
	{
		return $this->patent_office_url;
	}

	/**
	 * Get the [assignee] column value.
	 * 
	 * @return     string
	 */
	public function getAssignee()
	{
		return $this->assignee;
	}

	/**
	 * Get the [google_url] column value.
	 * 
	 * @return     string
	 */
	public function getGoogleUrl()
	{
		return $this->google_url;
	}

	/**
	 * Get the [optionally formatted] temporal [patent_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getPatentDate($format = '%x')
	{
		if ($this->patent_date === null) {
			return null;
		}


		if ($this->patent_date === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->patent_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->patent_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [date_filed] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateFiled($format = '%x')
	{
		if ($this->date_filed === null) {
			return null;
		}


		if ($this->date_filed === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_filed);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_filed, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [terms] column value.
	 * 
	 * @return     string
	 */
	public function getTerms()
	{
		return $this->terms;
	}

	/**
	 * Get the [european_url] column value.
	 * 
	 * @return     string
	 */
	public function getEuropeanUrl()
	{
		return $this->european_url;
	}

	/**
	 * Get the [optionally formatted] temporal [date_updated] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateUpdated($format = '%x')
	{
		if ($this->date_updated === null) {
			return null;
		}


		if ($this->date_updated === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_updated);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_updated, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [tags] column value.
	 * 
	 * @return     string
	 */
	public function getTags()
	{
		return $this->tags;
	}

	/**
	 * Set the value of [patent_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setPatentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->patent_id !== $v) {
			$this->patent_id = $v;
			$this->modifiedColumns[] = PatentPeer::PATENT_ID;
		}

		return $this;
	} // setPatentId()

	/**
	 * Set the value of [manufacturer] column.
	 * 
	 * @param      string $v new value
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setManufacturer($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->manufacturer !== $v) {
			$this->manufacturer = $v;
			$this->modifiedColumns[] = PatentPeer::MANUFACTURER;
		}

		return $this;
	} // setManufacturer()

	/**
	 * Set the value of [brand] column.
	 * 
	 * @param      string $v new value
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setBrand($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->brand !== $v) {
			$this->brand = $v;
			$this->modifiedColumns[] = PatentPeer::BRAND;
		}

		return $this;
	} // setBrand()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = PatentPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [patent_number] column.
	 * 
	 * @param      string $v new value
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setPatentNumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->patent_number !== $v) {
			$this->patent_number = $v;
			$this->modifiedColumns[] = PatentPeer::PATENT_NUMBER;
		}

		return $this;
	} // setPatentNumber()

	/**
	 * Set the value of [application_number] column.
	 * 
	 * @param      string $v new value
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setApplicationNumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->application_number !== $v) {
			$this->application_number = $v;
			$this->modifiedColumns[] = PatentPeer::APPLICATION_NUMBER;
		}

		return $this;
	} // setApplicationNumber()

	/**
	 * Set the value of [inventor] column.
	 * 
	 * @param      string $v new value
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setInventor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->inventor !== $v) {
			$this->inventor = $v;
			$this->modifiedColumns[] = PatentPeer::INVENTOR;
		}

		return $this;
	} // setInventor()

	/**
	 * Set the value of [patent_office_url] column.
	 * 
	 * @param      string $v new value
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setPatentOfficeUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->patent_office_url !== $v) {
			$this->patent_office_url = $v;
			$this->modifiedColumns[] = PatentPeer::PATENT_OFFICE_URL;
		}

		return $this;
	} // setPatentOfficeUrl()

	/**
	 * Set the value of [assignee] column.
	 * 
	 * @param      string $v new value
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setAssignee($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->assignee !== $v) {
			$this->assignee = $v;
			$this->modifiedColumns[] = PatentPeer::ASSIGNEE;
		}

		return $this;
	} // setAssignee()

	/**
	 * Set the value of [google_url] column.
	 * 
	 * @param      string $v new value
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setGoogleUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->google_url !== $v) {
			$this->google_url = $v;
			$this->modifiedColumns[] = PatentPeer::GOOGLE_URL;
		}

		return $this;
	} // setGoogleUrl()

	/**
	 * Sets the value of [patent_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setPatentDate($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->patent_date !== null || $dt !== null) {
			$currentDateAsString = ($this->patent_date !== null && $tmpDt = new DateTime($this->patent_date)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->patent_date = $newDateAsString;
				$this->modifiedColumns[] = PatentPeer::PATENT_DATE;
			}
		} // if either are not null

		return $this;
	} // setPatentDate()

	/**
	 * Sets the value of [date_filed] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setDateFiled($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_filed !== null || $dt !== null) {
			$currentDateAsString = ($this->date_filed !== null && $tmpDt = new DateTime($this->date_filed)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_filed = $newDateAsString;
				$this->modifiedColumns[] = PatentPeer::DATE_FILED;
			}
		} // if either are not null

		return $this;
	} // setDateFiled()

	/**
	 * Set the value of [terms] column.
	 * 
	 * @param      string $v new value
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setTerms($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->terms !== $v) {
			$this->terms = $v;
			$this->modifiedColumns[] = PatentPeer::TERMS;
		}

		return $this;
	} // setTerms()

	/**
	 * Set the value of [european_url] column.
	 * 
	 * @param      string $v new value
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setEuropeanUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->european_url !== $v) {
			$this->european_url = $v;
			$this->modifiedColumns[] = PatentPeer::EUROPEAN_URL;
		}

		return $this;
	} // setEuropeanUrl()

	/**
	 * Sets the value of [date_updated] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setDateUpdated($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->date_updated !== null || $dt !== null) {
			$currentDateAsString = ($this->date_updated !== null && $tmpDt = new DateTime($this->date_updated)) ? $tmpDt->format('Y-m-d') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->date_updated = $newDateAsString;
				$this->modifiedColumns[] = PatentPeer::DATE_UPDATED;
			}
		} // if either are not null

		return $this;
	} // setDateUpdated()

	/**
	 * Set the value of [tags] column.
	 * 
	 * @param      string $v new value
	 * @return     Patent The current object (for fluent API support)
	 */
	public function setTags($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tags !== $v) {
			$this->tags = $v;
			$this->modifiedColumns[] = PatentPeer::TAGS;
		}

		return $this;
	} // setTags()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->patent_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->manufacturer = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->brand = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->title = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->patent_number = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->application_number = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->inventor = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->patent_office_url = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->assignee = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->google_url = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->patent_date = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->date_filed = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->terms = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->european_url = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->date_updated = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->tags = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 16; // 16 = PatentPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Patent object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PatentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PatentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PatentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = PatentQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PatentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				PatentPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() || $this->isModified()) {
				// persist changes
				if ($this->isNew()) {
					$this->doInsert($con);
				} else {
					$this->doUpdate($con);
				}
				$affectedRows += 1;
				$this->resetModified();
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Insert the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @throws     PropelException
	 * @see        doSave()
	 */
	protected function doInsert(PropelPDO $con)
	{
		$modifiedColumns = array();
		$index = 0;

		$this->modifiedColumns[] = PatentPeer::PATENT_ID;
		if (null !== $this->patent_id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . PatentPeer::PATENT_ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(PatentPeer::PATENT_ID)) {
			$modifiedColumns[':p' . $index++]  = '`PATENT_ID`';
		}
		if ($this->isColumnModified(PatentPeer::MANUFACTURER)) {
			$modifiedColumns[':p' . $index++]  = '`MANUFACTURER`';
		}
		if ($this->isColumnModified(PatentPeer::BRAND)) {
			$modifiedColumns[':p' . $index++]  = '`BRAND`';
		}
		if ($this->isColumnModified(PatentPeer::TITLE)) {
			$modifiedColumns[':p' . $index++]  = '`TITLE`';
		}
		if ($this->isColumnModified(PatentPeer::PATENT_NUMBER)) {
			$modifiedColumns[':p' . $index++]  = '`PATENT_NUMBER`';
		}
		if ($this->isColumnModified(PatentPeer::APPLICATION_NUMBER)) {
			$modifiedColumns[':p' . $index++]  = '`APPLICATION_NUMBER`';
		}
		if ($this->isColumnModified(PatentPeer::INVENTOR)) {
			$modifiedColumns[':p' . $index++]  = '`INVENTOR`';
		}
		if ($this->isColumnModified(PatentPeer::PATENT_OFFICE_URL)) {
			$modifiedColumns[':p' . $index++]  = '`PATENT_OFFICE_URL`';
		}
		if ($this->isColumnModified(PatentPeer::ASSIGNEE)) {
			$modifiedColumns[':p' . $index++]  = '`ASSIGNEE`';
		}
		if ($this->isColumnModified(PatentPeer::GOOGLE_URL)) {
			$modifiedColumns[':p' . $index++]  = '`GOOGLE_URL`';
		}
		if ($this->isColumnModified(PatentPeer::PATENT_DATE)) {
			$modifiedColumns[':p' . $index++]  = '`PATENT_DATE`';
		}
		if ($this->isColumnModified(PatentPeer::DATE_FILED)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_FILED`';
		}
		if ($this->isColumnModified(PatentPeer::TERMS)) {
			$modifiedColumns[':p' . $index++]  = '`TERMS`';
		}
		if ($this->isColumnModified(PatentPeer::EUROPEAN_URL)) {
			$modifiedColumns[':p' . $index++]  = '`EUROPEAN_URL`';
		}
		if ($this->isColumnModified(PatentPeer::DATE_UPDATED)) {
			$modifiedColumns[':p' . $index++]  = '`DATE_UPDATED`';
		}
		if ($this->isColumnModified(PatentPeer::TAGS)) {
			$modifiedColumns[':p' . $index++]  = '`TAGS`';
		}

		$sql = sprintf(
			'INSERT INTO `patent` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`PATENT_ID`':
						$stmt->bindValue($identifier, $this->patent_id, PDO::PARAM_INT);
						break;
					case '`MANUFACTURER`':
						$stmt->bindValue($identifier, $this->manufacturer, PDO::PARAM_STR);
						break;
					case '`BRAND`':
						$stmt->bindValue($identifier, $this->brand, PDO::PARAM_STR);
						break;
					case '`TITLE`':
						$stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
						break;
					case '`PATENT_NUMBER`':
						$stmt->bindValue($identifier, $this->patent_number, PDO::PARAM_STR);
						break;
					case '`APPLICATION_NUMBER`':
						$stmt->bindValue($identifier, $this->application_number, PDO::PARAM_STR);
						break;
					case '`INVENTOR`':
						$stmt->bindValue($identifier, $this->inventor, PDO::PARAM_STR);
						break;
					case '`PATENT_OFFICE_URL`':
						$stmt->bindValue($identifier, $this->patent_office_url, PDO::PARAM_STR);
						break;
					case '`ASSIGNEE`':
						$stmt->bindValue($identifier, $this->assignee, PDO::PARAM_STR);
						break;
					case '`GOOGLE_URL`':
						$stmt->bindValue($identifier, $this->google_url, PDO::PARAM_STR);
						break;
					case '`PATENT_DATE`':
						$stmt->bindValue($identifier, $this->patent_date, PDO::PARAM_STR);
						break;
					case '`DATE_FILED`':
						$stmt->bindValue($identifier, $this->date_filed, PDO::PARAM_STR);
						break;
					case '`TERMS`':
						$stmt->bindValue($identifier, $this->terms, PDO::PARAM_STR);
						break;
					case '`EUROPEAN_URL`':
						$stmt->bindValue($identifier, $this->european_url, PDO::PARAM_STR);
						break;
					case '`DATE_UPDATED`':
						$stmt->bindValue($identifier, $this->date_updated, PDO::PARAM_STR);
						break;
					case '`TAGS`':
						$stmt->bindValue($identifier, $this->tags, PDO::PARAM_STR);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

		try {
			$pk = $con->lastInsertId();
		} catch (Exception $e) {
			throw new PropelException('Unable to get autoincrement id.', $e);
		}
		$this->setPatentId($pk);

		$this->setNew(false);
	}

	/**
	 * Update the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @see        doSave()
	 */
	protected function doUpdate(PropelPDO $con)
	{
		$selectCriteria = $this->buildPkeyCriteria();
		$valuesCriteria = $this->buildCriteria();
		BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
	}

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = PatentPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PatentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getPatentId();
				break;
			case 1:
				return $this->getManufacturer();
				break;
			case 2:
				return $this->getBrand();
				break;
			case 3:
				return $this->getTitle();
				break;
			case 4:
				return $this->getPatentNumber();
				break;
			case 5:
				return $this->getApplicationNumber();
				break;
			case 6:
				return $this->getInventor();
				break;
			case 7:
				return $this->getPatentOfficeUrl();
				break;
			case 8:
				return $this->getAssignee();
				break;
			case 9:
				return $this->getGoogleUrl();
				break;
			case 10:
				return $this->getPatentDate();
				break;
			case 11:
				return $this->getDateFiled();
				break;
			case 12:
				return $this->getTerms();
				break;
			case 13:
				return $this->getEuropeanUrl();
				break;
			case 14:
				return $this->getDateUpdated();
				break;
			case 15:
				return $this->getTags();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
	{
		if (isset($alreadyDumpedObjects['Patent'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Patent'][$this->getPrimaryKey()] = true;
		$keys = PatentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getPatentId(),
			$keys[1] => $this->getManufacturer(),
			$keys[2] => $this->getBrand(),
			$keys[3] => $this->getTitle(),
			$keys[4] => $this->getPatentNumber(),
			$keys[5] => $this->getApplicationNumber(),
			$keys[6] => $this->getInventor(),
			$keys[7] => $this->getPatentOfficeUrl(),
			$keys[8] => $this->getAssignee(),
			$keys[9] => $this->getGoogleUrl(),
			$keys[10] => $this->getPatentDate(),
			$keys[11] => $this->getDateFiled(),
			$keys[12] => $this->getTerms(),
			$keys[13] => $this->getEuropeanUrl(),
			$keys[14] => $this->getDateUpdated(),
			$keys[15] => $this->getTags(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PatentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setPatentId($value);
				break;
			case 1:
				$this->setManufacturer($value);
				break;
			case 2:
				$this->setBrand($value);
				break;
			case 3:
				$this->setTitle($value);
				break;
			case 4:
				$this->setPatentNumber($value);
				break;
			case 5:
				$this->setApplicationNumber($value);
				break;
			case 6:
				$this->setInventor($value);
				break;
			case 7:
				$this->setPatentOfficeUrl($value);
				break;
			case 8:
				$this->setAssignee($value);
				break;
			case 9:
				$this->setGoogleUrl($value);
				break;
			case 10:
				$this->setPatentDate($value);
				break;
			case 11:
				$this->setDateFiled($value);
				break;
			case 12:
				$this->setTerms($value);
				break;
			case 13:
				$this->setEuropeanUrl($value);
				break;
			case 14:
				$this->setDateUpdated($value);
				break;
			case 15:
				$this->setTags($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PatentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setPatentId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setManufacturer($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setBrand($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTitle($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPatentNumber($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setApplicationNumber($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setInventor($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPatentOfficeUrl($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAssignee($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setGoogleUrl($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPatentDate($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDateFiled($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setTerms($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setEuropeanUrl($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateUpdated($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setTags($arr[$keys[15]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PatentPeer::DATABASE_NAME);

		if ($this->isColumnModified(PatentPeer::PATENT_ID)) $criteria->add(PatentPeer::PATENT_ID, $this->patent_id);
		if ($this->isColumnModified(PatentPeer::MANUFACTURER)) $criteria->add(PatentPeer::MANUFACTURER, $this->manufacturer);
		if ($this->isColumnModified(PatentPeer::BRAND)) $criteria->add(PatentPeer::BRAND, $this->brand);
		if ($this->isColumnModified(PatentPeer::TITLE)) $criteria->add(PatentPeer::TITLE, $this->title);
		if ($this->isColumnModified(PatentPeer::PATENT_NUMBER)) $criteria->add(PatentPeer::PATENT_NUMBER, $this->patent_number);
		if ($this->isColumnModified(PatentPeer::APPLICATION_NUMBER)) $criteria->add(PatentPeer::APPLICATION_NUMBER, $this->application_number);
		if ($this->isColumnModified(PatentPeer::INVENTOR)) $criteria->add(PatentPeer::INVENTOR, $this->inventor);
		if ($this->isColumnModified(PatentPeer::PATENT_OFFICE_URL)) $criteria->add(PatentPeer::PATENT_OFFICE_URL, $this->patent_office_url);
		if ($this->isColumnModified(PatentPeer::ASSIGNEE)) $criteria->add(PatentPeer::ASSIGNEE, $this->assignee);
		if ($this->isColumnModified(PatentPeer::GOOGLE_URL)) $criteria->add(PatentPeer::GOOGLE_URL, $this->google_url);
		if ($this->isColumnModified(PatentPeer::PATENT_DATE)) $criteria->add(PatentPeer::PATENT_DATE, $this->patent_date);
		if ($this->isColumnModified(PatentPeer::DATE_FILED)) $criteria->add(PatentPeer::DATE_FILED, $this->date_filed);
		if ($this->isColumnModified(PatentPeer::TERMS)) $criteria->add(PatentPeer::TERMS, $this->terms);
		if ($this->isColumnModified(PatentPeer::EUROPEAN_URL)) $criteria->add(PatentPeer::EUROPEAN_URL, $this->european_url);
		if ($this->isColumnModified(PatentPeer::DATE_UPDATED)) $criteria->add(PatentPeer::DATE_UPDATED, $this->date_updated);
		if ($this->isColumnModified(PatentPeer::TAGS)) $criteria->add(PatentPeer::TAGS, $this->tags);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PatentPeer::DATABASE_NAME);
		$criteria->add(PatentPeer::PATENT_ID, $this->patent_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getPatentId();
	}

	/**
	 * Generic method to set the primary key (patent_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setPatentId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getPatentId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Patent (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setManufacturer($this->getManufacturer());
		$copyObj->setBrand($this->getBrand());
		$copyObj->setTitle($this->getTitle());
		$copyObj->setPatentNumber($this->getPatentNumber());
		$copyObj->setApplicationNumber($this->getApplicationNumber());
		$copyObj->setInventor($this->getInventor());
		$copyObj->setPatentOfficeUrl($this->getPatentOfficeUrl());
		$copyObj->setAssignee($this->getAssignee());
		$copyObj->setGoogleUrl($this->getGoogleUrl());
		$copyObj->setPatentDate($this->getPatentDate());
		$copyObj->setDateFiled($this->getDateFiled());
		$copyObj->setTerms($this->getTerms());
		$copyObj->setEuropeanUrl($this->getEuropeanUrl());
		$copyObj->setDateUpdated($this->getDateUpdated());
		$copyObj->setTags($this->getTags());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setPatentId(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Patent Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     PatentPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PatentPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->patent_id = null;
		$this->manufacturer = null;
		$this->brand = null;
		$this->title = null;
		$this->patent_number = null;
		$this->application_number = null;
		$this->inventor = null;
		$this->patent_office_url = null;
		$this->assignee = null;
		$this->google_url = null;
		$this->patent_date = null;
		$this->date_filed = null;
		$this->terms = null;
		$this->european_url = null;
		$this->date_updated = null;
		$this->tags = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(PatentPeer::DEFAULT_STRING_FORMAT);
	}

} // BasePatent
