<?php

namespace Tobacco\PatentsBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PatentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PatentRepository extends EntityRepository
{

public function getTagsAndCount()
{
      return $this->createQueryBuilder('p')
          ->select("p.tags, count(p.patentId) as tag_count")
          ->groupBy("p.tags")
          ->getQuery()
          // ->execute()
          ->getArrayResult()
        ;
}

}