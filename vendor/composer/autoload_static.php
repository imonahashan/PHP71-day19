<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f9615c6b572383a21f01b0a3b26a246
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f9615c6b572383a21f01b0a3b26a246::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f9615c6b572383a21f01b0a3b26a246::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
