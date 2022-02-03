<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff0f487011de197468961fa672ecc7a8
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Eleve\\Github3\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Eleve\\Github3\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitff0f487011de197468961fa672ecc7a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff0f487011de197468961fa672ecc7a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitff0f487011de197468961fa672ecc7a8::$classMap;

        }, null, ClassLoader::class);
    }
}
