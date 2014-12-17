<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

$loader->add('Knp\Bundle', __DIR__.'/../vendor/bundles');
$loader->add('Knp\Menu', __DIR__.'/../vendor/KnpMenu/src');


AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
