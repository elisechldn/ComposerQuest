<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6c9b1911d739e2b8e19d2fd6edeef78c
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

        spl_autoload_register(array('ComposerAutoloaderInit6c9b1911d739e2b8e19d2fd6edeef78c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6c9b1911d739e2b8e19d2fd6edeef78c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6c9b1911d739e2b8e19d2fd6edeef78c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
