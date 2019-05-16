<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails' => true
	]
]);

$container = $app->getContainer();

$container['view'] = function($container) {
	$view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [
		'cache' => false
	]);

	// Force HTTPS
	$originalUri = $container->request->getUri();
	$uri = new \Slim\Http\Uri($originalUri->getScheme(), $originalUri->getHost(), 443, $originalUri->getPath(), $originalUri->getQuery(), $originalUri->getFragment());

	$view->addExtension(new \Slim\Views\TwigExtension(
		$container->router,
		$uri
	));

	return $view;
};

$container['FrontController'] = function($container) {
	return new \TypicalBot\Controllers\FrontController($container);
};

$container['DemoController'] = function($container) {
	return new \TypicalBot\Controllers\DemoController($container);
};

require __DIR__ . '/../app/routes.php';