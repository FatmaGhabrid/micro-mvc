<?php

class SubscriberController {

public static function list() {

    // 1. Appel du Model
    $subscribers = Subscriber::findAll();

    // 2. Return/include de la view
    include( __DIR__ . '/../views/subscribers/list.php');
}

public static function read(int $id) {
    // 1. Appel du Model
    $subscriber = Subscriber::findById($id);
    // 2. Include de la lview
    include(__DIR__ . '/../views/subscribers/read.php');
}

    public static function new($params) { 
        // 1. Appel du Model
        $subscriber=Subscriber::create($params);
          // 2. Include de la lview
        include(__DIR__ . '/../views/subscribers/create.php');
    }

    public static function edit($id) {
        // 1. Appel du Model
        $subscriber=Subscriber::edit($params);
          // 2. Include de la lview
        include(__DIR__ . '/../views/subscribers/edit.php');
    }

    public static function delete($id) {
        // 1. Appel du Model
        $subscriber=Subscriber::delete($id);
          // 2. Include de la lview
    }

}