<?php
    if (DB_HOST == "localhost")
    {
        define("DOMAIN", SITE_DOMAIN.SITE_DIR);
        define("INC_DOMAIN", $_SERVER['DOCUMENT_ROOT'] . SITE_DIR);
    }
    else
    {
        define("DOMAIN", $_SERVER['DOCUMENT_ROOT']);
        define("INC_DOMAIN", $_SERVER['DOCUMENT_ROOT']);
    }

    // Link / Pages
    const PAGES = array(
        'home' => DOMAIN . '/index.php',
        'login' => DOMAIN . '/login.php',
        'signup' => DOMAIN . '/signup.php'
    );

    // Includes
    const INCLUDES = array(
        'connection' => INC_DOMAIN . '/include/connection.php',
        'main-function' => INC_DOMAIN . '/include/main-function.php',
        'header-template' => INC_DOMAIN . '/template/header.php',
        'footer-template' => INC_DOMAIN . '/template/footer.php',
        'home-header-template' => INC_DOMAIN . '/template/home-header.php',
        'global-header-template' => INC_DOMAIN . '/template/global-header.php',
        'login-signup-template' => INC_DOMAIN . '/template/login-signup-template.php'
    );

    // Resources
    const CSS = array(
        'styles.css' => DOMAIN . '/css/styles.css'
    );

    const JS = array(
    );

    const IMG = array(
        '1' =>  DOMAIN . '/img/1.jpg',
        '2' =>  DOMAIN . '/img/2.jpg',
        '3' =>  DOMAIN . '/img/3.jpg',
        '4' =>  DOMAIN . '/img/4.jpg',
        '5' =>  DOMAIN . '/img/5.jpg',
        '6' =>  DOMAIN . '/img/6.jpg',
        '7' =>  DOMAIN . '/img/7.jpg',
        '8' =>  DOMAIN . '/img/8.jpg',
        '9' =>  DOMAIN . '/img/9.jpg',
        '10' =>  DOMAIN . '/img/10.jpg',
        '11' =>  DOMAIN . '/img/11.jpg',
        '12' =>  DOMAIN . '/img/12.jpg',
        '13' =>  DOMAIN . '/img/13.jpg',
        '14' =>  DOMAIN . '/img/14.jpg',
        '15' =>  DOMAIN . '/img/15.jpg',
        '16' =>  DOMAIN . '/img/16.jpg',
        '17' =>  DOMAIN . '/img/17.jpg',
        '18' =>  DOMAIN . '/img/18.jpg',
        '19' =>  DOMAIN . '/img/19.jpg',
        '20' =>  DOMAIN . '/img/20.jpg',
        'ins' =>  DOMAIN . '/img/ins.png',
        'tw' =>  DOMAIN . '/img/Tw.png',
        'fb' =>  DOMAIN . '/img/FB.png'
    );

    const DIR = array(
        'uploads' => DOMAIN . '/uploads/',
        'files' => DOMAIN . '/uploads/files/',
        'picture' => DOMAIN . '/uploads/picture/'
    );

    const INC_DIR = array(
        'uploads' => INC_DOMAIN . '/uploads/',
        'files' => INC_DOMAIN . '/uploads/files/',
        'picture' => INC_DOMAIN . '/uploads/picture/'
    );