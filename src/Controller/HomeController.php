<?php

namespace ExampleApp\Controller;

use ExampleApp\Library\PHPTemplateRenderer;
use Jenssegers\Blade\Blade;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

class HomeController extends BaseController
{
    public function index()
    {
        $json = file_get_contents(dirname(__DIR__).'/data.json');

        return $this->render('home.html.twig', json_decode($json, true));
    }

    public function dashboard()
    {
        return $this->render('dashboard.html.twig', []);
    }


    public function create()
    {
        return [];
    }

    public function show()
    {
        return $this->respondWithSuccess([]);
    }
}