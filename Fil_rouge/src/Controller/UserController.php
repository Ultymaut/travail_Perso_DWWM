<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
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
    #[Route('/user', name: 'user.index', methods: ['GET'])]
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

    /**
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/user/nouveau' , 'user.new', methods: ['GET','POST'])]
    public function new (Request $request, EntityManagerInterface $manager) : Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $user = $form->getData();
            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute('user.index');
        }

        return  $this->render('pages/user/new.html.twig',
        [
            'form' => $form->createView()
        ]);
    }
}
