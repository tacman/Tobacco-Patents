<?php

namespace Tobacco\PatentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tobacco\PatentsBundle\Entity\Table
 *
 * @ORM\Table(name="_table")
 * @ORM\Entity
 */
class Table
{
    /**
     * @var integer $tableId
     *
     * @ORM\Column(name="_table_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tableId;

    /**
     * @var string $tableName
     *
     * @ORM\Column(name="table_name", type="string", length=48, nullable=false)
     */
    private $tableName;

    /**
     * @var boolean $isHidden
     *
     * @ORM\Column(name="is_hidden", type="boolean", nullable=false)
     */
    private $isHidden;

    /**
     * @var boolean $isAdmin
     *
     * @ORM\Column(name="is_admin", type="boolean", nullable=false)
     */
    private $isAdmin;

    /**
     * @var string $updateTimeField
     *
     * @ORM\Column(name="update_time_field", type="string", length=48, nullable=false)
     */
    private $updateTimeField;

    /**
     * @var integer $defaultSyncRows
     *
     * @ORM\Column(name="default_sync_rows", type="integer", nullable=false)
     */
    private $defaultSyncRows;

    /**
     * @var string $comment
     *
     * @ORM\Column(name="comment", type="string", length=48, nullable=false)
     */
    private $comment;



    /**
     * Get tableId
     *
     * @return integer 
     */
    public function getTableId()
    {
        return $this->tableId;
    }

    /**
     * Set tableName
     *
     * @param string $tableName
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
    }

    /**
     * Get tableName
     *
     * @return string 
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * Set isHidden
     *
     * @param boolean $isHidden
     */
    public function setIsHidden($isHidden)
    {
        $this->isHidden = $isHidden;
    }

    /**
     * Get isHidden
     *
     * @return boolean 
     */
    public function getIsHidden()
    {
        return $this->isHidden;
    }

    /**
     * Set isAdmin
     *
     * @param boolean $isAdmin
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get isAdmin
     *
     * @return boolean 
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Set updateTimeField
     *
     * @param string $updateTimeField
     */
    public function setUpdateTimeField($updateTimeField)
    {
        $this->updateTimeField = $updateTimeField;
    }

    /**
     * Get updateTimeField
     *
     * @return string 
     */
    public function getUpdateTimeField()
    {
        return $this->updateTimeField;
    }

    /**
     * Set defaultSyncRows
     *
     * @param integer $defaultSyncRows
     */
    public function setDefaultSyncRows($defaultSyncRows)
    {
        $this->defaultSyncRows = $defaultSyncRows;
    }

    /**
     * Get defaultSyncRows
     *
     * @return integer 
     */
    public function getDefaultSyncRows()
    {
        return $this->defaultSyncRows;
    }

    /**
     * Set comment
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
}