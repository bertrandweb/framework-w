<?php
	
	$w_routes = array
    (
		['GET', '/User/inscription', 'utilisateur#inscription', 'utilisateur_inscription'],
        ['GET', '/User/connexion', 'utilisateur#connexion', 'utilisateur_connexion'],
        ['GET', '/User/deconnexion', 'utilisateur#deconnexion', 'utilisateur_deconnexion'],
	    ['GET', '/article/afficher', 'article#display', 'article_display'],
        ['GET', '/article/create', 'article#create', 'article_create' ],
        ['GET', '/article/edit/[i:id]', 'article#edit', 'article#edit'],
    );