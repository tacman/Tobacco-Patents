<?php

namespace Tobacco\PatentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tobacco\PatentsBundle\Entity\Field
 *
 * @ORM\Table(name="_field")
 * @ORM\Entity
 */
class Field
{
    /**
     * @var integer $fieldId
     *
     * @ORM\Column(name="_field_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fieldId;

    /**
     * @var string $table
     *
     * @ORM\Column(name="table", type="string", length=48, nullable=false)
     */
    private $table;

    /**
     * @var string $fieldName
     *
     * @ORM\Column(name="field_name", type="string", length=48, nullable=false)
     */
    private $fieldName;

    /**
     * @var string $fieldType
     *
     * @ORM\Column(name="field_type", type="string", length=48, nullable=false)
     */
    private $fieldType;

    /**
     * @var boolean $fieldSize
     *
     * @ORM\Column(name="field_size", type="boolean", nullable=false)
     */
    private $fieldSize;

    /**
     * @var string $default
     *
     * @ORM\Column(name="default", type="string", length=255, nullable=false)
     */
    private $default;

    /**
     * @var string $defaultValue
     *
     * @ORM\Column(name="default_value", type="string", length=255, nullable=false)
     */
    private $defaultValue;

    /**
     * @var boolean $isRequired
     *
     * @ORM\Column(name="is_required", type="boolean", nullable=false)
     */
    private $isRequired;

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
     * @var boolean $isDbField
     *
     * @ORM\Column(name="is_db_field", type="boolean", nullable=false)
     */
    private $isDbField;

    /**
     * @var string $validation
     *
     * @ORM\Column(name="validation", type="string", length=64, nullable=false)
     */
    private $validation;

    /**
     * @var string $sql
     *
     * @ORM\Column(name="sql", type="string", length=255, nullable=false)
     */
    private $sql;

    /**
     * @var string $values
     *
     * @ORM\Column(name="values", type="string", length=255, nullable=false)
     */
    private $values;

    /**
     * @var string $otherLabel
     *
     * @ORM\Column(name="other_label", type="string", length=255, nullable=false)
     */
    private $otherLabel;

    /**
     * @var string $topPrompt
     *
     * @ORM\Column(name="top_prompt", type="string", length=255, nullable=false)
     */
    private $topPrompt;

    /**
     * @var string $style
     *
     * @ORM\Column(name="style", type="string", length=32, nullable=false)
     */
    private $style;

    /**
     * @var string $ops
     *
     * @ORM\Column(name="ops", type="string", length=64, nullable=false)
     */
    private $ops;

    /**
     * @var string $extra
     *
     * @ORM\Column(name="extra", type="string", length=48, nullable=false)
     */
    private $extra;

    /**
     * @var boolean $canBeNull
     *
     * @ORM\Column(name="can_be_null", type="boolean", nullable=false)
     */
    private $canBeNull;

    /**
     * @var string $fkTable
     *
     * @ORM\Column(name="fk_table", type="string", length=48, nullable=false)
     */
    private $fkTable;

    /**
     * @var string $fkId
     *
     * @ORM\Column(name="fk_id", type="string", length=48, nullable=false)
     */
    private $fkId;

    /**
     * @var integer $displayWidth
     *
     * @ORM\Column(name="display_width", type="integer", nullable=false)
     */
    private $displayWidth;

    /**
     * @var boolean $rows
     *
     * @ORM\Column(name="rows", type="boolean", nullable=false)
     */
    private $rows;

    /**
     * @var boolean $width
     *
     * @ORM\Column(name="width", type="boolean", nullable=false)
     */
    private $width;

    /**
     * @var integer $pixelWidth
     *
     * @ORM\Column(name="pixel_width", type="integer", nullable=false)
     */
    private $pixelWidth;

    /**
     * @var string $formatter
     *
     * @ORM\Column(name="formatter", type="string", length=80, nullable=false)
     */
    private $formatter;

    /**
     * @var text $formatoptions
     *
     * @ORM\Column(name="formatoptions", type="text", nullable=false)
     */
    private $formatoptions;

