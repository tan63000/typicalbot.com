<?php

// Front
$app->get('/', 'FrontController:index');
$app->get('/legal/guidelines', 'LegalController:guidelines');

// Demo
$app->get('/demo', 'DemoController:index');