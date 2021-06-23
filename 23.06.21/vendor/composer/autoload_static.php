<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77e541fcfd99e73f62fdd2a1a5099cd5
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77e541fcfd99e73f62fdd2a1a5099cd5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77e541fcfd99e73f62fdd2a1a5099cd5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77e541fcfd99e73f62fdd2a1a5099cd5::$classMap;

        }, null, ClassLoader::class);
    }
}