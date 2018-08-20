<?php
/**
 * Created by PhpStorm.
 * User: Norbert
 * Date: 2018. 08. 20.
 * Time: 23:34
 */

namespace App\Controller;



use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class DefaultController
{
    /**
     * @Route("/")
     */
    public function homepage(Environment $twig){

        return new Response($twig->render("base.html.twig"));

    }
}