<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

define("PAGE_LANG", "fr");
define("PAGE_CHARSET", "utf-8");

// Config Module article
define("DEFAULT_MODULE", "article");
define("DEFAULT_ACTION", "index");
define("PAGINATION_ARTICLES", 5);

define("PAGINATION_ARTICLES_ADMIN", 50);
define("PAGINATION_COMMENTS", 5);

// Config Module user
define("PAGINATION_USERS", 5);

// Config user
define("USER_ADMIN", 1);
define("USER_LAMBDA", 0);

// Sécu mp session
define("SALT", "LPMGFTRTHRDZ");

// Nombre d'articles par catégorie (avant reload)
define("ARTICLES_PER_CAT", 6);

// Environement
define("ENV", "DEV");

// Mail admin
define("MAIL_EXP", "tess.tilmont@eemi.com");
define("NAME_EXP", "Seysam");