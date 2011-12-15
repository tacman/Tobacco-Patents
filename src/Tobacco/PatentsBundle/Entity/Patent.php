<?php

namespace Tobacco\PatentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tobacco\PatentsBundle\Entity\Patent
 *
 * @ORM\Table(name="patent")
 * @ORM\Entity(repositoryClass="Tobacco\PatentsBundle\Entity\Repository\PatentRepository")
 */
class Patent
{
    /**
     * @var smallint $patentId
     *
     * @ORM\Column(name="patent_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $patentId;

    /**
     * @var string $manufacturer
     *
     * @ORM\Column(name="manufacturer", type="string", length=255, nullable=false)
     */
    private $manufacturer;

    /**
     * @var string $brand
     *
     * @ORM\Column(name="brand", type="string", length=255, nullable=false)
     */
    private $brand;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string $patentNumber
     *
     * @ORM\Column(name="patent_number", type="string", length=32, nullable=false)
     */
    private $patentNumber;

    /**
     * @var string $applicationNumber
     *
     * @ORM\Column(name="application_number", type="string", length=255, nullable=false)
     */
    private $applicationNumber;

    /**
     * @var string $inventor
     *
     * @ORM\Column(name="inventor", type="string", length=255, nullable=false)
     */
    private $inventor;

    /**
     * @var string $assignee
     *
     * @ORM\Column(name="assignee", type="string", length=255, nullable=false)
     */
    private $assignee;

    /**
     * @var text $abstract
     *
     * @ORM\Column(name="abstract", type="text", nullable=false)
     */
    private $abstract;

    /**
     * @var string $googleUrl
     *
     * @ORM\Column(name="google_url", type="string", length=255, nullable=false)
     */
    private $googleUrl;

    /**
     * @var text $patentOfficeUrl
     *
     * @ORM\Column(name="patent_office_url", type="text", nullable=false)
     */
    private $patentOfficeUrl;

    /**
     * @var date $patentDate
     *
     * @ORM\Column(name="patent_date", type="date", nullable=false)
     */
    private $patentDate;

    /**
     * @var date $dateFiled
     *
     * @ORM\Column(name="date_filed", type="date", nullable=false)
     */
    private $dateFiled;

    /**
     * @var string $terms
     *
     * @ORM\Column(name="terms", type="string", length=255, nullable=false)
     */
    private $terms;

    /**
     * @var string $europeanUrl
     *
     * @ORM\Column(name="european_url", type="string", length=255, nullable=false)
     */
    private $europeanUrl;

    /**
     * @var date $dateUpdated
     *
     * @ORM\Column(name="date_updated", type="date", nullable=false)
     */
    private $dateUpdated;

    /**
     * @var string $tags
     *
     * @ORM\Column(name="tags", type="string", length=255, nullable=false)
     */
    private $tags;



    /**
     * Get patentId
     *
     * @return smallint
     */
    public function getPatentId()
    {
        return $this->patentId;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set brand
     *
     * @param string $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set patentNumber
     *
     * @param string $patentNumber
     */
    public function setPatentNumber($patentNumber)
    {
        $this->patentNumber = $patentNumber;
    }

    /**
     * Get patentNumber
     *
     * @return string
     */
    public function getPatentNumber()
    {
        return $this->patentNumber;
    }

    /**
     * Set applicationNumber
     *
     * @param string $applicationNumber
     */
    public function setApplicationNumber($applicationNumber)
    {
        $this->applicationNumber = $applicationNumber;
    }

    /**
     * Get applicationNumber
     *
     * @return string
     */
    public function getApplicationNumber()
    {
        return $this->applicationNumber;
    }

    /**
     * Set inventor
     *
     * @param string $inventor
     */
    public function setInventor($inventor)
    {
        $this->inventor = $inventor;
    }

    /**
     * Get inventor
     *
     * @return string
     */
    public function getInventor()
    {
        return $this->inventor;
    }

    /**
     * Set assignee
     *
     * @param string $assignee
     */
    public function setAssignee($assignee)
    {
        $this->assignee = $assignee;
    }

    /**
     * Get assignee
     *
     * @return string
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * Set abstract
     *
     * @param text $abstract
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
    }

    /**
     * Get abstract
     *
     * @return text
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Set googleUrl
     *
     * @param string $googleUrl
     */
    public function setGoogleUrl($googleUrl)
    {
        $this->googleUrl = $googleUrl;
    }

    /**
     * Get googleUrl
     *
     * @return string
     */
    public function getGoogleUrl()
    {
        return $this->googleUrl;
    }

    /**
     * Set patentOfficeUrl
     *
     * @param text $patentOfficeUrl
     */
    public function setPatentOfficeUrl($patentOfficeUrl)
    {
        $this->patentOfficeUrl = $patentOfficeUrl;
    }

    /**
     * Get patentOfficeUrl
     *
     * @return text
     */
    public function getPatentOfficeUrl()
    {
        return $this->patentOfficeUrl;
    }

    /**
     * Set patentDate
     *
     * @param date $patentDate
     */
    public function setPatentDate($patentDate)
    {
        $this->patentDate = $patentDate;
    }

    /**
     * Get patentDate
     *
     * @return date
     */
    public function getPatentDate()
    {
        return $this->patentDate;
    }

    /**
     * Set dateFiled
     *
     * @param date $dateFiled
     */
    public function setDateFiled($dateFiled)
    {
        $this->dateFiled = $dateFiled;
    }

    /**
     * Get dateFiled
     *
     * @return date
     */
    public function getDateFiled()
    {
        return $this->dateFiled;
    }

    /**
     * Set terms
     *
     * @param string $terms
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;
    }

    /**
     * Get terms
     *
     * @return string
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * Set europeanUrl
     *
     * @param string $europeanUrl
     */
    public function setEuropeanUrl($europeanUrl)
    {
        $this->europeanUrl = $europeanUrl;
    }

    /**
     * Get europeanUrl
     *
     * @return string
     */
    public function getEuropeanUrl()
    {
        return $this->europeanUrl;
    }

    /**
     * Set dateUpdated
     *
     * @param date $dateUpdated
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;
    }

    /**
     * Get dateUpdated
     *
     * @return date
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set tags
     *
     * @param string $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }
}