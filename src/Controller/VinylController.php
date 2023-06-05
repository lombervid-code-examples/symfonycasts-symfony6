<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/')]
    public function homePage(): Response
    {
        return new Response('Title: Viva la vida');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = 'Gender: ' . u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'All Genders';
        }

        return new Response($title);
    }
}
