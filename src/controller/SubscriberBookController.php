<?php

class SubscriberBookController {

    public static function list() {

        // 1. Appel du Model
        $subscribersBook = SubscriberBook::findAll();
        // 2. Return/include de la view
        include( __DIR__ . '/../views/subscribersBook/list.php');
    }

    public static function read(int $id) {
        // 1. Appel du Model
        $subscriberBook = SubscriberBook::findById($id);
        // 2. Include de la lview
        include(__DIR__ . '/../views/subscribersBook/read.php');
    }

    public static function delete($id) {
        // 1. Appel du Model
        $subscriberBook=SubscriberBook::delete($id);
          // 2. Include de la lview
    }

}