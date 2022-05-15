<?php

namespace App\Controller;

use App\Entity\Medias;
use App\Form\MediasType;

//use Symfony\Component\Mime\Medias;

use App\Repository\MediasRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/medias")
 */
class MediasController extends AbstractController
{
    /**
     * @Route("/", name="medias_index")
     */
    public function index(MediasRepository $mediasRepository): Response
    {
        return $this->render('medias/index.html.twig', [
            'medias' => $mediasRepository->findAll(),
        ]);
    }

/**
     * @Route("/recherchesMedias/{id}", name="rechercheMedias_index", methods={"GET","POST"})
     */
    public function rechercheMedias(MediasRepository $mediasRepository): Response
    {
        //'medias' => $medias->findBy();
    return $this->render('medias/rechercheMedias.html.twig', [
        //'id' => $medias ->getId(),
        //'medias' => $medias,
    ]);
}
    
/**
     * @Route("/formulaireMedias", name = "formulaireMedias_index", methods={"GET","POST"})
     */
    public function formulaireMedias(Request $request): Response
    {
        $medias = new Medias();
        
        $form = $this->createForm(MediasType::class, $medias);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($medias);
            $entityManager->flush();

            return $this->redirectToRoute('medias_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('medias/formulaireMedias.html.twig', [
            'medias' => $medias,
            'formMedias' => $form->createView(),
        ]);
    }

    /**
     * @Route("/nouveauMedias", name="nouveauMedias_index", methods={"GET","POST"})
     */
    public function nouveauMedias(Request $request): Response
    {
        $medias = new Medias();
        $form = $this->createForm(MediasType::class, $medias);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($medias);
            $entityManager->flush();

            return $this->redirectToRoute('medias_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('medias/nouveauMedias.html.twig', [
            'medias' => $medias,
            'formMedias' => $form->createView(),
        ]);
    }

    /**
     * @Route("/afficherMedias/{id}", name="afficherMedias_index", methods={"GET"})
     */
    public function afficherMedias(Medias $medias): Response
    {
        return $this->render('medias/afficherMedias.html.twig', [
            'medias' => $medias,
        ]);
    }

    /**
     * @Route("/modifierMedias/{id}", name="modifierMedias_index", methods={"GET","POST"})
     */
    public function modifierMedias(Request $request, Medias $medias): Response
    {
        $form = $this->createForm(MediasType::class, $medias);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$this->getDoctrine()->getManager()->flush();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($medias);
            $entityManager->flush();

            return $this->redirectToRoute('medias_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('medias/modifierMedias.html.twig', [
            'medias' => $medias,
            'formMedias' => $form->createView(),
        ]);
    }

// SUPPRESSION DES médias :
    /**
     * @Route("/supprimerMedias/{id}" , name="supprimerMedias_index", methods= {"GET","POST"})
     */
    public function supprimerMedias(Request $request, Medias $medias , EntityManagerInterface $entityManager) : Response 
    {           
            $entityManager->remove($medias);
            $entityManager->flush();
            return $this->redirectToRoute('medias_index'); 
    }

/**
     * @Route("pageAccueilGuinot", name="pageAccueilGuinot_index", methods={"GET"})
     */
    public function pageAccueilGuinot(): Response
    {
        return $this->render('medias/guinot/pageAccueilGuinot.html.twig', [
            ]);
    }

/**
     * @Route("motDuPresidentDeGuinot", name="motDuPresidentDeGuinot_index", methods={"GET"})
     */
    public function motDuPresidentDeGuinot(): Response
    {
        return $this->render('medias/guinot/motDuPresidentDeGuinot.html.twig', [
            ]);
    }

/**
     * @Route("historiqueDeGuinot", name="historiqueGuinot_index", methods={"GET"})
     */
    public function historiqueGuinot(): Response
    {
        return $this->render('medias/guinot/historiqueGuinot.html.twig', [
            ]);
    }

/**
     * @Route("introductionSurGuinot", name="introductionGuinot_index", methods={"GET"})
     */
    public function introductionGuinot(): Response
    {
        return $this->render('medias/guinot/introductionGuinot.html.twig', [
            ]);
    }

/**
     * @Route("formationMasseurGuinot", name="masseurGuinot_index", methods={"GET"})
     */
    public function masseurGuinot(): Response
    {
        return $this->render('medias/guinot/masseurGuinot.html.twig', [
            ]);
    }

/**
     * @Route("formationGuinot", name="formationGuinot_index", methods={"GET"})
     */
    public function formationGuinot(): Response
    {
        return $this->render('medias/guinot/formationGuinot.html.twig', [
            ]);
    }

/**
     * @Route("formationDeveloppeurGuinot", name="developpeurGuinot_index", methods={"GET"})
     */
    public function developpeurGuinot(): Response
    {
        return $this->render('medias/guinot/developpeurGuinot.html.twig', [
            ]);
    }

/**
     * @Route("formationConseillerGuinot", name="conseillerGuinot_index", methods={"GET"})
     */
    public function conseillerGuinot(): Response
    {
        return $this->render('medias/guinot/conseillerGuinot.html.twig', [
            ]);
    }

/**
     * @Route("temoignages", name="temoignages_index", methods={"GET"})
     */
    public function temoignages(): Response
    {
        return $this->render('medias/guinot/temoignages.html.twig', [
            ]);
    }



}
