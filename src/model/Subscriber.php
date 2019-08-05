<?php

class Subscriber extends AbstractDb {

    public static function findAll() {

        $bdd = self::connectDb();

        // 2. request
        $request = 'SELECT * FROM subscriber';

        // 3. execution de la request
        $response = $bdd->query($request);

        // 4. return des données
        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById(int $id) {

        $bdd = self::connectDb();

        $request = 'SELECT * FROM subscriber WHERE id = ' . $id;

        $response = $bdd->query($request);

        return $response->fetch(PDO::FETCH_ASSOC);
    }

    //Le create
    public static function create($params) {
                $bdd = self::connectDb();
                
                $request =$bdd->prepare( 'INSERT INTO subscriber (first_name,last_name) VALUES(:first_name,:last_name)');
                $request->execute(array(
                    'first_name'=>$params['first_name'],
                    'last_name'=>$params['last_name']
                ));
                echo 'Subscriber est ajouté ';            
            }
        
            //Le delete:
                   public static function delete(int $id) {
                   $bdd = self::connectDb();
                   $request = 'DELETE FROM subscriber WHERE id ='.$id;
                   $bdd->query($request);
                   echo'subscriber éffacé ';
            }

               //Le Update:
            public static function edit($params) { 
                $bdd=self::connectDb();
                $req = $bdd->prepare( 'UPDATE subscriber SET message="'.$_POST['first_name'].'"&&"'.$_POST['last_name'].'" WHERE id="'.$_POST['id'].'"');
                $req->execute(array($_POST['first_name'])&&($_POST['last_name']));
                echo 'First_name et last_name mise à Jour ';
            }


            





}