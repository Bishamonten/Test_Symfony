<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Hello extends Controller
{
    public function helloWorld()
    {
        return $this->render(
            'Hello/helloWorld.html.twig',['title' => __FUNCTION__,]);

    }

    /**
     *  @Route("/helloAnnotation", name="hello_annotation")
     */
    public function helloAnnotation() {
        return $this->render(
            'Hello/helloAnnotation.html.twig',['title' => __FUNCTION__,]);
    }

    /**
     *  @Route("/twig", name="first_twig")
     */
    public function firstTwig()
    {
        return $this->render(
        'Hello/firstTwig.html.twig',['title' => __FUNCTION__,]
    );

    }

}

