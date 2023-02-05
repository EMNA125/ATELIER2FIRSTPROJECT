<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }
    
    #[Route('/welcome/{name}')]
    public function showteacher($name):Response
    {
        return new Response('bonjour'.'  '.$name);
        

    }
    #[Route('/hi')]

    public function showhtml():Response
    {
        return $this->render('showTeacher.html.twig');
        

    
    }
    

    #[Route('/hi/student')]

    public function toindex():Response
{
  return $this->forward(controller:'App\Controller\StudentController::index');

   

     
}
}
