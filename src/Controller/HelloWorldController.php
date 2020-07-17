<?php

namespace ExampleApp\Controller;

use ExampleApp\Library\PHPTemplateRenderer;

class HelloWorldController extends BaseController
{
    public function helloPHPView()
    {
        $templateRenderer = new PHPTemplateRenderer();

        $templateRenderer->passedValues = [
            'title' => 'Cities',
            'data' => [
                [
                    'name' => 'London',
                    'description' => '<p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
        <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>'
                ],
                [
                    'name' => 'Paris',
                    'description' => ''
                ],
                [
                    'name' => 'Tokyo',
                    'description' => ''
                ]
            ]
        ];

        $this->response->withBody($templateRenderer->render('hello_world.html.php'));

        return $this->response;
    }
}