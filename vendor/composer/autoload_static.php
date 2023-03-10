<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15f647c2d1ed9b4e870d4a6870f94495
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cristian93\\ApiOrders\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cristian93\\ApiOrders\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15f647c2d1ed9b4e870d4a6870f94495::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15f647c2d1ed9b4e870d4a6870f94495::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15f647c2d1ed9b4e870d4a6870f94495::$classMap;

        }, null, ClassLoader::class);
    }
}
