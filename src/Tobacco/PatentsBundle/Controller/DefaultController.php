<?php

namespace Tobacco\PatentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
        return array();
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
     * @Route("/list/{tags}", name="_patent_list")
     * @Template()
     */
    public function listAction($tags='')
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
}
