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
        'header-template' => INC_DOMAIN . 'template/header.php',
        'footer-template' => INC_DOMAIN . '/template/footer.php'
    );

    // Resources
    const CSS = array(
        'styles.css' => DOMAIN . '/css/styles.css'
    );

    const JS = array(
    );

    const IMG = array(
        '1' =>  DOMAIN . '/img/1.png',
        '2' =>  DOMAIN . '/img/2.png',
        '3' =>  DOMAIN . '/img/3.png',
        '4' =>  DOMAIN . '/img/4.png',
        '5' =>  DOMAIN . '/img/5.png',
        '6' =>  DOMAIN . '/img/6.png',
        '7' =>  DOMAIN . '/img/7.png',
        '8' =>  DOMAIN . '/img/8.png',
        '9' =>  DOMAIN . '/img/9.png',
        '10' =>  DOMAIN . '/img/10.png',
        '11' =>  DOMAIN . '/img/11.png'
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