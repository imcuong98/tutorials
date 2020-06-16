<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26405b96ce7f5beee0557f8f8c329e84
{
    public static $files = array (
        '50e7b3f86bffe096b1d2c3244a6855fd' => __DIR__ . '/..' . '/meta-box/meta-box/meta-box.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26405b96ce7f5beee0557f8f8c329e84::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26405b96ce7f5beee0557f8f8c329e84::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}