<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class Index extends Controller
{
    /**
     * @Route("/", name="index")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return $this->render(
            'index.html.twig'
        );
    }

    /**
     * @Route("/start/", name="start")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function start (Request $request)
    {
        $size = $request->get('size');
        $step = $request->get('step');
        return $this->render(
            'start.html.twig', ['size' => $size, 'step' => $step]
        );
    }
}
