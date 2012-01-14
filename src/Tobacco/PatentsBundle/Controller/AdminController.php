<?php

namespace Tobacco\PatentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tobacco\PatentsBundle\Model\PatentQuery;
use Tobacco\PatentsBundle\Model\Patent;
use Tobacco\PatentsBundle\Form\Type\PatentType;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\PropelAdapter;

/**
* @Route("/admin")
**/
class AdminController extends Controller
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
     * @Route("/", name="patent_admin_index")
     * @Template()
     */
    public function indexAction()
    {
      return array('categories'=>$this->getPatentRepository()->getTagsAndCount());
    }

    /**
     * @Route("/categories", name="patent_admin_category")
     * @Template()
     */
    public function categoriesAction()
    {
      return array('categories'=>$this->getPatentRepository()->getTagsAndCount());
    }

    /**
     * @Route("/list/{tags}/{page}", name="doctrine_patent_list")
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
     * @Route("/search", name="patent_search")
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
     * @Route("/list_propel/{tags}/{page}", name="patent_list", defaults={"tags"="","page"=1})
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

    /**
     * @Route("/admin", name="patent_admin")
     */
    function adminAction() {
        return $this->render('TobaccoPatentsBundle:Default:admin.html.twig');
    }

    /**
     * @Route("/login", name="patent_login")
     * @Route("/logout", name="patent_logout")
     * @Route("/login_check", name="login_check")
     */
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('TobaccoPatentsBundle:Default:login.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }

    /**
     * @Route("/admin/new", name="patent_new")
     */
    function newAction() {
        $patent = new Patent();
        $form = $this->createForm(new PatentType(), $patent);

        $request = $this->getRequest();
        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $patent->save();
                return $this->redirect($this->generateUrl('patent_success'));
            }
        }

        return $this->render('TobaccoPatentsBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/admin/edit/{id}", requirements={"id" = "\d+"}, name="patent_edit")
     */
    function editAction(Patent $patent) {
        $form = $this->createForm(new PatentType(), $patent);

        $request = $this->getRequest();
        if ('POST' === $request->getMethod()) {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $patent->save();
                return $this->redirect($this->generateUrl('patent_success'));
            }
        }

        return $this->render('TobaccoPatentsBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
