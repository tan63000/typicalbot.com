<?php

// Front
$app->get('/', 'FrontController:index');
$app->get('/legal/guidelines', 'FrontController:guidelines');

// Demo
$app->get('/demo', 'DemoController:index');