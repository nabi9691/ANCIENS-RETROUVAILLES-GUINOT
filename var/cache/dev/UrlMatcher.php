<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admins' => [[['_route' => 'admins', '_controller' => 'App\\Controller\\AdminsController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthentificationController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthentificationController::logout'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'contacts_index', '_controller' => 'App\\Controller\\ContactsController::index'], null, null, null, true, false, null]],
        '/contacts/formulaireContacts' => [[['_route' => 'formulaireContacts_index', '_controller' => 'App\\Controller\\ContactsController::formulaireContacts'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contacts/nouveauContacts' => [[['_route' => 'nouveauContacts_index', '_controller' => 'App\\Controller\\ContactsController::nouveauContacts'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'accueil_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/mediats' => [[['_route' => 'mediats_index', '_controller' => 'App\\Controller\\MediatsController::index'], null, null, null, true, false, null]],
        '/mediats/formulaireMediats' => [[['_route' => 'formulaireMediats_index', '_controller' => 'App\\Controller\\MediatsController::formulaireMediats'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mediats/nouveauMediats' => [[['_route' => 'nouveauMediats_index', '_controller' => 'App\\Controller\\MediatsController::nouveauMediats'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mediatspageAccueilGuinot' => [[['_route' => 'pageAccueilGuinot_index', '_controller' => 'App\\Controller\\MediatsController::pageAccueilGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediatsmotDuPresidentDeGuinot' => [[['_route' => 'motDuPresidentDeGuinot_index', '_controller' => 'App\\Controller\\MediatsController::motDuPresidentDeGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediatshistorique' => [[['_route' => 'historiqueGuinot_index', '_controller' => 'App\\Controller\\MediatsController::historiqueGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediatsintroductionGuinot' => [[['_route' => 'introductionGuinot_index', '_controller' => 'App\\Controller\\MediatsController::introductionGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediatsmasseurGuinot' => [[['_route' => 'masseurGuinot_index', '_controller' => 'App\\Controller\\MediatsController::masseurGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediatsformationGuinot' => [[['_route' => 'formationGuinot_index', '_controller' => 'App\\Controller\\MediatsController::formationGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediatsdeveloppeurGuinot' => [[['_route' => 'developpeurGuinot_index', '_controller' => 'App\\Controller\\MediatsController::developpeurGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediatsconseillerGuinot' => [[['_route' => 'conseillerGuinot_index', '_controller' => 'App\\Controller\\MediatsController::conseillerGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediatstemoignage' => [[['_route' => 'temoignages_index', '_controller' => 'App\\Controller\\MediatsController::temoignages'], null, ['GET' => 0], null, false, false, null]],
        '/messages' => [[['_route' => 'message_index', '_controller' => 'App\\Controller\\MessagesController::index'], null, null, null, true, false, null]],
        '/messages/formulaireMessages' => [[['_route' => 'formulaireMessages_index', '_controller' => 'App\\Controller\\MessagesController::formulaireMessages'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messages/nouveauMessages' => [[['_route' => 'nouveauMessage_index', '_controller' => 'App\\Controller\\MessagesController::nouveauMessages'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messages/messagesEnvoyer' => [[['_route' => 'messagesEnvoyer_index', '_controller' => 'App\\Controller\\MessagesController::messageEnvoyer'], null, null, null, false, false, null]],
        '/messages/messagesRecu' => [[['_route' => 'messagesRecu_index', '_controller' => 'App\\Controller\\MessagesController::messageReçu'], null, null, null, false, false, null]],
        '/messages/listeMessagesEnvoyer' => [[['_route' => 'listeMessagesEnvoyer_index', '_controller' => 'App\\Controller\\MessagesController::listeMessagesEnvoyer'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register-admin' => [[['_route' => 'app_register_admin', '_controller' => 'App\\Controller\\RegistrationController::registerAdmin'], null, null, null, false, false, null]],
        '/register-abonner' => [[['_route' => 'app_register_abonner', '_controller' => 'App\\Controller\\RegistrationController::registerAbonner'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'utilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::index'], null, ['GET' => 0], null, false, false, null]],
        '/formulaireUtilisateur' => [[['_route' => 'formulaireUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::formulaireUtilisateur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nouvelUtilisateur' => [[['_route' => 'nouvelUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::nouvelUtilisateur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/abonner' => [
            [['_route' => 'monEspacePersonel_index', '_controller' => 'App\\Controller\\UtilisateursController::monEspacePersonnel'], null, null, null, false, false, null],
            [['_route' => 'pageAccueilEspacePerso_index', '_controller' => 'App\\Controller\\UtilisateursController::pageAccueilEspacePersonnel'], null, null, null, false, false, null],
        ],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/contacts/(?'
                    .'|afficherContacts/([^/]++)(*:207)'
                    .'|modifierContacts/([^/]++)(*:240)'
                    .'|supprimerContacts/([^/]++)(*:274)'
                .')'
                .'|/m(?'
                    .'|e(?'
                        .'|diats/(?'
                            .'|rechercheMediats/([^/]++)(*:326)'
                            .'|afficherMediats/([^/]++)(*:358)'
                            .'|modifierMediats/([^/]++)(*:390)'
                            .'|supprimerMediats/([^/]++)(*:423)'
                        .')'
                        .'|ssages/(?'
                            .'|afficherMessage/([^/]++)(*:466)'
                            .'|m(?'
                                .'|odifierMessages/([^/]++)(*:502)'
                                .'|essagesLu/([^/]++)(*:528)'
                            .')'
                            .'|supprimerMessages/([^/]++)(*:563)'
                        .')'
                    .')'
                    .'|odifierUtilisateur/([^/]++)(*:600)'
                .')'
                .'|/rechercheUtilisateur/([^/]++)(*:639)'
                .'|/afficherUtilisateur/([^/]++)(*:676)'
                .'|/supprimerUtilisateur/([^/]++)(*:714)'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:763)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:806)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        207 => [[['_route' => 'afficherContacts_index', '_controller' => 'App\\Controller\\ContactsController::afficherContacts'], ['id'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'modifierContacts_index', '_controller' => 'App\\Controller\\ContactsController::modifierContacts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        274 => [[['_route' => 'supprimerContacts_index', '_controller' => 'App\\Controller\\ContactsController::supprimerContacts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        326 => [[['_route' => 'rechercheMediats_index', '_controller' => 'App\\Controller\\MediatsController::rechercheMediats'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        358 => [[['_route' => 'afficherMediats_index', '_controller' => 'App\\Controller\\MediatsController::afficherMediats'], ['id'], ['GET' => 0], null, false, true, null]],
        390 => [[['_route' => 'modifierMediats_index', '_controller' => 'App\\Controller\\MediatsController::modifierMediats'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        423 => [[['_route' => 'supprimerMediats_index', '_controller' => 'App\\Controller\\MediatsController::supprimerMediats'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        466 => [[['_route' => 'afficherMessage_index', '_controller' => 'App\\Controller\\MessagesController::afficherMessage'], ['id'], ['GET' => 0], null, false, true, null]],
        502 => [[['_route' => 'modifierMessage_index', '_controller' => 'App\\Controller\\MessagesController::modifierMessages'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        528 => [[['_route' => 'messagesLu_index', '_controller' => 'App\\Controller\\MessagesController::messageLu'], ['id'], null, null, false, true, null]],
        563 => [[['_route' => 'supprimerMessage_index', '_controller' => 'App\\Controller\\MessagesController::supprimerMessages'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        600 => [[['_route' => 'modifierUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::modifierUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        639 => [[['_route' => 'rechercheUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::rechercheUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        676 => [[['_route' => 'afficherUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::afficherUtilisateur'], ['id'], ['GET' => 0], null, false, true, null]],
        714 => [[['_route' => 'supprimerUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::supprimerUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        763 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        806 => [
            [['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
