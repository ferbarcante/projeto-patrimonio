<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit651b1dfc2df222c16f04575419f6192a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit651b1dfc2df222c16f04575419f6192a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit651b1dfc2df222c16f04575419f6192a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit651b1dfc2df222c16f04575419f6192a::$classMap;

        }, null, ClassLoader::class);
    }
}
