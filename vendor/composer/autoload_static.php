<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a0ec1602455cf601ca5e10ec6bda4b0
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'r' => 
        array (
            'routes\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'routes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a0ec1602455cf601ca5e10ec6bda4b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a0ec1602455cf601ca5e10ec6bda4b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5a0ec1602455cf601ca5e10ec6bda4b0::$classMap;

        }, null, ClassLoader::class);
    }
}
