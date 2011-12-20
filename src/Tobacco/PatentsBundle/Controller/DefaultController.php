<?php

namespace Tobacco\PatentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tobacco\PatentsBundle\Model\PatentQuery;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\PropelAdapter;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function helloAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/", name="_patent")
     * @Template()
     */
    public function indexAction()
    {
      return array('categories'=>$this->getPatentRepository()->getTagsAndCount());
    }

    /**
     * @Route("/categories", name="_patent_category")
     * @Template()
     */
    public function categoriesAction()
    {
      return array('categories'=>$this->getPatentRepository()->getTagsAndCount());
    }

    /**
     * @Route("/list/{tags}/{page}", name="_doctrine_patent_list")
     * @Template()
     */
    public function listAction($tags='', $page=1)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $patents = $em->getRepository('TobaccoPatentsBundle:Patent')->findBy(
          array('tags'=>$tags)
        );

        return array('patents'=>$patents);
    }

    /**
     * @Route("/search", name="_patent_search")
     * @Template()
     */
    public function searchAction()
    {
        return array();
    }

    private function getPatentRepository()
    {
      return $this->getDoctrine()
        ->getEntityManager()
        ->getRepository('TobaccoPatentsBundle:Patent');
    }


    /**
     * @Route("/list_propel/{tags}/{page}", name="_patent_list", defaults={"tags"="","page"=1})
     */
    public function list_propelAction($tags='', $page=1)
    {
 
    	  $query = PatentQuery::create();
    	  if ($tags) {
    	  	$query->findByTags($tags);
    	  }
			  $adapter = new PropelAdapter($query);
			  $request = $this->getRequest();
        $q = $request->query->get('q', '');
        if ($q) {
            $query->filterByTitle("%$q%")->_or()->filterByTerms("%$q%");
        }
			  $currentPage = $page; // $request->query->get('page'); // 

$pagerfanta = new Pagerfanta($adapter);


$pagerfanta->setMaxPerPage($maxPerPage=5); // 10 by default
$pagerfanta->setCurrentPage($currentPage); // 1 by default
/*
$maxPerPage = $pagerfanta->getMaxPerPage();

$currentPage = $pagerfanta->getCurrentPage();

$nbResults = $pagerfanta->getNbResults();
$currentPageResults = $pagerfanta->getCurrentPageResults();

$pagerfanta->getNbPages();

$pagerfanta->haveToPaginate(); // whether the number of results if higher than the max per page

$pagerfanta->hasPreviousPage();
$pagerfanta->getPreviousPage();
$pagerfanta->hasNextPage();
$pagerfanta->getNextPage();

die();
*/
    	  return $this->render('TobaccoPatentsBundle:Default:list_propel.html.twig', array(
    	  	'pager' => $pagerfanta,
    	  	'tags' => $tags,
    	  	'patents' => $currentPageResults = $pagerfanta->getCurrentPageResults() ));
    }

}
