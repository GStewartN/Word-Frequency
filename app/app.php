<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app["twig"]->render("word_freq.html.twig");
    });

    $app->get("/counts", function() use ($app) {
        $counter = new RepeatCounter();
        $input1 = $_GET["input1"];
        $input_check = $_GET["input_check"];
        $results = $counter->countRepeats($input1, $input_check);

        return $app["twig"]->render("counts.html.twig", array("word" => $input1, "sentence" => $input_check, "count" => $results));
    });

    return $app;
?>
