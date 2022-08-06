<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @return Response
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response("My homepage");
    }

    /**
     * @param string $slug
     * @return Response
     * @Route("/questions/{slug}")
     */
    public function show(string $slug): Response
    {
        return new Response(sprintf(
           "showing question %s", ucwords(str_replace('-', ' ', $slug))
        ));
    }
}