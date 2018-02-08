<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e2aadac8e035acbec9a1b242b453d5c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Seo\\' => 4,
        ),
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Seo\\' => 
        array (
            0 => '/',
        ),
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e2aadac8e035acbec9a1b242b453d5c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e2aadac8e035acbec9a1b242b453d5c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
