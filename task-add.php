<?php 

 if(isset($_POST['name'])){

    $name =  $_POST['name'];
    $description = $_POST['description'];
    $query = 'INSERT into tareas (nombre, descripcion) VALUES 
    ('$name','$description');';

 }

?>