    /**
     * @var string $sprintfFormat
     *
     * @ORM\Column(name="sprintf_format", type="string", length=80, nullable=false)
     */
    private $sprintfFormat;

    /**
     * @var integer $maxLength
     *
     * @ORM\Column(name="max_length", type="integer", nullable=false)
     */
    private $maxLength;

    /**
     * @var integer $distinctCount
     *
     * @ORM\Column(name="distinct_count", type="integer", nullable=false)
     */
    private $distinctCount;

    /**
     * @var string $label
     *
     * @ORM\Column(name="label", type="string", length=64, nullable=false)
     */
    private $label;

    /**
     * @var string $comments
     *
     * @ORM\Column(name="comments", type="string", length=255, nullable=false)
     */
    private $comments;

    /**
     * @var text $help
     *
     * @ORM\Column(name="help", type="text", nullable=false)
     */
    private $help;

    /**
     * @var string $indexType
     *
     * @ORM\Column(name="index_type", type="string", length=4, nullable=false)
     */
    private $indexType;



    /**
     * Get fieldId
     *
     * @return integer 
     */
    public function getFieldId()
    {
        return $this->fieldId;
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
     * Set fieldName
     *
     * @param string $fieldName
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
    }

    /**
     * Get fieldName
     *
     * @return string 
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Set fieldType
     *
     * @param string $fieldType
     */
    public function setFieldType($fieldType)
    {
        $this->fieldType = $fieldType;
    }

    /**
     * Get fieldType
     *
     * @return string 
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * Set fieldSize
     *
     * @param boolean $fieldSize
     */
    public function setFieldSize($fieldSize)
    {
        $this->fieldSize = $fieldSize;
    }

    /**
     * Get fieldSize
     *
     * @return boolean 
     */
    public function getFieldSize()
    {
        return $this->fieldSize;
    }

    /**
     * Set default
     *
     * @param string $default
     */
    public function setDefault($default)
    {
        $this->default = $default;
    }

