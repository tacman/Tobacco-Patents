<?php

namespace Tobacco\PatentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tobacco\PatentsBundle\Entity\View
 *
 * @ORM\Table(name="_view")
 * @ORM\Entity
 */
class View
{
    /**
     * @var integer $viewId
     *
     * @ORM\Column(name="_view_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $viewId;

    /**
     * @var string $viewName
     *
     * @ORM\Column(name="view_name", type="string", length=48, nullable=false)
     */
    private $viewName;

    /**
     * @var string $table
     *
     * @ORM\Column(name="table", type="string", length=48, nullable=false)
     */
    private $table;

    /**
     * @var text $preQuery
     *
     * @ORM\Column(name="pre_query", type="text", nullable=false)
     */
    private $preQuery;

    /**
     * @var text $select
     *
     * @ORM\Column(name="select", type="text", nullable=false)
     */
    private $select;

    /**
     * @var text $from
     *
     * @ORM\Column(name="from", type="text", nullable=false)
     */
    private $from;

    /**
     * @var boolean $isAdmin
     *
     * @ORM\Column(name="is_admin", type="boolean", nullable=false)
     */
    private $isAdmin;

    /**
     * @var integer $defaultDisplayRows
     *
     * @ORM\Column(name="default_display_rows", type="integer", nullable=false)
     */
    private $defaultDisplayRows;

    /**
     * @var string $comment
     *
     * @ORM\Column(name="comment", type="string", length=48, nullable=false)
     */
    private $comment;



    /**
     * Get viewId
     *
     * @return integer 
     */
    public function getViewId()
    {
        return $this->viewId;
    }

    /**
     * Set viewName
     *
     * @param string $viewName
     */
    public function setViewName($viewName)
    {
        $this->viewName = $viewName;
    }

    /**
     * Get viewName
     *
     * @return string 
     */
    public function getViewName()
    {
        return $this->viewName;
    }

    /**
     * Set table
     *
     * @param string $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }

    /**
     * Get table
     *
     * @return string 
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Set preQuery
     *
     * @param text $preQuery
     */
    public function setPreQuery($preQuery)
    {
        $this->preQuery = $preQuery;
    }

    /**
     * Get preQuery
     *
     * @return text 
     */
    public function getPreQuery()
    {
        return $this->preQuery;
    }

    /**
     * Set select
     *
     * @param text $select
     */
    public function setSelect($select)
    {
        $this->select = $select;
    }

    /**
     * Get select
     *
     * @return text 
     */
    public function getSelect()
    {
        return $this->select;
    }

    /**
     * Set from
     *
     * @param text $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * Get from
     *
     * @return text 
     */
    public function getFrom()
    {
        return $this->from;
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
     * Set defaultDisplayRows
     *
     * @param integer $defaultDisplayRows
     */
    public function setDefaultDisplayRows($defaultDisplayRows)
    {
        $this->defaultDisplayRows = $defaultDisplayRows;
    }

    /**
     * Get defaultDisplayRows
     *
     * @return integer 
     */
    public function getDefaultDisplayRows()
    {
        return $this->defaultDisplayRows;
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