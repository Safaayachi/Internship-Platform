<?php // src/Controller/SignUp.php
namespace  App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class SignUpController
{
    /**
     *  @Route("/number")
     */

    public function number()
    {
       $number = random_int(0, 100);
        
        return new Response(
            '<html><body><h1>Ceci est une premiere page Symfony number:'.$number.'</h1></body></html>'
        );
    }
}
?>