<?php

namespace App\Controller;

use App\Service\TwelveDaysService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SongController extends AbstractController
{
    #[Route('/', name: 'app_song')]
    public function index(TwelveDaysService $daysService): Response
    {
        return $this->render('song/index.html.twig', [
            'song' => $daysService,
        ]);
    }
}
