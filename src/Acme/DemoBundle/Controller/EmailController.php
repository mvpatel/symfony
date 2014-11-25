<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class EmailController
{
    
    public function localAction($number)
    {
        return new Response('<html><body>Email Number: '.rand(1, $number).'</body></html>');
    }
    
    public function viewAction($id)
    {
        return new Response('<html><body>Email View Number: '.rand(1, $id).'</body></html>');
    }
}
