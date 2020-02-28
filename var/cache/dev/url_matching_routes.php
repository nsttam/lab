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
        '/commande' => [[['_route' => 'commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/addcommande' => [[['_route' => 'addcommande', '_controller' => 'App\\Controller\\CommandeController::createCommande'], null, null, null, false, false, null]],
        '/equipes/index' => [[['_route' => 'equipesequipe', '_controller' => 'App\\Controller\\EquipeController::index'], null, null, null, false, false, null]],
        '/equipes/addEquipe' => [[['_route' => 'equipesaddEquipe', '_controller' => 'App\\Controller\\EquipeController::addEquipe'], null, null, null, false, false, null]],
        '/first/index' => [[['_route' => 'app_first_index', '_controller' => 'App\\Controller\\FirstController::index'], null, null, null, false, false, null]],
        '/first/affichage' => [[['_route' => 'app_first_affichage', '_controller' => 'App\\Controller\\FirstController::affichage'], null, null, null, false, false, null]],
        '/first/affichageGk' => [[['_route' => 'formationGk', '_controller' => 'App\\Controller\\FirstController::formationGk'], null, null, null, false, false, null]],
        '/first/infoFormateur' => [[['_route' => 'infoFormateur', '_controller' => 'App\\Controller\\FirstController::infoFormateur'], null, null, null, false, false, null]],
        '/first/infoCandidats' => [[['_route' => 'infoCandidats', '_controller' => 'App\\Controller\\FirstController::infoCandidats'], null, null, null, false, false, null]],
        '/formation' => [[['_route' => 'formation_index', '_controller' => 'App\\Controller\\FormationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/formation/new' => [[['_route' => 'formation_new', '_controller' => 'App\\Controller\\FormationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/joueurs/add' => [[['_route' => 'joueursjoueur', '_controller' => 'App\\Controller\\JoueurController::index'], null, null, null, false, false, null]],
        '/joueurs/addJoueur' => [[['_route' => 'joueursaddJoueur', '_controller' => 'App\\Controller\\JoueurController::addJoueur'], null, null, null, false, false, null]],
        '/personne' => [[['_route' => 'personne_index', '_controller' => 'App\\Controller\\PersonneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/personne/new' => [[['_route' => 'personne_new', '_controller' => 'App\\Controller\\PersonneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit' => [[['_route' => 'produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/addproduit' => [[['_route' => 'addproduit', '_controller' => 'App\\Controller\\ProduitController::createProduit'], null, null, null, false, false, null]],
        '/listproduit' => [[['_route' => 'listproduit', '_controller' => 'App\\Controller\\ProduitController::listProduit'], null, null, null, false, false, null]],
        '/addFormProduit' => [[['_route' => 'formAjout', '_controller' => 'App\\Controller\\ProduitController::addFormProduit'], null, null, null, false, false, null]],
        '/updateInsertProduit' => [[['_route' => 'updateInsertProduit', '_controller' => 'App\\Controller\\ProduitController::updateInsertProduit'], null, null, null, false, false, null]],
        '/second' => [[['_route' => 'second', '_controller' => 'App\\Controller\\SecondController::index'], null, null, null, false, false, null]],
        '/first/userid' => [[['_route' => 'first_controller_userID_route', '_controller' => 'App\\Controller\\FirstController::userID'], null, null, null, false, false, null]],
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
                .'|/equipes/show/([^/]++)(*:191)'
                .'|/f(?'
                    .'|irst/(?'
                        .'|showDetailsCandidat/([^/]++)(*:240)'
                        .'|formation/([^/]++)/([^/]++)(*:275)'
                    .')'
                    .'|ormation/([^/]++)(?'
                        .'|(*:304)'
                        .'|/edit(*:317)'
                        .'|(*:325)'
                    .')'
                .')'
                .'|/personne/([^/]++)(?'
                    .'|(*:356)'
                    .'|/edit(*:369)'
                    .'|(*:377)'
                .')'
                .'|/showproduit/([^/]++)(*:407)'
                .'|/deleteproduit/([^/]++)(*:438)'
                .'|/updateProduit/([^/]++)(*:469)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'equipesshow', '_controller' => 'App\\Controller\\EquipeController::show'], ['id'], null, null, false, true, null]],
        240 => [[['_route' => 'showDetailsCandidat', '_controller' => 'App\\Controller\\FirstController::showDetailsCandidat'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'first_controller_formation_route', '_controller' => 'App\\Controller\\FirstController::formation'], ['formation', 'numero'], null, null, false, true, null]],
        304 => [[['_route' => 'formation_show', '_controller' => 'App\\Controller\\FormationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        317 => [[['_route' => 'formation_edit', '_controller' => 'App\\Controller\\FormationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        325 => [[['_route' => 'formation_delete', '_controller' => 'App\\Controller\\FormationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        356 => [[['_route' => 'personne_show', '_controller' => 'App\\Controller\\PersonneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => 'personne_edit', '_controller' => 'App\\Controller\\PersonneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        377 => [[['_route' => 'personne_delete', '_controller' => 'App\\Controller\\PersonneController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        407 => [[['_route' => 'showproduit', '_controller' => 'App\\Controller\\ProduitController::showProduit'], ['id'], null, null, false, true, null]],
        438 => [[['_route' => 'deleteproduit', '_controller' => 'App\\Controller\\ProduitController::deleteProduit'], ['id'], null, null, false, true, null]],
        469 => [
            [['_route' => 'updateProduit', '_controller' => 'App\\Controller\\ProduitController::updateProduit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
