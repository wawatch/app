<?php

namespace App\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * The controller handling the homepage action
 */
class HomepageController extends Controller
{
    /**
     * Render the homepage
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppMainBundle:Homepage:index.html.twig');
    }
}
