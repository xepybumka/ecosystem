<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Builder\Animal\HerbivoreBuilder;
use App\Builder\Animal\PredatorBuilder;
use App\Builder\Animal\LargePredatorBuilder;
use App\Builder\Plant\PlantBuilder;
use App\Builder\Observer\ObserverBuilder;

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
            '/index/index.html.twig'
        );
    }

    /**
     * @Route("/start/", name="start")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function start(Request $request)
    {
        $size = $request->get('size');
        $step = $request->get('step');

        $herbivore = (new HerbivoreBuilder())->create();
        $largePredator = (new LargePredatorBuilder())->create();
        $predator = (new PredatorBuilder())->create();
        $plant = (new PlantBuilder())->create();
        $observer = (new ObserverBuilder())->create();
        return $this->render(
            '/start/start.html.twig', [
                'size' => $size,
                'step' => $step,
            ]
        );
    }
}
