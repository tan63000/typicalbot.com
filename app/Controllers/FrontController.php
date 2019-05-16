<?php

namespace TypicalBot\Controllers;

class FrontController extends Controller
{
	public function index($request, $response)
	{
		return $this->view->render($response, 'front/home.twig');
	}
	// Legal
	public function guidelines($request, $response) {
		return $this->view->render($response, 'front/legal/guidelines.twig');
	}
}