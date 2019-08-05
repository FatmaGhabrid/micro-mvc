<?php

/**
 * athor: fatma
 * Autoload Classes
 */

const CLASSES_SOURCES = [
    '/src',
    '/src/model',
    '/src/controller'
];

function autoloadClass($class)
{

    $sources = array_map(function ($folder) use ($class) {

        return __DIR__ . $folder . '/' . $class . '.php';
    }, CLASSES_SOURCES);

    foreach ($sources as $s) {

        if (file_exists($s)) {
            require_once($s);
        }
    }
}

spl_autoload_register('autoloadClass');

/**
 * Exemples de routes:
 *
 * /index.php?model=ouvrages&method=list
 * /index.php?model=ouvrages&method=read&id=3
 * /index.php?model=ouvrages&method=new
 * /index.php?model=ouvrages&method=edit&id=3
 * /index.php?model=ouvrages&method=delete&id=3
 */


switch ($_GET['model']) {
    //SwitchCase pour le suscriber:
    case 'subscriber':
    switch($_GET['method']) {

        case 'list':
    SubscriberController::list();
            break;

        case 'read':
        SubscriberController::read( intval( $_GET['id'] ) );
            break;

        case 'new':
        SubscriberController::new($_POST);
            break;

        case 'edit':
        SubscriberController::edit($_GET['id']);
            break;

        case 'delete':
        SubscriberController::delete($_GET['id']);
            break;
    }
    break;


        //SwitchCase pour le suscriber_book:
    case 'subscriber_book':
    switch($_GET['method']) {

        case 'list':
        SubscriberBookController::list();
            break;

        case 'read':
        SubscriberBookController::read( intval( $_GET['id'] ) );
            break;

        case 'new':
        SubscriberBookController::new($_POST);
            break;

        case 'delete':
        SubscriberBookController::delete($_GET['id']);
            break;
    }
    break;

        //SwitchCase pour le book:
    case 'book':
            switch($_GET['method']) {

                case 'list':
                    BookController::list();
                    break;

                case 'read':
                    BookController::read( intval( $_GET['id'] ) );
                    break;

                case 'new':
                    BookController::new($_POST);
                    break;

                case 'edit':
                    BookController::edit($_GET['id']);
                    break;

                case 'delete':
                    BookController::delete($_GET['id']);
                    break;
            }
        break;
    default:
        # code...
        break;
}




