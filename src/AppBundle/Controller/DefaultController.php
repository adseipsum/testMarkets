<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="markets")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig', [
            'test' => 'indexAction',
        ]);
    }

    /**
     * @Route("/extract-markets", name="extract-markets")
     */
    public function extractMarketsAction(Request $request)
    {

        return $this->render('default/index.html.twig', [
            'test' => 'extractMarketsAction',
        ]);
    }

    /**
     * @Route("/extract-indexes", name="extract-indexes")
     */
    public function extractIndexesAction(Request $request)
    {

        return $this->render('default/index.html.twig', [
            'test' => 'extractIndexesAction',
        ]);
    }

    /**
     * @Route("/send-xml", name="send-xml")
     */
    public function sendXmlAction(Request $request)
    {

        return $this->render('default/index.html.twig', [
            'test' => 'sendXmlAction',
        ]);
    }

}
