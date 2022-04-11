<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    // public function number(): Response
    // {
    //     $number = random_int(0, 100);

    //     return new Response(
    //         '<html><body>Lucky number: '.$number.'</body></html>'
    //     );
    // }
    
    #[Route('/lucky/number', name: 'action')]
    public function number() : Response
    {
        $number = random_int(0, 100);
        return $this->render('lucky/number.html.twig', [
            'number' => $number
        ]);
    }
    
    #[Route('/')]
    public function index() : Response
    {
        return $this->render('index.html.twig', []);
    }
}
