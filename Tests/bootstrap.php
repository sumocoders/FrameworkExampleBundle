<?php
$loader = include __DIR__ . '/../vendor/autoload.php';

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

spl_autoload_register(
    function ($class) {
        if (0 === strpos($class, 'SumoCoders\\FrameworkExampleBundle\\')) {
            $path = __DIR__ . '/../' . implode('/', array_slice(explode('\\', $class), 2)) . '.php';
            if (!stream_resolve_include_path($path)) {
                return false;
            }
            require_once $path;

            return true;
        }
    }
);
