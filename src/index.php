<?php
header("Content-Type: text/html");

// require autoload for Twig/Symfony components
require_once '../vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

// get config
use Symfony\Component\Yaml\Yaml;
$config = Yaml::parse(file_get_contents('../config.yml'));

include '../AltoRouter.php';
$router = new AltoRouter();

// set root directory for route URLs
$root = $config['use_host'] ? '' : '/' . $config['basedir'] . '/src';
$router->setBasePath($root);

/**
 * URL routes array
 *
 * route_name is array key
 */
$routes = array(
  'home' => array(
    'path' => '/',
    'template' => 'home',
    'title' => 'Homepage'
  ),
  'home_home' => array(
    'path' => '/home',
    'template' => 'home',
    'title' => 'Homepage'
  ),
  'about' => array(
    'path' => '/about',
    'template' => 'about',
    'title' => 'About'
  ),
  'contact' => array(
    'path' => '/contact',
    'template' => 'contact',
    'title' => 'Contact'
  )
);

foreach ($routes as $name => $route) {
  $router->map('GET', $route['path'], $route['template'], $name);
}

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
  $name = $match['name'];
  echo $twig->render($match['target'] . '.html.twig', array(
    'title' => $routes[$name]['title'])
  );
}
else {
  header("HTTP/1.0 404 Not Found");
  echo $twig->render('404.html.twig', array('title' => 'Not Found'));
}
?>