<?php
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
        ['GET', '/articles/', 'Articles#afficher', 'articles'],
        ['POST', '/articles/', 'Articles#login', 'articles_login'],
        ['GET', '/user/', 'Users#valide', 'user_valide'],
        ['GET', '/articles/', 'article#insertion', 'article_insertion']
	);