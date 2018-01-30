<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f9810b89908c48921d08de4244ee190
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
            0 => __DIR__ . '/../..' . '/Src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f9810b89908c48921d08de4244ee190::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f9810b89908c48921d08de4244ee190::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
