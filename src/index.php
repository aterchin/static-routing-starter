<?php
header("Content-Type: text/html");
include '../AltoRouter.php';
$router = new AltoRouter();
$router->setBasePath('/static-routing-starter/src');

/* Setup the URL routing. This is production ready. */
// Main routes that non-customers see
$router->map('GET','/', 'pages/home.php', 'home');
$router->map('GET','/home', 'pages/home.php', 'home-home');
$router->map('GET','/contact', 'pages/contact.php', 'contact');
$router->map('GET','/about', 'pages/about.php', 'about');

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
  require $match['target'];
}
else {
  header("HTTP/1.0 404 Not Found");
  require 'pages/404.html';
}
?>