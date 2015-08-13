<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('scrabble.html.twig');
    });

    $app->get("/results", function() use ($app){
        $results = new Scrabble;
        $outcome = $results->scrabbleScore($_GET['word_form']);

        return $app['twig']->render('results.html.twig', array('result' => $outcome));

    });

    return $app;
?>
