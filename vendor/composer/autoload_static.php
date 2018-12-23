<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b7be12c477595bb51cde1d40679cf92
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b7be12c477595bb51cde1d40679cf92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b7be12c477595bb51cde1d40679cf92::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
