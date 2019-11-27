<?php

require_once 'vendor/autoload.php';

use Christmas\Renderer\Web;
use Christmas\Shape\{ShapeFactory};
use Pecee\SimpleRouter\SimpleRouter;


/**
 * Simple template engine
 *
 * @param array $params
 * @return mixed
 */
function render(array $params): string
{
    $template = file_get_contents('./template.html');
    foreach ($params as $var => $value) {
        $template = str_replace('{{' . $var . '}}', $value, $template);
    }

    return $template;
}


SimpleRouter::get('/', function () {
    return render([
        'content' => 'Welcome, please click on the top buttons'
    ]);
});


SimpleRouter::get('/colorize/{type}', function ($type) {
    $shape = ShapeFactory::make($type, 'large');
    $content = (new Web($shape))->renderColorize();
    return render(['content' => $content]);
});


SimpleRouter::get('/{type}/{size}', function ($type, $size) {
    $shape = ShapeFactory::make($type, $size);
    $content = (new Web($shape))->render();
    return render(['content' => $content]);
});


SimpleRouter::start();