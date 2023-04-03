<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7736543f6c7946edfada88c9c8303448
{
    public static $classMap = array (
        'BookRegister' => __DIR__ . '/../..' . '/classes/BookRegister.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ConnectDB' => __DIR__ . '/../..' . '/classes/ ConnectDB.php',
        'Login' => __DIR__ . '/../..' . '/classes/Login.php',
        'ReaderData' => __DIR__ . '/../..' . '/classes/ReaderData.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7736543f6c7946edfada88c9c8303448::$classMap;

        }, null, ClassLoader::class);
    }
}
