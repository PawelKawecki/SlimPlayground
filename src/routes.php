<?php
// Routes

$app->get('/test', function ($request, $response, $args) {
    $model = new \App\Models\Image();

    dump($model->run());
    dump(\App\Models\Image::all());
    return $this->renderer->render($response, 'index.phtml', $args);
});


$app->get('/[{name}]', function ($request, $response, $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});