    /**
     * Get default
     *
     * @return string 
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Set defaultValue
     *
     * @param string $defaultValue
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;
    }

    /**
     * Get defaultValue
     *
     * @return string 
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Set isRequired
     *
     * @param boolean $isRequired
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;
    }

    /**
     * Get isRequired
     *
     * @return boolean 
     */
    public function getIsRequired()
    {
        return $this->isRequired;
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
     * Set isDbField
     *
     * @param boolean $isDbField
     */
    public function setIsDbField($isDbField)
    {
        $this->isDbField = $isDbField;
    }

    /**
     * Get isDbField
     *
     * @return boolean 
     */
    public function getIsDbField()
    {
        return $this->isDbField;
    }

    /**
     * Set validation
     *
     * @param string $validation
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;
    }

    /**
     * Get validation
     *
     * @return string 
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * Set sql
     *
     * @param string $sql
     */
    public function setSql($sql)
    {
        $this->sql = $sql;
    }

    /**
     * Get sql
     *
     * @return string 
     */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * Set values
     *
     * @param string $values
     */
    public function setValues($values)
    {
        $this->values = $values;
    }

    /**
     * Get values
     *
     * @return string 
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Set otherLabel
     *
     * @param string $otherLabel
     */
    public function setOtherLabel($otherLabel)
    {
        $this->otherLabel = $otherLabel;
    }

    /**
     * Get otherLabel
     *
     * @return string 
     */
    public function getOtherLabel()
    {
        return $this->otherLabel;
    }

    /**
     * Set topPrompt
     *
     * @param string $topPrompt
     */
    public function setTopPrompt($topPrompt)
    {
        $this->topPrompt = $topPrompt;
    }

    /**
     * Get topPrompt
     *
     * @return string 
     */
    public function getTopPrompt()
    {
        return $this->topPrompt;
    }

    /**
     * Set style
     *
     * @param string $style
     */
    public function setStyle($style)
    {
        $this->style = $style;
    }

    /**
     * Get style
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set ops
     *
     * @param string $ops
     */
    public function setOps($ops)
    {
        $this->ops = $ops;
    }

    /**
     * Get ops
     *
     * @return string 
     */
    public function getOps()
    {
        return $this->ops;
    }

    /**
     * Set extra
     *
     * @param string $extra
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;
    }

    /**
     * Get extra
     *
     * @return string 
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Set canBeNull
     *
     * @param boolean $canBeNull
     */
    public function setCanBeNull($canBeNull)
    {
        $this->canBeNull = $canBeNull;
    }

    /**
     * Get canBeNull
     *
     * @return boolean 
     */
    public function getCanBeNull()
    {
        return $this->canBeNull;
    }

    /**
     * Set fkTable
     *
     * @param string $fkTable
     */
    public function setFkTable($fkTable)
    {
        $this->fkTable = $fkTable;
    }

    /**
     * Get fkTable
     *
     * @return string 
     */
    public function getFkTable()
    {
        return $this->fkTable;
    }

    /**
     * Set fkId
     *
     * @param string $fkId
     */
    public function setFkId($fkId)
    {
        $this->fkId = $fkId;
    }

    /**
     * Get fkId
     *
     * @return string 
     */
    public function getFkId()
    {
        return $this->fkId;
    }

    /**
     * Set displayWidth
     *
     * @param integer $displayWidth
     */
    public function setDisplayWidth($displayWidth)
    {
        $this->displayWidth = $displayWidth;
    }

    /**
     * Get displayWidth
     *
     * @return integer 
     */
    public function getDisplayWidth()
    {
        return $this->displayWidth;
    }

    /**
     * Set rows
     *
     * @param boolean $rows
     */
    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    /**
     * Get rows
     *
     * @return boolean 
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Set width
     *
     * @param boolean $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * Get width
     *
     * @return boolean 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set pixelWidth
     *
     * @param integer $pixelWidth
     */
    public function setPixelWidth($pixelWidth)
    {
        $this->pixelWidth = $pixelWidth;
    }

    /**
     * Get pixelWidth
     *
     * @return integer 
     */
    public function getPixelWidth()
    {
        return $this->pixelWidth;
    }

    /**
     * Set formatter
     *
     * @param string $formatter
     */
    public function setFormatter($formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * Get formatter
     *
     * @return string 
     */
    public function getFormatter()
    {
        return $this->formatter;
    }

    /**
     * Set formatoptions
     *
     * @param text $formatoptions
     */
    public function setFormatoptions($formatoptions)
    {
        $this->formatoptions = $formatoptions;
    }

    /**
     * Get formatoptions
     *
     * @return text 
     */
    public function getFormatoptions()
    {
        return $this->formatoptions;
    }

    /**
     * Set sprintfFormat
     *
     * @param string $sprintfFormat
     */
    public function setSprintfFormat($sprintfFormat)
    {
        $this->sprintfFormat = $sprintfFormat;
    }

    /**
     * Get sprintfFormat
     *
     * @return string 
     */
    public function getSprintfFormat()
    {
        return $this->sprintfFormat;
    }

    /**
     * Set maxLength
     *
     * @param integer $maxLength
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
    }

    /**
     * Get maxLength
     *
     * @return integer 
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * Set distinctCount
     *
     * @param integer $distinctCount
     */
    public function setDistinctCount($distinctCount)
    {
        $this->distinctCount = $distinctCount;
    }

    /**
     * Get distinctCount
     *
     * @return integer 
     */
    public function getDistinctCount()
    {
        return $this->distinctCount;
    }

    /**
     * Set label
     *
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set comments
     *
     * @param string $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set help
     *
     * @param text $help
     */
    public function setHelp($help)
    {
        $this->help = $help;
    }

    /**
     * Get help
     *
     * @return text 
     */
    public function getHelp()
    {
        return $this->help;
    }

    /**
     * Set indexType
     *
     * @param string $indexType
     */
    public function setIndexType($indexType)
    {
        $this->indexType = $indexType;
    }

    /**
     * Get indexType
     *
     * @return string 
     */
    public function getIndexType()
    {
        return $this->indexType;
    }
}