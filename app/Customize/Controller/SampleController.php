<?php

namespace Customize\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class SampleController {
    /**
     * @Method("GET")
     * @Route("/sample/index")
     * @return Response
     */
    public function index(): Response {
        return new Response("This is sample/index");
    }
}

