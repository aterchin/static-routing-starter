<?php
header("Content-Type: text/html");
include '../AltoRouter.php';
$router = new AltoRouter();
$router->setBasePath('/static-routing-starter/src');

// require autoload for Twig
require_once '../vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

/* Setup the URL routing. This is production ready. */
// Main routes that non-customers see
$router->map('GET','/', 'home', 'home');
$router->map('GET','/home', 'home', 'home-home');
$router->map('GET','/contact', 'contact', 'contact');
$router->map('GET','/about', 'about', 'about');

// Special (payments, ajax processing, etc)
//$router->map('GET','/charge/[*:customer_id]/','charge.php','charge');
//$router->map('GET','/pay/[*:status]/','payment_results.php','payment-results');

// API Routes
//$router->map('GET','/api/[*:key]/[*:name]/', 'json.php', 'api');

/* Match the current request */
$match = $router->match();
/*
<h1>AltoRouter Test</h1>

<h3>Current request: </h3>
<pre>
        Target: <?php var_dump($match['target']); ?>
        Params: <?php var_dump($match['params']); ?>
        Name:   <?php var_dump($match['name']); ?>
</pre>
*/
if($match) {
  echo $twig->render($match['target'] . '.html.twig', array(
    'name' => 'Adam')
  );
}
else {
  header("HTTP/1.0 404 Not Found");
  echo $twig->render('404.html.twig', array());
}
?>