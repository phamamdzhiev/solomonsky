<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

get('/', 'index.php');
get('/holidays', 'views/holidays.php');
get('/about-us', 'views/about-us.php');
get('/contacts', 'views/contacts.php');
get('/documents', 'views/documents.php');
get('/terms', 'views/terms.php');
any('/404','views/404.php');
