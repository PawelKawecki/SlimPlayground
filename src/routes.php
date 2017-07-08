<?php
// Routes

$app->get('/files', function ($request, $response, $args) {
    $model = new \App\Models\Image();

    dump($model->run());
    dump(\App\Models\Image::all());
    return $this->renderer->render($response, 'list.phtml', $args);
});


$app->get('/login', function ($request, $response, $args) {
//    var_dump($_SERVER['DOCUMENT_ROOT']);
    return $this->renderer->render($response, 'login.phtml');
});

$app->get('/[{name}]', function ($request, $response, $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});


