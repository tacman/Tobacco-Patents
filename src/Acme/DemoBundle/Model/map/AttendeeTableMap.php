<?php

namespace Acme\DemoBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'attendee' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.Acme.DemoBundle.Model.map
 */
class AttendeeTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'src.Acme.DemoBundle.Model.map.AttendeeTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('attendee');
		$this->setPhpName('Attendee');
		$this->setClassname('Acme\\DemoBundle\\Model\\Attendee');
		$this->setPackage('src.Acme.DemoBundle.Model');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('EVENT_ID', 'EventId', 'INTEGER', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // AttendeeTableMap
