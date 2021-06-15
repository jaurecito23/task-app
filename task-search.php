<?php

    require "database.php";

    $search = "";

    if(isset($_POST['search'])){

        $search = $_POST['search'];

    }

    if(!empty($search)){
            $query = "SELECT * FROM tareas WHERE nombre LIKE '$search%'";

            $result = mysqli_query($db, $query);

            if(!$result){

                die('Error de Consulta'. mysqli_error($db));

            }

            $json = array();

            while($row = mysqli_fetch_array($result)){

                    $json[] = array(

                            'name' => $row['nombre'],
                            'description'=> $row['descripcion'],
                            'id'=> $row['id']

                    );

            }


            $jsonstring = json_encode($json);

            echo $jsonstring;


    }




?>