<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit43a910bc1c5581001e4c0338a8625ed3
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit43a910bc1c5581001e4c0338a8625ed3', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit43a910bc1c5581001e4c0338a8625ed3', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit43a910bc1c5581001e4c0338a8625ed3::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}