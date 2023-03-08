<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\UserType;
class UserController extends AbstractController
{
    /**
     * @param UserRepository $repository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    #[Route('/user', name: 'app_user', methods: ['GET'])]
    public function index(UserRepository $repository ,PaginatorInterface $paginator, Request $request): Response
    {
        $user = $paginator->paginate(
            $repository ->findAll(),
            $request->query->getInt('page', 1),
            10
        );



        return $this->render('pages/user/index.html.twig', [
            'user' =>$user
        ]);
    }

    #[Route('/user/nouveau' , 'user.new', methods: ['GET','POST'])]
    public function new ( ) : Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        return  $this->render('pages/user/new.html.twig',
        [
            'form' => $form->createView()
        ]);
    }
}
