<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf328c3ad49c111c6cdaffc2d6ee4938f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf328c3ad49c111c6cdaffc2d6ee4938f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf328c3ad49c111c6cdaffc2d6ee4938f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
