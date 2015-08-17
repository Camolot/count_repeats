<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Count.php";

    session_start();

    if (empty($_SESSION['count'])) {

      $_SESSION["count"] = array();
    }

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register (new Silex\Provider|TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

    app->get("/", function() use ($app){
      return $app['twig']-render(count_form.html.twig);
    });

    $app->post('/result', function() use ($app) {

    return $app;
?>
