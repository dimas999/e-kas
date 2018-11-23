<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcec3b5db6635bd6cbe74bb3514d381d9
{
    public static $files = array (
        '9e4824c5afbdc1482b6025ce3d4dfde8' => __DIR__ . '/..' . '/league/csv/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SMSGatewayMe\\Client\\' => 20,
        ),
        'L' => 
        array (
            'League\\Csv\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SMSGatewayMe\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/smsgatewayme/client/lib',
        ),
        'League\\Csv\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/csv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcec3b5db6635bd6cbe74bb3514d381d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcec3b5db6635bd6cbe74bb3514d381d9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}