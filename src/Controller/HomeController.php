<?php
 namespace App\Controller;

 use Symfony\Component\Routing\Annotation\Route;
 use Symfony\Component\HttpFoundation\dd;

 class HomeController
 {
    #[Route('/')]
    public function numbers()
    {
        dd(rand(0, 50));
    }
 }