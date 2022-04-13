<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use App\Entity\User;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController
{   
    #[Route('/', name: 'index')]
    public function index() : Response
    {
    //     return new Response(
    //         '<html><body>Hello world</body></html>'
    //     );
        return $this->render('index.html.twig', []);
    }

    #[Route('/tmp', name: 'tmp')]
    public function tmp() : Response
    {
        $user = new User();
        // $user->setSalt(md5(time())); //geen salt nodig...
        $factory = $this->get("security.encoder_factory");
        $encoder = $factory->getEncoder($user);
        $pass = $encoder->encodePassword("test", null); //geen salt
        $user->setPassword($pass);
        $user->setUsername("test");

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($user);
        $em->flush();
        
        return new Response(
            '<html><body>Gebruiker is aangemaakt</body></html>'
        );
    }
}
