<?php

class SubscriberBook extends AbstractDb {

    public static function findAll() {
        $bdd = self::connectDb();
        // 2. request
        $request = 'SELECT * FROM subscriberBook';

        // 3. execution de la request
        $response = $bdd->query($request);

        // 4. return des données
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

public static function findById(int $id) {
    $bdd = self::connectDb();
    $request = 'SELECT * FROM subscriberBook WHERE id = ' . $id;
    $response = $bdd->query($request);
    return $response->fetch(PDO::FETCH_ASSOC);
}

//Le create
    public static function create($params) {
    $bdd = self::connectDb();
            
    $request =$bdd->prepare( 'INSERT INTO subscriberBook (first_name,last_name) VALUES(:first_name,:last_name)');
    $request->execute(array(
    'first_name'=>$params['first_name'],
    'last_name'=>$params['last_name']
            ));
            echo 'Subscriber est ajouté ';            
        }
        
        //Le delete:
public static function delete(int $id) {
$bdd = self::connectDb();
$request = 'DELETE FROM subscriberBook WHERE id ='.$id;
$bdd->query($request);
echo'subscriberBook éffacé ';
}


}