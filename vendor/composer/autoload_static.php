<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1be58dc6698d8a38bb168fa2735f9307
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'Comment' => __DIR__ . '/../..' . '/classes/Comment.php',
        'CommentsController' => __DIR__ . '/../..' . '/controllers/CommentsController.php',
        'ComposerAutoloaderInit1be58dc6698d8a38bb168fa2735f9307' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit1be58dc6698d8a38bb168fa2735f9307' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/classes/Request.php',
        'Router' => __DIR__ . '/../..' . '/classes/Router.php',
        'User' => __DIR__ . '/../..' . '/core/database/User.php',
        'UsersController' => __DIR__ . '/../..' . '/controllers/UsersController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit1be58dc6698d8a38bb168fa2735f9307::$classMap;

        }, null, ClassLoader::class);
    }
}