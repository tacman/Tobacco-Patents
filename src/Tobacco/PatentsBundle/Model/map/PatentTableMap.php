<?php

namespace Tobacco\PatentsBundle\Model\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'patent' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.src.Tobacco.PatentsBundle.Model.map
 */
class PatentTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'src.Tobacco.PatentsBundle.Model.map.PatentTableMap';

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
		$this->setName('patent');
		$this->setPhpName('Patent');
		$this->setClassname('Tobacco\\PatentsBundle\\Model\\Patent');
		$this->setPackage('src.Tobacco.PatentsBundle.Model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('PATENT_ID', 'PatentId', 'SMALLINT', true, 5, null);
		$this->addColumn('MANUFACTURER', 'Manufacturer', 'VARCHAR', true, 255, null);
		$this->addColumn('BRAND', 'Brand', 'VARCHAR', true, 255, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 255, null);
		$this->addColumn('PATENT_NUMBER', 'PatentNumber', 'VARCHAR', true, 32, null);
		$this->addColumn('APPLICATION_NUMBER', 'ApplicationNumber', 'VARCHAR', true, 255, null);
		$this->addColumn('INVENTOR', 'Inventor', 'VARCHAR', true, 255, null);
		$this->addColumn('PATENT_OFFICE_URL', 'PatentOfficeUrl', 'LONGVARCHAR', true, null, null);
		$this->addColumn('ASSIGNEE', 'Assignee', 'VARCHAR', true, 255, null);
		$this->addColumn('GOOGLE_URL', 'GoogleUrl', 'VARCHAR', true, 255, null);
		$this->addColumn('PATENT_DATE', 'PatentDate', 'DATE', true, null, null);
		$this->addColumn('DATE_FILED', 'DateFiled', 'DATE', true, null, null);
		$this->addColumn('TERMS', 'Terms', 'VARCHAR', true, 255, null);
		$this->addColumn('EUROPEAN_URL', 'EuropeanUrl', 'VARCHAR', true, 255, null);
		$this->addColumn('DATE_UPDATED', 'DateUpdated', 'DATE', true, null, null);
		$this->addColumn('TAGS', 'Tags', 'VARCHAR', true, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // PatentTableMap
