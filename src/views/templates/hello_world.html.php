<?php
$content = [];
$content['title'] = 'Hello world from my awesome site';
$content['intro'] = '<p>This is a very crude example of templating with PHP.</p>';
$content['main'] = '';

foreach ($this->passedValues as $passedKey => $passedValue) {
    if ($passedKey == 'title') {
        $content['main'] .= '<header><h2>' . $passedValue . '</h2></header>';
    }

    if ($passedKey == 'data') {
        // Set up nav elements
        $content['main'] .= '<section><nav><ul>';
        foreach ($passedValue as $item) {
            $content['main'] .= '<li><a href="#">' . $item['name'] . '</a></li>';
        }

        $content['main'] .= '</ul></nav>';

        foreach ($passedValue as $item) {
            if (!empty($item['description'])) {
                $content['main'] .= '<article>';

                $content['main'] .= '<h1>' . $item['name'] . '</h1>';
                $content['main'] .= $item['description'];

                $content['main'] .= '</article>';
            }
        }

        $content['main'] .= '</section>';
    }
}

$content['footer'] = '<footer><p>Footer</p></footer>';

include_once $GLOBALS['layoutDir'] . '/main_layout.html.php';