<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditUserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\UserType;

class Admincontroller extends AbstractController
{
    /**
     * Controller qui montre tous les users de la bdd
     * @param UserRepository $repository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    #[Route('/admin', name: 'admin.index', methods: ['GET'])]
    public function index(UserRepository $repository, PaginatorInterface $paginator, Request $request): Response
    {
        $user = $paginator->paginate(
            $repository->findAll(),
            $request->query->getInt('page', 1),
            10
        );


        return $this->render('pages/user/index.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * Controller qui permet de créer un user dans la bdd
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/user/AdminNew', 'Admin.new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $manager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $manager->persist($user);
            $manager->flush();
            // do some sort of processing
            $this->addFlash(
                'success',
                'Votre compte à été créé avec succès !'
            );

            return $this->redirectToRoute('user.index');
        }

        return $this->render('pages/user/new.html.twig',
            [
                'form' => $form->createView()
            ]);
    }
    #[Route ('/user/modif/{id}', 'user.modif' , methods: ['GET', 'POST'])]
    public function edit(User $user, Request $request, EntityManagerInterface $manager) : Response
    {

        $form = $this->createForm(EditUserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $manager->persist($user);
            $manager->flush();
            // do some sort of processing
            $this->addFlash(
                'success',
                'Le compte à été modifier avec succès !'
            );

            return $this->redirectToRoute('user.index');
        }

        return $this->render('pages/user/modif.html.twig',
            [
                'form' => $form->createView()
            ]);
    }
    #[Route('/user/delete/{id}' , 'user.delete', methods: ['GET'])]
    public function delete(EntityManagerInterface $manager , User $user) :Response
    {

        if (!$user){
            $this->addFlash(
                'warning',
                "L'user n'a pas été trouvé!"
            );
            return $this->redirectToRoute('user.index');
        }

        $manager->remove($user);
        $manager->flush();
        $this->addFlash(
            'success',
            'Le compte à été supprimé avec succès !'
        );
        return $this->redirectToRoute('user.index');
    }
}
