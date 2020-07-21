<?php

namespace ExampleApp\Controller;

use ExampleApp\Library\PHPTemplateRenderer;
use Jenssegers\Blade\Blade;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

class HelloWorldController extends BaseController
{
    public function helloPHPView()
    {
        $templateRenderer = new PHPTemplateRenderer();

        $templateRenderer->passedValues = $this->passValues();

        $this->response->withBody($templateRenderer->render('hello_world.html.php'));

        return $this->response;
    }

    public function helloTwigView()
    {
        $loader = new FilesystemLoader([$GLOBALS['viewDir'], $GLOBALS['layoutDir']]);
        $twig = new Environment($loader);

        try {
            $this->response->getBody()->write(
                $twig->render('hello_world.html.twig',
                [
                    'passed_values' => $this->passValues()
                ])
            );
        } catch (LoaderError $e) {
            $this->response->getBody()->write($e->getMessage());
        } catch (RuntimeError $e) {
            $this->response->getBody()->write($e->getMessage());
        } catch (SyntaxError $e) {
            $this->response->getBody()->write($e->getMessage());
        }

        return $this->response;
    }

    public function helloSmartyView()
    {
        $smarty = new \Smarty();
        $smarty->setTemplateDir([$GLOBALS['viewDir'], $GLOBALS['layoutDir']]);
        $smarty->setCacheDir($GLOBALS['smartyCacheDir']);
        $smarty->setCompileDir($GLOBALS['smartyCompileDir']);
        $smarty->setConfigDir($GLOBALS['smartyConfigsDir']);

        $smarty->assign('passed_values', $this->passValues());

        try {
            $this->response->getBody()->write($smarty->display('hello_world.tpl'));
        } catch (\SmartyException $e) {
            $this->response->getBody()->write($e->getMessage());
        } catch (\Exception $e) {
            $this->response->getBody()->write($e->getMessage());
        }

        return $this->response;
    }

    public function helloBladeView()
    {
        $blade = new Blade([$GLOBALS['viewDir'], $GLOBALS['layoutDir']], $GLOBALS['bladeCacheDir']);

        try {
            $this->response->getBody()->write(
                $blade->render('hello_world', ['passed_values' => $this->passValues()])
            );
        } catch (\Exception $e) {
            $this->response->getBody()->write($e->getMessage());
        }

        return $this->response;
    }

    private function passValues()
    {
        return [
            'title' => 'Cities',
            'data' => [
                [
                    'name' => 'London',
                    'description' => '<p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
        <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>',
                    'url' => '#'
                ],
                [
                    'name' => 'Paris',
                    'description' => '',
                    'url' => '#'
                ],
                [
                    'name' => 'Tokyo',
                    'description' => '',
                    'url' => '#'
                ]
            ]
        ];
    }
}