<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31a4900b34732bae9e879b707182cf91
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31a4900b34732bae9e879b707182cf91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31a4900b34732bae9e879b707182cf91::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
