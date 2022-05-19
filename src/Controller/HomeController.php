<?php

namespace App\Controller;

use App\Entity\Contacts;
use App\Repository\ContactsRepository;

use App\Entity\Messages;
use App\Repository\MessagesRepository;

use App\Entity\PropertySearch;
use App\Form\PropertySearchType;
use App\Entity\ContactsSearch;
use App\Form\ContactsSearchType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * Index de l'application // Liste des Messages 
     * @param MessagesRepository $messagesRepository
     * @Route("/", name="accueil_index")
     * @Route("/accueil", name="accueil")
     * @return void
     */
    public function index(MessagesRepository $messagesRepository): Response
    {
        return $this->render('home/index2.html.twig', [
             'messages' => $messagesRepository->findAll(),

        ]);
    }


     /**
     * A Propos de l'application
     * @param MessagesRepository $messagesRepository
     * @Route("/about", name="about_index")
     */
    public function about(MessagesRepository $messagesRepository): Response
    {
        $messages = $MessagesRepository->findMessagesAbout();
        return $this->render('home/about.html.twig', [
            'messages' => $messages,

        ]);
    }

     /**
     * Tous les messages
     * @param MessagesRepository $messagesRepository
     * @Route("/listesMessages", name="listesMessages_index")
     */
    public function listesMessages(MessagesRepository $messagesRepository): Response
    {
        $messages = $messagesRepository->findListesMessages();
        return $this->render('home/listesMessages.html.twig', [
            'messages' => $messages,
        ]);
    }


     /**
     * @Route("/search", name="search_accueil")
     */
    public function search(MessagesRepository $messagesRepository, Request $request): Response
    {
        $propertySearch = new PropertySearch();
        $form_search = $this->createForm(PropertySearchType::class,$propertySearch);
        $form_search->handleRequest($request);
        
        //J'initialise A tableau des messages, 
        $messages = [];
        
        if($form_search->isSubmitted() && $form_search->isValid()) {
            $titre = $propertySearch->getTitre();   
                if ($titre!="") 
                //si on a fourni un nom d'message on affiche tous les messages ayant ce nom
                $messages= $messagesRepository->findBy(['titre' => $titre] );
                else   
                // si aucun nom n'est fourni, j'affiche tous les messages
            // $messages = $messagesRepository->findMessages();
            $messages = $messagesRepository->findAll();
        }

        //$messages = $messagesRepository->findMessages();
        
        return $this->render('home/search_index.html.twig', [
            'controller_name' => 'HomeController',
        'messages' => $messages,
        'form_search' => $form_search->createView(),
        ]);
    }

    

    /**
    * @Route("/searchMessagesLu", name="searchMessagesLu_index")
    * Method({"GET", "POST"})
    */

    public function searchMessagesLu(MessagesRepository $messagesRepository,Request $request) {

      $contactsSearch = new ContactsSearch();
      $form_search = $this->createForm(ContactsSearchType::class, $contactsSearch);
      $form_search->handleRequest($request);

      $messages = [];

      if($form_search->isSubmitted() && $form_search->isValid()) {
        $contacts = $contactsSearch->getContacts();
       
        if ($contacts!="") 
        {
          $messages= $contacts->getMessages();
        }
        else   
          $messages= $messagesRepository->findAll();
        }
      
      return $this->render('home/index.html.twig',[
          'form_search' => $form_search->createView(),
          'messages' => $messages]);
  }
  
   
    }
