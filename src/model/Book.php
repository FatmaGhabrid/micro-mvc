<?php

class Book extends AbstractDb {

    public static function findAll() {

        $bdd = self::connectDb();

        // 2. request
        $request = 'SELECT * FROM book';

        // 3. execution de la request
        $response = $bdd->query($request);

        // 4. return des données
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById(int $id) {
        $bdd = self::connectDb();
        $request = 'SELECT * FROM book WHERE id = ' . $id;
        $response = $bdd->query($request);
        return $response->fetch(PDO::FETCH_ASSOC);
    }

    //Le create
    public static function create($params) {
        $bdd = self::connectDb();
                
        $request =$bdd->prepare( 'INSERT INTO book (title,author) VALUES(:title,:author)');
         $request->execute(array(
        'title'=>$params['title'],
        'author'=>$params['author']
         ));
        echo 'LIVRE ET AUTEUR AJOUTE :GOOD!';            
    }

    //Le delete:
    public static function delete(int $id) {
        $bdd = self::connectDb();
        $request = 'DELETE FROM book WHERE id ='.$id;
        $bdd->query($request);
        echo'livre éffacé ';
    }

        //Le Update:

    public static function edit($params) { 
        $bdd=self::connectDb();
        $req = $bdd->prepare( 'UPDATE book SET message="'.$_POST['title'].'"&&"'.$_POST['author'].'" WHERE id="'.$_POST['id'].'"');
        $req->execute(array($_POST['title'])&&($_POST['author']));
        echo 'Livre ET auteur a Jour ';
    }



}