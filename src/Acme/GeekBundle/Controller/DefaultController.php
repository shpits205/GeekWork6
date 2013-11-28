<?php

namespace Acme\GeekBundle\Controller;

use Acme\GeekBundle\Entity\Country;
use Acme\GeekBundle\Entity\Continent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $Country = $this->getDoctrine()
            ->getRepository('AcmeGeekBundle:Country')->findAll();
        return $this->render('AcmeGeekBundle:Hello:index.html.twig', array('arr' => $Country));
    }
    public function aboutAction(Request $request)
    {
        $page = $request->query->get('page');
        $Country = $this->getDoctrine()
            ->getRepository('AcmeGeekBundle:Country')->findAll();
        return $this->render('AcmeGeekBundle:Hello:about.html.twig', array('mas' => $Country, 'page' => $page));
    }
}
