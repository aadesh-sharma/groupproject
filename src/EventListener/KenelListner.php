<?php

 namespace App\EventListener;
 use Symfony\Component\HttpKernel\Event\ExceptionEvent;
 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\HttpFoundation\RedirectResponse;
 use Symfony\Component\Routing\Annotation\Route;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 
 use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class KernelListener extends AbstractController
{
    public function onKernelException()
    {
      die("Page 404 Not Found...");
       
       //return new RedirectResponse('http://localhost:8000');
    
    }
}

?>