<?php

namespace App\Controller;

use App\Entity\Aanbod;
use App\Form\AanbodType;
use App\Repository\AanbodRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/aanbod")
 */
class AanbodController extends AbstractController
{
    /**
     * @Route("/", name="aanbod_index", methods="GET")
     */
    public function index(AanbodRepository $aanbodRepository): Response
    {
        return $this->render('aanbod/index.html.twig', ['aanbods' => $aanbodRepository->findAll()]);
    }

    /**
     * @Route("/new", name="aanbod_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $aanbod = new Aanbod();
        $form = $this->createForm(AanbodType::class, $aanbod);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($aanbod);
            $em->flush();

            return $this->redirectToRoute('aanbod_index');
        }

        return $this->render('aanbod/new.html.twig', [
            'aanbod' => $aanbod,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}", name="aanbod_show", methods="GET")
     */
    public function show(Aanbod $aanbod): Response
    {
        return $this->render('aanbod/show.html.twig', ['aanbod' => $aanbod]);
    }

    /**
     * @Route("/{slug}/edit", name="aanbod_edit", methods="GET|POST")
     */
    public function edit(Request $request, Aanbod $aanbod): Response
    {
        $form = $this->createForm(AanbodType::class, $aanbod);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('aanbod_index', ['id' => $aanbod->getId()]);
        }

        return $this->render('aanbod/edit.html.twig', [
            'aanbod' => $aanbod,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}", name="aanbod_delete", methods="DELETE")
     */
    public function delete(Request $request, Aanbod $aanbod): Response
    {
        if ($this->isCsrfTokenValid('delete'.$aanbod->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($aanbod);
            $em->flush();
        }

        return $this->redirectToRoute('aanbod_index');
    }
}
