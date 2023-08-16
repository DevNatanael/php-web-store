<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7bd56f2deec4430ce8a7f6774ed4f140
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'core\\' => 5,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7bd56f2deec4430ce8a7f6774ed4f140::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7bd56f2deec4430ce8a7f6774ed4f140::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
